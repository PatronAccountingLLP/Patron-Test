<?php
/**
 * PATRON - Edit Person (v2)
 * Tabbed form with all person fields, pre-populated from DB,
 * AJAX duplicate detection, photo/signature upload
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$personId = (int)($_GET['id'] ?? 0);
if (!$personId) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$person = getPersonById($personId);
if (!$person) { setFlash('error', 'Person not found.'); header('Location: persons.php'); exit; }

$pageTitle = 'Edit: ' . $person['full_name'];

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

    $presAddr1   = sanitize($_POST['present_address_line1'] ?? '');
    $presAddr2   = sanitize($_POST['present_address_line2'] ?? '');
    $presCity    = sanitize($_POST['present_city'] ?? '');
    $presState   = sanitize($_POST['present_state'] ?? '');
    $presPincode = sanitize($_POST['present_pincode'] ?? '');
    $presCountry = sanitize($_POST['present_country'] ?? 'India');

    $sameAsPresent = (int)($_POST['same_as_present'] ?? 0);
    $permAddr1   = $sameAsPresent ? $presAddr1 : sanitize($_POST['permanent_address_line1'] ?? '');
    $permAddr2   = $sameAsPresent ? $presAddr2 : sanitize($_POST['permanent_address_line2'] ?? '');
    $permCity    = $sameAsPresent ? $presCity : sanitize($_POST['permanent_city'] ?? '');
    $permState   = $sameAsPresent ? $presState : sanitize($_POST['permanent_state'] ?? '');
    $permPincode = $sameAsPresent ? $presPincode : sanitize($_POST['permanent_pincode'] ?? '');
    $permCountry = $sameAsPresent ? $presCountry : sanitize($_POST['permanent_country'] ?? 'India');

    $pan        = strtoupper(sanitize($_POST['pan_number'] ?? ''));
    $aadhaar    = preg_replace('/[\s-]/', '', sanitize($_POST['aadhaar_number'] ?? ''));
    $passport   = strtoupper(sanitize($_POST['passport_number'] ?? ''));
    $din        = sanitize($_POST['din'] ?? '');
    $dinDate    = sanitize($_POST['din_allotment_date'] ?? '');
    $dpin       = sanitize($_POST['dpin'] ?? '');
    $dpinDate   = sanitize($_POST['dpin_allotment_date'] ?? '');

    $dscStatus  = sanitize($_POST['dsc_status'] ?? 'NOT_REQUIRED');
    $dscClass   = sanitize($_POST['dsc_class'] ?? '');
    $dscToken   = sanitize($_POST['dsc_token_number'] ?? '');
    $dscExpiry  = sanitize($_POST['dsc_expiry_date'] ?? '');
    $dscPwd     = sanitize($_POST['dsc_password'] ?? '');
    $dscHint    = sanitize($_POST['dsc_password_hint'] ?? '');
    $dscProv    = sanitize($_POST['dsc_provider'] ?? '');

    $kycStatus  = sanitize($_POST['din_kyc_status'] ?? 'PENDING');
    $kycDue     = sanitize($_POST['din_kyc_due_date'] ?? '');
    $kycForm    = sanitize($_POST['kyc_form_type'] ?? '');
    $lastKycDate = sanitize($_POST['last_kyc_filed_date'] ?? '');
    $lastKycSrn = sanitize($_POST['last_kyc_srn'] ?? '');

    $notes      = sanitize($_POST['internal_notes'] ?? '');
    $status     = sanitize($_POST['status'] ?? 'ACTIVE');

    // --- Validate (exclude self from dupe check) ---
    $errors = validatePersonData($_POST, $personId);

    if (empty($errors)) {
        dbExecute("UPDATE persons_new SET
                full_name=?, father_name=?, dob=?, gender=?, nationality=?, is_indian_resident=?, country_of_residence=?,
                occupation=?, educational_qualification=?,
                mobile=?, alternate_mobile=?, email=?, alternate_email=?, address=?,
                present_address_line1=?, present_address_line2=?, present_city=?, present_state=?, present_pincode=?, present_country=?,
                permanent_address_line1=?, permanent_address_line2=?, permanent_city=?, permanent_state=?, permanent_pincode=?, permanent_country=?,
                same_as_present=?,
                pan_number=?, aadhaar_number=?, passport_number=?,
                din=?, din_allotment_date=?, dpin=?, dpin_allotment_date=?,
                dsc_status=?, dsc_class=?, dsc_token_number=?, dsc_expiry_date=?, dsc_password=?, dsc_password_hint=?, dsc_provider=?,
                din_kyc_status=?, din_kyc_due_date=?, kyc_form_type=?, last_kyc_filed_date=?, last_kyc_srn=?,
                internal_notes=?, status=?, updated_at=NOW()
            WHERE id=?", [
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
            $notes ?: null, $status, $personId
        ]);

        // Photo upload
        if (!empty($_FILES['photo']['name'])) uploadPersonImage($personId, 'photo', $_FILES['photo']);
        if (!empty($_FILES['signature']['name'])) uploadPersonImage($personId, 'signature', $_FILES['signature']);

        setFlash('success', 'Person updated successfully.');
        header('Location: person_view.php?id=' . $personId);
        exit;
    } else {
        setFlash('error', implode('<br>', $errors));
    }
}

// Helper: get value from POST first, fall back to DB
function ev($key, $person) { return htmlspecialchars($_POST[$key] ?? $person[$key] ?? ''); }
function es($key, $value, $person) { return ($_POST[$key] ?? $person[$key] ?? '') == $value ? 'selected' : ''; }

$states = getIndianStates();
$occupations = getOccupationOptions();
$qualifications = getQualificationOptions();

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="persons.php" class="hover:text-blue-600">Persons</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="person_view.php?id=<?= $personId ?>" class="hover:text-blue-600"><?= htmlspecialchars($person['full_name']) ?></a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Edit</span>
        </div>
        <h2 class="text-2xl font-bold text-gray-900">Edit Person</h2>
    </div>
    <div class="flex items-center gap-2">
        <?php $dscInfo = getDSCStatusInfo($person); $kycInfo = getKYCStatusInfo($person); ?>
        <?= getDSCBadgeHTML($person) ?>
        <?= getKYCBadgeHTML($person) ?>
    </div>
</div>

<!-- Duplicate Alert Banner -->
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
        </nav>
    </div>

    <div class="p-6">

    <!-- ============ TAB 1: BASIC INFO ============ -->
    <div class="tab-panel" id="tab-basic">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name (as per PAN) <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" class="form-input w-full" required value="<?= ev('full_name', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                <select name="gender" class="form-input w-full">
                    <option value="">Select...</option>
                    <option value="MALE" <?= es('gender','MALE',$person) ?>>Male</option>
                    <option value="FEMALE" <?= es('gender','FEMALE',$person) ?>>Female</option>
                    <option value="OTHER" <?= es('gender','OTHER',$person) ?>>Other</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Father's Name</label>
                <input type="text" name="father_name" class="form-input w-full" value="<?= ev('father_name', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                <input type="date" name="dob" class="form-input w-full" value="<?= ev('dob', $person) ?>" max="<?= date('Y-m-d') ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nationality</label>
                <select name="nationality" class="form-input w-full" onchange="toggleResidency(this)">
                    <option value="INDIAN" <?= es('nationality','INDIAN',$person) ?>>Indian</option>
                    <option value="NRI" <?= es('nationality','NRI',$person) ?>>NRI</option>
                    <option value="FOREIGN" <?= es('nationality','FOREIGN',$person) ?>>Foreign National</option>
                </select>
            </div>
            <div id="residencyFields" class="<?= ($person['nationality'] ?? 'INDIAN') === 'INDIAN' ? 'hidden' : '' ?> md:col-span-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Indian Resident?</label>
                        <select name="is_indian_resident" class="form-input w-full">
                            <option value="1" <?= es('is_indian_resident','1',$person) ?>>Yes</option>
                            <option value="0" <?= es('is_indian_resident','0',$person) ?>>No</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Country of Residence</label>
                        <input type="text" name="country_of_residence" class="form-input w-full" value="<?= ev('country_of_residence', $person) ?>">
                    </div>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Occupation</label>
                <select name="occupation" class="form-input w-full">
                    <option value="">Select...</option>
                    <?php foreach ($occupations as $k => $v): ?>
                    <option value="<?= $k ?>" <?= es('occupation',$k,$person) ?>><?= $v ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Educational Qualification</label>
                <select name="educational_qualification" class="form-input w-full">
                    <option value="">Select...</option>
                    <?php foreach ($qualifications as $q): ?>
                    <option value="<?= $q ?>" <?= es('educational_qualification',$q,$person) ?>><?= $q ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" class="form-input w-full">
                    <option value="ACTIVE" <?= es('status','ACTIVE',$person) ?>>Active</option>
                    <option value="INACTIVE" <?= es('status','INACTIVE',$person) ?>>Inactive</option>
                </select>
            </div>

            <!-- Photo -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Photo</label>
                <?php if (!empty($person['photo_path'])): ?>
                <div class="flex items-center gap-3 mb-2">
                    <img src="<?= htmlspecialchars($person['photo_path']) ?>" class="w-12 h-12 rounded-full object-cover border">
                    <span class="text-xs text-green-600"><i class="fas fa-check-circle"></i> Uploaded</span>
                </div>
                <?php endif; ?>
                <input type="file" name="photo" accept="image/jpeg,image/png" class="form-input w-full text-sm file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700">
                <p class="text-xs text-gray-400 mt-1">Upload new to replace. JPG/PNG, max 2MB.</p>
            </div>

            <!-- Signature -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Signature</label>
                <?php if (!empty($person['signature_path'])): ?>
                <div class="flex items-center gap-3 mb-2">
                    <img src="<?= htmlspecialchars($person['signature_path']) ?>" class="h-10 border rounded px-2 bg-white">
                    <span class="text-xs text-green-600"><i class="fas fa-check-circle"></i> Uploaded</span>
                </div>
                <?php endif; ?>
                <input type="file" name="signature" accept="image/jpeg,image/png" class="form-input w-full text-sm file:mr-3 file:py-1 file:px-3 file:rounded file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700">
            </div>

            <div class="md:col-span-3">
                <label class="block text-sm font-medium text-gray-700 mb-1">Internal Notes</label>
                <textarea name="internal_notes" class="form-input w-full" rows="2"><?= ev('internal_notes', $person) ?></textarea>
            </div>
        </div>
    </div>

    <!-- ============ TAB 2: CONTACT & ADDRESS ============ -->
    <div class="tab-panel hidden" id="tab-contact">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                <div class="relative">
                    <input type="text" name="mobile" id="field_mobile" class="form-input w-full font-mono" value="<?= ev('mobile', $person) ?>" onblur="checkDuplicate('mobile')">
                    <span id="indicator_mobile" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alternate Mobile</label>
                <input type="text" name="alternate_mobile" class="form-input w-full font-mono" value="<?= ev('alternate_mobile', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" class="form-input w-full" value="<?= ev('email', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alternate Email</label>
                <input type="email" name="alternate_email" class="form-input w-full" value="<?= ev('alternate_email', $person) ?>">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Address (single line)</label>
                <textarea name="address" class="form-input w-full" rows="2"><?= ev('address', $person) ?></textarea>
            </div>

            <!-- Present Address -->
            <div class="md:col-span-2 border-t pt-4 mt-2">
                <h4 class="font-medium text-gray-700 mb-3"><i class="fas fa-map-marker-alt text-red-400 mr-2"></i>Present Address</h4>
            </div>
            <div class="md:col-span-2">
                <input type="text" name="present_address_line1" class="form-input w-full" value="<?= ev('present_address_line1', $person) ?>" placeholder="Address Line 1">
            </div>
            <div class="md:col-span-2">
                <input type="text" name="present_address_line2" class="form-input w-full" value="<?= ev('present_address_line2', $person) ?>" placeholder="Address Line 2">
            </div>
            <div>
                <input type="text" name="present_city" class="form-input w-full" value="<?= ev('present_city', $person) ?>" placeholder="City">
            </div>
            <div>
                <select name="present_state" class="form-input w-full">
                    <option value="">State...</option>
                    <?php foreach ($states as $st): ?>
                    <option value="<?= $st ?>" <?= es('present_state',$st,$person) ?>><?= $st ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <input type="text" name="present_pincode" class="form-input w-full font-mono" value="<?= ev('present_pincode', $person) ?>" placeholder="PIN Code" maxlength="6">
            </div>
            <div>
                <input type="text" name="present_country" class="form-input w-full" value="<?= ev('present_country', $person) ?: 'India' ?>" placeholder="Country">
            </div>

            <!-- Permanent Address -->
            <div class="md:col-span-2 border-t pt-4 mt-2">
                <div class="flex items-center justify-between">
                    <h4 class="font-medium text-gray-700"><i class="fas fa-home text-blue-400 mr-2"></i>Permanent Address</h4>
                    <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                        <input type="checkbox" name="same_as_present" value="1" id="sameAsPresent" onchange="togglePermanentAddr()" <?= ($person['same_as_present'] ?? 0) ? 'checked' : '' ?> class="rounded border-gray-300 text-blue-600">
                        Same as present
                    </label>
                </div>
            </div>
            <div id="permanentAddrFields" class="md:col-span-2 <?= ($person['same_as_present'] ?? 0) ? 'hidden' : '' ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2"><input type="text" name="permanent_address_line1" class="form-input w-full" value="<?= ev('permanent_address_line1', $person) ?>" placeholder="Address Line 1"></div>
                    <div class="md:col-span-2"><input type="text" name="permanent_address_line2" class="form-input w-full" value="<?= ev('permanent_address_line2', $person) ?>" placeholder="Address Line 2"></div>
                    <div><input type="text" name="permanent_city" class="form-input w-full" value="<?= ev('permanent_city', $person) ?>" placeholder="City"></div>
                    <div>
                        <select name="permanent_state" class="form-input w-full">
                            <option value="">State...</option>
                            <?php foreach ($states as $st): ?>
                            <option value="<?= $st ?>" <?= es('permanent_state',$st,$person) ?>><?= $st ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div><input type="text" name="permanent_pincode" class="form-input w-full font-mono" value="<?= ev('permanent_pincode', $person) ?>" placeholder="PIN Code" maxlength="6"></div>
                    <div><input type="text" name="permanent_country" class="form-input w-full" value="<?= ev('permanent_country', $person) ?: 'India' ?>" placeholder="Country"></div>
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

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">PAN Number</label>
                <div class="relative">
                    <input type="text" name="pan_number" id="field_pan" class="form-input w-full font-mono uppercase" value="<?= ev('pan_number', $person) ?>" maxlength="10" onblur="checkDuplicate('pan')">
                    <span id="indicator_pan" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Aadhaar Number</label>
                <div class="relative">
                    <input type="text" name="aadhaar_number" id="field_aadhaar" class="form-input w-full font-mono" value="<?= ev('aadhaar_number', $person) ?>" maxlength="12" onblur="checkDuplicate('aadhaar')">
                    <span id="indicator_aadhaar" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Passport Number</label>
                <input type="text" name="passport_number" class="form-input w-full font-mono uppercase" value="<?= ev('passport_number', $person) ?>" maxlength="8">
            </div>
            <div></div>

            <!-- DIN / DPIN -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-id-badge text-blue-500 mr-2"></i>DIN / DPIN</h4>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DIN</label>
                <div class="relative">
                    <input type="text" name="din" id="field_din" class="form-input w-full font-mono" value="<?= ev('din', $person) ?>" maxlength="8" onblur="checkDuplicate('din')">
                    <span id="indicator_din" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DIN Allotment Date</label>
                <input type="date" name="din_allotment_date" class="form-input w-full" value="<?= ev('din_allotment_date', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DPIN</label>
                <div class="relative">
                    <input type="text" name="dpin" id="field_dpin" class="form-input w-full font-mono" value="<?= ev('dpin', $person) ?>" maxlength="8" onblur="checkDuplicate('dpin')">
                    <span id="indicator_dpin" class="absolute right-3 top-2.5 hidden"></span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DPIN Allotment Date</label>
                <input type="date" name="dpin_allotment_date" class="form-input w-full" value="<?= ev('dpin_allotment_date', $person) ?>">
            </div>

            <!-- DSC -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-certificate text-amber-500 mr-2"></i>Digital Signature Certificate (DSC)</h4>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Status</label>
                <select name="dsc_status" class="form-input w-full" onchange="toggleDscFields(this)">
                    <option value="NOT_REQUIRED" <?= es('dsc_status','NOT_REQUIRED',$person) ?>>Not Required</option>
                    <option value="REQUIRED" <?= es('dsc_status','REQUIRED',$person) ?>>Required</option>
                    <option value="APPLIED" <?= es('dsc_status','APPLIED',$person) ?>>Applied</option>
                    <option value="ACTIVE" <?= es('dsc_status','ACTIVE',$person) ?>>Active</option>
                    <option value="EXPIRED" <?= es('dsc_status','EXPIRED',$person) ?>>Expired</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Class</label>
                <select name="dsc_class" class="form-input w-full dsc-field">
                    <option value="">Select...</option>
                    <option value="CLASS_2" <?= es('dsc_class','CLASS_2',$person) ?>>Class 2</option>
                    <option value="CLASS_3" <?= es('dsc_class','CLASS_3',$person) ?>>Class 3</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Expiry Date</label>
                <input type="date" name="dsc_expiry_date" class="form-input w-full dsc-field" value="<?= ev('dsc_expiry_date', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Provider</label>
                <input type="text" name="dsc_provider" class="form-input w-full dsc-field" value="<?= ev('dsc_provider', $person) ?>" placeholder="e.g. eMudhra, Sify">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Token Number</label>
                <input type="text" name="dsc_token_number" class="form-input w-full font-mono dsc-field" value="<?= ev('dsc_token_number', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">DSC Password</label>
                <input type="password" name="dsc_password" class="form-input w-full font-mono dsc-field" value="<?= ev('dsc_password', $person) ?>" autocomplete="new-password">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password Hint</label>
                <input type="text" name="dsc_password_hint" class="form-input w-full dsc-field" value="<?= ev('dsc_password_hint', $person) ?>">
            </div>

            <!-- KYC -->
            <div class="md:col-span-2 border-t pt-4 mt-2 mb-1">
                <h4 class="font-medium text-gray-700"><i class="fas fa-clipboard-check text-green-500 mr-2"></i>DIR-3 KYC</h4>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Status</label>
                <select name="din_kyc_status" class="form-input w-full">
                    <option value="PENDING" <?= es('din_kyc_status','PENDING',$person) ?>>Pending</option>
                    <option value="IN_PROGRESS" <?= es('din_kyc_status','IN_PROGRESS',$person) ?>>In Progress</option>
                    <option value="COMPLETED" <?= es('din_kyc_status','COMPLETED',$person) ?>>Completed</option>
                    <option value="OVERDUE" <?= es('din_kyc_status','OVERDUE',$person) ?>>Overdue</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Due Date</label>
                <input type="date" name="din_kyc_due_date" class="form-input w-full" value="<?= ev('din_kyc_due_date', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">KYC Form Type</label>
                <select name="kyc_form_type" class="form-input w-full">
                    <option value="">Select...</option>
                    <option value="DIR3_KYC" <?= es('kyc_form_type','DIR3_KYC',$person) ?>>DIR-3 KYC (Full form)</option>
                    <option value="DIR3_KYC_WEB" <?= es('kyc_form_type','DIR3_KYC_WEB',$person) ?>>DIR-3 KYC WEB (OTP based)</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last KYC Filed Date</label>
                <input type="date" name="last_kyc_filed_date" class="form-input w-full" value="<?= ev('last_kyc_filed_date', $person) ?>">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last KYC SRN</label>
                <input type="text" name="last_kyc_srn" class="form-input w-full font-mono" value="<?= ev('last_kyc_srn', $person) ?>">
            </div>
        </div>
    </div>

    </div>

    <!-- Footer -->
    <div class="flex items-center justify-between gap-4 px-6 py-4 bg-gray-50 border-t">
        <a href="person_view.php?id=<?= $personId ?>" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
        <div class="flex items-center gap-3">
            <button type="button" onclick="prevTab()" id="btnPrev" class="btn bg-white border text-gray-600 hover:bg-gray-50 hidden"><i class="fas fa-arrow-left mr-1"></i>Previous</button>
            <button type="button" onclick="nextTab()" id="btnNext" class="btn bg-blue-50 text-blue-700 hover:bg-blue-100">Next<i class="fas fa-arrow-right ml-1"></i></button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Update Person</button>
        </div>
    </div>
</div>
</form>

<script>
const personId = <?= $personId ?>;

// --- Tab Navigation ---
const tabs = ['basic', 'contact', 'identity'];
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
        fetch(`person_ajax.php?action=check_duplicate&field=${field}&value=${encodeURIComponent(val)}&exclude_id=${personId}`)
            .then(r => r.json()).then(data => {
                if (data.duplicate) {
                    indicator.innerHTML = '<i class="fas fa-exclamation-triangle text-amber-500"></i>';
                    input.classList.add('border-amber-400', 'bg-amber-50');
                    document.getElementById('duplicateAlert').classList.remove('hidden');
                    document.getElementById('duplicateMsg').textContent = data.message;
                    document.getElementById('duplicateLink').href = data.view_url || '#';
                } else {
                    indicator.innerHTML = '<i class="fas fa-check-circle text-green-500"></i>';
                    input.classList.remove('border-amber-400', 'bg-amber-50');
                }
            }).catch(() => { indicator.classList.add('hidden'); });
    }, 400);
}

function toggleResidency(sel) { document.getElementById('residencyFields').classList.toggle('hidden', sel.value === 'INDIAN'); }
function togglePermanentAddr() { document.getElementById('permanentAddrFields').classList.toggle('hidden', document.getElementById('sameAsPresent').checked); }
function toggleDscFields(sel) {
    const show = ['ACTIVE','APPLIED','EXPIRED'].includes(sel.value);
    document.querySelectorAll('.dsc-field').forEach(f => { f.closest('div').style.opacity = show ? '1' : '0.5'; });
}

document.addEventListener('DOMContentLoaded', function() {
    switchTab('basic');
    toggleDscFields(document.querySelector('[name="dsc_status"]'));
});
</script>

<style>
.tab-btn { border-color: transparent; color: #6b7280; transition: all 0.15s; }
.tab-btn:hover { color: #2563eb; border-color: #93c5fd; }
.tab-btn.active { color: #2563eb; border-color: #2563eb; background: white; }
</style>

<?php require_once 'includes/footer.php'; ?>
