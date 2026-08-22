<?php
/**
 * PATRON - Edit Document Type
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$docId = (int)($_GET['id'] ?? 0);
if (!$docId) {
    setFlash('error', 'Document type not found.');
    header('Location: document_types.php');
    exit;
}

$doc = dbFetchOne("SELECT * FROM document_types WHERE id = ? AND deleted_at IS NULL", [$docId]);
if (!$doc) {
    setFlash('error', 'Document type not found.');
    header('Location: document_types.php');
    exit;
}

$pageTitle = 'Edit: ' . $doc['name'];

// Get existing categories for dropdown
$existingCategories = dbFetchAll("SELECT DISTINCT category FROM document_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Get usage count
$usageCount = dbFetchOne("SELECT COUNT(*) as cnt FROM client_documents WHERE document_type_id = ?", [$docId])['cnt'] ?? 0;
$serviceCount = dbFetchOne("SELECT COUNT(*) as cnt FROM service_document_requirements WHERE document_type_id = ?", [$docId])['cnt'] ?? 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name'] ?? '');
    $code = strtoupper(sanitize($_POST['code'] ?? ''));
    $category = sanitize($_POST['category'] ?? '');
    $newCategory = sanitize($_POST['new_category'] ?? '');
    $description = sanitize($_POST['description'] ?? '');
    $isActive = isset($_POST['is_active']) ? 1 : 0;
    
    // Use new category if provided
    if ($newCategory) {
        $category = $newCategory;
    }
    
    $errors = [];
    
    if (!$name) $errors[] = 'Document name is required';
    if (!$code) $errors[] = 'Document code is required';
    
    // Check for duplicate code (excluding current)
    if ($code) {
        $existing = dbFetchOne("SELECT id FROM document_types WHERE code = ? AND id != ? AND deleted_at IS NULL", [$code, $docId]);
        if ($existing) {
            $errors[] = 'A document type with this code already exists';
        }
    }
    
    if (empty($errors)) {
        dbExecute("UPDATE document_types SET name = ?, code = ?, category = ?, description = ?, is_active = ?, updated_at = NOW() WHERE id = ?", 
            [$name, $code, $category ?: null, $description ?: null, $isActive, $docId]);
        
        setFlash('success', 'Document type updated successfully.');
        header('Location: document_types.php');
        exit;
    } else {
        setFlash('error', implode('<br>', $errors));
    }
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="document_types.php" class="hover:text-blue-600">Document Types</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Edit</span>
        </div>
        <h2 class="text-2xl font-bold">Edit Document Type</h2>
    </div>
    
    <?php if ($usageCount > 0 || $serviceCount > 0): ?>
    <div class="text-right">
        <div class="text-sm text-gray-500">
            <?php if ($serviceCount > 0): ?>
            <span class="text-blue-600"><i class="fas fa-link mr-1"></i><?= $serviceCount ?> service(s)</span>
            <?php endif; ?>
            <?php if ($usageCount > 0): ?>
            <span class="text-green-600 ml-3"><i class="fas fa-database mr-1"></i><?= $usageCount ?> document(s)</span>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<div class="card p-6 max-w-2xl">
    <form method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Document Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Document Name *</label>
                <input type="text" name="name" class="form-input w-full" required 
                       value="<?= htmlspecialchars($_POST['name'] ?? $doc['name']) ?>"
                       placeholder="e.g., PAN Card, Aadhaar Card, GST Certificate">
            </div>
            
            <!-- Document Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Document Code *</label>
                <input type="text" name="code" class="form-input w-full font-mono uppercase" required
                       value="<?= htmlspecialchars($_POST['code'] ?? $doc['code']) ?>"
                       <?= $usageCount > 0 ? 'readonly class="bg-gray-100"' : '' ?>>
                <?php if ($usageCount > 0): ?>
                <p class="text-xs text-amber-600 mt-1"><i class="fas fa-lock mr-1"></i>Code cannot be changed (documents exist)</p>
                <?php endif; ?>
            </div>
            
            <!-- Category -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category" class="form-input w-full" id="categorySelect" onchange="toggleNewCategory()">
                    <option value="">Select or add new...</option>
                    <?php foreach ($existingCategories as $c): ?>
                    <option value="<?= htmlspecialchars($c['category']) ?>" <?= ($_POST['category'] ?? $doc['category']) === $c['category'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['category']) ?>
                    </option>
                    <?php endforeach; ?>
                    <option value="__new__">+ Add New Category</option>
                </select>
                <input type="text" name="new_category" id="newCategory" class="form-input w-full mt-2 hidden" 
                       placeholder="Enter new category name" value="<?= htmlspecialchars($_POST['new_category'] ?? '') ?>">
            </div>
            
            <!-- Description -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" class="form-input w-full" rows="2"
                          placeholder="Brief description of the document"><?= htmlspecialchars($_POST['description'] ?? $doc['description'] ?? '') ?></textarea>
            </div>
            
            <!-- Status -->
            <div class="md:col-span-2">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" class="rounded" <?= ($_POST['is_active'] ?? $doc['is_active']) ? 'checked' : '' ?>>
                    <span class="text-sm text-gray-700">Active</span>
                </label>
            </div>
        </div>
        
        <div class="flex items-center justify-between mt-6 pt-6 border-t">
            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Update Document Type
                </button>
                <a href="document_types.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
            </div>
            
            <?php if ($usageCount == 0 && $serviceCount == 0): ?>
            <a href="document_types.php?action=delete&id=<?= $docId ?>" 
               class="text-red-600 hover:text-red-800 text-sm"
               onclick="return confirm('Are you sure you want to delete this document type?')">
                <i class="fas fa-trash mr-1"></i>Delete
            </a>
            <?php endif; ?>
        </div>
    </form>
</div>

<script>
function toggleNewCategory() {
    const select = document.getElementById('categorySelect');
    const newInput = document.getElementById('newCategory');
    newInput.classList.toggle('hidden', select.value !== '__new__');
    if (select.value === '__new__') {
        newInput.focus();
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
