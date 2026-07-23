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
    <title>Audit for Manufacturing Companies</title>
    <meta name="description" content="CA-led statutory audit for manufacturing companies in India - SA 501 inventory verification, Section 148 cost records, CARO 3(ii). Fees from Rs 60,000.">
    <link rel="canonical" href="/statutory-audit-for-manufacturing-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Audit for Manufacturing Companies 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for manufacturing companies in India - SA 501 inventory verification, Section 148 cost records, CARO 3(ii). Fees from Rs 60,000.">
    <meta property="og:url" content="/statutory-audit-for-manufacturing-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-manufacturing-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit for Manufacturing Companies 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for manufacturing companies in India - SA 501 inventory verification, Section 148 cost records, CARO 3(ii). Fees from Rs 60,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-manufacturing-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/statutory-audit-for-manufacturing-companies#breadcrumb",
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
              "name": "For Manufacturing Companies",
              "item": "/statutory-audit-for-manufacturing-companies"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/statutory-audit-for-manufacturing-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is statutory audit mandatory for every manufacturing company in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of turnover or profit. A loss-making first-year manufacturing startup and a Rs 500 crore textile company are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment."
              }
            },
            {
              "@type": "Question",
              "name": "What is SA 501 and why does it matter for manufacturers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SA 501 is the ICAI Standard on Auditing titled Audit Evidence - Specific Considerations for Selected Items. It requires the statutory auditor to attend physical inventory counting where inventory is material to the financial statements. For manufacturers, inventory is almost always material - the auditor must therefore plan plant attendance at year-end and document alternative procedures if attendance is not feasible. NFRA has penalised CAs for skipping this step in manufacturing audits."
              }
            },
            {
              "@type": "Question",
              "name": "Which manufacturing companies must maintain cost records under Section 148?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Rule 3 of the Companies (Cost Records and Audit) Rules, 2014, manufacturing companies with overall turnover above Rs 35 crore in the immediately preceding financial year engaged in production of goods listed in Table A (regulated - telecom, electricity, petroleum, gas, drugs and pharma, fertilisers, sugar) or Table B (non-regulated, covering most other industries) must maintain cost records in Form CRA-1 for every plant and branch. Micro and small enterprises are excluded."
              }
            },
            {
              "@type": "Question",
              "name": "What is CARO 2020 clause 3(ii) and the 10 percent discrepancy threshold?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CARO 2020 clause 3(ii)(a) requires the auditor to report on physical verification of inventory by management and disclose any discrepancies of 10 percent or more in the aggregate for each class of inventory between physical count and books. The threshold is applied to value (not quantity). Clause 3(ii)(b) additionally requires reconciliation of quarterly bank stock statements with books for working-capital limits above Rs 5 crore from banks or financial institutions on the basis of current-asset security."
              }
            },
            {
              "@type": "Question",
              "name": "Is cost audit different from statutory audit for manufacturers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Statutory audit under Section 143 examines the financial statements as a whole and is conducted by a practicing Chartered Accountant. Cost audit under Section 148 examines only the cost records and is conducted by a Cost Accountant (member of ICMAI). A statutory auditor cannot conduct the cost audit of the same company (per the proviso to Section 148(3)). Both audits may apply simultaneously to the same manufacturer above the thresholds."
              }
            },
            {
              "@type": "Question",
              "name": "How does the statutory auditor verify PP and E and title deeds in factory audits?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under CARO clause 3(i), the auditor verifies proper records of PP and E and intangible assets with quantitative details, physical verification at reasonable intervals, title deeds for all immovable property held in the company name, revaluation disclosures if performed by a registered valuer with change above 10 percent, and any proceedings under the Prohibition of Benami Property Transactions Act, 1988. For industrial plots allotted by MIDC, KIADB and similar state corporations, the original allotment letter and subsequent mutation are examined."
              }
            },
            {
              "@type": "Question",
              "name": "What GST records does the statutory auditor reconcile for a manufacturer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The auditor reconciles GSTR-1 (outward supplies), GSTR-3B (summary returns), GSTR-9 (annual return) and GSTR-9C (reconciliation statement) with the books of account. For manufacturers using outside processors, ITC-04 returns are cross-checked. CARO clause 3(vii) requires reporting on whether undisputed statutory dues including GST were regularly deposited and any ageing over six months disclosed. Pre-July 2017 excise and VAT closing balances carried forward as transitional GST credit are also verified for consistency with TRAN-1 and TRAN-2 filings."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for non-appointment of statutory auditor in a manufacturing company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 147 of the Companies Act, 2013, a company that fails to appoint a statutory auditor is liable to a penalty of Rs 25,000 to Rs 5,00,000, and every officer in default is liable to a further penalty of Rs 10,000 to Rs 1,00,000. Late filing of AOC-4 with the audit report attracts additional fees of Rs 100 per day under the MCA fee schedule. Section 450 attaches a further Rs 10,000 plus Rs 1,000 per day for continuing default where no specific penalty is provided."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/statutory-audit-for-manufacturing-companies#service",
          "name": "Statutory Audit for Manufacturing Companies",
          "url": "/statutory-audit-for-manufacturing-companies",
          "serviceType": "Statutory Audit (Manufacturing - Auto Components, Pharma, Textile, FMCG, Chemicals)",
          "description": "CA-led statutory audit for Indian manufacturing companies under Section 143 of the Companies Act, 2013, covering SA 501 physical inventory verification, Section 148 cost records overlay, CARO 2020 clause 3(ii) bank stock reconciliation, PP and E title deed verification, and GSTR-9 / GSTR-9C reconciliation.",
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
              "name": "Manufacturing in India",
              "sameAs": "https://en.wikipedia.org/wiki/Manufacturing_in_India"
            },
            {
              "@type": "Thing",
              "name": "Companies Act 2013",
              "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
            },
            {
              "@type": "Thing",
              "name": "Auditing",
              "sameAs": "https://en.wikipedia.org/wiki/Audit"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Manufacturing Statutory Audit Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "Manufacturer turnover under Rs 10 crore (single plant)",
                "priceCurrency": "INR",
                "price": "60000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Manufacturer turnover Rs 10 to 35 crore",
                "priceCurrency": "INR",
                "price": "125000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Manufacturer above Rs 35 crore (cost records overlay)",
                "priceCurrency": "INR",
                "price": "275000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Listed entity (KAM + IFC + CARO consolidation)",
                "priceCurrency": "INR",
                "price": "600000",
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
                        Statutory Audit for Manufacturing Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, stock register with raw material WIP and FG, fixed asset register, cost records (CRA-1), GSTR-9 / 9C reconciliation, factory title deeds, bank stock statements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 60,000 for manufacturers with turnover under Rs 10 crore; scales by inventory volume and plant count</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian manufacturing company (Pvt Ltd / Public / OPC) under Section 139, regardless of turnover. Cost records mandatory above Rs 35 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4 to 7 weeks fieldwork including SA 501 physical stock count at plant; ADT-1 within 15 days of AGM</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CA-led%20statutory%20audit%20for%20our%20manufacturing%20company.%20Please%20share%20a%20turnover-band%20fee%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Manufacturing Audit'/>
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
                                
<option value="statutory-audit-for-manufacturing-companies" selected>Statutory Audit (Manufacturing)</option>
<option value="statutory-audit">Statutory Audit (Hub)</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="internal-audit">Internal Audit</option>
<option value="stock-audit">Stock Audit</option>
<option value="gst-audit">GST Audit</option>
<option value="private-limited-company-compliance">Private Limited Company Compliance</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team attended SA 501 stock count across both our plants on the same date with parallel sub-teams - the rolling cut-off worked cleanly and the Rule 6 cost records reconciliation closed without any qualification.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Auto Component Finance Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Tier-1 Vendor, Chakan MIDC</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">CARO 3(ii) bank stock statement reconciliation was a recurring pain point for our working capital sanction renewals. Patron pre-audit review surfaced the variances 60 days before year-end so we cured them in time. Renewal cycle with the consortium banker went through without queries.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Pharma CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Process Pharma Manufacturer, Aurangabad</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Industrial plot title was registered in the original partnership firm name - converted to Pvt Ltd 8 years ago without mutation at the state portal. Patron flagged it in pre-audit diligence, guided us through SIPCOT mutation, and the title deed got cleaned before audit sign-off. CARO 3(i) qualification avoided.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">TS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Textile MD</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Spinning Unit, Coimbatore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">ITC-04 job-work reconciliation for our outside processors was always messy. Patron team cross-checked the GSTR-9C with the job-work returns, identified the gaps, and helped us file rectified ITC-04 for two quarters. GST audit clean for the full year.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">FMCG Plant Finance Lead</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Packaging Factory, IMT Manesar</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 148 cost records overlay with Rule 6 reconciliation was the new complexity for us after crossing Rs 35 crore turnover. Patron coordinated with the appointed cost auditor in parallel and the reconciliation closed cleanly. CARO 3(vi) reported without observations.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CH</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Chemicals Group Controller</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Specialty Chemicals, Ranjangaon</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We are a listed pharma manufacturer on NSE Emerge. SA 501 plant attendance, KAM under SA 701, IFC under Section 143(3)(i), and CARO across 21 clauses - Patron delivered the full listed-entity audit package on schedule. NFRA-2 filed by 30 November with the engagement file calibrated to inspection standards.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Biosimilar CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Biotech Manufacturer, Hyderabad</div>
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
                    <p>SA 501 inventory, Section 148 cost records, CARO 3(ii), PP and E title deeds, and GST / excise reconciliation - delivered under one CA partner from Rs 60,000.</p>
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
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
                <a href="#comparison-section" class="toc-btn">DIY vs Big-4 vs Patron</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit for Manufacturing: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Manufacturing Audit Services at a Glance</strong></p>
                    <p>Statutory audit for manufacturing companies in India is the annual independent examination of accounts under Section 143 of the Companies Act, 2013, with four sector-specific risk areas: SA 501 physical inventory verification, Section 148 cost records overlay, CARO 2020 clause 3(ii) bank stock statement reconciliation, and PP and E title deed verification plus excise / GST reconciliation. Patron manufacturing audit team handles each layer end-to-end.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr><tr><td>Applicable To</td><td>Every Indian manufacturing company (Pvt Ltd, Public, OPC) - no turnover threshold for statutory audit</td></tr><tr><td>Cost Records (Section 148)</td><td>Mandatory above Rs 35 crore turnover (preceding FY) in Table A or Table B industries</td></tr><tr><td>CARO 2020 Clause 3(ii)</td><td>Inventory physical verification + 10 percent discrepancy threshold + bank quarterly returns reconciliation if WC limit above Rs 5 crore</td></tr><tr><td>Cost Starting From</td><td>Rs 60,000 (Patron - manufacturer, turnover under Rs 10 crore)</td></tr><tr><td>Penalty (Section 147)</td><td>Rs 25,000 to Rs 5,00,000 on company; Rs 10,000 to Rs 1,00,000 on officers in default</td></tr><tr><td>Key Forms</td><td>ADT-1 (auditor appointment); AOC-4 (financials); CRA-1 to CRA-4 (cost records and audit)</td></tr></tbody></table></div><p>Manufacturing throws a different set of audit problems than services or trading. The auditor report must withstand scrutiny on physical inventory, cost records overlay, and bank stock-statement reconciliation - and ICAI National Financial Reporting Authority (NFRA) has formally penalised Engagement Partners for skipping SA 501 attendance at year-end stock counts in manufacturing audits.</p>
                <p>Whether the entity is a Tier-1 auto-component vendor, a process-pharma plant, a textile spinning unit or an FMCG packaging factory, the same four risk dimensions apply. Patron handles them as a single integrated engagement under one Chartered Accountant partner, eliminating the workpaper duplication that occurs when companies stitch the statutory audit, cost auditor coordination and stock audit across separate firms.</p>
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
                <h2 class="section-title">What Is Statutory Audit for Manufacturing Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Statutory audit for manufacturing companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering four manufacturing-specific risk areas: SA 501 inventory verification, Section 148 cost records, CARO 3(ii) bank stock reconciliation, and PP and E title deeds.</p>
<p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every company registered under the Companies Act regardless of turnover or profitability - a loss-making first-year auto component startup and a Rs 500 crore textile manufacturer are equally bound by it. The auditor opinion under SA 700 is filed with the Registrar of Companies as part of Form AOC-4 within 30 days of the AGM, and Form ADT-1 intimates the appointment within 15 days of the board resolution. Source: <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3)</a>.</p>
<p>Manufacturing audits sit at the intersection of three statutory frameworks: the Companies Act (statutory audit), the Companies (Cost Records and Audit) Rules, 2014 (cost records and cost audit) and the GST Act (annual return GSTR-9 and reconciliation statement GSTR-9C). The statutory auditor cross-checks all three.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Manufacturing Audit:</strong></p>
                    
