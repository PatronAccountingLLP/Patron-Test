@extends('layouts.app')

@section('schema')
@php
    $tz      = 'Asia/Kolkata';
    $pageUrl = url()->current();
 
    $modDate = \Carbon\Carbon::parse($content->updated_at ?? now())
                    ->setTimezone($tz)->format('Y-m-d\TH:i:sP');
    $pubDate = \Carbon\Carbon::parse($content->created_at ?? ($content->updated_at ?? now()))
                    ->setTimezone($tz)->format('Y-m-d\TH:i:sP');
 
    // ---- IFSC FAQ set (keep wording aligned with the visible FAQs in $content->content) ----
    $faqs = [
        [
            'q' => 'What is the IFSC Code of '.$content->bank.' in '.$content->branch.', '.$content->city2.'?',
            'a' => 'The IFSC code of the '.$content->bank.' '.$content->branch.' branch in '.$content->city2.', '.$content->state.' is '.$content->ifsc.'.',
        ],
        [
            'q' => 'Is the IFSC Code '.$content->ifsc.' permanent?',
            'a' => 'Yes. The IFSC '.$content->ifsc.' stays the same unless the branch is merged, relocated or restructured by the bank, in which case the RBI database is updated.',
        ],
        [
            'q' => 'Is MICR the same as IFSC?',
            'a' => 'No. MICR is a 9-digit code used for cheque clearing, while IFSC is an 11-character code used to route NEFT, RTGS and IMPS online transfers.',
        ],
        [
            'q' => 'Where can I find the IFSC Code of '.$content->bank.' '.$content->branch.'?',
            'a' => 'You can find it on your chequebook, the first page of your passbook, the '.$content->bank.' website or mobile app, or on the RBI portal.',
        ],
        [
            'q' => 'What is the use of the IFSC Code in online banking?',
            'a' => 'The IFSC code ensures NEFT, RTGS and IMPS transactions are routed accurately to the correct bank branch, preventing failed or misdirected transfers.',
        ],
    ];
 
    // Address question only if an address field is available (avoids schema-vs-page mismatch).
    if (!empty($content->address)) {
        $faqs[] = [
            'q' => 'What is the full address of the '.$content->branch.' branch?',
            'a' => $content->address,
        ];
    }
 
    $mainEntity = [];
    foreach ($faqs as $f) {
        $mainEntity[] = [
            '@type'          => 'Question',
            'name'           => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
    }
 
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
           
            [
                '@type'         => 'FAQPage',
                '@id'           => $pageUrl.'#faq',
                'url'           => $pageUrl,
                'name'          => $content->bank.' '.$content->branch.', '.$content->city2.' IFSC Code — FAQs',
                'inLanguage'    => 'en-IN',
               
                'mainEntity'    => $mainEntity,
            ],
        ],
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endsection

@section('content')

{{-- ============================ TOP BANNER (swappable image) ============================ --}}
{{-- SWAP: change $topBannerImg / $topBannerUrl (or replace the file at the asset path). --}}
<div class="pa-topbanner-wrap">
    <a class="pa-topbanner"
       href="{{ $topBannerUrl ?? '/income-tax-return' }}"
       aria-label="{{ $topBannerAlt ?? 'File your Income Tax Return with Patron Accounting — CA-assisted' }}">
        <picture>
            {{-- Mobile gets a taller, readable creative; desktop keeps the wide strip. --}}
            <source media="(max-width:600px)"
                    srcset="{{ $topBannerImgMobile ?? asset('images/itr-top-mobile-1000x460.png') }}"
                    width="1000" height="460">
            <img src="{{ $topBannerImg ?? asset('images/itr-top-1240x140.png') }}"
                 alt="{{ $topBannerAlt ?? 'File your Income Tax Return with Patron Accounting — CA-assisted' }}"
                 width="1240" height="140" loading="eager" fetchpriority="high" decoding="async">
        </picture>
    </a>
</div>

