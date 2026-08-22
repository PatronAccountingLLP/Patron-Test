<?php
/**
 * PATRON - Tasks List (Role-Based Access)
 * Fixed to match actual database columns (title, not task_name)
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'Tasks';
$isAdmin = function_exists('canSeeAllData') ? canSeeAllData() : isAdmin();
$taskFilter = function_exists('getTaskAccessFilter') ? getTaskAccessFilter('t') : '';

// Filters
$status = sanitize($_GET['status'] ?? '');
$assignedTo = (int)($_GET['assigned_to'] ?? 0);
$search = sanitize($_GET['search'] ?? '');
$showAll = isset($_GET['show_all']);

// Build WHERE
$where = ["t.deleted_at IS NULL"];
$params = [];

// Role-based filter
if ($taskFilter) {
    // Filter is already a string starting with " AND"
}

// Default: show pending unless show_all or specific status
if (!$showAll && !$status) {
    $where[] = "t.status NOT IN ('COMPLETED', 'CANCELLED')";
}

if ($status) { $where[] = "t.status = ?"; $params[] = $status; }
if ($assignedTo) { $where[] = "t.assigned_to = ?"; $params[] = $assignedTo; }
if ($search) {
    $where[] = "(t.title LIKE ? OR sr.request_number LIKE ? OR c.name LIKE ?)";
    $params = array_merge($params, ["%$search%", "%$search%", "%$search%"]);
}

$whereClause = implode(' AND ', $where) . $taskFilter;

$tasks = dbFetchAll("
    SELECT t.*, sr.request_number, s.name as service_name, c.name as client_name, c.id as client_id,
           u.display_name as assigned_to_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON t.assigned_to = u.id
    WHERE $whereClause
    ORDER BY 
        CASE WHEN t.status = 'IN_PROGRESS' THEN 1 WHEN t.status = 'PENDING' THEN 2 ELSE 3 END,
        t.due_date ASC, t.created_at DESC
", $params) ?: [];

// Stats
$statsWhere = "t.deleted_at IS NULL" . $taskFilter;
$stats = dbFetchOne("
    SELECT COUNT(*) as total,
           SUM(status = 'PENDING') as pending,
           SUM(status = 'IN_PROGRESS') as in_progress,
           SUM(status = 'COMPLETED') as completed,
           SUM(due_date < CURDATE() AND status NOT IN ('COMPLETED','CANCELLED')) as overdue
    FROM tasks t WHERE $statsWhere
");

$teamMembers = $isAdmin ? (dbFetchAll("SELECT id, display_name FROM users WHERE user_type='INTERNAL' AND status='ACTIVE' AND deleted_at IS NULL ORDER BY display_name") ?: []) : [];

$statusConfig = [
    'PENDING' => ['color' => 'gray', 'label' => 'Pending'],
    'IN_PROGRESS' => ['color' => 'blue', 'label' => 'In Progress'],
    'SUBMITTED_FOR_REVIEW' => ['color' => 'purple', 'label' => 'Under Review'],
    'COMPLETED' => ['color' => 'green', 'label' => 'Completed'],
    'CANCELLED' => ['color' => 'red', 'label' => 'Cancelled']
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">Tasks</h2>
        <p class="text-gray-500 text-sm"><?= $isAdmin ? 'All tasks' : '<i class="fas fa-filter text-amber-500"></i> Your assigned tasks' ?></p>
    </div>
</div>

<div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-6">
    <div class="card p-4 text-center"><p class="text-2xl font-bold text-blue-600"><?= $stats['total'] ?? 0 ?></p><p class="text-xs text-gray-500">Total</p></div>
    <div class="card p-4 text-center"><p class="text-2xl font-bold text-gray-600"><?= $stats['pending'] ?? 0 ?></p><p class="text-xs text-gray-500">Pending</p></div>
    <div class="card p-4 text-center"><p class="text-2xl font-bold text-blue-500"><?= $stats['in_progress'] ?? 0 ?></p><p class="text-xs text-gray-500">In Progress</p></div>
    <div class="card p-4 text-center"><p class="text-2xl font-bold text-green-600"><?= $stats['completed'] ?? 0 ?></p><p class="text-xs text-gray-500">Completed</p></div>
    <div class="card p-4 text-center"><p class="text-2xl font-bold text-red-600"><?= $stats['overdue'] ?? 0 ?></p><p class="text-xs text-gray-500">Overdue</p></div>
</div>

<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[200px]"><label class="block text-xs text-gray-500 mb-1">Search</label><input type="text" name="search" class="form-input" placeholder="Task, Request #, Client..." value="<?= htmlspecialchars($search) ?>"></div>
        <div><label class="block text-xs text-gray-500 mb-1">Status</label><select name="status" class="form-input"><option value="">Pending Only</option><?php foreach ($statusConfig as $k => $v): ?><option value="<?= $k ?>" <?= $status === $k ? 'selected' : '' ?>><?= $v['label'] ?></option><?php endforeach; ?></select></div>
        <?php if ($isAdmin && $teamMembers): ?>
        <div><label class="block text-xs text-gray-500 mb-1">Assigned To</label><select name="assigned_to" class="form-input"><option value="">All</option><?php foreach ($teamMembers as $t): ?><option value="<?= $t['id'] ?>" <?= $assignedTo == $t['id'] ? 'selected' : '' ?>><?= htmlspecialchars($t['display_name'] ?? '') ?></option><?php endforeach; ?></select></div>
        <?php endif; ?>
        <label class="flex items-center gap-2"><input type="checkbox" name="show_all" <?= $showAll ? 'checked' : '' ?>><span class="text-sm">Show All</span></label>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>
</div>

<div class="card overflow-hidden">
    <table class="w-full"><thead class="bg-gray-50"><tr>
        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Task</th>
        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Request</th>
        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Due Date</th>
        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Assigned To</th>
        <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
    </tr></thead><tbody class="divide-y">
    <?php if (empty($tasks)): ?>
    <tr><td colspan="7" class="px-4 py-8 text-center text-gray-500"><?= $isAdmin ? 'No tasks found.' : 'No tasks assigned to you.' ?></td></tr>
    <?php else: foreach ($tasks as $t): 
        $sc = $statusConfig[$t['status']] ?? ['color'=>'gray','label'=>$t['status']];
        $isOverdue = $t['due_date'] && $t['due_date'] < date('Y-m-d') && !in_array($t['status'], ['COMPLETED','CANCELLED']);
    ?>
    <tr class="hover:bg-gray-50 <?= $isOverdue ? 'bg-red-50' : '' ?>">
        <td class="px-4 py-3"><a href="view_client.php?id=<?= $t['client_id'] ?>" class="font-medium text-blue-600 hover:underline"><?= htmlspecialchars($t['client_name'] ?? '') ?></a></td>
        <td class="px-4 py-3"><a href="view_task.php?id=<?= $t['id'] ?>" class="font-medium"><?= htmlspecialchars($t['title'] ?? 'Task') ?></a><p class="text-xs text-gray-400"><?= htmlspecialchars($t['service_name'] ?? '') ?></p></td>
        <td class="px-4 py-3"><a href="view_request.php?id=<?= $t['service_request_id'] ?>" class="font-mono text-sm text-gray-600"><?= htmlspecialchars($t['request_number'] ?? '') ?></a></td>
        <td class="px-4 py-3 text-center"><span class="px-2 py-1 bg-<?= $sc['color'] ?>-100 text-<?= $sc['color'] ?>-700 rounded text-xs"><?= $sc['label'] ?></span></td>
        <td class="px-4 py-3 text-center text-sm <?= $isOverdue ? 'text-red-600 font-medium' : 'text-gray-600' ?>"><?= $t['due_date'] ? date('d M', strtotime($t['due_date'])) : '-' ?><?= $isOverdue ? ' <i class="fas fa-exclamation-triangle"></i>' : '' ?></td>
        <td class="px-4 py-3 text-sm text-gray-600"><?= htmlspecialchars($t['assigned_to_name'] ?? '') ?: '<span class="text-gray-400">Unassigned</span>' ?></td>
        <td class="px-4 py-3 text-center"><a href="view_task.php?id=<?= $t['id'] ?>" class="text-blue-600"><i class="fas fa-eye"></i></a></td>
    </tr>
    <?php endforeach; endif; ?>
    </tbody></table>
</div>
<p class="text-xs text-gray-400 mt-4 text-right">Showing <?= count($tasks) ?> task(s)</p>

<?php require_once 'includes/footer.php'; ?>
