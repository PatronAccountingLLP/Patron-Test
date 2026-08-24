@php
    /*
     | The site's ONE breadcrumb. Every page gets it from the layout - do not add
     | another, and do not hand-roll one in a page.
     |
     | The layouts pass $paBreadcrumbs, which BreadcrumbComposer resolves from
     | resources/breadcrumbs.php by view name. To override on a single page set
     | $breadcrumbs in its controller or @php block; set it to [] to suppress.
     |
     | Direct use, if ever needed:
     |
     |   @include('partials.breadcrumbs', ['items' => [
     |       ['name' => 'Home', 'url' => '/'],
     |       ['name' => 'Accounting Services'],
     |   ]])
     |
     | Last item is the current page: orange, semibold, unlinked; its url is
     | ignored. 'schema' => true also emits the matching JSON-LD BreadcrumbList.
     | 'bar' => false drops the full-width band and renders the trail inline.
     |
     | Three things here are deliberate and should not be "tidied":
     |
     | 1. This prose lives in a PHP comment, not a {{-- --}} block. Blade's
     |    comment matcher and the "--" sequences in the CSS below (--gray-50,
     |    --pa-crumb-bg and friends) interact badly: a long Blade comment in this
     |    file silently swallowed everything down to the schema block, leaving a
     |    view that compiled to two stray endifs.
     |
     | 2. The <style> is inline rather than @push('styles'). Every layout prints
     |    @stack('styles') in the head, which has already been flushed by the
     |    time this partial runs in the body, so a push never arrives. That is
     |    what made the separator SVG render as a full-viewport chevron.
     |
     | 3. The SVGs carry width/height ATTRIBUTES as well as CSS. An unsized
     |    inline SVG expands to fill its container, so the attributes are the
     |    safety net if the style block is ever stripped or overridden.
     |
     | Every colour has a fallback. The design was written against --gray-50,
     | --gray-200, --gray-400, --text-muted and --orange, which site.css and
     | pages.css define but glossary.css does not, and glossary is a third of the
     | pages carrying a breadcrumb.
     */

    $items  = $items ?? [];
    $bar    = $bar ?? true;
    $schema = $schema ?? false;
@endphp

@if(!empty($items))
@once
<style>
.pa-crumbs{--pa-crumb-bg:var(--gray-50,#f8fafc);--pa-crumb-bd:var(--gray-200,#e5e7eb);--pa-crumb-fg:var(--text-muted,#64748b);--pa-crumb-sep:var(--gray-400,#94a3b8);--pa-crumb-cur:var(--orange,#f26b21);}
.pa-crumbs--bar{background:var(--pa-crumb-bg);border-bottom:1px solid var(--pa-crumb-bd);padding:10px 16px;}
.pa-crumbs__in{max-width:1320px;margin:0 auto;}
.pa-crumbs__list{display:flex;flex-wrap:wrap;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;line-height:1.4;font-family:'Barlow',system-ui,-apple-system,'Segoe UI',sans-serif;}
.pa-crumbs__list li{display:flex;align-items:center;gap:8px;min-width:0;}
.pa-crumbs__list a{color:var(--pa-crumb-fg);text-decoration:none;font-weight:500;display:inline-flex;align-items:center;gap:4px;transition:color .15s;}
.pa-crumbs__list a:hover{color:var(--pa-crumb-cur);}
.pa-crumbs svg{flex:0 0 auto;display:inline-block;}
.pa-crumbs__ic{width:14px;height:14px;}
.pa-crumbs__sep{width:12px;height:12px;color:var(--pa-crumb-sep);}
.pa-crumbs__cur{color:var(--pa-crumb-cur);font-weight:600;}
</style>
@endonce

<nav class="pa-crumbs{{ $bar ? ' pa-crumbs--bar' : '' }}" aria-label="Breadcrumb">
    <div class="pa-crumbs__in">
        <ol class="pa-crumbs__list">
            @foreach($items as $crumb)
                @if($loop->last)
                    <li><span class="pa-crumbs__cur" aria-current="page">{{ $crumb['name'] }}</span></li>
                @else
                    <li>
                        <a href="{{ $crumb['url'] ?? '/' }}">
                            @if($loop->first)
                                <svg class="pa-crumbs__ic" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            @endif
                            {{ $crumb['name'] }}
                        </a>
                        <svg class="pa-crumbs__sep" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true" focusable="false"><path d="M9 5l7 7-7 7"/></svg>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>

@if($schema)
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => collect($items)->values()->map(function ($c, $i) use ($items) {
        $entry = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c['name']];
        if ($i < count($items) - 1 && !empty($c['url'])) {
            $entry['item'] = url($c['url']);
        }
        return $entry;
    })->all(),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
@endif
