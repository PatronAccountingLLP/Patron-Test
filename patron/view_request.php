<?php
/**
 * PATRON - View Service Request
 * Enhanced with Directors/Partners, Person Documents, Entity Details
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$requestId = (int)($_GET['id'] ?? 0);
if (!$requestId) {
    setFlash('error', 'Request ID is required.');
    header('Location: requests.php');
    exit;
}

// ACCESS CONTROL CHECK
if (!canAccessRequest($requestId)) {
    setFlash('error', 'You do not have access to this request.');
    header('Location: requests.php');
    exit;
}

// Get request details
$request = dbFetchOne("
    SELECT sr.*, s.name as service_name, s.code as service_code, s.category,
           c.name as client_name, c.id as client_id, c.email as client_email, c.mobile as client_mobile,
           c.entity_type, c.pan as client_pan, c.gstin as client_gstin, c.portal_token,
           c.authorized_capital, c.paid_up_capital, c.total_contribution,
           u1.display_name as assigned_to_name, u1.email as assigned_email, u1.phone as assigned_phone,
           u2.display_name as created_by_name
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u1 ON sr.assigned_to = u1.id
    LEFT JOIN users u2 ON sr.created_by = u2.id
    WHERE sr.id = ? AND sr.deleted_at IS NULL
", [$requestId]);

if (!$request) {
    setFlash('error', 'Request not found.');
    header('Location: requests.php');
    exit;
}

$pageTitle = $request['request_number'];

// Get linked persons (directors/partners) from new structure
$linkedPersons = dbFetchAll("
    SELECT cp.*, p.id as person_id, p.full_name, p.pan_number, p.din, p.dpin, 
           p.mobile, p.email, p.nationality, p.is_indian_resident, p.dsc_status,
           (SELECT COUNT(*) FROM person_documents WHERE person_id = p.id AND status = 'VERIFIED') as verified_docs,
           (SELECT COUNT(*) FROM person_documents WHERE person_id = p.id AND status IN ('PENDING', 'UPLOADED')) as pending_docs,
           (SELECT COUNT(*) FROM person_documents WHERE person_id = p.id) as total_docs
    FROM client_persons cp
    JOIN persons_new p ON cp.person_id = p.id
    WHERE cp.client_id = ?
    ORDER BY cp.display_order
", [$request['client_id']]);

// Get registered office
$office = dbFetchOne("SELECT * FROM registered_offices WHERE client_id = ?", [$request['client_id']]);

// Get company-level documents for this request
$companyDocuments = dbFetchAll("
    SELECT rd.*, dt.name as doc_name, dt.code as doc_code,
           cd.file_path, cd.original_filename, cd.uploaded_at, cd.status as doc_status
    FROM request_documents rd
    JOIN document_types dt ON rd.document_type_id = dt.id
    LEFT JOIN client_documents cd ON rd.client_document_id = cd.id
    WHERE rd.service_request_id = ?
    ORDER BY rd.is_required DESC, dt.name
", [$requestId]);

// Get office documents
$officeDocuments = [];
if ($office) {
    $officeDocuments = dbFetchAll("SELECT * FROM office_documents WHERE office_id = ?", [$office['id']]);
}

// Get tasks for this request
$tasks = dbFetchAll("
    SELECT t.*, u.display_name as assigned_to_name
    FROM tasks t
    LEFT JOIN users u ON t.assigned_to = u.id
    WHERE t.service_request_id = ? AND t.deleted_at IS NULL
    ORDER BY t.created_at
", [$requestId]);

// Get information fields
$infoFields = [];
try {
    $infoFields = dbFetchAll("
        SELECT rif.*, inf.name as field_name, inf.field_type, inf.options as field_options, 
               inf.placeholder as help_text, riv.field_value, riv.updated_at as value_updated_at
        FROM request_info_fields rif
        JOIN information_fields inf ON rif.info_field_id = inf.id
        LEFT JOIN request_info_values riv ON riv.service_request_id = rif.service_request_id 
            AND riv.info_field_id = rif.info_field_id
        WHERE rif.service_request_id = ?
        ORDER BY rif.display_order, inf.name
    ", [$requestId]);
} catch (Exception $e) {}

// Get team members for assignment dropdown
$teamMembers = dbFetchAll("
    SELECT id, display_name FROM users 
    ORDER BY display_name
") ?: [];

// Status configuration
$statusConfig = [
    'NEW' => ['bg' => 'bg-gray-100', 'text' => 'text-gray-700', 'icon' => '📋'],
    'ASSIGNED' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => '👤'],
    'IN_PROGRESS' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => '⚡'],
    'PENDING_DOCUMENTS' => ['bg' => 'bg-amber-100', 'text' => 'text-amber-700', 'icon' => '📄'],
    'UNDER_REVIEW' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-700', 'icon' => '🔍'],
    'SUBMITTED' => ['bg' => 'bg-indigo-100', 'text' => 'text-indigo-700', 'icon' => '📤'],
    'COMPLETED' => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'icon' => '✅'],
    'CANCELLED' => ['bg' => 'bg-red-100', 'text' => 'text-red-700', 'icon' => '❌']
];

$currentStatus = $statusConfig[$request['status']] ?? $statusConfig['NEW'];

// Portal URL
$portalUrl = '';
if ($request['portal_token']) {
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    $portalUrl = $baseUrl . '/patron/public/portal.php?token=' . $request['portal_token'];
}

// Entity type labels
$entityLabels = [
    'PVT_LTD' => 'Private Limited',
    'OPC' => 'One Person Company',
    'LLP' => 'LLP',
    'PARTNERSHIP' => 'Partnership',
    'PROPRIETORSHIP' => 'Proprietorship'
];

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // Update status
    if ($action === 'update_status') {
        $newStatus = sanitize($_POST['status'] ?? '');
        if ($newStatus) {
            dbExecute("UPDATE service_requests SET status = ?, updated_at = NOW() WHERE id = ?", [$newStatus, $requestId]);
            setFlash('success', 'Status updated.');
        }
        header('Location: view_request.php?id=' . $requestId);
        exit;
    }
    
    // Update assignment
    if ($action === 'update_assignment') {
        $assignedTo = (int)($_POST['assigned_to'] ?? 0) ?: null;
        dbExecute("UPDATE service_requests SET assigned_to = ?, updated_at = NOW() WHERE id = ?", [$assignedTo, $requestId]);
        setFlash('success', 'Assignment updated.');
        header('Location: view_request.php?id=' . $requestId);
        exit;
    }
    
    // Save info field
    if ($action === 'save_info_field') {
        $fieldId = (int)($_POST['field_id'] ?? 0);
        $fieldValue = sanitize($_POST['field_value'] ?? '');
        
        $existing = dbFetchOne("SELECT id FROM request_info_values WHERE service_request_id = ? AND info_field_id = ?", [$requestId, $fieldId]);
        
        if ($existing) {
            dbExecute("UPDATE request_info_values SET field_value = ?, updated_at = NOW() WHERE id = ?", [$fieldValue, $existing['id']]);
        } else {
            dbExecute("INSERT INTO request_info_values (service_request_id, info_field_id, field_value, created_at) VALUES (?, ?, ?, NOW())", [$requestId, $fieldId, $fieldValue]);
        }
        setFlash('success', 'Information saved.');
        header('Location: view_request.php?id=' . $requestId);
        exit;
    }
    
    // Verify/Reject document
    if ($action === 'verify_doc') {
        $docId = (int)($_POST['doc_id'] ?? 0);
        dbExecute("UPDATE request_documents SET status = 'VERIFIED' WHERE id = ?", [$docId]);
        setFlash('success', 'Document verified.');
        header('Location: view_request.php?id=' . $requestId);
        exit;
    }
    
    if ($action === 'reject_doc') {
        $docId = (int)($_POST['doc_id'] ?? 0);
        dbExecute("UPDATE request_documents SET status = 'REJECTED' WHERE id = ?", [$docId]);
        setFlash('success', 'Document rejected.');
        header('Location: view_request.php?id=' . $requestId);
        exit;
    }
}

// Calculate stats
$totalPersonDocs = array_sum(array_column($linkedPersons, 'total_docs'));
$verifiedPersonDocs = array_sum(array_column($linkedPersons, 'verified_docs'));
$pendingPersonDocs = array_sum(array_column($linkedPersons, 'pending_docs'));
$totalCompanyDocs = count($companyDocuments);
$verifiedCompanyDocs = count(array_filter($companyDocuments, fn($d) => $d['status'] === 'VERIFIED'));
$pendingInfoFields = count(array_filter($infoFields, fn($f) => empty($f['field_value'])));

require_once 'includes/header.php';
?>

<div class="mb-6 flex items-center justify-between">
    <a href="requests.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Requests
    </a>
    <div class="flex gap-2">
        <a href="view_client.php?id=<?= $request['client_id'] ?>" class="btn btn-secondary text-sm">
            <i class="fas fa-building mr-1"></i> View Client
        </a>
    </div>
</div>

<!-- Header Card -->
<div class="card p-6 mb-6">
    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-3xl"><?= $currentStatus['icon'] ?></span>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($request['service_name']) ?></h1>
                    <p class="text-gray-500"><?= $request['request_number'] ?></p>
                </div>
            </div>
            
            <div class="flex flex-wrap items-center gap-2 mt-3">
                <span class="px-3 py-1 rounded-full text-sm font-medium <?= $currentStatus['bg'] ?> <?= $currentStatus['text'] ?>">
                    <?= str_replace('_', ' ', $request['status']) ?>
                </span>
                <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                    <?= $request['category'] ?>
                </span>
                <?php if ($request['priority'] !== 'NORMAL'): ?>
                <span class="px-3 py-1 <?= $request['priority'] === 'HIGH' ? 'bg-red-100 text-red-700' : 'bg-amber-100 text-amber-700' ?> rounded-full text-sm">
                    <?= $request['priority'] ?> Priority
                </span>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="text-right">
            <a href="view_client.php?id=<?= $request['client_id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                <?= htmlspecialchars($request['client_name']) ?>
            </a>
            <p class="text-sm text-gray-500">
                <?= $entityLabels[$request['entity_type']] ?? $request['entity_type'] ?>
            </p>
            <?php if ($request['client_pan']): ?>
            <p class="text-xs text-gray-400 font-mono mt-1"><?= $request['client_pan'] ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-2 md:grid-cols-6 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-blue-600"><?= count($linkedPersons) ?></p>
        <p class="text-xs text-gray-500">Directors/Partners</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-green-600"><?= $verifiedPersonDocs ?>/<?= $totalPersonDocs ?></p>
        <p class="text-xs text-gray-500">Person Docs</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-purple-600"><?= $verifiedCompanyDocs ?>/<?= $totalCompanyDocs ?></p>
        <p class="text-xs text-gray-500">Company Docs</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold <?= $pendingInfoFields > 0 ? 'text-amber-600' : 'text-green-600' ?>"><?= count($infoFields) - $pendingInfoFields ?>/<?= count($infoFields) ?></p>
        <p class="text-xs text-gray-500">Info Fields</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-indigo-600"><?= count($tasks) ?></p>
        <p class="text-xs text-gray-500">Tasks</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-gray-600"><?= $request['progress_percentage'] ?? 0 ?>%</p>
        <p class="text-xs text-gray-500">Progress</p>
    </div>
</div>

<!-- Portal Link -->
<?php if ($portalUrl): ?>
<div class="card p-4 mb-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200">
    <div class="flex items-center justify-between flex-wrap gap-4">
        <div>
            <p class="font-medium text-blue-800"><i class="fas fa-link mr-2"></i>Client Portal</p>
            <p class="text-sm text-blue-600 break-all"><?= htmlspecialchars($portalUrl) ?></p>
        </div>
        <div class="flex gap-2">
            <button onclick="navigator.clipboard.writeText('<?= $portalUrl ?>')" class="btn btn-secondary text-sm">
                <i class="fas fa-copy mr-1"></i> Copy
            </button>
            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $request['client_mobile']) ?>?text=<?= urlencode('Upload documents: ' . $portalUrl) ?>" target="_blank" class="btn bg-green-500 text-white hover:bg-green-600 text-sm">
                <i class="fab fa-whatsapp mr-1"></i> Send
            </a>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        
        <!-- Directors/Partners Section -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-users text-green-500 mr-2"></i>
                    Directors / Partners (<?= count($linkedPersons) ?>)
                </h2>
                <p class="text-sm text-gray-500 mt-1">KYC documents required from each person</p>
            </div>
            
            <?php if (empty($linkedPersons)): ?>
            <div class="p-8 text-center text-gray-500">
                <i class="fas fa-user-plus text-4xl text-gray-300 mb-2"></i>
                <p>No directors/partners linked</p>
                <a href="add_client_wizard.php?step=3&client_id=<?= $request['client_id'] ?>" class="text-blue-600 hover:underline text-sm">
                    Add Directors/Partners →
                </a>
            </div>
            <?php else: ?>
            <div class="divide-y divide-gray-100">
                <?php foreach ($linkedPersons as $person): ?>
                <div class="p-4">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">
                                <?= strtoupper(substr($person['full_name'], 0, 2)) ?>
                            </div>
                            <div>
                                <a href="view_person.php?id=<?= $person['person_id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                                    <?= htmlspecialchars($person['full_name']) ?>
                                </a>
                                <p class="text-sm text-gray-500">
                                    <?= htmlspecialchars($person['pan_number']) ?>
                                    <?php if ($person['din']): ?> • DIN: <?= $person['din'] ?><?php endif; ?>
                                    <?php if ($person['dpin']): ?> • DPIN: <?= $person['dpin'] ?><?php endif; ?>
                                </p>
                                <div class="flex items-center gap-2 mt-2">
                                    <span class="px-2 py-0.5 text-xs font-medium bg-blue-100 text-blue-700 rounded-full">
                                        <?= str_replace('_', ' ', $person['role_type']) ?>
                                    </span>
                                    <?php if ($person['share_percentage']): ?>
                                    <span class="px-2 py-0.5 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                        <?= $person['share_percentage'] ?>% shares
                                    </span>
                                    <?php endif; ?>
                                    <?php if ($person['capital_contribution']): ?>
                                    <span class="px-2 py-0.5 text-xs font-medium bg-purple-100 text-purple-700 rounded-full">
                                        ₹<?= number_format($person['capital_contribution']) ?>
                                    </span>
                                    <?php endif; ?>
                                    <?php if ($person['is_indian_resident']): ?>
                                    <span class="px-2 py-0.5 text-xs font-medium bg-gray-100 text-gray-600 rounded-full">
                                        🇮🇳 Resident
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-right">
                            <!-- Document Status -->
                            <div class="flex items-center gap-2 justify-end">
                                <?php if ($person['verified_docs'] > 0): ?>
                                <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                    <i class="fas fa-check mr-1"></i><?= $person['verified_docs'] ?> verified
                                </span>
                                <?php endif; ?>
                                <?php if ($person['pending_docs'] > 0): ?>
                                <span class="px-2 py-1 text-xs font-medium bg-amber-100 text-amber-700 rounded-full">
                                    <i class="fas fa-clock mr-1"></i><?= $person['pending_docs'] ?> pending
                                </span>
                                <?php endif; ?>
                                <?php if ($person['total_docs'] == 0): ?>
                                <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full">
                                    No docs
                                </span>
                                <?php endif; ?>
                            </div>
                            
                            <!-- DSC Status -->
                            <?php if ($person['dsc_status']): ?>
                            <p class="text-xs mt-2 <?= $person['dsc_status'] === 'ACTIVE' ? 'text-green-600' : 'text-amber-600' ?>">
                                DSC: <?= str_replace('_', ' ', $person['dsc_status']) ?>
                            </p>
                            <?php endif; ?>
                            
                            <a href="person_documents.php?id=<?= $person['person_id'] ?>" class="text-xs text-blue-600 hover:underline mt-2 inline-block">
                                View/Upload Docs →
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Company Documents Section -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-file-alt text-purple-500 mr-2"></i>
                    Company Documents (<?= $verifiedCompanyDocs ?>/<?= $totalCompanyDocs ?>)
                </h2>
            </div>
            
            <?php if (empty($companyDocuments)): ?>
            <div class="p-8 text-center text-gray-500">
                <p>No documents required</p>
            </div>
            <?php else: ?>
            <div class="divide-y divide-gray-100">
                <?php foreach ($companyDocuments as $doc): ?>
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center <?= $doc['status'] === 'VERIFIED' ? 'bg-green-100' : ($doc['file_path'] ? 'bg-blue-100' : 'bg-gray-100') ?>">
                            <i class="fas <?= $doc['status'] === 'VERIFIED' ? 'fa-check text-green-600' : ($doc['file_path'] ? 'fa-file text-blue-600' : 'fa-file-upload text-gray-400') ?>"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900"><?= htmlspecialchars($doc['doc_name']) ?></p>
                            <div class="flex items-center gap-2">
                                <?php if ($doc['is_required']): ?>
                                <span class="text-xs text-red-600">Required</span>
                                <?php endif; ?>
                                <?php if ($doc['file_path']): ?>
                                <span class="text-xs text-gray-500">
                                    Uploaded <?= date('d M Y', strtotime($doc['uploaded_at'])) ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2">
                        <span class="px-2 py-1 text-xs font-medium rounded-full <?= $doc['status'] === 'VERIFIED' ? 'bg-green-100 text-green-700' : ($doc['status'] === 'UPLOADED' ? 'bg-blue-100 text-blue-700' : ($doc['status'] === 'REJECTED' ? 'bg-red-100 text-red-700' : 'bg-gray-100 text-gray-600')) ?>">
                            <?= $doc['status'] ?>
                        </span>
                        
                        <?php if ($doc['file_path']): ?>
                        <a href="<?= htmlspecialchars($doc['file_path']) ?>" target="_blank" class="p-2 text-gray-400 hover:text-blue-600">
                            <i class="fas fa-eye"></i>
                        </a>
                        <?php endif; ?>
                        
                        <?php if ($doc['status'] === 'UPLOADED'): ?>
                        <form method="POST" class="inline">
                            <input type="hidden" name="action" value="verify_doc">
                            <input type="hidden" name="doc_id" value="<?= $doc['id'] ?>">
                            <button type="submit" class="p-2 text-gray-400 hover:text-green-600" title="Verify">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                        <form method="POST" class="inline">
                            <input type="hidden" name="action" value="reject_doc">
                            <input type="hidden" name="doc_id" value="<?= $doc['id'] ?>">
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600" title="Reject">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Registered Office Section -->
        <?php if ($office): ?>
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-map-marker-alt text-amber-500 mr-2"></i>
                    Registered Office
                </h2>
            </div>
            <div class="p-4">
                <p class="text-gray-900"><?= htmlspecialchars($office['address_line1']) ?></p>
                <?php if ($office['address_line2']): ?>
                <p class="text-gray-900"><?= htmlspecialchars($office['address_line2']) ?></p>
                <?php endif; ?>
                <p class="text-gray-700"><?= htmlspecialchars($office['city']) ?>, <?= htmlspecialchars($office['state']) ?> - <?= htmlspecialchars($office['pincode']) ?></p>
                
                <div class="mt-3 flex items-center gap-2">
                    <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-600 rounded-full">
                        <?= $office['ownership_type'] ?>
                    </span>
                    <?php if ($office['owner_name']): ?>
                    <span class="text-sm text-gray-500">Owner: <?= htmlspecialchars($office['owner_name']) ?></span>
                    <?php endif; ?>
                </div>
                
                <!-- Office Documents -->
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <p class="text-sm font-medium text-gray-700 mb-2">Office Documents</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded">NOC - Pending</span>
                        <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded">Utility Bill - Pending</span>
                        <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded"><?= $office['ownership_type'] === 'OWNED' ? 'Property Deed' : 'Rent Agreement' ?> - Pending</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Information Fields Section -->
        <?php if (!empty($infoFields)): ?>
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-edit text-indigo-500 mr-2"></i>
                    Information Fields (<?= count($infoFields) - $pendingInfoFields ?>/<?= count($infoFields) ?>)
                </h2>
            </div>
            <div class="divide-y divide-gray-100">
                <?php foreach ($infoFields as $field): ?>
                <div class="p-4">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <p class="font-medium text-gray-900">
                                <?= htmlspecialchars($field['field_name']) ?>
                                <?php if ($field['is_required']): ?>
                                <span class="text-red-500">*</span>
                                <?php endif; ?>
                            </p>
                            <?php if ($field['help_text']): ?>
                            <p class="text-xs text-gray-500"><?= htmlspecialchars($field['help_text']) ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <div class="ml-4">
                            <?php if ($field['field_value']): ?>
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded-full">Filled</span>
                            <?php else: ?>
                            <span class="px-2 py-1 text-xs bg-amber-100 text-amber-700 rounded-full">Pending</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <form method="POST" class="mt-2">
                        <input type="hidden" name="action" value="save_info_field">
                        <input type="hidden" name="field_id" value="<?= $field['info_field_id'] ?>">
                        <div class="flex gap-2">
                            <?php if ($field['field_type'] === 'textarea'): ?>
                            <textarea name="field_value" class="form-input flex-1 text-sm" rows="2"><?= htmlspecialchars($field['field_value'] ?? '') ?></textarea>
                            <?php elseif ($field['field_type'] === 'select' && $field['field_options']): ?>
                            <select name="field_value" class="form-input flex-1 text-sm">
                                <option value="">Select...</option>
                                <?php foreach (explode(',', $field['field_options']) as $opt): ?>
                                <option value="<?= htmlspecialchars(trim($opt)) ?>" <?= ($field['field_value'] ?? '') === trim($opt) ? 'selected' : '' ?>><?= htmlspecialchars(trim($opt)) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php else: ?>
                            <input type="<?= $field['field_type'] === 'date' ? 'date' : 'text' ?>" name="field_value" value="<?= htmlspecialchars($field['field_value'] ?? '') ?>" class="form-input flex-1 text-sm">
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </form>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Tasks Section -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-tasks text-blue-500 mr-2"></i>
                    Tasks (<?= count($tasks) ?>)
                </h2>
            </div>
            
            <?php if (empty($tasks)): ?>
            <div class="p-8 text-center text-gray-500">
                <p>No tasks created</p>
            </div>
            <?php else: ?>
            <div class="divide-y divide-gray-100">
                <?php foreach ($tasks as $task): ?>
                <div class="p-4 flex items-center justify-between">
                    <div>
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($task['title']) ?></p>
                        <p class="text-sm text-gray-500">
                            <?php if ($task['assigned_to_name']): ?>
                            <span><i class="fas fa-user mr-1"></i><?= htmlspecialchars($task['assigned_to_name']) ?></span>
                            <?php endif; ?>
                            <?php if ($task['due_date']): ?>
                            <span class="ml-2"><i class="fas fa-calendar mr-1"></i><?= date('d M', strtotime($task['due_date'])) ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <span class="px-3 py-1 text-xs font-medium rounded-full <?= $task['status'] === 'COMPLETED' ? 'bg-green-100 text-green-700' : ($task['status'] === 'IN_PROGRESS' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-600') ?>">
                        <?= $task['status'] ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Status & Assignment -->
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">Status & Assignment</h3>
            
            <form method="POST" class="mb-4">
                <input type="hidden" name="action" value="update_status">
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <div class="flex gap-2">
                    <select name="status" class="form-input flex-1 text-sm">
                        <?php foreach ($statusConfig as $status => $config): ?>
                        <option value="<?= $status ?>" <?= $request['status'] === $status ? 'selected' : '' ?>>
                            <?= $config['icon'] ?> <?= str_replace('_', ' ', $status) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
            
            <form method="POST">
                <input type="hidden" name="action" value="update_assignment">
                <label class="block text-sm font-medium text-gray-700 mb-1">Assigned To</label>
                <div class="flex gap-2">
                    <select name="assigned_to" class="form-input flex-1 text-sm">
                        <option value="">Unassigned</option>
                        <?php foreach ($teamMembers as $member): ?>
                        <option value="<?= $member['id'] ?>" <?= $request['assigned_to'] == $member['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($member['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
            
            <?php if ($request['assigned_to_name']): ?>
            <div class="mt-4 p-3 bg-blue-50 rounded-lg">
                <p class="text-sm font-medium text-blue-800"><?= htmlspecialchars($request['assigned_to_name']) ?></p>
                <?php if ($request['assigned_email']): ?>
                <p class="text-xs text-blue-600"><?= htmlspecialchars($request['assigned_email']) ?></p>
                <?php endif; ?>
                <?php if ($request['assigned_phone']): ?>
                <div class="flex gap-2 mt-2">
                    <a href="tel:<?= $request['assigned_phone'] ?>" class="text-xs text-blue-600 hover:underline">
                        <i class="fas fa-phone mr-1"></i>Call
                    </a>
                    <a href="https://wa.me/91<?= preg_replace('/[^0-9]/', '', $request['assigned_phone']) ?>" target="_blank" class="text-xs text-green-600 hover:underline">
                        <i class="fab fa-whatsapp mr-1"></i>WhatsApp
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Request Details -->
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">Request Details</h3>
            
            <div class="space-y-4 text-sm">
                <div>
                    <p class="text-gray-500">Created</p>
                    <p class="font-medium"><?= date('d M Y, h:i A', strtotime($request['created_at'])) ?></p>
                </div>
                <?php if ($request['expected_completion']): ?>
                <div>
                    <p class="text-gray-500">Expected Completion</p>
                    <p class="font-medium"><?= date('d M Y', strtotime($request['expected_completion'])) ?></p>
                </div>
                <?php endif; ?>
                <?php if ($request['quoted_price']): ?>
                <div>
                    <p class="text-gray-500">Quoted Price</p>
                    <p class="font-medium">₹<?= number_format($request['quoted_price']) ?></p>
                </div>
                <?php endif; ?>
                <?php if ($request['govt_fee']): ?>
                <div>
                    <p class="text-gray-500">Govt Fee</p>
                    <p class="font-medium">₹<?= number_format($request['govt_fee']) ?></p>
                </div>
                <?php endif; ?>
                <?php if ($request['created_by_name']): ?>
                <div>
                    <p class="text-gray-500">Created By</p>
                    <p class="font-medium"><?= htmlspecialchars($request['created_by_name']) ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Entity Summary -->
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">Entity Summary</h3>
            
            <div class="space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-500">Type</span>
                    <span class="font-medium"><?= $entityLabels[$request['entity_type']] ?? '-' ?></span>
                </div>
                <?php if ($request['authorized_capital']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Auth. Capital</span>
                    <span class="font-medium">₹<?= number_format($request['authorized_capital']) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($request['total_contribution']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Contribution</span>
                    <span class="font-medium">₹<?= number_format($request['total_contribution']) ?></span>
                </div>
                <?php endif; ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Directors/Partners</span>
                    <span class="font-medium"><?= count($linkedPersons) ?></span>
                </div>
            </div>
        </div>
        
        <!-- Notes -->
        <?php if ($request['notes']): ?>
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">Notes</h3>
            <p class="text-sm text-gray-700"><?= nl2br(htmlspecialchars($request['notes'])) ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
