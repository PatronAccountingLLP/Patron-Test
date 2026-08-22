<?php
/**
 * PATRON - Compliance Management Hub
 * Tab 1: Bulk Map - Pick a compliance type, bulk-assign clients
 * Tab 2: Generate Periods - Generate tracker entries for mapped client-compliances
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Compliance Management';
$currentUser = getCurrentUser();
$userId = $currentUser['id'];

// Check for enhanced columns
$hasEnhancedColumns = false;
try {
    $cols = dbFetchAll("SHOW COLUMNS FROM compliance_types LIKE 'due_month_absolute'");
    $hasEnhancedColumns = !empty($cols);
} catch (Exception $e) {}

// FY calculations
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');
$fyStart = $currentMonth >= 4 ? $currentYear : $currentYear - 1;
$fyEnd = $fyStart + 1;
$currentFY = $fyStart . '-' . substr($fyEnd, 2);

$fyMonths = [
    4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July',
    8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November',
    12 => 'December', 1 => 'January', 2 => 'February', 3 => 'March'
];

$fys = [];
for ($y = $fyStart - 1; $y <= $fyStart + 1; $y++) {
    $fys[] = $y . '-' . substr($y + 1, 2);
}

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue', 'icon' => 'fa-file-invoice'],
    'TDS' => ['label' => 'TDS', 'color' => 'green', 'icon' => 'fa-hand-holding-usd'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber', 'icon' => 'fa-landmark'],
    'ROC' => ['label' => 'ROC/MCA', 'color' => 'purple', 'icon' => 'fa-building'],
    'PF_ESI' => ['label' => 'PF & ESI', 'color' => 'teal', 'icon' => 'fa-shield-alt'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray', 'icon' => 'fa-file-alt']
];

$entityTypes = [
    'PVT_LTD' => 'Pvt Ltd', 'PUBLIC_LTD' => 'Public Ltd', 'OPC' => 'OPC',
    'LLP' => 'LLP', 'PARTNERSHIP' => 'Partnership', 'PROPRIETORSHIP' => 'Proprietorship',
    'HUF' => 'HUF', 'TRUST' => 'Trust', 'SECTION_8' => 'Section 8', 'AOP' => 'AOP'
];

// ════════════════════════════════════════════
//  HANDLE POST ACTIONS
// ════════════════════════════════════════════

if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';

    // ── BULK MAP: Save compliance-client mappings ──
    if ($action === 'bulk_map') {
        $complianceTypeId = (int)($_POST['compliance_type_id'] ?? 0);
        $selectedClients = $_POST['mapped_clients'] ?? [];
        // Cast all to int
        $selectedClients = array_map('intval', $selectedClients);
        
        if ($complianceTypeId > 0) {
            // Get ALL existing records (active + inactive) for this compliance type
            $allExisting = dbFetchAll("
                SELECT id, client_id, is_active FROM client_compliances 
                WHERE compliance_type_id = ?
            ", [$complianceTypeId]) ?: [];
            
            $existingByClient = [];
            foreach ($allExisting as $row) {
                $existingByClient[(int)$row['client_id']] = $row;
            }
            
            $currentlyActive = array_filter($allExisting, fn($r) => $r['is_active'] == 1);
            $currentActiveIds = array_map(fn($r) => (int)$r['client_id'], $currentlyActive);
            
            $added = 0;
            $removed = 0;
            
            // Add new mappings (clients that are selected but not currently active)
            foreach ($selectedClients as $clientId) {
                if (isset($existingByClient[$clientId])) {
                    // Record exists - reactivate if inactive
                    if ($existingByClient[$clientId]['is_active'] == 0) {
                        dbExecute("UPDATE client_compliances SET is_active = 1, updated_at = NOW() WHERE id = ?", 
                            [$existingByClient[$clientId]['id']]);
                        $added++;
                    }
                } else {
                    // No record - insert new
                    dbExecute("
                        INSERT INTO client_compliances (client_id, compliance_type_id, is_active, created_at) 
                        VALUES (?, ?, 1, NOW())
                    ", [$clientId, $complianceTypeId]);
                    $added++;
                }
            }
            
            // Deactivate removed mappings (clients that were active but are now unchecked)
            foreach ($currentActiveIds as $existingClientId) {
                if (!in_array($existingClientId, $selectedClients)) {
                    dbExecute("
                        UPDATE client_compliances SET is_active = 0, updated_at = NOW() 
                        WHERE client_id = ? AND compliance_type_id = ? AND is_active = 1
                    ", [$existingClientId, $complianceTypeId]);
                    $removed++;
                }
            }
            
            $ctName = dbFetchOne("SELECT name FROM compliance_types WHERE id = ?", [$complianceTypeId])['name'] ?? '';
            $totalNow = count($selectedClients);
            
            if ($added > 0 || $removed > 0) {
                setFlash('success', "$ctName: $added client(s) added, $removed removed. Total mapped: $totalNow");
            } else {
                setFlash('info', "$ctName: No changes made. Total mapped: $totalNow");
            }
        }
        
        header('Location: compliance_generate.php?tab=map&ct=' . $complianceTypeId);
        exit;
    }

    // ── GENERATE PERIODS ──
    if ($action === 'generate') {
        $targetFY = sanitize($_POST['financial_year'] ?? $currentFY);
        $startFromMonth = (int)($_POST['start_from_month'] ?? 4);
        $selectedClients = $_POST['clients'] ?? [];
        $selectedCompliances = $_POST['compliances'] ?? [];
        
        $fyParts = explode('-', $targetFY);
        $fyStartYear = (int)$fyParts[0];
        $fyEndYear = $fyStartYear + 1;
        
        $generated = 0;
        $skipped = 0;
        $errors = [];
        
        $whereClause = "cc.is_active = 1";
        $params = [];
        
        if (!empty($selectedClients)) {
            $placeholders = implode(',', array_fill(0, count($selectedClients), '?'));
            $whereClause .= " AND cc.client_id IN ($placeholders)";
            $params = array_merge($params, $selectedClients);
        }
        
        if (!empty($selectedCompliances)) {
            $placeholders = implode(',', array_fill(0, count($selectedCompliances), '?'));
            $whereClause .= " AND cc.compliance_type_id IN ($placeholders)";
            $params = array_merge($params, $selectedCompliances);
        }
        
        $clientCompliances = dbFetchAll("
            SELECT cc.*, ct.*, c.name as client_name, c.entity_type, cc.custom_due_day
            FROM client_compliances cc
            JOIN compliance_types ct ON cc.compliance_type_id = ct.id
            JOIN clients c ON cc.client_id = c.id
            WHERE $whereClause AND ct.is_active = 1 AND ct.deleted_at IS NULL AND c.deleted_at IS NULL
        ", $params) ?: [];
        
        // Helper functions
        function shouldIncludeMonth($month, $startFromMonth) {
            $fyOrder = [4=>1,5=>2,6=>3,7=>4,8=>5,9=>6,10=>7,11=>8,12=>9,1=>10,2=>11,3=>12];
            return $fyOrder[$month] >= $fyOrder[$startFromMonth];
        }
        function shouldIncludeQuarter($quarterEndMonth, $startFromMonth) {
            $fyOrder = [4=>1,5=>2,6=>3,7=>4,8=>5,9=>6,10=>7,11=>8,12=>9,1=>10,2=>11,3=>12];
            return $fyOrder[$startFromMonth] <= $fyOrder[$quarterEndMonth];
        }
        function shouldIncludeHalfYear($halfEndMonth, $startFromMonth) {
            $fyOrder = [4=>1,5=>2,6=>3,7=>4,8=>5,9=>6,10=>7,11=>8,12=>9,1=>10,2=>11,3=>12];
            return $fyOrder[$startFromMonth] <= $fyOrder[$halfEndMonth];
        }
        
        foreach ($clientCompliances as $cc) {
            $periods = [];
            $startDaysBefore = $cc['start_days_before'] ?? 7;
            $dueDay = $cc['custom_due_day'] ?? $cc['due_day'] ?? 20;
            
            if ($cc['frequency'] === 'MONTHLY') {
                for ($m = 4; $m <= 15; $m++) {
                    $month = $m > 12 ? $m - 12 : $m;
                    $year = $m > 12 ? $fyEndYear : $fyStartYear;
                    if (!shouldIncludeMonth($month, $startFromMonth)) continue;
                    
                    $periodStart = "$year-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-01";
                    $periodEnd = date('Y-m-t', strtotime($periodStart));
                    $periodName = date('M Y', strtotime($periodStart));
                    $dueMonth = $month + ($cc['due_month_offset'] ?? 1);
                    $dueYear = $year;
                    while ($dueMonth > 12) { $dueMonth -= 12; $dueYear++; }
                    $actualDueDay = min($dueDay, cal_days_in_month(CAL_GREGORIAN, $dueMonth, $dueYear));
                    $dueDate = "$dueYear-" . str_pad($dueMonth, 2, '0', STR_PAD_LEFT) . "-" . str_pad($actualDueDay, 2, '0', STR_PAD_LEFT);
                    $workStartDate = date('Y-m-d', strtotime("$dueDate -$startDaysBefore days"));
                    
                    $periods[] = ['period_name' => $periodName, 'period_start' => $periodStart, 'period_end' => $periodEnd, 'due_date' => $dueDate, 'work_start_date' => $workStartDate];
                }
            } elseif ($cc['frequency'] === 'QUARTERLY') {
                $quarters = [
                    ['Q1 (Apr-Jun)', 4, 6, $fyStartYear],
                    ['Q2 (Jul-Sep)', 7, 9, $fyStartYear],
                    ['Q3 (Oct-Dec)', 10, 12, $fyStartYear],
                    ['Q4 (Jan-Mar)', 1, 3, $fyEndYear]
                ];
                foreach ($quarters as $q) {
                    if (!shouldIncludeQuarter($q[2], $startFromMonth)) continue;
                    $periodStart = $q[3] . "-" . str_pad($q[1], 2, '0', STR_PAD_LEFT) . "-01";
                    $periodEnd = date('Y-m-t', strtotime($q[3] . "-" . str_pad($q[2], 2, '0', STR_PAD_LEFT) . "-01"));
                    $periodName = $q[0] . " FY" . $targetFY;
                    $dueMonth = $q[2] + ($cc['due_month_offset'] ?? 1);
                    $dueYear = $q[3];
                    while ($dueMonth > 12) { $dueMonth -= 12; $dueYear++; }
                    $actualDueDay = min($dueDay, cal_days_in_month(CAL_GREGORIAN, $dueMonth, $dueYear));
                    $dueDate = "$dueYear-" . str_pad($dueMonth, 2, '0', STR_PAD_LEFT) . "-" . str_pad($actualDueDay, 2, '0', STR_PAD_LEFT);
                    $workStartDate = date('Y-m-d', strtotime("$dueDate -$startDaysBefore days"));
                    $periods[] = ['period_name' => $periodName, 'period_start' => $periodStart, 'period_end' => $periodEnd, 'due_date' => $dueDate, 'work_start_date' => $workStartDate];
                }
            } elseif ($cc['frequency'] === 'HALF_YEARLY') {
                $halves = [
                    ['H1 (Apr-Sep)', 4, 9, $fyStartYear, $fyStartYear],
                    ['H2 (Oct-Mar)', 10, 3, $fyStartYear, $fyEndYear]
                ];
                foreach ($halves as $h) {
                    if (!shouldIncludeHalfYear($h[2], $startFromMonth)) continue;
                    $periodStart = $h[3] . "-" . str_pad($h[1], 2, '0', STR_PAD_LEFT) . "-01";
                    $periodEndYear = $h[4];
                    $periodEnd = date('Y-m-t', strtotime("$periodEndYear-" . str_pad($h[2], 2, '0', STR_PAD_LEFT) . "-01"));
                    $periodName = $h[0] . " FY" . $targetFY;
                    $dueMonth = $h[2] + ($cc['due_month_offset'] ?? 1);
                    $dueYear = $periodEndYear;
                    while ($dueMonth > 12) { $dueMonth -= 12; $dueYear++; }
                    $actualDueDay = min($dueDay, cal_days_in_month(CAL_GREGORIAN, $dueMonth, $dueYear));
                    $dueDate = "$dueYear-" . str_pad($dueMonth, 2, '0', STR_PAD_LEFT) . "-" . str_pad($actualDueDay, 2, '0', STR_PAD_LEFT);
                    $workStartDate = date('Y-m-d', strtotime("$dueDate -$startDaysBefore days"));
                    $periods[] = ['period_name' => $periodName, 'period_start' => $periodStart, 'period_end' => $periodEnd, 'due_date' => $dueDate, 'work_start_date' => $workStartDate];
                }
            } elseif ($cc['frequency'] === 'YEARLY') {
                $periodStart = "$fyStartYear-04-01";
                $periodEnd = "$fyEndYear-03-31";
                $periodName = "FY " . $targetFY;
                if ($hasEnhancedColumns && !empty($cc['due_month_absolute'])) {
                    $dueMonth = (int)$cc['due_month_absolute'];
                    $dueYear = ($dueMonth >= 1 && $dueMonth <= 3) ? $fyEndYear : $fyStartYear;
                    if (!empty($cc['due_in_following_fy'])) {
                        $dueYear = ($dueMonth >= 4 && $dueMonth <= 12) ? $fyEndYear : $fyEndYear + 1;
                    }
                } else {
                    $dueMonth = 3 + ($cc['due_month_offset'] ?? 1);
                    $dueYear = $fyEndYear;
                    while ($dueMonth > 12) { $dueMonth -= 12; $dueYear++; }
                }
                $actualDueDay = min($dueDay, cal_days_in_month(CAL_GREGORIAN, $dueMonth, $dueYear));
                $dueDate = "$dueYear-" . str_pad($dueMonth, 2, '0', STR_PAD_LEFT) . "-" . str_pad($actualDueDay, 2, '0', STR_PAD_LEFT);
                $workStartDate = date('Y-m-d', strtotime("$dueDate -$startDaysBefore days"));
                $periods[] = ['period_name' => $periodName, 'period_start' => $periodStart, 'period_end' => $periodEnd, 'due_date' => $dueDate, 'work_start_date' => $workStartDate];
            }
            
            // Insert periods
            foreach ($periods as $period) {
                $exists = dbFetchOne("
                    SELECT id FROM compliance_tracker 
                    WHERE client_id = ? AND compliance_type_id = ? AND financial_year = ? AND period_name = ?
                ", [$cc['client_id'], $cc['compliance_type_id'], $targetFY, $period['period_name']]);
                
                if ($exists) { $skipped++; continue; }
                
                try {
                    dbExecute("
                        INSERT INTO compliance_tracker 
                        (client_id, compliance_type_id, financial_year, period_name, period_start, period_end, 
                         due_date, work_start_date, status, created_at)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'PENDING', NOW())
                    ", [
                        $cc['client_id'], $cc['compliance_type_id'], $targetFY,
                        $period['period_name'], $period['period_start'], $period['period_end'],
                        $period['due_date'], $period['work_start_date']
                    ]);
                    $generated++;
                } catch (Exception $e) {
                    $errors[] = $cc['client_name'] . ' - ' . $cc['name'] . ': ' . $e->getMessage();
                }
            }
        }
        
        $startMonthName = $fyMonths[$startFromMonth] ?? 'April';
        if ($generated > 0) {
            setFlash('success', "Generated $generated compliance entries for FY $targetFY (from $startMonthName). $skipped already existed.");
        } else {
            setFlash('info', "No new entries generated. $skipped already existed.");
        }
        if (!empty($errors)) {
            setFlash('error', 'Some errors occurred: ' . implode(', ', array_slice($errors, 0, 3)));
        }
        
        header('Location: compliance_generate.php?tab=generate');
        exit;
    }
}

// ════════════════════════════════════════════
//  FETCH DATA
// ════════════════════════════════════════════

$activeTab = $_GET['tab'] ?? 'map';

// All active compliance types with client count
$complianceTypes = dbFetchAll("
    SELECT ct.*, 
           (SELECT COUNT(*) FROM client_compliances WHERE compliance_type_id = ct.id AND is_active = 1) as client_count
    FROM compliance_types ct
    WHERE ct.is_active = 1 AND ct.deleted_at IS NULL
    ORDER BY ct.category, ct.sort_order, ct.name
") ?: [];

// All active clients (for mapping tab)
$allClients = dbFetchAll("
    SELECT c.id, c.name, c.entity_type,
           (SELECT COUNT(*) FROM client_compliances cc WHERE cc.client_id = c.id AND cc.is_active = 1) as compliance_count
    FROM clients c
    WHERE c.deleted_at IS NULL AND (c.status = 'ACTIVE' OR c.status IS NULL)
    ORDER BY c.name
") ?: [];

// Clients with at least one mapping (for Generate tab)
$mappedClients = dbFetchAll("
    SELECT c.id, c.name, c.entity_type, COUNT(cc.id) as compliance_count
    FROM clients c
    JOIN client_compliances cc ON c.id = cc.client_id AND cc.is_active = 1
    WHERE c.deleted_at IS NULL
    GROUP BY c.id, c.name, c.entity_type
    ORDER BY c.name
") ?: [];

// Selected compliance type for mapping tab
$selectedCT = (int)($_GET['ct'] ?? 0);
$selectedCTData = null;
$mappedClientIds = [];

if ($selectedCT > 0) {
    $selectedCTData = dbFetchOne("SELECT * FROM compliance_types WHERE id = ? AND deleted_at IS NULL", [$selectedCT]);
    if ($selectedCTData) {
        $mappedClientIds = array_column(
            dbFetchAll("SELECT client_id FROM client_compliances WHERE compliance_type_id = ? AND is_active = 1", [$selectedCT]) ?: [],
            'client_id'
        );
    }
}

// Unique entity types in use
$entityTypesInUse = [];
foreach ($allClients as $c) {
    if (!empty($c['entity_type']) && !isset($entityTypesInUse[$c['entity_type']])) {
        $entityTypesInUse[$c['entity_type']] = $entityTypes[$c['entity_type']] ?? $c['entity_type'];
    }
}
ksort($entityTypesInUse);

// Get users for assignee reference
$users = dbFetchAll("SELECT id, display_name FROM users WHERE deleted_at IS NULL ORDER BY display_name") ?: [];

require_once 'includes/header.php';
?>

<style>
.tab-active { border-bottom: 3px solid #3b82f6; color: #1e40af; font-weight: 600; background: #eff6ff; }
.ct-item { padding: 10px 14px; border-radius: 8px; cursor: pointer; transition: all 0.15s; border: 1px solid transparent; display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit; }
.ct-item:hover { background: #f8fafc; }
.ct-item.selected { background: #eff6ff; border-color: #93c5fd; }
.client-row { display: flex; align-items: center; padding: 7px 12px; border-bottom: 1px solid #f1f5f9; transition: background 0.1s; }
.client-row:hover { background: #f8fafc; }
.client-row:last-child { border-bottom: none; }
.entity-badge { font-size: 0.6rem; padding: 2px 6px; border-radius: 4px; font-weight: 600; white-space: nowrap; background: #f1f5f9; color: #64748b; }
.ct-count { min-width: 26px; height: 26px; display: inline-flex; align-items: center; justify-content: center; border-radius: 6px; font-size: 0.7rem; font-weight: 700; }
.search-box { position: relative; }
.search-box i { position: absolute; left: 11px; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 0.75rem; }
.search-box input { border: 1px solid #e2e8f0; border-radius: 8px; padding: 7px 12px 7px 32px; width: 100%; font-size: 0.82rem; }
.search-box input:focus { outline: none; border-color: #93c5fd; box-shadow: 0 0 0 3px rgba(59,130,246,0.1); }
.map-stat { display: inline-flex; align-items: center; gap: 5px; padding: 5px 12px; border-radius: 8px; font-size: 0.75rem; font-weight: 600; }
.gen-client-row { display: flex; align-items: center; gap: 8px; padding: 6px 8px; border-radius: 6px; cursor: pointer; }
.gen-client-row:hover { background: #f8fafc; }
</style>

<!-- Page Header -->
<div class="flex items-center justify-between mb-5">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-tasks text-purple-600 mr-2"></i>Compliance Management</h1>
        <p class="text-gray-500 text-sm">Map compliances to clients in bulk, then generate tracker periods</p>
    </div>
    <a href="compliance_tracker.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left mr-2"></i>Back to Tracker
    </a>
</div>

<!-- Tabs -->
<div class="flex gap-1 border-b border-gray-200 mb-5">
    <a href="?tab=map<?= $selectedCT ? '&ct='.$selectedCT : '' ?>" 
       class="px-5 py-3 text-sm rounded-t-lg <?= $activeTab === 'map' ? 'tab-active' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-50' ?>">
        <i class="fas fa-link mr-1.5"></i>Bulk Map Compliances
    </a>
    <a href="?tab=generate" 
       class="px-5 py-3 text-sm rounded-t-lg <?= $activeTab === 'generate' ? 'tab-active' : 'text-gray-500 hover:text-gray-700 hover:bg-gray-50' ?>">
        <i class="fas fa-magic mr-1.5"></i>Generate Periods
        <?php if (count($mappedClients) > 0): ?>
        <span class="ml-1 px-1.5 py-0.5 text-[10px] bg-green-100 text-green-700 rounded-full"><?= count($mappedClients) ?> clients</span>
        <?php endif; ?>
    </a>
</div>

<?php
// ════════════════════════════════════════════════════════════════════
//  TAB 1: BULK MAP COMPLIANCES
// ════════════════════════════════════════════════════════════════════
if ($activeTab === 'map'): ?>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
    <!-- LEFT: Compliance Types List (4 cols) -->
    <div class="lg:col-span-4">
        <div class="card">
            <div class="p-4 border-b bg-gray-50">
                <h2 class="font-semibold text-sm"><i class="fas fa-list-check mr-2 text-gray-400"></i>Compliance Types (<?= count($complianceTypes) ?>)</h2>
                <p class="text-xs text-gray-400 mt-1">Click a type to manage its client mappings</p>
            </div>
            <div class="p-2 max-h-[620px] overflow-y-auto space-y-0.5">
                <?php 
                $lastCat = '';
                foreach ($complianceTypes as $ct):
                    if ($ct['category'] !== $lastCat):
                        $lastCat = $ct['category'];
                        $catInfo = $categories[$ct['category']] ?? $categories['OTHER'];
                ?>
                <div class="text-[11px] font-bold text-<?= $catInfo['color'] ?>-600 uppercase mt-3 mb-1 px-3 flex items-center gap-2">
                    <i class="fas <?= $catInfo['icon'] ?> text-<?= $catInfo['color'] ?>-400 text-xs"></i>
                    <?= $catInfo['label'] ?>
                </div>
                <?php endif; ?>
                <a href="?tab=map&ct=<?= $ct['id'] ?>" class="ct-item <?= $selectedCT == $ct['id'] ? 'selected' : '' ?>">
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium truncate"><?= htmlspecialchars($ct['name']) ?></p>
                        <p class="text-[11px] text-gray-400"><?= $ct['frequency'] ?></p>
                    </div>
                    <span class="ct-count <?= $ct['client_count'] > 0 ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-400' ?>">
                        <?= $ct['client_count'] ?>
                    </span>
                </a>
                <?php endforeach; ?>
                
                <?php if (empty($complianceTypes)): ?>
                <div class="p-6 text-center text-gray-400 text-sm">
                    No compliance types found.<br>
                    <a href="compliance_types.php" class="text-blue-500 hover:underline">Create one →</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- RIGHT: Client Assignment Panel (8 cols) -->
    <div class="lg:col-span-8">
        <?php if (!$selectedCTData): ?>
        <!-- No compliance type selected -->
        <div class="card p-12 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-hand-pointer text-2xl text-gray-400"></i>
            </div>
            <h3 class="font-semibold text-gray-600 mb-2">Select a Compliance Type</h3>
            <p class="text-gray-400 text-sm max-w-md mx-auto">Choose a compliance type from the left panel to see and manage which clients it applies to. You can then bulk check/uncheck clients.</p>
        </div>
        <?php else: ?>
        <!-- Compliance type selected - show client assignment -->
        <form method="POST" id="bulkMapForm">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="bulk_map">
            <input type="hidden" name="compliance_type_id" value="<?= $selectedCT ?>">
            
            <div class="card">
                <!-- Header -->
                <div class="p-4 border-b bg-gradient-to-r from-blue-50 to-indigo-50 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-<?= $selectedCTData['color'] ?? 'blue' ?>-100 text-<?= $selectedCTData['color'] ?? 'blue' ?>-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas <?= $selectedCTData['icon'] ?? 'fa-file-alt' ?>"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900"><?= htmlspecialchars($selectedCTData['name']) ?></h3>
                            <p class="text-xs text-gray-500">
                                <?= $selectedCTData['frequency'] ?> · 
                                <?= $categories[$selectedCTData['category']]['label'] ?? $selectedCTData['category'] ?>
                                <?php if ($selectedCTData['description'] ?? ''): ?>
                                · <?= htmlspecialchars($selectedCTData['description']) ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="map-stat bg-blue-100 text-blue-700">
                            <i class="fas fa-check-circle"></i>
                            <span id="selectedCount"><?= count($mappedClientIds) ?></span> / <?= count($allClients) ?> mapped
                        </div>
                        <button type="submit" class="btn btn-primary text-sm">
                            <i class="fas fa-save mr-1"></i>Save Mapping
                        </button>
                    </div>
                </div>
                
                <!-- Filters Row -->
                <div class="p-3 border-b bg-gray-50 flex flex-wrap items-center gap-2">
                    <div class="search-box flex-1 min-w-[180px]">
                        <i class="fas fa-search"></i>
                        <input type="text" id="clientSearch" placeholder="Search clients..." onkeyup="filterClients()">
                    </div>
                    
                    <select id="entityFilter" class="form-input text-sm py-[7px] w-auto" onchange="filterClients()">
                        <option value="">All Entity Types</option>
                        <?php foreach ($entityTypesInUse as $code => $label): ?>
                        <option value="<?= $code ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                    <select id="statusFilter" class="form-input text-sm py-[7px] w-auto" onchange="filterClients()">
                        <option value="">All</option>
                        <option value="mapped">Mapped Only</option>
                        <option value="unmapped">Unmapped Only</option>
                    </select>
                    
                    <div class="flex gap-1 ml-auto">
                        <button type="button" onclick="selectFiltered(true)" class="px-3 py-1.5 text-xs bg-green-50 text-green-700 border border-green-200 rounded-lg hover:bg-green-100 font-medium" title="Check all visible clients">
                            <i class="fas fa-check-double mr-1"></i>Check Visible
                        </button>
                        <button type="button" onclick="selectFiltered(false)" class="px-3 py-1.5 text-xs bg-red-50 text-red-700 border border-red-200 rounded-lg hover:bg-red-100 font-medium" title="Uncheck all visible clients">
                            <i class="fas fa-times mr-1"></i>Uncheck Visible
                        </button>
                    </div>
                </div>
                
                <!-- Client List -->
                <div class="max-h-[440px] overflow-y-auto" id="clientListContainer">
                    <?php foreach ($allClients as $c): 
                        $isMapped = in_array($c['id'], $mappedClientIds);
                        $etLabel = $entityTypes[$c['entity_type']] ?? ($c['entity_type'] ?: '-');
                    ?>
                    <div class="client-row" 
                         data-name="<?= strtolower(htmlspecialchars($c['name'])) ?>"
                         data-entity="<?= htmlspecialchars($c['entity_type'] ?? '') ?>"
                         data-mapped="<?= $isMapped ? '1' : '0' ?>">
                        <label style="display:flex;align-items:center;gap:10px;flex:1;cursor:pointer;min-width:0;">
                            <input type="checkbox" name="mapped_clients[]" value="<?= $c['id'] ?>" 
                                   class="client-map-cb rounded text-blue-600" <?= $isMapped ? 'checked' : '' ?>
                                   onchange="updateCount()">
                            <span class="flex-1 min-w-0 text-sm font-medium text-gray-800 truncate"><?= htmlspecialchars($c['name']) ?></span>
                            <span class="entity-badge"><?= $etLabel ?></span>
                            <?php if ($c['compliance_count'] > 0): ?>
                            <span class="text-[11px] text-gray-400 whitespace-nowrap"><?= $c['compliance_count'] ?> types</span>
                            <?php endif; ?>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Footer -->
                <div class="p-3 border-t bg-gray-50 flex items-center justify-between">
                    <p class="text-xs text-gray-500">
                        Showing <span id="visibleCount"><?= count($allClients) ?></span> of <?= count($allClients) ?> clients · 
                        <strong><span id="selectedCountBottom"><?= count($mappedClientIds) ?></span> selected</strong>
                    </p>
                    <button type="submit" class="btn btn-primary text-sm">
                        <i class="fas fa-save mr-1"></i>Save Mapping
                    </button>
                </div>
            </div>
        </form>
        <?php endif; ?>
    </div>
</div>

<script>
function filterClients() {
    const search = document.getElementById('clientSearch').value.toLowerCase().trim();
    const entity = document.getElementById('entityFilter').value;
    const status = document.getElementById('statusFilter').value;
    const rows = document.querySelectorAll('#clientListContainer .client-row');
    let visible = 0;
    
    rows.forEach(row => {
        const name = row.dataset.name || '';
        const ent = row.dataset.entity || '';
        const cb = row.querySelector('.client-map-cb');
        const isChecked = cb ? cb.checked : false;
        
        let show = true;
        if (search && !name.includes(search)) show = false;
        if (entity && ent !== entity) show = false;
        if (status === 'mapped' && !isChecked) show = false;
        if (status === 'unmapped' && isChecked) show = false;
        
        row.style.display = show ? '' : 'none';
        if (show) visible++;
    });
    
    document.getElementById('visibleCount').textContent = visible;
}

function selectFiltered(checked) {
    const rows = document.querySelectorAll('#clientListContainer .client-row');
    rows.forEach(row => {
        if (row.style.display !== 'none') {
            const cb = row.querySelector('.client-map-cb');
            if (cb) cb.checked = checked;
        }
    });
    updateCount();
}

function updateCount() {
    const total = document.querySelectorAll('.client-map-cb:checked').length;
    document.getElementById('selectedCount').textContent = total;
    document.getElementById('selectedCountBottom').textContent = total;
}
</script>

<?php
// ════════════════════════════════════════════════════════════════════
//  TAB 2: GENERATE PERIODS
// ════════════════════════════════════════════════════════════════════
else: ?>

<?php if (empty($mappedClients)): ?>
<div class="card p-8 text-center">
    <i class="fas fa-exclamation-circle text-4xl text-amber-400 mb-4"></i>
    <h3 class="text-lg font-semibold mb-2">No Client Compliances Configured</h3>
    <p class="text-gray-500 mb-4">Map compliances to clients first before generating periods.</p>
    <a href="?tab=map" class="btn btn-primary"><i class="fas fa-link mr-2"></i>Go to Bulk Map</a>
</div>
<?php else: ?>

<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="action" value="generate">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Settings -->
        <div class="card p-6">
            <h2 class="font-semibold mb-4"><i class="fas fa-cog mr-2 text-gray-500"></i>Settings</h2>
            
            <div class="mb-4">
                <label class="form-label">Financial Year</label>
                <select name="financial_year" class="form-input">
                    <?php foreach ($fys as $fy): ?>
                    <option value="<?= $fy ?>" <?= $fy === $currentFY ? 'selected' : '' ?>>FY <?= $fy ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="form-label">Start From Month</label>
                <select name="start_from_month" class="form-input">
                    <?php foreach ($fyMonths as $monthNum => $monthName): ?>
                    <option value="<?= $monthNum ?>" <?= $monthNum === 4 ? 'selected' : '' ?>>
                        <?= $monthName ?><?= $monthNum === 4 ? ' (Full Year)' : '' ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <p class="text-xs text-gray-500 mt-1">Use this for mid-year client onboarding</p>
            </div>
            
            <div class="p-4 bg-blue-50 rounded-lg text-sm">
                <p class="font-medium text-blue-800 mb-2"><i class="fas fa-info-circle mr-1"></i>How it works:</p>
                <ul class="text-blue-700 space-y-1 text-xs">
                    <li>• <strong>Full Year (April):</strong> All periods generated</li>
                    <li>• <strong>Mid-Year:</strong> Only from selected month onwards</li>
                    <li>• Monthly: Remaining months to March</li>
                    <li>• Quarterly: Quarters containing/after start month</li>
                    <li>• Half-Yearly: Halves containing/after start month</li>
                    <li>• Yearly: Always generated (1 entry)</li>
                    <li>• Existing entries are automatically skipped</li>
                </ul>
            </div>
            
            <button type="submit" class="btn btn-primary w-full mt-6">
                <i class="fas fa-magic mr-2"></i>Generate Periods
            </button>
        </div>
        
        <!-- Select Clients -->
        <div class="card p-6">
            <div class="flex items-center justify-between mb-3">
                <h2 class="font-semibold"><i class="fas fa-building mr-2 text-gray-500"></i>Clients (<?= count($mappedClients) ?>)</h2>
                <label class="text-xs text-blue-600 cursor-pointer">
                    <input type="checkbox" id="selectAllClients" class="mr-1" onchange="toggleAllGen('client')" checked> Select All
                </label>
            </div>
            
            <div class="search-box mb-3">
                <i class="fas fa-search"></i>
                <input type="text" id="genClientSearch" placeholder="Search clients..." onkeyup="filterGenClients()">
            </div>
            
            <div class="space-y-0.5 max-h-[360px] overflow-y-auto" id="genClientList">
                <?php foreach ($mappedClients as $c): ?>
                <label class="gen-client-row" data-name="<?= strtolower(htmlspecialchars($c['name'])) ?>">
                    <input type="checkbox" name="clients[]" value="<?= $c['id'] ?>" class="client-checkbox rounded" checked>
                    <span class="flex-1 min-w-0 text-sm truncate"><?= htmlspecialchars($c['name']) ?></span>
                    <span class="entity-badge"><?= $entityTypes[$c['entity_type']] ?? $c['entity_type'] ?></span>
                    <span class="text-[11px] text-gray-400"><?= $c['compliance_count'] ?> types</span>
                </label>
                <?php endforeach; ?>
            </div>
            
            <p class="text-xs text-gray-400 mt-3">Uncheck clients to exclude from generation</p>
        </div>
        
        <!-- Select Compliance Types -->
        <div class="card p-6">
            <div class="flex items-center justify-between mb-3">
                <h2 class="font-semibold"><i class="fas fa-tasks mr-2 text-gray-500"></i>Compliance Types</h2>
                <label class="text-xs text-blue-600 cursor-pointer">
                    <input type="checkbox" id="selectAllCompliances" class="mr-1" onchange="toggleAllGen('compliance')" checked> Select All
                </label>
            </div>
            
            <div class="space-y-0.5 max-h-[400px] overflow-y-auto">
                <?php 
                $lastCategory = '';
                foreach ($complianceTypes as $ct): 
                    if ($ct['category'] !== $lastCategory):
                        $lastCategory = $ct['category'];
                        $catInfo = $categories[$ct['category']] ?? $categories['OTHER'];
                ?>
                <div class="text-[11px] font-bold text-<?= $catInfo['color'] ?>-600 uppercase mt-3 mb-1 flex items-center gap-2">
                    <span class="w-2 h-2 bg-<?= $catInfo['color'] ?>-500 rounded-full"></span>
                    <?= $catInfo['label'] ?>
                </div>
                <?php endif; ?>
                <label class="flex items-center gap-2 p-2 hover:bg-gray-50 rounded cursor-pointer">
                    <input type="checkbox" name="compliances[]" value="<?= $ct['id'] ?>" class="compliance-checkbox rounded" checked>
                    <span class="flex-1 text-sm"><?= htmlspecialchars($ct['name']) ?></span>
                    <span class="text-[10px] px-2 py-0.5 bg-gray-100 rounded"><?= $ct['frequency'] ?></span>
                    <span class="text-[11px] text-gray-400"><?= $ct['client_count'] ?> clients</span>
                </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</form>

<script>
function toggleAllGen(type) {
    const checkboxes = document.querySelectorAll('.' + type + '-checkbox');
    const selectAll = document.getElementById('selectAll' + type.charAt(0).toUpperCase() + type.slice(1) + 's');
    checkboxes.forEach(cb => {
        const row = cb.closest('.gen-client-row, label');
        if (!row || row.style.display !== 'none') {
            cb.checked = selectAll.checked;
        }
    });
}

function filterGenClients() {
    const search = document.getElementById('genClientSearch').value.toLowerCase().trim();
    const rows = document.querySelectorAll('#genClientList .gen-client-row');
    rows.forEach(row => {
        const name = row.dataset.name || '';
        row.style.display = (!search || name.includes(search)) ? '' : 'none';
    });
}
</script>

<?php endif; ?>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
