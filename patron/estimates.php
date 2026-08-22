<?php
/**
 * PATRON - Estimates/Quotations Page
 * Lists estimates from Zoho Books with PDF view/download
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Estimates & Quotations';
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
    setFlash('error', 'Zoho Books integration is not connected.');
    header('Location: dashboard.php');
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

// Role-based filtering - non-managers only see their clients
if (!$canManage) {
    $where[] = "(e.client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
    ) OR e.client_id IN (
        SELECT client_id FROM client_team 
        WHERE executor_1_id = ? OR executor_2_id = ? OR reviewer_id = ? OR manager_id = ?
    ))";
    $params = array_merge($params, [$userId, $userId, $userId, $userId, $userId, $userId]);
}

if ($status) {
    if ($status === 'expired') {
        $where[] = "(e.expiry_date < CURDATE() AND e.status NOT IN ('accepted', 'invoiced', 'declined'))";
    } else {
        $where[] = "e.status = ?";
        $params[] = $status;
    }
}

if ($clientId) {
    $where[] = "e.client_id = ?";
    $params[] = $clientId;
}

if ($search) {
    $where[] = "(e.zoho_estimate_number LIKE ? OR c.name LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($dateFrom) {
    $where[] = "e.estimate_date >= ?";
    $params[] = $dateFrom;
}

if ($dateTo) {
    $where[] = "e.estimate_date <= ?";
    $params[] = $dateTo;
}

$whereClause = implode(' AND ', $where);

// Get estimates
$estimates = dbFetchAll("
    SELECT e.*, c.name as client_name,
           CASE WHEN e.expiry_date < CURDATE() AND e.status NOT IN ('accepted', 'invoiced', 'declined') THEN 1 ELSE 0 END as is_expired
    FROM quotations e
    LEFT JOIN clients c ON e.client_id = c.id
    WHERE $whereClause
    ORDER BY e.estimate_date DESC
    LIMIT 500
", $params) ?: [];

// Get stats
$roleFilter = "";
$roleParams = [];
if (!$canManage) {
    $roleFilter = "WHERE (client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
    ) OR client_id IN (
        SELECT client_id FROM client_team 
        WHERE executor_1_id = ? OR executor_2_id = ? OR reviewer_id = ? OR manager_id = ?
    ))";
    $roleParams = [$userId, $userId, $userId, $userId, $userId, $userId];
}

$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        COALESCE(SUM(total), 0) as total_amount,
        SUM(status = 'sent') as sent_count,
        SUM(status = 'accepted') as accepted_count,
        SUM(status = 'invoiced') as invoiced_count,
        SUM(status = 'declined') as declined_count,
        SUM(status = 'draft') as draft_count,
        SUM(expiry_date < CURDATE() AND status NOT IN ('accepted', 'invoiced', 'declined')) as expired_count
    FROM quotations
    " . $roleFilter,
    $roleParams
) ?: [];

// Get clients for filter
$clientQuery = "SELECT DISTINCT c.id, c.name FROM clients c 
                JOIN quotations e ON c.id = e.client_id";
if (!$canManage) {
    $clientQuery .= " WHERE (c.id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = $userId OR reviewer_id = $userId) AND deleted_at IS NULL
    ) OR c.id IN (
        SELECT client_id FROM client_team 
        WHERE executor_1_id = $userId OR executor_2_id = $userId OR reviewer_id = $userId OR manager_id = $userId
    ))";
}
$clientQuery .= " ORDER BY c.name";
$clients = dbFetchAll($clientQuery) ?: [];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-file-alt text-purple-600 mr-2"></i>Estimates & Quotations</h1>
        <p class="text-gray-500 text-sm">Synced from Zoho Books • Click View/Download for PDF</p>
    </div>
    <div class="flex gap-2">
        <a href="invoices.php" class="btn btn-secondary"><i class="fas fa-file-invoice-dollar mr-2"></i>Invoices</a>
        <a href="payments.php" class="btn btn-secondary"><i class="fas fa-money-check-alt mr-2"></i>Payments</a>
        <?php if ($canManage): ?>
        <a href="zoho_sync.php" class="btn btn-primary"><i class="fas fa-sync mr-2"></i>Sync</a>
        <?php endif; ?>
    </div>
</div>

<!-- Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-3 mb-6">
    <a href="?status=" class="card p-4 text-center hover:shadow-md transition <?= !$status ? 'ring-2 ring-purple-500' : '' ?>">
        <p class="text-2xl font-bold text-gray-800"><?= number_format($stats['total'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Total</p>
    </a>
    <div class="card p-4 text-center bg-purple-50">
        <p class="text-2xl font-bold text-purple-600">₹<?= number_format($stats['total_amount'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Value</p>
    </div>
    <a href="?status=draft" class="card p-4 text-center hover:shadow-md transition <?= $status === 'draft' ? 'ring-2 ring-gray-500' : '' ?>">
        <p class="text-2xl font-bold text-gray-600"><?= number_format($stats['draft_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Draft</p>
    </a>
    <a href="?status=sent" class="card p-4 text-center hover:shadow-md transition <?= $status === 'sent' ? 'ring-2 ring-blue-500' : '' ?>">
        <p class="text-2xl font-bold text-blue-600"><?= number_format($stats['sent_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Sent</p>
    </a>
    <a href="?status=accepted" class="card p-4 text-center hover:shadow-md transition <?= $status === 'accepted' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= number_format($stats['accepted_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Accepted</p>
    </a>
    <a href="?status=invoiced" class="card p-4 text-center hover:shadow-md transition <?= $status === 'invoiced' ? 'ring-2 ring-teal-500' : '' ?>">
        <p class="text-2xl font-bold text-teal-600"><?= number_format($stats['invoiced_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Invoiced</p>
    </a>
    <a href="?status=declined" class="card p-4 text-center hover:shadow-md transition <?= $status === 'declined' ? 'ring-2 ring-red-500' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= number_format($stats['declined_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Declined</p>
    </a>
    <a href="?status=expired" class="card p-4 text-center hover:shadow-md transition <?= $status === 'expired' ? 'ring-2 ring-amber-500' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= number_format($stats['expired_count'] ?? 0) ?></p>
        <p class="text-xs text-gray-500">Expired</p>
    </a>
</div>

<!-- Filters -->
<div class="card mb-6">
    <form method="GET" class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
            <div>
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" 
                       placeholder="Search estimate #, client..." class="form-input w-full">
            </div>
            <div>
                <select name="client_id" class="form-select w-full">
                    <option value="">All Clients</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>" <?= $clientId == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <select name="status" class="form-select w-full">
                    <option value="">All Status</option>
                    <option value="draft" <?= $status === 'draft' ? 'selected' : '' ?>>Draft</option>
                    <option value="sent" <?= $status === 'sent' ? 'selected' : '' ?>>Sent</option>
                    <option value="accepted" <?= $status === 'accepted' ? 'selected' : '' ?>>Accepted</option>
                    <option value="invoiced" <?= $status === 'invoiced' ? 'selected' : '' ?>>Invoiced</option>
                    <option value="declined" <?= $status === 'declined' ? 'selected' : '' ?>>Declined</option>
                    <option value="expired" <?= $status === 'expired' ? 'selected' : '' ?>>Expired</option>
                </select>
            </div>
            <div>
                <input type="date" name="date_from" value="<?= $dateFrom ?>" class="form-input w-full" placeholder="From">
            </div>
            <div>
                <input type="date" name="date_to" value="<?= $dateTo ?>" class="form-input w-full" placeholder="To">
            </div>
            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-search mr-1"></i>Filter</button>
                <a href="estimates.php" class="btn btn-secondary"><i class="fas fa-times"></i></a>
            </div>
        </div>
    </form>
</div>

<!-- Estimates Table -->
<div class="card">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Estimate #</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Client</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Date</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Expiry</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">Status</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600">Amount</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600">PDF</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($estimates)): ?>
                <tr>
                    <td colspan="7" class="px-4 py-8 text-center text-gray-500">
                        <i class="fas fa-file-alt text-4xl mb-2 text-gray-300"></i>
                        <p>No estimates found</p>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach ($estimates as $est): 
                    $statusColors = [
                        'draft' => 'gray',
                        'sent' => 'blue',
                        'accepted' => 'green',
                        'invoiced' => 'teal',
                        'declined' => 'red',
                        'expired' => 'amber'
                    ];
                    $displayStatus = $est['is_expired'] ? 'expired' : $est['status'];
                    $color = $statusColors[$displayStatus] ?? 'gray';
                ?>
                <tr class="hover:bg-gray-50 <?= $est['is_expired'] ? 'bg-amber-50' : '' ?>">
                    <td class="px-4 py-3">
                        <span class="font-medium text-gray-900"><?= htmlspecialchars($est['zoho_estimate_number'] ?: 'EST-'.$est['id']) ?></span>
                    </td>
                    <td class="px-4 py-3">
                        <?php if ($est['client_id']): ?>
                        <a href="view_client.php?id=<?= $est['client_id'] ?>" class="text-purple-600 hover:underline">
                            <?= htmlspecialchars($est['client_name'] ?: $est['zoho_customer_name']) ?>
                        </a>
                        <?php else: ?>
                        <span class="text-gray-500"><?= htmlspecialchars($est['zoho_customer_name'] ?: 'Unknown') ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-gray-600">
                        <?= $est['estimate_date'] ? date('d M Y', strtotime($est['estimate_date'])) : '-' ?>
                    </td>
                    <td class="px-4 py-3 <?= $est['is_expired'] ? 'text-amber-600 font-medium' : 'text-gray-600' ?>">
                        <?= $est['expiry_date'] ? date('d M Y', strtotime($est['expiry_date'])) : '-' ?>
                        <?php if ($est['is_expired']): ?>
                        <i class="fas fa-clock ml-1"></i>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-<?= $color ?>-100 text-<?= $color ?>-700">
                            <?= ucfirst($displayStatus) ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right font-medium">
                        ₹<?= number_format($est['total'], 2) ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($est['zoho_estimate_id']): ?>
                        <div class="flex justify-center gap-1">
                            <a href="zoho_pdf.php?type=estimate&id=<?= $est['id'] ?>&action=view" 
                               target="_blank"
                               class="p-1.5 text-purple-600 hover:bg-purple-50 rounded" title="View PDF">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="zoho_pdf.php?type=estimate&id=<?= $est['id'] ?>&action=download" 
                               class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Download PDF">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-400 text-xs">Not synced</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <?php if (count($estimates) >= 500): ?>
    <div class="p-4 border-t bg-gray-50 text-center text-sm text-gray-500">
        Showing first 500 results. Use filters to narrow down.
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
