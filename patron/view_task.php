<?php
/**
 * PATRON ADMIN DASHBOARD
 * View Task - With Review Workflow
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$taskId = (int)($_GET['id'] ?? 0);
if (!$taskId) {
    setFlash('error', 'Task ID is required.');
    header('Location: tasks.php');
    exit;
}

// Get task details
$task = dbFetchOne("
    SELECT t.*, 
           sr.request_number, sr.client_id,
           s.name as service_name, s.code as service_code,
           c.name as client_name,
           u1.display_name as assigned_to_name,
           u2.display_name as reviewer_name,
           u3.display_name as created_by_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u1 ON t.assigned_to = u1.id
    LEFT JOIN users u2 ON t.reviewer_id = u2.id
    LEFT JOIN users u3 ON t.created_by = u3.id
    WHERE t.id = ? AND t.deleted_at IS NULL
", [$taskId]);

if (!$task) {
    setFlash('error', 'Task not found.');
    header('Location: tasks.php');
    exit;
}

$pageTitle = $task['title'];
$currentUserId = $_SESSION['user_id'];
$isAssignee = ($task['assigned_to'] == $currentUserId);
$isReviewer = ($task['reviewer_id'] == $currentUserId);
$isAdminUser = isAdmin();

// Get team members for assignment
$teamMembers = dbFetchAll("
    SELECT u.id, u.display_name 
    FROM users u 
    WHERE u.user_type = 'INTERNAL' AND u.status = 'ACTIVE' AND u.deleted_at IS NULL
    ORDER BY u.display_name
");

// Get reviewers (users with reviewer role)
$reviewers = dbFetchAll("
    SELECT DISTINCT u.id, u.display_name 
    FROM users u 
    JOIN user_roles ur ON u.id = ur.user_id 
    JOIN roles r ON ur.role_id = r.id 
    WHERE u.user_type = 'INTERNAL' 
    AND u.status = 'ACTIVE' 
    AND u.deleted_at IS NULL 
    AND ur.revoked_at IS NULL
    AND r.code IN ('REVIEWER', 'ADMIN')
    ORDER BY u.display_name
");

// Get task comments
$comments = dbFetchAll("
    SELECT tc.*, u.display_name as user_name
    FROM task_comments tc
    LEFT JOIN users u ON tc.user_id = u.id
    WHERE tc.task_id = ?
    ORDER BY tc.created_at ASC
", [$taskId]);

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        setFlash('error', 'Invalid request.');
    } else {
        $action = $_POST['action'] ?? '';
        
        // Start Task (only if assigned and PENDING)
        if ($action === 'start_task') {
            if (!$task['assigned_to']) {
                setFlash('error', 'Task must be assigned before starting.');
            } elseif ($task['status'] !== 'PENDING') {
                setFlash('error', 'Can only start pending tasks.');
            } else {
                dbExecute("UPDATE tasks SET status = 'IN_PROGRESS', started_at = NOW() WHERE id = ?", [$taskId]);
                logActivity('UPDATE', 'tasks', $taskId, ['status' => 'PENDING'], ['status' => 'IN_PROGRESS']);
                setFlash('success', 'Task started.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Submit for Review
        if ($action === 'submit_for_review') {
            $reviewerId = (int)($_POST['reviewer_id'] ?? 0);
            
            if (!$reviewerId) {
                setFlash('error', 'Please select a reviewer.');
            } elseif ($task['status'] !== 'IN_PROGRESS') {
                setFlash('error', 'Task must be in progress to submit for review.');
            } else {
                dbExecute("
                    UPDATE tasks 
                    SET status = 'SUBMITTED_FOR_REVIEW', reviewer_id = ?, submitted_at = NOW()
                    WHERE id = ?
                ", [$reviewerId, $taskId]);
                logActivity('UPDATE', 'tasks', $taskId, null, ['action' => 'submitted_for_review', 'reviewer_id' => $reviewerId]);
                setFlash('success', 'Task submitted for review.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Approve Task (Reviewer only)
        if ($action === 'approve_task') {
            $reviewNotes = sanitize($_POST['review_notes'] ?? '');
            
            if (!$isReviewer && !$isAdminUser) {
                setFlash('error', 'Only assigned reviewer can approve.');
            } elseif ($task['status'] !== 'SUBMITTED_FOR_REVIEW') {
                setFlash('error', 'Task must be submitted for review.');
            } else {
                dbExecute("
                    UPDATE tasks 
                    SET status = 'COMPLETED', review_notes = ?, reviewed_at = NOW(), completed_at = NOW()
                    WHERE id = ?
                ", [$reviewNotes, $taskId]);
                
                // Add system comment
                dbExecute("
                    INSERT INTO task_comments (task_id, user_id, comment, comment_type)
                    VALUES (?, ?, ?, 'system')
                ", [$taskId, $currentUserId, 'Task approved and marked as completed.' . ($reviewNotes ? ' Notes: ' . $reviewNotes : '')]);
                
                logActivity('UPDATE', 'tasks', $taskId, null, ['action' => 'approved']);
                setFlash('success', 'Task approved and completed.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Request Revision (Reviewer only)
        if ($action === 'request_revision') {
            $reviewNotes = sanitize($_POST['review_notes'] ?? '');
            
            if (!$isReviewer && !$isAdminUser) {
                setFlash('error', 'Only assigned reviewer can request revision.');
            } elseif (empty($reviewNotes)) {
                setFlash('error', 'Please provide revision notes.');
            } elseif ($task['status'] !== 'SUBMITTED_FOR_REVIEW') {
                setFlash('error', 'Task must be submitted for review.');
            } else {
                $revisionCount = ($task['revision_count'] ?? 0) + 1;
                
                dbExecute("
                    UPDATE tasks 
                    SET status = 'REVISION_REQUESTED', review_notes = ?, 
                        revision_count = ?, last_revision_at = NOW()
                    WHERE id = ?
                ", [$reviewNotes, $revisionCount, $taskId]);
                
                // Add system comment
                dbExecute("
                    INSERT INTO task_comments (task_id, user_id, comment, comment_type)
                    VALUES (?, ?, ?, 'revision')
                ", [$taskId, $currentUserId, 'Revision requested: ' . $reviewNotes]);
                
                logActivity('UPDATE', 'tasks', $taskId, null, ['action' => 'revision_requested', 'notes' => $reviewNotes]);
                setFlash('success', 'Revision requested.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Resubmit after Revision
        if ($action === 'resubmit') {
            if ($task['status'] !== 'REVISION_REQUESTED') {
                setFlash('error', 'Task is not in revision state.');
            } else {
                dbExecute("UPDATE tasks SET status = 'SUBMITTED_FOR_REVIEW' WHERE id = ?", [$taskId]);
                
                dbExecute("
                    INSERT INTO task_comments (task_id, user_id, comment, comment_type)
                    VALUES (?, ?, 'Task resubmitted for review after revision.', 'system')
                ", [$taskId, $currentUserId]);
                
                setFlash('success', 'Task resubmitted for review.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Mark Complete (without review - admin only or if no reviewer)
        if ($action === 'mark_complete') {
            if ($task['reviewer_id'] && !$isAdminUser) {
                setFlash('error', 'Task has a reviewer assigned. Please submit for review.');
            } else {
                dbExecute("UPDATE tasks SET status = 'COMPLETED', completed_at = NOW() WHERE id = ?", [$taskId]);
                logActivity('UPDATE', 'tasks', $taskId, null, ['action' => 'completed_directly']);
                setFlash('success', 'Task marked as complete.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Add Comment
        if ($action === 'add_comment') {
            $comment = sanitize($_POST['comment'] ?? '');
            if ($comment) {
                dbExecute("
                    INSERT INTO task_comments (task_id, user_id, comment, comment_type)
                    VALUES (?, ?, ?, 'user')
                ", [$taskId, $currentUserId, $comment]);
                setFlash('success', 'Comment added.');
            }
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
        
        // Update Assignment
        if ($action === 'update_assignment' && $isAdminUser) {
            $assignedTo = (int)($_POST['assigned_to'] ?? 0) ?: null;
            $reviewerId = (int)($_POST['reviewer_id'] ?? 0) ?: null;
            
            dbExecute("UPDATE tasks SET assigned_to = ?, reviewer_id = ? WHERE id = ?", [$assignedTo, $reviewerId, $taskId]);
            setFlash('success', 'Assignment updated.');
            header('Location: view_task.php?id=' . $taskId);
            exit;
        }
    }
}

// Refresh task data
$task = dbFetchOne("
    SELECT t.*, 
           sr.request_number, sr.client_id,
           s.name as service_name, s.code as service_code,
           c.name as client_name,
           u1.display_name as assigned_to_name,
           u2.display_name as reviewer_name,
           u3.display_name as created_by_name
    FROM tasks t
    JOIN service_requests sr ON t.service_request_id = sr.id
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u1 ON t.assigned_to = u1.id
    LEFT JOIN users u2 ON t.reviewer_id = u2.id
    LEFT JOIN users u3 ON t.created_by = u3.id
    WHERE t.id = ?
", [$taskId]);

// Status colors and labels
$statusConfig = [
    'PENDING' => ['color' => 'gray', 'label' => 'Pending', 'icon' => 'fa-clock'],
    'IN_PROGRESS' => ['color' => 'blue', 'label' => 'In Progress', 'icon' => 'fa-spinner'],
    'SUBMITTED_FOR_REVIEW' => ['color' => 'purple', 'label' => 'Under Review', 'icon' => 'fa-eye'],
    'REVISION_REQUESTED' => ['color' => 'orange', 'label' => 'Revision Needed', 'icon' => 'fa-redo'],
    'COMPLETED' => ['color' => 'green', 'label' => 'Completed', 'icon' => 'fa-check-circle'],
    'CANCELLED' => ['color' => 'red', 'label' => 'Cancelled', 'icon' => 'fa-times-circle']
];
$statusInfo = $statusConfig[$task['status']] ?? ['color' => 'gray', 'label' => $task['status'], 'icon' => 'fa-question'];

require_once 'includes/header.php';
?>

<div class="mb-6 flex items-center justify-between">
    <a href="tasks.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Tasks
    </a>
    <a href="view_request.php?id=<?= $task['service_request_id'] ?>" class="text-blue-600 hover:text-blue-700 text-sm">
        View Request →
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Task Header -->
        <div class="card p-6">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <span class="px-3 py-1 bg-<?= $statusInfo['color'] ?>-100 text-<?= $statusInfo['color'] ?>-700 rounded-full text-sm font-medium">
                        <i class="fas <?= $statusInfo['icon'] ?> mr-1"></i> <?= $statusInfo['label'] ?>
                    </span>
                    <?php if ($task['priority'] === 'URGENT'): ?>
                    <span class="ml-2 px-2 py-1 bg-red-100 text-red-700 rounded text-xs">URGENT</span>
                    <?php elseif ($task['priority'] === 'HIGH'): ?>
                    <span class="ml-2 px-2 py-1 bg-orange-100 text-orange-700 rounded text-xs">HIGH</span>
                    <?php endif; ?>
                </div>
                <span class="text-sm text-gray-500 font-mono"><?= $task['task_number'] ?></span>
            </div>
            
            <h1 class="text-2xl font-bold text-gray-900 mb-2"><?= htmlspecialchars($task['title']) ?></h1>
            
            <?php if ($task['description']): ?>
            <p class="text-gray-600 mb-4"><?= nl2br(htmlspecialchars($task['description'])) ?></p>
            <?php endif; ?>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-4 border-t border-gray-200">
                <div>
                    <p class="text-xs text-gray-500">Service Request</p>
                    <a href="view_request.php?id=<?= $task['service_request_id'] ?>" class="text-blue-600 hover:text-blue-700 font-medium">
                        <?= $task['request_number'] ?>
                    </a>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Client</p>
                    <a href="view_client.php?id=<?= $task['client_id'] ?>" class="text-blue-600 hover:text-blue-700 font-medium">
                        <?= htmlspecialchars($task['client_name']) ?>
                    </a>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Due Date</p>
                    <p class="font-medium <?= $task['due_date'] && strtotime($task['due_date']) < time() && $task['status'] !== 'COMPLETED' ? 'text-red-600' : '' ?>">
                        <?= $task['due_date'] ? date('d M Y', strtotime($task['due_date'])) : '-' ?>
                    </p>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Est. Hours</p>
                    <p class="font-medium"><?= $task['estimated_hours'] ?? '-' ?></p>
                </div>
            </div>
        </div>
        
        <!-- Workflow Actions -->
        <div class="card p-6">
            <h3 class="font-semibold mb-4">Workflow Actions</h3>
            
            <?php if ($task['status'] === 'PENDING'): ?>
                <?php if (!$task['assigned_to']): ?>
                <div class="p-4 bg-yellow-50 rounded-lg text-yellow-800">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    Task must be assigned before it can be started.
                </div>
                <?php else: ?>
                <form method="POST">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="start_task">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-play mr-2"></i> Start Task
                    </button>
                </form>
                <?php endif; ?>
            
            <?php elseif ($task['status'] === 'IN_PROGRESS'): ?>
                <form method="POST" class="space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="submit_for_review">
                    
                    <div>
                        <label class="form-label">Select Reviewer *</label>
                        <select name="reviewer_id" class="form-input" required>
                            <option value="">Choose a reviewer...</option>
                            <?php foreach ($reviewers as $r): ?>
                            <option value="<?= $r['id'] ?>" <?= $task['reviewer_id'] == $r['id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($r['display_name']) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane mr-2"></i> Submit for Review
                        </button>
                        
                        <?php if (!$task['reviewer_id'] || $isAdminUser): ?>
                        <button type="submit" name="action" value="mark_complete" class="btn btn-success">
                            <i class="fas fa-check mr-2"></i> Complete (No Review)
                        </button>
                        <?php endif; ?>
                    </div>
                </form>
            
            <?php elseif ($task['status'] === 'SUBMITTED_FOR_REVIEW'): ?>
                <?php if ($isReviewer || $isAdminUser): ?>
                <div class="space-y-4">
                    <div class="p-4 bg-purple-50 rounded-lg">
                        <p class="text-purple-800 font-medium">
                            <i class="fas fa-eye mr-2"></i> This task is awaiting your review.
                        </p>
                    </div>
                    
                    <form method="POST" class="space-y-4">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        
                        <div>
                            <label class="form-label">Review Notes</label>
                            <textarea name="review_notes" class="form-input" rows="3" 
                                      placeholder="Add notes about your review..."></textarea>
                        </div>
                        
                        <div class="flex gap-2">
                            <button type="submit" name="action" value="approve_task" class="btn btn-success">
                                <i class="fas fa-check mr-2"></i> Approve & Complete
                            </button>
                            <button type="submit" name="action" value="request_revision" class="btn btn-warning">
                                <i class="fas fa-redo mr-2"></i> Request Revision
                            </button>
                        </div>
                    </form>
                </div>
                <?php else: ?>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <p class="text-purple-800">
                        <i class="fas fa-hourglass-half mr-2"></i> 
                        Waiting for review by <strong><?= htmlspecialchars($task['reviewer_name']) ?></strong>
                    </p>
                </div>
                <?php endif; ?>
            
            <?php elseif ($task['status'] === 'REVISION_REQUESTED'): ?>
                <div class="space-y-4">
                    <div class="p-4 bg-orange-50 rounded-lg border border-orange-200">
                        <p class="text-orange-800 font-medium mb-2">
                            <i class="fas fa-exclamation-circle mr-2"></i> Revision Requested
                        </p>
                        <?php if ($task['review_notes']): ?>
                        <p class="text-orange-700 text-sm"><?= nl2br(htmlspecialchars($task['review_notes'])) ?></p>
                        <?php endif; ?>
                        <p class="text-xs text-orange-600 mt-2">Revision #<?= $task['revision_count'] ?></p>
                    </div>
                    
                    <?php if ($isAssignee || $isAdminUser): ?>
                    <form method="POST">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="resubmit">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane mr-2"></i> Resubmit for Review
                        </button>
                    </form>
                    <?php endif; ?>
                </div>
            
            <?php elseif ($task['status'] === 'COMPLETED'): ?>
                <div class="p-4 bg-green-50 rounded-lg">
                    <p class="text-green-800">
                        <i class="fas fa-check-circle mr-2"></i> 
                        Task completed on <?= date('d M Y', strtotime($task['completed_at'])) ?>
                    </p>
                    <?php if ($task['review_notes']): ?>
                    <p class="text-green-700 text-sm mt-2">
                        <strong>Review Notes:</strong> <?= htmlspecialchars($task['review_notes']) ?>
                    </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Comments -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h3 class="font-semibold">Comments & Activity</h3>
            </div>
            
            <div class="p-4 space-y-4 max-h-96 overflow-y-auto">
                <?php if (empty($comments)): ?>
                <p class="text-gray-500 text-center py-4">No comments yet.</p>
                <?php else: ?>
                <?php foreach ($comments as $comment): ?>
                <div class="flex gap-3 <?= $comment['comment_type'] === 'system' ? 'bg-gray-50 p-3 rounded-lg' : '' ?>">
                    <div class="w-8 h-8 bg-<?= $comment['comment_type'] === 'revision' ? 'orange' : ($comment['comment_type'] === 'system' ? 'gray' : 'blue') ?>-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <?php if ($comment['comment_type'] === 'system'): ?>
                        <i class="fas fa-info text-gray-500 text-xs"></i>
                        <?php elseif ($comment['comment_type'] === 'revision'): ?>
                        <i class="fas fa-redo text-orange-500 text-xs"></i>
                        <?php else: ?>
                        <span class="text-blue-600 text-xs font-medium"><?= strtoupper(substr($comment['user_name'] ?? 'U', 0, 1)) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-sm"><?= htmlspecialchars($comment['user_name'] ?? 'System') ?></span>
                            <span class="text-xs text-gray-400"><?= date('d M, h:i A', strtotime($comment['created_at'])) ?></span>
                        </div>
                        <p class="text-sm text-gray-700 mt-1"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            
            <!-- Add Comment Form -->
            <div class="p-4 border-t border-gray-200">
                <form method="POST" class="flex gap-2">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="add_comment">
                    <input type="text" name="comment" class="form-input flex-1" placeholder="Add a comment..." required>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Assignment -->
        <div class="card p-4">
            <h4 class="font-semibold mb-3">Assignment</h4>
            <div class="space-y-3">
                <div>
                    <p class="text-xs text-gray-500">Assigned To</p>
                    <p class="font-medium"><?= htmlspecialchars($task['assigned_to_name'] ?? 'Unassigned') ?></p>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Reviewer</p>
                    <p class="font-medium"><?= htmlspecialchars($task['reviewer_name'] ?? 'Not assigned') ?></p>
                </div>
            </div>
            
            <?php if ($isAdminUser && $task['status'] !== 'COMPLETED'): ?>
            <form method="POST" class="mt-4 pt-4 border-t border-gray-200 space-y-3">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="update_assignment">
                
                <div>
                    <label class="form-label text-xs">Assignee</label>
                    <select name="assigned_to" class="form-input text-sm">
                        <option value="">Unassigned</option>
                        <?php foreach ($teamMembers as $m): ?>
                        <option value="<?= $m['id'] ?>" <?= $task['assigned_to'] == $m['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($m['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label text-xs">Reviewer</label>
                    <select name="reviewer_id" class="form-input text-sm">
                        <option value="">No reviewer</option>
                        <?php foreach ($reviewers as $r): ?>
                        <option value="<?= $r['id'] ?>" <?= $task['reviewer_id'] == $r['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($r['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-secondary text-xs w-full">Update Assignment</button>
            </form>
            <?php endif; ?>
        </div>
        
        <!-- Workflow Guide -->
        <div class="card p-4 bg-gray-50">
            <h4 class="font-semibold text-gray-700 mb-3">Task Workflow</h4>
            <div class="space-y-2 text-xs">
                <div class="flex items-center gap-2 <?= $task['status'] === 'PENDING' ? 'font-bold' : 'text-gray-500' ?>">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span>1. Pending (assign first)</span>
                </div>
                <div class="flex items-center gap-2 <?= $task['status'] === 'IN_PROGRESS' ? 'font-bold' : 'text-gray-500' ?>">
                    <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                    <span>2. In Progress</span>
                </div>
                <div class="flex items-center gap-2 <?= $task['status'] === 'SUBMITTED_FOR_REVIEW' ? 'font-bold' : 'text-gray-500' ?>">
                    <span class="w-2 h-2 bg-purple-400 rounded-full"></span>
                    <span>3. Under Review</span>
                </div>
                <div class="flex items-center gap-2 <?= $task['status'] === 'REVISION_REQUESTED' ? 'font-bold' : 'text-gray-500' ?>">
                    <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                    <span>↩ Revision (if needed)</span>
                </div>
                <div class="flex items-center gap-2 <?= $task['status'] === 'COMPLETED' ? 'font-bold' : 'text-gray-500' ?>">
                    <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                    <span>4. Completed</span>
                </div>
            </div>
        </div>
        
        <!-- Task Info -->
        <div class="card p-4">
            <h4 class="font-semibold mb-3">Details</h4>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-500">Created</span>
                    <span><?= date('d M Y', strtotime($task['created_at'])) ?></span>
                </div>
                <?php if ($task['started_at']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Started</span>
                    <span><?= date('d M Y', strtotime($task['started_at'])) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($task['completed_at']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Completed</span>
                    <span><?= date('d M Y', strtotime($task['completed_at'])) ?></span>
                </div>
                <?php endif; ?>
                <?php if ($task['revision_count']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">Revisions</span>
                    <span class="text-orange-600"><?= $task['revision_count'] ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
