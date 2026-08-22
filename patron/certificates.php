<?php
/**
 * PATRON - Certificates Repository (Enhanced)
 * Table list format with frozen headers, View/Edit/Delete, Client linking
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Certificates';

// Handle Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'delete' && isset($_POST['cert_id'])) {
        $certId = (int)$_POST['cert_id'];
        dbExecute("UPDATE client_certificates SET deleted_at = NOW() WHERE id = ?", [$certId]);
        setFlash('success', 'Certificate deleted successfully.');
        header('Location: certificates.php'); exit;
    }
}

// Get filters
$category = sanitize($_GET['category'] ?? 'all');
$status = sanitize($_GET['status'] ?? '');
$search = sanitize($_GET['q'] ?? '');
$clientFilter = (int)($_GET['client'] ?? 0);

// Build query
$where = ["cc.deleted_at IS NULL"];
$params = [];

if ($category && $category !== 'all') {
    $where[] = "ct.category = ?";
    $params[] = $category;
}

if ($status === 'active') {
    $where[] = "(cc.expiry_date IS NULL OR cc.expiry_date > DATE_ADD(CURDATE(), INTERVAL 90 DAY))";
} elseif ($status === 'expiring') {
    $where[] = "cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY)";
} elseif ($status === 'expired') {
    $where[] = "cc.expiry_date < CURDATE()";
}

if ($clientFilter) {
    $where[] = "cc.client_id = ?";
    $params[] = $clientFilter;
}

if ($search) {
    $where[] = "(c.name LIKE ? OR ct.name LIKE ? OR cc.certificate_number LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

$whereClause = implode(' AND ', $where);

// Get certificates with full details
$certificates = dbFetchAll("
    SELECT cc.id, cc.certificate_number, cc.issue_date, cc.expiry_date, 
           cc.file_path, cc.notes, cc.created_at,
           ct.id as type_id, ct.name as type_name, ct.code as type_code, ct.category,
           c.id as client_id, c.name as client_name, c.entity_type, c.portal_token,
           CASE 
               WHEN cc.expiry_date IS NULL THEN 'active'
               WHEN cc.expiry_date < CURDATE() THEN 'expired'
               WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 'critical'
               WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 'expiring'
               ELSE 'active'
           END as status,
           DATEDIFF(cc.expiry_date, CURDATE()) as days_left
    FROM client_certificates cc
    JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    JOIN clients c ON cc.client_id = c.id AND c.deleted_at IS NULL
    WHERE $whereClause
    ORDER BY 
        CASE 
            WHEN cc.expiry_date < CURDATE() THEN 0
            WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 1
            WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 2
            ELSE 3
        END,
        cc.expiry_date ASC,
        c.name ASC
", $params) ?: [];

// Get stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN expiry_date IS NULL OR expiry_date > DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 1 ELSE 0 END) as active,
        SUM(CASE WHEN expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 1 ELSE 0 END) as expiring,
        SUM(CASE WHEN expiry_date < CURDATE() THEN 1 ELSE 0 END) as expired
    FROM client_certificates WHERE deleted_at IS NULL
");

// Get categories for filter tabs
$categories = dbFetchAll("SELECT DISTINCT category FROM certificate_types WHERE deleted_at IS NULL AND category IS NOT NULL ORDER BY category") ?: [];

// Get clients for filter dropdown
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

// Category icons
$categoryConfig = [
    'Tax' => ['icon' => 'fa-file-invoice-dollar', 'color' => 'blue'],
    'License' => ['icon' => 'fa-id-card', 'color' => 'amber'],
    'Company' => ['icon' => 'fa-building', 'color' => 'emerald'],
    'IP' => ['icon' => 'fa-trademark', 'color' => 'purple'],
    'Digital' => ['icon' => 'fa-key', 'color' => 'indigo'],
    'Registration' => ['icon' => 'fa-registered', 'color' => 'teal'],
    'Other' => ['icon' => 'fa-certificate', 'color' => 'gray']
];

require_once 'includes/header.php';
?>

<style>
.stat-card{transition:all .2s;cursor:pointer}.stat-card:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.1)}
.urgency-expired{background:#FEF2F2!important}.urgency-critical{background:#FEF3C7!important}.urgency-expiring{background:#FFFBEB!important}
.badge-active{background:#10B981;color:#fff}.badge-expiring{background:#F59E0B;color:#fff}
.badge-critical{background:#F97316;color:#fff}.badge-expired{background:#DC2626;color:#fff}
.cat-tab{padding:0.5rem 1rem;border-radius:0.75rem;font-weight:500;transition:all .2s}
.cat-tab:hover{background:#F3F4F6}.cat-tab.active{background:#1F2937;color:#fff}
.table-container{max-height:calc(100vh - 400px);overflow-y:auto;position:relative}
.table-container thead{position:sticky;top:0;z-index:10}
.table-container thead th{background:#F9FAFB;box-shadow:0 1px 3px rgba(0,0,0,0.1)}
.modal{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:50}.modal.show{display:flex;align-items:center;justify-content:center}
.modal-box{background:#fff;border-radius:1rem;max-width:600px;width:95%;max-height:90vh;overflow-y:auto}
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900"><i class="fas fa-certificate text-amber-500 mr-2"></i>Certificate Repository</h1>
        <p class="text-gray-500 text-sm">Track and manage all client certificates & renewals</p>
    </div>
    <a href="add_certificate.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Certificate</a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <a href="?" class="stat-card card p-4 flex items-center gap-4 <?= !$status ? 'ring-2 ring-blue-500' : '' ?>">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl bg-blue-100 text-blue-600"><i class="fas fa-certificate"></i></div>
        <div><p class="text-2xl font-bold text-gray-900"><?= $stats['total'] ?? 0 ?></p><p class="text-sm text-gray-500">Total</p></div>
    </a>
    <a href="?status=active" class="stat-card card p-4 flex items-center gap-4 <?= $status === 'active' ? 'ring-2 ring-green-500' : '' ?>">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl bg-emerald-100 text-emerald-600"><i class="fas fa-check-circle"></i></div>
        <div><p class="text-2xl font-bold text-emerald-600"><?= $stats['active'] ?? 0 ?></p><p class="text-sm text-gray-500">Active</p></div>
    </a>
    <a href="?status=expiring" class="stat-card card p-4 flex items-center gap-4 <?= $status === 'expiring' ? 'ring-2 ring-amber-500' : '' ?>">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl bg-amber-100 text-amber-600"><i class="fas fa-exclamation-triangle"></i></div>
        <div><p class="text-2xl font-bold text-amber-600"><?= $stats['expiring'] ?? 0 ?></p><p class="text-sm text-gray-500">Expiring (90d)</p></div>
    </a>
    <a href="?status=expired" class="stat-card card p-4 flex items-center gap-4 <?= $status === 'expired' ? 'ring-2 ring-red-500' : '' ?>">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl bg-red-100 text-red-600"><i class="fas fa-times-circle"></i></div>
        <div><p class="text-2xl font-bold text-red-600"><?= $stats['expired'] ?? 0 ?></p><p class="text-sm text-gray-500">Expired</p></div>
    </a>
</div>

<!-- Category Tabs -->
<div class="flex flex-wrap gap-2 mb-4">
    <a href="?<?= http_build_query(array_merge($_GET, ['category' => 'all'])) ?>" class="cat-tab <?= $category === 'all' ? 'active' : 'bg-white border' ?>">All</a>
    <?php foreach ($categories as $cat): 
        $cfg = $categoryConfig[$cat['category']] ?? $categoryConfig['Other'];
    ?>
    <a href="?<?= http_build_query(array_merge($_GET, ['category' => $cat['category']])) ?>" 
       class="cat-tab <?= $category === $cat['category'] ? 'active' : 'bg-white border' ?>">
        <i class="fas <?= $cfg['icon'] ?> mr-1"></i><?= htmlspecialchars($cat['category']) ?>
    </a>
    <?php endforeach; ?>
</div>

<!-- Search & Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <input type="hidden" name="category" value="<?= htmlspecialchars($category) ?>">
        <input type="hidden" name="status" value="<?= htmlspecialchars($status) ?>">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="q" class="form-input" placeholder="Client, certificate type, number..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client" class="form-input">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $clientFilter == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        <?php if ($search || $clientFilter || $status || ($category && $category !== 'all')): ?>
        <a href="certificates.php" class="btn btn-secondary"><i class="fas fa-times"></i></a>
        <?php endif; ?>
    </form>
</div>

<!-- Certificates Table -->
<div class="card overflow-hidden">
    <div class="table-container overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Certificate Type</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Client</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Certificate No.</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Issue Date</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Expiry Date</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Days Left</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-600 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($certificates)): ?>
                <tr><td colspan="8" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-certificate text-4xl text-gray-300 mb-2"></i>
                    <p>No certificates found</p>
                    <?php if ($search || $status || $clientFilter || ($category && $category !== 'all')): ?>
                    <a href="certificates.php" class="text-blue-600 hover:underline text-sm">Clear filters</a>
                    <?php endif; ?>
                </td></tr>
                <?php else: foreach ($certificates as $cert): 
                    $cfg = $categoryConfig[$cert['category']] ?? $categoryConfig['Other'];
                    $days = $cert['days_left'];
                    $isExpired = $cert['status'] === 'expired';
                    $isCritical = $cert['status'] === 'critical';
                    $isExpiring = $cert['status'] === 'expiring';
                    
                    $rowClass = $isExpired ? 'urgency-expired' : ($isCritical ? 'urgency-critical' : ($isExpiring ? 'urgency-expiring' : ''));
                    $badgeClass = $isExpired ? 'badge-expired' : ($isCritical ? 'badge-critical' : ($isExpiring ? 'badge-expiring' : 'badge-active'));
                    $statusText = $isExpired ? 'Expired' : ($isCritical ? 'Critical' : ($isExpiring ? 'Expiring' : 'Active'));
                ?>
                <tr class="hover:bg-gray-50 <?= $rowClass ?>">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center bg-<?= $cfg['color'] ?>-100 text-<?= $cfg['color'] ?>-600">
                                <i class="fas <?= $cfg['icon'] ?> text-sm"></i>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900"><?= htmlspecialchars($cert['type_name']) ?></div>
                                <div class="text-xs text-gray-400"><?= htmlspecialchars($cert['category']) ?></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $cert['client_id'] ?>" class="text-blue-600 hover:underline font-medium"><?= htmlspecialchars($cert['client_name']) ?></a>
                        <div class="text-xs text-gray-400"><?= $cert['entity_type'] ?></div>
                    </td>
                    <td class="px-4 py-3 font-mono text-xs"><?= htmlspecialchars($cert['certificate_number'] ?? '-') ?></td>
                    <td class="px-4 py-3 text-center text-sm"><?= $cert['issue_date'] ? date('d M Y', strtotime($cert['issue_date'])) : '-' ?></td>
                    <td class="px-4 py-3 text-center text-sm <?= $isExpired ? 'text-red-600 font-medium' : '' ?>"><?= $cert['expiry_date'] ? date('d M Y', strtotime($cert['expiry_date'])) : '<span class="text-gray-400">No Expiry</span>' ?></td>
                    <td class="px-4 py-3 text-center font-medium <?= $isExpired ? 'text-red-600' : ($isCritical ? 'text-orange-600' : ($isExpiring ? 'text-amber-600' : 'text-green-600')) ?>">
                        <?php if ($cert['expiry_date']): ?>
                            <?= $isExpired ? abs($days).'d ago' : ($days !== null ? $days.'d' : '-') ?>
                        <?php else: ?>
                            <span class="text-gray-400">∞</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded text-xs font-medium <?= $badgeClass ?>"><?= $statusText ?></span>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-1">
                            <button type="button" onclick='viewCertificate(<?= json_encode($cert) ?>)' class="p-1.5 text-gray-600 hover:bg-gray-100 rounded" title="View Details"><i class="fas fa-eye"></i></button>
                            <a href="edit_certificate.php?id=<?= $cert['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php if ($cert['file_path']): ?>
                            <a href="<?= htmlspecialchars($cert['file_path']) ?>" target="_blank" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="View Certificate File"><i class="fas fa-file-pdf"></i></a>
                            <?php endif; ?>
                            <a href="view_client.php?id=<?= $cert['client_id'] ?>" class="p-1.5 text-purple-600 hover:bg-purple-50 rounded" title="View Client"><i class="fas fa-building"></i></a>
                            <button type="button" onclick="confirmDelete(<?= $cert['id'] ?>, '<?= htmlspecialchars(addslashes($cert['type_name'])) ?>')" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<p class="text-xs text-gray-400 mt-4 text-right">Showing <?= count($certificates) ?> certificate(s)</p>

<!-- View Modal -->
<div id="viewModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box">
    <div class="p-4 border-b bg-gray-50 rounded-t-xl flex justify-between items-center">
        <h3 class="text-lg font-bold"><i class="fas fa-certificate text-amber-500 mr-2"></i>Certificate Details</h3>
        <button onclick="this.closest('.modal').classList.remove('show')" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
    </div>
    <div class="p-6">
        <div class="grid grid-cols-2 gap-4 text-sm">
            <div><span class="text-gray-500">Type:</span><p class="font-medium" id="viewType"></p></div>
            <div><span class="text-gray-500">Category:</span><p class="font-medium" id="viewCategory"></p></div>
            <div><span class="text-gray-500">Client:</span><p class="font-medium"><a id="viewClient" href="#" class="text-blue-600 hover:underline"></a></p></div>
            <div><span class="text-gray-500">Entity Type:</span><p class="font-medium" id="viewEntityType"></p></div>
            <div><span class="text-gray-500">Certificate No:</span><p class="font-mono" id="viewCertNo"></p></div>
            <div><span class="text-gray-500">Issue Date:</span><p class="font-medium" id="viewIssueDate"></p></div>
            <div><span class="text-gray-500">Expiry Date:</span><p class="font-medium" id="viewExpiryDate"></p></div>
            <div><span class="text-gray-500">Status:</span><p id="viewStatus"></p></div>
            <div class="col-span-2"><span class="text-gray-500">Notes:</span><p class="text-gray-700" id="viewNotes"></p></div>
        </div>
        <div class="flex flex-wrap gap-3 mt-6 pt-4 border-t">
            <a id="viewDownloadLink" href="#" target="_blank" class="btn btn-primary flex-1"><i class="fas fa-file-pdf mr-2"></i>View Certificate</a>
            <a id="viewEditLink" href="#" class="btn btn-secondary flex-1"><i class="fas fa-edit mr-2"></i>Edit</a>
            <a id="viewClientLink" href="#" class="btn bg-purple-600 text-white hover:bg-purple-700 flex-1"><i class="fas fa-building mr-2"></i>View Client</a>
        </div>
    </div>
</div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box max-w-md">
    <div class="p-4 border-b bg-red-50 rounded-t-xl"><h3 class="text-lg font-bold text-red-700"><i class="fas fa-exclamation-triangle mr-2"></i>Confirm Delete</h3></div>
    <div class="p-6">
        <p class="text-gray-600">Are you sure you want to delete:</p>
        <p class="font-semibold text-gray-900 mt-2" id="deleteCertName"></p>
        <form method="POST" class="flex gap-3 mt-6 pt-4 border-t">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="cert_id" id="deleteCertId">
            <button type="submit" class="btn bg-red-600 text-white hover:bg-red-700 flex-1"><i class="fas fa-trash mr-2"></i>Delete</button>
            <button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary flex-1">Cancel</button>
        </form>
    </div>
</div>
</div>

<script>
function viewCertificate(cert) {
    document.getElementById('viewType').textContent = cert.type_name;
    document.getElementById('viewCategory').textContent = cert.category;
    document.getElementById('viewClient').textContent = cert.client_name;
    document.getElementById('viewClient').href = 'view_client.php?id=' + cert.client_id;
    document.getElementById('viewEntityType').textContent = cert.entity_type || '-';
    document.getElementById('viewCertNo').textContent = cert.certificate_number || '-';
    document.getElementById('viewIssueDate').textContent = cert.issue_date ? new Date(cert.issue_date).toLocaleDateString('en-IN', {day:'2-digit',month:'short',year:'numeric'}) : '-';
    document.getElementById('viewExpiryDate').textContent = cert.expiry_date ? new Date(cert.expiry_date).toLocaleDateString('en-IN', {day:'2-digit',month:'short',year:'numeric'}) : 'No Expiry';
    
    const statusColors = {expired:'bg-red-100 text-red-700',critical:'bg-orange-100 text-orange-700',expiring:'bg-amber-100 text-amber-700',active:'bg-green-100 text-green-700'};
    const statusLabels = {expired:'Expired',critical:'Critical',expiring:'Expiring Soon',active:'Active'};
    document.getElementById('viewStatus').innerHTML = '<span class="px-2 py-1 rounded text-xs font-medium '+statusColors[cert.status]+'">'+statusLabels[cert.status]+'</span>';
    
    document.getElementById('viewNotes').textContent = cert.notes || 'No notes';
    document.getElementById('viewEditLink').href = 'edit_certificate.php?id=' + cert.id;
    document.getElementById('viewDownloadLink').href = cert.file_path || '#';
    document.getElementById('viewDownloadLink').style.display = cert.file_path ? 'flex' : 'none';
    document.getElementById('viewClientLink').href = 'view_client.php?id=' + cert.client_id;
    document.getElementById('viewModal').classList.add('show');
}

function confirmDelete(id, name) {
    document.getElementById('deleteCertId').value = id;
    document.getElementById('deleteCertName').textContent = name;
    document.getElementById('deleteModal').classList.add('show');
}
</script>

<?php require_once 'includes/footer.php'; ?>
