@props(['page'])

@php
    $seo = $page->seoMeta ?? null;
    $metaTitle = $seo->meta_title ?? $page->title ?? config('app.name');
    $metaDescription = $seo->meta_description ?? $page->excerpt ?? '';
    $canonicalUrl = $seo->canonical_url ?? url()->current();
    $keywords = $seo->keywords_array ?? [];
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
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="website">

@if($page->featured_image)
<meta property="og:image" content="{{ asset('storage/' . $page->featured_image) }}">
@endif

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">

@if($page->featured_image)
<meta name="twitter:image" content="{{ asset('storage/' . $page->featured_image) }}">
@endif

<!-- Custom Header Scripts -->
@if($seo && $seo->header_scripts)
{!! $seo->safe_header_scripts !!}
@endif
