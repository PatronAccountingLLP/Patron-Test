<?php
/**
 * PATRON - User-wise Productivity Report
 * Shows productivity metrics for each team member
 * Fixes Team Feedback Issue #12
 */

require_once 'includes/db.php';
if (file_exists('includes/access_control.php')) {
    require_once 'includes/access_control.php';
}
startSession();
requireLogin();

$pageTitle = 'Productivity Report';

// Date range filter
$period = sanitize($_GET['period'] ?? 'month');
$startDate = sanitize($_GET['start_date'] ?? '');
$endDate = sanitize($_GET['end_date'] ?? '');

// Set date range based on period
switch ($period) {
    case 'today':
        $startDate = date('Y-m-d');
        $endDate = date('Y-m-d');
        break;
    case 'week':
        $startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));
        break;
    case 'month':
        $startDate = date('Y-m-01');
        $endDate = date('Y-m-t');
        break;
    case 'quarter':
        $quarter = ceil(date('n') / 3);
        $startDate = date('Y-' . str_pad(($quarter - 1) * 3 + 1, 2, '0', STR_PAD_LEFT) . '-01');
        $endDate = date('Y-m-t', strtotime($startDate . ' +2 months'));
        break;
    case 'year':
        $startDate = date('Y-01-01');
        $endDate = date('Y-12-31');
        break;
    case 'custom':
        if (!$startDate) $startDate = date('Y-m-01');
        if (!$endDate) $endDate = date('Y-m-d');
        break;
    default:
        $startDate = date('Y-m-01');
        $endDate = date('Y-m-t');
}

