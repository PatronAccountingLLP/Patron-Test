

@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>Financial Ratios Analysis</title>
    <meta name="description" content="Financial ratios analysis under Schedule III for Indian companies. Liquidity, solvency, profitability ratios. Dashboards from Rs 25,000.">
    <link rel="canonical" href="https://www.patronaccounting.com/financial-ratios">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Financial Ratios Analysis 2026 - Patron | Patron Accounting">
    <meta property="og:description" content="Financial ratios analysis under Schedule III for Indian companies. Liquidity, solvency, profitability ratios. Dashboards from Rs 25,000.">
    <meta property="og:url" content="https://www.patronaccounting.com/financial-ratios">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Financial Ratios Analysis 2026 - Patron | Patron Accounting">
    <meta name="twitter:description" content="Financial ratios analysis under Schedule III for Indian companies. Liquidity, solvency, profitability ratios. Dashboards from Rs 25,000.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/financial-ratios#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Accounting Services", "item": "https://www.patronaccounting.com/accounting-services" },
            { "@type": "ListItem", "position": 3, "name": "Financial Ratios Analysis and Schedule III Disclosure", "item": "https://www.patronaccounting.com/financial-ratios" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/financial-ratios#faq",
          "mainEntity": [
            { "@type": "Question", "name": "What is the Schedule III ratio disclosure requirement?", "acceptedAnswer": { "@type": "Answer", "text": "Schedule III of the Companies Act 2013 was amended by MCA notification G.S.R. 207(E) dated 24 March 2021 to add Note 9 in the General Instructions for Preparation of Balance Sheet. This requires every company - both AS (Division I) and Ind AS (Division II) - to disclose 11 specific financial ratios in the notes with current and prior year comparison, percentage variance, and written explanation for any change exceeding 25 percent. The requirement applies from FY 2021-22 onwards and continues in the current FY 2025-26 audit cycle. LLPs are not subject to Schedule III." } },
            { "@type": "Question", "name": "Which 11 ratios must be disclosed under Schedule III?", "acceptedAnswer": { "@type": "Answer", "text": "The 11 mandatory Schedule III ratios are - (1) Current Ratio; (2) Debt-Equity Ratio; (3) Debt Service Coverage Ratio; (4) Return on Equity Ratio; (5) Inventory Turnover Ratio; (6) Trade Receivables Turnover Ratio; (7) Trade Payables Turnover Ratio; (8) Net Capital Turnover Ratio; (9) Net Profit Ratio; (10) Return on Capital Employed; (11) Return on Investment. Each must be presented with explicit numerator and denominator, current and previous year values, percentage variance, and explanation if variance exceeds 25 percent." } },
            { "@type": "Question", "name": "When does the 25 percent change explanation apply?", "acceptedAnswer": { "@type": "Answer", "text": "Schedule III Note 9 requires a written explanation for any ratio whose percentage change from previous year exceeds 25 percent - either a positive (above 25 percent increase) or negative (above 25 percent decrease) movement. The explanation must be entity-specific - identifying the underlying business reason such as commodity price changes, capex-led debt increase, working capital cycle changes, or customer mix shifts. Boilerplate explanations like 'due to business operations' attract NFRA inspection scrutiny and ICAI Peer Review attention." } },
            { "@type": "Question", "name": "Do LLPs need to disclose financial ratios?", "acceptedAnswer": { "@type": "Answer", "text": "No. Schedule III is part of the Companies Act 2013 and applies only to companies registered under that Act (Indian + foreign companies under Section 2(42)). LLPs are registered under the LLP Act 2008 and are not subject to Schedule III - including the Note 9 ratio disclosure. LLP financial statements follow LLP Act 2008 + LLP Rules 2009 format. However, LLPs may voluntarily compute and disclose ratios for management or lender purposes, and Patron offers ratio services to LLPs on the same engagement framework." } },
            { "@type": "Question", "name": "How are ratios different for Ind AS vs AS companies?", "acceptedAnswer": { "@type": "Answer", "text": "The 11 ratios required under Schedule III Note 9 are the same for both AS (Division I) and Ind AS (Division II) companies. However, the underlying numbers differ - Ind AS companies report under different recognition and measurement rules (revenue under Ind AS 115 vs AS 9, leases under Ind AS 116, financial instruments under Ind AS 109). For example, ROCE under Ind AS may differ due to different treatment of lease right-of-use assets in Capital Employed. First-time Ind AS adoption companies see significant ratio changes - explicit explanation under the 25 percent rule is typically required." } },
            { "@type": "Question", "name": "What ratios do lenders typically require?", "acceptedAnswer": { "@type": "Answer", "text": "Lender covenant ratios go beyond the 11 Schedule III ratios. Common requirements include Debt Service Coverage Ratio above 1.25x for term loans; Debt-Equity below 2:1 for mid-corporate; Interest Coverage above 2x; Current Ratio above 1.33; for working capital lending under RBI Master Direction, drawing power based on stock and book debts; for project finance, DSCR with project-specific cash flow projections. Patron's lender ratio reports cover all consortium banks with uniform projections and covenant-by-covenant compliance status." } },
            { "@type": "Question", "name": "How frequently should CFO ratio dashboards be updated?", "acceptedAnswer": { "@type": "Answer", "text": "Industry practice varies - monthly for fast-growing or working-capital-intensive businesses (most preferred); quarterly for stable mature businesses aligned with Board meetings; annually only for very small companies (not recommended). Monthly cadence allows trend identification before issues compound; quarterly aligns with statutory deadlines (SEBI LODR for listed cos, Audit Committee meetings). Patron's standard monthly CFO dashboard is delivered within 5 business days of book close; quarterly includes a Board pack within 10 business days of quarter end." } },
            { "@type": "Question", "name": "Can Patron handle ratio computation alongside statutory audit?", "acceptedAnswer": { "@type": "Answer", "text": "Yes. When Patron is engaged for statutory audit, Schedule III Note 9 ratio computation and disclosure is part of the audit engagement - included in audit fees with no separate charge. The ratio computation, variance explanation drafting, and audit verification happen in the same cycle. When the statutory audit is with another firm, Patron offers standalone ratio compilation and the working paper file is designed for clean handover to the audit firm - particularly useful when companies want independent ratio computation before audit review." } }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/financial-ratios#service",
          "name": "Financial Ratios Analysis and Schedule III Disclosure",
          "url": "https://www.patronaccounting.com/financial-ratios",
          "description": "CA-led financial ratio analytics for Indian companies - Schedule III Note 9 annual disclosure compilation of all 11 mandatory ratios under MCA G.S.R. 207(E), monthly and quarterly CFO dashboards, lender covenant ratio reports aligned with RBI Master Direction-Working Capital, and industry benchmarking. Audit-defensible documented working papers. From Rs 25,000.",
          "serviceType": "Financial Ratio Analysis and Statutory Disclosure",
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "about": [
            { "@type": "Thing", "name": "Financial ratio", "sameAs": "https://en.wikipedia.org/wiki/Financial_ratio" },
            { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
            { "@type": "Thing", "name": "Financial statement analysis", "sameAs": "https://en.wikipedia.org/wiki/Financial_statement_analysis" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Financial Ratios Service Tiers",
            "itemListElement": [
              { "@type": "Offer", "name": "Schedule III Note 9 Annual Disclosure (standalone)", "price": "25000", "priceCurrency": "INR", "description": "11 Schedule III ratios, prior year comparison, 25% variance explanations, tabular note for audited financials." },
              { "@type": "Offer", "name": "Monthly CFO Ratio Dashboard (small company)", "price": "25000", "priceCurrency": "INR", "description": "8-12 ratios with trend and variance commentary within 5 business days of book close." },
              { "@type": "Offer", "name": "Lender Ratio Report (single bank)", "price": "25000", "priceCurrency": "INR", "description": "Covenant table, current and projected ratios, partner CA certification with UDIN where required." }
            ]
          }
        }
      ]
    }
    </script>
@endsection

@section('content')
<style>/* ============================================
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
@media (max-width: 768px) {.private-registration-heading { font-size: 32px !important; line-height: 110% !important; }}
@media (max-width: 480px) {.private-registration-heading { font-size: 28px !important; }}
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
@media (max-width: 480px) {.form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
.form-title { font-size: 20px; }
.country-dropdown-list { width: 260px; }
.form-footer { flex-wrap: wrap; gap: 10px; }
.btn-submit { font-size: 16px; padding: 14px 20px; }}
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
.btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
.btn-cta:hover { background: var(--orange-light); color: var(--orange); }
.btn-cta svg { width: 16px; height: 16px; }
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
@media (max-width: 768px) {.pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(2, 1fr); }}
@media (max-width: 480px) {.pa-city-grid  { grid-template-columns: 1fr; }
.pa-cross-grid { grid-template-columns: 1fr; }}
/* Slick overrides */
/* Video Testimonial Card */
/* Quote Testimonial Card */
/* Loading state */
@keyframes spin { to { transform: rotate(360deg); } }
/* ============================================
           RESPONSIVE
           ============================================ */
@media (max-width: 1024px) {.two-column { grid-template-columns: 1fr; gap: 40px; }
.features-grid { grid-template-columns: repeat(2, 1fr); }
.stats-container { gap: 32px; }
.certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }}
@media (max-width: 900px) {.step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
.step-card:nth-child(even) { direction: ltr; }
.step-visual { order: -1; }}
@media (max-width: 768px) {.content-section { padding: 40px 16px; }
.hero-cta { flex-direction: column; }
.btn-video, .btn-sample { width: 100%; justify-content: center; }
.stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
.stat-item { width: 100%; }
.features-grid { grid-template-columns: 1fr; gap: 16px; }
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
section ul li:not(.nav-item) { font-size: 14px; }}
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
@media (max-width: 768px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }}
@media (max-width: 480px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }}
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
@media (max-width: 768px) {.wa-sticky-bar { padding: 8px 12px; gap: 8px; }
.wa-sticky-bar-text { font-size: 13px; }
.wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
.wa-sticky-bar-icon { width: 30px; height: 30px; }
.wa-sticky-bar-icon svg { width: 16px; height: 16px; }}
@media (max-width: 480px) {.wa-sticky-bar-text { display: none; }
.wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
.wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
.wa-sticky-bar-btn span { display: none; }}
/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}</style>
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
                        Financial Ratios Analysis and Schedule III Disclosure
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Schedule III Note 9 Specialty:</span> Annual compilation of all 11 mandatory ratios under MCA G.S.R. 207(E) dated 24 March 2021 - with prior-year comparison and 25% variance explanations ready for audited financials.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit-Defensible Working Papers:</span> Every ratio comes with documented formula, numerator value, denominator value, source line items, and sensitivity check. ICAI-aligned formulas. Clean auditor handover.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CFO Dashboards + Lender Reports:</span> Monthly and quarterly ratio dashboards, lender covenant reports aligned with RBI Master Direction-Working Capital, and industry benchmarking against sector peers.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Partner-Led, Fixed Fee:</span> Senior partner CA with audit + analytics dual perspective. Schedule III disclosure from Rs 25,000/year; written scoping memo with fixed-fee quote in 24 hours.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trust: 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Financial%20Ratios%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Financial Ratios',
                                        ])

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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'CFOs, founders, and Audit Committees trust Patron\'s Schedule III Note 9 specialty, lender consortium ratio reporting, and audit-defensible working papers - partner CA on every engagement.',
])

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
                <a href="#what-section" class="toc-btn">What Are Ratios</a>
                <a href="#who-section" class="toc-btn">5 Categories</a>
                <a href="#services-section" class="toc-btn">Patron Services</a>
                <a href="#steps-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Computation Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
                <a href="#comparison-section" class="toc-btn">11 Ratios + Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Financial Ratios Analysis - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Financial Ratios Services at a Glance</strong></p>
                    <p>Financial ratios are quantitative metrics derived from financial statements measuring 5 dimensions - liquidity (current ratio, quick ratio), solvency (debt-equity, interest coverage), profitability (gross margin, ROE, ROCE), efficiency (inventory turnover, receivables turnover), and valuation (P/E, EV/EBITDA for listed cos). Under Schedule III Note 9 of the Companies Act 2013 (added by G.S.R. 207(E) dated 24 March 2021), every company must disclose 11 specific ratios with prior year comparison and explanation of changes above 25 percent. Patron offers Schedule III ratio disclosure compilation, monthly CFO dashboards, lender ratio reports, and industry benchmarking. Starting Rs 25,000.</p>
                </div>
                <p>Financial ratios are quantitative metrics computed from a company's audited financial statements that measure liquidity, solvency, profitability, efficiency, and valuation. Since the MCA notification G.S.R. 207(E) dated 24 March 2021, every company registered under the Companies Act 2013 must disclose 11 specific financial ratios in the notes to the financial statements under Schedule III Note 9 - effective FY 2021-22 onwards and continuing in the current FY 2025-26 audit cycle. The disclosure must include prior year comparison and a written explanation of any change exceeding 25 percent.</p>
                <p>Patron Accounting handles annual Schedule III ratio disclosure compilation for inclusion in audited financials, monthly and quarterly CFO ratio dashboards for management reporting, lender ratio reports for fundraising and consortium banking, industry ratio benchmarking against sector peers, and CFO-level financial analytics retainers. Whether for statutory Schedule III compliance or internal management decision-making, our partner-led financial analytics team delivers audit-defensible ratio computation with documented working papers.

<div class="table-responsive-wrapper" style="margin-top:24px;">
<table>
<thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Statutory Authority</td><td>Schedule III of Companies Act 2013, Division I and Division II - Note 9 added by MCA G.S.R. 207(E) dated 24 March 2021</td></tr>
<tr><td>Effective From</td><td>FY 2021-22 onwards; continuing FY 2025-26 audit cycle</td></tr>
<tr><td>Mandatory Ratios</td><td>11 - Current, Debt-Equity, DSCR, ROE, Inventory Turnover, Receivables Turnover, Payables Turnover, Net Capital Turnover, Net Profit, ROCE, Return on Investment</td></tr>
<tr><td>Disclosure Format</td><td>Tabular - ratio name, numerator, denominator, current year, previous year, percentage variance, explanation for variance &gt; 25%</td></tr>
<tr><td>Coverage</td><td>Every Companies Act 2013 company (Indian + foreign Section 2(42)); Division I for AS, Division II for Ind AS</td></tr>
<tr><td>LLP Coverage</td><td>NOT applicable (LLPs not registered under Companies Act 2013)</td></tr>
<tr><td>Cost Starting From</td><td>Rs 25,000 for annual Schedule III ratio disclosure compilation</td></tr>
<tr><td>Lender Ratios (RBI MD-Working Capital)</td><td>DSCR &gt;1.25x, debt-equity &lt;2:1 mid-corporate, current ratio &gt;1.33, interest coverage &gt;2x</td></tr>
</tbody>
</table>
</div></p>
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
                <h2 class="section-title">What Are Financial Ratios</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Financial ratios are quantitative metrics derived by dividing one financial statement figure by another, producing a single number that measures a specific aspect of the company's financial health, operating efficiency, or capital structure. A ratio in isolation is meaningless - financial ratios derive value from comparison across periods (trend analysis), against industry peers (benchmarking), and against lender or covenant thresholds (covenant testing). The 5 traditional categories are liquidity ratios (short-term cash adequacy), solvency ratios (long-term debt servicing capacity), profitability ratios (efficient profit generation), efficiency ratios (asset utilisation speed), and valuation ratios (market price relative to financial metrics, for listed companies).</p>
