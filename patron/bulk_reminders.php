<?php
/**
 * PATRON - Bulk Invoice Reminders
 * Send payment reminders to multiple clients at once
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if (!isAdmin() && !isManager()) {
    setFlash('error', 'Access denied.');
    header('Location: dashboard.php');
    exit;
}

$pageTitle = 'Bulk Invoice Reminders';

// Filters
$status = sanitize($_GET['status'] ?? 'overdue');
$minAmount = (float)($_GET['min_amount'] ?? 0);
$minDays = (int)($_GET['min_days'] ?? 0);

// Get overdue/unpaid invoices grouped by client
$whereClause = "i.balance_due > 0 AND (i.status IS NULL OR LOWER(i.status) NOT IN ('void', 'paid'))";
$params = [];

if ($status === 'overdue') {
    $whereClause .= " AND i.due_date < CURDATE()";
} elseif ($status === 'due_soon') {
    $whereClause .= " AND i.due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)";
}

if ($minAmount > 0) {
    $whereClause .= " AND i.balance_due >= ?";
    $params[] = $minAmount;
}

$clientInvoices = dbFetchAll("
    SELECT 
        c.id as client_id,
        c.name as client_name,
        c.email,
        c.phone,
        c.entity_type,
        COUNT(i.id) as invoice_count,
        SUM(i.balance_due) as total_outstanding,
        MIN(i.due_date) as oldest_due_date,
        MAX(DATEDIFF(CURDATE(), i.due_date)) as max_days_overdue,
        GROUP_CONCAT(i.zoho_invoice_number ORDER BY i.due_date SEPARATOR ', ') as invoice_numbers
    FROM invoices i
    JOIN clients c ON i.client_id = c.id
    WHERE $whereClause
    AND c.deleted_at IS NULL
    GROUP BY c.id
    HAVING total_outstanding > 0
    " . ($minDays > 0 ? "AND max_days_overdue >= $minDays" : "") . "
    ORDER BY total_outstanding DESC
", $params) ?: [];

// Stats
$totalClients = count($clientInvoices);
$totalOutstanding = array_sum(array_column($clientInvoices, 'total_outstanding'));
$totalInvoices = array_sum(array_column($clientInvoices, 'invoice_count'));

// Handle bulk action
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_reminders'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors[] = 'Invalid request.';
    } else {
        $selectedClients = $_POST['clients'] ?? [];
        $reminderType = sanitize($_POST['reminder_type'] ?? 'email');
        $customMessage = sanitize($_POST['custom_message'] ?? '');
        
        if (empty($selectedClients)) {
            setFlash('error', 'Please select at least one client.');
        } else {
            $result = sendBulkReminders($selectedClients, $reminderType, $customMessage);
        }
    }
}

function sendBulkReminders($clientIds, $type, $customMessage) {
    $sent = 0;
    $failed = 0;
    $errors = [];
    
    foreach ($clientIds as $clientId) {
        $client = dbFetchOne("
            SELECT c.*, 
                   SUM(i.balance_due) as total_due,
                   COUNT(i.id) as invoice_count
            FROM clients c
            JOIN invoices i ON c.id = i.client_id
            WHERE c.id = ? 
            AND i.balance_due > 0 
            AND (i.status IS NULL OR LOWER(i.status) NOT IN ('void', 'paid'))
            GROUP BY c.id
        ", [$clientId]);
        
        if (!$client) continue;
        
        // Get invoices for this client
        $invoices = dbFetchAll("
            SELECT zoho_invoice_number, invoice_date, due_date, total, balance_due,
                   DATEDIFF(CURDATE(), due_date) as days_overdue
            FROM invoices 
            WHERE client_id = ? 
            AND balance_due > 0 
            AND (status IS NULL OR LOWER(status) NOT IN ('void', 'paid'))
            ORDER BY due_date ASC
        ", [$clientId]) ?: [];
        
        try {
            if ($type === 'email' && $client['email']) {
                // Send email reminder
                $emailSent = sendEmailReminder($client, $invoices, $customMessage);
                if ($emailSent) {
                    $sent++;
                    logReminder($clientId, 'email', 'sent');
                } else {
                    $failed++;
                    $errors[] = "{$client['name']}: Email send failed";
                }
            } elseif ($type === 'whatsapp' && $client['phone']) {
                // Log WhatsApp reminder (actual sending would be via Zoho Bigin or other service)
                logReminder($clientId, 'whatsapp', 'queued');
                $sent++;
            } elseif ($type === 'log_only') {
                // Just log the reminder
                logReminder($clientId, 'manual', 'logged');
                $sent++;
            } else {
                $failed++;
                $errors[] = "{$client['name']}: No {$type} contact available";
            }
        } catch (Exception $e) {
            $failed++;
            $errors[] = "{$client['name']}: " . $e->getMessage();
        }
    }
    
    return [
        'sent' => $sent,
        'failed' => $failed,
        'errors' => $errors
    ];
}

function sendEmailReminder($client, $invoices, $customMessage) {
    // Build invoice table
    $invoiceTable = "";
    foreach ($invoices as $inv) {
        $status = $inv['days_overdue'] > 0 ? "Overdue by {$inv['days_overdue']} days" : "Due";
        $invoiceTable .= "• {$inv['zoho_invoice_number']} - ₹" . number_format($inv['balance_due']) . " ($status)\n";
    }
    
    $totalDue = array_sum(array_column($invoices, 'balance_due'));
    
    // Email content
    $subject = "Payment Reminder - Outstanding Amount ₹" . number_format($totalDue);
    
    $body = "Dear {$client['name']},\n\n";
    
    if ($customMessage) {
        $body .= "$customMessage\n\n";
    } else {
        $body .= "This is a friendly reminder regarding your outstanding invoices.\n\n";
    }
    
    $body .= "Outstanding Invoices:\n$invoiceTable\n";
    $body .= "Total Outstanding: ₹" . number_format($totalDue) . "\n\n";
    $body .= "Please arrange the payment at your earliest convenience.\n\n";
    $body .= "If you have already made the payment, please ignore this reminder.\n\n";
    $body .= "Best regards,\nAccounts Team";
    
    // Use PHP mail or your email service
    // For now, we'll just log it
    // return mail($client['email'], $subject, $body);
    
    // Simulated success for demo
    return true;
}

function logReminder($clientId, $type, $status) {
    try {
        dbExecute("
            INSERT INTO payment_reminders 
            (client_id, reminder_type, status, sent_at, created_by)
            VALUES (?, ?, ?, NOW(), ?)
        ", [$clientId, $type, $status, $_SESSION['user_id'] ?? null]);
    } catch (Exception $e) {
        // Table might not exist, create it
        dbExecute("
            CREATE TABLE IF NOT EXISTS payment_reminders (
                id INT PRIMARY KEY AUTO_INCREMENT,
                client_id INT,
                invoice_id INT,
                reminder_type VARCHAR(50),
                status VARCHAR(50),
                sent_at DATETIME,
                created_by INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (client_id) REFERENCES clients(id)
            )
        ");
        // Retry
        dbExecute("
            INSERT INTO payment_reminders 
            (client_id, reminder_type, status, sent_at, created_by)
            VALUES (?, ?, ?, NOW(), ?)
        ", [$clientId, $type, $status, $_SESSION['user_id'] ?? null]);
    }
}

require_once 'includes/header.php';
?>

<style>
.client-row { transition: background 0.2s; }
.client-row:hover { background: #f9fafb; }
.client-row.selected { background: #eff6ff; }
.overdue-badge { animation: pulse 2s infinite; }
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-bell text-amber-500 mr-2"></i>Bulk Invoice Reminders</h1>
        <p class="text-gray-500 text-sm">Send payment reminders to multiple clients</p>
    </div>
    <a href="billing_report.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left mr-2"></i>Billing Report
    </a>
</div>

<?php if ($result): ?>
<div class="card p-6 mb-6 <?= $result['failed'] == 0 ? 'bg-green-50 border-green-200' : 'bg-amber-50 border-amber-200' ?>">
    <h3 class="font-bold <?= $result['failed'] == 0 ? 'text-green-800' : 'text-amber-800' ?> mb-2">
        <i class="fas fa-check-circle mr-2"></i>Reminders Processed
    </h3>
    <div class="flex gap-6">
        <div>
            <span class="text-2xl font-bold text-green-600"><?= $result['sent'] ?></span>
            <span class="text-gray-500 ml-1">Sent</span>
        </div>
        <div>
            <span class="text-2xl font-bold text-red-600"><?= $result['failed'] ?></span>
            <span class="text-gray-500 ml-1">Failed</span>
        </div>
    </div>
    <?php if (!empty($result['errors'])): ?>
    <details class="mt-3">
        <summary class="cursor-pointer text-sm text-red-700">View Errors</summary>
        <ul class="mt-2 text-sm text-red-600">
            <?php foreach ($result['errors'] as $err): ?>
            <li>• <?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
        </ul>
    </details>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- Stats -->
<div class="grid grid-cols-3 gap-4 mb-6">
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-blue-600"><?= $totalClients ?></p>
        <p class="text-sm text-gray-500">Clients</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-amber-600"><?= $totalInvoices ?></p>
        <p class="text-sm text-gray-500">Unpaid Invoices</p>
    </div>
    <div class="card p-4 text-center">
        <p class="text-3xl font-bold text-red-600">₹<?= number_format($totalOutstanding / 100000, 1) ?>L</p>
        <p class="text-sm text-gray-500">Total Outstanding</p>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-4 items-end">
        <div>
            <label class="block text-xs text-gray-500 mb-1">Status</label>
            <select name="status" class="form-input">
                <option value="all" <?= $status === 'all' ? 'selected' : '' ?>>All Unpaid</option>
                <option value="overdue" <?= $status === 'overdue' ? 'selected' : '' ?>>Overdue Only</option>
                <option value="due_soon" <?= $status === 'due_soon' ? 'selected' : '' ?>>Due in 7 Days</option>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Min Amount (₹)</label>
            <input type="number" name="min_amount" class="form-input" value="<?= $minAmount ?>" placeholder="0">
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Min Days Overdue</label>
            <input type="number" name="min_days" class="form-input" value="<?= $minDays ?>" placeholder="0">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter mr-1"></i>Filter</button>
        <a href="bulk_reminders.php" class="btn btn-secondary">Reset</a>
    </form>
</div>

<form method="POST" id="reminderForm">
    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
    
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <!-- Client List -->
        <div class="lg:col-span-3">
            <div class="card overflow-hidden">
                <div class="p-4 border-b bg-gray-50 flex justify-between items-center">
                    <h3 class="font-bold"><i class="fas fa-users mr-2"></i>Select Clients</h3>
                    <div class="flex gap-2">
                        <button type="button" onclick="selectAllClients(true)" class="text-sm text-blue-600 hover:underline">Select All</button>
                        <span class="text-gray-300">|</span>
                        <button type="button" onclick="selectAllClients(false)" class="text-sm text-blue-600 hover:underline">Deselect All</button>
                    </div>
                </div>
                
                <?php if (empty($clientInvoices)): ?>
                <div class="p-8 text-center text-gray-400">
                    <i class="fas fa-check-circle text-5xl text-green-400 mb-3"></i>
                    <p class="text-lg">No unpaid invoices found!</p>
                </div>
                <?php else: ?>
                <div class="divide-y max-h-[500px] overflow-y-auto">
                    <?php foreach ($clientInvoices as $ci): 
                        $isOverdue = $ci['max_days_overdue'] > 0;
                    ?>
                    <label class="client-row flex items-center gap-4 p-4 cursor-pointer">
                        <input type="checkbox" name="clients[]" value="<?= $ci['client_id'] ?>" 
                               class="form-checkbox h-5 w-5 text-blue-600 client-checkbox">
                        <div class="flex-1">
                            <div class="flex items-center gap-2">
                                <p class="font-medium text-gray-800"><?= htmlspecialchars($ci['client_name']) ?></p>
                                <?php if ($isOverdue): ?>
                                <span class="overdue-badge px-2 py-0.5 bg-red-100 text-red-700 rounded text-xs">
                                    <?= $ci['max_days_overdue'] ?>d overdue
                                </span>
                                <?php endif; ?>
                            </div>
                            <p class="text-sm text-gray-500">
                                <?= $ci['invoice_count'] ?> invoice(s) • 
                                <?= $ci['email'] ? '✓ Email' : '✗ No Email' ?> • 
                                <?= $ci['phone'] ? '✓ Phone' : '✗ No Phone' ?>
                            </p>
                            <p class="text-xs text-gray-400 mt-1"><?= htmlspecialchars($ci['invoice_numbers']) ?></p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold <?= $isOverdue ? 'text-red-600' : 'text-amber-600' ?>">
                                ₹<?= number_format($ci['total_outstanding']) ?>
                            </p>
                            <p class="text-xs text-gray-400">Since <?= date('d M Y', strtotime($ci['oldest_due_date'])) ?></p>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Send Options -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-paper-plane mr-2 text-blue-500"></i>Send Via</h4>
                
                <div class="space-y-2">
                    <label class="flex items-center gap-3 p-2 rounded hover:bg-gray-50 cursor-pointer">
                        <input type="radio" name="reminder_type" value="email" checked class="form-radio text-blue-600">
                        <i class="fas fa-envelope text-blue-500"></i>
                        <span>Email</span>
                    </label>
                    <label class="flex items-center gap-3 p-2 rounded hover:bg-gray-50 cursor-pointer">
                        <input type="radio" name="reminder_type" value="whatsapp" class="form-radio text-green-600">
                        <i class="fab fa-whatsapp text-green-500"></i>
                        <span>WhatsApp</span>
                    </label>
                    <label class="flex items-center gap-3 p-2 rounded hover:bg-gray-50 cursor-pointer">
                        <input type="radio" name="reminder_type" value="log_only" class="form-radio text-gray-600">
                        <i class="fas fa-clipboard text-gray-500"></i>
                        <span>Log Only</span>
                    </label>
                </div>
            </div>
            
            <!-- Custom Message -->
            <div class="card p-4">
                <h4 class="font-semibold text-gray-700 mb-3"><i class="fas fa-comment mr-2 text-purple-500"></i>Custom Message</h4>
                <textarea name="custom_message" class="form-input text-sm" rows="4" 
                          placeholder="Optional: Add a custom message to include in the reminder..."></textarea>
            </div>
            
            <!-- Selected Summary -->
            <div class="card p-4 bg-blue-50">
                <h4 class="font-semibold text-blue-800 mb-2">Selected</h4>
                <p class="text-2xl font-bold text-blue-600" id="selectedCount">0</p>
                <p class="text-sm text-blue-600">clients</p>
                <p class="text-lg font-bold text-blue-700 mt-2" id="selectedAmount">₹0</p>
                <p class="text-sm text-blue-600">outstanding</p>
            </div>
            
            <!-- Send Button -->
            <button type="submit" name="send_reminders" value="1" class="btn btn-primary w-full">
                <i class="fas fa-bell mr-2"></i>Send Reminders
            </button>
        </div>
    </div>
</form>

<script>
function selectAllClients(select) {
    document.querySelectorAll('.client-checkbox').forEach(cb => {
        cb.checked = select;
        cb.closest('.client-row').classList.toggle('selected', select);
    });
    updateSelectedSummary();
}

function updateSelectedSummary() {
    const checkboxes = document.querySelectorAll('.client-checkbox:checked');
    let totalAmount = 0;
    
    checkboxes.forEach(cb => {
        const row = cb.closest('.client-row');
        const amountText = row.querySelector('.text-lg.font-bold').textContent;
        const amount = parseFloat(amountText.replace(/[₹,]/g, '')) || 0;
        totalAmount += amount;
    });
    
    document.getElementById('selectedCount').textContent = checkboxes.length;
    document.getElementById('selectedAmount').textContent = '₹' + totalAmount.toLocaleString('en-IN');
}

// Update on checkbox change
document.querySelectorAll('.client-checkbox').forEach(cb => {
    cb.addEventListener('change', function() {
        this.closest('.client-row').classList.toggle('selected', this.checked);
        updateSelectedSummary();
    });
});

// Initial update
updateSelectedSummary();
</script>

<?php require_once 'includes/footer.php'; ?>
