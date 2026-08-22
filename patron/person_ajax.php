<?php
/**
 * PATRON - Person AJAX Handler
 * Handles AJAX requests for the persons module:
 *   - Duplicate check (PAN, DIN, DPIN, Aadhaar, mobile)
 *   - Role options for entity type
 *   - Person quick search
 *
 * Usage: person_ajax.php?action=check_duplicate&field=pan&value=ABCDE1234F&exclude_id=0
 */

require_once 'includes/db.php';
require_once 'includes/person_helpers.php';
startSession();
requireLogin();

header('Content-Type: application/json');

$action = sanitize($_GET['action'] ?? $_POST['action'] ?? '');

switch ($action) {

    // ---------------------------------------------------------------
    // Check for duplicate PAN / DIN / DPIN / Aadhaar / Mobile
    // ---------------------------------------------------------------
    case 'check_duplicate':
        $field = sanitize($_GET['field'] ?? '');
        $value = trim(sanitize($_GET['value'] ?? ''));
        $excludeId = (int)($_GET['exclude_id'] ?? 0);

        if (!$field || !$value) {
            echo json_encode(['duplicate' => false]);
            exit;
        }

        $colMap = [
            'pan' => 'pan_number', 'din' => 'din', 'dpin' => 'dpin',
            'aadhaar' => 'aadhaar_number', 'mobile' => 'mobile'
        ];
        $column = $colMap[$field] ?? null;
        if (!$column) {
            echo json_encode(['duplicate' => false, 'error' => 'Invalid field']);
            exit;
        }

        // Normalize value
        if ($field === 'pan') $value = strtoupper($value);
        if ($field === 'aadhaar') $value = preg_replace('/[\s-]/', '', $value);
        if ($field === 'mobile') $value = preg_replace('/[\s\-\+]/', '', $value);

        $excl = $excludeId ? " AND id != ?" : "";
        $params = $excludeId ? [$value, $excludeId] : [$value];

        $existing = dbFetchOne(
            "SELECT id, full_name, pan_number, din, mobile
             FROM persons_new WHERE {$column} = ? AND deleted_at IS NULL $excl",
            $params
        );

        if ($existing) {
            $label = ucfirst($field);
            echo json_encode([
                'duplicate' => true,
                'person_id' => (int)$existing['id'],
                'person_name' => $existing['full_name'],
                'person_pan' => $existing['pan_number'],
                'message' => "{$label} already belongs to \"{$existing['full_name']}\"",
                'view_url' => "person_view.php?id={$existing['id']}"
            ]);
        } else {
            echo json_encode(['duplicate' => false]);
        }
        break;

    // ---------------------------------------------------------------
    // Get applicable roles for an entity type
    // ---------------------------------------------------------------
    case 'get_roles':
        $entityType = sanitize($_GET['entity_type'] ?? '');
        if (!$entityType) {
            echo json_encode(['roles' => []]);
            exit;
        }
        $roles = getApplicableRoles($entityType);
        $result = [];
        foreach ($roles as $r) {
            $result[] = ['code' => $r, 'label' => getRoleLabel($r)];
        }
        echo json_encode(['roles' => $result]);
        break;

    // ---------------------------------------------------------------
    // Quick search persons (for link-to-client dropdowns)
    // ---------------------------------------------------------------
    case 'search_persons':
        $q = sanitize($_GET['q'] ?? '');
        $clientId = (int)($_GET['exclude_client_id'] ?? 0);

        if (strlen($q) < 2) {
            echo json_encode(['persons' => []]);
            exit;
        }

        $excl = '';
        $params = ["%{$q}%", "%{$q}%", "%{$q}%"];
        if ($clientId) {
            $excl = " AND p.id NOT IN (SELECT person_id FROM client_persons WHERE client_id = ?)";
            $params[] = $clientId;
        }

        $persons = dbFetchAll("
            SELECT p.id, p.full_name, p.pan_number, p.din, p.mobile
            FROM persons_new p
            WHERE p.deleted_at IS NULL
              AND (p.full_name LIKE ? OR p.pan_number LIKE ? OR p.din LIKE ?)
              $excl
            ORDER BY p.full_name
            LIMIT 20
        ", $params) ?: [];

        echo json_encode(['persons' => $persons]);
        break;

    // ---------------------------------------------------------------
    // Get person details (for quick preview in modals)
    // ---------------------------------------------------------------
    case 'get_person':
        $personId = (int)($_GET['id'] ?? 0);
        if (!$personId) {
            echo json_encode(['error' => 'ID required']);
            exit;
        }
        $person = getPersonById($personId);
        if (!$person) {
            echo json_encode(['error' => 'Not found']);
            exit;
        }
        // Remove sensitive fields
        unset($person['dsc_password'], $person['dsc_password_hint']);
        $person['age'] = calculateAge($person['dob']);
        $person['dsc_info'] = getDSCStatusInfo($person);
        $person['kyc_info'] = getKYCStatusInfo($person);
        $person['linked_clients'] = count(getPersonLinkedClients($personId));
        $person['document_count'] = getPersonDocumentCount($personId);
        echo json_encode(['person' => $person]);
        break;

    // ---------------------------------------------------------------
    // Get persons linked to a client (for dropdowns in service requests)
    // ---------------------------------------------------------------
    case 'get_client_persons':
        $clientId = (int)($_GET['client_id'] ?? 0);
        if (!$clientId) {
            echo json_encode(['persons' => []]);
            exit;
        }
        $persons = getClientPersons($clientId, true);
        $result = [];
        foreach ($persons as $p) {
            $result[] = [
                'id' => (int)$p['id'],
                'full_name' => $p['full_name'],
                'pan_number' => $p['pan_number'],
                'din' => $p['din'],
                'role_type' => $p['role_type'],
                'role_label' => getRoleLabel($p['role_type']),
            ];
        }
        echo json_encode(['persons' => $result]);
        break;

    default:
        echo json_encode(['error' => 'Unknown action: ' . $action]);
}
