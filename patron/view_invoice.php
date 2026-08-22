<?php
/**
 * PATRON - Invoice View Page
 * Clean invoice view with print/PDF download capability
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$invoiceId = (int)($_GET['id'] ?? 0);

if (!$invoiceId) {
    setFlash('error', 'Invoice not found.');
    header('Location: billing.php');
    exit;
}

// Get invoice details
$invoice = dbFetchOne("
    SELECT i.*, 
           c.name as client_name, c.email as client_email, c.mobile as client_mobile,
           c.gstin as client_gstin, c.pan as client_pan,
           c.registered_address as client_address
    FROM invoices i
    LEFT JOIN clients c ON i.client_id = c.id
    WHERE i.id = ?
", [$invoiceId]);

if (!$invoice) {
    setFlash('error', 'Invoice not found.');
    header('Location: billing.php');
    exit;
}

// Access control for non-admins
$currentUser = getCurrentUser();
$userId = $currentUser['id'];
$isAdmin = isAdmin();

if (!$isAdmin) {
    // Check if user has access to this client
    $hasAccess = dbFetchOne("
        SELECT 1 FROM service_requests 
        WHERE client_id = ? AND (assigned_to = ? OR reviewer_id = ?) AND deleted_at IS NULL
        LIMIT 1
    ", [$invoice['client_id'], $userId, $userId]);
    
    if (!$hasAccess) {
        setFlash('error', 'Access denied.');
        header('Location: billing.php');
        exit;
    }
}

// Get invoice line items
$lineItems = dbFetchAll("
    SELECT * FROM invoice_items 
    WHERE invoice_id = ? 
    ORDER BY id
", [$invoiceId]) ?: [];

// If no line items in our DB, try to show basic info
if (empty($lineItems) && $invoice['total'] > 0) {
    // Create a placeholder item
    $lineItems = [[
        'description' => $invoice['zoho_item_name'] ?? 'Professional Services',
        'quantity' => 1,
        'rate' => $invoice['sub_total'] ?? $invoice['total'],
        'amount' => $invoice['sub_total'] ?? $invoice['total']
    ]];
}

// Get company settings
$companyName = 'PATRON';
$companyAddress = '';
$companyPhone = '';
$companyEmail = '';
$companyGstin = '';
$companyPan = '';
$companyLogo = '';
try {
    $settings = dbFetchAll("SELECT setting_key, setting_value FROM settings WHERE setting_key IN ('company_name', 'company_address', 'company_phone', 'company_email', 'company_gstin', 'company_pan', 'company_logo')");
    foreach ($settings as $s) {
        if ($s['setting_key'] === 'company_name') $companyName = $s['setting_value'];
        if ($s['setting_key'] === 'company_address') $companyAddress = $s['setting_value'];
        if ($s['setting_key'] === 'company_phone') $companyPhone = $s['setting_value'];
        if ($s['setting_key'] === 'company_email') $companyEmail = $s['setting_value'];
        if ($s['setting_key'] === 'company_gstin') $companyGstin = $s['setting_value'];
        if ($s['setting_key'] === 'company_pan') $companyPan = $s['setting_value'];
        if ($s['setting_key'] === 'company_logo') $companyLogo = $s['setting_value'];
    }
} catch (Exception $e) {}

// Calculate totals
$subTotal = $invoice['sub_total'] ?? $invoice['total'];
$taxAmount = $invoice['tax_total'] ?? 0;
$total = $invoice['total'] ?? 0;
$balanceDue = $invoice['balance_due'] ?? 0;
$paymentMade = $invoice['payment_made'] ?? 0;

$isPaid = ($invoice['status'] ?? '') === 'paid' || $balanceDue == 0;
$isOverdue = !$isPaid && ($invoice['due_date'] ?? '') < date('Y-m-d');

$pageTitle = 'Invoice ' . ($invoice['zoho_invoice_number'] ?? 'INV-' . $invoiceId);

// Check if print mode
$printMode = isset($_GET['print']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - <?= htmlspecialchars($companyName) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f3f4f6; color: #1f2937; line-height: 1.5; }
        
        .no-print { }
        .print-only { display: none; }
        
        @media print {
            body { background: white; }
            .no-print { display: none !important; }
            .print-only { display: block; }
            .invoice-container { box-shadow: none; margin: 0; max-width: 100%; }
            @page { margin: 15mm; size: A4; }
        }
        
        .top-bar {
            background: white;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .top-bar a { color: #3b82f6; text-decoration: none; font-size: 14px; }
        .top-bar a:hover { text-decoration: underline; }
        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }
        .btn-primary { background: #3b82f6; color: white; }
        .btn-primary:hover { background: #2563eb; }
        .btn-secondary { background: #f3f4f6; color: #374151; }
        .btn-secondary:hover { background: #e5e7eb; }
        .btn-success { background: #10b981; color: white; }
        .btn-success:hover { background: #059669; }
        
        .invoice-container {
            max-width: 800px;
            margin: 24px auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .invoice-header {
            padding: 32px;
            border-bottom: 2px solid #e5e7eb;
        }
        
        .invoice-header-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }
        
        .company-info h1 { font-size: 24px; font-weight: 700; color: #1f2937; margin-bottom: 8px; }
        .company-info p { font-size: 13px; color: #6b7280; }
        
        .invoice-title {
            text-align: right;
        }
        .invoice-title h2 { font-size: 32px; font-weight: 700; color: #3b82f6; margin-bottom: 8px; }
        .invoice-number { font-size: 16px; font-weight: 600; color: #374151; }
        
        .status-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-top: 8px;
        }
        .status-paid { background: #d1fae5; color: #065f46; }
        .status-unpaid { background: #fef3c7; color: #92400e; }
        .status-overdue { background: #fee2e2; color: #991b1b; }
        
        .invoice-parties {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }
        
        .party-box h3 { font-size: 11px; text-transform: uppercase; color: #9ca3af; margin-bottom: 8px; letter-spacing: 0.5px; }
        .party-box .name { font-size: 16px; font-weight: 600; color: #1f2937; margin-bottom: 4px; }
        .party-box p { font-size: 13px; color: #6b7280; margin-bottom: 2px; }
        
        .invoice-meta {
            padding: 20px 32px;
            background: #f9fafb;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
        
        .meta-item label { display: block; font-size: 11px; text-transform: uppercase; color: #9ca3af; margin-bottom: 4px; }
        .meta-item span { font-size: 14px; font-weight: 600; color: #374151; }
        
        .invoice-items {
            padding: 0 32px;
        }
        
        .items-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .items-table thead { background: #f9fafb; }
        .items-table th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            color: #6b7280;
            border-bottom: 2px solid #e5e7eb;
        }
        .items-table th:last-child,
        .items-table td:last-child { text-align: right; }
        
        .items-table td {
            padding: 16px;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
        }
        
        .item-desc { font-weight: 500; color: #1f2937; }
        .item-detail { font-size: 12px; color: #9ca3af; margin-top: 4px; }
        
        .invoice-totals {
            padding: 24px 32px;
            display: flex;
            justify-content: flex-end;
        }
        
        .totals-box {
            width: 300px;
        }
        
        .totals-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-size: 14px;
        }
        .totals-row.total {
            border-top: 2px solid #e5e7eb;
            margin-top: 8px;
            padding-top: 16px;
            font-size: 18px;
            font-weight: 700;
        }
        .totals-row.total .amount { color: #3b82f6; }
        
        .totals-row.balance {
            background: #fef3c7;
            margin: 8px -12px 0;
            padding: 12px;
            border-radius: 8px;
        }
        .totals-row.balance.paid {
            background: #d1fae5;
        }
        .totals-row.balance .label { font-weight: 600; }
        .totals-row.balance .amount { font-weight: 700; color: #92400e; }
        .totals-row.balance.paid .amount { color: #065f46; }
        
        .invoice-footer {
            padding: 24px 32px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }
        
        .payment-info h4 { font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .payment-info p { font-size: 12px; color: #6b7280; }
        
        .invoice-notes {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px dashed #e5e7eb;
        }
        .invoice-notes h4 { font-size: 12px; font-weight: 600; color: #6b7280; margin-bottom: 8px; }
        .invoice-notes p { font-size: 12px; color: #9ca3af; }
        
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            font-size: 80px;
            font-weight: 700;
            color: rgba(34, 197, 94, 0.1);
            pointer-events: none;
            z-index: 1;
        }
        
        .invoice-body { position: relative; }
    </style>
</head>
<body>

<!-- Top Action Bar -->
<div class="top-bar no-print">
    <a href="billing.php"><i class="fas fa-arrow-left"></i> Back to Billing</a>
    <div style="display: flex; gap: 8px;">
        <button onclick="window.print()" class="btn btn-primary">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/></svg>
            Print / Save PDF
        </button>
        <a href="view_client.php?id=<?= $invoice['client_id'] ?>&tab=billing" class="btn btn-secondary">
            View Client
        </a>
    </div>
</div>

<!-- Invoice Document -->
<div class="invoice-container">
    <div class="invoice-header">
        <div class="invoice-header-top">
            <div class="company-info">
                <?php if ($companyLogo): ?>
                <img src="<?= htmlspecialchars($companyLogo) ?>" alt="Logo" style="height: 50px; margin-bottom: 12px;">
                <?php endif; ?>
                <h1><?= htmlspecialchars($companyName) ?></h1>
                <?php if ($companyAddress): ?><p><?= nl2br(htmlspecialchars($companyAddress)) ?></p><?php endif; ?>
                <?php if ($companyPhone): ?><p>Phone: <?= htmlspecialchars($companyPhone) ?></p><?php endif; ?>
                <?php if ($companyEmail): ?><p>Email: <?= htmlspecialchars($companyEmail) ?></p><?php endif; ?>
                <?php if ($companyGstin): ?><p>GSTIN: <?= htmlspecialchars($companyGstin) ?></p><?php endif; ?>
            </div>
            <div class="invoice-title">
                <h2>INVOICE</h2>
                <p class="invoice-number"><?= htmlspecialchars($invoice['zoho_invoice_number'] ?? 'INV-' . $invoiceId) ?></p>
                <?php if ($isPaid): ?>
                <span class="status-badge status-paid">✓ PAID</span>
                <?php elseif ($isOverdue): ?>
                <span class="status-badge status-overdue">OVERDUE</span>
                <?php else: ?>
                <span class="status-badge status-unpaid">UNPAID</span>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="invoice-parties">
            <div class="party-box">
                <h3>Bill To</h3>
                <p class="name"><?= htmlspecialchars($invoice['client_name'] ?? $invoice['zoho_customer_name'] ?? 'Client') ?></p>
                <?php if ($invoice['client_address']): ?>
                <p><?= nl2br(htmlspecialchars($invoice['client_address'])) ?></p>
                <?php endif; ?>
                <?php if ($invoice['client_email']): ?>
                <p><?= htmlspecialchars($invoice['client_email']) ?></p>
                <?php endif; ?>
                <?php if ($invoice['client_gstin']): ?>
                <p>GSTIN: <?= htmlspecialchars($invoice['client_gstin']) ?></p>
                <?php endif; ?>
            </div>
            <div class="party-box" style="text-align: right;">
                <h3>Invoice Details</h3>
                <?php if ($invoice['reference_number']): ?>
                <p>Reference: <?= htmlspecialchars($invoice['reference_number']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="invoice-meta">
        <div class="meta-item">
            <label>Invoice Date</label>
            <span><?= $invoice['invoice_date'] ? date('d M Y', strtotime($invoice['invoice_date'])) : '-' ?></span>
        </div>
        <div class="meta-item">
            <label>Due Date</label>
            <span style="<?= $isOverdue ? 'color: #dc2626;' : '' ?>"><?= $invoice['due_date'] ? date('d M Y', strtotime($invoice['due_date'])) : '-' ?></span>
        </div>
        <div class="meta-item">
            <label>Payment Terms</label>
            <span><?= htmlspecialchars($invoice['payment_terms'] ?? 'Due on Receipt') ?></span>
        </div>
        <div class="meta-item">
            <label>Currency</label>
            <span><?= htmlspecialchars($invoice['currency_code'] ?? 'INR') ?></span>
        </div>
    </div>
    
    <div class="invoice-body">
        <?php if ($isPaid): ?>
        <div class="watermark print-only">PAID</div>
        <?php endif; ?>
        
        <div class="invoice-items">
            <table class="items-table">
                <thead>
                    <tr>
                        <th style="width: 50%;">Description</th>
                        <th>Qty</th>
                        <th>Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($lineItems)): ?>
                        <?php foreach ($lineItems as $item): ?>
                        <tr>
                            <td>
                                <div class="item-desc"><?= htmlspecialchars($item['description'] ?? $item['name'] ?? 'Service') ?></div>
                                <?php if (!empty($item['item_description'])): ?>
                                <div class="item-detail"><?= htmlspecialchars($item['item_description']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td><?= number_format($item['quantity'] ?? 1, 2) ?></td>
                            <td>₹<?= number_format($item['rate'] ?? 0, 2) ?></td>
                            <td>₹<?= number_format($item['amount'] ?? $item['rate'] ?? 0, 2) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #9ca3af; padding: 32px;">
                                No line items available
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="invoice-totals">
            <div class="totals-box">
                <div class="totals-row">
                    <span class="label">Subtotal</span>
                    <span class="amount">₹<?= number_format($subTotal, 2) ?></span>
                </div>
                <?php if ($taxAmount > 0): ?>
                <div class="totals-row">
                    <span class="label">Tax</span>
                    <span class="amount">₹<?= number_format($taxAmount, 2) ?></span>
                </div>
                <?php endif; ?>
                <?php if (($invoice['discount'] ?? 0) > 0): ?>
                <div class="totals-row">
                    <span class="label">Discount</span>
                    <span class="amount">-₹<?= number_format($invoice['discount'], 2) ?></span>
                </div>
                <?php endif; ?>
                <div class="totals-row total">
                    <span class="label">Total</span>
                    <span class="amount">₹<?= number_format($total, 2) ?></span>
                </div>
                <?php if ($paymentMade > 0): ?>
                <div class="totals-row">
                    <span class="label">Payment Received</span>
                    <span class="amount" style="color: #059669;">-₹<?= number_format($paymentMade, 2) ?></span>
                </div>
                <?php endif; ?>
                <div class="totals-row balance <?= $isPaid ? 'paid' : '' ?>">
                    <span class="label"><?= $isPaid ? 'Balance Due' : 'Balance Due' ?></span>
                    <span class="amount">₹<?= number_format($balanceDue, 2) ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="invoice-footer">
        <?php if (!empty($invoice['notes'])): ?>
        <div class="invoice-notes">
            <h4>Notes</h4>
            <p><?= nl2br(htmlspecialchars($invoice['notes'])) ?></p>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($invoice['terms'])): ?>
        <div class="invoice-notes">
            <h4>Terms & Conditions</h4>
            <p><?= nl2br(htmlspecialchars($invoice['terms'])) ?></p>
        </div>
        <?php endif; ?>
        
        <div class="payment-info" style="margin-top: 16px;">
            <p style="font-size: 11px; color: #9ca3af;">
                This is a computer-generated invoice synced from Zoho Books.
                <?php if ($invoice['zoho_invoice_id']): ?>
                Zoho ID: <?= htmlspecialchars($invoice['zoho_invoice_id']) ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>
