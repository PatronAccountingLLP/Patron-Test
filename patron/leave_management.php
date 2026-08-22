<?php
/**
 * PATRON - Leave Management
 * Supervisors can view, approve/reject leave requests from their entire team hierarchy
 * Managers can view all leave requests
 * Leave requests flow UP to all supervisors in the chain
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Leave Management';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Check if user is a Manager by role
$userRoles = getUserRoles($userId);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);

/**
 * Get all users in the hierarchy below a supervisor (recursive)
 * This gets direct reports AND their reports, and so on
 */
function getTeamHierarchy($supervisorId, $allUsers, $collected = []) {
    foreach ($allUsers as $user) {
        if ($user['supervisor_id'] == $supervisorId && !in_array($user['id'], $collected)) {
            $collected[] = $user['id'];
            // Recursively get their reports too
            $collected = getTeamHierarchy($user['id'], $allUsers, $collected);
        }
    }
    return $collected;
}

/**
 * Get all supervisors up the chain for a user
 */
function getSupervisorChain($userId, $allUsers, $chain = []) {
    foreach ($allUsers as $user) {
        if ($user['id'] == $userId && $user['supervisor_id']) {
            $chain[] = $user['supervisor_id'];
            // Go up the chain
            $chain = getSupervisorChain($user['supervisor_id'], $allUsers, $chain);
            break;
        }
    }
    return $chain;
}

