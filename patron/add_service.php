<?php
/**
 * PATRON ADMIN DASHBOARD
 * Add New Service Page
 * Updated: Removed Admin-only restriction - any logged in user can add
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Add Service';

$errors = [];
$formData = [
    'code' => '',
    'name' => '',
    'description' => '',
    'category' => '',
    'sub_category' => '',
    'base_price' => '',
    'govt_fee' => '',
    'estimated_days' => '',
    'display_order' => '0'
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        // Get form data
        $formData['code'] = strtoupper(sanitize($_POST['code'] ?? ''));
        $formData['name'] = sanitize($_POST['name'] ?? '');
        $formData['description'] = sanitize($_POST['description'] ?? '');
        $formData['category'] = sanitize($_POST['category'] ?? '');
        $formData['sub_category'] = sanitize($_POST['sub_category'] ?? '');
        $formData['base_price'] = floatval($_POST['base_price'] ?? 0);
        $formData['govt_fee'] = floatval($_POST['govt_fee'] ?? 0);
        $formData['estimated_days'] = intval($_POST['estimated_days'] ?? 0);
        $formData['display_order'] = intval($_POST['display_order'] ?? 0);
        
        // Validation
        if (empty($formData['code'])) {
            $errors[] = 'Service code is required.';
        } elseif (!preg_match('/^[A-Z0-9\-]+$/', $formData['code'])) {
            $errors[] = 'Service code can only contain uppercase letters, numbers, and hyphens.';
        } else {
            // Check if code already exists
            $existing = dbFetchOne("SELECT id FROM services WHERE code = ? AND deleted_at IS NULL", [$formData['code']]);
            if ($existing) {
                $errors[] = 'A service with this code already exists.';
            }
        }
        
        if (empty($formData['name'])) {
            $errors[] = 'Service name is required.';
        }
        
        if (empty($formData['category'])) {
            $errors[] = 'Category is required.';
        }
        
        if ($formData['base_price'] < 0) {
            $errors[] = 'Base price cannot be negative.';
        }
        
        // If no errors, insert the service
        if (empty($errors)) {
            try {
                dbExecute("
                    INSERT INTO services (code, name, description, category, sub_category, base_price, govt_fee, estimated_days, display_order, is_active, created_by)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 1, ?)
                ", [
                    $formData['code'],
                    $formData['name'],
                    $formData['description'] ?: null,
                    $formData['category'],
                    $formData['sub_category'] ?: null,
                    $formData['base_price'],
                    $formData['govt_fee'],
                    $formData['estimated_days'] ?: null,
                    $formData['display_order'],
                    $_SESSION['user_id'] ?? 0
                ]);
                
                $serviceId = dbLastInsertId();
                if (function_exists('logActivity')) {
                    logActivity('CREATE', 'services', $serviceId, null, $formData);
                }
                
                setFlash('success', 'Service created successfully.');
                header('Location: services.php');
                exit;
            } catch (Exception $e) {
                $errors[] = 'Failed to create service. Please try again.';
            }
        }
    }
}

// Get existing categories for dropdown
$categories = dbFetchAll("SELECT DISTINCT category FROM services WHERE deleted_at IS NULL AND category IS NOT NULL ORDER BY category") ?: [];

require_once 'includes/header.php';
?>

<!-- Page Header -->
<div class="mb-6">
    <a href="services.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Services
    </a>
</div>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold"><i class="fas fa-plus-circle text-green-500 mr-2"></i>Add New Service</h2>
        <p class="text-gray-500 text-sm">Create a new service in the catalog</p>
    </div>
</div>

<!-- Form Card -->
<div class="card max-w-3xl">
    <div class="p-6 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Service Details</h3>
        <p class="text-sm text-gray-500 mt-1">Fill in the details to create a new service</p>
    </div>
    
    <?php if (!empty($errors)): ?>
    <div class="p-4 bg-red-50 border-b border-red-200">
        <div class="flex items-start gap-2 text-red-700">
            <i class="fas fa-exclamation-circle mt-0.5"></i>
            <ul class="text-sm space-y-1">
                <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    
    <form method="POST" class="p-6 space-y-6">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        
        <!-- Code & Name -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="code" class="form-label">Service Code <span class="text-red-500">*</span></label>
                <input type="text" id="code" name="code" 
                       value="<?= htmlspecialchars($formData['code']) ?>"
                       class="form-input uppercase" 
                       placeholder="e.g., GST-REG"
                       required>
                <p class="text-xs text-gray-500 mt-1">Uppercase letters, numbers, and hyphens only</p>
            </div>
            <div>
                <label for="name" class="form-label">Service Name <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" 
                       value="<?= htmlspecialchars($formData['name']) ?>"
                       class="form-input" 
                       placeholder="e.g., GST Registration"
                       required>
            </div>
        </div>
        
        <!-- Description -->
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" rows="3" 
                      class="form-input"
                      placeholder="Brief description of the service..."><?= htmlspecialchars($formData['description']) ?></textarea>
        </div>
        
        <!-- Category -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="category" class="form-label">Category <span class="text-red-500">*</span></label>
                <input type="text" id="category" name="category" 
                       value="<?= htmlspecialchars($formData['category']) ?>"
                       class="form-input" 
                       list="category-list"
                       placeholder="e.g., Tax, License, Company"
                       required>
                <datalist id="category-list">
                    <?php foreach ($categories as $cat): ?>
                    <option value="<?= htmlspecialchars($cat['category']) ?>">
                    <?php endforeach; ?>
                    <option value="Tax">
                    <option value="License">
                    <option value="Company">
                    <option value="IP">
                    <option value="Labour">
                    <option value="Digital">
                    <option value="Registration">
                    <option value="Compliance">
                    <option value="Other">
                </datalist>
            </div>
            <div>
                <label for="sub_category" class="form-label">Sub-Category</label>
                <input type="text" id="sub_category" name="sub_category" 
                       value="<?= htmlspecialchars($formData['sub_category']) ?>"
                       class="form-input" 
                       placeholder="Optional sub-category">
            </div>
        </div>
        
        <!-- Pricing -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label for="base_price" class="form-label">Base Price (₹)</label>
                <input type="number" id="base_price" name="base_price" 
                       value="<?= htmlspecialchars($formData['base_price']) ?>"
                       class="form-input" 
                       min="0" step="0.01"
                       placeholder="0.00">
            </div>
            <div>
                <label for="govt_fee" class="form-label">Govt Fee (₹)</label>
                <input type="number" id="govt_fee" name="govt_fee" 
                       value="<?= htmlspecialchars($formData['govt_fee']) ?>"
                       class="form-input" 
                       min="0" step="0.01"
                       placeholder="0.00">
            </div>
            <div>
                <label for="estimated_days" class="form-label">Estimated Days</label>
                <input type="number" id="estimated_days" name="estimated_days" 
                       value="<?= htmlspecialchars($formData['estimated_days']) ?>"
                       class="form-input" 
                       min="0"
                       placeholder="e.g., 7">
            </div>
        </div>
        
        <!-- Display Order -->
        <div class="w-1/2">
            <label for="display_order" class="form-label">Display Order</label>
            <input type="number" id="display_order" name="display_order" 
                   value="<?= htmlspecialchars($formData['display_order']) ?>"
                   class="form-input" 
                   min="0"
                   placeholder="0">
            <p class="text-xs text-gray-500 mt-1">Lower numbers appear first</p>
        </div>
        
        <!-- Submit Buttons -->
        <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i> Create Service
            </button>
            <a href="services.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
