<?php
/**
 * PATRON - Dashboard (Redesigned)
 * Comprehensive overview covering ALL app modules:
 * - Service Requests Pipeline
 * - Compliance Tracker
 * - Clients & Persons
 * - Billing & Invoicing
 * - Documents & Certificates
 * - DSC / KYC Alerts
 * - Leave Management
 * - Team Workload
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Dashboard';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$userName = $currentUser['display_name'] ?? $currentUser['name'] ?? 'User';

$userRoles = getUserRoles($userId);
$roleCodes = array_column($userRoles, 'code');

$isAdmin = in_array('ADMIN', $roleCodes);
$isManager = in_array('MANAGER', $roleCodes);
$isExecutor = in_array('EXECUTOR', $roleCodes) || ($currentUser['can_be_executor'] ?? 0);
$isReviewer = in_array('REVIEWER', $roleCodes) || ($currentUser['can_be_reviewer'] ?? 0);
$canSeeAll = $isAdmin || $isManager;

$teamMembers = dbFetchAll("
    SELECT id, display_name, profile_photo, status 
    FROM users WHERE supervisor_id = ? AND deleted_at IS NULL AND user_type = 'INTERNAL'
    ORDER BY display_name
", [$userId]) ?: [];
$isSupervisor = count($teamMembers) > 0;

$today = date('Y-m-d');
$in7Days = date('Y-m-d', strtotime('+7 days'));
$in30Days = date('Y-m-d', strtotime('+30 days'));
$thisMonth = date('Y-m');

// ═══════ SERVICE REQUEST STATS ═══════
$workStats = dbFetchOne("
    SELECT 
        COUNT(*) as total_requests,
        SUM(status = 'NEW') as new_requests,
        SUM(status IN ('IN_PROGRESS','ASSIGNED')) as in_progress,
        SUM(status IN ('PENDING_INFO','WAITING_DOCS','COLLECTING')) as pending_info,
        SUM(status IN ('UNDER_REVIEW','REVIEW')) as under_review,
        SUM(status IN ('APPLIED','PROCESSING','GOVT_PENDING')) as govt_pending,
        SUM(status IN ('COMPLETED','DONE') AND DATE(updated_at) = CURDATE()) as completed_today,
        SUM(status IN ('COMPLETED','DONE') AND DATE_FORMAT(updated_at,'%Y-%m') = ?) as completed_month,
        SUM(due_date < CURDATE() AND status NOT IN ('COMPLETED','DONE','CANCELLED')) as overdue,
        SUM(assigned_to IS NULL AND status NOT IN ('COMPLETED','DONE','CANCELLED')) as unassigned
    FROM service_requests WHERE deleted_at IS NULL
", [$thisMonth]) ?: [];

// ═══════ MY WORK STATS ═══════
$myWorkStats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(status IN ('NEW','ASSIGNED')) as new_assigned,
        SUM(status = 'IN_PROGRESS') as in_progress,
        SUM(status IN ('WAITING_DOCS','COLLECTING','PENDING_INFO')) as waiting,
        SUM(status IN ('UNDER_REVIEW','REVIEW')) as under_review,
        SUM(due_date < CURDATE() AND status NOT IN ('DONE','COMPLETED','CANCELLED')) as overdue
    FROM service_requests WHERE deleted_at IS NULL AND assigned_to = ?
", [$userId]) ?: [];

$myReviewStats = dbFetchOne("
    SELECT COUNT(*) as pending_review
    FROM service_requests WHERE deleted_at IS NULL AND reviewer_id = ? AND status IN ('UNDER_REVIEW','REVIEW')
", [$userId]) ?: [];

$myCompletedThisMonth = dbFetchOne("
    SELECT COUNT(*) as count
    FROM service_requests WHERE deleted_at IS NULL AND assigned_to = ?
    AND status IN ('DONE','COMPLETED') AND DATE_FORMAT(updated_at,'%Y-%m') = ?
", [$userId, $thisMonth])['count'] ?? 0;

// ═══════ CLIENT / PERSON STATS ═══════
$clientStats = dbFetchOne("
    SELECT COUNT(*) as total, SUM(status='ACTIVE' OR status IS NULL) as active,
           SUM(DATE_FORMAT(created_at,'%Y-%m')=?) as new_this_month
    FROM clients WHERE deleted_at IS NULL
", [$thisMonth]) ?: [];

$personStats = dbFetchOne("SELECT COUNT(*) as total FROM persons_new WHERE deleted_at IS NULL") ?: [];

// ═══════ COMPLIANCE STATS ═══════
$complianceStats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as pending,
        SUM(ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as overdue,
        SUM(ctr.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as due_this_week,
        SUM(UPPER(ctr.status) IN ('UNDER_REVIEW','PENDING_APPROVAL')) as for_review,
        SUM(ctr.executor_1_id IS NULL AND ctr.executor_2_id IS NULL AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as unassigned,
        SUM(UPPER(ctr.status) IN ('FILED','FILED_LATE')) as filed
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id WHERE ct.deleted_at IS NULL
") ?: [];

$myComplianceStats = dbFetchOne("
    SELECT 
        SUM((ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE','UNDER_REVIEW','PENDING_APPROVAL')) as my_pending,
        SUM((ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND ctr.due_date < CURDATE() AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as my_overdue,
        SUM((ctr.executor_1_id = ? OR ctr.executor_2_id = ?) AND ctr.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as my_due_this_week,
        SUM(ctr.reviewer_id = ? AND UPPER(ctr.status) IN ('UNDER_REVIEW','PENDING_APPROVAL')) as my_for_review,
        SUM(ctr.manager_id = ? AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')) as team_pending
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id WHERE ct.deleted_at IS NULL
", [$userId,$userId,$userId,$userId,$userId,$userId,$userId,$userId]) ?: [];

// ═══════ DSC / KYC ALERTS ═══════
$dscAlerts = dbFetchOne("
    SELECT SUM(dsc_expiry_date < CURDATE()) as expired,
           SUM(dsc_expiry_date BETWEEN CURDATE() AND ?) as expiring_7days,
           SUM(dsc_expiry_date BETWEEN CURDATE() AND ?) as expiring_30days
    FROM persons_new WHERE deleted_at IS NULL AND dsc_status = 'ACTIVE'
", [$in7Days, $in30Days]) ?: [];

$kycAlerts = dbFetchOne("
    SELECT SUM(din_kyc_due_date < CURDATE() AND (din_kyc_status IS NULL OR din_kyc_status != 'COMPLETED')) as overdue,
           SUM((din_kyc_status = 'PENDING' OR din_kyc_status IS NULL) AND din IS NOT NULL AND din != '') as pending
    FROM persons_new WHERE deleted_at IS NULL
") ?: [];

// ═══════ CERTIFICATE ALERTS ═══════
$certAlerts = ['expired' => 0, 'expiring_30' => 0];
try {
    $certAlerts = dbFetchOne("
        SELECT SUM(expiry_date < CURDATE() AND (status='ACTIVE' OR status IS NULL)) as expired,
               SUM(expiry_date BETWEEN CURDATE() AND ? AND (status='ACTIVE' OR status IS NULL)) as expiring_30
        FROM client_certificates WHERE deleted_at IS NULL
    ", [$in30Days]) ?: ['expired' => 0, 'expiring_30' => 0];
} catch (Exception $e) {}

// ═══════ BILLING STATS ═══════
$billingStats = [];
$recentPayments = [];
$overdueClients = [];
try {
    $billingStats = dbFetchOne("
        SELECT 
            COALESCE(SUM(total),0) as total_invoiced,
            COALESCE(SUM(balance_due),0) as total_outstanding,
            COALESCE(SUM(CASE WHEN balance_due>0 AND due_date<CURDATE() THEN balance_due ELSE 0 END),0) as overdue_amount,
            SUM(CASE WHEN balance_due>0 AND due_date<CURDATE() THEN 1 ELSE 0 END) as overdue_count,
            COALESCE(SUM(CASE WHEN DATE_FORMAT(invoice_date,'%Y-%m')=? THEN total ELSE 0 END),0) as invoiced_this_month
        FROM invoices WHERE status IS NULL OR LOWER(status) != 'void'
    ", [$thisMonth]) ?: [];
    $collectionThisMonth = dbFetchOne("SELECT COALESCE(SUM(amount),0) as collected FROM payments WHERE DATE_FORMAT(payment_date,'%Y-%m')=?", [$thisMonth]);
    $billingStats['collected_this_month'] = $collectionThisMonth['collected'] ?? 0;
    
    $recentPayments = dbFetchAll("
        SELECT p.amount, p.payment_date, p.payment_mode, c.name as client_name
        FROM payments p JOIN clients c ON p.client_id = c.id
        ORDER BY p.payment_date DESC, p.id DESC LIMIT 5
    ") ?: [];
    
    $overdueClients = dbFetchAll("
        SELECT c.id, c.name as client_name, SUM(i.balance_due) as overdue_amount,
               COUNT(i.id) as overdue_count, MIN(i.due_date) as oldest_due
        FROM invoices i JOIN clients c ON i.client_id = c.id
        WHERE i.balance_due > 0 AND i.due_date < CURDATE() AND (i.status IS NULL OR LOWER(i.status) != 'void')
        GROUP BY c.id ORDER BY overdue_amount DESC LIMIT 5
    ") ?: [];
} catch (Exception $e) {}

// ═══════ DOCUMENT STATS ═══════
$docStats = ['total' => 0, 'pending' => 0, 'uploaded' => 0];
try {
    $docStats = dbFetchOne("
        SELECT COUNT(*) as total, SUM(status='PENDING' OR status IS NULL) as pending,
               SUM(status='UPLOADED' OR status='APPROVED') as uploaded
        FROM client_documents WHERE deleted_at IS NULL
    ") ?: ['total' => 0, 'pending' => 0, 'uploaded' => 0];
} catch (Exception $e) {}

// ═══════ UPCOMING COMPLIANCE (Next 7 days) ═══════
$upcomingCompliance = dbFetchAll("
    SELECT ctr.id, ctr.due_date, ctr.status, ct.name as compliance_name, ct.code, ct.icon, ct.color,
           c.name as client_name
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    JOIN clients c ON ctr.client_id = c.id
    WHERE ct.deleted_at IS NULL
    AND ctr.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
    AND UPPER(ctr.status) NOT IN ('FILED','FILED_LATE','NOT_APPLICABLE')
    " . (!$canSeeAll ? "AND (ctr.executor_1_id = $userId OR ctr.executor_2_id = $userId OR ctr.reviewer_id = $userId OR ctr.manager_id = $userId)" : "") . "
    ORDER BY ctr.due_date ASC LIMIT 8
") ?: [];

// ═══════ MY TASKS ═══════
$myTasks = dbFetchAll("
    SELECT sr.id, sr.status, sr.due_date, s.name as service_name, c.name as client_name,
           DATEDIFF(sr.due_date, CURDATE()) as days_left
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id JOIN clients c ON sr.client_id = c.id
    WHERE sr.deleted_at IS NULL AND sr.assigned_to = ?
    AND sr.status NOT IN ('DONE','COMPLETED','CANCELLED')
    ORDER BY CASE WHEN sr.due_date < CURDATE() THEN 0 ELSE 1 END, sr.due_date ASC
    LIMIT 10
", [$userId]) ?: [];

// ═══════ MY PENDING REVIEWS ═══════
$myPendingReviews = dbFetchAll("
    SELECT sr.id, sr.status, sr.updated_at, s.name as service_name, c.name as client_name,
           u.display_name as assigned_name, DATEDIFF(CURDATE(), sr.updated_at) as days_waiting
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.deleted_at IS NULL AND sr.reviewer_id = ? AND sr.status IN ('UNDER_REVIEW','REVIEW')
    ORDER BY sr.updated_at ASC LIMIT 8
", [$userId]) ?: [];

// ═══════ OVERDUE TASKS ═══════
$overdueTasks = dbFetchAll("
    SELECT sr.id, sr.due_date, s.name as service_name, c.name as client_name,
           u.display_name as assigned_name, DATEDIFF(CURDATE(), sr.due_date) as days_overdue
    FROM service_requests sr
    LEFT JOIN services s ON sr.service_id = s.id LEFT JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.deleted_at IS NULL AND sr.due_date < CURDATE()
    AND sr.status NOT IN ('COMPLETED','DONE','CANCELLED')
    ORDER BY sr.due_date ASC LIMIT 6
") ?: [];

// ═══════ RECENT REQUESTS ═══════
$recentRequests = dbFetchAll("
    SELECT sr.id, sr.status, sr.request_number, sr.created_at,
           s.name as service_name, c.name as client_name, u.display_name as assigned_to_name
    FROM service_requests sr
    LEFT JOIN services s ON sr.service_id = s.id LEFT JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.deleted_at IS NULL ORDER BY sr.created_at DESC LIMIT 8
") ?: [];

// ═══════ DSC EXPIRING ═══════
$dscExpiring = dbFetchAll("
    SELECT p.id, p.full_name, p.dsc_expiry_date, DATEDIFF(p.dsc_expiry_date, CURDATE()) as days_left,
           GROUP_CONCAT(c.name SEPARATOR ', ') as clients
    FROM persons_new p
    LEFT JOIN client_persons cp ON p.id = cp.person_id AND cp.is_active = 1
    LEFT JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    WHERE p.deleted_at IS NULL AND p.dsc_expiry_date BETWEEN CURDATE() AND ?
    GROUP BY p.id ORDER BY p.dsc_expiry_date ASC LIMIT 5
", [$in30Days]) ?: [];

// ═══════ KYC PENDING ═══════
$kycPending = dbFetchAll("
    SELECT p.id, p.full_name, p.din, p.din_kyc_due_date
    FROM persons_new p
    WHERE p.deleted_at IS NULL AND p.din IS NOT NULL AND p.din != ''
    AND (p.din_kyc_status IS NULL OR p.din_kyc_status = 'PENDING' OR p.din_kyc_status = 'OVERDUE')
    ORDER BY p.din_kyc_due_date ASC LIMIT 5
") ?: [];

// ═══════ CERTIFICATE EXPIRING ═══════
$certExpiring = [];
try {
    $certExpiring = dbFetchAll("
        SELECT cc.id, cc.expiry_date, ct.name as cert_name, c.name as client_name, c.id as client_id,
               DATEDIFF(cc.expiry_date, CURDATE()) as days_left
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        JOIN clients c ON cc.client_id = c.id
        WHERE cc.deleted_at IS NULL AND (cc.status='ACTIVE' OR cc.status IS NULL)
        AND cc.expiry_date BETWEEN CURDATE() AND ?
        ORDER BY cc.expiry_date ASC LIMIT 5
    ", [$in30Days]) ?: [];
} catch (Exception $e) {}

// ═══════ SUPERVISOR DATA ═══════
$pendingLeaveRequests = [];
$teamMemberTasks = [];
$teamMembersOnLeave = [];

if ($isSupervisor) {
    $teamMemberIds = array_column($teamMembers, 'id');
    $placeholders = implode(',', array_fill(0, count($teamMemberIds), '?'));
    
    $pendingLeaveRequests = dbFetchAll("
        SELECT lr.*, u.display_name, lt.name as leave_type, lt.color
        FROM leave_requests lr JOIN users u ON lr.user_id = u.id
        LEFT JOIN leave_types lt ON lr.leave_type_id = lt.id
        WHERE lr.user_id IN ($placeholders) AND lr.status = 'PENDING'
        ORDER BY lr.start_date ASC
    ", $teamMemberIds) ?: [];
    
    $teamMembersOnLeave = dbFetchAll("
        SELECT lr.*, u.display_name, u.id as user_id, lt.name as leave_type
        FROM leave_requests lr JOIN users u ON lr.user_id = u.id
        LEFT JOIN leave_types lt ON lr.leave_type_id = lt.id
        WHERE lr.user_id IN ($placeholders) AND lr.status = 'APPROVED'
        AND CURDATE() BETWEEN lr.start_date AND lr.end_date
        ORDER BY lr.end_date ASC
    ", $teamMemberIds) ?: [];
    
    $teamMemberTasks = dbFetchAll("
        SELECT u.id, u.display_name as name, u.profile_photo,
               SUM(CASE WHEN sr.status NOT IN ('DONE','COMPLETED','CANCELLED') THEN 1 ELSE 0 END) as active_tasks,
               SUM(CASE WHEN sr.due_date < CURDATE() AND sr.status NOT IN ('DONE','COMPLETED','CANCELLED') THEN 1 ELSE 0 END) as overdue_tasks
        FROM users u LEFT JOIN service_requests sr ON u.id = sr.assigned_to AND sr.deleted_at IS NULL
        WHERE u.supervisor_id = ? AND u.deleted_at IS NULL
        GROUP BY u.id ORDER BY active_tasks DESC
    ", [$userId]) ?: [];
}

// ═══════ ADMIN/MANAGER DATA ═══════
$teamWorkload = [];
$topServices = [];
$monthlyTrend = [];

if ($canSeeAll) {
    $teamWorkload = dbFetchAll("
        SELECT u.id, u.display_name as name, u.profile_photo,
               SUM(CASE WHEN sr.status NOT IN ('DONE','COMPLETED','CANCELLED') THEN 1 ELSE 0 END) as active_tasks,
               SUM(CASE WHEN sr.due_date < CURDATE() AND sr.status NOT IN ('DONE','COMPLETED','CANCELLED') THEN 1 ELSE 0 END) as overdue_tasks
        FROM users u LEFT JOIN service_requests sr ON u.id = sr.assigned_to AND sr.deleted_at IS NULL
        WHERE u.deleted_at IS NULL AND u.user_type = 'INTERNAL' AND u.status = 'ACTIVE'
        GROUP BY u.id HAVING name IS NOT NULL ORDER BY active_tasks DESC LIMIT 10
    ") ?: [];
    
    $topServices = dbFetchAll("
        SELECT s.name, COUNT(sr.id) as count
        FROM service_requests sr JOIN services s ON sr.service_id = s.id
        WHERE sr.deleted_at IS NULL AND sr.created_at >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)
        GROUP BY sr.service_id ORDER BY count DESC LIMIT 5
    ") ?: [];
    
    $monthlyTrend = dbFetchAll("
        SELECT DATE_FORMAT(created_at,'%Y-%m') as month, DATE_FORMAT(created_at,'%b') as month_label,
               COUNT(*) as requests, SUM(status IN ('COMPLETED','DONE')) as completed
        FROM service_requests WHERE deleted_at IS NULL
        AND created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
        GROUP BY DATE_FORMAT(created_at,'%Y-%m') ORDER BY month ASC
    ") ?: [];
}

// Status colors
$statusColors = [
    'NEW'=>'blue','ASSIGNED'=>'cyan','IN_PROGRESS'=>'amber','PENDING_INFO'=>'purple',
    'WAITING_DOCS'=>'purple','COLLECTING'=>'purple','UNDER_REVIEW'=>'indigo','REVIEW'=>'indigo',
    'APPLIED'=>'teal','PROCESSING'=>'orange','GOVT_PENDING'=>'orange',
    'DONE'=>'green','COMPLETED'=>'green','CANCELLED'=>'gray','HOLD'=>'red'
];

// Greeting
$hour = date('H');
$greeting = $hour < 12 ? 'Good morning' : ($hour < 17 ? 'Good afternoon' : 'Good evening');

// Count total alerts
$totalAlerts = ($workStats['overdue'] ?? 0) + ($dscAlerts['expired'] ?? 0) + ($kycAlerts['overdue'] ?? 0) + ($certAlerts['expired'] ?? 0);

require_once 'includes/header.php';
?>

<style>
/* ── Dashboard Design System ── */
.db-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    transition: box-shadow 0.2s ease;
}
.db-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.05); }

