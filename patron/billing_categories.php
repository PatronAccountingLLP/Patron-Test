<?php
/**
 * PATRON - Billing Categories Management
 * Admin-only page to manage invoice series/categories
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Billing Categories';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();

// Only admins can access
if (!$isAdmin) {
    setFlash('error', 'You do not have permission to access this page.');
    header('Location: dashboard.php'); exit;
}

$error = '';
$success = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid security token. Please try again.';
    } else {
        $action = $_POST['action'] ?? '';
        
        if ($action === 'add') {
            $code = strtoupper(trim(sanitize($_POST['code'] ?? '')));
            $name = trim(sanitize($_POST['name'] ?? ''));
            $description = trim(sanitize($_POST['description'] ?? ''));
            $defaultTax = (float)($_POST['default_tax_percent'] ?? 0);
            $paymentTerms = (int)($_POST['payment_terms'] ?? 30);
            $isReimbursement = isset($_POST['is_reimbursement_only']) ? 1 : 0;
            
            if (empty($code) || empty($name)) {
                $error = 'Code and Name are required.';
            } elseif (!preg_match('/^[A-Z0-9_]+$/', $code)) {
                $error = 'Code must contain only uppercase letters, numbers, and underscores.';
            } else {
                // Check for duplicate code
                $existing = dbFetchOne("SELECT id FROM billing_categories WHERE code = ?", [$code]);
                if ($existing) {
                    $error = 'A category with this code already exists.';
                } else {
                    $maxSort = dbFetchOne("SELECT MAX(sort_order) as max_sort FROM billing_categories");
                    $sortOrder = ($maxSort['max_sort'] ?? 0) + 1;
                    
                    dbExecute("INSERT INTO billing_categories (code, name, description, default_tax_percent, payment_terms, is_reimbursement_only, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?)",
                        [$code, $name, $description, $defaultTax, $paymentTerms, $isReimbursement, $sortOrder]);
                    
                    $success = "Category '$code' created successfully.";
                }
            }
        }
        
        if ($action === 'edit') {
            $id = (int)$_POST['id'];
            $name = trim(sanitize($_POST['name'] ?? ''));
            $description = trim(sanitize($_POST['description'] ?? ''));
            $defaultTax = (float)($_POST['default_tax_percent'] ?? 0);
            $paymentTerms = (int)($_POST['payment_terms'] ?? 30);
            $isReimbursement = isset($_POST['is_reimbursement_only']) ? 1 : 0;
            $isActive = isset($_POST['is_active']) ? 1 : 0;
            
            if (empty($name)) {
                $error = 'Name is required.';
            } else {
                dbExecute("UPDATE billing_categories SET name = ?, description = ?, default_tax_percent = ?, payment_terms = ?, is_reimbursement_only = ?, is_active = ? WHERE id = ?",
                    [$name, $description, $defaultTax, $paymentTerms, $isReimbursement, $isActive, $id]);
                
                $success = "Category updated successfully.";
            }
        }
        
        if ($action === 'delete') {
            $id = (int)$_POST['id'];
            
            // Check if category is in use
            $usage = dbFetchOne("SELECT COUNT(*) as cnt FROM billing_requests WHERE category_id = ?", [$id]);
            $itemUsage = dbFetchOne("SELECT COUNT(*) as cnt FROM billing_items WHERE category_id = ?", [$id]);
            
            if (($usage['cnt'] ?? 0) > 0 || ($itemUsage['cnt'] ?? 0) > 0) {
                $error = 'Cannot delete category that is in use. Deactivate it instead.';
            } else {
                dbExecute("DELETE FROM billing_categories WHERE id = ?", [$id]);
                $success = "Category deleted successfully.";
            }
        }
        
        if ($action === 'reorder') {
            $order = json_decode($_POST['order'] ?? '[]', true);
            if (is_array($order)) {
                foreach ($order as $index => $id) {
                    dbExecute("UPDATE billing_categories SET sort_order = ? WHERE id = ?", [$index + 1, (int)$id]);
                }
                $success = "Order updated successfully.";
            }
        }
    }
}

// Get all categories
$categories = dbFetchAll("SELECT bc.*, 
    (SELECT COUNT(*) FROM billing_requests WHERE category_id = bc.id) as request_count,
    (SELECT COUNT(*) FROM billing_items WHERE category_id = bc.id) as item_count
    FROM billing_categories bc 
    ORDER BY bc.sort_order, bc.code");

require_once 'includes/header.php';
?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">Billing Categories</h2>
            <p class="text-sm text-gray-500 mt-1">Manage invoice series and categories</p>
        </div>
        <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="btn btn-primary text-sm">
            <i class="fas fa-plus mr-2"></i>Add Category
        </button>
    </div>

    <?php if ($error): ?>
    <div class="p-4 bg-red-100 text-red-700 rounded-lg">
        <i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?>
    </div>
    <?php endif; ?>

    <?php if ($success): ?>
    <div class="p-4 bg-green-100 text-green-700 rounded-lg">
        <i class="fas fa-check-circle mr-2"></i><?= htmlspecialchars($success) ?>
    </div>
    <?php endif; ?>

    <!-- Info Box -->
    <div class="card p-4 bg-blue-50 border-blue-200">
        <h4 class="font-medium text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>About Categories</h4>
        <ul class="text-sm text-blue-700 space-y-1">
            <li><strong>Professional fees</strong> (PA_P, PA_R): Subject to GST (18%)</li>
            <li><strong>Reimbursements</strong> (GST, TDS, etc.): Government fees collected and paid on client's behalf (0% tax)</li>
            <li>Payment terms: Days until due date from invoice date</li>
        </ul>
    </div>

    <!-- Categories Table -->
    <div class="card overflow-hidden">
        <table class="w-full" id="categoriesTable">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase w-8"></th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Code</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Tax %</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Payment Terms</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Type</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Usage</th>
                    <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200" id="sortableCategories">
                <?php foreach ($categories as $cat): ?>
                <tr class="hover:bg-gray-50" data-id="<?= $cat['id'] ?>">
                    <td class="px-4 py-3 cursor-move text-gray-400">
                        <i class="fas fa-grip-vertical"></i>
                    </td>
                    <td class="px-4 py-3">
                        <span class="font-mono font-medium text-gray-900"><?= htmlspecialchars($cat['code']) ?></span>
                    </td>
                    <td class="px-4 py-3">
                        <div class="text-gray-900"><?= htmlspecialchars($cat['name']) ?></div>
                        <?php if ($cat['description']): ?>
                        <div class="text-xs text-gray-500"><?= htmlspecialchars($cat['description']) ?></div>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($cat['default_tax_percent'] > 0): ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">
                            <?= $cat['default_tax_percent'] ?>%
                        </span>
                        <?php else: ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-600">0%</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center text-sm">
                        <?= $cat['payment_terms'] ?> days
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($cat['is_reimbursement_only']): ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-700">Reimbursement</span>
                        <?php else: ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">Professional</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-center text-sm text-gray-600">
                        <?= $cat['request_count'] ?> req / <?= $cat['item_count'] ?> items
                    </td>
                    <td class="px-4 py-3 text-center">
                        <?php if ($cat['is_active']): ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">Active</span>
                        <?php else: ?>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-500">Inactive</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-3 text-right">
                        <button onclick="editCategory(<?= htmlspecialchars(json_encode($cat)) ?>)" class="text-blue-600 hover:text-blue-800 p-1">
                            <i class="fas fa-edit"></i>
                        </button>
                        <?php if ($cat['request_count'] == 0 && $cat['item_count'] == 0): ?>
                        <button onclick="deleteCategory(<?= $cat['id'] ?>, '<?= htmlspecialchars($cat['code']) ?>')" class="text-red-600 hover:text-red-800 p-1 ml-1">
                            <i class="fas fa-trash"></i>
                        </button>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Modal -->
<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold">Add Category</h3>
        </div>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="add">
            <div class="p-6 space-y-4">
                <div>
                    <label class="form-label">Code *</label>
                    <input type="text" name="code" class="form-input" required placeholder="e.g., PA_P, GST, TDS" pattern="[A-Za-z0-9_]+" style="text-transform: uppercase">
                    <p class="text-xs text-gray-500 mt-1">Uppercase letters, numbers, underscores only</p>
                </div>
                <div>
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" class="form-input" required placeholder="e.g., Professional Fees - Periodic">
                </div>
                <div>
                    <label class="form-label">Description</label>
                    <input type="text" name="description" class="form-input" placeholder="Brief description">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Default Tax %</label>
                        <input type="number" name="default_tax_percent" class="form-input" value="0" min="0" max="100" step="0.01">
                    </div>
                    <div>
                        <label class="form-label">Payment Terms (days)</label>
                        <input type="number" name="payment_terms" class="form-input" value="30" min="0">
                    </div>
                </div>
                <div>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_reimbursement_only" class="rounded">
                        <span class="text-sm">Reimbursement only (no professional fees)</span>
                    </label>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold">Edit Category</h3>
        </div>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" id="editId">
            <div class="p-6 space-y-4">
                <div>
                    <label class="form-label">Code</label>
                    <input type="text" id="editCode" class="form-input bg-gray-100" disabled>
                    <p class="text-xs text-gray-500 mt-1">Code cannot be changed after creation</p>
                </div>
                <div>
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" id="editName" class="form-input" required>
                </div>
                <div>
                    <label class="form-label">Description</label>
                    <input type="text" name="description" id="editDescription" class="form-input">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Default Tax %</label>
                        <input type="number" name="default_tax_percent" id="editTax" class="form-input" min="0" max="100" step="0.01">
                    </div>
                    <div>
                        <label class="form-label">Payment Terms (days)</label>
                        <input type="number" name="payment_terms" id="editTerms" class="form-input" min="0">
                    </div>
                </div>
                <div>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_reimbursement_only" id="editReimbursement" class="rounded">
                        <span class="text-sm">Reimbursement only</span>
                    </label>
                </div>
                <div>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_active" id="editActive" class="rounded">
                        <span class="text-sm">Active</span>
                    </label>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('editModal').classList.add('hidden')" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Form -->
<form id="deleteForm" method="POST" class="hidden">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="action" value="delete">
    <input type="hidden" name="id" id="deleteId">
</form>

<!-- Reorder Form -->
<form id="reorderForm" method="POST" class="hidden">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="action" value="reorder">
    <input type="hidden" name="order" id="reorderData">
</form>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
function editCategory(cat) {
    document.getElementById('editId').value = cat.id;
    document.getElementById('editCode').value = cat.code;
    document.getElementById('editName').value = cat.name;
    document.getElementById('editDescription').value = cat.description || '';
    document.getElementById('editTax').value = cat.default_tax_percent;
    document.getElementById('editTerms').value = cat.payment_terms;
    document.getElementById('editReimbursement').checked = cat.is_reimbursement_only == 1;
    document.getElementById('editActive').checked = cat.is_active == 1;
    document.getElementById('editModal').classList.remove('hidden');
}

function deleteCategory(id, code) {
    if (confirm('Are you sure you want to delete category "' + code + '"?')) {
        document.getElementById('deleteId').value = id;
        document.getElementById('deleteForm').submit();
    }
}

// Initialize sortable
new Sortable(document.getElementById('sortableCategories'), {
    handle: '.cursor-move',
    animation: 150,
    onEnd: function() {
        const order = [];
        document.querySelectorAll('#sortableCategories tr').forEach(tr => {
            order.push(tr.dataset.id);
        });
        document.getElementById('reorderData').value = JSON.stringify(order);
        document.getElementById('reorderForm').submit();
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>