<p>In India, the statutory anchor for financial ratio disclosure is Schedule III of the Companies Act 2013. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA notification G.S.R. 207(E) dated 24 March 2021</a> amended both Division I (AS companies) and Division II (Ind AS companies) of Schedule III to add Note 9 in the General Instructions for Preparation of Balance Sheet - making disclosure of 11 specific ratios mandatory effective FY 2021-22 onwards. The 11 ratios cover the 5 categories in a balanced way - 1 liquidity, 2 solvency, 3 profitability, 1 specific (Return on Investment), and 4 efficiency.</p>
<p>Companies must present the ratio, the numerator, the denominator, the current and previous year values, the percentage variance, and explanation for variance exceeding 25 percent. The statutory audit verifies this disclosure; the CARO 2020 Annexure does not separately address ratios but Clause 2(b) on working capital limits implicitly tests current ratio adequacy. Interpretive guidance is published by <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> (Guidance Note on Division II of Schedule III).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Financial Ratios:</strong></p>
                    <p><strong>Schedule III Note 9 disclosure -</strong> The statutory ratio disclosure note required under Schedule III of Companies Act 2013 (both Division I and II), in the General Instructions for Preparation of Balance Sheet, added by G.S.R. 207(E) dated 24 March 2021.</p>
<p><strong>25 percent variance explanation -</strong> Where the percentage change between current year and previous year exceeds 25 percent (either positive or negative), a written explanation in the notes is mandatory - boilerplate explanation triggers NFRA scrutiny.</p>
<p><strong>Numerator and Denominator -</strong> Each Schedule III ratio must explicitly disclose its formula - what is in the numerator and what is in the denominator, including how averages are computed for turnover ratios.</p>
<p><strong>Liquidity Ratio -</strong> Measures the ability to meet short-term obligations - Current Ratio = Current Assets / Current Liabilities; Quick Ratio = (Current Assets less Inventory) / Current Liabilities.</p>
<p><strong>Solvency Ratio -</strong> Measures long-term debt servicing capacity - Debt-Equity = Total Debt / Shareholder's Equity; DSCR = (PAT + Depreciation + Interest on long-term debt) / (Interest + Principal repayment of long-term debt).</p>
<p><strong>Return on Capital Employed (ROCE) -</strong> EBIT / Capital Employed (Tangible Net Worth + Total Debt + Deferred Tax Liability); measures overall efficiency of capital use.</p>
<p><strong>Net Capital Turnover Ratio -</strong> Net Sales / Working Capital (Current Assets less Current Liabilities) - can be negative or extreme when working capital is small or negative; requires careful interpretation.</p>
<p><strong>Lender Covenant Ratios -</strong> Ratios specified in bank loan agreements that the borrower must maintain - typically DSCR, debt-equity, interest coverage, current ratio; breach can trigger event of default.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Financial Ratios</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Schedule III</span>
                        <strong>Note 9</strong>
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
            <h2 class="section-title">Five Categories of Financial Ratios</h2>
            <div class="content-text">
                
                <p>The 5 traditional categories with the most consequential ratios in each. The 11 Schedule III ratios are spread across 4 of the 5 categories - valuation ratios apply only to listed companies and are not in the Schedule III mandatory list.</p>
<h3 style="margin-top:24px;">Category 1 - Liquidity Ratios (Short-Term)</h3>
<ul>
<li><strong>Current Ratio (Schedule III):</strong> Current Assets / Current Liabilities; benchmark above 1.33; below 1 indicates inability to cover short-term obligations.</li>
<li><strong>Quick Ratio (Acid Test):</strong> (Current Assets - Inventory) / Current Liabilities; stricter; benchmark above 1.0.</li>
<li><strong>Cash Ratio:</strong> Cash and Cash Equivalents / Current Liabilities; most conservative measure.</li>
</ul>
<h3 style="margin-top:20px;">Category 2 - Solvency Ratios (Long-Term)</h3>
<ul>
<li><strong>Debt-Equity Ratio (Schedule III):</strong> Total Debt / Shareholder's Equity; manufacturing 1-2x, infrastructure 2-3x, FMCG below 0.5x.</li>
<li><strong>Debt Service Coverage Ratio (Schedule III):</strong> (PAT + Depreciation + Interest on long-term debt) / (Interest + Principal repayment of long-term debt); lender benchmark above 1.25x.</li>
<li><strong>Interest Coverage Ratio:</strong> EBIT / Interest Expense; benchmark above 2x.</li>
<li><strong>Fixed Charge Coverage Ratio:</strong> (EBIT + Lease Rentals) / (Interest + Lease Rentals).</li>
</ul>
<h3 style="margin-top:20px;">Category 3 - Profitability Ratios</h3>
<ul>
<li><strong>Gross Profit Margin:</strong> (Sales - COGS) / Sales; pricing power and direct cost efficiency.</li>
<li><strong>Operating Profit Margin (EBITDA Margin):</strong> EBITDA / Sales.</li>
<li><strong>Net Profit Ratio (Schedule III):</strong> Net Profit After Tax / Sales.</li>
<li><strong>Return on Equity (Schedule III):</strong> Net Profit After Tax / Average Shareholder's Equity.</li>
<li><strong>Return on Capital Employed (Schedule III):</strong> EBIT / Capital Employed.</li>
<li><strong>Return on Assets:</strong> Net Profit After Tax / Average Total Assets.</li>
</ul>
<h3 style="margin-top:20px;">Category 4 - Efficiency / Activity Ratios</h3>
<ul>
<li><strong>Inventory Turnover (Schedule III):</strong> COGS / Average Inventory.</li>
<li><strong>Trade Receivables Turnover (Schedule III):</strong> Net Credit Sales / Average Trade Receivables.</li>
<li><strong>Trade Payables Turnover (Schedule III):</strong> Net Credit Purchases / Average Trade Payables.</li>
<li><strong>Net Capital Turnover (Schedule III):</strong> Net Sales / Working Capital.</li>
<li><strong>Asset Turnover Ratio:</strong> Sales / Average Total Assets.</li>
<li><strong>Cash Conversion Cycle:</strong> Days Inventory + Days Receivables - Days Payables.</li>
</ul>
<h3 style="margin-top:20px;">Category 5 - Valuation Ratios (Listed Companies)</h3>
<ul>
<li><strong>Price-to-Earnings (P/E):</strong> Market price per share / EPS.</li>
<li><strong>Price-to-Book (P/B):</strong> Market price per share / Book value per share.</li>
<li><strong>EV/EBITDA:</strong> Enterprise Value / EBITDA; capital-structure-neutral.</li>
<li><strong>Dividend Yield:</strong> Dividend per share / Market price per share.</li>
<li><strong>Return on Investment (Schedule III):</strong> Income from Investment / Cost of Investment - the only Schedule III ratio in this category.</li>
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
            <h2 class="section-title">Patron Financial Ratios Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Schedule III Ratio Disclosure Compilation</td><td>All 11 Schedule III ratios for the FY with prior year comparison; written explanation for variance above 25%; tabular note for audited financials; auditor working paper handover.</td></tr>
<tr><td>Monthly / Quarterly CFO Ratio Dashboards</td><td>Customised 8-15 ratios (by industry and management priorities) from trial balance; trend charts; variance commentary; presented to CFO and Audit Committee.</td></tr>
<tr><td>Lender Ratio Reports for Fundraising</td><td>All lender-specified covenant ratios (DSCR, debt-equity, interest coverage, current ratio) from latest audited financials and pro-forma projections; aligned with RBI Master Direction-Working Capital for consortium banking.</td></tr>
<tr><td>Industry Ratio Benchmarking</td><td>Company's 11 Schedule III ratios plus 4-6 industry-specific ratios vs listed sector peers (BSE/NSE) and unlisted private peers; outperformance/underperformance analysis.</td></tr>
<tr><td>CFO-Level Financial Analytics Retainer</td><td>Year-round support - monthly dashboards, quarterly Board pack, annual Schedule III disclosure, ad-hoc lender and investor queries; integrated with Patron accounting services.</td></tr>
<tr><td>M&amp;A Diligence Ratio Review</td><td>Target 3-5 year ratio trend analysis; industry comparison; deal-rationale flags (margin compression, working capital expansion, debt build-up); informs purchase price negotiation.</td></tr>
<tr><td>Turnaround / Restructuring Ratio Analysis</td><td>DSCR projection, interest coverage trend, working capital cycle analysis; supports RBI restructuring framework filings and IBC pre-pack proceedings.</td></tr>
<tr><td>Audit-Defence Ratio Working Papers</td><td>Where Patron is auditor, ratio computation is part of audit working papers; where another firm audits, independent ratio computation provided for audit review.</td></tr>

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
            <h2 class="section-title">Financial Ratios Engagement Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 6-step partner-led workflow producing documented, audit-defensible working papers - formula, numerator, denominator, source line items, and sensitivity check.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement Scoping</h3>
        <p class="step-description">30-minute partner call to understand the need - Schedule III annual disclosure, monthly dashboard, lender report, benchmarking, M&A diligence, or turnaround. Industry and size context captured. Fixed-fee quote in 24 hours.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Partner call</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>24-hour fixed quote</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="30" fill="none" stroke="#14365F" stroke-width="2"/><path d="M45 40c0 18 12 30 30 30" stroke="#E8712C" stroke-width="3" fill="none" stroke-linecap="round"/><circle cx="48" cy="38" r="5" fill="#F5A623"/></svg></div>
        <span class="illustration-label">Scoped</span>
        <span class="step-number-large">01</span>
    </div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Data Request and TB Review</h3>
        <p class="step-description">Audited financials (current + prior for Schedule III); trial balance; receivables and payables ageing for turnover averages; loan schedules for DSCR; investment register for ROI; industry data for benchmarking.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audited financials</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ageing + loan schedules</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="18" width="80" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="34" x2="88" y2="34" stroke="#F5A623" stroke-width="2.5"/><line x1="32" y1="48" x2="78" y2="48" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="32" y1="60" x2="82" y2="60" stroke="#14365F" stroke-width="2" opacity="0.35"/></svg></div>
        <span class="illustration-label">Data In</span>
        <span class="step-number-large">02</span>
    </div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Ratio Computation with Documented Formulas</h3>
        <p class="step-description">Each of the 11 Schedule III ratios with explicit numerator and denominator; turnover ratios use average of opening and closing; DSCR uses long-term debt only; ROCE uses EBIT and Capital Employed.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Explicit formulas</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICAI-aligned</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="14" width="60" height="72" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="38" y="22" width="44" height="14" rx="2" fill="#14365F" opacity="0.2"/><circle cx="46" cy="48" r="4" fill="#E8712C"/><circle cx="60" cy="48" r="4" fill="#14365F" opacity="0.3"/><circle cx="74" cy="48" r="4" fill="#14365F" opacity="0.3"/><circle cx="46" cy="62" r="4" fill="#14365F" opacity="0.3"/><circle cx="60" cy="62" r="4" fill="#F5A623"/><circle cx="74" cy="62" r="4" fill="#14365F" opacity="0.3"/></svg></div>
        <span class="illustration-label">Computed</span>
        <span class="step-number-large">03</span>
    </div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Variance Analysis (25% Rule)</h3>
        <p class="step-description">Percentage change vs previous year for each ratio; ratios above 25% flagged for written explanation; explanation drafted with specific business reason - not boilerplate.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>25% flags</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity-specific reasons</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="60" width="14" height="24" rx="2" fill="#E8712C"/><rect x="38" y="44" width="14" height="40" rx="2" fill="#F5A623"/><rect x="58" y="30" width="14" height="54" rx="2" fill="#14365F" opacity="0.5"/><rect x="78" y="50" width="14" height="34" rx="2" fill="#10B981" opacity="0.7"/><path d="M20 56l22-14 22-10 24 12" stroke="#14365F" stroke-width="2" fill="none"/></svg></div>
        <span class="illustration-label">Analysed</span>
        <span class="step-number-large">04</span>
    </div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Dashboard / Report Drafting</h3>
        <p class="step-description">Dashboards: trend chart, current vs prior, variance commentary, definition footnote. Lender reports: covenant table with target and actual, projected ratios. Schedule III: tabular note ready for audited financials.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trend + covenant tables</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready note</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="22" y="14" width="76" height="72" rx="6" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><line x1="34" y1="28" x2="86" y2="28" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><rect x="34" y="40" width="24" height="18" rx="2" fill="#FEF4EE" stroke="#F5A623"/><line x1="64" y1="44" x2="86" y2="44" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="64" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="2" opacity="0.35"/><line x1="34" y1="68" x2="86" y2="68" stroke="#14365F" stroke-width="2" opacity="0.35"/></svg></div>
        <span class="illustration-label">Drafted</span>
        <span class="step-number-large">05</span>
    </div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Audit Coordination and Sign-Off</h3>
        <p class="step-description">Schedule III working papers handed to statutory auditor with formula explanation and supporting data. Lender reports and M&A diligence signed by partner CA with UDIN where used in regulatory filing.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor handover</span>
<span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Partner sign-off + UDIN</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration">
        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="18" width="80" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="44" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/><path d="M53 44l5 6 10-11" stroke="#10B981" stroke-width="3" fill="none" stroke-linecap="round"/><rect x="36" y="66" width="48" height="6" rx="2" fill="#E8712C" opacity="0.7"/></svg></div>
        <span class="illustration-label">Signed Off</span>
        <span class="step-number-large">06</span>
    </div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <h3>Annual Schedule III ratio disclosure</h3>
<ul><li>Audited financial statements for current FY (Balance Sheet, P&amp;L, Cash Flow, Notes)</li><li>Audited financials for prior FY for comparison; CFS where applicable; trial balance reconciliation</li></ul>
<h3 style="margin-top:20px;">Monthly CFO dashboard</h3>
<ul><li>Monthly closed trial balance; receivables and payables ageing; inventory schedule; loan ledger; sales register; expense ledger; bank statements; prior period dashboards for trend continuity</li></ul>
<h3 style="margin-top:20px;">Lender ratio report</h3>
<ul><li>Most recent audited financials; sanction letter with covenant table; projected financials for loan tenure; existing facility statements; latest stock and book debt statement filed with bank</li></ul>
<h3 style="margin-top:20px;">Industry benchmarking</h3>
<ul><li>Current and prior year audited financials of subject company; peer company list (Patron can suggest); access to peer audited financials (MCA portal, BSE/NSE for listed, paid databases for unlisted)</li></ul>
<h3 style="margin-top:20px;">CFO retainer / M&amp;A / Turnaround</h3>
<ul><li>Retainer: dashboard docs + annual budget + rolling 12-month projection + covenant calendars + investor templates</li><li>M&amp;A: target 3-5 year audited financials + sector peer financials + deal model + CARO Annexures</li><li>Turnaround: latest audited financials + debt schedule by lender + repayment schedule + ageing + RBI restructuring application if filed</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Computation Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Net Capital Turnover with Negative Working Capital</td><td>Retail/FMCG/service firms with negative working capital make the denominator negative - ratio negative or extreme. Schedule III does not exempt such cases.</td><td>Present ratio with footnote explanation; absolute value for trend; ICAI Guidance reference.</td></tr>
<tr><td>DSCR - Including or Excluding Short-Term Debt</td><td>Common error of including all interest and current portion of long-term debt, producing artificially low DSCR. Schedule III formula is long-term debt only.</td><td>Separate debt schedule by tenor; DSCR memo with explicit inclusion-exclusion logic.</td></tr>
<tr><td>Turnover Ratios - Average vs Closing Balance</td><td>Using closing balance distorts the ratio for first-year or seasonal companies. Schedule III turnover ratios should use average of opening and closing.</td><td>Explicit average computation; 4-quarter average for seasonal businesses; documented in working papers.</td></tr>
<tr><td>ROCE - What Counts as Capital Employed</td><td>Different definitions (e.g., total assets less current liabilities) produce different ROCE. Schedule III requires the formula to be explicitly disclosed.</td><td>ICAI-aligned formula (Tangible Net Worth + Total Debt + Deferred Tax Liability) with explicit component disclosure.</td></tr>
<tr><td>25% Variance Explanation Quality</td><td>NFRA inspections find boilerplate language ('due to business reasons') without entity-specific reasoning - triggers further scrutiny.</td><td>Variance explanation drafting with management input and supporting evidence; entity-specific reasons.</td></tr>
<tr><td>Group Consolidation - Standalone vs CFS</td><td>Note 9 is disclosed in BOTH standalone and consolidated statements; ratios differ. Common gap of disclosing only standalone or reusing the same numbers.</td><td>Parallel computation for standalone and CFS; comparison memo for management.</td></tr>

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
            <h2 class="section-title">Financial Ratios Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Schedule III Note 9 annual disclosure (standalone)</td><td>Rs 25,000 to Rs 75,000/year (Exl GST)</td></tr>
