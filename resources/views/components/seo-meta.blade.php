@props(['page'])

@php
    $seo = $page->seoMeta ?? null;
    $metaTitle = $seo->meta_title ?? $page->title ?? config('app.name');
    $metaDescription = $seo->meta_description ?? $page->excerpt ?? '';
    // Social copy is written separately from SERP copy - entity-led for shares,
    // keyword-led for search. Falls back to the meta_* values when unset.
    $ogTitle = $seo->og_title ?: $metaTitle;
    $ogDescription = $seo->og_description ?: $metaDescription;
    $canonicalUrl = $seo->canonical_url ?? url()->current();
    $keywords = $seo->keywords_array ?? [];
    // og:image must be absolute, raster, and at least 1200x630 - the site logo is
    // an SVG (unrenderable on every major platform) and the JPEG was only 500x500,
    // below the minimum width for a large summary card.
    $ogImage = $page->featured_image
        ? asset('storage/' . $page->featured_image)
        : asset('images/og-default.png');
@endphp

<!-- SEO Meta Tags -->
<title>{{ $metaTitle }}</title>

@if($metaDescription)
<meta name="description" content="{{ $metaDescription }}">
@endif

@if(!empty($keywords))
<meta name="keywords" content="{{ implode(', ', $keywords) }}">
@endif

<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:alt" content="Patron Accounting LLP">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $ogTitle }}">
<meta name="twitter:description" content="{{ $ogDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">

<!-- Custom Header Scripts -->
@if($seo && $seo->header_scripts)
{!! $seo->safe_header_scripts !!}
@endif
