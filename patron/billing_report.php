<?php
/**
 * PATRON - Billing Reports
 * Collection reports, outstanding reports, client-wise billing
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if (!isAdmin() && !isManager()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Billing Reports';

// Date filters
$fromDate = sanitize($_GET['from'] ?? date('Y-m-01')); // First of current month
$toDate = sanitize($_GET['to'] ?? date('Y-m-d'));
$reportType = sanitize($_GET['type'] ?? 'summary');

// Get summary stats
$summaryStats = dbFetchOne("
    SELECT 
        COALESCE(SUM(total), 0) as total_invoiced,
        COALESCE(SUM(balance_due), 0) as total_outstanding,
        COUNT(*) as invoice_count,
        COUNT(DISTINCT client_id) as client_count
    FROM invoices 
    WHERE invoice_date BETWEEN ? AND ?
    AND (status IS NULL OR LOWER(status) != 'void')
", [$fromDate, $toDate]) ?: [];

$collectionStats = dbFetchOne("
    SELECT 
        COALESCE(SUM(amount), 0) as total_collected,
        COUNT(*) as payment_count
    FROM payments 
    WHERE payment_date BETWEEN ? AND ?
", [$fromDate, $toDate]) ?: [];

// Overdue summary
$overdueStats = dbFetchOne("
    SELECT 
        COALESCE(SUM(balance_due), 0) as overdue_amount,
        COUNT(*) as overdue_count,
        COUNT(DISTINCT client_id) as overdue_clients
    FROM invoices 
    WHERE balance_due > 0 
    AND due_date < CURDATE()
    AND (status IS NULL OR LOWER(status) != 'void')
") ?: [];

// Client-wise outstanding
$clientOutstanding = dbFetchAll("
    SELECT 
        c.id, c.name as client_name, c.entity_type,
        COALESCE(SUM(i.total), 0) as total_invoiced,
        COALESCE(SUM(i.balance_due), 0) as outstanding,
        COALESCE(SUM(CASE WHEN i.balance_due > 0 AND i.due_date < CURDATE() THEN i.balance_due ELSE 0 END), 0) as overdue,
        COUNT(i.id) as invoice_count,
        MAX(i.invoice_date) as last_invoice_date
    FROM clients c
    LEFT JOIN invoices i ON c.id = i.client_id AND (i.status IS NULL OR LOWER(i.status) != 'void')
    WHERE c.deleted_at IS NULL
    GROUP BY c.id
    HAVING outstanding > 0
    ORDER BY overdue DESC, outstanding DESC
") ?: [];

// Monthly collection trend (last 6 months)
$monthlyTrend = dbFetchAll("
    SELECT 
        DATE_FORMAT(payment_date, '%Y-%m') as month,
        DATE_FORMAT(payment_date, '%b %Y') as month_label,
        SUM(amount) as collected
    FROM payments
    WHERE payment_date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
    GROUP BY DATE_FORMAT(payment_date, '%Y-%m')
    ORDER BY month ASC
") ?: [];

// Monthly invoicing trend
$invoiceTrend = dbFetchAll("
    SELECT 
        DATE_FORMAT(invoice_date, '%Y-%m') as month,
        DATE_FORMAT(invoice_date, '%b %Y') as month_label,
        SUM(total) as invoiced
    FROM invoices
    WHERE invoice_date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
    AND (status IS NULL OR LOWER(status) != 'void')
    GROUP BY DATE_FORMAT(invoice_date, '%Y-%m')
    ORDER BY month ASC
") ?: [];

// Payment mode breakdown
$paymentModes = dbFetchAll("
    SELECT 
        COALESCE(payment_mode, 'Other') as mode,
        SUM(amount) as total,
        COUNT(*) as count
    FROM payments
    WHERE payment_date BETWEEN ? AND ?
    GROUP BY payment_mode
    ORDER BY total DESC
", [$fromDate, $toDate]) ?: [];

// Aging report
$agingReport = dbFetchAll("
    SELECT 
        CASE 
            WHEN DATEDIFF(CURDATE(), due_date) <= 30 THEN '0-30 days'
            WHEN DATEDIFF(CURDATE(), due_date) <= 60 THEN '31-60 days'
            WHEN DATEDIFF(CURDATE(), due_date) <= 90 THEN '61-90 days'
            ELSE '90+ days'
        END as aging_bucket,
        COUNT(*) as invoice_count,
        SUM(balance_due) as amount
    FROM invoices
    WHERE balance_due > 0 
    AND due_date < CURDATE()
    AND (status IS NULL OR LOWER(status) != 'void')
    GROUP BY aging_bucket
    ORDER BY 
        CASE aging_bucket
            WHEN '0-30 days' THEN 1
            WHEN '31-60 days' THEN 2
            WHEN '61-90 days' THEN 3
            ELSE 4
        END
") ?: [];

require_once 'includes/header.php';
?>

<style>
.stat-card { transition: transform 0.2s; }
.stat-card:hover { transform: translateY(-2px); }
.trend-bar { transition: height 0.5s ease; }
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-chart-line text-emerald-500 mr-2"></i>Billing Reports</h1>
        <p class="text-gray-500 text-sm">Collection, outstanding, and client billing analysis</p>
    </div>
    <div class="flex gap-2">
        <button onclick="window.print()" class="btn btn-secondary">
            <i class="fas fa-print mr-2"></i>Print
        </button>
    </div>
</div>

<!-- Date Filter -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div>
            <label class="block text-xs text-gray-500 mb-1">From Date</label>
            <input type="date" name="from" class="form-input" value="<?= $fromDate ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">To Date</label>
            <input type="date" name="to" class="form-input" value="<?= $toDate ?>">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter mr-2"></i>Apply</button>
        <a href="billing_report.php" class="btn btn-secondary">Reset</a>
        
        <!-- Quick Filters -->
        <div class="flex gap-2 ml-auto">
            <a href="?from=<?= date('Y-m-01') ?>&to=<?= date('Y-m-d') ?>" class="px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded text-sm">This Month</a>
            <a href="?from=<?= date('Y-m-01', strtotime('-1 month')) ?>&to=<?= date('Y-m-t', strtotime('-1 month')) ?>" class="px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded text-sm">Last Month</a>
            <a href="?from=<?= date('Y-04-01', strtotime(date('m') >= 4 ? 'now' : '-1 year')) ?>&to=<?= date('Y-m-d') ?>" class="px-3 py-2 bg-gray-100 hover:bg-gray-200 rounded text-sm">This FY</a>
        </div>
    </form>
</div>

<!-- Summary Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-6">
    <div class="stat-card card p-4 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <p class="text-2xl font-bold text-blue-700">₹<?= number_format($summaryStats['total_invoiced'] ?? 0) ?></p>
        <p class="text-xs text-blue-600">Total Invoiced</p>
        <p class="text-xs text-gray-500 mt-1"><?= $summaryStats['invoice_count'] ?? 0 ?> invoices</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500">
        <p class="text-2xl font-bold text-green-700">₹<?= number_format($collectionStats['total_collected'] ?? 0) ?></p>
        <p class="text-xs text-green-600">Total Collected</p>
        <p class="text-xs text-gray-500 mt-1"><?= $collectionStats['payment_count'] ?? 0 ?> payments</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-amber-50 to-amber-100 border-l-4 border-amber-500">
        <p class="text-2xl font-bold text-amber-700">₹<?= number_format($summaryStats['total_outstanding'] ?? 0) ?></p>
        <p class="text-xs text-amber-600">Outstanding</p>
        <p class="text-xs text-gray-500 mt-1"><?= $summaryStats['client_count'] ?? 0 ?> clients</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-red-50 to-red-100 border-l-4 border-red-500">
        <p class="text-2xl font-bold text-red-700">₹<?= number_format($overdueStats['overdue_amount'] ?? 0) ?></p>
        <p class="text-xs text-red-600">Overdue</p>
        <p class="text-xs text-gray-500 mt-1"><?= $overdueStats['overdue_count'] ?? 0 ?> invoices</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-purple-500">
        <?php $collectionRate = ($summaryStats['total_invoiced'] ?? 0) > 0 ? (($collectionStats['total_collected'] ?? 0) / ($summaryStats['total_invoiced'] ?? 1)) * 100 : 0; ?>
        <p class="text-2xl font-bold text-purple-700"><?= number_format($collectionRate, 1) ?>%</p>
        <p class="text-xs text-purple-600">Collection Rate</p>
        <p class="text-xs text-gray-500 mt-1">Period efficiency</p>
    </div>
    <div class="stat-card card p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500">
        <p class="text-2xl font-bold text-indigo-700"><?= $overdueStats['overdue_clients'] ?? 0 ?></p>
        <p class="text-xs text-indigo-600">Clients Overdue</p>
        <p class="text-xs text-gray-500 mt-1">Need follow-up</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <!-- Monthly Trend Chart -->
    <div class="card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-bold"><i class="fas fa-chart-bar text-blue-500 mr-2"></i>Monthly Trend (6 Months)</h3>
        </div>
        <div class="p-4">
            <div class="flex items-end justify-between h-48 gap-2">
                <?php 
                $maxVal = max(
                    max(array_column($monthlyTrend, 'collected') ?: [1]),
                    max(array_column($invoiceTrend, 'invoiced') ?: [1])
                );
                $trendData = [];
                foreach ($invoiceTrend as $it) {
                    $trendData[$it['month']] = ['invoiced' => $it['invoiced'], 'label' => $it['month_label']];
                }
                foreach ($monthlyTrend as $mt) {
                    if (!isset($trendData[$mt['month']])) {
                        $trendData[$mt['month']] = ['label' => $mt['month_label']];
                    }
                    $trendData[$mt['month']]['collected'] = $mt['collected'];
                }
                ksort($trendData);
                foreach ($trendData as $month => $data):
                    $invHeight = ($maxVal > 0) ? (($data['invoiced'] ?? 0) / $maxVal * 100) : 0;
                    $colHeight = ($maxVal > 0) ? (($data['collected'] ?? 0) / $maxVal * 100) : 0;
                ?>
                <div class="flex-1 flex flex-col items-center">
                    <div class="flex gap-1 items-end h-40 w-full justify-center">
                        <div class="w-5 bg-blue-400 rounded-t trend-bar" style="height: <?= $invHeight ?>%" title="Invoiced: ₹<?= number_format($data['invoiced'] ?? 0) ?>"></div>
                        <div class="w-5 bg-green-400 rounded-t trend-bar" style="height: <?= $colHeight ?>%" title="Collected: ₹<?= number_format($data['collected'] ?? 0) ?>"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-2"><?= $data['label'] ?? '' ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="flex justify-center gap-6 mt-4">
                <span class="flex items-center gap-2 text-sm"><span class="w-4 h-4 bg-blue-400 rounded"></span>Invoiced</span>
                <span class="flex items-center gap-2 text-sm"><span class="w-4 h-4 bg-green-400 rounded"></span>Collected</span>
            </div>
        </div>
    </div>
    
    <!-- Aging Report -->
    <div class="card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-bold"><i class="fas fa-clock text-amber-500 mr-2"></i>Aging Report (Overdue)</h3>
        </div>
        <div class="p-4">
            <?php if (empty($agingReport)): ?>
            <div class="text-center py-8 text-gray-400">
                <i class="fas fa-check-circle text-5xl text-green-400 mb-2"></i>
                <p>No overdue invoices!</p>
            </div>
            <?php else: ?>
            <div class="space-y-3">
                <?php 
                $agingColors = ['0-30 days' => 'amber', '31-60 days' => 'orange', '61-90 days' => 'red', '90+ days' => 'rose'];
                $totalAging = array_sum(array_column($agingReport, 'amount'));
                foreach ($agingReport as $ar): 
                    $color = $agingColors[$ar['aging_bucket']] ?? 'gray';
                    $percentage = ($totalAging > 0) ? ($ar['amount'] / $totalAging * 100) : 0;
                ?>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="font-medium"><?= $ar['aging_bucket'] ?></span>
                        <span class="text-<?= $color ?>-600 font-bold">₹<?= number_format($ar['amount']) ?> (<?= $ar['invoice_count'] ?>)</span>
                    </div>
                    <div class="h-3 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-<?= $color ?>-500 rounded-full" style="width: <?= $percentage ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-4 pt-4 border-t">
                <div class="flex justify-between font-bold">
                    <span>Total Overdue</span>
                    <span class="text-red-600">₹<?= number_format($totalAging) ?></span>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Payment Mode Breakdown -->
    <div class="card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-bold"><i class="fas fa-credit-card text-purple-500 mr-2"></i>Payment Modes</h3>
        </div>
        <div class="p-4">
            <?php if (empty($paymentModes)): ?>
            <p class="text-center text-gray-400 py-4">No payments in period</p>
            <?php else: ?>
            <div class="space-y-3">
                <?php 
                $modeColors = ['Bank Transfer' => 'blue', 'UPI' => 'purple', 'Cash' => 'green', 'Cheque' => 'amber', 'Card' => 'indigo'];
                foreach ($paymentModes as $pm): 
                    $color = $modeColors[$pm['mode']] ?? 'gray';
                ?>
                <div class="flex items-center justify-between">
                    <span class="text-sm"><?= htmlspecialchars($pm['mode']) ?></span>
                    <div class="text-right">
                        <span class="font-bold text-<?= $color ?>-600">₹<?= number_format($pm['total']) ?></span>
                        <span class="text-xs text-gray-400 ml-1">(<?= $pm['count'] ?>)</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Client Outstanding (Top 10) -->
    <div class="lg:col-span-2 card">
        <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
            <h3 class="font-bold"><i class="fas fa-users text-red-500 mr-2"></i>Client Outstanding</h3>
            <span class="text-sm text-gray-500"><?= count($clientOutstanding) ?> clients with outstanding</span>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left">Client</th>
                        <th class="px-4 py-3 text-right">Invoiced</th>
                        <th class="px-4 py-3 text-right">Outstanding</th>
                        <th class="px-4 py-3 text-right">Overdue</th>
                        <th class="px-4 py-3 text-center">Invoices</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach (array_slice($clientOutstanding, 0, 10) as $co): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <a href="view_client.php?id=<?= $co['id'] ?>&tab=billing" class="text-blue-600 hover:underline font-medium">
                                <?= htmlspecialchars($co['client_name']) ?>
                            </a>
                            <p class="text-xs text-gray-400"><?= $co['entity_type'] ?></p>
                        </td>
                        <td class="px-4 py-3 text-right">₹<?= number_format($co['total_invoiced']) ?></td>
                        <td class="px-4 py-3 text-right font-medium text-amber-600">₹<?= number_format($co['outstanding']) ?></td>
                        <td class="px-4 py-3 text-right font-bold <?= $co['overdue'] > 0 ? 'text-red-600' : 'text-gray-400' ?>">
                            <?= $co['overdue'] > 0 ? '₹' . number_format($co['overdue']) : '-' ?>
                        </td>
                        <td class="px-4 py-3 text-center"><?= $co['invoice_count'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
