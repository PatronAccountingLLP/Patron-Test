<?php
/**
 * PATRON - Supervisor Dashboard
 * Bird's eye view of team performance, tasks, and workload
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'Supervisor Dashboard';
$userId = $_SESSION['user_id'] ?? 0;
$currentUser = getCurrentUser();

// Check if user is a supervisor (has team members reporting to them)
$teamMembers = dbFetchAll("
    SELECT u.*, r.name as role_name,
           (SELECT COUNT(*) FROM tasks WHERE assigned_to = u.id AND status NOT IN ('COMPLETED','CANCELLED') AND deleted_at IS NULL) as pending_tasks,
           (SELECT COUNT(*) FROM tasks WHERE assigned_to = u.id AND due_date < CURDATE() AND status NOT IN ('COMPLETED','CANCELLED') AND deleted_at IS NULL) as overdue_tasks,
           (SELECT COUNT(*) FROM service_requests WHERE assigned_to = u.id AND status NOT IN ('COMPLETED','CANCELLED','REJECTED') AND deleted_at IS NULL) as active_requests
    FROM users u
    LEFT JOIN user_roles ur ON u.id = ur.user_id AND ur.revoked_at IS NULL
    LEFT JOIN roles r ON ur.role_id = r.id
    WHERE u.supervisor_id = ? AND u.deleted_at IS NULL AND u.status = 'ACTIVE'
    ORDER BY u.display_name
", [$userId]) ?: [];

if (empty($teamMembers) && !isAdmin()) {
    setFlash('error', 'You do not have any team members assigned.');
    header('Location: dashboard.php');
    exit;
}

$teamMemberIds = array_column($teamMembers, 'id');
$teamMemberIds[] = $userId; // Include self
$teamIdsStr = implode(',', array_map('intval', $teamMemberIds));

// Team Stats
$teamStats = dbFetchOne("
    SELECT 
        (SELECT COUNT(*) FROM tasks WHERE assigned_to IN ($teamIdsStr) AND deleted_at IS NULL) as total_tasks,
        (SELECT COUNT(*) FROM tasks WHERE assigned_to IN ($teamIdsStr) AND status = 'PENDING' AND deleted_at IS NULL) as pending_tasks,
        (SELECT COUNT(*) FROM tasks WHERE assigned_to IN ($teamIdsStr) AND status = 'IN_PROGRESS' AND deleted_at IS NULL) as in_progress_tasks,
        (SELECT COUNT(*) FROM tasks WHERE assigned_to IN ($teamIdsStr) AND status = 'COMPLETED' AND deleted_at IS NULL) as completed_tasks,
        (SELECT COUNT(*) FROM tasks WHERE assigned_to IN ($teamIdsStr) AND due_date < CURDATE() AND status NOT IN ('COMPLETED','CANCELLED') AND deleted_at IS NULL) as overdue_tasks,
        (SELECT COUNT(*) FROM service_requests WHERE assigned_to IN ($teamIdsStr) AND status NOT IN ('COMPLETED','CANCELLED','REJECTED') AND deleted_at IS NULL) as active_requests
");

// Team members on leave today
$teamOnLeave = [];
try {
    $teamOnLeave = dbFetchAll("
        SELECT lr.*, u.display_name as member_name, lt.name as leave_type, lt.color,
               backup.display_name as backup_name, lr.end_date
        FROM leave_requests lr
        JOIN users u ON lr.user_id = u.id
        JOIN leave_types lt ON lr.leave_type_id = lt.id
        LEFT JOIN users backup ON lr.backup_person_id = backup.id
        WHERE u.supervisor_id = ? AND lr.status = 'APPROVED'
        AND CURDATE() BETWEEN lr.start_date AND lr.end_date
    ", [$userId]) ?: [];
} catch (Exception $e) {}

// Upcoming leave (next 7 days)
$upcomingLeave = [];
try {
    $upcomingLeave = dbFetchAll("
        SELECT lr.*, u.display_name as member_name, lt.name as leave_type
        FROM leave_requests lr
        JOIN users u ON lr.user_id = u.id
        JOIN leave_types lt ON lr.leave_type_id = lt.id
        WHERE u.supervisor_id = ? AND lr.status = 'APPROVED'
        AND lr.start_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
        ORDER BY lr.start_date
    ", [$userId]) ?: [];
} catch (Exception $e) {}

// All team tasks (pending/in-progress)
$teamTasks = dbFetchAll("
    SELECT t.*, sr.request_number, c.name as client_name, c.id as client_id,
           s.name as service_name, u.display_name as assigned_to_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    LEFT JOIN users u ON t.assigned_to = u.id
    WHERE t.assigned_to IN ($teamIdsStr) 
    AND t.status NOT IN ('COMPLETED', 'CANCELLED')
    AND t.deleted_at IS NULL
    ORDER BY 
        CASE WHEN t.due_date < CURDATE() THEN 0 ELSE 1 END,
        t.due_date ASC
    LIMIT 20
") ?: [];

// Overdue tasks requiring attention
$overdueTasks = dbFetchAll("
    SELECT t.*, sr.request_number, c.name as client_name, u.display_name as assigned_to_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON t.assigned_to = u.id
    WHERE t.assigned_to IN ($teamIdsStr) 
    AND t.due_date < CURDATE()
    AND t.status NOT IN ('COMPLETED', 'CANCELLED')
    AND t.deleted_at IS NULL
    ORDER BY t.due_date ASC
") ?: [];

// Tasks due this week
$tasksDueThisWeek = dbFetchAll("
    SELECT t.*, u.display_name as assigned_to_name, c.name as client_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON t.assigned_to = u.id
    WHERE t.assigned_to IN ($teamIdsStr)
    AND t.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
    AND t.status NOT IN ('COMPLETED', 'CANCELLED')
    AND t.deleted_at IS NULL
    ORDER BY t.due_date ASC
") ?: [];

// Unassigned tasks (for reassignment)
$unassignedTasks = dbFetchAll("
    SELECT t.*, sr.request_number, c.name as client_name, s.name as service_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    WHERE (t.assigned_to IS NULL OR t.assigned_to IN (
        SELECT user_id FROM leave_requests 
        WHERE status = 'APPROVED' AND CURDATE() BETWEEN start_date AND end_date
    ))
    AND t.status NOT IN ('COMPLETED', 'CANCELLED')
    AND t.deleted_at IS NULL
    ORDER BY t.due_date ASC
    LIMIT 10
") ?: [];

// Tasks of members on leave (need attention)
$leavePersonTasks = [];
if (!empty($teamOnLeave)) {
    $leaveUserIds = array_column($teamOnLeave, 'user_id');
    $leaveIdsStr = implode(',', array_map('intval', $leaveUserIds));
    $leavePersonTasks = dbFetchAll("
        SELECT t.*, sr.request_number, c.name as client_name, u.display_name as assigned_to_name
        FROM tasks t
        JOIN service_requests sr ON t.service_request_id = sr.id
        JOIN clients c ON sr.client_id = c.id
        LEFT JOIN users u ON t.assigned_to = u.id
        WHERE t.assigned_to IN ($leaveIdsStr)
        AND t.status NOT IN ('COMPLETED', 'CANCELLED')
        AND t.deleted_at IS NULL
        ORDER BY t.due_date ASC
    ") ?: [];
}

require_once 'includes/header.php';
?>

<style>
.member-card { transition: all 0.2s; }
.member-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.stat-ring { width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
.workload-bar { height: 8px; border-radius: 4px; background: #e5e7eb; overflow: hidden; }
.workload-fill { height: 100%; border-radius: 4px; transition: width 0.3s; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold">Supervisor Dashboard</h1>
        <p class="text-gray-500">Team overview & workload management</p>
    </div>
    <div class="flex gap-2">
        <a href="dashboard.php" class="btn btn-secondary"><i class="fas fa-home mr-2"></i>Main Dashboard</a>
        <a href="team.php" class="btn btn-secondary"><i class="fas fa-users mr-2"></i>Manage Team</a>
    </div>
</div>

<!-- Alert: Team on Leave -->
<?php if (!empty($teamOnLeave)): ?>
<div class="card p-4 bg-red-50 border-l-4 border-red-500 mb-6">
    <h3 class="font-semibold text-red-800 mb-2"><i class="fas fa-plane-departure mr-2"></i>Team Members on Leave Today</h3>
    <div class="flex flex-wrap gap-3">
        <?php foreach ($teamOnLeave as $ol): ?>
        <div class="bg-white rounded-lg px-3 py-2 shadow-sm">
            <p class="font-medium"><?= htmlspecialchars($ol['member_name'] ?? '') ?></p>
            <p class="text-xs text-gray-500"><?= $ol['leave_type'] ?> till <?= date('d M', strtotime($ol['end_date'])) ?></p>
            <?php if ($ol['backup_name']): ?>
            <p class="text-xs text-green-600"><i class="fas fa-user-check mr-1"></i>Backup: <?= htmlspecialchars($ol['backup_name']) ?></p>
            <?php else: ?>
            <p class="text-xs text-red-600"><i class="fas fa-exclamation-triangle mr-1"></i>No backup assigned</p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php if (!empty($leavePersonTasks)): ?>
    <p class="text-sm text-red-700 mt-2"><i class="fas fa-tasks mr-1"></i><?= count($leavePersonTasks) ?> pending tasks need reassignment</p>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Team Stats -->
<div class="grid grid-cols-2 md:grid-cols-6 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-blue-600"><?= count($teamMembers) ?></p>
        <p class="text-xs text-gray-500">Team Members</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-purple-600"><?= $teamStats['active_requests'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Active Requests</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-gray-600"><?= $teamStats['pending_tasks'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Pending Tasks</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-blue-500"><?= $teamStats['in_progress_tasks'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">In Progress</p>
    </div>
    <div class="card p-4 text-center bg-red-50">
        <p class="text-3xl font-bold text-red-600"><?= $teamStats['overdue_tasks'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-green-600"><?= $teamStats['completed_tasks'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Completed</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Team Members Workload -->
    <div class="lg:col-span-2 card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-semibold"><i class="fas fa-users mr-2"></i>Team Workload</h3>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($teamMembers as $m): 
                    $workload = min(100, ($m['pending_tasks'] ?? 0) * 10);
                    $workloadColor = $workload > 70 ? 'red' : ($workload > 40 ? 'amber' : 'green');
                    $isOnLeave = false;
                    foreach ($teamOnLeave as $ol) {
                        if ($ol['user_id'] == $m['id']) { $isOnLeave = true; break; }
                    }
                ?>
                <div class="member-card p-4 border rounded-xl <?= $isOnLeave ? 'bg-red-50 border-red-200' : '' ?>">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-semibold">
                            <?= strtoupper(substr($m['display_name'] ?? 'U', 0, 2)) ?>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium"><?= htmlspecialchars($m['display_name'] ?? '') ?></p>
                            <p class="text-xs text-gray-500"><?= $m['role_name'] ?? 'Team Member' ?></p>
                        </div>
                        <?php if ($isOnLeave): ?>
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">On Leave</span>
                        <?php elseif ($m['overdue_tasks'] > 0): ?>
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs"><?= $m['overdue_tasks'] ?> overdue</span>
                        <?php endif; ?>
                    </div>
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-500">Tasks: <?= $m['pending_tasks'] ?? 0 ?> pending</span>
                        <span class="text-gray-500">Requests: <?= $m['active_requests'] ?? 0 ?></span>
                    </div>
                    <div class="workload-bar">
                        <div class="workload-fill bg-<?= $workloadColor ?>-500" style="width: <?= $workload ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <!-- Upcoming Leave -->
    <div class="card">
        <div class="p-4 border-b bg-amber-50">
            <h3 class="font-semibold text-amber-800"><i class="fas fa-calendar-alt mr-2"></i>Upcoming Leave (7 days)</h3>
        </div>
        <div class="divide-y max-h-80 overflow-y-auto">
            <?php if (empty($upcomingLeave)): ?>
            <p class="p-4 text-gray-500 text-center text-sm">No upcoming leaves</p>
            <?php else: foreach ($upcomingLeave as $ul): ?>
            <div class="p-3">
                <p class="font-medium text-sm"><?= htmlspecialchars($ul['member_name'] ?? '') ?></p>
                <p class="text-xs text-gray-500">
                    <?= date('d M', strtotime($ul['start_date'])) ?> - <?= date('d M', strtotime($ul['end_date'])) ?>
                    (<?= $ul['leave_type'] ?>)
                </p>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Overdue Tasks -->
    <div class="card">
        <div class="p-4 border-b bg-red-50">
            <h3 class="font-semibold text-red-800"><i class="fas fa-exclamation-triangle mr-2"></i>Overdue Tasks (<?= count($overdueTasks) ?>)</h3>
        </div>
        <div class="divide-y max-h-96 overflow-y-auto">
            <?php if (empty($overdueTasks)): ?>
            <p class="p-4 text-gray-500 text-center text-sm">No overdue tasks 🎉</p>
            <?php else: foreach ($overdueTasks as $t): ?>
            <a href="view_task.php?id=<?= $t['id'] ?>" class="block p-3 hover:bg-red-50">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="font-medium text-sm"><?= htmlspecialchars($t['title'] ?? 'Task') ?></p>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($t['client_name'] ?? '') ?></p>
                        <p class="text-xs text-gray-400">Assigned: <?= htmlspecialchars($t['assigned_to_name'] ?? 'Unassigned') ?></p>
                    </div>
                    <span class="text-xs text-red-600 font-medium"><?= date('d M', strtotime($t['due_date'])) ?></span>
                </div>
            </a>
            <?php endforeach; endif; ?>
        </div>
    </div>
    
    <!-- Tasks Due This Week -->
    <div class="card">
        <div class="p-4 border-b bg-blue-50">
            <h3 class="font-semibold text-blue-800"><i class="fas fa-clock mr-2"></i>Due This Week (<?= count($tasksDueThisWeek) ?>)</h3>
        </div>
        <div class="divide-y max-h-96 overflow-y-auto">
            <?php if (empty($tasksDueThisWeek)): ?>
            <p class="p-4 text-gray-500 text-center text-sm">No tasks due this week</p>
            <?php else: foreach ($tasksDueThisWeek as $t): ?>
            <a href="view_task.php?id=<?= $t['id'] ?>" class="block p-3 hover:bg-blue-50">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="font-medium text-sm"><?= htmlspecialchars($t['title'] ?? 'Task') ?></p>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($t['client_name'] ?? '') ?></p>
                        <p class="text-xs text-gray-400"><?= htmlspecialchars($t['assigned_to_name'] ?? 'Unassigned') ?></p>
                    </div>
                    <span class="text-xs text-blue-600"><?= date('D, d M', strtotime($t['due_date'])) ?></span>
                </div>
            </a>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>

<!-- Tasks of Leave Members -->
<?php if (!empty($leavePersonTasks)): ?>
<div class="card mt-6">
    <div class="p-4 border-b bg-orange-50">
        <h3 class="font-semibold text-orange-800">
            <i class="fas fa-user-clock mr-2"></i>Tasks of Members on Leave (<?= count($leavePersonTasks) ?>)
            <span class="text-sm font-normal text-orange-600 ml-2">- May need reassignment</span>
        </h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Task</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Client</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Assigned To</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">Due Date</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($leavePersonTasks as $t): ?>
                <tr class="hover:bg-orange-50">
                    <td class="px-4 py-2 text-sm"><?= htmlspecialchars($t['title'] ?? 'Task') ?></td>
                    <td class="px-4 py-2 text-sm"><?= htmlspecialchars($t['client_name'] ?? '') ?></td>
                    <td class="px-4 py-2 text-sm text-orange-600"><?= htmlspecialchars($t['assigned_to_name'] ?? '') ?> (on leave)</td>
                    <td class="px-4 py-2 text-center text-sm"><?= $t['due_date'] ? date('d M', strtotime($t['due_date'])) : '-' ?></td>
                    <td class="px-4 py-2 text-center">
                        <a href="view_task.php?id=<?= $t['id'] ?>" class="text-blue-600 text-sm hover:underline">
                            <i class="fas fa-edit mr-1"></i>Reassign
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>

<!-- All Team Tasks -->
<div class="card mt-6">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-tasks mr-2"></i>All Team Tasks</h3>
        <a href="tasks.php" class="text-blue-600 text-sm hover:underline">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Task</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Client</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Assigned To</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">Status</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">Due</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($teamTasks as $t): 
                    $isOverdue = $t['due_date'] && $t['due_date'] < date('Y-m-d');
                    $statusColors = ['PENDING'=>'gray','IN_PROGRESS'=>'blue','COMPLETED'=>'green'];
                ?>
                <tr class="hover:bg-gray-50 <?= $isOverdue ? 'bg-red-50' : '' ?>">
                    <td class="px-4 py-2">
                        <a href="view_task.php?id=<?= $t['id'] ?>" class="font-medium text-sm hover:text-blue-600"><?= htmlspecialchars($t['title'] ?? 'Task') ?></a>
                        <p class="text-xs text-gray-400"><?= htmlspecialchars($t['service_name'] ?? '') ?></p>
                    </td>
                    <td class="px-4 py-2 text-sm"><?= htmlspecialchars($t['client_name'] ?? '') ?></td>
                    <td class="px-4 py-2 text-sm"><?= htmlspecialchars($t['assigned_to_name'] ?? 'Unassigned') ?></td>
                    <td class="px-4 py-2 text-center">
                        <span class="px-2 py-1 bg-<?= $statusColors[$t['status']] ?? 'gray' ?>-100 text-<?= $statusColors[$t['status']] ?? 'gray' ?>-700 rounded text-xs">
                            <?= str_replace('_', ' ', $t['status'] ?? '') ?>
                        </span>
                    </td>
                    <td class="px-4 py-2 text-center text-sm <?= $isOverdue ? 'text-red-600 font-medium' : '' ?>">
                        <?= $t['due_date'] ? date('d M', strtotime($t['due_date'])) : '-' ?>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <a href="view_task.php?id=<?= $t['id'] ?>" class="text-blue-600"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
