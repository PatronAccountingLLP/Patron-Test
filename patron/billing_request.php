<?php
/**
 * PATRON - Billing Request Create/Edit
 * Zoho Invoice-style form for billing requests
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
$clientId = (int)($_GET['client_id'] ?? 0);
$type = strtoupper($_GET['type'] ?? 'INVOICE');
if (!in_array($type, ['INVOICE', 'ESTIMATE'])) $type = 'INVOICE';

$mode = $requestId ? 'edit' : 'new';
$pageTitle = $mode === 'edit' ? 'Edit Billing Request' : 'New Billing Request';

$error = '';
$request = null;
$items = [];

// If editing, load existing request
if ($requestId) {
    $request = dbFetchOne("SELECT * FROM billing_requests WHERE id = ?", [$requestId]);
    
    if (!$request) {
        setFlash('error', 'Request not found.');
        header('Location: billing_requests.php'); exit;
    }
    
    if (!in_array($request['status'], ['DRAFT', 'REJECTED'])) {
        setFlash('error', 'This request cannot be edited.');
        header('Location: billing_request_view.php?id=' . $requestId);
        exit;
    }
    
    if ($request['requested_by'] != $currentUser['id'] && !$isAdmin) {
        setFlash('error', 'You do not have permission to edit this request.');
        header('Location: billing_requests.php'); exit;
    }
    
    $clientId = $request['client_id'];
    $type = $request['type'];
    
    $items = dbFetchAll("SELECT * FROM billing_request_items WHERE request_id = ? ORDER BY sort_order, id", [$requestId]);
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajax'])) {
    header('Content-Type: application/json');
    
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'error' => 'Invalid token']);
        exit;
    }
    
    $action = $_POST['action'] ?? '';
    
    // Get billing items for dropdown
    if ($action === 'get_billing_items') {
        $billingItems = dbFetchAll("
            SELECT bi.*, bc.code as category_code
            FROM billing_items bi
            LEFT JOIN billing_categories bc ON bi.category_id = bc.id
            WHERE bi.is_active = 1
            ORDER BY bc.sort_order, bi.name
        ");
        echo json_encode(['success' => true, 'items' => $billingItems]);
        exit;
    }
    
    // Search clients
    if ($action === 'search_clients') {
        $search = trim($_POST['search'] ?? '');
        
        // Get clients from client_team for current user (or all for admin)
        if ($isAdmin) {
            if ($search) {
                $clients = dbFetchAll("
                    SELECT c.id, c.name, c.zoho_contact_id, c.zoho_customer_name,
                           ct.manager_id,
                           u.display_name as manager_name
                    FROM clients c
                    LEFT JOIN client_team ct ON c.id = ct.client_id
                    LEFT JOIN users u ON ct.manager_id = u.id
                    WHERE c.deleted_at IS NULL 
                    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
                    AND (c.name LIKE ? OR c.zoho_customer_name LIKE ?)
                    ORDER BY c.name
                    LIMIT 20
                ", ["%$search%", "%$search%"]);
            } else {
                // Empty search - return recent/top clients
                $clients = dbFetchAll("
                    SELECT c.id, c.name, c.zoho_contact_id, c.zoho_customer_name,
                           ct.manager_id,
                           u.display_name as manager_name
                    FROM clients c
                    LEFT JOIN client_team ct ON c.id = ct.client_id
                    LEFT JOIN users u ON ct.manager_id = u.id
                    WHERE c.deleted_at IS NULL 
                    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
                    ORDER BY c.updated_at DESC, c.name
                    LIMIT 20
                ");
            }
        } else {
            if ($search) {
                $clients = dbFetchAll("
                    SELECT DISTINCT c.id, c.name, c.zoho_contact_id, c.zoho_customer_name,
                           ct.manager_id,
                           u.display_name as manager_name
                    FROM clients c
                    JOIN client_team ct ON c.id = ct.client_id
                    LEFT JOIN users u ON ct.manager_id = u.id
                    WHERE c.deleted_at IS NULL 
                    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
                    AND (ct.executor_1_id = ? OR ct.executor_2_id = ? OR ct.reviewer_id = ? OR ct.manager_id = ?)
                    AND (c.name LIKE ? OR c.zoho_customer_name LIKE ?)
                    ORDER BY c.name
                    LIMIT 20
                ", [$currentUser['id'], $currentUser['id'], $currentUser['id'], $currentUser['id'], "%$search%", "%$search%"]);
            } else {
                // Empty search - return user's assigned clients
                $clients = dbFetchAll("
                    SELECT DISTINCT c.id, c.name, c.zoho_contact_id, c.zoho_customer_name,
                           ct.manager_id,
                           u.display_name as manager_name
                    FROM clients c
                    JOIN client_team ct ON c.id = ct.client_id
                    LEFT JOIN users u ON ct.manager_id = u.id
                    WHERE c.deleted_at IS NULL 
                    AND UPPER(COALESCE(c.status, 'ACTIVE')) = 'ACTIVE'
                    AND (ct.executor_1_id = ? OR ct.executor_2_id = ? OR ct.reviewer_id = ? OR ct.manager_id = ?)
                    ORDER BY c.name
                    LIMIT 20
                ", [$currentUser['id'], $currentUser['id'], $currentUser['id'], $currentUser['id']]);
            }
        }
        
        echo json_encode(['success' => true, 'clients' => $clients ?: []]);
        exit;
    }
    
    // Get client details
    if ($action === 'get_client') {
        $id = (int)($_POST['client_id'] ?? 0);
        $client = dbFetchOne("
            SELECT c.*, ct.manager_id, u.display_name as manager_name
            FROM clients c
            LEFT JOIN client_team ct ON c.id = ct.client_id
            LEFT JOIN users u ON ct.manager_id = u.id
            WHERE c.id = ?
        ", [$id]);
        
        if ($client) {
            echo json_encode(['success' => true, 'client' => $client]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Client not found']);
        }
        exit;
    }
    
    echo json_encode(['success' => false, 'error' => 'Unknown action']);
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['ajax'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid security token. Please try again.';
    } else {
        $action = $_POST['submit_action'] ?? 'draft';
        $clientId = (int)($_POST['client_id'] ?? 0);
        $categoryId = (int)($_POST['category_id'] ?? 0);
        $type = strtoupper($_POST['type'] ?? 'INVOICE');
        $invoiceDate = sanitize($_POST['invoice_date'] ?? date('Y-m-d'));
        $paymentTerms = (int)($_POST['payment_terms'] ?? 30);
        $customerNotes = trim(sanitize($_POST['customer_notes'] ?? ''));
        $internalNotes = trim(sanitize($_POST['internal_notes'] ?? ''));
        $referenceNumber = trim(sanitize($_POST['reference_number'] ?? ''));
        
        // Get line items from POST
        $itemBillingIds = $_POST['item_billing_id'] ?? [];
        $itemNames = $_POST['item_name'] ?? [];
        $itemDescriptions = $_POST['item_description'] ?? [];
        $itemHsnSac = $_POST['item_hsn_sac'] ?? [];
        $itemZohoIds = $_POST['item_zoho_id'] ?? [];
        $itemQuantities = $_POST['item_qty'] ?? [];
        $itemRates = $_POST['item_rate'] ?? [];
        $itemTaxIds = $_POST['item_tax_id'] ?? [];
        $itemTaxNames = $_POST['item_tax_name'] ?? [];
        $itemTaxPercents = $_POST['item_tax_percent'] ?? [];
        
        // Validate
        if (!$clientId) {
            $error = 'Please select a client.';
        } elseif (!$categoryId) {
            $error = 'Please select a billing category.';
        } elseif (empty($itemNames) || !array_filter($itemNames)) {
            $error = 'Please add at least one line item.';
        } else {
            // Validate client
            $client = dbFetchOne("SELECT id, name, zoho_contact_id FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
            if (!$client) {
                $error = 'Invalid client selected.';
            } elseif (!$client['zoho_contact_id'] && $action === 'submit') {
                $error = 'This client is not synced to Zoho Books. Please sync the client first or save as draft.';
            } else {
                // Get manager from client_team
                $team = dbFetchOne("SELECT manager_id FROM client_team WHERE client_id = ? AND manager_id IS NOT NULL LIMIT 1", [$clientId]);
                $approverId = $team['manager_id'] ?? null;
                
                if (!$approverId && !$isAdmin && $action === 'submit') {
                    $error = 'This client has no manager assigned. Please contact admin.';
                } else {
                    if (!$approverId && $isAdmin) {
                        $approverId = $currentUser['id'];
                    }
                    
                    // Calculate totals
                    $subtotal = 0;
                    $taxTotal = 0;
                    $lineItems = [];
                    
                    foreach ($itemNames as $i => $name) {
                        $name = trim($name);
                        if (empty($name)) continue;
                        
                        $qty = (float)($itemQuantities[$i] ?? 1);
                        $rate = (float)($itemRates[$i] ?? 0);
                        $taxPercent = (float)($itemTaxPercents[$i] ?? 0);
                        $isTaxable = $taxPercent > 0 ? 1 : 0;
                        
                        $amount = $qty * $rate;
                        $taxAmount = $amount * ($taxPercent / 100);
                        $totalAmount = $amount + $taxAmount;
                        
                        $subtotal += $amount;
                        $taxTotal += $taxAmount;
                        
                        $lineItems[] = [
                            'billing_item_id' => (int)($itemBillingIds[$i] ?? 0) ?: null,
                            'item_name' => $name,
                            'description' => trim($itemDescriptions[$i] ?? ''),
                            'hsn_sac_code' => trim($itemHsnSac[$i] ?? ''),
                            'zoho_item_id' => trim($itemZohoIds[$i] ?? '') ?: null,
                            'zoho_tax_id' => trim($itemTaxIds[$i] ?? '') ?: null,
                            'zoho_tax_name' => trim($itemTaxNames[$i] ?? '') ?: null,
                            'quantity' => $qty,
                            'rate' => $rate,
                            'is_taxable' => $isTaxable,
                            'tax_percentage' => $taxPercent,
                            'tax_amount' => $taxAmount,
                            'amount' => $amount,
                            'total_amount' => $totalAmount
                        ];
                    }
                    
                    $total = $subtotal + $taxTotal;
                    $status = ($action === 'submit') ? 'PENDING' : 'DRAFT';
                    $submittedAt = ($action === 'submit') ? date('Y-m-d H:i:s') : null;
                    
                    // Calculate due date
                    $dueDate = date('Y-m-d', strtotime($invoiceDate . " + $paymentTerms days"));
                    
                    if ($mode === 'edit') {
                        dbExecute("UPDATE billing_requests SET 
                            type = ?, client_id = ?, category_id = ?, approver_id = ?,
                            invoice_date = ?, due_date = ?, payment_terms = ?, subtotal = ?, tax_total = ?, total = ?,
                            customer_notes = ?, internal_notes = ?, status = ?, submitted_at = ?, updated_at = NOW()
                            WHERE id = ?",
                            [$type, $clientId, $categoryId, $approverId, $invoiceDate, $dueDate, $paymentTerms,
                             $subtotal, $taxTotal, $total, $customerNotes, $internalNotes, $status, $submittedAt, $requestId]);
                        
                        dbExecute("DELETE FROM billing_request_items WHERE request_id = ?", [$requestId]);
                        
                        $sortOrder = 0;
                        foreach ($lineItems as $item) {
                            dbExecute("INSERT INTO billing_request_items 
                                (request_id, billing_item_id, item_name, description, hsn_sac_code, zoho_item_id, zoho_tax_id, zoho_tax_name,
                                 quantity, rate, is_taxable, tax_percentage, tax_amount, amount, total_amount, sort_order) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                                [$requestId, $item['billing_item_id'], $item['item_name'], $item['description'],
                                 $item['hsn_sac_code'], $item['zoho_item_id'], $item['zoho_tax_id'], $item['zoho_tax_name'],
                                 $item['quantity'], $item['rate'], $item['is_taxable'], $item['tax_percentage'],
                                 $item['tax_amount'], $item['amount'], $item['total_amount'], $sortOrder++]);
                        }
                        
                        dbExecute("INSERT INTO billing_request_logs (request_id, action, performed_by, details) VALUES (?, 'UPDATED', ?, ?)",
                            [$requestId, $currentUser['id'], json_encode(['status' => $status])]);
                        
                        setFlash('success', $status === 'PENDING' ? 'Request submitted for approval.' : 'Request saved as draft.');
                        header('Location: billing_request_view.php?id=' . $requestId);
                        exit;
                        
                    } else {
                        // Generate request number
                        $year = date('Y');
                        $lastReq = dbFetchOne("SELECT request_number FROM billing_requests WHERE request_number LIKE ? ORDER BY id DESC LIMIT 1", ["BRQ-$year-%"]);
                        if ($lastReq) {
                            $lastNum = (int)substr($lastReq['request_number'], -5);
                            $newNum = $lastNum + 1;
                        } else {
                            $newNum = 1;
                        }
                        $requestNumber = sprintf("BRQ-%s-%05d", $year, $newNum);
                        
                        dbExecute("INSERT INTO billing_requests 
                            (request_number, type, client_id, category_id, requested_by, approver_id,
                             invoice_date, due_date, payment_terms, subtotal, tax_total, total,
                             customer_notes, internal_notes, status, submitted_at, created_at) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())",
                            [$requestNumber, $type, $clientId, $categoryId, $currentUser['id'], $approverId,
                             $invoiceDate, $dueDate, $paymentTerms, $subtotal, $taxTotal, $total,
                             $customerNotes, $internalNotes, $status, $submittedAt]);
                        
                        $requestId = dbLastInsertId();
                        
                        $sortOrder = 0;
                        foreach ($lineItems as $item) {
                            dbExecute("INSERT INTO billing_request_items 
                                (request_id, billing_item_id, item_name, description, hsn_sac_code, zoho_item_id, zoho_tax_id, zoho_tax_name,
                                 quantity, rate, is_taxable, tax_percentage, tax_amount, amount, total_amount, sort_order) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                                [$requestId, $item['billing_item_id'], $item['item_name'], $item['description'],
                                 $item['hsn_sac_code'], $item['zoho_item_id'], $item['zoho_tax_id'], $item['zoho_tax_name'],
                                 $item['quantity'], $item['rate'], $item['is_taxable'], $item['tax_percentage'],
                                 $item['tax_amount'], $item['amount'], $item['total_amount'], $sortOrder++]);
                        }
                        
                        dbExecute("INSERT INTO billing_request_logs (request_id, action, performed_by, details) VALUES (?, 'CREATED', ?, ?)",
                            [$requestId, $currentUser['id'], json_encode(['status' => $status])]);
                        
                        setFlash('success', $status === 'PENDING' ? 'Request submitted for approval.' : 'Request saved as draft.');
                        header('Location: billing_request_view.php?id=' . $requestId);
                        exit;
                    }
                }
            }
        }
    }
}

// Get categories for dropdown
$categories = dbFetchAll("SELECT id, code, name FROM billing_categories WHERE is_active = 1 ORDER BY sort_order, code");

// Get billing items for JavaScript
$billingItems = dbFetchAll("
    SELECT bi.*, bc.code as category_code
    FROM billing_items bi
    LEFT JOIN billing_categories bc ON bi.category_id = bc.id
    WHERE bi.is_active = 1
    ORDER BY bc.sort_order, bi.name
");

// Get selected client if any
$selectedClient = null;
if ($clientId) {
    $selectedClient = dbFetchOne("
        SELECT c.*, ct.manager_id, u.display_name as manager_name
        FROM clients c
        LEFT JOIN client_team ct ON c.id = ct.client_id
        LEFT JOIN users u ON ct.manager_id = u.id
        WHERE c.id = ?
    ", [$clientId]);
}

require_once 'includes/header.php';
?>

<style>
.item-row { transition: background-color 0.2s; }
.item-row:hover { background-color: #f9fafb; }
.client-search-results { max-height: 300px; overflow-y: auto; }
.item-select { min-width: 200px; }
.zoho-badge { font-size: 10px; padding: 2px 6px; border-radius: 3px; }
</style>

<form method="POST" id="billingForm">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    <input type="hidden" name="type" value="<?= htmlspecialchars($type) ?>">
    
    <div class="max-w-6xl mx-auto space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-800"><?= $pageTitle ?></h2>
                <p class="text-sm text-gray-500 mt-1">
                    <?= $type === 'INVOICE' ? 'Create invoice request for Zoho Books' : 'Create estimate request for Zoho Books' ?>
                </p>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-3 py-1 rounded-full text-sm font-medium <?= $type === 'INVOICE' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' ?>">
                    <?= $type ?>
                </span>
                <?php if ($mode === 'edit'): ?>
                <span class="text-gray-500 text-sm"><?= $request['request_number'] ?></span>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($error): ?>
        <div class="p-4 bg-red-100 text-red-700 rounded-lg">
            <i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>

        <div class="card">
            <div class="p-6 space-y-6">
                <!-- Client & Basic Info Row (Zoho-style) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Client Selection -->
                    <div>
                        <label class="form-label">Client <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input type="hidden" name="client_id" id="clientId" value="<?= $clientId ?>">
                            <input type="text" 
                                   id="clientSearch" 
                                   class="form-input pr-10" 
                                   placeholder="Search client name..."
                                   value="<?= $selectedClient ? htmlspecialchars($selectedClient['name']) : '' ?>"
                                   autocomplete="off">
                            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="fas fa-search"></i>
                            </span>
                            <div id="clientResults" class="absolute z-10 w-full mt-1 bg-white border rounded-lg shadow-lg hidden client-search-results"></div>
                        </div>
                        <div id="clientInfo" class="mt-2 p-3 bg-gray-50 rounded-lg <?= $selectedClient ? '' : 'hidden' ?>">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="font-medium text-gray-800" id="clientName"><?= $selectedClient ? htmlspecialchars($selectedClient['name']) : '' ?></p>
                                    <p class="text-xs text-gray-500" id="clientZohoName"><?= $selectedClient && $selectedClient['zoho_customer_name'] ? 'Zoho: ' . htmlspecialchars($selectedClient['zoho_customer_name']) : '' ?></p>
                                </div>
                                <div class="text-right">
                                    <?php if ($selectedClient && $selectedClient['zoho_contact_id']): ?>
                                    <span class="zoho-badge bg-green-100 text-green-700"><i class="fas fa-check mr-1"></i>Zoho Synced</span>
                                    <?php elseif ($selectedClient): ?>
                                    <span class="zoho-badge bg-amber-100 text-amber-700"><i class="fas fa-exclamation-triangle mr-1"></i>Not Synced</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-1" id="clientManager">
                                <?= $selectedClient && $selectedClient['manager_name'] ? 'Approver: ' . htmlspecialchars($selectedClient['manager_name']) : '' ?>
                            </p>
                        </div>
                        <div id="clientWarning" class="hidden mt-2 p-2 bg-amber-50 border border-amber-200 rounded text-sm text-amber-700">
                            <i class="fas fa-exclamation-triangle mr-1"></i><span id="clientWarningText"></span>
                        </div>
                    </div>
                    
                    <!-- Category & Terms -->
                    <div class="space-y-4">
                        <div>
                            <label class="form-label">Billing Category <span class="text-red-500">*</span></label>
                            <select name="category_id" id="categorySelect" class="form-input" required>
                                <option value="">Select Category</option>
                                <?php foreach ($categories as $cat): ?>
                                <option value="<?= $cat['id'] ?>" 
                                        <?= ($request['category_id'] ?? 0) == $cat['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($cat['code']) ?> - <?= htmlspecialchars($cat['name']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="form-label"><?= $type === 'INVOICE' ? 'Invoice' : 'Estimate' ?> Date</label>
                                <input type="date" name="invoice_date" class="form-input" 
                                       value="<?= htmlspecialchars($request['invoice_date'] ?? date('Y-m-d')) ?>">
                            </div>
                            <div>
                                <label class="form-label">Payment Terms (Days)</label>
                                <input type="number" name="payment_terms" id="paymentTerms" class="form-input" 
                                       value="<?= $request['payment_terms'] ?? 30 ?>" min="0">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Line Items (Zoho-style table) -->
                <div>
                    <label class="form-label mb-2">Line Items <span class="text-red-500">*</span></label>
                    <div class="border rounded-lg overflow-hidden">
                        <table class="w-full" id="itemsTable">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase w-1/3">Item</th>
                                    <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase w-24">SAC</th>
                                    <th class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase w-20">Qty</th>
                                    <th class="px-3 py-2 text-right text-xs font-medium text-gray-500 uppercase w-28">Rate</th>
                                    <th class="px-3 py-2 text-center text-xs font-medium text-gray-500 uppercase w-28">Tax</th>
                                    <th class="px-3 py-2 text-right text-xs font-medium text-gray-500 uppercase w-28">Amount</th>
                                    <th class="px-3 py-2 w-10"></th>
                                </tr>
                            </thead>
                            <tbody id="itemsBody">
                                <?php if (!empty($items)): ?>
                                    <?php foreach ($items as $idx => $item): ?>
                                    <tr class="item-row border-t">
                                        <td class="px-3 py-2">
                                            <input type="hidden" name="item_billing_id[]" value="<?= $item['billing_item_id'] ?>">
                                            <input type="hidden" name="item_zoho_id[]" value="<?= htmlspecialchars($item['zoho_item_id'] ?? '') ?>">
                                            <input type="hidden" name="item_tax_id[]" class="item-tax-id" value="<?= htmlspecialchars($item['zoho_tax_id'] ?? '') ?>">
                                            <input type="hidden" name="item_tax_name[]" class="item-tax-name" value="<?= htmlspecialchars($item['zoho_tax_name'] ?? '') ?>">
                                            <select class="form-input text-sm py-1 item-select" onchange="selectBillingItem(this)">
                                                <option value="">-- Select or type custom --</option>
                                                <?php foreach ($billingItems as $bi): ?>
                                                <option value="<?= $bi['id'] ?>" 
                                                        data-name="<?= htmlspecialchars($bi['name']) ?>"
                                                        data-desc="<?= htmlspecialchars($bi['description'] ?? '') ?>"
                                                        data-hsn="<?= htmlspecialchars($bi['hsn_sac_code'] ?? '') ?>"
                                                        data-rate="<?= $bi['default_rate'] ?>"
                                                        data-taxable="<?= $bi['is_taxable'] ?>"
                                                        data-tax-id="<?= htmlspecialchars($bi['zoho_tax_id'] ?? '') ?>"
                                                        data-tax-name="<?= htmlspecialchars($bi['zoho_tax_name'] ?? '') ?>"
                                                        data-tax-percent="<?= $bi['zoho_tax_percentage'] ?? ($bi['is_taxable'] ? 18 : 0) ?>"
                                                        data-zoho-id="<?= htmlspecialchars($bi['zoho_item_id'] ?? '') ?>"
                                                        <?= $item['billing_item_id'] == $bi['id'] ? 'selected' : '' ?>>
                                                    <?= htmlspecialchars($bi['name']) ?> (₹<?= number_format($bi['default_rate'], 2) ?>)
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <input type="text" name="item_name[]" class="form-input text-sm py-1 mt-1 item-name" 
                                                   value="<?= htmlspecialchars($item['item_name']) ?>" placeholder="Item name" required>
                                            <input type="text" name="item_description[]" class="form-input text-xs py-1 mt-1 item-desc" 
                                                   value="<?= htmlspecialchars($item['description'] ?? '') ?>" placeholder="Description (optional)">
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="text" name="item_hsn_sac[]" class="form-input text-sm py-1 item-hsn text-center" 
                                                   value="<?= htmlspecialchars($item['hsn_sac_code'] ?? '') ?>" placeholder="998231">
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="number" name="item_qty[]" class="form-input text-sm py-1 item-qty text-center" 
                                                   value="<?= $item['quantity'] ?>" min="0.01" step="0.01" required>
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="number" name="item_rate[]" class="form-input text-sm py-1 item-rate text-right" 
                                                   value="<?= $item['rate'] ?>" min="0" step="0.01" required>
                                        </td>
                                        <td class="px-3 py-2">
                                            <select name="item_tax_percent[]" class="form-input text-sm py-1 item-tax-select">
                                                <option value="0" <?= $item['tax_percentage'] == 0 ? 'selected' : '' ?>>Exempt</option>
                                                <option value="5" <?= $item['tax_percentage'] == 5 ? 'selected' : '' ?>>GST 5%</option>
                                                <option value="12" <?= $item['tax_percentage'] == 12 ? 'selected' : '' ?>>GST 12%</option>
                                                <option value="18" <?= $item['tax_percentage'] == 18 ? 'selected' : '' ?>>GST 18%</option>
                                                <option value="28" <?= $item['tax_percentage'] == 28 ? 'selected' : '' ?>>GST 28%</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-2 text-right font-mono text-sm item-amount">₹<?= number_format($item['total_amount'], 2) ?></td>
                                        <td class="px-3 py-2">
                                            <button type="button" onclick="removeRow(this)" class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="item-row border-t">
                                        <td class="px-3 py-2">
                                            <input type="hidden" name="item_billing_id[]" value="">
                                            <input type="hidden" name="item_zoho_id[]" value="">
                                            <input type="hidden" name="item_tax_id[]" class="item-tax-id" value="">
                                            <input type="hidden" name="item_tax_name[]" class="item-tax-name" value="">
                                            <select class="form-input text-sm py-1 item-select" onchange="selectBillingItem(this)">
                                                <option value="">-- Select or type custom --</option>
                                                <?php foreach ($billingItems as $bi): ?>
                                                <option value="<?= $bi['id'] ?>" 
                                                        data-name="<?= htmlspecialchars($bi['name']) ?>"
                                                        data-desc="<?= htmlspecialchars($bi['description'] ?? '') ?>"
                                                        data-hsn="<?= htmlspecialchars($bi['hsn_sac_code'] ?? '') ?>"
                                                        data-rate="<?= $bi['default_rate'] ?>"
                                                        data-taxable="<?= $bi['is_taxable'] ?>"
                                                        data-tax-id="<?= htmlspecialchars($bi['zoho_tax_id'] ?? '') ?>"
                                                        data-tax-name="<?= htmlspecialchars($bi['zoho_tax_name'] ?? '') ?>"
                                                        data-tax-percent="<?= $bi['zoho_tax_percentage'] ?? ($bi['is_taxable'] ? 18 : 0) ?>"
                                                        data-zoho-id="<?= htmlspecialchars($bi['zoho_item_id'] ?? '') ?>">
                                                    <?= htmlspecialchars($bi['name']) ?> (₹<?= number_format($bi['default_rate'], 2) ?>)
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <input type="text" name="item_name[]" class="form-input text-sm py-1 mt-1 item-name" placeholder="Item name" required>
                                            <input type="text" name="item_description[]" class="form-input text-xs py-1 mt-1 item-desc" placeholder="Description (optional)">
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="text" name="item_hsn_sac[]" class="form-input text-sm py-1 item-hsn text-center" placeholder="998231">
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="number" name="item_qty[]" class="form-input text-sm py-1 item-qty text-center" value="1" min="0.01" step="0.01" required>
                                        </td>
                                        <td class="px-3 py-2">
                                            <input type="number" name="item_rate[]" class="form-input text-sm py-1 item-rate text-right" value="0" min="0" step="0.01" required>
                                        </td>
                                        <td class="px-3 py-2">
                                            <select name="item_tax_percent[]" class="form-input text-sm py-1 item-tax-select">
                                                <option value="0">Exempt</option>
                                                <option value="5">GST 5%</option>
                                                <option value="12">GST 12%</option>
                                                <option value="18" selected>GST 18%</option>
                                                <option value="28">GST 28%</option>
                                            </select>
                                        </td>
                                        <td class="px-3 py-2 text-right font-mono text-sm item-amount">₹0.00</td>
                                        <td class="px-3 py-2">
                                            <button type="button" onclick="removeRow(this)" class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot class="bg-gray-50">
                                <tr class="border-t">
                                    <td colspan="7" class="px-3 py-2">
                                        <button type="button" onclick="addRow()" class="text-blue-600 hover:text-blue-800 text-sm">
                                            <i class="fas fa-plus mr-1"></i>Add Line Item
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td colspan="5" class="px-3 py-2 text-right font-medium">Subtotal:</td>
                                    <td class="px-3 py-2 text-right font-mono" id="subtotal">₹0.00</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="px-3 py-2 text-right font-medium">Tax:</td>
                                    <td class="px-3 py-2 text-right font-mono" id="taxTotal">₹0.00</td>
                                    <td></td>
                                </tr>
                                <tr class="border-t bg-blue-50">
                                    <td colspan="5" class="px-3 py-2 text-right font-bold text-lg">Total:</td>
                                    <td class="px-3 py-2 text-right font-mono font-bold text-lg text-blue-700" id="grandTotal">₹0.00</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <!-- Notes -->
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="form-label">Customer Notes <span class="text-gray-400 text-xs">(visible on invoice)</span></label>
                        <textarea name="customer_notes" class="form-input" rows="3" placeholder="Thank you for your business..."><?= htmlspecialchars($request['customer_notes'] ?? '') ?></textarea>
                    </div>
                    <div>
                        <label class="form-label">Internal Notes <span class="text-gray-400 text-xs">(not visible to client)</span></label>
                        <textarea name="internal_notes" class="form-input" rows="3" placeholder="Internal reference..."><?= htmlspecialchars($request['internal_notes'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-between">
                <a href="billing_requests.php" class="btn btn-secondary">Cancel</a>
                <div class="flex gap-3">
                    <button type="submit" name="submit_action" value="draft" class="btn btn-secondary">
                        <i class="fas fa-save mr-2"></i>Save as Draft
                    </button>
                    <button type="submit" name="submit_action" value="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>Submit for Approval
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
const csrfToken = '<?= generateCsrfToken() ?>';
const billingItems = <?= json_encode($billingItems) ?>;
let rowIndex = <?= max(count($items), 1) ?>;
let searchTimeout;

// Client search
document.getElementById('clientSearch').addEventListener('input', function() {
    clearTimeout(searchTimeout);
    const query = this.value.trim();
    
    searchTimeout = setTimeout(async () => {
        const formData = new FormData();
        formData.append('ajax', '1');
        formData.append('action', 'search_clients');
        formData.append('csrf_token', csrfToken);
        formData.append('search', query);
        
        const response = await fetch('billing_request.php', { method: 'POST', body: formData });
        const data = await response.json();
        
        if (data.success && data.clients.length > 0) {
            const results = document.getElementById('clientResults');
            results.innerHTML = data.clients.map(c => `
                <div class="p-3 hover:bg-gray-50 cursor-pointer border-b last:border-b-0" onclick="selectClient(${c.id})">
                    <div class="flex justify-between items-start">
                        <div>
                            <div class="font-medium text-gray-800">${escapeHtml(c.name)}</div>
                            ${c.zoho_customer_name && c.zoho_customer_name !== c.name ? `<div class="text-xs text-gray-500">Zoho: ${escapeHtml(c.zoho_customer_name)}</div>` : ''}
                        </div>
                        ${c.zoho_contact_id ? '<span class="zoho-badge bg-green-100 text-green-700">Synced</span>' : '<span class="zoho-badge bg-amber-100 text-amber-700">Not Synced</span>'}
                    </div>
                    ${c.manager_name ? `<div class="text-xs text-gray-400 mt-1">Approver: ${escapeHtml(c.manager_name)}</div>` : ''}
                </div>
            `).join('');
            results.classList.remove('hidden');
        } else {
            document.getElementById('clientResults').innerHTML = '<div class="p-3 text-gray-500 text-sm">No clients found</div>';
            document.getElementById('clientResults').classList.remove('hidden');
        }
    }, 300);
});

document.getElementById('clientSearch').addEventListener('focus', function() {
    // Show top clients on focus
    this.dispatchEvent(new Event('input'));
});

document.addEventListener('click', function(e) {
    if (!e.target.closest('#clientSearch') && !e.target.closest('#clientResults')) {
        document.getElementById('clientResults').classList.add('hidden');
    }
});

async function selectClient(clientId) {
    const formData = new FormData();
    formData.append('ajax', '1');
    formData.append('action', 'get_client');
    formData.append('csrf_token', csrfToken);
    formData.append('client_id', clientId);
    
    const response = await fetch('billing_request.php', { method: 'POST', body: formData });
    const data = await response.json();
    
    if (data.success) {
        const c = data.client;
        document.getElementById('clientId').value = c.id;
        document.getElementById('clientSearch').value = c.name;
        document.getElementById('clientName').textContent = c.name;
        document.getElementById('clientZohoName').textContent = c.zoho_customer_name ? 'Zoho: ' + c.zoho_customer_name : '';
        document.getElementById('clientManager').textContent = c.manager_name ? 'Approver: ' + c.manager_name : 'No manager assigned';
        document.getElementById('clientInfo').classList.remove('hidden');
        document.getElementById('clientResults').classList.add('hidden');
        
        // Update status badge
        const infoDiv = document.getElementById('clientInfo');
        const badge = infoDiv.querySelector('.zoho-badge');
        if (badge) {
            if (c.zoho_contact_id) {
                badge.className = 'zoho-badge bg-green-100 text-green-700';
                badge.innerHTML = '<i class="fas fa-check mr-1"></i>Zoho Synced';
            } else {
                badge.className = 'zoho-badge bg-amber-100 text-amber-700';
                badge.innerHTML = '<i class="fas fa-exclamation-triangle mr-1"></i>Not Synced';
            }
        }
        
        // Show warning if not synced
        if (!c.zoho_contact_id) {
            document.getElementById('clientWarningText').textContent = 'This client is not synced to Zoho. You can save as draft, but cannot submit for approval.';
            document.getElementById('clientWarning').classList.remove('hidden');
        } else if (!c.manager_id) {
            document.getElementById('clientWarningText').textContent = 'This client has no manager assigned.';
            document.getElementById('clientWarning').classList.remove('hidden');
        } else {
            document.getElementById('clientWarning').classList.add('hidden');
        }
    }
}

function selectBillingItem(select) {
    const row = select.closest('tr');
    const opt = select.options[select.selectedIndex];
    
    if (select.value) {
        row.querySelector('.item-name').value = opt.dataset.name || '';
        row.querySelector('.item-desc').value = opt.dataset.desc || '';
        row.querySelector('.item-hsn').value = opt.dataset.hsn || '';
        row.querySelector('.item-rate').value = opt.dataset.rate || 0;
        row.querySelector('.item-tax-id').value = opt.dataset.taxId || '';
        row.querySelector('.item-tax-name').value = opt.dataset.taxName || '';
        row.querySelector('input[name="item_billing_id[]"]').value = select.value;
        row.querySelector('input[name="item_zoho_id[]"]').value = opt.dataset.zohoId || '';
        
        // Set tax dropdown
        const taxPercent = opt.dataset.taxPercent || (opt.dataset.taxable === '1' ? 18 : 0);
        row.querySelector('.item-tax-select').value = taxPercent;
    }
    
    calculateTotals();
}

function addRow() {
    const tbody = document.getElementById('itemsBody');
    const tr = document.createElement('tr');
    tr.className = 'item-row border-t';
    
    let itemOptions = '<option value="">-- Select or type custom --</option>';
    billingItems.forEach(bi => {
        const taxPercent = bi.zoho_tax_percentage || (bi.is_taxable ? 18 : 0);
        itemOptions += `<option value="${bi.id}" 
            data-name="${escapeHtml(bi.name)}"
            data-desc="${escapeHtml(bi.description || '')}"
            data-hsn="${escapeHtml(bi.hsn_sac_code || '')}"
            data-rate="${bi.default_rate}"
            data-taxable="${bi.is_taxable}"
            data-tax-id="${escapeHtml(bi.zoho_tax_id || '')}"
            data-tax-name="${escapeHtml(bi.zoho_tax_name || '')}"
            data-tax-percent="${taxPercent}"
            data-zoho-id="${escapeHtml(bi.zoho_item_id || '')}">
            ${escapeHtml(bi.name)} (₹${parseFloat(bi.default_rate).toFixed(2)})
        </option>`;
    });
    
    tr.innerHTML = `
        <td class="px-3 py-2">
            <input type="hidden" name="item_billing_id[]" value="">
            <input type="hidden" name="item_zoho_id[]" value="">
            <input type="hidden" name="item_tax_id[]" class="item-tax-id" value="">
            <input type="hidden" name="item_tax_name[]" class="item-tax-name" value="">
            <select class="form-input text-sm py-1 item-select" onchange="selectBillingItem(this)">
                ${itemOptions}
            </select>
            <input type="text" name="item_name[]" class="form-input text-sm py-1 mt-1 item-name" placeholder="Item name" required>
            <input type="text" name="item_description[]" class="form-input text-xs py-1 mt-1 item-desc" placeholder="Description (optional)">
        </td>
        <td class="px-3 py-2">
            <input type="text" name="item_hsn_sac[]" class="form-input text-sm py-1 item-hsn text-center" placeholder="998231">
        </td>
        <td class="px-3 py-2">
            <input type="number" name="item_qty[]" class="form-input text-sm py-1 item-qty text-center" value="1" min="0.01" step="0.01" required>
        </td>
        <td class="px-3 py-2">
            <input type="number" name="item_rate[]" class="form-input text-sm py-1 item-rate text-right" value="0" min="0" step="0.01" required>
        </td>
        <td class="px-3 py-2">
            <select name="item_tax_percent[]" class="form-input text-sm py-1 item-tax-select">
                <option value="0">Exempt</option>
                <option value="5">GST 5%</option>
                <option value="12">GST 12%</option>
                <option value="18" selected>GST 18%</option>
                <option value="28">GST 28%</option>
            </select>
        </td>
        <td class="px-3 py-2 text-right font-mono text-sm item-amount">₹0.00</td>
        <td class="px-3 py-2">
            <button type="button" onclick="removeRow(this)" class="text-red-500 hover:text-red-700">
                <i class="fas fa-times"></i>
            </button>
        </td>
    `;
    tbody.appendChild(tr);
    rowIndex++;
    attachRowListeners(tr);
}

function removeRow(btn) {
    const rows = document.querySelectorAll('.item-row');
    if (rows.length > 1) {
        btn.closest('tr').remove();
        calculateTotals();
    }
}

function calculateTotals() {
    let subtotal = 0;
    let taxTotal = 0;
    
    document.querySelectorAll('.item-row').forEach(row => {
        const qty = parseFloat(row.querySelector('.item-qty')?.value) || 0;
        const rate = parseFloat(row.querySelector('.item-rate')?.value) || 0;
        const taxPercent = parseFloat(row.querySelector('.item-tax-select')?.value) || 0;
        
        const amount = qty * rate;
        const tax = amount * (taxPercent / 100);
        const total = amount + tax;
        
        row.querySelector('.item-amount').textContent = '₹' + total.toFixed(2);
        
        subtotal += amount;
        taxTotal += tax;
    });
    
    document.getElementById('subtotal').textContent = '₹' + subtotal.toFixed(2);
    document.getElementById('taxTotal').textContent = '₹' + taxTotal.toFixed(2);
    document.getElementById('grandTotal').textContent = '₹' + (subtotal + taxTotal).toFixed(2);
}

function attachRowListeners(row) {
    row.querySelectorAll('.item-qty, .item-rate').forEach(input => {
        input.addEventListener('input', calculateTotals);
    });
    row.querySelector('.item-tax-select')?.addEventListener('change', calculateTotals);
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text || '';
    return div.innerHTML;
}

// Initialize
document.querySelectorAll('.item-row').forEach(attachRowListeners);
calculateTotals();
</script>

<?php require_once 'includes/footer.php'; ?>
