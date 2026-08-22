<?php
/**
 * PATRON - Certificate Alert Integration for Header
 * 
 * Add this code to your header.php in the alert counts section (around line 26-53)
 * 
 * ============================================================
 * INTEGRATION INSTRUCTIONS
 * ============================================================
 * 
 * 1. HEADER.PHP - Add Certificate Alert Count
 *    Find the $alertCounts section in header.php and add:
 */

// ---- ADD THIS TO header.php in the $alertCounts section (around line 43-52) ----

    // Expiring certificates (within 30 days)
    $alertCounts['certificates'] = 0;
    try {
        $certAlert = dbFetchOne("
            SELECT 
                SUM(CASE WHEN cc.expiry_date < CURDATE() THEN 1 ELSE 0 END) as expired,
                SUM(CASE WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 1 ELSE 0 END) as expiring
            FROM client_certificates cc
            JOIN certificate_types ct ON cc.certificate_type_id = ct.id
            WHERE cc.deleted_at IS NULL 
              AND ct.deleted_at IS NULL 
              AND ct.has_expiry = 1
              AND cc.expiry_date IS NOT NULL
        ");
        $alertCounts['certificates'] = ($certAlert['expired'] ?? 0) + ($certAlert['expiring'] ?? 0);
    } catch (Exception $e) {}

// ---- END OF HEADER.PHP ADDITION ----

/**
 * 2. SIDEBAR/NAVIGATION - Add Certificate Menu with Badge
 *    Find your navigation menu and add a certificates link with badge:
 */
?>

<!-- Add this to your sidebar navigation -->
<a href="certificate_expiry_report.php" class="nav-link flex items-center justify-between">
    <span><i class="fas fa-certificate mr-3"></i>Certificates</span>
    <?php if (($alertCounts['certificates'] ?? 0) > 0): ?>
    <span class="px-2 py-0.5 bg-amber-500 text-white text-xs rounded-full"><?= $alertCounts['certificates'] ?></span>
    <?php endif; ?>
</a>

<?php
/**
 * 3. DASHBOARD.PHP - Include the Widget
 *    Add this where you want the certificate widget to appear:
 */
?>

<!-- Add this to dashboard.php where you want the widget -->
<?php include 'widget_certificate_expiry.php'; ?>

<?php
/**
 * 4. VIEW_CLIENT.PHP - Add Download ZIP Button
 *    In the certificates tab of client view, add:
 */
?>

<!-- Add this in the certificates tab header area -->
<?php if (!empty($clientCertificates)): ?>
<a href="download_certificates.php?client_id=<?= $clientId ?>" class="btn btn-secondary">
    <i class="fas fa-download mr-2"></i>Download All (ZIP)
</a>
<?php endif; ?>

<?php
/**
 * ============================================================
 * FULL EXAMPLE - Certificates Tab with Download Button
 * ============================================================
 * 
 * Here's a complete example of how the certificates tab might look
 * in view_client.php with the download button:
 */
?>

<!-- Certificates Tab Content Example -->
<div id="certificates-tab" class="tab-content">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold">
            <i class="fas fa-certificate text-amber-500 mr-2"></i>Certificates
        </h3>
        <div class="flex gap-2">
            <?php 
            // Check if client has any certificates with files
            $hasFiles = dbFetchOne("
                SELECT COUNT(*) as cnt FROM client_certificates 
                WHERE client_id = ? AND deleted_at IS NULL AND file_path IS NOT NULL AND file_path != ''
            ", [$clientId]);
            ?>
            <?php if (($hasFiles['cnt'] ?? 0) > 0): ?>
            <a href="download_certificates.php?client_id=<?= $clientId ?>" class="btn btn-secondary btn-sm" title="Download all certificates as ZIP">
                <i class="fas fa-file-archive mr-1"></i>Download ZIP
            </a>
            <?php endif; ?>
            <a href="add_certificate.php?client_id=<?= $clientId ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i>Add Certificate
            </a>
        </div>
    </div>
    
    <!-- Certificate list table goes here -->
</div>

<?php
/**
 * ============================================================
 * MENU ITEMS TO ADD
 * ============================================================
 * 
 * Add these to your sidebar navigation:
 * 
 * Main Menu:
 * - Certificates (link to certificates.php)
 * - Certificate Types (Admin only - link to certificate_types.php)
 * - Certificate Expiry Report (link to certificate_expiry_report.php)
 * - Renewal Workflow (Admin only - link to certificate_renewal_cron.php)
 */
?>

<!-- Complete Navigation Section for Certificates -->
<div class="nav-section">
    <p class="nav-section-title">CERTIFICATES</p>
    
    <a href="certificates.php" class="nav-link <?= $currentPage === 'certificates' ? 'active' : '' ?>">
        <i class="fas fa-certificate mr-3"></i>All Certificates
    </a>
    
    <a href="certificate_expiry_report.php" class="nav-link <?= $currentPage === 'certificate_expiry_report' ? 'active' : '' ?> flex items-center justify-between">
        <span><i class="fas fa-calendar-times mr-3"></i>Expiry Report</span>
        <?php if (($alertCounts['certificates'] ?? 0) > 0): ?>
        <span class="px-2 py-0.5 bg-amber-500 text-white text-xs rounded-full"><?= $alertCounts['certificates'] ?></span>
        <?php endif; ?>
    </a>
    
    <?php if ($isAdmin): ?>
    <a href="certificate_types.php" class="nav-link <?= $currentPage === 'certificate_types' ? 'active' : '' ?>">
        <i class="fas fa-tags mr-3"></i>Certificate Types
    </a>
    
    <a href="certificate_renewal_cron.php" class="nav-link <?= $currentPage === 'certificate_renewal_cron' ? 'active' : '' ?>">
        <i class="fas fa-sync-alt mr-3"></i>Renewal Workflow
    </a>
    <?php endif; ?>
</div>
