<?php
/**
 * PATRON - Person Helpers
 * Shared validation, lookup, and utility functions for the persons module.
 * Include this file in any page that needs person-related logic.
 *
 * Usage: require_once 'includes/person_helpers.php';
 */

require_once __DIR__ . '/db.php';

// ====================================================================
// VALIDATION FUNCTIONS
// ====================================================================

/**
 * Validate Indian PAN format (ABCDE1234F)
 * 4th char indicates entity type: P=Person, C=Company, F=Firm, etc.
 */
function validatePAN($pan) {
    $pan = strtoupper(trim($pan));
    if (!$pan) return ['valid' => true, 'value' => '']; // Optional field

    if (!preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/', $pan)) {
        return ['valid' => false, 'value' => $pan, 'error' => 'PAN must be 10 characters: 5 letters, 4 digits, 1 letter (e.g. ABCDE1234F)'];
    }

    $entityChar = $pan[3];
    $entityTypes = [
        'P' => 'Individual', 'C' => 'Company', 'H' => 'HUF', 'F' => 'Firm',
        'A' => 'AOP/BOI', 'T' => 'Trust', 'L' => 'Local Authority',
        'J' => 'Artificial Juridical Person', 'G' => 'Government',
    ];

    return [
        'valid' => true, 'value' => $pan,
        'entity_type' => $entityTypes[$entityChar] ?? 'Unknown',
        'is_individual' => $entityChar === 'P'
    ];
}

/**
 * Validate DIN (Director Identification Number) - 8 digits
 */
function validateDIN($din) {
    $din = trim($din);
    if (!$din) return ['valid' => true, 'value' => ''];
    if (!preg_match('/^\d{8}$/', $din)) {
        return ['valid' => false, 'value' => $din, 'error' => 'DIN must be exactly 8 digits'];
    }
    return ['valid' => true, 'value' => $din];
}

/**
 * Validate DPIN (Designated Partner Identification Number) - 8 digits
 */
function validateDPIN($dpin) {
    $dpin = trim($dpin);
    if (!$dpin) return ['valid' => true, 'value' => ''];
    if (!preg_match('/^\d{8}$/', $dpin)) {
        return ['valid' => false, 'value' => $dpin, 'error' => 'DPIN must be exactly 8 digits'];
    }
    return ['valid' => true, 'value' => $dpin];
}

/**
 * Validate Aadhaar number - 12 digits, cannot start with 0 or 1
 */
function validateAadhaar($aadhaar) {
    $aadhaar = preg_replace('/[\s-]/', '', trim($aadhaar));
    if (!$aadhaar) return ['valid' => true, 'value' => ''];
    if (!preg_match('/^\d{12}$/', $aadhaar)) {
        return ['valid' => false, 'value' => $aadhaar, 'error' => 'Aadhaar must be exactly 12 digits'];
    }
    if (in_array($aadhaar[0], ['0', '1'])) {
        return ['valid' => false, 'value' => $aadhaar, 'error' => 'Aadhaar cannot start with 0 or 1'];
    }
    return ['valid' => true, 'value' => $aadhaar];
}

/**
 * Validate Indian mobile number - 10 digits starting with 6-9
 */
function validateMobile($mobile) {
    $mobile = preg_replace('/[\s\-\+]/', '', trim($mobile));
    if (!$mobile) return ['valid' => true, 'value' => ''];
    // Remove country code
    if (strlen($mobile) === 12 && str_starts_with($mobile, '91')) $mobile = substr($mobile, 2);
    if (strlen($mobile) === 13 && str_starts_with($mobile, '+91')) $mobile = substr($mobile, 3);

    if (!preg_match('/^[6-9]\d{9}$/', $mobile)) {
        return ['valid' => false, 'value' => $mobile, 'error' => 'Mobile must be 10 digits starting with 6-9'];
    }
    return ['valid' => true, 'value' => $mobile];
}

/**
 * Validate passport number (Indian format: 1 letter + 7 digits)
 */
