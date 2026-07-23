<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="icon" type="image/x-icon" href="/images/favicon.ico">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta-content')
    <!-- SEO Meta Tags -->
    @if(isset($page) && $page)
        <x-seo-meta :page="$page" />
    @elseif(isset($post) && $post)
        @php
            $metaTitle = $post->meta_title ?: $post->title;
            $metaDescription = $post->meta_description ?: ($post->excerpt ?: strip_tags(Str::limit($post->content, 160)));
            $canonicalUrl = $post->seo_canonical_url ?: url()->current();
        @endphp
        
        <!-- Title -->
        <title>{{ $metaTitle }}</title>
        
        <!-- Meta Tags -->
        @if($metaDescription)
        <meta name="description" content="{{ $metaDescription }}">
        @endif
        
        @if($post->meta_keywords)
        <meta name="keywords" content="{{ $post->meta_keywords }}">
        @endif
        
        <!-- Canonical URL -->
        <link rel="canonical" href="{!! $canonicalUrl !!}">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="{!! $metaTitle !!}">
        <meta property="og:description" content="{{ $metaDescription }}">
        {{-- <meta property="og:url" content="{!! $canonicalUrl !!}"> --}}
        <meta property="og:type" content="article">
        
        @if($post->featured_image)
        <meta property="og:image" content="{{ asset('storage/' . $post->featured_image) }}">
        @endif
        
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $metaTitle }}">
        <meta name="twitter:description" content="{{ $metaDescription }}">
        
        @if($post->featured_image)
        <meta name="twitter:image" content="{{ asset('storage/' . $post->featured_image) }}">
        @endif
        
        <!-- Custom Header Scripts for Posts -->
        @if($post->seo_header_scripts)
        {!! $post->seo_header_scripts !!}
        @endif
   @else

    @if(View::hasSection('meta'))
        @yield('meta')
    @else

        @if(View::hasSection('meta_description'))
        <meta name="description" content="@yield('meta_description')">
        @endif

        @if(View::hasSection('meta_keywords'))
        <meta name="keywords" content="@yield('meta_keywords')">
        @endif

        <title>@yield('title', 'Patron Accounting')</title>

    @endif

@endif
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Unified Expanded FAQ (single source of truth: /css/faq.css) -->
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <script src="{{ asset('js/faq-toggle.js') }}" defer></script>
    
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

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6G3R8G');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6G3R8G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <style>
        /* Prevent horizontal scroll on mobile devices (clip, not hidden, so position:sticky still works) */
        @media (max-width: 768px) {
            html, body {
                overflow-x: clip;
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
@php($__embed = request()->boolean('embed'))
<body class="{{ $__embed ? 'is-embed' : '' }}">
    @unless($__embed)
    @include('partials.header')
    @endunless

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @unless($__embed)
    @include('partials.footer')
    @endunless

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @include('partials.search-script')
    @unless($__embed)
    @include('layouts.itr-season-strip')
    @endunless
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
