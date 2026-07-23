

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TITLE --}}
    <title>@yield('title', 'Patron Accounting')</title>

    {{-- DESCRIPTION --}}
    <meta name="description" content="@yield('meta_description', 'Patron Accounting')">

    {{-- CANONICAL (CURRENT URL) --}}
    <link rel="canonical" href="{!! url()->full() !!}">

    {{-- SEO STACK --}}
    @stack('meta')

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Unified Expanded FAQ (single source of truth: /css/faq.css) --}}
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <script src="{{ asset('js/faq-toggle.js') }}" defer></script>

    {{-- FAVICON --}}
    <link rel="icon" href="{{ asset('images/favicon.png') }}">

    {{-- STYLES --}}
    @stack('styles')
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @include('partials.search-script')
    @include('layouts.itr-season-strips')
    @stack('scripts')

    {{-- SEO FOOTER SCRIPTS --}}
    @if(isset($page) && $page && $page->seoMeta && $page->seoMeta->footer_scripts)
        {!! $page->seoMeta->safe_footer_scripts !!}
    @endif

    @if(isset($post) && $post->seo_footer_scripts)
        {!! $post->seo_footer_scripts !!}
    @endif

</body>
</html>