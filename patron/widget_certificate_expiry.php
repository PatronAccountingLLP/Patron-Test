<?php
/**
 * PATRON - Certificate Expiry Dashboard Widget
 * 
 * Include this file in your dashboard.php to show expiring certificates
 * Usage: <?php include 'widget_certificate_expiry.php'; ?>
 */

// Get expiring certificates data
$certWidgetData = [
    'expired' => 0,
    'critical' => 0,   // <= 7 days
    'warning' => 0,    // 8-30 days
    'upcoming' => 0,   // 31-90 days
    'total_expiring' => 0,
    'certificates' => []
];

try {
    // Get summary stats
    $certStats = dbFetchOne("
        SELECT 
            SUM(CASE WHEN cc.expiry_date < CURDATE() THEN 1 ELSE 0 END) as expired,
            SUM(CASE WHEN cc.expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) THEN 1 ELSE 0 END) as critical,
            SUM(CASE WHEN cc.expiry_date BETWEEN DATE_ADD(CURDATE(), INTERVAL 8 DAY) AND DATE_ADD(CURDATE(), INTERVAL 30 DAY) THEN 1 ELSE 0 END) as warning,
            SUM(CASE WHEN cc.expiry_date BETWEEN DATE_ADD(CURDATE(), INTERVAL 31 DAY) AND DATE_ADD(CURDATE(), INTERVAL 90 DAY) THEN 1 ELSE 0 END) as upcoming
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        WHERE cc.deleted_at IS NULL 
          AND ct.deleted_at IS NULL 
          AND ct.has_expiry = 1
          AND cc.expiry_date IS NOT NULL
    ");
    
    $certWidgetData['expired'] = $certStats['expired'] ?? 0;
    $certWidgetData['critical'] = $certStats['critical'] ?? 0;
    $certWidgetData['warning'] = $certStats['warning'] ?? 0;
    $certWidgetData['upcoming'] = $certStats['upcoming'] ?? 0;
    $certWidgetData['total_expiring'] = $certWidgetData['expired'] + $certWidgetData['critical'] + $certWidgetData['warning'];
    
    // Get top 5 most urgent certificates
    $certWidgetData['certificates'] = dbFetchAll("
        SELECT cc.id, cc.expiry_date, cc.certificate_number,
               ct.name as type_name, ct.code as type_code,
               c.id as client_id, c.name as client_name,
               DATEDIFF(cc.expiry_date, CURDATE()) as days_left
        FROM client_certificates cc
        JOIN certificate_types ct ON cc.certificate_type_id = ct.id
        JOIN clients c ON cc.client_id = c.id AND c.deleted_at IS NULL
        WHERE cc.deleted_at IS NULL 
          AND ct.deleted_at IS NULL 
          AND ct.has_expiry = 1
          AND cc.expiry_date IS NOT NULL
          AND cc.expiry_date <= DATE_ADD(CURDATE(), INTERVAL 90 DAY)
        ORDER BY cc.expiry_date ASC
        LIMIT 5
    ") ?: [];
    
} catch (Exception $e) {
    // Table might not exist, use empty data
}

$hasCertAlerts = $certWidgetData['total_expiring'] > 0;
?>

<!-- Certificate Expiry Widget -->
<div class="card overflow-hidden">
    <div class="p-4 border-b bg-gradient-to-r from-amber-50 to-orange-50 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-amber-500 rounded-lg flex items-center justify-center">
                <i class="fas fa-certificate text-white"></i>
            </div>
            <div>
                <h3 class="font-semibold text-amber-800">Certificate Expiry</h3>
                <p class="text-xs text-amber-600">Track renewals & expirations</p>
            </div>
        </div>
        <a href="certificate_expiry_report.php" class="text-amber-600 hover:text-amber-800 text-sm">
            View All <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
    
    <!-- Stats Row -->
    <div class="grid grid-cols-4 divide-x border-b">
        <a href="certificate_expiry_report.php?status=expired" class="p-3 text-center hover:bg-red-50 transition-colors <?= $certWidgetData['expired'] > 0 ? 'bg-red-50' : '' ?>">
            <p class="text-2xl font-bold <?= $certWidgetData['expired'] > 0 ? 'text-red-600' : 'text-gray-400' ?>"><?= $certWidgetData['expired'] ?></p>
            <p class="text-xs text-gray-500">Expired</p>
        </a>
        <a href="certificate_expiry_report.php?status=expiring&days=7" class="p-3 text-center hover:bg-orange-50 transition-colors <?= $certWidgetData['critical'] > 0 ? 'bg-orange-50' : '' ?>">
            <p class="text-2xl font-bold <?= $certWidgetData['critical'] > 0 ? 'text-orange-600' : 'text-gray-400' ?>"><?= $certWidgetData['critical'] ?></p>
            <p class="text-xs text-gray-500">≤7 Days</p>
        </a>
        <a href="certificate_expiry_report.php?status=expiring&days=30" class="p-3 text-center hover:bg-amber-50 transition-colors <?= $certWidgetData['warning'] > 0 ? 'bg-amber-50' : '' ?>">
            <p class="text-2xl font-bold <?= $certWidgetData['warning'] > 0 ? 'text-amber-600' : 'text-gray-400' ?>"><?= $certWidgetData['warning'] ?></p>
            <p class="text-xs text-gray-500">8-30 Days</p>
        </a>
        <a href="certificate_expiry_report.php?status=expiring&days=90" class="p-3 text-center hover:bg-yellow-50 transition-colors">
            <p class="text-2xl font-bold <?= $certWidgetData['upcoming'] > 0 ? 'text-yellow-600' : 'text-gray-400' ?>"><?= $certWidgetData['upcoming'] ?></p>
            <p class="text-xs text-gray-500">31-90 Days</p>
        </a>
    </div>
    
    <!-- Certificate List -->
    <?php if (empty($certWidgetData['certificates'])): ?>
    <div class="p-6 text-center">
        <i class="fas fa-check-circle text-4xl text-green-400 mb-2"></i>
        <p class="text-gray-500">No certificates expiring soon</p>
    </div>
    <?php else: ?>
    <div class="divide-y">
        <?php foreach ($certWidgetData['certificates'] as $cert): 
            $daysLeft = $cert['days_left'];
            $isExpired = $daysLeft < 0;
            $isCritical = $daysLeft >= 0 && $daysLeft <= 7;
            $isWarning = $daysLeft > 7 && $daysLeft <= 30;
            
            $statusClass = $isExpired ? 'bg-red-100 text-red-700' : 
                          ($isCritical ? 'bg-orange-100 text-orange-700' : 
                          ($isWarning ? 'bg-amber-100 text-amber-700' : 'bg-yellow-100 text-yellow-700'));
            $rowClass = $isExpired ? 'bg-red-50' : ($isCritical ? 'bg-orange-50' : '');
        ?>
        <div class="p-3 flex items-center gap-3 hover:bg-gray-50 <?= $rowClass ?>">
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate"><?= htmlspecialchars($cert['type_name']) ?></p>
                <a href="view_client.php?id=<?= $cert['client_id'] ?>" class="text-xs text-blue-600 hover:underline truncate block">
                    <?= htmlspecialchars($cert['client_name']) ?>
                </a>
            </div>
            <div class="text-right">
                <span class="px-2 py-1 rounded text-xs font-medium <?= $statusClass ?>">
                    <?php if ($isExpired): ?>
                        <?= abs($daysLeft) ?>d ago
                    <?php else: ?>
                        <?= $daysLeft ?>d left
                    <?php endif; ?>
                </span>
                <p class="text-xs text-gray-400 mt-1"><?= date('d M', strtotime($cert['expiry_date'])) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <!-- Footer Actions -->
    <div class="p-3 border-t bg-gray-50 flex items-center justify-between">
        <a href="certificate_renewal_cron.php" class="text-xs text-blue-600 hover:underline">
            <i class="fas fa-sync-alt mr-1"></i>Renewal Workflow
        </a>
        <a href="certificates.php" class="text-xs text-gray-500 hover:text-gray-700">
            All Certificates <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
</div>
