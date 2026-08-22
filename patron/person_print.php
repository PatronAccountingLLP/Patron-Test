<?php
/**
 * PATRON - Person Print Profile
 * Clean, print-friendly page showing all person details,
 * linked clients, DSC/KYC status for record-keeping or PDF save.
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$personId = (int)($_GET['id'] ?? 0);
if (!$personId) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$person = getPersonById($personId);
if (!$person) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$linkedClients = getPersonLinkedClients($personId);
$dscHistory = getPersonDSCHistory($personId);
$kycHistory = getPersonKYCHistory($personId);
$documents = getPersonDocuments($personId);
$dscInfo = getDSCStatusInfo($person);
$kycInfo = getKYCStatusInfo($person);
$age = calculateAge($person['dob'] ?? null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($person['full_name']) ?> - Person Profile</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; font-size: 11px; color: #1f2937; padding: 20px; max-width: 800px; margin: 0 auto; }
        h1 { font-size: 18px; border-bottom: 2px solid #2563eb; padding-bottom: 6px; margin-bottom: 12px; color: #1e3a5f; }
        h2 { font-size: 13px; color: #374151; background: #f3f4f6; padding: 6px 10px; margin: 14px 0 8px; border-left: 3px solid #2563eb; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 12px; }
        .info-table td { padding: 4px 8px; vertical-align: top; }
        .info-table .label { color: #6b7280; width: 140px; font-weight: 500; }
        .info-table .value { color: #111827; }
        .data-table { border: 1px solid #d1d5db; }
        .data-table th { background: #f9fafb; padding: 5px 8px; text-align: left; font-size: 10px; text-transform: uppercase; color: #6b7280; border-bottom: 1px solid #d1d5db; }
        .data-table td { padding: 5px 8px; border-bottom: 1px solid #e5e7eb; }
        .badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 10px; font-weight: 600; }
        .badge-green { background: #d1fae5; color: #065f46; }
        .badge-red { background: #fee2e2; color: #991b1b; }
        .badge-amber { background: #fef3c7; color: #92400e; }
        .badge-blue { background: #dbeafe; color: #1e40af; }
        .badge-gray { background: #f3f4f6; color: #4b5563; }
        .mono { font-family: 'Consolas', monospace; }
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .meta { font-size: 10px; color: #9ca3af; text-align: right; margin-bottom: 6px; }
        .footer { margin-top: 20px; padding-top: 8px; border-top: 1px solid #e5e7eb; font-size: 9px; color: #9ca3af; text-align: center; }
        @media print { 
            body { padding: 0; } 
            .no-print { display: none !important; }
            @page { margin: 15mm; }
        }
        .print-btn { background: #2563eb; color: white; border: none; padding: 8px 20px; border-radius: 6px; cursor: pointer; font-size: 12px; margin-bottom: 15px; }
        .print-btn:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="no-print" style="margin-bottom: 10px;">
        <button class="print-btn" onclick="window.print()"><strong>⎙</strong> Print / Save PDF</button>
        <a href="person_view.php?id=<?= $personId ?>" style="color:#2563eb; font-size:12px; margin-left:10px;">← Back to Person</a>
    </div>

    <p class="meta">Generated: <?= date('d M Y, h:i A') ?> | PATRON Practice Management</p>

    <h1><?= htmlspecialchars($person['full_name']) ?>
        <?php if ($person['status'] === 'INACTIVE'): ?><span class="badge badge-gray">INACTIVE</span><?php endif; ?>
    </h1>

    <!-- Basic Information -->
    <h2>Basic Information</h2>
    <div class="two-col">
        <table class="info-table">
            <tr><td class="label">Full Name</td><td class="value"><?= htmlspecialchars($person['full_name']) ?></td></tr>
            <tr><td class="label">Father's Name</td><td class="value"><?= htmlspecialchars($person['father_name'] ?? '—') ?></td></tr>
            <tr><td class="label">Date of Birth</td><td class="value"><?= $person['dob'] ? date('d M Y', strtotime($person['dob'])) . ($age ? " ($age yr)" : '') : '—' ?></td></tr>
            <tr><td class="label">Gender</td><td class="value"><?= $person['gender'] ? ucfirst(strtolower($person['gender'])) : '—' ?></td></tr>
            <tr><td class="label">Nationality</td><td class="value"><?= htmlspecialchars($person['nationality'] ?? '—') ?></td></tr>
        </table>
        <table class="info-table">
            <tr><td class="label">Occupation</td><td class="value"><?= $person['occupation'] ? str_replace('_',' ',ucfirst(strtolower($person['occupation']))) : '—' ?></td></tr>
            <tr><td class="label">Qualification</td><td class="value"><?= htmlspecialchars($person['educational_qualification'] ?? '—') ?></td></tr>
            <tr><td class="label">Status</td><td class="value"><?= $person['status'] ?? 'ACTIVE' ?></td></tr>
        </table>
    </div>

    <!-- Contact -->
    <h2>Contact Information</h2>
    <div class="two-col">
        <table class="info-table">
            <tr><td class="label">Mobile</td><td class="value mono"><?= htmlspecialchars($person['mobile'] ?? '—') ?></td></tr>
            <tr><td class="label">Alt. Mobile</td><td class="value mono"><?= htmlspecialchars($person['alternate_mobile'] ?? '—') ?></td></tr>
            <tr><td class="label">Email</td><td class="value"><?= htmlspecialchars($person['email'] ?? '—') ?></td></tr>
            <tr><td class="label">Alt. Email</td><td class="value"><?= htmlspecialchars($person['alternate_email'] ?? '—') ?></td></tr>
        </table>
        <table class="info-table">
            <?php if ($person['present_address_line1']): ?>
            <tr><td class="label">Present Address</td><td class="value">
                <?= htmlspecialchars($person['present_address_line1']) ?>
                <?= $person['present_address_line2'] ? ', ' . htmlspecialchars($person['present_address_line2']) : '' ?>
                <?php if ($person['present_city'] || $person['present_state']): ?>
                <br><?= htmlspecialchars(implode(', ', array_filter([$person['present_city'], $person['present_state']]))) ?>
                <?= $person['present_pincode'] ? ' - ' . $person['present_pincode'] : '' ?>
                <?php endif; ?>
            </td></tr>
            <?php elseif ($person['address']): ?>
            <tr><td class="label">Address</td><td class="value"><?= htmlspecialchars($person['address']) ?></td></tr>
            <?php endif; ?>
            <?php if (!$person['same_as_present'] && $person['permanent_address_line1']): ?>
            <tr><td class="label">Permanent Address</td><td class="value">
                <?= htmlspecialchars($person['permanent_address_line1']) ?>
                <?php if ($person['permanent_city'] || $person['permanent_state']): ?>
                <br><?= htmlspecialchars(implode(', ', array_filter([$person['permanent_city'], $person['permanent_state']]))) ?>
                <?= $person['permanent_pincode'] ? ' - ' . $person['permanent_pincode'] : '' ?>
                <?php endif; ?>
            </td></tr>
            <?php elseif ($person['same_as_present']): ?>
            <tr><td class="label">Permanent Address</td><td class="value" style="color:#9ca3af; font-style:italic;">Same as present</td></tr>
            <?php endif; ?>
        </table>
    </div>

    <!-- Identity -->
    <h2>Identity & Statutory Numbers</h2>
    <div class="two-col">
        <table class="info-table">
            <tr><td class="label">PAN</td><td class="value mono"><?= htmlspecialchars($person['pan_number'] ?? '—') ?></td></tr>
            <tr><td class="label">Aadhaar</td><td class="value mono"><?= $person['aadhaar_number'] ? maskAadhaar($person['aadhaar_number']) : '—' ?></td></tr>
            <tr><td class="label">Passport</td><td class="value mono"><?= htmlspecialchars($person['passport_number'] ?? '—') ?></td></tr>
        </table>
        <table class="info-table">
            <tr><td class="label">DIN</td><td class="value mono"><?= htmlspecialchars($person['din'] ?? '—') ?><?= $person['din_allotment_date'] ? ' (Allotted: '.date('d M Y', strtotime($person['din_allotment_date'])).')' : '' ?></td></tr>
            <tr><td class="label">DPIN</td><td class="value mono"><?= htmlspecialchars($person['dpin'] ?? '—') ?><?= $person['dpin_allotment_date'] ? ' (Allotted: '.date('d M Y', strtotime($person['dpin_allotment_date'])).')' : '' ?></td></tr>
        </table>
    </div>

    <!-- DSC & KYC -->
    <h2>DSC & KYC Compliance</h2>
    <div class="two-col">
        <table class="info-table">
            <tr><td class="label">DSC Status</td><td class="value"><span class="badge badge-<?= $dscInfo['color'] === 'green' ? 'green' : ($dscInfo['color'] === 'red' ? 'red' : 'amber') ?>"><?= $dscInfo['label'] ?></span></td></tr>
            <tr><td class="label">DSC Class</td><td class="value"><?= $person['dsc_class'] ? str_replace('_',' ',$person['dsc_class']) : '—' ?></td></tr>
            <tr><td class="label">DSC Expiry</td><td class="value"><?= $person['dsc_expiry_date'] ? date('d M Y', strtotime($person['dsc_expiry_date'])) : '—' ?></td></tr>
            <tr><td class="label">DSC Provider</td><td class="value"><?= htmlspecialchars($person['dsc_provider'] ?? '—') ?></td></tr>
            <tr><td class="label">Token #</td><td class="value mono"><?= htmlspecialchars($person['dsc_token_number'] ?? '—') ?></td></tr>
        </table>
        <table class="info-table">
            <tr><td class="label">KYC Status</td><td class="value"><span class="badge badge-<?= $kycInfo['color'] === 'green' ? 'green' : ($kycInfo['color'] === 'red' ? 'red' : 'amber') ?>"><?= $kycInfo['label'] ?></span></td></tr>
            <tr><td class="label">KYC Due Date</td><td class="value"><?= $person['din_kyc_due_date'] ? date('d M Y', strtotime($person['din_kyc_due_date'])) : '—' ?></td></tr>
            <tr><td class="label">Form Type</td><td class="value"><?= $person['kyc_form_type'] ? str_replace('_',' ',$person['kyc_form_type']) : '—' ?></td></tr>
            <tr><td class="label">Last Filed</td><td class="value"><?= $person['last_kyc_filed_date'] ? date('d M Y', strtotime($person['last_kyc_filed_date'])) : '—' ?></td></tr>
            <tr><td class="label">Last SRN</td><td class="value mono"><?= htmlspecialchars($person['last_kyc_srn'] ?? '—') ?></td></tr>
        </table>
    </div>

    <!-- Linked Clients -->
    <?php if (!empty($linkedClients)): ?>
    <h2>Linked Clients (<?= count($linkedClients) ?>)</h2>
    <table class="data-table">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Entity Type</th>
                <th>Role</th>
                <th>Category</th>
                <th>Appointment</th>
                <th>Shares / Capital</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($linkedClients as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['name']) ?></td>
                <td><?= str_replace('_',' ',$c['entity_type']) ?></td>
                <td><?= getRoleLabel($c['role_type']) ?></td>
                <td><?= $c['director_category'] ? str_replace('_',' ',$c['director_category']) : '—' ?></td>
                <td><?= $c['appointment_date'] ? date('d M Y', strtotime($c['appointment_date'])) : '—' ?></td>
                <td>
                    <?php if ($c['share_percentage']): ?>
                    <?= number_format($c['share_percentage'], 2) ?>%
                    <?php if ($c['no_of_shares']): ?> (<?= number_format($c['no_of_shares']) ?> <?= $c['share_type'] ?? '' ?>)<?php endif; ?>
                    <?php elseif ($c['capital_contribution']): ?>
                    ₹<?= number_format($c['capital_contribution']) ?>
                    <?php else: ?>—<?php endif; ?>
                </td>
                <td><span class="badge <?= $c['link_active'] ? 'badge-green' : 'badge-red' ?>"><?= $c['link_active'] ? 'Active' : 'Ceased' ?></span></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <!-- DSC History -->
    <?php if (!empty($dscHistory)): ?>
    <h2>DSC Renewal History</h2>
    <table class="data-table">
        <thead><tr><th>Class</th><th>Provider</th><th>Token #</th><th>Issue</th><th>Expiry</th><th>Status</th><th>Cost</th></tr></thead>
        <tbody>
        <?php foreach ($dscHistory as $dh): ?>
        <tr>
            <td><?= str_replace('_',' ',$dh['dsc_class'] ?? '') ?></td>
            <td><?= htmlspecialchars($dh['provider'] ?? '') ?></td>
            <td class="mono"><?= htmlspecialchars($dh['token_number'] ?? '') ?></td>
            <td><?= $dh['issue_date'] ? date('d M Y', strtotime($dh['issue_date'])) : '—' ?></td>
            <td><?= $dh['expiry_date'] ? date('d M Y', strtotime($dh['expiry_date'])) : '—' ?></td>
            <td><span class="badge badge-<?= ($dh['status'] ?? '') === 'ACTIVE' ? 'green' : 'red' ?>"><?= $dh['status'] ?? '' ?></span></td>
            <td><?= $dh['cost'] ? '₹'.number_format($dh['cost']) : '—' ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <!-- KYC History -->
    <?php if (!empty($kycHistory)): ?>
    <h2>Annual KYC Filing History</h2>
    <table class="data-table">
        <thead><tr><th>FY</th><th>Form</th><th>Filed</th><th>Due</th><th>SRN</th><th>Status</th><th>Fee</th></tr></thead>
        <tbody>
        <?php foreach ($kycHistory as $kh): ?>
        <tr>
            <td><?= htmlspecialchars($kh['financial_year'] ?? '') ?></td>
            <td><?= str_replace('_',' ',$kh['kyc_form_type'] ?? '') ?></td>
            <td><?= $kh['filing_date'] ? date('d M Y', strtotime($kh['filing_date'])) : '—' ?></td>
            <td><?= $kh['due_date'] ? date('d M Y', strtotime($kh['due_date'])) : '—' ?></td>
            <td class="mono"><?= htmlspecialchars($kh['srn'] ?? '') ?: '—' ?></td>
            <td><span class="badge badge-<?= ($kh['status'] ?? '') === 'COMPLETED' ? 'green' : (($kh['status'] ?? '') === 'OVERDUE' ? 'red' : 'amber') ?>"><?= $kh['status'] ?? '' ?></span></td>
            <td><?= $kh['fee_paid'] ? '₹'.number_format($kh['fee_paid']) : '—' ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <!-- Documents -->
    <?php if (!empty($documents)): ?>
    <h2>Documents (<?= count($documents) ?>)</h2>
    <table class="data-table">
        <thead><tr><th>Document Type</th><th>Upload Date</th><th>Uploaded By</th></tr></thead>
        <tbody>
        <?php foreach ($documents as $doc): ?>
        <tr>
            <td><?= htmlspecialchars($doc['doc_type_name'] ?? 'Unknown') ?></td>
            <td><?= date('d M Y', strtotime($doc['created_at'])) ?></td>
            <td><?= htmlspecialchars($doc['uploaded_by_name'] ?? '—') ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>

    <?php if ($person['internal_notes']): ?>
    <h2>Internal Notes</h2>
    <p style="padding: 6px 10px; background: #fffbeb; border: 1px solid #fde68a; border-radius: 4px;"><?= nl2br(htmlspecialchars($person['internal_notes'])) ?></p>
    <?php endif; ?>

    <div class="footer">
        PATRON Practice Management System · Person Profile: <?= htmlspecialchars($person['full_name']) ?> (#<?= $personId ?>) · Printed <?= date('d M Y, h:i A') ?>
    </div>
</body>
</html>