function validatePassport($passport) {
    $passport = strtoupper(trim($passport));
    if (!$passport) return ['valid' => true, 'value' => ''];
    if (!preg_match('/^[A-Z]\d{7}$/', $passport)) {
        return ['valid' => false, 'value' => $passport, 'error' => 'Passport must be 1 letter followed by 7 digits'];
    }
    return ['valid' => true, 'value' => $passport];
}

/**
 * Validate all person fields at once. Returns array of errors (empty = valid).
 */
function validatePersonData($data, $excludePersonId = null) {
    $errors = [];

    if (empty(trim($data['full_name'] ?? ''))) {
        $errors[] = 'Full name is required';
    }

    $panResult = validatePAN($data['pan_number'] ?? '');
    if (!$panResult['valid']) $errors[] = $panResult['error'];

    $dinResult = validateDIN($data['din'] ?? '');
    if (!$dinResult['valid']) $errors[] = $dinResult['error'];

    $dpinResult = validateDPIN($data['dpin'] ?? '');
    if (!$dpinResult['valid']) $errors[] = $dpinResult['error'];

    $aadhaarResult = validateAadhaar($data['aadhaar_number'] ?? '');
    if (!$aadhaarResult['valid']) $errors[] = $aadhaarResult['error'];

    $mobileResult = validateMobile($data['mobile'] ?? '');
    if (!$mobileResult['valid']) $errors[] = $mobileResult['error'];

    $altMobileResult = validateMobile($data['alternate_mobile'] ?? '');
    if (!$altMobileResult['valid']) $errors[] = 'Alternate mobile: ' . $altMobileResult['error'];

    $passportResult = validatePassport($data['passport_number'] ?? '');
    if (!$passportResult['valid']) $errors[] = $passportResult['error'];

    $email = trim($data['email'] ?? '');
    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }

    $dob = trim($data['dob'] ?? '');
    if ($dob && $dob > date('Y-m-d')) {
        $errors[] = 'Date of birth cannot be in the future';
    }

    // Duplicate detection
    $dupes = checkDuplicatePerson(
        $panResult['value'] ?? '', $dinResult['value'] ?? '',
        $mobileResult['value'] ?? '', $data['aadhaar_number'] ?? '',
        $excludePersonId
    );
    foreach ($dupes as $dupe) $errors[] = $dupe;

    return $errors;
}


// ====================================================================
// DUPLICATE DETECTION
// ====================================================================

/**
 * Check for duplicate persons by PAN, DIN, mobile, or Aadhaar.
 */
function checkDuplicatePerson($pan, $din, $mobile, $aadhaar, $excludeId = null) {
    $warnings = [];
    $excl = $excludeId ? " AND id != ?" : "";
    $base = $excludeId ? [$excludeId] : [];

    if ($pan) {
        $existing = dbFetchOne("SELECT id, full_name FROM persons_new WHERE pan_number = ? AND deleted_at IS NULL $excl", array_merge([$pan], $base));
        if ($existing) $warnings[] = "PAN {$pan} already belongs to \"{$existing['full_name']}\" (ID: {$existing['id']})";
    }
    if ($din) {
        $existing = dbFetchOne("SELECT id, full_name FROM persons_new WHERE din = ? AND deleted_at IS NULL $excl", array_merge([$din], $base));
        if ($existing) $warnings[] = "DIN {$din} already belongs to \"{$existing['full_name']}\" (ID: {$existing['id']})";
    }
    $aadhaar = preg_replace('/[\s-]/', '', $aadhaar ?? '');
    if ($aadhaar && strlen($aadhaar) === 12) {
        $existing = dbFetchOne("SELECT id, full_name FROM persons_new WHERE aadhaar_number = ? AND deleted_at IS NULL $excl", array_merge([$aadhaar], $base));
        if ($existing) $warnings[] = "Aadhaar already belongs to \"{$existing['full_name']}\" (ID: {$existing['id']})";
    }
    return $warnings;
}