<tr><td>Schedule III Note 9 (with CFS)</td><td>Rs 50,000 to Rs 1,50,000/year (Exl GST)</td></tr>
<tr><td>Monthly CFO ratio dashboard (small company)</td><td>Rs 25,000 to Rs 50,000/month (Exl GST)</td></tr>
<tr><td>Monthly CFO ratio dashboard (mid-market or large)</td><td>Rs 50,000 to Rs 1,00,000/month (Exl GST)</td></tr>
<tr><td>Lender ratio report (single bank)</td><td>Rs 25,000 to Rs 75,000 per report (Exl GST)</td></tr>
<tr><td>Lender ratio report (consortium banking)</td><td>Rs 50,000 to Rs 1,50,000 per report (Exl GST)</td></tr>
<tr><td>Industry ratio benchmarking</td><td>Rs 50,000 to Rs 5,00,000 (Exl GST)</td></tr>
<tr><td>Annual CFO financial analytics retainer</td><td>Rs 1,00,000 to Rs 6,00,000/year (Exl GST)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from Rs 25,000 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Financial Ratios consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Financial%20Ratios%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Schedule III Note 9 annual disclosure</td><td>2 to 4 weeks (W1 data; W2 computation; W3 variance drafting; W4 review and auditor handover)</td></tr>
<tr><td>Monthly CFO dashboard (per cycle)</td><td>5 to 10 business days from book close</td></tr>
<tr><td>Lender ratio report (single bank)</td><td>1 to 2 weeks</td></tr>
<tr><td>Lender ratio report (consortium)</td><td>2 to 4 weeks</td></tr>
<tr><td>Industry ratio benchmarking</td><td>4 to 8 weeks</td></tr>
<tr><td>CFO retainer setup</td><td>4 to 6 weeks initial, then ongoing monthly cycles</td></tr>
<tr><td>M&amp;A diligence ratio review</td><td>3 to 6 weeks aligned with diligence calendar</td></tr>
<tr><td>Turnaround ratio analysis</td><td>2 to 6 weeks depending on debt schedule and consortium size</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Plan ahead:</strong> Engage Patron 4 to 8 weeks before FY-end for clean Schedule III disclosure. Lender ratio reports are time-sensitive - typically required 1 to 3 weeks before bank consortium meetings. For Series-funded startups, quarterly investor ratio reporting is a covenant in most term sheets.</p>

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
            <h2 class="section-title">Why Choose Patron for Financial Ratios</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Audit + Analytics Dual Perspective</h3><p>The same senior partner CA who handles statutory audit reviews ratio dashboards - ensuring audit-defensibility of every ratio computed.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="3" x2="9" y2="21"/><line x1="3" y1="9" x2="21" y2="9"/></svg></div><h3>Schedule III Note 9 Specialty</h3><p>Direct experience with 11-ratio disclosure for hundreds of companies since FY 2021-22. ICAI-aligned formulas and a documented variance explanation library.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>Lender Ratio Reporting Expertise</h3><p>RBI Master Direction-Working Capital understood; consortium banking covenant tables; restructuring framework support for stressed accounts.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><h3>Integrated with Audit and Adjacent Services</h3><p>Ratio analytics integrates with statutory audit, accounting standards and Ind AS (Schedule III Division I or II), CARO 2020 Clause 2(b), and broader accounting services.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>4-Office Pan-India Presence</h3><p>Mumbai, Pune, Delhi, and Gurugram - direct on-site availability for CFO and Board meetings where ratio dashboards are presented.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3>Fixed-Fee Transparency</h3><p>Written scoping memo and fixed-fee quote within 24 hours. Monthly dashboard fees set annually. No per-question billing.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof</h2>
            <div class="content-text">
                
                <div class="highlight-box" style="margin-bottom:20px;"><p><strong>10,000+ Businesses &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Docs Filed &nbsp;|&nbsp; 15+ Years of Practice</strong></p></div>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);">
<p>"Our Series-B fundraise required a 12-quarter ratio walk-through for the lead investor. Patron's team built the model in 3 weeks - Schedule III ratios + sector benchmarks + projected covenant compliance. The lead investor called it the cleanest financial analytics pack they had seen this year. We closed the round on the initial valuation ask."</p>
<p style="font-size:13px;color:var(--text-muted);margin-top:6px;">- CFO, SaaS Startup (Series B)</p>
</blockquote>
<p style="margin-top:20px;"><strong>4-Office pan-India presence:</strong> Marine Lines Mumbai, Wagholi Pune, Rohini Delhi, Golf Course Extension Road Gurugram - direct on-site availability for CFO Board meetings where ratio dashboards are presented.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Schedule III - 11 Ratios + Provider Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>#</th><th>Ratio</th><th>Numerator / Denominator</th><th>Interpretation</th></tr></thead>
                    <tbody>
                        <tr><td>1</td><td>Current Ratio</td><td>Current Assets / Current Liabilities</td><td>Short-term liquidity; benchmark above 1.33</td></tr>
<tr><td>2</td><td>Debt-Equity Ratio</td><td>Total Debt / Shareholder's Equity</td><td>Capital structure; industry-dependent</td></tr>
<tr><td>3</td><td>Debt Service Coverage Ratio</td><td>(PAT + Dep + Interest on LT debt) / (Interest + Principal repayment of LT debt)</td><td>Long-term debt servicing; lender covenant above 1.25x</td></tr>
<tr><td>4</td><td>Return on Equity</td><td>Net Profit After Tax / Average Shareholder's Equity</td><td>Shareholder return on investment</td></tr>
<tr><td>5</td><td>Inventory Turnover Ratio</td><td>Cost of Goods Sold / Average Inventory</td><td>Inventory movement speed</td></tr>
<tr><td>6</td><td>Trade Receivables Turnover</td><td>Net Credit Sales / Average Trade Receivables</td><td>Collection efficiency; corollary DSO</td></tr>
<tr><td>7</td><td>Trade Payables Turnover</td><td>Net Credit Purchases / Average Trade Payables</td><td>Payment cycle; corollary DPO</td></tr>
<tr><td>8</td><td>Net Capital Turnover Ratio</td><td>Net Sales / Working Capital</td><td>Sales per unit of working capital</td></tr>
<tr><td>9</td><td>Net Profit Ratio</td><td>Net Profit After Tax / Net Sales</td><td>Bottom-line profitability</td></tr>
<tr><td>10</td><td>Return on Capital Employed</td><td>EBIT / Capital Employed (TNW + Total Debt + DTL)</td><td>Overall capital efficiency</td></tr>
<tr><td>11</td><td>Return on Investment</td><td>Income from Investment / Cost of Investment</td><td>Yield on investments held</td></tr>
<tr><td colspan="4" style="background:var(--orange-lighter);"><strong>Provider comparison:</strong> Big 4 / Top Firm - Schedule III annual disclosure Rs 1,50,000 to Rs 5,00,000, monthly dashboard Rs 1,50,000 to Rs 5,00,000/month, partner involvement rare for mid-market. Virtual CFO - Schedule III typically not offered standalone, monthly dashboard Rs 50,000 to Rs 1,50,000/month, generalist consultants, limited audit-defensibility. Patron - mid-market fixed-fee, partner CA on every engagement, audit-defensible, consortium lender experience.</td></tr>

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
                
                <p>Financial ratio analytics integrates with the broader Patron service ecosystem and the Companies Act 2013 framework cluster:</p>
