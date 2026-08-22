<?php
/**
 * PATRON - Notifications Page
 * Displays user notifications and allows marking them as read
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

$pageTitle = 'Notifications';
$currentUser = getCurrentUser();
$userId = (int)$currentUser['id'];

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'mark_read') {
        $notificationId = (int)($_POST['notification_id'] ?? 0);
        if ($notificationId) {
            dbExecute("UPDATE notifications SET is_read = 1, read_at = NOW() WHERE id = ? AND user_id = ?", [$notificationId, $userId]);
        }
    }
    
    if ($action === 'mark_all_read') {
        dbExecute("UPDATE notifications SET is_read = 1, read_at = NOW() WHERE user_id = ? AND is_read = 0", [$userId]);
        setFlash('success', 'All notifications marked as read.');
    }
    
    if ($action === 'delete') {
        $notificationId = (int)($_POST['notification_id'] ?? 0);
        if ($notificationId) {
            dbExecute("DELETE FROM notifications WHERE id = ? AND user_id = ?", [$notificationId, $userId]);
        }
    }
    
    if ($action === 'delete_all_read') {
        dbExecute("DELETE FROM notifications WHERE user_id = ? AND is_read = 1", [$userId]);
        setFlash('success', 'All read notifications deleted.');
    }
    
    header('Location: notifications.php');
    exit;
}

// Get filter
$filter = $_GET['filter'] ?? 'all';

// Build query
$whereClause = "user_id = ?";
$params = [$userId];

if ($filter === 'unread') {
    $whereClause .= " AND is_read = 0";
} elseif ($filter === 'read') {
    $whereClause .= " AND is_read = 1";
}

// Get notifications
$notifications = [];
try {
    $notifications = dbFetchAll("
        SELECT * FROM notifications 
        WHERE $whereClause 
        ORDER BY created_at DESC 
        LIMIT 100
    ", $params) ?: [];
} catch (Exception $e) {
    // Table might not exist
}

// Get counts
$counts = ['all' => 0, 'unread' => 0, 'read' => 0];
try {
    $countData = dbFetchOne("
        SELECT 
            COUNT(*) as total,
            SUM(CASE WHEN is_read = 0 THEN 1 ELSE 0 END) as unread,
            SUM(CASE WHEN is_read = 1 THEN 1 ELSE 0 END) as `read`
        FROM notifications 
        WHERE user_id = ?
    ", [$userId]);
    $counts['all'] = (int)($countData['total'] ?? 0);
    $counts['unread'] = (int)($countData['unread'] ?? 0);
    $counts['read'] = (int)($countData['read'] ?? 0);
} catch (Exception $e) {}

// Notification type icons and colors
function getNotificationStyle($type) {
    $styles = [
        'info' => ['icon' => 'fa-info-circle', 'bg' => 'bg-blue-100', 'text' => 'text-blue-600'],
        'success' => ['icon' => 'fa-check-circle', 'bg' => 'bg-green-100', 'text' => 'text-green-600'],
        'warning' => ['icon' => 'fa-exclamation-triangle', 'bg' => 'bg-amber-100', 'text' => 'text-amber-600'],
        'error' => ['icon' => 'fa-times-circle', 'bg' => 'bg-red-100', 'text' => 'text-red-600'],
        'task' => ['icon' => 'fa-tasks', 'bg' => 'bg-purple-100', 'text' => 'text-purple-600'],
        'reminder' => ['icon' => 'fa-bell', 'bg' => 'bg-amber-100', 'text' => 'text-amber-600'],
        'leave' => ['icon' => 'fa-calendar-check', 'bg' => 'bg-cyan-100', 'text' => 'text-cyan-600'],
        'billing' => ['icon' => 'fa-file-invoice-dollar', 'bg' => 'bg-indigo-100', 'text' => 'text-indigo-600'],
        'client' => ['icon' => 'fa-building', 'bg' => 'bg-teal-100', 'text' => 'text-teal-600'],
        'compliance' => ['icon' => 'fa-clipboard-check', 'bg' => 'bg-orange-100', 'text' => 'text-orange-600'],
    ];
    return $styles[$type] ?? $styles['info'];
}

require_once 'includes/header.php';
?>

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800"><i class="fas fa-bell text-amber-500 mr-2"></i>Notifications</h1>
        <p class="text-gray-500 text-sm">Stay updated with important alerts</p>
    </div>
    <?php if ($counts['unread'] > 0): ?>
    <form method="POST" class="inline">
        <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
        <input type="hidden" name="action" value="mark_all_read">
        <button type="submit" class="btn btn-secondary text-sm">
            <i class="fas fa-check-double mr-2"></i>Mark All as Read
        </button>
    </form>
    <?php endif; ?>
</div>

<!-- Filter Tabs -->
<div class="card mb-6">
    <div class="flex border-b">
        <a href="?filter=all" class="px-6 py-3 text-sm font-medium <?= $filter === 'all' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-500 hover:text-gray-700' ?>">
            All <span class="ml-1 px-2 py-0.5 bg-gray-100 rounded-full text-xs"><?= $counts['all'] ?></span>
        </a>
        <a href="?filter=unread" class="px-6 py-3 text-sm font-medium <?= $filter === 'unread' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-500 hover:text-gray-700' ?>">
            Unread <span class="ml-1 px-2 py-0.5 <?= $counts['unread'] > 0 ? 'bg-red-100 text-red-700' : 'bg-gray-100' ?> rounded-full text-xs"><?= $counts['unread'] ?></span>
        </a>
        <a href="?filter=read" class="px-6 py-3 text-sm font-medium <?= $filter === 'read' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-500 hover:text-gray-700' ?>">
            Read <span class="ml-1 px-2 py-0.5 bg-gray-100 rounded-full text-xs"><?= $counts['read'] ?></span>
        </a>
        <?php if ($counts['read'] > 0): ?>
        <div class="ml-auto flex items-center pr-4">
            <form method="POST" class="inline" onsubmit="return confirm('Delete all read notifications?')">
                <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                <input type="hidden" name="action" value="delete_all_read">
                <button type="submit" class="text-red-500 hover:text-red-700 text-sm">
                    <i class="fas fa-trash mr-1"></i>Clear Read
                </button>
            </form>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Notifications List -->
<?php if (empty($notifications)): ?>
<div class="card p-12 text-center">
    <i class="fas fa-bell-slash text-5xl text-gray-300 mb-4"></i>
    <h3 class="text-lg font-semibold text-gray-600 mb-2">No notifications</h3>
    <p class="text-gray-500">
        <?php if ($filter === 'unread'): ?>
        You're all caught up! No unread notifications.
        <?php elseif ($filter === 'read'): ?>
        No read notifications to show.
        <?php else: ?>
        You don't have any notifications yet.
        <?php endif; ?>
    </p>
</div>
<?php else: ?>
<div class="card divide-y">
    <?php foreach ($notifications as $notif): 
        $style = getNotificationStyle($notif['type'] ?? 'info');
        $isUnread = !$notif['is_read'];
        $timeAgo = time() - strtotime($notif['created_at']);
        
        if ($timeAgo < 60) {
            $timeText = 'Just now';
        } elseif ($timeAgo < 3600) {
            $timeText = floor($timeAgo / 60) . 'm ago';
        } elseif ($timeAgo < 86400) {
            $timeText = floor($timeAgo / 3600) . 'h ago';
        } elseif ($timeAgo < 604800) {
            $timeText = floor($timeAgo / 86400) . 'd ago';
        } else {
            $timeText = date('d M Y', strtotime($notif['created_at']));
        }
    ?>
    <div class="p-4 <?= $isUnread ? 'bg-blue-50/50' : '' ?> hover:bg-gray-50 transition">
        <div class="flex gap-4">
            <!-- Icon -->
            <div class="flex-shrink-0">
                <div class="w-10 h-10 rounded-full <?= $style['bg'] ?> <?= $style['text'] ?> flex items-center justify-center">
                    <i class="fas <?= $style['icon'] ?>"></i>
                </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 min-w-0">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-sm <?= $isUnread ? 'font-semibold text-gray-900' : 'text-gray-700' ?>">
                            <?= htmlspecialchars($notif['title'] ?? 'Notification') ?>
                        </p>
                        <?php if (!empty($notif['message'])): ?>
                        <p class="text-sm text-gray-500 mt-1"><?= htmlspecialchars($notif['message']) ?></p>
                        <?php endif; ?>
                        <p class="text-xs text-gray-400 mt-2">
                            <i class="fas fa-clock mr-1"></i><?= $timeText ?>
                            <?php if (!empty($notif['link'])): ?>
                            <a href="<?= htmlspecialchars($notif['link']) ?>" class="ml-3 text-indigo-600 hover:underline">
                                <i class="fas fa-external-link-alt mr-1"></i>View
                            </a>
                            <?php endif; ?>
                        </p>
                    </div>
                    
                    <!-- Actions -->
                    <div class="flex items-center gap-2 flex-shrink-0">
                        <?php if ($isUnread): ?>
                        <form method="POST" class="inline">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="mark_read">
                            <input type="hidden" name="notification_id" value="<?= $notif['id'] ?>">
                            <button type="submit" class="p-2 text-gray-400 hover:text-green-600 hover:bg-green-50 rounded" title="Mark as read">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                        <?php endif; ?>
                        <form method="POST" class="inline">
                            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="notification_id" value="<?= $notif['id'] ?>">
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Unread indicator -->
            <?php if ($isUnread): ?>
            <div class="flex-shrink-0">
                <span class="w-2 h-2 bg-blue-500 rounded-full block"></span>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<?php require_once 'includes/footer.php'; ?>
