<?php
/**
 * PATRON - Persons Master (v2)
 * Central management with enhanced filters, bulk actions,
 * export button, common directors report link
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$pageTitle = 'Persons';

// Filters
$roleType  = sanitize($_GET['role'] ?? '');
$kycStatus = sanitize($_GET['kyc'] ?? '');
$dscStatus = sanitize($_GET['dsc'] ?? '');
$clientId  = (int)($_GET['client'] ?? 0);
$status    = sanitize($_GET['status'] ?? '');
$search    = sanitize($_GET['search'] ?? '');
$sort      = sanitize($_GET['sort'] ?? 'full_name');
$order     = strtoupper($_GET['order'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

$allowedSorts = ['full_name', 'pan_number', 'din', 'mobile', 'email', 'created_at', 'client_count', 'dsc_expiry_date', 'din_kyc_due_date'];
if (!in_array($sort, $allowedSorts)) $sort = 'full_name';

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $personId = (int)($_GET['id'] ?? 0);
    
    if ($action === 'delete' && $personId) {
        $hasLinks = dbFetchOne("SELECT COUNT(*) as c FROM client_persons WHERE person_id = ? AND is_active = 1", [$personId]);
        if (($hasLinks['c'] ?? 0) == 0) {
            dbExecute("UPDATE persons_new SET deleted_at = NOW() WHERE id = ?", [$personId]);
            setFlash('success', 'Person deleted.');
        } else {
            setFlash('error', 'Cannot delete person with active client links. Remove from clients first.');
        }
    }
    
    // Bulk status change
    if ($action === 'bulk_status' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $ids = array_map('intval', $_POST['person_ids'] ?? []);
        $newStatus = sanitize($_POST['bulk_status'] ?? '');
        if (!empty($ids) && in_array($newStatus, ['ACTIVE', 'INACTIVE'])) {
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            dbExecute("UPDATE persons_new SET status = ?, updated_at = NOW() WHERE id IN ($placeholders)", array_merge([$newStatus], $ids));
            setFlash('success', count($ids) . ' person(s) updated to ' . $newStatus . '.');
        }
    }
    
    header('Location: persons.php?' . http_build_query(array_filter([
        'role' => $roleType, 'kyc' => $kycStatus, 'dsc' => $dscStatus,
        'client' => $clientId, 'status' => $status, 'search' => $search,
        'sort' => $sort, 'order' => $order
    ])));
    exit;
}

// Build query
$where = ["p.deleted_at IS NULL"];
$params = [];

if ($search) { 
    $where[] = "(p.full_name LIKE ? OR p.pan_number LIKE ? OR p.din LIKE ? OR p.dpin LIKE ? OR p.mobile LIKE ? OR p.email LIKE ? OR p.aadhaar_number LIKE ?)"; 
    $params = array_merge($params, array_fill(0, 7, "%$search%")); 
}
if ($clientId) {
    $where[] = "EXISTS (SELECT 1 FROM client_persons cp2 WHERE cp2.person_id = p.id AND cp2.client_id = ? AND cp2.is_active = 1)";
    $params[] = $clientId;
}
if ($roleType) {
    $where[] = "EXISTS (SELECT 1 FROM client_persons cp3 WHERE cp3.person_id = p.id AND cp3.role_type = ? AND cp3.is_active = 1)";
    $params[] = $roleType;
}
if ($kycStatus) {
    if ($kycStatus === 'not_required') {
        $where[] = "(p.din IS NULL OR p.din = '')";
    } elseif ($kycStatus === 'required') {
        $where[] = "p.din IS NOT NULL AND p.din != ''";
    } elseif ($kycStatus === 'pending') {
        $where[] = "p.din_kyc_status = 'PENDING'";
    } elseif ($kycStatus === 'overdue') {
        $where[] = "(p.din_kyc_status = 'OVERDUE' OR (p.din_kyc_due_date IS NOT NULL AND p.din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED'))";
    } elseif ($kycStatus === 'completed') {
        $where[] = "p.din_kyc_status = 'COMPLETED'";
    }
}
if ($dscStatus) {
    if ($dscStatus === 'EXPIRING') {
        $where[] = "p.dsc_status = 'ACTIVE' AND p.dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)";
    } else {
        $where[] = "p.dsc_status = ?";
        $params[] = $dscStatus;
    }
}
if ($status === 'active') {
    $where[] = "p.status = 'ACTIVE'";
} elseif ($status === 'inactive') {
    $where[] = "p.status = 'INACTIVE'";
}

$whereClause = implode(' AND ', $where);
$orderClause = $sort === 'client_count' ? "client_count $order, p.full_name ASC" : "p.$sort $order";

$persons = dbFetchAll("
    SELECT p.*,
           (SELECT COUNT(DISTINCT cp.client_id) FROM client_persons cp WHERE cp.person_id = p.id AND cp.is_active = 1) as client_count,
           (SELECT GROUP_CONCAT(DISTINCT cp.role_type SEPARATOR ', ') FROM client_persons cp WHERE cp.person_id = p.id AND cp.is_active = 1) as roles,
           (SELECT GROUP_CONCAT(DISTINCT c.name SEPARATOR '||') FROM client_persons cp JOIN clients c ON cp.client_id = c.id WHERE cp.person_id = p.id AND cp.is_active = 1 AND c.deleted_at IS NULL LIMIT 3) as client_names
    FROM persons_new p
    WHERE $whereClause
    ORDER BY $orderClause
", $params) ?: [];

// Get clients for filter
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

// Dashboard Stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(status = 'ACTIVE' OR status IS NULL) as active,
        SUM(status = 'INACTIVE') as inactive,
        SUM(din IS NOT NULL AND din != '') as with_din,
        SUM(dpin IS NOT NULL AND dpin != '') as with_dpin,
        SUM(dsc_status = 'ACTIVE') as dsc_active,
        SUM(dsc_status = 'EXPIRED' OR (dsc_expiry_date IS NOT NULL AND dsc_expiry_date < CURDATE())) as dsc_expired,
        SUM(dsc_status = 'ACTIVE' AND dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)) as dsc_expiring,
        SUM(din_kyc_status = 'PENDING' AND din IS NOT NULL AND din != '') as kyc_pending,
        SUM((din_kyc_status = 'OVERDUE' OR (din_kyc_due_date IS NOT NULL AND din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED')) AND din IS NOT NULL AND din != '') as kyc_overdue,
        SUM(din_kyc_status = 'COMPLETED') as kyc_completed
    FROM persons_new WHERE deleted_at IS NULL
") ?: [];

// Role distribution
$roleStats = dbFetchAll("
    SELECT cp.role_type, COUNT(DISTINCT cp.person_id) as cnt 
    FROM client_persons cp
    JOIN persons_new p ON cp.person_id = p.id AND p.deleted_at IS NULL
    WHERE cp.is_active = 1
    GROUP BY cp.role_type 
    ORDER BY cnt DESC
") ?: [];

// All available roles for filter
$allRoles = [
    'DIRECTOR' => 'Director', 'SHAREHOLDER' => 'Shareholder', 'PARTNER' => 'Partner',
    'DESIGNATED_PARTNER' => 'Designated Partner', 'PROPRIETOR' => 'Proprietor',
    'MEMBER' => 'Member', 'TRUSTEE' => 'Trustee', 'MANAGING_TRUSTEE' => 'Managing Trustee',
    'KARTA' => 'Karta', 'COPARCENER' => 'Coparcener', 'SETTLER' => 'Settler',
    'NOMINEE' => 'Nominee', 'PROMOTER' => 'Promoter', 'AUTHORIZED_SIGNATORY' => 'Authorized Signatory',
    'PRESIDENT' => 'President', 'SECRETARY' => 'Secretary', 'TREASURER' => 'Treasurer',
];

function sortLink($column, $label, $currentSort, $currentOrder) {
    $newOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $icon = $currentSort === $column ? ($currentOrder === 'ASC' ? ' <i class="fas fa-sort-up"></i>' : ' <i class="fas fa-sort-down"></i>') : ' <i class="fas fa-sort text-gray-300"></i>';
    $params = $_GET;
    $params['sort'] = $column;
    $params['order'] = $newOrder;
    return '<a href="?' . http_build_query($params) . '" class="hover:text-blue-600 inline-flex items-center gap-1">' . $label . $icon . '</a>';
}

// Export query string (pass current filters)
$exportQS = http_build_query(array_filter([
    'role' => $roleType, 'kyc' => $kycStatus, 'dsc' => $dscStatus,
    'client' => $clientId, 'status' => $status, 'search' => $search
]));

require_once 'includes/header.php';
?>

<style>
.table-container { max-height: calc(100vh - 400px); overflow-y: auto; }
.table-container thead { position: sticky; top: 0; z-index: 10; background: #f9fafb; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
.stat-card { transition: transform 0.2s, box-shadow 0.2s; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.role-badge { padding: 2px 8px; border-radius: 9999px; font-size: 10px; font-weight: 600; text-transform: uppercase; }
.bulk-bar { position: sticky; bottom: 0; z-index: 20; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">Persons</h2>
        <p class="text-gray-500 text-sm">Directors, Partners, Shareholders & Key Persons</p>
    </div>
    <div class="flex gap-2">
        <a href="merge_persons.php" class="btn bg-red-50 text-red-700 hover:bg-red-100 text-sm" title="Merge Duplicate Persons">
            <i class="fas fa-code-branch mr-1"></i>Merge Duplicates
        </a>
        <a href="common_directors_report.php" class="btn bg-indigo-50 text-indigo-700 hover:bg-indigo-100 text-sm" title="Common Directors Report">
            <i class="fas fa-project-diagram mr-1"></i>Common Directors
        </a>
        <a href="person_export.php?<?= $exportQS ?>" class="btn bg-green-50 text-green-700 hover:bg-green-100 text-sm" title="Export to Excel">
            <i class="fas fa-file-excel mr-1"></i>Export
        </a>
        <a href="add_person.php" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>Add Person
        </a>
    </div>
</div>

<!-- Dashboard Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-3 mb-6">
    <a href="?status=active" class="stat-card card p-3 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <p class="text-2xl font-bold text-blue-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-blue-600">Total Persons</p>
    </a>
    <a href="?kyc=required" class="stat-card card p-3 bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500 hover:bg-indigo-100">
        <p class="text-2xl font-bold text-indigo-700"><?= $stats['with_din'] ?? 0 ?></p>
        <p class="text-xs text-indigo-600">With DIN</p>
    </a>
    <a href="?kyc=pending" class="stat-card card p-3 bg-gradient-to-br from-amber-50 to-amber-100 border-l-4 border-amber-500 hover:bg-amber-100">
        <p class="text-2xl font-bold text-amber-700"><?= $stats['kyc_pending'] ?? 0 ?></p>
        <p class="text-xs text-amber-600">KYC Pending</p>
    </a>
    <a href="?kyc=overdue" class="stat-card card p-3 bg-gradient-to-br from-red-50 to-red-100 border-l-4 border-red-500 hover:bg-red-100">
        <p class="text-2xl font-bold text-red-700"><?= $stats['kyc_overdue'] ?? 0 ?></p>
        <p class="text-xs text-red-600">KYC Overdue</p>
    </a>
    <a href="?dsc=ACTIVE" class="stat-card card p-3 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 hover:bg-green-100">
        <p class="text-2xl font-bold text-green-700"><?= $stats['dsc_active'] ?? 0 ?></p>
        <p class="text-xs text-green-600">DSC Active</p>
    </a>
    <a href="?dsc=EXPIRING" class="stat-card card p-3 bg-gradient-to-br from-orange-50 to-orange-100 border-l-4 border-orange-500 hover:bg-orange-100">
        <p class="text-2xl font-bold text-orange-700"><?= $stats['dsc_expiring'] ?? 0 ?></p>
        <p class="text-xs text-orange-600">DSC Expiring</p>
    </a>
    <a href="?dsc=EXPIRED" class="stat-card card p-3 bg-gradient-to-br from-rose-50 to-rose-100 border-l-4 border-rose-500 hover:bg-rose-100">
        <p class="text-2xl font-bold text-rose-700"><?= $stats['dsc_expired'] ?? 0 ?></p>
        <p class="text-xs text-rose-600">DSC Expired</p>
    </a>
    <a href="?status=inactive" class="stat-card card p-3 bg-gradient-to-br from-gray-50 to-gray-100 border-l-4 border-gray-400 hover:bg-gray-100">
        <p class="text-2xl font-bold text-gray-600"><?= $stats['inactive'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Inactive</p>
    </a>
</div>

<!-- Role Distribution -->
<?php if (!empty($roleStats)): ?>
<div class="card p-4 mb-6">
    <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-users text-blue-500 mr-2"></i>Persons by Role</h4>
    <div class="flex flex-wrap gap-2">
        <?php foreach ($roleStats as $rs): 
            $color = getRoleColor($rs['role_type']);
            $label = getRoleLabel($rs['role_type']);
            $isActive = ($roleType === $rs['role_type']);
        ?>
        <a href="?role=<?= urlencode($rs['role_type']) ?>" 
           class="px-3 py-2 rounded-lg text-sm transition-colors <?= $isActive ? "bg-{$color}-200 text-{$color}-900 ring-2 ring-{$color}-400" : "bg-{$color}-100 text-{$color}-700 hover:bg-{$color}-200" ?>">
            <?= $label ?>
            <span class="ml-1 bg-<?= $color ?>-200 px-1.5 py-0.5 rounded text-xs"><?= $rs['cnt'] ?></span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- Compliance Alert Banner -->
<?php if (($stats['kyc_overdue'] ?? 0) > 0 || ($stats['dsc_expiring'] ?? 0) > 0 || ($stats['dsc_expired'] ?? 0) > 0): ?>
<div class="card p-4 mb-6 bg-red-50 border-l-4 border-red-500">
    <h4 class="font-semibold text-red-800 mb-2"><i class="fas fa-exclamation-triangle mr-2"></i>Compliance Alerts</h4>
    <div class="flex flex-wrap gap-4 text-sm">
        <?php if (($stats['kyc_overdue'] ?? 0) > 0): ?>
        <a href="?kyc=overdue" class="text-red-700 hover:underline"><i class="fas fa-id-card mr-1"></i><?= $stats['kyc_overdue'] ?> Director KYC overdue</a>
        <?php endif; ?>
        <?php if (($stats['dsc_expiring'] ?? 0) > 0): ?>
        <a href="?dsc=EXPIRING" class="text-orange-700 hover:underline"><i class="fas fa-key mr-1"></i><?= $stats['dsc_expiring'] ?> DSC expiring in 30 days</a>
        <?php endif; ?>
        <?php if (($stats['dsc_expired'] ?? 0) > 0): ?>
        <a href="?dsc=EXPIRED" class="text-red-700 hover:underline"><i class="fas fa-key mr-1"></i><?= $stats['dsc_expired'] ?> DSC expired</a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Name, PAN, DIN, DPIN, Mobile, Aadhaar..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client" class="form-input">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $clientId == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Role</label>
            <select name="role" class="form-input">
                <option value="">All Roles</option>
                <?php foreach ($allRoles as $code => $label): ?>
                <option value="<?= $code ?>" <?= $roleType === $code ? 'selected' : '' ?>><?= $label ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Status</label>
            <select name="status" class="form-input">
                <option value="">All</option>
                <option value="active" <?= $status === 'active' ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= $status === 'inactive' ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">KYC Status</label>
            <select name="kyc" class="form-input">
                <option value="">All</option>
                <option value="not_required" <?= $kycStatus === 'not_required' ? 'selected' : '' ?>>N/A (No DIN)</option>
                <option value="required" <?= $kycStatus === 'required' ? 'selected' : '' ?>>Has DIN</option>
                <option value="pending" <?= $kycStatus === 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="overdue" <?= $kycStatus === 'overdue' ? 'selected' : '' ?>>Overdue</option>
                <option value="completed" <?= $kycStatus === 'completed' ? 'selected' : '' ?>>Completed</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">DSC Status</label>
            <select name="dsc" class="form-input">
                <option value="">All</option>
                <option value="ACTIVE" <?= $dscStatus === 'ACTIVE' ? 'selected' : '' ?>>Active</option>
                <option value="EXPIRING" <?= $dscStatus === 'EXPIRING' ? 'selected' : '' ?>>Expiring (30d)</option>
                <option value="EXPIRED" <?= $dscStatus === 'EXPIRED' ? 'selected' : '' ?>>Expired</option>
                <option value="APPLIED" <?= $dscStatus === 'APPLIED' ? 'selected' : '' ?>>Applied</option>
                <option value="NOT_REQUIRED" <?= $dscStatus === 'NOT_REQUIRED' ? 'selected' : '' ?>>Not Required</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-1"></i>Filter</button>
        <?php if ($search || $clientId || $roleType || $kycStatus || $dscStatus || $status): ?>
        <a href="persons.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Persons Table -->
<form method="POST" action="?action=bulk_status" id="bulkForm">
<div class="card overflow-hidden">
    <div class="table-container">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-3 py-3 text-left"><input type="checkbox" id="selectAll" onclick="toggleAll(this)" class="rounded border-gray-300"></th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase"><?= sortLink('full_name', 'Person', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('pan_number', 'PAN', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('din', 'DIN/DPIN', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Roles</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase"><?= sortLink('client_count', 'Clients', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('din_kyc_due_date', 'KYC', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('dsc_expiry_date', 'DSC', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-white">
                <?php if (empty($persons)): ?>
                <tr><td colspan="9" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-users fa-2x mb-2 text-gray-300"></i><br>No persons found
                </td></tr>
                <?php else: foreach ($persons as $p): 
                    $clientList = $p['client_names'] ? explode('||', $p['client_names']) : [];
                    $dscInfo = getDSCStatusInfo($p);
                    $kycInfo = getKYCStatusInfo($p);
                    $isInactive = ($p['status'] === 'INACTIVE');
                    $hasAlert = ($dscInfo['color'] === 'red' || $kycInfo['color'] === 'red');
                ?>
                <tr class="hover:bg-gray-50 <?= $hasAlert ? 'bg-red-50/50' : '' ?> <?= $isInactive ? 'opacity-60' : '' ?>">
                    <td class="px-3 py-3"><input type="checkbox" name="person_ids[]" value="<?= $p['id'] ?>" class="person-cb rounded border-gray-300" onchange="updateBulkBar()"></td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <?php if (!empty($p['photo_path'])): ?>
                            <img src="<?= htmlspecialchars($p['photo_path']) ?>" class="w-8 h-8 rounded-full object-cover">
                            <?php else: ?>
                            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold"><?= getPersonInitials($p['full_name']) ?></div>
                            <?php endif; ?>
                            <div>
                                <a href="person_view.php?id=<?= $p['id'] ?>" class="font-medium text-gray-900 hover:text-blue-600"><?= htmlspecialchars($p['full_name']) ?></a>
                                <?php if ($isInactive): ?><span class="ml-1 px-1.5 py-0.5 bg-gray-200 text-gray-500 rounded text-[10px]">INACTIVE</span><?php endif; ?>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <?php if ($p['mobile']): ?><span class="text-xs text-gray-400"><i class="fas fa-phone mr-0.5"></i><?= $p['mobile'] ?></span><?php endif; ?>
                                    <?php if ($p['email']): ?><span class="text-xs text-gray-400 truncate max-w-[150px]"><i class="fas fa-envelope mr-0.5"></i><?= $p['email'] ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?= $p['pan_number'] ? '<span class="font-mono text-sm">' . $p['pan_number'] . '</span>' : '<span class="text-gray-300">—</span>' ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($p['din']): ?>
                        <span class="font-mono text-sm text-blue-600"><?= $p['din'] ?></span>
                        <?php elseif ($p['dpin']): ?>
                        <span class="font-mono text-sm text-purple-600"><?= $p['dpin'] ?></span>
                        <?php else: ?>
                        <span class="text-gray-300">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($p['roles']): 
                            $roles = explode(', ', $p['roles']);
                            foreach (array_slice($roles, 0, 2) as $role):
                        ?>
                        <?= getRoleBadgeHTML($role) ?>
                        <?php endforeach;
                            if (count($roles) > 2): ?>
                        <span class="text-xs text-gray-400">+<?= count($roles) - 2 ?></span>
                        <?php endif; else: ?>
                        <span class="text-gray-300">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs font-medium"><?= $p['client_count'] ?></span>
                            <?php if (!empty($clientList)): ?>
                            <span class="text-xs text-gray-500 truncate max-w-[150px]" title="<?= htmlspecialchars(implode(', ', $clientList)) ?>">
                                <?= htmlspecialchars($clientList[0]) ?><?= count($clientList) > 1 ? ' +' . (count($clientList)-1) : '' ?>
                            </span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if (!$p['din']): ?>
                        <span class="text-gray-300 text-xs">N/A</span>
                        <?php else: ?>
                        <span class="px-2 py-1 bg-<?= $kycInfo['color'] ?>-100 text-<?= $kycInfo['color'] ?>-700 rounded text-xs">
                            <?= $kycInfo['short'] ?? $kycInfo['label'] ?>
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($p['dsc_status'] && $p['dsc_status'] !== 'NOT_REQUIRED'): ?>
                        <span class="px-2 py-1 bg-<?= $dscInfo['color'] ?>-100 text-<?= $dscInfo['color'] ?>-700 rounded text-xs" 
                              <?= $p['dsc_expiry_date'] ? 'title="Exp: ' . date('d M Y', strtotime($p['dsc_expiry_date'])) . '"' : '' ?>>
                            <?= $dscInfo['short'] ?? $dscInfo['label'] ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-300 text-xs">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="person_view.php?id=<?= $p['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="View"><i class="fas fa-eye"></i></a>
                            <a href="edit_person.php?id=<?= $p['id'] ?>" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php if (($p['client_count'] ?? 0) == 0): ?>
                            <a href="?action=delete&id=<?= $p['id'] ?>&<?= $exportQS ?>" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete" onclick="return confirm('Delete this person?')"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bulk Action Bar (sticky bottom) -->
<div id="bulkBar" class="hidden bulk-bar mt-3">
    <div class="card p-3 bg-blue-50 border-blue-200 flex items-center justify-between">
        <span class="text-sm text-blue-800"><strong id="bulkCount">0</strong> person(s) selected</span>
        <div class="flex items-center gap-3">
            <select name="bulk_status" class="form-input text-sm py-1">
                <option value="ACTIVE">Set Active</option>
                <option value="INACTIVE">Set Inactive</option>
            </select>
            <button type="submit" class="btn btn-primary text-sm py-1" onclick="return confirm('Update status for selected persons?')">
                <i class="fas fa-check mr-1"></i>Apply
            </button>
        </div>
    </div>
</div>
</form>

<div class="flex items-center justify-between mt-4 text-xs text-gray-500">
    <span>Showing <strong><?= count($persons) ?></strong> person(s)</span>
    <div class="flex gap-4">
        <span><i class="fas fa-id-card text-indigo-500 mr-1"></i><?= $stats['with_din'] ?? 0 ?> with DIN</span>
        <span><i class="fas fa-key text-green-500 mr-1"></i><?= $stats['dsc_active'] ?? 0 ?> active DSC</span>
        <span><i class="fas fa-clipboard-check text-amber-500 mr-1"></i><?= $stats['kyc_completed'] ?? 0 ?> KYC done</span>
    </div>
</div>

<script>
function toggleAll(master) {
    document.querySelectorAll('.person-cb').forEach(cb => { cb.checked = master.checked; });
    updateBulkBar();
}
function updateBulkBar() {
    const checked = document.querySelectorAll('.person-cb:checked').length;
    document.getElementById('bulkBar').classList.toggle('hidden', checked === 0);
    document.getElementById('bulkCount').textContent = checked;
}
</script>

<?php require_once 'includes/footer.php'; ?>