<p><strong>SA 501:</strong> ICAI Standard on Auditing requiring the auditor to attend physical inventory count where inventory is material to the financial statements. NFRA has penalised Engagement Partners for failure to attend physical inventory count under SA 501 in manufacturing statutory audits.</p>
<p><strong>Cost Records (Section 148):</strong> Books of account showing utilisation of material, labour and other cost components - mandatory in Table A regulated and Table B non-regulated sectors above Rs 35 crore turnover.</p>
<p><strong>CARO Clause 3(ii):</strong> Auditor report on inventory physical verification, 10 percent discrepancy threshold (applied to value, not quantity), and reconciliation of quarterly bank stock statements with books for working-capital limits above Rs 5 crore.</p>
<p><strong>Form CRA-1:</strong> Form prescribing the format in which cost records must be maintained; CRA-2 appoints the cost auditor; CRA-3 is the cost audit report; CRA-4 is the MCA filing.</p>
<p><strong>Title Deed Register:</strong> CARO clause 3(i)(c) requires the auditor to verify that all immovable property disclosed in the balance sheet is held in the company name.</p>
<p><strong>Bank Stock Statement (DP Statement):</strong> Quarterly drawing-power statements filed with banks for working-capital sanctions; reconciled with books under CARO clause 3(ii)(b) where WC limit exceeds Rs 5 crore.</p>
<p><strong>Rule 6 Reconciliation:</strong> Reconciliation between cost records (CRA-1) and financial accounts under Rule 6 of the Companies (Cost Records and Audit) Rules, 2014. Critical to avoid CARO clause 3(vi) qualifications.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Manufacturing Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Framework</span>
                        <strong>Section 143 + Section 148 + CARO 3(ii)</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (Manufacturing)</h2>
            <div class="content-text">
                
                
