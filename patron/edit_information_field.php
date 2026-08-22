<?php
/**
 * PATRON - Edit Information Field
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$fieldId = (int)($_GET['id'] ?? 0);
if (!$fieldId) {
    setFlash('error', 'Field not found.');
    header('Location: information_fields.php');
    exit;
}

$field = dbFetchOne("SELECT * FROM information_fields WHERE id = ? AND deleted_at IS NULL", [$fieldId]);
if (!$field) {
    setFlash('error', 'Field not found.');
    header('Location: information_fields.php');
    exit;
}

$pageTitle = 'Edit: ' . $field['name'];

// Get existing categories for dropdown
$existingCategories = dbFetchAll("SELECT DISTINCT category FROM information_fields WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Get usage count
$usageCount = dbFetchOne("SELECT COUNT(*) as cnt FROM request_info_values WHERE info_field_id = ?", [$fieldId])['cnt'] ?? 0;
$serviceCount = dbFetchOne("SELECT COUNT(*) as cnt FROM service_field_requirements WHERE field_id = ?", [$fieldId])['cnt'] ?? 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name'] ?? '');
    $code = strtoupper(sanitize($_POST['code'] ?? ''));
    $fieldType = sanitize($_POST['field_type'] ?? 'text');
    $category = sanitize($_POST['category'] ?? '');
    $newCategory = sanitize($_POST['new_category'] ?? '');
    $level = sanitize($_POST['level'] ?? 'person');
    $placeholder = sanitize($_POST['placeholder'] ?? '');
    $options = sanitize($_POST['options'] ?? '');
    $isActive = isset($_POST['is_active']) ? 1 : 0;
    
    // Use new category if provided
    if ($newCategory) {
        $category = $newCategory;
    }
    
    $errors = [];
    
    if (!$name) $errors[] = 'Field name is required';
    if (!$code) $errors[] = 'Field code is required';
    
    // Check for duplicate code (excluding current)
    if ($code) {
        $existing = dbFetchOne("SELECT id FROM information_fields WHERE code = ? AND id != ? AND deleted_at IS NULL", [$code, $fieldId]);
        if ($existing) {
            $errors[] = 'A field with this code already exists';
        }
    }
    
    // Validate options for select type
    if ($fieldType === 'select' && empty($options)) {
        $errors[] = 'Options are required for dropdown fields';
    }
    
    if (empty($errors)) {
        // Format options as JSON array if provided
        $optionsJson = null;
        if ($options) {
            $optionsArray = array_map('trim', explode("\n", $options));
            $optionsArray = array_filter($optionsArray);
            $optionsJson = json_encode(array_values($optionsArray));
        }
        
        dbExecute("UPDATE information_fields SET name = ?, code = ?, field_type = ?, category = ?, level = ?, placeholder = ?, options = ?, is_active = ?, updated_at = NOW() WHERE id = ?", 
            [$name, $code, $fieldType, $category ?: null, $level, $placeholder ?: null, $optionsJson, $isActive, $fieldId]);
        
        setFlash('success', 'Information field updated successfully.');
        header('Location: information_fields.php');
        exit;
    } else {
        setFlash('error', implode('<br>', $errors));
    }
}

// Parse existing options
$optionsText = '';
if ($field['options']) {
    $optionsArray = json_decode($field['options'], true);
    if (is_array($optionsArray)) {
        $optionsText = implode("\n", $optionsArray);
    }
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="information_fields.php" class="hover:text-blue-600">Information Fields</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Edit</span>
        </div>
        <h2 class="text-2xl font-bold">Edit Information Field</h2>
    </div>
    
    <?php if ($usageCount > 0 || $serviceCount > 0): ?>
    <div class="text-right">
        <div class="text-sm text-gray-500">
            <?php if ($serviceCount > 0): ?>
            <span class="text-blue-600"><i class="fas fa-link mr-1"></i><?= $serviceCount ?> service(s)</span>
            <?php endif; ?>
            <?php if ($usageCount > 0): ?>
            <span class="text-green-600 ml-3"><i class="fas fa-database mr-1"></i><?= $usageCount ?> usage(s)</span>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<div class="card p-6 max-w-2xl">
    <form method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Name *</label>
                <input type="text" name="name" class="form-input w-full" required 
                       value="<?= htmlspecialchars($_POST['name'] ?? $field['name']) ?>"
                       placeholder="e.g., Full Name, Date of Birth, PAN Number">
            </div>
            
            <!-- Field Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Code *</label>
                <input type="text" name="code" class="form-input w-full font-mono uppercase" required
                       value="<?= htmlspecialchars($_POST['code'] ?? $field['code']) ?>"
                       <?= $usageCount > 0 ? 'readonly class="bg-gray-100"' : '' ?>>
                <?php if ($usageCount > 0): ?>
                <p class="text-xs text-amber-600 mt-1"><i class="fas fa-lock mr-1"></i>Code cannot be changed (field in use)</p>
                <?php endif; ?>
            </div>
            
            <!-- Field Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Type *</label>
                <select name="field_type" class="form-input w-full" id="fieldType" onchange="toggleOptions()" <?= $usageCount > 0 ? 'disabled' : '' ?>>
                    <option value="text" <?= ($_POST['field_type'] ?? $field['field_type']) === 'text' ? 'selected' : '' ?>>Text</option>
                    <option value="textarea" <?= ($_POST['field_type'] ?? $field['field_type']) === 'textarea' ? 'selected' : '' ?>>Text Area</option>
                    <option value="number" <?= ($_POST['field_type'] ?? $field['field_type']) === 'number' ? 'selected' : '' ?>>Number</option>
                    <option value="date" <?= ($_POST['field_type'] ?? $field['field_type']) === 'date' ? 'selected' : '' ?>>Date</option>
                    <option value="select" <?= ($_POST['field_type'] ?? $field['field_type']) === 'select' ? 'selected' : '' ?>>Dropdown</option>
                    <option value="email" <?= ($_POST['field_type'] ?? $field['field_type']) === 'email' ? 'selected' : '' ?>>Email</option>
                </select>
                <?php if ($usageCount > 0): ?>
                <input type="hidden" name="field_type" value="<?= htmlspecialchars($field['field_type']) ?>">
                <p class="text-xs text-amber-600 mt-1"><i class="fas fa-lock mr-1"></i>Type cannot be changed (field in use)</p>
                <?php endif; ?>
            </div>
            
            <!-- Category -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select name="category" class="form-input w-full" id="categorySelect" onchange="toggleNewCategory()">
                    <option value="">Select or add new...</option>
                    <?php foreach ($existingCategories as $c): ?>
                    <option value="<?= htmlspecialchars($c['category']) ?>" <?= ($_POST['category'] ?? $field['category']) === $c['category'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['category']) ?>
                    </option>
                    <?php endforeach; ?>
                    <option value="__new__">+ Add New Category</option>
                </select>
                <input type="text" name="new_category" id="newCategory" class="form-input w-full mt-2 hidden" 
                       placeholder="Enter new category name" value="<?= htmlspecialchars($_POST['new_category'] ?? '') ?>">
            </div>
            
            <!-- Level -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Level</label>
                <select name="level" class="form-input w-full">
                    <option value="person" <?= ($_POST['level'] ?? $field['level']) === 'person' ? 'selected' : '' ?>>Person</option>
                    <option value="entity" <?= ($_POST['level'] ?? $field['level']) === 'entity' ? 'selected' : '' ?>>Entity/Company</option>
                    <option value="both" <?= ($_POST['level'] ?? $field['level']) === 'both' ? 'selected' : '' ?>>Both</option>
                </select>
                <p class="text-xs text-gray-400 mt-1">Person = Directors/Partners, Entity = Company/Firm</p>
            </div>
            
            <!-- Placeholder -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Placeholder / Help Text</label>
                <input type="text" name="placeholder" class="form-input w-full" 
                       value="<?= htmlspecialchars($_POST['placeholder'] ?? $field['placeholder'] ?? '') ?>"
                       placeholder="e.g., Enter your 10-digit PAN number">
            </div>
            
            <!-- Options (for select type) -->
            <div class="md:col-span-2" id="optionsDiv" style="display: <?= ($field['field_type'] === 'select') ? 'block' : 'none' ?>;">
                <label class="block text-sm font-medium text-gray-700 mb-1">Dropdown Options *</label>
                <textarea name="options" class="form-input w-full" rows="4" 
                          placeholder="Enter one option per line&#10;Option 1&#10;Option 2&#10;Option 3"><?= htmlspecialchars($_POST['options'] ?? $optionsText) ?></textarea>
                <p class="text-xs text-gray-400 mt-1">Enter each option on a new line</p>
            </div>
            
            <!-- Status -->
            <div class="md:col-span-2">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" class="rounded" <?= ($_POST['is_active'] ?? $field['is_active']) ? 'checked' : '' ?>>
                    <span class="text-sm text-gray-700">Active</span>
                </label>
            </div>
        </div>
        
        <div class="flex items-center justify-between mt-6 pt-6 border-t">
            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Update Field
                </button>
                <a href="information_fields.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
            </div>
            
            <?php if ($usageCount == 0 && $serviceCount == 0): ?>
            <a href="information_fields.php?action=delete&id=<?= $fieldId ?>" 
               class="text-red-600 hover:text-red-800 text-sm"
               onclick="return confirm('Are you sure you want to delete this field?')">
                <i class="fas fa-trash mr-1"></i>Delete Field
            </a>
            <?php endif; ?>
        </div>
    </form>
</div>

<script>
function toggleOptions() {
    const fieldType = document.getElementById('fieldType').value;
    const optionsDiv = document.getElementById('optionsDiv');
    optionsDiv.style.display = fieldType === 'select' ? 'block' : 'none';
}

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
