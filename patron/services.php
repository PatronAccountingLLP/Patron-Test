<?php
/**
 * PATRON - Services Master (Enhanced v3)
 * Features: Dashboard cards, sticky header, sortable columns, filters, quick actions, detail modal
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

// Removed Admin-only restriction - all logged in users can access services

$pageTitle = 'Services';

// Filters
$category = sanitize($_GET['category'] ?? '');
$status = sanitize($_GET['status'] ?? '');
$serviceType = sanitize($_GET['type'] ?? '');
$search = sanitize($_GET['search'] ?? '');
$sort = sanitize($_GET['sort'] ?? 'name');
$order = strtoupper($_GET['order'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

$allowedSorts = ['name', 'category', 'base_price', 'estimated_days', 'has_tasks', 'is_active', 'request_count', 'code'];
if (!in_array($sort, $allowedSorts)) $sort = 'name';

// Handle AJAX request for service details
if (isset($_GET['ajax']) && $_GET['ajax'] === 'service_details') {
    header('Content-Type: application/json');
    $serviceId = (int)($_GET['id'] ?? 0);
    
    if (!$serviceId) {
        echo json_encode(['error' => 'Invalid service ID']);
        exit;
    }
    
    $service = dbFetchOne("SELECT * FROM services WHERE id = ? AND deleted_at IS NULL", [$serviceId]);
    if (!$service) {
        echo json_encode(['error' => 'Service not found']);
        exit;
    }
    
    // Get document requirements
    $documents = dbFetchAll("
        SELECT dt.id, dt.name, dt.code, dt.category, sdr.is_required
        FROM service_document_requirements sdr
        JOIN document_types dt ON sdr.document_type_id = dt.id
        WHERE sdr.service_id = ?
        ORDER BY sdr.is_required DESC, dt.name
    ", [$serviceId]) ?: [];
    
    // Get information field requirements
    $infoFields = dbFetchAll("
        SELECT inf.id, inf.name, inf.code, inf.field_type, inf.category, sfr.is_required, sfr.display_order
        FROM service_field_requirements sfr
        JOIN information_fields inf ON sfr.field_id = inf.id
        WHERE sfr.service_id = ?
        ORDER BY sfr.display_order, inf.name
    ", [$serviceId]) ?: [];
    
    // Get tasks if complex service
    $tasks = [];
    if ($service['has_tasks']) {
        $tasks = dbFetchAll("
            SELECT id, name, description, task_order, is_required
            FROM service_task_templates
            WHERE service_id = ?
            ORDER BY task_order
        ", [$serviceId]) ?: [];
    }
    
    // Get recent requests
    $recentRequests = dbFetchAll("
        SELECT sr.id, sr.request_number, sr.status, sr.created_at, c.name as client_name
        FROM service_requests sr
        JOIN clients c ON sr.client_id = c.id
        WHERE sr.service_id = ? AND sr.deleted_at IS NULL
        ORDER BY sr.created_at DESC
        LIMIT 5
    ", [$serviceId]) ?: [];
    
    echo json_encode([
        'service' => $service,
        'documents' => $documents,
        'info_fields' => $infoFields,
        'tasks' => $tasks,
        'recent_requests' => $recentRequests
    ]);
    exit;
}

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $serviceId = (int)($_GET['id'] ?? 0);
    
    if ($action === 'toggle' && $serviceId) {
        $service = dbFetchOne("SELECT is_active FROM services WHERE id = ?", [$serviceId]);
        if ($service) {
            dbExecute("UPDATE services SET is_active = ? WHERE id = ?", [$service['is_active'] ? 0 : 1, $serviceId]);
            setFlash('success', 'Service status updated.');
        }
    }
    
    if ($action === 'toggle_tasks' && $serviceId) {
        $service = dbFetchOne("SELECT has_tasks FROM services WHERE id = ?", [$serviceId]);
        if ($service) {
            dbExecute("UPDATE services SET has_tasks = ? WHERE id = ?", [($service['has_tasks'] ?? 0) ? 0 : 1, $serviceId]);
            setFlash('success', 'Service type updated.');
        }
    }
    
    if ($action === 'delete' && $serviceId) {
        $hasRequests = dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE service_id = ?", [$serviceId]);
        if ($hasRequests['c'] == 0) {
            dbExecute("UPDATE services SET deleted_at = NOW() WHERE id = ?", [$serviceId]);
            setFlash('success', 'Service deleted.');
        } else {
            setFlash('error', 'Cannot delete service with existing requests.');
        }
    }
    
    header('Location: services.php?' . http_build_query(array_filter(['category' => $category, 'status' => $status, 'type' => $serviceType, 'search' => $search, 'sort' => $sort, 'order' => $order])));
    exit;
}

// Build query
$where = ["s.deleted_at IS NULL"];
$params = [];

if ($category) { $where[] = "s.category = ?"; $params[] = $category; }
if ($status === 'active') { $where[] = "s.is_active = 1"; }
elseif ($status === 'inactive') { $where[] = "s.is_active = 0"; }
if ($serviceType === 'simple') { $where[] = "(s.has_tasks = 0 OR s.has_tasks IS NULL)"; }
elseif ($serviceType === 'complex') { $where[] = "s.has_tasks = 1"; }
if ($search) { $where[] = "(s.name LIKE ? OR s.code LIKE ?)"; $params = array_merge($params, ["%$search%", "%$search%"]); }

$whereClause = implode(' AND ', $where);

$orderBy = "s.$sort $order";
if ($sort === 'request_count') {
    $orderBy = "request_count $order";
}

$services = dbFetchAll("
    SELECT s.*,
           (SELECT COUNT(*) FROM service_task_templates WHERE service_id = s.id) as task_count,
           (SELECT COUNT(*) FROM service_document_requirements WHERE service_id = s.id) as doc_count,
           (SELECT COUNT(*) FROM service_field_requirements WHERE service_id = s.id) as info_count,
           (SELECT COUNT(*) FROM service_requests WHERE service_id = s.id AND deleted_at IS NULL) as request_count,
           (SELECT COUNT(*) FROM service_requests WHERE service_id = s.id AND deleted_at IS NULL AND status IN ('NEW','WAITING_DOCS','UNDER_REVIEW','APPLIED')) as active_requests,
           (SELECT COUNT(*) FROM service_requests WHERE service_id = s.id AND deleted_at IS NULL AND status IN ('DONE','COMPLETED')) as completed_requests
    FROM services s
    WHERE $whereClause
    ORDER BY $orderBy
", $params) ?: [];

$categories = dbFetchAll("SELECT DISTINCT category FROM services WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Dashboard Stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total_services,
        SUM(is_active = 1) as active_services,
        SUM(is_active = 0 OR is_active IS NULL) as inactive_services,
        SUM(has_tasks = 1) as complex_services,
        SUM(has_tasks = 0 OR has_tasks IS NULL) as simple_services
    FROM services WHERE deleted_at IS NULL
") ?: [];

$requestStats = dbFetchOne("
    SELECT 
        COUNT(*) as total_requests,
        SUM(status IN ('NEW','WAITING_DOCS','UNDER_REVIEW','APPLIED')) as active_requests,
        SUM(status IN ('DONE','COMPLETED')) as completed_requests
    FROM service_requests WHERE deleted_at IS NULL
") ?: [];

$topServices = dbFetchAll("
    SELECT s.name, COUNT(sr.id) as cnt
    FROM services s
    JOIN service_requests sr ON s.id = sr.service_id AND sr.deleted_at IS NULL
    WHERE s.deleted_at IS NULL
    GROUP BY s.id
    ORDER BY cnt DESC
    LIMIT 3
") ?: [];

$categoryStats = dbFetchAll("
    SELECT category, COUNT(*) as cnt 
    FROM services 
    WHERE deleted_at IS NULL AND category IS NOT NULL AND category != ''
    GROUP BY category 
    ORDER BY cnt DESC
") ?: [];

$categoryColors = [
    'Tax' => 'amber', 'REGISTRATION' => 'blue', 'INCORPORATION' => 'purple', 
    'COMPLIANCE' => 'green', 'LICENSE' => 'teal', 'Registration' => 'blue',
    'Compliance' => 'green', 'License' => 'teal', 'OTHER' => 'gray',
    'Accounting' => 'indigo', 'Renewal' => 'orange', 'Notices' => 'red', 'Other' => 'gray'
];

function sortLink($column, $label, $currentSort, $currentOrder) {
    $newOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $icon = '';
    if ($currentSort === $column) {
        $icon = $currentOrder === 'ASC' ? ' <i class="fas fa-sort-up"></i>' : ' <i class="fas fa-sort-down"></i>';
    } else {
        $icon = ' <i class="fas fa-sort text-gray-300"></i>';
    }
    $params = $_GET;
    $params['sort'] = $column;
    $params['order'] = $newOrder;
    return '<a href="?' . http_build_query($params) . '" class="hover:text-blue-600 inline-flex items-center gap-1">' . $label . $icon . '</a>';
}

require_once 'includes/header.php';
?>

<style>
.table-container {
    max-height: calc(100vh - 420px);
    overflow-y: auto;
    position: relative;
}
.table-container thead {
    position: sticky;
    top: 0;
    z-index: 10;
    background: #f9fafb;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}
.table-container th { white-space: nowrap; }
.stat-card { transition: transform 0.2s, box-shadow 0.2s; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.type-simple { background: #d1fae5; color: #065f46; }
.type-complex { background: #ede9fe; color: #5b21b6; }

/* Modal Styles */
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; padding: 1rem; }
.modal.show { display: flex; }
.modal-content { background: white; border-radius: 1rem; max-width: 800px; width: 100%; max-height: 90vh; overflow-y: auto; }
.service-name-link { cursor: pointer; color: #2563eb; }
.service-name-link:hover { text-decoration: underline; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">Services</h2>
        <p class="text-gray-500 text-sm">Manage service catalog and configurations</p>
    </div>
    <a href="add_service.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Service</a>
</div>

<!-- Dashboard Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-6">
    <div class="stat-card card p-4 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-blue-700"><?= $stats['total_services'] ?? 0 ?></p>
                <p class="text-xs text-blue-600">Total Services</p>
            </div>
            <div class="text-blue-300 text-2xl"><i class="fas fa-concierge-bell"></i></div>
        </div>
    </div>
    
    <a href="?status=active" class="stat-card card p-4 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 hover:bg-green-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-green-700"><?= $stats['active_services'] ?? 0 ?></p>
                <p class="text-xs text-green-600">Active</p>
            </div>
            <div class="text-green-300 text-2xl"><i class="fas fa-check-circle"></i></div>
        </div>
    </a>
    
    <a href="?type=simple" class="stat-card card p-4 bg-gradient-to-br from-emerald-50 to-emerald-100 border-l-4 border-emerald-500 hover:bg-emerald-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-emerald-700"><?= $stats['simple_services'] ?? 0 ?></p>
                <p class="text-xs text-emerald-600">Simple</p>
            </div>
            <div class="text-emerald-300 text-2xl"><i class="fas fa-check"></i></div>
        </div>
    </a>
    
    <a href="?type=complex" class="stat-card card p-4 bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-purple-500 hover:bg-purple-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-purple-700"><?= $stats['complex_services'] ?? 0 ?></p>
                <p class="text-xs text-purple-600">Complex</p>
            </div>
            <div class="text-purple-300 text-2xl"><i class="fas fa-tasks"></i></div>
        </div>
    </a>
    
    <div class="stat-card card p-4 bg-gradient-to-br from-amber-50 to-amber-100 border-l-4 border-amber-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-amber-700"><?= $requestStats['active_requests'] ?? 0 ?></p>
                <p class="text-xs text-amber-600">Active Requests</p>
            </div>
            <div class="text-amber-300 text-2xl"><i class="fas fa-spinner"></i></div>
        </div>
    </div>
    
    <div class="stat-card card p-4 bg-gradient-to-br from-teal-50 to-teal-100 border-l-4 border-teal-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-2xl font-bold text-teal-700"><?= $requestStats['completed_requests'] ?? 0 ?></p>
                <p class="text-xs text-teal-600">Completed</p>
            </div>
            <div class="text-teal-300 text-2xl"><i class="fas fa-flag-checkered"></i></div>
        </div>
    </div>
</div>

<!-- Top Services & Categories Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-trophy text-amber-500 mr-2"></i>Most Requested Services</h4>
        <?php if (empty($topServices)): ?>
            <p class="text-gray-400 text-sm">No requests yet</p>
        <?php else: ?>
            <div class="space-y-2">
                <?php foreach ($topServices as $i => $ts): $medals = ['🥇', '🥈', '🥉']; ?>
                <div class="flex items-center justify-between py-2 <?= $i < 2 ? 'border-b border-gray-100' : '' ?>">
                    <span class="flex items-center gap-2">
                        <span class="text-lg"><?= $medals[$i] ?? '' ?></span>
                        <span class="text-sm"><?= htmlspecialchars($ts['name']) ?></span>
                    </span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs font-medium"><?= $ts['cnt'] ?> requests</span>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-chart-pie text-blue-500 mr-2"></i>Services by Category</h4>
        <?php if (empty($categoryStats)): ?>
            <p class="text-gray-400 text-sm">No categories defined</p>
        <?php else: ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ($categoryStats as $cs): $catColor = $categoryColors[$cs['category']] ?? 'gray'; ?>
                <a href="?category=<?= urlencode($cs['category']) ?>" 
                   class="px-3 py-2 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded-lg text-sm hover:bg-<?= $catColor ?>-200 transition-colors">
                    <?= htmlspecialchars($cs['category']) ?>
                    <span class="ml-1 bg-<?= $catColor ?>-200 px-1.5 py-0.5 rounded text-xs"><?= $cs['cnt'] ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Service name or code..." value="<?= htmlspecialchars($search) ?>" id="searchInput">
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
            <label class="block text-xs text-gray-500 mb-1">Type</label>
            <select name="type" class="form-input">
                <option value="">All Types</option>
                <option value="simple" <?= $serviceType === 'simple' ? 'selected' : '' ?>>Simple</option>
                <option value="complex" <?= $serviceType === 'complex' ? 'selected' : '' ?>>Complex</option>
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
        <input type="hidden" name="sort" value="<?= htmlspecialchars($sort) ?>">
        <input type="hidden" name="order" value="<?= htmlspecialchars($order) ?>">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-1"></i>Filter</button>
        <?php if ($search || $category || $status || $serviceType): ?>
        <a href="services.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Services Table -->
<div class="card overflow-hidden">
    <div class="table-container">
        <table class="w-full" id="servicesTable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('name', 'Service', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('has_tasks', 'Type', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('category', 'Category', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Docs</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Info</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('base_price', 'Price', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('request_count', 'Requests', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <?= sortLink('is_active', 'Status', $sort, $order) ?>
                    </th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-white">
                <?php if (empty($services)): ?>
                <tr><td colspan="9" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-inbox fa-2x mb-2 text-gray-300"></i><br>
                    No services found
                </td></tr>
                <?php else: foreach ($services as $s): 
                    $catColor = $categoryColors[$s['category']] ?? 'gray';
                    $hasTasks = (int)($s['has_tasks'] ?? 0);
                    $activeReqs = (int)($s['active_requests'] ?? 0);
                    $completedReqs = (int)($s['completed_requests'] ?? 0);
                ?>
                <tr class="hover:bg-gray-50 service-row" data-name="<?= strtolower($s['name'] ?? '') ?>" data-code="<?= strtolower($s['code'] ?? '') ?>">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900 service-name-link" onclick="openServiceDetail(<?= $s['id'] ?>)">
                            <?= htmlspecialchars($s['name'] ?? '') ?>
                        </p>
                        <p class="text-xs text-gray-400 font-mono"><?= htmlspecialchars($s['code'] ?? '') ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle_tasks&id=<?= $s['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'status' => $status, 'type' => $serviceType, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>" 
                           class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-medium cursor-pointer hover:opacity-80 transition-opacity
                                  <?= $hasTasks ? 'type-complex' : 'type-simple' ?>"
                           title="Click to toggle type">
                            <?php if ($hasTasks): ?>
                            <i class="fas fa-tasks"></i> Complex
                            <?php else: ?>
                            <i class="fas fa-check"></i> Simple
                            <?php endif; ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($s['category']): ?>
                        <span class="px-2 py-1 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded text-xs">
                            <?= htmlspecialchars($s['category']) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="cursor-pointer text-blue-600 hover:text-blue-800 hover:underline" onclick="openServiceDetail(<?= $s['id'] ?>, 'docs')">
                            <?= $s['doc_count'] ?? 0 ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="cursor-pointer text-purple-600 hover:text-purple-800 hover:underline" onclick="openServiceDetail(<?= $s['id'] ?>, 'info')">
                            <?= $s['info_count'] ?? 0 ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        ₹<?= number_format($s['base_price'] ?? 0) ?>
                        <?php if (($s['govt_fee'] ?? 0) > 0): ?>
                        <span class="text-xs text-gray-400 block">+₹<?= number_format($s['govt_fee']) ?> govt</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if (($s['request_count'] ?? 0) > 0): ?>
                        <div class="flex flex-col items-center">
                            <span class="font-medium text-blue-600"><?= $s['request_count'] ?></span>
                            <span class="text-xs text-gray-400">
                                <?php if ($activeReqs > 0): ?><span class="text-amber-600"><?= $activeReqs ?> active</span><?php endif; ?>
                                <?php if ($activeReqs > 0 && $completedReqs > 0): ?> · <?php endif; ?>
                                <?php if ($completedReqs > 0): ?><span class="text-green-600"><?= $completedReqs ?> done</span><?php endif; ?>
                            </span>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-300">0</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle&id=<?= $s['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'status' => $status, 'type' => $serviceType, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>" 
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 transition-opacity
                                  <?= $s['is_active'] ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' ?>"
                           title="Click to toggle status">
                            <?= $s['is_active'] ? '<i class="fas fa-check-circle"></i> Active' : '<i class="fas fa-pause-circle"></i> Inactive' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <button onclick="openServiceDetail(<?= $s['id'] ?>)" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <a href="edit_service.php?id=<?= $s['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="add_request.php?service_id=<?= $s['id'] ?>" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Create Request">
                                <i class="fas fa-plus-circle"></i>
                            </a>
                            <?php if (($s['request_count'] ?? 0) == 0): ?>
                            <a href="?action=delete&id=<?= $s['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'status' => $status, 'type' => $serviceType, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>" 
                               class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete"
                               onclick="return confirm('Delete this service?')">
                                <i class="fas fa-trash"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Summary Footer -->
<div class="flex items-center justify-between mt-4 text-xs text-gray-500">
    <div>
        Showing <strong><?= count($services) ?></strong> service(s)
        <?php if ($search || $category || $status || $serviceType): ?>(filtered)<?php endif; ?>
    </div>
    <div class="flex gap-4">
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-green-500"></span> <?= count(array_filter($services, fn($s) => $s['is_active'])) ?> Active</span>
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> <?= count(array_filter($services, fn($s) => !($s['has_tasks'] ?? 0))) ?> Simple</span>
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-purple-500"></span> <?= count(array_filter($services, fn($s) => ($s['has_tasks'] ?? 0))) ?> Complex</span>
    </div>
</div>

<!-- Service Detail Modal -->
<div id="service-modal" class="modal" onclick="if(event.target===this)closeServiceModal()">
    <div class="modal-content">
        <div class="p-6 border-b flex items-center justify-between">
            <h3 class="text-xl font-bold" id="modal-service-name">Service Details</h3>
            <button onclick="closeServiceModal()" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div id="modal-content" class="p-6">
            <div class="flex items-center justify-center py-12">
                <i class="fas fa-spinner fa-spin text-3xl text-gray-300"></i>
            </div>
        </div>
    </div>
</div>

<script>
// Live search filter
document.getElementById('searchInput')?.addEventListener('input', function(e) {
    const query = e.target.value.toLowerCase();
    document.querySelectorAll('.service-row').forEach(row => {
        const name = row.dataset.name || '';
        const code = row.dataset.code || '';
        const match = name.includes(query) || code.includes(query);
        row.style.display = match ? '' : 'none';
    });
});

// Service Detail Modal
function openServiceDetail(serviceId, tab = 'overview') {
    document.getElementById('service-modal').classList.add('show');
    document.getElementById('modal-content').innerHTML = '<div class="flex items-center justify-center py-12"><i class="fas fa-spinner fa-spin text-3xl text-gray-300"></i></div>';
    
    fetch('services.php?ajax=service_details&id=' + serviceId)
        .then(r => r.json())
        .then(data => {
            if (data.error) {
                document.getElementById('modal-content').innerHTML = '<p class="text-red-500">' + data.error + '</p>';
                return;
            }
            
            const s = data.service;
            document.getElementById('modal-service-name').textContent = s.name;
            
            let html = `
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500">Code</p>
                        <p class="font-mono font-medium">${s.code || '-'}</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500">Category</p>
                        <p class="font-medium">${s.category || '-'}</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500">Price</p>
                        <p class="font-medium">₹${Number(s.base_price || 0).toLocaleString()}</p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500">Govt Fee</p>
                        <p class="font-medium">₹${Number(s.govt_fee || 0).toLocaleString()}</p>
                    </div>
                </div>
                
                ${s.description ? `<p class="text-gray-600 mb-6">${s.description}</p>` : ''}
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Documents Required -->
                    <div>
                        <h4 class="font-bold text-gray-700 mb-3 flex items-center gap-2">
                            <i class="fas fa-file-alt text-blue-500"></i>
                            Documents Required (${data.documents.length})
                        </h4>
                        ${data.documents.length === 0 ? '<p class="text-gray-400 text-sm">No documents mapped</p>' : `
                        <div class="space-y-2 max-h-64 overflow-y-auto">
                            ${data.documents.map(d => `
                                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                                    <span class="text-sm">${d.name}</span>
                                    <span class="text-xs px-2 py-1 rounded ${d.is_required ? 'bg-red-100 text-red-700' : 'bg-gray-200 text-gray-600'}">
                                        ${d.is_required ? 'Required' : 'Optional'}
                                    </span>
                                </div>
                            `).join('')}
                        </div>`}
                    </div>
                    
                    <!-- Information Fields Required -->
                    <div>
                        <h4 class="font-bold text-gray-700 mb-3 flex items-center gap-2">
                            <i class="fas fa-info-circle text-purple-500"></i>
                            Information Fields (${data.info_fields.length})
                        </h4>
                        ${data.info_fields.length === 0 ? '<p class="text-gray-400 text-sm">No info fields mapped</p>' : `
                        <div class="space-y-2 max-h-64 overflow-y-auto">
                            ${data.info_fields.map(f => `
                                <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                                    <div>
                                        <span class="text-sm">${f.name}</span>
                                        <span class="text-xs text-gray-400 ml-2">(${f.field_type})</span>
                                    </div>
                                    <span class="text-xs px-2 py-1 rounded ${f.is_required ? 'bg-red-100 text-red-700' : 'bg-gray-200 text-gray-600'}">
                                        ${f.is_required ? 'Required' : 'Optional'}
                                    </span>
                                </div>
                            `).join('')}
                        </div>`}
                    </div>
                </div>
                
                ${data.tasks.length > 0 ? `
                <div class="mt-6">
                    <h4 class="font-bold text-gray-700 mb-3 flex items-center gap-2">
                        <i class="fas fa-tasks text-indigo-500"></i>
                        Task Templates (${data.tasks.length})
                    </h4>
                    <div class="space-y-2">
                        ${data.tasks.map((t, i) => `
                            <div class="flex items-center gap-3 p-2 bg-indigo-50 rounded">
                                <span class="w-6 h-6 bg-indigo-200 text-indigo-700 rounded-full flex items-center justify-center text-xs font-bold">${i + 1}</span>
                                <span class="text-sm">${t.name}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>` : ''}
                
                ${data.recent_requests.length > 0 ? `
                <div class="mt-6">
                    <h4 class="font-bold text-gray-700 mb-3 flex items-center gap-2">
                        <i class="fas fa-history text-green-500"></i>
                        Recent Requests
                    </h4>
                    <div class="space-y-2">
                        ${data.recent_requests.map(r => `
                            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                                <div>
                                    <span class="font-mono text-sm text-blue-600">${r.request_number}</span>
                                    <span class="text-sm text-gray-500 ml-2">${r.client_name}</span>
                                </div>
                                <span class="text-xs px-2 py-1 rounded bg-gray-200">${r.status}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>` : ''}
                
                <div class="mt-6 pt-4 border-t flex gap-2">
                    <a href="edit_service.php?id=${s.id}" class="btn btn-primary text-sm"><i class="fas fa-edit mr-1"></i>Edit Service</a>
                    <a href="service_documents.php?id=${s.id}" class="btn bg-blue-100 text-blue-700 hover:bg-blue-200 text-sm"><i class="fas fa-file-alt mr-1"></i>Manage Docs</a>
                    <a href="service_info_fields.php?id=${s.id}" class="btn bg-purple-100 text-purple-700 hover:bg-purple-200 text-sm"><i class="fas fa-info-circle mr-1"></i>Manage Info</a>
                </div>
            `;
            
            document.getElementById('modal-content').innerHTML = html;
        })
        .catch(err => {
            document.getElementById('modal-content').innerHTML = '<p class="text-red-500">Error loading service details</p>';
        });
}

function closeServiceModal() {
    document.getElementById('service-modal').classList.remove('show');
}
</script>

<?php require_once 'includes/footer.php'; ?>
