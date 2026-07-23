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
    <title>ITR for Capital Gains: STCG, LTCG</title>
    <meta name="description" content="ITR-2 for capital gains - Section 111A 20% STCG, 112A 12.5% LTCG, property grandfathering, VDA 30%. Starts at Rs 1,499.">
    <link rel="canonical" href="/itr-for-capital-gains">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Capital Gains 2026: STCG, LTCG | Patron Accounting">
    <meta property="og:description" content="ITR-2 for capital gains - Section 111A 20% STCG, 112A 12.5% LTCG, property grandfathering, VDA 30%. Starts at Rs 1,499.">
    <meta property="og:url" content="/itr-for-capital-gains/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-capital-gains-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Capital Gains 2026: STCG, LTCG | Patron Accounting">
    <meta name="twitter:description" content="ITR-2 for capital gains - Section 111A 20% STCG, 112A 12.5% LTCG, property grandfathering, VDA 30%. Starts at Rs 1,499.">
    <meta name="twitter:image" content="/images/itr-for-capital-gains-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/itr-for-capital-gains#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "/services" },
            { "@type": "ListItem", "position": 3, "name": "Income Tax Return", "item": "/income-tax-return" },
            { "@type": "ListItem", "position": 4, "name": "ITR for Capital Gains", "item": "/itr-for-capital-gains" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/itr-for-capital-gains#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should I file for capital gains - ITR-2 or ITR-3?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-2 is mandatory if you have capital gains and no business income. This covers most individual investors with equity, mutual funds, property, crypto, and ESOP exits. ITR-3 is required if you have business or professional income alongside capital gains - F-and-O trading, intraday equity, proprietary business, or partnership share. ITR-1 is not allowed if your LTCG under Section 112A exceeds Rs 1.25 lakh or you have any other capital gains."
              }
            },
            {
              "@type": "Question",
              "name": "What are the new STCG and LTCG rates from 23 July 2024?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "STCG on listed equity, equity mutual funds, and business trust units (Section 111A): 20 percent. LTCG on the same assets (Section 112A): 12.5 percent on gains exceeding Rs 1.25 lakh per FY. LTCG on other assets including property, gold, unlisted shares (Section 112): 12.5 percent without indexation. Plus 4 percent cess. Surcharge capped at 15 percent. Budget 2025 and Budget 2026 made no changes."
              }
            },
            {
              "@type": "Question",
              "name": "How does pre-2018 equity grandfathering work under Section 112A?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For listed equity shares and equity-oriented mutual fund units acquired before 1 February 2018, the cost of acquisition is the higher of actual purchase price or fair market value on 31 January 2018, capped at the actual sale price. This protects gains accrued before 1 February 2018 from Section 112A LTCG tax. The grandfathering operates per acquisition lot, not per ISIN. Equity ledgers must be rebuilt lot-by-lot using broker contract notes."
              }
            },
            {
              "@type": "Question",
              "name": "Can I still use indexation for property sale after 23 July 2024?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only if you are a resident individual or HUF and the property was acquired before 23 July 2024. You can choose between 12.5 percent without indexation or 20 percent with indexation using CII 363 for FY 2025-26, whichever produces lower tax. For properties acquired on or after 23 July 2024, only 12.5 percent without indexation applies. NRIs cannot use indexation."
              }
            },
            {
              "@type": "Question",
              "name": "How are mutual fund redemptions taxed - equity vs debt?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Equity-oriented MF (65 percent or more in equity): same as listed equity - Section 111A 20 percent STCG and Section 112A 12.5 percent LTCG above Rs 1.25 lakh. Hybrid MF (35 to 65 percent equity): 24-month holding period; STCG at slab; LTCG at Section 112 12.5 percent. Debt MF acquired on or after 1 April 2023: always slab rate under Section 50AA. Debt MF acquired before 1 April 2023: 36-month holding for LTCG at Section 112 12.5 percent."
              }
            },
            {
              "@type": "Question",
              "name": "How is crypto taxed under Section 115BBH and Section 194S?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All gains from transfer of virtual digital assets are taxed at flat 30 percent under Section 115BBH plus cess plus surcharge. No holding period distinction. Only cost of acquisition is deductible. No loss set-off intra-VDA or against other heads. No carry forward of losses. Section 194S deducts 1 percent TDS on transfers - Rs 50,000 threshold for specified persons; Rs 10,000 for others. Schedule VDA in ITR-2 or ITR-3 must be filed."
              }
            },
            {
              "@type": "Question",
              "name": "How is ESOP capital gain calculated after the perquisite tax?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESOP is taxed in two stages. At exercise, perquisite under Section 17(2)(vi) equals FMV on exercise date minus exercise price, taxed as salary at slab. Employer deducts TDS under Section 192. At sale, capital gain equals sale price minus FMV on exercise date. Holding period runs from date of allotment, not exercise. Listed shares: 12 months for LTCG. Unlisted: 24 months for LTCG. Section 80-IAC startup employees can defer perquisite tax up to 5 years."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Section 54EC Rs 50 lakh bond limit and 6-month window?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 54EC allows exemption of LTCG on land and buildings if invested in NHAI, REC, PFC, or IRFC bonds within 6 months of transfer. Cap is Rs 50 lakh per FY combined across two FYs straddling the 6-month window. Lock-in is 5 years. Bond interest is taxable at around 5.25 percent per annum. For very large gains, Section 54 residential property and Section 54F can be combined."
              }
            }
          ],
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30"
        },
        {
          "@type": "Service",
          "@id": "/itr-for-capital-gains#service",
          "name": "ITR Filing for Capital Gains",
          "alternateName": ["Capital Gains Tax Filing", "ITR-2 Capital Gains Filing", "STCG and LTCG ITR", "HNI Capital Gains Tax Return"],
          "url": "/itr-for-capital-gains",
          "description": "End-to-end ITR-2 and ITR-3 filing for HNI investors with capital gains across listed equity, mutual funds, immovable property, crypto VDA, and ESOP exits. Includes Section 111A 20% STCG, Section 112A 12.5% LTCG above Rs 1.25 lakh, Section 112 property indexation choice, Section 115BBH 30% crypto, ESOP two-stage taxation, and Section 54/54F/54EC reinvestment exemption planning for AY 2026-27.",
          "serviceType": "Tax Return Filing",
          "category": "Direct Tax Compliance",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "audience": {
            "@type": "Audience",
            "audienceType": "HNI individuals with multi-asset portfolios, equity and mutual fund investors, property sellers, crypto investors, ESOP holders at startups and listed companies, salaried professionals with capital gains, returning NRIs with capital gains"
          },
          "about": [
            { "@type": "Thing", "name": "Capital Gains Tax", "sameAs": "https://en.wikipedia.org/wiki/Capital_gains_tax" },
            { "@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India" },
            { "@type": "Thing", "name": "Cryptocurrency and Taxation", "sameAs": "https://en.wikipedia.org/wiki/Cryptocurrency_and_taxation" }
          ],
          "termsOfService": "/terms",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Capital Gains ITR Filing Plans",
            "itemListElement": [
              { "@type": "Offer", "name": "ITR-2 Single-Asset Capital Gains", "price": "1499", "priceCurrency": "INR", "url": "/itr-for-capital-gains", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "ITR-2 with Property Sale (Indexation Comparison)", "price": "5999", "priceCurrency": "INR", "url": "/itr-for-capital-gains", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "HNI Multi-Asset ITR-2 (Equity, MF, Property, Crypto, ESOP)", "price": "9999", "priceCurrency": "INR", "url": "/itr-for-capital-gains", "availability": "https://schema.org/InStock" }
            ]
          },
          "mainEntityOfPage": "/itr-for-capital-gains"
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
            background: #25D366;
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
            padding: 8px 22px; background: #fff; color: #25D366;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
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
            .wa-sticky-bar-btn::before { content: 'Join Community'; }
            .wa-sticky-bar-btn span { display: none; }
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
                        Capital Gains ITR Filing for HNI Investors
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 8 May 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Broker tax P-and-L, MF redemption statement, sale deed, Schedule VDA reconciliation, Form 16 with ESOP perquisite</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,499 for single-asset capital gains; Rs 9,999 for HNI multi-asset portfolios with reinvestment planning</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> ITR-2 mandatory for capital gains above Rs 1.25 lakh; ITR-3 if any business income (F-and-O, intraday, or proprietary trading)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 working days; due 31 July 2026 for AY 2026-27 (FY 2025-26 income)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Capital%20Gains%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Capital%20Gains%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20capital%20gains%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Capital Gains'/>
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
                                
