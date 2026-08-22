<?php
/**
 * PATRON - Team Management (Complete Version v2)
 * Phase 1: Members, Search, Workload
 * Phase 2: Leave Balance Tracking
 * Phase 3: Attendance & Performance
 * 
 * FIXES:
 * - Null array access errors fixed
 * - Active/Inactive bifurcation
 * - Hierarchy display
 * - Task reassignment on deactivation
 * - Login prevention for inactive
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Team Management';
$errors = [];
$activeTab = $_GET['tab'] ?? 'members';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();

// Check access - Admin or Manager
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);

if (!$isAdmin && !$isManager) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

// Base data
$roles = dbFetchAll("SELECT * FROM roles WHERE deleted_at IS NULL ORDER BY name") ?: [];
$teams = [];
try { $teams = dbFetchAll("SELECT * FROM teams WHERE is_active = 1 ORDER BY name") ?: []; } catch (Exception $e) {}
$supervisors = dbFetchAll("SELECT id, display_name, profile_photo FROM users WHERE deleted_at IS NULL AND status = 'ACTIVE' AND user_type = 'INTERNAL' ORDER BY display_name") ?: [];
$leaveTypes = [];
try { $leaveTypes = dbFetchAll("SELECT * FROM leave_types WHERE is_active = 1 ORDER BY name") ?: []; } catch (Exception $e) {}

// Check if Phase 2 & 3 tables exist
$hasLeaveBalances = false;
$hasAttendance = false;
$hasPerformance = false;
$hasHolidays = false;

try { dbFetchOne("SELECT 1 FROM leave_balances LIMIT 1"); $hasLeaveBalances = true; } catch (Exception $e) {}
try { dbFetchOne("SELECT 1 FROM attendance LIMIT 1"); $hasAttendance = true; } catch (Exception $e) {}
try { dbFetchOne("SELECT 1 FROM user_performance LIMIT 1"); $hasPerformance = true; } catch (Exception $e) {}
try { dbFetchOne("SELECT 1 FROM holidays LIMIT 1"); $hasHolidays = true; } catch (Exception $e) {}

// Get attendance settings
$attendanceSettings = [];
if ($hasAttendance) {
    try {
        $settings = dbFetchAll("SELECT setting_key, setting_value FROM attendance_settings");
        foreach ($settings ?: [] as $s) {
            $attendanceSettings[$s['setting_key']] = $s['setting_value'];
        }
    } catch (Exception $e) {}
}

// ============================================================
// HANDLE POST ACTIONS
// ============================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    // Save Member
    if ($action === 'save_member') {
        $id = (int)($_POST['id'] ?? 0);
        $displayName = sanitize($_POST['display_name'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $mobile = sanitize($_POST['mobile'] ?? '');
        $dob = sanitize($_POST['dob'] ?? '');
        $employeeCode = sanitize($_POST['employee_code'] ?? '');
        $joiningDate = sanitize($_POST['joining_date'] ?? '');
        $supervisorId = (int)($_POST['supervisor_id'] ?? 0) ?: null;
        $roleId = (int)($_POST['role_id'] ?? 0);
        $teamId = (int)($_POST['team_id'] ?? 0) ?: null;
        $canBeExecutor = isset($_POST['can_be_executor']) ? 1 : 0;
        $canBeReviewer = isset($_POST['can_be_reviewer']) ? 1 : 0;
        $canDeleteData = isset($_POST['can_delete_data']) ? 1 : 0;
        $status = sanitize($_POST['status'] ?? 'ACTIVE');
        $password = $_POST['password'] ?? '';
        $emergencyContact = sanitize($_POST['emergency_contact'] ?? '');
        $emergencyPhone = sanitize($_POST['emergency_phone'] ?? '');
        $address = sanitize($_POST['address'] ?? '');
        
        if (empty($displayName)) $errors[] = 'Name required.';
        if (empty($mobile)) $errors[] = 'Mobile required.';
        
        if ($mobile) {
            $dup = dbFetchOne("SELECT id FROM users WHERE mobile = ? AND id != ? AND deleted_at IS NULL", [$mobile, $id]);
            if ($dup) $errors[] = 'Mobile already exists.';
        }
        
        // Check if being deactivated - need to handle task reassignment
        $wasActive = false;
        $beingDeactivated = false;
        if ($id) {
            $existingUser = dbFetchOne("SELECT status FROM users WHERE id = ?", [$id]);
            $wasActive = ($existingUser['status'] ?? '') === 'ACTIVE';
            $beingDeactivated = $wasActive && $status === 'INACTIVE';
        }
        
        // If being deactivated, check for pending tasks
        $pendingTaskCount = 0;
        if ($beingDeactivated) {
            $pendingTaskCount = dbFetchOne("SELECT COUNT(*) as cnt FROM service_requests WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')", [$id, $id])['cnt'] ?? 0;
            
            $pendingComplianceCount = 0;
            try {
                $pendingComplianceCount = dbFetchOne("SELECT COUNT(*) as cnt FROM compliance_tracker ctr JOIN compliance_types ct ON ctr.compliance_type_id = ct.id WHERE (ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ?) AND ct.deleted_at IS NULL AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')", [$id, $id, $id])['cnt'] ?? 0;
            } catch (Exception $e) {}
            
            $totalPending = $pendingTaskCount + $pendingComplianceCount;
            
            if ($totalPending > 0) {
                // Redirect to task reassignment page instead of blocking
                $_SESSION['deactivate_user_id'] = $id;
                $_SESSION['deactivate_user_name'] = $displayName;
                $_SESSION['deactivate_pending_tasks'] = $pendingTaskCount;
                $_SESSION['deactivate_pending_compliance'] = $pendingComplianceCount;
                header('Location: team.php?tab=reassign&user_id=' . $id);
                exit;
            }
        }
        
        // Handle photo upload
        $profilePhoto = null;
        if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
            $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $maxSize = 2 * 1024 * 1024;
            
            if (!in_array($_FILES['profile_photo']['type'], $allowed)) {
                $errors[] = 'Invalid image type. Use JPG, PNG, GIF or WebP.';
            } elseif ($_FILES['profile_photo']['size'] > $maxSize) {
                $errors[] = 'Image too large. Max 2MB.';
            } else {
                $uploadDir = 'uploads/team/';
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
                
                $ext = pathinfo($_FILES['profile_photo']['name'], PATHINFO_EXTENSION);
                $filename = 'user_' . ($id ?: time()) . '_' . uniqid() . '.' . $ext;
                $filepath = $uploadDir . $filename;
                
                if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $filepath)) {
                    $profilePhoto = $filepath;
                }
            }
        }
        
        if (empty($errors)) {
            try {
                $isNewUser = !$id;
                
                if ($id) {
                    $sql = "UPDATE users SET display_name=?, email=?, mobile=?, dob=?, employee_code=?, joining_date=?, supervisor_id=?, can_be_executor=?, can_be_reviewer=?, can_delete_data=?, emergency_contact=?, emergency_phone=?, address=?, status=?";
                    $params = [$displayName, $email?:null, $mobile, $dob?:null, $employeeCode?:null, $joiningDate?:null, $supervisorId, $canBeExecutor, $canBeReviewer, $canDeleteData, $emergencyContact?:null, $emergencyPhone?:null, $address?:null, $status];
                    
                    if ($profilePhoto) {
                        $sql .= ", profile_photo=?";
                        $params[] = $profilePhoto;
                    }
                    $sql .= " WHERE id=?";
                    $params[] = $id;
                    
                    dbExecute($sql, $params);
                    if ($password) dbExecute("UPDATE users SET password_hash=? WHERE id=?", [password_hash($password, PASSWORD_DEFAULT), $id]);
                    setFlash('success', 'Member updated successfully.');
                } else {
                    if (!$password) $errors[] = 'Password required for new member.';
                    else {
                        dbExecute("INSERT INTO users (display_name, email, mobile, dob, employee_code, joining_date, supervisor_id, can_be_executor, can_be_reviewer, can_delete_data, emergency_contact, emergency_phone, address, profile_photo, user_type, status, password_hash) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,'INTERNAL',?,?)",
                            [$displayName, $email?:null, $mobile, $dob?:null, $employeeCode?:null, $joiningDate?:null, $supervisorId, $canBeExecutor, $canBeReviewer, $canDeleteData, $emergencyContact?:null, $emergencyPhone?:null, $address?:null, $profilePhoto, $status, password_hash($password, PASSWORD_DEFAULT)]);
                        $id = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                        setFlash('success', 'Member added successfully.');
                    }
                }
                
                // Assign role
                if ($id && $roleId && empty($errors)) {
                    dbExecute("UPDATE user_roles SET revoked_at=NOW() WHERE user_id=? AND revoked_at IS NULL", [$id]);
                    dbExecute("INSERT INTO user_roles (user_id, role_id, granted_at) VALUES (?,?,NOW())", [$id, $roleId]);
                }
                
                // Assign team
                if ($id && empty($errors) && count($teams)) {
                    try {
                        dbExecute("UPDATE team_members SET is_active=0 WHERE user_id=? AND is_active=1", [$id]);
                        if ($teamId) dbExecute("INSERT INTO team_members (team_id,user_id,is_active) VALUES (?,?,1) ON DUPLICATE KEY UPDATE is_active=1", [$teamId, $id]);
                    } catch (Exception $e) {}
                }
                
                // Initialize leave balances for new user
                if ($isNewUser && $id && $hasLeaveBalances) {
                    try {
                        foreach ($leaveTypes as $lt) {
                            $defaultDays = $lt['default_days'] ?? $lt['max_days'] ?? 12;
                            dbExecute("INSERT INTO leave_balances (user_id, leave_type_id, year, allocated_days) VALUES (?, ?, YEAR(CURDATE()), ?) ON DUPLICATE KEY UPDATE allocated_days = VALUES(allocated_days)", 
                                [$id, $lt['id'], $defaultDays]);
                        }
                    } catch (Exception $e) {}
                }
                
                if (empty($errors)) { header('Location: team.php'); exit; }
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Reassign Tasks (when deactivating employee)
    if ($action === 'reassign_tasks') {
        $fromUserId = (int)$_POST['from_user_id'];
        $toUserId = (int)$_POST['to_user_id'];
        $reassignTasks = isset($_POST['reassign_tasks']);
        $reassignCompliance = isset($_POST['reassign_compliance']);
        
        if (!$fromUserId || !$toUserId) {
            $errors[] = 'Please select a user to reassign tasks to.';
        } else {
            try {
                $reassignedCount = 0;
                
                // Reassign service requests
                if ($reassignTasks) {
                    dbExecute("UPDATE service_requests SET assigned_to = ? WHERE assigned_to = ? AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')", [$toUserId, $fromUserId]);
                    dbExecute("UPDATE service_requests SET reviewer_id = ? WHERE reviewer_id = ? AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')", [$toUserId, $fromUserId]);
                    $reassignedCount += dbFetchOne("SELECT ROW_COUNT() as cnt")['cnt'] ?? 0;
                }
                
                // Reassign compliance
                if ($reassignCompliance) {
                    try {
                        dbExecute("UPDATE compliance_tracker SET executor_1_id = ? WHERE executor_1_id = ? AND UPPER(status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')", [$toUserId, $fromUserId]);
                        dbExecute("UPDATE compliance_tracker SET executor_2_id = ? WHERE executor_2_id = ? AND UPPER(status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')", [$toUserId, $fromUserId]);
                        dbExecute("UPDATE compliance_tracker SET reviewer_id = ? WHERE reviewer_id = ? AND UPPER(status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')", [$toUserId, $fromUserId]);
                    } catch (Exception $e) {}
                }
                
                // Now deactivate the user
                dbExecute("UPDATE users SET status = 'INACTIVE' WHERE id = ?", [$fromUserId]);
                
                // Log the action
                logActivity('TEAM', "Deactivated user #$fromUserId, reassigned tasks to user #$toUserId");
                
                unset($_SESSION['deactivate_user_id']);
                setFlash('success', 'Tasks reassigned and employee deactivated successfully.');
                header('Location: team.php');
                exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Record Leave
    if ($action === 'apply_leave') {
        $leaveUserId = (int)$_POST['user_id'];
        $leaveTypeId = (int)$_POST['leave_type_id'];
        $startDate = sanitize($_POST['start_date']);
        $endDate = sanitize($_POST['end_date']);
        $isHalfDay = isset($_POST['is_half_day']) ? 1 : 0;
        $reason = sanitize($_POST['reason'] ?? '');
        $backupId = (int)($_POST['backup_person_id'] ?? 0) ?: null;
        
        if (!$leaveUserId || !$leaveTypeId || !$startDate || !$endDate) {
            $errors[] = 'Please fill all required fields.';
        } else {
            $days = $isHalfDay ? 0.5 : ((strtotime($endDate) - strtotime($startDate))/86400 + 1);
            
            // Check leave balance
            if ($hasLeaveBalances) {
                $balance = dbFetchOne("
                    SELECT 
                        COALESCE(lb.allocated_days, lt.max_days, 12) + 
                        COALESCE(lb.carried_forward, 0) + 
                        COALESCE(lb.adjustment, 0) - 
                        COALESCE((SELECT SUM(total_days) FROM leave_requests WHERE user_id = ? AND leave_type_id = ? AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())), 0) as balance
                    FROM leave_types lt
                    LEFT JOIN leave_balances lb ON lt.id = lb.leave_type_id AND lb.user_id = ? AND lb.year = YEAR(CURDATE())
                    WHERE lt.id = ?
                ", [$leaveUserId, $leaveTypeId, $leaveUserId, $leaveTypeId]);
                
                if ($balance && $balance['balance'] < $days) {
                    $errors[] = "Insufficient leave balance. Available: {$balance['balance']} days.";
                }
            }
            
            if (empty($errors)) {
                try {
                    dbExecute("INSERT INTO leave_requests (user_id, leave_type_id, start_date, end_date, is_half_day, total_days, reason, backup_person_id, status, approved_by, approved_at) VALUES (?,?,?,?,?,?,?,?,'APPROVED',?,NOW())",
                        [$leaveUserId, $leaveTypeId, $startDate, $endDate, $isHalfDay, $days, $reason, $backupId, $currentUser['id']]);
                    
                    // Update attendance records
                    if ($hasAttendance) {
                        $current = strtotime($startDate);
                        $end = strtotime($endDate);
                        while ($current <= $end) {
                            $date = date('Y-m-d', $current);
                            dbExecute("INSERT INTO attendance (user_id, date, status, remarks) VALUES (?, ?, 'ON_LEAVE', ?) ON DUPLICATE KEY UPDATE status = 'ON_LEAVE'",
                                [$leaveUserId, $date, $reason]);
                            $current = strtotime('+1 day', $current);
                        }
                    }
                    
                    setFlash('success', 'Leave recorded successfully.');
                    header('Location: team.php?tab=leave'); exit;
                } catch (Exception $e) { $errors[] = $e->getMessage(); }
            }
        }
    }
    
    // Adjust Leave Balance
    if ($action === 'adjust_balance' && $hasLeaveBalances) {
        $balanceUserId = (int)$_POST['balance_user_id'];
        $balanceLeaveTypeId = (int)$_POST['balance_leave_type_id'];
        $adjustment = (float)$_POST['adjustment'];
        $adjustmentReason = sanitize($_POST['adjustment_reason'] ?? '');
        
        if ($balanceUserId && $balanceLeaveTypeId && $adjustment != 0) {
            try {
                $existing = dbFetchOne("SELECT id, adjustment FROM leave_balances WHERE user_id = ? AND leave_type_id = ? AND year = YEAR(CURDATE())", 
                    [$balanceUserId, $balanceLeaveTypeId]);
                
                if ($existing) {
                    $newAdj = $existing['adjustment'] + $adjustment;
                    dbExecute("UPDATE leave_balances SET adjustment = ?, adjustment_reason = CONCAT(COALESCE(adjustment_reason, ''), '\n', ?) WHERE id = ?",
                        [$newAdj, date('Y-m-d') . ": " . ($adjustment > 0 ? "+$adjustment" : $adjustment) . " - $adjustmentReason", $existing['id']]);
                } else {
                    $lt = dbFetchOne("SELECT max_days FROM leave_types WHERE id = ?", [$balanceLeaveTypeId]);
                    $defaultDays = $lt['max_days'] ?? 12;
                    dbExecute("INSERT INTO leave_balances (user_id, leave_type_id, year, allocated_days, adjustment, adjustment_reason) VALUES (?, ?, YEAR(CURDATE()), ?, ?, ?)",
                        [$balanceUserId, $balanceLeaveTypeId, $defaultDays, $adjustment, date('Y-m-d') . ": " . ($adjustment > 0 ? "+$adjustment" : $adjustment) . " - $adjustmentReason"]);
                }
                setFlash('success', 'Leave balance adjusted.');
                header('Location: team.php?tab=leave'); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Record Attendance
    if ($action === 'record_attendance' && $hasAttendance) {
        $attUserId = (int)$_POST['att_user_id'];
        $attDate = sanitize($_POST['att_date']);
        $checkIn = sanitize($_POST['check_in'] ?? '');
        $checkOut = sanitize($_POST['check_out'] ?? '');
        $attStatus = sanitize($_POST['att_status'] ?? 'PRESENT');
        $attRemarks = sanitize($_POST['att_remarks'] ?? '');
        
        if ($attUserId && $attDate) {
            $workHours = 0;
            $lateMinutes = 0;
            $overtime = 0;
            
            if ($checkIn && $checkOut) {
                $inTime = strtotime($checkIn);
                $outTime = strtotime($checkOut);
                $workHours = round(($outTime - $inTime) / 3600, 2);
                
                $startTime = $attendanceSettings['work_start_time'] ?? '09:30';
                $graceMinutes = (int)($attendanceSettings['late_grace_minutes'] ?? 15);
                $expectedIn = strtotime($startTime);
                $graceEnd = $expectedIn + ($graceMinutes * 60);
                
                if ($inTime > $graceEnd) {
                    $lateMinutes = round(($inTime - $expectedIn) / 60);
                    if ($attStatus === 'PRESENT') $attStatus = 'LATE';
                }
                
                $otThreshold = (float)($attendanceSettings['overtime_threshold'] ?? 9);
                if ($workHours > $otThreshold) {
                    $overtime = round($workHours - $otThreshold, 2);
                }
            }
            
            try {
                dbExecute("INSERT INTO attendance (user_id, date, check_in, check_out, work_hours, overtime_hours, status, late_minutes, remarks) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
                           ON DUPLICATE KEY UPDATE check_in = VALUES(check_in), check_out = VALUES(check_out), 
                           work_hours = VALUES(work_hours), overtime_hours = VALUES(overtime_hours), 
                           status = VALUES(status), late_minutes = VALUES(late_minutes), remarks = VALUES(remarks)",
                    [$attUserId, $attDate, $checkIn ?: null, $checkOut ?: null, $workHours, $overtime, $attStatus, $lateMinutes, $attRemarks]);
                setFlash('success', 'Attendance recorded.');
                header('Location: team.php?tab=attendance'); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Bulk Attendance
    if ($action === 'bulk_attendance' && $hasAttendance) {
        $bulkDate = sanitize($_POST['bulk_date']);
        $bulkStatus = sanitize($_POST['bulk_status']);
        $selectedUsers = $_POST['bulk_users'] ?? [];
        
        if ($bulkDate && $bulkStatus && !empty($selectedUsers)) {
            try {
                foreach ($selectedUsers as $uid) {
                    dbExecute("INSERT INTO attendance (user_id, date, status) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE status = VALUES(status)",
                        [(int)$uid, $bulkDate, $bulkStatus]);
                }
                setFlash('success', count($selectedUsers) . ' attendance records updated.');
                header('Location: team.php?tab=attendance&date=' . $bulkDate); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Save Team
    if ($action === 'save_team') {
        $teamId = (int)($_POST['team_id'] ?? 0);
        $teamCode = strtoupper(sanitize($_POST['team_code'] ?? ''));
        $teamName = sanitize($_POST['team_name'] ?? '');
        $teamSup = (int)($_POST['team_supervisor_id'] ?? 0) ?: null;
        $teamColor = sanitize($_POST['team_color'] ?? 'blue');
        
        if ($teamCode && $teamName) {
            try {
                if ($teamId) {
                    // Update existing team
                    dbExecute("UPDATE teams SET code=?, name=?, supervisor_id=?, color=? WHERE id=?",
                        [$teamCode, $teamName, $teamSup, $teamColor, $teamId]);
                    setFlash('success', 'Team updated successfully.');
                } else {
                    // Insert new team
                    dbExecute("INSERT INTO teams (code, name, supervisor_id, color) VALUES (?,?,?,?)",
                        [$teamCode, $teamName, $teamSup, $teamColor]);
                    setFlash('success', 'Team created successfully.');
                }
                header('Location: team.php?tab=teams'); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        } else {
            $errors[] = 'Team code and name are required.';
        }
    }
    
    // Delete Team
    if ($action === 'delete_team' && $isAdmin) {
        $teamId = (int)$_POST['team_id'];
        try {
            dbExecute("UPDATE teams SET is_active = 0 WHERE id = ?", [$teamId]);
            dbExecute("UPDATE team_members SET is_active = 0 WHERE team_id = ?", [$teamId]);
            setFlash('success', 'Team deleted.');
            header('Location: team.php?tab=teams'); exit;
        } catch (Exception $e) { $errors[] = $e->getMessage(); }
    }
    
    // Add Holiday
    if ($action === 'add_holiday' && $hasHolidays && $isAdmin) {
        $holidayId = (int)($_POST['holiday_id'] ?? 0);
        $holidayDate = sanitize($_POST['holiday_date']);
        $holidayName = sanitize($_POST['holiday_name']);
        $holidayType = sanitize($_POST['holiday_type'] ?? 'NATIONAL');
        
        if ($holidayDate && $holidayName) {
            try {
                if ($holidayId) {
                    // Update existing
                    dbExecute("UPDATE holidays SET date = ?, name = ?, type = ?, year = YEAR(?) WHERE id = ?",
                        [$holidayDate, $holidayName, $holidayType, $holidayDate, $holidayId]);
                    setFlash('success', 'Holiday updated.');
                } else {
                    // Insert new
                    dbExecute("INSERT INTO holidays (date, name, type, year) VALUES (?, ?, ?, YEAR(?))",
                        [$holidayDate, $holidayName, $holidayType, $holidayDate]);
                    setFlash('success', 'Holiday added.');
                }
                header('Location: team.php?tab=attendance&year=' . date('Y', strtotime($holidayDate))); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Delete Holiday
    if ($action === 'delete_holiday' && $hasHolidays && $isAdmin) {
        $holidayId = (int)$_POST['holiday_id'];
        if ($holidayId) {
            try {
                dbExecute("DELETE FROM holidays WHERE id = ?", [$holidayId]);
                setFlash('success', 'Holiday deleted.');
                header('Location: team.php?tab=attendance'); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
    
    // Recalculate Performance
    if ($action === 'recalc_performance' && $hasPerformance && $isAdmin) {
        $perfMonth = (int)$_POST['perf_month'];
        $perfYear = (int)$_POST['perf_year'];
        
        if ($perfMonth && $perfYear) {
            try {
                $users = dbFetchAll("SELECT id FROM users WHERE deleted_at IS NULL AND user_type = 'INTERNAL' AND status = 'ACTIVE'");
                
                foreach ($users ?: [] as $u) {
                    $uid = $u['id'];
                    
                    $taskStats = dbFetchOne("
                        SELECT 
                            COUNT(*) as assigned,
                            SUM(status IN ('DONE','COMPLETED')) as completed,
                            SUM(COALESCE(due_date, expected_completion) < actual_completion_date AND status IN ('DONE','COMPLETED')) as overdue
                        FROM service_requests 
                        WHERE (assigned_to = ? OR reviewer_id = ?) 
                        AND deleted_at IS NULL 
                        AND YEAR(created_at) = ? AND MONTH(created_at) = ?
                    ", [$uid, $uid, $perfYear, $perfMonth]);
                    
                    $compStats = ['assigned' => 0, 'filed' => 0, 'late' => 0];
                    try {
                        $compStats = dbFetchOne("
                            SELECT 
                                COUNT(*) as assigned,
                                SUM(UPPER(ctr.status) IN ('FILED','FILED_LATE')) as filed,
                                SUM(UPPER(ctr.status) = 'FILED_LATE') as late
                            FROM compliance_tracker ctr
                            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
                            WHERE (ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ?)
                            AND ct.deleted_at IS NULL
                            AND YEAR(ctr.due_date) = ? AND MONTH(ctr.due_date) = ?
                        ", [$uid, $uid, $uid, $perfYear, $perfMonth]) ?: $compStats;
                    } catch (Exception $e) {}
                    
                    $attStats = ['present' => 0, 'absent' => 0, 'late' => 0, 'leave_days' => 0, 'total_hours' => 0, 'overtime' => 0];
                    try {
                        $attStats = dbFetchOne("
                            SELECT 
                                SUM(status IN ('PRESENT','LATE','WFH')) as present,
                                SUM(status = 'ABSENT') as absent,
                                SUM(status = 'LATE') as late,
                                SUM(status = 'ON_LEAVE') as leave_days,
                                SUM(COALESCE(work_hours, 0)) as total_hours,
                                SUM(COALESCE(overtime_hours, 0)) as overtime
                            FROM attendance
                            WHERE user_id = ? AND YEAR(date) = ? AND MONTH(date) = ?
                        ", [$uid, $perfYear, $perfMonth]) ?: $attStats;
                    } catch (Exception $e) {}
                    
                    $taskAssigned = $taskStats['assigned'] ?? 0;
                    $taskCompleted = $taskStats['completed'] ?? 0;
                    $productivityScore = $taskAssigned > 0 ? min(100, ($taskCompleted / $taskAssigned) * 100) : null;
                    
                    $daysPresent = ($attStats['present'] ?? 0);
                    $totalWorkDays = $daysPresent + ($attStats['absent'] ?? 0);
                    $punctualityScore = $totalWorkDays > 0 ? min(100, (($daysPresent - ($attStats['late'] ?? 0)) / $totalWorkDays) * 100) : null;
                    
                    $overallScore = null;
                    if ($productivityScore !== null && $punctualityScore !== null) {
                        $overallScore = ($productivityScore * 0.6) + ($punctualityScore * 0.4);
                    }
                    
                    dbExecute("
                        INSERT INTO user_performance 
                        (user_id, year, month, tasks_assigned, tasks_completed, tasks_overdue,
                         compliance_assigned, compliance_filed, compliance_late,
                         days_present, days_absent, days_late, days_leave, total_work_hours, total_overtime,
                         productivity_score, punctuality_score, overall_score, calculated_at)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
                        ON DUPLICATE KEY UPDATE
                        tasks_assigned = VALUES(tasks_assigned), tasks_completed = VALUES(tasks_completed),
                        tasks_overdue = VALUES(tasks_overdue), compliance_assigned = VALUES(compliance_assigned),
                        compliance_filed = VALUES(compliance_filed), compliance_late = VALUES(compliance_late),
                        days_present = VALUES(days_present), days_absent = VALUES(days_absent),
                        days_late = VALUES(days_late), days_leave = VALUES(days_leave),
                        total_work_hours = VALUES(total_work_hours), total_overtime = VALUES(total_overtime),
                        productivity_score = VALUES(productivity_score), punctuality_score = VALUES(punctuality_score),
                        overall_score = VALUES(overall_score), calculated_at = NOW()
                    ", [
                        $uid, $perfYear, $perfMonth,
                        $taskAssigned, $taskCompleted, $taskStats['overdue'] ?? 0,
                        $compStats['assigned'] ?? 0, $compStats['filed'] ?? 0, $compStats['late'] ?? 0,
                        $daysPresent, $attStats['absent'] ?? 0, $attStats['late'] ?? 0, $attStats['leave_days'] ?? 0,
                        $attStats['total_hours'] ?? 0, $attStats['overtime'] ?? 0,
                        $productivityScore, $punctualityScore, $overallScore
                    ]);
                }
                
                setFlash('success', 'Performance metrics recalculated for ' . count($users ?: []) . ' users.');
                header('Location: team.php?tab=performance&month=' . $perfMonth . '&year=' . $perfYear); exit;
            } catch (Exception $e) { $errors[] = $e->getMessage(); }
        }
    }
}

// ============================================================
// FILTERS
// ============================================================
$filterSearch = sanitize($_GET['search'] ?? '');
$filterTeam = (int)($_GET['team'] ?? 0);
$filterRole = (int)($_GET['role'] ?? 0);
$filterStatus = sanitize($_GET['status'] ?? '');
$sortBy = sanitize($_GET['sort'] ?? 'name');
$viewDate = sanitize($_GET['date'] ?? date('Y-m-d'));
$viewMonth = (int)($_GET['month'] ?? date('n'));
$viewYear = (int)($_GET['year'] ?? date('Y'));

// ============================================================
// FETCH MEMBERS WITH WORKLOAD DATA
// ============================================================
$memberWhere = ["u.deleted_at IS NULL", "u.user_type='INTERNAL'"];
$memberParams = [];

if ($filterSearch) {
    $memberWhere[] = "(u.display_name LIKE ? OR u.email LIKE ? OR u.mobile LIKE ? OR u.employee_code LIKE ?)";
    $memberParams = array_merge($memberParams, ["%$filterSearch%", "%$filterSearch%", "%$filterSearch%", "%$filterSearch%"]);
}
if ($filterStatus) {
    $memberWhere[] = "u.status = ?";
    $memberParams[] = $filterStatus;
}
if ($filterRole) {
    $memberWhere[] = "ur.role_id = ?";
    $memberParams[] = $filterRole;
}

$memberWhereClause = implode(' AND ', $memberWhere);

// For workload sorting, we need to sort in PHP after calculating workload_score
$needsPhpSort = ($sortBy === 'workload');

$orderBy = match($sortBy) {
    'tasks' => 'pending_tasks DESC',
    'workload' => 'pending_tasks DESC', // Temporary - will re-sort in PHP
    'joined' => 'u.joining_date DESC',
    default => 'u.display_name ASC'
};

$members = dbFetchAll("
    SELECT u.*, 
           r.name as role_name, r.code as role_code,
           sup.display_name as supervisor_name,
           (SELECT COUNT(*) FROM service_requests WHERE (assigned_to = u.id OR reviewer_id = u.id) AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')) as pending_tasks,
           (SELECT COUNT(*) FROM service_requests WHERE (assigned_to = u.id OR reviewer_id = u.id) AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED') AND COALESCE(due_date, expected_completion) < CURDATE()) as overdue_tasks,
           (SELECT COUNT(*) FROM service_requests WHERE (assigned_to = u.id OR reviewer_id = u.id) AND deleted_at IS NULL AND status IN ('DONE','COMPLETED')) as completed_tasks
    FROM users u 
    LEFT JOIN user_roles ur ON u.id = ur.user_id AND ur.revoked_at IS NULL 
    LEFT JOIN roles r ON ur.role_id = r.id 
    LEFT JOIN users sup ON u.supervisor_id = sup.id 
    WHERE $memberWhereClause
    ORDER BY u.status ASC, $orderBy
", $memberParams) ?: [];

// Add compliance, team info, leave balance to members
foreach ($members as &$m) {
    // Compliance counts (with safe fallback)
    $m['pending_compliance'] = 0;
    $m['overdue_compliance'] = 0;
    try { 
        $compData = dbFetchOne("SELECT 
            COUNT(*) as pending,
            SUM(ctr.due_date < CURDATE()) as overdue
            FROM compliance_tracker ctr 
            JOIN compliance_types ct ON ctr.compliance_type_id = ct.id 
            WHERE (ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ?) 
            AND ct.deleted_at IS NULL 
            AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')", [$m['id'], $m['id'], $m['id']]);
        $m['pending_compliance'] = $compData['pending'] ?? 0;
        $m['overdue_compliance'] = $compData['overdue'] ?? 0;
    } catch (Exception $e) {}
    
    $m['workload_score'] = ($m['pending_tasks'] ?? 0) + ($m['pending_compliance'] ?? 0);
    
    // Team info
    $m['team_name'] = null;
    $m['team_id'] = null;
    $m['team_color'] = null;
    try { 
        $tm = dbFetchOne("SELECT t.name, t.id, t.color FROM team_members tm JOIN teams t ON tm.team_id=t.id WHERE tm.user_id=? AND tm.is_active=1", [$m['id']]); 
        if ($tm) {
            $m['team_name'] = $tm['name']; 
            $m['team_id'] = $tm['id']; 
            $m['team_color'] = $tm['color'];
        }
    } catch (Exception $e) {}
    
    // Leave balance
    $m['leave_balance'] = [];
    if ($hasLeaveBalances) {
        try {
            $m['leave_balance'] = dbFetchAll("
                SELECT lt.id, lt.name, lt.code, lt.color,
                       COALESCE(lb.allocated_days, lt.max_days, 12) + COALESCE(lb.carried_forward, 0) + COALESCE(lb.adjustment, 0) as total,
                       COALESCE((SELECT SUM(total_days) FROM leave_requests WHERE user_id = ? AND leave_type_id = lt.id AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())), 0) as used
                FROM leave_types lt
                LEFT JOIN leave_balances lb ON lt.id = lb.leave_type_id AND lb.user_id = ? AND lb.year = YEAR(CURDATE())
                WHERE lt.is_active = 1
            ", [$m['id'], $m['id']]) ?: [];
        } catch (Exception $e) {}
    }
    
    // Today's attendance
    $m['today_attendance'] = null;
    if ($hasAttendance) {
        try {
            $m['today_attendance'] = dbFetchOne("SELECT * FROM attendance WHERE user_id = ? AND date = CURDATE()", [$m['id']]);
        } catch (Exception $e) {}
    }
    
    // Current month performance
    $m['performance'] = null;
    if ($hasPerformance) {
        try {
            $m['performance'] = dbFetchOne("SELECT * FROM user_performance WHERE user_id = ? AND year = YEAR(CURDATE()) AND month = MONTH(CURDATE())", [$m['id']]);
        } catch (Exception $e) {}
    }
}
unset($m);

// Sort by workload if needed (since workload_score is calculated in PHP)
if ($needsPhpSort) {
    usort($members, function($a, $b) {
        // First sort by status (ACTIVE first)
        if ($a['status'] !== $b['status']) {
            return $a['status'] === 'ACTIVE' ? -1 : 1;
        }
        // Then by workload_score descending
        return ($b['workload_score'] ?? 0) - ($a['workload_score'] ?? 0);
    });
}

// Filter by team
if ($filterTeam) {
    $members = array_filter($members, fn($m) => ($m['team_id'] ?? 0) == $filterTeam);
}

// Separate active and inactive
$activeMembers = array_filter($members, fn($m) => $m['status'] === 'ACTIVE');
$inactiveMembers = array_filter($members, fn($m) => $m['status'] !== 'ACTIVE');

// ============================================================
// LEAVE DATA
// ============================================================
$leaveRequests = [];
try { 
    $leaveRequests = dbFetchAll("
        SELECT lr.*, u.display_name, u.profile_photo, lt.name as leave_type, lt.color, 
               b.display_name as backup_name, app.display_name as approved_by_name
        FROM leave_requests lr 
        JOIN users u ON lr.user_id = u.id 
        JOIN leave_types lt ON lr.leave_type_id = lt.id 
        LEFT JOIN users b ON lr.backup_person_id = b.id 
        LEFT JOIN users app ON lr.approved_by = app.id
        ORDER BY lr.start_date DESC 
        LIMIT 50
    ") ?: []; 
} catch (Exception $e) {}

$todayOnLeave = [];
try { 
    $todayOnLeave = dbFetchAll("
        SELECT u.id, u.display_name, u.profile_photo, lt.name as leave_type, lt.color, 
               b.display_name as backup_name, lr.end_date
        FROM leave_requests lr 
        JOIN users u ON lr.user_id = u.id 
        JOIN leave_types lt ON lr.leave_type_id = lt.id 
        LEFT JOIN users b ON lr.backup_person_id = b.id 
        WHERE lr.status = 'APPROVED' AND CURDATE() BETWEEN lr.start_date AND lr.end_date
    ") ?: []; 
} catch (Exception $e) {}

$upcomingBirthdays = [];
try { 
    $upcomingBirthdays = dbFetchAll("
        SELECT id, display_name, profile_photo, dob, DATE_FORMAT(dob, '%d %b') as birthday,
               DATEDIFF(
                   DATE_ADD(dob, INTERVAL (YEAR(CURDATE()) - YEAR(dob) + 
                       IF(DATE_FORMAT(CURDATE(), '%m%d') > DATE_FORMAT(dob, '%m%d'), 1, 0)) YEAR),
                   CURDATE()
               ) as days_until
        FROM users 
        WHERE dob IS NOT NULL AND deleted_at IS NULL AND status='ACTIVE' AND user_type='INTERNAL'
        HAVING days_until BETWEEN 0 AND 30
        ORDER BY days_until
        LIMIT 10
    ") ?: []; 
} catch (Exception $e) {}

$pendingLeaveCount = 0;
try {
    $pendingLeaveCount = dbFetchOne("SELECT COUNT(*) as cnt FROM leave_requests WHERE status = 'PENDING'")['cnt'] ?? 0;
} catch (Exception $e) {}

// ============================================================
// ATTENDANCE DATA
// ============================================================
$todayAttendance = [];
$monthlyAttendance = [];
$holidays = [];

if ($hasAttendance) {
    try {
        $todayAttendance = dbFetchAll("
            SELECT a.*, u.display_name, u.profile_photo
            FROM attendance a
            JOIN users u ON a.user_id = u.id
            WHERE a.date = ?
            ORDER BY a.check_in ASC
        ", [$viewDate]) ?: [];
    } catch (Exception $e) {}
    
    try {
        $monthlyAttendance = dbFetchAll("
            SELECT a.user_id, u.display_name,
                   SUM(a.status IN ('PRESENT','LATE','WFH')) as present,
                   SUM(a.status = 'ABSENT') as absent,
                   SUM(a.status = 'LATE') as late,
                   SUM(a.status = 'ON_LEAVE') as on_leave,
                   SUM(a.status = 'HALF_DAY') as half_days,
                   SUM(COALESCE(a.work_hours, 0)) as total_hours,
                   AVG(COALESCE(a.work_hours, 0)) as avg_hours
            FROM attendance a
            JOIN users u ON a.user_id = u.id
            WHERE YEAR(a.date) = ? AND MONTH(a.date) = ?
            GROUP BY a.user_id
            ORDER BY u.display_name
        ", [$viewYear, $viewMonth]) ?: [];
    } catch (Exception $e) {}
    
    if ($hasHolidays) {
        try {
            $holidays = dbFetchAll("SELECT * FROM holidays WHERE year = ? ORDER BY date", [$viewYear]) ?: [];
        } catch (Exception $e) {}
    }
}

// ============================================================
// PERFORMANCE DATA
// ============================================================
$performanceData = [];
$topPerformers = [];

if ($hasPerformance) {
    try {
        $performanceData = dbFetchAll("
            SELECT p.*, u.display_name, u.profile_photo
            FROM user_performance p
            JOIN users u ON p.user_id = u.id
            WHERE p.year = ? AND p.month = ?
            ORDER BY p.overall_score DESC
        ", [$viewYear, $viewMonth]) ?: [];
        
        $topPerformers = array_slice($performanceData, 0, 5);
    } catch (Exception $e) {}
}

// ============================================================
// STATS
// ============================================================
$totalMembers = count($members);
$activeMemberCount = count($activeMembers);
$inactiveMemberCount = count($inactiveMembers);
$onLeaveToday = count($todayOnLeave);
$totalOverdue = array_sum(array_column($members, 'overdue_tasks')) + array_sum(array_column($members, 'overdue_compliance'));

$checkedInToday = 0;
$notCheckedIn = 0;
if ($hasAttendance) {
    $checkedInToday = count(array_filter($todayAttendance, fn($a) => !empty($a['check_in'])));
    $notCheckedIn = $activeMemberCount - $checkedInToday - $onLeaveToday;
}

// Team stats
$teamStats = [];
foreach ($teams as $t) {
    $teamMembers = array_filter($members, fn($m) => ($m['team_name'] ?? '') === $t['name']);
    $teamStats[$t['id']] = [
        'count' => count($teamMembers),
        'pending' => array_sum(array_column($teamMembers, 'pending_tasks')),
        'overdue' => array_sum(array_column($teamMembers, 'overdue_tasks'))
    ];
}

// Edit member modal
$editMember = null;
if (isset($_GET['edit'])) {
    $editMember = dbFetchOne("SELECT * FROM users WHERE id=?", [(int)$_GET['edit']]);
    if ($editMember) {
        $r = dbFetchOne("SELECT role_id FROM user_roles WHERE user_id=? AND revoked_at IS NULL", [$editMember['id']]);
        $editMember['role_id'] = $r['role_id'] ?? null;
        try { 
            $tm = dbFetchOne("SELECT team_id FROM team_members WHERE user_id=? AND is_active=1", [$editMember['id']]); 
            $editMember['team_id'] = $tm['team_id'] ?? null; 
        } catch (Exception $e) {}
    }
}

// View member profile
$viewMember = null;
if (isset($_GET['view'])) {
    $viewMember = dbFetchOne("SELECT * FROM users WHERE id=?", [(int)$_GET['view']]);
    if ($viewMember) {
        $r = dbFetchOne("SELECT r.name, r.code FROM user_roles ur JOIN roles r ON ur.role_id = r.id WHERE ur.user_id=? AND ur.revoked_at IS NULL", [$viewMember['id']]);
        $viewMember['role_name'] = $r['name'] ?? null;
        $viewMember['role_code'] = $r['code'] ?? null;
        
        $viewMember['team_name'] = null;
        $viewMember['team_color'] = null;
        try { 
            $tm = dbFetchOne("SELECT t.name, t.color FROM team_members tm JOIN teams t ON tm.team_id = t.id WHERE tm.user_id=? AND tm.is_active=1", [$viewMember['id']]); 
            if ($tm) {
                $viewMember['team_name'] = $tm['name'];
                $viewMember['team_color'] = $tm['color'];
            }
        } catch (Exception $e) {}
        
        $viewMember['supervisor_name'] = null;
        $viewMember['supervisor_photo'] = null;
        if ($viewMember['supervisor_id']) {
            $sup = dbFetchOne("SELECT display_name, profile_photo FROM users WHERE id = ?", [$viewMember['supervisor_id']]);
            if ($sup) {
                $viewMember['supervisor_name'] = $sup['display_name'];
                $viewMember['supervisor_photo'] = $sup['profile_photo'];
            }
        }
        
        $viewMember['pending_tasks'] = dbFetchOne("SELECT COUNT(*) as cnt FROM service_requests WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')", [$viewMember['id'], $viewMember['id']])['cnt'] ?? 0;
        $viewMember['overdue_tasks'] = dbFetchOne("SELECT COUNT(*) as cnt FROM service_requests WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED') AND COALESCE(due_date, expected_completion) < CURDATE()", [$viewMember['id'], $viewMember['id']])['cnt'] ?? 0;
        $viewMember['completed_tasks'] = dbFetchOne("SELECT COUNT(*) as cnt FROM service_requests WHERE (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL AND status IN ('DONE','COMPLETED')", [$viewMember['id'], $viewMember['id']])['cnt'] ?? 0;
        $viewMember['leave_taken'] = dbFetchOne("SELECT COALESCE(SUM(total_days), 0) as days FROM leave_requests WHERE user_id = ? AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())", [$viewMember['id']])['days'] ?? 0;
        
        $viewMember['recent_leaves'] = dbFetchAll("
            SELECT lr.*, lt.name as leave_type, lt.color 
            FROM leave_requests lr 
            JOIN leave_types lt ON lr.leave_type_id = lt.id 
            WHERE lr.user_id = ? 
            ORDER BY lr.start_date DESC LIMIT 5
        ", [$viewMember['id']]) ?: [];
        
        // Get reportees (people who report to this person)
        $viewMember['reportees'] = dbFetchAll("
            SELECT id, display_name, profile_photo, status
            FROM users 
            WHERE supervisor_id = ? AND deleted_at IS NULL
            ORDER BY display_name
        ", [$viewMember['id']]) ?: [];
        
        // Leave balance
        $viewMember['leave_balance'] = [];
        if ($hasLeaveBalances) {
            $viewMember['leave_balance'] = dbFetchAll("
                SELECT lt.id, lt.name, lt.code, lt.color,
                       COALESCE(lb.allocated_days, lt.max_days, 12) + COALESCE(lb.carried_forward, 0) + COALESCE(lb.adjustment, 0) as total,
                       COALESCE((SELECT SUM(total_days) FROM leave_requests WHERE user_id = ? AND leave_type_id = lt.id AND status = 'APPROVED' AND YEAR(start_date) = YEAR(CURDATE())), 0) as used
                FROM leave_types lt
                LEFT JOIN leave_balances lb ON lt.id = lb.leave_type_id AND lb.user_id = ? AND lb.year = YEAR(CURDATE())
                WHERE lt.is_active = 1
            ", [$viewMember['id'], $viewMember['id']]) ?: [];
        }
        
        // Attendance this month
        $viewMember['monthly_attendance'] = null;
        if ($hasAttendance) {
            $viewMember['monthly_attendance'] = dbFetchOne("
                SELECT 
                    SUM(status IN ('PRESENT','LATE','WFH')) as present,
                    SUM(status = 'ABSENT') as absent,
                    SUM(status = 'LATE') as late,
                    SUM(status = 'ON_LEAVE') as on_leave,
                    SUM(COALESCE(work_hours, 0)) as total_hours
                FROM attendance
                WHERE user_id = ? AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE())
            ", [$viewMember['id']]);
        }
        
        // Performance
        $viewMember['performance'] = null;
        if ($hasPerformance) {
            $viewMember['performance'] = dbFetchOne("SELECT * FROM user_performance WHERE user_id = ? AND year = YEAR(CURDATE()) AND month = MONTH(CURDATE())", [$viewMember['id']]);
        }
    }
}

require_once 'includes/header.php';
?>

<style>
.avatar { width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 16px; object-fit: cover; flex-shrink: 0; }
.avatar-sm { width: 32px; height: 32px; font-size: 12px; }
.avatar-lg { width: 80px; height: 80px; font-size: 24px; }
.avatar-xl { width: 100px; height: 100px; font-size: 32px; }
.tab-btn { padding: .75rem 1.5rem; border-bottom: 3px solid transparent; font-weight: 500; transition: all 0.2s; }
.tab-btn:hover { background: #f3f4f6; }
.tab-btn.active { border-color: #3b82f6; color: #3b82f6; font-weight: 600; background: #eff6ff; }
.photo-upload { position: relative; width: 100px; height: 100px; border-radius: 50%; overflow: hidden; cursor: pointer; border: 3px dashed #d1d5db; transition: all 0.2s; }
.photo-upload:hover { border-color: #3b82f6; transform: scale(1.05); }
.photo-upload img { width: 100%; height: 100%; object-fit: cover; }
.photo-upload input { position: absolute; opacity: 0; width: 100%; height: 100%; cursor: pointer; }
.photo-upload .placeholder { display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; color: #9ca3af; }

.member-card { transition: all 0.2s ease; border: 2px solid #e5e7eb; border-radius: 12px; }
.member-card:hover { transform: translateY(-2px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
.member-card.active-card { border-color: #10b981; border-left: 5px solid #10b981; background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%); }
.member-card.active-card:hover { border-color: #059669; box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.2); }
.member-card.inactive-card { border-color: #ef4444; border-left: 5px solid #ef4444; background: linear-gradient(135deg, #fef2f2 0%, #fff5f5 100%); opacity: 0.9; }
.member-card.inactive-card:hover { border-color: #dc2626; box-shadow: 0 10px 25px -5px rgba(239, 68, 68, 0.2); }

.workload-bar { height: 6px; border-radius: 3px; background: #e5e7eb; overflow: hidden; }
.workload-bar .fill { height: 100%; border-radius: 3px; transition: width 0.3s ease; }
.workload-low { background: linear-gradient(90deg, #10b981, #34d399); }
.workload-medium { background: linear-gradient(90deg, #f59e0b, #fbbf24); }
.workload-high { background: linear-gradient(90deg, #ef4444, #f87171); }

.status-dot { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
.status-active { background: #10b981; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2); }
.status-inactive { background: #ef4444; }
.status-on-leave { background: #f59e0b; animation: pulse 2s infinite; }

@keyframes pulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4); }
    50% { box-shadow: 0 0 0 8px rgba(245, 158, 11, 0); }
}

.team-card { transition: all 0.2s; }
.team-card:hover { transform: scale(1.02); }
.quick-action { opacity: 0; transition: opacity 0.2s; }
.member-card:hover .quick-action { opacity: 1; }

.score-badge { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; font-weight: bold; font-size: 14px; }
.score-excellent { background: #dcfce7; color: #166534; }
.score-good { background: #dbeafe; color: #1e40af; }
.score-average { background: #fef3c7; color: #92400e; }
.score-poor { background: #fee2e2; color: #991b1b; }

.attendance-cell { width: 28px; height: 28px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 600; }
.att-present { background: #dcfce7; color: #166534; }
.att-absent { background: #fee2e2; color: #991b1b; }
.att-late { background: #fef3c7; color: #92400e; }
.att-leave { background: #dbeafe; color: #1e40af; }
.att-wfh { background: #f3e8ff; color: #7c3aed; }
.att-none { background: #f3f4f6; color: #9ca3af; }

.hierarchy-line { border-left: 2px solid #e5e7eb; margin-left: 24px; padding-left: 24px; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-users text-blue-600 mr-2"></i>Team Management</h1>
        <p class="text-gray-500 text-sm">Members, Leave, Attendance & Performance</p>
    </div>
    <div class="flex gap-2">
        <?php if ($pendingLeaveCount > 0): ?>
        <a href="leave_management.php" class="btn btn-secondary relative">
            <i class="fas fa-clipboard-check mr-2"></i>Approvals
            <span class="absolute -top-2 -right-2 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center"><?= $pendingLeaveCount ?></span>
        </a>
        <?php endif; ?>
        <button onclick="openMemberModal()" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Member</button>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-3 mb-6">
    <div class="card p-3 text-center bg-gradient-to-br from-blue-50 to-white">
        <p class="text-2xl font-bold text-blue-600"><?= $totalMembers ?></p>
        <p class="text-xs text-gray-500">Total</p>
    </div>
    <div class="card p-3 text-center bg-gradient-to-br from-green-50 to-white border-green-200">
        <p class="text-2xl font-bold text-green-600"><?= $activeMemberCount ?></p>
        <p class="text-xs text-gray-500">Active</p>
    </div>
    <div class="card p-3 text-center bg-gradient-to-br from-red-50 to-white border-red-200">
        <p class="text-2xl font-bold text-red-600"><?= $inactiveMemberCount ?></p>
        <p class="text-xs text-gray-500">Inactive</p>
    </div>
    <div class="card p-3 text-center bg-gradient-to-br from-amber-50 to-white">
        <p class="text-2xl font-bold text-amber-600"><?= $onLeaveToday ?></p>
        <p class="text-xs text-gray-500">On Leave</p>
    </div>
    <?php if ($hasAttendance): ?>
    <div class="card p-3 text-center bg-gradient-to-br from-cyan-50 to-white">
        <p class="text-2xl font-bold text-cyan-600"><?= $checkedInToday ?></p>
        <p class="text-xs text-gray-500">Checked In</p>
    </div>
    <?php endif; ?>
    <div class="card p-3 text-center bg-gradient-to-br from-red-50 to-white">
        <p class="text-2xl font-bold text-red-600"><?= $totalOverdue ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </div>
    <div class="card p-3 text-center bg-gradient-to-br from-purple-50 to-white">
        <p class="text-2xl font-bold text-purple-600"><?= count($upcomingBirthdays) ?></p>
        <p class="text-xs text-gray-500">🎂 Soon</p>
    </div>
    <div class="card p-3 text-center bg-gradient-to-br from-teal-50 to-white">
        <p class="text-2xl font-bold text-teal-600"><?= count($teams) ?></p>
        <p class="text-xs text-gray-500">Teams</p>
    </div>
</div>

<?php if ($errors): ?>
<div class="card p-4 bg-red-50 border border-red-200 mb-6">
    <ul class="text-sm text-red-700 space-y-1">
        <?php foreach ($errors as $e): ?><li><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<?php if (!$hasLeaveBalances || !$hasAttendance || !$hasPerformance): ?>
<div class="card p-4 bg-blue-50 border border-blue-200 mb-6">
    <div class="flex items-start gap-3">
        <i class="fas fa-info-circle text-blue-500 text-xl mt-0.5"></i>
        <div>
            <p class="font-medium text-blue-800">Additional Features Available</p>
            <p class="text-sm text-blue-600 mt-1">Run the migration SQL to enable:</p>
            <ul class="text-sm text-blue-600 mt-1 list-disc list-inside">
                <?php if (!$hasLeaveBalances): ?><li>Leave Balance Tracking</li><?php endif; ?>
                <?php if (!$hasAttendance): ?><li>Attendance Management</li><?php endif; ?>
                <?php if (!$hasPerformance): ?><li>Performance Analytics</li><?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Alerts -->
<?php if ($todayOnLeave || $upcomingBirthdays): ?>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <?php if ($todayOnLeave): ?>
    <div class="card p-4 bg-gradient-to-r from-amber-50 to-orange-50 border-l-4 border-amber-500">
        <h4 class="font-semibold text-amber-800 mb-3"><i class="fas fa-plane-departure mr-2"></i>On Leave Today (<?= count($todayOnLeave) ?>)</h4>
        <div class="flex flex-wrap gap-3">
            <?php foreach ($todayOnLeave as $ol): ?>
            <div class="flex items-center gap-2 bg-white/80 rounded-full px-3 py-1.5 shadow-sm">
                <?php if (!empty($ol['profile_photo']) && file_exists($ol['profile_photo'])): ?>
                <img src="<?= $ol['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                <?php else: ?>
                <div class="avatar-sm bg-amber-200 text-amber-700 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($ol['display_name'],0,1)) ?></div>
                <?php endif; ?>
                <div>
                    <span class="font-medium text-sm"><?= htmlspecialchars($ol['display_name']) ?></span>
                    <span class="text-xs text-amber-600 ml-1">(<?= $ol['leave_type'] ?>)</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if ($upcomingBirthdays): ?>
    <div class="card p-4 bg-gradient-to-r from-purple-50 to-pink-50 border-l-4 border-purple-500">
        <h4 class="font-semibold text-purple-800 mb-3"><i class="fas fa-birthday-cake mr-2"></i>Upcoming Birthdays</h4>
        <div class="flex flex-wrap gap-2">
            <?php foreach ($upcomingBirthdays as $bd): ?>
            <div class="flex items-center gap-2 bg-white/80 rounded-full px-3 py-1.5 shadow-sm <?= $bd['days_until'] == 0 ? 'ring-2 ring-purple-400 animate-pulse' : '' ?>">
                <?php if (!empty($bd['profile_photo']) && file_exists($bd['profile_photo'])): ?>
                <img src="<?= $bd['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                <?php else: ?>
                <div class="avatar-sm bg-purple-200 text-purple-700 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($bd['display_name'],0,1)) ?></div>
                <?php endif; ?>
                <div>
                    <span class="font-medium text-sm"><?= htmlspecialchars($bd['display_name']) ?></span>
                    <span class="text-xs text-purple-600 ml-1">
                        <?= $bd['days_until'] == 0 ? '🎉 Today!' : "({$bd['birthday']})" ?>
                    </span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Tabs -->
<div class="border-b mb-6 bg-white rounded-t-xl overflow-x-auto">
    <div class="flex min-w-max">
        <a href="?tab=members" class="tab-btn <?= $activeTab === 'members' ? 'active' : '' ?>">
            <i class="fas fa-users mr-2"></i>Members
        </a>
        <a href="?tab=leave" class="tab-btn <?= $activeTab === 'leave' ? 'active' : '' ?>">
            <i class="fas fa-calendar-alt mr-2"></i>Leave
        </a>
        <?php if ($hasAttendance): ?>
        <a href="?tab=attendance" class="tab-btn <?= $activeTab === 'attendance' ? 'active' : '' ?>">
            <i class="fas fa-clock mr-2"></i>Attendance
        </a>
        <?php endif; ?>
        <?php if ($hasPerformance): ?>
        <a href="?tab=performance" class="tab-btn <?= $activeTab === 'performance' ? 'active' : '' ?>">
            <i class="fas fa-chart-line mr-2"></i>Performance
        </a>
        <?php endif; ?>
        <a href="?tab=teams" class="tab-btn <?= $activeTab === 'teams' ? 'active' : '' ?>">
            <i class="fas fa-sitemap mr-2"></i>Teams
        </a>
        <a href="?tab=hierarchy" class="tab-btn <?= $activeTab === 'hierarchy' ? 'active' : '' ?>">
            <i class="fas fa-project-diagram mr-2"></i>Hierarchy
        </a>
    </div>
</div>

<?php // ============================================================
// MEMBERS TAB
// ============================================================ ?>
<?php if ($activeTab === 'members'): ?>

<!-- Search & Filters -->
<div class="card mb-6">
    <form method="GET" class="p-4">
        <input type="hidden" name="tab" value="members">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
            <div class="md:col-span-2">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" name="search" value="<?= htmlspecialchars($filterSearch) ?>" 
                           placeholder="Search name, email, mobile..." 
                           class="form-input pl-10 w-full">
                </div>
            </div>
            <div>
                <select name="team" class="form-select w-full">
                    <option value="">All Teams</option>
                    <?php foreach ($teams as $t): ?>
                    <option value="<?= $t['id'] ?>" <?= $filterTeam == $t['id'] ? 'selected' : '' ?>><?= htmlspecialchars($t['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <select name="role" class="form-select w-full">
                    <option value="">All Roles</option>
                    <?php foreach ($roles as $r): ?>
                    <option value="<?= $r['id'] ?>" <?= $filterRole == $r['id'] ? 'selected' : '' ?>><?= htmlspecialchars($r['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <select name="status" class="form-select w-full">
                    <option value="">All Status</option>
                    <option value="ACTIVE" <?= $filterStatus === 'ACTIVE' ? 'selected' : '' ?>>Active Only</option>
                    <option value="INACTIVE" <?= $filterStatus === 'INACTIVE' ? 'selected' : '' ?>>Inactive Only</option>
                </select>
            </div>
            <div class="flex gap-2">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-filter mr-1"></i>Filter</button>
                <a href="?tab=members" class="btn btn-secondary"><i class="fas fa-times"></i></a>
            </div>
        </div>
        
        <div class="flex items-center gap-4 mt-3 pt-3 border-t">
            <span class="text-sm text-gray-500">Sort:</span>
            <?php 
            $baseUrl = "?tab=members" . ($filterSearch ? "&search=$filterSearch" : '') . ($filterTeam ? "&team=$filterTeam" : '') . ($filterRole ? "&role=$filterRole" : '') . ($filterStatus ? "&status=$filterStatus" : '');
            ?>
            <a href="<?= $baseUrl ?>&sort=name" class="text-sm <?= $sortBy === 'name' ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' ?>">
                <i class="fas fa-sort-alpha-down mr-1"></i>Name
            </a>
            <a href="<?= $baseUrl ?>&sort=workload" class="text-sm <?= $sortBy === 'workload' ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' ?>">
                <i class="fas fa-tasks mr-1"></i>Workload
            </a>
            <a href="<?= $baseUrl ?>&sort=joined" class="text-sm <?= $sortBy === 'joined' ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' ?>">
                <i class="fas fa-calendar mr-1"></i>Joined
            </a>
        </div>
    </form>
</div>

<?php if (empty($members)): ?>
<div class="card p-12 text-center">
    <i class="fas fa-users text-6xl text-gray-200 mb-4"></i>
    <p class="text-gray-500 text-lg">No team members found</p>
    <button onclick="openMemberModal()" class="btn btn-primary mt-4"><i class="fas fa-plus mr-2"></i>Add Member</button>
</div>
<?php else: ?>

<?php
// Helper function to render member card
function renderMemberCard($m, $todayOnLeave, $hasAttendance, $hasLeaveBalances) {
    $colors = ['blue','green','purple','amber','teal','indigo','pink','cyan'];
    $c = $colors[$m['id'] % 8];
    $isOnLeave = false;
    foreach ($todayOnLeave as $ol) if ($ol['id'] == $m['id']) { $isOnLeave = true; break; }
    $isActive = $m['status'] === 'ACTIVE';
    
    $maxWorkload = 20;
    $workloadPercent = min(100, round(($m['workload_score'] / $maxWorkload) * 100));
    $workloadClass = $workloadPercent < 40 ? 'workload-low' : ($workloadPercent < 70 ? 'workload-medium' : 'workload-high');
    $workloadLabel = $workloadPercent < 40 ? 'Low' : ($workloadPercent < 70 ? 'Moderate' : 'High');
    
    $todayCheckedIn = $m['today_attendance']['check_in'] ?? null;
?>
<div class="member-card card p-4 relative <?= $isActive ? 'active-card' : 'inactive-card' ?>">
    <!-- Status Badge -->
    <?php if (!$isActive): ?>
    <div class="absolute top-2 left-2 px-2 py-0.5 bg-red-500 text-white text-xs font-bold rounded">INACTIVE</div>
    <?php endif; ?>
    
    <!-- Quick Actions -->
    <div class="quick-action absolute top-2 right-2 flex gap-1">
        <a href="?view=<?= $m['id'] ?>" class="p-1.5 bg-blue-100 text-blue-600 rounded hover:bg-blue-200" title="View"><i class="fas fa-eye text-xs"></i></a>
        <a href="?edit=<?= $m['id'] ?>" class="p-1.5 bg-gray-100 text-gray-600 rounded hover:bg-gray-200" title="Edit"><i class="fas fa-edit text-xs"></i></a>
        <a href="user_tasks.php?user_id=<?= $m['id'] ?>" class="p-1.5 bg-purple-100 text-purple-600 rounded hover:bg-purple-200" title="Tasks"><i class="fas fa-tasks text-xs"></i></a>
    </div>
    
    <div class="flex items-start gap-3 <?= !$isActive ? 'mt-4' : '' ?>">
        <div class="relative">
            <?php if (!empty($m['profile_photo']) && file_exists($m['profile_photo'])): ?>
            <img src="<?= $m['profile_photo'] ?>" class="avatar object-cover rounded-full <?= !$isActive ? 'grayscale' : '' ?>" alt="">
            <?php else: ?>
            <div class="avatar bg-<?= $c ?>-100 text-<?= $c ?>-600 rounded-full flex items-center justify-center <?= !$isActive ? 'grayscale' : '' ?>"><?= strtoupper(substr($m['display_name'],0,2)) ?></div>
            <?php endif; ?>
            <span class="status-dot absolute -bottom-0.5 -right-0.5 <?= !$isActive ? 'status-inactive' : ($isOnLeave ? 'status-on-leave' : 'status-active') ?>" title="<?= !$isActive ? 'Inactive' : ($isOnLeave ? 'On Leave' : 'Active') ?>"></span>
        </div>
        
        <div class="flex-1 min-w-0">
            <h3 class="font-semibold text-gray-900 truncate <?= !$isActive ? 'text-gray-500' : '' ?>"><?= htmlspecialchars($m['display_name']) ?></h3>
            <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($m['mobile']) ?></p>
            
            <div class="flex flex-wrap gap-1 mt-2">
                <?php if (!empty($m['role_name'])): 
                    $roleColor = match($m['role_code'] ?? '') {
                        'ADMIN' => 'red', 'MANAGER' => 'purple', 'REVIEWER' => 'indigo', default => 'blue'
                    };
                ?>
                <span class="px-2 py-0.5 bg-<?= $roleColor ?>-100 text-<?= $roleColor ?>-700 rounded text-xs font-medium"><?= $m['role_name'] ?></span>
                <?php endif; ?>
                <?php if (!empty($m['team_name'])): ?>
                <span class="px-2 py-0.5 bg-<?= $m['team_color'] ?? 'gray' ?>-100 text-<?= $m['team_color'] ?? 'gray' ?>-700 rounded text-xs"><?= $m['team_name'] ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if ($isActive): ?>
    <!-- Workload & Stats -->
    <div class="mt-4 pt-3 border-t">
        <div class="flex items-center justify-between text-xs mb-1">
            <span class="text-gray-500">Workload</span>
            <span class="font-medium <?= $workloadPercent >= 70 ? 'text-red-600' : ($workloadPercent >= 40 ? 'text-amber-600' : 'text-green-600') ?>"><?= $workloadLabel ?></span>
        </div>
        <div class="workload-bar">
            <div class="fill <?= $workloadClass ?>" style="width: <?= $workloadPercent ?>%"></div>
        </div>
        
        <div class="grid grid-cols-3 gap-2 mt-3 text-center">
            <div class="bg-blue-50 rounded p-1.5">
                <p class="text-sm font-bold text-blue-600"><?= $m['pending_tasks'] ?? 0 ?></p>
                <p class="text-xs text-gray-500">Tasks</p>
            </div>
            <div class="bg-purple-50 rounded p-1.5">
                <p class="text-sm font-bold text-purple-600"><?= $m['pending_compliance'] ?? 0 ?></p>
                <p class="text-xs text-gray-500">Compliance</p>
            </div>
            <div class="bg-red-50 rounded p-1.5">
                <p class="text-sm font-bold text-red-600"><?= ($m['overdue_tasks'] ?? 0) + ($m['overdue_compliance'] ?? 0) ?></p>
                <p class="text-xs text-gray-500">Overdue</p>
            </div>
        </div>
    </div>
    
    <!-- Attendance Status -->
    <?php if ($hasAttendance): ?>
    <div class="mt-3 pt-3 border-t flex items-center justify-between text-xs">
        <span class="text-gray-500">Today:</span>
        <?php if ($isOnLeave): ?>
        <span class="px-2 py-0.5 bg-amber-100 text-amber-700 rounded">On Leave</span>
        <?php elseif ($todayCheckedIn): ?>
        <span class="px-2 py-0.5 bg-green-100 text-green-700 rounded"><i class="fas fa-check mr-1"></i><?= date('h:i A', strtotime($todayCheckedIn)) ?></span>
        <?php else: ?>
        <span class="px-2 py-0.5 bg-gray-100 text-gray-600 rounded">Not checked in</span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <!-- Leave Balance -->
    <?php if ($hasLeaveBalances && !empty($m['leave_balance'])): ?>
    <div class="mt-2 flex flex-wrap gap-1">
        <?php foreach ($m['leave_balance'] as $lb): 
            $remaining = ($lb['total'] ?? 0) - ($lb['used'] ?? 0);
        ?>
        <span class="text-xs px-1.5 py-0.5 rounded <?= $remaining <= 2 ? 'bg-red-100 text-red-700' : 'bg-gray-100 text-gray-600' ?>" title="<?= $lb['name'] ?? '' ?>: <?= $remaining ?>/<?= $lb['total'] ?? 0 ?>">
            <?= $lb['code'] ?? '' ?>: <?= $remaining ?>
        </span>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    
    <?php if (!empty($m['supervisor_name'])): ?>
    <p class="text-xs text-gray-400 mt-2 truncate">
        <i class="fas fa-user-tie mr-1"></i><?= htmlspecialchars($m['supervisor_name']) ?>
    </p>
    <?php endif; ?>
</div>
<?php
}
?>

<!-- Active Members Section -->
<?php if (!empty($activeMembers)): ?>
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4 p-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border border-green-200">
        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center">
            <i class="fas fa-user-check"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-green-800">Active Members</h3>
            <p class="text-sm text-green-600"><?= count($activeMembers) ?> team members currently active</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    <?php foreach ($activeMembers as $m): ?>
        <?php renderMemberCard($m, $todayOnLeave, $hasAttendance, $hasLeaveBalances); ?>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- Inactive Members Section -->
<?php if (!empty($inactiveMembers) && $filterStatus !== 'ACTIVE'): ?>
<div class="mb-8">
    <div class="flex items-center gap-3 mb-4 p-3 bg-gradient-to-r from-red-50 to-rose-50 rounded-lg border border-red-200">
        <div class="w-10 h-10 bg-red-500 text-white rounded-full flex items-center justify-center">
            <i class="fas fa-user-times"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-red-800">Inactive Members</h3>
            <p class="text-sm text-red-600"><?= count($inactiveMembers) ?> team members deactivated</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    <?php foreach ($inactiveMembers as $m): ?>
        <?php renderMemberCard($m, $todayOnLeave, $hasAttendance, $hasLeaveBalances); ?>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>
<?php endif; // End Members Tab ?>

<?php // ============================================================
// REASSIGN TASKS TAB (shown when deactivating employee with pending tasks)
// ============================================================ ?>
<?php if ($activeTab === 'reassign'): 
    $reassignUserId = (int)($_GET['user_id'] ?? $_SESSION['deactivate_user_id'] ?? 0);
    $reassignUser = dbFetchOne("SELECT * FROM users WHERE id = ?", [$reassignUserId]);
    
    $pendingTasksCount = $_SESSION['deactivate_pending_tasks'] ?? 0;
    $pendingComplianceCount = $_SESSION['deactivate_pending_compliance'] ?? 0;
    
    // Get potential assignees (active users, excluding the one being deactivated)
    $potentialAssignees = dbFetchAll("
        SELECT id, display_name, profile_photo 
        FROM users 
        WHERE deleted_at IS NULL AND status = 'ACTIVE' AND user_type = 'INTERNAL' AND id != ?
        ORDER BY display_name
    ", [$reassignUserId]) ?: [];
?>
<div class="max-w-2xl mx-auto">
    <div class="card">
        <div class="p-4 border-b bg-gradient-to-r from-red-50 to-orange-50">
            <h3 class="text-lg font-bold text-red-800"><i class="fas fa-exclamation-triangle mr-2"></i>Task Reassignment Required</h3>
        </div>
        
        <div class="p-6">
            <div class="bg-amber-50 border border-amber-200 rounded-lg p-4 mb-6">
                <p class="text-amber-800">
                    <strong><?= htmlspecialchars($reassignUser['display_name'] ?? 'This user') ?></strong> has pending work that must be reassigned before deactivation:
                </p>
                <ul class="mt-2 text-amber-700 text-sm list-disc list-inside">
                    <?php if ($pendingTasksCount > 0): ?>
                    <li><strong><?= $pendingTasksCount ?></strong> pending service requests</li>
                    <?php endif; ?>
                    <?php if ($pendingComplianceCount > 0): ?>
                    <li><strong><?= $pendingComplianceCount ?></strong> pending compliance tasks</li>
                    <?php endif; ?>
                </ul>
            </div>
            
            <form method="POST">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="reassign_tasks">
                <input type="hidden" name="from_user_id" value="<?= $reassignUserId ?>">
                
                <div class="mb-6">
                    <label class="form-label">Reassign all tasks to: <span class="text-red-500">*</span></label>
                    <select name="to_user_id" class="form-select w-full" required>
                        <option value="">Select team member...</option>
                        <?php foreach ($potentialAssignees as $pa): ?>
                        <option value="<?= $pa['id'] ?>"><?= htmlspecialchars($pa['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">All pending tasks will be transferred to this person</p>
                </div>
                
                <div class="space-y-3 mb-6">
                    <?php if ($pendingTasksCount > 0): ?>
                    <label class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg cursor-pointer">
                        <input type="checkbox" name="reassign_tasks" checked class="form-checkbox">
                        <div>
                            <span class="font-medium">Service Requests</span>
                            <span class="text-sm text-gray-500">(<?= $pendingTasksCount ?> tasks)</span>
                        </div>
                    </label>
                    <?php endif; ?>
                    
                    <?php if ($pendingComplianceCount > 0): ?>
                    <label class="flex items-center gap-3 p-3 bg-purple-50 rounded-lg cursor-pointer">
                        <input type="checkbox" name="reassign_compliance" checked class="form-checkbox">
                        <div>
                            <span class="font-medium">Compliance Tasks</span>
                            <span class="text-sm text-gray-500">(<?= $pendingComplianceCount ?> tasks)</span>
                        </div>
                    </label>
                    <?php endif; ?>
                </div>
                
                <div class="flex gap-4">
                    <button type="submit" class="btn btn-primary flex-1">
                        <i class="fas fa-exchange-alt mr-2"></i>Reassign & Deactivate
                    </button>
                    <a href="team.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>

<?php // ============================================================
// LEAVE TAB
// ============================================================ ?>
<?php if ($activeTab === 'leave'): ?>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Record Leave Form -->
    <div class="space-y-6">
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-blue-50 to-indigo-50">
                <h3 class="font-semibold text-blue-800"><i class="fas fa-calendar-plus mr-2"></i>Record Leave</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="apply_leave">
                
                <div>
                    <label class="form-label">Team Member <span class="text-red-500">*</span></label>
                    <select name="user_id" id="leaveUserId" class="form-select w-full" required onchange="updateLeaveBalance()">
                        <option value="">Select member...</option>
                        <?php foreach ($activeMembers as $m): ?>
                        <option value="<?= $m['id'] ?>" data-balance='<?= json_encode($m['leave_balance'] ?? []) ?>'><?= htmlspecialchars($m['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <?php if ($hasLeaveBalances): ?>
                <div id="leaveBalanceDisplay" class="hidden p-3 bg-gray-50 rounded-lg">
                    <p class="text-xs text-gray-500 mb-2">Available Balance:</p>
                    <div id="balanceItems" class="flex flex-wrap gap-2"></div>
                </div>
                <?php endif; ?>
                
                <div>
                    <label class="form-label">Leave Type <span class="text-red-500">*</span></label>
                    <select name="leave_type_id" class="form-select w-full" required>
                        <option value="">Select type...</option>
                        <?php foreach ($leaveTypes as $lt): ?>
                        <option value="<?= $lt['id'] ?>"><?= htmlspecialchars($lt['name']) ?> (<?= $lt['code'] ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="form-label">From <span class="text-red-500">*</span></label>
                        <input type="date" name="start_date" class="form-input w-full" required>
                    </div>
                    <div>
                        <label class="form-label">To <span class="text-red-500">*</span></label>
                        <input type="date" name="end_date" class="form-input w-full" required>
                    </div>
                </div>
                
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="is_half_day" class="form-checkbox">
                    <span class="text-sm">Half Day</span>
                </label>
                
                <div>
                    <label class="form-label">Backup Person</label>
                    <select name="backup_person_id" class="form-select w-full">
                        <option value="">None</option>
                        <?php foreach ($activeMembers as $m): ?>
                        <option value="<?= $m['id'] ?>"><?= htmlspecialchars($m['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Reason</label>
                    <textarea name="reason" class="form-input w-full" rows="2"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save mr-2"></i>Record Leave</button>
            </form>
        </div>
        
        <?php if ($hasLeaveBalances && $isAdmin): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-amber-50 to-orange-50">
                <h3 class="font-semibold text-amber-800"><i class="fas fa-balance-scale mr-2"></i>Adjust Balance</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="adjust_balance">
                
                <div>
                    <label class="form-label">Member</label>
                    <select name="balance_user_id" class="form-select w-full" required>
                        <option value="">Select...</option>
                        <?php foreach ($activeMembers as $m): ?>
                        <option value="<?= $m['id'] ?>"><?= htmlspecialchars($m['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Leave Type</label>
                    <select name="balance_leave_type_id" class="form-select w-full" required>
                        <?php foreach ($leaveTypes as $lt): ?>
                        <option value="<?= $lt['id'] ?>"><?= $lt['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Adjustment (+ or -)</label>
                    <input type="number" name="adjustment" step="0.5" class="form-input w-full" required placeholder="e.g. 2 or -1">
                </div>
                
                <div>
                    <label class="form-label">Reason</label>
                    <input type="text" name="adjustment_reason" class="form-input w-full" required placeholder="e.g. Bonus leave">
                </div>
                
                <button type="submit" class="btn btn-secondary w-full"><i class="fas fa-plus-minus mr-2"></i>Adjust</button>
            </form>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Leave Balance & History -->
    <div class="lg:col-span-2 space-y-6">
        
        <?php if ($hasLeaveBalances): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-green-50 to-emerald-50">
                <h3 class="font-semibold text-green-800"><i class="fas fa-chart-pie mr-2"></i>Team Leave Balance (<?= date('Y') ?>)</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Member</th>
                            <?php foreach ($leaveTypes as $lt): ?>
                            <th class="p-3 text-center" title="<?= $lt['name'] ?>">
                                <span class="px-2 py-0.5 rounded text-xs" style="background: <?= $lt['color'] ?>20; color: <?= $lt['color'] ?>"><?= $lt['code'] ?></span>
                            </th>
                            <?php endforeach; ?>
                            <th class="p-3 text-center">Used</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($activeMembers as $m): 
                            $totalUsed = 0;
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3">
                                <div class="flex items-center gap-2">
                                    <?php if (!empty($m['profile_photo']) && file_exists($m['profile_photo'])): ?>
                                    <img src="<?= $m['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                                    <?php else: ?>
                                    <div class="avatar-sm bg-gray-200 text-gray-600 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($m['display_name'],0,1)) ?></div>
                                    <?php endif; ?>
                                    <span class="font-medium"><?= htmlspecialchars($m['display_name']) ?></span>
                                </div>
                            </td>
                            <?php foreach ($leaveTypes as $lt): 
                                $balance = null;
                                foreach ($m['leave_balance'] ?? [] as $lb) {
                                    if (($lb['id'] ?? 0) == $lt['id']) { $balance = $lb; break; }
                                }
                                $total = $balance['total'] ?? $lt['max_days'] ?? 12;
                                $used = $balance['used'] ?? 0;
                                $remaining = $total - $used;
                                $totalUsed += $used;
                            ?>
                            <td class="p-3 text-center">
                                <span class="<?= $remaining <= 2 ? 'text-red-600 font-bold' : ($remaining <= 5 ? 'text-amber-600' : 'text-gray-700') ?>">
                                    <?= $remaining ?>
                                </span>
                                <span class="text-gray-400">/<?= $total ?></span>
                            </td>
                            <?php endforeach; ?>
                            <td class="p-3 text-center font-semibold text-blue-600"><?= $totalUsed ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Leave History -->
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-purple-50 to-pink-50 flex items-center justify-between">
                <h3 class="font-semibold text-purple-800"><i class="fas fa-history mr-2"></i>Recent Leaves</h3>
                <a href="leave_management.php" class="text-purple-600 text-sm hover:underline">Manage →</a>
            </div>
            
            <?php if (empty($leaveRequests)): ?>
            <div class="p-8 text-center text-gray-400">
                <i class="fas fa-calendar-check text-4xl mb-2"></i>
                <p>No leave records</p>
            </div>
            <?php else: ?>
            <div class="divide-y max-h-96 overflow-y-auto">
                <?php foreach ($leaveRequests as $lr): 
                    $statusColor = match($lr['status']) {
                        'APPROVED' => 'green', 'REJECTED' => 'red', 'CANCELLED' => 'gray', default => 'amber'
                    };
                ?>
                <div class="p-3 hover:bg-gray-50">
                    <div class="flex items-center gap-3">
                        <?php if (!empty($lr['profile_photo']) && file_exists($lr['profile_photo'])): ?>
                        <img src="<?= $lr['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                        <?php else: ?>
                        <div class="avatar-sm bg-gray-200 text-gray-600 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($lr['display_name'],0,1)) ?></div>
                        <?php endif; ?>
                        
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="font-medium text-sm"><?= htmlspecialchars($lr['display_name']) ?></span>
                                <span class="px-2 py-0.5 rounded text-xs" style="background: <?= $lr['color'] ?>20; color: <?= $lr['color'] ?>"><?= $lr['leave_type'] ?></span>
                                <span class="px-2 py-0.5 bg-<?= $statusColor ?>-100 text-<?= $statusColor ?>-700 rounded text-xs"><?= $lr['status'] ?></span>
                            </div>
                            <p class="text-xs text-gray-500 mt-0.5">
                                <?= date('d M', strtotime($lr['start_date'])) ?><?= $lr['start_date'] !== $lr['end_date'] ? ' - ' . date('d M', strtotime($lr['end_date'])) : '' ?>
                                (<?= $lr['total_days'] ?>d)
                            </p>
                        </div>
                        
                        <span class="text-xs text-gray-400"><?= date('d M', strtotime($lr['created_at'])) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
function updateLeaveBalance() {
    const select = document.getElementById('leaveUserId');
    const display = document.getElementById('leaveBalanceDisplay');
    const items = document.getElementById('balanceItems');
    
    if (!display || !items) return;
    
    const option = select.options[select.selectedIndex];
    const balance = option && option.dataset.balance ? JSON.parse(option.dataset.balance) : [];
    
    if (balance.length > 0) {
        display.classList.remove('hidden');
        items.innerHTML = balance.map(b => {
            const remaining = (b.total || 0) - (b.used || 0);
            const colorClass = remaining <= 2 ? 'bg-red-100 text-red-700' : (remaining <= 5 ? 'bg-amber-100 text-amber-700' : 'bg-green-100 text-green-700');
            return `<span class="px-2 py-1 ${colorClass} rounded text-xs font-medium">${b.code || ''}: ${remaining}/${b.total || 0}</span>`;
        }).join('');
    } else {
        display.classList.add('hidden');
    }
}
</script>
<?php endif; // End Leave Tab ?>

<?php // ============================================================
// ATTENDANCE TAB
// ============================================================ ?>
<?php if ($activeTab === 'attendance' && $hasAttendance): ?>
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    
    <!-- Left Sidebar -->
    <div class="space-y-6">
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-cyan-50 to-blue-50">
                <h3 class="font-semibold text-cyan-800"><i class="fas fa-user-clock mr-2"></i>Record Attendance</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="record_attendance">
                
                <div>
                    <label class="form-label">Member</label>
                    <select name="att_user_id" class="form-select w-full" required>
                        <option value="">Select...</option>
                        <?php foreach ($activeMembers as $m): ?>
                        <option value="<?= $m['id'] ?>"><?= htmlspecialchars($m['display_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Date</label>
                    <input type="date" name="att_date" class="form-input w-full" value="<?= date('Y-m-d') ?>" required>
                </div>
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="form-label">Check In</label>
                        <input type="time" name="check_in" class="form-input w-full">
                    </div>
                    <div>
                        <label class="form-label">Check Out</label>
                        <input type="time" name="check_out" class="form-input w-full">
                    </div>
                </div>
                
                <div>
                    <label class="form-label">Status</label>
                    <select name="att_status" class="form-select w-full">
                        <option value="PRESENT">Present</option>
                        <option value="ABSENT">Absent</option>
                        <option value="HALF_DAY">Half Day</option>
                        <option value="LATE">Late</option>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Remarks</label>
                    <input type="text" name="att_remarks" class="form-input w-full" placeholder="Optional">
                </div>
                
                <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save mr-2"></i>Save</button>
            </form>
        </div>
        
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-amber-50 to-orange-50">
                <h3 class="font-semibold text-amber-800"><i class="fas fa-users mr-2"></i>Bulk Update</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="bulk_attendance">
                
                <div>
                    <label class="form-label">Date</label>
                    <input type="date" name="bulk_date" class="form-input w-full" value="<?= $viewDate ?>" required>
                </div>
                
                <div>
                    <label class="form-label">Status</label>
                    <select name="bulk_status" class="form-select w-full" required>
                        <option value="PRESENT">Present</option>
                        <option value="ABSENT">Absent</option>
                        <option value="HOLIDAY">Holiday</option>
                    </select>
                </div>
                
                <div>
                    <label class="form-label">Select Members</label>
                    <div class="max-h-40 overflow-y-auto border rounded p-2 space-y-1">
                        <?php foreach ($activeMembers as $m): ?>
                        <label class="flex items-center gap-2 text-sm">
                            <input type="checkbox" name="bulk_users[]" value="<?= $m['id'] ?>">
                            <?= htmlspecialchars($m['display_name']) ?>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-secondary w-full"><i class="fas fa-check-double mr-2"></i>Apply</button>
            </form>
        </div>
        
        <?php if ($hasHolidays && $isAdmin): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-pink-50 to-red-50">
                <h3 class="font-semibold text-pink-800 holiday-form-title"><i class="fas fa-calendar-plus mr-2"></i>Add Holiday</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="add_holiday">
                <input type="hidden" name="holiday_id" value="">
                
                <div>
                    <label class="form-label">Date</label>
                    <input type="date" name="holiday_date" class="form-input w-full" required value="<?= $viewYear ?>-01-01">
                </div>
                
                <div>
                    <label class="form-label">Holiday Name</label>
                    <input type="text" name="holiday_name" class="form-input w-full" required placeholder="e.g. Diwali">
                </div>
                
                <div>
                    <label class="form-label">Type</label>
                    <select name="holiday_type" class="form-select w-full">
                        <option value="NATIONAL" selected>National Holiday</option>
                        <option value="REGIONAL">Regional Holiday</option>
                        <option value="OPTIONAL">Optional Holiday</option>
                        <option value="COMPANY">Company Holiday</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary w-full holiday-submit-btn"><i class="fas fa-plus mr-2"></i>Add Holiday</button>
                <p class="text-xs text-gray-500 text-center">You can configure up to 10 public holidays per year</p>
            </form>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Main Content -->
    <div class="lg:col-span-3 space-y-6">
        
        <!-- Date Navigation -->
        <div class="card p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="?tab=attendance&date=<?= date('Y-m-d', strtotime($viewDate . ' -1 day')) ?>" class="btn btn-secondary"><i class="fas fa-chevron-left"></i></a>
                    <div class="text-center">
                        <h3 class="font-bold text-lg"><?= date('l, d F Y', strtotime($viewDate)) ?></h3>
                        <?php 
                        $dayOfWeek = date('N', strtotime($viewDate));
                        $isWeekend = $dayOfWeek >= 6;
                        $isHoliday = false;
                        $holidayName = '';
                        foreach ($holidays as $h) {
                            if (($h['date'] ?? '') === $viewDate) { $isHoliday = true; $holidayName = $h['name'] ?? ''; break; }
                        }
                        ?>
                        <?php if ($isHoliday): ?>
                        <span class="text-xs text-pink-600"><i class="fas fa-star mr-1"></i><?= $holidayName ?></span>
                        <?php elseif ($isWeekend): ?>
                        <span class="text-xs text-gray-500">Weekend</span>
                        <?php endif; ?>
                    </div>
                    <a href="?tab=attendance&date=<?= date('Y-m-d', strtotime($viewDate . ' +1 day')) ?>" class="btn btn-secondary"><i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="flex gap-2">
                    <a href="?tab=attendance&date=<?= date('Y-m-d') ?>" class="btn btn-primary">Today</a>
                    <input type="date" value="<?= $viewDate ?>" onchange="window.location='?tab=attendance&date='+this.value" class="form-input">
                </div>
            </div>
        </div>
        
        <!-- Today's Attendance -->
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-blue-50 to-indigo-50 flex items-center justify-between">
                <h3 class="font-semibold text-blue-800"><i class="fas fa-clipboard-list mr-2"></i>Attendance - <?= date('d M Y', strtotime($viewDate)) ?></h3>
                <div class="flex gap-2 text-xs">
                    <span class="attendance-cell att-present">P</span><span class="text-gray-500">Present</span>
                    <span class="attendance-cell att-late">L</span><span class="text-gray-500">Late</span>
                    <span class="attendance-cell att-absent">A</span><span class="text-gray-500">Absent</span>
                    <span class="attendance-cell att-leave">LV</span><span class="text-gray-500">Leave</span>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Member</th>
                            <th class="p-3 text-center">Status</th>
                            <th class="p-3 text-center">Check In</th>
                            <th class="p-3 text-center">Check Out</th>
                            <th class="p-3 text-center">Hours</th>
                            <th class="p-3 text-center">Late</th>
                            <th class="p-3 text-left">Remarks</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php 
                        // Create lookup for today's attendance
                        $attLookup = [];
                        foreach ($todayAttendance as $ta) {
                            $attLookup[$ta['user_id']] = $ta;
                        }
                        
                        foreach ($activeMembers as $m): 
                            $att = $attLookup[$m['id']] ?? null;
                            $attStatus = $att['status'] ?? '';
                            $statusClass = match($attStatus) {
                                'PRESENT' => 'att-present',
                                'LATE' => 'att-late',
                                'ABSENT' => 'att-absent',
                                'ON_LEAVE' => 'att-leave',
                                'WFH' => 'att-wfh',
                                'HALF_DAY' => 'att-late',
                                default => 'att-none'
                            };
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3">
                                <div class="flex items-center gap-2">
                                    <?php if (!empty($m['profile_photo']) && file_exists($m['profile_photo'])): ?>
                                    <img src="<?= $m['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                                    <?php else: ?>
                                    <div class="avatar-sm bg-gray-200 text-gray-600 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($m['display_name'],0,1)) ?></div>
                                    <?php endif; ?>
                                    <span class="font-medium"><?= htmlspecialchars($m['display_name']) ?></span>
                                </div>
                            </td>
                            <td class="p-3 text-center">
                                <span class="attendance-cell <?= $statusClass ?>">
                                    <?= match($attStatus) {
                                        'PRESENT' => 'P', 'LATE' => 'L', 'ABSENT' => 'A', 
                                        'ON_LEAVE' => 'LV', 'WFH' => 'W', 'HALF_DAY' => 'H', default => '-'
                                    } ?>
                                </span>
                            </td>
                            <td class="p-3 text-center">
                                <?php if ($att && !empty($att['check_in'])): ?>
                                    <?= date('h:i A', strtotime($att['check_in'])) ?>
                                <?php else: ?>
                                    <span class="text-gray-400">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3 text-center">
                                <?php if ($att && !empty($att['check_out'])): ?>
                                    <?= date('h:i A', strtotime($att['check_out'])) ?>
                                <?php else: ?>
                                    <span class="text-gray-400">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3 text-center">
                                <?php if ($att && !empty($att['work_hours']) && $att['work_hours'] > 0): ?>
                                <span class="<?= $att['work_hours'] >= 8 ? 'text-green-600' : 'text-amber-600' ?> font-medium">
                                    <?= number_format($att['work_hours'], 1) ?>h
                                </span>
                                <?php else: ?>
                                <span class="text-gray-400">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3 text-center">
                                <?php if ($att && !empty($att['late_minutes']) && $att['late_minutes'] > 0): ?>
                                <span class="text-red-600 text-xs"><?= $att['late_minutes'] ?>m</span>
                                <?php else: ?>
                                <span class="text-gray-400">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3 text-xs text-gray-500 truncate max-w-xs">
                                <?= htmlspecialchars($att['remarks'] ?? '') ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Monthly Summary -->
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-purple-50 to-pink-50 flex items-center justify-between">
                <h3 class="font-semibold text-purple-800"><i class="fas fa-calendar-alt mr-2"></i>Monthly Summary - <?= date('F Y', strtotime("$viewYear-$viewMonth-01")) ?></h3>
                <div class="flex gap-2">
                    <select onchange="window.location='?tab=attendance&month='+this.value+'&year=<?= $viewYear ?>'" class="form-select text-sm">
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                        <option value="<?= $i ?>" <?= $viewMonth == $i ? 'selected' : '' ?>><?= date('F', strtotime("2024-$i-01")) ?></option>
                        <?php endfor; ?>
                    </select>
                    <select onchange="window.location='?tab=attendance&month=<?= $viewMonth ?>&year='+this.value" class="form-select text-sm">
                        <?php for ($y = date('Y'); $y >= date('Y') - 2; $y--): ?>
                        <option value="<?= $y ?>" <?= $viewYear == $y ? 'selected' : '' ?>><?= $y ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            
            <?php if (empty($monthlyAttendance)): ?>
            <div class="p-8 text-center text-gray-400">
                <i class="fas fa-calendar-times text-4xl mb-2"></i>
                <p>No attendance data for this month</p>
            </div>
            <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Member</th>
                            <th class="p-3 text-center">Present</th>
                            <th class="p-3 text-center">Absent</th>
                            <th class="p-3 text-center">Late</th>
                            <th class="p-3 text-center">Leave</th>
                            <th class="p-3 text-center">Hours</th>
                            <th class="p-3 text-center">Avg/Day</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($monthlyAttendance as $ma): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 font-medium"><?= htmlspecialchars($ma['display_name'] ?? '') ?></td>
                            <td class="p-3 text-center text-green-600 font-medium"><?= $ma['present'] ?? 0 ?></td>
                            <td class="p-3 text-center text-red-600"><?= $ma['absent'] ?? 0 ?></td>
                            <td class="p-3 text-center text-amber-600"><?= $ma['late'] ?? 0 ?></td>
                            <td class="p-3 text-center text-blue-600"><?= $ma['on_leave'] ?? 0 ?></td>
                            <td class="p-3 text-center font-medium"><?= number_format($ma['total_hours'] ?? 0, 1) ?>h</td>
                            <td class="p-3 text-center">
                                <?php $avg = $ma['avg_hours'] ?? 0; ?>
                                <span class="<?= $avg >= 8 ? 'text-green-600' : ($avg >= 6 ? 'text-amber-600' : 'text-red-600') ?>">
                                    <?= number_format($avg, 1) ?>h
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
        
        <?php if ($hasHolidays && !empty($holidays)): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-pink-50 to-rose-50">
                <h3 class="font-semibold text-pink-800"><i class="fas fa-star mr-2"></i>Holidays <?= $viewYear ?></h3>
            </div>
            <div class="p-4 flex flex-wrap gap-3">
                <?php foreach ($holidays as $h): 
                    $isPast = strtotime($h['date'] ?? '') < strtotime('today');
                ?>
                <div class="px-3 py-2 rounded-lg <?= $isPast ? 'bg-gray-100 text-gray-500' : 'bg-pink-50 text-pink-700' ?>">
                    <p class="font-medium text-sm"><?= htmlspecialchars($h['name'] ?? '') ?></p>
                    <p class="text-xs"><?= !empty($h['date']) ? date('D, d M', strtotime($h['date'])) : '' ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Holiday Management Section -->
        <?php if ($hasHolidays): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-pink-50 to-rose-50 flex items-center justify-between">
                <div>
                    <h3 class="font-semibold text-pink-800"><i class="fas fa-calendar-star mr-2"></i>Public Holidays <?= $viewYear ?></h3>
                    <p class="text-xs text-pink-600"><?= count($holidays) ?> holidays configured</p>
                </div>
                <div class="flex gap-2">
                    <select onchange="window.location='?tab=attendance&year='+this.value" class="form-select text-sm">
                        <?php for ($y = date('Y') + 1; $y >= date('Y') - 2; $y--): ?>
                        <option value="<?= $y ?>" <?= $viewYear == $y ? 'selected' : '' ?>><?= $y ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            
            <?php if (empty($holidays)): ?>
            <div class="p-8 text-center text-gray-400">
                <i class="fas fa-calendar-times text-4xl mb-2"></i>
                <p>No holidays configured for <?= $viewYear ?></p>
                <p class="text-sm mt-1">Add public holidays using the form on the left</p>
            </div>
            <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Date</th>
                            <th class="p-3 text-left">Holiday Name</th>
                            <th class="p-3 text-center">Day</th>
                            <th class="p-3 text-center">Type</th>
                            <?php if ($isAdmin): ?>
                            <th class="p-3 text-center">Actions</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($holidays as $h): 
                            $isPast = strtotime($h['date'] ?? '') < strtotime('today');
                            $typeColor = match($h['type'] ?? '') {
                                'NATIONAL' => 'red', 'REGIONAL' => 'blue', 'OPTIONAL' => 'amber', default => 'gray'
                            };
                        ?>
                        <tr class="hover:bg-gray-50 <?= $isPast ? 'opacity-50' : '' ?>">
                            <td class="p-3 font-medium"><?= !empty($h['date']) ? date('d M Y', strtotime($h['date'])) : '' ?></td>
                            <td class="p-3">
                                <span class="font-medium"><?= htmlspecialchars($h['name'] ?? '') ?></span>
                                <?php if ($isPast): ?><span class="text-xs text-gray-400 ml-2">(Past)</span><?php endif; ?>
                            </td>
                            <td class="p-3 text-center text-gray-500"><?= !empty($h['date']) ? date('l', strtotime($h['date'])) : '' ?></td>
                            <td class="p-3 text-center">
                                <span class="px-2 py-0.5 bg-<?= $typeColor ?>-100 text-<?= $typeColor ?>-700 rounded text-xs"><?= $h['type'] ?? 'COMPANY' ?></span>
                            </td>
                            <?php if ($isAdmin): ?>
                            <td class="p-3 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    <button type="button" onclick="editHoliday(<?= $h['id'] ?>, '<?= $h['date'] ?>', '<?= htmlspecialchars($h['name'] ?? '', ENT_QUOTES) ?>', '<?= $h['type'] ?? 'NATIONAL' ?>')" 
                                            class="p-1.5 bg-blue-100 text-blue-600 rounded hover:bg-blue-200" title="Edit">
                                        <i class="fas fa-edit text-xs"></i>
                                    </button>
                                    <form method="POST" class="inline" onsubmit="return confirm('Delete this holiday?')">
                                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                                        <input type="hidden" name="action" value="delete_holiday">
                                        <input type="hidden" name="holiday_id" value="<?= $h['id'] ?>">
                                        <button type="submit" class="p-1.5 bg-red-100 text-red-600 rounded hover:bg-red-200" title="Delete">
                                            <i class="fas fa-trash text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="p-3 bg-gray-50 border-t text-center text-sm text-gray-500">
                <i class="fas fa-info-circle mr-1"></i>Total: <strong><?= count($holidays) ?></strong> public holidays for <?= $viewYear ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
function editHoliday(id, date, name, type) {
    document.querySelector('input[name="holiday_id"]').value = id;
    document.querySelector('input[name="holiday_date"]').value = date;
    document.querySelector('input[name="holiday_name"]').value = name;
    document.querySelector('select[name="holiday_type"]').value = type;
    document.querySelector('.holiday-form-title').textContent = 'Edit Holiday';
    document.querySelector('.holiday-submit-btn').innerHTML = '<i class="fas fa-save mr-2"></i>Update';
    document.querySelector('input[name="holiday_name"]').focus();
}
</script>
<?php endif; // End Attendance Tab ?>

<?php // ============================================================
// PERFORMANCE TAB
// ============================================================ ?>
<?php if ($activeTab === 'performance' && $hasPerformance): ?>
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    
    <div class="space-y-6">
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="font-semibold text-indigo-800"><i class="fas fa-calculator mr-2"></i>Performance Period</h3>
            </div>
            <form method="POST" class="p-4 space-y-4">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="recalc_performance">
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="form-label">Month</label>
                        <select name="perf_month" class="form-select w-full">
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                            <option value="<?= $i ?>" <?= $viewMonth == $i ? 'selected' : '' ?>><?= date('M', strtotime("2024-$i-01")) ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Year</label>
                        <select name="perf_year" class="form-select w-full">
                            <?php for ($y = date('Y'); $y >= date('Y') - 2; $y--): ?>
                            <option value="<?= $y ?>" <?= $viewYear == $y ? 'selected' : '' ?>><?= $y ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                
                <?php if ($isAdmin): ?>
                <button type="submit" class="btn btn-primary w-full"><i class="fas fa-sync-alt mr-2"></i>Recalculate</button>
                <?php endif; ?>
            </form>
        </div>
        
        <?php if (!empty($topPerformers)): ?>
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-amber-50 to-yellow-50">
                <h3 class="font-semibold text-amber-800"><i class="fas fa-trophy mr-2"></i>Top Performers</h3>
            </div>
            <div class="divide-y">
                <?php foreach ($topPerformers as $i => $tp): 
                    $medal = match($i) { 0 => '🥇', 1 => '🥈', 2 => '🥉', default => '' };
                ?>
                <div class="p-3 flex items-center gap-3">
                    <span class="text-lg"><?= $medal ?></span>
                    <?php if (!empty($tp['profile_photo']) && file_exists($tp['profile_photo'])): ?>
                    <img src="<?= $tp['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                    <?php else: ?>
                    <div class="avatar-sm bg-gray-200 text-gray-600 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($tp['display_name'] ?? '',0,1)) ?></div>
                    <?php endif; ?>
                    <div class="flex-1">
                        <p class="font-medium text-sm"><?= htmlspecialchars($tp['display_name'] ?? '') ?></p>
                        <p class="text-xs text-gray-500"><?= $tp['tasks_completed'] ?? 0 ?> tasks</p>
                    </div>
                    <?php 
                    $score = $tp['overall_score'] ?? 0;
                    $scoreClass = $score >= 80 ? 'score-excellent' : ($score >= 60 ? 'score-good' : ($score >= 40 ? 'score-average' : 'score-poor'));
                    ?>
                    <div class="score-badge <?= $scoreClass ?>"><?= round($score) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    
    <div class="lg:col-span-3">
        <div class="card">
            <div class="p-4 border-b bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="font-semibold text-indigo-800"><i class="fas fa-chart-bar mr-2"></i>Performance - <?= date('F Y', strtotime("$viewYear-$viewMonth-01")) ?></h3>
            </div>
            
            <?php if (empty($performanceData)): ?>
            <div class="p-8 text-center text-gray-400">
                <i class="fas fa-chart-line text-5xl mb-3"></i>
                <p>No performance data</p>
                <?php if ($isAdmin): ?><p class="text-sm mt-2">Click "Recalculate" to generate</p><?php endif; ?>
            </div>
            <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Member</th>
                            <th class="p-3 text-center">Tasks</th>
                            <th class="p-3 text-center">Compliance</th>
                            <th class="p-3 text-center">Attendance</th>
                            <th class="p-3 text-center">Hours</th>
                            <th class="p-3 text-center">Productivity</th>
                            <th class="p-3 text-center">Punctuality</th>
                            <th class="p-3 text-center">Overall</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php foreach ($performanceData as $pd): 
                            $prodScore = $pd['productivity_score'] ?? 0;
                            $punctScore = $pd['punctuality_score'] ?? 0;
                            $overallScore = $pd['overall_score'] ?? 0;
                            
                            $prodClass = $prodScore >= 80 ? 'score-excellent' : ($prodScore >= 60 ? 'score-good' : ($prodScore >= 40 ? 'score-average' : 'score-poor'));
                            $punctClass = $punctScore >= 80 ? 'score-excellent' : ($punctScore >= 60 ? 'score-good' : ($punctScore >= 40 ? 'score-average' : 'score-poor'));
                            $overallClass = $overallScore >= 80 ? 'score-excellent' : ($overallScore >= 60 ? 'score-good' : ($overallScore >= 40 ? 'score-average' : 'score-poor'));
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-3">
                                <div class="flex items-center gap-2">
                                    <?php if (!empty($pd['profile_photo']) && file_exists($pd['profile_photo'])): ?>
                                    <img src="<?= $pd['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                                    <?php else: ?>
                                    <div class="avatar-sm bg-gray-200 text-gray-600 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($pd['display_name'] ?? '',0,1)) ?></div>
                                    <?php endif; ?>
                                    <span class="font-medium"><?= htmlspecialchars($pd['display_name'] ?? '') ?></span>
                                </div>
                            </td>
                            <td class="p-3 text-center">
                                <span class="font-medium text-green-600"><?= $pd['tasks_completed'] ?? 0 ?></span>
                                <span class="text-gray-400">/<?= $pd['tasks_assigned'] ?? 0 ?></span>
                            </td>
                            <td class="p-3 text-center">
                                <span class="font-medium text-purple-600"><?= $pd['compliance_filed'] ?? 0 ?></span>
                                <span class="text-gray-400">/<?= $pd['compliance_assigned'] ?? 0 ?></span>
                            </td>
                            <td class="p-3 text-center">
                                <span class="text-green-600"><?= $pd['days_present'] ?? 0 ?>P</span>
                                <?php if (($pd['days_late'] ?? 0) > 0): ?>
                                <span class="text-amber-600 ml-1"><?= $pd['days_late'] ?>L</span>
                                <?php endif; ?>
                            </td>
                            <td class="p-3 text-center font-medium"><?= number_format($pd['total_work_hours'] ?? 0, 1) ?>h</td>
                            <td class="p-3 text-center"><div class="score-badge <?= $prodClass ?> mx-auto"><?= round($prodScore) ?></div></td>
                            <td class="p-3 text-center"><div class="score-badge <?= $punctClass ?> mx-auto"><?= round($punctScore) ?></div></td>
                            <td class="p-3 text-center"><div class="score-badge <?= $overallClass ?> mx-auto text-lg"><?= round($overallScore) ?></div></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php // ============================================================
// TEAMS TAB
// ============================================================ ?>
<?php if ($activeTab === 'teams'): ?>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <div class="card">
        <div class="p-4 border-b bg-gradient-to-r from-teal-50 to-cyan-50">
            <h3 class="font-semibold text-teal-800 team-form-title"><i class="fas fa-plus-circle mr-2"></i>Create Team</h3>
        </div>
        <form method="POST" class="p-4 space-y-4" id="teamForm">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_team">
            <input type="hidden" name="team_id" id="edit_team_id" value="">
            
            <div>
                <label class="form-label">Team Code <span class="text-red-500">*</span></label>
                <input type="text" name="team_code" id="edit_team_code" class="form-input w-full uppercase" required placeholder="e.g. TAX">
            </div>
            
            <div>
                <label class="form-label">Team Name <span class="text-red-500">*</span></label>
                <input type="text" name="team_name" id="edit_team_name" class="form-input w-full" required placeholder="e.g. Tax Team">
            </div>
            
            <div>
                <label class="form-label">Team Lead</label>
                <select name="team_supervisor_id" id="edit_team_supervisor" class="form-select w-full">
                    <option value="">Select...</option>
                    <?php foreach ($supervisors as $s): ?>
                    <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['display_name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div>
                <label class="form-label">Color</label>
                <div class="grid grid-cols-6 gap-2 mt-1" id="colorPicker">
                    <?php 
                    $teamColors = ['blue' => '#3B82F6', 'green' => '#10B981', 'purple' => '#8B5CF6', 'amber' => '#F59E0B', 'red' => '#EF4444', 'teal' => '#14B8A6', 'indigo' => '#6366F1', 'pink' => '#EC4899', 'cyan' => '#06B6D4', 'orange' => '#F97316', 'emerald' => '#059669', 'violet' => '#7C3AED'];
                    foreach ($teamColors as $name => $hex): ?>
                    <label class="cursor-pointer">
                        <input type="radio" name="team_color" value="<?= $name ?>" class="hidden peer" <?= $name === 'blue' ? 'checked' : '' ?>>
                        <div class="w-8 h-8 rounded-full peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400" style="background: <?= $hex ?>"></div>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary w-full team-submit-btn"><i class="fas fa-save mr-2"></i>Create Team</button>
            <button type="button" onclick="resetTeamForm()" class="btn btn-secondary w-full hidden" id="cancelEditBtn"><i class="fas fa-times mr-2"></i>Cancel Edit</button>
        </form>
    </div>
    
    <div class="lg:col-span-2">
        <?php if (empty($teams)): ?>
        <div class="card p-12 text-center">
            <i class="fas fa-sitemap text-6xl text-gray-200 mb-4"></i>
            <p class="text-gray-500">No teams created yet</p>
        </div>
        <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php foreach ($teams as $t): 
                $teamMembersList = array_filter($members, fn($m) => ($m['team_name'] ?? '') === $t['name']);
                $sup = null; 
                foreach ($supervisors as $s) if ($s['id'] == $t['supervisor_id']) $sup = $s;
                $stats = $teamStats[$t['id']] ?? ['count' => 0, 'pending' => 0, 'overdue' => 0];
            ?>
            <div class="team-card card overflow-hidden">
                <div class="h-2 bg-<?= $t['color'] ?>-500"></div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h4 class="font-bold text-lg"><?= htmlspecialchars($t['name']) ?></h4>
                            <p class="text-xs text-gray-500 font-mono"><?= $t['code'] ?></p>
                        </div>
                        <span class="px-3 py-1 bg-<?= $t['color'] ?>-100 text-<?= $t['color'] ?>-700 rounded-full text-sm font-semibold">
                            <?= $stats['count'] ?> members
                        </span>
                    </div>
                    
                    <?php if ($sup): ?>
                    <div class="flex items-center gap-2 mb-3 p-2 bg-gray-50 rounded">
                        <?php if (!empty($sup['profile_photo']) && file_exists($sup['profile_photo'])): ?>
                        <img src="<?= $sup['profile_photo'] ?>" class="avatar-sm object-cover rounded-full">
                        <?php else: ?>
                        <div class="avatar-sm bg-<?= $t['color'] ?>-200 text-<?= $t['color'] ?>-700 text-xs rounded-full flex items-center justify-center"><?= strtoupper(substr($sup['display_name'],0,1)) ?></div>
                        <?php endif; ?>
                        <div>
                            <p class="text-xs text-gray-500">Team Lead</p>
                            <p class="text-sm font-medium"><?= htmlspecialchars($sup['display_name']) ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Member Avatars Stack -->
                    <?php if (!empty($teamMembersList)): ?>
                    <div class="flex items-center mb-3">
                        <div class="flex -space-x-2">
                            <?php 
                            $displayMembers = array_slice(array_values($teamMembersList), 0, 5);
                            foreach ($displayMembers as $tm): 
                            ?>
                            <?php if (!empty($tm['profile_photo']) && file_exists($tm['profile_photo'])): ?>
                            <img src="<?= $tm['profile_photo'] ?>" class="w-8 h-8 rounded-full border-2 border-white object-cover" title="<?= htmlspecialchars($tm['display_name']) ?>">
                            <?php else: ?>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-<?= $t['color'] ?>-100 text-<?= $t['color'] ?>-700 text-xs flex items-center justify-center" title="<?= htmlspecialchars($tm['display_name']) ?>"><?= strtoupper(substr($tm['display_name'],0,1)) ?></div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (count($teamMembersList) > 5): ?>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-200 text-gray-600 text-xs flex items-center justify-center">+<?= count($teamMembersList) - 5 ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="grid grid-cols-3 gap-2 mb-3">
                        <div class="text-center p-2 bg-blue-50 rounded">
                            <p class="text-lg font-bold text-blue-600"><?= $stats['pending'] ?></p>
                            <p class="text-xs text-gray-500">Pending</p>
                        </div>
                        <div class="text-center p-2 bg-red-50 rounded">
                            <p class="text-lg font-bold text-red-600"><?= $stats['overdue'] ?></p>
                            <p class="text-xs text-gray-500">Overdue</p>
                        </div>
                        <div class="text-center p-2 bg-green-50 rounded">
                            <p class="text-lg font-bold text-green-600"><?= $stats['count'] ?></p>
                            <p class="text-xs text-gray-500">Members</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-2 mt-4 pt-3 border-t">
                        <a href="?tab=members&team=<?= $t['id'] ?>" class="btn btn-sm btn-secondary flex-1"><i class="fas fa-users mr-1"></i>View</a>
                        <button type="button" onclick="editTeam(<?= $t['id'] ?>, '<?= $t['code'] ?>', '<?= htmlspecialchars($t['name'], ENT_QUOTES) ?>', '<?= $t['supervisor_id'] ?? '' ?>', '<?= $t['color'] ?>')" 
                                class="btn btn-sm bg-blue-100 text-blue-600 hover:bg-blue-200"><i class="fas fa-edit"></i></button>
                        <?php if ($isAdmin): ?>
                        <form method="POST" class="inline" onsubmit="return confirm('Delete this team? Members will be unassigned.')">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="delete_team">
                            <input type="hidden" name="team_id" value="<?= $t['id'] ?>">
                            <button type="submit" class="btn btn-sm text-red-600 hover:bg-red-50"><i class="fas fa-trash"></i></button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php // ============================================================
// HIERARCHY TAB
// ============================================================ ?>
<?php if ($activeTab === 'hierarchy'): ?>
<div class="card p-6">
    <div class="text-center mb-6">
        <h3 class="font-semibold text-xl"><i class="fas fa-project-diagram mr-2"></i>Organization Hierarchy</h3>
        <p class="text-gray-500 text-sm">Reporting structure based on supervisor assignments</p>
    </div>
    
    <?php
    // Build hierarchy tree
    $topLevel = array_filter($members, fn($m) => empty($m['supervisor_id']) && $m['status'] === 'ACTIVE');
    
    function renderHierarchyNode($member, $allMembers, $level = 0) {
        $subordinates = array_filter($allMembers, fn($m) => ($m['supervisor_id'] ?? 0) == $member['id']);
        $colors = ['blue','green','purple','amber','teal','indigo'];
        $c = $colors[$member['id'] % 6];
        $isActive = $member['status'] === 'ACTIVE';
        ?>
        <div class="hierarchy-node" style="margin-left: <?= $level * 32 ?>px;">
            <div class="flex items-center gap-3 p-3 bg-white border <?= $isActive ? 'border-green-200' : 'border-red-200 bg-red-50' ?> rounded-lg shadow-sm hover:shadow-md transition-shadow mb-2">
                <?php if (!empty($member['profile_photo']) && file_exists($member['profile_photo'])): ?>
                <img src="<?= $member['profile_photo'] ?>" class="avatar object-cover rounded-full <?= !$isActive ? 'grayscale' : '' ?>">
                <?php else: ?>
                <div class="avatar bg-<?= $c ?>-100 text-<?= $c ?>-600 rounded-full flex items-center justify-center <?= !$isActive ? 'grayscale' : '' ?>"><?= strtoupper(substr($member['display_name'],0,2)) ?></div>
                <?php endif; ?>
                <div class="flex-1">
                    <p class="font-semibold <?= !$isActive ? 'text-gray-500' : '' ?>"><?= htmlspecialchars($member['display_name']) ?></p>
                    <div class="flex items-center gap-2 flex-wrap">
                        <?php if (!empty($member['role_name'])): ?>
                        <span class="text-xs px-2 py-0.5 bg-blue-100 text-blue-700 rounded"><?= $member['role_name'] ?></span>
                        <?php endif; ?>
                        <?php if (!empty($member['team_name'])): ?>
                        <span class="text-xs px-2 py-0.5 bg-<?= $member['team_color'] ?? 'gray' ?>-100 text-<?= $member['team_color'] ?? 'gray' ?>-700 rounded"><?= $member['team_name'] ?></span>
                        <?php endif; ?>
                        <?php if (!$isActive): ?>
                        <span class="text-xs px-2 py-0.5 bg-red-100 text-red-700 rounded">INACTIVE</span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (count($subordinates) > 0): ?>
                <div class="text-right">
                    <span class="text-xs text-gray-500"><?= count($subordinates) ?> reportee<?= count($subordinates) > 1 ? 's' : '' ?></span>
                </div>
                <?php endif; ?>
                <a href="?view=<?= $member['id'] ?>" class="p-2 bg-gray-100 rounded hover:bg-gray-200"><i class="fas fa-eye text-xs text-gray-600"></i></a>
            </div>
            <?php if (count($subordinates) > 0): ?>
            <div class="hierarchy-line">
                <?php foreach ($subordinates as $sub): ?>
                    <?php renderHierarchyNode($sub, $allMembers, $level + 1); ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php
    }
    ?>
    
    <div class="space-y-4">
        <?php if (empty($topLevel)): ?>
        <div class="text-center text-gray-400 py-8">
            <i class="fas fa-project-diagram text-4xl mb-2"></i>
            <p>No hierarchy defined</p>
            <p class="text-sm">Assign supervisors to team members to build the structure</p>
        </div>
        <?php else: ?>
        <?php foreach ($topLevel as $top): ?>
            <?php renderHierarchyNode($top, $members); ?>
        <?php endforeach; ?>
        
        <!-- Show members without supervisors who are NOT top level managers -->
        <?php 
        $orphans = array_filter($members, fn($m) => empty($m['supervisor_id']) && $m['status'] !== 'ACTIVE');
        if (!empty($orphans)): 
        ?>
        <div class="mt-8 pt-6 border-t">
            <h4 class="text-gray-500 font-medium mb-4"><i class="fas fa-user-slash mr-2"></i>Inactive Members (No Supervisor)</h4>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <?php foreach ($orphans as $o): ?>
                <div class="p-3 bg-gray-50 rounded-lg text-center opacity-60">
                    <p class="text-sm font-medium text-gray-600"><?= htmlspecialchars($o['display_name']) ?></p>
                    <span class="text-xs text-red-500">Inactive</span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php // ============================================================
// VIEW MEMBER PROFILE MODAL
// ============================================================ ?>
<?php if ($viewMember): ?>
<div id="viewModal" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto">
        <div class="p-6 border-b sticky top-0 bg-white z-10 flex items-center justify-between">
            <h3 class="text-xl font-bold">Member Profile</h3>
            <a href="team.php?tab=<?= $activeTab ?>" class="p-2 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></a>
        </div>
        
        <div class="p-6">
            <?php $isViewActive = $viewMember['status'] === 'ACTIVE'; ?>
            
            <!-- Status Banner for Inactive -->
            <?php if (!$isViewActive): ?>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                <div class="flex items-center gap-3">
                    <i class="fas fa-user-slash text-red-500 text-xl"></i>
                    <div>
                        <p class="font-medium text-red-800">This member is INACTIVE</p>
                        <p class="text-sm text-red-600">They cannot login or be assigned tasks.</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Header -->
            <div class="flex items-center gap-6 mb-6">
                <?php if (!empty($viewMember['profile_photo']) && file_exists($viewMember['profile_photo'])): ?>
                <img src="<?= $viewMember['profile_photo'] ?>" class="avatar-xl object-cover shadow-lg rounded-full <?= !$isViewActive ? 'grayscale' : '' ?>">
                <?php else: 
                    $c = ['blue','green','purple','amber','teal','indigo'][$viewMember['id'] % 6];
                ?>
                <div class="avatar-xl bg-<?= $c ?>-100 text-<?= $c ?>-600 shadow-lg rounded-full flex items-center justify-center <?= !$isViewActive ? 'grayscale' : '' ?>"><?= strtoupper(substr($viewMember['display_name'],0,2)) ?></div>
                <?php endif; ?>
                
                <div class="flex-1">
                    <h2 class="text-2xl font-bold <?= !$isViewActive ? 'text-gray-500' : '' ?>"><?= htmlspecialchars($viewMember['display_name']) ?></h2>
                    <div class="flex items-center gap-2 mt-1 flex-wrap">
                        <?php if (!empty($viewMember['role_name'])): ?>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium"><?= $viewMember['role_name'] ?></span>
                        <?php endif; ?>
                        <?php if (!empty($viewMember['team_name'])): ?>
                        <span class="px-3 py-1 bg-<?= $viewMember['team_color'] ?? 'gray' ?>-100 text-<?= $viewMember['team_color'] ?? 'gray' ?>-700 rounded-full text-sm"><?= $viewMember['team_name'] ?></span>
                        <?php endif; ?>
                        <span class="px-3 py-1 <?= $isViewActive ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?> rounded-full text-sm"><?= $viewMember['status'] ?></span>
                    </div>
                    <div class="flex gap-4 mt-3 text-sm text-gray-600">
                        <?php if (!empty($viewMember['mobile'])): ?>
                        <a href="tel:<?= $viewMember['mobile'] ?>" class="hover:text-blue-600"><i class="fas fa-phone mr-1"></i><?= $viewMember['mobile'] ?></a>
                        <?php endif; ?>
                        <?php if (!empty($viewMember['email'])): ?>
                        <a href="mailto:<?= $viewMember['email'] ?>" class="hover:text-blue-600"><i class="fas fa-envelope mr-1"></i><?= $viewMember['email'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Supervisor -->
            <?php if (!empty($viewMember['supervisor_name'])): ?>
            <div class="p-3 bg-gray-50 rounded-lg mb-6 flex items-center gap-3">
                <i class="fas fa-user-tie text-gray-400"></i>
                <div>
                    <p class="text-xs text-gray-500">Reports to</p>
                    <p class="font-medium"><?= htmlspecialchars($viewMember['supervisor_name']) ?></p>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Reportees -->
            <?php if (!empty($viewMember['reportees'])): ?>
            <div class="mb-6">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-users mr-2"></i>Direct Reports (<?= count($viewMember['reportees']) ?>)</h4>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($viewMember['reportees'] as $rep): ?>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-gray-50 rounded-full <?= $rep['status'] !== 'ACTIVE' ? 'opacity-50' : '' ?>">
                        <?php if (!empty($rep['profile_photo']) && file_exists($rep['profile_photo'])): ?>
                        <img src="<?= $rep['profile_photo'] ?>" class="w-6 h-6 rounded-full object-cover">
                        <?php else: ?>
                        <div class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-xs"><?= strtoupper(substr($rep['display_name'],0,1)) ?></div>
                        <?php endif; ?>
                        <span class="text-sm"><?= htmlspecialchars($rep['display_name']) ?></span>
                        <?php if ($rep['status'] !== 'ACTIVE'): ?>
                        <span class="text-xs text-red-500">(Inactive)</span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="text-center p-4 bg-blue-50 rounded-xl">
                    <p class="text-2xl font-bold text-blue-600"><?= $viewMember['pending_tasks'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Pending</p>
                </div>
                <div class="text-center p-4 bg-red-50 rounded-xl">
                    <p class="text-2xl font-bold text-red-600"><?= $viewMember['overdue_tasks'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Overdue</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-xl">
                    <p class="text-2xl font-bold text-green-600"><?= $viewMember['completed_tasks'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Completed</p>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-xl">
                    <p class="text-2xl font-bold text-purple-600"><?= $viewMember['leave_taken'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Leave Taken</p>
                </div>
            </div>
            
            <!-- Leave Balance -->
            <?php if ($hasLeaveBalances && !empty($viewMember['leave_balance'])): ?>
            <div class="mb-6">
                <h4 class="font-semibold text-gray-700 mb-3">Leave Balance (<?= date('Y') ?>)</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <?php foreach ($viewMember['leave_balance'] as $lb): 
                        $remaining = ($lb['total'] ?? 0) - ($lb['used'] ?? 0);
                        $percent = ($lb['total'] ?? 0) > 0 ? min(100, (($lb['used'] ?? 0) / ($lb['total'] ?? 1)) * 100) : 0;
                    ?>
                    <div class="p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-sm font-medium"><?= $lb['name'] ?? '' ?></span>
                            <span class="text-sm <?= $remaining <= 2 ? 'text-red-600 font-bold' : 'text-gray-600' ?>"><?= $remaining ?>/<?= $lb['total'] ?? 0 ?></span>
                        </div>
                        <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full rounded-full" style="width: <?= $percent ?>%; background: <?= $lb['color'] ?? '#3B82F6' ?>"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Monthly Attendance -->
            <?php if ($hasAttendance && $viewMember['monthly_attendance']): 
                $ma = $viewMember['monthly_attendance'];
            ?>
            <div class="mb-6">
                <h4 class="font-semibold text-gray-700 mb-3">This Month's Attendance</h4>
                <div class="grid grid-cols-5 gap-3">
                    <div class="p-3 bg-green-50 rounded-lg text-center">
                        <p class="text-xl font-bold text-green-600"><?= $ma['present'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Present</p>
                    </div>
                    <div class="p-3 bg-amber-50 rounded-lg text-center">
                        <p class="text-xl font-bold text-amber-600"><?= $ma['late'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Late</p>
                    </div>
                    <div class="p-3 bg-red-50 rounded-lg text-center">
                        <p class="text-xl font-bold text-red-600"><?= $ma['absent'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Absent</p>
                    </div>
                    <div class="p-3 bg-blue-50 rounded-lg text-center">
                        <p class="text-xl font-bold text-blue-600"><?= $ma['on_leave'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Leave</p>
                    </div>
                    <div class="p-3 bg-purple-50 rounded-lg text-center">
                        <p class="text-xl font-bold text-purple-600"><?= number_format($ma['total_hours'] ?? 0, 1) ?></p>
                        <p class="text-xs text-gray-500">Hours</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Performance Score -->
            <?php if ($hasPerformance && $viewMember['performance']): 
                $perf = $viewMember['performance'];
                $score = $perf['overall_score'] ?? 0;
                $scoreClass = $score >= 80 ? 'score-excellent' : ($score >= 60 ? 'score-good' : ($score >= 40 ? 'score-average' : 'score-poor'));
            ?>
            <div class="mb-6 p-4 bg-indigo-50 rounded-xl">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-semibold text-indigo-800">Performance Score (<?= date('M Y') ?>)</h4>
                        <p class="text-sm text-indigo-600 mt-1">
                            Productivity: <?= round($perf['productivity_score'] ?? 0) ?>% | 
                            Punctuality: <?= round($perf['punctuality_score'] ?? 0) ?>%
                        </p>
                    </div>
                    <div class="score-badge <?= $scoreClass ?> w-16 h-16 text-2xl"><?= round($score) ?></div>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Actions -->
            <div class="flex gap-3 pt-4 border-t">
                <a href="user_tasks.php?user_id=<?= $viewMember['id'] ?>" class="btn btn-primary flex-1"><i class="fas fa-tasks mr-2"></i>View Tasks</a>
                <a href="?edit=<?= $viewMember['id'] ?>" class="btn btn-secondary"><i class="fas fa-edit mr-2"></i>Edit</a>
                <a href="team.php?tab=<?= $activeTab ?>" class="btn btn-secondary">Close</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php // ============================================================
// ADD/EDIT MEMBER MODAL
// ============================================================ ?>
<div id="memberModal" class="fixed inset-0 bg-black/50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <div class="p-4 border-b flex justify-between sticky top-0 bg-white z-10">
            <h3 class="text-lg font-semibold"><?= $editMember ? 'Edit' : 'Add' ?> Team Member</h3>
            <button onclick="closeMemberModal()" class="p-2 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></button>
        </div>
        
        <form method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="save_member">
            <input type="hidden" name="id" value="<?= $editMember['id'] ?? '' ?>">
            
            <div class="flex justify-center mb-4">
                <div class="photo-upload" onclick="document.getElementById('photoInput').click()">
                    <?php if ($editMember && !empty($editMember['profile_photo']) && file_exists($editMember['profile_photo'])): ?>
                    <img src="<?= $editMember['profile_photo'] ?>" id="photoPreview">
                    <?php else: ?>
                    <div class="placeholder" id="photoPlaceholder">
                        <i class="fas fa-camera text-2xl mb-1"></i>
                        <span class="text-xs">Photo</span>
                    </div>
                    <img src="" id="photoPreview" class="hidden">
                    <?php endif; ?>
                    <input type="file" name="profile_photo" id="photoInput" accept="image/*" onchange="previewPhoto(this)">
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <label class="form-label">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="display_name" class="form-input w-full" required value="<?= htmlspecialchars($editMember['display_name'] ?? '') ?>">
                </div>
                <div>
                    <label class="form-label">Mobile <span class="text-red-500">*</span></label>
                    <input type="tel" name="mobile" class="form-input w-full" required value="<?= htmlspecialchars($editMember['mobile'] ?? '') ?>">
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input w-full" value="<?= htmlspecialchars($editMember['email'] ?? '') ?>">
                </div>
                <div>
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-input w-full" value="<?= $editMember['dob'] ?? '' ?>">
                </div>
                <div>
                    <label class="form-label">Employee Code</label>
                    <input type="text" name="employee_code" class="form-input w-full" value="<?= htmlspecialchars($editMember['employee_code'] ?? '') ?>">
                </div>
                <div>
                    <label class="form-label">Joining Date</label>
                    <input type="date" name="joining_date" class="form-input w-full" value="<?= $editMember['joining_date'] ?? '' ?>">
                </div>
                <div>
                    <label class="form-label">Role</label>
                    <select name="role_id" class="form-select w-full">
                        <option value="">Select...</option>
                        <?php foreach ($roles as $r): ?>
                        <option value="<?= $r['id'] ?>" <?= ($editMember['role_id'] ?? '') == $r['id'] ? 'selected' : '' ?>><?= $r['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Team</label>
                    <select name="team_id" class="form-select w-full">
                        <option value="">No team</option>
                        <?php foreach ($teams as $t): ?>
                        <option value="<?= $t['id'] ?>" <?= ($editMember['team_id'] ?? '') == $t['id'] ? 'selected' : '' ?>><?= $t['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Supervisor</label>
                    <select name="supervisor_id" class="form-select w-full">
                        <option value="">None</option>
                        <?php foreach ($supervisors as $s): ?>
                        <option value="<?= $s['id'] ?>" <?= ($editMember['supervisor_id'] ?? '') == $s['id'] ? 'selected' : '' ?>><?= $s['display_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select w-full">
                        <option value="ACTIVE" <?= ($editMember['status'] ?? '') === 'ACTIVE' ? 'selected' : '' ?>>Active</option>
                        <option value="INACTIVE" <?= ($editMember['status'] ?? '') === 'INACTIVE' ? 'selected' : '' ?>>Inactive</option>
                    </select>
                    <?php if ($editMember && ($editMember['status'] ?? '') === 'ACTIVE'): ?>
                    <p class="text-xs text-amber-600 mt-1"><i class="fas fa-info-circle mr-1"></i>Changing to Inactive will require task reassignment if pending tasks exist.</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="p-4 bg-orange-50 rounded-xl">
                <h4 class="font-medium text-orange-800 mb-3"><i class="fas fa-phone-alt mr-2"></i>Emergency Contact</h4>
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" name="emergency_contact" class="form-input w-full" value="<?= htmlspecialchars($editMember['emergency_contact'] ?? '') ?>" placeholder="Name">
                    <input type="tel" name="emergency_phone" class="form-input w-full" value="<?= htmlspecialchars($editMember['emergency_phone'] ?? '') ?>" placeholder="Phone">
                </div>
            </div>
            
            <div>
                <label class="form-label">Address</label>
                <textarea name="address" class="form-input w-full" rows="2"><?= htmlspecialchars($editMember['address'] ?? '') ?></textarea>
            </div>
            
            <div class="p-4 bg-gray-50 rounded-xl">
                <h4 class="font-medium mb-3">Capabilities</h4>
                <div class="grid grid-cols-3 gap-4">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="can_be_executor" <?= ($editMember['can_be_executor'] ?? 1) ? 'checked' : '' ?>>
                        <span class="text-sm">Executor</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="can_be_reviewer" <?= ($editMember['can_be_reviewer'] ?? 1) ? 'checked' : '' ?>>
                        <span class="text-sm">Reviewer</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="can_delete_data" <?= ($editMember['can_delete_data'] ?? 0) ? 'checked' : '' ?>>
                        <span class="text-sm text-red-600">Delete</span>
                    </label>
                </div>
            </div>
            
            <div class="p-4 bg-blue-50 rounded-xl">
                <label class="form-label"><?= $editMember ? 'New Password (leave blank to keep)' : 'Password *' ?></label>
                <input type="password" name="password" class="form-input w-full" <?= $editMember ? '' : 'required' ?>>
            </div>
            
            <div class="flex gap-4 pt-2">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Save</button>
                <button type="button" onclick="closeMemberModal()" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
function openMemberModal() { document.getElementById('memberModal').classList.remove('hidden'); }
function closeMemberModal() { 
    document.getElementById('memberModal').classList.add('hidden'); 
    if (location.search.includes('edit=')) location.href = 'team.php?tab=<?= $activeTab ?>';
}
function previewPhoto(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('photoPreview').src = e.target.result;
            document.getElementById('photoPreview').classList.remove('hidden');
            const placeholder = document.getElementById('photoPlaceholder');
            if (placeholder) placeholder.classList.add('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

// Team Edit Functions
function editTeam(id, code, name, supervisorId, color) {
    document.getElementById('edit_team_id').value = id;
    document.getElementById('edit_team_code').value = code;
    document.getElementById('edit_team_name').value = name;
    document.getElementById('edit_team_supervisor').value = supervisorId || '';
    
    // Select the correct color radio
    const colorRadios = document.querySelectorAll('input[name="team_color"]');
    colorRadios.forEach(radio => {
        radio.checked = (radio.value === color);
    });
    
    // Update form UI
    document.querySelector('.team-form-title').innerHTML = '<i class="fas fa-edit mr-2"></i>Edit Team';
    document.querySelector('.team-submit-btn').innerHTML = '<i class="fas fa-save mr-2"></i>Update Team';
    document.getElementById('cancelEditBtn').classList.remove('hidden');
    
    // Scroll to form
    document.getElementById('teamForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
    document.getElementById('edit_team_name').focus();
}

function resetTeamForm() {
    document.getElementById('edit_team_id').value = '';
    document.getElementById('edit_team_code').value = '';
    document.getElementById('edit_team_name').value = '';
    document.getElementById('edit_team_supervisor').value = '';
    
    // Reset to blue color
    const colorRadios = document.querySelectorAll('input[name="team_color"]');
    colorRadios.forEach(radio => {
        radio.checked = (radio.value === 'blue');
    });
    
    // Reset form UI
    document.querySelector('.team-form-title').innerHTML = '<i class="fas fa-plus-circle mr-2"></i>Create Team';
    document.querySelector('.team-submit-btn').innerHTML = '<i class="fas fa-save mr-2"></i>Create Team';
    document.getElementById('cancelEditBtn').classList.add('hidden');
}

<?php if ($editMember): ?>document.addEventListener('DOMContentLoaded', openMemberModal);<?php endif; ?>
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeMemberModal();
        <?php if ($viewMember): ?>window.location.href = 'team.php?tab=<?= $activeTab ?>';<?php endif; ?>
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>
