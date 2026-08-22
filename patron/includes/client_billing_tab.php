<?php
/**
 * PATRON - Client Billing Tab (included in view_client.php)
 * FY-wise view with category breakdown and separate Overdue/Unpaid/Paid sections
 * 
 * Expected variables from parent:
 * - $clientId: The client ID
 * - $client: Client data array
 */

if (!isset($clientId)) {
    echo '<div class="p-4 text-red-600">Error: Client ID not set</div>';
    return;
}

// Include helper functions
require_once 'includes/invoice_helpers.php';

// Get selected FY from URL
$billingFY = sanitize($_GET['billing_fy'] ?? '');
$billingCategory = sanitize($_GET['billing_cat'] ?? '');

// Get available FYs for this client (FYs that have invoice data)
$clientFYs = [];
$fyWithData = []; // Track which FYs actually have data
$fyRows = dbFetchAll("
    SELECT DISTINCT YEAR(invoice_date) as year, MONTH(invoice_date) as month
    FROM invoices 
    WHERE client_id = ? AND invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
    ORDER BY invoice_date DESC
", [$clientId]) ?: [];

foreach ($fyRows as $row) {
    $fy = getFinancialYear($row['year'] . '-' . str_pad($row['month'], 2, '0', STR_PAD_LEFT) . '-01');
    if ($fy && !in_array($fy, $clientFYs)) {
        $clientFYs[] = $fy;
        $fyWithData[] = $fy; // This FY has actual data
    }
}

// Ensure current FY is in list (for dropdown)
$currentFY = getCurrentFY();
if (!in_array($currentFY, $clientFYs)) {
    array_unshift($clientFYs, $currentFY);
}

// Sort descending
usort($clientFYs, function($a, $b) { return strcmp($b, $a); });

// Default to selected FY, or FIRST FY THAT HAS DATA, or current FY
if (!$billingFY || !in_array($billingFY, $clientFYs)) {
    // Prefer the most recent FY that actually has invoice data
    $billingFY = !empty($fyWithData) ? $fyWithData[0] : $currentFY;
}

// Get FY date range
$fyRange = getFYDateRange($billingFY);

// Get invoices for this client and FY - exclude void
$invoices = dbFetchAll("
    SELECT *, DATEDIFF(CURDATE(), due_date) as days_overdue
    FROM invoices 
    WHERE client_id = ? 
    AND invoice_date >= ? AND invoice_date <= ?
    AND (status IS NULL OR LOWER(status) != 'void')
    ORDER BY invoice_date DESC
", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

// Categorize invoices
$invoices = categorizeInvoices($invoices);

// Filter by category if selected
if ($billingCategory && $billingCategory !== 'ALL') {
    $invoices = array_filter($invoices, fn($inv) => $inv['category'] === $billingCategory);
    $invoices = array_values($invoices);
}

// Calculate stats
$stats = calculateInvoiceStats($invoices);

// Group by status
$groupedInvoices = groupInvoicesByStatus($invoices);

// Get estimates for this FY
$estimates = dbFetchAll("
    SELECT * FROM quotations 
    WHERE client_id = ? 
    AND estimate_date >= ? AND estimate_date <= ?
    ORDER BY estimate_date DESC
", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

// Get payments for this FY
$payments = dbFetchAll("
    SELECT * FROM payments 
    WHERE client_id = ? 
    AND payment_date >= ? AND payment_date <= ?
    ORDER BY payment_date DESC
", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

// Get category definitions
$categories = getInvoiceCategories();

// Build URL params for filters
$baseUrl = "view_client.php?id={$clientId}&tab=billing";
?>

<!-- FY Selector -->
<div class="flex flex-wrap items-center justify-between gap-4 mb-6">
    <div class="flex items-center gap-3">
        <label class="text-sm font-medium text-gray-600">Financial Year:</label>
        <select onchange="window.location.href='<?= $baseUrl ?>&billing_fy='+this.value" class="form-select text-sm py-1.5">
            <?php foreach ($clientFYs as $fy): ?>
            <option value="<?= $fy ?>" <?= $billingFY === $fy ? 'selected' : '' ?>><?= formatFY($fy) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="flex gap-2">
        <a href="invoices.php?client_id=<?= $clientId ?>&fy=<?= $billingFY ?>" class="btn btn-secondary text-sm">
            <i class="fas fa-external-link-alt mr-1"></i>All Invoices
        </a>
    </div>
</div>

<!-- Summary Stats -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
    <div class="bg-gradient-to-br from-indigo-50 to-white rounded-xl p-4 text-center border">
        <p class="text-xl font-bold text-indigo-600">₹<?= number_format($stats['total_amount']) ?></p>
        <p class="text-xs text-gray-500">Total Invoiced</p>
        <p class="text-xs text-gray-400"><?= $stats['total_count'] ?> invoices</p>
    </div>
    <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-4 text-center border">
        <p class="text-xl font-bold text-green-600">₹<?= number_format($stats['total_paid']) ?></p>
        <p class="text-xs text-gray-500">Received</p>
        <p class="text-xs text-gray-400"><?= $stats['paid_count'] ?> paid</p>
    </div>
    <div class="bg-gradient-to-br from-amber-50 to-white rounded-xl p-4 text-center border">
        <p class="text-xl font-bold text-amber-600">₹<?= number_format($stats['total_outstanding']) ?></p>
        <p class="text-xs text-gray-500">Outstanding</p>
        <p class="text-xs text-gray-400"><?= $stats['unpaid_count'] + $stats['overdue_count'] ?> pending</p>
    </div>
    <div class="rounded-xl p-4 text-center border <?= $stats['overdue_count'] > 0 ? 'bg-red-50 ring-2 ring-red-200' : 'bg-gray-50' ?>">
        <p class="text-xl font-bold <?= $stats['overdue_count'] > 0 ? 'text-red-600' : 'text-gray-400' ?>">₹<?= number_format($stats['overdue_amount']) ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
        <p class="text-xs text-gray-400"><?= $stats['overdue_count'] ?> overdue</p>
    </div>
</div>

<!-- Category Breakdown -->
<div class="mb-6">
    <h4 class="text-sm font-medium text-gray-600 mb-3"><i class="fas fa-tags mr-1"></i>Category Breakdown</h4>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-2">
        <?php foreach ($categories as $key => $cat): 
            $catStats = $stats['by_category'][$key] ?? ['count' => 0, 'total' => 0, 'outstanding' => 0];
            if ($catStats['count'] == 0 && $key === 'OTHER') continue;
            $colors = getCategoryColors($key);
            $isSelected = $billingCategory === $key;
        ?>
        <a href="<?= $baseUrl ?>&billing_fy=<?= $billingFY ?>&billing_cat=<?= $key ?>" 
           class="p-2 rounded-lg border text-center transition hover:shadow <?= $isSelected ? $colors['ring'] . ' ring-2' : 'border-gray-100' ?> <?= $colors['bg_light'] ?>">
            <div class="flex items-center justify-center gap-1 mb-1">
                <i class="fas <?= $cat['icon'] ?> text-xs <?= $colors['text'] ?>"></i>
                <span class="text-xs font-medium <?= $colors['text'] ?>"><?= $cat['short'] ?></span>
            </div>
            <p class="text-sm font-bold text-gray-800">₹<?= number_format($catStats['total']) ?></p>
            <p class="text-xs text-gray-500"><?= $catStats['count'] ?> inv</p>
        </a>
        <?php endforeach; ?>
        <?php if ($billingCategory): ?>
        <a href="<?= $baseUrl ?>&billing_fy=<?= $billingFY ?>" class="p-2 rounded-lg border border-gray-200 text-center flex items-center justify-center bg-white hover:bg-gray-50">
            <span class="text-xs text-gray-500"><i class="fas fa-times mr-1"></i>Clear Filter</span>
        </a>
        <?php endif; ?>
    </div>
</div>

<!-- Tabs for Invoices/Estimates/Payments -->
<div class="mb-4 border-b">
    <nav class="flex gap-4">
        <button onclick="showBillingSection('invoices')" id="btn-invoices" class="billing-tab-btn px-4 py-2 font-medium text-indigo-600 border-b-2 border-indigo-600">
            <i class="fas fa-file-invoice mr-1"></i>Invoices <span class="ml-1 px-2 py-0.5 bg-indigo-100 rounded-full text-xs"><?= count($invoices) ?></span>
        </button>
        <button onclick="showBillingSection('estimates')" id="btn-estimates" class="billing-tab-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700">
            <i class="fas fa-file-alt mr-1"></i>Estimates <span class="ml-1 px-2 py-0.5 bg-gray-100 rounded-full text-xs"><?= count($estimates) ?></span>
        </button>
        <button onclick="showBillingSection('payments')" id="btn-payments" class="billing-tab-btn px-4 py-2 font-medium text-gray-500 hover:text-gray-700">
            <i class="fas fa-money-check-alt mr-1"></i>Payments <span class="ml-1 px-2 py-0.5 bg-gray-100 rounded-full text-xs"><?= count($payments) ?></span>
        </button>
    </nav>
</div>

<!-- INVOICES SECTION -->
<div id="section-invoices" class="billing-section">
    <?php if (empty($invoices)): ?>
    <div class="text-center py-8 text-gray-500">
        <i class="fas fa-file-invoice text-4xl text-gray-300 mb-3"></i>
        <p>No invoices found for <?= formatFY($billingFY) ?></p>
    </div>
    <?php else: ?>
    
    <!-- Overdue -->
    <?php if (!empty($groupedInvoices['overdue'])): ?>
    <div class="mb-4">
        <div class="flex items-center justify-between bg-red-50 rounded-t-lg px-4 py-2 border border-red-200">
            <span class="font-medium text-red-700">
                <i class="fas fa-exclamation-triangle mr-1"></i>Overdue (<?= count($groupedInvoices['overdue']) ?>)
            </span>
            <span class="text-red-600 font-bold">₹<?= number_format(array_sum(array_column($groupedInvoices['overdue'], 'balance_due'))) ?></span>
        </div>
        <div class="border border-t-0 border-red-200 rounded-b-lg overflow-hidden">
            <table class="w-full text-sm">
                <tbody class="divide-y divide-red-100">
                    <?php foreach ($groupedInvoices['overdue'] as $inv): 
                        $cat = $categories[$inv['category']] ?? $categories['OTHER'];
                        $catColors = getCategoryColors($inv['category']);
                    ?>
                    <tr class="hover:bg-red-50/50">
                        <td class="px-4 py-2">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="font-medium text-gray-800 hover:text-indigo-600">
                                <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                            </a>
                            <?php else: ?>
                            <span class="font-medium text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?></span>
                            <?php endif; ?>
                            <span class="ml-2 px-1.5 py-0.5 text-xs rounded <?= $catColors['bg'] ?> <?= $catColors['text'] ?>"><?= $cat['short'] ?></span>
                        </td>
                        <td class="px-4 py-2 text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?></td>
                        <td class="px-4 py-2 text-red-600 font-medium">
                            Due: <?= date('d M Y', strtotime($inv['due_date'])) ?>
                            <span class="text-xs">(<?= $inv['days_overdue'] ?>d)</span>
                        </td>
                        <td class="px-4 py-2 text-right font-bold text-red-600">₹<?= number_format($inv['balance_due'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download" class="ml-2 text-green-600 hover:text-green-800"><i class="fas fa-download"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Unpaid -->
    <?php if (!empty($groupedInvoices['unpaid'])): ?>
    <div class="mb-4">
        <div class="flex items-center justify-between bg-amber-50 rounded-t-lg px-4 py-2 border border-amber-200">
            <span class="font-medium text-amber-700">
                <i class="fas fa-clock mr-1"></i>Unpaid (<?= count($groupedInvoices['unpaid']) ?>)
            </span>
            <span class="text-amber-600 font-bold">₹<?= number_format(array_sum(array_column($groupedInvoices['unpaid'], 'balance_due'))) ?></span>
        </div>
        <div class="border border-t-0 border-amber-200 rounded-b-lg overflow-hidden">
            <table class="w-full text-sm">
                <tbody class="divide-y divide-amber-100">
                    <?php foreach ($groupedInvoices['unpaid'] as $inv): 
                        $cat = $categories[$inv['category']] ?? $categories['OTHER'];
                        $catColors = getCategoryColors($inv['category']);
                    ?>
                    <tr class="hover:bg-amber-50/50">
                        <td class="px-4 py-2">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="font-medium text-gray-800 hover:text-indigo-600">
                                <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                            </a>
                            <?php else: ?>
                            <span class="font-medium text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?></span>
                            <?php endif; ?>
                            <span class="ml-2 px-1.5 py-0.5 text-xs rounded <?= $catColors['bg'] ?> <?= $catColors['text'] ?>"><?= $cat['short'] ?></span>
                        </td>
                        <td class="px-4 py-2 text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?></td>
                        <td class="px-4 py-2 text-gray-500">
                            Due: <?= $inv['due_date'] ? date('d M Y', strtotime($inv['due_date'])) : '-' ?>
                        </td>
                        <td class="px-4 py-2 text-right font-bold text-amber-600">₹<?= number_format($inv['balance_due'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download" class="ml-2 text-green-600 hover:text-green-800"><i class="fas fa-download"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Paid -->
    <?php if (!empty($groupedInvoices['paid'])): ?>
    <div class="mb-4">
        <div class="flex items-center justify-between bg-green-50 rounded-t-lg px-4 py-2 border border-green-200">
            <span class="font-medium text-green-700">
                <i class="fas fa-check-circle mr-1"></i>Paid (<?= count($groupedInvoices['paid']) ?>)
            </span>
            <span class="text-green-600 font-bold">₹<?= number_format(array_sum(array_column($groupedInvoices['paid'], 'total'))) ?></span>
        </div>
        <div class="border border-t-0 border-green-200 rounded-b-lg overflow-hidden">
            <table class="w-full text-sm">
                <tbody class="divide-y divide-green-100">
                    <?php foreach ($groupedInvoices['paid'] as $inv): 
                        $cat = $categories[$inv['category']] ?? $categories['OTHER'];
                        $catColors = getCategoryColors($inv['category']);
                    ?>
                    <tr class="hover:bg-green-50/50">
                        <td class="px-4 py-2">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="font-medium text-gray-800 hover:text-indigo-600">
                                <?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?>
                            </a>
                            <?php else: ?>
                            <span class="font-medium text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?: 'INV-'.$inv['id']) ?></span>
                            <?php endif; ?>
                            <span class="ml-2 px-1.5 py-0.5 text-xs rounded <?= $catColors['bg'] ?> <?= $catColors['text'] ?>"><?= $cat['short'] ?></span>
                        </td>
                        <td class="px-4 py-2 text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?></td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-700"><i class="fas fa-check mr-1"></i>Paid</span>
                        </td>
                        <td class="px-4 py-2 text-right font-medium text-green-600">₹<?= number_format($inv['total'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <?php if ($inv['zoho_invoice_id']): ?>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=view" target="_blank" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a>
                            <a href="zoho_pdf.php?type=invoice&id=<?= $inv['id'] ?>&action=download" class="ml-2 text-green-600 hover:text-green-800"><i class="fas fa-download"></i></a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    
    <?php endif; ?>
</div>

<!-- ESTIMATES SECTION -->
<div id="section-estimates" class="billing-section hidden">
    <?php if (empty($estimates)): ?>
    <div class="text-center py-8 text-gray-500">
        <i class="fas fa-file-alt text-4xl text-gray-300 mb-3"></i>
        <p>No estimates found for <?= formatFY($billingFY) ?></p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Estimate #</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Date</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Status</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-gray-500">Amount</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500">PDF</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($estimates as $est): 
                    $statusColors = ['draft' => 'gray', 'sent' => 'blue', 'accepted' => 'green', 'declined' => 'red', 'expired' => 'amber'];
                    $color = $statusColors[$est['status'] ?? 'sent'] ?? 'gray';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($est['zoho_estimate_number'] ?: 'EST-'.$est['id']) ?></td>
                    <td class="px-4 py-3 text-gray-600"><?= isset($est['estimate_date']) ? date('d M Y', strtotime($est['estimate_date'])) : '-' ?></td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-<?= $color ?>-100 text-<?= $color ?>-700">
                            <?= ucfirst($est['status'] ?? 'Sent') ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right font-medium">₹<?= number_format($est['total'] ?? 0, 2) ?></td>
                    <td class="px-4 py-3 text-center">
                        <?php if (!empty($est['zoho_estimate_id'])): ?>
                        <a href="zoho_pdf.php?type=estimate&id=<?= $est['id'] ?>&action=view" target="_blank" class="text-indigo-600"><i class="fas fa-eye"></i></a>
                        <a href="zoho_pdf.php?type=estimate&id=<?= $est['id'] ?>&action=download" class="ml-2 text-green-600"><i class="fas fa-download"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<!-- PAYMENTS SECTION -->
<div id="section-payments" class="billing-section hidden">
    <?php if (empty($payments)): ?>
    <div class="text-center py-8 text-gray-500">
        <i class="fas fa-money-check-alt text-4xl text-gray-300 mb-3"></i>
        <p>No payments found for <?= formatFY($billingFY) ?></p>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Payment #</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Date</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Mode</th>
                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500">Reference</th>
                    <th class="px-4 py-3 text-right text-xs font-semibold text-gray-500">Amount</th>
                    <th class="px-4 py-3 text-center text-xs font-semibold text-gray-500">Receipt</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($payments as $pmt): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= htmlspecialchars($pmt['zoho_payment_number'] ?? 'PMT-'.$pmt['id']) ?></td>
                    <td class="px-4 py-3 text-gray-600"><?= isset($pmt['payment_date']) ? date('d M Y', strtotime($pmt['payment_date'])) : '-' ?></td>
                    <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars(ucfirst($pmt['payment_mode'] ?? '-')) ?></td>
                    <td class="px-4 py-3 text-gray-500 font-mono text-xs"><?= htmlspecialchars($pmt['reference_number'] ?? '-') ?></td>
                    <td class="px-4 py-3 text-right font-medium text-green-600">₹<?= number_format($pmt['amount'] ?? 0, 2) ?></td>
                    <td class="px-4 py-3 text-center">
                        <?php if (!empty($pmt['zoho_payment_id'])): ?>
                        <a href="zoho_pdf.php?type=payment&id=<?= $pmt['id'] ?>&action=view" target="_blank" class="text-indigo-600"><i class="fas fa-eye"></i></a>
                        <a href="zoho_pdf.php?type=payment&id=<?= $pmt['id'] ?>&action=download" class="ml-2 text-green-600"><i class="fas fa-download"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<script>
function showBillingSection(section) {
    document.querySelectorAll('.billing-section').forEach(s => s.classList.add('hidden'));
    document.querySelectorAll('.billing-tab-btn').forEach(b => {
        b.classList.remove('text-indigo-600', 'border-b-2', 'border-indigo-600');
        b.classList.add('text-gray-500');
    });
    
    document.getElementById('section-' + section)?.classList.remove('hidden');
    const btn = document.getElementById('btn-' + section);
    if (btn) {
        btn.classList.add('text-indigo-600', 'border-b-2', 'border-indigo-600');
        btn.classList.remove('text-gray-500');
    }
}
</script>
