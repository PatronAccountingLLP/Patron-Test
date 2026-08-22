<?php
/**
 * PATRON ADMIN DASHBOARD
 * Edit Service Request - With Assignment
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$requestId = (int)($_GET['id'] ?? 0);
if (!$requestId) {
    setFlash('error', 'Request ID is required.');
    header('Location: requests.php');
    exit;
}

// Get request details
$request = dbFetchOne("
    SELECT sr.*, s.name as service_name, s.code as service_code,
           c.name as client_name, c.id as client_id
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    WHERE sr.id = ? AND sr.deleted_at IS NULL
", [$requestId]);

if (!$request) {
    setFlash('error', 'Request not found.');
    header('Location: requests.php');
    exit;
}

$pageTitle = 'Edit Request: ' . $request['request_number'];

// Get team members for assignment
$teamMembers = dbFetchAll("
    SELECT u.id, u.display_name 
    FROM users u 
    JOIN user_roles ur ON u.id = ur.user_id 
    JOIN roles r ON ur.role_id = r.id 
    WHERE u.user_type = 'INTERNAL' 
    AND u.status = 'ACTIVE' 
    AND u.deleted_at IS NULL 
    AND ur.revoked_at IS NULL
    AND r.code IN ('EXECUTOR', 'REVIEWER', 'ADMIN')
    GROUP BY u.id
    ORDER BY u.display_name
");

// Status options
$statusOptions = [
    'NEW' => 'New',
    'ASSIGNED' => 'Assigned',
    'IN_PROGRESS' => 'In Progress',
    'PENDING_DOCUMENTS' => 'Pending Documents',
    'UNDER_REVIEW' => 'Under Review',
    'SUBMITTED' => 'Submitted to Govt',
    'QUERY_RAISED' => 'Query Raised',
    'COMPLETED' => 'Completed',
    'CANCELLED' => 'Cancelled',
    'REJECTED' => 'Rejected'
];

$errors = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $status = sanitize($_POST['status'] ?? '');
        $assignedTo = (int)($_POST['assigned_to'] ?? 0) ?: null;
        $quotedPrice = floatval($_POST['quoted_price'] ?? 0);
        $govtFee = floatval($_POST['govt_fee'] ?? 0);
        $expectedCompletion = sanitize($_POST['expected_completion'] ?? '');
        $progressPercentage = (int)($_POST['progress_percentage'] ?? 0);
        $notes = sanitize($_POST['notes'] ?? '');
        $priority = sanitize($_POST['priority'] ?? 'NORMAL');
        
        // Validation
        if (empty($status)) $errors[] = 'Status is required.';
        if ($progressPercentage < 0 || $progressPercentage > 100) $errors[] = 'Progress must be between 0 and 100.';
        
        // If assigning, auto-change status to ASSIGNED if currently NEW
        if ($assignedTo && $request['status'] === 'NEW' && $status === 'NEW') {
            $status = 'ASSIGNED';
        }
        
        if (empty($errors)) {
            try {
                $oldData = $request;
                
                dbExecute("
                    UPDATE service_requests 
                    SET status = ?, assigned_to = ?, quoted_price = ?, govt_fee = ?, 
                        expected_completion = ?, progress_percentage = ?, notes = ?, priority = ?,
                        updated_by = ?
                    WHERE id = ?
                ", [
                    $status,
                    $assignedTo,
                    $quotedPrice ?: null,
                    $govtFee ?: null,
                    $expectedCompletion ?: null,
                    $progressPercentage,
                    $notes ?: null,
                    $priority,
                    $_SESSION['user_id'],
                    $requestId
                ]);
                
                // If assignment changed, update all tasks for this request
                if ($assignedTo && $assignedTo != $request['assigned_to']) {
                    dbExecute("
                        UPDATE tasks 
                        SET assigned_to = ? 
                        WHERE service_request_id = ? AND status IN ('PENDING', 'NEW')
                    ", [$assignedTo, $requestId]);
                }
                
                logActivity('UPDATE', 'service_requests', $requestId, $oldData, $_POST);
                
                setFlash('success', 'Request updated successfully.');
                header('Location: view_request.php?id=' . $requestId);
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to update request. Please try again.';
            }
        }
    }
}

require_once 'includes/header.php';
?>

<div class="mb-6">
    <a href="view_request.php?id=<?= $requestId ?>" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Request
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Form -->
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold">Edit Service Request</h2>
                <p class="text-sm text-gray-500 mt-1">
                    <?= $request['request_number'] ?> • <?= htmlspecialchars($request['service_name']) ?>
                </p>
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
                
                <!-- Status & Assignment -->
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-4"><i class="fas fa-tasks mr-2"></i> Status & Assignment</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label">Status *</label>
                            <select name="status" class="form-input" required>
                                <?php foreach ($statusOptions as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $request['status'] === $value ? 'selected' : '' ?>>
                                    <?= $label ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Assigned To</label>
                            <select name="assigned_to" class="form-input">
                                <option value="">Unassigned</option>
                                <?php foreach ($teamMembers as $member): ?>
                                <option value="<?= $member['id'] ?>" <?= $request['assigned_to'] == $member['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($member['display_name']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (!$request['assigned_to']): ?>
                            <p class="text-xs text-orange-600 mt-1">
                                <i class="fas fa-exclamation-triangle mr-1"></i> Not yet assigned
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="form-label">Priority</label>
                            <select name="priority" class="form-input">
                                <option value="LOW" <?= ($request['priority'] ?? '') === 'LOW' ? 'selected' : '' ?>>Low</option>
                                <option value="NORMAL" <?= ($request['priority'] ?? 'NORMAL') === 'NORMAL' ? 'selected' : '' ?>>Normal</option>
                                <option value="HIGH" <?= ($request['priority'] ?? '') === 'HIGH' ? 'selected' : '' ?>>High</option>
                                <option value="URGENT" <?= ($request['priority'] ?? '') === 'URGENT' ? 'selected' : '' ?>>Urgent</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Progress (%)</label>
                            <input type="number" name="progress_percentage" class="form-input" 
                                   min="0" max="100" value="<?= $request['progress_percentage'] ?? 0 ?>">
                        </div>
                    </div>
                </div>
                
                <!-- Pricing -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Quoted Price (₹)</label>
                        <input type="number" name="quoted_price" class="form-input" 
                               step="0.01" min="0" value="<?= $request['quoted_price'] ?>">
                    </div>
                    <div>
                        <label class="form-label">Govt Fee (₹)</label>
                        <input type="number" name="govt_fee" class="form-input" 
                               step="0.01" min="0" value="<?= $request['govt_fee'] ?>">
                    </div>
                </div>
                
                <!-- Expected Completion -->
                <div>
                    <label class="form-label">Expected Completion Date</label>
                    <input type="date" name="expected_completion" class="form-input w-full md:w-64" 
                           value="<?= $request['expected_completion'] ?>">
                </div>
                
                <!-- Notes -->
                <div>
                    <label class="form-label">Internal Notes</label>
                    <textarea name="notes" class="form-input" rows="4" 
                              placeholder="Any special instructions or notes..."><?= htmlspecialchars($request['notes'] ?? '') ?></textarea>
                </div>
                
                <!-- Submit -->
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i> Update Request
                    </button>
                    <a href="view_request.php?id=<?= $requestId ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div>
        <!-- Request Info -->
        <div class="card p-4 mb-6">
            <h4 class="font-semibold mb-3">Request Information</h4>
            <div class="space-y-3 text-sm">
                <div>
                    <span class="text-gray-500">Request #:</span>
                    <p class="font-mono"><?= $request['request_number'] ?></p>
                </div>
                <div>
                    <span class="text-gray-500">Client:</span>
                    <p class="font-medium">
                        <a href="view_client.php?id=<?= $request['client_id'] ?>" class="text-blue-600 hover:text-blue-700">
                            <?= htmlspecialchars($request['client_name']) ?>
                        </a>
                    </p>
                </div>
                <div>
                    <span class="text-gray-500">Service:</span>
                    <p class="font-medium"><?= htmlspecialchars($request['service_name']) ?></p>
                    <p class="text-xs text-gray-400"><?= $request['service_code'] ?></p>
                </div>
                <div>
                    <span class="text-gray-500">Created:</span>
                    <p><?= date('d M Y, h:i A', strtotime($request['created_at'])) ?></p>
                </div>
            </div>
        </div>
        
        <!-- Quick Status Change -->
        <div class="card p-4">
            <h4 class="font-semibold mb-3">Quick Actions</h4>
            <div class="space-y-2">
                <?php if ($request['status'] === 'NEW' && !$request['assigned_to']): ?>
                <p class="text-sm text-orange-600 mb-3">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    This request needs to be assigned to a team member.
                </p>
                <?php endif; ?>
                
                <a href="view_request.php?id=<?= $requestId ?>" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 text-sm">
                    <i class="fas fa-eye text-blue-500 mr-2 w-5"></i> View Request
                </a>
                <a href="view_client.php?id=<?= $request['client_id'] ?>" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 text-sm">
                    <i class="fas fa-building text-green-500 mr-2 w-5"></i> View Client
                </a>
            </div>
        </div>
        
        <!-- Status Guide -->
        <div class="card p-4 mt-6 bg-gray-50">
            <h4 class="font-semibold text-gray-700 mb-3">Status Guide</h4>
            <div class="space-y-2 text-xs">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span>New → Not started</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                    <span>Assigned → Team member assigned</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                    <span>In Progress → Work started</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                    <span>Pending Docs → Waiting for client</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                    <span>Submitted → Sent to govt</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                    <span>Completed → Done</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
