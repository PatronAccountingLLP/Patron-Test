<?php
/**
 * PATRON ADMIN DASHBOARD
 * Service Field Requirements - Configure required info fields for each service
 */

require_once 'includes/db.php';
startSession();
requireLogin();

// Only admin can manage
// Get service ID
$serviceId = (int)($_GET['service_id'] ?? 0);

// Get all services
$services = dbFetchAll("SELECT id, code, name, category FROM services WHERE deleted_at IS NULL ORDER BY category, name");

// If no service selected, use first one
if (!$serviceId && !empty($services)) {
    $serviceId = $services[0]['id'];
}

// Get selected service
$service = null;
if ($serviceId) {
    $service = dbFetchOne("SELECT * FROM services WHERE id = ? AND deleted_at IS NULL", [$serviceId]);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $service) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        setFlash('error', 'Invalid request.');
    } else {
        $action = $_POST['action'] ?? '';
        
        if ($action === 'add_field') {
            $fieldId = (int)($_POST['field_id'] ?? 0);
            $isRequired = isset($_POST['is_required']) ? 1 : 0;
            $entityTypes = $_POST['entity_types'] ?? [];
            
            if ($fieldId) {
                // Check if already exists
                $existing = dbFetchOne("SELECT id FROM service_field_requirements WHERE service_id = ? AND field_id = ?", 
                    [$serviceId, $fieldId]);
                
                if ($existing) {
                    setFlash('error', 'This field is already added.');
                } else {
                    $maxOrder = dbFetchOne("SELECT MAX(display_order) as max_order FROM service_field_requirements WHERE service_id = ?", [$serviceId]);
                    $order = ($maxOrder['max_order'] ?? 0) + 1;
                    $entityTypesJson = !empty($entityTypes) ? json_encode($entityTypes) : null;
                    
                    dbExecute("INSERT INTO service_field_requirements (service_id, field_id, is_required, entity_types, display_order) VALUES (?, ?, ?, ?, ?)",
                        [$serviceId, $fieldId, $isRequired, $entityTypesJson, $order]);
                    logActivity('CREATE', 'service_field_requirements', null, null, ['service_id' => $serviceId, 'field_id' => $fieldId]);
                    setFlash('success', 'Field requirement added.');
                }
            }
        }
        
        if ($action === 'remove_field') {
            $reqId = (int)($_POST['requirement_id'] ?? 0);
            if ($reqId) {
                dbExecute("DELETE FROM service_field_requirements WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
                logActivity('DELETE', 'service_field_requirements', $reqId);
                setFlash('success', 'Field requirement removed.');
            }
        }
        
        if ($action === 'toggle_required') {
            $reqId = (int)($_POST['requirement_id'] ?? 0);
            if ($reqId) {
                dbExecute("UPDATE service_field_requirements SET is_required = NOT is_required WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
                setFlash('success', 'Requirement updated.');
            }
        }
        
        if ($action === 'update_order') {
            $orders = $_POST['order'] ?? [];
            foreach ($orders as $reqId => $order) {
                dbExecute("UPDATE service_field_requirements SET display_order = ? WHERE id = ? AND service_id = ?", 
                    [(int)$order, (int)$reqId, $serviceId]);
            }
            setFlash('success', 'Order updated.');
        }
        
        header('Location: service_fields.php?service_id=' . $serviceId);
        exit;
    }
}

// Get current requirements for selected service
$requirements = [];
if ($service) {
    $requirements = dbFetchAll("
        SELECT sfr.*, f.code, f.name, f.field_type, f.level, f.category
        FROM service_field_requirements sfr
        JOIN information_fields f ON sfr.field_id = f.id
        WHERE sfr.service_id = ?
        ORDER BY sfr.display_order
    ", [$serviceId]);
}

// Get available fields (not yet added)
$availableFields = [];
if ($service) {
    $existingIds = array_column($requirements, 'field_id');
    $existingIdsStr = empty($existingIds) ? '0' : implode(',', $existingIds);
    
    $availableFields = dbFetchAll("
        SELECT * FROM information_fields 
        WHERE deleted_at IS NULL AND is_active = 1 AND id NOT IN ($existingIdsStr)
        ORDER BY category, name
    ");
}

// Entity types
$entityTypes = [
    'SOLE_PROPRIETOR' => 'Sole Proprietor',
    'PARTNERSHIP' => 'Partnership Firm',
    'LLP' => 'LLP',
    'PVT_LTD' => 'Private Limited',
    'SECTION_8' => 'Section 8 Company',
    'OPC' => 'One Person Company'
];

$pageTitle = 'Service Field Requirements';
require_once 'includes/header.php';
?>

<div class="mb-6">
    <a href="services.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Services
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <!-- Service Selection Sidebar -->
    <div class="lg:col-span-1">
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold">Select Service</h3>
            </div>
            <div class="max-h-96 overflow-y-auto">
                <?php 
                $currentCategory = '';
                foreach ($services as $s): 
                    if ($s['category'] !== $currentCategory):
                        $currentCategory = $s['category'];
                ?>
                <div class="px-4 py-2 bg-gray-50 text-xs font-semibold text-gray-500 uppercase">
                    <?= htmlspecialchars($currentCategory) ?>
                </div>
                <?php endif; ?>
                <a href="?service_id=<?= $s['id'] ?>" 
                   class="block px-4 py-3 border-b border-gray-100 hover:bg-gray-50 <?= $serviceId == $s['id'] ? 'bg-blue-50 border-l-4 border-l-blue-600' : '' ?>">
                    <p class="font-medium text-gray-900 <?= $serviceId == $s['id'] ? 'text-blue-700' : '' ?>">
                        <?= htmlspecialchars($s['name']) ?>
                    </p>
                    <p class="text-xs text-gray-500"><?= htmlspecialchars($s['code']) ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="lg:col-span-3">
        <?php if (!$service): ?>
        <div class="card p-8 text-center">
            <i class="fas fa-hand-pointer text-4xl text-gray-400 mb-3"></i>
            <p class="text-gray-500">Select a service to configure its field requirements.</p>
        </div>
        <?php else: ?>
        
        <!-- Service Header -->
        <div class="card p-6 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-900"><?= htmlspecialchars($service['name']) ?></h2>
                    <p class="text-sm text-gray-500">
                        <span class="font-mono"><?= htmlspecialchars($service['code']) ?></span> • 
                        <?= htmlspecialchars($service['category']) ?>
                    </p>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold text-gray-900"><?= count($requirements) ?></p>
                    <p class="text-sm text-gray-500">fields required</p>
                </div>
            </div>
            <div class="mt-3 flex gap-2">
                <a href="service_requirements.php?service_id=<?= $serviceId ?>" class="text-sm text-blue-600 hover:text-blue-700">
                    <i class="fas fa-file-alt mr-1"></i> Document Requirements
                </a>
                <span class="text-gray-300">|</span>
                <a href="service_tasks.php?service_id=<?= $serviceId ?>" class="text-sm text-blue-600 hover:text-blue-700">
                    <i class="fas fa-tasks mr-1"></i> Task Templates
                </a>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Current Requirements -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Required Information Fields</h3>
                </div>
                
                <?php if (empty($requirements)): ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-list-alt text-4xl mb-3 opacity-50"></i>
                    <p>No field requirements defined.</p>
                    <p class="text-sm">Add fields from the right panel.</p>
                </div>
                <?php else: ?>
                <form method="POST" class="divide-y divide-gray-100">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_order">
                    
                    <?php foreach ($requirements as $index => $req): ?>
                    <div class="p-4 flex items-center gap-4">
                        <input type="number" name="order[<?= $req['id'] ?>]" value="<?= $index + 1 ?>" 
                               class="w-12 text-center text-sm border border-gray-300 rounded">
                        <div class="flex-1">
                            <div class="flex items-center gap-2">
                                <p class="font-medium text-gray-900"><?= htmlspecialchars($req['name']) ?></p>
                                <?php if ($req['is_required']): ?>
                                <span class="px-2 py-0.5 text-xs bg-red-100 text-red-700 rounded">Required</span>
                                <?php else: ?>
                                <span class="px-2 py-0.5 text-xs bg-gray-100 text-gray-600 rounded">Optional</span>
                                <?php endif; ?>
                            </div>
                            <p class="text-xs text-gray-500">
                                <?= ucfirst($req['field_type']) ?> • <?= ucfirst($req['level']) ?>
                                <?php if ($req['entity_types']): ?>
                                <br><span class="text-blue-600">Only: <?= implode(', ', array_map(fn($e) => $entityTypes[$e] ?? $e, json_decode($req['entity_types'], true))) ?></span>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <form method="POST" class="inline">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="toggle_required">
                                <input type="hidden" name="requirement_id" value="<?= $req['id'] ?>">
                                <button type="submit" class="text-gray-500 hover:text-blue-600" title="Toggle required">
                                    <i class="fas fa-asterisk <?= $req['is_required'] ? 'text-red-500' : '' ?>"></i>
                                </button>
                            </form>
                            <form method="POST" class="inline" onsubmit="return confirm('Remove this field?')">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="remove_field">
                                <input type="hidden" name="requirement_id" value="<?= $req['id'] ?>">
                                <button type="submit" class="text-red-600 hover:text-red-700" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <div class="p-4 bg-gray-50">
                        <button type="submit" class="btn btn-secondary text-sm w-full">
                            <i class="fas fa-save mr-2"></i> Save Order
                        </button>
                    </div>
                </form>
                <?php endif; ?>
            </div>
            
            <!-- Add Field -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Add Field Requirement</h3>
                </div>
                
                <?php if (empty($availableFields)): ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-check-circle text-4xl mb-3 text-green-500 opacity-50"></i>
                    <p>All fields have been added!</p>
                    <a href="information_fields.php" class="text-blue-600 hover:text-blue-700 text-sm">
                        Create new information field →
                    </a>
                </div>
                <?php else: ?>
                <div class="p-4 max-h-96 overflow-y-auto">
                    <p class="text-sm text-gray-600 mb-4">
                        Select fields that need to be collected for this service:
                    </p>
                    
                    <?php 
                    $currentCategory = '';
                    foreach ($availableFields as $field): 
                        if ($field['category'] !== $currentCategory):
                            $currentCategory = $field['category'];
                    ?>
                    <p class="text-xs font-semibold text-gray-500 uppercase mt-4 mb-2"><?= htmlspecialchars($currentCategory ?: 'General') ?></p>
                    <?php endif; ?>
                    
                    <form method="POST" class="flex items-center gap-2 p-2 bg-gray-50 rounded-lg mb-2 hover:bg-gray-100" x-data="{ showOptions: false }">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="add_field">
                        <input type="hidden" name="field_id" value="<?= $field['id'] ?>">
                        
                        <div class="flex-1">
                            <p class="font-medium text-gray-900 text-sm"><?= htmlspecialchars($field['name']) ?></p>
                            <p class="text-xs text-gray-500"><?= ucfirst($field['field_type']) ?> • <?= ucfirst($field['level']) ?></p>
                        </div>
                        
                        <div class="flex items-center gap-2">
                            <label class="flex items-center gap-1 text-xs text-gray-600">
                                <input type="checkbox" name="is_required" checked class="rounded">
                                Req
                            </label>
                            
                            <button type="button" @click="showOptions = !showOptions" class="text-gray-400 hover:text-gray-600 text-xs">
                                <i class="fas fa-cog"></i>
                            </button>
                            
                            <button type="submit" class="btn btn-primary text-xs py-1 px-3">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        
                        <!-- Entity Type Filter (hidden by default) -->
                        <div x-show="showOptions" x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border p-3 z-10">
                            <p class="text-xs font-semibold mb-2">Only for entity types:</p>
                            <?php foreach ($entityTypes as $code => $label): ?>
                            <label class="flex items-center gap-2 text-xs mb-1">
                                <input type="checkbox" name="entity_types[]" value="<?= $code ?>" class="rounded">
                                <?= $label ?>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <div class="p-4 border-t border-gray-200 bg-gray-50">
                    <a href="information_fields.php" class="text-blue-600 hover:text-blue-700 text-sm">
                        <i class="fas fa-plus mr-1"></i> Create New Field
                    </a>
                </div>
            </div>
        </div>
        
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
