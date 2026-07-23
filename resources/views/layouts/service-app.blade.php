<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" type="image/x-icon" href="/images/favicon.ico">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Unified Expanded FAQ (single source of truth: /css/faq.css) -->
    <link href="{{ asset('css/faq.css') }}?v={{ @filemtime(public_path('css/faq.css')) ?: '20260630' }}" rel="stylesheet">
    <script src="{{ asset('js/faq-toggle.js') }}?v={{ @filemtime(public_path('js/faq-toggle.js')) ?: '20260630' }}" defer></script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    
    <!-- Android / Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/android-chrome-512x512.png') }}">
    
    <!-- Fallback -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    @yield('schema')
    
    <style>
        /* Conclusion / CTA blocks on a navy (--blue) background: keep body text readable (white). */
        section[style*="var(--blue)"] .content-text,
        section[style*="var(--blue)"] .content-text p,
        section[style*="var(--blue)"] .content-text li {
            color: rgba(255,255,255,0.9) !important;
        }
        .whatsapp-float-btn {
    position: fixed;
    bottom: 60px !important;
    right: 30px;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    z-index: 1000;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    text-decoration: none;
    animation: pulse 2s infinite;
}
.back-to-top-btn {
    position: fixed;
    bottom: 60px !important;
    left: 30px;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ffffffff 0%, #ffffffff 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 4px 20px rgba(233, 181, 139, 0.3);
    z-index: 1000;
}
        /* Prevent horizontal scroll on mobile devices */
        @media (max-width: 768px) {
            html, body {
                overflow-x: clip; /* clip (not hidden) prevents horizontal scroll without breaking position:sticky */
                max-width: 100%;
            }
        }
        
        .navbar-brand small {
            font-size: 0.75rem;
            font-weight: 400;
            letter-spacing: 0.5px;
        }
        
        .navbar-nav .nav-link {
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
        }
        
        .navbar-nav .dropdown-toggle::after {
            margin-left: 0.5rem;
            vertical-align: middle;
            color: #ff6600 !important;
        }
        
        .dropdown-menu {
            border: 1px solid #e0e0e0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .dropdown-item {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
        }
        
        .navbar {
            border-bottom: 1px solid #e0e0e0;
            height: 100px;
            min-height: 100px;
        }
        
        .logo-img {
            height: 40px;
            width: auto;
            margin-right: 10px;
            max-width: 200px;
        }
    </style>
    @stack('styles')

</head>
<body>
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @include('partials.search-script')
    @include('layouts.itr-season-strips')
    @stack('scripts')
    
    <!-- Custom Footer Scripts from SEO -->
    @if(isset($page) && $page && $page->seoMeta && $page->seoMeta->footer_scripts)
        {!! $page->seoMeta->safe_footer_scripts !!}
    @endif
    
    <!-- Custom Footer Scripts for Posts -->
    @if(isset($post) && $post->seo_footer_scripts)
        {!! $post->seo_footer_scripts !!}
    @endif
    @stack('scripts')
</body>
</html>
