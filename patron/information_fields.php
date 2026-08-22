<?php
/**
 * PATRON - Information Fields Master (Enhanced)
 * Features: Dashboard cards, sticky header, sortable columns, filters
 */

require_once 'includes/db.php';
startSession();
requireLogin();


$pageTitle = 'Information Fields';

// Filters
$category = sanitize($_GET['category'] ?? '');
$level = sanitize($_GET['level'] ?? '');
$fieldType = sanitize($_GET['field_type'] ?? '');
$status = sanitize($_GET['status'] ?? '');
$search = sanitize($_GET['search'] ?? '');
$sort = sanitize($_GET['sort'] ?? 'name');
$order = strtoupper($_GET['order'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';

$allowedSorts = ['name', 'code', 'category', 'level', 'field_type', 'is_active', 'usage_count'];
if (!in_array($sort, $allowedSorts)) $sort = 'name';

// Handle actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $fieldId = (int)($_GET['id'] ?? 0);
    
    if ($action === 'toggle' && $fieldId) {
        $field = dbFetchOne("SELECT is_active FROM information_fields WHERE id = ?", [$fieldId]);
        if ($field) {
            dbExecute("UPDATE information_fields SET is_active = ?, updated_at = NOW() WHERE id = ?", [$field['is_active'] ? 0 : 1, $fieldId]);
            setFlash('success', 'Field status updated.');
        }
    }
    
    if ($action === 'delete' && $fieldId) {
        $hasUsage = dbFetchOne("SELECT COUNT(*) as c FROM request_info_values WHERE info_field_id = ?", [$fieldId]);
        if (($hasUsage['c'] ?? 0) == 0) {
            dbExecute("UPDATE information_fields SET deleted_at = NOW() WHERE id = ?", [$fieldId]);
            setFlash('success', 'Field deleted.');
        } else {
            setFlash('error', 'Cannot delete field in use.');
        }
    }
    
    header('Location: information_fields.php?' . http_build_query(array_filter(['category' => $category, 'level' => $level, 'field_type' => $fieldType, 'status' => $status, 'search' => $search, 'sort' => $sort, 'order' => $order])));
    exit;
}

// Build query
$where = ["inf.deleted_at IS NULL"];
$params = [];

if ($category) { $where[] = "inf.category = ?"; $params[] = $category; }
if ($level) { $where[] = "inf.level = ?"; $params[] = $level; }
if ($fieldType) { $where[] = "inf.field_type = ?"; $params[] = $fieldType; }
if ($status === 'active') { $where[] = "inf.is_active = 1"; }
elseif ($status === 'inactive') { $where[] = "inf.is_active = 0"; }
if ($search) { $where[] = "(inf.name LIKE ? OR inf.code LIKE ?)"; $params = array_merge($params, ["%$search%", "%$search%"]); }

$whereClause = implode(' AND ', $where);
$orderBy = $sort === 'usage_count' ? "usage_count $order" : "inf.$sort $order";

$fields = dbFetchAll("
    SELECT inf.*,
           (SELECT COUNT(*) FROM request_info_values WHERE info_field_id = inf.id) as usage_count,
           (SELECT COUNT(*) FROM service_field_requirements WHERE field_id = inf.id) as service_count
    FROM information_fields inf
    WHERE $whereClause
    ORDER BY $orderBy
", $params) ?: [];

$categories = dbFetchAll("SELECT DISTINCT category FROM information_fields WHERE deleted_at IS NULL AND category IS NOT NULL AND category != '' ORDER BY category") ?: [];
$fieldTypes = dbFetchAll("SELECT DISTINCT field_type FROM information_fields WHERE deleted_at IS NULL AND field_type IS NOT NULL ORDER BY field_type") ?: [];

// Dashboard Stats
$stats = dbFetchOne("
    SELECT 
        COUNT(*) as total,
        SUM(is_active = 1) as active,
        SUM(is_active = 0 OR is_active IS NULL) as inactive,
        SUM(level = 'person') as person_level,
        SUM(level = 'entity' OR level = 'client') as entity_level,
        SUM(field_type = 'text') as text_fields,
        SUM(field_type = 'select') as select_fields,
        SUM(field_type = 'date') as date_fields
    FROM information_fields WHERE deleted_at IS NULL
") ?: [];

// Category stats
$categoryStats = dbFetchAll("
    SELECT category, COUNT(*) as cnt 
    FROM information_fields 
    WHERE deleted_at IS NULL AND category IS NOT NULL AND category != ''
    GROUP BY category 
    ORDER BY cnt DESC
") ?: [];

// Field type stats
$typeStats = dbFetchAll("
    SELECT field_type, COUNT(*) as cnt 
    FROM information_fields 
    WHERE deleted_at IS NULL AND field_type IS NOT NULL
    GROUP BY field_type 
    ORDER BY cnt DESC
") ?: [];

$categoryColors = [
    'Personal Info' => 'blue', 'Address' => 'green', 'Business' => 'purple',
    'Financial' => 'amber', 'Contact' => 'teal', 'Tax' => 'orange',
    'Bank Details' => 'indigo', 'Company Info' => 'violet'
];

$levelColors = ['person' => 'blue', 'entity' => 'purple', 'client' => 'purple', 'both' => 'green'];
$typeColors = ['text' => 'gray', 'select' => 'blue', 'date' => 'green', 'number' => 'amber', 'email' => 'teal', 'textarea' => 'purple', 'file' => 'red'];
$typeIcons = ['text' => 'font', 'select' => 'list', 'date' => 'calendar', 'number' => 'hashtag', 'email' => 'envelope', 'textarea' => 'align-left', 'file' => 'paperclip'];

function sortLink($column, $label, $currentSort, $currentOrder) {
    $newOrder = ($currentSort === $column && $currentOrder === 'ASC') ? 'DESC' : 'ASC';
    $icon = $currentSort === $column ? ($currentOrder === 'ASC' ? ' <i class="fas fa-sort-up"></i>' : ' <i class="fas fa-sort-down"></i>') : ' <i class="fas fa-sort text-gray-300"></i>';
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
        <h2 class="text-2xl font-bold">Information Fields</h2>
        <p class="text-gray-500 text-sm">Manage data collection fields</p>
    </div>
    <a href="add_information_field.php" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Field</a>
</div>

<!-- Dashboard Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-6">
    <div class="stat-card card p-4 bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500">
        <p class="text-2xl font-bold text-blue-700"><?= $stats['total'] ?? 0 ?></p>
        <p class="text-xs text-blue-600">Total Fields</p>
    </div>
    <a href="?status=active" class="stat-card card p-4 bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 hover:bg-green-100">
        <p class="text-2xl font-bold text-green-700"><?= $stats['active'] ?? 0 ?></p>
        <p class="text-xs text-green-600">Active</p>
    </a>
    <a href="?field_type=text" class="stat-card card p-4 bg-gradient-to-br from-gray-50 to-gray-100 border-l-4 border-gray-500 hover:bg-gray-100">
        <p class="text-2xl font-bold text-gray-700"><?= $stats['text_fields'] ?? 0 ?></p>
        <p class="text-xs text-gray-600">Text Fields</p>
    </a>
    <a href="?field_type=select" class="stat-card card p-4 bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500 hover:bg-indigo-100">
        <p class="text-2xl font-bold text-indigo-700"><?= $stats['select_fields'] ?? 0 ?></p>
        <p class="text-xs text-indigo-600">Dropdowns</p>
    </a>
    <a href="?field_type=date" class="stat-card card p-4 bg-gradient-to-br from-teal-50 to-teal-100 border-l-4 border-teal-500 hover:bg-teal-100">
        <p class="text-2xl font-bold text-teal-700"><?= $stats['date_fields'] ?? 0 ?></p>
        <p class="text-xs text-teal-600">Date Fields</p>
    </a>
    <a href="?level=person" class="stat-card card p-4 bg-gradient-to-br from-sky-50 to-sky-100 border-l-4 border-sky-500 hover:bg-sky-100">
        <p class="text-2xl font-bold text-sky-700"><?= $stats['person_level'] ?? 0 ?></p>
        <p class="text-xs text-sky-600">Person Level</p>
    </a>
    <a href="?level=entity" class="stat-card card p-4 bg-gradient-to-br from-violet-50 to-violet-100 border-l-4 border-violet-500 hover:bg-violet-100">
        <p class="text-2xl font-bold text-violet-700"><?= $stats['entity_level'] ?? 0 ?></p>
        <p class="text-xs text-violet-600">Entity Level</p>
    </a>
</div>

<!-- Categories & Field Types Row -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="card p-4">
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-folder text-blue-500 mr-2"></i>Fields by Category</h4>
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
        <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-th-list text-purple-500 mr-2"></i>Fields by Type</h4>
        <?php if (empty($typeStats)): ?>
            <p class="text-gray-400 text-sm">No field types defined</p>
        <?php else: ?>
            <div class="flex flex-wrap gap-2">
                <?php foreach ($typeStats as $ts): 
                    $tColor = $typeColors[$ts['field_type']] ?? 'gray';
                    $tIcon = $typeIcons[$ts['field_type']] ?? 'question';
                ?>
                <a href="?field_type=<?= urlencode($ts['field_type']) ?>" 
                   class="px-3 py-2 bg-<?= $tColor ?>-100 text-<?= $tColor ?>-700 rounded-lg text-sm hover:bg-<?= $tColor ?>-200 transition-colors flex items-center gap-2">
                    <i class="fas fa-<?= $tIcon ?>"></i>
                    <?= ucfirst($ts['field_type']) ?>
                    <span class="bg-<?= $tColor ?>-200 px-1.5 py-0.5 rounded text-xs"><?= $ts['cnt'] ?></span>
                </a>
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
            <label class="block text-xs text-gray-500 mb-1">Field Type</label>
            <select name="field_type" class="form-input">
                <option value="">All Types</option>
                <?php foreach ($fieldTypes as $ft): ?>
                <option value="<?= htmlspecialchars($ft['field_type']) ?>" <?= $fieldType === $ft['field_type'] ? 'selected' : '' ?>><?= ucfirst($ft['field_type']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Level</label>
            <select name="level" class="form-input">
                <option value="">All Levels</option>
                <option value="person" <?= $level === 'person' ? 'selected' : '' ?>>Person</option>
                <option value="entity" <?= $level === 'entity' ? 'selected' : '' ?>>Entity</option>
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
        <?php if ($search || $category || $level || $status || $fieldType): ?>
        <a href="information_fields.php" class="btn bg-gray-200 text-gray-700 hover:bg-gray-300"><i class="fas fa-times mr-1"></i>Clear</a>
        <?php endif; ?>
    </form>
</div>

<!-- Information Fields Table -->
<div class="card overflow-hidden">
    <div class="table-container">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase"><?= sortLink('name', 'Field Name', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('field_type', 'Type', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('category', 'Category', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('level', 'Level', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Placeholder</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Services</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('usage_count', 'Usage', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase"><?= sortLink('is_active', 'Status', $sort, $order) ?></th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y bg-white">
                <?php if (empty($fields)): ?>
                <tr><td colspan="9" class="px-4 py-8 text-center text-gray-500">
                    <i class="fas fa-list-alt fa-2x mb-2 text-gray-300"></i><br>No information fields found
                </td></tr>
                <?php else: foreach ($fields as $f): 
                    $catColor = $categoryColors[$f['category']] ?? 'gray';
                    $lvlColor = $levelColors[$f['level']] ?? 'gray';
                    $tColor = $typeColors[$f['field_type']] ?? 'gray';
                    $tIcon = $typeIcons[$f['field_type']] ?? 'question';
                ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($f['name'] ?? '') ?></p>
                        <p class="text-xs text-gray-400 font-mono"><?= htmlspecialchars($f['code'] ?? '') ?></p>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-<?= $tColor ?>-100 text-<?= $tColor ?>-700 rounded text-xs">
                            <i class="fas fa-<?= $tIcon ?>"></i> <?= ucfirst($f['field_type'] ?? 'text') ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($f['category']): ?>
                        <span class="px-2 py-1 bg-<?= $catColor ?>-100 text-<?= $catColor ?>-700 rounded text-xs"><?= htmlspecialchars($f['category']) ?></span>
                        <?php else: ?>
                        <span class="text-gray-400">-</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="px-2 py-1 rounded text-xs font-medium level-<?= $f['level'] ?? 'person' ?>">
                            <?= ucfirst($f['level'] ?? 'person') ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-500 max-w-[200px] truncate">
                        <?= htmlspecialchars($f['placeholder'] ?? '-') ?>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <span class="<?= ($f['service_count'] ?? 0) > 0 ? 'text-blue-600' : 'text-gray-400' ?>"><?= $f['service_count'] ?? 0 ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <span class="<?= ($f['usage_count'] ?? 0) > 0 ? 'font-medium text-green-600' : 'text-gray-400' ?>"><?= $f['usage_count'] ?? 0 ?></span>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <a href="?action=toggle&id=<?= $f['id'] ?>&<?= http_build_query(array_filter(['category' => $category, 'level' => $level, 'field_type' => $fieldType, 'status' => $status, 'search' => $search, 'sort' => $sort, 'order' => $order])) ?>"
                           class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs cursor-pointer hover:opacity-80 <?= $f['is_active'] ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' ?>">
                            <?= $f['is_active'] ? '<i class="fas fa-check-circle"></i> Active' : '<i class="fas fa-pause-circle"></i> Inactive' ?>
                        </a>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center gap-1">
                            <a href="edit_information_field.php?id=<?= $f['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php if (($f['usage_count'] ?? 0) == 0): ?>
                            <a href="?action=delete&id=<?= $f['id'] ?>" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete" onclick="return confirm('Delete this field?')"><i class="fas fa-trash"></i></a>
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
    <span>Showing <strong><?= count($fields) ?></strong> field(s)</span>
    <div class="flex gap-4">
        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-green-500"></span> <?= count(array_filter($fields, fn($f) => $f['is_active'])) ?> Active</span>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
