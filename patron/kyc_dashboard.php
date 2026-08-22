<?php
/**
 * PATRON - KYC Dashboard
 * Shows Directors/Partners from persons_new table linked to clients
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'KYC Dashboard';

// Check if kyc_status column exists in persons_new, if not create it
try {
    $columns = dbFetchAll("SHOW COLUMNS FROM persons_new LIKE 'kyc_status'");
    if (empty($columns)) {
        dbExecute("ALTER TABLE persons_new ADD COLUMN kyc_status VARCHAR(50) DEFAULT NULL");
    }
    $columns2 = dbFetchAll("SHOW COLUMNS FROM persons_new LIKE 'kyc_verified_at'");
    if (empty($columns2)) {
        dbExecute("ALTER TABLE persons_new ADD COLUMN kyc_verified_at DATETIME DEFAULT NULL");
    }
} catch (Exception $e) {
    // Continue anyway
}

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    if ($action === 'delete_kyc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        if ($personId) {
            dbExecute("UPDATE persons_new SET kyc_status = 'DELETED', kyc_verified_at = NULL WHERE id = ?", [$personId]);
            setFlash('success', 'KYC entry deleted.');
        }
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'delete_all_kyc') {
        dbExecute("UPDATE persons_new SET kyc_status = 'DELETED', kyc_verified_at = NULL 
                   WHERE deleted_at IS NULL 
                   AND id IN (SELECT DISTINCT person_id FROM client_persons WHERE role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER'))");
        setFlash('success', 'All KYC entries deleted.');
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'verify_kyc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        if ($personId) {
            dbExecute("UPDATE persons_new SET kyc_status = 'VERIFIED', kyc_verified_at = NOW() WHERE id = ?", [$personId]);
            setFlash('success', 'KYC marked as verified.');
        }
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'verify_all_kyc') {
        dbExecute("UPDATE persons_new SET kyc_status = 'VERIFIED', kyc_verified_at = NOW() 
                   WHERE deleted_at IS NULL 
                   AND (kyc_status IS NULL OR kyc_status = 'PENDING' OR kyc_status = '')
                   AND id IN (SELECT DISTINCT person_id FROM client_persons WHERE role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER'))");
        setFlash('success', 'All pending KYC marked as verified.');
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'mark_pending') {
        $personId = (int)($_POST['person_id'] ?? 0);
        if ($personId) {
            dbExecute("UPDATE persons_new SET kyc_status = 'PENDING', kyc_verified_at = NULL WHERE id = ?", [$personId]);
            setFlash('success', 'KYC marked as pending.');
        }
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'bulk_delete') {
        $ids = $_POST['selected_ids'] ?? [];
        if (!empty($ids) && is_array($ids)) {
            $ids = array_map('intval', $ids);
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            dbExecute("UPDATE persons_new SET kyc_status = 'DELETED', kyc_verified_at = NULL WHERE id IN ($placeholders)", $ids);
            setFlash('success', count($ids) . ' KYC entries deleted.');
        }
        header('Location: kyc_dashboard.php');
        exit;
    }
    
    if ($action === 'bulk_verify') {
        $ids = $_POST['selected_ids'] ?? [];
        if (!empty($ids) && is_array($ids)) {
            $ids = array_map('intval', $ids);
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            dbExecute("UPDATE persons_new SET kyc_status = 'VERIFIED', kyc_verified_at = NOW() WHERE id IN ($placeholders)", $ids);
            setFlash('success', count($ids) . ' KYC entries verified.');
        }
        header('Location: kyc_dashboard.php');
        exit;
    }
}

// Filters
$filterStatus = sanitize($_GET['status'] ?? '');
$filterRole = sanitize($_GET['role'] ?? '');
$filterClient = (int)($_GET['client_id'] ?? 0);
$search = sanitize($_GET['q'] ?? '');

// Base WHERE - only Directors/Partners linked to clients
$where = "p.deleted_at IS NULL AND (p.kyc_status IS NULL OR p.kyc_status != 'DELETED')";
$where .= " AND cp.role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER')";

if ($filterStatus === 'pending') {
    $where .= " AND (p.kyc_status IS NULL OR p.kyc_status = 'PENDING' OR p.kyc_status = '')";
} elseif ($filterStatus === 'verified') {
    $where .= " AND p.kyc_status = 'VERIFIED'";
}
if ($filterRole) {
    $where .= " AND cp.role_type = '" . addslashes($filterRole) . "'";
}
if ($filterClient) {
    $where .= " AND cp.client_id = " . $filterClient;
}
if ($search) {
    $searchEsc = addslashes($search);
    $where .= " AND (p.full_name LIKE '%$searchEsc%' OR p.pan_number LIKE '%$searchEsc%' OR c.name LIKE '%$searchEsc%')";
}

// Get persons who are Directors/Partners
$persons = dbFetchAll("
    SELECT DISTINCT 
        p.id, p.full_name, p.pan_number, p.mobile, p.email, p.kyc_status, p.kyc_verified_at,
        GROUP_CONCAT(DISTINCT cp.role_type ORDER BY cp.role_type SEPARATOR ', ') as roles,
        GROUP_CONCAT(DISTINCT c.name ORDER BY c.name SEPARATOR ', ') as linked_clients,
        COUNT(DISTINCT cp.client_id) as client_count
    FROM persons_new p
    INNER JOIN client_persons cp ON p.id = cp.person_id
    INNER JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    WHERE $where
    GROUP BY p.id
    ORDER BY 
        CASE WHEN p.kyc_status IS NULL OR p.kyc_status = 'PENDING' OR p.kyc_status = '' THEN 0 ELSE 1 END,
        p.full_name
    LIMIT 500
") ?: [];

// Stats
$totalPersons = dbFetchOne("
    SELECT COUNT(DISTINCT p.id) as cnt 
    FROM persons_new p
    INNER JOIN client_persons cp ON p.id = cp.person_id
    WHERE p.deleted_at IS NULL 
    AND (p.kyc_status IS NULL OR p.kyc_status != 'DELETED')
    AND cp.role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER')
")['cnt'] ?? 0;

$pendingKyc = dbFetchOne("
    SELECT COUNT(DISTINCT p.id) as cnt 
    FROM persons_new p
    INNER JOIN client_persons cp ON p.id = cp.person_id
    WHERE p.deleted_at IS NULL 
    AND (p.kyc_status IS NULL OR p.kyc_status = 'PENDING' OR p.kyc_status = '')
    AND cp.role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER')
")['cnt'] ?? 0;

$verifiedKyc = dbFetchOne("
    SELECT COUNT(DISTINCT p.id) as cnt 
    FROM persons_new p
    INNER JOIN client_persons cp ON p.id = cp.person_id
    WHERE p.deleted_at IS NULL 
    AND p.kyc_status = 'VERIFIED'
    AND cp.role_type IN ('DIRECTOR','PARTNER','DESIGNATED_PARTNER','SHAREHOLDER')
")['cnt'] ?? 0;

// Get clients for filter dropdown
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold"><i class="fas fa-id-card text-blue-500 mr-2"></i>KYC Dashboard</h2>
        <p class="text-gray-500 text-sm">Directors, Partners & Shareholders KYC verification</p>
    </div>
    <div class="flex gap-2">
        <button onclick="document.getElementById('verifyAllModal').classList.add('show')" class="btn bg-green-600 text-white hover:bg-green-700">
            <i class="fas fa-check-double mr-2"></i>Verify All Pending
        </button>
        <button onclick="document.getElementById('deleteAllModal').classList.add('show')" class="btn bg-red-600 text-white hover:bg-red-700">
            <i class="fas fa-trash mr-2"></i>Delete All KYC
        </button>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    <a href="kyc_dashboard.php" class="card p-4 hover:shadow-lg transition <?= !$filterStatus ? 'ring-2 ring-blue-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Directors/Partners</p>
                <p class="text-2xl font-bold"><?= number_format($totalPersons) ?></p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <i class="fas fa-users text-blue-600 text-xl"></i>
            </div>
        </div>
    </a>
    <a href="?status=pending" class="card p-4 hover:shadow-lg transition <?= $filterStatus === 'pending' ? 'ring-2 ring-amber-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">KYC Pending</p>
                <p class="text-2xl font-bold text-amber-600"><?= number_format($pendingKyc) ?></p>
            </div>
            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-amber-600 text-xl"></i>
            </div>
        </div>
    </a>
    <a href="?status=verified" class="card p-4 hover:shadow-lg transition <?= $filterStatus === 'verified' ? 'ring-2 ring-green-500' : '' ?>">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">KYC Verified</p>
                <p class="text-2xl font-bold text-green-600"><?= number_format($verifiedKyc) ?></p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <i class="fas fa-check-circle text-green-600 text-xl"></i>
            </div>
        </div>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]">
            <label class="form-label">Search</label>
            <input type="text" name="q" value="<?= htmlspecialchars($search) ?>" class="form-input" placeholder="Name, PAN or Client...">
        </div>
        <div>
            <label class="form-label">Status</label>
            <select name="status" class="form-input">
                <option value="">All</option>
                <option value="pending" <?= $filterStatus === 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="verified" <?= $filterStatus === 'verified' ? 'selected' : '' ?>>Verified</option>
            </select>
        </div>
        <div>
            <label class="form-label">Role</label>
            <select name="role" class="form-input">
                <option value="">All Roles</option>
                <option value="DIRECTOR" <?= $filterRole === 'DIRECTOR' ? 'selected' : '' ?>>Director</option>
                <option value="SHAREHOLDER" <?= $filterRole === 'SHAREHOLDER' ? 'selected' : '' ?>>Shareholder</option>
                <option value="PARTNER" <?= $filterRole === 'PARTNER' ? 'selected' : '' ?>>Partner</option>
                <option value="DESIGNATED_PARTNER" <?= $filterRole === 'DESIGNATED_PARTNER' ? 'selected' : '' ?>>Designated Partner</option>
            </select>
        </div>
        <div>
            <label class="form-label">Client</label>
            <select name="client_id" class="form-input">
                <option value="">All Clients</option>
                <?php foreach ($clients as $cl): ?>
                <option value="<?= $cl['id'] ?>" <?= $filterClient == $cl['id'] ? 'selected' : '' ?>><?= htmlspecialchars($cl['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-2"></i>Filter</button>
        <a href="kyc_dashboard.php" class="btn btn-secondary">Clear</a>
    </form>
</div>

<!-- KYC Table -->
<div class="card">
    <form method="POST" id="bulkForm">
        <div class="p-4 border-b flex items-center justify-between bg-gray-50">
            <div class="flex items-center gap-4">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" id="selectAll" class="w-4 h-4" onchange="toggleAll(this)">
                    <span class="text-sm text-gray-600">Select All</span>
                </label>
                <span class="text-sm text-gray-500"><?= count($persons) ?> records</span>
            </div>
            <div class="flex gap-2">
                <button type="submit" name="action" value="bulk_verify" class="btn bg-green-100 text-green-700 hover:bg-green-200 text-sm" onclick="return confirmBulk('verify')">
                    <i class="fas fa-check mr-1"></i>Verify Selected
                </button>
                <button type="submit" name="action" value="bulk_delete" class="btn bg-red-100 text-red-700 hover:bg-red-200 text-sm" onclick="return confirmBulk('delete')">
                    <i class="fas fa-trash mr-1"></i>Delete Selected
                </button>
            </div>
        </div>
        
        <?php if (empty($persons)): ?>
        <div class="p-12 text-center text-gray-400">
            <i class="fas fa-check-circle text-5xl mb-4"></i>
            <p class="text-lg">No records found</p>
            <p class="text-sm">No Directors/Partners matching your criteria.</p>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 text-left text-sm text-gray-600">
                    <tr>
                        <th class="p-3 w-10"></th>
                        <th class="p-3">Name</th>
                        <th class="p-3">PAN</th>
                        <th class="p-3">Role(s)</th>
                        <th class="p-3">Linked Clients</th>
                        <th class="p-3">KYC Status</th>
                        <th class="p-3">Verified At</th>
                        <th class="p-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($persons as $p): ?>
                    <?php 
                        $isPending = empty($p['kyc_status']) || $p['kyc_status'] === 'PENDING';
                        $statusClass = $isPending ? 'bg-amber-100 text-amber-700' : 'bg-green-100 text-green-700';
                        $statusText = $isPending ? 'Pending' : 'Verified';
                    ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3">
                            <input type="checkbox" name="selected_ids[]" value="<?= $p['id'] ?>" class="row-checkbox w-4 h-4">
                        </td>
                        <td class="p-3">
                            <a href="person_view.php?id=<?= $p['id'] ?>" class="font-medium text-blue-600 hover:underline">
                                <?= htmlspecialchars($p['full_name']) ?>
                            </a>
                            <?php if (!empty($p['mobile'])): ?>
                            <p class="text-xs text-gray-400"><?= htmlspecialchars($p['mobile']) ?></p>
                            <?php endif; ?>
                        </td>
                        <td class="p-3 font-mono text-sm"><?= htmlspecialchars($p['pan_number'] ?? '-') ?></td>
                        <td class="p-3">
                            <?php 
                            $roles = explode(', ', $p['roles'] ?? '');
                            foreach ($roles as $role): 
                                $roleClass = 'bg-gray-100 text-gray-700';
                                if ($role === 'DIRECTOR') $roleClass = 'bg-blue-100 text-blue-700';
                                elseif ($role === 'SHAREHOLDER') $roleClass = 'bg-purple-100 text-purple-700';
                                elseif (strpos($role, 'PARTNER') !== false) $roleClass = 'bg-green-100 text-green-700';
                            ?>
                            <span class="inline-block px-2 py-0.5 rounded text-xs font-medium <?= $roleClass ?> mb-1">
                                <?= htmlspecialchars(str_replace('_', ' ', $role)) ?>
                            </span>
                            <?php endforeach; ?>
                        </td>
                        <td class="p-3 text-sm">
                            <?php if ($p['client_count'] > 2): ?>
                            <span class="text-gray-600" title="<?= htmlspecialchars($p['linked_clients']) ?>">
                                <?= $p['client_count'] ?> clients
                            </span>
                            <?php else: ?>
                            <span class="text-gray-600"><?= htmlspecialchars($p['linked_clients'] ?? '-') ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="p-3">
                            <span class="px-2 py-1 rounded text-xs font-medium <?= $statusClass ?>">
                                <?= $statusText ?>
                            </span>
                        </td>
                        <td class="p-3 text-sm text-gray-500">
                            <?= !empty($p['kyc_verified_at']) ? date('d M Y', strtotime($p['kyc_verified_at'])) : '-' ?>
                        </td>
                        <td class="p-3">
                            <div class="flex items-center justify-center gap-1">
                                <?php if ($isPending): ?>
                                <form method="POST" class="inline">
                                    <input type="hidden" name="action" value="verify_kyc">
                                    <input type="hidden" name="person_id" value="<?= $p['id'] ?>">
                                    <button type="submit" class="p-2 text-green-600 hover:bg-green-50 rounded" title="Mark Verified">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>
                                <?php else: ?>
                                <form method="POST" class="inline">
                                    <input type="hidden" name="action" value="mark_pending">
                                    <input type="hidden" name="person_id" value="<?= $p['id'] ?>">
                                    <button type="submit" class="p-2 text-amber-600 hover:bg-amber-50 rounded" title="Mark Pending">
                                        <i class="fas fa-clock"></i>
                                    </button>
                                </form>
                                <?php endif; ?>
                                <form method="POST" class="inline" onsubmit="return confirm('Delete KYC for this person?')">
                                    <input type="hidden" name="action" value="delete_kyc">
                                    <input type="hidden" name="person_id" value="<?= $p['id'] ?>">
                                    <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded" title="Delete KYC">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </form>
</div>

<!-- Delete All Modal -->
<div id="deleteAllModal" class="modal">
    <div class="modal-content">
        <div class="p-4 border-b bg-red-50">
            <h3 class="font-bold text-red-800"><i class="fas fa-exclamation-triangle mr-2"></i>Delete All KYC Data</h3>
        </div>
        <div class="p-6">
            <p class="text-gray-600 mb-4">Are you sure you want to delete <strong>ALL KYC data</strong> for Directors/Partners?</p>
            <p class="text-red-600 font-medium"><i class="fas fa-warning mr-1"></i>This action cannot be undone!</p>
        </div>
        <div class="p-4 border-t bg-gray-50 flex justify-end gap-2">
            <button onclick="document.getElementById('deleteAllModal').classList.remove('show')" class="btn btn-secondary">Cancel</button>
            <form method="POST" class="inline">
                <input type="hidden" name="action" value="delete_all_kyc">
                <button type="submit" class="btn bg-red-600 text-white hover:bg-red-700">
                    <i class="fas fa-trash mr-2"></i>Yes, Delete All
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Verify All Modal -->
<div id="verifyAllModal" class="modal">
    <div class="modal-content">
        <div class="p-4 border-b bg-green-50">
            <h3 class="font-bold text-green-800"><i class="fas fa-check-double mr-2"></i>Verify All Pending KYC</h3>
        </div>
        <div class="p-6">
            <p class="text-gray-600 mb-4">This will mark all <strong><?= number_format($pendingKyc) ?> pending KYC</strong> entries as verified.</p>
        </div>
        <div class="p-4 border-t bg-gray-50 flex justify-end gap-2">
            <button onclick="document.getElementById('verifyAllModal').classList.remove('show')" class="btn btn-secondary">Cancel</button>
            <form method="POST" class="inline">
                <input type="hidden" name="action" value="verify_all_kyc">
                <button type="submit" class="btn bg-green-600 text-white hover:bg-green-700">
                    <i class="fas fa-check-double mr-2"></i>Yes, Verify All
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; padding: 1rem; }
.modal.show { display: flex; }
.modal-content { background: white; border-radius: 0.75rem; max-width: 500px; width: 100%; }
</style>

<script>
function toggleAll(source) {
    document.querySelectorAll('.row-checkbox').forEach(cb => cb.checked = source.checked);
}

function confirmBulk(action) {
    const checked = document.querySelectorAll('.row-checkbox:checked').length;
    if (checked === 0) {
        alert('Please select at least one record.');
        return false;
    }
    return confirm('Are you sure you want to ' + action + ' ' + checked + ' selected record(s)?');
}
</script>

<?php require_once 'includes/footer.php'; ?>
