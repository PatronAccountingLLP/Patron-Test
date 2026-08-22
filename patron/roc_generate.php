<?php
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Generate ROC Document';

$editId = (int)($_GET['edit'] ?? 0);
$editDoc = null; $editFields = [];
$presetClient = (int)($_GET['client_id'] ?? 0);
$presetTemplate = (int)($_GET['template_id'] ?? 0);

if ($editId) {
    $editDoc = dbFetchOne("SELECT d.*, t.name as template_name FROM roc_generated_documents d JOIN roc_templates t ON t.id = d.template_id WHERE d.id = ?", [$editId]);
    if ($editDoc) {
        $presetClient = $editDoc['client_id'];
        $presetTemplate = $editDoc['template_id'];
        $editFields = json_decode($editDoc['field_values_json'] ?? '{}', true) ?: [];
    }
}

$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE status = 'ACTIVE' AND deleted_at IS NULL AND name != '' ORDER BY name") ?: [];
$templates = dbFetchAll("SELECT * FROM roc_templates WHERE is_active = 1 ORDER BY category, sort_order, name") ?: [];

require_once 'includes/header.php';
?>
<style>
.step{display:none}.step.active{display:block}
.step-indicator{display:flex;gap:8px;margin-bottom:24px}
.step-dot{width:32px;height:32px;border-radius:50%;background:#e5e7eb;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:14px;color:#6b7280}
.step-dot.active{background:#7c3aed;color:white}
.step-dot.completed{background:#10b981;color:white}
.field-group{margin-bottom:16px}
.field-label{font-size:12px;color:#6b7280;margin-bottom:4px;display:block}
.template-card{border:2px solid #e5e7eb;border-radius:12px;padding:16px;cursor:pointer;transition:all .2s}
.template-card:hover{border-color:#a78bfa;background:#faf5ff}
.template-card.selected{border-color:#7c3aed;background:#f5f3ff}
.preview-frame{background:white;border:1px solid #e5e7eb;border-radius:8px;padding:24px;min-height:400px;font-family:serif}
.cat-badge{padding:2px 8px;border-radius:4px;font-size:10px;font-weight:600}
.cat-RESOLUTION{background:#fce7f3;color:#9d174d}.cat-MINUTES{background:#e0f2fe;color:#0c4a6e}
.cat-NOTICE{background:#fef9c3;color:#854d0e}.cat-DECLARATION{background:#f0fdf4;color:#166534}
</style>

<div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800"><i class="fas fa-file-contract text-purple-600 mr-2"></i><?= $editDoc ? 'Edit' : 'Generate' ?> ROC Document</h1>
            <p class="text-gray-500 text-sm mt-1"><?= $editDoc ? 'Edit existing document' : 'Create board resolution, minutes, or notice' ?></p>
        </div>
        <a href="roc_documents.php" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm hover:bg-gray-200"><i class="fas fa-arrow-left mr-1"></i>Back</a>
    </div>

    <!-- Step Indicator -->
    <div class="step-indicator">
        <div class="step-dot active" id="dot-1">1</div>
        <div class="step-dot" id="dot-2">2</div>
        <div class="step-dot" id="dot-3">3</div>
        <div class="step-dot" id="dot-4">4</div>
    </div>

    <!-- Step 1: Select Client -->
    <div class="step active" id="step-1">
        <div class="bg-white rounded-xl border p-6">
            <h2 class="text-lg font-semibold mb-4"><i class="fas fa-building text-blue-500 mr-2"></i>Select Client</h2>
            <div class="max-w-md">
                <select id="clientSelect" class="form-input text-lg" onchange="clientSelected()">
                    <option value="">-- Select Client --</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>" data-type="<?= $c['entity_type'] ?>" <?= $presetClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?> (<?= $c['entity_type'] ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div id="clientInfo" class="mt-4 p-4 bg-blue-50 rounded-lg hidden"></div>
            <div class="mt-6">
                <button onclick="nextStep(2)" id="btnStep1" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 disabled:opacity-50" disabled>
                    Next: Choose Template <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Step 2: Choose Template -->
    <div class="step" id="step-2">
        <div class="bg-white rounded-xl border p-6">
            <h2 class="text-lg font-semibold mb-4"><i class="fas fa-file-alt text-purple-500 mr-2"></i>Choose Template</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="templateGrid">
                <?php 
                $currentCat = '';
                foreach ($templates as $t): 
                    if ($t['category'] !== $currentCat) { $currentCat = $t['category']; ?>
                <div class="col-span-full mt-4 first:mt-0"><span class="cat-badge cat-<?= $currentCat ?>"><?= $currentCat ?></span></div>
                    <?php } ?>
                <div class="template-card <?= $presetTemplate == $t['id'] ? 'selected' : '' ?>" data-id="<?= $t['id'] ?>" data-types="<?= $t['applicable_entity_types'] ?>" onclick="selectTemplate(<?= $t['id'] ?>)">
                    <div class="font-semibold text-gray-800"><?= htmlspecialchars($t['name']) ?></div>
                    <div class="text-xs text-gray-500 mt-1"><?= htmlspecialchars($t['description'] ?? '') ?></div>
                    <div class="text-xs text-purple-600 mt-2"><?= $t['code'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-6 flex gap-3">
                <button onclick="prevStep(1)" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                <button onclick="nextStep(3)" id="btnStep2" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 disabled:opacity-50" disabled>
                    Next: Fill Details <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Step 3: Fill Details -->
    <div class="step" id="step-3">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl border p-6">
                <h2 class="text-lg font-semibold mb-4"><i class="fas fa-edit text-green-500 mr-2"></i>Fill Details</h2>
                <div id="fieldsContainer"></div>
                <div class="mt-6 flex gap-3">
                    <button onclick="prevStep(2)" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                    <button onclick="nextStep(4)" class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700">
                        Next: Preview <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            <div>
                <div class="sticky top-6">
                    <h3 class="text-sm font-semibold text-gray-600 mb-2"><i class="fas fa-eye mr-1"></i>Live Preview</h3>
                    <div class="preview-frame" id="livePreview"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 4: Preview & Save -->
    <div class="step" id="step-4">
        <div class="bg-white rounded-xl border p-6">
            <h2 class="text-lg font-semibold mb-4"><i class="fas fa-check-circle text-green-500 mr-2"></i>Preview & Save</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div>
                    <label class="field-label">Document Title</label>
                    <input type="text" id="docTitle" class="form-input" placeholder="Optional custom title">
                </div>
                <div>
                    <label class="field-label">Resolution/Reference #</label>
                    <input type="text" id="docResNum" class="form-input" placeholder="e.g., BR-001/2024">
                </div>
                <div>
                    <label class="field-label">Meeting Date</label>
                    <input type="date" id="docMeetingDate" class="form-input">
                </div>
            </div>
            <div class="preview-frame mb-6" id="finalPreview" style="max-height:500px;overflow:auto"></div>
            <div class="flex flex-wrap gap-3">
                <button onclick="prevStep(3)" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                <button onclick="saveDocument('DRAFT')" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600"><i class="fas fa-save mr-2"></i>Save as Draft</button>
                <button onclick="saveDocument('FINAL')" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700"><i class="fas fa-check mr-2"></i>Save as Final</button>
                <label class="flex items-center gap-2 ml-auto">
                    <input type="checkbox" id="portalVisible" class="rounded">
                    <span class="text-sm text-gray-600">Show in Client Portal</span>
                </label>
            </div>
        </div>
    </div>
</div>

<script>
let currentStep = 1;
let selectedClient = <?= $presetClient ?>;
let selectedTemplate = <?= $presetTemplate ?>;
let clientData = null;
let clientPersons = [];
let templateData = null;
let templateFields = [];
let fieldValues = <?= json_encode($editFields) ?>;
let editDocId = <?= $editId ?>;

// Init
document.addEventListener('DOMContentLoaded', () => {
    if (selectedClient) {
        clientSelected();
        if (selectedTemplate) {
            setTimeout(() => { selectTemplate(selectedTemplate); nextStep(3); }, 500);
        }
    }
    <?php if ($editDoc): ?>
    document.getElementById('docTitle').value = <?= json_encode($editDoc['document_title'] ?? '') ?>;
    document.getElementById('docResNum').value = <?= json_encode($editDoc['resolution_number'] ?? '') ?>;
    document.getElementById('docMeetingDate').value = <?= json_encode($editDoc['meeting_date'] ?? '') ?>;
    document.getElementById('portalVisible').checked = <?= $editDoc['portal_visible'] ? 'true' : 'false' ?>;
    <?php endif; ?>
});

function nextStep(n) {
    document.getElementById('step-' + currentStep).classList.remove('active');
    document.getElementById('step-' + n).classList.add('active');
    document.getElementById('dot-' + currentStep).classList.remove('active');
    document.getElementById('dot-' + currentStep).classList.add('completed');
    document.getElementById('dot-' + n).classList.add('active');
    currentStep = n;
    if (n === 4) updateFinalPreview();
}

function prevStep(n) {
    document.getElementById('step-' + currentStep).classList.remove('active');
    document.getElementById('step-' + n).classList.add('active');
    document.getElementById('dot-' + currentStep).classList.remove('active');
    document.getElementById('dot-' + n).classList.add('active');
    document.getElementById('dot-' + n).classList.remove('completed');
    currentStep = n;
}

function clientSelected() {
    const sel = document.getElementById('clientSelect');
    selectedClient = parseInt(sel.value) || 0;
    document.getElementById('btnStep1').disabled = !selectedClient;
    if (!selectedClient) { document.getElementById('clientInfo').classList.add('hidden'); return; }
    
    fetch('roc_ajax.php?action=get_client_data&client_id=' + selectedClient)
        .then(r => r.json()).then(d => {
            if (d.success) {
                clientData = d.client;
                document.getElementById('clientInfo').innerHTML = '<strong>' + clientData.name + '</strong><br><span class="text-sm">' + (clientData.cin || clientData.llpin || clientData.pan || '') + '</span>';
                document.getElementById('clientInfo').classList.remove('hidden');
            }
        });
    
    fetch('roc_ajax.php?action=get_client_persons&client_id=' + selectedClient)
        .then(r => r.json()).then(d => { if (d.success) clientPersons = d.persons; });
}

function selectTemplate(id) {
    document.querySelectorAll('.template-card').forEach(c => c.classList.remove('selected'));
    document.querySelector('.template-card[data-id="' + id + '"]')?.classList.add('selected');
    selectedTemplate = id;
    document.getElementById('btnStep2').disabled = false;
    
    fetch('roc_ajax.php?action=get_template_fields&template_id=' + id)
        .then(r => r.json()).then(d => {
            if (d.success) {
                templateData = d.template;
                templateFields = d.fields;
                renderFields();
            }
        });
}

function renderFields() {
    const container = document.getElementById('fieldsContainer');
    let html = '';
    templateFields.forEach(f => {
        const val = fieldValues[f.field_key] || '';
        html += '<div class="field-group">';
        html += '<label class="field-label">' + f.field_label + (f.is_required ? ' *' : '') + '</label>';
        
        if (f.field_type === 'PERSON_SELECT') {
            html += '<select class="form-input" data-key="' + f.field_key + '" onchange="fieldChanged(this)">';
            html += '<option value="">-- Select Person --</option>';
            clientPersons.forEach(p => {
                html += '<option value="' + p.full_name + '" data-person=\'' + JSON.stringify(p) + '\' ' + (val === p.full_name ? 'selected' : '') + '>' + p.full_name + ' (' + (p.role_type || '') + ')</option>';
            });
            html += '</select>';
        } else if (f.field_type === 'SELECT' && f.options_json) {
            const opts = JSON.parse(f.options_json || '[]');
            html += '<select class="form-input" data-key="' + f.field_key + '" onchange="fieldChanged(this)">';
            html += '<option value="">-- Select --</option>';
            opts.forEach(o => { html += '<option value="' + o + '" ' + (val === o ? 'selected' : '') + '>' + o + '</option>'; });
            html += '</select>';
        } else if (f.field_type === 'TEXTAREA') {
            html += '<textarea class="form-input" data-key="' + f.field_key + '" rows="3" oninput="fieldChanged(this)">' + escapeHtml(val) + '</textarea>';
        } else if (f.field_type === 'DATE') {
            html += '<input type="date" class="form-input" data-key="' + f.field_key + '" value="' + val + '" onchange="fieldChanged(this)">';
        } else if (f.field_type === 'NUMBER') {
            html += '<input type="number" class="form-input" data-key="' + f.field_key + '" value="' + val + '" oninput="fieldChanged(this)">';
        } else {
            const readonly = f.field_type === 'AUTO' ? 'readonly' : '';
            html += '<input type="text" class="form-input ' + (readonly ? 'bg-gray-100' : '') + '" data-key="' + f.field_key + '" value="' + escapeHtml(val) + '" oninput="fieldChanged(this)" ' + readonly + '>';
        }
        html += '</div>';
    });
    container.innerHTML = html;
    autoFillFields();
    updatePreview();
}

function autoFillFields() {
    if (!clientData) return;
    const mapping = {
        'company_name': clientData.name,
        'cin': clientData.cin,
        'llpin': clientData.llpin,
        'pan': clientData.pan,
        'registered_office': clientData.registered_address || [clientData.address_line1, clientData.city, clientData.state, clientData.pincode].filter(Boolean).join(', '),
        'incorporation_date': clientData.incorporation_date,
        'authorized_capital': clientData.authorized_capital,
        'paid_up_capital': clientData.paid_up_capital
    };
    document.querySelectorAll('#fieldsContainer input, #fieldsContainer select, #fieldsContainer textarea').forEach(el => {
        const key = el.dataset.key;
        if (mapping[key] && !el.value) {
            el.value = mapping[key];
            fieldValues[key] = mapping[key];
        }
    });
}

function fieldChanged(el) {
    const key = el.dataset.key;
    fieldValues[key] = el.value;
    
    // If person selected, auto-fill related fields
    if (el.tagName === 'SELECT' && el.selectedOptions[0]?.dataset?.person) {
        const person = JSON.parse(el.selectedOptions[0].dataset.person);
        const relatedMappings = {
            'director_name': { 'director_din': person.din, 'director_father_name': person.father_name },
            'new_director_name': { 'new_director_din': person.din, 'new_director_father_name': person.father_name },
            'resigning_director_name': { 'resigning_director_din': person.din },
            'authorized_person_name': { 'authorized_person_din': person.din },
            'signatory_name': { 'signatory_din': person.din }
        };
        if (relatedMappings[key]) {
            Object.entries(relatedMappings[key]).forEach(([k, v]) => {
                const target = document.querySelector('[data-key="' + k + '"]');
                if (target && v) { target.value = v; fieldValues[k] = v; }
            });
        }
    }
    updatePreview();
}

function updatePreview() {
    if (!templateData) return;
    let html = templateData.content_html || '';
    Object.entries(fieldValues).forEach(([k, v]) => {
        const regex = new RegExp('\\{\\{' + k + '\\}\\}', 'g');
        let displayVal = v || '<span style="background:#fef3c7;padding:2px 4px;border-radius:3px">{{' + k + '}}</span>';
        if (k.includes('date') && v && v.match(/^\d{4}-\d{2}-\d{2}$/)) {
            displayVal = formatDate(v);
        }
        html = html.replace(regex, displayVal);
    });
    document.getElementById('livePreview').innerHTML = html;
}

function updateFinalPreview() {
    document.getElementById('finalPreview').innerHTML = document.getElementById('livePreview').innerHTML;
}

function formatDate(dateStr) {
    if (!dateStr) return '';
    const d = new Date(dateStr);
    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
}

function saveDocument(status) {
    const contentHtml = document.getElementById('finalPreview').innerHTML;
    const formData = new FormData();
    formData.append('doc_id', editDocId);
    formData.append('client_id', selectedClient);
    formData.append('template_id', selectedTemplate);
    formData.append('status', status);
    formData.append('portal_visible', document.getElementById('portalVisible').checked ? 1 : 0);
    formData.append('document_title', document.getElementById('docTitle').value);
    formData.append('resolution_number', document.getElementById('docResNum').value);
    formData.append('meeting_date', document.getElementById('docMeetingDate').value);
    formData.append('content_html', contentHtml);
    formData.append('field_values_json', JSON.stringify(fieldValues));
    
    fetch('roc_ajax.php?action=save_document', { method: 'POST', body: formData })
        .then(r => r.json()).then(d => {
            if (d.success) {
                alert('Document saved!');
                location.href = 'roc_documents.php';
            } else {
                alert(d.error || 'Error saving');
            }
        });
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text || '';
    return div.innerHTML;
}
</script>

<?php require_once 'includes/footer.php'; ?>
