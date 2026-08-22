<?php
/**
 * Isolated AJAX Test - No header/footer
 */
require_once 'includes/db.php';
startSession();

// Handle AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    $requestId = (int)($_POST['request_id'] ?? 0);
    $newStatus = trim($_POST['new_status'] ?? '');
    
    if (!$requestId || empty($newStatus)) {
        echo json_encode(['success' => false, 'message' => 'Missing data']);
        exit;
    }
    
    try {
        dbExecute("UPDATE service_requests SET status = ? WHERE id = ?", [$newStatus, $requestId]);
        echo json_encode(['success' => true, 'message' => 'Updated to ' . $newStatus]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}

// Get some requests
$requests = dbFetchAll("
    SELECT sr.id, sr.request_number, sr.status, c.name as client_name, s.name as service_name
    FROM service_requests sr
    JOIN clients c ON sr.client_id = c.id
    JOIN services s ON sr.service_id = s.id
    WHERE sr.deleted_at IS NULL
    ORDER BY sr.id DESC
    LIMIT 10
");
?>
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Test</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #f5f5f5; }
        .btn { padding: 5px 10px; margin: 2px; cursor: pointer; border: none; border-radius: 4px; }
        .btn-waiting { background: #fef3c7; color: #92400e; }
        .btn-hold { background: #fee2e2; color: #991b1b; }
        .btn-new { background: #e5e7eb; color: #374151; }
        #log { background: #1e1e1e; color: #0f0; padding: 15px; font-family: monospace; margin-top: 20px; min-height: 200px; white-space: pre-wrap; }
    </style>
</head>
<body>
    <h1>Isolated AJAX Test</h1>
    <p>This page has NO header.php, NO footer.php, NO validation.js, NO Alpine.js</p>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Request #</th>
                <th>Client</th>
                <th>Service</th>
                <th>Current Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $r): ?>
            <tr id="row-<?= $r['id'] ?>">
                <td><?= $r['id'] ?></td>
                <td><?= htmlspecialchars($r['request_number']) ?></td>
                <td><?= htmlspecialchars($r['client_name']) ?></td>
                <td><?= htmlspecialchars($r['service_name']) ?></td>
                <td id="status-<?= $r['id'] ?>"><?= htmlspecialchars($r['status'] ?? 'NULL') ?></td>
                <td>
                    <button class="btn btn-waiting" onclick="updateStatus(<?= $r['id'] ?>, 'WAITING_DOCS', this)">→ Waiting</button>
                    <button class="btn btn-hold" onclick="updateStatus(<?= $r['id'] ?>, 'HOLD', this)">Hold</button>
                    <button class="btn btn-new" onclick="updateStatus(<?= $r['id'] ?>, 'NEW', this)">→ New</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div id="log">Console Log:
</div>
    
    <script>
    function log(msg) {
        document.getElementById('log').textContent += '\n' + new Date().toLocaleTimeString() + ': ' + msg;
        console.log(msg);
    }
    
    function updateStatus(requestId, newStatus, btn) {
        log('updateStatus called: ' + requestId + ' -> ' + newStatus);
        
        btn.disabled = true;
        btn.textContent = '...';
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'test_ajax.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onload = function() {
            log('Response: ' + xhr.status + ' - ' + xhr.responseText);
            
            if (xhr.status === 200) {
                try {
                    var data = JSON.parse(xhr.responseText);
                    if (data.success) {
                        log('SUCCESS! Status updated.');
                        document.getElementById('status-' + requestId).textContent = newStatus;
                        btn.textContent = '✓';
                        btn.style.background = '#d1fae5';
                    } else {
                        log('ERROR: ' + data.message);
                        btn.textContent = 'Error';
                    }
                } catch (e) {
                    log('JSON Parse Error: ' + e);
                }
            }
        };
        
        xhr.onerror = function() {
            log('Network Error');
            btn.textContent = 'Error';
        };
        
        var data = 'request_id=' + requestId + '&new_status=' + newStatus;
        log('Sending: ' + data);
        xhr.send(data);
    }
    
    log('Page loaded. Click any button to test.');
    </script>
</body>
</html>
