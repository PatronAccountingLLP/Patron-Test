<?php
/**
 * PATRON - Certificate Types Master (Enhanced)
 * Features: Dashboard cards, sticky header, sortable columns, filters
 */

require_once 'includes/db.php';
startSession();
requireLogin();


$pageTitle = 'Certificate Types';

// Filters
$category = sanitize($_GET['category'] ?? '');
$expiryFilter = sanitize($_GET['expiry'] ?? '');
$status = sanitize($_GET['status'] ?? '');
$search = sanitize($_GET['search'] ?? '');
$sort = sanitize($_GET['sort'] ?? 'name');
$order = strtoupper($_GET['order'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

$allowedSorts = ['name', 'code', 'category', 'has_expiry', 'default_validity_months', 'is_active', 'usage_count'];
if (!in_array($sort, $allowedSorts)) $sort = 'name';

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $certId = (int)($_GET['id'] ?? 0);
    
    if ($action === 'toggle' && $certId) {
        $cert = dbFetchOne("SELECT is_active FROM certificate_types WHERE id = ?", [$certId]);
        if ($cert) {
            dbExecute("UPDATE certificate_types SET is_active = ?, updated_at = NOW() WHERE id = ?", [$cert['is_active'] ? 0 : 1, $certId]);
            setFlash('success', 'Certificate type status updated.');
        }
    }
    
    if ($action === 'toggle_expiry' && $certId) {
        $cert = dbFetchOne("SELECT has_expiry FROM certificate_types WHERE id = ?", [$certId]);
        if ($cert) {
            dbExecute("UPDATE certificate_types SET has_expiry = ?, updated_at = NOW() WHERE id = ?", [$cert['has_expiry'] ? 0 : 1, $certId]);
            setFlash('success', 'Expiry setting updated.');
        }
    }
    
    if ($action === 'delete' && $certId) {
        $cert = dbFetchOne("SELECT code FROM certificate_types WHERE id = ?", [$certId]);
        $hasUsage = dbFetchOne("SELECT COUNT(*) as c FROM certificates WHERE certificate_type = ?", [$cert['code'] ?? '']);
        $hasUsage2 = dbFetchOne("SELECT COUNT(*) as c FROM client_certificates WHERE certificate_type_id = ?", [$certId]);
        if ((($hasUsage['c'] ?? 0) + ($hasUsage2['c'] ?? 0)) == 0) {
            dbExecute("UPDATE certificate_types SET deleted_at = NOW() WHERE id = ?", [$certId]);
            setFlash('success', 'Certificate type deleted.');
        } else {
            setFlash('error', 'Cannot delete certificate type in use.');
        }
    }
    
    header('Location: certificate_types.php?' . http_build_query(array_filter(['category' => $category, 'expiry' => $expiryFilter, 'status' => $status, 'search' => $search, 'sort' => $sort, 'order' => $order])));
    exit;
}

// Build query
$where = ["ct.deleted_at IS NULL"];
$params = [];

if ($category) { $where[] = "ct.category = ?"; $params[] = $category; }
if ($expiryFilter === 'expires') { $where[] = "ct.has_expiry = 1"; }
elseif ($expiryFilter === 'permanent') { $where[] = "(ct.has_expiry = 0 OR ct.has_expiry IS NULL)"; }
if ($status === 'active') { $where[] = "ct.is_active = 1"; }
elseif ($status === 'inactive') { $where[] = "ct.is_active = 0"; }
if ($search) { $where[] = "(ct.name LIKE ? OR ct.code LIKE ?)"; $params = array_merge($params, ["%$search%", "%$search%"]); }

$whereClause = implode(' AND ', $where);
$orderBy = $sort === 'usage_count' ? "usage_count $order" : "ct.$sort $order";

$certTypes = dbFetchAll("
    SELECT ct.*,
           (SELECT COUNT(*) FROM certificates WHERE certificate_type = ct.code) as usage_count,
           (SELECT COUNT(*) FROM client_certificates WHERE certificate_type_id = ct.id) as client_cert_count
    FROM certificate_types ct
    WHERE $whereClause
    ORDER BY $orderBy
", $params) ?: [];

$categories = dbFetchAll("SELECT DISTINCT category FROM certificate_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Dashboard Stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(is_active = 1) as active,
        SUM(is_active = 0 OR is_active IS NULL) as inactive,
        SUM(has_expiry = 1) as expires,
        SUM(has_expiry = 0 OR has_expiry IS NULL) as permanent
    FROM certificate_types WHERE deleted_at IS NULL
") ?: [];

// Certificate stats (issued)
$certStats = dbFetchOne("
    SELECT 
        COUNT(*) as total_issued,
        SUM(expiry_date IS NOT NULL AND expiry_date < CURDATE()) as expired,
        SUM(expiry_date IS NOT NULL AND expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)) as expiring_soon
    FROM client_certificates WHERE deleted_at IS NULL OR deleted_at IS NULL
") ?: [];

// Category stats
$categoryStats = dbFetchAll("
    SELECT category, COUNT(*) as cnt 
    FROM certificate_types 
    WHERE deleted_at IS NULL AND category IS NOT NULL AND category != ''
    GROUP BY category 
    ORDER BY cnt DESC
") ?: [];

// Most issued certificates
$topCerts = dbFetchAll("
    SELECT ct.name, COUNT(cc.id) as cnt
    FROM certificate_types ct
    LEFT JOIN client_certificates cc ON ct.id = cc.certificate_type_id
    WHERE ct.deleted_at IS NULL
    GROUP BY ct.id
    HAVING cnt > 0
    ORDER BY cnt DESC
    LIMIT 3
") ?: [];

$categoryColors = [
    'Tax' => 'amber', 'License' => 'blue', 'Registration' => 'green',
    'Compliance' => 'purple', 'Legal' => 'red', 'Business' => 'teal',
    'Government' => 'indigo', 'Financial' => 'orange'
];

function sortLink($column, $label, $currentSort, $currentOrder) {
    $newOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $icon = $currentSort === $column ? ($currentOrder === 'ASC' ? ' <i class="fas fa-sort-up"></i>' : ' <i class="fas fa-sort-down"></i>') : ' <i class="fas fa-sort text-gray-300"></i>';
    $params = $_GET;
    $params['sort'] = $column;
    $params['order'] = $newOrder;
    return '<a href="?' . http_build_query($params) . '" class="hover:text-blue-600 inline-flex items-center gap-1">' . $label . $icon . '</a>';
}

require_once 'includes/header.php';
?>

<style>
.table-container { max-height: calc(100vh - 420px); overflow-y: auto; }
.table-container thead { position: sticky; top: 0; z-index: 10; background: #f9fafb; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
.stat-card { transition: transform 0.2s, box-shadow 0.2s; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">Certificate Types</h2>
        <p class="text-gray-500 text-sm">Manage certificate and license types</p>
    </div>
    <a href="add_certificate_type.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Certificate Type</a>
</div>

<!-- Dashboard Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-6">
    <div class="stat-card card p-4 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <p class="text-2xl font-bold text-blue-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-blue-600">Total Types</p>
    </div>
    <a href="?status=active" class="stat-card card p-4 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 hover:bg-green-100">
        <p class="text-2xl font-bold text-green-700"><?= $stats['active'] ?? 0 ?></p>
        <p class="text-xs text-green-600">Active</p>
    </a>
    <a href="?expiry=expires" class="stat-card card p-4 bg-gradient-to-br from-amber-50 to-amber-100 border-l-4 border-amber-500 hover:bg-amber-100">
        <p class="text-2xl font-bold text-amber-700"><?= $stats['expires'] ?? 0 ?></p>
        <p class="text-xs text-amber-600">Has Expiry</p>
    </a>
    <a href="?expiry=permanent" class="stat-card card p-4 bg-gradient-to-br from-teal-50 to-teal-100 border-l-4 border-teal-500 hover:bg-teal-100">
        <p class="text-2xl font-bold text-teal-700"><?= $stats['permanent'] ?? 0 ?></p>
        <p class="text-xs text-teal-600">Permanent</p>
    </a>
    <div class="stat-card card p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500">
        <p class="text-2xl font-bold text-indigo-700"><?= $certStats['total_issued'] ?? 0 ?></p>
        <p class="text-xs text-indigo-600">Total Issued</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-orange-50 to-orange-100 border-l-4 border-orange-500">
        <p class="text-2xl font-bold text-orange-700"><?= $certStats['expiring_soon'] ?? 0 ?></p>
        <p class="text-xs text-orange-600">Expiring Soon</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-red-50 to-red-100 border-l-4 border-red-500">
        <p class="text-2xl font-bold text-red-700"><?= $certStats['expired'] ?? 0 ?></p>
        <p class="text-xs text-red-600">Expired</p>
    </div>
</div>

<!-- Categories & Top Issued Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-folder text-blue-500 mr-2"></i>Certificates by Category</h4>
        <?php if (empty($categoryStats)): ?>
            <p class="text-gray-400 text-sm">No categories defined</p>
        <?php else: ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ($categoryStats as $cs): 
                    $catColor = $categoryColors[$cs['category']] ?? 'gray';
                ?>
                <a href="?category=<?= urlencode($cs['category']) ?>" 
                   class="px-3 py-2 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded-lg text-sm hover:bg-<?= $catColor ?>-200 transition-colors">
                    <?= htmlspecialchars($cs['category']) ?>
                    <span class="ml-1 bg-<?= $catColor ?>-200 px-1.5 py-0.5 rounded text-xs"><?= $cs['cnt'] ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-trophy text-amber-500 mr-2"></i>Most Issued Certificates</h4>
        <?php if (empty($topCerts)): ?>
            <p class="text-gray-400 text-sm">No certificates issued yet</p>
        <?php else: ?>
            <div class="space-y-2">
                <?php foreach ($topCerts as $i => $tc): 
                    $medals = ['🥇', '🥈', '🥉'];
                ?>
                <div class="flex items-center justify-between py-1 <?= $i < 2 ? 'border-b border-gray-100' : '' ?>">
                    <span class="flex items-center gap-2">
                        <span><?= $medals[$i] ?? '' ?></span>
                        <span class="text-sm"><?= htmlspecialchars($tc['name']) ?></span>
                    </span>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded text-xs"><?= $tc['cnt'] ?> issued</span>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Info Banner -->
<details class="card mb-6">
    <summary class="p-4 cursor-pointer bg-amber-50 hover:bg-amber-100 transition-colors rounded-t-lg">
        <span class="font-medium text-amber-800"><i class="fas fa-info-circle mr-2"></i>Understanding Certificate Expiry</span>
    </summary>
    <div class="p-4 bg-amber-50 border-t border-amber-100">
        <div class="grid grid-cols-2 gap-4 text-sm text-amber-700">
            <div class="flex items-start gap-3">
                <span class="px-2 py-1 bg-amber-200 text-amber-800 rounded text-xs font-medium whitespace-nowrap"><i class="fas fa-clock mr-1"></i>Has Expiry</span>
                <span>Certificate expires and needs renewal. Set validity period and reminder days. Examples: FSSAI License, Shop Act, Trade License</span>
            </div>
            <div class="flex items-start gap-3">
                <span class="px-2 py-1 bg-teal-200 text-teal-800 rounded text-xs font-medium whitespace-nowrap"><i class="fas fa-infinity mr-1"></i>Permanent</span>
                <span>No expiry date. Once issued, valid forever. Examples: GST Certificate, PAN Card, MSME/Udyam Registration</span>
            </div>
        </div>
    </div>
</details>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Name or code..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input">
                <option value="">All Categories</option>
                <?php foreach ($categories as $c): ?>
                <option value="<?= htmlspecialchars($c['category']) ?>" <?= $category === $c['category'] ? 'selected' : '' ?>><?= htmlspecialchars($c['category']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Expiry Type</label>
            <select name="expiry" class="form-input">
                <option value="">All</option>
                <option value="expires" <?= $expiryFilter === 'expires' ? 'selected' : '' ?>>Has Expiry</option>
                <option value="permanent" <?= $expiryFilter === 'permanent' ? 'selected' : '' ?>>Permanent</option>
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
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-1"></i>Filter</button>
        <?php if ($search || $category || $expiryFilter || $status): ?>
        <a href="certificate_types.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Certificate Types Table -->
<div class="card overflow-hidden">
    <div class="table-container">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase"><?= sortLink('name', 'Certificate Type', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('category', 'Category', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('has_expiry', 'Expiry', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('default_validity_months', 'Validity', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Reminder</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('usage_count', 'Issued', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('is_active', 'Status', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-white">
                <?php if (empty($certTypes)): ?>
                <tr><td colspan="8" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-certificate fa-2x mb-2 text-gray-300"></i><br>No certificate types found
                </td></tr>
                <?php else: foreach ($certTypes as $ct): 
                    $catColor = $categoryColors[$ct['category']] ?? 'gray';
                    $totalUsage = ($ct['usage_count'] ?? 0) + ($ct['client_cert_count'] ?? 0);
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($ct['name'] ?? '') ?></p>
                        <p class="text-xs text-gray-400 font-mono"><?= htmlspecialchars($ct['code'] ?? '') ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($ct['category']): ?>
                        <span class="px-2 py-1 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded text-xs"><?= htmlspecialchars($ct['category']) ?></span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle_expiry&id=<?= $ct['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'expiry' => $expiryFilter, 'status' => $status, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>"
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 <?= $ct['has_expiry'] ? 'bg-amber-100 text-amber-700' : 'bg-teal-100 text-teal-700' ?>"
                           title="Click to toggle">
                            <?= $ct['has_expiry'] ? '<i class="fas fa-clock"></i> Expires' : '<i class="fas fa-infinity"></i> Permanent' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <?php if ($ct['has_expiry'] && ($ct['default_validity_months'] ?? null)): ?>
                        <span class="text-amber-700 font-medium"><?= $ct['default_validity_months'] ?> months</span>
                        <?php elseif ($ct['has_expiry'] && ($ct['validity_days'] ?? null)): ?>
                        <span class="text-amber-700 font-medium"><?= $ct['validity_days'] ?> days</span>
                        <?php else: ?>
                        <span class="text-gray-400">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <?php if ($ct['renewal_reminder_days'] ?? null): ?>
                        <span class="text-orange-600"><?= $ct['renewal_reminder_days'] ?>d before</span>
                        <?php else: ?>
                        <span class="text-gray-400">—</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="<?= $totalUsage > 0 ? 'font-medium text-green-600' : 'text-gray-400' ?>"><?= $totalUsage ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle&id=<?= $ct['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'expiry' => $expiryFilter, 'status' => $status, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>"
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 <?= $ct['is_active'] ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' ?>">
                            <?= $ct['is_active'] ? '<i class="fas fa-check-circle"></i> Active' : '<i class="fas fa-pause-circle"></i> Inactive' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="edit_certificate_type.php?id=<?= $ct['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php if ($totalUsage == 0): ?>
                            <a href="?action=delete&id=<?= $ct['id'] ?>" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete" onclick="return confirm('Delete this certificate type?')"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="flex items-center justify-between mt-4 text-xs text-gray-500">
    <span>Showing <strong><?= count($certTypes) ?></strong> certificate type(s)</span>
    <div class="flex gap-4">
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-green-500"></span> <?= count(array_filter($certTypes, fn($c) => $c['is_active'])) ?> Active</span>
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-amber-500"></span> <?= count(array_filter($certTypes, fn($c) => $c['has_expiry'])) ?> Has Expiry</span>
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-teal-500"></span> <?= count(array_filter($certTypes, fn($c) => !$c['has_expiry'])) ?> Permanent</span>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
