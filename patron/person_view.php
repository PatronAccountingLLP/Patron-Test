<?php
/**
 * PATRON - Person View (v2)
 * Comprehensive person profile with tabbed sections:
 * Overview, Client Links, DSC History, KYC History, Documents
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$personId = (int)($_GET['id'] ?? 0);
if (!$personId) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$person = getPersonById($personId);
if (!$person) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$pageTitle = $person['full_name'];

// ============================================================
// HANDLE ACTIONS
// ============================================================
$action = $_GET['action'] ?? '';

// --- Unlink client ---
if ($action === 'unlink_client') {
    $linkId = (int)($_GET['link_id'] ?? 0);
    if ($linkId) {
        dbExecute("UPDATE client_persons SET is_active = 0, cessation_date = CURDATE(), updated_at = NOW() WHERE id = ? AND person_id = ?", [$linkId, $personId]);
        setFlash('success', 'Person unlinked from client.');
    }
    header('Location: person_view.php?id=' . $personId . '#clients'); exit;
}

// --- Link client ---
if ($action === 'link_client' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientId       = (int)($_POST['client_id'] ?? 0);
    $roleType       = sanitize($_POST['role_type'] ?? '');
    $designation    = sanitize($_POST['designation'] ?? '');
    $dirCategory    = sanitize($_POST['director_category'] ?? '');
    $apptDate       = sanitize($_POST['appointment_date'] ?? '');
    $origApptDate   = sanitize($_POST['original_appointment_date'] ?? '');
    $shares         = ($_POST['no_of_shares'] ?? '') !== '' ? (int)$_POST['no_of_shares'] : null;
    $sharePct       = ($_POST['share_percentage'] ?? '') !== '' ? (float)$_POST['share_percentage'] : null;
    $shareType      = sanitize($_POST['share_type'] ?? 'EQUITY');
    $faceValue      = ($_POST['face_value_per_share'] ?? '') !== '' ? (float)$_POST['face_value_per_share'] : 10.00;
    $capContr       = ($_POST['capital_contribution'] ?? '') !== '' ? (float)$_POST['capital_contribution'] : null;
    $profitRatio    = ($_POST['profit_sharing_ratio'] ?? '') !== '' ? (float)$_POST['profit_sharing_ratio'] : null;

    if ($clientId && $roleType) {
        $existing = dbFetchOne("SELECT id FROM client_persons WHERE person_id = ? AND client_id = ? AND role_type = ? AND is_active = 1", [$personId, $clientId, $roleType]);
        if ($existing) {
            setFlash('error', 'Person already linked to this client with this role.');
        } else {
            dbExecute("INSERT INTO client_persons (client_id, person_id, role_type, designation, director_category,
                    appointment_date, original_appointment_date, no_of_shares, share_percentage, share_type, face_value_per_share,
                    capital_contribution, profit_sharing_ratio, is_active, created_at)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,1,NOW())", [
                $clientId, $personId, $roleType, $designation ?: null, $dirCategory ?: null,
                $apptDate ?: null, $origApptDate ?: null, $shares, $sharePct, $shareType, $faceValue,
                $capContr, $profitRatio
            ]);
            setFlash('success', 'Person linked to client.');
        }
    }
    header('Location: person_view.php?id=' . $personId . '#clients'); exit;
}

// --- Update DSC quick ---
if ($action === 'update_dsc' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $dscStatus = sanitize($_POST['dsc_status'] ?? '');
    $dscExpiry = sanitize($_POST['dsc_expiry'] ?? '');
    dbExecute("UPDATE persons_new SET dsc_status = ?, dsc_expiry_date = ?, updated_at = NOW() WHERE id = ?",
        [$dscStatus ?: null, $dscExpiry ?: null, $personId]);
    setFlash('success', 'DSC status updated.');
    header('Location: person_view.php?id=' . $personId . '#dsc'); exit;
}

// --- Add DSC History ---
if ($action === 'add_dsc_history' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    dbExecute("INSERT INTO person_dsc_history (person_id, dsc_class, dsc_provider, dsc_token_number, issue_date, expiry_date, status, cost, vendor_name, notes, created_at)
        VALUES (?,?,?,?,?,?,?,?,?,?,NOW())", [
        $personId,
        sanitize($_POST['dsc_class'] ?? ''),
        sanitize($_POST['provider'] ?? ''),
        sanitize($_POST['token_number'] ?? ''),
        sanitize($_POST['issue_date'] ?? '') ?: null,
        sanitize($_POST['expiry_date'] ?? '') ?: null,
        sanitize($_POST['dsc_hist_status'] ?? 'ACTIVE'),
        ($_POST['cost'] ?? '') !== '' ? (float)$_POST['cost'] : null,
        sanitize($_POST['vendor_name'] ?? ''),
        sanitize($_POST['dsc_notes'] ?? ''),
    ]);
    setFlash('success', 'DSC history entry added.');
    header('Location: person_view.php?id=' . $personId . '#dsc'); exit;
}

// --- Update KYC quick ---
if ($action === 'update_kyc' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $kycStatus = sanitize($_POST['kyc_status'] ?? '');
    $kycDate = sanitize($_POST['kyc_date'] ?? '');
    dbExecute("UPDATE persons_new SET din_kyc_status = ?, din_kyc_due_date = ?, updated_at = NOW() WHERE id = ?",
        [$kycStatus ?: null, $kycDate ?: null, $personId]);
    setFlash('success', 'KYC status updated.');
    header('Location: person_view.php?id=' . $personId . '#kyc'); exit;
}

// --- Add KYC History ---
if ($action === 'add_kyc_history' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    dbExecute("INSERT INTO person_kyc_history (person_id, financial_year, kyc_form_type, filing_date, srn, ack_number, status, due_date, fee_paid, notes, created_at)
        VALUES (?,?,?,?,?,?,?,?,?,?,NOW())", [
        $personId,
        sanitize($_POST['financial_year'] ?? ''),
        sanitize($_POST['kyc_form_type'] ?? ''),
        sanitize($_POST['filing_date'] ?? '') ?: null,
        sanitize($_POST['srn'] ?? ''),
        sanitize($_POST['ack_number'] ?? ''),
        sanitize($_POST['kyc_hist_status'] ?? 'PENDING'),
        sanitize($_POST['due_date'] ?? '') ?: null,
        ($_POST['fee_paid'] ?? '') !== '' ? (float)$_POST['fee_paid'] : null,
        sanitize($_POST['kyc_notes'] ?? ''),
    ]);
    setFlash('success', 'KYC history entry added.');
    header('Location: person_view.php?id=' . $personId . '#kyc'); exit;
}

// ============================================================
// FETCH DATA
// ============================================================

// Linked clients with all fields
$linkedClients = dbFetchAll("
    SELECT c.id, c.name, c.entity_type, c.status as client_status,
           cp.id as link_id, cp.role_type, cp.designation, cp.director_category,
           cp.appointment_date, cp.original_appointment_date, cp.cessation_date,
           cp.no_of_shares, cp.share_percentage, cp.share_type, cp.face_value_per_share,
           cp.capital_contribution, cp.profit_sharing_ratio,
           cp.is_active as link_active, cp.notes as link_notes
    FROM client_persons cp
    JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    WHERE cp.person_id = ?
    ORDER BY cp.is_active DESC, c.name
", [$personId]) ?: [];

// Available clients for linking
$linkedClientIds = array_column(array_filter($linkedClients, fn($c) => $c['link_active']), 'id');
$availableClients = dbFetchAll("
    SELECT id, name, entity_type FROM clients
    WHERE deleted_at IS NULL AND id NOT IN (" . (empty($linkedClientIds) ? '0' : implode(',', $linkedClientIds)) . ")
    ORDER BY name
") ?: [];

// DSC history
$dscHistory = dbFetchAll("SELECT * FROM person_dsc_history WHERE person_id = ? ORDER BY issue_date DESC", [$personId]) ?: [];

// KYC history
$kycHistory = dbFetchAll("SELECT * FROM person_kyc_history WHERE person_id = ? ORDER BY financial_year DESC", [$personId]) ?: [];

// Documents
$documents = dbFetchAll("
    SELECT cd.*, dt.name as doc_type_name, dt.code as doc_type_code
    FROM client_documents cd
    JOIN document_types dt ON cd.document_type_id = dt.id
    WHERE cd.person_id = ? AND cd.deleted_at IS NULL
    ORDER BY cd.created_at DESC
", [$personId]) ?: [];

// Computed statuses
$dscInfo = getDSCStatusInfo($person);
$kycInfo = getKYCStatusInfo($person);
$age = calculateAge($person['dob'] ?? null);
$docCount = count($documents);
$activeLinks = count(array_filter($linkedClients, fn($c) => $c['link_active']));

// Role map for JS
$roleMap = [];
foreach ($availableClients as $c) {
    if (!isset($roleMap[$c['entity_type']])) {
        $roleMap[$c['entity_type']] = getApplicableRoles($c['entity_type']);
    }
}

// FY list for KYC history
$currentFY = getCurrentFinancialYear();
$fyOptions = [];
for ($y = (int)substr($currentFY, 0, 4); $y >= 2018; $y--) {
    $fyOptions[] = $y . '-' . ($y + 1);
}

require_once 'includes/header.php';
?>

<style>
.info-label { font-size: 0.7rem; color: #9ca3af; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px; }
.info-value { font-size: 0.875rem; font-weight: 500; color: #1f2937; }
.info-value.mono { font-family: monospace; }
.info-value .empty { color: #d1d5db; }
.vtab { cursor: pointer; padding: 0.75rem 1.25rem; border-left: 3px solid transparent; transition: all 0.15s; }
.vtab:hover { background: #f8fafc; }
.vtab.active { border-left-color: #2563eb; background: #eff6ff; color: #2563eb; font-weight: 600; }
.vtab .badge { font-size: 0.65rem; padding: 1px 6px; border-radius: 999px; margin-left: 6px; }
</style>

<!-- Profile Header -->
<div class="card p-6 mb-6">
    <div class="flex items-start justify-between">
        <div class="flex items-start gap-5">
            <!-- Avatar / Photo -->
            <?php if (!empty($person['photo_path'])): ?>
            <img src="<?= htmlspecialchars($person['photo_path']) ?>" class="w-20 h-20 rounded-xl object-cover border-2 border-gray-200 shadow-sm">
            <?php else: ?>
            <div class="w-20 h-20 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center text-2xl font-bold shadow-sm">
                <?= getPersonInitials($person['full_name']) ?>
            </div>
            <?php endif; ?>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                    <?= htmlspecialchars($person['full_name']) ?>
                    <?php if ($person['status'] === 'INACTIVE'): ?>
                    <span class="px-2 py-0.5 bg-gray-200 text-gray-600 rounded text-xs">Inactive</span>
                    <?php endif; ?>
                </h2>
                <div class="flex items-center gap-3 mt-1 text-sm text-gray-500">
                    <?php if ($person['pan_number']): ?>
                    <span class="font-mono"><?= htmlspecialchars($person['pan_number']) ?></span>
                    <span>·</span>
                    <?php endif; ?>
                    <?php if ($person['din']): ?>
                    <span>DIN: <span class="font-mono text-blue-600"><?= htmlspecialchars($person['din']) ?></span></span>
                    <span>·</span>
                    <?php endif; ?>
                    <?php if ($person['dpin']): ?>
                    <span>DPIN: <span class="font-mono text-purple-600"><?= htmlspecialchars($person['dpin']) ?></span></span>
                    <span>·</span>
                    <?php endif; ?>
                    <?php if ($age): ?>
                    <span><?= $age ?> years</span>
                    <?php endif; ?>
                </div>
                <!-- Status badges -->
                <div class="flex items-center gap-2 mt-2">
                    <?= getDSCBadgeHTML($person) ?>
                    <?= getKYCBadgeHTML($person) ?>
                    <?php foreach (array_filter($linkedClients, fn($c) => $c['link_active']) as $lc): ?>
                    <span class="px-2 py-0.5 bg-<?= getRoleColor($lc['role_type']) ?>-100 text-<?= getRoleColor($lc['role_type']) ?>-700 rounded text-xs">
                        <?= getRoleLabel($lc['role_type']) ?> @ <?= htmlspecialchars(mb_substr($lc['name'], 0, 20)) ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="flex gap-2">
            <a href="edit_person.php?id=<?= $personId ?>" class="btn btn-primary text-sm"><i class="fas fa-edit mr-1"></i>Edit</a>
            <a href="person_documents.php?id=<?= $personId ?>" class="btn bg-purple-50 text-purple-700 hover:bg-purple-100 text-sm"><i class="fas fa-file-upload mr-1"></i>Documents</a>
            <a href="person_print.php?id=<?= $personId ?>" target="_blank" class="btn bg-gray-50 text-gray-700 hover:bg-gray-100 text-sm" title="Print Profile"><i class="fas fa-print mr-1"></i>Print</a>
        </div>
    </div>
</div>

<!-- Main Layout: Tabs + Content -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
    <!-- Left: Vertical Tabs -->
    <div class="lg:col-span-1">
        <div class="card overflow-hidden">
            <div class="vtab active" data-tab="overview" onclick="showTab('overview')">
                <i class="fas fa-user w-5 text-center mr-2"></i>Overview
            </div>
            <div class="vtab" data-tab="clients" onclick="showTab('clients')">
                <i class="fas fa-building w-5 text-center mr-2"></i>Clients
                <span class="badge bg-blue-100 text-blue-700"><?= $activeLinks ?></span>
            </div>
            <div class="vtab" data-tab="dsc" onclick="showTab('dsc')">
                <i class="fas fa-certificate w-5 text-center mr-2"></i>DSC
                <?php if ($dscInfo['color'] === 'red'): ?><span class="badge bg-red-100 text-red-700">!</span><?php endif; ?>
            </div>
            <div class="vtab" data-tab="kyc" onclick="showTab('kyc')">
                <i class="fas fa-clipboard-check w-5 text-center mr-2"></i>KYC
                <?php if ($kycInfo['color'] === 'red'): ?><span class="badge bg-red-100 text-red-700">!</span><?php endif; ?>
            </div>
            <div class="vtab" data-tab="documents" onclick="showTab('documents')">
                <i class="fas fa-file-alt w-5 text-center mr-2"></i>Documents
                <span class="badge bg-purple-100 text-purple-700"><?= $docCount ?></span>
            </div>
        </div>
    </div>

    <!-- Right: Tab Content -->
    <div class="lg:col-span-3">

    <!-- ===================== OVERVIEW TAB ===================== -->
    <div class="tab-content" id="tab-overview">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Basic Info -->
            <div class="card p-5">
                <h4 class="font-semibold text-gray-700 mb-4 flex items-center"><i class="fas fa-user text-blue-500 mr-2"></i>Basic Information</h4>
                <div class="grid grid-cols-2 gap-4">
                    <?php
                    $basicFields = [
                        'Full Name' => $person['full_name'],
                        "Father's Name" => $person['father_name'],
                        'Date of Birth' => $person['dob'] ? date('d M Y', strtotime($person['dob'])) . ($age ? " ($age yr)" : '') : null,
                        'Gender' => $person['gender'] ? ucfirst(strtolower($person['gender'])) : null,
                        'Nationality' => $person['nationality'],
                        'Occupation' => $person['occupation'] ? str_replace('_', ' ', ucfirst(strtolower($person['occupation']))) : null,
                        'Qualification' => $person['educational_qualification'],
                        'Status' => $person['status'],
                    ];
                    foreach ($basicFields as $label => $val): ?>
                    <div>
                        <p class="info-label"><?= $label ?></p>
                        <p class="info-value"><?= $val ? htmlspecialchars($val) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="card p-5">
                <h4 class="font-semibold text-gray-700 mb-4 flex items-center"><i class="fas fa-phone text-green-500 mr-2"></i>Contact Information</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="info-label">Mobile</p>
                        <p class="info-value mono"><?= $person['mobile'] ? htmlspecialchars($person['mobile']) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <div>
                        <p class="info-label">Alt. Mobile</p>
                        <p class="info-value mono"><?= $person['alternate_mobile'] ? htmlspecialchars($person['alternate_mobile']) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <div class="col-span-2">
                        <p class="info-label">Email</p>
                        <p class="info-value"><?= $person['email'] ? '<a href="mailto:'.htmlspecialchars($person['email']).'" class="text-blue-600 hover:underline">'.htmlspecialchars($person['email']).'</a>' : '<span class="empty">—</span>' ?></p>
                    </div>
                    <?php if ($person['alternate_email']): ?>
                    <div class="col-span-2">
                        <p class="info-label">Alt. Email</p>
                        <p class="info-value"><?= htmlspecialchars($person['alternate_email']) ?></p>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Present Address -->
                <?php if ($person['present_address_line1'] || $person['address']): ?>
                <div class="mt-4 pt-4 border-t">
                    <p class="info-label">Present Address</p>
                    <?php if ($person['present_address_line1']): ?>
                    <p class="info-value text-sm">
                        <?= htmlspecialchars($person['present_address_line1']) ?>
                        <?= $person['present_address_line2'] ? '<br>' . htmlspecialchars($person['present_address_line2']) : '' ?>
                        <?php if ($person['present_city'] || $person['present_state']): ?>
                        <br><?= htmlspecialchars(implode(', ', array_filter([$person['present_city'], $person['present_state']]))) ?>
                        <?= $person['present_pincode'] ? ' - ' . htmlspecialchars($person['present_pincode']) : '' ?>
                        <?php endif; ?>
                    </p>
                    <?php elseif ($person['address']): ?>
                    <p class="info-value text-sm"><?= nl2br(htmlspecialchars($person['address'])) ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if (!$person['same_as_present'] && $person['permanent_address_line1']): ?>
                <div class="mt-3">
                    <p class="info-label">Permanent Address</p>
                    <p class="info-value text-sm">
                        <?= htmlspecialchars($person['permanent_address_line1']) ?>
                        <?= $person['permanent_address_line2'] ? '<br>' . htmlspecialchars($person['permanent_address_line2']) : '' ?>
                        <?php if ($person['permanent_city'] || $person['permanent_state']): ?>
                        <br><?= htmlspecialchars(implode(', ', array_filter([$person['permanent_city'], $person['permanent_state']]))) ?>
                        <?= $person['permanent_pincode'] ? ' - ' . htmlspecialchars($person['permanent_pincode']) : '' ?>
                        <?php endif; ?>
                    </p>
                </div>
                <?php elseif ($person['same_as_present']): ?>
                <div class="mt-3">
                    <p class="info-label">Permanent Address</p>
                    <p class="text-xs text-gray-400 italic">Same as present address</p>
                </div>
                <?php endif; ?>
            </div>

            <!-- Identity -->
            <div class="card p-5">
                <h4 class="font-semibold text-gray-700 mb-4 flex items-center"><i class="fas fa-fingerprint text-purple-500 mr-2"></i>Identity Information</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="info-label">PAN</p>
                        <p class="info-value mono"><?= $person['pan_number'] ? htmlspecialchars($person['pan_number']) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <div>
                        <p class="info-label">Aadhaar</p>
                        <p class="info-value mono"><?= $person['aadhaar_number'] ? maskAadhaar($person['aadhaar_number']) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <div>
                        <p class="info-label">Passport</p>
                        <p class="info-value mono"><?= $person['passport_number'] ? htmlspecialchars($person['passport_number']) : '<span class="empty">—</span>' ?></p>
                    </div>
                    <div></div>
                    <div>
                        <p class="info-label">DIN</p>
                        <p class="info-value mono text-blue-600"><?= $person['din'] ?: '<span class="empty">—</span>' ?></p>
                        <?php if ($person['din_allotment_date']): ?>
                        <p class="text-xs text-gray-400">Allotted: <?= date('d M Y', strtotime($person['din_allotment_date'])) ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <p class="info-label">DPIN</p>
                        <p class="info-value mono text-purple-600"><?= $person['dpin'] ?: '<span class="empty">—</span>' ?></p>
                        <?php if ($person['dpin_allotment_date']): ?>
                        <p class="text-xs text-gray-400">Allotted: <?= date('d M Y', strtotime($person['dpin_allotment_date'])) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- DSC/KYC Summary -->
            <div class="card p-5">
                <h4 class="font-semibold text-gray-700 mb-4 flex items-center"><i class="fas fa-shield-alt text-amber-500 mr-2"></i>Compliance Summary</h4>
                <div class="space-y-4">
                    <!-- DSC -->
                    <div class="flex items-center justify-between p-3 bg-<?= $dscInfo['color'] ?>-50 rounded-lg">
                        <div>
                            <p class="text-xs text-gray-500">DSC Status</p>
                            <p class="font-semibold text-<?= $dscInfo['color'] ?>-700"><?= $dscInfo['label'] ?></p>
                        </div>
                        <?php if ($person['dsc_expiry_date']): ?>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Expiry</p>
                            <p class="text-sm font-medium"><?= date('d M Y', strtotime($person['dsc_expiry_date'])) ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- KYC -->
                    <div class="flex items-center justify-between p-3 bg-<?= $kycInfo['color'] ?>-50 rounded-lg">
                        <div>
                            <p class="text-xs text-gray-500">DIR-3 KYC</p>
                            <p class="font-semibold text-<?= $kycInfo['color'] ?>-700"><?= $kycInfo['label'] ?></p>
                        </div>
                        <?php if ($person['din_kyc_due_date']): ?>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Due Date</p>
                            <p class="text-sm font-medium"><?= date('d M Y', strtotime($person['din_kyc_due_date'])) ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($person['internal_notes']): ?>
                <div class="mt-4 pt-4 border-t">
                    <p class="info-label">Internal Notes</p>
                    <p class="text-sm text-gray-600"><?= nl2br(htmlspecialchars($person['internal_notes'])) ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- ===================== CLIENTS TAB ===================== -->
    <div class="tab-content hidden" id="tab-clients">
        <div class="card p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-building text-blue-500 mr-2"></i>Linked Clients (<?= $activeLinks ?>)</h3>
                <?php if (!empty($availableClients)): ?>
                <button onclick="document.getElementById('linkForm').classList.toggle('hidden')" class="btn btn-primary text-sm"><i class="fas fa-link mr-1"></i>Link to Client</button>
                <?php endif; ?>
            </div>

            <!-- Link Client Form -->
            <?php if (!empty($availableClients)): ?>
            <form method="POST" action="?id=<?= $personId ?>&action=link_client" id="linkForm" class="hidden mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Client</label>
                        <select name="client_id" id="linkClientSelect" class="form-input w-full text-sm" required onchange="onLinkClientChange()">
                            <option value="" data-entity="">Choose...</option>
                            <?php foreach ($availableClients as $c): ?>
                            <option value="<?= $c['id'] ?>" data-entity="<?= $c['entity_type'] ?>"><?= htmlspecialchars($c['name']) ?> (<?= str_replace('_',' ',$c['entity_type']) ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Role</label>
                        <select name="role_type" id="linkRoleSelect" class="form-input w-full text-sm" required>
                            <option value="">Select role...</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Designation</label>
                        <input type="text" name="designation" class="form-input w-full text-sm" placeholder="e.g. Additional Director">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Director Category</label>
                        <select name="director_category" class="form-input w-full text-sm">
                            <option value="">N/A</option>
                            <option value="EXECUTIVE">Executive</option>
                            <option value="NON_EXECUTIVE">Non-Executive</option>
                            <option value="INDEPENDENT">Independent</option>
                            <option value="WHOLE_TIME">Whole-Time</option>
                            <option value="MANAGING">Managing</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Appointment Date</label>
                        <input type="date" name="appointment_date" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Original Appointment</label>
                        <input type="date" name="original_appointment_date" class="form-input w-full text-sm">
                    </div>
                </div>
                <div class="flex items-center gap-3 mt-4">
                    <button type="submit" class="btn btn-primary text-sm">Link Client</button>
                    <button type="button" onclick="document.getElementById('linkForm').classList.add('hidden')" class="text-sm text-gray-500 hover:text-gray-700">Cancel</button>
                </div>
            </form>
            <?php endif; ?>

            <!-- Client List -->
            <?php if (empty($linkedClients)): ?>
            <p class="text-gray-400 text-center py-8">Not linked to any clients yet</p>
            <?php else: ?>
            <div class="space-y-3">
                <?php foreach ($linkedClients as $c): 
                    $color = getRoleColor($c['role_type']);
                    $inactive = !$c['link_active'];
                ?>
                <div class="p-4 rounded-lg border <?= $inactive ? 'bg-gray-50 opacity-60' : 'bg-white hover:shadow-md' ?> transition-shadow">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-<?= $color ?>-100 text-<?= $color ?>-700 rounded-lg flex items-center justify-center">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <a href="view_client.php?id=<?= $c['id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                                    <?= htmlspecialchars($c['name']) ?>
                                </a>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="text-xs text-gray-400"><?= str_replace('_',' ',$c['entity_type']) ?></span>
                                    <?= getRoleBadgeHTML($c['role_type']) ?>
                                    <?php if ($c['designation']): ?>
                                    <span class="text-xs text-gray-500">(<?= htmlspecialchars($c['designation']) ?>)</span>
                                    <?php endif; ?>
                                    <?php if ($c['director_category']): ?>
                                    <span class="text-xs px-1.5 py-0.5 bg-gray-100 text-gray-600 rounded"><?= str_replace('_',' ',$c['director_category']) ?></span>
                                    <?php endif; ?>
                                    <?php if ($inactive): ?>
                                    <span class="text-xs px-1.5 py-0.5 bg-red-100 text-red-600 rounded">Ceased</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <?php if ($c['appointment_date']): ?>
                            <span class="text-xs text-gray-400">Appt: <?= date('d M Y', strtotime($c['appointment_date'])) ?></span>
                            <?php endif; ?>
                            <?php if ($c['share_percentage']): ?>
                            <span class="text-xs font-mono text-purple-600"><?= number_format($c['share_percentage'], 2) ?>%</span>
                            <?php endif; ?>
                            <?php if ($c['capital_contribution']): ?>
                            <span class="text-xs font-mono text-green-600">₹<?= number_format($c['capital_contribution']) ?></span>
                            <?php endif; ?>
                            <?php if ($c['link_active']): ?>
                            <a href="?id=<?= $personId ?>&action=unlink_client&link_id=<?= $c['link_id'] ?>"
                               onclick="return confirm('Deactivate this link? The person will be marked as ceased for this client.')"
                               class="text-red-400 hover:text-red-600" title="Unlink"><i class="fas fa-unlink"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($c['no_of_shares'] || $c['profit_sharing_ratio']): ?>
                    <div class="mt-2 pt-2 border-t border-dashed flex gap-6 text-xs text-gray-500">
                        <?php if ($c['no_of_shares']): ?>
                        <span>Shares: <?= number_format($c['no_of_shares']) ?> <?= $c['share_type'] ?? '' ?></span>
                        <?php endif; ?>
                        <?php if ($c['face_value_per_share']): ?>
                        <span>FV: ₹<?= number_format($c['face_value_per_share'], 2) ?></span>
                        <?php endif; ?>
                        <?php if ($c['profit_sharing_ratio']): ?>
                        <span>Profit: <?= number_format($c['profit_sharing_ratio'], 2) ?>%</span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- ===================== DSC TAB ===================== -->
    <div class="tab-content hidden" id="tab-dsc">
        <!-- Current DSC Status Card -->
        <div class="card p-5 mb-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-certificate text-amber-500 mr-2"></i>Current DSC Status</h3>
                <button onclick="document.getElementById('dscQuickForm').classList.toggle('hidden')" class="text-blue-600 hover:text-blue-800 text-sm"><i class="fas fa-edit mr-1"></i>Quick Update</button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <p class="info-label">Status</p>
                    <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-<?= $dscInfo['color'] ?>-100 text-<?= $dscInfo['color'] ?>-700"><?= $dscInfo['label'] ?></span>
                </div>
                <div>
                    <p class="info-label">Class</p>
                    <p class="info-value"><?= $person['dsc_class'] ? str_replace('_', ' ', $person['dsc_class']) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Expiry</p>
                    <p class="info-value"><?= $person['dsc_expiry_date'] ? date('d M Y', strtotime($person['dsc_expiry_date'])) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Provider</p>
                    <p class="info-value"><?= $person['dsc_provider'] ? htmlspecialchars($person['dsc_provider']) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Token #</p>
                    <p class="info-value mono"><?= $person['dsc_token_number'] ? htmlspecialchars($person['dsc_token_number']) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Password Hint</p>
                    <p class="info-value"><?= $person['dsc_password_hint'] ? htmlspecialchars($person['dsc_password_hint']) : '<span class="empty">—</span>' ?></p>
                </div>
            </div>

            <!-- Quick update form -->
            <form method="POST" action="?id=<?= $personId ?>&action=update_dsc" id="dscQuickForm" class="hidden mt-4 pt-4 border-t">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs text-gray-500 mb-1">Status</label>
                        <select name="dsc_status" class="form-input w-full text-sm">
                            <?php foreach (['NOT_REQUIRED','REQUIRED','APPLIED','ACTIVE','EXPIRED'] as $s): ?>
                            <option value="<?= $s ?>" <?= ($person['dsc_status'] ?? '') === $s ? 'selected' : '' ?>><?= str_replace('_',' ',$s) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500 mb-1">Expiry Date</label>
                        <input type="date" name="dsc_expiry" class="form-input w-full text-sm" value="<?= $person['dsc_expiry_date'] ?? '' ?>">
                    </div>
                    <div class="flex items-end"><button type="submit" class="btn btn-primary text-sm">Save</button></div>
                </div>
            </form>
        </div>

        <!-- DSC History -->
        <div class="card p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-history text-indigo-500 mr-2"></i>DSC Renewal History</h3>
                <button onclick="document.getElementById('addDscForm').classList.toggle('hidden')" class="btn bg-indigo-50 text-indigo-700 hover:bg-indigo-100 text-sm"><i class="fas fa-plus mr-1"></i>Add Entry</button>
            </div>

            <!-- Add DSC History Form -->
            <form method="POST" action="?id=<?= $personId ?>&action=add_dsc_history" id="addDscForm" class="hidden mb-4 p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Class</label>
                        <select name="dsc_class" class="form-input w-full text-sm">
                            <option value="CLASS_2">Class 2</option>
                            <option value="CLASS_3">Class 3</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Provider</label>
                        <input type="text" name="provider" class="form-input w-full text-sm" placeholder="e.g. eMudhra">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Token #</label>
                        <input type="text" name="token_number" class="form-input w-full text-sm font-mono">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Issue Date</label>
                        <input type="date" name="issue_date" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Expiry Date</label>
                        <input type="date" name="expiry_date" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Status</label>
                        <select name="dsc_hist_status" class="form-input w-full text-sm">
                            <option value="ACTIVE">Active</option>
                            <option value="EXPIRED">Expired</option>
                            <option value="REVOKED">Revoked</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Cost (₹)</label>
                        <input type="number" name="cost" class="form-input w-full text-sm" step="0.01" min="0">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Vendor Name</label>
                        <input type="text" name="vendor_name" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Notes</label>
                        <input type="text" name="dsc_notes" class="form-input w-full text-sm">
                    </div>
                </div>
                <div class="flex gap-3 mt-3">
                    <button type="submit" class="btn btn-primary text-sm">Add Entry</button>
                    <button type="button" onclick="document.getElementById('addDscForm').classList.add('hidden')" class="text-sm text-gray-500">Cancel</button>
                </div>
            </form>

            <?php if (empty($dscHistory)): ?>
            <p class="text-gray-400 text-center py-6">No DSC history entries yet</p>
            <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-xs text-gray-500 border-b">
                            <th class="text-left py-2 px-3">Class</th>
                            <th class="text-left py-2 px-3">Provider</th>
                            <th class="text-left py-2 px-3">Token #</th>
                            <th class="text-left py-2 px-3">Issued</th>
                            <th class="text-left py-2 px-3">Expiry</th>
                            <th class="text-left py-2 px-3">Status</th>
                            <th class="text-right py-2 px-3">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dscHistory as $dh): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-3"><?= str_replace('_',' ', $dh['dsc_class'] ?? '') ?></td>
                            <td class="py-2 px-3"><?= htmlspecialchars($dh['dsc_provider'] ?? '') ?></td>
                            <td class="py-2 px-3 font-mono text-xs"><?= htmlspecialchars($dh['dsc_token_number'] ?? '') ?></td>
                            <td class="py-2 px-3"><?= $dh['issue_date'] ? date('d M Y', strtotime($dh['issue_date'])) : '—' ?></td>
                            <td class="py-2 px-3"><?= $dh['expiry_date'] ? date('d M Y', strtotime($dh['expiry_date'])) : '—' ?></td>
                            <td class="py-2 px-3">
                                <?php
                                $dsColor = match($dh['status'] ?? '') { 'ACTIVE' => 'green', 'EXPIRED' => 'red', 'REVOKED' => 'gray', default => 'gray' };
                                ?>
                                <span class="px-2 py-0.5 rounded text-xs bg-<?= $dsColor ?>-100 text-<?= $dsColor ?>-700"><?= $dh['status'] ?? '' ?></span>
                            </td>
                            <td class="py-2 px-3 text-right font-mono"><?= $dh['cost'] ? '₹' . number_format($dh['cost']) : '—' ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- ===================== KYC TAB ===================== -->
    <div class="tab-content hidden" id="tab-kyc">
        <!-- Current KYC Status -->
        <div class="card p-5 mb-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-clipboard-check text-green-500 mr-2"></i>Current KYC Status</h3>
                <button onclick="document.getElementById('kycQuickForm').classList.toggle('hidden')" class="text-blue-600 hover:text-blue-800 text-sm"><i class="fas fa-edit mr-1"></i>Quick Update</button>
            </div>

            <?php if (!$person['din']): ?>
            <p class="text-gray-400">KYC not applicable (No DIN assigned)</p>
            <?php else: ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <p class="info-label">Status</p>
                    <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-<?= $kycInfo['color'] ?>-100 text-<?= $kycInfo['color'] ?>-700"><?= $kycInfo['label'] ?></span>
                </div>
                <div>
                    <p class="info-label">Due Date</p>
                    <p class="info-value"><?= $person['din_kyc_due_date'] ? date('d M Y', strtotime($person['din_kyc_due_date'])) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Form Type</p>
                    <p class="info-value"><?= $person['kyc_form_type'] ? str_replace('_', ' ', $person['kyc_form_type']) : '<span class="empty">—</span>' ?></p>
                </div>
                <div>
                    <p class="info-label">Last Filed</p>
                    <p class="info-value"><?= $person['last_kyc_filed_date'] ? date('d M Y', strtotime($person['last_kyc_filed_date'])) : '<span class="empty">—</span>' ?></p>
                </div>
            </div>
            <?php endif; ?>

            <form method="POST" action="?id=<?= $personId ?>&action=update_kyc" id="kycQuickForm" class="hidden mt-4 pt-4 border-t">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs text-gray-500 mb-1">Status</label>
                        <select name="kyc_status" class="form-input w-full text-sm">
                            <?php foreach (['PENDING','IN_PROGRESS','COMPLETED','OVERDUE'] as $s): ?>
                            <option value="<?= $s ?>" <?= ($person['din_kyc_status'] ?? '') === $s ? 'selected' : '' ?>><?= str_replace('_',' ',$s) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs text-gray-500 mb-1">Due Date</label>
                        <input type="date" name="kyc_date" class="form-input w-full text-sm" value="<?= $person['din_kyc_due_date'] ?? '' ?>">
                    </div>
                    <div class="flex items-end"><button type="submit" class="btn btn-primary text-sm">Save</button></div>
                </div>
            </form>
        </div>

        <!-- KYC History -->
        <div class="card p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-history text-green-500 mr-2"></i>Annual KYC Filing History</h3>
                <button onclick="document.getElementById('addKycForm').classList.toggle('hidden')" class="btn bg-green-50 text-green-700 hover:bg-green-100 text-sm"><i class="fas fa-plus mr-1"></i>Add Filing</button>
            </div>

            <form method="POST" action="?id=<?= $personId ?>&action=add_kyc_history" id="addKycForm" class="hidden mb-4 p-4 bg-green-50 rounded-lg border border-green-200">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Financial Year</label>
                        <select name="financial_year" class="form-input w-full text-sm" required>
                            <?php foreach ($fyOptions as $fy): ?>
                            <option value="<?= $fy ?>"><?= $fy ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Form Type</label>
                        <select name="kyc_form_type" class="form-input w-full text-sm">
                            <option value="DIR3_KYC">DIR-3 KYC (Full)</option>
                            <option value="DIR3_KYC_WEB">DIR-3 KYC WEB (OTP)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Filing Date</label>
                        <input type="date" name="filing_date" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">SRN</label>
                        <input type="text" name="srn" class="form-input w-full text-sm font-mono" placeholder="Service Request No.">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Acknowledgement #</label>
                        <input type="text" name="ack_number" class="form-input w-full text-sm font-mono">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Status</label>
                        <select name="kyc_hist_status" class="form-input w-full text-sm">
                            <option value="PENDING">Pending</option>
                            <option value="FILED">Filed</option>
                            <option value="COMPLETED">Completed</option>
                            <option value="OVERDUE">Overdue</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Due Date</label>
                        <input type="date" name="due_date" class="form-input w-full text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Fee Paid (₹)</label>
                        <input type="number" name="fee_paid" class="form-input w-full text-sm" step="0.01" min="0">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1">Notes</label>
                        <input type="text" name="kyc_notes" class="form-input w-full text-sm">
                    </div>
                </div>
                <div class="flex gap-3 mt-3">
                    <button type="submit" class="btn btn-primary text-sm">Add Filing</button>
                    <button type="button" onclick="document.getElementById('addKycForm').classList.add('hidden')" class="text-sm text-gray-500">Cancel</button>
                </div>
            </form>

            <?php if (empty($kycHistory)): ?>
            <p class="text-gray-400 text-center py-6">No KYC filing history yet</p>
            <?php else: ?>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-xs text-gray-500 border-b">
                            <th class="text-left py-2 px-3">FY</th>
                            <th class="text-left py-2 px-3">Form</th>
                            <th class="text-left py-2 px-3">Filed</th>
                            <th class="text-left py-2 px-3">Due</th>
                            <th class="text-left py-2 px-3">SRN</th>
                            <th class="text-left py-2 px-3">Status</th>
                            <th class="text-right py-2 px-3">Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($kycHistory as $kh): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-3 font-medium"><?= htmlspecialchars($kh['financial_year'] ?? '') ?></td>
                            <td class="py-2 px-3"><?= str_replace('_',' ', $kh['kyc_form_type'] ?? '') ?></td>
                            <td class="py-2 px-3"><?= $kh['filing_date'] ? date('d M Y', strtotime($kh['filing_date'])) : '—' ?></td>
                            <td class="py-2 px-3"><?= $kh['due_date'] ? date('d M Y', strtotime($kh['due_date'])) : '—' ?></td>
                            <td class="py-2 px-3 font-mono text-xs"><?= htmlspecialchars($kh['srn'] ?? '') ?: '—' ?></td>
                            <td class="py-2 px-3">
                                <?php
                                $kColor = match($kh['status'] ?? '') { 'COMPLETED' => 'green', 'FILED' => 'blue', 'OVERDUE' => 'red', default => 'amber' };
                                ?>
                                <span class="px-2 py-0.5 rounded text-xs bg-<?= $kColor ?>-100 text-<?= $kColor ?>-700"><?= $kh['status'] ?? '' ?></span>
                            </td>
                            <td class="py-2 px-3 text-right font-mono"><?= $kh['fee_paid'] ? '₹' . number_format($kh['fee_paid']) : '—' ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- ===================== DOCUMENTS TAB ===================== -->
    <div class="tab-content hidden" id="tab-documents">
        <div class="card p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-file-alt text-purple-500 mr-2"></i>Documents (<?= $docCount ?>)</h3>
                <a href="person_documents.php?id=<?= $personId ?>" class="btn bg-purple-50 text-purple-700 hover:bg-purple-100 text-sm"><i class="fas fa-file-upload mr-1"></i>Manage Documents</a>
            </div>

            <?php if (empty($documents)): ?>
            <div class="text-center py-10">
                <i class="fas fa-folder-open text-4xl text-gray-300 mb-3"></i>
                <p class="text-gray-400">No documents uploaded yet</p>
                <a href="person_documents.php?id=<?= $personId ?>" class="text-blue-600 hover:underline text-sm mt-2 inline-block">Upload Documents →</a>
            </div>
            <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($documents as $doc): ?>
                <div class="p-4 border rounded-lg hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div>
                                <p class="font-medium text-sm"><?= htmlspecialchars($doc['doc_type_name']) ?></p>
                                <p class="text-xs text-gray-400"><?= date('d M Y', strtotime($doc['created_at'])) ?></p>
                            </div>
                        </div>
                        <?php if ($doc['file_path']): ?>
                        <a href="<?= htmlspecialchars($doc['file_path']) ?>" target="_blank" class="text-blue-600 hover:text-blue-800"><i class="fas fa-external-link-alt"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Signature on file -->
        <?php if (!empty($person['signature_path'])): ?>
        <div class="card p-5 mt-4">
            <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-signature text-indigo-500 mr-2"></i>Signature on File</h4>
            <img src="<?= htmlspecialchars($person['signature_path']) ?>" class="h-16 border rounded bg-white px-4 py-2">
        </div>
        <?php endif; ?>
    </div>

    </div>
</div>

<script>
// --- Tab Switching ---
function showTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(t => t.classList.add('hidden'));
    document.querySelectorAll('.vtab').forEach(v => v.classList.remove('active'));
    document.getElementById('tab-' + tabId).classList.remove('hidden');
    document.querySelector(`.vtab[data-tab="${tabId}"]`).classList.add('active');
    // Update URL hash
    history.replaceState(null, '', '#' + tabId);
}

// Init from hash
document.addEventListener('DOMContentLoaded', function() {
    const hash = window.location.hash.replace('#', '') || 'overview';
    const valid = ['overview','clients','dsc','kyc','documents'];
    showTab(valid.includes(hash) ? hash : 'overview');
});

// --- Link Client Role Filtering ---
const roleMap = <?= json_encode($roleMap) ?>;
function onLinkClientChange() {
    const sel = document.getElementById('linkClientSelect');
    const entity = sel.options[sel.selectedIndex]?.dataset?.entity || '';
    const roles = roleMap[entity] || [];
    const roleSel = document.getElementById('linkRoleSelect');
    roleSel.innerHTML = '<option value="">Select role...</option>';
    roles.forEach(r => {
        const opt = document.createElement('option');
        opt.value = r;
        opt.textContent = r.replace(/_/g, ' ');
        roleSel.appendChild(opt);
    });
}
</script>

<?php require_once 'includes/footer.php'; ?>
