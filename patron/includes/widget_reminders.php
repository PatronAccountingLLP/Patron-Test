<?php
/**
 * PATRON - Reminders Widget
 * Include this in dashboard: <?php include 'includes/widget_reminders.php'; ?>
 */

$userId = $_SESSION['user_id'] ?? 0;

// Get today's and overdue reminders
$widgetReminders = dbFetchAll("
    SELECT r.*, c.name as client_name, sr.request_number, s.name as service_name,
           DATEDIFF(r.reminder_date, CURDATE()) as days_until
    FROM reminders r
    LEFT JOIN clients c ON r.client_id = c.id
    LEFT JOIN service_requests sr ON r.service_request_id = sr.id
    LEFT JOIN services s ON sr.service_id = s.id
    WHERE r.user_id = ? 
    AND r.status = 'PENDING'
    AND r.reminder_date <= DATE_ADD(CURDATE(), INTERVAL 7 DAY)
    ORDER BY r.reminder_date ASC, r.reminder_time ASC
    LIMIT 5
", [$userId]) ?: [];

$reminderCounts = dbFetchOne("
    SELECT 
        SUM(CASE WHEN reminder_date < CURDATE() AND status = 'PENDING' THEN 1 ELSE 0 END) as overdue,
        SUM(CASE WHEN reminder_date = CURDATE() AND status = 'PENDING' THEN 1 ELSE 0 END) as today
    FROM reminders WHERE user_id = ?
", [$userId]);

$hasReminders = !empty($widgetReminders) || ($reminderCounts['overdue'] ?? 0) > 0 || ($reminderCounts['today'] ?? 0) > 0;
?>

<?php if ($hasReminders || true): // Always show widget ?>
<div class="card p-4">
    <div class="flex items-center justify-between mb-4">
        <h3 class="font-semibold text-gray-900 flex items-center gap-2">
            <i class="fas fa-bell text-amber-500"></i> My Reminders
            <?php if (($reminderCounts['overdue'] ?? 0) > 0): ?>
            <span class="px-2 py-0.5 rounded-full text-xs font-bold bg-red-500 text-white"><?= $reminderCounts['overdue'] ?> overdue</span>
            <?php endif; ?>
        </h3>
        <a href="reminders.php" class="text-sm text-blue-600 hover:underline">View All</a>
    </div>
    
    <?php if (empty($widgetReminders)): ?>
    <div class="text-center py-4 text-gray-500">
        <i class="fas fa-check-circle text-2xl text-green-400 mb-2"></i>
        <p class="text-sm">No upcoming reminders</p>
        <a href="reminders.php" class="text-blue-600 hover:underline text-xs">Add reminder</a>
    </div>
    <?php else: ?>
    <div class="space-y-2">
        <?php foreach ($widgetReminders as $r): 
            $days = $r['days_until'];
            $isOverdue = $days < 0;
            $isToday = $days == 0;
        ?>
        <div class="flex items-center justify-between p-2 rounded-lg <?= $isOverdue ? 'bg-red-50' : ($isToday ? 'bg-amber-50' : 'bg-gray-50') ?>">
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate"><?= htmlspecialchars($r['title']) ?></p>
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <span><?= date('d M', strtotime($r['reminder_date'])) ?></span>
                    <?php if ($r['client_name']): ?>
                    <span class="text-blue-600"><?= htmlspecialchars($r['client_name']) ?></span>
                    <?php endif; ?>
                    <?php if ($r['request_number']): ?>
                    <span class="text-purple-600"><?= $r['request_number'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <span class="px-2 py-0.5 rounded text-xs font-medium 
                    <?= $isOverdue ? 'bg-red-500 text-white' : ($isToday ? 'bg-amber-500 text-white' : 'bg-blue-100 text-blue-700') ?>">
                    <?= $isOverdue ? abs($days).'d ago' : ($isToday ? 'Today' : 'In '.$days.'d') ?>
                </span>
                <form method="POST" action="reminders.php" class="inline">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                    <input type="hidden" name="action" value="complete">
                    <input type="hidden" name="reminder_id" value="<?= $r['id'] ?>">
                    <button type="submit" class="p-1 text-green-600 hover:bg-green-100 rounded" title="Complete">
                        <i class="fas fa-check text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <div class="mt-3 pt-3 border-t">
        <button onclick="document.getElementById('quickReminderModal').classList.add('show')" 
                class="w-full btn btn-secondary btn-sm">
            <i class="fas fa-plus mr-1"></i> Quick Add Reminder
        </button>
    </div>
</div>

<!-- Quick Add Modal (include once in page) -->
<div id="quickReminderModal" class="modal" onclick="if(event.target===this)this.classList.remove('show')" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:50">
<div style="background:#fff;border-radius:1rem;max-width:400px;width:95%;margin:auto">
    <div class="p-4 border-b bg-amber-50 rounded-t-xl">
        <h3 class="font-bold"><i class="fas fa-bell text-amber-600 mr-2"></i>Quick Reminder</h3>
    </div>
    <form method="POST" action="reminders.php" class="p-4 space-y-3">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="add_quick">
        <div>
            <input type="text" name="title" class="form-input w-full" placeholder="Reminder title..." required>
        </div>
        <div class="grid grid-cols-2 gap-2">
            <input type="date" name="reminder_date" class="form-input" value="<?= date('Y-m-d') ?>" required>
            <input type="time" name="reminder_time" class="form-input" value="09:00">
        </div>
        <select name="priority" class="form-input w-full">
            <option value="NORMAL">Normal Priority</option>
            <option value="HIGH">High Priority</option>
            <option value="URGENT">Urgent</option>
        </select>
        <div class="flex gap-2">
            <button type="submit" class="btn btn-primary flex-1">Add</button>
            <button type="button" onclick="this.closest('.modal').classList.remove('show')" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>
</div>
<style>#quickReminderModal.show{display:flex!important;align-items:center;justify-content:center}</style>
<?php endif; ?>
