<?php
/**
 * PATRON - Task Reassignment
 * Allows supervisors to reassign tasks from one team member to another
 * Especially useful when someone is on leave
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Reassign Tasks';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Get team members (for supervisor) or all users (for admin)
if ($isAdmin) {
    $allUsers = dbFetchAll("
        SELECT id, display_name, profile_photo 
        FROM users 
        WHERE deleted_at IS NULL AND user_type = 'INTERNAL' AND status = 'ACTIVE'
        ORDER BY display_name
    ") ?: [];
    $teamMemberIds = array_column($allUsers, 'id');
} else {
    $allUsers = dbFetchAll("
        SELECT id, display_name, profile_photo 
        FROM users 
        WHERE supervisor_id = ? AND deleted_at IS NULL AND user_type = 'INTERNAL'
        ORDER BY display_name
    ", [$userId]) ?: [];
    $teamMemberIds = array_column($allUsers, 'id');
    
    // Add self to list
    $allUsers[] = ['id' => $userId, 'display_name' => $currentUser['display_name'], 'profile_photo' => $currentUser['profile_photo'] ?? null];
}

if (empty($teamMemberIds) && !$isAdmin) {
    setFlash('error', 'You do not have any team members to manage.');
    header('Location: dashboard.php');
    exit;
}

$fromUserId = (int)($_GET['user_id'] ?? 0);
$leaveId = (int)($_GET['leave_id'] ?? 0);

// Verify access to this user
if ($fromUserId && !$isAdmin && !in_array($fromUserId, $teamMemberIds) && $fromUserId != $userId) {
    setFlash('error', 'You do not have permission to reassign tasks for this user.');
    header('Location: dashboard.php');
    exit;
}

// Get from user info
$fromUser = null;
if ($fromUserId) {
    $fromUser = dbFetchOne("SELECT id, display_name FROM users WHERE id = ?", [$fromUserId]);
}

// Get leave info if provided
$leaveInfo = null;
if ($leaveId) {
    $leaveInfo = dbFetchOne("
        SELECT lr.*, u.display_name 
        FROM leave_requests lr 
        JOIN users u ON lr.user_id = u.id 
        WHERE lr.id = ?
    ", [$leaveId]);
}

// Handle POST - Reassign tasks
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'reassign') {
        $taskIds = $_POST['task_ids'] ?? [];
        $toUserId = (int)($_POST['to_user_id'] ?? 0);
        
        if (!empty($taskIds) && $toUserId) {
            $count = 0;
            foreach ($taskIds as $taskId) {
                $taskId = (int)$taskId;
                $task = dbFetchOne("
                    SELECT id, assigned_to FROM service_requests 
                    WHERE id = ? AND status NOT IN ('COMPLETED', 'DONE', 'CANCELLED') AND deleted_at IS NULL
                ", [$taskId]);
                
                if ($task && ($isAdmin || in_array($task['assigned_to'], $teamMemberIds) || $task['assigned_to'] == $userId)) {
                    dbExecute("UPDATE service_requests SET assigned_to = ? WHERE id = ?", [$toUserId, $taskId]);
                    $count++;
                }
            }
            
            if ($count > 0) {
                setFlash('success', "$count task(s) reassigned successfully.");
            }
        } else {
            setFlash('error', 'Please select tasks and target user.');
        }
        
        header('Location: reassign_tasks.php' . ($fromUserId ? '?user_id=' . $fromUserId : ''));
        exit;
    }
    
    if ($action === 'reassign_all') {
        $fromId = (int)($_POST['from_user_id'] ?? 0);
        $toUserId = (int)($_POST['to_user_id'] ?? 0);
        
        if ($fromId && $toUserId) {
            dbExecute("
                UPDATE service_requests 
                SET assigned_to = ? 
                WHERE assigned_to = ? AND status NOT IN ('COMPLETED', 'DONE', 'CANCELLED') AND deleted_at IS NULL
            ", [$toUserId, $fromId]);
            
            setFlash('success', "All active tasks reassigned successfully.");
        }
        
        header('Location: reassign_tasks.php');
        exit;
    }
}

// Get tasks for the selected user
$tasks = [];
if ($fromUserId) {
    $tasks = dbFetchAll("
        SELECT sr.*, s.name as service_name, c.name as client_name,
               DATEDIFF(sr.due_date, CURDATE()) as days_left
        FROM service_requests sr
        JOIN services s ON sr.service_id = s.id
        JOIN clients c ON sr.client_id = c.id
        WHERE sr.assigned_to = ? AND sr.status NOT IN ('COMPLETED', 'DONE', 'CANCELLED') AND sr.deleted_at IS NULL
        ORDER BY 
            CASE WHEN sr.due_date < CURDATE() THEN 0 ELSE 1 END,
            sr.due_date ASC
    ", [$fromUserId]) ?: [];
}

// Get available users to reassign to (exclude from user)
$toUsers = array_filter($allUsers, fn($u) => $u['id'] != $fromUserId);

$statusColors = [
    'NEW' => 'blue', 'ASSIGNED' => 'cyan', 'IN_PROGRESS' => 'amber', 
    'PENDING_INFO' => 'purple', 'WAITING_DOCS' => 'purple', 'COLLECTING' => 'purple',
    'UNDER_REVIEW' => 'indigo', 'REVIEW' => 'indigo',
    'APPLIED' => 'teal', 'PROCESSING' => 'orange', 'GOVT_PENDING' => 'orange'
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Reassign Tasks</h1>
        <p class="text-gray-500 text-sm">Transfer tasks between team members</p>
    </div>
    <a href="<?= $leaveId ? 'leave_management.php' : 'dashboard.php' ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left mr-2"></i>Back
    </a>
</div>

<?php if ($leaveInfo): ?>
<div class="card p-4 mb-6 bg-cyan-50 border-l-4 border-cyan-500">
    <div class="flex items-center gap-3">
        <i class="fas fa-info-circle text-cyan-600 text-xl"></i>
        <div>
            <p class="font-medium text-cyan-800">
                <?= htmlspecialchars($leaveInfo['display_name']) ?> is on leave
            </p>
            <p class="text-sm text-cyan-600">
                <?= date('d M Y', strtotime($leaveInfo['start_date'])) ?> 
                - <?= date('d M Y', strtotime($leaveInfo['end_date'])) ?>
                (<?= $leaveInfo['total_days'] ?? 1 ?> days)
            </p>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <!-- User Selection -->
    <div class="card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-semibold">Select Team Member</h3>
        </div>
        <div class="divide-y max-h-96 overflow-y-auto">
            <?php foreach ($allUsers as $u): 
                $taskCount = dbFetchOne("
                    SELECT COUNT(*) as cnt FROM service_requests 
                    WHERE assigned_to = ? AND status NOT IN ('COMPLETED', 'DONE', 'CANCELLED') AND deleted_at IS NULL
                ", [$u['id']])['cnt'] ?? 0;
            ?>
            <a href="?user_id=<?= $u['id'] ?><?= $leaveId ? '&leave_id=' . $leaveId : '' ?>" 
               class="block p-3 hover:bg-gray-50 <?= $fromUserId == $u['id'] ? 'bg-blue-50 border-l-4 border-blue-500' : '' ?>">
                <div class="flex items-center gap-3">
                    <?php if (($u['profile_photo'] ?? '') && file_exists($u['profile_photo'])): ?>
                    <img src="<?= $u['profile_photo'] ?>" class="w-10 h-10 rounded-full object-cover">
                    <?php else: ?>
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm">
                        <?= strtoupper(substr($u['display_name'], 0, 1)) ?>
                    </div>
                    <?php endif; ?>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-gray-800 text-sm truncate"><?= htmlspecialchars($u['display_name']) ?></p>
                        <p class="text-xs text-gray-500"><?= $taskCount ?> active tasks</p>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- Tasks List -->
    <div class="lg:col-span-3">
        <?php if (!$fromUserId): ?>
        <div class="card p-8 text-center text-gray-400">
            <i class="fas fa-hand-pointer text-5xl mb-3"></i>
            <p class="text-lg">Select a team member</p>
            <p class="text-sm">Choose from the list to see their tasks</p>
        </div>
        <?php elseif (empty($tasks)): ?>
        <div class="card p-8 text-center text-gray-400">
            <i class="fas fa-check-circle text-5xl text-green-400 mb-3"></i>
            <p class="text-lg"><?= htmlspecialchars($fromUser['display_name'] ?? 'User') ?> has no active tasks</p>
            <p class="text-sm">All tasks are completed or none assigned</p>
        </div>
        <?php else: ?>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="reassign">
            
            <div class="card">
                <div class="p-4 border-b bg-gray-50 flex items-center justify-between flex-wrap gap-3">
                    <div>
                        <h3 class="font-semibold"><?= htmlspecialchars($fromUser['display_name'] ?? 'User') ?>'s Tasks</h3>
                        <p class="text-sm text-gray-500"><?= count($tasks) ?> active tasks</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <label class="text-sm text-gray-600">Reassign to:</label>
                        <select name="to_user_id" class="form-input w-48" required>
                            <option value="">Select...</option>
                            <?php foreach ($toUsers as $tu): ?>
                            <option value="<?= $tu['id'] ?>"><?= htmlspecialchars($tu['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-exchange-alt mr-2"></i>Reassign Selected
                        </button>
                    </div>
                </div>
                
                <div class="p-3 bg-blue-50 border-b flex items-center gap-4">
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" id="selectAll" class="rounded">
                        <span>Select All</span>
                    </label>
                    <span class="text-sm text-gray-500" id="selectedCount">0 selected</span>
                </div>
                
                <div class="divide-y max-h-[500px] overflow-y-auto">
                    <?php foreach ($tasks as $task): 
                        $isOverdue = $task['days_left'] !== null && $task['days_left'] < 0;
                        $isUrgent = $task['days_left'] !== null && $task['days_left'] <= 2 && $task['days_left'] >= 0;
                        $sColor = $statusColors[$task['status']] ?? 'gray';
                    ?>
                    <label class="block p-4 hover:bg-gray-50 cursor-pointer <?= $isOverdue ? 'bg-red-50' : '' ?>">
                        <div class="flex items-center gap-4">
                            <input type="checkbox" name="task_ids[]" value="<?= $task['id'] ?>" class="task-checkbox rounded">
                            <div class="flex-1 min-w-0">
                                <p class="font-medium text-gray-800"><?= htmlspecialchars($task['service_name']) ?></p>
                                <p class="text-sm text-gray-500"><?= htmlspecialchars($task['client_name']) ?></p>
                                <p class="text-xs text-gray-400 mt-1"><?= $task['request_number'] ?? '' ?></p>
                            </div>
                            <div class="text-right">
                                <span class="px-2 py-1 bg-<?= $sColor ?>-100 text-<?= $sColor ?>-700 rounded text-xs font-medium">
                                    <?= str_replace('_', ' ', $task['status']) ?>
                                </span>
                                <?php if ($task['due_date']): ?>
                                <p class="text-xs mt-2 <?= $isOverdue ? 'text-red-600 font-bold' : ($isUrgent ? 'text-amber-600' : 'text-gray-500') ?>">
                                    <?php if ($isOverdue): ?>
                                    <i class="fas fa-exclamation-triangle mr-1"></i><?= abs($task['days_left']) ?>d overdue
                                    <?php elseif ($task['days_left'] == 0): ?>
                                    <i class="fas fa-clock mr-1"></i>Due today
                                    <?php else: ?>
                                    Due: <?= date('d M', strtotime($task['due_date'])) ?>
                                    <?php endif; ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </form>
        
        <!-- Bulk Reassign All -->
        <div class="card p-4 mt-4 bg-amber-50">
            <form method="POST" class="flex items-center justify-between flex-wrap gap-3">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="reassign_all">
                <input type="hidden" name="from_user_id" value="<?= $fromUserId ?>">
                
                <div class="flex items-center gap-2">
                    <i class="fas fa-exclamation-triangle text-amber-600"></i>
                    <span class="text-sm text-amber-800">Reassign ALL <?= count($tasks) ?> tasks at once</span>
                </div>
                <div class="flex items-center gap-3">
                    <select name="to_user_id" class="form-input w-48" required>
                        <option value="">Select user...</option>
                        <?php foreach ($toUsers as $tu): ?>
                        <option value="<?= $tu['id'] ?>"><?= htmlspecialchars($tu['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn bg-amber-500 text-white hover:bg-amber-600" onclick="return confirm('Are you sure you want to reassign ALL tasks?')">
                        <i class="fas fa-exchange-alt mr-2"></i>Reassign All
                    </button>
                </div>
            </form>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
document.getElementById('selectAll')?.addEventListener('change', function() {
    document.querySelectorAll('.task-checkbox').forEach(cb => cb.checked = this.checked);
    updateCount();
});

document.querySelectorAll('.task-checkbox').forEach(cb => {
    cb.addEventListener('change', updateCount);
});

function updateCount() {
    const count = document.querySelectorAll('.task-checkbox:checked').length;
    document.getElementById('selectedCount').textContent = count + ' selected';
}
</script>

<?php require_once 'includes/footer.php'; ?>
