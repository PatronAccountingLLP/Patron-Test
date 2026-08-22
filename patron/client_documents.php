<?php
/**
 * PATRON - Client Documents
 * Upload and manage documents for a client (company/firm)
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

$pageTitle = 'Documents - ' . $client['name'];

// Handle document upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'upload') {
        $docTypeId = (int)($_POST['document_type_id'] ?? 0);
        $docTypeCode = sanitize($_POST['document_type_code'] ?? '');
        
        // If no document_type_id but we have a code, look it up or create it
        if (!$docTypeId && $docTypeCode) {
            $docType = dbFetchOne("SELECT id FROM document_types WHERE code = ? AND deleted_at IS NULL LIMIT 1", [$docTypeCode]);
            if ($docType) {
                $docTypeId = $docType['id'];
            } else {
                // Create the document type if it doesn't exist
                $docName = str_replace('_', ' ', ucwords(strtolower($docTypeCode)));
                dbExecute("INSERT INTO document_types (name, code, category, is_active, created_at) VALUES (?, ?, 'Business', 1, NOW())", [$docName, $docTypeCode]);
                $docTypeId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
            }
        }
        
        if (!$docTypeId) {
            setFlash('error', 'Please select a document type.');
            header('Location: client_documents.php?id=' . $clientId);
            exit;
        }
        
        if (isset($_FILES['document']) && $_FILES['document']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['document'];
            $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
            
            if (!in_array($file['type'], $allowedTypes)) {
                setFlash('error', 'Only PDF, JPG, PNG files are allowed.');
                header('Location: client_documents.php?id=' . $clientId);
                exit;
            }
            
            if ($file['size'] > 5 * 1024 * 1024) { // 5MB limit
                setFlash('error', 'File size must be less than 5MB.');
                header('Location: client_documents.php?id=' . $clientId);
                exit;
            }
            
            // Create upload directory
            $uploadDir = 'uploads/clients/' . $clientId . '/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            
            // Generate unique filename
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $filename = $docTypeCode . '_' . date('Ymd_His') . '.' . $ext;
            $filePath = $uploadDir . $filename;
            
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                dbExecute("INSERT INTO client_documents (client_id, document_type_id, file_path, file_name, uploaded_by, created_at) VALUES (?, ?, ?, ?, ?, NOW())", 
                    [$clientId, $docTypeId, $filePath, $file['name'], $_SESSION['user_id'] ?? null]);
                
                setFlash('success', 'Document uploaded successfully.');
            } else {
                setFlash('error', 'Failed to upload file.');
            }
        } else {
            setFlash('error', 'Please select a file to upload.');
        }
        
        header('Location: client_documents.php?id=' . $clientId);
        exit;
    }
    
    if ($action === 'delete') {
        $docId = (int)($_POST['doc_id'] ?? 0);
        if ($docId) {
            $doc = dbFetchOne("SELECT file_path FROM client_documents WHERE id = ? AND client_id = ?", [$docId, $clientId]);
            if ($doc) {
                // Soft delete
                dbExecute("UPDATE client_documents SET deleted_at = NOW() WHERE id = ?", [$docId]);
                setFlash('success', 'Document deleted.');
            }
        }
        header('Location: client_documents.php?id=' . $clientId);
        exit;
    }
}

// Get existing documents for this client (not person-specific)
$documents = dbFetchAll("
    SELECT cd.*, dt.name as doc_type_name, dt.code as doc_type_code,
           u.display_name as uploaded_by_name
    FROM client_documents cd
    LEFT JOIN document_types dt ON cd.document_type_id = dt.id
    LEFT JOIN users u ON cd.uploaded_by = u.id
    WHERE cd.client_id = ? AND cd.person_id IS NULL AND cd.deleted_at IS NULL
    ORDER BY cd.created_at DESC
", [$clientId]) ?: [];

// Get all document types for upload dropdown
$documentTypes = dbFetchAll("SELECT id, name, code, category FROM document_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY category, name") ?: [];

// Group document types by category
$docTypesByCategory = [];
foreach ($documentTypes as $dt) {
    $cat = $dt['category'] ?? 'Other';
    $docTypesByCategory[$cat][] = $dt;
}

// Common business documents
$commonDocs = [
    ['code' => 'COI', 'name' => 'Certificate of Incorporation'],
    ['code' => 'MOA', 'name' => 'MOA'],
    ['code' => 'AOA', 'name' => 'AOA'],
    ['code' => 'PAN_BUSINESS', 'name' => 'PAN Card (Business)'],
    ['code' => 'GST_CERT', 'name' => 'GST Certificate'],
    ['code' => 'MSME_CERT', 'name' => 'MSME Certificate'],
    ['code' => 'LLP_AGREE', 'name' => 'LLP Agreement'],
    ['code' => 'PARTNER_DEED', 'name' => 'Partnership Deed'],
    ['code' => 'BANK_DETAILS', 'name' => 'Bank Details'],
];

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="clients.php" class="hover:text-blue-600">Clients</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="client_view.php?id=<?= $clientId ?>" class="hover:text-blue-600"><?= htmlspecialchars($client['name']) ?></a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Documents</span>
        </div>
        <h2 class="text-2xl font-bold">Documents</h2>
        <p class="text-gray-500 text-sm">Manage documents for <?= htmlspecialchars($client['name']) ?></p>
    </div>
    <a href="client_view.php?id=<?= $clientId ?>" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">
        <i class="fas fa-arrow-left mr-2"></i>Back to Client
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Upload Form -->
    <div class="lg:col-span-1">
        <div class="card p-6">
            <h3 class="font-bold text-gray-700 mb-4"><i class="fas fa-upload text-blue-500 mr-2"></i>Upload Document</h3>
            
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                
                <!-- Quick Select Common Docs -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Quick Select</label>
                    <div class="grid grid-cols-3 gap-2">
                        <?php foreach ($commonDocs as $cd): ?>
                        <button type="button" onclick="selectDocType('<?= $cd['code'] ?>', '<?= $cd['name'] ?>')" 
                                class="p-2 text-xs border rounded hover:bg-blue-50 hover:border-blue-300 transition-colors truncate"
                                title="<?= $cd['name'] ?>">
                            <?= $cd['name'] ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Document Type Selection -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Document Type *</label>
                    <select name="document_type_id" id="docTypeSelect" class="form-input w-full" required>
                        <option value="">Select document type...</option>
                        <?php foreach ($docTypesByCategory as $cat => $types): ?>
                        <optgroup label="<?= htmlspecialchars($cat) ?>">
                            <?php foreach ($types as $dt): ?>
                            <option value="<?= $dt['id'] ?>" data-code="<?= $dt['code'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="document_type_code" id="docTypeCode">
                </div>
                
                <!-- File Upload -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Select File *</label>
                    <input type="file" name="document" class="form-input w-full" accept=".pdf,.jpg,.jpeg,.png" required>
                    <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG (Max 5MB)</p>
                </div>
                
                <button type="submit" class="btn btn-primary w-full">
                    <i class="fas fa-upload mr-2"></i>Upload Document
                </button>
            </form>
        </div>
    </div>
    
    <!-- Document List -->
    <div class="lg:col-span-2">
        <div class="card p-6">
            <h3 class="font-bold text-gray-700 mb-4">
                <i class="fas fa-folder-open text-purple-500 mr-2"></i>
                Uploaded Documents (<?= count($documents) ?>)
            </h3>
            
            <?php if (empty($documents)): ?>
            <div class="text-center py-12 text-gray-500">
                <i class="fas fa-file-alt fa-3x text-gray-300 mb-4"></i>
                <p>No documents uploaded yet</p>
                <p class="text-sm">Upload documents using the form on the left</p>
            </div>
            <?php else: ?>
            <div class="space-y-3">
                <?php foreach ($documents as $doc): 
                    $ext = strtolower(pathinfo($doc['file_path'] ?? '', PATHINFO_EXTENSION));
                    $icon = in_array($ext, ['jpg', 'jpeg', 'png']) ? 'fa-file-image' : 'fa-file-pdf';
                    $iconColor = in_array($ext, ['jpg', 'jpeg', 'png']) ? 'text-green-500' : 'text-red-500';
                ?>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-sm">
                            <i class="fas <?= $icon ?> <?= $iconColor ?> text-xl"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900"><?= htmlspecialchars($doc['doc_type_name'] ?? 'Document') ?></p>
                            <p class="text-xs text-gray-500">
                                <?= htmlspecialchars($doc['file_name'] ?? '') ?>
                                <span class="mx-1">•</span>
                                <?= date('d M Y', strtotime($doc['created_at'])) ?>
                                <?php if ($doc['uploaded_by_name']): ?>
                                <span class="mx-1">•</span>
                                by <?= htmlspecialchars($doc['uploaded_by_name']) ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <?php if ($doc['file_path']): ?>
                        <a href="<?= htmlspecialchars($doc['file_path']) ?>" target="_blank" 
                           class="p-2 text-blue-600 hover:bg-blue-100 rounded" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="<?= htmlspecialchars($doc['file_path']) ?>" download 
                           class="p-2 text-green-600 hover:bg-green-100 rounded" title="Download">
                            <i class="fas fa-download"></i>
                        </a>
                        <?php endif; ?>
                        <form method="POST" class="inline" onsubmit="return confirm('Delete this document?')">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="doc_id" value="<?= $doc['id'] ?>">
                            <button type="submit" class="p-2 text-red-600 hover:bg-red-100 rounded" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
function selectDocType(code, name) {
    const select = document.getElementById('docTypeSelect');
    const codeInput = document.getElementById('docTypeCode');
    
    // Find option by code
    let found = false;
    for (let option of select.options) {
        if (option.dataset.code === code) {
            select.value = option.value;
            found = true;
            break;
        }
    }
    
    // If not found in dropdown, store the code so it can be created
    if (!found) {
        // Add a temporary option
        const tempOption = document.createElement('option');
        tempOption.value = '';
        tempOption.text = name + ' (will be created)';
        tempOption.dataset.code = code;
        tempOption.selected = true;
        select.appendChild(tempOption);
    }
    
    codeInput.value = code;
}

// Update code when dropdown changes
document.getElementById('docTypeSelect').addEventListener('change', function() {
    const selected = this.options[this.selectedIndex];
    document.getElementById('docTypeCode').value = selected.dataset.code || '';
});
</script>

<?php require_once 'includes/footer.php'; ?>