<option value="itr-for-capital-gains" selected>ITR for Capital Gains</option>
<option value="income-tax-return">Income Tax Return</option>
<option value="itr-for-property-sale">ITR for Property Sale</option>
<option value="itr-for-crypto-traders">ITR for Crypto Traders</option>
<option value="itr-for-fno-trader">ITR for F-and-O Traders</option>
<option value="itr-for-salary">ITR for Salary</option>
<option value="tax-planning-services">Tax Planning Services</option>
<option value="income-tax-notice-for-defective-return">Income Tax Notice for Defective Return</option>
<option value="other">Other</option>


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
            <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My flat was bought in 2010 for Rs 70 lakh and sold for Rs 2.4 crore. Patron computed both methods - 12.5 percent without indexation gave Rs 21.25 lakh tax; 20 percent with indexation gave Rs 13.4 lakh. We saved Rs 7.85 lakh by choosing the right option and parked the unused gain in CGAS before 31 July. Section 54 exemption preserved.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali R</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Senior Product Manager, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My ESOP exit was a mess - 1,200 unlisted shares from a Bengaluru startup, allotted across 4 years, exercised at different FMVs, sold via secondary tender at Rs 4,800 per share. The Patron team rebuilt my entire ESOP ledger, validated my Section 80-IAC startup deferral status, separated perquisite from capital gains. Total tax saved: Rs 14 lakh.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KV</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Karthik V</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Founder, Bengaluru</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I had 8 years of equity portfolio with shares purchased before and after 1 February 2018. Patron rebuilt my equity ledger lot-by-lot using broker contract notes and 31 January 2018 NSE adjusted close prices. Section 112A grandfathering shifted nearly Rs 18 lakh of pre-2018 gains out of taxable LTCG. Filed without a single Section 143(1) intimation issue.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit S</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Equity Investor, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Traded Bitcoin and Ethereum on three exchanges. Section 194S TDS in Form 26AS was Rs 4.7 lakh higher than my own crypto P-and-L. Patron reconciled every CSV export, wallet transfer, and TDS entry. Schedule VDA built correctly. No Section 139(9) defective return. Section 115BBH 30% computed cleanly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya G</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Crypto Investor, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div></div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Real HNI investors who saved tax on property, equity, crypto, and ESOP exits with our capital gains ITR filing.</p>
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
<a href="#who-section" class="toc-btn">Who Files</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Hire CA</a>
<a href="#comparison-section" class="toc-btn">Asset Comparison</a>
<a href="#legal-section" class="toc-btn">Legal Framework</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains ITR Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Capital Gains Services at a Glance</strong></p>
                    <p>Capital gains in India for FY 2025-26 are taxed at 20% STCG (Section 111A) and 12.5% LTCG (Section 112A above Rs 1.25 lakh) on listed equity and equity mutual funds. Other LTCG falls under Section 112 at 12.5% without indexation. Property sellers (resident individual or HUF) acquired before 23 July 2024 can choose 12.5% without indexation OR 20% with indexation. Crypto VDA is 30% under Section 115BBH. ITR-2 is mandatory.</p>
                </div>
                <p>Capital gains taxation in India was rewritten in a single Union Budget. The Finance (No. 2) Act 2024 raised equity STCG from 15 to 20 percent under Section 111A, raised equity LTCG from 10 to 12.5 percent under Section 112A with the exemption climbing from Rs 1 lakh to Rs 1.25 lakh, removed indexation under Section 48 for most assets and introduced a uniform 12.5 percent rate under Section 112, and gave resident individuals and HUFs a one-time grandfathering choice on land or buildings acquired before 23 July 2024.</p>
                <p>Crypto retained its standalone Section 115BBH 30 percent regime with 1 percent TDS under Section 194S. ESOP exits stayed two-stage with perquisite at exercise and capital gain on sale. AY 2026-27 is the first full ITR cycle under this rewritten regime. Tax Year 2026-27 onwards moves to the Income Tax Act 2025 with capital gains under Section 67 and Schedule VII and reinvestment exemptions under Sections 85-88. Patron Accounting has filed multi-asset capital gains ITRs for HNI investors since 2019.</p><div class="table-responsive-wrapper" style="margin-top:18px;">
<table class="table-amount">
<thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Governing Act</td><td>Income Tax Act 1961 Sections 45, 48, 54, 54EC, 54F, 111A, 112, 112A, 115BBH (FY 2025-26); Income Tax Act 2025 Section 67 + Schedule VII (from FY 2026-27)</td></tr>
<tr><td>Pivot Date</td><td>23 July 2024 - Finance (No. 2) Act 2024 changed STCG and LTCG rates, removed indexation for most assets, raised equity LTCG exemption from Rs 1 lakh to Rs 1.25 lakh</td></tr>
<tr><td>ITR Form</td><td>ITR-2 mandatory for individuals and HUF with capital gains and no business income; ITR-3 if F-and-O, intraday, or proprietary business income</td></tr>
<tr><td>Cost</td><td>Starting Rs 1,499 (single-asset capital gains); Rs 9,999 (HNI multi-asset with reinvestment planning) at Patron Accounting</td></tr>
<tr><td>Penalty</td><td>Rs 5,000 late filing under Section 234F; Section 234A 1% per month interest; Section 270A 50%/200% under-reporting / misreporting</td></tr>
<tr><td>Form / Portal</td><td>incometax.gov.in e-filing portal; Schedule CG, Schedule 112A, Schedule VDA, Schedule SI, Schedule CYLA, Schedule BFLA, Schedule CFL</td></tr>
<tr><td>Authority</td><td>Central Board of Direct Taxes (CBDT); CII Notification 70/2025 fixing FY 2025-26 = 363</td></tr>
</tbody></table></div><p style="margin-top:18px;"></p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS ITR FOR CAPITAL GAINS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Capital Gains ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Capital gains ITR filing means computing and reporting profit or loss from transfer of capital assets - listed equity, mutual funds, immovable property, unlisted shares, virtual digital assets, ESOP shares, gold, bonds - in ITR-2 (no business income) or ITR-3 (with business income), with applicable Sections 111A, 112A, 112, or 115BBH rates and Section 54/54F/54EC reinvestment exemptions where claimed.</p>
<p>Capital gains arise when a capital asset (Section 2(14)) is transferred during the FY. The gain is short-term or long-term based on the holding period: 12 months for listed securities and equity-oriented mutual funds, 24 months for immovable property and unlisted shares, 36 months for debt mutual funds acquired before 1 April 2023 (post-April 2023 debt MF gains are slab-rate regardless of holding under Section 50AA).</p>
<p>Tax computation depends on the asset class and the date of transfer relative to the 23 July 2024 pivot. ITR-2 is the workhorse form for capital gains filers without business income; ITR-3 applies when business income coexists. For authoritative guidance, see the <a href="https://incometaxindia.gov.in/pages/default.aspx" target="_blank" rel="noopener">Income Tax Department portal</a> and <a href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2036604" target="_blank" rel="noopener">PIB CBDT FAQ on Budget 2024 capital gains</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Capital Gains:</strong></p>
                    <ul style="margin-top:8px;">
<li><strong>Section 45 (Charging Section):</strong> profits or gains arising from transfer of a capital asset are taxable in the year of transfer.</li>
<li><strong>Section 48 (Mode of Computation):</strong> Capital gain = Sale consideration minus (cost of acquisition + cost of improvement + transfer expenses); CII for FY 2025-26 = 363.</li>
<li><strong>Section 111A (STCG):</strong> 20% on listed equity, equity MF, business trust units where STT paid (15% for transfers before 23 July 2024).</li>
<li><strong>Section 112A (LTCG):</strong> 12.5% on gains exceeding Rs 1.25 lakh per FY on listed equity and equity MF; pre-2018 grandfathering applies; no Section 87A rebate.</li>
<li><strong>Section 112 (LTCG other assets):</strong> 12.5% without indexation; resident individuals and HUFs with land or buildings acquired before 23 July 2024 may choose 20% with indexation.</li>
<li><strong>Section 115BBH (Crypto VDA):</strong> Flat 30% plus surcharge plus 4% cess; only cost of acquisition deductible; no loss set-off; no carry forward.</li>
<li><strong>Section 194S (VDA TDS):</strong> 1% TDS; Rs 50,000 threshold for specified persons; Rs 10,000 for others; reflected in Form 26AS.</li>
<li><strong>Section 17(2)(vi) (ESOP Perquisite):</strong> FMV at exercise minus exercise price taxed as salary at slab; FMV at exercise becomes cost for capital gains on subsequent sale.</li>
<li><strong>Pre-2018 Equity Grandfathering:</strong> For listed equity and equity MF acquired before 1 February 2018, cost = higher of actual cost or 31 January 2018 FMV, capped at sale price.</li>
<li><strong>Section 54 / 54F / 54EC:</strong> reinvestment exemptions in residential property or NHAI/REC/PFC/IRFC bonds (Rs 50 lakh cap, 6-month window, 5-year lock-in).</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Capital Gains</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>AY 2026-27</span>
                        <strong>ITR-2 Capital Gains Filing</strong>
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
            <h2 class="section-title">Who Needs to File Capital Gains ITR</h2>
            <div class="content-text">
                
                <p>You must file ITR-2 (or ITR-3 if business income coexists) if you had any of the following during FY 2025-26:</p>
