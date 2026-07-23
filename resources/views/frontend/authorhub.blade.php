@extends('layouts.app')

@section('title', 'CA Sundram Gupta — Founder, Patron Accounting LLP | Author Hub')
@section('meta_description', 'CA Sundram Gupta — Chartered Accountant (ICAI), DipIFR (ACCA, UK), Founder of Patron Accounting LLP. 15+ years guiding 25,000+ Indian businesses on tax, audit, GST, payroll, ROC and Virtual CFO services.')

@push('meta')
    {{-- Author meta + canonical --}}
    <meta name="keywords" content="CA Sundram Gupta, Patron Accounting Founder, Chartered Accountant Pune, DipIFR ACCA, GST expert India, income tax expert, Virtual CFO India, SME compliance India, CA author India">
    <meta name="author" content="CA Sundram Gupta">
    {{-- <link rel="canonical" href="/authorhub/ca-sundram-gupta"> --}}

    {{-- Open Graph --}}
    <meta property="og:title" content="CA Sundram Gupta — Founder, Patron Accounting LLP">
    <meta property="og:description" content="Chartered Accountant (ICAI), DipIFR (ACCA, UK). 15+ years guiding 25,000+ Indian businesses on tax, audit, GST, payroll, ROC and Virtual CFO services.">
    <meta property="og:url" content="/authorhub/ca-sundram-gupta">
    <meta property="og:type" content="profile">
    <meta property="og:image" content="/images/authors/ca-sundram-gupta.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting LLP">
    <meta property="og:locale" content="en_IN">
    <meta property="profile:first_name" content="Sundram">
    <meta property="profile:last_name" content="Gupta">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CA Sundram Gupta — Founder, Patron Accounting LLP">
    <meta name="twitter:description" content="Chartered Accountant (ICAI), DipIFR (ACCA, UK). 15+ years guiding 25,000+ Indian businesses on tax, audit, GST, payroll, ROC and Virtual CFO services.">
    <meta name="twitter:image" content="/images/authors/ca-sundram-gupta.jpg">
    <meta name="twitter:site" content="@patronaccounting">

    {{-- SEO --}}
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="geo.region" content="IN">
    <meta name="geo.placename" content="Pune, India">

    {{-- Schema: ProfilePage + Person + Organization + BreadcrumbList + ItemList --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ProfilePage",
          "@id": "/authorhub/ca-sundram-gupta#profilepage",
          "url": "/authorhub/ca-sundram-gupta",
          "name": "CA Sundram Gupta — Author Profile",
          "description": "Author hub for CA Sundram Gupta, Founder & Managing Partner of Patron Accounting LLP.",
          "inLanguage": "en-IN",
          "isPartOf": { "@id": "/#website" },
          "mainEntity": { "@id": "/authorhub/ca-sundram-gupta#person" },
          "breadcrumb": { "@id": "/authorhub/ca-sundram-gupta#breadcrumbs" },
          "dateCreated": "2026-04-30",
          "dateModified": "2026-04-30"
        },
        {
          "@type": "Person",
          "@id": "/authorhub/ca-sundram-gupta#person",
          "name": "CA Sundram Gupta",
          "givenName": "Sundram",
          "familyName": "Gupta",
          "honorificPrefix": "CA",
          "jobTitle": "Founder & Managing Partner",
          "description": "Founder & Managing Partner of Patron Accounting LLP. Chartered Accountant (ICAI) with a Diploma in International Financial Reporting Standards (DipIFR) from ACCA, UK.",
          "image": "/images/authors/ca-sundram-gupta.jpg",
          "url": "/authorhub/ca-sundram-gupta",
          "sameAs": [
            "https://www.linkedin.com/in/sundram-gupta-0a266117",
            "/meet-our-founder"
          ],
          "email": "mailto:sg@patronaccounting.com",
          "telephone": "+91-9459456700",
          "nationality": { "@type": "Country", "name": "India" },
          "knowsLanguage": ["English", "Hindi", "Punjabi"],
          "worksFor": { "@id": "/#organization" }
        },
        {
          "@type": "BreadcrumbList",
          "@id": "/authorhub/ca-sundram-gupta#breadcrumbs",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Author Hub", "item": "/authorhub" },
            { "@type": "ListItem", "position": 3, "name": "CA Sundram Gupta" }
          ]
        }
      ]
    }
    </script>

    {{-- Fonts (Inter + JetBrains Mono) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Preload hero author photo (LCP optimization) --}}
    <link rel="preload" as="image" href="{{ asset('images/authors/ca-sundram-gupta.webp') }}" type="image/webp" fetchpriority="high">
@endpush

@push('styles')
<style>
/* Scoped under .authorhub-page so they don't leak into the shared header/footer */
.authorhub-page {
    --navy: #15365f;
    --navy-deep: #0d2342;
    --navy-soft: #2a4a7a;
    --orange: #f26522;
    --orange-deep: #d9531a;
    --orange-tint: #fef0e8;
    --grey: #414042;
    --grey-2: #6b6e72;
    --grey-3: #a7aaae;
    --grey-light: #d4d8dd;
    --bg: #fefefe;
    --bg-soft: #f6f7f9;
    --line: #e3e7ec;
    --line-strong: #ccd1da;
    --green-wa: #25d366;
    --green-wa-dark: #128c7e;

    font-family: 'Inter', sans-serif;
    color: var(--grey);
    background: var(--bg);
    line-height: 1.5;
}
.authorhub-page *, .authorhub-page *::before, .authorhub-page *::after { box-sizing: border-box; }
.authorhub-page img { max-width: 100%; height: auto; display: block; }
.authorhub-page a { color: var(--navy); text-decoration: none; }

.authorhub-page .container-cp { max-width: 1180px; margin: 0 auto; padding: 0 20px; }

