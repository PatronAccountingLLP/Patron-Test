<?php
/**
 * PATRON ADMIN DASHBOARD
 * Add New Task Page
 */

$pageTitle = 'New Task';
require_once 'includes/header.php';
requireLogin();

$errors = [];
$formData = [
    'service_request_id' => (int)($_GET['request_id'] ?? 0),
    'title' => '',
    'description' => '',
    'priority' => 'MEDIUM',
    'assigned_to' => '',
    'reviewer_id' => '',
    'due_date' => ''
];

// Get service requests for dropdown
$requests = dbFetchAll("
    SELECT sr.id, sr.request_number, c.name as client_name, s.name as service_name
    FROM service_requests sr
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL AND sr.status NOT IN ('COMPLETED', 'CANCELLED')
    ORDER BY sr.created_at DESC
");

// Get team members
$teamMembers = dbFetchAll("
    SELECT u.id, u.display_name, GROUP_CONCAT(r.code) as roles
    FROM users u 
    JOIN user_roles ur ON u.id = ur.user_id 
    JOIN roles r ON ur.role_id = r.id 
    WHERE u.user_type = 'INTERNAL' 
    AND u.status = 'ACTIVE' 
    AND u.deleted_at IS NULL 
    AND ur.revoked_at IS NULL
    GROUP BY u.id
    ORDER BY u.display_name
");

// Separate executors and reviewers
$executors = array_filter($teamMembers, fn($m) => strpos($m['roles'], 'EXECUTOR') !== false || strpos($m['roles'], 'ADMIN') !== false);
$reviewers = array_filter($teamMembers, fn($m) => strpos($m['roles'], 'REVIEWER') !== false || strpos($m['roles'], 'ADMIN') !== false);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        $formData['service_request_id'] = (int)($_POST['service_request_id'] ?? 0) ?: null;
        $formData['title'] = sanitize($_POST['title'] ?? '');
        $formData['description'] = sanitize($_POST['description'] ?? '');
        $formData['priority'] = sanitize($_POST['priority'] ?? 'MEDIUM');
        $formData['assigned_to'] = (int)($_POST['assigned_to'] ?? 0) ?: null;
        $formData['reviewer_id'] = (int)($_POST['reviewer_id'] ?? 0) ?: null;
        $formData['due_date'] = sanitize($_POST['due_date'] ?? '');
        
        // Validation
        if (empty($formData['title'])) {
            $errors[] = 'Task title is required.';
        }
        
        if (!in_array($formData['priority'], ['LOW', 'MEDIUM', 'HIGH', 'URGENT'])) {
            $errors[] = 'Invalid priority level.';
        }
        
        if (empty($errors)) {
            try {
                // Generate task number
                $year = date('Y');
                $lastTask = dbFetchOne("
                    SELECT task_number FROM tasks 
                    WHERE task_number LIKE ? 
                    ORDER BY id DESC LIMIT 1
                ", ["TASK-$year-%"]);
                
                if ($lastTask) {
                    $lastNum = (int)substr($lastTask['task_number'], -4);
                    $newNum = $lastNum + 1;
                } else {
                    $newNum = 1;
                }
                $taskNumber = sprintf("TASK-%s-%04d", $year, $newNum);
                
                // Insert task
                dbExecute("
                    INSERT INTO tasks 
                    (task_number, service_request_id, title, description, status, priority, 
                     assigned_to, reviewer_id, due_date, created_by)
                    VALUES (?, ?, ?, ?, 'PENDING', ?, ?, ?, ?, ?)
                ", [
                    $taskNumber,
                    $formData['service_request_id'],
                    $formData['title'],
                    $formData['description'] ?: null,
                    $formData['priority'],
                    $formData['assigned_to'],
                    $formData['reviewer_id'],
                    $formData['due_date'] ?: null,
                    $_SESSION['user_id']
                ]);
                
                $taskId = dbLastInsertId();
                logActivity('CREATE', 'tasks', $taskId, null, $formData);
                
                setFlash('success', "Task $taskNumber created successfully.");
                
                // Redirect based on context
                if ($formData['service_request_id']) {
                    header('Location: view_request.php?id=' . $formData['service_request_id']);
                } else {
                    header('Location: tasks.php');
                }
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to create task. Please try again.';
            }
        }
    }
}
?>

<div class="mb-6">
    <a href="<?= $formData['service_request_id'] ? 'view_request.php?id=' . $formData['service_request_id'] : 'tasks.php' ?>" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back
    </a>
</div>

<div class="card max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-semibold">Create New Task</h2>
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
        
        <!-- Service Request (Optional) -->
        <div>
            <label for="service_request_id" class="form-label">Service Request (Optional)</label>
            <select name="service_request_id" id="service_request_id" class="form-input">
                <option value="">Standalone Task</option>
                <?php foreach ($requests as $req): ?>
                <option value="<?= $req['id'] ?>" <?= $formData['service_request_id'] == $req['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($req['request_number']) ?> - <?= htmlspecialchars($req['client_name']) ?> (<?= htmlspecialchars($req['service_name']) ?>)
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <!-- Title -->
        <div>
            <label for="title" class="form-label">Task Title *</label>
            <input type="text" name="title" id="title" 
                   value="<?= htmlspecialchars($formData['title']) ?>"
                   class="form-input" required
                   placeholder="e.g., Verify client documents">
        </div>
        
        <!-- Description -->
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="3" class="form-input"
                      placeholder="Detailed task description..."><?= htmlspecialchars($formData['description']) ?></textarea>
        </div>
        
        <!-- Priority & Due Date -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="priority" class="form-label">Priority</label>
                <select name="priority" id="priority" class="form-input">
                    <option value="LOW" <?= $formData['priority'] === 'LOW' ? 'selected' : '' ?>>Low</option>
                    <option value="MEDIUM" <?= $formData['priority'] === 'MEDIUM' ? 'selected' : '' ?>>Medium</option>
                    <option value="HIGH" <?= $formData['priority'] === 'HIGH' ? 'selected' : '' ?>>High</option>
                    <option value="URGENT" <?= $formData['priority'] === 'URGENT' ? 'selected' : '' ?>>Urgent</option>
                </select>
            </div>
            <div>
                <label for="due_date" class="form-label">Due Date</label>
                <input type="date" name="due_date" id="due_date" 
                       value="<?= htmlspecialchars($formData['due_date']) ?>"
                       class="form-input" min="<?= date('Y-m-d') ?>">
            </div>
        </div>
        
        <!-- Assignment -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="assigned_to" class="form-label">Assign To</label>
                <select name="assigned_to" id="assigned_to" class="form-input">
                    <option value="">Unassigned</option>
                    <?php foreach ($executors as $member): ?>
                    <option value="<?= $member['id'] ?>" <?= $formData['assigned_to'] == $member['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($member['display_name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="reviewer_id" class="form-label">Reviewer</label>
                <select name="reviewer_id" id="reviewer_id" class="form-input">
                    <option value="">No Review Required</option>
                    <?php foreach ($reviewers as $member): ?>
                    <option value="<?= $member['id'] ?>" <?= $formData['reviewer_id'] == $member['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($member['display_name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <p class="text-xs text-gray-500 mt-1">If set, task requires approval before completion</p>
            </div>
        </div>
        
        <!-- Submit Buttons -->
        <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i> Create Task
            </button>
            <a href="<?= $formData['service_request_id'] ? 'view_request.php?id=' . $formData['service_request_id'] : 'tasks.php' ?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
