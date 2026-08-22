<?php
/**
 * PATRON - Board Resolutions & ROC Documents
 * Generate resolutions, minutes, notices & declarations from templates
 * 
 * LOCATION: /patron/board_resolutions.php
 */

require_once 'includes/db.php';
require_once 'includes/access_control.php';

startSession();
requireLogin();

$pageTitle = 'Board Resolutions & Documents';
$clientId = (int)($_GET['client_id'] ?? 0);
$templateId = (int)($_GET['template'] ?? 0);
$action = $_GET['action'] ?? 'list';

// Get client info
$client = null;
$directors = [];
if ($clientId) {
    $client = dbFetchOne("SELECT * FROM clients WHERE id = ? AND deleted_at IS NULL", [$clientId]);
    if ($client) {
        $directors = dbFetchAll("
            SELECT p.*, cp.role_type, cp.designation, cp.appointment_date
            FROM persons_new p
            JOIN client_persons cp ON p.id = cp.person_id
            WHERE cp.client_id = ? AND cp.is_active = 1 AND p.deleted_at IS NULL
            ORDER BY cp.role_type, p.full_name
        ", [$clientId]) ?: [];
    }
}

// Get templates
$templates = dbFetchAll("
    SELECT * FROM roc_templates 
    WHERE is_active = 1 
    ORDER BY category, sort_order, name
") ?: [];

// Group templates by category
$templatesByCategory = [];
foreach ($templates as $t) {
    $templatesByCategory[$t['category']][] = $t;
}

// Get selected template
$selectedTemplate = null;
if ($templateId) {
    $selectedTemplate = dbFetchOne("SELECT * FROM roc_templates WHERE id = ?", [$templateId]);
    
    // Get template fields
    if ($selectedTemplate) {
        $templateFields = dbFetchAll("
            SELECT * FROM roc_template_fields 
            WHERE template_id = ? 
            ORDER BY sort_order
        ", [$templateId]) ?: [];
    }
}

// Handle form submission - generate document
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = 'Invalid request.';
    } else {
        $template = dbFetchOne("SELECT * FROM roc_templates WHERE id = ?", [(int)$_POST['template_id']]);
        
        if ($template) {
            $content = $template['content_html'];
            
            // Replace all placeholders with form values
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'field_') === 0) {
                    $placeholder = str_replace('field_', '', $key);
                    $content = str_replace('{{' . $placeholder . '}}', htmlspecialchars($value), $content);
                }
            }
            
            // Replace remaining placeholders with empty string
            $content = preg_replace('/\{\{[^}]+\}\}/', '', $content);
            
            $generatedContent = $content;
        }
    }
}

require_once 'includes/header.php';

// Category labels
$categoryLabels = [
    'RESOLUTION' => ['label' => 'Board Resolutions', 'icon' => 'fa-file-contract', 'color' => 'blue'],
    'MINUTES' => ['label' => 'Meeting Minutes', 'icon' => 'fa-clipboard-list', 'color' => 'purple'],
    'NOTICE' => ['label' => 'Notices', 'icon' => 'fa-bell', 'color' => 'amber'],
    'DECLARATION' => ['label' => 'Declarations', 'icon' => 'fa-file-signature', 'color' => 'green'],
];
?>