<ul>
<li><strong>Listed equity or equity mutual fund redemption</strong> with sale consideration triggering Section 111A STCG or Section 112A LTCG (LTCG above Rs 1.25 lakh exemption).</li>
<li><strong>Sale of immovable property</strong> (residential, commercial, land) - regardless of profit or loss; Section 50C deemed sale value applies if sale price is below 110% of stamp duty.</li>
<li><strong>Crypto, NFT, or VDA transfer</strong> on exchange or P2P; Schedule VDA mandatory; Section 194S TDS reflected in Form 26AS must reconcile.</li>
<li><strong>ESOP exercise or sale</strong> at listed or unlisted company; Section 17(2)(vi) perquisite at exercise plus capital gain on sale; Section 80-IAC startup deferral check applies.</li>
<li><strong>Unlisted share transfer</strong> in private companies, LLPs, or secondary deals; Section 112 LTCG at 12.5% without indexation; 24-month holding period for LTCG.</li>
<li><strong>Mutual fund redemption</strong> across equity, hybrid, debt, or international categories; Section 50AA always-slab rule for debt MF acquired on or after 1 April 2023.</li>
<li><strong>Gold, gold ETF, or sovereign gold bond</strong> sale; Section 112 LTCG; sovereign gold bonds retain indexation benefit for transfers post 23 July 2024.</li>
<li><strong>Carry-forward losses</strong> from earlier FYs (Section 74) - return must be filed by due date to preserve 8-year carry forward; STCL set off against any CG, LTCL only against LTCG; VDA losses cannot be set off or carried forward.</li>
</ul>
<p style="margin-top:14px;"><strong>Note:</strong> ITR-1 (Sahaj) is NOT permitted if Section 112A LTCG exceeds Rs 1.25 lakh or any other capital gain exists. NRIs with India-source capital gains use ITR-2 with separate FA schedule disclosures.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">HNI Capital Gains Services at Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Equity and Mutual Fund STCG/LTCG</td><td>Broker tax P-and-L and CDSL/NSDL holding statement reconciliation. Section 111A 20% STCG and Section 112A 12.5% LTCG above Rs 1.25 lakh. Pre-2018 grandfathering FMV deemed cost for shares acquired before 1 February 2018.</td></tr>
<tr><td>Property Sale with Indexation Choice</td><td>Comparative tax under both 12.5% without indexation and 20% with indexation (resident individuals/HUFs on pre-23 July 2024 acquisitions). Section 48 indexed cost using CII = 363 for FY 2025-26. Section 50C stamp duty value comparison.</td></tr>
<tr><td>Crypto VDA and Schedule VDA</td><td>Wallet, exchange, and Form 26AS Section 194S 1% TDS reconciliation. Schedule VDA population with date-of-purchase, date-of-sale, cost, sale consideration, TDS. Section 115BBH 30% computation. Defective return Section 139(9) trigger prevention.</td></tr>
<tr><td>ESOP Two-Stage Tax Computation</td><td>Form 16 Part B perquisite extraction (FMV at exercise minus exercise price taxed as salary). Capital gains on sale (sale price minus FMV at exercise). Listed: Section 111A or 112A; Unlisted: slab or Section 112. Section 80-IAC startup deferral validation.</td></tr>
<tr><td>Section 54/54F/54EC Reinvestment</td><td>Pre-sale tax structuring: Section 54 residential property reinvestment (Rs 10 crore cap), Section 54F net consideration reinvestment, Section 54EC NHAI/REC/PFC/IRFC bonds (Rs 50 lakh cap, 6-month window). CGAS deposit before due date if reinvestment incomplete.</td></tr>
<tr><td>Multi-Asset HNI Portfolio ITR-2</td><td>End-to-end ITR-2 with Schedule CG, Schedule 112A line-item per equity transaction, Schedule VDA, Schedule SI special rates, Schedule CYLA/BFLA loss set-off, Schedule CFL loss carry forward, Schedule AL (mandatory if income above Rs 1 crore).</td></tr>


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
            <h2 class="section-title">How Patron Files Your Capital Gains ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step end-to-end process from broker P-and-L collection to ITR-2 e-verification and refund tracking - typically 7 to 14 working days for HNI multi-asset portfolios.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Asset-Class Inventory and Document Collection</h3>
        <p class="step-description">We map every taxable transaction across the FY: broker tax P-and-L for equity, CAS statement for mutual funds, sale and purchase deeds for property, exchange CSV exports for crypto, Form 16 Part B and DP statement for ESOP shares. Match against AIS, TIS, and Form 26AS to ensure nothing is missed.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Broker P-and-L</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS / TIS Match</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="46" x2="75" y2="46" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="57" x2="85" y2="57" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="95" cy="20" r="9" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M91 20l3 3 5-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Asset-Wise STCG/LTCG Classification</h3>
        <p class="step-description">Apply the holding period test for each transaction: 12 months for listed equity and equity MF, 24 months for property and unlisted shares, 36 months for pre-April 2023 debt MF (post-April 2023 debt MF always slab under Section 50AA). Identify the 23 July 2024 pivot date for rate selection.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Holding Period Test</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 23 Jul 2024 Pivot</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="20" y="30" width="35" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <text x="37.5" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STCG</text>
                    <rect x="65" y="30" width="35" height="20" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                    <text x="82.5" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LTCG</text>
                    <line x1="20" y1="62" x2="100" y2="62" stroke="#14365F" stroke-width="1.5" stroke-dasharray="3,3"/>
                    <text x="60" y="74" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">23 Jul 2024 Pivot</text>
                </svg>
            </div>
            <span class="illustration-label">Classified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Cost Determination</h3>
        <p class="step-description">For listed equity acquired before 1 February 2018, apply Section 112A grandfathering (higher of actual cost or 31 January 2018 FMV, capped at sale price). For property acquired before 23 July 2024, compute both 12.5% without indexation and 20% with indexation (CII = 363 for FY 2025-26). For ESOP, use FMV at exercise as cost. For crypto, only original purchase cost is allowed.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Grandfathering</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CII = 363</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="45" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="42" font-size="14" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">CII</text>
                    <text x="60" y="58" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">363</text>
                    <rect x="15" y="80" width="90" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <text x="60" y="91" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FY 2025-26 Indexation</text>
                </svg>
            </div>
            <span class="illustration-label">Cost Computed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Section-Wise Tax Computation</h3>
        <p class="step-description">Section 111A 20% on listed equity STCG. Section 112A 12.5% on listed equity LTCG above Rs 1.25 lakh. Section 112 12.5% on other LTCG. Section 115BBH 30% on crypto. Apply 4% health and education cess. Apply surcharge with 15% cap on Section 111A/112A/112 (per CBDT FAQ).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section-Wise Split</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 15% Surcharge Cap</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="38" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Tax Liability</text>
                    <rect x="30" y="48" width="60" height="3" rx="1" fill="#E8712C"/>
                    <rect x="30" y="55" width="45" height="3" rx="1" fill="#F5A623"/>
                    <rect x="30" y="62" width="50" height="3" rx="1" fill="#10B981"/>
                    <rect x="30" y="69" width="35" height="3" rx="1" fill="#3B82F6"/>
                </svg>
            </div>
            <span class="illustration-label">Tax Computed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Reinvestment Exemption Application</h3>
        <p class="step-description">Identify Section 54 (residential property to residential property), Section 54F (other LTCA to one residential property), and Section 54EC (LTCG on land/building to NHAI/REC/PFC/IRFC bonds, Rs 50 lakh cap, 6-month window) opportunities. Deposit unutilised gain in Capital Gains Account Scheme before 31 July 2026 if reinvestment is in progress.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sec 54 / 54F / 54EC</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CGAS Deposit</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 75 L30 50 L20 50 L60 20 L100 50 L90 50 L90 75 Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="50" y="55" width="20" height="20" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <circle cx="95" cy="30" r="11" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <text x="95" y="34" font-size="11" fill="#10B981" font-weight="800" text-anchor="middle" font-family="Arial">54</text>
                </svg>
            </div>
            <span class="illustration-label">Reinvestment Plan</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Loss Set-Off and Carry Forward</h3>
        <p class="step-description">STCL set off against any STCG or LTCG; LTCL set off only against LTCG. Both can be carried forward 8 years (Section 74). Crypto VDA losses CANNOT be set off or carried forward (Section 115BBH(2)). Schedule CYLA, BFLA, and CFL populated.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 8-Year Carry Forward</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedule CYLA/BFLA</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="38" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Loss Set-Off</text>
                    <line x1="30" y1="48" x2="50" y2="65" stroke="#E8712C" stroke-width="2" marker-end="url(#arrow1)"/>
                    <line x1="55" y1="48" x2="75" y2="65" stroke="#10B981" stroke-width="2"/>
                    <circle cx="30" cy="48" r="5" fill="#FFF3E0" stroke="#F5A623"/>
                    <circle cx="55" cy="48" r="5" fill="#FFF3E0" stroke="#F5A623"/>
                    <circle cx="50" cy="65" r="5" fill="#E8F5E9" stroke="#10B981"/>
                    <circle cx="75" cy="65" r="5" fill="#E8F5E9" stroke="#10B981"/>
                </svg>
            </div>
            <span class="illustration-label">Losses Adjusted</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">ITR-2 Filing and E-Verification</h3>
        <p class="step-description">File ITR-2 on incometax.gov.in. Schedule CG, Schedule 112A line-item, Schedule VDA, Schedule SI, Schedule AL (if income above Rs 1 crore), Schedule TDS. E-verify within 30 days. Track refund. Respond to Section 143(1) intimation or Section 139(9) defective return within timeline.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-Verification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Refund Tracking</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2 Filed</text>
                    <line x1="30" y1="38" x2="90" y2="38" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                    <line x1="30" y1="46" x2="80" y2="46" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                    <line x1="30" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                    <circle cx="60" cy="68" r="9" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M55 68l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">ITR Filed</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Document Checklist for Capital Gains ITR</h2>
            <div class="content-text">
                
                <p><strong>A. Identity:</strong></p>
