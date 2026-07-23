
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
    <title>ITR for Construction Firms: 43CB, 194C</title>
    <meta name="description" content="File ITR for construction contractors, sub-contractors. Sec 43CB POCM, Sec 194C TDS, Sec 44AD vs 44ADA, labour cash. Starts at Rs 9,500.">
    <link rel="canonical" href="/itr-for-construction-firms">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Construction Firms 2026: 43CB, 194C | Patron Accounting">
    <meta property="og:description" content="File ITR for construction contractors, sub-contractors. Sec 43CB POCM, Sec 194C TDS, Sec 44AD vs 44ADA, labour cash. Starts at Rs 9,500.">
    <meta property="og:url" content="/itr-for-construction-firms/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-construction-firms-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Construction Firms 2026: 43CB, 194C | Patron Accounting">
    <meta name="twitter:description" content="File ITR for construction contractors, sub-contractors. Sec 43CB POCM, Sec 194C TDS, Sec 44AD vs 44ADA, labour cash. Starts at Rs 9,500.">
    <meta name="twitter:image" content="/images/itr-for-construction-firms-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/itr-for-construction-firms/#breadcrumb",
          "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
            {"@type": "ListItem", "position": 2, "name": "Income Tax Return", "item": "/income-tax-return"},
            {"@type": "ListItem", "position": 3, "name": "ITR for Construction Firms", "item": "/itr-for-construction-firms"}
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/itr-for-construction-firms/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "Which ITR form should a construction contractor file?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A private limited or listed construction company files ITR-6. An LLP or partnership firm contractor files ITR-5 (LLP cannot use Section 44AD). A proprietor works contractor with regular books files ITR-3, while one opting for Section 44AD presumptive (up to Rs 2 crore turnover, Rs 3 crore if 95 percent receipts and payments are non-cash) files ITR-4. An architectural or engineering consultant under Section 44ADA (Rs 50 lakh / Rs 75 lakh digital) also files ITR-4. HUFs are eligible for Section 44AD but NOT Section 44ADA."
                }
            },
            {
                "@type": "Question",
                "name": "Is POCM compulsory for construction contracts?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Section 43CB inserted by Finance Act 2018 w.e.f. AY 2017-18 mandates the Percentage of Completion Method for both construction contracts and service contracts. The Cuttack ITAT has confirmed mandatory application. Unlike real estate developers (who can defend Project Completion Method per Bangalore Tribunal in Corporate Leisure and Property Development), construction CONTRACTORS providing services to clients have no PCM option. Only short-duration service contracts under 90 days may use a straight-line or project completion approach under Section 43CB."
                }
            },
            {
                "@type": "Question",
                "name": "What is the TDS rate under Section 194C for sub-contractors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 194C TDS is 1 percent if the sub-contractor is an individual or HUF, and 2 percent for other entities (firm, LLP, company). The rate rises to 20 percent if PAN is not furnished. TDS applies when a single payment exceeds Rs 30,000 OR when aggregate payments to one sub-contractor in a financial year exceed Rs 1,00,000. Form 26Q is filed quarterly, and Form 16A is issued to each sub-contractor. Failure to deduct triggers Section 40(a)(ia) 30 percent disallowance of the sub-contractor expense."
                }
            },
            {
                "@type": "Question",
                "name": "Can a construction contractor use Section 44AD presumptive scheme?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, if the contractor is a resident individual, HUF, or partnership firm (other than LLP) with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash receipts and 6 percent on digital. The 5-year continuity rule under Section 44AD(4) applies - opting out below the deemed rate triggers a 5-year lock-out. LLPs and companies are NOT eligible. For larger contractors above Rs 3 crore turnover, regular books and Section 43CB POCM are mandatory."
                }
            },
            {
                "@type": "Question",
                "name": "How is mobilization advance treated under Section 43CB?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mobilization advance paid by the client at project commencement is treated as a LIABILITY in the contractor's books, NOT as revenue. Revenue is recognised progressively as work advances per the Section 43CB POCM and ICDS-III stage of completion. However, the client deducts Section 194C TDS at the time of paying the advance - creating a cash flow situation where TDS is locked in Form 26AS while revenue recognition is deferred. Reconciliation tracks the advance as liability, the TDS in Form 26AS, and the revenue in POCM separately so the right TDS credit is claimed in the right year."
                }
            },
            {
                "@type": "Question",
                "name": "What is the cash payment limit for labour wages?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 40A(3) of the Income-tax Act 1961 caps cash payment to a single person in a single day at Rs 10,000 (Rs 35,000 for transporters under Rule 6DD). Any excess is 100 percent disallowed as expenditure. For construction sites paying daily-wage labour, this means each worker's wage in a day must stay within Rs 10,000 if paid in cash - or be settled via UPI, NEFT, RTGS, or account-payee cheque. Rule 6DD provides limited exceptions including remote villages without bank facilities. The limit was reduced from Rs 20,000 to Rs 10,000 by Finance Act 2017 w.e.f. AY 2018-19."
                }
            },
            {
                "@type": "Question",
                "name": "Should an architectural consultant use Section 44ADA or Section 44AD?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "An architectural consultant who provides DESIGN and structural advice without executing works should use Section 44ADA (50 percent deemed profit, Rs 50 lakh / Rs 75 lakh digital limit). A WORKS contractor who builds, supplies, or installs should use Section 44AD (8 percent / 6 percent deemed profit, Rs 2 crore / Rs 3 crore digital limit). For mixed firms doing both design and execution, the engagement should be split - design fees under Section 44ADA and execution turnover under Section 44AD - with separate billing. Form 26AS cross-checks Section 194J (10 percent professional TDS) against Section 194C (1 / 2 percent works TDS) to validate the split."
                }
            },
            {
                "@type": "Question",
                "name": "How is sub-contractor income included in main contractor revenue?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Default rule under Section 43CB read with ICDS-III: sub-contractor income is included in main contractor revenue. Carve-out: if the sub-contractor is responsible for a specific identifiable portion of the contract under a back-to-back arrangement (with separate scope, milestones, payment, and risk allocation), that portion is excluded from main contractor revenue and shown only in the sub-contractor's books. The treatment is determined by contract terms - documentation of scope and risk allocation in the sub-contract deed decides the inclusion or exclusion."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/itr-for-construction-firms/#service",
          "name": "ITR for Construction Firms in India",
          "description": "CA-led income tax return filing for construction contractors and sub-contractors in India. Covers ITR-3, ITR-4, ITR-5, ITR-6, mandatory Section 43CB Percentage of Completion Method, ICDS-III stage of completion, mobilization advance liability treatment, Section 194C 1 / 2 percent TDS chain, Section 194C(6) transporter exemption, Section 40A(3) Rs 10,000 labour cash limit, Section 44AD works versus Section 44ADA consultancy bifurcation, OSH Code 2020 wage register, and BoCW Welfare Cess 1 percent reconciliation.",
          "provider": {"@id": "/#organization"},
          "serviceType": "Income Tax Return Filing for Construction Contractors and Sub-Contractors",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Construction contractors and sub-contractors including civil contractors, MEP contractors (mechanical/electrical/plumbing), electrical contractors, EPC firms, joint venture (AOP) project execution entities, structural engineering consultants, architectural consultants, project management consultants, and works contractors. Coverage spans proprietorship, partnership firm, LLP, and private limited construction entities. Specialised handling of Section 43CB POCM mandate, Section 194C TDS chain, Section 44AD versus Section 44ADA bifurcation, Section 40A(3) labour cash compliance, BoCW Welfare Cess, and OSH Code 2020 wage register reconciliation"},
          "about": [
            {"@type": "Thing", "name": "Income Tax Return", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_return_(India)"},
            {"@type": "Thing", "name": "Construction industry of India", "sameAs": "https://en.wikipedia.org/wiki/Construction_industry_of_India"},
            {"@type": "Thing", "name": "Tax deduction at source", "sameAs": "https://en.wikipedia.org/wiki/Tax_deducted_at_source"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR for Construction Firms Pricing",
            "itemListElement": [
              {"@type": "Offer", "name": "Single-project Proprietor Consultant Section 44ADA", "price": "9500", "priceCurrency": "INR", "url": "/itr-for-construction-firms", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Single-project Proprietor Contractor Section 44AD", "price": "12500", "priceCurrency": "INR", "url": "/itr-for-construction-firms", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Single-project Firm or LLP Non-Audit", "price": "18500", "priceCurrency": "INR", "url": "/itr-for-construction-firms", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Multi-project Contractor Audit Case", "price": "45000", "priceCurrency": "INR", "url": "/itr-for-construction-firms", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Pvt Ltd EPC Contractor with Sub-Contracting", "price": "95000", "priceCurrency": "INR", "url": "/itr-for-construction-firms", "availability": "https://schema.org/InStock"}
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
        /* Amount column — right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
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

        /* Process Evidence Screenshot — Plan 3.2 */
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
                        ITR Filing for Construction Contractors and Sub-Contractors in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">8 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST, work order, RA bill schedule, sub-contract deed, labour register, mobilization advance receipts, Form 26AS, Form 26Q TDS challans, BoCW Cess challan.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 9,500 (Excl. GST and Govt. Charges). Variable by entity, project count, audit applicability, and sub-contracting depth.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietor, partnership firm, LLP, Pvt Ltd contractor, sub-contractor, works contractor, JV partner, EPC contractor, engineering and architectural consultants.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 15 working days for non-audit cases; 20 to 45 days for audit and Pvt Ltd EPC cases. Tax audit due 30 September 2026; ITR audit case 31 October 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 300+ Construction Firms Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Construction%20Firms%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Construction%20Firms%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20construction%20firm%2Fsub-contracting%20business." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Construction Firms'/>
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
                                
                                <option value="itr-for-construction-firms" selected>ITR for Construction Firms (current)</option>
                                <option value="income-tax-return">Income Tax Return (overview)</option>
                                <option value="itr-for-business">ITR for Business</option>
                                <option value="itr-for-companies">ITR for Companies</option>
                                <option value="tax-audit">Tax Audit</option>
                                <option value="construction-and-real-estate-accounting-services">Construction Accounting</option>
                                <option value="payroll-services-for-construction-real-estate-industry">Construction Payroll</option>
                                <option value="tds-return">TDS Return Filing</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron rebuilt our Section 194C TDS chain on Rs 70 lakh of sub-contractor payments and averted a Rs 78 lakh Section 40(a)(ia) disallowance. Saved another Rs 14 lakh on labour cash by migrating to weekly UPI payouts mid-year.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh M</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MEP Contractor, Gurugram</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing. They handled my Section 43CB POCM schedule across three projects without any year-end shock.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Civil Contractor, Pune</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all. They split my mixed firm engagements correctly between Section 44AD and Section 44ADA - the Form 26AS cross-check made it audit-ready.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Architectural Consultant, Mumbai</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Pvt Ltd EPC company had mobilization advances bunching up against the POCM revenue recognition. Patron set up a clean liability ledger and Form 26AS reconciliation - we claimed the right TDS in the right year, no scrutiny.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SB</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Sandeep B</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">EPC Contractor (Pvt Ltd), Delhi</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 194C(6) transporter exemption is something my old CA never bothered with. Patron got the PAN and letterhead declarations on file pre-engagement - we stopped deducting TDS on small transporters and kept the audit trail clean.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Prakash K</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Electrical Contractor, Pune</div>
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
                    <p>Join 300+ construction contractors and sub-contractors who file their ITR with Patron each year - civil, MEP, electrical, EPC, JV, and consultancy firms across India.</p>
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
                <a href="#who-section" class="toc-btn">Who Needs</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">9-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#related-section" class="toc-btn">Related</a>
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
            <h2 class="section-title">Construction Contractor and Sub-Contractor ITR - Section 43CB POCM and Section 194C TDS Chain</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Construction Firms Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> Construction contractors file ITR-3 (proprietor regular books), ITR-4 (Sec 44AD presumptive up to Rs 2 cr / Rs 3 cr digital), ITR-5 (LLP/firm), or ITR-6 (Pvt Ltd). Sec 43CB mandates Percentage of Completion Method - no PCM option. Sec 194C TDS is 1 percent for individual/HUF and 2 percent for others above Rs 30,000 single or Rs 1,00,000 aggregate per year. Sec 40A(3) caps labour cash at Rs 10,000 per person per day. Tax audit applies above Rs 1 crore turnover. Audit-case ITR due 31 October 2026.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Act</td><td>Income-tax Act 1961 (Sec 43CB, 44AB, 44AD, 44ADA, 194C, 40A(3), 40(a)(ia)); CGST Act 2017; OSH Code 2020; BoCW Cess Act 1996; ICDS-III Construction Contracts</td></tr>
                                <tr><td>Applicable To</td><td>Civil contractor, electrical contractor, MEP contractor, sub-contractor, works contractor, JV partner, EPC contractor, engineering consultant, architectural consultant</td></tr>
                                <tr><td>Section 43CB POCM</td><td>Mandatory Percentage of Completion Method for construction contracts AND service contracts (Finance Act 2018, w.e.f. AY 2017-18). No PCM option. Short service contracts under 90 days may use straight-line method</td></tr>
                                <tr><td>Section 194C TDS Rate</td><td>1 percent for individual/HUF contractor or sub-contractor; 2 percent for others; 20 percent if PAN not furnished. Threshold Rs 30,000 single or Rs 1,00,000 aggregate per FY per payee</td></tr>
                                <tr><td>Section 40A(3) Cash Limit</td><td>Rs 10,000 per person per day (Rs 35,000 for transporters). 100 percent disallowance on excess. Reduced from Rs 20,000 by Finance Act 2017 w.e.f. AY 2018-19</td></tr>
                                <tr><td>Tax Audit Threshold</td><td>Rs 1 crore turnover (Rs 10 crore if 95 percent receipts and payments are non-cash). Form 3CA-3CD or 3CB-3CD due 30 September 2026</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 9,500 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Form / Portal</td><td>ITR-3 / ITR-4 / ITR-5 / ITR-6 on incometax.gov.in; Form 26Q TDS quarterly; HSN/SAC 9954 (works contract)</td></tr>
                                <tr><td>Authority</td><td>CBDT, CBIC, BoCW Welfare Board (state), Labour Department (OSH Code 2020)</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>Construction contractors and sub-contractors operate under one of the most complex tax frameworks in Indian direct tax. Unlike real estate developers (who build for own sale and have flexibility between POCM and PCM per ITAT precedent), contractors providing construction services to clients are bound by Section 43CB inserted by Finance Act 2018 - Percentage of Completion Method is mandatory. ICDS-III sets the stage-of-completion mechanism (cost incurred / total estimated cost). Mobilization advances are liabilities, not revenue.</p>
                <p>Section 194C creates a TDS chain at every level - main contractor deducts on sub-contractor, client deducts on main contractor, with rates 1 percent for individual/HUF and 2 percent for others. Section 40A(3) caps cash payments at Rs 10,000 per person per day - critical for labour-heavy operations. The Section 44AD versus Section 44ADA call decides whether your engineering consulting firm is taxed at 6 percent or 50 percent of receipts. Patron Accounting has filed 300+ contractor and sub-contractor engagements across Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is ITR Filing for Construction Firms</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>ITR for construction firms is the annual income tax return filed by construction contractors and sub-contractors under Section 139(1) of the Income-tax Act 1961, after computing project income under Section 43CB Percentage of Completion Method (mandatory for both construction and service contracts), applying ICDS-III stage of completion, deducting Section 194C TDS on sub-contractor payments, treating mobilization advances as liabilities, and reconciling labour cash payments against Section 40A(3) limits.</strong></p>
                    <p>The return reports income classified as Profits and Gains of Business or Profession under business code 06001 (construction of buildings carried out on own-account or fee or contract basis) and related sub-codes. Running Account (RA) bills, work order schedules, sub-contractor deeds, retention money, mobilization advances, labour wage registers, BoCW Cess reconciliation, GST works contract returns, and Form 26AS TDS feed into Schedule BP. Multi-project contractors consolidate at PAN level.</p>
                    <p>Section 43CB inserted by Finance Act 2018 (w.e.f. AY 2017-18) makes POCM the only valid revenue-recognition method for construction contractors, with the Cuttack ITAT confirming mandatory application. Real estate developers building for own sale retain PCM flexibility per Bangalore Tribunal in Corporate Leisure and Property Development - construction contractors do not. ICDS-III defines stage of completion as cost incurred for work performed up to reporting date divided by total estimated contract cost. Progress payments are not determinative. Mobilization advances are treated as liabilities and recognised as revenue progressively as work advances.</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in Construction Firm ITR</h3>
                    <p><strong>Section 43CB POCM (mandatory):</strong> Inserted by Finance Act 2018 w.e.f. AY 2017-18. Mandates Percentage of Completion Method for construction contracts AND service contracts. Cuttack ITAT confirmed mandatory application. Construction contractors have no PCM option. Only short-duration service contracts under 90 days may use straight-line method.</p>
                    <p><strong>ICDS-III Stage of Completion:</strong> Stage = cost incurred for work performed up to reporting date / total estimated contract cost. Progress payments and advances received are not determinative of stage. Revenue recognised when reasonable certainty of ultimate collection. Notified vide CBDT Notification 87/2016 dated 29 September 2016.</p>
                    <p><strong>Mobilization Advance:</strong> Amount paid by client at project commencement to mobilise resources. Per Section 43CB read with ICDS-III, treated as a liability in the contractor's books, NOT revenue. Recognised as revenue progressively as work advances. TDS under Section 194C is deducted by the client at the time of advance payment - creating a cash flow pinch when revenue recognition lags.</p>
                    <p><strong>Section 194C TDS Chain:</strong> 1 percent for individual / HUF contractor or sub-contractor; 2 percent for others (firm, LLP, company); 20 percent if PAN not furnished. Threshold Rs 30,000 single payment OR Rs 1,00,000 aggregate per FY per payee. Both client-to-main-contractor and main-contractor-to-sub-contractor payments attract Section 194C - the chain runs at every level.</p>
                    <p><strong>Section 194C(6) Transporter Exemption:</strong> No TDS on payments to a transporter who owns 10 or fewer goods carriages at any time during the previous year, provided the transporter furnishes PAN and a written declaration to that effect. Critical for construction sites with daily material transport.</p>
                    <p><strong>Section 44AD vs Section 44ADA:</strong> Section 44AD covers works execution (contractor builds, supplies, executes) - 8 percent / 6 percent deemed profit, Rs 2 crore / Rs 3 crore digital limit, ITR-4. Section 44ADA covers professional consultancy (architect, structural engineer, project management consultant who advises but does not execute) - 50 percent deemed profit, Rs 50 lakh / Rs 75 lakh digital limit. Mixed engagements split between both.</p>
                    <p><strong>BoCW Welfare Cess:</strong> 1 percent cess on cost of construction levied under BoCW Cess Act 1996 on every employer engaged in building or other construction work. Paid to State BoCW Welfare Board; allowable as deduction under Section 37(1) of the Income-tax Act 1961.</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Construction Firms:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Construction Firms</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filed by</span>
                        <strong>CA Team</strong>
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
            <h2 class="section-title">Who Should File - Entity Form Mapping and Tax Audit Threshold</h2>
            <div class="content-text">
                
                
                <p>Every construction contractor and sub-contractor earning income in India must file an ITR. The form depends on entity structure, turnover, and whether the engagement is works execution or professional consultancy.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Entity Type</th>
                                <th>ITR Form</th>
                                <th>Section 44AD Eligible?</th>
                                <th>Section 44ADA Eligible?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Proprietor works contractor</td><td>ITR-3 (regular books) or ITR-4 (Sec 44AD presumptive)</td><td>YES (Resident Individual; Rs 2 cr / Rs 3 cr digital)</td><td>NO (works execution, not consultancy)</td></tr>
                            <tr><td>Proprietor architectural / engineering consultant</td><td>ITR-3 or ITR-4 (Sec 44ADA)</td><td>NO (consultancy, not works)</td><td>YES (Resident Individual; Rs 50 lakh / Rs 75 lakh digital)</td></tr>
                            <tr><td>Partnership firm contractor (non-LLP)</td><td>ITR-5</td><td>YES (Resident Partnership Firm)</td><td>YES (Resident Partnership Firm)</td></tr>
                            <tr><td>LLP contractor</td><td>ITR-5</td><td>NO - LLP explicitly excluded</td><td>NO - LLP explicitly excluded</td></tr>
                            <tr><td>Private limited construction company</td><td>ITR-6</td><td>NO - companies excluded</td><td>NO - companies excluded</td></tr>
                            <tr><td>Joint Venture (AOP) for project execution</td><td>ITR-5</td><td>NO - AOP excluded</td><td>NO - AOP excluded</td></tr>
                            <tr><td>HUF small contractor</td><td>ITR-3 or ITR-4</td><td>YES (Resident HUF)</td><td>NO - HUF not eligible</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Tax Audit Threshold under Section 44AB:</strong></p>
                <ul>
                    <li>Construction contractor: <strong>Rs 1 crore turnover</strong> (Rs 10 crore if 95 percent receipts AND payments are non-cash, per Finance Act 2020)</li>
                    <li>Engineering consultant under Section 44ADA: <strong>Rs 50 lakh receipts</strong>; tax audit applies above Rs 75 lakh receipts if profit declared below 50 percent</li>
                    <li>Tax audit report Form 3CA-3CD or 3CB-3CD due <strong>30 September 2026</strong></li>
                    <li>Section 271B penalty: 0.5 percent of turnover or Rs 1,50,000 (whichever lower) for tax audit default</li>
                </ul>
                <p style="margin-top:20px;"><strong>Statutory Deadlines AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 August 2026</strong> - non-audit ITR-3 / ITR-4 (extended from 31 July 2026)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report on Form 3CD under Section 44AB</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6</li>
                    <li><strong>31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 March 2026</strong> - 100 percent advance tax for Section 44AD/44ADA presumptive (single instalment)</li>
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
            <h2 class="section-title">Patron Accounting Services for Construction Firm ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Section 43CB POCM Computation</td><td>Project-by-project stage-of-completion computation per ICDS-III. Cost incurred to date / total estimated cost ratio applied to contract revenue. Anticipated losses recognised in year identified (Triveni Engineering Delhi HC 2011 prudence concept retained in books). Variations, claims, and incentive payments included to the extent probable and reliably measurable.</td></tr>
                            <tr><td>Mobilization Advance and Retention Money Treatment</td><td>Mobilization advance booked as liability (not revenue) and amortised against progressive billing. Retention money (typically 5 to 10 percent withheld until defect liability period) recognised as revenue when contractually accruing - documented separately under ICDS-III. TDS under Section 194C tracked at advance stage even though revenue recognition is deferred.</td></tr>
                            <tr><td>Section 194C TDS Chain Management</td><td>End-to-end TDS chain - client TDS on main contractor invoiced (matched in Form 26AS), main contractor TDS on sub-contractor (Form 26Q). Section 194C(6) transporter exemption documented with PAN and declaration on letterhead. Threshold tracking - Rs 30,000 single or Rs 1,00,000 aggregate per payee. Composite contracts split between materials and labour where invoice clearly bifurcates.</td></tr>
                            <tr><td>Section 44AD vs Section 44ADA Election</td><td>Pre-filing analysis on whether the engagement is works execution (Sec 44AD - 8 percent / 6 percent of turnover) or professional consultancy (Sec 44ADA - 50 percent of receipts). For mixed firms (architectural design plus project management plus execution), legitimate split between sections by activity, with audit-ready documentation. 5-year continuity rule check before electing presumptive.</td></tr>
                            <tr><td>Labour Cash Payment Audit (Sec 40A(3))</td><td>Daily wage register cross-check against Section 40A(3) Rs 10,000 per-person-per-day limit. Site supervisor petty cash review. Rule 6DD exceptions documented (rural village no-bank exception for Tier-3 sites, cottage industry inputs, agricultural producer payments). Section 40A(3A) deeming check for prior-year accruals paid in cash this year.</td></tr>
                            <tr><td>OSH Code 2020 + BoCW Cess Reconciliation</td><td>Wage register, attendance register, employment letter compliance per the Code on Occupational Safety, Health and Working Conditions, 2020 (which subsumed the Inter-State Migrant Workmen Act 1979). BoCW Welfare Cess 1 percent on cost of construction (BoCW Cess Act 1996) reconciled with project cost ledger - cess paid is a deductible expense under Section 37(1).</td></tr>
                            <tr><td>Sub-Contractor Income Inclusion Test</td><td>Section 43CB analysis on whether sub-contractor income is included in main contractor revenue. Default - included; carve-out applies where sub-contractor is responsible for a specific identifiable portion of the contract under a back-to-back arrangement. Documentation of sub-contract scope, payment milestones, and risk allocation determines treatment.</td></tr>
                            <tr><td>Tax Audit and Form 3CD Specifics for Contractors</td><td>Form 3CA-3CD or 3CB-3CD audit. Clause 13 (method of accounting POCM), Clause 14 (inventory if any - WIP), Clause 18 (depreciation on plant), Clause 21 (Sec 269ST cash, Sec 40A(3) cash payments), Clause 31 (Sec 269SS / 269T loans), Clause 34 (TDS / TCS verification). Multi-project audit memo for Pvt Ltd contractors.</td></tr>


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
            <h2 class="section-title">How Patron Files Your Construction Firm ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A nine-step engagement that confirms entity and ITR form, applies Section 43CB POCM, treats mobilization advances as liabilities, manages the Section 194C TDS chain, runs the Section 44AD versus 44ADA bifurcation, audits labour cash under Section 40A(3), reconciles OSH Code and BoCW Cess, and files the return with audit support where applicable.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Identify Entity Type and Select Correct ITR Form</h3>
                        <p class="step-description">Pvt Ltd contractor files ITR-6 (no Sec 44AD); LLP files ITR-5 (no Sec 44AD); proprietor contractor with regular books files ITR-3; proprietor under presumptive Section 44AD up to Rs 2 cr / Rs 3 cr digital files ITR-4. Architectural / engineering consultant under Section 44ADA up to Rs 50 lakh / Rs 75 lakh digital files ITR-4. JV (AOP) for project execution files ITR-5. HUF small contractor uses ITR-3 or ITR-4.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Six entity-type lanes</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form selection memo</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
                                    <line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <circle cx="95" cy="60" r="10" fill="#10B981" opacity="0.2"/>
                                    <path d="M90 60l3 3 6-6" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Selected</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Apply Section 43CB Percentage of Completion Method</h3>
                        <p class="step-description">POCM is mandatory for construction contracts and service contracts (Finance Act 2018, w.e.f. AY 2017-18; Cuttack ITAT confirmed). Compute stage of completion under ICDS-III as cost incurred to date divided by total estimated contract cost. Progress payments are NOT determinative of stage. Recognise revenue when reasonable certainty of ultimate collection exists. Recognise anticipated losses in the year identified.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>POCM mandatory - no PCM option</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly true-up schedule</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="100" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="42" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">POCM = Cost Incurred</text>
                                    <line x1="30" y1="48" x2="90" y2="48" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="62" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Total Estimated Cost</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Stage Computed</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Treat Mobilization Advance as Liability</h3>
                        <p class="step-description">Per Section 43CB read with ICDS-III, mobilization advances are liabilities in the contractor's books, NOT revenue. Recognise as revenue progressively as work advances. Track Section 194C TDS deducted by client at the advance stage - create a reconciliation between advance receipt, TDS in Form 26AS, and revenue recognised in Schedule BP. Retention money (5 to 10 percent withheld until defect liability period) recognised when contractually accruing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Advance = liability ledger</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS-revenue reconciliation</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="35" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Advance</text>
                                    <text x="31" y="48" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">Liability</text>
                                    <path d="M55 45h12" stroke="#10B981" stroke-width="2" stroke-linecap="round" marker-end="url(#arrow)"/>
                                    <rect x="68" y="15" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="89" y="35" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Revenue</text>
                                    <text x="89" y="48" text-anchor="middle" font-size="9" font-weight="700" fill="#10B981">POCM</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Advance Booked</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Manage Section 194C TDS Chain</h3>
                        <p class="step-description">Client deducts TDS on main contractor invoices (1 percent individual / 2 percent others); main contractor deducts TDS on sub-contractor payments. Threshold Rs 30,000 single or Rs 1,00,000 aggregate per FY per payee. PAN mandatory else 20 percent. File Form 26Q quarterly. Section 194C(6) transporter exemption applies if transporter owns 10 or fewer goods carriages and furnishes PAN with written declaration on letterhead.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 26Q quarterly</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>194C(6) transporter file</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="50" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="20" y="54" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Cl</text>
                                    <line x1="33" y1="50" x2="48" y2="50" stroke="#14365F" stroke-width="2" stroke-dasharray="2,2"/>
                                    <circle cx="60" cy="50" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="54" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">MC</text>
                                    <line x1="73" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="2" stroke-dasharray="2,2"/>
                                    <circle cx="100" cy="50" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="100" y="54" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">SC</text>
                                    <text x="60" y="80" text-anchor="middle" font-size="10" font-weight="700" fill="#E8712C">194C 1% / 2%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">TDS Chain Live</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Choose Section 44AD versus Section 44ADA Correctly</h3>
                        <p class="step-description">Works execution (build, supply, install) goes under Section 44AD - 8 percent / 6 percent deemed profit, Rs 2 crore / Rs 3 crore digital limit. Professional consultancy (design, structural advice, project management without execution) goes under Section 44ADA - 50 percent deemed profit, Rs 50 lakh / Rs 75 lakh digital limit. Mixed firms split engagements legitimately with separate billing for design and execution. Form 26AS Section 194J (10 percent) versus Section 194C (1 / 2 percent) cross-check validates the split.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Engagement-wise split</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS cross-check</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="31" y="35" text-anchor="middle" font-size="11" font-weight="800" fill="#14365F">44AD</text>
                                    <text x="31" y="55" text-anchor="middle" font-size="11" font-weight="700" fill="#E8712C">6%/8%</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">VS</text>
                                    <rect x="68" y="15" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="89" y="35" text-anchor="middle" font-size="11" font-weight="800" fill="#14365F">44ADA</text>
                                    <text x="89" y="55" text-anchor="middle" font-size="11" font-weight="700" fill="#E8712C">50%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Section Decided</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Run Section 40A(3) Labour Cash Audit</h3>
                        <p class="step-description">Daily wage payments above Rs 10,000 per person per day in cash are 100 percent disallowed (Rs 35,000 for transporters under Rule 6DD). Use bank transfer, UPI, NEFT, RTGS, or account-payee cheque. Document Rule 6DD exceptions (rural village no-bank exception for remote sites; cottage industry inputs; agricultural producer payments). Section 40A(3A) deeming check for prior-year accruals paid in cash this year.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Daily wage register match</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 6DD exceptions filed</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="34" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Rs 10,000 / day</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">per person</text>
                                    <text x="60" y="66" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">Sec 40A(3)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Cash Audit</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Reconcile OSH Code 2020 and BoCW Welfare Cess</h3>
                        <p class="step-description">Wage register, attendance register, and employment letter mandated under the Code on Occupational Safety, Health and Working Conditions, 2020 (which subsumed the Inter-State Migrant Workmen Act 1979). BoCW Welfare Cess at 1 percent on cost of construction (BoCW Cess Act 1996) reconciled with project cost ledger - paid cess is allowable as a deductible expense under Section 37(1).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage register inspection-ready</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1% cess as Sec 37 expense</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="35" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">OSH Code 2020</text>
                                    <line x1="20" y1="45" x2="100" y2="45" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="62" text-anchor="middle" font-size="11" font-weight="800" fill="#E8712C">BoCW 1%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Cess Reconciled</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">Sub-Contractor Income Inclusion Test and Tax Audit</h3>
                        <p class="step-description">Apply Section 43CB inclusion test - default rule: sub-contractor income is included in main contractor revenue. Carve-out: if sub-contractor is responsible for a specific identifiable portion of the contract under back-to-back arrangement, that portion is excluded. Document scope and risk allocation in writing. Run tax audit if turnover above Rs 1 crore (Rs 10 crore if 95 percent non-cash) under Section 44AB. File Form 3CA-3CD or 3CB-3CD by 30 September 2026.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Back-to-back scope memo</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD by 30 Sep 2026</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="13" font-weight="800" fill="#14365F">Form 3CD</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2"/>
                                    <line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="30" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="30" y1="74" x2="75" y2="74" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Filed</span>
                            <span class="step-number-large">08</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 9</span>
                        <h3 class="step-title">File ITR, Pay Self-Assessment Tax, and e-Verify</h3>
                        <p class="step-description">Pay self-assessment tax under Section 140A and validate advance tax instalments (project-based contractors often have lumpy advance tax due dates). Upload ITR JSON on incometax.gov.in, e-verify via Aadhaar OTP / DSC / EVC, and download ITR-V. Track refund or demand. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days, or Section 148 reassessment notice.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>143(1) defence support</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#10B981" stroke-width="2"/>
                                    <path d="M40 50l12 12 28 -28" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">ITR Filed</span>
                            <span class="step-number-large">09</span>
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
            <h2 class="section-title">Document Checklist for Construction Firm ITR</h2>
            <div class="content-text">
                
                
                <p>Construction firm ITR requires documentation across five categories: entity and identity, project and contract, books of accounts, TDS chain, and labour and welfare compliance.</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of entity (proprietor / firm / LLP / company / AOP) and PAN of partners / directors / Karta (Aadhaar linked)</li>
                    <li>Aadhaar of authorised signatory; DSC (Class 3) where ITR-5 / ITR-6 e-filing requires</li>
                    <li>GST registration certificate (works contract HSN/SAC 9954)</li>
                    <li>MCA LLPIN / CIN for LLP / Pvt Ltd; partnership deed for firm; HUF deed for HUF</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Project and Contract</h3>
                <ul>
                    <li>Work orders, Letters of Award (LoA), contract agreements (project-wise)</li>
                    <li>RA bills (running account bills), final bills, retention money tracker</li>
                    <li>Sub-contract deeds with scope, milestones, payment schedule, risk allocation</li>
                    <li>Mobilization advance receipts, bank guarantees against advance, project cost estimates</li>
                    <li>Composite contract material-labour bifurcation invoices</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. Books of Accounts and Financial Statements</h3>
                <ul>
                    <li>Project-wise cost ledger - material, labour, plant hire, sub-contractor, overheads</li>
                    <li>Profit and Loss account FY 2025-26 and Balance Sheet as on 31 March 2026</li>
                    <li>Trial balance, cash book, bank book, sales register, purchase register</li>
                    <li>Fixed asset register with Section 32 block-of-assets depreciation chart (plant and machinery)</li>
                    <li>Audited financial statements with Notes (audit cases - Pvt Ltd, LLP, multi-project)</li>
                    <li>Bank statements; secured/unsecured loan ledgers</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. GST and TDS Chain</h3>
                <ul>
                    <li>GSTR-1, GSTR-3B, GSTR-9 / GSTR-9C for FY 2025-26 (works contract HSN 9954, 12 percent / 18 percent rates)</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                    <li>Form 16A from clients (Section 194C TDS deducted on main contractor invoices)</li>
                    <li>Form 26Q TDS challans for sub-contractor payments (quarterly)</li>
                    <li>Section 194C(6) transporter PAN declarations on letterhead (for transporters with 10 or fewer goods carriages)</li>
                    <li>TDS certificates for Sec 194J (professional - 10 percent) where consultancy revenue exists</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Labour and Welfare Compliance</h3>
                <ul>
                    <li>Daily wage register, attendance register, employment letters (OSH Code 2020)</li>
                    <li>BoCW Welfare Cess challan and reconciliation (1 percent on cost of construction)</li>
                    <li>EPF and ESI return acknowledgements (where applicable)</li>
                    <li>Site-wise labour deployment records and inter-state migrant worker registrations</li>
                    <li>Cash payment register matched to UPI / NEFT / cheque payouts (Sec 40A(3) compliance)</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Construction Firm ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>POCM mandatory but no developer-flexibility carve-out for contractors</td><td>Real estate developers can defend Project Completion Method (PCM) per Bangalore Tribunal in Corporate Leisure and Property Development. Construction CONTRACTORS providing services to clients have NO such flexibility - Section 43CB inserted by Finance Act 2018 mandates POCM, and Cuttack ITAT confirmed mandatory application from AY 2017-18. Patron's solution: project-by-project POCM schedule with cost-incurred-to-total-estimated-cost methodology, anticipated-loss recognition memo (Triveni Engineering Delhi HC 2011 prudence concept), and quarterly true-up so the year-end POCM does not produce a tax bunching shock.</td></tr>
                            <tr><td>Mobilization advance TDS-revenue mismatch</td><td>Client pays a Rs 50 lakh mobilization advance and deducts Section 194C TDS at 2 percent (Rs 1 lakh) upfront. The contractor cannot recognise the Rs 50 lakh as revenue (it is a liability per ICDS-III) but the TDS credit is locked in Form 26AS. Patron's reconciliation matches the advance receipt to a liability ledger, the TDS to Form 26AS, and the revenue recognition to the POCM schedule - so the contractor claims the right TDS credit in the right year and avoids dispute on premature TDS-claim.</td></tr>
                            <tr><td>Section 40A(3) labour cash payment 100 percent disallowance</td><td>Construction sites pay daily-wage labour, supervisors collect petty cash, and remote / mofussil sites often lack bank infrastructure. A single labourer paid Rs 12,000 in cash on a single day triggers Section 40A(3) 100 percent disallowance. Across a year, hundreds of labourers may be involved. Patron's solution: daily wage register matched to UPI / bank-transfer payouts, site supervisor settlement only via cheque or NEFT, and Rule 6DD exception documentation for rural village no-bank sites where genuinely unavoidable.</td></tr>
                            <tr><td>Section 44AD versus Section 44ADA misclassification</td><td>A firm doing both architectural design (Section 44ADA - 50 percent) and works execution (Section 44AD - 6 percent / 8 percent) often files everything under Section 44ADA (lower paperwork) or everything under Section 44AD (lower deemed profit). Either is wrong. Patron's solution: engagement-by-engagement classification with separate billing for design and execution, audit-ready scope documentation, and split presumptive computation when assessing officer cross-checks Form 26AS for Section 194J (professional - 10 percent TDS) versus Section 194C (works - 1 / 2 percent TDS).</td></tr>
                            <tr><td>Sub-contractor TDS chain breakdown - Section 40(a)(ia) 30 percent disallowance</td><td>A main contractor receives Rs 1 crore from client (TDS deducted by client) and pays Rs 70 lakh to sub-contractors. If the main contractor fails to deduct Section 194C TDS on sub-contractor payments, Section 40(a)(ia) disallows 30 percent of the Rs 70 lakh expense - Rs 21 lakh added back to taxable income. Patron's solution: vendor master with PAN, automated Rs 30,000 single / Rs 1,00,000 aggregate threshold tracker, Form 26Q quarterly filing, and Form 16A issued to every sub-contractor.</td></tr>


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
            <h2 class="section-title">Construction Firm ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Single-project Proprietor Consultant (Section 44ADA)</td><td>Starting from Rs 9,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Single-project Proprietor Contractor (Section 44AD)</td><td>Starting from Rs 12,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Single-project Firm or LLP - Non-Audit</td><td>Starting from Rs 18,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Multi-project Contractor (Audit Case)</td><td>Starting from Rs 45,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pvt Ltd EPC Contractor with Sub-Contracting</td><td>Starting from Rs 95,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 44AB Tax Audit Add-on (Form 3CD)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Form 26Q Quarterly TDS Return Filing</td><td>Starting from Rs 1,499 per quarter (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 143(1) Intimation / Notice Response</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 139(8A) Updated Return Filing</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Pricing varies by entity type, project count, audit applicability, and sub-contracting depth.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Construction Firms consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%2043CB%20POCM%20and%20Section%20194C%20TDS%20chain%20for%20my%20construction%20firm%20ITR." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timeline and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Single-project Proprietor Consultant (Section 44ADA)</td><td>5-7 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Single-project Proprietor Contractor (Section 44AD)</td><td>7-10 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Single-project Firm or LLP - Non-Audit</td><td>10-15 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Multi-project Contractor (Audit Case)</td><td>20-30 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                            <tr><td>Pvt Ltd EPC Contractor with Sub-Contracting</td><td>30-45 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR-6)</td></tr>
                            <tr><td>Section 92E Transfer Pricing Case</td><td>30-45 working days</td><td>30 November 2026</td></tr>
                            <tr><td>Section 139(8A) Updated Return</td><td>7-14 working days</td><td>48 months from end of relevant AY</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Statutory deadline buffer:</strong> Patron blocks engagements 30 days before the due date to ensure clean filing. Tax Audit Form 3CD due 30 September 2026 - one month before audit-case ITR. Section 211 advance tax instalments at 15 June, 15 September, 15 December, and 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative). Section 234B/234C interest at 1 percent per month for advance tax shortfall. Late filing triggers Section 234F fee (up to Rs 5,000), loss of business loss carry-forward, and Section 271B audit penalty up to Rs 1.5 lakh.

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
            <h2 class="section-title">Benefits of CA-Led Construction Firm ITR Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Section 43CB POCM Schedule</h3>
                        <p class="feature-text">Project-by-project Percentage of Completion Method with quarterly true-ups - no year-end tax bunching. Anticipated losses recognised in the year identified. ICDS-III stage of completion fully documented.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Mobilization Advance Reconciliation</h3>
                        <p class="feature-text">Liability ledger, Form 26AS TDS, and revenue recognition tracked separately. The right TDS credit claimed in the right year. No premature TDS-claim disputes.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">Section 194C TDS Chain Firewall</h3>
                        <p class="feature-text">Vendor master with PAN, threshold tracker (Rs 30,000 single / Rs 1,00,000 aggregate), Form 26Q quarterly filing, Form 16A to every sub-contractor. Section 40(a)(ia) 30 percent disallowance averted.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">Section 194C(6) Transporter Exemption</h3>
                        <p class="feature-text">PAN and letterhead declaration filed pre-engagement for transporters with 10 or fewer goods carriages. Critical exemption for daily site material transport - documented and audit-ready.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">Section 44AD vs 44ADA Decision</h3>
                        <p class="feature-text">Engagement-wise classification - works execution under Section 44AD (6 / 8 percent) and consultancy under Section 44ADA (50 percent). No over-tax, no under-tax, defensible split documented.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">Section 40A(3) Labour Cash Audit</h3>
                        <p class="feature-text">Daily wage register cross-checked against Rs 10,000 per-person-per-day limit. UPI / NEFT migration plan for bulk-cash sites. Rule 6DD rural exception documentation. 100 percent disallowance averted.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <h3 class="feature-title">OSH Code 2020 Wage Register</h3>
                        <p class="feature-text">Wage register, attendance register, and employment letter cross-check per the Code on Occupational Safety, Health and Working Conditions, 2020. BoCW Welfare Cess at 1 percent reconciled with project cost ledger.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">Sub-Contractor Inclusion Test</h3>
                        <p class="feature-text">Section 43CB scope-based test - sub-contractor income included by default; carve-out for back-to-back arrangements with specific identifiable portion. No double-counting, no missed revenue, audit-ready memo.</p>
                    </article>
                </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong> | <strong>300+ Construction Firms</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Nishikant Gurav</strong> - Google Review</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Took minimum time, really impressive acumen. And it's not expensive at all."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Rajib Dutta</strong> - Google Review</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> One Gurugram-based MEP contractor averted a Rs 78 lakh Section 40(a)(ia) disallowance through Patron's reconstructed Section 194C TDS chain on sub-contractor payments - and saved Rs 14 lakh on Section 40A(3) labour cash by migrating to weekly UPI payouts mid-engagement.</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves construction firms across India - civil contractors, MEP contractors, electrical contractors, structural engineering consultants, EPC firms, and JV partners - plus enterprise clients across multiple industries.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY or In-House Junior versus Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                            <tr>
                                <th>Criterion</th>
                                <th>DIY / In-House Junior</th>
                                <th>Patron Accounting</th>
                            </tr>
</thead>
                    <tbody>
                        
                            <tr><td>Section 43CB POCM schedule</td><td>Year-end estimate, no quarterly true-up</td><td>Project-wise POCM with quarterly true-ups</td></tr>
                            <tr><td>Mobilization advance treatment</td><td>Often booked as revenue (incorrect)</td><td>Booked as liability per ICDS-III; TDS reconciled</td></tr>
                            <tr><td>Section 194C TDS chain</td><td>Often missed on sub-contractor side</td><td>Vendor master + threshold tracker + Form 26Q</td></tr>
                            <tr><td>Section 194C(6) transporter</td><td>PAN declaration not on file - TDS deducted unnecessarily</td><td>PAN + letterhead declaration filed pre-engagement</td></tr>
                            <tr><td>Section 44AD versus 44ADA</td><td>Same section for everything (incorrect)</td><td>Engagement-wise split with Form 26AS cross-check</td></tr>
                            <tr><td>Section 40A(3) labour cash</td><td>Bulk-cash payouts above Rs 1 lakh daily</td><td>Rs 10K per-person-per-day register + UPI migration</td></tr>
                            <tr><td>Sub-contractor inclusion test</td><td>Always included or always excluded</td><td>Scope-based test per Section 43CB</td></tr>
                            <tr><td>OSH Code and BoCW Cess</td><td>Wage register incomplete; cess reconciliation skipped</td><td>Inspection-ready register; cess as Section 37 expense</td></tr>
                            <tr><td>Tax audit readiness</td><td>Form 3CD prepared at last moment</td><td>Multi-project audit memo with clauses 13/14/18/21/31/34</td></tr>
                            <tr><td>Scrutiny defence</td><td>Reactive</td><td>Pre-filed memo on POCM, TDS chain, 44AD/44ADA, Sec 40A(3)</td></tr>


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
                
                
                <p>Construction firm filers often need adjacent compliance work. We bundle the following services with Construction Firm ITR engagements:</p>
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/itr-for-business">ITR for Business</a> - sole proprietorship, partnership firm, LLP, HUF, and AOP/BOI ITR filing</li>
                    <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / OPC / Public Ltd via ITR-6 with concessional rates</li>
                    <li><a href="/tax-audit">Tax Audit</a> - Form 3CA-3CD or 3CB-3CD audit support under Section 44AB</li>
                    <li><a href="/construction-and-real-estate-accounting-services">Construction and Real Estate Accounting Services</a> - full-stack monthly accounting for builders and contractors</li>
                    <li><a href="/payroll-services-for-construction-real-estate-industry">Payroll Services for Construction and Real Estate</a> - migrant labour payroll, OSH Code 2020 compliance, BoCW Cess</li>
                    <li><a href="/tds-return">TDS Return Filing</a> - Form 26Q quarterly filing for Section 194C sub-contractor TDS</li>
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
                
                
                <p><strong>Governing Acts and Sections:</strong></p>
                <ul>
                    <li><strong>Income-tax Act 1961:</strong> Sections 28-44 (PGBP charging and computation); 43CB (POCM); 44AA (books); 44AB (audit); 44AD/44ADA (presumptive); 194C (TDS); 40(a)(ia) (TDS default); 40A(3) (cash payment); 139(1) (return filing); 234A/B/C (interest); 234F (late fee); 270A (penalty)</li>
                    <li><strong>ICDS-III Construction Contracts</strong> (CBDT Notification 87/2016 dated 29 September 2016) - stage of completion methodology</li>
                    <li><strong>Finance Act 2018</strong> - inserted Section 43CB w.e.f. AY 2017-18 mandating POCM</li>
                    <li><strong>Finance Act 2023</strong> - revised Section 44AD limit to Rs 3 crore (digital) and Section 44ADA limit to Rs 75 lakh (digital)</li>
                    <li><strong>CGST Act 2017 / IGST Act 2017 / SGST Acts</strong> - works contract HSN/SAC 9954, 12 percent / 18 percent rates</li>
                    <li><strong>BoCW Cess Act 1996</strong> - 1 percent cess on cost of construction</li>
                    <li><strong>OSH Code 2020</strong> (Code on Occupational Safety, Health and Working Conditions) - subsumes Inter-State Migrant Workmen Act 1979</li>
                </ul>
                <p><strong>Penalty Provisions:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A / 234B / 234C</strong> interest: 1 percent per month on tax shortfall and advance tax default</li>
                    <li><strong>Section 271B</strong> tax audit default: 0.5 percent of turnover or Rs 1,50,000 (whichever lower)</li>
                    <li><strong>Section 270A</strong> under-reporting / mis-reporting: 50 percent / 200 percent of tax sought to be evaded</li>
                    <li><strong>Section 40A(3)</strong>: 100 percent disallowance on cash payment above Rs 10,000 per person per day</li>
                    <li><strong>Section 40(a)(ia)</strong>: 30 percent disallowance for Section 194C TDS default on sub-contractor expense</li>
                    <li><strong>Section 271C</strong>: penalty equal to TDS not deducted</li>
                    <li><strong>Section 271H</strong>: Rs 10,000 to Rs 1,00,000 penalty for incorrect TDS return</li>
                </ul>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Regulator</th>
                                <th>Statute</th>
                                <th>Key Form / Approval</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>CBDT (Central Board of Direct Taxes)</td><td>Income-tax Act 1961</td><td>ITR-3 / ITR-4 / ITR-5 / ITR-6; Form 3CD audit; Form 26Q (TDS)</td></tr>
                            <tr><td>CBIC (Central Board of Indirect Taxes and Customs)</td><td>CGST Act 2017</td><td>GSTR-1, GSTR-3B, GSTR-9; works contract HSN/SAC 9954; 12 percent / 18 percent rates</td></tr>
                            <tr><td>BoCW Welfare Board (state-level)</td><td>BoCW Cess Act 1996</td><td>1 percent cess on cost of construction; quarterly cess return</td></tr>
                            <tr><td>Ministry of Labour and Employment</td><td>OSH Code 2020 (subsumes Inter-State Migrant Workmen Act 1979)</td><td>Wage register, attendance register, employment letter, BoCW worker registration</td></tr>
                            <tr><td>EPFO</td><td>EPF and MP Act 1952</td><td>EPF for permanent workers above Rs 15,000 wage; UAN allotment</td></tr>
                            <tr><td>ESIC</td><td>ESI Act 1948</td><td>ESI for workers earning up to Rs 21,000 per month</td></tr>
                            <tr><td>MCA (Ministry of Corporate Affairs)</td><td>Companies Act 2013 / LLP Act 2008</td><td>AOC-4, MGT-7 for Pvt Ltd; Form 11 and Form 8 for LLP</td></tr>
                            <tr><td>Section 28 ITA 1961</td><td>Charging section for PGBP</td><td>All construction business income reportable under PGBP head</td></tr>
                            <tr><td>Section 43CB ITA 1961 (Finance Act 2018)</td><td>Mandatory POCM for construction and service contracts</td><td>w.e.f. AY 2017-18; Cuttack ITAT confirmed</td></tr>
                            <tr><td>Section 194C ITA 1961</td><td>TDS on contractor and sub-contractor</td><td>1 percent (individual/HUF), 2 percent (others), 20 percent (no PAN); Rs 30K single / Rs 1L aggregate</td></tr>
                            <tr><td>Section 194C(6) ITA 1961</td><td>Transporter exemption</td><td>No TDS if 10 or fewer goods carriages and PAN with declaration</td></tr>
                            <tr><td>Section 40A(3) ITA 1961</td><td>Cash payment limit</td><td>Rs 10,000 per person per day (Rs 35,000 transporters); 100 percent disallowance</td></tr>
                            <tr><td>Section 40(a)(ia) ITA 1961</td><td>TDS default disallowance</td><td>30 percent of expenditure disallowed if Section 194C TDS not deducted or not deposited</td></tr>
                            <tr><td>Section 44AD ITA 1961</td><td>Presumptive works contractor</td><td>8 percent / 6 percent deemed profit; Rs 2 cr / Rs 3 cr digital limit; Resident Individual/HUF/Firm</td></tr>
                            <tr><td>Section 44ADA ITA 1961</td><td>Presumptive consultancy</td><td>50 percent deemed profit; Rs 50 lakh / Rs 75 lakh digital limit; Resident Individual/Firm only</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit threshold</td><td>Rs 1 crore turnover (Rs 10 crore if 95 percent non-cash); Form 3CD by 30 September 2026</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax e-Filing Portal - <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> (CBDT - ITR utilities, Section 43CB / 194C FAQ); GST Portal - <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> (CBIC - works contract returns); Ministry of Labour and Employment - <a href="https://labour.gov.in/" target="_blank" rel="noopener">labour.gov.in</a> (OSH Code 2020 / BoCW Cess).</p>


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
                    <p class="faq-expanded__lead">Common questions on Section 43CB POCM mandate, ITR form selection, Section 194C TDS rates, Section 44AD versus 44ADA classification, mobilization advance treatment, and Section 40A(3) labour cash limits for AY 2026-27 (FY 2025-26).</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a construction contractor file?</h3>
                        <div class="faq-expanded__a"><p>A private limited or listed construction company files ITR-6. An LLP or partnership firm contractor files ITR-5 (LLP cannot use Section 44AD). A proprietor works contractor with regular books files ITR-3, while one opting for Section 44AD presumptive (up to Rs 2 crore turnover, Rs 3 crore if 95 percent receipts and payments are non-cash) files ITR-4. An architectural or engineering consultant under Section 44ADA (Rs 50 lakh / Rs 75 lakh digital) also files ITR-4. HUFs are eligible for Section 44AD but NOT Section 44ADA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is POCM compulsory for construction contracts?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 43CB inserted by Finance Act 2018 w.e.f. AY 2017-18 mandates the Percentage of Completion Method for both construction contracts and service contracts. The Cuttack ITAT has confirmed mandatory application. Unlike real estate developers (who can defend Project Completion Method per Bangalore Tribunal in Corporate Leisure and Property Development), construction CONTRACTORS providing services to clients have no PCM option. Only short-duration service contracts under 90 days may use a straight-line or project completion approach under Section 43CB.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the TDS rate under Section 194C for sub-contractors?</h3>
                        <div class="faq-expanded__a"><p>Section 194C TDS is 1 percent if the sub-contractor is an individual or HUF, and 2 percent for other entities (firm, LLP, company). The rate rises to 20 percent if PAN is not furnished. TDS applies when a single payment exceeds Rs 30,000 OR when aggregate payments to one sub-contractor in a financial year exceed Rs 1,00,000. Form 26Q is filed quarterly, and Form 16A is issued to each sub-contractor. Failure to deduct triggers Section 40(a)(ia) 30 percent disallowance of the sub-contractor expense.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can a construction contractor use Section 44AD presumptive scheme?</h3>
                        <div class="faq-expanded__a"><p>Yes, if the contractor is a resident individual, HUF, or partnership firm (other than LLP) with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash receipts and 6 percent on digital. The 5-year continuity rule under Section 44AD(4) applies - opting out below the deemed rate triggers a 5-year lock-out. LLPs and companies are NOT eligible. For larger contractors above Rs 3 crore turnover, regular books and Section 43CB POCM are mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is mobilization advance treated under Section 43CB?</h3>
                        <div class="faq-expanded__a"><p>Mobilization advance paid by the client at project commencement is treated as a LIABILITY in the contractor's books, NOT as revenue. Revenue is recognised progressively as work advances per the Section 43CB POCM and ICDS-III stage of completion. However, the client deducts Section 194C TDS at the time of paying the advance - creating a cash flow situation where TDS is locked in Form 26AS while revenue recognition is deferred. Reconciliation tracks the advance as liability, the TDS in Form 26AS, and the revenue in POCM separately so the right TDS credit is claimed in the right year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the cash payment limit for labour wages?</h3>
                        <div class="faq-expanded__a"><p>Section 40A(3) of the Income-tax Act 1961 caps cash payment to a single person in a single day at Rs 10,000 (Rs 35,000 for transporters under Rule 6DD). Any excess is 100 percent disallowed as expenditure. For construction sites paying daily-wage labour, this means each worker's wage in a day must stay within Rs 10,000 if paid in cash - or be settled via UPI, NEFT, RTGS, or account-payee cheque. Rule 6DD provides limited exceptions including remote villages without bank facilities. The limit was reduced from Rs 20,000 to Rs 10,000 by Finance Act 2017 w.e.f. AY 2018-19.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should an architectural consultant use Section 44ADA or Section 44AD?</h3>
                        <div class="faq-expanded__a"><p>An architectural consultant who provides DESIGN and structural advice without executing works should use Section 44ADA (50 percent deemed profit, Rs 50 lakh / Rs 75 lakh digital limit). A WORKS contractor who builds, supplies, or installs should use Section 44AD (8 percent / 6 percent deemed profit, Rs 2 crore / Rs 3 crore digital limit). For mixed firms doing both design and execution, the engagement should be split - design fees under Section 44ADA and execution turnover under Section 44AD - with separate billing. Form 26AS cross-checks Section 194J (10 percent professional TDS) against Section 194C (1 / 2 percent works TDS) to validate the split.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is sub-contractor income included in main contractor revenue?</h3>
                        <div class="faq-expanded__a"><p>Default rule under Section 43CB read with ICDS-III: sub-contractor income is included in main contractor revenue. Carve-out: if the sub-contractor is responsible for a specific identifiable portion of the contract under a back-to-back arrangement (with separate scope, milestones, payment, and risk allocation), that portion is excluded from main contractor revenue and shown only in the sub-contractor's books. The treatment is determined by contract terms - documentation of scope and risk allocation in the sub-contract deed decides the inclusion or exclusion.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: Which ITR for a Pvt Ltd contractor?</strong><br>A: ITR-6, due 31 October 2026 if audited.</p>
                    <p><strong>Q: POCM mandatory for contractors?</strong><br>A: Yes - Section 43CB w.e.f. AY 2017-18. No PCM option (unlike developers).</p>
                    <p><strong>Q: Section 194C TDS rate?</strong><br>A: 1 percent individual/HUF, 2 percent others. Rs 30K single / Rs 1L aggregate threshold.</p>
                    <p><strong>Q: Section 194C(6) transporter exemption?</strong><br>A: No TDS if 10 or fewer goods carriages + PAN + declaration.</p>
                    <p><strong>Q: Section 40A(3) labour cash limit?</strong><br>A: Rs 10,000 per person per day (Rs 35,000 transporters). 100 percent disallowance.</p>
                    <p><strong>Q: Section 44AD vs Section 44ADA?</strong><br>A: 44AD = works execution (6 / 8 percent, Rs 3 cr digital). 44ADA = consultancy (50 percent, Rs 75 lakh digital).</p>
                    <p><strong>Q: Mobilization advance treatment?</strong><br>A: Liability per ICDS-III, not revenue. TDS still deducted upfront by client.</p>
                    <p><strong>Q: BoCW Cess rate?</strong><br>A: 1 percent on cost of construction. Allowable as expense under Section 37(1).</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Construction Firm Deadlines for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Three deadlines to lock for construction firms for AY 2026-27 (FY 2025-26): <strong>(1) Form 3CD Tax Audit Report - 30 September 2026</strong>; <strong>(2) ITR-3 / ITR-4 non-audit - 31 August 2026</strong> (extended from 31 July 2026); <strong>(3) ITR-5 / ITR-6 audit - 31 October 2026</strong>. Late filing triggers Section 234F fee, Section 234A interest, loss of carry-forward of business losses, Section 271B audit penalty up to Rs 1.5 lakh, plus the 30 percent disallowance under Section 40(a)(ia) on sub-contractor TDS default and 100 percent disallowance under Section 40A(3) on labour cash above Rs 10,000. Section 271C and Section 271H separately penalise TDS deduction and return-filing failures. BoCW Welfare Cess mismatches with project cost ledger may trigger labour department inquiry.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Construction Firm ITR Right - Talk to a Contractor-Savvy CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>ITR for construction firms is a multi-statute filing exercise. Section 43CB mandates Percentage of Completion Method without the developer flexibility of PCM. ICDS-III sets the stage-of-completion mechanics and the mobilization-advance-as-liability rule. Section 194C runs a TDS chain from client to main contractor to sub-contractor, with Section 40(a)(ia) penalising any break in the chain. Section 40A(3) caps labour cash at Rs 10,000 per worker per day - a constant pressure point on remote sites.</p>
                    <p>The Section 44AD versus Section 44ADA call decides whether your firm is taxed on 6 / 8 percent or 50 percent of receipts. OSH Code 2020 and BoCW Cess add labour-law and welfare-cess layers. Patron Accounting brings 15+ years of tax practice and 300+ contractor and sub-contractor engagements to file your return on time, defend it under scrutiny, and structure your tax position for the years ahead.</p>
                    <p style="font-weight:600;">Free first consultation. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - we tell you the optimal ITR form (ITR-3 vs ITR-4 vs ITR-5 vs ITR-6), Section 43CB POCM applicability, Section 194C TDS chain readiness, and Section 44AD versus 44ADA classification BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%2043CB%20POCM%20and%20Section%20194C%20TDS%20chain%20for%20my%20construction%20firm%20ITR." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Construction%20Firms%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Construction%20Firms%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Construction Firm ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Construction firm ITR served from our four offices in Pune, Mumbai, Delhi, and Gurugram - covering civil, MEP, electrical, EPC, JV, and consultancy firms across India.</p>
 
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Construction Firm ITR Filing By City</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">Local CA support for civil contractors, MEP firms, EPC contractors, and consultants</div>
                <div class="pa-city-grid">
                    <a href="/itr-for-construction-firms/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-construction-firms/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-construction-firms/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/itr-for-construction-firms/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related Construction and Tax Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end direct tax and accounting compliance for construction firms</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/construction-and-real-estate-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Construction Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after Section 43CB judicial development, Section 194C rate or threshold change, Section 44AD or 44ADA limit revision, Section 40A(3) cash limit revision, ICDS-III revision, or BoCW Welfare Cess rate change. Citation Sources: Income-tax Act 1961 (Sections 28-44, 43CB, 44AA, 44AB, 44AD, 44ADA, 194C, 40A(3), 40(a)(ia), 234F, 270A, 271B, 271C, 271H); ICDS-III Construction Contracts (CBDT Notification 87/2016 dated 29 September 2016); Finance Act 2018 (Section 43CB insertion); Finance Act 2023 (Section 44AD/44ADA digital limits); CGST Act 2017; BoCW Cess Act 1996; Code on Occupational Safety, Health and Working Conditions, 2020.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
        return { valid: false, message: 'Enter a valid phone number (7–15 digits)' };
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection