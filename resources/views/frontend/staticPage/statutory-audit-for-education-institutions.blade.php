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
    <title>Audit for Education Institutions</title>
    <meta name="description" content="CA-led statutory audit for schools, colleges, coaching and edtech - Section 10(23C), 12A trust, Form 10B, tuition fee recognition. From Rs 1,00,000.">
    <link rel="canonical" href="/statutory-audit-for-education-institutions">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Audit for Education Institutions 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for schools, colleges, coaching and edtech - Section 10(23C), 12A trust, Form 10B, tuition fee recognition. From Rs 1,00,000.">
    <meta property="og:url" content="/statutory-audit-for-education-institutions">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-education-institutions-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit for Education Institutions 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for schools, colleges, coaching and edtech - Section 10(23C), 12A trust, Form 10B, tuition fee recognition. From Rs 1,00,000.">
    <meta name="twitter:image" content="/images/statutory-audit-for-education-institutions-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/statutory-audit-for-education-institutions#breadcrumb",
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
              "name": "For Education Institutions",
              "item": "/statutory-audit-for-education-institutions"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/statutory-audit-for-education-institutions#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is statutory audit mandatory for schools and colleges in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, in most cases. For corporate entities (Section 8 companies, coaching Pvt Ltd, edtech Pvt Ltd), Section 139 of the Companies Act 2013 mandates audit irrespective of turnover or surplus. For trusts and societies registered under Section 12A / 12AB, Section 12A(1)(b) requires audit if total income before exemption exceeds the maximum amount not chargeable to tax. For institutions claiming exemption under Section 10(23C)(iv) / (v) / (vi) / (via), the tenth proviso requires audit in Form 10BB. Section 44AB tax audit additionally applies above Rs 1 crore turnover for taxable coaching and edtech."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 10(23C) and Section 12A exemption?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 10(23C) is a specific exemption for educational institutions with three sub-clauses - (iiiab) Government substantially financed, (iiiad) Non-Government with annual receipts up to Rs 5 crore, (vi) Non-Government above Rs 5 crore with PCIT approval. Section 12A / 12AB is a general charitable-purpose exemption framework available to trusts, societies and Section 8 companies for any of the charitable purposes defined in Section 2(15) including education. The two regimes operate independently and an institution can claim either. The audit report differs - Form 10BB for Section 10(23C); Form 10B for Section 12A."
              }
            },
            {
              "@type": "Question",
              "name": "How is tuition fee recognised in the academic year?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tuition fee is recognised on accrual basis over the academic year. For schools following a July-June academic year (common in CBSE / ICSE schools), an annual fee of Rs 1.20 lakh collected in April for July-June is split at 31 March - 8 months earned (July-March at Rs 80,000) and 4 months unearned (April-June of next FY at Rs 40,000). The unearned portion is disclosed as Fees Received in Advance under Schedule III current liabilities. For schools on April-March academic year, fee collected in April is largely earned within the same FY. Refund policy compliance is tested against state Education Acts and Supreme Court Islamic Academy guidelines."
              }
            },
            {
              "@type": "Question",
              "name": "How are government grants accounted for in a school trust?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government grants are classified into three types - (a) tied grants for specific project (matched with project expenses in the same period; unspent portion at year-end is grant payable, not income), (b) untied operational grants (recognised in income on receipt or condition satisfaction), and (c) capital grants for asset creation (presentation choice under AS 12 / Ind AS 20 - either netted from gross asset cost or recognised as deferred income amortised over the asset useful life). The choice once made is a consistent accounting policy. RTE Act 25 percent reimbursement from state government is typically classified as fee income rather than as a grant, per state RTE Rules."
              }
            },
            {
              "@type": "Question",
              "name": "What is the 85 percent application rule under Section 11?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 11(1) of the Income Tax Act, at least 85 percent of the income derived from property held under trust must be applied for the charitable purposes of the trust during the financial year. The remaining 15 percent may be accumulated freely. Any surplus above 15 percent must be accumulated under Section 11(2) for a specified purpose by filing Form 10 within the due date - the accumulation is valid for up to 5 years, failing which the unutilised portion becomes taxable in the 6th year. Income for this purpose is gross receipts less revenue expenses including depreciation, but excluding capital expenditure (which is itself a form of application)."
              }
            },
            {
              "@type": "Question",
              "name": "Are edtech and coaching institutes tax-exempt?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Generally no. Coaching institutes and edtech companies operating on a commercial for-profit basis through Pvt Ltd or LLP structures are taxable corporates - they file ITR-6 or ITR-5, follow the Section 143 Companies Act audit, and pay corporate tax on profits. They are not eligible for Section 10(23C) (which requires the institution to exist solely for educational purposes and not for profit) or Section 12A registration (which requires charitable purpose). Some non-profit edtech initiatives operated through Section 8 companies or trusts may claim Section 12A. GST exemption under Notification 12/2017 also does not apply to commercial coaching and edtech."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 10B vs Form 10BB audit report?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 10B is the audit report for trusts and societies registered under Section 12A or 12AB - required where total income before exemption exceeds the maximum amount not chargeable to tax. Form 10BB is the audit report under the tenth proviso to Section 10(23C) - applicable to funds, institutions, trusts, universities, and educational institutions referenced in sub-clauses (iv), (v), (vi), and (via). Both forms were significantly revised in 2022 with greatly expanded annexure disclosures covering corpus donations, voluntary contributions, related-party transactions, specified-persons transactions under Section 13, and accumulation tracking."
              }
            },
            {
              "@type": "Question",
              "name": "Does CARO apply to a Section 8 educational company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Partially. CARO 2020 applies to companies incorporated under the Companies Act 2013, including Section 8 companies. However, several CARO sub-clauses (particularly those relating to commercial activity such as cash losses, dividends, related-party borrowings) operate differently for a Section 8 company that does not pay dividends and does not have a commercial profit motive. The auditor reports on applicable sub-clauses - title deeds (3(i)(c)), inventory (3(ii)) if applicable, statutory dues (3(vii)), and specified-persons transactions (3(xv)). For trusts and societies that are not corporate entities, CARO does not apply at all."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/statutory-audit-for-education-institutions#service",
          "name": "Statutory Audit for Education Institutions",
          "url": "/statutory-audit-for-education-institutions",
          "serviceType": "Statutory Audit (Education - Schools, Colleges, Universities, Coaching, Edtech, Trusts and Societies)",
          "description": "CA-led statutory audit for Indian education institutions across both non-profit (trusts, societies, Section 8 companies running schools, colleges, universities) and for-profit (coaching institutes, edtech platforms, pre-school chains) vehicles - under Section 143 of the Companies Act 2013 or Section 12A(1)(b) of the Income Tax Act 1961 as applicable, covering legal vehicle and exemption regime election under Section 10(23C) or Section 12A, tuition fee accrual over the academic year, government grants accounting, Section 11 application of 85 percent of income with Section 11(5) permitted-investment compliance, edtech subscription revenue under Ind AS 115 with DPDP Act 2023 minor consent compliance, and Form 10B vs Form 10BB audit report preparation in the revised 2022 format.",
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
              "name": "Education in India",
              "sameAs": "https://en.wikipedia.org/wiki/Education_in_India"
            },
            {
              "@type": "Thing",
              "name": "Indian Trusts Act, 1882",
              "sameAs": "https://en.wikipedia.org/wiki/Indian_Trusts_Act,_1882"
            },
            {
              "@type": "Thing",
              "name": "Companies Act 2013",
              "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Education Institution Statutory Audit Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "Single-school Trust (Receipts under Rs 5 crore)",
                "priceCurrency": "INR",
                "price": "100000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Multi-school Trust (Receipts Rs 5 to 25 crore)",
                "priceCurrency": "INR",
                "price": "275000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Coaching Institute Pvt Ltd (under Rs 25 crore revenue)",
                "priceCurrency": "INR",
                "price": "175000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "Edtech Pvt Ltd Series A / B (Rs 25 to 100 crore)",
                "priceCurrency": "INR",
                "price": "550000",
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
                        Statutory Audit for Education Institutions in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed / society memorandum / MOA-AOA, Section 12A/12AB registration certificate, Section 10(23C) approval order, academic year fee schedule, government grant sanction letters, RTE Act reimbursement statements, Section 11(5) investment schedule, ITR-7</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,00,000 for single-school trusts and small coaching institutes with annual receipts under Rs 5 crore; scales by entity type, multi-campus presence and grant inflow</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian educational entity - Companies Act 2013 (Section 8 / coaching / edtech Pvt Ltd), Indian Trusts Act 1882, Societies Registration Act 1860. For trusts and societies, audit under Section 12A(1)(b) if income above maximum exemption limit</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 9 weeks fieldwork; tuition fee accrual review; grant utilisation testing; Section 11 application rule certification; Form 10B / 10BB preparation</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CA-led%20statutory%20audit%20for%20our%20school%20%2F%20college%20%2F%20coaching%20%2F%20edtech.%20Please%20share%20a%20fixed-fee%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Education Audit'/>
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
                                
<option value="statutory-audit-for-education-institutions" selected>Statutory Audit (Education Institutions)</option>
<option value="statutory-audit">Statutory Audit (Hub)</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="internal-audit">Internal Audit</option>
<option value="trust-registration">Trust Registration</option>
<option value="society-registration">Society Registration</option>
<option value="12a-registration">Section 12A Registration</option>
<option value="80g-registration">Section 80G Registration</option>
<option value="private-limited-company-compliance">Private Limited Company Compliance</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team understood our July-June academic cycle and the Fees Received in Advance treatment that previous auditors had missed for years.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">School Trust MD</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CBSE School, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our Section 8 university audit end-to-end including Form 10B in the revised 2022 format and the Section 11(5) investment compliance for the Rs 50 crore corpus. Zero exemption challenge from the Income Tax Department for the third consecutive year.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FU</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Officer</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Section 8 University, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Course access fees deferred over the 18-month cohort delivery period under Ind AS 115; refund liability tested against our historical refund rate. Patron also closed the Section 44AB tax audit alongside - one CA partner, two reports, single workpaper set.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CI</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Coaching Institute Founder</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">JEE/NEET Coaching, Kota</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">DPDP Act 2023 minor consent compliance was the deal-breaker for our Series B investor diligence. Patron pre-empted that with a full data fiduciary obligation review, verifiable parental consent records audit, and breach notification log validation. Series B closed in 75 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">ET</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Edtech Series B Founder</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">B2C Edtech, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Government grant classification (tied vs untied vs capital) was always a grey area for our college accounts team. Patron set up a clean policy document with year-on-year consistency and unutilised grant payable disclosure at year-end. UGC compliance also gets satisfied as a by-product.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CT</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">College Treasurer</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">State University Affiliated College, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We run a master Pvt Ltd with 80+ franchise centres. Patron handled the master audit with franchise revenue recognition (initial fee, ongoing royalty, marketing fee) under Ind AS 115. Cohort-by-cohort revenue waterfall closed clean. Section 143(3)(i) IFC opinion also clean.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Pre-school Chain CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Franchise Network, Delhi NCR</div>
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
                    <p>Section 10(23C) and Section 12A regimes, Form 10B and 10BB, tuition fee accrual, government grants, Section 11 application, and edtech Ind AS 115 with DPDP Act - delivered under a single CA partner from Rs 1,00,000.</p>
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
            <h2 class="section-title">Statutory Audit for Education Institutions: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Education Audit Services at a Glance</strong></p>
                    <p>Statutory audit for education institutions in India is the annual independent examination of financial statements under the applicable Act - Section 143 of the Companies Act 2013 for corporate entities (Section 8 schools, edtech Pvt Ltd, coaching Pvt Ltd) and Section 12A(1)(b) of the Income Tax Act for trusts and societies - with seven sector-specific risk areas: legal vehicle and Section 10(23C) vs Section 12A exemption election, tuition fee accrual over the academic year, government grant accounting (tied / untied / capital), Section 11 application of 85 percent of income, placement and enrollment fee distinct timing, edtech subscription revenue under Ind AS 115, and Form 10B vs Form 10BB audit-report choice.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>Companies Act 2013 (Sec 8 / coaching / edtech); Indian Trusts Act 1882 (Trust); Societies Registration Act 1860 (Society); Income Tax Act 1961 - Sec 10(23C), 11, 12, 12A / 12AB, 13</td></tr><tr><td>Section 10(23C)(iiiab)</td><td>Government substantially financed (50 percent+ grants of total receipts) - fully exempt, no approval needed</td></tr><tr><td>Section 10(23C)(iiiad)</td><td>Non-Government, annual receipts up to Rs 5 crore - fully exempt, no approval needed</td></tr><tr><td>Section 10(23C)(vi)</td><td>Non-Government, annual receipts above Rs 5 crore - exempt only with PCIT / CIT approval (provisional 3 years then permanent 5 years)</td></tr><tr><td>Section 12A / 12AB</td><td>Alternative route via charitable purpose registration; provisional 3 years + permanent 5 years; re-validation in Form 10A / 10AB</td></tr><tr><td>Audit Report Forms</td><td>Form 10BB - Section 10(23C); Form 10B - Section 12A (with revised structure from 2022)</td></tr><tr><td>Cost Starting From</td><td>Rs 1,00,000 (Patron - single-school trust or small coaching institute, receipts under Rs 5 crore)</td></tr></tbody></table></div><p>Education audits in India sit at the intersection of two parallel regimes - the Section 10(23C) exemption tree (specific to educational institutions, with three sub-clauses based on government funding and receipts threshold) and the Section 12A / 12AB exemption tree (general for all charitable purposes, applicable to trusts, societies and Section 8 companies).</p>
                <p>The two are independent and an entity can claim either. For most non-profit schools, colleges and universities, the audit is conducted under Section 12A(1)(b) of the Income Tax Act with the report in Form 10B; for institutions claiming exemption under Section 10(23C)(iv), (v), (vi) or (via), the report is in Form 10BB. For-profit coaching institutes and edtech companies are taxable corporates and follow the Section 143 Companies Act statutory audit with Ind AS 115 revenue recognition. Patron handles all seven risk areas across both regimes under a single CA partner.</p>
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
                <h2 class="section-title">What Is Statutory Audit for Education Institutions?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Statutory audit for education institutions is the legally mandated annual examination of financial statements under the applicable governing Act - Section 143 of the Companies Act 2013 for corporate entities and Section 12A(1)(b) of the Income Tax Act 1961 for trusts and societies - covering seven sector-specific risk areas: legal vehicle and exemption election, tuition fee recognition, government grants, Section 11 application rule, placement and enrollment fees, edtech revenue under Ind AS 115, and Form 10B vs Form 10BB audit-report choice.</p>
<p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to most Indian educational entities - a small private school trust under Section 12A and a national edtech platform Pvt Ltd are both bound, though by different statutory triggers. For corporate entities, the auditor opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM. For trusts and societies claiming exemption, the audit report (Form 10B under Section 12A or Form 10BB under Section 10(23C)) accompanies ITR-7 by 30 September (extended to 31 October for trusts subject to audit). Source: <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>.</p>
<p>Where education audits differ most is the dual track of for-profit vs not-for-profit and the unique academic-year cycle. A school operates on an academic year that does not align with the financial year (typically April-March for the financial year but the academic year may be July-June or April-March). Tuition fees are typically collected upfront in one or two instalments but earned over the entire academic period. Government grants come in three flavours (tied to specific project, untied for general purpose, capital for asset creation) each with a different P and L profile. RTE Act 25 percent quota reimbursement from the state may be classified as fee income or grant depending on the legal characterisation. Capitation fees are prohibited under most state Education Acts.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Education Audit:</strong></p>
                    
<p><strong>Section 10(23C) Tree:</strong> Three sub-clauses for educational institutions - (iiiab) Government substantially financed (50 percent+ grants), (iiiad) Non-Government with annual receipts up to Rs 5 crore, (vi) Non-Government above Rs 5 crore with PCIT / CIT approval. Each provides full exemption subject to specified conditions and audit obligations.</p>
<p><strong>Section 12A / 12AB Registration:</strong> General charitable-purpose exemption framework available to trusts, societies and Section 8 companies. Provisional registration valid 3 years, followed by permanent registration valid 5 years (renewable). Re-validation in Form 10A or 10AB. Mandatory for Section 11 / 12 exemption.</p>
<p><strong>Section 11 - 85 Percent Application Rule:</strong> At least 85 percent of income derived from property held under trust must be applied for charitable purposes in the year of receipt. The remaining 15 percent may be accumulated freely. Any surplus above 15 percent must be accumulated under Section 11(2) with Form 10 filing.</p>
<p><strong>Section 11(2) Accumulation:</strong> Income above the 85 percent application threshold can be accumulated for up to 5 years for a specified purpose by filing Form 10 within the time limit. Failure to apply within 5 years makes the accumulated income taxable in the 6th year.</p>
<p><strong>Section 11(5) Permitted Investment Modes:</strong> Specific modes (government securities, scheduled banks, post office savings, debentures of specified bodies). Investment in any other mode (equity shares of unrelated company, shareholding in promoter group company) attracts Section 13 disqualification.</p>
<p><strong>Form 10B vs Form 10BB:</strong> Form 10B - audit report for Section 12A / 12AB registered trusts and societies. Form 10BB - audit report for Section 10(23C) institutions referenced in sub-clauses (iv), (v), (vi) and (via). Both significantly revised in 2022 with greatly expanded disclosures.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Education Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Framework</span>
                        <strong>Section 143 + Section 12A + Section 10(23C)</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (Education)</h2>
            <div class="content-text">
                
                
<p>Audit applicability varies sharply by legal vehicle and exemption route. The first audit-design decision is identifying the entity:</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Education Entity Type</th><th>Examples</th><th>Audit Layers</th></tr></thead>
<tbody>
<tr><td>School (CBSE / ICSE / State Board)</td><td>DPS, Ryan, Delhi Public School chain, Kendriya Vidyalaya, NPS</td><td>Trust / Society + Sec 12A + Form 10B OR Sec 10(23C)(vi) + Form 10BB</td></tr>
<tr><td>College (Undergraduate / Post-graduate)</td><td>Affiliated colleges of state universities</td><td>Trust / Society + Sec 12A + Form 10B + UGC compliance</td></tr>
<tr><td>University (State / Central / Deemed / Private)</td><td>Manipal, BITS, IIT, NIT, AIIMS, IIM, JNU</td><td>Sec 10(23C)(iiiab) Government substantially financed OR Sec 10(23C)(vi)</td></tr>
<tr><td>Section 8 Company (corporate non-profit)</td><td>Azim Premji University, Ashoka University</td><td>Sec 143 Companies Act + Sec 12A + Form 10B + selected CARO sub-clauses</td></tr>
<tr><td>Coaching institute (commercial)</td><td>Allen, Aakash, FIITJEE, Resonance, Career Launcher</td><td>Sec 143 Companies Act + Ind AS 115 course fee + Sec 44AB tax audit</td></tr>
<tr><td>Edtech (B2C subscription)</td><td>PhysicsWallah, Byju (legacy), Unacademy, Vedantu, Cuemath</td><td>Sec 143 + Ind AS 115 subscription + DPDP Act minor data + GST</td></tr>
<tr><td>Pre-school chain (franchise model)</td><td>KidZee, EuroKids, Shemrock, Bachpan</td><td>Sec 143 (master Pvt Ltd) + franchise revenue + Ind AS 115</td></tr>
<tr><td>Skilling / NSDC-affiliated</td><td>PMKVY centres, Sector Skill Council training partners</td><td>Sec 143 + NSDC grant accounting + outcome-linked payment</td></tr>
<tr><td>International school (IB / IGCSE)</td><td>Indus International, Ecole Mondiale, Oakridge</td><td>Trust / Society OR Sec 8 + Sec 12A / 10(23C) + foreign curriculum compliance</td></tr>
</tbody>
</table>
</div>
<p>For trusts and societies, Section 12A(1)(b) read with rules requires audit if total income (before exemption) exceeds the maximum amount not chargeable to tax (currently Rs 2.5 lakh / Rs 3 lakh depending on category). For institutions under Section 10(23C)(iv) / (v) / (vi) / (via), the tenth proviso requires audit if income before exemption exceeds the maximum amount not chargeable to tax. For corporate entities (Section 8, coaching Pvt Ltd, edtech Pvt Ltd), Section 139 of the Companies Act mandates audit irrespective of turnover. Tax audit under Section 44AB additionally applies above Rs 1 crore turnover (Rs 10 crore for digital receipts above 95 percent - typically met by edtech). CARO 2020 applies to companies under the Companies Act but does NOT apply to Section 8 companies for the not-for-profit clauses (a Section 8 educational company faces a modified CARO scope).</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Education Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Full-Scope Statutory Audit</td><td>Companies Act 2013 audit under Section 143 with applicable CARO 2020 sub-clauses (for corporate entities); Section 12A(1)(b) audit for trusts / societies under the Income Tax Act 1961; SA 700 / 705 reporting under Ind AS, AS or trust GAAP as applicable.</td></tr>
<tr><td>Legal Vehicle and Exemption Election Audit</td><td>Verification of registration documents - Trust Deed, Society MOA / Rules and Regulations, Section 8 MOA-AOA; Section 12A / 12AB registration certificate validity; Section 10(23C) approval order; election between Section 10(23C) and Section 12A regime documented; Section 13 disqualification triggers reviewed.</td></tr>
<tr><td>Tuition Fee Recognition and Refund Policy Audit</td><td>Accrual of tuition fees over the academic year (July-June or April-March cycle); portion of upfront annual fee earned each month; portion not earned at FY end disclosed as fees received in advance; refund liability for student withdrawals; capitation fee prohibition compliance under state Education Acts.</td></tr>
<tr><td>Government Grants Accounting (Tied / Untied / Capital)</td><td>Tied grants matched to specific project costs; untied operational grants recognised on receipt or condition satisfaction; capital grants for asset creation either netted from gross asset cost or recognised as deferred income amortised over asset useful life under AS 12 / Ind AS 20; RTE Act 25 percent quota reimbursement classification documented per state RTE Rules.</td></tr>
<tr><td>Section 11 Application and Form 10 Accumulation Audit</td><td>85 percent application certification; unutilised income up to 15 percent freely accumulated; surplus above 15 percent accumulated under Section 11(2) with Form 10 filed within due date; 5-year accumulation tracking; ineligible application (Section 13) flagged.</td></tr>
<tr><td>Placement, Enrollment and Examination Fees Audit</td><td>Distinct timing - one-time enrollment / admission fee recognised on enrollment; recurring tuition over academic year; examination fees recognised in the period the examination is conducted; placement service charges recognised under Ind AS 115 when placement service is rendered.</td></tr>
<tr><td>Edtech Subscription Revenue Audit (Ind AS 115 + DPDP Act)</td><td>For corporate edtech entities - subscription revenue under Ind AS 115 deferred over the access period (3-month / 6-month / annual / lifetime); one-time course fees recognised over the course-delivery period; refund liability per refund policy; DPDP Act 2023 minor consent operational compliance review; GST exemption under Notification 12/2017 review.</td></tr>


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
            <h2 class="section-title">Our 6-Step Education Institution Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron follows a structured 6-step process spanning corporate (Section 143 Companies Act) and non-corporate (Section 12A Income Tax Act) audits - tailored to the dual statutory regime that defines education-sector audits in India.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement and Legal Vehicle Risk Profiling</h3>
        <p class="step-description">Patron issues engagement letter under SA 210, obtains independence certificate (Section 141 Companies Act for corporate entities), and builds a legal-vehicle profile catalogueing every entity, registration certificates (12A/12AB/10(23C)), exemption regime chosen, academic year cycle, fee structure, grant inflow history, and Section 13 specified-person transactions.</p>
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
                Vehicle profile
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Sec 141 check
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
        <line x1="25" y1="52" x2="90" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="74" r="9" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M91 74l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
        <h3 class="step-title">Tuition Fee Accrual and Refund Policy Audit</h3>
        <p class="step-description">For schools/colleges on non-coincident academic year, Patron tests accrual cut-off at 31 March. Annual fee collected in April for July-June academic year is split 8/12 earned and 4/12 unearned. Unearned portion disclosed as Fees Received in Advance. Refund policy tested against state Education Acts and SC Islamic Academy guidelines.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                8/12 - 4/12 cut-off
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                FRA disclosure
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Capitation check
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="20" y="15" width="80" height="12" fill="#14365F"/>
        <text x="60" y="24" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FEE</text>
        <rect x="30" y="36" width="40" height="6" rx="2" fill="#25D366"/>
        <rect x="72" y="36" width="22" height="6" rx="2" fill="#F5A623"/>
        <text x="50" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">8/12 EARNED</text>
        <text x="83" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FRA</text>
        <line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="70" x2="80" y2="70" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Fees Tested</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Government Grants and Section 11 Application Audit</h3>
        <p class="step-description">Government grants classified into tied, untied, and capital buckets. Tied matched with project expenses; untied recognised on receipt; capital netted from asset cost or amortised over useful life under AS 12 / Ind AS 20. RTE Act 25 percent reimbursement classified. Section 11 85 percent application rule tested with Section 11(2) accumulation via Form 10.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Tied / Untied
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Capital deferred
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                85% applied
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="22" y="30" width="22" height="22" rx="3" fill="#25D366" opacity="0.8"/>
        <text x="33" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">TIED</text>
        <rect x="49" y="30" width="22" height="22" rx="3" fill="#F5A623" opacity="0.8"/>
        <text x="60" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UNTIED</text>
        <rect x="76" y="30" width="22" height="22" rx="3" fill="#14365F" opacity="0.8"/>
        <text x="87" y="44" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CAP</text>
        <text x="60" y="68" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">85%</text>
                </svg>
            </div>
            <span class="illustration-label">Grants Mapped</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Section 13 and Section 11(5) Investment Audit</h3>
        <p class="step-description">Section 13 disqualifies exemption for benefit to specified persons or non-permitted investments. Patron reviews related-party transactions, tests trustee salary/reimbursement, and verifies every investment item against Section 11(5) permitted-modes (Government securities, scheduled banks, post office, specified debentures, UTI). Equity, mutual funds, promoter-group holdings flagged.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Sec 13 review
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Sec 11(5) modes
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Item-by-item
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <circle cx="30" cy="40" r="6" fill="#25D366"/>
        <text x="30" y="44" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">G</text>
        <circle cx="50" cy="40" r="6" fill="#25D366"/>
        <text x="50" y="44" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">B</text>
        <circle cx="70" cy="40" r="6" fill="#DC2626"/>
        <text x="70" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">EQ</text>
        <circle cx="90" cy="40" r="6" fill="#DC2626"/>
        <text x="90" y="44" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">MF</text>
        <text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SEC 11(5) FILTER</text>
                </svg>
            </div>
            <span class="illustration-label">Investments Vetted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Edtech Subscription Revenue and DPDP Compliance</h3>
        <p class="step-description">For edtech Pvt Ltd and coaching companies, Patron applies the Ind AS 115 five-step model. Course access fees deferred over the access period; hybrid live-plus-recorded courses tested for principal performance obligation. Refund liability computed against historical refund rate. DPDP Act 2023 verifiable parental consent for under-18 users reviewed; Section 44AB tax audit closes alongside.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Ind AS 115
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Refund liability
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                DPDP minor consent
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="30" y="25" width="50" height="6" rx="2" fill="#F5A623"/>
        <text x="55" y="30" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">COHORT 1</text>
        <rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.6"/>
        <text x="50" y="40" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">COHORT 2</text>
        <rect x="30" y="45" width="35" height="6" rx="2" fill="#E8712C" opacity="0.7"/>
        <text x="47" y="50" font-size="4" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">COHORT 3</text>
        <rect x="30" y="55" width="25" height="6" rx="2" fill="#14365F" opacity="0.4"/>
        <circle cx="90" cy="40" r="9" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/>
        <text x="90" y="44" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">115</text>
                </svg>
            </div>
            <span class="illustration-label">Edtech Tested</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Sign-Off, UDIN and Form 10B / 10BB / AOC-4 Filing</h3>
        <p class="step-description">Patron audit partner signs the report under UDIN generated on the ICAI portal. For trusts/societies, Form 10B (Section 12A) or Form 10BB (Section 10(23C)) is uploaded with ITR-7 by 31 October. Form 10 for Section 11(2) accumulation closes by ITR-7 due date. For corporate entities, AOC-4 within 30 days of AGM and MGT-7 within 60 days.</p>
        <div class="step-highlights">
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
                Form 10B / 10BB
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                AOC-4 + ITR-7
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M30 50 L48 65 L92 30" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UDIN + ROC + ITR-7</text>
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
            <h2 class="section-title">Documents Checklist for Education Institution Audit</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to scope and execute an education institution statutory audit. The exact list varies by legal vehicle (trust / society / Section 8 company / coaching Pvt Ltd / edtech Pvt Ltd) and the exemption regime (Section 12A vs Section 10(23C)).</p>
<h3>Foundation Documents (All Entities)</h3>
<ul>
<li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll</li>
<li><strong>Trust Deed / Society MOA / Section 8 MOA-AOA:</strong> Founding document with object clause confirming educational purpose</li>
<li><strong>Registration Certificates:</strong> Section 12A / 12AB registration order; Section 10(23C) approval order; PAN; 80G certificate if applicable; CSR registration (Section 8 / NGO Darpan)</li>
<li><strong>Academic Year Fee Schedule:</strong> Class-wise / course-wise fee with breakup (admission, tuition, transport, meals, activity, examination, library, lab); year-on-year comparison</li>
<li><strong>Fee Collection Register:</strong> Student-wise fee collection (admission + monthly / quarterly / annual instalments) with receipt numbers and dates</li>
</ul>
<h3>Specific to Non-Profit Trusts and Societies</h3>
<ul>
<li><strong>Fee Received in Advance Working:</strong> Unearned portion of upfront annual fee at 31 March for non-coincident academic year</li>
<li><strong>Government Grant Sanction Letters:</strong> Central / state government grants with tied / untied / capital classification</li>
<li><strong>RTE Act Reimbursement Statements:</strong> State-wise 25 percent quota student count and reimbursement</li>
<li><strong>Section 11(5) Investment Schedule:</strong> Every investment item with mode confirmation against permitted list</li>
<li><strong>Form 10 Accumulation Filing:</strong> Past 5-year accumulation tracker; purpose-wise utilisation</li>
<li><strong>Specified Persons (Section 13) Register:</strong> Trustees, founders, managers and their relatives; salary / honorarium / reimbursement details</li>
</ul>
<h3>Specific to Coaching and Edtech (For-Profit Vehicles)</h3>
<ul>
<li><strong>Edtech Subscription Schedule:</strong> Cohort-wise subscription with revenue recognition profile under Ind AS 115; refund liability movement</li>
<li><strong>Refund Policy and Refunds Issued:</strong> State Education Act compliance; pro-rata refund computations</li>
<li><strong>DPDP Act Compliance (Edtech):</strong> Privacy policy, verifiable parental consent records for under-18 users, data fiduciary registration, breach notification log</li>
<li><strong>Regulator Approval Letters:</strong> CBSE / ICSE / state board affiliation; UGC / AICTE / NMC / NCTE recognition; state Education Department No-Objection Certificate</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Education Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Tuition Fee Cut-Off for Non-Coincident Academic Year</td><td>Schools and colleges following a July-June academic year have a structural mismatch with the April-March financial year. Annual fee of Rs 1.20 lakh collected in April for the July-June academic year is split at 31 March - 8 months (July-March) earned at Rs 80,000, 4 months (April-June of the next FY) unearned at Rs 40,000. Many trusts incorrectly recognise the full annual fee on collection date, overstating current-year income.</td><td>Patron tests the cut-off cohort-wise (Class V / VI / VII separately) and quantifies the reclassification - the size of the unearned portion (typically 25 to 35 percent of annual collection) is material for any trust above Rs 1 crore receipts. Form 10B disclosure of fees received in advance is verified.</td></tr>
<tr><td>Section 11(5) Investment Compliance for Trust Surplus</td><td>Trusts accumulating surplus under Section 11(2) often deploy idle cash into mutual funds, equity shares or corporate fixed deposits in pursuit of better yields. Section 11(5) permits only specific modes - Government securities, scheduled bank deposits, post office savings, debentures of bodies specified in clause (xii). Investment in equity shares of unrelated companies, equity mutual funds, corporate FDs of unlisted companies, or any promoter-group holding is a Section 13 disqualification trigger.</td><td>Patron walks through every investment item in the closing balance and confirms permitted-mode compliance; non-compliant items are flagged for sale before AGM-date sign-off if possible. The entire trust loses Section 11 / 10(23C) exemption for the year on any single non-compliant item.</td></tr>
<tr><td>Edtech Refund Liability and Cohort Tracking</td><td>Edtech companies running multi-month live cohorts (typically 6 to 18 months for engineering or medical entrance preparation) sell course access at the start. Under Ind AS 115, revenue is recognised over the cohort delivery period. Refund liability is created for students who may withdraw - the refund policy may be staggered (full refund within 14 days, 50 percent within 30 days, no refund after 60 days).</td><td>Patron tests the historical refund rate by cohort and course type, the current-year refund liability balance, and the cut-off for refunds processed in early April relating to March-shutdown cohorts. The DPDP Act 2023 compliance for under-18 users adds a new dimension - non-compliance can lead to user data deletion mandate, which retroactively breaks the revenue recognition model.</td></tr>
<tr><td>Government Grant Capital vs Revenue Classification</td><td>A central or state government grant of Rs 5 crore for construction of a new school building is a capital grant (specific to asset creation). The trust has two presentation choices under AS 12 / Ind AS 20 - (a) Reduce from the gross asset cost (net presentation; depreciation lower; conservative); (b) Recognise as deferred income amortised over the asset useful life (gross presentation; depreciation full; balance sheet line). The choice once made is a consistent accounting policy.</td><td>Patron verifies the policy is consistent year-on-year and the grant utilisation matches the sanction terms - any unutilised portion at year-end is grant payable, not income. RTE Act reimbursement from state government for the 25 percent quota is typically classified as fee income (reimbursing the foregone tuition) rather than as grant - the legal characterisation under the state RTE Rules drives the classification.</td></tr>
<tr><td>Section 13 Specified-Persons Inadvertent Disqualification</td><td>Section 13 disqualifies exemption where any part of income is for benefit of specified persons (trustee, founder, settlor, manager, and their relatives), or where the trust is established for private religious purpose. Common gaps - trustee salary disproportionate to comparable institution rates, free education for trustee children beyond merit-based admission, rent paid to trustee for trust premises above market rate, related-party vendor contracts without arm-length pricing.</td><td>Patron reviews the trustee register and tests salary and reimbursement to trustees and their relatives for reasonableness against market benchmarks. Related-party transactions are flagged in the audit file with documentation of arm-length pricing. Any potential Section 13 trigger is highlighted with quantum and remediation steps.</td></tr>
<tr><td>Capitation Fee Prohibition Under State Education Acts</td><td>Capitation fees are prohibited under most state Education Acts (Karnataka Educational Institutions Act 1984, Maharashtra Educational Institutions Act 1987, Tamil Nadu Educational Institutions Act 2009). Schools may receive one-time receipts disguised as admission fee, building fund, infrastructure development fee, or library deposit that constitute capitation under the state Act.</td><td>Patron tests all one-time receipts above the disclosed admission fee against the state Education Act capitation-fee definition. Any excess is flagged for refund or for treatment as capitation with consequent legal exposure. State-specific Education Act compliance memo is part of the audit file.</td></tr>


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
            <h2 class="section-title">Education Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,00,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Single-school trust (receipts under Rs 5 cr; Sec 10(23C)(iiiad))</td><td>Rs 1,00,000 to Rs 2,50,000 - 5 weeks fieldwork; Form 10B or 10BB; Section 11(5) investment review</td></tr>
<tr><td>Multi-school trust (receipts Rs 5 to 25 cr; Sec 10(23C)(vi) or Sec 12A)</td><td>Rs 2,75,000 to Rs 6,00,000 - 5 to 7 weeks; cohort-wise tuition fee cut-off; Section 13 specified-persons review</td></tr>
<tr><td>College / university trust (receipts Rs 25 to 100 cr)</td><td>Rs 6,50,000 to Rs 14,00,000 - 6 to 8 weeks; UGC compliance; Section 11(2) accumulation tracking; Form 10 filing</td></tr>
<tr><td>Large university / multi-state trust (receipts above Rs 100 cr)</td><td>From Rs 15,00,000 - 8 to 10 weeks; multi-state coordination; deemed university overlay if applicable</td></tr>
<tr><td>Coaching institute Pvt Ltd (under Rs 25 cr revenue)</td><td>Rs 1,75,000 to Rs 5,00,000 - 5 to 6 weeks; Ind AS 115 course fee; Section 44AB tax audit bundled</td></tr>
<tr><td>Edtech Pvt Ltd Series A / B (Rs 25 to 100 cr revenue)</td><td>Rs 5,50,000 to Rs 12,00,000 - 6 to 7 weeks; subscription revenue + refund liability + DPDP Act compliance</td></tr>
<tr><td>Edtech Pvt Ltd Series C+ / unicorn (above Rs 100 cr)</td><td>From Rs 15,00,000 - 8 to 10 weeks; full IFC under Section 143(3)(i); KAM disclosure under SA 701</td></tr>
<tr><td>Section 11(5) investment compliance review (add-on)</td><td>Add Rs 25,000 to Rs 75,000 - same window; item-by-item permitted-mode certification</td></tr>
<tr><td>Form 10 Section 11(2) accumulation filing (add-on)</td><td>Add Rs 25,000 to Rs 50,000 - same window; 5-year accumulation tracker; purpose-wise utilisation memo</td></tr>
<tr><td>Government Filing Fees (ITR-7, AOC-4, MGT-7)</td><td>ROC and Income Tax filing fees billed at actuals</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Education Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20an%20entity-and-receipts-tiered%20fee%20quote%20for%20our%20education%20institution%20audit." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Education Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Engagement and legal vehicle profiling</td><td>Week 1 - SA 210 engagement letter; Section 141 independence; legal vehicle and exemption regime documentation</td></tr>
<tr><td>Pre-year-end interim audit</td><td>Week 2 to 3 - Q4 substantive testing; fee structure walkthrough; grant utilisation review</td></tr>
<tr><td>Tuition fee accrual and cut-off testing</td><td>Weeks 3 to 5 - cohort-wise testing for non-coincident academic year; Fees Received in Advance disclosure</td></tr>
<tr><td>Government grants and Section 11 application</td><td>Weeks 4 to 6 - tied / untied / capital classification; 85 percent application certification</td></tr>
<tr><td>Section 11(5) investment audit and Section 13 review</td><td>Weeks 5 to 6 - permitted-mode confirmation; specified-persons transaction review</td></tr>
<tr><td>Edtech Ind AS 115 testing (for-profit entities)</td><td>Weeks 4 to 6 - cohort tracking; refund liability; DPDP Act compliance</td></tr>
<tr><td>Draft report and management response</td><td>Week 6 to 7 - SA 700 / 705 review; KAM discussion for listed edtech and large coaching</td></tr>
<tr><td>Form 10B / 10BB and AOC-4 filing</td><td>By 31 October (audit cases) - ITR-7 with Form 10B / 10BB; AOC-4 within 30 days of AGM</td></tr>
<tr><td>Form 10 accumulation filing (if applicable)</td><td>By ITR-7 due date - Section 11(2) 5-year accumulation tracking</td></tr>
<tr><td>Form 3CD tax audit (taxable for-profit entities)</td><td>By 31 October - Section 44AB - coaching and edtech</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Late filing of audit report attracts loss of exemption for the relevant year - the entire surplus becomes taxable at maximum marginal rate.</strong> Form 10 for Section 11(2) accumulation closes by the ITR-7 due date; missing it makes the surplus immediately taxable. CBSE / ICSE / state board affiliation renewal cycles add separate deadlines outside the audit window.</p>

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
            <h2 class="section-title">Why Choose Patron for Education Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">Single CA Partner Across 7 Risk Areas</h3>
        <p class="feature-description">One engagement letter covers Section 143 audit (corporate) or Section 12A(1)(b) audit (trust / society), Form 10B / 10BB preparation, Section 11(5) investment compliance, Section 13 specified-persons review, and Form 10 Section 11(2) accumulation filing.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">Cohort-Wise Tuition Fee Cut-Off</h3>
        <p class="feature-description">The most-litigated reclassification in trust audits. Patron tests cut-off cohort-wise for non-coincident academic year; Fees Received in Advance disclosure verified against the 25-35 percent typical unearned portion.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Section 10(23C) vs Section 12A Election</h3>
        <p class="feature-description">Documented regime election in the audit file with sub-clause-level analysis (iiiab / iiiad / vi). Form 10B vs Form 10BB choice flows from the election. Re-validation cycles tracked.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">Government Grant Classification Depth</h3>
        <p class="feature-description">Tied / untied / capital classification matched against sanction terms with year-end unutilised grant payable disclosure. RTE Act 25 percent quota reimbursement treated per state RTE Rules.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">Section 11(5) Item-by-Item Confirmation</h3>
        <p class="feature-description">Every closing investment item verified against the permitted-modes list (Government securities, scheduled banks, post office, specified debentures, UTI). Protects Section 11 / 10(23C) exemption from Section 13 disqualification.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">Edtech Ind AS 115 with DPDP Act Layer</h3>
        <p class="feature-description">Cohort-wise revenue recognition with refund liability; DPDP Act 2023 verifiable parental consent compliance review for under-18 users; data fiduciary registration and breach notification mechanism reviewed.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">4-Office Pan-India Network</h3>
        <p class="feature-description">Pune, Mumbai, Delhi and Gurugram offices service education entities across South Delhi, Gurugram Sector 56, Noida Sector 62, Mumbai Bandra and Andheri, Pune Senapati Bapat Road and Hinjewadi, with site visits to school and college campuses.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Revised 2022 Form 10B / 10BB Format</h3>
        <p class="feature-description">Both forms prepared in the revised 2022 expanded format covering corpus, voluntary contributions, related-party transactions, specified-person disclosures, and accumulation tracking - withstands Income Tax Department scrutiny.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by School Trusts, Coaching Institutes and Edtech Founders</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "The statutory audit was clean and completed well before deadline. No last-minute rush. Patron team understood our July-June academic cycle and the Fees Received in Advance treatment that previous auditors had missed for years."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- MD, School Trust, Mumbai</footer>
</blockquote>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "Patron handled our Section 8 university audit end-to-end including Form 10B in the revised 2022 format and the Section 11(5) investment compliance for the Rs 50 crore corpus. Zero exemption challenge from the Income Tax Department for the third consecutive year."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Finance Officer, Section 8 University, Bangalore</footer>
</blockquote>
<p style="margin-top:16px;"><strong>Client roster:</strong> Trusted by Hyundai, Asian Paints, Bridgestone and a growing roster of school trusts (CBSE / ICSE / state board), college societies, deemed-university trusts, coaching institutes (engineering / medical entrance), edtech platforms (Series A through unicorn stage), pre-school chains (master Pvt Ltd model), and skilling / NSDC-affiliated training partners across India.</p>
<p style="margin-top:16px;"><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron services education entities operating across South Delhi, Gurugram Sector 56, Noida Sector 62, Mumbai Bandra and Andheri, Pune Senapati Bapat Road and Hinjewadi, with capability for site visits to school and college campuses.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / Big-Four / Patron-Led Education Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        
<tr><td>Independence (Companies Act + Income Tax)</td><td>Disqualified</td><td>Qualified</td><td>Qualified</td></tr>
<tr><td>Section 10(23C) vs 12A exemption election</td><td>Self-conclusion rejected</td><td>Heavy memo</td><td>Documented in audit file</td></tr>
<tr><td>Form 10B / 10BB preparation</td><td>Cannot self-sign</td><td>Bundled</td><td>Bundled - revised 2022 format</td></tr>
<tr><td>Tuition fee cut-off for non-coincident year</td><td>Often missed</td><td>Heavy procedure</td><td>Cohort-wise reclassification</td></tr>
<tr><td>Section 11(5) investment compliance</td><td>Self-reconciliation rejected</td><td>Heavy review</td><td>Item-by-item permitted-mode confirmation</td></tr>
<tr><td>Edtech Ind AS 115 cohort tracking</td><td>Investor-pressure recognition</td><td>Heavy modelling</td><td>Refund liability + cohort waterfall</td></tr>
<tr><td>Section 13 specified-persons review</td><td>Often overlooked</td><td>Standard procedure</td><td>Trustee-by-trustee register and market-rate testing</td></tr>
<tr><td>Cost (mid-size school trust Rs 25 cr)</td><td>Apparent zero - unsignable</td><td>Rs 8 to 18 lakh</td><td>Rs 2.75 to 6 lakh</td></tr>


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
                
                
<p>Education audit pairs naturally with the parent statutory audit hub and the entity-setup services for non-profit vehicles. Below are the most-engaged adjacent services.</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit (Parent Hub):</strong></a> National framework for Section 139 Companies Act audit and Section 12A(1)(b) Income Tax audit with full methodology, applicability matrix, and Patron vs commodity provider comparison</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> Tax audit for taxable coaching institutes and edtech Pvt Ltds above Rs 1 crore turnover (Rs 10 crore digital); bundled with statutory audit to share workpapers</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138):</strong></a> Internal audit for large school trusts, university trusts, and edtech companies above prescribed thresholds; uses SIAs (Standards on Internal Audit)</li>
<li><a href="/trust-registration"><strong>Trust Registration:</strong></a> Public charitable trust deed drafting and registration under Indian Trusts Act 1882 for new school promoter trusts</li>
<li><a href="/society-registration"><strong>Society Registration:</strong></a> Society MOA and Rules drafting under Societies Registration Act 1860 for college and university management societies</li>
<li><a href="/12a-registration"><strong>Section 12A Registration:</strong></a> Provisional and permanent registration in Form 10A / 10AB for Section 11 / 12 exemption claim</li>
<li><a href="/80g-registration"><strong>Section 80G Registration:</strong></a> Donor tax-benefit registration enabling 50 percent / 100 percent deduction for donors</li>
<li><a href="/private-limited-company-compliance"><strong>Private Limited Company Compliance:</strong></a> Annual compliance retainer for Section 8 educational companies, coaching Pvt Ltds, and edtech Pvt Ltds</li>
<li><a href="/appointment-of-auditor"><strong>Appointment of Auditor:</strong></a> ADT-1 filing for first and subsequent auditor appointments under Sections 139(6) and 139(1) for corporate entities</li>
<li><a href="/change-of-auditor"><strong>Change of Auditor:</strong></a> ADT-3 process for casual vacancy or resignation; auditor rotation under Section 139(2)</li>
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
                
                
<p>Education audits draw legal authority from multiple parallel statutes covering both corporate (Companies Act 2013) and non-corporate (Income Tax Act, Indian Trusts Act, Societies Registration Act) vehicles, with sector-specific overlays from the RTE Act, DPDP Act, and ICAI auditing standards.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Provision / Authority</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Companies Act 2013</td><td>Section 139 (auditor appointment), Section 143 (auditor duties), Section 147 (penalty), Section 8 (non-profit corporate vehicle)</td></tr>
<tr><td>Income Tax Act 1961 - Section 10(23C)</td><td>Sub-clauses (iiiab) Government substantially financed; (iiiad) Non-Government up to Rs 5 crore; (vi) Non-Government above Rs 5 crore with PCIT approval</td></tr>
<tr><td>Income Tax Act 1961 - Sections 11, 11(2), 11(5), 12, 12A / 12AB, 13</td><td>85 percent application rule; 5-year accumulation; permitted investment modes; charitable purpose registration framework; disqualification triggers</td></tr>
<tr><td>Income Tax Act 1961 - Sections 44AB, 139(4C), 139(4D)</td><td>Tax audit threshold; ITR-7 filing mandate for trusts and Section 8 companies</td></tr>
<tr><td>Indian Trusts Act 1882</td><td>Public charitable trust formation and trustee duties</td></tr>
<tr><td>Societies Registration Act 1860</td><td>Society formation; governing body roles; AGM compliance</td></tr>
<tr><td>CGST Act 2017 - Notification 12/2017</td><td>Educational services GST exemption for recognised institutions; commercial coaching and edtech generally not exempt</td></tr>
<tr><td>Right to Education Act 2009</td><td>25 percent reservation for EWS in private unaided schools; state reimbursement classification</td></tr>
<tr><td>DPDP Act 2023</td><td>Verifiable parental consent for users below 18; data fiduciary obligations; breach notification mechanism</td></tr>
<tr><td>UGC Act 1956 / AICTE Act 1987 / NMC Act 2019 / NCTE Act 1993</td><td>Regulator approval and recognition for colleges, technical institutions, medical institutions, and teacher education institutions</td></tr>
<tr><td>State Education Acts (Capitation Prohibition)</td><td>Karnataka Educational Institutions Act 1984; Maharashtra Educational Institutions Act 1987; Tamil Nadu Educational Institutions Act 2009</td></tr>
<tr><td>Standards on Auditing (ICAI)</td><td>SA 200, SA 500, SA 540 (Estimates - applies to fee accrual, refund liability), SA 550 (Related Parties - specified persons under Section 13), SA 570 (Going Concern - critical for edtech), SA 700 / 701 / 705 / 706</td></tr>
<tr><td>Forms</td><td>ADT-1 (auditor - corporate), AOC-4 (corporate financials), MGT-7 (annual return), Form 10A / 10AB (registration), Form 10B (Sec 12A audit), Form 10BB (Sec 10(23C) audit), Form 10 (Section 11(2) accumulation), Form 3CD (tax audit), ITR-7 (trust / society / Section 8)</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax Department (ITR-7 and Form 10B / 10BB)</a> | <a href="https://www.ugc.gov.in/" target="_blank" rel="noopener">University Grants Commission (UGC)</a> | <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3)</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Education Institution Audit</h2>
                    <p class="faq-expanded__lead">Common questions on audit applicability for schools and colleges, Section 10(23C) vs Section 12A exemption, tuition fee recognition, government grant accounting, 85 percent application rule, edtech tax status, Form 10B vs Form 10BB, and CARO applicability to Section 8 companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Education Institution Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for schools and colleges in India?</h3>
                        <div class="faq-expanded__a"><p>Yes, in most cases. For corporate entities (Section 8 companies, coaching Pvt Ltd, edtech Pvt Ltd), Section 139 of the Companies Act 2013 mandates audit irrespective of turnover or surplus. For trusts and societies registered under Section 12A / 12AB, Section 12A(1)(b) requires audit if total income before exemption exceeds the maximum amount not chargeable to tax (currently Rs 2.5 lakh). For institutions claiming exemption under Section 10(23C)(iv) / (v) / (vi) / (via), the tenth proviso requires audit in Form 10BB if income before exemption exceeds the maximum amount not chargeable to tax. Section 44AB tax audit additionally applies above Rs 1 crore turnover for taxable coaching and edtech.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 10(23C) and Section 12A exemption?</h3>
                        <div class="faq-expanded__a"><p>Section 10(23C) is a specific exemption for educational institutions with three sub-clauses - (iiiab) Government substantially financed, (iiiad) Non-Government with annual receipts up to Rs 5 crore, (vi) Non-Government above Rs 5 crore with PCIT approval. Section 12A / 12AB is a general charitable-purpose exemption framework available to trusts, societies and Section 8 companies for any of the charitable purposes defined in Section 2(15) including education. The two regimes operate independently and an institution can claim either (Supreme Court in Sonepat Hindu Educational and Charitable Society and several High Court rulings). The audit report differs - Form 10BB for Section 10(23C); Form 10B for Section 12A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is tuition fee recognised in the academic year?</h3>
                        <div class="faq-expanded__a"><p>Tuition fee is recognised on accrual basis over the academic year. For schools following a July-June academic year (common in CBSE / ICSE schools), an annual fee of Rs 1.20 lakh collected in April for July-June is split at 31 March - 8 months earned (July-March at Rs 80,000) and 4 months unearned (April-June of next FY at Rs 40,000). The unearned portion is disclosed as Fees Received in Advance under Schedule III current liabilities. For schools on April-March academic year (typical for most state-board schools and many CBSE schools), fee collected in April is largely earned within the same FY. Refund policy compliance is tested against state Education Acts and Supreme Court Islamic Academy guidelines.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are government grants accounted for in a school trust?</h3>
                        <div class="faq-expanded__a"><p>Government grants are classified into three types - (a) tied grants for specific project (matched with project expenses in the same period; unspent portion at year-end is grant payable, not income), (b) untied operational grants (recognised in income on receipt or condition satisfaction), and (c) capital grants for asset creation (presentation choice under AS 12 / Ind AS 20 - either netted from gross asset cost or recognised as deferred income amortised over the asset useful life). The choice once made is a consistent accounting policy. RTE Act 25 percent reimbursement from state government is typically classified as fee income (reimbursing the tuition foregone) rather than as a grant, per state RTE Rules.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the 85 percent application rule under Section 11?</h3>
                        <div class="faq-expanded__a"><p>Under Section 11(1) of the Income Tax Act, at least 85 percent of the income derived from property held under trust must be applied for the charitable purposes of the trust during the financial year. The remaining 15 percent may be accumulated freely. Any surplus above 15 percent must be accumulated under Section 11(2) for a specified purpose by filing Form 10 within the due date - the accumulation is valid for up to 5 years, failing which the unutilised portion becomes taxable in the 6th year. Income for this purpose is gross receipts less revenue expenses including depreciation, but excluding capital expenditure (which is itself a form of application).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Are edtech and coaching institutes tax-exempt?</h3>
                        <div class="faq-expanded__a"><p>Generally no. Coaching institutes and edtech companies operating on a commercial for-profit basis through Pvt Ltd or LLP structures are taxable corporates - they file ITR-6 or ITR-5, follow the Section 143 Companies Act audit, and pay corporate tax on profits. They are not eligible for Section 10(23C) (which requires the institution to exist solely for educational purposes and not for profit) or Section 12A registration (which requires charitable purpose). Some non-profit edtech initiatives operated through Section 8 companies or trusts may claim Section 12A. GST exemption under Notification 12/2017 also does not apply to commercial coaching and edtech.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Form 10B vs Form 10BB audit report?</h3>
                        <div class="faq-expanded__a"><p>Form 10B is the audit report for trusts and societies registered under Section 12A or 12AB - required where total income before exemption exceeds the maximum amount not chargeable to tax. Form 10BB is the audit report under the tenth proviso to Section 10(23C) - applicable to funds, institutions, trusts, universities, and educational institutions referenced in sub-clauses (iv), (v), (vi), and (via). Both forms were significantly revised in 2022 with greatly expanded annexure disclosures covering corpus donations, voluntary contributions, related-party transactions, specified-persons transactions under Section 13, and accumulation tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does CARO apply to a Section 8 educational company?</h3>
                        <div class="faq-expanded__a"><p>Partially. CARO 2020 applies to companies incorporated under the Companies Act 2013, including Section 8 companies. However, several CARO sub-clauses (particularly those relating to commercial activity such as cash losses, dividends, related-party borrowings) operate differently for a Section 8 company that does not pay dividends and does not have a commercial profit motive. The auditor reports on applicable sub-clauses - title deeds (3(i)(c)), inventory (3(ii)) if applicable, statutory dues (3(vii)), and specified-persons transactions (3(xv)). For trusts and societies that are not corporate entities, CARO does not apply at all.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>School ka audit kaise hota hai?</strong> Trust / Society dwara run school ka audit Section 12A(1)(b) Income Tax Act ke under Form 10B mein hota hai, OR Section 10(23C)(vi) ke under Form 10BB mein. Section 8 company ho toh Section 143 Companies Act ke under bhi audit hota hai.</p>
