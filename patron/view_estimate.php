<?php
/**
 * PATRON - Estimate/Quotation View Page
 * Clean estimate view with print/PDF download capability
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$estimateId = (int)($_GET['id'] ?? 0);

if (!$estimateId) {
    setFlash('error', 'Estimate not found.');
    header('Location: estimates.php');
    exit;
}

// Get estimate details (from quotations table)
$estimate = dbFetchOne("
    SELECT e.*, 
           c.name as client_name, c.email as client_email, c.mobile as client_mobile,
           c.gstin as client_gstin, c.pan as client_pan,
           c.registered_address as client_address
    FROM quotations e
    LEFT JOIN clients c ON e.client_id = c.id
    WHERE e.id = ?
", [$estimateId]);

if (!$estimate) {
    setFlash('error', 'Estimate not found.');
    header('Location: estimates.php');
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
    ", [$estimate['client_id'], $userId, $userId]);
    
    if (!$hasAccess) {
        setFlash('error', 'Access denied.');
        header('Location: estimates.php');
        exit;
    }
}

// Get estimate line items (from quotation_items table)
$lineItems = dbFetchAll("
    SELECT * FROM quotation_items 
    WHERE quotation_id = ? 
    ORDER BY id
", [$estimateId]) ?: [];

// If no line items in our DB, try to show basic info
if (empty($lineItems) && $estimate['total'] > 0) {
    $lineItems = [[
        'description' => $estimate['zoho_item_name'] ?? 'Professional Services',
        'quantity' => 1,
        'rate' => $estimate['sub_total'] ?? $estimate['total'],
        'amount' => $estimate['sub_total'] ?? $estimate['total']
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
$subTotal = $estimate['sub_total'] ?? $estimate['total'];
$taxAmount = $estimate['tax_total'] ?? 0;
$total = $estimate['total'] ?? 0;

// Status mapping
$statusLabels = [
    'draft' => ['label' => 'Draft', 'color' => 'gray', 'bg' => '#f3f4f6', 'text' => '#4b5563'],
    'sent' => ['label' => 'Sent', 'color' => 'blue', 'bg' => '#dbeafe', 'text' => '#1e40af'],
    'accepted' => ['label' => 'Accepted', 'color' => 'green', 'bg' => '#d1fae5', 'text' => '#065f46'],
    'declined' => ['label' => 'Declined', 'color' => 'red', 'bg' => '#fee2e2', 'text' => '#991b1b'],
    'expired' => ['label' => 'Expired', 'color' => 'amber', 'bg' => '#fef3c7', 'text' => '#92400e'],
    'invoiced' => ['label' => 'Invoiced', 'color' => 'green', 'bg' => '#d1fae5', 'text' => '#065f46'],
];
$status = strtolower($estimate['status'] ?? 'draft');
$statusInfo = $statusLabels[$status] ?? $statusLabels['draft'];

$isExpired = !in_array($status, ['accepted', 'invoiced']) && 
             !empty($estimate['expiry_date']) && 
             $estimate['expiry_date'] < date('Y-m-d');

if ($isExpired && $status !== 'expired') {
    $statusInfo = $statusLabels['expired'];
}

$pageTitle = 'Estimate ' . ($estimate['zoho_estimate_number'] ?? 'EST-' . $estimateId);
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
            .estimate-container { box-shadow: none; margin: 0; max-width: 100%; }
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
            text-decoration: none;
        }
        .btn-primary { background: #3b82f6; color: white; }
        .btn-primary:hover { background: #2563eb; }
        .btn-secondary { background: #f3f4f6; color: #374151; }
        .btn-secondary:hover { background: #e5e7eb; }
        
        .estimate-container {
            max-width: 800px;
            margin: 24px auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .estimate-header {
            padding: 32px;
            border-bottom: 2px solid #e5e7eb;
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
        }
        
        .estimate-header-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }
        
        .company-info h1 { font-size: 24px; font-weight: 700; color: #1f2937; margin-bottom: 8px; }
        .company-info p { font-size: 13px; color: #6b7280; }
        
        .estimate-title {
            text-align: right;
        }
        .estimate-title h2 { font-size: 32px; font-weight: 700; color: #8b5cf6; margin-bottom: 8px; }
        .estimate-number { font-size: 16px; font-weight: 600; color: #374151; }
        
        .status-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-top: 8px;
        }
        
        .estimate-parties {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }
        
        .party-box h3 { font-size: 11px; text-transform: uppercase; color: #9ca3af; margin-bottom: 8px; letter-spacing: 0.5px; }
        .party-box .name { font-size: 16px; font-weight: 600; color: #1f2937; margin-bottom: 4px; }
        .party-box p { font-size: 13px; color: #6b7280; margin-bottom: 2px; }
        
        .estimate-meta {
            padding: 20px 32px;
            background: #f9fafb;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
        
        .meta-item label { display: block; font-size: 11px; text-transform: uppercase; color: #9ca3af; margin-bottom: 4px; }
        .meta-item span { font-size: 14px; font-weight: 600; color: #374151; }
        
        .estimate-items {
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
        
        .estimate-totals {
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
        .totals-row.total .amount { color: #8b5cf6; }
        
        .estimate-footer {
            padding: 24px 32px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
        }
        
        .validity-notice {
            background: #fef3c7;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13px;
            color: #92400e;
            margin-bottom: 16px;
        }
        .validity-notice.expired {
            background: #fee2e2;
            color: #991b1b;
        }
        .validity-notice.accepted {
            background: #d1fae5;
            color: #065f46;
        }
        
        .estimate-notes {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px dashed #e5e7eb;
        }
        .estimate-notes h4 { font-size: 12px; font-weight: 600; color: #6b7280; margin-bottom: 8px; }
        .estimate-notes p { font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>

<!-- Top Action Bar -->
<div class="top-bar no-print">
    <a href="estimates.php"><i class="fas fa-arrow-left"></i> Back to Estimates</a>
    <div style="display: flex; gap: 8px;">
        <button onclick="window.print()" class="btn btn-primary">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/></svg>
            Print / Save PDF
        </button>
        <a href="view_client.php?id=<?= $estimate['client_id'] ?>" class="btn btn-secondary">
            View Client
        </a>
    </div>
</div>

<!-- Estimate Document -->
<div class="estimate-container">
    <div class="estimate-header">
        <div class="estimate-header-top">
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
            <div class="estimate-title">
                <h2>ESTIMATE</h2>
                <p class="estimate-number"><?= htmlspecialchars($estimate['zoho_estimate_number'] ?? 'EST-' . $estimateId) ?></p>
                <span class="status-badge" style="background: <?= $statusInfo['bg'] ?>; color: <?= $statusInfo['text'] ?>;">
                    <?= strtoupper($statusInfo['label']) ?>
                </span>
            </div>
        </div>
        
        <div class="estimate-parties">
            <div class="party-box">
                <h3>Prepared For</h3>
                <p class="name"><?= htmlspecialchars($estimate['client_name'] ?? $estimate['zoho_customer_name'] ?? 'Client') ?></p>
                <?php if ($estimate['client_address']): ?>
                <p><?= nl2br(htmlspecialchars($estimate['client_address'])) ?></p>
                <?php endif; ?>
                <?php if ($estimate['client_email']): ?>
                <p><?= htmlspecialchars($estimate['client_email']) ?></p>
                <?php endif; ?>
                <?php if ($estimate['client_gstin']): ?>
                <p>GSTIN: <?= htmlspecialchars($estimate['client_gstin']) ?></p>
                <?php endif; ?>
            </div>
            <div class="party-box" style="text-align: right;">
                <h3>Estimate Details</h3>
                <?php if ($estimate['reference_number']): ?>
                <p>Reference: <?= htmlspecialchars($estimate['reference_number']) ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="estimate-meta">
        <div class="meta-item">
            <label>Estimate Date</label>
            <span><?= $estimate['estimate_date'] ? date('d M Y', strtotime($estimate['estimate_date'])) : '-' ?></span>
        </div>
        <div class="meta-item">
            <label>Expiry Date</label>
            <span style="<?= $isExpired ? 'color: #dc2626;' : '' ?>"><?= $estimate['expiry_date'] ? date('d M Y', strtotime($estimate['expiry_date'])) : '-' ?></span>
        </div>
        <div class="meta-item">
            <label>Currency</label>
            <span><?= htmlspecialchars($estimate['currency_code'] ?? 'INR') ?></span>
        </div>
        <div class="meta-item">
            <label>Status</label>
            <span style="color: <?= $statusInfo['text'] ?>;"><?= $statusInfo['label'] ?></span>
        </div>
    </div>
    
    <div class="estimate-items">
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
    
    <div class="estimate-totals">
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
            <?php if (($estimate['discount'] ?? 0) > 0): ?>
            <div class="totals-row">
                <span class="label">Discount</span>
                <span class="amount">-₹<?= number_format($estimate['discount'], 2) ?></span>
            </div>
            <?php endif; ?>
            <div class="totals-row total">
                <span class="label">Total</span>
                <span class="amount">₹<?= number_format($total, 2) ?></span>
            </div>
        </div>
    </div>
    
    <div class="estimate-footer">
        <?php if ($status === 'accepted'): ?>
        <div class="validity-notice accepted">
            <strong>✓ Accepted</strong> - This estimate has been accepted by the client.
        </div>
        <?php elseif ($isExpired): ?>
        <div class="validity-notice expired">
            <strong>Expired</strong> - This estimate has expired. Please contact us for an updated quote.
        </div>
        <?php elseif (!empty($estimate['expiry_date'])): ?>
        <div class="validity-notice">
            <strong>Valid Until:</strong> <?= date('d M Y', strtotime($estimate['expiry_date'])) ?>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($estimate['notes'])): ?>
        <div class="estimate-notes">
            <h4>Notes</h4>
            <p><?= nl2br(htmlspecialchars($estimate['notes'])) ?></p>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($estimate['terms'])): ?>
        <div class="estimate-notes">
            <h4>Terms & Conditions</h4>
            <p><?= nl2br(htmlspecialchars($estimate['terms'])) ?></p>
        </div>
        <?php endif; ?>
        
        <div style="margin-top: 16px;">
            <p style="font-size: 11px; color: #9ca3af;">
                This is a computer-generated estimate synced from Zoho Books.
                <?php if ($estimate['zoho_estimate_id']): ?>
                Zoho ID: <?= htmlspecialchars($estimate['zoho_estimate_id']) ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>
</html>