<ul>
<li><a href="/accounting-services">Accounting Services</a> - the broader bookkeeping and accounting retainer; ratio dashboards as a component.</li>
<li><a href="/accounting-services-for-trading-industry">Accounting Services for Trading Industry</a> - sector-specific accounting with industry-tuned ratios (inventory turnover, gross margin).</li>
<li><a href="/statutory-audit">Statutory Audit</a> - the auditor verifies Schedule III Note 9 ratio disclosure under SA 700 (Revised).</li>
<li><a href="/accounting-standards">Accounting Standards (AS and Ind AS)</a> - Schedule III is part of the Companies Act 2013 framework that AS/Ind AS feed into.</li>
<li><a href="/ind-as">Ind AS Implementation</a> - Schedule III Division II for Ind AS companies.</li>
<li><a href="/caro-2020">CARO 2020</a> - Clause 2(b) working capital limits implicitly tests current ratio adequacy.</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - annual compliance retainer covering Schedule III filing.</li>
<li><a href="/compliance-calendar">Compliance Calendar</a> - year-round compliance touchpoints including ratio dashboard cadence.</li>
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
                
                <p><strong>Schedule III of Companies Act 2013 - Note 9 (General Instructions) -</strong> Disclosure of 11 ratios mandatory in notes to financial statements. Added by <strong>MCA Notification G.S.R. 207(E) dated 24 March 2021</strong>; effective FY 2021-22 onwards. <strong>Division I</strong> - AS companies (standalone and CFS). <strong>Division II</strong> - Ind AS companies (standalone and CFS). <strong>Division III</strong> - NBFCs under Ind AS with additional NBFC ratio disclosures. MCA portal: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>.</p>