<p><strong>Tuition fee recognition kab hoti hai?</strong> Academic year mein accrual basis pe. July-June academic year ho toh April mein collected annual fee mein se 8/12 (Jul-Mar) earn hota hai aur 4/12 (Apr-Jun) Fees Received in Advance liability hota hai 31 March par.</p>
<p><strong>Section 10(23C) aur 12A mein kya farak hai?</strong> Section 10(23C) - educational institutions ke liye specific exemption with sub-clauses based on government funding aur receipts threshold. Section 12A - charitable purpose ka general framework for trusts, societies aur Section 8 companies. Dono independent hain.</p>
<p><strong>Edtech company ko statutory audit chahiye?</strong> Haan, Section 143 Companies Act ke under mandatory. Section 12A ya 10(23C) exemption nahi milti commercial edtech ko - taxable corporate hota hai. Section 44AB tax audit bhi Rs 1 cr turnover se ho toh lagta hai (Rs 10 cr digital).</p>
<p><strong>85 percent application rule kya hai?</strong> Section 11 ke under trust ka 85 percent income us hi saal mein charitable purpose pe apply karna hota hai. 15 percent freely accumulate ho sakta hai. Iss se zyada bachata hai toh Form 10 file karke 5 saal tak specified purpose ke liye accumulate kar sakte hain.</p>
<p><strong>RTE Act 25 percent quota ka reimbursement kya hota hai?</strong> State government EWS quota ke tuition reimbursement karta hai. Typically fee income hi mana jata hai (foregone tuition ka substitute) - grant nahi. State RTE Rules ke per legal classification dekhna padta hai.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR-7 with Form 10B / 10BB Due 31 October</h2>
            <div class="content-text">
                
                
