<?php
/**
 * PATRON - View Client Details (Entity-Aware Smart Dashboard)
 * Adapts UI based on entity type: Proprietorship, Partnership, LLP, Pvt Ltd, OPC
 */

require_once 'includes/db.php';
require_once 'includes/entity_type_config.php';
require_once 'includes/access_control.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$clientId = (int)($_GET['id'] ?? 0);
$activeTab = sanitize($_GET['tab'] ?? 'overview');

if (!$clientId) {
    setFlash('error', 'Client ID is required.');
    header('Location: clients.php');
    exit;
}

$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    setFlash('error', 'Client not found.');
    header('Location: clients.php');
    exit;
}

// ACCESS CONTROL CHECK
if (!canAccessClient($clientId)) {
    setFlash('error', 'You do not have access to this client.');
    header('Location: clients.php');
    exit;
}

$pageTitle = $client['name'];
$entityType = $client['entity_type'] ?? 'PVT_LTD';

// Get entity configuration
$entityConfig = getEntityTypeConfig($entityType);
if (!$entityConfig) {
    $entityConfig = [
        'label' => $entityType, 'short_label' => $entityType, 'icon' => 'fa-building', 'color' => 'gray',
        'person_types' => ['DIRECTOR'], 'requires_din' => false, 'requires_dpin' => false,
        'requires_dsc' => false, 'person_is_entity' => false,
    ];
}

// Entity-specific labels and settings
$entitySettings = [
    'PROPRIETORSHIP' => [
        'term' => 'Business', 'people_term' => null, 'color' => 'amber', 'icon' => 'fa-user-tie',
        'show_capital' => false, 'show_people_tab' => false, 'id_label' => 'PAN'
    ],
    'PARTNERSHIP' => [
        'term' => 'Firm', 'people_term' => 'Partners', 'color' => 'purple', 'icon' => 'fa-users',
        'show_capital' => true, 'capital_label' => 'Total Capital', 'show_people_tab' => true, 'id_label' => 'Firm PAN'
    ],
    'LLP' => [
        'term' => 'LLP', 'people_term' => 'Partners', 'color' => 'indigo', 'icon' => 'fa-handshake',
        'show_capital' => true, 'capital_label' => 'Total Contribution', 'show_people_tab' => true, 'id_label' => 'LLPIN'
    ],
    'PVT_LTD' => [
        'term' => 'Company', 'people_term' => 'Directors & Shareholders', 'color' => 'blue', 'icon' => 'fa-building',
        'show_capital' => true, 'capital_label' => 'Share Capital', 'show_people_tab' => true, 'id_label' => 'CIN'
    ],
    'OPC' => [
        'term' => 'Company', 'people_term' => 'Director & Nominee', 'color' => 'teal', 'icon' => 'fa-user-shield',
        'show_capital' => true, 'capital_label' => 'Share Capital', 'show_people_tab' => true, 'id_label' => 'CIN'
    ],
    'HUF' => [
        'term' => 'HUF', 'people_term' => 'Members', 'color' => 'orange', 'icon' => 'fa-home',
        'show_capital' => false, 'show_people_tab' => true, 'id_label' => 'HUF PAN'
    ],
];

$settings = $entitySettings[$entityType] ?? $entitySettings['PVT_LTD'];
$isProprietorship = ($entityType === 'PROPRIETORSHIP');

// Get client team assignment
$clientTeam = dbFetchOne("
    SELECT ct.*,
           e1.display_name as executor_1_name,
           e2.display_name as executor_2_name,
           r.display_name as reviewer_name,
           m.display_name as manager_name
    FROM client_team ct
    LEFT JOIN users e1 ON ct.executor_1_id = e1.id
    LEFT JOIN users e2 ON ct.executor_2_id = e2.id
    LEFT JOIN users r ON ct.reviewer_id = r.id
    LEFT JOIN users m ON ct.manager_id = m.id
    WHERE ct.client_id = ?
", [$clientId]);

// Handle POST actions (before any output)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $action = $_POST['action'];
        
        // Handle team save
        if ($action === 'save_team') {
            $executor1 = (int)($_POST['executor_1_id'] ?? 0) ?: null;
            $executor2 = (int)($_POST['executor_2_id'] ?? 0) ?: null;
            $reviewer = (int)($_POST['reviewer_id'] ?? 0) ?: null;
            $manager = (int)($_POST['manager_id'] ?? 0) ?: null;
            $notes = sanitize($_POST['notes'] ?? '');
            
            if ($clientTeam) {
                dbExecute("UPDATE client_team SET executor_1_id = ?, executor_2_id = ?, reviewer_id = ?, manager_id = ?, notes = ? WHERE client_id = ?",
                    [$executor1, $executor2, $reviewer, $manager, $notes ?: null, $clientId]);
            } else {
                dbExecute("INSERT INTO client_team (client_id, executor_1_id, executor_2_id, reviewer_id, manager_id, notes) VALUES (?, ?, ?, ?, ?, ?)",
                    [$clientId, $executor1, $executor2, $reviewer, $manager, $notes ?: null]);
            }
            
            setFlash('success', 'Team assignment saved.');
            header("Location: view_client.php?id=$clientId&tab=team");
            exit;
        }
        
        // Handle document upload
        if ($action === 'upload_doc') {
            $docTypeId = (int)($_POST['document_type_id'] ?? 0);
            $personId = (int)($_POST['person_id'] ?? 0) ?: null;
            $file = $_FILES['document'] ?? null;
            
            if (!$docTypeId) {
                setFlash('error', 'Please select a document type.');
            } elseif (!$file || $file['error'] !== UPLOAD_ERR_OK) {
                $uploadErrors = [
                    UPLOAD_ERR_INI_SIZE => 'File too large (server limit)',
                    UPLOAD_ERR_FORM_SIZE => 'File too large',
                    UPLOAD_ERR_PARTIAL => 'File only partially uploaded',
                    UPLOAD_ERR_NO_FILE => 'No file was uploaded',
                    UPLOAD_ERR_NO_TMP_DIR => 'Missing temp folder',
                    UPLOAD_ERR_CANT_WRITE => 'Failed to write file',
                ];
                $errorMsg = $uploadErrors[$file['error'] ?? UPLOAD_ERR_NO_FILE] ?? 'Unknown upload error';
                setFlash('error', 'Upload failed: ' . $errorMsg);
            } else {
                // Check base upload directory
                $baseDir = 'uploads/documents';
                if (!is_dir($baseDir)) {
                    if (!@mkdir($baseDir, 0755, true)) {
                        setFlash('error', 'Upload directory does not exist and could not be created. Please contact administrator.');
                        header("Location: view_client.php?id=$clientId&tab=documents");
                        exit;
                    }
                }
                
                $uploadDir = 'uploads/documents/' . date('Y/m/');
                if (!is_dir($uploadDir)) {
                    if (!@mkdir($uploadDir, 0755, true)) {
                        setFlash('error', 'Failed to create upload directory. Please contact administrator.');
                        header("Location: view_client.php?id=$clientId&tab=documents");
                        exit;
                    }
                }
                
                $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                $allowedExts = ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'xls', 'xlsx'];
                
                if (!in_array($ext, $allowedExts)) {
                    setFlash('error', 'Invalid file type. Allowed: PDF, JPG, PNG, DOC, DOCX, XLS, XLSX');
                } elseif ($file['size'] > 10 * 1024 * 1024) {
                    setFlash('error', 'File too large. Maximum size is 10MB.');
                } else {
                    $newFileName = 'client_' . $clientId . '_' . uniqid() . '.' . $ext;
                    $filePath = $uploadDir . $newFileName;
                    
                    if (move_uploaded_file($file['tmp_name'], $filePath)) {
                        try {
                            dbExecute("INSERT INTO client_documents (client_id, person_id, document_type_id, file_path, original_filename, file_size, status, created_at) VALUES (?, ?, ?, ?, ?, ?, 'UPLOADED', NOW())",
                                [$clientId, $personId, $docTypeId, $filePath, $file['name'], $file['size']]);
                            setFlash('success', 'Document uploaded successfully.');
                        } catch (Exception $e) {
                            setFlash('error', 'Database error: ' . $e->getMessage());
                        }
                    } else {
                        setFlash('error', 'Failed to save file. Please check folder permissions for: ' . $uploadDir);
                    }
                }
            }
            header("Location: view_client.php?id=$clientId&tab=documents");
            exit;
        }
        
        // Handle portal token generation
        if ($action === 'generate_portal_token') {
            $token = bin2hex(random_bytes(32));
            dbExecute("UPDATE clients SET portal_token = ? WHERE id = ?", [$token, $clientId]);
            setFlash('success', 'Portal link generated successfully!');
            header("Location: view_client.php?id=$clientId&tab=overview");
            exit;
        }
        
        // Handle linking existing person
        if ($action === 'link_person') {
            $personId = (int)($_POST['person_id'] ?? 0);
            $roleType = sanitize($_POST['role_type'] ?? '');
            $designation = sanitize($_POST['designation'] ?? '');
            $directorCategory = sanitize($_POST['director_category'] ?? '') ?: null;
            $appointmentDate = sanitize($_POST['appointment_date'] ?? '') ?: null;
            $sharePercentage = (float)($_POST['share_percentage'] ?? 0) ?: null;
            $noOfShares = (int)($_POST['no_of_shares'] ?? 0) ?: null;
            $capitalContribution = (float)($_POST['capital_contribution'] ?? 0) ?: null;
            $profitSharingRatio = (float)($_POST['profit_sharing_ratio'] ?? 0) ?: null;
            
            if ($personId && $roleType) {
                // Check if already linked
                $existing = dbFetchOne("SELECT id FROM client_persons WHERE client_id = ? AND person_id = ? AND role_type = ?", 
                    [$clientId, $personId, $roleType]);
                
                if ($existing) {
                    setFlash('error', 'This person is already linked to this client with the same role.');
                } else {
                    dbExecute("INSERT INTO client_persons (client_id, person_id, role_type, designation, director_category, 
                               appointment_date, share_percentage, no_of_shares, capital_contribution, profit_sharing_ratio, is_active) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)",
                        [$clientId, $personId, $roleType, $designation ?: null, $directorCategory, 
                         $appointmentDate, $sharePercentage, $noOfShares, $capitalContribution, $profitSharingRatio]);
                    setFlash('success', 'Person linked successfully.');
                }
            } else {
                setFlash('error', 'Please select a person and role.');
            }
            header("Location: view_client.php?id=$clientId&tab=people");
            exit;
        }
        
        // Handle unlinking person
        if ($action === 'unlink_person') {
            $clientPersonId = (int)($_POST['client_person_id'] ?? 0);
            if ($clientPersonId) {
                dbExecute("DELETE FROM client_persons WHERE id = ? AND client_id = ?", [$clientPersonId, $clientId]);
                setFlash('success', 'Person unlinked from client.');
            }
            header("Location: view_client.php?id=$clientId&tab=people");
            exit;
        }
    }
    header('Location: view_client.php?id=' . $clientId . '&tab=' . $activeTab);
    exit;
}

// Get registered office
$office = null;
try {
    $office = dbFetchOne("SELECT * FROM registered_offices WHERE client_id = ? AND status = 'ACTIVE' ORDER BY is_primary DESC LIMIT 1", [$clientId]);
} catch (Exception $e) {}

