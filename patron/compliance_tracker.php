<?php
/**
 * PATRON - Compliance Tracker Dashboard
 * Main dashboard for tracking all recurring compliances
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Compliance Tracker';
$currentUser = getCurrentUser();
$currentUserId = (int)$currentUser['id'];
$isAdmin = canSeeAllData();
$userRole = $currentUser['role'] ?? '';

// =====================================================
// HANDLE BULK STATUS UPDATE
// =====================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bulk_action']) && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $bulkAction = $_POST['bulk_action'];
    $selectedIds = $_POST['selected_entries'] ?? [];
    
    if (!empty($selectedIds) && is_array($selectedIds)) {
        $selectedIds = array_map('intval', $selectedIds);
        $placeholders = implode(',', array_fill(0, count($selectedIds), '?'));
        
        $updateCount = 0;
        $newStatus = '';
        $actionNote = '';
        
        switch ($bulkAction) {
            case 'mark_in_progress':
                $newStatus = 'IN_PROGRESS';
                $actionNote = 'Bulk updated to In Progress';
                break;
            case 'mark_filed':
                $newStatus = 'FILED';
                $actionNote = 'Bulk marked as Filed';
                break;
            case 'mark_not_applicable':
                $newStatus = 'NOT_APPLICABLE';
                $actionNote = 'Bulk marked as Not Applicable';
                break;
            case 'submit_for_review':
                $newStatus = 'UNDER_REVIEW';
                $actionNote = 'Bulk submitted for review';
                break;
        }
        
        if ($newStatus) {
            // Update status
            $sql = "UPDATE compliance_tracker SET status = ?";
            $updateParams = [$newStatus];
            
            if ($newStatus === 'FILED') {
                $sql .= ", filed_date = CURDATE()";
            }
            if ($newStatus === 'UNDER_REVIEW') {
                $sql .= ", submitted_for_review_at = NOW()";
            }
            
            $sql .= " WHERE id IN ($placeholders)";
            $updateParams = array_merge($updateParams, $selectedIds);
            
            // Only allow update if user has permission (check assignment)
            if (!$isAdmin) {
                $sql .= " AND (executor_1_id = ? OR executor_2_id = ? OR manager_id = ?)";
                $updateParams[] = $currentUserId;
                $updateParams[] = $currentUserId;
                $updateParams[] = $currentUserId;
            }
            
            dbExecute($sql, $updateParams);
            
            // Log activity for each entry
            foreach ($selectedIds as $entryId) {
                dbExecute(
                    "INSERT INTO compliance_activity_log (compliance_tracker_id, action, old_value, new_value, notes, performed_by) VALUES (?, 'STATUS_CHANGE', NULL, ?, ?, ?)",
                    [$entryId, $newStatus, $actionNote, $currentUserId]
                );
            }
            
            $updateCount = count($selectedIds);
            setFlash('success', "$updateCount entries updated to $newStatus.");
        }
        
        // Handle bulk assignment
        if ($bulkAction === 'assign_to' && isset($_POST['assign_to_user'])) {
            $assignToUser = (int)$_POST['assign_to_user'];
            if ($assignToUser > 0) {
                $sql = "UPDATE compliance_tracker SET executor_1_id = ? WHERE id IN ($placeholders)";
                $updateParams = array_merge([$assignToUser], $selectedIds);
                
                if (!$isAdmin) {
                    $sql .= " AND manager_id = ?";
                    $updateParams[] = $currentUserId;
                }
                
                dbExecute($sql, $updateParams);
                
                $assigneeName = dbFetchOne("SELECT display_name FROM users WHERE id = ?", [$assignToUser])['display_name'] ?? 'User';
                setFlash('success', count($selectedIds) . " entries assigned to $assigneeName.");
            }
        }
    } else {
        setFlash('error', 'No entries selected.');
    }
    
    header("Location: compliance_tracker.php?" . http_build_query($_GET));
    exit;
}

// =====================================================
// AUTO-ASSIGN LOGIC: Assign tasks to team when due
// Assigns to BOTH Executor 1 & 2, plus Reviewer & Manager
// =====================================================
$unassignedEntries = dbFetchAll("
    SELECT ctr.id, ctr.client_id, ctr.due_date, ct.start_days_before
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    WHERE ctr.executor_1_id IS NULL
    AND ctr.executor_2_id IS NULL
    AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')
    AND DATE_SUB(ctr.due_date, INTERVAL COALESCE(ct.start_days_before, 7) DAY) <= CURDATE()
    AND ct.deleted_at IS NULL
") ?: [];

$autoAssignedCount = 0;
foreach ($unassignedEntries as $ue) {
    // Get client's team
    $team = dbFetchOne("SELECT executor_1_id, executor_2_id, reviewer_id, manager_id FROM client_team WHERE client_id = ?", [$ue['client_id']]);
    
    if ($team && ($team['executor_1_id'] || $team['executor_2_id'])) {
        dbExecute("
            UPDATE compliance_tracker SET 
                executor_1_id = ?,
                executor_2_id = ?,
                reviewer_id = ?,
                manager_id = ?,
                assigned_to = ?
            WHERE id = ?
        ", [
            $team['executor_1_id'] ?: null,
            $team['executor_2_id'] ?: null,
            $team['reviewer_id'] ?: null,
            $team['manager_id'] ?: null,
            $team['executor_1_id'] ?: $team['executor_2_id'], // Legacy field
            $ue['id']
        ]);
        
        // Log the auto-assignment
        $assignedNames = [];
        if ($team['executor_1_id']) $assignedNames[] = 'Executor 1';
        if ($team['executor_2_id']) $assignedNames[] = 'Executor 2';
        dbExecute("INSERT INTO compliance_activity_log (compliance_tracker_id, action, notes, performed_by) VALUES (?, 'AUTO_ASSIGNED', ?, NULL)",
            [$ue['id'], 'Auto-assigned to ' . implode(', ', $assignedNames) . ' based on client team']);
        $autoAssignedCount++;
    }
}

if ($autoAssignedCount > 0) {
    setFlash('info', "$autoAssignedCount task(s) auto-assigned to team members.");
}

// Filters
$filterClient = (int)($_GET['client_id'] ?? 0);
$filterCategory = sanitize($_GET['category'] ?? '');
$filterStatus = sanitize($_GET['status'] ?? '');
$filterView = sanitize($_GET['view'] ?? 'pending'); // pending, overdue, upcoming, filed, unassigned, all
$filterMonth = sanitize($_GET['month'] ?? '');
$filterAssigned = (int)($_GET['assigned'] ?? 0);

// Get current FY
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');
$fyStart = $currentMonth >= 4 ? $currentYear : $currentYear - 1;
$currentFY = $fyStart . '-' . substr($fyStart + 1, 2);

// =====================================================
// VISIBILITY RULES:
// - Executor 1 & 2: See all EXCEPT UNDER_REVIEW, PENDING_APPROVAL
// - Reviewer: See only UNDER_REVIEW, PENDING_APPROVAL
// - Manager: See ALL statuses for their team
// - Admin: See everything
// =====================================================
$where = ["ct.deleted_at IS NULL"];
$params = [];

if (!$isAdmin) {
    // Build visibility based on role assignments
    $visibilityConditions = [];
    
    // User is assigned as Executor (sees non-review statuses)
    $visibilityConditions[] = "(
        (ctr.executor_1_id = ? OR ctr.executor_2_id = ?) 
        AND UPPER(ctr.status) NOT IN ('UNDER_REVIEW', 'PENDING_APPROVAL')
    )";
    $params[] = $currentUserId;
    $params[] = $currentUserId;
    
    // User is assigned as Reviewer (sees only review statuses)
    $visibilityConditions[] = "(
        ctr.reviewer_id = ? 
        AND UPPER(ctr.status) IN ('UNDER_REVIEW', 'PENDING_APPROVAL')
    )";
    $params[] = $currentUserId;
    
    // User is assigned as Manager (sees everything for their team)
    $visibilityConditions[] = "ctr.manager_id = ?";
    $params[] = $currentUserId;
    
    // Legacy: assigned_to field
    $visibilityConditions[] = "ctr.assigned_to = ?";
    $params[] = $currentUserId;
    
    $where[] = "(" . implode(" OR ", $visibilityConditions) . ")";
}

if ($filterClient) {
    $where[] = "ctr.client_id = ?";
    $params[] = $filterClient;
}

if ($filterCategory) {
    $where[] = "ct.category = ?";
    $params[] = $filterCategory;
}

if ($filterStatus) {
    $where[] = "ctr.status = ?";
    $params[] = strtoupper($filterStatus);
}

if ($filterAssigned === -1) {
    // Special case: Unassigned filter
    $where[] = "ctr.executor_1_id IS NULL AND ctr.executor_2_id IS NULL";
} elseif ($filterAssigned > 0) {
    $where[] = "(ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ? OR ctr.manager_id = ?)";
    $params[] = $filterAssigned;
    $params[] = $filterAssigned;
    $params[] = $filterAssigned;
    $params[] = $filterAssigned;
}

// View-based filtering
if ($filterView === 'overdue') {
    $where[] = "ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')";
} elseif ($filterView === 'pending') {
    $where[] = "ctr.due_date <= CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')";
} elseif ($filterView === 'upcoming') {
    $nextMonthStart = date('Y-m-01', strtotime('+1 month'));
    $nextMonthEnd = date('Y-m-t', strtotime('+1 month'));
    $where[] = "ctr.due_date BETWEEN ? AND ?";
    $params[] = $nextMonthStart;
    $params[] = $nextMonthEnd;
} elseif ($filterView === 'filed') {
    $where[] = "UPPER(ctr.status) IN ('FILED', 'FILED_LATE')";
} elseif ($filterView === 'unassigned') {
    $where[] = "ctr.executor_1_id IS NULL AND ctr.executor_2_id IS NULL AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')";
} elseif ($filterView === 'review') {
    $where[] = "UPPER(ctr.status) IN ('UNDER_REVIEW', 'PENDING_APPROVAL')";
}
// 'all' shows everything

// Month filter (works with any view)
if ($filterMonth) {
    $where[] = "DATE_FORMAT(ctr.due_date, '%Y-%m') = ?";
    $params[] = $filterMonth;
}

$whereClause = implode(' AND ', $where);

// Get compliance entries
$entries = dbFetchAll("
    SELECT ctr.*, 
           ct.name as compliance_name, ct.code as compliance_code, ct.category, ct.icon, ct.color,
           ct.frequency, ct.has_payment, ct.has_filing,
           c.name as client_name, c.entity_type,
           u.display_name as assigned_name
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    JOIN clients c ON ctr.client_id = c.id
    LEFT JOIN users u ON ctr.assigned_to = u.id
    WHERE $whereClause
    ORDER BY ctr.due_date ASC, c.name ASC
    LIMIT 500
", $params) ?: [];

// Stats - Calculate based on visibility
$nextMonthStart = date('Y-m-01', strtotime('+1 month'));
$nextMonthEnd = date('Y-m-t', strtotime('+1 month'));

if ($isAdmin) {
    $stats = dbFetchOne("
        SELECT 
            COUNT(*) as total,
            SUM(UPPER(ctr.status) = 'NOT_STARTED') as not_started,
            SUM(UPPER(ctr.status) IN ('DATA_REQUESTED', 'DATA_RECEIVED', 'IN_PROGRESS', 'READY_TO_FILE')) as in_progress,
            SUM(UPPER(ctr.status) IN ('UNDER_REVIEW', 'PENDING_APPROVAL')) as for_review,
            SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) as filed,
            SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as overdue,
            SUM(ctr.due_date <= CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as pending,
            SUM(ctr.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as due_this_week,
            SUM(ctr.due_date BETWEEN '$nextMonthStart' AND '$nextMonthEnd') as upcoming_next_month,
            SUM(ctr.executor_1_id IS NULL AND ctr.executor_2_id IS NULL AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as unassigned
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        WHERE ct.deleted_at IS NULL
    ") ?: [];
} else {
    // User-specific stats
    $stats = dbFetchOne("
        SELECT 
            COUNT(*) as total,
            SUM(UPPER(ctr.status) = 'NOT_STARTED') as not_started,
            SUM(UPPER(ctr.status) IN ('DATA_REQUESTED', 'DATA_RECEIVED', 'IN_PROGRESS', 'READY_TO_FILE')) as in_progress,
            SUM(UPPER(ctr.status) IN ('UNDER_REVIEW', 'PENDING_APPROVAL')) as for_review,
            SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) as filed,
            SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as overdue,
            SUM(ctr.due_date <= CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as pending,
            SUM(ctr.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as due_this_week,
            SUM(ctr.due_date BETWEEN '$nextMonthStart' AND '$nextMonthEnd') as upcoming_next_month,
            SUM(ctr.executor_1_id IS NULL AND ctr.executor_2_id IS NULL AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as unassigned
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        WHERE ct.deleted_at IS NULL
        AND (
            (ctr.executor_1_id = $currentUserId OR ctr.executor_2_id = $currentUserId)
            OR ctr.reviewer_id = $currentUserId
            OR ctr.manager_id = $currentUserId
            OR ctr.assigned_to = $currentUserId
        )
    ") ?: [];
}

// Get filter options
$clients = dbFetchAll("SELECT DISTINCT c.id, c.name FROM clients c JOIN compliance_tracker ctr ON c.id = ctr.client_id ORDER BY c.name") ?: [];
$teamMembers = $isAdmin ? (dbFetchAll("SELECT DISTINCT u.id, u.display_name FROM users u JOIN compliance_tracker ctr ON u.id = ctr.assigned_to ORDER BY u.display_name") ?: []) : [];

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue'],
    'TDS' => ['label' => 'TDS', 'color' => 'green'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber'],
    'ROC' => ['label' => 'ROC', 'color' => 'purple'],
    'PF_ESI' => ['label' => 'PF/ESI', 'color' => 'teal'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray']
];

$statuses = [
    'NOT_STARTED' => ['label' => 'Not Started', 'color' => 'gray', 'icon' => 'fa-circle'],
    'DATA_REQUESTED' => ['label' => 'Data Requested', 'color' => 'amber', 'icon' => 'fa-paper-plane'],
    'DATA_RECEIVED' => ['label' => 'Data Received', 'color' => 'blue', 'icon' => 'fa-inbox'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'color' => 'indigo', 'icon' => 'fa-spinner'],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'color' => 'purple', 'icon' => 'fa-eye'],
    'PENDING_APPROVAL' => ['label' => 'Pending Approval', 'color' => 'orange', 'icon' => 'fa-clock'],
    'READY_TO_FILE' => ['label' => 'Ready to File', 'color' => 'cyan', 'icon' => 'fa-check'],
    'FILED' => ['label' => 'Filed', 'color' => 'green', 'icon' => 'fa-check-circle'],
    'FILED_LATE' => ['label' => 'Filed Late', 'color' => 'red', 'icon' => 'fa-exclamation-circle'],
    'NOT_APPLICABLE' => ['label' => 'N/A', 'color' => 'gray', 'icon' => 'fa-minus-circle'],
    'ON_HOLD' => ['label' => 'On Hold', 'color' => 'red', 'icon' => 'fa-pause-circle']
];

require_once 'includes/header.php';
?>

<style>
.compliance-row { transition: all 0.2s; }
.compliance-row:hover { background: #f8fafc; }
.compliance-row.overdue { background: #fef2f2; border-left: 3px solid #ef4444; }
.compliance-row.due-soon { background: #fffbeb; border-left: 3px solid #f59e0b; }
.status-badge { font-size: 11px; padding: 3px 10px; border-radius: 12px; display: inline-flex; align-items: center; gap: 4px; }
.stat-card { transition: all 0.2s; cursor: pointer; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.quick-action { padding: 4px 8px; font-size: 11px; border-radius: 4px; cursor: pointer; transition: all 0.2s; border: none; }
.quick-action:hover { opacity: 0.8; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-tasks text-blue-600 mr-2"></i>Compliance Tracker</h1>
        <p class="text-gray-500 text-sm">
            FY <?= $currentFY ?> • 
            <?= $isAdmin ? 'All compliances' : 'Your assigned compliances' ?>
        </p>
    </div>
    <div class="flex gap-2">
        <a href="compliance_calendar.php" class="btn btn-secondary">
            <i class="fas fa-calendar-alt mr-2"></i>Calendar
        </a>
        <a href="compliance_reports.php" class="btn btn-secondary">
            <i class="fas fa-chart-bar mr-2"></i>Reports
        </a>
        <a href="compliance_generate.php" class="btn btn-secondary">
            <i class="fas fa-magic mr-2"></i>Generate
        </a>
        <?php if (isAdmin()): ?>
        <a href="compliance_types.php" class="btn btn-secondary">
            <i class="fas fa-cog mr-2"></i>Settings
        </a>
        <?php endif; ?>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-9 gap-3 mb-6">
    <a href="?view=pending" class="stat-card card p-4 text-center <?= $filterView === 'pending' ? 'ring-2 ring-blue-400' : '' ?>">
        <p class="text-2xl font-bold text-gray-700"><?= $stats['pending'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Pending</p>
    </a>
    <a href="?view=overdue" class="stat-card card p-4 text-center <?= ($stats['overdue'] ?? 0) > 0 ? 'bg-red-50' : '' ?> <?= $filterView === 'overdue' ? 'ring-2 ring-red-400' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= $stats['overdue'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </a>
    <a href="?view=unassigned" class="stat-card card p-4 text-center <?= ($stats['unassigned'] ?? 0) > 0 ? 'bg-orange-50' : '' ?> <?= $filterView === 'unassigned' ? 'ring-2 ring-orange-400' : '' ?>">
        <p class="text-2xl font-bold text-orange-600"><?= $stats['unassigned'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Unassigned</p>
    </a>
    <a href="?view=review" class="stat-card card p-4 text-center <?= ($stats['for_review'] ?? 0) > 0 ? 'bg-purple-50' : '' ?> <?= $filterView === 'review' ? 'ring-2 ring-purple-400' : '' ?>">
        <p class="text-2xl font-bold text-purple-600"><?= $stats['for_review'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">For Review</p>
    </a>
    <div class="stat-card card p-4 text-center <?= ($stats['due_this_week'] ?? 0) > 0 ? 'bg-amber-50' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['due_this_week'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Due This Week</p>
    </div>
    <a href="?view=upcoming" class="stat-card card p-4 text-center bg-indigo-50 <?= $filterView === 'upcoming' ? 'ring-2 ring-indigo-400' : '' ?>">
        <p class="text-2xl font-bold text-indigo-600"><?= $stats['upcoming_next_month'] ?? 0 ?></p>
        <p class="text-xs text-gray-500"><?= date('M', strtotime('+1 month')) ?> Upcoming</p>
    </a>
    <div class="stat-card card p-4 text-center bg-blue-50">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['in_progress'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">In Progress</p>
    </div>
    <a href="?view=filed" class="stat-card card p-4 text-center bg-green-50 <?= $filterView === 'filed' ? 'ring-2 ring-green-400' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['filed'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Filed</p>
    </a>
    <a href="?view=all" class="stat-card card p-4 text-center <?= $filterView === 'all' ? 'ring-2 ring-gray-400' : '' ?>">
        <p class="text-2xl font-bold text-gray-600"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">All</p>
    </a>
</div>

<!-- View Tabs -->
<div class="flex flex-wrap gap-2 mb-4">
    <a href="?view=pending<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'pending' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        All Pending
    </a>
    <a href="?view=overdue<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'overdue' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        <i class="fas fa-exclamation-triangle mr-1"></i>Overdue
    </a>
    <a href="?view=unassigned<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'unassigned' ? 'bg-orange-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        <i class="fas fa-user-slash mr-1"></i>Unassigned
    </a>
    <a href="?view=review<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'review' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        <i class="fas fa-eye mr-1"></i>For Review
    </a>
    <a href="?view=upcoming<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'upcoming' ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        <i class="fas fa-calendar-alt mr-1"></i>Upcoming (<?= date('M Y', strtotime('+1 month')) ?>)
    </a>
    <a href="?view=filed<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'filed' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        <i class="fas fa-check-circle mr-1"></i>Filed
    </a>
    <a href="?view=all<?= $filterClient ? "&client_id=$filterClient" : '' ?><?= $filterCategory ? "&category=$filterCategory" : '' ?>" 
       class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'all' ? 'bg-gray-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' ?>">
        All Entries
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <input type="hidden" name="view" value="<?= htmlspecialchars($filterView) ?>">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Due Month</label>
            <input type="month" name="month" class="form-input text-sm" value="<?= htmlspecialchars($filterMonth) ?>" placeholder="All months">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client_id" class="form-input text-sm">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $filterClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input text-sm">
                <option value="">All Categories</option>
                <?php foreach ($categories as $key => $cat): ?>
                <option value="<?= $key ?>" <?= $filterCategory === $key ? 'selected' : '' ?>><?= $cat['label'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Status</label>
            <select name="status" class="form-input text-sm">
                <option value="">All Statuses</option>
                <?php foreach ($statuses as $key => $st): ?>
                <option value="<?= $key ?>" <?= $filterStatus === $key ? 'selected' : '' ?>><?= $st['label'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if ($isAdmin && !empty($teamMembers)): ?>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Assigned To</label>
            <select name="assigned" class="form-input text-sm">
                <option value="">All Team</option>
                <?php foreach ($teamMembers as $tm): ?>
                <option value="<?= $tm['id'] ?>" <?= $filterAssigned == $tm['id'] ? 'selected' : '' ?>><?= htmlspecialchars($tm['display_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary text-sm"><i class="fas fa-filter mr-1"></i>Filter</button>
        <?php if ($filterClient || $filterCategory || $filterStatus || $filterAssigned || $filterMonth !== date('Y-m')): ?>
        <a href="compliance_tracker.php" class="text-sm text-red-500 hover:underline">Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Compliance List -->
<form method="POST" id="bulkForm">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    
    <div class="card overflow-hidden">
        <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
            <h2 class="font-semibold"><i class="fas fa-list mr-2"></i>Compliance Entries</h2>
            <div class="flex items-center gap-4">
                <!-- Bulk Actions (hidden until selection) -->
                <div id="bulkActionsBar" class="hidden items-center gap-2">
                    <span id="selectedCount" class="text-sm text-gray-600">0 selected</span>
                    <select name="bulk_action" id="bulkActionSelect" class="form-input text-sm py-1">
                        <option value="">-- Bulk Action --</option>
                        <option value="mark_in_progress">Mark In Progress</option>
                        <option value="submit_for_review">Submit for Review</option>
                        <option value="mark_filed">Mark as Filed</option>
                        <option value="mark_not_applicable">Mark N/A</option>
                        <?php if ($isAdmin): ?>
                        <option value="assign_to">Assign To...</option>
                        <?php endif; ?>
                    </select>
                    <?php if ($isAdmin): ?>
                    <select name="assign_to_user" id="assignToUser" class="form-input text-sm py-1 hidden">
                        <option value="">Select User</option>
                        <?php foreach ($teamMembers as $tm): ?>
                        <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php endif; ?>
                    <button type="submit" id="bulkSubmitBtn" class="btn btn-primary btn-sm" disabled>Apply</button>
                </div>
                <span class="text-sm text-gray-500"><?= count($entries) ?> entries</span>
            </div>
        </div>
        
        <?php if (empty($entries)): ?>
        <div class="p-8 text-center text-gray-500">
            <i class="fas fa-clipboard-check text-4xl text-gray-300 mb-2"></i>
            <p>No compliance entries found for the selected filters.</p>
            <a href="compliance_generate.php" class="btn btn-primary mt-4">Generate Compliance Periods</a>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                    <tr>
                        <th class="px-3 py-3 text-center w-10">
                            <input type="checkbox" id="selectAll" class="rounded border-gray-300" title="Select All">
                        </th>
                        <th class="px-4 py-3 text-left">Client</th>
                        <th class="px-4 py-3 text-left">Compliance</th>
                        <th class="px-4 py-3 text-center">Period</th>
                        <th class="px-4 py-3 text-center">Due Date</th>
                        <th class="px-4 py-3 text-center">Status</th>
                        <th class="px-4 py-3 text-center">Assigned</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($entries as $e): 
                        $isOverdue = $e['due_date'] < date('Y-m-d') && !in_array($e['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);
                        $isDueSoon = !$isOverdue && $e['due_date'] <= date('Y-m-d', strtotime('+7 days')) && !in_array($e['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);
                        $statusInfo = $statuses[$e['status']] ?? $statuses['NOT_STARTED'];
                        $catInfo = $categories[$e['category']] ?? $categories['OTHER'];
                        $canSelect = !in_array($e['status'], ['FILED', 'FILED_LATE']); // Can't bulk update filed entries
                    ?>
                    <tr class="compliance-row <?= $isOverdue ? 'overdue' : ($isDueSoon ? 'due-soon' : '') ?>">
                        <td class="px-3 py-3 text-center">
                            <?php if ($canSelect): ?>
                            <input type="checkbox" name="selected_entries[]" value="<?= $e['id'] ?>" class="entry-checkbox rounded border-gray-300">
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-3">
                            <a href="view_client.php?id=<?= $e['client_id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                                <?= htmlspecialchars($e['client_name']) ?>
                            </a>
                            <p class="text-xs text-gray-400"><?= $e['entity_type'] ?></p>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-<?= $e['color'] ?? $catInfo['color'] ?>-100 text-<?= $e['color'] ?? $catInfo['color'] ?>-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas <?= $e['icon'] ?? 'fa-file-alt' ?> text-sm"></i>
                                </div>
                            <div>
                                <p class="font-medium text-sm"><?= htmlspecialchars($e['compliance_name']) ?></p>
                                <p class="text-xs text-gray-400"><?= $e['compliance_code'] ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="font-medium text-sm"><?= $e['period_name'] ?></span>
                        <p class="text-xs text-gray-400">FY <?= $e['financial_year'] ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="font-medium <?= $isOverdue ? 'text-red-600' : ($isDueSoon ? 'text-amber-600' : 'text-gray-700') ?>">
                            <?= date('d M Y', strtotime($e['due_date'])) ?>
                        </span>
                        <?php if (!empty($e['due_date_extended'])): ?>
                        <p class="text-xs text-purple-500" title="<?= htmlspecialchars($e['extension_reason'] ?? '') ?>"><i class="fas fa-calendar-plus mr-1"></i>Extended</p>
                        <?php elseif ($isOverdue): ?>
                        <p class="text-xs text-red-500 font-medium">OVERDUE</p>
                        <?php elseif ($isDueSoon): ?>
                        <p class="text-xs text-amber-500"><?= ceil((strtotime($e['due_date']) - time()) / 86400) ?> days left</p>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="status-badge bg-<?= $statusInfo['color'] ?>-100 text-<?= $statusInfo['color'] ?>-700">
                            <i class="fas <?= $statusInfo['icon'] ?> text-[10px]"></i>
                            <?= $statusInfo['label'] ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <?= $e['assigned_name'] ? htmlspecialchars($e['assigned_name']) : '<span class="text-gray-400">-</span>' ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="compliance_entry.php?id=<?= $e['id'] ?>" class="p-2 text-blue-600 hover:bg-blue-50 rounded" title="View/Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <?php if (!in_array($e['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE'])): ?>
                            <button type="button" onclick="openExtendModal(<?= $e['id'] ?>, '<?= $e['due_date'] ?>', '<?= htmlspecialchars($e['compliance_name']) ?>', '<?= $e['period_name'] ?>')" class="p-2 text-purple-600 hover:bg-purple-50 rounded" title="Extend Due Date">
                                <i class="fas fa-calendar-plus"></i>
                            </button>
                            <?php endif; ?>
                            <?php if ($e['status'] === 'NOT_STARTED'): ?>
                            <button type="button" onclick="quickStatus(<?= $e['id'] ?>, 'IN_PROGRESS')" class="quick-action bg-blue-100 text-blue-700" title="Start">
                                <i class="fas fa-play"></i>
                            </button>
                            <?php elseif (in_array($e['status'], ['IN_PROGRESS', 'READY_TO_FILE'])): ?>
                            <button type="button" onclick="quickStatus(<?= $e['id'] ?>, 'FILED')" class="quick-action bg-green-100 text-green-700" title="Mark Filed">
                                <i class="fas fa-check"></i>
                            </button>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
</form>

<!-- Quick Status Update Form (Hidden) -->
<form id="quickStatusForm" method="POST" action="compliance_update_status.php" style="display:none;">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="entry_id" id="qs_entry_id">
    <input type="hidden" name="new_status" id="qs_new_status">
    <input type="hidden" name="redirect" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
</form>

<!-- Extend Due Date Modal -->
<div id="extendModal" class="modal">
    <div class="modal-content" style="max-width:450px;">
        <div class="p-4 border-b bg-purple-50 flex justify-between items-center">
            <h3 class="font-bold text-purple-800"><i class="fas fa-calendar-plus mr-2"></i>Extend Due Date</h3>
            <button onclick="closeExtendModal()" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <form method="POST" action="compliance_extend_date.php" class="p-4 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="entry_id" id="extend_entry_id">
            <input type="hidden" name="redirect" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
            
            <div class="p-3 bg-gray-50 rounded-lg">
                <p class="font-medium" id="extend_compliance_name"></p>
                <p class="text-sm text-gray-500" id="extend_period_name"></p>
                <p class="text-sm text-gray-500">Current Due: <span id="extend_current_due" class="font-medium text-gray-700"></span></p>
            </div>
            
            <div>
                <label class="form-label">New Due Date <span class="text-red-500">*</span></label>
                <input type="date" name="new_due_date" id="extend_new_due_date" class="form-input" required>
            </div>
            
            <div>
                <label class="form-label">Reason for Extension <span class="text-red-500">*</span></label>
                <input type="text" name="extension_reason" class="form-input" placeholder="e.g., Govt extended via notification" required>
            </div>
            
            <div>
                <label class="form-label">Reference (Notification/Circular No.)</label>
                <input type="text" name="extension_reference" class="form-input" placeholder="e.g., Circular No. 123/2026">
            </div>
            
            <div class="flex gap-3 pt-2">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Extend Date</button>
                <button type="button" onclick="closeExtendModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
// Bulk Selection Logic
const selectAllCheckbox = document.getElementById('selectAll');
const entryCheckboxes = document.querySelectorAll('.entry-checkbox');
const bulkActionsBar = document.getElementById('bulkActionsBar');
const selectedCountSpan = document.getElementById('selectedCount');
const bulkActionSelect = document.getElementById('bulkActionSelect');
const bulkSubmitBtn = document.getElementById('bulkSubmitBtn');
const assignToUser = document.getElementById('assignToUser');

function updateBulkUI() {
    const checkedCount = document.querySelectorAll('.entry-checkbox:checked').length;
    selectedCountSpan.textContent = checkedCount + ' selected';
    
    if (checkedCount > 0) {
        bulkActionsBar.classList.remove('hidden');
        bulkActionsBar.classList.add('flex');
    } else {
        bulkActionsBar.classList.add('hidden');
        bulkActionsBar.classList.remove('flex');
    }
    
    // Update select all checkbox state
    selectAllCheckbox.checked = checkedCount === entryCheckboxes.length && entryCheckboxes.length > 0;
    selectAllCheckbox.indeterminate = checkedCount > 0 && checkedCount < entryCheckboxes.length;
}

if (selectAllCheckbox) {
    selectAllCheckbox.addEventListener('change', function() {
        entryCheckboxes.forEach(cb => cb.checked = this.checked);
        updateBulkUI();
    });
}

entryCheckboxes.forEach(cb => {
    cb.addEventListener('change', updateBulkUI);
});

if (bulkActionSelect) {
    bulkActionSelect.addEventListener('change', function() {
        bulkSubmitBtn.disabled = !this.value;
        
        // Show/hide assign user dropdown
        if (assignToUser) {
            if (this.value === 'assign_to') {
                assignToUser.classList.remove('hidden');
            } else {
                assignToUser.classList.add('hidden');
            }
        }
    });
}

// Form submit validation
document.getElementById('bulkForm').addEventListener('submit', function(e) {
    const checkedCount = document.querySelectorAll('.entry-checkbox:checked').length;
    const action = bulkActionSelect.value;
    
    if (checkedCount === 0) {
        e.preventDefault();
        alert('Please select at least one entry.');
        return;
    }
    
    if (!action) {
        e.preventDefault();
        alert('Please select an action.');
        return;
    }
    
    if (action === 'assign_to' && assignToUser && !assignToUser.value) {
        e.preventDefault();
        alert('Please select a user to assign to.');
        return;
    }
    
    if (action === 'mark_filed') {
        if (!confirm('Mark ' + checkedCount + ' entries as Filed?')) {
            e.preventDefault();
            return;
        }
    }
});

function quickStatus(entryId, newStatus) {
    if (newStatus === 'FILED' && !confirm('Mark this compliance as Filed?')) return;
    
    document.getElementById('qs_entry_id').value = entryId;
    document.getElementById('qs_new_status').value = newStatus;
    document.getElementById('quickStatusForm').submit();
}

function openExtendModal(entryId, currentDue, complianceName, periodName) {
    document.getElementById('extend_entry_id').value = entryId;
    document.getElementById('extend_compliance_name').textContent = complianceName;
    document.getElementById('extend_period_name').textContent = periodName;
    document.getElementById('extend_current_due').textContent = new Date(currentDue).toLocaleDateString('en-IN', {day:'2-digit', month:'short', year:'numeric'});
    document.getElementById('extend_new_due_date').value = currentDue;
    document.getElementById('extend_new_due_date').min = currentDue;
    document.getElementById('extendModal').classList.add('show');
}

function closeExtendModal() {
    document.getElementById('extendModal').classList.remove('show');
}
</script>

<?php require_once 'includes/footer.php'; ?>