{{-- ============================ PAGE HEAD (breadcrumb · H1 · search · chips) ============================ --}}
<div class="page-head">
    <div class="page-head__inner">

        <nav class="crumbs" aria-label="Breadcrumb">
            <a href="/">Home</a> ›
            <a href="/ifsc-code">IFSC Code</a> ›
            <a href="/ifsc-code/{{ \Illuminate\Support\Str::slug($content->bank) }}">{{ $content->bank }}</a> ›
            {{ $content->branch }}, {{ $content->city2 }}
        </nav>

        <h1>
            IFSC Code of {{ $content->bank }},
            {{ $content->branch }},
            {{ $content->city2 }},
            {{ $content->state }}
            —
            <span class="code">{{ $content->ifsc }}</span>
        </h1>

        {{-- Search (live: results appear as you type — see scripts) --}}
        <div class="ifsc-srch">
            <form class="ifsc-srch__row" role="search" onsubmit="return false;">
                <input type="text" id="contentsearchInput"
                       placeholder="Search bank, branch or IFSC code..."
                       aria-label="Search bank, branch or IFSC code"
                       autocomplete="off" />
                <button type="button" id="searchBtn">Search</button>
            </form>

            <div id="searchResultsContainer" style="display:none;position:absolute;top:56px;left:0;width:100%;z-index:20;">
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>IFSC Code</th>
                                <th>Bank Name</th>
                                <th>Branch</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody id="searchResultsBody"></tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Service chips --}}
        <div class="chips">
            <a href="/gst-registration">GST Registration</a>
            <a href="/trademark-registration">Trademark Registration</a>
            <a href="/iec-registration">IEC Registration</a>
            <a href="/private-limited-company-registration">Private Limited Registration</a>
        </div>

    </div>
</div>

{{-- ============================ 3-ZONE LAYOUT ============================ --}}
<section style="background:#fff">
    <div class="layout">

        {{-- ---------------- LEFT: IFSC card (code + copy + 5 rows ONLY) ---------------- --}}
        <aside class="rail rail--left" aria-label="IFSC quick reference">
            <div class="rail-inner">
                <div class="ifsc-card">
                    <div class="ifsc-card__top">
                        <div class="ifsc-card__label"><span class="d"></span>IFSC Code</div>
                        <div class="ifsc-card__code" id="ifscValue">{{ $content->ifsc }}</div>
                        <div class="ifsc-card__sub">{{ $content->bank }} · {{ $content->branch }}, {{ $content->city2 }}</div>
                    </div>

                    <button type="button" class="copy-big js-copy"
                            data-copy="{{ $content->ifsc }}"
                            aria-label="Copy IFSC code {{ $content->ifsc }}">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="9" y="9" width="11" height="11" rx="2"/>
                            <path d="M5 15V5a2 2 0 0 1 2-2h10"/>
                        </svg>
                        <span class="btn-label">Copy IFSC Code</span>
                    </button>

                    <div class="ifsc-card__rows">
                        <dl>
                            @if(!empty($content->bank))     <div class="pair"><dt>Bank</dt><dd>{{ $content->bank }}</dd></div>@endif
                            @if(!empty($content->branch))   <div class="pair"><dt>Branch</dt><dd>{{ $content->branch }}</dd></div>@endif
                            @if(!empty($content->city2))    <div class="pair"><dt>City</dt><dd>{{ $content->city2 }}</dd></div>@endif
                            @if(!empty($content->district)) <div class="pair"><dt>District</dt><dd>{{ $content->district }}</dd></div>@endif
                            @if(!empty($content->state))    <div class="pair"><dt>State</dt><dd>{{ $content->state }}</dd></div>@endif
                        </dl>
                    </div>
                </div>
            </div>
        </aside>

        {{-- ---------------- MAIN: dynamic content ---------------- --}}
        <main class="content">
            {!! $content->content !!}
            @isset($content->{'Interlink-page'})
                <div class="interlink-page main-content">
                    {!! $content->{'Interlink-page'} !!}
                </div>
            @endisset
        </main>

        {{-- ---------------- RIGHT: one swappable image banner ---------------- --}}
        {{-- SWAP: change $sideBannerImg / $sideBannerUrl (or replace the file at the asset path). --}}
        <aside class="rail rail--right" aria-label="Offer">
            <div class="rail-inner">
                <a class="pa-sidebanner"
                   href="{{ $sideBannerUrl ?? '/income-tax-return' }}"
                   aria-label="{{ $sideBannerAlt ?? 'File your Income Tax Return with Patron Accounting — CA-assisted' }}">
                    <img src="{{ $sideBannerImg ?? asset('images/itr-side-300x320.png') }}"
                         alt="{{ $sideBannerAlt ?? 'File your Income Tax Return with Patron Accounting — CA-assisted' }}"
                         width="300" height="320" loading="lazy" decoding="async">
                </a>
            </div>
        </aside>

    </div>
</section>

@endsection