.db-card-head {
    padding: 14px 18px;
    border-bottom: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fafbfc;
}
.db-card-head h3 {
    font-size: 0.85rem;
    font-weight: 700;
    color: #1e293b;
    display: flex;
    align-items: center;
    gap: 8px;
}
.db-card-head .head-icon {
    width: 28px; height: 28px;
    border-radius: 7px;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.75rem;
}

/* Metric tiles */
.metric-tile {
    display: flex;
    flex-direction: column;
    padding: 16px 18px;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
    background: #fff;
    transition: transform 0.15s, box-shadow 0.15s;
    text-decoration: none;
    color: inherit;
}
.metric-tile:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.07); }
.metric-tile .m-val { font-size: 1.75rem; font-weight: 800; line-height: 1; }
.metric-tile .m-label { font-size: 0.72rem; color: #64748b; margin-top: 3px; font-weight: 500; }
.metric-tile .m-sub { font-size: 0.68rem; margin-top: 6px; font-weight: 600; }

/* Pipeline */
.pipeline { display: flex; gap: 2px; padding: 12px 14px; }
.pipe-step {
    flex: 1; min-width: 0;
    display: flex; flex-direction: column; align-items: center;
    padding: 10px 4px; border-radius: 8px;
    text-decoration: none; color: inherit;
    transition: background 0.15s;
    position: relative;
}
.pipe-step:hover { background: #f8fafc; }
.pipe-step .p-val { font-size: 1.35rem; font-weight: 800; line-height: 1; }
.pipe-step .p-label { font-size: 0.6rem; text-align: center; color: #64748b; margin-top: 4px; line-height: 1.2; font-weight: 500; }
.pipe-step .p-dot { width: 5px; height: 5px; border-radius: 50%; margin-bottom: 4px; }
.pipe-step::after {
    content: '›'; position: absolute; right: -4px; top: 50%;
    transform: translateY(-50%); color: #cbd5e1; font-size: 14px;
}
.pipe-step:last-child::after { display: none; }

/* Task list items */
.task-row {
    display: flex; align-items: center;
    padding: 10px 18px;
    border-bottom: 1px solid #f8fafc;
    transition: background 0.1s;
    text-decoration: none; color: inherit;
}
.task-row:hover { background: #f8fafc; }
.task-row:last-child { border-bottom: none; }
.task-row.is-overdue { background: #fef2f2; border-left: 3px solid #ef4444; }
.task-row.is-urgent { border-left: 3px solid #f59e0b; }

/* Badge */
.db-badge {
    display: inline-flex; align-items: center;
    padding: 2px 8px; border-radius: 6px;
    font-size: 0.68rem; font-weight: 600;
    white-space: nowrap;
}

/* Avatar circle */
.av {
    width: 32px; height: 32px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-weight: 700; font-size: 0.72rem; color: #fff; flex-shrink: 0;
}

/* Progress bar */
.prog { height: 5px; border-radius: 3px; background: #f1f5f9; overflow: hidden; }
.prog .fill { height: 100%; border-radius: 3px; transition: width 0.4s ease; }

/* Alert pulse */
.alert-glow { animation: alertGlow 2s ease-in-out infinite; }
@keyframes alertGlow { 0%,100%{opacity:1} 50%{opacity:0.75} }

/* Link badge */
.link-badge {
    font-size: 0.68rem; font-weight: 600; color: #64748b;
    text-decoration: none; padding: 3px 10px;
    border-radius: 6px; background: #f1f5f9;
    transition: background 0.15s;
}
.link-badge:hover { background: #e2e8f0; color: #334155; }

/* Scrollable list */
.scroll-list { max-height: 320px; overflow-y: auto; }
.scroll-list::-webkit-scrollbar { width: 4px; }
.scroll-list::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 2px; }

/* Chart bars */
.chart-bar { border-radius: 3px 3px 0 0; transition: height 0.4s ease; min-height: 3px; }
</style>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--                        WELCOME HEADER                          -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-5 gap-3">
    <div>
        <h1 class="text-xl font-bold text-gray-800"><?= $greeting ?>, <?= htmlspecialchars($userName) ?></h1>
        <p class="text-sm text-gray-500"><?= date('l, d F Y') ?>
            <?php if ($isAdmin): ?><span class="ml-2 db-badge bg-indigo-100 text-indigo-700">Admin</span><?php endif; ?>
            <?php if ($isManager && !$isAdmin): ?><span class="ml-2 db-badge bg-blue-100 text-blue-700">Manager</span><?php endif; ?>
            <?php if ($isSupervisor): ?><span class="ml-2 db-badge bg-cyan-100 text-cyan-700">Supervisor</span><?php endif; ?>
        </p>
    </div>
    <div class="flex gap-2 flex-wrap">
        <a href="add_request.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
            <i class="fas fa-plus mr-1"></i> New Request
        </a>
        <a href="add_client.php" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
            <i class="fas fa-building mr-1"></i> New Client
        </a>
        <a href="compliance_tracker.php" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
            <i class="fas fa-tasks mr-1"></i> Compliance
        </a>
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--                    TOP METRICS ROW                             -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 mb-5">
    <!-- My Active -->
    <a href="requests.php?assigned=<?= $userId ?>" class="metric-tile" style="border-left: 4px solid #3b82f6;">
        <span class="m-val text-blue-600"><?= ($myWorkStats['new_assigned'] ?? 0) + ($myWorkStats['in_progress'] ?? 0) ?></span>
        <span class="m-label">My Active Tasks</span>
        <?php if (($myWorkStats['overdue'] ?? 0) > 0): ?>
        <span class="m-sub text-red-500"><i class="fas fa-exclamation-triangle mr-1"></i><?= $myWorkStats['overdue'] ?> overdue</span>
        <?php else: ?>
        <span class="m-sub text-green-500"><i class="fas fa-check mr-1"></i>No overdue</span>
        <?php endif; ?>
    </a>

    <!-- My Reviews -->
    <a href="requests.php?reviewer=<?= $userId ?>&status=UNDER_REVIEW" class="metric-tile" style="border-left: 4px solid #8b5cf6;">
        <span class="m-val text-purple-600"><?= $myReviewStats['pending_review'] ?? 0 ?></span>
        <span class="m-label">Pending Reviews</span>
        <span class="m-sub text-gray-400"><?= $myCompletedThisMonth ?> done this month</span>
    </a>

    <!-- Compliance -->
    <a href="compliance_tracker.php" class="metric-tile" style="border-left: 4px solid #f59e0b;">
        <?php $cPend = $canSeeAll ? ($complianceStats['pending'] ?? 0) : ($myComplianceStats['my_pending'] ?? 0); ?>
        <?php $cOD = $canSeeAll ? ($complianceStats['overdue'] ?? 0) : ($myComplianceStats['my_overdue'] ?? 0); ?>
        <span class="m-val text-amber-600"><?= $cPend ?></span>
        <span class="m-label"><?= $canSeeAll ? 'Compliance Pending' : 'My Compliances' ?></span>
        <?php if ($cOD > 0): ?>
        <span class="m-sub text-red-500"><i class="fas fa-exclamation-triangle mr-1"></i><?= $cOD ?> overdue</span>
        <?php else: ?>
        <span class="m-sub text-amber-500"><?= $complianceStats['due_this_week'] ?? 0 ?> due this week</span>
        <?php endif; ?>
    </a>

    <!-- Clients -->
    <a href="clients.php" class="metric-tile" style="border-left: 4px solid #10b981;">
        <span class="m-val text-emerald-600"><?= $clientStats['active'] ?? 0 ?></span>
        <span class="m-label">Active Clients</span>
        <?php if (($clientStats['new_this_month'] ?? 0) > 0): ?>
        <span class="m-sub text-emerald-500"><i class="fas fa-arrow-up mr-1"></i>+<?= $clientStats['new_this_month'] ?> this month</span>
        <?php else: ?>
        <span class="m-sub text-gray-400"><?= $clientStats['total'] ?? 0 ?> total</span>
        <?php endif; ?>
    </a>

    <!-- Billing or Persons -->
    <?php if ($canSeeAll && !empty($billingStats)): ?>
    <a href="invoices.php" class="metric-tile" style="border-left: 4px solid #06b6d4;">
        <span class="m-val text-cyan-600">₹<?= number_format(($billingStats['total_outstanding'] ?? 0) / 1000, 0) ?>K</span>
        <span class="m-label">Outstanding</span>
        <?php if (($billingStats['overdue_count'] ?? 0) > 0): ?>
        <span class="m-sub text-red-500"><?= $billingStats['overdue_count'] ?> overdue invoices</span>
        <?php else: ?>
        <span class="m-sub text-cyan-500">₹<?= number_format(($billingStats['collected_this_month'] ?? 0) / 1000, 0) ?>K collected</span>
        <?php endif; ?>
    </a>
    <?php else: ?>
    <a href="persons.php" class="metric-tile" style="border-left: 4px solid #06b6d4;">
        <span class="m-val text-cyan-600"><?= $personStats['total'] ?? 0 ?></span>
        <span class="m-label">Persons</span>
        <span class="m-sub text-gray-400">Directors, Partners</span>
    </a>
    <?php endif; ?>

    <!-- Alerts -->
    <div class="metric-tile <?= $totalAlerts > 0 ? 'alert-glow' : '' ?>" style="border-left: 4px solid <?= $totalAlerts > 0 ? '#ef4444' : '#22c55e' ?>;">
        <span class="m-val <?= $totalAlerts > 0 ? 'text-red-600' : 'text-green-600' ?>"><?= $totalAlerts ?></span>
        <span class="m-label">Alerts</span>
        <div class="flex gap-2 mt-1 flex-wrap">
            <?php if (($dscAlerts['expired'] ?? 0) > 0): ?><span class="m-sub text-orange-500"><?= $dscAlerts['expired'] ?> DSC</span><?php endif; ?>
            <?php if (($kycAlerts['overdue'] ?? 0) > 0): ?><span class="m-sub text-rose-500"><?= $kycAlerts['overdue'] ?> KYC</span><?php endif; ?>
            <?php if (($certAlerts['expired'] ?? 0) > 0): ?><span class="m-sub text-red-500"><?= $certAlerts['expired'] ?> Cert</span><?php endif; ?>
            <?php if ($totalAlerts == 0): ?><span class="m-sub text-green-500"><i class="fas fa-check"></i> All clear</span><?php endif; ?>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--              SERVICE REQUEST PIPELINE (Admin/Manager)           -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<?php if ($canSeeAll): ?>
<div class="db-card mb-5">
    <div class="db-card-head">
        <h3><span class="head-icon bg-blue-100 text-blue-600"><i class="fas fa-stream"></i></span> Service Request Pipeline</h3>
        <a href="requests.php" class="link-badge">All Requests →</a>
    </div>
    <div class="pipeline">
        <a href="requests.php?status=NEW" class="pipe-step">
            <span class="p-dot bg-blue-400"></span>
            <span class="p-val text-blue-600"><?= $workStats['new_requests'] ?? 0 ?></span>
            <span class="p-label">New</span>
        </a>
        <a href="requests.php?status=IN_PROGRESS" class="pipe-step">
            <span class="p-dot bg-amber-400"></span>
            <span class="p-val text-amber-600"><?= $workStats['in_progress'] ?? 0 ?></span>
            <span class="p-label">In Progress</span>
        </a>
        <a href="requests.php?status=PENDING_INFO" class="pipe-step">
            <span class="p-dot bg-purple-400"></span>
            <span class="p-val text-purple-600"><?= $workStats['pending_info'] ?? 0 ?></span>
            <span class="p-label">Pending Info</span>
        </a>
        <a href="requests.php?status=UNDER_REVIEW" class="pipe-step">
            <span class="p-dot bg-indigo-400"></span>
            <span class="p-val text-indigo-600"><?= $workStats['under_review'] ?? 0 ?></span>
            <span class="p-label">Under Review</span>
        </a>
        <a href="requests.php?status=APPLIED" class="pipe-step">
            <span class="p-dot bg-teal-400"></span>
            <span class="p-val text-teal-600"><?= $workStats['govt_pending'] ?? 0 ?></span>
            <span class="p-label">Govt/Applied</span>
        </a>
        <div class="pipe-step" style="background:#f0fdf4;border-radius:8px;">
            <span class="p-dot bg-green-500"></span>
            <span class="p-val text-green-600"><?= $workStats['completed_today'] ?? 0 ?></span>
            <span class="p-label">Done Today</span>
        </div>
        <div class="pipe-step">
            <span class="p-dot bg-emerald-400"></span>
            <span class="p-val text-emerald-600"><?= $workStats['completed_month'] ?? 0 ?></span>
            <span class="p-label">This Month</span>
        </div>
        <?php if (($workStats['overdue'] ?? 0) > 0): ?>
        <a href="requests.php?filter=overdue" class="pipe-step alert-glow" style="background:#fef2f2;border-radius:8px;">
            <span class="p-dot bg-red-500"></span>
            <span class="p-val text-red-600"><?= $workStats['overdue'] ?></span>
            <span class="p-label">Overdue</span>
        </a>
        <?php endif; ?>
        <?php if (($workStats['unassigned'] ?? 0) > 0): ?>
        <a href="requests.php?filter=unassigned" class="pipe-step" style="background:#fff7ed;border-radius:8px;">
            <span class="p-dot bg-orange-400"></span>
            <span class="p-val text-orange-600"><?= $workStats['unassigned'] ?></span>
            <span class="p-label">Unassigned</span>
        </a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--                    MAIN 3-COLUMN LAYOUT                        -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-5">

    <!-- ── LEFT COLUMN (2 cols wide): Tasks, Reviews, Compliance ── -->
    <div class="lg:col-span-2 space-y-5">

        <!-- MY TASKS -->
        <?php if (!empty($myTasks)): ?>
        <div class="db-card">
            <div class="db-card-head">
                <h3><span class="head-icon bg-blue-100 text-blue-600"><i class="fas fa-clipboard-check"></i></span> My Tasks</h3>
                <a href="requests.php?assigned=<?= $userId ?>" class="link-badge"><?= count($myTasks) ?> showing · View All →</a>
            </div>
            <div class="scroll-list">
                <?php foreach ($myTasks as $t):
                    $isOD = $t['days_left'] !== null && $t['days_left'] < 0;
                    $isUrg = $t['days_left'] !== null && $t['days_left'] <= 2 && $t['days_left'] >= 0;
                    $sc = $statusColors[$t['status']] ?? 'gray';
                ?>
                <a href="view_request.php?id=<?= $t['id'] ?>" class="task-row <?= $isOD ? 'is-overdue' : ($isUrg ? 'is-urgent' : '') ?>">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($t['service_name']) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($t['client_name']) ?></p>
                    </div>
                    <div class="flex items-center gap-2 ml-3 flex-shrink-0">
                        <span class="db-badge bg-<?= $sc ?>-100 text-<?= $sc ?>-700"><?= str_replace('_',' ',$t['status']) ?></span>
                        <?php if ($t['due_date']): ?>
                        <span class="text-xs font-semibold <?= $isOD ? 'text-red-600' : ($isUrg ? 'text-amber-600' : 'text-gray-400') ?>" style="min-width:45px;text-align:right;">
                            <?= $isOD ? abs($t['days_left']).'d late' : ($t['days_left']==0 ? 'Today' : $t['days_left'].'d') ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- PENDING REVIEWS -->
        <?php if (!empty($myPendingReviews)): ?>
        <div class="db-card">
            <div class="db-card-head" style="background:#faf5ff;">
                <h3><span class="head-icon bg-purple-100 text-purple-600"><i class="fas fa-search"></i></span> Pending Reviews</h3>
                <span class="db-badge bg-purple-100 text-purple-700"><?= count($myPendingReviews) ?></span>
            </div>
            <div class="scroll-list">
                <?php foreach ($myPendingReviews as $r): ?>
                <a href="view_request.php?id=<?= $r['id'] ?>" class="task-row" style="border-left:3px solid #8b5cf6;">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($r['service_name']) ?></p>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($r['client_name']) ?> · By: <?= htmlspecialchars($r['assigned_name'] ?? '-') ?></p>
                    </div>
                    <span class="text-xs text-purple-600 font-semibold ml-3 flex-shrink-0"><?= $r['days_waiting'] ?? 0 ?>d waiting</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- COMPLIANCE THIS WEEK -->
        <div class="db-card">
            <div class="db-card-head" style="background:#f0fdf4;">
                <h3><span class="head-icon bg-green-100 text-green-600"><i class="fas fa-calendar-check"></i></span> Compliance Overview</h3>
                <div class="flex gap-2">
                    <a href="compliance_calendar.php" class="link-badge"><i class="fas fa-calendar-alt mr-1"></i>Calendar</a>
                    <a href="compliance_tracker.php" class="link-badge">View All →</a>
                </div>
            </div>
            <div class="p-4">
                <!-- Compliance stat pills -->
                <div class="grid grid-cols-3 sm:grid-cols-6 gap-2 mb-4">
                    <?php if ($canSeeAll): ?>
                    <a href="compliance_tracker.php?view=overdue" class="text-center p-2.5 rounded-lg <?= ($complianceStats['overdue'] ?? 0) > 0 ? 'bg-red-50 ring-1 ring-red-200' : 'bg-gray-50' ?>">
                        <p class="text-xl font-bold text-red-600"><?= $complianceStats['overdue'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Overdue</p>
                    </a>
                    <div class="text-center p-2.5 rounded-lg bg-amber-50">
                        <p class="text-xl font-bold text-amber-600"><?= $complianceStats['due_this_week'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Due 7d</p>
                    </div>
                    <a href="compliance_tracker.php?view=pending" class="text-center p-2.5 rounded-lg bg-blue-50">
                        <p class="text-xl font-bold text-blue-600"><?= $complianceStats['pending'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Pending</p>
                    </a>
                    <a href="compliance_tracker.php?view=review" class="text-center p-2.5 rounded-lg bg-purple-50">
                        <p class="text-xl font-bold text-purple-600"><?= $complianceStats['for_review'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Review</p>
                    </a>
                    <div class="text-center p-2.5 rounded-lg bg-orange-50">
                        <p class="text-xl font-bold text-orange-600"><?= $complianceStats['unassigned'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Unassigned</p>
                    </div>
                    <div class="text-center p-2.5 rounded-lg bg-green-50">
                        <p class="text-xl font-bold text-green-600"><?= $complianceStats['filed'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Filed</p>
                    </div>
                    <?php else: ?>
                    <a href="compliance_tracker.php?view=overdue" class="text-center p-2.5 rounded-lg <?= ($myComplianceStats['my_overdue'] ?? 0) > 0 ? 'bg-red-50 ring-1 ring-red-200' : 'bg-gray-50' ?>">
                        <p class="text-xl font-bold text-red-600"><?= $myComplianceStats['my_overdue'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">My Overdue</p>
                    </a>
                    <div class="text-center p-2.5 rounded-lg bg-amber-50">
                        <p class="text-xl font-bold text-amber-600"><?= $myComplianceStats['my_due_this_week'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Due 7d</p>
                    </div>
                    <a href="compliance_tracker.php?view=pending" class="text-center p-2.5 rounded-lg bg-blue-50">
                        <p class="text-xl font-bold text-blue-600"><?= $myComplianceStats['my_pending'] ?? 0 ?></p>
                        <p class="text-xs text-gray-500">Pending</p>
                    </a>
                    <?php if (($myComplianceStats['my_for_review'] ?? 0) > 0): ?>
                    <a href="compliance_tracker.php?view=review" class="text-center p-2.5 rounded-lg bg-purple-50 ring-1 ring-purple-200">
                        <p class="text-xl font-bold text-purple-600"><?= $myComplianceStats['my_for_review'] ?></p>
                        <p class="text-xs text-gray-500">To Review</p>
                    </a>
                    <?php endif; ?>
                    <?php if (($myComplianceStats['team_pending'] ?? 0) > 0): ?>
                    <div class="text-center p-2.5 rounded-lg bg-indigo-50">
                        <p class="text-xl font-bold text-indigo-600"><?= $myComplianceStats['team_pending'] ?></p>
                        <p class="text-xs text-gray-500">Team</p>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Upcoming this week -->
                <?php if (!empty($upcomingCompliance)): ?>
                <div class="border-t pt-3">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">
                        <i class="fas fa-clock text-amber-500 mr-1"></i>Upcoming This Week
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <?php foreach ($upcomingCompliance as $uc):
                            $dl = floor((strtotime($uc['due_date']) - time()) / 86400);
                            $urg = $dl <= 2;
                        ?>
                        <a href="compliance_entry.php?id=<?= $uc['id'] ?>" class="flex items-center gap-2.5 p-2.5 rounded-lg border <?= $urg ? 'border-red-200 bg-red-50' : 'border-gray-100 hover:bg-gray-50' ?>">
                            <div class="w-8 h-8 bg-<?= $uc['color'] ?? 'gray' ?>-100 text-<?= $uc['color'] ?? 'gray' ?>-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas <?= $uc['icon'] ?? 'fa-file' ?> text-xs"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold truncate"><?= htmlspecialchars($uc['code'] ?: $uc['compliance_name']) ?></p>
                                <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($uc['client_name']) ?></p>
                            </div>
                            <span class="text-xs font-bold flex-shrink-0 <?= $urg ? 'text-red-600' : 'text-gray-500' ?>">
                                <?= $dl == 0 ? 'Today' : ($dl == 1 ? 'Tmrw' : $dl.'d') ?>
                            </span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php elseif (($complianceStats['due_this_week'] ?? 0) == 0): ?>
                <div class="text-center py-3 text-gray-400 text-sm">
                    <i class="fas fa-check-circle text-green-400 mr-1"></i>No urgent compliance this week
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- RECENT REQUESTS TABLE (Admin/Manager) -->
        <?php if ($canSeeAll && !empty($recentRequests)): ?>
        <div class="db-card">
            <div class="db-card-head">
                <h3><span class="head-icon bg-gray-100 text-gray-600"><i class="fas fa-clipboard-list"></i></span> Recent Requests</h3>
                <a href="requests.php" class="link-badge">All Requests →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead><tr class="text-xs text-gray-500 bg-gray-50/80">
                        <th class="px-4 py-2.5 text-left font-medium">Service</th>
                        <th class="px-4 py-2.5 text-left font-medium">Client</th>
                        <th class="px-4 py-2.5 text-center font-medium">Status</th>
                        <th class="px-4 py-2.5 text-right font-medium">Assigned</th>
                    </tr></thead>
                    <tbody class="divide-y divide-gray-50">
                        <?php foreach ($recentRequests as $r): $sc = $statusColors[$r['status']] ?? 'gray'; ?>
                        <tr class="hover:bg-gray-50/50">
                            <td class="px-4 py-2.5">
                                <a href="view_request.php?id=<?= $r['id'] ?>" class="font-medium text-gray-800 hover:text-blue-600"><?= htmlspecialchars($r['service_name'] ?? '-') ?></a>
                            </td>
                            <td class="px-4 py-2.5 text-gray-600"><?= htmlspecialchars($r['client_name'] ?? '-') ?></td>
                            <td class="px-4 py-2.5 text-center"><span class="db-badge bg-<?= $sc ?>-100 text-<?= $sc ?>-700"><?= str_replace('_',' ',$r['status']) ?></span></td>
                            <td class="px-4 py-2.5 text-right text-gray-500"><?= htmlspecialchars($r['assigned_to_name'] ?? '-') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- ── RIGHT COLUMN: Alerts, Quick Info, Sidebar Widgets ── -->
    <div class="space-y-5">

        <!-- OVERDUE TASKS -->
        <?php if (!empty($overdueTasks)): ?>
        <div class="db-card">
            <div class="db-card-head" style="background:#fef2f2;">
                <h3><span class="head-icon bg-red-100 text-red-600"><i class="fas fa-exclamation-triangle"></i></span> Overdue Tasks</h3>
                <span class="db-badge bg-red-100 text-red-700 alert-glow"><?= count($overdueTasks) ?></span>
            </div>
            <div class="scroll-list">
                <?php foreach ($overdueTasks as $t): ?>
                <a href="view_request.php?id=<?= $t['id'] ?>" class="task-row is-overdue">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($t['service_name']) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($t['client_name']) ?><?= $t['assigned_name'] ? ' · '.$t['assigned_name'] : '' ?></p>
                    </div>
                    <span class="text-xs text-red-600 font-bold ml-2 flex-shrink-0"><?= $t['days_overdue'] ?>d</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- DSC EXPIRING -->
        <?php if (!empty($dscExpiring)): ?>
        <div class="db-card">
            <div class="db-card-head">
                <h3><span class="head-icon bg-orange-100 text-orange-600"><i class="fas fa-key"></i></span> DSC Expiring</h3>
                <a href="persons.php?dsc=EXPIRING" class="link-badge">View All</a>
            </div>
            <div>
                <?php foreach ($dscExpiring as $d): ?>
                <a href="person_view.php?id=<?= $d['id'] ?>#dsc" class="task-row">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($d['full_name']) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($d['clients'] ?? '-') ?></p>
                    </div>
                    <span class="db-badge <?= $d['days_left'] <= 7 ? 'bg-red-100 text-red-700' : 'bg-orange-100 text-orange-700' ?> ml-2"><?= $d['days_left'] ?>d</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- KYC PENDING -->
        <?php if (!empty($kycPending)): ?>
        <div class="db-card">
            <div class="db-card-head">
                <h3><span class="head-icon bg-rose-100 text-rose-600"><i class="fas fa-id-card"></i></span> KYC Pending</h3>
                <a href="persons.php?kyc=overdue" class="link-badge">View All</a>
            </div>
            <div>
                <?php foreach ($kycPending as $k): ?>
                <a href="person_view.php?id=<?= $k['id'] ?>#kyc" class="task-row">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($k['full_name']) ?></p>
                        <p class="text-xs text-gray-500">DIN: <?= $k['din'] ?></p>
                    </div>
                    <?php if ($k['din_kyc_due_date']): ?>
                    <span class="db-badge <?= strtotime($k['din_kyc_due_date']) < time() ? 'bg-red-100 text-red-700' : 'bg-rose-100 text-rose-700' ?> ml-2">
                        <?= date('d M', strtotime($k['din_kyc_due_date'])) ?>
                    </span>
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- CERTIFICATE EXPIRING -->
        <?php if (!empty($certExpiring)): ?>
        <div class="db-card">
            <div class="db-card-head">
                <h3><span class="head-icon bg-pink-100 text-pink-600"><i class="fas fa-award"></i></span> Certificates Expiring</h3>
            </div>
            <div>
                <?php foreach ($certExpiring as $ce): ?>
                <a href="view_client.php?id=<?= $ce['client_id'] ?>&tab=certificates" class="task-row">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-gray-800 truncate"><?= htmlspecialchars($ce['cert_name']) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= htmlspecialchars($ce['client_name']) ?></p>
                    </div>
                    <span class="db-badge <?= $ce['days_left'] <= 7 ? 'bg-red-100 text-red-700' : 'bg-pink-100 text-pink-700' ?> ml-2"><?= $ce['days_left'] ?>d</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- LEAVE REQUESTS (Supervisor) -->
        <?php if ($isSupervisor && !empty($pendingLeaveRequests)): ?>
        <div class="db-card">
            <div class="db-card-head" style="background:#eef2ff;">
                <h3><span class="head-icon bg-indigo-100 text-indigo-600"><i class="fas fa-calendar-times"></i></span> Leave Requests</h3>
                <span class="db-badge bg-indigo-100 text-indigo-700"><?= count($pendingLeaveRequests) ?></span>
            </div>
            <div>
                <?php foreach ($pendingLeaveRequests as $lr): ?>
                <div class="task-row">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm"><?= htmlspecialchars($lr['display_name']) ?></p>
                        <p class="text-xs text-gray-500">
                            <?= date('d M', strtotime($lr['start_date'])) ?>
                            <?= $lr['start_date'] !== $lr['end_date'] ? ' - '.date('d M', strtotime($lr['end_date'])) : '' ?>
                            · <?= htmlspecialchars($lr['leave_type'] ?? 'Leave') ?>
                        </p>
                    </div>
                    <div class="flex gap-1 ml-2">
                        <form method="POST" action="leave_management.php" class="inline"><input type="hidden" name="leave_id" value="<?= $lr['id'] ?>"><input type="hidden" name="action" value="approve">
                            <button class="w-7 h-7 bg-green-100 text-green-600 hover:bg-green-200 rounded-lg text-xs flex items-center justify-center"><i class="fas fa-check"></i></button>
                        </form>
                        <form method="POST" action="leave_management.php" class="inline"><input type="hidden" name="leave_id" value="<?= $lr['id'] ?>"><input type="hidden" name="action" value="reject">
                            <button class="w-7 h-7 bg-red-100 text-red-600 hover:bg-red-200 rounded-lg text-xs flex items-center justify-center"><i class="fas fa-times"></i></button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- TEAM ON LEAVE -->
        <?php if (!empty($teamMembersOnLeave)): ?>
        <div class="db-card">
            <div class="db-card-head" style="background:#ecfeff;">
                <h3><span class="head-icon bg-cyan-100 text-cyan-600"><i class="fas fa-user-clock"></i></span> On Leave Today</h3>
            </div>
            <div>
                <?php foreach ($teamMembersOnLeave as $ol): ?>
                <div class="task-row">
                    <div class="av" style="background:linear-gradient(135deg,#06b6d4,#0891b2);"><?= strtoupper(substr($ol['display_name'],0,1)) ?></div>
                    <div class="flex-1 min-w-0 ml-2.5">
                        <p class="font-semibold text-sm"><?= htmlspecialchars($ol['display_name']) ?></p>
                        <p class="text-xs text-gray-500"><?= htmlspecialchars($ol['leave_type'] ?? 'Leave') ?> · Until <?= date('d M', strtotime($ol['end_date'])) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- DOCUMENT SUMMARY -->
        <?php if (($docStats['total'] ?? 0) > 0): ?>
        <div class="db-card p-4">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">
                <i class="fas fa-file-alt mr-1"></i>Documents
            </p>
            <div class="grid grid-cols-3 gap-2 text-center">
                <a href="documents.php" class="p-2 bg-blue-50 rounded-lg hover:bg-blue-100">
                    <p class="text-lg font-bold text-blue-600"><?= $docStats['total'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Total</p>
                </a>
                <div class="p-2 bg-green-50 rounded-lg">
                    <p class="text-lg font-bold text-green-600"><?= $docStats['uploaded'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Uploaded</p>
                </div>
                <div class="p-2 bg-amber-50 rounded-lg">
                    <p class="text-lg font-bold text-amber-600"><?= $docStats['pending'] ?? 0 ?></p>
                    <p class="text-xs text-gray-500">Pending</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--           BOTTOM ROW: Billing · Trend · Team Workload          -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<?php if ($canSeeAll): ?>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-5">

    <!-- BILLING OVERVIEW -->
    <?php if (!empty($billingStats)): ?>
    <div class="db-card">
        <div class="db-card-head" style="background:#f0fdf4;">
            <h3><span class="head-icon bg-emerald-100 text-emerald-600"><i class="fas fa-file-invoice-dollar"></i></span> Billing</h3>
            <a href="invoices.php" class="link-badge">View All →</a>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-2 gap-3 mb-4">
                <div class="p-3 bg-blue-50 rounded-lg text-center">
                    <p class="text-xl font-bold text-blue-600">₹<?= number_format(($billingStats['invoiced_this_month'] ?? 0) / 1000, 1) ?>K</p>
                    <p class="text-xs text-gray-500">Invoiced (Month)</p>
                </div>
                <div class="p-3 bg-green-50 rounded-lg text-center">
                    <p class="text-xl font-bold text-green-600">₹<?= number_format(($billingStats['collected_this_month'] ?? 0) / 1000, 1) ?>K</p>
                    <p class="text-xs text-gray-500">Collected (Month)</p>
                </div>
            </div>
            <?php if (!empty($overdueClients)): ?>
            <p class="text-xs font-semibold text-red-600 mb-2"><i class="fas fa-exclamation-triangle mr-1"></i>Overdue Payments</p>
            <div class="space-y-1.5">
                <?php foreach (array_slice($overdueClients, 0, 4) as $oc): ?>
                <a href="view_client.php?id=<?= $oc['id'] ?>&tab=billing" class="flex justify-between items-center p-2 bg-red-50 rounded-lg hover:bg-red-100 text-sm">
                    <span class="text-gray-800 truncate"><?= htmlspecialchars($oc['client_name']) ?></span>
                    <span class="font-bold text-red-600 ml-2 flex-shrink-0">₹<?= number_format($oc['overdue_amount']) ?></span>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($recentPayments)): ?>
            <p class="text-xs font-semibold text-green-600 mt-4 mb-2"><i class="fas fa-money-check-alt mr-1"></i>Recent Payments</p>
            <div class="space-y-1.5">
                <?php foreach (array_slice($recentPayments, 0, 3) as $pay): ?>
                <div class="flex justify-between items-center p-2 bg-green-50 rounded-lg text-sm">
                    <div class="truncate">
                        <span class="text-gray-800"><?= htmlspecialchars($pay['client_name']) ?></span>
                        <span class="text-xs text-gray-400 ml-1"><?= date('d M', strtotime($pay['payment_date'])) ?></span>
                    </div>
                    <span class="font-bold text-green-600 ml-2 flex-shrink-0">₹<?= number_format($pay['amount'] ?? 0) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- MONTHLY TREND -->
    <?php if (!empty($monthlyTrend)): ?>
    <div class="db-card">
        <div class="db-card-head">
            <h3><span class="head-icon bg-blue-100 text-blue-600"><i class="fas fa-chart-bar"></i></span> Monthly Trend</h3>
        </div>
        <div class="p-4">
            <div class="flex items-end justify-between gap-3" style="height:160px;">
                <?php $maxR = max(array_column($monthlyTrend, 'requests') ?: [1]);
                foreach ($monthlyTrend as $mt):
                    $hPct = $maxR > 0 ? ($mt['requests'] / $maxR) * 100 : 0;
                    $cPct = $mt['requests'] > 0 ? ($mt['completed'] / $mt['requests']) * 100 : 0;
                ?>
                <div class="flex-1 flex flex-col items-center">
                    <div style="flex:1;display:flex;flex-direction:column;justify-content:flex-end;width:100%;max-width:36px;">
                        <div class="chart-bar bg-blue-200 relative" style="height:<?= max($hPct, 3) ?>%;">
                            <div class="absolute bottom-0 w-full bg-blue-500 rounded-t-sm" style="height:<?= $cPct ?>%;"></div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-2"><?= $mt['month_label'] ?></p>
                    <p class="text-xs font-bold text-gray-700"><?= $mt['requests'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="flex justify-center gap-5 mt-3 text-xs text-gray-500">
                <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-blue-500 rounded"></span>Completed</span>
                <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 bg-blue-200 rounded"></span>Total</span>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- TEAM WORKLOAD -->
    <?php if (!empty($teamWorkload)): ?>
    <div class="db-card">
        <div class="db-card-head">
            <h3><span class="head-icon bg-indigo-100 text-indigo-600"><i class="fas fa-users"></i></span> Team Workload</h3>
        </div>
        <div class="p-3 scroll-list space-y-2">
            <?php $maxT = max(array_column($teamWorkload, 'active_tasks') ?: [1]);
            $avColors = ['#3b82f6','#8b5cf6','#06b6d4','#10b981','#f59e0b','#ec4899','#6366f1','#14b8a6','#f97316','#e11d48'];
            foreach ($teamWorkload as $i => $tw):
                $pct = $maxT > 0 ? min(($tw['active_tasks'] / $maxT) * 100, 100) : 0;
                $bg = $avColors[$i % count($avColors)];
            ?>
            <div class="flex items-center gap-2.5">
                <div class="av" style="background:<?= $bg ?>;width:28px;height:28px;font-size:0.65rem;"><?= strtoupper(substr($tw['name'],0,1)) ?></div>
                <div class="flex-1 min-w-0">
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-xs font-medium text-gray-700 truncate"><?= htmlspecialchars($tw['name']) ?></span>
                        <div class="flex items-center gap-2 ml-2 flex-shrink-0">
                            <span class="text-xs text-gray-500"><?= $tw['active_tasks'] ?? 0 ?></span>
                            <?php if (($tw['overdue_tasks'] ?? 0) > 0): ?>
                            <span class="text-xs text-red-600 font-bold"><?= $tw['overdue_tasks'] ?>!</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="prog"><div class="fill" style="width:<?= $pct ?>%;background:<?= $bg ?>;"></div></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- TOP SERVICES (fallback if no billing) -->
    <?php if (empty($billingStats) && !empty($topServices)): ?>
    <div class="db-card">
        <div class="db-card-head">
            <h3><span class="head-icon bg-indigo-100 text-indigo-600"><i class="fas fa-chart-pie"></i></span> Top Services (3mo)</h3>
        </div>
        <div class="p-4 space-y-3">
            <?php $maxC = max(array_column($topServices, 'count'));
            foreach ($topServices as $ts):
                $pct = $maxC > 0 ? ($ts['count'] / $maxC) * 100 : 0;
            ?>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-700 truncate"><?= htmlspecialchars($ts['name']) ?></span>
                    <span class="font-bold text-gray-800"><?= $ts['count'] ?></span>
                </div>
                <div class="prog" style="height:6px;"><div class="fill bg-indigo-500" style="width:<?= $pct ?>%;"></div></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- ═══════════════════════════════════════════════════════════════ -->
<!--              SUPERVISOR TEAM SECTION                           -->
<!-- ═══════════════════════════════════════════════════════════════ -->
<?php if ($isSupervisor && !empty($teamMemberTasks)): ?>
<div class="db-card mb-5">
    <div class="db-card-head">
        <h3><span class="head-icon bg-indigo-100 text-indigo-600"><i class="fas fa-users-cog"></i></span> My Team (<?= count($teamMemberTasks) ?> members)</h3>
        <a href="leave_management.php" class="link-badge">Leave Mgmt →</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 p-4">
        <?php foreach ($teamMemberTasks as $i => $tm):
            $isOnLeave = false;
            foreach ($teamMembersOnLeave as $ol) { if ($ol['user_id'] == $tm['id']) { $isOnLeave = true; break; } }
            $bg = $avColors[$tm['id'] % count($avColors)];
        ?>
        <div class="flex items-center gap-3 p-3 rounded-lg border <?= $isOnLeave ? 'bg-cyan-50 border-cyan-200' : 'border-gray-100' ?>">
            <div class="av" style="background:<?= $bg ?>;"><?= strtoupper(substr($tm['name'],0,1)) ?></div>
            <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm truncate">
                    <?= htmlspecialchars($tm['name']) ?>
                    <?php if ($isOnLeave): ?><span class="db-badge bg-cyan-100 text-cyan-700 ml-1">Leave</span><?php endif; ?>
                </p>
                <div class="flex gap-3 text-xs">
                    <span class="text-amber-600"><?= $tm['active_tasks'] ?? 0 ?> active</span>
                    <?php if (($tm['overdue_tasks'] ?? 0) > 0): ?>
                    <span class="text-red-600 font-bold"><?= $tm['overdue_tasks'] ?> overdue</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- Reminders Widget -->
<?php @include 'includes/widget_reminders.php'; ?>

<?php require_once 'includes/footer.php'; ?>