// Get all internal users
$users = dbFetchAll("
    SELECT u.id, u.display_name, u.profile_photo, u.status,
           u.can_be_executor, u.can_be_reviewer
    FROM users u
    WHERE u.deleted_at IS NULL 
    AND u.user_type = 'INTERNAL'
    AND u.status = 'ACTIVE'
    ORDER BY u.display_name
") ?: [];

// Get productivity data for each user
$productivityData = [];
foreach ($users as $user) {
    $userId = $user['id'];
    
    // Service Requests metrics
    $requestStats = dbFetchOne("
        SELECT 
            COUNT(DISTINCT CASE WHEN assigned_to = ? THEN id END) as assigned_total,
            COUNT(DISTINCT CASE WHEN assigned_to = ? AND status IN ('DONE', 'COMPLETED') AND DATE(completed_at) BETWEEN ? AND ? THEN id END) as completed,
            COUNT(DISTINCT CASE WHEN assigned_to = ? AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED') THEN id END) as pending,
            COUNT(DISTINCT CASE WHEN assigned_to = ? AND COALESCE(due_date, expected_completion) < CURDATE() AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED') THEN id END) as overdue,
            COUNT(DISTINCT CASE WHEN reviewer_id = ? AND status IN ('UNDER_REVIEW', 'REVIEW') THEN id END) as pending_review,
            COUNT(DISTINCT CASE WHEN reviewer_id = ? AND status IN ('DONE', 'COMPLETED') AND DATE(completed_at) BETWEEN ? AND ? THEN id END) as reviewed
        FROM service_requests
        WHERE deleted_at IS NULL
    ", [$userId, $userId, $startDate, $endDate, $userId, $userId, $userId, $userId, $startDate, $endDate]) ?: [];
    
    // Compliance metrics
    $complianceStats = dbFetchOne("
        SELECT 
            COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = ? OR ctr.executor_2_id = ?) THEN ctr.id END) as assigned_total,
            COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND UPPER(ctr.status) IN ('FILED', 'FILED_LATE') AND DATE(ctr.filed_date) BETWEEN ? AND ? THEN ctr.id END) as filed,
            COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE') THEN ctr.id END) as pending,
            COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE') THEN ctr.id END) as overdue,
            COUNT(DISTINCT CASE WHEN ctr.reviewer_id = ? AND UPPER(ctr.status) IN ('UNDER_REVIEW', 'PENDING_APPROVAL') THEN ctr.id END) as pending_review
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        WHERE ct.deleted_at IS NULL
    ", [$userId, $userId, $userId, $userId, $startDate, $endDate, $userId, $userId, $userId, $userId, $userId]) ?: [];
    
    // Calculate productivity score (simple formula)
    $completed = ($requestStats['completed'] ?? 0) + ($complianceStats['filed'] ?? 0);
    $pending = ($requestStats['pending'] ?? 0) + ($complianceStats['pending'] ?? 0);
    $overdue = ($requestStats['overdue'] ?? 0) + ($complianceStats['overdue'] ?? 0);
    
    $total = $completed + $pending;
    $score = $total > 0 ? round(($completed / max($total, 1)) * 100 - ($overdue * 5)) : 0;
    $score = max(0, min(100, $score));
    
    $productivityData[] = [
        'user' => $user,
        'requests' => $requestStats,
        'compliance' => $complianceStats,
        'totals' => [
            'completed' => $completed,
            'pending' => $pending,
            'overdue' => $overdue,
            'reviewed' => ($requestStats['reviewed'] ?? 0),
            'pending_review' => ($requestStats['pending_review'] ?? 0) + ($complianceStats['pending_review'] ?? 0)
        ],
        'score' => $score
    ];
}

// Sort by score (descending)
usort($productivityData, function($a, $b) {
    return $b['score'] - $a['score'];
});

// Team totals
$teamTotals = [
    'completed' => array_sum(array_column(array_column($productivityData, 'totals'), 'completed')),
    'pending' => array_sum(array_column(array_column($productivityData, 'totals'), 'pending')),
    'overdue' => array_sum(array_column(array_column($productivityData, 'totals'), 'overdue')),
    'reviewed' => array_sum(array_column(array_column($productivityData, 'totals'), 'reviewed'))
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold"><i class="fas fa-chart-line text-green-500 mr-2"></i>Productivity Report</h2>
        <p class="text-gray-500 text-sm">User-wise task completion and performance metrics</p>
    </div>
    <div>
        <button onclick="window.print()" class="btn btn-secondary">
            <i class="fas fa-print mr-2"></i>Print Report
        </button>
    </div>
</div>

<!-- Period Filter -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div>
            <label class="form-label">Period</label>
            <select name="period" class="form-input" onchange="toggleCustomDates(this.value)">
                <option value="today" <?= $period === 'today' ? 'selected' : '' ?>>Today</option>
                <option value="week" <?= $period === 'week' ? 'selected' : '' ?>>This Week</option>
                <option value="month" <?= $period === 'month' ? 'selected' : '' ?>>This Month</option>
                <option value="quarter" <?= $period === 'quarter' ? 'selected' : '' ?>>This Quarter</option>
                <option value="year" <?= $period === 'year' ? 'selected' : '' ?>>This Year</option>
                <option value="custom" <?= $period === 'custom' ? 'selected' : '' ?>>Custom Range</option>
            </select>
        </div>
        <div id="customDates" class="<?= $period !== 'custom' ? 'hidden' : '' ?> flex gap-2">
            <div>
                <label class="form-label">From</label>
                <input type="date" name="start_date" value="<?= $startDate ?>" class="form-input">
            </div>
            <div>
                <label class="form-label">To</label>
                <input type="date" name="end_date" value="<?= $endDate ?>" class="form-input">
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter mr-2"></i>Apply</button>
    </form>
    <p class="text-sm text-gray-500 mt-2">
        <i class="fas fa-calendar mr-1"></i>
        Showing data from <strong><?= date('d M Y', strtotime($startDate)) ?></strong> to <strong><?= date('d M Y', strtotime($endDate)) ?></strong>
    </p>
</div>

<!-- Team Summary -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <div class="card p-4 text-center bg-green-50">
        <p class="text-3xl font-bold text-green-600"><?= $teamTotals['completed'] ?></p>
        <p class="text-sm text-gray-600">Tasks Completed</p>
    </div>
    <div class="card p-4 text-center bg-amber-50">
        <p class="text-3xl font-bold text-amber-600"><?= $teamTotals['pending'] ?></p>
        <p class="text-sm text-gray-600">Tasks Pending</p>
    </div>
    <div class="card p-4 text-center bg-red-50">
        <p class="text-3xl font-bold text-red-600"><?= $teamTotals['overdue'] ?></p>
        <p class="text-sm text-gray-600">Overdue</p>
    </div>
    <div class="card p-4 text-center bg-purple-50">
        <p class="text-3xl font-bold text-purple-600"><?= $teamTotals['reviewed'] ?></p>
        <p class="text-sm text-gray-600">Reviews Done</p>
    </div>
</div>

<!-- User Productivity Table -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">Individual Performance</h3>
        <span class="text-sm text-gray-500"><?= count($productivityData) ?> team members</span>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-left text-sm text-gray-600">
                <tr>
                    <th class="p-3">Rank</th>
                    <th class="p-3">Team Member</th>
                    <th class="p-3 text-center">Completed</th>
                    <th class="p-3 text-center">Pending</th>
                    <th class="p-3 text-center">Overdue</th>
                    <th class="p-3 text-center">Reviews Done</th>
                    <th class="p-3 text-center">Pending Reviews</th>
                    <th class="p-3">Score</th>
                    <th class="p-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php $rank = 1; foreach ($productivityData as $data): 
                    $user = $data['user'];
                    $totals = $data['totals'];
                    $score = $data['score'];
                    
                    // Score color
                    if ($score >= 80) $scoreColor = 'green';
                    elseif ($score >= 60) $scoreColor = 'blue';
                    elseif ($score >= 40) $scoreColor = 'amber';
                    else $scoreColor = 'red';
                    
                    // Rank badge
                    $rankBadge = '';
                    if ($rank === 1) $rankBadge = '🥇';
                    elseif ($rank === 2) $rankBadge = '🥈';
                    elseif ($rank === 3) $rankBadge = '🥉';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="p-3 text-center">
                        <span class="text-lg"><?= $rankBadge ?: $rank ?></span>
                    </td>
                    <td class="p-3">
                        <div class="flex items-center gap-3">
                            <?php if ($user['profile_photo'] && file_exists($user['profile_photo'])): ?>
                            <img src="<?= $user['profile_photo'] ?>" class="w-10 h-10 rounded-full object-cover">
                            <?php else: ?>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold">
                                <?= strtoupper(substr($user['display_name'], 0, 1)) ?>
                            </div>
                            <?php endif; ?>
                            <div>
                                <p class="font-medium"><?= htmlspecialchars($user['display_name']) ?></p>
                                <div class="flex gap-1">
                                    <?php if ($user['can_be_executor']): ?>
                                    <span class="text-xs text-blue-600">Executor</span>
                                    <?php endif; ?>
                                    <?php if ($user['can_be_reviewer']): ?>
                                    <span class="text-xs text-purple-600"><?= $user['can_be_executor'] ? '• ' : '' ?>Reviewer</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="p-3 text-center">
                        <span class="text-lg font-bold text-green-600"><?= $totals['completed'] ?></span>
                    </td>
                    <td class="p-3 text-center">
                        <span class="text-lg font-bold text-amber-600"><?= $totals['pending'] ?></span>
                    </td>
                    <td class="p-3 text-center">
                        <span class="text-lg font-bold <?= $totals['overdue'] > 0 ? 'text-red-600' : 'text-gray-400' ?>">
                            <?= $totals['overdue'] ?>
                        </span>
                    </td>
                    <td class="p-3 text-center">
                        <span class="text-lg font-bold text-purple-600"><?= $totals['reviewed'] ?></span>
                    </td>
                    <td class="p-3 text-center">
                        <span class="text-lg font-bold <?= $totals['pending_review'] > 0 ? 'text-indigo-600' : 'text-gray-400' ?>">
                            <?= $totals['pending_review'] ?>
                        </span>
                    </td>
                    <td class="p-3">
                        <div class="flex items-center gap-2">
                            <div class="w-24 bg-gray-200 rounded-full h-3">
                                <div class="bg-<?= $scoreColor ?>-500 h-3 rounded-full" style="width: <?= $score ?>%"></div>
                            </div>
                            <span class="text-sm font-bold text-<?= $scoreColor ?>-600"><?= $score ?>%</span>
                        </div>
                    </td>
                    <td class="p-3">
                        <a href="user_tasks.php?user_id=<?= $user['id'] ?>" class="text-blue-600 hover:underline text-sm">
                            View Tasks →
                        </a>
                    </td>
                </tr>
                <?php $rank++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Detailed Breakdown (Collapsible) -->
<div class="card mt-6">
    <button onclick="toggleDetails()" class="w-full p-4 border-b bg-gray-50 flex items-center justify-between text-left">
        <h3 class="font-semibold"><i class="fas fa-list-alt mr-2"></i>Detailed Breakdown</h3>
        <i class="fas fa-chevron-down" id="detailsIcon"></i>
    </button>
    <div id="detailsSection" class="hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 text-left text-gray-600">
                    <tr>
                        <th class="p-3" rowspan="2">Team Member</th>
                        <th class="p-3 text-center border-l" colspan="4">Service Requests</th>
                        <th class="p-3 text-center border-l" colspan="4">Compliance</th>
                    </tr>
                    <tr>
                        <th class="p-2 text-center border-l">Completed</th>
                        <th class="p-2 text-center">Pending</th>
                        <th class="p-2 text-center">Overdue</th>
                        <th class="p-2 text-center">Reviewed</th>
                        <th class="p-2 text-center border-l">Filed</th>
                        <th class="p-2 text-center">Pending</th>
                        <th class="p-2 text-center">Overdue</th>
                        <th class="p-2 text-center">To Review</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($productivityData as $data): 
                        $user = $data['user'];
                        $req = $data['requests'];
                        $comp = $data['compliance'];
                    ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 font-medium"><?= htmlspecialchars($user['display_name']) ?></td>
                        <td class="p-2 text-center border-l text-green-600"><?= $req['completed'] ?? 0 ?></td>
                        <td class="p-2 text-center text-amber-600"><?= $req['pending'] ?? 0 ?></td>
                        <td class="p-2 text-center text-red-600"><?= $req['overdue'] ?? 0 ?></td>
                        <td class="p-2 text-center text-purple-600"><?= $req['reviewed'] ?? 0 ?></td>
                        <td class="p-2 text-center border-l text-green-600"><?= $comp['filed'] ?? 0 ?></td>
                        <td class="p-2 text-center text-amber-600"><?= $comp['pending'] ?? 0 ?></td>
                        <td class="p-2 text-center text-red-600"><?= $comp['overdue'] ?? 0 ?></td>
                        <td class="p-2 text-center text-indigo-600"><?= $comp['pending_review'] ?? 0 ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function toggleCustomDates(value) {
    document.getElementById('customDates').classList.toggle('hidden', value !== 'custom');
}

function toggleDetails() {
    const section = document.getElementById('detailsSection');
    const icon = document.getElementById('detailsIcon');
    section.classList.toggle('hidden');
    icon.classList.toggle('fa-chevron-down');
    icon.classList.toggle('fa-chevron-up');
}
</script>

<style>
@media print {
    .btn, form, nav, header { display: none !important; }
    .card { box-shadow: none !important; border: 1px solid #ddd !important; }
}
</style>

<?php require_once 'includes/footer.php'; ?>