<p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no turnover threshold and no exemption based on size. For manufacturers, the applicability layers stack as follows:</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Entity / Threshold</th><th>Audit Type</th><th>Mandatory From</th></tr></thead>
<tbody>
<tr><td>Every Indian manufacturing company (Pvt Ltd / Public / OPC)</td><td>Section 143 Statutory Audit</td><td>Date of incorporation (first auditor within 30 days)</td></tr>
<tr><td>LLP - turnover over Rs 40 lakh or contribution over Rs 25 lakh</td><td>Statutory audit under LLP Rule 24</td><td>When threshold crossed</td></tr>
<tr><td>Manufacturer with turnover over Rs 35 crore (Table A / B sectors)</td><td>Cost Records under Section 148 + Rule 3</td><td>Immediately preceding FY</td></tr>
<tr><td>Regulated sector (telecom, electricity, petroleum, gas, pharma, fertiliser, sugar)</td><td>Cost Audit - Rs 50 crore aggregate or Rs 25 crore product-wise</td><td>Rule 4(1)</td></tr>
<tr><td>Non-regulated sector manufacturers</td><td>Cost Audit - Rs 100 crore aggregate or Rs 35 crore product-wise</td><td>Rule 4(2)</td></tr>
<tr><td>Manufacturer with sanctioned WC limits over Rs 5 crore</td><td>CARO Clause 3(ii)(b) - quarterly bank stock recon</td><td>From the year limit crossed</td></tr>
<tr><td>Manufacturer with turnover over Rs 1 crore (or Rs 10 crore digital)</td><td>Tax Audit under Section 44AB</td><td>Same FY</td></tr>
</tbody>
</table>
</div>
<p>CARO 2020 itself applies to all manufacturers except micro / small companies and small private companies meeting all three thresholds: paid-up capital and reserves under Rs 1 crore, borrowings under Rs 1 crore, and revenue under Rs 10 crore (Schedule III definition). For practical purposes, any manufacturer with bank borrowings or revenues above these thresholds is fully in scope. Listed manufacturing entities additionally fall under NFRA jurisdiction (Public Interest Entity under NFRA Rules 2018) with Form NFRA-1 first-time intimation and Form NFRA-2 annual return obligations.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Manufacturing Audit Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act audit covering inventory, PP and E, related-party transactions, going concern and CARO 2020 21-clause annexure. SA 700 / 705 reporting; Ind AS or AS framework as applicable.</td></tr>
<tr><td>SA 501 Physical Inventory Verification</td><td>Patron CA partner attends year-end stock count at plant; reviews count sheets, cut-off documents (GRN / GDN around 31 March), slow-moving analysis, and ABC categorisation; documents alternative procedures where year-end attendance is not feasible. Skipping this step is the precise SA 501 violation NFRA has penalised CAs for.</td></tr>
<tr><td>Section 148 Cost Records and Cost Auditor Coordination</td><td>Verification of CRA-1 cost records, coordination with appointed cost auditor (Cost Accountant under ICMAI), Rule 6 reconciliation between cost records and financial accounts. CARO clause 3(vi) verification.</td></tr>
<tr><td>CARO Clause 3(ii) Working Capital Reconciliation</td><td>Quarterly bank stock statements (DP statements) reconciled to ERP / general ledger for WC limits above Rs 5 crore; variance investigation; reporting per CARO format. 10 percent discrepancy threshold testing on inventory by value.</td></tr>
<tr><td>PP and E Title Deed Verification (CARO 3(i))</td><td>Confirmation that all immovable property - factory land, plant buildings, godowns - is held in the company name; revaluation by registered valuer disclosure under Rule 8 of Companies (Accounts) Rules. MIDC / KIADB / GIDC industrial plot mutation verified.</td></tr>
<tr><td>Excise Transition and GST Reconciliation</td><td>Closing pre-GST excise / VAT balances reconciled with GST opening; GSTR-9 and 9C reconciliation; ITC-04 job-work return cross-check for manufacturers using outside processors; TRAN-1 and TRAN-2 carry-forward consistency.</td></tr>


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
            <h2 class="section-title">Our 6-Step Manufacturing Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron follows a structured 6-step process tailored to the manufacturing risk profile - SA 501 plant attendance, Section 148 cost records overlay, CARO 3(ii) bank stock reconciliation, PP and E title deeds, and GST / excise reconciliation, all under one CA partner.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement and Industry-Specific Risk Assessment</h3>
        <p class="step-description">Patron issues engagement letter under SA 210, obtains independence and non-disqualification certificate under Section 141 of the Companies Act, 2013, and conducts initial risk profiling covering production process, inventory layers (raw material, WIP, finished goods, consumables), plant locations, related-party OEM relationships, working-capital sanction status and cost records applicability under Section 148.</p>
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
                Sec 141 check
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Risk profile
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
        <rect x="25" y="38" width="14" height="14" rx="2" fill="#25D366"/>
        <text x="32" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">RM</text>
        <rect x="42" y="38" width="14" height="14" rx="2" fill="#F5A623"/>
        <text x="49" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">WIP</text>
        <rect x="59" y="38" width="14" height="14" rx="2" fill="#E8712C"/>
        <text x="66" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FG</text>
        <rect x="76" y="38" width="20" height="14" rx="2" fill="#14365F"/>
        <text x="86" y="48" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">STORES</text>
        <text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INVENTORY LAYERS</text>
                </svg>
            </div>
            <span class="illustration-label">Scoped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">SA 501 Physical Inventory Count Attendance</h3>
        <p class="step-description">Year-end physical stock count attended by audit partner or senior team. The auditor observes the count process, performs test counts on high-value items (ABC analysis), reviews cut-off (GRNs, GDNs around 31 March), tests valuation method (FIFO or Weighted Average under Ind AS 2 / AS 2), examines slow-moving and obsolete provisions, and obtains MRL on stock valuation. Multi-plant: parallel sub-teams with rolling cut-off.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 501 attendance
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                ABC analysis
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Cut-off testing
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 501</text>
        <rect x="25" y="32" width="14" height="50" rx="2" fill="#25D366" opacity="0.8"/>
        <text x="32" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">A</text>
        <rect x="43" y="44" width="14" height="38" rx="2" fill="#F5A623" opacity="0.8"/>
        <text x="50" y="64" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">B</text>
        <rect x="61" y="58" width="14" height="24" rx="2" fill="#E8712C" opacity="0.8"/>
        <text x="68" y="72" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">C</text>
        <text x="88" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ABC</text>
        <text x="88" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CUT-OFF</text>
                </svg>
            </div>
            <span class="illustration-label">Stock Counted</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Section 148 Cost Records and CARO 3(vi)</h3>
        <p class="step-description">For manufacturers above Rs 35 crore turnover in Table A regulated sectors (telecom, electricity, petroleum, gas, drugs and pharma, fertilisers, sugar) or Table B non-regulated sectors, Patron verifies cost records in Form CRA-1 across all plants and branches under Rule 5. Rule 6 reconciliation prepared with the cost auditor (Cost Accountant). CARO clause 3(vi) confirms maintenance and proper recording.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                CRA-1 verified
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Rule 6 recon
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                CARO 3(vi)
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="20" y="15" width="80" height="12" fill="#14365F"/>
        <text x="60" y="24" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CRA-1</text>
        <line x1="30" y1="36" x2="90" y2="36" stroke="#F5A623" stroke-width="2"/>
        <line x1="30" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <text x="60" y="72" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Sec 148 + Rule 6</text>
                </svg>
            </div>
            <span class="illustration-label">Cost Records Verified</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">CARO 3(ii) Bank Stock Reconciliation</h3>
        <p class="step-description">Where the manufacturer has sanctioned WC limits exceeding Rs 5 crore in aggregate from banks or FIs on security of current assets, the auditor reconciles each quarterly bank stock statement filed during the year with books of account. Variances beyond explainable timing differences reported in CARO format. Discrepancies of 10 percent or more in any class of inventory between physical count and books trigger separate disclosure under clause 3(ii)(a).</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                DP-vs-books recon
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                10% threshold
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Variance memo
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="14" rx="6" fill="#14365F"/>
        <text x="60" y="20" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CARO 3(ii)</text>
        <rect x="22" y="32" width="14" height="50" rx="1" fill="#25D366"/>
        <text x="29" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q1</text>
        <rect x="39" y="38" width="14" height="44" rx="1" fill="#F5A623"/>
        <text x="46" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q2</text>
        <rect x="56" y="44" width="14" height="38" rx="1" fill="#E8712C"/>
        <text x="63" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q3</text>
        <rect x="73" y="48" width="14" height="34" rx="1" fill="#DC2626"/>
        <text x="80" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Q4</text>
        <text x="98" y="55" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DP</text>
                </svg>
            </div>
            <span class="illustration-label">Stock Reconciled</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">PP and E Title Deed Verification and Revaluation</h3>
        <p class="step-description">Under CARO clause 3(i), the auditor confirms title deeds for all immovable property - factory land, plant buildings, godowns, employee colonies - are in company name. For leased properties, lease deed examined. Revaluation during the year by registered valuer under Rule 8 - if change above 10 percent, amount disclosed. CWIP for plant expansions verified against project cost overrun analysis. MIDC / KIADB / GIDC plot mutation flagged where needed.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Title deeds
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                CARO 3(i)
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                MIDC mutation
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="22" y="32" width="22" height="36" rx="2" fill="#14365F" opacity="0.85"/>
        <text x="33" y="48" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">PLANT</text>
        <text x="33" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">LAND</text>
        <rect x="49" y="32" width="22" height="36" rx="2" fill="#F5A623" opacity="0.85"/>
        <text x="60" y="48" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FACTORY</text>
        <text x="60" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">BUILDING</text>
        <rect x="76" y="32" width="22" height="36" rx="2" fill="#25D366" opacity="0.85"/>
        <text x="87" y="48" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">GODOWN</text>
        <text x="87" y="58" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">TITLE</text>
                </svg>
            </div>
            <span class="illustration-label">Title Verified</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Excise / GST Recon, AOC-4 Filing and UDIN</h3>
        <p class="step-description">Patron reconciles GSTR-9 (annual return) and GSTR-9C (self-certified reconciliation) with books, cross-checks ITC-04 returns for goods sent for job work (frequent in auto components and pharma), and verifies pre-July 2017 excise / VAT closing balances correctly carried forward. Signed audit report annexed to Form AOC-4 and filed within 30 days of AGM; UDIN generated on ICAI portal. Form MGT-7 within 60 days.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                GSTR-9 + 9C
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                UDIN signed
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                AOC-4 + MGT-7
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M30 50 L48 65 L92 30" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UDIN + AOC-4 + GSTR-9C</text>
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
            <h2 class="section-title">Documents Checklist for Manufacturing Audit</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to scope and execute a manufacturing statutory audit. The exact list varies by entity type (Pvt Ltd / Public / OPC), turnover band, Section 148 applicability, and working-capital sanction status.</p>
