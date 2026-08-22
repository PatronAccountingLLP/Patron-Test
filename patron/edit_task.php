<?php
/**
 * PATRON ADMIN DASHBOARD
 * Edit Task Page
 */

$pageTitle = 'Edit Task';
require_once 'includes/header.php';
requireLogin();

// Get task ID
$taskId = (int)($_GET['id'] ?? 0);
if (!$taskId) {
    setFlash('error', 'Invalid task ID.');
    header('Location: tasks.php');
    exit;
}

// Get task
$task = dbFetchOne("SELECT * FROM tasks WHERE id = ? AND deleted_at IS NULL", [$taskId]);
if (!$task) {
    setFlash('error', 'Task not found.');
    header('Location: tasks.php');
    exit;
}

// Check permissions
if (!isAdmin() && !hasRole('REVIEWER') && $task['assigned_to'] != $_SESSION['user_id']) {
    setFlash('error', 'You do not have permission to edit this task.');
    header('Location: tasks.php');
    exit;
}

$errors = [];
$formData = $task;

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

$executors = array_filter($teamMembers, fn($m) => strpos($m['roles'], 'EXECUTOR') !== false || strpos($m['roles'], 'ADMIN') !== false);
$reviewers = array_filter($teamMembers, fn($m) => strpos($m['roles'], 'REVIEWER') !== false || strpos($m['roles'], 'ADMIN') !== false);

$statuses = ['PENDING', 'IN_PROGRESS', 'REVIEW', 'REVISION', 'COMPLETED', 'CANCELLED'];
$priorities = ['LOW', 'MEDIUM', 'HIGH', 'URGENT'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $oldData = $task;
        
        $formData['title'] = sanitize($_POST['title'] ?? '');
        $formData['description'] = sanitize($_POST['description'] ?? '');
        $formData['status'] = sanitize($_POST['status'] ?? $task['status']);
        $formData['priority'] = sanitize($_POST['priority'] ?? 'MEDIUM');
        $formData['assigned_to'] = (int)($_POST['assigned_to'] ?? 0) ?: null;
        $formData['reviewer_id'] = (int)($_POST['reviewer_id'] ?? 0) ?: null;
        $formData['due_date'] = sanitize($_POST['due_date'] ?? '');
        $formData['review_notes'] = sanitize($_POST['review_notes'] ?? '');
        
        if (empty($formData['title'])) {
            $errors[] = 'Task title is required.';
        }
        
        if (!in_array($formData['status'], $statuses)) {
            $errors[] = 'Invalid status.';
        }
        
        if (!in_array($formData['priority'], $priorities)) {
            $errors[] = 'Invalid priority.';
        }
        
        if (empty($errors)) {
            try {
                // Handle status-related timestamps
                $updates = [
                    'title' => $formData['title'],
                    'description' => $formData['description'] ?: null,
                    'status' => $formData['status'],
                    'priority' => $formData['priority'],
                    'assigned_to' => $formData['assigned_to'],
                    'reviewer_id' => $formData['reviewer_id'],
                    'due_date' => $formData['due_date'] ?: null,
                    'review_notes' => $formData['review_notes'] ?: null,
                    'updated_by' => $_SESSION['user_id']
                ];
                
                // Set timestamps based on status changes
                if ($formData['status'] === 'IN_PROGRESS' && $task['status'] === 'PENDING') {
                    $updates['started_at'] = date('Y-m-d H:i:s');
                }
                if ($formData['status'] === 'REVIEW' && in_array($task['status'], ['IN_PROGRESS', 'REVISION'])) {
                    $updates['submitted_at'] = date('Y-m-d H:i:s');
                }
                if ($formData['status'] === 'COMPLETED' && $task['status'] !== 'COMPLETED') {
                    $updates['completed_at'] = date('Y-m-d H:i:s');
                    $updates['reviewed_at'] = date('Y-m-d H:i:s');
                }
                if ($formData['status'] === 'REVISION' && $task['status'] === 'REVIEW') {
                    $updates['reviewed_at'] = date('Y-m-d H:i:s');
                    $updates['revision_count'] = ($task['revision_count'] ?? 0) + 1;
                }
                
                // Build update query
                $setClauses = [];
                $params = [];
                foreach ($updates as $field => $value) {
                    $setClauses[] = "$field = ?";
                    $params[] = $value;
                }
                $params[] = $taskId;
                
                dbExecute("UPDATE tasks SET " . implode(', ', $setClauses) . " WHERE id = ?", $params);
                
                logActivity('UPDATE', 'tasks', $taskId, $oldData, $formData);
                
                setFlash('success', 'Task updated successfully.');
                header('Location: view_task.php?id=' . $taskId);
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to update task. Please try again.';
            }
        }
    }
}
?>

<div class="mb-6">
    <a href="view_task.php?id=<?= $taskId ?>" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Task
    </a>
</div>

<div class="card max-w-2xl">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-lg font-semibold">Edit Task</h2>
        <p class="text-sm text-gray-500 mt-1"><?= htmlspecialchars($task['task_number']) ?></p>
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
        
        <!-- Title -->
        <div>
            <label class="form-label">Task Title *</label>
            <input type="text" name="title" value="<?= htmlspecialchars($formData['title']) ?>" class="form-input" required>
        </div>
        
        <!-- Description -->
        <div>
            <label class="form-label">Description</label>
            <textarea name="description" rows="3" class="form-input"><?= htmlspecialchars($formData['description']) ?></textarea>
        </div>
        
        <!-- Status & Priority -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="form-label">Status</label>
                <select name="status" class="form-input">
                    <?php foreach ($statuses as $s): ?>
                    <option value="<?= $s ?>" <?= $formData['status'] === $s ? 'selected' : '' ?>>
                        <?= str_replace('_', ' ', $s) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="form-label">Priority</label>
                <select name="priority" class="form-input">
                    <?php foreach ($priorities as $p): ?>
                    <option value="<?= $p ?>" <?= $formData['priority'] === $p ? 'selected' : '' ?>><?= $p ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <!-- Assignment -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="form-label">Assign To</label>
                <select name="assigned_to" class="form-input">
                    <option value="">Unassigned</option>
                    <?php foreach ($executors as $member): ?>
                    <option value="<?= $member['id'] ?>" <?= $formData['assigned_to'] == $member['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($member['display_name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="form-label">Reviewer</label>
                <select name="reviewer_id" class="form-input">
                    <option value="">No Review Required</option>
                    <?php foreach ($reviewers as $member): ?>
                    <option value="<?= $member['id'] ?>" <?= $formData['reviewer_id'] == $member['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($member['display_name']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <!-- Due Date -->
        <div class="w-1/2">
            <label class="form-label">Due Date</label>
            <input type="date" name="due_date" value="<?= $formData['due_date'] ?>" class="form-input">
        </div>
        
        <!-- Review Notes (for reviewers) -->
        <?php if (isAdmin() || hasRole('REVIEWER')): ?>
        <div>
            <label class="form-label">Review Notes</label>
            <textarea name="review_notes" rows="2" class="form-input" 
                      placeholder="Notes for revision or feedback..."><?= htmlspecialchars($formData['review_notes']) ?></textarea>
            <p class="text-xs text-gray-500 mt-1">These notes will be visible to the assignee when sent for revision</p>
        </div>
        <?php endif; ?>
        
        <div class="flex gap-4 pt-6 border-t border-gray-200">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save mr-2"></i> Save Changes
            </button>
            <a href="view_task.php?id=<?= $taskId ?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>
