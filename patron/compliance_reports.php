<?php
/**
 * PATRON - Compliance Reports
 * Generate various compliance reports
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Compliance Reports';
$currentUser = getCurrentUser();
$currentUserId = (int)$currentUser['id'];
$isAdmin = canSeeAllData();

$reportType = sanitize($_GET['report'] ?? 'summary');
$filterClient = (int)($_GET['client_id'] ?? 0);
$filterCategory = sanitize($_GET['category'] ?? '');
$filterFY = sanitize($_GET['fy'] ?? '');
$exportFormat = sanitize($_GET['export'] ?? '');

// Get current FY
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');
$fyStart = $currentMonth >= 4 ? $currentYear : $currentYear - 1;
$currentFY = $fyStart . '-' . substr($fyStart + 1, 2);

if (!$filterFY) $filterFY = $currentFY;

$fyParts = explode('-', $filterFY);
$fyStartYear = (int)$fyParts[0];
$fyStartDate = "$fyStartYear-04-01";
$fyEndDate = ($fyStartYear + 1) . "-03-31";

$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue'],
    'TDS' => ['label' => 'TDS', 'color' => 'green'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber'],
    'ROC' => ['label' => 'ROC', 'color' => 'purple'],
    'PF_ESI' => ['label' => 'PF/ESI', 'color' => 'teal'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray']
];

$statuses = [
    'NOT_STARTED' => ['label' => 'Not Started', 'color' => 'gray'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'color' => 'blue'],
    'FILED' => ['label' => 'Filed', 'color' => 'green'],
    'FILED_LATE' => ['label' => 'Filed Late', 'color' => 'red'],
];

// Build where clause
$where = ["ct.deleted_at IS NULL", "ctr.due_date BETWEEN ? AND ?"];
$params = [$fyStartDate, $fyEndDate];

if (!$isAdmin) {
    $where[] = "(ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ? OR ctr.manager_id = ?)";
    $params = array_merge($params, [$currentUserId, $currentUserId, $currentUserId, $currentUserId]);
}

if ($filterClient) {
    $where[] = "ctr.client_id = ?";
    $params[] = $filterClient;
}

if ($filterCategory) {
    $where[] = "ct.category = ?";
    $params[] = $filterCategory;
}

$whereClause = implode(' AND ', $where);

// Generate report data
$reportData = [];
$reportTitle = '';

switch ($reportType) {
    case 'summary':
        $reportTitle = 'Compliance Summary Report';
        $reportData = dbFetchAll("
            SELECT ct.category, ct.name as compliance_name,
                COUNT(*) as total,
                SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) as filed,
                SUM(UPPER(ctr.status) = 'FILED') as on_time,
                SUM(UPPER(ctr.status) = 'FILED_LATE') as late,
                SUM(UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as pending,
                SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as overdue
            FROM compliance_tracker ctr
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
            WHERE $whereClause
            GROUP BY ct.category, ctr.compliance_type_id
            ORDER BY ct.category, ct.name
        ", $params) ?: [];
        break;

    case 'client_wise':
        $reportTitle = 'Client-wise Compliance Report';
        $reportData = dbFetchAll("
            SELECT c.id as client_id, c.name as client_name, c.entity_type,
                COUNT(*) as total,
                SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) as filed,
                SUM(UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as pending,
                SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as overdue,
                ROUND(SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) * 100.0 / NULLIF(COUNT(*),0), 1) as rate
            FROM compliance_tracker ctr
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
            JOIN clients c ON ctr.client_id = c.id
            WHERE $whereClause
            GROUP BY ctr.client_id
            ORDER BY rate DESC, c.name
        ", $params) ?: [];
        break;

    case 'monthly':
        $reportTitle = 'Month-wise Filing Report';
        $reportData = dbFetchAll("
            SELECT DATE_FORMAT(ctr.due_date, '%Y-%m') as month_key,
                DATE_FORMAT(ctr.due_date, '%b %Y') as month_name,
                COUNT(*) as total,
                SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) as filed,
                SUM(UPPER(ctr.status) = 'FILED') as on_time,
                SUM(UPPER(ctr.status) = 'FILED_LATE') as late,
                SUM(UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')) as pending,
                ROUND(SUM(UPPER(ctr.status) IN ('FILED', 'FILED_LATE')) * 100.0 / NULLIF(COUNT(*),0), 1) as rate
            FROM compliance_tracker ctr
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
            WHERE $whereClause
            GROUP BY DATE_FORMAT(ctr.due_date, '%Y-%m')
            ORDER BY month_key
        ", $params) ?: [];
        break;

    case 'overdue':
        $reportTitle = 'Overdue Compliance Report';
        $reportData = dbFetchAll("
            SELECT ctr.*, ct.name as compliance_name, ct.code, ct.category,
                c.name as client_name, DATEDIFF(CURDATE(), ctr.due_date) as days_overdue,
                u1.display_name as executor_name
            FROM compliance_tracker ctr
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
            JOIN clients c ON ctr.client_id = c.id
            LEFT JOIN users u1 ON ctr.executor_1_id = u1.id
            WHERE $whereClause
            AND ctr.due_date < CURDATE()
            AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')
            ORDER BY days_overdue DESC
        ", $params) ?: [];
        break;

    case 'team_performance':
        $reportTitle = 'Team Performance Report';
        if ($isAdmin) {
            $reportData = dbFetchAll("
                SELECT u.id, u.display_name as name,
                    COUNT(DISTINCT CASE WHEN ctr.executor_1_id = u.id OR ctr.executor_2_id = u.id THEN ctr.id END) as assigned,
                    COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = u.id OR ctr.executor_2_id = u.id) AND UPPER(ctr.status) IN ('FILED', 'FILED_LATE') THEN ctr.id END) as completed,
                    COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = u.id OR ctr.executor_2_id = u.id) AND UPPER(ctr.status) = 'FILED' THEN ctr.id END) as on_time,
                    COUNT(DISTINCT CASE WHEN (ctr.executor_1_id = u.id OR ctr.executor_2_id = u.id) AND ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE') THEN ctr.id END) as overdue
                FROM users u
                LEFT JOIN compliance_tracker ctr ON (ctr.executor_1_id = u.id OR ctr.executor_2_id = u.id) AND ctr.due_date BETWEEN ? AND ?
                LEFT JOIN compliance_types ct ON ctr.compliance_type_id = ct.id AND ct.deleted_at IS NULL
                WHERE u.deleted_at IS NULL AND u.user_type = 'INTERNAL' AND u.status = 'ACTIVE'
                GROUP BY u.id
                HAVING assigned > 0
                ORDER BY completed DESC
            ", [$fyStartDate, $fyEndDate]) ?: [];
        }
        break;

    case 'detailed':
        $reportTitle = 'Detailed Compliance List';
        $reportData = dbFetchAll("
            SELECT ctr.*, ct.name as compliance_name, ct.code, ct.category,
                c.name as client_name, u1.display_name as executor_name
            FROM compliance_tracker ctr
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
            JOIN clients c ON ctr.client_id = c.id
            LEFT JOIN users u1 ON ctr.executor_1_id = u1.id
            WHERE $whereClause
            ORDER BY ctr.due_date DESC
            LIMIT 500
        ", $params) ?: [];
        break;
}

// Handle CSV export
if ($exportFormat === 'csv' && !empty($reportData)) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="compliance_' . $reportType . '_' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, array_keys($reportData[0]));
    foreach ($reportData as $row) fputcsv($out, $row);
    fclose($out);
    exit;
}

$fyOptions = [];
for ($y = $currentYear; $y >= $currentYear - 5; $y--) {
    $fyOptions[] = $y . '-' . substr($y + 1, 2);
}

require_once 'includes/header.php';
?>

<style>
.report-card { transition: all 0.2s; cursor: pointer; }
.report-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.report-card.active { border-color: #3b82f6; background: #eff6ff; }
.progress-bar { height: 8px; border-radius: 4px; overflow: hidden; background: #e5e7eb; }
.progress-fill { height: 100%; border-radius: 4px; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-chart-bar text-blue-600 mr-2"></i>Compliance Reports</h1>
        <p class="text-gray-500 text-sm">FY <?= htmlspecialchars($filterFY) ?></p>
    </div>
    <div class="flex gap-2">
        <?php if (!empty($reportData)): ?>
        <a href="?<?= http_build_query(array_merge($_GET, ['export' => 'csv'])) ?>" class="btn btn-secondary">
            <i class="fas fa-download mr-2"></i>Export CSV
        </a>
        <?php endif; ?>
        <a href="compliance_tracker.php" class="btn btn-primary">
            <i class="fas fa-list mr-2"></i>Tracker
        </a>
    </div>
</div>

<!-- Report Type Selection -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-6">
    <a href="?report=summary&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'summary' ? 'active' : '' ?>">
        <i class="fas fa-chart-pie text-blue-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Summary</p>
    </a>
    <a href="?report=client_wise&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'client_wise' ? 'active' : '' ?>">
        <i class="fas fa-building text-green-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Client-wise</p>
    </a>
    <a href="?report=monthly&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'monthly' ? 'active' : '' ?>">
        <i class="fas fa-calendar-alt text-amber-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Monthly</p>
    </a>
    <a href="?report=overdue&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'overdue' ? 'active' : '' ?>">
        <i class="fas fa-exclamation-triangle text-red-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Overdue</p>
    </a>
    <?php if ($isAdmin): ?>
    <a href="?report=team_performance&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'team_performance' ? 'active' : '' ?>">
        <i class="fas fa-users text-purple-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Team</p>
    </a>
    <?php endif; ?>
    <a href="?report=detailed&fy=<?= $filterFY ?>" class="report-card card p-4 text-center <?= $reportType === 'detailed' ? 'active' : '' ?>">
        <i class="fas fa-list-alt text-gray-500 text-2xl mb-2"></i>
        <p class="font-medium text-sm">Detailed</p>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap items-end gap-4">
        <input type="hidden" name="report" value="<?= $reportType ?>">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Financial Year</label>
            <select name="fy" class="form-input text-sm" onchange="this.form.submit()">
                <?php foreach ($fyOptions as $fy): ?>
                <option value="<?= $fy ?>" <?= $filterFY === $fy ? 'selected' : '' ?>>FY <?= $fy ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if ($reportType !== 'team_performance'): ?>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client_id" class="form-input text-sm" onchange="this.form.submit()">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $filterClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input text-sm" onchange="this.form.submit()">
                <option value="">All Categories</option>
                <?php foreach ($categories as $k => $v): ?>
                <option value="<?= $k ?>" <?= $filterCategory === $k ? 'selected' : '' ?>><?= $v['label'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php endif; ?>
    </form>
</div>

<!-- Report Content -->
<div class="card">
    <div class="p-4 border-b bg-gray-50">
        <h2 class="font-semibold"><?= $reportTitle ?></h2>
        <p class="text-sm text-gray-500"><?= count($reportData) ?> records</p>
    </div>

    <?php if (empty($reportData)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-inbox text-4xl text-gray-300 mb-2"></i>
        <p>No data found for the selected filters.</p>
    </div>
    <?php elseif ($reportType === 'summary'): ?>
    <!-- Summary Report -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Category</th>
                    <th class="px-4 py-3 text-left">Compliance</th>
                    <th class="px-4 py-3 text-center">Total</th>
                    <th class="px-4 py-3 text-center">Filed</th>
                    <th class="px-4 py-3 text-center">On Time</th>
                    <th class="px-4 py-3 text-center">Late</th>
                    <th class="px-4 py-3 text-center">Pending</th>
                    <th class="px-4 py-3 text-center">Overdue</th>
                    <th class="px-4 py-3 text-center">Rate</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php 
                $currentCat = '';
                foreach ($reportData as $row): 
                    $rate = $row['total'] > 0 ? round($row['filed'] * 100 / $row['total'], 1) : 0;
                    $catInfo = $categories[$row['category']] ?? $categories['OTHER'];
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <?php if ($currentCat !== $row['category']): $currentCat = $row['category']; ?>
                        <span class="px-2 py-1 bg-<?= $catInfo['color'] ?>-100 text-<?= $catInfo['color'] ?>-700 rounded text-xs font-medium">
                            <?= $catInfo['label'] ?>
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($row['compliance_name']) ?></td>
                    <td class="px-4 py-3 text-center"><?= $row['total'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600 font-medium"><?= $row['filed'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600"><?= $row['on_time'] ?></td>
                    <td class="px-4 py-3 text-center text-red-600"><?= $row['late'] ?></td>
                    <td class="px-4 py-3 text-center text-amber-600"><?= $row['pending'] ?></td>
                    <td class="px-4 py-3 text-center <?= $row['overdue'] > 0 ? 'text-red-600 font-bold' : '' ?>"><?= $row['overdue'] ?></td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <div class="progress-bar flex-1">
                                <div class="progress-fill bg-green-500" style="width:<?= $rate ?>%"></div>
                            </div>
                            <span class="text-xs font-medium"><?= $rate ?>%</span>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php elseif ($reportType === 'client_wise'): ?>
    <!-- Client-wise Report -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Client</th>
                    <th class="px-4 py-3 text-center">Total</th>
                    <th class="px-4 py-3 text-center">Filed</th>
                    <th class="px-4 py-3 text-center">Pending</th>
                    <th class="px-4 py-3 text-center">Overdue</th>
                    <th class="px-4 py-3 text-center">Compliance Rate</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($reportData as $row): 
                    $rate = $row['rate'] ?? 0;
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $row['client_id'] ?>&tab=compliance" class="font-medium text-blue-600 hover:underline">
                            <?= htmlspecialchars($row['client_name']) ?>
                        </a>
                        <p class="text-xs text-gray-400"><?= $row['entity_type'] ?></p>
                    </td>
                    <td class="px-4 py-3 text-center"><?= $row['total'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600 font-medium"><?= $row['filed'] ?></td>
                    <td class="px-4 py-3 text-center text-amber-600"><?= $row['pending'] ?></td>
                    <td class="px-4 py-3 text-center <?= $row['overdue'] > 0 ? 'text-red-600 font-bold' : '' ?>"><?= $row['overdue'] ?></td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <div class="progress-bar flex-1">
                                <div class="progress-fill <?= $rate >= 80 ? 'bg-green-500' : ($rate >= 50 ? 'bg-amber-500' : 'bg-red-500') ?>" style="width:<?= $rate ?>%"></div>
                            </div>
                            <span class="text-xs font-medium w-12 text-right"><?= $rate ?>%</span>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php elseif ($reportType === 'monthly'): ?>
    <!-- Monthly Report -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Month</th>
                    <th class="px-4 py-3 text-center">Total</th>
                    <th class="px-4 py-3 text-center">Filed</th>
                    <th class="px-4 py-3 text-center">On Time</th>
                    <th class="px-4 py-3 text-center">Late</th>
                    <th class="px-4 py-3 text-center">Pending</th>
                    <th class="px-4 py-3 text-center">Filing Rate</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($reportData as $row): 
                    $rate = $row['rate'] ?? 0;
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= $row['month_name'] ?></td>
                    <td class="px-4 py-3 text-center"><?= $row['total'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600 font-medium"><?= $row['filed'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600"><?= $row['on_time'] ?></td>
                    <td class="px-4 py-3 text-center text-red-600"><?= $row['late'] ?></td>
                    <td class="px-4 py-3 text-center text-amber-600"><?= $row['pending'] ?></td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <div class="progress-bar flex-1">
                                <div class="progress-fill bg-blue-500" style="width:<?= $rate ?>%"></div>
                            </div>
                            <span class="text-xs font-medium"><?= $rate ?>%</span>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php elseif ($reportType === 'overdue'): ?>
    <!-- Overdue Report -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Client</th>
                    <th class="px-4 py-3 text-left">Compliance</th>
                    <th class="px-4 py-3 text-center">Period</th>
                    <th class="px-4 py-3 text-center">Due Date</th>
                    <th class="px-4 py-3 text-center">Days Overdue</th>
                    <th class="px-4 py-3 text-center">Assigned To</th>
                    <th class="px-4 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($reportData as $row): ?>
                <tr class="hover:bg-gray-50 bg-red-50">
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($row['client_name']) ?></td>
                    <td class="px-4 py-3"><?= htmlspecialchars($row['compliance_name']) ?></td>
                    <td class="px-4 py-3 text-center text-sm"><?= $row['period_name'] ?></td>
                    <td class="px-4 py-3 text-center text-sm"><?= date('d M Y', strtotime($row['due_date'])) ?></td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded font-bold"><?= $row['days_overdue'] ?> days</span>
                    </td>
                    <td class="px-4 py-3 text-center text-sm"><?= htmlspecialchars($row['executor_name'] ?? 'Unassigned') ?></td>
                    <td class="px-4 py-3 text-center">
                        <a href="compliance_entry.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline text-sm">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php elseif ($reportType === 'team_performance'): ?>
    <!-- Team Performance Report -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Team Member</th>
                    <th class="px-4 py-3 text-center">Assigned</th>
                    <th class="px-4 py-3 text-center">Completed</th>
                    <th class="px-4 py-3 text-center">On Time</th>
                    <th class="px-4 py-3 text-center">Overdue</th>
                    <th class="px-4 py-3 text-center">Completion Rate</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($reportData as $row): 
                    $rate = $row['assigned'] > 0 ? round($row['completed'] * 100 / $row['assigned'], 1) : 0;
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($row['name']) ?></td>
                    <td class="px-4 py-3 text-center"><?= $row['assigned'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600 font-medium"><?= $row['completed'] ?></td>
                    <td class="px-4 py-3 text-center text-green-600"><?= $row['on_time'] ?></td>
                    <td class="px-4 py-3 text-center <?= $row['overdue'] > 0 ? 'text-red-600 font-bold' : '' ?>"><?= $row['overdue'] ?></td>
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <div class="progress-bar flex-1">
                                <div class="progress-fill <?= $rate >= 80 ? 'bg-green-500' : ($rate >= 50 ? 'bg-amber-500' : 'bg-red-500') ?>" style="width:<?= $rate ?>%"></div>
                            </div>
                            <span class="text-xs font-medium"><?= $rate ?>%</span>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php elseif ($reportType === 'detailed'): ?>
    <!-- Detailed Report -->
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-3 py-2 text-left">Client</th>
                    <th class="px-3 py-2 text-left">Compliance</th>
                    <th class="px-3 py-2 text-center">Period</th>
                    <th class="px-3 py-2 text-center">Due</th>
                    <th class="px-3 py-2 text-center">Status</th>
                    <th class="px-3 py-2 text-center">Filed</th>
                    <th class="px-3 py-2 text-center">Assigned</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($reportData as $row): 
                    $statusInfo = $statuses[strtoupper($row['status'])] ?? $statuses['NOT_STARTED'];
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-3 py-2"><?= htmlspecialchars($row['client_name']) ?></td>
                    <td class="px-3 py-2"><?= htmlspecialchars($row['compliance_name']) ?></td>
                    <td class="px-3 py-2 text-center"><?= $row['period_name'] ?></td>
                    <td class="px-3 py-2 text-center"><?= date('d M', strtotime($row['due_date'])) ?></td>
                    <td class="px-3 py-2 text-center">
                        <span class="px-2 py-1 bg-<?= $statusInfo['color'] ?>-100 text-<?= $statusInfo['color'] ?>-700 rounded text-xs"><?= $statusInfo['label'] ?></span>
                    </td>
                    <td class="px-3 py-2 text-center"><?= $row['filed_date'] ? date('d M', strtotime($row['filed_date'])) : '-' ?></td>
                    <td class="px-3 py-2 text-center"><?= htmlspecialchars($row['executor_name'] ?? '-') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
