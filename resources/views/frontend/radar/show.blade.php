@extends('layouts.app')

@php
    /*
     | One page published from Radar — a regulatory update or a GST advance ruling.
     |
     | Both kinds render here. They are the same page: the site's chrome, the breadcrumb the
     | layout already prints from $breadcrumbs, a rail of what else is in this section, the
     | plain-English body, the questions, and the firm. What differs is which blocks the payload
     | carries, and that is a foreach, not a second template.
     |
     | Everything printed below is escaped. The two exceptions are body_html and firm_html, which
     | Radar composes itself: the ruling summary is the same rendering as the letterheaded PDF, and
     | the firm paragraph is written once in Radar so a moved office is one edit. Both come from a
     | signed request, from us.
     */
    $isCase   = $pub->kind === 'case';
    $plain    = $pl['plain'] ?? [];
    $toc      = $pl['toc'] ?? [];
    $faqs     = $pl['faqs'] ?? [];
    $sectionN = \App\Models\RadarPublication::sectionName($pub->kind, $pub->section);
    $hubPath  = $isCase ? '/case-laws' : '/updates';
@endphp

@section('title', ($pl['meta_title'] ?? $pub->title) . ' | Patron Accounting')
@section('meta_description', $pl['meta_desc'] ?? '')
@section('meta_keywords', $pub->meta_keywords)

@section('meta')
    {{-- ABSOLUTE. The layout only prints a canonical for its own CMS branches, and a relative one
         is the bug this site has already shipped once. --}}
    <link rel="canonical" href="{{ url($pub->path) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $pl['meta_title'] ?? $pub->title }}">
    <meta property="og:description" content="{{ $pl['meta_desc'] ?? '' }}">
    <meta property="og:url" content="{{ url($pub->path) }}">
@endsection

