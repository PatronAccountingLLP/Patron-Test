<?php
require_once 'includes/db.php';
startSession();

echo "<h2>Debug Card Data for Request 14</h2><pre>";

// Run the exact same query the board uses
$r = dbFetchOne("
    SELECT sr.id, sr.request_number, sr.status, sr.priority, sr.assigned_to, sr.reviewer_id, 
        sr.created_at, sr.notes,
        COALESCE(sr.due_date, sr.expected_completion, sr.expected_completion_date) as deadline,
        s.name as service_name, c.name as client_name, 
        u.display_name as assigned_to_name,
        rv.display_name as reviewer_name,
        
        -- Document counts
        (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id) as total_docs,
        (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status = 'PENDING') as pending_docs,
        (SELECT COUNT(*) FROM request_documents WHERE service_request_id = sr.id AND status IN ('RECEIVED', 'APPROVED', 'UPLOADED', 'VERIFIED')) as received_docs,
        
        -- Information field counts
        (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id) as total_info,
        (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id AND (field_value IS NULL OR field_value = '')) as pending_info,
        (SELECT COUNT(*) FROM request_info_values WHERE service_request_id = sr.id AND field_value IS NOT NULL AND field_value != '') as filled_info,
        
        DATEDIFF(CURDATE(), DATE(sr.created_at)) as days_old
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    LEFT JOIN users rv ON sr.reviewer_id = rv.id
    WHERE sr.id = 14
");

echo "=== Data from Query ===\n";
print_r($r);

echo "\n=== Key Values ===\n";
echo "total_docs: " . $r['total_docs'] . "\n";
echo "pending_docs: " . $r['pending_docs'] . "\n";
echo "received_docs: " . $r['received_docs'] . "\n";
echo "total_info: " . $r['total_info'] . "\n";
echo "pending_info: " . $r['pending_info'] . "\n";

// Check condition
$totalDocs = (int)($r['total_docs'] ?? 0);
$totalInfo = (int)($r['total_info'] ?? 0);
echo "\n=== Condition Check ===\n";
echo "totalDocs > 0 || totalInfo > 0: " . (($totalDocs > 0 || $totalInfo > 0) ? "TRUE - should show!" : "FALSE") . "\n";

echo "</pre>";
