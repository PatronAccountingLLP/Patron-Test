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
    <title>Listed Company Statutory Audit</title>
    <meta name="description" content="Statutory audit of Indian listed companies under Section 139, SEBI LODR Regulation 33, NFRA Rules. Quarterly reviews, KAM, IFC, CARO. From Rs 5,00,000.">
    <link rel="canonical" href="/statutory-audit-for-listed-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Listed Company Statutory Audit 2026 | Patron Accounting">
    <meta property="og:description" content="Statutory audit of Indian listed companies under Section 139, SEBI LODR Regulation 33, NFRA Rules. Quarterly reviews, KAM, IFC, CARO. From Rs 5,00,000.">
    <meta property="og:url" content="/statutory-audit-for-listed-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-listed-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Listed Company Statutory Audit 2026 | Patron Accounting">
    <meta name="twitter:description" content="Statutory audit of Indian listed companies under Section 139, SEBI LODR Regulation 33, NFRA Rules. Quarterly reviews, KAM, IFC, CARO. From Rs 5,00,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-listed-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/statutory-audit-for-listed-companies#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Statutory Audit",
              "item": "/statutory-audit"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "For Listed Companies",
              "item": "/statutory-audit-for-listed-companies"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/statutory-audit-for-listed-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the statutory audit timeline for a listed company in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A listed company in India follows a rolling quarterly audit cadence under SEBI LODR Regulation 33. Limited reviews for Q1, Q2, and Q3 must be completed and the results filed with stock exchanges within 45 days of each quarter end - i.e. 14 August, 14 November, and 14 February respectively for a 31 March year-end. The Q4 along with full-year audited results must be filed within 60 days of FY end (by 30 May). Form AOC-4 XBRL is filed within 30 days of AGM and Form MGT-7 within 60 days."
              }
            },
            {
              "@type": "Question",
              "name": "Is auditor rotation mandatory for listed companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 139(2) of the Companies Act 2013 read with Rule 5 of the Companies (Audit and Auditors) Rules 2014, an individual auditor cannot serve a listed company for more than 5 consecutive years, and an audit firm cannot serve for more than 10 consecutive years. A 5-year cooling-off period applies before the same auditor can be reappointed. The rule applies to every listed company regardless of size."
              }
            },
            {
              "@type": "Question",
              "name": "What is SEBI LODR Regulation 33?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEBI Listing Obligations and Disclosure Requirements Regulations 2015, Regulation 33, governs the filing of financial results by listed entities with stock exchanges. Regulation 33(3) prescribes the timelines - quarterly limited-reviewed results within 45 days of quarter end and audited annual results within 60 days of FY end. Regulation 33(8) extends the parent auditor responsibility to conducting limited review of audit of entities consolidated under AS 21 or Ind AS 110."
              }
            },
            {
              "@type": "Question",
              "name": "What are Key Audit Matters (KAM) under SA 701?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Key Audit Matters are those matters that, in the auditor professional judgement, were of most significance in the audit of the financial statements of the current period. Under ICAI Standard on Auditing 701, KAMs are mandatory in the audit report of every listed entity in India. KAMs are selected from matters communicated with those charged with governance and typically relate to significant risks, areas of management judgement, or significant events during the period."
              }
            },
            {
              "@type": "Question",
              "name": "Does NFRA regulate auditors of listed companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 132 of the Companies Act 2013 read with the National Financial Reporting Authority Rules 2018, listed companies are Public Interest Entities. Auditors of PIEs are subject to NFRA jurisdiction including registration, inspection, investigation, and disciplinary action. Auditors must file Form NFRA-1 first-time intimation and Form NFRA-2 annual return by 30 November each year. NFRA may impose penalties up to Rs 10 lakh on individual CAs and 10 times the audit fee on firms."
              }
            },
            {
              "@type": "Question",
              "name": "Are quarterly results of listed companies audited?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Q1, Q2, and Q3 quarterly results undergo a Limited Review under ICAI Standard on Review Engagements SRE 2410, which is less intensive than a full audit. The auditor expresses a conclusion of negative assurance - whether anything has come to attention indicating that the results are not prepared in accordance with the applicable financial reporting framework. Q4 results, however, are part of the full-year audit and are therefore audited under Standards on Auditing."
              }
            },
            {
              "@type": "Question",
              "name": "What is the audit committee composition for a listed company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 177 of the Companies Act 2013 read with SEBI LODR Regulation 18, every listed company must have an Audit Committee with at least 3 directors as members, two-thirds of whom must be independent directors. All members must be financially literate and at least one member must have accounting or related financial management expertise. The Audit Committee recommends auditor appointment, reviews findings, approves related party transactions under Regulation 23, and oversees vigil mechanism."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for audit defaults in a listed company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 147 of the Companies Act 2013, audit defaults attract penalty of Rs 25,000 to Rs 5,00,000 on the company plus officer fines of Rs 10,000 to Rs 1,00,000 and potential imprisonment up to 1 year. In addition, listed companies face SEBI adjudication for LODR violations, stock exchange action including suspension of trading under SEBI SOP dated 22 January 2020, and NFRA disciplinary action against the auditor with penalties up to Rs 10 lakh on individuals and 10 times the audit fee on firms."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/statutory-audit-for-listed-companies#service",
          "name": "Statutory Audit for Listed Companies",
          "url": "/statutory-audit-for-listed-companies",
          "serviceType": "Statutory Audit (Listed Companies - BSE / NSE Mainboard, BSE SME, NSE Emerge)",
          "description": "End-to-end statutory audit service for Indian listed companies on BSE and NSE mainboard or SME platforms covering quarterly limited reviews under SEBI LODR Regulation 33, annual audit under Section 139, Key Audit Matters under SA 701, CARO 2020 reporting, Internal Financial Controls under Section 143(3)(i), fraud reporting under Section 143(12), Regulation 33(8) subsidiary auditor coordination, and NFRA-1 and NFRA-2 filings.",
          "provider": {
            "@id": "/#organization"
          },
          "areaServed": {
            "@type": "Country",
            "name": "India",
            "sameAs": "https://en.wikipedia.org/wiki/India"
          },
          "about": [
            {
              "@type": "Thing",
              "name": "Statutory Auditor",
              "sameAs": "https://en.wikipedia.org/wiki/Statutory_auditor"
            },
            {
              "@type": "Thing",
              "name": "National Financial Reporting Authority",
              "sameAs": "https://en.wikipedia.org/wiki/National_Financial_Reporting_Authority"
            },
            {
              "@type": "Thing",
              "name": "Companies Act 2013",
              "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Listed Company Audit Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "BSE SME or NSE Emerge listed, no subsidiaries",
                "priceCurrency": "INR",
                "price": "500000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Mainboard listed, 1 to 3 subsidiaries (Indian)",
                "priceCurrency": "INR",
                "price": "1000000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Mainboard listed, multiple subsidiaries with complex segments",
                "priceCurrency": "INR",
                "price": "2500000",
                "availability": "https://schema.org/InStock"
              }
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
        /* Amount column  -  right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
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

        /* Process Evidence Screenshot  -  Plan 3.2 */
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
                        Statutory Audit for Listed Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Standalone and Consolidated Ind AS financials, audit committee minutes, NFRA-2, ADT-1, AOC-4 XBRL, MGT-7, subsidiary audit reports, KAM working papers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Patron listed company audit starts at Rs 5,00,000 per year covering quarterly reviews, annual audit and Regulation 33 reporting</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian company with equity or convertible securities listed on BSE, NSE mainboard or SME platform; debt-listed entities; INVITs and REITs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Quarterly limited review within 45 days; annual audited Q4 results within 60 days of FY end; AOC-4 XBRL within 30 days of AGM</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20we%20are%20a%20listed%20company%20looking%20for%20a%20statutory%20auditor.%20Please%20share%20a%20quarterly%20cadence%20plan%20and%20fixed-fee%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Listed Company Audit'/>
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
                                
<option value="statutory-audit-for-listed-companies" selected>Statutory Audit (Listed Companies)</option>
<option value="statutory-audit">Statutory Audit (Hub)</option>
<option value="internal-audit">Internal Audit</option>
<option value="secretarial-audit">Secretarial Audit</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
<option value="private-limited-company-compliance">Private Limited Company Compliance</option>
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
        
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron took over our statutory audit in the second year after our SME platform listing. They restructured the quarterly review cadence so we met the 45-day deadline cleanly for the first time, drafted KAM language that the Audit Committee was comfortable with, and filed NFRA-2 well within the deadline.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">BSE SME-listed Services Co, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were heading into IPO with our prior auditor working papers in mixed shape. Patron pre-IPO audit team re-did three years of restated financials to Ind AS standards, supported the merchant banker through DRHP queries, and transitioned us cleanly to the listed-company audit regime. Listed in 7 months.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Founder</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mainboard Manufacturing, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">After 9 years of Big-4 audit our company faced mandatory rotation. Patron was selected after Audit Committee process; the first cycle ran with full KAM, CARO, IFC, and Regulation 33(8) subsidiary coordination across 4 subs. Audited annual results delivered within 58 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Committee Chair</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mainboard Chemicals Co, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 143(12) fraud reporting threshold was always a grey area for us with three small operational incidents. Patron applied the decision tree with running aggregation and Audit Committee briefings; clean reporting trail without any Central Government filing needed for the year.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NE</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NSE Emerge-listed Tech, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Regulation 33(8) subsidiary coordination across 7 subsidiaries (2 foreign) was the recurring pain point. Patron standardised component auditor questionnaires, audit instructions, and review timetables - subsidiary review reports came in on time for the parent consolidated audit.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DB</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Group Finance Controller</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mainboard Pharma, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SEBI LODR Third Amendment 2024 disclosure pack was the new requirement at our AGM auditor appointment. Patron pre-prepared the 11-head disclosure pack with partner sign-offs; Audit Committee tabling went through without queries. Now using the template across the group.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Company Secretary</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mainboard Financial Services, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div>
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
                    <p>Quarterly limited reviews, annual audit, Regulation 33 reporting, KAM, IFC, CARO, NFRA-2, AOC-4 XBRL - delivered under one CA partner from Rs 5,00,000 per year.</p>
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
                <a href="#what-section" class="toc-btn">What It Covers</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Patron Services</a>
                <a href="#procedure-section" class="toc-btn">6-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Audit Calendar</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
                <a href="#comparison-section" class="toc-btn">Listed vs Unlisted</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit for Listed Companies: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Listed Company Audit Services at a Glance</strong></p>
                    <p>Listed company audit in India follows a four-regulator framework. The Companies Act 2013 (Sections 132, 139, 143, 177) defines the audit obligation, auditor rotation, and audit committee. SEBI LODR Regulations 2015 (Regulation 33) mandates quarterly limited reviews within 45 days and audited annual results within 60 days. NFRA Rules 2018 place listed-company auditors under direct National Financial Reporting Authority oversight with Form NFRA-1 and NFRA-2 filing obligations. ICAI Standards on Auditing (especially SA 701 Key Audit Matters) govern the audit report. CARO 2020, IFC reporting under Section 143(3)(i), Ind AS, and XBRL filing all apply without small-company exemptions.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Value</th></tr></thead><tbody><tr><td>Governing Framework</td><td>Companies Act 2013, SEBI LODR Regulations 2015, NFRA Rules 2018, ICAI Standards on Auditing</td></tr><tr><td>Auditor Eligibility</td><td>Practicing CA or CA firm; Section 141 ineligibility checks; NFRA registration required for PIE audits</td></tr><tr><td>Auditor Rotation</td><td>Individual 5 years max; firm 10 years max; 5-year cooling-off (Section 139(2) + Rule 5)</td></tr><tr><td>Quarterly Cadence</td><td>Q1, Q2, Q3 limited review within 45 days of quarter end; Q4 audited within 60 days of FY end (Regulation 33)</td></tr><tr><td>Audit Committee</td><td>Mandatory under Section 177 + SEBI LODR Regulation 18; at least 3 members; 2/3 independent; financially literate</td></tr><tr><td>Patron Audit Fee</td><td>Rs 5,00,000 to Rs 50,00,000 per year depending on size, subsidiaries, listing platform</td></tr><tr><td>Key Audit Matters</td><td>Mandatory disclosure under SA 701; communicated in auditor report</td></tr><tr><td>Authority</td><td>MCA, SEBI, NFRA, NCLT, ICAI, BSE, NSE</td></tr></tbody></table></div><p>India has over 5,000 listed companies across BSE and NSE mainboard and SME platforms. Every one of them faces the same four-regulator audit framework regardless of size - the SME platform listed company with Rs 20 crore turnover follows the same Regulation 33 quarterly cadence as a mainboard large-cap.</p>
                <p>Patron Accounting brings audit-team experience across these platforms with NFRA-aware audit working papers, KAM drafting practice, and quarterly review cadence that listed Audit Committees rely on. Statutory auditors of listed entities must file Form NFRA-1 first-time intimation and Form NFRA-2 annual return; NFRA can inspect, investigate, and impose penalties up to Rs 10 lakh on individual CAs and 10 times the audit fee on firms, plus debarment of up to 10 years.</p>
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
                <h2 class="section-title">What Is Listed Company Statutory Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Listed company statutory audit is the annual examination of standalone and consolidated financial statements of an Indian company whose equity, convertible securities, or debt securities are listed on a recognised stock exchange, conducted under Section 139 of the Companies Act 2013, with quarterly limited reviews under SEBI LODR Regulation 33, by a Chartered Accountant or audit firm registered with NFRA, in accordance with ICAI Standards on Auditing including SA 701 Key Audit Matters.</p>
<p>Listed company audit differs structurally from private limited company audit in five key dimensions. First, it runs on a quarterly cadence (Q1-Q3 limited reviews under SRE 2410 plus Q4 full audit under SAs) rather than a single annual audit. Second, the auditor must be NFRA-registered because listed companies are Public Interest Entities under NFRA Rules 2018. Third, the auditor report must include Key Audit Matters under SA 701 - matters of most significance in the current period audit. Source: <a href="https://nfra.gov.in/" target="_blank" rel="noopener">National Financial Reporting Authority (NFRA)</a>.</p>
<p>Fourth, mandatory rotation under Section 139(2) + Rule 5 forces a change in auditor after specified terms - 5 years for individuals, 10 years for firms, with 5-year cooling-off. Fifth, Regulation 33(8) extends the parent auditor review obligation to all subsidiaries consolidated under AS 21 or Ind AS 110, requiring formal procedures to rely on subsidiary auditors under SA 600.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Listed Company Audit:</strong></p>
                    
<p><strong>Public Interest Entity (PIE):</strong> Defined under NFRA Rules 2018; includes listed companies and certain unlisted companies above thresholds; auditors of PIEs are subject to NFRA jurisdiction including inspection, investigation, and disciplinary action.</p>
<p><strong>NFRA Rules 2018:</strong> National Financial Reporting Authority Rules notified under Section 132 of the Companies Act 2013; auditors of listed entities and large unlisted PIEs must file Form NFRA-1 first-time intimation and Form NFRA-2 annual return.</p>
<p><strong>SEBI LODR Regulation 33:</strong> Listing Obligations and Disclosure Requirements Regulations 2015; quarterly financial results within 45 days, audited annual within 60 days, statutory auditor limited review for consolidated under Reg 33(8).</p>
<p><strong>Key Audit Matters (KAM):</strong> Matters that, in the auditor professional judgement, were of most significance in the audit; reported in a separate section of the audit report under SA 701; mandatory for listed entities.</p>
<p><strong>Mandatory Auditor Rotation:</strong> Section 139(2) read with Rule 5 of the Companies (Audit and Auditors) Rules 2014; individual auditor cannot exceed 5 consecutive years; audit firm cannot exceed 10 consecutive years; 5-year cooling-off applies.</p>
<p><strong>Internal Financial Controls (IFC):</strong> Auditor opinion under Section 143(3)(i) on adequacy and operating effectiveness of internal financial controls; mandatory for listed companies with no small-company exemption.</p>
<p><strong>CARO 2020:</strong> Companies (Auditor Report) Order 2020 with 21 reporting clauses; applies in full to listed companies under Section 143(11); no exemption available.</p>
<p><strong>Section 143(12):</strong> Auditor mandatory fraud reporting obligation; frauds above Rs 1 crore reported to Central Government within prescribed time; frauds below Rs 1 crore reported to Audit Committee.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Listed Company Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Quad-Regulator Framework</span>
                        <strong>Companies Act + SEBI LODR + NFRA + ICAI SAs</strong>
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
            <h2 class="section-title">Who Needs Listed Company Statutory Audit</h2>
            <div class="content-text">
                
                
<p>The listed company statutory audit regime applies to every Indian company with specified securities listed on a recognised stock exchange. The audit framework varies in intensity by listing platform but the core obligations are common.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Listed Entity Type</th><th>Examples</th><th>Audit Layers</th></tr></thead>
<tbody>
<tr><td>BSE and NSE mainboard listed</td><td>Large-cap, mid-cap and small-cap mainboard companies</td><td>Full SEBI LODR + Companies Act + NFRA + KAM framework + Regulation 33(8) subsidiary review</td></tr>
<tr><td>BSE SME listed</td><td>Companies on BSE SME platform; post-listing migration to mainboard route</td><td>Same framework; reduced thresholds for some regulations; quarterly cadence and NFRA jurisdiction apply</td></tr>
<tr><td>NSE Emerge listed</td><td>Companies on NSE Emerge SME platform</td><td>SEBI LODR + Section 139 audit + NFRA filings + KAM + CARO + IFC</td></tr>
<tr><td>Debt-listed companies</td><td>Non-convertible debentures (NCDs), NCRPS listed on stock exchange</td><td>Subset of LODR provisions; Section 139 audit; CARO; IFC; NFRA jurisdiction applies</td></tr>
<tr><td>INVITs and REITs</td><td>Infrastructure Investment Trusts, Real Estate Investment Trusts</td><td>Separate audit framework under SEBI Investment Trusts Regulations; NFRA jurisdiction</td></tr>
<tr><td>Foreign companies with Indian listing</td><td>IDRs and dual-listed entities</td><td>Section 380 + LODR; audit subject to Indian standards where Indian operations are listed</td></tr>
</tbody>
</table>
</div>
<p>Listed company statutory audit components include standalone audit under Section 139 + ICAI SAs; consolidated audit under Section 129(3) for parent of group; quarterly limited review under Regulation 33 + ICAI SRE 2410 (Q1, Q2, Q3); Q4 audited along with full year audit (within 60 days of FY end); CARO 2020 reporting under Section 143(11) - all 21 clauses; Internal Financial Controls opinion under Section 143(3)(i); Key Audit Matters disclosure under SA 701; Section 143(12) fraud reporting; Regulation 33(8) subsidiary auditor coordination under SA 600; Form ADT-1 within 15 days; Form NFRA-1 first-time intimation; Form NFRA-2 annual return; Audit Committee reporting under Section 177 and Regulation 18.</p>
<p>Auditor eligibility requires a practicing Chartered Accountant or CA firm holding valid Certificate of Practice; not disqualified under Section 141 (no business relationship, no substantial interest, fee dependency cap); registered with NFRA for PIE audits; free of conflict of interest per SEBI LODR Third Amendment Dec 2024 enhanced disclosure; past association with the listed entity or group within prescribed thresholds disclosed.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Listed Company Audit Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Pre-Engagement and Audit Committee Recommendation</td><td>Audit Committee recommendation under Section 177(4) and Regulation 18(3). Disclosure pack per SEBI LODR Third Amendment 2024 covering past association, ICAI/NFRA/SEBI orders, pending proceedings, fee benchmarking, and conflict-of-interest declarations. Shareholder approval at AGM under Section 139(1). Form ADT-1 within 15 days. Form NFRA-1 first-time intimation.</td></tr>
<tr><td>Quarterly Limited Reviews (Q1, Q2, Q3)</td><td>Limited review under ICAI SRE 2410 for each of Q1, Q2, Q3 standalone and consolidated results. Limited Review Report drafted and signed within 45 days of quarter end. Engagement with Audit Committee for findings discussion. Coordination with subsidiary auditors under Regulation 33(8). XBRL filing with stock exchanges.</td></tr>
<tr><td>Annual Statutory Audit (Q4 + Full Year)</td><td>Full-scope statutory audit under Section 139 and ICAI SAs of standalone and consolidated Ind AS financial statements. Materiality determination, risk assessment, audit procedures, working papers under NFRA inspection standards. SA 701 Key Audit Matters identification and drafting. SA 600 procedures for subsidiary auditor reliance. Audited annual results filed with stock exchange within 60 days of FY end.</td></tr>
<tr><td>CARO 2020 + IFC + Fraud Reporting</td><td>CARO 2020 annexure covering all 21 clauses (fixed assets, inventory, loans, deposits, statutory dues, fraud, etc). IFC opinion under Section 143(3)(i) on design and operating effectiveness. Fraud reporting under Section 143(12) - above Rs 1 crore to Central Government with prescribed disclosures, below Rs 1 crore to Audit Committee.</td></tr>
<tr><td>NFRA Compliance</td><td>Annual Form NFRA-2 filing by audit firm with prescribed disclosures. Engagement quality control review under SQC 1. Audit file preparation to NFRA inspection standards. Response and representation if NFRA inspection or investigation initiated.</td></tr>
<tr><td>AGM and ROC Filings</td><td>Audit report and annual financial statements presented at AGM. Form AOC-4 XBRL filed within 30 days of AGM under Section 137(1). Form MGT-7 (full, not MGT-7A) within 60 days under Section 92. Statement of Impact of Audit Qualifications if applicable per Regulation 33.</td></tr>


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
            <h2 class="section-title">Our 6-Step Listed Company Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron follows a structured 6-step audit cycle anchored to provisions of the Companies Act 2013, SEBI LODR Regulations 2015, NFRA Rules 2018, and ICAI Standards on Auditing - running continuously through the FY rather than as a single year-end exercise.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement Acceptance and NFRA Filings</h3>
        <p class="step-description">Engagement letter under SA 210 with Audit Committee. Verify auditor independence under Section 141 and SEBI LODR Third Amendment 2024 enhanced disclosure requirements. Confirm NFRA registration status. Issue ADT-1 within 15 days of appointment. Form NFRA-1 first-time intimation filed by audit firm within 30 days of accepting listed PIE audit.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 210 letter
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Third Amendment disclosure
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                ADT-1 + NFRA-1
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="18" rx="6" fill="#14365F"/>
        <text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 210</text>
        <line x1="25" y1="40" x2="80" y2="40" stroke="#F5A623" stroke-width="2"/>
        <text x="90" y="42" font-size="6" fill="#F5A623" font-weight="700" font-family="Arial,sans-serif">ADT-1</text>
        <line x1="25" y1="52" x2="90" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <text x="90" y="62" font-size="6" fill="#25D366" font-weight="700" font-family="Arial,sans-serif">NFRA-1</text>
        <line x1="25" y1="60" x2="75" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="73" r="9" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M91 73l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Engaged</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Planning, Risk Assessment and KAM Identification</h3>
        <p class="step-description">Audit planning under SA 300 with materiality determination under SA 320. Risk assessment under SA 315 (Revised) covering inherent and control risks. Identification of Significant Risks. Initial KAM candidate identification under SA 701. Engagement plan with calendar dates and subsidiary coordination locked at this stage.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 300 + 315
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 320 materiality
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                KAM candidates
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">RISK + KAM</text>
        <circle cx="35" cy="50" r="15" fill="#25D366" opacity="0.7"/>
        <text x="35" y="48" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">RISK</text>
        <text x="35" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 315</text>
        <circle cx="80" cy="50" r="15" fill="#F5A623" opacity="0.7"/>
        <text x="80" y="48" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">KAM</text>
        <text x="80" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 701</text>
        <text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SIGNIFICANT RISKS</text>
                </svg>
            </div>
            <span class="illustration-label">Planned</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Quarterly Limited Reviews (Q1, Q2, Q3)</h3>
        <p class="step-description">Limited review of Q1 standalone and consolidated results under SRE 2410 within 45 days of 30 June (by 14 August). Repeat for Q2 (by 14 November) and Q3 (by 14 February). Limited Review Reports signed and filed with stock exchanges via XBRL. Subsidiary auditor coordination under Regulation 33(8) for consolidated review.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SRE 2410
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                45-day deadline
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Reg 33(8) subs
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">QUARTERLY</text>
        <rect x="25" y="32" width="20" height="20" rx="3" fill="#25D366"/>
        <text x="35" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q1</text>
        <rect x="50" y="32" width="20" height="20" rx="3" fill="#F5A623"/>
        <text x="60" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q2</text>
        <rect x="75" y="32" width="20" height="20" rx="3" fill="#E8712C"/>
        <text x="85" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q3</text>
        <text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">REG 33 - 45 DAYS</text>
        <text x="60" y="80" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SRE 2410 LIMITED REVIEW</text>
                </svg>
            </div>
            <span class="illustration-label">Q1-Q3 Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Year-End Audit + CARO + IFC + Fraud</h3>
        <p class="step-description">Full-scope audit procedures under ICAI SAs for Q4 + full FY. Substantive procedures, controls testing, sampling under SA 530. CARO 2020 procedures for all 21 clauses. IFC testing under Section 143(3)(i). Fraud risk assessment under SA 240; Section 143(12) reporting decision - above Rs 1 crore to Central Government, below Rs 1 crore to Audit Committee.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                21 CARO clauses
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                IFC opinion
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Fraud Sec 143(12)
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">YEAR-END</text>
        <rect x="22" y="30" width="22" height="22" rx="3" fill="#25D366" opacity="0.85"/>
        <text x="33" y="42" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CARO</text>
        <text x="33" y="50" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">21 clauses</text>
        <rect x="49" y="30" width="22" height="22" rx="3" fill="#F5A623" opacity="0.85"/>
        <text x="60" y="42" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">IFC</text>
        <text x="60" y="50" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">143(3)(i)</text>
        <rect x="76" y="30" width="22" height="22" rx="3" fill="#DC2626" opacity="0.85"/>
        <text x="87" y="42" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FRAUD</text>
        <text x="87" y="50" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">143(12)</text>
        <text x="60" y="75" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q4 + FULL YEAR</text>
                </svg>
            </div>
            <span class="illustration-label">Audited</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Audit Report, KAM and Audit Committee</h3>
        <p class="step-description">Auditor report under SA 700 (Revised). Key Audit Matters section under SA 701 calibrated to Significant Risk register. Modifications under SA 705 if needed. Emphasis of Matter under SA 706. CARO 2020 annexure. IFC opinion paragraph. UDIN generation per ICAI. Audit Committee meeting under Section 177 and Regulation 18 with KAM previews and draft opinion.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 700 + 701
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                UDIN
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Audit Cmte
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="20" y="15" width="80" height="12" fill="#14365F"/>
        <text x="60" y="24" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">AUDIT REPORT</text>
        <line x1="30" y1="36" x2="90" y2="36" stroke="#F5A623" stroke-width="2"/>
        <text x="60" y="44" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 701 KAM</text>
        <line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <text x="60" y="72" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UDIN SIGNED</text>
                </svg>
            </div>
            <span class="illustration-label">Reported</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Filings: AOC-4 XBRL, MGT-7, NFRA-2</h3>
        <p class="step-description">Audited annual results filed with stock exchanges within 60 days of FY end per Regulation 33. Form AOC-4 XBRL within 30 days of AGM under Section 137(1). Form MGT-7 within 60 days under Section 92. Form NFRA-2 annual return by audit firm by 30 November. Engagement file archival under NFRA inspection standards. Statement of Impact of Audit Qualifications if applicable.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                AOC-4 XBRL
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                MGT-7
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                NFRA-2 by 30 Nov
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M30 50 L48 65 L92 30" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">AOC-4 + MGT-7 + NFRA-2</text>
                </svg>
            </div>
            <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">Documents Checklist for Listed Company Audit</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to conduct listed company audit. Materials are categorised by audit phase - entity master, books and ledgers, board governance, subsidiary and related party, and statutory filings.</p>
<h3>Entity Master and Listing Documents</h3>
<ul>
<li><strong>Entity master:</strong> Certificate of Incorporation, CIN, PAN, GSTIN; listed shares ISIN; CIN listing certificate from BSE/NSE; MoA, AoA, SHA, ESOP scheme documents</li>
<li><strong>Stock exchange filings:</strong> Quarterly results filings, BRSR (top 1000 listed cos), shareholding pattern, material event disclosures under Regulation 30</li>
<li><strong>ICAI and NFRA:</strong> Engagement letter, independence representations, NFRA registration certificate, prior years audit working papers index</li>
</ul>
<h3>Books, Ledgers and Treasury</h3>
<ul>
<li><strong>Books and ledgers:</strong> General ledger, trial balance, fixed asset register, inventory register, debtors and creditors aging for the full FY</li>
<li><strong>Bank and treasury:</strong> Bank statements for all accounts, BRS at year-end, treasury and derivative confirmations, mutual fund statements</li>
<li><strong>Statutory dues:</strong> GST returns (GSTR-1, GSTR-3B, GSTR-9), TDS returns (Form 24Q, 26Q), Income Tax filings (ITR-6, Form 3CD), ESI/PF challans, professional tax returns</li>
</ul>
<h3>Board Governance and Subsidiary</h3>
<ul>
<li><strong>Board governance:</strong> Board minutes, Audit Committee minutes, Nomination and Remuneration Committee minutes for the FY; corporate governance certificate</li>
<li><strong>Subsidiary information:</strong> Subsidiary audit reports, subsidiary auditor independence confirmations, component materiality calculations under SA 600</li>
<li><strong>Related party transactions:</strong> Section 188 disclosures, Form AOC-2, Audit Committee approvals for RPTs under Regulation 23</li>
<li><strong>Risk management:</strong> Risk Management Policy and Committee minutes (Regulation 21 for top 1000 listed entities); Internal Financial Controls documentation</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Listed Company Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Quarterly Cadence Pressure - 45 Days Is Short</td><td>Limited review of standalone and consolidated quarterly results within 45 days of quarter end leaves minimal buffer for closing-cycle delays, subsidiary returns, and Audit Committee review. Missing the 45-day deadline triggers stock exchange non-compliance recording, fines under SOP, and potential SEBI adjudication.</td><td>Patron locks in a calendarised audit plan at engagement start with subsidiary auditor coordination, pre-quarter trial balance reviews, and Audit Committee scheduling so the 45-day deadline is met without quality compromise. Limited Review Reports drafted in parallel with the closing.</td></tr>
<tr><td>SEBI LODR Third Amendment 2024 Enhanced Auditor Disclosures</td><td>The 12 December 2024 amendment introduced detailed disclosures around proposed auditor appointment - past association, ICAI/NFRA/SEBI/MCA orders, pending proceedings, fee rationale, non-audit fees percentage, and remuneration from group companies. Many companies are unprepared at the AGM appointment stage.</td><td>Patron prepares a pre-appointment disclosure pack template aligned to the Third Amendment, with sign-offs from the partner and engagement quality control reviewer ready for Audit Committee tabling. The pack covers all 11 disclosure heads per the SEBI April 2025 FAQs.</td></tr>
<tr><td>SA 701 Key Audit Matters Drafting</td><td>KAM identification, communication with Audit Committee, and drafting in the auditor report are nuanced exercises. Inadequate KAM disclosures attract NFRA inspection scrutiny - the NFRA inspection reports published on its website routinely flag KAM quality findings against listed entity auditors.</td><td>Patron uses a structured KAM identification working paper tied to Significant Risk register under SA 315. KAM drafts circulated to Audit Committee for review at pre-finalisation stage. KAM language calibrated to SA 701 illustrative wording with company-specific facts.</td></tr>
<tr><td>Regulation 33(8) Subsidiary Auditor Coordination</td><td>The parent auditor review obligation under Regulation 33(8) for all subsidiaries consolidated under AS 21 or Ind AS 110 requires formal SA 600 procedures and component auditor coordination - which can break down where subsidiary auditors are smaller firms or located in tier-2 cities. Foreign subsidiary coordination adds further complexity.</td><td>Patron uses a standardised component auditor questionnaire pack, audit instructions, review timetables, and escalation protocols built into the engagement plan. Review of subsidiary audit working papers conducted in parallel with the parent audit, not sequentially.</td></tr>
<tr><td>NFRA Inspection Readiness</td><td>NFRA publishes inspection reports of listed-entity auditors on its website. Common findings include inadequate KAM working papers, weak SA 540 estimates documentation, insufficient SA 600 component auditor reliance documentation, and gaps in Section 143(12) fraud reporting trail.</td><td>Patron audit working papers structured to withstand NFRA review under Section 132 powers. Engagement quality control review under SQC 1 with second partner sign-off on KAM, significant estimates, and Section 143(12) fraud reporting decisions before report sign-off.</td></tr>
<tr><td>Section 143(12) Fraud Reporting Threshold</td><td>The Rs 1 crore threshold separates Central Government reporting from Audit Committee reporting. Where multiple incidents aggregate above Rs 1 crore the reporting calculation is contentious. Late or incorrect Central Government reporting can trigger NFRA disciplinary action against the auditor and Section 147 penalty on the company.</td><td>Patron applies the Section 143(12) decision tree at each substantive procedure step with running aggregation. Audit Committee briefed on borderline cases for governance input. Central Government reporting filings drafted with engagement quality control review.</td></tr>


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
            <h2 class="section-title">Listed Company Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 5,00,000 per year (Exl GST and Govt. Charges)</td></tr>
<tr><td>BSE SME or NSE Emerge listed, no subsidiaries</td><td>Starting Rs 5,00,000 per year - Quarterly limited reviews + annual audit + CARO + IFC + KAM + ADT-1 + NFRA-2 + AOC-4 XBRL</td></tr>
<tr><td>Mainboard listed, 1 to 3 subsidiaries, Indian operations only</td><td>Rs 10,00,000 to Rs 25,00,000 per year - All above + consolidated audit + Regulation 33(8) subsidiary review + segment reporting + RPT framework</td></tr>
<tr><td>Mainboard listed, multiple subsidiaries, complex segments</td><td>Rs 25,00,000 to Rs 50,00,000 per year - All above + foreign subsidiary coordination + complex Ind AS treatment + BRSR Core assurance</td></tr>
<tr><td>IPO-bound or recently IPO-d company</td><td>Custom quote - Pre-IPO audit + restated financials + RHP audit support + post-IPO transition to listed regime</td></tr>
<tr><td>Government and ROC Fees</td><td>AOC-4 XBRL government fee scales by authorised share capital - typically Rs 600 to Rs 2,000. MGT-7 similar. NFRA Form NFRA-2 is no-fee. Late filing additional fee on AOC-4 is Rs 100 per day per form with no upper cap.</td></tr>
<tr><td>Section 147 Penalty Exposure</td><td>Penalty for audit default ranges from Rs 25,000 to Rs 5,00,000 on the company plus officer fines of Rs 10,000 to Rs 1,00,000 and potential imprisonment up to 1 year</td></tr>
<tr><td>NFRA Penalty Exposure</td><td>NFRA penalties up to Rs 10 lakh on individual CAs and 10 times the audit fee on firms, plus debarment of up to 10 years - prevented by NFRA-aware audit conduct</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Listed Company Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20listed%20company%20audit%20cadence%20plan%2C%20KAM%20approach%2C%20and%20fixed-fee%20quote." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Listed Company Audit Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Auditor appointment at AGM and ADT-1 filing</td><td>ADT-1 within 15 days of AGM appointment under Section 139(1)</td></tr>
<tr><td>Form NFRA-1 first-time intimation</td><td>Within 30 days of auditor appointment by listed PIE under NFRA Rules 2018</td></tr>
<tr><td>Q1 limited review (April to June quarter)</td><td>Within 45 days of 30 June (by 14 August) under SEBI LODR Regulation 33</td></tr>
<tr><td>Q2 limited review (July to September quarter)</td><td>Within 45 days of 30 September (by 14 November) under SEBI LODR Regulation 33</td></tr>
<tr><td>Q3 limited review (October to December quarter)</td><td>Within 45 days of 31 December (by 14 February) under SEBI LODR Regulation 33</td></tr>
<tr><td>Q4 + annual audited results</td><td>Within 60 days of 31 March (by 30 May) under SEBI LODR Regulation 33</td></tr>
<tr><td>AGM under Section 96</td><td>Within 6 months of FY close (by 30 September for 31 March FY end)</td></tr>
<tr><td>Form AOC-4 XBRL</td><td>Within 30 days of AGM under Section 137(1)</td></tr>
<tr><td>Form MGT-7</td><td>Within 60 days of AGM under Section 92</td></tr>
<tr><td>Form NFRA-2 annual return by audit firm</td><td>By 30 November annually for the preceding FY</td></tr>
<tr><td>BRSR (top 1000 listed cos)</td><td>By date specified by stock exchanges; typically with annual report</td></tr>
<tr><td>Statement of Impact of Audit Qualifications</td><td>If audit qualifications exist, filed with audited annual results</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Listed company audit calendars run on a rolling basis through the year.</strong> Patron locks in dates at engagement start so the listed entity, Audit Committee, and subsidiary auditors all align around the same milestones. Miss the 45-day quarterly deadline and the stock exchange records non-compliance; miss the 60-day annual deadline and the company faces SOP-based suspension of trading.</p>

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
            <h2 class="section-title">Why Choose Patron for Listed Company Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">NFRA Inspection Readiness</h3>
        <p class="feature-description">Audit working papers structured to withstand NFRA review under Section 132 powers. Engagement quality control review under SQC 1 with second partner sign-off on KAM, significant estimates, and Section 143(12) fraud reporting decisions before report sign-off.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">SEBI LODR Compliance End-to-End</h3>
        <p class="feature-description">Quarterly cadence, Regulation 33 results filings, Regulation 18 audit committee reporting all aligned. SEBI LODR Third Amendment 2024 enhanced disclosure pack ready for AGM appointment.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Section 147 Penalty Avoidance</h3>
        <p class="feature-description">Rs 25,000 to Rs 5,00,000 on the company plus officer fines and potential imprisonment - prevented by timely and proper audit. NFRA penalties up to Rs 10 lakh on individual CAs and 10 times audit fee on firms also avoided.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">Section 143(12) Fraud Reporting Accuracy</h3>
        <p class="feature-description">Correct reporting decision (Central Government vs Audit Committee) based on Rs 1 crore threshold. Decision tree applied at each substantive procedure step with running aggregation across incidents.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">KAM Quality Aligned to Significant Risks</h3>
        <p class="feature-description">SA 701 disclosures aligned to Significant Risks under SA 315. Protects against NFRA quality findings. KAM drafts circulated to Audit Committee for review at pre-finalisation stage.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">Audit Committee Confidence</h3>
        <p class="feature-description">Pre-meeting briefing notes, KAM previews, draft opinions shared in advance for governed discussion. SEBI LODR Third Amendment disclosure pack ready. Section 188 RPT framework and Regulation 23 approvals tracked.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">4-Office Pan-India Network</h3>
        <p class="feature-description">Pune, Mumbai, Delhi, and Gurugram offices serve listed clients on BSE mainboard, BSE SME, and NSE Emerge platforms with senior partner involvement on every cycle. Subsidiary auditor coordination across tier-1 and tier-2 cities.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Stock Price Stability Through Clean Filings</h3>
        <p class="feature-description">Clean audit results filed on time prevent stock price volatility caused by late or qualified results. Audit Committee minutes and audit qualifications language calibrated to maintain analyst confidence.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Listed Company CFOs and Audit Committees</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "Patron took over our statutory audit in the second year after our SME platform listing. They restructured the quarterly review cadence so we met the 45-day deadline cleanly for the first time, drafted KAM language that the Audit Committee was comfortable with, and filed NFRA-2 well within the deadline. NFRA inspection findings: nil."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- CFO, BSE SME-listed Services Company</footer>
</blockquote>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "We were heading into IPO with our prior auditor working papers in mixed shape. Patron pre-IPO audit team re-did three years of restated financials to Ind AS standards, supported the merchant banker through DRHP queries, and transitioned us cleanly to the listed-company audit regime from FY post-listing. Listed in 7 months."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Founder, Mainboard-listed Manufacturing Company</footer>
</blockquote>
<p style="margin-top:16px;"><strong>Outcome proof (anonymised):</strong> A Mumbai-headquartered group listed on BSE mainboard with 4 Indian subsidiaries had a Big-4 audit firm for the prior 9 years. Mandatory rotation under Section 139(2) required transition. Patron took over as the new auditor after Audit Committee recommendation; ran the first-cycle audit with full SA 701 KAM, CARO 2020 across 21 clauses, IFC opinion, Regulation 33(8) subsidiary coordination across 4 subs, and delivered the audited annual results within 58 days of FY end. NFRA-2 filed by 30 November. No qualifications, no adjudications, no quality review findings.</p>
<p style="margin-top:16px;"><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves listed companies across BSE and NSE mainboard, BSE SME, and NSE Emerge platforms with senior partner involvement on every audit cycle.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Listed vs Unlisted Company Statutory Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Audit Element</th><th>Listed Company</th><th>Unlisted Private Limited</th></tr></thead>
                    <tbody>
                        
<tr><td>Statutory audit under Section 139</td><td>Mandatory; NFRA-registered auditor required</td><td>Mandatory; any practicing CA</td></tr>
<tr><td>Mandatory rotation Section 139(2)</td><td>Individual 5 years, firm 10 years; 5-year cooling-off</td><td>Applies only above Rs 50 cr paid-up; small co exempt</td></tr>
<tr><td>Quarterly limited review Regulation 33</td><td>Mandatory Q1, Q2, Q3 within 45 days</td><td>Not applicable</td></tr>
<tr><td>Q4 audit and annual results filing</td><td>Within 60 days of FY end to stock exchange</td><td>Not applicable; AGM-based filing under Companies Act</td></tr>
<tr><td>Key Audit Matters SA 701</td><td>Mandatory in auditor report</td><td>Voluntary; rarely included</td></tr>
<tr><td>CARO 2020 reporting (21 clauses)</td><td>Full applicability</td><td>Exempt for small companies; threshold-based for others</td></tr>
<tr><td>IFC reporting Section 143(3)(i)</td><td>Mandatory</td><td>Exempt for small co via G.S.R. 583(E) if no AOC-4/MGT-7 default</td></tr>
<tr><td>NFRA jurisdiction</td><td>Yes - PIE under NFRA Rules 2018</td><td>Only if thresholds breached (large unlisted PIE)</td></tr>
<tr><td>Form NFRA-1 and NFRA-2</td><td>Mandatory for auditor</td><td>Only for large unlisted PIE auditors</td></tr>
<tr><td>Audit Committee Section 177 + LODR 18</td><td>Mandatory; 2/3 independent</td><td>Mandatory above Section 177 thresholds; private below threshold exempt</td></tr>
<tr><td>BRSR (top 1000 cos)</td><td>Mandatory for top 1000 listed</td><td>Not applicable</td></tr>
<tr><td>Typical audit fee range</td><td>Rs 5,00,000 to Rs 50,00,000+</td><td>Rs 12,000 to Rs 5,00,000</td></tr>


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
                
                
<p>Listed company audit pairs naturally with several Patron service areas - covering parent audit obligations, subsidiary audit, secretarial audit, tax audit, and the auditor lifecycle (appointment, rotation, change).</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit (Parent Hub):</strong></a> Parent statutory audit service across all company types with full methodology and applicability matrix</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138):</strong></a> Listed companies subject to lower thresholds; Internal Financial Controls (Section 143(3)(i)) testing complements internal audit framework</li>
<li><a href="/secretarial-audit"><strong>Secretarial Audit (Section 204):</strong></a> Mandatory for every listed company - Form MR-3 by Practicing Company Secretary; complements statutory audit governance findings</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> Applies independently to listed cos above Rs 1 crore turnover (Rs 10 crore digital); coordinated with statutory audit to share workpapers</li>
<li><a href="/appointment-of-auditor"><strong>Appointment of Auditor:</strong></a> ADT-1 + SEBI LODR Third Amendment 2024 disclosure pack for AGM appointment</li>
<li><a href="/change-of-auditor"><strong>Change of Auditor:</strong></a> Mandatory rotation transition handling under Section 139(2); ADT-3 for casual vacancy; 5-year cooling-off compliance</li>
<li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance:</strong></a> Pre-IPO compliance bridge from private to listed regime; restated financials; DRHP support</li>
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
                
                
<p>Listed company audit draws legal authority from a four-regulator framework: Companies Act 2013 and Rules thereunder, SEBI LODR Regulations 2015, NFRA Rules 2018, and ICAI Standards on Auditing, as in force.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Provision</th><th>What It Says</th></tr></thead>
<tbody>
<tr><td>Section 132 Companies Act 2013 + NFRA Rules 2018</td><td>Establishes the National Financial Reporting Authority; auditors of listed entities and large unlisted PIEs are under NFRA jurisdiction for inspection, investigation, and disciplinary action</td></tr>
<tr><td>Section 139(1) Companies Act 2013</td><td>Audit appointment at AGM for 5-year terms with shareholder approval</td></tr>
<tr><td>Section 139(2) + Rule 5 Companies (Audit and Auditors) Rules 2014</td><td>Mandatory rotation - individual auditor 5 years, audit firm 10 years; 5-year cooling-off period applies</td></tr>
<tr><td>Section 141 Companies Act 2013</td><td>Auditor eligibility and disqualification - no business relationship, no substantial interest, fee dependency cap</td></tr>
<tr><td>Section 143(3)(i) Companies Act 2013</td><td>Mandatory reporting on adequacy and operating effectiveness of Internal Financial Controls</td></tr>
<tr><td>Section 143(11) + CARO 2020</td><td>Companies (Auditor Report) Order 2020 - 21 reporting clauses; full applicability to listed companies</td></tr>
<tr><td>Section 143(12) Companies Act 2013</td><td>Mandatory fraud reporting - above Rs 1 crore to Central Government within prescribed time; below Rs 1 crore to Audit Committee</td></tr>
<tr><td>Section 147 Companies Act 2013</td><td>Penalty for audit defaults - Rs 25,000 to Rs 5,00,000 on company; officer fines; imprisonment up to 1 year</td></tr>
<tr><td>Section 177 Companies Act 2013</td><td>Audit Committee mandatory for listed cos; minimum 3 members; majority independent; financially literate</td></tr>
<tr><td>SEBI LODR Regulation 18</td><td>Audit Committee composition for listed entities - reinforces and extends Section 177</td></tr>
<tr><td>SEBI LODR Regulation 33</td><td>Quarterly financial results filing - Q1 to Q3 within 45 days; Q4 + annual within 60 days</td></tr>
<tr><td>SEBI LODR Regulation 33(8)</td><td>Statutory auditor of listed entity must conduct limited review of audit of entities consolidated under AS 21 or Ind AS 110</td></tr>
<tr><td>SEBI LODR (Third Amendment) Regulations 2024 dated 12 December 2024</td><td>Enhanced auditor appointment disclosures - past association, regulatory orders, pending proceedings, fee rationale, non-audit fees percentage</td></tr>
<tr><td>SEBI Master Circular dated 11 July 2023</td><td>Consolidated compliance circular for SEBI LODR Regulations including Annexure 10 procedure for limited review of consolidated results</td></tr>
<tr><td>ICAI SA 700 (Revised), 701, 705, 706, 720</td><td>Forming opinion, Key Audit Matters, modifications, emphasis of matter, other information - applicable to listed cos</td></tr>
<tr><td>ICAI SRE 2410</td><td>Review of Interim Financial Information - for quarterly limited reviews under Regulation 33</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://nfra.gov.in/" target="_blank" rel="noopener">National Financial Reporting Authority (NFRA)</a> | <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">Securities and Exchange Board of India (SEBI)</a> | <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Listed Company Audit</h2>
                    <p class="faq-expanded__lead">Common questions on statutory audit timelines, mandatory auditor rotation, SEBI LODR Regulation 33, Key Audit Matters under SA 701, NFRA jurisdiction, quarterly limited reviews, audit committee composition, and penalties for audit defaults.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Listed Company Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the statutory audit timeline for a listed company in India?</h3>
                        <div class="faq-expanded__a"><p>A listed company in India follows a rolling quarterly audit cadence under SEBI LODR Regulation 33. Limited reviews for Q1, Q2, and Q3 must be completed and the results filed with stock exchanges within 45 days of each quarter end - i.e. 14 August, 14 November, and 14 February respectively for a 31 March year-end. The Q4 along with full-year audited results must be filed within 60 days of FY end (by 30 May). Form AOC-4 XBRL is filed within 30 days of AGM and Form MGT-7 within 60 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is auditor rotation mandatory for listed companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 139(2) of the Companies Act 2013 read with Rule 5 of the Companies (Audit and Auditors) Rules 2014, an individual auditor cannot serve a listed company for more than 5 consecutive years, and an audit firm cannot serve for more than 10 consecutive years. A 5-year cooling-off period applies before the same auditor can be reappointed. The rule applies to every listed company regardless of size. This is materially stricter than the rule for unlisted private companies, where rotation applies only above Rs 50 crore paid-up capital.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is SEBI LODR Regulation 33?</h3>
                        <div class="faq-expanded__a"><p>SEBI Listing Obligations and Disclosure Requirements Regulations 2015, Regulation 33, governs the filing of financial results by listed entities with stock exchanges. Regulation 33(3) prescribes the timelines - quarterly limited-reviewed results within 45 days of quarter end and audited annual results within 60 days of FY end. Regulation 33(8) extends the parent auditor responsibility to conducting limited review of audit of entities consolidated under AS 21 or Ind AS 110, per the SEBI Master Circular dated 11 July 2023.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are Key Audit Matters (KAM) under SA 701?</h3>
                        <div class="faq-expanded__a"><p>Key Audit Matters are those matters that, in the auditor professional judgement, were of most significance in the audit of the financial statements of the current period. Under ICAI Standard on Auditing 701, KAMs are mandatory in the audit report of every listed entity in India. KAMs are selected from matters communicated with those charged with governance and typically relate to significant risks, areas of management judgement, or significant events during the period. The KAM section is a separate part of the audit report under SA 700 (Revised).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does NFRA regulate auditors of listed companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 132 of the Companies Act 2013 read with the National Financial Reporting Authority Rules 2018, listed companies are Public Interest Entities. Auditors of PIEs are subject to NFRA jurisdiction including registration, inspection, investigation, and disciplinary action. Auditors must file Form NFRA-1 first-time intimation when accepting a PIE audit, and Form NFRA-2 annual return by 30 November each year. NFRA may impose penalties up to Rs 10 lakh on individual CAs and 10 times the audit fee on firms, plus debarment of up to 10 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Are quarterly results of listed companies audited?</h3>
                        <div class="faq-expanded__a"><p>Q1, Q2, and Q3 quarterly results undergo a Limited Review under ICAI Standard on Review Engagements SRE 2410, which is less intensive than a full audit. The auditor expresses a conclusion of negative assurance - whether anything has come to attention indicating that the results are not prepared in accordance with the applicable financial reporting framework. Q4 results, however, are part of the full-year audit and are therefore audited under Standards on Auditing. The listed entity may choose to subject the entire annual cycle to audit rather than limited review for the standalone.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the audit committee composition for a listed company?</h3>
                        <div class="faq-expanded__a"><p>Under Section 177 of the Companies Act 2013 read with SEBI LODR Regulation 18, every listed company must have an Audit Committee with at least 3 directors as members, two-thirds of whom must be independent directors. All members must be financially literate and at least one member must have accounting or related financial management expertise. The Audit Committee recommends auditor appointment, reviews the auditor findings, approves related party transactions under Regulation 23, and oversees vigil mechanism and internal financial controls.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the penalty for audit defaults in a listed company?</h3>
                        <div class="faq-expanded__a"><p>Under Section 147 of the Companies Act 2013, audit defaults attract penalty of Rs 25,000 to Rs 5,00,000 on the company plus officer fines of Rs 10,000 to Rs 1,00,000 and potential imprisonment up to 1 year. In addition, listed companies face SEBI adjudication under the SEBI Act 1992 for LODR violations, stock exchange action including suspension of trading under SEBI Standard Operating Procedure dated 22 January 2020, and NFRA disciplinary action against the auditor with penalties up to Rs 10 lakh on individuals and 10 times the audit fee on firms.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Quarterly review deadline?</strong> Within 45 days of quarter end under Regulation 33 (Q1-Q3); 60 days for Q4 + annual.</p>
<p><strong>Auditor rotation rule?</strong> Individual 5 years, firm 10 years; 5-year cooling-off (Section 139(2) + Rule 5).</p>
<p><strong>KAM mandatory?</strong> Yes - SA 701 mandates KAM disclosure for every listed entity audit report.</p>
<p><strong>NFRA filing?</strong> Form NFRA-1 first-time and Form NFRA-2 annually by 30 November.</p>
<p><strong>Fraud reporting threshold?</strong> Above Rs 1 crore to Central Government; below to Audit Committee (Section 143(12)).</p>
<p><strong>CARO 2020?</strong> Full 21 clauses apply; no small co exemption.</p>
<p><strong>IFC opinion?</strong> Mandatory under Section 143(3)(i); no exemption.</p>
<p><strong>Patron starting fee?</strong> Rs 5,00,000 per year for SME-platform listed cos; higher for mainboard and consolidated audits.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Quarterly Cadence Is Unforgiving. Lock In the Auditor Early.</h2>
            <div class="content-text">
                
                
<p>Listed company audit is unforgiving on time. Miss the 45-day quarterly deadline and the stock exchange records non-compliance; miss the 60-day annual deadline and the company faces SOP-based suspension of trading; mis-state KAM or skip IFC and NFRA inspection lands.</p>
<p><strong>Auditor appointment requires Audit Committee disclosure aligned to the SEBI LODR Third Amendment 2024 - which most companies are unprepared for.</strong> Engage Patron well before the auditor appointment AGM, the start of any quarter, or the FY-end close to lock in the cadence.</p>
<p style="margin-top:16px;"><strong>Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company plus officer fines and potential imprisonment. NFRA penalties up to Rs 10 lakh on individual CAs and 10 times the audit fee on firms. </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20listed%20company%20audit%20quote." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA scoping call and fixed-fee quote within 48 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Quad-Regulator Framework. NFRA-Empanelled. One CA Partner.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Statutory audit of an Indian listed company is the most demanding audit engagement in the country - layered across the Companies Act 2013, SEBI LODR Regulations 2015, NFRA Rules 2018, and the full set of ICAI Standards on Auditing. The quarterly cadence under Regulation 33, the mandatory rotation under Section 139(2), the Key Audit Matters under SA 701, the IFC opinion under Section 143(3)(i), the CARO 2020 21-clause report, the fraud reporting under Section 143(12), and the NFRA filings together define a multi-track engagement that runs continuously through the FY.</p>
<p style="color:#FFFFFF;margin-top:14px;">Patron Accounting delivers this end to end with NFRA-registered partners, calendarised quarterly cadence, KAM working papers built to NFRA inspection standards, and Audit Committee briefings calibrated to listed-entity governance norms. Our offices in Pune, Mumbai, Delhi, and Gurugram serve listed clients on BSE mainboard, BSE SME, and NSE Emerge platforms with senior partner involvement on every cycle.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20listed%20company%20audit%20cadence%20plan%2C%20KAM%20approach%2C%20and%20fixed-fee%20quote." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Listed Company Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron four-office network services listed companies on BSE and NSE mainboard, BSE SME, and NSE Emerge platforms with senior partner involvement on every audit cycle - including subsidiary auditor coordination across tier-1 and tier-2 cities.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">Senior partner involvement on every listed company audit cycle - quarterly reviews, annual audit, KAM, IFC, NFRA-2 - from our four offices.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Parent audit hub plus auditor lifecycle, secretarial audit, internal audit, and pre-IPO compliance bridge</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Hub)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"> 14 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2 - SEBI LODR amendments frequent; NFRA inspection reports rolling). Triggers for earlier review include SEBI LODR amendment, NFRA Rules update, ICAI Standards on Auditing revision, Companies Act amendment affecting Sections 132/139/143/177, CARO 2020 update, and SEBI Master Circular revisions.</p>
        </div>
    </div>
</section>



</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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