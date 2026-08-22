<?php
/**
 * PATRON - Compliance Summary PDF Generator
 * Generates a downloadable PDF of all applicable compliances for a client
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$clientId = (int)($_GET['client_id'] ?? 0);
if (!$clientId) {
    die('Client ID required');
}

$client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
if (!$client) {
    die('Client not found');
}

// Get enabled compliances grouped by category
$clientCompliances = dbFetchAll("
    SELECT ct.name, ct.code, ct.category, ct.frequency, ct.description, ct.due_day, ct.due_month_offset
    FROM client_compliances cc
    JOIN compliance_types ct ON cc.compliance_type_id = ct.id
    WHERE cc.client_id = ? AND cc.is_active = 1 AND ct.deleted_at IS NULL
    ORDER BY ct.category, ct.frequency, ct.sort_order
", [$clientId]) ?: [];

if (empty($clientCompliances)) {
    die('No compliances configured for this client');
}

// Group by category
$byCategory = [];
$byFrequency = ['MONTHLY' => [], 'QUARTERLY' => [], 'HALF_YEARLY' => [], 'YEARLY' => [], 'EVENT_BASED' => []];

foreach ($clientCompliances as $cc) {
    $cat = $cc['category'] ?? 'OTHER';
    if (!isset($byCategory[$cat])) {
        $byCategory[$cat] = [];
    }
    $byCategory[$cat][] = $cc;
    
    $freq = $cc['frequency'] ?? 'YEARLY';
    if (isset($byFrequency[$freq])) {
        $byFrequency[$freq][] = $cc;
    }
}

// Category metadata
$categoryMeta = [
    'GST' => ['label' => 'GST Compliances', 'identifier' => 'GSTIN: ' . ($client['gstin'] ?? 'N/A')],
    'TDS' => ['label' => 'TDS Compliances', 'identifier' => 'TAN: ' . ($client['tan'] ?? 'N/A')],
    'INCOME_TAX' => ['label' => 'Income Tax', 'identifier' => 'PAN: ' . ($client['pan'] ?? 'N/A')],
    'ROC' => ['label' => 'ROC/MCA Filings', 'identifier' => 'CIN: ' . ($client['cin'] ?? 'N/A')],
    'PF_ESI' => ['label' => 'PF & ESI', 'identifier' => ''],
    'OTHER' => ['label' => 'Other Compliances', 'identifier' => '']
];

$frequencyLabels = [
    'MONTHLY' => 'Monthly',
    'QUARTERLY' => 'Quarterly',
    'HALF_YEARLY' => 'Half-Yearly',
    'YEARLY' => 'Yearly',
    'EVENT_BASED' => 'Event Based'
];

// Get due date description
function getDueDateDesc($cc) {
    $day = $cc['due_day'] ?? 0;
    $freq = $cc['frequency'] ?? 'YEARLY';
    
    if ($day <= 0) return '-';
    
    $dayStr = $day . getDaySuffix($day);
    
    if ($freq === 'MONTHLY') {
        return $dayStr . ' of next month';
    } elseif ($freq === 'QUARTERLY') {
        return $dayStr . ' of month after quarter end';
    } elseif ($freq === 'YEARLY') {
        $months = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $dueMonth = $cc['due_month_offset'] ?? 0;
        if ($dueMonth > 0 && $dueMonth <= 12) {
            return $dayStr . ' ' . $months[$dueMonth];
        }
        return $dayStr;
    }
    return $dayStr;
}

function getDaySuffix($day) {
    if ($day >= 11 && $day <= 13) return 'th';
    switch ($day % 10) {
        case 1: return 'st';
        case 2: return 'nd';
        case 3: return 'rd';
        default: return 'th';
    }
}

// Get company settings
$companyName = 'PATRON';
try {
    $setting = dbFetchOne("SELECT setting_value FROM settings WHERE setting_key = 'company_name'");
    if ($setting) $companyName = $setting['setting_value'];
} catch (Exception $e) {}

// Entity type labels
$entityLabels = [
    'PVT_LTD' => 'Private Limited Company',
    'PUBLIC_LTD' => 'Public Limited Company',
    'OPC' => 'One Person Company',
    'LLP' => 'Limited Liability Partnership',
    'PARTNERSHIP' => 'Partnership Firm',
    'PROPRIETORSHIP' => 'Proprietorship',
    'HUF' => 'Hindu Undivided Family',
    'TRUST' => 'Trust'
];

// Generate HTML for PDF
$html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Compliance Summary - ' . htmlspecialchars($client['name']) . '</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; font-size: 11px; line-height: 1.4; color: #333; padding: 20px; }
        
        .header { text-align: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #2563eb; }
        .header h1 { font-size: 18px; color: #1e40af; margin-bottom: 5px; }
        .header .subtitle { font-size: 12px; color: #666; }
        
        .client-info { background: #f8fafc; padding: 12px; border-radius: 6px; margin-bottom: 20px; }
        .client-info h2 { font-size: 14px; color: #1e40af; margin-bottom: 8px; }
        .client-info .row { display: flex; margin-bottom: 4px; }
        .client-info .label { width: 120px; color: #666; }
        .client-info .value { font-weight: 600; }
        
        .section { margin-bottom: 20px; }
        .section-header { background: #e0f2fe; padding: 8px 12px; border-radius: 4px 4px 0 0; border-left: 4px solid #0284c7; }
        .section-header h3 { font-size: 12px; color: #0369a1; margin: 0; }
        .section-header .identifier { font-size: 10px; color: #666; font-weight: normal; }
        
        .compliance-table { width: 100%; border-collapse: collapse; }
        .compliance-table th { background: #f1f5f9; padding: 8px; text-align: left; font-size: 10px; color: #475569; border-bottom: 1px solid #e2e8f0; }
        .compliance-table td { padding: 8px; border-bottom: 1px solid #f1f5f9; }
        .compliance-table tr:hover { background: #f8fafc; }
        
        .freq-badge { display: inline-block; padding: 2px 8px; border-radius: 10px; font-size: 9px; font-weight: 600; }
        .freq-monthly { background: #dbeafe; color: #1d4ed8; }
        .freq-quarterly { background: #fef3c7; color: #b45309; }
        .freq-yearly { background: #dcfce7; color: #15803d; }
        .freq-other { background: #f3f4f6; color: #4b5563; }
        
        .summary { background: #f0fdf4; padding: 12px; border-radius: 6px; margin-top: 20px; }
        .summary h3 { font-size: 12px; color: #166534; margin-bottom: 10px; }
        .summary-grid { display: flex; gap: 20px; }
        .summary-item { }
        .summary-item .count { font-size: 18px; font-weight: bold; color: #166534; }
        .summary-item .label { font-size: 10px; color: #666; }
        
        .footer { margin-top: 30px; padding-top: 15px; border-top: 1px solid #e2e8f0; text-align: center; font-size: 9px; color: #999; }
        
        @media print {
            body { padding: 10px; }
            .section { page-break-inside: avoid; }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📋 Compliance Requirements Summary</h1>
        <div class="subtitle">Generated by ' . htmlspecialchars($companyName) . ' on ' . date('d M Y') . '</div>
    </div>
    
    <div class="client-info">
        <h2>' . htmlspecialchars($client['name']) . '</h2>
        <div class="row"><span class="label">Entity Type:</span><span class="value">' . ($entityLabels[$client['entity_type']] ?? $client['entity_type']) . '</span></div>';

if ($client['gstin']) {
    $html .= '<div class="row"><span class="label">GSTIN:</span><span class="value">' . htmlspecialchars($client['gstin']) . '</span></div>';
}
if ($client['pan']) {
    $html .= '<div class="row"><span class="label">PAN:</span><span class="value">' . htmlspecialchars($client['pan']) . '</span></div>';
}
if ($client['tan']) {
    $html .= '<div class="row"><span class="label">TAN:</span><span class="value">' . htmlspecialchars($client['tan']) . '</span></div>';
}
if ($client['cin']) {
    $html .= '<div class="row"><span class="label">CIN:</span><span class="value">' . htmlspecialchars($client['cin']) . '</span></div>';
}

$html .= '
    </div>';

// Add compliance sections by category
foreach ($categoryMeta as $catKey => $catMeta) {
    if (!empty($byCategory[$catKey])) {
        $html .= '
    <div class="section">
        <div class="section-header">
            <h3>' . $catMeta['label'] . ' <span class="identifier">' . $catMeta['identifier'] . '</span></h3>
        </div>
        <table class="compliance-table">
            <thead>
                <tr>
                    <th style="width:35%">Compliance</th>
                    <th style="width:30%">Description</th>
                    <th style="width:15%">Frequency</th>
                    <th style="width:20%">Due Date</th>
                </tr>
            </thead>
            <tbody>';
        
        foreach ($byCategory[$catKey] as $cc) {
            $freqClass = 'freq-other';
            if ($cc['frequency'] === 'MONTHLY') $freqClass = 'freq-monthly';
            elseif ($cc['frequency'] === 'QUARTERLY') $freqClass = 'freq-quarterly';
            elseif ($cc['frequency'] === 'YEARLY') $freqClass = 'freq-yearly';
            
            $html .= '
                <tr>
                    <td><strong>' . htmlspecialchars($cc['name']) . '</strong></td>
                    <td>' . htmlspecialchars($cc['description'] ?? '-') . '</td>
                    <td><span class="freq-badge ' . $freqClass . '">' . ($frequencyLabels[$cc['frequency']] ?? $cc['frequency']) . '</span></td>
                    <td>' . getDueDateDesc($cc) . '</td>
                </tr>';
        }
        
        $html .= '
            </tbody>
        </table>
    </div>';
    }
}

// Add summary
$html .= '
    <div class="summary">
        <h3>📊 Summary</h3>
        <div class="summary-grid">
            <div class="summary-item">
                <div class="count">' . count($byFrequency['MONTHLY']) . '</div>
                <div class="label">Monthly</div>
            </div>
            <div class="summary-item">
                <div class="count">' . count($byFrequency['QUARTERLY']) . '</div>
                <div class="label">Quarterly</div>
            </div>
            <div class="summary-item">
                <div class="count">' . count($byFrequency['YEARLY']) . '</div>
                <div class="label">Yearly</div>
            </div>
            <div class="summary-item">
                <div class="count">' . count($clientCompliances) . '</div>
                <div class="label">Total Compliances</div>
            </div>
        </div>
    </div>
    
    <div class="footer">
        This document is auto-generated. For any queries, please contact ' . htmlspecialchars($companyName) . '.<br>
        Generated on ' . date('d M Y H:i') . '
    </div>
</body>
</html>';

// Output as HTML for browser to print/save as PDF
header('Content-Type: text/html; charset=utf-8');
echo $html;

// Add print script
echo '<script>window.onload = function() { window.print(); }</script>';
?>