<h3>Books and Inventory</h3>
<ul>
<li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll</li>
<li><strong>Stock Register and Bin Cards:</strong> Raw material, WIP, finished goods, consumables, stores and spares - separately classified</li>
<li><strong>Physical Stock Count Sheets:</strong> Pre-numbered count sheets signed by management observers and Patron audit team</li>
<li><strong>Cost Records in Form CRA-1:</strong> If turnover above Rs 35 crore in Table A or B industries. Plant-wise cost sheets</li>
</ul>
<h3>Fixed Assets and Title</h3>
<ul>
<li><strong>Fixed Asset Register:</strong> With gross block, accumulated depreciation (Schedule II), WDV, location, asset tag; physical verification proof</li>
<li><strong>Title Deeds:</strong> For factory land, plant buildings, godowns, residential / employee quarters. MIDC / KIADB / GIDC allotment letters and mutation records where applicable</li>
</ul>
<h3>Banking and Working Capital</h3>
<ul>
<li><strong>Bank Stock Statements (DP statements):</strong> Quarterly returns filed with banks for working-capital sanctions above Rs 5 crore</li>
<li><strong>Bank Sanction Letters:</strong> Working-capital facility, term loan, project loan sanction letters with covenants</li>
</ul>
<h3>Statutory Compliance</h3>
<ul>
<li><strong>GST Returns:</strong> GSTR-1, GSTR-3B, GSTR-9, GSTR-9C reconciled to revenue and ITC ledgers; ITC-04 for job-work transactions</li>
<li><strong>TDS Returns and Form 26AS:</strong> Form 24Q, 26Q reconciled to expense ledgers</li>
<li><strong>Related-Party Transactions Register:</strong> Section 188 disclosures - critical for captive units of foreign parents and Tier-1 auto vendors with parent OEM dependencies</li>
<li><strong>Statutory Registers under Sections 88, 170, 189:</strong> Member, director and contracts registers</li>
<li><strong>Excise Closing Balance Reconciliation:</strong> Pre-July 2017 closing CENVAT credit, VAT input balances reconciled with GST opening (TRAN-1, TRAN-2 trail)</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Manufacturing Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Year-End Plant Visit Logistics for Multi-Location Manufacturers</td><td>A manufacturer with three plants and four godowns cannot have a single auditor present at every count point on 31 March. Skipping physical inventory attendance or failing to document alternative procedures is the SA 501 violation NFRA has previously penalised Engagement Partners for in manufacturing audits.</td><td>Patron deploys parallel sub-teams, applies a rolling cut-off using GRN / GDN serial numbers, and uses cycle-count documentation plus a reconciliation roll-back to year-end where management stock take occurred at a different date. This is precisely the alternative procedure required under SA 501.</td></tr>
<tr><td>Cost Records and Statutory Audit Reconciliation under Rule 6</td><td>Cost records (CRA-1) and financial accounts must reconcile under Rule 6 of the Companies (Cost Records and Audit) Rules, 2014. Differences arising from inventory valuation methodology, fixed overhead absorption rates, or scrap / by-product treatment must be quantified.</td><td>Patron prepares the Rule 6 reconciliation statement together with the cost auditor (Cost Accountant), eliminating the most common qualification driver in CARO clause 3(vi). Both audits run in parallel rather than sequentially.</td></tr>
<tr><td>Bank Stock Statement Variances above the Materiality Bar</td><td>Variance between the DP stock statement and book stock of more than Rs 50 lakh or 10 percent of borrowing limit usually triggers consortium banker scrutiny. Variances flow through to CARO 3(ii)(b) reporting and may cause working-capital recall or interest hike.</td><td>Patron pre-audit working-capital review reconciles each quarterly DP statement to the GL before the year-end audit, gives the management a 60-day cure window, and supports the company in any subsequent stock audit by the lender appointed CA.</td></tr>
<tr><td>Title Deed Mismatches on Factory Land Purchased Pre-Incorporation</td><td>Industrial plots allotted by state development corporations (MIDC, KIADB, GIDC, SIPCOT, RIICO etc) often show the original allottee or partnership firm as the registered title-holder rather than the converted private limited company. CARO 3(i) requires disclosure with property description, gross carrying value, and the name in which it is held.</td><td>Patron pre-audit title diligence flags these for legal rectification through state portal mutation before audit sign-off. Where mutation cannot be completed in time, CARO disclosure is calibrated to reflect the legal status without triggering a qualification.</td></tr>
<tr><td>GST and Excise Transition Reconciliation</td><td>Pre-July 2017 closing CENVAT and VAT credits carried forward as transitional GST credit under TRAN-1 / TRAN-2 routinely show small variances when reconciled with current GSTR-9 / 9C. CARO clause 3(vii) requires disclosure of GST and other statutory dues with ageing.</td><td>Patron reconciles the TRAN-1 / TRAN-2 closing balances to current ITC ledger; variances quantified and either resolved with the GST department through clarification filings or appropriately disclosed in the audit. GSTR-9C reconciliation is verified line-by-line.</td></tr>
<tr><td>Related-Party Pricing for Captive Units and Tier-1 Auto Vendors</td><td>Captive units of foreign parents and Tier-1 auto vendors with parent OEM dependency face Section 188 disclosure requirements under CARO 3(xv). Pricing must be at arm length; transfer pricing study required where international transactions cross Rs 1 crore threshold (Section 92E).</td><td>Patron reviews the Section 188 register with arm-length-pricing benchmarking. Where transfer pricing study is required, the audit working papers reference the TP report to provide the assurance trail for related-party transaction disclosures.</td></tr>


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
            <h2 class="section-title">Manufacturing Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 60,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Manufacturer - turnover under Rs 10 crore (single plant)</td><td>Rs 60,000 to Rs 1,20,000 - 4 weeks fieldwork; SA 501 plant attendance; CARO 21 clauses</td></tr>
