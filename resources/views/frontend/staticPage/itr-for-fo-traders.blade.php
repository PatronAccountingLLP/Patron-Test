@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>F and O Trader ITR: ITR-3 + Audit</title>
    <meta name="description" content="F and O traders file ITR-3 with PGBP income under Section 43(5). Audit above Rs 10 crore turnover. 8-year loss carry. Starts at Rs 2,499.">
    <link rel="canonical" href="/itr-for-fo-traders">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="F and O Trader ITR 2026: ITR-3 + Audit | Patron Accounting">
    <meta property="og:description" content="F and O traders file ITR-3 with PGBP income under Section 43(5). Audit above Rs 10 crore turnover. 8-year loss carry. Starts at Rs 2,499.">
    <meta property="og:url" content="/itr-for-fo-traders">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-fo-traders-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="F and O Trader ITR 2026: ITR-3 + Audit | Patron Accounting">
    <meta name="twitter:description" content="F and O traders file ITR-3 with PGBP income under Section 43(5). Audit above Rs 10 crore turnover. 8-year loss carry. Starts at Rs 2,499.">
    <meta name="twitter:image" content="/images/itr-for-fo-traders-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/itr-for-fo-traders#breadcrumb",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "/services"},
        {"@type": "ListItem", "position": 3, "name": "ITR Filing", "item": "/itr-filing"},
        {"@type": "ListItem", "position": 4, "name": "ITR for F&O Traders", "item": "/itr-for-fo-traders"}
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/itr-for-fo-traders#faq",
      "mainEntity": [
        {"@type": "Question", "name": "Is F&O trading income speculative or non-speculative?", "acceptedAnswer": {"@type": "Answer", "text": "F&O trading on a recognised stock exchange is non-speculative business income under Section 43(5)(d) of the Income Tax Act 1961 (Section 66 of the Income Tax Act 2025 from 1 April 2026). It is taxed at slab rates and reported in ITR-3 under Schedule BP. Intraday equity trading is speculative under Section 43(5) and follows Section 73 with a 4-year carry forward."}},
        {"@type": "Question", "name": "Which ITR form should an F&O trader file - ITR-3 or ITR-4?", "acceptedAnswer": {"@type": "Answer", "text": "ITR-3 is the correct form for almost every F&O trader. ITR-4 is only for traders who opt for Section 44AD presumptive (6% on digital turnover) with turnover up to Rs 3 crore and 5-year lock-in. ITR-4 cannot declare losses. ITR-1 and ITR-2 are not allowed for F&O income and trigger Section 139(9) defective return notices."}},
        {"@type": "Question", "name": "How is F&O turnover calculated for tax audit?", "acceptedAnswer": {"@type": "Answer", "text": "Turnover is the sum of absolute trade-wise profits and losses. For a trade with Rs 15,000 profit and another with Rs 8,000 loss, turnover is Rs 23,000. The ICAI Guidance Note 8th Edition dated 14 August 2022 removed the earlier rule of adding option sale premium. Most online calculators still use the pre-2022 formula and overstate options turnover by 40 to 60 percent."}},
        {"@type": "Question", "name": "When is tax audit mandatory for F&O traders?", "acceptedAnswer": {"@type": "Answer", "text": "Tax audit under Section 44AB is mandatory when F&O turnover exceeds Rs 10 crore (95% or more digital - applies to all exchange-traded F&O). Audit also triggers under Section 44AD(4) when a trader opts out of presumptive used in any of 5 preceding years and current profit is below 6 percent. Failure attracts Section 271B at 0.5% of turnover or Rs 1.5 lakh."}},
        {"@type": "Question", "name": "Can F&O losses be set off against salary income?", "acceptedAnswer": {"@type": "Answer", "text": "No. Section 71 prohibits set-off of business losses against salary. F&O loss CAN be set off in the same year against any other income head except salary - rental income, interest, capital gains, and other business income are eligible. Unutilised loss carries forward 8 years under Section 72 against future business income. Filing ITR before 31 August 2026 due date is mandatory for carry forward."}},
        {"@type": "Question", "name": "How long can F&O and intraday losses be carried forward?", "acceptedAnswer": {"@type": "Answer", "text": "F&O losses (non-speculative) carry forward for 8 assessment years under Section 72 against future business income. Intraday equity losses (speculative) carry forward for 4 assessment years under Section 73 against future speculative income only. Filing ITR-3 before the Section 139(1) due date is mandatory in both cases - belated returns lose the carry forward right per Section 80."}},
        {"@type": "Question", "name": "What is the Section 44AD trap for F&O traders?", "acceptedAnswer": {"@type": "Answer", "text": "Section 44AD allows traders with turnover up to Rs 3 crore to declare 6% (digital) of turnover as deemed income and avoid books and audit. Section 44AD(4) requires 5-year continuity once opted in. Opting out and declaring loss or profit below 6 percent triggers mandatory tax audit under Section 44AB(e). Most retail F&O traders should avoid Section 44AD entirely - the lock-in eliminates the ability to declare real losses."}},
        {"@type": "Question", "name": "How does the STT hike from 1 April 2026 affect F&O traders?", "acceptedAnswer": {"@type": "Answer", "text": "Budget 2026 increased STT effective 1 April 2026. Futures STT rose from 0.02% to 0.05% on sell side. Options premium STT rose from 0.10% to 0.15%. Options exercise STT rose from 0.125% to 0.15%. STT remains a deductible business expense under PGBP. Break-even per futures trade has effectively doubled - a Nifty futures contract that cost Rs 325 STT pre-Budget now costs Rs 810."}}
      ]
    },
    {
      "@type": "Service",
      "@id": "/itr-for-fo-traders#service",
      "name": "ITR for F&O Traders",
      "alternateName": ["Futures and Options ITR Filing", "F&O Trader Tax Return Filing", "Stock Market Trader ITR Filing"],
      "url": "/itr-for-fo-traders",
      "description": "End-to-end ITR-3 filing for F&O and intraday equity traders in India. Includes ICAI 8th Edition turnover computation, Schedule BP split between speculative and non-speculative business income, Section 44AB tax audit (Form 3CB/3CD) where applicable, multi-broker AIS reconciliation, and Section 72 / Section 73 loss carry forward for AY 2026-27.",
      "serviceType": "Tax Return Filing",
      "category": "Direct Tax Compliance",
      "provider": {"@id": "/#organization"},
      "areaServed": {"@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India"},
      "audience": {"@type": "Audience", "audienceType": "F&O traders, intraday traders, salaried traders with derivatives income, full-time stock market professionals, NRI traders on Indian exchanges, partnership trading firms"},
      "about": [
        {"@type": "Thing", "name": "Futures and Options Trading", "sameAs": "https://en.wikipedia.org/wiki/Derivative_(finance)"},
        {"@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
        {"@type": "Thing", "name": "Securities Transaction Tax", "sameAs": "https://en.wikipedia.org/wiki/Securities_Transaction_Tax"}
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "F&O Trader ITR Plans",
        "itemListElement": [
          {"@type": "Offer", "name": "ITR-3 Non-Audit (Single Broker)", "price": "2499", "priceCurrency": "INR", "url": "/itr-for-fo-traders", "availability": "https://schema.org/InStock"},
          {"@type": "Offer", "name": "ITR-3 Multi-Source (F&O + Intraday + Salary)", "price": "3999", "priceCurrency": "INR", "url": "/itr-for-fo-traders", "availability": "https://schema.org/InStock"},
          {"@type": "Offer", "name": "ITR-3 with Section 44AB Tax Audit", "price": "14999", "priceCurrency": "INR", "url": "/itr-for-fo-traders", "availability": "https://schema.org/InStock"}
        ]
      }
    }
  ]
}
</script>
@endsection

@section('content')
<style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }

        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
        /* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        /* Section 8 / primary entity highlight column in comparison tables */
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        /* Badge pills for service status cells */
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }

        .private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }

        .check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }

        .btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }

        .btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        .google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before {
            content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px;
        }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label {
            display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700;
            color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;
        }
        .form-input {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Select */
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Phone Group + Country Dropdown */
        .phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        .country-code-dropdown {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            padding: 13px 10px 13px 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s;
            box-sizing: border-box;
        }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

        /* Country Dropdown List */
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }

        /* Phone Input Override */
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        /* Form Footer */
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* Error States */
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

        /* Success State */
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
            .country-dropdown-list { width: 260px; }
            .form-footer { flex-wrap: wrap; gap: 10px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
        .toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
        .toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }

        .section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
        .illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* Section Eyebrow */
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }

        /* Steps Section */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
        .step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }

        /* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
        .process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .process-screenshot-details summary:hover { color: var(--orange-dark); }
        .process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
        .process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }

        /* Why Choose Section */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px; padding: 28px 32px; background: var(--blue);
            border-radius: var(--radius-lg); display: flex;
            align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 48px; height: 48px; background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;
        }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: #FFFFFF !important; margin-bottom: 2px; margin-top: 0; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta svg { width: 16px; height: 16px; }        @media (max-width: 640px) {        }

        /* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
        .pa-city-block { }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) {
            .pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .pa-city-grid  { grid-template-columns: 1fr; }
            .pa-cross-grid { grid-template-columns: 1fr; }
        }
        .testimonials-section {
            padding: 24px 32px 0 32px;
            background: var(--white);
            overflow: hidden;
        }
        .testimonials-section .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .testimonials-section .section-header {
            text-align: center;
            margin-bottom: 16px;
        }
        .testimonials-section .section-header h2 {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .testimonials-section .section-header p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Slick overrides */
        .testimonial-slider .slick-slide { padding: 0 10px; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider.slick-initialized { margin-bottom: 0; }

        /* Video Testimonial Card */
        .testi-video-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .testi-video-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-video-area {
            position: relative;
            height: 230px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }
        .testi-video-area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .testi-play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.25);
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .testi-play-btn {
            width: 56px;
            height: 56px;
            background: rgba(232,113,44,0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .testi-play-btn svg { width: 22px; height: 22px; color: white; margin-left: 3px; }
        .testi-star-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            display: flex;
            gap: 2px;
        }
        .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-footer {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .testi-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
            overflow: hidden;
            background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        /* Loading state */
        .testi-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 0;
            color: var(--text-muted);
            font-size: 14px;
        }
        .testi-loading .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid var(--gray-200);
            border-top-color: var(--orange);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            .testimonials-section { padding: 16px 20px 0 20px; }
        }
        @media (max-width: 576px) {

        }

        

        @media (max-width: 1024px) {
        }
        @media (max-width: 768px) {

        }
        @media (max-width: 480px) {


        }
        @media (max-width: 768px) {

        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column { grid-template-columns: 1fr; gap: 40px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-container { gap: 32px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
        }
        @media (max-width: 900px) {
            .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
            .step-card:nth-child(even) { direction: ltr; }
            .step-visual { order: -1; }
        }
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .hero-cta { flex-direction: column; }
            .btn-video, .btn-sample { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .stat-item { width: 100%; }
            .features-grid { grid-template-columns: 1fr; gap: 16px; }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .content-text { font-size: 14px; }
            .accordion-body { text-align: left; }
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .expert-attribution-box { padding: 10px 14px; }
            .expert-attribution-box .eab-title { font-size: 12px; }
            .expert-attribution-box .eab-meta { font-size: 11px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        /* Smooth scroll offset */
        .content-section[id] { scroll-margin-top: 80px; }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        /* Trust Badge Descriptions */
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

        /* City Interlinking Grid */
        @media (max-width: 768px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }
        }

        /* ============================================
           STICKY WHATSAPP BAR
           ============================================ */
        .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0F6E56;
        z-index: 9999;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
        transition: transform 0.35s ease;
    }
    .wa-sticky-bar.hidden { transform: translateY(100%); }
    .wa-sticky-bar-content {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 1320px;
        width: 100%;
        justify-content: center;
    }
    .wa-sticky-bar-icon {
        width: 36px; height: 36px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,0.2); border-radius: 50%;
    }
    .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
    .wa-sticky-bar-text {
        font-family: 'Barlow', sans-serif;
        font-size: 15px; color: #fff; font-weight: 500;
    }
    .wa-sticky-bar-text strong { font-weight: 700; }
    .wa-sticky-bar-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 22px; background: #fff; color: #0F6E56;
        font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
        border: none; border-radius: 50px; cursor: pointer;
        text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
    }
    .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .wa-sticky-bar-close {
        background: none; border: none; cursor: pointer;
        color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
        padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
        font-family: 'Barlow', sans-serif; font-weight: 300;
    }
    .wa-sticky-bar-close:hover { color: #fff; }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
        .wa-sticky-bar-text { font-size: 13px; }
        .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
        .wa-sticky-bar-icon { width: 30px; height: 30px; }
        .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar-text { display: none; }
        .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
        .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
        .wa-sticky-bar-btn span { display: none; }
    }

/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}

/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}
</style>
<main>



