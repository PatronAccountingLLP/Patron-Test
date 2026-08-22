<?php
/**
 * PATRON ADMIN DASHBOARD
 * Edit Service Page
 */

$pageTitle = 'Edit Service';
require_once 'includes/header.php';
requireAdmin();

// Get service ID
$serviceId = (int)($_GET['id'] ?? 0);
if (!$serviceId) {
    setFlash('error', 'Invalid service ID.');
    header('Location: services.php');
    exit;
}

// Get service
$service = dbFetchOne("SELECT * FROM services WHERE id = ? AND deleted_at IS NULL", [$serviceId]);
if (!$service) {
    setFlash('error', 'Service not found.');
    header('Location: services.php');
    exit;
}

$errors = [];
$formData = $service;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        $oldData = $service;
        
        // Note: Code is not editable per business rule CF-002
        $formData['name'] = sanitize($_POST['name'] ?? '');
        $formData['description'] = sanitize($_POST['description'] ?? '');
        $formData['category'] = sanitize($_POST['category'] ?? '');
        $formData['sub_category'] = sanitize($_POST['sub_category'] ?? '');
        $formData['base_price'] = floatval($_POST['base_price'] ?? 0);
        $formData['govt_fee'] = floatval($_POST['govt_fee'] ?? 0);
        $formData['estimated_days'] = intval($_POST['estimated_days'] ?? 0);
        $formData['display_order'] = intval($_POST['display_order'] ?? 0);
        $formData['is_active'] = isset($_POST['is_active']) ? 1 : 0;
        
        // Validation
        if (empty($formData['name'])) {
            $errors[] = 'Service name is required.';
        }
        
        if (empty($formData['category'])) {
            $errors[] = 'Category is required.';
        }
        
        if ($formData['base_price'] < 0) {
            $errors[] = 'Base price cannot be negative.';
        }
        
        if (empty($errors)) {
            try {
                dbExecute("
                    UPDATE services SET 
                        name = ?, description = ?, category = ?, sub_category = ?,
                        base_price = ?, govt_fee = ?, estimated_days = ?, 
                        display_order = ?, is_active = ?, updated_by = ?
                    WHERE id = ?
                ", [
                    $formData['name'],
                    $formData['description'] ?: null,
                    $formData['category'],
                    $formData['sub_category'] ?: null,
                    $formData['base_price'],
                    $formData['govt_fee'],
                    $formData['estimated_days'] ?: null,
                    $formData['display_order'],
                    $formData['is_active'],
                    $_SESSION['user_id'],
                    $serviceId
                ]);
                
                logActivity('UPDATE', 'services', $serviceId, $oldData, $formData);
                
                setFlash('success', 'Service updated successfully.');
                header('Location: services.php');
                exit;
            } catch (Exception $e) {
                $errors[] = 'Failed to update service. Please try again.';
            }
        }
    }
}

// Get existing categories for dropdown
$categories = dbFetchAll("SELECT DISTINCT category FROM services WHERE deleted_at IS NULL ORDER BY category");
?>

<!-- Page Header -->
<div class="mb-6">
    <a href="services.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Services
    </a>
</div>

<!-- Form Card -->
<div class="card max-w-3xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-semibold text-gray-900">Edit Service</h2>
        <p class="text-sm text-gray-500 mt-1">Update service details</p>
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
        
        <!-- Code (Read-only) & Name -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="code" class="form-label">Service Code</label>
                <input type="text" id="code" 
                       value="<?= htmlspecialchars($service['code']) ?>"
                       class="form-input bg-gray-100 cursor-not-allowed" 
                       disabled>
                <p class="text-xs text-gray-500 mt-1">Code cannot be changed after creation</p>
            </div>
            <div>
                <label for="name" class="form-label">Service Name *</label>
                <input type="text" id="name" name="name" 
                       value="<?= htmlspecialchars($formData['name']) ?>"
                       class="form-input" 
                       required>
            </div>
        </div>
        
        <!-- Description -->
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" rows="3" 
                      class="form-input"><?= htmlspecialchars($formData['description']) ?></textarea>
        </div>
        
        <!-- Category -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="category" class="form-label">Category *</label>
                <input type="text" id="category" name="category" 
                       value="<?= htmlspecialchars($formData['category']) ?>"
                       class="form-input" 
                       list="category-list"
                       required>
                <datalist id="category-list">
                    <?php foreach ($categories as $cat): ?>
                    <option value="<?= htmlspecialchars($cat['category']) ?>">
                    <?php endforeach; ?>
                </datalist>
            </div>
            <div>
                <label for="sub_category" class="form-label">Sub-Category</label>
                <input type="text" id="sub_category" name="sub_category" 
                       value="<?= htmlspecialchars($formData['sub_category']) ?>"
                       class="form-input">
            </div>
        </div>
        
        <!-- Pricing -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label for="base_price" class="form-label">Base Price (₹)</label>
                <input type="number" id="base_price" name="base_price" 
                       value="<?= htmlspecialchars($formData['base_price']) ?>"
                       class="form-input" 
                       min="0" step="0.01">
            </div>
            <div>
                <label for="govt_fee" class="form-label">Govt Fee (₹)</label>
                <input type="number" id="govt_fee" name="govt_fee" 
                       value="<?= htmlspecialchars($formData['govt_fee']) ?>"
                       class="form-input" 
                       min="0" step="0.01">
            </div>
            <div>
                <label for="estimated_days" class="form-label">Estimated Days</label>
                <input type="number" id="estimated_days" name="estimated_days" 
                       value="<?= htmlspecialchars($formData['estimated_days']) ?>"
                       class="form-input" 
                       min="0">
            </div>
        </div>
        
        <!-- Display Order & Status -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="display_order" class="form-label">Display Order</label>
                <input type="number" id="display_order" name="display_order" 
                       value="<?= htmlspecialchars($formData['display_order']) ?>"
                       class="form-input" 
                       min="0">
            </div>
            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" 
                           <?= $formData['is_active'] ? 'checked' : '' ?>
                           class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="font-medium text-gray-700">Service is Active</span>
                </label>
            </div>
        </div>
        
        <!-- Submit Buttons -->
        <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i> Save Changes
            </button>
            <a href="services.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
