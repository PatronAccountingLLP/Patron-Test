<?php
/**
 * PATRON - CLIENT PORTAL v10
 * Complete fixed version with all features
 * Fixes: certificate upload, document upload, add person, service buttons
 */

require_once '../includes/db.php';

$token = sanitize($_GET['token'] ?? '');
$activeTab = $_GET['tab'] ?? 'services';

if (!$token) {
    die('<div style="text-align:center;padding:50px;font-family:sans-serif;"><h1>Invalid Link</h1><p>Please use the link provided by your CA.</p></div>');
}

$client = dbFetchOne("SELECT * FROM clients WHERE portal_token = ?", [$token]);

if (!$client) {
    $request = dbFetchOne("SELECT client_id FROM service_requests WHERE form_token = ? AND deleted_at IS NULL", [$token]);
    if ($request) {
        $client = dbFetchOne("SELECT * FROM clients WHERE id = ?", [$request['client_id']]);
    }
}

if (!$client) {
    die('<div style="text-align:center;padding:50px;font-family:sans-serif;"><h1>Invalid Link</h1><p>This link is invalid or has expired.</p></div>');
}

$clientId = $client['id'];
$clientName = $client['name'];
$uploadMessage = '';
$uploadError = '';

// Get company settings
$companyName = 'PATRON';
$companyPhone = '';
$companyEmail = '';
try {
    $settings = dbFetchAll("SELECT setting_key, setting_value FROM settings WHERE setting_key IN ('company_name', 'company_phone', 'company_email')");
    foreach ($settings as $s) {
        if ($s['setting_key'] === 'company_name') $companyName = $s['setting_value'];
        if ($s['setting_key'] === 'company_phone') $companyPhone = $s['setting_value'];
        if ($s['setting_key'] === 'company_email') $companyEmail = $s['setting_value'];
    }
} catch (Exception $e) {}