{{-- ============================ HEAD: meta + canonical + schema ============================ --}}
@push('meta-content')
    {!! $content->meta_title !!}
    {!! $content->canonical !!}

    {{-- Preload above-the-fold banner art so it paints early (only the matching one downloads).
         Keeps the top banner fast without letting it drag LCP; the side banner preloads on desktop only. --}}
    <link rel="preload" as="image" fetchpriority="high"
          href="{{ $topBannerImg ?? asset('images/itr-top-1240x140.png') }}" media="(min-width:601px)">
    <link rel="preload" as="image" fetchpriority="high"
          href="{{ $topBannerImgMobile ?? asset('images/itr-top-mobile-1000x460.png') }}" media="(max-width:600px)">
    <link rel="preload" as="image"
          href="{{ $sideBannerImg ?? asset('images/itr-side-300x320.png') }}" media="(min-width:1100px)">

    @php
        $tz       = 'Asia/Kolkata';
        $pageUrl  = url()->current();
        $bankSlug = \Illuminate\Support\Str::slug($content->bank);

        $modDate = \Carbon\Carbon::parse($content->updated_at ?? now())
                        ->setTimezone($tz)->format('Y-m-d\TH:i:sP');
        $pubDate = \Carbon\Carbon::parse($content->created_at ?? ($content->updated_at ?? now()))
                        ->setTimezone($tz)->format('Y-m-d\TH:i:sP');

        // ---- Standard IFSC FAQ set (keep wording aligned with the visible FAQs in $content->content) ----
        $faqs = [
            [
                'q' => 'What is the IFSC Code of '.$content->bank.' in '.$content->branch.', '.$content->city2.'?',
                'a' => 'The IFSC code of the '.$content->bank.' '.$content->branch.' branch in '.$content->city2.', '.$content->state.' is '.$content->ifsc.'.',
            ],
            [
                'q' => 'Is the IFSC Code '.$content->ifsc.' permanent?',
                'a' => 'Yes. The IFSC '.$content->ifsc.' stays the same unless the branch is merged, relocated or restructured by the bank, in which case the RBI database is updated.',
            ],
            [
                'q' => 'Is MICR the same as IFSC?',
                'a' => 'No. MICR is a 9-digit code used for cheque clearing, while IFSC is an 11-character code used to route NEFT, RTGS and IMPS online transfers.',
            ],
            [
                'q' => 'Where can I find the IFSC Code of '.$content->bank.' '.$content->branch.'?',
                'a' => 'You can find it on your chequebook, the first page of your passbook, the '.$content->bank.' website or mobile app, or on the RBI portal.',
            ],
            [
                'q' => 'What is the use of the IFSC Code in online banking?',
                'a' => 'The IFSC code ensures NEFT, RTGS and IMPS transactions are routed accurately to the correct bank branch, preventing failed or misdirected transfers.',
            ],
        ];

        // Address question only if an address field is available (avoids schema↔page mismatch).
        if (!empty($content->address)) {
            $faqs[] = [
                'q' => 'What is the full address of the '.$content->branch.' branch?',
                'a' => $content->address,
            ];
        }

        $mainEntity = [];
        foreach ($faqs as $f) {
            $mainEntity[] = [
                '@type'          => 'Question',
                'name'           => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ];
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'         => 'FAQPage',
                    '@id'           => $pageUrl.'#faq',
                    'url'           => $pageUrl,
                    'name'          => $content->bank.' '.$content->branch.', '.$content->city2.' IFSC Code — FAQs',
                    'inLanguage'    => 'en-IN',
                   
                    'mainEntity'    => $mainEntity,
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush


{{-- ============================ STYLES ============================ --}}
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<style>
  /* ===================== PATRON IFSC — design tokens ===================== */
  :root{
    --navy:#0a2540; --navy-2:#1a3a6c; --navy-deep:#06182c;
    --orange:#f59e0b; --orange-2:#fbbf24;
    --amber-bg:#fef3c7; --amber-bd:#fcd34d; --amber-tx:#b45309;
    --ink:#1f2937; --ink-soft:#4b5563; --muted:#6b7280;
    --line:#e5e7eb; --surface:#f9fafb; --surface-2:#eef2f7; --surface-bd:#dbe3ec;
    --wa:#25D366; --ok:#16a34a;
    --mono:'Space Mono', ui-monospace, Menlo, Consolas, monospace;
    --header-h:72px;
    --maxw:1240px;
    --primary-color:#14365F; /* used by the dynamic $content->content blob */
  }
  *{box-sizing:border-box}
  /* Scope the page font to our containers so the global layout/body is untouched */
  .page-head, .layout, .pa-topbanner-wrap{
    font-family:'DM Sans',-apple-system,system-ui,sans-serif;
    color:var(--ink); line-height:1.65; -webkit-font-smoothing:antialiased;
  }
  .page-head a, .layout a{color:var(--navy-2)}
  .page-head img, .layout img{max-width:100%;height:auto}

  /* ===================== TOP BANNER (swappable image) ===================== */
  .pa-topbanner-wrap{max-width:var(--maxw);margin:18px auto 0;padding:0 24px}
  .pa-topbanner{display:block;border-radius:12px;overflow:hidden}
  .pa-topbanner picture{display:block}
  .pa-topbanner img{width:100%;height:auto;display:block;border-radius:12px}
  /* mobile swaps to the taller creative — reserve its ratio so there's no layout shift */
  @media (max-width:600px){
    .pa-topbanner img{aspect-ratio:1000/460;object-fit:cover}
  }

  /* ===================== PAGE HEAD ===================== */
  .page-head{background:linear-gradient(180deg,#f6f8fb 0%,#fff 100%);border-bottom:1px solid var(--line)}
  .page-head__inner{max-width:var(--maxw);margin:0 auto;padding:18px 24px 24px}
  .crumbs{font-size:12.5px;color:var(--muted);margin-bottom:10px}
  .crumbs a{color:var(--muted);text-decoration:none}
  .crumbs a:hover{color:var(--navy-2)}
  .page-head h1{font-size:28px;line-height:1.28;color:var(--navy);margin:6px 0 14px;letter-spacing:-.01em}
  .page-head h1 .code{font-family:var(--mono);color:var(--orange);font-weight:700;white-space:nowrap}

  /* search + chips */
  .ifsc-srch{position:relative;max-width:760px;width:100%;margin:8px 0 14px}
  .ifsc-srch__row{display:flex;gap:10px;align-items:stretch}
  .ifsc-srch__row input{flex:1 1 auto;width:100%;min-width:0;padding:13px 16px;border:1px solid #cdd6e2;border-radius:10px;font-family:inherit;font-size:15px;line-height:1.3;color:var(--ink);background:#fff}
  .ifsc-srch__row input:focus{outline:none;border-color:var(--navy-2);box-shadow:0 0 0 3px rgba(26,58,108,.12)}
  .ifsc-srch__row button{flex:0 0 auto;background:var(--navy);color:#fff;border:0;border-radius:10px;padding:0 26px;font-family:inherit;font-weight:600;font-size:15px;cursor:pointer;white-space:nowrap}
  .ifsc-srch__row button:hover{background:var(--navy-2)}
  .page-head .chips{display:flex;flex-wrap:wrap;gap:8px}
  .page-head .chips a{font-size:12.5px;color:var(--navy-2);background:var(--surface-2);border:1px solid var(--surface-bd);padding:6px 13px;border-radius:20px;text-decoration:none;transition:background .15s}
  .page-head .chips a:hover{background:#e2e9f2}

  /* ===================== 3-zone layout ===================== */
  .layout{max-width:var(--maxw);margin:0 auto;padding:26px 24px 8px;display:grid;gap:30px;grid-template-columns:272px minmax(0,1fr) 304px;align-items:start}
  .rail-inner{position:sticky;top:calc(var(--header-h) + 16px);max-height:calc(100vh - var(--header-h) - 32px);overflow:auto;display:flex;flex-direction:column;gap:16px}
  .rail-inner::-webkit-scrollbar{width:6px}
  .rail-inner::-webkit-scrollbar-thumb{background:#d6deea;border-radius:6px}

  /* ---------- LEFT RAIL: IFSC at-a-glance card ---------- */
  .ifsc-card{border:1px solid var(--surface-bd);border-radius:14px;overflow:hidden;background:#fff;box-shadow:0 4px 18px rgba(10,37,64,.07)}
  .ifsc-card__top{background:linear-gradient(135deg,var(--navy) 0%,var(--navy-2) 100%);padding:16px 18px 18px;position:relative}
  .ifsc-card__top::after{content:"";position:absolute;top:-30px;right:-30px;width:120px;height:120px;border-radius:50%;background:rgba(245,158,11,.10)}
  .ifsc-card__label{display:flex;align-items:center;gap:7px;font-size:11px;font-weight:600;letter-spacing:.08em;color:var(--orange-2);text-transform:uppercase;position:relative;z-index:1}
  .ifsc-card__label .d{width:6px;height:6px;border-radius:50%;background:var(--orange)}
  .ifsc-card__code{font-family:var(--mono);font-size:25px;font-weight:700;color:#fff;letter-spacing:.04em;margin:9px 0 2px;position:relative;z-index:1;word-break:break-all}
  .ifsc-card__sub{font-size:12px;color:#aebfd2;position:relative;z-index:1}
  .copy-big{width:100%;display:flex;align-items:center;justify-content:center;gap:10px;background:var(--orange);color:#3d2700;border:0;border-radius:0;padding:15px 18px;font-family:inherit;font-size:15.5px;font-weight:700;cursor:pointer;transition:background .15s, color .15s}
  .copy-big:hover{background:var(--orange-2)}
  .copy-big.is-copied{background:var(--ok);color:#fff}
  .copy-big svg{flex:none}
  .ifsc-card__rows{padding:6px 18px 14px}
  .ifsc-card__rows dl{display:grid;grid-template-columns:auto 1fr;gap:0;margin:0}
  .ifsc-card__rows dt{font-size:12.5px;color:var(--muted);padding:9px 0;border-bottom:1px solid var(--line)}
  .ifsc-card__rows dd{font-size:13.5px;color:var(--ink);font-weight:600;text-align:right;margin:0;padding:9px 0;border-bottom:1px solid var(--line)}
  .ifsc-card__rows dl > div:last-child dt,.ifsc-card__rows dl > div:last-child dd{border-bottom:0}
  .ifsc-card__rows .pair{display:contents}

  /* ---------- RIGHT RAIL: side banner (swappable image) ---------- */
  .pa-sidebanner{display:block;border-radius:14px;overflow:hidden;box-shadow:0 6px 22px rgba(10,37,64,.16)}
  .pa-sidebanner img{width:100%;height:auto;display:block;border-radius:14px}

  /* ===================== MAIN content — styles for NEW markup (additive) ===================== */
  main.content{min-width:0}
  main.content h2{font-size:21px;color:var(--navy);margin:32px 0 12px;scroll-margin-top:calc(var(--header-h) + 16px);letter-spacing:-.01em}
  main.content h2:first-of-type{margin-top:4px}
  main.content .lede{font-size:16px;color:var(--ink-soft)}

  table.ifsc{width:100%;border-collapse:separate;border-spacing:0;margin:14px 0;font-size:14.5px;border:1px solid var(--line);border-radius:12px;overflow:hidden}
  table.ifsc td{border-bottom:1px solid var(--line);padding:11px 16px;vertical-align:middle}
  table.ifsc tr:last-child td{border-bottom:0}
  table.ifsc td:first-child{background:var(--surface);font-weight:600;width:34%;color:var(--ink-soft)}
  table.ifsc tr.row-key td{background:#fff7ed}
  table.ifsc tr.row-key td:first-child{background:#feefd9;color:var(--amber-tx)}
  .code-cell{display:flex;align-items:center;gap:12px;flex-wrap:wrap}
  .code-cell .val{font-family:var(--mono);font-weight:700;font-size:16px;color:var(--navy);letter-spacing:.03em}
  .copy-inline{display:inline-flex;align-items:center;gap:6px;font-size:12.5px;font-weight:700;color:#fff;background:var(--navy);border:0;border-radius:7px;padding:7px 12px;cursor:pointer;transition:background .15s}
  .copy-inline:hover{background:var(--navy-2)}
  .copy-inline.is-copied{background:var(--ok)}
  .copy-inline svg{flex:none}

  ul.body-list{margin:10px 0;padding-left:20px;font-size:15.5px}
  ul.body-list li{margin:6px 0}
  ul.body-list li::marker{color:var(--orange)}

  .fmt-box{display:flex;gap:14px;align-items:center;flex-wrap:wrap;background:var(--surface);border:1px solid var(--line);border-radius:12px;padding:16px 18px;margin:14px 0}
  .fmt-box .pattern{font-family:var(--mono);font-size:20px;font-weight:700;color:var(--navy);letter-spacing:.06em}
  .fmt-box .pattern .b{color:var(--orange)}
  .fmt-legend{font-size:13px;color:var(--ink-soft)}

  .method-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:14px 0}
  .method-card{border:1px solid var(--line);border-radius:11px;padding:14px 15px;background:#fff}
  .method-card h3{margin:0 0 5px;font-size:14.5px;color:var(--navy)}
  .method-card p{margin:0;font-size:13.5px;color:var(--ink-soft)}

  .faq{margin:10px 0}
  .faq details{border:1px solid var(--line);border-radius:11px;margin:10px 0;overflow:hidden;background:#fff}
  .faq details[open]{border-color:var(--surface-bd);box-shadow:0 2px 10px rgba(10,37,64,.05)}
  .faq summary{list-style:none;cursor:pointer;padding:15px 18px;font-size:15px;font-weight:600;color:var(--navy);display:flex;align-items:center;justify-content:space-between;gap:14px}
  .faq summary::-webkit-details-marker{display:none}
  .faq summary .pm{flex:none;width:22px;height:22px;position:relative}
  .faq summary .pm::before,.faq summary .pm::after{content:"";position:absolute;background:var(--orange);border-radius:2px}
  .faq summary .pm::before{top:10px;left:3px;width:16px;height:2px}
  .faq summary .pm::after{top:3px;left:10px;width:2px;height:16px;transition:transform .2s}
  .faq details[open] summary .pm::after{transform:rotate(90deg)}
  .faq .ans{padding:0 18px 16px;font-size:14.5px;color:var(--ink-soft)}
  .faq .ans .code{font-family:var(--mono);font-weight:700;color:var(--navy)}

  .nearby{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px}
  .nearby a{font-family:var(--mono);font-size:12.5px;color:var(--navy-2);background:var(--surface-2);border:1px solid var(--surface-bd);padding:7px 12px;border-radius:7px;text-decoration:none;transition:background .15s}
  .nearby a:hover{background:#e2e9f2}

  .source-note{margin:26px 0 0;padding:14px 16px;background:var(--surface);border:1px dashed var(--surface-bd);border-radius:10px;font-size:12.5px;color:var(--muted);line-height:1.55}
  .source-note b{color:var(--ink-soft)}

  /* ===================== LEGACY content + search (keeps existing $content->content rendering) ===================== */
  .contact-icon-link{display:none}
  .whatsapp-float-btn{display:none !important}
  .main-content{max-width:1200px;margin:0 auto}
  .main-content p{color:var(--primary-color);text-align:justify}
  .main-content ul li{color:var(--primary-color)}
  .main-content strong{color:var(--primary-color)}
  .main-content h3{font-size:26px;line-height:34px;color:var(--primary-color)}
  .main-content > section:nth-child(3),
  .main-content > section:nth-child(5){display:none}
  .content-section{margin-bottom:4rem}
  .section-title{color:var(--primary-color);font-size:2rem;font-weight:700;margin-bottom:1.5rem;line-height:41px}
  .section-content{margin-bottom:2rem}
  .section-content p{margin-bottom:1rem;line-height:1.8;color:#555}
  .section-content ul{margin-left:2rem;margin-bottom:1rem}
  .section-content ul li{margin-bottom:.5rem;color:#555}
  .benefits-list{list-style:none;margin-left:0}
  .benefits-list li{display:flex;align-items:center;gap:1rem;margin-bottom:1rem;font-size:1.1rem}
  .benefits-list li i{color:var(--primary-color);font-size:1.3rem}
  .disclaimer{color:#dc2626;font-weight:500;margin-top:1rem;padding:1rem;background:#fef2f2;border-left:4px solid #dc2626;border-radius:4px}
  .btn-view-more{background:#f97316;color:#fff;border:none;padding:.75rem 2rem;border-radius:6px;cursor:pointer;font-weight:600;transition:background .3s;display:block;margin:1rem auto 0}
  .btn-view-more:hover{background:#ea580c}
  .faq-section{margin-bottom:2rem}
  .faq-title-img{display:flex;justify-content:space-between}
  .faq-section .faq-title-img .faq-image{background-image:url('/images/oc-on-the-laptop.png');background-size:cover;height:130px;width:150px}
  .faq-container{margin-top:2rem}
  .faq-item{border:1px solid #e5e7eb;border-radius:8px;margin-bottom:1rem;overflow:hidden;transition:box-shadow .3s}
  .faq-item:hover{box-shadow:0 4px 12px rgba(0,0,0,.1)}
  .faq-question{display:flex;justify-content:space-between;align-items:center;padding:1.25rem;background:#f9fafb;cursor:pointer;font-weight:600;color:var(--primary-color)}
  .faq-question i{color:var(--primary-color);transition:transform .3s}
  .faq-item.active .faq-question i{transform:rotate(45deg)}
  .faq-answer{max-height:0;overflow:hidden;transition:max-height .3s ease-out;padding:0 1.25rem;display:none}
  .faq-item.active .faq-answer{max-height:500px;padding:1.25rem;display:block}
  .faq-answer p{color:#555;line-height:1.8}
  /* internal-linking / "Nearby branches" box — clean light pills (matches .nearby) */
  .interlink{background:transparent;padding:0;border-radius:0;display:flex;flex-wrap:wrap;gap:8px;margin:12px 0}
  .interlink a,.interlink button{display:inline-flex;align-items:center;font-family:var(--mono);font-size:12.5px;font-weight:700;color:var(--navy-2);background:var(--surface-2);border:1px solid var(--surface-bd);padding:8px 13px;border-radius:8px;text-decoration:none;cursor:pointer;transition:background .15s,border-color .15s;margin:0;line-height:1.2}
  .interlink a:hover,.interlink button:hover{background:#e2e9f2;border-color:#c7d3e2}
  /* if a link is nested inside a button, the button is the pill; keep the inner link plain */
  .interlink button a{padding:0;border:0;background:transparent;color:inherit}
  .interlink button a:hover{background:transparent;border:0}

  /* search results table */
  /* search results dropdown (card look) */
  #searchResultsContainer{margin-top:0}
  #searchResultsContainer .table-container{max-height:420px !important;width:100% !important;overflow-x:auto;overflow-y:auto;-webkit-overflow-scrolling:touch;background:#fff;border:1px solid var(--surface-bd);border-radius:12px;box-shadow:0 14px 34px rgba(10,37,64,.18)}
  #searchResultsContainer .table-container::-webkit-scrollbar{width:8px}
  #searchResultsContainer .table-container::-webkit-scrollbar-track{background:#f1f1f1;border-radius:4px}
  #searchResultsContainer .table-container::-webkit-scrollbar-thumb{background:#c3cedd;border-radius:4px}
  #searchResultsContainer .table-container::-webkit-scrollbar-thumb:hover{background:#9fb0c7}
  #searchResultsContainer .data-table{margin:0;border:0;border-radius:12px;min-width:640px;width:100%}
  #searchResultsContainer .data-table thead th{position:sticky;top:0;z-index:5}

  /* ---- clean table used by BOTH the content (Particulars/Details) and search results ---- */
  .data-table{width:100%;border-collapse:separate;border-spacing:0;margin:14px 0 1.5rem;font-size:14.5px;background:#fff;color:var(--ink);border:1px solid var(--line);border-radius:12px}
  .data-table thead{background:linear-gradient(135deg,var(--navy) 0%,var(--navy-2) 100%);color:#fff}
  .data-table th{padding:13px 16px;text-align:left;font-weight:600;font-size:14px;letter-spacing:.01em}
  .data-table thead th:first-child{border-top-left-radius:12px}
  .data-table thead th:last-child{border-top-right-radius:12px}
  .data-table td{padding:12px 16px;border-bottom:1px solid var(--line);color:var(--ink);background:transparent;vertical-align:middle}
  .data-table tbody tr:nth-child(even){background:var(--surface)}
  .data-table tbody tr:hover{background:#f1f5fb}
  .data-table tbody tr:last-child td{border-bottom:0}
  .data-table tbody tr:last-child td:first-child{border-bottom-left-radius:12px}
  .data-table tbody tr:last-child td:last-child{border-bottom-right-radius:12px}
  .data-table td:first-child{font-weight:600;color:var(--ink-soft)}
  .data-table td a{color:var(--navy-2);text-decoration:none;font-weight:600}
  .data-table td a:hover{text-decoration:underline}

  /* ===================== Responsive ===================== */
  @media (max-width:1099px){
    .layout{grid-template-columns:1fr;gap:22px;padding:22px 24px 8px}
    .rail-inner{position:static;max-height:none;overflow:visible}
    .rail--right{order:3}
    main.content{order:2}
    .rail--left{order:1}
    .pa-sidebanner{max-width:560px}
  }
  @media (max-width:768px){
    #searchResultsContainer .table-container{max-height:700px;overflow:auto;background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,.1)}
    .section-title{font-size:1.5rem}
    .data-table{font-size:.9rem}
    .data-table th,.data-table td{padding:.75rem .5rem}
    .faq-image{display:none}
    .interlink button{padding:.5rem .8rem}
    .method-grid{grid-template-columns:1fr}
  }
  @media (max-width:680px){
    .page-head h1{font-size:22px}
    .ifsc-card__code{font-size:22px}
  }
  @media (max-width:480px){
    #searchResultsContainer .table-container{max-height:400px;max-width:100%;overflow:auto;background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,.1)}
    .interlink button{padding:.5rem .8rem}
    .section-title{font-size:1.25rem}
    .data-table{font-size:.8rem}
    .data-table th,.data-table td{padding:.5rem .25rem}
  }
  @media (prefers-reduced-motion:reduce){
    *{transition:none !important}
  }
  :focus-visible{outline:2px solid var(--navy-2);outline-offset:2px;border-radius:4px}
</style>
@endpush


{{-- ============================ SCRIPTS ============================ --}}
@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

<script>
  // FAQ accordion (for legacy .faq-item markup inside $content->content) + AJAX branch search
  $(document).ready(function () {
      $('.faq-item .faq-question').on('click', function () {
          $('.faq-item').removeClass('active');
          $(this).closest('.faq-item').addClass('active');
      });

      let searchTimeout;
      const searchUrl = '/ifsc-code/search';
      const MIN_CHARS = 2; // start searching once 2+ characters are typed

      // ---- LIVE SEARCH: results show as you type (debounced; no button click needed) ----
      $(document).on('input', '#contentsearchInput', function () {
          const searchTerm = $(this).val().trim();
          clearTimeout(searchTimeout);
          if (searchTerm.length < MIN_CHARS) {
              $('#searchResultsContainer').hide();
              $('#searchResultsBody').empty();
              return;
          }
          searchTimeout = setTimeout(function () { performSearch(searchTerm); }, 250);
      });

      // close results when clicking outside the search box
      $(document).on('click', function (e) {
          if (!$(e.target).closest('.ifsc-srch').length) {
              $('#searchResultsContainer').hide();
          }
      });

      // reopen results on focus if a usable query is still present
      $(document).on('focus', '#contentsearchInput', function () {
          if ($(this).val().trim().length >= MIN_CHARS && $('#searchResultsBody').children().length) {
              $('#searchResultsContainer').show();
          }
      });

      $(document).on('click', '#searchBtn, #searchBtnAction', function (e) {
          e.preventDefault();
          const searchTerm = $('#contentsearchInput').val().trim();
          clearTimeout(searchTimeout);
          if (searchTerm === '') {
              $('#searchResultsContainer').hide();
              $('#searchResultsBody').empty();
              return;
          }
          performSearch(searchTerm);
      });

      $(document).on('click', '#clearBtn', function (e) {
          e.preventDefault();
          $('#contentsearchInput').val('').focus();
          $('#searchResultsContainer').css('display', 'none').hide();
          $('#searchResultsBody').empty();
          clearTimeout(searchTimeout);
      });

      $(document).on('keypress', '#contentsearchInput', function (e) {
          if (e.which === 13) {
              e.preventDefault();
              const searchTerm = $(this).val().trim();
              clearTimeout(searchTimeout);
              if (searchTerm === '') {
                  $('#searchResultsContainer').hide();
                  $('#searchResultsBody').empty();
                  return;
              }
              performSearch(searchTerm);
          }
      });

      function performSearch(searchTerm) {
          const resultsBody = $('#searchResultsBody');
          const resultsContainer = $('#searchResultsContainer');
          if (!searchTerm) {
              resultsContainer.hide();
              resultsBody.empty();
              return;
          }
          resultsBody.html('<tr><td colspan="4" style="text-align:center;padding:1.5rem;color:#666;">Loading...</td></tr>');
          resultsContainer.css('display', 'block').show();

          $.ajax({
              url: searchUrl,
              method: 'GET',
              data: { search: searchTerm },
              dataType: 'json',
              success: function (response) {
                  if (response.success && response.data && response.data.length > 0) {
                      resultsBody.empty();
                      response.data.forEach(function (item) {
                          const ifscCode = item.ifsc || '';
                          const bankName = item.bank || '';
                          const branch   = item.branch || '';
                          const city     = item.city || '';
                          const slug     = item.slug || '';
                          if (ifscCode || bankName || branch || city) {
                              resultsBody.append(
                                  '<tr>' +
                                  '<td>' + escapeHtml(String(ifscCode)) + '</td>' +
                                  '<td><a href="/ifsc-code/' + escapeHtml(String(slug)) + '">' + escapeHtml(String(bankName)) + '</a></td>' +
                                  '<td>' + escapeHtml(String(branch)) + '</td>' +
                                  '<td>' + escapeHtml(String(city)) + '</td>' +
                                  '</tr>'
                              );
                          }
                      });
                      resultsContainer.show().css('display', 'block');
                  } else {
                      if (!searchTerm) {
                          resultsContainer.hide();
                          resultsBody.empty();
                      } else {
                          resultsBody.html('<tr><td colspan="4" style="text-align:center;padding:1.5rem;color:#666;">No results found for "' + escapeHtml(searchTerm) + '"</td></tr>');
                          resultsContainer.show();
                      }
                  }
              },
              error: function (xhr) {
                  let errorMsg = 'Error loading results. Please try again.';
                  if (xhr.responseJSON && xhr.responseJSON.message) { errorMsg = xhr.responseJSON.message; }
                  resultsBody.html('<tr><td colspan="4" style="text-align:center;padding:2rem;color:#dc2626;">' + errorMsg + '</td></tr>');
                  resultsContainer.show();
              }
          });
      }

      function escapeHtml(text) {
          const map = { '&':'&amp;', '<':'&lt;', '>':'&gt;', '"':'&quot;', "'":'&#039;' };
          return text.toString().replace(/[&<>"']/g, function (m) { return map[m]; });
      }
  });
</script>

<script>
  // Copy buttons — wires every .js-copy via its data-copy value
  (function () {
      function flash(btn) {
          var lbl = btn.querySelector('.btn-label') || btn;
          var old = lbl.textContent;
          btn.classList.add('is-copied');
          lbl.textContent = 'Copied!';
          setTimeout(function () { lbl.textContent = old; btn.classList.remove('is-copied'); }, 1800);
      }
      document.querySelectorAll('.js-copy').forEach(function (btn) {
          btn.addEventListener('click', function () {
              var code = btn.getAttribute('data-copy') || '';
              if (navigator.clipboard && navigator.clipboard.writeText) {
                  navigator.clipboard.writeText(code).then(function () { flash(btn); }).catch(fallback);
              } else { fallback(); }
              function fallback() {
                  var t = document.createElement('textarea');
                  t.value = code; t.style.position = 'fixed'; t.style.opacity = '0';
                  document.body.appendChild(t); t.select();
                  try { document.execCommand('copy'); flash(btn); } catch (e) {}
                  document.body.removeChild(t);
              }
          });
      });
  })();
</script>
@endpush
