<?php
/**
 * PATRON - Certificate Renewal Workflow
 * 
 * This script checks for expiring certificates and creates renewal tasks.
 * Can be run:
 * 1. Manually via admin interface
 * 2. As a cron job: php certificate_renewal_cron.php
 * 3. Via web: certificate_renewal_cron.php?run=1&token=YOUR_CRON_TOKEN
 * 
 * Setup cron (daily at 8 AM):
 * 0 8 * * * php /path/to/certificate_renewal_cron.php >> /path/to/logs/cert_renewal.log 2>&1
 */

require_once 'includes/db.php';

// Configuration
$CRON_TOKEN = 'PATRON_CERT_RENEWAL_2024'; // Change this for security
$DEFAULT_DAYS_BEFORE = 30; // Create renewal task X days before expiry
$RENEWAL_SERVICE_ID = null; // Will try to find or create

// Check if running from CLI or Web
$isCli = php_sapi_name() === 'cli';
$isWeb = !$isCli;

if ($isWeb) {
    startSession();
    
    // Web access requires either admin login or valid token
    $token = $_GET['token'] ?? '';
    $run = isset($_GET['run']);
    
    if (!$run) {
        // Show admin interface
        requireLogin();
        if (!isAdmin()) {
            setFlash('error', 'Access denied.');
            header('Location: dashboard.php');
            exit;
        }
        showAdminInterface();
        exit;
    }
    
    // Token validation for automated calls
    if (!isLoggedIn() && $token !== $CRON_TOKEN) {
        http_response_code(403);
        die('Unauthorized');
    }
}

// Run the renewal check
$results = processRenewals();

if ($isCli) {
    echo "Certificate Renewal Check - " . date('Y-m-d H:i:s') . "\n";
    echo "===================================\n";
    echo "Certificates checked: " . $results['checked'] . "\n";
    echo "Renewal tasks created: " . $results['created'] . "\n";
    echo "Already has task: " . $results['skipped'] . "\n";
    echo "Errors: " . $results['errors'] . "\n";
    
    if (!empty($results['details'])) {
        echo "\nDetails:\n";
        foreach ($results['details'] as $detail) {
            echo "  - " . $detail . "\n";
        }
    }
} elseif ($isWeb && isset($_GET['run'])) {
    header('Content-Type: application/json');
    echo json_encode($results);
}

/**
 * Process certificate renewals
 */
