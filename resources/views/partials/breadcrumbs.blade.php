{{--
    Visual breadcrumbs — mirrors the page's BreadcrumbList schema hierarchy.

    Usage (pass the SAME items as your JSON-LD BreadcrumbList; last item = current page):

        @include('partials.breadcrumbs', ['items' => [
            ['name' => 'Home', 'url' => '/'],
            ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
            ['name' => 'ITR for Foreign Income', 'url' => '/itr-for-foreign-income'],
        ]])

    - The last item renders as the current page (bold, not a link).
    - Set 'schema' => true in the include to ALSO emit the matching JSON-LD
      BreadcrumbList (so this one include drives both visual + schema; then you
      can delete the page's hand-written BreadcrumbList block).
    - CSS is pushed once via @once, so including it on many pages is cheap.
--}}
@php($items = $items ?? [])
@once
@push('styles')
<style>
.breadcrumb-nav{padding:12px 0;font-size:13px;line-height:1.4;}
.breadcrumb-list{display:flex;flex-wrap:wrap;align-items:center;gap:6px;list-style:none;margin:0;padding:0;}
.breadcrumb-list li{display:flex;align-items:center;gap:6px;color:var(--text-muted,#6b7280);min-width:0;}
.breadcrumb-list a{color:var(--text-muted,#6b7280);text-decoration:none;transition:color .15s;}
.breadcrumb-list a:hover{color:var(--orange,#f26522);}
.breadcrumb-list li:not(:last-child)::after{content:'›';color:#c3ccd6;font-size:15px;line-height:1;margin-left:2px;}
.breadcrumb-list li[aria-current="page"]{color:var(--blue,#0f2942);font-weight:600;}
@media(max-width:576px){.breadcrumb-nav{font-size:12px;}}
</style>
@endpush
@endonce

@if(!empty($items))
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb-list">
        @foreach($items as $crumb)
            @if($loop->last)
                <li aria-current="page"><span>{{ $crumb['name'] }}</span></li>
            @else
                <li><a href="{{ $crumb['url'] }}">{{ $crumb['name'] }}</a></li>
            @endif
        @endforeach
    </ol>
</nav>

@if(!empty($schema))
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => collect($items)->values()->map(fn($c, $i) => [
        '@type' => 'ListItem',
        'position' => $i + 1,
        'name' => $c['name'],
        'item' => $c['url'],
    ])->all(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
@endif
