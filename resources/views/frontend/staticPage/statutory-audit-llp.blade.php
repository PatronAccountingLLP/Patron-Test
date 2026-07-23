
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
    <title>LLP Statutory Audit: Sec 34</title>
    <meta name="description" content="LLP statutory audit under Section 34(4) LLP Act 2008 and Rule 24(8). Triggered above Rs 40 lakh turnover OR Rs 25 lakh contribution. Patron from Rs 18,000.">
    <link rel="canonical" href="/statutory-audit-llp">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Statutory Audit 2026: Sec 34 | Patron Accounting">
    <meta property="og:description" content="LLP statutory audit under Section 34(4) LLP Act 2008 and Rule 24(8). Triggered above Rs 40 lakh turnover OR Rs 25 lakh contribution. Patron from Rs 18,000.">
    <meta property="og:url" content="/statutory-audit-llp">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-llp-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Statutory Audit 2026: Sec 34 | Patron Accounting">
    <meta name="twitter:description" content="LLP statutory audit under Section 34(4) LLP Act 2008 and Rule 24(8). Triggered above Rs 40 lakh turnover OR Rs 25 lakh contribution. Patron from Rs 18,000.">
    <meta name="twitter:image" content="/images/statutory-audit-llp-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/statutory-audit-llp#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit Services", "item": "/statutory-audit-services" },
        { "@type": "ListItem", "position": 3, "name": "LLP Statutory Audit", "item": "/statutory-audit-llp" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/statutory-audit-llp#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is statutory audit mandatory for all LLPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. LLP statutory audit under Section 34(4) of the LLP Act 2008 read with Rule 24(8) of LLP Rules 2009 is triggered only when the LLP's turnover exceeds Rs 40 lakh OR contribution exceeds Rs 25 lakh in any financial year. Below both thresholds, audit is voluntary; the LLP must still maintain books and file Form 8 with Designated Partner self-certification."
          }
        },
        {
          "@type": "Question",
          "name": "What is the LLP audit threshold under Section 34(4)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Audit is mandatory if turnover exceeds Rs 40 lakh OR partner contribution (cumulative, as recorded in the LLP agreement) exceeds Rs 25 lakh in any financial year. Crossing either single threshold triggers the audit for the full FY - the literal reading of the 'OR' in Rule 24(8) is the prevailing market and ICAI practice."
          }
        },
        {
          "@type": "Question",
          "name": "Who appoints the auditor in an LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Designated Partners (DPs) appoint the statutory auditor. For the first FY, appointment can be made anytime before the end of the first FY. For subsequent FYs, the auditor must be appointed at least 30 days before the end of each FY. If DPs fail to appoint, partners may step in to appoint. There is no AGM requirement (unlike Pvt Ltd)."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form 8 and Form 11 for LLPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 11 (Annual Return) is filed by 30 May under Section 35 of LLP Act, disclosing partner contribution and changes during the year. Form 8 (Statement of Account and Solvency) is filed by 30 October under Section 34, containing Part A solvency statement and Part B income/expenditure plus assets/liabilities. Form 8 Part B requires auditor certification if Section 34(4) threshold is crossed."
          }
        },
        {
          "@type": "Question",
          "name": "Does CARO 2020 apply to LLPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. CARO 2020 (Companies Auditor's Report Order 2020) is issued under Section 143(11) of the Companies Act 2013 and applies only to companies, not to LLPs. LLPs registered under the LLP Act 2008 are outside the Companies Act framework entirely. Similarly, Section 143(3)(i) Internal Financial Controls reporting and Section 139(2) auditor rotation do not apply to LLPs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between LLP audit and Pvt Ltd audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LLP audit is conditional (triggered above Rs 40 lakh turnover or Rs 25 lakh contribution); Pvt Ltd audit is mandatory regardless of size. LLP uses Form 8 and Form 11; Pvt Ltd uses AOC-4 and MGT-7. LLP audit is governed by LLP Act 2008 Section 34(4); Pvt Ltd by Companies Act 2013 Section 139. No CARO 2020, IFC, or rotation for LLPs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of statutory audit for an LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's fixed-fee tiers: Tier 1 just-above-threshold LLP (Rs 40 lakh to Rs 1 crore turnover) Rs 18,000 to Rs 25,000; Tier 2 mid-size (Rs 1 to 10 crore) Rs 30,000 to Rs 50,000; Tier 3 large LLP (above Rs 10 crore) Rs 60,000 to Rs 1,50,000. LLP audit pricing is materially lower than equivalent Pvt Ltd audit because scope excludes CARO 2020, IFC reporting, and rotation tracking."
          }
        },
        {
          "@type": "Question",
          "name": "What is a small LLP under the LLP Amendment Act 2021?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A small LLP under the LLP Amendment Act 2021 (effective 1 April 2022) is one where turnover does not exceed Rs 40 lakh AND contribution does not exceed Rs 25 lakh. Note the 'AND' - both conditions must be met simultaneously for small LLP status. Small LLPs get certain compliance relaxations but the Rule 24(8) audit threshold remains the same trigger."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/statutory-audit-llp#service",
      "name": "LLP Statutory Audit under Section 34(4) LLP Act 2008 and Rule 24(8)",
      "description": "ICAI-compliant statutory audit for Limited Liability Partnerships under Section 34(4) of the LLP Act 2008 read with Rule 24(8) of LLP Rules 2009. Triggered when turnover crosses Rs 40 lakh OR contribution crosses Rs 25 lakh in any financial year. Includes SA-compliant audit execution (SA 230, 315, 330, 500, 530, 700) with UDIN-verified auditor's report, Form 8 (Statement of Account and Solvency) Part A and Part B preparation and certification, Form 11 (Annual Return) preparation and filing, Designated Partner auditor appointment resolution, and ITR-5 coordination. No CARO 2020, no Section 143(3)(i) Internal Financial Controls reporting, no Section 139(2) auditor rotation - scope narrower than Pvt Ltd audit. Pricing tiers from Rs 18,000 (Tier 1 just-above-threshold LLP), Rs 30,000 (Tier 2 mid-size), Rs 60,000+ (Tier 3 large LLP). National coverage with offices in Pune, Mumbai, Delhi, and Gurugram.",
      "serviceType": "LLP Statutory Audit",
      "provider": { "@id": "/#organization" },
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "about": [
        { "@type": "Thing", "name": "Limited Liability Partnership Act 2008", "sameAs": "https://en.wikipedia.org/wiki/Limited_Liability_Partnership_Act,_2008" },
        { "@type": "Thing", "name": "Limited liability partnership", "sameAs": "https://en.wikipedia.org/wiki/Limited_liability_partnership" },
        { "@type": "Thing", "name": "Statutory audit", "sameAs": "https://en.wikipedia.org/wiki/Audit" },
        { "@type": "Thing", "name": "Institute of Chartered Accountants of India", "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "LLP Statutory Audit Service Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - Just-Above-Threshold LLP Audit (Rs 40 lakh to Rs 1 crore turnover)", "price": "18000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-llp" },
          { "@type": "Offer", "name": "Tier 2 - Mid-Size LLP Audit (Rs 1 to 10 crore turnover)", "price": "30000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-llp" },
          { "@type": "Offer", "name": "Tier 3 - Large LLP Audit (above Rs 10 crore turnover)", "price": "60000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-llp" },
          { "@type": "Offer", "name": "Form 8 Preparation and Auditor Certification", "price": "18000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-llp" }
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
                        LLP Statutory Audit - Section 34(4) LLP Act 2008 and Rule 24(8) Framework
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Conditional Audit Under Section 34(4):</span> Triggered when turnover crosses Rs 40 lakh OR contribution crosses Rs 25 lakh in any FY. Below both thresholds - audit is voluntary, books still mandatory. Crossing either threshold even once triggers audit for the full FY.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>SA-Compliant + Form 8 + Form 11:</span> Full ICAI SA series (SA 230, 315, 330, 500, 530, 700) with UDIN-verified auditor's report. Form 8 Part B certification + Form 11 annual return + Designated Partner resolution + MCA V3 filings, all coordinated.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>No CARO, No IFC, No Rotation:</span> Unlike Pvt Ltd audit, LLP scope excludes CARO 2020, Section 143(3)(i) Internal Financial Controls, and Section 139(2) rotation. Materially narrower scope - and materially lower fees.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fixed-Fee Pricing from Rs 18,000:</span> Tier 1 just-above-threshold LLP from Rs 18,000. Tier 2 mid-size from Rs 30,000. Tier 3 large LLP from Rs 60,000. Pvt Ltd equivalent fees start at Rs 35,000 - LLP audit is roughly half the cost.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 500+ Statutory Audits Completed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20fixed-fee%20quote%20for%20LLP%20statutory%20audit%20under%20Section%2034%284%29." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - LLP Statutory Audit'/>
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
                                <option value="statutory-audit-llp" selected>LLP Statutory Audit (Section 34(4))</option>
                                <option value="statutory-audit-services">Statutory Audit Services (National Hub)</option>
                                <option value="statutory-audit-private-limited-company">Pvt Ltd Statutory Audit (Section 139)</option>
                                <option value="llp-incorporation">LLP Incorporation</option>
                                <option value="pvt-llp-compliance">Pvt and LLP Compliance Retainer</option>
                                <option value="llp-strike-off-form-24">LLP Strike-Off (Form 24)</option>
                                <option value="convert-partnership-to-llp">Convert Partnership to LLP</option>
                                <option value="tax-audit">Section 44AB Tax Audit</option>
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our consulting LLP crossed Rs 40 lakh turnover in Q3 of FY 2024-25. Patron correctly flagged the retroactive trigger for the FULL FY, not just Q3 onwards. Form 8 was certified and filed inside the 30 October window with no penalty exposure.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh M.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designated Partner, Consulting LLP, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">As a CA practice LLP we wanted voluntary audit below thresholds for partner-distribution transparency. Patron ran the engagement with the same SA rigour as a mandatory audit - the workpaper file became our reference template for our own clients.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sunita P.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Managing Partner, CA Practice LLP, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Real-estate LLP with 4 years of Form 8 and Form 11 backlog. Patron checked ROC status, filed all 8 backlog forms with Rs 100/day penalty negotiated where possible, and completed Tier 2 audit in 25 working days. ROC adjudication-ready file.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vinod K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designated Partner, Real-Estate LLP, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Manufacturing LLP - Tier 3 with multi-state operations. Patron coordinated inventory observation at 3 locations, did transfer pricing audit alongside statutory audit, and delivered a workpaper file that passed our PE investor's diligence in 5 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Anil T.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing LLP, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Family-vehicle LLP just crossed Rs 25 lakh contribution after a partner top-up - first statutory audit ever. Patron handled the transition with prior-year balance review, partner education on workpaper expectations, and clean Form 8 certification.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Pooja K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Designated Partner, Family Vehicle LLP, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
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
                    <p>Trusted by consulting LLPs, professional services firms (CA, CS, advocate), manufacturing LLPs, real-estate LLPs, and family-vehicle LLPs across Pune, Mumbai, Delhi, and Gurugram - and across India.</p>
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
                        <a class="toc-btn active" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is</a>
            <a class="toc-btn" href="#who-section">Applicability</a>
            <a class="toc-btn" href="#services-section">Services</a>
            <a class="toc-btn" href="#procedure-section">Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">LLP vs Pvt Ltd</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview: LLP Statutory Audit under Section 34(4)</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Statutory Audit Services at a Glance</strong></p>
                    <p>LLP statutory audit is triggered when turnover crosses Rs 40 lakh OR contribution crosses Rs 25 lakh in any FY under Section 34(4) of LLP Act 2008 and Rule 24(8) of LLP Rules 2009. Auditor appointed by Designated Partners at least 30 days before FY end. Form 8 due 30 October; Form 11 due 30 May. No CARO 2020. Patron LLP audit from Rs 18,000.</p>
                </div>
                <p>LLP audit is conditional. Many LLPs - especially professional services firms, consulting LLPs, and family-vehicle LLPs operating below the contribution threshold - never trigger statutory audit. But the moment turnover crosses Rs 40 lakh in any single FY, the audit kicks in and Form 8 needs auditor certification. Crossing the threshold mid-year does NOT defer the trigger to the next FY - the audit obligation applies to the full FY.</p>
                <p>Patron Accounting LLP conducts ICAI-compliant statutory audits for Limited Liability Partnerships under Section 34(4) read with Rule 24(8). Engagement includes SA-compliant audit execution (risk assessment, substantive testing, sampling, reporting), UDIN-verified auditor's report, Form 8 Part A and Part B preparation and certification, Form 11 annual return filing, Designated Partner appointment resolution, ITR-5 coordination, and Section 44AB tax audit add-on where triggered. Patron has completed 500+ statutory audits across consulting LLPs, professional firms, manufacturing LLPs, real-estate LLPs, and family-vehicle LLPs with fixed-fee pricing tiers from Rs 18,000.</p>
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
                <h2 class="section-title">What Is LLP Statutory Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>LLP statutory audit is the legally mandated independent examination of an LLP's books of account, Statement of Account and Solvency, and supporting records by a qualified Chartered Accountant under Section 34(4) of the LLP Act 2008 read with Rule 24(8) of the LLP Rules 2009. The audit is conducted in accordance with ICAI Standards on Auditing (SA series) and produces an auditor's report with a Unique Document Identification Number (UDIN) issued by ICAI.</p>
<p>Unlike Pvt Ltd statutory audit (mandatory regardless of size under Section 139 of Companies Act 2013), LLP audit is conditional - it kicks in only when the LLP crosses one of two financial thresholds in a financial year: turnover above Rs 40 lakh OR contribution above Rs 25 lakh. Below both thresholds, the LLP can still maintain books and file Form 8 with Designated Partner self-certification - no CA audit required.</p>
<p>Three Companies Act provisions that do NOT apply to LLPs: (a) CARO 2020 - the 21-clause Companies Auditor's Report Order applies only to companies, not LLPs. (b) Section 143(3)(i) Internal Financial Controls reporting - a Companies Act mandate with no LLP equivalent. (c) Section 139(2) auditor rotation - the 5-year/10-year cap that applies to listed and prescribed companies has no LLP counterpart. Auditors of LLPs can continue indefinitely (subject to independence rules).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Statutory Audit:</strong></p>
                    <ul>
    <li><strong>Section 34(4), LLP Act 2008:</strong> Statutory provision requiring LLP accounts to be audited in accordance with such rules as may be prescribed - the rules are Rule 24(8) of LLP Rules 2009. Section 34(4) also empowers the Central Government to exempt smaller LLPs from audit.</li>
    <li><strong>Rule 24(8), LLP Rules 2009:</strong> Operational rule creating the audit trigger - accounts of every LLP shall be audited subject to the proviso that LLPs with turnover up to Rs 40 lakh AND contribution up to Rs 25 lakh are exempt. Literal reading: audit triggered when either threshold is crossed.</li>
    <li><strong>Form 8 - Statement of Account and Solvency:</strong> MCA V3 form filed annually by 30 October (30 days after 6 months from FY end) under Section 34 of LLP Act. Part A: solvency statement signed by 2 Designated Partners. Part B: Statement of Income and Expenditure plus Statement of Assets and Liabilities. Auditor certifies Part B if audit threshold is crossed.</li>
    <li><strong>Form 11 - Annual Return:</strong> MCA V3 form filed annually by 30 May (60 days from FY end) under Section 35 of LLP Act. Discloses partner contribution, designated partner detail, and changes during the year. DSC-signed by 2 Designated Partners. Compliance certificate by PCS required if turnover above Rs 5 crore or contribution above Rs 50 lakh.</li>
    <li><strong>Small LLP (LLP Amendment Act 2021):</strong> Effective 1 April 2022. Small LLP defined as turnover up to Rs 40 lakh AND contribution up to Rs 25 lakh. Note the AND - both conditions must be met simultaneously. Small LLPs get compliance relaxations but Rule 24(8) audit threshold trigger remains the same.</li>
    <li><strong>Designated Partner (DP):</strong> Partner designated by the LLP to comply with statutory obligations. Every LLP must have minimum 2 DPs, at least one resident in India. DPs appoint the statutory auditor.</li>
    <li><strong>Contribution:</strong> Cumulative partner contribution as recorded in the LLP agreement - capital plus any agreed addition. Includes cash, property, services, or a contract for services. Crossing Rs 25 lakh contribution triggers audit regardless of turnover.</li>
    <li><strong>UDIN (Unique Document Identification Number):</strong> Mandatory ICAI-issued identifier on all audit reports since 1 July 2019. Validates auditor identity and curbs document forgery. Required on LLP audit reports.</li>
    <li><strong>SA Series (Standards on Auditing):</strong> ICAI's binding audit standards - SA 230 documentation, SA 315 risk assessment, SA 330 audit response, SA 500 audit evidence, SA 530 sampling, SA 700 reporting. Applicable to LLP audits as much as to company audits.</li>
    <li><strong>ITR-5:</strong> Income tax return for LLPs (and certain firms, AOPs, BOIs). Due 31 July for non-audit cases, 31 October for audit cases under Section 44AB or Section 34(4) audit.</li>
    <li><strong>Section 44AB Tax Audit:</strong> Income Tax Act tax audit triggered above Rs 1 crore business turnover (Rs 10 crore if 95% cashless), or Rs 50 lakh professional receipts. Separate from LLP Act statutory audit - both may apply simultaneously.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Statutory Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Audit Trigger</span>
                        <strong>Rs 40L turnover OR Rs 25L contribution</strong>
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
            <h2 class="section-title">Who Needs LLP Statutory Audit?</h2>
            <div class="content-text">
                
                <p>LLP audit applicability is determined exclusively by size thresholds under Rule 24(8) of LLP Rules 2009. Once either threshold is crossed in any FY, audit becomes mandatory for that FY and remains so for every subsequent FY until both thresholds are below the limit for two consecutive years.</p>
<ul>
    <li><strong>LLPs with annual turnover above Rs 40 lakh in any FY</strong> - audit triggered regardless of contribution.</li>
    <li><strong>LLPs with contribution above Rs 25 lakh</strong> (cumulative partner contribution as recorded in the LLP agreement) - audit triggered regardless of turnover.</li>
    <li><strong>LLPs voluntarily seeking audit</strong> for fundraising due-diligence, bank borrowing, or M&A buyer comfort even when below thresholds.</li>
    <li><strong>Professional services LLPs</strong> (CA firms, CS firms, advocate firms) - audit advisable for partner-distribution transparency even when below thresholds.</li>
    <li><strong>LLPs filing tax audit under Section 44AB</strong> of Income-tax Act 1961 (turnover above Rs 1 crore business, Rs 10 crore digital business, Rs 50 lakh profession) - statutory audit also typically triggered.</li>
</ul>
<p><strong>Below-threshold LLPs:</strong> Books of account must still be maintained on cash or accrual basis with double-entry system (Rule 24(1) to (4)); Form 8 and Form 11 still need to be filed annually; only the audit certification on Form 8 Part B is dispensed with.</p>
<p><strong>Threshold crossing mid-year:</strong> Crossing either threshold even by one rupee in a single FY triggers audit obligation for that FY. Threshold check happens at FY end - mid-year crossing is treated as having crossed for the full FY. Many LLPs are caught out by Q3 or Q4 revenue spikes that retroactively trigger audit obligation for the full FY ending 31 March.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our LLP Audit Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>LLP Statutory Audit Execution</td><td>Full SA-compliant audit including risk assessment (SA 315), audit response (SA 330), substantive testing (SA 500), sampling (SA 530), documentation (SA 230), and reporting (SA 700) with UDIN-verified auditor's report.</td></tr>
<tr><td>Threshold Applicability Opinion</td><td>Written opinion on whether the LLP has crossed Section 34(4) audit trigger - turnover and contribution analysis, identification of trigger date, audit-readiness assessment. Particularly useful for LLPs approaching Rs 40 lakh turnover mid-year.</td></tr>
<tr><td>Form 8 Preparation and Certification</td><td>Part A solvency statement preparation, Part B income/expenditure plus assets/liabilities statement preparation, auditor certification on Part B (if threshold crossed), DSC-signing by Designated Partners, MCA V3 filing inside 30 October deadline.</td></tr>
<tr><td>Form 11 Preparation and Filing</td><td>Annual Return preparation with partner contribution detail, designated partner status, body corporate disclosures, compliance certificate from PCS (if turnover above Rs 5 crore or contribution above Rs 50 lakh), MCA V3 filing inside 30 May deadline.</td></tr>
<tr><td>Auditor Appointment Support</td><td>Designated Partner board resolution drafting, eligibility verification (independence under ICAI ethics), engagement letter under SA 210, audit team allocation.</td></tr>
<tr><td>Tax Audit Coordination (Section 44AB)</td><td>Section 44AB tax audit for LLPs above turnover thresholds; separate Form 3CA/3CB and Form 3CD report; coordinated with statutory audit to share workpapers and avoid duplication.</td></tr>
<tr><td>Partner-Current-Account Reconciliation</td><td>Reconciliation of partner capital and current accounts against LLP agreement, profit-sharing ratio verification, contribution movements, and inter-partner distribution analysis. Particularly relevant for professional services LLPs.</td></tr>
<tr><td>Backlog Filing Support (Form 8 / Form 11)</td><td>Filing of pending Form 8 and Form 11 returns at Rs 100/day/form (LLPs are NOT covered by CCFS-2026 amnesty). Strike-off restoration via NCLT under Section 75 if ROC has struck off the LLP.</td></tr>
<tr><td>ITR-5 Filing Coordination</td><td>Filing of LLP income tax return on or before 31 October (audit case) deadline, coordinated with the LLP audit closure and tax audit Form 3CD where applicable.</td></tr>

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
            <h2 class="section-title">Patron LLP Audit Engagement Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step protocol aligned to ICAI Standards on Auditing and LLP-specific filing requirements - from threshold scoping to Form 8 filing and ITR-5 coordination. Patron files Form 11 inside 30 May and Form 8 inside 30 October when engaged before mid-September.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Threshold Scoping</h3>
        <p class="step-description">Confirm turnover and contribution for the FY; identify whether audit is mandatory under Rule 24(8) or voluntary; issue fixed-fee quote within 24 hours. Crossing either threshold by even one rupee triggers audit for the full FY.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 24-hour fixed-fee quote</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Trigger date identified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs 40L T/O</text>
                    <text x="60" y="55" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OR</text>
                    <text x="60" y="70" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Rs 25L Contribution</text>
                </svg>
            </div>
            <span class="illustration-label">Trigger Identified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Designated Partner Resolution</h3>
        <p class="step-description">Draft auditor appointment resolution by Designated Partners; eligibility verification (no employee or partner relationship; ICAI member in practice; no significant indebtedness); engagement letter under SA 210. No AGM requirement unlike Pvt Ltd.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DP resolution drafted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SA 210 engagement</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3"/>
                    <line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                    <line x1="30" y1="52" x2="75" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                    <line x1="30" y1="62" x2="78" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                    <circle cx="85" cy="75" r="6" fill="#25D366"/>
                    <text x="85" y="78" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DP</text>
                </svg>
            </div>
            <span class="illustration-label">DPs Appoint</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Books Review</h3>
        <p class="step-description">Cash or accrual basis check under Rule 24(1) to (4); double-entry system verification; opening balance reconciliation with prior year (if any); 8-year retention compliance under Section 34 LLP Act.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Books reviewed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Opening balances</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="20" width="70" height="60" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <line x1="35" y1="32" x2="85" y2="32" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                    <line x1="35" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                    <line x1="35" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                    <line x1="35" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                    <line x1="35" y1="72" x2="85" y2="72" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                    <line x1="60" y1="25" x2="60" y2="78" stroke="#E8712C" stroke-width="1.2"/>
                </svg>
            </div>
            <span class="illustration-label">Ledger Verified</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Risk Assessment (SA 315)</h3>
        <p class="step-description">Understanding of LLP business, identification of significant accounts, partner-contribution and partner-distribution review, related-party transaction inventory, internal control mapping for material accounts.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SA 315 framework</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RPT inventory</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="50" r="33" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <path d="M60 50 L60 20 A30 30 0 0 1 86 65 Z" fill="#F5A623" opacity="0.5"/>
                    <path d="M60 50 L86 65 A30 30 0 0 1 35 65 Z" fill="#E8712C" opacity="0.4"/>
                    <path d="M60 50 L35 65 A30 30 0 0 1 60 20 Z" fill="#25D366" opacity="0.3"/>
                    <circle cx="60" cy="50" r="6" fill="#FFFFFF" stroke="#14365F" stroke-width="1.2"/>
                </svg>
            </div>
            <span class="illustration-label">Risk Mapped</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Substantive Testing</h3>
        <p class="step-description">Vouching, ledger scrutiny, third-party confirmations, bank reconciliation, cut-off testing; partner-current-account reconciliation; profit-sharing ratio verification against LLP agreement; SA 500, SA 530 sampling.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Vouching + confirmations</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SA 500 / 530</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="55" width="15" height="30" fill="#14365F" opacity="0.5"/>
                    <rect x="35" y="40" width="15" height="45" fill="#F5A623"/>
                    <rect x="55" y="25" width="15" height="60" fill="#E8712C"/>
                    <rect x="75" y="45" width="15" height="40" fill="#14365F" opacity="0.7"/>
                    <rect x="95" y="35" width="15" height="50" fill="#25D366" opacity="0.6"/>
                    <line x1="10" y1="85" x2="115" y2="85" stroke="#14365F" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="illustration-label">Testing Complete</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Form 8 Preparation</h3>
        <p class="step-description">Part A solvency statement signed by 2 DPs; Part B income/expenditure plus assets/liabilities prepared and auditor-certified; UDIN registration; MCA V3 filing inside 30 October deadline (30 days after 6 months from FY end).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 8 certified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 30 Oct deadline</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="15" width="70" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <text x="60" y="32" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 8</text>
                    <line x1="35" y1="42" x2="85" y2="42" stroke="#F5A623" stroke-width="2"/>
                    <line x1="35" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                    <line x1="35" y1="62" x2="75" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                    <circle cx="92" cy="78" r="11" fill="#25D366"/>
                    <path d="M87 78l4 4 7-8" stroke="#fff" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Filed at MCA V3</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Form 11 and ITR-5 Coordination</h3>
        <p class="step-description">Annual return preparation by 30 May (60 days from FY end); PCS compliance certificate if turnover above Rs 5 crore or contribution above Rs 50 lakh; ITR-5 filing inside 31 October audit-case deadline; tax audit Form 3CD if Section 44AB triggered.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 11 by 30 May</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-5 by 31 Oct</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                    <text x="31" y="42" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM</text>
                    <text x="31" y="55" font-size="13" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">11</text>
                    <text x="31" y="70" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">30 May</text>
                    <rect x="68" y="20" width="42" height="60" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <text x="89" y="42" font-size="9" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR-5</text>
                    <text x="89" y="58" font-size="11" fill="#1B7A3A" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">31</text>
                    <text x="89" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OCT</text>
                </svg>
            </div>
            <span class="illustration-label">All Filings Done</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Workpaper Archive and Quality Review</h3>
        <p class="step-description">SA 230 workpaper file archived for 8 years per ICAI norms; UDIN registration on ICAI portal; partner-level review of audit conclusions and material judgements; ICAI quality review readiness and ROC adjudication-ready documentation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SA 230 archive</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Partner review</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="25" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="28" y="33" width="64" height="6" rx="1.5" fill="#D4DCE8"/>
                    <rect x="28" y="44" width="64" height="6" rx="1.5" fill="#D4DCE8"/>
                    <rect x="28" y="55" width="64" height="6" rx="1.5" fill="#D4DCE8"/>
                    <rect x="28" y="66" width="64" height="6" rx="1.5" fill="#D4DCE8"/>
                    <circle cx="95" cy="22" r="8" fill="#F5A623"/>
                    <text x="95" y="25" font-size="7" fill="#fff" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">UDIN</text>
                </svg>
            </div>
            <span class="illustration-label">Archive Complete</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for LLP Audit</h2>
            <div class="content-text">
                
                <ul>
    <li>LLP agreement and any supplementary agreements (for partner contribution and profit-sharing verification)</li>
    <li>Trial balance, general ledger, and bank statements for the financial year</li>
    <li>Sales register, purchase register, fixed asset register</li>
    <li>Bank reconciliation statements for every operating bank account</li>
    <li>GSTR-1, GSTR-3B, and GSTR-9 acknowledgements (if GST-registered)</li>
    <li>TDS returns (Form 24Q, 26Q) and PF/ESI returns (if applicable)</li>
    <li>ITR-5 acknowledgement for the preceding year (for opening balance and comparative review)</li>
    <li>Partner contribution records, capital account ledger, current account ledger</li>
    <li>Loan agreements, bank sanction letters, body-corporate borrowing detail</li>
    <li>Related-party transaction list, significant contracts, lease agreements</li>
    <li>Designated Partner DSC and DIN, LLP Identification Number (LLPIN)</li>
    <li>Form 8 and Form 11 of the preceding year for reference</li>
    <li>Tax audit Form 3CA/3CB and Form 3CD of preceding year (if Section 44AB applicable)</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>LLP Crossed Rs 40 Lakh Mid-FY - DPs Unaware of Retroactive Trigger</td><td>LLP crossed Rs 40 lakh turnover in Q3 of FY and Designated Partners were not aware of audit obligation kicking in retroactively for the full FY. Form 8 deadline approaching with no auditor engaged.</td><td>Patron runs a fast-track threshold-trigger audit covering the full FY (not just post-threshold months). Form 8 Part B certified by auditor; filing remains inside the 30 October MCA deadline if engaged before mid-September.</td></tr>
<tr><td>First Statutory Audit After Years of Self-Certification</td><td>LLP has been below thresholds for years and has self-certified Form 8 - now crossing Rs 40 lakh and needs first statutory audit with no prior SA-compliant workpapers.</td><td>Patron handles the transition: prior-year balance review for opening balance integrity, first audit conducted with SA 315 risk assessment, partner education on workpaper expectations, smooth Form 8 certification under Section 34(4).</td></tr>
<tr><td>Backlog Form 8 or Form 11 for 2+ Years</td><td>LLP defaulted on Form 8 or Form 11 for 2+ years - audit needed but ROC may have struck off the LLP under Section 75. LLPs NOT covered by CCFS-2026 amnesty.</td><td>Patron checks ROC status first. If still active, file backlog Form 8 and Form 11 with Rs 100/day/form penalty (full late fee applies). If struck off, restoration through NCLT under LLP Act 2008 Section 75 is required before audit can proceed.</td></tr>
<tr><td>Voluntary Audit Below Thresholds</td><td>Professional services LLP wants voluntary audit below thresholds for partner-distribution transparency, fundraising diligence, or buyer comfort.</td><td>Patron conducts a SA-compliant voluntary audit with the same workpaper rigour as a mandatory engagement. Partner-current-account reconciliation, profit-sharing ratio verification, and inter-partner distribution analysis are common focal points.</td></tr>
<tr><td>Mismatched Partner Contribution vs LLP Agreement</td><td>Partner capital account balances in books do not match contribution recorded in the LLP agreement - common where supplementary agreements have updated contribution without formal MCA filing.</td><td>We reconcile the books with the latest filed LLP agreement, identify gaps, recommend supplementary agreement filing under Form 3 where merited, and certify the corrected position in the audit report.</td></tr>

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
            <h2 class="section-title">Patron LLP Audit Pricing - 3-Tier Fixed Fee</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Case Review and Threshold Opinion</td><td>30-min scoping call + audit-trigger opinion + fixed-fee quote - Free</td></tr>
<tr><td>Tier 1 - Just-Above-Threshold LLP (Rs 40 lakh to Rs 1 crore turnover)</td><td>Single-location, clean books, SA-compliant audit + Form 8 + Form 11 + DP resolution + MCA filings - Starting from INR 18,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Tier 2 - Mid-Size LLP (Rs 1 to 10 crore turnover)</td><td>All of Tier 1 plus related-party testing, partner-current-account reconciliation, profit-sharing verification, PCS compliance certificate - Starting from INR 30,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Tier 3 - Large LLP (above Rs 10 crore turnover)</td><td>All of Tier 2 plus inventory observation, third-party confirmations, transfer pricing audit coordination, ICAI quality review readiness - Starting from INR 60,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Form 8 Preparation and Certification Only</td><td>Part A solvency + Part B auditor-certified statement + MCA V3 filing - Starting from INR 18,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Form 11 Annual Return Filing</td><td>Annual return + DP details + partner contribution + DSC signing - Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Section 44AB Tax Audit Add-On</td><td>Form 3CA/3CB + Form 3CD with all annexures - Starting from INR 15,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Voluntary Audit (Below Threshold)</td><td>SA-compliant voluntary audit for fundraising, M&A, or partner transparency - Starting from INR 18,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Backlog Form 8 / Form 11 Filing (Per FY)</td><td>Filing of pending returns + Rs 100/day/form penalty payable to MCA - Starting from INR 8,000 (Exl GST and Govt. Charges) per FY</td></tr>
<tr><td>NCLT Restoration under Section 75 (Struck-Off LLP)</td><td>Petition drafting, NCLT representation, restoration order, post-restoration backlog filings - On quote</td></tr>
<tr><td>ITR-5 Filing</td><td>LLP income tax return for audit or non-audit case - Starting from INR 5,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td><strong>Patron Accounting Professional Fees</strong></td><td><strong>Starting from INR 18,000 (Exl GST and Govt. Charges) for Tier 1 LLP</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Statutory Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20fixed-fee%20quote%20for%20LLP%20statutory%20audit%20under%20Section%2034%284%29.%20Please%20arrange%20a%20free%20scoping%20call." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long the LLP Audit Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Scoping call and fixed-fee quote</td><td>24 hours from initial request</td></tr>
<tr><td>Designated Partner resolution and engagement letter</td><td>3 working days</td></tr>
<tr><td>Tier 1 just-above-threshold LLP audit</td><td>15 to 20 working days from books handover</td></tr>
<tr><td>Tier 2 mid-size LLP audit</td><td>20 to 30 working days</td></tr>
<tr><td>Tier 3 large LLP audit</td><td>30 to 45 working days (depending on inventory observation and multi-location coordination)</td></tr>
<tr><td>Form 11 Annual Return filing</td><td>By 30 May (60 days from FY end)</td></tr>
<tr><td>Form 8 Statement of Account and Solvency filing</td><td>By 30 October (30 days after 6 months from FY end)</td></tr>
<tr><td>ITR-5 filing</td><td>By 31 October for audit cases, 31 July for non-audit cases</td></tr>
<tr><td>Tax audit Form 3CA/3CB and Form 3CD</td><td>By 30 September (if Section 44AB triggered)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Urgency:</strong> Threshold-crossing LLPs that missed audit engagement should engage by mid-September to make the 30 October Form 8 deadline. Engagements after mid-September risk filing-deadline pressure and Rs 100/day/form penalty (LLPs NOT covered by CCFS-2026 amnesty). <a href="tel:+919459456700">Call +91 945 945 6700</a> for a free 24-hour scoping call.</p>

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
            <h2 class="section-title">Benefits of Patron LLP Audit Practice</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3 class="feature-title">UDIN-Verified, SA-Compliant Reports</h3>
        <p>Every audit report carries UDIN registered on the ICAI portal. Full SA series compliance (SA 230, 315, 330, 500, 530, 700) with partner-level review. The audit file satisfies ICAI quality review and ROC adjudication scrutiny.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <h3 class="feature-title">15+ Years LLP-Specific Experience</h3>
        <p>Patron's LLP audit team is led by CAs with 15+ years of LLP audit practice across consulting LLPs, professional firms (CA, CS, advocate), real-estate LLPs, manufacturing LLPs, and family-vehicle LLPs. 500+ audits completed.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
        <h3 class="feature-title">Fixed-Fee, Transparent Pricing</h3>
        <p>Tier 1 from Rs 18,000, Tier 2 from Rs 30,000, Tier 3 from Rs 60,000. No hourly surprises. Fixed-fee quote within 24 hours of scoping call. Materially lower than equivalent Pvt Ltd audit fees because scope excludes CARO, IFC, and rotation.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">National Coverage from 4 Offices</h3>
        <p>Offices in Pune, Mumbai, Delhi, and Gurugram with travel coverage for branch verification and inventory observation across India. We handle Tier 3 multi-state LLP audits with single-engagement coordination.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Client Outcomes</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 500+ Statutory Audits Completed | 15+ Years</p>
<div style="background:var(--orange-lighter);border-left:4px solid var(--orange);padding:20px;border-radius:8px;margin:20px 0;">
    <p style="font-style:italic;margin-bottom:10px;">"Our consulting LLP crossed Rs 40 lakh turnover in Q3 of FY 2024-25. Patron correctly flagged the retroactive trigger for the FULL FY, not just Q3 onwards. Form 8 was certified and filed inside the 30 October window with no penalty exposure."</p>
    <p style="font-weight:700;color:var(--blue);">- Designated Partner, Consulting LLP, Pune</p>
</div>
<div style="background:var(--blue-lighter);border-left:4px solid var(--blue);padding:20px;border-radius:8px;margin:20px 0;">
    <p style="font-style:italic;margin-bottom:10px;">"As a CA practice LLP we wanted voluntary audit below thresholds for partner-distribution transparency. Patron ran the engagement with the same SA rigour as a mandatory audit - the workpaper file became our reference template for our own clients."</p>
    <p style="font-weight:700;color:var(--blue);">- Managing Partner, CA Practice LLP, Mumbai</p>
</div>
<p><strong>Indicative Client Logos:</strong> Hyundai, Asian Paints, Bridgestone (group-affiliate work) and 10,000+ other businesses including LLP audit clients across India.</p>
<p><strong>Outcome Stat:</strong> Of Patron's 500+ statutory audit engagements, 100% are completed inside MCA filing deadlines when client books are handed over 30 days before due date. Patron audit files have passed every ICAI quality review and every ROC adjudication scrutiny encountered to date.</p>
<p><strong>Four-Office City Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves LLP audit clients across India with travel coverage for branch verification and inventory observation.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Pvt Ltd Audit - Side-by-Side</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>LLP</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing statute</td><td>LLP Act 2008 + LLP Rules 2009</td><td>Companies Act 2013 + Audit Rules 2014</td></tr>
<tr><td>Audit trigger</td><td>Conditional - turnover above Rs 40 lakh OR contribution above Rs 25 lakh</td><td>Mandatory - every Pvt Ltd regardless of turnover or size</td></tr>
<tr><td>Auditor appointment</td><td>By Designated Partners; at least 30 days before FY end</td><td>By Board within 30 days of incorporation (first); by AGM thereafter</td></tr>
<tr><td>Auditor term</td><td>Until removed or resigned (no statutory term)</td><td>5 years under Section 139(1)</td></tr>
<tr><td>Auditor rotation</td><td>Not applicable</td><td>Section 139(2) at Rs 50 cr paid-up or borrowings</td></tr>
<tr><td>Annual return form</td><td>Form 11 (due 30 May)</td><td>MGT-7 or MGT-7A (due within 60 days of AGM)</td></tr>
<tr><td>Financial statement form</td><td>Form 8 (due 30 October)</td><td>AOC-4 (due within 30 days of AGM)</td></tr>
<tr><td>CARO 2020</td><td>Not applicable</td><td>Applicable unless four-criteria exemption met</td></tr>
<tr><td>Section 143(3)(i) IFC</td><td>Not applicable</td><td>Applicable above Rs 50 cr turnover or Rs 25 cr borrowings</td></tr>
<tr><td>CCFS-2026 amnesty for backlog</td><td>Not covered - full late fee applies</td><td>Covered - 90% additional-fee waiver until 15 July 2026</td></tr>
<tr><td>Starting Patron fee</td><td>Rs 18,000 (Tier 1)</td><td>Rs 35,000 (Tier 1)</td></tr>

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
                
                <p>LLP statutory audit connects to several Patron service lines across the LLP lifecycle:</p>
<ul>
    <li><strong><a href="/statutory-audit-services">Statutory Audit Services (National Hub)</a></strong> - The topical authority page covering audit methodology, applicability matrix across all entity types, and Patron vs commodity provider comparison.</li>
    <li><strong><a href="/statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</a></strong> - Sibling spoke covering Section 139 Companies Act audit framework for Private Limited Companies. Useful for founders comparing LLP vs Pvt Ltd compliance costs.</li>
    <li><strong><a href="/llp-incorporation">LLP Incorporation</a></strong> - Registration service for new LLPs covering LLP-RUN name approval, FiLLiP incorporation, LLP agreement drafting.</li>
    <li><strong><a href="/pvt-llp-compliance">Pvt and LLP Compliance Retainer</a></strong> - Combined annual retainer covering Form 8, Form 11, ITR-5, DIR-3 KYC for partners, and audit coordination.</li>
    <li><strong><a href="/llp-strike-off-form-24">LLP Strike-Off Form 24</a></strong> - Voluntary closure service for LLPs that have ceased operations.</li>
    <li><strong><a href="/convert-partnership-to-llp">Convert Partnership to LLP</a></strong> - Conversion service for partnership firms upgrading to LLP structure under Schedule II of LLP Act 2008.</li>
    <li><strong><a href="/tax-audit">Section 44AB Tax Audit</a></strong> - Tax audit for LLPs above Rs 1 crore business turnover, Rs 10 crore digital, or Rs 50 lakh profession.</li>
</ul>
<p><strong>City Coverage:</strong> Patron LLP audit teams operate from offices in Pune, Mumbai, Delhi, and Gurugram, with travel coverage for branch verification and inventory observation across India.</p>

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
                
                <p><strong>Governing Statutes:</strong> LLP Act 2008 (Sections 34 and 35), LLP Rules 2009 (Rules 24(1) to 24(8)), LLP Amendment Act 2021 (effective 1 April 2022). Refer to the <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code - LLP Act 2008</a>, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal for LLP filings (Form 8 and Form 11)</a>, and the <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI Standards on Auditing and UDIN portal</a>.</p>
<ul>
    <li><strong>LLP Act 2008 - Section 34:</strong> Maintenance of books of account (cash or accrual, double-entry, 8-year retention).</li>
    <li><strong>Section 34(4):</strong> Audit obligation subject to prescribed rules.</li>
    <li><strong>Section 35:</strong> Annual return in Form 11.</li>
    <li><strong>Section 70:</strong> Penalty for failure to maintain books - Rs 1 lakh to Rs 5 lakh on LLP plus Rs 25,000 to Rs 1 lakh on each DP.</li>
    <li><strong>LLP Rules 2009 - Rule 24(1) to (4):</strong> Manner of keeping books (cash or accrual, double-entry).</li>
    <li><strong>Rule 24(5):</strong> Form 8 fees.</li>
    <li><strong>Rule 24(6) and (7):</strong> DP signing of Form 8.</li>
    <li><strong>Rule 24(8):</strong> Audit trigger - turnover above Rs 40 lakh OR contribution above Rs 25 lakh.</li>
    <li><strong>LLP Amendment Act 2021:</strong> Effective 1 April 2022. Small LLP definition - turnover up to Rs 40 lakh AND contribution up to Rs 25 lakh. Audit threshold under Rule 24(8) remains unchanged.</li>
    <li><strong>Form 11 - Annual Return:</strong> Due 30 May (60 days from FY end) under Section 35. DSC-signed by 2 DPs. PCS compliance certificate if turnover above Rs 5 crore or contribution above Rs 50 lakh.</li>
    <li><strong>Form 8 - Statement of Account and Solvency:</strong> Due 30 October (30 days after 6 months from FY end) under Section 34. Part A: solvency by DPs. Part B: income/expenditure plus assets/liabilities; auditor-certified if Section 34(4) threshold crossed.</li>
    <li><strong>Penalty Framework:</strong> Form 8 and Form 11 - Rs 100 per day per form with no upper cap (LLP Amendment Rules 2020). LLPs are NOT covered by CCFS-2026 amnesty - full late fee applies on backlog filings.</li>
    <li><strong>ICAI Standards on Auditing for LLPs:</strong> SA 200 series overall objectives, SA 230 documentation, SA 315 risk assessment, SA 330 audit response, SA 500 audit evidence, SA 530 sampling, SA 700 reporting. UDIN mandatory since 1 July 2019.</li>
    <li><strong>Income-tax Act 1961 - ITR-5:</strong> Due 31 July (non-audit) or 31 October (audit). Section 44AB tax audit triggered above Rs 1 crore business, Rs 10 crore digital business, or Rs 50 lakh professional receipts. Tax audit is separate from LLP Act statutory audit.</li>
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
                    <p class="faq-expanded__lead">Quick answers to the questions Designated Partners and CA firms ask most about LLP statutory audit, Section 34(4) trigger, Form 8 and Form 11 filings, and Patron's fixed-fee pricing tiers.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">[QUESTION TEXT]</h3>
                        <div class="faq-expanded__a"><p>[ANSWER TEXT]</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for all LLPs?</h3>
                        <div class="faq-expanded__a"><p>No. LLP statutory audit under Section 34(4) of the LLP Act 2008 read with Rule 24(8) of LLP Rules 2009 is triggered only when the LLP's turnover exceeds Rs 40 lakh OR contribution exceeds Rs 25 lakh in any financial year. Below both thresholds, audit is voluntary; the LLP must still maintain books and file Form 8 with Designated Partner self-certification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the LLP audit threshold under Section 34(4)?</h3>
                        <div class="faq-expanded__a"><p>Audit is mandatory if turnover exceeds Rs 40 lakh OR partner contribution (cumulative, as recorded in the LLP agreement) exceeds Rs 25 lakh in any financial year. Crossing either single threshold triggers the audit for the full FY - the literal reading of the OR in Rule 24(8) is the prevailing market and ICAI practice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Who appoints the auditor in an LLP?</h3>
                        <div class="faq-expanded__a"><p>The Designated Partners (DPs) appoint the statutory auditor. For the first FY, appointment can be made anytime before the end of the first FY. For subsequent FYs, the auditor must be appointed at least 30 days before the end of each FY. If DPs fail to appoint, partners may step in to appoint. There is no AGM requirement (unlike Pvt Ltd).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Form 8 and Form 11 for LLPs?</h3>
                        <div class="faq-expanded__a"><p>Form 11 (Annual Return) is filed by 30 May under Section 35 of LLP Act, disclosing partner contribution and changes during the year. Form 8 (Statement of Account and Solvency) is filed by 30 October under Section 34, containing Part A solvency statement and Part B income/expenditure plus assets/liabilities. Form 8 Part B requires auditor certification if Section 34(4) threshold is crossed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does CARO 2020 apply to LLPs?</h3>
                        <div class="faq-expanded__a"><p>No. CARO 2020 (Companies Auditor's Report Order 2020) is issued under Section 143(11) of the Companies Act 2013 and applies only to companies, not to LLPs. LLPs registered under the LLP Act 2008 are outside the Companies Act framework entirely. Similarly, Section 143(3)(i) Internal Financial Controls reporting and Section 139(2) auditor rotation do not apply to LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between LLP audit and Pvt Ltd audit?</h3>
                        <div class="faq-expanded__a"><p>LLP audit is conditional (triggered above Rs 40 lakh turnover or Rs 25 lakh contribution); Pvt Ltd audit is mandatory regardless of size. LLP uses Form 8 and Form 11; Pvt Ltd uses AOC-4 and MGT-7. LLP audit is governed by LLP Act 2008 Section 34(4); Pvt Ltd by Companies Act 2013 Section 139. No CARO 2020, IFC, or rotation for LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost of statutory audit for an LLP?</h3>
                        <div class="faq-expanded__a"><p>Patron's fixed-fee tiers: Tier 1 just-above-threshold LLP (Rs 40 lakh to Rs 1 crore turnover) Rs 18,000 to Rs 25,000; Tier 2 mid-size (Rs 1 to 10 crore) Rs 30,000 to Rs 50,000; Tier 3 large LLP (above Rs 10 crore) Rs 60,000 to Rs 1,50,000. LLP audit pricing is materially lower than equivalent Pvt Ltd audit because scope excludes CARO 2020, IFC reporting, and rotation tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is a small LLP under the LLP Amendment Act 2021?</h3>
                        <div class="faq-expanded__a"><p>A small LLP under the LLP Amendment Act 2021 (effective 1 April 2022) is one where turnover does not exceed Rs 40 lakh AND contribution does not exceed Rs 25 lakh. Note the AND - both conditions must be met simultaneously for small LLP status. Small LLPs get certain compliance relaxations but the Rule 24(8) audit threshold remains the same trigger.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP audit governing section?</strong> Section 34(4) of LLP Act 2008 read with Rule 24(8) of LLP Rules 2009.</p>
<p><strong>Audit trigger?</strong> Turnover above Rs 40 lakh OR contribution above Rs 25 lakh in any FY.</p>
<p><strong>Form 11 due date?</strong> 30 May (60 days from FY end) under Section 35.</p>
<p><strong>Form 8 due date?</strong> 30 October (30 days after 6 months from FY end) under Section 34.</p>
<p><strong>Auditor appointment?</strong> By Designated Partners at least 30 days before FY end. No AGM requirement.</p>
<p><strong>CARO 2020 / IFC / rotation?</strong> NOT applicable - all three are Companies Act provisions with no LLP equivalent.</p>
<p><strong>Patron pricing tiers?</strong> Rs 18,000 just-above-threshold | Rs 30,000 mid-size | Rs 60,000+ large LLP.</p>
<p><strong>Backlog penalty?</strong> Rs 100/day/form with no upper cap. LLPs are NOT covered by CCFS-2026 amnesty.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency Recap - FY 2025-26 Deadlines</h2>
            <div class="content-text">
                
                <p><strong>Deadlines:</strong> For FY 2025-26 ending 31 March 2026, LLPs must file Form 11 by 30 May 2026 and Form 8 by 30 October 2026. ITR-5 by 31 October 2026 (audit case) or 31 July 2026 (non-audit case).</p>
<p><strong>Penalty Exposure:</strong> Each day of delay accrues Rs 100 per day per form with no upper cap. LLPs are NOT covered by CCFS-2026 amnesty - the 90% additional-fee waiver applies only to companies under Companies Act 2013, not to LLPs under LLP Act 2008.</p>
<p><strong>Strike-Off Risk:</strong> LLPs with backlog from 2+ years risk Section 75 striking off by ROC. Restoration via NCLT is required before audit can proceed.</p>
<p><strong>Action:</strong> Threshold-crossing LLPs that missed audit engagement should engage by mid-September to make the 30 October Form 8 deadline. <a href="tel:+919459456700">Call +91 945 945 6700</a> for free case review and a 24-hour fixed-fee quote.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's LLP Audit Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">LLP statutory audit is the conditional cousin of the Pvt Ltd mandatory audit - same SA-compliant methodology, narrower reporting scope, materially lower cost. The Rs 40 lakh turnover and Rs 25 lakh contribution thresholds under Rule 24(8) of LLP Rules 2009 are the only triggers; below both, audit is voluntary. Once triggered, Form 8 Part B requires auditor certification and the full ICAI Standards on Auditing apply.</p>
<p style="color:#FFFFFF;">Patron's LLP audit practice brings 15+ years of LLP audit experience across consulting LLPs, professional services firms (CA, CS, advocate), manufacturing LLPs, real-estate LLPs, and family-vehicle LLPs - with fixed-fee pricing from Rs 18,000, national coverage from 4 offices, and partner-reviewed UDIN-verified reports that satisfy ICAI quality review and ROC adjudication scrutiny.</p>
<p style="color:#FFFFFF;">500+ statutory audits completed. 95% resolution rate. Free 30-minute LLP audit threshold opinion and scoping call - fixed-fee quote within 24 hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20fixed-fee%20quote%20for%20LLP%20statutory%20audit%20under%20Section%2034%284%29.%20Please%20arrange%20a%20free%20scoping%20call." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:llp-audit@patronaccounting.com?subject=Enquiry%20for%20LLP%20Statutory%20Audit&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20LLP%20Statutory%20Audit%20services%20and%20would%20like%20a%20fixed-fee%20quote%20within%2024%20hours.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related Patron Services for LLPs</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end LLP lifecycle support - audit, compliance retainer, incorporation, strike-off, conversion, and tax audit.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1 - City cards (pa-city-grid, 4 cols desktop):
                <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="/statutory-audit-llp-pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/statutory-audit-llp-mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/statutory-audit-llp-delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                        <a href="/statutory-audit-llp-gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="/statutory-audit-llp-bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        <a href="/statutory-audit-llp-hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                        <a href="/statutory-audit-llp-chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                        <a href="/statutory-audit-llp-kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div>
                </div>
                BLOCK 2 - Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for LLP Statutory Audit</div>
                    <div class="pa-cross-grid">
                        <a href="/[related_slug_1]" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">[RELATED_SERVICE_1]</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block">
    <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;text-align:center;">LLP Lifecycle Services from Patron</div>
    <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:24px;text-align:center;">From LLP incorporation to compliance retainer, audit, and strike-off - all under one roof.</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit-services" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <div><div class="pa-card-title">Statutory Audit Hub</div><div class="pa-card-sub">National</div></div>
        </a>
        <a href="/statutory-audit-private-limited-company" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
            <div><div class="pa-card-title">Pvt Ltd Audit</div><div class="pa-card-sub">Section 139</div></div>
        </a>
        <a href="/llp-incorporation" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 5v14M5 12h14"/></svg></div>
            <div><div class="pa-card-title">LLP Incorporation</div><div class="pa-card-sub">FiLLiP</div></div>
        </a>
        <a href="/pvt-llp-compliance" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M8 2v4M16 2v4M3 10h18"/></svg></div>
            <div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">Annual Retainer</div></div>
        </a>
        <a href="/convert-partnership-to-llp" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M17 1l4 4-4 4M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4M21 13v2a4 4 0 01-4 4H3"/></svg></div>
            <div><div class="pa-card-title">Convert to LLP</div><div class="pa-card-sub">Partnership upgrade</div></div>
        </a>
        <a href="/llp-strike-off-form-24" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg></div>
            <div><div class="pa-card-title">LLP Strike-Off</div><div class="pa-card-sub">Form 24</div></div>
        </a>
        <a href="/tax-audit" class="pa-cross-card">
            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
            <div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Section 44AB</div></div>
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
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed semi-annually + immediate on LLP Amendment Act changes, Rule 24(8) threshold revisions, new MCA filing rules, ICAI Standards on Auditing updates, or CCFS amnesty extension to LLPs. Last reviewed by CA and CS Team, Patron Accounting LLP.</p>
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