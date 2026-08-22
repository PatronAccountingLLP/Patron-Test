<?php
/**
 * PATRON - Portal Billing Section
 * FY-wise view with category breakdown for client portal
 * Include this file inside portal.php billing tab
 * 
 * Expected variables:
 * - $clientId: Client ID
 * - $token: Portal token
 */

// Invoice category detection function (inline for portal - doesn't require includes)
function portalDetectCategory($invoiceNumber) {
    if (!$invoiceNumber) return 'OTHER';
    $invoiceNumber = strtoupper(trim($invoiceNumber));
    
    $prefixes = [
        'PROFESSIONAL' => ['PA'],
        'TDS' => ['TDS'],
        'GST' => ['GST'],
        'ROC' => ['ROC'],
        'PT' => ['PT'],
        'REIMBURSEMENT' => ['REIM', 'REM'],
    ];
    
    foreach ($prefixes as $cat => $pres) {
        foreach ($pres as $p) {
            if (strpos($invoiceNumber, $p) === 0) return $cat;
        }
    }
    return 'OTHER';
}

function portalGetFY($date) {
    if (!$date) return null;
    $month = (int)date('n', strtotime($date));
    $year = (int)date('Y', strtotime($date));
    return $month >= 4 ? $year . '-' . substr($year + 1, 2) : ($year - 1) . '-' . substr($year, 2);
}

function portalGetCurrentFY() {
    return portalGetFY(date('Y-m-d'));
}

function portalGetFYRange($fy) {
    if (!$fy || !preg_match('/^(\d{4})-(\d{2})$/', $fy, $m)) {
        $month = (int)date('n');
        $year = (int)date('Y');
        $startYear = $month >= 4 ? $year : $year - 1;
    } else {
        $startYear = (int)$m[1];
    }
    return ['start' => $startYear . '-04-01', 'end' => ($startYear + 1) . '-03-31'];
}

// Category definitions
$portalCategories = [
    'PROFESSIONAL' => ['label' => 'Professional Services', 'short' => 'Professional', 'icon' => 'fa-briefcase', 'color' => 'indigo'],
    'TDS' => ['label' => 'TDS', 'short' => 'TDS', 'icon' => 'fa-percent', 'color' => 'purple'],
    'GST' => ['label' => 'GST', 'short' => 'GST', 'icon' => 'fa-receipt', 'color' => 'blue'],
    'ROC' => ['label' => 'ROC', 'short' => 'ROC', 'icon' => 'fa-building-columns', 'color' => 'teal'],
    'PT' => ['label' => 'PT', 'short' => 'PT', 'icon' => 'fa-landmark', 'color' => 'amber'],
    'REIMBURSEMENT' => ['label' => 'Reimbursement', 'short' => 'Reimb', 'icon' => 'fa-hand-holding-dollar', 'color' => 'orange'],
    'OTHER' => ['label' => 'Other', 'short' => 'Other', 'icon' => 'fa-file-invoice', 'color' => 'gray'],
];

// Get selected FY
$portalFY = sanitize($_GET['fy'] ?? '');

