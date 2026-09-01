{{--
    THE testimonials block. The only one on the site.

    Drop it wherever the section belongs - it brings its own CSS and JS, so a
    page needs nothing else:

        @include('partials.testimonials')

    That renders the reviews in config/testimonials.php under the standard
    heading. To change what a page says about them:

        @include('partials.testimonials', [
            'heading' => 'What our GST clients say',
            'lead'    => 'Businesses we file for, in their words.',
        ])

    Parameters, all optional:

        reviews    array of reviews, replacing the sitewide list. Each entry:
                     name    required, the reviewer
                     text    required, EXACTLY what they wrote
                     rating  1-5, defaults to 5
                     role    shown under the name
                     video   /storage/... mp4; makes it a video card
                     poster  /storage/... jpg, the video's still frame
                     google  false if this is NOT a Google review - a filmed
                             testimonial, say. Defaults true, and controls the
                             Google badge on the card.
                     portrait  true for a vertically filmed clip (720x1280),
                               so the card letterboxes the whole frame instead
                               of cropping a band out of its middle
        heading    section h2. Defaults to config('testimonials.heading').
        lead       supporting line under the h2.
        limit      show only the first N reviews.
        sectionId  id on the <section>, for TOC links. Default 'testimonials'.

    The dark band that closes the section on most pages - "Join 10,000+
    Satisfied Businesses" and a Talk to an Expert button - is part of this
    partial. Its wording is per page, so pass it:

        ctaTitle   band heading. Omit it and the band is not rendered at all.
        ctaText    the line under the heading.
        ctaLabel   button text. Default 'Talk to an Expert'.
        ctaHref    button target. Default tel:+919459456700, the number every
                   one of the 1,558 pages carrying this band already uses.

    ctaText is printed unescaped, because the lines already written across the
    estate contain entities like &mdash; that would otherwise show as literal
    text. It is authored copy from the page itself, never anything a visitor
    can supply - keep it that way.

    The cards are rendered here, server-side. They used to be assembled in
    JavaScript from a `fallbackReviews` array copied into 1,657 pages, so a
    crawler saw an empty div and a reader with slow JS saw nothing at all. The
    carousel is now an enhancement on top of real HTML: with JS off the cards
    are still there, laid out in a row by the stylesheet.

    Reviews are attributed to named, real people. Quote them as written - see
    the note at the top of config/testimonials.php.

    Styling: /css/testimonials.css. Behaviour: /js/testimonials.js. Both are
    emitted once per page no matter how many times this partial is included.
--}}
@php
    $paTestiSeq = ((int) config('pa.testimonials_seq', 0)) + 1;
    config(['pa.testimonials_seq' => $paTestiSeq]);
    $paTestiUid = 'testi'.$paTestiSeq;

    $paTestiHeading = $heading ?? config('testimonials.heading', 'Real Stories from Real People');
    $paTestiLead    = array_key_exists('lead', get_defined_vars())
        ? $lead
        : config('testimonials.lead');
    $paTestiId      = $sectionId ?? 'testimonials';

    $paTestiList = collect($reviews ?? config('testimonials.reviews', []))
        ->map(function ($r) {
            return [
                'name'   => trim((string) ($r['name'] ?? '')),
                'text'   => trim((string) ($r['text'] ?? '')),
                'role'   => trim((string) ($r['role'] ?? '')),
                'rating' => max(0, min(5, (int) ($r['rating'] ?? 5))),
                'video'  => trim((string) ($r['video'] ?? '')),
                'poster' => trim((string) ($r['poster'] ?? '')),
                'portrait' => (bool) ($r['portrait'] ?? false),
                // Default true: the sitewide list is Google reviews. A filmed
                // testimonial that is not also on Google must set this false.
                'google' => (bool) ($r['google'] ?? true),
            ];
        })
        // A card with no name to attribute it to, or a quote card with nothing
        // to quote, is worse than one card fewer.
        ->filter(fn ($r) => $r['name'] !== '' && ($r['text'] !== '' || $r['video'] !== ''))
        ->values();

    if (!empty($limit)) {
        $paTestiList = $paTestiList->take((int) $limit);
    }

    // Matches the rotation the pages use today: orange, blue, teal, purple.
    $paTestiAvatarColours = ['', 'blue', 'teal', 'purple'];

    $paTestiCtaTitle = trim((string) ($ctaTitle ?? ''));
    $paTestiCtaText  = trim((string) ($ctaText  ?? ''));
    $paTestiCtaLabel = $ctaLabel ?? 'Talk to an Expert';
    $paTestiCtaHref  = $ctaHref  ?? 'tel:+919459456700';

    // The stylesheet is served from the repo root in production and from
    // public/ under `artisan serve`; asset() resolves both. The ?v= is the
    // file's own content hash, so editing it busts the cache by itself -
    // /css/ is served with a one-year max-age.
    $paTestiVer = function (string $file) {
        $root = base_path($file);
        $pub  = public_path($file);
        $path = file_exists($root) ? $root : (file_exists($pub) ? $pub : null);
        return $path ? substr(md5_file($path), 0, 8) : '1';
    };