<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        ITR for F&amp;O Traders in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Broker P&amp;L (Zerodha, Groww, Angel One), Form 26AS, AIS, ledger, bank statements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 2,499 for ITR-3 without audit and Rs 14,999 with Section 44AB tax audit</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any individual or HUF with F&amp;O turnover or intraday speculative income, salaried traders included</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 7 working days; 31 August 2026 for non-audit cases AY 2026-27</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20F%26O%20trader%20ITR%20filing." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for F&amp;O Traders'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        
            <div class="testimonial-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.17 17l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H6.5V8h6v6c0 1.66-1.34 3-3 3H7.17zm10 0l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H16.5V8h6v6c0 1.66-1.34 3-3 3h-2.33z"/></svg></div>
                <p class="testi-text">My options turnover from Zerodha showed Rs 14 crore - I thought audit was certain. Patron re-computed using the ICAI absolute method and the actual figure was Rs 4.2 crore. No audit. They also caught a Section 44AD opt-out from FY 2021-22.</p>
                <div class="testi-meta">
                    <div class="testi-avatar orange">V</div>
                    <div class="testi-meta-text"><strong>Vikram</strong><span>Full-time F&amp;O trader, Mumbai</span></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.17 17l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H6.5V8h6v6c0 1.66-1.34 3-3 3H7.17zm10 0l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H16.5V8h6v6c0 1.66-1.34 3-3 3h-2.33z"/></svg></div>
                <p class="testi-text">My CA filed ITR-1 last year and I got a defective return notice. Patron redid as ITR-3, separated my Rs 80,000 intraday loss into a speculative sub-business under Section 73, and preserved the carry forward. Refund came in 18 days.</p>
                <div class="testi-meta">
                    <div class="testi-avatar blue">A</div>
                    <div class="testi-meta-text"><strong>Anjali</strong><span>Salaried + intraday, Pune</span></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.17 17l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H6.5V8h6v6c0 1.66-1.34 3-3 3H7.17zm10 0l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H16.5V8h6v6c0 1.66-1.34 3-3 3h-2.33z"/></svg></div>
                <p class="testi-text">Six consecutive years of ITR-3 filings since FY 2019-20 - two Section 44AB audits, three Section 143(1) intimations resolved within 24 hours, one Section 270A penalty proceeding closed without addition. All eight-year carry-forwards preserved.</p>
                <div class="testi-meta">
                    <div class="testi-avatar green">R</div>
                    <div class="testi-meta-text"><strong>Rakesh</strong><span>Full-time prop trader, Pune</span></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.17 17l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H6.5V8h6v6c0 1.66-1.34 3-3 3H7.17zm10 0l3.16-3.16c.27-.27.36-.66.24-1.02-.13-.36-.45-.6-.83-.6H16.5V8h6v6c0 1.66-1.34 3-3 3h-2.33z"/></svg></div>
                <p class="testi-text">NRI on Indian exchanges. Patron set up the TRC route, applied India-USA DTAA, and filed ITR-3 with Schedule BP for my futures trading. They also flagged that I cannot use Section 44AD as a non-resident - saved a misclassification penalty.</p>
                <div class="testi-meta">
                    <div class="testi-avatar orange">N</div>
                    <div class="testi-meta-text"><strong>Neha</strong><span>NRI F&amp;O trader, Delhi NCR</span></div>
                </div>
            </div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Hear how F&amp;O traders use Patron to navigate ICAI turnover, Section 44AB audits, and Section 270A penalty defence.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#keyterms-section" class="toc-btn">Key Terms</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#process-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why a CA</a>
            <a href="#comparison-section" class="toc-btn">Compared</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQ</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">F&amp;O Trader ITR Overview - Section 43(5)(d) Non-Speculative Business Income</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for F&amp;O Traders Services at a Glance</strong></p>
                    <p>F&amp;O (Futures and Options) trading income is non-speculative business income under Section 43(5)(d) of the Income Tax Act 1961 (Section 66 of the Income Tax Act 2025 from 1 April 2026). Intraday equity trading is speculative business income under Section 43(5). Both are filed in ITR-3 (Schedule BP) at slab rates. Tax audit applies under Section 44AB if F&amp;O turnover exceeds Rs 10 crore. F&amp;O losses carry forward 8 years; intraday losses carry forward 4 years.</p>
                </div>
                <p>F&amp;O traders sit at one of the most misunderstood corners of the Indian Income Tax Act. Despite SEBI data showing over 91 percent of retail F&amp;O traders make losses, many file ITR-1 or ITR-2 - both wrong - and lose the right to carry forward those losses for the next eight years. Section 43(5)(d) of the Income Tax Act 1961 (re-numbered as Section 66 of the Income Tax Act 2025 effective 1 April 2026) classifies F&amp;O on a recognised stock exchange as non-speculative business income.</p>
                <p>Intraday equity trading, by contrast, is speculative business income under Section 43(5) and follows a separate four-year carry-forward window under Section 73. Patron Accounting has filed ITR-3 returns for over 1,200 traders across Pune, Mumbai, Delhi, and Gurugram since 2019 and our CA team navigates the Schedule BP, ICAI 8th Edition turnover method, and Section 44AB audit thresholds for AY 2026-27.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is ITR for F&amp;O Traders</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>ITR for F&amp;O traders means filing Income Tax Return-3 with Schedule BP reporting derivative trading as non-speculative business income under Section 43(5)(d), separately from intraday speculative business under Section 73, with appropriate tax audit and Section 72 loss carry forward.</strong></p>
