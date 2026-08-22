<?php
/**
 * PATRON - Edit Reminder
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Edit Reminder';
$userId = $_SESSION['user_id'];
$reminderId = (int)($_GET['id'] ?? 0);

if (!$reminderId) {
    setFlash('error', 'Reminder ID is required.');
    header('Location: reminders.php');
    exit;
}

// Get reminder
$reminder = dbFetchOne("SELECT * FROM reminders WHERE id = ? AND user_id = ?", [$reminderId, $userId]);

if (!$reminder) {
    setFlash('error', 'Reminder not found.');
    header('Location: reminders.php');
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $title = sanitize($_POST['title'] ?? '');
    $description = sanitize($_POST['description'] ?? '');
    $reminderDate = sanitize($_POST['reminder_date'] ?? '');
    $reminderTime = sanitize($_POST['reminder_time'] ?? '09:00');
    $priority = sanitize($_POST['priority'] ?? 'NORMAL');
    $clientId = (int)($_POST['client_id'] ?? 0) ?: null;
    $serviceRequestId = (int)($_POST['service_request_id'] ?? 0) ?: null;
    $personId = (int)($_POST['person_id'] ?? 0) ?: null;
    
    if ($title && $reminderDate) {
        dbExecute("UPDATE reminders SET 
            title = ?, description = ?, reminder_date = ?, reminder_time = ?, 
            priority = ?, client_id = ?, service_request_id = ?, person_id = ?,
            updated_at = NOW()
            WHERE id = ? AND user_id = ?", 
            [$title, $description ?: null, $reminderDate, $reminderTime, $priority, 
             $clientId, $serviceRequestId, $personId, $reminderId, $userId]);
        
        setFlash('success', 'Reminder updated successfully.');
        header('Location: reminders.php');
        exit;
    } else {
        setFlash('error', 'Title and date are required.');
    }
}

// Get clients for dropdown
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

// Get service requests for dropdown
$serviceRequests = dbFetchAll("
    SELECT sr.id, sr.request_number, sr.client_id, c.name as client_name, s.name as service_name
    FROM service_requests sr 
    JOIN clients c ON sr.client_id = c.id 
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL AND sr.status NOT IN ('COMPLETED','CANCELLED') 
    ORDER BY sr.created_at DESC LIMIT 100
") ?: [];

// Get persons for dropdown
$persons = dbFetchAll("SELECT id, full_name FROM persons_new WHERE deleted_at IS NULL ORDER BY full_name") ?: [];

require_once 'includes/header.php';
?>

<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900"><i class="fas fa-edit text-blue-600 mr-2"></i>Edit Reminder</h1>
            <p class="text-gray-500 text-sm">Update reminder details</p>
        </div>
        <a href="reminders.php" class="btn btn-secondary"><i class="fas fa-arrow-left mr-2"></i>Back</a>
    </div>
    
    <div class="card p-6">
        <form method="POST" class="space-y-4">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            
            <div>
                <label class="form-label">Title *</label>
                <input type="text" name="title" class="form-input w-full" 
                       value="<?= htmlspecialchars($reminder['title']) ?>" required>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="form-label">Date *</label>
                    <input type="date" name="reminder_date" class="form-input w-full" 
                           value="<?= $reminder['reminder_date'] ?>" required>
                </div>
                <div>
                    <label class="form-label">Time</label>
                    <input type="time" name="reminder_time" class="form-input w-full" 
                           value="<?= $reminder['reminder_time'] ?? '09:00' ?>">
                </div>
            </div>
            
            <div>
                <label class="form-label">Priority</label>
                <select name="priority" class="form-input w-full">
                    <option value="LOW" <?= $reminder['priority'] === 'LOW' ? 'selected' : '' ?>>Low</option>
                    <option value="NORMAL" <?= $reminder['priority'] === 'NORMAL' ? 'selected' : '' ?>>Normal</option>
                    <option value="HIGH" <?= $reminder['priority'] === 'HIGH' ? 'selected' : '' ?>>High</option>
                    <option value="URGENT" <?= $reminder['priority'] === 'URGENT' ? 'selected' : '' ?>>Urgent</option>
                </select>
            </div>
            
            <div>
                <label class="form-label">Description</label>
                <textarea name="description" class="form-input w-full" rows="3"><?= htmlspecialchars($reminder['description'] ?? '') ?></textarea>
            </div>
            
            <hr class="my-4">
            <p class="text-sm font-medium text-gray-700">Link to (Optional)</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="form-label">Client</label>
                    <select name="client_id" class="form-input w-full">
                        <option value="">-- None --</option>
                        <?php foreach ($clients as $c): ?>
                        <option value="<?= $c['id'] ?>" <?= $reminder['client_id'] == $c['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($c['name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Service Request</label>
                    <select name="service_request_id" class="form-input w-full">
                        <option value="">-- None --</option>
                        <?php foreach ($serviceRequests as $sr): ?>
                        <option value="<?= $sr['id'] ?>" <?= $reminder['service_request_id'] == $sr['id'] ? 'selected' : '' ?>>
                            <?= $sr['request_number'] ?> - <?= htmlspecialchars($sr['client_name']) ?> (<?= htmlspecialchars($sr['service_name']) ?>)
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="form-label">Person</label>
                    <select name="person_id" class="form-input w-full">
                        <option value="">-- None --</option>
                        <?php foreach ($persons as $p): ?>
                        <option value="<?= $p['id'] ?>" <?= $reminder['person_id'] == $p['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($p['full_name']) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div class="flex gap-3 pt-4 border-t">
                <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-save mr-2"></i>Update Reminder</button>
                <a href="reminders.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
