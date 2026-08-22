<?php
/**
 * PATRON - Zoho Billing Widget for Dashboard
 * Include this in dashboard.php after Compliance widget
 * Shows billing overview based on user role
 */

// Check if Zoho is connected
$zohoBillingConnected = false;
try {
    $zohoCheck = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoBillingConnected = ($zohoCheck['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

if ($zohoBillingConnected):

// Get billing stats based on user role
$billingStats = [];
$recentInvoices = [];
$overdueInvoices = [];

if ($isAdmin || $isManager) {
    // Full billing stats for admin/manager
    $billingStats = dbFetchOne("
        SELECT 
            COUNT(*) as total_invoices,
            SUM(total) as total_invoiced,
            SUM(balance_due) as total_outstanding,
            SUM(payment_made) as total_collected,
            SUM(status IN ('sent', 'overdue', 'partially_paid') AND balance_due > 0) as unpaid_count,
            SUM(status = 'overdue' OR (due_date < CURDATE() AND balance_due > 0)) as overdue_count,
            SUM(status = 'paid') as paid_count
        FROM invoices
    ") ?: [];
    
    // Recent unpaid invoices
    $recentInvoices = dbFetchAll("
        SELECT i.*, c.name as client_name,
               DATEDIFF(CURDATE(), i.due_date) as days_overdue
        FROM invoices i
        LEFT JOIN clients c ON i.client_id = c.id
        WHERE i.balance_due > 0
        ORDER BY i.due_date ASC
        LIMIT 5
    ") ?: [];
    
} else {
    // For executors/reviewers - show only assigned clients' billing
    $billingStats = dbFetchOne("
        SELECT 
            COUNT(*) as total_invoices,
            SUM(total) as total_invoiced,
            SUM(balance_due) as total_outstanding,
            SUM(status IN ('sent', 'overdue', 'partially_paid') AND balance_due > 0) as unpaid_count,
            SUM(status = 'overdue' OR (due_date < CURDATE() AND balance_due > 0)) as overdue_count,
            SUM(status = 'paid') as paid_count
        FROM invoices i
        WHERE i.client_id IN (
            SELECT DISTINCT client_id FROM service_requests 
            WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
        )
    ", [$userId, $userId]) ?: [];
    
    // Recent invoices for assigned clients
    $recentInvoices = dbFetchAll("
        SELECT i.*, c.name as client_name,
               DATEDIFF(CURDATE(), i.due_date) as days_overdue
        FROM invoices i
        LEFT JOIN clients c ON i.client_id = c.id
        WHERE i.balance_due > 0
        AND i.client_id IN (
            SELECT DISTINCT client_id FROM service_requests 
            WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
        )
        ORDER BY i.due_date ASC
        LIMIT 5
    ", [$userId, $userId]) ?: [];
}

// Calculate collection rate
$collectionRate = ($billingStats['total_invoiced'] ?? 0) > 0 
    ? round((($billingStats['total_collected'] ?? 0) / $billingStats['total_invoiced']) * 100, 1) 
    : 0;

?>

<!-- ==================== BILLING WIDGET ==================== -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gradient-to-r from-emerald-500 to-teal-500 text-white flex items-center justify-between">
        <h3 class="font-bold flex items-center gap-2">
            <i class="fas fa-rupee-sign"></i>
            Billing Overview
        </h3>
        <div class="flex gap-2">
            <?php if ($isAdmin || $isManager): ?>
            <a href="billing.php" class="px-3 py-1 bg-white/20 hover:bg-white/30 rounded text-sm">View All</a>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="p-4">
        <!-- Stats Row -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <div class="text-center p-3 bg-blue-50 rounded-lg">
                <p class="text-sm text-gray-500">Total Invoiced</p>
                <p class="text-xl font-bold text-blue-600">₹<?= number_format($billingStats['total_invoiced'] ?? 0) ?></p>
            </div>
            <div class="text-center p-3 bg-green-50 rounded-lg">
                <p class="text-sm text-gray-500">Collected</p>
                <p class="text-xl font-bold text-green-600">₹<?= number_format($billingStats['total_collected'] ?? 0) ?></p>
            </div>
            <div class="text-center p-3 bg-amber-50 rounded-lg">
                <p class="text-sm text-gray-500">Outstanding</p>
                <p class="text-xl font-bold text-amber-600">₹<?= number_format($billingStats['total_outstanding'] ?? 0) ?></p>
            </div>
            <div class="text-center p-3 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-500">Collection Rate</p>
                <p class="text-xl font-bold <?= $collectionRate >= 80 ? 'text-green-600' : ($collectionRate >= 50 ? 'text-amber-600' : 'text-red-600') ?>"><?= $collectionRate ?>%</p>
            </div>
        </div>
        
        <!-- Quick Stats -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <a href="billing.php?status=paid" class="p-3 bg-green-100 rounded-lg text-center hover:bg-green-200 transition">
                <p class="text-2xl font-bold text-green-700"><?= $billingStats['paid_count'] ?? 0 ?></p>
                <p class="text-xs text-green-600">Paid</p>
            </a>
            <a href="billing.php?status=unpaid" class="p-3 bg-amber-100 rounded-lg text-center hover:bg-amber-200 transition">
                <p class="text-2xl font-bold text-amber-700"><?= $billingStats['unpaid_count'] ?? 0 ?></p>
                <p class="text-xs text-amber-600">Unpaid</p>
            </a>
            <a href="billing.php?status=overdue" class="p-3 bg-red-100 rounded-lg text-center hover:bg-red-200 transition <?= ($billingStats['overdue_count'] ?? 0) > 0 ? 'animate-pulse' : '' ?>">
                <p class="text-2xl font-bold text-red-700"><?= $billingStats['overdue_count'] ?? 0 ?></p>
                <p class="text-xs text-red-600">Overdue</p>
            </a>
        </div>
        
        <?php if (!empty($recentInvoices)): ?>
        <!-- Recent Unpaid Invoices -->
        <div class="border-t pt-4">
            <h4 class="text-sm font-semibold text-gray-600 mb-3">
                <i class="fas fa-exclamation-circle text-amber-500 mr-1"></i>
                Pending Payments
            </h4>
            <div class="space-y-2">
                <?php foreach ($recentInvoices as $inv): 
                    $isOverdue = ($inv['days_overdue'] ?? 0) > 0;
                ?>
                <a href="view_client.php?id=<?= $inv['client_id'] ?>&tab=billing" 
                   class="flex items-center justify-between p-2 rounded hover:bg-gray-50 <?= $isOverdue ? 'bg-red-50' : '' ?>">
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-gray-800 text-sm truncate"><?= htmlspecialchars($inv['client_name'] ?? 'Unknown') ?></p>
                        <p class="text-xs text-gray-500"><?= $inv['zoho_invoice_number'] ?? 'INV-' . $inv['id'] ?></p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">₹<?= number_format($inv['balance_due'] ?? 0) ?></p>
                        <?php if ($isOverdue): ?>
                        <p class="text-xs text-red-600"><?= $inv['days_overdue'] ?>d overdue</p>
                        <?php elseif ($inv['due_date']): ?>
                        <p class="text-xs text-gray-500">Due <?= date('d M', strtotime($inv['due_date'])) ?></p>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php else: ?>
        <div class="border-t pt-4 text-center text-gray-400">
            <i class="fas fa-check-circle text-3xl text-green-400 mb-2"></i>
            <p>All invoices paid!</p>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php endif; // End Zoho connected check ?>
