<?php
/**
 * PATRON ADMIN DASHBOARD
 * Header Include File - Reorganized Navigation
 * Updated: Better organization, Billing section expanded, missing items added
 */

ob_start();

require_once __DIR__ . '/db.php';
startSession();

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$currentUser = isLoggedIn() ? getCurrentUser() : null;
$userRoles = $currentUser ? getUserRoles($currentUser['id']) : [];
$roleCodes = array_column($userRoles, 'code');
$isAdmin = in_array('ADMIN', $roleCodes);
$isManager = in_array('MANAGER', $roleCodes);
$canManage = $isAdmin || $isManager;

// Check if user is a supervisor (has direct reports) - Combined with alert counts below
$isSupervisor = false;

$notificationCount = 0;
$alertCounts = [
    'dsc' => 0,
    'kyc' => 0,
    'requests' => 0,
    'reminders' => 0,
    'pending_leaves' => 0,
    'overdue_invoices' => 0,
    'pending_billing_approvals' => 0
];

// PERFORMANCE: Single query to get all counts instead of 8+ separate queries
if ($currentUser) {
    try {
        $userId = $currentUser['id'];
        
        // Combined counts query - reduces database round trips from ~10 to 1
        $counts = dbFetchOne("
            SELECT 
                -- Direct reports count (for supervisor check)
                (SELECT COUNT(*) FROM users WHERE supervisor_id = ? AND deleted_at IS NULL) as direct_reports,
                
                -- Notifications
                (SELECT COUNT(*) FROM notifications WHERE user_id = ? AND is_read = 0) as notifications,
                
                -- DSC expiring in 30 days
                (SELECT COUNT(*) FROM persons_new WHERE deleted_at IS NULL 
                 AND dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)) as dsc_expiring,
                
                -- KYC pending/overdue
                (SELECT COUNT(*) FROM persons_new WHERE deleted_at IS NULL 
                 AND din IS NOT NULL AND din != '' 
                 AND (din_kyc_status = 'PENDING' OR din_kyc_status = 'OVERDUE' 
                      OR (din_kyc_due_date IS NOT NULL AND din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED'))) as kyc_pending,
                
                -- Active requests
                (SELECT COUNT(*) FROM service_requests WHERE deleted_at IS NULL 
                 AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED', 'HOLD')) as active_requests,
                
                -- Reminders due
                (SELECT COUNT(*) FROM reminders WHERE user_id = ? AND status = 'PENDING' AND reminder_date <= CURDATE()) as reminders_due,
                
                -- Pending billing approvals (for current user)
                (SELECT COUNT(*) FROM billing_requests WHERE status = 'PENDING' AND approver_id = ?) as my_pending_approvals,
                
                -- All pending billing approvals (for admin)
                (SELECT COUNT(*) FROM billing_requests WHERE status = 'PENDING') as all_pending_approvals,
                
                -- Pending leaves (all)
                (SELECT COUNT(*) FROM leave_requests WHERE status = 'PENDING') as all_pending_leaves,
                
                -- Pending leaves (my direct reports)
                (SELECT COUNT(*) FROM leave_requests lr 
                 JOIN users u ON lr.user_id = u.id 
                 WHERE lr.status = 'PENDING' AND u.supervisor_id = ?) as my_team_pending_leaves
        ", [$userId, $userId, $userId, $userId, $userId]);
        
        // Parse results
        $isSupervisor = ($counts['direct_reports'] ?? 0) > 0;
        $notificationCount = $counts['notifications'] ?? 0;
        $alertCounts['dsc'] = $counts['dsc_expiring'] ?? 0;
        $alertCounts['kyc'] = $counts['kyc_pending'] ?? 0;
        $alertCounts['requests'] = $counts['active_requests'] ?? 0;
        $alertCounts['reminders'] = $counts['reminders_due'] ?? 0;
        
        // Billing approvals - admin sees all, others see their own
        $alertCounts['pending_billing_approvals'] = $isAdmin 
            ? ($counts['all_pending_approvals'] ?? 0) 
            : ($counts['my_pending_approvals'] ?? 0);
        
        // Leave requests - admin/manager sees all, supervisor sees team
        if ($isAdmin || $isManager) {
            $alertCounts['pending_leaves'] = $counts['all_pending_leaves'] ?? 0;
        } elseif ($isSupervisor) {
            $alertCounts['pending_leaves'] = $counts['my_team_pending_leaves'] ?? 0;
        }
        
    } catch (Exception $e) {
        // Fallback - all counts stay at 0
        error_log("Header counts query failed: " . $e->getMessage());
    }
    
    // Overdue invoices - separate query only if Zoho connected (conditional)
    try {
        $zohoCheck = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
        if (($zohoCheck['setting_value'] ?? '0') === '1') {
            $overdueInv = dbFetchOne("SELECT COUNT(*) as cnt FROM invoices WHERE due_date < CURDATE() AND balance_due > 0");
            $alertCounts['overdue_invoices'] = $overdueInv['cnt'] ?? 0;
        }
    } catch (Exception $e) {}
}

// Check Zoho connection
$zohoConnected = false;
try {
    $zohoCheck = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'is_connected'");
    $zohoConnected = ($zohoCheck['setting_value'] ?? '0') === '1';
} catch (Exception $e) {}

// Helper function to check active page
function isActivePage($currentPage, $pages) {
    return in_array($currentPage, (array)$pages);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Dashboard' ?> - <?= APP_NAME ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 300: '#93c5fd',
                            400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8',
                            800: '#1e40af', 900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        [x-cloak] { display: none !important; }
        .sidebar-link { display: flex; align-items: center; gap: 0.75rem; padding: 0.625rem 1rem; color: #4b5563; border-radius: 0.5rem; transition: all 0.2s; font-size: 0.875rem; }
        .sidebar-link:hover { background-color: #f3f4f6; }
        .sidebar-link.active { background-color: #eff6ff; color: #1d4ed8; font-weight: 500; }
        .sidebar-section { padding: 0.5rem 1rem; font-size: 0.65rem; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.05em; margin-top: 1rem; }
        .sidebar-section:first-child { margin-top: 0; }
        .alert-badge { font-size: 0.6rem; padding: 0.125rem 0.375rem; border-radius: 9999px; font-weight: 600; margin-left: auto; }
        .sidebar-divider { height: 1px; background: #e5e7eb; margin: 0.75rem 1rem; }
        .card { background-color: white; border-radius: 0.75rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; }
        .btn { padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 500; transition: all 0.2s; display: inline-flex; align-items: center; justify-content: center; }
        .btn-primary { background-color: #2563eb; color: white; }
        .btn-primary:hover { background-color: #1d4ed8; }
        .btn-secondary { background-color: #f3f4f6; color: #374151; }
        .btn-secondary:hover { background-color: #e5e7eb; }
        .btn-danger { background-color: #dc2626; color: white; }
        .btn-danger:hover { background-color: #b91c1c; }
        .btn-success { background-color: #16a34a; color: white; }
        .btn-success:hover { background-color: #15803d; }
        .btn-sm { padding: 0.375rem 0.75rem; font-size: 0.875rem; }
        .form-input { width: 100%; padding: 0.5rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; transition: all 0.2s; }
        .form-input:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

<?php if (isLoggedIn()): ?>
<div class="flex h-screen overflow-hidden">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col flex-shrink-0">
        <!-- Logo -->
        <div class="h-16 flex items-center justify-center border-b border-gray-200">
            <a href="dashboard.php" class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold">P</span>
                </div>
                <span class="text-xl font-bold text-gray-800"><?= APP_NAME ?></span>
            </a>
        </div>

        <nav class="flex-1 p-4 space-y-0.5 overflow-y-auto">
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- MAIN -->
            <!-- ═══════════════════════════════════════════ -->
            <a href="dashboard.php" class="sidebar-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>">
                <i class="fas fa-home w-5"></i><span>Dashboard</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- WORK -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Work</div>
            
            <a href="requests.php" class="sidebar-link <?= isActivePage($currentPage, ['requests', 'work_board', 'add_request', 'view_request', 'edit_request', 'request_view']) ? 'active' : '' ?>">
                <i class="fas fa-clipboard-list w-5"></i><span>Service Requests</span>
                <?php if (($alertCounts['requests'] ?? 0) > 0): ?>
                <span class="alert-badge bg-blue-100 text-blue-700"><?= $alertCounts['requests'] ?></span>
                <?php endif; ?>
            </a>
            
            <a href="reminders.php" class="sidebar-link <?= isActivePage($currentPage, ['reminders', 'add_reminder', 'edit_reminder']) ? 'active' : '' ?>">
                <i class="fas fa-bell w-5"></i><span>My Reminders</span>
                <?php if (($alertCounts['reminders'] ?? 0) > 0): ?>
                <span class="alert-badge bg-amber-100 text-amber-700"><?= $alertCounts['reminders'] ?></span>
                <?php endif; ?>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- CLIENTS & PERSONS -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Clients & Persons</div>
            
            <a href="clients.php" class="sidebar-link <?= isActivePage($currentPage, ['clients', 'add_client', 'edit_client', 'view_client']) ? 'active' : '' ?>">
                <i class="fas fa-building w-5"></i><span>Clients</span>
            </a>
            
            <a href="persons.php" class="sidebar-link <?= isActivePage($currentPage, ['persons', 'add_person', 'edit_person', 'view_person', 'person_view']) ? 'active' : '' ?>">
                <i class="fas fa-users w-5"></i><span>Persons</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- BILLING (Only if Zoho connected) -->
            <!-- ═══════════════════════════════════════════ -->
            <?php if ($zohoConnected): ?>
            <div class="sidebar-section">Billing</div>
            
            <a href="billing_requests.php" class="sidebar-link <?= isActivePage($currentPage, ['billing_requests', 'billing_request', 'billing_request_view']) ? 'active' : '' ?>">
                <i class="fas fa-file-invoice w-5"></i><span>Billing Requests</span>
            </a>
            
            <?php if ($canManage): ?>
            <a href="billing_approvals.php" class="sidebar-link <?= $currentPage === 'billing_approvals' ? 'active' : '' ?>">
                <i class="fas fa-check-double w-5"></i><span>Approvals</span>
                <?php if (($alertCounts['pending_billing_approvals'] ?? 0) > 0): ?>
                <span class="alert-badge bg-amber-100 text-amber-700"><?= $alertCounts['pending_billing_approvals'] ?></span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
            
            <div class="sidebar-divider"></div>
            
            <a href="invoices.php" class="sidebar-link <?= isActivePage($currentPage, ['invoices', 'billing', 'view_invoice', 'zoho_pdf']) ? 'active' : '' ?>">
                <i class="fas fa-file-invoice-dollar w-5"></i><span>Invoices</span>
                <?php if (($alertCounts['overdue_invoices'] ?? 0) > 0): ?>
                <span class="alert-badge bg-red-100 text-red-700"><?= $alertCounts['overdue_invoices'] ?></span>
                <?php endif; ?>
            </a>
            
            <a href="estimates.php" class="sidebar-link <?= isActivePage($currentPage, ['estimates', 'view_estimate']) ? 'active' : '' ?>">
                <i class="fas fa-file-alt w-5"></i><span>Estimates</span>
            </a>
            
            <a href="payments.php" class="sidebar-link <?= isActivePage($currentPage, ['payments', 'view_payment']) ? 'active' : '' ?>">
                <i class="fas fa-money-check-alt w-5"></i><span>Payments</span>
            </a>
            
            <?php if ($isAdmin): ?>
            <div class="sidebar-divider"></div>
            <a href="billing_categories.php" class="sidebar-link <?= $currentPage === 'billing_categories' ? 'active' : '' ?>">
                <i class="fas fa-tags w-5"></i><span>Billing Categories</span>
            </a>
            <a href="billing_items.php" class="sidebar-link <?= $currentPage === 'billing_items' ? 'active' : '' ?>">
                <i class="fas fa-list-ul w-5"></i><span>Billing Items</span>
            </a>
            <?php endif; ?>
            <?php endif; ?>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- COMPLIANCE -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Compliance</div>
            
            <a href="compliance_tracker.php" class="sidebar-link <?= isActivePage($currentPage, ['compliance_tracker', 'compliance_entry', 'compliance_calendar']) ? 'active' : '' ?>">
                <i class="fas fa-tasks w-5"></i><span>Compliance Tracker</span>
            </a>
            
            <a href="dsc_dashboard.php" class="sidebar-link <?= $currentPage === 'dsc_dashboard' ? 'active' : '' ?>">
                <i class="fas fa-key w-5"></i><span>DSC Dashboard</span>
                <?php if (($alertCounts['dsc'] ?? 0) > 0): ?>
                <span class="alert-badge bg-orange-100 text-orange-700"><?= $alertCounts['dsc'] ?></span>
                <?php endif; ?>
            </a>
            
            <a href="kyc_dashboard.php" class="sidebar-link <?= $currentPage === 'kyc_dashboard' ? 'active' : '' ?>">
                <i class="fas fa-clipboard-check w-5"></i><span>KYC Dashboard</span>
                <?php if (($alertCounts['kyc'] ?? 0) > 0): ?>
                <span class="alert-badge bg-red-100 text-red-700"><?= $alertCounts['kyc'] ?></span>
                <?php endif; ?>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- DOCUMENTS -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Documents</div>
            
            <a href="documents.php" class="sidebar-link <?= isActivePage($currentPage, ['documents', 'view_document']) ? 'active' : '' ?>">
                <i class="fas fa-folder-open w-5"></i><span>All Documents</span>
            </a>
            
            <a href="certificates.php" class="sidebar-link <?= isActivePage($currentPage, ['certificates', 'add_certificate', 'view_certificate']) ? 'active' : '' ?>">
                <i class="fas fa-certificate w-5"></i><span>Certificates</span>
            </a>
            
            <a href="board_resolutions.php" class="sidebar-link <?= isActivePage($currentPage, ['board_resolutions', 'add_board_resolution', 'view_board_resolution']) ? 'active' : '' ?>">
                <i class="fas fa-gavel w-5"></i><span>Board Resolutions</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- TOOLS -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Tools</div>
            
            <a href="certificate_ocr.php" class="sidebar-link <?= $currentPage === 'certificate_ocr' ? 'active' : '' ?>">
                <i class="fas fa-file-import w-5"></i><span>Certificate OCR</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- REPORTS -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Reports</div>
            
            <a href="reports.php" class="sidebar-link <?= $currentPage === 'reports' ? 'active' : '' ?>">
                <i class="fas fa-chart-bar w-5"></i><span>Analytics</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- TEAM (For Managers & Admin) -->
            <!-- ═══════════════════════════════════════════ -->
            <?php if ($canManage): ?>
            <div class="sidebar-section">Team</div>
            
            <a href="team.php" class="sidebar-link <?= isActivePage($currentPage, ['team', 'add_user', 'edit_user', 'view_user']) ? 'active' : '' ?>">
                <i class="fas fa-user-friends w-5"></i><span>Team Members</span>
            </a>
            
            <a href="client_teams.php" class="sidebar-link <?= isActivePage($currentPage, ['client_teams', 'assign_team']) ? 'active' : '' ?>">
                <i class="fas fa-user-tie w-5"></i><span>Client Assignments</span>
            </a>
            <?php endif; ?>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- HR / LEAVE (For All Users) -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">HR</div>
            
            <a href="apply_leave.php" class="sidebar-link <?= $currentPage === 'apply_leave' ? 'active' : '' ?>">
                <i class="fas fa-calendar-plus w-5"></i><span>Apply Leave</span>
            </a>
            
            <?php if ($canManage || $isSupervisor): ?>
            <a href="leave_management.php" class="sidebar-link <?= $currentPage === 'leave_management' ? 'active' : '' ?>">
                <i class="fas fa-calendar-check w-5"></i><span>Leave Management</span>
                <?php if (($alertCounts['pending_leaves'] ?? 0) > 0): ?>
                <span class="alert-badge bg-amber-100 text-amber-700"><?= $alertCounts['pending_leaves'] ?></span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- MASTERS (All Users) -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="sidebar-section">Masters</div>
            
            <a href="services.php" class="sidebar-link <?= isActivePage($currentPage, ['services', 'add_service', 'edit_service', 'service_tasks', 'service_documents', 'service_info_fields']) ? 'active' : '' ?>">
                <i class="fas fa-cogs w-5"></i><span>Services</span>
            </a>
            
            <a href="compliance_types.php" class="sidebar-link <?= isActivePage($currentPage, ['compliance_types', 'add_compliance_type', 'edit_compliance_type']) ? 'active' : '' ?>">
                <i class="fas fa-list-check w-5"></i><span>Compliance Types</span>
            </a>
            
            <a href="document_types.php" class="sidebar-link <?= $currentPage === 'document_types' ? 'active' : '' ?>">
                <i class="fas fa-file-invoice w-5"></i><span>Document Types</span>
            </a>
            
            <a href="information_fields.php" class="sidebar-link <?= $currentPage === 'information_fields' ? 'active' : '' ?>">
                <i class="fas fa-list-alt w-5"></i><span>Info Fields</span>
            </a>
            
            <a href="certificate_types.php" class="sidebar-link <?= $currentPage === 'certificate_types' ? 'active' : '' ?>">
                <i class="fas fa-award w-5"></i><span>Certificate Types</span>
            </a>
            
            <a href="password_portals.php" class="sidebar-link <?= $currentPage === 'password_portals' ? 'active' : '' ?>">
                <i class="fas fa-lock w-5"></i><span>Password Portals</span>
            </a>
            
            <!-- ═══════════════════════════════════════════ -->
            <!-- ADMINISTRATION (Admin Only) -->
            <!-- ═══════════════════════════════════════════ -->
            <?php if ($isAdmin): ?>
            <div class="sidebar-section">Administration</div>
            
            <a href="activity_logs.php" class="sidebar-link <?= $currentPage === 'activity_logs' ? 'active' : '' ?>">
                <i class="fas fa-history w-5"></i><span>Activity Logs</span>
            </a>
            
            <a href="zoho_settings.php" class="sidebar-link <?= isActivePage($currentPage, ['zoho_settings', 'zoho_sync']) ? 'active' : '' ?>">
                <i class="fas fa-plug w-5"></i><span>Zoho Integration</span>
                <?php if (!$zohoConnected): ?>
                <span class="alert-badge bg-gray-100 text-gray-500">!</span>
                <?php endif; ?>
            </a>
            
            <a href="settings.php" class="sidebar-link <?= $currentPage === 'settings' ? 'active' : '' ?>">
                <i class="fas fa-sliders-h w-5"></i><span>Settings</span>
            </a>
            <?php endif; ?>
            
        </nav>
        
        <!-- User Info Footer -->
        <div class="p-4 border-t border-gray-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 font-medium"><?= strtoupper(substr($currentUser['display_name'] ?? $currentUser['name'] ?? 'U', 0, 1)) ?></span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate"><?= htmlspecialchars($currentUser['display_name'] ?? $currentUser['name'] ?? 'User') ?></p>
                    <p class="text-xs text-gray-500 truncate"><?= !empty($userRoles) ? implode(', ', array_column($userRoles, 'name')) : 'Staff' ?></p>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Header Bar -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 flex-shrink-0">
            <h1 class="text-xl font-semibold text-gray-800"><?= $pageTitle ?? 'Dashboard' ?></h1>
            
            <div class="flex items-center gap-4">
                <!-- Quick Add Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="btn btn-primary text-sm">
                        <i class="fas fa-plus mr-2"></i>Quick Add
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute right-0 mt-2 w-52 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                        <div class="px-3 py-2 text-xs text-gray-400 font-semibold uppercase">Create New</div>
                        <a href="add_client.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-building mr-2 text-blue-500 w-4"></i>New Client
                        </a>
                        <a href="add_person.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user mr-2 text-green-500 w-4"></i>New Person
                        </a>
                        <a href="add_request.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-clipboard-list mr-2 text-purple-500 w-4"></i>New Request
                        </a>
                        <a href="billing_request.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-file-invoice mr-2 text-teal-500 w-4"></i>New Billing Request
                        </a>
                        <a href="reminders.php?action=add" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-bell mr-2 text-amber-500 w-4"></i>New Reminder
                        </a>
                        <?php if ($canManage): ?>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="add_user.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user-plus mr-2 text-indigo-500 w-4"></i>New Team Member
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Notifications -->
                <a href="notifications.php" class="relative text-gray-500 hover:text-gray-700 p-2">
                    <i class="fas fa-bell text-xl"></i>
                    <?php if ($notificationCount > 0): ?>
                    <span class="absolute top-0 right-0 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center"><?= $notificationCount > 9 ? '9+' : $notificationCount ?></span>
                    <?php endif; ?>
                </a>
                
                <!-- User Menu -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center gap-2 text-gray-700 hover:text-gray-900">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-medium text-sm"><?= strtoupper(substr($currentUser['display_name'] ?? $currentUser['name'] ?? 'U', 0, 1)) ?></span>
                        </div>
                        <span class="hidden md:inline text-sm font-medium"><?= htmlspecialchars($currentUser['display_name'] ?? '') ?></span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                        <div class="px-4 py-2 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-900"><?= htmlspecialchars($currentUser['display_name'] ?? $currentUser['name'] ?? 'User') ?></p>
                            <p class="text-xs text-gray-500"><?= htmlspecialchars($currentUser['email'] ?? '') ?></p>
                        </div>
                        <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user mr-2 w-4"></i>My Profile
                        </a>
                        <a href="change_password.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-key mr-2 w-4"></i>Change Password
                        </a>
                        <hr class="my-1">
                        <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2 w-4"></i>Logout
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <?php $flash = getFlash(); if ($flash): ?>
            <div class="mb-6 p-4 rounded-lg <?= $flash['type'] === 'success' ? 'bg-green-100 text-green-800' : ($flash['type'] === 'warning' ? 'bg-amber-100 text-amber-800' : 'bg-red-100 text-red-800') ?>">
                <div class="flex items-center gap-2">
                    <i class="fas <?= $flash['type'] === 'success' ? 'fa-check-circle' : ($flash['type'] === 'warning' ? 'fa-exclamation-triangle' : 'fa-exclamation-circle') ?>"></i>
                    <span><?= $flash['message'] ?></span>
                </div>
            </div>
            <?php endif; ?>
<?php endif; ?>
