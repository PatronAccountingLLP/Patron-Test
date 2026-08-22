<?php
/**
 * PATRON - Compliance Calendar View
 * Monthly calendar showing all compliance due dates
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Compliance Calendar';
$currentUser = getCurrentUser();
$currentUserId = (int)$currentUser['id'];
$isAdmin = canSeeAllData();

// Get month/year from query params or use current
$month = (int)($_GET['month'] ?? date('n'));
$year = (int)($_GET['year'] ?? date('Y'));

// Validate month/year
if ($month < 1) { $month = 12; $year--; }
if ($month > 12) { $month = 1; $year++; }

$filterClient = (int)($_GET['client_id'] ?? 0);
$filterCategory = sanitize($_GET['category'] ?? '');

// First and last day of month
$firstDay = "$year-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-01";
$lastDay = date('Y-m-t', strtotime($firstDay));
$daysInMonth = (int)date('t', strtotime($firstDay));
$startDayOfWeek = (int)date('w', strtotime($firstDay)); // 0=Sunday

// Build query for entries in this month
$where = ["ctr.due_date BETWEEN ? AND ?", "ct.deleted_at IS NULL"];
$params = [$firstDay, $lastDay];

if (!$isAdmin) {
    $where[] = "(ctr.executor_1_id = ? OR ctr.executor_2_id = ? OR ctr.reviewer_id = ? OR ctr.manager_id = ? OR ctr.assigned_to = ?)";
    $params[] = $currentUserId;
    $params[] = $currentUserId;
    $params[] = $currentUserId;
    $params[] = $currentUserId;
    $params[] = $currentUserId;
}

if ($filterClient) {
    $where[] = "ctr.client_id = ?";
    $params[] = $filterClient;
}

if ($filterCategory) {
    $where[] = "ct.category = ?";
    $params[] = $filterCategory;
}

$entries = dbFetchAll("
    SELECT ctr.*, ct.name as compliance_name, ct.code, ct.category, ct.icon, ct.color,
           c.name as client_name
    FROM compliance_tracker ctr
    JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
    JOIN clients c ON ctr.client_id = c.id
    WHERE " . implode(' AND ', $where) . "
    ORDER BY ctr.due_date, c.name
", $params) ?: [];

// Group entries by day
$entriesByDay = [];
foreach ($entries as $e) {
    $day = (int)date('j', strtotime($e['due_date']));
    if (!isset($entriesByDay[$day])) {
        $entriesByDay[$day] = [];
    }
    $entriesByDay[$day][] = $e;
}

// Get clients for filter
$clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL ORDER BY name") ?: [];

$categories = [
    'GST' => ['label' => 'GST', 'color' => 'blue'],
    'TDS' => ['label' => 'TDS', 'color' => 'green'],
    'INCOME_TAX' => ['label' => 'Income Tax', 'color' => 'amber'],
    'ROC' => ['label' => 'ROC', 'color' => 'purple'],
    'PF_ESI' => ['label' => 'PF/ESI', 'color' => 'teal'],
    'OTHER' => ['label' => 'Other', 'color' => 'gray']
];

$statuses = [
    'NOT_STARTED' => ['label' => 'Not Started', 'color' => 'gray', 'bg' => '#F3F4F6'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'color' => 'blue', 'bg' => '#DBEAFE'],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'color' => 'purple', 'bg' => '#EDE9FE'],
    'READY_TO_FILE' => ['label' => 'Ready', 'color' => 'cyan', 'bg' => '#CFFAFE'],
    'FILED' => ['label' => 'Filed', 'color' => 'green', 'bg' => '#D1FAE5'],
    'FILED_LATE' => ['label' => 'Filed Late', 'color' => 'red', 'bg' => '#FEE2E2'],
    'NOT_APPLICABLE' => ['label' => 'N/A', 'color' => 'gray', 'bg' => '#F3F4F6'],
];

$monthNames = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// Navigation URLs
$prevMonth = $month - 1;
$prevYear = $year;
if ($prevMonth < 1) { $prevMonth = 12; $prevYear--; }

$nextMonth = $month + 1;
$nextYear = $year;
if ($nextMonth > 12) { $nextMonth = 1; $nextYear++; }

$baseUrl = "compliance_calendar.php?" . ($filterClient ? "client_id=$filterClient&" : '') . ($filterCategory ? "category=$filterCategory&" : '');

require_once 'includes/header.php';
?>

<style>
.calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
    background: #e5e7eb;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    overflow: hidden;
}
.calendar-header {
    background: #f9fafb;
    padding: 12px;
    text-align: center;
    font-weight: 600;
    font-size: 12px;
    color: #6b7280;
    text-transform: uppercase;
}
.calendar-day {
    background: white;
    min-height: 120px;
    padding: 8px;
    vertical-align: top;
}
.calendar-day.other-month {
    background: #f9fafb;
}
.calendar-day.today {
    background: #eff6ff;
}
.calendar-day.has-overdue {
    background: #fef2f2;
}
.day-number {
    font-weight: 600;
    font-size: 14px;
    color: #374151;
    margin-bottom: 4px;
}
.calendar-day.other-month .day-number {
    color: #9ca3af;
}
.calendar-day.today .day-number {
    background: #3b82f6;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.day-entries {
    display: flex;
    flex-direction: column;
    gap: 2px;
    max-height: 80px;
    overflow-y: auto;
}
.day-entry {
    font-size: 10px;
    padding: 2px 6px;
    border-radius: 4px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    cursor: pointer;
    transition: all 0.15s;
}
.day-entry:hover {
    transform: scale(1.02);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.day-entry.filed {
    opacity: 0.6;
    text-decoration: line-through;
}
.day-entry.overdue {
    animation: pulse 2s infinite;
}
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}
.more-entries {
    font-size: 10px;
    color: #6b7280;
    text-align: center;
    padding: 2px;
}

/* Entry Detail Popup */
.entry-popup {
    position: fixed;
    background: white;
    border-radius: 8px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    padding: 16px;
    z-index: 1000;
    min-width: 280px;
    max-width: 350px;
    display: none;
}
.entry-popup.show {
    display: block;
}
</style>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold"><i class="fas fa-calendar-alt text-blue-600 mr-2"></i>Compliance Calendar</h1>
        <p class="text-gray-500 text-sm"><?= $isAdmin ? 'All compliances' : 'Your assigned compliances' ?></p>
    </div>
    <div class="flex gap-2">
        <a href="compliance_tracker.php" class="btn btn-secondary">
            <i class="fas fa-list mr-2"></i>List View
        </a>
    </div>
</div>

<!-- Filters -->
<div class="card p-4 mb-6">
    <form method="GET" class="flex flex-wrap items-end gap-4">
        <input type="hidden" name="month" value="<?= $month ?>">
        <input type="hidden" name="year" value="<?= $year ?>">
        
        <div>
            <label class="block text-xs text-gray-500 mb-1">Client</label>
            <select name="client_id" class="form-input text-sm" onchange="this.form.submit()">
                <option value="">All Clients</option>
                <?php foreach ($clients as $c): ?>
                <option value="<?= $c['id'] ?>" <?= $filterClient == $c['id'] ? 'selected' : '' ?>><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label class="block text-xs text-gray-500 mb-1">Category</label>
            <select name="category" class="form-input text-sm" onchange="this.form.submit()">
                <option value="">All Categories</option>
                <?php foreach ($categories as $key => $cat): ?>
                <option value="<?= $key ?>" <?= $filterCategory === $key ? 'selected' : '' ?>><?= $cat['label'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if ($filterClient || $filterCategory): ?>
        <a href="compliance_calendar.php?month=<?= $month ?>&year=<?= $year ?>" class="text-sm text-red-500 hover:underline">Clear Filters</a>
        <?php endif; ?>
    </form>
</div>

<!-- Month Navigation -->
<div class="flex items-center justify-between mb-4">
    <a href="<?= $baseUrl ?>month=<?= $prevMonth ?>&year=<?= $prevYear ?>" class="btn btn-secondary">
        <i class="fas fa-chevron-left mr-2"></i><?= $monthNames[$prevMonth] ?>
    </a>
    <div class="text-center">
        <h2 class="text-xl font-bold"><?= $monthNames[$month] ?> <?= $year ?></h2>
        <p class="text-sm text-gray-500"><?= count($entries) ?> compliance entries</p>
    </div>
    <a href="<?= $baseUrl ?>month=<?= $nextMonth ?>&year=<?= $nextYear ?>" class="btn btn-secondary">
        <?= $monthNames[$nextMonth] ?><i class="fas fa-chevron-right ml-2"></i>
    </a>
</div>

<!-- Legend -->
<div class="flex flex-wrap gap-3 mb-4 text-xs">
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-blue-200 rounded"></span> GST</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-green-200 rounded"></span> TDS</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-amber-200 rounded"></span> Income Tax</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-purple-200 rounded"></span> ROC</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-teal-200 rounded"></span> PF/ESI</span>
    <span class="text-gray-400">|</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-red-100 border border-red-300 rounded"></span> Overdue</span>
    <span class="flex items-center gap-1"><span class="w-3 h-3 bg-green-100 border border-green-300 rounded line-through"></span> Filed</span>
</div>

<!-- Calendar Grid -->
<div class="calendar-grid">
    <!-- Headers -->
    <div class="calendar-header">Sun</div>
    <div class="calendar-header">Mon</div>
    <div class="calendar-header">Tue</div>
    <div class="calendar-header">Wed</div>
    <div class="calendar-header">Thu</div>
    <div class="calendar-header">Fri</div>
    <div class="calendar-header">Sat</div>
    
    <?php
    // Previous month days
    $prevMonthDays = date('t', strtotime("$prevYear-$prevMonth-01"));
    for ($i = 0; $i < $startDayOfWeek; $i++) {
        $dayNum = $prevMonthDays - $startDayOfWeek + $i + 1;
        echo '<div class="calendar-day other-month"><div class="day-number">' . $dayNum . '</div></div>';
    }
    
    // Current month days
    $today = date('Y-m-d');
    for ($day = 1; $day <= $daysInMonth; $day++) {
        $dateStr = "$year-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT);
        $isToday = $dateStr === $today;
        $dayEntries = $entriesByDay[$day] ?? [];
        
        // Check if any entries are overdue
        $hasOverdue = false;
        foreach ($dayEntries as $e) {
            if ($dateStr < $today && !in_array($e['status'], ['FILED', 'FILED_LATE', 'NOT_APPLICABLE'])) {
                $hasOverdue = true;
                break;
            }
        }
        
        $classes = 'calendar-day';
        if ($isToday) $classes .= ' today';
        if ($hasOverdue) $classes .= ' has-overdue';
        
        echo '<div class="' . $classes . '">';
        echo '<div class="day-number">' . ($isToday ? '<span>' . $day . '</span>' : $day) . '</div>';
        
        if (!empty($dayEntries)) {
            echo '<div class="day-entries">';
            $shown = 0;
            foreach ($dayEntries as $e) {
                if ($shown >= 3) {
                    echo '<div class="more-entries">+' . (count($dayEntries) - 3) . ' more</div>';
                    break;
                }
                
                $catInfo = $categories[$e['category']] ?? $categories['OTHER'];
                $statusInfo = $statuses[$e['status']] ?? $statuses['NOT_STARTED'];
                $isFiled = in_array($e['status'], ['FILED', 'FILED_LATE']);
                $isOverdue = $dateStr < $today && !$isFiled && $e['status'] !== 'NOT_APPLICABLE';
                
                $entryClasses = 'day-entry bg-' . $catInfo['color'] . '-100 text-' . $catInfo['color'] . '-800';
                if ($isFiled) $entryClasses .= ' filed';
                if ($isOverdue) $entryClasses .= ' overdue border border-red-400';
                
                echo '<div class="' . $entryClasses . '" onclick="showEntryPopup(event, ' . htmlspecialchars(json_encode([
                    'id' => $e['id'],
                    'name' => $e['compliance_name'],
                    'client' => $e['client_name'],
                    'period' => $e['period_name'],
                    'status' => $statusInfo['label'],
                    'statusColor' => $statusInfo['color'],
                    'due' => date('d M Y', strtotime($e['due_date'])),
                    'isOverdue' => $isOverdue
                ])) . ')" title="' . htmlspecialchars($e['client_name'] . ' - ' . $e['compliance_name']) . '">';
                echo htmlspecialchars($e['code'] ?: substr($e['compliance_name'], 0, 10));
                echo '</div>';
                $shown++;
            }
            echo '</div>';
        }
        
        echo '</div>';
    }
    
    // Next month days
    $totalCells = $startDayOfWeek + $daysInMonth;
    $remainingCells = (7 - ($totalCells % 7)) % 7;
    for ($i = 1; $i <= $remainingCells; $i++) {
        echo '<div class="calendar-day other-month"><div class="day-number">' . $i . '</div></div>';
    }
    ?>
</div>

<!-- Entry Popup -->
<div id="entryPopup" class="entry-popup">
    <div class="flex items-start justify-between mb-3">
        <div>
            <h4 id="popup-name" class="font-bold text-gray-900"></h4>
            <p id="popup-client" class="text-sm text-gray-500"></p>
        </div>
        <button onclick="hideEntryPopup()" class="text-gray-400 hover:text-gray-600">&times;</button>
    </div>
    <div class="space-y-2 text-sm">
        <p><span class="text-gray-500">Period:</span> <span id="popup-period" class="font-medium"></span></p>
        <p><span class="text-gray-500">Due Date:</span> <span id="popup-due" class="font-medium"></span></p>
        <p><span class="text-gray-500">Status:</span> <span id="popup-status" class="px-2 py-1 rounded text-xs font-medium"></span></p>
        <p id="popup-overdue" class="text-red-600 font-medium hidden"><i class="fas fa-exclamation-triangle mr-1"></i>OVERDUE</p>
    </div>
    <div class="mt-4 pt-3 border-t">
        <a id="popup-link" href="#" class="btn btn-primary btn-sm w-full text-center">
            <i class="fas fa-external-link-alt mr-1"></i>View Details
        </a>
    </div>
</div>

<script>
function showEntryPopup(event, data) {
    event.stopPropagation();
    const popup = document.getElementById('entryPopup');
    
    document.getElementById('popup-name').textContent = data.name;
    document.getElementById('popup-client').textContent = data.client;
    document.getElementById('popup-period').textContent = data.period;
    document.getElementById('popup-due').textContent = data.due;
    
    const statusEl = document.getElementById('popup-status');
    statusEl.textContent = data.status;
    statusEl.className = 'px-2 py-1 rounded text-xs font-medium bg-' + data.statusColor + '-100 text-' + data.statusColor + '-700';
    
    document.getElementById('popup-overdue').classList.toggle('hidden', !data.isOverdue);
    document.getElementById('popup-link').href = 'compliance_entry.php?id=' + data.id;
    
    // Position popup
    const rect = event.target.getBoundingClientRect();
    popup.style.left = Math.min(rect.left, window.innerWidth - 360) + 'px';
    popup.style.top = (rect.bottom + 10) + 'px';
    popup.classList.add('show');
}

function hideEntryPopup() {
    document.getElementById('entryPopup').classList.remove('show');
}

// Hide popup when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.entry-popup') && !e.target.closest('.day-entry')) {
        hideEntryPopup();
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>