<p>F&amp;O income is taxed at slab rates under "Profits and Gains from Business or Profession" (PGBP), not as capital gains. The trader records gross receipts, claims business expenses (brokerage, STT, internet, advisory subscriptions, depreciation), and reports net profit or loss. The same return separates intraday equity trades into a speculative sub-business with different set-off and carry-forward rules. ITR-1 and ITR-2 are not allowed - they trigger a Section 139(9) defective return notice within weeks of filing.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for F&amp;O Traders:</strong></p>
                    
                <ul>
                    <li><strong>Speculative vs Non-Speculative:</strong> Section 43(5) defines a speculative transaction as one settled otherwise than by actual delivery. Intraday equity (no delivery) is speculative. F&amp;O on recognised exchanges is excluded from "speculative" via Section 43(5)(d) - it is non-speculative business income even though delivery does not occur.</li>
                    <li><strong>Trading Turnover (ICAI 8th Edition, 14 August 2022):</strong> For F&amp;O futures: sum of absolute values of trade-wise profit and loss. For options: same absolute method - the older formula adding option sale premium to turnover was withdrawn by the ICAI Guidance Note dated 14 August 2022 (8th Edition). For intraday equity: sum of absolute profits and losses. Brokerage and STT are NOT part of turnover.</li>
                    <li><strong>Section 43(5)(d):</strong> The statutory hook that excludes F&amp;O on recognised stock exchanges from being treated as speculative. Without this clause, F&amp;O would have followed the four-year speculative carry forward of Section 73.</li>
                    <li><strong>Section 44AB Tax Audit:</strong> Mandatory CA audit if F&amp;O turnover exceeds Rs 10 crore (95 percent or more digital - applies to all F&amp;O since exchange-traded). Also triggered when a trader opts out of Section 44AD presumptive in any of the 5 preceding years and the current year shows loss or profit below 6 percent.</li>
                    <li><strong>Section 44AD(4) Trap:</strong> If you declared income under Section 44AD presumptive in any year, you must continue for 5 consecutive years. Opting out triggers mandatory audit if income is below the deemed 6 percent for the next 5 years - a trap that catches small F&amp;O traders who used 44AD once and now want to declare losses.</li>
                    <li><strong>Schedule BP and Schedule CFL:</strong> Schedule BP in ITR-3 reports business income split into speculative (intraday) and non-speculative (F&amp;O). Schedule CFL tracks losses carried forward year by year. Filing late breaks the carry-forward chain permanently.</li>
                </ul>


                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for F&amp;O Traders</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ITR-3 filed for over</span>
                        <strong>1,200+ traders since 2019</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Must File and Under Which Form</h2>
            <div class="content-text">
                
                
                <p>Any individual or HUF whose total income (before Chapter VI-A deductions) exceeds the basic exemption limit must file. For traders, the threshold is effectively any year you executed F&amp;O or intraday trades because losses must be filed to preserve carry forward rights even when total income is below exemption.</p>

                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Trader Profile</th><th>Recommended ITR</th><th>Reason</th></tr></thead>
                    <tbody>
                        <tr><td>F&amp;O only, salaried, turnover up to Rs 10 crore, profit</td><td>ITR-3</td><td>PGBP non-speculative; salary in Schedule S, F&amp;O in Schedule BP</td></tr>
                        <tr><td>F&amp;O only, loss declared, turnover up to Rs 10 crore</td><td>ITR-3 (no audit)</td><td>No audit needed if 95% digital and turnover under Rs 10 crore</td></tr>
                        <tr><td>F&amp;O turnover above Rs 10 crore</td><td>ITR-3 + Section 44AB audit</td><td>Audit mandatory irrespective of profit or loss</td></tr>
                        <tr><td>F&amp;O + intraday equity combined</td><td>ITR-3 with Schedule BP split</td><td>Speculative (intraday) and non-speculative (F&amp;O) reported as separate sub-businesses</td></tr>
                        <tr><td>F&amp;O + delivery-based equity capital gains</td><td>ITR-3 (Schedule BP + Schedule CG)</td><td>Two separate income heads in same ITR</td></tr>
                        <tr><td>Section 44AD presumptive declared (any of last 5 yrs)</td><td>ITR-4 if continuing OR ITR-3 + audit if opting out</td><td>Section 44AD(4) opt-out trap triggers audit</td></tr>
                        <tr><td>NRI trading F&amp;O on Indian exchanges</td><td>ITR-3</td><td>Non-residents file under regular provisions; no 44AD/44ADA available</td></tr>
                        <tr><td>Trader running a partnership firm (non-LLP)</td><td>ITR-5 (firm) + ITR-3 (partner share)</td><td>Firm files separately; partner gets share of profit and remuneration</td></tr>
                        <tr><td>Loss-only year with brought-forward F&amp;O loss</td><td>ITR-3 mandatory</td><td>Switching to ITR-1 breaks carry forward chain</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:24px;"><strong>Statutory due dates AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 August 2026</strong> - non-audit returns under Section 139(1)</li>
                    <li><strong>30 September 2026</strong> - tax audit report (Form 3CD)</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR</li>
                    <li><strong>31 December 2026</strong> - belated return under Section 139(4) with Section 234F fee Rs 5,000 (loss carry forward forfeited)</li>
                </ul>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">F&amp;O Trader ITR Services at Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Multi-Broker P&amp;L Consolidation</strong></td><td>Reconcile broker tax P&amp;L reports (Zerodha Console, Groww, Angel One, Upstox, ICICIdirect) into one consolidated trading account. Identify discrepancies between broker P&amp;L and AIS data before filing.</td></tr>
                        <tr><td><strong>ICAI 8th Edition Turnover Computation</strong></td><td>Compute trading turnover using the absolute profit method per the ICAI Guidance Note dated 14 August 2022. Many online calculators still use the pre-2022 formula that inflates options turnover by 40-60 percent and incorrectly triggers tax audit.</td></tr>
                        <tr><td><strong>ITR-3 Filing with Schedule BP Split</strong></td><td>Separate F&amp;O (non-speculative) and intraday (speculative) into distinct Schedule BP sub-businesses. Claim brokerage, STT, internet, advisory subscription, and depreciation as deductible business expenses.</td></tr>
                        <tr><td><strong>Tax Audit under Section 44AB</strong></td><td>Form 3CB / 3CD audit report by a practising CA when turnover crosses Rs 10 crore or in Section 44AD(4) opt-out cases. Audit report submitted by 30 September; ITR-3 filed by 31 October.</td></tr>
                        <tr><td><strong>Loss Set-Off and Carry Forward Memo</strong></td><td>Map current-year losses to permitted set-offs (F&amp;O loss against any income except salary; intraday loss only against speculative income), prepare Schedule CFL with year-wise tracking, preserve 8-year (F&amp;O) and 4-year (intraday) carry-forward rights.</td></tr>
                        <tr><td><strong>Section 143(1) and Defective Return Response</strong></td><td>Respond to Section 143(1) intimations and Section 139(9) defective return notices triggered by AIS-ITR mismatches. Most common issue: trader filed ITR-1 instead of ITR-3 - we redo within the 15-day response window.</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Patron Files Your F&amp;O ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Seven-step process executed by our CA team for traders across India</p>
        </header>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 01</span></div>
                    <h3 class="step-title">Document Collection</h3>
                    <p class="step-description">We share a trader-specific checklist - PAN, Aadhaar, broker tax P&amp;L from every active demat (Zerodha, Groww, Angel One), Form 26AS, AIS, TIS, bank statements covering trading account, advisory subscription invoices, internet bills, computer purchase invoice for depreciation.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">1</div>
                        <div class="step-label">Step 1 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 02</span></div>
                    <h3 class="step-title">Income Classification</h3>
                    <p class="step-description">We separate F&amp;O (non-speculative under Section 43(5)(d)) from intraday equity (speculative under Section 43(5)). If you also hold delivery-based equity, capital gains go into Schedule CG separately.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">2</div>
                        <div class="step-label">Step 2 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 03</span></div>
                    <h3 class="step-title">Turnover Computation per ICAI 8th Edition</h3>
                    <p class="step-description">Sum of absolute trade-wise profits and losses. No premium addition for options post 14 August 2022. Cross-verify against broker turnover statement (most brokers have updated their reports).</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">3</div>
                        <div class="step-label">Step 3 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 04</span></div>
                    <h3 class="step-title">Tax Audit Decision</h3>
                    <p class="step-description">Section 44AB applies if turnover exceeds Rs 10 crore (95 percent digital - default for F&amp;O), or if the trader is caught in the Section 44AD(4) opt-out trap. We compute both scenarios and flag audit applicability before starting books prep.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">4</div>
                        <div class="step-label">Step 4 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 05</span></div>
                    <h3 class="step-title">Books of Accounts under Section 44AA</h3>
                    <p class="step-description">Mandatory for individual or HUF if income exceeds Rs 2.5 lakh or turnover exceeds Rs 25 lakh in any of the 3 preceding years. We prepare cash book, ledger, profit and loss account, and balance sheet from broker statements and bank entries.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">5</div>
                        <div class="step-label">Step 5 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 06</span></div>
                    <h3 class="step-title">Tax Computation and Regime Selection</h3>
                    <p class="step-description">Apply Chapter VI-A deductions (80C, 80D, 80E, 80CCD(1B)). Compare old regime versus new regime under Section 115BAC (Section 202 of ITA 2025) - new regime AY 2026-27 has Rs 60,000 rebate up to Rs 12 lakh taxable income. Form 10IEA for opt-out.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">6</div>
                        <div class="step-label">Step 6 of 7</div>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <div class="step-eyebrow"><span class="step-number">STEP 07</span></div>
                    <h3 class="step-title">AIS Reconciliation and E-Filing</h3>
                    <p class="step-description">Match every F&amp;O transaction in AIS against broker P&amp;L. Resolve mismatches before submission to avoid Section 143(1) intimation. File ITR-3, e-verify within 30 days, deliver ITR-V plus computation memo.</p>
                </div>
                <div class="step-visual">
                    <div class="step-visual-inner">
                        <div class="step-number-large">7</div>
                        <div class="step-label">Step 7 of 7</div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Document Checklist for F&amp;O Traders</h2>
            <div class="content-text">
                
                
                <h3 style="font-size:16px;color:var(--blue);margin:8px 0 12px;">A. Universal Documents</h3>
                <ul>
                    <li>PAN card and Aadhaar (linked)</li>
                    <li>Bank account details (IFSC, account number) for refund</li>
                    <li>Form 26AS, AIS, and TIS downloaded from <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></li>
                    <li>Last year ITR-V acknowledgement and Schedule CFL (for brought-forward losses)</li>
                </ul>

                <h3 style="font-size:16px;color:var(--blue);margin:20px 0 12px;">B. Broker Reports (one per active demat)</h3>
                <ul>
                    <li>Tax P&amp;L report covering 1 April to 31 March (Zerodha Console, Groww Tax P&amp;L, Angel One Tax Report, Upstox, ICICIdirect Turnover Statement)</li>
                    <li>Ledger statement showing fund movements</li>
                    <li>Contract notes (random sample for cross-verification)</li>
                    <li>Brokerage and STT summary</li>
                </ul>

                <h3 style="font-size:16px;color:var(--blue);margin:20px 0 12px;">C. Salary and Other Income</h3>
                <ul>
                    <li>Form 16 if salaried (Section 192 TDS)</li>
                    <li>Form 16A for any consultancy or other 194J income</li>
                    <li>Rental income agreement and rent receipts (Schedule HP)</li>
                    <li>Interest certificates from banks and NBFCs</li>
                    <li>Capital gains report from delivery-based equity (Schedule CG)</li>
                </ul>

                <h3 style="font-size:16px;color:var(--blue);margin:20px 0 12px;">D. Business Expense Proofs (deductible against F&amp;O income)</h3>
                <ul>
                    <li>Internet and broadband bills</li>
                    <li>Mobile bills (proportionate use)</li>
                    <li>Trading advisory subscriptions (Streak, Algofox, Sensibull, Smallcase Pro)</li>
                    <li>Computer or laptop purchase invoices for depreciation under Section 32</li>
                    <li>Office rent (if dedicated trading office) plus electricity</li>
                    <li>Professional fees paid to CA, lawyer, advisor</li>
                </ul>

                <h3 style="font-size:16px;color:var(--blue);margin:20px 0 12px;">E. Deductions</h3>
                <ul>
                    <li>Section 80C: PPF, ELSS, life insurance, ULIP, principal of home loan (Rs 1.5 lakh)</li>
                    <li>Section 80D: health insurance premium (self, spouse, parents)</li>
                    <li>Section 80CCD(1B): NPS additional Rs 50,000</li>
                    <li>Section 80E: education loan interest</li>
                    <li>Section 24(b): home loan interest up to Rs 2 lakh under old regime</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trader Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>I had F&amp;O loss but did not file last year. Can I still claim it?</strong></td><td>No. Section 80 read with Section 139(1) requires the loss return to be filed by the due date (31 August for non-audit, 31 October for audit). Belated returns under Section 139(4) lose the carry forward right permanently. Patron prepares a current-year ITR-3 and a memo flagging the irrecoverable lost loss, then ensures subsequent years preserve the eight-year window.</td></tr>
                        <tr><td><strong>My broker says I crossed Rs 10 crore options turnover but my actual loss was small.</strong></td><td>Verify the broker uses the ICAI 8th Edition formula (absolute profit method only - NO premium addition). Many platforms still display the pre-August 2022 number that inflates options turnover by 40 to 60 percent. We re-compute manually from contract-level data; if your real turnover is below Rs 10 crore, no Section 44AB audit is required regardless of profit margin.</td></tr>
                        <tr><td><strong>I tried Section 44AD presumptive last year, now I have a loss. Can I declare it?</strong></td><td>This is the Section 44AD(4) trap. Once you opt for 44AD presumptive, you must continue for 5 consecutive years. Opting out and declaring profit below 6 percent or a loss triggers mandatory audit under Section 44AB(e) regardless of turnover. We file ITR-3 with audit, claim the loss properly, and document the opt-out so subsequent years are tracked correctly.</td></tr>
                        <tr><td><strong>I do both F&amp;O and intraday equity. How do losses set off against each other?</strong></td><td>One-way flexibility rule. F&amp;O loss (non-speculative) CAN absorb intraday profit (speculative income via Section 71). Intraday loss CANNOT absorb F&amp;O profit - speculative loss is locked to speculative income only under Section 73. The Supreme Court confirmed this in Snowtex Investment Ltd. We split your Schedule BP into the two sub-businesses and compute set-offs correctly.</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Description</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Starting prices for F&amp;O trader ITR plans</td><td class="table-amount"><strong>Starting from INR 2,499</strong> (Excl. GST &amp; Govt. Charges)</td></tr>
                        <tr><td>ITR-3 - F&amp;O only, no audit</td><td>Single broker P&amp;L, ICAI turnover, Schedule BP, Schedule CFL, e-verification</td><td class="table-amount">Rs 2,499</td></tr>
                        <tr><td>ITR-3 - F&amp;O + Intraday + Salary</td><td>Multi-source reconciliation, Schedule BP split (speculative + non-speculative), salary integration</td><td class="table-amount">Rs 3,999</td></tr>
                        <tr><td>ITR-3 - Multi-broker F&amp;O</td><td>Up to 4 brokers consolidated, AIS reconciliation, computation memo</td><td class="table-amount">Rs 5,999</td></tr>
                        <tr><td>ITR-3 + Section 44AB Tax Audit</td><td>Books prep, Form 3CB / 3CD, audit report submission, ITR-3 filing</td><td class="table-amount">Rs 14,999</td></tr>
                        <tr><td>Section 139(9) defective return response</td><td>Re-file in correct ITR-3 within 15-day response window</td><td class="table-amount">Rs 1,999</td></tr>
                        <tr><td>Section 143(1) intimation response</td><td>AIS reconciliation, written representation, refund follow-up</td><td class="table-amount">Rs 2,999</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for F&amp;O Traders consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20F%26O%20trader%20ITR%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th><th>Statutory Deadline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>ITR-3 single broker, no audit</td><td class="table-amount">3 to 5 working days</td><td>31 August 2026 for AY 2026-27</td></tr>
                        <tr><td>ITR-3 multi-broker reconciliation</td><td class="table-amount">5 to 7 working days</td><td>31 August 2026</td></tr>
                        <tr><td>ITR-3 + Section 44AB tax audit</td><td class="table-amount">10 to 14 working days</td><td>Audit report 30 September; ITR 31 October 2026</td></tr>
                        <tr><td>Section 139(9) defective return refile</td><td class="table-amount">2 to 3 working days</td><td>15 days from notice date</td></tr>
                        <tr><td>Section 143(1) response with AIS rework</td><td class="table-amount">5 to 7 working days</td><td>30 days from notice date</td></tr>
                        <tr><td>Section 44AD opt-out and 44AD(4) audit</td><td class="table-amount">14 working days</td><td>31 October 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> Section 80 read with Section 139(1) FORFEITS loss carry forward if return is filed after due date - even one day late costs the eight-year benefit. Section 234A interest at 1 percent per month accrues from 1 September 2026 on unpaid tax. Section 234B/234C interest applies for advance tax shortfall. Filing the loss return on time is the single most valuable action a trader takes - more than any tax-saving deduction.

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Traders Hire a CA</h2>
        </div>
        
                <article class="feature-card"><h3>Defective Return Prevention</h3><p>Filing ITR-1 or ITR-2 with F&amp;O income triggers a Section 139(9) defective return notice within weeks. Tools default to ITR-1 for salaried users. We file correctly the first time.</p></article>
                <article class="feature-card"><h3>Correct Schedule BP Split</h3><p>F&amp;O and intraday must be separate sub-businesses with different set-off and carry-forward rules. Tools merge them or skip the speculative split entirely.</p></article>
                <article class="feature-card"><h3>ICAI 8th Edition Turnover</h3><p>Most tools and online calculators still use the pre-August 2022 formula that inflates options turnover. We compute the correct figure from contract-level data.</p></article>
                <article class="feature-card"><h3>Section 44AD(4) Trap Avoidance</h3><p>The 5-year presumptive lock-in is one of the most expensive ITR mistakes a small trader can make. We map your last 5 years and flag risk before you opt in or out.</p></article>
                <article class="feature-card"><h3>AIS Reconciliation Across Brokers</h3><p>Multi-broker traders face automatic mismatches between AIS, broker P&amp;L, and bank statements. We reconcile line by line before filing.</p></article>
                <article class="feature-card"><h3>Section 270A Penalty Defence</h3><p>Misreporting (incorrect classification, under-reported income) attracts 200 percent penalty under Section 270A. Mis-classification of F&amp;O as capital gains is a common trigger.</p></article>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p><em>"My options turnover from Zerodha showed Rs 14 crore - I thought audit was certain. Patron re-computed using the ICAI absolute method and the actual figure was Rs 4.2 crore. No audit needed. They also caught a Section 44AD opt-out from FY 2021-22 that I had forgotten - we filed ITR-3 with audit for that year separately to clear the trap. Saved me Rs 1.5 lakh in penalties."</em> - Vikram, full-time F&amp;O trader, Mumbai.</p>
                <p><em>"My CA filed ITR-1 last year and I got a defective return notice. Patron redid the return as ITR-3, separated my Rs 80,000 intraday loss into a speculative sub-business under Section 73, and preserved the carry forward. Plus they claimed brokerage and STT as expenses I had no idea I could deduct. Refund came in 18 days."</em> - Anjali, salaried + intraday trader, Pune.</p>
                <p><strong>Outcome Proof:</strong> Six consecutive years of ITR-3 filings for one Pune-based full-time trader from FY 2019-20 through FY 2024-25, including two Section 44AB audits, three Section 143(1) intimations resolved within 24 hours, and one Section 270A penalty proceeding closed without addition. All eight-year carry-forward windows preserved.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves traders across India - both in-person and remotely. We file for retail traders, full-time derivatives professionals, salaried traders with side F&amp;O, NRI traders on Indian exchanges, and partnership trading firms.</strong></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">F&amp;O vs Intraday Equity vs Delivery-Based Equity - Tax Treatment Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>F&amp;O (Futures + Options)</th><th>Intraday Equity</th><th>Delivery-Based Equity</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Income Head</strong></td><td>PGBP (non-speculative)</td><td>PGBP (speculative)</td><td>Capital Gains</td></tr>
                        <tr><td><strong>Governing Section</strong></td><td>43(5)(d) - excluded from speculative</td><td>43(5) - speculative by default (no delivery)</td><td>Section 45 / 112A / 111A</td></tr>
                        <tr><td><strong>ITR Form</strong></td><td>ITR-3 (or ITR-4 if 44AD)</td><td>ITR-3 (or ITR-4 if 44AD)</td><td>ITR-2 (or ITR-3 if mixed)</td></tr>
                        <tr><td><strong>Tax Rate</strong></td><td>Slab rate</td><td>Slab rate</td><td>STCG 20% / LTCG 12.5% above Rs 1.25 lakh</td></tr>
                        <tr><td><strong>Turnover Method</strong></td><td>ICAI absolute profit (no premium add)</td><td>Absolute profit</td><td>Sale value (if classed as business)</td></tr>
                        <tr><td><strong>Audit Threshold (Sec 44AB)</strong></td><td>Rs 10 crore (95%+ digital)</td><td>Rs 10 crore</td><td>Not applicable for capital gains</td></tr>
                        <tr><td><strong>Loss Set-Off (Same Year)</strong></td><td>Any income except salary (Section 71)</td><td>Speculative income only (Section 73)</td><td>STCG against STCG/LTCG; LTCG against LTCG</td></tr>
                        <tr><td><strong>Loss Carry Forward</strong></td><td>8 years (Section 72)</td><td>4 years (Section 73)</td><td>8 years (Section 74)</td></tr>
                        <tr><td><strong>STT Rate (1 April 2026)</strong></td><td>Futures 0.05%, Options 0.15% on sell</td><td>0.025% on sell only</td><td>0.10% buy + 0.10% sell</td></tr>
                        <tr><td><strong>Books of Accounts</strong></td><td>Mandatory if income &gt; Rs 2.5L or turnover &gt; Rs 25L</td><td>Mandatory if income &gt; Rs 2.5L or turnover &gt; Rs 25L</td><td>Not required (capital asset)</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                
