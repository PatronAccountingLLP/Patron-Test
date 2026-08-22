<?php
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'ROC Templates';

$templates = dbFetchAll("
    SELECT t.*, 
           (SELECT COUNT(*) FROM roc_template_fields WHERE template_id = t.id) as field_count,
           (SELECT COUNT(*) FROM roc_generated_documents WHERE template_id = t.id) as doc_count
    FROM roc_templates t ORDER BY t.category, t.sort_order, t.name
") ?: [];

$templatesByCategory = [];
foreach ($templates as $t) {
    $templatesByCategory[$t['category']][] = $t;
}

$editTemplate = null; $editFields = [];
$editId = (int)($_GET['edit'] ?? 0);
if ($editId) {
    $editTemplate = dbFetchOne("SELECT * FROM roc_templates WHERE id = ?", [$editId]);
    $editFields = dbFetchAll("SELECT * FROM roc_template_fields WHERE template_id = ? ORDER BY sort_order", [$editId]) ?: [];
}

require_once 'includes/header.php';
?>
<style>
.template-card{border:1px solid #e5e7eb;border-radius:12px;padding:16px;transition:all .2s}
.template-card:hover{box-shadow:0 4px 12px rgba(0,0,0,.08)}
.cat-badge{padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600}
.cat-RESOLUTION{background:#fce7f3;color:#9d174d}.cat-MINUTES{background:#e0f2fe;color:#0c4a6e}
.cat-NOTICE{background:#fef9c3;color:#854d0e}.cat-DECLARATION{background:#f0fdf4;color:#166534}
</style>

<div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800"><i class="fas fa-file-signature text-purple-600 mr-2"></i>ROC Templates</h1>
            <p class="text-gray-500 text-sm mt-1">Manage document templates for board resolutions, minutes & notices</p>
        </div>
        <div class="flex gap-2">
            <a href="roc_documents.php" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm hover:bg-gray-200"><i class="fas fa-file-alt mr-1"></i>Documents</a>
            <button onclick="openEditor()" class="bg-purple-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-purple-700"><i class="fas fa-plus mr-1"></i>New Template</button>
        </div>
    </div>

    <!-- Templates Grid -->
    <?php foreach ($templatesByCategory as $cat => $tmpls): ?>
    <div class="mb-8">
        <h2 class="text-lg font-semibold mb-4"><span class="cat-badge cat-<?= $cat ?>"><?= $cat ?></span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($tmpls as $t): ?>
            <div class="template-card bg-white">
                <div class="flex items-start justify-between">
                    <div>
                        <div class="font-semibold text-gray-800"><?= htmlspecialchars($t['name']) ?></div>
                        <div class="text-xs text-purple-600 mt-1"><?= $t['code'] ?></div>
                    </div>
                    <span class="px-2 py-1 rounded text-xs <?= $t['is_active'] ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' ?>">
                        <?= $t['is_active'] ? 'Active' : 'Inactive' ?>
                    </span>
                </div>
                <p class="text-sm text-gray-500 mt-2 line-clamp-2"><?= htmlspecialchars($t['description'] ?? '') ?></p>
                <div class="flex items-center gap-4 mt-4 text-xs text-gray-400">
                    <span><i class="fas fa-list-ul mr-1"></i><?= $t['field_count'] ?> fields</span>
                    <span><i class="fas fa-file-alt mr-1"></i><?= $t['doc_count'] ?> docs</span>
                </div>
                <div class="flex gap-2 mt-4 pt-4 border-t">
                    <button onclick="previewTemplate(<?= $t['id'] ?>)" class="text-blue-600 hover:text-blue-800 text-sm"><i class="fas fa-eye mr-1"></i>Preview</button>
                    <a href="?edit=<?= $t['id'] ?>" class="text-yellow-600 hover:text-yellow-800 text-sm"><i class="fas fa-edit mr-1"></i>Edit</a>
                    <?php if ($t['doc_count'] == 0): ?>
                    <button onclick="deleteTemplate(<?= $t['id'] ?>)" class="text-red-600 hover:text-red-800 text-sm"><i class="fas fa-trash mr-1"></i>Delete</button>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>

    <?php if (empty($templates)): ?>
    <div class="bg-white rounded-xl border p-12 text-center">
        <i class="fas fa-file-alt text-5xl text-gray-300 mb-4"></i>
        <p class="text-gray-500 mb-4">No templates found. Run the setup SQL to create default templates.</p>
    </div>
    <?php endif; ?>
</div>

<!-- Editor Modal -->
<div id="editorModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50" onclick="closeEditor()"></div>
    <div class="absolute inset-4 md:inset-8 bg-white rounded-2xl shadow-2xl flex flex-col">
        <div class="p-4 border-b flex items-center justify-between">
            <h3 class="text-lg font-semibold" id="editorTitle">New Template</h3>
            <button onclick="closeEditor()" class="p-2 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></button>
        </div>
        <div class="flex-1 overflow-auto p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold mb-4">Template Details</h4>
                    <input type="hidden" id="tplId">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-xs text-gray-500">Name *</label>
                            <input type="text" id="tplName" class="form-input">
                        </div>
                        <div>
                            <label class="text-xs text-gray-500">Code *</label>
                            <input type="text" id="tplCode" class="form-input" placeholder="BR_SOMETHING">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-xs text-gray-500">Category</label>
                            <select id="tplCategory" class="form-input">
                                <option value="RESOLUTION">Resolution</option>
                                <option value="MINUTES">Minutes</option>
                                <option value="NOTICE">Notice</option>
                                <option value="DECLARATION">Declaration</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-xs text-gray-500">Entity Types</label>
                            <input type="text" id="tplEntityTypes" class="form-input" placeholder='["PVT_LTD","OPC","LLP"]'>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-xs text-gray-500">Description</label>
                        <textarea id="tplDescription" class="form-input" rows="2"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="text-xs text-gray-500">Content HTML (use {{field_key}} placeholders)</label>
                        <textarea id="tplContent" class="form-input font-mono text-xs" rows="12"></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" id="tplActive" checked class="rounded">
                            <span class="text-sm">Active</span>
                        </label>
                        <div>
                            <label class="text-xs text-gray-500">Sort Order</label>
                            <input type="number" id="tplSort" class="form-input w-20" value="0">
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Fields</h4>
                    <div id="fieldsEditor" class="space-y-2 max-h-96 overflow-auto"></div>
                    <button onclick="addField()" class="mt-4 text-purple-600 hover:text-purple-800 text-sm"><i class="fas fa-plus mr-1"></i>Add Field</button>
                </div>
            </div>
        </div>
        <div class="p-4 border-t flex justify-end gap-3">
            <button onclick="closeEditor()" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300">Cancel</button>
            <button onclick="saveTemplate()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700"><i class="fas fa-save mr-2"></i>Save Template</button>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div id="previewModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50" onclick="closePreview()"></div>
    <div class="absolute inset-8 bg-white rounded-2xl shadow-2xl flex flex-col">
        <div class="p-4 border-b flex items-center justify-between">
            <h3 class="text-lg font-semibold">Template Preview</h3>
            <button onclick="closePreview()" class="p-2 hover:bg-gray-100 rounded-lg"><i class="fas fa-times"></i></button>
        </div>
        <div class="flex-1 overflow-auto p-6" id="previewContent" style="font-family:serif"></div>
    </div>
</div>

<script>
let fields = [];

function openEditor(data = null) {
    document.getElementById('editorModal').classList.remove('hidden');
    document.getElementById('editorTitle').textContent = data ? 'Edit Template' : 'New Template';
    if (data) {
        document.getElementById('tplId').value = data.id;
        document.getElementById('tplName').value = data.name;
        document.getElementById('tplCode').value = data.code;
        document.getElementById('tplCategory').value = data.category;
        document.getElementById('tplEntityTypes').value = data.applicable_entity_types || '';
        document.getElementById('tplDescription').value = data.description || '';
        document.getElementById('tplContent').value = data.content_html || '';
        document.getElementById('tplActive').checked = data.is_active == 1;
        document.getElementById('tplSort').value = data.sort_order || 0;
        fields = data.fields || [];
    } else {
        document.getElementById('tplId').value = '';
        document.getElementById('tplName').value = '';
        document.getElementById('tplCode').value = '';
        document.getElementById('tplCategory').value = 'RESOLUTION';
        document.getElementById('tplEntityTypes').value = '';
        document.getElementById('tplDescription').value = '';
        document.getElementById('tplContent').value = '';
        document.getElementById('tplActive').checked = true;
        document.getElementById('tplSort').value = 0;
        fields = [];
    }
    renderFields();
}

function closeEditor() { document.getElementById('editorModal').classList.add('hidden'); }

function renderFields() {
    const container = document.getElementById('fieldsEditor');
    container.innerHTML = fields.map((f, i) => `
        <div class="flex gap-2 items-center p-2 bg-gray-50 rounded">
            <input type="text" value="${f.field_key || ''}" placeholder="field_key" class="form-input text-xs flex-1" onchange="fields[${i}].field_key=this.value">
            <input type="text" value="${f.field_label || ''}" placeholder="Label" class="form-input text-xs flex-1" onchange="fields[${i}].field_label=this.value">
            <select class="form-input text-xs w-28" onchange="fields[${i}].field_type=this.value">
                <option value="MANUAL" ${f.field_type==='MANUAL'?'selected':''}>Manual</option>
                <option value="AUTO" ${f.field_type==='AUTO'?'selected':''}>Auto</option>
                <option value="PERSON_SELECT" ${f.field_type==='PERSON_SELECT'?'selected':''}>Person</option>
                <option value="DATE" ${f.field_type==='DATE'?'selected':''}>Date</option>
                <option value="TEXTAREA" ${f.field_type==='TEXTAREA'?'selected':''}>Textarea</option>
                <option value="SELECT" ${f.field_type==='SELECT'?'selected':''}>Select</option>
            </select>
            <button onclick="fields.splice(${i},1);renderFields()" class="text-red-500 hover:text-red-700"><i class="fas fa-times"></i></button>
        </div>
    `).join('');
}

function addField() {
    fields.push({ field_key: '', field_label: '', field_type: 'MANUAL' });
    renderFields();
}

function saveTemplate() {
    const formData = new FormData();
    formData.append('id', document.getElementById('tplId').value);
    formData.append('name', document.getElementById('tplName').value);
    formData.append('code', document.getElementById('tplCode').value);
    formData.append('category', document.getElementById('tplCategory').value);
    formData.append('applicable_entity_types', document.getElementById('tplEntityTypes').value);
    formData.append('description', document.getElementById('tplDescription').value);
    formData.append('content_html', document.getElementById('tplContent').value);
    formData.append('is_active', document.getElementById('tplActive').checked ? 1 : 0);
    formData.append('sort_order', document.getElementById('tplSort').value);
    
    fetch('roc_ajax.php?action=save_template', { method: 'POST', body: formData })
        .then(r => r.json()).then(d => {
            if (d.success) {
                // Save fields
                const fieldsData = new FormData();
                fieldsData.append('template_id', d.id);
                fieldsData.append('fields', JSON.stringify(fields));
                fetch('roc_ajax.php?action=save_template_fields', { method: 'POST', body: fieldsData })
                    .then(() => location.reload());
            } else {
                alert(d.error || 'Error saving template');
            }
        });
}

function deleteTemplate(id) {
    if (confirm('Delete this template?')) {
        fetch('roc_ajax.php?action=delete_template&id=' + id)
            .then(r => r.json()).then(d => {
                if (d.success) location.reload();
                else alert(d.error || 'Error');
            });
    }
}

function previewTemplate(id) {
    fetch('roc_ajax.php?action=get_template_fields&template_id=' + id)
        .then(r => r.json()).then(d => {
            if (d.success) {
                document.getElementById('previewContent').innerHTML = d.template.content_html || '<p>No content</p>';
                document.getElementById('previewModal').classList.remove('hidden');
            }
        });
}

function closePreview() { document.getElementById('previewModal').classList.add('hidden'); }

<?php if ($editTemplate): ?>
document.addEventListener('DOMContentLoaded', () => {
    openEditor({
        id: <?= $editTemplate['id'] ?>,
        name: <?= json_encode($editTemplate['name']) ?>,
        code: <?= json_encode($editTemplate['code']) ?>,
        category: <?= json_encode($editTemplate['category']) ?>,
        applicable_entity_types: <?= json_encode($editTemplate['applicable_entity_types']) ?>,
        description: <?= json_encode($editTemplate['description']) ?>,
        content_html: <?= json_encode($editTemplate['content_html']) ?>,
        is_active: <?= $editTemplate['is_active'] ?>,
        sort_order: <?= $editTemplate['sort_order'] ?>,
        fields: <?= json_encode($editFields) ?>
    });
});
<?php endif; ?>
</script>

<?php require_once 'includes/footer.php'; ?>