// Get client team assignment
$clientTeam = null;
try {
    $clientTeam = dbFetchOne("
        SELECT ct.*,
               e1.display_name as executor_1_name, e1.mobile as executor_1_phone, e1.email as executor_1_email,
               e2.display_name as executor_2_name, e2.mobile as executor_2_phone, e2.email as executor_2_email,
               r.display_name as reviewer_name, r.mobile as reviewer_phone, r.email as reviewer_email,
               m.display_name as manager_name, m.mobile as manager_phone, m.email as manager_email
        FROM client_team ct
        LEFT JOIN users e1 ON ct.executor_1_id = e1.id
        LEFT JOIN users e2 ON ct.executor_2_id = e2.id
        LEFT JOIN users r ON ct.reviewer_id = r.id
        LEFT JOIN users m ON ct.manager_id = m.id
        WHERE ct.client_id = ?
    ", [$clientId]);
} catch (Exception $e) {}

// Get compliance data for client portal - COMPLETE HISTORY
$complianceEntries = [];
$complianceByType = []; // Grouped by compliance_type_id
$totalCompliances = 0;
$pendingCompliances = 0;
$complianceRequirements = []; // All mapped compliances

// Calculate current FY (outside try block for template access)
$currentMonth = (int)date('n');
$currentYear = (int)date('Y');
$currentFY = $currentMonth >= 4 ? $currentYear : $currentYear - 1;
$selectedFY = isset($_GET['fy']) ? (int)$_GET['fy'] : $currentFY;
$availableFYs = [$currentFY]; // Default to current FY
$today = date('Y-m-d');

try {
    // Get all FYs that have data for this client
    $fyData = dbFetchAll("
        SELECT DISTINCT 
            CASE WHEN MONTH(period_start) >= 4 THEN YEAR(period_start) ELSE YEAR(period_start) - 1 END as fy
        FROM compliance_tracker 
        WHERE client_id = ? 
        ORDER BY fy DESC
    ", [$clientId]) ?: [];
    
    if (!empty($fyData)) {
        $availableFYs = [];
        foreach ($fyData as $f) {
            $availableFYs[] = (int)$f['fy'];
        }
    }
    // Ensure current FY is in the list
    if (!in_array($currentFY, $availableFYs)) {
        array_unshift($availableFYs, $currentFY);
    }
    if (!in_array($selectedFY, $availableFYs)) {
        $selectedFY = $availableFYs[0] ?? $currentFY;
    }
    
    $fyStartDate = "$selectedFY-04-01";
    $fyEndDate = ($selectedFY + 1) . "-03-31";
    
    // Get ALL compliance entries for this client for selected FY
    $complianceEntries = dbFetchAll("
        SELECT ctr.*, ct.name as compliance_name, ct.code, ct.category, ct.icon, ct.color, ct.frequency,
               ct.id as type_id
        FROM compliance_tracker ctr
        JOIN compliance_types ct ON ctr.compliance_type_id = ct.id
        WHERE ctr.client_id = ? 
        AND ct.deleted_at IS NULL
        AND ctr.period_start >= ? AND ctr.period_start <= ?
        ORDER BY ct.frequency, ct.sort_order, ct.name, ctr.period_start ASC
    ", [$clientId, $fyStartDate, $fyEndDate]) ?: [];
    
    // Group by compliance type
    foreach ($complianceEntries as $ce) {
        $typeId = $ce['type_id'];
        if (!isset($complianceByType[$typeId])) {
            $complianceByType[$typeId] = [
                'name' => $ce['compliance_name'],
                'code' => $ce['code'],
                'category' => $ce['category'],
                'frequency' => $ce['frequency'],
                'icon' => $ce['icon'],
                'color' => $ce['color'],
                'entries' => [],
                'stats' => ['total' => 0, 'filed' => 0, 'pending' => 0, 'overdue' => 0]
            ];
        }
        $complianceByType[$typeId]['entries'][] = $ce;
        $complianceByType[$typeId]['stats']['total']++;
        
        $status = strtoupper(trim($ce['status'] ?? 'NOT_STARTED'));
        if (in_array($status, ['FILED', 'FILED_LATE'])) {
            $complianceByType[$typeId]['stats']['filed']++;
        } elseif ($ce['due_date'] < $today && !in_array($status, ['NOT_APPLICABLE'])) {
            $complianceByType[$typeId]['stats']['overdue']++;
            $pendingCompliances++;
        } elseif (!in_array($status, ['NOT_APPLICABLE'])) {
            $complianceByType[$typeId]['stats']['pending']++;
            if ($ce['due_date'] <= date('Y-m-d', strtotime('+30 days'))) {
                $pendingCompliances++;
            }
        }
    }
    
    $totalCompliances = count($complianceEntries);
    
    // Get compliance requirements (all mapped compliances) for summary section
    $complianceRequirements = dbFetchAll("
        SELECT ct.id, ct.name, ct.code, ct.category, ct.frequency, ct.description, ct.due_day, ct.due_month_offset, ct.icon, ct.color
        FROM client_compliances cc
        JOIN compliance_types ct ON cc.compliance_type_id = ct.id
        WHERE cc.client_id = ? AND cc.is_active = 1 AND ct.deleted_at IS NULL
        ORDER BY ct.frequency, ct.category, ct.sort_order
    ", [$clientId]) ?: [];
    
} catch (Exception $e) {
    // Log error if needed
}

// Get ROC documents for client portal (board resolutions, minutes, etc.)
$rocDocuments = [];
$pendingSignatures = 0;
try {
    // Check if ROC tables exist first
    $tableCheck = dbFetchOne("SELECT 1 FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = 'roc_generated_documents' LIMIT 1");
    if ($tableCheck) {
        $rocDocuments = dbFetchAll("
            SELECT d.*, t.name as template_name, t.category, t.code
            FROM roc_generated_documents d
            JOIN roc_templates t ON t.id = d.template_id
            WHERE d.client_id = ? AND d.portal_visible = 1
            ORDER BY d.created_at DESC
        ", [$clientId]) ?: [];
        
        // Count documents needing signature
        foreach ($rocDocuments as $rd) {
            if ($rd['status'] === 'FINAL' && empty($rd['signed_file_path'])) {
                $pendingSignatures++;
            }
        }
    }
} catch (Exception $e) {
    // Tables might not exist yet - that's OK
    $rocDocuments = [];
}

$entityLabels = [
    'PVT_LTD' => 'Private Limited', 'PUBLIC_LTD' => 'Public Limited', 'OPC' => 'One Person Company', 'LLP' => 'LLP',
    'PARTNERSHIP' => 'Partnership', 'PROPRIETORSHIP' => 'Proprietorship', 'HUF' => 'HUF', 'TRUST' => 'Trust'
];

// Entity-aware terminology
$entityType = $client['entity_type'] ?? 'PVT_LTD';
$entityTerms = [
    'PROPRIETORSHIP' => ['entity_term' => 'Business', 'people_term' => 'Proprietor', 'people_singular' => 'Proprietor', 'doc_term' => 'Business Documents', 'show_people_section' => true, 'can_add_person' => false],
    'PARTNERSHIP' => ['entity_term' => 'Firm', 'people_term' => 'Partners', 'people_singular' => 'Partner', 'doc_term' => 'Firm Documents', 'show_people_section' => true, 'can_add_person' => true],
    'LLP' => ['entity_term' => 'LLP', 'people_term' => 'Partners', 'people_singular' => 'Partner', 'doc_term' => 'LLP Documents', 'show_people_section' => true, 'can_add_person' => true],
    'PVT_LTD' => ['entity_term' => 'Company', 'people_term' => 'Directors & Shareholders', 'people_singular' => 'Director', 'doc_term' => 'Company Documents', 'show_people_section' => true, 'can_add_person' => true],
    'PUBLIC_LTD' => ['entity_term' => 'Company', 'people_term' => 'Directors & Shareholders', 'people_singular' => 'Director', 'doc_term' => 'Company Documents', 'show_people_section' => true, 'can_add_person' => true],
    'OPC' => ['entity_term' => 'Company', 'people_term' => 'Director & Nominee', 'people_singular' => 'Director', 'doc_term' => 'Company Documents', 'show_people_section' => true, 'can_add_person' => true],
    'HUF' => ['entity_term' => 'HUF', 'people_term' => 'Members', 'people_singular' => 'Member', 'doc_term' => 'HUF Documents', 'show_people_section' => true, 'can_add_person' => true],
    'TRUST' => ['entity_term' => 'Trust', 'people_term' => 'Trustees', 'people_singular' => 'Trustee', 'doc_term' => 'Trust Documents', 'show_people_section' => true, 'can_add_person' => true],
];
$terms = $entityTerms[$entityType] ?? $entityTerms['PVT_LTD'];

// Service button labels based on entity
$companyServiceLabel = $terms['entity_term'] . ' Service';
$personServiceLabel = $terms['people_singular'] . ' Service';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    
    // CREATE COMPANY SERVICE
    if ($action === 'create_service') {
        $serviceId = (int)($_POST['service_id'] ?? 0);
        if ($serviceId) {
            $service = dbFetchOne("SELECT * FROM services WHERE id = ? AND is_active = 1", [$serviceId]);
            if ($service) {
                $year = date('Y');
                $lastReq = dbFetchOne("SELECT request_number FROM service_requests WHERE request_number LIKE ? ORDER BY id DESC LIMIT 1", ["REQ-$year-%"]);
                $newNum = $lastReq ? str_pad((int)substr($lastReq['request_number'], -4) + 1, 4, '0', STR_PAD_LEFT) : '0001';
                $requestNumber = "REQ-$year-$newNum";
                $formToken = bin2hex(random_bytes(32));
                
                dbExecute("INSERT INTO service_requests (client_id, service_id, request_number, form_token, status, created_at) VALUES (?, ?, ?, ?, 'NEW', NOW())", 
                    [$clientId, $serviceId, $requestNumber, $formToken]);
                $newRequestId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                
                try {
                    $docs = dbFetchAll("SELECT document_type_id, is_required FROM service_document_requirements WHERE service_id = ?", [$serviceId]);
                    foreach ($docs as $d) {
                        dbExecute("INSERT INTO request_documents (service_request_id, document_type_id, is_required, status) VALUES (?, ?, ?, 'PENDING')", [$newRequestId, $d['document_type_id'], $d['is_required']]);
                    }
                } catch (Exception $e) {}
                
                try {
                    $fields = dbFetchAll("SELECT field_id, is_required, display_order FROM service_field_requirements WHERE service_id = ? ORDER BY display_order", [$serviceId]);
                    foreach ($fields as $f) {
                        dbExecute("INSERT INTO request_info_fields (service_request_id, info_field_id, is_required, display_order) VALUES (?, ?, ?, ?)", [$newRequestId, $f['field_id'], $f['is_required'], $f['display_order']]);
                    }
                } catch (Exception $e) {}
                
                $uploadMessage = 'Service request created! #' . $requestNumber;
                $activeTab = 'services';
            }
        }
    }
    
    // CREATE PERSON SERVICE
    if ($action === 'create_person_service') {
        $serviceId = (int)($_POST['service_id'] ?? 0);
        $personId = (int)($_POST['person_id'] ?? 0);
        
        if ($serviceId && $personId) {
            $personCheck = dbFetchOne("SELECT person_id FROM client_persons WHERE person_id = ? AND client_id = ?", [$personId, $clientId]);
            $service = dbFetchOne("SELECT * FROM services WHERE id = ? AND is_active = 1", [$serviceId]);
            
            if ($personCheck && $service) {
                $year = date('Y');
                $lastReq = dbFetchOne("SELECT request_number FROM service_requests WHERE request_number LIKE ? ORDER BY id DESC LIMIT 1", ["PER-$year-%"]);
                $newNum = $lastReq ? str_pad((int)substr($lastReq['request_number'], -4) + 1, 4, '0', STR_PAD_LEFT) : '0001';
                $requestNumber = "PER-$year-$newNum";
                $formToken = bin2hex(random_bytes(32));
                
                dbExecute("INSERT INTO service_requests (client_id, person_id, service_id, request_number, form_token, status, created_at) VALUES (?, ?, ?, ?, ?, 'NEW', NOW())", 
                    [$clientId, $personId, $serviceId, $requestNumber, $formToken]);
                $newRequestId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                
                try {
                    $docs = dbFetchAll("SELECT document_type_id, is_required FROM service_document_requirements WHERE service_id = ?", [$serviceId]);
                    foreach ($docs as $d) {
                        dbExecute("INSERT INTO request_documents (service_request_id, document_type_id, is_required, status) VALUES (?, ?, ?, 'PENDING')", [$newRequestId, $d['document_type_id'], $d['is_required']]);
                    }
                } catch (Exception $e) {}
                
                try {
                    $fields = dbFetchAll("SELECT field_id, is_required, display_order FROM service_field_requirements WHERE service_id = ? ORDER BY display_order", [$serviceId]);
                    foreach ($fields as $f) {
                        dbExecute("INSERT INTO request_info_fields (service_request_id, info_field_id, is_required, display_order) VALUES (?, ?, ?, ?)", [$newRequestId, $f['field_id'], $f['is_required'], $f['display_order']]);
                    }
                } catch (Exception $e) {}
                
                $personName = dbFetchOne("SELECT full_name FROM persons_new WHERE id = ?", [$personId])['full_name'] ?? 'Person';
                $uploadMessage = "Service request created for $personName! #$requestNumber";
            }
        }
        $activeTab = 'services';
    }
    
    // ADD NEW PERSON
    if ($action === 'add_person') {
        $fullName = sanitize($_POST['full_name'] ?? '');
        $panNumber = strtoupper(sanitize($_POST['pan_number'] ?? ''));
        $mobile = sanitize($_POST['mobile'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $roleType = sanitize($_POST['role_type'] ?? 'DIRECTOR');
        $din = sanitize($_POST['din'] ?? '');
        $dpin = sanitize($_POST['dpin'] ?? '');
        
        if ($fullName) {
            // Check if PAN already exists
            $existingPerson = null;
            if ($panNumber) {
                $existingPerson = dbFetchOne("SELECT id FROM persons_new WHERE pan_number = ? AND deleted_at IS NULL", [$panNumber]);
            }
            
            if ($existingPerson) {
                // Link existing person to this client
                $alreadyLinked = dbFetchOne("SELECT id FROM client_persons WHERE person_id = ? AND client_id = ?", [$existingPerson['id'], $clientId]);
                if (!$alreadyLinked) {
                    dbExecute("INSERT INTO client_persons (client_id, person_id, role_type) VALUES (?, ?, ?)", [$clientId, $existingPerson['id'], $roleType]);
                    $uploadMessage = "$fullName linked to your account!";
                } else {
                    $uploadError = "This person is already linked to your account.";
                }
            } else {
                // Create new person
                dbExecute("INSERT INTO persons_new (full_name, pan_number, mobile, email, din, dpin, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, 'ACTIVE', NOW(), NOW())", 
                    [$fullName, $panNumber ?: null, $mobile ?: null, $email ?: null, $din ?: null, $dpin ?: null]);
                $newPersonId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                
                // Link to client
                dbExecute("INSERT INTO client_persons (client_id, person_id, role_type) VALUES (?, ?, ?)", [$clientId, $newPersonId, $roleType]);
                
                // Set KYC due date if DIN is provided
                if ($din) {
                    $kycDue = date('Y') . '-09-30';
                    if (strtotime($kycDue) < time()) $kycDue = (date('Y') + 1) . '-09-30';
                    dbExecute("UPDATE persons_new SET din_kyc_status = 'PENDING', din_kyc_due_date = ? WHERE id = ?", [$kycDue, $newPersonId]);
                }
                
                $uploadMessage = "$fullName added successfully!";
            }
        } else {
            $uploadError = "Full name is required.";
        }
        $activeTab = 'directors';
    }
    
    // UPDATE PERSON INFO
    if ($action === 'update_person') {
        $personId = (int)($_POST['person_id'] ?? 0);
        $field = sanitize($_POST['field'] ?? '');
        $value = sanitize($_POST['value'] ?? '');
        
        // Verify person belongs to this client
        $check = dbFetchOne("SELECT person_id FROM client_persons WHERE person_id = ? AND client_id = ?", [$personId, $clientId]);
        
        if ($check && $field) {
            // Allowed fields to update
            $allowedFields = ['mobile', 'email', 'pan_number', 'din', 'dpin', 'father_name', 'dob', 
                              'present_address_line1', 'present_city', 'present_state', 'present_pincode'];
            
            if (in_array($field, $allowedFields)) {
                // Special validation
                if ($field === 'pan_number' && $value) {
                    $value = strtoupper($value);
                    if (!preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]$/', $value)) {
                        $uploadError = 'Invalid PAN format. Use: ABCDE1234F';
                        $activeTab = 'directors';
                        header('Location: portal.php?token=' . urlencode($token) . '&tab=' . $activeTab . '&err=' . urlencode($uploadError));
                        exit;
                    }
                }
                if ($field === 'mobile' && $value) {
                    $value = preg_replace('/[^0-9]/', '', $value);
                    if (!preg_match('/^[6-9][0-9]{9}$/', $value)) {
                        $uploadError = 'Invalid mobile number. Enter 10 digits starting with 6-9';
                        $activeTab = 'directors';
                        header('Location: portal.php?token=' . urlencode($token) . '&tab=' . $activeTab . '&err=' . urlencode($uploadError));
                        exit;
                    }
                }
                if ($field === 'din' && $value) {
                    if (!preg_match('/^[0-9]{8}$/', $value)) {
                        $uploadError = 'Invalid DIN. Must be 8 digits';
                        $activeTab = 'directors';
                        header('Location: portal.php?token=' . urlencode($token) . '&tab=' . $activeTab . '&err=' . urlencode($uploadError));
                        exit;
                    }
                }
                
                dbExecute("UPDATE persons_new SET $field = ?, updated_at = NOW() WHERE id = ?", [$value ?: null, $personId]);
                $uploadMessage = 'Information updated!';
            }
        }
        $activeTab = 'directors';
    }
    
    // CANCEL SERVICE
    if ($action === 'cancel_service') {
        $requestId = (int)($_POST['request_id'] ?? 0);
        $reason = sanitize($_POST['cancel_reason'] ?? '');
        $req = dbFetchOne("SELECT id, status FROM service_requests WHERE id = ? AND client_id = ? AND deleted_at IS NULL", [$requestId, $clientId]);
        if ($req && in_array($req['status'], ['NEW', 'ASSIGNED', 'DOCUMENTS_PENDING', 'INFO_PENDING', 'WAITING_DOCS'])) {
            dbExecute("UPDATE service_requests SET status = 'CANCELLED', notes = CONCAT(IFNULL(notes, ''), '\n[Cancelled: " . date('d M Y') . "] ', ?) WHERE id = ?", [$reason, $requestId]);
            $uploadMessage = 'Service request cancelled.';
        } else {
            $uploadError = 'Cannot cancel at this stage.';
        }
        $activeTab = 'services';
    }
    
    // UPLOAD REQUEST DOCUMENT
    if ($action === 'upload_document') {
        $requestDocId = (int)($_POST['request_document_id'] ?? 0);
        $file = $_FILES['document'] ?? null;
        if ($requestDocId && $file && $file['error'] === UPLOAD_ERR_OK) {
            $allowed = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
            if (in_array($file['type'], $allowed) && $file['size'] <= 10485760) {
                $dir = '../uploads/documents/' . date('Y/m/');
                if (!is_dir($dir)) mkdir($dir, 0755, true);
                $path = $dir . 'doc_' . $clientId . '_' . $requestDocId . '_' . uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                if (move_uploaded_file($file['tmp_name'], $path)) {
                    // Save to client_documents
                    $rd = dbFetchOne("SELECT document_type_id, service_request_id FROM request_documents WHERE id = ?", [$requestDocId]);
                    if ($rd) {
                        dbExecute("INSERT INTO client_documents (client_id, document_type_id, file_path, original_filename, file_size, status, created_at) VALUES (?, ?, ?, ?, ?, 'UPLOADED', NOW())", 
                            [$clientId, $rd['document_type_id'], $path, $file['name'], $file['size']]);
                        $docId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                        dbExecute("UPDATE request_documents SET status = 'UPLOADED', file_path = ?, client_document_id = ?, uploaded_at = NOW() WHERE id = ?", [$path, $docId, $requestDocId]);
                    }
                    $uploadMessage = 'Document uploaded!';
                }
            } else {
                $uploadError = 'Invalid file. PDF/JPG/PNG only, max 10MB.';
            }
        }
        $activeTab = 'documents';
    }
    
    // UPLOAD CERTIFICATE
    if ($action === 'upload_certificate') {
        $certTypeId = (int)($_POST['certificate_type_id'] ?? 0);
        $certNumber = sanitize($_POST['certificate_number'] ?? '');
        $issueDate = sanitize($_POST['issue_date'] ?? '');
        $expiryDate = sanitize($_POST['expiry_date'] ?? '');
        $file = $_FILES['certificate_file'] ?? null;
        if ($file && $file['error'] === UPLOAD_ERR_OK) {
            $allowed = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
            if (in_array($file['type'], $allowed) && $file['size'] <= 10485760) {
                $dir = '../uploads/certificates/' . date('Y/m/');
                if (!is_dir($dir)) mkdir($dir, 0755, true);
                $filename = 'cert_' . $clientId . '_' . uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                $fullPath = $dir . $filename;
                if (move_uploaded_file($file['tmp_name'], $fullPath)) {
                    // Save path relative to patron folder (without ../ prefix)
                    $dbPath = 'uploads/certificates/' . date('Y/m/') . $filename;
                    // Insert into client_certificates (main certificate table)
                    dbExecute("INSERT INTO client_certificates (client_id, certificate_type_id, certificate_number, file_path, original_filename, issue_date, expiry_date, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, 'ACTIVE', NOW())", 
                        [$clientId, $certTypeId ?: null, $certNumber ?: null, $dbPath, $file['name'], $issueDate ?: null, $expiryDate ?: null]);
                    $uploadMessage = 'Certificate uploaded!';
                }
            } else {
                $uploadError = 'Invalid file. PDF/JPG/PNG only, max 10MB.';
            }
        }
        $activeTab = 'certificates';
    }
    
    // UPLOAD ROC SIGNED COPY
    if ($action === 'upload_roc_signed') {
        $rocId = (int)($_POST['roc_id'] ?? 0);
        $file = $_FILES['signed_file'] ?? null;
        
        // Check if ROC table exists
        $tableCheck = dbFetchOne("SELECT 1 FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = 'roc_generated_documents' LIMIT 1");
        
        if ($tableCheck) {
            // Verify ROC document belongs to this client and is portal visible
            $rocDoc = dbFetchOne("SELECT id FROM roc_generated_documents WHERE id = ? AND client_id = ? AND portal_visible = 1", [$rocId, $clientId]);
        
        if ($rocDoc && $file && $file['error'] === UPLOAD_ERR_OK) {
            $allowed = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
            if (in_array($file['type'], $allowed) && $file['size'] <= 10485760) {
                $dir = '../uploads/roc_signed/' . date('Y/m/');
                if (!is_dir($dir)) mkdir($dir, 0755, true);
                $filename = 'roc_signed_' . $rocId . '_' . uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                $fullPath = $dir . $filename;
                if (move_uploaded_file($file['tmp_name'], $fullPath)) {
                    $dbPath = 'uploads/roc_signed/' . date('Y/m/') . $filename;
                    dbExecute("UPDATE roc_generated_documents SET signed_file_path = ?, signature_status = 'SIGNED', status = 'SIGNED', signed_at = NOW(), updated_at = NOW() WHERE id = ?", 
                        [$dbPath, $rocId]);
                    $uploadMessage = 'Signed copy uploaded successfully!';
                }
            } else {
                $uploadError = 'Invalid file. PDF/JPG/PNG only, max 10MB.';
            }
        } else {
            $uploadError = 'Document not found or file missing.';
        }
        } // end if tableCheck
        $activeTab = 'resolutions';
    }
    
    // UPLOAD PERSON DOCUMENT
    if ($action === 'upload_person_doc') {
        $personId = (int)($_POST['person_id'] ?? 0);
        $docCode = sanitize($_POST['doc_code'] ?? '');
        $file = $_FILES['document'] ?? null;
        $check = dbFetchOne("SELECT person_id FROM client_persons WHERE person_id = ? AND client_id = ?", [$personId, $clientId]);
        if ($check && $docCode && $file && $file['error'] === UPLOAD_ERR_OK) {
            $allowed = ['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'];
            if (in_array($file['type'], $allowed) && $file['size'] <= 10485760) {
                $dir = '../uploads/person_docs/' . date('Y/m/');
                if (!is_dir($dir)) mkdir($dir, 0755, true);
                $path = $dir . 'person_' . $personId . '_' . $docCode . '_' . uniqid() . '.' . strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                if (move_uploaded_file($file['tmp_name'], $path)) {
                    $dt = dbFetchOne("SELECT id FROM document_types WHERE code = ?", [$docCode]);
                    $docTypeId = $dt['id'] ?? null;
                    
                    // If document type doesn't exist, create it
                    if (!$docTypeId) {
                        $docName = str_replace('_', ' ', ucwords(strtolower($docCode)));
                        dbExecute("INSERT INTO document_types (name, code, category, is_active, created_at) VALUES (?, ?, 'Person', 1, NOW())", [$docName, $docCode]);
                        $docTypeId = dbFetchOne("SELECT LAST_INSERT_ID() as id")['id'];
                    }
                    
                    // WORKAROUND: Don't use person_id in client_documents due to FK constraint
                    // Instead, store in notes field with person reference
                    $personInfo = "PERSON_ID:$personId|DOC:$docCode";
                    
                    // Check existing by notes (person reference)
                    $existing = dbFetchOne("SELECT id FROM client_documents WHERE client_id = ? AND notes LIKE ? AND document_type_id = ?", 
                        [$clientId, "PERSON_ID:$personId|%", $docTypeId]);
                    
                    if ($existing) {
                        dbExecute("UPDATE client_documents SET file_path = ?, original_filename = ?, file_size = ?, status = 'UPLOADED', updated_at = NOW() WHERE id = ?", 
                            [$path, $file['name'], $file['size'], $existing['id']]);
                    } else {
                        // Insert without person_id, use notes to track
                        dbExecute("INSERT INTO client_documents (client_id, document_type_id, file_path, original_filename, file_size, status, notes, created_at) VALUES (?, ?, ?, ?, ?, 'UPLOADED', ?, NOW())", 
                            [$clientId, $docTypeId, $path, $file['name'], $file['size'], $personInfo]);
                    }
                    $uploadMessage = 'Document uploaded!';
                }
            }
        }
        $activeTab = 'documents';
    }
    
    // REQUEST CUSTOM SERVICE (Other)
    if ($action === 'request_custom_service') {
        $serviceName = sanitize($_POST['custom_service_name'] ?? '');
        $serviceDesc = sanitize($_POST['custom_service_desc'] ?? '');
        if ($serviceName) {
            $year = date('Y');
            $lastReq = dbFetchOne("SELECT request_number FROM service_requests WHERE request_number LIKE ? ORDER BY id DESC LIMIT 1", ["REQ-$year-%"]);
            $newNum = $lastReq ? str_pad((int)substr($lastReq['request_number'], -4) + 1, 4, '0', STR_PAD_LEFT) : '0001';
            $requestNumber = "REQ-$year-$newNum";
            $formToken = bin2hex(random_bytes(32));
            
            // Find or create "Other" service
            $otherService = dbFetchOne("SELECT id FROM services WHERE code = 'OTHER' AND deleted_at IS NULL LIMIT 1");
            
            if (!$otherService) {
                // Create "Other" service if it doesn't exist
                dbExecute("INSERT INTO services (name, code, category, description, service_level, is_active, created_at) VALUES ('Other / Custom Request', 'OTHER', 'Other', 'Custom service request', 'company', 1, NOW())");
                $otherService = dbFetchOne("SELECT id FROM services WHERE code = 'OTHER' LIMIT 1");
            }
            
            $serviceId = $otherService['id'];
            $notes = "CUSTOM SERVICE REQUEST\n━━━━━━━━━━━━━━━━━━━━━━\nRequested Service: $serviceName\n\nDescription:\n$serviceDesc\n━━━━━━━━━━━━━━━━━━━━━━";
            
            dbExecute("INSERT INTO service_requests (client_id, service_id, request_number, form_token, status, notes, created_at) VALUES (?, ?, ?, ?, 'NEW', ?, NOW())", 
                [$clientId, $serviceId, $requestNumber, $formToken, $notes]);
            
            $uploadMessage = "Custom service request submitted! #$requestNumber - Our team will review and contact you shortly.";
        }
        $activeTab = 'services';
    }
    
    // SAVE INFO FIELD
    if ($action === 'save_info') {
        $fieldId = (int)($_POST['field_id'] ?? 0);
        $requestId = (int)($_POST['request_id'] ?? 0);
        $value = sanitize($_POST['field_value'] ?? '');
        if ($fieldId && $requestId) {
            $existing = dbFetchOne("SELECT id FROM request_info_values WHERE service_request_id = ? AND info_field_id = ?", [$requestId, $fieldId]);
            if ($existing) {
                dbExecute("UPDATE request_info_values SET field_value = ?, updated_at = NOW() WHERE id = ?", [$value, $existing['id']]);
            } else {
                dbExecute("INSERT INTO request_info_values (service_request_id, info_field_id, field_value, created_at) VALUES (?, ?, ?, NOW())", [$requestId, $fieldId, $value]);
            }
            $uploadMessage = 'Saved!';
        }
        $activeTab = 'documents';
    }
    
    header('Location: portal.php?token=' . urlencode($token) . '&tab=' . $activeTab . ($uploadMessage ? '&msg=' . urlencode($uploadMessage) : '') . ($uploadError ? '&err=' . urlencode($uploadError) : ''));
    exit;
}

if (isset($_GET['msg'])) $uploadMessage = $_GET['msg'];
if (isset($_GET['err'])) $uploadError = $_GET['err'];

// Fetch all data
$requests = dbFetchAll("
    SELECT sr.*, s.name as service_name, s.category,
           u.display_name as assigned_person, u.email as assigned_email, u.phone as assigned_phone,
           (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status = 'PENDING') as pending_docs,
           (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id) as total_docs,
           (SELECT COUNT(*) FROM request_info_fields rif LEFT JOIN request_info_values riv ON riv.service_request_id = sr.id AND riv.info_field_id = rif.info_field_id WHERE rif.service_request_id = sr.id AND (riv.field_value IS NULL OR riv.field_value = '')) as pending_info,
           (SELECT COUNT(*) FROM request_info_fields WHERE service_request_id = sr.id) as total_info
    FROM service_requests sr JOIN services s ON sr.service_id = s.id LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.client_id = ? AND sr.person_id IS NULL AND sr.deleted_at IS NULL ORDER BY sr.created_at DESC
", [$clientId]) ?: [];

$persons = dbFetchAll("
    SELECT cp.*, p.id as person_id, p.full_name, p.pan_number, p.din, p.dpin, p.mobile, p.email, 
           p.nationality, p.father_name, p.dob, p.gender, p.occupation,
           p.present_address_line1, p.present_city, p.present_state, p.present_pincode, p.dsc_status, p.dsc_expiry_date
    FROM client_persons cp JOIN persons_new p ON cp.person_id = p.id WHERE cp.client_id = ? AND p.deleted_at IS NULL ORDER BY cp.role_type, p.full_name
", [$clientId]) ?: [];

$personDocs = [];
foreach ($persons as $p) {
    // First try: fetch by person_id (if FK is fixed)
    $docs = dbFetchAll("SELECT cd.*, dt.code as doc_code, dt.name as doc_name FROM client_documents cd LEFT JOIN document_types dt ON cd.document_type_id = dt.id WHERE cd.person_id = ? AND cd.deleted_at IS NULL", [$p['person_id']]) ?: [];
    
    // Also fetch by notes field (workaround for FK constraint)
    $docsByNotes = dbFetchAll("SELECT cd.*, dt.code as doc_code, dt.name as doc_name FROM client_documents cd LEFT JOIN document_types dt ON cd.document_type_id = dt.id WHERE cd.client_id = ? AND cd.notes LIKE ? AND cd.deleted_at IS NULL", [$clientId, "PERSON_ID:" . $p['person_id'] . "|%"]) ?: [];
    
    $personDocs[$p['person_id']] = [];
    foreach ($docs as $d) { 
        $code = $d['doc_code'] ?? 'DOC_' . $d['id']; 
        $personDocs[$p['person_id']][$code] = $d; 
    }
    // Merge docs from notes lookup
    foreach ($docsByNotes as $d) {
        // Extract doc code from notes: PERSON_ID:123|DOC:PAN
        if (preg_match('/DOC:(\w+)/', $d['notes'] ?? '', $m)) {
            $code = $m[1];
        } else {
            $code = $d['doc_code'] ?? 'DOC_' . $d['id'];
        }
        if (!isset($personDocs[$p['person_id']][$code])) {
            $personDocs[$p['person_id']][$code] = $d;
        }
    }
}

$requiredPersonDocs = [
    ['code' => 'PAN', 'name' => 'PAN Card'], 
    ['code' => 'AADHAAR', 'name' => 'Aadhaar Card'],
    ['code' => 'PHOTO', 'name' => 'Passport Photo'], 
    ['code' => 'BANK_STATEMENT', 'name' => 'Bank Statement'],
    ['code' => 'SIGNATURE', 'name' => 'Signature']
];

$companyDocs = dbFetchAll("
    SELECT rd.*, dt.name as doc_name, dt.code as doc_code, s.name as service_name, sr.id as request_id,
           cd.file_path, cd.original_filename, cd.status as doc_status
    FROM request_documents rd JOIN document_types dt ON rd.document_type_id = dt.id
    JOIN service_requests sr ON rd.service_request_id = sr.id JOIN services s ON sr.service_id = s.id
    LEFT JOIN client_documents cd ON rd.client_document_id = cd.id
    WHERE sr.client_id = ? AND sr.deleted_at IS NULL AND sr.status NOT IN ('COMPLETED', 'CANCELLED', 'DONE')
    ORDER BY s.name, dt.name
", [$clientId]) ?: [];

// Fetch entity-level documents (documents uploaded for the company, not for persons)
$entityDocuments = dbFetchAll("
    SELECT cd.*, dt.name as doc_name, dt.code as doc_code
    FROM client_documents cd
    JOIN document_types dt ON cd.document_type_id = dt.id
    WHERE cd.client_id = ? AND cd.deleted_at IS NULL AND cd.person_id IS NULL
    ORDER BY cd.created_at DESC
", [$clientId]) ?: [];

$infoFields = dbFetchAll("
    SELECT rif.*, inf.id as info_field_id, inf.name as field_name, inf.code as field_code, inf.field_type, inf.options as field_options, inf.placeholder,
           sr.id as request_id, sr.person_id as request_person_id, s.name as service_name, riv.field_value as current_value,
           p.full_name as person_name, p.email as person_email, p.mobile as person_mobile, p.pan_number as person_pan,
           p.din as person_din, p.dpin as person_dpin, p.dob as person_dob, p.father_name as person_father_name
    FROM request_info_fields rif 
    JOIN information_fields inf ON rif.info_field_id = inf.id
    JOIN service_requests sr ON rif.service_request_id = sr.id 
    JOIN services s ON sr.service_id = s.id
    LEFT JOIN request_info_values riv ON riv.service_request_id = sr.id AND riv.info_field_id = inf.id
    LEFT JOIN persons_new p ON sr.person_id = p.id
    WHERE sr.client_id = ? AND sr.deleted_at IS NULL AND sr.status NOT IN ('COMPLETED', 'CANCELLED', 'DONE')
    ORDER BY s.name, rif.display_order
", [$clientId]) ?: [];

// Smart prefill: Check if value can be auto-filled from existing data
$clientData = [
    'email' => $client['email'] ?? '',
    'mobile' => $client['mobile'] ?? '',
    'pan' => $client['pan'] ?? '',
    'gstin' => $client['gstin'] ?? '',
    'cin' => $client['cin'] ?? '',
    'tan' => $client['tan'] ?? '',
    'address' => $client['registered_address'] ?? ''
];

// Map common field names to data sources
$fieldMappings = [
    'email' => 'email', 'email_id' => 'email', 'email_address' => 'email',
    'mobile' => 'mobile', 'phone' => 'mobile', 'mobile_number' => 'mobile', 'contact' => 'mobile',
    'pan' => 'pan', 'pan_number' => 'pan',
    'gstin' => 'gstin', 'gst' => 'gstin', 'gst_number' => 'gstin',
    'cin' => 'cin', 'cin_number' => 'cin',
    'tan' => 'tan', 'tan_number' => 'tan',
    'din' => 'din', 'din_number' => 'din',
    'dpin' => 'dpin',
    'dob' => 'dob', 'date_of_birth' => 'dob',
    'father_name' => 'father_name', 'fathers_name' => 'father_name'
];

// Process info fields - prefill and deduplicate
$processedInfoFields = [];
$seenFields = []; // Track unique field+value combinations

foreach ($infoFields as &$f) {
    $fieldCode = strtolower(str_replace([' ', '-', '_'], '_', $f['field_code'] ?? $f['field_name'] ?? ''));
    
    // If no current value, try to prefill
    if (empty($f['current_value'])) {
        $prefillValue = null;
        $prefillSource = null;
        
        // Check if this is a person-level request
        if ($f['request_person_id']) {
            // Try person data first
            $personFieldMap = [
                'email' => $f['person_email'],
                'mobile' => $f['person_mobile'],
                'pan' => $f['person_pan'],
                'din' => $f['person_din'],
                'dpin' => $f['person_dpin'],
                'dob' => $f['person_dob'],
                'father_name' => $f['person_father_name']
            ];
            
            foreach ($fieldMappings as $pattern => $dataKey) {
                if (strpos($fieldCode, $pattern) !== false && !empty($personFieldMap[$dataKey])) {
                    $prefillValue = $personFieldMap[$dataKey];
                    $prefillSource = $f['person_name'];
                    break;
                }
            }
        }
        
        // If not prefilled from person, try client data
        if (!$prefillValue) {
            foreach ($fieldMappings as $pattern => $dataKey) {
                if (strpos($fieldCode, $pattern) !== false && !empty($clientData[$dataKey])) {
                    $prefillValue = $clientData[$dataKey];
                    $prefillSource = 'company profile';
                    break;
                }
            }
        }
        
        if ($prefillValue) {
            $f['prefill_value'] = $prefillValue;
            $f['prefill_source'] = $prefillSource;
        }
    }
    
    // Create unique key for deduplication
    $uniqueKey = $f['info_field_id'] . '_' . ($f['request_person_id'] ?? 'company');
    $currentVal = $f['current_value'] ?? $f['prefill_value'] ?? '';
    
    // Only show if not already filled with same value elsewhere, or if empty (needs input)
    if (empty($currentVal) || !isset($seenFields[$uniqueKey])) {
        $seenFields[$uniqueKey] = $currentVal;
        $processedInfoFields[] = $f;
    }
}

// Replace original with processed
$infoFields = $processedInfoFields;

// Certificates
$certificates = [];
try {
    $certs = dbFetchAll("SELECT cc.*, ct.name as type_name FROM client_certificates cc LEFT JOIN certificate_types ct ON cc.certificate_type_id = ct.id WHERE cc.client_id = ? AND cc.deleted_at IS NULL ORDER BY cc.created_at DESC", [$clientId]) ?: [];
    foreach ($certs as $c) {
        $certificates[] = ['name' => $c['type_name'] ?? 'Certificate', 'number' => $c['certificate_number'] ?? null, 'file_path' => $c['file_path'] ?? '', 'original_filename' => $c['original_filename'] ?? '', 'expiry_date' => $c['expiry_date'] ?? null, 'status' => $c['status'] ?? 'ACTIVE', 'created_at' => $c['created_at'] ?? null];
    }
} catch (Exception $e) {}

$certificateTypes = [];
try { $certificateTypes = dbFetchAll("SELECT id, name FROM certificate_types WHERE is_active = 1 AND deleted_at IS NULL ORDER BY name") ?: []; } catch (Exception $e) {}
if (empty($certificateTypes)) {
    $certificateTypes = [['id' => 0, 'name' => 'GST Certificate'], ['id' => 0, 'name' => 'Incorporation Certificate'], ['id' => 0, 'name' => 'PAN Card'], ['id' => 0, 'name' => 'Other']];
}

// Get available services - Company level (or all if service_level not set)
$companyAvailableServices = dbFetchAll("SELECT id, name, category, base_price, description FROM services WHERE is_active = 1 AND deleted_at IS NULL AND (service_level IS NULL OR service_level = '' OR service_level = 'company' OR service_level = 'both') ORDER BY category, name") ?: [];

// Get available services - Person level
$personAvailableServices = dbFetchAll("SELECT id, name, category, base_price, description FROM services WHERE is_active = 1 AND deleted_at IS NULL AND (service_level = 'person' OR service_level = 'both') ORDER BY category, name") ?: [];

// Get person-level service requests
$personRequests = [];
try {
    $personRequests = dbFetchAll("
        SELECT sr.*, s.name as service_name, s.category, p.full_name as person_name, p.id as person_id,
               u.display_name as assigned_person,
               (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status = 'PENDING') as pending_docs,
               (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id) as total_docs
        FROM service_requests sr 
        JOIN services s ON sr.service_id = s.id 
        JOIN persons_new p ON sr.person_id = p.id
        LEFT JOIN users u ON sr.assigned_to = u.id
        WHERE sr.person_id IN (SELECT person_id FROM client_persons WHERE client_id = ?)
        AND sr.deleted_at IS NULL
        ORDER BY sr.created_at DESC
    ", [$clientId]) ?: [];
} catch (Exception $e) {}

// Stats
$activeServices = count(array_filter($requests, fn($r) => !in_array($r['status'], ['COMPLETED', 'CANCELLED', 'DONE'])));
$activePersonServices = count(array_filter($personRequests, fn($r) => !in_array($r['status'], ['COMPLETED', 'CANCELLED', 'DONE'])));
$totalPersons = count($persons);
$totalPendingDocs = count(array_filter($companyDocs, fn($d) => $d['status'] === 'PENDING'));
$pendingPersonDocs = 0;
foreach ($persons as $p) { foreach ($requiredPersonDocs as $rd) { if (!isset($personDocs[$p['person_id']][$rd['code']])) $pendingPersonDocs++; } }
$pendingInfo = count(array_filter($infoFields, fn($f) => empty($f['current_value']) && empty($f['prefill_value'])));
$prefillableInfo = count(array_filter($infoFields, fn($f) => empty($f['current_value']) && !empty($f['prefill_value'])));
$totalCertificates = count($certificates);

$statusConfig = [
    'NEW' => ['label' => 'New', 'color' => '#6366f1', 'bg' => '#eef2ff', 'cancellable' => true],
    'WAITING_DOCS' => ['label' => 'Docs Pending', 'color' => '#f59e0b', 'bg' => '#fffbeb', 'cancellable' => true],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'color' => '#3b82f6', 'bg' => '#eff6ff', 'cancellable' => false],
    'APPLIED' => ['label' => 'Applied', 'color' => '#8b5cf6', 'bg' => '#f5f3ff', 'cancellable' => false],
    'DONE' => ['label' => 'Completed', 'color' => '#10b981', 'bg' => '#ecfdf5', 'cancellable' => false],
    'COMPLETED' => ['label' => 'Completed', 'color' => '#10b981', 'bg' => '#ecfdf5', 'cancellable' => false],
    'HOLD' => ['label' => 'On Hold', 'color' => '#6b7280', 'bg' => '#f3f4f6', 'cancellable' => false],
    'CANCELLED' => ['label' => 'Cancelled', 'color' => '#ef4444', 'bg' => '#fef2f2', 'cancellable' => false],
];

function getProgress($status) {
    return ['NEW' => 1, 'WAITING_DOCS' => 2, 'UNDER_REVIEW' => 3, 'APPLIED' => 4, 'DONE' => 5, 'COMPLETED' => 5, 'HOLD' => 3, 'CANCELLED' => 0][$status] ?? 1;
}

// Role types based on entity
$roleTypes = [
    'PVT_LTD' => ['DIRECTOR' => 'Director', 'SHAREHOLDER' => 'Shareholder'],
    'PUBLIC_LTD' => ['DIRECTOR' => 'Director', 'SHAREHOLDER' => 'Shareholder'],
    'OPC' => ['DIRECTOR' => 'Director', 'NOMINEE' => 'Nominee'],
    'LLP' => ['DESIGNATED_PARTNER' => 'Designated Partner', 'PARTNER' => 'Partner'],
    'PARTNERSHIP' => ['PARTNER' => 'Partner'],
    'PROPRIETORSHIP' => ['PROPRIETOR' => 'Proprietor'],
    'HUF' => ['KARTA' => 'Karta', 'MEMBER' => 'Member'],
    'TRUST' => ['TRUSTEE' => 'Trustee', 'BENEFICIARY' => 'Beneficiary'],
];
$availableRoles = $roleTypes[$entityType] ?? ['MEMBER' => 'Member'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($clientName) ?> - Portal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .glass { background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); }
        .stat:hover { transform: translateY(-2px); }
        .stat.hl { border: 2px solid #f59e0b; background: #fffbeb; }
        .tab { padding: 12px 16px; font-weight: 600; border-radius: 12px 12px 0 0; font-size: 13px; }
        .tab.active { background: white; color: #4F46E5; }
        .tab:not(.active) { background: rgba(255,255,255,0.7); color: #6B7280; }
        .inp { padding: 10px 14px; border: 2px solid #E5E7EB; border-radius: 10px; width: 100%; }
        .inp:focus { outline: none; border-color: #818CF8; }
        .btn { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 10px 20px; border-radius: 10px; font-weight: 600; }
        .btn-outline { background: white; border: 2px solid #667eea; color: #667eea; }
        .btn-green { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
        .card { border: 2px solid #E5E7EB; border-radius: 12px; padding: 16px; }
        .card.pend { border-color: #fbbf24; background: #fffbeb; }
        .card.up { border-color: #60a5fa; background: #eff6ff; }
        .card.ver { border-color: #34d399; background: #ecfdf5; }
        .modal { display: none; }
        .modal.show { display: flex; }
        .tl { display: flex; align-items: center; justify-content: space-between; position: relative; }
        .tl::before { content: ''; position: absolute; top: 50%; left: 0; right: 0; height: 3px; background: #E5E7EB; transform: translateY(-50%); z-index: 0; }
        .tl-step { position: relative; z-index: 1; display: flex; flex-direction: column; align-items: center; }
        .tl-dot { width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; }
        .tl-dot.done { background: #10b981; color: white; }
        .tl-dot.curr { background: #6366f1; color: white; animation: pulse 2s infinite; }
        .tl-dot.wait { background: #E5E7EB; color: #9CA3AF; }
        @keyframes pulse { 0%, 100% { box-shadow: 0 0 0 0 rgba(99,102,241,0.4); } 50% { box-shadow: 0 0 0 8px rgba(99,102,241,0); } }
    </style>
</head>
<body class="p-4 md:p-6">
<div class="max-w-5xl mx-auto">
    
    <!-- Header -->
    <div class="glass p-6 mb-6">
        <div class="flex flex-col md:flex-row md:items-start justify-between gap-4">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold">
                    <?= strtoupper(substr($clientName, 0, 2)) ?>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($clientName) ?></h1>
                    <p class="text-gray-500"><?= $entityLabels[$client['entity_type']] ?? $client['entity_type'] ?></p>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <?php if ($client['cin']): ?><span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">CIN: <?= $client['cin'] ?></span><?php endif; ?>
                        <?php if ($client['llpin']): ?><span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">LLPIN: <?= $client['llpin'] ?></span><?php endif; ?>
                        <?php if ($client['pan']): ?><span class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-medium">PAN: <?= $client['pan'] ?></span><?php endif; ?>
                        <?php if ($client['gstin']): ?><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">GST: <?= $client['gstin'] ?></span><?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- TWO SERVICE BUTTONS -->
            <div class="flex gap-2 flex-wrap">
                <button onclick="openCompanySvc()" class="btn flex items-center gap-2">
                    <i class="fas fa-building"></i><?= $companyServiceLabel ?>
                </button>
                <?php if ($totalPersons > 0): ?>
                <button onclick="openPersonSvc()" class="btn btn-outline flex items-center gap-2">
                    <i class="fas fa-user"></i><?= $personServiceLabel ?>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Stats -->
    <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mb-6">
        <div onclick="showTab('services')" class="glass stat p-4 text-center cursor-pointer"><p class="text-2xl font-bold text-blue-600"><?= $activeServices + $activePersonServices ?></p><p class="text-xs text-gray-500">Active Services</p></div>
        <div onclick="showTab('directors')" class="glass stat p-4 text-center cursor-pointer"><p class="text-2xl font-bold text-indigo-600"><?= $totalPersons ?></p><p class="text-xs text-gray-500"><?= $terms['people_term'] ?></p></div>
        <div onclick="showTab('documents')" class="glass stat p-4 text-center cursor-pointer <?= ($totalPendingDocs + $pendingPersonDocs) > 0 ? 'hl' : '' ?>"><p class="text-2xl font-bold <?= ($totalPendingDocs + $pendingPersonDocs) > 0 ? 'text-amber-600' : 'text-green-600' ?>"><?= $totalPendingDocs + $pendingPersonDocs ?></p><p class="text-xs text-gray-500">Docs Pending</p></div>
        <div onclick="showTab('documents')" class="glass stat p-4 text-center cursor-pointer <?= $pendingInfo > 0 ? 'hl' : '' ?>"><p class="text-2xl font-bold <?= $pendingInfo > 0 ? 'text-orange-600' : 'text-green-600' ?>"><?= $pendingInfo ?></p><p class="text-xs text-gray-500">Info Pending</p></div>
        <div onclick="showTab('certificates')" class="glass stat p-4 text-center cursor-pointer"><p class="text-2xl font-bold text-green-600"><?= $totalCertificates ?></p><p class="text-xs text-gray-500">Certificates</p></div>
    </div>
    
    <!-- Your Team Contact -->
    <?php if ($clientTeam && ($clientTeam['executor_1_name'] || $clientTeam['manager_name'])): ?>
    <div class="glass p-4 mb-6">
        <div class="flex items-center justify-between mb-3">
            <h3 class="font-bold text-gray-700"><i class="fas fa-headset text-indigo-500 mr-2"></i>Your Team</h3>
            <span class="text-xs text-gray-400">Contact for assistance</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
            <?php if ($clientTeam['executor_1_name']): ?>
            <div class="p-3 bg-blue-50 rounded-xl">
                <p class="text-xs text-blue-600 font-medium mb-1">Primary Contact</p>
                <p class="font-semibold text-gray-900"><?= htmlspecialchars($clientTeam['executor_1_name']) ?></p>
                <?php if ($clientTeam['executor_1_phone']): ?>
                <a href="tel:<?= $clientTeam['executor_1_phone'] ?>" class="text-sm text-blue-600 hover:underline flex items-center gap-1 mt-1">
                    <i class="fas fa-phone text-xs"></i><?= htmlspecialchars($clientTeam['executor_1_phone']) ?>
                </a>
                <?php endif; ?>
                <?php if ($clientTeam['executor_1_email']): ?>
                <a href="mailto:<?= $clientTeam['executor_1_email'] ?>" class="text-xs text-gray-500 hover:underline flex items-center gap-1 mt-1">
                    <i class="fas fa-envelope text-xs"></i><?= htmlspecialchars($clientTeam['executor_1_email']) ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($clientTeam['executor_2_name']): ?>
            <div class="p-3 bg-gray-50 rounded-xl">
                <p class="text-xs text-gray-500 font-medium mb-1">Backup Contact</p>
                <p class="font-semibold text-gray-900"><?= htmlspecialchars($clientTeam['executor_2_name']) ?></p>
                <?php if ($clientTeam['executor_2_phone']): ?>
                <a href="tel:<?= $clientTeam['executor_2_phone'] ?>" class="text-sm text-blue-600 hover:underline flex items-center gap-1 mt-1">
                    <i class="fas fa-phone text-xs"></i><?= htmlspecialchars($clientTeam['executor_2_phone']) ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($clientTeam['reviewer_name']): ?>
            <div class="p-3 bg-purple-50 rounded-xl">
                <p class="text-xs text-purple-600 font-medium mb-1">Reviewer</p>
                <p class="font-semibold text-gray-900"><?= htmlspecialchars($clientTeam['reviewer_name']) ?></p>
                <?php if ($clientTeam['reviewer_phone']): ?>
                <a href="tel:<?= $clientTeam['reviewer_phone'] ?>" class="text-sm text-blue-600 hover:underline flex items-center gap-1 mt-1">
                    <i class="fas fa-phone text-xs"></i><?= htmlspecialchars($clientTeam['reviewer_phone']) ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($clientTeam['manager_name']): ?>
            <div class="p-3 bg-indigo-50 rounded-xl">
                <p class="text-xs text-indigo-600 font-medium mb-1">Manager</p>
                <p class="font-semibold text-gray-900"><?= htmlspecialchars($clientTeam['manager_name']) ?></p>
                <?php if ($clientTeam['manager_phone']): ?>
                <a href="tel:<?= $clientTeam['manager_phone'] ?>" class="text-sm text-blue-600 hover:underline flex items-center gap-1 mt-1">
                    <i class="fas fa-phone text-xs"></i><?= htmlspecialchars($clientTeam['manager_phone']) ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if ($uploadMessage): ?><div class="glass p-4 mb-6 border-l-4 border-green-500 bg-green-50"><p class="text-green-700"><i class="fas fa-check-circle mr-2"></i><?= htmlspecialchars($uploadMessage) ?></p></div><?php endif; ?>
    <?php if ($uploadError): ?><div class="glass p-4 mb-6 border-l-4 border-red-500 bg-red-50"><p class="text-red-700"><i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($uploadError) ?></p></div><?php endif; ?>
    
    <?php
    // Quick billing stats for header - exclude void invoices
    $quickBilling = dbFetchOne("
        SELECT 
            COALESCE(SUM(balance_due), 0) as outstanding,
            SUM(CASE WHEN balance_due > 0 AND due_date < CURDATE() THEN 1 ELSE 0 END) as overdue_count,
            SUM(CASE WHEN balance_due > 0 AND due_date < CURDATE() THEN balance_due ELSE 0 END) as overdue_amount
        FROM invoices 
        WHERE client_id = ? AND (status IS NULL OR LOWER(status) != 'void')
    ", [$clientId]);
    $hasOverdue = ($quickBilling['overdue_count'] ?? 0) > 0;
    $totalOutstanding = ($quickBilling['outstanding'] ?? 0);
    ?>
    
    <?php if ($totalOutstanding > 0): ?>
    <div class="glass p-4 mb-4 <?= $hasOverdue ? 'bg-red-50 border border-red-200' : 'bg-amber-50 border border-amber-200' ?> rounded-xl">
        <div class="flex items-center justify-between flex-wrap gap-3">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 <?= $hasOverdue ? 'bg-red-100' : 'bg-amber-100' ?> rounded-full flex items-center justify-center">
                    <i class="fas fa-file-invoice-dollar <?= $hasOverdue ? 'text-red-600' : 'text-amber-600' ?>"></i>
                </div>
                <div>
                    <p class="font-semibold <?= $hasOverdue ? 'text-red-700' : 'text-amber-700' ?>">
                        Outstanding: ₹<?= number_format($totalOutstanding) ?>
                    </p>
                    <?php if ($hasOverdue): ?>
                    <p class="text-xs text-red-600"><?= $quickBilling['overdue_count'] ?> invoice(s) overdue - ₹<?= number_format($quickBilling['overdue_amount']) ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <button onclick="showTab('billing')" class="px-4 py-2 <?= $hasOverdue ? 'bg-red-600' : 'bg-amber-600' ?> text-white rounded-lg text-sm font-medium">
                <i class="fas fa-eye mr-1"></i>View Billing
            </button>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Tabs -->
    <div class="flex gap-1 overflow-x-auto">
        <button onclick="showTab('services')" id="tab-services" class="tab <?= $activeTab === 'services' ? 'active' : '' ?>"><i class="fas fa-briefcase mr-1"></i>Services</button>
        <button onclick="showTab('billing')" id="tab-billing" class="tab <?= $activeTab === 'billing' ? 'active' : '' ?>"><i class="fas fa-file-invoice-dollar mr-1"></i>Billing</button>
        <button onclick="showTab('compliance')" id="tab-compliance" class="tab <?= $activeTab === 'compliance' ? 'active' : '' ?>"><i class="fas fa-calendar-check mr-1"></i>Compliance<?php if ($pendingCompliances > 0): ?><span class="ml-1 px-2 py-0.5 bg-blue-500 text-white text-xs rounded-full"><?= $pendingCompliances ?></span><?php endif; ?></button>
        <button onclick="showTab('directors')" id="tab-directors" class="tab <?= $activeTab === 'directors' ? 'active' : '' ?>"><i class="fas fa-users mr-1"></i><?= $terms['people_term'] ?></button>
        <button onclick="showTab('documents')" id="tab-documents" class="tab <?= $activeTab === 'documents' ? 'active' : '' ?>"><i class="fas fa-file-alt mr-1"></i>Docs & Info<?php if (($totalPendingDocs + $pendingPersonDocs + $pendingInfo) > 0): ?><span class="ml-1 px-2 py-0.5 bg-amber-500 text-white text-xs rounded-full"><?= $totalPendingDocs + $pendingPersonDocs + $pendingInfo ?></span><?php endif; ?></button>
        <button onclick="showTab('certificates')" id="tab-certificates" class="tab <?= $activeTab === 'certificates' ? 'active' : '' ?>"><i class="fas fa-certificate mr-1"></i>Certificates</button>
        <?php if (!empty($rocDocuments)): ?>
        <button onclick="showTab('resolutions')" id="tab-resolutions" class="tab <?= $activeTab === 'resolutions' ? 'active' : '' ?>"><i class="fas fa-file-signature mr-1"></i>Resolutions<?php if ($pendingSignatures > 0): ?><span class="ml-1 px-2 py-0.5 bg-purple-500 text-white text-xs rounded-full"><?= $pendingSignatures ?></span><?php endif; ?></button>
        <?php endif; ?>
    </div>
    
    <!-- SERVICES TAB -->
    <div id="content-services" class="glass p-6 rounded-tl-none <?= $activeTab !== 'services' ? 'hidden' : '' ?>">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold"><?= $terms['entity_term'] ?> Services</h2>
            <button onclick="openCompanySvc()" class="text-blue-600 text-sm"><i class="fas fa-plus mr-1"></i>New</button>
        </div>
        
        <?php if (empty($requests) && empty($personRequests)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-inbox text-5xl text-gray-300 mb-4"></i>
            <p>No services yet</p>
            <button onclick="openCompanySvc()" class="btn mt-4"><i class="fas fa-plus mr-2"></i>Request Service</button>
        </div>
        <?php else: ?>
        
        <!-- Company Services -->
        <?php if (!empty($requests)): ?>
        <div class="space-y-4 mb-6">
            <?php foreach ($requests as $r): $s = $statusConfig[$r['status']] ?? $statusConfig['NEW']; $prog = getProgress($r['status']); ?>
            <div class="p-4 bg-gray-50 rounded-xl <?= $r['status'] === 'CANCELLED' ? 'opacity-60' : '' ?>">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <span class="font-bold text-gray-900"><?= htmlspecialchars($r['service_name']) ?></span>
                        <span class="ml-2 px-3 py-1 rounded-full text-xs font-medium" style="background:<?= $s['bg'] ?>;color:<?= $s['color'] ?>"><?= $s['label'] ?></span>
                        <p class="text-sm text-gray-500 mt-1"><?= $r['request_number'] ?> • <?= date('d M Y', strtotime($r['created_at'])) ?></p>
                    </div>
                    <?php if ($s['cancellable']): ?>
                    <button onclick="openCancel(<?= $r['id'] ?>,'<?= addslashes($r['service_name']) ?>')" class="text-gray-400 hover:text-red-500"><i class="fas fa-times-circle"></i></button>
                    <?php endif; ?>
                </div>
                <?php if ($r['status'] !== 'CANCELLED'): ?>
                <div class="tl mb-3 px-4">
                    <?php $steps = [['Submitted','fa-paper-plane'],['Documents','fa-file-alt'],['Review','fa-search'],['Processing','fa-cog'],['Done','fa-check-circle']]; foreach ($steps as $i => $st): $n = $i + 1; ?>
                    <div class="tl-step"><div class="tl-dot <?= $prog > $n ? 'done' : ($prog == $n ? 'curr' : 'wait') ?>"><i class="fas <?= $st[1] ?>"></i></div><span class="text-xs mt-1 <?= $prog >= $n ? 'text-gray-700' : 'text-gray-400' ?>"><?= $st[0] ?></span></div>
                    <?php endforeach; ?>
                </div>
                <div class="flex gap-2">
                    <span class="px-3 py-1 <?= $r['pending_docs'] > 0 ? 'bg-amber-100 text-amber-700' : 'bg-green-100 text-green-700' ?> rounded-full text-xs"><?= $r['total_docs'] - $r['pending_docs'] ?>/<?= $r['total_docs'] ?> docs</span>
                    <span class="px-3 py-1 <?= $r['pending_info'] > 0 ? 'bg-orange-100 text-orange-700' : 'bg-green-100 text-green-700' ?> rounded-full text-xs"><?= $r['total_info'] - $r['pending_info'] ?>/<?= $r['total_info'] ?> info</span>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <!-- Person Services -->
        <?php if (!empty($personRequests)): ?>
        <div class="border-t pt-4 mt-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-700"><i class="fas fa-user mr-2"></i><?= $terms['people_singular'] ?> Services</h3>
                <button onclick="openPersonSvc()" class="text-purple-600 text-sm"><i class="fas fa-plus mr-1"></i>New</button>
            </div>
            <div class="space-y-3">
                <?php foreach ($personRequests as $pr): $s = $statusConfig[$pr['status']] ?? $statusConfig['NEW']; ?>
                <div class="p-3 bg-purple-50 rounded-lg <?= $pr['status'] === 'CANCELLED' ? 'opacity-60' : '' ?>">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="font-medium"><?= htmlspecialchars($pr['service_name']) ?></span>
                            <span class="text-purple-600 text-sm ml-2">for <?= htmlspecialchars($pr['person_name']) ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="px-2 py-1 rounded-full text-xs" style="background:<?= $s['bg'] ?>;color:<?= $s['color'] ?>"><?= $s['label'] ?></span>
                            <?php if ($s['cancellable'] ?? false): ?>
                            <button onclick="openCancel(<?= $pr['id'] ?>,'<?= addslashes($pr['service_name'] . ' for ' . $pr['person_name']) ?>')" class="text-gray-400 hover:text-red-500 text-sm"><i class="fas fa-times-circle"></i></button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1"><?= $pr['request_number'] ?> • <?= date('d M Y', strtotime($pr['created_at'])) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <!-- BILLING TAB -->
    <div id="content-billing" class="glass p-6 rounded-tl-none <?= $activeTab !== 'billing' ? 'hidden' : '' ?>">
        <?php
        // Invoice category detection function
        function portalDetectCategory($invoiceNumber) {
            if (!$invoiceNumber) return 'OTHER';
            $invoiceNumber = strtoupper(trim($invoiceNumber));
            
            $prefixes = [
                'PROFESSIONAL' => ['PA'],
                'TDS' => ['TDS'],
                'GST' => ['GST'],
                'ROC' => ['ROC'],
                'PT' => ['PT'],
                'REIMBURSEMENT' => ['REIM', 'REM'],
            ];
            
            foreach ($prefixes as $cat => $pres) {
                foreach ($pres as $p) {
                    if (strpos($invoiceNumber, $p) === 0) return $cat;
                }
            }
            return 'OTHER';
        }

        function portalGetFY($date) {
            if (!$date) return null;
            $month = (int)date('n', strtotime($date));
            $year = (int)date('Y', strtotime($date));
            return $month >= 4 ? $year . '-' . substr($year + 1, 2) : ($year - 1) . '-' . substr($year, 2);
        }

        function portalGetCurrentFY() {
            return portalGetFY(date('Y-m-d'));
        }

        function portalGetFYRange($fy) {
            if (!$fy || !preg_match('/^(\d{4})-(\d{2})$/', $fy, $m)) {
                $month = (int)date('n');
                $year = (int)date('Y');
                $startYear = $month >= 4 ? $year : $year - 1;
            } else {
                $startYear = (int)$m[1];
            }
            return ['start' => $startYear . '-04-01', 'end' => ($startYear + 1) . '-03-31'];
        }

        // Category definitions
        $portalCategories = [
            'PROFESSIONAL' => ['label' => 'Professional Services', 'short' => 'Professional', 'icon' => 'fa-briefcase', 'color' => 'indigo'],
            'TDS' => ['label' => 'TDS', 'short' => 'TDS', 'icon' => 'fa-percent', 'color' => 'purple'],
            'GST' => ['label' => 'GST', 'short' => 'GST', 'icon' => 'fa-receipt', 'color' => 'blue'],
            'ROC' => ['label' => 'ROC', 'short' => 'ROC', 'icon' => 'fa-building-columns', 'color' => 'teal'],
            'PT' => ['label' => 'PT', 'short' => 'PT', 'icon' => 'fa-landmark', 'color' => 'amber'],
            'REIMBURSEMENT' => ['label' => 'Reimbursement', 'short' => 'Reimb', 'icon' => 'fa-hand-holding-dollar', 'color' => 'orange'],
            'OTHER' => ['label' => 'Other', 'short' => 'Other', 'icon' => 'fa-file-invoice', 'color' => 'gray'],
        ];

        // Get selected FY
        $portalFY = sanitize($_GET['fy'] ?? '');

        // Get available FYs for this client
        $clientFYs = [];
        $fyRows = dbFetchAll("
            SELECT DISTINCT YEAR(invoice_date) as year, MONTH(invoice_date) as month
            FROM invoices 
            WHERE client_id = ? AND invoice_date IS NOT NULL AND (status IS NULL OR LOWER(status) != 'void')
            ORDER BY invoice_date DESC
        ", [$clientId]) ?: [];

        foreach ($fyRows as $row) {
            $fy = portalGetFY($row['year'] . '-' . str_pad($row['month'], 2, '0', STR_PAD_LEFT) . '-01');
            if ($fy && !in_array($fy, $clientFYs)) $clientFYs[] = $fy;
        }

        $currentFY = portalGetCurrentFY();
        if (!in_array($currentFY, $clientFYs)) array_unshift($clientFYs, $currentFY);
        usort($clientFYs, fn($a, $b) => strcmp($b, $a));

        if (!$portalFY || !in_array($portalFY, $clientFYs)) $portalFY = $currentFY;
        $fyRange = portalGetFYRange($portalFY);

        // Get invoices for FY
        $portalInvoices = dbFetchAll("
            SELECT *, DATEDIFF(CURDATE(), due_date) as days_overdue
            FROM invoices 
            WHERE client_id = ? 
            AND invoice_date >= ? AND invoice_date <= ?
            AND (status IS NULL OR LOWER(status) != 'void')
            ORDER BY invoice_date DESC
        ", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

        // Categorize and group
        $categoryStats = [];
        foreach ($portalCategories as $k => $c) {
            $categoryStats[$k] = ['count' => 0, 'total' => 0, 'outstanding' => 0];
        }

        $overdueInvoices = [];
        $dueInvoices = [];
        $paidInvoices = [];
        $today = date('Y-m-d');

        foreach ($portalInvoices as &$inv) {
            $inv['category'] = portalDetectCategory($inv['zoho_invoice_number'] ?? '');
            $cat = $inv['category'];
            $total = (float)($inv['total'] ?? 0);
            $balance = (float)($inv['balance_due'] ?? 0);
            $status = strtolower($inv['status'] ?? '');
            $dueDate = $inv['due_date'] ?? null;
            
            $categoryStats[$cat]['count']++;
            $categoryStats[$cat]['total'] += $total;
            $categoryStats[$cat]['outstanding'] += $balance;
            
            if ($balance <= 0 || $status === 'paid') {
                $paidInvoices[] = $inv;
            } elseif ($dueDate && $dueDate < $today && $balance > 0) {
                $overdueInvoices[] = $inv;
            } else {
                $dueInvoices[] = $inv;
            }
        }
        unset($inv);

        // Get payments for FY
        $portalPayments = dbFetchAll("
            SELECT * FROM payments 
            WHERE client_id = ? 
            AND payment_date >= ? AND payment_date <= ?
            ORDER BY payment_date DESC
        ", [$clientId, $fyRange['start'], $fyRange['end']]) ?: [];

        $totalInvoiced = array_sum(array_column($portalInvoices, 'total'));
        $totalPaid = array_sum(array_column($portalPayments, 'amount'));
        $overdueAmount = array_sum(array_column($overdueInvoices, 'balance_due'));
        $dueAmount = array_sum(array_column($dueInvoices, 'balance_due'));
        ?>
        
        <!-- FY Selector -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <label class="text-sm text-gray-600">Financial Year:</label>
                <select onchange="window.location.href='portal.php?token=<?= urlencode($token) ?>&tab=billing&fy='+this.value" 
                        class="form-select text-sm py-1 rounded-lg border-gray-300">
                    <?php foreach ($clientFYs as $fy): ?>
                    <option value="<?= $fy ?>" <?= $portalFY === $fy ? 'selected' : '' ?>>FY <?= $fy ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <span class="text-xs text-gray-400">Apr <?= substr($portalFY, 0, 4) ?> - Mar <?= '20' . substr($portalFY, 5, 2) ?></span>
        </div>

        <!-- Billing Summary -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
            <div class="bg-blue-50 rounded-xl p-4 text-center">
                <p class="text-xl font-bold text-blue-600">₹<?= number_format($totalInvoiced) ?></p>
                <p class="text-xs text-gray-500">Total Invoiced</p>
            </div>
            <div class="bg-green-50 rounded-xl p-4 text-center">
                <p class="text-xl font-bold text-green-600">₹<?= number_format($totalPaid) ?></p>
                <p class="text-xs text-gray-500">Total Paid</p>
            </div>
            <div class="bg-amber-50 rounded-xl p-4 text-center">
                <p class="text-xl font-bold text-amber-600">₹<?= number_format($dueAmount) ?></p>
                <p class="text-xs text-gray-500">Due (<?= count($dueInvoices) ?>)</p>
            </div>
            <div class="bg-red-50 rounded-xl p-4 text-center <?= count($overdueInvoices) > 0 ? 'ring-2 ring-red-300' : '' ?>">
                <p class="text-xl font-bold text-red-600">₹<?= number_format($overdueAmount) ?></p>
                <p class="text-xs text-gray-500">Overdue (<?= count($overdueInvoices) ?>)</p>
            </div>
        </div>

        <!-- Category Breakdown -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-600 mb-3"><i class="fas fa-tags mr-1"></i>By Category</h4>
            <div class="grid grid-cols-3 md:grid-cols-7 gap-2">
                <?php foreach ($portalCategories as $key => $cat): 
                    $cs = $categoryStats[$key];
                    if ($cs['count'] == 0 && $key === 'OTHER') continue;
                    $bgClass = "bg-{$cat['color']}-50";
                    $textClass = "text-{$cat['color']}-700";
                ?>
                <div class="<?= $bgClass ?> rounded-lg p-2 text-center">
                    <div class="flex items-center justify-center gap-1 mb-1">
                        <i class="fas <?= $cat['icon'] ?> text-xs <?= $textClass ?>"></i>
                        <span class="text-xs font-medium <?= $textClass ?>"><?= $cat['short'] ?></span>
                    </div>
                    <p class="text-sm font-bold text-gray-800">₹<?= number_format($cs['total']) ?></p>
                    <p class="text-xs text-gray-500"><?= $cs['count'] ?> inv</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php if (empty($portalInvoices)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-file-invoice text-5xl text-gray-300 mb-4"></i>
            <p>No invoices found for FY <?= $portalFY ?></p>
        </div>
        <?php else: ?>
        
        <!-- OVERDUE INVOICES -->
        <?php if (!empty($overdueInvoices)): ?>
        <div class="mb-6">
            <h3 class="font-semibold text-red-700 mb-3">
                <i class="fas fa-exclamation-triangle mr-2"></i>Overdue (<?= count($overdueInvoices) ?>) - ₹<?= number_format($overdueAmount) ?>
            </h3>
            <div class="space-y-2">
                <?php foreach ($overdueInvoices as $inv): 
                    $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
                ?>
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 flex items-center justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                            <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                        </div>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?> • Due: <?= date('d M Y', strtotime($inv['due_date'])) ?></p>
                    </div>
                    <div class="text-right mr-3">
                        <p class="font-bold text-red-600">₹<?= number_format($inv['balance_due'] ?? 0) ?></p>
                        <span class="text-xs bg-red-100 text-red-700 px-2 py-0.5 rounded-full"><?= $inv['days_overdue'] ?> days overdue</span>
                    </div>
                    <?php if (!empty($inv['zoho_invoice_id'])): ?>
                    <div class="flex gap-1 ml-2">
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                           target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                           class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- DUE INVOICES -->
        <?php if (!empty($dueInvoices)): ?>
        <div class="mb-6">
            <h3 class="font-semibold text-amber-700 mb-3">
                <i class="fas fa-clock mr-2"></i>Due (<?= count($dueInvoices) ?>) - ₹<?= number_format($dueAmount) ?>
            </h3>
            <div class="space-y-2">
                <?php foreach ($dueInvoices as $inv): 
                    $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
                ?>
                <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-center justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                            <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                        </div>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?><?= $inv['due_date'] ? ' • Due: ' . date('d M Y', strtotime($inv['due_date'])) : '' ?></p>
                    </div>
                    <div class="text-right mr-3">
                        <p class="font-bold text-amber-600">₹<?= number_format($inv['balance_due'] ?? 0) ?></p>
                        <span class="text-xs bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full"><?= ucfirst($inv['status'] ?? 'Pending') ?></span>
                    </div>
                    <?php if (!empty($inv['zoho_invoice_id'])): ?>
                    <div class="flex gap-1 ml-2">
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                           target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                           class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- PAID INVOICES -->
        <?php if (!empty($paidInvoices)): ?>
        <div class="mb-6">
            <h3 class="font-semibold text-green-700 mb-3">
                <i class="fas fa-check-circle mr-2"></i>Paid (<?= count($paidInvoices) ?>) - ₹<?= number_format(array_sum(array_column($paidInvoices, 'total'))) ?>
            </h3>
            <div class="space-y-2">
                <?php foreach (array_slice($paidInvoices, 0, 10) as $inv): 
                    $cat = $portalCategories[$inv['category']] ?? $portalCategories['OTHER'];
                ?>
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 flex items-center justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <p class="font-mono font-semibold text-gray-800"><?= htmlspecialchars($inv['zoho_invoice_number'] ?? '') ?></p>
                            <span class="px-1.5 py-0.5 text-xs rounded bg-<?= $cat['color'] ?>-100 text-<?= $cat['color'] ?>-700"><?= $cat['short'] ?></span>
                        </div>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($inv['invoice_date'])) ?></p>
                    </div>
                    <div class="text-right mr-3">
                        <p class="font-bold text-green-600">₹<?= number_format($inv['total'] ?? 0) ?></p>
                        <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full"><i class="fas fa-check mr-1"></i>Paid</span>
                    </div>
                    <?php if (!empty($inv['zoho_invoice_id'])): ?>
                    <div class="flex gap-1 ml-2">
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=view" 
                           target="_blank" class="p-2 bg-white text-indigo-600 hover:bg-indigo-50 rounded-lg border" title="View PDF">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=invoice&id=<?= $inv['id'] ?>&action=download" 
                           class="p-2 bg-white text-green-600 hover:bg-green-50 rounded-lg border" title="Download PDF">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
                <?php if (count($paidInvoices) > 10): ?>
                <p class="text-center text-sm text-gray-500 mt-2">Showing 10 of <?= count($paidInvoices) ?> paid invoices</p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- RECENT PAYMENTS -->
        <?php if (!empty($portalPayments)): ?>
        <div class="mt-6 pt-6 border-t">
            <h3 class="font-semibold text-gray-700 mb-3">
                <i class="fas fa-money-check-alt mr-2 text-green-500"></i>Recent Payments
            </h3>
            <div class="space-y-2">
                <?php foreach (array_slice($portalPayments, 0, 5) as $pay): ?>
                <div class="bg-gray-50 rounded-xl p-3 flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium"><?= htmlspecialchars($pay['payment_mode'] ?? 'Payment') ?></p>
                        <p class="text-xs text-gray-500"><?= date('d M Y', strtotime($pay['payment_date'])) ?><?= $pay['reference_number'] ? ' • ' . htmlspecialchars($pay['reference_number']) : '' ?></p>
                    </div>
                    <p class="font-bold text-green-600 mr-3">₹<?= number_format($pay['amount'] ?? 0) ?></p>
                    <?php if (!empty($pay['zoho_payment_id'])): ?>
                    <div class="flex gap-1">
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=payment&id=<?= $pay['id'] ?>&action=view" 
                           target="_blank" class="p-1.5 text-indigo-600 hover:bg-indigo-50 rounded" title="View Receipt">
                            <i class="fas fa-eye text-sm"></i>
                        </a>
                        <a href="portal_zoho_pdf.php?token=<?= urlencode($token) ?>&type=payment&id=<?= $pay['id'] ?>&action=download" 
                           class="p-1.5 text-green-600 hover:bg-green-50 rounded" title="Download Receipt">
                            <i class="fas fa-download text-sm"></i>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <?php endif; ?>
    </div>
    
    <!-- COMPLIANCE TAB -->
    <div id="content-compliance" class="glass p-6 rounded-tl-none <?= $activeTab !== 'compliance' ? 'hidden' : '' ?>">
        
        <?php if (empty($complianceByType) && empty($complianceRequirements)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-clipboard-check text-5xl text-gray-300 mb-4"></i>
            <p>No compliance filings configured yet</p>
            <p class="text-sm mt-2">Your CA will set up recurring compliances for your business.</p>
        </div>
        <?php else: ?>
        
        <?php
        // Status configuration
        $portalStatuses = [
            'NOT_STARTED' => ['label' => 'Pending', 'bg' => 'bg-gray-100', 'text' => 'text-gray-600', 'icon' => 'fa-clock', 'color' => 'gray'],
            'DATA_REQUESTED' => ['label' => 'Data Needed', 'bg' => 'bg-amber-100', 'text' => 'text-amber-700', 'icon' => 'fa-exclamation-circle', 'color' => 'amber'],
            'DATA_RECEIVED' => ['label' => 'Processing', 'bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => 'fa-cog', 'color' => 'blue'],
            'IN_PROGRESS' => ['label' => 'In Progress', 'bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => 'fa-spinner', 'color' => 'blue'],
            'UNDER_REVIEW' => ['label' => 'Review', 'bg' => 'bg-purple-100', 'text' => 'text-purple-700', 'icon' => 'fa-eye', 'color' => 'purple'],
            'PENDING_APPROVAL' => ['label' => 'Approval', 'bg' => 'bg-orange-100', 'text' => 'text-orange-700', 'icon' => 'fa-user-check', 'color' => 'orange'],
            'READY_TO_FILE' => ['label' => 'Ready', 'bg' => 'bg-cyan-100', 'text' => 'text-cyan-700', 'icon' => 'fa-check', 'color' => 'cyan'],
            'FILED' => ['label' => 'Filed', 'bg' => 'bg-green-100', 'text' => 'text-green-700', 'icon' => 'fa-check-circle', 'color' => 'green'],
            'FILED_LATE' => ['label' => 'Filed Late', 'bg' => 'bg-red-100', 'text' => 'text-red-700', 'icon' => 'fa-exclamation-triangle', 'color' => 'red'],
            'NOT_APPLICABLE' => ['label' => 'N/A', 'bg' => 'bg-gray-100', 'text' => 'text-gray-500', 'icon' => 'fa-minus-circle', 'color' => 'gray'],
            'ON_HOLD' => ['label' => 'On Hold', 'bg' => 'bg-red-100', 'text' => 'text-red-700', 'icon' => 'fa-pause-circle', 'color' => 'red'],
        ];
        $today = date('Y-m-d');
        
        // Calculate overall stats
        $totalFiled = 0;
        $totalPending = 0;
        $totalOverdue = 0;
        foreach ($complianceByType as $type) {
            $totalFiled += $type['stats']['filed'];
            $totalPending += $type['stats']['pending'];
            $totalOverdue += $type['stats']['overdue'];
        }
        ?>
        
        <!-- Header with FY Selector -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
            <div>
                <h2 class="text-lg font-bold text-gray-800"><i class="fas fa-calendar-check text-blue-600 mr-2"></i>Compliance Status</h2>
                <p class="text-sm text-gray-500">Track all your compliance filings</p>
            </div>
            <div class="flex items-center gap-3">
                <label class="text-sm text-gray-600">Financial Year:</label>
                <select onchange="window.location.href='?token=<?= urlencode($token) ?>&tab=compliance&fy='+this.value" class="inp py-2 px-3 text-sm w-auto">
                    <?php foreach ($availableFYs as $fy): ?>
                    <option value="<?= $fy ?>" <?= $fy == $selectedFY ? 'selected' : '' ?>>FY <?= $fy ?>-<?= substr($fy + 1, 2) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <!-- Summary Stats -->
        <div class="grid grid-cols-4 gap-3 mb-6">
            <div class="text-center p-3 bg-blue-50 rounded-xl border border-blue-100">
                <p class="text-2xl font-bold text-blue-600"><?= $totalCompliances ?></p>
                <p class="text-xs text-blue-600">Total Returns</p>
            </div>
            <div class="text-center p-3 bg-green-50 rounded-xl border border-green-100">
                <p class="text-2xl font-bold text-green-600"><?= $totalFiled ?></p>
                <p class="text-xs text-green-600">Filed</p>
            </div>
            <div class="text-center p-3 bg-amber-50 rounded-xl border border-amber-100">
                <p class="text-2xl font-bold text-amber-600"><?= $totalPending ?></p>
                <p class="text-xs text-amber-600">Pending</p>
            </div>
            <div class="text-center p-3 bg-red-50 rounded-xl border border-red-100">
                <p class="text-2xl font-bold text-red-600"><?= $totalOverdue ?></p>
                <p class="text-xs text-red-600">Overdue</p>
            </div>
        </div>
        
        <?php if ($totalOverdue > 0): ?>
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
            <div class="flex items-center gap-3">
                <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                <div>
                    <p class="font-semibold text-red-800">Attention Required</p>
                    <p class="text-sm text-red-700">You have <?= $totalOverdue ?> overdue filing(s). Please contact your CA immediately.</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($complianceByType)): ?>
        <!-- Compliance Accordions -->
        <div class="space-y-3" id="compliance-accordions">
            <?php 
            $accordionIndex = 0;
            foreach ($complianceByType as $typeId => $typeData): 
                $accordionIndex++;
                $stats = $typeData['stats'];
                $hasOverdue = $stats['overdue'] > 0;
                $allFiled = $stats['filed'] == $stats['total'];
                
                // Progress percentage
                $progressPct = $stats['total'] > 0 ? round(($stats['filed'] / $stats['total']) * 100) : 0;
                
                // Determine header color
                $headerBg = 'bg-white';
                $headerBorder = 'border-gray-200';
                if ($hasOverdue) {
                    $headerBg = 'bg-red-50';
                    $headerBorder = 'border-red-200';
                } elseif ($allFiled) {
                    $headerBg = 'bg-green-50';
                    $headerBorder = 'border-green-200';
                }
            ?>
            <div class="border <?= $headerBorder ?> rounded-xl overflow-hidden compliance-accordion">
                <!-- Accordion Header (Clickable) -->
                <div class="<?= $headerBg ?> px-4 py-3 cursor-pointer flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleAccordion(<?= $accordionIndex ?>)">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-chevron-right text-gray-400 transition-transform accordion-icon" id="icon-<?= $accordionIndex ?>"></i>
                        <div>
                            <span class="font-semibold text-gray-800"><?= htmlspecialchars($typeData['name']) ?></span>
                            <span class="ml-2 text-xs px-2 py-0.5 bg-gray-200 text-gray-600 rounded-full"><?= ucfirst(strtolower($typeData['frequency'])) ?></span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <!-- Progress Bar -->
                        <div class="hidden sm:flex items-center gap-2">
                            <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full <?= $allFiled ? 'bg-green-500' : ($hasOverdue ? 'bg-red-500' : 'bg-blue-500') ?> rounded-full" style="width: <?= $progressPct ?>%"></div>
                            </div>
                            <span class="text-xs text-gray-500"><?= $progressPct ?>%</span>
                        </div>
                        <!-- Stats Pills -->
                        <div class="flex items-center gap-2 text-xs">
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full"><?= $stats['filed'] ?> Filed</span>
                            <?php if ($stats['overdue'] > 0): ?>
                            <span class="px-2 py-1 bg-red-100 text-red-700 rounded-full animate-pulse"><?= $stats['overdue'] ?> Overdue</span>
                            <?php elseif ($stats['pending'] > 0): ?>
                            <span class="px-2 py-1 bg-amber-100 text-amber-700 rounded-full"><?= $stats['pending'] ?> Pending</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Accordion Content (Expandable) -->
                <div class="hidden border-t border-gray-100" id="content-<?= $accordionIndex ?>">
                    <div class="p-4 bg-gray-50">
                        <!-- Period Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
                            <?php foreach ($typeData['entries'] as $entry): 
                                $status = strtoupper(trim($entry['status'] ?? 'NOT_STARTED'));
                                $st = $portalStatuses[$status] ?? $portalStatuses['NOT_STARTED'];
                                $isOverdue = $entry['due_date'] < $today && !in_array($status, ['FILED', 'FILED_LATE', 'NOT_APPLICABLE']);
                                $daysLeft = floor((strtotime($entry['due_date']) - time()) / 86400);
                            ?>
                            <div class="flex items-center justify-between p-3 bg-white rounded-lg border <?= $isOverdue ? 'border-red-300 bg-red-50' : 'border-gray-200' ?>">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-800 text-sm"><?= htmlspecialchars($entry['period_name']) ?></p>
                                    <p class="text-xs text-gray-500">
                                        Due: <?= date('d M Y', strtotime($entry['due_date'])) ?>
                                        <?php if ($isOverdue): ?>
                                        <span class="text-red-600 font-medium">(<?= abs($daysLeft) ?>d overdue)</span>
                                        <?php elseif ($daysLeft >= 0 && $daysLeft <= 7 && !in_array($status, ['FILED', 'FILED_LATE', 'NOT_APPLICABLE'])): ?>
                                        <span class="text-amber-600">(<?= $daysLeft ?>d left)</span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div class="text-right">
                                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium <?= $st['bg'] ?> <?= $st['text'] ?>">
                                        <i class="fas <?= $st['icon'] ?> text-[10px]"></i>
                                        <?= $st['label'] ?>
                                    </span>
                                    <?php if ($entry['filed_date'] && in_array($status, ['FILED', 'FILED_LATE'])): ?>
                                    <p class="text-xs text-green-600 mt-1">Filed: <?= date('d M', strtotime($entry['filed_date'])) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <script>
        function toggleAccordion(id) {
            const content = document.getElementById('content-' + id);
            const icon = document.getElementById('icon-' + id);
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(90deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
        
        // Expand all accordions with overdue items by default
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.compliance-accordion').forEach((acc, idx) => {
                if (acc.querySelector('.animate-pulse')) {
                    toggleAccordion(idx + 1);
                }
            });
        });
        </script>
        
        <?php elseif (!empty($complianceRequirements)): ?>
        <!-- No tracker entries but has mapped compliances -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-500 text-xl"></i>
                <div>
                    <p class="font-semibold text-blue-800">Compliance Setup Complete</p>
                    <p class="text-sm text-blue-700">Your compliances are mapped. Filing entries will appear once your CA generates them for the current period.</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Applicable Compliances Summary -->
        <?php if (!empty($complianceRequirements)): ?>
        <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="font-bold text-gray-800"><i class="fas fa-clipboard-list text-green-600 mr-2"></i>Applicable Compliances</h3>
                    <p class="text-xs text-gray-500 mt-1">All compliances mapped to your business</p>
                </div>
            </div>
            
            <?php
            // Group by frequency
            $reqByFreq = ['MONTHLY' => [], 'QUARTERLY' => [], 'HALF_YEARLY' => [], 'YEARLY' => [], 'EVENT_BASED' => []];
            foreach ($complianceRequirements as $req) {
                $freq = $req['frequency'] ?? 'YEARLY';
                if (isset($reqByFreq[$freq])) {
                    $reqByFreq[$freq][] = $req;
                }
            }
            
            $freqColors = [
                'MONTHLY' => ['bg' => 'bg-blue-50', 'border' => 'border-blue-200', 'text' => 'text-blue-700', 'badge' => 'bg-blue-100'],
                'QUARTERLY' => ['bg' => 'bg-amber-50', 'border' => 'border-amber-200', 'text' => 'text-amber-700', 'badge' => 'bg-amber-100'],
                'HALF_YEARLY' => ['bg' => 'bg-purple-50', 'border' => 'border-purple-200', 'text' => 'text-purple-700', 'badge' => 'bg-purple-100'],
                'YEARLY' => ['bg' => 'bg-green-50', 'border' => 'border-green-200', 'text' => 'text-green-700', 'badge' => 'bg-green-100'],
                'EVENT_BASED' => ['bg' => 'bg-gray-50', 'border' => 'border-gray-200', 'text' => 'text-gray-700', 'badge' => 'bg-gray-100']
            ];
            $freqLabels = ['MONTHLY' => 'Monthly', 'QUARTERLY' => 'Quarterly', 'HALF_YEARLY' => 'Half-Yearly', 'YEARLY' => 'Annual', 'EVENT_BASED' => 'Event Based'];
            ?>
            
            <div class="flex flex-wrap gap-2">
                <?php foreach ($complianceRequirements as $req): 
                    $freq = $req['frequency'] ?? 'YEARLY';
                    $colors = $freqColors[$freq] ?? $freqColors['YEARLY'];
                ?>
                <span class="inline-flex items-center gap-1 px-3 py-1.5 <?= $colors['bg'] ?> <?= $colors['text'] ?> border <?= $colors['border'] ?> rounded-lg text-sm">
                    <i class="fas fa-check-circle text-xs"></i>
                    <?= htmlspecialchars($req['name']) ?>
                    <span class="text-xs opacity-75">(<?= $freqLabels[$freq] ?? $freq ?>)</span>
                </span>
                <?php endforeach; ?>
            </div>
            
            <!-- Frequency Summary -->
            <div class="mt-4 flex flex-wrap gap-2 text-xs">
                <?php foreach ($freqLabels as $fKey => $fLabel): ?>
                    <?php if (!empty($reqByFreq[$fKey])): ?>
                    <span class="px-3 py-1 <?= $freqColors[$fKey]['badge'] ?> <?= $freqColors[$fKey]['text'] ?> rounded-full">
                        <?= $fLabel ?>: <?= count($reqByFreq[$fKey]) ?>
                    </span>
                    <?php endif; ?>
                <?php endforeach; ?>
                <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full font-medium">Total: <?= count($complianceRequirements) ?></span>
            </div>
        </div>
        <?php endif; ?>
        
        <?php endif; ?>
    </div>
    
    <!-- DIRECTORS/PARTNERS TAB -->
    <div id="content-directors" class="glass p-6 rounded-tl-none <?= $activeTab !== 'directors' ? 'hidden' : '' ?>">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold"><?= $terms['people_term'] ?></h2>
            <?php if ($terms['can_add_person']): ?>
            <button onclick="openAddPerson()" class="text-blue-600 text-sm"><i class="fas fa-plus mr-1"></i>Add <?= $terms['people_singular'] ?></button>
            <?php endif; ?>
        </div>
        
        <?php if (empty($persons)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-users text-5xl text-gray-300 mb-4"></i>
            <p>No <?= strtolower($terms['people_term']) ?> added yet</p>
            <?php if ($terms['can_add_person']): ?>
            <button onclick="openAddPerson()" class="btn mt-4"><i class="fas fa-plus mr-2"></i>Add <?= $terms['people_singular'] ?></button>
            <?php endif; ?>
        </div>
        <?php else: ?>
        <div class="space-y-4">
            <?php foreach ($persons as $p): ?>
            <div class="card">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 font-bold">
                            <?= strtoupper(substr($p['full_name'], 0, 2)) ?>
                        </div>
                        <div>
                            <p class="font-bold"><?= htmlspecialchars($p['full_name']) ?></p>
                            <p class="text-sm text-gray-500"><?= str_replace('_', ' ', $p['role_type']) ?></p>
                        </div>
                    </div>
                    <button onclick="togglePersonEdit(<?= $p['person_id'] ?>)" class="text-blue-600 hover:text-blue-800 text-sm">
                        <i class="fas fa-edit mr-1"></i>Edit
                    </button>
                </div>
                
                <!-- View Mode -->
                <div id="person-view-<?= $p['person_id'] ?>" class="pt-3 border-t">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 text-sm">
                        <div>
                            <span class="text-gray-400 text-xs">Mobile</span>
                            <p class="font-medium"><?= $p['mobile'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <div>
                            <span class="text-gray-400 text-xs">Email</span>
                            <p class="font-medium"><?= $p['email'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <div>
                            <span class="text-gray-400 text-xs">PAN</span>
                            <p class="font-medium"><?= $p['pan_number'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <?php if (in_array($entityType, ['PVT_LTD', 'PUBLIC_LTD', 'OPC'])): ?>
                        <div>
                            <span class="text-gray-400 text-xs">DIN</span>
                            <p class="font-medium"><?= $p['din'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if ($entityType === 'LLP'): ?>
                        <div>
                            <span class="text-gray-400 text-xs">DPIN</span>
                            <p class="font-medium"><?= $p['dpin'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <?php endif; ?>
                        <div>
                            <span class="text-gray-400 text-xs">Father's Name</span>
                            <p class="font-medium"><?= $p['father_name'] ?: '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <div>
                            <span class="text-gray-400 text-xs">Date of Birth</span>
                            <p class="font-medium"><?= $p['dob'] ? date('d M Y', strtotime($p['dob'])) : '<span class="text-gray-300">Not set</span>' ?></p>
                        </div>
                        <?php if ($p['dsc_status'] === 'ACTIVE'): ?>
                        <div>
                            <span class="text-gray-400 text-xs">DSC Status</span>
                            <p><span class="text-xs px-2 py-1 bg-green-100 text-green-700 rounded"><i class="fas fa-key mr-1"></i>Active</span></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Edit Mode (Hidden by default) -->
                <div id="person-edit-<?= $p['person_id'] ?>" class="pt-3 border-t hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <!-- Mobile -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="mobile">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">Mobile</label>
                                <input type="tel" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['mobile'] ?? '') ?>" placeholder="10 digit mobile" maxlength="10">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        
                        <!-- Email -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="email">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">Email</label>
                                <input type="email" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['email'] ?? '') ?>" placeholder="email@example.com">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        
                        <!-- PAN -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="pan_number">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">PAN Number</label>
                                <input type="text" name="value" class="inp text-sm uppercase" value="<?= htmlspecialchars($p['pan_number'] ?? '') ?>" placeholder="ABCDE1234F" maxlength="10">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        
                        <?php if (in_array($entityType, ['PVT_LTD', 'PUBLIC_LTD', 'OPC'])): ?>
                        <!-- DIN -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="din">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">DIN</label>
                                <input type="text" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['din'] ?? '') ?>" placeholder="8 digit DIN" maxlength="8">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        <?php endif; ?>
                        
                        <?php if ($entityType === 'LLP'): ?>
                        <!-- DPIN -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="dpin">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">DPIN</label>
                                <input type="text" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['dpin'] ?? '') ?>" placeholder="8 digit DPIN" maxlength="8">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        <?php endif; ?>
                        
                        <!-- Father's Name -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="father_name">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">Father's Name</label>
                                <input type="text" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['father_name'] ?? '') ?>" placeholder="Father's full name">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                        
                        <!-- Date of Birth -->
                        <form method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="update_person">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="field" value="dob">
                            <div class="flex-1">
                                <label class="text-xs text-gray-500">Date of Birth</label>
                                <input type="date" name="value" class="inp text-sm" value="<?= htmlspecialchars($p['dob'] ?? '') ?>">
                            </div>
                            <button type="submit" class="mt-4 px-3 py-2 bg-blue-600 text-white rounded text-xs">Save</button>
                        </form>
                    </div>
                    <button onclick="togglePersonEdit(<?= $p['person_id'] ?>)" class="mt-3 text-gray-500 hover:text-gray-700 text-sm">
                        <i class="fas fa-times mr-1"></i>Close
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- DOCUMENTS TAB -->
    <div id="content-documents" class="glass p-6 rounded-tl-none <?= $activeTab !== 'documents' ? 'hidden' : '' ?>">
        <h2 class="text-lg font-bold mb-2"><?= $terms['doc_term'] ?></h2>
        <p class="text-sm text-gray-500 mb-4">Upload required documents and provide information for your active services</p>
        
        <?php 
        // Calculate what's truly pending (not prefillable)
        $trulyPendingInfo = count(array_filter($infoFields, fn($f) => empty($f['current_value']) && empty($f['prefill_value'])));
        $prefillableInfo = count(array_filter($infoFields, fn($f) => empty($f['current_value']) && !empty($f['prefill_value'])));
        ?>
        
        <?php if ($prefillableInfo > 0): ?>
        <div class="mb-4 p-3 bg-blue-50 border border-blue-200 rounded-lg text-sm">
            <i class="fas fa-magic text-blue-500 mr-2"></i>
            <strong><?= $prefillableInfo ?> field(s)</strong> can be auto-filled from your profile. 
            <span class="text-blue-600">Click "Use" to confirm.</span>
        </div>
        <?php endif; ?>
        
        <!-- Request Documents - Grouped by Service -->
        <?php if (!empty($companyDocs)): 
            // Group documents by service AND request
            $docsByServiceRequest = [];
            foreach ($companyDocs as $d) {
                $key = $d['service_name'] . '|' . $d['request_id'];
                if (!isset($docsByServiceRequest[$key])) {
                    $docsByServiceRequest[$key] = [
                        'service_name' => $d['service_name'],
                        'request_id' => $d['request_id'],
                        'docs' => []
                    ];
                }
                $docsByServiceRequest[$key]['docs'][] = $d;
            }
        ?>
        <div class="mb-6">
            <h3 class="font-semibold text-gray-700 mb-3"><i class="fas fa-file-alt text-blue-500 mr-2"></i>Documents Required</h3>
            <?php foreach ($docsByServiceRequest as $sr): 
                $pendingCount = count(array_filter($sr['docs'], fn($d) => $d['status'] === 'PENDING'));
                $totalCount = count($sr['docs']);
            ?>
            <div class="mb-4 p-4 rounded-xl <?= $pendingCount > 0 ? 'bg-amber-50 border-2 border-amber-300' : 'bg-green-50 border border-green-200' ?>">
                <div class="flex items-center justify-between mb-3">
                    <h4 class="font-bold <?= $pendingCount > 0 ? 'text-amber-800' : 'text-green-800' ?>">
                        <i class="fas <?= $pendingCount > 0 ? 'fa-exclamation-circle' : 'fa-check-circle' ?> mr-2"></i>
                        <?= htmlspecialchars($sr['service_name']) ?>
                    </h4>
                    <span class="px-3 py-1 <?= $pendingCount > 0 ? 'bg-amber-200 text-amber-800' : 'bg-green-200 text-green-800' ?> rounded-full text-xs font-bold">
                        <?= $totalCount - $pendingCount ?>/<?= $totalCount ?> uploaded
                    </span>
                </div>
                <div class="grid gap-2">
                    <?php foreach ($sr['docs'] as $d): 
                        $isPending = $d['status'] === 'PENDING';
                    ?>
                    <div class="flex justify-between items-center p-3 bg-white rounded-lg <?= $isPending ? 'border-l-4 border-amber-400' : 'border-l-4 border-green-400' ?>">
                        <div>
                            <p class="font-medium text-sm"><?= htmlspecialchars($d['doc_name']) ?></p>
                            <?php if (!$isPending && $d['file_path']): ?>
                            <p class="text-xs text-green-600 mt-1"><i class="fas fa-check mr-1"></i>Uploaded</p>
                            <?php endif; ?>
                        </div>
                        <?php if ($isPending): ?>
                        <form method="POST" enctype="multipart/form-data" class="flex items-center gap-2">
                            <input type="hidden" name="action" value="upload_document">
                            <input type="hidden" name="request_document_id" value="<?= $d['id'] ?>">
                            <label class="cursor-pointer px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg text-sm font-medium">
                                <i class="fas fa-upload mr-1"></i>Upload
                                <input type="file" name="document" class="hidden" accept=".pdf,.jpg,.jpeg,.png" required onchange="this.form.submit()">
                            </label>
                        </form>
                        <?php else: ?>
                        <a href="<?= htmlspecialchars($d['file_path']) ?>" target="_blank" class="px-3 py-1 bg-blue-100 text-blue-600 hover:bg-blue-200 rounded text-xs">
                            <i class="fas fa-eye mr-1"></i>View
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <!-- Info Fields - Grouped by Service with Context -->
        <?php if (!empty($infoFields)): 
            // Group by service and person
            $infoByContext = [];
            foreach ($infoFields as $f) {
                $personName = $f['person_name'] ?? null;
                $contextKey = $f['service_name'] . ($personName ? " (for $personName)" : '');
                if (!isset($infoByContext[$contextKey])) {
                    $infoByContext[$contextKey] = [
                        'service_name' => $f['service_name'],
                        'person_name' => $personName,
                        'fields' => []
                    ];
                }
                $infoByContext[$contextKey]['fields'][] = $f;
            }
        ?>
        <div class="mb-6">
            <h3 class="font-semibold text-gray-700 mb-3"><i class="fas fa-info-circle text-purple-500 mr-2"></i>Information Required</h3>
            
            <?php foreach ($infoByContext as $contextKey => $ctx): 
                $pendingCount = count(array_filter($ctx['fields'], fn($f) => empty($f['current_value'])));
                $totalCount = count($ctx['fields']);
            ?>
            <div class="mb-4 p-4 rounded-xl <?= $pendingCount > 0 ? 'bg-purple-50 border-2 border-purple-200' : 'bg-green-50 border border-green-200' ?>">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <h4 class="font-bold <?= $pendingCount > 0 ? 'text-purple-800' : 'text-green-800' ?>">
                            <i class="fas <?= $pendingCount > 0 ? 'fa-edit' : 'fa-check-circle' ?> mr-2"></i>
                            <?= htmlspecialchars($ctx['service_name']) ?>
                        </h4>
                        <?php if ($ctx['person_name']): ?>
                        <p class="text-sm text-purple-600 mt-1">
                            <i class="fas fa-user mr-1"></i>For: <strong><?= htmlspecialchars($ctx['person_name']) ?></strong>
                        </p>
                        <?php endif; ?>
                    </div>
                    <span class="px-3 py-1 <?= $pendingCount > 0 ? 'bg-purple-200 text-purple-800' : 'bg-green-200 text-green-800' ?> rounded-full text-xs font-bold">
                        <?= $totalCount - $pendingCount ?>/<?= $totalCount ?> filled
                    </span>
                </div>
                
                <div class="space-y-3">
                    <?php foreach ($ctx['fields'] as $f): 
                        $filled = !empty($f['current_value']);
                        $hasPrefill = !empty($f['prefill_value']) && !$filled;
                    ?>
                    <form method="POST" class="p-3 bg-white rounded-lg <?= $filled ? 'border-l-4 border-green-400' : ($hasPrefill ? 'border-l-4 border-blue-400' : 'border-l-4 border-purple-400') ?>">
                        <input type="hidden" name="action" value="save_info">
                        <input type="hidden" name="field_id" value="<?= $f['info_field_id'] ?>">
                        <input type="hidden" name="request_id" value="<?= $f['request_id'] ?>">
                        
                        <div class="flex items-center justify-between mb-2">
                            <label class="text-sm font-medium text-gray-700">
                                <?= htmlspecialchars($f['field_name']) ?>
                                <?php if ($f['is_required']): ?><span class="text-red-500">*</span><?php endif; ?>
                            </label>
                            <?php if ($filled): ?>
                            <span class="text-xs text-green-600"><i class="fas fa-check mr-1"></i>Saved</span>
                            <?php elseif ($hasPrefill): ?>
                            <span class="text-xs text-blue-600"><i class="fas fa-magic mr-1"></i>From <?= htmlspecialchars($f['prefill_source']) ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <?php if ($f['field_type'] === 'select'): 
                            $options = json_decode($f['field_options'] ?? '[]', true) ?: [];
                        ?>
                        <select name="field_value" class="inp w-full" onchange="this.form.submit()">
                            <option value="">Select...</option>
                            <?php foreach ($options as $opt): ?>
                            <option value="<?= htmlspecialchars($opt) ?>" <?= $f['current_value'] === $opt ? 'selected' : '' ?>><?= htmlspecialchars($opt) ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                        <?php elseif ($f['field_type'] === 'date'): ?>
                        <input type="date" name="field_value" class="inp w-full" value="<?= htmlspecialchars($f['current_value'] ?? $f['prefill_value'] ?? '') ?>" onchange="this.form.submit()">
                        
                        <?php else: ?>
                        <div class="flex gap-2">
                            <?php if ($hasPrefill): ?>
                            <!-- Show prefill value with Use button -->
                            <input type="text" name="field_value" class="inp flex-1 bg-blue-50" value="<?= htmlspecialchars($f['prefill_value']) ?>" placeholder="<?= htmlspecialchars($f['placeholder'] ?? '') ?>">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium">
                                <i class="fas fa-check mr-1"></i>Use
                            </button>
                            <?php elseif ($filled): ?>
                            <!-- Already filled - show with edit option -->
                            <input type="text" name="field_value" class="inp flex-1 bg-green-50" value="<?= htmlspecialchars($f['current_value']) ?>">
                            <button type="submit" class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg text-sm">Update</button>
                            <?php else: ?>
                            <!-- Empty - needs input -->
                            <input type="text" name="field_value" class="inp flex-1" value="" placeholder="<?= htmlspecialchars($f['placeholder'] ?? 'Enter value...') ?>">
                            <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg text-sm font-medium">Save</button>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <!-- Person Documents -->
        <?php if (!empty($persons)): ?>
        <div>
            <h3 class="font-semibold text-gray-700 mb-3"><i class="fas fa-users text-indigo-500 mr-2"></i><?= $terms['people_singular'] ?> Documents</h3>
            <?php foreach ($persons as $p): 
                $uploadedCount = count(array_filter($requiredPersonDocs, fn($rd) => isset($personDocs[$p['person_id']][$rd['code']])));
                $totalDocs = count($requiredPersonDocs);
            ?>
            <div class="mb-4 p-4 rounded-xl <?= $uploadedCount < $totalDocs ? 'bg-indigo-50 border-2 border-indigo-200' : 'bg-green-50 border border-green-200' ?>">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-indigo-200 rounded-full flex items-center justify-center text-indigo-700 font-bold text-sm">
                            <?= strtoupper(substr($p['full_name'], 0, 2)) ?>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800"><?= htmlspecialchars($p['full_name']) ?></p>
                            <p class="text-xs text-gray-500"><?= str_replace('_', ' ', $p['role_type']) ?></p>
                        </div>
                    </div>
                    <span class="px-3 py-1 <?= $uploadedCount < $totalDocs ? 'bg-indigo-200 text-indigo-800' : 'bg-green-200 text-green-800' ?> rounded-full text-xs font-bold">
                        <?= $uploadedCount ?>/<?= $totalDocs ?> docs
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                    <?php foreach ($requiredPersonDocs as $rd): 
                        $hasDoc = isset($personDocs[$p['person_id']][$rd['code']]);
                        $docData = $personDocs[$p['person_id']][$rd['code']] ?? null;
                    ?>
                    <div class="text-center p-3 rounded-lg <?= $hasDoc ? 'bg-green-100 border border-green-300' : 'bg-white border-2 border-dashed border-indigo-300' ?>">
                        <p class="text-xs font-medium mb-2 <?= $hasDoc ? 'text-green-700' : 'text-gray-600' ?>"><?= $rd['name'] ?></p>
                        <?php if ($hasDoc): ?>
                        <div class="flex justify-center gap-1">
                            <span class="text-green-600 text-sm"><i class="fas fa-check-circle"></i></span>
                            <?php if ($docData && $docData['file_path']): ?>
                            <a href="<?= htmlspecialchars($docData['file_path']) ?>" target="_blank" class="text-blue-500 text-sm hover:text-blue-700"><i class="fas fa-eye"></i></a>
                            <?php endif; ?>
                        </div>
                        <?php else: ?>
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="upload_person_doc">
                            <input type="hidden" name="person_id" value="<?= $p['person_id'] ?>">
                            <input type="hidden" name="doc_code" value="<?= $rd['code'] ?>">
                            <label class="cursor-pointer inline-flex items-center gap-1 px-3 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded text-xs font-medium">
                                <i class="fas fa-upload"></i> Upload
                                <input type="file" name="document" class="hidden" accept=".pdf,.jpg,.jpeg,.png" onchange="this.form.submit()">
                            </label>
                        </form>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <!-- Entity Documents (Company Documents uploaded by admin) -->
        <?php if (!empty($entityDocuments)): ?>
        <div class="mb-6">
            <h3 class="font-semibold text-gray-700 mb-3"><i class="fas fa-building text-purple-500 mr-2"></i>Company Documents</h3>
            <div class="grid gap-3">
                <?php foreach ($entityDocuments as $doc): 
                    $ext = strtolower(pathinfo($doc['file_path'] ?? '', PATHINFO_EXTENSION));
                    $hasFile = !empty($doc['file_path']);
                    
                    // File type styling
                    if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                        $fileIcon = 'fa-file-image';
                        $fileColor = 'purple';
                    } elseif ($ext === 'pdf') {
                        $fileIcon = 'fa-file-pdf';
                        $fileColor = 'red';
                    } elseif (in_array($ext, ['doc', 'docx'])) {
                        $fileIcon = 'fa-file-word';
                        $fileColor = 'blue';
                    } elseif (in_array($ext, ['xls', 'xlsx'])) {
                        $fileIcon = 'fa-file-excel';
                        $fileColor = 'green';
                    } else {
                        $fileIcon = 'fa-file';
                        $fileColor = 'gray';
                    }
                    
                    // Status styling
                    $statusConfig = [
                        'PENDING' => ['bg' => 'bg-gray-100', 'text' => 'text-gray-600'],
                        'UPLOADED' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700'],
                        'VERIFIED' => ['bg' => 'bg-green-100', 'text' => 'text-green-700'],
                        'APPROVED' => ['bg' => 'bg-green-100', 'text' => 'text-green-700'],
                        'REJECTED' => ['bg' => 'bg-red-100', 'text' => 'text-red-700'],
                    ];
                    $status = $doc['status'] ?? 'UPLOADED';
                    $statusStyle = $statusConfig[$status] ?? $statusConfig['UPLOADED'];
                ?>
                <div class="card p-4 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-<?= $fileColor ?>-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas <?= $fileIcon ?> text-<?= $fileColor ?>-500"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900"><?= htmlspecialchars($doc['doc_name'] ?? 'Document') ?></p>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="text-xs text-gray-400"><?= date('d M Y', strtotime($doc['created_at'])) ?></span>
                                <span class="px-2 py-0.5 rounded text-xs <?= $statusStyle['bg'] ?> <?= $statusStyle['text'] ?>"><?= $status ?></span>
                            </div>
                        </div>
                    </div>
                    <?php if ($hasFile): ?>
                    <div class="flex gap-2">
                        <a href="portal_document_file.php?token=<?= urlencode($token) ?>&id=<?= $doc['id'] ?>&action=view" 
                           target="_blank" 
                           class="px-3 py-1.5 bg-blue-100 text-blue-600 hover:bg-blue-200 rounded-lg text-sm">
                            <i class="fas fa-eye mr-1"></i>View
                        </a>
                        <a href="portal_document_file.php?token=<?= urlencode($token) ?>&id=<?= $doc['id'] ?>&action=download" 
                           class="px-3 py-1.5 bg-green-100 text-green-600 hover:bg-green-200 rounded-lg text-sm">
                            <i class="fas fa-download mr-1"></i>Download
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if (empty($companyDocs) && empty($infoFields) && empty($persons) && empty($entityDocuments)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-folder-open text-5xl text-gray-300 mb-4"></i>
            <p>No documents required yet. Request a service to get started.</p>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- CERTIFICATES TAB -->
    <div id="content-certificates" class="glass p-6 rounded-tl-none <?= $activeTab !== 'certificates' ? 'hidden' : '' ?>">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-bold">Certificates & Licenses</h2>
            <button onclick="openCert()" class="text-blue-600 text-sm"><i class="fas fa-plus mr-1"></i>Upload</button>
        </div>
        
        <?php if (empty($certificates)): ?>
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-certificate text-5xl text-gray-300 mb-4"></i>
            <p>No certificates yet</p>
            <button onclick="openCert()" class="btn mt-4"><i class="fas fa-plus mr-2"></i>Upload Certificate</button>
        </div>
        <?php else: ?>
        <div class="grid gap-4">
            <?php foreach ($certificates as $c): ?>
            <div class="card flex justify-between items-center">
                <div>
                    <p class="font-medium"><?= htmlspecialchars($c['name']) ?></p>
                    <div class="flex gap-3 mt-1 text-xs text-gray-500">
                        <?php if ($c['number']): ?><span>No: <?= $c['number'] ?></span><?php endif; ?>
                        <?php if ($c['expiry_date']): ?>
                        <span class="<?= strtotime($c['expiry_date']) < time() ? 'text-red-600' : '' ?>">
                            Expires: <?= date('d M Y', strtotime($c['expiry_date'])) ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($c['file_path']): ?>
                <div class="flex gap-2">
                    <a href="<?= htmlspecialchars($c['file_path']) ?>" target="_blank" class="px-3 py-1 bg-blue-100 text-blue-600 hover:bg-blue-200 rounded-lg text-sm">
                        <i class="fas fa-eye mr-1"></i>View
                    </a>
                    <a href="<?= htmlspecialchars($c['file_path']) ?>" download class="px-3 py-1 bg-green-100 text-green-600 hover:bg-green-200 rounded-lg text-sm">
                        <i class="fas fa-download mr-1"></i>Download
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <!-- RESOLUTIONS TAB (Board Resolutions, Minutes, etc.) -->
    <div id="content-resolutions" class="glass p-6 rounded-tl-none <?= $activeTab !== 'resolutions' ? 'hidden' : '' ?>">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="text-lg font-bold"><i class="fas fa-file-signature text-purple-600 mr-2"></i>Board Resolutions & Documents</h2>
                <p class="text-sm text-gray-500 mt-1">Review and sign official documents</p>
            </div>
        </div>
        
        <?php if (empty($rocDocuments)): ?>
        <!-- Empty State -->
        <div class="text-center py-12 text-gray-500">
            <i class="fas fa-file-signature text-5xl text-gray-300 mb-4"></i>
            <p>No documents available yet</p>
            <p class="text-sm mt-2">Board resolutions and other official documents will appear here when shared by your CA.</p>
        </div>
        <?php else: ?>
        <!-- Summary Stats -->
        <div class="grid grid-cols-3 gap-3 mb-6">
            <?php 
            $rocPending = count(array_filter($rocDocuments, fn($d) => $d['status'] === 'FINAL' && empty($d['signed_file_path'])));
            $rocSigned = count(array_filter($rocDocuments, fn($d) => !empty($d['signed_file_path'])));
            $rocTotal = count($rocDocuments);
            ?>
            <div class="text-center p-3 bg-purple-50 rounded-xl border border-purple-100">
                <p class="text-2xl font-bold text-purple-600"><?= $rocTotal ?></p>
                <p class="text-xs text-purple-600">Total</p>
            </div>
            <div class="text-center p-3 bg-amber-50 rounded-xl border border-amber-100">
                <p class="text-2xl font-bold text-amber-600"><?= $rocPending ?></p>
                <p class="text-xs text-amber-600">Pending Signature</p>
            </div>
            <div class="text-center p-3 bg-green-50 rounded-xl border border-green-100">
                <p class="text-2xl font-bold text-green-600"><?= $rocSigned ?></p>
                <p class="text-xs text-green-600">Signed</p>
            </div>
        </div>
        
        <?php if ($rocPending > 0): ?>
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 mb-6">
            <div class="flex items-start gap-3">
                <i class="fas fa-exclamation-triangle text-amber-500 text-xl mt-1"></i>
                <div>
                    <p class="font-semibold text-amber-800">Action Required</p>
                    <p class="text-sm text-amber-700">You have <?= $rocPending ?> document(s) awaiting your signature. Please review and upload signed copies.</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Documents List -->
        <div class="space-y-4">
            <?php 
            $rocCategories = ['RESOLUTION' => 'Board Resolutions', 'MINUTES' => 'Meeting Minutes', 'NOTICE' => 'Notices', 'DECLARATION' => 'Declarations'];
            $rocByCategory = [];
            foreach ($rocDocuments as $rd) {
                $cat = $rd['category'] ?? 'RESOLUTION';
                $rocByCategory[$cat][] = $rd;
            }
            
            foreach ($rocCategories as $catKey => $catLabel):
                if (empty($rocByCategory[$catKey])) continue;
            ?>
            <div class="bg-white rounded-xl border overflow-hidden">
                <div class="px-4 py-3 bg-gray-50 border-b">
                    <h3 class="font-semibold text-gray-800"><?= $catLabel ?></h3>
                </div>
                <div class="divide-y">
                    <?php foreach ($rocByCategory[$catKey] as $rd): 
                        $needsSignature = $rd['status'] === 'FINAL' && empty($rd['signed_file_path']);
                        $isSigned = !empty($rd['signed_file_path']);
                    ?>
                    <div class="p-4 <?= $needsSignature ? 'bg-amber-50' : '' ?>">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-medium text-gray-900"><?= htmlspecialchars($rd['document_title'] ?: $rd['template_name']) ?></span>
                                    <?php if ($isSigned): ?>
                                    <span class="px-2 py-0.5 bg-green-100 text-green-700 text-xs rounded-full"><i class="fas fa-check mr-1"></i>Signed</span>
                                    <?php elseif ($needsSignature): ?>
                                    <span class="px-2 py-0.5 bg-amber-100 text-amber-700 text-xs rounded-full animate-pulse"><i class="fas fa-pen mr-1"></i>Needs Signature</span>
                                    <?php else: ?>
                                    <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-xs rounded-full"><?= $rd['status'] ?></span>
                                    <?php endif; ?>
                                </div>
                                <?php if ($rd['resolution_number']): ?>
                                <p class="text-xs text-purple-600 mt-1">Ref: <?= htmlspecialchars($rd['resolution_number']) ?></p>
                                <?php endif; ?>
                                <?php if ($rd['meeting_date']): ?>
                                <p class="text-xs text-gray-500 mt-1"><i class="fas fa-calendar mr-1"></i><?= date('d M Y', strtotime($rd['meeting_date'])) ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="flex items-center gap-2">
                                <!-- View Document -->
                                <a href="../roc_download.php?id=<?= $rd['id'] ?>&format=html&portal=1" target="_blank" class="px-3 py-2 bg-blue-100 text-blue-700 rounded-lg text-sm hover:bg-blue-200">
                                    <i class="fas fa-eye mr-1"></i>View
                                </a>
                                <!-- Download PDF -->
                                <a href="../roc_download.php?id=<?= $rd['id'] ?>&format=pdf&portal=1" target="_blank" class="px-3 py-2 bg-red-100 text-red-700 rounded-lg text-sm hover:bg-red-200">
                                    <i class="fas fa-file-pdf mr-1"></i>PDF
                                </a>
                                <?php if ($needsSignature): ?>
                                <!-- Upload Signed Copy -->
                                <button onclick="openRocUpload(<?= $rd['id'] ?>, '<?= htmlspecialchars(addslashes($rd['document_title'] ?: $rd['template_name'])) ?>')" class="px-3 py-2 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                                    <i class="fas fa-upload mr-1"></i>Upload Signed
                                </button>
                                <?php elseif ($isSigned): ?>
                                <!-- View Signed Copy -->
                                <a href="../<?= htmlspecialchars($rd['signed_file_path']) ?>" target="_blank" class="px-3 py-2 bg-green-100 text-green-700 rounded-lg text-sm hover:bg-green-200">
                                    <i class="fas fa-check-circle mr-1"></i>View Signed
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Instructions -->
        <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-100">
            <h4 class="font-semibold text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>How to Sign Documents</h4>
            <ol class="text-sm text-blue-700 space-y-2 list-decimal list-inside">
                <li>Click <strong>View</strong> or <strong>PDF</strong> to review the document</li>
                <li>Print the document and sign at the designated places</li>
                <li>Scan or photograph the signed document</li>
                <li>Click <strong>Upload Signed</strong> to submit the signed copy</li>
            </ol>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- COMPANY SERVICE MODAL -->
<div id="company-svc-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-lg max-h-[80vh] overflow-hidden flex flex-col">
        <div class="p-4 border-b flex justify-between items-center">
            <h3 class="text-lg font-bold"><i class="fas fa-building text-blue-500 mr-2"></i><?= $companyServiceLabel ?></h3>
            <button onclick="closeCompanySvc()" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
        </div>
        <div class="p-4 border-b"><input type="text" id="company-svc-search" class="inp" placeholder="Search services..." oninput="filterCompanySvc()"></div>
        <div class="flex-1 overflow-y-auto p-4">
            <?php if (empty($companyAvailableServices)): ?>
            <p class="text-gray-500 text-center py-8">No services available</p>
            <?php else: ?>
            <?php $grouped = []; foreach ($companyAvailableServices as $svc) { $grouped[$svc['category'] ?? 'Other'][] = $svc; } ?>
            <?php foreach ($grouped as $cat => $svcs): ?>
            <div class="company-svc-cat mb-4">
                <h4 class="font-semibold text-blue-700 mb-2 text-sm uppercase"><?= htmlspecialchars($cat) ?></h4>
                <?php foreach ($svcs as $svc): ?>
                <form method="POST" class="company-svc-item mb-2" data-name="<?= strtolower($svc['name']) ?>" data-cat="<?= strtolower($cat) ?>">
                    <input type="hidden" name="action" value="create_service">
                    <input type="hidden" name="service_id" value="<?= $svc['id'] ?>">
                    <button type="submit" class="w-full p-3 text-left bg-blue-50 hover:bg-blue-100 border-2 border-blue-200 hover:border-blue-400 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div><span class="font-medium"><?= htmlspecialchars($svc['name']) ?></span><?php if ($svc['description']): ?><p class="text-xs text-gray-500 mt-0.5"><?= htmlspecialchars(substr($svc['description'], 0, 60)) ?></p><?php endif; ?></div>
                            <?php if ($svc['base_price']): ?><span class="text-sm text-blue-600">₹<?= number_format($svc['base_price']) ?></span><?php endif; ?>
                        </div>
                    </button>
                </form>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div id="no-company-svc" class="hidden text-center py-8 text-gray-500">No services found</div>
            
            <!-- Custom Service Option -->
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-sm text-gray-600 mb-2"><i class="fas fa-question-circle mr-1"></i>Can't find your service?</p>
                <button type="button" onclick="openCustomSvc()" class="w-full p-3 text-left bg-gray-100 hover:bg-gray-200 border-2 border-dashed border-gray-300 hover:border-gray-400 rounded-xl">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-plus-circle text-gray-500 text-xl"></i>
                        <div>
                            <span class="font-medium text-gray-700">Request Other Service</span>
                            <p class="text-xs text-gray-500">Describe what you need and we'll help</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- PERSON SERVICE MODAL -->
<div id="person-svc-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-lg max-h-[80vh] overflow-hidden flex flex-col">
        <div class="p-4 border-b flex justify-between items-center">
            <h3 class="text-lg font-bold"><i class="fas fa-user text-purple-500 mr-2"></i><?= $personServiceLabel ?></h3>
            <button onclick="closePersonSvc()" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
        </div>
        <div class="p-4 border-b space-y-3">
            <select id="person-select" class="inp">
                <option value="">Select <?= $terms['people_singular'] ?>...</option>
                <?php foreach ($persons as $p): ?>
                <option value="<?= $p['person_id'] ?>"><?= htmlspecialchars($p['full_name']) ?> (<?= str_replace('_', ' ', $p['role_type']) ?>)</option>
                <?php endforeach; ?>
            </select>
            <input type="text" id="person-svc-search" class="inp" placeholder="Search services..." oninput="filterPersonSvc()">
        </div>
        <div class="flex-1 overflow-y-auto p-4">
            <?php if (empty($personAvailableServices)): ?>
            <p class="text-gray-500 text-center py-8">No person services available</p>
            <?php else: ?>
            <?php $pGrouped = []; foreach ($personAvailableServices as $svc) { $pGrouped[$svc['category'] ?? 'Other'][] = $svc; } ?>
            <?php foreach ($pGrouped as $cat => $svcs): ?>
            <div class="person-svc-cat mb-4">
                <h4 class="font-semibold text-purple-700 mb-2 text-sm uppercase"><?= htmlspecialchars($cat) ?></h4>
                <?php foreach ($svcs as $svc): ?>
                <form method="POST" class="person-svc-item mb-2" data-name="<?= strtolower($svc['name']) ?>">
                    <input type="hidden" name="action" value="create_person_service">
                    <input type="hidden" name="service_id" value="<?= $svc['id'] ?>">
                    <input type="hidden" name="person_id" class="person-id-input" value="">
                    <button type="submit" class="w-full p-3 text-left bg-purple-50 hover:bg-purple-100 border-2 border-purple-200 hover:border-purple-400 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div><span class="font-medium"><?= htmlspecialchars($svc['name']) ?></span></div>
                            <?php if ($svc['base_price']): ?><span class="text-sm text-purple-600">₹<?= number_format($svc['base_price']) ?></span><?php endif; ?>
                        </div>
                    </button>
                </form>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- ADD PERSON MODAL -->
<div id="add-person-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4"><i class="fas fa-user-plus text-green-500 mr-2"></i>Add <?= $terms['people_singular'] ?></h3>
        <form method="POST">
            <input type="hidden" name="action" value="add_person">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Full Name *</label>
                    <input type="text" name="full_name" class="inp" required placeholder="As per PAN">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">PAN Number</label>
                    <input type="text" name="pan_number" class="inp uppercase" maxlength="10" placeholder="ABCDE1234F">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Role</label>
                    <select name="role_type" class="inp">
                        <?php foreach ($availableRoles as $role => $label): ?>
                        <option value="<?= $role ?>"><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Mobile</label>
                        <input type="tel" name="mobile" class="inp" maxlength="10" placeholder="10 digits">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="email" class="inp" placeholder="email@example.com">
                    </div>
                </div>
                <?php if (in_array($entityType, ['PVT_LTD', 'PUBLIC_LTD', 'OPC'])): ?>
                <div>
                    <label class="block text-sm font-medium mb-1">DIN (if Director)</label>
                    <input type="text" name="din" class="inp" maxlength="8" placeholder="8 digits">
                </div>
                <?php endif; ?>
                <?php if (in_array($entityType, ['LLP'])): ?>
                <div>
                    <label class="block text-sm font-medium mb-1">DPIN</label>
                    <input type="text" name="dpin" class="inp" maxlength="8" placeholder="8 digits">
                </div>
                <?php endif; ?>
            </div>
            <div class="flex gap-2 justify-end mt-6">
                <button type="button" onclick="closeAddPerson()" class="px-4 py-2 bg-gray-100 rounded-lg">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Add <?= $terms['people_singular'] ?></button>
            </div>
        </form>
    </div>
</div>

<!-- CANCEL MODAL -->
<div id="cancel-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4"><i class="fas fa-times-circle text-red-500 mr-2"></i>Cancel Request</h3>
        <form method="POST">
            <input type="hidden" name="action" value="cancel_service">
            <input type="hidden" name="request_id" id="cancel-id">
            <p class="mb-4">Cancel <strong id="cancel-name"></strong>?</p>
            <textarea name="cancel_reason" class="inp w-full mb-4" rows="2" placeholder="Reason (optional)"></textarea>
            <div class="flex gap-2 justify-end">
                <button type="button" onclick="closeCancel()" class="px-4 py-2 bg-gray-100 rounded-lg">Keep</button>
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg">Cancel Request</button>
            </div>
        </form>
    </div>
</div>

<!-- CERTIFICATE MODAL -->
<div id="cert-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4"><i class="fas fa-certificate text-green-500 mr-2"></i>Upload Certificate</h3>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload_certificate">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Certificate Type</label>
                    <select name="certificate_type_id" class="inp">
                        <option value="">Select type...</option>
                        <?php foreach ($certificateTypes as $ct): ?>
                        <option value="<?= $ct['id'] ?>"><?= htmlspecialchars($ct['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Certificate Number</label>
                    <input type="text" name="certificate_number" class="inp" placeholder="e.g., GST123456789">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Issue Date</label>
                        <input type="date" name="issue_date" class="inp">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Expiry Date</label>
                        <input type="date" name="expiry_date" class="inp">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">File *</label>
                    <input type="file" name="certificate_file" class="inp" accept=".pdf,.jpg,.jpeg,.png" required>
                </div>
            </div>
            <div class="flex gap-2 justify-end mt-6">
                <button type="button" onclick="closeCert()" class="px-4 py-2 bg-gray-100 rounded-lg">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- ROC SIGNED COPY UPLOAD MODAL -->
<div id="roc-upload-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4"><i class="fas fa-file-signature text-purple-500 mr-2"></i>Upload Signed Copy</h3>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="upload_roc_signed">
            <input type="hidden" name="roc_id" id="roc-upload-id">
            <div class="space-y-4">
                <div class="p-3 bg-purple-50 rounded-lg">
                    <p class="text-sm text-gray-600">Document:</p>
                    <p class="font-semibold text-purple-800" id="roc-upload-name"></p>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Signed Document *</label>
                    <input type="file" name="signed_file" class="inp" accept=".pdf,.jpg,.jpeg,.png" required>
                    <p class="text-xs text-gray-500 mt-1">PDF, JPG, or PNG. Max 10MB.</p>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg text-sm text-blue-700">
                    <i class="fas fa-info-circle mr-1"></i>
                    Please upload the signed copy of the document. Make sure all required signatures are in place.
                </div>
            </div>
            <div class="flex gap-2 justify-end mt-6">
                <button type="button" onclick="closeRocUpload()" class="px-4 py-2 bg-gray-100 rounded-lg">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg"><i class="fas fa-upload mr-1"></i>Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- CUSTOM SERVICE REQUEST MODAL -->
<div id="custom-svc-modal" class="modal fixed inset-0 bg-black/50 items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl w-full max-w-md p-6">
        <h3 class="text-lg font-bold mb-4"><i class="fas fa-concierge-bell text-purple-500 mr-2"></i>Request Custom Service</h3>
        <form method="POST">
            <input type="hidden" name="action" value="request_custom_service">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Service Name *</label>
                    <input type="text" name="custom_service_name" class="inp" required placeholder="e.g., Import Export License, FSSAI Registration">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea name="custom_service_desc" class="inp" rows="3" placeholder="Please describe what you need help with..."></textarea>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg text-sm text-blue-700">
                    <i class="fas fa-info-circle mr-1"></i>
                    Our team will review your request and contact you with details about the service, documents required, and pricing.
                </div>
            </div>
            <div class="flex gap-2 justify-end mt-6">
                <button type="button" onclick="closeCustomSvc()" class="px-4 py-2 bg-gray-100 rounded-lg">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg">Submit Request</button>
            </div>
        </form>
    </div>
</div>

<script>
function showTab(t) {
    document.querySelectorAll('[id^="content-"]').forEach(e => e.classList.add('hidden'));
    document.querySelectorAll('.tab').forEach(e => e.classList.remove('active'));
    document.getElementById('content-' + t)?.classList.remove('hidden');
    document.getElementById('tab-' + t)?.classList.add('active');
    history.replaceState({}, '', '?token=<?= urlencode($token) ?>&tab=' + t);
}

// Company Service Modal
function openCompanySvc() { document.getElementById('company-svc-modal').classList.add('show'); }
function closeCompanySvc() { document.getElementById('company-svc-modal').classList.remove('show'); }
function filterCompanySvc() {
    const s = document.getElementById('company-svc-search').value.toLowerCase().trim();
    let v = 0;
    document.querySelectorAll('.company-svc-item').forEach(i => {
        const match = !s || i.dataset.name.includes(s) || (i.dataset.cat && i.dataset.cat.includes(s));
        i.style.display = match ? '' : 'none';
        if (match) v++;
    });
    document.querySelectorAll('.company-svc-cat').forEach(c => {
        c.style.display = Array.from(c.querySelectorAll('.company-svc-item')).some(i => i.style.display !== 'none') ? '' : 'none';
    });
    document.getElementById('no-company-svc').classList.toggle('hidden', v > 0);
}

// Person Service Modal
function openPersonSvc() { document.getElementById('person-svc-modal').classList.add('show'); }
function closePersonSvc() { document.getElementById('person-svc-modal').classList.remove('show'); }
function filterPersonSvc() {
    const s = document.getElementById('person-svc-search').value.toLowerCase().trim();
    document.querySelectorAll('.person-svc-item').forEach(i => {
        i.style.display = !s || i.dataset.name.includes(s) ? '' : 'none';
    });
    document.querySelectorAll('.person-svc-cat').forEach(c => {
        c.style.display = Array.from(c.querySelectorAll('.person-svc-item')).some(i => i.style.display !== 'none') ? '' : 'none';
    });
}

// Person select updates forms
document.getElementById('person-select')?.addEventListener('change', function() {
    document.querySelectorAll('.person-id-input').forEach(inp => inp.value = this.value);
});

// Validate person selection
document.querySelectorAll('.person-svc-item form').forEach(form => {
    form.addEventListener('submit', function(e) {
        if (!document.getElementById('person-select')?.value) {
            e.preventDefault();
            alert('Please select a <?= $terms['people_singular'] ?> first');
        }
    });
});

// Add Person Modal
function openAddPerson() { document.getElementById('add-person-modal').classList.add('show'); }
function closeAddPerson() { document.getElementById('add-person-modal').classList.remove('show'); }

// Cancel Modal
function openCancel(id, name) { document.getElementById('cancel-id').value = id; document.getElementById('cancel-name').textContent = name; document.getElementById('cancel-modal').classList.add('show'); }
function closeCancel() { document.getElementById('cancel-modal').classList.remove('show'); }

// Certificate Modal
function openCert() { document.getElementById('cert-modal').classList.add('show'); }
function closeCert() { document.getElementById('cert-modal').classList.remove('show'); }

// ROC Upload Modal
function openRocUpload(id, name) { 
    document.getElementById('roc-upload-id').value = id;
    document.getElementById('roc-upload-name').textContent = name;
    document.getElementById('roc-upload-modal').classList.add('show'); 
}
function closeRocUpload() { document.getElementById('roc-upload-modal').classList.remove('show'); }

// Custom Service Modal
function openCustomSvc() { 
    closeCompanySvc(); // Close the service list modal first
    document.getElementById('custom-svc-modal').classList.add('show'); 
}
function closeCustomSvc() { document.getElementById('custom-svc-modal').classList.remove('show'); }

// Toggle Person Edit Mode
function togglePersonEdit(personId) {
    const viewDiv = document.getElementById('person-view-' + personId);
    const editDiv = document.getElementById('person-edit-' + personId);
    if (viewDiv && editDiv) {
        viewDiv.classList.toggle('hidden');
        editDiv.classList.toggle('hidden');
    }
}

// Close modals on backdrop click
document.querySelectorAll('.modal').forEach(m => m.addEventListener('click', e => { if (e.target === m) m.classList.remove('show'); }));
</script>
</body>
</html>