/**
 * AJAX endpoint: check duplicate on the fly from add/edit person forms.
 * Expects GET: ajax=check_duplicate, field=pan|din|aadhaar|mobile, value=..., exclude_id=...
 */
function handleDuplicateCheckAjax() {
    if (($_GET['ajax'] ?? '') !== 'check_duplicate') return false;
    header('Content-Type: application/json');

    $field = sanitize($_GET['field'] ?? '');
    $value = sanitize($_GET['value'] ?? '');
    $excludeId = (int)($_GET['exclude_id'] ?? 0);
    if (!$field || !$value) { echo json_encode(['duplicate' => false]); exit; }

    $colMap = ['pan' => 'pan_number', 'din' => 'din', 'dpin' => 'dpin', 'aadhaar' => 'aadhaar_number', 'mobile' => 'mobile'];
    $column = $colMap[$field] ?? null;
    if (!$column) { echo json_encode(['duplicate' => false]); exit; }

    $excl = $excludeId ? " AND id != ?" : "";
    $params = $excludeId ? [$value, $excludeId] : [$value];
    $existing = dbFetchOne("SELECT id, full_name, pan_number, din FROM persons_new WHERE {$column} = ? AND deleted_at IS NULL $excl", $params);

    echo json_encode($existing
        ? ['duplicate' => true, 'person_id' => $existing['id'], 'person_name' => $existing['full_name'], 'message' => ucfirst($field) . " already belongs to \"{$existing['full_name']}\""]
        : ['duplicate' => false]
    );
    exit;
}


// ====================================================================
// PERSON DATA FUNCTIONS
// ====================================================================

function getPersonById($personId) {
    return dbFetchOne("SELECT * FROM persons_new WHERE id = ? AND deleted_at IS NULL", [(int)$personId]);
}