// Get linked persons (try new structure first, then old)
$persons = [];
try {
    $persons = dbFetchAll("
        SELECT cp.*, p.id as person_id, p.full_name, p.pan_number, p.din, p.dpin, 
               p.mobile, p.email, p.nationality, p.is_indian_resident, p.dsc_status,
               p.dsc_expiry_date, p.dsc_class, p.din_kyc_status, p.din_kyc_due_date,
               p.photo_path, p.father_name, p.dob, p.gender, p.status as person_status,
               p.present_city, p.present_state,
               cp.director_category, cp.appointment_date, cp.original_appointment_date,
               cp.cessation_date, cp.cessation_reason, cp.reappointment_due_date,
               cp.no_of_shares, cp.share_percentage, cp.share_type, cp.face_value_per_share,
               cp.capital_contribution, cp.profit_sharing_ratio, cp.share_acquisition_date,
               cp.share_acquisition_mode, cp.share_certificate_no, cp.folio_number,
               cp.designation, cp.notes as link_notes
        FROM client_persons cp
        JOIN persons_new p ON cp.person_id = p.id
        WHERE cp.client_id = ? AND cp.is_active = 1
        ORDER BY cp.display_order, cp.id
    ", [$clientId]);
} catch (Exception $e) {
    try {
        $persons = dbFetchAll("
            SELECT p.*, p.id as person_id, p.name as full_name, p.relationship_type as role_type,
                   p.holding_percentage as share_percentage
            FROM persons p WHERE p.client_id = ? AND p.deleted_at IS NULL ORDER BY p.id
        ", [$clientId]);
    } catch (Exception $e2) {}
}

// Get service requests
$requests = [];
try {
    $requests = dbFetchAll("
        SELECT sr.*, s.name as service_name, u.display_name as assigned_name
        FROM service_requests sr
        JOIN services s ON sr.service_id = s.id
        LEFT JOIN users u ON sr.assigned_to = u.id
        WHERE sr.client_id = ? AND sr.deleted_at IS NULL
        ORDER BY sr.created_at DESC LIMIT 10
    ", [$clientId]);
} catch (Exception $e) {}

// Get entity-level documents
$entityDocuments = [];
try {
    $entityDocuments = dbFetchAll("
        SELECT cd.*, dt.name as doc_name
        FROM client_documents cd
        JOIN document_types dt ON cd.document_type_id = dt.id
        WHERE cd.client_id = ? AND cd.deleted_at IS NULL AND cd.person_id IS NULL
        ORDER BY cd.created_at DESC
    ", [$clientId]);
} catch (Exception $e) {}

// Get certificates
$certificates = [];
try {
    $certificates = dbFetchAll("
        SELECT cc.*, ct.name as cert_type_name
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        WHERE cc.client_id = ? AND cc.deleted_at IS NULL AND cc.status = 'ACTIVE'
        ORDER BY cc.expiry_date ASC
    ", [$clientId]);
} catch (Exception $e) {}

// Get document types for upload
$documentTypes = [];
try {
    $documentTypes = dbFetchAll("SELECT * FROM document_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY level, name");
} catch (Exception $e) {}
$entityDocTypes = array_filter($documentTypes, fn($d) => in_array(strtoupper($d['level'] ?? ''), ['ENTITY', 'BOTH', '']));
$personDocTypes = array_filter($documentTypes, fn($d) => in_array(strtoupper($d['level'] ?? ''), ['PERSON', 'BOTH']));

// Stats
$totalContribution = array_sum(array_column($persons, 'capital_contribution'));
$indianResidents = count(array_filter($persons, fn($p) => ($p['is_indian_resident'] ?? 1) == 1));

// Portal URL
$portalUrl = '';
if (!empty($client['portal_token'])) {
    $baseUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . ($_SERVER['HTTP_HOST'] ?? 'localhost');
    $portalUrl = $baseUrl . '/patron/public/portal.php?token=' . $client['portal_token'];
}

$color = $settings['color'];

require_once 'includes/header.php';
?>

<style>
.tab-btn { transition: all 0.2s; border-bottom: 3px solid transparent; }
.tab-btn:hover { background: #f3f4f6; }
.tab-btn.active { border-color: #3b82f6; background: #eff6ff; font-weight: 600; }
.person-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.1); transform: translateY(-2px); }
.person-card { transition: all 0.2s; }
</style>

<!-- Breadcrumb & Actions -->
<div class="mb-6 flex items-center justify-between flex-wrap gap-4">
    <a href="clients.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Clients
    </a>
    <div class="flex gap-2">
        <button onclick="openUploadModal()" class="btn btn-secondary text-sm"><i class="fas fa-upload mr-1"></i> Upload</button>
        <a href="edit_client.php?id=<?= $clientId ?>" class="btn btn-secondary text-sm"><i class="fas fa-edit mr-1"></i> Edit</a>
        <a href="add_request.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm"><i class="fas fa-plus mr-1"></i> New Service</a>
    </div>
</div>

<!-- Header Card -->
<div class="card p-6 mb-6 bg-gradient-to-r from-<?= $color ?>-50 to-white border-l-4 border-<?= $color ?>-500">
    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="flex items-start gap-4">
            <div class="w-16 h-16 bg-gradient-to-br from-<?= $color ?>-500 to-<?= $color ?>-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg">
                <i class="fas <?= $settings['icon'] ?>"></i>
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($client['name']) ?></h1>
                <div class="flex flex-wrap items-center gap-2 mt-2">
                    <span class="px-3 py-1 bg-<?= $color ?>-100 text-<?= $color ?>-700 rounded-full text-sm font-medium">
                        <i class="fas <?= $settings['icon'] ?> mr-1"></i><?= $entityConfig['short_label'] ?? $entityType ?>
                    </span>
                    
                    <?php if (in_array($entityType, ['PVT_LTD', 'OPC']) && !empty($client['cin'])): ?>
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-mono">CIN: <?= htmlspecialchars($client['cin']) ?></span>
                    <?php elseif ($entityType === 'LLP' && !empty($client['llpin'])): ?>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-mono">LLPIN: <?= htmlspecialchars($client['llpin']) ?></span>
                    <?php endif; ?>
                    
                    <?php if (!empty($client['pan'])): ?>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-mono">PAN: <?= htmlspecialchars($client['pan']) ?></span>
                    <?php endif; ?>
                    
                    <?php if (!empty($client['gstin'])): ?>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm font-mono">GST: <?= htmlspecialchars($client['gstin']) ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="flex flex-wrap items-center gap-4 mt-3 text-sm">
                    <?php if (!empty($client['mobile'])): ?>
                    <a href="tel:<?= $client['mobile'] ?>" class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-phone text-green-500 mr-1"></i><?= htmlspecialchars($client['mobile']) ?>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($client['email'])): ?>
                    <a href="mailto:<?= $client['email'] ?>" class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-envelope text-blue-500 mr-1"></i><?= htmlspecialchars($client['email']) ?>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($client['incorporation_date'])): ?>
                    <span class="text-gray-500">
                        <i class="fas fa-calendar text-gray-400 mr-1"></i>
                        <?= $isProprietorship ? 'Since' : 'Incorporated' ?>: <?= date('d M Y', strtotime($client['incorporation_date'])) ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="text-right">
            <?php 
            $statusColors = [
                'DRAFT' => 'bg-gray-100 text-gray-600', 'DOCUMENTS_PENDING' => 'bg-amber-100 text-amber-700',
                'UNDER_PROCESS' => 'bg-blue-100 text-blue-700', 'INCORPORATED' => 'bg-green-100 text-green-700'
            ];
            $status = $client['incorporation_status'] ?? 'DRAFT';
            ?>
            <span class="px-4 py-2 rounded-full text-sm font-medium <?= $statusColors[$status] ?? 'bg-gray-100' ?>">
                <?= str_replace('_', ' ', $status) ?>
            </span>
        </div>
    </div>
</div>

<?php if ($isProprietorship && !empty($persons)): ?>
<!-- Proprietor Info (Inline for Proprietorship) -->
<?php $proprietor = $persons[0] ?? null; ?>
<?php if ($proprietor): ?>
<div class="card p-6 mb-6 border-l-4 border-amber-400 bg-gradient-to-r from-amber-50 to-white">
    <div class="flex items-center gap-2 mb-4">
        <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center text-white">
            <i class="fas fa-user-tie"></i>
        </div>
        <div>
            <h3 class="font-semibold text-gray-900">Proprietor Details</h3>
            <span class="text-xs text-amber-600">Business Owner - PAN is shared with business</span>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <p class="text-xs text-gray-500 uppercase tracking-wider">Name</p>
            <p class="font-semibold text-gray-900"><?= htmlspecialchars($proprietor['full_name']) ?></p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase tracking-wider">PAN <span class="text-amber-500">(Business PAN)</span></p>
            <p class="font-mono text-gray-900"><?= htmlspecialchars($proprietor['pan_number'] ?? $client['pan'] ?? '-') ?></p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase tracking-wider">Mobile</p>
            <p class="text-gray-900"><?= htmlspecialchars($proprietor['mobile'] ?? '-') ?></p>
        </div>
        <div>
            <p class="text-xs text-gray-500 uppercase tracking-wider">Email</p>
            <p class="text-gray-900"><?= htmlspecialchars($proprietor['email'] ?? '-') ?></p>
        </div>
    </div>
    <div class="mt-4 pt-4 border-t border-amber-200">
        <a href="person_documents.php?id=<?= $proprietor['person_id'] ?>" class="text-amber-600 hover:text-amber-700 text-sm font-medium">
            <i class="fas fa-file-alt mr-1"></i> View KYC Documents
        </a>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-<?= $isProprietorship ? '4' : '5' ?> gap-4 mb-6">
    <?php if (!$isProprietorship): ?>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-<?= $color ?>-600"><?= count($persons) ?></p>
        <p class="text-xs text-gray-500"><?= $settings['people_term'] ?? 'People' ?></p>
    </div>
    <?php endif; ?>
    
    <?php if ($settings['show_capital']): ?>
        <?php if (in_array($entityType, ['PVT_LTD', 'OPC'])): ?>
        <div class="card p-4 text-center">
            <p class="text-2xl font-bold text-green-600">₹<?= number_format($client['authorized_capital'] ?? 0) ?></p>
            <p class="text-xs text-gray-500">Authorized Capital</p>
        </div>
        <div class="card p-4 text-center">
            <p class="text-2xl font-bold text-blue-600">₹<?= number_format($client['paid_up_capital'] ?? 0) ?></p>
            <p class="text-xs text-gray-500">Paid-up Capital</p>
        </div>
        <?php else: ?>
        <div class="card p-4 text-center">
            <p class="text-2xl font-bold text-purple-600">₹<?= number_format($client['total_contribution'] ?? $totalContribution) ?></p>
            <p class="text-xs text-gray-500"><?= $settings['capital_label'] ?? 'Total Contribution' ?></p>
        </div>
        <?php endif; ?>
    <?php endif; ?>
    
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-amber-600"><?= count($requests) ?></p>
        <p class="text-xs text-gray-500">Services</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-indigo-600"><?= count($entityDocuments) ?></p>
        <p class="text-xs text-gray-500"><?= $settings['term'] ?> Docs</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-2xl font-bold text-cyan-600"><?= count($certificates) ?></p>
        <p class="text-xs text-gray-500">Certificates</p>
    </div>
</div>

<!-- Portal Link -->
<?php if ($portalUrl): ?>
<div class="card p-4 mb-6 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200">
    <div class="flex items-center justify-between flex-wrap gap-4">
        <div>
            <p class="font-medium text-blue-800"><i class="fas fa-link mr-2"></i>Client Portal</p>
            <p class="text-sm text-blue-600 mt-1 font-mono truncate max-w-md"><?= htmlspecialchars($portalUrl) ?></p>
        </div>
        <div class="flex gap-2">
            <button onclick="copyToClipboard('<?= $portalUrl ?>')" class="btn btn-secondary text-sm" id="copyBtn">
                <i class="fas fa-copy mr-1"></i> Copy
            </button>
            <a href="https://wa.me/?text=<?= urlencode('Please upload documents: ' . $portalUrl) ?>" target="_blank" class="btn bg-green-500 text-white hover:bg-green-600 text-sm">
                <i class="fab fa-whatsapp mr-1"></i> Share
            </a>
        </div>
    </div>
</div>
<?php else: ?>
<div class="card p-4 mb-6 bg-gray-50 border border-gray-200">
    <div class="flex items-center justify-between flex-wrap gap-4">
        <div>
            <p class="font-medium text-gray-700"><i class="fas fa-link mr-2 text-gray-400"></i>Client Portal</p>
            <p class="text-sm text-gray-500 mt-1">No portal link generated yet</p>
        </div>
        <form method="POST" class="inline">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="generate_portal_token">
            <button type="submit" class="btn btn-primary text-sm">
                <i class="fas fa-magic mr-1"></i> Generate Portal Link
            </button>
        </form>
    </div>
</div>
<?php endif; ?>

<!-- Tabs -->
<div class="card mb-6">
    <div class="flex overflow-x-auto border-b">
        <a href="?id=<?= $clientId ?>&tab=overview" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'overview' ? 'active' : '' ?>">
            <i class="fas fa-th-large mr-2"></i>Overview
        </a>
        <?php if ($settings['show_people_tab']): ?>
        <a href="?id=<?= $clientId ?>&tab=people" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'people' ? 'active' : '' ?>">
            <i class="fas fa-users mr-2"></i><?= $settings['people_term'] ?>
            <span class="ml-1 px-2 py-0.5 bg-gray-200 rounded-full text-xs"><?= count($persons) ?></span>
        </a>
        <?php endif; ?>
        <a href="?id=<?= $clientId ?>&tab=documents" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'documents' ? 'active' : '' ?>">
            <i class="fas fa-file-alt mr-2"></i>Documents
        </a>
        <a href="?id=<?= $clientId ?>&tab=certificates" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'certificates' ? 'active' : '' ?>">
            <i class="fas fa-certificate mr-2"></i>Certificates
        </a>
        <a href="?id=<?= $clientId ?>&tab=services" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'services' ? 'active' : '' ?>">
            <i class="fas fa-clipboard-list mr-2"></i>Services
        </a>
        <a href="?id=<?= $clientId ?>&tab=billing" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'billing' ? 'active' : '' ?>">
            <i class="fas fa-file-invoice-dollar mr-2 text-emerald-500"></i>Billing
        </a>
        <a href="?id=<?= $clientId ?>&tab=compliance" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'compliance' ? 'active' : '' ?>">
            <i class="fas fa-tasks mr-2 text-green-600"></i>Compliance
        </a>
        <a href="?id=<?= $clientId ?>&tab=passwords" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'passwords' ? 'active' : '' ?>">
            <i class="fas fa-key mr-2 text-amber-500"></i>Passwords
        </a>
        <a href="?id=<?= $clientId ?>&tab=team" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'team' ? 'active' : '' ?>">
            <i class="fas fa-user-friends mr-2 text-indigo-500"></i>Team
        </a>
        <a href="?id=<?= $clientId ?>&tab=roc" class="tab-btn px-6 py-4 text-sm whitespace-nowrap <?= $activeTab === 'roc' ? 'active' : '' ?>">
            <i class="fas fa-file-contract mr-2 text-purple-500"></i>ROC
        </a>
    </div>
</div>

<!-- Tab Content -->
<?php if ($activeTab === 'overview'): ?>
<!-- Overview Tab -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <!-- Registration Info -->
        <div class="card">
            <div class="p-4 border-b bg-gray-50">
                <h3 class="font-semibold"><i class="fas fa-id-card text-blue-500 mr-2"></i><?= $settings['term'] ?> Registration</h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">
                    <?php if ($entityType === 'PVT_LTD' || $entityType === 'OPC'): ?>
                    <div><p class="text-xs text-gray-500">CIN</p><p class="font-mono"><?= htmlspecialchars($client['cin'] ?? '-') ?></p></div>
                    <?php elseif ($entityType === 'LLP'): ?>
                    <div><p class="text-xs text-gray-500">LLPIN</p><p class="font-mono"><?= htmlspecialchars($client['llpin'] ?? '-') ?></p></div>
                    <?php elseif ($entityType === 'PARTNERSHIP'): ?>
                    <div><p class="text-xs text-gray-500">Firm Reg. No.</p><p class="font-mono"><?= htmlspecialchars($client['firm_registration_no'] ?? '-') ?></p></div>
                    <?php endif; ?>
                    
                    <div><p class="text-xs text-gray-500"><?= $isProprietorship ? 'PAN' : $settings['term'] . ' PAN' ?></p><p class="font-mono"><?= htmlspecialchars($client['pan'] ?? '-') ?></p></div>
                    
                    <?php if (!empty($client['tan'])): ?>
                    <div><p class="text-xs text-gray-500">TAN</p><p class="font-mono"><?= htmlspecialchars($client['tan']) ?></p></div>
                    <?php endif; ?>
                    
                    <div><p class="text-xs text-gray-500">GSTIN</p><p class="font-mono"><?= htmlspecialchars($client['gstin'] ?? '-') ?></p></div>
                    
                    <div><p class="text-xs text-gray-500"><?= $isProprietorship ? 'Started' : 'Incorporated' ?></p><p><?= $client['incorporation_date'] ? date('d M Y', strtotime($client['incorporation_date'])) : '-' ?></p></div>
                </div>
            </div>
        </div>
        
        <!-- Recent Services -->
        <div class="card">
            <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
                <h3 class="font-semibold"><i class="fas fa-tasks text-amber-500 mr-2"></i>Recent Services</h3>
                <a href="add_request.php?client_id=<?= $clientId ?>" class="text-sm text-blue-600 hover:underline">+ New</a>
            </div>
            <?php if (empty($requests)): ?>
            <div class="p-8 text-center text-gray-500">
                <i class="fas fa-clipboard-list text-4xl text-gray-300 mb-2"></i>
                <p>No service requests yet</p>
            </div>
            <?php else: ?>
            <div class="divide-y">
                <?php foreach (array_slice($requests, 0, 5) as $req): ?>
                <div class="p-4 hover:bg-gray-50 flex justify-between items-center">
                    <div>
                        <p class="font-medium"><?= htmlspecialchars($req['service_name']) ?></p>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($req['created_at'])) ?></p>
                    </div>
                    <?php $statusColors = ['PENDING' => 'bg-gray-100 text-gray-600', 'IN_PROGRESS' => 'bg-blue-100 text-blue-700', 'COMPLETED' => 'bg-green-100 text-green-700']; ?>
                    <span class="px-2 py-1 rounded text-xs <?= $statusColors[$req['status']] ?? 'bg-gray-100' ?>"><?= $req['status'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <?php if ($office): ?>
        <div class="card p-4">
            <h4 class="font-semibold mb-3"><i class="fas fa-map-marker-alt text-red-500 mr-2"></i><?= $isProprietorship ? 'Business Address' : 'Registered Office' ?></h4>
            <p class="text-sm text-gray-700">
                <?= htmlspecialchars($office['address_line1']) ?><br>
                <?php if (!empty($office['address_line2'])): ?><?= htmlspecialchars($office['address_line2']) ?><br><?php endif; ?>
                <?= htmlspecialchars($office['city']) ?>, <?= htmlspecialchars($office['state']) ?> - <?= htmlspecialchars($office['pincode']) ?>
            </p>
            <p class="text-xs text-gray-500 mt-2"><i class="fas fa-home mr-1"></i><?= ucfirst(strtolower($office['ownership_type'] ?? 'Rented')) ?></p>
        </div>
        <?php endif; ?>
        
        <!-- Team Assignment -->
        <div class="card p-4">
            <div class="flex items-center justify-between mb-3">
                <h4 class="font-semibold"><i class="fas fa-user-friends text-indigo-500 mr-2"></i>Team</h4>
                <a href="?id=<?= $clientId ?>&tab=team" class="text-xs text-blue-600 hover:underline">Edit</a>
            </div>
            <?php if ($clientTeam): ?>
            <div class="space-y-3 text-sm">
                <?php if ($clientTeam['executor_1_name']): ?>
                <div class="flex items-center gap-2">
                    <span class="w-20 text-xs text-gray-500">Executor 1</span>
                    <span class="flex-1 font-medium"><?= htmlspecialchars($clientTeam['executor_1_name']) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($clientTeam['executor_2_name']): ?>
                <div class="flex items-center gap-2">
                    <span class="w-20 text-xs text-gray-500">Executor 2</span>
                    <span class="flex-1 font-medium"><?= htmlspecialchars($clientTeam['executor_2_name']) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($clientTeam['reviewer_name']): ?>
                <div class="flex items-center gap-2">
                    <span class="w-20 text-xs text-gray-500">Reviewer</span>
                    <span class="flex-1 font-medium text-purple-600"><?= htmlspecialchars($clientTeam['reviewer_name']) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($clientTeam['manager_name']): ?>
                <div class="flex items-center gap-2">
                    <span class="w-20 text-xs text-gray-500">Manager</span>
                    <span class="flex-1 font-medium text-indigo-600"><?= htmlspecialchars($clientTeam['manager_name']) ?></span>
                </div>
                <?php endif; ?>
            </div>
            <?php else: ?>
            <p class="text-sm text-gray-400">No team assigned</p>
            <a href="?id=<?= $clientId ?>&tab=team" class="text-xs text-blue-600 hover:underline mt-2 inline-block">Assign Team →</a>
            <?php endif; ?>
        </div>
        
        <div class="card p-4">
            <h4 class="font-semibold mb-3"><i class="fas fa-info-circle text-blue-500 mr-2"></i>Quick Info</h4>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between"><span class="text-gray-500">Entity Type</span><span class="font-medium"><?= $entityConfig['short_label'] ?? $entityType ?></span></div>
                <div class="flex justify-between"><span class="text-gray-500">Status</span><span class="font-medium"><?= str_replace('_', ' ', $status) ?></span></div>
                <?php if (!$isProprietorship): ?>
                <div class="flex justify-between"><span class="text-gray-500"><?= $settings['people_term'] ?></span><span class="font-medium"><?= count($persons) ?></span></div>
                <?php if ($indianResidents > 0): ?>
                <div class="flex justify-between"><span class="text-gray-500">Indian Residents</span><span class="font-medium text-green-600"><?= $indianResidents ?></span></div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Expiring Certificates Alert -->
        <?php 
        $expiringCerts = array_filter($certificates, function($c) {
            return !empty($c['expiry_date']) && strtotime($c['expiry_date']) < strtotime('+30 days') && strtotime($c['expiry_date']) > time();
        });
        if (!empty($expiringCerts)): 
        ?>
        <div class="card p-4 bg-amber-50 border border-amber-200">
            <h4 class="font-semibold text-amber-800 mb-2"><i class="fas fa-exclamation-triangle mr-2"></i>Expiring Soon</h4>
            <?php foreach ($expiringCerts as $cert): ?>
            <p class="text-sm text-amber-700"><?= htmlspecialchars($cert['cert_type_name']) ?> - <?= date('d M Y', strtotime($cert['expiry_date'])) ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php elseif ($activeTab === 'people' && $settings['show_people_tab']): ?>
<!-- People Tab -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-users text-<?= $color ?>-500 mr-2"></i><?= $settings['people_term'] ?> (<?= count($persons) ?>)</h3>
        <div class="flex gap-2">
            <a href="common_directors_report.php" class="btn bg-indigo-50 text-indigo-700 hover:bg-indigo-100 text-xs"><i class="fas fa-project-diagram mr-1"></i>Common Directors</a>
            <button type="button" onclick="openLinkPersonModal()" class="btn bg-green-50 text-green-700 hover:bg-green-100 text-sm"><i class="fas fa-link mr-1"></i>Link Existing</button>
            <a href="add_person.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm"><i class="fas fa-plus mr-1"></i> Add New</a>
        </div>
    </div>
    
    <?php if (empty($persons)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-user-plus text-5xl text-gray-300 mb-3"></i>
        <p>No <?= strtolower($settings['people_term']) ?> added yet</p>
    </div>
    <?php else: ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
        <?php foreach ($persons as $person): 
            $dscInfo = getDSCStatusInfo($person);
            $kycInfo = getKYCStatusInfo($person);
            $personAge = calculateAge($person['dob'] ?? null);
            $roleColor = getRoleColor($person['role_type'] ?? 'DIRECTOR');
        ?>
        <div class="person-card p-4 border rounded-xl hover:border-<?= $color ?>-300">
            <!-- Header: Avatar + Name + Role -->
            <div class="flex items-start justify-between">
                <div class="flex items-center gap-3">
                    <?php if (!empty($person['photo_path'])): ?>
                    <img src="<?= htmlspecialchars($person['photo_path']) ?>" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                    <?php else: ?>
                    <div class="w-12 h-12 bg-<?= $color ?>-100 rounded-full flex items-center justify-center text-<?= $color ?>-600 font-bold">
                        <?= getPersonInitials($person['full_name'] ?? 'U') ?>
                    </div>
                    <?php endif; ?>
                    <div>
                        <a href="person_view.php?id=<?= $person['person_id'] ?>" class="font-semibold text-gray-900 hover:text-blue-600"><?= htmlspecialchars($person['full_name'] ?? 'Unknown') ?></a>
                        <div class="flex items-center gap-2 mt-0.5">
                            <?= getRoleBadgeHTML($person['role_type'] ?? '') ?>
                            <?php if (!empty($person['designation'])): ?>
                            <span class="text-xs text-gray-400">(<?= htmlspecialchars($person['designation']) ?>)</span>
                            <?php endif; ?>
                            <?php if (!empty($person['director_category'])): ?>
                            <span class="text-xs px-1.5 py-0.5 bg-gray-100 text-gray-600 rounded"><?= str_replace('_',' ',$person['director_category']) ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-1">
                    <a href="person_view.php?id=<?= $person['person_id'] ?>" class="p-1 text-gray-400 hover:text-blue-600" title="View Profile"><i class="fas fa-eye text-sm"></i></a>
                    <a href="edit_person.php?id=<?= $person['person_id'] ?>" class="p-1 text-gray-400 hover:text-green-600" title="Edit"><i class="fas fa-edit text-sm"></i></a>
                    <a href="person_documents.php?id=<?= $person['person_id'] ?>" class="p-1 text-gray-400 hover:text-purple-600" title="Documents"><i class="fas fa-file text-sm"></i></a>
                    <button type="button" onclick="confirmUnlink(<?= $person['id'] ?? 0 ?>, '<?= htmlspecialchars(addslashes($person['full_name'] ?? 'Unknown')) ?>')" class="p-1 text-gray-400 hover:text-red-600" title="Unlink from Client"><i class="fas fa-unlink text-sm"></i></button>
                </div>
            </div>
            
            <!-- Identity Row -->
            <div class="grid grid-cols-2 gap-2 mt-3 text-sm">
                <div><span class="text-gray-500">PAN:</span> <span class="font-mono"><?= htmlspecialchars($person['pan_number'] ?? '-') ?></span></div>
                <?php if ($entityConfig['requires_din'] && !empty($person['din'])): ?>
                <div><span class="text-gray-500">DIN:</span> <span class="font-mono text-blue-600"><?= htmlspecialchars($person['din']) ?></span></div>
                <?php elseif ($entityConfig['requires_dpin'] && !empty($person['dpin'])): ?>
                <div><span class="text-gray-500">DPIN:</span> <span class="font-mono text-purple-600"><?= htmlspecialchars($person['dpin']) ?></span></div>
                <?php endif; ?>
            </div>
            
            <!-- Appointment & Shareholding -->
            <div class="grid grid-cols-2 gap-2 mt-2 text-sm">
                <?php if (!empty($person['appointment_date'])): ?>
                <div><span class="text-gray-500">Appt:</span> <span class="font-medium"><?= date('d M Y', strtotime($person['appointment_date'])) ?></span></div>
                <?php endif; ?>
                <?php if (!empty($person['original_appointment_date']) && $person['original_appointment_date'] !== $person['appointment_date']): ?>
                <div><span class="text-gray-500">Original:</span> <span><?= date('d M Y', strtotime($person['original_appointment_date'])) ?></span></div>
                <?php endif; ?>
                <?php if (!empty($person['share_percentage'])): ?>
                <div><span class="text-gray-500"><?= in_array($entityType, ['LLP', 'PARTNERSHIP']) ? 'Profit' : 'Share' ?> %:</span> <span class="font-medium"><?= number_format($person['share_percentage'], 2) ?>%</span></div>
                <?php endif; ?>
                <?php if (!empty($person['no_of_shares'])): ?>
                <div><span class="text-gray-500">Shares:</span> <span class="font-medium"><?= number_format($person['no_of_shares']) ?> <?= $person['share_type'] ?? '' ?></span></div>
                <?php endif; ?>
                <?php if (!empty($person['capital_contribution'])): ?>
                <div><span class="text-gray-500">Capital:</span> <span class="font-medium">₹<?= number_format($person['capital_contribution']) ?></span></div>
                <?php endif; ?>
                <?php if (!empty($person['profit_sharing_ratio'])): ?>
                <div><span class="text-gray-500">Profit:</span> <span class="font-medium"><?= number_format($person['profit_sharing_ratio'], 2) ?>%</span></div>
                <?php endif; ?>
            </div>
            
            <!-- Contact + DSC/KYC Status Footer -->
            <div class="flex items-center justify-between mt-3 pt-3 border-t text-xs">
                <div class="flex items-center gap-3">
                    <?php if (!empty($person['mobile'])): ?>
                    <a href="tel:<?= $person['mobile'] ?>" class="text-gray-500 hover:text-blue-600"><i class="fas fa-phone mr-1"></i><?= htmlspecialchars($person['mobile']) ?></a>
                    <?php endif; ?>
                    <?php if ($personAge): ?>
                    <span class="text-gray-400"><?= $personAge ?> yr</span>
                    <?php endif; ?>
                </div>
                <div class="flex items-center gap-2">
                    <?php if ($entityConfig['requires_dsc']): ?>
                    <span class="px-2 py-0.5 rounded bg-<?= $dscInfo['color'] ?>-100 text-<?= $dscInfo['color'] ?>-700" title="DSC: <?= $dscInfo['label'] ?><?= $person['dsc_expiry_date'] ? ' (Exp: '.date('d M Y', strtotime($person['dsc_expiry_date'])).')' : '' ?>">
                        <i class="fas fa-key mr-0.5"></i><?= $dscInfo['short'] ?? $dscInfo['label'] ?>
                    </span>
                    <?php endif; ?>
                    <?php if (!empty($person['din'])): ?>
                    <span class="px-2 py-0.5 rounded bg-<?= $kycInfo['color'] ?>-100 text-<?= $kycInfo['color'] ?>-700" title="KYC: <?= $kycInfo['label'] ?>">
                        <i class="fas fa-clipboard-check mr-0.5"></i><?= $kycInfo['short'] ?? $kycInfo['label'] ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?php elseif ($activeTab === 'documents'): ?>
<!-- Documents Tab -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-file-alt text-indigo-500 mr-2"></i><?= $settings['term'] ?> Documents</h3>
        <button onclick="openUploadModal()" class="btn btn-primary text-sm"><i class="fas fa-upload mr-1"></i> Upload</button>
    </div>
    
    <?php if (empty($entityDocuments)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-folder-open text-5xl text-gray-300 mb-3"></i>
        <p>No documents uploaded yet</p>
        <button onclick="openUploadModal()" class="btn btn-primary mt-4"><i class="fas fa-upload mr-1"></i> Upload Document</button>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Document</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Uploaded</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">File</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($entityDocuments as $doc): 
                    $ext = strtolower(pathinfo($doc['file_path'] ?? $doc['original_filename'] ?? '', PATHINFO_EXTENSION));
                    $hasFile = !empty($doc['file_path']);
                    
                    // File type icon and color
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                        $fileIcon = 'fa-file-image';
                        $fileColor = 'purple';
                    } elseif ($ext === 'pdf') {
                        $fileIcon = 'fa-file-pdf';
                        $fileColor = 'red';
                    } elseif (in_array($ext, ['doc', 'docx'])) {
                        $fileIcon = 'fa-file-word';
                        $fileColor = 'blue';
                    } elseif (in_array($ext, ['xls', 'xlsx'])) {
                        $fileIcon = 'fa-file-excel';
                        $fileColor = 'green';
                    } else {
                        $fileIcon = 'fa-file';
                        $fileColor = 'gray';
                    }
                    
                    // Status colors
                    $statusConfig = [
                        'PENDING' => ['bg' => 'bg-gray-100', 'text' => 'text-gray-600', 'icon' => 'fa-clock'],
                        'UPLOADED' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => 'fa-cloud-upload-alt'],
                        'VERIFIED' => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'icon' => 'fa-check-circle'],
                        'APPROVED' => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'icon' => 'fa-check-double'],
                        'REJECTED' => ['bg' => 'bg-red-100', 'text' => 'text-red-700', 'icon' => 'fa-times-circle'],
                    ];
                    $status = $doc['status'] ?? 'UPLOADED';
                    $statusStyle = $statusConfig[$status] ?? $statusConfig['UPLOADED'];
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-<?= $fileColor ?>-100 rounded-lg flex items-center justify-center">
                                <i class="fas <?= $fileIcon ?> text-<?= $fileColor ?>-500"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($doc['doc_name'] ?? 'Document') ?></p>
                                <?php if (!empty($doc['original_filename'])): ?>
                                <p class="text-xs text-gray-400 truncate max-w-[200px]" title="<?= htmlspecialchars($doc['original_filename']) ?>">
                                    <?= htmlspecialchars($doc['original_filename']) ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <p class="text-sm text-gray-600"><?= date('d M Y', strtotime($doc['created_at'])) ?></p>
                        <p class="text-xs text-gray-400"><?= date('h:i A', strtotime($doc['created_at'])) ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs <?= $statusStyle['bg'] ?> <?= $statusStyle['text'] ?>">
                            <i class="fas <?= $statusStyle['icon'] ?>"></i>
                            <?= $status ?>
                        </span>
                        <?php if ($status === 'REJECTED' && !empty($doc['rejection_reason'])): ?>
                        <p class="text-xs text-red-500 mt-1" title="<?= htmlspecialchars($doc['rejection_reason']) ?>">
                            <i class="fas fa-info-circle"></i> <?= htmlspecialchars(substr($doc['rejection_reason'], 0, 30)) ?>...
                        </p>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($hasFile): ?>
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-<?= $fileColor ?>-50 text-<?= $fileColor ?>-600 rounded text-xs">
                            <i class="fas <?= $fileIcon ?>"></i>
                            <?= strtoupper($ext) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400 text-xs">No file</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-1">
                            <?php if ($hasFile): ?>
                            <!-- View -->
                            <a href="document_file.php?id=<?= $doc['id'] ?>&action=view" target="_blank" 
                               class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <!-- Download -->
                            <a href="document_file.php?id=<?= $doc['id'] ?>&action=download" 
                               class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Download">
                                <i class="fas fa-download"></i>
                            </a>
                            <?php endif; ?>
                            <!-- Delete -->
                            <form method="POST" action="delete_document.php" class="inline" onsubmit="return confirm('Delete this document?');">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="document_id" value="<?= $doc['id'] ?>">
                                <input type="hidden" name="client_id" value="<?= $clientId ?>">
                                <button type="submit" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php elseif ($activeTab === 'certificates'): ?>
<!-- Certificates Tab -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-certificate text-amber-500 mr-2"></i>Certificates & Registrations</h3>
        <div class="flex gap-2">
            <?php if (!empty($certificates)): ?>
            <a href="download_certificates.php?client_id=<?= $clientId ?>" class="btn btn-secondary text-sm" title="Download All as ZIP">
                <i class="fas fa-download mr-1"></i>Download All
            </a>
            <?php endif; ?>
            <a href="add_certificate.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm"><i class="fas fa-plus mr-1"></i> Add</a>
        </div>
    </div>
    
    <?php if (empty($certificates)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-award text-5xl text-gray-300 mb-3"></i>
        <p>No certificates added yet</p>
        <a href="add_certificate.php?client_id=<?= $clientId ?>" class="btn btn-primary mt-4"><i class="fas fa-plus mr-1"></i>Add Certificate</a>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Certificate</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Number</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Issue Date</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Expiry</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">File</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($certificates as $cert): 
                    $isExpired = !empty($cert['expiry_date']) && strtotime($cert['expiry_date']) < time();
                    $isExpiringSoon = !empty($cert['expiry_date']) && !$isExpired && strtotime($cert['expiry_date']) < strtotime('+30 days');
                    
                    // Check file exists with multiple path formats
                    $certFilePath = $cert['file_path'] ?? '';
                    $hasFile = false;
                    $fileExt = '';
                    if (!empty($certFilePath)) {
                        // Try different path resolutions
                        $pathsToTry = [
                            $certFilePath,
                            ltrim($certFilePath, './'),
                            str_replace('../', '', $certFilePath),
                        ];
                        foreach ($pathsToTry as $tryPath) {
                            if (file_exists($tryPath)) {
                                $hasFile = true;
                                $fileExt = strtolower(pathinfo($tryPath, PATHINFO_EXTENSION));
                                break;
                            }
                        }
                        // If still not found but path looks valid, trust it (file handler will resolve)
                        if (!$hasFile && preg_match('/\.(pdf|jpg|jpeg|png|gif)$/i', $certFilePath)) {
                            $hasFile = true;
                            $fileExt = strtolower(pathinfo($certFilePath, PATHINFO_EXTENSION));
                        }
                    }
                ?>
                <tr class="hover:bg-gray-50 <?= $isExpired ? 'bg-red-50' : ($isExpiringSoon ? 'bg-amber-50' : '') ?>">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($cert['cert_type_name']) ?></p>
                        <?php if (!empty($cert['issuing_authority'])): ?>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($cert['issuing_authority']) ?></p>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <span class="font-mono text-sm"><?= htmlspecialchars($cert['certificate_number'] ?? '-') ?></span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        <?= !empty($cert['issue_date']) ? date('d M Y', strtotime($cert['issue_date'])) : '-' ?>
                    </td>
                    <td class="px-4 py-3">
                        <?php if (!empty($cert['expiry_date'])): ?>
                        <span class="text-sm <?= $isExpired ? 'text-red-600 font-medium' : ($isExpiringSoon ? 'text-amber-600 font-medium' : 'text-gray-600') ?>">
                            <?php if ($isExpired): ?>
                            <i class="fas fa-exclamation-circle mr-1"></i>Expired
                            <?php elseif ($isExpiringSoon): ?>
                            <i class="fas fa-clock mr-1"></i>Soon
                            <?php endif; ?>
                            <?= date('d M Y', strtotime($cert['expiry_date'])) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-sm text-green-600"><i class="fas fa-infinity mr-1"></i>Lifetime</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($hasFile): ?>
                        <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700">
                            <?php if (in_array($fileExt, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                            <i class="fas fa-image mr-1"></i>
                            <?php elseif ($fileExt === 'pdf'): ?>
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?php else: ?>
                            <i class="fas fa-file mr-1"></i>
                            <?php endif; ?>
                            <?= strtoupper($fileExt) ?>
                        </span>
                        <?php else: ?>
                        <span class="text-gray-400 text-xs"><i class="fas fa-file-circle-xmark mr-1"></i>No file</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-1">
                            <?php if ($hasFile): ?>
                            <a href="certificate_file.php?id=<?= $cert['id'] ?>&action=view" target="_blank" 
                               class="p-2 text-indigo-600 hover:bg-indigo-50 rounded" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="certificate_file.php?id=<?= $cert['id'] ?>&action=download" 
                               class="p-2 text-green-600 hover:bg-green-50 rounded" title="Download">
                                <i class="fas fa-download"></i>
                            </a>
                            <?php endif; ?>
                            <a href="edit_certificate.php?id=<?= $cert['id'] ?>" 
                               class="p-2 text-amber-600 hover:bg-amber-50 rounded" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="delete_certificate.php" class="inline" onsubmit="return confirm('Delete this certificate?')">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="certificate_id" value="<?= $cert['id'] ?>">
                                <input type="hidden" name="client_id" value="<?= $clientId ?>">
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php elseif ($activeTab === 'services'): ?>
<!-- Services Tab -->
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
        <h3 class="font-semibold"><i class="fas fa-tasks text-green-500 mr-2"></i>Service Requests</h3>
        <a href="add_request.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm"><i class="fas fa-plus mr-1"></i> New Request</a>
    </div>
    
    <?php if (empty($requests)): ?>
    <div class="p-8 text-center text-gray-500">
        <i class="fas fa-clipboard-list text-5xl text-gray-300 mb-3"></i>
        <p>No service requests yet</p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Service</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Assigned</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Date</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($requests as $req): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($req['service_name']) ?></td>
                    <td class="px-4 py-3">
                        <?php $statusColors = ['PENDING' => 'bg-gray-100 text-gray-600', 'IN_PROGRESS' => 'bg-blue-100 text-blue-700', 'COMPLETED' => 'bg-green-100 text-green-700']; ?>
                        <span class="px-2 py-1 rounded text-xs <?= $statusColors[$req['status']] ?? 'bg-gray-100' ?>"><?= $req['status'] ?></span>
                    </td>
                    <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars($req['assigned_name'] ?? '-') ?></td>
                    <td class="px-4 py-3 text-gray-500 text-sm"><?= date('d M Y', strtotime($req['created_at'])) ?></td>
                    <td class="px-4 py-3 text-center">
                        <a href="view_request.php?id=<?= $req['id'] ?>" class="text-blue-600 hover:underline text-sm">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if ($activeTab === 'billing'): ?>
<!-- Billing Tab -->
<?php
// Check Zoho connection
$zohoConnected = false;
try {
    $zohoSetting = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoSetting['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}
?>
<div class="card p-6">
    <?php if (!$zohoConnected): ?>
    <div class="text-center py-12">
        <i class="fas fa-link-slash text-5xl text-gray-300 mb-4"></i>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Zoho Books Not Connected</h3>
        <p class="text-gray-500 mb-4">Connect to Zoho Books to see invoices, estimates and payments.</p>
        <?php if (isAdmin()): ?>
        <a href="zoho_settings.php" class="btn btn-primary">
            <i class="fas fa-cog mr-2"></i>Configure Zoho
        </a>
        <?php endif; ?>
    </div>
    <?php else: ?>
    <?php include 'includes/client_billing_tab.php'; ?>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if ($activeTab === 'compliance'): ?>
<!-- Compliance Tab -->
<?php
// Get enabled compliances for this client (currently mapped) with due date info
$clientCompliances = dbFetchAll("
    SELECT cc.*, ct.id as type_id, ct.name, ct.code, ct.category, ct.frequency, ct.icon, ct.color, ct.description,
           ct.due_day, ct.due_month_offset,
           u.display_name as assigned_name
    FROM client_compliances cc
    JOIN compliance_types ct ON cc.compliance_type_id = ct.id
    LEFT JOIN users u ON cc.default_assigned_to = u.id
    WHERE cc.client_id = ? AND cc.is_active = 1 AND ct.deleted_at IS NULL
    ORDER BY ct.category, ct.sort_order
", [$clientId]) ?: [];

// Get compliance type IDs that are currently mapped
$mappedTypeIds = array_column($clientCompliances, 'type_id');

// Calculate counts for each mapped compliance
foreach ($clientCompliances as &$cc) {
    $counts = dbFetchOne("
        SELECT 
            COUNT(*) as entries_count,
            SUM(CASE WHEN UPPER(status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE') THEN 1 ELSE 0 END) as pending_count
        FROM compliance_tracker 
        WHERE client_id = ? AND compliance_type_id = ?
    ", [$clientId, $cc['type_id']]);
    $cc['entries_count'] = $counts['entries_count'] ?? 0;
    $cc['pending_count'] = $counts['pending_count'] ?? 0;
}
unset($cc);

// Group compliances by frequency for summary
$complianceByFrequency = [
    'MONTHLY' => [],
    'QUARTERLY' => [],
    'HALF_YEARLY' => [],
    'YEARLY' => [],
    'EVENT_BASED' => []
];
$complianceByCategory = [];

foreach ($clientCompliances as $cc) {
    $freq = $cc['frequency'] ?? 'YEARLY';
    if (isset($complianceByFrequency[$freq])) {
        $complianceByFrequency[$freq][] = $cc;
    }
    
    $cat = $cc['category'] ?? 'OTHER';
    if (!isset($complianceByCategory[$cat])) {
        $complianceByCategory[$cat] = [];
    }
    $complianceByCategory[$cat][] = $cc;
}

// Get compliance entries ONLY for currently mapped compliances
$today = date('Y-m-d');
$recentEntries = [];
if (!empty($mappedTypeIds)) {
    $placeholders = implode(',', array_fill(0, count($mappedTypeIds), '?'));
    $params = array_merge([$clientId], $mappedTypeIds, [$today]);
    
    $recentEntries = dbFetchAll("
        SELECT ctr.*, ct.name as compliance_name, ct.code, ct.icon, ct.color
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        WHERE ctr.client_id = ?
        AND ctr.compliance_type_id IN ($placeholders)
        AND (
            -- Show pending entries (not filed)
            UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')
            -- Or recently filed (last 30 days)
            OR (UPPER(ctr.status) IN ('FILED', 'FILED_LATE') AND ctr.filed_date >= DATE_SUB(?, INTERVAL 30 DAY))
        )
        ORDER BY 
            CASE WHEN UPPER(ctr.status) IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE') THEN 1 ELSE 0 END,
            ctr.due_date ASC
        LIMIT 20
    ", $params) ?: [];
}

// Check for orphaned entries (entries for unmapped compliances)
$orphanedEntries = dbFetchAll("
    SELECT ctr.*, ct.name as compliance_name, ct.code, ct.icon, ct.color
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    LEFT JOIN client_compliances cc ON cc.client_id = ctr.client_id AND cc.compliance_type_id = ctr.compliance_type_id AND cc.is_active = 1
    WHERE ctr.client_id = ?
    AND cc.id IS NULL
    AND UPPER(ctr.status) NOT IN ('FILED', 'FILED_LATE', 'NOT_APPLICABLE')
    ORDER BY ctr.due_date ASC
", [$clientId]) ?: [];

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue'],
    'TDS' => ['label' => 'TDS', 'color' => 'green'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber'],
    'ROC' => ['label' => 'ROC', 'color' => 'purple'],
    'PF_ESI' => ['label' => 'PF/ESI', 'color' => 'teal'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray']
];

$frequencies = ['MONTHLY' => 'Monthly', 'QUARTERLY' => 'Quarterly', 'HALF_YEARLY' => 'Half Yearly', 'YEARLY' => 'Yearly'];

$statuses = [
    'NOT_STARTED' => ['label' => 'Not Started', 'color' => 'gray'],
    'DATA_REQUESTED' => ['label' => 'Data Requested', 'color' => 'amber'],
    'DATA_RECEIVED' => ['label' => 'Data Received', 'color' => 'blue'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'color' => 'blue'],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'color' => 'purple'],
    'READY_TO_FILE' => ['label' => 'Ready to File', 'color' => 'cyan'],
    'FILED' => ['label' => 'Filed', 'color' => 'green'],
    'FILED_LATE' => ['label' => 'Filed Late', 'color' => 'red'],
    'NOT_APPLICABLE' => ['label' => 'N/A', 'color' => 'gray'],
];
?>

<div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold"><i class="fas fa-tasks text-green-600 mr-2"></i>Compliance Management</h2>
    <a href="client_compliances.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm">
        <i class="fas fa-cog mr-1"></i>Setup Compliances
    </a>
</div>

<?php if (!empty($orphanedEntries)): ?>
<!-- Warning: Orphaned Entries -->
<div class="card mb-4 border-amber-300 bg-amber-50">
    <div class="p-4">
        <div class="flex items-start gap-3">
            <i class="fas fa-exclamation-triangle text-amber-600 mt-1"></i>
            <div class="flex-1">
                <h4 class="font-semibold text-amber-800">Orphaned Compliance Entries Found</h4>
                <p class="text-sm text-amber-700 mt-1">
                    There are <?= count($orphanedEntries) ?> pending entries for compliances that are no longer mapped to this client.
                    These entries will not appear in cards but still exist in the system.
                </p>
                <div class="mt-2 text-sm">
                    <strong>Affected:</strong>
                    <?php 
                    $orphanedTypes = array_unique(array_column($orphanedEntries, 'compliance_name'));
                    echo implode(', ', $orphanedTypes);
                    ?>
                </div>
                <div class="mt-3 flex gap-2">
                    <a href="compliance_tracker.php?client_id=<?= $clientId ?>&view=all" class="text-sm text-amber-800 underline">View in Tracker</a>
                    <span class="text-amber-400">|</span>
                    <a href="client_compliances.php?client_id=<?= $clientId ?>" class="text-sm text-amber-800 underline">Re-map Compliances</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (empty($clientCompliances)): ?>
<div class="card p-8 text-center">
    <i class="fas fa-clipboard-check text-4xl text-gray-300 mb-3"></i>
    <h3 class="font-semibold text-gray-700 mb-2">No Compliances Configured</h3>
    <p class="text-gray-500 text-sm mb-4">Set up recurring compliances for this client to track GST, TDS, ROC filings, etc.</p>
    <a href="client_compliances.php?client_id=<?= $clientId ?>" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>Setup Compliances
    </a>
</div>
<?php else: ?>

<!-- Compliance Requirements Summary (Checklist by Category) -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gradient-to-r from-green-50 to-teal-50 flex items-center justify-between">
        <div>
            <h3 class="font-semibold text-gray-800"><i class="fas fa-clipboard-list text-green-600 mr-2"></i>Compliance Requirements</h3>
            <p class="text-xs text-gray-500 mt-1">Complete list of applicable compliances for this client</p>
        </div>
        <a href="compliance_summary_pdf.php?client_id=<?= $clientId ?>" target="_blank" class="btn btn-sm btn-secondary">
            <i class="fas fa-download mr-1"></i>Download PDF
        </a>
    </div>
    <div class="p-4">
        <?php 
        $categoryMeta = [
            'GST' => ['label' => 'GST Compliances', 'icon' => 'fa-file-invoice', 'color' => 'blue', 'identifier' => 'GSTIN: ' . ($client['gstin'] ?? 'Not Available')],
            'TDS' => ['label' => 'TDS Compliances', 'icon' => 'fa-hand-holding-usd', 'color' => 'green', 'identifier' => 'TAN: ' . ($client['tan'] ?? 'Not Available')],
            'INCOME_TAX' => ['label' => 'Income Tax', 'icon' => 'fa-landmark', 'color' => 'amber', 'identifier' => 'PAN: ' . ($client['pan'] ?? 'Not Available')],
            'ROC' => ['label' => 'ROC/MCA Filings', 'icon' => 'fa-building', 'color' => 'purple', 'identifier' => 'CIN: ' . ($client['cin'] ?? 'Not Available')],
            'PF_ESI' => ['label' => 'PF & ESI', 'icon' => 'fa-shield-alt', 'color' => 'teal', 'identifier' => ''],
            'OTHER' => ['label' => 'Other Compliances', 'icon' => 'fa-file-alt', 'color' => 'gray', 'identifier' => '']
        ];
        
        $frequencyLabels = [
            'MONTHLY' => 'Monthly',
            'QUARTERLY' => 'Quarterly', 
            'HALF_YEARLY' => 'Half-Yearly',
            'YEARLY' => 'Yearly',
            'EVENT_BASED' => 'Event Based'
        ];
        
        // Helper function to get due date description
        function getDueDateDesc($cc) {
            $day = $cc['due_day'] ?? 0;
            $offset = $cc['due_month_offset'] ?? 0;
            $freq = $cc['frequency'] ?? 'YEARLY';
            
            if ($day <= 0) return '-';
            
            $dayStr = $day . ($day == 1 ? 'st' : ($day == 2 ? 'nd' : ($day == 3 ? 'rd' : 'th')));
            
            if ($freq === 'MONTHLY') {
                return $dayStr . ' of next month';
            } elseif ($freq === 'QUARTERLY') {
                return $dayStr . ' of month after quarter';
            } elseif ($freq === 'YEARLY') {
                $months = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                $dueMonth = $cc['due_month_offset'] ?? 0;
                if ($dueMonth > 0 && $dueMonth <= 12) {
                    return $dayStr . ' ' . $months[$dueMonth];
                }
                return $dayStr;
            }
            return $dayStr;
        }
        ?>
        
        <div class="space-y-4">
            <?php foreach ($categoryMeta as $catKey => $catMeta): ?>
                <?php if (!empty($complianceByCategory[$catKey])): ?>
                <div class="border rounded-lg overflow-hidden">
                    <div class="px-4 py-3 bg-<?= $catMeta['color'] ?>-50 border-b border-<?= $catMeta['color'] ?>-100 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="fas <?= $catMeta['icon'] ?> text-<?= $catMeta['color'] ?>-600"></i>
                            <span class="font-semibold text-<?= $catMeta['color'] ?>-800"><?= $catMeta['label'] ?></span>
                            <?php if ($catMeta['identifier']): ?>
                            <span class="text-xs text-<?= $catMeta['color'] ?>-600 ml-2">(<?= $catMeta['identifier'] ?>)</span>
                            <?php endif; ?>
                        </div>
                        <span class="text-xs bg-<?= $catMeta['color'] ?>-100 text-<?= $catMeta['color'] ?>-700 px-2 py-1 rounded-full">
                            <?= count($complianceByCategory[$catKey]) ?> compliance(s)
                        </span>
                    </div>
                    <div class="divide-y">
                        <?php foreach ($complianceByCategory[$catKey] as $cc): ?>
                        <div class="px-4 py-2 flex items-center gap-3 hover:bg-gray-50">
                            <i class="fas fa-check-circle text-green-500 text-sm"></i>
                            <div class="flex-1">
                                <span class="font-medium text-sm"><?= htmlspecialchars($cc['name']) ?></span>
                                <?php if ($cc['description']): ?>
                                <span class="text-gray-400 text-xs ml-2">- <?= htmlspecialchars($cc['description']) ?></span>
                                <?php endif; ?>
                            </div>
                            <span class="text-xs px-2 py-1 bg-gray-100 text-gray-600 rounded"><?= $frequencyLabels[$cc['frequency']] ?? $cc['frequency'] ?></span>
                            <span class="text-xs text-gray-500 w-32 text-right"><?= getDueDateDesc($cc) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        
        <!-- Summary Stats -->
        <div class="mt-4 pt-4 border-t flex flex-wrap gap-4 text-sm">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                <span class="text-gray-600">Monthly: <strong><?= count($complianceByFrequency['MONTHLY']) ?></strong></span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 bg-amber-500 rounded-full"></span>
                <span class="text-gray-600">Quarterly: <strong><?= count($complianceByFrequency['QUARTERLY']) ?></strong></span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                <span class="text-gray-600">Yearly: <strong><?= count($complianceByFrequency['YEARLY']) ?></strong></span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 bg-gray-500 rounded-full"></span>
                <span class="text-gray-600">Total: <strong><?= count($clientCompliances) ?></strong></span>
            </div>
        </div>
    </div>
</div>

<!-- Enabled Compliances Summary -->
<div class="card mb-6">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">Enabled Compliances (<?= count($clientCompliances) ?>)</h3>
        <a href="compliance_tracker.php?client_id=<?= $clientId ?>" class="text-sm text-blue-600 hover:underline">View All Entries →</a>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <?php foreach ($clientCompliances as $cc): 
                $catInfo = $categories[$cc['category']] ?? $categories['OTHER'];
            ?>
            <div class="flex items-center gap-3 p-3 border rounded-lg hover:bg-gray-50">
                <div class="w-10 h-10 bg-<?= $cc['color'] ?? $catInfo['color'] ?>-100 text-<?= $cc['color'] ?? $catInfo['color'] ?>-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas <?= $cc['icon'] ?? 'fa-file-alt' ?>"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-sm truncate"><?= htmlspecialchars($cc['name']) ?></p>
                    <p class="text-xs text-gray-500"><?= $frequencies[$cc['frequency']] ?? $cc['frequency'] ?></p>
                </div>
                <div class="text-right">
                    <?php if ($cc['pending_count'] > 0): ?>
                    <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded text-xs font-medium"><?= $cc['pending_count'] ?> pending</span>
                    <?php elseif ($cc['entries_count'] > 0): ?>
                    <span class="text-xs text-green-600"><i class="fas fa-check mr-1"></i><?= $cc['entries_count'] ?> done</span>
                    <?php else: ?>
                    <span class="text-xs text-gray-400">No entries</span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Recent Compliance Entries -->
<?php if (!empty($recentEntries)): ?>
<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">Pending & Recent Compliance Entries</h3>
        <a href="compliance_tracker.php?client_id=<?= $clientId ?>&view=all" class="text-sm text-blue-600 hover:underline">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Compliance</th>
                    <th class="px-4 py-3 text-center">Period</th>
                    <th class="px-4 py-3 text-center">Due Date</th>
                    <th class="px-4 py-3 text-center">Status</th>
                    <th class="px-4 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($recentEntries as $entry): 
                    $entryStatus = strtoupper(trim($entry['status'] ?? 'NOT_STARTED'));
                    $isOverdue = $entry['due_date'] < date('Y-m-d') && !in_array($entryStatus, ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);
                    $statusInfo = $statuses[$entryStatus] ?? $statuses['NOT_STARTED'];
                ?>
                <tr class="hover:bg-gray-50 <?= $isOverdue ? 'bg-red-50' : '' ?>">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-2">
                            <i class="fas <?= $entry['icon'] ?? 'fa-file-alt' ?> text-<?= $entry['color'] ?? 'gray' ?>-500"></i>
                            <span class="font-medium text-sm"><?= htmlspecialchars($entry['compliance_name']) ?></span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-center text-sm"><?= $entry['period_name'] ?></td>
                    <td class="px-4 py-3 text-center text-sm <?= $isOverdue ? 'text-red-600 font-medium' : '' ?>">
                        <?= date('d M Y', strtotime($entry['due_date'])) ?>
                        <?php if ($isOverdue): ?><br><span class="text-xs">OVERDUE</span><?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 bg-<?= $statusInfo['color'] ?>-100 text-<?= $statusInfo['color'] ?>-700 rounded text-xs">
                            <?= $statusInfo['label'] ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="compliance_entry.php?id=<?= $entry['id'] ?>" class="text-blue-600 hover:underline text-sm">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>
<?php endif; ?>

<?php if ($activeTab === 'passwords'): ?>
<!-- Passwords Tab -->
<?php
// Simple encryption/decryption
function decryptPassword($encrypted) {
    $key = 'PATRON_PWD_KEY_2024';
    return openssl_decrypt(base64_decode($encrypted), 'AES-256-CBC', $key, 0, substr(md5($key), 0, 16));
}

// Get saved passwords
$savedPasswords = dbFetchAll("
    SELECT cp.*, pp.name as portal_name, pp.code as portal_code, pp.url as portal_url, pp.icon, pp.color
    FROM client_passwords cp
    JOIN password_portals pp ON cp.portal_id = pp.id
    WHERE cp.client_id = ? AND cp.deleted_at IS NULL
    ORDER BY pp.sort_order, pp.name
", [$clientId]) ?: [];
?>

<div class="flex items-center justify-between mb-4">
    <h2 class="text-lg font-semibold"><i class="fas fa-key text-amber-500 mr-2"></i>Portal Passwords</h2>
    <a href="client_passwords.php?client_id=<?= $clientId ?>" class="btn btn-primary text-sm">
        <i class="fas fa-cog mr-1"></i>Manage Passwords
    </a>
</div>

<?php if (empty($savedPasswords)): ?>
<div class="card p-8 text-center">
    <i class="fas fa-key text-4xl text-gray-300 mb-3"></i>
    <h3 class="font-semibold text-gray-700 mb-2">No Passwords Saved</h3>
    <p class="text-gray-500 text-sm mb-4">Store login credentials for various portals like GST, Income Tax, MCA, etc.</p>
    <a href="client_passwords.php?client_id=<?= $clientId ?>" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>Add Passwords
    </a>
</div>
<?php else: ?>

<div class="card">
    <div class="p-4 border-b bg-gray-50 flex items-center justify-between">
        <h3 class="font-semibold">Saved Credentials (<?= count($savedPasswords) ?>)</h3>
        <span class="text-xs text-gray-400"><i class="fas fa-lock mr-1"></i>Click to copy</span>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 text-xs text-gray-500 uppercase">
                <tr>
                    <th class="px-4 py-3 text-left">Portal</th>
                    <th class="px-4 py-3 text-left">Username</th>
                    <th class="px-4 py-3 text-left">Password</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($savedPasswords as $sp): 
                    $decryptedPwd = $sp['password_encrypted'] ? decryptPassword($sp['password_encrypted']) : '';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-<?= $sp['color'] ?? 'blue' ?>-100 text-<?= $sp['color'] ?? 'blue' ?>-600 rounded-lg flex items-center justify-center">
                                <i class="fas <?= $sp['icon'] ?? 'fa-globe' ?>"></i>
                            </div>
                            <div>
                                <p class="font-medium"><?= htmlspecialchars($sp['portal_name']) ?></p>
                                <?php if ($sp['portal_url']): ?>
                                <a href="<?= htmlspecialchars($sp['portal_url']) ?>" target="_blank" class="text-xs text-blue-500 hover:underline">
                                    Open Portal <i class="fas fa-external-link-alt ml-1"></i>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <?php if ($sp['username']): ?>
                        <div class="flex items-center gap-2">
                            <code class="bg-gray-100 px-2 py-1 rounded text-sm" id="user_<?= $sp['id'] ?>"><?= htmlspecialchars($sp['username']) ?></code>
                            <button onclick="copyText('user_<?= $sp['id'] ?>')" class="p-1 text-gray-400 hover:text-blue-600" title="Copy">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3">
                        <?php if ($decryptedPwd): ?>
                        <div class="flex items-center gap-2">
                            <code class="bg-gray-100 px-2 py-1 rounded text-sm" id="pwd_<?= $sp['id'] ?>" data-pwd="<?= htmlspecialchars($decryptedPwd) ?>">••••••••</code>
                            <button onclick="togglePwd('pwd_<?= $sp['id'] ?>')" class="p-1 text-gray-400 hover:text-purple-600" title="Show/Hide">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button onclick="copyPwd('pwd_<?= $sp['id'] ?>')" class="p-1 text-gray-400 hover:text-blue-600" title="Copy">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="client_passwords.php?client_id=<?= $clientId ?>" class="text-blue-600 hover:underline text-sm">Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function copyText(id) {
    const text = document.getElementById(id).textContent;
    navigator.clipboard.writeText(text);
    showCopyFeedback();
}
function copyPwd(id) {
    const pwd = document.getElementById(id).dataset.pwd;
    navigator.clipboard.writeText(pwd);
    showCopyFeedback();
}
function togglePwd(id) {
    const el = document.getElementById(id);
    if (el.textContent === '••••••••') {
        el.textContent = el.dataset.pwd;
    } else {
        el.textContent = '••••••••';
    }
}
function showCopyFeedback() {
    // Could add a toast notification here
}
</script>

<?php endif; ?>
<?php endif; ?>

<?php if ($activeTab === 'team'): ?>
<!-- Team Tab -->
<?php
// Get all team members for dropdowns
$allUsers = dbFetchAll("SELECT id, display_name FROM users ORDER BY display_name") ?: [];
?>

<div class="max-w-2xl mx-auto">
    <div class="card">
        <div class="p-4 border-b bg-indigo-50">
            <h2 class="font-semibold text-indigo-800"><i class="fas fa-user-friends mr-2"></i>Team Assignment</h2>
            <p class="text-sm text-indigo-600 mt-1">Assign executors, reviewer, and manager for this client</p>
        </div>
        
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_team">
            
            <!-- Visual Hierarchy -->
            <div class="mb-6 p-4 bg-gray-50 rounded-lg text-center text-sm text-gray-600">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-medium">Manager</span>
                </div>
                <div class="text-gray-400">↓ oversees</div>
                <div class="flex items-center justify-center gap-2 my-2">
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full font-medium">Reviewer</span>
                </div>
                <div class="text-gray-400">↓ reviews work of</div>
                <div class="flex items-center justify-center gap-4 mt-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full font-medium">Executor 1</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full font-medium">Executor 2</span>
                </div>
            </div>
            
            <div class="space-y-4">
                <!-- Manager -->
                <div class="p-4 border rounded-lg bg-indigo-50/50">
                    <label class="form-label text-indigo-700"><i class="fas fa-user-tie mr-1"></i>Manager</label>
                    <select name="manager_id" class="form-input">
                        <option value="">-- Select Manager --</option>
                        <?php foreach ($allUsers as $u): ?>
                        <option value="<?= $u['id'] ?>" <?= ($clientTeam['manager_id'] ?? '') == $u['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($u['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Oversees all work for this client</p>
                </div>
                
                <!-- Reviewer -->
                <div class="p-4 border rounded-lg bg-purple-50/50">
                    <label class="form-label text-purple-700"><i class="fas fa-user-check mr-1"></i>Reviewer</label>
                    <select name="reviewer_id" class="form-input">
                        <option value="">-- Select Reviewer --</option>
                        <?php foreach ($allUsers as $u): ?>
                        <option value="<?= $u['id'] ?>" <?= ($clientTeam['reviewer_id'] ?? '') == $u['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($u['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Reviews work done by executors (cross-review)</p>
                </div>
                
                <!-- Executors -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 border rounded-lg bg-blue-50/50">
                        <label class="form-label text-blue-700"><i class="fas fa-user mr-1"></i>Executor 1 (Primary)</label>
                        <select name="executor_1_id" class="form-input">
                            <option value="">-- Select --</option>
                            <?php foreach ($allUsers as $u): ?>
                            <option value="<?= $u['id'] ?>" <?= ($clientTeam['executor_1_id'] ?? '') == $u['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($u['display_name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Primary handler</p>
                    </div>
                    
                    <div class="p-4 border rounded-lg bg-blue-50/50">
                        <label class="form-label text-blue-700"><i class="fas fa-user mr-1"></i>Executor 2 (Backup)</label>
                        <select name="executor_2_id" class="form-input">
                            <option value="">-- Select --</option>
                            <?php foreach ($allUsers as $u): ?>
                            <option value="<?= $u['id'] ?>" <?= ($clientTeam['executor_2_id'] ?? '') == $u['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($u['display_name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <p class="text-xs text-gray-500 mt-1">Backup if primary unavailable</p>
                    </div>
                </div>
                
                <!-- Notes -->
                <div>
                    <label class="form-label">Notes</label>
                    <textarea name="notes" class="form-input" rows="2" placeholder="Any special instructions..."><?= htmlspecialchars($clientTeam['notes'] ?? '') ?></textarea>
                </div>
            </div>
            
            <div class="flex justify-end gap-3 mt-6 pt-4 border-t">
                <a href="?id=<?= $clientId ?>&tab=overview" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Save Team
                </button>
            </div>
        </form>
    </div>
</div>
<?php endif; ?>

<?php if ($activeTab === 'roc'): ?>
<!-- ROC Documents Tab -->
<?php
// Fetch ROC documents for this client
$rocDocuments = dbFetchAll("
    SELECT d.*, t.name as template_name, t.category, t.code,
           u.display_name as generated_by_name
    FROM roc_generated_documents d
    JOIN roc_templates t ON t.id = d.template_id
    LEFT JOIN users u ON u.id = d.generated_by
    WHERE d.client_id = ?
    ORDER BY d.created_at DESC
", [$clientId]) ?: [];

// Available templates for this entity type
$availableTemplates = dbFetchAll("
    SELECT * FROM roc_templates 
    WHERE is_active = 1 AND (applicable_entity_types IS NULL OR applicable_entity_types = '' OR applicable_entity_types LIKE ?)
    ORDER BY category, sort_order
", ['%' . $client['entity_type'] . '%']) ?: [];

$rocStats = [
    'total' => count($rocDocuments),
    'draft' => count(array_filter($rocDocuments, fn($d) => $d['status'] === 'DRAFT')),
    'final' => count(array_filter($rocDocuments, fn($d) => $d['status'] === 'FINAL')),
    'signed' => count(array_filter($rocDocuments, fn($d) => $d['status'] === 'SIGNED')),
    'filed' => count(array_filter($rocDocuments, fn($d) => $d['status'] === 'FILED')),
];
?>

<style>
.roc-status{padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;text-transform:uppercase}
.roc-DRAFT{background:#fef3c7;color:#92400e}.roc-FINAL{background:#dbeafe;color:#1e40af}
.roc-SIGNED{background:#d1fae5;color:#065f46}.roc-FILED{background:#e0e7ff;color:#3730a3}
.roc-cat{padding:2px 8px;border-radius:4px;font-size:10px;font-weight:600}
.roc-RESOLUTION{background:#fce7f3;color:#9d174d}.roc-MINUTES{background:#e0f2fe;color:#0c4a6e}
.roc-NOTICE{background:#fef9c3;color:#854d0e}.roc-DECLARATION{background:#f0fdf4;color:#166534}
</style>

<div class="space-y-6">
    <!-- Header + Quick Generate -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-lg font-bold text-gray-800"><i class="fas fa-file-contract text-purple-500 mr-2"></i>ROC Documents</h2>
            <p class="text-sm text-gray-500">Board resolutions, meeting minutes, notices & declarations</p>
        </div>
        <div class="flex gap-2 mt-2 md:mt-0">
            <a href="roc_documents.php?client_id=<?= $clientId ?>" class="bg-gray-100 text-gray-700 px-3 py-2 rounded-lg text-sm hover:bg-gray-200">
                <i class="fas fa-list mr-1"></i>View All
            </a>
            <a href="roc_generate.php?client_id=<?= $clientId ?>" class="bg-purple-600 text-white px-3 py-2 rounded-lg text-sm hover:bg-purple-700 shadow">
                <i class="fas fa-plus mr-1"></i>Generate Document
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-5 gap-3">
        <div class="bg-white rounded-lg border p-3 text-center">
            <div class="text-xl font-bold text-gray-800"><?= $rocStats['total'] ?></div>
            <div class="text-xs text-gray-500">Total</div>
        </div>
        <div class="bg-yellow-50 rounded-lg border border-yellow-200 p-3 text-center">
            <div class="text-xl font-bold text-yellow-600"><?= $rocStats['draft'] ?></div>
            <div class="text-xs text-gray-500">Draft</div>
        </div>
        <div class="bg-blue-50 rounded-lg border border-blue-200 p-3 text-center">
            <div class="text-xl font-bold text-blue-600"><?= $rocStats['final'] ?></div>
            <div class="text-xs text-gray-500">Final</div>
        </div>
        <div class="bg-green-50 rounded-lg border border-green-200 p-3 text-center">
            <div class="text-xl font-bold text-green-600"><?= $rocStats['signed'] ?></div>
            <div class="text-xs text-gray-500">Signed</div>
        </div>
        <div class="bg-indigo-50 rounded-lg border border-indigo-200 p-3 text-center">
            <div class="text-xl font-bold text-indigo-600"><?= $rocStats['filed'] ?></div>
            <div class="text-xs text-gray-500">Filed</div>
        </div>
    </div>

    <!-- Quick Generate Buttons -->
    <?php if (!empty($availableTemplates)): ?>
    <div class="card">
        <div class="p-3 border-b bg-gray-50"><h3 class="font-semibold text-sm"><i class="fas fa-bolt text-yellow-500 mr-1"></i>Quick Generate</h3></div>
        <div class="p-3 flex flex-wrap gap-2">
            <?php foreach ($availableTemplates as $tmpl): ?>
            <a href="roc_generate.php?client_id=<?= $clientId ?>&template_id=<?= $tmpl['id'] ?>" 
               class="inline-flex items-center gap-1 text-xs px-3 py-1.5 rounded-full border hover:bg-purple-50 hover:border-purple-300 transition">
                <span class="roc-cat roc-<?= $tmpl['category'] ?>"><?= substr($tmpl['category'], 0, 3) ?></span>
                <?= htmlspecialchars($tmpl['name']) ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Documents List -->
    <div class="card">
        <div class="p-3 border-b bg-gray-50">
            <h3 class="font-semibold text-sm"><i class="fas fa-file-alt text-blue-500 mr-1"></i>Generated Documents</h3>
        </div>
        <?php if (empty($rocDocuments)): ?>
        <div class="p-8 text-center">
            <i class="fas fa-file-alt text-4xl text-gray-300 mb-3"></i>
            <p class="text-gray-500">No ROC documents generated yet</p>
            <a href="roc_generate.php?client_id=<?= $clientId ?>" class="inline-block mt-3 bg-purple-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-purple-700">
                <i class="fas fa-plus mr-1"></i>Generate First Document
            </a>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 text-xs text-gray-500">
                        <th class="px-3 py-2 text-left">Document</th>
                        <th class="px-3 py-2 text-left">Type</th>
                        <th class="px-3 py-2 text-left">Date</th>
                        <th class="px-3 py-2 text-left">Status</th>
                        <th class="px-3 py-2 text-left">Portal</th>
                        <th class="px-3 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rocDocuments as $rd): ?>
                    <tr class="border-b hover:bg-gray-50" id="roc-row-<?= $rd['id'] ?>">
                        <td class="px-3 py-2">
                            <div class="font-medium text-gray-800"><?= htmlspecialchars($rd['document_title'] ?: $rd['template_name']) ?></div>
                            <?php if (!empty($rd['resolution_number'])): ?>
                            <div class="text-xs text-purple-500">Res# <?= htmlspecialchars($rd['resolution_number']) ?></div>
                            <?php endif; ?>
                        </td>
                        <td class="px-3 py-2"><span class="roc-cat roc-<?= $rd['category'] ?>"><?= $rd['category'] ?></span></td>
                        <td class="px-3 py-2 text-gray-600 text-xs">
                            <?= !empty($rd['meeting_date']) ? date('d M Y', strtotime($rd['meeting_date'])) : '-' ?>
                        </td>
                        <td class="px-3 py-2"><span class="roc-status roc-<?= $rd['status'] ?>"><?= $rd['status'] ?></span></td>
                        <td class="px-3 py-2">
                            <i class="fas <?= $rd['portal_visible'] ? 'fa-eye text-green-500' : 'fa-eye-slash text-gray-300' ?>"></i>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex items-center justify-center gap-1">
                                <a href="roc_download.php?id=<?= $rd['id'] ?>&format=html" target="_blank" class="text-blue-500 hover:text-blue-700 p-1" title="Preview"><i class="fas fa-eye text-xs"></i></a>
                                <a href="roc_generate.php?edit=<?= $rd['id'] ?>" class="text-yellow-600 hover:text-yellow-800 p-1" title="Edit"><i class="fas fa-edit text-xs"></i></a>
                                <a href="roc_download.php?id=<?= $rd['id'] ?>&format=pdf" target="_blank" class="text-red-500 hover:text-red-700 p-1" title="PDF"><i class="fas fa-file-pdf text-xs"></i></a>
                                <a href="roc_download.php?id=<?= $rd['id'] ?>&format=docx" class="text-indigo-500 hover:text-indigo-700 p-1" title="Word"><i class="fas fa-file-word text-xs"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- Upload Modal -->
<div id="uploadModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50" onclick="closeUploadModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl w-full max-w-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">Upload Document</h3>
            <button onclick="closeUploadModal()" class="p-2 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></button>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="upload_doc">
            
            <div class="space-y-4">
                <div>
                    <label class="form-label">Document Type *</label>
                    <select name="document_type_id" class="form-input" required>
                        <option value="">Select...</option>
                        <optgroup label="🏢 <?= $settings['term'] ?> Documents">
                            <?php foreach ($entityDocTypes as $dt): ?>
                            <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                        <?php if (!$isProprietorship && !empty($personDocTypes)): ?>
                        <optgroup label="👤 Person Documents">
                            <?php foreach ($personDocTypes as $dt): ?>
                            <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                        <?php endif; ?>
                    </select>
                </div>
                
                <?php if (!$isProprietorship && !empty($persons)): ?>
                <div>
                    <label class="form-label">Person (Optional)</label>
                    <select name="person_id" class="form-input">
                        <option value=""><?= $settings['term'] ?> Level Document</option>
                        <?php foreach ($persons as $p): ?>
                        <option value="<?= $p['person_id'] ?>"><?= htmlspecialchars($p['full_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>
                
                <div>
                    <label class="form-label">File *</label>
                    <input type="file" name="document" class="form-input" required accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                </div>
            </div>
            
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeUploadModal()" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-upload mr-2"></i>Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- Link Existing Person Modal -->
<div id="linkPersonModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50" onclick="closeLinkPersonModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <div class="p-4 border-b bg-gradient-to-r from-green-50 to-emerald-50 rounded-t-2xl flex items-center justify-between sticky top-0">
            <h3 class="text-lg font-semibold text-green-800"><i class="fas fa-link mr-2"></i>Link Existing Person</h3>
            <button onclick="closeLinkPersonModal()" class="p-2 hover:bg-green-100 rounded-lg text-green-700"><i class="fas fa-times"></i></button>
        </div>
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="link_person">
            
            <div class="space-y-4">
                <!-- Person Search -->
                <div>
                    <label class="form-label">Search Person <span class="text-red-500">*</span></label>
                    <input type="text" id="personSearchInput" class="form-input" placeholder="Search by name, PAN, DIN..." onkeyup="searchPersons(this.value)">
                    <input type="hidden" name="person_id" id="selectedPersonId" required>
                    <div id="personSearchResults" class="mt-2 max-h-48 overflow-y-auto border rounded-lg hidden"></div>
                    <div id="selectedPersonCard" class="mt-2 p-3 bg-green-50 border border-green-200 rounded-lg hidden">
                        <div class="flex items-center justify-between">
                            <div id="selectedPersonInfo"></div>
                            <button type="button" onclick="clearSelectedPerson()" class="text-red-500 hover:text-red-700"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Role Type -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Role <span class="text-red-500">*</span></label>
                        <select name="role_type" class="form-input" required id="linkRoleType" onchange="toggleRoleFields()">
                            <option value="">Select Role...</option>
                            <?php 
                            $roleOptions = [
                                'PVT_LTD' => ['DIRECTOR', 'MANAGING_DIRECTOR', 'WHOLE_TIME_DIRECTOR', 'INDEPENDENT_DIRECTOR', 'NOMINEE_DIRECTOR', 'SHAREHOLDER', 'PROMOTER', 'AUTHORIZED_SIGNATORY'],
                                'OPC' => ['DIRECTOR', 'NOMINEE', 'SHAREHOLDER', 'AUTHORIZED_SIGNATORY'],
                                'LLP' => ['DESIGNATED_PARTNER', 'PARTNER', 'AUTHORIZED_SIGNATORY'],
                                'PARTNERSHIP' => ['PARTNER', 'AUTHORIZED_SIGNATORY'],
                                'HUF' => ['KARTA', 'COPARCENER', 'MEMBER'],
                            ];
                            $roles = $roleOptions[$entityType] ?? $roleOptions['PVT_LTD'];
                            foreach ($roles as $role): ?>
                            <option value="<?= $role ?>"><?= str_replace('_', ' ', $role) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-input" placeholder="e.g., Whole-time Director">
                    </div>
                </div>
                
                <!-- Director Category (for directors) -->
                <div id="directorCategoryDiv" class="hidden">
                    <label class="form-label">Director Category</label>
                    <select name="director_category" class="form-input">
                        <option value="">Select...</option>
                        <option value="EXECUTIVE">Executive</option>
                        <option value="NON_EXECUTIVE">Non-Executive</option>
                        <option value="INDEPENDENT">Independent</option>
                        <option value="WHOLE_TIME">Whole-Time</option>
                        <option value="MANAGING">Managing</option>
                        <option value="NOMINEE">Nominee</option>
                        <option value="ADDITIONAL">Additional</option>
                        <option value="ALTERNATE">Alternate</option>
                    </select>
                </div>
                
                <!-- Appointment Date -->
                <div>
                    <label class="form-label">Appointment Date</label>
                    <input type="date" name="appointment_date" class="form-input">
                </div>
                
                <!-- Shareholding (for companies) -->
                <?php if (in_array($entityType, ['PVT_LTD', 'OPC'])): ?>
                <div id="shareholdingDiv" class="p-4 bg-blue-50 rounded-lg space-y-3 hidden">
                    <h4 class="font-medium text-blue-800"><i class="fas fa-chart-pie mr-1"></i>Shareholding Details</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label text-sm">No. of Shares</label>
                            <input type="number" name="no_of_shares" class="form-input" min="0">
                        </div>
                        <div>
                            <label class="form-label text-sm">Share %</label>
                            <input type="number" name="share_percentage" class="form-input" step="0.01" min="0" max="100">
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Capital Contribution (for LLP/Partnership) -->
                <?php if (in_array($entityType, ['LLP', 'PARTNERSHIP'])): ?>
                <div class="p-4 bg-purple-50 rounded-lg space-y-3">
                    <h4 class="font-medium text-purple-800"><i class="fas fa-rupee-sign mr-1"></i>Capital & Profit Sharing</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="form-label text-sm">Capital Contribution (₹)</label>
                            <input type="number" name="capital_contribution" class="form-input" min="0" step="0.01">
                        </div>
                        <div>
                            <label class="form-label text-sm">Profit Sharing %</label>
                            <input type="number" name="profit_sharing_ratio" class="form-input" step="0.01" min="0" max="100">
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="flex justify-end gap-3 mt-6 pt-4 border-t">
                <button type="button" onclick="closeLinkPersonModal()" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn bg-green-600 text-white hover:bg-green-700"><i class="fas fa-link mr-2"></i>Link Person</button>
            </div>
        </form>
    </div>
</div>

<script>
function openUploadModal() { document.getElementById('uploadModal').classList.remove('hidden'); }
function closeUploadModal() { document.getElementById('uploadModal').classList.add('hidden'); }
function copyToClipboard(text) {
    navigator.clipboard.writeText(text);
    const btn = document.getElementById('copyBtn');
    btn.innerHTML = '<i class="fas fa-check mr-1"></i> Copied!';
    setTimeout(() => btn.innerHTML = '<i class="fas fa-copy mr-1"></i> Copy', 2000);
}
document.addEventListener('keydown', e => { 
    if (e.key === 'Escape') { 
        closeUploadModal(); 
        closeLinkPersonModal(); 
    } 
});

// Link Person Modal Functions
function openLinkPersonModal() { 
    document.getElementById('linkPersonModal').classList.remove('hidden'); 
    document.getElementById('personSearchInput').focus();
}
function closeLinkPersonModal() { 
    document.getElementById('linkPersonModal').classList.add('hidden');
    clearSelectedPerson();
    document.getElementById('personSearchInput').value = '';
    document.getElementById('personSearchResults').classList.add('hidden');
}

let searchTimeout;
function searchPersons(query) {
    clearTimeout(searchTimeout);
    const resultsDiv = document.getElementById('personSearchResults');
    
    if (query.length < 2) {
        resultsDiv.classList.add('hidden');
        return;
    }
    
    searchTimeout = setTimeout(() => {
        fetch(`ajax/search_persons.php?q=${encodeURIComponent(query)}&client_id=<?= $clientId ?>`)
            .then(r => r.json())
            .then(data => {
                if (data.length === 0) {
                    resultsDiv.innerHTML = '<div class="p-3 text-center text-gray-500">No persons found</div>';
                } else {
                    resultsDiv.innerHTML = data.map(p => `
                        <div class="p-3 hover:bg-gray-50 cursor-pointer border-b last:border-b-0 flex items-center justify-between" onclick="selectPerson(${p.id}, '${escapeHtml(p.full_name)}', '${p.pan_number || '-'}', '${p.din || '-'}')">
                            <div>
                                <div class="font-medium">${escapeHtml(p.full_name)}</div>
                                <div class="text-xs text-gray-500">
                                    PAN: ${p.pan_number || '-'} ${p.din ? '| DIN: ' + p.din : ''} ${p.dpin ? '| DPIN: ' + p.dpin : ''}
                                </div>
                                ${p.linked_clients ? '<div class="text-xs text-blue-600 mt-1">Already linked to: ' + escapeHtml(p.linked_clients) + '</div>' : ''}
                            </div>
                            <i class="fas fa-plus text-green-500"></i>
                        </div>
                    `).join('');
                }
                resultsDiv.classList.remove('hidden');
            });
    }, 300);
}

function selectPerson(id, name, pan, din) {
    document.getElementById('selectedPersonId').value = id;
    document.getElementById('selectedPersonInfo').innerHTML = `
        <div class="font-medium text-green-800">${escapeHtml(name)}</div>
        <div class="text-xs text-green-600">PAN: ${pan} ${din !== '-' ? '| DIN: ' + din : ''}</div>
    `;
    document.getElementById('selectedPersonCard').classList.remove('hidden');
    document.getElementById('personSearchResults').classList.add('hidden');
    document.getElementById('personSearchInput').value = name;
}

function clearSelectedPerson() {
    document.getElementById('selectedPersonId').value = '';
    document.getElementById('selectedPersonCard').classList.add('hidden');
    document.getElementById('personSearchInput').value = '';
}

function toggleRoleFields() {
    const roleType = document.getElementById('linkRoleType').value;
    const directorDiv = document.getElementById('directorCategoryDiv');
    const shareholdingDiv = document.getElementById('shareholdingDiv');
    
    // Show director category for director roles
    if (roleType.includes('DIRECTOR')) {
        directorDiv?.classList.remove('hidden');
    } else {
        directorDiv?.classList.add('hidden');
    }
    
    // Show shareholding for shareholder/promoter
    if (['SHAREHOLDER', 'PROMOTER'].includes(roleType)) {
        shareholdingDiv?.classList.remove('hidden');
    } else {
        shareholdingDiv?.classList.add('hidden');
    }
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Unlink Person
function confirmUnlink(clientPersonId, personName) {
    if (confirm('Are you sure you want to unlink "' + personName + '" from this client?\n\nNote: This will only remove the link, not delete the person.')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.innerHTML = `
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="unlink_person">
            <input type="hidden" name="client_person_id" value="${clientPersonId}">
        `;
        document.body.appendChild(form);
        form.submit();
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