<div class="related-services-grid">
    <a href="/itr-for-capital-gains" class="related-service-card"><h4>ITR for Capital Gains</h4><p>Delivery-based equity, mutual funds, property - separate from F&amp;O business income.</p></a>
    <a href="/itr-for-crypto-traders" class="related-service-card"><h4>ITR for Crypto Traders</h4><p>Section 115BBH 30% flat tax on virtual digital assets - separate from F&amp;O treatment.</p></a>
    <a href="/tax-audit" class="related-service-card"><h4>Tax Audit (Section 44AB)</h4><p>Form 3CB / 3CD audit when F&amp;O turnover crosses Rs 10 crore or Section 44AD(4) trap triggers.</p></a>
    <a href="/itr-for-business" class="related-service-card"><h4>ITR for Business</h4><p>Non-speculative business income generally - sole prop, partnership firm, LLP, HUF, AOP / BOI.</p></a>
    <a href="/tax-planning-services" class="related-service-card"><h4>Tax Planning Services</h4><p>Old vs new regime selection, advance tax planning, deductions optimisation, surcharge cap claims.</p></a>
    <a href="/income-tax-return" class="related-service-card"><h4>Income Tax Return Filing</h4><p>Master hub for AY 2026-27 ITR services - forms, deadlines, regime selection, sub-services.</p></a>
