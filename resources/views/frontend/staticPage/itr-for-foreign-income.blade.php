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
    <title>Foreign Income ITR: Sec 5, DTAA, FA</title>
    <meta name="description" content="Foreign income ITR for resident Indians. Schedule FA, DTAA Form 67 FTC, Section 90/91, Black Money Act compliance. Starts at Rs 6,499.">
    <link rel="canonical" href="/itr-for-foreign-income">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Foreign Income ITR 2026: Sec 5, DTAA, FA | Patron Accounting">
    <meta property="og:description" content="Foreign income ITR for resident Indians. Schedule FA, DTAA Form 67 FTC, Section 90/91, Black Money Act compliance. Starts at Rs 6,499.">
    <meta property="og:url" content="/itr-for-foreign-income/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-foreign-income-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Foreign Income ITR 2026: Sec 5, DTAA, FA | Patron Accounting">
    <meta name="twitter:description" content="ITR for resident Indians earning abroad. Schedule FA, DTAA Form 67, Black Money Act. Starts at Rs 6,499.">
    <meta name="twitter:image" content="/images/itr-for-foreign-income-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/itr-for-foreign-income#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Foreign Income", "item": "/itr-for-foreign-income" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/itr-for-foreign-income#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Are Indian residents taxed on global income?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Resident and Ordinarily Resident (ROR) Indians are taxed on global income under Section 5(1) - both Indian-source and foreign-source. Resident but Not Ordinarily Resident (RNOR) are taxed only on Indian-source income plus foreign income from a business controlled in India. Non-Resident Indians (NRI) are taxed only on Indian-source income. Section 6 determines residency via the 182-day primary test or the 60+365-day test (modified to 120 days for high-income PIO)."
              }
            },
            {
              "@type": "Question",
              "name": "Is Schedule FA mandatory for residents with foreign assets?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes for ROR taxpayers holding any foreign asset. RNORs and NRIs are exempt. Schedule FA reports foreign holdings on calendar year basis (1 January to 31 December preceding AY) - foreign bank accounts, equity, mutual funds, immovable property, beneficial interest. Peak balance, closing balance, dividends, sale proceeds. Filed in ITR-2 or ITR-3. Black Money Act Section 43 imposes Rs 10 lakh per AY penalty for non-disclosure (Rs 20 lakh exemption from 1 October 2024 for movable assets)."
              }
            },
            {
              "@type": "Question",
              "name": "How to claim DTAA tax credit via Form 67?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Three steps. Compute India tax on foreign income. File Form 67 online on incometax.gov.in BEFORE submitting ITR - declares foreign income, foreign tax paid, FTC claimed under Section 90 (DTAA) or Section 91, per Rule 128. Report Schedule FSI (head-wise with country code, TIN, foreign tax, DTAA article) and Schedule TR (tax relief summary). FTC is the lower of foreign tax converted at Rule 115 TTBR or India tax payable on same income, country-by-country. Late Form 67 results in FTC rejection."
              }
            },
            {
              "@type": "Question",
              "name": "How is foreign salary taxed for an Indian resident?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For ROR: foreign salary is fully taxable in India under the Salary head, regardless of where paid or received. Add gross foreign salary converted at Rule 115 TTBR of last day of preceding month. Apply slab rates and Section 87A rebate where eligible. Foreign Tax Credit available via Form 67 for foreign tax withheld. India-USA DTAA Article 15, India-UK Article 16, India-Singapore Article 14 typically allocate taxing right to country of physical presence and residence. Schedule FA mandatory for foreign bank account."
              }
            },
            {
              "@type": "Question",
              "name": "Are foreign mutual funds taxable in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes for ROR. Foreign mutual funds and foreign-domiciled equity instruments held by India residents are taxed at slab as Income from Other Sources for distributions and dividends. On sale: Long-Term Capital Gains under Section 112 at 12.5 percent without indexation if holding above 24 months; Short-Term Capital Gains at slab rate. NOT covered by Section 112A which is for Indian listed equity only. Schedule FA discloses holdings on calendar year basis. Foreign withholding gets FTC via Form 67."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Black Money Act penalty for missed foreign asset reporting?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Black Money Act 2015 Section 43 imposes Rs 10 lakh per AY penalty for missed Schedule FA disclosure. Rs 20 lakh exemption from 1 October 2024 for foreign movable assets below that value. Section 41 imposes 120 percent (3x tax) penalty plus tax on undisclosed foreign income. Section 50 carries imprisonment 3 to 10 years for willful evasion. Mitigation routes include Section 139(8A) updated return (24-month window with 25-50 percent additional tax) and Section 70 voluntary disclosure scheme."
              }
            },
            {
              "@type": "Question",
              "name": "When does an Indian citizen become RNOR instead of ROR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "RNOR if resident under Section 6 BUT fails one or both of: (a) resident in 2 of last 10 PYs, AND (b) 730+ days stay in last 7 PYs. Returning NRIs after 8+ years abroad typically fail both for 2 to 3 years post-return - giving RNOR window where foreign income earned and received outside India is NOT taxable in India. After RNOR window expires, become ROR with full global income taxation. Section 6(1A) deemed residents are also RNOR by default."
              }
            },
            {
              "@type": "Question",
              "name": "How to convert foreign currency for ITR reporting?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Per Rule 115 of the Income Tax Rules 1962. For foreign income: use State Bank of India Telegraphic Transfer Buying Rate (TTBR) of the LAST DAY of the PRECEDING MONTH. For example, salary received on 15 March 2026 uses TTBR of 28 February 2026. Schedule FA asset values use SPOT rate at the relevant date. Maintain conversion ledger as documentation. AIS data exchange uses similar timing - mismatched rates trigger NUDGE notices."
              }
            }
          ],
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30"
        },
        {
          "@type": "Service",
          "@id": "/itr-for-foreign-income#service",
          "name": "ITR Filing for Resident Indians with Foreign Income",
          "alternateName": ["Foreign Income ITR Filing", "Global Income Tax Return", "Schedule FA Filing Service", "DTAA Form 67 FTC Service"],
          "url": "/itr-for-foreign-income",
          "description": "End-to-end ITR-2 / ITR-3 filing for Resident and Ordinarily Resident (ROR) Indians with foreign income - foreign salary, consulting fees, dividends, interest, mutual funds, rental property, pensions, royalties. Includes Section 5 global income computation, Section 6 residency determination, Schedule FA calendar-year disclosure, Schedule FSI / TR foreign source income reporting, Form 67 DTAA Foreign Tax Credit under Section 90/91 + Rule 128, Black Money Act compliance, and NUDGE Campaign response for AY 2026-27.",
          "serviceType": "Tax Return Filing",
          "category": "Direct Tax Compliance",
          "provider": { "@id": "/#organization" },
          "areaServed": [
            { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
            { "@type": "Country", "name": "United States" },
            { "@type": "Country", "name": "United Kingdom" },
            { "@type": "Country", "name": "Singapore" },
            { "@type": "Country", "name": "United Arab Emirates" },
            { "@type": "Country", "name": "Canada" },
            { "@type": "Country", "name": "Australia" },
            { "@type": "Country", "name": "Germany" }
          ],
          "audience": {
            "@type": "Audience",
            "audienceType": "Resident and Ordinarily Resident Indians earning foreign income - remote workers for foreign employers, consultants billing foreign clients, returning NRIs in RNOR transition, founders of Delaware C-Corp or Singapore Pte Ltd entities, holders of foreign mutual funds and ETFs, US 401(k) and foreign pension recipients, foreign rental property owners, NUDGE Campaign notice recipients, Black Money Act exposure cases"
          },
          "about": [
            { "@type": "Thing", "name": "Income Tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India" },
            { "@type": "Thing", "name": "Double Taxation", "sameAs": "https://en.wikipedia.org/wiki/Double_taxation" },
            { "@type": "Thing", "name": "Tax Residence", "sameAs": "https://en.wikipedia.org/wiki/Tax_residence" }
          ],
          "termsOfService": "/terms",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Foreign Income ITR Filing Plans",
            "itemListElement": [
              { "@type": "Offer", "name": "Foreign Salary Single-Country", "price": "6499", "priceCurrency": "INR", "url": "/itr-for-foreign-income", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "Multi-Country Foreign Income with Schedule FA", "price": "9999", "priceCurrency": "INR", "url": "/itr-for-foreign-income", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "HNI Multi-Stream Global Income", "price": "14999", "priceCurrency": "INR", "url": "/itr-for-foreign-income", "availability": "https://schema.org/InStock" }
            ]
          },
          "mainEntityOfPage": "/itr-for-foreign-income"
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
                        Global Income ITR Filing for Resident Indians
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Foreign payslips, foreign bank statements, foreign broker reports (E-Trade, IBKR, DBS, HSBC), Form 1040 / SA100 / IR8A, TRC, Form 10F</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 6,499 for foreign salary single-country; Rs 9,999 for multi-country with Schedule FA and Form 67</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Resident and Ordinarily Resident (ROR) under Section 6 with any foreign income - salary, consulting, dividends, interest, MF, rental, pension, royalty</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 21 working days; 31 July 2026 for AY 2026-27; Form 67 BEFORE ITR submission for FTC</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Foreign%20Income%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Foreign%20Income%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20foreign%20income%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Foreign Income'/>
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
                                
<option value="itr-for-foreign-income" selected>ITR for Foreign Income</option>
<option value="income-tax-return">Income Tax Return Filing</option>
<option value="itr-filing-for-freelancers-professionals">ITR for Professionals / Freelancers</option>
<option value="itr-for-capital-gains">ITR for Capital Gains (Foreign MF)</option>
<option value="esop-management-and-compliance-services">ESOP Management and Compliance</option>
<option value="tax-planning-services">Tax Planning (DTAA / RNOR)</option>
<option value="income-tax-notice-for-defective-return">Defective Return Notice (Sec 139(9))</option>
<option value="income-tax-notice">Income Tax Notice Response</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Bengaluru-based software engineer on a US Delaware C-Corp payroll. No Indian Form 16. Patron handled the W-2 conversion at Rule 115 TTBR, filed Form 67 BEFORE the ITR for full FTC on US federal AND state tax, and reconciled the US bank account in Schedule FA. ITR-2 filed in 9 days. Saved Rs 1.8 lakh in foreign tax credit that I had nearly forfeited by filing Form 67 late myself.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Aarav S</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Software Engineer (US Payroll), Bengaluru</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">CA in Pune billing US and Singapore consulting clients. Gross receipts FY 2024-25 around Rs 58 lakh. Patron evaluated Section 44ADA presumptive vs actual books and recommended 44ADA - saved Rs 4.2 lakh on tax. Filed Form 67 for US client withholding, Schedule FA for receivables in foreign accounts, and GST LUT for export of services. Three years of clean filing.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PJ</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya J</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Chartered Accountant, Pune (foreign clients)</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Returned to India in October 2024 after 9 years in Singapore. Continuing Singapore rental and dividend income, US ETF holdings, old US 401(k). Patron documented my RNOR window for AY 2025-26 and AY 2026-27 - all foreign income exempt from India tax during transition. Saved Rs 12 lakh of unnecessary tax over 2 years versus the wrong ROR filing my previous CA had recommended.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohan M</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Returning NRI (RNOR), Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Got a NUDGE Campaign email from CBDT about my US brokerage account never reported in Schedule FA for FY 2023-24. Patron filed Section 139(8A) updated return for AY 2024-25 with full Schedule FA, applied the Rs 20 lakh movable-asset exemption (post 1 Oct 2024 amendment), and avoided Black Money Act Section 43 penalty. Cleared the NUDGE notice in 14 days. Reliable and discreet.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KN</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Kavita N</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NUDGE Response (US brokerage), Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
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
                    <p>Real resident Indians earning abroad who saved tax with Section 6 RNOR documentation, Form 67 FTC discipline, and Schedule FA accuracy.</p>
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
<a href="#comparison-section" class="toc-btn">DIY vs CA</a>
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
            <h2 class="section-title">Foreign Income ITR Overview</h2>
            <div class="content-text">
                <p><strong>TL;DR:</strong> Resident and Ordinarily Resident (ROR) Indians are taxed on GLOBAL income under Section 5(1) - Indian-source plus foreign-source. RNORs are exempt from foreign income earned and received outside India. ITR-2 (or ITR-3 with business) is mandatory if any foreign income or asset exists. Schedule FA reports foreign assets on calendar year basis. Schedule FSI plus Form 67 enables Foreign Tax Credit under Section 90/91 + Rule 128. Filing deadline 31 July 2026 for AY 2026-27.</p>

                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Provisions</td><td>Income Tax Act 1961 - Sections 5 (scope), 6 (residency), 9 (deeming), 90 (DTAA), 91 (unilateral), 234F (late fee); Rule 115 (TTBR), Rule 128 (FTC); Black Money Act 2015 - Sections 41, 43, 50; FEMA 1999</td></tr>
                        <tr><td>Residency Scope</td><td>ROR taxed on global income; RNOR exempt from foreign income earned + received abroad; NRI taxed only on India-source income</td></tr>
                        <tr><td>Section 6 Tests</td><td>182-day rule (primary) OR 60+365-day rule (modified to 120+365 if Indian-source income greater than Rs 15 lakh for visiting Indian citizen / PIO); Section 6(1A) deemed resident for greater than Rs 15 lakh Indian income with no tax abroad</td></tr>
                        <tr><td>ROR vs RNOR Test</td><td>ROR if (resident in 2 of last 10 PYs) AND (730+ days in last 7 PYs); else RNOR</td></tr>
                        <tr><td>Schedule FA</td><td>Mandatory for ROR; calendar year basis (Jan-Dec preceding AY); peak balance, closing balance, dividends, sale proceeds; ITR-1 / ITR-4 not compatible</td></tr>
                        <tr><td>Schedule FSI / TR / Form 67</td><td>FSI: financial year basis (Apr-Mar); FY by country code, TIN, foreign tax paid, DTAA article. TR: summary aggregate. Form 67: BEFORE ITR submission for FTC</td></tr>
                        <tr><td>Cost</td><td>Starting Rs 6,499 single-country foreign salary; Rs 9,999 multi-country with Schedule FA + Form 67; Rs 14,999 HNI multi-stream at Patron Accounting</td></tr>
                        <tr><td>Penalty</td><td>Rs 5,000 late filing under Section 234F; Rs 10 lakh per AY under Black Money Act Section 43 for missed Schedule FA; 120 percent (3x tax) under Section 41; imprisonment 3 to 10 years under Section 50</td></tr>
                        <tr><td>Authority</td><td>Central Board of Direct Taxes (CBDT); Foreign Assets Investigation Unit (FAIU) for BMA cases</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;">A senior software engineer in Bengaluru on a US Delaware C-Corp payroll, a CA in Pune billing US and Singapore consulting clients, a returning NRI with continuing US 401(k) and Singapore rental, a holder of US ETFs and UK mutual funds - each face a different combination of Section 5 scope, Section 6 residency, DTAA articles, and Schedule FA disclosure. Patron Accounting has filed foreign income ITRs for over 600 ROR Indians across 35 countries since 2019.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS ITR FOR CAPITAL GAINS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is Foreign Income ITR Filing</h2>
            <div class="content-text">
                <p>Foreign income ITR filing means computing global income for Indian Resident and Ordinarily Resident (ROR) taxpayers under Section 5, reporting it head-wise in ITR-2 or ITR-3 with Schedule FA (foreign assets, calendar year), Schedule FSI (foreign source income, financial year), and Schedule TR (tax relief), and claiming Foreign Tax Credit through Form 67 filed BEFORE the ITR.</p>

                <p>Global income taxation for residents follows three pillars: the scope rule (Section 5: ROR taxed worldwide, RNOR partial, NRI India-source only), the source rule (Section 9: certain incomes deemed to accrue in India regardless of where received), and the relief mechanism (Section 90 DTAA-based or Section 91 unilateral). Each foreign income stream - salary, consulting fees, dividends, interest, mutual fund redemption, rental, pension, royalty - has its own DTAA article, withholding pattern, and India tax treatment. Schedule FA disclosure is mandatory for any ROR holding foreign assets and runs on calendar year basis (Jan-Dec) - distinct from Schedule FSI (Apr-Mar). Form 67 must be filed BEFORE the ITR for any Foreign Tax Credit claim under Rule 128. <a href="https://en.wikipedia.org/wiki/Income_tax_in_India" target="_blank" rel="noopener nofollow">Read more about Income Tax in India on Wikipedia</a>.</p>

                <h3 style="margin-top:24px;">Key Terms Resident Indians with Foreign Income Must Know</h3>

                <p><strong>Section 5 - Scope of Total Income:</strong> Defines what income is taxable for each residency status. ROR: global income. RNOR: India income plus foreign income from business controlled in India. NRI: only India-source income.</p>

                <p><strong>Section 6 - Residency Determination:</strong> 182-day rule (primary). OR 60+365-day rule - resident if stay in India is 60+ days in PY AND 365+ days in 4 preceding PYs. The 60-day extends to 120 days if Indian citizen / PIO with Indian-source income greater than Rs 15 lakh. The 60-day extends to 182 days if Indian citizen leaving India for employment abroad. Section 6(1A) deems Indian citizens with greater than Rs 15 lakh Indian income and no tax abroad to be Indian residents.</p>

                <p><strong>ROR vs RNOR:</strong> ROR (Resident and Ordinarily Resident): resident in 2 of last 10 preceding PYs AND 730+ days stay in last 7 preceding PYs. RNOR: any other resident (typically returning NRIs in transition years - 2 to 3 year window).</p>

                <p><strong>Schedule FA / FSI / TR + Form 67:</strong> Schedule FA reports foreign assets on calendar year basis. Schedule FSI reports foreign source income on financial year basis with country code, TIN, foreign tax. Schedule TR aggregates by country. Form 67 declares foreign income, foreign tax paid, and FTC claimed under Rule 128 - filed BEFORE the ITR.</p>

                <p><strong>Rule 115 + Rule 128:</strong> Rule 115 - foreign income converted at SBI Telegraphic Transfer Buying Rate (TTBR) of last day of preceding month; Schedule FA assets at spot rate. Rule 128 - FTC = lower of (foreign tax) or (India tax on same income), country-by-country, source-by-source.</p>

                <p><strong>Black Money Act 2015 + NUDGE Campaign:</strong> Section 43 of BMA - Rs 10 lakh per AY penalty for missed Schedule FA (Rs 20 lakh exemption from 1 Oct 2024 for movable assets). Section 41 - 120 percent (3x tax) plus tax on undisclosed foreign income. Section 50 - imprisonment 3 to 10 years. NUDGE Campaign 2025 - CBDT outreach via email / SMS to taxpayers with potential missed foreign asset reporting based on CRS data exchange.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign Income Types and Tax Treatment</h2>
            <div class="content-text">
                <p>Different foreign income streams have different DTAA articles, withholding patterns, and India tax treatment. ITR-2 generally; ITR-3 if professional / business income. Schedule FA mandatory for any ROR holding foreign assets.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Foreign Income Type</th><th>Indian Tax Head</th><th>DTAA Article</th><th>India Rate</th><th>Schedule FA</th></tr></thead>
                    <tbody>
                        <tr><td>Foreign salary (resident on foreign payroll)</td><td>Salary</td><td>Article 14 / 15 - Dependent Personal Services</td><td>Slab</td><td>Yes (foreign bank a/c)</td></tr>
                        <tr><td>Foreign consulting fees (resident professional billing abroad)</td><td>Profits from Business / Profession; Sec 44ADA option</td><td>Article 14 - Independent Personal Services</td><td>Slab; presumptive 50 percent of receipts</td><td>Yes (foreign receivables)</td></tr>
                        <tr><td>Foreign dividends</td><td>Income from Other Sources</td><td>Article 10 - Dividends</td><td>Slab; FTC for foreign withholding</td><td>Yes (foreign equity)</td></tr>
                        <tr><td>Foreign bank interest</td><td>Income from Other Sources</td><td>Article 11 - Interest</td><td>Slab; FTC for foreign withholding</td><td>Yes (foreign bank a/c)</td></tr>
                        <tr><td>Foreign mutual fund / ETF redemption (LTCG)</td><td>Capital Gains</td><td>Article 13 - Capital Gains</td><td>Sec 112 12.5 percent w/o indexation; 24-month holding</td><td>Yes (foreign units)</td></tr>
                        <tr><td>Foreign mutual fund / ETF redemption (STCG)</td><td>Capital Gains</td><td>Article 13</td><td>Slab</td><td>Yes (foreign units)</td></tr>
                        <tr><td>Foreign rental property</td><td>Income from House Property (foreign)</td><td>Article 6 - Immovable Property</td><td>NAV minus 30 percent Sec 24(a) plus interest; slab on net</td><td>Yes (foreign immovable property)</td></tr>
                        <tr><td>Foreign pension (US 401(k), UK pension)</td><td>Income from Other Sources</td><td>Article 18 - Pensions / Article 19 - Government Service</td><td>Slab; FTC for foreign tax</td><td>Yes (pension a/c balance)</td></tr>
                        <tr><td>Foreign royalty / IP licensing</td><td>Income from Other Sources or Business</td><td>Article 12 - Royalties</td><td>Slab; FTC where withholding</td><td>Yes (royalty receivable)</td></tr>
                        <tr><td>Foreign technical fees (Indian consultant abroad)</td><td>Profits from Business / Profession</td><td>Article 12 - Fees for Technical Services</td><td>Slab; FTC for foreign WHT</td><td>Yes (receivable)</td></tr>
                        <tr><td>Foreign trust distribution (resident beneficiary)</td><td>Income from Other Sources</td><td>Source country specific</td><td>Slab; complex - case-by-case</td><td>Yes (beneficial interest)</td></tr>
                        <tr><td>Foreign LLC / partnership share</td><td>Profits from Business; or look-through per DTAA</td><td>Article 7 / Article 14</td><td>Slab; complex</td><td>Yes (partnership interest)</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Statutory due dates AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li>31 July 2026 - non-audit ITR-2 / ITR-3 under Section 139(1)</li>
                    <li>31 October 2026 - audit-case ITR-3 (foreign business / professional with audit threshold)</li>
                    <li>31 December 2026 - belated / revised return Section 139(4) / (5) with Section 234F fee</li>
                    <li><strong>Form 67 - BEFORE ITR submission</strong> for any FTC claim (late Form 67 = FTC rejection)</li>
                    <li>Schedule FA disclosure window: assets held during calendar year 1 January 2025 to 31 December 2025 reported in AY 2026-27 ITR</li>
                    <li>Section 139(8A) updated return - 24 months from AY end (so until 31 March 2028 for AY 2025-26)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Services for Resident Indians with Foreign Income</h2>
            <div class="content-text">
                <p>Six end-to-end deliverables for resident Indians with foreign income - covering foreign salary, foreign consulting, multi-stream HNI portfolios, returning NRI RNOR transitions, and Black Money Act / NUDGE Campaign defense.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Service</th><th>Starting Price</th><th>Inclusions</th></tr></thead>
                    <tbody>
                        <tr><td>Foreign salary single-country (US, UK, Singapore, UAE)</td><td>Rs 6,499</td><td>ITR-2, Schedule FA, Form 67 DTAA FTC, residency memo, Rule 115 TTBR conversion</td></tr>
                        <tr><td>Foreign consulting Section 44ADA (single country)</td><td>Rs 7,999</td><td>ITR-3, Section 44ADA presumptive computation, Schedule FA, Form 67, GST LUT advisory</td></tr>
                        <tr><td>Multi-country foreign income with Schedule FA + Form 67</td><td>Rs 9,999</td><td>Multiple country Schedule FSI, country-wise FTC, multi-DTAA application</td></tr>
                        <tr><td>Returning NRI with RNOR transition</td><td>Rs 9,999</td><td>RNOR window memo, Section 6 residency lock-in, Schedule FA inception planning</td></tr>
                        <tr><td>HNI multi-stream foreign income</td><td>Rs 14,999</td><td>Foreign salary + dividends + capital gains + rental + pension comprehensive</td></tr>
                        <tr><td>NUDGE Campaign response with updated return</td><td>Rs 12,999</td><td>Section 139(8A) updated return for 1 AY, BMA exposure analysis, Schedule FA reconstruction</td></tr>
                        <tr><td>Black Money Act multi-year compliance</td><td>Rs 19,999</td><td>Multi-AY updated returns, Section 70 voluntary disclosure, mitigation memo</td></tr>
                        <tr><td>Section 139(9) defective return cure (foreign income in ITR-1)</td><td>Rs 3,999</td><td>Re-file as ITR-2 within 15-day cure window</td></tr>
                    </tbody>
                </table>
                </div>

                <h3 style="margin-top:24px;">What You Receive</h3>
                <p>Every Patron foreign income engagement closes with this deliverable pack:</p>
                <ul>
                    <li>Filed ITR-2 / ITR-3 (acknowledgement and ITR-V) plus a CA-signed computation sheet</li>
                    <li>Section 6 residency determination memo - ROR vs RNOR vs NRI with day-count and exception analysis</li>
                    <li>Foreign income ledger - country, source, gross amount in foreign currency, INR converted at Rule 115 TTBR, foreign tax withheld</li>
                    <li>Schedule FA worksheet - foreign bank accounts, equity, mutual funds, immovable property, beneficial interest with peak and closing balance</li>
                    <li>Schedule FSI computation - country code, TIN, foreign tax, DTAA article reference, FTC claimed</li>
                    <li>Form 67 acknowledgement (filed BEFORE ITR) plus FTC memo per Rule 128 (lower-of computation country by country)</li>
                    <li>Black Money Act exposure assessment with mitigation pathways and NUDGE Campaign response (where applicable)</li>
                    <li>Old vs new tax regime comparison; TRC (Form 10FA) and Form 10F where required for next-year DTAA claim with foreign payer</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Patron Files Your Foreign Income ITR (7 Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step end-to-end process from Section 6 residency determination through Schedule FA population to ITR-2 / ITR-3 e-verification - typically 7 to 21 working days depending on number of countries and income streams.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Residency Determination under Section 6</h3>
        <p class="step-description">We compute your day-count for the relevant FY plus 4 preceding FYs. Apply primary 182-day test, then 60+365-day test (modified to 120 days if Indian-source income greater than Rs 15 lakh). Test ROR conditions (resident in 2 of last 10 PYs AND 730+ days in last 7 PYs). Identify if Section 6(1A) deemed resident applies. Document RNOR transition for returning NRIs.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 6 Day-Count</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ROR vs RNOR Memo</span>
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
        <h3 class="step-title">Foreign Income Inventory and Source Classification</h3>
        <p class="step-description">Collect all foreign payslips, bank statements, dividend reports, broker statements (E-Trade, Charles Schwab, Interactive Brokers, DBS, HSBC), foreign tax returns. Classify each income stream by India tax head (Salary, IFOS, House Property, Capital Gains, Business / Profession). Apply Section 9 deeming where part of services rendered in India.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Income Head Mapping</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 9 Source Test</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="20" y="30" width="35" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <text x="37.5" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">44ADA</text>
                    <rect x="65" y="30" width="35" height="20" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                    <text x="82.5" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books</text>
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
        <h3 class="step-title">Currency Conversion under Rule 115</h3>
        <p class="step-description">Convert all foreign income to INR using SBI Telegraphic Transfer Buying Rate (TTBR) of the LAST DAY of the PRECEDING MONTH for the income event. Schedule FA asset values use spot rate. Maintain conversion ledger as documentation - mismatched rates trigger NUDGE notices.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TTBR Last Day</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Spot Rate for Assets</span>
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
        <h3 class="step-title">Schedule FA Population on Calendar Year Basis</h3>
        <p class="step-description">Foreign assets held during 1 January to 31 December preceding the AY (NOT financial year). Each foreign bank account, equity holding, mutual fund unit, immovable property, beneficial interest, and trust interest reported separately. Peak balance during year, closing balance as on 31 December, dividends / interest received during calendar year, sale proceeds.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Calendar Year Jan-Dec</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Peak + Closing Balance</span>
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
        <h3 class="step-title">Schedule FSI plus Form 67 Filing for FTC</h3>
        <p class="step-description">Schedule FSI on financial year basis (April-March): country code, TIN / passport, gross foreign income, foreign tax paid, DTAA article reference, FTC claimed. File Form 67 ONLINE on incometax.gov.in BEFORE ITR submission. FTC under Rule 128 = lower of (foreign tax converted at TTBR) or (India tax payable on same income), country by country, source by source.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 67 BEFORE ITR</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rule 128 Lower-Of</span>
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
        <h3 class="step-title">Tax Computation, Regime Selection, Section 44ADA</h3>
        <p class="step-description">Apply correct slab on aggregate global income. Old vs new regime comparison. For resident professionals billing foreign clients, evaluate Section 44ADA 50 percent presumptive (gross receipts up to Rs 75 lakh) versus actual books. Section 87A rebate availability. Surcharge cap on capital gains under Section 111A / 112A / 112.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Old vs New Regime</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 44ADA Decision Memo</span>
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
        <h3 class="step-title">ITR-2 / ITR-3 E-Filing and NUDGE Compliance</h3>
        <p class="step-description">File ITR-2 on incometax.gov.in (or ITR-3 if business / professional foreign income). Schedule HP, CG, IFOS, Schedule FA, Schedule FSI, Schedule TR, Schedule TDS. E-verify within 30 days. Maintain NUDGE-defensible documentation: foreign bank statements, broker confirms, foreign tax certificates, TTBR conversion ledger, Form 67 acknowledgement.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedule FA + FSI + TR</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NUDGE-Defensible Docs</span>
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
            <h2 class="section-title">Document Checklist for Foreign Income ITR</h2>
            <div class="content-text">
                <p>Complete checklist organised by income type. Patron's onboarding form maps each document to the correct ITR schedule, Schedule FA line item, or Form 67 country block.</p>

                <h3 style="margin-top:18px;">A. Identity and Residency</h3>
                <ul>
                    <li>PAN card and Aadhaar (linked, mandatory)</li>
                    <li>Passport (all pages including immigration stamps)</li>
                    <li>Visa copy and work permit (for foreign employment / residence)</li>
                    <li>Day-count log for FY 2025-26 plus preceding 4 FYs (entry / exit dates)</li>
                    <li>Bank account details for refund (Indian resident savings account)</li>
                </ul>

                <h3 style="margin-top:18px;">B. Foreign Salary Documents</h3>
                <ul>
                    <li>Foreign payslips for FY 2025-26 (all 12 months)</li>
                    <li>Foreign year-end summary (US W-2, UK P60, Singapore IR8A, UAE end-of-service)</li>
                    <li>Foreign tax return copy (US Form 1040, UK SA100)</li>
                    <li>Foreign tax payment receipts / withholding certificates</li>
                </ul>

                <h3 style="margin-top:18px;">C. Foreign Consulting / Professional Income</h3>
                <ul>
                    <li>Foreign client invoices (FY 2025-26)</li>
                    <li>FIRC (Foreign Inward Remittance Certificate) from Indian bank</li>
                    <li>Foreign client withholding certificates (Form 1042-S, equivalent)</li>
                    <li>India professional services contract / engagement letter</li>
                    <li>Books of account (if not opting Section 44ADA presumptive)</li>
                </ul>

                <h3 style="margin-top:18px;">D. Foreign Investments and Banking</h3>
                <ul>
                    <li>Foreign bank account statements (full calendar year Jan to Dec)</li>
                    <li>Foreign brokerage statements - E-Trade, Charles Schwab, Interactive Brokers, DBS, HSBC</li>
                    <li>Foreign mutual fund / ETF holding statements</li>
                    <li>Foreign dividend statements (1099-DIV, equivalent)</li>
                    <li>Form W-8BEN copy (US - reduces dividend WHT 30 percent to 25 percent)</li>
                    <li>Foreign capital gains computation - cost, sale price, holding period</li>
                </ul>

                <h3 style="margin-top:18px;">E. Foreign Rental Property and Pensions</h3>
                <ul>
                    <li>Foreign rental agreement and rent receipts</li>
                    <li>Foreign property tax receipts</li>
                    <li>Foreign mortgage interest statement (1098, equivalent)</li>
                    <li>Foreign pension statement (US 401(k), UK pension drawdown)</li>
                    <li>Foreign Social Security statement (if applicable)</li>
                </ul>

                <h3 style="margin-top:18px;">F. DTAA and Reference</h3>
                <ul>
                    <li>Tax Residency Certificate (TRC) of India - Form 10FA</li>
                    <li>Form 10F (treaty-rate claim with foreign payer)</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in (any India-source income)</li>
                    <li>NUDGE Campaign notice (if received)</li>
                    <li>Prior year ITR copies (for residency continuity and brought-forward losses)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Foreign-Income Challenges and Patron Solutions</h2>
            <div class="content-text">
                <h3>Challenge 1: "I am a software engineer in Bengaluru working remotely for a Delaware C-Corp on US payroll. No Indian Form 16. US withholds federal and state tax. How do I file in India?"</h3>
                <p><strong>Solution:</strong> ITR-2 with Schedule Salary populated from US W-2 converted at Rule 115 TTBR. Section 5 ROR taxes the full US salary in India. Section 90 + Rule 128 Foreign Tax Credit for US federal AND state tax via Form 67 (filed BEFORE the ITR). India-USA DTAA Article 14 (Dependent Personal Services) - taxing right depends on physical presence. Schedule FA for the US bank account where salary is credited - peak balance and closing balance as on 31 December 2025. We also evaluate whether services rendered partly in India versus partly in US trigger Section 9 deeming; for continuous Bengaluru-based remote work, the US employer may need to consider permanent establishment exposure.</p>

                <h3 style="margin-top:24px;">Challenge 2: "I am a CA in Pune billing US and Singapore clients via consulting contracts. Gross receipts FY 2025-26 around Rs 62 lakh. US clients deduct withholding tax; Singapore clients do not. Section 44ADA?"</h3>
                <p><strong>Solution:</strong> Yes, Section 44ADA presumptive 50 percent is the optimal route. Rs 62 lakh gross receipts is below Rs 75 lakh threshold (post Finance Act 2024 enhancement). Declare 50 percent (Rs 31 lakh) as taxable income; no books of account required. ITR-3 with Schedule BP. India-USA DTAA Article 14 (Independent Personal Services) - taxable in India as you are India resident; US withholding gets FTC via Form 67 + Rule 128. India-Singapore DTAA Article 14 similar. Schedule FA for any US / Singapore bank account where receivables sit. FIRC documentation from your Indian bank. Advance tax pre-payment under Section 234B / 234C. We also evaluate GST applicability - export of services (zero-rated under IGST Section 16) requires LUT filing.</p>

                <h3 style="margin-top:24px;">Challenge 3: "I returned to India in October 2024 after 8 years in Singapore. I have continuing Singapore dividend and rental income, US ETF holdings worth USD 180,000, and an old US 401(k). What is my position for AY 2026-27?"</h3>
                <p><strong>Solution:</strong> You are likely RNOR for FY 2024-25 (AY 2025-26) AND FY 2025-26 (AY 2026-27), depending on day-count and prior NRI history. RNOR test fails if NOT resident in 2 of last 10 PYs AND NOT 730+ days in last 7 PYs. As 8-year Singapore resident, you almost certainly fail both - giving you RNOR for 2 to 3 transition years. Critical effect: as RNOR, your Singapore rental, US 401(k), and US ETF dividends are NOT taxable in India (foreign income earned + received outside India is exempt). Caveats: (a) US ETF SALES during RNOR period - if shares are SOLD post India return, sale proceeds may flow through Indian bank, complicating exemption; (b) Schedule FA is NOT mandatory for RNOR; (c) Section 9 source rule check - any work performed from India for Singapore employer becomes Indian-source. We file your AY 2026-27 ITR as RNOR with India-source income only and lock in the RNOR window.</p>

                <h3 style="margin-top:24px;">Challenge 4: "I just received an email from CBDT under NUDGE Campaign asking about my foreign assets for FY 2023-24. I have a US brokerage account I never reported in Schedule FA. What do I do?"</h3>
                <p><strong>Solution:</strong> Step 1 - DO NOT IGNORE the email. NUDGE Campaign is a soft prompt before formal Section 148 reassessment notice. Step 2 - assess revised return window: belated / revised return under Section 139(5) for AY 2024-25 expired 31 March 2025. Updated return under Section 139(8A) is available for 24 months from end of relevant AY (so until 31 March 2027 for AY 2024-25), with additional tax of 25 percent to 50 percent of tax + interest. Step 3 - Black Money Act exposure: Section 43 Rs 10 lakh penalty per AY for missed Schedule FA. Mitigation: Rs 20 lakh exemption from 1 October 2024 for foreign movable assets below that value. Step 4 - file the updated return with proper Schedule FA, pay required tax + interest + 25-50 percent additional tax, retain bank statements as documentation. Step 5 - prevent recurrence by filing FY 2024-25 (AY 2025-26) ITR within revised return window and FY 2025-26 (AY 2026-27) before 31 July 2026.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign Income ITR Filing Fees</h2>
            <div class="content-text">
                <p>Fees include CA review and e-verification. GST extra at 18 percent. Volume and complexity discounts apply for multi-country and multi-AY engagements.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 6,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Foreign salary single-country (US, UK, Singapore, UAE)</td><td>Starting from INR 6,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Foreign consulting Section 44ADA (single country)</td><td>Starting from INR 7,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-country foreign income with Schedule FA + Form 67</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Returning NRI with RNOR transition</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>NUDGE Campaign response with updated return (per AY)</td><td>Starting from INR 12,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>HNI multi-stream global income</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Black Money Act multi-year compliance</td><td>Starting from INR 19,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 139(9) defective return cure (foreign income in ITR-1)</td><td>Starting from INR 3,999 (Exl GST and Govt. Charges)</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px; font-size:13px; color:var(--text-muted);"><em>All amounts above are professional fees only and exclude 18 percent GST and any government charges (e.g. e-filing portal challan, TRC issuance fee). Final quotes confirmed after document review and complexity assessment - number of countries, number of income streams, and Black Money Act exposure determine the engagement scope.</em></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign Income ITR Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Engagement</th><th>Working Days</th><th>Statutory Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>Single-country foreign salary</td><td>7-10 days</td><td>31 July 2026 (Form 67 BEFORE ITR)</td></tr>
                        <tr><td>Single-country foreign consulting Section 44ADA</td><td>7-10 days</td><td>31 July 2026</td></tr>
                        <tr><td>Multi-country foreign income with full Schedule FA</td><td>14-21 days</td><td>31 July 2026</td></tr>
                        <tr><td>Returning NRI RNOR transition (2-3 year planning)</td><td>14-21 days</td><td>31 July 2026</td></tr>
                        <tr><td>HNI multi-stream global income</td><td>21-30 days</td><td>31 July 2026</td></tr>
                        <tr><td>NUDGE Campaign response with updated return</td><td>14-21 days</td><td>Section 139(8A) - 24 months from AY end</td></tr>
                        <tr><td>Black Money Act multi-year compliance</td><td>30-45 days</td><td>Section 70 voluntary disclosure timing-dependent</td></tr>
                        <tr><td>Section 139(9) defective return cure</td><td>2-3 days</td><td>15 days from notice date</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Urgency note:</strong> Late-filing fee of Rs 5,000 under Section 234F applies after 31 July 2026 (Rs 1,000 if total income up to Rs 5 lakh). Belated returns lose carry-forward of most losses (Section 80). Form 67 filed AFTER the ITR results in FTC rejection regardless of foreign tax actually paid - typical loss Rs 1 to 5 lakh. Black Money Act Section 43 Rs 10 lakh per AY penalty applies for missed Schedule FA disclosure even when no tax is due (Rs 20 lakh exemption from 1 Oct 2024 for movable assets).</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Resident Indians with Foreign Income Hire a CA Instead of DIY</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div><h3>Section 6 Residency Determination</h3><p>Day-count modeling across 5 FYs, 60+365 vs 120+365 modification, Section 6(1A) deemed-resident assessment, ROR vs RNOR memo for returning NRIs - documented for the next 7 years of audit defense.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Form 67 Filed BEFORE ITR</h3><p>FTC under Rule 128 is rejected if Form 67 is filed after the ITR. Patron files Form 67 first, captures the acknowledgement, and links it to the ITR computation - protecting Rs 1 to 5 lakh of foreign tax credit per engagement.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 4v4"/></svg></div><h3>Schedule FA Calendar Year Discipline</h3><p>Schedule FA runs on calendar year (Jan-Dec), Schedule FSI on financial year (Apr-Mar) - DIY tools confuse the two. We rebuild Schedule FA from foreign bank and broker statements with peak-balance, closing-balance, and ownership-type accuracy.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div><h3>Rule 115 TTBR Conversion</h3><p>SBI Telegraphic Transfer Buying Rate of last day of preceding month for income; spot rate for Schedule FA assets. Mismatched conversion triggers NUDGE Campaign queries against AIS data exchange. We maintain the conversion ledger as audit-ready documentation.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3>DTAA Article-by-Article Application</h3><p>India has DTAAs with 95+ countries - each with different articles for salary, dividends, royalties, capital gains, pensions. Patron applies the correct article for the specific income stream and source country, not a generic FTC pattern.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8"/></svg></div><h3>Black Money Act Defense</h3><p>Section 43 Rs 10 lakh per AY penalty + Section 41 120 percent (3x tax) on undisclosed income + Section 50 prosecution. We model exposure, claim Rs 20 lakh movable-asset exemption (from 1 Oct 2024), and route to Section 139(8A) updated return where eligible.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><h3>NUDGE Campaign Response</h3><p>CBDT email / SMS notices based on CRS data exchange from 100+ countries. Patron responds with reconstructed Schedule FA, Section 139(8A) updated returns where applicable, and Black Money Act mitigation memo - keeping you out of formal Section 148 reassessment.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg></div><h3>Returning NRI RNOR Window</h3><p>Returning after 8+ years abroad? You are likely RNOR for 2 to 3 years - a window where foreign income earned and received outside India is exempt. We document the residency lock-in for typical Rs 4 to 8 lakh annual savings versus a wrongly-classified ROR filing.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><h3>Foreign Mutual Fund Tax Treatment</h3><p>Foreign MFs and ETFs (US, UK) are taxed at slab as Income from Other Sources for distributions and Section 112 12.5 percent LTCG without indexation on sale - NOT Section 112A. DIY tools default to Section 112A and create under-reporting. We compute correctly with Schedule FA disclosure.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves resident Indians with foreign income across India - both in-person and remotely. We work with remote workers on US Delaware C-Corp payrolls, consultants billing US / UK / Singapore / UAE clients, returning NRIs in RNOR transition, and HNI multi-stream global income clients across 35+ source countries. City-specific Foreign Income ITR pages are available for <a href="/itr-for-foreign-income/pune">Pune</a>, <a href="/itr-for-foreign-income/mumbai">Mumbai</a>, <a href="/itr-for-foreign-income/delhi">Delhi</a>, and <a href="/itr-for-foreign-income/gurugram">Gurugram</a>.</p>
<p style="margin-top:14px;"><strong>Outcome proof:</strong> 35 countries in 6 years - returns filed for ROR Indians with foreign income from US, UK, Singapore, UAE, Canada, Australia, Germany, Netherlands, Switzerland, Japan, Hong Kong, Israel, and 23 more source countries since FY 2019-20. Three NUDGE Campaign responses cleared without further notice. Four returning-NRI RNOR-window engagements saved combined Rs 28 lakh in unnecessary tax across 2 to 3 transition years.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ROR vs RNOR vs NRI - Foreign Income Treatment Compared</h2>
            <div class="content-text">
                <p>Residency status under Section 6 is the single most important variable for foreign income taxation. Three classifications produce three completely different tax outcomes.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table class="table-comparison">
                    <thead><tr><th>Aspect</th><th>ROR (Resident Ordinarily Resident)</th><th>RNOR (Resident Not Ordinarily Resident)</th><th>NRI (Non-Resident)</th></tr></thead>
                    <tbody>
                        <tr><td>Section 6 Test</td><td>Resident + (resident in 2 of last 10 PYs AND 730+ days in last 7 PYs)</td><td>Resident but fails one or both ROR conditions</td><td>Fails primary 182-day AND fails 60+365-day test</td></tr>
                        <tr><td>Indian-Source Income</td><td>Taxable</td><td>Taxable</td><td>Taxable</td></tr>
                        <tr><td>Foreign-Source Income (general)</td><td>Taxable globally</td><td>NOT taxable (if earned + received abroad)</td><td>NOT taxable</td></tr>
                        <tr><td>Foreign Income from Indian Business</td><td>Taxable</td><td>Taxable (if business set up in India)</td><td>NOT taxable</td></tr>
                        <tr><td>Foreign Salary (services rendered abroad)</td><td>Taxable</td><td>NOT taxable</td><td>NOT taxable</td></tr>
                        <tr><td>Foreign Dividends and Interest</td><td>Taxable</td><td>NOT taxable</td><td>NOT taxable</td></tr>
                        <tr><td>Foreign Mutual Fund / ETF</td><td>Taxable on sale and dividends</td><td>NOT taxable</td><td>NOT taxable</td></tr>
                        <tr><td>Foreign Rental Property</td><td>Taxable under House Property head</td><td>NOT taxable</td><td>NOT taxable</td></tr>
                        <tr><td>Schedule FA Mandatory</td><td>YES - calendar year basis</td><td>NO</td><td>NO</td></tr>
                        <tr><td>Schedule FSI / TR / Form 67</td><td>Where FTC claimed</td><td>Only if any Indian-source has foreign WHT (rare)</td><td>Where FTC claimed for India-source foreign WHT</td></tr>
                        <tr><td>DTAA Application (Article 4)</td><td>Residence = India</td><td>Residence = India</td><td>Residence = source country</td></tr>
                        <tr><td>Black Money Act Applicability</td><td>YES - full</td><td>Limited (foreign assets pre-RNOR may be exempt)</td><td>NO</td></tr>
                        <tr><td>ITR Form</td><td>ITR-2 (no business) or ITR-3 (with business)</td><td>ITR-2 or ITR-3 as applicable</td><td>ITR-2 or ITR-3</td></tr>
                        <tr><td>Old vs New Regime</td><td>Available both (some Section 80C limited)</td><td>Available both</td><td>Limited Section 80C, full Section 80D</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><em>Patron has filed foreign income ITRs for over 600 ROR Indians across 35 countries since 2019. The accountability is signed and traceable - one CA, one team, one residency memo, one Form 67 acknowledgement, one Schedule FA worksheet.</em></p>
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
                
                <p>Resident Indians with foreign income typically need adjacent compliance work alongside the global income ITR. We bundle these:</p>
<ul>
<li><a href="/income-tax-return">Income Tax Return Filing (parent)</a> - all ITR forms, regime selection, AY 2026-27 filing</li>
<li><a href="/itr-filing-for-freelancers-professionals">ITR for Professionals / Freelancers</a> - peer service for resident professionals billing foreign clients via Section 44ADA</li>
<li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - foreign mutual fund / ETF redemption (Section 112 12.5 percent without indexation)</li>
<li><a href="/esop-management-and-compliance-services">ESOP Management and Compliance</a> - foreign employer ESOPs (RSU vesting, FMV computation, Schedule FA)</li>
<li><a href="/tax-planning-services">Tax Planning Services</a> - DTAA strategy, regime selection, RNOR transition planning</li>
<li><a href="/income-tax-notice-for-defective-return">Defective Return Notice (Sec 139(9))</a> - response for ITR-1 with foreign income (must be ITR-2 / ITR-3)</li>
<li><a href="/income-tax-notice">Income Tax Notice Response</a> - Section 143(1), Section 142(1), Section 148 reassessment, NUDGE Campaign queries</li>
<li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - audit-case ITR-3 for foreign business / professional with receipts above Rs 75 lakh</li>
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
                    <li>Income Tax Act 1961 - Sections 5 (scope), 6 (residency), 9 (deeming), 90 (DTAA), 91 (unilateral relief)</li>
                    <li>Income Tax Rules 1962 - Rule 115 (TTBR currency conversion), Rule 128 (FTC mechanism), Rule 21AB (TRC and Form 10F)</li>
                    <li>Black Money (Undisclosed Foreign Income and Assets) Act 2015 - Sections 41, 43, 50, 70</li>
                    <li>Foreign Exchange Management Act 1999 - Liberalised Remittance Scheme</li>
                    <li>India bilateral DTAAs with 95+ countries - including OECD Model and UN Model variations</li>
                </ul>

                <p style="margin-top:18px;"><strong>Regulatory Reference Table for Foreign Income:</strong></p>
                <div class="table-responsive-wrapper" style="margin-top:12px;">
                <table>
                    <thead><tr><th>Provision</th><th>What It Says</th><th>Foreign Income Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Section 5 ITA 1961</td><td>Scope of total income by residency</td><td>ROR taxed globally; RNOR partial; NRI India-source only</td></tr>
                        <tr><td>Section 6 ITA 1961</td><td>Residential status determination</td><td>182-day primary; 60+365 modified to 120+365 for high-income PIO; Section 6(1A) deemed resident</td></tr>
                        <tr><td>Section 9 ITA 1961</td><td>Income deemed to accrue in India</td><td>Salary services rendered in India, Indian business connection, Indian capital asset, royalty / FTS from Indian payer</td></tr>
                        <tr><td>Section 44ADA ITA 1961</td><td>Presumptive professional income</td><td>50 percent of gross receipts up to Rs 75 lakh (post Finance Act 2024) for resident professionals - applies to foreign client billing</td></tr>
                        <tr><td>Section 90 ITA 1961</td><td>DTAA-based relief</td><td>Foreign Tax Credit via Form 67 + Rule 128 for tax paid in DTAA partner country</td></tr>
                        <tr><td>Section 91 ITA 1961</td><td>Unilateral relief (no DTAA)</td><td>Rare - applies only if no DTAA with source country exists</td></tr>
                        <tr><td>Section 195 ITA 1961</td><td>TDS on payments to non-residents</td><td>Indirect relevance - foreign payer to resident may not withhold; resident pays advance tax</td></tr>
                        <tr><td>Section 206C(1G) ITA 1961</td><td>TCS on Liberalised Remittance Scheme</td><td>20 percent TCS on outward remittances above Rs 7 lakh per FY (medical, education lower)</td></tr>
                        <tr><td>Section 234F ITA 1961</td><td>Late filing fee</td><td>Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh)</td></tr>
                        <tr><td>Section 270A ITA 1961</td><td>Under-reporting penalty</td><td>50 percent under-reporting; 200 percent misreporting penalty</td></tr>
                        <tr><td>Section 139(8A) ITA 1961</td><td>Updated return</td><td>Available for 24 months from AY end with additional tax 25 percent (year 1) or 50 percent (year 2)</td></tr>
                        <tr><td>Rule 115 IT Rules 1962</td><td>Foreign currency conversion</td><td>TTBR of last day of preceding month for income; spot rate for asset valuation</td></tr>
                        <tr><td>Rule 128 IT Rules 1962</td><td>Foreign Tax Credit mechanism</td><td>Form 67 mandatory before ITR; FTC = lower of foreign tax or India tax; country-by-country source-by-source</td></tr>
                        <tr><td>BMA Section 43</td><td>Penalty for missed Schedule FA</td><td>Rs 10 lakh per AY (Rs 20 lakh exemption from 1 October 2024 for movable assets below threshold)</td></tr>
                        <tr><td>BMA Section 41 + 50</td><td>Undisclosed income + prosecution</td><td>120 percent (3x tax) penalty plus tax under Section 41; imprisonment 3 to 10 years under Section 50</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Authoritative References:</strong></p>
                <ul>
                    <li><a href="https://www.incometax.gov.in" target="_blank" rel="noopener nofollow">Income Tax Department</a> - Schedule FA, Form 67, Form 10F user manuals and DTAA notifications</li>
                    <li><a href="https://www.incometaxindia.gov.in/Pages/international-taxation/dtaa.aspx" target="_blank" rel="noopener nofollow">India DTAA List - CBDT</a> - bilateral treaty texts for 95+ countries</li>
                    <li><a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener nofollow">India Code - Income Tax Act 1961</a> - Ministry of Law and Justice</li>
                    <li><a href="https://en.wikipedia.org/wiki/Income_tax_in_India" target="_blank" rel="noopener nofollow">Income Tax in India - Wikipedia</a>; <a href="https://en.wikipedia.org/wiki/Double_taxation" target="_blank" rel="noopener nofollow">Double Taxation</a>; <a href="https://en.wikipedia.org/wiki/Tax_residence" target="_blank" rel="noopener nofollow">Tax Residence</a></li>
                </ul>
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
                    <p class="faq-expanded__lead">Top questions resident Indians with foreign income ask before filing - global income scope, Schedule FA, Form 67 FTC, Black Money Act, RNOR transition, and currency conversion.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Are Indian residents taxed on global income?</h3>
                        <div class="faq-expanded__a"><p>Resident and Ordinarily Resident (ROR) Indians ARE taxed on global income under <strong>Section 5(1)</strong> of the Income Tax Act 1961 - both Indian-source and foreign-source income. Resident but Not Ordinarily Resident (RNOR) Indians are taxed only on Indian-source income plus foreign income from a business controlled in India. Non-Resident Indians (NRI) are taxed only on Indian-source income (received in India or deemed to accrue under Section 9). Section 6 determines residency via the 182-day primary test or the 60+365-day test (modified to 120 days for high-income PIO).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Schedule FA mandatory for residents with foreign assets?</h3>
                        <div class="faq-expanded__a"><p>Yes for ROR (Resident and Ordinarily Resident) taxpayers holding any foreign asset. RNORs and NRIs are exempt. Schedule FA reports foreign holdings on calendar year basis (1 January to 31 December preceding AY) - foreign bank accounts, equity, mutual funds, immovable property, beneficial interest. Peak balance, closing balance as on 31 December, dividends received, sale proceeds. Filed in ITR-2 or ITR-3 (NOT ITR-1 or ITR-4). <strong>Black Money Act Section 43</strong> imposes Rs 10 lakh per AY penalty for non-disclosure (Rs 20 lakh exemption from 1 October 2024 for movable assets).</p><p style="margin-top:8px;"><em>Voice search variant - "Schedule FA kab mandatory hai?" - ROR ke liye haan, foreign assets hain toh mandatory hai.</em></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to claim DTAA tax credit via Form 67?</h3>
                        <div class="faq-expanded__a"><p>Three steps. (1) Compute India tax on the foreign income. (2) File <strong>Form 67 ONLINE on incometax.gov.in BEFORE submitting your ITR</strong> - declares foreign income, foreign tax paid, and Foreign Tax Credit claimed under Section 90 (DTAA exists) or Section 91 (no DTAA), per Rule 128. (3) Report Schedule FSI (foreign source income head-wise with country code, TIN, foreign tax, DTAA article) and Schedule TR (tax relief summary). FTC is the lower of (foreign tax converted at Rule 115 TTBR) or (India tax payable on same income), country-by-country, source-by-source. Late Form 67 = FTC rejection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is foreign salary taxed for an Indian resident?</h3>
                        <div class="faq-expanded__a"><p>For ROR: foreign salary is fully taxable in India under the Salary head, regardless of where paid or received. Add the gross foreign salary (converted at Rule 115 TTBR of last day of preceding month) to total income. Apply slab rates and Section 87A rebate where eligible. <strong>Foreign Tax Credit available via Form 67</strong> for foreign tax withheld. India-USA DTAA Article 15, India-UK DTAA Article 16, India-Singapore DTAA Article 14 - dependent personal services articles - typically allocate taxing right to country of physical presence and residence. Schedule FA mandatory for foreign bank account where salary is credited.</p><p style="margin-top:8px;"><em>Voice search variant - "Foreign salary India mein taxable hai?" - ROR ke liye haan, slab rate pe taxable hai aur FTC mil sakta hai.</em></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are foreign mutual funds taxable in India?</h3>
                        <div class="faq-expanded__a"><p>Yes for ROR. Foreign mutual funds (US ETFs, UK funds) and foreign-domiciled equity instruments held by India residents are taxed at slab as Income from Other Sources for distributions and dividends. On sale: Long-Term Capital Gains under <strong>Section 112 at 12.5 percent without indexation</strong> if holding above 24 months; Short-Term Capital Gains at slab rate if 24 months or less. NOT covered by Section 112A (which is for Indian listed equity only). Schedule FA discloses holdings on calendar year basis. Foreign withholding on dividends gets FTC via Form 67.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the Black Money Act penalty for missed foreign asset reporting?</h3>
                        <div class="faq-expanded__a"><p>Black Money Act 2015 <strong>Section 43</strong> imposes Rs 10 lakh per AY penalty for missed Schedule FA disclosure. <strong>Rs 20 lakh exemption available from 1 October 2024</strong> for foreign movable assets below Rs 20 lakh value. Section 41 imposes 120 percent (3x tax) penalty plus tax on undisclosed foreign income. Section 50 carries imprisonment 3 to 10 years for willful evasion. Mitigation routes include Section 139(8A) updated return (24-month window with 25-50 percent additional tax) and Section 70 voluntary disclosure scheme where active.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When does an Indian citizen become RNOR instead of ROR?</h3>
                        <div class="faq-expanded__a"><p>You are <strong>RNOR</strong> (Resident but Not Ordinarily Resident) if you are RESIDENT under Section 6 BUT fail one or both of these conditions: (a) resident in 2 of last 10 PYs, AND (b) 730+ days stay in last 7 PYs. Returning NRIs after 8+ years abroad typically fail both conditions for 2 to 3 years post-return - giving them RNOR window where foreign income earned and received outside India is NOT taxable in India. After the RNOR window expires, they become ROR with full global income taxation. Section 6(1A) deemed residents are also RNOR by default.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to convert foreign currency for ITR reporting?</h3>
                        <div class="faq-expanded__a"><p>Per <strong>Rule 115 of the Income Tax Rules 1962</strong>. For foreign income: use the State Bank of India Telegraphic Transfer Buying Rate (TTBR) of the LAST DAY of the PRECEDING MONTH. For example, salary received on 15 March 2026 uses TTBR of 28 February 2026. Schedule FA asset values use SPOT rate at the relevant date (e.g., closing balance on 31 December uses 31 December rate). Maintain conversion ledger as documentation. AIS data exchange uses similar timing - mismatched rates trigger NUDGE notices.</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Act Now: ITR Deadlines and Foreign Income Compliance Risks</h2>
            <div class="content-text">
                
                <p><strong>Resident Indians with foreign income face five firm dates for AY 2026-27 (FY 2025-26):</strong></p>
<ul>
<li><strong>Form 67 - BEFORE ITR submission:</strong> Mandatory under Rule 128 to claim Foreign Tax Credit. Late Form 67 = FTC rejection regardless of foreign tax paid. Typical loss Rs 1 to 5 lakh per AY for misordering.</li>
<li><strong>31 July 2026 - non-audit ITR-2 / ITR-3 under Section 139(1):</strong> Late filing fee Rs 5,000 under Section 234F. Belated returns under Section 139(4) lose carry-forward of most losses (Section 80).</li>
<li><strong>31 October 2026 - audit-case ITR-3:</strong> Foreign business / professional income with audit threshold met. Section 271B penalty 0.5 percent of receipts or Rs 1.5 lakh whichever lower for missed audit.</li>
<li><strong>31 December 2026 - belated / revised return Section 139(4) / (5):</strong> Last chance for AY 2026-27 with Section 234F fee. Schedule FA omissions corrected within this window avoid Black Money Act exposure.</li>
<li><strong>Section 139(8A) updated return:</strong> 24 months from AY end - until 31 March 2028 for AY 2025-26 and 31 March 2027 for AY 2024-25. Additional tax 25 percent (year 1) or 50 percent (year 2). Critical for NUDGE Campaign response.</li>
</ul>
<p style="margin-top:14px;"><strong>Free 15-minute residency assessment with a CA.</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a>, WhatsApp <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20foreign%20income%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" rel="noopener">wa.me/919459456700</a>, or email <a href="mailto:info@patronaccounting.com">info@patronaccounting.com</a>. Send your foreign payslips, foreign bank statements, broker statements, and prior-year ITR. We compute your Section 6 residency, foreign tax credit position, and Schedule FA exposure before you pay anything.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Foreign Income ITR with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF !important;">Foreign income ITR for resident Indians is not a single-form exercise. It is coordination across multiple statutory regimes - Section 5 scope, Section 6 residency, Section 9 source rules, country-specific DTAA articles, Rule 115 currency conversion, Schedule FA on calendar year, Schedule FSI on financial year, and Form 67 filed BEFORE the ITR. One wrong residency classification costs Rs 4 to 8 lakh per RNOR year; one late Form 67 forfeits Rs 1 to 5 lakh of foreign tax credit; one missed Schedule FA triggers Rs 10 lakh per AY under Black Money Act Section 43.</p>
<p style="color:#FFFFFF !important;">Patron Accounting has filed foreign income ITRs for over 600 ROR Indians across 35 countries since 2019. Our CA and CS team reads your foreign payslips, broker statements (E-Trade, Charles Schwab, Interactive Brokers, DBS, HSBC), foreign tax returns (Form 1040, SA100, IR8A), and DTAA articles before quoting tax. We model your Section 6 residency with day-count, structure Form 67 filing BEFORE the ITR, populate Schedule FA on calendar year basis, and reconcile every foreign tax line item against AIS. We work with remote workers for foreign employers, consultants billing foreign clients, returning NRIs in RNOR transition, and HNI multi-stream global income clients.</p>
<p style="color:#FFFFFF !important;">Free 15-minute residency assessment with a CA. No obligation. Send your documents and get the exact Section 6 residency determination, FTC computation, and Schedule FA exposure before you pay anything. The 31 July 2026 deadline is fixed - and Form 67 must be filed BEFORE that. Your loss carry-forward rights, FTC eligibility, and Black Money Act exposure depend entirely on filing in the correct sequence.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20foreign%20income%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Foreign%20Income%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Foreign%20Income%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Foreign Income ITR Filing in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">City-specific Foreign Income ITR filing across Pune, Mumbai, Delhi, and Gurugram - with same-day handover of foreign payslips, broker statements, foreign tax returns, and AIS download for ROR Indians with global income.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Foreign Income ITR Filing - Office Cities</div>
    <div class="pa-block-sub">In-person CA review for resident Indians with foreign income at our Pune, Mumbai, Delhi, and Gurugram offices. Remote engagement across India and 35+ source countries.</div>
    <div class="pa-city-grid">
        <a href="/itr-for-foreign-income/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-foreign-income/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-foreign-income/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/itr-for-foreign-income/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end compliance support for resident Indians with foreign income - DTAA, FTC, capital gains, ESOP, defective return cure.</div>
    <div class="pa-cross-grid">
        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">All ITR Forms - Parent Service</div></div></a>
        <a href="/itr-filing-for-freelancers-professionals" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Professionals</div><div class="pa-card-sub">Sec 44ADA Foreign Client Billing</div></div></a>
        <a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">Foreign MF / ETF Sec 112</div></div></a>
        <a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management</div><div class="pa-card-sub">Foreign Employer RSUs</div></div></a>
        <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">DTAA &amp; RNOR Strategy</div></div></a>
        <a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice Response</div><div class="pa-card-sub">NUDGE / Sec 143(1) / Sec 148</div></div></a>
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
            <p>Reviewed quarterly during ITR season (April to September) and after every Union Budget (typically February). Section 5 / 6 residency tests, Rule 115 TTBR currency conversion, Rule 128 Foreign Tax Credit mechanism, DTAA notifications across 95+ countries, Schedule FA disclosure thresholds, and Black Money Act amendments are kept current. For source citations: Income Tax Act 1961 (Sections 5, 6, 6(1A), 9, 44ADA, 90, 91, 195, 206C(1G), 234F, 270A, 139(8A)), Income Tax Rules 1962 (Rule 115 TTBR, Rule 128 FTC, Rule 21AB TRC / Form 10F), Black Money (Undisclosed Foreign Income and Assets) Act 2015 (Sections 41, 43, 50, 70), FEMA 1999 (Liberalised Remittance Scheme), CBDT NUDGE Campaign 2025 communications, OECD Common Reporting Standard (CRS), and India bilateral DTAAs with United States, United Kingdom, Singapore, UAE, Canada, Australia, Germany, Netherlands, and 87 other countries.</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection