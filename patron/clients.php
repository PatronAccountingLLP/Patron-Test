<?php
/**
 * PATRON - Clients List (Enhanced with Tabs, Grouping & Last Activity)
 * - Tabs: Active / Inactive / All (defaults to Active)
 * - Grouped by entity type (collapsible)
 * - Last activity date column
 * - Summary stats at top
 * - Role-based access control
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Clients';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();

// Check if user can toggle status (Admin or Manager)
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);
$canToggleStatus = $isAdmin || $isManager;
$canSeeAll = canSeeAllClients();

// Check if Zoho is connected
$zohoConnected = false;
try {
    $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

// Handle AJAX toggle status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'error' => 'Invalid token']);
        exit;
    }
    
    if ($_POST['action'] === 'toggle_status' && $canToggleStatus) {
        $clientId = (int)$_POST['client_id'];
        $newStatus = strtoupper($_POST['new_status']) === 'ACTIVE' ? 'ACTIVE' : 'INACTIVE';
        
        dbExecute("UPDATE clients SET status = ? WHERE id = ?", [$newStatus, $clientId]);
        
        // Optionally sync status to Zoho
        if ($zohoConnected) {
            $client = dbFetchOne("SELECT zoho_contact_id FROM clients WHERE id = ?", [$clientId]);
            if (!empty($client['zoho_contact_id'])) {
                try {
                    require_once 'includes/zoho_sync.php';
                    $syncService = new ZohoSyncService();
                    $syncService->syncClientStatusToZoho($clientId, $newStatus === 'ACTIVE');
                } catch (Exception $e) {}
            }
        }
        
        echo json_encode(['success' => true, 'status' => $newStatus]);
        exit;
    }
    
    if ($_POST['action'] === 'push_to_zoho' && $canToggleStatus && $zohoConnected) {
        $clientId = (int)$_POST['client_id'];
        
        require_once 'includes/zoho_sync.php';
        $syncService = new ZohoSyncService();
        
        if (!$syncService->canSync()) {
            echo json_encode(['success' => false, 'error' => 'Zoho not connected']);
            exit;
        }
        
        $result = $syncService->pushClientToZoho($clientId);
        echo json_encode($result);
        exit;
    }
    
    echo json_encode(['success' => false, 'error' => 'Invalid action']);
    exit;
}

// Get filters
$tab = sanitize($_GET['tab'] ?? 'active'); // Default to active
$entityType = sanitize($_GET['entity_type'] ?? '');
$search = sanitize($_GET['search'] ?? '');
$zohoFilter = sanitize($_GET['zoho'] ?? '');

// Validate tab
if (!in_array($tab, ['active', 'inactive', 'all'])) $tab = 'active';

// Build WHERE clause
$where = ["c.deleted_at IS NULL"];
$params = [];

$accessFilter = getClientAccessFilter('c');

// Tab filter
if ($tab === 'active') {
    $where[] = "(UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE')";
} elseif ($tab === 'inactive') {
    $where[] = "UPPER(c.status) = 'INACTIVE'";
}

if ($entityType) {
    $where[] = "c.entity_type = ?";
    $params[] = $entityType;
}
if ($search) {
    $where[] = "(c.name LIKE ? OR c.pan LIKE ? OR c.gstin LIKE ? OR c.email LIKE ? OR c.mobile LIKE ?)";
    $searchTerm = "%$search%";
    $params = array_merge($params, [$searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm]);
}
if ($zohoFilter === 'synced') {
    $where[] = "c.zoho_contact_id IS NOT NULL";
} elseif ($zohoFilter === 'not_synced') {
    $where[] = "c.zoho_contact_id IS NULL";
}

$whereClause = implode(' AND ', $where) . $accessFilter;

// Get clients with last activity
$clientsList = dbFetchAll("
    SELECT c.id, c.name, c.entity_type, c.pan, c.gstin, c.email, c.mobile, c.status, c.created_at,
           c.zoho_contact_id, c.zoho_synced_at,
           (SELECT COUNT(*) FROM service_requests WHERE client_id = c.id AND deleted_at IS NULL) as total_requests,
           (SELECT COUNT(*) FROM service_requests WHERE client_id = c.id AND status NOT IN ('COMPLETED', 'CANCELLED', 'REJECTED') AND deleted_at IS NULL) as active_requests,
           (SELECT COUNT(*) FROM client_certificates WHERE client_id = c.id AND deleted_at IS NULL) as certificates_count,
           (SELECT MAX(invoice_date) FROM invoices WHERE client_id = c.id) as last_invoice_date,
           (SELECT MAX(payment_date) FROM payments WHERE client_id = c.id) as last_payment_date,
           GREATEST(
               COALESCE((SELECT MAX(invoice_date) FROM invoices WHERE client_id = c.id), '1900-01-01'),
               COALESCE((SELECT MAX(payment_date) FROM payments WHERE client_id = c.id), '1900-01-01')
           ) as last_activity_date
    FROM clients c
    WHERE $whereClause
    ORDER BY c.entity_type ASC, c.name ASC
", $params);

// Get overall stats (for all clients regardless of current tab)
$statsWhere = "deleted_at IS NULL" . $accessFilter;
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(UPPER(COALESCE(status,'ACTIVE')) = 'ACTIVE') as active,
        SUM(UPPER(status) = 'INACTIVE') as inactive
    FROM clients c WHERE $statsWhere
");

// Get entity-wise stats for current tab
$entityStats = dbFetchAll("
    SELECT entity_type, COUNT(*) as count
    FROM clients c
    WHERE $whereClause
    GROUP BY entity_type
    ORDER BY count DESC
", $params);
$entityCounts = array_column($entityStats, 'count', 'entity_type');

// Group clients by entity type
$groupedClients = [];
foreach ($clientsList as $client) {
    $type = $client['entity_type'] ?? 'OTHER';
    if (!isset($groupedClients[$type])) {
        $groupedClients[$type] = [];
    }
    $groupedClients[$type][] = $client;
}

// Sort entity groups by count (descending)
uksort($groupedClients, function($a, $b) use ($entityCounts) {
    return ($entityCounts[$b] ?? 0) - ($entityCounts[$a] ?? 0);
});

$entityTypes = [
    'PROPRIETORSHIP' => ['label' => 'Proprietorship', 'icon' => 'fa-user-tie', 'color' => 'amber'],
    'PARTNERSHIP' => ['label' => 'Partnership', 'icon' => 'fa-users', 'color' => 'purple'],
    'LLP' => ['label' => 'LLP', 'icon' => 'fa-handshake', 'color' => 'indigo'],
    'PVT_LTD' => ['label' => 'Private Limited', 'icon' => 'fa-building', 'color' => 'blue'],
    'PUBLIC_LTD' => ['label' => 'Public Limited', 'icon' => 'fa-landmark', 'color' => 'blue'],
    'OPC' => ['label' => 'One Person Company', 'icon' => 'fa-user-shield', 'color' => 'teal'],
    'HUF' => ['label' => 'HUF', 'icon' => 'fa-home', 'color' => 'orange'],
    'TRUST' => ['label' => 'Trust', 'icon' => 'fa-hand-holding-heart', 'color' => 'pink'],
    'SOCIETY' => ['label' => 'Society', 'icon' => 'fa-people-group', 'color' => 'rose'],
    'SECTION_8' => ['label' => 'Section 8', 'icon' => 'fa-seedling', 'color' => 'cyan'],
    'AOP' => ['label' => 'AOP/BOI', 'icon' => 'fa-sitemap', 'color' => 'slate'],
    'OTHER' => ['label' => 'Other', 'icon' => 'fa-folder', 'color' => 'gray']
];

function getInitials($name) {
    $words = preg_split('/\s+/', trim($name));
    $initials = '';
    foreach (array_slice($words, 0, 2) as $word) {
        $initials .= strtoupper(mb_substr($word, 0, 1));
    }
    return $initials ?: '?';
}

function formatLastActivity($date) {
    if (!$date || $date === '1900-01-01') return '<span class="text-gray-400">No activity</span>';
    
    $timestamp = strtotime($date);
    $now = time();
    $diff = $now - $timestamp;
    $days = floor($diff / 86400);
    
    if ($days === 0) return '<span class="text-green-600 font-medium">Today</span>';
    if ($days === 1) return '<span class="text-green-600">Yesterday</span>';
    if ($days <= 7) return '<span class="text-green-600">' . $days . ' days ago</span>';
    if ($days <= 30) return '<span class="text-blue-600">' . ceil($days / 7) . ' weeks ago</span>';
    if ($days <= 365) return '<span class="text-amber-600">' . ceil($days / 30) . ' months ago</span>';
    
    $years = floor($days / 365);
    return '<span class="text-red-500">' . $years . '+ year' . ($years > 1 ? 's' : '') . ' ago</span>';
}

// Access label for info text
if ($canSeeAll) {
    $accessLabel = 'Showing all clients';
} else {
    $accessLabel = 'Showing clients assigned to you';
}

require_once 'includes/header.php';
?>

<!-- Summary Stats Bar -->
<div class="bg-gradient-to-r from-indigo-600 to-blue-600 rounded-xl p-4 mb-6 text-white">
    <div class="flex items-center justify-between flex-wrap gap-4">
        <div class="flex items-center gap-6">
            <div class="text-center">
                <p class="text-3xl font-bold"><?= number_format($stats['total'] ?? 0) ?></p>
                <p class="text-xs text-indigo-200 uppercase">Total Clients</p>
            </div>
            <div class="h-10 w-px bg-white/20"></div>
            <div class="text-center">
                <p class="text-3xl font-bold text-green-300"><?= number_format($stats['active'] ?? 0) ?></p>
                <p class="text-xs text-indigo-200 uppercase">Active</p>
            </div>
            <div class="h-10 w-px bg-white/20"></div>
            <div class="text-center">
                <p class="text-3xl font-bold text-gray-300"><?= number_format($stats['inactive'] ?? 0) ?></p>
                <p class="text-xs text-indigo-200 uppercase">Inactive</p>
            </div>
        </div>
        <div class="flex gap-2">
            <a href="add_client.php" class="px-4 py-2 bg-white text-indigo-600 rounded-lg font-medium hover:bg-indigo-50 transition">
                <i class="fas fa-plus mr-2"></i>Add Client
            </a>
        </div>
    </div>
</div>

<!-- Tabs & Filters -->
<div class="card mb-6">
    <div class="border-b">
        <div class="flex items-center gap-1 px-4">
            <a href="?tab=active<?= $search ? '&search=' . urlencode($search) : '' ?><?= $entityType ? '&entity_type=' . urlencode($entityType) : '' ?>" 
               class="px-4 py-3 border-b-2 font-medium text-sm transition <?= $tab === 'active' ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                <i class="fas fa-check-circle mr-1"></i>Active
                <span class="ml-1 px-2 py-0.5 rounded-full text-xs <?= $tab === 'active' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' ?>"><?= number_format($stats['active'] ?? 0) ?></span>
            </a>
            <a href="?tab=inactive<?= $search ? '&search=' . urlencode($search) : '' ?><?= $entityType ? '&entity_type=' . urlencode($entityType) : '' ?>" 
               class="px-4 py-3 border-b-2 font-medium text-sm transition <?= $tab === 'inactive' ? 'border-gray-500 text-gray-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                <i class="fas fa-pause-circle mr-1"></i>Inactive
                <span class="ml-1 px-2 py-0.5 rounded-full text-xs <?= $tab === 'inactive' ? 'bg-gray-200 text-gray-700' : 'bg-gray-100 text-gray-600' ?>"><?= number_format($stats['inactive'] ?? 0) ?></span>
            </a>
            <a href="?tab=all<?= $search ? '&search=' . urlencode($search) : '' ?><?= $entityType ? '&entity_type=' . urlencode($entityType) : '' ?>" 
               class="px-4 py-3 border-b-2 font-medium text-sm transition <?= $tab === 'all' ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700' ?>">
                <i class="fas fa-list mr-1"></i>All
                <span class="ml-1 px-2 py-0.5 rounded-full text-xs <?= $tab === 'all' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-600' ?>"><?= number_format($stats['total'] ?? 0) ?></span>
            </a>
        </div>
    </div>
    
    <!-- Filters Row -->
    <form method="GET" class="p-4 flex flex-wrap gap-3 items-center bg-gray-50">
        <input type="hidden" name="tab" value="<?= htmlspecialchars($tab) ?>">
        
        <div class="flex-1 min-w-[200px]">
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" 
                       placeholder="Search by name, PAN, GSTIN, email, mobile..." 
                       class="form-input pl-10 w-full">
            </div>
        </div>
        
        <select name="entity_type" class="form-input min-w-[160px]">
            <option value="">All Entity Types</option>
            <?php foreach ($entityTypes as $key => $type): if ($key === 'OTHER') continue; ?>
            <option value="<?= $key ?>" <?= $entityType === $key ? 'selected' : '' ?>><?= $type['label'] ?></option>
            <?php endforeach; ?>
        </select>
        
        <?php if ($zohoConnected): ?>
        <select name="zoho" class="form-input min-w-[120px]">
            <option value="">Zoho: All</option>
            <option value="synced" <?= $zohoFilter === 'synced' ? 'selected' : '' ?>>Synced</option>
            <option value="not_synced" <?= $zohoFilter === 'not_synced' ? 'selected' : '' ?>>Not Synced</option>
        </select>
        <?php endif; ?>
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-filter mr-1"></i>Apply
        </button>
        
        <?php if ($search || $entityType || $zohoFilter): ?>
        <a href="?tab=<?= $tab ?>" class="btn btn-secondary">
            <i class="fas fa-times mr-1"></i>Clear
        </a>
        <?php endif; ?>
    </form>
</div>

<!-- Entity Type Quick Filter Pills -->
<?php if (count($entityCounts) > 1): ?>
<div class="flex flex-wrap gap-2 mb-4">
    <button onclick="expandAll()" class="inline-flex items-center gap-1 px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-sm hover:bg-gray-50 transition">
        <i class="fas fa-expand-alt"></i> Expand All
    </button>
    <button onclick="collapseAll()" class="inline-flex items-center gap-1 px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-sm hover:bg-gray-50 transition">
        <i class="fas fa-compress-alt"></i> Collapse All
    </button>
    <span class="text-gray-300">|</span>
    <?php foreach ($groupedClients as $type => $typeClients): 
        $typeInfo = $entityTypes[$type] ?? $entityTypes['OTHER'];
        $count = count($typeClients);
    ?>
    <a href="#group-<?= $type ?>" 
       class="inline-flex items-center gap-2 px-3 py-1.5 bg-<?= $typeInfo['color'] ?>-100 text-<?= $typeInfo['color'] ?>-700 rounded-full text-sm hover:bg-<?= $typeInfo['color'] ?>-200 transition">
        <i class="fas <?= $typeInfo['icon'] ?>"></i>
        <?= $typeInfo['label'] ?>
        <span class="px-1.5 py-0.5 bg-<?= $typeInfo['color'] ?>-200 rounded-full text-xs font-medium"><?= $count ?></span>
    </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<!-- Grouped Client List -->
<?php if (empty($groupedClients)): ?>
<div class="card p-12 text-center">
    <i class="fas fa-users text-5xl text-gray-300 mb-4"></i>
    <p class="text-gray-500 mb-4">
        <?php if ($search || $entityType): ?>
        No clients found matching your filters.
        <?php elseif ($tab === 'active'): ?>
        No active clients found.
        <?php elseif ($tab === 'inactive'): ?>
        No inactive clients found.
        <?php else: ?>
        No clients found.
        <?php endif; ?>
    </p>
    <?php if ($search || $entityType): ?>
    <a href="?tab=<?= $tab ?>" class="btn btn-secondary">Clear Filters</a>
    <?php endif; ?>
</div>
<?php else: ?>

<?php foreach ($groupedClients as $type => $typeClients): 
    $typeInfo = $entityTypes[$type] ?? $entityTypes['OTHER'];
    $count = count($typeClients);
    $isExpanded = $count <= 50 || $entityType === $type; // Auto-expand if small or filtered
?>
<div id="group-<?= $type ?>" class="card mb-4 overflow-hidden">
    <!-- Group Header (Collapsible) -->
    <div class="group-header bg-<?= $typeInfo['color'] ?>-50 border-b border-<?= $typeInfo['color'] ?>-100 px-4 py-3 cursor-pointer hover:bg-<?= $typeInfo['color'] ?>-100 transition"
         onclick="toggleGroup('<?= $type ?>')">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-<?= $typeInfo['color'] ?>-100 text-<?= $typeInfo['color'] ?>-600 rounded-lg flex items-center justify-center">
                    <i class="fas <?= $typeInfo['icon'] ?> text-lg"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-<?= $typeInfo['color'] ?>-800"><?= $typeInfo['label'] ?></h3>
                    <p class="text-xs text-<?= $typeInfo['color'] ?>-600"><?= $count ?> client<?= $count > 1 ? 's' : '' ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <i class="fas fa-chevron-down text-<?= $typeInfo['color'] ?>-400 transition-transform duration-200 group-icon <?= $isExpanded ? 'rotate-180' : '' ?>" id="icon-<?= $type ?>"></i>
            </div>
        </div>
    </div>
    
    <!-- Group Content (Table) -->
    <div class="group-content <?= $isExpanded ? '' : 'hidden' ?>" id="content-<?= $type ?>">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">PAN / GSTIN</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Requests</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Last Activity</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($typeClients as $c): 
                    $clientStatus = strtoupper($c['status'] ?? 'ACTIVE');
                    $isActive = in_array($clientStatus, ['ACTIVE', '', null]);
                    $color = $typeInfo['color'];
                ?>
                <tr class="hover:bg-gray-50 <?= !$isActive ? 'bg-gray-50/50' : '' ?>">
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $c['id'] ?>" class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-<?= $color ?>-100 text-<?= $color ?>-600 rounded-lg flex items-center justify-center font-semibold text-xs">
                                <?= getInitials($c['name']) ?>
                            </div>
                            <div class="min-w-0">
                                <p class="font-medium text-gray-900 hover:text-blue-600 truncate max-w-[200px]" title="<?= htmlspecialchars($c['name']) ?>">
                                    <?= htmlspecialchars($c['name']) ?>
                                </p>
                                <?php if ($c['email']): ?>
                                <p class="text-xs text-gray-400 truncate max-w-[200px]"><?= htmlspecialchars($c['email']) ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <?php if ($c['pan']): ?><p class="font-mono text-xs"><?= $c['pan'] ?></p><?php endif; ?>
                        <?php if ($c['gstin']): ?><p class="font-mono text-xs text-gray-400"><?= $c['gstin'] ?></p><?php endif; ?>
                        <?php if (!$c['pan'] && !$c['gstin']): ?><span class="text-gray-300">-</span><?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($c['active_requests'] > 0): ?>
                        <span class="px-2 py-0.5 bg-blue-100 text-blue-700 rounded-full text-xs font-medium"><?= $c['active_requests'] ?> active</span>
                        <?php elseif ($c['total_requests'] > 0): ?>
                        <span class="text-gray-400 text-xs"><?= $c['total_requests'] ?> total</span>
                        <?php else: ?>
                        <span class="text-gray-300">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center text-xs">
                        <?= formatLastActivity($c['last_activity_date']) ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($canToggleStatus): ?>
                        <label class="relative inline-flex items-center cursor-pointer" title="Toggle status">
                            <input type="checkbox" class="sr-only peer status-toggle" data-client-id="<?= $c['id'] ?>" <?= $isActive ? 'checked' : '' ?>>
                            <div class="w-9 h-5 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                        <?php else: ?>
                        <span class="inline-flex items-center gap-1 text-xs <?= $isActive ? 'text-green-600' : 'text-gray-400' ?>">
                            <span class="w-2 h-2 rounded-full <?= $isActive ? 'bg-green-500' : 'bg-gray-300' ?>"></span>
                            <?= $isActive ? 'Active' : 'Inactive' ?>
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="view_client.php?id=<?= $c['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="View"><i class="fas fa-eye"></i></a>
                            <a href="edit_client.php?id=<?= $c['id'] ?>" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="add_request.php?client_id=<?= $c['id'] ?>" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="New Request"><i class="fas fa-plus"></i></a>
                            <?php if ($zohoConnected && $canToggleStatus): ?>
                                <?php if ($c['zoho_contact_id']): ?>
                                <span class="p-1.5 text-blue-400" title="Synced to Zoho"><i class="fas fa-cloud"></i></span>
                                <?php else: ?>
                                <button onclick="pushToZoho(<?= $c['id'] ?>)" class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded" title="Push to Zoho"><i class="fas fa-cloud-upload-alt"></i></button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endforeach; ?>

<?php endif; ?>

<p class="text-xs text-gray-400 mt-4 text-right">
    Showing <?= count($clientsList) ?> client(s) in <?= count($groupedClients) ?> group(s) • <?= htmlspecialchars($accessLabel) ?>
</p>

<input type="hidden" id="csrf_token" value="<?= generateCsrfToken() ?>">

<script>
// Toggle group expand/collapse
function toggleGroup(type) {
    const content = document.getElementById('content-' + type);
    const icon = document.getElementById('icon-' + type);
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

// Expand all / Collapse all
function expandAll() {
    document.querySelectorAll('.group-content').forEach(el => el.classList.remove('hidden'));
    document.querySelectorAll('.group-icon').forEach(el => el.classList.add('rotate-180'));
}

function collapseAll() {
    document.querySelectorAll('.group-content').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.group-icon').forEach(el => el.classList.remove('rotate-180'));
}

// Status toggle
document.querySelectorAll('.status-toggle').forEach(toggle => {
    toggle.addEventListener('change', async function() {
        const clientId = this.dataset.clientId;
        const newStatus = this.checked ? 'ACTIVE' : 'INACTIVE';
        const row = this.closest('tr');
        
        try {
            const response = await fetch('clients.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=toggle_status&client_id=${clientId}&new_status=${newStatus}&csrf_token=${document.getElementById('csrf_token').value}`
            });
            const result = await response.json();
            if (result.success) {
                row.classList.toggle('bg-gray-50/50', newStatus === 'INACTIVE');
                // Show brief notification
                showToast(newStatus === 'ACTIVE' ? 'Client activated' : 'Client deactivated', 'success');
            } else {
                alert('Error: ' + (result.error || 'Unknown'));
                this.checked = !this.checked;
            }
        } catch (e) {
            alert('Error updating status');
            this.checked = !this.checked;
        }
    });
});

// Push to Zoho
async function pushToZoho(clientId) {
    if (!confirm('Push this client to Zoho Books?')) return;
    try {
        const response = await fetch('clients.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `action=push_to_zoho&client_id=${clientId}&csrf_token=${document.getElementById('csrf_token').value}`
        });
        const result = await response.json();
        if (result.success) {
            showToast('Synced to Zoho!', 'success');
            setTimeout(() => location.reload(), 1000);
        } else {
            alert('Error: ' + (result.error || 'Unknown'));
        }
    } catch (e) {
        alert('Error syncing');
    }
}

// Simple toast notification
function showToast(message, type = 'info') {
    const colors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        info: 'bg-blue-500'
    };
    
    const toast = document.createElement('div');
    toast.className = `fixed bottom-4 right-4 px-4 py-2 ${colors[type]} text-white rounded-lg shadow-lg z-50 animate-fade-in`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s';
        setTimeout(() => toast.remove(), 300);
    }, 2000);
}

// Smooth scroll to group when clicking pill
document.querySelectorAll('a[href^="#group-"]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const target = document.getElementById(targetId);
        const content = document.getElementById('content-' + targetId.replace('group-', ''));
        
        // Expand the group if collapsed
        if (content.classList.contains('hidden')) {
            toggleGroup(targetId.replace('group-', ''));
        }
        
        // Scroll to group
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>

<style>
.rotate-180 { transform: rotate(180deg); }
@keyframes fade-in { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
.animate-fade-in { animation: fade-in 0.3s ease-out; }
</style>

<?php require_once 'includes/footer.php'; ?>
