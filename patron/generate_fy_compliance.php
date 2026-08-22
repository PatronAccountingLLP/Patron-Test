<?php
/**
 * PATRON - Generate Compliance Entries for New Financial Year
 * 
 * This script generates compliance tracker entries for all active clients
 * based on their compliance types and the selected financial year.
 * 
 * Features:
 * - Generate for new FY (Apr-Mar)
 * - Skip already existing entries
 * - Respects client-compliance mapping
 * - Auto-assigns executors from previous year (optional)
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if (!isAdmin()) {
    setFlash('error', 'Access denied. Only admins can generate compliance entries.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Generate FY Compliance';

// Current and available FYs
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');

// If we're Jan-Mar, current FY started last year
$currentFYStart = $currentMonth >= 4 ? $currentYear : $currentYear - 1;
$currentFY = $currentFYStart . '-' . ($currentFYStart + 1);

// Generate list of FYs (current and next 2)
$availableFYs = [];
for ($i = 0; $i <= 2; $i++) {
    $fyStart = $currentFYStart + $i;
    $availableFYs[] = [
        'code' => $fyStart . '-' . ($fyStart + 1),
        'label' => 'FY ' . $fyStart . '-' . substr($fyStart + 1, 2),
        'start' => $fyStart . '-04-01',
        'end' => ($fyStart + 1) . '-03-31'
    ];
}

// Get compliance types
$complianceTypes = dbFetchAll("
    SELECT ct.*, 
           (SELECT COUNT(*) FROM client_compliance_mapping ccm 
            WHERE ccm.compliance_type_id = ct.id AND ccm.is_applicable = 1) as mapped_clients
    FROM compliance_types ct 
    WHERE ct.deleted_at IS NULL AND ct.is_active = 1
    ORDER BY ct.category, ct.name
") ?: [];

// Get active clients count
$activeClients = dbFetchOne("SELECT COUNT(*) as cnt FROM clients WHERE deleted_at IS NULL AND (status = 'ACTIVE' OR status IS NULL)");

$result = null;
$errors = [];

// Handle generation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $selectedFY = sanitize($_POST['financial_year'] ?? '');
        $copyAssignments = isset($_POST['copy_assignments']);
        $selectedTypes = $_POST['compliance_types'] ?? [];
        $overwrite = isset($_POST['overwrite_existing']);
        
        if (!$selectedFY) {
            $errors[] = 'Please select a financial year.';
        }
        
        if (empty($selectedTypes)) {
            $errors[] = 'Please select at least one compliance type.';
        }
        
        if (empty($errors)) {
            $result = generateComplianceEntries($selectedFY, $selectedTypes, $copyAssignments, $overwrite);
        }
    }
}

function generateComplianceEntries($fy, $complianceTypeIds, $copyAssignments = false, $overwrite = false) {
    $fyParts = explode('-', $fy);
    $fyStart = $fyParts[0];
    $fyEnd = $fyParts[1];
    
    $created = 0;
    $skipped = 0;
    $errors = [];
    
    // Get previous FY for copying assignments
    $prevFYStart = $fyStart - 1;
    $prevFY = $prevFYStart . '-' . $fyStart;
    
    // Get all compliance types selected
    $placeholders = implode(',', array_fill(0, count($complianceTypeIds), '?'));
    $types = dbFetchAll("
        SELECT * FROM compliance_types 
        WHERE id IN ($placeholders) AND deleted_at IS NULL
    ", $complianceTypeIds);
    
    foreach ($types as $type) {
        // Get clients that have this compliance mapped
        $clients = dbFetchAll("
            SELECT c.id as client_id, c.name as client_name, ccm.* 
            FROM clients c
            JOIN client_compliance_mapping ccm ON c.id = ccm.client_id
            WHERE ccm.compliance_type_id = ? 
            AND ccm.is_applicable = 1
            AND c.deleted_at IS NULL 
            AND (c.status = 'ACTIVE' OR c.status IS NULL)
        ", [$type['id']]) ?: [];
        
        // If no mapping exists, get all active clients (for universal compliances)
        if (empty($clients) && $type['is_universal']) {
            $clients = dbFetchAll("
                SELECT id as client_id, name as client_name 
                FROM clients 
                WHERE deleted_at IS NULL 
                AND (status = 'ACTIVE' OR status IS NULL)
            ") ?: [];
        }
        
        foreach ($clients as $client) {
            // Determine periods based on frequency
            $periods = getCompliancePeriods($type, $fyStart, $fyEnd);
            
            foreach ($periods as $period) {
                // Check if entry already exists
                $existing = dbFetchOne("
                    SELECT id FROM compliance_tracker 
                    WHERE client_id = ? 
                    AND compliance_type_id = ? 
                    AND financial_year = ?
                    AND period = ?
                ", [$client['client_id'], $type['id'], $fy, $period['period']]);
                
                if ($existing && !$overwrite) {
                    $skipped++;
                    continue;
                }
                
                // Get previous year's assignment if copying
                $executor1 = null;
                $executor2 = null;
                $reviewer = null;
                $manager = null;
                
                if ($copyAssignments) {
                    $prevEntry = dbFetchOne("
                        SELECT executor_1_id, executor_2_id, reviewer_id, manager_id 
                        FROM compliance_tracker 
                        WHERE client_id = ? 
                        AND compliance_type_id = ? 
                        AND financial_year = ?
                        LIMIT 1
                    ", [$client['client_id'], $type['id'], $prevFY]);
                    
                    if ($prevEntry) {
                        $executor1 = $prevEntry['executor_1_id'];
                        $executor2 = $prevEntry['executor_2_id'];
                        $reviewer = $prevEntry['reviewer_id'];
                        $manager = $prevEntry['manager_id'];
                    }
                }
                
                try {
                    if ($existing && $overwrite) {
                        // Update existing
                        dbExecute("
                            UPDATE compliance_tracker SET
                                due_date = ?,
                                status = 'PENDING',
                                executor_1_id = COALESCE(?, executor_1_id),
                                executor_2_id = COALESCE(?, executor_2_id),
                                reviewer_id = COALESCE(?, reviewer_id),
                                manager_id = COALESCE(?, manager_id),
                                updated_at = NOW()
                            WHERE id = ?
                        ", [$period['due_date'], $executor1, $executor2, $reviewer, $manager, $existing['id']]);
                    } else {
                        // Insert new
                        dbExecute("
                            INSERT INTO compliance_tracker 
                            (client_id, compliance_type_id, financial_year, period, 
                             due_date, status, executor_1_id, executor_2_id, reviewer_id, manager_id)
                            VALUES (?, ?, ?, ?, ?, 'PENDING', ?, ?, ?, ?)
                        ", [
                            $client['client_id'], $type['id'], $fy, $period['period'],
                            $period['due_date'], $executor1, $executor2, $reviewer, $manager
                        ]);
                    }
                    $created++;
                } catch (Exception $e) {
                    $errors[] = "Error for {$client['client_name']} - {$type['name']}: " . $e->getMessage();
                }
            }
        }
    }
    
    return [
        'created' => $created,
        'skipped' => $skipped,
        'errors' => $errors
    ];
}

function getCompliancePeriods($type, $fyStart, $fyEnd) {
    $periods = [];
    $frequency = strtoupper($type['frequency'] ?? 'ANNUAL');
    
    switch ($frequency) {
        case 'MONTHLY':
            // 12 periods: Apr to Mar
            for ($m = 4; $m <= 12; $m++) {
                $periods[] = [
                    'period' => date('M', mktime(0, 0, 0, $m, 1)) . ' ' . $fyStart,
                    'due_date' => calculateDueDate($type, $fyStart, $m)
                ];
            }
            for ($m = 1; $m <= 3; $m++) {
                $periods[] = [
                    'period' => date('M', mktime(0, 0, 0, $m, 1)) . ' ' . $fyEnd,
                    'due_date' => calculateDueDate($type, $fyEnd, $m)
                ];
            }
            break;
            
        case 'QUARTERLY':
            // 4 quarters
            $quarters = [
                ['period' => 'Q1 (Apr-Jun)', 'due_month' => 7, 'due_year' => $fyStart],
                ['period' => 'Q2 (Jul-Sep)', 'due_month' => 10, 'due_year' => $fyStart],
                ['period' => 'Q3 (Oct-Dec)', 'due_month' => 1, 'due_year' => $fyEnd],
                ['period' => 'Q4 (Jan-Mar)', 'due_month' => 4, 'due_year' => $fyEnd]
            ];
            foreach ($quarters as $q) {
                $dueDay = $type['due_day_of_month'] ?? 15;
                $periods[] = [
                    'period' => $q['period'],
                    'due_date' => $q['due_year'] . '-' . str_pad($q['due_month'], 2, '0', STR_PAD_LEFT) . '-' . str_pad($dueDay, 2, '0', STR_PAD_LEFT)
                ];
            }
            break;
            
        case 'HALF_YEARLY':
            $periods[] = [
                'period' => 'H1 (Apr-Sep)',
                'due_date' => $fyStart . '-10-' . str_pad($type['due_day_of_month'] ?? 31, 2, '0', STR_PAD_LEFT)
            ];
            $periods[] = [
                'period' => 'H2 (Oct-Mar)',
                'due_date' => $fyEnd . '-04-' . str_pad($type['due_day_of_month'] ?? 30, 2, '0', STR_PAD_LEFT)
            ];
            break;
            
        case 'ANNUAL':
        default:
            // Single annual entry
            $dueMonth = $type['due_month'] ?? 9; // Default September
            $dueDay = $type['due_day_of_month'] ?? 30;
            $dueYear = $dueMonth >= 4 ? $fyStart : $fyEnd;
            
            $periods[] = [
                'period' => 'FY ' . $fyStart . '-' . substr($fyEnd, 2),
                'due_date' => $dueYear . '-' . str_pad($dueMonth, 2, '0', STR_PAD_LEFT) . '-' . str_pad($dueDay, 2, '0', STR_PAD_LEFT)
            ];
            break;
    }
    
    return $periods;
}

function calculateDueDate($type, $year, $month) {
    // Due date is typically next month + due_day_of_month
    $dueDay = $type['due_day_of_month'] ?? 11;
    $nextMonth = $month + 1;
    $nextYear = $year;
    
    if ($nextMonth > 12) {
        $nextMonth = 1;
        $nextYear++;
    }
    
    // Validate day for month
    $lastDay = cal_days_in_month(CAL_GREGORIAN, $nextMonth, $nextYear);
    $dueDay = min($dueDay, $lastDay);
    
    return $nextYear . '-' . str_pad($nextMonth, 2, '0', STR_PAD_LEFT) . '-' . str_pad($dueDay, 2, '0', STR_PAD_LEFT);
}

require_once 'includes/header.php';
?>

<style>
.fy-card { transition: all 0.2s; cursor: pointer; }
.fy-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.fy-card.selected { ring: 2px; ring-color: #3b82f6; background: #eff6ff; }
.type-checkbox { transition: all 0.2s; }
.type-checkbox:hover { background: #f3f4f6; }
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-calendar-plus text-purple-500 mr-2"></i>Generate FY Compliance</h1>
        <p class="text-gray-500 text-sm">Create compliance entries for a new financial year</p>
    </div>
    <a href="compliance_tracker.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left mr-2"></i>Back to Compliance
    </a>
</div>

<?php if ($result): ?>
<div class="card p-6 mb-6 <?= empty($result['errors']) ? 'bg-green-50 border-green-200' : 'bg-amber-50 border-amber-200' ?>">
    <h3 class="font-bold <?= empty($result['errors']) ? 'text-green-800' : 'text-amber-800' ?> mb-2">
        <i class="fas <?= empty($result['errors']) ? 'fa-check-circle' : 'fa-exclamation-triangle' ?> mr-2"></i>
        Generation Complete
    </h3>
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="text-center p-3 bg-white rounded-lg">
            <p class="text-2xl font-bold text-green-600"><?= $result['created'] ?></p>
            <p class="text-xs text-gray-500">Entries Created</p>
        </div>
        <div class="text-center p-3 bg-white rounded-lg">
            <p class="text-2xl font-bold text-amber-600"><?= $result['skipped'] ?></p>
            <p class="text-xs text-gray-500">Skipped (Existing)</p>
        </div>
        <div class="text-center p-3 bg-white rounded-lg">
            <p class="text-2xl font-bold text-red-600"><?= count($result['errors']) ?></p>
            <p class="text-xs text-gray-500">Errors</p>
        </div>
    </div>
    <?php if (!empty($result['errors'])): ?>
    <details class="mt-4">
        <summary class="cursor-pointer text-sm text-red-700">View Errors</summary>
        <ul class="mt-2 text-sm text-red-600 space-y-1">
            <?php foreach ($result['errors'] as $err): ?>
            <li>• <?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
        </ul>
    </details>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if (!empty($errors)): ?>
<div class="card p-4 mb-6 bg-red-50 border border-red-200">
    <ul class="text-sm text-red-700 space-y-1">
        <?php foreach ($errors as $error): ?>
        <li><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form method="POST">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Form -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Select Financial Year -->
            <div class="card p-6">
                <h3 class="font-bold text-gray-800 mb-4"><i class="fas fa-calendar mr-2 text-blue-500"></i>Select Financial Year</h3>
                <div class="grid grid-cols-3 gap-4">
                    <?php foreach ($availableFYs as $fy): ?>
                    <label class="fy-card card p-4 text-center cursor-pointer">
                        <input type="radio" name="financial_year" value="<?= $fy['code'] ?>" class="hidden" 
                               <?= $fy['code'] === $availableFYs[1]['code'] ? 'checked' : '' ?>>
                        <p class="text-lg font-bold text-gray-800"><?= $fy['label'] ?></p>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($fy['start'])) ?> - <?= date('d M Y', strtotime($fy['end'])) ?></p>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Select Compliance Types -->
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-gray-800"><i class="fas fa-list-check mr-2 text-purple-500"></i>Select Compliance Types</h3>
                    <div class="flex gap-2">
                        <button type="button" onclick="selectAll(true)" class="text-sm text-blue-600 hover:underline">Select All</button>
                        <span class="text-gray-300">|</span>
                        <button type="button" onclick="selectAll(false)" class="text-sm text-blue-600 hover:underline">Deselect All</button>
                    </div>
                </div>
                
                <div class="space-y-2 max-h-96 overflow-y-auto">
                    <?php 
                    $currentCategory = '';
                    foreach ($complianceTypes as $type): 
                        if ($type['category'] !== $currentCategory):
                            $currentCategory = $type['category'];
                    ?>
                    <div class="text-xs font-semibold text-gray-500 uppercase mt-4 mb-2"><?= htmlspecialchars($currentCategory ?: 'Other') ?></div>
                    <?php endif; ?>
                    
                    <label class="type-checkbox flex items-center gap-3 p-3 rounded-lg cursor-pointer">
                        <input type="checkbox" name="compliance_types[]" value="<?= $type['id'] ?>" 
                               class="form-checkbox h-5 w-5 text-purple-600" checked>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800"><?= htmlspecialchars($type['name']) ?></p>
                            <p class="text-xs text-gray-500">
                                <?= ucfirst(strtolower($type['frequency'] ?? 'Annual')) ?> • 
                                <?= $type['mapped_clients'] ?> clients mapped
                            </p>
                        </div>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs"><?= $type['code'] ?></span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Stats -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-chart-bar mr-2 text-blue-500"></i>Summary</h4>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Active Clients:</span>
                        <span class="font-bold"><?= $activeClients['cnt'] ?? 0 ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Compliance Types:</span>
                        <span class="font-bold"><?= count($complianceTypes) ?></span>
                    </div>
                </div>
            </div>
            
            <!-- Options -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-cog mr-2 text-gray-500"></i>Options</h4>
                
                <label class="flex items-start gap-3 mb-4 cursor-pointer">
                    <input type="checkbox" name="copy_assignments" value="1" checked class="form-checkbox h-5 w-5 text-blue-600 mt-0.5">
                    <div>
                        <span class="font-medium text-gray-800">Copy Assignments</span>
                        <p class="text-xs text-gray-500">Copy executor/reviewer from previous FY</p>
                    </div>
                </label>
                
                <label class="flex items-start gap-3 cursor-pointer">
                    <input type="checkbox" name="overwrite_existing" value="1" class="form-checkbox h-5 w-5 text-amber-600 mt-0.5">
                    <div>
                        <span class="font-medium text-gray-800">Overwrite Existing</span>
                        <p class="text-xs text-gray-500">Update entries that already exist</p>
                    </div>
                </label>
            </div>
            
            <!-- Generate Button -->
            <div class="card p-4">
                <button type="submit" name="generate" value="1" class="btn btn-primary w-full">
                    <i class="fas fa-magic mr-2"></i>Generate Entries
                </button>
                <p class="text-xs text-gray-400 text-center mt-2">This may take a few moments</p>
            </div>
            
            <!-- Help -->
            <div class="card p-4 bg-blue-50">
                <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>How it Works</h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Entries created based on frequency (monthly/quarterly/annual)</li>
                    <li>• Only clients with compliance mapping are included</li>
                    <li>• Due dates calculated from compliance type settings</li>
                    <li>• Existing entries are skipped unless overwrite is enabled</li>
                </ul>
            </div>
        </div>
    </div>
</form>

<script>
// FY card selection
document.querySelectorAll('.fy-card').forEach(card => {
    const radio = card.querySelector('input[type="radio"]');
    
    if (radio.checked) card.classList.add('selected');
    
    card.addEventListener('click', () => {
        document.querySelectorAll('.fy-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        radio.checked = true;
    });
});

function selectAll(select) {
    document.querySelectorAll('input[name="compliance_types[]"]').forEach(cb => {
        cb.checked = select;
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
