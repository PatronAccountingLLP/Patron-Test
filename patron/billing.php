<?php
/**
 * PATRON - Billing & Invoices Page
 * Shows all invoices from Zoho Books with filtering
 * UPDATED: View invoice in-app and PDF download links
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Billing & Invoices';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Check if user can manage (Admin or Manager)
$userRoles = getUserRoles($userId);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);
$canManage = $isAdmin || $isManager;

// Check Zoho connection
$zohoConnected = false;
try {
    $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

if (!$zohoConnected) {
    setFlash('error', 'Zoho Books integration is not connected. Please configure it first.');
    $redirectTo = $canManage ? 'zoho_settings.php' : 'dashboard.php';
    header('Location: ' . $redirectTo);
    exit;
}

// Filters
$status = sanitize($_GET['status'] ?? '');
$clientId = (int)($_GET['client_id'] ?? 0);
$search = sanitize($_GET['search'] ?? '');
$dateFrom = sanitize($_GET['date_from'] ?? '');
$dateTo = sanitize($_GET['date_to'] ?? '');

// Build WHERE clause
$where = ["1=1"];
$params = [];

// Role-based filtering
if (!$isAdmin && !$isManager) {
    // Non-admin users only see invoices for clients they're assigned to
    $where[] = "i.client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
    )";
    $params[] = $userId;
    $params[] = $userId;
}

if ($status) {
    if ($status === 'unpaid') {
        $where[] = "i.balance_due > 0";
    } elseif ($status === 'overdue') {
        $where[] = "(i.due_date < CURDATE() AND i.balance_due > 0)";
    } elseif ($status === 'paid') {
        $where[] = "i.status = 'paid'";
    } else {
        $where[] = "i.status = ?";
        $params[] = $status;
    }
}

if ($clientId) {
    $where[] = "i.client_id = ?";
    $params[] = $clientId;
}

if ($search) {
    $where[] = "(i.zoho_invoice_number LIKE ? OR c.name LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($dateFrom) {
    $where[] = "i.invoice_date >= ?";
    $params[] = $dateFrom;
}

if ($dateTo) {
    $where[] = "i.invoice_date <= ?";
    $params[] = $dateTo;
}

$whereClause = implode(' AND ', $where);

// Get invoices
$invoices = dbFetchAll("
    SELECT i.*, c.name as client_name, c.email as client_email,
           DATEDIFF(CURDATE(), i.due_date) as days_overdue
    FROM invoices i
    LEFT JOIN clients c ON i.client_id = c.id
    WHERE $whereClause
    ORDER BY i.invoice_date DESC
    LIMIT 200
", $params) ?: [];

// Get stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(total) as total_amount,
        SUM(balance_due) as outstanding,
        SUM(payment_made) as collected,
        SUM(status = 'paid') as paid_count,
        SUM(balance_due > 0 AND status != 'paid') as unpaid_count,
        SUM(due_date < CURDATE() AND balance_due > 0) as overdue_count
    FROM invoices i
    " . (!$isAdmin && !$isManager ? "WHERE i.client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = $userId OR reviewer_id = $userId) AND deleted_at IS NULL
    )" : "") . "
") ?: [];

// Get clients for filter dropdown
$clients = dbFetchAll("
    SELECT DISTINCT c.id, c.name 
    FROM clients c
    JOIN invoices i ON c.id = i.client_id
    " . (!$isAdmin && !$isManager ? "WHERE c.id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = $userId OR reviewer_id = $userId) AND deleted_at IS NULL
    )" : "") . "
    ORDER BY c.name
") ?: [];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-file-invoice-dollar text-emerald-600 mr-2"></i>Billing & Invoices</h1>
        <p class="text-gray-500 text-sm">Synced from Zoho Books</p>
    </div>
    <?php if ($canManage): ?>
    <a href="zoho_sync.php" class="btn btn-secondary"><i class="fas fa-sync mr-2"></i>Sync</a>
    <?php endif; ?>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3 mb-6">
    <a href="billing.php" class="card p-3 text-center hover:bg-gray-50 <?= !$status ? 'ring-2 ring-blue-400' : '' ?>">
        <p class="text-2xl font-bold text-gray-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Total</p>
    </a>
    <a href="billing.php?status=paid" class="card p-3 text-center hover:bg-gray-50 <?= $status === 'paid' ? 'ring-2 ring-green-400' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['paid_count'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Paid</p>
    </a>
    <a href="billing.php?status=unpaid" class="card p-3 text-center hover:bg-gray-50 <?= $status === 'unpaid' ? 'ring-2 ring-amber-400' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['unpaid_count'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Unpaid</p>
    </a>
    <a href="billing.php?status=overdue" class="card p-3 text-center hover:bg-gray-50 <?= $status === 'overdue' ? 'ring-2 ring-red-400' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= $stats['overdue_count'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </a>
    <div class="card p-3 text-center bg-blue-50">
        <p class="text-xl font-bold text-blue-600">₹<?= number_format(($stats['total_amount'] ?? 0) / 100000, 1) ?>L</p>
        <p class="text-xs text-gray-500">Total Invoiced</p>
    </div>
    <div class="card p-3 text-center bg-green-50">
        <p class="text-xl font-bold text-green-600">₹<?= number_format(($stats['collected'] ?? 0) / 100000, 1) ?>L</p>
        <p class="text-xs text-gray-500">Collected</p>
    </div>
    <div class="card p-3 text-center bg-amber-50">
        <p class="text-xl font-bold text-amber-600">₹<?= number_format(($stats['outstanding'] ?? 0) / 100000, 1) ?>L</p>
        <p class="text-xs text-gray-500">Outstanding</p>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Invoice #, Client name..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client_id" class="form-input">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $clientId == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Status</label>
            <select name="status" class="form-input">
                <option value="">All Status</option>
                <option value="paid" <?= $status === 'paid' ? 'selected' : '' ?>>Paid</option>
                <option value="unpaid" <?= $status === 'unpaid' ? 'selected' : '' ?>>Unpaid</option>
                <option value="overdue" <?= $status === 'overdue' ? 'selected' : '' ?>>Overdue</option>
                <option value="sent" <?= $status === 'sent' ? 'selected' : '' ?>>Sent</option>
                <option value="draft" <?= $status === 'draft' ? 'selected' : '' ?>>Draft</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">From Date</label>
            <input type="date" name="date_from" class="form-input" value="<?= $dateFrom ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">To Date</label>
            <input type="date" name="date_to" class="form-input" value="<?= $dateTo ?>">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-1"></i>Filter</button>
        <?php if ($search || $clientId || $status || $dateFrom || $dateTo): ?>
        <a href="billing.php" class="btn btn-secondary"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Invoices Table -->
<div class="card overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Invoice #</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Date</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Due Date</th>
                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Amount</th>
                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Balance</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <?php if (empty($invoices)): ?>
            <tr>
                <td colspan="8" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-file-invoice text-4xl text-gray-300 mb-2 block"></i>
                    <p>No invoices found</p>
                </td>
            </tr>
            <?php else: ?>
            <?php foreach ($invoices as $inv): 
                $isOverdue = ($inv['days_overdue'] ?? 0) > 0 && ($inv['balance_due'] ?? 0) > 0;
                $isPaid = ($inv['status'] ?? '') === 'paid' || ($inv['balance_due'] ?? 0) == 0;
                
                $statusColors = [
                    'paid' => 'green',
                    'sent' => 'blue',
                    'draft' => 'gray',
                    'overdue' => 'red',
                    'partially_paid' => 'amber',
                    'viewed' => 'indigo'
                ];
                $color = $statusColors[$inv['status']] ?? 'gray';
                if ($isOverdue && !$isPaid) $color = 'red';
            ?>
            <tr class="hover:bg-gray-50 <?= $isOverdue ? 'bg-red-50' : '' ?>">
                <td class="px-4 py-3">
                    <a href="view_invoice.php?id=<?= $inv['id'] ?>" class="font-mono font-medium text-blue-600 hover:underline">
                        <?= htmlspecialchars($inv['zoho_invoice_number'] ?? 'INV-' . $inv['id']) ?>
                    </a>
                    <?php if ($inv['reference_number']): ?>
                    <p class="text-xs text-gray-400"><?= htmlspecialchars($inv['reference_number']) ?></p>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3">
                    <a href="view_client.php?id=<?= $inv['client_id'] ?>" class="font-medium text-gray-800 hover:text-blue-600">
                        <?= htmlspecialchars($inv['client_name'] ?? $inv['zoho_customer_name'] ?? 'Unknown') ?>
                    </a>
                </td>
                <td class="px-4 py-3 text-center text-sm text-gray-600">
                    <?= $inv['invoice_date'] ? date('d M Y', strtotime($inv['invoice_date'])) : '-' ?>
                </td>
                <td class="px-4 py-3 text-center text-sm <?= $isOverdue ? 'text-red-600 font-bold' : 'text-gray-600' ?>">
                    <?= $inv['due_date'] ? date('d M Y', strtotime($inv['due_date'])) : '-' ?>
                    <?php if ($isOverdue): ?>
                    <span class="block text-xs">(<?= $inv['days_overdue'] ?>d overdue)</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-right font-medium text-gray-800">
                    ₹<?= number_format($inv['total'] ?? 0) ?>
                </td>
                <td class="px-4 py-3 text-right font-bold <?= ($inv['balance_due'] ?? 0) > 0 ? 'text-amber-600' : 'text-green-600' ?>">
                    ₹<?= number_format($inv['balance_due'] ?? 0) ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <span class="px-2 py-1 bg-<?= $color ?>-100 text-<?= $color ?>-700 rounded text-xs font-medium">
                        <?= $isPaid ? 'Paid' : ($isOverdue ? 'Overdue' : ucfirst($inv['status'] ?? 'Unknown')) ?>
                    </span>
                </td>
                <td class="px-4 py-3 text-center">
                    <div class="flex items-center justify-center gap-1">
                        <!-- View Invoice -->
                        <a href="view_invoice.php?id=<?= $inv['id'] ?>" 
                           class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" 
                           title="View Invoice">
                            <i class="fas fa-eye"></i>
                        </a>
                        <!-- Print/PDF -->
                        <a href="view_invoice.php?id=<?= $inv['id'] ?>&print=1" 
                           target="_blank"
                           class="p-1.5 text-green-600 hover:bg-green-50 rounded" 
                           title="Print / Download PDF">
                            <i class="fas fa-file-pdf"></i>
                        </a>
                        <!-- Client -->
                        <a href="view_client.php?id=<?= $inv['client_id'] ?>" 
                           class="p-1.5 text-gray-500 hover:bg-gray-100 rounded" 
                           title="View Client">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<p class="text-xs text-gray-400 mt-4 text-right">
    Showing <?= count($invoices) ?> invoice(s)
</p>

<?php require_once 'includes/footer.php'; ?>