<tr><td>Manufacturer - turnover Rs 10 to 35 crore</td><td>Rs 1,25,000 to Rs 2,50,000 - 5 weeks; CARO 3(ii) WC reconciliation if applicable; full GST 9/9C reconciliation</td></tr>
<tr><td>Manufacturer above Rs 35 crore (cost records overlay)</td><td>Rs 2,75,000 to Rs 5,50,000 - 5 to 6 weeks; Section 148 cost records; Rule 6 reconciliation with cost auditor</td></tr>
<tr><td>Manufacturer with WC above Rs 5 crore (CARO 3(ii) recon)</td><td>Add Rs 40,000 to Rs 75,000 - same window; quarterly DP statement to GL reconciliation; variance memo</td></tr>
<tr><td>Multi-plant or multi-state manufacturer</td><td>Add Rs 50,000 per additional plant - 6 to 7 weeks; parallel SA 501 sub-teams; rolling cut-off</td></tr>
<tr><td>Listed entity (KAM + IFC + CARO consolidation)</td><td>From Rs 6,00,000 - 7 to 9 weeks; SA 701 KAM; Section 143(3)(i) IFC; consolidated audit</td></tr>
<tr><td>Government Filing Fees (ADT-1, AOC-4, MGT-7, CRA-4)</td><td>ROC filing fees billed at actuals - ADT-1 Rs 300; AOC-4 scaled by authorised capital Rs 600 to Rs 2,000; CRA-4 nil</td></tr>
<tr><td>Section 147 Penalty Avoidance</td><td>Rs 25,000 to Rs 5,00,000 on company plus officer fines of Rs 10,000 to Rs 1,00,000 - prevented by timely and proper audit</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Manufacturing Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20turnover-band%20fee%20quote%20for%20our%20manufacturing%20company%20audit." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Manufacturing Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Engagement and planning</td><td>Week 1 - SA 210 engagement letter; Section 141 independence certificate; ADT-1 readiness</td></tr>
<tr><td>Pre-year-end interim audit</td><td>Week 2 to 3 - Q4 substantive testing; CARO 3(ii) variance preview; cost records walkthrough</td></tr>
<tr><td>SA 501 physical inventory attendance</td><td>31 March + 1 day - plant-wise count; test counts; cut-off testing; ABC analysis sampling</td></tr>
<tr><td>Post-balance-sheet fieldwork</td><td>Weeks 4 to 6 - vouching, third-party confirmations, related-party review, IFC walkthrough</td></tr>
<tr><td>Cost records reconciliation (Rule 6)</td><td>Week 5 (parallel) - coordination with cost auditor (Cost Accountant); CRA-1 verification</td></tr>
<tr><td>CARO 3(ii) bank stock reconciliation</td><td>Weeks 5 to 6 - DP statement to GL reconciliation; variance investigation; 10 percent threshold testing</td></tr>
<tr><td>Title deed and PP and E verification</td><td>Weeks 5 to 6 - factory land, plant buildings, godowns; MIDC / KIADB mutation status</td></tr>
<tr><td>GSTR-9 / 9C reconciliation</td><td>Weeks 5 to 6 - GST annual return reconciliation; ITC-04 cross-check; TRAN-1 / TRAN-2 carry-forward</td></tr>
<tr><td>Draft report and management response</td><td>Week 6 to 7 - SA 700 / 705 review; KAM discussion for listed entities</td></tr>
<tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM - Patron files AOC-4 with audit report annexed</td></tr>
<tr><td>Form CRA-4 cost audit filing</td><td>Within 30 days of receipt of cost audit report under Section 148(6) - where applicable</td></tr>
<tr><td>Form MGT-7 annual return</td><td>Within 60 days of AGM under Section 92</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>NFRA has formally penalised Engagement Partners for failure to attend physical inventory count under SA 501 in manufacturing statutory audits - precedent that drives current practice standards.</strong> Delay in AOC-4 filing attracts Rs 100 per day in MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company. Section 450 attaches a further Rs 10,000 plus Rs 1,000 per day for continuing default.</p>

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
            <h2 class="section-title">Why Choose Patron for Manufacturing Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">Single CA Partner Across 4 Risk Areas</h3>
        <p class="feature-description">One engagement letter covers Section 143 statutory audit, SA 501 plant attendance, Section 148 cost records overlay with Rule 6 reconciliation, CARO 3(ii) bank stock reconciliation, PP and E title deeds, and GST / excise reconciliation. No workpaper duplication across multiple advisors.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">SA 501 Partner-Led Plant Attendance</h3>
        <p class="feature-description">Audit partner or senior team attends year-end stock count at plant. Multi-plant manufacturers serviced through parallel sub-teams with rolling cut-off. Alternative procedures documented where 100 percent attendance is not feasible - per the NFRA-cited SA 501 requirement.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Rule 6 Reconciliation with Cost Auditor</h3>
        <p class="feature-description">Cost records (CRA-1) and financial accounts reconciled under Rule 6 with the appointed cost auditor running in parallel. Eliminates the most common qualification driver in CARO clause 3(vi). Inventory valuation methodology, overhead absorption rates, scrap / by-product treatment - all quantified.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">CARO 3(ii) Bank Stock Reconciliation</h3>
        <p class="feature-description">Quarterly bank stock statements (DP statements) reconciled to ERP / GL for WC limits above Rs 5 crore. Variance investigation with 60-day cure window before year-end. Supports the company in any subsequent stock audit by the lender-appointed CA.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">Title Deed Pre-Audit Diligence</h3>
        <p class="feature-description">Industrial plot title verification for MIDC / KIADB / GIDC / SIPCOT / RIICO factories. Pre-incorporation allottee mutation flagged for legal rectification through state portal before audit sign-off. CARO 3(i) disclosure calibrated where mutation pending.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">GST / Excise Transition Reconciliation</h3>
        <p class="feature-description">GSTR-9 and GSTR-9C reconciliation line-by-line; ITC-04 cross-check for job-work; TRAN-1 / TRAN-2 carry-forward consistency to current ITC ledger. Pre-July 2017 excise / VAT closing balances verified. CARO 3(vii) statutory dues disclosure calibrated.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">Industrial Cluster Coverage</h3>
        <p class="feature-description">Pune, Mumbai, Delhi and Gurugram offices serve manufacturing clusters across Chakan MIDC, Ranjangaon MIDC, Aurangabad Waluj, IMT Manesar, Bhiwadi, Sriperumbudur, Hosur, and Coimbatore. Senior partner involvement on every plant audit.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">NFRA-Aware Working Papers</h3>
        <p class="feature-description">ICAI peer-reviewed audit working papers structured to withstand NFRA inspection for listed manufacturing entities. SA 501 attendance documentation specifically calibrated to the NFRA SA 501 enforcement precedent against a garment manufacturer audit.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Manufacturer CFOs and Plant Directors</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team attended SA 501 stock count across both our plants on the same date with parallel sub-teams - the rolling cut-off worked cleanly and the Rule 6 cost records reconciliation closed without any qualification."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Finance Director, Auto Component Manufacturer, Chakan MIDC</footer>
