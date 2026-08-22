<?php
/**
 * PATRON - Document Types Master (Enhanced)
 * Features: Dashboard cards, sticky header, sortable columns, filters
 */

require_once 'includes/db.php';
startSession();
requireLogin();


$pageTitle = 'Document Types';

// Filters
$category = sanitize($_GET['category'] ?? '');
$level = sanitize($_GET['level'] ?? '');
$status = sanitize($_GET['status'] ?? '');
$ocrFilter = sanitize($_GET['ocr'] ?? '');
$search = sanitize($_GET['search'] ?? '');
$sort = sanitize($_GET['sort'] ?? 'name');
$order = strtoupper($_GET['order'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

$allowedSorts = ['name', 'code', 'category', 'level', 'ocr_enabled', 'is_active', 'usage_count'];
if (!in_array($sort, $allowedSorts)) $sort = 'name';

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $docId = (int)($_GET['id'] ?? 0);
    
    if ($action === 'toggle' && $docId) {
        $doc = dbFetchOne("SELECT is_active FROM document_types WHERE id = ?", [$docId]);
        if ($doc) {
            dbExecute("UPDATE document_types SET is_active = ?, updated_at = NOW() WHERE id = ?", [$doc['is_active'] ? 0 : 1, $docId]);
            setFlash('success', 'Document type status updated.');
        }
    }
    
    if ($action === 'toggle_ocr' && $docId) {
        $doc = dbFetchOne("SELECT ocr_enabled FROM document_types WHERE id = ?", [$docId]);
        if ($doc) {
            dbExecute("UPDATE document_types SET ocr_enabled = ?, updated_at = NOW() WHERE id = ?", [$doc['ocr_enabled'] ? 0 : 1, $docId]);
            setFlash('success', 'OCR setting updated.');
        }
    }
    
    if ($action === 'delete' && $docId) {
        $hasUsage = dbFetchOne("SELECT COUNT(*) as c FROM request_documents WHERE document_type_id = ?", [$docId]);
        if (($hasUsage['c'] ?? 0) == 0) {
            dbExecute("UPDATE document_types SET deleted_at = NOW() WHERE id = ?", [$docId]);
            setFlash('success', 'Document type deleted.');
        } else {
            setFlash('error', 'Cannot delete document type in use.');
        }
    }
    
    header('Location: document_types.php?' . http_build_query(array_filter(['category' => $category, 'level' => $level, 'status' => $status, 'ocr' => $ocrFilter, 'search' => $search, 'sort' => $sort, 'order' => $order])));
    exit;
}

// Build query
$where = ["dt.deleted_at IS NULL"];
$params = [];

if ($category) { $where[] = "dt.category = ?"; $params[] = $category; }
if ($level) { $where[] = "dt.level = ?"; $params[] = $level; }
if ($status === 'active') { $where[] = "dt.is_active = 1"; }
elseif ($status === 'inactive') { $where[] = "dt.is_active = 0"; }
if ($ocrFilter === 'enabled') { $where[] = "dt.ocr_enabled = 1"; }
elseif ($ocrFilter === 'disabled') { $where[] = "(dt.ocr_enabled = 0 OR dt.ocr_enabled IS NULL)"; }
if ($search) { $where[] = "(dt.name LIKE ? OR dt.code LIKE ?)"; $params = array_merge($params, ["%$search%", "%$search%"]); }

$whereClause = implode(' AND ', $where);

$orderBy = $sort === 'usage_count' ? "usage_count $order" : "dt.$sort $order";

$docTypes = dbFetchAll("
    SELECT dt.*,
           (SELECT COUNT(*) FROM request_documents WHERE document_type_id = dt.id) as usage_count,
           (SELECT COUNT(*) FROM service_document_requirements WHERE document_type_id = dt.id) as service_count
    FROM document_types dt
    WHERE $whereClause
    ORDER BY $orderBy
", $params) ?: [];

$categories = dbFetchAll("SELECT DISTINCT category FROM document_types WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];

// Dashboard Stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(is_active = 1) as active,
        SUM(is_active = 0 OR is_active IS NULL) as inactive,
        SUM(ocr_enabled = 1) as ocr_enabled,
        SUM(level = 'person') as person_level,
        SUM(level = 'entity' OR level = 'client') as entity_level,
        SUM(level = 'both') as both_level
    FROM document_types WHERE deleted_at IS NULL
") ?: [];

// Category stats
$categoryStats = dbFetchAll("
    SELECT category, COUNT(*) as cnt 
    FROM document_types 
    WHERE deleted_at IS NULL AND category IS NOT NULL AND category != ''
    GROUP BY category 
    ORDER BY cnt DESC
") ?: [];

// Most used documents
$topDocs = dbFetchAll("
    SELECT dt.name, COUNT(rd.id) as cnt
    FROM document_types dt
    LEFT JOIN request_documents rd ON dt.id = rd.document_type_id
    WHERE dt.deleted_at IS NULL
    GROUP BY dt.id
    HAVING cnt > 0
    ORDER BY cnt DESC
    LIMIT 3
") ?: [];

$categoryColors = [
    'Identity' => 'blue', 'Address' => 'green', 'Business' => 'purple',
    'Financial' => 'amber', 'Legal' => 'red', 'Tax' => 'orange',
    'Registration' => 'teal', 'License' => 'indigo'
];

$levelColors = ['person' => 'blue', 'entity' => 'purple', 'client' => 'purple', 'both' => 'green'];

function sortLink($column, $label, $currentSort, $currentOrder) {
    $newOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $icon = '';
    if ($currentSort === $column) {
        $icon = $currentOrder === 'ASC' ? ' <i class="fas fa-sort-up"></i>' : ' <i class="fas fa-sort-down"></i>';
    } else {
        $icon = ' <i class="fas fa-sort text-gray-300"></i>';
    }
    $params = $_GET;
    $params['sort'] = $column;
    $params['order'] = $newOrder;
    return '<a href="?' . http_build_query($params) . '" class="hover:text-blue-600 inline-flex items-center gap-1">' . $label . $icon . '</a>';
}

require_once 'includes/header.php';
?>

<style>
.table-container { max-height: calc(100vh - 420px); overflow-y: auto; }
.table-container thead { position: sticky; top: 0; z-index: 10; background: #f9fafb; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
.stat-card { transition: transform 0.2s, box-shadow 0.2s; }
.stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.level-person { background: #dbeafe; color: #1e40af; }
.level-entity { background: #ede9fe; color: #5b21b6; }
.level-both { background: #d1fae5; color: #065f46; }
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-2xl font-bold">Document Types</h2>
        <p class="text-gray-500 text-sm">Manage document type catalog</p>
    </div>
    <a href="add_document_type.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Document Type</a>
</div>

<!-- Dashboard Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-6">
    <div class="stat-card card p-4 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <p class="text-2xl font-bold text-blue-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-blue-600">Total Types</p>
    </div>
    <a href="?status=active" class="stat-card card p-4 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 hover:bg-green-100">
        <p class="text-2xl font-bold text-green-700"><?= $stats['active'] ?? 0 ?></p>
        <p class="text-xs text-green-600">Active</p>
    </a>
    <a href="?ocr=enabled" class="stat-card card p-4 bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-purple-500 hover:bg-purple-100">
        <p class="text-2xl font-bold text-purple-700"><?= $stats['ocr_enabled'] ?? 0 ?></p>
        <p class="text-xs text-purple-600">OCR Enabled</p>
    </a>
    <a href="?level=person" class="stat-card card p-4 bg-gradient-to-br from-sky-50 to-sky-100 border-l-4 border-sky-500 hover:bg-sky-100">
        <p class="text-2xl font-bold text-sky-700"><?= $stats['person_level'] ?? 0 ?></p>
        <p class="text-xs text-sky-600">Person Level</p>
    </a>
    <a href="?level=entity" class="stat-card card p-4 bg-gradient-to-br from-violet-50 to-violet-100 border-l-4 border-violet-500 hover:bg-violet-100">
        <p class="text-2xl font-bold text-violet-700"><?= $stats['entity_level'] ?? 0 ?></p>
        <p class="text-xs text-violet-600">Entity Level</p>
    </a>
    <a href="?level=both" class="stat-card card p-4 bg-gradient-to-br from-emerald-50 to-emerald-100 border-l-4 border-emerald-500 hover:bg-emerald-100">
        <p class="text-2xl font-bold text-emerald-700"><?= $stats['both_level'] ?? 0 ?></p>
        <p class="text-xs text-emerald-600">Both Levels</p>
    </a>
    <a href="?status=inactive" class="stat-card card p-4 bg-gradient-to-br from-gray-50 to-gray-100 border-l-4 border-gray-400 hover:bg-gray-100">
        <p class="text-2xl font-bold text-gray-600"><?= $stats['inactive'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Inactive</p>
    </a>
</div>

<!-- Categories & Top Used Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-folder text-blue-500 mr-2"></i>Documents by Category</h4>
        <?php if (empty($categoryStats)): ?>
            <p class="text-gray-400 text-sm">No categories defined</p>
        <?php else: ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ($categoryStats as $cs): 
                    $catColor = $categoryColors[$cs['category']] ?? 'gray';
                ?>
                <a href="?category=<?= urlencode($cs['category']) ?>" 
                   class="px-3 py-2 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded-lg text-sm hover:bg-<?= $catColor ?>-200 transition-colors">
                    <?= htmlspecialchars($cs['category']) ?>
                    <span class="ml-1 bg-<?= $catColor ?>-200 px-1.5 py-0.5 rounded text-xs"><?= $cs['cnt'] ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-trophy text-amber-500 mr-2"></i>Most Used Documents</h4>
        <?php if (empty($topDocs)): ?>
            <p class="text-gray-400 text-sm">No usage data yet</p>
        <?php else: ?>
            <div class="space-y-2">
                <?php foreach ($topDocs as $i => $td): 
                    $medals = ['🥇', '🥈', '🥉'];
                ?>
                <div class="flex items-center justify-between py-1 <?= $i < 2 ? 'border-b border-gray-100' : '' ?>">
                    <span class="flex items-center gap-2">
                        <span><?= $medals[$i] ?? '' ?></span>
                        <span class="text-sm"><?= htmlspecialchars($td['name']) ?></span>
                    </span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded text-xs"><?= $td['cnt'] ?> uses</span>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div class="flex-1 min-w-[180px]">
            <label class="block text-xs text-gray-500 mb-1">Search</label>
            <input type="text" name="search" class="form-input" placeholder="Name or code..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input">
                <option value="">All Categories</option>
                <?php foreach ($categories as $c): ?>
                <option value="<?= htmlspecialchars($c['category']) ?>" <?= $category === $c['category'] ? 'selected' : '' ?>><?= htmlspecialchars($c['category']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Level</label>
            <select name="level" class="form-input">
                <option value="">All Levels</option>
                <option value="person" <?= $level === 'person' ? 'selected' : '' ?>>Person</option>
                <option value="entity" <?= $level === 'entity' ? 'selected' : '' ?>>Entity</option>
                <option value="both" <?= $level === 'both' ? 'selected' : '' ?>>Both</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">OCR</label>
            <select name="ocr" class="form-input">
                <option value="">All</option>
                <option value="enabled" <?= $ocrFilter === 'enabled' ? 'selected' : '' ?>>OCR Enabled</option>
                <option value="disabled" <?= $ocrFilter === 'disabled' ? 'selected' : '' ?>>OCR Disabled</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Status</label>
            <select name="status" class="form-input">
                <option value="">All</option>
                <option value="active" <?= $status === 'active' ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= $status === 'inactive' ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search mr-1"></i>Filter</button>
        <?php if ($search || $category || $level || $status || $ocrFilter): ?>
        <a href="document_types.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Document Types Table -->
<div class="card overflow-hidden">
    <div class="table-container">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase"><?= sortLink('name', 'Document Type', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('category', 'Category', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('level', 'Level', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('ocr_enabled', 'OCR', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Services</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('usage_count', 'Usage', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('is_active', 'Status', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-white">
                <?php if (empty($docTypes)): ?>
                <tr><td colspan="8" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-file-alt fa-2x mb-2 text-gray-300"></i><br>No document types found
                </td></tr>
                <?php else: foreach ($docTypes as $dt): 
                    $catColor = $categoryColors[$dt['category']] ?? 'gray';
                    $lvlColor = $levelColors[$dt['level']] ?? 'gray';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($dt['name'] ?? '') ?></p>
                        <p class="text-xs text-gray-400 font-mono"><?= htmlspecialchars($dt['code'] ?? '') ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($dt['category']): ?>
                        <span class="px-2 py-1 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded text-xs"><?= htmlspecialchars($dt['category']) ?></span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded text-xs font-medium level-<?= $dt['level'] ?? 'both' ?>">
                            <?= ucfirst($dt['level'] ?? 'both') ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle_ocr&id=<?= $dt['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'level' => $level, 'status' => $status, 'ocr' => $ocrFilter, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>"
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 <?= $dt['ocr_enabled'] ? 'bg-purple-100 text-purple-700' : 'bg-gray-100 text-gray-500' ?>"
                           title="Click to toggle OCR">
                            <?= $dt['ocr_enabled'] ? '<i class="fas fa-eye"></i> Enabled' : '<i class="fas fa-eye-slash"></i> Off' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <span class="<?= ($dt['service_count'] ?? 0) > 0 ? 'text-blue-600' : 'text-gray-400' ?>"><?= $dt['service_count'] ?? 0 ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="<?= ($dt['usage_count'] ?? 0) > 0 ? 'font-medium text-green-600' : 'text-gray-400' ?>"><?= $dt['usage_count'] ?? 0 ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle&id=<?= $dt['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'level' => $level, 'status' => $status, 'ocr' => $ocrFilter, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>"
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 <?= $dt['is_active'] ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' ?>">
                            <?= $dt['is_active'] ? '<i class="fas fa-check-circle"></i> Active' : '<i class="fas fa-pause-circle"></i> Inactive' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="edit_document_type.php?id=<?= $dt['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php if (($dt['usage_count'] ?? 0) == 0): ?>
                            <a href="?action=delete&id=<?= $dt['id'] ?>" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete" onclick="return confirm('Delete this document type?')"><i class="fas fa-trash"></i></a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="flex items-center justify-between mt-4 text-xs text-gray-500">
    <span>Showing <strong><?= count($docTypes) ?></strong> document type(s)</span>
    <div class="flex gap-4">
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-green-500"></span> <?= count(array_filter($docTypes, fn($d) => $d['is_active'])) ?> Active</span>
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-purple-500"></span> <?= count(array_filter($docTypes, fn($d) => $d['ocr_enabled'])) ?> OCR</span>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
