<?php
/**
 * PATRON - Add Information Field
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Add Information Field';

// Get existing categories for dropdown
$existingCategories = dbFetchAll("SELECT DISTINCT category FROM information_fields WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

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
    
    // Generate code from name if not provided
    if (!$code && $name) {
        $code = strtoupper(preg_replace('/[^a-zA-Z0-9]/', '_', $name));
        $code = preg_replace('/_+/', '_', $code);
        $code = trim($code, '_');
    }
    
    $errors = [];
    
    if (!$name) $errors[] = 'Field name is required';
    if (!$code) $errors[] = 'Field code is required';
    
    // Check for duplicate code
    if ($code) {
        $existing = dbFetchOne("SELECT id FROM information_fields WHERE code = ? AND deleted_at IS NULL", [$code]);
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
        
        dbExecute("INSERT INTO information_fields (name, code, field_type, category, level, placeholder, options, is_active, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())", 
            [$name, $code, $fieldType, $category ?: null, $level, $placeholder ?: null, $optionsJson, $isActive]);
        
        setFlash('success', 'Information field created successfully.');
        header('Location: information_fields.php');
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
            <a href="information_fields.php" class="hover:text-blue-600">Information Fields</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Add New</span>
        </div>
        <h2 class="text-2xl font-bold">Add Information Field</h2>
    </div>
</div>

<div class="card p-6 max-w-2xl">
    <form method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Name *</label>
                <input type="text" name="name" class="form-input w-full" required 
                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                       placeholder="e.g., Full Name, Date of Birth, PAN Number">
            </div>
            
            <!-- Field Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Code</label>
                <input type="text" name="code" class="form-input w-full font-mono uppercase" 
                       value="<?= htmlspecialchars($_POST['code'] ?? '') ?>"
                       placeholder="AUTO_GENERATED">
                <p class="text-xs text-gray-400 mt-1">Auto-generated from name if left empty</p>
            </div>
            
            <!-- Field Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Field Type *</label>
                <select name="field_type" class="form-input w-full" id="fieldType" onchange="toggleOptions()">
                    <option value="text" <?= ($_POST['field_type'] ?? '') === 'text' ? 'selected' : '' ?>>Text</option>
                    <option value="textarea" <?= ($_POST['field_type'] ?? '') === 'textarea' ? 'selected' : '' ?>>Text Area</option>
                    <option value="number" <?= ($_POST['field_type'] ?? '') === 'number' ? 'selected' : '' ?>>Number</option>
                    <option value="date" <?= ($_POST['field_type'] ?? '') === 'date' ? 'selected' : '' ?>>Date</option>
                    <option value="select" <?= ($_POST['field_type'] ?? '') === 'select' ? 'selected' : '' ?>>Dropdown</option>
                    <option value="email" <?= ($_POST['field_type'] ?? '') === 'email' ? 'selected' : '' ?>>Email</option>
                </select>
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
            
            <!-- Level -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Level</label>
                <select name="level" class="form-input w-full">
                    <option value="person" <?= ($_POST['level'] ?? 'person') === 'person' ? 'selected' : '' ?>>Person</option>
                    <option value="entity" <?= ($_POST['level'] ?? '') === 'entity' ? 'selected' : '' ?>>Entity/Company</option>
                    <option value="both" <?= ($_POST['level'] ?? '') === 'both' ? 'selected' : '' ?>>Both</option>
                </select>
                <p class="text-xs text-gray-400 mt-1">Person = Directors/Partners, Entity = Company/Firm</p>
            </div>
            
            <!-- Placeholder -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Placeholder / Help Text</label>
                <input type="text" name="placeholder" class="form-input w-full" 
                       value="<?= htmlspecialchars($_POST['placeholder'] ?? '') ?>"
                       placeholder="e.g., Enter your 10-digit PAN number">
            </div>
            
            <!-- Options (for select type) -->
            <div class="md:col-span-2" id="optionsDiv" style="display: none;">
                <label class="block text-sm font-medium text-gray-700 mb-1">Dropdown Options *</label>
                <textarea name="options" class="form-input w-full" rows="4" 
                          placeholder="Enter one option per line&#10;Option 1&#10;Option 2&#10;Option 3"><?= htmlspecialchars($_POST['options'] ?? '') ?></textarea>
                <p class="text-xs text-gray-400 mt-1">Enter each option on a new line</p>
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
                <i class="fas fa-save mr-2"></i>Create Field
            </button>
            <a href="information_fields.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
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

// Initialize on page load
toggleOptions();
</script>

<?php require_once 'includes/footer.php'; ?>
