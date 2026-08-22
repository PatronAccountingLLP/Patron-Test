<?php
require_once 'includes/db.php';

$docId = (int)($_GET['id'] ?? 0);
$format = $_GET['format'] ?? 'html';
$portal = isset($_GET['portal']);

if (!$docId) { die('Document ID required'); }

$doc = dbFetchOne("
    SELECT d.*, t.name as template_name, c.name as client_name
    FROM roc_generated_documents d
    JOIN roc_templates t ON t.id = d.template_id
    JOIN clients c ON c.id = d.client_id
    WHERE d.id = ?
", [$docId]);

if (!$doc) { die('Document not found'); }

if ($portal && !$doc['portal_visible']) { die('Access denied'); }

$title = $doc['document_title'] ?: $doc['template_name'];
$content = $doc['content_html'];

$baseStyles = '
    body { font-family: "Times New Roman", Times, serif; font-size: 12pt; line-height: 1.6; margin: 40px; color: #333; }
    h1, h2, h3 { font-weight: bold; margin: 20px 0 10px; }
    h1 { font-size: 16pt; text-align: center; text-transform: uppercase; }
    h2 { font-size: 14pt; }
    h3 { font-size: 12pt; }
    p { margin: 10px 0; text-align: justify; }
    table { width: 100%; border-collapse: collapse; margin: 15px 0; }
    th, td { border: 1px solid #333; padding: 8px; text-align: left; }
    th { background: #f0f0f0; font-weight: bold; }
    .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #333; padding-bottom: 20px; }
    .company-name { font-size: 18pt; font-weight: bold; text-transform: uppercase; }
    .cin { font-size: 10pt; color: #666; }
    .resolution-title { text-align: center; font-weight: bold; text-decoration: underline; margin: 30px 0 20px; }
    .signature-block { margin-top: 60px; }
    .signature-line { display: inline-block; width: 200px; border-bottom: 1px solid #333; margin: 0 20px; }
    @media print { body { margin: 20mm; } }
';

switch ($format) {
    case 'pdf':
        // PDF via browser print
        header('Content-Type: text/html; charset=utf-8');
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>' . htmlspecialchars($title) . '</title>';
        echo '<style>' . $baseStyles . '</style>';
        echo '</head><body onload="window.print()">';
        echo $content;
        echo '</body></html>';
        break;

    case 'docx':
        // Word document (HTML-based .doc)
        header('Content-Type: application/msword');
        header('Content-Disposition: attachment; filename="' . preg_replace('/[^a-zA-Z0-9_-]/', '_', $title) . '.doc"');
        echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word">';
        echo '<head><meta charset="utf-8"><title>' . htmlspecialchars($title) . '</title>';
        echo '<style>' . $baseStyles . '</style>';
        echo '</head><body>';
        echo $content;
        echo '</body></html>';
        break;

    case 'print':
        header('Content-Type: text/html; charset=utf-8');
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>' . htmlspecialchars($title) . '</title>';
        echo '<style>' . $baseStyles . '</style>';
        echo '</head><body onload="window.print();window.close()">';
        echo $content;
        echo '</body></html>';
        break;

    case 'html':
    default:
        header('Content-Type: text/html; charset=utf-8');
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>' . htmlspecialchars($title) . '</title>';
        echo '<style>' . $baseStyles . ' body { max-width: 800px; margin: 40px auto; box-shadow: 0 0 20px rgba(0,0,0,0.1); padding: 40px; background: white; }</style>';
        echo '</head><body>';
        echo '<div style="text-align:right;margin-bottom:20px;font-family:sans-serif;font-size:10pt">';
        echo '<a href="?id=' . $docId . '&format=pdf" style="margin-right:10px">📄 Print/PDF</a>';
        echo '<a href="?id=' . $docId . '&format=docx">📝 Download Word</a>';
        echo '</div>';
        echo $content;
        echo '</body></html>';
        break;
}
