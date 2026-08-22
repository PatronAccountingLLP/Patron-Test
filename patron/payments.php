<?php
/**
 * PATRON - Payments Page
 * Shows all payments from Zoho Books
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Payments';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

// Check if user can manage
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
    setFlash('error', 'Zoho Books integration is not connected.');
    header('Location: ' . ($canManage ? 'zoho_settings.php' : 'dashboard.php'));
    exit;
}

// Filters
$clientId = (int)($_GET['client_id'] ?? 0);
$search = sanitize($_GET['search'] ?? '');
$dateFrom = sanitize($_GET['date_from'] ?? '');
$dateTo = sanitize($_GET['date_to'] ?? '');
$mode = sanitize($_GET['mode'] ?? '');

// Build WHERE clause
$where = ["1=1"];
$params = [];

// Role-based filtering
if (!$isAdmin && !$isManager) {
    $where[] = "p.client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
    )";
    $params[] = $userId;
    $params[] = $userId;
}

if ($clientId) {
    $where[] = "p.client_id = ?";
    $params[] = $clientId;
}

if ($search) {
    $where[] = "(p.zoho_payment_number LIKE ? OR p.reference_number LIKE ? OR c.name LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($dateFrom) {
    $where[] = "p.payment_date >= ?";
    $params[] = $dateFrom;
}

if ($dateTo) {
    $where[] = "p.payment_date <= ?";
    $params[] = $dateTo;
}

if ($mode) {
    $where[] = "p.payment_mode = ?";
    $params[] = $mode;
}

$whereClause = implode(' AND ', $where);

// Get payments
$payments = dbFetchAll("
    SELECT p.*, c.name as client_name
    FROM payments p
    LEFT JOIN clients c ON p.client_id = c.id
    WHERE $whereClause
    ORDER BY p.payment_date DESC
    LIMIT 200
", $params) ?: [];

// Get stats
$statsWhere = (!$isAdmin && !$isManager) ? "WHERE p.client_id IN (
    SELECT DISTINCT client_id FROM service_requests 
    WHERE (assigned_to = $userId OR reviewer_id = $userId) AND deleted_at IS NULL
)" : "";

$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total_count,
        COALESCE(SUM(amount), 0) as total_amount,
        COUNT(CASE WHEN payment_date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) THEN 1 END) as recent_count,
        COALESCE(SUM(CASE WHEN payment_date >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) THEN amount END), 0) as recent_amount
    FROM payments p
    $statsWhere
") ?: [];

// Get payment modes for filter
$paymentModes = dbFetchAll("SELECT DISTINCT payment_mode FROM payments WHERE payment_mode IS NOT NULL AND payment_mode != '' ORDER BY payment_mode") ?: [];

// Get clients for filter dropdown
$clients = dbFetchAll("
    SELECT DISTINCT c.id, c.name 
    FROM clients c
    JOIN payments p ON c.id = p.client_id
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
        <h1 class="text-2xl font-bold"><i class="fas fa-money-check-alt text-green-600 mr-2"></i>Payments</h1>
        <p class="text-gray-500 text-sm">Payment records from Zoho Books</p>
    </div>
    <div class="flex gap-2">
        <a href="billing.php" class="btn btn-secondary"><i class="fas fa-file-invoice-dollar mr-2"></i>Invoices</a>
        <a href="estimates.php" class="btn btn-secondary"><i class="fas fa-file-alt mr-2"></i>Estimates</a>
        <?php if ($canManage): ?>
        <a href="zoho_sync.php" class="btn btn-secondary"><i class="fas fa-sync mr-2"></i>Sync</a>
        <?php endif; ?>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-gray-700"><?= number_format($stats['total_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Total Payments</p>
    </div>
    <div class="card p-4 text-center bg-green-50">
        <p class="text-2xl font-bold text-green-600">₹<?= number_format(($stats['total_amount'] ?? 0) / 100000, 1) ?>L</p>
        <p class="text-xs text-gray-500">Total Received</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= number_format($stats['recent_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Last 30 Days</p>
    </div>
    <div class="card p-4 text-center bg-blue-50">
        <p class="text-2xl font-bold text-blue-600">₹<?= number_format(($stats['recent_amount'] ?? 0) / 100000, 1) ?>L</p>
        <p class="text-xs text-gray-500">Recent Collections</p>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Payment #, Reference..." value="<?= htmlspecialchars($search) ?>">
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
            <label class="block text-xs text-gray-500 mb-1">Payment Mode</label>
            <select name="mode" class="form-input">
                <option value="">All Modes</option>
                <?php foreach ($paymentModes as $pm): ?>
                <option value="<?= htmlspecialchars($pm['payment_mode']) ?>" <?= $mode === $pm['payment_mode'] ? 'selected' : '' ?>><?= htmlspecialchars(ucfirst($pm['payment_mode'])) ?></option>
                <?php endforeach; ?>
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
        <?php if ($search || $clientId || $dateFrom || $dateTo || $mode): ?>
        <a href="payments.php" class="btn btn-secondary"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Payments Table -->
<div class="card overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Payment #</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Date</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mode</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Reference</th>
                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Amount</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Invoice</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <?php if (empty($payments)): ?>
            <tr>
                <td colspan="7" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-money-check-alt text-4xl text-gray-300 mb-2 block"></i>
                    <p>No payments found</p>
                </td>
            </tr>
            <?php else: ?>
            <?php foreach ($payments as $pmt): 
                $modeColors = [
                    'cash' => 'green',
                    'bank transfer' => 'blue',
                    'upi' => 'purple',
                    'cheque' => 'amber',
                    'credit card' => 'red',
                    'online' => 'indigo'
                ];
                $modeColor = $modeColors[strtolower($pmt['payment_mode'] ?? '')] ?? 'gray';
            ?>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">
                    <p class="font-mono font-medium text-gray-800"><?= htmlspecialchars($pmt['zoho_payment_number'] ?? 'PMT-' . $pmt['id']) ?></p>
                </td>
                <td class="px-4 py-3">
                    <a href="view_client.php?id=<?= $pmt['client_id'] ?>" class="font-medium text-gray-800 hover:text-blue-600">
                        <?= htmlspecialchars($pmt['client_name'] ?? $pmt['zoho_customer_name'] ?? 'Unknown') ?>
                    </a>
                </td>
                <td class="px-4 py-3 text-center text-sm text-gray-600">
                    <?= $pmt['payment_date'] ? date('d M Y', strtotime($pmt['payment_date'])) : '-' ?>
                </td>
                <td class="px-4 py-3">
                    <?php if ($pmt['payment_mode']): ?>
                    <span class="px-2 py-1 bg-<?= $modeColor ?>-100 text-<?= $modeColor ?>-700 rounded text-xs font-medium">
                        <?= htmlspecialchars(ucfirst($pmt['payment_mode'])) ?>
                    </span>
                    <?php else: ?>
                    <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">
                    <?= htmlspecialchars($pmt['reference_number'] ?? '-') ?>
                </td>
                <td class="px-4 py-3 text-right font-bold text-green-600">
                    ₹<?= number_format($pmt['amount'] ?? 0) ?>
                </td>
                <td class="px-4 py-3 text-center">
                    <?php if ($pmt['invoice_id']): ?>
                    <a href="view_invoice.php?id=<?= $pmt['invoice_id'] ?>" class="text-blue-600 hover:underline text-sm">
                        <i class="fas fa-file-invoice mr-1"></i>View
                    </a>
                    <?php else: ?>
                    <span class="text-gray-400 text-sm">-</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<p class="text-xs text-gray-400 mt-4 text-right">
    Showing <?= count($payments) ?> payment(s)
</p>

<?php require_once 'includes/footer.php'; ?>
