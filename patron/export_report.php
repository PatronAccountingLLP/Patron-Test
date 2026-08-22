<?php
/**
 * PATRON ADMIN DASHBOARD
 * Export Reports to Excel
 */

require_once 'includes/db.php';
startSession();
requireLogin();

// Date range
$dateFrom = sanitize($_GET['date_from'] ?? date('Y-m-01'));
$dateTo = sanitize($_GET['date_to'] ?? date('Y-m-d'));

// Generate filename
$filename = 'Patron_Report_' . date('Y-m-d_His') . '.csv';

// Set headers for CSV download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Create output stream
$output = fopen('php://output', 'w');

// Add BOM for Excel UTF-8 compatibility
fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

// ===== SUMMARY SECTION =====
fputcsv($output, ['PATRON ACCOUNTING - REPORT']);
fputcsv($output, ['Period: ' . date('d M Y', strtotime($dateFrom)) . ' to ' . date('d M Y', strtotime($dateTo))]);
fputcsv($output, ['Generated: ' . date('d M Y H:i:s')]);
fputcsv($output, []);

// ===== REVENUE SUMMARY =====
$revenueStats = dbFetchOne("
    SELECT 
        COUNT(*) as total_requests,
        SUM(CASE WHEN status = 'COMPLETED' THEN 1 ELSE 0 END) as completed_requests,
        SUM(quoted_price) as total_quoted,
        SUM(CASE WHEN status = 'COMPLETED' THEN quoted_price ELSE 0 END) as total_earned,
        SUM(govt_fee) as total_govt_fees
    FROM service_requests 
    WHERE DATE(created_at) BETWEEN ? AND ? AND deleted_at IS NULL
", [$dateFrom, $dateTo]);

fputcsv($output, ['=== REVENUE SUMMARY ===']);
fputcsv($output, ['Metric', 'Value']);
fputcsv($output, ['Total Requests', $revenueStats['total_requests'] ?? 0]);
fputcsv($output, ['Completed Requests', $revenueStats['completed_requests'] ?? 0]);
fputcsv($output, ['Total Quoted (₹)', $revenueStats['total_quoted'] ?? 0]);
fputcsv($output, ['Total Earned (₹)', $revenueStats['total_earned'] ?? 0]);
fputcsv($output, ['Govt Fees (₹)', $revenueStats['total_govt_fees'] ?? 0]);
fputcsv($output, []);

// ===== REVENUE BY SERVICE =====
$revenueByService = dbFetchAll("
    SELECT s.name as service_name, s.code,
           COUNT(sr.id) as request_count,
           SUM(sr.quoted_price) as total_revenue,
           SUM(CASE WHEN sr.status = 'COMPLETED' THEN sr.quoted_price ELSE 0 END) as earned_revenue
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    WHERE DATE(sr.created_at) BETWEEN ? AND ? AND sr.deleted_at IS NULL
    GROUP BY s.id
    ORDER BY total_revenue DESC
", [$dateFrom, $dateTo]);

fputcsv($output, ['=== REVENUE BY SERVICE ===']);
fputcsv($output, ['Service', 'Code', 'Requests', 'Total Revenue (₹)', 'Earned Revenue (₹)']);
foreach ($revenueByService as $row) {
    fputcsv($output, [
        $row['service_name'],
        $row['code'],
        $row['request_count'],
        $row['total_revenue'],
        $row['earned_revenue']
    ]);
}
fputcsv($output, []);

// ===== TOP CLIENTS =====
$topClients = dbFetchAll("
    SELECT c.name, c.entity_type,
           COUNT(sr.id) as request_count,
           SUM(sr.quoted_price) as total_revenue
    FROM clients c
    JOIN service_requests sr ON c.id = sr.client_id
    WHERE sr.deleted_at IS NULL AND DATE(sr.created_at) BETWEEN ? AND ?
    GROUP BY c.id
    ORDER BY total_revenue DESC
    LIMIT 20
", [$dateFrom, $dateTo]);

fputcsv($output, ['=== TOP CLIENTS ===']);
fputcsv($output, ['Client Name', 'Entity Type', 'Requests', 'Total Revenue (₹)']);
foreach ($topClients as $row) {
    fputcsv($output, [
        $row['name'],
        str_replace('_', ' ', $row['entity_type']),
        $row['request_count'],
        $row['total_revenue']
    ]);
}
fputcsv($output, []);

// ===== TEAM PERFORMANCE =====
$teamPerformance = dbFetchAll("
    SELECT u.display_name,
           COUNT(DISTINCT sr.id) as requests_handled,
           COUNT(DISTINCT t.id) as tasks_assigned,
           SUM(CASE WHEN t.status = 'COMPLETED' THEN 1 ELSE 0 END) as tasks_completed,
           SUM(CASE WHEN t.due_date < CURDATE() AND t.status NOT IN ('COMPLETED', 'CANCELLED') THEN 1 ELSE 0 END) as overdue_tasks
    FROM users u
    LEFT JOIN service_requests sr ON u.id = sr.assigned_to AND DATE(sr.created_at) BETWEEN ? AND ? AND sr.deleted_at IS NULL
    LEFT JOIN tasks t ON u.id = t.assigned_to AND DATE(t.created_at) BETWEEN ? AND ? AND t.deleted_at IS NULL
    WHERE u.user_type = 'INTERNAL' AND u.status = 'ACTIVE' AND u.deleted_at IS NULL
    GROUP BY u.id
    ORDER BY tasks_completed DESC
", [$dateFrom, $dateTo, $dateFrom, $dateTo]);

fputcsv($output, ['=== TEAM PERFORMANCE ===']);
fputcsv($output, ['Team Member', 'Requests Handled', 'Tasks Assigned', 'Tasks Completed', 'Overdue Tasks']);
foreach ($teamPerformance as $row) {
    fputcsv($output, [
        $row['display_name'],
        $row['requests_handled'],
        $row['tasks_assigned'],
        $row['tasks_completed'],
        $row['overdue_tasks']
    ]);
}
fputcsv($output, []);

// ===== ALL REQUESTS DETAIL =====
$allRequests = dbFetchAll("
    SELECT sr.request_number, c.name as client_name, s.name as service_name,
           sr.status, sr.quoted_price, sr.govt_fee, sr.priority,
           u.display_name as assigned_to, sr.created_at, sr.expected_completion
    FROM service_requests sr
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE DATE(sr.created_at) BETWEEN ? AND ? AND sr.deleted_at IS NULL
    ORDER BY sr.created_at DESC
", [$dateFrom, $dateTo]);

fputcsv($output, ['=== ALL REQUESTS DETAIL ===']);
fputcsv($output, ['Request #', 'Client', 'Service', 'Status', 'Quoted (₹)', 'Govt Fee (₹)', 'Priority', 'Assigned To', 'Created', 'Expected Completion']);
foreach ($allRequests as $row) {
    fputcsv($output, [
        $row['request_number'],
        $row['client_name'],
        $row['service_name'],
        str_replace('_', ' ', $row['status']),
        $row['quoted_price'],
        $row['govt_fee'],
        $row['priority'],
        $row['assigned_to'] ?? 'Unassigned',
        date('d-m-Y', strtotime($row['created_at'])),
        $row['expected_completion'] ? date('d-m-Y', strtotime($row['expected_completion'])) : ''
    ]);
}

fclose($output);
exit;