// Get available FYs for this client
$clientFYs = [];
$fyRows = dbFetchAll("
    SELECT DISTINCT YEAR(invoice_date) as year, MONTH(invoice_date) as month
    FROM invoices 
    WHERE client_id = ? AND invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
    ORDER BY invoice_date DESC
", [$clientId]) ?: [];

foreach ($fyRows as $row) {
    $fy = portalGetFY($row['year'] . '-' . str_pad($row['month'], 2, '0', STR_PAD_LEFT) . '-01');
    if ($fy && !in_array($fy, $clientFYs)) $clientFYs[] = $fy;
}

$currentFY = portalGetCurrentFY();
if (!in_array($currentFY, $clientFYs)) array_unshift($clientFYs, $currentFY);
usort($clientFYs, fn($a, $b) => strcmp($b, $a));

if (!$portalFY || !in_array($portalFY, $clientFYs)) $portalFY = $currentFY;
$fyRange = portalGetFYRange($portalFY);

// Get invoices for FY
$portalInvoices = dbFetchAll("
    SELECT *, DATEDIFF(CURDATE(), due_date) as days_overdue
    FROM invoices 
    WHERE client_id = ? 
    AND invoice_date >= ? AND invoice_date <= ?
    AND (status IS NULL OR LOWER(status) != 'void')
    ORDER BY invoice_date DESC
", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

// Categorize and group
$categoryStats = [];
foreach ($portalCategories as $k => $c) {
    $categoryStats[$k] = ['count' => 0, 'total' => 0, 'outstanding' => 0];
}

$overdueInvoices = [];
$dueInvoices = [];
$paidInvoices = [];
$today = date('Y-m-d');

foreach ($portalInvoices as &$inv) {
    $inv['category'] = portalDetectCategory($inv['zoho_invoice_number'] ?? '');
    $cat = $inv['category'];
    $total = (float)($inv['total'] ?? 0);
    $balance = (float)($inv['balance_due'] ?? 0);
    $status = strtolower($inv['status'] ?? '');
    $dueDate = $inv['due_date'] ?? null;
    
    $categoryStats[$cat]['count']++;
    $categoryStats[$cat]['total'] += $total;
    $categoryStats[$cat]['outstanding'] += $balance;
    
    if ($balance <= 0 || $status === 'paid') {
        $paidInvoices[] = $inv;
    } elseif ($dueDate && $dueDate < $today && $balance > 0) {
        $overdueInvoices[] = $inv;
    } else {
        $dueInvoices[] = $inv;
    }
}
unset($inv);

// Get payments for FY
$portalPayments = dbFetchAll("
    SELECT * FROM payments 
    WHERE client_id = ? 
    AND payment_date >= ? AND payment_date <= ?
    ORDER BY payment_date DESC
", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

$totalInvoiced = array_sum(array_column($portalInvoices, 'total'));
$totalPaid = array_sum(array_column($portalPayments, 'amount'));
$overdueAmount = array_sum(array_column($overdueInvoices, 'balance_due'));
$dueAmount = array_sum(array_column($dueInvoices, 'balance_due'));
?>

<!-- FY Selector -->
<div class="flex items-center justify-between mb-4">
    <div class="flex items-center gap-2">
        <label class="text-sm text-gray-600">Financial Year:</label>
        <select onchange="window.location.href='portal.php?token=<?= urlencode($token) ?>&tab=billing&fy='+this.value" 
                class="form-select text-sm py-1 rounded-lg border-gray-300">
            <?php foreach ($clientFYs as $fy): ?>
            <option value="<?= $fy ?>" <?= $portalFY === $fy ? 'selected' : '' ?>>FY <?= $fy ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <span class="text-xs text-gray-400">Apr <?= substr($portalFY, 0, 4) ?> - Mar <?= '20' . substr($portalFY, 5, 2) ?></span>
</div>

<!-- Billing Summary -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
    <div class="bg-blue-50 rounded-xl p-4 text-center">
        <p class="text-xl font-bold text-blue-600">₹<?= number_format($totalInvoiced) ?></p>
        <p class="text-xs text-gray-500">Total Invoiced</p>
    </div>
    <div class="bg-green-50 rounded-xl p-4 text-center">
        <p class="text-xl font-bold text-green-600">₹<?= number_format($totalPaid) ?></p>
        <p class="text-xs text-gray-500">Total Paid</p>
    </div>
    <div class="bg-amber-50 rounded-xl p-4 text-center">
        <p class="text-xl font-bold text-amber-600">₹<?= number_format($dueAmount) ?></p>
        <p class="text-xs text-gray-500">Due (<?= count($dueInvoices) ?>)</p>
    </div>
    <div class="bg-red-50 rounded-xl p-4 text-center <?= count($overdueInvoices) > 0 ? 'ring-2 ring-red-300' : '' ?>">
        <p class="text-xl font-bold text-red-600">₹<?= number_format($overdueAmount) ?></p>
        <p class="text-xs text-gray-500">Overdue (<?= count($overdueInvoices) ?>)</p>
    </div>
</div>

<!-- Category Breakdown -->
<div class="mb-6">
    <h4 class="text-sm font-medium text-gray-600 mb-3"><i class="fas fa-tags mr-1"></i>By Category</h4>
    <div class="grid grid-cols-3 md:grid-cols-7 gap-2">
        <?php foreach ($portalCategories as $key => $cat): 
            $cs = $categoryStats[$key];
            if ($cs['count'] == 0 && $key === 'OTHER') continue;
            $bgClass = "bg-{$cat['color']}-50";
            $textClass = "text-{$cat['color']}-700";
        ?>
        <div class="<?= $bgClass ?> rounded-lg p-2 text-center">
            <div class="flex items-center justify-center gap-1 mb-1">
                <i class="fas <?= $cat['icon'] ?> text-xs <?= $textClass ?>"></i>
                <span class="text-xs font-medium <?= $textClass ?>"><?= $cat['short'] ?></span>
            </div>
            <p class="text-sm font-bold text-gray-800">₹<?= number_format($cs['total']) ?></p>
            <p class="text-xs text-gray-500"><?= $cs['count'] ?> inv</p>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php if (empty($portalInvoices)): ?>
<div class="text-center py-12 text-gray-500">
    <i class="fas fa-file-invoice text-5xl text-gray-300 mb-4"></i>
    <p>No invoices found for FY <?= $portalFY ?></p>
</div>
<?php else: ?>

<!-- OVERDUE INVOICES -->
<?php if (!empty($overdueInvoices)): ?>
<div class="mb-6">
    <h3 class="font-semibold text-red-700 mb-3">
        <i class="fas fa-exclamation-triangle mr-2"></i>Overdue (<?= count($overdueInvoices) ?>) - ₹<?= number_format($overdueAmount) ?>
    </h3>
    <div class="space-y-2">
        <?php foreach ($overdueInvoices as $inv): 
            $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
        ?>
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 flex items-center justify-between">
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                    <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                </div>
                <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?> • Due: <?= date('d M Y', strtotime($inv['due_date'])) ?></p>
            </div>
            <div class="text-right mr-3">
                <p class="font-bold text-red-600">₹<?= number_format($inv['balance_due'] ?? 0) ?></p>
                <span class="text-xs bg-red-100 text-red-700 px-2 py-0.5 rounded-full"><?= $inv['days_overdue'] ?> days overdue</span>
            </div>
            <?php if (!empty($inv['zoho_invoice_id'])): ?>
            <div class="flex gap-1 ml-2">
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                   target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                   class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                    <i class="fas fa-download"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- DUE INVOICES -->
<?php if (!empty($dueInvoices)): ?>
<div class="mb-6">
    <h3 class="font-semibold text-amber-700 mb-3">
        <i class="fas fa-clock mr-2"></i>Due (<?= count($dueInvoices) ?>) - ₹<?= number_format($dueAmount) ?>
    </h3>
    <div class="space-y-2">
        <?php foreach ($dueInvoices as $inv): 
            $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
        ?>
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-center justify-between">
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                    <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                </div>
                <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?><?= $inv['due_date'] ? ' • Due: ' . date('d M Y', strtotime($inv['due_date'])) : '' ?></p>
            </div>
            <div class="text-right mr-3">
                <p class="font-bold text-amber-600">₹<?= number_format($inv['balance_due'] ?? 0) ?></p>
                <span class="text-xs bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full"><?= ucfirst($inv['status'] ?? 'Pending') ?></span>
            </div>
            <?php if (!empty($inv['zoho_invoice_id'])): ?>
            <div class="flex gap-1 ml-2">
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                   target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                   class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                    <i class="fas fa-download"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<!-- PAID INVOICES -->
<?php if (!empty($paidInvoices)): ?>
<div class="mb-6">
    <h3 class="font-semibold text-green-700 mb-3">
        <i class="fas fa-check-circle mr-2"></i>Paid (<?= count($paidInvoices) ?>) - ₹<?= number_format(array_sum(array_column($paidInvoices, 'total'))) ?>
    </h3>
    <div class="space-y-2">
        <?php foreach (array_slice($paidInvoices, 0, 10) as $inv): 
            $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
        ?>
        <div class="bg-green-50 border border-green-200 rounded-xl p-4 flex items-center justify-between">
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                    <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                </div>
                <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?></p>
            </div>
            <div class="text-right mr-3">
                <p class="font-bold text-green-600">₹<?= number_format($inv['total'] ?? 0) ?></p>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full"><i class="fas fa-check mr-1"></i>Paid</span>
            </div>
            <?php if (!empty($inv['zoho_invoice_id'])): ?>
            <div class="flex gap-1 ml-2">
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                   target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                   class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                    <i class="fas fa-download"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <?php if (count($paidInvoices) > 10): ?>
        <p class="text-center text-sm text-gray-500 mt-2">Showing 10 of <?= count($paidInvoices) ?> paid invoices</p>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- RECENT PAYMENTS -->
<?php if (!empty($portalPayments)): ?>
<div class="mt-6 pt-6 border-t">
    <h3 class="font-semibold text-gray-700 mb-3">
        <i class="fas fa-money-check-alt mr-2 text-green-500"></i>Recent Payments
    </h3>
    <div class="space-y-2">
        <?php foreach (array_slice($portalPayments, 0, 5) as $pay): ?>
        <div class="bg-gray-50 rounded-xl p-3 flex items-center justify-between">
            <div class="flex-1">
                <p class="text-sm font-medium"><?= htmlspecialchars($pay['payment_mode'] ?? 'Payment') ?></p>
                <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($pay['payment_date'])) ?><?= $pay['reference_number'] ? ' • ' . htmlspecialchars($pay['reference_number']) : '' ?></p>
            </div>
            <p class="font-bold text-green-600 mr-3">₹<?= number_format($pay['amount'] ?? 0) ?></p>
            <?php if (!empty($pay['zoho_payment_id'])): ?>
            <div class="flex gap-1">
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=payment&id=<?= $pay['id'] ?>&action=view" 
                   target="_blank" class="p-1.5 text-indigo-600 hover:bg-indigo-50 rounded" title="View Receipt">
                    <i class="fas fa-eye text-sm"></i>
                </a>
                <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=payment&id=<?= $pay['id'] ?>&action=download" 
                   class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Download Receipt">
                    <i class="fas fa-download text-sm"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>
