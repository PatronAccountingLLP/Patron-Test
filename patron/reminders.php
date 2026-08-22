<?php
/**
 * PATRON - Reminders Dashboard
 * Personal reminder management system
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'My Reminders';
$userId = $_SESSION['user_id'];

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    $reminderId = (int)($_POST['reminder_id'] ?? 0);
    
    if ($action === 'complete' && $reminderId) {
        dbExecute("UPDATE reminders SET status = 'COMPLETED', completed_at = NOW() WHERE id = ? AND user_id = ?", [$reminderId, $userId]);
        setFlash('success', 'Reminder marked as completed.');
    }
    
    if ($action === 'dismiss' && $reminderId) {
        dbExecute("UPDATE reminders SET status = 'DISMISSED' WHERE id = ? AND user_id = ?", [$reminderId, $userId]);
        setFlash('success', 'Reminder dismissed.');
    }
    
    if ($action === 'snooze' && $reminderId) {
        $snoozeDays = (int)($_POST['snooze_days'] ?? 1);
        dbExecute("UPDATE reminders SET status = 'SNOOZED', snoozed_until = DATE_ADD(CURDATE(), INTERVAL ? DAY), reminder_date = DATE_ADD(CURDATE(), INTERVAL ? DAY) WHERE id = ? AND user_id = ?", 
            [$snoozeDays, $snoozeDays, $reminderId, $userId]);
        setFlash('success', "Reminder snoozed for $snoozeDays day(s).");
    }
    
    if ($action === 'delete' && $reminderId) {
        dbExecute("DELETE FROM reminders WHERE id = ? AND user_id = ?", [$reminderId, $userId]);
        setFlash('success', 'Reminder deleted.');
    }
    
    if ($action === 'add_quick') {
        $title = sanitize($_POST['title'] ?? '');
        $reminderDate = sanitize($_POST['reminder_date'] ?? '');
        $reminderTime = sanitize($_POST['reminder_time'] ?? '09:00');
        $priority = sanitize($_POST['priority'] ?? 'NORMAL');
        $clientId = (int)($_POST['client_id'] ?? 0) ?: null;
        $serviceRequestId = (int)($_POST['service_request_id'] ?? 0) ?: null;
        $description = sanitize($_POST['description'] ?? '');
        
        if ($title && $reminderDate) {
            dbExecute("INSERT INTO reminders (user_id, title, description, reminder_date, reminder_time, priority, client_id, service_request_id, created_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())", 
                [$userId, $title, $description ?: null, $reminderDate, $reminderTime, $priority, $clientId, $serviceRequestId]);
            setFlash('success', 'Reminder added successfully.');
        }
    }
    
    header('Location: reminders.php' . (isset($_GET['view']) ? '?view=' . $_GET['view'] : ''));
    exit;
}

// Filters
$view = sanitize($_GET['view'] ?? 'upcoming');
$search = sanitize($_GET['q'] ?? '');
$clientFilter = (int)($_GET['client'] ?? 0);

// Build query based on view
$where = ["r.user_id = ?"];
$params = [$userId];

switch ($view) {
    case 'today':
        $where[] = "r.reminder_date = CURDATE() AND r.status = 'PENDING'";
        break;
    case 'overdue':
        $where[] = "r.reminder_date < CURDATE() AND r.status = 'PENDING'";
        break;
    case 'upcoming':
        $where[] = "r.reminder_date >= CURDATE() AND r.status = 'PENDING'";
        break;
    case 'completed':
        $where[] = "r.status = 'COMPLETED'";
        break;
    case 'all':
        // No additional filter
        break;
    default:
        $where[] = "r.reminder_date >= CURDATE() AND r.status = 'PENDING'";
}

if ($search) {
    $where[] = "(r.title LIKE ? OR r.description LIKE ? OR c.name LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($clientFilter) {
    $where[] = "r.client_id = ?";
    $params[] = $clientFilter;
}

$whereClause = implode(' AND ', $where);

// Get reminders
$reminders = dbFetchAll("
    SELECT r.*, 
           c.name as client_name,
           sr.request_number,
           s.name as service_name,
           t.title as task_title,
           p.full_name as person_name,
           DATEDIFF(r.reminder_date, CURDATE()) as days_until
    FROM reminders r
    LEFT JOIN clients c ON r.client_id = c.id
    LEFT JOIN service_requests sr ON r.service_request_id = sr.id
    LEFT JOIN services s ON sr.service_id = s.id
    LEFT JOIN tasks t ON r.task_id = t.id
    LEFT JOIN persons_new p ON r.person_id = p.id
    WHERE $whereClause
    ORDER BY 
        CASE WHEN r.status = 'PENDING' AND r.reminder_date < CURDATE() THEN 0
             WHEN r.status = 'PENDING' AND r.reminder_date = CURDATE() THEN 1
             WHEN r.status = 'PENDING' THEN 2
             ELSE 3 END,
        r.reminder_date ASC,
        r.reminder_time ASC
", $params) ?: [];

// Get stats
$stats = dbFetchOne("
    SELECT 
        SUM(CASE WHEN reminder_date < CURDATE() AND status = 'PENDING' THEN 1 ELSE 0 END) as overdue,
        SUM(CASE WHEN reminder_date = CURDATE() AND status = 'PENDING' THEN 1 ELSE 0 END) as today,
        SUM(CASE WHEN reminder_date > CURDATE() AND reminder_date <= DATE_ADD(CURDATE(), INTERVAL 7 DAY) AND status = 'PENDING' THEN 1 ELSE 0 END) as this_week,
        SUM(CASE WHEN status = 'PENDING' THEN 1 ELSE 0 END) as pending,
        SUM(CASE WHEN status = 'COMPLETED' THEN 1 ELSE 0 END) as completed
    FROM reminders WHERE user_id = ?
", [$userId]);

// Get clients for dropdown
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

// Get active service requests for dropdown
$serviceRequests = dbFetchAll("
    SELECT sr.id, sr.request_number, sr.client_id, c.name as client_name, s.name as service_name
    FROM service_requests sr
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL AND sr.status NOT IN ('COMPLETED', 'DONE', 'CANCELLED')
    ORDER BY sr.created_at DESC
    LIMIT 100
") ?: [];

require_once 'includes/header.php';
?>

<style>
.stat-card{transition:all .2s;cursor:pointer}.stat-card:hover{transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,.1)}
.reminder-card{transition:all .2s;border-left:4px solid #E5E7EB}
.reminder-card:hover{box-shadow:0 4px 12px rgba(0,0,0,.1)}
.reminder-card.priority-urgent{border-left-color:#DC2626}
.reminder-card.priority-high{border-left-color:#F59E0B}
.reminder-card.priority-normal{border-left-color:#3B82F6}
.reminder-card.priority-low{border-left-color:#6B7280}
.reminder-card.overdue{background:#FEF2F2}
.reminder-card.today{background:#FEF3C7}
.badge-overdue{background:#DC2626;color:#fff}
.badge-today{background:#F59E0B;color:#fff}
.badge-upcoming{background:#3B82F6;color:#fff}
.badge-completed{background:#10B981;color:#fff}
.view-tab{padding:0.5rem 1rem;border-radius:0.5rem;font-weight:500;transition:all .2s}
.view-tab:hover{background:#F3F4F6}.view-tab.active{background:#1F2937;color:#fff}
.modal{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:50}
.modal.show{display:flex;align-items:center;justify-content:center}
.modal-box{background:#fff;border-radius:1rem;max-width:500px;width:95%;max-height:90vh;overflow-y:auto}
</style>

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900"><i class="fas fa-bell text-amber-500 mr-2"></i>My Reminders</h1>
        <p class="text-gray-500 text-sm">Stay on top of your tasks and follow-ups</p>
    </div>
    <button onclick="document.getElementById('addModal').classList.add('show')" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>Add Reminder
    </button>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-6">
    <a href="?view=overdue" class="stat-card card p-4 text-center <?= $view === 'overdue' ? 'ring-2 ring-red-500' : '' ?>">
        <p class="text-2xl font-bold text-red-600"><?= $stats['overdue'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Overdue</p>
    </a>
    <a href="?view=today" class="stat-card card p-4 text-center <?= $view === 'today' ? 'ring-2 ring-amber-500' : '' ?>">
        <p class="text-2xl font-bold text-amber-600"><?= $stats['today'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Today</p>
    </a>
    <a href="?view=upcoming" class="stat-card card p-4 text-center <?= $view === 'upcoming' ? 'ring-2 ring-blue-500' : '' ?>">
        <p class="text-2xl font-bold text-blue-600"><?= $stats['this_week'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">This Week</p>
    </a>
    <a href="?view=all" class="stat-card card p-4 text-center <?= $view === 'all' ? 'ring-2 ring-gray-500' : '' ?>">
        <p class="text-2xl font-bold text-gray-600"><?= $stats['pending'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">All Pending</p>
    </a>
    <a href="?view=completed" class="stat-card card p-4 text-center <?= $view === 'completed' ? 'ring-2 ring-green-500' : '' ?>">
        <p class="text-2xl font-bold text-green-600"><?= $stats['completed'] ?? 0 ?></p>
        <p class="text-xs text-gray-500">Completed</p>
    </a>
</div>

<!-- Search -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap gap-3 items-end">
        <input type="hidden" name="view" value="<?= htmlspecialchars($view) ?>">
        <div class="flex-1 min-w-[200px]">
            <input type="text" name="q" class="form-input" placeholder="Search reminders..." value="<?= htmlspecialchars($search) ?>">
        </div>
        <div>
            <select name="client" class="form-input">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $clientFilter == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        <?php if ($search || $clientFilter): ?>
        <a href="?view=<?= $view ?>" class="btn btn-secondary"><i class="fas fa-times"></i></a>
        <?php endif; ?>
    </form>
</div>

<!-- Reminders List -->
<div class="space-y-3">
    <?php if (empty($reminders)): ?>
    <div class="card p-8 text-center">
        <i class="fas fa-bell-slash text-4xl text-gray-300 mb-3"></i>
        <p class="text-gray-500">No reminders found</p>
        <button onclick="document.getElementById('addModal').classList.add('show')" class="text-blue-600 hover:underline mt-2">
            <i class="fas fa-plus mr-1"></i>Add your first reminder
        </button>
    </div>
    <?php else: ?>
    <?php foreach ($reminders as $r): 
        $days = $r['days_until'];
        $isOverdue = $days < 0 && $r['status'] === 'PENDING';
        $isToday = $days == 0 && $r['status'] === 'PENDING';
        $priorityClass = 'priority-' . strtolower($r['priority']);
        $cardClass = $isOverdue ? 'overdue' : ($isToday ? 'today' : '');
    ?>
    <div class="reminder-card card p-4 <?= $priorityClass ?> <?= $cardClass ?>">
        <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
                <div class="flex items-center gap-2 mb-1">
                    <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($r['title']) ?></h3>
                    <?php if ($r['priority'] !== 'NORMAL'): ?>
                    <span class="px-2 py-0.5 rounded text-xs font-medium 
                        <?= $r['priority'] === 'URGENT' ? 'bg-red-100 text-red-700' : 
                           ($r['priority'] === 'HIGH' ? 'bg-amber-100 text-amber-700' : 'bg-gray-100 text-gray-600') ?>">
                        <?= $r['priority'] ?>
                    </span>
                    <?php endif; ?>
                    <?php if ($r['status'] === 'COMPLETED'): ?>
                    <span class="px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-700">COMPLETED</span>
                    <?php endif; ?>
                </div>
                
                <?php if ($r['description']): ?>
                <p class="text-sm text-gray-600 mb-2"><?= htmlspecialchars($r['description']) ?></p>
                <?php endif; ?>
                
                <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500">
                    <span class="flex items-center gap-1">
                        <i class="fas fa-calendar"></i>
                        <?= date('d M Y', strtotime($r['reminder_date'])) ?>
                        <?php if ($r['reminder_time']): ?>
                        at <?= date('h:i A', strtotime($r['reminder_time'])) ?>
                        <?php endif; ?>
                    </span>
                    
                    <?php if ($r['client_name']): ?>
                    <a href="view_client.php?id=<?= $r['client_id'] ?>" class="flex items-center gap-1 text-blue-600 hover:underline">
                        <i class="fas fa-building"></i><?= htmlspecialchars($r['client_name']) ?>
                    </a>
                    <?php endif; ?>
                    
                    <?php if ($r['request_number']): ?>
                    <a href="view_request.php?id=<?= $r['service_request_id'] ?>" class="flex items-center gap-1 text-purple-600 hover:underline">
                        <i class="fas fa-file-alt"></i><?= $r['request_number'] ?><?php if ($r['service_name']): ?> (<?= htmlspecialchars($r['service_name']) ?>)<?php endif; ?>
                    </a>
                    <?php endif; ?>
                    
                    <?php if ($r['person_name']): ?>
                    <span class="flex items-center gap-1">
                        <i class="fas fa-user"></i><?= htmlspecialchars($r['person_name']) ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="flex flex-col items-end gap-2">
                <!-- Days indicator -->
                <?php if ($r['status'] === 'PENDING'): ?>
                <span class="px-2 py-1 rounded text-xs font-bold 
                    <?= $isOverdue ? 'badge-overdue' : ($isToday ? 'badge-today' : 'badge-upcoming') ?>">
                    <?php if ($isOverdue): ?>
                        <?= abs($days) ?>d overdue
                    <?php elseif ($isToday): ?>
                        Today
                    <?php elseif ($days == 1): ?>
                        Tomorrow
                    <?php else: ?>
                        In <?= $days ?>d
                    <?php endif; ?>
                </span>
                <?php endif; ?>
                
                <!-- Actions -->
                <?php if ($r['status'] === 'PENDING'): ?>
                <div class="flex items-center gap-1">
                    <form method="POST" class="inline">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="complete">
                        <input type="hidden" name="reminder_id" value="<?= $r['id'] ?>">
                        <button type="submit" class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Mark Complete">
                            <i class="fas fa-check"></i>
                        </button>
                    </form>
                    <button onclick="openSnoozeModal(<?= $r['id'] ?>, '<?= htmlspecialchars(addslashes($r['title'])) ?>')" 
                            class="p-1.5 text-amber-600 hover:bg-amber-50 rounded" title="Snooze">
                        <i class="fas fa-clock"></i>
                    </button>
                    <a href="edit_reminder.php?id=<?= $r['id'] ?>" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form method="POST" class="inline" onsubmit="return confirm('Delete this reminder?')">
                        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="reminder_id" value="<?= $r['id'] ?>">
                        <button type="submit" class="p-1.5 text-red-600 hover:bg-red-50 rounded" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
                <?php else: ?>
                <span class="text-xs text-gray-400">
                    Completed <?= $r['completed_at'] ? date('d M', strtotime($r['completed_at'])) : '' ?>
                </span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>

<p class="text-xs text-gray-400 mt-4 text-right">Showing <?= count($reminders) ?> reminder(s)</p>

<!-- Add Reminder Modal -->
<div id="addModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box">
    <div class="p-4 border-b bg-amber-50 rounded-t-xl">
        <h3 class="text-lg font-bold"><i class="fas fa-bell text-amber-600 mr-2"></i>Add Reminder</h3>
    </div>
    <form method="POST" class="p-6 space-y-4">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="add_quick">
        
        <div>
            <label class="form-label">Title *</label>
            <input type="text" name="title" class="form-input w-full" placeholder="e.g., Follow up with client" required>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="form-label">Date *</label>
                <input type="date" name="reminder_date" class="form-input w-full" value="<?= date('Y-m-d') ?>" required>
            </div>
            <div>
                <label class="form-label">Time</label>
                <input type="time" name="reminder_time" class="form-input w-full" value="09:00">
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="form-label">Priority</label>
                <select name="priority" class="form-input w-full">
                    <option value="LOW">Low</option>
                    <option value="NORMAL" selected>Normal</option>
                    <option value="HIGH">High</option>
                    <option value="URGENT">Urgent</option>
                </select>
            </div>
            <div>
                <label class="form-label">Link to Client</label>
                <select name="client_id" id="addClientSelect" class="form-input w-full" onchange="filterServiceRequests()">
                    <option value="">-- None --</option>
                    <?php foreach ($clients as $c): ?>
                    <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <div>
            <label class="form-label">Link to Service Request</label>
            <select name="service_request_id" id="addServiceRequestSelect" class="form-input w-full">
                <option value="">-- None --</option>
                <?php foreach ($serviceRequests as $sr): ?>
                <option value="<?= $sr['id'] ?>" data-client="<?= $sr['client_id'] ?>"><?= $sr['request_number'] ?> - <?= htmlspecialchars($sr['client_name']) ?> (<?= htmlspecialchars($sr['service_name']) ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div>
            <label class="form-label">Description</label>
            <textarea name="description" class="form-input w-full" rows="2" placeholder="Additional details..."></textarea>
        </div>
        
        <div class="flex gap-3 pt-4 border-t">
            <button type="submit" class="btn btn-primary flex-1"><i class="fas fa-plus mr-2"></i>Add Reminder</button>
            <button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>
</div>

<!-- Snooze Modal -->
<div id="snoozeModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')">
<div class="modal-box max-w-sm">
    <div class="p-4 border-b bg-amber-50 rounded-t-xl">
        <h3 class="text-lg font-bold"><i class="fas fa-clock text-amber-600 mr-2"></i>Snooze Reminder</h3>
        <p class="text-sm text-gray-500" id="snoozeTitle"></p>
    </div>
    <form method="POST" class="p-6">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="snooze">
        <input type="hidden" name="reminder_id" id="snoozeReminderId">
        
        <p class="text-sm text-gray-600 mb-4">Snooze for:</p>
        <div class="grid grid-cols-2 gap-2">
            <button type="submit" name="snooze_days" value="1" class="btn btn-secondary">1 Day</button>
            <button type="submit" name="snooze_days" value="2" class="btn btn-secondary">2 Days</button>
            <button type="submit" name="snooze_days" value="3" class="btn btn-secondary">3 Days</button>
            <button type="submit" name="snooze_days" value="7" class="btn btn-secondary">1 Week</button>
        </div>
        
        <button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary w-full mt-4">Cancel</button>
    </form>
</div>
</div>

<script>
function openSnoozeModal(id, title) {
    document.getElementById('snoozeReminderId').value = id;
    document.getElementById('snoozeTitle').textContent = title;
    document.getElementById('snoozeModal').classList.add('show');
}

function filterServiceRequests() {
    const clientId = document.getElementById('addClientSelect').value;
    const srSelect = document.getElementById('addServiceRequestSelect');
    const options = srSelect.querySelectorAll('option');
    
    options.forEach(opt => {
        if (opt.value === '') {
            opt.style.display = '';
        } else if (!clientId) {
            opt.style.display = '';
        } else {
            opt.style.display = opt.dataset.client === clientId ? '' : 'none';
        }
    });
    
    // Reset selection if current selection is hidden
    if (srSelect.selectedOptions[0] && srSelect.selectedOptions[0].style.display === 'none') {
        srSelect.value = '';
    }
}
</script>

<?php require_once 'includes/footer.php'; ?>
