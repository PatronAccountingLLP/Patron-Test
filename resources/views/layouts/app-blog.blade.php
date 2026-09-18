

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
        // Category and page are path segments now (/blog/gst/page-2), so url()->current()
        // already carries everything that identifies the listing. Only `search` is still a
        // query parameter, and it is the only one worth keeping.
        //
        // Not url()->full(): that delegates to Symfony's normalizeQueryString(), which SORTS
        // the query string, so /blog?topic=payroll&page=54 emitted a canonical of
        // /blog?page=54&topic=payroll -- a re-ordered twin that never self-references, which
        // is what put 362 URLs in "Alternate page with proper canonical tag". Anything else
        // (utm_*, fbclid, and any other parameter that does not change what is rendered) is
        // dropped, so every variant of a URL collapses onto one canonical.
        $canonicalQuery = [];
        $canonicalSearch = request()->query('search');
        if (is_string($canonicalSearch) && $canonicalSearch !== '') {
            $canonicalQuery['search'] = $canonicalSearch;
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

    {{-- Testimonial component styles and behaviour. Loaded here, like the FAQ
         and enquiry-form assets above, so every page carries them rather than
         only the ~1,713 that render the section. The script does nothing on a
         page with no .testimonial-slider, and the stylesheet nothing with no
         .testi-* markup, so the cost on other pages is one cached file each.
         The ?v= is the file's own mtime, so editing either busts the cache. --}}
    <link href="{{ asset('css/testimonials.css') }}?v={{ @filemtime(base_path('css/testimonials.css')) ?: @filemtime(public_path('css/testimonials.css')) ?: '1' }}" rel="stylesheet">
    <script src="{{ asset('js/testimonials.js') }}?v={{ @filemtime(base_path('js/testimonials.js')) ?: @filemtime(public_path('js/testimonials.js')) ?: '1' }}" defer></script>


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