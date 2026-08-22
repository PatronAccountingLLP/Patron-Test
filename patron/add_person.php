<?php
/**
 * PATRON - Add Person (v2)
 * Tabbed form with all person fields, AJAX duplicate detection,
 * entity-aware role filtering, photo/signature upload
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$pageTitle = 'Add Person';

// Get clients for linking
$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];
$preClientId = (int)($_GET['client_id'] ?? 0);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // --- Collect all fields ---
    $fullName       = sanitize($_POST['full_name'] ?? '');
    $fatherName     = sanitize($_POST['father_name'] ?? '');
    $dob            = sanitize($_POST['dob'] ?? '');
    $gender         = strtoupper(sanitize($_POST['gender'] ?? ''));
    $nationality    = sanitize($_POST['nationality'] ?? 'INDIAN');
    $isResident     = (int)($_POST['is_indian_resident'] ?? 1);
    $countryRes     = sanitize($_POST['country_of_residence'] ?? '');
    $occupation     = sanitize($_POST['occupation'] ?? '');
    $qualification  = sanitize($_POST['educational_qualification'] ?? '');

    $mobile         = sanitize($_POST['mobile'] ?? '');
    $altMobile      = sanitize($_POST['alternate_mobile'] ?? '');
    $email          = sanitize($_POST['email'] ?? '');
    $altEmail       = sanitize($_POST['alternate_email'] ?? '');
    $address        = sanitize($_POST['address'] ?? '');

    // Present address
    $presAddr1   = sanitize($_POST['present_address_line1'] ?? '');
    $presAddr2   = sanitize($_POST['present_address_line2'] ?? '');
    $presCity    = sanitize($_POST['present_city'] ?? '');
    $presState   = sanitize($_POST['present_state'] ?? '');
    $presPincode = sanitize($_POST['present_pincode'] ?? '');
    $presCountry = sanitize($_POST['present_country'] ?? 'India');

    // Permanent address
    $sameAsPresent = (int)($_POST['same_as_present'] ?? 0);
    $permAddr1   = $sameAsPresent ? $presAddr1 : sanitize($_POST['permanent_address_line1'] ?? '');
    $permAddr2   = $sameAsPresent ? $presAddr2 : sanitize($_POST['permanent_address_line2'] ?? '');
    $permCity    = $sameAsPresent ? $presCity : sanitize($_POST['permanent_city'] ?? '');
    $permState   = $sameAsPresent ? $presState : sanitize($_POST['permanent_state'] ?? '');
    $permPincode = $sameAsPresent ? $presPincode : sanitize($_POST['permanent_pincode'] ?? '');
    $permCountry = $sameAsPresent ? $presCountry : sanitize($_POST['permanent_country'] ?? 'India');

    // Identity
    $pan        = strtoupper(sanitize($_POST['pan_number'] ?? ''));
    $aadhaar    = preg_replace('/[\s-]/', '', sanitize($_POST['aadhaar_number'] ?? ''));
    $passport   = strtoupper(sanitize($_POST['passport_number'] ?? ''));
    $din        = sanitize($_POST['din'] ?? '');
    $dinDate    = sanitize($_POST['din_allotment_date'] ?? '');
    $dpin       = sanitize($_POST['dpin'] ?? '');
    $dpinDate   = sanitize($_POST['dpin_allotment_date'] ?? '');

    // DSC
    $dscStatus  = sanitize($_POST['dsc_status'] ?? 'NOT_REQUIRED');
    $dscClass   = sanitize($_POST['dsc_class'] ?? '');
    $dscToken   = sanitize($_POST['dsc_token_number'] ?? '');
    $dscExpiry  = sanitize($_POST['dsc_expiry_date'] ?? '');
    $dscPwd     = sanitize($_POST['dsc_password'] ?? '');
    $dscHint    = sanitize($_POST['dsc_password_hint'] ?? '');
    $dscProv    = sanitize($_POST['dsc_provider'] ?? '');

    // KYC
    $kycStatus  = sanitize($_POST['din_kyc_status'] ?? 'PENDING');
    $kycDue     = sanitize($_POST['din_kyc_due_date'] ?? '');
    $kycForm    = sanitize($_POST['kyc_form_type'] ?? '');
    $lastKycDate = sanitize($_POST['last_kyc_filed_date'] ?? '');
    $lastKycSrn = sanitize($_POST['last_kyc_srn'] ?? '');

    // Notes
    $notes      = sanitize($_POST['internal_notes'] ?? '');

    // Client linking
    $linkClientId   = (int)($_POST['link_client_id'] ?? 0);
    $linkRole       = sanitize($_POST['link_role'] ?? '');
    $linkDesignation = sanitize($_POST['link_designation'] ?? '');
    $linkDirCategory = sanitize($_POST['link_director_category'] ?? '');
    $linkApptDate   = sanitize($_POST['link_appointment_date'] ?? '');
    $linkOrigAppt   = sanitize($_POST['link_original_appointment_date'] ?? '');
    $linkShares     = ($_POST['link_no_of_shares'] ?? '') !== '' ? (int)$_POST['link_no_of_shares'] : null;
    $linkSharePct   = ($_POST['link_share_percentage'] ?? '') !== '' ? (float)$_POST['link_share_percentage'] : null;
    $linkShareType  = sanitize($_POST['link_share_type'] ?? 'EQUITY');
    $linkFaceValue  = ($_POST['link_face_value_per_share'] ?? '') !== '' ? (float)$_POST['link_face_value_per_share'] : 10.00;
    $linkCapContr   = ($_POST['link_capital_contribution'] ?? '') !== '' ? (float)$_POST['link_capital_contribution'] : null;
    $linkProfitRatio = ($_POST['link_profit_sharing_ratio'] ?? '') !== '' ? (float)$_POST['link_profit_sharing_ratio'] : null;

    // --- Validate ---
    $errors = validatePersonData($_POST);

    if (empty($errors)) {
        dbExecute("INSERT INTO persons_new (
                full_name, father_name, dob, gender, nationality, is_indian_resident, country_of_residence,
                occupation, educational_qualification,
                mobile, alternate_mobile, email, alternate_email, address,
                present_address_line1, present_address_line2, present_city, present_state, present_pincode, present_country,
                permanent_address_line1, permanent_address_line2, permanent_city, permanent_state, permanent_pincode, permanent_country,
                same_as_present,
                pan_number, aadhaar_number, passport_number,
                din, din_allotment_date, dpin, dpin_allotment_date,
                dsc_status, dsc_class, dsc_token_number, dsc_expiry_date, dsc_password, dsc_password_hint, dsc_provider,
                din_kyc_status, din_kyc_due_date, kyc_form_type, last_kyc_filed_date, last_kyc_srn,
                internal_notes, status, created_at
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())", [
            $fullName, $fatherName ?: null, $dob ?: null, $gender ?: null,
            $nationality, $isResident, $countryRes ?: null,
            $occupation ?: null, $qualification ?: null,
            $mobile ?: null, $altMobile ?: null, $email ?: null, $altEmail ?: null, $address ?: null,
            $presAddr1 ?: null, $presAddr2 ?: null, $presCity ?: null, $presState ?: null, $presPincode ?: null, $presCountry,
            $permAddr1 ?: null, $permAddr2 ?: null, $permCity ?: null, $permState ?: null, $permPincode ?: null, $permCountry,
            $sameAsPresent,
            $pan ?: null, $aadhaar ?: null, $passport ?: null,
            $din ?: null, $dinDate ?: null, $dpin ?: null, $dpinDate ?: null,
            $dscStatus, $dscClass ?: null, $dscToken ?: null, $dscExpiry ?: null, $dscPwd ?: null, $dscHint ?: null, $dscProv ?: null,
            $kycStatus, $kycDue ?: null, $kycForm ?: null, $lastKycDate ?: null, $lastKycSrn ?: null,
            $notes ?: null, 'ACTIVE'
        ]);

        $personId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];

        // Photo upload
        if (!empty($_FILES['photo']['name']) && $personId) {
            uploadPersonImage($personId, 'photo', $_FILES['photo']);
        }
        // Signature upload
        if (!empty($_FILES['signature']['name']) && $personId) {
            uploadPersonImage($personId, 'signature', $_FILES['signature']);
        }

        // Link to client
        if ($linkClientId && $linkRole && $personId) {
            dbExecute("INSERT INTO client_persons (
                    client_id, person_id, role_type, designation, director_category,
                    appointment_date, original_appointment_date,
                    no_of_shares, share_percentage, share_type, face_value_per_share,
                    capital_contribution, profit_sharing_ratio,
                    is_active, created_at
                ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,1,NOW())", [
                $linkClientId, $personId, $linkRole,
                $linkDesignation ?: null, $linkDirCategory ?: null,
                $linkApptDate ?: null, $linkOrigAppt ?: null,
                $linkShares, $linkSharePct, $linkShareType, $linkFaceValue,
                $linkCapContr, $linkProfitRatio
            ]);
        }

        setFlash('success', 'Person created successfully.');
        header('Location: person_view.php?id=' . $personId);
        exit;
    } else {
        setFlash('error', implode('<br>', $errors));
    }
}

// Helper: get value from POST (for form repopulation)
function pv($key, $default = '') {
    return htmlspecialchars($_POST[$key] ?? $default);
}
function ps($key, $value) {
    return ($_POST[$key] ?? '') === $value ? 'selected' : '';
}

$states = getIndianStates();
$occupations = getOccupationOptions();
$qualifications = getQualificationOptions();

// Build role map for JS
$roleMap = [];
foreach ($clients as $c) {
    $roleMap[$c['entity_type']] = getApplicableRoles($c['entity_type']);
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="persons.php" class="hover:text-blue-600">Persons</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Add New</span>
        </div>
        <h2 class="text-2xl font-bold text-gray-900">Add Person</h2>
    </div>
</div>

<!-- Duplicate Alert Banner (hidden by default) -->
<div id="duplicateAlert" class="hidden mb-4 p-4 bg-amber-50 border border-amber-300 rounded-lg">
    <div class="flex items-start gap-3">
        <i class="fas fa-exclamation-triangle text-amber-500 mt-0.5"></i>
        <div>
            <h4 class="font-semibold text-amber-800">Possible Duplicate Found</h4>
            <p id="duplicateMsg" class="text-sm text-amber-700 mt-1"></p>
            <a id="duplicateLink" href="#" class="text-sm text-blue-600 hover:underline mt-1 inline-block" target="_blank">View existing person →</a>
        </div>
        <button onclick="document.getElementById('duplicateAlert').classList.add('hidden')" class="ml-auto text-amber-500 hover:text-amber-700"><i class="fas fa-times"></i></button>
    </div>
</div>

<form method="POST" enctype="multipart/form-data">
<div class="card overflow-hidden">
    <!-- Tab Navigation -->
    <div class="border-b bg-gray-50">
        <nav class="flex -mb-px overflow-x-auto" id="formTabs">
            <button type="button" onclick="switchTab('basic')" class="tab-btn active px-6 py-3 text-sm font-medium border-b-2 whitespace-nowrap" data-tab="basic">
                <i class="fas fa-user mr-2"></i>Basic Info
            </button>
            <button type="button" onclick="switchTab('contact')" class="tab-btn px-6 py-3 text-sm font-medium border-b-2 whitespace-nowrap" data-tab="contact">
                <i class="fas fa-phone mr-2"></i>Contact & Address
            </button>
            <button type="button" onclick="switchTab('identity')" class="tab-btn px-6 py-3 text-sm font-medium border-b-2 whitespace-nowrap" data-tab="identity">
                <i class="fas fa-id-card mr-2"></i>Identity & DSC/KYC
            </button>
            <button type="button" onclick="switchTab('client')" class="tab-btn px-6 py-3 text-sm font-medium border-b-2 whitespace-nowrap" data-tab="client">
                <i class="fas fa-link mr-2"></i>Link to Client
            </button>
        </nav>
    </div>

    <div class="p-6">

    <!-- ============ TAB 1: BASIC INFO ============ -->
    <div class="tab-panel" id="tab-basic">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <!-- Full Name -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name (as per PAN) <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" class="form-input w-full" required value="<?= pv('full_name') ?>" placeholder="Enter full name as per PAN card">
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                <select name="gender" class="form-input w-full">
                    <option value="">Select...</option>
                    <option value="MALE" <?= ps('gender','MALE') ?>>Male</option>
                    <option value="FEMALE" <?= ps('gender','FEMALE') ?>>Female</option>
                    <option value="OTHER" <?= ps('gender','OTHER') ?>>Other</option>
                </select>
            </div>

            <!-- Father's Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Father's Name</label>
                <input type="text" name="father_name" class="form-input w-full" value="<?= pv('father_name') ?>">
            </div>

            <!-- DOB -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                <input type="date" name="dob" class="form-input w-full" value="<?= pv('dob') ?>" max="<?= date('Y-m-d') ?>">
            </div>

            <!-- Nationality -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nationality</label>
                <select name="nationality" class="form-input w-full" onchange="toggleResidency(this)">
                    <option value="INDIAN" <?= ps('nationality','INDIAN') ?>>Indian</option>
                    <option value="NRI" <?= ps('nationality','NRI') ?>>NRI</option>
                    <option value="FOREIGN" <?= ps('nationality','FOREIGN') ?>>Foreign National</option>
                </select>
            </div>

            <!-- Resident status (shown for NRI/Foreign) -->
            <div id="residencyFields" class="hidden md:col-span-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Indian Resident?</label>
                        <select name="is_indian_resident" class="form-input w-full">
                            <option value="1" <?= ps('is_indian_resident','1') ?>>Yes</option>
                            <option value="0" <?= ps('is_indian_resident','0') ?>>No</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Country of Residence</label>
                        <input type="text" name="country_of_residence" class="form-input w-full" value="<?= pv('country_of_residence') ?>" placeholder="e.g. USA, UK">
                    </div>
                </div>
            </div>

            <!-- Occupation -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Occupation</label>
                <select name="occupation" class="form-input w-full">
                    <option value="">Select...</option>
                    <?php foreach ($occupations as $k => $v): ?>
                    <option value="<?= $k ?>" <?= ps('occupation', $k) ?>><?= $v ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Qualification -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Educational Qualification</label>
                <select name="educational_qualification" class="form-input w-full">
                    <option value="">Select...</option>
                    <?php foreach ($qualifications as $q): ?>
                    <option value="<?= $q ?>" <?= ps('educational_qualification', $q) ?>><?= $q ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Photo Upload -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Photo</label>
                <input type="file" name="photo" accept="image/jpeg,image/png" class="form-input w-full text-sm file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700">
                <p class="text-xs text-gray-400 mt-1">JPG/PNG, max 2MB</p>
            </div>

            <!-- Signature Upload -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Signature</label>
                <input type="file" name="signature" accept="image/jpeg,image/png" class="form-input w-full text-sm file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700">
                <p class="text-xs text-gray-400 mt-1">JPG/PNG, max 2MB</p>
            </div>

            <!-- Notes -->
            <div class="md:col-span-3">
                <label class="block text-sm font-medium text-gray-700 mb-1">Internal Notes</label>
                <textarea name="internal_notes" class="form-input w-full" rows="2" placeholder="Any internal notes about this person..."><?= pv('internal_notes') ?></textarea>
            </div>
        </div>
    </div>

    <!-- ============ TAB 2: CONTACT & ADDRESS ============ -->
    <div class="tab-panel hidden" id="tab-contact">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                <div class="relative">
                    <input type="text" name="mobile" id="field_mobile" class="form-input w-full font-mono" placeholder="10 digit mobile" value="<?= pv('mobile') ?>" onblur="checkDuplicate('mobile')">
                    <span id="indicator_mobile" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alternate Mobile</label>
                <input type="text" name="alternate_mobile" class="form-input w-full font-mono" placeholder="Alternate number" value="<?= pv('alternate_mobile') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" class="form-input w-full" placeholder="email@example.com" value="<?= pv('email') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alternate Email</label>
                <input type="email" name="alternate_email" class="form-input w-full" placeholder="Alternate email" value="<?= pv('alternate_email') ?>">
            </div>

            <!-- Legacy single-line address -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address (single line — for quick entry)</label>
                <textarea name="address" class="form-input w-full" rows="2" placeholder="Full address with PIN code"><?= pv('address') ?></textarea>
            </div>

            <!-- Present Address -->
            <div class="md:col-span-2 border-t pt-4 mt-2">
                <h4 class="font-medium text-gray-700 mb-3"><i class="fas fa-map-marker-alt text-red-400 mr-2"></i>Present Address</h4>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 1</label>
                <input type="text" name="present_address_line1" class="form-input w-full" value="<?= pv('present_address_line1') ?>" placeholder="Flat/House No., Building, Street">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 2</label>
                <input type="text" name="present_address_line2" class="form-input w-full" value="<?= pv('present_address_line2') ?>" placeholder="Area, Locality, Landmark">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                <input type="text" name="present_city" class="form-input w-full" value="<?= pv('present_city') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                <select name="present_state" class="form-input w-full">
                    <option value="">Select...</option>
                    <?php foreach ($states as $st): ?>
                    <option value="<?= $st ?>" <?= ps('present_state', $st) ?>><?= $st ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">PIN Code</label>
                <input type="text" name="present_pincode" class="form-input w-full font-mono" value="<?= pv('present_pincode') ?>" placeholder="6 digit PIN" maxlength="6">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                <input type="text" name="present_country" class="form-input w-full" value="<?= pv('present_country', 'India') ?>">
            </div>

            <!-- Permanent Address -->
            <div class="md:col-span-2 border-t pt-4 mt-2">
                <div class="flex items-center justify-between">
                    <h4 class="font-medium text-gray-700"><i class="fas fa-home text-blue-400 mr-2"></i>Permanent Address</h4>
                    <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                        <input type="checkbox" name="same_as_present" value="1" id="sameAsPresent" onchange="togglePermanentAddr()" <?= ($_POST['same_as_present'] ?? 0) ? 'checked' : '' ?> class="rounded border-gray-300 text-blue-600">
                        Same as present address
                    </label>
                </div>
            </div>
            <div id="permanentAddrFields" class="md:col-span-2 <?= ($_POST['same_as_present'] ?? 0) ? 'hidden' : '' ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 1</label>
                        <input type="text" name="permanent_address_line1" class="form-input w-full" value="<?= pv('permanent_address_line1') ?>">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Address Line 2</label>
                        <input type="text" name="permanent_address_line2" class="form-input w-full" value="<?= pv('permanent_address_line2') ?>">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                        <input type="text" name="permanent_city" class="form-input w-full" value="<?= pv('permanent_city') ?>">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                        <select name="permanent_state" class="form-input w-full">
                            <option value="">Select...</option>
                            <?php foreach ($states as $st): ?>
                            <option value="<?= $st ?>" <?= ps('permanent_state', $st) ?>><?= $st ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">PIN Code</label>
                        <input type="text" name="permanent_pincode" class="form-input w-full font-mono" value="<?= pv('permanent_pincode') ?>" maxlength="6">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                        <input type="text" name="permanent_country" class="form-input w-full" value="<?= pv('permanent_country', 'India') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ TAB 3: IDENTITY & DSC/KYC ============ -->
    <div class="tab-panel hidden" id="tab-identity">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <div class="md:col-span-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-fingerprint text-purple-500 mr-2"></i>Identity Numbers</h4>
            </div>

            <!-- PAN -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">PAN Number</label>
                <div class="relative">
                    <input type="text" name="pan_number" id="field_pan" class="form-input w-full font-mono uppercase" placeholder="ABCDE1234F" value="<?= pv('pan_number') ?>" maxlength="10" onblur="checkDuplicate('pan')">
                    <span id="indicator_pan" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>

            <!-- Aadhaar -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Aadhaar Number</label>
                <div class="relative">
                    <input type="text" name="aadhaar_number" id="field_aadhaar" class="form-input w-full font-mono" placeholder="12 digit Aadhaar" value="<?= pv('aadhaar_number') ?>" maxlength="12" onblur="checkDuplicate('aadhaar')">
                    <span id="indicator_aadhaar" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>

            <!-- Passport -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Passport Number</label>
                <input type="text" name="passport_number" class="form-input w-full font-mono uppercase" placeholder="A1234567" value="<?= pv('passport_number') ?>" maxlength="8">
            </div>

            <div class="hidden md:block"></div>

            <!-- DIN -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-id-badge text-blue-500 mr-2"></i>DIN / DPIN</h4>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DIN</label>
                <div class="relative">
                    <input type="text" name="din" id="field_din" class="form-input w-full font-mono" placeholder="8 digit DIN" value="<?= pv('din') ?>" maxlength="8" onblur="checkDuplicate('din')">
                    <span id="indicator_din" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DIN Allotment Date</label>
                <input type="date" name="din_allotment_date" class="form-input w-full" value="<?= pv('din_allotment_date') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DPIN</label>
                <div class="relative">
                    <input type="text" name="dpin" id="field_dpin" class="form-input w-full font-mono" placeholder="8 digit DPIN" value="<?= pv('dpin') ?>" maxlength="8" onblur="checkDuplicate('dpin')">
                    <span id="indicator_dpin" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DPIN Allotment Date</label>
                <input type="date" name="dpin_allotment_date" class="form-input w-full" value="<?= pv('dpin_allotment_date') ?>">
            </div>

            <!-- DSC Section -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-certificate text-amber-500 mr-2"></i>Digital Signature Certificate (DSC)</h4>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Status</label>
                <select name="dsc_status" class="form-input w-full" onchange="toggleDscFields(this)">
                    <option value="NOT_REQUIRED" <?= ps('dsc_status','NOT_REQUIRED') ?>>Not Required</option>
                    <option value="REQUIRED" <?= ps('dsc_status','REQUIRED') ?>>Required</option>
                    <option value="APPLIED" <?= ps('dsc_status','APPLIED') ?>>Applied</option>
                    <option value="ACTIVE" <?= ps('dsc_status','ACTIVE') ?>>Active</option>
                    <option value="EXPIRED" <?= ps('dsc_status','EXPIRED') ?>>Expired</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Class</label>
                <select name="dsc_class" class="form-input w-full dsc-field">
                    <option value="">Select...</option>
                    <option value="CLASS_2" <?= ps('dsc_class','CLASS_2') ?>>Class 2</option>
                    <option value="CLASS_3" <?= ps('dsc_class','CLASS_3') ?>>Class 3</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Expiry Date</label>
                <input type="date" name="dsc_expiry_date" class="form-input w-full dsc-field" value="<?= pv('dsc_expiry_date') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Provider</label>
                <input type="text" name="dsc_provider" class="form-input w-full dsc-field" value="<?= pv('dsc_provider') ?>" placeholder="e.g. eMudhra, Sify, Capricorn">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Token Number</label>
                <input type="text" name="dsc_token_number" class="form-input w-full font-mono dsc-field" value="<?= pv('dsc_token_number') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Password</label>
                <input type="password" name="dsc_password" class="form-input w-full font-mono dsc-field" value="<?= pv('dsc_password') ?>" autocomplete="new-password">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Hint</label>
                <input type="text" name="dsc_password_hint" class="form-input w-full dsc-field" value="<?= pv('dsc_password_hint') ?>">
            </div>

            <!-- KYC Section -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-clipboard-check text-green-500 mr-2"></i>DIR-3 KYC</h4>
                <p class="text-xs text-gray-400 mt-0.5">Applicable only for persons with DIN</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Status</label>
                <select name="din_kyc_status" class="form-input w-full">
                    <option value="PENDING" <?= ps('din_kyc_status','PENDING') ?>>Pending</option>
                    <option value="IN_PROGRESS" <?= ps('din_kyc_status','IN_PROGRESS') ?>>In Progress</option>
                    <option value="COMPLETED" <?= ps('din_kyc_status','COMPLETED') ?>>Completed</option>
                    <option value="OVERDUE" <?= ps('din_kyc_status','OVERDUE') ?>>Overdue</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Due Date</label>
                <input type="date" name="din_kyc_due_date" class="form-input w-full" value="<?= pv('din_kyc_due_date') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Form Type</label>
                <select name="kyc_form_type" class="form-input w-full">
                    <option value="">Select...</option>
                    <option value="DIR3_KYC" <?= ps('kyc_form_type','DIR3_KYC') ?>>DIR-3 KYC (Full form)</option>
                    <option value="DIR3_KYC_WEB" <?= ps('kyc_form_type','DIR3_KYC_WEB') ?>>DIR-3 KYC WEB (OTP based)</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last KYC Filed Date</label>
                <input type="date" name="last_kyc_filed_date" class="form-input w-full" value="<?= pv('last_kyc_filed_date') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last KYC SRN</label>
                <input type="text" name="last_kyc_srn" class="form-input w-full font-mono" value="<?= pv('last_kyc_srn') ?>" placeholder="Service Request Number">
            </div>
        </div>
    </div>

    <!-- ============ TAB 4: LINK TO CLIENT ============ -->
    <div class="tab-panel hidden" id="tab-client">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <div class="md:col-span-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-building text-blue-500 mr-2"></i>Link to Client (Optional)</h4>
                <p class="text-xs text-gray-400 mt-0.5">You can also link this person to clients later from the person view page.</p>
            </div>

            <!-- Client Selection -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Client</label>
                <select name="link_client_id" class="form-input w-full" id="clientSelect" onchange="onClientChange()">
                    <option value="" data-entity="">-- No client link --</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>" data-entity="<?= $c['entity_type'] ?>" <?= ($preClientId == $c['id'] || ($_POST['link_client_id'] ?? '') == $c['id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['name']) ?> (<?= str_replace('_',' ',$c['entity_type']) ?>)
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Role -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role <span class="text-red-500">*</span></label>
                <select name="link_role" class="form-input w-full" id="roleSelect" onchange="onRoleChange()">
                    <option value="">Select role...</option>
                </select>
            </div>

            <!-- Designation -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Designation</label>
                <input type="text" name="link_designation" class="form-input w-full" value="<?= pv('link_designation') ?>" placeholder="e.g. Additional Director">
            </div>

            <!-- Director Category -->
            <div id="directorCategoryField" class="hidden">
                <label class="block text-sm font-medium text-gray-700 mb-1">Director Category</label>
                <select name="link_director_category" class="form-input w-full">
                    <option value="">Select...</option>
                    <option value="EXECUTIVE" <?= ps('link_director_category','EXECUTIVE') ?>>Executive</option>
                    <option value="NON_EXECUTIVE" <?= ps('link_director_category','NON_EXECUTIVE') ?>>Non-Executive</option>
                    <option value="INDEPENDENT" <?= ps('link_director_category','INDEPENDENT') ?>>Independent</option>
                    <option value="WHOLE_TIME" <?= ps('link_director_category','WHOLE_TIME') ?>>Whole-Time</option>
                    <option value="MANAGING" <?= ps('link_director_category','MANAGING') ?>>Managing</option>
                    <option value="NOMINEE" <?= ps('link_director_category','NOMINEE') ?>>Nominee</option>
                    <option value="ADDITIONAL" <?= ps('link_director_category','ADDITIONAL') ?>>Additional</option>
                    <option value="ALTERNATE" <?= ps('link_director_category','ALTERNATE') ?>>Alternate</option>
                </select>
            </div>

            <!-- Appointment dates -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Appointment Date</label>
                <input type="date" name="link_appointment_date" class="form-input w-full" value="<?= pv('link_appointment_date') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Original Appointment Date</label>
                <input type="date" name="link_original_appointment_date" class="form-input w-full" value="<?= pv('link_original_appointment_date') ?>">
                <p class="text-xs text-gray-400 mt-0.5">First ever appointment (if different from current)</p>
            </div>

            <!-- Shareholding section -->
            <div class="md:col-span-2 border-t pt-4 mt-2" id="shareholdingSection" style="display:none;">
                <h4 class="font-medium text-gray-700 mb-3"><i class="fas fa-chart-pie text-purple-500 mr-2"></i>Shareholding Details</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">No. of Shares</label>
                        <input type="number" name="link_no_of_shares" class="form-input w-full" value="<?= pv('link_no_of_shares') ?>" min="0">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Share %</label>
                        <input type="number" name="link_share_percentage" class="form-input w-full" value="<?= pv('link_share_percentage') ?>" step="0.01" min="0" max="100">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Share Type</label>
                        <select name="link_share_type" class="form-input w-full">
                            <option value="EQUITY" <?= ps('link_share_type','EQUITY') ?>>Equity</option>
                            <option value="PREFERENCE" <?= ps('link_share_type','PREFERENCE') ?>>Preference</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Face Value/Share (₹)</label>
                        <input type="number" name="link_face_value_per_share" class="form-input w-full" value="<?= pv('link_face_value_per_share', '10') ?>" step="0.01">
                    </div>
                </div>
            </div>

            <!-- Contribution section (for partnerships) -->
            <div class="md:col-span-2 border-t pt-4 mt-2" id="contributionSection" style="display:none;">
                <h4 class="font-medium text-gray-700 mb-3"><i class="fas fa-hand-holding-usd text-green-500 mr-2"></i>Capital Contribution</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Capital Contribution (₹)</label>
                        <input type="number" name="link_capital_contribution" class="form-input w-full" value="<?= pv('link_capital_contribution') ?>" step="0.01" min="0">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Profit Sharing Ratio (%)</label>
                        <input type="number" name="link_profit_sharing_ratio" class="form-input w-full" value="<?= pv('link_profit_sharing_ratio') ?>" step="0.01" min="0" max="100">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div><!-- /p-6 -->

    <!-- Footer -->
    <div class="flex items-center justify-between gap-4 px-6 py-4 bg-gray-50 border-t">
        <a href="persons.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
        <div class="flex items-center gap-3">
            <button type="button" onclick="prevTab()" id="btnPrev" class="btn bg-white border text-gray-600 hover:bg-gray-50 hidden"><i class="fas fa-arrow-left mr-1"></i>Previous</button>
            <button type="button" onclick="nextTab()" id="btnNext" class="btn bg-blue-50 text-blue-700 hover:bg-blue-100">Next<i class="fas fa-arrow-right ml-1"></i></button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Create Person</button>
        </div>
    </div>
</div>
</form>

<!-- Role map data from PHP -->
<script>
const roleMap = <?= json_encode($roleMap) ?>;
const roleLabels = <?= json_encode(array_combine(
    array_keys(array_merge(...array_values($roleMap ?: [['DIRECTOR'=>'Director']]))),
    array_map(function($r) { return getRoleLabel($r); }, array_keys(array_merge(...array_values($roleMap ?: [['DIRECTOR'=>'Director']]))))
)) ?>;

// --- Tab Navigation ---
const tabs = ['basic', 'contact', 'identity', 'client'];
let currentTab = 0;

function switchTab(tabId) {
    currentTab = tabs.indexOf(tabId);
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
    document.getElementById('tab-' + tabId).classList.remove('hidden');
    document.querySelectorAll('.tab-btn').forEach(b => {
        b.classList.remove('active', 'border-blue-500', 'text-blue-600');
        b.classList.add('border-transparent', 'text-gray-500');
    });
    const active = document.querySelector(`.tab-btn[data-tab="${tabId}"]`);
    active.classList.add('active', 'border-blue-500', 'text-blue-600');
    active.classList.remove('border-transparent', 'text-gray-500');
    document.getElementById('btnPrev').classList.toggle('hidden', currentTab === 0);
    document.getElementById('btnNext').classList.toggle('hidden', currentTab === tabs.length - 1);
}

function nextTab() { if (currentTab < tabs.length - 1) switchTab(tabs[currentTab + 1]); }
function prevTab() { if (currentTab > 0) switchTab(tabs[currentTab - 1]); }

// --- Client/Role Logic ---
function onClientChange() {
    const sel = document.getElementById('clientSelect');
    const entity = sel.options[sel.selectedIndex]?.dataset?.entity || '';
    const roleSelect = document.getElementById('roleSelect');
    const roles = roleMap[entity] || [];

    roleSelect.innerHTML = '<option value="">Select role...</option>';
    roles.forEach(r => {
        const opt = document.createElement('option');
        opt.value = r;
        opt.textContent = roleLabels[r] || r.replace(/_/g, ' ');
        roleSelect.appendChild(opt);
    });

    // Restore from POST if available
    const postRole = '<?= pv('link_role') ?>';
    if (postRole) roleSelect.value = postRole;

    onRoleChange();
}

function onRoleChange() {
    const role = document.getElementById('roleSelect').value;
    const directorRoles = ['DIRECTOR','MANAGING_DIRECTOR','WHOLE_TIME_DIRECTOR','INDEPENDENT_DIRECTOR','NOMINEE_DIRECTOR'];
    const shareRoles = ['SHAREHOLDER','PROMOTER','NOMINEE'];
    const contribRoles = ['PARTNER','DESIGNATED_PARTNER'];

    document.getElementById('directorCategoryField').classList.toggle('hidden', !directorRoles.includes(role));
    document.getElementById('shareholdingSection').style.display = shareRoles.includes(role) ? '' : 'none';
    document.getElementById('contributionSection').style.display = contribRoles.includes(role) ? '' : 'none';
}

// --- Duplicate Detection ---
let dupeTimers = {};
function checkDuplicate(field) {
    const input = document.getElementById('field_' + field);
    const val = input?.value?.trim();
    if (!val || val.length < 3) return;

    clearTimeout(dupeTimers[field]);
    dupeTimers[field] = setTimeout(() => {
        const indicator = document.getElementById('indicator_' + field);
        indicator.className = 'absolute right-3 top-2.5';
        indicator.innerHTML = '<i class="fas fa-spinner fa-spin text-gray-400"></i>';
        indicator.classList.remove('hidden');

        fetch(`person_ajax.php?action=check_duplicate&field=${field}&value=${encodeURIComponent(val)}`)
            .then(r => r.json())
            .then(data => {
                if (data.duplicate) {
                    indicator.innerHTML = '<i class="fas fa-exclamation-triangle text-amber-500"></i>';
                    input.classList.add('border-amber-400', 'bg-amber-50');
                    input.classList.remove('border-gray-300');
                    // Show banner
                    document.getElementById('duplicateAlert').classList.remove('hidden');
                    document.getElementById('duplicateMsg').textContent = data.message;
                    document.getElementById('duplicateLink').href = data.view_url || '#';
                } else {
                    indicator.innerHTML = '<i class="fas fa-check-circle text-green-500"></i>';
                    input.classList.remove('border-amber-400', 'bg-amber-50');
                    input.classList.add('border-gray-300');
                }
            })
            .catch(() => { indicator.classList.add('hidden'); });
    }, 400);
}

// --- Toggle Helpers ---
function toggleResidency(sel) {
    document.getElementById('residencyFields').classList.toggle('hidden', sel.value === 'INDIAN');
}

function togglePermanentAddr() {
    document.getElementById('permanentAddrFields').classList.toggle('hidden', document.getElementById('sameAsPresent').checked);
}

function toggleDscFields(sel) {
    const show = ['ACTIVE','APPLIED','EXPIRED'].includes(sel.value);
    document.querySelectorAll('.dsc-field').forEach(f => {
        f.closest('div').style.opacity = show ? '1' : '0.5';
    });
}

// Init on load
document.addEventListener('DOMContentLoaded', function() {
    switchTab('basic');
    onClientChange();
    toggleDscFields(document.querySelector('[name="dsc_status"]'));
    const nat = document.querySelector('[name="nationality"]');
    if (nat.value !== 'INDIAN') document.getElementById('residencyFields').classList.remove('hidden');
});
</script>

<style>
.tab-btn { border-color: transparent; color: #6b7280; transition: all 0.15s; }
.tab-btn:hover { color: #2563eb; border-color: #93c5fd; }
.tab-btn.active { color: #2563eb; border-color: #2563eb; background: white; }
</style>

<?php require_once 'includes/footer.php'; ?>
