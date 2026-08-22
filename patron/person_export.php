<?php
/**
 * PATRON - Person Export
 * Exports persons data to CSV (opens in Excel)
 * Supports same filters as persons.php + common directors report mode
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$report = sanitize($_GET['report'] ?? 'persons');

// ============================================================
// COMMON DIRECTORS EXPORT
// ============================================================
if ($report === 'common') {
    $minClients = max(2, (int)($_GET['min'] ?? 2));
    
    $rows = dbFetchAll("
        SELECT p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email,
               p.dsc_status, p.dsc_expiry_date, p.din_kyc_status, p.din_kyc_due_date,
               COUNT(DISTINCT cp.client_id) as client_count,
               GROUP_CONCAT(DISTINCT CONCAT(c.name, ' [', cp.role_type, ']') ORDER BY c.name SEPARATOR ' | ') as client_roles
        FROM persons_new p
        JOIN client_persons cp ON cp.person_id = p.id AND cp.is_active = 1
        JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
        WHERE p.deleted_at IS NULL AND p.status = 'ACTIVE'
        GROUP BY p.id
        HAVING client_count >= ?
        ORDER BY client_count DESC, p.full_name
    ", [$minClients]) ?: [];
    
    $filename = 'common_directors_' . date('Y-m-d') . '.csv';
    $headers = ['Full Name', 'PAN', 'DIN', 'DPIN', 'Mobile', 'Email', 'DSC Status', 'DSC Expiry', 'KYC Status', 'KYC Due', 'Client Count', 'Clients & Roles'];
    
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    $out = fopen('php://output', 'w');
    // BOM for Excel UTF-8 compatibility
    fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF));
    fputcsv($out, $headers);
    
    foreach ($rows as $r) {
        fputcsv($out, [
            $r['full_name'],
            $r['pan_number'] ?? '',
            $r['din'] ?? '',
            $r['dpin'] ?? '',
            $r['mobile'] ?? '',
            $r['email'] ?? '',
            $r['dsc_status'] ?? '',
            $r['dsc_expiry_date'] ?? '',
            $r['din_kyc_status'] ?? '',
            $r['din_kyc_due_date'] ?? '',
            $r['client_count'],
            $r['client_roles'] ?? '',
        ]);
    }
    fclose($out);
    exit;
}

// ============================================================
// STANDARD PERSONS EXPORT
// ============================================================

// Apply same filters as persons.php
$roleType  = sanitize($_GET['role'] ?? '');
$kycStatus = sanitize($_GET['kyc'] ?? '');
$dscStatus = sanitize($_GET['dsc'] ?? '');
$clientId  = (int)($_GET['client'] ?? 0);
$status    = sanitize($_GET['status'] ?? '');
$search    = sanitize($_GET['search'] ?? '');

$where = ["p.deleted_at IS NULL"];
$params = [];

if ($search) { 
    $where[] = "(p.full_name LIKE ? OR p.pan_number LIKE ? OR p.din LIKE ? OR p.dpin LIKE ? OR p.mobile LIKE ? OR p.email LIKE ?)"; 
    $params = array_merge($params, array_fill(0, 6, "%$search%")); 
}
if ($clientId) {
    $where[] = "EXISTS (SELECT 1 FROM client_persons cp2 WHERE cp2.person_id = p.id AND cp2.client_id = ? AND cp2.is_active = 1)";
    $params[] = $clientId;
}
if ($roleType) {
    $where[] = "EXISTS (SELECT 1 FROM client_persons cp3 WHERE cp3.person_id = p.id AND cp3.role_type = ? AND cp3.is_active = 1)";
    $params[] = $roleType;
}
if ($kycStatus) {
    if ($kycStatus === 'not_required') $where[] = "(p.din IS NULL OR p.din = '')";
    elseif ($kycStatus === 'required') $where[] = "p.din IS NOT NULL AND p.din != ''";
    elseif ($kycStatus === 'pending') $where[] = "p.din_kyc_status = 'PENDING'";
    elseif ($kycStatus === 'overdue') $where[] = "(p.din_kyc_status = 'OVERDUE' OR (p.din_kyc_due_date IS NOT NULL AND p.din_kyc_due_date < CURDATE() AND din_kyc_status != 'COMPLETED'))";
    elseif ($kycStatus === 'completed') $where[] = "p.din_kyc_status = 'COMPLETED'";
}
if ($dscStatus) {
    if ($dscStatus === 'EXPIRING') {
        $where[] = "p.dsc_status = 'ACTIVE' AND p.dsc_expiry_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 30 DAY)";
    } else {
        $where[] = "p.dsc_status = ?";
        $params[] = $dscStatus;
    }
}
if ($status === 'active') $where[] = "p.status = 'ACTIVE'";
elseif ($status === 'inactive') $where[] = "p.status = 'INACTIVE'";

$whereClause = implode(' AND ', $where);

$persons = dbFetchAll("
    SELECT p.*,
           (SELECT GROUP_CONCAT(DISTINCT cp.role_type SEPARATOR ', ') FROM client_persons cp WHERE cp.person_id = p.id AND cp.is_active = 1) as roles,
           (SELECT GROUP_CONCAT(DISTINCT c.name SEPARATOR ' | ') FROM client_persons cp JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL WHERE cp.person_id = p.id AND cp.is_active = 1) as client_names,
           (SELECT COUNT(DISTINCT cp.client_id) FROM client_persons cp WHERE cp.person_id = p.id AND cp.is_active = 1) as client_count
    FROM persons_new p
    WHERE $whereClause
    ORDER BY p.full_name ASC
", $params) ?: [];

// Generate CSV
$filename = 'persons_export_' . date('Y-m-d') . '.csv';
$headers = [
    'Full Name', "Father's Name", 'Date of Birth', 'Gender', 'Nationality',
    'Mobile', 'Alt. Mobile', 'Email', 'Alt. Email',
    'Address',
    'Present Address Line 1', 'Present City', 'Present State', 'Present PIN', 'Present Country',
    'Permanent Address Line 1', 'Permanent City', 'Permanent State', 'Permanent PIN',
    'PAN', 'Aadhaar', 'Passport',
    'DIN', 'DIN Allotment Date', 'DPIN', 'DPIN Allotment Date',
    'Occupation', 'Qualification',
    'DSC Status', 'DSC Class', 'DSC Expiry', 'DSC Provider', 'DSC Token #',
    'KYC Status', 'KYC Due Date', 'KYC Form Type', 'Last KYC Filed', 'Last KYC SRN',
    'Status', 'Client Count', 'Roles', 'Linked Clients',
    'Created At',
];

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Expires: 0');

$out = fopen('php://output', 'w');
fprintf($out, chr(0xEF) . chr(0xBB) . chr(0xBF));
fputcsv($out, $headers);

foreach ($persons as $p) {
    fputcsv($out, [
        $p['full_name'],
        $p['father_name'] ?? '',
        $p['dob'] ?? '',
        $p['gender'] ?? '',
        $p['nationality'] ?? '',
        $p['mobile'] ?? '',
        $p['alternate_mobile'] ?? '',
        $p['email'] ?? '',
        $p['alternate_email'] ?? '',
        $p['address'] ?? '',
        $p['present_address_line1'] ?? '',
        $p['present_city'] ?? '',
        $p['present_state'] ?? '',
        $p['present_pincode'] ?? '',
        $p['present_country'] ?? '',
        $p['permanent_address_line1'] ?? '',
        $p['permanent_city'] ?? '',
        $p['permanent_state'] ?? '',
        $p['permanent_pincode'] ?? '',
        $p['pan_number'] ?? '',
        $p['aadhaar_number'] ?? '',
        $p['passport_number'] ?? '',
        $p['din'] ?? '',
        $p['din_allotment_date'] ?? '',
        $p['dpin'] ?? '',
        $p['dpin_allotment_date'] ?? '',
        $p['occupation'] ?? '',
        $p['educational_qualification'] ?? '',
        $p['dsc_status'] ?? '',
        $p['dsc_class'] ? str_replace('_', ' ', $p['dsc_class']) : '',
        $p['dsc_expiry_date'] ?? '',
        $p['dsc_provider'] ?? '',
        $p['dsc_token_number'] ?? '',
        $p['din_kyc_status'] ?? '',
        $p['din_kyc_due_date'] ?? '',
        $p['kyc_form_type'] ?? '',
        $p['last_kyc_filed_date'] ?? '',
        $p['last_kyc_srn'] ?? '',
        $p['status'] ?? '',
        $p['client_count'] ?? 0,
        $p['roles'] ? str_replace('_', ' ', $p['roles']) : '',
        $p['client_names'] ?? '',
        $p['created_at'] ?? '',
    ]);
}

fclose($out);
exit;
