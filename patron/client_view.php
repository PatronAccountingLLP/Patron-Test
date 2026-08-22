<?php
/**
 * PATRON - Client View Page
 * Detailed client profile with persons, documents, requests
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$clientId = (int)($_GET['id'] ?? 0);

if (!$clientId) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);

if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

$pageTitle = $client['name'];

// Get linked persons
$persons = dbFetchAll("
    SELECT p.*, cp.role_type, cp.designation, cp.shareholding_percent, cp.appointment_date
    FROM client_persons cp
    JOIN persons_new p ON cp.person_id = p.id
    WHERE cp.client_id = ? AND p.deleted_at IS NULL
    ORDER BY cp.role_type, p.full_name
", [$clientId]) ?: [];

// Get service requests
$requests = dbFetchAll("
    SELECT sr.*, s.name as service_name, s.category,
           u.display_name as assigned_to_name
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.client_id = ? AND sr.deleted_at IS NULL
    ORDER BY sr.created_at DESC
    LIMIT 10
", [$clientId]) ?: [];

// Get certificates
$certificates = dbFetchAll("
    SELECT cc.*, ct.name as type_name
    FROM client_certificates cc
    LEFT JOIN certificate_types ct ON cc.certificate_type_id = ct.id
    WHERE cc.client_id = ? AND cc.deleted_at IS NULL
    ORDER BY cc.created_at DESC
", [$clientId]) ?: [];

// Stats
$stats = [
    'persons' => count($persons),
    'requests' => dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE client_id = ? AND deleted_at IS NULL", [$clientId])['c'] ?? 0,
    'active_requests' => dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE client_id = ? AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')", [$clientId])['c'] ?? 0,
    'certificates' => count($certificates)
];

$entityLabels = [
    'PVT_LTD' => 'Private Limited Company', 'PUBLIC_LTD' => 'Public Limited Company', 
    'OPC' => 'One Person Company', 'LLP' => 'Limited Liability Partnership',
    'PARTNERSHIP' => 'Partnership Firm', 'PROPRIETORSHIP' => 'Proprietorship', 
    'HUF' => 'Hindu Undivided Family', 'TRUST' => 'Trust', 'SOCIETY' => 'Society'
];

$roleColors = [
    'DIRECTOR' => 'blue', 'SHAREHOLDER' => 'purple', 'PARTNER' => 'green',
    'DESIGNATED_PARTNER' => 'teal', 'PROPRIETOR' => 'amber', 'MEMBER' => 'indigo',
    'TRUSTEE' => 'pink', 'KARTA' => 'orange', 'NOMINEE' => 'gray'
];

$statusColors = [
    'NEW' => 'blue', 'WAITING_DOCS' => 'amber', 'UNDER_REVIEW' => 'purple',
    'APPLIED' => 'indigo', 'DONE' => 'green', 'COMPLETED' => 'green',
    'HOLD' => 'gray', 'CANCELLED' => 'red'
];

require_once 'includes/header.php';
?>

<style>
.info-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1rem; }
.info-item label { font-size: 11px; color: #6b7280; text-transform: uppercase; }
.info-item p { font-size: 14px; color: #111827; font-weight: 500; margin-top: 2px; }
.section-card { background: white; border-radius: 12px; border: 1px solid #e5e7eb; overflow: hidden; margin-bottom: 1.5rem; }
.section-header { background: #f9fafb; padding: 12px 16px; border-bottom: 1px solid #e5e7eb; font-weight: 600; display: flex; justify-content: space-between; align-items: center; }
</style>

<!-- Breadcrumb & Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
            <a href="clients.php" class="hover:text-blue-600">Clients</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span><?= htmlspecialchars($client['name']) ?></span>
        </div>
        <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white text-xl font-bold">
                <?= strtoupper(substr($client['name'], 0, 2)) ?>
            </div>
            <div>
                <h2 class="text-2xl font-bold"><?= htmlspecialchars($client['name']) ?></h2>
                <p class="text-gray-500"><?= $entityLabels[$client['entity_type']] ?? $client['entity_type'] ?></p>
            </div>
        </div>
    </div>
    <div class="flex gap-2">
        <?php if ($client['portal_token']): ?>
        <a href="client_portal/portal.php?token=<?= $client['portal_token'] ?>" target="_blank" class="btn bg-purple-100 text-purple-700 hover:bg-purple-200">
            <i class="fas fa-external-link-alt mr-2"></i>Portal
        </a>
        <?php endif; ?>
        <a href="edit_client.php?id=<?= $clientId ?>" class="btn bg-gray-100 text-gray-700 hover:bg-gray-200">
            <i class="fas fa-edit mr-2"></i>Edit
        </a>
        <a href="clients.php" class="btn bg-gray-100 text-gray-700 hover:bg-gray-200">
            <i class="fas fa-arrow-left mr-2"></i>Back
        </a>
    </div>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['persons'] ?></p>
        <p class="text-xs text-gray-500">Persons</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-green-600"><?= $stats['requests'] ?></p>
        <p class="text-xs text-gray-500">Total Requests</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['active_requests'] ?></p>
        <p class="text-xs text-gray-500">Active Requests</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-purple-600"><?= $stats['certificates'] ?></p>
        <p class="text-xs text-gray-500">Certificates</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Left Column - Details -->
    <div class="lg:col-span-2">
        <!-- Basic Information -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-building text-blue-500 mr-2"></i>Basic Information</span>
            </div>
            <div class="p-4">
                <div class="info-grid">
                    <div class="info-item">
                        <label>Entity Type</label>
                        <p><?= $entityLabels[$client['entity_type']] ?? $client['entity_type'] ?></p>
                    </div>
                    <div class="info-item">
                        <label>Status</label>
                        <p><span class="px-2 py-1 rounded text-xs <?= $client['status'] === 'ACTIVE' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' ?>"><?= $client['status'] ?></span></p>
                    </div>
                    <?php if ($client['trade_name']): ?>
                    <div class="info-item">
                        <label>Trade Name</label>
                        <p><?= htmlspecialchars($client['trade_name']) ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['date_of_incorporation']): ?>
                    <div class="info-item">
                        <label>Date of Incorporation</label>
                        <p><?= date('d M Y', strtotime($client['date_of_incorporation'])) ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Registration Numbers -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-id-card text-purple-500 mr-2"></i>Registration Numbers</span>
            </div>
            <div class="p-4">
                <div class="info-grid">
                    <?php if ($client['pan']): ?>
                    <div class="info-item">
                        <label>PAN</label>
                        <p class="font-mono"><?= $client['pan'] ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['gstin']): ?>
                    <div class="info-item">
                        <label>GSTIN</label>
                        <p class="font-mono"><?= $client['gstin'] ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['cin']): ?>
                    <div class="info-item">
                        <label>CIN</label>
                        <p class="font-mono text-sm"><?= $client['cin'] ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['llpin']): ?>
                    <div class="info-item">
                        <label>LLPIN</label>
                        <p class="font-mono"><?= $client['llpin'] ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['tan']): ?>
                    <div class="info-item">
                        <label>TAN</label>
                        <p class="font-mono"><?= $client['tan'] ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['msme_number']): ?>
                    <div class="info-item">
                        <label>MSME/Udyam</label>
                        <p class="font-mono"><?= $client['msme_number'] ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if (!$client['pan'] && !$client['gstin'] && !$client['cin'] && !$client['llpin']): ?>
                <p class="text-gray-400 text-sm">No registration numbers added</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-address-card text-green-500 mr-2"></i>Contact Information</span>
            </div>
            <div class="p-4">
                <div class="info-grid">
                    <?php if ($client['email']): ?>
                    <div class="info-item">
                        <label>Email</label>
                        <p><a href="mailto:<?= $client['email'] ?>" class="text-blue-600"><?= $client['email'] ?></a></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['mobile']): ?>
                    <div class="info-item">
                        <label>Mobile</label>
                        <p><a href="tel:<?= $client['mobile'] ?>" class="text-blue-600"><?= $client['mobile'] ?></a></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($client['registered_address']): ?>
                    <div class="info-item col-span-2">
                        <label>Registered Address</label>
                        <p><?= nl2br(htmlspecialchars($client['registered_address'])) ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Linked Persons -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-users text-indigo-500 mr-2"></i>Linked Persons (<?= count($persons) ?>)</span>
                <a href="add_person.php?client_id=<?= $clientId ?>" class="text-sm text-blue-600 hover:underline"><i class="fas fa-plus mr-1"></i>Add</a>
            </div>
            <div class="p-4">
                <?php if (empty($persons)): ?>
                <p class="text-gray-400 text-center py-4">No persons linked</p>
                <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($persons as $p): 
                        $roleColor = $roleColors[$p['role_type']] ?? 'gray';
                    ?>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-<?= $roleColor ?>-100 rounded-full flex items-center justify-center text-<?= $roleColor ?>-600 font-bold text-sm">
                                <?= strtoupper(substr($p['full_name'], 0, 2)) ?>
                            </div>
                            <div>
                                <a href="person_view.php?id=<?= $p['id'] ?>" class="font-medium text-gray-900 hover:text-blue-600"><?= htmlspecialchars($p['full_name']) ?></a>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="px-2 py-0.5 rounded-full text-xs bg-<?= $roleColor ?>-100 text-<?= $roleColor ?>-700">
                                        <?= str_replace('_', ' ', $p['role_type']) ?>
                                    </span>
                                    <?php if ($p['din']): ?>
                                    <span class="text-xs text-gray-500">DIN: <?= $p['din'] ?></span>
                                    <?php endif; ?>
                                    <?php if ($p['shareholding_percent']): ?>
                                    <span class="text-xs text-purple-600"><?= $p['shareholding_percent'] ?>%</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <a href="person_view.php?id=<?= $p['id'] ?>" class="text-gray-400 hover:text-blue-600"><i class="fas fa-arrow-right"></i></a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Right Column - Activity -->
    <div>
        <!-- Recent Requests -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-clipboard-list text-amber-500 mr-2"></i>Recent Requests</span>
                <a href="add_request.php?client_id=<?= $clientId ?>" class="text-sm text-blue-600 hover:underline"><i class="fas fa-plus mr-1"></i>New</a>
            </div>
            <div class="p-4">
                <?php if (empty($requests)): ?>
                <p class="text-gray-400 text-center py-4 text-sm">No requests yet</p>
                <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($requests as $r): 
                        $statusColor = $statusColors[$r['status']] ?? 'gray';
                    ?>
                    <a href="request_view.php?id=<?= $r['id'] ?>" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center justify-between mb-1">
                            <span class="font-medium text-sm"><?= htmlspecialchars($r['service_name']) ?></span>
                            <span class="px-2 py-0.5 rounded text-xs bg-<?= $statusColor ?>-100 text-<?= $statusColor ?>-700"><?= $r['status'] ?></span>
                        </div>
                        <div class="text-xs text-gray-500">
                            <?= $r['request_number'] ?> • <?= date('d M Y', strtotime($r['created_at'])) ?>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php if (count($requests) >= 10): ?>
                <a href="requests.php?client_id=<?= $clientId ?>" class="block text-center text-sm text-blue-600 hover:underline mt-3">View all requests →</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Certificates -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-certificate text-green-500 mr-2"></i>Certificates</span>
            </div>
            <div class="p-4">
                <?php if (empty($certificates)): ?>
                <p class="text-gray-400 text-center py-4 text-sm">No certificates</p>
                <?php else: ?>
                <div class="space-y-2">
                    <?php foreach ($certificates as $cert): ?>
                    <div class="p-2 bg-gray-50 rounded-lg">
                        <p class="font-medium text-sm"><?= htmlspecialchars($cert['type_name'] ?? 'Certificate') ?></p>
                        <div class="flex items-center gap-2 mt-1 text-xs text-gray-500">
                            <?php if ($cert['certificate_number']): ?>
                            <span><?= $cert['certificate_number'] ?></span>
                            <?php endif; ?>
                            <?php if ($cert['expiry_date']): ?>
                            <span class="<?= $cert['expiry_date'] < date('Y-m-d') ? 'text-red-600' : '' ?>">
                                Exp: <?= date('d M Y', strtotime($cert['expiry_date'])) ?>
                            </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="section-card">
            <div class="section-header">
                <span><i class="fas fa-bolt text-yellow-500 mr-2"></i>Quick Actions</span>
            </div>
            <div class="p-4 space-y-2">
                <a href="add_request.php?client_id=<?= $clientId ?>" class="block w-full p-3 bg-blue-50 hover:bg-blue-100 rounded-lg text-sm text-center">
                    <i class="fas fa-plus text-blue-600 mr-2"></i>New Service Request
                </a>
                <a href="add_person.php?client_id=<?= $clientId ?>" class="block w-full p-3 bg-indigo-50 hover:bg-indigo-100 rounded-lg text-sm text-center">
                    <i class="fas fa-user-plus text-indigo-600 mr-2"></i>Add Person
                </a>
                <?php if ($client['portal_token']): ?>
                <a href="client_portal/portal.php?token=<?= $client['portal_token'] ?>" target="_blank" class="block w-full p-3 bg-purple-50 hover:bg-purple-100 rounded-lg text-sm text-center">
                    <i class="fas fa-external-link-alt text-purple-600 mr-2"></i>Open Client Portal
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