</div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                
                <h4>Governing Acts and Rules</h4>
                <ul>
                    <li><strong>Income Tax Act 1961</strong> - applies to transactions where the earlier of payment or credit occurred on or before 31 March 2026</li>
                    <li><strong>Income Tax Act 2025</strong> - applies from 1 April 2026 (Tax Year 2026-27 onwards). Section 66 replaces Section 43(5). Section 202 replaces Section 115BAC.</li>
                    <li><strong>Income Tax Rules 1962</strong> - Rule 6 (depreciation), Rule 6F (books for specified profession - not applicable to traders)</li>
                    <li><strong>ICAI Guidance Note on Tax Audit under Section 44AB</strong> - 8th Edition dated 14 August 2022 (governs trading turnover computation - absolute profit method, no premium addition for options)</li>
                    <li><strong>Securities Transaction Tax</strong> (Finance Act 2026 amendments effective 1 April 2026) - futures 0.05%, options 0.15% on sell</li>
                </ul>

                <h4>Key Statutory Sections for Traders</h4>
                <ul>
                    <li><strong>Section 43(5)(d)</strong> - F&amp;O on recognised stock exchange excluded from speculative transactions; non-speculative business income</li>
                    <li><strong>Section 73</strong> - Speculative loss set off only against speculative income; carry forward 4 years</li>
                    <li><strong>Section 72</strong> - Non-speculative business loss carry forward 8 years</li>
                    <li><strong>Section 71</strong> - Inter-head set-off rules; F&amp;O loss CAN reduce house property, interest, capital gains; CANNOT reduce salary</li>
                    <li><strong>Section 44AA</strong> - Books of accounts for individuals / HUF if income &gt; Rs 2.5 lakh or turnover &gt; Rs 25 lakh</li>
                    <li><strong>Section 44AB</strong> - Tax audit if turnover &gt; Rs 1 crore (general) / Rs 10 crore (95%+ digital)</li>
                    <li><strong>Section 44AD(1) / (4)</strong> - Presumptive 6% (digital) / 8% (cash) on turnover up to Rs 3 crore; 5-year continuity; opt-out triggers mandatory audit if profit &lt; 6%</li>
                    <li><strong>Section 80 read with Section 139(1)</strong> - Forfeits loss carry forward if ITR filed after due date</li>
                </ul>

                <h4>Penalty Provisions for Traders</h4>
                <ul>
                    <li><strong>Section 234F</strong> - late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A</strong> - 1 percent per month from 1 September 2026 (non-audit) or 1 November 2026 (audit) on unpaid tax</li>
                    <li><strong>Section 234B / 234C</strong> - 1 percent per month for advance tax shortfall</li>
                    <li><strong>Section 271B</strong> - 0.5 percent of turnover or Rs 1.5 lakh (whichever lower) for failure to get tax audit done</li>
                    <li><strong>Section 271A</strong> - Rs 25,000 for failure to maintain books of accounts under Section 44AA</li>
                    <li><strong>Section 270A</strong> - 50 percent under-reporting penalty; 200 percent misreporting penalty (incorrect classification)</li>
                </ul>

                <h4>Supreme Court and Tribunal Precedent</h4>
                <ul>
                    <li><strong>Snowtex Investment Ltd v. CIT</strong> - confirmed speculative loss cannot be set off against non-speculative business income (one-way flexibility rule)</li>
                    <li><strong>CIT v. DLF Commercial Developers Ltd</strong> - speculative loss includes share trading carried out without delivery</li>
                </ul>

                <p>Authoritative reference: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department of India</a>, <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">CBDT Notifications and Circulars</a>, <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI Guidance Notes</a>, <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI (recognised stock exchanges)</a>.</p>


            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Section 43(5)(d) classification, ICAI 8th Edition turnover, Section 44AD(4) trap, one-way set-off rule - the eight questions F&amp;O traders ask before filing ITR</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is F&amp;O trading income speculative or non-speculative?</h3>
                        <div class="faq-expanded__a"><p>F&amp;O trading on a recognised stock exchange is non-speculative business income under Section 43(5)(d) of the Income Tax Act 1961 (Section 66 of the Income Tax Act 2025 from 1 April 2026). This is taxed at slab rates and reported in ITR-3 under Schedule BP. Intraday equity trading - where positions are squared off the same day with no delivery - is speculative under Section 43(5) and follows separate Section 73 rules with a 4-year carry forward.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form should an F&amp;O trader file - ITR-3 or ITR-4?</h3>
                        <div class="faq-expanded__a"><p>ITR-3 is the correct form for almost every F&amp;O trader. ITR-4 is only for traders who opt for Section 44AD presumptive (6 percent on digital turnover, 8 percent on cash) and meet the eligibility - turnover up to Rs 3 crore and willingness to be locked in for 5 years. ITR-4 cannot declare losses. ITR-1 and ITR-2 are not allowed for F&amp;O income and trigger Section 139(9) defective return notices within weeks of filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is F&amp;O turnover calculated for tax audit?</h3>
                        <div class="faq-expanded__a"><p>Turnover is the sum of absolute trade-wise profits and losses. For a trade with Rs 15,000 profit and another with Rs 8,000 loss, turnover is Rs 23,000. The ICAI Guidance Note 8th Edition dated 14 August 2022 removed the earlier rule of adding option sale premium to turnover. Most online calculators still use the pre-2022 formula and overstate options turnover by 40 to 60 percent. Brokerage and STT are not part of turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When is tax audit mandatory for F&amp;O traders?</h3>
                        <div class="faq-expanded__a"><p>Tax audit under Section 44AB is mandatory when F&amp;O turnover exceeds Rs 10 crore (95 percent or more digital - applies to all exchange-traded F&amp;O). Audit also triggers under Section 44AD(4) when a trader opts out of the presumptive scheme used in any of the 5 preceding years and current year profit is below 6 percent or shows loss. Audit report (Form 3CD) is due 30 September 2026 for AY 2026-27; ITR-3 follows by 31 October 2026. Failure attracts Section 271B penalty at 0.5 percent of turnover or Rs 1.5 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can F&amp;O losses be set off against salary income?</h3>
                        <div class="faq-expanded__a"><p>No. Section 71 of the Income Tax Act prohibits set-off of business losses (including F&amp;O non-speculative loss) against salary income. F&amp;O loss CAN be set off in the same year against any other income head except salary - rental income, interest, capital gains, and other business income are all eligible. Unutilised loss carries forward 8 years under Section 72 against future business income only. Filing the ITR before 31 August 2026 due date is mandatory for carry forward.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long can F&amp;O and intraday losses be carried forward?</h3>
                        <div class="faq-expanded__a"><p>F&amp;O losses (non-speculative) carry forward for 8 assessment years under Section 72 and can offset future business income only. Intraday equity losses (speculative) carry forward for 4 assessment years under Section 73 and can offset future speculative income only. The two carry-forward periods are separate. Filing ITR-3 before the Section 139(1) due date is mandatory in both cases - belated returns under Section 139(4) lose the carry forward right permanently per Section 80.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Section 44AD trap for F&amp;O traders?</h3>
                        <div class="faq-expanded__a"><p>Section 44AD allows traders with turnover up to Rs 3 crore to declare 6 percent (digital) or 8 percent (cash) of turnover as deemed income, file ITR-4, and avoid books and audit. The catch is Section 44AD(4): once you opt in, you must continue for 5 consecutive years. Opting out and declaring loss or profit below 6 percent triggers mandatory tax audit under Section 44AB(e). Most retail F&amp;O traders should avoid Section 44AD entirely - the 5-year lock-in eliminates the ability to declare real losses, which is the primary reason traders file in loss years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does the STT hike from 1 April 2026 affect F&amp;O traders?</h3>
                        <div class="faq-expanded__a"><p>Budget 2026 increased Securities Transaction Tax on F&amp;O effective 1 April 2026. Futures STT rose from 0.02 percent to 0.05 percent on the sell side (150 percent jump). Options premium STT rose from 0.10 percent to 0.15 percent (50 percent jump). Options exercise STT rose from 0.125 percent to 0.15 percent. STT remains a deductible business expense under PGBP. The break-even per trade has effectively doubled for futures - a Nifty futures contract that cost Rs 325 STT pre-Budget now costs Rs 810.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>Q: Which Section classifies F&amp;O?</strong><br>A: Section 43(5)(d) of the Income Tax Act 1961. From 1 April 2026, Section 66 of the Income Tax Act 2025 governs.</p>
                <p><strong>Q: ITR-3 due date AY 2026-27?</strong><br>A: 31 August 2026 for non-audit; 31 October 2026 for tax audit cases.</p>
                <p><strong>Q: F&amp;O audit threshold?</strong><br>A: Rs 10 crore turnover (95%+ digital). Lower threshold under Section 44AD(4) opt-out.</p>
                <p><strong>Q: Intraday loss carry forward?</strong><br>A: 4 assessment years under Section 73 against speculative income only.</p>
                <p><strong>Q: F&amp;O loss carry forward?</strong><br>A: 8 assessment years under Section 72 against business income only - except salary.</p>
                <p><strong>Q: STT rate post 1 April 2026?</strong><br>A: Futures 0.05%, options 0.15% on sell. Deductible expense.</p>
                <p><strong>Q: Books of accounts mandatory?</strong><br>A: Yes if income &gt; Rs 2.5 lakh or turnover &gt; Rs 25 lakh in any of 3 preceding years (Section 44AA).</p>
                <p><strong>Q: Late filing penalty?</strong><br>A: Rs 5,000 under Section 234F (Rs 1,000 if income up to Rs 5 lakh). Loss carry forward forfeited.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File With Confidence</h2>
            <div class="content-text">
                
                Section 80 forfeits loss carry forward if return is filed after due date. AY 2026-27 deadline: 31 August 2026 (non-audit) or 31 October 2026 (audit cases). The eight-year F&amp;O loss window and four-year intraday loss window are lost permanently after a one-day delay. Talk to a CA in 15 minutes - we file ITR-3 with Schedule BP, ICAI 8th Edition turnover, Section 44AB audit (where applicable), and AIS reconciliation across multiple brokers.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 ITR</h2>
            <div class="content-text" style="text-align:left;">
                
                
            <p>F&amp;O trader ITR is the most error-prone return in retail tax filing. SEBI data shows over 91 percent of F&amp;O traders make losses, but a sizeable share never file - losing the right to set off those losses against future profits for the next eight years. The ICAI 8th Edition turnover method, Section 44AD(4) opt-out trap, Schedule BP speculative-versus-non-speculative split, and Section 270A misclassification penalty are landmines a tax-filing tool cannot navigate.</p>
            <p>Patron Accounting LLP has filed over 1,200 trader ITRs since 2019 across Pune, Mumbai, Delhi, and Gurugram. Our CA team handles single-broker, multi-broker, mixed F&amp;O-and-intraday, salaried trader, and full-time professional cases with one signed computation per filing. Whether you trade Rs 5 lakh of options on the side or Rs 50 crore of Nifty futures full-time, the same Section 43(5)(d) framework applies - and the same eight-year loss window is at risk if you file late or in the wrong form.</p>
            <p>Ready to file your AY 2026-27 ITR-3? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 15-minute consultation. We respond within 2 hours.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20F%26O%20trader%20ITR%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="/cdn-cgi/l/email-protection#4c25222a230c3c2d383e23222d2f2f2339223825222b622f2321" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">F&amp;O Trader ITR Services in Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">On-the-ground CA support in our four office cities plus remote delivery across India</p>
            <div class="pa-city-block">
                <h3 class="pa-cross-title">F&amp;O Trader ITR by City</h3>
                <div class="pa-city-grid">
                    <a href="/itr-for-fo-traders/pune" class="pa-city-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div class="pa-cross-text"><strong>F&amp;O Trader ITR Pune</strong><span>Pune office, local CA support</span></div>
                    </a>
                    <a href="/itr-for-fo-traders/mumbai" class="pa-city-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div class="pa-cross-text"><strong>F&amp;O Trader ITR Mumbai</strong><span>BKC office, broker-side handoff</span></div>
                    </a>
                    <a href="/itr-for-fo-traders/delhi" class="pa-city-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div class="pa-cross-text"><strong>F&amp;O Trader ITR Delhi</strong><span>Delhi NCR office, full-time traders</span></div>
                    </a>
                    <a href="/itr-for-fo-traders/gurugram" class="pa-city-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div class="pa-cross-text"><strong>F&amp;O Trader ITR Gurugram</strong><span>Cyber City office, prop traders</span></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block" style="margin-top:40px;">
                <h3 class="pa-cross-title">Cross-Sell - Adjacent Trader Services</h3>
                <div class="pa-cross-grid">
                    <a href="/itr-for-capital-gains" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Capital Gains</strong><span>Delivery equity, MF, property</span></div>
                    </a>
                    <a href="/itr-for-crypto-traders" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Crypto Traders</strong><span>Section 115BBH 30% flat</span></div>
                    </a>
                    <a href="/tax-audit" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Audit (Section 44AB)</strong><span>Form 3CB / 3CD for traders</span></div>
                    </a>
                    <a href="/itr-for-business" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Business</strong><span>Non-speculative business income</span></div>
                    </a>
                    <a href="/tax-planning-services" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Regime selection, advance tax</span></div>
                    </a>
                    <a href="/income-tax-return" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Return Hub</strong><span>Master AY 2026-27 hub</span></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Tier 1 quarterly review during ITR season (April to September) and after every Union Budget. Triggers for review: ICAI Guidance Note revisions, Section 43(5)/Section 44AB/Section 44AD threshold changes under Finance Acts, STT rate changes, Income Tax Act 2025 transitional rules taking effect from Tax Year 2026-27, Section 234F/234A interest rate changes. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications, ICAI Guidance Note on Tax Audit under Section 44AB 8th Edition dated 14 August 2022, Finance Act 2026 STT amendments.</p>
        </div>
    </div>
</section>

@include('layouts.itr-season-strip')

</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
      function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>


<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
