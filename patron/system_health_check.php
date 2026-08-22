<?php
/**
 * PATRON - System Health Check & Validation Report
 * Run this to identify issues, missing data, and broken links
 */

require_once 'includes/db.php';
startSession();
requireLogin();

if (!isAdmin()) {
    die('Admin access required');
}

$pageTitle = 'System Health Check';
$issues = [];
$warnings = [];
$passed = [];

// ============================================
// 1. DATABASE TABLE CHECKS
// ============================================
$requiredTables = [
    'clients', 'persons_new', 'client_persons', 'services', 'service_requests',
    'request_documents', 'request_info_values', 'document_types', 'information_fields',
    'certificate_types', 'certificates', 'client_certificates', 'users', 'roles',
    'service_document_requirements', 'service_field_requirements', 'tasks', 'activity_logs'
];

$existingTables = [];
$tablesResult = dbFetchAll("SHOW TABLES");
foreach ($tablesResult as $t) {
    $existingTables[] = array_values($t)[0];
}

foreach ($requiredTables as $table) {
    if (in_array($table, $existingTables)) {
        $passed[] = "Table '$table' exists";
    } else {
        $issues[] = "Missing table: '$table'";
    }
}

// ============================================
// 2. DATA INTEGRITY CHECKS
// ============================================

// Orphan service requests (no client)
$orphanRequests = dbFetchOne("SELECT COUNT(*) as c FROM service_requests sr LEFT JOIN clients c ON sr.client_id = c.id WHERE c.id IS NULL AND sr.deleted_at IS NULL");
if (($orphanRequests['c'] ?? 0) > 0) {
    $issues[] = "Orphan service requests (no client): " . $orphanRequests['c'];
} else {
    $passed[] = "No orphan service requests";
}

// Orphan client_persons (person doesn't exist)
$orphanCP = dbFetchOne("SELECT COUNT(*) as c FROM client_persons cp LEFT JOIN persons_new p ON cp.person_id = p.id WHERE p.id IS NULL");
if (($orphanCP['c'] ?? 0) > 0) {
    $warnings[] = "Orphan client_persons links: " . $orphanCP['c'];
} else {
    $passed[] = "No orphan client_persons links";
}

// Services without document requirements
$servicesNoDocs = dbFetchOne("SELECT COUNT(*) as c FROM services s LEFT JOIN service_document_requirements sdr ON s.id = sdr.service_id WHERE sdr.id IS NULL AND s.deleted_at IS NULL AND s.is_active = 1");
if (($servicesNoDocs['c'] ?? 0) > 0) {
    $warnings[] = "Active services without document requirements: " . $servicesNoDocs['c'];
}

// Requests with invalid status
$validStatuses = ['NEW', 'WAITING_DOCS', 'UNDER_REVIEW', 'APPLIED', 'DONE', 'HOLD', 'CANCELLED', 'COMPLETED', 'IN_PROGRESS'];
$invalidStatus = dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE status NOT IN ('" . implode("','", $validStatuses) . "') AND deleted_at IS NULL");
if (($invalidStatus['c'] ?? 0) > 0) {
    $issues[] = "Requests with invalid status: " . $invalidStatus['c'];
} else {
    $passed[] = "All request statuses are valid";
}

// ============================================
// 3. VALIDATION PATTERN CHECKS
// ============================================

// Invalid PAN numbers
$invalidPAN = dbFetchAll("SELECT id, full_name, pan_number FROM persons_new WHERE pan_number IS NOT NULL AND pan_number != '' AND pan_number NOT REGEXP '^[A-Z]{5}[0-9]{4}[A-Z]$' AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidPAN)) {
    $issues[] = "Invalid PAN numbers found: " . count($invalidPAN) . " (e.g., " . ($invalidPAN[0]['pan_number'] ?? '') . ")";
} else {
    $passed[] = "All PAN numbers are valid format";
}

// Invalid DIN (should be 8 digits)
$invalidDIN = dbFetchAll("SELECT id, full_name, din FROM persons_new WHERE din IS NOT NULL AND din != '' AND din NOT REGEXP '^[0-9]{8}$' AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidDIN)) {
    $warnings[] = "Invalid DIN numbers: " . count($invalidDIN);
}

