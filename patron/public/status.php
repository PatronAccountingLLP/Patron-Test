<?php
/**
 * PATRON CLIENT PORTAL
 * Request Status Tracking - No Login Required
 */

require_once '../includes/db.php';

$token = sanitize($_GET['token'] ?? '');

if (!$token) {
    die(showError('Invalid Link', 'This link is invalid. Please contact Patron Accounting.'));
}

// Get service request
$request = dbFetchOne("
    SELECT sr.*, s.name as service_name, s.code as service_code, s.estimated_days,
           c.name as client_name, 
           u.display_name as assigned_to_name, u.email as assigned_email, u.mobile as assigned_mobile
    FROM service_requests sr
    JOIN services s ON sr.service_id = s.id
    JOIN clients c ON sr.client_id = c.id
    LEFT JOIN users u ON sr.assigned_to = u.id
    WHERE sr.form_token = ? AND sr.deleted_at IS NULL
", [$token]);

if (!$request) {
    die(showError('Not Found', 'This request was not found. Please contact Patron Accounting.'));
}

// Get documents status
$documents = dbFetchAll("
    SELECT rd.status, rd.is_required, dt.name as doc_name
    FROM request_documents rd
    JOIN document_types dt ON rd.document_type_id = dt.id
    WHERE rd.service_request_id = ?
    ORDER BY rd.is_required DESC
", [$request['id']]);

$docStats = [
    'total' => count($documents),
    'uploaded' => count(array_filter($documents, fn($d) => in_array($d['status'], ['UPLOADED', 'VERIFIED']))),
    'verified' => count(array_filter($documents, fn($d) => $d['status'] === 'VERIFIED')),
    'pending' => count(array_filter($documents, fn($d) => $d['status'] === 'PENDING'))
];

// Status timeline
$statusSteps = [
    'NEW' => ['label' => 'Request Created', 'icon' => 'fa-file-alt', 'color' => 'blue'],
    'ASSIGNED' => ['label' => 'Team Assigned', 'icon' => 'fa-user-check', 'color' => 'blue'],
    'PENDING_DOCUMENTS' => ['label' => 'Documents Pending', 'icon' => 'fa-folder-open', 'color' => 'yellow'],
    'IN_PROGRESS' => ['label' => 'In Progress', 'icon' => 'fa-cog', 'color' => 'blue'],
    'UNDER_REVIEW' => ['label' => 'Under Review', 'icon' => 'fa-eye', 'color' => 'purple'],
    'SUBMITTED' => ['label' => 'Submitted to Govt', 'icon' => 'fa-paper-plane', 'color' => 'indigo'],
    'QUERY_RAISED' => ['label' => 'Query Raised', 'icon' => 'fa-question-circle', 'color' => 'orange'],
    'COMPLETED' => ['label' => 'Completed', 'icon' => 'fa-check-circle', 'color' => 'green'],
    'CANCELLED' => ['label' => 'Cancelled', 'icon' => 'fa-times-circle', 'color' => 'red'],
    'REJECTED' => ['label' => 'Rejected', 'icon' => 'fa-ban', 'color' => 'red']
];

$currentStatus = $statusSteps[$request['status']] ?? ['label' => $request['status'], 'icon' => 'fa-info', 'color' => 'gray'];

// Timeline order
$timelineOrder = ['NEW', 'ASSIGNED', 'PENDING_DOCUMENTS', 'IN_PROGRESS', 'UNDER_REVIEW', 'SUBMITTED', 'COMPLETED'];
$currentIndex = array_search($request['status'], $timelineOrder);
if ($currentIndex === false) $currentIndex = -1;

function showError($title, $message) {
    return '<!DOCTYPE html>
    <html><head><title>Error</title><script src="https://cdn.tailwindcss.com"></script></head>
    <body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-lg p-8 max-w-md text-center">
            <h1 class="text-xl font-bold text-red-600 mb-2">' . $title . '</h1>
            <p class="text-gray-600">' . $message . '</p>
        </div>
    </body></html>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Status - <?= $request['request_number'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-4xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">P</span>
                </div>
                <div>
                    <h1 class="font-bold text-gray-900">Patron Accounting LLP</h1>
                    <p class="text-xs text-gray-500">Request Tracking</p>
                </div>
            </div>
        </div>
    </header>
    
    <main class="max-w-4xl mx-auto px-4 py-8">
        <!-- Status Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div>
                    <p class="text-sm text-gray-500">Request #<?= $request['request_number'] ?></p>
                    <h2 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($request['service_name']) ?></h2>
                    <p class="text-gray-600">for <?= htmlspecialchars($request['client_name']) ?></p>
                </div>
                <div class="text-center md:text-right">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-<?= $currentStatus['color'] ?>-100 text-<?= $currentStatus['color'] ?>-700 rounded-full">
                        <i class="fas <?= $currentStatus['icon'] ?>"></i>
                        <span class="font-medium"><?= $currentStatus['label'] ?></span>
                    </div>
                </div>
            </div>
            
            <!-- Progress Timeline -->
            <div class="relative">
                <div class="flex justify-between mb-2">
                    <?php 
                    $displaySteps = ['NEW', 'IN_PROGRESS', 'SUBMITTED', 'COMPLETED'];
                    foreach ($displaySteps as $i => $step): 
                        $stepInfo = $statusSteps[$step];
                        $isActive = $request['status'] === $step;
                        $isPast = array_search($request['status'], $timelineOrder) >= array_search($step, $timelineOrder);
                    ?>
                    <div class="flex flex-col items-center <?= $i < count($displaySteps) - 1 ? 'flex-1' : '' ?>">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center <?= $isPast ? 'bg-green-500 text-white' : ($isActive ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-400') ?>">
                            <i class="fas <?= $stepInfo['icon'] ?>"></i>
                        </div>
                        <p class="text-xs text-center mt-2 <?= $isActive ? 'font-bold text-gray-900' : 'text-gray-500' ?>">
                            <?= $stepInfo['label'] ?>
                        </p>
                    </div>
                    <?php if ($i < count($displaySteps) - 1): ?>
                    <div class="flex-1 flex items-center px-2 mt-5">
                        <div class="h-1 w-full <?= $isPast && array_search($request['status'], $timelineOrder) > array_search($step, $timelineOrder) ? 'bg-green-500' : 'bg-gray-200' ?> rounded"></div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Details Grid -->
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Request Details -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-4">
                    <i class="fas fa-info-circle mr-2 text-blue-500"></i> Request Details
                </h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Request Number</span>
                        <span class="font-mono"><?= $request['request_number'] ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Service</span>
                        <span class="font-medium"><?= htmlspecialchars($request['service_name']) ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Created On</span>
                        <span><?= date('d M Y', strtotime($request['created_at'])) ?></span>
                    </div>
                    <?php if ($request['expected_completion']): ?>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Expected Completion</span>
                        <span><?= date('d M Y', strtotime($request['expected_completion'])) ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($request['assigned_to_name']): ?>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Handled By</span>
                        <span><?= htmlspecialchars($request['assigned_to_name']) ?></span>
                    </div>
                    <?php endif; ?>
                </div>
                
                <?php if ($request['assigned_to_name']): ?>
                <!-- Contact Your Resource -->
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <h4 class="text-sm font-medium text-gray-700 mb-3">
                        <i class="fas fa-headset mr-1 text-green-500"></i> Contact Your Resource
                    </h4>
                    <div class="bg-green-50 rounded-lg p-3">
                        <p class="font-medium text-gray-900"><?= htmlspecialchars($request['assigned_to_name']) ?></p>
                        <?php if ($request['assigned_mobile']): ?>
                        <p class="text-sm mt-1">
                            <a href="tel:<?= htmlspecialchars($request['assigned_mobile']) ?>" class="text-green-600 hover:text-green-700">
                                <i class="fas fa-phone mr-1"></i> <?= htmlspecialchars($request['assigned_mobile']) ?>
                            </a>
                        </p>
                        <?php endif; ?>
                        <?php if ($request['assigned_email']): ?>
                        <p class="text-sm mt-1">
                            <a href="mailto:<?= htmlspecialchars($request['assigned_email']) ?>" class="text-green-600 hover:text-green-700">
                                <i class="fas fa-envelope mr-1"></i> <?= htmlspecialchars($request['assigned_email']) ?>
                            </a>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($request['progress_percentage'] > 0): ?>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-500">Progress</span>
                        <span class="font-medium"><?= $request['progress_percentage'] ?>%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: <?= $request['progress_percentage'] ?>%"></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- Documents Status -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="font-semibold text-gray-900 mb-4">
                    <i class="fas fa-folder-open mr-2 text-blue-500"></i> Documents Status
                </h3>
                
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                        <div class="text-2xl font-bold text-gray-900"><?= $docStats['total'] ?></div>
                        <div class="text-xs text-gray-500">Total</div>
                    </div>
                    <div class="text-center p-3 bg-green-50 rounded-lg">
                        <div class="text-2xl font-bold text-green-600"><?= $docStats['uploaded'] ?></div>
                        <div class="text-xs text-gray-500">Uploaded</div>
                    </div>
                    <div class="text-center p-3 bg-orange-50 rounded-lg">
                        <div class="text-2xl font-bold text-orange-600"><?= $docStats['pending'] ?></div>
                        <div class="text-xs text-gray-500">Pending</div>
                    </div>
                </div>
                
                <?php if ($docStats['pending'] > 0): ?>
                <a href="form.php?token=<?= urlencode($token) ?>" 
                   class="block w-full text-center px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-upload mr-2"></i> Upload Documents
                </a>
                <?php else: ?>
                <div class="text-center p-4 bg-green-50 rounded-lg text-green-700">
                    <i class="fas fa-check-circle mr-2"></i> All documents submitted!
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Completed Message -->
        <?php if ($request['status'] === 'COMPLETED'): ?>
        <div class="mt-6 bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl shadow-lg p-6 text-white text-center">
            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-trophy text-4xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Request Completed!</h3>
            <p class="text-green-100">Your <?= htmlspecialchars($request['service_name']) ?> has been successfully completed.</p>
        </div>
        <?php endif; ?>
        
        <!-- Help -->
        <div class="mt-6 bg-white rounded-xl shadow-lg p-6 text-center">
            <p class="text-gray-600 mb-2">Have questions about your request?</p>
            <p class="text-gray-900 font-medium">
                <i class="fas fa-phone mr-2 text-blue-500"></i> +91 XXXXXXXXXX
                <span class="mx-3 text-gray-300">|</span>
                <i class="fas fa-envelope mr-2 text-blue-500"></i> sales@patronaccounting.com
            </p>
        </div>
    </main>
    
    <footer class="mt-8 py-6 text-center text-sm text-gray-500">
        <p>© <?= date('Y') ?> Patron Accounting LLP</p>
    </footer>
</body>
</html>
