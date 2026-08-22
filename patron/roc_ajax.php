<?php
require_once 'includes/db.php';
require_once 'includes/access_control.php';
startSession();
requireLogin();

header('Content-Type: application/json');

$action = $_REQUEST['action'] ?? '';

try {
    switch ($action) {

        case 'get_client_data':
            $clientId = (int)($_GET['client_id'] ?? 0);
            if (!$clientId) throw new Exception('Client ID required');
            
            $client = dbFetchOne("SELECT * FROM clients WHERE id = ?", [$clientId]);
            if (!$client) throw new Exception('Client not found');
            
            // Build registered office
            $regOffice = $client['registered_address'] ?: trim(implode(', ', array_filter([
                $client['address_line1'], $client['address_line2'], $client['city'], $client['state'], $client['pincode']
            ])));
            
            echo json_encode(['success' => true, 'client' => $client, 'registered_office' => $regOffice]);
            break;

        case 'get_client_persons':
            $clientId = (int)($_GET['client_id'] ?? 0);
            if (!$clientId) throw new Exception('Client ID required');
            
            $persons = dbFetchAll("
                SELECT p.*, cp.role_type, cp.designation, cp.director_category, cp.appointment_date, cp.id as client_person_id
                FROM client_persons cp
                JOIN persons_new p ON p.id = cp.person_id
                WHERE cp.client_id = ? AND cp.cessation_date IS NULL AND p.deleted_at IS NULL
                ORDER BY p.full_name
            ", [$clientId]) ?: [];
            
            echo json_encode(['success' => true, 'persons' => $persons]);
            break;

        case 'get_template_fields':
            $templateId = (int)($_GET['template_id'] ?? 0);
            if (!$templateId) throw new Exception('Template ID required');
            
            $template = dbFetchOne("SELECT * FROM roc_templates WHERE id = ?", [$templateId]);
            if (!$template) throw new Exception('Template not found');
            
            $fields = dbFetchAll("SELECT * FROM roc_template_fields WHERE template_id = ? ORDER BY sort_order, id", [$templateId]) ?: [];
            
            echo json_encode(['success' => true, 'template' => $template, 'fields' => $fields]);
            break;

        case 'save_document':
            $docId = (int)($_POST['doc_id'] ?? 0);
            $clientId = (int)($_POST['client_id'] ?? 0);
            $templateId = (int)($_POST['template_id'] ?? 0);
            $status = sanitize($_POST['status'] ?? 'DRAFT');
            $portalVisible = (int)($_POST['portal_visible'] ?? 0);
            $documentTitle = sanitize($_POST['document_title'] ?? '');
            $resolutionNumber = sanitize($_POST['resolution_number'] ?? '');
            $meetingDate = sanitize($_POST['meeting_date'] ?? '') ?: null;
            $contentHtml = $_POST['content_html'] ?? '';
            $fieldValuesJson = $_POST['field_values_json'] ?? '{}';
            $userId = $_SESSION['user_id'] ?? 0;
            
            if (!$clientId || !$templateId) throw new Exception('Client and Template required');
            
            if ($docId) {
                dbExecute("UPDATE roc_generated_documents SET 
                    document_title = ?, resolution_number = ?, meeting_date = ?, content_html = ?, 
                    field_values_json = ?, status = ?, portal_visible = ?, updated_at = NOW()
                    WHERE id = ?", 
                    [$documentTitle, $resolutionNumber, $meetingDate, $contentHtml, $fieldValuesJson, $status, $portalVisible, $docId]
                );
                echo json_encode(['success' => true, 'id' => $docId, 'message' => 'Document updated']);
            } else {
                dbExecute("INSERT INTO roc_generated_documents 
                    (client_id, template_id, document_title, resolution_number, meeting_date, content_html, field_values_json, status, portal_visible, generated_by, created_at, updated_at)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())",
                    [$clientId, $templateId, $documentTitle, $resolutionNumber, $meetingDate, $contentHtml, $fieldValuesJson, $status, $portalVisible, $userId]
                );
                $newId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                echo json_encode(['success' => true, 'id' => $newId, 'message' => 'Document created']);
            }
            break;

        case 'delete_document':
            $id = (int)($_GET['id'] ?? 0);
            if (!$id) throw new Exception('Document ID required');
            dbExecute("DELETE FROM roc_generated_documents WHERE id = ?", [$id]);
            echo json_encode(['success' => true]);
            break;

        case 'update_doc_status':
            $id = (int)($_GET['id'] ?? 0);
            $status = sanitize($_GET['status'] ?? '');
            if (!$id || !in_array($status, ['DRAFT', 'FINAL', 'SIGNED', 'FILED'])) throw new Exception('Invalid parameters');
            dbExecute("UPDATE roc_generated_documents SET status = ?, updated_at = NOW() WHERE id = ?", [$status, $id]);
            echo json_encode(['success' => true]);
            break;

        case 'toggle_portal':
            $id = (int)($_GET['id'] ?? 0);
            $visible = (int)($_GET['visible'] ?? 0);
            if (!$id) throw new Exception('Document ID required');
            dbExecute("UPDATE roc_generated_documents SET portal_visible = ?, updated_at = NOW() WHERE id = ?", [$visible, $id]);
            echo json_encode(['success' => true]);
            break;

        case 'duplicate_document':
            $id = (int)($_GET['id'] ?? 0);
            if (!$id) throw new Exception('Document ID required');
            $doc = dbFetchOne("SELECT * FROM roc_generated_documents WHERE id = ?", [$id]);
            if (!$doc) throw new Exception('Document not found');
            $userId = $_SESSION['user_id'] ?? 0;
            
            dbExecute("INSERT INTO roc_generated_documents 
                (client_id, template_id, document_title, resolution_number, meeting_date, content_html, field_values_json, status, portal_visible, generated_by, created_at, updated_at)
                VALUES (?, ?, ?, ?, ?, ?, ?, 'DRAFT', 0, ?, NOW(), NOW())",
                [$doc['client_id'], $doc['template_id'], $doc['document_title'] . ' (Copy)', '', null, $doc['content_html'], $doc['field_values_json'], $userId]
            );
            $newId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
            echo json_encode(['success' => true, 'new_id' => $newId]);
            break;

        case 'save_template':
            $id = (int)($_POST['id'] ?? 0);
            $name = sanitize($_POST['name'] ?? '');
            $code = sanitize($_POST['code'] ?? '');
            $category = sanitize($_POST['category'] ?? 'RESOLUTION');
            $subCategory = sanitize($_POST['sub_category'] ?? '');
            $description = sanitize($_POST['description'] ?? '');
            $contentHtml = $_POST['content_html'] ?? '';
            $applicableEntityTypes = sanitize($_POST['applicable_entity_types'] ?? '');
            $isActive = (int)($_POST['is_active'] ?? 1);
            $sortOrder = (int)($_POST['sort_order'] ?? 0);
            
            if (!$name || !$code) throw new Exception('Name and Code required');
            
            if ($id) {
                dbExecute("UPDATE roc_templates SET 
                    name = ?, code = ?, category = ?, sub_category = ?, description = ?, content_html = ?, 
                    applicable_entity_types = ?, is_active = ?, sort_order = ?, updated_at = NOW()
                    WHERE id = ?",
                    [$name, $code, $category, $subCategory, $description, $contentHtml, $applicableEntityTypes, $isActive, $sortOrder, $id]
                );
                echo json_encode(['success' => true, 'id' => $id]);
            } else {
                dbExecute("INSERT INTO roc_templates 
                    (name, code, category, sub_category, description, content_html, applicable_entity_types, is_active, sort_order, created_at, updated_at)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())",
                    [$name, $code, $category, $subCategory, $description, $contentHtml, $applicableEntityTypes, $isActive, $sortOrder]
                );
                $newId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                echo json_encode(['success' => true, 'id' => $newId]);
            }
            break;

        case 'save_template_fields':
            $templateId = (int)($_POST['template_id'] ?? 0);
            $fields = json_decode($_POST['fields'] ?? '[]', true);
            if (!$templateId) throw new Exception('Template ID required');
            
            dbExecute("DELETE FROM roc_template_fields WHERE template_id = ?", [$templateId]);
            
            $order = 1;
            foreach ($fields as $f) {
                dbExecute("INSERT INTO roc_template_fields 
                    (template_id, field_key, field_label, field_type, source_table, source_column, options_json, is_required, sort_order)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    [$templateId, $f['field_key'], $f['field_label'], $f['field_type'] ?? 'MANUAL', 
                     $f['source_table'] ?? null, $f['source_column'] ?? null, $f['options_json'] ?? null, 
                     $f['is_required'] ?? 0, $order++]
                );
            }
            echo json_encode(['success' => true]);
            break;

        case 'delete_template':
            $id = (int)($_GET['id'] ?? 0);
            if (!$id) throw new Exception('Template ID required');
            $docCount = dbFetchOne("SELECT COUNT(*) as cnt FROM roc_generated_documents WHERE template_id = ?", [$id])['cnt'] ?? 0;
            if ($docCount > 0) throw new Exception("Cannot delete: $docCount documents use this template");
            dbExecute("DELETE FROM roc_template_fields WHERE template_id = ?", [$id]);
            dbExecute("DELETE FROM roc_templates WHERE id = ?", [$id]);
            echo json_encode(['success' => true]);
            break;

        default:
            throw new Exception('Unknown action');
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