@endphp

@once('testimonials-assets')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}?v={{ $paTestiVer('css/testimonials.css') }}">
    <script src="{{ asset('js/testimonials.js') }}?v={{ $paTestiVer('js/testimonials.js') }}" defer></script>
@endonce

@if($paTestiList->count() > 0)
<section class="testimonials-section" id="{{ $paTestiId }}">
    <div class="section-container">
        @if($paTestiHeading || $paTestiLead)
            <div class="section-header">
                @if($paTestiHeading)
                    <h2>{{ $paTestiHeading }}</h2>
                @endif
                @if($paTestiLead)
                    <p>{{ $paTestiLead }}</p>
                @endif
            </div>
        @endif

        <div class="testimonial-slider" id="{{ $paTestiUid }}Slider">
            @foreach($paTestiList as $i => $paTestiItem)
                <div>
                    @if($paTestiItem['video'] !== '')
                        {{-- Video card --}}
                        <div class="testi-video-card">
                            <div class="testi-video-area{{ $paTestiItem['portrait'] ? ' is-portrait' : '' }}">
                                <video preload="metadata" playsinline
                                       @if($paTestiItem['poster'] !== '') poster="{{ $paTestiItem['poster'] }}" @endif>
                                    <source src="{{ $paTestiItem['video'] }}" type="video/mp4">
                                </video>
                                <div class="testi-play-overlay">
                                    <div class="testi-play-btn">
                                        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                </div>
                                <div class="testi-star-badge" role="img" aria-label="{{ $paTestiItem['rating'] }} out of 5 stars">
                                    @for($s = 0; $s < $paTestiItem['rating']; $s++)
                                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    @endfor
                                </div>
                            </div>
                            <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                                <div class="testi-avatar">
                                    @if($paTestiItem['poster'] !== '')
                                        <img src="{{ $paTestiItem['poster'] }}" alt="{{ $paTestiItem['name'] }}" loading="lazy" width="40" height="40">
                                    @else
                                        {{ mb_substr($paTestiItem['name'], 0, 1) }}
                                    @endif
                                </div>
                                <div>
                                    <div class="testi-name">{{ $paTestiItem['name'] }}</div>
                                    @if($paTestiItem['role'] !== '')
                                        <div class="testi-role">{{ $paTestiItem['role'] }}</div>
                                    @endif
                                </div>
                                @if($paTestiItem['google'])
                                    <div class="testi-google-badge" style="margin-left:auto;flex-shrink:0;" title="Review left on Google">
                                        <img src="{{ asset('images/google.png') }}" alt="Google" width="22" height="22" loading="lazy" onerror="this.parentElement.textContent='G'">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        {{-- Quote card --}}
                        <div class="testi-quote-card">
                            <div class="testi-quote-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </div>
                            <p class="testi-quote-text">{{ $paTestiItem['text'] }}</p>
                            <div class="testi-footer">
                                <div class="testi-author">
                                    <div class="testi-avatar {{ $paTestiAvatarColours[$i % count($paTestiAvatarColours)] }}">{{ mb_substr($paTestiItem['name'], 0, 1) }}</div>
                                    <div>
                                        <div class="testi-name">{{ $paTestiItem['name'] }}</div>
                                        @if($paTestiItem['role'] !== '')
                                            <div class="testi-role">{{ $paTestiItem['role'] }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="testi-rating-row">
                                    <div class="testi-stars" role="img" aria-label="{{ $paTestiItem['rating'] }} out of 5 stars">
                                        @for($s = 0; $s < $paTestiItem['rating']; $s++)
                                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        @endfor
                                    </div>
                                    @if($paTestiItem['google'])
                                        <div class="testi-google-badge" title="Review left on Google">
                                            <img src="{{ asset('images/google.png') }}" alt="Google" width="22" height="22" loading="lazy" onerror="this.parentElement.textContent='G'">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @if($paTestiCtaTitle !== '')
            <div class="reviews-cta">
                <div class="reviews-cta-content">
                    <div class="reviews-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                    </div>
                    <div class="reviews-cta-text">
                        <h3>{{ $paTestiCtaTitle }}</h3>
                        @if($paTestiCtaText !== '')
                            <p>{!! $paTestiCtaText !!}</p>
                        @endif
                    </div>
                </div>
                <a href="{{ $paTestiCtaHref }}" class="btn-cta">
                    {{ $paTestiCtaLabel }}
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        @endif
    </div>
</section>
@endif
