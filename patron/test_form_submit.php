<?php
/**
 * Test form submission data
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>POST Data Received:</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    if (isset($_POST['certificates'])) {
        echo "<h3>Certificates Array:</h3>";
        foreach ($_POST['certificates'] as $idx => $cert) {
            echo "<div style='background:#f5f5f5;padding:10px;margin:10px 0;'>";
            echo "<strong>Certificate $idx:</strong><br>";
            echo "Type ID: " . ($cert['certificate_type_id'] ?? 'N/A') . "<br>";
            echo "Number: " . ($cert['certificate_number'] ?? 'N/A') . "<br>";
            echo "Issue Date: " . ($cert['issue_date'] ?? 'N/A') . "<br>";
            echo "File Path: " . ($cert['file_path'] ?? 'N/A') . "<br>";
            echo "Extracted Data Length: " . strlen($cert['extracted_data'] ?? '') . " chars<br>";
            
            if (!empty($cert['extracted_data'])) {
                $data = json_decode($cert['extracted_data'], true);
                if ($data) {
                    echo "<div style='background:#ecfdf5;padding:8px;margin-top:5px;'>";
                    echo "Document Type: " . ($data['document_type'] ?? 'N/A') . "<br>";
                    echo "Person Data: " . count($data['person_data'] ?? []) . " persons<br>";
                    if (!empty($data['person_data'])) {
                        foreach ($data['person_data'] as $p) {
                            echo "- " . $p['full_name'] . " (DIN: " . ($p['din'] ?? 'N/A') . ")<br>";
                        }
                    }
                    echo "</div>";
                }
            }
            echo "</div>";
        }
    }
    
    echo "<br><a href='test_form_submit.php'>← Test Again</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Test Form Submit</title></head>
<body style="padding:20px;font-family:Arial,sans-serif;">
<h2>Test Form Submission</h2>
<p>This tests if the extracted_data hidden field is being submitted.</p>

<form method="POST">
    <input type="hidden" name="certificates[0][certificate_type_id]" value="1">
    <input type="hidden" name="certificates[0][certificate_number]" value="TEST123">
    <input type="hidden" name="certificates[0][issue_date]" value="2024-01-01">
    <input type="hidden" name="certificates[0][file_path]" value="test/path.pdf">
    <input type="hidden" name="certificates[0][extracted_data]" id="extractedData" value="">
    
    <p>
        <button type="button" onclick="setTestData()">1. Click to Set Test Extracted Data</button>
    </p>
    <p>
        <span id="status">No data set yet</span>
    </p>
    <p>
        <button type="submit" style="padding:10px 20px;background:#22c55e;color:white;border:none;border-radius:5px;">2. Submit Form</button>
    </p>
</form>

<script>
function setTestData() {
    const testData = {
        "document_type": "LLP_MASTER",
        "client_data": {"llpin": "ACB-2687", "name": "INDIC CHATAK LLP"},
        "person_data": [
            {"din": "10172224", "full_name": "RASHMI SAMEER RANADE", "role_type": "DESIGNATED_PARTNER"},
            {"din": "10172225", "full_name": "SAMEER VINAYAK RANADE", "role_type": "DESIGNATED_PARTNER"}
        ]
    };
    
    const json = JSON.stringify(testData);
    document.getElementById('extractedData').value = json;
    document.getElementById('status').innerHTML = '✅ Data set! Length: ' + json.length + ' chars<br><small>' + json.substring(0, 100) + '...</small>';
}
</script>
</body>
</html>