</blockquote>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "CARO 3(ii) bank stock statement reconciliation was a recurring pain point for our working capital sanction renewals. Patron pre-audit review surfaced the variances 60 days before year-end so we cured them in time. Renewal cycle with the consortium banker went through without queries."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- CFO, Process Pharma Manufacturer, Aurangabad</footer>
</blockquote>
<p style="margin-top:16px;"><strong>Client roster:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of manufacturers - Tier-1 and Tier-2 auto-component vendors, process pharma plants, textile spinning units, FMCG packaging factories, biosimilar producers, agrochemical and specialty chemical manufacturers, and SEZ / EOU export units.</p>
<p style="margin-top:16px;"><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves manufacturing clusters across Chakan MIDC, Ranjangaon MIDC, Aurangabad Waluj, IMT Manesar, Bhiwadi, Sriperumbudur, Hosur, and Coimbatore.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / Big-Four / Patron-Led Manufacturing Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        
<tr><td>Independence under Section 141</td><td>Disqualified</td><td>Qualified</td><td>Qualified</td></tr>
<tr><td>SA 501 plant attendance (multi-site)</td><td>Not signable</td><td>Centralised - slower turnaround</td><td>Partner-led; parallel sub-teams; rolling cut-off</td></tr>
<tr><td>Section 148 cost records reconciliation (Rule 6)</td><td>N/A</td><td>Heavy procedure</td><td>Parallel with cost auditor; integrated workpapers</td></tr>
<tr><td>CARO 3(ii) bank stock reconciliation</td><td>Self-reconciliation rejected</td><td>Standard procedure</td><td>Pre-audit review with 60-day cure window</td></tr>
<tr><td>PP and E title deed verification (MIDC / KIADB)</td><td>Self-flagged</td><td>Standard procedure</td><td>Pre-audit diligence with state portal mutation guidance</td></tr>
<tr><td>GST 9/9C and TRAN-1/2 reconciliation</td><td>Self-reconciliation rejected</td><td>Heavy procedure</td><td>Line-by-line; calibrated CARO 3(vii) disclosure</td></tr>
<tr><td>NFRA inspection readiness (listed)</td><td>Not applicable in-house</td><td>Heavy compliance team</td><td>NFRA-aware working papers per SA 501 precedent</td></tr>
<tr><td>Cost (mid-size manufacturer Rs 10 to 35 cr turnover)</td><td>Apparent zero - unsignable</td><td>Rs 5 to 12 lakh</td><td>Rs 1.25 to 2.5 lakh</td></tr>


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
                
                
<p>Manufacturing statutory audit pairs naturally with several Patron service areas - covering parent audit obligations, tax audit, internal audit (Section 138), stock audit (lender-mandated), GST audit, and ROC compliance.</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit (Parent Hub):</strong></a> National framework for Section 139 Companies Act audit with full methodology and applicability matrix</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> Tax audit bundled for manufacturers above Rs 1 crore turnover (Rs 10 crore digital); Form 3CD coordinated with statutory audit workpapers</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138):</strong></a> Recommended for manufacturers above Rs 200 crore turnover; complements Internal Financial Controls testing under Section 143(3)(i)</li>
<li><a href="/stock-audit"><strong>Stock Audit:</strong></a> Lender-mandated quarterly stock audit for borrowers above Rs 5 crore WC limit; complements CARO 3(ii) statutory reporting</li>
<li><a href="/gst-audit"><strong>GST Audit:</strong></a> GSTR-9C reconciliation for manufacturers above Rs 5 crore turnover; Section 17(5) ITC reversal; ITC-04 job-work cross-check</li>
<li><a href="/private-limited-company-compliance"><strong>Private Limited Compliance:</strong></a> ROC annual filings - ADT-1, AOC-4, MGT-7 for manufacturing Pvt Ltd entities</li>
<li><a href="/accounting-services-for-trading-industry"><strong>Accounting Services for Trading Industry:</strong></a> Peer service for distribution and trading arms of manufacturing groups</li>
<li><a href="/appointment-of-auditor"><strong>Appointment of Auditor:</strong></a> First auditor and AGM appointment with ADT-1 filing</li>
<li><a href="/change-of-auditor"><strong>Change of Auditor:</strong></a> Section 140 resignation and replacement; mandatory rotation under Section 139(2) where applicable</li>
<li><a href="/statutory-audit/gurugram"><strong>Statutory Audit in Gurugram:</strong></a> IMT Manesar, Bhiwadi and Gurugram industrial cluster coverage</li>
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
                
                
<p>Manufacturing statutory audit draws legal authority from the Companies Act 2013, the Companies (Cost Records and Audit) Rules 2014, CARO 2020, ICAI Standards on Auditing, and the GST Act 2017 for reconciliation under GSTR-9 and 9C.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Reference</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Governing Act (Statutory Audit)</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr>
<tr><td>Section 139 Companies Act 2013</td><td>First auditor within 30 days of incorporation; AGM appointment for 5 years (individual) or 10 years (firm)</td></tr>
<tr><td>Section 143 Companies Act 2013</td><td>Powers and duties; SA 700 / 705 reporting; CARO 2020 annexure</td></tr>
<tr><td>Section 143(3)(i) Companies Act 2013</td><td>Mandatory reporting on adequacy and operating effectiveness of Internal Financial Controls for specified companies</td></tr>
<tr><td>Section 147 Companies Act 2013</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; officer in default Rs 10,000 to Rs 1,00,000; imprisonment in fraudulent cases</td></tr>
<tr><td>Section 148 Companies Act 2013</td><td>Cost records mandatory for specified industries above Rs 35 crore turnover (Table A regulated / Table B non-regulated)</td></tr>
<tr><td>Section 450 Companies Act 2013</td><td>Continuing default penalty - Rs 10,000 plus Rs 1,000 per day where no specific penalty provided</td></tr>
<tr><td>Rule 3, Companies (Cost Records and Audit) Rules, 2014</td><td>Cost records mandatory in Table A (regulated) and Table B (non-regulated) industries above Rs 35 crore turnover (preceding FY); micro and small enterprises excluded</td></tr>
<tr><td>Rule 4, Companies (Cost Records and Audit) Rules, 2014</td><td>Cost audit - Regulated sector: Rs 50 crore aggregate / Rs 25 crore product-wise; Non-regulated: Rs 100 crore aggregate / Rs 35 crore product-wise</td></tr>
<tr><td>Rule 5</td><td>Form CRA-1 maintenance for all units and branches</td></tr>
<tr><td>CARO 2020 Clause 3(i)</td><td>PP and E records, title deeds in company name, revaluation by registered valuer disclosure if change above 10 percent, benami proceedings</td></tr>
<tr><td>CARO 2020 Clause 3(ii)</td><td>Inventory physical verification, 10 percent discrepancy threshold (by value), working-capital limits above Rs 5 crore - quarterly bank stock recon</td></tr>
<tr><td>CARO 2020 Clause 3(vi)</td><td>Whether cost records are prescribed under Section 148(1) and properly maintained</td></tr>
<tr><td>CARO 2020 Clause 3(vii)</td><td>Statutory dues - GST, PF, ESI, income tax, customs, excise, VAT, cess - regular deposit and ageing of disputed dues</td></tr>
<tr><td>Standards on Auditing (ICAI)</td><td>SA 200 (Overall Objectives), SA 500 (Audit Evidence), SA 501 (Specific Considerations - Inventory, Litigation, Segments), SA 530 (Audit Sampling), SA 570 (Going Concern), SA 700 (Forming Opinion), SA 701 (KAM), SA 705 (Modifications), SA 706 (Emphasis of Matter)</td></tr>
<tr><td>Inventory Standard</td><td>Ind AS 2 (Inventories) or AS 2 (for non-Ind AS companies); Section 145 Income Tax Act consistency requirement; ICDS-II</td></tr>
<tr><td>GST Reconciliation</td><td>GSTR-9 (annual return) and GSTR-9C (reconciliation statement) for turnover above Rs 5 crore; ITC-04 for job-work goods</td></tr>
<tr><td>NFRA Enforcement Precedent</td><td>NFRA has formally penalised Engagement Partners for failure to attend physical inventory count under SA 501 in manufacturing statutory audits (e.g. garment manufacturer order, 2023) - precedent that drives current practice standards</td></tr>
<tr><td>Forms</td><td>ADT-1 (auditor appointment), ADT-3 (resignation), AOC-4 (financials), MGT-7 (annual return), CRA-1 (cost records format), CRA-2 (cost auditor appointment), CRA-3 (cost audit report), CRA-4 (MCA filing)</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3)</a> | <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Section 148 Companies Act 2013)</a> | <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI Standard on Auditing 501</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Manufacturing Audit</h2>
                    <p class="faq-expanded__lead">Common questions on statutory audit applicability for manufacturers, SA 501 inventory verification, Section 148 cost records, CARO clause 3(ii), the 10 percent discrepancy threshold, cost audit vs statutory audit, PP and E title deeds for factory land, and GST reconciliation.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Manufacturing Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for every manufacturing company in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of turnover or profit. A loss-making first-year manufacturing startup and a Rs 500 crore textile company are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is SA 501 and why does it matter for manufacturers?</h3>
                        <div class="faq-expanded__a"><p>SA 501 is the ICAI Standard on Auditing titled Audit Evidence - Specific Considerations for Selected Items. It requires the statutory auditor to attend physical inventory counting where inventory is material to the financial statements. For manufacturers, inventory (raw material, WIP, finished goods, stores) is almost always material - the auditor must therefore plan plant attendance at year-end and document alternative procedures if attendance is not feasible. NFRA has penalised CAs for skipping this step in manufacturing audits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which manufacturing companies must maintain cost records under Section 148?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 3 of the Companies (Cost Records and Audit) Rules, 2014, manufacturing companies with overall turnover above Rs 35 crore in the immediately preceding financial year engaged in production of goods listed in Table A (regulated - telecom, electricity, petroleum, gas, drugs and pharma, fertilisers, sugar) or Table B (non-regulated, covering most other industries) must maintain cost records in Form CRA-1 for every plant and branch. Micro and small enterprises are excluded.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is CARO 2020 clause 3(ii) and the 10 percent discrepancy threshold?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 clause 3(ii)(a) requires the auditor to report on physical verification of inventory by management and disclose any discrepancies of 10 percent or more in the aggregate for each class of inventory between physical count and books. The threshold is applied to value (not quantity). Clause 3(ii)(b) additionally requires reconciliation of quarterly bank stock statements with books for working-capital limits above Rs 5 crore from banks or financial institutions on the basis of current-asset security.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is cost audit different from statutory audit for manufacturers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Statutory audit under Section 143 examines the financial statements as a whole and is conducted by a practicing Chartered Accountant. Cost audit under Section 148 examines only the cost records and is conducted by a Cost Accountant (member of ICMAI). A statutory auditor cannot conduct the cost audit of the same company (per the proviso to Section 148(3)). Both audits may apply simultaneously to the same manufacturer above the thresholds - Patron coordinates the workpapers and Rule 6 reconciliation across both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does the statutory auditor verify PP and E and title deeds in factory audits?</h3>
                        <div class="faq-expanded__a"><p>Under CARO clause 3(i), the auditor verifies (a) proper records of PP and E and intangible assets with quantitative details, (b) physical verification at reasonable intervals, (c) title deeds for all immovable property held in the company name, (d) revaluation disclosures if performed by a registered valuer with change above 10 percent, and (e) any proceedings under the Prohibition of Benami Property Transactions Act, 1988. For industrial plots allotted by MIDC, KIADB, GIDC and similar state corporations, the original allotment letter and subsequent mutation to the company name are examined.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What GST records does the statutory auditor reconcile for a manufacturer?</h3>
                        <div class="faq-expanded__a"><p>The auditor reconciles GSTR-1 (outward supplies), GSTR-3B (summary returns), GSTR-9 (annual return) and GSTR-9C (reconciliation statement) with the books of account. For manufacturers using outside processors, ITC-04 returns are cross-checked. CARO clause 3(vii) requires reporting on whether undisputed statutory dues including GST were regularly deposited and any ageing over six months disclosed. Pre-July 2017 excise / VAT closing balances carried forward as transitional GST credit are also verified for consistency with TRAN-1 and TRAN-2 filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the penalty for non-appointment of statutory auditor in a manufacturing company?</h3>
                        <div class="faq-expanded__a"><p>Under Section 147 of the Companies Act, 2013, a company that fails to appoint a statutory auditor is liable to a penalty of Rs 25,000 to Rs 5,00,000, and every officer in default is liable to a further penalty of Rs 10,000 to Rs 1,00,000. Late filing of AOC-4 with the audit report attracts additional fees of Rs 100 per day under the MCA fee schedule. Section 450 attaches a further Rs 10,000 plus Rs 1,000 per day for continuing default where no specific penalty is provided.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Statutory audit kya hota hai?</strong> Companies Act 2013 ke Section 143 ke under practicing CA dwara annual examination of financial statements.</p>