// Get all users for hierarchy calculation
$allUsers = dbFetchAll("
    SELECT id, display_name, supervisor_id FROM users 
    WHERE deleted_at IS NULL AND user_type = 'INTERNAL'
") ?: [];

// Get all team members under this user (full hierarchy)
$teamMemberIds = getTeamHierarchy($userId, $allUsers);
$isSupervisor = count($teamMemberIds) > 0;

// Allow access if: Admin, Manager, or has anyone reporting to them
if (!$isSupervisor && !$isAdmin && !$isManager) {
    setFlash('error', 'You do not have permission to access this page.');
    header('Location: dashboard.php');
    exit;
}

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrfValid = verifyCsrfToken($_POST['csrf_token'] ?? '');
    
    if (!$csrfValid) {
        setFlash('error', 'Session expired. Please try again.');
        header('Location: leave_management.php');
        exit;
    }
    
    $action = $_POST['action'] ?? '';
    $leaveId = (int)($_POST['leave_id'] ?? 0);
    
    if ($leaveId && in_array($action, ['approve', 'reject'])) {
        // Get the leave request
        $leave = dbFetchOne("
            SELECT lr.*, u.supervisor_id, u.display_name as user_name
            FROM leave_requests lr
            JOIN users u ON lr.user_id = u.id
            WHERE lr.id = ?
        ", [$leaveId]);
        
        if ($leave) {
            // Check if current user can approve this leave
            // Can approve if: Admin, Manager, or is in the supervisor chain of the applicant
            $applicantSupervisorChain = getSupervisorChain($leave['user_id'], $allUsers);
            $canApprove = $isAdmin || $isManager || in_array($userId, $applicantSupervisorChain);
            
            if ($canApprove) {
                $newStatus = $action === 'approve' ? 'APPROVED' : 'REJECTED';
                $remarks = sanitize($_POST['remarks'] ?? '');
                
                try {
                    dbExecute("
                        UPDATE leave_requests 
                        SET status = ?, approved_by = ?, approved_at = NOW(), remarks = ?
                        WHERE id = ?
                    ", [$newStatus, $userId, $remarks, $leaveId]);
                    
                    setFlash('success', "Leave request " . strtolower($newStatus) . " successfully.");
                } catch (Exception $e) {
                    setFlash('error', 'Failed to update leave request. Please try again.');
                }
            } else {
                setFlash('error', 'You do not have permission to approve this leave request.');
            }
        } else {
            setFlash('error', 'Leave request not found.');
        }
    }
    
    header('Location: leave_management.php');
    exit;
}

// Get leave requests
$filter = $_GET['filter'] ?? 'pending';
$statusFilter = match($filter) {
    'approved' => "lr.status = 'APPROVED'",
    'rejected' => "lr.status = 'REJECTED'",
    'all' => "1=1",
    default => "lr.status = 'PENDING'"
};

// Admin and Manager can see all leaves
if ($isAdmin || $isManager) {
    $leaveRequests = dbFetchAll("
        SELECT lr.*, u.display_name, u.profile_photo, u.supervisor_id, lt.name as leave_type, lt.color,
               sup.display_name as supervisor_name, app.display_name as approved_by_name
        FROM leave_requests lr
        JOIN users u ON lr.user_id = u.id
        LEFT JOIN leave_types lt ON lr.leave_type_id = lt.id
        LEFT JOIN users sup ON u.supervisor_id = sup.id
        LEFT JOIN users app ON lr.approved_by = app.id
        WHERE $statusFilter
        ORDER BY lr.created_at DESC
    ") ?: [];
} else {
    // Supervisor - see leaves from entire team hierarchy
    if (count($teamMemberIds) > 0) {
        $placeholders = implode(',', array_fill(0, count($teamMemberIds), '?'));
        $leaveRequests = dbFetchAll("
            SELECT lr.*, u.display_name, u.profile_photo, u.supervisor_id, lt.name as leave_type, lt.color,
                   sup.display_name as supervisor_name, app.display_name as approved_by_name
            FROM leave_requests lr
            JOIN users u ON lr.user_id = u.id
            LEFT JOIN leave_types lt ON lr.leave_type_id = lt.id
            LEFT JOIN users sup ON u.supervisor_id = sup.id
            LEFT JOIN users app ON lr.approved_by = app.id
            WHERE lr.user_id IN ($placeholders) AND $statusFilter
            ORDER BY lr.created_at DESC
        ", $teamMemberIds) ?: [];
    } else {
        $leaveRequests = [];
    }
}

// Get leave types for reference
$leaveTypes = dbFetchAll("SELECT * FROM leave_types WHERE is_active = 1 ORDER BY name") ?: [];

// Stats
$stats = [
    'pending' => 0,
    'approved' => 0,
    'rejected' => 0,
    'on_leave_today' => 0
];

if ($isAdmin || $isManager) {
    $statsData = dbFetchOne("
        SELECT 
            SUM(status = 'PENDING') as pending,
            SUM(status = 'APPROVED') as approved,
            SUM(status = 'REJECTED') as rejected,
            SUM(status = 'APPROVED' AND CURDATE() BETWEEN start_date AND end_date) as on_leave_today
        FROM leave_requests
    ");
} else {
    if (count($teamMemberIds) > 0) {
        $placeholders = implode(',', array_fill(0, count($teamMemberIds), '?'));
        $statsData = dbFetchOne("
            SELECT 
                SUM(status = 'PENDING') as pending,
                SUM(status = 'APPROVED') as approved,
                SUM(status = 'REJECTED') as rejected,
                SUM(status = 'APPROVED' AND CURDATE() BETWEEN start_date AND end_date) as on_leave_today
            FROM leave_requests WHERE user_id IN ($placeholders)
        ", $teamMemberIds);
    } else {
        $statsData = [];
    }
}
$stats = array_merge($stats, $statsData ?: []);

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Leave Management</h1>
        <p class="text-gray-500 text-sm">
            <?php if ($isAdmin || $isManager): ?>
            All team leave requests
            <?php else: ?>
            Leave requests from your team (<?= count($teamMemberIds) ?> members)
            <?php endif; ?>
        </p>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <a href="?filter=pending" class="card p-4 <?= $filter === 'pending' ? 'border-2 border-amber-500' : '' ?>">
        <p class="text-3xl font-bold text-amber-600"><?= $stats['pending'] ?? 0 ?></p>
        <p class="text-sm text-gray-500">Pending</p>
    </a>
    <a href="?filter=approved" class="card p-4 <?= $filter === 'approved' ? 'border-2 border-green-500' : '' ?>">
        <p class="text-3xl font-bold text-green-600"><?= $stats['approved'] ?? 0 ?></p>
        <p class="text-sm text-gray-500">Approved</p>
    </a>
    <a href="?filter=rejected" class="card p-4 <?= $filter === 'rejected' ? 'border-2 border-red-500' : '' ?>">
        <p class="text-3xl font-bold text-red-600"><?= $stats['rejected'] ?? 0 ?></p>
        <p class="text-sm text-gray-500">Rejected</p>
    </a>
    <div class="card p-4 bg-cyan-50">
        <p class="text-3xl font-bold text-cyan-600"><?= $stats['on_leave_today'] ?? 0 ?></p>
        <p class="text-sm text-gray-500">On Leave Today</p>
    </div>
</div>

<!-- Leave Requests List -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">
            <?= ucfirst($filter) ?> Leave Requests
        </h3>
        <div class="flex gap-2">
            <a href="?filter=pending" class="px-3 py-1 rounded text-sm <?= $filter === 'pending' ? 'bg-amber-500 text-white' : 'bg-gray-200' ?>">Pending</a>
            <a href="?filter=approved" class="px-3 py-1 rounded text-sm <?= $filter === 'approved' ? 'bg-green-500 text-white' : 'bg-gray-200' ?>">Approved</a>
            <a href="?filter=rejected" class="px-3 py-1 rounded text-sm <?= $filter === 'rejected' ? 'bg-red-500 text-white' : 'bg-gray-200' ?>">Rejected</a>
            <a href="?filter=all" class="px-3 py-1 rounded text-sm <?= $filter === 'all' ? 'bg-blue-500 text-white' : 'bg-gray-200' ?>">All</a>
        </div>
    </div>
    
    <?php if (empty($leaveRequests)): ?>
    <div class="p-8 text-center text-gray-400">
        <i class="fas fa-calendar-check text-5xl mb-3"></i>
        <p>No <?= $filter ?> leave requests</p>
    </div>
    <?php else: ?>
    <div class="divide-y">
        <?php foreach ($leaveRequests as $lr): 
            $isPending = $lr['status'] === 'PENDING';
            $isOngoing = $lr['status'] === 'APPROVED' && 
                         strtotime($lr['start_date']) <= time() && 
                         strtotime($lr['end_date']) >= time();
        ?>
        <div class="p-4 <?= $isOngoing ? 'bg-cyan-50' : '' ?>">
            <div class="flex items-start justify-between">
                <div class="flex gap-4">
                    <?php if (($lr['profile_photo'] ?? '') && file_exists($lr['profile_photo'])): ?>
                    <img src="<?= $lr['profile_photo'] ?>" class="w-12 h-12 rounded-full object-cover">
                    <?php else: ?>
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold">
                        <?= strtoupper(substr($lr['display_name'], 0, 1)) ?>
                    </div>
                    <?php endif; ?>
                    
                    <div>
                        <p class="font-semibold text-gray-800"><?= htmlspecialchars($lr['display_name']) ?></p>
                        <?php if (!empty($lr['supervisor_name'])): ?>
                        <p class="text-xs text-gray-400"><i class="fas fa-sitemap mr-1"></i>Reports to: <?= htmlspecialchars($lr['supervisor_name']) ?></p>
                        <?php endif; ?>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="px-2 py-0.5 bg-<?= $lr['color'] ?? 'gray' ?>-100 text-<?= $lr['color'] ?? 'gray' ?>-700 rounded text-xs">
                                <?= htmlspecialchars($lr['leave_type'] ?? 'Leave') ?>
                            </span>
                            <?php if ($isOngoing): ?>
                            <span class="px-2 py-0.5 bg-cyan-200 text-cyan-800 rounded text-xs font-medium">Currently on Leave</span>
                            <?php endif; ?>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">
                            <i class="fas fa-calendar mr-1"></i>
                            <?= date('d M Y', strtotime($lr['start_date'])) ?>
                            <?php if ($lr['start_date'] !== $lr['end_date']): ?>
                            - <?= date('d M Y', strtotime($lr['end_date'])) ?>
                            <?php endif; ?>
                            <span class="text-gray-400 ml-2">(<?= $lr['total_days'] ?? 1 ?> day<?= ($lr['total_days'] ?? 1) > 1 ? 's' : '' ?>)</span>
                        </p>
                        <?php if ($lr['reason']): ?>
                        <p class="text-sm text-gray-500 mt-1"><i class="fas fa-comment mr-1"></i><?= htmlspecialchars($lr['reason']) ?></p>
                        <?php endif; ?>
                        <?php if ($lr['backup_user_id']): 
                            $backup = dbFetchOne("SELECT display_name FROM users WHERE id = ?", [$lr['backup_user_id']]);
                        ?>
                        <p class="text-sm text-blue-600 mt-1"><i class="fas fa-user-friends mr-1"></i>Backup: <?= htmlspecialchars($backup['display_name'] ?? '-') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="text-right">
                    <?php if ($isPending): ?>
                    <div class="flex gap-2 mb-2">
                        <form method="POST" action="leave_management.php" class="inline">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="leave_id" value="<?= $lr['id'] ?>">
                            <input type="hidden" name="action" value="approve">
                            <button type="submit" class="px-3 py-1.5 bg-green-500 text-white rounded hover:bg-green-600 text-sm">
                                <i class="fas fa-check mr-1"></i>Approve
                            </button>
                        </form>
                        <form method="POST" action="leave_management.php" class="inline">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="leave_id" value="<?= $lr['id'] ?>">
                            <input type="hidden" name="action" value="reject">
                            <button type="submit" class="px-3 py-1.5 bg-red-500 text-white rounded hover:bg-red-600 text-sm">
                                <i class="fas fa-times mr-1"></i>Reject
                            </button>
                        </form>
                    </div>
                    <a href="reassign_tasks.php?user_id=<?= $lr['user_id'] ?>&leave_id=<?= $lr['id'] ?>" class="text-blue-600 hover:underline text-sm">
                        <i class="fas fa-exchange-alt mr-1"></i>Reassign Tasks
                    </a>
                    <?php else: ?>
                    <span class="px-3 py-1 rounded text-sm font-medium
                        <?= $lr['status'] === 'APPROVED' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                        <?= $lr['status'] ?>
                    </span>
                    <?php if ($lr['approved_by_name']): ?>
                    <p class="text-xs text-gray-500 mt-1">by <?= htmlspecialchars($lr['approved_by_name']) ?></p>
                    <?php endif; ?>
                    <?php if ($lr['approved_at']): ?>
                    <p class="text-xs text-gray-400"><?= date('d M Y H:i', strtotime($lr['approved_at'])) ?></p>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
