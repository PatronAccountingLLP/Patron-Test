<?php
/**
 * PATRON ADMIN DASHBOARD
 * Activity Logs Page (view_logs.php)
 */

$pageTitle = 'Activity Logs';
require_once 'includes/header.php';
requireAdmin();

// Get filters
$search = sanitize($_GET['search'] ?? '');
$action = sanitize($_GET['action_filter'] ?? '');
$resourceType = sanitize($_GET['resource_type'] ?? '');
$userId = (int)($_GET['user_id'] ?? 0);
$dateFrom = sanitize($_GET['date_from'] ?? '');
$dateTo = sanitize($_GET['date_to'] ?? '');

// Build query
$where = ["1=1"];
$params = [];

if ($search) {
    $where[] = "(u.display_name LIKE ? OR al.resource_type LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}
if ($action) {
    $where[] = "al.action = ?";
    $params[] = $action;
}
if ($resourceType) {
    $where[] = "al.resource_type = ?";
    $params[] = $resourceType;
}
if ($userId) {
    $where[] = "al.user_id = ?";
    $params[] = $userId;
}
if ($dateFrom) {
    $where[] = "DATE(al.created_at) >= ?";
    $params[] = $dateFrom;
}
if ($dateTo) {
    $where[] = "DATE(al.created_at) <= ?";
    $params[] = $dateTo;
}

$whereClause = implode(' AND ', $where);

// Pagination
$page = max(1, (int)($_GET['page'] ?? 1));
$perPage = 25;
$offset = ($page - 1) * $perPage;

$totalCount = dbFetchOne("
    SELECT COUNT(*) as count 
    FROM activity_logs al 
    LEFT JOIN users u ON al.user_id = u.id 
    WHERE $whereClause
", $params)['count'];
$totalPages = ceil($totalCount / $perPage);

// Get logs
$logs = dbFetchAll("
    SELECT al.*, u.display_name as user_name, u.email as user_email
    FROM activity_logs al
    LEFT JOIN users u ON al.user_id = u.id
    WHERE $whereClause
    ORDER BY al.created_at DESC
    LIMIT $perPage OFFSET $offset
", $params);

// Get filter options
$actions = dbFetchAll("SELECT DISTINCT action FROM activity_logs ORDER BY action");
$resourceTypes = dbFetchAll("SELECT DISTINCT resource_type FROM activity_logs ORDER BY resource_type");
$users = dbFetchAll("SELECT id, display_name FROM users WHERE user_type = 'INTERNAL' AND deleted_at IS NULL ORDER BY display_name");

// Action icons mapping
$actionIcons = [
    'LOGIN' => 'fa-sign-in-alt text-green-600',
    'LOGOUT' => 'fa-sign-out-alt text-gray-600',
    'CREATE' => 'fa-plus text-blue-600',
    'UPDATE' => 'fa-edit text-yellow-600',
    'DELETE' => 'fa-trash text-red-600',
    'UPLOAD' => 'fa-upload text-purple-600',
];
?>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="space-y-4">
        <div class="flex flex-wrap gap-4">
            <div class="flex-1 min-w-[200px]">
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" 
                       placeholder="Search logs..." class="form-input">
            </div>
            <select name="action_filter" class="form-input w-40">
                <option value="">All Actions</option>
                <?php foreach ($actions as $a): ?>
                <option value="<?= htmlspecialchars($a['action']) ?>" <?= $action === $a['action'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($a['action']) ?>
                </option>
                <?php endforeach; ?>
            </select>
            <select name="resource_type" class="form-input w-40">
                <option value="">All Resources</option>
                <?php foreach ($resourceTypes as $r): ?>
                <option value="<?= htmlspecialchars($r['resource_type']) ?>" <?= $resourceType === $r['resource_type'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($r['resource_type']) ?>
                </option>
                <?php endforeach; ?>
            </select>
            <select name="user_id" class="form-input w-48">
                <option value="">All Users</option>
                <?php foreach ($users as $u): ?>
                <option value="<?= $u['id'] ?>" <?= $userId == $u['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($u['display_name']) ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-secondary">
                <i class="fas fa-filter mr-2"></i> Filter
            </button>
        </div>
    </form>
</div>

<!-- Logs Table -->
<div class="card">
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>User</th>
                    <th>Action</th>
                    <th>Resource</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($logs)): ?>
                <tr>
                    <td colspan="5" class="text-center py-8 text-gray-500">
                        <i class="fas fa-history text-4xl mb-3 opacity-50"></i>
                        <p>No activity logs found.</p>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach ($logs as $log): ?>
                <tr>
                    <td class="whitespace-nowrap">
                        <div class="text-sm font-medium"><?= formatDate($log['created_at'], 'd M Y') ?></div>
                        <div class="text-xs text-gray-500"><?= formatDate($log['created_at'], 'H:i:s') ?></div>
                    </td>
                    <td>
                        <?php if ($log['user_name']): ?>
                        <div class="text-sm font-medium"><?= htmlspecialchars($log['user_name']) ?></div>
                        <?php else: ?>
                        <span class="text-gray-400">System</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <span class="inline-flex items-center gap-2">
                            <i class="fas <?= $actionIcons[$log['action']] ?? 'fa-circle text-gray-400' ?>"></i>
                            <?= htmlspecialchars($log['action']) ?>
                        </span>
                    </td>
                    <td>
                        <span class="text-sm">
                            <?= htmlspecialchars($log['resource_type']) ?>
                            <?php if ($log['resource_id']): ?>
                            <span class="text-gray-500">#<?= $log['resource_id'] ?></span>
                            <?php endif; ?>
                        </span>
                    </td>
                    <td class="text-sm text-gray-600 font-mono">
                        <?= htmlspecialchars($log['ip_address'] ?? '-') ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
    <div class="p-4 border-t border-gray-200 flex items-center justify-between">
        <p class="text-sm text-gray-600">
            Showing <?= $offset + 1 ?> to <?= min($offset + $perPage, $totalCount) ?> of <?= $totalCount ?> logs
        </p>
        <div class="flex gap-2">
            <?php if ($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>" class="btn btn-secondary text-sm">Previous</a>
            <?php endif; ?>
            <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 ?>" class="btn btn-secondary text-sm">Next</a>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