/* STATUS BAR */
.authorhub-page .statbar { background: var(--navy-deep); color: rgba(255,255,255,0.9); font-size: 12px; }
.authorhub-page .statbar-inner { max-width: 1180px; margin: 0 auto; padding: 8px 20px; display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap; }
.authorhub-page .statbar strong { color: #fff; font-weight: 600; }
.authorhub-page .statbar-left, .authorhub-page .statbar-right { display: flex; align-items: center; gap: 8px; }
.authorhub-page .statbar-pulse { width: 6px; height: 6px; background: var(--green-wa); border-radius: 50%; box-shadow: 0 0 0 0 rgba(37,211,102,0.7); animation: ahub-pulse 2s infinite; display: inline-block; }
@keyframes ahub-pulse {
    0% { box-shadow: 0 0 0 0 rgba(37,211,102,0.7); }
    70% { box-shadow: 0 0 0 6px rgba(37,211,102,0); }
    100% { box-shadow: 0 0 0 0 rgba(37,211,102,0); }
}
.authorhub-page .statbar .sep { opacity: 0.4; }
@media (max-width: 640px) { .authorhub-page .statbar-inner { font-size: 11px; padding: 6px 16px; } .authorhub-page .statbar-right { gap: 6px; } }

/* HERO */
.authorhub-page .hero-cp { padding: 60px 0 70px; background: linear-gradient(135deg, var(--bg) 0%, var(--bg-soft) 100%); border-bottom: 1px solid var(--line); }
@media (max-width: 768px) { .authorhub-page .hero-cp { padding: 36px 0 50px; } }
.authorhub-page .hero-cp-grid { display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 60px; align-items: start; }
@media (max-width: 960px) { .authorhub-page .hero-cp-grid { grid-template-columns: 1fr; gap: 40px; } }
.authorhub-page .hero-cp-eyebrow { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 600; color: var(--orange); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 16px; }
.authorhub-page .dot { width: 6px; height: 6px; background: var(--orange); border-radius: 50%; }
.authorhub-page .hero-cp-h1 { font-size: 48px; font-weight: 700; line-height: 1.1; color: var(--navy-deep); margin: 0 0 14px; letter-spacing: -0.01em; }
.authorhub-page .hero-cp-h1 .accent-line { color: var(--orange); }
@media (max-width: 768px) { .authorhub-page .hero-cp-h1 { font-size: 36px; } }
@media (max-width: 480px) { .authorhub-page .hero-cp-h1 { font-size: 30px; } }
.authorhub-page .hero-cp-role { font-size: 16px; color: var(--grey-2); font-weight: 500; margin: 0 0 24px; }
.authorhub-page .hero-cp-role strong { color: var(--navy-deep); font-weight: 700; }
.authorhub-page .cred-pills { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 26px; }
.authorhub-page .cred-pill { display: inline-flex; align-items: center; gap: 6px; background: #fff; border: 1px solid var(--line); padding: 6px 12px; border-radius: 6px; font-size: 12.5px; font-weight: 600; color: var(--navy-deep); }
.authorhub-page .cred-pill .pill-dot { width: 5px; height: 5px; background: var(--orange); border-radius: 50%; }
.authorhub-page .cred-pill.is-mono { font-family: 'JetBrains Mono', monospace; font-weight: 500; background: var(--orange-tint); color: var(--orange); border-color: rgba(242,101,34,0.2); }
.authorhub-page .hero-cp-sub { font-size: 17px; color: var(--grey-2); margin: 0 0 28px; line-height: 1.6; max-width: 580px; }
@media (max-width: 768px) { .authorhub-page .hero-cp-sub { font-size: 15px; margin-bottom: 24px; } }
.authorhub-page .hero-cp-cta { display: flex; align-items: center; gap: 12px; flex-wrap: wrap; margin-bottom: 24px; }
@media (max-width: 480px) { .authorhub-page .hero-cp-cta { flex-direction: column; align-items: stretch; } .authorhub-page .hero-cp-cta a { justify-content: center; } }
.authorhub-page .btn-cp-primary { display: inline-flex; align-items: center; gap: 10px; background: var(--orange); color: #fff !important; padding: 14px 22px; border-radius: 6px; font-weight: 600; font-size: 14px; border: 0; cursor: pointer; transition: all 0.15s; box-shadow: 0 1px 0 rgba(0,0,0,0.04), 0 4px 12px rgba(242,101,34,0.18); }
.authorhub-page .btn-cp-primary:hover { background: var(--orange-deep); transform: translateY(-1px); box-shadow: 0 1px 0 rgba(0,0,0,0.04), 0 8px 18px rgba(242,101,34,0.28); }
.authorhub-page .btn-cp-primary svg { width: 14px; height: 14px; transition: transform 0.15s; }
.authorhub-page .btn-cp-primary:hover svg { transform: translateX(3px); }
.authorhub-page .btn-cp-secondary { display: inline-flex; align-items: center; gap: 8px; background: #fff; color: var(--navy) !important; padding: 14px 18px; border-radius: 6px; font-weight: 600; font-size: 14px; border: 1px solid var(--line-strong); cursor: pointer; transition: all 0.15s; }
.authorhub-page .btn-cp-secondary:hover { border-color: var(--navy); background: var(--bg-soft); }
.authorhub-page .btn-cp-wa { display: inline-flex; align-items: center; gap: 8px; background: var(--green-wa); color: #fff !important; padding: 14px 18px; border-radius: 6px; font-weight: 600; font-size: 14px; border: 0; transition: all 0.15s; }
.authorhub-page .btn-cp-wa:hover { background: var(--green-wa-dark); }
.authorhub-page .btn-cp-wa svg { width: 14px; height: 14px; }

/* Stats grid */
.authorhub-page .hero-cp-stats { display: grid; grid-template-columns: repeat(4, 1fr); border-radius: 10px; overflow: hidden; background: linear-gradient(135deg, var(--navy-deep) 0%, var(--navy) 100%); margin-top: 28px; box-shadow: 0 8px 32px rgba(13,35,66,0.3); }
.authorhub-page .hero-cp-stat { padding: 18px 16px; background: rgba(255,255,255,0.04); border-right: 1px solid rgba(255,255,255,0.1); position: relative; }
.authorhub-page .hero-cp-stat:last-child { border-right: 0; }
@media (max-width: 720px) { .authorhub-page .hero-cp-stats { grid-template-columns: repeat(2, 1fr); } .authorhub-page .hero-cp-stat { border-right: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1); } .authorhub-page .hero-cp-stat:nth-child(2n) { border-right: 0; } .authorhub-page .hero-cp-stat:nth-last-child(-n+2) { border-bottom: 0; } }
@media (max-width: 380px) { .authorhub-page .hero-cp-stats { grid-template-columns: 1fr; } .authorhub-page .hero-cp-stat { border-right: 0; border-bottom: 1px solid rgba(255,255,255,0.1); } .authorhub-page .hero-cp-stat:last-child { border-bottom: 0; } }
.authorhub-page .hero-cp-stat-num { font-size: 26px; font-weight: 700; color: #fff; line-height: 1; margin-bottom: 6px; display: flex; align-items: center; gap: 4px; font-family: 'JetBrains Mono', monospace; font-variant-numeric: tabular-nums; }
.authorhub-page .hero-cp-stat-num .star, .authorhub-page .hero-cp-stat-num .plus { font-size: 20px; color: var(--orange); margin-top: -2px; font-family: 'Inter', sans-serif; }
.authorhub-page .hero-cp-stat-label { font-size: 10.5px; font-weight: 600; color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 0.05em; }

/* Author photo card */
.authorhub-page .author-card { background: #fff; border: 1px solid var(--line); border-radius: 12px; padding: 24px; position: sticky; top: 100px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); }
@media (max-width: 960px) { .authorhub-page .author-card { position: static; max-width: 420px; margin: 0 auto; } }
.authorhub-page .author-photo-wrap { position: relative; border-radius: 8px; overflow: hidden; margin-bottom: 18px; background: linear-gradient(135deg, var(--navy-deep), var(--navy)); aspect-ratio: 4/5; }
.authorhub-page .author-photo-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; }
.authorhub-page .author-photo-badge { position: absolute; top: 14px; left: 14px; background: var(--orange); color: #fff; font-size: 10px; font-weight: 700; padding: 5px 10px; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.06em; box-shadow: 0 2px 8px rgba(242,101,34,0.3); }
.authorhub-page .author-card-name { font-size: 19px; font-weight: 700; color: var(--navy-deep); margin: 0 0 4px; }
.authorhub-page .author-card-role { font-size: 13px; color: var(--grey-2); margin: 0 0 14px; line-height: 1.4; }
.authorhub-page .author-card-meta { display: grid; gap: 8px; padding-top: 14px; border-top: 1px dashed var(--line); margin-bottom: 14px; }
.authorhub-page .acm-row { display: flex; justify-content: space-between; align-items: center; font-size: 12.5px; }
.authorhub-page .acm-row-lab { color: var(--grey-3); font-weight: 600; text-transform: uppercase; letter-spacing: 0.04em; font-size: 10.5px; }
.authorhub-page .acm-row-val { color: var(--navy-deep); font-weight: 600; text-align: right; }
.authorhub-page .acm-row-val.mono { font-family: 'JetBrains Mono', monospace; font-weight: 500; }
.authorhub-page .author-card-social { display: flex; gap: 8px; padding-top: 14px; border-top: 1px dashed var(--line); }
.authorhub-page .acs-link { flex: 1; display: inline-flex; align-items: center; justify-content: center; gap: 6px; padding: 10px 12px; border-radius: 6px; font-size: 12px; font-weight: 600; background: var(--bg-soft); color: var(--navy-deep) !important; border: 1px solid var(--line); transition: all 0.15s; }
.authorhub-page .acs-link:hover { background: #fff; border-color: var(--navy); }
.authorhub-page .acs-link svg { width: 14px; height: 14px; }
.authorhub-page .acs-link.is-linkedin { color: #0a66c2 !important; }
.authorhub-page .acs-link.is-linkedin:hover { border-color: #0a66c2; }

/* TOC NAV — top:80 to clear site header */
.authorhub-page .toc-strip { background: rgba(255,255,255,0.95); border-bottom: 1px solid var(--line); position: sticky; top: 80px; z-index: 40; backdrop-filter: blur(10px); }
.authorhub-page .toc-strip-inner { max-width: 1180px; margin: 0 auto; padding: 0 20px; display: flex; gap: 1px; background: var(--line); overflow-x: auto; scrollbar-width: none; }
.authorhub-page .toc-strip-inner::-webkit-scrollbar { display: none; }
.authorhub-page .toc-link { background: #fff; padding: 14px 18px; text-decoration: none; color: var(--grey); font-size: 13px; font-weight: 600; white-space: nowrap; display: inline-flex; flex-direction: column; gap: 2px; flex: 1; min-width: 140px; transition: all 0.15s; }
.authorhub-page .toc-link:hover { background: var(--bg-soft); color: var(--navy-deep); }
.authorhub-page .toc-link-num { color: var(--orange); font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; }
.authorhub-page .toc-link-label { color: var(--navy-deep); font-weight: 700; font-size: 13.5px; }

/* Sections */
.authorhub-page .sec-cp { padding: 80px 0; position: relative; }
.authorhub-page .sec-cp.is-soft { background: var(--bg-soft); }
.authorhub-page .sec-cp.is-navy { background: var(--navy-deep); color: #fff; }
.authorhub-page .sec-cp.is-navy .sec-h2 { color: #fff; }
.authorhub-page .sec-cp.is-navy .sec-sub { color: rgba(255,255,255,0.8); }
@media (max-width: 768px) { .authorhub-page .sec-cp { padding: 50px 0; } }
.authorhub-page .sec-head-cp { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; gap: 40px; position: relative; padding-top: 24px; }
@media (max-width: 768px) { .authorhub-page .sec-head-cp { flex-direction: column; align-items: flex-start; gap: 16px; margin-bottom: 32px; } }
.authorhub-page .sec-head-cp::before { content: ''; position: absolute; top: 0; left: 0; width: 60px; height: 4px; background: linear-gradient(90deg, var(--orange) 0%, var(--orange-deep) 100%); border-radius: 2px; }
.authorhub-page .sec-tag { display: inline-flex; align-items: center; gap: 6px; font-size: 11px; font-weight: 700; color: var(--orange); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px; background: var(--orange-tint); padding: 5px 12px; border-radius: 20px; border: 1px solid rgba(242,101,34,0.2); }
.authorhub-page .sec-cp.is-navy .sec-tag { background: rgba(242,101,34,0.18); border-color: rgba(242,101,34,0.4); color: #ffb78a; }
.authorhub-page .tag-num { background: var(--orange); color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 10px; }
.authorhub-page .sec-h2 { font-size: 36px; font-weight: 700; color: var(--navy-deep); margin: 0 0 12px; line-height: 1.18; letter-spacing: -0.01em; }
.authorhub-page .sec-h2 .accent-line { color: var(--orange); }
@media (max-width: 768px) { .authorhub-page .sec-h2 { font-size: 28px; } }
.authorhub-page .sec-sub { font-size: 16px; color: var(--grey-2); max-width: 560px; line-height: 1.55; margin: 0; }
.authorhub-page .sec-counter { font-size: 12px; color: var(--grey-2); font-weight: 600; background: linear-gradient(135deg, var(--line) 0%, var(--bg-soft) 100%); padding: 8px 14px; border-radius: 25px; border: 1px solid var(--line); white-space: nowrap; }
.authorhub-page .sec-cp.is-navy .sec-counter { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.15); color: rgba(255,255,255,0.9); }

/* Grids & tiles */
.authorhub-page .grid-cp { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
@media (max-width: 960px) { .authorhub-page .grid-cp { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 640px) { .authorhub-page .grid-cp { grid-template-columns: 1fr; } }
.authorhub-page .tile-cp { background: #fff; border: 1px solid var(--line); border-radius: 12px; padding: 24px; text-decoration: none; color: var(--grey); transition: all 0.15s; display: flex; flex-direction: column; gap: 10px; }
.authorhub-page .tile-cp:hover { border-color: var(--orange); box-shadow: 0 4px 20px rgba(0,0,0,0.08); transform: translateY(-2px); color: var(--grey); }
.authorhub-page .tile-num { font-family: 'JetBrains Mono', monospace; font-size: 12px; font-weight: 600; color: var(--orange); letter-spacing: 0.05em; }
.authorhub-page .tile-cp-title { font-size: 17px; font-weight: 700; color: var(--navy-deep); line-height: 1.3; margin: 0; }
.authorhub-page .tile-cp-blurb { color: var(--grey-2); font-size: 13.5px; line-height: 1.5; margin: 0; flex-grow: 1; }
.authorhub-page .tile-cp-foot { display: flex; justify-content: space-between; align-items: center; font-size: 12px; font-weight: 600; margin-top: 6px; color: var(--grey-2); }
.authorhub-page .tile-cp-foot .pillar-tag { background: var(--orange-tint); color: var(--orange); padding: 3px 8px; border-radius: 4px; font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; }
.authorhub-page .arrow { color: var(--orange); font-weight: 700; font-size: 14px; }
.authorhub-page .tile-cp:hover .arrow { transform: translateX(2px); }
.authorhub-page .tile-cp.is-read .tile-cp-title { font-size: 16px; }
.authorhub-page .tile-cp.is-read .tile-cp-blurb { font-size: 13px; }
.authorhub-page .tile-cp.is-article { padding: 0; overflow: hidden; }
.authorhub-page .article-thumb { aspect-ratio: 16/9; background: linear-gradient(135deg, var(--navy-deep), var(--navy)); display: flex; align-items: center; justify-content: center; position: relative; }
.authorhub-page .article-thumb img { width: 100%; height: 100%; object-fit: cover; }
.authorhub-page .article-thumb-fallback { color: rgba(255,255,255,0.6); font-size: 12px; font-weight: 500; letter-spacing: 0.06em; text-transform: uppercase; }
.authorhub-page .article-thumb::after { content: ''; position: absolute; top: 0; left: 0; width: 60px; height: 3px; background: var(--orange); }
.authorhub-page .article-body { padding: 20px 22px 24px; display: flex; flex-direction: column; gap: 10px; flex: 1; }

/* About */
.authorhub-page .about-grid { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 60px; align-items: start; }
@media (max-width: 960px) { .authorhub-page .about-grid { grid-template-columns: 1fr; gap: 28px; } }
.authorhub-page .about-body p { font-size: 16px; line-height: 1.7; color: var(--grey); margin: 0 0 16px; }
.authorhub-page .about-body p:last-child { margin-bottom: 0; }
.authorhub-page .about-body strong { color: var(--navy-deep); font-weight: 600; }
.authorhub-page .about-body a { color: var(--navy); border-bottom: 1px solid var(--orange); }
.authorhub-page .about-body a:hover { color: var(--orange); }

/* Philosophy */
.authorhub-page .phil-grid { display: grid; grid-template-columns: 0.8fr 1.2fr; gap: 60px; align-items: start; }
@media (max-width: 960px) { .authorhub-page .phil-grid { grid-template-columns: 1fr; gap: 32px; } }
.authorhub-page .phil-attribution { background: rgba(255,255,255,0.05); border-left: 3px solid var(--orange); padding: 16px 18px; border-radius: 0 6px 6px 0; margin-top: 16px; }
.authorhub-page .phil-attribution-name { color: #fff; font-weight: 700; font-size: 15px; margin-bottom: 2px; }
.authorhub-page .phil-attribution-role { color: rgba(255,255,255,0.7); font-size: 12.5px; }
.authorhub-page .phil-body p { font-size: 17px; line-height: 1.7; color: rgba(255,255,255,0.92); margin: 0 0 16px; }
.authorhub-page .phil-body p:last-child { margin-bottom: 0; }
.authorhub-page .phil-pull { font-size: 22px; font-weight: 700; color: #fff; line-height: 1.35; margin: 24px 0; padding: 18px 22px; background: rgba(242,101,34,0.1); border-left: 3px solid var(--orange); border-radius: 0 8px 8px 0; }
@media (max-width: 768px) { .authorhub-page .phil-body p { font-size: 15.5px; } .authorhub-page .phil-pull { font-size: 18px; } }

/* Topics */
.authorhub-page .topic-grid { display: flex; flex-wrap: wrap; gap: 8px; }
.authorhub-page .topic-tag { display: inline-flex; align-items: center; gap: 6px; background: #fff; border: 1px solid var(--line); padding: 9px 14px; border-radius: 6px; font-size: 13px; font-weight: 600; color: var(--navy-deep); transition: all 0.15s; }
.authorhub-page .topic-tag:hover { background: var(--navy-deep); color: #fff; border-color: var(--navy-deep); }
.authorhub-page .topic-tag .ct { font-family: 'JetBrains Mono', monospace; font-size: 11px; color: var(--orange); font-weight: 500; }
.authorhub-page .topic-tag:hover .ct { color: #ffb78a; }

/* CTA strip */
.authorhub-page .cta-strip-cp { background: var(--orange-tint); border-top: 1px solid rgba(242,101,34,0.2); border-bottom: 1px solid rgba(242,101,34,0.2); }
.authorhub-page .cta-strip-cp-inner { max-width: 1180px; margin: 0 auto; padding: 22px 20px; display: flex; justify-content: space-between; align-items: center; gap: 24px; flex-wrap: wrap; }
@media (max-width: 768px) { .authorhub-page .cta-strip-cp-inner { flex-direction: column; text-align: center; gap: 16px; } }
.authorhub-page .cta-strip-text { font-size: 15px; color: var(--grey); }
.authorhub-page .cta-strip-text strong { color: var(--navy-deep); }
.authorhub-page .cta-strip-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.authorhub-page .btn-strip { padding: 10px 16px; border-radius: 6px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.15s; }
.authorhub-page .btn-strip.is-orange { background: var(--orange); color: #fff !important; }
.authorhub-page .btn-strip.is-orange:hover { background: var(--orange-deep); }
.authorhub-page .btn-strip.is-wa { background: var(--green-wa); color: #fff !important; }
.authorhub-page .btn-strip.is-wa:hover { background: var(--green-wa-dark); }
.authorhub-page .btn-strip svg { width: 14px; height: 14px; }

.authorhub-page .mono { font-family: 'JetBrains Mono', monospace; }
.authorhub-page .tabular { font-family: 'JetBrains Mono', monospace; font-variant-numeric: tabular-nums; }

/* ================================================================
   MOBILE-RESPONSIVE REFINEMENTS (NEW - added for phone polish)
   - WCAG 2.5.5 touch-target sizing (44px minimum on tap actions)
   - iOS / Android tap-highlight color matched to brand orange
   - Safe-area insets for notched phones (iPhone X+)
   - Tighter padding on tile/card components below 540px
   - Reduced-motion support for accessibility
   - All scoped under .authorhub-page so nothing leaks elsewhere.
   ================================================================ */

/* iOS / Android tap-highlight + smoother text rendering */
.authorhub-page a, .authorhub-page button {
    -webkit-tap-highlight-color: rgba(242, 101, 34, 0.18);
    -webkit-touch-callout: none;
}
.authorhub-page {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility;
}

/* Safe-area insets for notched devices */
.authorhub-page .container-cp {
    padding-left: max(20px, env(safe-area-inset-left));
    padding-right: max(20px, env(safe-area-inset-right));
}
.authorhub-page .statbar-inner {
    padding-left: max(20px, env(safe-area-inset-left));
    padding-right: max(20px, env(safe-area-inset-right));
}
.authorhub-page .cta-strip-cp-inner {
    padding-left: max(20px, env(safe-area-inset-left));
    padding-right: max(20px, env(safe-area-inset-right));
}

/* Tablet portrait + small landscape */
@media (max-width: 768px) {
    .authorhub-page .container-cp { padding-left: 18px; padding-right: 18px; }
    .authorhub-page .grid-cp { gap: 14px; }
    .authorhub-page .tile-cp { padding: 20px; gap: 8px; }
    .authorhub-page .tile-cp-title { font-size: 16px; }
    .authorhub-page .tile-cp.is-read .tile-cp-title { font-size: 15.5px; }
    .authorhub-page .article-body { padding: 16px 18px 20px; }
}

/* Phone-size adjustments */
@media (max-width: 540px) {
    .authorhub-page .statbar-inner { flex-direction: column; align-items: flex-start; gap: 4px; }
    .authorhub-page .statbar-right { gap: 6px; flex-wrap: wrap; }
    .authorhub-page .btn-cp-primary,
    .authorhub-page .btn-cp-secondary,
    .authorhub-page .btn-cp-wa {
        min-height: 44px;
        padding: 12px 18px;
        font-size: 14px;
    }
    .authorhub-page .btn-strip { min-height: 40px; padding: 10px 14px; }
    .authorhub-page .topic-tag { padding: 10px 14px; font-size: 13px; min-height: 40px; }
    .authorhub-page .tile-cp { padding: 18px; border-radius: 10px; }
    .authorhub-page .article-body { padding: 14px 16px 18px; }
    .authorhub-page .author-card { padding: 18px; }
}

/* Very small phones (≤380px) */
@media (max-width: 380px) {
    .authorhub-page { font-size: 14.5px; }
    .authorhub-page .container-cp { padding-left: 14px; padding-right: 14px; }
    .authorhub-page .tile-cp { padding: 16px; }
    .authorhub-page .tile-cp-title { font-size: 15.5px; }
    .authorhub-page .tile-cp-blurb { font-size: 13px; }
    .authorhub-page .article-body { padding: 12px 14px 16px; }
    .authorhub-page .hero-cp-cta a { width: 100%; min-height: 46px; padding: 13px 16px; }
    .authorhub-page .hero-cp-stat { padding: 16px 14px; }
    .authorhub-page .hero-cp-stat-num { font-size: 23px; }
    .authorhub-page .hero-cp-stat-label { font-size: 10px; }
    .authorhub-page .cred-pills { gap: 6px; }
}

/* Reduced motion for accessibility */
@media (prefers-reduced-motion: reduce) {
    .authorhub-page *,
    .authorhub-page *::before,
    .authorhub-page *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Anti-overflow safety */
.authorhub-page img,
.authorhub-page picture,
.authorhub-page svg { max-width: 100%; }
</style>
@endpush

@section('content')

<div class="authorhub-page">

{{-- ============ STATUS BAR ============ --}}
<div class="statbar">
    <div class="statbar-inner">
        <div class="statbar-left">
            <span class="statbar-pulse" aria-hidden="true"></span>
            <span><strong>Patron Accounting LLP</strong> · CA-led · Since 2019</span>
        </div>
        <div class="statbar-right">
            <span>Author <strong>Hub</strong></span>
            <span class="sep">·</span>
            <span>Founder <strong>Profile</strong></span>
            <span class="sep">·</span>
            <span>Updated <strong id="lastUpdated"></strong></span>
        </div>
    </div>
</div>

{{-- ============ HERO ============ --}}
<section class="hero-cp">
    <div class="container-cp">
        <div class="hero-cp-grid">

            {{-- LEFT COLUMN --}}
            <div>
                <div class="hero-cp-eyebrow"><span class="dot"></span>Author Hub · Patron Accounting LLP</div>
                <h1 class="hero-cp-h1">
                    CA Sundram Gupta. <span class="accent-line">Founder &amp; CA.</span>
                </h1>
                <p class="hero-cp-role">Founder &amp; Managing Partner, <strong>Patron Accounting LLP</strong> · Pune, India</p>

                <div class="cred-pills">
                    <span class="cred-pill"><span class="pill-dot"></span>CA (ICAI)</span>
                    <span class="cred-pill"><span class="pill-dot"></span>DipIFR (ACCA, UK)</span>
                    <span class="cred-pill is-mono">15+ YEARS</span>
                    <span class="cred-pill is-mono">25,000+ CLIENTS</span>
                </div>

                <p class="hero-cp-sub">
                    Practitioner-led writing on tax, audit, GST, ROC compliance, payroll and Virtual CFO services &mdash; drawn from 15+ years across CRISIL, Bajaj Allianz and full-service CA practice.
                </p>

                <div class="hero-cp-cta">
                    <a href="#articles" class="btn-cp-primary">
                        Read Latest Articles
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="2" y1="8" x2="13" y2="8"/><polyline points="8 3 13 8 8 13"/></svg>
                    </a>
                    <a href="tel:+919459456700" class="btn-cp-secondary">Talk to Sundram</a>
                    <a href="https://wa.me/919459456700?text=Hi%20CA%20Sundram%2C%20I%20found%20your%20author%20page%20and%20would%20like%20to%20discuss%20my%20business%20requirements." class="btn-cp-wa" rel="noopener" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12c0 2.115.555 4.181 1.611 6.001L0 24l6.146-1.611A11.937 11.937 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
                        WhatsApp
                    </a>
                </div>

                {{-- Stats Grid --}}
                <div class="hero-cp-stats">
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">15<span class="plus">+</span></div>
                        <div class="hero-cp-stat-label">Years Experience</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">4.9<span class="star">★</span></div>
                        <div class="hero-cp-stat-label">500+ Google Reviews</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">25K<span class="plus">+</span></div>
                        <div class="hero-cp-stat-label">Businesses Served</div>
                    </div>
                    <div class="hero-cp-stat">
                        <div class="hero-cp-stat-num tabular">4<span class="plus" style="color:var(--orange);">+</span></div>
                        <div class="hero-cp-stat-label">Offices · Pan-India</div>
                    </div>
                </div>
            </div>

            {{-- RIGHT COLUMN --}}
            <div class="author-card">
                <div class="author-photo-wrap">
                    <span class="author-photo-badge">Founder</span>
                    <picture>
                        <source type="image/webp" srcset="{{ asset('images/ca-sundram-gupta.webp') }}">
                        <img
                            src="{{ asset('images/ca-sundram-gupta.jpg') }}"
                            alt="CA Sundram Gupta — Founder & Managing Partner, Patron Accounting LLP"
                            width="1122"
                            height="1402"
                            loading="eager"
                            fetchpriority="high"
                            decoding="async">
                    </picture>
                </div>
                <h2 class="author-card-name">CA Sundram Gupta</h2>
                <p class="author-card-role">Chartered Accountant (ICAI) · DipIFR (ACCA, UK)</p>

                <div class="author-card-meta">
                    <div class="acm-row"><span class="acm-row-lab">Based In</span><span class="acm-row-val">Pune · Pan-India</span></div>
                    <div class="acm-row"><span class="acm-row-lab">Languages</span><span class="acm-row-val">English · Hindi · Punjabi</span></div>
                    <div class="acm-row"><span class="acm-row-lab">Firm Founded</span><span class="acm-row-val mono">JUL 2019</span></div>
                    <div class="acm-row"><span class="acm-row-lab">Practice Areas</span><span class="acm-row-val">Tax · Audit · GST · CFO</span></div>
                </div>

                <div class="author-card-social">
                    <a class="acs-link is-linkedin" href="https://www.linkedin.com/in/sundram-gupta-0a266117" target="_blank" rel="noopener" aria-label="CA Sundram Gupta on LinkedIn">
                        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.063 2.063 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                    <a class="acs-link" href="mailto:sg@patronaccounting.com" aria-label="Email CA Sundram Gupta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
                        Email
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============ TOC NAV ============ --}}
<nav class="toc-strip" aria-label="On this page">
    <div class="toc-strip-inner">
        <a class="toc-link" href="#about"><span class="toc-link-num">01</span><span class="toc-link-label">About</span></a>
        <a class="toc-link" href="#expertise"><span class="toc-link-num">02</span><span class="toc-link-label">Expertise</span></a>
        <a class="toc-link" href="#philosophy"><span class="toc-link-num">03</span><span class="toc-link-label">Philosophy</span></a>
        <a class="toc-link" href="#featured"><span class="toc-link-num">04</span><span class="toc-link-label">Featured Reads</span></a>
        <a class="toc-link" href="#articles"><span class="toc-link-num">05</span><span class="toc-link-label">Latest Articles</span></a>
        <a class="toc-link" href="#topics"><span class="toc-link-num">06</span><span class="toc-link-label">Topics</span></a>
        <a class="toc-link" href="#work"><span class="toc-link-num">07</span><span class="toc-link-label">Work With Sundram</span></a>
    </div>
</nav>

{{-- ============ ABOUT ============ --}}
<section class="sec-cp" id="about">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">01</span> About the Author</span>
                <h2 class="sec-h2">Practitioner-led writing,<br><span class="accent-line">not textbook theory.</span></h2>
                <p class="sec-sub">15+ years of corporate finance and CA practice condensed into articles you can act on.</p>
            </div>
            <span class="sec-counter">Founder · Patron Accounting LLP</span>
        </div>

        <div class="about-grid">
            <div class="about-side">
                <div style="background:var(--bg-soft);border:1px solid var(--line);border-radius:10px;padding:22px 24px;">
                    <div style="font-size:11px;font-weight:700;color:var(--orange);text-transform:uppercase;letter-spacing:0.06em;margin-bottom:10px;">Career Path</div>
                    <ul style="list-style:none;padding:0;margin:0;display:grid;gap:14px;">
                        <li><div style="font-size:11px;color:var(--grey-3);font-family:'JetBrains Mono',monospace;font-weight:500;">2019 — PRESENT</div><div style="font-size:14px;font-weight:600;color:var(--navy-deep);margin-top:2px;">Founder · Patron Accounting LLP</div></li>
                        <li><div style="font-size:11px;color:var(--grey-3);font-family:'JetBrains Mono',monospace;font-weight:500;">2015 — 2019</div><div style="font-size:14px;font-weight:600;color:var(--navy-deep);margin-top:2px;">Finance Manager · Bajaj Allianz Life Insurance</div></li>
                        <li><div style="font-size:11px;color:var(--grey-3);font-family:'JetBrains Mono',monospace;font-weight:500;">2011 — 2015</div><div style="font-size:14px;font-weight:600;color:var(--navy-deep);margin-top:2px;">Equity Research Analyst · CRISIL Limited</div></li>
                        <li><div style="font-size:11px;color:var(--grey-3);font-family:'JetBrains Mono',monospace;font-weight:500;">2009 — 2011</div><div style="font-size:14px;font-weight:600;color:var(--navy-deep);margin-top:2px;">Asst. Portfolio Manager · Jaypee Capital</div></li>
                    </ul>
                </div>
            </div>
            <div class="about-body">
                <p>Founder &amp; Managing Partner of <a href="{{ url('/') }}">Patron Accounting LLP</a>, a Chartered Accountant (ICAI) with a Diploma in International Financial Reporting Standards (DipIFR) from ACCA, UK. Sundram brings <strong>15+ years</strong> of experience across equity research at <a href="https://www.crisil.com" target="_blank" rel="noopener">CRISIL</a>, finance leadership at <a href="https://www.bajajallianzlife.com" target="_blank" rel="noopener">Bajaj Allianz Life Insurance</a>, and full-service CA practice.</p>
                <p>Since founding Patron in <strong>July 2019</strong>, the firm has served <strong>25,000+ businesses</strong> from offices in Pune, Mumbai, Delhi and Gurugram &mdash; with pan-India service delivery covering Bengaluru, Hyderabad, Chennai, Kolkata, Ahmedabad and Tier 2/3 cities. Patron is rated <strong>4.9★ on Google</strong> across 500+ reviews. Sundram writes here on GST, income tax, audit, ROC compliance, payroll and SME advisory for Indian business owners &mdash; guidance shaped by 25,000+ client engagements and a decade of corporate finance practice before that.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ CTA STRIP 1 ============ --}}
<div class="cta-strip-cp">
    <div class="cta-strip-cp-inner">
        <div class="cta-strip-text">
            <strong>Need a real CA, not a chatbot?</strong> Sundram &amp; the Patron team handle 25,000+ businesses across India.
        </div>
        <div class="cta-strip-actions">
            <a class="btn-strip is-orange" href="tel:+919459456700">Call Now</a>
            <a class="btn-strip is-wa" href="https://wa.me/919459456700?text=Hi%20CA%20Sundram%2C%20I%20would%20like%20to%20discuss%20my%20business%20requirements." rel="noopener" target="_blank">WhatsApp</a>
        </div>
    </div>
</div>

{{-- ============ EXPERTISE ============ --}}
<section class="sec-cp is-soft" id="expertise">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">02</span> Areas of Practice</span>
                <h2 class="sec-h2">Six pillars of <span class="accent-line">day-to-day work.</span></h2>
                <p class="sec-sub">Practice areas Sundram leads on at Patron &mdash; and the topics he writes on here. Every article is grounded in current client work, not last decade's circulars.</p>
            </div>
            <span class="sec-counter">06 Practice Areas</span>
        </div>

        <div class="grid-cp">
            <div class="tile-cp">
                <span class="tile-num">i.</span>
                <h3 class="tile-cp-title">Statutory &amp; Tax Audit</h3>
                <p class="tile-cp-blurb">Audit planning, execution and reporting under Companies Act, 2013 and Income Tax Act, 1961. Tax audit u/s 44AB, statutory audit and management reporting.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Audit</span><span class="arrow">→</span></div>
            </div>
            <div class="tile-cp">
                <span class="tile-num">ii.</span>
                <h3 class="tile-cp-title">Income Tax Advisory</h3>
                <p class="tile-cp-blurb">ITR filing across forms 1 to 7, TDS/TCS compliance, scrutiny representation, tax planning and structuring for individuals, businesses and NRIs.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Income Tax</span><span class="arrow">→</span></div>
            </div>
            <div class="tile-cp">
                <span class="tile-num">iii.</span>
                <h3 class="tile-cp-title">GST Strategy &amp; Returns</h3>
                <p class="tile-cp-blurb">GST registration, return filing (GSTR-1, 3B, 9, 9C), refund claims, ITC reconciliation, notice replies, advisory for e-commerce and exports.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">GST</span><span class="arrow">→</span></div>
            </div>
            <div class="tile-cp">
                <span class="tile-num">iv.</span>
                <h3 class="tile-cp-title">Company Law &amp; ROC</h3>
                <p class="tile-cp-blurb">Company &amp; LLP incorporation, ROC compliance (AOC-4, MGT-7, DIR-3 KYC), director changes, share capital changes, restructuring and conversions.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">ROC</span><span class="arrow">→</span></div>
            </div>
            <div class="tile-cp">
                <span class="tile-num">v.</span>
                <h3 class="tile-cp-title">Payroll &amp; Compliance</h3>
                <p class="tile-cp-blurb">End-to-end payroll processing, PF/ESI/PT compliance, Form 16, salary structure design, the new Labour Codes and EOR services for India entities.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Payroll</span><span class="arrow">→</span></div>
            </div>
            <div class="tile-cp">
                <span class="tile-num">vi.</span>
                <h3 class="tile-cp-title">Virtual CFO for SMEs</h3>
                <p class="tile-cp-blurb">Cash flow management, MIS dashboards, budgeting, financial modelling, investor readiness and strategic finance advisory for businesses scaling past their first crore.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Virtual CFO</span><span class="arrow">→</span></div>
            </div>
        </div>
    </div>
</section>

{{-- ============ PHILOSOPHY ============ --}}
<section class="sec-cp is-navy" id="philosophy">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">03</span> The Author's Philosophy</span>
                <h2 class="sec-h2">Why this <span class="accent-line">page exists.</span></h2>
                <p class="sec-sub">A short statement on what every article is written to do &mdash; and why it isn't written for clicks.</p>
            </div>
            <span class="sec-counter">In Sundram's words</span>
        </div>

        <div class="phil-grid">
            <div class="phil-side">
                <div class="phil-pull">
                    "A good CA's job isn't to file this year's return. It's to help a business survive the next ten."
                </div>
                <div class="phil-attribution">
                    <div class="phil-attribution-name">CA Sundram Gupta</div>
                    <div class="phil-attribution-role">Founder &amp; Managing Partner<br>Patron Accounting LLP</div>
                </div>
            </div>
            <div class="phil-body">
                <p>A good CA's job isn't to file this year's return. It's to help a business survive the next ten years. That means thinking through policy changes, GST audits, payroll scale-ups, funding rounds, and the messy growth decisions in between.</p>
                <p>Everything I write here comes from real client work. Books we've cleaned up after years of neglect. GST notices we've answered. ITRs we've defended in scrutiny. ROC filings we've rescued at the eleventh hour. Payroll systems we've rebuilt from broken spreadsheets. CFO dashboards we've stood up for businesses scaling past their first crore.</p>
                <p>I try to write the way I'd want a CA to explain things to my own family. In plain language. With the answer up front. And without the bill in mind.</p>
                <p>The businesses that last in India aren't the ones with the cleverest tax tricks. They're the ones with clean books, on-time compliance, accurate payroll, and a CA who actually picks up the phone. That's the standard Patron was built on, and it's the standard every article on this page is written to.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ FEATURED READS ============ --}}
<section class="sec-cp" id="featured">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">04</span> Featured Reads</span>
                <h2 class="sec-h2">Six articles, <span class="accent-line">one per pillar.</span></h2>
                <p class="sec-sub">Hand-picked starting points across the six practice areas &mdash; each grounded in current Patron client work.</p>
            </div>
            <span class="sec-counter">06 Featured</span>
        </div>

        <div class="grid-cp">

            <a class="tile-cp is-read" href="{{ url('/blog/accounting-startups-india-day-one-to-first-audit') }}">
                <span class="tile-num">i.</span>
                <h3 class="tile-cp-title">Accounting for Startups in India: Day One to First Audit</h3>
                <p class="tile-cp-blurb">A practitioner's roadmap from incorporation books to your first statutory audit &mdash; without the textbook fluff.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Accounting</span><span class="arrow">Read →</span></div>
            </a>

            <a class="tile-cp is-read" href="{{ url('/blog/gst-audit-mandatory-who-must-comply-who-is-exempt') }}">
                <span class="tile-num">ii.</span>
                <h3 class="tile-cp-title">GST Audit: Who Must Comply &amp; Who is Exempt</h3>
                <p class="tile-cp-blurb">Turnover thresholds, GSTR-9C applicability, exemptions and red flags decoded for SMEs.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">GST</span><span class="arrow">Read →</span></div>
            </a>

            <a class="tile-cp is-read" href="{{ url('/blog/income-tax-notice-after-itr-filing') }}">
                <span class="tile-num">iii.</span>
                <h3 class="tile-cp-title">Income Tax Notice After ITR Filing: What to Do</h3>
                <p class="tile-cp-blurb">Section 143(1), 139(9), 142(1), 148 &mdash; the playbook for every common notice type.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Income Tax</span><span class="arrow">Read →</span></div>
            </a>

            <a class="tile-cp is-read" href="{{ url('/blog/annual-compliance-requirements-for-companies-in-india') }}">
                <span class="tile-num">iv.</span>
                <h3 class="tile-cp-title">Annual Compliance Requirements for Companies in India</h3>
                <p class="tile-cp-blurb">AOC-4, MGT-7, DIR-3 KYC, board meetings &mdash; the full ROC calendar in one place.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">ROC</span><span class="arrow">Read →</span></div>
            </a>

            <a class="tile-cp is-read" href="{{ url('/blog/payroll-outsourcing-vs-in-house-sme-guide-india-2026') }}">
                <span class="tile-num">v.</span>
                <h3 class="tile-cp-title">Payroll Outsourcing vs In-House: SME Guide India 2026</h3>
                <p class="tile-cp-blurb">Cost, control, compliance risk &mdash; an honest comparison for growing SMEs.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Payroll</span><span class="arrow">Read →</span></div>
            </a>

            <a class="tile-cp is-read" href="{{ url('/blog/mis-reports-small-business-what-ca-should-deliver') }}">
                <span class="tile-num">vi.</span>
                <h3 class="tile-cp-title">MIS Reports for Small Business: What a CA Should Deliver</h3>
                <p class="tile-cp-blurb">The dashboards every founder should expect from their finance partner &mdash; with examples.</p>
                <div class="tile-cp-foot"><span class="pillar-tag">Virtual CFO</span><span class="arrow">Read →</span></div>
            </a>

        </div>
    </div>
</section>

{{-- ============ LATEST ARTICLES (LARAVEL DYNAMIC) ============ --}}
<section class="sec-cp is-soft" id="articles">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">05</span> Latest from the Author</span>
                <h2 class="sec-h2">All articles by <span class="accent-line">CA Sundram Gupta.</span></h2>
                <p class="sec-sub">Auto-updated as new pieces are published. For the complete archive, visit the <a href="{{ route('frontend.posts.index') }}" style="color:var(--orange);border-bottom:1px solid var(--orange);">Patron blog</a>.</p>
            </div>
            <span class="sec-counter">Auto-Updated</span>
        </div>

        {{-- AUTHOR_POSTS_LOOP_START --}}
        <div class="grid-cp">
            @forelse($author->posts()->where('status', 'published')->latest('published_at')->take(9)->get() as $post)
                @php $cat = $post->categories->first(); @endphp
                <a class="tile-cp is-article" href="{{ route('frontend.posts.blog', $post->slug) }}">
                    <div class="article-thumb">
                        @if($post->featured_image)
                            <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" loading="lazy">
                        @else
                            <span class="article-thumb-fallback">Patron · Article</span>
                        @endif
                    </div>
                    <div class="article-body">
                        <span class="tile-num">{{ $cat ? strtoupper($cat->name) : 'GUIDE' }}</span>
                        <h3 class="tile-cp-title">{{ $post->title }}</h3>
                        <div class="tile-cp-foot">
                            <span style="color:var(--grey-3);font-family:'JetBrains Mono',monospace;font-size:11px;">{{ optional($post->published_at)->format('d M Y') }}</span>
                            <span class="arrow">Read →</span>
                        </div>
                    </div>
                </a>
            @empty
                <p style="grid-column: 1 / -1; text-align: center; padding: 40px; color: var(--grey-3);">No articles published yet.</p>
            @endforelse
        </div>
        {{-- AUTHOR_POSTS_LOOP_END --}}

        <div style="text-align:center;margin-top:36px;">
            <a class="btn-cp-secondary" href="{{ route('frontend.posts.index') }}">View Complete Patron Blog Archive</a>
        </div>
    </div>
</section>

{{-- ============ TOPICS ============ --}}
<section class="sec-cp" id="topics">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">06</span> Topics Covered</span>
                <h2 class="sec-h2">What Sundram <span class="accent-line">writes about.</span></h2>
                <p class="sec-sub">Click any topic to filter the Patron blog archive.</p>
            </div>
            <span class="sec-counter">20 Topics</span>
        </div>

        <div class="topic-grid">
            <a class="topic-tag" href="{{ url('/blog?topic=gst') }}">GST <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=income-tax') }}">Income Tax <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=itr-filing') }}">ITR Filing <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=tax-audit') }}">Tax Audit <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=statutory-audit') }}">Statutory Audit <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=roc-compliance') }}">ROC Compliance <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=company-law') }}">Company Law <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=llp') }}">LLP <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=payroll') }}">Payroll <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=labour-codes') }}">Labour Codes <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=accounting') }}">Accounting <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=virtual-cfo') }}">Virtual CFO <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=mis-reports') }}">MIS Reports <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=cash-flow') }}">Cash Flow <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=tds') }}">TDS <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=nri-tax') }}">NRI Taxation <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=startup') }}">Startup Compliance <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=sme') }}">SME Advisory <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=ifrs') }}">IFRS <span class="ct">/</span></a>
            <a class="topic-tag" href="{{ url('/blog?topic=gstat') }}">GSTAT &amp; Litigation <span class="ct">/</span></a>
        </div>
    </div>