function processRenewals() {
    global $DEFAULT_DAYS_BEFORE;
    
    $results = [
        'checked' => 0,
        'created' => 0,
        'skipped' => 0,
        'errors' => 0,
        'details' => []
    ];
    
    // Get renewal service ID (or create one)
    $renewalServiceId = getRenewalServiceId();
    
    // Get certificates expiring within reminder period
    // Uses renewal_reminder_days from certificate_type, or default 30 days
    $expiringCerts = dbFetchAll("
        SELECT cc.id, cc.client_id, cc.certificate_type_id, cc.certificate_number,
               cc.expiry_date, cc.file_path,
               ct.name as type_name, ct.code as type_code, ct.renewal_reminder_days,
               c.name as client_name,
               DATEDIFF(cc.expiry_date, CURDATE()) as days_left
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        JOIN clients c ON cc.client_id = c.id AND c.deleted_at IS NULL
        WHERE cc.deleted_at IS NULL
          AND ct.deleted_at IS NULL
          AND ct.has_expiry = 1
          AND cc.expiry_date IS NOT NULL
          AND cc.expiry_date > CURDATE()
          AND cc.expiry_date <= DATE_ADD(CURDATE(), INTERVAL COALESCE(ct.renewal_reminder_days, ?) DAY)
        ORDER BY cc.expiry_date ASC
    ", [$DEFAULT_DAYS_BEFORE]) ?: [];
    
    $results['checked'] = count($expiringCerts);
    
    foreach ($expiringCerts as $cert) {
        try {
            // Check if renewal task already exists for this certificate
            $existingTask = dbFetchOne("
                SELECT id FROM service_requests 
                WHERE client_id = ? 
                  AND certificate_id = ?
                  AND deleted_at IS NULL
                  AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')
            ", [$cert['client_id'], $cert['id']]);
            
            if ($existingTask) {
                $results['skipped']++;
                continue;
            }
            
            // Also check by notes pattern (fallback if certificate_id column doesn't exist)
            $existingByNotes = dbFetchOne("
                SELECT id FROM service_requests 
                WHERE client_id = ? 
                  AND notes LIKE ?
                  AND deleted_at IS NULL
                  AND status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')
            ", [$cert['client_id'], '%[CERT-RENEWAL:' . $cert['id'] . ']%']);
            
            if ($existingByNotes) {
                $results['skipped']++;
                continue;
            }
            
            // Create renewal task
            $requestNumber = generateRequestNumber();
            $dueDate = $cert['expiry_date']; // Task due on expiry date
            $notes = "[CERT-RENEWAL:" . $cert['id'] . "] Auto-generated renewal task for " . 
                     $cert['type_name'] . " (expires: " . date('d M Y', strtotime($cert['expiry_date'])) . ")";
            
            // Try to insert with certificate_id column first
            try {
                dbExecute("
                    INSERT INTO service_requests 
                    (request_number, client_id, service_id, status, priority,
                     expected_completion_date, notes, certificate_id, created_by)
                    VALUES (?, ?, ?, 'NEW', 'HIGH', ?, ?, ?, NULL)
                ", [
                    $requestNumber, 
                    $cert['client_id'], 
                    $renewalServiceId,
                    $dueDate,
                    $notes,
                    $cert['id']
                ]);
            } catch (Exception $e) {
                // If certificate_id column doesn't exist, insert without it
                dbExecute("
                    INSERT INTO service_requests 
                    (request_number, client_id, service_id, status, priority,
                     expected_completion_date, notes, created_by)
                    VALUES (?, ?, ?, 'NEW', 'HIGH', ?, ?, NULL)
                ", [
                    $requestNumber, 
                    $cert['client_id'], 
                    $renewalServiceId,
                    $dueDate,
                    $notes
                ]);
            }
            
            $results['created']++;
            $results['details'][] = "Created: {$cert['client_name']} - {$cert['type_name']} (expires in {$cert['days_left']} days)";
            
        } catch (Exception $e) {
            $results['errors']++;
            $results['details'][] = "Error: {$cert['client_name']} - {$cert['type_name']}: " . $e->getMessage();
        }
    }
    
    // Log the run
    try {
        dbExecute("
            INSERT INTO system_logs (log_type, log_message, log_data, created_at)
            VALUES ('CERT_RENEWAL', ?, ?, NOW())
        ", [
            "Checked: {$results['checked']}, Created: {$results['created']}, Skipped: {$results['skipped']}, Errors: {$results['errors']}",
            json_encode($results)
        ]);
    } catch (Exception $e) {
        // Log table might not exist, ignore
    }
    
    return $results;
}

/**
 * Get or create the certificate renewal service
 */
