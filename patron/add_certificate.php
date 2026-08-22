<?php
/**
 * PATRON - Add Certificate with OCR Extraction
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$errors = [];
$savedCount = 0;
$clientId = (int)($_GET['client_id'] ?? 0);
$showDuplicateWarning = false;
$duplicateInfo = [];

$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];
$certTypes = dbFetchAll("SELECT * FROM certificate_types WHERE is_active = 1 ORDER BY name") ?: [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_certificates'])) {
    $clientId = (int)($_POST['client_id'] ?? 0);
    $certificates = $_POST['certificates'] ?? [];
    $updateClient = isset($_POST['update_client']) && $_POST['update_client'] === '1';
    $confirmedReplace = $_POST['confirmed_replace'] ?? [];
    
    if (!$clientId) {
        $errors[] = 'Please select a client.';
    } elseif (empty($certificates)) {
        $errors[] = 'No certificates to save.';
    } else {
        // First pass: Check for duplicates
        $duplicates = [];
        foreach ($certificates as $index => $cert) {
            $certTypeId = (int)($cert['certificate_type_id'] ?? 0);
            if (!$certTypeId) continue;
            
            // Check if certificate of this type already exists for client (exclude deleted)
            $existing = dbFetchOne(
                "SELECT cc.id, cc.certificate_number, cc.issue_date, ct.name as type_name 
                 FROM client_certificates cc 
                 JOIN certificate_types ct ON cc.certificate_type_id = ct.id 
                 WHERE cc.client_id = ? AND cc.certificate_type_id = ? AND cc.status = 'ACTIVE' AND cc.deleted_at IS NULL",
                [$clientId, $certTypeId]
            );
            
            if ($existing && !in_array($index, $confirmedReplace)) {
                $duplicates[$index] = $existing;
            }
        }
        
        // If duplicates found and not confirmed, show confirmation dialog
        if (!empty($duplicates)) {
            $showDuplicateWarning = true;
            $duplicateInfo = $duplicates;
        } else {
            // No duplicates or all confirmed - proceed with save
            $allExtractedData = [];
        
        foreach ($certificates as $index => $cert) {
            $certTypeId = (int)($cert['certificate_type_id'] ?? 0);
            $certNumber = trim($cert['certificate_number'] ?? '');
            $issueDate = trim($cert['issue_date'] ?? '');
            $expiryDate = trim($cert['expiry_date'] ?? '');
            $filePath = trim($cert['file_path'] ?? '');
            $extractedJson = $cert['extracted_data'] ?? '';
            
            // Debug: Log extracted data
            error_log("ADD_CERT DEBUG row $index: extractedJson length=" . strlen($extractedJson));
            
            if (!$certTypeId || !$issueDate) continue;
            
            try {
                // If replacing, deactivate old certificate first
                if (in_array($index, $confirmedReplace)) {
                    dbExecute(
                        "UPDATE client_certificates SET status = 'EXPIRED', updated_at = NOW() WHERE client_id = ? AND certificate_type_id = ? AND status = 'ACTIVE' AND deleted_at IS NULL",
                        [$clientId, $certTypeId]
                    );
                }
                
                $sql = "INSERT INTO client_certificates 
                        (client_id, certificate_type_id, certificate_number, issue_date, expiry_date, file_path, status, created_by, created_at)
                        VALUES (?, ?, ?, ?, ?, ?, 'ACTIVE', ?, NOW())";
                $params = [
                    $clientId,
                    $certTypeId,
                    $certNumber ?: null,
                    $issueDate,
                    $expiryDate ?: null,
                    $filePath ?: null,
                    $_SESSION['user_id']
                ];
                dbExecute($sql, $params);
                $savedCount++;
                
                // Collect extracted data for client update
                if (!empty($extractedJson)) {
                    $extracted = json_decode($extractedJson, true);
                    if ($extracted) $allExtractedData[] = $extracted;
                }
            } catch (Exception $e) {
                $errors[] = "Row " . ($index + 1) . ": " . $e->getMessage();
            }
        }
        
        // Update client with extracted data
        if ($updateClient && !empty($allExtractedData)) {
            updateClientFromExtracted($clientId, $allExtractedData);
        }
        
        if ($savedCount > 0 && empty($errors)) {
            header("Location: client_view.php?id=$clientId&tab=certificates&success=$savedCount");
            exit;
        }
        } // End of no-duplicates else block
    }
}

function updateClientFromExtracted($clientId, $allData) {
    $merged = [];
    $allPersons = [];
    
    foreach ($allData as $data) {
        if (isset($data['client_data'])) {
            foreach ($data['client_data'] as $k => $v) {
                if (!empty($v) && empty($merged[$k])) $merged[$k] = $v;
            }
        }
        if (isset($data['person_data']) && is_array($data['person_data'])) {
            foreach ($data['person_data'] as $person) {
                $allPersons[] = $person;
            }
        }
    }
    
    // Update client fields
    if (!empty($merged)) {
        $map = ['cin'=>'cin','llpin'=>'llpin','pan'=>'pan','tan'=>'tan','gstin'=>'gstin','email'=>'email','mobile'=>'mobile','registered_address'=>'registered_address'];
        $updates = [];
        $params = [];
        
        foreach ($map as $k => $col) {
            if (!empty($merged[$k])) {
                $cur = dbFetchOne("SELECT $col FROM clients WHERE id = ?", [$clientId]);
                if (empty($cur[$col])) {
                    $updates[] = "$col = ?";
                    $params[] = $merged[$k];
                }
            }
        }
        
        if ($updates) {
            $params[] = $clientId;
            dbExecute("UPDATE clients SET " . implode(', ', $updates) . " WHERE id = ?", $params);
        }
    }
    
    // Create/update persons (directors/partners)
    if (!empty($allPersons)) {
        createPersonsFromExtracted($clientId, $allPersons);
    }
}

function createPersonsFromExtracted($clientId, $persons) {
    foreach ($persons as $person) {
        $fullName = trim($person['full_name'] ?? '');
        $din = trim($person['din'] ?? '');
        $roleType = $person['role_type'] ?? 'DIRECTOR';
        $appointmentDate = $person['appointment_date'] ?? null;
        
        if (empty($fullName)) continue;
        
        // Check if person already exists by DIN
        $existing = null;
        if ($din) {
            $existing = dbFetchOne(
                "SELECT p.id FROM persons_new p 
                 JOIN client_persons cp ON p.id = cp.person_id 
                 WHERE cp.client_id = ? AND p.din = ?",
                [$clientId, $din]
            );
        }
        
        // Check by name if not found by DIN
        if (!$existing) {
            $existing = dbFetchOne(
                "SELECT p.id FROM persons_new p 
                 JOIN client_persons cp ON p.id = cp.person_id 
                 WHERE cp.client_id = ? AND LOWER(TRIM(p.full_name)) = LOWER(?)",
                [$clientId, $fullName]
            );
        }
        
        if ($existing) {
            // Update DIN if missing
            if ($din) {
                $currentPerson = dbFetchOne("SELECT din FROM persons_new WHERE id = ?", [$existing['id']]);
                if (empty($currentPerson['din'])) {
                    dbExecute("UPDATE persons_new SET din = ?, updated_at = NOW() WHERE id = ?", [$din, $existing['id']]);
                }
            }
        } else {
            // Create new person
            try {
                dbExecute(
                    "INSERT INTO persons_new (full_name, din, status, created_at, updated_at) 
                     VALUES (?, ?, 'ACTIVE', NOW(), NOW())",
                    [$fullName, $din ?: null]
                );
                $personId = dbLastInsertId();
                
                // Determine role type
                $roleTypeDb = 'DIRECTOR';
                if (stripos($roleType, 'DESIGNATED') !== false) {
                    $roleTypeDb = 'DESIGNATED_PARTNER';
                } elseif (stripos($roleType, 'PARTNER') !== false) {
                    $roleTypeDb = 'PARTNER';
                }
                
                // Link person to client
                dbExecute(
                    "INSERT INTO client_persons (client_id, person_id, role_type, appointment_date, is_active, created_at) 
                     VALUES (?, ?, ?, ?, 1, NOW())",
                    [$clientId, $personId, $roleTypeDb, $appointmentDate]
                );
            } catch (Exception $e) {
                error_log("Error creating person: " . $e->getMessage());
            }
        }
    }
}

$pageTitle = 'Add Certificates';
include 'includes/header.php';
?>

<style>
.cert-table { width: 100%; border-collapse: collapse; font-size: 13px; }
.cert-table th { background: #f8f9fa; padding: 12px; text-align: left; font-size: 11px; font-weight: 600; text-transform: uppercase; border-bottom: 2px solid #dee2e6; }
.cert-table td { padding: 12px; border-bottom: 1px solid #eee; vertical-align: top; }
.cert-table tr:hover { background: #f8f9fc; }

.file-drop {
    border: 2px dashed #d0d0d0;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s;
    background: #fafafa;
    min-height: 60px;
}
.file-drop:hover { border-color: #7c3aed; background: #f8f5ff; }
.file-drop.has-file { border-color: #22c55e; background: #f0fdf4; border-style: solid; }
.file-drop input[type="file"] { display: none; }
.file-drop-icon { font-size: 20px; color: #aaa; }
.file-drop.has-file .file-drop-icon { color: #22c55e; }
.file-name { font-size: 11px; margin-top: 5px; word-break: break-all; }

.btn-extract {
    background: linear-gradient(135deg, #7c3aed, #6d28d9);
    color: white;
    border: none;
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 12px;
    cursor: pointer;
    margin-top: 8px;
    display: none;
}
.btn-extract:hover { background: linear-gradient(135deg, #6d28d9, #5b21b6); }
.btn-extract.show { display: inline-flex; align-items: center; gap: 5px; }
.btn-extract:disabled { background: #ccc; cursor: wait; }

.extract-result {
    margin-top: 8px;
    padding: 8px 10px;
    border-radius: 6px;
    font-size: 11px;
    display: none;
}
.extract-result.success { display: block; background: #ecfdf5; border-left: 3px solid #22c55e; }
.extract-result.warning { display: block; background: #fffbeb; border-left: 3px solid #f59e0b; }
.extract-result .doc-type { background: #dcfce7; color: #166534; padding: 2px 8px; border-radius: 4px; font-weight: 600; }

.btn-row { background: none; border: none; padding: 5px 8px; cursor: pointer; border-radius: 4px; }
.btn-row-add { color: #7c3aed; }
.btn-row-add:hover { background: #f3f0ff; }
.btn-row-del { color: #999; }
.btn-row-del:hover { background: #fee; color: #dc2626; }

.summary-bar {
    background: linear-gradient(135deg, #f5f3ff, #ede9fe);
    border: 1px solid #ddd6fe;
    border-radius: 8px;
    padding: 10px 16px;
    display: inline-flex;
    gap: 20px;
    font-size: 13px;
}
.summary-bar .num { font-weight: 700; color: #7c3aed; font-size: 16px; }

.spinner { 
    width: 14px; height: 14px; 
    border: 2px solid rgba(255,255,255,0.3); 
    border-top-color: white; 
    border-radius: 50%; 
    animation: spin 0.6s linear infinite; 
}
@keyframes spin { to { transform: rotate(360deg); } }
</style>

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0"><i class="fas fa-file-upload text-primary me-2"></i>Add Certificates</h4>
        <a href="<?= $clientId ? "client_view.php?id=$clientId&tab=certificates" : 'certificates.php' ?>" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Back
        </a>
    </div>
    
    <?php if ($errors): ?>
    <div class="alert alert-danger py-2"><?= implode('<br>', $errors) ?></div>
    <?php endif; ?>
    
    <form method="POST" id="certForm">
        <input type="hidden" name="save_certificates" value="1">
        
        <!-- Client & Summary -->
        <div class="card mb-3">
            <div class="card-body py-2">
                <div class="row align-items-center g-2">
                    <div class="col-auto"><strong>Client:</strong></div>
                    <div class="col-md-3">
                        <select name="client_id" id="clientSelect" class="form-select form-select-sm" required>
                            <option value="">-- Select Client --</option>
                            <?php foreach ($clients as $c): ?>
                            <option value="<?= $c['id'] ?>" <?= $c['id']==$clientId?'selected':'' ?>><?= htmlspecialchars($c['name']) ?> (<?= $c['entity_type'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label class="form-check mb-0 small">
                            <input type="checkbox" class="form-check-input" name="update_client" value="1" checked>
                            <span class="form-check-label">Auto-update client</span>
                        </label>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="summary-bar">
                            <span><span class="num" id="rowCount">0</span> certificates</span>
                            <span><span class="num" id="extractCount">0</span> extracted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Table -->
        <div class="card">
            <div class="card-header py-2 d-flex justify-content-between align-items-center">
                <span class="fw-semibold"><i class="fas fa-list me-2"></i>Certificates</span>
                <button type="button" class="btn btn-primary btn-sm" onclick="addRow()">
                    <i class="fas fa-plus me-1"></i> Add Row
                </button>
            </div>
            <table class="cert-table">
                <thead>
                    <tr>
                        <th width="200">Type *</th>
                        <th width="220">Upload & Extract</th>
                        <th width="150">Number</th>
                        <th width="130">Issue Date *</th>
                        <th width="130">Expiry</th>
                        <th width="70"></th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
            <div id="emptyMsg" class="text-center py-4 text-muted">
                No certificates added. <a href="#" onclick="addRow();return false;">Add one</a>
            </div>
        </div>
        
        <!-- Actions -->
        <div class="d-flex justify-content-between mt-3">
            <a href="<?= $clientId ? "client_view.php?id=$clientId" : 'certificates.php' ?>" class="btn btn-outline-secondary">Cancel</a>
            <button type="submit" class="btn btn-success px-4" id="saveBtn">
                <i class="fas fa-save me-1"></i> Save All Certificates
            </button>
        </div>
    </form>
    
    <?php if ($showDuplicateWarning && !empty($duplicateInfo)): ?>
    <!-- Duplicate Warning Modal -->
    <div class="modal fade show" id="duplicateModal" style="display:block; background:rgba(0,0,0,0.5);" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title"><i class="fas fa-exclamation-triangle me-2"></i>Duplicate Certificates Found</h5>
                </div>
                <div class="modal-body">
                    <p>The following certificate types already exist for this client:</p>
                    <form method="POST" id="confirmReplaceForm">
                        <input type="hidden" name="save_certificates" value="1">
                        <input type="hidden" name="client_id" value="<?= $clientId ?>">
                        <input type="hidden" name="update_client" value="<?= $updateClient ? '1' : '0' ?>">
                        
                        <?php foreach ($certificates as $idx => $cert): ?>
                            <input type="hidden" name="certificates[<?= $idx ?>][certificate_type_id]" value="<?= htmlspecialchars($cert['certificate_type_id'] ?? '') ?>">
                            <input type="hidden" name="certificates[<?= $idx ?>][certificate_number]" value="<?= htmlspecialchars($cert['certificate_number'] ?? '') ?>">
                            <input type="hidden" name="certificates[<?= $idx ?>][issue_date]" value="<?= htmlspecialchars($cert['issue_date'] ?? '') ?>">
                            <input type="hidden" name="certificates[<?= $idx ?>][expiry_date]" value="<?= htmlspecialchars($cert['expiry_date'] ?? '') ?>">
                            <input type="hidden" name="certificates[<?= $idx ?>][file_path]" value="<?= htmlspecialchars($cert['file_path'] ?? '') ?>">
                            <input type="hidden" name="certificates[<?= $idx ?>][extracted_data]" value="<?= htmlspecialchars($cert['extracted_data'] ?? '') ?>">
                        <?php endforeach; ?>
                        
                        <div class="list-group mb-3">
                        <?php foreach ($duplicateInfo as $idx => $existing): ?>
                            <label class="list-group-item d-flex align-items-center">
                                <input type="checkbox" name="confirmed_replace[]" value="<?= $idx ?>" class="form-check-input me-3" checked>
                                <div>
                                    <strong><?= htmlspecialchars($existing['type_name']) ?></strong><br>
                                    <small class="text-muted">
                                        Current: <?= htmlspecialchars($existing['certificate_number'] ?: 'No number') ?> 
                                        (Issued: <?= $existing['issue_date'] ?>)
                                    </small>
                                </div>
                            </label>
                        <?php endforeach; ?>
                        </div>
                        
                        <p class="small text-muted"><i class="fas fa-info-circle me-1"></i>Checked items will be replaced (old certificate marked as expired). Unchecked items will be skipped.</p>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="add_certificate.php<?= $clientId ? "?client_id=$clientId" : '' ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" form="confirmReplaceForm" class="btn btn-warning">
                        <i class="fas fa-sync-alt me-1"></i> Replace Selected
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<script>
const certTypes = <?= json_encode($certTypes) ?>;
const ocrToCertCode = {
    'COI': 'COI', 'LLP_COI': 'LLPIN', 'GST_CERT': 'GST_REG', 'MCA_MASTER': 'COI',
    'LLP_MASTER': 'LLPIN', 'PTEC': 'PTEC', 'PTRC': 'PTRC', 'UDYAM': 'MSME',
    'PAN_CARD': 'PAN', 'TAN_ALLOTMENT': 'TAN', 'IEC': 'IEC', 'FSSAI': 'FSSAI'
};

let rowIdx = 0;
let files = {};

function addRow() {
    document.getElementById('emptyMsg').style.display = 'none';
    
    const tr = document.createElement('tr');
    tr.dataset.idx = rowIdx;
    tr.innerHTML = `
        <td>
            <select class="form-select form-select-sm cert-type" name="certificates[${rowIdx}][certificate_type_id]" required>
                <option value="">-- Select Type --</option>
                ${certTypes.map(t => `<option value="${t.id}" data-code="${t.code || ''}">${t.name}</option>`).join('')}
            </select>
        </td>
        <td>
            <div class="file-drop" onclick="this.querySelector('input').click()">
                <input type="file" accept=".pdf,.jpg,.jpeg,.png" onchange="onFileSelect(this, ${rowIdx})">
                <div class="file-drop-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <div class="file-name text-muted">Click or drag file</div>
            </div>
            <button type="button" class="btn-extract" onclick="extractData(${rowIdx})">
                <i class="fas fa-magic"></i> Extract Data
            </button>
            <div class="extract-result"></div>
            <input type="hidden" name="certificates[${rowIdx}][file_path]" class="fpath">
            <input type="hidden" name="certificates[${rowIdx}][extracted_data]" class="fdata">
        </td>
        <td>
            <input type="text" class="form-control form-control-sm cert-number" name="certificates[${rowIdx}][certificate_number]" placeholder="Auto or manual">
        </td>
        <td>
            <input type="date" class="form-control form-control-sm cert-issue" name="certificates[${rowIdx}][issue_date]" value="${new Date().toISOString().slice(0,10)}" required>
        </td>
        <td>
            <input type="date" class="form-control form-control-sm cert-expiry" name="certificates[${rowIdx}][expiry_date]">
        </td>
        <td class="text-center">
            <button type="button" class="btn-row btn-row-add" onclick="addRow()" title="Add row"><i class="fas fa-plus"></i></button>
            <button type="button" class="btn-row btn-row-del" onclick="removeRow(this)" title="Remove"><i class="fas fa-trash"></i></button>
        </td>
    `;
    
    // Drag & drop
    const drop = tr.querySelector('.file-drop');
    drop.ondragover = e => { e.preventDefault(); drop.style.borderColor = '#7c3aed'; };
    drop.ondragleave = () => { drop.style.borderColor = drop.classList.contains('has-file') ? '#22c55e' : '#d0d0d0'; };
    drop.ondrop = e => {
        e.preventDefault();
        drop.style.borderColor = '#d0d0d0';
        if (e.dataTransfer.files.length) {
            const input = drop.querySelector('input[type="file"]');
            input.files = e.dataTransfer.files;
            onFileSelect(input, parseInt(tr.dataset.idx));
        }
    };
    
    document.getElementById('tbody').appendChild(tr);
    rowIdx++;
    updateSummary();
}

function removeRow(btn) {
    const tr = btn.closest('tr');
    delete files[tr.dataset.idx];
    tr.remove();
    if (!document.querySelectorAll('#tbody tr').length) {
        document.getElementById('emptyMsg').style.display = 'block';
    }
    updateSummary();
}

function onFileSelect(input, idx) {
    const file = input.files[0];
    if (!file) return;
    
    files[idx] = file;
    const tr = input.closest('tr');
    const drop = tr.querySelector('.file-drop');
    const nameEl = drop.querySelector('.file-name');
    const extractBtn = tr.querySelector('.btn-extract');
    
    drop.classList.add('has-file');
    nameEl.textContent = file.name.length > 25 ? file.name.slice(0, 22) + '...' : file.name;
    nameEl.classList.remove('text-muted');
    extractBtn.classList.add('show');
    
    // Clear previous extraction
    tr.querySelector('.extract-result').className = 'extract-result';
    tr.querySelector('.fdata').value = '';
    
    updateSummary();
}

async function extractData(idx) {
    const file = files[idx];
    if (!file) return;
    
    const tr = document.querySelector(`tr[data-idx="${idx}"]`);
    const btn = tr.querySelector('.btn-extract');
    const result = tr.querySelector('.extract-result');
    
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner"></span> Extracting...';
    
    const fd = new FormData();
    fd.append('certificate_file', file);
    fd.append('action', 'ocr_extract');
    
    try {
        const res = await fetch('ajax/ocr_extract.php', { method: 'POST', body: fd });
        const text = await res.text();
        let data;
        try { data = JSON.parse(text); } catch(e) { throw new Error('Invalid response from server'); }
        
        if (data.success && data.data) {
            const d = data.data;
            
            // Store extracted data
            tr.querySelector('.fdata').value = JSON.stringify(d);
            
            // Auto-select certificate type
            const docType = d.document_type || '';
            const code = ocrToCertCode[docType];
            if (code) {
                const sel = tr.querySelector('.cert-type');
                [...sel.options].forEach(opt => {
                    if (opt.dataset.code === code) sel.value = opt.value;
                });
            }
            
            // Auto-fill number and date
            if (d.certificate_data?.certificate_number) {
                tr.querySelector('.cert-number').value = d.certificate_data.certificate_number;
            }
            if (d.certificate_data?.issue_date) {
                tr.querySelector('.cert-issue').value = d.certificate_data.issue_date;
            }
            
            // Show success
            let html = `<span class="doc-type">${docType.replace(/_/g, ' ')}</span>`;
            if (d.certificate_data?.certificate_number) {
                html += ` <span class="text-muted">${d.certificate_data.certificate_number}</span>`;
            }
            if (d.person_data?.length) {
                html += `<br><small class="text-primary"><i class="fas fa-users"></i> ${d.person_data.length} person(s) found</small>`;
            }
            result.innerHTML = html;
            result.className = 'extract-result success';
            
            // Upload file
            await uploadFile(idx, file);
            
        } else {
            result.innerHTML = `<i class="fas fa-exclamation-triangle text-warning"></i> ${data.error || 'Could not extract'}<br><small>Please fill details manually</small>`;
            result.className = 'extract-result warning';
            // Still upload the file
            await uploadFile(idx, file);
        }
    } catch(e) {
        result.innerHTML = `<i class="fas fa-exclamation-triangle text-warning"></i> ${e.message}<br><small>Please fill details manually</small>`;
        result.className = 'extract-result warning';
    }
    
    btn.disabled = false;
    btn.innerHTML = '<i class="fas fa-magic"></i> Extract Data';
    updateSummary();
}

async function uploadFile(idx, file) {
    const tr = document.querySelector(`tr[data-idx="${idx}"]`);
    
    const fd = new FormData();
    fd.append('certificate_file', file);
    fd.append('action', 'upload_file');
    fd.append('client_id', document.getElementById('clientSelect').value || '0');
    
    try {
        const res = await fetch('ajax/ocr_extract.php', { method: 'POST', body: fd });
        const data = await res.json();
        if (data.success && data.file_path) {
            tr.querySelector('.fpath').value = data.file_path;
        }
    } catch(e) {
        console.error('Upload error:', e);
    }
}

function updateSummary() {
    const rows = document.querySelectorAll('#tbody tr').length;
    const extracted = document.querySelectorAll('#tbody .extract-result.success').length;
    document.getElementById('rowCount').textContent = rows;
    document.getElementById('extractCount').textContent = extracted;
}

// Add first row on load
addRow();
</script>

<?php include 'includes/footer.php'; ?>
