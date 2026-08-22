<?php
/**
 * PATRON - Create Invoice (Syncs to Zoho Books)
 * Create invoices in Patron and automatically push to Zoho
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
require_once 'includes/zoho_api.php';
startSession();
requireLogin();

if (!isAdmin() && !isManager()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Create Invoice';
$errors = [];
$success = false;

// Get client if pre-selected
$clientId = (int)($_GET['client_id'] ?? 0);
$client = null;
if ($clientId) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
}

// Get all clients for dropdown
$clients = dbFetchAll("
    SELECT id, name, entity_type, gstin, zoho_contact_id 
    FROM clients 
    WHERE deleted_at IS NULL 
    ORDER BY name
") ?: [];

// Get services for line items
$services = dbFetchAll("
    SELECT id, name, base_price, hsn_sac_code 
    FROM services 
    WHERE deleted_at IS NULL AND is_active = 1 
    ORDER BY name
") ?: [];

// Check Zoho connection
$zohoConnected = false;
try {
    $zohoSettings = dbFetchOne("SELECT setting_value FROM zoho_settings WHERE setting_key = 'access_token'");
    $zohoConnected = !empty($zohoSettings['setting_value']);
} catch (Exception $e) {
    // Table might not exist
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $clientId = (int)($_POST['client_id'] ?? 0);
        $invoiceDate = sanitize($_POST['invoice_date'] ?? date('Y-m-d'));
        $dueDate = sanitize($_POST['due_date'] ?? '');
        $referenceNumber = sanitize($_POST['reference_number'] ?? '');
        $notes = sanitize($_POST['notes'] ?? '');
        $terms = sanitize($_POST['terms'] ?? '');
        $pushToZoho = isset($_POST['push_to_zoho']) && $zohoConnected;
        
        // Line items
        $items = $_POST['items'] ?? [];
        
        if (!$clientId) $errors[] = 'Please select a client.';
        if (!$invoiceDate) $errors[] = 'Invoice date is required.';
        if (empty($items)) $errors[] = 'At least one line item is required.';
        
        // Validate items
        $validItems = [];
        $subtotal = 0;
        $taxTotal = 0;
        
        foreach ($items as $item) {
            if (empty($item['name']) || empty($item['quantity']) || empty($item['rate'])) {
                continue;
            }
            
            $qty = (float)$item['quantity'];
            $rate = (float)$item['rate'];
            $taxPct = (float)($item['tax_percentage'] ?? 0);
            
            $itemTotal = $qty * $rate;
            $taxAmt = $itemTotal * ($taxPct / 100);
            
            $validItems[] = [
                'service_id' => (int)($item['service_id'] ?? 0) ?: null,
                'name' => sanitize($item['name']),
                'description' => sanitize($item['description'] ?? ''),
                'hsn_sac_code' => sanitize($item['hsn_sac_code'] ?? ''),
                'quantity' => $qty,
                'unit' => sanitize($item['unit'] ?? 'Nos'),
                'rate' => $rate,
                'tax_percentage' => $taxPct,
                'tax_amount' => $taxAmt,
                'item_total' => $itemTotal + $taxAmt
            ];
            
            $subtotal += $itemTotal;
            $taxTotal += $taxAmt;
        }
        
        if (empty($validItems)) {
            $errors[] = 'No valid line items found.';
        }
        
        $total = $subtotal + $taxTotal;
        
        if (empty($errors)) {
            try {
                // Get client details
                $client = dbFetchOne("SELECT * FROM clients WHERE id = ?", [$clientId]);
                
                // Generate invoice number
                $lastInvoice = dbFetchOne("SELECT MAX(id) as max_id FROM invoices");
                $invoiceNumber = 'INV-' . date('Y') . '-' . str_pad(($lastInvoice['max_id'] ?? 0) + 1, 5, '0', STR_PAD_LEFT);
                
                $zohoInvoiceId = null;
                $zohoInvoiceNumber = null;
                
                // Push to Zoho if enabled
                if ($pushToZoho && $client['zoho_contact_id']) {
                    $zohoApi = new ZohoAPI();
                    
                    // Prepare Zoho invoice data
                    $zohoData = [
                        'customer_id' => $client['zoho_contact_id'],
                        'invoice_number' => $invoiceNumber,
                        'reference_number' => $referenceNumber,
                        'date' => $invoiceDate,
                        'due_date' => $dueDate ?: null,
                        'notes' => $notes,
                        'terms' => $terms,
                        'line_items' => []
                    ];
                    
                    foreach ($validItems as $item) {
                        $zohoData['line_items'][] = [
                            'name' => $item['name'],
                            'description' => $item['description'],
                            'hsn_or_sac' => $item['hsn_sac_code'],
                            'quantity' => $item['quantity'],
                            'rate' => $item['rate'],
                            'tax_percentage' => $item['tax_percentage']
                        ];
                    }
                    
                    $zohoResponse = $zohoApi->createInvoice($zohoData);
                    
                    if ($zohoResponse && isset($zohoResponse['invoice_id'])) {
                        $zohoInvoiceId = $zohoResponse['invoice_id'];
                        $zohoInvoiceNumber = $zohoResponse['invoice_number'] ?? $invoiceNumber;
                    }
                }
                
                // Insert invoice into local DB
                dbExecute("
                    INSERT INTO invoices 
                    (client_id, zoho_invoice_id, zoho_invoice_number, reference_number,
                     status, invoice_date, due_date, subtotal, tax_total, total,
                     balance_due, customer_notes, terms_conditions, synced_at, items_synced)
                    VALUES (?, ?, ?, ?, 'draft', ?, ?, ?, ?, ?, ?, ?, ?, NOW(), 1)
                ", [
                    $clientId, $zohoInvoiceId, $zohoInvoiceNumber ?: $invoiceNumber, $referenceNumber,
                    $invoiceDate, $dueDate ?: null, $subtotal, $taxTotal, $total,
                    $total, $notes, $terms
                ]);
                
                $invoiceId = dbLastInsertId();
                
                // Insert line items
                foreach ($validItems as $item) {
                    dbExecute("
                        INSERT INTO invoice_items 
                        (invoice_id, service_id, item_name, item_description, hsn_sac_code,
                         quantity, unit, rate, tax_percentage, tax_amount, item_total)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                    ", [
                        $invoiceId, $item['service_id'], $item['name'], $item['description'],
                        $item['hsn_sac_code'], $item['quantity'], $item['unit'], $item['rate'],
                        $item['tax_percentage'], $item['tax_amount'], $item['item_total']
                    ]);
                }
                
                setFlash('success', 'Invoice created successfully!' . ($zohoInvoiceId ? ' (Synced to Zoho)' : ''));
                header('Location: view_client.php?id=' . $clientId . '&tab=billing');
                exit;
                
            } catch (Exception $e) {
                $errors[] = 'Failed to create invoice: ' . $e->getMessage();
            }
        }
    }
}

require_once 'includes/header.php';
?>

<style>
.line-item { background: #f9fafb; border-radius: 0.75rem; padding: 1rem; margin-bottom: 0.5rem; }
.line-item:hover { background: #f3f4f6; }
.remove-item { color: #dc2626; cursor: pointer; }
.remove-item:hover { color: #b91c1c; }
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <a href="<?= $client ? 'view_client.php?id=' . $client['id'] . '&tab=billing' : 'billing_report.php' ?>" class="text-blue-600 text-sm mb-2 inline-block">
            <i class="fas fa-arrow-left mr-1"></i> Back
        </a>
        <h1 class="text-2xl font-bold"><i class="fas fa-file-invoice-dollar text-emerald-500 mr-2"></i>Create Invoice</h1>
    </div>
    <?php if ($zohoConnected): ?>
    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
        <i class="fas fa-check-circle mr-1"></i>Zoho Connected
    </span>
    <?php else: ?>
    <span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm">
        <i class="fas fa-exclamation-triangle mr-1"></i>Zoho Not Connected
    </span>
    <?php endif; ?>
</div>

<?php if (!empty($errors)): ?>
<div class="card p-4 mb-6 bg-red-50 border border-red-200">
    <ul class="text-sm text-red-700 space-y-1">
        <?php foreach ($errors as $error): ?>
        <li><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form method="POST" id="invoiceForm">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Form -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Client & Basic Info -->
            <div class="card p-6">
                <h3 class="font-bold text-gray-800 mb-4"><i class="fas fa-building mr-2 text-blue-500"></i>Invoice Details</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Client <span class="text-red-500">*</span></label>
                        <select name="client_id" class="form-input" required>
                            <option value="">Select Client...</option>
                            <?php foreach ($clients as $c): ?>
                            <option value="<?= $c['id'] ?>" <?= $clientId == $c['id'] ? 'selected' : '' ?>
                                    data-zoho="<?= $c['zoho_contact_id'] ? '1' : '0' ?>">
                                <?= htmlspecialchars($c['name']) ?> 
                                (<?= $c['entity_type'] ?>)
                                <?= $c['zoho_contact_id'] ? '✓' : '' ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Reference Number</label>
                        <input type="text" name="reference_number" class="form-input" placeholder="PO/Order reference">
                    </div>
                    <div>
                        <label class="form-label">Invoice Date <span class="text-red-500">*</span></label>
                        <input type="date" name="invoice_date" class="form-input" value="<?= date('Y-m-d') ?>" required>
                    </div>
                    <div>
                        <label class="form-label">Due Date</label>
                        <input type="date" name="due_date" class="form-input" value="<?= date('Y-m-d', strtotime('+30 days')) ?>">
                    </div>
                </div>
            </div>
            
            <!-- Line Items -->
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-gray-800"><i class="fas fa-list mr-2 text-purple-500"></i>Line Items</h3>
                    <button type="button" onclick="addLineItem()" class="btn btn-secondary btn-sm">
                        <i class="fas fa-plus mr-1"></i>Add Item
                    </button>
                </div>
                
                <div id="lineItems">
                    <!-- Line items will be added here -->
                </div>
                
                <!-- Totals -->
                <div class="mt-6 pt-4 border-t">
                    <div class="flex justify-end">
                        <div class="w-64 space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Subtotal:</span>
                                <span id="subtotal" class="font-medium">₹0.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Tax:</span>
                                <span id="taxTotal" class="font-medium">₹0.00</span>
                            </div>
                            <div class="flex justify-between text-lg font-bold border-t pt-2">
                                <span>Total:</span>
                                <span id="grandTotal" class="text-emerald-600">₹0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notes & Terms -->
            <div class="card p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Customer Notes</label>
                        <textarea name="notes" class="form-input" rows="3" placeholder="Notes visible to customer..."></textarea>
                    </div>
                    <div>
                        <label class="form-label">Terms & Conditions</label>
                        <textarea name="terms" class="form-input" rows="3" placeholder="Payment terms..."></textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Add Service -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-bolt mr-2 text-amber-500"></i>Quick Add Service</h4>
                <select id="quickAddService" class="form-input mb-2" onchange="quickAddService(this)">
                    <option value="">Select service to add...</option>
                    <?php foreach ($services as $s): ?>
                    <option value="<?= $s['id'] ?>" 
                            data-name="<?= htmlspecialchars($s['name']) ?>"
                            data-price="<?= $s['base_price'] ?? 0 ?>"
                            data-hsn="<?= htmlspecialchars($s['hsn_sac_code'] ?? '') ?>">
                        <?= htmlspecialchars($s['name']) ?> - ₹<?= number_format($s['base_price'] ?? 0) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Zoho Sync -->
            <?php if ($zohoConnected): ?>
            <div class="card p-4 bg-green-50">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="push_to_zoho" value="1" checked class="form-checkbox h-5 w-5 text-green-600">
                    <div>
                        <span class="font-medium text-green-800">Push to Zoho Books</span>
                        <p class="text-xs text-green-600">Invoice will be created in Zoho</p>
                    </div>
                </label>
            </div>
            <?php endif; ?>
            
            <!-- Submit -->
            <div class="card p-4">
                <button type="submit" class="btn btn-primary w-full mb-2">
                    <i class="fas fa-save mr-2"></i>Create Invoice
                </button>
                <a href="<?= $client ? 'view_client.php?id=' . $client['id'] : 'billing_report.php' ?>" class="btn btn-secondary w-full">
                    Cancel
                </a>
            </div>
            
            <!-- Help -->
            <div class="card p-4 bg-blue-50">
                <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-lightbulb mr-2"></i>Tips</h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Clients with ✓ are linked to Zoho</li>
                    <li>• GST will be calculated automatically</li>
                    <li>• Due date defaults to 30 days</li>
                </ul>
            </div>
        </div>
    </div>
</form>

<script>
let itemIndex = 0;

function addLineItem(serviceId = '', name = '', description = '', hsn = '', qty = 1, rate = 0, tax = 18) {
    const html = `
        <div class="line-item" id="item-${itemIndex}">
            <div class="flex justify-between items-start mb-2">
                <span class="text-xs text-gray-500">Item #${itemIndex + 1}</span>
                <button type="button" onclick="removeItem(${itemIndex})" class="remove-item">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <input type="hidden" name="items[${itemIndex}][service_id]" value="${serviceId}">
                <div class="col-span-12 md:col-span-4">
                    <input type="text" name="items[${itemIndex}][name]" class="form-input text-sm" 
                           placeholder="Item name *" value="${name}" required>
                </div>
                <div class="col-span-6 md:col-span-2">
                    <input type="text" name="items[${itemIndex}][hsn_sac_code]" class="form-input text-sm" 
                           placeholder="HSN/SAC" value="${hsn}">
                </div>
                <div class="col-span-3 md:col-span-1">
                    <input type="number" name="items[${itemIndex}][quantity]" class="form-input text-sm text-center" 
                           placeholder="Qty" value="${qty}" min="0.01" step="0.01" onchange="calculateTotals()">
                </div>
                <div class="col-span-3 md:col-span-2">
                    <input type="number" name="items[${itemIndex}][rate]" class="form-input text-sm text-right" 
                           placeholder="Rate" value="${rate}" min="0" step="0.01" onchange="calculateTotals()">
                </div>
                <div class="col-span-6 md:col-span-1">
                    <input type="number" name="items[${itemIndex}][tax_percentage]" class="form-input text-sm text-center" 
                           placeholder="Tax%" value="${tax}" min="0" max="100" onchange="calculateTotals()">
                </div>
                <div class="col-span-6 md:col-span-2 text-right">
                    <span class="item-total font-medium text-gray-700" id="total-${itemIndex}">₹0.00</span>
                </div>
            </div>
            <div class="mt-2">
                <input type="text" name="items[${itemIndex}][description]" class="form-input text-sm" 
                       placeholder="Description (optional)" value="${description}">
            </div>
        </div>
    `;
    
    document.getElementById('lineItems').insertAdjacentHTML('beforeend', html);
    itemIndex++;
    calculateTotals();
}

function removeItem(index) {
    const item = document.getElementById('item-' + index);
    if (item) {
        item.remove();
        calculateTotals();
    }
}

function quickAddService(select) {
    if (!select.value) return;
    
    const option = select.options[select.selectedIndex];
    const name = option.dataset.name;
    const price = parseFloat(option.dataset.price) || 0;
    const hsn = option.dataset.hsn || '';
    
    addLineItem(select.value, name, '', hsn, 1, price, 18);
    select.value = '';
}

function calculateTotals() {
    let subtotal = 0;
    let taxTotal = 0;
    
    document.querySelectorAll('.line-item').forEach(item => {
        const qty = parseFloat(item.querySelector('[name*="[quantity]"]').value) || 0;
        const rate = parseFloat(item.querySelector('[name*="[rate]"]').value) || 0;
        const taxPct = parseFloat(item.querySelector('[name*="[tax_percentage]"]').value) || 0;
        
        const itemSubtotal = qty * rate;
        const itemTax = itemSubtotal * (taxPct / 100);
        const itemTotal = itemSubtotal + itemTax;
        
        // Find the total display for this item
        const totalSpan = item.querySelector('.item-total');
        if (totalSpan) {
            totalSpan.textContent = '₹' + itemTotal.toLocaleString('en-IN', {minimumFractionDigits: 2});
        }
        
        subtotal += itemSubtotal;
        taxTotal += itemTax;
    });
    
    document.getElementById('subtotal').textContent = '₹' + subtotal.toLocaleString('en-IN', {minimumFractionDigits: 2});
    document.getElementById('taxTotal').textContent = '₹' + taxTotal.toLocaleString('en-IN', {minimumFractionDigits: 2});
    document.getElementById('grandTotal').textContent = '₹' + (subtotal + taxTotal).toLocaleString('en-IN', {minimumFractionDigits: 2});
}

// Add first line item on load
document.addEventListener('DOMContentLoaded', function() {
    addLineItem();
});
</script>

<?php require_once 'includes/footer.php'; ?>
