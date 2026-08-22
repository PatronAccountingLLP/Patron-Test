<?php
/**
 * PATRON ADMIN DASHBOARD
 * Service Task Templates - Configure default tasks for each service
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
        
        if ($action === 'add_task') {
            $title = sanitize($_POST['title'] ?? '');
            $description = sanitize($_POST['description'] ?? '');
            $estimatedHours = (int)($_POST['estimated_hours'] ?? 0);
            
            if ($title) {
                $maxOrder = dbFetchOne("SELECT MAX(display_order) as max_order FROM service_task_templates WHERE service_id = ?", [$serviceId]);
                $order = ($maxOrder['max_order'] ?? 0) + 1;
                
                dbExecute("INSERT INTO service_task_templates (service_id, title, description, estimated_hours, display_order) VALUES (?, ?, ?, ?, ?)",
                    [$serviceId, $title, $description ?: null, $estimatedHours ?: null, $order]);
                logActivity('CREATE', 'service_task_templates', null, null, ['service_id' => $serviceId, 'title' => $title]);
                setFlash('success', 'Task template added.');
            }
        }
        
        if ($action === 'update_task') {
            $taskId = (int)($_POST['task_id'] ?? 0);
            $title = sanitize($_POST['title'] ?? '');
            $description = sanitize($_POST['description'] ?? '');
            $estimatedHours = (int)($_POST['estimated_hours'] ?? 0);
            
            if ($taskId && $title) {
                dbExecute("UPDATE service_task_templates SET title = ?, description = ?, estimated_hours = ? WHERE id = ? AND service_id = ?",
                    [$title, $description ?: null, $estimatedHours ?: null, $taskId, $serviceId]);
                setFlash('success', 'Task template updated.');
            }
        }
        
        if ($action === 'remove_task') {
            $taskId = (int)($_POST['task_id'] ?? 0);
            if ($taskId) {
                dbExecute("DELETE FROM service_task_templates WHERE id = ? AND service_id = ?", [$taskId, $serviceId]);
                logActivity('DELETE', 'service_task_templates', $taskId);
                setFlash('success', 'Task template removed.');
            }
        }
        
        if ($action === 'update_order') {
            $orders = $_POST['order'] ?? [];
            foreach ($orders as $taskId => $order) {
                dbExecute("UPDATE service_task_templates SET display_order = ? WHERE id = ? AND service_id = ?", 
                    [(int)$order, (int)$taskId, $serviceId]);
            }
            setFlash('success', 'Order updated.');
        }
        
        header('Location: service_tasks.php?service_id=' . $serviceId);
        exit;
    }
}

// Get current task templates for selected service
$taskTemplates = [];
if ($service) {
    $taskTemplates = dbFetchAll("
        SELECT * FROM service_task_templates 
        WHERE service_id = ?
        ORDER BY display_order
    ", [$serviceId]);
}

$pageTitle = 'Service Task Templates';
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
            <p class="text-gray-500">Select a service to configure its task templates.</p>
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
                    <p class="text-2xl font-bold text-gray-900"><?= count($taskTemplates) ?></p>
                    <p class="text-sm text-gray-500">task templates</p>
                </div>
            </div>
            <p class="mt-3 text-sm text-gray-600">
                <i class="fas fa-info-circle mr-1"></i>
                These tasks will be automatically created when a new service request is made for this service.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Current Task Templates -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Task Templates</h3>
                </div>
                
                <?php if (empty($taskTemplates)): ?>
                <div class="p-8 text-center text-gray-500">
                    <i class="fas fa-tasks text-4xl mb-3 opacity-50"></i>
                    <p>No task templates defined.</p>
                    <p class="text-sm">Add tasks from the right panel.</p>
                </div>
                <?php else: ?>
                <form method="POST">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_order">
                    
                    <div class="divide-y divide-gray-100">
                        <?php foreach ($taskTemplates as $index => $task): ?>
                        <div class="p-4" x-data="{ editing: false }">
                            <!-- View Mode -->
                            <div x-show="!editing" class="flex items-center gap-4">
                                <input type="number" name="order[<?= $task['id'] ?>]" value="<?= $index + 1 ?>" 
                                       class="w-12 text-center text-sm border border-gray-300 rounded">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-900"><?= htmlspecialchars($task['title']) ?></p>
                                    <?php if ($task['description']): ?>
                                    <p class="text-xs text-gray-500"><?= htmlspecialchars($task['description']) ?></p>
                                    <?php endif; ?>
                                    <?php if ($task['estimated_hours']): ?>
                                    <p class="text-xs text-blue-600">~<?= $task['estimated_hours'] ?> hours</p>
                                    <?php endif; ?>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button type="button" @click="editing = true" class="text-blue-600 hover:text-blue-700" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Edit Mode -->
                            <div x-show="editing" x-cloak>
                                <form method="POST" class="space-y-3">
                                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                    <input type="hidden" name="action" value="update_task">
                                    <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
                                    
                                    <div>
                                        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" 
                                               class="form-input text-sm" placeholder="Task title" required>
                                    </div>
                                    <div>
                                        <input type="text" name="description" value="<?= htmlspecialchars($task['description']) ?>" 
                                               class="form-input text-sm" placeholder="Description (optional)">
                                    </div>
                                    <div>
                                        <input type="number" name="estimated_hours" value="<?= $task['estimated_hours'] ?>" 
                                               class="form-input text-sm w-32" placeholder="Est. hours">
                                    </div>
                                    <div class="flex gap-2">
                                        <button type="submit" class="btn btn-primary text-xs">Save</button>
                                        <button type="button" @click="editing = false" class="btn btn-secondary text-xs">Cancel</button>
                                    </div>
                                </form>
                                <form method="POST" class="mt-2" onsubmit="return confirm('Remove this task template?')">
                                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                    <input type="hidden" name="action" value="remove_task">
                                    <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
                                    <button type="submit" class="text-red-600 hover:text-red-700 text-xs">
                                        <i class="fas fa-trash mr-1"></i> Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="p-4 bg-gray-50 border-t border-gray-200">
                        <button type="submit" class="btn btn-secondary text-sm w-full">
                            <i class="fas fa-save mr-2"></i> Save Order
                        </button>
                    </div>
                </form>
                <?php endif; ?>
            </div>
            
            <!-- Add New Task Template -->
            <div class="card">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold">Add Task Template</h3>
                </div>
                <form method="POST" class="p-4 space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="add_task">
                    
                    <div>
                        <label class="form-label">Task Title *</label>
                        <input type="text" name="title" class="form-input" required placeholder="e.g., Collect client documents">
                    </div>
                    
                    <div>
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-input" rows="2" placeholder="Brief description of what needs to be done"></textarea>
                    </div>
                    
                    <div>
                        <label class="form-label">Estimated Hours</label>
                        <input type="number" name="estimated_hours" class="form-input w-32" placeholder="e.g., 2">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fas fa-plus mr-2"></i> Add Task Template
                    </button>
                </form>
                
                <!-- Quick Add Common Tasks -->
                <div class="p-4 border-t border-gray-200 bg-gray-50">
                    <p class="text-xs font-semibold text-gray-500 uppercase mb-3">Quick Add Common Tasks</p>
                    <div class="space-y-2">
                        <?php
                        $commonTasks = [
                            'Collect client documents',
                            'Verify documents',
                            'Fill application form',
                            'Submit to government portal',
                            'Track application status',
                            'Download certificate',
                            'Deliver to client'
                        ];
                        foreach ($commonTasks as $ct):
                        ?>
                        <form method="POST" class="inline">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="add_task">
                            <input type="hidden" name="title" value="<?= htmlspecialchars($ct) ?>">
                            <button type="submit" class="text-left w-full px-3 py-2 text-sm bg-white border border-gray-200 rounded hover:bg-gray-100">
                                <i class="fas fa-plus text-gray-400 mr-2"></i> <?= htmlspecialchars($ct) ?>
                            </button>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php endif; ?>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