// Invalid mobile numbers (should be 10 digits for India)
$invalidMobile = dbFetchAll("SELECT id, full_name, mobile FROM persons_new WHERE mobile IS NOT NULL AND mobile != '' AND LENGTH(REGEXP_REPLACE(mobile, '[^0-9]', '')) != 10 AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidMobile)) {
    $warnings[] = "Invalid mobile numbers: " . count($invalidMobile);
}

// Invalid emails
$invalidEmail = dbFetchAll("SELECT id, full_name, email FROM persons_new WHERE email IS NOT NULL AND email != '' AND email NOT REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,}$' AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidEmail)) {
    $warnings[] = "Invalid email addresses: " . count($invalidEmail);
}

// Invalid GSTIN (15 characters)
$invalidGSTIN = dbFetchAll("SELECT id, name, gstin FROM clients WHERE gstin IS NOT NULL AND gstin != '' AND LENGTH(gstin) != 15 AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidGSTIN)) {
    $warnings[] = "Invalid GSTIN numbers: " . count($invalidGSTIN);
}

// Invalid CIN (21 characters)
$invalidCIN = dbFetchAll("SELECT id, name, cin FROM clients WHERE cin IS NOT NULL AND cin != '' AND LENGTH(cin) != 21 AND deleted_at IS NULL LIMIT 10");
if (!empty($invalidCIN)) {
    $warnings[] = "Invalid CIN numbers: " . count($invalidCIN);
}

// ============================================
// 4. MISSING REQUIRED DATA
// ============================================

// Clients without portal token
$noPortal = dbFetchOne("SELECT COUNT(*) as c FROM clients WHERE (portal_token IS NULL OR portal_token = '') AND deleted_at IS NULL");
if (($noPortal['c'] ?? 0) > 0) {
    $warnings[] = "Clients without portal token: " . $noPortal['c'] . " (Run generate_portal_tokens.php)";
}

// Persons without PAN
$noPAN = dbFetchOne("SELECT COUNT(*) as c FROM persons_new WHERE (pan_number IS NULL OR pan_number = '') AND deleted_at IS NULL");
if (($noPAN['c'] ?? 0) > 0) {
    $warnings[] = "Persons without PAN: " . $noPAN['c'];
}

