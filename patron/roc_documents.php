<?php
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'ROC Documents';

$filterClient = (int)($_GET['client_id'] ?? 0);
$filterStatus = sanitize($_GET['status'] ?? '');
$filterCategory = sanitize($_GET['category'] ?? '');
$search = sanitize($_GET['search'] ?? '');

$where = []; $params = [];
if ($filterClient) { $where[] = "d.client_id = ?"; $params[] = $filterClient; }
if ($filterStatus) { $where[] = "d.status = ?"; $params[] = $filterStatus; }
if ($filterCategory) { $where[] = "t.category = ?"; $params[] = $filterCategory; }
if ($search) { $where[] = "(c.name LIKE ? OR d.document_title LIKE ? OR d.resolution_number LIKE ?)"; $params[] = "%$search%"; $params[] = "%$search%"; $params[] = "%$search%"; }
$whereClause = $where ? 'WHERE ' . implode(' AND ', $where) : '';

$documents = dbFetchAll("
    SELECT d.*, t.name as template_name, t.category, t.code as template_code,
           c.name as client_name, c.entity_type, c.cin,
           u.display_name as generated_by_name
    FROM roc_generated_documents d
    JOIN roc_templates t ON t.id = d.template_id
    JOIN clients c ON c.id = d.client_id
    LEFT JOIN users u ON u.id = d.generated_by
    $whereClause ORDER BY d.updated_at DESC
", $params) ?: [];

$templates = dbFetchAll("SELECT id, name, category FROM roc_templates WHERE is_active = 1 ORDER BY category, sort_order") ?: [];
$clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE status = 'ACTIVE' AND deleted_at IS NULL AND name != '' ORDER BY name") ?: [];

$totalDocs = count($documents);
$draftCount = count(array_filter($documents, fn($d) => $d['status'] === 'DRAFT'));
$finalCount = count(array_filter($documents, fn($d) => $d['status'] === 'FINAL'));
$signedCount = count(array_filter($documents, fn($d) => $d['status'] === 'SIGNED'));
$filedCount = count(array_filter($documents, fn($d) => $d['status'] === 'FILED'));

require_once 'includes/header.php';
?>
<style>
.stat-card{transition:all .2s;cursor:pointer}.stat-card:hover{transform:translateY(-2px);box-shadow:0 4px 15px rgba(0,0,0,.1)}
.status-badge{padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;text-transform:uppercase}
.status-DRAFT{background:#fef3c7;color:#92400e}.status-FINAL{background:#dbeafe;color:#1e40af}
.status-SIGNED{background:#d1fae5;color:#065f46}.status-FILED{background:#e0e7ff;color:#3730a3}
.cat-badge{padding:2px 8px;border-radius:4px;font-size:10px;font-weight:600}
.cat-RESOLUTION{background:#fce7f3;color:#9d174d}.cat-MINUTES{background:#e0f2fe;color:#0c4a6e}
.cat-NOTICE{background:#fef9c3;color:#854d0e}.cat-DECLARATION{background:#f0fdf4;color:#166534}
.doc-row{transition:background .15s}.doc-row:hover{background:#f8fafc}
.action-btn{padding:5px 8px;border-radius:6px;font-size:12px;transition:all .15s;border:none;cursor:pointer}
.action-btn:hover{transform:scale(1.05)}
</style>

<div class="max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800"><i class="fas fa-file-contract text-purple-600 mr-2"></i>ROC Documents</h1>
            <p class="text-gray-500 text-sm mt-1">Board resolutions, meeting minutes, notices &amp; declarations</p>
        </div>
        <div class="flex gap-2 mt-3 md:mt-0">
            <a href="roc_templates.php" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm hover:bg-gray-200"><i class="fas fa-cog mr-1"></i>Templates</a>
            <a href="roc_generate.php" class="bg-purple-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-purple-700 shadow"><i class="fas fa-plus mr-1"></i>Generate</a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mb-6">
        <a href="?" class="stat-card bg-white rounded-xl p-4 border <?= !$filterStatus?'border-purple-300 bg-purple-50':'' ?>">
            <div class="text-2xl font-bold text-gray-800"><?= $totalDocs ?></div><div class="text-xs text-gray-500 mt-1">Total</div>
        </a>
        <a href="?status=DRAFT" class="stat-card bg-white rounded-xl p-4 border <?=$filterStatus==='DRAFT'?'border-yellow-300 bg-yellow-50':''?>">
            <div class="text-2xl font-bold text-yellow-600"><?= $draftCount ?></div><div class="text-xs text-gray-500 mt-1">Draft</div>
        </a>
        <a href="?status=FINAL" class="stat-card bg-white rounded-xl p-4 border <?=$filterStatus==='FINAL'?'border-blue-300 bg-blue-50':''?>">
            <div class="text-2xl font-bold text-blue-600"><?= $finalCount ?></div><div class="text-xs text-gray-500 mt-1">Final</div>
        </a>
        <a href="?status=SIGNED" class="stat-card bg-white rounded-xl p-4 border <?=$filterStatus==='SIGNED'?'border-green-300 bg-green-50':''?>">
            <div class="text-2xl font-bold text-green-600"><?= $signedCount ?></div><div class="text-xs text-gray-500 mt-1">Signed</div>
        </a>
        <a href="?status=FILED" class="stat-card bg-white rounded-xl p-4 border <?=$filterStatus==='FILED'?'border-indigo-300 bg-indigo-50':''?>">
            <div class="text-2xl font-bold text-indigo-600"><?= $filedCount ?></div><div class="text-xs text-gray-500 mt-1">Filed</div>
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl border p-4 mb-6">
        <form method="GET" class="flex flex-wrap gap-3 items-end">
            <div class="flex-1 min-w-[200px]">
                <label class="text-xs text-gray-500 block mb-1">Client</label>
                <select name="client_id" class="form-input text-sm">
                    <option value="">All Clients</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>" <?= $filterClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="w-36">
                <label class="text-xs text-gray-500 block mb-1">Category</label>
                <select name="category" class="form-input text-sm">
                    <option value="">All</option>
                    <option value="RESOLUTION" <?= $filterCategory === 'RESOLUTION' ? 'selected' : '' ?>>Resolutions</option>
                    <option value="MINUTES" <?= $filterCategory === 'MINUTES' ? 'selected' : '' ?>>Minutes</option>
                    <option value="NOTICE" <?= $filterCategory === 'NOTICE' ? 'selected' : '' ?>>Notices</option>
                    <option value="DECLARATION" <?= $filterCategory === 'DECLARATION' ? 'selected' : '' ?>>Declarations</option>
                </select>
            </div>
            <div class="flex-1 min-w-[180px]">
                <label class="text-xs text-gray-500 block mb-1">Search</label>
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" class="form-input text-sm" placeholder="Client, title...">
            </div>
            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-purple-700"><i class="fas fa-search"></i></button>
            <?php if ($filterClient || $filterStatus || $filterCategory || $search): ?>
            <a href="roc_documents.php" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm hover:bg-gray-300"><i class="fas fa-times"></i></a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Documents Table -->
    <div class="bg-white rounded-xl border overflow-hidden">
        <?php if (empty($documents)): ?>
        <div class="p-12 text-center">
            <i class="fas fa-file-alt text-5xl text-gray-300 mb-4"></i>
            <p class="text-gray-500 mb-4">No ROC documents found</p>
            <a href="roc_generate.php" class="inline-block bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700"><i class="fas fa-plus mr-2"></i>Generate First Document</a>
        </div>
        <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50 text-left text-xs text-gray-500 uppercase">
                        <th class="px-4 py-3">Document</th>
                        <th class="px-4 py-3">Client</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Portal</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($documents as $doc): ?>
                    <tr class="doc-row" id="doc-row-<?= $doc['id'] ?>">
                        <td class="px-4 py-3">
                            <div class="font-medium text-gray-900"><?= htmlspecialchars($doc['document_title'] ?: $doc['template_name']) ?></div>
                            <?php if ($doc['resolution_number']): ?>
                            <div class="text-xs text-purple-600">Res# <?= htmlspecialchars($doc['resolution_number']) ?></div>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-3">
                            <a href="view_client.php?id=<?= $doc['client_id'] ?>&tab=roc" class="text-blue-600 hover:underline text-sm"><?= htmlspecialchars($doc['client_name']) ?></a>
                        </td>
                        <td class="px-4 py-3"><span class="cat-badge cat-<?= $doc['category'] ?>"><?= $doc['category'] ?></span></td>
                        <td class="px-4 py-3 text-sm text-gray-600"><?= $doc['meeting_date'] ? date('d M Y', strtotime($doc['meeting_date'])) : '-' ?></td>
                        <td class="px-4 py-3">
                            <select onchange="updateStatus(<?= $doc['id'] ?>, this.value)" class="text-xs border rounded px-2 py-1">
                                <?php foreach (['DRAFT', 'FINAL', 'SIGNED', 'FILED'] as $s): ?>
                                <option value="<?= $s ?>" <?= $doc['status'] === $s ? 'selected' : '' ?>><?= $s ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td class="px-4 py-3">
                            <button onclick="togglePortal(<?= $doc['id'] ?>, <?= $doc['portal_visible'] ? 0 : 1 ?>)" class="text-lg <?= $doc['portal_visible'] ? 'text-green-500' : 'text-gray-300' ?>">
                                <i class="fas <?= $doc['portal_visible'] ? 'fa-eye' : 'fa-eye-slash' ?>"></i>
                            </button>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center justify-center gap-1">
                                <a href="roc_download.php?id=<?= $doc['id'] ?>&format=html" target="_blank" class="action-btn bg-blue-100 text-blue-700" title="Preview"><i class="fas fa-eye"></i></a>
                                <a href="roc_generate.php?edit=<?= $doc['id'] ?>" class="action-btn bg-yellow-100 text-yellow-700" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="roc_download.php?id=<?= $doc['id'] ?>&format=pdf" target="_blank" class="action-btn bg-red-100 text-red-700" title="PDF"><i class="fas fa-file-pdf"></i></a>
                                <a href="roc_download.php?id=<?= $doc['id'] ?>&format=docx" class="action-btn bg-indigo-100 text-indigo-700" title="Word"><i class="fas fa-file-word"></i></a>
                                <button onclick="deleteDoc(<?= $doc['id'] ?>)" class="action-btn bg-gray-100 text-red-600" title="Delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
function updateStatus(id, status) {
    fetch('roc_ajax.php?action=update_doc_status&id=' + id + '&status=' + status)
        .then(r => r.json()).then(d => { if (!d.success) alert(d.error || 'Error'); else location.reload(); });
}
function togglePortal(id, visible) {
    fetch('roc_ajax.php?action=toggle_portal&id=' + id + '&visible=' + visible)
        .then(r => r.json()).then(d => { if (!d.success) alert(d.error || 'Error'); else location.reload(); });
}
function deleteDoc(id) {
    if (confirm('Delete this document?')) {
        fetch('roc_ajax.php?action=delete_document&id=' + id)
            .then(r => r.json()).then(d => { if (d.success) document.getElementById('doc-row-' + id).remove(); else alert(d.error || 'Error'); });
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
