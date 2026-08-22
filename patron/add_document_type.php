<?php
/**
 * PATRON - Add Document Type
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Add Document Type';

// Get existing categories for dropdown
$existingCategories = dbFetchAll("SELECT DISTINCT category FROM document_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

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
    
    // Generate code from name if not provided
    if (!$code && $name) {
        $code = strtoupper(preg_replace('/[^a-zA-Z0-9]/', '_', $name));
        $code = preg_replace('/_+/', '_', $code);
        $code = trim($code, '_');
    }
    
    $errors = [];
    
    if (!$name) $errors[] = 'Document name is required';
    if (!$code) $errors[] = 'Document code is required';
    
    // Check for duplicate code
    if ($code) {
        $existing = dbFetchOne("SELECT id FROM document_types WHERE code = ? AND deleted_at IS NULL", [$code]);
        if ($existing) {
            $errors[] = 'A document type with this code already exists';
        }
    }
    
    if (empty($errors)) {
        dbExecute("INSERT INTO document_types (name, code, category, description, is_active, created_at) VALUES (?, ?, ?, ?, ?, NOW())", 
            [$name, $code, $category ?: null, $description ?: null, $isActive]);
        
        setFlash('success', 'Document type created successfully.');
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
            <span>Add New</span>
        </div>
        <h2 class="text-2xl font-bold">Add Document Type</h2>
    </div>
</div>

<div class="card p-6 max-w-2xl">
    <form method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Document Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Document Name *</label>
                <input type="text" name="name" class="form-input w-full" required 
                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                       placeholder="e.g., PAN Card, Aadhaar Card, GST Certificate">
            </div>
            
            <!-- Document Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Document Code</label>
                <input type="text" name="code" class="form-input w-full font-mono uppercase" 
                       value="<?= htmlspecialchars($_POST['code'] ?? '') ?>"
                       placeholder="AUTO_GENERATED">
                <p class="text-xs text-gray-400 mt-1">Auto-generated from name if left empty</p>
            </div>
            
            <!-- Category -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category" class="form-input w-full" id="categorySelect" onchange="toggleNewCategory()">
                    <option value="">Select or add new...</option>
                    <?php foreach ($existingCategories as $c): ?>
                    <option value="<?= htmlspecialchars($c['category']) ?>" <?= ($_POST['category'] ?? '') === $c['category'] ? 'selected' : '' ?>>
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
                          placeholder="Brief description of the document"><?= htmlspecialchars($_POST['description'] ?? '') ?></textarea>
            </div>
            
            <!-- Status -->
            <div class="md:col-span-2">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" class="rounded" <?= !isset($_POST['is_active']) || $_POST['is_active'] ? 'checked' : '' ?>>
                    <span class="text-sm text-gray-700">Active</span>
                </label>
            </div>
        </div>
        
        <div class="flex items-center gap-4 mt-6 pt-6 border-t">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i>Create Document Type
            </button>
            <a href="document_types.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
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
