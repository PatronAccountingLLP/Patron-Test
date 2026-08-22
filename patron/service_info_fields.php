<?php
/**
 * PATRON - Service Information Fields Management
 * Manage which info fields are required for a service
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

$pageTitle = 'Info Fields - ' . $service['name'];

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'add_field') {
        $fieldId = (int)($_POST['field_id'] ?? 0);
        $isRequired = isset($_POST['is_required']) ? 1 : 0;
        $displayOrder = (int)($_POST['display_order'] ?? 0);
        
        if ($fieldId) {
            // Check if already exists
            $existing = dbFetchOne("SELECT id FROM service_field_requirements WHERE service_id = ? AND field_id = ?", [$serviceId, $fieldId]);
            if ($existing) {
                setFlash('error', 'This field is already added to this service.');
            } else {
                dbExecute("INSERT INTO service_field_requirements (service_id, field_id, is_required, display_order) VALUES (?, ?, ?, ?)", 
                    [$serviceId, $fieldId, $isRequired, $displayOrder]);
                setFlash('success', 'Information field added.');
            }
        }
    }
    
    if ($action === 'update_field') {
        $reqId = (int)($_POST['req_id'] ?? 0);
        $isRequired = isset($_POST['is_required']) ? 1 : 0;
        $displayOrder = (int)($_POST['display_order'] ?? 0);
        
        if ($reqId) {
            dbExecute("UPDATE service_field_requirements SET is_required = ?, display_order = ? WHERE id = ? AND service_id = ?", 
                [$isRequired, $displayOrder, $reqId, $serviceId]);
            setFlash('success', 'Field updated.');
        }
    }
    
    if ($action === 'remove_field') {
        $reqId = (int)($_POST['req_id'] ?? 0);
        if ($reqId) {
            dbExecute("DELETE FROM service_field_requirements WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
            setFlash('success', 'Field removed.');
        }
    }
    
    if ($action === 'bulk_add') {
        $fieldIds = $_POST['field_ids'] ?? [];
        $added = 0;
        foreach ($fieldIds as $fid) {
            $fid = (int)$fid;
            $existing = dbFetchOne("SELECT id FROM service_field_requirements WHERE service_id = ? AND field_id = ?", [$serviceId, $fid]);
            if (!$existing) {
                dbExecute("INSERT INTO service_field_requirements (service_id, field_id, is_required, display_order) VALUES (?, ?, 1, 0)", 
                    [$serviceId, $fid]);
                $added++;
            }
        }
        if ($added) {
            setFlash('success', "$added field(s) added.");
        }
    }
    
    header('Location: service_info_fields.php?id=' . $serviceId);
    exit;
}

// Get current field requirements
$currentFields = dbFetchAll("
    SELECT sfr.*, inf.name as field_name, inf.code as field_code, inf.field_type, inf.category
    FROM service_field_requirements sfr
    JOIN information_fields inf ON sfr.field_id = inf.id
    WHERE sfr.service_id = ?
    ORDER BY sfr.display_order, inf.name
", [$serviceId]) ?: [];

$currentFieldIds = array_column($currentFields, 'field_id');

// Get all available info fields not yet added
$availableFields = dbFetchAll("
    SELECT * FROM information_fields 
    WHERE (deleted_at IS NULL OR deleted_at IS NULL)
    AND id NOT IN (" . (empty($currentFieldIds) ? '0' : implode(',', $currentFieldIds)) . ")
    ORDER BY category, name
") ?: [];

// Group available fields by category
$fieldsByCategory = [];
foreach ($availableFields as $f) {
    $cat = $f['category'] ?? 'Other';
    $fieldsByCategory[$cat][] = $f;
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
        <h2 class="text-2xl font-bold">Information Fields</h2>
        <p class="text-gray-500 text-sm">Configure which information is needed for this service</p>
    </div>
    <div class="flex gap-2">
        <a href="service_documents.php?id=<?= $serviceId ?>" class="btn bg-blue-100 text-blue-700 hover:bg-blue-200">
            <i class="fas fa-file-alt mr-2"></i>Documents
        </a>
        <a href="edit_service.php?id=<?= $serviceId ?>" class="btn bg-gray-100 text-gray-700 hover:bg-gray-200">
            <i class="fas fa-edit mr-2"></i>Edit Service
        </a>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Current Fields -->
    <div class="card p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-gray-700">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                Assigned Fields (<?= count($currentFields) ?>)
            </h3>
        </div>
        
        <?php if (empty($currentFields)): ?>
        <div class="text-center py-8 text-gray-500">
            <i class="fas fa-info-circle text-4xl text-gray-300 mb-3"></i>
            <p>No information fields assigned yet</p>
            <p class="text-sm">Add fields from the right panel</p>
        </div>
        <?php else: ?>
        <div class="space-y-3">
            <?php foreach ($currentFields as $f): ?>
            <div class="p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="font-medium"><?= htmlspecialchars($f['field_name']) ?></p>
                        <p class="text-xs text-gray-500">
                            <span class="font-mono"><?= htmlspecialchars($f['field_code']) ?></span>
                            <span class="mx-1">•</span>
                            <span><?= ucfirst($f['field_type']) ?></span>
                            <span class="mx-1">•</span>
                            <span><?= htmlspecialchars($f['category']) ?></span>
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-2 py-1 rounded text-xs <?= $f['is_required'] ? 'bg-red-100 text-red-700' : 'bg-gray-200 text-gray-600' ?>">
                            <?= $f['is_required'] ? 'Required' : 'Optional' ?>
                        </span>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-t flex items-center justify-between">
                    <form method="POST" class="flex items-center gap-2">
                        <input type="hidden" name="action" value="update_field">
                        <input type="hidden" name="req_id" value="<?= $f['id'] ?>">
                        <label class="flex items-center gap-1 text-sm">
                            <input type="checkbox" name="is_required" value="1" <?= $f['is_required'] ? 'checked' : '' ?> onchange="this.form.submit()">
                            Required
                        </label>
                        <input type="number" name="display_order" value="<?= $f['display_order'] ?>" 
                               class="w-16 px-2 py-1 border rounded text-sm" placeholder="Order" onchange="this.form.submit()">
                    </form>
                    <form method="POST" onsubmit="return confirm('Remove this field?')">
                        <input type="hidden" name="action" value="remove_field">
                        <input type="hidden" name="req_id" value="<?= $f['id'] ?>">
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
    
    <!-- Available Fields -->
    <div class="card p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold text-gray-700">
                <i class="fas fa-plus-circle text-blue-500 mr-2"></i>
                Available Fields (<?= count($availableFields) ?>)
            </h3>
        </div>
        
        <?php if (empty($availableFields)): ?>
        <div class="text-center py-8 text-gray-500">
            <i class="fas fa-check-circle text-4xl text-green-300 mb-3"></i>
            <p>All fields have been assigned!</p>
        </div>
        <?php else: ?>
        <form method="POST" id="bulk-add-form">
            <input type="hidden" name="action" value="bulk_add">
            
            <div class="mb-4 flex items-center justify-between">
                <input type="text" id="field-search" placeholder="Search fields..." 
                       class="form-input flex-1 mr-2" onkeyup="filterFields()">
                <button type="submit" class="btn btn-primary text-sm">
                    <i class="fas fa-plus mr-1"></i>Add Selected
                </button>
            </div>
            
            <div class="space-y-4 max-h-[500px] overflow-y-auto">
                <?php foreach ($fieldsByCategory as $cat => $fields): ?>
                <div class="field-category">
                    <h4 class="font-medium text-gray-600 text-sm mb-2 sticky top-0 bg-white py-1">
                        <?= htmlspecialchars($cat) ?> (<?= count($fields) ?>)
                    </h4>
                    <div class="space-y-2 pl-2">
                        <?php foreach ($fields as $f): ?>
                        <label class="field-item flex items-center gap-3 p-2 hover:bg-gray-50 rounded cursor-pointer" 
                               data-name="<?= strtolower($f['name']) ?>" data-code="<?= strtolower($f['code']) ?>">
                            <input type="checkbox" name="field_ids[]" value="<?= $f['id'] ?>" class="rounded">
                            <div class="flex-1">
                                <p class="text-sm font-medium"><?= htmlspecialchars($f['name']) ?></p>
                                <p class="text-xs text-gray-400">
                                    <span class="font-mono"><?= htmlspecialchars($f['code']) ?></span>
                                    <span class="mx-1">•</span>
                                    <span><?= ucfirst($f['field_type']) ?></span>
                                </p>
                            </div>
                            <button type="button" onclick="quickAdd(<?= $f['id'] ?>)" 
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
    <input type="hidden" name="action" value="add_field">
    <input type="hidden" name="field_id" id="quick-add-field-id">
    <input type="hidden" name="is_required" value="1">
    <input type="hidden" name="display_order" value="0">
</form>

<script>
function filterFields() {
    const query = document.getElementById('field-search').value.toLowerCase();
    document.querySelectorAll('.field-item').forEach(item => {
        const name = item.dataset.name || '';
        const code = item.dataset.code || '';
        const match = name.includes(query) || code.includes(query);
        item.style.display = match ? '' : 'none';
    });
    
    // Hide empty categories
    document.querySelectorAll('.field-category').forEach(cat => {
        const visibleItems = cat.querySelectorAll('.field-item:not([style*="display: none"])');
        cat.style.display = visibleItems.length > 0 ? '' : 'none';
    });
}

function quickAdd(fieldId) {
    document.getElementById('quick-add-field-id').value = fieldId;
    document.getElementById('quick-add-form').submit();
}
</script>

<?php require_once 'includes/footer.php'; ?>