@section('schema')
    {{-- Absolute URLs, always. A relative @id or itemListElement is the invalid-schema bug this
         site has already had across 1,418 pages. --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context'         => 'https://schema.org',
        '@type'            => 'Article',
        'headline'         => $pub->title,
        'datePublished'    => optional($pub->published_at)->toAtomString(),
        'dateModified'     => $pub->updated_at->toAtomString(),
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => url($pub->path)],
        'publisher'        => ['@id' => 'https://www.patronaccounting.com/#organization'],
        'about'            => $pl['title'] ?? $pub->title,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
    {!! json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => collect($breadcrumbs)->values()->map(function ($c, $i) use ($breadcrumbs) {
            $entry = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c['name']];
            if ($i < count($breadcrumbs) - 1 && !empty($c['url'])) {
                $entry['item'] = url($c['url']);
            }
            return $entry;
        })->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endsection

@push('styles')
    @include('partials.page-css', ['file' => 'css/radar.css'])
@endpush

@section('content')
<div class="rdp-wrap">
    <div class="rdp-cols">

        {{-- ── Left: everything else in this section, newest first ─────────────────────────────
             A live query, never a list shipped with the page. Publish a circular today and it
             appears here on every page in the section at once. --}}
        <aside class="rdp-rail">
            <div class="rdp-rail__h">{{ $sectionN }}</div>
            <ul class="rdp-rail__list">
                @foreach($rail as $r)
                    <li @class(['is-current' => $r->id === $pub->id])>
                        @if($r->id === $pub->id)
                            <span class="rdp-rail__t">{{ $r->title }}</span>
                        @else
                            <a class="rdp-rail__t" href="{{ $r->path }}">{{ $r->title }}</a>
                        @endif
                        <span class="rdp-rail__d">
                            {{ $r->railLabel() }}@if($r->dated) · {{ $r->dated->format('d M Y') }}@endif
                        </span>
                    </li>
                @endforeach
            </ul>
            <a class="rdp-rail__all" href="{{ $hubPath }}?section={{ $pub->section }}">
                All {{ $sectionN }} &rarr;
            </a>
        </aside>

        {{-- ── Middle: the page ────────────────────────────────────────────────────────────── --}}
        <main class="rdp-main">
            <h1 class="rdp-h1">{{ $pub->title }}</h1>

            <div class="rdp-dateline">
                @if($pub->dated)
                    <span>{{ $isCase ? 'Ordered' : 'Issued' }} {{ $pub->dated->format('d F Y') }}</span>
                @endif
                @if($pub->published_at)
                    <span>Published {{ $pub->published_at->format('d F Y') }}</span>
                @endif
                @if($isCase)
                    @if(!empty($pl['citation']))<span>{{ $pl['citation'] }}</span>@endif
                    @if(!empty($pl['state']))<span>{{ $pl['state'] }}</span>@endif
                @else
                    @if(!empty($pl['doc_no']))<span>{{ trim(($pl['category'] ?? '') . ' ' . $pl['doc_no']) }}</span>@endif
                    @if(!empty($pl['effective']))<span>Effective {{ $pl['effective'] }}</span>@endif
                @endif
            </div>

            {{-- Under the title, before a word of the summary. A reader who learns halfway down
                 that a machine wrote it has already trusted it. --}}
            @if(!empty($pl['ai_notice']))
                <p class="rdp-ai">{{ $pl['ai_notice'] }}</p>
            @endif

            @foreach($plain as $block)
                <h2 id="{{ $block['id'] }}" class="rdp-h2">{{ $block['heading'] }}</h2>
                <p class="rdp-p">{{ $block['text'] }}</p>
            @endforeach

            @if($isCase)
                <h2 id="the-ruling" class="rdp-h2">The ruling in detail</h2>
                <div class="rdp-detail">{!! $pl['body_html'] ?? '' !!}</div>
                @if($pub->pdf_path)
                    <a class="rdp-dl" href="{{ $pub->path }}.pdf">Download this summary (PDF)</a>
                @endif
                @if(!empty($pl['pdf_url']))
                    <p class="rdp-src">
                        The order itself, on the council's own site:
                        <a href="{{ $pl['pdf_url'] }}" rel="nofollow noopener" target="_blank">read the original</a>.
                    </p>
                @endif
            @else
                <h2 id="the-original" class="rdp-h2">The original document</h2>
                <table class="rdp-facts">
                    @foreach(array_filter([
                        'Issued by'  => strtoupper($pl['regulator'] ?? ''),
                        'Document'   => trim(($pl['category'] ?? '') . ' ' . ($pl['doc_no'] ?? '')),
                        'Full title' => $pl['title'] ?? '',
                        'Issued on'  => $pub->dated?->format('d F Y'),
                        'Effective'  => $pl['effective'] ?? '',
                    ]) as $k => $v)
                        <tr><th>{{ $k }}</th><td>{{ $v }}</td></tr>
                    @endforeach
                </table>
                @if(!empty($pl['source_url']) || !empty($pl['pdf_url']))
                    <p class="rdp-src">
                        <a href="{{ $pl['source_url'] ?: $pl['pdf_url'] }}" rel="nofollow noopener" target="_blank">
                            Read the official release
                        </a>
                    </p>
                @endif
            @endif

            @if(!empty($pl['firm_html']))
                {!! $pl['firm_html'] !!}
            @endif
        </main>

        {{-- ── Right: this page's contents, from the payload's own list ─────────────────────── --}}
        @if($toc)
            <aside class="rdp-toc">
                <div class="rdp-toc__h">On this page</div>
                <ul>
                    @foreach($toc as $t)
                        <li @class(['is-sub' => ($t['level'] ?? 1) === 2])>
                            <a href="#{{ $t['id'] }}">{{ $t['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        @endif
    </div>
</div>

@if($faqs)
    @include('partials.faq-section', [
        'faqs' => $faqs,
        'lead' => 'The questions people ask about this, answered plainly. Still not sure where you stand? Our CA team is a message away.',
    ])
@endif
@endsection

@push('scripts')
<script>
/*
 | The contents list follows the reader.
 |
 | Plain DOM, no library, and it degrades to the plain anchor list it already is if anything here
 | throws: the links work on their own, and this only decides which one is highlighted.
 |
 | The rail scrolls itself rather than calling scrollIntoView(), which is allowed to scroll every
 | scrollable ancestor including the page — on a sticky column that reads as the page fighting you.
 */
(function () {
    var toc = document.querySelector('.rdp-toc');
    if (!toc) return;

    var links = Array.prototype.slice.call(toc.querySelectorAll('a[href^="#"]'));
    if (!links.length) return;

    var items = links.map(function (a) {
        var id = decodeURIComponent(a.getAttribute('href').slice(1));
        return { link: a, row: a.parentElement, el: document.getElementById(id) };
    }).filter(function (i) { return i.el; });

    // The same offset the CSS sticks the rails at, read from the CSS so there is one number.
    function headerOffset() {
        var v = getComputedStyle(document.documentElement).getPropertyValue('--rdp-top');
        return (parseFloat(v) || 108) + 24;
    }

    var ticking = false;
    function mark() {
        ticking = false;
        var line = headerOffset();
        var current = -1;

        for (var i = 0; i < items.length; i++) {
            if (items[i].el.getBoundingClientRect().top <= line) current = i;
        }
        // Before the first heading is reached, nothing is "current" — highlighting the first
        // entry while the reader is still on the title would be a position they are not in.
        for (var j = 0; j < items.length; j++) {
            items[j].row.classList.toggle('is-active', j === current);
        }

        if (current > -1) {
            var row = items[current].row;
            var above = row.offsetTop - toc.scrollTop;
            var below = above + row.offsetHeight - toc.clientHeight;
            if (above < 0)      toc.scrollTop += above;
            else if (below > 0) toc.scrollTop += below;
        }
    }

    function onScroll() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(mark);
    }

    mark();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
})();
</script>
@endpush
