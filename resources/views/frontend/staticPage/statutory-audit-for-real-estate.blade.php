
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
    <title>Statutory Audit for Real Estate</title>
    <meta name="description" content="CA-led statutory audit for real estate developers and construction firms - Ind AS 115 revenue, RERA escrow, JDA, project-wise P and L. From Rs 1,25,000.">
    <link rel="canonical" href="/statutory-audit-for-real-estate">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Statutory Audit for Real Estate 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for real estate developers and construction firms - Ind AS 115 revenue, RERA escrow, JDA, project-wise P and L. From Rs 1,25,000.">
    <meta property="og:url" content="/statutory-audit-for-real-estate">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-real-estate-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Statutory Audit for Real Estate 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for real estate developers and construction firms - Ind AS 115 revenue, RERA escrow, JDA, project-wise P and L. From Rs 1,25,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-real-estate-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/statutory-audit-for-real-estate#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
        { "@type": "ListItem", "position": 3, "name": "Statutory Audit for Real Estate", "item": "/statutory-audit-for-real-estate" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/statutory-audit-for-real-estate#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is statutory audit mandatory for real estate developers in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every real estate developer Pvt Ltd, Public Ltd, OPC, project SPV and JDA landowner company - irrespective of project size or completion status. A single-tower residential project in launch year one and a multi-state listed real estate group are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment. LLPs above Rs 40 lakh turnover are also bound."
          }
        },
        {
          "@type": "Question",
          "name": "When does a real estate developer recognise revenue under Ind AS 115?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 115 paragraph 35, revenue is recognised over time if the customer simultaneously receives and consumes the benefits, the entity performance creates an asset the customer controls, or the asset has no alternative use to the entity AND the entity has an enforceable right to payment for performance completed to date. For most Indian residential projects where buyers can cancel and recover most paid amounts, the enforceable-right-to-payment limb fails - revenue is recognised at the point of possession transfer. For B2B EPC contracts and customised commercial projects, over-time recognition using cost-to-cost input method typically applies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the RERA 70 percent escrow rule?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 4(2)(l)(D) of the Real Estate (Regulation and Development) Act, 2016, every real estate developer must park at least 70 percent of every buyer collection from an allottee into a project-specific escrow account with a scheduled commercial bank. The funds can be drawn down only for the land and construction costs of that specific project. Each withdrawal requires joint written certification by a Chartered Accountant, Civil Engineer and Architect basis the construction stage. The State RERA dashboard must be updated within 7 days. Quarterly Form 5 is filed by the developer."
          }
        },
        {
          "@type": "Question",
          "name": "How are unsold flats valued in a statutory audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unsold flats and WIP project inventory are valued at the lower of cost or net realisable value under Ind AS 2 / AS 2. Cost includes land acquisition, stamp duty, registration, legal, development premium, EDC and IDC charges, approvals, directly attributable construction cost, and capitalised borrowing cost under Ind AS 23. NRV is computed as the estimated current selling price per square foot in the project micro-market less estimated selling costs less remaining construction cost to complete. Where NRV is below cost, the inventory is written down and a corresponding charge hits the P and L."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 45(5A) for joint development agreements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 45(5A) of the Income Tax Act, 1961 governs the timing of capital gains for a landowner under a joint development agreement. The capital gains accrue not in the year of the JDA but in the year the Completion Certificate is issued by the competent authority for the project. The deemed full value of consideration is the stamp duty value of the landowner share of the project at the date of the CC plus any cash component received. This special timing rule applies only to individuals and HUFs with certain conditions; for corporate landowners, regular capital gains timing applies."
          }
        },
        {
          "@type": "Question",
          "name": "How is land cost capitalised in real estate accounting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Land cost is capitalised as part of project inventory under Ind AS 2 / AS 2. The capitalised cost includes sale deed consideration, stamp duty and registration charges, legal fees and due diligence, development premium and EDC / IDC charges payable to the local authority, Change of Land Use charges, brokerage paid for the acquisition, and any direct cost necessary to bring the land to a state ready for development. Borrowing cost incurred on a project-specific debt used to fund the land purchase is capitalised under Ind AS 23 from the date of acquisition until substantial completion."
          }
        },
        {
          "@type": "Question",
          "name": "What is CARO clause 3(i)(c) on title deeds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 clause 3(i)(c) requires the statutory auditor to report whether all title deeds of all immovable properties disclosed in the financial statements are held in the name of the company. For real estate companies, this is critical because the auditor verifies sale deeds, registration receipts, mutation extracts, and encumbrance certificates for every land parcel, every completed building owned, and every redevelopment site. Where the title deed is in the name of a related party or a JDA landowner pending conveyance, the property description, gross carrying value, and the name in which it is held must be disclosed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the project-wise P and L disclosure requirement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Project-wise profit and loss is mandatory under RERA - each registered project must have a separate financial trail showing land cost, construction cost, marketing expenses, finance cost, revenue recognised, and cumulative profit or loss. The statutory auditor uses the project-wise P and L to verify cost capitalisation in the project WIP, to compute NRV-versus-cost comparison for unsold inventory provisioning, and to detect cross-project subsidisation that may indicate diversion of buyer funds in violation of RERA. It is also required for any provision for stalled or delayed projects."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/statutory-audit-for-real-estate#service",
      "name": "Statutory Audit for Real Estate Companies",
      "url": "/statutory-audit-for-real-estate",
      "serviceType": "Statutory Audit (Real Estate - Residential, Commercial, Construction, JDA)",
      "description": "CA-led statutory audit for Indian real estate developers, construction companies, JDA landowner trusts, redevelopment SPVs and project SPVs under Section 143 of the Companies Act, 2013, covering Ind AS 115 revenue recognition (over-time vs point-in-time test), RERA 70 percent escrow audit with triple certification, inventory of unsold units valuation, land cost capitalisation under Ind AS 23, joint development agreement accounting with Section 45(5A) tax disclosure, project-wise profit and loss reconciliation, and CARO clause 3(i)(c) title-deed verification.",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Real estate in India", "sameAs": "https://en.wikipedia.org/wiki/Real_estate_in_India" },
        { "@type": "Thing", "name": "Real Estate (Regulation and Development) Act, 2016", "sameAs": "https://en.wikipedia.org/wiki/Real_Estate_(Regulation_and_Development)_Act,_2016" },
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Statutory Audit for Real Estate Service Plans",
        "itemListElement": [
          { "@type": "Offer", "name": "Single-project developer (turnover under Rs 5 crore)", "price": "125000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-real-estate" },
          { "@type": "Offer", "name": "Small developer 1 to 3 projects (turnover Rs 5 to 25 crore)", "price": "300000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-real-estate" },
          { "@type": "Offer", "name": "Mid-size developer 3 to 10 projects (turnover Rs 25 to 100 crore)", "price": "650000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-real-estate" },
          { "@type": "Offer", "name": "Large developer 10+ projects or multi-state (turnover Rs 100 to 500 crore)", "price": "1500000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-real-estate" },
          { "@type": "Offer", "name": "Listed real estate entity (KAM + IFC + SEBI LODR quarterly limited review)", "price": "3500000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-real-estate" }
        ]
      },
      "datePublished": "2026-05-13T08:00:00+05:30",
      "dateModified": "2026-05-14T08:00:00+05:30"
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
                        Statutory Audit for Real Estate Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, project-wise WIP ledger, RERA quarterly Form 5, escrow withdrawal CA / Engineer / Architect certificates, land deed register, JDA agreements with Section 45(5A) workings, unsold inventory schedule.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,25,000 for single-project developers with turnover under Rs 5 crore; scales by project count, JDA presence and listed entity status.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian real estate company (Pvt Ltd / Public / OPC) under Section 139; LLPs above Rs 40 lakh turnover; SPVs and project SPVs separately.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 6 to 10 weeks fieldwork; Ind AS 115 contract-by-contract testing; RERA escrow audit; JDA legal review; project-wise P and L reconciliation.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20Real%20Estate%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20Real%20Estate%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20statutory%20audit%20for%20my%20real%20estate%20%2F%20construction%20company." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Statutory Audit for Real Estate'/>
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
                                <option value='statutory-audit-for-real-estate' selected>Statutory Audit for Real Estate</option>
                                <option value='statutory-audit'>Statutory Audit (India)</option>
                                <option value='tax-audit'>Tax Audit (Section 44AB)</option>
                                <option value='internal-audit'>Internal Audit</option>
                                <option value='stock-audit'>Stock Audit</option>
                                <option value='gst-audit'>GST Audit</option>
                                <option value='secretarial-audit'>Secretarial Audit</option>
                                <option value='construction-and-real-estate-accounting-services'>Real Estate Accounting Services</option>
                                <option value='other'>Other</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our statutory audit across three live residential projects with the RERA Form 5 quarterly certifications bundled in. One CA partner, one engagement letter, zero workpaper duplication. The over-time versus point-in-time judgement was documented project-by-project. Cleanest audit close in five years.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit M.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO - Residential Developer, Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The Section 45(5A) JDA position on three landowner trusts was the part we always worried about at year end. Patron's audit memo quantified each Completion Certificate trigger year and the deemed stamp duty value cleanly. Saved us a tax notice last year.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali P.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee - JDA Landowner Trust, Pune</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had MahaRERA escrow reconciliation gaps from a previous auditor. Patron rebuilt the 70 percent deposit trail project-by-project, traced every withdrawal to the triple certification, and closed the year with zero RERA observations. Worth every rupee.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Sandeep K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head - Construction Co., Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Unsold inventory NRV was always our subjective hot-spot. Patron benchmarked per-square-foot rates against the actual micro-market in Wakad and Hadapsar and gave us a defensible provision. CARO 3(i)(c) title-deed cross-check was thorough.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram S.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD - Plotted Developer, Pune</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Redevelopment SPV with society conveyance pending and free-flat allocation - usually a nightmare audit. Patron's project-wise P and L reconciliation and Section 45(5A) treatment for society members were spot on. Auditor was reachable directly, not through a junior.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha R.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - Redevelopment SPV, Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
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
                    <p>Real estate developers, construction companies and JDA landowners across India trust our seven-risk-area audit framework. Talk to a CA partner directly.</p>
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
            <a href="#who-section" class="toc-btn">Who Needs Audit</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Audit Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Statutory Audit for Real Estate Companies</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Statutory Audit for Real Estate at a Glance</strong></p>
                    <p>Statutory audit for real estate companies in India is the annual independent examination of financial statements under Section 143 of the Companies Act, 2013, with seven sector-specific risk areas: Ind AS 115 revenue recognition (over-time vs point-in-time test), RERA 70 percent escrow account audit with triple certification, inventory of unsold units valuation, land cost capitalisation under Ind AS 23, joint development agreement (JDA) accounting and Section 45(5A) tax timing, project-wise profit and loss reconciliation, and CARO clause 3(i)(c) title-deed verification.</p>
                </div>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Acts</td><td>Companies Act 2013 - Sec 139 to 148; RERA 2016 - Sec 4, 11, 60, 61; Income Tax Act 1961 - Sec 45(5A), 43CA, 194-IA</td></tr>
                            <tr><td>Applicable To</td><td>Every Indian real estate company (Pvt Ltd / Public / OPC); LLPs above Rs 40 lakh turnover; project SPVs registered with RERA</td></tr>
                            <tr><td>Revenue Standard</td><td>Ind AS 115 - over-time if no alternative use + enforceable right to payment, else point-in-time on possession (per ICAI Guidance Note on Real Estate, May 2016)</td></tr>
                            <tr><td>RERA Escrow</td><td>70 percent of buyer collections in project-specific escrow under Section 4(2)(l)(D); withdrawals require CA + Engineer + Architect joint certification</td></tr>
                            <tr><td>Quarterly Audit</td><td>Mandatory CA-certified Form 5 (or state equivalent) uploaded to State RERA portal each quarter</td></tr>
                            <tr><td>Cost Starting From</td><td>Rs 1,25,000 (Patron - single-project developer, turnover under Rs 5 crore)</td></tr>
                            <tr><td>Penalty (RERA Sec 60, 61)</td><td>Up to 5 percent of project cost for misuse / misreporting of escrow; project registration revocation</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>Real estate audits sit at the intersection of three regulatory regimes - the Companies Act under Section 143, the Real Estate (Regulation and Development) Act, 2016 with its state-wise rules, and the Income Tax Act's specific provisions including Section 45(5A) for joint development agreements, Section 43CA for stamp-duty-versus-consideration safe-harbour, and Section 194-IA for buyer-side TDS. Add Ind AS 115's over-time vs point-in-time control test, the ICAI Guidance Note on Accounting for Real Estate Transactions (May 2016) applicable to Ind AS entities, project-wise inventory accounting at lower of cost or net realisable value, and the audit becomes a multi-track exercise.</p>
                <p>Patron handles all seven risk areas under a single CA partner and one engagement letter. Whether you are a single-project plotted developer in year one, a multi-state listed real estate group, a JDA landowner trust, a redevelopment SPV with society conveyance pending, or a REIT sponsor entity - the framework adapts to your portfolio shape. Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Statutory Audit for Real Estate Companies</h2>
                <div class="content-text what-is-definition">
                    <p>Statutory audit for real estate companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering seven sector-specific risk areas: Ind AS 115 revenue recognition timing, RERA 70 percent escrow audit, inventory of unsold units, land cost capitalisation, joint development agreement accounting, project-wise P and L, and CARO 3(i)(c) title deeds.</p>
                    <p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every Indian real estate company regardless of project size or completion status - a single-project plotted developer in year one and a multi-state listed real estate group are equally bound. The auditor's opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM, and Form ADT-1 intimates auditor appointment within 15 days of the board resolution. Separately, the same CA (or another CA jointly with an engineer and an architect) certifies quarterly escrow withdrawals under RERA.</p>
                    <p>Where real estate audits differ most from other industries is the project life-cycle accounting. A single residential tower can take 4 to 7 years from launch to occupancy certificate, during which time the entity collects buyer instalments without yet transferring legal ownership. Ind AS 115 applies a control test - if the asset has no alternative use to the entity AND the entity has an enforceable right to payment for performance completed to date, revenue is recognised over time (typically using a cost-to-cost input method). If either limb fails, revenue is deferred to the point in time at which possession transfers. This single decision changes the P and L profile of the entire project.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Statutory Audit (Real Estate):</strong></p>
                    <p><strong>Ind AS 115 Over-Time Test:</strong> Real estate revenue is recognised over time only if (a) the customer simultaneously receives and consumes the benefits, (b) the entity's performance creates an asset the customer controls, or (c) the asset has no alternative use to the entity AND the entity has an enforceable right to payment for performance completed to date. For most Indian residential projects with cancellation rights, point-in-time recognition on possession is the conclusion.</p>
                    <p><strong>RERA 70/30 Escrow Split:</strong> Under Section 4(2)(l)(D) of RERA, 70 percent of every buyer collection must be parked in a project-specific escrow account with a scheduled commercial bank, usable only for land and construction of that project. The remaining 30 percent is available for general business use.</p>
                    <p><strong>Triple Certification:</strong> Withdrawals from the escrow require joint written certification by a Chartered Accountant, a Civil Engineer and an Architect based on construction milestones. The State RERA dashboard must be updated within 7 days.</p>
                    <p><strong>Section 45(5A) Income Tax:</strong> Joint Development Agreement capital gains for the landowner are taxed in the year the Completion Certificate is issued by the competent authority (not the year of the JDA). Consideration = stamp duty value of landowner's share + cash component.</p>
                    <p><strong>Section 43CA Income Tax:</strong> Where the sale consideration of an immovable property held as stock-in-trade is lower than the stamp duty value, the higher amount is deemed to be the full value of consideration for tax. Safe harbour of 10 percent applies (variance up to 10 percent is ignored).</p>
                    <p><strong>ICAI Guidance Note on Real Estate (Ind AS), May 2016:</strong> Supplementary guidance on application of Ind AS to real estate transactions; addresses development rights swap, joint development, land bank treatment, and area-share arrangements.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Residential tower silhouette -->
                            <rect x="35" y="40" width="50" height="115" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Tower windows grid -->
                            <rect x="42" y="50" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="56" y="50" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="70" y="50" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="42" y="68" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="56" y="68" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="70" y="68" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="42" y="86" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="56" y="86" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="70" y="86" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="42" y="104" width="8" height="10" fill="#F5A623" opacity="0.7"/>
                            <rect x="56" y="104" width="8" height="10" fill="#F5A623" opacity="0.7"/>
                            <rect x="70" y="104" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="42" y="122" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <rect x="56" y="122" width="8" height="10" fill="#F5A623" opacity="0.7"/>
                            <rect x="70" y="122" width="8" height="10" fill="#14365F" opacity="0.25"/>
                            <!-- Tower entrance -->
                            <rect x="54" y="140" width="14" height="15" rx="2" fill="#14365F" opacity="0.45"/>
                            <!-- Crane / construction silhouette -->
                            <rect x="32" y="20" width="2" height="22" fill="#14365F"/>
                            <line x1="33" y1="22" x2="60" y2="22" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="55" y1="22" x2="55" y2="32" stroke="#14365F" stroke-width="1"/>
                            <rect x="51" y="32" width="8" height="5" fill="#F5A623"/>
                            <!-- Audit clipboard -->
                            <rect x="105" y="45" width="65" height="80" rx="5" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="125" y="40" width="25" height="10" rx="2" fill="#14365F"/>
                            <line x1="115" y1="60" x2="160" y2="60" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="115" y1="72" x2="155" y2="72" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <line x1="115" y1="82" x2="150" y2="82" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <line x1="115" y1="92" x2="158" y2="92" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
                            <!-- RERA tick mark inside clipboard -->
                            <circle cx="120" cy="108" r="5" fill="#10B981"/>
                            <path d="M117 108l2.5 2.5L124 106" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <text x="142" y="111" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RERA 70%</text>
                            <!-- Green check badge -->
                            <circle cx="158" cy="33" r="16" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M151 33l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- IndAS 115 tag -->
                            <rect x="22" y="135" width="48" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="46" y="147.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ind AS 115</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Statutory Audit for Real Estate</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143</span>
                        <strong>7-Risk-Area Audit Framework</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (Real Estate)</h2>
            <div class="content-text">
                <p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no project-size threshold and no exemption based on profitability. For real estate entities the applicability layers stack by sub-segment:</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Real Estate Sub-segment</th><th>Examples</th><th>Audit Layers</th></tr></thead>
                        <tbody>
                            <tr><td>Residential developer</td><td>Single-tower / multi-tower residential project, township</td><td>Sec 143 + RERA escrow audit + Ind AS 115 + JDA (if any) + unsold inventory</td></tr>
                            <tr><td>Commercial developer</td><td>Office building, mall, mixed-use</td><td>Sec 143 + RERA (mostly mandatory) + Ind AS 116 (rented inventory) + lease income recognition</td></tr>
                            <tr><td>Plotted-development promoter</td><td>Plotted layout for sale, gated community</td><td>Sec 143 + RERA + Ind AS 115 (typically point-in-time) + land bank inventory valuation</td></tr>
                            <tr><td>Construction contractor (B2B)</td><td>Pure EPC contractor without buyer interface</td><td>Sec 143 + Ind AS 115 (over-time POC) + Sec 194Q on materials + Sec 194C TDS reverse</td></tr>
                            <tr><td>JDA landowner (corporate / trust)</td><td>Land contributor to a JDA with developer</td><td>Sec 143 + Sec 45(5A) capital gains timing + Ind AS 16 / 40 PPE / Investment Property</td></tr>
                            <tr><td>REIT / Real Estate AIF</td><td>Embassy REIT, Brookfield REIT, Cat II Real Estate AIF</td><td>Sec 143 + SEBI REIT Regulations 2014 + REIT Code + AIF Regulations</td></tr>
                            <tr><td>Redevelopment SPV</td><td>Society redevelopment, slum rehabilitation</td><td>Sec 143 + RERA + complex revenue (free flats + saleable area) + Sec 45(5A) for society</td></tr>
                            <tr><td>Hospitality real estate</td><td>Hotel-cum-residential mixed development</td><td>Sec 143 + Ind AS 116 lease (room rentals) + Ind AS 115 sale + RERA</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>Tax audit under Section 44AB applies at Rs 1 crore turnover and is bundled by Patron for real estate companies above the threshold (see <a href="/tax-audit">tax audit</a>). CARO 2020 applies in full to all real estate companies. Cost records under Section 148 do not apply (real estate is not in Table A / B of the Cost Records Rules). RERA applies to projects with more than 8 apartments OR exceeding 500 square metres of land area (state thresholds may vary - Maharashtra is 8 apts or 500 sq m, Karnataka has its own threshold). The 70 percent escrow rule applies once registered. Section 80-IBA affordable housing 100 percent deduction has a sunset for projects approved on or before 31 March 2022 (legacy claims continue during eligible block).</p>
            </div>
        </div>
    </div>
</section>
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act 2013 audit with CARO 2020 21-clause annexure, particularly clauses 3(i) PP and E and title deeds, 3(ii) inventory and working capital, 3(vii) GST and TDS, 3(xv) related-party (group company land deals); SA 700 / 705 reporting under Ind AS or AS framework.</td></tr>
                        <tr><td>Ind AS 115 Revenue Recognition Audit</td><td>Contract-by-contract control test under paragraph 35 - over-time recognition if (a) no alternative use AND enforceable right to payment, else point-in-time on possession; cost-to-cost input method validation; transaction price allocation across multi-unit packages; contract modifications and refunds under paragraph 18 to 21; ICAI Guidance Note on Accounting for Real Estate Transactions for Ind AS Entities (May 2016) overlay.</td></tr>
                        <tr><td>RERA Quarterly Escrow Audit and Form 5 Certification</td><td>Verification of 70 percent project-specific escrow deposit within 48 hours of buyer collection; certification of milestone-based withdrawals jointly with appointed engineer and architect; quarterly Form 5 (or state equivalent) upload to State RERA portal within 7 days of withdrawal; reconciliation of escrow utilisation to construction stage percentage.</td></tr>
                        <tr><td>Inventory of Unsold Units Valuation</td><td>WIP project inventory at lower of cost or net realisable value under Ind AS 2 / AS 2; cost = land + premium + approvals + capitalised borrowing costs (Ind AS 23) + directly attributable construction costs; NRV based on current market rate per square foot net of selling costs; provision for stalled or delayed projects.</td></tr>
                        <tr><td>Land Cost Capitalisation and Borrowing Cost Treatment</td><td>Land acquisition cost (sale deed + stamp duty + registration + legal); development premium and external development charges (EDC, IDC); approvals and CLU charges; borrowing costs eligible for capitalisation under Ind AS 23 (project-specific debt + general borrowing pro-rata); cessation of capitalisation on substantial completion.</td></tr>
                        <tr><td>Joint Development Agreement (JDA) Audit and Section 45(5A) Disclosure</td><td>Review of JDA terms - landowner share, area-versus-cash mix, revenue share vs area share, revenue share with floor; capital gains timing under Section 45(5A) - taxable in the year of Completion Certificate issuance for the landowner; Section 43CA stamp-duty-vs-consideration test on saleable area; deemed sale value computation; disclosure in financial statements.</td></tr>
                        <tr><td>Project-Wise P and L Reconciliation</td><td>Project-specific direct cost ledger maintained separately from group overheads; allocation of common costs (head office, marketing brand, finance team) using a reasonable basis; project margin computation for RERA disclosure and for unsold inventory NRV; reconciliation with consolidated entity P and L. CARO clause 3(i)(c) title-deed register cross-check.</td></tr>
                        <tr><td>SA 700 Audit Report Components</td><td>Opinion paragraph on true and fair view; Basis for Opinion (independence under SA 200; Ind AS framework; ICAI GN compliance); Key Audit Matters (SA 701) for listed entities - revenue timing, NRV, JDA Section 45(5A); Going Concern (SA 570); Section 143(3)(i) Internal Financial Controls; RERA quarterly Form 5 certification.</td></tr>
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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Real Estate Statutory Audit Process - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From engagement letter to UDIN sign-off and AOC-4 filing - here's how Patron runs a real estate audit project-by-project, contract-by-contract, escrow-by-escrow.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Engagement and Project Portfolio Risk Profiling</h3>
                    <p class="step-description">
                        Patron issues an engagement letter under SA 210, obtains independence and non-disqualification certificate under Section 141 of the Companies Act, 2013, and builds a project-portfolio profile - every active project (RERA registration, state, launch date, planned OC date, saleable area, units launched / sold / unsold, escrow account, bank), every JDA (landowner, area share, cash component, CC target year), every land bank parcel, and the entity's Ind AS adoption status. This risk profile drives sample selection for contract-by-contract Ind AS 115 testing.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SA 210 Letter
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 141 Independence
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Project Portfolio Catalogue
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="28" y1="25" x2="92" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <rect x="28" y="34" width="35" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="44" width="55" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="54" width="45" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <circle cx="92" cy="68" r="9" fill="#10B981"/>
                                <path d="M87 68l4 4 7-7" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Engagement Letter</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Ind AS 115 Revenue Recognition - Over-Time vs Point-in-Time</h3>
                    <p class="step-description">
                        Patron applies the Ind AS 115 paragraph 35 control test for each active project. The 'no alternative use' limb requires the asset to be customised for the buyer or contractually restricted from being directed to another customer. The 'enforceable right to payment' limb requires the entity to be entitled to payment for work performed to date if the contract is terminated for reasons other than non-performance. For most Indian residential projects where buyers can cancel and recover paid amounts, revenue is recognised at the point of possession transfer. For B2B EPC contracts and customised commercial projects, over-time recognition using cost-to-cost input method typically applies.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Paragraph 35 Control Test
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Project-by-Project File
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ICAI GN Overlay
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="48" cy="50" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                                <path d="M37 50h22" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                                <path d="M48 39v22" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="48" cy="50" r="3.5" fill="#E8712C"/>
                                <line x1="73" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" marker-end="url(#arr2)"/>
                                <defs><marker id="arr2" markerWidth="6" markerHeight="6" refX="5" refY="3" orient="auto"><polygon points="0 0, 6 3, 0 6" fill="#14365F"/></marker></defs>
                                <rect x="90" y="35" width="22" height="30" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                                <path d="M95 50l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Ind AS 115 Test</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">RERA Escrow Audit and Quarterly Certification</h3>
                    <p class="step-description">
                        For each RERA-registered project, Patron tests (a) 70 percent of buyer collections during the year were deposited into the project-specific escrow within 48 hours, (b) every withdrawal was supported by joint certification of a CA, engineer and architect basis construction milestones, (c) the State RERA portal was updated within 7 days of each withdrawal, and (d) quarterly Form 5 (or state equivalent) was filed. Misuse or misreporting of escrow funds attracts penalty up to 5 percent of project cost under Sections 60 and 61 of RERA, plus potential revocation of registration.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            70 percent Deposit Trail
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Triple Certification
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Quarterly Form 5
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESCROW A/C</text>
                                <rect x="25" y="42" width="70" height="8" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                <rect x="25" y="42" width="49" height="8" rx="2" fill="#10B981"/>
                                <text x="60" y="48.5" font-size="6" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">70%</text>
                                <rect x="22" y="58" width="22" height="20" rx="3" fill="#FFFFFF" stroke="#F5A623" stroke-width="1"/>
                                <text x="33" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CA</text>
                                <rect x="48" y="58" width="22" height="20" rx="3" fill="#FFFFFF" stroke="#F5A623" stroke-width="1"/>
                                <text x="59" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ENG</text>
                                <rect x="74" y="58" width="22" height="20" rx="3" fill="#FFFFFF" stroke="#F5A623" stroke-width="1"/>
                                <text x="85" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ARCH</text>
                            </svg>
                        </div>
                        <span class="illustration-label">RERA Escrow Audit</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Inventory of Unsold Units and Land Cost Capitalisation</h3>
                    <p class="step-description">
                        WIP project inventory is valued at lower of cost or net realisable value under Ind AS 2 / AS 2. Patron tests (a) capitalisation of land acquisition cost (sale deed value + stamp duty + registration + legal fees), (b) development premium, EDC and IDC charges, (c) approval and CLU charges, (d) directly attributable construction cost (raw material + labour + sub-contractor), and (e) borrowing costs under Ind AS 23 - project-specific debt capitalised in full, general borrowing capitalised pro-rata based on the qualifying-asset expenditure. NRV is benchmarked against current per-square-foot rate in the project micro-market net of estimated selling costs; provision is created where NRV is below cost.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Lower of Cost or NRV
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Per-Sqft Benchmark
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Ind AS 23 Borrowing
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="30" width="22" height="55" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="50" y="20" width="22" height="65" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="80" y="40" width="22" height="45" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <rect x="24" y="36" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="32" y="36" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="24" y="46" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="32" y="46" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="54" y="26" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="62" y="26" width="6" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="84" y="46" width="6" height="6" fill="#F5A623" opacity="0.7"/>
                                <rect x="92" y="46" width="6" height="6" fill="#F5A623" opacity="0.7"/>
                                <rect x="84" y="56" width="6" height="6" fill="#F5A623" opacity="0.7"/>
                                <rect x="92" y="56" width="6" height="6" fill="#F5A623" opacity="0.7"/>
                                <text x="91" y="35" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">UNSOLD</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Unsold Inventory NRV</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">JDA Audit, Section 45(5A) Disclosure and Project-Wise P and L</h3>
                    <p class="step-description">
                        For each JDA, Patron reviews the legal terms - landowner's share (area or revenue), cash component, completion certificate trigger, refundable security deposit. Under Section 45(5A) of the Income Tax Act, capital gains for the landowner are taxable in the year the Competent Authority issues the Completion Certificate; the deemed full value of consideration is the stamp duty value of the landowner's share plus the cash component. Patron documents this position in the audit memo. Separately, project-wise P and L is reconciled - direct project costs, allocated common overheads, gross margin per project, NRV-versus-cost comparison for unsold inventory.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            JDA Legal Review
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 45(5A) Position
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Project-Wise P&L
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="20" width="40" height="60" rx="4" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="22" y1="32" x2="48" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                                <line x1="22" y1="42" x2="48" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                                <line x1="22" y1="52" x2="48" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                                <line x1="22" y1="62" x2="42" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                                <text x="35" y="76" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">JDA</text>
                                <line x1="58" y1="50" x2="68" y2="50" stroke="#14365F" stroke-width="2"/>
                                <path d="M65 47l3 3-3 3" stroke="#14365F" stroke-width="2" stroke-linecap="round" fill="none"/>
                                <rect x="70" y="22" width="38" height="56" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="89" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 45(5A)</text>
                                <text x="89" y="54" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">Capital Gains</text>
                                <text x="89" y="65" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">@ CC Year</text>
                            </svg>
                        </div>
                        <span class="illustration-label">JDA + 45(5A)</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Sign-Off, UDIN and AOC-4 Filing</h3>
                    <p class="step-description">
                        Patron's audit partner signs the report under UDIN generated on the ICAI portal, annexes it to Form AOC-4, and files with the Registrar of Companies within 30 days of the AGM. Form MGT-7 follows within 60 days. RERA Form 5 quarterly certifications are uploaded to the State RERA portal within 7 days of each escrow withdrawal during the year. For listed real estate entities, the SEBI LODR quarterly limited review report under Regulation 33 closes 45 days after each quarter-end (60 days for the fourth quarter audited annual report).
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            UDIN Generation
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AOC-4 within 30 days
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            MGT-7 within 60 days
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AUDIT REPORT</text>
                                <line x1="28" y1="40" x2="92" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="48" x2="92" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <rect x="55" y="62" width="38" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <text x="74" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">UDIN</text>
                                <circle cx="98" cy="85" r="11" fill="#10B981"/>
                                <path d="M92 85l4 4 8-8" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Sign-Off and Filing</span>
                        <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Checklist for Real Estate Audit</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll; Ind AS or AS framework declared.</li>
                    <li><strong>Project Master and RERA Registration:</strong> Project name, RERA registration number, state, launch date, planned OC date, saleable area, units launched / sold / unsold.</li>
                    <li><strong>Project-Wise WIP Ledger:</strong> Opening WIP, land cost, construction cost incurred, capitalised borrowing cost, transfer to cost of sales, closing WIP.</li>
                    <li><strong>Customer Sample Set (Top 25 + Random 15-25 per project):</strong> Sale agreement, payment schedule, instalments received, escrow deposit trail, possession date.</li>
                    <li><strong>RERA Escrow Bank Statements:</strong> Project-specific escrow account; 70 percent deposit trail; withdrawal certifications.</li>
                    <li><strong>CA / Engineer / Architect Certifications:</strong> Joint milestone certifications for every escrow withdrawal during the year.</li>
                    <li><strong>RERA Quarterly Form 5 Uploads:</strong> Each quarter's filing on State RERA portal with utilisation against construction stage.</li>
                    <li><strong>Land Title Deeds:</strong> Sale deed, stamp duty receipt, registration receipt, mutation extract, encumbrance certificate, CLU order, sanctioned layout plan.</li>
                    <li><strong>Joint Development Agreements:</strong> JDA / Development Management Agreement / Area Sharing Agreement; landowner share schedule; cash component; Section 45(5A) trigger workings.</li>
                    <li><strong>Section 80-IBA Affordable Housing Claim:</strong> Project approval letter (before 31 March 2022), unit-level eligibility (carpet area 60 sqm metro / 90 sqm non-metro; per-unit consideration ceiling).</li>
                    <li><strong>Borrowing Cost Capitalisation Schedule:</strong> Project-specific debt with sanction letters, general borrowing pool, weighted-average rate, qualifying-asset expenditure.</li>
                    <li><strong>NRV Working:</strong> Per-square-foot current market rate per project micro-market, less selling costs, less remaining construction cost; unit-wise NRV computation.</li>
                    <li><strong>GST and TDS Returns:</strong> GSTR-1, GSTR-3B, GSTR-9, GSTR-9C; SAC 9954 reconciliation; Section 194-IA Form 26QB trail.</li>
                    <li><strong>Section 43CA Working:</strong> Sale consideration vs stamp duty value comparison; 10 percent safe-harbour applicability.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Real Estate Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Ind AS 115 Over-Time vs Point-in-Time Judgement</td>
                            <td>For most residential projects with cancellation rights, the 'enforceable right to payment' limb fails - the buyer can cancel and recover paid amounts, so the developer does not have an enforceable right. The single biggest decision in the audit.</td>
                            <td>Patron tests each project's cancellation policy, refund history, and the legal enforceability of the right-to-payment clause in the sale agreement. The conclusion is documented project-by-project as the basis for the auditor's opinion and disclosed as a critical accounting estimate under Ind AS 1 paragraph 122.</td>
                        </tr>
                        <tr>
                            <td>RERA Escrow Withdrawal Beyond Construction Stage</td>
                            <td>Escrow utilisation exceeding the construction stage percentage. For example, a project at 30 percent construction stage that has drawn down 50 percent of escrow indicates diversion or advance payment. Section 60 RERA penalty up to 5 percent of estimated project cost.</td>
                            <td>Patron reconciles cumulative escrow withdrawal to cumulative construction stage at each quarter-end, flags excess withdrawals with the triple-certificate trail, and reviews the management's explanation for any timing mismatch.</td>
                        </tr>
                        <tr>
                            <td>Joint Development Agreement Section 45(5A) Position</td>
                            <td>Many landowner trusts and HUFs incorrectly book the capital gains in the JDA signing year or fail to provide for the tax in the CC year. Wrong treatment leads to Income Tax notices and 234 series interest.</td>
                            <td>Patron's audit reviews each active JDA, the planned CC date, the estimated stamp duty value, and either accrues a contingent tax disclosure (year before CC) or computes the actual provision (year of CC). For the developer side, the cost of acquisition for the landowner's share becomes the cost basis for saleable inventory.</td>
                        </tr>
                        <tr>
                            <td>Borrowing Cost Capitalisation Ceiling and Cessation</td>
                            <td>Common audit finding - continued capitalisation of borrowing cost into completed unsold inventory. This inflates inventory and defers an interest expense that should be in P and L. Restates the P and L and inventory value.</td>
                            <td>Patron tests the OC receipt date project-by-project, traces capitalisation cessation to the qualifying-asset-completion event under Ind AS 23, and reclassifies any post-OC borrowing cost as period expense.</td>
                        </tr>
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
            <h2 class="section-title">Patron Statutory Audit Fees for Real Estate Companies</h2>
            <div class="content-text">
                <p>Patron's statutory audit fees for real estate companies scale with project portfolio size, JDA complexity and listed entity status. RERA quarterly Form 5 certification, Ind AS 115 contract testing, and Section 45(5A) JDA disclosure are bundled at the higher tiers.</p>
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Real Estate Profile</th><th>Patron Fee (Rs)</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Single-project developer (turnover under Rs 5 cr)</td><td>1,25,000 to 2,75,000</td><td>6 weeks</td></tr>
                        <tr><td>Small developer 1 to 3 projects (turnover Rs 5 to 25 cr)</td><td>3,00,000 to 6,00,000</td><td>6 to 7 weeks</td></tr>
                        <tr><td>Mid-size developer 3 to 10 projects (turnover Rs 25 to 100 cr)</td><td>6,50,000 to 14,00,000</td><td>7 to 8 weeks</td></tr>
                        <tr><td>Large developer 10+ projects or multi-state (turnover Rs 100 to 500 cr)</td><td>15,00,000 to 35,00,000</td><td>8 to 10 weeks</td></tr>
                        <tr><td>JDA-heavy portfolio (Section 45(5A) computations)</td><td>Add 1,00,000 to 3,50,000</td><td>Same window</td></tr>
                        <tr><td>RERA Form 5 quarterly certifications (4 per project)</td><td>Add 25,000 to 75,000 per project per year</td><td>Quarterly</td></tr>
                        <tr><td>Listed real estate entity (KAM + IFC + SEBI LODR quarterly limited review)</td><td>From 35,00,000</td><td>9 to 12 weeks</td></tr>
                        <tr><td>Affordable housing Section 80-IBA claim disclosure</td><td>Add 75,000 to 2,00,000</td><td>Same window</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting from INR 1,25,000 (Exl GST and Govt. Charges)</strong></td><td>6 weeks</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for the seven real-estate-specific risk areas - Ind AS 115 control test, RERA escrow audit, unsold inventory NRV, land cost capitalisation, JDA Section 45(5A) disclosure, project-wise P and L, and CARO 3(i)(c) title-deed verification - are bundled at the tier rates above. Statutory filing fees with the MCA portal, RERA portal upload fees, and any UDIN-generation cost are separate. The exact fee depends on the number of active projects, JDA count, listed status, and number of RERA states involved. Contact us for a portfolio-tiered quote.</p>
                <p style="margin-top:16px;"><strong>Get a free statutory audit consultation for your real estate company - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20real%20estate%20company." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit Timeline for Real Estate Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Duration</th><th>Notes</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement and project profiling</td><td>Week 1</td><td>SA 210 engagement letter; Section 141 independence; project portfolio catalogue.</td></tr>
                        <tr><td>Pre-year-end interim audit</td><td>Week 2 to 3</td><td>Q4 substantive testing; Ind AS 115 contract walkthrough; JDA term review.</td></tr>
                        <tr><td>Ind AS 115 contract sample testing</td><td>Weeks 3 to 5</td><td>Top 25 plus random 15-25 contracts per project; over-time vs point-in-time conclusion documentation.</td></tr>
                        <tr><td>RERA escrow and project-wise WIP audit</td><td>Weeks 4 to 6</td><td>70 percent deposit verification; triple certification review; project WIP reconciliation.</td></tr>
                        <tr><td>NRV testing and unsold inventory provision</td><td>Weeks 5 to 6</td><td>Per-sqft NRV benchmark; provision for delayed projects.</td></tr>
                        <tr><td>JDA Section 45(5A) review (parallel)</td><td>Weeks 4 to 6</td><td>Each JDA's CC timing; capital gains accrual position.</td></tr>
                        <tr><td>Draft report and management response</td><td>Week 6 to 7</td><td>SA 700 / 705 review; KAM discussion for listed entities.</td></tr>
                        <tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM</td><td>Patron files AOC-4 with audit report annexed.</td></tr>
                        <tr><td>RERA Form 5 year-end consolidated upload</td><td>Within 7 days of last withdrawal</td><td>State RERA portal.</td></tr>
                        <tr><td>SEBI LODR Reg 33 quarterly limited review (listed entities)</td><td>Within 45 days of quarter-end</td><td>60 days for Q4 annual.</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>&#9888; Statutory Deadlines to Track:</strong></p>
                    <p>AOC-4 with audit report filed within 30 days of AGM; MGT-7 within 60 days of AGM; ADT-1 (auditor appointment) within 15 days of board resolution. RERA Form 5 quarterly certification within 7 days of each escrow withdrawal. SEBI LODR Reg 33 quarterly limited review for listed real estate entities within 45 days of quarter-end (60 days for Q4 annual). Delay in MCA filings attracts Rs 100 per day additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000.</p>
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
            <h2 class="section-title">Benefits of Patron-Led Real Estate Audit</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
                <h3 class="feature-title">Single Engagement, Seven Risk Areas</h3>
                <p class="feature-text">One engagement letter covers Section 143 statutory audit, RERA escrow audit and Form 5 quarterly certifications, Ind AS 115 contract testing, JDA Section 45(5A) disclosure, and CARO 3(i)(c) title-deed verification. Eliminates the workpaper duplication that occurs when developers stitch together a statutory auditor, separate RERA quarterly auditor, and JDA tax advisor.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">Project-by-Project Ind AS 115 Test</h3>
                <p class="feature-text">Each active project's over-time vs point-in-time control test documented as a critical accounting estimate under Ind AS 1 paragraph 122. Cancellation policy, refund history, and right-to-payment enforceability tested on the actual sale agreement. The conclusion is the basis for the auditor's opinion - never a one-line assumption.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
                <h3 class="feature-title">RERA Escrow Reconciled to Construction Stage</h3>
                <p class="feature-text">Cumulative escrow withdrawal reconciled to cumulative construction stage at each quarter-end. Triple certification trail (CA + Engineer + Architect) cross-checked against State RERA dashboard within 7 days. Catches the precise breach pattern that draws penalty under RERA Sections 60 and 61 of up to 5 percent of project cost.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg></div>
                <h3 class="feature-title">Borrowing Cost Cessation Traced to OC</h3>
                <p class="feature-text">Capitalisation cessation under Ind AS 23 traced project-by-project to OC receipt date. Reclassifies any post-OC borrowing cost from inventory to period expense. Prevents the common audit finding of inflated unsold inventory and deferred interest charge.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3 class="feature-title">Section 45(5A) Position Quantified per JDA</h3>
                <p class="feature-text">Each active JDA reviewed for legal terms - landowner share, cash component, CC trigger year, stamp duty value estimate. Contingent tax disclosure (year before CC) or actual provision (year of CC) computed and documented. Prevents Income Tax notices and 234 series interest.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/></svg></div>
                <h3 class="feature-title">CARO 3(i)(c) Title-Deed Register Cross-Checked</h3>
                <p class="feature-text">Land deed register cross-checked under CARO clause 3(i)(c) - especially critical for redevelopment SPVs with society conveyance pending and JDA landowner conveyance lag. Sale deed, mutation extract, encumbrance certificate, CLU order verified for every land parcel and completed building owned by the entity.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Real Estate Audit Clients: Track Record</h2>
            <div class="content-text">
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p>"The statutory audit was clean and completed well before deadline. No last-minute rush." - MD, Trading Firm, Mumbai</p>
                <p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of residential and commercial real estate developers across Mumbai, Pune and Gurugram. With offices in Pune, Mumbai, Delhi and Gurugram, Patron services real estate developers operating across BKC, Worli, Hinjewadi, Hadapsar, DLF Cyber City, Sohna Road, Noida Sectors 62 / 150, and Dwarka Expressway corridors.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron-Led Real Estate Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron-Led</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>DIY / In-House</th></tr></thead>
                    <tbody>
                        <tr><td>Independence under Section 141</td><td>Qualified</td><td>Qualified</td><td>Disqualified</td></tr>
                        <tr><td>Ind AS 115 over-time vs point-in-time</td><td>Project-by-project documented test</td><td>Heavy procedure</td><td>Cannot self-conclude</td></tr>
                        <tr><td>RERA Form 5 quarterly certification</td><td>Bundled with statutory audit</td><td>Bundled or separate</td><td>Cannot self-sign</td></tr>
                        <tr><td>JDA Section 45(5A) disclosure</td><td>Single-partner sign-off</td><td>Separate tax partner</td><td>Often missed</td></tr>
                        <tr><td>Unsold inventory NRV</td><td>Per-sqft micro-market benchmark</td><td>Heavy modelling</td><td>Self-NRV rejected</td></tr>
                        <tr><td>CARO 3(i)(c) title-deed register</td><td>Land deed register cross-check</td><td>Heavy diligence</td><td>Self-register accepted by no one</td></tr>
                        <tr><td>Cost (mid-size 5-project developer)</td><td>Rs 6.5 to 14 lakh</td><td>Rs 20 to 50 lakh</td><td>Apparent zero - unsignable</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;">Statutory audit cannot be performed in-house - Section 141 disqualifies all officers and employees. For listed real estate companies, REITs and sponsor groups of Real Estate AIFs, Big-Four scale is typically expected by SEBI and lenders. For unlisted developers with up to 10 active projects, JDA-heavy landowner trusts, and small to mid-size construction contractors, a senior partner-led mid-tier firm typically delivers equivalent assurance at one-third the Big-Four fee, with faster turnaround and direct partner access on the over-time-vs-point-in-time judgement that drives the entire revenue P and L profile.</p>
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
                <p>Real estate developers, construction companies, JDA landowners and redevelopment SPVs often need a bundled compliance scope. These are the services Patron offers alongside the statutory audit:</p>
                <ul>
                    <li><strong>Statutory Audit (India):</strong> <a href="/statutory-audit">Parent statutory audit page</a> - Section 143 framework applicable across all industries.</li>
                    <li><strong>Tax Audit (Section 44AB):</strong> <a href="/tax-audit">Tax audit</a> - bundled for real estate companies above Rs 1 crore turnover; Form 3CD and 3CA / 3CB.</li>
                    <li><strong>Internal Audit (Section 138):</strong> <a href="/internal-audit">Internal audit</a> - recommended for developers above Rs 200 cr turnover or multi-project portfolios with material related-party transactions.</li>
                    <li><strong>Stock Audit:</strong> <a href="/stock-audit">Stock audit</a> - lender-mandated audit for developers with project-finance loans and CC limits secured against inventory.</li>
                    <li><strong>GST Audit:</strong> <a href="/gst-audit">GST audit</a> - GSTR-9C reconciliation; SAC 9954 construction services classification; 5/1 percent vs 18 percent rate review for residential vs commercial.</li>
                    <li><strong>Secretarial Audit:</strong> <a href="/secretarial-audit">Secretarial audit</a> - mandatory for listed and large unlisted real estate companies under Section 204; Form MR-3.</li>
                    <li><strong>Construction and Real Estate Accounting Services:</strong> <a href="/construction-and-real-estate-accounting-services">Peer accounting service</a> - ongoing books, project costing, RERA monthly bookkeeping for the same client.</li>
                    <li><strong>Payroll for Construction and Real Estate:</strong> <a href="/payroll-services-for-construction-real-estate-industry">Construction payroll</a> - worker payroll, contractor sub-payroll, BOCW Act compliance.</li>
                    <li><strong>Appointment of Auditor:</strong> <a href="/appointment-of-auditor">Appointment of auditor</a> - first auditor and AGM appointment with ADT-1 filing.</li>
                    <li><strong>Change of Auditor:</strong> <a href="/change-of-auditor">Change of auditor</a> - Section 140 resignation and replacement; mid-term casual vacancy.</li>
                    <li><strong>Private Limited Compliance:</strong> <a href="/private-limited-company-compliance">Pvt Ltd compliance</a> - ROC annual filings ADT-1, AOC-4, MGT-7 for the project SPV.</li>
                </ul>
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
                <p>The statutory audit framework for real estate companies in India draws on the Companies Act, RERA 2016, the Income Tax Act, and ICAI guidance. Authoritative sources include the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3 portal</a> for AOC-4 / MGT-7 / ADT-1 filings, <a href="https://maharera.maharashtra.gov.in" target="_blank" rel="noopener">MahaRERA</a> for state RERA portal disclosures, and <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India</a> for Section 45(5A), 43CA, 80-IBA, and 194-IA references.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Acts</td><td>Companies Act 2013 - Sections 139 to 148; RERA 2016 - Sections 4, 11, 60, 61; Income Tax Act 1961 - Sections 45(5A), 43CA, 80-IBA, 194-IA; GST Act 2017</td></tr>
                        <tr><td>Section 139 Companies Act</td><td>First auditor within 30 days; AGM appointment for 5 / 10 years</td></tr>
                        <tr><td>Section 143 Companies Act</td><td>Powers and duties; SA 700 / 705 reporting; CARO 2020 annexure</td></tr>
                        <tr><td>Section 147 Companies Act</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>RERA Section 4(2)(l)(D)</td><td>70 percent of buyer collections to be parked in project-specific escrow with a scheduled commercial bank; usable only for land and construction of that project</td></tr>
                        <tr><td>RERA Section 11(3)(b)</td><td>Buyer right to demand escrow audit data and project information</td></tr>
                        <tr><td>RERA Sections 60 and 61</td><td>Penalty up to 5 percent of estimated project cost for misuse / misreporting; project registration revocation possible</td></tr>
                        <tr><td>Income Tax Section 45(5A)</td><td>JDA capital gains for landowner taxable in the year the Completion Certificate is issued; deemed consideration = stamp duty value of landowner share + cash</td></tr>
                        <tr><td>Income Tax Section 43CA</td><td>Sale of immovable property held as stock-in-trade - stamp duty value vs actual consideration; safe harbour 10 percent (variance within 10 percent ignored)</td></tr>
                        <tr><td>Income Tax Section 80-IBA</td><td>Affordable housing 100 percent profit deduction for projects approved before 31 March 2022 (sunset; legacy claims continue during eligible block)</td></tr>
                        <tr><td>Income Tax Section 194-IA</td><td>1 percent TDS on sale consideration of immovable property above Rs 50 lakh; deducted by buyer; deposited via Form 26QB</td></tr>
                        <tr><td>GST on Real Estate</td><td>Under-construction residential: 5 percent without ITC (1 percent for affordable); Commercial / completed: 18 percent with ITC available; SAC 9954 - Construction Services</td></tr>
                        <tr><td>Ind AS 115 Paragraph 35</td><td>Over-time recognition criteria - (a) simultaneous benefit, (b) customer-controlled asset created, (c) no alternative use + enforceable right to payment</td></tr>
                        <tr><td>Ind AS 115 Paragraph 38</td><td>Point-in-time recognition - default if paragraph 35 criteria not met; based on indicators of control transfer</td></tr>
                        <tr><td>ICAI Guidance Note on Real Estate (Ind AS), May 2016</td><td>Supplementary guidance for Ind AS entities on real estate transactions - development rights, JDA, area-share, land bank, plotted development</td></tr>
                        <tr><td>Ind AS 23</td><td>Borrowing Costs - capitalisation during qualifying-asset construction; cessation on substantial completion</td></tr>
                        <tr><td>Ind AS 2 / AS 2</td><td>Inventory - lower of cost or NRV; cost = land + construction + capitalised borrowing + directly attributable costs</td></tr>
                        <tr><td>Ind AS 116 / AS 19</td><td>Lease accounting - applicable to commercial real estate with rental income; lessor-side recognition</td></tr>
                        <tr><td>CARO 2020 Clauses for Real Estate</td><td>3(i)(a) PP and E records; 3(i)(b) physical verification at reasonable intervals; 3(i)(c) title deeds in company name; 3(i)(d) revaluation by registered valuer above 10 percent; 3(ii) inventory (unsold units); 3(vii) statutory dues (GST and TDS); 3(xv) related-party</td></tr>
                        <tr><td>Standards on Auditing (ICAI)</td><td>SA 200, SA 500, SA 540 (Auditing Accounting Estimates - applies to NRV, Ind AS 115 timing judgement, JDA fair value), SA 550 (Related Parties), SA 570 (Going Concern), SA 700 / 701 / 705 / 706</td></tr>
                        <tr><td>RERA State Variations</td><td>Maharashtra MahaRERA (Form 5 quarterly), Karnataka K-RERA (Form 7 quarterly), Tamil Nadu TN-RERA (Form 7), Telangana TS-RERA, Haryana HRERA, Uttar Pradesh UPRERA - state-wise rules and forms</td></tr>
                        <tr><td>Forms</td><td>ADT-1 (auditor), AOC-4 (financials), MGT-7 (annual return), 3CD (tax audit), RERA Form 5 / 7 (quarterly), Form 26QB (Section 194-IA), GSTR-9 / 9C</td></tr>
                    </tbody>
                </table>
                </div>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Statutory Audit for Real Estate</h2>
                    <p class="faq-expanded__lead">Common questions from real estate developer CFOs, JDA landowners, construction finance heads and redevelopment SPV directors on Section 143, RERA escrow, Ind AS 115 timing and Section 45(5A).</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Statutory Audit for Real Estate'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for real estate developers in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - including every real estate developer Pvt Ltd, Public Ltd, OPC, project SPV and JDA landowner company - irrespective of project size or completion status. A single-tower residential project in launch year one and a multi-state listed real estate group are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment. LLPs above Rs 40 lakh turnover are also bound under LLP Rule 24.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When does a real estate developer recognise revenue under Ind AS 115?</h3>
                        <div class="faq-expanded__a"><p>Under Ind AS 115 paragraph 35, revenue is recognised over time if (a) the customer simultaneously receives and consumes the benefits, (b) the entity's performance creates an asset the customer controls as it is created, or (c) the asset has no alternative use to the entity AND the entity has an enforceable right to payment for performance completed to date. For most Indian residential projects where buyers can cancel and recover most paid amounts, the enforceable-right-to-payment limb fails - revenue is recognised at the point in time the possession is transferred. For B2B EPC contracts and customised commercial projects, over-time recognition using cost-to-cost input method typically applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the RERA 70 percent escrow rule?</h3>
                        <div class="faq-expanded__a"><p>Under Section 4(2)(l)(D) of the Real Estate (Regulation and Development) Act, 2016, every real estate developer must park at least 70 percent of every buyer collection from an allottee into a project-specific escrow account with a scheduled commercial bank. The funds can be drawn down only for the land and construction costs of that specific project. Each withdrawal requires joint written certification by a Chartered Accountant, Civil Engineer and Architect basis the construction stage. The State RERA dashboard must be updated within 7 days of each withdrawal. Quarterly Form 5 (or state equivalent) is filed by the developer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are unsold flats valued in a statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Unsold flats and WIP project inventory are valued at the lower of cost or net realisable value under Ind AS 2 / AS 2. Cost includes land acquisition (sale deed value + stamp duty + registration + legal), development premium, EDC and IDC charges, approvals, directly attributable construction cost (materials + labour + sub-contractors), and capitalised borrowing cost under Ind AS 23. NRV is computed as the estimated current selling price per square foot in the project micro-market, less estimated selling costs (brokerage, marketing), less remaining construction cost to complete. Where NRV is below cost, the inventory is written down and a corresponding charge hits the P and L.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 45(5A) for joint development agreements?</h3>
                        <div class="faq-expanded__a"><p>Section 45(5A) of the Income Tax Act, 1961 governs the timing of capital gains for a landowner under a joint development agreement. The capital gains accrue not in the year of the JDA but in the year the Completion Certificate is issued by the competent authority for the project. The deemed full value of consideration is the stamp duty value of the landowner's share of the project at the date of the CC plus any cash component received. This special timing rule applies only to individuals and HUFs (with certain conditions); for corporate landowners, regular capital gains timing under Section 45(1) applies based on transfer of capital asset.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is land cost capitalised in real estate accounting?</h3>
                        <div class="faq-expanded__a"><p>Land cost is capitalised as part of project inventory under Ind AS 2 / AS 2. The capitalised cost includes (a) sale deed consideration paid to the seller, (b) stamp duty and registration charges, (c) legal fees and due diligence costs, (d) development premium and EDC / IDC charges payable to the local authority, (e) Change of Land Use (CLU) charges, (f) brokerage paid for the acquisition, and (g) any direct cost necessary to bring the land to a state ready for development. Borrowing cost incurred on a project-specific debt used to fund the land purchase is capitalised under Ind AS 23 from the date of acquisition until substantial completion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is CARO clause 3(i)(c) on title deeds?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 clause 3(i)(c) requires the statutory auditor to report whether all title deeds of all immovable properties disclosed in the financial statements are held in the name of the company. For real estate companies, this is critical because the auditor verifies sale deeds, registration receipts, mutation extracts, and encumbrance certificates for every land parcel, every completed building owned, and every redevelopment site. Where the title deed is in the name of a related party (group company, promoter HUF, partnership firm pre-conversion) or a JDA landowner pending conveyance, the property description, gross carrying value, and the name in which it is held must be disclosed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the project-wise P and L disclosure requirement?</h3>
                        <div class="faq-expanded__a"><p>Project-wise profit and loss is mandatory under RERA - each registered project must have a separate financial trail showing land cost, construction cost, marketing expenses, finance cost, revenue recognised, and cumulative profit or loss. The statutory auditor uses the project-wise P and L for three purposes - (a) to verify cost capitalisation in the project WIP, (b) to compute NRV-versus-cost comparison for unsold inventory provisioning, and (c) to detect cross-project subsidisation that may indicate diversion of buyer funds in violation of RERA. The project-wise P and L is also required for any provision for stalled or delayed projects.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Real estate developer ka audit kaise hota hai?</strong> Companies Act Section 143 ke under practicing CA dwara annual examination - Ind AS 115 (over-time vs point-in-time), RERA escrow, unsold inventory NRV, JDA Section 45(5A), project-wise P and L, CARO 3(i)(c) title deeds.</p>
                <p><strong>RERA escrow account audit kya hai?</strong> 70 percent of buyer collections project-specific escrow mein deposit hone chahiye. Withdrawal ke liye CA + Engineer + Architect ki joint certification. State RERA dashboard mein 7 days mein update.</p>
                <p><strong>Joint development agreement mein capital gains kab lagta hai?</strong> Section 45(5A) ke under landowner ka capital gains Completion Certificate issue hone ke saal mein lagta hai - JDA signing ke saal nahi. Stamp duty value of landowner share + cash = deemed consideration.</p>
                <p><strong>Unsold flat ki valuation kaise hoti hai?</strong> Ind AS 2 / AS 2 ke under lower of cost or NRV. Cost = land + construction + capitalised borrowing + EDC / IDC. NRV = current per-sqft rate minus selling costs minus remaining construction cost.</p>
                <p><strong>Section 80-IBA affordable housing kya hai?</strong> 100 percent profit deduction for affordable housing projects approved before 31 March 2022. Carpet area cap - 60 sqm metro / 90 sqm non-metro. Sunset clause applies; legacy claims jaari rahenge during eligible block.</p>
                <p><strong>Real estate pe GST kitna lagta hai?</strong> Under-construction residential 5 percent without ITC (1 percent affordable). Commercial ya completed property 18 percent with ITC. SAC 9954.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Critical Deadlines and Penalty Exposure</h2>
            <div class="content-text">
                <p>AOC-4 with the audit report must be filed within 30 days of the AGM and MGT-7 within 60 days. RERA Form 5 quarterly escrow certification is uploaded to the State RERA portal within 7 days of each withdrawal during the year. SEBI LODR Regulation 33 quarterly limited review report (for listed real estate entities) closes 45 days after each quarter-end (60 days for Q4 annual). Section 80-IBA affordable housing claims have a sunset (project approval before 31 March 2022); legacy claims continue during the eligible block.</p>
                <p>RERA penalty for escrow misuse or misreporting is up to 5 percent of project cost under Sections 60 and 61 plus potential registration revocation. Delay in Section 143 audit filings attracts Rs 100 per day MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company. The auditor faces equivalent penalty under Section 147 (Rs 25,000 to Rs 5,00,000; Rs 1 lakh to Rs 25 lakh in fraudulent cases). Officer in default exposure: Rs 10,000 to Rs 1,00,000.</p>
                <p><strong>Don't wait for the AGM week panic.</strong> Patron starts real estate audit fieldwork at least 8 weeks before AGM to capture Q4 substantive testing, Ind AS 115 contract walkthrough, and JDA legal review without weekend overtime. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20real%20estate%20company." target="_blank">WhatsApp us</a> for a portfolio-tiered quote.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Your Real Estate Statutory Audit</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:#FFFFFF !important;">Statutory audit for real estate companies is the most life-cycle-intensive audit category in India - projects take 4 to 7 years from launch to possession, revenue recognition depends on a fine-grained Ind AS 115 control test, 70 percent of every buyer collection sits in escrow until milestone-certified by a CA, engineer and architect, JDA tax timing under Section 45(5A) accrues only on Completion Certificate, and project-wise P and L must reconcile to RERA disclosures.</p>
                <p style="color:#FFFFFF !important;">An audit that mishandles any one of these surfaces in RERA notices, lender diligence, investor due diligence, or a CARO clause 3(i)(c) title qualification. Patron Accounting handles the full scope under a single CA partner with real-estate-aware risk assessment, project-by-project Ind AS 115 over-time vs point-in-time test, RERA escrow utilisation reconciliation with triple certification, NRV-versus-cost testing for unsold inventory, JDA Section 45(5A) disclosure, project-wise P and L reconciliation, and CARO 3(i)(c) title-deed register verification.</p>
                <p style="color:#FFFFFF !important;">Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from single-tower projects to multi-state listed developer groups. Whether you're a single-project plotted developer, a JDA landowner trust, a redevelopment SPV with society conveyance pending, or a listed real estate group with SEBI LODR quarterly limited review obligations - Patron's seven-risk-area framework is your one engagement letter for the year.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20real%20estate%20company." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20Real%20Estate%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20Real%20Estate%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Other Services for Real Estate and Construction Companies</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end audit, tax, payroll and compliance support for the real estate sector under one roof.</p>
       
            <div class="pa-city-block">
                <div class="pa-block-title">Related Audit and Real Estate Services</div>
                <div class="pa-block-sub">End-to-end support for real estate developers, construction companies and JDA landowners</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (India)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Section 44AB)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/stock-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Stock Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/construction-and-real-estate-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Construction and Real Estate Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-services-for-construction-real-estate-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll for Construction and Real Estate</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is on a Tier 1 quarterly review cycle - we re-check it every quarter against the latest CBDT / CBIC / MCA / state RERA notifications, GST Council recommendations, and ICAI standards-on-auditing revisions. Material updates trigger an immediate refresh; routine sweeps consolidate at the quarter-end.</p>
        </div>
    </div>
</section>



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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');
    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection