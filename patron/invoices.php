<?php
/**
 * PATRON - Invoices Page (Enhanced)
 * FY-wise view with category-wise breakdown (PA/P, PA/R, TDS, etc.)
 * Shows summary totals by category and status
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/invoice_helpers.php';
startSession();
requireLogin();

$pageTitle = 'Invoices';
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
$selectedFY = sanitize($_GET['fy'] ?? '');
$selectedCategory = sanitize($_GET['category'] ?? '');
$selectedStatus = sanitize($_GET['status'] ?? '');
$clientId = (int)($_GET['client_id'] ?? 0);
$search = sanitize($_GET['search'] ?? '');

// Get available FYs
$availableFYs = getAvailableFYs();
if (!$selectedFY || !in_array($selectedFY, $availableFYs)) {
    $selectedFY = getCurrentFY();
}

// Get FY date range
$fyRange = getFYDateRange($selectedFY);

// Build WHERE clause
$where = ["(i.status != 'void' OR i.status IS NULL)"];
$params = [];

// FY filter
$where[] = "i.invoice_date >= ? AND i.invoice_date <= ?";
$params[] = $fyRange['start'];
$params[] = $fyRange['end'];

// Role-based filtering - non-managers only see their clients
if (!$canManage) {
    $where[] = "(i.client_id IN (
        SELECT DISTINCT client_id FROM service_requests 
        WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
    ) OR i.client_id IN (
        SELECT client_id FROM client_team 
        WHERE executor_1_id = ? OR executor_2_id = ? OR reviewer_id = ? OR manager_id = ?
    ))";
    $params = array_merge($params, [$userId, $userId, $userId, $userId, $userId, $userId]);
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

$whereClause = implode(' AND ', $where);

// Get invoices
$invoices = dbFetchAll("
    SELECT i.*, c.name as client_name,
           DATEDIFF(CURDATE(), i.due_date) as days_overdue
    FROM invoices i
    LEFT JOIN clients c ON i.client_id = c.id
    WHERE $whereClause
    ORDER BY i.invoice_date DESC
", $params) ?: [];

// Categorize invoices
$invoices = categorizeInvoices($invoices);

// Get category definitions
$categories = getInvoiceCategories();

// Calculate category-wise stats (before filtering)
$categoryStats = [];
foreach ($categories as $catKey => $catDef) {
    $categoryStats[$catKey] = [
        'name' => $catDef['name'],
        'short' => $catDef['short'],
        'overdue' => ['count' => 0, 'total' => 0, 'balance' => 0],
        'unpaid' => ['count' => 0, 'total' => 0, 'balance' => 0],
        'paid' => ['count' => 0, 'total' => 0, 'balance' => 0],
        'all' => ['count' => 0, 'total' => 0, 'balance' => 0]
    ];
}

foreach ($invoices as $inv) {
    $cat = $inv['category'] ?? 'OTHER';
    if (!isset($categoryStats[$cat])) {
        $categoryStats[$cat] = [
            'name' => 'Other',
            'short' => 'OTHER',
            'overdue' => ['count' => 0, 'total' => 0, 'balance' => 0],
            'unpaid' => ['count' => 0, 'total' => 0, 'balance' => 0],
            'paid' => ['count' => 0, 'total' => 0, 'balance' => 0],
            'all' => ['count' => 0, 'total' => 0, 'balance' => 0]
        ];
    }
    
    $total = (float)($inv['total'] ?? 0);
    $balance = (float)($inv['balance_due'] ?? 0);
    $daysOverdue = (int)($inv['days_overdue'] ?? 0);
    $status = strtolower($inv['status'] ?? '');
    
    // Determine invoice status
    if ($status === 'paid' || $balance <= 0) {
        $statusKey = 'paid';
    } elseif ($daysOverdue > 0) {
        $statusKey = 'overdue';
    } else {
        $statusKey = 'unpaid';
    }
    
    $categoryStats[$cat][$statusKey]['count']++;
    $categoryStats[$cat][$statusKey]['total'] += $total;
    $categoryStats[$cat][$statusKey]['balance'] += $balance;
    
    $categoryStats[$cat]['all']['count']++;
    $categoryStats[$cat]['all']['total'] += $total;
    $categoryStats[$cat]['all']['balance'] += $balance;
}

// Remove empty categories
$categoryStats = array_filter($categoryStats, fn($cs) => $cs['all']['count'] > 0);

// Calculate grand totals
$grandTotals = [
    'overdue' => ['count' => 0, 'total' => 0, 'balance' => 0],
    'unpaid' => ['count' => 0, 'total' => 0, 'balance' => 0],
    'paid' => ['count' => 0, 'total' => 0, 'balance' => 0],
    'all' => ['count' => 0, 'total' => 0, 'balance' => 0]
];
foreach ($categoryStats as $cs) {
    foreach (['overdue', 'unpaid', 'paid', 'all'] as $key) {
        $grandTotals[$key]['count'] += $cs[$key]['count'];
        $grandTotals[$key]['total'] += $cs[$key]['total'];
        $grandTotals[$key]['balance'] += $cs[$key]['balance'];
    }
}

// Filter by category if selected
$filteredInvoices = $invoices;
if ($selectedCategory && $selectedCategory !== 'ALL') {
    $filteredInvoices = array_filter($invoices, fn($inv) => $inv['category'] === $selectedCategory);
    $filteredInvoices = array_values($filteredInvoices);
}

// Group by status and category
$groupedByCategory = [];
foreach ($filteredInvoices as $inv) {
    $cat = $inv['category'] ?? 'OTHER';
    $total = (float)($inv['total'] ?? 0);
    $balance = (float)($inv['balance_due'] ?? 0);
    $daysOverdue = (int)($inv['days_overdue'] ?? 0);
    $status = strtolower($inv['status'] ?? '');
    
    if ($status === 'paid' || $balance <= 0) {
        $statusKey = 'paid';
    } elseif ($daysOverdue > 0) {
        $statusKey = 'overdue';
    } else {
        $statusKey = 'unpaid';
    }
    
    // Filter by status if selected
    if ($selectedStatus && $selectedStatus !== $statusKey) {
        continue;
    }
    
    if (!isset($groupedByCategory[$cat])) {
        $groupedByCategory[$cat] = [
            'overdue' => [],
            'unpaid' => [],
            'paid' => []
        ];
    }
    $groupedByCategory[$cat][$statusKey][] = $inv;
}

// Get clients for filter dropdown
$clientQuery = "SELECT DISTINCT c.id, c.name FROM clients c 
                JOIN invoices i ON c.id = i.client_id 
                WHERE (i.status != 'void' OR i.status IS NULL)";
if (!$canManage) {
    $clientQuery .= " AND (c.id IN (
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

<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-file-invoice-dollar text-indigo-600 mr-2"></i>Invoices</h1>
        <p class="text-gray-500 text-sm">
            <?= formatFY($selectedFY) ?> • Synced from Zoho Books
        </p>
    </div>
    <div class="flex gap-2">
        <a href="estimates.php" class="btn btn-secondary"><i class="fas fa-file-alt mr-2"></i>Estimates</a>
        <a href="payments.php" class="btn btn-secondary"><i class="fas fa-money-check-alt mr-2"></i>Payments</a>
        <?php if ($canManage): ?>
        <a href="zoho_sync.php" class="btn btn-primary"><i class="fas fa-sync mr-2"></i>Sync</a>
        <?php endif; ?>
    </div>
</div>

<!-- Category-wise Summary Cards -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gradient-to-r from-indigo-50 to-purple-50">
        <h3 class="font-semibold text-indigo-800"><i class="fas fa-chart-pie mr-2"></i>Category-wise Summary - <?= formatFY($selectedFY) ?></h3>
    </div>
    <div class="p-4">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th class="px-3 py-2 text-left font-semibold text-gray-700">Category</th>
                        <th class="px-3 py-2 text-center font-semibold text-red-600" colspan="2">Overdue</th>
                        <th class="px-3 py-2 text-center font-semibold text-amber-600" colspan="2">Unpaid</th>
                        <th class="px-3 py-2 text-center font-semibold text-green-600" colspan="2">Paid</th>
                        <th class="px-3 py-2 text-center font-semibold text-gray-700" colspan="2">Total</th>
                    </tr>
                    <tr class="border-b text-xs text-gray-500">
                        <th class="px-3 py-1"></th>
                        <th class="px-3 py-1 text-center">Count</th>
                        <th class="px-3 py-1 text-right">Amount</th>
                        <th class="px-3 py-1 text-center">Count</th>
                        <th class="px-3 py-1 text-right">Amount</th>
                        <th class="px-3 py-1 text-center">Count</th>
                        <th class="px-3 py-1 text-right">Amount</th>
                        <th class="px-3 py-1 text-center">Count</th>
                        <th class="px-3 py-1 text-right">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($categoryStats as $catKey => $cs): 
                        $catDef = $categories[$catKey] ?? ['short' => $catKey, 'name' => $catKey];
                        $catColors = getCategoryColors($catKey);
                        $isSelected = $selectedCategory === $catKey;
                    ?>
                    <tr class="hover:bg-gray-50 <?= $isSelected ? 'bg-indigo-50' : '' ?>">
                        <td class="px-3 py-2">
                            <a href="?fy=<?= $selectedFY ?>&category=<?= $catKey ?>&client_id=<?= $clientId ?>&search=<?= urlencode($search) ?>" 
                               class="flex items-center gap-2 hover:text-indigo-600">
                                <span class="px-2 py-0.5 text-xs rounded-full <?= $catColors['bg'] ?> <?= $catColors['text'] ?>">
                                    <?= $catDef['short'] ?>
                                </span>
                                <span class="text-gray-700"><?= $catDef['name'] ?></span>
                            </a>
                        </td>
                        <td class="px-3 py-2 text-center <?= $cs['overdue']['count'] > 0 ? 'text-red-600 font-medium' : 'text-gray-400' ?>">
                            <?= $cs['overdue']['count'] ?>
                        </td>
                        <td class="px-3 py-2 text-right <?= $cs['overdue']['balance'] > 0 ? 'text-red-600 font-medium' : 'text-gray-400' ?>">
                            ₹<?= number_format($cs['overdue']['balance']) ?>
                        </td>
                        <td class="px-3 py-2 text-center <?= $cs['unpaid']['count'] > 0 ? 'text-amber-600 font-medium' : 'text-gray-400' ?>">
                            <?= $cs['unpaid']['count'] ?>
                        </td>
                        <td class="px-3 py-2 text-right <?= $cs['unpaid']['balance'] > 0 ? 'text-amber-600 font-medium' : 'text-gray-400' ?>">
                            ₹<?= number_format($cs['unpaid']['balance']) ?>
                        </td>
                        <td class="px-3 py-2 text-center <?= $cs['paid']['count'] > 0 ? 'text-green-600 font-medium' : 'text-gray-400' ?>">
                            <?= $cs['paid']['count'] ?>
                        </td>
                        <td class="px-3 py-2 text-right <?= $cs['paid']['total'] > 0 ? 'text-green-600 font-medium' : 'text-gray-400' ?>">
                            ₹<?= number_format($cs['paid']['total']) ?>
                        </td>
                        <td class="px-3 py-2 text-center font-medium"><?= $cs['all']['count'] ?></td>
                        <td class="px-3 py-2 text-right font-medium">₹<?= number_format($cs['all']['total']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-gray-100 font-semibold">
                    <tr>
                        <td class="px-3 py-2">
                            <a href="?fy=<?= $selectedFY ?>&category=ALL&client_id=<?= $clientId ?>&search=<?= urlencode($search) ?>" 
                               class="text-indigo-600 hover:underline">Grand Total</a>
                        </td>
                        <td class="px-3 py-2 text-center text-red-600"><?= $grandTotals['overdue']['count'] ?></td>
                        <td class="px-3 py-2 text-right text-red-600">₹<?= number_format($grandTotals['overdue']['balance']) ?></td>
                        <td class="px-3 py-2 text-center text-amber-600"><?= $grandTotals['unpaid']['count'] ?></td>
                        <td class="px-3 py-2 text-right text-amber-600">₹<?= number_format($grandTotals['unpaid']['balance']) ?></td>
                        <td class="px-3 py-2 text-center text-green-600"><?= $grandTotals['paid']['count'] ?></td>
                        <td class="px-3 py-2 text-right text-green-600">₹<?= number_format($grandTotals['paid']['total']) ?></td>
                        <td class="px-3 py-2 text-center"><?= $grandTotals['all']['count'] ?></td>
                        <td class="px-3 py-2 text-right">₹<?= number_format($grandTotals['all']['total']) ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Filters -->
<div class="card mb-6">
    <form method="GET" class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
            <!-- FY Selector -->
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Financial Year</label>
                <select name="fy" class="form-select w-full" onchange="this.form.submit()">
                    <?php foreach ($availableFYs as $fy): ?>
                    <option value="<?= $fy ?>" <?= $selectedFY === $fy ? 'selected' : '' ?>>
                        <?= formatFY($fy) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Category Filter -->
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Category</label>
                <select name="category" class="form-select w-full" onchange="this.form.submit()">
                    <option value="ALL">All Categories</option>
                    <?php foreach ($categories as $key => $cat): ?>
                    <option value="<?= $key ?>" <?= $selectedCategory === $key ? 'selected' : '' ?>>
                        <?= $cat['short'] ?> - <?= $cat['name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Status Filter -->
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Status</label>
                <select name="status" class="form-select w-full" onchange="this.form.submit()">
                    <option value="">All Status</option>
                    <option value="overdue" <?= $selectedStatus === 'overdue' ? 'selected' : '' ?>>🔴 Overdue</option>
                    <option value="unpaid" <?= $selectedStatus === 'unpaid' ? 'selected' : '' ?>>🟡 Unpaid</option>
                    <option value="paid" <?= $selectedStatus === 'paid' ? 'selected' : '' ?>>🟢 Paid</option>
                </select>
            </div>
            
            <!-- Client Filter -->
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Client</label>
                <select name="client_id" class="form-select w-full" onchange="this.form.submit()">
                    <option value="">All Clients</option>
                    <?php foreach ($clients as $client): ?>
                    <option value="<?= $client['id'] ?>" <?= $clientId == $client['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($client['name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Search -->
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Search</label>
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" 
                       class="form-input w-full" placeholder="Invoice # or Client...">
            </div>
            
            <!-- Actions -->
            <div class="flex items-end gap-2">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-search mr-1"></i>Search</button>
                <a href="invoices.php?fy=<?= $selectedFY ?>" class="btn btn-secondary"><i class="fas fa-times"></i></a>
            </div>
        </div>
    </form>
</div>

<!-- Active Filter Badge -->
<?php if ($selectedCategory && $selectedCategory !== 'ALL'): 
    $catDef = $categories[$selectedCategory] ?? ['short' => $selectedCategory, 'name' => $selectedCategory];
    $catColors = getCategoryColors($selectedCategory);
?>
<div class="mb-4 flex items-center gap-2">
    <span class="text-sm text-gray-500">Filtered by:</span>
    <span class="px-3 py-1 rounded-full <?= $catColors['bg'] ?> <?= $catColors['text'] ?> text-sm font-medium">
        <?= $catDef['short'] ?> - <?= $catDef['name'] ?>
    </span>
    <a href="?fy=<?= $selectedFY ?>&category=ALL&client_id=<?= $clientId ?>&search=<?= urlencode($search) ?>" 
       class="text-gray-400 hover:text-red-500"><i class="fas fa-times-circle"></i></a>
</div>
<?php endif; ?>

<!-- Invoice Listings by Category -->
<?php foreach ($groupedByCategory as $catKey => $catInvoices): 
    $catDef = $categories[$catKey] ?? ['short' => $catKey, 'name' => $catKey];
    $catColors = getCategoryColors($catKey);
    $catOverdueCount = count($catInvoices['overdue']);
    $catUnpaidCount = count($catInvoices['unpaid']);
    $catPaidCount = count($catInvoices['paid']);
    $catTotalCount = $catOverdueCount + $catUnpaidCount + $catPaidCount;
    
    if ($catTotalCount === 0) continue;
?>

<!-- Category Section -->
<div class="card mb-6">
    <div class="p-4 border-b <?= $catColors['bg'] ?> flex items-center justify-between cursor-pointer" onclick="toggleCategory('cat-<?= $catKey ?>')">
        <h3 class="font-semibold <?= $catColors['text'] ?>">
            <span class="px-2 py-1 rounded <?= $catColors['bg'] ?> <?= $catColors['text'] ?>"><?= $catDef['short'] ?></span>
            <span class="ml-2"><?= $catDef['name'] ?></span>
            <span class="ml-2 px-2 py-0.5 bg-white/50 rounded-full text-sm"><?= $catTotalCount ?></span>
        </h3>
        <div class="flex items-center gap-4 text-sm">
            <?php if ($catOverdueCount > 0): ?>
            <span class="text-red-600"><i class="fas fa-exclamation-circle mr-1"></i><?= $catOverdueCount ?> Overdue</span>
            <?php endif; ?>
            <?php if ($catUnpaidCount > 0): ?>
            <span class="text-amber-600"><i class="fas fa-clock mr-1"></i><?= $catUnpaidCount ?> Unpaid</span>
            <?php endif; ?>
            <?php if ($catPaidCount > 0): ?>
            <span class="text-green-600"><i class="fas fa-check-circle mr-1"></i><?= $catPaidCount ?> Paid</span>
            <?php endif; ?>
            <i class="fas fa-chevron-down <?= $catColors['text'] ?> opacity-50 transition" id="cat-<?= $catKey ?>-icon"></i>
        </div>
    </div>
    
    <div id="cat-<?= $catKey ?>-content">
        <!-- Overdue in this category -->
        <?php if (!empty($catInvoices['overdue'])): ?>
        <div class="border-b">
            <div class="px-4 py-2 bg-red-50 flex items-center justify-between">
                <span class="text-red-700 font-medium text-sm">
                    <i class="fas fa-exclamation-triangle mr-1"></i>Overdue (<?= count($catInvoices['overdue']) ?>)
                </span>
                <span class="text-red-600 font-bold text-sm">
                    ₹<?= number_format(array_sum(array_column($catInvoices['overdue'], 'balance_due'))) ?>
                </span>
            </div>
            <table class="w-full text-sm">
                <thead class="bg-red-50/30">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Invoice #</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Client</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Date</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Due Date</th>
                        <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600">Overdue</th>
                        <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600">Amount</th>
                        <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600">Balance</th>
                        <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600">PDF</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($catInvoices['overdue'] as $inv): ?>
                    <tr class="hover:bg-red-50/30">
                        <td class="px-4 py-2">
                            <a href="view_invoice.php?id=<?= $inv['id'] ?>" class="font-medium text-gray-900 hover:text-indigo-600">
                                <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                            </a>
                        </td>
                        <td class="px-4 py-2">
                            <?php if ($inv['client_id']): ?>
                            <a href="view_client.php?id=<?= $inv['client_id'] ?>&tab=billing" class="text-indigo-600 hover:underline">
                                <?= htmlspecialchars($inv['client_name'] ?: $inv['zoho_customer_name']) ?>
                            </a>
                            <?php else: ?>
                            <span class="text-gray-500"><?= htmlspecialchars($inv['zoho_customer_name'] ?: '-') ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 text-gray-600"><?= $inv['invoice_date'] ? date('d M Y', strtotime($inv['invoice_date'])) : '-' ?></td>
                        <td class="px-4 py-2 text-gray-600"><?= $inv['due_date'] ? date('d M Y', strtotime($inv['due_date'])) : '-' ?></td>
                        <td class="px-4 py-2 text-center">
                            <span class="px-2 py-0.5 bg-red-100 text-red-700 rounded-full text-xs font-medium">
                                <?= $inv['days_overdue'] ?> days
                            </span>
                        </td>
                        <td class="px-4 py-2 text-right">₹<?= number_format($inv['total'], 2) ?></td>
                        <td class="px-4 py-2 text-right text-red-600 font-bold">₹<?= number_format($inv['balance_due'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <div class="flex justify-center gap-1">
                                <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank"
                                   class="p-1 text-indigo-600 hover:bg-indigo-50 rounded" title="View"><i class="fas fa-eye"></i></a>
                                <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download"
                                   class="p-1 text-green-600 hover:bg-green-50 rounded" title="Download"><i class="fas fa-download"></i></a>
                            </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
        
        <!-- Unpaid in this category -->
        <?php if (!empty($catInvoices['unpaid'])): ?>
        <div class="border-b">
            <div class="px-4 py-2 bg-amber-50 flex items-center justify-between">
                <span class="text-amber-700 font-medium text-sm">
                    <i class="fas fa-clock mr-1"></i>Unpaid (<?= count($catInvoices['unpaid']) ?>)
                </span>
                <span class="text-amber-600 font-bold text-sm">
                    ₹<?= number_format(array_sum(array_column($catInvoices['unpaid'], 'balance_due'))) ?>
                </span>
            </div>
            <table class="w-full text-sm">
                <thead class="bg-amber-50/30">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Invoice #</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Client</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Date</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Due Date</th>
                        <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600">Amount</th>
                        <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600">Balance</th>
                        <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600">PDF</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($catInvoices['unpaid'] as $inv): ?>
                    <tr class="hover:bg-amber-50/30">
                        <td class="px-4 py-2">
                            <a href="view_invoice.php?id=<?= $inv['id'] ?>" class="font-medium text-gray-900 hover:text-indigo-600">
                                <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                            </a>
                        </td>
                        <td class="px-4 py-2">
                            <?php if ($inv['client_id']): ?>
                            <a href="view_client.php?id=<?= $inv['client_id'] ?>&tab=billing" class="text-indigo-600 hover:underline">
                                <?= htmlspecialchars($inv['client_name'] ?: $inv['zoho_customer_name']) ?>
                            </a>
                            <?php else: ?>
                            <span class="text-gray-500"><?= htmlspecialchars($inv['zoho_customer_name'] ?: '-') ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 text-gray-600"><?= $inv['invoice_date'] ? date('d M Y', strtotime($inv['invoice_date'])) : '-' ?></td>
                        <td class="px-4 py-2 text-gray-600"><?= $inv['due_date'] ? date('d M Y', strtotime($inv['due_date'])) : '-' ?></td>
                        <td class="px-4 py-2 text-right">₹<?= number_format($inv['total'], 2) ?></td>
                        <td class="px-4 py-2 text-right text-amber-600 font-bold">₹<?= number_format($inv['balance_due'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <div class="flex justify-center gap-1">
                                <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank"
                                   class="p-1 text-indigo-600 hover:bg-indigo-50 rounded" title="View"><i class="fas fa-eye"></i></a>
                                <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download"
                                   class="p-1 text-green-600 hover:bg-green-50 rounded" title="Download"><i class="fas fa-download"></i></a>
                            </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
        
        <!-- Paid in this category -->
        <?php if (!empty($catInvoices['paid'])): ?>
        <div>
            <div class="px-4 py-2 bg-green-50 flex items-center justify-between cursor-pointer" onclick="toggleSubSection('cat-<?= $catKey ?>-paid')">
                <span class="text-green-700 font-medium text-sm">
                    <i class="fas fa-check-circle mr-1"></i>Paid (<?= count($catInvoices['paid']) ?>)
                </span>
                <div class="flex items-center gap-2">
                    <span class="text-green-600 font-bold text-sm">
                        ₹<?= number_format(array_sum(array_column($catInvoices['paid'], 'total'))) ?>
                    </span>
                    <i class="fas fa-chevron-down text-green-400 text-xs transition" id="cat-<?= $catKey ?>-paid-icon"></i>
                </div>
            </div>
            <div id="cat-<?= $catKey ?>-paid-content" class="hidden">
                <table class="w-full text-sm">
                    <thead class="bg-green-50/30">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Invoice #</th>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Client</th>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Date</th>
                            <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600">Amount</th>
                            <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600">PDF</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($catInvoices['paid'] as $inv): ?>
                        <tr class="hover:bg-green-50/30">
                            <td class="px-4 py-2">
                                <a href="view_invoice.php?id=<?= $inv['id'] ?>" class="font-medium text-gray-900 hover:text-indigo-600">
                                    <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                                </a>
                            </td>
                            <td class="px-4 py-2">
                                <?php if ($inv['client_id']): ?>
                                <a href="view_client.php?id=<?= $inv['client_id'] ?>&tab=billing" class="text-indigo-600 hover:underline">
                                    <?= htmlspecialchars($inv['client_name'] ?: $inv['zoho_customer_name']) ?>
                                </a>
                                <?php else: ?>
                                <span class="text-gray-500"><?= htmlspecialchars($inv['zoho_customer_name'] ?: '-') ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-2 text-gray-600"><?= $inv['invoice_date'] ? date('d M Y', strtotime($inv['invoice_date'])) : '-' ?></td>
                            <td class="px-4 py-2 text-right text-green-600 font-medium">₹<?= number_format($inv['total'], 2) ?></td>
                            <td class="px-4 py-2 text-center">
                                <?php if ($inv['zoho_invoice_id']): ?>
                                <div class="flex justify-center gap-1">
                                    <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank"
                                       class="p-1 text-indigo-600 hover:bg-indigo-50 rounded" title="View"><i class="fas fa-eye"></i></a>
                                    <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download"
                                       class="p-1 text-green-600 hover:bg-green-50 rounded" title="Download"><i class="fas fa-download"></i></a>
                                </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>

<!-- Empty State -->
<?php if (empty($groupedByCategory)): ?>
<div class="card p-12 text-center">
    <i class="fas fa-file-invoice text-5xl text-gray-300 mb-4"></i>
    <h3 class="text-lg font-semibold text-gray-600 mb-2">No invoices found</h3>
    <p class="text-gray-500">Try changing the filters or selecting a different financial year.</p>
</div>
<?php endif; ?>

<script>
function toggleCategory(id) {
    const content = document.getElementById(id + '-content');
    const icon = document.getElementById(id + '-icon');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.remove('rotate-180');
    } else {
        content.classList.add('hidden');
        icon.classList.add('rotate-180');
    }
}

function toggleSubSection(id) {
    const content = document.getElementById(id + '-content');
    const icon = document.getElementById(id + '-icon');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
