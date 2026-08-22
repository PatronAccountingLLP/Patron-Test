<?php
/**
 * PATRON - Person Documents with OCR Extraction
 * Upload KYC documents and auto-extract person details
 * 
 * LOCATION: /patron/person_documents.php
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$personId = (int)($_GET['id'] ?? 0);
if (!$personId) {
    setFlash('error', 'Person not found.');
    header('Location: persons.php');
    exit;
}

$person = dbFetchOne("SELECT * FROM persons_new WHERE id = ? AND deleted_at IS NULL", [$personId]);
if (!$person) {
    setFlash('error', 'Person not found.');
    header('Location: persons.php');
    exit;
}

$pageTitle = 'Documents - ' . $person['full_name'];

// Handle document delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'delete') {
    $docId = (int)($_POST['doc_id'] ?? 0);
    if ($docId) {
        $doc = dbFetchOne("SELECT file_path FROM client_documents WHERE id = ? AND person_id = ?", [$docId, $personId]);
        if ($doc) {
            dbExecute("UPDATE client_documents SET deleted_at = NOW() WHERE id = ?", [$docId]);
            setFlash('success', 'Document deleted.');
        }
    }
    header('Location: person_documents.php?id=' . $personId);
    exit;
}

// Get existing documents for this person
$documents = dbFetchAll("
    SELECT cd.*, dt.name as doc_type_name, dt.code as doc_type_code,
           u.display_name as uploaded_by_name
    FROM client_documents cd
    LEFT JOIN document_types dt ON cd.document_type_id = dt.id
    LEFT JOIN users u ON cd.uploaded_by = u.id
    WHERE cd.person_id = ? AND cd.deleted_at IS NULL
    ORDER BY cd.created_at DESC
", [$personId]) ?: [];

// Get all document types
$documentTypes = dbFetchAll("SELECT id, name, code, category FROM document_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY category, name") ?: [];

// Group by category
$docTypesByCategory = [];
foreach ($documentTypes as $dt) {
    $cat = $dt['category'] ?? 'Other';
    $docTypesByCategory[$cat][] = $dt;
}

// Common KYC documents with OCR support
$commonDocs = [
    ['code' => 'PAN', 'name' => 'PAN Card', 'icon' => 'fa-id-card', 'color' => 'blue', 'ocr' => true],
    ['code' => 'AADHAAR', 'name' => 'Aadhaar Card', 'icon' => 'fa-fingerprint', 'color' => 'orange', 'ocr' => true],
    ['code' => 'PASSPORT', 'name' => 'Passport', 'icon' => 'fa-passport', 'color' => 'indigo', 'ocr' => true],
    ['code' => 'VOTER_ID', 'name' => 'Voter ID', 'icon' => 'fa-vote-yea', 'color' => 'purple', 'ocr' => true],
    ['code' => 'DL', 'name' => 'Driving License', 'icon' => 'fa-car', 'color' => 'green', 'ocr' => true],
    ['code' => 'DIN', 'name' => 'DIN Letter', 'icon' => 'fa-certificate', 'color' => 'red', 'ocr' => true],
    ['code' => 'PHOTO', 'name' => 'Photo', 'icon' => 'fa-user-circle', 'color' => 'gray', 'ocr' => false],
    ['code' => 'SIGNATURE', 'name' => 'Signature', 'icon' => 'fa-signature', 'color' => 'gray', 'ocr' => false],
    ['code' => 'BANK_STMT', 'name' => 'Bank Statement', 'icon' => 'fa-university', 'color' => 'teal', 'ocr' => false],
];

require_once 'includes/header.php';
?>

<style>
.doc-card {
    border: 2px dashed #e5e7eb;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s;
    min-height: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.doc-card:hover { border-color: #7c3aed; background: #f8f5ff; }
.doc-card.uploading { border-color: #f59e0b; background: #fffbeb; }
.doc-card.success { border-color: #22c55e; background: #f0fdf4; border-style: solid; }
.doc-card.error { border-color: #ef4444; background: #fef2f2; }
.doc-card input[type="file"] { display: none; }

.doc-icon { font-size: 28px; margin-bottom: 8px; }
.doc-icon.blue { color: #3b82f6; }
.doc-icon.orange { color: #f97316; }
.doc-icon.indigo { color: #6366f1; }
.doc-icon.purple { color: #a855f7; }
.doc-icon.green { color: #22c55e; }
.doc-icon.red { color: #ef4444; }
.doc-icon.teal { color: #14b8a6; }
.doc-icon.gray { color: #6b7280; }

.ocr-badge {
    font-size: 9px;
    padding: 2px 6px;
    border-radius: 4px;
    background: #dbeafe;
    color: #1d4ed8;
    margin-top: 4px;
}

.extract-result {
    margin-top: 10px;
    padding: 10px;
    border-radius: 8px;
    font-size: 12px;
    text-align: left;
    display: none;
}
.extract-result.show { display: block; }
.extract-result.success { background: #ecfdf5; border: 1px solid #a7f3d0; }
.extract-result.warning { background: #fffbeb; border: 1px solid #fcd34d; }

.field-item {
    display: flex;
    justify-content: space-between;
    padding: 4px 0;
    border-bottom: 1px solid #e5e7eb;
}
.field-item:last-child { border-bottom: none; }
.field-label { color: #6b7280; }
.field-value { font-weight: 600; color: #111827; }

.existing-doc {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 16px;
    background: #f9fafb;
    border-radius: 8px;
    margin-bottom: 8px;
}
.existing-doc:hover { background: #f3f4f6; }

.person-info-card {
    background: linear-gradient(135deg, #f5f3ff, #ede9fe);
    border: 1px solid #ddd6fe;
    border-radius: 12px;
    padding: 16px;
    margin-bottom: 20px;
}

.spinner {
    width: 20px; height: 20px;
    border: 2px solid rgba(124, 58, 237, 0.3);
    border-top-color: #7c3aed;
    border-radius: 50%;
    animation: spin 0.6s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="persons.php" class="hover:text-blue-600">Persons</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="person_view.php?id=<?= $personId ?>" class="hover:text-blue-600"><?= htmlspecialchars($person['full_name']) ?></a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Documents</span>
        </div>
        <h2 class="text-2xl font-bold"><i class="fas fa-folder-open text-purple-500 mr-2"></i>KYC Documents</h2>
    </div>
    <a href="person_view.php?id=<?= $personId ?>" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">
        <i class="fas fa-arrow-left mr-2"></i>Back to Profile
    </a>
</div>

<!-- Person Info Summary -->
<div class="person-info-card">
    <div class="flex items-center gap-4">
        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow">
            <i class="fas fa-user text-2xl text-purple-500"></i>
        </div>
        <div class="flex-1">
            <h3 class="font-bold text-lg"><?= htmlspecialchars($person['full_name']) ?></h3>
            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mt-1">
                <?php if ($person['pan_number']): ?>
                <span><i class="fas fa-id-card text-blue-500 mr-1"></i>PAN: <?= $person['pan_number'] ?></span>
                <?php endif; ?>
                <?php if ($person['aadhaar_number']): ?>
                <span><i class="fas fa-fingerprint text-orange-500 mr-1"></i>Aadhaar: <?= substr($person['aadhaar_number'], 0, 4) ?>****<?= substr($person['aadhaar_number'], -4) ?></span>
                <?php endif; ?>
                <?php if ($person['din']): ?>
                <span><i class="fas fa-certificate text-red-500 mr-1"></i>DIN: <?= $person['din'] ?></span>
                <?php endif; ?>
                <?php if ($person['dob']): ?>
                <span><i class="fas fa-birthday-cake text-pink-500 mr-1"></i>DOB: <?= date('d M Y', strtotime($person['dob'])) ?></span>
                <?php endif; ?>
            </div>
        </div>
        <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" id="autoUpdatePerson" checked class="form-checkbox">
            <span>Auto-update person details</span>
        </label>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Upload Section -->
    <div class="lg:col-span-2">
        <div class="card p-6">
            <h3 class="font-bold text-gray-700 mb-4">
                <i class="fas fa-magic text-purple-500 mr-2"></i>
                Upload & Extract
                <span class="text-xs font-normal text-gray-500 ml-2">Click a card to upload document</span>
            </h3>
            
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                <?php foreach ($commonDocs as $doc): ?>
                <div class="doc-card" data-code="<?= $doc['code'] ?>" data-name="<?= $doc['name'] ?>" data-ocr="<?= $doc['ocr'] ? '1' : '0' ?>" onclick="triggerUpload(this)">
                    <input type="file" accept=".pdf,.jpg,.jpeg,.png" onchange="handleFileSelect(this)">
                    <i class="fas <?= $doc['icon'] ?> doc-icon <?= $doc['color'] ?>"></i>
                    <span class="text-xs font-medium"><?= $doc['name'] ?></span>
                    <?php if ($doc['ocr']): ?>
                    <span class="ocr-badge"><i class="fas fa-magic mr-1"></i>OCR</span>
                    <?php endif; ?>
                    <div class="extract-result"></div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Custom Upload -->
            <div class="mt-4 pt-4 border-t">
                <div class="flex items-center gap-3">
                    <select id="customDocType" class="form-input flex-1">
                        <option value="">Select other document type...</option>
                        <?php foreach ($docTypesByCategory as $cat => $types): ?>
                        <optgroup label="<?= htmlspecialchars($cat) ?>">
                            <?php foreach ($types as $dt): ?>
                            <option value="<?= $dt['id'] ?>" data-code="<?= $dt['code'] ?>"><?= htmlspecialchars($dt['name']) ?></option>
                            <?php endforeach; ?>
                        </optgroup>
                        <?php endforeach; ?>
                    </select>
                    <label class="btn btn-primary cursor-pointer">
                        <i class="fas fa-upload mr-2"></i>Upload
                        <input type="file" accept=".pdf,.jpg,.jpeg,.png" class="hidden" onchange="handleCustomUpload(this)">
                    </label>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Existing Documents -->
    <div class="lg:col-span-1">
        <div class="card p-6">
            <h3 class="font-bold text-gray-700 mb-4">
                <i class="fas fa-file-alt text-green-500 mr-2"></i>
                Uploaded (<?= count($documents) ?>)
            </h3>
            
            <?php if (empty($documents)): ?>
            <div class="text-center py-8 text-gray-400">
                <i class="fas fa-inbox fa-2x mb-2"></i>
                <p class="text-sm">No documents yet</p>
            </div>
            <?php else: ?>
            <div class="space-y-2 max-h-96 overflow-y-auto">
                <?php foreach ($documents as $doc): 
                    $ext = strtolower(pathinfo($doc['file_path'] ?? '', PATHINFO_EXTENSION));
                    $isImage = in_array($ext, ['jpg', 'jpeg', 'png']);
                ?>
                <div class="existing-doc">
                    <div class="flex items-center gap-3">
                        <i class="fas <?= $isImage ? 'fa-file-image text-green-500' : 'fa-file-pdf text-red-500' ?>"></i>
                        <div>
                            <p class="text-sm font-medium"><?= htmlspecialchars($doc['doc_type_name'] ?? 'Document') ?></p>
                            <p class="text-xs text-gray-400"><?= date('d M Y', strtotime($doc['created_at'])) ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-1">
                        <a href="document_file.php?id=<?= $doc['id'] ?>&action=view" target="_blank" 
                           class="p-1.5 text-blue-500 hover:bg-blue-50 rounded" title="View">
                            <i class="fas fa-eye text-xs"></i>
                        </a>
                        <form method="POST" class="inline" onsubmit="return confirm('Delete?')">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="doc_id" value="<?= $doc['id'] ?>">
                            <button class="p-1.5 text-red-500 hover:bg-red-50 rounded" title="Delete">
                                <i class="fas fa-trash text-xs"></i>
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
const personId = <?= $personId ?>;

function triggerUpload(card) {
    card.querySelector('input[type="file"]').click();
}

async function handleFileSelect(input) {
    const file = input.files[0];
    if (!file) return;
    
    const card = input.closest('.doc-card');
    const code = card.dataset.code;
    const name = card.dataset.name;
    const hasOCR = card.dataset.ocr === '1';
    const resultDiv = card.querySelector('.extract-result');
    const autoUpdate = document.getElementById('autoUpdatePerson').checked;
    
    // Update UI
    card.classList.remove('success', 'error');
    card.classList.add('uploading');
    resultDiv.innerHTML = '<div class="flex items-center gap-2"><div class="spinner"></div><span>Uploading & extracting...</span></div>';
    resultDiv.className = 'extract-result show';
    
    // Prepare form data
    const fd = new FormData();
    fd.append('document', file);
    fd.append('action', 'upload_and_extract');
    fd.append('person_id', personId);
    fd.append('document_type_code', code);
    fd.append('update_person', autoUpdate ? '1' : '0');
    
    try {
        const res = await fetch('ajax/person_ocr_extract.php', { method: 'POST', body: fd });
        const data = await res.json();
        
        card.classList.remove('uploading');
        
        if (data.success) {
            card.classList.add('success');
            
            let html = '<div class="text-green-700"><i class="fas fa-check-circle mr-1"></i>Uploaded!</div>';
            
            if (data.ocr_available && data.mapped_fields && Object.keys(data.mapped_fields).length > 0) {
                html += '<div class="mt-2 text-xs">';
                for (const [field, value] of Object.entries(data.mapped_fields)) {
                    const label = field.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
                    const isUpdated = data.updated_fields && data.updated_fields[field];
                    html += `<div class="field-item">
                        <span class="field-label">${label}</span>
                        <span class="field-value">${value} ${isUpdated ? '<i class="fas fa-check text-green-500" title="Updated"></i>' : ''}</span>
                    </div>`;
                }
                html += '</div>';
                
                if (data.updated_fields && Object.keys(data.updated_fields).length > 0) {
                    html += '<div class="mt-2 text-xs text-green-600"><i class="fas fa-sync mr-1"></i>Person profile updated!</div>';
                }
            } else if (!data.ocr_available) {
                html += '<div class="mt-1 text-xs text-amber-600"><i class="fas fa-info-circle mr-1"></i>OCR not available for images</div>';
            }
            
            resultDiv.innerHTML = html;
            resultDiv.className = 'extract-result show success';
            
            // Refresh page after 2 seconds to update the list
            setTimeout(() => location.reload(), 2000);
            
        } else {
            card.classList.add('error');
            resultDiv.innerHTML = `<div class="text-red-600"><i class="fas fa-times-circle mr-1"></i>${data.error || 'Upload failed'}</div>`;
            resultDiv.className = 'extract-result show warning';
        }
    } catch (err) {
        card.classList.remove('uploading');
        card.classList.add('error');
        resultDiv.innerHTML = `<div class="text-red-600"><i class="fas fa-times-circle mr-1"></i>Error: ${err.message}</div>`;
        resultDiv.className = 'extract-result show warning';
    }
    
    // Clear input for re-upload
    input.value = '';
}

async function handleCustomUpload(input) {
    const file = input.files[0];
    if (!file) return;
    
    const select = document.getElementById('customDocType');
    if (!select.value) {
        alert('Please select a document type first');
        input.value = '';
        return;
    }
    
    const code = select.options[select.selectedIndex].dataset.code || 'OTHER';
    const autoUpdate = document.getElementById('autoUpdatePerson').checked;
    
    const fd = new FormData();
    fd.append('document', file);
    fd.append('action', 'upload_and_extract');
    fd.append('person_id', personId);
    fd.append('document_type_id', select.value);
    fd.append('document_type_code', code);
    fd.append('update_person', autoUpdate ? '1' : '0');
    
    try {
        const res = await fetch('ajax/person_ocr_extract.php', { method: 'POST', body: fd });
        const data = await res.json();
        
        if (data.success) {
            alert('Document uploaded successfully!' + (data.updated_fields && Object.keys(data.updated_fields).length > 0 ? '\nPerson profile updated.' : ''));
            location.reload();
        } else {
            alert('Error: ' + (data.error || 'Upload failed'));
        }
    } catch (err) {
        alert('Error: ' + err.message);
    }
    
    input.value = '';
    select.value = '';
}
</script>

<?php require_once 'includes/footer.php'; ?>
