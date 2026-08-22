<?php
/**
 * PATRON - Certificate Expiry Report
 * Track expiring and expired certificates across all clients
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Certificate Expiry Report';

// Filters
$status = sanitize($_GET['status'] ?? 'all');
$category = sanitize($_GET['category'] ?? '');
$days = (int)($_GET['days'] ?? 90);

// Get summary stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN expiry_date < CURDATE() THEN 1 ELSE 0 END) as expired,
        SUM(CASE WHEN expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) THEN 1 ELSE 0 END) as expiring_7d,
        SUM(CASE WHEN expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 1 ELSE 0 END) as expiring_30d,
        SUM(CASE WHEN expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 1 ELSE 0 END) as expiring_90d,
        SUM(CASE WHEN expiry_date IS NULL OR expiry_date > DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 1 ELSE 0 END) as active
    FROM client_certificates cc
    JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    WHERE cc.deleted_at IS NULL AND ct.deleted_at IS NULL
") ?: [];

// Get categories
$categories = dbFetchAll("
    SELECT DISTINCT ct.category 
    FROM certificate_types ct 
    JOIN client_certificates cc ON ct.id = cc.certificate_type_id
    WHERE ct.deleted_at IS NULL AND cc.deleted_at IS NULL AND ct.category IS NOT NULL
    ORDER BY ct.category
") ?: [];

// Build query based on filters
$where = ["cc.deleted_at IS NULL", "ct.deleted_at IS NULL"];
$params = [];

if ($status === 'expired') {
    $where[] = "cc.expiry_date < CURDATE()";
} elseif ($status === 'expiring') {
    $where[] = "cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL ? DAY)";
    $params[] = $days;
} elseif ($status === 'active') {
    $where[] = "(cc.expiry_date IS NULL OR cc.expiry_date > DATE_ADD(CURDATE(), INTERVAL 90 DAY))";
}

if ($category) {
    $where[] = "ct.category = ?";
    $params[] = $category;
}

$whereClause = implode(' AND ', $where);

// Get certificates
$certificates = dbFetchAll("
    SELECT cc.*, ct.name as type_name, ct.code as type_code, ct.category,
           c.id as client_id, c.name as client_name, c.entity_type,
           DATEDIFF(cc.expiry_date, CURDATE()) as days_left,
           CASE 
               WHEN cc.expiry_date IS NULL THEN 'no_expiry'
               WHEN cc.expiry_date < CURDATE() THEN 'expired'
               WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) THEN 'critical'
               WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 'expiring_soon'
               WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 'expiring'
               ELSE 'active'
           END as urgency
    FROM client_certificates cc
    JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    JOIN clients c ON cc.client_id = c.id
    WHERE $whereClause
    ORDER BY 
        CASE 
            WHEN cc.expiry_date < CURDATE() THEN 0
            WHEN cc.expiry_date IS NULL THEN 999
            ELSE DATEDIFF(cc.expiry_date, CURDATE())
        END ASC,
        c.name ASC
", $params) ?: [];

// Group by urgency for summary
$byUrgency = [];
foreach ($certificates as $cert) {
    $urgency = $cert['urgency'];
    if (!isset($byUrgency[$urgency])) {
        $byUrgency[$urgency] = [];
    }
    $byUrgency[$urgency][] = $cert;
}

// Category config
$categoryConfig = [
    'Tax' => ['icon' => 'fa-file-invoice-dollar', 'color' => 'blue'],
    'License' => ['icon' => 'fa-id-card', 'color' => 'amber'],
    'Company' => ['icon' => 'fa-building', 'color' => 'emerald'],
    'IP' => ['icon' => 'fa-trademark', 'color' => 'purple'],
    'Digital' => ['icon' => 'fa-key', 'color' => 'indigo'],
    'Registration' => ['icon' => 'fa-registered', 'color' => 'teal'],
];

require_once 'includes/header.php';
?>

<style>
.urgency-expired { background: #FEF2F2 !important; }
.urgency-critical { background: #FEF3C7 !important; }
.urgency-expiring_soon { background: #FFFBEB !important; }
.stat-card { transition: transform 0.2s; cursor: pointer; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-calendar-times text-amber-500 mr-2"></i>Certificate Expiry Report</h1>
        <p class="text-gray-500 text-sm">Track and manage certificate renewals</p>
    </div>
    <div class="flex gap-2">
        <button onclick="window.print()" class="btn btn-secondary">
            <i class="fas fa-print mr-2"></i>Print
        </button>
        <a href="certificates.php" class="btn btn-primary">
            <i class="fas fa-certificate mr-2"></i>All Certificates
        </a>
    </div>
</div>

<!-- Summary Stats -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-6">
    <a href="?status=all" class="stat-card card p-4 text-center <?= $status === 'all' ? 'ring-2 ring-blue-500' : '' ?>">
        <p class="text-3xl font-bold text-blue-600"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Total</p>
    </a>
    <a href="?status=expired" class="stat-card card p-4 text-center bg-red-50 <?= $status === 'expired' ? 'ring-2 ring-red-500' : '' ?>">
        <p class="text-3xl font-bold text-red-600"><?= $stats['expired'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Expired</p>
    </a>
    <a href="?status=expiring&days=7" class="stat-card card p-4 text-center bg-orange-50 <?= $status === 'expiring' && $days == 7 ? 'ring-2 ring-orange-500' : '' ?>">
        <p class="text-3xl font-bold text-orange-600"><?= $stats['expiring_7d'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Expiring (7 days)</p>
    </a>
    <a href="?status=expiring&days=30" class="stat-card card p-4 text-center bg-amber-50 <?= $status === 'expiring' && $days == 30 ? 'ring-2 ring-amber-500' : '' ?>">
        <p class="text-3xl font-bold text-amber-600"><?= $stats['expiring_30d'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Expiring (30 days)</p>
    </a>
    <a href="?status=expiring&days=90" class="stat-card card p-4 text-center bg-yellow-50 <?= $status === 'expiring' && $days == 90 ? 'ring-2 ring-yellow-500' : '' ?>">
        <p class="text-3xl font-bold text-yellow-600"><?= $stats['expiring_90d'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Expiring (90 days)</p>
    </a>
    <a href="?status=active" class="stat-card card p-4 text-center bg-green-50 <?= $status === 'active' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-3xl font-bold text-green-600"><?= $stats['active'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Active</p>
    </a>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <input type="hidden" name="status" value="<?= htmlspecialchars($status) ?>">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input" onchange="this.form.submit()">
                <option value="">All Categories</option>
                <?php foreach ($categories as $c): ?>
                <option value="<?= htmlspecialchars($c['category']) ?>" <?= $category === $c['category'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($c['category']) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if ($status === 'expiring'): ?>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Days Ahead</label>
            <select name="days" class="form-input" onchange="this.form.submit()">
                <option value="7" <?= $days == 7 ? 'selected' : '' ?>>7 days</option>
                <option value="30" <?= $days == 30 ? 'selected' : '' ?>>30 days</option>
                <option value="60" <?= $days == 60 ? 'selected' : '' ?>>60 days</option>
                <option value="90" <?= $days == 90 ? 'selected' : '' ?>>90 days</option>
            </select>
        </div>
        <?php endif; ?>
        <?php if ($category || ($status === 'expiring' && $days != 90)): ?>
        <a href="?status=<?= $status ?>" class="btn btn-secondary">Clear Filters</a>
        <?php endif; ?>
    </form>
</div>

<!-- Results -->
<div class="card overflow-hidden">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-bold">
            <?php
            if ($status === 'expired') echo '<i class="fas fa-times-circle text-red-500 mr-2"></i>Expired Certificates';
            elseif ($status === 'expiring') echo '<i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>Expiring in ' . $days . ' Days';
            elseif ($status === 'active') echo '<i class="fas fa-check-circle text-green-500 mr-2"></i>Active Certificates';
            else echo '<i class="fas fa-certificate text-blue-500 mr-2"></i>All Certificates';
            ?>
        </h3>
        <span class="text-sm text-gray-500"><?= count($certificates) ?> certificate(s)</span>
    </div>
    
    <?php if (empty($certificates)): ?>
    <div class="p-8 text-center text-gray-400">
        <i class="fas fa-check-circle text-5xl text-green-400 mb-3"></i>
        <p class="text-lg">No certificates found for this filter</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-gray-500">Certificate</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-500">Client</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-500">Number</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-500">Issue Date</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-500">Expiry Date</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-500">Days Left</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-500">Status</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-500">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($certificates as $cert): 
                    $cfg = $categoryConfig[$cert['category']] ?? ['icon' => 'fa-certificate', 'color' => 'gray'];
                    $rowClass = '';
                    $badgeClass = '';
                    $badgeText = '';
                    
                    switch ($cert['urgency']) {
                        case 'expired':
                            $rowClass = 'urgency-expired';
                            $badgeClass = 'bg-red-100 text-red-700';
                            $badgeText = 'Expired';
                            break;
                        case 'critical':
                            $rowClass = 'urgency-critical';
                            $badgeClass = 'bg-orange-100 text-orange-700';
                            $badgeText = 'Critical';
                            break;
                        case 'expiring_soon':
                            $rowClass = 'urgency-expiring_soon';
                            $badgeClass = 'bg-amber-100 text-amber-700';
                            $badgeText = 'Expiring Soon';
                            break;
                        case 'expiring':
                            $badgeClass = 'bg-yellow-100 text-yellow-700';
                            $badgeText = 'Expiring';
                            break;
                        case 'no_expiry':
                            $badgeClass = 'bg-teal-100 text-teal-700';
                            $badgeText = 'No Expiry';
                            break;
                        default:
                            $badgeClass = 'bg-green-100 text-green-700';
                            $badgeText = 'Active';
                    }
                ?>
                <tr class="hover:bg-gray-50 <?= $rowClass ?>">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center bg-<?= $cfg['color'] ?>-100 text-<?= $cfg['color'] ?>-600">
                                <i class="fas <?= $cfg['icon'] ?> text-sm"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($cert['type_name']) ?></p>
                                <p class="text-xs text-gray-400"><?= htmlspecialchars($cert['category'] ?? '-') ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $cert['client_id'] ?>" class="text-blue-600 hover:underline font-medium">
                            <?= htmlspecialchars($cert['client_name']) ?>
                        </a>
                        <p class="text-xs text-gray-400"><?= $cert['entity_type'] ?></p>
                    </td>
                    <td class="px-4 py-3 font-mono text-xs"><?= htmlspecialchars($cert['certificate_number'] ?? '-') ?></td>
                    <td class="px-4 py-3 text-center"><?= $cert['issue_date'] ? date('d M Y', strtotime($cert['issue_date'])) : '-' ?></td>
                    <td class="px-4 py-3 text-center font-medium <?= $cert['urgency'] === 'expired' ? 'text-red-600' : '' ?>">
                        <?= $cert['expiry_date'] ? date('d M Y', strtotime($cert['expiry_date'])) : 'No Expiry' ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($cert['expiry_date']): ?>
                            <?php if ($cert['days_left'] < 0): ?>
                            <span class="font-bold text-red-600"><?= abs($cert['days_left']) ?>d ago</span>
                            <?php else: ?>
                            <span class="font-medium <?= $cert['days_left'] <= 7 ? 'text-orange-600' : ($cert['days_left'] <= 30 ? 'text-amber-600' : 'text-green-600') ?>">
                                <?= $cert['days_left'] ?>d
                            </span>
                            <?php endif; ?>
                        <?php else: ?>
                        <span class="text-gray-400">∞</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded text-xs font-medium <?= $badgeClass ?>"><?= $badgeText ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="edit_certificate.php?id=<?= $cert['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <?php if ($cert['file_path']): ?>
                            <a href="<?= htmlspecialchars($cert['file_path']) ?>" target="_blank" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="View File">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                            <?php endif; ?>
                            <a href="view_client.php?id=<?= $cert['client_id'] ?>&tab=certificates" class="p-1.5 text-purple-600 hover:bg-purple-50 rounded" title="View Client">
                                <i class="fas fa-building"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
