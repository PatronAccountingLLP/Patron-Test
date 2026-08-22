<?php
/**
 * PATRON - View Person Details
 * Display all information about a person
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$personId = (int)($_GET['id'] ?? 0);
if (!$personId) {
    setFlash('error', 'Person ID is required.');
    header('Location: persons.php');
    exit;
}

// Get person
$person = dbFetchOne("SELECT * FROM persons_new WHERE id = ? AND deleted_at IS NULL", [$personId]);
if (!$person) {
    setFlash('error', 'Person not found.');
    header('Location: persons.php');
    exit;
}

$pageTitle = $person['full_name'];

// Get linked companies
$linkedCompanies = dbFetchAll("
    SELECT cp.*, c.name as company_name, c.entity_type, c.cin, c.llpin,
           c.status as company_status
    FROM client_persons cp
    JOIN clients c ON cp.client_id = c.id
    WHERE cp.person_id = ? AND c.deleted_at IS NULL
    ORDER BY cp.created_at DESC
", [$personId]);

// Get documents
$documents = dbFetchAll("
    SELECT pd.*, u.display_name as verified_by_name
    FROM person_documents pd
    LEFT JOIN users u ON pd.verified_by = u.id
    WHERE pd.person_id = ?
    ORDER BY pd.id
", [$personId]);

// Document type labels
$docTypeLabels = [
    'PAN_CARD' => 'PAN Card',
    'AADHAAR_CARD' => 'Aadhaar Card',
    'PASSPORT' => 'Passport',
    'VOTER_ID' => 'Voter ID',
    'DRIVING_LICENSE' => 'Driving License',
    'BANK_STATEMENT' => 'Bank Statement',
    'UTILITY_BILL' => 'Utility Bill',
    'PASSPORT_PHOTO' => 'Passport Photo',
    'DSC_CERTIFICATE' => 'DSC Certificate',
    'SIGNATURE' => 'Signature'
];

// Stats
$verifiedDocs = count(array_filter($documents, fn($d) => $d['status'] === 'VERIFIED'));
$pendingDocs = count(array_filter($documents, fn($d) => $d['status'] === 'UPLOADED'));

require_once 'includes/header.php';
?>

<div class="mb-6 flex items-center justify-between">
    <a href="persons.php" class="text-blue-600 hover:text-blue-700 text-sm">
        <i class="fas fa-arrow-left mr-1"></i> Back to Persons
    </a>
    <div class="flex gap-2">
        <a href="person_documents.php?id=<?= $personId ?>" class="btn btn-secondary text-sm">
            <i class="fas fa-file-alt mr-1"></i> Documents
        </a>
        <a href="edit_person.php?id=<?= $personId ?>" class="btn btn-primary text-sm">
            <i class="fas fa-edit mr-1"></i> Edit
        </a>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Info -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Header Card -->
        <div class="card p-6">
            <div class="flex items-start gap-4">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                    <?= strtoupper(substr($person['full_name'], 0, 2)) ?>
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-gray-900"><?= htmlspecialchars($person['full_name']) ?></h1>
                    <?php if ($person['father_name']): ?>
                    <p class="text-gray-500">S/o <?= htmlspecialchars($person['father_name']) ?></p>
                    <?php endif; ?>
                    
                    <div class="flex flex-wrap items-center gap-3 mt-3">
                        <?php if ($person['pan_number']): ?>
                        <span class="px-3 py-1 bg-gray-100 rounded-lg text-sm font-mono">
                            <i class="fas fa-id-card text-gray-400 mr-1"></i>
                            <?= htmlspecialchars($person['pan_number']) ?>
                        </span>
                        <?php endif; ?>
                        
                        <?php if ($person['din']): ?>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm">
                            DIN: <?= htmlspecialchars($person['din']) ?>
                        </span>
                        <?php endif; ?>
                        
                        <?php if ($person['dpin']): ?>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-sm">
                            DPIN: <?= htmlspecialchars($person['dpin']) ?>
                        </span>
                        <?php endif; ?>
                        
                        <span class="px-3 py-1 <?= $person['nationality'] === 'INDIAN' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' ?> rounded-lg text-sm">
                            <?= $person['nationality'] ?>
                            <?= $person['is_indian_resident'] ? ' (Resident)' : '' ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Personal Details -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-user text-blue-500 mr-2"></i>Personal Information
                </h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Date of Birth</p>
                        <p class="font-medium text-gray-900 mt-1">
                            <?= $person['dob'] ? date('d M Y', strtotime($person['dob'])) : '-' ?>
                        </p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Gender</p>
                        <p class="font-medium text-gray-900 mt-1"><?= $person['gender'] ?: '-' ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Occupation</p>
                        <p class="font-medium text-gray-900 mt-1"><?= $person['occupation'] ?: '-' ?></p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Education</p>
                        <p class="font-medium text-gray-900 mt-1"><?= $person['educational_qualification'] ?: '-' ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Details -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-phone text-green-500 mr-2"></i>Contact Information
                </h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Mobile Number</p>
                        <p class="font-medium text-gray-900 mt-1">
                            <?php if ($person['mobile']): ?>
                            <a href="tel:<?= $person['mobile'] ?>" class="text-blue-600 hover:underline">
                                <?= htmlspecialchars($person['mobile']) ?>
                            </a>
                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Email ID</p>
                        <p class="font-medium text-gray-900 mt-1">
                            <?php if ($person['email']): ?>
                            <a href="mailto:<?= $person['email'] ?>" class="text-blue-600 hover:underline">
                                <?= htmlspecialchars($person['email']) ?>
                            </a>
                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Addresses -->
        <div class="card">
            <div class="p-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-map-marker-alt text-purple-500 mr-2"></i>Addresses
                </h2>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">Present Address</p>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <?php if ($person['present_address_line1']): ?>
                            <p class="text-gray-900"><?= htmlspecialchars($person['present_address_line1']) ?></p>
                            <?php if ($person['present_address_line2']): ?>
                            <p class="text-gray-900"><?= htmlspecialchars($person['present_address_line2']) ?></p>
                            <?php endif; ?>
                            <p class="text-gray-700">
                                <?= htmlspecialchars($person['present_city']) ?>, 
                                <?= htmlspecialchars($person['present_state']) ?> - 
                                <?= htmlspecialchars($person['present_pincode']) ?>
                            </p>
                            <p class="text-gray-500"><?= htmlspecialchars($person['present_country']) ?></p>
                            <?php else: ?>
                            <p class="text-gray-400 italic">Not provided</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">
                            Permanent Address
                            <?php if ($person['same_as_present']): ?>
                            <span class="text-blue-600 text-xs normal-case">(Same as Present)</span>
                            <?php endif; ?>
                        </p>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <?php if ($person['permanent_address_line1']): ?>
                            <p class="text-gray-900"><?= htmlspecialchars($person['permanent_address_line1']) ?></p>
                            <?php if ($person['permanent_address_line2']): ?>
                            <p class="text-gray-900"><?= htmlspecialchars($person['permanent_address_line2']) ?></p>
                            <?php endif; ?>
                            <p class="text-gray-700">
                                <?= htmlspecialchars($person['permanent_city']) ?>, 
                                <?= htmlspecialchars($person['permanent_state']) ?> - 
                                <?= htmlspecialchars($person['permanent_pincode']) ?>
                            </p>
                            <p class="text-gray-500"><?= htmlspecialchars($person['permanent_country']) ?></p>
                            <?php else: ?>
                            <p class="text-gray-400 italic">Not provided</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Linked Companies -->
        <div class="card">
            <div class="p-4 border-b border-gray-200 flex items-center justify-between">
                <h2 class="font-semibold text-gray-900">
                    <i class="fas fa-building text-amber-500 mr-2"></i>Linked Companies (<?= count($linkedCompanies) ?>)
                </h2>
            </div>
            
            <?php if (empty($linkedCompanies)): ?>
            <div class="p-8 text-center text-gray-500">
                <i class="fas fa-unlink text-4xl text-gray-300 mb-2"></i>
                <p>Not linked to any company yet.</p>
            </div>
            <?php else: ?>
            <div class="divide-y divide-gray-100">
                <?php foreach ($linkedCompanies as $company): ?>
                <div class="p-4 hover:bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="view_client.php?id=<?= $company['client_id'] ?>" class="font-medium text-gray-900 hover:text-blue-600">
                                <?= htmlspecialchars($company['company_name']) ?>
                            </a>
                            <p class="text-sm text-gray-500">
                                <?= str_replace('_', ' ', $company['role_type']) ?>
                                <?php if ($company['share_percentage']): ?>
                                • <?= $company['share_percentage'] ?>% shareholding
                                <?php endif; ?>
                                <?php if ($company['capital_contribution']): ?>
                                • ₹<?= number_format($company['capital_contribution']) ?> contribution
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="text-right">
                            <span class="px-2 py-1 text-xs rounded-full <?= $company['entity_type'] === 'PVT_LTD' ? 'bg-blue-100 text-blue-700' : ($company['entity_type'] === 'LLP' ? 'bg-purple-100 text-purple-700' : 'bg-gray-100 text-gray-700') ?>">
                                <?= str_replace('_', ' ', $company['entity_type']) ?>
                            </span>
                            <?php if ($company['cin']): ?>
                            <p class="text-xs text-gray-400 mt-1 font-mono"><?= $company['cin'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="space-y-6">
        <!-- DSC Status -->
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">
                <i class="fas fa-certificate text-rose-500 mr-2"></i>DSC Status
            </h3>
            
            <?php
            $dscColors = [
                'ACTIVE' => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'icon' => 'fa-check-circle'],
                'EXPIRED' => ['bg' => 'bg-red-100', 'text' => 'text-red-700', 'icon' => 'fa-times-circle'],
                'APPLIED' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'icon' => 'fa-clock'],
                'REQUIRED' => ['bg' => 'bg-amber-100', 'text' => 'text-amber-700', 'icon' => 'fa-exclamation-circle'],
                'NOT_REQUIRED' => ['bg' => 'bg-gray-100', 'text' => 'text-gray-500', 'icon' => 'fa-minus-circle']
            ];
            $dsc = $dscColors[$person['dsc_status']] ?? $dscColors['NOT_REQUIRED'];
            ?>
            
            <div class="p-4 <?= $dsc['bg'] ?> rounded-xl text-center">
                <i class="fas <?= $dsc['icon'] ?> text-3xl <?= $dsc['text'] ?> mb-2"></i>
                <p class="font-semibold <?= $dsc['text'] ?>"><?= str_replace('_', ' ', $person['dsc_status']) ?></p>
                <?php if ($person['dsc_expiry_date']): ?>
                <p class="text-sm <?= $dsc['text'] ?> mt-1">
                    Expires: <?= date('d M Y', strtotime($person['dsc_expiry_date'])) ?>
                </p>
                <?php endif; ?>
                <?php if ($person['dsc_provider']): ?>
                <p class="text-xs text-gray-500 mt-1">Provider: <?= htmlspecialchars($person['dsc_provider']) ?></p>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Documents Summary -->
        <div class="card p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-900">
                    <i class="fas fa-file-alt text-indigo-500 mr-2"></i>Documents
                </h3>
                <a href="person_documents.php?id=<?= $personId ?>" class="text-sm text-blue-600 hover:underline">
                    Manage →
                </a>
            </div>
            
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                    <span class="text-sm text-green-700">Verified</span>
                    <span class="font-bold text-green-700"><?= $verifiedDocs ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                    <span class="text-sm text-blue-700">Pending Review</span>
                    <span class="font-bold text-blue-700"><?= $pendingDocs ?></span>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <span class="text-sm text-gray-700">Total Uploaded</span>
                    <span class="font-bold text-gray-700"><?= count($documents) ?></span>
                </div>
            </div>
            
            <?php if (!empty($documents)): ?>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">Recent Documents</p>
                <?php foreach (array_slice($documents, 0, 3) as $doc): ?>
                <div class="flex items-center gap-2 py-2">
                    <i class="fas fa-file text-gray-400"></i>
                    <span class="text-sm text-gray-700 flex-1 truncate">
                        <?= $docTypeLabels[$doc['document_type']] ?? $doc['document_type'] ?>
                    </span>
                    <span class="px-2 py-0.5 text-xs rounded-full <?= $doc['status'] === 'VERIFIED' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' ?>">
                        <?= $doc['status'] ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Quick Actions -->
        <div class="card p-6">
            <h3 class="font-semibold text-gray-900 mb-4">Quick Actions</h3>
            
            <div class="space-y-2">
                <a href="person_documents.php?id=<?= $personId ?>" class="w-full btn btn-secondary text-sm flex items-center justify-center">
                    <i class="fas fa-upload mr-2"></i> Upload Documents
                </a>
                <a href="edit_person.php?id=<?= $personId ?>" class="w-full btn btn-secondary text-sm flex items-center justify-center">
                    <i class="fas fa-edit mr-2"></i> Edit Information
                </a>
                <?php if ($person['mobile']): ?>
                <a href="https://wa.me/91<?= preg_replace('/[^0-9]/', '', $person['mobile']) ?>" target="_blank" 
                   class="w-full btn btn-secondary text-sm flex items-center justify-center bg-green-50 text-green-700 hover:bg-green-100">
                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