</section>

{{-- ============ CTA STRIP 2 (Work With Sundram) ============ --}}
<section class="sec-cp is-navy" id="work">
    <div class="container-cp">
        <div class="sec-head-cp">
            <div>
                <span class="sec-tag"><span class="tag-num">07</span> Work With CA Sundram</span>
                <h2 class="sec-h2">Beyond the writing &mdash; <span class="accent-line">real engagement.</span></h2>
                <p class="sec-sub">Hands-on tax, audit, GST, payroll, ROC and Virtual CFO support for Indian businesses. A message away.</p>
            </div>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:8px;">
            <a href="https://wa.me/919459456700?text=Hi%20CA%20Sundram%2C%20I%20would%20like%20to%20discuss%20my%20business%20requirements%20with%20you." target="_blank" rel="noopener" style="display:flex;flex-direction:column;align-items:flex-start;gap:14px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);padding:24px;border-radius:12px;color:#fff !important;text-decoration:none;transition:all 0.15s;">
                <div style="width:44px;height:44px;background:var(--green-wa);border-radius:8px;display:flex;align-items:center;justify-content:center;">
                    <svg viewBox="0 0 24 24" fill="#fff" style="width:22px;height:22px;"><path d="M12 0C5.373 0 0 5.373 0 12c0 2.115.555 4.181 1.611 6.001L0 24l6.146-1.611A11.937 11.937 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
                </div>
                <div>
                    <div style="font-size:11px;color:rgba(255,255,255,0.6);font-weight:600;text-transform:uppercase;letter-spacing:0.06em;margin-bottom:6px;">Fastest Response</div>
                    <div style="font-size:18px;font-weight:700;color:#fff;margin-bottom:4px;">WhatsApp Sundram</div>
                    <div style="font-size:13px;color:rgba(255,255,255,0.7);font-family:'JetBrains Mono',monospace;">+91 945 945 6700</div>
                </div>
            </a>
            <a href="tel:+919459456700" style="display:flex;flex-direction:column;align-items:flex-start;gap:14px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);padding:24px;border-radius:12px;color:#fff !important;text-decoration:none;transition:all 0.15s;">
                <div style="width:44px;height:44px;background:var(--orange);border-radius:8px;display:flex;align-items:center;justify-content:center;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" style="width:22px;height:22px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                    <div style="font-size:11px;color:rgba(255,255,255,0.6);font-weight:600;text-transform:uppercase;letter-spacing:0.06em;margin-bottom:6px;">Phone Consultation</div>
                    <div style="font-size:18px;font-weight:700;color:#fff;margin-bottom:4px;">Call the Office</div>
                    <div style="font-size:13px;color:rgba(255,255,255,0.7);font-family:'JetBrains Mono',monospace;">Mon-Fri 9am-7pm</div>
                </div>
            </a>
            <a href="mailto:sg@patronaccounting.com" style="display:flex;flex-direction:column;align-items:flex-start;gap:14px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);padding:24px;border-radius:12px;color:#fff !important;text-decoration:none;transition:all 0.15s;">
                <div style="width:44px;height:44px;background:var(--navy-soft);border-radius:8px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(255,255,255,0.2);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" style="width:22px;height:22px;"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
                </div>
                <div>
                    <div style="font-size:11px;color:rgba(255,255,255,0.6);font-weight:600;text-transform:uppercase;letter-spacing:0.06em;margin-bottom:6px;">Detailed Brief</div>
                    <div style="font-size:18px;font-weight:700;color:#fff;margin-bottom:4px;">Email Sundram</div>
                    <div style="font-size:13px;color:rgba(255,255,255,0.7);font-family:'JetBrains Mono',monospace;">sg@patronaccounting.com</div>
                </div>
            </a>
        </div>
    </div>
</section>

</div>{{-- /.authorhub-page --}}

@endsection

@push('scripts')
<script>
    // Last updated date in status bar
    (function() {
        var d = new Date();
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        var el = document.getElementById('lastUpdated');
        if (el) el.textContent = d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
    })();
</script>
@endpush