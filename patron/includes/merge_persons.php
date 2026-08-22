<?php
/**
 * PATRON - Merge Persons
 * Detect duplicate persons and merge them safely.
 * Step 1: Find duplicates (auto-detect or manual pick)
 * Step 2: Side-by-side comparison with field-level merge selection
 * Step 3: Execute merge (keep primary, reassign relations, soft-delete secondary)
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

$pageTitle = 'Merge Persons';
$step = sanitize($_GET['step'] ?? 'detect');

// ============================================================
// STEP 3: EXECUTE MERGE
// ============================================================
if ($step === 'execute' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $primaryId   = (int)($_POST['primary_id'] ?? 0);
    $secondaryId = (int)($_POST['secondary_id'] ?? 0);
    
    if (!$primaryId || !$secondaryId || $primaryId === $secondaryId) {
        setFlash('error', 'Invalid merge parameters.');
        header('Location: merge_persons.php'); exit;
    }
    
    $primary   = getPersonById($primaryId);
    $secondary = getPersonById($secondaryId);
    if (!$primary || !$secondary) {
        setFlash('error', 'One or both persons not found.');
        header('Location: merge_persons.php'); exit;
    }
    
    // Mergeable fields from persons_new
    $mergeFields = [
        'full_name','father_name','dob','gender','nationality','is_indian_resident','country_of_residence',
        'mobile','alternate_mobile','email','alternate_email',
        'address','present_address_line1','present_address_line2','present_city','present_state','present_pincode','present_country',
        'permanent_address_line1','permanent_address_line2','permanent_city','permanent_state','permanent_pincode','permanent_country','same_as_present',
        'pan_number','aadhaar_number','passport_number',
        'din','din_allotment_date','dpin','dpin_allotment_date',
        'occupation','educational_qualification',
        'dsc_status','dsc_class','dsc_expiry_date','dsc_provider','dsc_token_number','dsc_password','dsc_password_hint',
        'din_kyc_status','din_kyc_due_date','kyc_form_type','last_kyc_filed_date','last_kyc_srn',
        'photo_path','signature_path','internal_notes',
    ];
    
    // Build UPDATE SET clause from user selections
    $updates = [];
    $updateParams = [];
    
    foreach ($mergeFields as $field) {
        $chosen = $_POST['field_' . $field] ?? 'primary';
        if ($chosen === 'secondary') {
            $updates[] = "$field = ?";
            $updateParams[] = $secondary[$field];
        }
        // If 'primary', keep as-is (no update needed)
    }
    
    // Fill blanks: for any field that's empty in primary but has value in secondary, take secondary
    foreach ($mergeFields as $field) {
        $chosen = $_POST['field_' . $field] ?? 'primary';
        if ($chosen === 'fill_blanks') {
            if (empty($primary[$field]) && !empty($secondary[$field])) {
                $updates[] = "$field = ?";
                $updateParams[] = $secondary[$field];
            }
        }
    }
    
    try {
        // 1. Update primary person with selected field values
        if (!empty($updates)) {
            $updateParams[] = $primaryId;
            dbExecute("UPDATE persons_new SET " . implode(', ', $updates) . ", updated_at = NOW() WHERE id = ?", $updateParams);
        }
        
        // 2. Reassign client_persons links from secondary → primary
        $secLinks = dbFetchAll("SELECT * FROM client_persons WHERE person_id = ?", [$secondaryId]) ?: [];
        foreach ($secLinks as $sl) {
            // Check if primary already linked to same client with same role
            $existing = dbFetchOne(
                "SELECT id FROM client_persons WHERE person_id = ? AND client_id = ? AND role_type = ?",
                [$primaryId, $sl['client_id'], $sl['role_type']]
            );
            if ($existing) {
                // Duplicate link - just deactivate the secondary's link
                dbExecute("UPDATE client_persons SET is_active = 0, notes = CONCAT(IFNULL(notes,''), ' [Merged→#{$primaryId}]'), updated_at = NOW() WHERE id = ?", [$sl['id']]);
            } else {
                // Move link to primary
                dbExecute("UPDATE client_persons SET person_id = ?, updated_at = NOW() WHERE id = ?", [$primaryId, $sl['id']]);
            }
        }
        
        // 3. Reassign documents from secondary → primary
        dbExecute("UPDATE client_documents SET person_id = ? WHERE person_id = ? AND deleted_at IS NULL", [$primaryId, $secondaryId]);
        
        // 4. Reassign DSC history
        dbExecute("UPDATE person_dsc_history SET person_id = ? WHERE person_id = ?", [$primaryId, $secondaryId]);
        
        // 5. Reassign KYC history
        dbExecute("UPDATE person_kyc_history SET person_id = ? WHERE person_id = ?", [$primaryId, $secondaryId]);
        
        // 6. Soft-delete the secondary person
        dbExecute("UPDATE persons_new SET status = 'INACTIVE', deleted_at = NOW(), internal_notes = CONCAT(IFNULL(internal_notes,''), '\n[MERGED into #{$primaryId} on " . date('Y-m-d H:i') . "]') WHERE id = ?", [$secondaryId]);
        
        // 7. Add merge note on primary
        dbExecute("UPDATE persons_new SET internal_notes = CONCAT(IFNULL(internal_notes,''), '\n[MERGED #{$secondaryId} into this record on " . date('Y-m-d H:i') . "]') WHERE id = ?", [$primaryId]);
        
        setFlash('success', "Merged \"{$secondary['full_name']}\" into \"{$primary['full_name']}\" successfully. All links, documents, and history have been reassigned.");
        header('Location: person_view.php?id=' . $primaryId);
        exit;
        
    } catch (Exception $e) {
        setFlash('error', 'Merge failed: ' . $e->getMessage());
        header('Location: merge_persons.php?step=compare&primary=' . $primaryId . '&secondary=' . $secondaryId);
        exit;
    }
}

// ============================================================
// FETCH DATA FOR DETECT / COMPARE STEPS
// ============================================================

// Auto-detect duplicates
$duplicates = [];
if ($step === 'detect') {
    // Find persons sharing PAN
    $panDupes = dbFetchAll("
        SELECT pan_number as match_value, 'PAN' as match_type, GROUP_CONCAT(id) as person_ids, GROUP_CONCAT(full_name SEPARATOR '||') as names, COUNT(*) as cnt
        FROM persons_new WHERE deleted_at IS NULL AND pan_number IS NOT NULL AND pan_number != ''
        GROUP BY pan_number HAVING cnt > 1
    ") ?: [];
    
    // Find persons sharing DIN
    $dinDupes = dbFetchAll("
        SELECT din as match_value, 'DIN' as match_type, GROUP_CONCAT(id) as person_ids, GROUP_CONCAT(full_name SEPARATOR '||') as names, COUNT(*) as cnt
        FROM persons_new WHERE deleted_at IS NULL AND din IS NOT NULL AND din != ''
        GROUP BY din HAVING cnt > 1
    ") ?: [];
    
    // Find persons sharing mobile
    $mobileDupes = dbFetchAll("
        SELECT mobile as match_value, 'Mobile' as match_type, GROUP_CONCAT(id) as person_ids, GROUP_CONCAT(full_name SEPARATOR '||') as names, COUNT(*) as cnt
        FROM persons_new WHERE deleted_at IS NULL AND mobile IS NOT NULL AND mobile != ''
        GROUP BY mobile HAVING cnt > 1
    ") ?: [];
    
    // Find persons sharing Aadhaar
    $aadhaarDupes = dbFetchAll("
        SELECT aadhaar_number as match_value, 'Aadhaar' as match_type, GROUP_CONCAT(id) as person_ids, GROUP_CONCAT(full_name SEPARATOR '||') as names, COUNT(*) as cnt
        FROM persons_new WHERE deleted_at IS NULL AND aadhaar_number IS NOT NULL AND aadhaar_number != ''
        GROUP BY aadhaar_number HAVING cnt > 1
    ") ?: [];
    
    $duplicates = array_merge($panDupes, $dinDupes, $mobileDupes, $aadhaarDupes);
}

// Compare step data
$primaryPerson = null;
$secondaryPerson = null;
$primaryClients = [];
$secondaryClients = [];

if ($step === 'compare') {
    $primaryId   = (int)($_GET['primary'] ?? 0);
    $secondaryId = (int)($_GET['secondary'] ?? 0);
    
    if (!$primaryId || !$secondaryId) {
        setFlash('error', 'Select two persons to compare.');
        header('Location: merge_persons.php'); exit;
    }
    
    $primaryPerson   = getPersonById($primaryId);
    $secondaryPerson = getPersonById($secondaryId);
    
    if (!$primaryPerson || !$secondaryPerson) {
        setFlash('error', 'One or both persons not found.');
        header('Location: merge_persons.php'); exit;
    }
    
    $primaryClients   = getPersonLinkedClients($primaryId);
    $secondaryClients = getPersonLinkedClients($secondaryId);
}

// All persons for manual select
$allPersons = [];
if ($step === 'detect' || $step === 'manual') {
    $allPersons = dbFetchAll("SELECT id, full_name, pan_number, din, mobile FROM persons_new WHERE deleted_at IS NULL ORDER BY full_name") ?: [];
}

require_once 'includes/header.php';
?>

<style>
.field-row { transition: background 0.15s; }
.field-row:hover { background: #f8fafc; }
.pick-primary { background: #eff6ff; }
.pick-secondary { background: #fef3c7; }
.pick-btn { cursor: pointer; padding: 4px 10px; border-radius: 6px; font-size: 12px; border: 2px solid transparent; transition: all 0.15s; }
.pick-btn:hover { opacity: 0.8; }
.pick-btn.selected { border-color: currentColor; font-weight: 600; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
            <a href="persons.php" class="hover:text-blue-600">Persons</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span>Merge Duplicates</span>
        </div>
        <h2 class="text-2xl font-bold text-gray-900">Merge Duplicate Persons</h2>
        <p class="text-sm text-gray-500 mt-1">Detect, compare, and safely merge duplicate person records</p>
    </div>
</div>

<?php if ($step === 'detect'): ?>
<!-- ===================== STEP 1: DETECT DUPLICATES ===================== -->

<!-- Manual Merge Picker -->
<div class="card p-5 mb-6">
    <h3 class="font-bold text-gray-700 mb-3"><i class="fas fa-search text-blue-500 mr-2"></i>Manual Merge</h3>
    <p class="text-sm text-gray-500 mb-4">Select two persons to compare and merge:</p>
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <input type="hidden" name="step" value="compare">
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs font-medium text-gray-600 mb-1">Primary (keep)</label>
            <select name="primary" class="form-input w-full" required>
                <option value="">Select person to keep...</option>
                <?php foreach ($allPersons as $ap): ?>
                <option value="<?= $ap['id'] ?>"><?= htmlspecialchars($ap['full_name']) ?> <?= $ap['pan_number'] ? '('.$ap['pan_number'].')' : '' ?> <?= $ap['din'] ? '[DIN:'.$ap['din'].']' : '' ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-1 min-w-[200px]">
            <label class="block text-xs font-medium text-gray-600 mb-1">Secondary (merge into primary)</label>
            <select name="secondary" class="form-input w-full" required>
                <option value="">Select person to merge...</option>
                <?php foreach ($allPersons as $ap): ?>
                <option value="<?= $ap['id'] ?>"><?= htmlspecialchars($ap['full_name']) ?> <?= $ap['pan_number'] ? '('.$ap['pan_number'].')' : '' ?> <?= $ap['din'] ? '[DIN:'.$ap['din'].']' : '' ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-columns mr-1"></i>Compare</button>
    </form>
</div>

<!-- Auto-detected Duplicates -->
<div class="card p-5">
    <h3 class="font-bold text-gray-700 mb-3"><i class="fas fa-clone text-amber-500 mr-2"></i>Auto-Detected Duplicates (<?= count($duplicates) ?>)</h3>
    
    <?php if (empty($duplicates)): ?>
    <div class="text-center py-8">
        <i class="fas fa-check-circle text-4xl text-green-300 mb-3"></i>
        <p class="text-gray-500">No duplicate persons detected. All records appear unique.</p>
    </div>
    <?php else: ?>
    <div class="space-y-3">
        <?php foreach ($duplicates as $dup): 
            $ids = explode(',', $dup['person_ids']);
            $names = explode('||', $dup['names']);
            $matchColor = match($dup['match_type']) { 'PAN' => 'blue', 'DIN' => 'indigo', 'Mobile' => 'green', 'Aadhaar' => 'purple', default => 'gray' };
        ?>
        <div class="p-4 border rounded-lg hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <span class="px-2 py-1 bg-<?= $matchColor ?>-100 text-<?= $matchColor ?>-700 rounded text-xs font-bold mr-2"><?= $dup['match_type'] ?></span>
                    <span class="font-mono text-sm text-gray-700"><?= htmlspecialchars($dup['match_value']) ?></span>
                    <span class="text-gray-400 text-sm ml-2">(<?= $dup['cnt'] ?> persons)</span>
                </div>
                <?php if (count($ids) === 2): ?>
                <a href="?step=compare&primary=<?= $ids[0] ?>&secondary=<?= $ids[1] ?>" class="btn btn-primary text-sm">
                    <i class="fas fa-columns mr-1"></i>Compare & Merge
                </a>
                <?php endif; ?>
            </div>
            <div class="flex flex-wrap gap-3 mt-3">
                <?php for ($i = 0; $i < count($ids); $i++): ?>
                <a href="person_view.php?id=<?= $ids[$i] ?>" class="flex items-center gap-2 px-3 py-2 bg-gray-50 rounded-lg hover:bg-gray-100 text-sm">
                    <div class="w-7 h-7 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center text-xs font-bold">
                        <?= getPersonInitials($names[$i] ?? 'U') ?>
                    </div>
                    <span class="font-medium"><?= htmlspecialchars($names[$i] ?? 'Unknown') ?></span>
                    <span class="text-gray-400">#<?= $ids[$i] ?></span>
                </a>
                <?php endfor; ?>
            </div>
            <?php if (count($ids) > 2): ?>
            <p class="text-xs text-gray-400 mt-2">More than 2 matches — use manual merge to select a specific pair.</p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?php elseif ($step === 'compare' && $primaryPerson && $secondaryPerson): ?>
<!-- ===================== STEP 2: SIDE-BY-SIDE COMPARISON ===================== -->

<form method="POST" action="?step=execute" id="mergeForm">
    <input type="hidden" name="primary_id" value="<?= $primaryPerson['id'] ?>">
    <input type="hidden" name="secondary_id" value="<?= $secondaryPerson['id'] ?>">

    <!-- Person Headers -->
    <div class="grid grid-cols-12 gap-4 mb-4">
        <div class="col-span-4"></div>
        <div class="col-span-4 card p-4 bg-blue-50 border-blue-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-blue-200 text-blue-700 flex items-center justify-center font-bold text-sm"><?= getPersonInitials($primaryPerson['full_name']) ?></div>
                <div>
                    <p class="font-bold text-blue-800"><?= htmlspecialchars($primaryPerson['full_name']) ?></p>
                    <p class="text-xs text-blue-600">PRIMARY (keep) · #<?= $primaryPerson['id'] ?></p>
                    <p class="text-xs text-blue-500"><?= count($primaryClients) ?> client links · <?= getPersonDocumentCount($primaryPerson['id']) ?> docs</p>
                </div>
            </div>
        </div>
        <div class="col-span-4 card p-4 bg-amber-50 border-amber-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-amber-200 text-amber-700 flex items-center justify-center font-bold text-sm"><?= getPersonInitials($secondaryPerson['full_name']) ?></div>
                <div>
                    <p class="font-bold text-amber-800"><?= htmlspecialchars($secondaryPerson['full_name']) ?></p>
                    <p class="text-xs text-amber-600">SECONDARY (merge & delete) · #<?= $secondaryPerson['id'] ?></p>
                    <p class="text-xs text-amber-500"><?= count($secondaryClients) ?> client links · <?= getPersonDocumentCount($secondaryPerson['id']) ?> docs</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick actions -->
    <div class="card p-3 mb-4 flex items-center gap-3 bg-gray-50">
        <span class="text-sm font-medium text-gray-600">Quick:</span>
        <button type="button" onclick="selectAll('primary')" class="px-3 py-1 bg-blue-100 text-blue-700 rounded text-sm hover:bg-blue-200">Keep all Primary</button>
        <button type="button" onclick="selectAll('secondary')" class="px-3 py-1 bg-amber-100 text-amber-700 rounded text-sm hover:bg-amber-200">Keep all Secondary</button>
        <button type="button" onclick="selectAll('fill_blanks')" class="px-3 py-1 bg-green-100 text-green-700 rounded text-sm hover:bg-green-200">Fill blanks from Secondary</button>
    </div>

    <!-- Field-by-field comparison -->
    <div class="card overflow-hidden mb-6">
        <table class="w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase w-1/4">Field</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-blue-600 uppercase w-1/3">Primary (Keep)</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-amber-600 uppercase w-1/3">Secondary (Merge)</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase w-24">Pick</th>
                </tr>
            </thead>
            <tbody class="divide-y">
            <?php
            $fieldLabels = [
                'full_name' => 'Full Name', 'father_name' => "Father's Name", 'dob' => 'Date of Birth',
                'gender' => 'Gender', 'nationality' => 'Nationality',
                'mobile' => 'Mobile', 'alternate_mobile' => 'Alt. Mobile',
                'email' => 'Email', 'alternate_email' => 'Alt. Email',
                'address' => 'Address (Legacy)',
                'present_address_line1' => 'Present Addr Line 1', 'present_city' => 'Present City',
                'present_state' => 'Present State', 'present_pincode' => 'Present PIN',
                'permanent_address_line1' => 'Permanent Addr Line 1', 'permanent_city' => 'Permanent City',
                'pan_number' => 'PAN', 'aadhaar_number' => 'Aadhaar', 'passport_number' => 'Passport',
                'din' => 'DIN', 'din_allotment_date' => 'DIN Allotment',
                'dpin' => 'DPIN', 'dpin_allotment_date' => 'DPIN Allotment',
                'occupation' => 'Occupation', 'educational_qualification' => 'Qualification',
                'dsc_status' => 'DSC Status', 'dsc_class' => 'DSC Class',
                'dsc_expiry_date' => 'DSC Expiry', 'dsc_provider' => 'DSC Provider',
                'dsc_token_number' => 'DSC Token #', 'dsc_password_hint' => 'DSC Password Hint',
                'din_kyc_status' => 'KYC Status', 'din_kyc_due_date' => 'KYC Due Date',
                'kyc_form_type' => 'KYC Form Type', 'last_kyc_filed_date' => 'Last KYC Filed',
                'last_kyc_srn' => 'Last KYC SRN',
                'photo_path' => 'Photo', 'signature_path' => 'Signature',
                'internal_notes' => 'Internal Notes',
            ];
            
            foreach ($fieldLabels as $field => $label):
                $pVal = $primaryPerson[$field] ?? '';
                $sVal = $secondaryPerson[$field] ?? '';
                $isDiff = ($pVal != $sVal);
                $pDisplay = $pVal ?: '—';
                $sDisplay = $sVal ?: '—';
                
                // Format dates
                if (str_contains($field, 'date') && $pVal) $pDisplay = date('d M Y', strtotime($pVal));
                if (str_contains($field, 'date') && $sVal) $sDisplay = date('d M Y', strtotime($sVal));
                
                // Mask aadhaar
                if ($field === 'aadhaar_number') {
                    if ($pVal) $pDisplay = maskAadhaar($pVal);
                    if ($sVal) $sDisplay = maskAadhaar($sVal);
                }
            ?>
            <tr class="field-row <?= $isDiff ? '' : 'opacity-60' ?>" data-field="<?= $field ?>">
                <td class="px-4 py-2 font-medium text-gray-700"><?= $label ?></td>
                <td class="px-4 py-2 <?= !$pVal && $sVal ? 'text-gray-300' : '' ?>"><?= htmlspecialchars($pDisplay) ?></td>
                <td class="px-4 py-2 <?= !$sVal && $pVal ? 'text-gray-300' : '' ?>"><?= htmlspecialchars($sDisplay) ?></td>
                <td class="px-4 py-2 text-center">
                    <?php if ($isDiff): ?>
                    <div class="flex items-center justify-center gap-1">
                        <label class="pick-btn bg-blue-50 text-blue-700 selected" title="Keep primary">
                            <input type="radio" name="field_<?= $field ?>" value="primary" checked class="hidden"> P
                        </label>
                        <label class="pick-btn bg-amber-50 text-amber-700" title="Use secondary">
                            <input type="radio" name="field_<?= $field ?>" value="secondary" class="hidden"> S
                        </label>
                    </div>
                    <?php else: ?>
                    <input type="hidden" name="field_<?= $field ?>" value="primary">
                    <span class="text-gray-300 text-xs">Same</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- What will be reassigned -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="card p-4">
            <h4 class="font-bold text-gray-700 mb-3"><i class="fas fa-building text-blue-500 mr-2"></i>Client Links to Reassign</h4>
            <?php if (empty($secondaryClients)): ?>
            <p class="text-gray-400 text-sm">No client links on secondary person.</p>
            <?php else: ?>
            <div class="space-y-2">
                <?php foreach ($secondaryClients as $sc): 
                    $alreadyLinked = in_array($sc['id'], array_column($primaryClients, 'id'));
                ?>
                <div class="flex items-center justify-between text-sm p-2 rounded <?= $alreadyLinked ? 'bg-amber-50' : 'bg-green-50' ?>">
                    <span><?= htmlspecialchars($sc['name']) ?> — <?= getRoleLabel($sc['role_type']) ?></span>
                    <span class="text-xs <?= $alreadyLinked ? 'text-amber-600' : 'text-green-600' ?>">
                        <?= $alreadyLinked ? 'Already linked (skip)' : 'Will transfer' ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="card p-4">
            <h4 class="font-bold text-gray-700 mb-3"><i class="fas fa-file-alt text-purple-500 mr-2"></i>Records to Reassign</h4>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between"><span class="text-gray-600">Documents</span><span class="font-medium"><?= getPersonDocumentCount($secondaryPerson['id']) ?></span></div>
                <div class="flex justify-between"><span class="text-gray-600">DSC History</span><span class="font-medium"><?= count(getPersonDSCHistory($secondaryPerson['id'])) ?></span></div>
                <div class="flex justify-between"><span class="text-gray-600">KYC History</span><span class="font-medium"><?= count(getPersonKYCHistory($secondaryPerson['id'])) ?></span></div>
            </div>
            <p class="text-xs text-gray-400 mt-3">All records will be moved to the primary person. The secondary will be soft-deleted with an audit note.</p>
        </div>
    </div>

    <!-- Merge Button -->
    <div class="card p-4 bg-red-50 border-red-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="font-bold text-red-800"><i class="fas fa-exclamation-triangle mr-2"></i>Confirm Merge</p>
                <p class="text-sm text-red-600 mt-1">
                    This will merge <strong><?= htmlspecialchars($secondaryPerson['full_name']) ?></strong> (#<?= $secondaryPerson['id'] ?>)
                    into <strong><?= htmlspecialchars($primaryPerson['full_name']) ?></strong> (#<?= $primaryPerson['id'] ?>).
                    The secondary record will be soft-deleted. This action cannot be easily undone.
                </p>
            </div>
            <div class="flex gap-2">
                <a href="merge_persons.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300">Cancel</a>
                <button type="submit" class="btn bg-red-600 text-white hover:bg-red-700" onclick="return confirm('Are you sure? This will merge the secondary person into the primary and soft-delete the secondary.')">
                    <i class="fas fa-code-branch mr-1"></i>Execute Merge
                </button>
            </div>
        </div>
    </div>
</form>

<script>
// Radio button visual toggle
document.querySelectorAll('.pick-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const row = this.closest('td');
        row.querySelectorAll('.pick-btn').forEach(b => b.classList.remove('selected'));
        this.classList.add('selected');
        this.querySelector('input').checked = true;
    });
});

function selectAll(value) {
    document.querySelectorAll('input[type="radio"][value="' + value + '"]').forEach(r => {
        r.checked = true;
        const btn = r.closest('.pick-btn');
        if (btn) {
            btn.closest('td').querySelectorAll('.pick-btn').forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');
        }
    });
    // For hidden fields where values are same, set to primary
    document.querySelectorAll('input[type="hidden"][name^="field_"]').forEach(h => {
        if (value === 'primary' || value === 'fill_blanks') h.value = value;
    });
}
</script>

<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
