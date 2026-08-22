<?php
/**
 * PATRON - Reports & Analytics Dashboard
 * Comprehensive reporting with team productivity, revenue analysis, and service metrics
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Reports & Analytics';

// Date filters
$dateFrom = $_GET['from'] ?? date('Y-m-01'); // Default: first of current month
$dateTo = $_GET['to'] ?? date('Y-m-d'); // Default: today
$period = $_GET['period'] ?? 'month'; // month, quarter, year, custom
$teamMember = (int)($_GET['team'] ?? 0);
$serviceFilter = (int)($_GET['service'] ?? 0);
$clientFilter = (int)($_GET['client'] ?? 0);

// Handle period shortcuts
switch ($period) {
    case 'week':
        $dateFrom = date('Y-m-d', strtotime('-7 days'));
        $dateTo = date('Y-m-d');
        break;
    case 'month':
        $dateFrom = date('Y-m-01');
        $dateTo = date('Y-m-d');
        break;
    case 'quarter':
        $quarter = ceil(date('n') / 3);
        $dateFrom = date('Y-' . str_pad(($quarter - 1) * 3 + 1, 2, '0', STR_PAD_LEFT) . '-01');
        $dateTo = date('Y-m-d');
        break;
    case 'year':
        $dateFrom = date('Y-01-01');
        $dateTo = date('Y-m-d');
        break;
    case 'lastmonth':
        $dateFrom = date('Y-m-01', strtotime('first day of last month'));
        $dateTo = date('Y-m-t', strtotime('last day of last month'));
        break;
    case 'custom':
        // Use provided dates
        break;
}

$dateFilter = "sr.created_at BETWEEN '$dateFrom 00:00:00' AND '$dateTo 23:59:59'";
$teamFilter = $teamMember ? "AND sr.assigned_to = $teamMember" : "";
$serviceFilterSQL = $serviceFilter ? "AND sr.service_id = $serviceFilter" : "";
$clientFilterSQL = $clientFilter ? "AND sr.client_id = $clientFilter" : "";

// ============================================
// OVERVIEW STATS
// ============================================
$overview = dbFetchOne("
    SELECT 
        COUNT(*) as total_requests,
        SUM(CASE WHEN status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as completed,
        SUM(CASE WHEN status NOT IN ('DONE', 'COMPLETED', 'CANCELLED') THEN 1 ELSE 0 END) as in_progress,
        SUM(CASE WHEN status = 'CANCELLED' THEN 1 ELSE 0 END) as cancelled,
        COUNT(DISTINCT client_id) as unique_clients,
        COUNT(DISTINCT assigned_to) as team_members_active,
        AVG(CASE WHEN status IN ('DONE', 'COMPLETED') AND completed_at IS NOT NULL 
            THEN DATEDIFF(completed_at, created_at) ELSE NULL END) as avg_completion_days
    FROM service_requests sr
    WHERE sr.deleted_at IS NULL AND $dateFilter $teamFilter $serviceFilterSQL $clientFilterSQL
") ?: [];

// ============================================
// REVENUE BY SERVICE (using base_price from services)
// ============================================
$revenueByService = dbFetchAll("
    SELECT 
        s.id,
        s.name as service_name,
        s.category,
        s.base_price,
        COUNT(sr.id) as request_count,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as completed_count,
        COALESCE(s.base_price, 0) * SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as total_revenue,
        COALESCE(s.base_price, 0) * COUNT(sr.id) as potential_revenue,
        AVG(CASE WHEN sr.status IN ('DONE', 'COMPLETED') AND sr.completed_at IS NOT NULL 
            THEN DATEDIFF(sr.completed_at, sr.created_at) ELSE NULL END) as avg_days
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL AND $dateFilter $teamFilter $clientFilterSQL
    GROUP BY s.id, s.name, s.category, s.base_price
    ORDER BY total_revenue DESC
") ?: [];

$totalRevenue = array_sum(array_column($revenueByService, 'total_revenue'));
$totalPotential = array_sum(array_column($revenueByService, 'potential_revenue'));

// ============================================
// TEAM PRODUCTIVITY
// ============================================
$teamProductivity = dbFetchAll("
    SELECT 
        u.id,
        u.display_name as name,
        COUNT(sr.id) as total_assigned,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as completed,
        SUM(CASE WHEN sr.status NOT IN ('DONE', 'COMPLETED', 'CANCELLED', 'HOLD') THEN 1 ELSE 0 END) as in_progress,
        SUM(CASE WHEN sr.status = 'HOLD' THEN 1 ELSE 0 END) as on_hold,
        SUM(CASE WHEN COALESCE(sr.due_date, sr.expected_completion) < CURDATE() 
            AND sr.status NOT IN ('DONE', 'COMPLETED', 'CANCELLED') THEN 1 ELSE 0 END) as overdue,
        ROUND(SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) * 100.0 / NULLIF(COUNT(sr.id), 0), 1) as completion_rate,
        AVG(CASE WHEN sr.status IN ('DONE', 'COMPLETED') AND sr.completed_at IS NOT NULL 
            THEN DATEDIFF(sr.completed_at, sr.created_at) ELSE NULL END) as avg_completion_days,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN COALESCE(s.base_price, 0) ELSE 0 END) as revenue_generated
    FROM users u
    LEFT JOIN service_requests sr ON u.id = sr.assigned_to AND sr.deleted_at IS NULL AND $dateFilter $serviceFilterSQL $clientFilterSQL
    LEFT JOIN services s ON sr.service_id = s.id
    GROUP BY u.id, u.display_name
    HAVING total_assigned > 0 OR u.id IN (SELECT DISTINCT assigned_to FROM service_requests WHERE deleted_at IS NULL)
    ORDER BY completed DESC, total_assigned DESC
") ?: [];

// ============================================
// REVENUE BY CLIENT
// ============================================
$revenueByClient = dbFetchAll("
    SELECT 
        c.id,
        c.name as client_name,
        c.entity_type,
        COUNT(sr.id) as total_requests,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as completed,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN COALESCE(s.base_price, 0) ELSE 0 END) as total_revenue,
        MIN(sr.created_at) as first_request,
        MAX(sr.created_at) as last_request
    FROM clients c
    JOIN service_requests sr ON c.id = sr.client_id AND sr.deleted_at IS NULL AND $dateFilter $teamFilter $serviceFilterSQL
    JOIN services s ON sr.service_id = s.id
    WHERE c.deleted_at IS NULL
    GROUP BY c.id, c.name, c.entity_type
    ORDER BY total_revenue DESC
    LIMIT 20
") ?: [];

// ============================================
// MONTHLY TRENDS (Last 12 months)
// ============================================
$monthlyTrends = dbFetchAll("
    SELECT 
        DATE_FORMAT(sr.created_at, '%Y-%m') as month,
        DATE_FORMAT(sr.created_at, '%b %Y') as month_label,
        COUNT(*) as total_requests,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN 1 ELSE 0 END) as completed,
        SUM(CASE WHEN sr.status IN ('DONE', 'COMPLETED') THEN COALESCE(s.base_price, 0) ELSE 0 END) as revenue
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL 
        AND sr.created_at >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
        $teamFilter $serviceFilterSQL $clientFilterSQL
    GROUP BY DATE_FORMAT(sr.created_at, '%Y-%m'), DATE_FORMAT(sr.created_at, '%b %Y')
    ORDER BY month ASC
") ?: [];

// ============================================
// SERVICE TURNAROUND TIME
// ============================================
$serviceTurnaround = dbFetchAll("
    SELECT 
        s.name as service_name,
        s.estimated_days,
        COUNT(sr.id) as total_completed,
        ROUND(AVG(DATEDIFF(sr.completed_at, sr.created_at)), 1) as actual_avg_days,
        MIN(DATEDIFF(sr.completed_at, sr.created_at)) as min_days,
        MAX(DATEDIFF(sr.completed_at, sr.created_at)) as max_days,
        SUM(CASE WHEN DATEDIFF(sr.completed_at, sr.created_at) <= COALESCE(s.estimated_days, 999) THEN 1 ELSE 0 END) as on_time,
        ROUND(SUM(CASE WHEN DATEDIFF(sr.completed_at, sr.created_at) <= COALESCE(s.estimated_days, 999) THEN 1 ELSE 0 END) * 100.0 / COUNT(*), 1) as on_time_rate
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL 
        AND sr.status IN ('DONE', 'COMPLETED')
        AND sr.completed_at IS NOT NULL
        AND $dateFilter $teamFilter $clientFilterSQL
    GROUP BY s.id, s.name, s.estimated_days
    HAVING total_completed >= 1
    ORDER BY total_completed DESC
") ?: [];

// ============================================
// STATUS DISTRIBUTION
// ============================================
$statusDistribution = dbFetchAll("
    SELECT 
        COALESCE(sr.status, 'NEW') as status,
        COUNT(*) as count
    FROM service_requests sr
    WHERE sr.deleted_at IS NULL AND $dateFilter $teamFilter $serviceFilterSQL $clientFilterSQL
    GROUP BY sr.status
    ORDER BY count DESC
") ?: [];

// ============================================
// DROPDOWNS DATA
// ============================================
$allTeamMembers = dbFetchAll("SELECT id, display_name FROM users ORDER BY display_name") ?: [];
$allServices = dbFetchAll("SELECT id, name FROM services WHERE deleted_at IS NULL ORDER BY name") ?: [];
$allClients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

require_once 'includes/header.php';
?>

<style>
.report-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    border: 1px solid #e5e7eb;
}
.stat-box {
    text-align: center;
    padding: 16px;
    border-radius: 8px;
}
.stat-value {
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
}
.stat-label {
    font-size: 12px;
    color: #6b7280;
    margin-top: 4px;
}
.data-table {
    width: 100%;
    font-size: 14px;
}
.data-table th {
    text-align: left;
    padding: 12px 8px;
    font-weight: 600;
    color: #374151;
    border-bottom: 2px solid #e5e7eb;
    background: #f9fafb;
}
.data-table td {
    padding: 10px 8px;
    border-bottom: 1px solid #f3f4f6;
}
.data-table tbody tr:hover {
    background: #f9fafb;
}
.progress-bar {
    height: 8px;
    background: #e5e7eb;
    border-radius: 4px;
    overflow: hidden;
}
.progress-fill {
    height: 100%;
    border-radius: 4px;
    transition: width 0.3s;
}
.tab-btn {
    padding: 10px 20px;
    border: none;
    background: transparent;
    cursor: pointer;
    font-weight: 500;
    color: #6b7280;
    border-bottom: 2px solid transparent;
    transition: all 0.2s;
}
.tab-btn:hover {
    color: #374151;
}
.tab-btn.active {
    color: #2563eb;
    border-bottom-color: #2563eb;
}
.tab-content {
    display: none;
}
.tab-content.active {
    display: block;
}
.badge-success { background: #d1fae5; color: #065f46; }
.badge-warning { background: #fef3c7; color: #92400e; }
.badge-danger { background: #fee2e2; color: #991b1b; }
.badge-info { background: #dbeafe; color: #1e40af; }
.badge {
    padding: 4px 8px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 600;
}
.chart-container {
    position: relative;
    height: 300px;
}
@media print {
    .no-print { display: none !important; }
    .report-card { box-shadow: none; border: 1px solid #ccc; page-break-inside: avoid; }
}
</style>

<!-- Header -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Reports & Analytics</h1>
        <p class="text-gray-500 text-sm"><?= date('d M Y', strtotime($dateFrom)) ?> - <?= date('d M Y', strtotime($dateTo)) ?></p>
    </div>
    <div class="flex gap-2 no-print">
        <button onclick="window.print()" class="btn btn-secondary">
            <i class="fas fa-print mr-1"></i> Print
        </button>
        <a href="?period=<?= $period ?>&from=<?= $dateFrom ?>&to=<?= $dateTo ?>&export=csv" class="btn btn-secondary">
            <i class="fas fa-download mr-1"></i> Export
        </a>
    </div>
</div>

<!-- Filters -->
<div class="report-card mb-6 no-print">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Period</label>
            <select name="period" class="form-input text-sm" onchange="this.form.submit()">
                <option value="week" <?= $period === 'week' ? 'selected' : '' ?>>Last 7 Days</option>
                <option value="month" <?= $period === 'month' ? 'selected' : '' ?>>This Month</option>
                <option value="lastmonth" <?= $period === 'lastmonth' ? 'selected' : '' ?>>Last Month</option>
                <option value="quarter" <?= $period === 'quarter' ? 'selected' : '' ?>>This Quarter</option>
                <option value="year" <?= $period === 'year' ? 'selected' : '' ?>>This Year</option>
                <option value="custom" <?= $period === 'custom' ? 'selected' : '' ?>>Custom Range</option>
            </select>
        </div>
        
        <?php if ($period === 'custom'): ?>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">From</label>
            <input type="date" name="from" value="<?= $dateFrom ?>" class="form-input text-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
            <input type="date" name="to" value="<?= $dateTo ?>" class="form-input text-sm">
        </div>
        <?php endif; ?>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Team Member</label>
            <select name="team" class="form-input text-sm">
                <option value="">All Team</option>
                <?php foreach ($allTeamMembers as $m): ?>
                    <option value="<?= $m['id'] ?>" <?= $teamMember == $m['id'] ? 'selected' : '' ?>><?= htmlspecialchars($m['display_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Service</label>
            <select name="service" class="form-input text-sm">
                <option value="">All Services</option>
                <?php foreach ($allServices as $s): ?>
                    <option value="<?= $s['id'] ?>" <?= $serviceFilter == $s['id'] ? 'selected' : '' ?>><?= htmlspecialchars($s['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Client</label>
            <select name="client" class="form-input text-sm">
                <option value="">All Clients</option>
                <?php foreach ($allClients as $c): ?>
                    <option value="<?= $c['id'] ?>" <?= $clientFilter == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-filter mr-1"></i> Apply
        </button>
        
        <?php if ($teamMember || $serviceFilter || $clientFilter || $period === 'custom'): ?>
            <a href="reports.php" class="btn btn-secondary">Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Overview Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-6">
    <div class="stat-box bg-blue-50">
        <div class="stat-value text-blue-700"><?= number_format($overview['total_requests'] ?? 0) ?></div>
        <div class="stat-label">Total Requests</div>
    </div>
    <div class="stat-box bg-green-50">
        <div class="stat-value text-green-700"><?= number_format($overview['completed'] ?? 0) ?></div>
        <div class="stat-label">Completed</div>
    </div>
    <div class="stat-box bg-amber-50">
        <div class="stat-value text-amber-700"><?= number_format($overview['in_progress'] ?? 0) ?></div>
        <div class="stat-label">In Progress</div>
    </div>
    <div class="stat-box bg-purple-50">
        <div class="stat-value text-purple-700"><?= number_format($overview['unique_clients'] ?? 0) ?></div>
        <div class="stat-label">Clients Served</div>
    </div>
    <div class="stat-box bg-indigo-50">
        <div class="stat-value text-indigo-700"><?= round($overview['avg_completion_days'] ?? 0, 1) ?></div>
        <div class="stat-label">Avg Days to Complete</div>
    </div>
    <div class="stat-box bg-emerald-50">
        <div class="stat-value text-emerald-700">₹<?= number_format($totalRevenue) ?></div>
        <div class="stat-label">Revenue (Completed)</div>
    </div>
    <div class="stat-box bg-gray-50">
        <div class="stat-value text-gray-700">₹<?= number_format($totalPotential) ?></div>
        <div class="stat-label">Potential Revenue</div>
    </div>
</div>

<!-- Tabs -->
<div class="report-card mb-6">
    <div class="border-b border-gray-200 mb-4 no-print">
        <button class="tab-btn active" onclick="showTab('team')">
            <i class="fas fa-users mr-1"></i> Team Productivity
        </button>
        <button class="tab-btn" onclick="showTab('revenue')">
            <i class="fas fa-rupee-sign mr-1"></i> Revenue Analysis
        </button>
        <button class="tab-btn" onclick="showTab('services')">
            <i class="fas fa-cogs mr-1"></i> Service Performance
        </button>
        <button class="tab-btn" onclick="showTab('clients')">
            <i class="fas fa-building mr-1"></i> Client Analysis
        </button>
        <button class="tab-btn" onclick="showTab('trends')">
            <i class="fas fa-chart-line mr-1"></i> Trends
        </button>
    </div>
    
    <!-- Team Productivity Tab -->
    <div id="tab-team" class="tab-content active">
        <h3 class="text-lg font-semibold mb-4">Team Productivity</h3>
        <?php if (empty($teamProductivity)): ?>
            <p class="text-gray-500 text-center py-8">No data available for selected period.</p>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Team Member</th>
                        <th class="text-center">Assigned</th>
                        <th class="text-center">Completed</th>
                        <th class="text-center">In Progress</th>
                        <th class="text-center">On Hold</th>
                        <th class="text-center">Overdue</th>
                        <th class="text-center">Completion Rate</th>
                        <th class="text-center">Avg Days</th>
                        <th class="text-right">Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teamProductivity as $t): ?>
                    <tr>
                        <td>
                            <div class="font-medium"><?= htmlspecialchars($t['name'] ?? 'Unassigned') ?></div>
                        </td>
                        <td class="text-center font-semibold"><?= $t['total_assigned'] ?></td>
                        <td class="text-center">
                            <span class="badge badge-success"><?= $t['completed'] ?></span>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-info"><?= $t['in_progress'] ?></span>
                        </td>
                        <td class="text-center">
                            <?php if ($t['on_hold'] > 0): ?>
                                <span class="badge badge-warning"><?= $t['on_hold'] ?></span>
                            <?php else: ?>
                                <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <?php if ($t['overdue'] > 0): ?>
                                <span class="badge badge-danger"><?= $t['overdue'] ?></span>
                            <?php else: ?>
                                <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <div class="flex items-center gap-2">
                                <div class="progress-bar flex-1" style="width: 60px;">
                                    <div class="progress-fill <?= $t['completion_rate'] >= 80 ? 'bg-green-500' : ($t['completion_rate'] >= 50 ? 'bg-amber-500' : 'bg-red-500') ?>" style="width: <?= min(100, $t['completion_rate']) ?>%"></div>
                                </div>
                                <span class="text-sm font-medium"><?= $t['completion_rate'] ?>%</span>
                            </div>
                        </td>
                        <td class="text-center">
                            <?php if ($t['avg_completion_days']): ?>
                                <span class="font-medium"><?= round($t['avg_completion_days'], 1) ?></span>
                            <?php else: ?>
                                <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-right font-semibold text-green-600">
                            ₹<?= number_format($t['revenue_generated']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-gray-50 font-semibold">
                    <tr>
                        <td>Total</td>
                        <td class="text-center"><?= array_sum(array_column($teamProductivity, 'total_assigned')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($teamProductivity, 'completed')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($teamProductivity, 'in_progress')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($teamProductivity, 'on_hold')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($teamProductivity, 'overdue')) ?></td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="text-right text-green-600">₹<?= number_format(array_sum(array_column($teamProductivity, 'revenue_generated'))) ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Revenue Analysis Tab -->
    <div id="tab-revenue" class="tab-content">
        <h3 class="text-lg font-semibold mb-4">Revenue by Service</h3>
        <?php if (empty($revenueByService)): ?>
            <p class="text-gray-500 text-center py-8">No data available for selected period.</p>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Category</th>
                        <th class="text-right">Base Price</th>
                        <th class="text-center">Requests</th>
                        <th class="text-center">Completed</th>
                        <th class="text-right">Revenue</th>
                        <th class="text-right">Potential</th>
                        <th class="text-center">Avg Days</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($revenueByService as $r): ?>
                    <tr>
                        <td class="font-medium"><?= htmlspecialchars($r['service_name']) ?></td>
                        <td><span class="text-gray-500"><?= htmlspecialchars($r['category'] ?? '-') ?></span></td>
                        <td class="text-right">₹<?= number_format($r['base_price'] ?? 0) ?></td>
                        <td class="text-center"><?= $r['request_count'] ?></td>
                        <td class="text-center">
                            <span class="badge badge-success"><?= $r['completed_count'] ?></span>
                        </td>
                        <td class="text-right font-semibold text-green-600">₹<?= number_format($r['total_revenue']) ?></td>
                        <td class="text-right text-gray-500">₹<?= number_format($r['potential_revenue']) ?></td>
                        <td class="text-center">
                            <?php if ($r['avg_days']): ?>
                                <?= round($r['avg_days'], 1) ?> days
                            <?php else: ?>
                                <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-gray-50 font-semibold">
                    <tr>
                        <td colspan="3">Total</td>
                        <td class="text-center"><?= array_sum(array_column($revenueByService, 'request_count')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($revenueByService, 'completed_count')) ?></td>
                        <td class="text-right text-green-600">₹<?= number_format($totalRevenue) ?></td>
                        <td class="text-right">₹<?= number_format($totalPotential) ?></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Service Performance Tab -->
    <div id="tab-services" class="tab-content">
        <h3 class="text-lg font-semibold mb-4">Service Turnaround Time</h3>
        <?php if (empty($serviceTurnaround)): ?>
            <p class="text-gray-500 text-center py-8">No completed requests in selected period.</p>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th class="text-center">Completed</th>
                        <th class="text-center">Est. Days</th>
                        <th class="text-center">Avg Actual</th>
                        <th class="text-center">Min</th>
                        <th class="text-center">Max</th>
                        <th class="text-center">On Time</th>
                        <th class="text-center">On-Time Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($serviceTurnaround as $s): ?>
                    <tr>
                        <td class="font-medium"><?= htmlspecialchars($s['service_name']) ?></td>
                        <td class="text-center"><?= $s['total_completed'] ?></td>
                        <td class="text-center">
                            <?= $s['estimated_days'] ? $s['estimated_days'] . ' days' : '-' ?>
                        </td>
                        <td class="text-center">
                            <span class="font-semibold <?= ($s['estimated_days'] && $s['actual_avg_days'] > $s['estimated_days']) ? 'text-red-600' : 'text-green-600' ?>">
                                <?= $s['actual_avg_days'] ?> days
                            </span>
                        </td>
                        <td class="text-center text-gray-500"><?= $s['min_days'] ?></td>
                        <td class="text-center text-gray-500"><?= $s['max_days'] ?></td>
                        <td class="text-center">
                            <span class="badge badge-success"><?= $s['on_time'] ?></span>
                        </td>
                        <td class="text-center">
                            <div class="flex items-center gap-2 justify-center">
                                <div class="progress-bar" style="width: 60px;">
                                    <div class="progress-fill <?= $s['on_time_rate'] >= 80 ? 'bg-green-500' : ($s['on_time_rate'] >= 50 ? 'bg-amber-500' : 'bg-red-500') ?>" style="width: <?= min(100, $s['on_time_rate']) ?>%"></div>
                                </div>
                                <span class="text-sm font-medium"><?= $s['on_time_rate'] ?>%</span>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Client Analysis Tab -->
    <div id="tab-clients" class="tab-content">
        <h3 class="text-lg font-semibold mb-4">Top Clients by Revenue</h3>
        <?php if (empty($revenueByClient)): ?>
            <p class="text-gray-500 text-center py-8">No data available for selected period.</p>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Type</th>
                        <th class="text-center">Requests</th>
                        <th class="text-center">Completed</th>
                        <th class="text-right">Revenue</th>
                        <th class="text-right">Avg/Request</th>
                        <th>First Request</th>
                        <th>Last Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($revenueByClient as $c): ?>
                    <tr>
                        <td>
                            <a href="view_client.php?id=<?= $c['id'] ?>" class="font-medium text-blue-600 hover:underline">
                                <?= htmlspecialchars($c['client_name']) ?>
                            </a>
                        </td>
                        <td><span class="text-gray-500"><?= htmlspecialchars($c['entity_type'] ?? '-') ?></span></td>
                        <td class="text-center"><?= $c['total_requests'] ?></td>
                        <td class="text-center">
                            <span class="badge badge-success"><?= $c['completed'] ?></span>
                        </td>
                        <td class="text-right font-semibold text-green-600">₹<?= number_format($c['total_revenue']) ?></td>
                        <td class="text-right text-gray-600">
                            ₹<?= $c['completed'] > 0 ? number_format($c['total_revenue'] / $c['completed']) : 0 ?>
                        </td>
                        <td class="text-sm text-gray-500"><?= date('d M Y', strtotime($c['first_request'])) ?></td>
                        <td class="text-sm text-gray-500"><?= date('d M Y', strtotime($c['last_request'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-gray-50 font-semibold">
                    <tr>
                        <td colspan="2">Total (Top 20)</td>
                        <td class="text-center"><?= array_sum(array_column($revenueByClient, 'total_requests')) ?></td>
                        <td class="text-center"><?= array_sum(array_column($revenueByClient, 'completed')) ?></td>
                        <td class="text-right text-green-600">₹<?= number_format(array_sum(array_column($revenueByClient, 'total_revenue'))) ?></td>
                        <td colspan="3"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Trends Tab -->
    <div id="tab-trends" class="tab-content">
        <h3 class="text-lg font-semibold mb-4">Monthly Trends (Last 12 Months)</h3>
        <?php if (empty($monthlyTrends)): ?>
            <p class="text-gray-500 text-center py-8">No data available.</p>
        <?php else: ?>
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Requests Chart -->
            <div>
                <h4 class="font-medium text-gray-700 mb-3">Requests</h4>
                <div class="chart-container">
                    <canvas id="requestsChart"></canvas>
                </div>
            </div>
            
            <!-- Revenue Chart -->
            <div>
                <h4 class="font-medium text-gray-700 mb-3">Revenue</h4>
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Monthly Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th class="text-center">Requests</th>
                        <th class="text-center">Completed</th>
                        <th class="text-center">Completion Rate</th>
                        <th class="text-right">Revenue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($monthlyTrends as $m): ?>
                    <tr>
                        <td class="font-medium"><?= $m['month_label'] ?></td>
                        <td class="text-center"><?= $m['total_requests'] ?></td>
                        <td class="text-center"><?= $m['completed'] ?></td>
                        <td class="text-center">
                            <?= $m['total_requests'] > 0 ? round($m['completed'] * 100 / $m['total_requests'], 1) : 0 ?>%
                        </td>
                        <td class="text-right font-semibold text-green-600">₹<?= number_format($m['revenue']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Status Distribution -->
<div class="grid md:grid-cols-2 gap-6">
    <div class="report-card">
        <h3 class="text-lg font-semibold mb-4">Status Distribution</h3>
        <?php if (empty($statusDistribution)): ?>
            <p class="text-gray-500 text-center py-8">No data available.</p>
        <?php else: ?>
        <div class="space-y-3">
            <?php 
            $total = array_sum(array_column($statusDistribution, 'count'));
            $statusColors = [
                'NEW' => 'bg-gray-500',
                'ASSIGNED' => 'bg-blue-400',
                'IN_PROGRESS' => 'bg-blue-500',
                'WAITING_DOCS' => 'bg-amber-500',
                'UNDER_REVIEW' => 'bg-purple-500',
                'APPLIED' => 'bg-indigo-500',
                'PROCESSING' => 'bg-cyan-500',
                'DONE' => 'bg-green-500',
                'COMPLETED' => 'bg-green-600',
                'HOLD' => 'bg-red-400',
                'CANCELLED' => 'bg-gray-400',
            ];
            foreach ($statusDistribution as $s): 
                $pct = $total > 0 ? round($s['count'] * 100 / $total, 1) : 0;
                $color = $statusColors[$s['status']] ?? 'bg-gray-500';
            ?>
            <div class="flex items-center gap-3">
                <div class="w-28 text-sm font-medium"><?= str_replace('_', ' ', $s['status']) ?></div>
                <div class="flex-1 progress-bar h-5">
                    <div class="progress-fill <?= $color ?>" style="width: <?= $pct ?>%"></div>
                </div>
                <div class="w-16 text-right text-sm font-semibold"><?= $s['count'] ?></div>
                <div class="w-12 text-right text-sm text-gray-500"><?= $pct ?>%</div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Quick Stats -->
    <div class="report-card">
        <h3 class="text-lg font-semibold mb-4">Quick Insights</h3>
        <div class="space-y-4">
            <?php
            $completionRate = ($overview['total_requests'] ?? 0) > 0 
                ? round(($overview['completed'] ?? 0) * 100 / $overview['total_requests'], 1) 
                : 0;
            $avgRevenuePerClient = ($overview['unique_clients'] ?? 0) > 0 
                ? $totalRevenue / $overview['unique_clients'] 
                : 0;
            $avgRevenuePerRequest = ($overview['completed'] ?? 0) > 0 
                ? $totalRevenue / $overview['completed'] 
                : 0;
            ?>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Overall Completion Rate</span>
                <span class="font-bold text-lg <?= $completionRate >= 80 ? 'text-green-600' : ($completionRate >= 50 ? 'text-amber-600' : 'text-red-600') ?>">
                    <?= $completionRate ?>%
                </span>
            </div>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Avg Revenue per Client</span>
                <span class="font-bold text-lg text-green-600">₹<?= number_format($avgRevenuePerClient) ?></span>
            </div>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Avg Revenue per Request</span>
                <span class="font-bold text-lg text-green-600">₹<?= number_format($avgRevenuePerRequest) ?></span>
            </div>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Avg Completion Time</span>
                <span class="font-bold text-lg text-blue-600"><?= round($overview['avg_completion_days'] ?? 0, 1) ?> days</span>
            </div>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Active Team Members</span>
                <span class="font-bold text-lg text-purple-600"><?= $overview['team_members_active'] ?? 0 ?></span>
            </div>
            
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Revenue Conversion</span>
                <span class="font-bold text-lg text-indigo-600">
                    <?= $totalPotential > 0 ? round($totalRevenue * 100 / $totalPotential, 1) : 0 ?>%
                </span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Tab switching
function showTab(tabName) {
    document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + tabName).classList.add('active');
    event.target.classList.add('active');
}

// Charts
<?php if (!empty($monthlyTrends)): ?>
const months = <?= json_encode(array_column($monthlyTrends, 'month_label')) ?>;
const requests = <?= json_encode(array_map('intval', array_column($monthlyTrends, 'total_requests'))) ?>;
const completed = <?= json_encode(array_map('intval', array_column($monthlyTrends, 'completed'))) ?>;
const revenue = <?= json_encode(array_map('floatval', array_column($monthlyTrends, 'revenue'))) ?>;

// Requests Chart
new Chart(document.getElementById('requestsChart'), {
    type: 'bar',
    data: {
        labels: months,
        datasets: [{
            label: 'Total',
            data: requests,
            backgroundColor: 'rgba(59, 130, 246, 0.7)',
            borderRadius: 4
        }, {
            label: 'Completed',
            data: completed,
            backgroundColor: 'rgba(34, 197, 94, 0.7)',
            borderRadius: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { position: 'bottom' } },
        scales: { y: { beginAtZero: true } }
    }
});

// Revenue Chart
new Chart(document.getElementById('revenueChart'), {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            label: 'Revenue',
            data: revenue,
            borderColor: 'rgb(34, 197, 94)',
            backgroundColor: 'rgba(34, 197, 94, 0.1)',
            fill: true,
            tension: 0.3
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { 
            y: { 
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return '₹' + value.toLocaleString();
                    }
                }
            } 
        }
    }
});
<?php endif; ?>
</script>

<?php require_once 'includes/footer.php'; ?>
