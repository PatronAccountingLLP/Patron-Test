<?php
/**
 * PATRON - Compliance Due Date Extension Handler
 * Handles government deadline extensions
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
$newDueDate = sanitize($_POST['new_due_date'] ?? '');
$extensionReason = sanitize($_POST['extension_reason'] ?? '');
$extensionReference = sanitize($_POST['extension_reference'] ?? '');
$redirect = sanitize($_POST['redirect'] ?? 'compliance_tracker.php');

if (!$entryId || !$newDueDate || !$extensionReason) {
    setFlash('error', 'Entry ID, new due date, and reason are required.');
    header('Location: ' . $redirect);
    exit;
}

// Validate date format
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $newDueDate)) {
    setFlash('error', 'Invalid date format.');
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

// Check if already filed
if (in_array(strtoupper($entry['status']), ['FILED', 'FILED_LATE', 'NOT_APPLICABLE'])) {
    setFlash('error', 'Cannot extend due date for already filed compliance.');
    header('Location: ' . $redirect);
    exit;
}

// Validate new date is after current due date
if ($newDueDate <= $entry['due_date']) {
    setFlash('error', 'New due date must be after current due date.');
    header('Location: ' . $redirect);
    exit;
}

$currentUserId = $_SESSION['user_id'];
$oldDueDate = $entry['due_date'];

// Store original due date if not already extended
$originalDueDate = $entry['original_due_date'] ?? $entry['due_date'];

// Update the entry
dbExecute("
    UPDATE compliance_tracker SET 
        due_date = ?,
        original_due_date = ?,
        due_date_extended = 1,
        extension_reason = ?,
        extension_reference = ?,
        extended_by = ?,
        extended_at = NOW()
    WHERE id = ?
", [$newDueDate, $originalDueDate, $extensionReason, $extensionReference ?: null, $currentUserId, $entryId]);

// Log the activity
dbExecute("
    INSERT INTO compliance_activity_log (compliance_tracker_id, action, old_value, new_value, notes, performed_by) 
    VALUES (?, 'DUE_DATE_EXTENDED', ?, ?, ?, ?)
", [$entryId, $oldDueDate, $newDueDate, $extensionReason . ($extensionReference ? " (Ref: $extensionReference)" : ''), $currentUserId]);

setFlash('success', 'Due date extended from ' . date('d M Y', strtotime($oldDueDate)) . ' to ' . date('d M Y', strtotime($newDueDate)));
header('Location: ' . $redirect);
exit;