function getPersonLinkedClients($personId) {
    return dbFetchAll("
        SELECT c.id, c.name, c.entity_type, c.pan, c.status AS client_status,
               cp.id AS link_id, cp.role_type, cp.designation, cp.director_category,
               cp.appointment_date, cp.cessation_date, cp.original_appointment_date,
               cp.no_of_shares, cp.share_percentage, cp.shareholding_percent,
               cp.share_type, cp.face_value_per_share,
               cp.capital_contribution, cp.profit_sharing_ratio,
               cp.share_certificate_no, cp.folio_number,
               cp.is_active AS link_active, cp.cessation_reason, cp.notes AS link_notes,
               cp.created_at AS linked_at
        FROM client_persons cp
        JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
        WHERE cp.person_id = ?
        ORDER BY cp.is_active DESC, c.name
    ", [(int)$personId]) ?: [];
}

function getPersonDocuments($personId) {
    return dbFetchAll("
        SELECT cd.*, dt.name AS doc_type_name, dt.code AS doc_type_code, dt.category AS doc_category,
               u.display_name AS uploaded_by_name
        FROM client_documents cd
        LEFT JOIN document_types dt ON cd.document_type_id = dt.id
        LEFT JOIN users u ON cd.uploaded_by = u.id
        WHERE cd.person_id = ? AND cd.deleted_at IS NULL
        ORDER BY cd.created_at DESC
    ", [(int)$personId]) ?: [];
}

function getPersonDocumentCount($personId) {
    $r = dbFetchOne("SELECT COUNT(*) AS cnt FROM client_documents WHERE person_id = ? AND deleted_at IS NULL", [(int)$personId]);
    return $r['cnt'] ?? 0;
}

function getPersonDSCHistory($personId) {
    return dbFetchAll("
        SELECT pdh.*, u.display_name AS applied_by_name
        FROM person_dsc_history pdh
        LEFT JOIN users u ON pdh.applied_by = u.id
        WHERE pdh.person_id = ?
        ORDER BY pdh.expiry_date DESC
    ", [(int)$personId]) ?: [];
}

function getPersonKYCHistory($personId) {
    return dbFetchAll("
        SELECT pkh.*, u.display_name AS filed_by_name
        FROM person_kyc_history pkh
        LEFT JOIN users u ON pkh.filed_by = u.id
        WHERE pkh.person_id = ?
        ORDER BY pkh.financial_year DESC
    ", [(int)$personId]) ?: [];
}

function getClientPersons($clientId, $activeOnly = false) {
    $act = $activeOnly ? " AND cp.is_active = 1" : "";
    return dbFetchAll("
        SELECT p.id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email,
               p.dob, p.gender, p.nationality, p.photo_path,
               p.dsc_status, p.dsc_expiry_date, p.din_kyc_status, p.din_kyc_due_date,
               p.status AS person_status,
               cp.id AS link_id, cp.role_type, cp.designation, cp.director_category,
               cp.appointment_date, cp.cessation_date,
               cp.no_of_shares, cp.share_percentage, cp.shareholding_percent,
               cp.share_type, cp.face_value_per_share,
               cp.capital_contribution, cp.profit_sharing_ratio,
               cp.is_active AS link_active, cp.cessation_reason, cp.display_order
        FROM client_persons cp
        JOIN persons_new p ON cp.person_id = p.id AND p.deleted_at IS NULL
        WHERE cp.client_id = ? $act
        ORDER BY cp.display_order, cp.is_active DESC, p.full_name
    ", [(int)$clientId]) ?: [];
}


// ====================================================================
// STATUS CALCULATION FUNCTIONS
// ====================================================================

function getDSCStatusInfo($person) {
    $status = $person['dsc_status'] ?? 'NOT_REQUIRED';
    $expiry = $person['dsc_expiry_date'] ?? null;

    if ($status === 'NOT_REQUIRED' || !$status) return ['status'=>'NOT_REQUIRED','label'=>'Not Required','color'=>'gray','days_left'=>null,'urgent'=>false];
    if ($status === 'APPLIED') return ['status'=>'APPLIED','label'=>'Applied','color'=>'blue','days_left'=>null,'urgent'=>false];
    if ($status === 'REQUIRED') return ['status'=>'REQUIRED','label'=>'Required','color'=>'orange','days_left'=>null,'urgent'=>true];

    if ($expiry) {
        $today = new DateTime(); $exp = new DateTime($expiry);
        $daysLeft = $exp > $today ? (int)$today->diff($exp)->days : -(int)$today->diff($exp)->days;

        if ($daysLeft < 0) return ['status'=>'EXPIRED','label'=>'Expired','color'=>'red','days_left'=>$daysLeft,'urgent'=>true];
        if ($daysLeft <= 7) return ['status'=>'EXPIRING_SOON','label'=>"Expiring in {$daysLeft}d",'color'=>'red','days_left'=>$daysLeft,'urgent'=>true];
        if ($daysLeft <= 30) return ['status'=>'EXPIRING_SOON','label'=>"Expiring in {$daysLeft}d",'color'=>'orange','days_left'=>$daysLeft,'urgent'=>true];
        return ['status'=>'ACTIVE','label'=>'Active','color'=>'green','days_left'=>$daysLeft,'urgent'=>false];
    }

    if ($status === 'ACTIVE') return ['status'=>'ACTIVE','label'=>'Active (no expiry set)','color'=>'yellow','days_left'=>null,'urgent'=>false];
    return ['status'=>$status,'label'=>str_replace('_',' ',$status),'color'=>'gray','days_left'=>null,'urgent'=>false];
}

function getKYCStatusInfo($person) {
    $din = trim($person['din'] ?? '');
    if (!$din) return ['status'=>'NOT_APPLICABLE','label'=>'N/A','color'=>'gray','days_left'=>null,'urgent'=>false];

    $kycStatus = $person['din_kyc_status'] ?? 'PENDING';
    $dueDate = $person['din_kyc_due_date'] ?? null;

    if ($kycStatus === 'COMPLETED') return ['status'=>'COMPLETED','label'=>'Filed','color'=>'green','days_left'=>null,'urgent'=>false];
    if ($kycStatus === 'IN_PROGRESS') return ['status'=>'IN_PROGRESS','label'=>'In Progress','color'=>'blue','days_left'=>null,'urgent'=>false];

    if ($dueDate) {
        $today = new DateTime(); $due = new DateTime($dueDate);
        $daysLeft = $due > $today ? (int)$today->diff($due)->days : -(int)$today->diff($due)->days;

        if ($daysLeft < 0) return ['status'=>'OVERDUE','label'=>'Overdue by '.abs($daysLeft).'d','color'=>'red','days_left'=>$daysLeft,'urgent'=>true];
        if ($daysLeft <= 15) return ['status'=>'DUE_SOON','label'=>"Due in {$daysLeft}d",'color'=>'orange','days_left'=>$daysLeft,'urgent'=>true];
        if ($daysLeft <= 30) return ['status'=>'UPCOMING','label'=>"Due in {$daysLeft}d",'color'=>'yellow','days_left'=>$daysLeft,'urgent'=>false];
        return ['status'=>'PENDING','label'=>'Pending','color'=>'gray','days_left'=>$daysLeft,'urgent'=>false];
    }

    return ['status'=>'PENDING','label'=>'Pending','color'=>'yellow','days_left'=>null,'urgent'=>false];
}

function getNextKYCDueDate($person) {
    if (!trim($person['din'] ?? '')) return null;
    $yr = (int)date('Y');
    $mo = (int)date('m');
    return (($mo > 9) ? $yr + 1 : $yr) . '-09-30';
}

function getCurrentFinancialYear($date = null) {
    $d = $date ? new DateTime($date) : new DateTime();
    $y = (int)$d->format('Y'); $m = (int)$d->format('m');
    return ($m < 4) ? ($y-1).'-'.substr($y,2) : $y.'-'.substr($y+1,2);
}


// ====================================================================
// DISPLAY / FORMATTING HELPERS
// ====================================================================

function calculateAge($dob) {
    if (!$dob) return null;
    try { return (new DateTime())->diff(new DateTime($dob))->y; } catch (Exception $e) { return null; }
}

function formatPersonName($person, $includeTitle = false) {
    $name = $person['full_name'] ?? '';
    if (!$includeTitle) return $name;
    $g = strtolower($person['gender'] ?? '');
    return ($g === 'male' ? 'Mr. ' : ($g === 'female' ? 'Ms. ' : '')) . $name;
}

function getPersonInitials($fullName) {
    $parts = explode(' ', trim($fullName));
    return count($parts) >= 2
        ? strtoupper(mb_substr($parts[0],0,1).mb_substr(end($parts),0,1))
        : strtoupper(mb_substr($fullName,0,2));
}

function getPersonAvatarHTML($person, $size = 'md') {
    $sizes = ['sm'=>'w-8 h-8 text-xs','md'=>'w-10 h-10 text-sm','lg'=>'w-14 h-14 text-lg','xl'=>'w-20 h-20 text-2xl'];
    $cls = $sizes[$size] ?? $sizes['md'];
    $name = htmlspecialchars($person['full_name'] ?? '');

    if (!empty($person['photo_path']) && file_exists($person['photo_path'])) {
        return "<img src=\"".htmlspecialchars($person['photo_path'])."\" alt=\"{$name}\" class=\"{$cls} rounded-full object-cover\">";
    }

    $initials = getPersonInitials($person['full_name'] ?? '?');
    $palettes = ['bg-blue-100 text-blue-700','bg-purple-100 text-purple-700','bg-green-100 text-green-700',
                 'bg-amber-100 text-amber-700','bg-pink-100 text-pink-700','bg-indigo-100 text-indigo-700'];
    $color = $palettes[abs(crc32($person['full_name'] ?? '')) % count($palettes)];
    return "<div class=\"{$cls} {$color} rounded-full flex items-center justify-center font-bold\" title=\"{$name}\">{$initials}</div>";
}

function maskAadhaar($aadhaar) {
    if (!$aadhaar || strlen($aadhaar) !== 12) return $aadhaar;
    return 'XXXX XXXX ' . substr($aadhaar, 8);
}

function getRoleLabel($roleType) {
    $labels = [
        'DIRECTOR'=>'Director','MANAGING_DIRECTOR'=>'Managing Director','WHOLE_TIME_DIRECTOR'=>'Whole-Time Director',
        'INDEPENDENT_DIRECTOR'=>'Independent Director','NOMINEE_DIRECTOR'=>'Nominee Director',
        'DESIGNATED_PARTNER'=>'Designated Partner','PARTNER'=>'Partner',
        'SHAREHOLDER'=>'Shareholder','PROMOTER'=>'Promoter','AUTHORIZED_SIGNATORY'=>'Authorized Signatory',
        'PROPRIETOR'=>'Proprietor','NOMINEE'=>'Nominee',
        'KARTA'=>'Karta','COPARCENER'=>'Coparcener','MEMBER'=>'Member',
        'TRUSTEE'=>'Trustee','MANAGING_TRUSTEE'=>'Managing Trustee','SETTLER'=>'Settler',
        'PRESIDENT'=>'President','SECRETARY'=>'Secretary','TREASURER'=>'Treasurer',
    ];
    return $labels[$roleType] ?? str_replace('_',' ',ucwords(strtolower($roleType??''),'_'));
}

function getRoleColor($roleType) {
    $c = [
        'DIRECTOR'=>'blue','MANAGING_DIRECTOR'=>'blue','WHOLE_TIME_DIRECTOR'=>'blue',
        'INDEPENDENT_DIRECTOR'=>'sky','NOMINEE_DIRECTOR'=>'slate',
        'DESIGNATED_PARTNER'=>'indigo','PARTNER'=>'green',
        'SHAREHOLDER'=>'purple','PROMOTER'=>'violet','AUTHORIZED_SIGNATORY'=>'cyan',
        'PROPRIETOR'=>'amber','NOMINEE'=>'gray',
        'KARTA'=>'orange','COPARCENER'=>'amber','MEMBER'=>'teal',
        'TRUSTEE'=>'pink','MANAGING_TRUSTEE'=>'rose','SETTLER'=>'fuchsia',
        'PRESIDENT'=>'emerald','SECRETARY'=>'lime','TREASURER'=>'yellow',
    ];
    return $c[$roleType] ?? 'gray';
}

function getRoleBadgeHTML($roleType) {
    $l = getRoleLabel($roleType); $c = getRoleColor($roleType);
    return "<span class=\"px-2 py-0.5 bg-{$c}-100 text-{$c}-700 rounded-full text-xs font-medium\">{$l}</span>";
}

function getDSCBadgeHTML($person) {
    $i = getDSCStatusInfo($person);
    $icon = match($i['status']) { 'ACTIVE'=>'fa-check-circle','EXPIRED','EXPIRING_SOON'=>'fa-exclamation-circle','APPLIED'=>'fa-spinner','REQUIRED'=>'fa-exclamation-triangle',default=>'fa-minus-circle' };
    return "<span class=\"inline-flex items-center gap-1 px-2 py-0.5 bg-{$i['color']}-100 text-{$i['color']}-700 rounded-full text-xs font-medium\"><i class=\"fas {$icon}\"></i>{$i['label']}</span>";
}

function getKYCBadgeHTML($person) {
    $i = getKYCStatusInfo($person);
    $icon = match($i['status']) { 'COMPLETED'=>'fa-check-circle','OVERDUE'=>'fa-exclamation-circle','DUE_SOON','UPCOMING'=>'fa-clock','IN_PROGRESS'=>'fa-spinner','NOT_APPLICABLE'=>'fa-minus-circle',default=>'fa-hourglass-half' };
    return "<span class=\"inline-flex items-center gap-1 px-2 py-0.5 bg-{$i['color']}-100 text-{$i['color']}-700 rounded-full text-xs font-medium\"><i class=\"fas {$icon}\"></i>{$i['label']}</span>";
}


// ====================================================================
// ENTITY-TYPE AWARE ROLE HELPERS
// ====================================================================

function getApplicableRoles($entityType) {
    $map = [
        'PVT_LTD'       => ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR','SHAREHOLDER','PROMOTER','AUTHORIZED_SIGNATORY'],
        'PRIVATE_LIMITED'=> ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR','SHAREHOLDER','PROMOTER','AUTHORIZED_SIGNATORY'],
        'OPC'           => ['DIRECTOR','SHAREHOLDER','NOMINEE','AUTHORIZED_SIGNATORY'],
        'PUBLIC_LTD'    => ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR','SHAREHOLDER','PROMOTER','AUTHORIZED_SIGNATORY'],
        'LLP'           => ['DESIGNATED_PARTNER','PARTNER','AUTHORIZED_SIGNATORY'],
        'PARTNERSHIP'   => ['PARTNER','AUTHORIZED_SIGNATORY'],
        'PROPRIETORSHIP'=> ['PROPRIETOR','AUTHORIZED_SIGNATORY'],
        'HUF'           => ['KARTA','COPARCENER','MEMBER'],
        'TRUST'         => ['TRUSTEE','MANAGING_TRUSTEE','SETTLER','MEMBER'],
        'SOCIETY'       => ['PRESIDENT','SECRETARY','TREASURER','MEMBER'],
        'SECTION_8'     => ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','AUTHORIZED_SIGNATORY'],
        'AOP'           => ['MEMBER','AUTHORIZED_SIGNATORY'],
    ];
    return $map[$entityType] ?? ['DIRECTOR','SHAREHOLDER','PARTNER','MEMBER','AUTHORIZED_SIGNATORY'];
}

function isDINRequired($roleType) {
    return in_array($roleType, ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR']);
}

function isDPINRequired($roleType) {
    return $roleType === 'DESIGNATED_PARTNER';
}

function isDSCRelevant($roleType) {
    return in_array($roleType, ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR','DESIGNATED_PARTNER']);
}

function isShareholdingRole($roleType) {
    return in_array($roleType, ['SHAREHOLDER','PROMOTER','NOMINEE']);
}

function isContributionRole($roleType) {
    return in_array($roleType, ['PARTNER','DESIGNATED_PARTNER']);
}


// ====================================================================
// AGGREGATE / REPORT HELPERS
// ====================================================================

function getCommonDirectors($minClients = 2) {
    return dbFetchAll("
        SELECT p.id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile,
               p.dsc_status, p.dsc_expiry_date, p.din_kyc_status,
               COUNT(DISTINCT cp.client_id) AS client_count,
               GROUP_CONCAT(DISTINCT c.name ORDER BY c.name SEPARATOR ', ') AS client_names,
               GROUP_CONCAT(DISTINCT cp.role_type ORDER BY cp.role_type SEPARATOR ', ') AS role_types
        FROM persons_new p
        JOIN client_persons cp ON p.id = cp.person_id AND cp.is_active = 1
        JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
        WHERE p.deleted_at IS NULL
        GROUP BY p.id HAVING client_count >= ?
        ORDER BY client_count DESC, p.full_name
    ", [$minClients]) ?: [];
}

function getDSCExpiryAlerts() {
    $t = date('Y-m-d'); $w = date('Y-m-d', strtotime('+7 days')); $m = date('Y-m-d', strtotime('+30 days'));
    return dbFetchOne("
        SELECT SUM(dsc_expiry_date < ?) AS expired,
               SUM(dsc_expiry_date BETWEEN ? AND ?) AS expiring_7d,
               SUM(dsc_expiry_date BETWEEN ? AND ?) AS expiring_30d
        FROM persons_new WHERE deleted_at IS NULL AND dsc_status = 'ACTIVE'
    ", [$t, $t, $w, $t, $m]) ?: ['expired'=>0,'expiring_7d'=>0,'expiring_30d'=>0];
}

function getKYCAlerts() {
    $t = date('Y-m-d');
    return dbFetchOne("
        SELECT SUM(din_kyc_due_date < ? AND din_kyc_status NOT IN ('COMPLETED','IN_PROGRESS')) AS overdue,
               SUM(din_kyc_status = 'PENDING' OR (din_kyc_status IS NULL AND din IS NOT NULL AND din != '')) AS pending,
               SUM(din_kyc_status = 'IN_PROGRESS') AS in_progress
        FROM persons_new WHERE deleted_at IS NULL AND din IS NOT NULL AND din != ''
    ", [$t]) ?: ['overdue'=>0,'pending'=>0,'in_progress'=>0];
}

function getUpcomingBirthdays($daysAhead = 7) {
    return dbFetchAll("
        SELECT p.id, p.full_name, p.dob, p.mobile, p.email, p.photo_path,
               TIMESTAMPDIFF(YEAR, p.dob, CURDATE()) AS age,
               DATE_FORMAT(p.dob, '%d %b') AS birthday_display,
               DATEDIFF(
                   DATE_ADD(p.dob, INTERVAL (YEAR(CURDATE()) - YEAR(p.dob) +
                       IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(p.dob), 1, 0)) YEAR),
                   CURDATE()
               ) AS days_until
        FROM persons_new p
        WHERE p.deleted_at IS NULL AND p.status = 'ACTIVE' AND p.dob IS NOT NULL
          AND DATEDIFF(
                DATE_ADD(p.dob, INTERVAL (YEAR(CURDATE()) - YEAR(p.dob) +
                    IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(p.dob), 1, 0)) YEAR),
                CURDATE()) BETWEEN 0 AND ?
        ORDER BY days_until
    ", [$daysAhead]) ?: [];
}


// ====================================================================
// PHOTO / SIGNATURE UPLOAD
// ====================================================================

function uploadPersonImage($personId, $fieldName, $file) {
    $allowed = ['image/jpeg','image/jpg','image/png'];
    if ($file['error'] !== UPLOAD_ERR_OK) return ['success'=>false,'error'=>'Upload error'];
    if (!in_array($file['type'], $allowed)) return ['success'=>false,'error'=>'Only JPG/PNG allowed'];
    if ($file['size'] > 2*1024*1024) return ['success'=>false,'error'=>'Max 2MB'];

    $dir = 'uploads/persons/' . $personId . '/';
    if (!is_dir($dir)) mkdir($dir, 0755, true);

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $path = $dir . $fieldName . '_' . date('Ymd_His') . '.' . $ext;

    if (!move_uploaded_file($file['tmp_name'], $path)) return ['success'=>false,'error'=>'Save failed'];

    $col = ($fieldName === 'photo') ? 'photo_path' : 'signature_path';
    dbExecute("UPDATE persons_new SET {$col} = ?, updated_at = NOW() WHERE id = ?", [$path, $personId]);
    return ['success'=>true,'path'=>$path];
}


// ====================================================================
// DROPDOWN OPTIONS
// ====================================================================

function getIndianStates() {
    return [
        'Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat',
        'Haryana','Himachal Pradesh','Jharkhand','Karnataka','Kerala','Madhya Pradesh',
        'Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Punjab',
        'Rajasthan','Sikkim','Tamil Nadu','Telangana','Tripura','Uttar Pradesh',
        'Uttarakhand','West Bengal',
        'Andaman and Nicobar Islands','Chandigarh','Dadra and Nagar Haveli and Daman and Diu',
        'Delhi','Jammu and Kashmir','Ladakh','Lakshadweep','Puducherry',
    ];
}

function getOccupationOptions() {
    return [
        'Business'=>'Business','Professional'=>'Professional',
        'Service - Private'=>'Service - Private','Service - Government'=>'Service - Government',
        'Self Employed'=>'Self Employed','Homemaker'=>'Homemaker',
        'Student'=>'Student','Retired'=>'Retired','Agriculture'=>'Agriculture','Others'=>'Others',
    ];
}

function getQualificationOptions() {
    return ['Below Matriculation','Matriculation (10th)','Higher Secondary (12th)','Graduate',
            'Post Graduate','Professional (CA/CS/CMA/LLB)','Doctorate (PhD)','Others'];
}
