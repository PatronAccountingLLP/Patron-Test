<?php
/**
 * PATRON - Billing Approvals
 * Manager/Admin page to approve billing requests and create in Zoho
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Billing Approvals';
$currentUser = getCurrentUser();
$isAdmin = isAdmin();
$userRoles = getUserRoles($currentUser['id']);
$roleCodes = array_column($userRoles, 'code');
$isManager = in_array('MANAGER', $roleCodes);

if (!$isAdmin && !$isManager) {
    setFlash('error', 'Access denied');
    header('Location: dashboard.php'); exit;
}

// Handle AJAX actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {
    header('Content-Type: application/json');
    
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'error' => 'Invalid token']);
        exit;
    }
    
    $action = $_POST['action'] ?? '';
    $requestId = (int)($_POST['request_id'] ?? 0);
    
    if (!$requestId) {
        echo json_encode(['success' => false, 'error' => 'Invalid request ID']);
        exit;
    }
    
    // Load request
    $request = dbFetchOne("SELECT br.*, c.zoho_contact_id, c.name as client_name 
                           FROM billing_requests br 
                           JOIN clients c ON br.client_id = c.id 
                           WHERE br.id = ?", [$requestId]);
    
    if (!$request) {
        echo json_encode(['success' => false, 'error' => 'Request not found']);
        exit;
    }
    
    // Check permission (only assigned approver or admin)
    if ($request['approver_id'] != $currentUser['id'] && !$isAdmin) {
        echo json_encode(['success' => false, 'error' => 'You are not authorized to approve this request']);
        exit;
    }
    
    if ($request['status'] !== 'PENDING') {
        echo json_encode(['success' => false, 'error' => 'This request is not pending approval']);
        exit;
    }
    
    // APPROVE
    if ($action === 'approve') {
        $createInZoho = isset($_POST['create_in_zoho']) && $_POST['create_in_zoho'] === '1';
        $sendToClient = isset($_POST['send_to_client']) && $_POST['send_to_client'] === '1';
        
        try {
            // Load line items
            $items = dbFetchAll("SELECT * FROM billing_request_items WHERE request_id = ? ORDER BY sort_order, id", [$requestId]);
            
            $zohoId = null;
            $zohoNumber = null;
            $zohoError = null;
            $status = 'APPROVED';
            
            // Create in Zoho if requested
            if ($createInZoho) {
                require_once 'includes/zoho_api.php';
                $zoho = new ZohoBooks();
                
                if (!$zoho->isConnected()) {
                    echo json_encode(['success' => false, 'error' => 'Zoho Books is not connected']);
                    exit;
                }
                
                if (!$request['zoho_contact_id']) {
                    echo json_encode(['success' => false, 'error' => 'Client is not synced to Zoho. Please sync client first.']);
                    exit;
                }
                
                // Build line items for Zoho
                $lineItems = [];
                foreach ($items as $item) {
                    $lineItem = [
                        'name' => $item['item_name'],
                        'description' => $item['description'] ?? '',
                        'rate' => (float)$item['rate'],
                        'quantity' => (float)$item['quantity'],
                    ];
                    
                    // Add item_id if linked to Zoho item
                    if (!empty($item['zoho_item_id'])) {
                        $lineItem['item_id'] = $item['zoho_item_id'];
                    }
                    
                    // Add HSN/SAC
                    if (!empty($item['hsn_sac_code'])) {
                        $lineItem['hsn_or_sac'] = $item['hsn_sac_code'];
                    }
                    
                    // Add tax
                    if (!empty($item['zoho_tax_id'])) {
                        $lineItem['tax_id'] = $item['zoho_tax_id'];
                    } elseif ($item['is_taxable'] && $item['tax_percentage'] > 0) {
                        // Try to find matching tax in Zoho
                        // For now, we'll let Zoho apply default tax
                        $lineItem['is_taxable'] = true;
                    }
                    
                    $lineItems[] = $lineItem;
                }
                
                // Build invoice/estimate data
                $docData = [
                    'customer_id' => $request['zoho_contact_id'],
                    'date' => $request['invoice_date'] ?? date('Y-m-d'),
                    'payment_terms' => (int)$request['payment_terms'],
                    'line_items' => $lineItems
                ];
                
                if (!empty($request['customer_notes'])) {
                    $docData['notes'] = $request['customer_notes'];
                }
                
                // Create in Zoho
                if ($request['type'] === 'INVOICE') {
                    $result = $zoho->createInvoice($docData);
                    
                    if ($result && isset($result['invoice_id'])) {
                        $zohoId = $result['invoice_id'];
                        $zohoNumber = $result['invoice_number'];
                        $status = 'CREATED';
                        
                        // Send to client if requested
                        if ($sendToClient) {
                            $sent = $zoho->sendInvoice($zohoId);
                            if ($sent) {
                                $status = 'SENT';
                            }
                        }
                    } else {
                        $zohoError = $zoho->getLastError() ?? 'Failed to create invoice';
                        $status = 'FAILED';
                    }
                } else {
                    // ESTIMATE
                    $result = $zoho->createEstimate($docData);
                    
                    if ($result && isset($result['estimate_id'])) {
                        $zohoId = $result['estimate_id'];
                        $zohoNumber = $result['estimate_number'];
                        $status = 'CREATED';
                        
                        if ($sendToClient) {
                            $sent = $zoho->sendEstimate($zohoId);
                            if ($sent) {
                                $status = 'SENT';
                            }
                        }
                    } else {
                        $zohoError = $zoho->getLastError() ?? 'Failed to create estimate';
                        $status = 'FAILED';
                    }
                }
            }
            
            // Update request
            $updateFields = [
                'status' => $status,
                'approved_at' => date('Y-m-d H:i:s'),
                'approved_by' => $currentUser['id']
            ];
            
            if ($request['type'] === 'INVOICE') {
                $updateFields['zoho_invoice_id'] = $zohoId;
            } else {
                $updateFields['zoho_estimate_id'] = $zohoId;
            }
            $updateFields['zoho_number'] = $zohoNumber;
            $updateFields['zoho_error'] = $zohoError;
            
            if ($status === 'CREATED' || $status === 'SENT') {
                $updateFields['created_in_zoho_at'] = date('Y-m-d H:i:s');
            }
            if ($status === 'SENT') {
                $updateFields['sent_at'] = date('Y-m-d H:i:s');
            }
            
            $setClauses = [];
            $params = [];
            foreach ($updateFields as $field => $value) {
                $setClauses[] = "$field = ?";
                $params[] = $value;
            }
            $params[] = $requestId;
            
            dbExecute("UPDATE billing_requests SET " . implode(', ', $setClauses) . " WHERE id = ?", $params);
            
            // Log
            dbExecute("INSERT INTO billing_request_logs (request_id, action, performed_by, details) VALUES (?, 'APPROVED', ?, ?)",
                [$requestId, $currentUser['id'], json_encode([
                    'status' => $status, 
                    'zoho_id' => $zohoId, 
                    'zoho_number' => $zohoNumber,
                    'error' => $zohoError
                ])]);
            
            if ($status === 'FAILED') {
                echo json_encode([
                    'success' => false, 
                    'error' => 'Approved but failed to create in Zoho: ' . $zohoError,
                    'partial' => true
                ]);
            } else {
                echo json_encode([
                    'success' => true, 
                    'message' => $createInZoho 
                        ? ($sendToClient ? 'Approved, created in Zoho, and sent to client!' : 'Approved and created in Zoho!')
                        : 'Request approved.',
                    'status' => $status,
                    'zoho_number' => $zohoNumber
                ]);
            }
            exit;
            
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => 'Error: ' . $e->getMessage()]);
            exit;
        }
    }
    
    // REJECT
    if ($action === 'reject') {
        $reason = trim(sanitize($_POST['reason'] ?? ''));
        
        if (empty($reason)) {
            echo json_encode(['success' => false, 'error' => 'Please provide a rejection reason']);
            exit;
        }
        
        dbExecute("UPDATE billing_requests SET status = 'REJECTED', rejection_reason = ?, rejected_at = NOW(), rejected_by = ? WHERE id = ?",
            [$reason, $currentUser['id'], $requestId]);
        
        dbExecute("INSERT INTO billing_request_logs (request_id, action, performed_by, details) VALUES (?, 'REJECTED', ?, ?)",
            [$requestId, $currentUser['id'], json_encode(['reason' => $reason])]);
        
        echo json_encode(['success' => true, 'message' => 'Request rejected.']);
        exit;
    }
    
    echo json_encode(['success' => false, 'error' => 'Unknown action']);
    exit;
}

// Get pending requests for approval
$where = "br.status = 'PENDING'";
$params = [];

if (!$isAdmin) {
    $where .= " AND br.approver_id = ?";
    $params[] = $currentUser['id'];
}

$pendingRequests = dbFetchAll("
    SELECT br.*, 
           c.name as client_name, c.zoho_contact_id,
           bc.code as category_code, bc.name as category_name,
           u.display_name as requester_name
    FROM billing_requests br
    JOIN clients c ON br.client_id = c.id
    LEFT JOIN billing_categories bc ON br.category_id = bc.id
    LEFT JOIN users u ON br.requested_by = u.id
    WHERE $where
    ORDER BY br.submitted_at ASC
", $params);

// Get recent processed requests
$recentRequests = dbFetchAll("
    SELECT br.*, 
           c.name as client_name,
           bc.code as category_code,
           u.display_name as requester_name,
           ap.display_name as processor_name
    FROM billing_requests br
    JOIN clients c ON br.client_id = c.id
    LEFT JOIN billing_categories bc ON br.category_id = bc.id
    LEFT JOIN users u ON br.requested_by = u.id
    LEFT JOIN users ap ON br.approved_by = ap.id OR br.rejected_by = ap.id
    WHERE br.status IN ('APPROVED', 'REJECTED', 'CREATED', 'SENT', 'FAILED')
    " . (!$isAdmin ? "AND br.approver_id = ?" : "") . "
    ORDER BY COALESCE(br.approved_at, br.rejected_at) DESC
    LIMIT 20
", $isAdmin ? [] : [$currentUser['id']]);

require_once 'includes/header.php';
?>

<style>
.request-card { transition: all 0.2s; border-left: 4px solid transparent; }
.request-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.request-card.invoice { border-left-color: #3B82F6; }
.request-card.estimate { border-left-color: #8B5CF6; }
</style>

<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold text-gray-800">Billing Approvals</h2>
            <p class="text-sm text-gray-500 mt-1">Review and approve billing requests</p>
        </div>
        <a href="billing_requests.php" class="btn btn-secondary text-sm">
            <i class="fas fa-list mr-2"></i>All Requests
        </a>
    </div>

    <!-- Pending Approvals -->
    <div class="card">
        <div class="p-4 border-b bg-amber-50">
            <h3 class="font-semibold text-amber-800">
                <i class="fas fa-clock mr-2"></i>Pending Approval 
                <span class="ml-2 px-2 py-0.5 text-sm rounded-full bg-amber-200"><?= count($pendingRequests) ?></span>
            </h3>
        </div>
        
        <?php if (empty($pendingRequests)): ?>
        <div class="p-8 text-center text-gray-500">
            <i class="fas fa-check-circle text-4xl text-green-300 mb-3"></i>
            <p>No pending requests!</p>
        </div>
        <?php else: ?>
        <div class="divide-y">
            <?php foreach ($pendingRequests as $req): ?>
            <div class="p-4 request-card <?= strtolower($req['type']) ?>" id="request-<?= $req['id'] ?>">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <div class="flex items-center gap-3">
                            <a href="billing_request_view.php?id=<?= $req['id'] ?>" class="text-lg font-semibold text-blue-600 hover:text-blue-800">
                                <?= htmlspecialchars($req['request_number']) ?>
                            </a>
                            <span class="px-2 py-1 text-xs font-medium rounded-full <?= $req['type'] === 'INVOICE' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' ?>">
                                <?= $req['type'] ?>
                            </span>
                            <?php if (!$req['zoho_contact_id']): ?>
                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                <i class="fas fa-exclamation-triangle mr-1"></i>Client Not Synced
                            </span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                            <div>
                                <span class="text-gray-500">Client:</span>
                                <span class="font-medium ml-1"><?= htmlspecialchars($req['client_name']) ?></span>
                            </div>
                            <div>
                                <span class="text-gray-500">Category:</span>
                                <span class="font-medium ml-1"><?= htmlspecialchars($req['category_code']) ?></span>
                            </div>
                            <div>
                                <span class="text-gray-500">Amount:</span>
                                <span class="font-mono font-bold text-green-600 ml-1">₹<?= number_format($req['total'], 2) ?></span>
                            </div>
                            <div>
                                <span class="text-gray-500">By:</span>
                                <span class="font-medium ml-1"><?= htmlspecialchars($req['requester_name']) ?></span>
                            </div>
                        </div>
                        
                        <div class="mt-2 text-xs text-gray-400">
                            Submitted: <?= date('d M Y H:i', strtotime($req['submitted_at'])) ?>
                            <?php if ($req['invoice_date']): ?>
                            • Invoice Date: <?= date('d M Y', strtotime($req['invoice_date'])) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="flex gap-2 ml-4">
                        <a href="billing_request_view.php?id=<?= $req['id'] ?>" class="btn btn-secondary btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>
                        <button onclick="openApproveModal(<?= $req['id'] ?>, '<?= htmlspecialchars($req['request_number']) ?>', <?= $req['zoho_contact_id'] ? 'true' : 'false' ?>)" 
                                class="btn btn-success btn-sm">
                            <i class="fas fa-check mr-1"></i>Approve
                        </button>
                        <button onclick="openRejectModal(<?= $req['id'] ?>, '<?= htmlspecialchars($req['request_number']) ?>')" 
                                class="btn btn-danger btn-sm">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <!-- Recent Activity -->
    <?php if (!empty($recentRequests)): ?>
    <div class="card">
        <div class="p-4 border-b bg-gray-50">
            <h3 class="font-semibold text-gray-700"><i class="fas fa-history mr-2"></i>Recent Activity</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left">Request #</th>
                        <th class="px-4 py-2 text-left">Client</th>
                        <th class="px-4 py-2 text-right">Amount</th>
                        <th class="px-4 py-2 text-center">Status</th>
                        <th class="px-4 py-2 text-left">Zoho #</th>
                        <th class="px-4 py-2 text-left">Processed</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <?php foreach ($recentRequests as $req): 
                        $statusColors = [
                            'APPROVED' => 'bg-blue-100 text-blue-700',
                            'REJECTED' => 'bg-red-100 text-red-700',
                            'CREATED' => 'bg-indigo-100 text-indigo-700',
                            'SENT' => 'bg-green-100 text-green-700',
                            'FAILED' => 'bg-red-100 text-red-700'
                        ];
                    ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <a href="billing_request_view.php?id=<?= $req['id'] ?>" class="text-blue-600 hover:text-blue-800">
                                <?= htmlspecialchars($req['request_number']) ?>
                            </a>
                        </td>
                        <td class="px-4 py-2"><?= htmlspecialchars($req['client_name']) ?></td>
                        <td class="px-4 py-2 text-right font-mono">₹<?= number_format($req['total'], 2) ?></td>
                        <td class="px-4 py-2 text-center">
                            <span class="px-2 py-1 text-xs rounded-full <?= $statusColors[$req['status']] ?? 'bg-gray-100 text-gray-700' ?>">
                                <?= $req['status'] ?>
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <?php if ($req['zoho_number']): ?>
                            <span class="font-mono text-blue-600"><?= htmlspecialchars($req['zoho_number']) ?></span>
                            <?php else: ?>
                            <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-4 py-2 text-gray-500">
                            <?= date('d M H:i', strtotime($req['approved_at'] ?? $req['rejected_at'])) ?>
                            by <?= htmlspecialchars($req['processor_name'] ?? 'Unknown') ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Approve Modal -->
<div id="approveModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="p-4 border-b bg-green-50">
            <h3 class="font-semibold text-green-800"><i class="fas fa-check-circle mr-2"></i>Approve Request</h3>
        </div>
        <div class="p-6">
            <p class="text-gray-600 mb-4">Approve request <strong id="approveRequestNum"></strong>?</p>
            
            <div class="space-y-4">
                <label class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
                    <input type="checkbox" id="createInZoho" class="mt-1 rounded text-green-600" checked>
                    <div>
                        <span class="font-medium">Create in Zoho Books</span>
                        <p class="text-xs text-gray-500">Automatically create invoice/estimate in Zoho</p>
                    </div>
                </label>
                
                <label class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100" id="sendToClientLabel">
                    <input type="checkbox" id="sendToClient" class="mt-1 rounded text-green-600">
                    <div>
                        <span class="font-medium">Send to Client</span>
                        <p class="text-xs text-gray-500">Email invoice/estimate to client immediately</p>
                    </div>
                </label>
            </div>
            
            <div id="zohoWarning" class="hidden mt-4 p-3 bg-amber-50 border border-amber-200 rounded text-sm text-amber-700">
                <i class="fas fa-exclamation-triangle mr-1"></i>Client is not synced to Zoho. Cannot create invoice in Zoho.
            </div>
        </div>
        <div class="p-4 border-t bg-gray-50 flex justify-end gap-3">
            <button onclick="closeApproveModal()" class="btn btn-secondary">Cancel</button>
            <button onclick="submitApproval()" id="approveBtn" class="btn btn-success">
                <i class="fas fa-check mr-2"></i>Approve
            </button>
        </div>
    </div>
</div>

<!-- Reject Modal -->
<div id="rejectModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="p-4 border-b bg-red-50">
            <h3 class="font-semibold text-red-800"><i class="fas fa-times-circle mr-2"></i>Reject Request</h3>
        </div>
        <div class="p-6">
            <p class="text-gray-600 mb-4">Reject request <strong id="rejectRequestNum"></strong>?</p>
            
            <div>
                <label class="form-label">Reason for Rejection <span class="text-red-500">*</span></label>
                <textarea id="rejectReason" class="form-input" rows="3" placeholder="Please provide a reason..."></textarea>
            </div>
        </div>
        <div class="p-4 border-t bg-gray-50 flex justify-end gap-3">
            <button onclick="closeRejectModal()" class="btn btn-secondary">Cancel</button>
            <button onclick="submitRejection()" id="rejectBtn" class="btn btn-danger">
                <i class="fas fa-times mr-2"></i>Reject
            </button>
        </div>
    </div>
</div>

<script>
const csrfToken = '<?= generateCsrfToken() ?>';
let currentRequestId = null;
let currentClientSynced = false;

function openApproveModal(requestId, requestNum, clientSynced) {
    currentRequestId = requestId;
    currentClientSynced = clientSynced;
    document.getElementById('approveRequestNum').textContent = requestNum;
    document.getElementById('approveModal').classList.remove('hidden');
    
    // Handle Zoho sync status
    if (!clientSynced) {
        document.getElementById('createInZoho').checked = false;
        document.getElementById('createInZoho').disabled = true;
        document.getElementById('sendToClient').checked = false;
        document.getElementById('sendToClient').disabled = true;
        document.getElementById('zohoWarning').classList.remove('hidden');
    } else {
        document.getElementById('createInZoho').disabled = false;
        document.getElementById('sendToClient').disabled = false;
        document.getElementById('zohoWarning').classList.add('hidden');
    }
}

function closeApproveModal() {
    document.getElementById('approveModal').classList.add('hidden');
    currentRequestId = null;
}

function openRejectModal(requestId, requestNum) {
    currentRequestId = requestId;
    document.getElementById('rejectRequestNum').textContent = requestNum;
    document.getElementById('rejectReason').value = '';
    document.getElementById('rejectModal').classList.remove('hidden');
}

function closeRejectModal() {
    document.getElementById('rejectModal').classList.add('hidden');
    currentRequestId = null;
}

async function submitApproval() {
    if (!currentRequestId) return;
    
    const btn = document.getElementById('approveBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
    
    const formData = new FormData();
    formData.append('ajax', '1');
    formData.append('action', 'approve');
    formData.append('csrf_token', csrfToken);
    formData.append('request_id', currentRequestId);
    formData.append('create_in_zoho', document.getElementById('createInZoho').checked ? '1' : '0');
    formData.append('send_to_client', document.getElementById('sendToClient').checked ? '1' : '0');
    
    try {
        const response = await fetch('billing_approvals.php', { method: 'POST', body: formData });
        const data = await response.json();
        
        if (data.success) {
            // Remove from pending list or update status
            const row = document.getElementById('request-' + currentRequestId);
            if (row) {
                row.style.opacity = '0.5';
                row.innerHTML = '<div class="p-4 text-center text-green-600"><i class="fas fa-check-circle mr-2"></i>' + data.message + (data.zoho_number ? ' (' + data.zoho_number + ')' : '') + '</div>';
                setTimeout(() => row.remove(), 2000);
            }
            closeApproveModal();
        } else {
            alert('Error: ' + (data.error || 'Failed to approve'));
        }
    } catch (e) {
        alert('Error: ' + e.message);
    }
    
    btn.disabled = false;
    btn.innerHTML = '<i class="fas fa-check mr-2"></i>Approve';
}

async function submitRejection() {
    if (!currentRequestId) return;
    
    const reason = document.getElementById('rejectReason').value.trim();
    if (!reason) {
        alert('Please provide a rejection reason');
        return;
    }
    
    const btn = document.getElementById('rejectBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
    
    const formData = new FormData();
    formData.append('ajax', '1');
    formData.append('action', 'reject');
    formData.append('csrf_token', csrfToken);
    formData.append('request_id', currentRequestId);
    formData.append('reason', reason);
    
    try {
        const response = await fetch('billing_approvals.php', { method: 'POST', body: formData });
        const data = await response.json();
        
        if (data.success) {
            const row = document.getElementById('request-' + currentRequestId);
            if (row) {
                row.style.opacity = '0.5';
                row.innerHTML = '<div class="p-4 text-center text-red-600"><i class="fas fa-times-circle mr-2"></i>Request rejected</div>';
                setTimeout(() => row.remove(), 2000);
            }
            closeRejectModal();
        } else {
            alert('Error: ' + (data.error || 'Failed to reject'));
        }
    } catch (e) {
        alert('Error: ' + e.message);
    }
    
    btn.disabled = false;
    btn.innerHTML = '<i class="fas fa-times mr-2"></i>Reject';
}
</script>

<?php require_once 'includes/footer.php'; ?>
