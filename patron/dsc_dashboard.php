<?php
/**
 * PATRON - DSC Dashboard (Enhanced v3)
 * Full list view with Delete, DSC Password, Better scrolling
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'DSC Dashboard';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'update_dsc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        $dscStatus = sanitize($_POST['dsc_status'] ?? '');
        $dscExpiry = sanitize($_POST['dsc_expiry_date'] ?? '');
        $dscPassword = sanitize($_POST['dsc_password'] ?? '');
        
        if ($personId) {
            dbExecute("UPDATE persons_new SET dsc_status = ?, dsc_expiry_date = ?, dsc_password = ?, updated_at = NOW() WHERE id = ?", 
                [$dscStatus ?: null, $dscExpiry ?: null, $dscPassword ?: null, $personId]);
            setFlash('success', 'DSC details updated successfully.');
        }
        header('Location: dsc_dashboard.php'); exit;
    }
    
    if ($action === 'add_dsc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        $dscStatus = sanitize($_POST['dsc_status'] ?? 'ACTIVE');
        $dscExpiry = sanitize($_POST['dsc_expiry_date'] ?? '');
        $dscPassword = sanitize($_POST['dsc_password'] ?? '');
        
        if ($personId && $dscExpiry) {
            dbExecute("UPDATE persons_new SET dsc_status = ?, dsc_expiry_date = ?, dsc_password = ?, updated_at = NOW() WHERE id = ?", 
                [$dscStatus, $dscExpiry, $dscPassword ?: null, $personId]);
            setFlash('success', 'DSC added successfully.');
        }
        header('Location: dsc_dashboard.php'); exit;
    }
    
    if ($action === 'delete_dsc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        if ($personId) {
            dbExecute("UPDATE persons_new SET dsc_status = NULL, dsc_expiry_date = NULL, dsc_password = NULL, updated_at = NOW() WHERE id = ?", [$personId]);
            setFlash('success', 'DSC record deleted.');
        }
        header('Location: dsc_dashboard.php'); exit;
    }
    
    if ($action === 'bulk_renewal') {
        $personIds = $_POST['person_ids'] ?? [];
        $assignTo = (int)($_POST['assign_to'] ?? 0);
        $dueDate = sanitize($_POST['due_date'] ?? '');
        $priority = sanitize($_POST['priority'] ?? 'HIGH');
        
        if (!empty($personIds)) {
            $created = 0;
            $dscService = dbFetchOne("SELECT id FROM services WHERE code LIKE '%DSC%' AND deleted_at IS NULL LIMIT 1");
            if (!$dscService) {
                dbExecute("INSERT INTO services (name, code, category, base_price, is_active, created_at) VALUES ('DSC Renewal', 'DSC_RENEW', 'Registration', 1500, 1, NOW())");
                $dscService = ['id' => dbLastInsertId()];
            }
            
            foreach ($personIds as $pid) {
                $person = dbFetchOne("SELECT p.*, cp.client_id FROM persons_new p LEFT JOIN client_persons cp ON p.id = cp.person_id WHERE p.id = ? LIMIT 1", [(int)$pid]);
                if ($person && $person['client_id']) {
                    $reqNum = 'REQ-' . date('Y') . '-' . str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
                    dbExecute("INSERT INTO service_requests (request_number, client_id, service_id, person_id, status, priority, assigned_to, due_date, notes, created_by, created_at) VALUES (?, ?, ?, ?, 'NEW', ?, ?, ?, ?, ?, NOW())", 
                        [$reqNum, $person['client_id'], $dscService['id'], $pid, $priority, $assignTo ?: null, $dueDate ?: null, 'DSC Renewal - ' . $person['full_name'], $_SESSION['user_id']]);
                    $created++;
                }
            }
            setFlash('success', "$created renewal request(s) created.");
        }
        header('Location: dsc_dashboard.php'); exit;
    }
}

// Filters
$statusFilter = sanitize($_GET['status'] ?? '');
$expiryFilter = sanitize($_GET['expiry'] ?? '');
$clientFilter = (int)($_GET['client'] ?? 0);
$search = sanitize($_GET['q'] ?? '');
$today = date('Y-m-d');

// Build query
$where = ["p.deleted_at IS NULL"];
$params = [];

if ($search) {
    $where[] = "(p.full_name LIKE ? OR p.pan_number LIKE ? OR p.din LIKE ? OR c.name LIKE ?)";
    $params = array_merge($params, ["%$search%", "%$search%", "%$search%", "%$search%"]);
}
if ($clientFilter) { $where[] = "c.id = ?"; $params[] = $clientFilter; }

if ($statusFilter === 'ACTIVE') { $where[] = "p.dsc_status = 'ACTIVE' AND (p.dsc_expiry_date >= ? OR p.dsc_expiry_date IS NULL)"; $params[] = $today; }
elseif ($statusFilter === 'EXPIRED') { $where[] = "(p.dsc_status = 'EXPIRED' OR p.dsc_expiry_date < ?)"; $params[] = $today; }
elseif ($statusFilter === 'APPLIED') { $where[] = "p.dsc_status = 'APPLIED'"; }
elseif ($statusFilter === 'REQUIRED') { $where[] = "(p.dsc_status = 'REQUIRED' OR (p.dsc_status IS NULL AND cp.role_type IN ('DIRECTOR','DESIGNATED_PARTNER')))"; }

if ($expiryFilter === 'expired') { $where[] = "p.dsc_expiry_date < ?"; $params[] = $today; }
elseif ($expiryFilter === '7days') { $where[] = "p.dsc_expiry_date BETWEEN ? AND DATE_ADD(?, INTERVAL 7 DAY)"; $params[] = $today; $params[] = $today; }
elseif ($expiryFilter === '30days') { $where[] = "p.dsc_expiry_date BETWEEN ? AND DATE_ADD(?, INTERVAL 30 DAY)"; $params[] = $today; $params[] = $today; }
elseif ($expiryFilter === '60days') { $where[] = "p.dsc_expiry_date BETWEEN ? AND DATE_ADD(?, INTERVAL 60 DAY)"; $params[] = $today; $params[] = $today; }

$whereClause = implode(' AND ', $where);

// Get DSC data
$persons = dbFetchAll("
    SELECT p.id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email,
           p.dsc_status, p.dsc_expiry_date, p.dsc_password,
           GROUP_CONCAT(DISTINCT c.id) as client_ids,
           GROUP_CONCAT(DISTINCT c.name SEPARATOR ' | ') as client_names,
           GROUP_CONCAT(DISTINCT cp.role_type SEPARATOR ', ') as roles,
           MIN(c.portal_token) as portal_token,
           DATEDIFF(p.dsc_expiry_date, CURDATE()) as days_to_expiry
    FROM persons_new p
    LEFT JOIN client_persons cp ON p.id = cp.person_id AND cp.is_active = 1
    LEFT JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    WHERE $whereClause
    GROUP BY p.id
    ORDER BY CASE WHEN p.dsc_expiry_date < CURDATE() THEN 0 WHEN p.dsc_expiry_date <= DATE_ADD(CURDATE(), INTERVAL 7 DAY) THEN 1 WHEN p.dsc_expiry_date <= DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 2 ELSE 3 END, p.dsc_expiry_date ASC
", $params) ?: [];

// Stats
$stats = dbFetchOne("
    SELECT COUNT(DISTINCT p.id) as total,
           SUM(CASE WHEN p.dsc_status = 'ACTIVE' AND (p.dsc_expiry_date >= CURDATE() OR p.dsc_expiry_date IS NULL) THEN 1 ELSE 0 END) as active,
           SUM(CASE WHEN p.dsc_expiry_date < CURDATE() THEN 1 ELSE 0 END) as expired,
           SUM(CASE WHEN p.dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 1 ELSE 0 END) as expiring_30,
           SUM(CASE WHEN p.dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) THEN 1 ELSE 0 END) as expiring_7,
           SUM(CASE WHEN p.dsc_status = 'APPLIED' THEN 1 ELSE 0 END) as applied
    FROM persons_new p LEFT JOIN client_persons cp ON p.id = cp.person_id WHERE p.deleted_at IS NULL
");

$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];
$staff = dbFetchAll("SELECT id, display_name as name FROM users WHERE user_type = 'INTERNAL' AND status = 'ACTIVE' AND deleted_at IS NULL ORDER BY display_name") ?: [];
$personsNoDSC = dbFetchAll("SELECT p.id, p.full_name, c.name as client_name FROM persons_new p JOIN client_persons cp ON p.id = cp.person_id JOIN clients c ON cp.client_id = c.id WHERE p.deleted_at IS NULL AND (p.dsc_status IS NULL OR p.dsc_status IN ('','REQUIRED')) AND cp.role_type IN ('DIRECTOR','DESIGNATED_PARTNER') GROUP BY p.id ORDER BY p.full_name") ?: [];

require_once 'includes/header.php';
?>

<style>
.stat-card{transition:all .2s;cursor:pointer}.stat-card:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.1)}
.urgency-expired{background:#FEF2F2!important}.urgency-critical{background:#FEF3C7!important}.urgency-warning{background:#FFFBEB!important}
.badge-expired{background:#DC2626;color:#fff}.badge-critical{background:#F59E0B;color:#fff}.badge-warning{background:#FBBF24;color:#78350F}
.badge-ok{background:#10B981;color:#fff}.badge-applied{background:#8B5CF6;color:#fff}.badge-required{background:#6B7280;color:#fff}
.modal{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:50}.modal.show{display:flex;align-items:center;justify-content:center}
.modal-box{background:#fff;border-radius:1rem;max-width:600px;width:95%;max-height:90vh;overflow-y:auto}
.table-wrapper{max-height:calc(100vh - 280px);overflow-y:auto}
.table-wrapper table{border-collapse:separate;border-spacing:0}
.table-wrapper thead{position:sticky;top:0;z-index:10}
.table-wrapper thead th{background:#F9FAFB;box-shadow:0 2px 4px rgba(0,0,0,0.08)}
.password-cell{font-family:monospace;font-size:0.7rem}
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-4">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-certificate text-blue-600 mr-2"></i>DSC Dashboard</h1>
        <p class="text-gray-500 text-sm">Digital Signature Certificate Management</p>
    </div>
    <div class="flex gap-2">
        <button onclick="document.getElementById('addModal').classList.add('show')" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add DSC</button>
        <button onclick="openBulkModal()" id="bulkBtn" class="btn bg-amber-500 text-white hover:bg-amber-600" disabled><i class="fas fa-sync mr-2"></i>Bulk Renewal (<span id="selectedCount">0</span>)</button>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-3 md:grid-cols-6 gap-2 mb-4">
    <a href="?" class="stat-card card p-3 text-center <?= !$statusFilter && !$expiryFilter ? 'ring-2 ring-blue-500' : '' ?>"><p class="text-xl font-bold text-gray-800"><?= $stats['total'] ?? 0 ?></p><p class="text-xs text-gray-500">Total</p></a>
    <a href="?status=ACTIVE" class="stat-card card p-3 text-center <?= $statusFilter === 'ACTIVE' ? 'ring-2 ring-green-500' : '' ?>"><p class="text-xl font-bold text-green-600"><?= $stats['active'] ?? 0 ?></p><p class="text-xs text-gray-500">Active</p></a>
    <a href="?expiry=expired" class="stat-card card p-3 text-center <?= $expiryFilter === 'expired' ? 'ring-2 ring-red-500' : '' ?>"><p class="text-xl font-bold text-red-600"><?= $stats['expired'] ?? 0 ?></p><p class="text-xs text-gray-500">Expired</p></a>
    <a href="?expiry=7days" class="stat-card card p-3 text-center <?= $expiryFilter === '7days' ? 'ring-2 ring-orange-500' : '' ?>"><p class="text-xl font-bold text-orange-600"><?= $stats['expiring_7'] ?? 0 ?></p><p class="text-xs text-gray-500">≤7 Days</p></a>
    <a href="?expiry=30days" class="stat-card card p-3 text-center <?= $expiryFilter === '30days' ? 'ring-2 ring-amber-500' : '' ?>"><p class="text-xl font-bold text-amber-600"><?= $stats['expiring_30'] ?? 0 ?></p><p class="text-xs text-gray-500">≤30 Days</p></a>
    <a href="?status=APPLIED" class="stat-card card p-3 text-center <?= $statusFilter === 'APPLIED' ? 'ring-2 ring-purple-500' : '' ?>"><p class="text-xl font-bold text-purple-600"><?= $stats['applied'] ?? 0 ?></p><p class="text-xs text-gray-500">Applied</p></a>
</div>

<!-- Filters -->
<div class="card p-3 mb-4">
    <form method="GET" class="flex flex-wrap gap-2 items-end">
        <div class="flex-1 min-w-[180px]"><input type="text" name="q" class="form-input text-sm" placeholder="Search name, PAN, DIN, company..." value="<?= htmlspecialchars($search) ?>"></div>
        <div><select name="client" class="form-input text-sm"><option value="">All Clients</option><?php foreach ($clients as $c): ?><option value="<?= $c['id'] ?>" <?= $clientFilter == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option><?php endforeach; ?></select></div>
        <div><select name="status" class="form-input text-sm"><option value="">All Status</option><option value="ACTIVE" <?= $statusFilter === 'ACTIVE' ? 'selected' : '' ?>>Active</option><option value="EXPIRED" <?= $statusFilter === 'EXPIRED' ? 'selected' : '' ?>>Expired</option><option value="APPLIED" <?= $statusFilter === 'APPLIED' ? 'selected' : '' ?>>Applied</option></select></div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
        <?php if ($search || $clientFilter || $statusFilter || $expiryFilter): ?><a href="dsc_dashboard.php" class="btn btn-secondary btn-sm"><i class="fas fa-times"></i></a><?php endif; ?>
    </form>
</div>

<!-- Table -->
<form id="bulkForm" method="POST">
<input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
<input type="hidden" name="action" value="bulk_renewal">
<div class="card overflow-hidden">
    <div class="table-wrapper">
        <table class="w-full text-sm">
            <thead>
                <tr>
                    <th class="px-2 py-3 text-left w-8"><input type="checkbox" id="selectAll" onchange="toggleSelectAll()" class="rounded"></th>
                    <th class="px-2 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Person</th>
                    <th class="px-2 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Company</th>
                    <th class="px-2 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Role</th>
                    <th class="px-2 py-3 text-left text-xs font-semibold text-gray-600 uppercase">DIN/DPIN</th>
                    <th class="px-2 py-3 text-left text-xs font-semibold text-gray-600 uppercase">PAN</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Status</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Expiry</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Days</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">DSC Password</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Mobile</th>
                    <th class="px-2 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($persons)): ?>
                <tr><td colspan="12" class="px-4 py-8 text-center text-gray-500">No records found</td></tr>
                <?php else: foreach ($persons as $p): 
                    $days = $p['days_to_expiry'];
                    $isExpired = $days !== null && $days < 0;
                    $isCritical = $days !== null && $days >= 0 && $days <= 7;
                    $isWarning = $days !== null && $days > 7 && $days <= 30;
                    $rowClass = $isExpired ? 'urgency-expired' : ($isCritical ? 'urgency-critical' : ($isWarning ? 'urgency-warning' : ''));
                    $badge = $isExpired ? 'badge-expired' : ($p['dsc_status'] === 'APPLIED' ? 'badge-applied' : ($isCritical ? 'badge-critical' : ($isWarning ? 'badge-warning' : 'badge-ok')));
                    $statusText = $isExpired ? 'EXPIRED' : ($p['dsc_status'] ?: 'N/A');
                    $clientId = explode(',', $p['client_ids'] ?? '')[0];
                ?>
                <tr class="hover:bg-gray-50 <?= $rowClass ?>" data-days="<?= $days ?>">
                    <td class="px-2 py-2"><input type="checkbox" name="person_ids[]" value="<?= $p['id'] ?>" class="person-cb rounded" onchange="updateSelected()"></td>
                    <td class="px-2 py-2"><div class="font-medium text-sm"><?= htmlspecialchars($p['full_name']) ?></div><?php if ($p['email']): ?><div class="text-xs text-gray-400 truncate max-w-[120px]"><?= $p['email'] ?></div><?php endif; ?></td>
                    <td class="px-2 py-2"><?php if ($clientId): ?><a href="view_client.php?id=<?= $clientId ?>" class="text-blue-600 hover:underline text-xs"><?= htmlspecialchars($p['client_names']) ?></a><?php else: ?>-<?php endif; ?></td>
                    <td class="px-2 py-2"><span class="text-xs bg-gray-100 px-1.5 py-0.5 rounded"><?= str_replace('_', ' ', $p['roles'] ?? '-') ?></span></td>
                    <td class="px-2 py-2 font-mono text-xs"><?= $p['din'] ?: ($p['dpin'] ?: '-') ?></td>
                    <td class="px-2 py-2 font-mono text-xs"><?= $p['pan_number'] ?: '-' ?></td>
                    <td class="px-2 py-2 text-center"><span class="px-1.5 py-0.5 rounded text-xs font-medium <?= $badge ?>"><?= $statusText ?></span></td>
                    <td class="px-2 py-2 text-center text-xs"><?= $p['dsc_expiry_date'] ? date('d M Y', strtotime($p['dsc_expiry_date'])) : '-' ?></td>
                    <td class="px-2 py-2 text-center text-xs font-medium <?= $isExpired ? 'text-red-600' : ($isCritical ? 'text-orange-600' : ($isWarning ? 'text-amber-600' : 'text-green-600')) ?>"><?= $days !== null ? ($isExpired ? abs($days).'d ago' : $days.'d') : '-' ?></td>
                    <td class="px-2 py-2 text-center password-cell" title="<?= htmlspecialchars($p['dsc_password'] ?? '') ?>"><?= $p['dsc_password'] ? '<span class="text-green-600 cursor-pointer" onclick="copyPassword(\''.htmlspecialchars($p['dsc_password']).'\')">••••••</span>' : '-' ?></td>
                    <td class="px-2 py-2 text-center"><?php if ($p['mobile']): ?><a href="tel:<?= $p['mobile'] ?>" class="text-blue-600 text-xs"><?= $p['mobile'] ?></a><?php else: ?>-<?php endif; ?></td>
                    <td class="px-2 py-2">
                        <div class="flex items-center justify-center gap-0.5">
                            <a href="view_person.php?id=<?= $p['id'] ?>" class="p-1 text-gray-600 hover:bg-gray-100 rounded" title="View"><i class="fas fa-eye text-xs"></i></a>
                            <button type="button" onclick='openEditModal(<?= json_encode($p) ?>)' class="p-1 text-blue-600 hover:bg-blue-50 rounded" title="Edit"><i class="fas fa-edit text-xs"></i></button>
                            <button type="button" onclick='confirmDelete(<?= $p["id"] ?>, "<?= htmlspecialchars(addslashes($p["full_name"])) ?>")' class="p-1 text-red-600 hover:bg-red-50 rounded" title="Delete DSC"><i class="fas fa-trash text-xs"></i></button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>
</form>

<p class="text-xs text-gray-400 mt-2 text-right">Showing <?= count($persons) ?> record(s)</p>

<!-- Add Modal -->
<div id="addModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box">
    <div class="p-4 border-b bg-gray-50 rounded-t-xl"><h3 class="text-lg font-bold"><i class="fas fa-plus-circle text-green-600 mr-2"></i>Add New DSC</h3></div>
    <form method="POST" class="p-6 space-y-4">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>"><input type="hidden" name="action" value="add_dsc">
        <div><label class="form-label">Select Person *</label><select name="person_id" class="form-input w-full" required><option value="">-- Select --</option><?php foreach ($personsNoDSC as $pw): ?><option value="<?= $pw['id'] ?>"><?= htmlspecialchars($pw['full_name']) ?> (<?= htmlspecialchars($pw['client_name']) ?>)</option><?php endforeach; ?></select></div>
        <div class="grid grid-cols-2 gap-4">
            <div><label class="form-label">Status</label><select name="dsc_status" class="form-input w-full"><option value="ACTIVE">Active</option><option value="APPLIED">Applied</option></select></div>
            <div><label class="form-label">Expiry Date *</label><input type="date" name="dsc_expiry_date" class="form-input w-full" required></div>
        </div>
        <div><label class="form-label">DSC Password</label><input type="text" name="dsc_password" class="form-input w-full" placeholder="Enter DSC password"></div>
        <div class="flex gap-3 pt-4 border-t"><button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Add</button><button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary">Cancel</button></div>
    </form>
</div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box">
    <div class="p-4 border-b bg-gray-50 rounded-t-xl"><h3 class="text-lg font-bold"><i class="fas fa-edit text-blue-600 mr-2"></i>Edit DSC</h3><p class="text-sm text-gray-500" id="editPersonName"></p></div>
    <form method="POST" class="p-6 space-y-4">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>"><input type="hidden" name="action" value="update_dsc"><input type="hidden" name="person_id" id="editPersonId">
        <div class="grid grid-cols-2 gap-4">
            <div><label class="form-label">Status</label><select name="dsc_status" id="editDscStatus" class="form-input w-full"><option value="">Select...</option><option value="ACTIVE">Active</option><option value="EXPIRED">Expired</option><option value="APPLIED">Applied</option><option value="REQUIRED">Required</option><option value="NOT_REQUIRED">Not Required</option></select></div>
            <div><label class="form-label">Expiry Date</label><input type="date" name="dsc_expiry_date" id="editDscExpiry" class="form-input w-full"></div>
        </div>
        <div><label class="form-label">DSC Password</label><input type="text" name="dsc_password" id="editDscPassword" class="form-input w-full" placeholder="Enter DSC password"></div>
        <div class="flex gap-3 pt-4 border-t"><button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Update</button><button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary">Cancel</button></div>
    </form>
</div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box max-w-md">
    <div class="p-4 border-b bg-red-50 rounded-t-xl"><h3 class="text-lg font-bold text-red-700"><i class="fas fa-exclamation-triangle mr-2"></i>Delete DSC</h3></div>
    <div class="p-6">
        <p class="text-gray-600">Are you sure you want to delete DSC record for:</p>
        <p class="font-semibold text-gray-900 mt-2" id="deletePersonName"></p>
        <p class="text-sm text-gray-500 mt-2">This will clear DSC status, expiry date and password.</p>
        <form method="POST" class="flex gap-3 mt-6 pt-4 border-t">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="delete_dsc">
            <input type="hidden" name="person_id" id="deletePersonId">
            <button type="submit" class="btn bg-red-600 text-white hover:bg-red-700 flex-1"><i class="fas fa-trash mr-2"></i>Delete</button>
            <button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary flex-1">Cancel</button>
        </form>
    </div>
</div>
</div>

<!-- Bulk Modal -->
<div id="bulkModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box">
    <div class="p-4 border-b bg-amber-50 rounded-t-xl"><h3 class="text-lg font-bold"><i class="fas fa-sync text-amber-600 mr-2"></i>Create Renewal Requests</h3><p class="text-sm text-gray-500"><span id="bulkCount">0</span> selected</p></div>
    <div class="p-6 space-y-4">
        <div><label class="form-label">Assign To</label><select name="assign_to" form="bulkForm" class="form-input w-full"><option value="">Unassigned</option><?php foreach ($staff as $s): ?><option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['name']) ?></option><?php endforeach; ?></select></div>
        <div><label class="form-label">Due Date</label><input type="date" name="due_date" form="bulkForm" class="form-input w-full" value="<?= date('Y-m-d', strtotime('+14 days')) ?>"></div>
        <div><label class="form-label">Priority</label><select name="priority" form="bulkForm" class="form-input w-full"><option value="NORMAL">Normal</option><option value="HIGH" selected>High</option><option value="URGENT">Urgent</option></select></div>
        <div class="flex gap-3 pt-4 border-t"><button type="submit" form="bulkForm" class="btn btn-primary flex-1"><i class="fas fa-tasks mr-2"></i>Create</button><button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary">Cancel</button></div>
    </div>
</div>
</div>

<script>
function toggleSelectAll(){const c=document.getElementById('selectAll').checked;document.querySelectorAll('.person-cb').forEach(cb=>cb.checked=c);updateSelected()}
function updateSelected(){const n=document.querySelectorAll('.person-cb:checked').length;document.getElementById('selectedCount').textContent=n;document.getElementById('bulkCount').textContent=n;document.getElementById('bulkBtn').disabled=n===0}
function openEditModal(p){document.getElementById('editPersonId').value=p.id;document.getElementById('editPersonName').textContent=p.full_name;document.getElementById('editDscStatus').value=p.dsc_status||'';document.getElementById('editDscExpiry').value=p.dsc_expiry_date||'';document.getElementById('editDscPassword').value=p.dsc_password||'';document.getElementById('editModal').classList.add('show')}
function openBulkModal(){document.getElementById('bulkModal').classList.add('show')}
function confirmDelete(id,name){document.getElementById('deletePersonId').value=id;document.getElementById('deletePersonName').textContent=name;document.getElementById('deleteModal').classList.add('show')}
function copyPassword(pwd){navigator.clipboard.writeText(pwd);alert('Password copied!')}
</script>

<?php require_once 'includes/footer.php'; ?>
