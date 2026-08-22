<?php
/**
 * PATRON - Add Certificate Type (Improved)
 * Features: Better validation, graceful handling of missing columns
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Add Certificate Type';

// Get categories for dropdown
$categories = dbFetchAll("SELECT DISTINCT category FROM certificate_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Check which columns exist in the table (for graceful handling)
$tableColumns = [];
try {
    $cols = dbFetchAll("SHOW COLUMNS FROM certificate_types");
    foreach ($cols as $col) {
        $tableColumns[] = $col['Field'];
    }
} catch (Exception $e) {
    $tableColumns = ['id', 'code', 'name', 'category', 'has_expiry', 'is_active']; // Assume basics
}

$hasDescription = in_array('description', $tableColumns);
$hasValidityMonths = in_array('default_validity_months', $tableColumns);
$hasReminderDays = in_array('renewal_reminder_days', $tableColumns);

$errors = [];
$formData = [
    'name' => '',
    'code' => '',
    'category' => '',
    'new_category' => '',
    'has_expiry' => false,
    'default_validity_months' => '',
    'renewal_reminder_days' => '',
    'description' => ''
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $formData['name'] = sanitize($_POST['name'] ?? '');
        $formData['code'] = strtoupper(sanitize($_POST['code'] ?? ''));
        $formData['category'] = sanitize($_POST['category'] ?? '');
        $formData['new_category'] = sanitize($_POST['new_category'] ?? '');
        $formData['has_expiry'] = isset($_POST['has_expiry']) ? 1 : 0;
        $formData['default_validity_months'] = (int)($_POST['default_validity_months'] ?? 0) ?: null;
        $formData['renewal_reminder_days'] = (int)($_POST['renewal_reminder_days'] ?? 0) ?: null;
        $formData['description'] = sanitize($_POST['description'] ?? '');
        
        // Use new category if provided
        $category = $formData['new_category'] ?: $formData['category'];
        
        // Validation
        if (!$formData['name']) $errors[] = 'Name is required.';
        if (!$formData['code']) $errors[] = 'Code is required.';
        if (strlen($formData['code']) < 2) $errors[] = 'Code must be at least 2 characters.';
        if (strlen($formData['code']) > 30) $errors[] = 'Code must be 30 characters or less.';
        if (!preg_match('/^[A-Z0-9_]+$/', $formData['code'])) $errors[] = 'Code can only contain letters, numbers, and underscores.';
        
        // Check duplicate code
        if ($formData['code']) {
            $existing = dbFetchOne("SELECT id FROM certificate_types WHERE code = ? AND deleted_at IS NULL", [$formData['code']]);
            if ($existing) $errors[] = 'A certificate type with this code already exists.';
        }
        
        // Validate expiry settings
        if ($formData['has_expiry']) {
            if ($formData['default_validity_months'] && $formData['default_validity_months'] < 1) {
                $errors[] = 'Validity months must be at least 1.';
            }
            if ($formData['renewal_reminder_days'] && $formData['renewal_reminder_days'] < 1) {
                $errors[] = 'Reminder days must be at least 1.';
            }
        }
        
        if (empty($errors)) {
            try {
                // Build dynamic INSERT based on available columns
                $columns = ['code', 'name', 'category', 'has_expiry', 'is_active'];
                $placeholders = ['?', '?', '?', '?', '1'];
                $values = [$formData['code'], $formData['name'], $category ?: null, $formData['has_expiry']];
                
                if ($hasValidityMonths) {
                    $columns[] = 'default_validity_months';
                    $placeholders[] = '?';
                    $values[] = $formData['default_validity_months'];
                }
                
                if ($hasReminderDays) {
                    $columns[] = 'renewal_reminder_days';
                    $placeholders[] = '?';
                    $values[] = $formData['renewal_reminder_days'];
                }
                
                if ($hasDescription) {
                    $columns[] = 'description';
                    $placeholders[] = '?';
                    $values[] = $formData['description'] ?: null;
                }
                
                $sql = "INSERT INTO certificate_types (" . implode(', ', $columns) . ") VALUES (" . implode(', ', $placeholders) . ")";
                dbExecute($sql, $values);
                
                setFlash('success', 'Certificate type "' . htmlspecialchars($formData['name']) . '" added successfully.');
                header('Location: certificate_types.php');
                exit;
            } catch (Exception $e) {
                $errors[] = 'Failed to add: ' . $e->getMessage();
            }
        }
    }
}

require_once 'includes/header.php';
?>

<div class="mb-6">
    <a href="certificate_types.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Certificate Types
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-6 border-b bg-gradient-to-r from-green-50 to-emerald-50">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-plus text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Add Certificate Type</h2>
                        <p class="text-sm text-gray-500">Create a new certificate type for tracking</p>
                    </div>
                </div>
            </div>
            
            <?php if (!empty($errors)): ?>
            <div class="p-4 bg-red-50 border-b border-red-200">
                <ul class="text-sm text-red-700 space-y-1">
                    <?php foreach ($errors as $error): ?>
                    <li><i class="fas fa-exclamation-circle mr-1"></i> <?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <form method="POST" class="p-6 space-y-6">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                
                <!-- Basic Info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" class="form-input" required
                               value="<?= htmlspecialchars($formData['name']) ?>"
                               placeholder="e.g., GST Registration Certificate">
                    </div>
                    <div>
                        <label class="form-label">Code <span class="text-red-500">*</span></label>
                        <input type="text" name="code" class="form-input font-mono uppercase" required
                               value="<?= htmlspecialchars($formData['code']) ?>"
                               placeholder="e.g., GST_CERT" maxlength="30"
                               pattern="[A-Za-z0-9_]+" title="Only letters, numbers, and underscores">
                        <p class="text-xs text-gray-400 mt-1">Unique identifier (auto-uppercased, no spaces)</p>
                    </div>
                </div>
                
                <!-- Category -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Category</label>
                        <select name="category" class="form-input" id="categorySelect">
                            <option value="">Select Category...</option>
                            <?php foreach ($categories as $c): ?>
                            <option value="<?= htmlspecialchars($c['category']) ?>" <?= $formData['category'] === $c['category'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($c['category']) ?>
                            </option>
                            <?php endforeach; ?>
                            <option value="__new__">+ Add New Category</option>
                        </select>
                    </div>
                    <div id="newCategoryDiv" class="<?= $formData['new_category'] ? '' : 'hidden' ?>">
                        <label class="form-label">New Category Name</label>
                        <input type="text" name="new_category" id="newCategoryInput" class="form-input"
                               value="<?= htmlspecialchars($formData['new_category']) ?>"
                               placeholder="e.g., Import/Export">
                    </div>
                </div>
                
                <!-- Expiry Settings -->
                <div class="p-4 bg-amber-50 rounded-xl border border-amber-200 space-y-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="has_expiry" id="hasExpiryCheck" 
                               class="form-checkbox h-5 w-5 text-amber-600 rounded"
                               <?= $formData['has_expiry'] ? 'checked' : '' ?>>
                        <div>
                            <span class="font-medium text-amber-800">Has Expiry Date</span>
                            <p class="text-xs text-amber-600">Enable for licenses/certificates that need periodic renewal</p>
                        </div>
                    </label>
                    
                    <div id="expirySettings" class="grid grid-cols-1 md:grid-cols-2 gap-4 <?= $formData['has_expiry'] ? '' : 'hidden' ?>">
                        <?php if ($hasValidityMonths): ?>
                        <div>
                            <label class="form-label">Default Validity (Months)</label>
                            <input type="number" name="default_validity_months" class="form-input"
                                   value="<?= $formData['default_validity_months'] ?>"
                                   placeholder="e.g., 12" min="1" max="240">
                            <p class="text-xs text-gray-400 mt-1">Auto-calculates expiry when adding certificates</p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($hasReminderDays): ?>
                        <div>
                            <label class="form-label">Renewal Reminder (Days Before)</label>
                            <input type="number" name="renewal_reminder_days" class="form-input"
                                   value="<?= $formData['renewal_reminder_days'] ?>"
                                   placeholder="e.g., 30" min="1" max="365">
                            <p class="text-xs text-gray-400 mt-1">Days before expiry to send reminder</p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Description -->
                <?php if ($hasDescription): ?>
                <div>
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-input" rows="2" 
                              placeholder="Brief description of this certificate type..."><?= htmlspecialchars($formData['description']) ?></textarea>
                </div>
                <?php endif; ?>
                
                <!-- Submit -->
                <div class="flex items-center gap-4 pt-4 border-t">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i> Add Certificate Type
                    </button>
                    <a href="certificate_types.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Expiry Guide -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-clock mr-2 text-amber-500"></i>Expiry Guide
            </h4>
            <div class="space-y-3 text-sm">
                <div class="p-2 bg-amber-50 rounded">
                    <p class="font-medium text-amber-800">Has Expiry ✓</p>
                    <p class="text-amber-600 text-xs">FSSAI, Shop Act, Trade License, DSC, ISO</p>
                </div>
                <div class="p-2 bg-teal-50 rounded">
                    <p class="font-medium text-teal-800">Permanent (No Expiry)</p>
                    <p class="text-teal-600 text-xs">GST, PAN, TAN, COI, MOA, AOA, Udyam</p>
                </div>
            </div>
        </div>
        
        <!-- Common Types -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-list mr-2 text-blue-500"></i>Common Certificate Types
            </h4>
            <ul class="text-sm space-y-2 text-gray-600">
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>GST Registration</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>PAN Card</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>TAN Registration</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>FSSAI License</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>Shop & Establishment</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>Trade License</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>Import Export Code (IEC)</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>MSME/Udyam</li>
                <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i>Digital Signature (DSC)</li>
            </ul>
        </div>
        
        <!-- Category Colors -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-tags mr-2 text-purple-500"></i>Suggested Categories
            </h4>
            <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded text-xs">Tax</span>
                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs">License</span>
                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">Registration</span>
                <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-xs">Compliance</span>
                <span class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded text-xs">Company</span>
                <span class="px-2 py-1 bg-teal-100 text-teal-700 rounded text-xs">Digital</span>
                <span class="px-2 py-1 bg-pink-100 text-pink-700 rounded text-xs">IP</span>
            </div>
        </div>
        
        <!-- Help -->
        <div class="card p-4 bg-blue-50">
            <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-lightbulb mr-2"></i>Tips</h4>
            <ul class="text-sm text-blue-700 space-y-1">
                <li>• Use clear, descriptive names</li>
                <li>• Code should be unique and uppercase</li>
                <li>• Group similar certificates by category</li>
                <li>• Set expiry for renewable certificates</li>
                <li>• Reminder days helps track renewals</li>
            </ul>
        </div>
    </div>
</div>

<script>
// Handle category dropdown
document.getElementById('categorySelect').addEventListener('change', function() {
    const newCatDiv = document.getElementById('newCategoryDiv');
    const newCatInput = document.getElementById('newCategoryInput');
    
    if (this.value === '__new__') {
        newCatDiv.classList.remove('hidden');
        newCatInput.focus();
        this.value = ''; // Reset select
    } else {
        newCatDiv.classList.add('hidden');
        newCatInput.value = '';
    }
});

// Handle expiry checkbox
document.getElementById('hasExpiryCheck').addEventListener('change', function() {
    const settings = document.getElementById('expirySettings');
    if (this.checked) {
        settings.classList.remove('hidden');
    } else {
        settings.classList.add('hidden');
    }
});

// Auto-uppercase code field
document.querySelector('input[name="code"]').addEventListener('input', function() {
    this.value = this.value.toUpperCase().replace(/[^A-Z0-9_]/g, '');
});
</script>

<?php require_once 'includes/footer.php'; ?>
