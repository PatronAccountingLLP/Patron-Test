<?php
/**
 * PATRON - Documents Management
 * Enhanced with verification queue, entity/person tabs, view modal
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Documents';

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $csrfToken = $_POST['csrf_token'] ?? '';
    
    if (!verifyCsrfToken($csrfToken)) {
        setFlash('error', 'Invalid CSRF token. Please refresh and try again.');
    } elseif ($action) {
        
        if ($action === 'upload') {
            $clientId = (int)($_POST['client_id'] ?? 0);
            $personId = (int)($_POST['person_id'] ?? 0) ?: null;
            $docTypes = $_POST['doc_types'] ?? [];
            $files = $_FILES['documents'] ?? [];
            
            if (!$clientId) {
                setFlash('error', 'Please select a client.');
            } elseif (empty($docTypes) || empty($files['name'][0])) {
                setFlash('error', 'Please select document type and file.');
            } else {
                $uploadDir = 'uploads/documents/' . date('Y/m/');
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
                
                $uploadedCount = 0;
                $linkedCount = 0;
                
                for ($i = 0; $i < count($files['name']); $i++) {
                    if (empty($files['name'][$i]) || empty($docTypes[$i])) continue;
                    
                    $docTypeId = (int)$docTypes[$i];
                    $fileName = $files['name'][$i];
                    $tmpName = $files['tmp_name'][$i];
                    $fileSize = $files['size'][$i];
                    
                    if ($files['error'][$i] !== UPLOAD_ERR_OK || $fileSize > 10 * 1024 * 1024) continue;
                    
                    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                    if (!in_array($ext, ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'xls', 'xlsx'])) continue;
                    
                    $newFileName = uniqid('doc_') . '_' . time() . '.' . $ext;
                    $filePath = $uploadDir . $newFileName;
                    
                    if (move_uploaded_file($tmpName, $filePath)) {
                        dbExecute("INSERT INTO client_documents (client_id, person_id, document_type_id, file_path, original_filename, file_size, status, created_at) VALUES (?, ?, ?, ?, ?, ?, 'UPLOADED', NOW())",
                            [$clientId, $personId, $docTypeId, $filePath, $fileName, $fileSize]);
                        
                        $clientDocId = dbLastInsertId();
                        $uploadedCount++;
                        
                        // Auto-link to pending requests
                        $pendingRD = dbFetchOne("SELECT rd.id FROM request_documents rd JOIN service_requests sr ON rd.service_request_id = sr.id WHERE sr.client_id = ? AND rd.document_type_id = ? AND rd.status = 'PENDING' AND rd.client_document_id IS NULL AND sr.status NOT IN ('COMPLETED', 'CANCELLED') ORDER BY sr.created_at DESC LIMIT 1", [$clientId, $docTypeId]);
                        if ($pendingRD) {
                            dbExecute("UPDATE request_documents SET client_document_id = ?, status = 'UPLOADED' WHERE id = ?", [$clientDocId, $pendingRD['id']]);
                            $linkedCount++;
                        }
                    }
                }
                
                $msg = "$uploadedCount document(s) uploaded.";
                if ($linkedCount > 0) $msg .= " $linkedCount linked to requests.";
                setFlash('success', $msg);
            }
        }
        
        if ($action === 'verify') {
            $docId = (int)($_POST['document_id'] ?? 0);
            if ($docId > 0) {
                $doc = dbFetchOne("SELECT id, status FROM client_documents WHERE id = ?", [$docId]);
                if ($doc) {
                    $result = dbExecute("UPDATE client_documents SET status = 'VERIFIED', verified_by = ?, verified_at = NOW() WHERE id = ?", [$_SESSION['user_id'], $docId]);
                    if ($result !== false) {
                        setFlash('success', 'Document verified successfully.');
                    } else {
                        setFlash('error', 'Database update failed.');
                    }
                } else {
                    setFlash('error', 'Document not found.');
                }
            } else {
                setFlash('error', 'Invalid document ID.');
            }
        }
        
        if ($action === 'reject') {
            $docId = (int)($_POST['document_id'] ?? 0);
            $reason = sanitize($_POST['rejection_reason'] ?? '');
            if ($docId > 0) {
                $doc = dbFetchOne("SELECT id FROM client_documents WHERE id = ?", [$docId]);
                if ($doc) {
                    $result = dbExecute("UPDATE client_documents SET status = 'REJECTED', rejection_reason = ? WHERE id = ?", [$reason, $docId]);
                    if ($result !== false) {
                        setFlash('success', 'Document rejected.');
                    } else {
                        setFlash('error', 'Database update failed.');
                    }
                } else {
                    setFlash('error', 'Document not found.');
                }
            } else {
                setFlash('error', 'Invalid document ID.');
            }
        }
        
        if ($action === 'delete') {
            $docId = (int)($_POST['document_id'] ?? 0);
            if ($docId) {
                dbExecute("UPDATE client_documents SET deleted_at = NOW() WHERE id = ?", [$docId]);
                setFlash('success', 'Document deleted.');
            }
        }
    }
    
    // Preserve current filters in redirect
    $redirectParams = [];
    if (!empty($_GET['tab'])) $redirectParams['tab'] = $_GET['tab'];
    if (!empty($_GET['status'])) $redirectParams['status'] = $_GET['status'];
    if (!empty($_GET['type_id'])) $redirectParams['type_id'] = $_GET['type_id'];
    if (!empty($_GET['client_id'])) $redirectParams['client_id'] = $_GET['client_id'];
    $redirectUrl = 'documents.php' . ($redirectParams ? '?' . http_build_query($redirectParams) : '');
    header('Location: ' . $redirectUrl);
    exit;
}

// Get filters
$tab = sanitize($_GET['tab'] ?? 'all'); // all, entity, person, verify
$status = sanitize($_GET['status'] ?? '');
$typeId = (int)($_GET['type_id'] ?? 0);
$clientId = (int)($_GET['client_id'] ?? 0);
$search = sanitize($_GET['search'] ?? '');

// Build query
$where = ["cd.deleted_at IS NULL"];
$params = [];

// Tab filter
if ($tab === 'entity') {
    $where[] = "cd.person_id IS NULL";
} elseif ($tab === 'person') {
    $where[] = "cd.person_id IS NOT NULL";
} elseif ($tab === 'verify') {
    $where[] = "cd.status = 'UPLOADED'";
}

if ($status && $tab !== 'verify') {
    $where[] = "cd.status = ?";
    $params[] = $status;
}
if ($typeId) {
    $where[] = "cd.document_type_id = ?";
    $params[] = $typeId;
}
if ($clientId) {
    $where[] = "cd.client_id = ?";
    $params[] = $clientId;
}
if ($search) {
    $where[] = "(cd.original_filename LIKE ? OR c.name LIKE ? OR dt.name LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

$whereClause = implode(' AND ', $where);

// Get documents
$documents = dbFetchAll("
    SELECT cd.*, dt.name as type_name, dt.category as type_category, dt.level as doc_level,
           c.name as client_name, p.full_name as person_name
    FROM client_documents cd
    JOIN document_types dt ON cd.document_type_id = dt.id
    JOIN clients c ON cd.client_id = c.id
    LEFT JOIN persons_new p ON cd.person_id = p.id
    WHERE $whereClause
    ORDER BY cd.created_at DESC
    LIMIT 100
", $params);

// Get stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(person_id IS NULL) as entity_docs,
        SUM(person_id IS NOT NULL) as person_docs,
        SUM(status = 'UPLOADED') as to_verify,
        SUM(status = 'VERIFIED') as verified,
        SUM(status = 'REJECTED') as rejected
    FROM client_documents WHERE deleted_at IS NULL
");

// Get pending verification documents (for priority queue)
$toVerifyDocs = dbFetchAll("
    SELECT cd.*, dt.name as type_name, c.name as client_name, p.full_name as person_name,
           TIMESTAMPDIFF(HOUR, cd.created_at, NOW()) as hours_pending
    FROM client_documents cd
    JOIN document_types dt ON cd.document_type_id = dt.id
    JOIN clients c ON cd.client_id = c.id
    LEFT JOIN persons_new p ON cd.person_id = p.id
    WHERE cd.deleted_at IS NULL AND cd.status = 'UPLOADED'
    ORDER BY cd.created_at ASC
    LIMIT 10
");

// Get filter options
$documentTypes = dbFetchAll("SELECT id, name, level FROM document_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY level, name");
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL AND status = 'ACTIVE' ORDER BY name") ?: [];

// Group document types by level
$entityDocTypes = array_filter($documentTypes, fn($dt) => in_array(strtoupper($dt['level'] ?? ''), ['ENTITY', 'BOTH', '']));
$personDocTypes = array_filter($documentTypes, fn($dt) => in_array(strtoupper($dt['level'] ?? ''), ['PERSON', 'BOTH']));

require_once 'includes/header.php';
?>

<style>
.doc-tab { transition: all 0.2s; border-bottom: 3px solid transparent; }
.doc-tab:hover { background: #f3f4f6; }
.doc-tab.active { font-weight: 600; }
.doc-tab.active-blue { border-color: #3b82f6; background: #eff6ff; }
.doc-tab.active-purple { border-color: #8b5cf6; background: #f5f3ff; }
.doc-tab.active-amber { border-color: #f59e0b; background: #fffbeb; }
.doc-tab.active-gray { border-color: #6b7280; background: #f9fafb; }

.verify-card { animation: pulse-border 2s infinite; }
@keyframes pulse-border {
    0%, 100% { border-color: #fbbf24; }
    50% { border-color: #f59e0b; }
}

.doc-row-entity { border-left: 4px solid #3b82f6; }
.doc-row-person { border-left: 4px solid #8b5cf6; }

.file-preview { max-width: 100%; max-height: 70vh; object-fit: contain; }
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-900">Documents</h2>
        <p class="text-gray-500">Manage client and person documents</p>
    </div>
    <button onclick="openUploadModal()" class="btn btn-primary">
        <i class="fas fa-upload mr-2"></i> Upload Document
    </button>
</div>

<!-- To Be Verified Queue (Priority Alert) -->
<?php if (!empty($toVerifyDocs) && $tab !== 'verify'): ?>
<div class="card mb-6 border-2 border-amber-400 bg-gradient-to-r from-amber-50 to-yellow-50 verify-card">
    <div class="p-4">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-amber-500 rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-amber-800">Documents Awaiting Verification</h3>
                    <p class="text-sm text-amber-600"><?= count($toVerifyDocs) ?> document(s) need your attention</p>
                </div>
            </div>
            <a href="?tab=verify" class="btn btn-primary bg-amber-500 hover:bg-amber-600 border-amber-500">
                <i class="fas fa-check-double mr-2"></i> Review All
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3">
            <?php foreach (array_slice($toVerifyDocs, 0, 5) as $vDoc): 
                $ext = strtolower(pathinfo($vDoc['original_filename'] ?? '', PATHINFO_EXTENSION));
                $isImage = in_array($ext, ['jpg', 'jpeg', 'png']);
            ?>
            <div class="bg-white rounded-xl p-3 border border-amber-200 hover:shadow-md transition-all">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0">
                        <?php if ($ext === 'pdf'): ?>
                        <i class="fas fa-file-pdf text-red-500"></i>
                        <?php elseif ($isImage): ?>
                        <i class="fas fa-file-image text-blue-500"></i>
                        <?php else: ?>
                        <i class="fas fa-file text-gray-500"></i>
                        <?php endif; ?>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-gray-900 text-sm truncate"><?= htmlspecialchars($vDoc['type_name']) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($vDoc['client_name']) ?></p>
                        <p class="text-xs text-amber-600 mt-1">
                            <i class="fas fa-clock mr-1"></i>
                            <?php if ($vDoc['hours_pending'] < 24): ?>
                                <?= $vDoc['hours_pending'] ?>h ago
                            <?php else: ?>
                                <?= floor($vDoc['hours_pending'] / 24) ?>d ago
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="flex gap-1 mt-2">
                    <button onclick="viewDocument(<?= $vDoc['id'] ?>, '<?= htmlspecialchars($vDoc['file_path'] ?? '') ?>', '<?= $ext ?>')" 
                            class="flex-1 px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs text-gray-600">
                        <i class="fas fa-eye"></i> View
                    </button>
                    <form method="POST" class="flex-1">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="verify">
                        <input type="hidden" name="document_id" value="<?= $vDoc['id'] ?>">
                        <button type="submit" class="w-full px-2 py-1 bg-green-100 hover:bg-green-200 rounded text-xs text-green-700">
                            <i class="fas fa-check"></i> Verify
                        </button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Tabs -->
<div class="card mb-6">
    <div class="flex border-b">
        <a href="?" class="doc-tab px-6 py-4 text-center flex-1 <?= $tab === 'all' ? 'active active-gray' : '' ?>">
            <span class="text-2xl font-bold text-gray-700"><?= $stats['total'] ?? 0 ?></span>
            <p class="text-xs text-gray-500 uppercase">All Documents</p>
        </a>
        <a href="?tab=entity" class="doc-tab px-6 py-4 text-center flex-1 <?= $tab === 'entity' ? 'active active-blue' : '' ?>">
            <span class="text-2xl font-bold text-blue-600"><?= $stats['entity_docs'] ?? 0 ?></span>
            <p class="text-xs text-blue-600 uppercase"><i class="fas fa-building mr-1"></i>Entity</p>
        </a>
        <a href="?tab=person" class="doc-tab px-6 py-4 text-center flex-1 <?= $tab === 'person' ? 'active active-purple' : '' ?>">
            <span class="text-2xl font-bold text-purple-600"><?= $stats['person_docs'] ?? 0 ?></span>
            <p class="text-xs text-purple-600 uppercase"><i class="fas fa-user mr-1"></i>Person</p>
        </a>
        <a href="?tab=verify" class="doc-tab px-6 py-4 text-center flex-1 <?= $tab === 'verify' ? 'active active-amber' : '' ?>">
            <span class="text-2xl font-bold text-amber-600"><?= $stats['to_verify'] ?? 0 ?></span>
            <p class="text-xs text-amber-600 uppercase"><i class="fas fa-clock mr-1"></i>To Verify</p>
        </a>
    </div>
    
    <!-- Filters -->
    <div class="p-4 bg-gray-50">
        <form method="GET" class="flex flex-wrap items-center gap-3">
            <input type="hidden" name="tab" value="<?= $tab ?>">
            <div class="relative flex-1 min-w-[200px]">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="search" placeholder="Search documents..." 
                       value="<?= htmlspecialchars($search) ?>" class="form-input pl-10 w-full">
            </div>
            
            <?php if ($tab !== 'verify'): ?>
            <select name="status" class="form-input w-32">
                <option value="">All Status</option>
                <option value="UPLOADED" <?= $status === 'UPLOADED' ? 'selected' : '' ?>>Uploaded</option>
                <option value="VERIFIED" <?= $status === 'VERIFIED' ? 'selected' : '' ?>>Verified</option>
                <option value="REJECTED" <?= $status === 'REJECTED' ? 'selected' : '' ?>>Rejected</option>
            </select>
            <?php endif; ?>
            
            <select name="type_id" class="form-input w-44">
                <option value="">All Types</option>
                <optgroup label="🏢 Entity Documents">
                    <?php foreach ($entityDocTypes as $dt): ?>
                    <option value="<?= $dt['id'] ?>" <?= $typeId == $dt['id'] ? 'selected' : '' ?>><?= htmlspecialchars($dt['name']) ?></option>
                    <?php endforeach; ?>
                </optgroup>
                <optgroup label="👤 Person Documents">
                    <?php foreach ($personDocTypes as $dt): ?>
                    <option value="<?= $dt['id'] ?>" <?= $typeId == $dt['id'] ? 'selected' : '' ?>><?= htmlspecialchars($dt['name']) ?></option>
                    <?php endforeach; ?>
                </optgroup>
            </select>
            
            <div class="relative w-56" id="filterClientWrapper">
                <input type="hidden" name="client_id" id="filterClientId" value="<?= $clientId ?>">
                <input type="text" id="filterClientSearch" class="form-input w-full" placeholder="All Clients" autocomplete="off"
                       value="<?= $clientId ? htmlspecialchars(array_values(array_filter($clients, fn($c) => $c['id'] == $clientId))[0]['name'] ?? '') : '' ?>"
                       onfocus="openClientDropdown('filter')" oninput="filterClientList('filter')">
                <?php if ($clientId): ?>
                <button type="button" onclick="clearClientSelect('filter')" class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button>
                <?php endif; ?>
                <div id="filterClientDropdown" class="hidden absolute z-50 mt-1 w-full max-h-60 overflow-y-auto bg-white border border-gray-200 rounded-lg shadow-lg">
                    <div class="p-2 border-b sticky top-0 bg-white">
                        <p class="text-xs text-gray-400"><?= count($clients) ?> active clients</p>
                    </div>
                    <div id="filterClientList">
                        <?php foreach ($clients as $c): ?>
                        <div class="client-option px-3 py-2 hover:bg-blue-50 cursor-pointer text-sm <?= $clientId == $c['id'] ? 'bg-blue-50 font-medium' : '' ?>"
                             data-id="<?= $c['id'] ?>" data-name="<?= htmlspecialchars($c['name']) ?>"
                             onclick="selectClient('filter', <?= $c['id'] ?>, this.dataset.name)">
                            <?= htmlspecialchars($c['name']) ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div id="filterClientEmpty" class="hidden p-3 text-center text-gray-400 text-sm">No clients found</div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-secondary"><i class="fas fa-filter mr-1"></i> Filter</button>
            <?php if ($search || $status || $typeId || $clientId): ?>
            <a href="?tab=<?= $tab ?>" class="text-sm text-gray-500 hover:text-gray-700">Clear</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<!-- Documents Table -->
<div class="card overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Document</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Client / Person</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Level</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Uploaded</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php if (empty($documents)): ?>
                <tr>
                    <td colspan="6" class="px-4 py-12 text-center text-gray-500">
                        <i class="fas fa-folder-open text-5xl text-gray-300 mb-3"></i>
                        <p>No documents found</p>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach ($documents as $doc): 
                    $ext = strtolower(pathinfo($doc['original_filename'] ?? '', PATHINFO_EXTENSION));
                    $isImage = in_array($ext, ['jpg', 'jpeg', 'png']);
                    $isPerson = !empty($doc['person_id']);
                    $rowClass = $isPerson ? 'doc-row-person' : 'doc-row-entity';
                ?>
                <tr class="hover:bg-gray-50 <?= $rowClass ?>">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <?php 
                            $iconClass = match($ext) {
                                'pdf' => 'fa-file-pdf text-red-500',
                                'jpg', 'jpeg', 'png' => 'fa-file-image text-blue-500',
                                'doc', 'docx' => 'fa-file-word text-blue-600',
                                'xls', 'xlsx' => 'fa-file-excel text-green-600',
                                default => 'fa-file text-gray-400'
                            };
                            ?>
                            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                <i class="fas <?= $iconClass ?> text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($doc['type_name'] ?? 'Unknown') ?></p>
                                <p class="text-xs text-gray-500">
                                    <?= htmlspecialchars(substr($doc['original_filename'] ?? 'file', 0, 30)) ?>
                                    <?php if ($doc['file_size']): ?>
                                    <span class="text-gray-300 mx-1">•</span>
                                    <?= number_format($doc['file_size'] / 1024, 0) ?> KB
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <a href="view_client.php?id=<?= $doc['client_id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                            <?= htmlspecialchars($doc['client_name'] ?? 'Unknown') ?>
                        </a>
                        <?php if ($isPerson): ?>
                        <p class="text-sm text-purple-600"><i class="fas fa-user mr-1"></i><?= htmlspecialchars($doc['person_name']) ?></p>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($isPerson): ?>
                        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">
                            <i class="fas fa-user mr-1"></i>Person
                        </span>
                        <?php else: ?>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">
                            <i class="fas fa-building mr-1"></i>Entity
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php
                        $statusConfig = [
                            'PENDING' => ['class' => 'bg-gray-100 text-gray-600', 'icon' => 'fa-hourglass'],
                            'UPLOADED' => ['class' => 'bg-amber-100 text-amber-700', 'icon' => 'fa-clock'],
                            'VERIFIED' => ['class' => 'bg-green-100 text-green-700', 'icon' => 'fa-check-circle'],
                            'REJECTED' => ['class' => 'bg-red-100 text-red-700', 'icon' => 'fa-times-circle']
                        ];
                        $docStatus = $doc['status'] ?? 'PENDING';
                        $sc = $statusConfig[$docStatus] ?? $statusConfig['PENDING'];
                        ?>
                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium <?= $sc['class'] ?>">
                            <i class="fas <?= $sc['icon'] ?>"></i> <?= $docStatus ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-600">
                        <?= $doc['created_at'] ? date('d M Y', strtotime($doc['created_at'])) : '-' ?>
                        <p class="text-xs text-gray-400"><?= $doc['created_at'] ? date('h:i A', strtotime($doc['created_at'])) : '' ?></p>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-1">
                            <!-- View Button -->
                            <a href="document_file.php?id=<?= $doc['id'] ?>&action=view" target="_blank"
                               class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            
                            <!-- Download Button -->
                            <?php if (!empty($doc['file_path'])): ?>
                            <a href="document_file.php?id=<?= $doc['id'] ?>&action=download" 
                               class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg" title="Download">
                                <i class="fas fa-download"></i>
                            </a>
                            <?php endif; ?>
                            
                            <!-- Verify/Reject (only for UPLOADED status) -->
                            <?php if ($docStatus === 'UPLOADED'): ?>
                            <form method="POST" action="documents.php<?= !empty($_SERVER['QUERY_STRING']) ? '?' . htmlspecialchars($_SERVER['QUERY_STRING']) : '' ?>" class="inline">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="verify">
                                <input type="hidden" name="document_id" value="<?= $doc['id'] ?>">
                                <button type="submit" class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded-lg" title="Verify">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            <button onclick="rejectDocument(<?= $doc['id'] ?>)" 
                                    class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg" title="Reject">
                                <i class="fas fa-ban"></i>
                            </button>
                            <?php endif; ?>
                            
                            <!-- Delete -->
                            <form method="POST" action="documents.php<?= !empty($_SERVER['QUERY_STRING']) ? '?' . htmlspecialchars($_SERVER['QUERY_STRING']) : '' ?>" class="inline" onsubmit="return confirm('Delete this document?')">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="document_id" value="<?= $doc['id'] ?>">
                                <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <?php if (!empty($documents)): ?>
    <div class="px-4 py-3 bg-gray-50 border-t border-gray-200 text-sm text-gray-500">
        Showing <?= count($documents) ?> document(s)
    </div>
    <?php endif; ?>
</div>

<!-- View Document Modal -->
<div id="viewModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeViewModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden">
        <div class="p-4 border-b flex items-center justify-between bg-gray-50">
            <h3 class="font-semibold text-gray-900"><i class="fas fa-file mr-2"></i>Document Preview</h3>
            <div class="flex items-center gap-2">
                <a id="viewDownloadLink" href="#" download class="btn btn-secondary text-sm">
                    <i class="fas fa-download mr-1"></i> Download
                </a>
                <button onclick="closeViewModal()" class="p-2 hover:bg-gray-200 rounded-lg">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div id="viewContent" class="p-4 bg-gray-100 min-h-[400px] flex items-center justify-center">
            <!-- Content loaded dynamically -->
        </div>
        <div class="p-4 border-t bg-gray-50 flex justify-end gap-2">
            <form method="POST" action="documents.php<?= !empty($_SERVER['QUERY_STRING']) ? '?' . htmlspecialchars($_SERVER['QUERY_STRING']) : '' ?>" id="viewVerifyForm" class="inline">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="verify">
                <input type="hidden" name="document_id" id="view_doc_id">
                <button type="submit" class="btn btn-success"><i class="fas fa-check mr-2"></i>Verify</button>
            </form>
            <button onclick="rejectFromView()" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Reject</button>
        </div>
    </div>
</div>

<!-- Upload Modal -->
<div id="uploadModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" onclick="closeUploadModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-hidden">
        <div class="p-6 border-b bg-gradient-to-r from-blue-50 to-indigo-50">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold"><i class="fas fa-upload text-blue-500 mr-2"></i>Upload Documents</h3>
                <button onclick="closeUploadModal()" class="p-2 hover:bg-white/50 rounded-lg"><i class="fas fa-times"></i></button>
            </div>
        </div>
        
        <form method="POST" enctype="multipart/form-data" class="p-6 space-y-4 max-h-[60vh] overflow-y-auto" onsubmit="return validateUploadForm()">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="upload">
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Client *</label>
                    <div class="relative" id="uploadClientWrapper">
                        <input type="hidden" name="client_id" id="uploadClientId">
                        <input type="text" id="uploadClientSearch" class="form-input w-full" placeholder="Type to search clients..." autocomplete="off"
                               onfocus="openClientDropdown('upload')" oninput="filterClientList('upload')">
                        <div id="uploadClientDropdown" class="hidden absolute z-50 mt-1 w-full max-h-48 overflow-y-auto bg-white border border-gray-200 rounded-lg shadow-lg">
                            <div class="p-2 border-b sticky top-0 bg-white">
                                <p class="text-xs text-gray-400"><?= count($clients) ?> active clients</p>
                            </div>
                            <div id="uploadClientList">
                                <?php foreach ($clients as $c): ?>
                                <div class="client-option px-3 py-2 hover:bg-blue-50 cursor-pointer text-sm"
                                     data-id="<?= $c['id'] ?>" data-name="<?= htmlspecialchars($c['name']) ?>"
                                     onclick="selectClient('upload', <?= $c['id'] ?>, this.dataset.name)">
                                    <?= htmlspecialchars($c['name']) ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div id="uploadClientEmpty" class="hidden p-3 text-center text-gray-400 text-sm">No clients found</div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="form-label">Person (Optional)</label>
                    <select name="person_id" id="upload_person_id" class="form-input">
                        <option value="">Entity Document (No Person)</option>
                    </select>
                    <p class="text-xs text-gray-400 mt-1">Select for person-level documents</p>
                </div>
            </div>
            
            <div id="documentRows" class="space-y-3">
                <div class="doc-row flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <div class="flex-1">
                        <select name="doc_types[]" class="form-input" required>
                            <option value="">Select Type...</option>
                            <optgroup label="🏢 Entity Documents">
                                <?php foreach ($entityDocTypes as $dt): ?>
                                <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                            <optgroup label="👤 Person Documents">
                                <?php foreach ($personDocTypes as $dt): ?>
                                <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="flex-1">
                        <input type="file" name="documents[]" class="form-input" required accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx">
                    </div>
                    <button type="button" onclick="removeDocRow(this)" class="p-2 text-red-500 hover:bg-red-50 rounded hidden">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            
            <button type="button" onclick="addDocRow()" class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                <i class="fas fa-plus mr-1"></i> Add Another Document
            </button>
            
            <div id="dropZone" class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-400 hover:bg-blue-50 transition-all cursor-pointer"
                 onclick="document.getElementById('bulkFiles').click()">
                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                <p class="text-gray-600">Drag & drop files here or <span class="text-blue-600">Browse</span></p>
                <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG, DOC, XLS (Max 10MB each)</p>
                <input type="file" id="bulkFiles" class="hidden" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx" onchange="handleBulkFiles(this.files)">
            </div>
            
            <div class="flex justify-end gap-3 pt-4 border-t">
                <button type="button" onclick="closeUploadModal()" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-upload mr-2"></i> Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- Reject Modal -->
<div id="rejectModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50" onclick="closeRejectModal()"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-semibold mb-4"><i class="fas fa-ban text-red-500 mr-2"></i>Reject Document</h3>
        <form method="POST" action="documents.php<?= !empty($_SERVER['QUERY_STRING']) ? '?' . htmlspecialchars($_SERVER['QUERY_STRING']) : '' ?>">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="reject">
            <input type="hidden" name="document_id" id="reject_document_id">
            <div class="mb-4">
                <label class="form-label">Rejection Reason</label>
                <textarea name="rejection_reason" class="form-input" rows="3" placeholder="Enter reason for rejection..."></textarea>
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="closeRejectModal()" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-danger">Reject</button>
            </div>
        </form>
    </div>
</div>

<script>
// Document type options for dynamic rows
const docTypeOptions = `
    <option value="">Select Type...</option>
    <optgroup label="🏢 Entity Documents">
        <?php foreach ($entityDocTypes as $dt): ?>
        <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
        <?php endforeach; ?>
    </optgroup>
    <optgroup label="👤 Person Documents">
        <?php foreach ($personDocTypes as $dt): ?>
        <option value="<?= $dt['id'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
        <?php endforeach; ?>
    </optgroup>
`;

function openUploadModal() { 
    document.getElementById('uploadModal').classList.remove('hidden');
    // Reset client selection when opening
    document.getElementById('uploadClientId').value = '';
    document.getElementById('uploadClientSearch').value = '';
}
function closeUploadModal() { document.getElementById('uploadModal').classList.add('hidden'); closeAllClientDropdowns(); }
function closeRejectModal() { document.getElementById('rejectModal').classList.add('hidden'); }
function closeViewModal() { document.getElementById('viewModal').classList.add('hidden'); }

// ========== Searchable Client Dropdown ==========
function openClientDropdown(prefix) {
    closeAllClientDropdowns();
    const dropdown = document.getElementById(prefix + 'ClientDropdown');
    dropdown.classList.remove('hidden');
    // Reset filter to show all
    filterClientList(prefix);
}

function closeAllClientDropdowns() {
    ['filter', 'upload'].forEach(p => {
        const dd = document.getElementById(p + 'ClientDropdown');
        if (dd) dd.classList.add('hidden');
    });
}

function filterClientList(prefix) {
    const search = document.getElementById(prefix + 'ClientSearch').value.toLowerCase().trim();
    const list = document.getElementById(prefix + 'ClientList');
    const empty = document.getElementById(prefix + 'ClientEmpty');
    const options = list.querySelectorAll('.client-option');
    let visibleCount = 0;
    
    options.forEach(opt => {
        const name = (opt.dataset.name || '').toLowerCase();
        const match = !search || name.includes(search);
        opt.style.display = match ? '' : 'none';
        if (match) visibleCount++;
    });
    
    empty.classList.toggle('hidden', visibleCount > 0);
}

function selectClient(prefix, id, name) {
    document.getElementById(prefix + 'ClientId').value = id;
    document.getElementById(prefix + 'ClientSearch').value = name;
    document.getElementById(prefix + 'ClientDropdown').classList.add('hidden');
    
    // Trigger person load for upload modal
    if (prefix === 'upload') {
        loadPersons(id);
    }
}

function clearClientSelect(prefix) {
    document.getElementById(prefix + 'ClientId').value = '';
    document.getElementById(prefix + 'ClientSearch').value = '';
    // Auto-submit filter form
    if (prefix === 'filter') {
        document.getElementById(prefix + 'ClientSearch').closest('form').submit();
    }
}

// Close dropdowns on outside click
document.addEventListener('click', function(e) {
    ['filter', 'upload'].forEach(prefix => {
        const wrapper = document.getElementById(prefix + 'ClientWrapper');
        if (wrapper && !wrapper.contains(e.target)) {
            const dd = document.getElementById(prefix + 'ClientDropdown');
            if (dd) dd.classList.add('hidden');
        }
    });
});

function validateUploadForm() {
    const clientId = document.getElementById('uploadClientId').value;
    if (!clientId) {
        alert('Please select a client.');
        document.getElementById('uploadClientSearch').focus();
        return false;
    }
    return true;
}

function viewDocument(docId, filePath, ext) {
    const modal = document.getElementById('viewModal');
    const content = document.getElementById('viewContent');
    const downloadLink = document.getElementById('viewDownloadLink');
    
    document.getElementById('view_doc_id').value = docId;
    downloadLink.href = filePath;
    
    // Check if image or PDF
    if (['jpg', 'jpeg', 'png', 'gif'].includes(ext)) {
        content.innerHTML = `<img src="${filePath}" class="file-preview rounded-lg shadow-lg" alt="Document Preview">`;
    } else if (ext === 'pdf') {
        content.innerHTML = `<iframe src="${filePath}" class="w-full h-[60vh] rounded-lg shadow-lg"></iframe>`;
    } else {
        content.innerHTML = `
            <div class="text-center p-8">
                <i class="fas fa-file text-6xl text-gray-400 mb-4"></i>
                <p class="text-gray-600">Preview not available for this file type.</p>
                <a href="${filePath}" download class="btn btn-primary mt-4">
                    <i class="fas fa-download mr-2"></i> Download to View
                </a>
            </div>
        `;
    }
    
    modal.classList.remove('hidden');
}

function rejectDocument(docId) {
    document.getElementById('reject_document_id').value = docId;
    document.getElementById('rejectModal').classList.remove('hidden');
}

function rejectFromView() {
    const docId = document.getElementById('view_doc_id').value;
    closeViewModal();
    rejectDocument(docId);
}

function addDocRow() {
    const container = document.getElementById('documentRows');
    const row = document.createElement('div');
    row.className = 'doc-row flex items-center gap-3 p-3 bg-gray-50 rounded-lg';
    row.innerHTML = `
        <div class="flex-1">
            <select name="doc_types[]" class="form-input" required>${docTypeOptions}</select>
        </div>
        <div class="flex-1">
            <input type="file" name="documents[]" class="form-input" required accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx">
        </div>
        <button type="button" onclick="removeDocRow(this)" class="p-2 text-red-500 hover:bg-red-50 rounded">
            <i class="fas fa-times"></i>
        </button>
    `;
    container.appendChild(row);
    updateRemoveButtons();
}

function removeDocRow(btn) {
    btn.closest('.doc-row').remove();
    updateRemoveButtons();
}

function updateRemoveButtons() {
    const rows = document.querySelectorAll('.doc-row');
    rows.forEach((row, i) => {
        const btn = row.querySelector('button[onclick*="removeDocRow"]');
        if (btn) btn.classList.toggle('hidden', rows.length === 1);
    });
}

function handleBulkFiles(files) {
    const container = document.getElementById('documentRows');
    for (let i = 0; i < files.length; i++) {
        if (i === 0) {
            const firstInput = container.querySelector('.doc-row input[type="file"]');
            const dt = new DataTransfer();
            dt.items.add(files[i]);
            firstInput.files = dt.files;
        } else {
            addDocRow();
            const rows = container.querySelectorAll('.doc-row');
            const lastInput = rows[rows.length - 1].querySelector('input[type="file"]');
            const dt = new DataTransfer();
            dt.items.add(files[i]);
            lastInput.files = dt.files;
        }
    }
}

function loadPersons(clientId) {
    const select = document.getElementById('upload_person_id');
    select.innerHTML = '<option value="">Entity Document (No Person)</option>';
    if (!clientId) return;
    
    select.innerHTML = '<option value="">Loading persons...</option>';
    select.disabled = true;
    
    fetch('ajax/get_persons.php?client_id=' + clientId)
        .then(r => r.json())
        .then(persons => {
            select.innerHTML = '<option value="">Entity Document (No Person)</option>';
            select.disabled = false;
            if (persons.length > 0) {
                persons.forEach(p => {
                    const opt = document.createElement('option');
                    opt.value = p.id;
                    let label = p.name || p.full_name || 'Unknown';
                    let role = p.designation || p.relationship_type || '';
                    if (role) label += ' (' + role.replace(/_/g, ' ') + ')';
                    opt.textContent = label;
                    select.appendChild(opt);
                });
            }
        }).catch(() => {
            select.innerHTML = '<option value="">Entity Document (No Person)</option>';
            select.disabled = false;
        });
}

// Drag & Drop
const dropZone = document.getElementById('dropZone');
if (dropZone) {
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(e => {
        dropZone.addEventListener(e, ev => { ev.preventDefault(); ev.stopPropagation(); });
    });
    ['dragenter', 'dragover'].forEach(e => {
        dropZone.addEventListener(e, () => dropZone.classList.add('border-blue-500', 'bg-blue-50'));
    });
    ['dragleave', 'drop'].forEach(e => {
        dropZone.addEventListener(e, () => dropZone.classList.remove('border-blue-500', 'bg-blue-50'));
    });
    dropZone.addEventListener('drop', e => handleBulkFiles(e.dataTransfer.files));
}

// Keyboard shortcuts
document.addEventListener('keydown', e => { if (e.key === 'Escape') { closeViewModal(); closeUploadModal(); closeRejectModal(); } });
</script>

<?php require_once 'includes/footer.php'; ?>