<ul>
<li>PAN card and Aadhaar (linked - mandatory)</li>
<li>Bank account details for refund</li>
</ul>
<p style="margin-top:14px;"><strong>B. Equity and Mutual Fund:</strong></p>
<ul>
<li>Broker tax P-and-L statement for FY 2025-26 (Zerodha, Groww, ICICI Direct, HDFC Sec, etc.)</li>
<li>CDSL/NSDL holding statement as on 31 March 2025 and 31 March 2026</li>
<li>CAMS or KFintech Consolidated Account Statement (CAS) for mutual funds</li>
<li>For pre-2018 equity: 31 January 2018 FMV reference (BSE/NSE adjusted close)</li>
<li>Contract notes for any off-market transactions</li>
</ul>
<p style="margin-top:14px;"><strong>C. Property Sale:</strong></p>
<ul>
<li>Sale deed and purchase deed with stamp duty value</li>
<li>Cost of improvement bills (with date) for indexation</li>
<li>Brokerage and transfer expense receipts</li>
<li>Form 26QB (TDS challan) from buyer; Form 27Q if NRI seller</li>
<li>Section 50C valuation report if stamp duty value exceeds sale consideration</li>
</ul>
<p style="margin-top:14px;"><strong>D. Crypto VDA:</strong></p>
<ul>
<li>Exchange CSV exports for FY 2025-26 (CoinDCX, WazirX, Binance, etc.)</li>
<li>Wallet transaction history (MetaMask, Trust Wallet, Phantom)</li>
<li>Form 26AS - Section 194S TDS line items</li>
<li>P2P transaction records if applicable</li>
</ul>
<p style="margin-top:14px;"><strong>E. ESOP:</strong></p>
<ul>
<li>Form 16 Part B with perquisite line item (FMV minus exercise price)</li>
<li>Grant letter and exercise confirmation from employer</li>
<li>Merchant banker FMV certificate (unlisted ESOP) or exchange close price (listed)</li>
<li>Sale broker contract note when shares are sold</li>
<li>For startup ESOP: DPIIT recognition certificate and Section 80-IAC IMB approval</li>
</ul>
<p style="margin-top:14px;"><strong>F. Reinvestment Documents:</strong></p>
<ul>
<li>New residential property purchase deed (Section 54/54F)</li>
<li>NHAI/REC/PFC/IRFC bond allotment letter (Section 54EC)</li>
<li>CGAS deposit receipt if unused gain parked in scheme</li>
</ul>
<p style="margin-top:14px;"><strong>G. Other:</strong></p>
<ul>
<li>Form 26AS, AIS, and TIS download from incometax.gov.in</li>
<li>Brought forward loss return acknowledgement (for Section 74 set-off)</li>
<li>Section 80C/80D/80E receipts (if old regime)</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common HNI Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Property indexation choice on long-held flat</td><td>Compute both methods. With CII 117 (FY 2009-10) and 363 (FY 2025-26), indexation triples cost. We compute under both 12.5% without indexation and 20% with indexation, then pick the lower-tax option. For older properties with limited price appreciation but high inflation gap, 20% with indexation usually wins by 30 to 50 percent.</td></tr>
<tr><td>Pre-2018 equity grandfathering across mixed lots</td><td>Section 112A grandfathering operates per ISIN per acquisition lot. For each pre-2018 lot, cost = higher of actual purchase price or 31 January 2018 FMV, capped at sale price. We rebuild equity ledger lot-by-lot using broker contract notes and historical 31 January 2018 NSE/BSE adjusted close prices. Often shifts a significant portion of pre-2018 gains out of taxable LTCG.</td></tr>
<tr><td>Schedule VDA mismatch with Form 26AS Section 194S TDS</td><td>The Income Tax Department actively checks Schedule VDA sale consideration against Form 26AS Section 194S gross receipts - Schedule VDA receipts must be greater than or equal to 26AS figures. We reconcile every exchange CSV export, wallet transfer, and TDS entry. Crypto-to-crypto swaps are taxable transfers. P2P transactions need separate reporting. Section 115BBH allows zero loss set-off, even within VDA. Full Schedule VDA build to prevent Section 139(9) defective return.</td></tr>
<tr><td>ESOP perquisite vs capital gains split for unlisted startup</td><td>Two-stage tax. Stage 1 at exercise: Perquisite under Section 17(2)(vi) = (FMV minus exercise price) per share, taxed as salary at slab. Employer should already have deducted TDS under Section 192 and reported in Form 16 Part B (or deferred under Section 80-IAC if startup is DPIIT recognised). Stage 2 at sale: Capital gain = sale price minus FMV at exercise. Holding period from date of allotment (not exercise). Unlisted: 24 months for LTCG; if LT, Section 112 at 12.5% without indexation; if ST, slab rate. We pull merchant banker FMV certificate to substantiate cost.</td></tr>


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
            <h2 class="section-title">Capital Gains ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 Single-Asset Capital Gains (Equity OR MF Only)</td><td>Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 Equity + MF Combined</td><td>Starting from INR 3,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 with Property Sale (Indexation Comparison)</td><td>Starting from INR 5,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 with Crypto VDA (Schedule VDA Build)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 with ESOP Exit (Listed or Unlisted)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>HNI Multi-Asset ITR-2 (Full Portfolio)</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-3 with Capital Gains + Business Income</td><td>Starting from INR 8,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Section 197 Lower TDS Certificate (Property Sale)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Income Tax Department Late Filing Fee (Section 234F)</td><td>Rs 5,000 if income above Rs 5 lakh; Rs 1,000 if income up to Rs 5 lakh</td></tr>
<tr><td>Section 234A Interest on Unpaid Tax</td><td>1% per month from 1 August 2026 till date of filing</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Capital Gains consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20capital%20gains%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains ITR Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Single-Asset Capital Gains (Equity OR MF Only)</td><td>5 to 7 working days; due 31 July 2026</td></tr>
<tr><td>Equity + MF Combined ITR-2</td><td>7 to 10 working days; due 31 July 2026</td></tr>
<tr><td>Property Sale with Indexation Comparison</td><td>10 to 14 working days; due 31 July 2026 (CGAS deposit by 31 July 2026 if reinvestment pending)</td></tr>
<tr><td>Crypto VDA Reconciliation Across Exchanges</td><td>10 to 14 working days; due 31 July 2026</td></tr>
<tr><td>ESOP Listed Share Sale</td><td>7 to 10 working days; due 31 July 2026</td></tr>
<tr><td>ESOP Unlisted with Merchant Banker FMV</td><td>14 to 21 working days; due 31 July 2026</td></tr>
<tr><td>HNI Multi-Asset Full Portfolio</td><td>14 to 21 working days; due 31 July 2026</td></tr>
<tr><td>Section 197 Form 13 Lower TDS (Property)</td><td>21 to 30 working days; required BEFORE sale execution</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Statutory deadlines for AY 2026-27 (FY 2025-26):</strong></p>
<ul>
<li><strong>31 July 2026</strong> - non-audit ITR-2 under Section 139(1)</li>
<li><strong>31 October 2026</strong> - audit-case ITR-3 (where Section 44AB applies)</li>
<li><strong>31 December 2026</strong> - belated/revised return under Section 139(4)/(5) with Section 234F fee Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh)</li>
<li><strong>31 March 2026</strong> - extended Capital Gains Account Scheme deposit deadline for FY 2024-25 gains (Budget 2025)</li>
</ul>

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
            <h2 class="section-title">Why HNIs Hire a CA Instead of DIY Capital Gains Filing</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-5"/></svg></div><h3>Pre-2018 Equity Grandfathering Lot-by-Lot</h3><p>DIY platforms apply 31 January 2018 FMV at the ISIN level, but Section 112A grandfathering operates per acquisition lot. Manual lot reconciliation often produces a 20-30 percent lower LTCG.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18M3 9h18M3 15h18"/></svg></div><h3>Property Indexation Choice Optimisation</h3><p>The 12.5%-without vs 20%-with-indexation choice can produce tax differences of Rs 5-15 lakh on a single transaction. DIY tools default to one method without comparing.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Schedule VDA Reconciliation</h3><p>Schedule VDA receipts must be greater than or equal to Form 26AS Section 194S gross receipts; otherwise, Section 139(9) defective return is automatic. Crypto-to-crypto swaps are taxable transfers most DIY platforms miss.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>ESOP Holding Period from Allotment Date</h3><p>Holding period for capital gains starts at allotment, not exercise. DIY platforms commonly use exercise date and misclassify gains as STCG when they qualify as LTCG.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Section 54 vs Section 54F Selection</h3><p>Reinvesting LTCG from property in another residential property: Section 54 (only gain reinvested needed). LTCG from equity, gold, or other LTCA: Section 54F (entire NET CONSIDERATION needs reinvestment). Wrong choice = no exemption.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg></div><h3>CGAS Deposit Before ITR Due Date</h3><p>If reinvestment is not completed by 31 July 2026 but you intend to claim Section 54/54F, deposit unutilised gain in CGAS at a notified bank by the due date. Missed deadline = lost exemption.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M12 8v4l2 2"/></svg></div><h3>Section 50C Stamp Duty Override</h3><p>If property sale consideration is less than 110% of stamp duty value, Section 50C deems stamp duty value as sale consideration. We compute both to identify when valuation officer reference under Section 50C(2) is warranted.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>Surcharge Cap of 15% on Section 111A/112A/112</h3><p>Above Rs 2 crore total income, surcharge at 25% or 37% applies normally; CBDT FAQ confirms 15% cap on capital gains from these sections. DIY platforms occasionally apply the higher rate.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3z"/><path d="M9 9h6v6H9z"/></svg></div><h3>Loss Set-Off Across Schedules</h3><p>STCL set off against any STCG or LTCG; LTCL only against LTCG. VDA losses cannot offset anything. Schedule CYLA, BFLA, and CFL must reconcile to the rupee.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting handles HNI capital gains across India. City-specific ITR for Capital Gains pages are available for <a href="/itr-for-capital-gains/pune">Pune</a>, <a href="/itr-for-capital-gains/mumbai">Mumbai</a>, <a href="/itr-for-capital-gains/delhi">Delhi</a>, and <a href="/itr-for-capital-gains/gurugram">Gurugram</a>. NRI investors with India-source capital gains are served via our ITR for NRIs service.</p>
