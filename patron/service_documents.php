<?php
/**
 * PATRON - Service Documents Management
 * Manage which documents are required for a service
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$serviceId = (int)($_GET['id'] ?? 0);
if (!$serviceId) {
    setFlash('error', 'Please select a service first.');
    header('Location: services.php');
    exit;
}

$service = dbFetchOne("SELECT * FROM services WHERE id = ? AND deleted_at IS NULL", [$serviceId]);
if (!$service) {
    setFlash('error', 'Service not found.');
    header('Location: services.php');
    exit;
}

$pageTitle = 'Documents - ' . $service['name'];

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add_document') {
        $docTypeId = (int)($_POST['document_type_id'] ?? 0);
        $isRequired = isset($_POST['is_required']) ? 1 : 0;
        
        if ($docTypeId) {
            // Check if already exists
            $existing = dbFetchOne("SELECT id FROM service_document_requirements WHERE service_id = ? AND document_type_id = ?", [$serviceId, $docTypeId]);
            if ($existing) {
                setFlash('error', 'This document is already added to this service.');
            } else {
                dbExecute("INSERT INTO service_document_requirements (service_id, document_type_id, is_required) VALUES (?, ?, ?)", 
                    [$serviceId, $docTypeId, $isRequired]);
                setFlash('success', 'Document requirement added.');
            }
        }
    }
    
    if ($action === 'update_document') {
        $reqId = (int)($_POST['req_id'] ?? 0);
        $isRequired = isset($_POST['is_required']) ? 1 : 0;
        
        if ($reqId) {
            dbExecute("UPDATE service_document_requirements SET is_required = ? WHERE id = ? AND service_id = ?", 
                [$isRequired, $reqId, $serviceId]);
            setFlash('success', 'Document updated.');
        }
    }
    
    if ($action === 'remove_document') {
        $reqId = (int)($_POST['req_id'] ?? 0);
        if ($reqId) {
            dbExecute("DELETE FROM service_document_requirements WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
            setFlash('success', 'Document removed.');
        }
    }
    
    if ($action === 'bulk_add') {
        $docIds = $_POST['doc_ids'] ?? [];
        $added = 0;
        foreach ($docIds as $did) {
            $did = (int)$did;
            $existing = dbFetchOne("SELECT id FROM service_document_requirements WHERE service_id = ? AND document_type_id = ?", [$serviceId, $did]);
            if (!$existing) {
                dbExecute("INSERT INTO service_document_requirements (service_id, document_type_id, is_required) VALUES (?, ?, 1)", 
                    [$serviceId, $did]);
                $added++;
            }
        }
        if ($added) {
            setFlash('success', "$added document(s) added.");
        }
    }
    
    header('Location: service_documents.php?id=' . $serviceId);
    exit;
}

// Get current document requirements
$currentDocs = dbFetchAll("
    SELECT sdr.*, dt.name as doc_name, dt.code as doc_code, dt.category
    FROM service_document_requirements sdr
    JOIN document_types dt ON sdr.document_type_id = dt.id
    WHERE sdr.service_id = ?
    ORDER BY sdr.is_required DESC, dt.name
", [$serviceId]) ?: [];

$currentDocIds = array_column($currentDocs, 'document_type_id');

// Get all available document types not yet added
$availableDocs = dbFetchAll("
    SELECT * FROM document_types 
    WHERE (deleted_at IS NULL OR deleted_at IS NULL)
    AND id NOT IN (" . (empty($currentDocIds) ? '0' : implode(',', $currentDocIds)) . ")
    ORDER BY category, name
") ?: [];

// Group available docs by category
$docsByCategory = [];
foreach ($availableDocs as $d) {
    $cat = $d['category'] ?? 'Other';
    $docsByCategory[$cat][] = $d;
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="services.php" class="hover:text-blue-600">Services</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span><?= htmlspecialchars($service['name']) ?></span>
        </div>
        <h2 class="text-2xl font-bold">Document Requirements</h2>
        <p class="text-gray-500 text-sm">Configure which documents are needed for this service</p>
    </div>
    <div class="flex gap-2">
        <a href="service_info_fields.php?id=<?= $serviceId ?>" class="btn bg-purple-100 text-purple-700 hover:bg-purple-200">
            <i class="fas fa-info-circle mr-2"></i>Info Fields
        </a>
        <a href="edit_service.php?id=<?= $serviceId ?>" class="btn bg-gray-100 text-gray-700 hover:bg-gray-200">
            <i class="fas fa-edit mr-2"></i>Edit Service
        </a>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Current Documents -->
    <div class="card p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-gray-700">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                Required Documents (<?= count($currentDocs) ?>)
            </h3>
        </div>
        
        <?php if (empty($currentDocs)): ?>
        <div class="text-center py-8 text-gray-500">
            <i class="fas fa-file-alt text-4xl text-gray-300 mb-3"></i>
            <p>No documents assigned yet</p>
            <p class="text-sm">Add documents from the right panel</p>
        </div>
        <?php else: ?>
        <div class="space-y-3">
            <?php foreach ($currentDocs as $d): ?>
            <div class="p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-medium"><?= htmlspecialchars($d['doc_name']) ?></p>
                        <p class="text-xs text-gray-500">
                            <span class="font-mono"><?= htmlspecialchars($d['doc_code']) ?></span>
                            <span class="mx-1">•</span>
                            <span><?= htmlspecialchars($d['category']) ?></span>
                        </p>
                    </div>
                    <span class="px-2 py-1 rounded text-xs <?= $d['is_required'] ? 'bg-red-100 text-red-700' : 'bg-gray-200 text-gray-600' ?>">
                        <?= $d['is_required'] ? 'Required' : 'Optional' ?>
                    </span>
                </div>
                <div class="mt-3 pt-3 border-t flex items-center justify-between">
                    <form method="POST" class="flex items-center gap-2">
                        <input type="hidden" name="action" value="update_document">
                        <input type="hidden" name="req_id" value="<?= $d['id'] ?>">
                        <label class="flex items-center gap-1 text-sm">
                            <input type="checkbox" name="is_required" value="1" <?= $d['is_required'] ? 'checked' : '' ?> onchange="this.form.submit()">
                            Required
                        </label>
                    </form>
                    <form method="POST" onsubmit="return confirm('Remove this document?')">
                        <input type="hidden" name="action" value="remove_document">
                        <input type="hidden" name="req_id" value="<?= $d['id'] ?>">
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Available Documents -->
    <div class="card p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-gray-700">
                <i class="fas fa-plus-circle text-blue-500 mr-2"></i>
                Available Documents (<?= count($availableDocs) ?>)
            </h3>
        </div>
        
        <?php if (empty($availableDocs)): ?>
        <div class="text-center py-8 text-gray-500">
            <i class="fas fa-check-circle text-4xl text-green-300 mb-3"></i>
            <p>All documents have been assigned!</p>
        </div>
        <?php else: ?>
        <form method="POST" id="bulk-add-form">
            <input type="hidden" name="action" value="bulk_add">
            
            <div class="mb-4 flex items-center justify-between">
                <input type="text" id="doc-search" placeholder="Search documents..." 
                       class="form-input flex-1 mr-2" onkeyup="filterDocs()">
                <button type="submit" class="btn btn-primary text-sm">
                    <i class="fas fa-plus mr-1"></i>Add Selected
                </button>
            </div>
            
            <div class="space-y-4 max-h-[500px] overflow-y-auto">
                <?php foreach ($docsByCategory as $cat => $docs): ?>
                <div class="doc-category">
                    <h4 class="font-medium text-gray-600 text-sm mb-2 sticky top-0 bg-white py-1">
                        <?= htmlspecialchars($cat) ?> (<?= count($docs) ?>)
                    </h4>
                    <div class="space-y-2 pl-2">
                        <?php foreach ($docs as $d): ?>
                        <label class="doc-item flex items-center gap-3 p-2 hover:bg-gray-50 rounded cursor-pointer" 
                               data-name="<?= strtolower($d['name']) ?>" data-code="<?= strtolower($d['code']) ?>">
                            <input type="checkbox" name="doc_ids[]" value="<?= $d['id'] ?>" class="rounded">
                            <div class="flex-1">
                                <p class="text-sm font-medium"><?= htmlspecialchars($d['name']) ?></p>
                                <p class="text-xs text-gray-400 font-mono"><?= htmlspecialchars($d['code']) ?></p>
                            </div>
                            <button type="button" onclick="quickAdd(<?= $d['id'] ?>)" 
                                    class="text-blue-500 hover:text-blue-700 text-sm px-2 py-1">
                                <i class="fas fa-plus"></i>
                            </button>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </form>
        <?php endif; ?>
    </div>
</div>

<!-- Quick Add Form (hidden) -->
<form method="POST" id="quick-add-form" style="display:none;">
    <input type="hidden" name="action" value="add_document">
    <input type="hidden" name="document_type_id" id="quick-add-doc-id">
    <input type="hidden" name="is_required" value="1">
</form>

<script>
function filterDocs() {
    const query = document.getElementById('doc-search').value.toLowerCase();
    document.querySelectorAll('.doc-item').forEach(item => {
        const name = item.dataset.name || '';
        const code = item.dataset.code || '';
        const match = name.includes(query) || code.includes(query);
        item.style.display = match ? '' : 'none';
    });
    
    // Hide empty categories
    document.querySelectorAll('.doc-category').forEach(cat => {
        const visibleItems = cat.querySelectorAll('.doc-item:not([style*="display: none"])');
        cat.style.display = visibleItems.length > 0 ? '' : 'none';
    });
}

function quickAdd(docId) {
    document.getElementById('quick-add-doc-id').value = docId;
    document.getElementById('quick-add-form').submit();
}
</script>

<?php require_once 'includes/footer.php'; ?>