function getRenewalServiceId() {
    // Try to find existing renewal service
    $service = dbFetchOne("
        SELECT id FROM services 
        WHERE (code = 'CERT_RENEWAL' OR name LIKE '%Certificate Renewal%')
          AND deleted_at IS NULL
        LIMIT 1
    ");
    
    if ($service) {
        return $service['id'];
    }
    
    // Create renewal service
    try {
        dbExecute("
            INSERT INTO services (code, name, category, description, is_active)
            VALUES ('CERT_RENEWAL', 'Certificate Renewal', 'Compliance', 'Auto-generated certificate renewal task', 1)
        ");
        return dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
    } catch (Exception $e) {
        // If services table has different structure, get first active service
        $fallback = dbFetchOne("SELECT id FROM services WHERE deleted_at IS NULL AND is_active = 1 LIMIT 1");
        return $fallback['id'] ?? 1;
    }
}

/**
 * Generate request number
 */
function generateRequestNumber() {
    $prefix = 'REQ';
    $year = date('y');
    $month = date('m');
    
    $last = dbFetchOne("
        SELECT request_number FROM service_requests 
        WHERE request_number LIKE ? 
        ORDER BY id DESC LIMIT 1
    ", ["$prefix$year$month%"]);
    
    if ($last && preg_match('/(\d+)$/', $last['request_number'], $m)) {
        $seq = intval($m[1]) + 1;
    } else {
        $seq = 1;
    }
    
    return $prefix . $year . $month . str_pad($seq, 4, '0', STR_PAD_LEFT);
}

/**
 * Show admin interface for manual run
 */
function showAdminInterface() {
    global $DEFAULT_DAYS_BEFORE;
    
    $pageTitle = 'Certificate Renewal Workflow';
    
    // Get preview of what would be processed
    $preview = dbFetchAll("
        SELECT cc.id, cc.client_id, cc.certificate_type_id, cc.certificate_number,
               cc.expiry_date,
               ct.name as type_name, ct.code as type_code, ct.renewal_reminder_days,
               c.name as client_name,
               DATEDIFF(cc.expiry_date, CURDATE()) as days_left,
               (SELECT COUNT(*) FROM service_requests sr 
                WHERE sr.client_id = cc.client_id 
                AND (sr.certificate_id = cc.id OR sr.notes LIKE CONCAT('%[CERT-RENEWAL:', cc.id, ']%'))
                AND sr.deleted_at IS NULL
                AND sr.status NOT IN ('DONE', 'COMPLETED', 'CANCELLED')) as has_task
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        JOIN clients c ON cc.client_id = c.id AND c.deleted_at IS NULL
        WHERE cc.deleted_at IS NULL
          AND ct.deleted_at IS NULL
          AND ct.has_expiry = 1
          AND cc.expiry_date IS NOT NULL
          AND cc.expiry_date > CURDATE()
          AND cc.expiry_date <= DATE_ADD(CURDATE(), INTERVAL COALESCE(ct.renewal_reminder_days, ?) DAY)
        ORDER BY cc.expiry_date ASC
    ", [$DEFAULT_DAYS_BEFORE]) ?: [];
    
    $needsTask = array_filter($preview, fn($c) => $c['has_task'] == 0);
    $alreadyHasTask = array_filter($preview, fn($c) => $c['has_task'] > 0);
    
    // Get last run info
    $lastRun = null;
    try {
        $lastRun = dbFetchOne("
            SELECT * FROM system_logs 
            WHERE log_type = 'CERT_RENEWAL' 
            ORDER BY created_at DESC LIMIT 1
        ");
    } catch (Exception $e) {}
    
    require_once 'includes/header.php';
    ?>
    
    <div class="mb-6">
        <a href="certificate_expiry_report.php" class="text-blue-600 hover:text-blue-700 text-sm">
            <i class="fas fa-arrow-left mr-1"></i> Back to Expiry Report
        </a>
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold"><i class="fas fa-sync-alt text-green-500 mr-2"></i>Certificate Renewal Workflow</h1>
            <p class="text-gray-500 text-sm">Automatically create renewal tasks for expiring certificates</p>
        </div>
    </div>
    
    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="card p-4 text-center">
            <p class="text-3xl font-bold text-blue-600"><?= count($preview) ?></p>
            <p class="text-sm text-gray-500">Expiring Soon</p>
        </div>
        <div class="card p-4 text-center bg-amber-50">
            <p class="text-3xl font-bold text-amber-600"><?= count($needsTask) ?></p>
            <p class="text-sm text-gray-500">Need Renewal Task</p>
        </div>
        <div class="card p-4 text-center bg-green-50">
            <p class="text-3xl font-bold text-green-600"><?= count($alreadyHasTask) ?></p>
            <p class="text-sm text-gray-500">Already Have Task</p>
        </div>
        <div class="card p-4 text-center">
            <p class="text-3xl font-bold text-gray-600"><?= $DEFAULT_DAYS_BEFORE ?></p>
            <p class="text-sm text-gray-500">Default Reminder Days</p>
        </div>
    </div>
    
    <!-- Last Run Info -->
    <?php if ($lastRun): ?>
    <div class="card p-4 mb-6 bg-gray-50">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Last Run: <strong><?= date('d M Y, h:i A', strtotime($lastRun['created_at'])) ?></strong></p>
                <p class="text-sm text-gray-600"><?= htmlspecialchars($lastRun['log_message']) ?></p>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Run Button -->
    <div class="card p-6 mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="font-bold text-lg">Run Renewal Check Now</h3>
                <p class="text-sm text-gray-500">This will create renewal tasks for <?= count($needsTask) ?> certificate(s)</p>
            </div>
            <button onclick="runRenewalCheck()" class="btn btn-primary" <?= count($needsTask) == 0 ? 'disabled' : '' ?>>
                <i class="fas fa-play mr-2"></i> Run Now
            </button>
        </div>
        
        <div id="runResult" class="mt-4 hidden">
            <div class="p-4 rounded-lg bg-green-50 border border-green-200">
                <p class="font-medium text-green-800"><i class="fas fa-check-circle mr-2"></i>Completed</p>
                <p class="text-sm text-green-700" id="runResultText"></p>
            </div>
        </div>
    </div>
    
    <!-- Preview Table -->
    <div class="card overflow-hidden">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-bold"><i class="fas fa-list mr-2"></i>Certificates Expiring Within Reminder Period</h3>
        </div>
        
        <?php if (empty($preview)): ?>
        <div class="p-8 text-center text-gray-400">
            <i class="fas fa-check-circle text-5xl text-green-400 mb-3"></i>
            <p class="text-lg">No certificates need renewal tasks right now!</p>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium text-gray-500">Client</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-500">Certificate</th>
                        <th class="px-4 py-3 text-center font-medium text-gray-500">Expiry</th>
                        <th class="px-4 py-3 text-center font-medium text-gray-500">Days Left</th>
                        <th class="px-4 py-3 text-center font-medium text-gray-500">Task Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($preview as $cert): 
                        $daysLeft = $cert['days_left'];
                        $urgencyClass = $daysLeft <= 7 ? 'text-red-600' : ($daysLeft <= 15 ? 'text-orange-600' : 'text-amber-600');
                    ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <a href="view_client.php?id=<?= $cert['client_id'] ?>" class="text-blue-600 hover:underline font-medium">
                                <?= htmlspecialchars($cert['client_name']) ?>
                            </a>
                        </td>
                        <td class="px-4 py-3">
                            <p class="font-medium"><?= htmlspecialchars($cert['type_name']) ?></p>
                            <p class="text-xs text-gray-400"><?= htmlspecialchars($cert['certificate_number'] ?? '-') ?></p>
                        </td>
                        <td class="px-4 py-3 text-center"><?= date('d M Y', strtotime($cert['expiry_date'])) ?></td>
                        <td class="px-4 py-3 text-center font-bold <?= $urgencyClass ?>"><?= $daysLeft ?>d</td>
                        <td class="px-4 py-3 text-center">
                            <?php if ($cert['has_task'] > 0): ?>
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">
                                <i class="fas fa-check mr-1"></i>Has Task
                            </span>
                            <?php else: ?>
                            <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded text-xs font-medium">
                                <i class="fas fa-clock mr-1"></i>Needs Task
                            </span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Cron Setup Instructions -->
    <div class="card p-4 mt-6 bg-blue-50">
        <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-clock mr-2"></i>Automated Setup (Cron Job)</h4>
        <p class="text-sm text-blue-700 mb-2">To run this automatically every day, add this cron job:</p>
        <code class="block p-2 bg-white rounded text-xs font-mono text-gray-700">
            0 8 * * * php <?= realpath(__DIR__) ?>/certificate_renewal_cron.php >> /var/log/cert_renewal.log 2>&1
        </code>
        <p class="text-xs text-blue-600 mt-2">Or call via URL: <?= (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ?>/certificate_renewal_cron.php?run=1&token=YOUR_TOKEN</p>
    </div>
    
    <script>
    function runRenewalCheck() {
        if (!confirm('Create renewal tasks for expiring certificates?')) return;
        
        const btn = event.target;
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Running...';
        
        fetch('certificate_renewal_cron.php?run=1', {
            credentials: 'same-origin'
        })
        .then(r => r.json())
        .then(data => {
            document.getElementById('runResult').classList.remove('hidden');
            document.getElementById('runResultText').textContent = 
                `Created: ${data.created} task(s), Skipped: ${data.skipped}, Errors: ${data.errors}`;
            
            if (data.created > 0) {
                setTimeout(() => location.reload(), 2000);
            }
        })
        .catch(err => {
            alert('Error: ' + err.message);
        })
        .finally(() => {
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-play mr-2"></i> Run Now';
        });
    }
    </script>
    
    <?php
    require_once 'includes/footer.php';
}