<p style="margin-top:14px;"><strong>Outcome proof:</strong> Two HNI engagements in FY 2024-25 closed with combined tax savings of Rs 22 lakh - (a) property indexation choice optimisation on a 2009-acquired Mumbai flat saving Rs 7.85 lakh, and (b) startup ESOP perquisite/capital gains split with Section 80-IAC deferral validation saving Rs 14 lakh in dry-tax exposure.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Equity vs Property vs Crypto vs ESOP - Capital Gains Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Listed Equity / Equity MF</th><th>Property (Land/Building)</th><th>Crypto VDA</th><th>ESOP (Listed)</th><th>ESOP (Unlisted)</th></tr></thead>
                    <tbody>
                        
<tr><td>Governing Section</td><td>Sec 111A (STCG), Sec 112A (LTCG)</td><td>Sec 112 (LTCG); Slab (STCG)</td><td>Sec 115BBH</td><td>Sec 17(2)(vi) + Sec 111A/112A</td><td>Sec 17(2)(vi) + Sec 112</td></tr>
<tr><td>Holding Period for LTCG</td><td>12 months</td><td>24 months</td><td>Not applicable</td><td>12 months from allotment</td><td>24 months from allotment</td></tr>
<tr><td>STCG Rate</td><td>20%</td><td>Slab rate</td><td>30% (no STCG/LTCG split)</td><td>20%</td><td>Slab rate</td></tr>
<tr><td>LTCG Rate</td><td>12.5% above Rs 1.25 lakh exemption</td><td>12.5% without indexation OR 20% with (resident pre-23 Jul 2024 choice)</td><td>30%</td><td>12.5% above Rs 1.25 lakh</td><td>12.5% without indexation</td></tr>
<tr><td>Indexation</td><td>NO (post 23 Jul 2024)</td><td>YES if pre-23 Jul 2024 acquisition (resident only)</td><td>NO</td><td>NO</td><td>NO</td></tr>
<tr><td>Cost of Acquisition</td><td>Pre-2018: higher of cost or 31-Jan-2018 FMV</td><td>Cost + improvement</td><td>Original purchase only</td><td>FMV at exercise date</td><td>FMV at exercise per merchant banker</td></tr>
<tr><td>Loss Set-Off</td><td>STCL: vs any CG; LTCL: vs LTCG only; carry 8 yrs</td><td>Same as equity</td><td>NONE allowed</td><td>Same as equity</td><td>STCL/LTCL set-off allowed normally</td></tr>
<tr><td>Reinvestment Exemption</td><td>Sec 54F (entire net consideration in 1 house)</td><td>Sec 54 (residential property), Sec 54EC (Rs 50L bonds)</td><td>NONE</td><td>Sec 54F if applicable</td><td>Sec 54F if applicable</td></tr>
<tr><td>ITR Schedule</td><td>Schedule 112A line-item</td><td>Schedule CG</td><td>Schedule VDA</td><td>Schedule 112A + Salary</td><td>Schedule CG + Salary</td></tr>
<tr><td>Section 87A Rebate</td><td>NOT available on 112A LTCG</td><td>Available if total income within rebate cap</td><td>NOT available on Sec 115BBH</td><td>NOT on 112A LTCG</td><td>Available if applicable</td></tr>


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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <p>HNIs frequently need adjacent compliance work. We bundle these:</p>
<ul>
<li><a href="/income-tax-return">Income Tax Return (general)</a> - end-to-end ITR-1 to ITR-7 filing for individuals, HUF, and businesses</li>
<li><a href="/itr-for-property-sale">ITR for Property Sale</a> - focused property capital gains with Section 50C and indexation comparison</li>
<li><a href="/itr-for-crypto-traders">ITR for Crypto Traders</a> - Schedule VDA build and Section 194S TDS reconciliation</li>
<li><a href="/itr-for-fno-trader">ITR for F-and-O Traders</a> - business income vs capital gains classification</li>
<li><a href="/itr-for-salary">ITR for Salary</a> - salary returns with ESOP perquisite and capital gains add-on</li>
<li><a href="/tax-planning-services">Tax Planning Services</a> - advance tax, regime selection, reinvestment timing</li>
<li><a href="/income-tax-notice-for-defective-return">Income Tax Notice for Defective Return</a> - Section 139(9) response for Schedule VDA mismatch</li>
<li><a href="/itr-for-business">ITR for Business</a> - business income return for proprietorship and partnerships</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts and Rules:</strong></p>
<ul>
<li>Income Tax Act 1961 - applies to AY 2026-27 (FY 2025-26 income) per Section 536(2)(c) of ITA 2025</li>
<li>Income Tax Act 2025 - applies to Tax Year 2026-27 onwards (FY 2026-27 income from 1 April 2026)</li>
<li>Income Tax Rules 1962 - Rule 11UA (FMV of unquoted shares); Rule 3(8) (ESOP FMV computation)</li>
<li>Finance (No. 2) Act 2024 - capital gains rate restructure effective 23 July 2024</li>
<li>Finance Act 2022 - introduced Sections 115BBH and 194S for VDA</li>
<li>CBDT Notification 70/2025 - CII for FY 2025-26 = 363</li>
<li>CBDT FAQ on Budget 2024 capital gains regime (PIB PRID 2036604, 23 July 2024)</li>
</ul>
<p style="margin-top:18px;"><strong>Key Penalty Provisions for Capital Gains Filers:</strong></p>
<ul>
<li>Section 234F late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
<li>Section 234A interest: 1% per month from 1 August 2026 on unpaid tax</li>
<li>Section 234B interest: 1% per month for advance tax shortfall</li>
<li>Section 234C interest: 1% per month for deferred advance tax instalments</li>
<li>Section 270A: 50% under-reporting penalty; 200% misreporting penalty</li>
<li>Section 271AAC: 60% penalty on undisclosed income under Section 68 to 69D</li>
</ul>
<p style="margin-top:18px;"><strong>Regulatory Reference Table:</strong></p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Provision</th><th>What It Says</th><th>Capital Gains Impact</th></tr></thead>
<tbody>
<tr><td>Section 45 ITA 1961</td><td>Charging Section - profits from transfer of capital asset</td><td>Foundational provision; year of transfer triggers tax</td></tr>
<tr><td>Section 47</td><td>Transfers not regarded as transfer</td><td>Gift to relative, partition of HUF, conversion of bonds - exempt from CG</td></tr>
<tr><td>Section 48</td><td>Mode of computation including indexation</td><td>CII = 363 for FY 2025-26 (Notification 70/2025); indexation only on pre-23 Jul 2024 property choice</td></tr>
<tr><td>Section 49</td><td>Cost in special cases (gift, inheritance)</td><td>Deemed cost = previous owner's cost; holding period includes previous owner</td></tr>
<tr><td>Section 50C</td><td>Stamp duty value vs sale consideration</td><td>If sale less than 110% of stamp duty, deemed sale = stamp duty value</td></tr>
<tr><td>Section 50AA</td><td>Specified mutual funds and market-linked debentures</td><td>Always slab rate; no LTCG benefit (post 1 April 2023 debt MF)</td></tr>
<tr><td>Section 54 ITA 1961</td><td>Residential property to residential property reinvestment</td><td>Cap Rs 10 crore; 1 year before to 2 years after (purchase) or 3 years (construction); 3-year lock-in</td></tr>
<tr><td>Section 54EC ITA 1961</td><td>Land/building LTCG to NHAI/REC/PFC/IRFC bonds</td><td>Cap Rs 50 lakh per FY combined; 6-month window; 5-year lock-in</td></tr>
<tr><td>Section 54F ITA 1961</td><td>Other LTCA to one residential property</td><td>Entire NET CONSIDERATION; cap Rs 10 crore; disqualified if more than 1 residential property owned</td></tr>
<tr><td>Section 74</td><td>Loss set-off and carry forward</td><td>STCL vs any CG; LTCL only vs LTCG; carry 8 years</td></tr>
<tr><td>Section 111A ITA 1961</td><td>STCG on listed equity, equity MF, business trust</td><td>20% (was 15% pre-23 Jul 2024); STT mandatory; 4% cess; surcharge cap 15%</td></tr>
<tr><td>Section 112 ITA 1961</td><td>LTCG on assets other than Section 112A</td><td>12.5% without indexation; resident individual/HUF property choice with 20% indexation</td></tr>
<tr><td>Section 112A ITA 1961</td><td>LTCG on listed equity, equity MF, business trust</td><td>12.5% above Rs 1.25 lakh; pre-2018 grandfathering; no Sec 87A rebate; surcharge cap 15%</td></tr>
<tr><td>Section 115BBH ITA 1961</td><td>Tax on income from VDA transfer</td><td>30% flat; only cost of acquisition deductible; no loss set-off; no carry forward</td></tr>
<tr><td>Section 194S ITA 1961</td><td>TDS on VDA transfer</td><td>1% TDS; Rs 50,000 threshold for specified persons; Rs 10,000 for others</td></tr>
<tr><td>Section 17(2)(vi) ITA 1961</td><td>ESOP perquisite at exercise</td><td>FMV at exercise minus exercise price taxed as salary; TDS under Section 192</td></tr>
<tr><td>Section 80-IAC ITA 1961</td><td>Eligible startup deduction</td><td>DPIIT-recognised startups; ESOP perquisite tax deferral up to 5 years</td></tr>
<tr><td>Section 234F</td><td>Late filing fee (Section 428 of ITA 2025)</td><td>Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh)</td></tr>
<tr><td>Section 139(9)</td><td>Defective return notice</td><td>Auto-trigger if Schedule VDA receipts less than 26AS Sec 194S receipts</td></tr>
<tr><td>Section 67 + Schedule VII ITA 2025</td><td>Capital gains under new Income Tax Act</td><td>Effective FY 2026-27; consolidates Sections 45-55A of 1961 Act</td></tr>
<tr><td>CBDT Notification 70/2025</td><td>CII for FY 2025-26</td><td>CII = 363; binding for indexation calculations</td></tr>
</tbody></table></div>
<p style="margin-top:14px;font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final fees depend on the scope of work, asset complexity, and the specific facts of your case. Government statutory fees are payable to the Government and are subject to change. Patron Accounting fees are exclusive of GST and Government charges. Please contact us for a customised quote.</em></p>

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
                    <p class="faq-expanded__lead">Top questions HNI investors ask before filing capital gains ITR for AY 2026-27.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should I file for capital gains - ITR-2 or ITR-3?</h3>
                        <div class="faq-expanded__a"><p>ITR-2 is mandatory if you have capital gains and no business income. This covers most individual investors with equity, mutual funds, property, crypto, and ESOP exits. ITR-3 is required if you have business or professional income alongside capital gains - F-and-O trading, intraday equity, proprietary business, or partnership share. ITR-1 is not allowed if your LTCG under Section 112A exceeds Rs 1.25 lakh or you have any other capital gains.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the new STCG and LTCG rates from 23 July 2024?</h3>
                        <div class="faq-expanded__a"><p>STCG on listed equity, equity mutual funds, and business trust units (Section 111A): 20 percent. LTCG on the same assets (Section 112A): 12.5 percent on gains exceeding Rs 1.25 lakh per FY. LTCG on other assets including property, gold, unlisted shares (Section 112): 12.5 percent without indexation. Plus 4 percent cess. Surcharge capped at 15 percent. Budget 2025 and Budget 2026 made no changes. Hinglish - Capital gains pe tax kaise lagega: equity STCG 20%, LTCG 12.5% above Rs 1.25 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does pre-2018 equity grandfathering work under Section 112A?</h3>
                        <div class="faq-expanded__a"><p>For listed equity shares and equity-oriented mutual fund units acquired before 1 February 2018, the cost of acquisition is the higher of actual purchase price or fair market value on 31 January 2018, capped at the actual sale price. This protects gains accrued before 1 February 2018 from Section 112A LTCG tax. The grandfathering operates per acquisition lot, not per ISIN. Equity ledgers must be rebuilt lot-by-lot using broker contract notes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I still use indexation for property sale after 23 July 2024?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only if you are a resident individual or HUF and the property was acquired before 23 July 2024. You can choose between 12.5 percent without indexation or 20 percent with indexation using CII 363 for FY 2025-26, whichever produces lower tax. For properties acquired on or after 23 July 2024, only 12.5 percent without indexation applies. NRIs cannot use indexation. Hinglish - Property bechne pe kitna tax: 12.5% bina indexation ya 20% with indexation, jo kam ho.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are mutual fund redemptions taxed - equity vs debt?</h3>
                        <div class="faq-expanded__a"><p>Equity-oriented MF (65 percent or more in equity): same as listed equity - Section 111A 20 percent STCG and Section 112A 12.5 percent LTCG above Rs 1.25 lakh. Hybrid MF (35 to 65 percent equity): 24-month holding period; STCG at slab; LTCG at Section 112 12.5 percent. Debt MF acquired on or after 1 April 2023: always slab rate under Section 50AA. Debt MF acquired before 1 April 2023: 36-month holding for LTCG at Section 112 12.5 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is crypto taxed under Section 115BBH and Section 194S?</h3>
                        <div class="faq-expanded__a"><p>All gains from transfer of virtual digital assets are taxed at flat 30 percent under Section 115BBH plus cess plus surcharge. No holding period distinction. Only cost of acquisition is deductible. No loss set-off intra-VDA or against other heads. No carry forward of losses. Section 194S deducts 1 percent TDS on transfers - Rs 50,000 threshold for specified persons; Rs 10,000 for others. Schedule VDA in ITR-2 or ITR-3 must be filed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is ESOP capital gain calculated after the perquisite tax?</h3>
                        <div class="faq-expanded__a"><p>ESOP is taxed in two stages. At exercise, perquisite under Section 17(2)(vi) equals FMV on exercise date minus exercise price, taxed as salary at slab. Employer deducts TDS under Section 192. At sale, capital gain equals sale price minus FMV on exercise date. Holding period runs from date of allotment, not exercise. Listed shares: 12 months for LTCG. Unlisted: 24 months for LTCG. Section 80-IAC startup employees can defer perquisite tax up to 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the Section 54EC Rs 50 lakh bond limit and 6-month window?</h3>
                        <div class="faq-expanded__a"><p>Section 54EC allows exemption of LTCG on land and buildings if invested in NHAI, REC, PFC, or IRFC bonds within 6 months of transfer. Cap is Rs 50 lakh per FY combined across two FYs straddling the 6-month window. Lock-in is 5 years. Bond interest is taxable at around 5.25 percent per annum. For very large gains, Section 54 residential property and Section 54F can be combined.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Q: Cost of single-asset capital gains ITR?</strong> A: Starting Rs 1,499 at Patron Accounting (Exl GST and Govt. Charges). HNI multi-asset Rs 9,999.</p>
