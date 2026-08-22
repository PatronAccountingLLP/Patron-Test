<?php
/**
 * PATRON - Search Persons AJAX Endpoint
 * Searches for persons not already linked to the specified client
 */

require_once '../includes/db.php';
startSession();
requireLogin();

header('Content-Type: application/json');

$query = sanitize($_GET['q'] ?? '');
$clientId = (int)($_GET['client_id'] ?? 0);

if (strlen($query) < 2) {
    echo json_encode([]);
    exit;
}

// Search persons (from persons_new table)
// Exclude persons already linked to this client (if client_id provided)
$sql = "
    SELECT p.id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email,
           GROUP_CONCAT(DISTINCT c.name SEPARATOR ', ') as linked_clients
    FROM persons_new p
    LEFT JOIN client_persons cp ON p.id = cp.person_id
    LEFT JOIN clients c ON cp.client_id = c.id AND c.deleted_at IS NULL
    WHERE p.deleted_at IS NULL
      AND (p.full_name LIKE ? OR p.pan_number LIKE ? OR p.din LIKE ? OR p.dpin LIKE ? OR p.mobile LIKE ?)
";
$params = ["%$query%", "%$query%", "%$query%", "%$query%", "%$query%"];

// Optionally exclude persons already linked to this specific client with all roles
// But allow same person with different roles, so we just show them all
// The backend will handle duplicates

$sql .= " GROUP BY p.id ORDER BY p.full_name LIMIT 20";

$persons = dbFetchAll($sql, $params) ?: [];

echo json_encode($persons);
