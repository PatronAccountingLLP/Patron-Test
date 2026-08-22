<?php
/**
 * PATRON - Billing Requests List
 * Shows user's billing requests with status filters
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Billing Requests';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);
$canManage = $isAdmin || $isManager;

// Get filter parameters
$filterStatus = sanitize($_GET['status'] ?? '');
$filterType = sanitize($_GET['type'] ?? '');
$filterClient = (int)($_GET['client_id'] ?? 0);
$filterCategory = (int)($_GET['category_id'] ?? 0);
$filterDateFrom = sanitize($_GET['date_from'] ?? '');
$filterDateTo = sanitize($_GET['date_to'] ?? '');
$filterView = sanitize($_GET['view'] ?? 'my');

// Build query
$where = ["1=1"];
$params = [];

// Access control
if (!$isAdmin || $filterView === 'my') {
    $where[] = "br.requested_by = ?";
    $params[] = $currentUser['id'];
}

if ($filterStatus) {
    $where[] = "br.status = ?";
    $params[] = $filterStatus;
}
if ($filterType) {
    $where[] = "br.type = ?";
    $params[] = $filterType;
}
if ($filterClient) {
    $where[] = "br.client_id = ?";
    $params[] = $filterClient;
}
if ($filterCategory) {
    $where[] = "br.category_id = ?";
    $params[] = $filterCategory;
}
if ($filterDateFrom) {
    $where[] = "DATE(br.created_at) >= ?";
    $params[] = $filterDateFrom;
}
if ($filterDateTo) {
    $where[] = "DATE(br.created_at) <= ?";
    $params[] = $filterDateTo;
}

$whereClause = implode(' AND ', $where);

$sql = "SELECT br.*, 
               c.name as client_name, c.zoho_contact_id,
               bc.code as category_code, bc.name as category_name,
               u.display_name as requester_name,
               ap.display_name as approver_name
        FROM billing_requests br
        LEFT JOIN clients c ON br.client_id = c.id
        LEFT JOIN billing_categories bc ON br.category_id = bc.id
        LEFT JOIN users u ON br.requested_by = u.id
        LEFT JOIN users ap ON br.approver_id = ap.id
        WHERE $whereClause
        ORDER BY br.created_at DESC";

$requests = dbFetchAll($sql, $params);

// Get categories for filter
$categories = dbFetchAll("SELECT id, code, name FROM billing_categories WHERE is_active = 1 ORDER BY sort_order, code");

// Get clients for filter
if ($isAdmin) {
    $clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name");
} else {
    $clients = dbFetchAll("SELECT DISTINCT c.id, c.name 
                           FROM clients c 
                           JOIN client_team ct ON c.id = ct.client_id 
                           WHERE c.deleted_at IS NULL 
                           AND (ct.executor_1_id = ? OR ct.executor_2_id = ? OR ct.reviewer_id = ? OR ct.manager_id = ?)
                           ORDER BY c.name", [$currentUser['id'], $currentUser['id'], $currentUser['id'], $currentUser['id']]);
}

// Count by status
$statusCounts = [];
$countWhere = (!$isAdmin || $filterView === 'my') ? "WHERE requested_by = ?" : "";
$countParams = (!$isAdmin || $filterView === 'my') ? [$currentUser['id']] : [];
$statusResults = dbFetchAll("SELECT status, COUNT(*) as count FROM billing_requests $countWhere GROUP BY status", $countParams);
foreach ($statusResults as $row) {
    $statusCounts[$row['status']] = $row['count'];
}

// Helper functions
function getBillingStatusBadge($status) {
    $badges = [
        'DRAFT' => 'bg-gray-100 text-gray-700',
        'PENDING' => 'bg-amber-100 text-amber-700',
        'APPROVED' => 'bg-blue-100 text-blue-700',
        'REJECTED' => 'bg-red-100 text-red-700',
        'CREATED' => 'bg-indigo-100 text-indigo-700',
        'SENT' => 'bg-green-100 text-green-700',
        'FAILED' => 'bg-red-100 text-red-700'
    ];
    $class = $badges[$status] ?? 'bg-gray-100 text-gray-700';
    $label = ucfirst(strtolower($status));
    return "<span class=\"px-2 py-1 text-xs font-medium rounded-full $class\">$label</span>";
}

function billingTimeAgo($datetime) {
    $now = new DateTime();
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    
    if ($diff->y > 0) return $diff->y . 'y ago';
    if ($diff->m > 0) return $diff->m . 'mo ago';
    if ($diff->d > 0) return $diff->d . 'd ago';
    if ($diff->h > 0) return $diff->h . 'h ago';
    if ($diff->i > 0) return $diff->i . 'm ago';
    return 'Just now';
}

require_once 'includes/header.php';
?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">Billing Requests</h2>
            <p class="text-sm text-gray-500 mt-1">
                <?= ($filterView === 'my' || !$isAdmin) ? 'My invoice and estimate requests' : 'All billing requests' ?>
            </p>
        </div>
        <div class="flex gap-3">
            <?php if ($canManage): ?>
            <a href="billing_approvals.php" class="btn btn-secondary text-sm">
                <i class="fas fa-check-double mr-2"></i>Approval Queue
            </a>
            <?php endif; ?>
            <a href="billing_request.php" class="btn btn-primary text-sm">
                <i class="fas fa-plus mr-2"></i>New Request
            </a>
        </div>
    </div>

    <!-- View Toggle (Admin only) -->
    <?php if ($isAdmin): ?>
    <div class="flex gap-2">
        <a href="?view=my<?= $filterStatus ? '&status='.$filterStatus : '' ?>" 
           class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'my' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>">
            <i class="fas fa-user mr-2"></i>My Requests
        </a>
        <a href="?view=all<?= $filterStatus ? '&status='.$filterStatus : '' ?>" 
           class="px-4 py-2 rounded-lg text-sm font-medium <?= $filterView === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' ?>">
            <i class="fas fa-users mr-2"></i>All Requests
        </a>
    </div>
    <?php endif; ?>

    <!-- Status Tabs -->
    <div class="border-b border-gray-200">
        <nav class="flex gap-4">
            <a href="?view=<?= $filterView ?>" class="px-1 py-3 text-sm font-medium border-b-2 <?= !$filterStatus ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                All <span class="ml-1 px-2 py-0.5 text-xs rounded-full bg-gray-100"><?= array_sum($statusCounts) ?></span>
            </a>
            <a href="?view=<?= $filterView ?>&status=DRAFT" class="px-1 py-3 text-sm font-medium border-b-2 <?= $filterStatus === 'DRAFT' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                Draft <span class="ml-1 px-2 py-0.5 text-xs rounded-full bg-gray-100"><?= $statusCounts['DRAFT'] ?? 0 ?></span>
            </a>
            <a href="?view=<?= $filterView ?>&status=PENDING" class="px-1 py-3 text-sm font-medium border-b-2 <?= $filterStatus === 'PENDING' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                Pending <span class="ml-1 px-2 py-0.5 text-xs rounded-full bg-amber-100 text-amber-700"><?= $statusCounts['PENDING'] ?? 0 ?></span>
            </a>
            <a href="?view=<?= $filterView ?>&status=SENT" class="px-1 py-3 text-sm font-medium border-b-2 <?= $filterStatus === 'SENT' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                Sent <span class="ml-1 px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-700"><?= $statusCounts['SENT'] ?? 0 ?></span>
            </a>
            <a href="?view=<?= $filterView ?>&status=REJECTED" class="px-1 py-3 text-sm font-medium border-b-2 <?= $filterStatus === 'REJECTED' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                Rejected <span class="ml-1 px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-700"><?= $statusCounts['REJECTED'] ?? 0 ?></span>
            </a>
        </nav>
    </div>

    <!-- Filters -->
    <div class="card p-4 bg-gray-50">
        <form method="GET" class="flex flex-wrap gap-4 items-end">
            <input type="hidden" name="view" value="<?= htmlspecialchars($filterView) ?>">
            <?php if ($filterStatus): ?>
            <input type="hidden" name="status" value="<?= htmlspecialchars($filterStatus) ?>">
            <?php endif; ?>
            
            <div class="w-32">
                <label class="form-label text-xs">Type</label>
                <select name="type" class="form-input text-sm py-1.5">
                    <option value="">All</option>
                    <option value="INVOICE" <?= $filterType === 'INVOICE' ? 'selected' : '' ?>>Invoice</option>
                    <option value="ESTIMATE" <?= $filterType === 'ESTIMATE' ? 'selected' : '' ?>>Estimate</option>
                </select>
            </div>
            
            <div class="w-48">
                <label class="form-label text-xs">Client</label>
                <select name="client_id" class="form-input text-sm py-1.5">
                    <option value="">All Clients</option>
                    <?php foreach ($clients as $client): ?>
                    <option value="<?= $client['id'] ?>" <?= $filterClient == $client['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($client['name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="w-32">
                <label class="form-label text-xs">Category</label>
                <select name="category_id" class="form-input text-sm py-1.5">
                    <option value="">All</option>
                    <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>" <?= $filterCategory == $cat['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cat['code']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="w-36">
                <label class="form-label text-xs">From</label>
                <input type="date" name="date_from" value="<?= htmlspecialchars($filterDateFrom) ?>" class="form-input text-sm py-1.5">
            </div>
            
            <div class="w-36">
                <label class="form-label text-xs">To</label>
                <input type="date" name="date_to" value="<?= htmlspecialchars($filterDateTo) ?>" class="form-input text-sm py-1.5">
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fas fa-filter mr-1"></i>Filter
            </button>
        </form>
    </div>

    <!-- Requests Table -->
    <div class="card overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Request #</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Zoho #</th>
                    <?php if ($filterView === 'all' && $isAdmin): ?>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Requester</th>
                    <?php endif; ?>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php if (empty($requests)): ?>
                <tr>
                    <td colspan="<?= ($filterView === 'all' && $isAdmin) ? '10' : '9' ?>" class="px-4 py-12 text-center text-gray-500">
                        <i class="fas fa-inbox text-4xl text-gray-300 mb-3"></i>
                        <p>No billing requests found</p>
                        <?php if (!$filterStatus && !$filterType && !$filterClient): ?>
                        <a href="billing_request.php" class="btn btn-primary btn-sm mt-3">Create Your First Request</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach ($requests as $req): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <a href="billing_request_view.php?id=<?= $req['id'] ?>" class="text-blue-600 hover:text-blue-800 font-medium">
                            <?= htmlspecialchars($req['request_number']) ?>
                        </a>
                    </td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-medium rounded-full <?= $req['type'] === 'INVOICE' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' ?>">
                            <?= $req['type'] ?>
                        </span>
                    </td>
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $req['client_id'] ?>" class="text-gray-900 hover:text-blue-600">
                            <?= htmlspecialchars($req['client_name']) ?>
                        </a>
                        <?php if (!$req['zoho_contact_id']): ?>
                        <i class="fas fa-exclamation-triangle text-amber-500 ml-1" title="Not synced to Zoho"></i>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-medium rounded bg-gray-100 text-gray-700">
                            <?= htmlspecialchars($req['category_code']) ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right font-mono text-sm">
                        ₹<?= number_format($req['total'], 2) ?>
                    </td>
                    <td class="px-4 py-3"><?= getBillingStatusBadge($req['status']) ?></td>
                    <td class="px-4 py-3">
                        <?php if ($req['zoho_number']): ?>
                        <span class="font-mono text-sm text-blue-600"><?= htmlspecialchars($req['zoho_number']) ?></span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <?php if ($filterView === 'all' && $isAdmin): ?>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        <?= htmlspecialchars($req['requester_name']) ?>
                    </td>
                    <?php endif; ?>
                    <td class="px-4 py-3 text-sm text-gray-500" title="<?= $req['created_at'] ?>">
                        <?= billingTimeAgo($req['created_at']) ?>
                    </td>
                    <td class="px-4 py-3 text-right">
                        <a href="billing_request_view.php?id=<?= $req['id'] ?>" class="text-gray-400 hover:text-blue-600 p-1">
                            <i class="fas fa-eye"></i>
                        </a>
                        <?php if ($req['status'] === 'DRAFT' || $req['status'] === 'REJECTED'): ?>
                        <a href="billing_request.php?id=<?= $req['id'] ?>" class="text-gray-400 hover:text-blue-600 p-1 ml-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        
        <?php if (count($requests) > 0): ?>
        <div class="px-4 py-3 bg-gray-50 border-t border-gray-200 text-sm text-gray-500">
            Showing <?= count($requests) ?> request(s)
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