<p><strong>Q: ITR-2 due date for AY 2026-27?</strong> A: 31 July 2026 for non-audit cases.</p>
<p><strong>Q: CII for FY 2025-26?</strong> A: 363 (CBDT Notification 70/2025).</p>
<p><strong>Q: Section 112A exemption limit?</strong> A: Rs 1.25 lakh per FY on listed equity and equity MF LTCG.</p>
<p><strong>Q: Crypto tax rate under Section 115BBH?</strong> A: Flat 30% plus 4% cess plus surcharge; no loss set-off; 1% TDS under Section 194S.</p>
<p><strong>Q: Section 54EC bond cap and window?</strong> A: Rs 50 lakh per FY combined; investment within 6 months; 5-year lock-in.</p>
<p><strong>Q: Section 54F vs Section 54?</strong> A: Section 54 = property to property (gain only). Section 54F = other LTCA to one house (entire net consideration).</p>
<p><strong>Q: Pre-2018 equity grandfathering?</strong> A: Cost = higher of actual price or 31 January 2018 FMV, capped at sale price; per lot, not per ISIN.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Act Now: ITR Deadlines and Capital Gains Forfeiture Risks</h2>
            <div class="content-text">
                
                <p><strong>Why timing matters for capital gains filers:</strong></p>
<ul>
<li><strong>Section 80 (loss carry forward):</strong> If you file your ITR after 31 July 2026, you forfeit the 8-year carry forward of capital losses under Section 74. Rs 5 to 50 lakh of crystallised STCL or LTCL becomes worthless.</li>
<li><strong>Section 54/54F reinvestment:</strong> If your new residential property purchase is still in progress on 31 July 2026, you must deposit the unutilised gain in a Capital Gains Account Scheme (CGAS) at a notified bank by that date. Missed deadline = lost exemption = direct tax liability.</li>
<li><strong>Section 54EC bonds:</strong> 6-month window from sale date. Miss it and you lose the Rs 50 lakh exemption on land or building LTCG.</li>
<li><strong>Schedule VDA mismatch:</strong> Schedule VDA receipts less than Form 26AS Section 194S receipts triggers Section 139(9) defective return automatically. Reconcile every exchange and wallet before filing.</li>
<li><strong>Section 197 lower TDS for property:</strong> Form 13 application takes 21 to 30 working days. Apply before sale execution to avoid Rs 5 to 50 lakh excess TDS lockup.</li>
</ul>
<p style="margin-top:14px;"><strong>Free 15-minute portfolio review.</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a>, WhatsApp <a href="https://wa.me/919459456700" target="_blank" rel="noopener">wa.me/919459456700</a>, or email <a href="mailto:info@patronaccounting.com">info@patronaccounting.com</a>. Send your broker tax P-and-L, MF CAS, property sale deed, exchange CSV, and Form 16. We tell you the exact tax liability and reinvestment options before you pay anything.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Capital Gains ITR with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF !important;">Capital gains filing for an HNI portfolio is not a single-form exercise. It is coordination across ten or more discrete tax sections - Section 111A, 112A, 112, 115BBH, 17(2)(vi), 50C, 50AA, 54, 54F, 54EC, 80-IAC, 87A, 234F. One wrong allocation can cost you Rs 5 to 15 lakh on a single transaction.</p>
<p style="color:#FFFFFF !important;">Patron Accounting has filed multi-asset capital gains ITRs for HNI investors since 2019. Our CA and CS team reads your broker P-and-L, AIS, Schedule VDA, and Form 16 perquisite line item before quoting tax. We compute property indexation under both methods, rebuild equity ledgers lot-by-lot for pre-2018 grandfathering, reconcile every Section 194S TDS line item, and structure Section 54/54F/54EC reinvestment to legally minimise your liability.</p>
<p style="color:#FFFFFF !important;">Free 15-minute portfolio review. No obligation. Send your documents and get the exact tax liability and reinvestment options before you pay anything. The 31 July 2026 ITR-2 deadline is fixed - the loss carry forward and reinvestment exemptions you preserve depend entirely on filing on time.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20capital%20gains%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Capital%20Gains%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Capital%20Gains%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Capital Gains ITR Filing in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">City-specific capital gains ITR filing for resident individuals and HUFs across Pune, Mumbai, Delhi, and Gurugram - with same-day pickup of broker P-and-L, sale deed, and Form 16.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Capital Gains ITR Filing - Office Cities</div>
    <div class="pa-block-sub">In-person CA review and document handover at our Pune, Mumbai, Delhi, and Gurugram offices.</div>
    <div class="pa-city-grid">
        <a href="/itr-for-capital-gains/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-capital-gains/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-capital-gains/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/itr-for-capital-gains/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end income tax compliance support beyond capital gains.</div>
    <div class="pa-cross-grid">
        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-property-sale" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-crypto-traders" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Crypto Traders</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-fno-trader" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for F-and-O Traders</div><div class="pa-card-sub">India</div></div></a>
        <a href="/itr-for-salary" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed quarterly during ITR season (April to September) and after every Union Budget (typically February). Rates, CII values, Section 54EC limits, and Income Tax Act 2025 transition mappings are kept current. For source citations: Income Tax Act 1961, Income Tax Act 2025, Income Tax Rules 1962, Finance (No. 2) Act 2024, CBDT Notification 70/2025 (CII for FY 2025-26 = 363), and CBDT FAQ on Budget 2024 capital gains regime (PIB PRID 2036604).</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<!-- <div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection