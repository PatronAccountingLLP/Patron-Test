<?php
/**
 * Client Billing Widget - Quick billing summary for client overview
 * Include this in view_client.php overview tab sidebar
 * 
 * Expected variables: $clientId (from parent page)
 */

if (!isset($clientId)) return;

// Get quick billing stats
$billingStats = dbFetchOne("
    SELECT 
        COUNT(*) as total_invoices,
        COALESCE(SUM(total), 0) as total_invoiced,
        COALESCE(SUM(balance_due), 0) as total_outstanding,
        SUM(CASE WHEN balance_due > 0 AND due_date < CURDATE() THEN balance_due ELSE 0 END) as overdue_amount,
        SUM(CASE WHEN balance_due > 0 AND due_date < CURDATE() THEN 1 ELSE 0 END) as overdue_count
    FROM invoices 
    WHERE client_id = ?
", [$clientId]);

$thisMonthBilled = dbFetchOne("
    SELECT COALESCE(SUM(total), 0) as amount
    FROM invoices 
    WHERE client_id = ? AND DATE_FORMAT(invoice_date, '%Y-%m') = DATE_FORMAT(CURDATE(), '%Y-%m')
", [$clientId]);

$thisMonthCollected = dbFetchOne("
    SELECT COALESCE(SUM(amount), 0) as amount
    FROM payments 
    WHERE client_id = ? AND DATE_FORMAT(payment_date, '%Y-%m') = DATE_FORMAT(CURDATE(), '%Y-%m')
", [$clientId]);

$hasOverdue = ($billingStats['overdue_count'] ?? 0) > 0;
?>

<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold"><i class="fas fa-file-invoice-dollar text-emerald-500 mr-2"></i>Billing</h3>
        <a href="?id=<?= $clientId ?>&tab=billing" class="text-sm text-blue-600 hover:underline">View All →</a>
    </div>
    <div class="p-4">
        <!-- Quick Stats -->
        <div class="grid grid-cols-2 gap-3 mb-4">
            <div class="text-center p-3 bg-blue-50 rounded-lg">
                <p class="text-lg font-bold text-blue-600">₹<?= number_format(($billingStats['total_invoiced'] ?? 0) / 1000, 1) ?>K</p>
                <p class="text-xs text-gray-500">Total Billed</p>
            </div>
            <div class="text-center p-3 bg-<?= $hasOverdue ? 'red' : 'amber' ?>-50 rounded-lg <?= $hasOverdue ? 'ring-1 ring-red-200' : '' ?>">
                <p class="text-lg font-bold text-<?= $hasOverdue ? 'red' : 'amber' ?>-600">₹<?= number_format(($billingStats['total_outstanding'] ?? 0) / 1000, 1) ?>K</p>
                <p class="text-xs text-gray-500">Outstanding</p>
            </div>
        </div>
        
        <?php if ($hasOverdue): ?>
        <!-- Overdue Alert -->
        <div class="bg-red-50 border border-red-200 rounded-lg p-3 mb-4">
            <div class="flex items-center gap-2">
                <i class="fas fa-exclamation-circle text-red-500"></i>
                <div>
                    <p class="text-sm font-medium text-red-700"><?= $billingStats['overdue_count'] ?> Overdue Invoice(s)</p>
                    <p class="text-xs text-red-600">₹<?= number_format($billingStats['overdue_amount'] ?? 0) ?> pending</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- This Month -->
        <div class="border-t pt-3">
            <p class="text-xs text-gray-400 uppercase tracking-wider mb-2">This Month</p>
            <div class="flex justify-between text-sm">
                <span class="text-gray-600">Billed</span>
                <span class="font-medium">₹<?= number_format($thisMonthBilled['amount'] ?? 0) ?></span>
            </div>
            <div class="flex justify-between text-sm mt-1">
                <span class="text-gray-600">Collected</span>
                <span class="font-medium text-green-600">₹<?= number_format($thisMonthCollected['amount'] ?? 0) ?></span>
            </div>
        </div>
    </div>
</div>
