<?php
/**
 * PATRON - Apply for Leave
 * Allows any user to submit leave requests to their supervisor
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Apply for Leave';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];

$errors = [];
$success = false;

// Get user's supervisor
$supervisor = null;
if ($currentUser['supervisor_id']) {
    $supervisor = dbFetchOne("SELECT id, display_name FROM users WHERE id = ?", [$currentUser['supervisor_id']]);
}

// Get leave types
$leaveTypes = [];
try {
    $leaveTypes = dbFetchAll("SELECT * FROM leave_types WHERE is_active = 1 ORDER BY name") ?: [];
} catch (Exception $e) {
    // leave_types table might not exist
}

// Get team members (for backup selection)
$teamMembers = dbFetchAll("
    SELECT id, display_name FROM users 
    WHERE supervisor_id = ? AND id != ? AND deleted_at IS NULL AND user_type = 'INTERNAL'
    ORDER BY display_name
", [$currentUser['supervisor_id'], $userId]) ?: [];

// Get user's leave balance (if tracked)
$leaveBalance = [];
try {
    $leaveBalance = dbFetchAll("
        SELECT lt.name, lt.color, 
               COALESCE(lb.total_days, lt.default_days) as total_days,
               COALESCE((SELECT SUM(total_days) FROM leave_requests WHERE user_id = ? AND leave_type_id = lt.id AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())), 0) as used_days
        FROM leave_types lt
        LEFT JOIN leave_balances lb ON lt.id = lb.leave_type_id AND lb.user_id = ?
        WHERE lt.is_active = 1
    ", [$userId, $userId]) ?: [];
} catch (Exception $e) {
    // leave_balances table might not exist - just get leave types with default days
    try {
        $leaveBalance = dbFetchAll("
            SELECT lt.name, lt.color, 
                   lt.default_days as total_days,
                   COALESCE((SELECT SUM(total_days) FROM leave_requests WHERE user_id = ? AND leave_type_id = lt.id AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())), 0) as used_days
            FROM leave_types lt
            WHERE lt.is_active = 1
        ", [$userId]) ?: [];
    } catch (Exception $e2) {
        // Even leave_types might not have default_days
        $leaveBalance = [];
    }
}

// Get recent leave requests
$recentLeaves = [];
try {
    $recentLeaves = dbFetchAll("
        SELECT lr.*, lt.name as leave_type, lt.color, app.display_name as approved_by_name
        FROM leave_requests lr
        LEFT JOIN leave_types lt ON lr.leave_type_id = lt.id
        LEFT JOIN users app ON lr.approved_by = app.id
        WHERE lr.user_id = ?
        ORDER BY lr.created_at DESC
        LIMIT 5
    ", [$userId]) ?: [];
} catch (Exception $e) {
    // Tables might not exist
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $leaveTypeId = (int)($_POST['leave_type_id'] ?? 0);
        $startDate = sanitize($_POST['start_date'] ?? '');
        $endDate = sanitize($_POST['end_date'] ?? '');
        $reason = sanitize($_POST['reason'] ?? '');
        $backupUserId = (int)($_POST['backup_user_id'] ?? 0) ?: null;
        $isHalfDay = isset($_POST['is_half_day']) ? 1 : 0;
        $halfDayType = $isHalfDay ? sanitize($_POST['half_day_type'] ?? 'FIRST_HALF') : null;
        
        // Validations
        if (!$leaveTypeId) $errors[] = 'Please select leave type.';
        if (!$startDate) $errors[] = 'Start date is required.';
        if (!$endDate) $errors[] = 'End date is required.';
        if (strtotime($endDate) < strtotime($startDate)) $errors[] = 'End date cannot be before start date.';
        if (strtotime($startDate) < strtotime('today')) $errors[] = 'Cannot apply leave for past dates.';
        if (!$supervisor) $errors[] = 'No supervisor assigned. Please contact admin.';
        
        // Calculate total days
        $totalDays = 0;
        if ($startDate && $endDate) {
            if ($isHalfDay && $startDate === $endDate) {
                $totalDays = 0.5;
            } else {
                $start = new DateTime($startDate);
                $end = new DateTime($endDate);
                $totalDays = $start->diff($end)->days + 1;
            }
        }
        
        // Check for overlapping leaves
        $overlap = dbFetchOne("
            SELECT id FROM leave_requests 
            WHERE user_id = ? 
            AND status != 'REJECTED'
            AND ((start_date BETWEEN ? AND ?) OR (end_date BETWEEN ? AND ?) OR (start_date <= ? AND end_date >= ?))
        ", [$userId, $startDate, $endDate, $startDate, $endDate, $startDate, $endDate]);
        
        if ($overlap) {
            $errors[] = 'You already have a leave request for overlapping dates.';
        }
        
        if (empty($errors)) {
            try {
                dbExecute("
                    INSERT INTO leave_requests 
                    (user_id, leave_type_id, start_date, end_date, total_days, reason, 
                     backup_user_id, is_half_day, status, created_at)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'PENDING', NOW())
                ", [$userId, $leaveTypeId, $startDate, $endDate, $totalDays, $reason, 
                    $backupUserId, $isHalfDay]);
                
                setFlash('success', 'Leave request submitted successfully! Waiting for supervisor approval.');
                header('Location: apply_leave.php');
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to submit leave request. Please try again.';
            }
        }
    }
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800"><i class="fas fa-calendar-plus text-blue-500 mr-2"></i>Apply for Leave</h1>
        <p class="text-gray-500 text-sm">Submit leave request to your supervisor</p>
    </div>
</div>

<?php if (!empty($errors)): ?>
<div class="card p-4 mb-6 bg-red-50 border border-red-200">
    <ul class="text-sm text-red-700 space-y-1">
        <?php foreach ($errors as $error): ?>
        <li><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Leave Application Form -->
    <div class="lg:col-span-2">
        <div class="card">
            <div class="p-4 border-b bg-blue-50">
                <h3 class="font-semibold text-blue-800"><i class="fas fa-file-alt mr-2"></i>Leave Application</h3>
            </div>
            <form method="POST" class="p-6 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                
                <?php if (!$supervisor): ?>
                <div class="p-4 bg-amber-50 border border-amber-200 rounded-lg">
                    <p class="text-amber-700"><i class="fas fa-exclamation-triangle mr-2"></i>No supervisor assigned to you. Please contact admin to assign a supervisor before applying for leave.</p>
                </div>
                <?php endif; ?>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Leave Type <span class="text-red-500">*</span></label>
                        <select name="leave_type_id" class="form-input" required>
                            <option value="">Select Leave Type</option>
                            <?php foreach ($leaveTypes as $lt): ?>
                            <option value="<?= $lt['id'] ?>"><?= htmlspecialchars($lt['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Backup Person</label>
                        <select name="backup_user_id" class="form-input">
                            <option value="">Select Backup (Optional)</option>
                            <?php foreach ($teamMembers as $tm): ?>
                            <option value="<?= $tm['id'] ?>"><?= htmlspecialchars($tm['display_name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Start Date <span class="text-red-500">*</span></label>
                        <input type="date" name="start_date" id="start_date" class="form-input" 
                               min="<?= date('Y-m-d') ?>" required onchange="calculateDays()">
                    </div>
                    <div>
                        <label class="form-label">End Date <span class="text-red-500">*</span></label>
                        <input type="date" name="end_date" id="end_date" class="form-input" 
                               min="<?= date('Y-m-d') ?>" required onchange="calculateDays()">
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="is_half_day" id="is_half_day" class="form-checkbox" onchange="toggleHalfDay()">
                        <span>Half Day Leave</span>
                    </label>
                    <div id="half_day_options" class="hidden">
                        <select name="half_day_type" class="form-input text-sm">
                            <option value="FIRST_HALF">First Half</option>
                            <option value="SECOND_HALF">Second Half</option>
                        </select>
                    </div>
                    <div class="ml-auto">
                        <span class="text-gray-500">Total Days: </span>
                        <span id="total_days" class="font-bold text-blue-600">0</span>
                    </div>
                </div>
                
                <div>
                    <label class="form-label">Reason</label>
                    <textarea name="reason" class="form-input" rows="3" placeholder="Optional: Provide reason for leave..."></textarea>
                </div>
                
                <?php if ($supervisor): ?>
                <div class="p-3 bg-gray-50 rounded-lg">
                    <p class="text-sm text-gray-600">
                        <i class="fas fa-user-tie mr-2 text-blue-500"></i>
                        Request will be sent to: <strong><?= htmlspecialchars($supervisor['display_name']) ?></strong>
                    </p>
                </div>
                <?php endif; ?>
                
                <button type="submit" class="btn btn-primary" <?= !$supervisor ? 'disabled' : '' ?>>
                    <i class="fas fa-paper-plane mr-2"></i>Submit Leave Request
                </button>
            </form>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- Leave Balance -->
        <?php if (!empty($leaveBalance)): ?>
        <div class="card">
            <div class="p-4 border-b bg-green-50">
                <h3 class="font-semibold text-green-800"><i class="fas fa-chart-pie mr-2"></i>Leave Balance</h3>
            </div>
            <div class="p-4 space-y-3">
                <?php foreach ($leaveBalance as $lb): 
                    $remaining = ($lb['total_days'] ?? 0) - ($lb['used_days'] ?? 0);
                    $percentage = $lb['total_days'] > 0 ? ($lb['used_days'] / $lb['total_days']) * 100 : 0;
                ?>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span><?= htmlspecialchars($lb['name']) ?></span>
                        <span class="font-medium"><?= $remaining ?> / <?= $lb['total_days'] ?></span>
                    </div>
                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-<?= $lb['color'] ?? 'blue' ?>-500 rounded-full" style="width: <?= min($percentage, 100) ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Recent Leaves -->
        <div class="card">
            <div class="p-4 border-b bg-purple-50">
                <h3 class="font-semibold text-purple-800"><i class="fas fa-history mr-2"></i>Recent Requests</h3>
            </div>
            <?php if (empty($recentLeaves)): ?>
            <div class="p-4 text-center text-gray-400">
                <p>No leave history</p>
            </div>
            <?php else: ?>
            <div class="divide-y">
                <?php foreach ($recentLeaves as $rl): ?>
                <div class="p-3">
                    <div class="flex items-center justify-between">
                        <span class="px-2 py-0.5 bg-<?= $rl['color'] ?? 'gray' ?>-100 text-<?= $rl['color'] ?? 'gray' ?>-700 rounded text-xs">
                            <?= htmlspecialchars($rl['leave_type'] ?? 'Leave') ?>
                        </span>
                        <span class="px-2 py-0.5 rounded text-xs font-medium
                            <?= $rl['status'] === 'APPROVED' ? 'bg-green-100 text-green-700' : 
                               ($rl['status'] === 'REJECTED' ? 'bg-red-100 text-red-700' : 'bg-amber-100 text-amber-700') ?>">
                            <?= $rl['status'] ?>
                        </span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1">
                        <?= date('d M', strtotime($rl['start_date'])) ?>
                        <?= $rl['start_date'] !== $rl['end_date'] ? ' - ' . date('d M', strtotime($rl['end_date'])) : '' ?>
                        <span class="text-gray-400">(<?= $rl['total_days'] ?>d)</span>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Help -->
        <div class="card p-4 bg-blue-50">
            <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>Tips</h4>
            <ul class="text-sm text-blue-700 space-y-1">
                <li>• Apply at least 2 days in advance</li>
                <li>• Select a backup person for urgent tasks</li>
                <li>• Half-day available for single day only</li>
            </ul>
        </div>
    </div>
</div>

<script>
function calculateDays() {
    const startDate = document.getElementById('start_date').value;
    const endDate = document.getElementById('end_date').value;
    const isHalfDay = document.getElementById('is_half_day').checked;
    
    if (startDate && endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        let days = Math.ceil((end - start) / (1000 * 60 * 60 * 24)) + 1;
        
        if (isHalfDay && startDate === endDate) {
            days = 0.5;
        }
        
        document.getElementById('total_days').textContent = days;
        
        // Update end date min
        document.getElementById('end_date').min = startDate;
    }
}

function toggleHalfDay() {
    const isHalfDay = document.getElementById('is_half_day').checked;
    const options = document.getElementById('half_day_options');
    
    if (isHalfDay) {
        options.classList.remove('hidden');
        // For half day, end date = start date
        document.getElementById('end_date').value = document.getElementById('start_date').value;
    } else {
        options.classList.add('hidden');
    }
    calculateDays();
}
</script>

<?php require_once 'includes/footer.php'; ?>
