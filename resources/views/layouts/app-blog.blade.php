

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
    @php
        // url()->full() delegates to Symfony's normalizeQueryString(), which SORTS the
        // query string alphabetically. So /blog?topic=payroll&page=54 emitted a canonical
        // of /blog?page=54&topic=payroll -- a re-ordered twin that never self-references,
        // which is what put 362 URLs in "Alternate page with proper canonical tag".
        //
        // Build it deterministically instead: only the parameters this page actually
        // filters on, always in the same order. Anything else (utm_*, topic, fbclid, and
        // any other param that does not change what is rendered) is dropped, so every
        // variant of a URL collapses onto one canonical.
        $canonicalQuery = [];
        foreach (['category', 'search', 'page'] as $canonicalParam) {
            $canonicalValue = request()->query($canonicalParam);
            if (is_array($canonicalValue) || $canonicalValue === null || $canonicalValue === '') {
                continue;
            }
            // page=1 is the same page as no page param at all.
            if ($canonicalParam === 'page' && (string) $canonicalValue === '1') {
                continue;
            }
            $canonicalQuery[$canonicalParam] = $canonicalValue;
        }
        $canonicalUrl = url()->current() . ($canonicalQuery ? '?' . http_build_query($canonicalQuery) : '');
    @endphp
    <link rel="canonical" href="{{ $canonicalUrl }}">

    {{-- SEO STACK --}}
    @stack('meta')

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Unified Expanded FAQ (single source of truth: /css/faq.css) --}}
    {{-- Enquiry form component styles. Loaded here, alongside the header and
         footer, so every page carries them rather than only the ~1,965 that
         render a form: partials/bigin-form is included from FAQ sections and
         other partials whose styles would otherwise have to be pushed from
         inside a captured @section, which is fragile. --}}
    <link href="{{ asset('css/enquiry-form.css') }}?v={{ @filemtime(base_path('css/enquiry-form.css')) ?: '1' }}" rel="stylesheet">
    <link href="{{ asset('css/faq-enquiry-form.css') }}?v={{ @filemtime(base_path('css/faq-enquiry-form.css')) ?: '1' }}" rel="stylesheet">
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <script src="{{ asset('js/faq-toggle.js') }}" defer></script>

    {{-- FAVICON --}}
    <link rel="icon" href="{{ asset('images/favicon.png') }}">

    {{-- STYLES --}}
    @stack('styles')

    @include('partials.schema-organization')
</head>

<body>

    @include('partials.header')

    {{-- Breadcrumbs render here for every page, like the header above.
         BreadcrumbComposer resolves $paBreadcrumbs from resources/breadcrumbs.php
         by view name; it is empty for the homepage and anything with no trail, and
         the partial renders nothing when it is. To override on one page set
         $breadcrumbs; to hide it, set $breadcrumbs = [].

         No 'schema' here on purpose: 937 of the 944 pages already hand-write
         their own BreadcrumbList, so emitting one here would duplicate it. --}}
    @include('partials.breadcrumbs', ['items' => $paBreadcrumbs ?? []])

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