<div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                <i class="fas fa-gavel mr-2 text-purple-600"></i>Board Resolutions & Documents
            </h1>
            <?php if ($client): ?>
            <p class="text-gray-600 mt-1">
                <i class="fas fa-building mr-1"></i><?= htmlspecialchars($client['name']) ?>
                <?php if ($client['cin']): ?>
                <span class="text-gray-400 ml-2">CIN: <?= htmlspecialchars($client['cin']) ?></span>
                <?php endif; ?>
            </p>
            <?php endif; ?>
        </div>
        <?php if (!$clientId): ?>
        <div class="w-72">
            <select id="clientSelect" class="form-input w-full" onchange="if(this.value) window.location='?client_id='+this.value">
                <option value="">-- Select Client --</option>
                <?php
                $clients = dbFetchAll("SELECT id, name FROM clients WHERE deleted_at IS NULL AND entity_type IN ('PVT_LTD','OPC','PUBLIC_LTD','SECTION_8','LLP') ORDER BY name");
                foreach ($clients as $c):
                ?>
                <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <?php endif; ?>
    </div>

    <?php if (isset($generatedContent)): ?>
    <!-- Generated Document -->
    <div class="card mb-6">
        <div class="p-4 border-b bg-green-50 flex items-center justify-between">
            <h3 class="font-bold text-green-800">
                <i class="fas fa-check-circle mr-2"></i>Generated Document
            </h3>
            <div class="flex gap-2">
                <button onclick="printDocument()" class="btn btn-primary">
                    <i class="fas fa-print mr-2"></i>Print
                </button>
                <button onclick="downloadPDF()" class="btn btn-secondary">
                    <i class="fas fa-file-pdf mr-2"></i>Download PDF
                </button>
                <a href="?client_id=<?= $clientId ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                </a>
            </div>
        </div>
        <div id="documentContent" class="p-6 bg-white">
            <?= $generatedContent ?>
        </div>
    </div>
    
    <script>
    function printDocument() {
        var content = document.getElementById('documentContent').innerHTML;
        var win = window.open('', '_blank');
        win.document.write('<html><head><title>Print Document</title>');
        win.document.write('<style>body { font-family: "Times New Roman", serif; }</style>');
        win.document.write('</head><body>');
        win.document.write(content);
        win.document.write('</body></html>');
        win.document.close();
        win.print();
    }
    
    function downloadPDF() {
        alert('PDF download requires server-side PDF generation. Use Print → Save as PDF for now.');
    }
    </script>
    
    <?php elseif ($selectedTemplate && $clientId): ?>
    <!-- Template Form -->
    <div class="card">
        <div class="p-4 border-b bg-gradient-to-r from-purple-50 to-indigo-50">
            <h3 class="font-bold text-purple-800">
                <i class="fas fa-edit mr-2"></i><?= htmlspecialchars($selectedTemplate['name']) ?>
            </h3>
            <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($selectedTemplate['description'] ?? '') ?></p>
        </div>
        
        <form method="POST" class="p-6">
            <input type="hidden" name="csrf_token" value="<?= generateCsrfToken() ?>">
            <input type="hidden" name="template_id" value="<?= $selectedTemplate['id'] ?>">
            <input type="hidden" name="client_id" value="<?= $clientId ?>">
            
            <!-- Auto-filled Company Fields -->
            <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                <h4 class="font-medium text-blue-800 mb-3"><i class="fas fa-building mr-2"></i>Company Details (Auto-filled)</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                        <input type="text" name="field_company_name" value="<?= htmlspecialchars($client['name']) ?>" class="form-input w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">CIN</label>
                        <input type="text" name="field_cin" value="<?= htmlspecialchars($client['cin'] ?? '') ?>" class="form-input w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">PAN</label>
                        <input type="text" name="field_pan" value="<?= htmlspecialchars($client['pan'] ?? '') ?>" class="form-input w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Registered Office</label>
                        <input type="text" name="field_registered_office" value="<?= htmlspecialchars($client['address'] ?? '') ?>" class="form-input w-full">
                    </div>
                </div>
            </div>
            
            <!-- Directors -->
            <?php if (!empty($directors)): ?>
            <div class="mb-6 p-4 bg-green-50 rounded-lg">
                <h4 class="font-medium text-green-800 mb-3"><i class="fas fa-users mr-2"></i>Directors</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php 
                    $directorIndex = 1;
                    foreach ($directors as $dir): 
                        if ($directorIndex > 2) break;
                    ?>
                    <div class="p-3 bg-white rounded border">
                        <div class="text-sm text-gray-500 mb-1">Director <?= $directorIndex ?></div>
                        <input type="hidden" name="field_director_<?= $directorIndex ?>_name" value="<?= htmlspecialchars($dir['full_name']) ?>">
                        <input type="hidden" name="field_director_<?= $directorIndex ?>_din" value="<?= htmlspecialchars($dir['din'] ?? '') ?>">
                        <p class="font-medium"><?= htmlspecialchars($dir['full_name']) ?></p>
                        <p class="text-sm text-gray-500">DIN: <?= htmlspecialchars($dir['din'] ?? 'N/A') ?></p>
                    </div>
                    <?php 
                        $directorIndex++;
                    endforeach; 
                    ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Template-specific Fields -->
            <?php if (!empty($templateFields)): ?>
            <div class="mb-6">
                <h4 class="font-medium text-gray-800 mb-3"><i class="fas fa-edit mr-2"></i>Resolution Details</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach ($templateFields as $field): ?>
                    <div class="<?= $field['field_type'] === 'TEXTAREA' ? 'md:col-span-2' : '' ?>">
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <?= htmlspecialchars($field['field_label']) ?>
                            <?php if ($field['is_required'] ?? false): ?><span class="text-red-500">*</span><?php endif; ?>
                        </label>
                        <?php if ($field['field_type'] === 'DATE'): ?>
                        <input type="date" name="field_<?= $field['field_name'] ?>" value="<?= date('Y-m-d') ?>" class="form-input w-full" <?= ($field['is_required'] ?? false) ? 'required' : '' ?>>
                        <?php elseif ($field['field_type'] === 'TIME'): ?>
                        <input type="time" name="field_<?= $field['field_name'] ?>" value="10:00" class="form-input w-full">
                        <?php elseif ($field['field_type'] === 'TEXTAREA'): ?>
                        <textarea name="field_<?= $field['field_name'] ?>" rows="3" class="form-input w-full" placeholder="<?= htmlspecialchars($field['placeholder'] ?? '') ?>"><?= htmlspecialchars($field['default_value'] ?? '') ?></textarea>
                        <?php elseif ($field['field_type'] === 'SELECT' && !empty($field['options'])): ?>
                        <select name="field_<?= $field['field_name'] ?>" class="form-input w-full">
                            <?php foreach (json_decode($field['options'], true) as $opt): ?>
                            <option value="<?= htmlspecialchars($opt) ?>"><?= htmlspecialchars($opt) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php else: ?>
                        <input type="text" name="field_<?= $field['field_name'] ?>" value="<?= htmlspecialchars($field['default_value'] ?? '') ?>" class="form-input w-full" placeholder="<?= htmlspecialchars($field['placeholder'] ?? '') ?>" <?= ($field['is_required'] ?? false) ? 'required' : '' ?>>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Common Fields -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Meeting/Resolution Date</label>
                    <input type="date" name="field_meeting_date" value="<?= date('Y-m-d') ?>" class="form-input w-full">
                    <input type="hidden" name="field_resolution_date" value="<?= date('d/m/Y') ?>">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Meeting Time</label>
                    <input type="time" name="field_meeting_time" value="10:00" class="form-input w-full">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Place</label>
                    <input type="text" name="field_place" value="<?= htmlspecialchars($client['city'] ?? 'Pune') ?>" class="form-input w-full">
                </div>
            </div>
            
            <div class="flex gap-3">
                <button type="submit" name="generate" class="btn btn-primary">
                    <i class="fas fa-file-alt mr-2"></i>Generate Document
                </button>
                <a href="?client_id=<?= $clientId ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Templates
                </a>
            </div>
        </form>
    </div>
    
    <?php elseif ($clientId): ?>
    <!-- Template Selection -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach ($categoryLabels as $category => $meta): ?>
        <?php if (!empty($templatesByCategory[$category])): ?>
        <div class="card">
            <div class="p-4 border-b bg-<?= $meta['color'] ?>-50">
                <h3 class="font-bold text-<?= $meta['color'] ?>-800">
                    <i class="fas <?= $meta['icon'] ?> mr-2"></i><?= $meta['label'] ?>
                </h3>
            </div>
            <div class="divide-y">
                <?php foreach ($templatesByCategory[$category] as $t): ?>
                <a href="?client_id=<?= $clientId ?>&template=<?= $t['id'] ?>" 
                   class="block p-4 hover:bg-gray-50 transition-colors">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-800"><?= htmlspecialchars($t['name']) ?></p>
                            <?php if ($t['description']): ?>
                            <p class="text-sm text-gray-500 mt-1"><?= htmlspecialchars($t['description']) ?></p>
                            <?php endif; ?>
                        </div>
                        <i class="fas fa-chevron-right text-gray-400"></i>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    
    <?php else: ?>
    <!-- No Client Selected -->
    <div class="card p-12 text-center">
        <i class="fas fa-building text-6xl text-gray-300 mb-4"></i>
        <h3 class="text-xl font-medium text-gray-600 mb-2">Select a Client</h3>
        <p class="text-gray-500 mb-6">Choose a company to generate board resolutions and documents</p>
        <select id="clientSelectMain" class="form-input w-72 mx-auto" onchange="if(this.value) window.location='?client_id='+this.value">
            <option value="">-- Select Client --</option>
            <?php
            $clients = dbFetchAll("SELECT id, name, entity_type FROM clients WHERE deleted_at IS NULL AND entity_type IN ('PVT_LTD','OPC','PUBLIC_LTD','SECTION_8','LLP') ORDER BY name");
            foreach ($clients as $c):
            ?>
            <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?> (<?= $c['entity_type'] ?>)</option>
            <?php endforeach; ?>
        </select>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
