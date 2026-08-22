<?php
/**
 * PATRON ADMIN DASHBOARD
 * Header Include File - Updated with DSC Dashboard & Persons
 */

ob_start();

require_once __DIR__ . '/db.php';
startSession();

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$currentUser = isLoggedIn() ? getCurrentUser() : null;
$userRoles = $currentUser ? getUserRoles($currentUser['id']) : [];

$notificationCount = 0;
if ($currentUser) {
    $result = dbFetchOne("SELECT COUNT(*) as count FROM notifications WHERE user_id = ? AND is_read = 0", [$currentUser['id']]);
    $notificationCount = $result['count'] ?? 0;
}

// Get alert counts for badges
$alertCounts = [];
if ($currentUser) {
    // DSC expiring in 30 days
    $dscAlert = dbFetchOne("SELECT COUNT(*) as cnt FROM persons_new WHERE deleted_at IS NULL AND dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)");
    $alertCounts['dsc'] = $dscAlert['cnt'] ?? 0;
    
    // KYC pending/overdue
    $kycAlert = dbFetchOne("SELECT COUNT(*) as cnt FROM persons_new WHERE deleted_at IS NULL AND din IS NOT NULL AND din != '' AND (din_kyc_status = 'PENDING' OR din_kyc_status = 'OVERDUE' OR (din_kyc_due_date IS NOT NULL AND din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED'))");
    $alertCounts['kyc'] = $kycAlert['cnt'] ?? 0;
    
    // New requests
    $newRequests = dbFetchOne("SELECT COUNT(*) as cnt FROM service_requests WHERE deleted_at IS NULL AND status = 'NEW'");
    $alertCounts['requests'] = $newRequests['cnt'] ?? 0;
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
        
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.625rem 1rem;
            color: #4b5563;
            border-radius: 0.5rem;
            transition: all 0.2s;
            font-size: 0.875rem;
        }
        .sidebar-link:hover { background-color: #f3f4f6; }
        .sidebar-link.active { background-color: #eff6ff; color: #1d4ed8; font-weight: 500; }
        
        .sidebar-section { 
            padding: 0.5rem 1rem; 
            font-size: 0.65rem; 
            font-weight: 600; 
            color: #9ca3af; 
            text-transform: uppercase; 
            letter-spacing: 0.05em;
            margin-top: 1rem;
        }
        
        .alert-badge {
            font-size: 0.6rem;
            padding: 0.125rem 0.375rem;
            border-radius: 9999px;
            font-weight: 600;
            margin-left: auto;
        }
        
        .card { background-color: white; border-radius: 0.75rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; }
        
        .btn { padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: 500; transition: all 0.2s; display: inline-flex; align-items: center; justify-content: center; }
        .btn:focus { outline: none; ring: 2px; ring-offset: 2px; }
        .btn-primary { background-color: #2563eb; color: white; }
        .btn-primary:hover { background-color: #1d4ed8; }
        .btn-secondary { background-color: #f3f4f6; color: #374151; }
        .btn-secondary:hover { background-color: #e5e7eb; }
        .btn-danger { background-color: #dc2626; color: white; }
        .btn-danger:hover { background-color: #b91c1c; }
        .btn-success { background-color: #16a34a; color: white; }
        .btn-success:hover { background-color: #15803d; }
        
        .form-input { width: 100%; padding: 0.5rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; transition: all 0.2s; }
        .form-input:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.25rem; }
        
        .table-container { overflow-x: auto; }
        .data-table { width: 100%; }
        .data-table th { padding: 0.75rem 1rem; text-align: left; font-size: 0.75rem; font-weight: 500; color: #6b7280; text-transform: uppercase; letter-spacing: 0.05em; background-color: #f9fafb; }
        .data-table td { padding: 1rem; font-size: 0.875rem; color: #111827; border-bottom: 1px solid #f3f4f6; }
        .data-table tbody tr:hover { background-color: #f9fafb; }
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
        
        <!-- Navigation -->
        <nav class="flex-1 p-4 space-y-0.5 overflow-y-auto">
            <!-- Main -->
            <a href="dashboard.php" class="sidebar-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>">
                <i class="fas fa-home w-5"></i>
                <span>Dashboard</span>
            </a>
            
            <a href="work_board.php" class="sidebar-link <?= in_array($currentPage, ['work_board', 'requests', 'add_request', 'view_request']) ? 'active' : '' ?>">
                <i class="fas fa-columns w-5"></i>
                <span>Work Board</span>
                <?php if (($alertCounts['requests'] ?? 0) > 0): ?>
                <span class="alert-badge bg-blue-100 text-blue-700"><?= $alertCounts['requests'] ?></span>
                <?php endif; ?>
            </a>
            
            <a href="clients.php" class="sidebar-link <?= in_array($currentPage, ['clients', 'add_client', 'edit_client', 'client_view']) ? 'active' : '' ?>">
                <i class="fas fa-building w-5"></i>
                <span>Clients</span>
            </a>
            
            <a href="persons.php" class="sidebar-link <?= in_array($currentPage, ['persons', 'add_person', 'edit_person', 'person_view']) ? 'active' : '' ?>">
                <i class="fas fa-users w-5"></i>
                <span>Persons</span>
            </a>
            
            <!-- Compliance Section -->
            <div class="sidebar-section">Compliance</div>
            
            <a href="dsc_dashboard.php" class="sidebar-link <?= $currentPage === 'dsc_dashboard' ? 'active' : '' ?>">
                <i class="fas fa-key w-5"></i>
                <span>DSC Dashboard</span>
                <?php if (($alertCounts['dsc'] ?? 0) > 0): ?>
                <span class="alert-badge bg-orange-100 text-orange-700"><?= $alertCounts['dsc'] ?></span>
                <?php endif; ?>
            </a>
            
            <a href="kyc_dashboard.php" class="sidebar-link <?= $currentPage === 'kyc_dashboard' ? 'active' : '' ?>">
                <i class="fas fa-clipboard-check w-5"></i>
                <span>KYC Dashboard</span>
                <?php if (($alertCounts['kyc'] ?? 0) > 0): ?>
                <span class="alert-badge bg-red-100 text-red-700"><?= $alertCounts['kyc'] ?></span>
                <?php endif; ?>
            </a>
            
            <!-- Documents Section -->
            <div class="sidebar-section">Documents</div>
            
            <a href="documents.php" class="sidebar-link <?= $currentPage === 'documents' ? 'active' : '' ?>">
                <i class="fas fa-folder-open w-5"></i>
                <span>All Documents</span>
            </a>
            
            <a href="certificates.php" class="sidebar-link <?= in_array($currentPage, ['certificates', 'add_certificate']) ? 'active' : '' ?>">
                <i class="fas fa-certificate w-5"></i>
                <span>Certificates</span>
            </a>
            
            <!-- Reports Section -->
            <div class="sidebar-section">Analytics</div>
            
            <a href="reports.php" class="sidebar-link <?= $currentPage === 'reports' ? 'active' : '' ?>">
                <i class="fas fa-chart-bar w-5"></i>
                <span>Reports</span>
            </a>
            
            <!-- Admin Section -->
            <?php if (isAdmin()): ?>
            <div class="sidebar-section">Administration</div>
            
            <a href="services.php" class="sidebar-link <?= in_array($currentPage, ['services', 'add_service', 'edit_service', 'service_documents', 'service_info_fields']) ? 'active' : '' ?>">
                <i class="fas fa-cogs w-5"></i>
                <span>Services</span>
            </a>
            
            <a href="document_types.php" class="sidebar-link <?= in_array($currentPage, ['document_types', 'add_document_type', 'edit_document_type']) ? 'active' : '' ?>">
                <i class="fas fa-file-invoice w-5"></i>
                <span>Document Types</span>
            </a>
            
            <a href="information_fields.php" class="sidebar-link <?= in_array($currentPage, ['information_fields', 'add_information_field', 'edit_information_field']) ? 'active' : '' ?>">
                <i class="fas fa-list-alt w-5"></i>
                <span>Info Fields</span>
            </a>
            
            <a href="certificate_types.php" class="sidebar-link <?= $currentPage === 'certificate_types' ? 'active' : '' ?>">
                <i class="fas fa-award w-5"></i>
                <span>Cert Types</span>
            </a>
            
            <a href="team.php" class="sidebar-link <?= in_array($currentPage, ['team', 'add_user', 'edit_user']) ? 'active' : '' ?>">
                <i class="fas fa-user-cog w-5"></i>
                <span>Team</span>
            </a>
            
            <a href="activity_logs.php" class="sidebar-link <?= $currentPage === 'activity_logs' ? 'active' : '' ?>">
                <i class="fas fa-history w-5"></i>
                <span>Activity Logs</span>
            </a>
            <?php endif; ?>
        </nav>
        
        <!-- User Info at bottom -->
        <div class="p-4 border-t border-gray-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-blue-600 font-medium">
                        <?= strtoupper(substr($currentUser['display_name'] ?? $currentUser['name'] ?? 'U', 0, 1)) ?>
                    </span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate"><?= htmlspecialchars($currentUser['display_name'] ?? $currentUser['name'] ?? 'User') ?></p>
                    <p class="text-xs text-gray-500 truncate">
                        <?= !empty($userRoles) ? implode(', ', array_column($userRoles, 'name')) : 'Staff' ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 flex-shrink-0">
            <div class="flex items-center gap-4">
                <h1 class="text-xl font-semibold text-gray-800"><?= $pageTitle ?? 'Dashboard' ?></h1>
            </div>
            
            <div class="flex items-center gap-4">
                <!-- Quick Actions -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="btn btn-primary text-sm">
                        <i class="fas fa-plus mr-2"></i>Quick Add
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                        <a href="add_client.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-building mr-2 text-blue-500"></i>New Client
                        </a>
                        <a href="add_person.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user mr-2 text-green-500"></i>New Person
                        </a>
                        <a href="add_request.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-clipboard-list mr-2 text-purple-500"></i>New Request
                        </a>
                    </div>
                </div>
                
                <!-- Notifications -->
                <button class="relative text-gray-500 hover:text-gray-700">
                    <i class="fas fa-bell text-xl"></i>
                    <?php if ($notificationCount > 0): ?>
                    <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">
                        <?= $notificationCount > 9 ? '9+' : $notificationCount ?>
                    </span>
                    <?php endif; ?>
                </button>
                
                <!-- Profile Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center gap-2 text-gray-700 hover:text-gray-900">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <span class="text-blue-600 font-medium text-sm">
                                <?= strtoupper(substr($currentUser['display_name'] ?? $currentUser['name'] ?? 'U', 0, 1)) ?>
                            </span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    
                    <div x-show="open" @click.away="open = false" x-cloak
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                        <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>
                        <hr class="my-1">
                        <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <?php
            $flash = getFlash();
            if ($flash):
            ?>
            <div class="mb-6 p-4 rounded-lg <?= $flash['type'] === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                <div class="flex items-center gap-2">
                    <i class="fas <?= $flash['type'] === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle' ?>"></i>
                    <span><?= $flash['message'] ?></span>
                </div>
            </div>
            <?php endif; ?>
<?php endif; ?>
