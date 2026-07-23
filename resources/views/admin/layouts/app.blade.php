<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - {{ config('app.name', 'WP Laravel') }}</title>

    <!-- Professional Admin Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin-professional.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS (for components) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @stack('styles')

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #f8f9fa;
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
            padding: 0.75rem 1rem;
            border-radius: 0;
        }

        .sidebar .nav-link:hover {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
            width: 16px;
        }

        .main-content {
            margin-left: 240px;
            padding-top: 48px;
        }

        .navbar-brand {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .form-control {
            padding: 0.375rem 0.75rem;
            border-width: 0;
            border-radius: 0;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
            
            .main-content {
                margin-left: 0;
                padding-top: 5rem;
            }
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .btn-group .btn {
            border-radius: 0.375rem !important;
            margin-right: 0.25rem;
        }

        .alert {
            border-radius: 0.5rem;
        }

        .badge {
            font-size: 0.75em;
        }
    </style>
</head>

<body>
    <div class="admin-wrapper">
        <!-- Professional Sidebar -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                    <div class="sidebar-brand-icon">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <h1 class="sidebar-brand-text">Patron Accounting LLP</h1>
                </a>
            </div>

            <nav class="sidebar-nav">
                <div class="sidebar-section">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-section-title">Content Management</div>
                    
                    <a href="{{ route('admin.posts.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-text"></i> Posts
                    </a>
                    
                    <a href="{{ route('admin.pages.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark"></i> Pages
                    </a>
                    
                    <a href="{{ route('admin.testimonials.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                        <i class="bi bi-chat-quote"></i> Testimonials
                    </a>
                    
                    <a href="{{ route('admin.media.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.media.*') ? 'active' : '' }}">
                        <i class="bi bi-image"></i> Media Library
                    </a>
                    
                    <a href="{{ route('admin.post-categories.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.post-categories.*') ? 'active' : '' }}">
                        <i class="bi bi-tags"></i> Post Categories
                    </a>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-section-title">Communications</div>
                    
                    <a href="{{ route('admin.contacts.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                        <i class="bi bi-envelope"></i> Contact Messages
                        @php
                            $unreadCount = \App\Models\Contact::unread()->count();
                        @endphp
                        @if($unreadCount > 0)
                            <span class="badge bg-primary rounded-pill ms-auto">{{ $unreadCount }}</span>
                        @endif
                    </a>
                </div>

                <div class="sidebar-section d-none">
                    <div class="sidebar-section-title">Appearance</div>
                    
                    <a href="{{ route('admin.menus.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.menus.*') ? 'active' : '' }}">
                        <i class="bi bi-list-ul"></i> Menus
                    </a>
                </div>

                @if(Auth::user()->role === 'admin')
                <div class="sidebar-section">
                    <div class="sidebar-section-title">User Management</div>
                    
                    <a href="{{ route('admin.users.index') }}" 
                       class="sidebar-nav-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                        <i class="bi bi-people"></i> All Users
                    </a>
                </div>
                @endif

                <div class="sidebar-section">
                    <div class="sidebar-section-title">Settings</div>
                    
                    <a href="{{ route('frontend.index') }}" 
                       class="sidebar-nav-item" target="_blank">
                        <i class="bi bi-eye"></i> View Website
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Professional Header -->
        <header class="admin-header" style="background: #2b8a6a !important;">
            <div class="admin-header-left">
                <h1 class="admin-header-title">@yield('title', 'Dashboard')</h1>
            </div>
            
            <div class="admin-header-right">
                <div class="dropdown">
                    <button style="color:#fff;" class="btn btn-professional-outline btn-professional-sm dropdown-toggle" 
                            type="button" data-bs-toggle="dropdown">
                        @if(Auth::user()->profile_image)
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" 
                                 alt="{{ Auth::user()->name }}" 
                                 class="rounded-circle me-1" 
                                 style="width: 24px; height: 24px; object-fit: cover;">
                        @else
                            <i class="bi bi-person-circle"></i>
                        @endif
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('frontend.index') }}" target="_blank">
                                <i class="bi bi-eye me-2"></i> View Website
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="admin-main">
            @yield('content')
        </main>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Toastr for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    
    <!-- Custom Scripts -->
    <script>
        // Auto-dismiss alerts after 5 seconds
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert:not(.alert-permanent)');
            alerts.forEach(function(alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        // Confirm delete actions
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('button[type="submit"], input[type="submit"]');
            deleteButtons.forEach(function(button) {
                // Check if button text or value contains "Delete"
                var buttonText = button.textContent || button.innerText || button.value || '';
                if (buttonText.toLowerCase().includes('delete')) {
                    button.addEventListener('click', function(e) {
                        if (!confirm('Are you sure you want to delete this item? This action cannot be undone.')) {
                            e.preventDefault();
                        }
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>