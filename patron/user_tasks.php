<?php
/**
 * PATRON - User Tasks View (Enhanced)
 * Shows all tasks and compliance for a specific team member
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$userId = (int)($_GET['user_id'] ?? 0);
if (!$userId) {
    setFlash('error', 'User not specified.');
    header('Location: team.php');
    exit;
}

// Get user info with additional data
$user = dbFetchOne("
    SELECT u.*, r.name as role_name, r.code as role_code, sup.display_name as supervisor_name
    FROM users u
    LEFT JOIN user_roles ur ON u.id = ur.user_id AND ur.revoked_at IS NULL
    LEFT JOIN roles r ON ur.role_id = r.id
    LEFT JOIN users sup ON u.supervisor_id = sup.id
    WHERE u.id = ? AND u.deleted_at IS NULL
", [$userId]);

if (!$user) {
    setFlash('error', 'User not found.');
    header('Location: team.php');
    exit;
}

// Get team info
$userTeam = null;
try {
    $userTeam = dbFetchOne("SELECT t.name, t.color FROM team_members tm JOIN teams t ON tm.team_id = t.id WHERE tm.user_id = ? AND tm.is_active = 1", [$userId]);
} catch (Exception $e) {}

$pageTitle = $user['display_name'] . ' - Tasks & Workload';

// Filters
$filterStatus = sanitize($_GET['status'] ?? '');
$filterType = sanitize($_GET['type'] ?? 'all');
$filterPriority = sanitize($_GET['priority'] ?? '');

// Get service requests
$requestWhere = "sr.deleted_at IS NULL AND (sr.assigned_to = ? OR sr.reviewer_id = ?)";
$requestParams = [$userId, $userId];

if ($filterStatus === 'pending') {
    $requestWhere .= " AND sr.status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')";
} elseif ($filterStatus === 'overdue') {
    $requestWhere .= " AND COALESCE(sr.due_date, sr.expected_completion) < CURDATE() AND sr.status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')";
} elseif ($filterStatus === 'completed') {
    $requestWhere .= " AND sr.status IN ('DONE', 'COMPLETED')";
}

if ($filterPriority) {
    $requestWhere .= " AND sr.priority = ?";
    $requestParams[] = $filterPriority;
}

$requests = [];
if ($filterType === 'all' || $filterType === 'requests') {
    $requests = dbFetchAll("
        SELECT sr.id, sr.request_number, sr.status, sr.priority,
               COALESCE(sr.due_date, sr.expected_completion) as due_date,
               sr.created_at, sr.assigned_to, sr.reviewer_id,
               s.name as service_name, c.name as client_name,
               CASE WHEN sr.assigned_to = ? THEN 'Executor' ELSE 'Reviewer' END as user_role,
               DATEDIFF(COALESCE(sr.due_date, sr.expected_completion), CURDATE()) as days_left
        FROM service_requests sr
        JOIN services s ON sr.service_id = s.id
        JOIN clients c ON sr.client_id = c.id
        WHERE $requestWhere
        ORDER BY 
            CASE WHEN sr.status NOT IN ('DONE','COMPLETED','CANCELLED') THEN 0 ELSE 1 END,
            sr.priority = 'URGENT' DESC,
            sr.priority = 'HIGH' DESC,
            COALESCE(sr.due_date, sr.expected_completion) ASC
        LIMIT 200
    ", array_merge([$userId], $requestParams)) ?: [];
}

// Get compliance tasks
$complianceWhere = "ct.deleted_at IS NULL AND (ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ? OR ctr.manager_id = ?)";
$complianceParams = [$userId, $userId, $userId, $userId];

if ($filterStatus === 'pending') {
    $complianceWhere .= " AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')";
} elseif ($filterStatus === 'overdue') {
    $complianceWhere .= " AND ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')";
} elseif ($filterStatus === 'completed') {
    $complianceWhere .= " AND UPPER(ctr.status) IN ('FILED', 'FILED_LATE')";
}

$compliance = [];
if ($filterType === 'all' || $filterType === 'compliance') {
    $compliance = dbFetchAll("
        SELECT ctr.id, ctr.status, ctr.due_date, ctr.filed_date,
               ctr.executor_1_id, ctr.executor_2_id, ctr.reviewer_id, ctr.manager_id,
               ct.name as compliance_name, ct.category,
               c.name as client_name,
               CASE 
                   WHEN ctr.executor_1_id = ? OR ctr.executor_2_id = ? THEN 'Executor'
                   WHEN ctr.reviewer_id = ? THEN 'Reviewer'
                   ELSE 'Manager'
               END as user_role,
               DATEDIFF(ctr.due_date, CURDATE()) as days_left
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        JOIN clients c ON ctr.client_id = c.id
        WHERE $complianceWhere
        ORDER BY 
            CASE WHEN UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE') THEN 0 ELSE 1 END,
            ctr.due_date ASC
        LIMIT 200
    ", array_merge([$userId, $userId, $userId], $complianceParams)) ?: [];
}

// Stats
$stats = [
    'total_requests' => 0, 'pending_requests' => 0, 'overdue_requests' => 0, 'completed_requests' => 0,
    'total_compliance' => 0, 'pending_compliance' => 0, 'overdue_compliance' => 0, 'completed_compliance' => 0
];

$reqStats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(status NOT IN ('DONE','COMPLETED','CANCELLED')) as pending,
        SUM(COALESCE(due_date, expected_completion) < CURDATE() AND status NOT IN ('DONE','COMPLETED','CANCELLED')) as overdue,
        SUM(status IN ('DONE','COMPLETED')) as completed
    FROM service_requests
    WHERE deleted_at IS NULL AND (assigned_to = ? OR reviewer_id = ?)
", [$userId, $userId]);
$stats['total_requests'] = $reqStats['total'] ?? 0;
$stats['pending_requests'] = $reqStats['pending'] ?? 0;
$stats['overdue_requests'] = $reqStats['overdue'] ?? 0;
$stats['completed_requests'] = $reqStats['completed'] ?? 0;

$compStats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as pending,
        SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as overdue,
        SUM(UPPER(ctr.status) IN ('FILED','FILED_LATE')) as completed
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    WHERE ct.deleted_at IS NULL AND (ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ? OR ctr.manager_id = ?)
", [$userId, $userId, $userId, $userId]);
$stats['total_compliance'] = $compStats['total'] ?? 0;
$stats['pending_compliance'] = $compStats['pending'] ?? 0;
$stats['overdue_compliance'] = $compStats['overdue'] ?? 0;
$stats['completed_compliance'] = $compStats['completed'] ?? 0;

// Leave info
$currentLeave = dbFetchOne("
    SELECT lr.*, lt.name as leave_type, lt.color
    FROM leave_requests lr
    JOIN leave_types lt ON lr.leave_type_id = lt.id
    WHERE lr.user_id = ? AND lr.status = 'APPROVED' AND CURDATE() BETWEEN lr.start_date AND lr.end_date
", [$userId]);

$upcomingLeave = dbFetchOne("
    SELECT lr.*, lt.name as leave_type, lt.color
    FROM leave_requests lr
    JOIN leave_types lt ON lr.leave_type_id = lt.id
    WHERE lr.user_id = ? AND lr.status = 'APPROVED' AND lr.start_date > CURDATE()
    ORDER BY lr.start_date ASC LIMIT 1
", [$userId]);

// Workload calculation
$totalPending = $stats['pending_requests'] + $stats['pending_compliance'];
$totalOverdue = $stats['overdue_requests'] + $stats['overdue_compliance'];
$maxWorkload = 20;
$workloadPercent = min(100, round(($totalPending / $maxWorkload) * 100));
$workloadClass = $workloadPercent < 40 ? 'bg-green-500' : ($workloadPercent < 70 ? 'bg-amber-500' : 'bg-red-500');
$workloadLabel = $workloadPercent < 40 ? 'Low' : ($workloadPercent < 70 ? 'Moderate' : 'High');

require_once 'includes/header.php';
?>

<style>
.workload-bar { height: 8px; border-radius: 4px; background: #e5e7eb; overflow: hidden; }
.stat-card { transition: all 0.2s; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
</style>

<!-- Breadcrumb -->
<div class="mb-6">
    <a href="team.php" class="text-blue-600 hover:underline text-sm"><i class="fas fa-arrow-left mr-1"></i>Back to Team</a>
</div>

<!-- User Profile Header -->
<div class="card p-6 mb-6">
    <div class="flex flex-col md:flex-row items-start gap-6">
        <!-- Avatar -->
        <div class="relative">
            <?php if ($user['profile_photo'] && file_exists($user['profile_photo'])): ?>
            <img src="<?= $user['profile_photo'] ?>" class="w-24 h-24 rounded-full object-cover shadow-lg">
            <?php else: 
                $c = ['blue','green','purple','amber','teal','indigo'][$userId % 6];
            ?>
            <div class="w-24 h-24 rounded-full bg-<?= $c ?>-100 text-<?= $c ?>-600 flex items-center justify-center text-3xl font-bold shadow-lg">
                <?= strtoupper(substr($user['display_name'], 0, 2)) ?>
            </div>
            <?php endif; ?>
            <?php if ($currentLeave): ?>
            <span class="absolute -bottom-1 -right-1 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center text-white text-xs" title="On Leave">
                <i class="fas fa-plane"></i>
            </span>
            <?php elseif ($user['status'] === 'ACTIVE'): ?>
            <span class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white" title="Active"></span>
            <?php endif; ?>
        </div>
        
        <!-- Info -->
        <div class="flex-1">
            <div class="flex items-start justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($user['display_name']) ?></h2>
                    <div class="flex flex-wrap items-center gap-2 mt-2">
                        <?php if ($user['role_name']): ?>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium"><?= $user['role_name'] ?></span>
                        <?php endif; ?>
                        <?php if ($userTeam): ?>
                        <span class="px-3 py-1 bg-<?= $userTeam['color'] ?? 'gray' ?>-100 text-<?= $userTeam['color'] ?? 'gray' ?>-700 rounded-full text-sm"><?= $userTeam['name'] ?></span>
                        <?php endif; ?>
                        <span class="px-3 py-1 <?= $user['status'] === 'ACTIVE' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' ?> rounded-full text-sm"><?= $user['status'] ?></span>
                    </div>
                </div>
                <a href="team.php?edit=<?= $userId ?>" class="btn btn-secondary"><i class="fas fa-edit mr-2"></i>Edit Profile</a>
            </div>
            
            <div class="flex flex-wrap gap-4 mt-4 text-sm text-gray-600">
                <?php if ($user['mobile']): ?>
                <a href="tel:<?= $user['mobile'] ?>" class="hover:text-blue-600"><i class="fas fa-phone mr-1"></i><?= $user['mobile'] ?></a>
                <?php endif; ?>
                <?php if ($user['email']): ?>
                <a href="mailto:<?= $user['email'] ?>" class="hover:text-blue-600"><i class="fas fa-envelope mr-1"></i><?= $user['email'] ?></a>
                <?php endif; ?>
                <?php if ($user['supervisor_name']): ?>
                <span><i class="fas fa-user-tie mr-1 text-gray-400"></i>Reports to: <?= htmlspecialchars($user['supervisor_name']) ?></span>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Workload Gauge -->
        <div class="w-48 text-center">
            <p class="text-sm text-gray-500 mb-2">Current Workload</p>
            <div class="relative w-32 h-32 mx-auto">
                <svg class="w-full h-full -rotate-90" viewBox="0 0 36 36">
                    <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#e5e7eb" stroke-width="3"/>
                    <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" 
                          stroke="<?= $workloadPercent < 40 ? '#10b981' : ($workloadPercent < 70 ? '#f59e0b' : '#ef4444') ?>" 
                          stroke-width="3" stroke-dasharray="<?= $workloadPercent ?>, 100"/>
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-2xl font-bold <?= $workloadPercent < 40 ? 'text-green-600' : ($workloadPercent < 70 ? 'text-amber-600' : 'text-red-600') ?>"><?= $totalPending ?></span>
                    <span class="text-xs text-gray-500">Tasks</span>
                </div>
            </div>
            <p class="text-sm font-medium mt-2 <?= $workloadPercent < 40 ? 'text-green-600' : ($workloadPercent < 70 ? 'text-amber-600' : 'text-red-600') ?>"><?= $workloadLabel ?> Workload</p>
        </div>
    </div>
    
    <!-- Leave Alerts -->
    <?php if ($currentLeave || $upcomingLeave): ?>
    <div class="mt-4 pt-4 border-t flex flex-wrap gap-3">
        <?php if ($currentLeave): ?>
        <div class="px-4 py-2 bg-amber-50 border border-amber-200 rounded-lg flex items-center gap-2">
            <i class="fas fa-plane-departure text-amber-600"></i>
            <span class="text-sm">
                <strong>Currently on <?= $currentLeave['leave_type'] ?></strong> until <?= date('d M', strtotime($currentLeave['end_date'])) ?>
            </span>
        </div>
        <?php endif; ?>
        <?php if ($upcomingLeave): ?>
        <div class="px-4 py-2 bg-blue-50 border border-blue-200 rounded-lg flex items-center gap-2">
            <i class="fas fa-calendar text-blue-600"></i>
            <span class="text-sm">
                <strong>Upcoming:</strong> <?= $upcomingLeave['leave_type'] ?> from <?= date('d M', strtotime($upcomingLeave['start_date'])) ?>
            </span>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-3 mb-6">
    <a href="?user_id=<?= $userId ?>&type=requests" class="stat-card card p-3 text-center <?= $filterType === 'requests' && !$filterStatus ? 'ring-2 ring-blue-500' : '' ?>">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['total_requests'] ?></p>
        <p class="text-xs text-gray-500">Requests</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=requests&status=pending" class="stat-card card p-3 text-center <?= $filterType === 'requests' && $filterStatus === 'pending' ? 'ring-2 ring-amber-500' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['pending_requests'] ?></p>
        <p class="text-xs text-gray-500">Pending</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=requests&status=overdue" class="stat-card card p-3 text-center <?= $filterType === 'requests' && $filterStatus === 'overdue' ? 'ring-2 ring-red-500' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= $stats['overdue_requests'] ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=requests&status=completed" class="stat-card card p-3 text-center <?= $filterType === 'requests' && $filterStatus === 'completed' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['completed_requests'] ?></p>
        <p class="text-xs text-gray-500">Completed</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=compliance" class="stat-card card p-3 text-center <?= $filterType === 'compliance' && !$filterStatus ? 'ring-2 ring-purple-500' : '' ?>">
        <p class="text-2xl font-bold text-purple-600"><?= $stats['total_compliance'] ?></p>
        <p class="text-xs text-gray-500">Compliance</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=compliance&status=pending" class="stat-card card p-3 text-center <?= $filterType === 'compliance' && $filterStatus === 'pending' ? 'ring-2 ring-amber-500' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['pending_compliance'] ?></p>
        <p class="text-xs text-gray-500">Pending</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=compliance&status=overdue" class="stat-card card p-3 text-center <?= $filterType === 'compliance' && $filterStatus === 'overdue' ? 'ring-2 ring-red-500' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= $stats['overdue_compliance'] ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </a>
    <a href="?user_id=<?= $userId ?>&type=compliance&status=completed" class="stat-card card p-3 text-center <?= $filterType === 'compliance' && $filterStatus === 'completed' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['completed_compliance'] ?></p>
        <p class="text-xs text-gray-500">Filed</p>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap items-center gap-4">
        <input type="hidden" name="user_id" value="<?= $userId ?>">
        <div>
            <select name="type" class="form-select" onchange="this.form.submit()">
                <option value="all" <?= $filterType === 'all' ? 'selected' : '' ?>>All Types</option>
                <option value="requests" <?= $filterType === 'requests' ? 'selected' : '' ?>>Service Requests</option>
                <option value="compliance" <?= $filterType === 'compliance' ? 'selected' : '' ?>>Compliance</option>
            </select>
        </div>
        <div>
            <select name="status" class="form-select" onchange="this.form.submit()">
                <option value="">All Status</option>
                <option value="pending" <?= $filterStatus === 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="overdue" <?= $filterStatus === 'overdue' ? 'selected' : '' ?>>Overdue</option>
                <option value="completed" <?= $filterStatus === 'completed' ? 'selected' : '' ?>>Completed</option>
            </select>
        </div>
        <a href="?user_id=<?= $userId ?>" class="btn btn-secondary"><i class="fas fa-times mr-1"></i>Clear</a>
        <a href="requests.php?assigned=<?= $userId ?>" class="btn btn-primary ml-auto"><i class="fas fa-external-link-alt mr-1"></i>View in Board</a>
    </form>
</div>

<!-- Service Requests -->
<?php if ($filterType === 'all' || $filterType === 'requests'): ?>
<div class="card mb-6">
    <div class="p-4 border-b bg-gradient-to-r from-blue-50 to-indigo-50 flex items-center justify-between">
        <h3 class="font-bold text-blue-800"><i class="fas fa-tasks mr-2"></i>Service Requests (<?= count($requests) ?>)</h3>
    </div>
    
    <?php if (empty($requests)): ?>
    <div class="p-8 text-center text-gray-400">
        <i class="fas fa-clipboard-check text-4xl mb-2"></i>
        <p>No service requests found</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left text-gray-600">
                <tr>
                    <th class="p-3">Client / Service</th>
                    <th class="p-3">Role</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Due Date</th>
                    <th class="p-3">Priority</th>
                    <th class="p-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($requests as $r): 
                    $isOverdue = $r['days_left'] !== null && $r['days_left'] < 0;
                    $isDone = in_array($r['status'], ['DONE', 'COMPLETED']);
                ?>
                <tr class="hover:bg-gray-50 <?= $isOverdue && !$isDone ? 'bg-red-50' : '' ?>">
                    <td class="p-3">
                        <a href="view_request.php?id=<?= $r['id'] ?>" class="font-medium text-blue-600 hover:underline">
                            <?= htmlspecialchars($r['client_name']) ?>
                        </a>
                        <p class="text-gray-500 text-xs"><?= htmlspecialchars($r['service_name']) ?></p>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs <?= $r['user_role'] === 'Executor' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' ?>">
                            <?= $r['user_role'] ?>
                        </span>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs bg-gray-100 text-gray-700"><?= str_replace('_', ' ', $r['status']) ?></span>
                    </td>
                    <td class="p-3">
                        <?php if ($r['due_date']): ?>
                        <span class="<?= $isOverdue && !$isDone ? 'text-red-600 font-bold' : 'text-gray-600' ?>">
                            <?= date('d M Y', strtotime($r['due_date'])) ?>
                            <?php if ($isOverdue && !$isDone): ?>
                            <span class="text-xs block">(<?= abs($r['days_left']) ?>d overdue)</span>
                            <?php elseif (!$isDone && $r['days_left'] !== null && $r['days_left'] >= 0): ?>
                            <span class="text-xs text-gray-400 block">(<?= $r['days_left'] ?>d left)</span>
                            <?php endif; ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3">
                        <?php if ($r['priority'] === 'URGENT'): ?>
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-bold animate-pulse">URGENT</span>
                        <?php elseif ($r['priority'] === 'HIGH'): ?>
                        <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded text-xs">HIGH</span>
                        <?php else: ?>
                        <span class="text-gray-400 text-xs">Normal</span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3 text-center">
                        <a href="view_request.php?id=<?= $r['id'] ?>" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Compliance Tasks -->
<?php if ($filterType === 'all' || $filterType === 'compliance'): ?>
<div class="card">
    <div class="p-4 border-b bg-gradient-to-r from-purple-50 to-pink-50 flex items-center justify-between">
        <h3 class="font-bold text-purple-800"><i class="fas fa-clipboard-list mr-2"></i>Compliance Tasks (<?= count($compliance) ?>)</h3>
    </div>
    
    <?php if (empty($compliance)): ?>
    <div class="p-8 text-center text-gray-400">
        <i class="fas fa-clipboard-check text-4xl mb-2"></i>
        <p>No compliance tasks found</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left text-gray-600">
                <tr>
                    <th class="p-3">Client / Compliance</th>
                    <th class="p-3">Role</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Due Date</th>
                    <th class="p-3">Category</th>
                    <th class="p-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($compliance as $c): 
                    $isOverdue = $c['days_left'] !== null && $c['days_left'] < 0;
                    $isDone = in_array(strtoupper($c['status']), ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);
                ?>
                <tr class="hover:bg-gray-50 <?= $isOverdue && !$isDone ? 'bg-red-50' : '' ?>">
                    <td class="p-3">
                        <a href="compliance_entry.php?id=<?= $c['id'] ?>" class="font-medium text-purple-600 hover:underline">
                            <?= htmlspecialchars($c['client_name']) ?>
                        </a>
                        <p class="text-gray-500 text-xs"><?= htmlspecialchars($c['compliance_name']) ?></p>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs <?= $c['user_role'] === 'Executor' ? 'bg-blue-100 text-blue-700' : ($c['user_role'] === 'Reviewer' ? 'bg-purple-100 text-purple-700' : 'bg-green-100 text-green-700') ?>">
                            <?= $c['user_role'] ?>
                        </span>
                    </td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs bg-gray-100 text-gray-700"><?= str_replace('_', ' ', $c['status']) ?></span>
                    </td>
                    <td class="p-3">
                        <?php if ($c['due_date']): ?>
                        <span class="<?= $isOverdue && !$isDone ? 'text-red-600 font-bold' : 'text-gray-600' ?>">
                            <?= date('d M Y', strtotime($c['due_date'])) ?>
                            <?php if ($isOverdue && !$isDone): ?>
                            <span class="text-xs block">(<?= abs($c['days_left']) ?>d overdue)</span>
                            <?php elseif (!$isDone && $c['days_left'] !== null && $c['days_left'] >= 0): ?>
                            <span class="text-xs text-gray-400 block">(<?= $c['days_left'] ?>d left)</span>
                            <?php endif; ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="p-3">
                        <span class="text-xs text-gray-500"><?= htmlspecialchars($c['category'] ?? '-') ?></span>
                    </td>
                    <td class="p-3 text-center">
                        <a href="compliance_entry.php?id=<?= $c['id'] ?>" class="text-purple-600 hover:text-purple-800">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
