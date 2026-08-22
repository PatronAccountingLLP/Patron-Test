<?php
/**
 * PATRON - Edit Certificate Type
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$certTypeId = (int)($_GET['id'] ?? 0);
if (!$certTypeId) {
    setFlash('error', 'Invalid certificate type.');
    header('Location: certificate_types.php');
    exit;
}

// Get certificate type
$certType = dbFetchOne("SELECT * FROM certificate_types WHERE id = ? AND deleted_at IS NULL", [$certTypeId]);
if (!$certType) {
    setFlash('error', 'Certificate type not found.');
    header('Location: certificate_types.php');
    exit;
}

$pageTitle = 'Edit Certificate Type';

// Get categories for dropdown
$categories = dbFetchAll("SELECT DISTINCT category FROM certificate_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Check which columns exist in the table
$tableColumns = [];
try {
    $cols = dbFetchAll("SHOW COLUMNS FROM certificate_types");
    foreach ($cols as $col) {
        $tableColumns[] = $col['Field'];
    }
} catch (Exception $e) {
    $tableColumns = ['id', 'code', 'name', 'category', 'has_expiry', 'is_active'];
}

$hasDescription = in_array('description', $tableColumns);
$hasValidityMonths = in_array('default_validity_months', $tableColumns);
$hasReminderDays = in_array('renewal_reminder_days', $tableColumns);

// Get usage count
$usageCount = 0;
try {
    $usage1 = dbFetchOne("SELECT COUNT(*) as c FROM certificates WHERE certificate_type = ?", [$certType['code']]);
    $usage2 = dbFetchOne("SELECT COUNT(*) as c FROM client_certificates WHERE certificate_type_id = ?", [$certTypeId]);
    $usageCount = ($usage1['c'] ?? 0) + ($usage2['c'] ?? 0);
} catch (Exception $e) {}

$errors = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $name = sanitize($_POST['name'] ?? '');
        $code = strtoupper(sanitize($_POST['code'] ?? ''));
        $category = sanitize($_POST['category'] ?? '');
        $newCategory = sanitize($_POST['new_category'] ?? '');
        $hasExpiry = isset($_POST['has_expiry']) ? 1 : 0;
        $validityMonths = (int)($_POST['default_validity_months'] ?? 0) ?: null;
        $reminderDays = (int)($_POST['renewal_reminder_days'] ?? 0) ?: null;
        $description = sanitize($_POST['description'] ?? '');
        $isActive = isset($_POST['is_active']) ? 1 : 0;
        
        // Use new category if provided
        if ($newCategory) $category = $newCategory;
        
        // Validation
        if (!$name) $errors[] = 'Name is required.';
        if (!$code) $errors[] = 'Code is required.';
        if (!preg_match('/^[A-Z0-9_]+$/', $code)) $errors[] = 'Code can only contain letters, numbers, and underscores.';
        
        // Check duplicate code (excluding current)
        if ($code && $code !== $certType['code']) {
            $existing = dbFetchOne("SELECT id FROM certificate_types WHERE code = ? AND deleted_at IS NULL AND id != ?", [$code, $certTypeId]);
            if ($existing) $errors[] = 'A certificate type with this code already exists.';
            
            // Warn if code is being changed and has usage
            if ($usageCount > 0) {
                $errors[] = 'Cannot change code - this certificate type is in use by ' . $usageCount . ' certificate(s).';
            }
        }
        
        if (empty($errors)) {
            try {
                // Build dynamic UPDATE
                $sets = ['name = ?', 'code = ?', 'category = ?', 'has_expiry = ?', 'is_active = ?'];
                $values = [$name, $code, $category ?: null, $hasExpiry, $isActive];
                
                if ($hasValidityMonths) {
                    $sets[] = 'default_validity_months = ?';
                    $values[] = $validityMonths;
                }
                
                if ($hasReminderDays) {
                    $sets[] = 'renewal_reminder_days = ?';
                    $values[] = $reminderDays;
                }
                
                if ($hasDescription) {
                    $sets[] = 'description = ?';
                    $values[] = $description ?: null;
                }
                
                $values[] = $certTypeId;
                
                $sql = "UPDATE certificate_types SET " . implode(', ', $sets) . " WHERE id = ?";
                dbExecute($sql, $values);
                
                setFlash('success', 'Certificate type updated successfully.');
                header('Location: certificate_types.php');
                exit;
            } catch (Exception $e) {
                $errors[] = 'Failed to update: ' . $e->getMessage();
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
            <div class="p-6 border-b bg-gradient-to-r from-blue-50 to-indigo-50">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-edit text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Edit Certificate Type</h2>
                        <p class="text-sm text-gray-500"><?= htmlspecialchars($certType['name']) ?></p>
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
                               value="<?= htmlspecialchars($certType['name'] ?? '') ?>"
                               placeholder="e.g., GST Registration Certificate">
                    </div>
                    <div>
                        <label class="form-label">Code <span class="text-red-500">*</span></label>
                        <input type="text" name="code" class="form-input font-mono uppercase" required
                               value="<?= htmlspecialchars($certType['code'] ?? '') ?>"
                               placeholder="e.g., GST_CERT" maxlength="30"
                               <?= $usageCount > 0 ? 'readonly class="form-input font-mono uppercase bg-gray-100"' : '' ?>>
                        <?php if ($usageCount > 0): ?>
                        <p class="text-xs text-amber-600 mt-1"><i class="fas fa-lock mr-1"></i>Code locked - in use by <?= $usageCount ?> certificate(s)</p>
                        <?php else: ?>
                        <p class="text-xs text-gray-400 mt-1">Unique identifier (auto-uppercased)</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Category -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Category</label>
                        <select name="category" class="form-input" id="categorySelect">
                            <option value="">Select Category...</option>
                            <?php foreach ($categories as $c): ?>
                            <option value="<?= htmlspecialchars($c['category']) ?>" <?= ($certType['category'] ?? '') === $c['category'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($c['category']) ?>
                            </option>
                            <?php endforeach; ?>
                            <option value="__new__">+ Add New Category</option>
                        </select>
                    </div>
                    <div id="newCategoryDiv" class="hidden">
                        <label class="form-label">New Category Name</label>
                        <input type="text" name="new_category" id="newCategoryInput" class="form-input"
                               placeholder="e.g., Import/Export">
                    </div>
                </div>
                
                <!-- Status -->
                <div class="p-4 bg-gray-50 rounded-xl">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_active" class="form-checkbox h-5 w-5 text-green-600 rounded"
                               <?= ($certType['is_active'] ?? 1) ? 'checked' : '' ?>>
                        <div>
                            <span class="font-medium">Active</span>
                            <p class="text-xs text-gray-500">Inactive types won't appear in dropdown when adding certificates</p>
                        </div>
                    </label>
                </div>
                
                <!-- Expiry Settings -->
                <div class="p-4 bg-amber-50 rounded-xl border border-amber-200 space-y-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="has_expiry" id="hasExpiryCheck" 
                               class="form-checkbox h-5 w-5 text-amber-600 rounded"
                               <?= ($certType['has_expiry'] ?? 0) ? 'checked' : '' ?>>
                        <div>
                            <span class="font-medium text-amber-800">Has Expiry Date</span>
                            <p class="text-xs text-amber-600">Enable for licenses that need renewal</p>
                        </div>
                    </label>
                    
                    <div id="expirySettings" class="grid grid-cols-1 md:grid-cols-2 gap-4 <?= ($certType['has_expiry'] ?? 0) ? '' : 'hidden' ?>">
                        <?php if ($hasValidityMonths): ?>
                        <div>
                            <label class="form-label">Default Validity (Months)</label>
                            <input type="number" name="default_validity_months" class="form-input"
                                   value="<?= $certType['default_validity_months'] ?? '' ?>"
                                   placeholder="e.g., 12" min="1" max="240">
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($hasReminderDays): ?>
                        <div>
                            <label class="form-label">Renewal Reminder (Days Before)</label>
                            <input type="number" name="renewal_reminder_days" class="form-input"
                                   value="<?= $certType['renewal_reminder_days'] ?? '' ?>"
                                   placeholder="e.g., 30" min="1" max="365">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Description -->
                <?php if ($hasDescription): ?>
                <div>
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-input" rows="2" 
                              placeholder="Brief description..."><?= htmlspecialchars($certType['description'] ?? '') ?></textarea>
                </div>
                <?php endif; ?>
                
                <!-- Submit -->
                <div class="flex items-center gap-4 pt-4 border-t">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i> Update Certificate Type
                    </button>
                    <a href="certificate_types.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Info Card -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-info-circle mr-2 text-blue-500"></i>Certificate Info
            </h4>
            <dl class="text-sm space-y-2">
                <div class="flex justify-between">
                    <dt class="text-gray-500">ID</dt>
                    <dd class="font-mono"><?= $certType['id'] ?></dd>
                </div>
                <div class="flex justify-between">
                    <dt class="text-gray-500">Code</dt>
                    <dd class="font-mono"><?= htmlspecialchars($certType['code'] ?? '') ?></dd>
                </div>
                <div class="flex justify-between">
                    <dt class="text-gray-500">Usage</dt>
                    <dd class="font-medium <?= $usageCount > 0 ? 'text-green-600' : 'text-gray-400' ?>"><?= $usageCount ?> certificate(s)</dd>
                </div>
                <div class="flex justify-between">
                    <dt class="text-gray-500">Created</dt>
                    <dd><?= isset($certType['created_at']) ? date('d M Y', strtotime($certType['created_at'])) : '-' ?></dd>
                </div>
            </dl>
        </div>
        
        <?php if ($usageCount > 0): ?>
        <!-- Warning -->
        <div class="card p-4 bg-amber-50 border border-amber-200">
            <h4 class="font-semibold text-amber-800 mb-2">
                <i class="fas fa-exclamation-triangle mr-2"></i>In Use
            </h4>
            <p class="text-sm text-amber-700">
                This certificate type is being used by <?= $usageCount ?> certificate(s). 
                The code cannot be changed.
            </p>
        </div>
        <?php endif; ?>
        
        <!-- Quick Actions -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-bolt mr-2 text-amber-500"></i>Quick Actions
            </h4>
            <div class="space-y-2">
                <a href="certificates.php?category=<?= urlencode($certType['category'] ?? '') ?>" class="block p-2 text-sm text-blue-600 hover:bg-blue-50 rounded">
                    <i class="fas fa-certificate mr-2"></i>View Certificates
                </a>
                <a href="add_certificate.php" class="block p-2 text-sm text-green-600 hover:bg-green-50 rounded">
                    <i class="fas fa-plus mr-2"></i>Add Certificate
                </a>
            </div>
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
        this.value = '';
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
const codeInput = document.querySelector('input[name="code"]');
if (!codeInput.readOnly) {
    codeInput.addEventListener('input', function() {
        this.value = this.value.toUpperCase().replace(/[^A-Z0-9_]/g, '');
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
