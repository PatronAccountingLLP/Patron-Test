<?php
/**
 * PATRON - Compliance Status Update Handler
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: compliance_tracker.php');
    exit;
}

if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
    setFlash('error', 'Invalid request.');
    header('Location: compliance_tracker.php');
    exit;
}

$entryId = (int)($_POST['entry_id'] ?? 0);
$newStatus = strtoupper(trim($_POST['new_status'] ?? ''));
$redirect = sanitize($_POST['redirect'] ?? 'compliance_tracker.php');

$validStatuses = ['NOT_STARTED', 'DATA_REQUESTED', 'DATA_RECEIVED', 'IN_PROGRESS', 'UNDER_REVIEW', 'PENDING_APPROVAL', 'READY_TO_FILE', 'FILED', 'FILED_LATE', 'NOT_APPLICABLE', 'ON_HOLD'];

if (!$entryId || !in_array($newStatus, $validStatuses)) {
    setFlash('error', 'Invalid parameters.');
    header('Location: ' . $redirect);
    exit;
}

// Get current entry
$entry = dbFetchOne("SELECT * FROM compliance_tracker WHERE id = ?", [$entryId]);
if (!$entry) {
    setFlash('error', 'Entry not found.');
    header('Location: ' . $redirect);
    exit;
}

$oldStatus = $entry['status'];
$updates = ['status' => $newStatus];
$currentUserId = $_SESSION['user_id'];

// Handle specific status updates
if ($newStatus === 'IN_PROGRESS' && !$entry['started_at']) {
    $updates['started_at'] = date('Y-m-d H:i:s');
    if (!$entry['assigned_to']) {
        $updates['assigned_to'] = $currentUserId;
    }
}

if ($newStatus === 'DATA_REQUESTED' && !$entry['data_requested_at']) {
    $updates['data_requested_at'] = date('Y-m-d H:i:s');
}

if ($newStatus === 'DATA_RECEIVED' && !$entry['data_received_at']) {
    $updates['data_received_at'] = date('Y-m-d H:i:s');
}

if (in_array($newStatus, ['FILED', 'FILED_LATE'])) {
    $updates['completed_at'] = date('Y-m-d H:i:s');
    $updates['filed_by'] = $currentUserId;
    if (!$entry['filed_date']) {
        $updates['filed_date'] = date('Y-m-d');
    }
    // Check if filed late
    if ($entry['due_date'] < date('Y-m-d') && $newStatus === 'FILED') {
        $updates['status'] = 'FILED_LATE';
        $newStatus = 'FILED_LATE';
    }
}

// Build update query
$setClauses = [];
$params = [];
foreach ($updates as $field => $value) {
    $setClauses[] = "$field = ?";
    $params[] = $value;
}
$params[] = $entryId;

dbExecute("UPDATE compliance_tracker SET " . implode(', ', $setClauses) . " WHERE id = ?", $params);

// Log the activity
dbExecute("INSERT INTO compliance_activity_log (compliance_tracker_id, action, old_value, new_value, performed_by) VALUES (?, 'STATUS_CHANGE', ?, ?, ?)",
    [$entryId, $oldStatus, $newStatus, $currentUserId]);

setFlash('success', 'Status updated to ' . str_replace('_', ' ', $newStatus));
header('Location: ' . $redirect);
exit;