<p><strong>Who signs the statutory audit report?</strong> Practicing Chartered Accountant with valid ICAI Certificate of Practice, with UDIN.</p>
<p><strong>What is the inventory audit standard?</strong> SA 501 - auditor must attend physical inventory count where stock is material.</p>
<p><strong>Cost audit aur statutory audit ek hi hai?</strong> Nahi. Statutory audit CA karta hai (Sec 143). Cost audit Cost Accountant karta hai (Sec 148). Same person cannot do both for the same company.</p>
<p><strong>Working capital Rs 5 crore se zyada hai - kya hota hai?</strong> CARO 3(ii)(b) lagta hai. Quarterly bank stock statements books ke saath reconcile karne padte hain.</p>
<p><strong>Cost records kab maintain karne hote hain?</strong> Turnover above Rs 35 crore in Table A or Table B industries, Form CRA-1 mein.</p>
<p><strong>Title deed company ke naam nahi hai?</strong> CARO 3(i)(c) ke under disclose karna hota hai - property description, gross value, and name in which held.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AOC-4 Due 30 Days After AGM. SA 501 Attendance Cannot Be Skipped.</h2>
            <div class="content-text">
                
                
<p>AOC-4 with the audit report must be filed with the Registrar of Companies within 30 days of the AGM, and MGT-7 within 60 days. For manufacturers above Rs 35 crore turnover, Form CRA-4 (cost audit report) must be filed within 30 days of receipt of the cost audit report under Section 148(6). For most manufacturers whose AGM is scheduled by 30 September 2026, the AOC-4 deadline is 30 October 2026 and MGT-7 is 29 November 2026.</p>
<p><strong>NFRA has formally penalised Engagement Partners for failure to attend physical inventory count under SA 501 in manufacturing statutory audits - the auditor must plan plant attendance at year-end well before 31 March.</strong></p>
<p style="margin-top:16px;"><strong>Delay attracts Rs 100 per day in MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company. </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20fixed-fee%20manufacturing%20audit%20quote." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA scoping call and fixed-fee quote within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Four Risk Areas. NFRA-Aware Workpapers. One CA Partner.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Statutory audit for manufacturing companies sits at the intersection of Section 143 of the Companies Act, Section 148 cost records, CARO 2020 inventory and working-capital disclosures, and GST reconciliation - and audit fails at any of these joints carry NFRA enforcement risk for the Engagement Partner. The four manufacturing-specific risk areas - SA 501 physical inventory verification, Section 148 cost records overlay, CARO 3(ii) bank stock reconciliation, and PP and E title deeds plus GST / excise reconciliation - require integrated handling under one CA partner.</p>
<p style="color:#FFFFFF;margin-top:14px;">Patron Accounting handles the full scope with manufacturing-aware risk assessment, SA 501 plant attendance with parallel sub-teams, CARO clause 3(ii) bank stock reconciliation, PP and E title-deed verification, Rule 6 cost records reconciliation with the cost auditor, and GSTR-9 / 9C cross-check delivered as one integrated engagement. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth to factory audits from Chakan MIDC to IMT Manesar to Sriperumbudur.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20turnover-band%20fee%20quote%20for%20our%20manufacturing%20company%20audit." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Manufacturing Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron four-office network services manufacturers across Chakan MIDC, Ranjangaon MIDC, Aurangabad Waluj, IMT Manesar, Bhiwadi, Sriperumbudur, Hosur, and Coimbatore - in-person SA 501 plant attendance from our four offices, remote elsewhere.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">In-person SA 501 plant attendance and audit fieldwork from our four offices; multi-plant manufacturers serviced through parallel sub-teams with rolling cut-off.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Parent audit hub plus tax audit, stock audit, GST audit, and ROC compliance services</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Hub)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Sec 44AB)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/stock-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Stock Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months (Freshness Tier 1 - CARO clause amendments, cost records list changes, NFRA orders volatile). Triggers for earlier review include CARO 2020 clause 3 amendments, Section 148 Table A / Table B revisions, Rule 3 / 4 / 5 threshold changes, NFRA enforcement orders against manufacturing auditors, GSTR-9 / 9C structural revisions, and ICAI SA 501 amendments.</p>
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