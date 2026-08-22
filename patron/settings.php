<?php
/**
 * PATRON ADMIN DASHBOARD
 * Settings Page
 */

require_once 'includes/db.php';
startSession();
requireLogin();

$pageTitle = 'Settings';

require_once 'includes/header.php';
?>

<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Settings</h2>
    
    <!-- Quick Links -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
        <a href="services.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200">
                    <i class="fas fa-cogs text-blue-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Services</h3>
                    <p class="text-xs text-gray-500">Manage service offerings</p>
                </div>
            </div>
        </a>
        
        <a href="service_tasks.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center group-hover:bg-green-200">
                    <i class="fas fa-tasks text-green-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Task Templates</h3>
                    <p class="text-xs text-gray-500">Auto-create tasks for services</p>
                </div>
            </div>
        </a>
        
        <a href="information_fields.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200">
                    <i class="fas fa-list-alt text-purple-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Information Fields</h3>
                    <p class="text-xs text-gray-500">Manage data collection fields</p>
                </div>
            </div>
        </a>
        
        <a href="service_fields.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center group-hover:bg-yellow-200">
                    <i class="fas fa-clipboard-list text-yellow-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Service Fields</h3>
                    <p class="text-xs text-gray-500">Service-field requirements</p>
                </div>
            </div>
        </a>
        
        <a href="document_types.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center group-hover:bg-orange-200">
                    <i class="fas fa-file-alt text-orange-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Document Types</h3>
                    <p class="text-xs text-gray-500">Manage document categories</p>
                </div>
            </div>
        </a>
        
        <a href="team.php" class="card p-4 hover:shadow-lg transition group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center group-hover:bg-indigo-200">
                    <i class="fas fa-users text-indigo-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">Team Members</h3>
                    <p class="text-xs text-gray-500">Manage users & roles</p>
                </div>
            </div>
        </a>
    </div>
    
    <!-- How It Works Info Card -->
    <div class="card p-6 mt-6 bg-blue-50 border-blue-200">
        <h4 class="font-semibold text-blue-800 mb-3 text-lg">
            <i class="fas fa-lightbulb mr-2"></i> How Configuration Works
        </h4>
        <p class="text-blue-700 mb-4">
            Define documents & fields once, then map them to services. When a client uploads PAN for GST Registration, it's automatically available for TAN Registration, Shop Act License, and all other services.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-blue-700">
            <div class="bg-white rounded-lg p-4">
                <h5 class="font-semibold mb-2">📄 Document Types</h5>
                <p>Define all document types (PAN, Aadhaar, GST Cert, etc.) with their categories and levels (Company/Person).</p>
            </div>
            <div class="bg-white rounded-lg p-4">
                <h5 class="font-semibold mb-2">📋 Information Fields</h5>
                <p>Create data fields (PAN Number, GSTIN, DOB) that can be reused across multiple services.</p>
            </div>
            <div class="bg-white rounded-lg p-4">
                <h5 class="font-semibold mb-2">⚙️ Service Mapping</h5>
                <p>Map documents and fields to services. Tasks are auto-generated from task templates.</p>
            </div>
        </div>
    </div>
    
    <!-- System Info -->
    <div class="card">
        <div class="p-4 border-b border-gray-200">
            <h3 class="font-semibold">System Information</h3>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                <div>
                    <p class="text-gray-500">Version</p>
                    <p class="font-medium">1.0.0</p>
                </div>
                <div>
                    <p class="text-gray-500">PHP Version</p>
                    <p class="font-medium"><?= phpversion() ?></p>
                </div>
                <div>
                    <p class="text-gray-500">Database</p>
                    <p class="font-medium">MySQL</p>
                </div>
                <div>
                    <p class="text-gray-500">Server</p>
                    <p class="font-medium"><?= $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown' ?></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Stats -->
    <div class="card mt-6">
        <div class="p-4 border-b border-gray-200">
            <h3 class="font-semibold">Database Statistics</h3>
        </div>
        <div class="p-4">
            <?php
            $dbStats = [
                'Clients' => dbFetchOne("SELECT COUNT(*) as c FROM clients WHERE deleted_at IS NULL")['c'],
                'Service Requests' => dbFetchOne("SELECT COUNT(*) as c FROM service_requests WHERE deleted_at IS NULL")['c'],
                'Tasks' => dbFetchOne("SELECT COUNT(*) as c FROM tasks WHERE deleted_at IS NULL")['c'],
                'Documents' => dbFetchOne("SELECT COUNT(*) as c FROM client_documents WHERE deleted_at IS NULL")['c'],
                'Certificates' => dbFetchOne("SELECT COUNT(*) as c FROM client_certificates WHERE deleted_at IS NULL")['c'],
                'Users' => dbFetchOne("SELECT COUNT(*) as c FROM users WHERE deleted_at IS NULL")['c'],
            ];
            ?>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <?php foreach ($dbStats as $label => $count): ?>
                <div class="text-center p-3 bg-gray-50 rounded-lg">
                    <p class="text-2xl font-bold text-gray-900"><?= number_format($count) ?></p>
                    <p class="text-xs text-gray-500"><?= $label ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