// Directors without DIN
$directorNoDIN = dbFetchOne("
    SELECT COUNT(DISTINCT p.id) as c 
    FROM persons_new p 
    JOIN client_persons cp ON p.id = cp.person_id 
    WHERE cp.role_type = 'DIRECTOR' AND (p.din IS NULL OR p.din = '') AND p.deleted_at IS NULL
");
if (($directorNoDIN['c'] ?? 0) > 0) {
    $warnings[] = "Directors without DIN: " . $directorNoDIN['c'];
}

// ============================================
// 5. COMPLIANCE CHECKS
// ============================================

// Overdue KYC
$overdueKYC = dbFetchOne("SELECT COUNT(*) as c FROM persons_new WHERE din IS NOT NULL AND din != '' AND din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED' AND deleted_at IS NULL");
if (($overdueKYC['c'] ?? 0) > 0) {
    $issues[] = "Directors with OVERDUE KYC: " . $overdueKYC['c'];
}

// Expiring DSC (next 30 days)
$expiringDSC = dbFetchOne("SELECT COUNT(*) as c FROM persons_new WHERE dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) AND deleted_at IS NULL");
if (($expiringDSC['c'] ?? 0) > 0) {
    $warnings[] = "DSC expiring in 30 days: " . $expiringDSC['c'];
}

// Expired DSC
$expiredDSC = dbFetchOne("SELECT COUNT(*) as c FROM persons_new WHERE dsc_expiry_date < CURDATE() AND dsc_status = 'ACTIVE' AND deleted_at IS NULL");
if (($expiredDSC['c'] ?? 0) > 0) {
    $issues[] = "Expired DSC (still marked ACTIVE): " . $expiredDSC['c'];
}

// ============================================
// 6. FILE/PAGE EXISTENCE CHECK
// ============================================
$requiredPages = [
    'dashboard.php', 'clients.php', 'persons.php', 'requests.php', 'services.php',
    'document_types.php', 'information_fields.php', 'certificate_types.php',
    'add_client.php', 'add_person.php', 'add_request.php', 'add_service.php',
    'person_view.php', 'client_view.php'
];

foreach ($requiredPages as $page) {
    if (file_exists($page)) {
        $passed[] = "Page '$page' exists";
    } else {
        $warnings[] = "Missing page: '$page'";
    }
}

// ============================================
// 7. SUMMARY STATISTICS
// ============================================
$stats = [];
$stats['clients'] = dbFetchOne("SELECT COUNT(*) as c FROM clients WHERE deleted_at IS NULL")['c'] ?? 0;
$stats['persons'] = dbFetchOne("SELECT COUNT(*) as c FROM persons_new WHERE deleted_at IS NULL")['c'] ?? 0;
$stats['services'] = dbFetchOne("SELECT COUNT(*) as c FROM services WHERE deleted_at IS NULL AND is_active = 1")['c'] ?? 0;
$stats['requests'] = dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE deleted_at IS NULL")['c'] ?? 0;
$stats['active_requests'] = dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE deleted_at IS NULL AND status NOT IN ('DONE','COMPLETED','CANCELLED')")['c'] ?? 0;
$stats['users'] = dbFetchOne("SELECT COUNT(*) as c FROM users WHERE deleted_at IS NULL")['c'] ?? 0;

require_once 'includes/header.php';
?>

<style>
.check-card { border-radius: 12px; padding: 20px; margin-bottom: 20px; }
.issue { background: #fef2f2; border-left: 4px solid #ef4444; }
.warning { background: #fffbeb; border-left: 4px solid #f59e0b; }
.passed { background: #f0fdf4; border-left: 4px solid #22c55e; }
.stat-box { background: white; border-radius: 8px; padding: 16px; text-align: center; border: 1px solid #e5e7eb; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">System Health Check</h2>
        <p class="text-gray-500 text-sm">Validation report generated at <?= date('d M Y H:i:s') ?></p>
    </div>
    <a href="system_health_check.php" class="btn btn-primary"><i class="fas fa-sync mr-2"></i>Refresh</a>
</div>

<!-- Summary Stats -->
<div class="grid grid-cols-2 md:grid-cols-6 gap-4 mb-6">
    <div class="stat-box">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['clients'] ?></p>
        <p class="text-xs text-gray-500">Clients</p>
    </div>
    <div class="stat-box">
        <p class="text-2xl font-bold text-indigo-600"><?= $stats['persons'] ?></p>
        <p class="text-xs text-gray-500">Persons</p>
    </div>
    <div class="stat-box">
        <p class="text-2xl font-bold text-purple-600"><?= $stats['services'] ?></p>
        <p class="text-xs text-gray-500">Services</p>
    </div>
    <div class="stat-box">
        <p class="text-2xl font-bold text-green-600"><?= $stats['requests'] ?></p>
        <p class="text-xs text-gray-500">Total Requests</p>
    </div>
    <div class="stat-box">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['active_requests'] ?></p>
        <p class="text-xs text-gray-500">Active Requests</p>
    </div>
    <div class="stat-box">
        <p class="text-2xl font-bold text-teal-600"><?= $stats['users'] ?></p>
        <p class="text-xs text-gray-500">Users</p>
    </div>
</div>

<!-- Health Score -->
<div class="card p-6 mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-lg font-bold">Overall Health Score</h3>
            <p class="text-gray-500 text-sm"><?= count($passed) ?> passed, <?= count($warnings) ?> warnings, <?= count($issues) ?> issues</p>
        </div>
        <?php 
        $total = count($passed) + count($warnings) + count($issues);
        $score = $total > 0 ? round((count($passed) / $total) * 100) : 100;
        $scoreColor = $score >= 80 ? 'green' : ($score >= 60 ? 'amber' : 'red');
        ?>
        <div class="text-center">
            <div class="text-4xl font-bold text-<?= $scoreColor ?>-600"><?= $score ?>%</div>
            <div class="text-xs text-gray-500">Health Score</div>
        </div>
    </div>
    <div class="mt-4 bg-gray-200 rounded-full h-3">
        <div class="bg-<?= $scoreColor ?>-500 h-3 rounded-full" style="width: <?= $score ?>%"></div>
    </div>
</div>

<!-- Issues -->
<?php if (!empty($issues)): ?>
<div class="check-card issue">
    <h3 class="font-bold text-red-800 mb-3"><i class="fas fa-times-circle mr-2"></i>Critical Issues (<?= count($issues) ?>)</h3>
    <ul class="space-y-2">
        <?php foreach ($issues as $issue): ?>
        <li class="flex items-start gap-2 text-red-700">
            <i class="fas fa-exclamation-circle mt-1"></i>
            <span><?= htmlspecialchars($issue) ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!-- Warnings -->
<?php if (!empty($warnings)): ?>
<div class="check-card warning">
    <h3 class="font-bold text-amber-800 mb-3"><i class="fas fa-exclamation-triangle mr-2"></i>Warnings (<?= count($warnings) ?>)</h3>
    <ul class="space-y-2">
        <?php foreach ($warnings as $warning): ?>
        <li class="flex items-start gap-2 text-amber-700">
            <i class="fas fa-exclamation-triangle mt-1"></i>
            <span><?= htmlspecialchars($warning) ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!-- Passed -->
<details class="check-card passed">
    <summary class="font-bold text-green-800 cursor-pointer"><i class="fas fa-check-circle mr-2"></i>Passed Checks (<?= count($passed) ?>)</summary>
    <ul class="mt-3 space-y-1">
        <?php foreach ($passed as $pass): ?>
        <li class="flex items-center gap-2 text-green-700 text-sm">
            <i class="fas fa-check"></i>
            <span><?= htmlspecialchars($pass) ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
</details>

<!-- Quick Actions -->
<div class="card p-6 mt-6">
    <h3 class="font-bold mb-4"><i class="fas fa-tools mr-2"></i>Quick Fix Actions</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="generate_portal_tokens.php" class="p-4 bg-blue-50 hover:bg-blue-100 rounded-lg text-center">
            <i class="fas fa-key text-blue-600 text-2xl mb-2"></i>
            <p class="text-sm font-medium">Generate Portal Tokens</p>
        </a>
        <a href="persons.php?kyc=overdue" class="p-4 bg-red-50 hover:bg-red-100 rounded-lg text-center">
            <i class="fas fa-id-card text-red-600 text-2xl mb-2"></i>
            <p class="text-sm font-medium">View Overdue KYC</p>
        </a>
        <a href="persons.php?dsc=EXPIRED" class="p-4 bg-amber-50 hover:bg-amber-100 rounded-lg text-center">
            <i class="fas fa-certificate text-amber-600 text-2xl mb-2"></i>
            <p class="text-sm font-medium">View Expired DSC</p>
        </a>
        <a href="requests.php" class="p-4 bg-green-50 hover:bg-green-100 rounded-lg text-center">
            <i class="fas fa-clipboard-list text-green-600 text-2xl mb-2"></i>
            <p class="text-sm font-medium">Work Board</p>
        </a>
    </div>
</div>

<!-- Additional Info -->
<div class="card p-6 mt-6">
    <h3 class="font-bold mb-4"><i class="fas fa-info-circle mr-2"></i>How to Fix Common Issues</h3>
    <div class="space-y-4 text-sm">
        <div class="p-3 bg-gray-50 rounded-lg">
            <p class="font-medium text-gray-700">Invalid PAN Numbers</p>
            <p class="text-gray-500 mt-1">Go to Persons → Edit each person with invalid PAN → Correct format: ABCDE1234F (5 letters + 4 digits + 1 letter)</p>
        </div>
        <div class="p-3 bg-gray-50 rounded-lg">
            <p class="font-medium text-gray-700">Services Without Document Requirements</p>
            <p class="text-gray-500 mt-1">Go to Services → Click "Docs" icon → Add required documents for each service</p>
        </div>
        <div class="p-3 bg-gray-50 rounded-lg">
            <p class="font-medium text-gray-700">Directors Without DIN</p>
            <p class="text-gray-500 mt-1">Go to Persons → Filter by Role: Director → Edit and add DIN (8 digits) for each director</p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
