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
    <title>ITR for Doctors: 44ADA + CA Filing</title>
    <meta name="description" content="Doctor ITR filing in India. ITR-4 with Section 44ADA presumptive (50%) or ITR-3 for clinic books and hospital salary income. Starting Rs 1,499.">
    <link rel="canonical" href="/itr-for-doctors">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Doctors 2026: 44ADA + CA Filing | Patron Accounting">
    <meta property="og:description" content="Doctor ITR filing in India. ITR-4 with Section 44ADA presumptive (50%) or ITR-3 for clinic books and hospital salary income. Starting Rs 1,499.">
    <meta property="og:url" content="/itr-for-doctors/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-doctors-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Doctors 2026: 44ADA + CA Filing | Patron Accounting">
    <meta name="twitter:description" content="Doctor ITR filing in India. ITR-4 (44ADA) or ITR-3 (clinic books). Starting Rs 1,499.">
    <meta name="twitter:image" content="/images/itr-for-doctors-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/itr-for-doctors#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Doctors", "item": "/itr-for-doctors" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/itr-for-doctors#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should a practising doctor file in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A practising doctor files ITR-4 if opting for Section 44ADA presumptive taxation (gross receipts up to Rs 75 lakh with 95 percent digital receipts). Otherwise ITR-3 is used with regular books of accounts and depreciation. ITR-1 and ITR-2 are not allowed when professional income exists - they trigger Section 139(9) defective-return notices. Doctors with only hospital salary and no private practice may file ITR-1 (if total income up to Rs 50 lakh) or ITR-2."
              }
            },
            {
              "@type": "Question",
              "name": "Can a doctor working in a hospital opt for Section 44ADA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 44ADA applies only to professional income, not to salary. A doctor with hospital salary under Section 192 cannot apply 44ADA to that salary. If the same doctor also runs a private practice or earns consultancy fees under Section 194J, the professional component can be filed under 44ADA in ITR-4 or ITR-3. Salary is reported under the Salary head and the professional receipts under PGBP with 50 percent deemed profit."
              }
            },
            {
              "@type": "Question",
              "name": "Is tax audit mandatory for doctors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tax audit under Section 44AB applies if professional gross receipts exceed Rs 75 lakh in a financial year. It also applies if a doctor opts out of Section 44ADA, declares profit below 50 percent, and total income exceeds basic exemption. The audit report is filed in Form 3CB / 3CD by 30 September 2026 and ITR-3 by 31 October 2026. Failure attracts Section 271B penalty at 0.5 percent of receipts or Rs 1.5 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What is the depreciation rate on medical equipment for doctors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Medical equipment is generally classified under Plant and Machinery with 15 percent depreciation on the written-down value (Block III, Appendix I to the Income Tax Rules, 1962). Specified life-saving medical equipment is eligible for 40 percent depreciation - typical items include defibrillators, heart-lung machines, cobalt therapy units. Depreciation can only be claimed under ITR-3 with regular books; Section 44ADA does not allow separate depreciation."
              }
            },
            {
              "@type": "Question",
              "name": "Are doctors required to charge GST on consultations?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Healthcare services provided by a clinical establishment, an authorised medical practitioner, or paramedics are exempt from GST under entry 74 of Notification 12/2017-Central Tax (Rate). Doctor consultations, hospital admissions, diagnostics, and basic clinical services do not attract GST. GST applies to non-healthcare income such as cosmetic treatments without medical necessity, retail pharmacy sales, and training fees. Aggregate turnover threshold is Rs 20 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 26QB and when does a doctor have to file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 26QB was the challan-cum-statement under Section 194-IA used to deposit 1 percent TDS on the purchase of immovable property worth Rs 50 lakh or more from a resident seller. The buyer files within 30 days from the end of the month of deduction; no TAN is required. From 1 April 2026, Form 26QB is replaced by Form 141 Schedule B under Section 393(1) of the Income Tax Act, 2025. Doctors who buy clinic premises or flats above Rs 50 lakh must file this challan."
              }
            },
            {
              "@type": "Question",
              "name": "Can a partnership clinic file under Section 44ADA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A partnership firm (other than LLP) carrying medical profession can avail Section 44ADA at the firm level. The firm files ITR-5 declaring 50 percent of gross receipts as deemed profit. Partners separately file ITR-3 reporting share of profit (exempt under Section 10(2A)) plus remuneration and interest on capital under Section 28(v). LLPs are explicitly excluded - LLPs must file ITR-5 with regular computation."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between TDS under Section 192 and Section 194J for doctors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 192 applies when there is an employer-employee relationship - the hospital deducts TDS at slab rates and issues Form 16. Section 194J applies when the relationship is principal-to-principal - 10 percent flat TDS with a Rs 50,000 annual threshold per payer (FY 2025-26), Form 16A. Bombay HC in CIT v Dr Balabhai Nanavati Hospital confirmed consultant doctors with no fixed salary fall under Section 194J. The actual nature of engagement, not the contract title, decides the section."
              }
            }
          ],
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30"
        },
        {
          "@type": "Service",
          "@id": "/itr-for-doctors#service",
          "name": "ITR Filing for Doctors",
          "alternateName": ["Doctor Income Tax Return Filing", "44ADA ITR for Doctors", "Medical Practitioner Tax Filing", "Hospital Doctor ITR Filing"],
          "url": "/itr-for-doctors",
          "description": "CA-led income tax return filing for practising doctors in India. Section 44ADA presumptive returns in ITR-4, regular books in ITR-3, hospital salary plus consultancy reconciliation, tax audit under Section 44AB, and Form 141 / Form 26QB property TDS filing for AY 2026-27.",
          "serviceType": "Income Tax Return Filing",
          "category": "Direct Tax Compliance",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "audience": {
            "@type": "Audience",
            "audienceType": "Practising Doctors, Medical Professionals, Hospital Consultants, Locum Doctors, Partnership Clinics, NRI Doctors with India Income, Pathology Lab Owners, Healthcare Practitioners"
          },
          "about": [
            { "@type": "Thing", "name": "Income Tax Return", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_return_(India)" },
            { "@type": "Thing", "name": "Income Tax Act, 1961", "sameAs": "https://en.wikipedia.org/wiki/Income_Tax_Act,_1961" },
            { "@type": "Thing", "name": "Healthcare in India", "sameAs": "https://en.wikipedia.org/wiki/Healthcare_in_India" }
          ],
          "termsOfService": "/terms",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Doctor ITR Filing Packages",
            "itemListElement": [
              { "@type": "Offer", "name": "ITR-4 Section 44ADA Presumptive", "price": "1499", "priceCurrency": "INR", "url": "/itr-for-doctors", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "ITR-3 with Regular Books (Rule 6F)", "price": "4999", "priceCurrency": "INR", "url": "/itr-for-doctors", "availability": "https://schema.org/InStock" },
              { "@type": "Offer", "name": "ITR-3 plus Tax Audit Section 44AB", "price": "14999", "priceCurrency": "INR", "url": "/itr-for-doctors", "availability": "https://schema.org/InStock" }
            ]
          },
          "mainEntityOfPage": "/itr-for-doctors"
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
                        ITR for Doctors in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Form 16/16A, Form 26AS, AIS, clinic receipts, equipment invoices, Form 3C case register</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,499 for ITR-4 (Section 44ADA); Rs 4,999 for ITR-3 with regular books and depreciation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Specified profession under Section 44AA(1); Rs 75 lakh receipts ceiling for 44ADA (95 percent digital)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2 to 5 working days; 31 August 2026 for non-audit returns AY 2026-27 (FY 2025-26)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Doctors%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Doctors%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20doctor%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Doctors'/>
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
                                
<option value="itr-for-doctors" selected>ITR for Doctors</option>
<option value="itr-filing-for-freelancers-professionals">ITR for Professionals / Freelancers</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="tds-return-filing">TDS Return Filing</option>
<option value="payroll-processing-for-the-healthcare-industry">Healthcare Payroll Services</option>
<option value="itr-for-property-sale">ITR for Property Sale (Form 26QB)</option>
<option value="tax-planning-services">Tax Planning Services</option>
<option value="income-tax-notice-for-defective-return">Defective Return Notice (Sec 139(9))</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I had Rs 92 lakh of consultancy receipts last year and was told to file under 44ADA. Patron walked me through the math - my actual depreciation on a new echo machine and rent on a 1,200 sqft clinic made regular ITR-3 with audit cheaper by Rs 2.8 lakh. They handled the audit, books, and filing in 12 days. Saved real money.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Rajesh</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Cardiologist, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Hospital salary in the morning, private practice in the evening. My previous CA filed ITR-1 for two years and I got a defective-return notice. Patron filed ITR-3, reconciled both 192 and 194J TDS, and got my refund within 21 days. They also flagged that I was missing Form 26QB on a flat I bought - filed it with interest correctly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Priya</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Paediatrician, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our 4-doctor partnership pathology lab in Gurugram had an LLP confusion - the previous accountant claimed 44ADA which is not allowed for LLPs. Patron filed corrected ITR-5 with regular books, prepared Form 3CB / 3CD audit, and saved us a Section 271B penalty. Twelve consecutive ITRs filed since FY 2019-20. Reliable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DA</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Arjun K</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Diagnostic Lab, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div></div>

<div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">NRI doctor, US tax resident with India consultancy income from a Delhi hospital. Patron handled DTAA, Section 90 relief, and Section 195 TDS reconciliation. Computed AY 2025-26 ITR-3 in 9 days. Coordinated with my US CPA on Form 1099 reporting. Clean engagement, professional CA team.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Mira S</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Radiologist (NRI), Delhi practice</div>
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
                    <p>Real doctors across India who saved tax with 44ADA decision modelling, Form 26QB compliance, and CA-signed ITR-3 with regular books.</p>
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
            <h2 class="section-title">Doctor ITR Overview</h2>
            <div class="content-text">
                <p><strong>TL;DR:</strong> Practising doctors in India are specified professionals under Section 44AA(1). File ITR-4 with Section 44ADA presumptive taxation (50 percent deemed profit, gross receipts up to Rs 75 lakh with 95 percent digital), or ITR-3 with regular books of accounts. Hospital-employed doctors with private practice add Section 192 salary plus Section 194J consultancy in ITR-3. Tax audit kicks in above Rs 75 lakh receipts under Section 44AB. Filing deadline 31 August 2026 for AY 2026-27 non-audit returns.</p>

                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Income Tax Act, 1961 (transactions till 31 March 2026); Income Tax Act, 2025 (from 1 April 2026)</td></tr>
                        <tr><td>Applicable To</td><td>Resident individual doctors, medical partnership firms (non-LLP), HUF carrying medical profession</td></tr>
                        <tr><td>ITR Form</td><td>ITR-4 (44ADA presumptive), ITR-3 (regular books), ITR-2 (only salary, no practice)</td></tr>
                        <tr><td>Cost</td><td>Starting Rs 1,499 (44ADA) and Rs 4,999 (ITR-3 with books) at Patron Accounting</td></tr>
                        <tr><td>Penalty</td><td>Rs 5,000 late filing under Section 234F; Rs 25,000 for non-maintenance of books under Section 271A; Rs 1.5 lakh or 0.5 percent of receipts for tax audit failure under Section 271B</td></tr>
                        <tr><td>Form / Portal</td><td>incometax.gov.in e-filing portal; ITR-4 (Sugam) for 44ADA; ITR-3 for books</td></tr>
                        <tr><td>Authority</td><td>Central Board of Direct Taxes (CBDT); Income Tax Department</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;">A doctor's gross receipts from private practice fall under "Profits and Gains from Business or Profession" (PGBP). Salary from a hospital with employer-employee relationship falls under "Income from Salary". Both heads can be combined in a single return using ITR-3 (regular books) or ITR-4 SUGAM (44ADA presumptive). Patron Accounting has filed over 1,200 doctor ITRs since 2019 across Pune, Mumbai, Delhi, and Gurugram.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS ITR FOR CAPITAL GAINS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Is ITR for Doctors</h2>
            <div class="content-text">
                <p>ITR for doctors means filing an Income Tax Return that correctly reports a medical practitioner's income from profession, hospital salary, consultancy fees, and other heads under the Income Tax Act, 1961 read with Section 44AA(1). The Act treats medical practitioners as a "specified profession" - a designation that unlocks the 50 percent presumptive scheme of Section 44ADA but also imposes Rule 6F record-keeping that no other profession faces.</p>

                <p>A practising physician may simultaneously draw a Section 192 salary from a hospital, raise Section 194J consultancy bills at a private nursing home, run a clinic on the side, and own a partnership pathology lab - all in a single financial year. Selecting the right ITR form (ITR-2, ITR-3, ITR-4, or ITR-5 with partner ITR-3) is the first decision; Section 44ADA versus regular books with depreciation is the second; AIS-26AS reconciliation is the third. Patron Accounting handles all three. <a href="https://en.wikipedia.org/wiki/Healthcare_in_India" target="_blank" rel="noopener nofollow">Read more about Healthcare in India on Wikipedia</a> for context on the regulatory environment.</p>

                <h3 style="margin-top:24px;">Key Terms Doctors Must Know</h3>
                <p><strong>Specified Profession:</strong> Defined under Section 44AA(1) and Rule 6F. Includes legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration, film artists, authorised representatives, company secretaries, and information technology. Doctors fall here.</p>

                <p><strong>Section 44ADA:</strong> Presumptive taxation scheme for specified professionals. 50 percent of gross receipts is deemed income; no books required; no tax audit; available to resident individuals and partnership firms (non-LLP) only.</p>

                <p><strong>Section 44AA + Rule 6F:</strong> Mandates books of accounts for specified professionals where gross receipts exceeded Rs 1.5 lakh in any of the three preceding years. Doctors must additionally maintain a daily case register in Form 3C and an inventory of drugs and consumables.</p>

                <p><strong>Section 192 vs Section 194J:</strong> Section 192 governs TDS on salary (slab rate, employer-employee relationship, Form 16). Section 194J governs TDS on professional fees at 10 percent with a Rs 50,000 threshold (FY 2025-26), Form 16A. Hospital relationships drive the choice.</p>

                <p><strong>Form 26QB / Form 141 Schedule B:</strong> Challan-cum-statement for TDS on property purchase (Section 194-IA, 1 percent of consideration where value is Rs 50 lakh or more). Form 26QB applies for transactions where the earlier of payment or credit is on or before 31 March 2026; Form 141 Schedule B under Section 393(1) of the Income Tax Act, 2025 applies from 1 April 2026.</p>
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
                <p>A doctor whose total income (before Chapter VI-A deductions) exceeds the basic exemption limit of Rs 2.5 lakh under the old regime (Rs 4 lakh under the new regime for AY 2026-27) must file an ITR under Section 139(1). The applicable form depends on the income mix.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Doctor Profile</th><th>Recommended ITR</th><th>Reason</th></tr></thead>
                    <tbody>
                        <tr><td>Salaried only at hospital (Form 16, no practice)</td><td>ITR-1 / ITR-2</td><td>No business or professional income; ITR-1 if income up to Rs 50 lakh</td></tr>
                        <tr><td>Pure private practice / clinic, receipts up to Rs 75 lakh</td><td>ITR-4 (44ADA)</td><td>Specified profession; presumptive 50 percent scheme available</td></tr>
                        <tr><td>Hospital salary (192) + consultancy (194J)</td><td>ITR-3</td><td>Mix of salary and PGBP; ITR-1/2 not allowed</td></tr>
                        <tr><td>Private practice + capital gains over Rs 1.25 lakh u/s 112A</td><td>ITR-3</td><td>ITR-4 disqualified by capital gains exceeding LTCG exemption</td></tr>
                        <tr><td>Receipts above Rs 75 lakh</td><td>ITR-3 + Tax Audit</td><td>Section 44AB tax audit mandatory; cannot use 44ADA</td></tr>
                        <tr><td>Partnership clinic / pathology lab (firm, not LLP)</td><td>ITR-5 (firm) + ITR-3 (partner)</td><td>Firm files ITR-5; each partner reports share of profit and remuneration in ITR-3</td></tr>
                        <tr><td>LLP doctor partnership</td><td>ITR-5 + ITR-3</td><td>LLP NOT eligible for 44ADA per Section 44ADA(1) read with Section 2(23)</td></tr>
                        <tr><td>NRI doctor with India income</td><td>ITR-2 / ITR-3</td><td>44ADA scheme is only for residents; NRIs file under regular provisions</td></tr>
                        <tr><td>Director in a healthcare Pvt Ltd</td><td>ITR-3</td><td>Directorship disqualifies ITR-1, ITR-2 if income mix, ITR-4</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Statutory due dates AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li>31 August 2026 - non-audit returns under Section 139(1)</li>
                    <li>31 October 2026 - tax-audit returns (Section 44AB applicable cases)</li>
                    <li>30 September 2026 - tax audit report submission deadline</li>
                    <li>31 December 2026 - belated return (Section 139(4)) with Section 234F late fee of Rs 5,000</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Services for Doctors at Patron</h2>
            <div class="content-text">
                <p>Six end-to-end deliverables for medical professionals - covering 44ADA presumptive, regular ITR-3 with books, hospital salary plus consultancy reconciliation, tax audit, and property TDS compliance.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Service</th><th>Starting Price</th><th>Inclusions</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 (Section 44ADA Presumptive)</td><td>Rs 1,499</td><td>Form 26AS / AIS check, ITR-4 filing, e-verification, computation memo</td></tr>
                        <tr><td>ITR-3 with Regular Books</td><td>Rs 4,999</td><td>Books prep (cash book + ledger + Form 3C + inventory), depreciation schedule, ITR-3 filing</td></tr>
                        <tr><td>ITR-3 + Tax Audit (Section 44AB)</td><td>Rs 14,999</td><td>Books, depreciation schedule, Form 3CB / 3CD audit, ITR-3 filing</td></tr>
                        <tr><td>Hospital Salary + Consultancy ITR-3</td><td>Rs 3,499</td><td>Form 16 + Form 16A reconciliation, ITR-3, AIS match</td></tr>
                        <tr><td>Form 141 Schedule B (or Form 26QB) Filing</td><td>Rs 1,499 per transaction</td><td>Property TDS challan filing, Form 132/16B issuance, seller acknowledgement</td></tr>
                        <tr><td>Partnership Clinic ITR-5 + Partner ITR-3</td><td>Rs 9,999</td><td>Firm ITR-5, partner ITR-3 filings up to 3 partners, capital account reconciliation</td></tr>
                    </tbody>
                </table>
                </div>

                <h3 style="margin-top:24px;">What You Receive</h3>
                <p>Every Patron engagement closes with this deliverable pack:</p>
                <ul>
                    <li>Filed ITR (acknowledgement and ITR-V) plus a CA-signed computation sheet</li>
                    <li>AIS-26AS-Form 16 reconciliation memo with TDS credits matched</li>
                    <li>44ADA vs regular-books decision memo with break-even computation</li>
                    <li>Books of accounts pack (cash book, ledger, Form 3C case register sample, medicine inventory format) for Rule 6F applicability</li>
                    <li>Depreciation schedule covering clinic equipment, computers, vehicles</li>
                    <li>Quarterly advance-tax reminder for the next financial year</li>
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
            <h2 class="section-title">How Patron Files Your Doctor ITR (7 Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A 7-step end-to-end process from clinic receipt collection to ITR e-verification and refund tracking - typically 2 to 5 working days for ITR-4 (44ADA) and 5 to 7 days for ITR-3 with books.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Document Collection</h3>
        <p class="step-description">We share a doctor-specific checklist - PAN, Aadhaar, Form 16 (if hospital-employed), Form 16A (consultancy clients), bank statements, clinic receipt register, capital-asset register (medical equipment), property purchase deed if Section 194-IA TDS was deducted.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Doctor Checklist</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 / 16A</span>
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
        <h3 class="step-title">Income Classification</h3>
        <p class="step-description">We separate income into salary (Section 192), profession (PGBP under Section 28), capital gains, house property, and other sources. This determines ITR-2 vs ITR-3 vs ITR-4 selection and prevents the most common defective-return cause.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 192 vs 194J</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR Form Selection</span>
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
        <h3 class="step-title">Section 44ADA Suitability Test</h3>
        <p class="step-description">We compute presumptive income (50 percent of gross receipts) and compare against actual profit after allowable expenses including Section 32 depreciation. If actual profit exceeds 50 percent, presumptive saves tax; if expenses are heavy, regular books win. We share the break-even memo.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 44ADA vs Books</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Break-even Memo</span>
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
        <h3 class="step-title">Books of Accounts (where applicable)</h3>
        <p class="step-description">For Rule 6F applicability (gross receipts above Rs 1.5 lakh in any of 3 preceding years), we prepare cash book, journal, ledger, daily case register in Form 3C, and stock inventory of medicines per Rule 6F(3) of the Income Tax Rules, 1962.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 3C Register</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rule 6F(3) Inventory</span>
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
        <h3 class="step-title">Tax Computation</h3>
        <p class="step-description">Apply Chapter VI-A deductions - Section 80C up to Rs 1.5 lakh, Section 80D health insurance, Section 80E education loan interest (MBBS, MD), Section 80G donations, Section 24(b) home loan interest. Choose old vs new regime per Section 115BAC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Chapter VI-A</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime Choice 115BAC</span>
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
        <h3 class="step-title">Pre-File Validation</h3>
        <p class="step-description">AIS-26AS-AIS-TIS reconciliation prevents Section 143(1) defective-return notices. We check TDS credits under Sections 192, 194J, 194-IA, 194I, and 194Q against your books to ensure full credit and zero refund delay.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS-26AS Match</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Defective Return Block</span>
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
        <h3 class="step-title">E-Filing and Acknowledgement</h3>
        <p class="step-description">ITR uploaded on incometax.gov.in. E-verification via Aadhaar OTP, net banking, or digital signature within 30 days. ITR-V and computation memo delivered to your email and WhatsApp.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> incometax.gov.in</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-Verify in 30 Days</span>
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
            <h2 class="section-title">Document Checklist for Doctors</h2>
            <div class="content-text">
                <p>Complete checklist organised by income type. Patron's onboarding form maps each document to the correct ITR schedule.</p>

                <h3 style="margin-top:18px;">A. Universal Documents</h3>
                <ul>
                    <li>PAN card and Aadhaar (linked)</li>
                    <li>Bank account details (IFSC, account number) for refund</li>
                    <li>Form 26AS, AIS, and TIS downloaded from the income tax portal</li>
                </ul>

                <h3 style="margin-top:18px;">B. Hospital-Employed Doctors</h3>
                <ul>
                    <li>Form 16 from the hospital under Section 192</li>
                    <li>Salary slips for the financial year</li>
                    <li>Section 80C, 80D investment proofs</li>
                </ul>

                <h3 style="margin-top:18px;">C. Private Practice / Clinic</h3>
                <ul>
                    <li>Receipt book or clinic-management software export with patient-wise consultation fees</li>
                    <li>Bank statements covering professional account</li>
                    <li>Form 16A from each consultancy client (under Section 194J)</li>
                    <li>Daily case register in Form 3C (Rule 6F applicability)</li>
                    <li>Drug and medicine inventory (opening and closing) under Rule 6F(3)</li>
                    <li>Equipment purchase invoices for depreciation</li>
                    <li>Clinic rent agreement and electricity bills</li>
                    <li>Salary register if you employ nursing or front-desk staff</li>
                </ul>

                <h3 style="margin-top:18px;">D. Capital Assets and Property</h3>
                <ul>
                    <li>Property purchase deed plus Form 26QB challan (or Form 141 Schedule B from 1 April 2026)</li>
                    <li>Form 16B (or Form 132) issued to seller</li>
                    <li>Demat statements, mutual fund capital-gains report</li>
                </ul>

                <h3 style="margin-top:18px;">E. Deductions (Chapter VI-A)</h3>
                <ul>
                    <li>Section 80C: PPF, ELSS, life insurance, principal of home loan</li>
                    <li>Section 80D: health insurance premium receipts (self, spouse, parents)</li>
                    <li>Section 80E: education loan interest certificate (MBBS, MD, PG)</li>
                    <li>Section 24(b): home loan interest certificate</li>
                    <li>Section 80G: donation receipts to qualifying institutions</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Doctor Filing Challenges and Patron Solutions</h2>
            <div class="content-text">
                <h3>Challenge 1: "My hospital deducts TDS under 194J but treats me like an employee."</h3>
                <p><strong>Solution:</strong> We review the engagement letter for Contract OF Service (employment, Section 192 / Form 16) versus Contract FOR Service (consultancy, Section 194J / Form 16A). The Bombay High Court in CIT v Dr Balabhai Nanavati Hospital (2024) confirmed that consultant doctors with no fixed salary, free to practice elsewhere, fall under Section 194J. We file the doctor under PGBP and reconcile TDS in Form 26AS to claim full credit.</p>

                <h3 style="margin-top:24px;">Challenge 2: "44ADA receipts crossed Rs 75 lakh mid-year - what now?"</h3>
                <p><strong>Solution:</strong> We pivot you to ITR-3 with regular books for that year. Section 44AB tax audit becomes mandatory. Patron Accounting prepares Form 3CB / 3CD, books retroactively for the year (cash book, ledger, depreciation schedule), and files ITR-3 by the audit deadline of 31 October. The Section 271B penalty of Rs 1.5 lakh is avoided.</p>

                <h3 style="margin-top:24px;">Challenge 3: "I bought a Rs 1.2 crore flat - what about TDS?"</h3>
                <p><strong>Solution:</strong> Section 194-IA mandates 1 percent TDS on the higher of consideration or stamp-duty value. For pre-1 April 2026 transactions, file Form 26QB within 30 days from end of month of deduction. From 1 April 2026, file Form 141 Schedule B under Section 393(1) of the Income Tax Act, 2025. No TAN required - it is PAN-based. Form 16B (or Form 132 under ITA 2025) goes to the seller. Patron files this on your behalf and reflects the TDS credit in your ITR.</p>

                <h3 style="margin-top:24px;">Challenge 4: "I run a partnership pathology lab with three radiologists."</h3>
                <p><strong>Solution:</strong> A partnership firm (not LLP) can avail Section 44ADA at the firm level and file ITR-5. Each partner files ITR-3 reporting share of profit (exempt under Section 10(2A)) plus remuneration and interest on capital under Section 28(v). LLPs are explicitly excluded from 44ADA per Section 44ADA(1) read with Section 2(23) - LLP firms must maintain books and file ITR-5 with regular computation.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Doctor ITR Filing Fees</h2>
            <div class="content-text">
                <p>Fees include CA review and e-verification. GST extra at 18 percent. Volume and complexity discounts apply for multi-clinic and multi-state practices.</p>

                <div class="table-responsive-wrapper" style="margin-top:18px;">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-4 (Section 44ADA Presumptive)</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Hospital Salary + Consultancy ITR-3</td><td>Starting from INR 3,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-3 with Regular Books (Rule 6F)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Partnership Clinic ITR-5 + Partner ITR-3</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-3 + Tax Audit (Section 44AB)</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Form 141 Schedule B / Form 26QB Filing</td><td>Starting from INR 1,499 per transaction (Exl GST)</td></tr>
                        <tr><td>Defective Return Response (Section 139(9))</td><td>Starting from INR 2,499 (Exl GST)</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px; font-size:13px; color:var(--text-muted);"><em>All amounts above are professional fees only and exclude 18 percent GST and any government charges (e.g. e-filing portal challan, registrar fees). Final quotes confirmed after document review and complexity assessment.</em></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Doctor ITR Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Engagement</th><th>Working Days</th><th>Statutory Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 (44ADA) - documents ready</td><td>2 days</td><td>31 August 2026 for AY 2026-27</td></tr>
                        <tr><td>ITR-3 with books - new client</td><td>5-7 days</td><td>31 August 2026 (or 31 October 2026 if audited)</td></tr>
                        <tr><td>Tax Audit + ITR-3</td><td>10-14 days</td><td>Audit report 30 September 2026; ITR 31 October 2026</td></tr>
                        <tr><td>Form 141 / Form 26QB filing</td><td>Same day</td><td>30 days from end of month of deduction</td></tr>
                        <tr><td>Partnership clinic ITR-5 + partner ITR-3</td><td>7-10 days</td><td>31 August 2026 (non-audit) / 31 October 2026 (audit)</td></tr>
                        <tr><td>Defective Return response (Sec 139(9))</td><td>3-5 days</td><td>15 days from notice receipt</td></tr>
                        <tr><td>Section 143(1) intimation review</td><td>2-3 days</td><td>30 days for rectification request u/s 154</td></tr>
                        <tr><td>Belated return filing (Sec 139(4))</td><td>2-3 days</td><td>31 December 2026 with Section 234F fee</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Urgency note:</strong> Late-filing fee of Rs 5,000 under Section 234F applies after the due date. Belated returns lose the right to carry forward most losses (Section 80). 44ADA users must pay 100 percent of advance tax in one installment by 15 March 2026 - missing this triggers interest under Sections 234B and 234C at 1 percent per month.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Doctors Hire a CA Instead of DIY Filing</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Defective Return Prevention</h3><p>Filing ITR-1 or ITR-2 when professional income exists triggers a Section 139(9) defective-return notice. ITR-3 vs ITR-4 selection is non-trivial when income types overlap. We pick the right form first time.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-5"/></svg></div><h3>44ADA Decision Modelling</h3><p>We run actual numbers under both presumptive and regular regimes. The decision swings based on equipment-heavy years (depreciation), clinic rent, staff salaries, and digital-receipts ratio. Real money, real difference.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18M8 4v4"/></svg></div><h3>Section 192 vs 194J Defence</h3><p>We document the engagement classification with case-law support including the Bombay HC ruling in CIT v Dr Balabhai Nanavati Hospital, protecting you and the hospital from Section 201 default proceedings.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3>Form 26QB / Form 141 Compliance</h3><p>Doctors are a high-value-property buyer segment. One missed challan triggers Section 271H penalty up to Rs 1 lakh and Section 234E late fee at Rs 200 per day. We file end-to-end with seller TDS certificate.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><h3>AIS Reconciliation</h3><p>AIS now captures bank deposits, mutual fund redemptions, demat trades, foreign remittances. Mismatches with the ITR generate Section 143(1) notices and refund delays. We reconcile line-by-line.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8"/></svg></div><h3>Notice and Scrutiny Defence</h3><p>Patron handles Section 143(1), Section 142(1), and Section 148 notices end-to-end. Doctors are a higher scrutiny risk segment in CASS-driven selection because of cash receipts and high-value property.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg></div><h3>Tax Audit under Section 44AB</h3><p>Tax audit by a practising CA where receipts exceed Rs 75 lakh, or where 44ADA profit declared is below 50 percent. Form 3CB / 3CD report and ITR-3 filing in a single engagement - prevents Section 271B penalty.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div><h3>Books of Accounts under Rule 6F</h3><p>Cash book, ledger, daily case register in Form 3C, and medicine inventory under Rule 6F(3). DIY tools cannot generate these. Section 271A penalty of Rs 25,000 applies for non-maintenance.</p></article>

            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><h3>Partnership Clinic Expertise</h3><p>Partnership pathology labs and group clinics need ITR-5 at firm level plus ITR-3 for each partner with capital account reconciliation. We have filed for 4-doctor partnerships across Maharashtra and NCR consistently for 12 consecutive ITR seasons.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves doctors across India - both in-person and remotely. We work with hospital networks in Maharashtra, NCR, and Karnataka, and file ITRs for non-resident doctor clients in the US, UK, UAE, and Singapore. City-specific ITR for Doctors pages are available for <a href="/itr-for-doctors/pune">Pune</a>, <a href="/itr-for-doctors/mumbai">Mumbai</a>, <a href="/itr-for-doctors/delhi">Delhi</a>, and <a href="/itr-for-doctors/gurugram">Gurugram</a>.</p>
<p style="margin-top:14px;"><strong>Outcome proof:</strong> 12 in 12 - twelve consecutive ITR-V acknowledgements processed for one Pune-based 4-doctor partnership clinic from FY 2019-20 through FY 2024-25, including two tax audits, three Form 26QB filings, and one Section 143(1) intimation responded to within 24 hours.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Patron - Doctor ITR Filing Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Aspect</th><th>DIY (Tax Filing Tool)</th><th>Patron Accounting (CA)</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Form Selection</td><td>User-driven; high error rate when 192 + 194J + property mix exists</td><td>CA reviews income mix and selects ITR-3 / ITR-4 / ITR-5 correctly</td></tr>
                        <tr><td>44ADA Decision</td><td>Default to presumptive; no break-even computation</td><td>Modelled both ways - presumptive vs regular books with depreciation</td></tr>
                        <tr><td>Hospital Salary 192 vs 194J</td><td>Tool follows TDS section blindly</td><td>Engagement-letter review + case-law backed classification</td></tr>
                        <tr><td>Form 26QB / Form 141 Filing</td><td>Not handled by ITR tools</td><td>Filed end-to-end with seller TDS certificate (Form 16B / Form 132)</td></tr>
                        <tr><td>Tax Audit (Section 44AB)</td><td>Beyond tool scope</td><td>In-house Form 3CB / 3CD audit and ITR-3</td></tr>
                        <tr><td>AIS Reconciliation</td><td>Auto-import; mismatches go unnoticed</td><td>Line-by-line review with bank statements and books</td></tr>
                        <tr><td>Notice Handling</td><td>No support</td><td>Section 143(1), 142(1), 148 response within 48 hours</td></tr>
                        <tr><td>Books of Accounts under Rule 6F</td><td>Tool does not generate books</td><td>Cash book, ledger, Form 3C, medicine inventory prepared</td></tr>
                        <tr><td>Cost</td><td>Rs 999 - Rs 4,999 self-service</td><td>Rs 1,499 - Rs 14,999 with CA review and signed computation</td></tr>
                        <tr><td>Risk</td><td>Defective return / scrutiny risk</td><td>Returns reviewed by qualified CA before submission</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><em>Patron has filed over 1,200 doctor ITRs since 2019 across Pune, Mumbai, Delhi, and Gurugram. The accountability is signed and traceable - one CA, one team, one computation.</em></p>
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
                
                <p>Doctors typically need adjacent compliance work alongside ITR. We bundle these:</p>
<ul>
<li><a href="/itr-filing-for-freelancers-professionals">ITR for Professionals / Freelancers</a> - parent service page covering all specified professions including medical</li>
<li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - mandatory above Rs 75 lakh receipts; Form 3CB / 3CD by 30 September</li>
<li><a href="/tds-return-filing">TDS Return Filing</a> - for clinics deducting TDS on staff salaries and consultancy</li>
<li><a href="/payroll-processing-for-the-healthcare-industry">Healthcare Payroll Services</a> - clinic and hospital payroll, Form 16 issuance, ESI/PF compliance</li>
<li><a href="/itr-for-property-sale">ITR for Property Sale</a> - Form 26QB and Form 141 Schedule B filing for doctors buying clinic premises or flats</li>
<li><a href="/tax-planning-services">Tax Planning Services</a> - regime selection, advance tax, deductions strategy for doctors</li>
<li><a href="/income-tax-notice-for-defective-return">Defective Return Notice (Sec 139(9))</a> - response for ITR-1/ITR-2 misclassification by hospital-employed doctors</li>
<li><a href="/registration-for-12a-80g-certificate">12A / 80G Registration</a> - for medical charitable trusts and not-for-profit hospitals</li>
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
                    <li>Income Tax Act, 1961 - applies to transactions where the earlier of payment or credit occurred on or before 31 March 2026</li>
                    <li>Income Tax Act, 2025 - applies from 1 April 2026 (Tax Year 2026-27 onwards). Section 393(1) replaces Sections 194-IA, 194-IB, 194M, 194S</li>
                    <li>Income Tax Rules, 1962 - Rule 6F continues for Section 44AA book-keeping</li>
                    <li>Income Tax Rules, 2026 - Rules 218 and 219 govern Form 141 challan-cum-statement</li>
                </ul>

                <p style="margin-top:18px;"><strong>Regulatory Reference Table for Doctors:</strong></p>
                <div class="table-responsive-wrapper" style="margin-top:12px;">
                <table>
                    <thead><tr><th>Provision</th><th>What It Says</th><th>Doctor Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Section 44AA(1)</td><td>Specified profession includes legal, medical, engineering, architectural, accountancy, technical consultancy, interior decoration</td><td>Doctors are specified professionals - mandatory book-keeping triggered above Rs 1.5 lakh receipts</td></tr>
                        <tr><td>Rule 6F(2) and 6F(3)</td><td>Cash book, journal, ledger plus daily case register in Form 3C and medicine/drugs inventory</td><td>Form 3C is doctor-specific - not required for any other profession</td></tr>
                        <tr><td>Section 44ADA</td><td>50 percent deemed profit; threshold Rs 50 lakh / Rs 75 lakh (95 percent digital); resident individual or partnership firm (non-LLP)</td><td>Default scheme for most private practitioners up to the cap</td></tr>
                        <tr><td>Section 44AB</td><td>Tax audit if professional receipts exceed Rs 75 lakh, or if 44ADA profit declared below 50 percent with total income above exemption</td><td>Tax audit triggers Form 3CB/3CD by 30 September</td></tr>
                        <tr><td>Section 192</td><td>TDS on salary at slab rates; Form 16 issued</td><td>Hospital staff doctors with employment contract</td></tr>
                        <tr><td>Section 194J</td><td>10 percent TDS on professional fees; Rs 50,000 threshold per FY 2025-26; Form 16A</td><td>Consultant doctors, locum, visiting consultants</td></tr>
                        <tr><td>Section 194-IA / Section 393(1) Table 3(i)</td><td>1 percent TDS on property purchase Rs 50 lakh+ from resident seller</td><td>Form 26QB until 31 March 2026; Form 141 Schedule B from 1 April 2026</td></tr>
                        <tr><td>Section 234F</td><td>Late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</td><td>Hits doctors who miss 31 August 2026 deadline</td></tr>
                        <tr><td>Section 271A</td><td>Rs 25,000 penalty for non-maintenance of books of accounts</td><td>Triggers when Rule 6F applies and books are absent</td></tr>
                        <tr><td>Section 271B</td><td>0.5 percent of receipts or Rs 1.5 lakh (whichever lower) for tax-audit failure</td><td>Costly when 44AB missed</td></tr>
                        <tr><td>Section 80E</td><td>Education loan interest deduction; up to 8 years from start of repayment</td><td>Common for MBBS / MD / PG loans</td></tr>
                        <tr><td>Section 32 + Appendix I</td><td>Depreciation: 15 percent general plant and machinery; 40 percent on specified life-saving medical equipment</td><td>Deductible only under ITR-3 with regular books, not under 44ADA</td></tr>
                        <tr><td>CGST Notification 12/2017 entry 74</td><td>Healthcare services by clinical establishment, authorised medical practitioner exempt from GST</td><td>Most pure medical services exempt; mixed activities (cosmetic, retail pharmacy) attract GST</td></tr>
                        <tr><td>Section 271H + Section 234E</td><td>Up to Rs 1 lakh penalty + Rs 200 per day for delayed Form 26QB / Form 141 filing</td><td>High-risk for doctors making property purchases above Rs 50 lakh</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:18px;"><strong>Authoritative References:</strong></p>
                <ul>
                    <li><a href="https://www.incometax.gov.in/iec/foportal/help/e-filing-itr4-form-sugam-faq" target="_blank" rel="noopener nofollow">Income Tax Department - ITR-4 (Sugam) FAQ</a> - CBDT mandatory regulatory body link</li>
                    <li><a href="https://www.incometaxindia.gov.in/w/depreciation-rates" target="_blank" rel="noopener nofollow">Income Tax India - Depreciation Rates Schedule (Appendix I)</a> - statutory rates</li>
                    <li><a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener nofollow">India Code - Income Tax Act 1961 Section 44AA</a> - Ministry of Law and Justice</li>
                    <li><a href="https://en.wikipedia.org/wiki/Income_tax_in_India" target="_blank" rel="noopener nofollow">Income Tax in India</a> - Wikipedia general reference</li>
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
                    <p class="faq-expanded__lead">Top questions practising doctors ask before filing ITR for AY 2026-27 - 44ADA, hospital salary, tax audit, GST, and Form 26QB.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a practising doctor file in India?</h3>
                        <div class="faq-expanded__a"><p>A practising doctor files <strong>ITR-4</strong> if opting for Section 44ADA presumptive taxation (gross receipts up to Rs 75 lakh with 95 percent digital receipts). Otherwise <strong>ITR-3</strong> is used with regular books of accounts and depreciation. ITR-1 and ITR-2 are not allowed when professional income exists - they trigger Section 139(9) defective-return notices. Doctors with only hospital salary and no private practice may file ITR-1 (if total income up to Rs 50 lakh) or ITR-2.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a doctor working in a hospital opt for Section 44ADA?</h3>
                        <div class="faq-expanded__a"><p>Section 44ADA applies only to professional income, not to salary. A doctor with hospital salary under Section 192 (Form 16) cannot apply 44ADA to that salary. If the same doctor also runs a private practice or earns consultancy fees under Section 194J, the professional component can be filed under 44ADA in ITR-4 or ITR-3 (mixed) - the salary is reported under the Salary head and the professional receipts under PGBP with 50 percent deemed profit.</p><p style="margin-top:8px;"><em>Voice search variant - "Doctor ki hospital salary par 44ADA milega kya?" - No, salary par 44ADA nahi milta, but consultancy fees par mil sakta hai.</em></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is tax audit mandatory for doctors?</h3>
                        <div class="faq-expanded__a"><p>Tax audit under Section 44AB applies if professional gross receipts exceed Rs 75 lakh in a financial year. It also applies if a doctor opts out of Section 44ADA, declares profit below 50 percent of receipts, and has total income above the basic exemption limit. The audit report is filed in <strong>Form 3CB / 3CD</strong> by 30 September 2026 and ITR-3 is filed by 31 October 2026. Failure attracts Section 271B penalty at 0.5 percent of receipts or Rs 1.5 lakh, whichever is lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the depreciation rate on medical equipment for doctors?</h3>
                        <div class="faq-expanded__a"><p>Medical equipment is generally classified under "Plant and Machinery" with a depreciation rate of <strong>15 percent</strong> on the written-down value (Block III, Appendix I to the Income Tax Rules, 1962). Specified life-saving medical equipment listed in the Income Tax Rules is eligible for <strong>40 percent</strong> depreciation - typical items include defibrillators, heart-lung machines, cobalt therapy units, and specified imaging devices. Depreciation can only be claimed under ITR-3 with regular books; Section 44ADA does not allow separate depreciation since it is presumed inside the 50 percent deemed profit.</p><p style="margin-top:8px;"><em>Voice search variant - "Clinic equipment ka depreciation kitna milta hai income tax mein?" - General medical equipment 15 percent, life-saving wala 40 percent.</em></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are doctors required to charge GST on consultations?</h3>
                        <div class="faq-expanded__a"><p>Healthcare services provided by a clinical establishment, an authorised medical practitioner, or paramedics are <strong>exempt from GST under entry 74 of Notification 12/2017-Central Tax (Rate)</strong>. This means doctor consultations, hospital admissions, diagnostics, and basic clinical services do not attract GST. However, GST applies to non-healthcare income such as cosmetic treatments without medical necessity, retail pharmacy sales, training and lecture fees, hospital food and beverage to attendants, and rental of clinic space. A doctor with mixed taxable activity must register if aggregate turnover exceeds Rs 20 lakh.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Form 26QB and when does a doctor have to file it?</h3>
                        <div class="faq-expanded__a"><p>Form 26QB was the challan-cum-statement under Section 194-IA used to deposit 1 percent TDS on the purchase of immovable property worth Rs 50 lakh or more from a resident seller. The buyer files within 30 days from the end of the month of deduction; no TAN is required since filing is PAN-based. <strong>From 1 April 2026, Form 26QB is replaced by Form 141 Schedule B</strong> under Section 393(1) of the Income Tax Act, 2025. Doctors who buy clinic premises, residential flats, or land above the Rs 50 lakh threshold must file this challan and issue Form 16B (now Form 132) to the seller.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a partnership clinic file under Section 44ADA?</h3>
                        <div class="faq-expanded__a"><p>A partnership firm (other than LLP) carrying medical profession can avail Section 44ADA at the firm level. The firm files ITR-5 declaring 50 percent of gross receipts as deemed profit. Partners separately file ITR-3 reporting share of profit (exempt under Section 10(2A)) plus remuneration and interest on capital under Section 28(v). <strong>LLPs are explicitly excluded</strong> - per Section 44ADA(1) read with the definition of "partnership firm" in Section 2(23), LLPs must file ITR-5 with regular computation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between TDS under Section 192 and Section 194J for doctors?</h3>
                        <div class="faq-expanded__a"><p>Section 192 applies when there is an employer-employee relationship - the hospital deducts TDS at applicable slab rates and issues Form 16. Section 194J applies when the relationship is principal-to-principal (consultancy) - 10 percent flat TDS with a Rs 50,000 annual threshold per payer (FY 2025-26), and Form 16A is issued. The Bombay High Court in <strong>CIT v Dr Balabhai Nanavati Hospital (2024)</strong> and Karnataka High Court rulings confirm that consultant doctors with no fixed salary, free to practice elsewhere, and not subject to leave / PF rules, fall under Section 194J. The actual nature of the engagement, not the contract title, decides the section.</p></div>
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
            <h2 class="section-title">Act Now: ITR Deadlines and Doctor-Specific Risks</h2>
            <div class="content-text">
                
                <p><strong>Doctors filing for AY 2026-27 (FY 2025-26) face four firm dates - missing any triggers immediate financial pain:</strong></p>
<ul>
<li><strong>15 March 2026 - 100 percent advance tax:</strong> 44ADA users must pay full advance tax in one installment. Missing this triggers interest under Sections 234B and 234C at 1 percent per month.</li>
<li><strong>31 August 2026 - non-audit ITR:</strong> Section 234F late fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh). Belated returns under Section 139(4) lose the right to carry forward losses under Section 80.</li>
<li><strong>30 September 2026 - tax audit report:</strong> If receipts exceed Rs 75 lakh, Form 3CB / 3CD must be uploaded by this date. Section 271B penalty 0.5 percent of receipts or Rs 1.5 lakh, whichever lower.</li>
<li><strong>31 October 2026 - audit-case ITR:</strong> ITR-3 with Section 44AB. Missing this loses both the audit and ITR deadlines simultaneously.</li>
<li><strong>Form 26QB / Form 141 Schedule B:</strong> 30 days from end of month of TDS deduction on property purchase. Section 271H penalty up to Rs 1 lakh and Section 234E late fee Rs 200 per day.</li>
</ul>
<p style="margin-top:14px;"><strong>Free 15-minute consultation with a CA.</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a>, WhatsApp <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20doctor%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" rel="noopener">wa.me/919459456700</a>, or email <a href="mailto:info@patronaccounting.com">info@patronaccounting.com</a>. Send your Form 16, Form 16A, clinic receipts, and AIS download. We compute your 44ADA versus regular books position and confirm the cheapest legitimate ITR before you pay anything.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Doctor ITR with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF !important;">Doctor ITR filing is not a single-form exercise. It is coordination across overlapping income heads - Section 192 hospital salary, Section 194J consultancy under PGBP, Section 44ADA presumptive scheme, Section 44AB tax audit thresholds, Rule 6F books of accounts including Form 3C case register, and Section 194-IA / Form 26QB property TDS. One wrong ITR form choice triggers a Section 139(9) defective return; one missed deadline triggers Section 234F, Section 271A, or Section 271B penalties.</p>
<p style="color:#FFFFFF !important;">Patron Accounting has filed over 1,200 doctor ITRs since 2019 across Pune, Mumbai, Delhi, and Gurugram. Our CA and CS team reads your Form 16 (Section 192), Form 16A (Section 194J), AIS, and clinic receipt register before quoting tax. We model your 44ADA versus regular books position with depreciation, prepare Rule 6F books including Form 3C case register and medicine inventory, and reconcile every TDS credit before submission. We work with practising doctors, hospital staff physicians, partnership clinics, NRI doctors with India income, and locum consultants.</p>
<p style="color:#FFFFFF !important;">Free 15-minute consultation with a CA. No obligation. Send your documents and get the exact tax liability and 44ADA versus regular books recommendation before you pay anything. The 31 August 2026 deadline (or 31 October 2026 for tax-audit cases) is fixed - your loss carry-forward rights, refund timeline, and audit penalty exposure depend entirely on filing on time.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20doctor%20ITR%20filing.%20Please%20share%20your%20fee%20schedule%20and%20process." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Doctors%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Doctors%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Doctor ITR Filing in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">City-specific doctor ITR filing across Pune, Mumbai, Delhi, and Gurugram - with same-day pickup of Form 16, Form 16A, clinic receipts, and AIS download for hospital-employed and private-practice doctors.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Doctor ITR Filing - Office Cities</div>
    <div class="pa-block-sub">In-person CA review for doctors and document handover at our Pune, Mumbai, Delhi, and Gurugram offices. Remote service across India.</div>
    <div class="pa-city-grid">
        <a href="/itr-for-doctors/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-doctors/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-doctors/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/itr-for-doctors/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end compliance support for doctors - tax audit, TDS, professional ITR filing, and healthcare-sector payroll.</div>
    <div class="pa-cross-grid">
        <a href="/itr-filing-for-freelancers-professionals" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Professionals</div><div class="pa-card-sub">Freelancers & Specified Professions</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Sec 44AB)</div><div class="pa-card-sub">For Receipts &gt; Rs 75 Lakh</div></div></a>
        <a href="/tds-return-filing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">24Q / 26Q / Form 16 Issuance</div></div></a>
        <a href="/payroll-processing-for-the-healthcare-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Healthcare Payroll</div><div class="pa-card-sub">For Clinics &amp; Hospitals</div></div></a>
        <a href="/itr-for-property-sale" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">Form 26QB / Form 141</div></div></a>
        <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">Regime &amp; Deduction Strategy</div></div></a>
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
            <p>Reviewed quarterly during ITR season (April to September) and after every Union Budget (typically February). Section 44ADA thresholds, Rule 6F record-keeping requirements, Form 26QB / Form 141 transition rules, and Income Tax Act 2025 mappings are kept current. For source citations: Income Tax Act 1961 (Section 44AA, 44ADA, 44AB, 192, 194J, 194-IA), Income Tax Act 2025 (Section 393(1), Schedule B), Income Tax Rules 1962 (Rule 6F, Appendix I depreciation schedule), CGST Notification 12/2017 entry 74 (healthcare exemption), and CBDT Form 141 challan-cum-statement guidance.</p>
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
