<?php
/**
 * PATRON - AJAX: Get Persons linked to a Client
 * Returns JSON array of persons for a given client_id
 * Usage: ajax/get_persons.php?client_id=123
 */

require_once '../includes/db.php';
startSession();
requireLogin();

header('Content-Type: application/json');

$clientId = (int)($_GET['client_id'] ?? 0);

if (!$clientId) {
    echo json_encode([]);
    exit;
}

// Try new structure first (client_persons + persons_new)
$persons = dbFetchAll("
    SELECT p.id, p.full_name as name, cp.role_type as relationship_type, cp.designation
    FROM client_persons cp
    JOIN persons_new p ON cp.person_id = p.id
    WHERE cp.client_id = ? AND cp.is_active = 1 AND p.deleted_at IS NULL
    ORDER BY cp.display_order, p.full_name
", [$clientId]);

// Fallback to old structure if new one returns nothing
if (empty($persons)) {
    try {
        $persons = dbFetchAll("
            SELECT id, name, relationship_type
            FROM persons
            WHERE client_id = ? AND deleted_at IS NULL
            ORDER BY name
        ", [$clientId]);
    } catch (Exception $e) {
        $persons = [];
    }
}

echo json_encode($persons ?: []);