<p>ITR-7 with Form 10B / 10BB is due by 31 October (audit cases) or 30 November (where the entity has international transactions). Form 10 for Section 11(2) accumulation closes by the ITR-7 due date - missing it makes the surplus immediately taxable. For corporate entities, AOC-4 closes within 30 days of AGM and MGT-7 within 60 days. Form 3CD tax audit (Section 44AB) for taxable coaching and edtech closes by 31 October.</p>
<p><strong>Section 12A / 12AB re-validation in Form 10AB closes 6 months before the existing registration 5-year expiry. Section 10(23C) approval renewal closes 6 months before expiry.</strong></p>
<p style="margin-top:16px;"><strong>Late filing of audit report attracts loss of exemption for the relevant year - the entire surplus becomes taxable at maximum marginal rate. </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20fixed-fee%20education%20audit%20quote." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA scoping call and fixed-fee quote within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Two Regimes. Seven Risk Areas. One CA Partner.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Statutory audit for education institutions is the most regime-bifurcated audit category in India - non-profit schools and universities operate under Section 12A or Section 10(23C) with Form 10B or Form 10BB audit reports, while for-profit coaching and edtech operate under Section 143 of the Companies Act with full CARO and Ind AS 115. Tuition fee accrual over a non-coincident academic year, government grants with three distinct accounting treatments, Section 11 application of 85 percent of income, Section 11(5) permitted-investment compliance, and Section 13 specified-persons review for non-profit entities; plus Ind AS 115 cohort recognition, refund liability, and DPDP Act 2023 minor consent for edtech - the audit becomes a multi-track exercise that spans two distinct statutory regimes.</p>
<p style="color:#FFFFFF;margin-top:14px;">An audit that mishandles any one surfaces in Income Tax Department exemption challenge, CBSE / UGC compliance inquiry, or investor due diligence. Patron Accounting handles the full scope under a single CA partner with education-aware risk assessment, legal-vehicle profiling, Section 10(23C) vs Section 12A regime election, cohort-wise tuition fee cut-off, government grant classification, Section 11(5) investment compliance, Form 10B / 10BB preparation in the revised 2022 format, and edtech Ind AS 115 + DPDP Act review. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from single-school trusts to multi-state university groups and unicorn-stage edtech platforms.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20an%20entity-and-receipts-tiered%20fee%20quote%20for%20our%20education%20institution%20audit." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Education Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron four-office network services school trusts, college societies, coaching institutes, and edtech founders across South Delhi, Gurugram Sector 56, Noida Sector 62, Mumbai Bandra and Andheri, Pune Senapati Bapat Road and Hinjewadi - in-person from our four offices, remote everywhere else.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">In-person education audit fieldwork from our four offices; remote coverage everywhere else with site visits to campuses on demand.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune (HQ)</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Parent audit hub plus entity-setup and registration services for non-profit educational vehicles</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Hub)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Sec 44AB)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/trust-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trust Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/12a-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 12A Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/80g-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 80G Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months (Freshness Tier 1 - Section 10(23C) threshold revised from Rs 1 crore to Rs 5 crore; Form 10B / 10BB structure revised 2022; UGC fee regulation framework; DPDP Act 2023 implementation; New Education Policy 2020 impact). Triggers for earlier review include Income Tax notification amending Section 10(23C) sub-clauses, Section 12A / 12AB re-validation cycle changes, RTE Act state rules amendment, NEP 2020 implementation milestones, and Form 10B / 10BB structural revision.</p>
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
