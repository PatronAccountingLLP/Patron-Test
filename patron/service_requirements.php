<?php
/**
 * PATRON ADMIN DASHBOARD
 * Service Document Requirements Configuration
 */

$pageTitle = 'Service Requirements';
require_once 'includes/header.php';
requireLogin();

// Only admin can manage
// Get service ID
$serviceId = (int)($_GET['service_id'] ?? 0);

// Get all services
$services = dbFetchAll("SELECT id, code, name, category FROM services WHERE deleted_at IS NULL ORDER BY category, name");

// If no service selected, show service selection
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
        
        if ($action === 'add_document') {
            $documentTypeId = (int)($_POST['document_type_id'] ?? 0);
            $isRequired = isset($_POST['is_required']) ? 1 : 0;
            
            if ($documentTypeId) {
                // Check if already exists
                $existing = dbFetchOne("SELECT id FROM service_document_requirements WHERE service_id = ? AND document_type_id = ?", 
                    [$serviceId, $documentTypeId]);
                
                if ($existing) {
                    setFlash('error', 'This document type is already added.');
                } else {
                    $maxOrder = dbFetchOne("SELECT MAX(display_order) as max_order FROM service_document_requirements WHERE service_id = ?", [$serviceId]);
                    $order = ($maxOrder['max_order'] ?? 0) + 1;
                    
                    dbExecute("INSERT INTO service_document_requirements (service_id, document_type_id, is_required, display_order) VALUES (?, ?, ?, ?)",
                        [$serviceId, $documentTypeId, $isRequired, $order]);
                    logActivity('CREATE', 'service_document_requirements', null, null, ['service_id' => $serviceId, 'document_type_id' => $documentTypeId]);
                    setFlash('success', 'Document requirement added.');
                }
            }
        }
        
        if ($action === 'remove_document') {
            $reqId = (int)($_POST['requirement_id'] ?? 0);
            if ($reqId) {
                dbExecute("DELETE FROM service_document_requirements WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
                logActivity('DELETE', 'service_document_requirements', $reqId);
                setFlash('success', 'Document requirement removed.');
            }
        }
        
        if ($action === 'toggle_required') {
            $reqId = (int)($_POST['requirement_id'] ?? 0);
            if ($reqId) {
                dbExecute("UPDATE service_document_requirements SET is_required = NOT is_required WHERE id = ? AND service_id = ?", [$reqId, $serviceId]);
                setFlash('success', 'Requirement updated.');
            }
        }
        
        if ($action === 'update_order') {
            $orders = $_POST['order'] ?? [];
            foreach ($orders as $reqId => $order) {
                dbExecute("UPDATE service_document_requirements SET display_order = ? WHERE id = ? AND service_id = ?", 
                    [(int)$order, (int)$reqId, $serviceId]);
            }
            setFlash('success', 'Order updated.');
        }
        
        header('Location: service_requirements.php?service_id=' . $serviceId);
        exit;
    }
}

// Get current requirements for selected service
$requirements = [];
if ($service) {
    $requirements = dbFetchAll("
        SELECT sdr.*, dt.code, dt.name, dt.category, dt.level
        FROM service_document_requirements sdr
        JOIN document_types dt ON sdr.document_type_id = dt.id
        WHERE sdr.service_id = ?
        ORDER BY sdr.display_order
    ", [$serviceId]);
}

// Get available document types (not yet added)
$availableDocTypes = [];
if ($service) {
    $existingIds = array_column($requirements, 'document_type_id');
    $existingIdsStr = empty($existingIds) ? '0' : implode(',', $existingIds);
    
    $availableDocTypes = dbFetchAll("
        SELECT * FROM document_types 
        WHERE deleted_at IS NULL AND is_active = 1 AND id NOT IN ($existingIdsStr)
        ORDER BY category, name
    ");
}
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
            <p class="text-gray-500">Select a service to configure its document requirements.</p>
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
                    <p class="text-sm text-gray-500">documents required</p>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Current Requirements -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Required Documents</h3>
                </div>
                
                <?php if (empty($requirements)): ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-file-medical text-4xl mb-3 opacity-50"></i>
                    <p>No documents configured yet.</p>
                    <p class="text-sm">Add documents from the right panel.</p>
                </div>
                <?php else: ?>
                <form method="POST" class="divide-y divide-gray-100">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_order">
                    
                    <?php foreach ($requirements as $index => $req): ?>
                    <div class="p-4 flex items-center gap-4">
                        <div class="cursor-move text-gray-400">
                            <i class="fas fa-grip-vertical"></i>
                        </div>
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
                                <?= htmlspecialchars($req['code']) ?> • <?= htmlspecialchars($req['category']) ?> • <?= ucfirst($req['level']) ?>
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <!-- Toggle Required -->
                            <form method="POST" class="inline">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="toggle_required">
                                <input type="hidden" name="requirement_id" value="<?= $req['id'] ?>">
                                <button type="submit" class="text-gray-500 hover:text-blue-600" title="Toggle required">
                                    <i class="fas fa-asterisk <?= $req['is_required'] ? 'text-red-500' : '' ?>"></i>
                                </button>
                            </form>
                            <!-- Remove -->
                            <form method="POST" class="inline" onsubmit="return confirm('Remove this requirement?')">
                                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                <input type="hidden" name="action" value="remove_document">
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
            
            <!-- Add Document -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Add Document Requirement</h3>
                </div>
                
                <?php if (empty($availableDocTypes)): ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-check-circle text-4xl mb-3 text-green-500 opacity-50"></i>
                    <p>All document types have been added!</p>
                    <a href="document_types.php" class="text-blue-600 hover:text-blue-700 text-sm">
                        Create new document type →
                    </a>
                </div>
                <?php else: ?>
                <div class="p-4">
                    <p class="text-sm text-gray-600 mb-4">
                        Select documents that clients need to submit for this service:
                    </p>
                    
                    <?php 
                    $currentCategory = '';
                    foreach ($availableDocTypes as $dt): 
                        if ($dt['category'] !== $currentCategory):
                            $currentCategory = $dt['category'];
                    ?>
                    <p class="text-xs font-semibold text-gray-500 uppercase mt-4 mb-2"><?= htmlspecialchars($currentCategory) ?></p>
                    <?php endif; ?>
                    
                    <form method="POST" class="flex items-center gap-2 p-2 bg-gray-50 rounded-lg mb-2 hover:bg-gray-100">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="add_document">
                        <input type="hidden" name="document_type_id" value="<?= $dt['id'] ?>">
                        
                        <div class="flex-1">
                            <p class="font-medium text-gray-900 text-sm"><?= htmlspecialchars($dt['name']) ?></p>
                            <p class="text-xs text-gray-500"><?= htmlspecialchars($dt['code']) ?> • <?= ucfirst($dt['level']) ?></p>
                        </div>
                        
                        <label class="flex items-center gap-1 text-xs text-gray-600">
                            <input type="checkbox" name="is_required" checked class="rounded">
                            Required
                        </label>
                        
                        <button type="submit" class="btn btn-primary text-xs py-1 px-3">
                            <i class="fas fa-plus"></i>
                        </button>
                    </form>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <div class="p-4 border-t border-gray-200 bg-gray-50">
                    <a href="document_types.php" class="text-blue-600 hover:text-blue-700 text-sm">
                        <i class="fas fa-plus mr-1"></i> Create New Document Type
                    </a>
                </div>
            </div>
        </div>
        
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
