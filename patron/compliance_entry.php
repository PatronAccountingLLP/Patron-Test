<?php
/**
 * PATRON - Compliance Entry Detail
 * View and edit individual compliance tracker entries
 * Includes: status update, remarks, assignment, activity log
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$entryId = (int)($_GET['id'] ?? 0);
if (!$entryId) {
    setFlash('error', 'Invalid entry.');
    header('Location: compliance_tracker.php');
    exit;
}

// Get entry with all details
$entry = dbFetchOne("
    SELECT ctr.*, 
           ct.name as compliance_name, ct.code as compliance_code, ct.category, ct.frequency,
           ct.description as compliance_desc, ct.icon, ct.color,
           c.id as client_id, c.name as client_name, c.entity_type,
           e1.display_name as executor_1_name,
           e2.display_name as executor_2_name,
           r.display_name as reviewer_name,
           m.display_name as manager_name
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    JOIN clients c ON ctr.client_id = c.id
    LEFT JOIN users e1 ON ctr.executor_1_id = e1.id
    LEFT JOIN users e2 ON ctr.executor_2_id = e2.id
    LEFT JOIN users r ON ctr.reviewer_id = r.id
    LEFT JOIN users m ON ctr.manager_id = m.id
    WHERE ctr.id = ?
", [$entryId]);

if (!$entry) {
    setFlash('error', 'Compliance entry not found.');
    header('Location: compliance_tracker.php');
    exit;
}

$pageTitle = $entry['compliance_name'] . ' - ' . $entry['client_name'];
$currentUser = getCurrentUser();
$currentUserId = (int)$currentUser['id'];
$isAdmin = canSeeAllData();

// Check access permission
$hasAccess = $isAdmin || 
             $entry['executor_1_id'] == $currentUserId || 
             $entry['executor_2_id'] == $currentUserId ||
             $entry['reviewer_id'] == $currentUserId ||
             $entry['manager_id'] == $currentUserId;

if (!$hasAccess) {
    setFlash('error', 'You do not have permission to view this entry.');
    header('Location: compliance_tracker.php');
    exit;
}

// Get activity log
$activityLog = dbFetchAll("
    SELECT cal.*, u.display_name as performed_by_name
    FROM compliance_activity_log cal
    LEFT JOIN users u ON cal.performed_by = u.id
    WHERE cal.compliance_tracker_id = ?
    ORDER BY cal.created_at DESC
    LIMIT 20
", [$entryId]) ?: [];

// Get team members for assignment
$teamMembers = dbFetchAll("
    SELECT id, display_name, profile_photo FROM users 
    WHERE deleted_at IS NULL AND user_type = 'INTERNAL' AND status = 'ACTIVE'
    ORDER BY display_name
") ?: [];

// Status options
$statusOptions = [
    'NOT_STARTED' => ['label' => 'Not Started', 'color' => 'gray'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'color' => 'blue'],
    'DATA_PENDING' => ['label' => 'Data Pending', 'color' => 'amber'],
    'READY_TO_FILE' => ['label' => 'Ready to File', 'color' => 'purple'],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'color' => 'indigo'],
    'PENDING_APPROVAL' => ['label' => 'Pending Approval', 'color' => 'orange'],
    'FILED' => ['label' => 'Filed', 'color' => 'green'],
    'FILED_LATE' => ['label' => 'Filed Late', 'color' => 'teal'],
    'NOT_APPLICABLE' => ['label' => 'Not Applicable', 'color' => 'slate'],
];

// Handle POST actions
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    // Update Status
    if ($action === 'update_status') {
        $newStatus = sanitize($_POST['status'] ?? '');
        $remarks = sanitize($_POST['remarks'] ?? '');
        $filedDate = sanitize($_POST['filed_date'] ?? '');
        $ackNumber = sanitize($_POST['ack_number'] ?? '');
        
        if ($newStatus && array_key_exists($newStatus, $statusOptions)) {
            $oldStatus = $entry['status'];
            
            $updateFields = ['status = ?', 'remarks = ?'];
            $updateParams = [$newStatus, $remarks];
            
            if (in_array($newStatus, ['FILED', 'FILED_LATE']) && $filedDate) {
                $updateFields[] = 'filed_date = ?';
                $updateParams[] = $filedDate;
            }
            if ($ackNumber) {
                $updateFields[] = 'acknowledgement_number = ?';
                $updateParams[] = $ackNumber;
            }
            if ($newStatus === 'UNDER_REVIEW') {
                $updateFields[] = 'submitted_for_review_at = NOW()';
            }
            
            $updateParams[] = $entryId;
            
            dbExecute("UPDATE compliance_tracker SET " . implode(', ', $updateFields) . " WHERE id = ?", $updateParams);
            
            // Log activity
            dbExecute("
                INSERT INTO compliance_activity_log (compliance_tracker_id, action, old_value, new_value, notes, performed_by)
                VALUES (?, 'STATUS_CHANGE', ?, ?, ?, ?)
            ", [$entryId, $oldStatus, $newStatus, $remarks, $currentUserId]);
            
            setFlash('success', 'Status updated successfully.');
            header("Location: compliance_entry.php?id=$entryId");
            exit;
        }
    }
    
    // Update Assignment
    if ($action === 'update_assignment') {
        $executor1 = (int)($_POST['executor_1_id'] ?? 0) ?: null;
        $executor2 = (int)($_POST['executor_2_id'] ?? 0) ?: null;
        $reviewer = (int)($_POST['reviewer_id'] ?? 0) ?: null;
        $manager = (int)($_POST['manager_id'] ?? 0) ?: null;
        
        dbExecute("
            UPDATE compliance_tracker 
            SET executor_1_id = ?, executor_2_id = ?, reviewer_id = ?, manager_id = ?
            WHERE id = ?
        ", [$executor1, $executor2, $reviewer, $manager, $entryId]);
        
        dbExecute("
            INSERT INTO compliance_activity_log (compliance_tracker_id, action, notes, performed_by)
            VALUES (?, 'ASSIGNMENT_CHANGE', 'Team assignment updated', ?)
        ", [$entryId, $currentUserId]);
        
        setFlash('success', 'Assignment updated successfully.');
        header("Location: compliance_entry.php?id=$entryId");
        exit;
    }
    
    // Add Remark
    if ($action === 'add_remark') {
        $remark = sanitize($_POST['remark'] ?? '');
        if ($remark) {
            $currentRemarks = $entry['remarks'] ?? '';
            $timestamp = date('d-M-Y H:i');
            $userName = $currentUser['display_name'];
            $newRemark = "[$timestamp - $userName] $remark";
            
            $updatedRemarks = $currentRemarks ? $currentRemarks . "\n" . $newRemark : $newRemark;
            
            dbExecute("UPDATE compliance_tracker SET remarks = ? WHERE id = ?", [$updatedRemarks, $entryId]);
            
            dbExecute("
                INSERT INTO compliance_activity_log (compliance_tracker_id, action, notes, performed_by)
                VALUES (?, 'REMARK_ADDED', ?, ?)
            ", [$entryId, $remark, $currentUserId]);
            
            setFlash('success', 'Remark added.');
            header("Location: compliance_entry.php?id=$entryId");
            exit;
        }
    }
}

// Refresh entry data
$entry = dbFetchOne("
    SELECT ctr.*, 
           ct.name as compliance_name, ct.code as compliance_code, ct.category, ct.frequency,
           c.id as client_id, c.name as client_name, c.entity_type,
           e1.display_name as executor_1_name,
           e2.display_name as executor_2_name,
           r.display_name as reviewer_name,
           m.display_name as manager_name
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    JOIN clients c ON ctr.client_id = c.id
    LEFT JOIN users e1 ON ctr.executor_1_id = e1.id
    LEFT JOIN users e2 ON ctr.executor_2_id = e2.id
    LEFT JOIN users r ON ctr.reviewer_id = r.id
    LEFT JOIN users m ON ctr.manager_id = m.id
    WHERE ctr.id = ?
", [$entryId]);

// Calculate days
$dueDate = $entry['due_date'];
$today = date('Y-m-d');
$daysLeft = (strtotime($dueDate) - strtotime($today)) / 86400;
$isOverdue = $daysLeft < 0 && !in_array($entry['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);

$currentStatus = $statusOptions[$entry['status']] ?? ['label' => $entry['status'], 'color' => 'gray'];

require_once 'includes/header.php';
?>

<style>
.status-btn { padding: 0.5rem 1rem; border-radius: 0.5rem; font-size: 0.875rem; transition: all 0.2s; }
.status-btn:hover { transform: translateY(-1px); box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
.timeline-item { position: relative; padding-left: 2rem; }
.timeline-item::before { content: ''; position: absolute; left: 0.5rem; top: 0.5rem; width: 0.5rem; height: 0.5rem; border-radius: 50%; background: #cbd5e1; }
.timeline-item::after { content: ''; position: absolute; left: 0.7rem; top: 1.5rem; width: 1px; height: calc(100% - 1rem); background: #e2e8f0; }
.timeline-item:last-child::after { display: none; }
.modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 50; align-items: center; justify-content: center; padding: 1rem; }
.modal.show { display: flex; }
.modal-content { background: white; border-radius: 1rem; max-height: 90vh; overflow-y: auto; }
</style>

<!-- Breadcrumb -->
<div class="mb-4">
    <a href="compliance_tracker.php" class="text-blue-600 hover:underline text-sm">
        <i class="fas fa-arrow-left mr-1"></i>Back to Compliance Tracker
    </a>
</div>

<!-- Header -->
<div class="card p-6 mb-6 <?= $isOverdue ? 'border-l-4 border-red-500 bg-red-50' : '' ?>">
    <div class="flex items-start justify-between">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="px-3 py-1 bg-<?= $currentStatus['color'] ?>-100 text-<?= $currentStatus['color'] ?>-700 rounded-full text-sm font-medium">
                    <?= $currentStatus['label'] ?>
                </span>
                <?php if ($isOverdue): ?>
                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-bold animate-pulse">
                    <i class="fas fa-exclamation-triangle mr-1"></i><?= abs(floor($daysLeft)) ?> days overdue
                </span>
                <?php elseif ($daysLeft <= 7 && $daysLeft >= 0): ?>
                <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium">
                    <i class="fas fa-clock mr-1"></i><?= floor($daysLeft) ?> days left
                </span>
                <?php endif; ?>
            </div>
            <h1 class="text-2xl font-bold text-gray-800"><?= htmlspecialchars($entry['compliance_name']) ?></h1>
            <p class="text-gray-500">
                <a href="view_client.php?id=<?= $entry['client_id'] ?>" class="text-blue-600 hover:underline"><?= htmlspecialchars($entry['client_name']) ?></a>
                • <?= htmlspecialchars($entry['period'] ?? $entry['financial_year']) ?>
            </p>
        </div>
        <div class="text-right">
            <p class="text-sm text-gray-500">Due Date</p>
            <p class="text-xl font-bold <?= $isOverdue ? 'text-red-600' : 'text-gray-800' ?>">
                <?= date('d M Y', strtotime($entry['due_date'])) ?>
            </p>
            <?php if ($entry['filed_date']): ?>
            <p class="text-sm text-green-600 mt-1">
                <i class="fas fa-check-circle mr-1"></i>Filed: <?= date('d M Y', strtotime($entry['filed_date'])) ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Quick Status Update -->
        <?php if (!in_array($entry['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE'])): ?>
        <div class="card p-4">
            <h3 class="font-semibold text-gray-700 mb-3"><i class="fas fa-bolt mr-2 text-amber-500"></i>Quick Actions</h3>
            <div class="flex flex-wrap gap-2">
                <?php if ($entry['status'] === 'NOT_STARTED'): ?>
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="status" value="IN_PROGRESS">
                    <input type="hidden" name="remarks" value="">
                    <button type="submit" class="status-btn bg-blue-100 text-blue-700 hover:bg-blue-200">
                        <i class="fas fa-play mr-1"></i>Start Work
                    </button>
                </form>
                <?php endif; ?>
                
                <?php if (in_array($entry['status'], ['IN_PROGRESS', 'DATA_PENDING'])): ?>
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="status" value="READY_TO_FILE">
                    <input type="hidden" name="remarks" value="">
                    <button type="submit" class="status-btn bg-purple-100 text-purple-700 hover:bg-purple-200">
                        <i class="fas fa-check mr-1"></i>Ready to File
                    </button>
                </form>
                <?php endif; ?>
                
                <?php if (in_array($entry['status'], ['IN_PROGRESS', 'READY_TO_FILE'])): ?>
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="status" value="UNDER_REVIEW">
                    <input type="hidden" name="remarks" value="">
                    <button type="submit" class="status-btn bg-indigo-100 text-indigo-700 hover:bg-indigo-200">
                        <i class="fas fa-search mr-1"></i>Submit for Review
                    </button>
                </form>
                <?php endif; ?>
                
                <button type="button" onclick="document.getElementById('fileModal').classList.add('show')" 
                        class="status-btn bg-green-100 text-green-700 hover:bg-green-200">
                    <i class="fas fa-flag-checkered mr-1"></i>Mark as Filed
                </button>
                
                <form method="POST" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="status" value="NOT_APPLICABLE">
                    <input type="hidden" name="remarks" value="">
                    <button type="submit" class="status-btn bg-gray-100 text-gray-700 hover:bg-gray-200" 
                            onclick="return confirm('Mark as Not Applicable?')">
                        <i class="fas fa-ban mr-1"></i>N/A
                    </button>
                </form>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Add Quick Remark -->
        <div class="card">
            <div class="p-4 border-b bg-amber-50">
                <h3 class="font-semibold text-amber-800"><i class="fas fa-comment mr-2"></i>Remarks</h3>
            </div>
            <form method="POST" class="p-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="add_remark">
                <div class="flex gap-2 mb-4">
                    <input type="text" name="remark" class="form-input flex-1" placeholder="Type your remark here..." required>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus mr-1"></i>Add
                    </button>
                </div>
            </form>
            <?php if ($entry['remarks']): ?>
            <div class="px-4 pb-4">
                <div class="bg-gray-50 p-3 rounded-lg max-h-48 overflow-y-auto">
                    <pre class="text-sm text-gray-600 whitespace-pre-wrap font-sans"><?= htmlspecialchars($entry['remarks']) ?></pre>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Detailed Status Update -->
        <div class="card">
            <div class="p-4 border-b bg-gray-50">
                <h3 class="font-semibold"><i class="fas fa-edit mr-2 text-blue-500"></i>Update Status</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="update_status">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Status</label>
                        <select name="status" class="form-input">
                            <?php foreach ($statusOptions as $code => $opt): ?>
                            <option value="<?= $code ?>" <?= $entry['status'] === $code ? 'selected' : '' ?>>
                                <?= $opt['label'] ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Filed Date</label>
                        <input type="date" name="filed_date" class="form-input" value="<?= $entry['filed_date'] ?? '' ?>">
                    </div>
                </div>
                
                <div>
                    <label class="form-label">Acknowledgement Number</label>
                    <input type="text" name="ack_number" class="form-input" 
                           value="<?= htmlspecialchars($entry['acknowledgement_number'] ?? '') ?>"
                           placeholder="e.g., ARN-123456789">
                </div>
                
                <div>
                    <label class="form-label">Remarks</label>
                    <textarea name="remarks" class="form-input" rows="2" placeholder="Add remarks..."><?= htmlspecialchars($entry['remarks'] ?? '') ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i>Update
                </button>
            </form>
        </div>
        
        <!-- Activity Log -->
        <div class="card">
            <div class="p-4 border-b bg-purple-50">
                <h3 class="font-semibold text-purple-800"><i class="fas fa-history mr-2"></i>Activity Log</h3>
            </div>
            <?php if (empty($activityLog)): ?>
            <div class="p-6 text-center text-gray-400">No activity recorded yet.</div>
            <?php else: ?>
            <div class="p-4 space-y-4 max-h-80 overflow-y-auto">
                <?php foreach ($activityLog as $log): ?>
                <div class="timeline-item">
                    <p class="font-medium text-gray-800 text-sm">
                        <?= htmlspecialchars($log['action']) ?>
                        <?php if ($log['old_value'] && $log['new_value']): ?>
                        <span class="text-gray-500">: <?= $log['old_value'] ?> → <?= $log['new_value'] ?></span>
                        <?php endif; ?>
                    </p>
                    <?php if ($log['notes']): ?>
                    <p class="text-sm text-gray-500"><?= htmlspecialchars($log['notes']) ?></p>
                    <?php endif; ?>
                    <p class="text-xs text-gray-400 mt-1">
                        <?= $log['performed_by_name'] ?? 'System' ?> • <?= date('d M Y H:i', strtotime($log['created_at'])) ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Assignment -->
        <div class="card">
            <div class="p-4 border-b bg-blue-50">
                <h3 class="font-semibold text-blue-800"><i class="fas fa-users mr-2"></i>Team Assignment</h3>
            </div>
            <form method="POST" class="p-4 space-y-3">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="update_assignment">
                
                <div>
                    <label class="form-label text-xs">Executor 1</label>
                    <select name="executor_1_id" class="form-input text-sm">
                        <option value="">-- Select --</option>
                        <?php foreach ($teamMembers as $tm): ?>
                        <option value="<?= $tm['id'] ?>" <?= $entry['executor_1_id'] == $tm['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($tm['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label text-xs">Executor 2</label>
                    <select name="executor_2_id" class="form-input text-sm">
                        <option value="">-- Select --</option>
                        <?php foreach ($teamMembers as $tm): ?>
                        <option value="<?= $tm['id'] ?>" <?= $entry['executor_2_id'] == $tm['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($tm['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label text-xs">Reviewer</label>
                    <select name="reviewer_id" class="form-input text-sm">
                        <option value="">-- Select --</option>
                        <?php foreach ($teamMembers as $tm): ?>
                        <option value="<?= $tm['id'] ?>" <?= $entry['reviewer_id'] == $tm['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($tm['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label text-xs">Manager</label>
                    <select name="manager_id" class="form-input text-sm">
                        <option value="">-- Select --</option>
                        <?php foreach ($teamMembers as $tm): ?>
                        <option value="<?= $tm['id'] ?>" <?= $entry['manager_id'] == $tm['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($tm['display_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary w-full text-sm">
                    <i class="fas fa-save mr-1"></i>Update Assignment
                </button>
            </form>
        </div>
        
        <!-- Details -->
        <div class="card">
            <div class="p-4 border-b bg-gray-50">
                <h3 class="font-semibold"><i class="fas fa-info-circle mr-2 text-gray-500"></i>Details</h3>
            </div>
            <div class="p-4 space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-500">Category</span>
                    <span class="font-medium"><?= htmlspecialchars($entry['category'] ?? '-') ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Frequency</span>
                    <span class="font-medium"><?= htmlspecialchars($entry['frequency'] ?? '-') ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Financial Year</span>
                    <span class="font-medium"><?= htmlspecialchars($entry['financial_year'] ?? '-') ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Period</span>
                    <span class="font-medium"><?= htmlspecialchars($entry['period'] ?? '-') ?></span>
                </div>
                <?php if ($entry['acknowledgement_number']): ?>
                <div class="flex justify-between">
                    <span class="text-gray-500">ACK No.</span>
                    <span class="font-mono text-xs"><?= htmlspecialchars($entry['acknowledgement_number']) ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Quick Links -->
        <div class="card p-4">
            <h4 class="font-semibold text-gray-700 mb-3">Quick Links</h4>
            <div class="space-y-2">
                <a href="view_client.php?id=<?= $entry['client_id'] ?>&tab=compliance" class="block p-2 bg-gray-50 rounded hover:bg-gray-100">
                    <i class="fas fa-building mr-2 text-blue-500"></i>View Client
                </a>
                <a href="compliance_tracker.php?client_id=<?= $entry['client_id'] ?>" class="block p-2 bg-gray-50 rounded hover:bg-gray-100">
                    <i class="fas fa-list mr-2 text-purple-500"></i>Client's Compliances
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Mark as Filed Modal -->
<div id="fileModal" class="modal">
    <div class="modal-content" style="max-width:400px;">
        <div class="p-4 border-b bg-green-50">
            <h3 class="font-bold text-green-800"><i class="fas fa-flag-checkered mr-2"></i>Mark as Filed</h3>
        </div>
        <form method="POST" class="p-4 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="update_status">
            <input type="hidden" name="status" value="FILED">
            
            <div>
                <label class="form-label">Filed Date <span class="text-red-500">*</span></label>
                <input type="date" name="filed_date" class="form-input" value="<?= date('Y-m-d') ?>" required>
            </div>
            
            <div>
                <label class="form-label">Acknowledgement Number</label>
                <input type="text" name="ack_number" class="form-input" placeholder="e.g., ARN-123456789">
            </div>
            
            <div>
                <label class="form-label">Remarks</label>
                <textarea name="remarks" class="form-input" rows="2" placeholder="Optional remarks..."></textarea>
            </div>
            
            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary flex-1">
                    <i class="fas fa-check mr-1"></i>Mark Filed
                </button>
                <button type="button" onclick="document.getElementById('fileModal').classList.remove('show')" class="btn btn-secondary">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