<p><strong>Companies Act 2013 cross-references -</strong> Section 129 (financial statements to comply with Schedule III; true and fair view); Section 133 (Central Government prescribes accounting standards; Schedule III aligns with AS/Ind AS); Section 134(5) (Director's Responsibility Statement confirms Schedule III compliance); Section 143(3) (auditor confirms true and fair view including the ratio note).</p>
<p><strong>ICAI Guidance Note on Division II Schedule III -</strong> Authoritative interpretation of Note 9 ratio formulas and disclosure format. ICAI portal: <a href="https://www.icai.org" target="_blank" rel="noopener">icai.org</a>.</p>
<p><strong>RBI Master Direction - Working Capital Finance -</strong> Lender-side ratio requirements - DSCR, debt-equity, current ratio, interest coverage. RBI portal: <a href="https://www.rbi.org.in" target="_blank" rel="noopener">rbi.org.in</a>.</p>
<p><strong>SEBI LODR 2015 Regulation 33 and Schedule III -</strong> Listed company ratio reporting aligned with Schedule III; quarterly financial results. SEBI portal: <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">sebi.gov.in</a>.</p>
<p><strong>NFRA Rules 2018 -</strong> Financial reporting quality review attention to ratio disclosure quality for Public Interest Entity audits - particularly the explanation column.</p>
<p><strong>Recent and upcoming changes -</strong> Code on Social Security 2020 (effective November 2025) - wage rule change affecting employee benefit ratios under Ind AS 19. Income-tax Act 2025 (effective 1 April 2026) - section renumbering affects deferred tax feeding into ROCE Capital Employed.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Financial Ratios</h2>
                    <p class="faq-expanded__lead">Common questions on the Schedule III mandate, the 25 percent change rule, LLP applicability, AS vs Ind AS, and lender ratios.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Financial Ratios',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the Schedule III ratio disclosure requirement?</h3>
                        <div class="faq-expanded__a"><p>Schedule III of the Companies Act 2013 was amended by MCA notification G.S.R. 207(E) dated 24 March 2021 to add Note 9 in the General Instructions for Preparation of Balance Sheet. This requires every company - both AS (Division I) and Ind AS (Division II) - to disclose 11 specific financial ratios in the notes with current and prior year comparison, percentage variance, and written explanation for any change exceeding 25 percent. The requirement applies from FY 2021-22 onwards and continues in the current FY 2025-26 audit cycle. LLPs are not subject to Schedule III.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which 11 ratios must be disclosed under Schedule III?</h3>
                        <div class="faq-expanded__a"><p>The 11 mandatory Schedule III ratios are - (1) Current Ratio; (2) Debt-Equity Ratio; (3) Debt Service Coverage Ratio; (4) Return on Equity Ratio; (5) Inventory Turnover Ratio; (6) Trade Receivables Turnover Ratio; (7) Trade Payables Turnover Ratio; (8) Net Capital Turnover Ratio; (9) Net Profit Ratio; (10) Return on Capital Employed; (11) Return on Investment. Each must be presented with explicit numerator and denominator, current and previous year values, percentage variance, and explanation if variance exceeds 25 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When does the 25 percent change explanation apply?</h3>
                        <div class="faq-expanded__a"><p>Schedule III Note 9 requires a written explanation for any ratio whose percentage change from previous year exceeds 25 percent - either a positive (above 25 percent increase) or negative (above 25 percent decrease) movement. The explanation must be entity-specific - identifying the underlying business reason such as commodity price changes, capex-led debt increase, working capital cycle changes, or customer mix shifts. Boilerplate explanations like 'due to business operations' attract NFRA inspection scrutiny and ICAI Peer Review attention.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do LLPs need to disclose financial ratios?</h3>
                        <div class="faq-expanded__a"><p>No. Schedule III is part of the Companies Act 2013 and applies only to companies registered under that Act (Indian + foreign companies under Section 2(42)). LLPs are registered under the LLP Act 2008 and are not subject to Schedule III - including the Note 9 ratio disclosure. LLP financial statements follow LLP Act 2008 + LLP Rules 2009 format. However, LLPs may voluntarily compute and disclose ratios for management or lender purposes, and Patron offers ratio services to LLPs on the same engagement framework.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are ratios different for Ind AS vs AS companies?</h3>
                        <div class="faq-expanded__a"><p>The 11 ratios required under Schedule III Note 9 are the same for both AS (Division I) and Ind AS (Division II) companies. However, the underlying numbers differ - Ind AS companies report under different recognition and measurement rules (revenue under Ind AS 115 vs AS 9, leases under Ind AS 116, financial instruments under Ind AS 109). For example, ROCE under Ind AS may differ due to different treatment of lease right-of-use assets in Capital Employed. First-time Ind AS adoption companies see significant ratio changes - explicit explanation under the 25 percent rule is typically required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What ratios do lenders typically require?</h3>
                        <div class="faq-expanded__a"><p>Lender covenant ratios go beyond the 11 Schedule III ratios. Common requirements include Debt Service Coverage Ratio above 1.25x for term loans; Debt-Equity below 2:1 for mid-corporate; Interest Coverage above 2x; Current Ratio above 1.33; for working capital lending under RBI Master Direction, drawing power based on stock and book debts; for project finance, DSCR with project-specific cash flow projections. Patron's lender ratio reports cover all consortium banks with uniform projections and covenant-by-covenant compliance status.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How frequently should CFO ratio dashboards be updated?</h3>
                        <div class="faq-expanded__a"><p>Industry practice varies - monthly for fast-growing or working-capital-intensive businesses (most preferred); quarterly for stable mature businesses aligned with Board meetings; annually only for very small companies (not recommended). Monthly cadence allows trend identification before issues compound; quarterly aligns with statutory deadlines (SEBI LODR for listed cos, Audit Committee meetings). Patron's standard monthly CFO dashboard is delivered within 5 business days of book close; quarterly includes a Board pack within 10 business days of quarter end.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can Patron handle ratio computation alongside statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Yes. When Patron is engaged for statutory audit, Schedule III Note 9 ratio computation and disclosure is part of the audit engagement - included in audit fees with no separate charge. The ratio computation, variance explanation drafting, and audit verification happen in the same cycle. When the statutory audit is with another firm, Patron offers standalone ratio compilation and the working paper file is designed for clean handover to the audit firm - particularly useful when companies want independent ratio computation before audit review.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="list-style:none;padding-left:0;">
<li><strong>Schedule III ratio notification -</strong> MCA G.S.R. 207(E) dated 24 March 2021; effective FY 2021-22 onwards.</li>
<li><strong>Number of mandatory ratios -</strong> 11 specific ratios under Schedule III Note 9.</li>
<li><strong>Variance explanation threshold -</strong> Above 25 percent change year-on-year requires written explanation.</li>
<li><strong>LLPs subject to Schedule III -</strong> No - LLPs follow LLP Act 2008 format, not Schedule III.</li>
<li><strong>Standalone or CFS -</strong> Both - 11 ratios in standalone AND consolidated financial statements.</li>
<li><strong>AS vs Ind AS ratios -</strong> Same 11 ratios; underlying numbers differ due to recognition rules.</li>
<li><strong>Patron starting fee -</strong> Rs 25,000 for annual Schedule III ratio disclosure compilation.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency Recap</h2>
            <div class="content-text">
                
                <p>Schedule III Note 9 ratio disclosure is part of every annual audited financial statement for FY 2025-26 - non-disclosure or boilerplate variance explanations trigger a qualified audit opinion under SA 700 (Revised), NFRA inspection attention, ICAI Peer Review findings, and Section 147 penalty exposure (Rs 25,000 to Rs 5 lakh on company plus officer fines).</p>
<p>For fundraising and lender consortium meetings, ratio reports are time-sensitive - typically required 1 to 3 weeks before bank meetings. For Series-funded startups, quarterly investor reporting on key ratios is a covenant in most term sheets.</p>
<p><strong>Engage Patron 4 to 8 weeks before FY-end for clean Schedule III disclosure; engage well before lender meetings for covenant compliance reports.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to a Partner CA on Financial Ratios</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Financial ratios are the fundamental quantitative language of corporate finance - they translate audited financial statements into measurable insights on liquidity, solvency, profitability, efficiency, and valuation. In India, Schedule III Note 9 of the Companies Act 2013 - introduced by MCA notification G.S.R. 207(E) dated 24 March 2021 - made disclosure of 11 specific ratios mandatory in every audited annual financial statement, with prior year comparison and explanation for changes exceeding 25 percent.</p>
<p>Beyond statutory compliance, ratios drive lender credit decisions, investor diligence outcomes, Audit Committee governance, M&amp;A purchase price negotiation, and CFO management reporting. Patron Accounting offers dedicated financial ratio analytics services - Schedule III Note 9 annual disclosure compilation, monthly and quarterly CFO dashboards, lender ratio reports, industry benchmarking, M&amp;A diligence ratio review, and CFO-level analytics retainers.</p>
<p>With 15+ years of practice, 4-office pan-India presence, senior partner CA involvement on every engagement, fixed-fee transparency, and audit-defensible deliverables, Patron is the specialist counsel for financial ratio analytics in India. Free first consultation; written scoping memo with fixed-fee quote within 24 hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Financial%20Ratios%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Four offices for in-person CFO and Board presentations; remote analytics delivery pan-India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Patron Offices</div>
    <div class="pa-block-sub">Direct on-site availability for CFO Board meetings where ratio dashboards are presented.</div>
    <div class="pa-city-grid">
        <div class="pa-city-card" style="cursor:default;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Marine Lines</div></div></div>
        <div class="pa-city-card" style="cursor:default;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Wagholi</div></div></div>
        <div class="pa-city-card" style="cursor:default;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Rohini</div></div></div>
        <div class="pa-city-card" style="cursor:default;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Golf Course Ext Rd</div></div></div>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Framework cluster and accounting ecosystem</div>
    <div class="pa-cross-grid">
        <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Parent Service</div></div></a>
        <a href="/accounting-services-for-trading-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting - Trading</div><div class="pa-card-sub">Industry Vertical</div></div></a>
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Verifies Note 9</div></div></a>
        <a href="/accounting-standards" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Standards</div><div class="pa-card-sub">AS + Ind AS</div></div></a>
        <a href="/caro-2020" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">CARO 2020</div><div class="pa-card-sub">Clause 2(b)</div></div></a>
        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">Annual Retainer</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2). Schedule III amendments, ICAI Guidance Notes, NFRA observations, RBI Master Direction and SEBI LODR changes are verified against MCA, ICAI, RBI, and SEBI sources at every review cycle.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

</main>





<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection