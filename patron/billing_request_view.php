<?php
/**
 * PATRON - Billing Request View
 * View request details with approve/reject actions
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$currentUser = getCurrentUser();
$isAdmin = isAdmin();
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);

$requestId = (int)($_GET['id'] ?? 0);

if (!$requestId) {
    setFlash('error', 'Request not found.');
    header('Location: billing_requests.php'); exit;
}

// Load request with related data
$request = dbFetchOne("SELECT br.*, 
    c.name as client_name, c.zoho_contact_id,
    bc.code as category_code, bc.name as category_name,
    u.display_name as requester_name,
    ap.display_name as approver_name
    FROM billing_requests br
    LEFT JOIN clients c ON br.client_id = c.id
    LEFT JOIN billing_categories bc ON br.category_id = bc.id
    LEFT JOIN users u ON br.requested_by = u.id
    LEFT JOIN users ap ON br.approver_id = ap.id
    WHERE br.id = ?", [$requestId]);

if (!$request) {
    setFlash('error', 'Request not found.');
    header('Location: billing_requests.php'); exit;
}

// Check permission - requester, approver, or admin
$canView = ($request['requested_by'] == $currentUser['id'] || 
            $request['approver_id'] == $currentUser['id'] || 
            $isAdmin);

if (!$canView) {
    setFlash('error', 'You do not have permission to view this request.');
    header('Location: billing_requests.php'); exit;
}

// Load line items
$items = dbFetchAll("SELECT * FROM billing_request_items WHERE request_id = ? ORDER BY id", [$requestId]);

// Load activity log
$logs = dbFetchAll("SELECT brl.*, u.display_name as user_name 
    FROM billing_request_logs brl
    LEFT JOIN users u ON brl.performed_by = u.id
    WHERE brl.request_id = ?
    ORDER BY brl.created_at DESC", [$requestId]);

// Can approve?
$canApprove = ($request['status'] === 'PENDING') && 
              ($request['approver_id'] == $currentUser['id'] || $isAdmin);

// Can edit?
$canEdit = in_array($request['status'], ['DRAFT', 'REJECTED']) && 
           ($request['requested_by'] == $currentUser['id'] || $isAdmin);

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $canApprove) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        setFlash('error', 'Invalid security token.');
        header('Location: billing_request_view.php?id=' . $requestId);
        exit;
    }
    
    $action = $_POST['action'] ?? '';
    
    if ($action === 'approve') {
        // Update status
        dbExecute("UPDATE billing_requests SET status = 'APPROVED', approved_at = NOW(), approved_by = ?, updated_at = NOW() WHERE id = ?",
            [$currentUser['id'], $requestId]);
        
        // Log
        dbExecute("INSERT INTO billing_request_logs (request_id, action, old_status, new_status, performed_by) VALUES (?, 'APPROVED', 'PENDING', 'APPROVED', ?)",
            [$requestId, $currentUser['id']]);
        
        // TODO: Create in Zoho and send
        // For now, just mark as approved
        // In production, you would call Zoho API here
        
        setFlash('success', 'Request approved successfully.');
        header('Location: billing_request_view.php?id=' . $requestId);
        exit;
    }
    
    if ($action === 'reject') {
        $reason = trim(sanitize($_POST['rejection_reason'] ?? ''));
        
        if (empty($reason)) {
            setFlash('error', 'Please provide a rejection reason.');
            header('Location: billing_request_view.php?id=' . $requestId);
            exit;
        }
        
        dbExecute("UPDATE billing_requests SET status = 'REJECTED', rejection_reason = ?, rejected_at = NOW(), rejected_by = ?, updated_at = NOW() WHERE id = ?",
            [$reason, $currentUser['id'], $requestId]);
        
        dbExecute("INSERT INTO billing_request_logs (request_id, action, old_status, new_status, performed_by, details) VALUES (?, 'REJECTED', 'PENDING', 'REJECTED', ?, ?)",
            [$requestId, $currentUser['id'], json_encode(['reason' => $reason])]);
        
        setFlash('success', 'Request rejected.');
        header('Location: billing_request_view.php?id=' . $requestId);
        exit;
    }
}

$pageTitle = 'View Request - ' . $request['request_number'];

// Helper function for status badge
function getViewStatusBadge($status) {
    $badges = [
        'DRAFT' => 'bg-gray-100 text-gray-700',
        'PENDING' => 'bg-amber-100 text-amber-700',
        'APPROVED' => 'bg-blue-100 text-blue-700',
        'REJECTED' => 'bg-red-100 text-red-700',
        'CREATED' => 'bg-indigo-100 text-indigo-700',
        'SENT' => 'bg-green-100 text-green-700',
        'FAILED' => 'bg-red-100 text-red-700'
    ];
    $class = $badges[$status] ?? 'bg-gray-100 text-gray-700';
    $label = ucfirst(strtolower($status));
    return "<span class=\"px-3 py-1 text-sm font-medium rounded-full $class\">$label</span>";
}

require_once 'includes/header.php';
?>

<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-4">
            <div>
                <h2 class="text-xl font-semibold text-gray-800"><?= htmlspecialchars($request['request_number']) ?></h2>
                <p class="text-sm text-gray-500 mt-1">
                    <?= $request['type'] ?> Request • <?= htmlspecialchars($request['category_code']) ?>
                </p>
            </div>
            <?= getViewStatusBadge($request['status']) ?>
        </div>
        <div class="flex gap-3">
            <?php if ($canEdit): ?>
            <a href="billing_request.php?id=<?= $requestId ?>" class="btn btn-secondary text-sm">
                <i class="fas fa-edit mr-2"></i>Edit
            </a>
            <?php endif; ?>
            <a href="billing_requests.php" class="btn btn-secondary text-sm">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
        </div>
    </div>

    <!-- Rejection Warning -->
    <?php if ($request['status'] === 'REJECTED' && $request['rejection_reason']): ?>
    <div class="p-4 bg-red-100 text-red-700 rounded-lg">
        <div class="font-medium"><i class="fas fa-times-circle mr-2"></i>Request Rejected</div>
        <p class="mt-1"><?= htmlspecialchars($request['rejection_reason']) ?></p>
    </div>
    <?php endif; ?>

    <!-- Failed Warning -->
    <?php if ($request['status'] === 'FAILED' && $request['zoho_error']): ?>
    <div class="p-4 bg-red-100 text-red-700 rounded-lg">
        <div class="font-medium"><i class="fas fa-exclamation-triangle mr-2"></i>Zoho Creation Failed</div>
        <p class="mt-1"><?= htmlspecialchars($request['zoho_error']) ?></p>
    </div>
    <?php endif; ?>

    <div class="grid grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="col-span-2 space-y-6">
            <!-- Request Details -->
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-medium">Request Details</h3>
                </div>
                <div class="p-4">
                    <dl class="grid grid-cols-2 gap-4">
                        <div>
                            <dt class="text-sm text-gray-500">Client</dt>
                            <dd class="font-medium">
                                <a href="view_client.php?id=<?= $request['client_id'] ?>" class="text-blue-600 hover:text-blue-800">
                                    <?= htmlspecialchars($request['client_name']) ?>
                                </a>
                                <?php if (!$request['zoho_contact_id']): ?>
                                <span class="text-amber-500 text-xs ml-1">⚠️ Not synced</span>
                                <?php endif; ?>
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500">Category</dt>
                            <dd class="font-medium"><?= htmlspecialchars($request['category_code']) ?> - <?= htmlspecialchars($request['category_name']) ?></dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500">Date</dt>
                            <dd class="font-medium"><?= date('d M Y', strtotime($request['invoice_date'])) ?></dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500">Payment Terms</dt>
                            <dd class="font-medium"><?= $request['payment_terms'] ?> days</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500">Requested By</dt>
                            <dd class="font-medium"><?= htmlspecialchars($request['requester_name']) ?></dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500">Approver</dt>
                            <dd class="font-medium"><?= htmlspecialchars($request['approver_name'] ?? '-') ?></dd>
                        </div>
                        <?php if ($request['zoho_number']): ?>
                        <div>
                            <dt class="text-sm text-gray-500">Zoho Number</dt>
                            <dd class="font-medium font-mono text-blue-600"><?= htmlspecialchars($request['zoho_number']) ?></dd>
                        </div>
                        <?php endif; ?>
                    </dl>
                </div>
            </div>

            <!-- Line Items -->
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-medium">Line Items</h3>
                </div>
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Item</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase w-20">Qty</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase w-24">Rate</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase w-20">Tax</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase w-28">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($items as $item): ?>
                        <tr>
                            <td class="px-4 py-3">
                                <div class="font-medium"><?= htmlspecialchars($item['item_name']) ?></div>
                                <?php if ($item['description']): ?>
                                <div class="text-xs text-gray-500"><?= htmlspecialchars($item['description']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3 text-center"><?= $item['quantity'] ?></td>
                            <td class="px-4 py-3 text-right font-mono">₹<?= number_format($item['rate'], 2) ?></td>
                            <td class="px-4 py-3 text-center">
                                <?php if ($item['is_taxable']): ?>
                                <span class="text-xs text-blue-600">18%</span>
                                <?php else: ?>
                                <span class="text-xs text-gray-400">0%</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-4 py-3 text-right font-mono">₹<?= number_format($item['total_amount'], 2) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr class="border-t">
                            <td colspan="4" class="px-4 py-2 text-right font-medium">Subtotal:</td>
                            <td class="px-4 py-2 text-right font-mono">₹<?= number_format($request['subtotal'], 2) ?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-right font-medium">GST (18%):</td>
                            <td class="px-4 py-2 text-right font-mono">₹<?= number_format($request['tax_total'], 2) ?></td>
                        </tr>
                        <tr class="border-t bg-blue-50">
                            <td colspan="4" class="px-4 py-2 text-right font-bold">Total:</td>
                            <td class="px-4 py-2 text-right font-mono font-bold text-lg">₹<?= number_format($request['total'], 2) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Notes -->
            <?php if ($request['customer_notes'] || $request['internal_notes']): ?>
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-medium">Notes</h3>
                </div>
                <div class="p-4 space-y-4">
                    <?php if ($request['customer_notes']): ?>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Customer Notes</div>
                        <div class="text-gray-700"><?= nl2br(htmlspecialchars($request['customer_notes'])) ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ($request['internal_notes']): ?>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Internal Notes</div>
                        <div class="text-gray-700"><?= nl2br(htmlspecialchars($request['internal_notes'])) ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Actions -->
            <?php if ($canApprove): ?>
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-amber-50">
                    <h3 class="font-medium text-amber-800">Action Required</h3>
                </div>
                <div class="p-4 space-y-4">
                    <form method="POST">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="approve">
                        <button type="submit" class="btn btn-success w-full" onclick="return confirm('Approve this request?')">
                            <i class="fas fa-check mr-2"></i>Approve & Create in Zoho
                        </button>
                    </form>
                    
                    <div class="border-t pt-4">
                        <form method="POST">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="reject">
                            <div class="mb-3">
                                <label class="form-label text-sm">Rejection Reason *</label>
                                <textarea name="rejection_reason" class="form-input text-sm" rows="3" required placeholder="Please provide a reason..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger w-full">
                                <i class="fas fa-times mr-2"></i>Reject
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- Activity Log -->
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-medium">Activity</h3>
                </div>
                <div class="p-4">
                    <?php if (empty($logs)): ?>
                    <p class="text-sm text-gray-500">No activity yet</p>
                    <?php else: ?>
                    <div class="space-y-3">
                        <?php foreach ($logs as $log): ?>
                        <div class="flex gap-3">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                <?php
                                $icon = 'fa-info';
                                if ($log['action'] === 'CREATED') $icon = 'fa-plus';
                                elseif ($log['action'] === 'APPROVED') $icon = 'fa-check';
                                elseif ($log['action'] === 'REJECTED') $icon = 'fa-times';
                                elseif ($log['action'] === 'UPDATED') $icon = 'fa-edit';
                                ?>
                                <i class="fas <?= $icon ?> text-gray-500 text-xs"></i>
                            </div>
                            <div class="flex-1">
                                <div class="text-sm">
                                    <span class="font-medium"><?= htmlspecialchars($log['user_name']) ?></span>
                                    <span class="text-gray-500"><?= strtolower($log['action']) ?> the request</span>
                                </div>
                                <div class="text-xs text-gray-400"><?= date('d M Y, H:i', strtotime($log['created_at'])) ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Quick Info -->
            <div class="card">
                <div class="px-4 py-3 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-medium">Info</h3>
                </div>
                <div class="p-4 text-sm space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Created</span>
                        <span><?= date('d M Y', strtotime($request['created_at'])) ?></span>
                    </div>
                    <?php if ($request['submitted_at']): ?>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Submitted</span>
                        <span><?= date('d M Y', strtotime($request['submitted_at'])) ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($request['approved_at']): ?>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Approved</span>
                        <span><?= date('d M Y', strtotime($request['approved_at'])) ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
