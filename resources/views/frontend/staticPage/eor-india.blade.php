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
    <title>EOR India - Employer of Record</title>
    <meta name="description" content="Hire in India without an entity. CA-led EOR with EPF, ESI, TDS, gratuity compliance. Transparent INR pricing. 48-hour onboarding.">
    <link rel="canonical" href="/eor-india">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India 2026 - Employer of Record | Patron Accounting">
    <meta property="og:description" content="Hire in India without an entity. CA-led EOR with EPF, ESI, TDS, gratuity compliance. Transparent INR pricing. 48-hour onboarding.">
    <meta property="og:url" content="/eor-india">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/eor-india-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India 2026 - Employer of Record | Patron Accounting">
    <meta name="twitter:description" content="Hire in India without an entity. CA-led EOR with EPF, ESI, TDS, gratuity compliance. Transparent INR pricing. 48-hour onboarding.">
    <meta name="twitter:image" content="/images/eor-india-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/eor-india#breadcrumb",
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
              "name": "EOR India",
              "item": "/eor-india"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/eor-india#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is an Employer of Record in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "An Employer of Record (EOR) in India is an Indian-domiciled entity that legally employs your Indian hires on paper while you direct day-to-day work. The EOR signs employment contracts, runs monthly INR payroll, deposits EPF and ESI contributions, withholds TDS under Section 192, files quarterly Form 24Q, issues annual Form 16, and absorbs all legal-employer obligations under the EPF and MP Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, and the four Labour Codes."
              }
            },
            {
              "@type": "Question",
              "name": "Is EOR legal in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. There is no specific EOR statute but the model functions under standard Indian employment law as a third-party legal employer. EOR engagements are recognised by EPFO, ESIC, CBDT, and state Labour Departments. The EOR is the legal employer for statutory purposes and the foreign principal directs work without becoming an Indian employer or maintaining a Permanent Establishment."
              }
            },
            {
              "@type": "Question",
              "name": "How much does EOR cost in India per employee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's PEPM service fee starts at Rs 35,000 per employee per month for small teams and reduces with volume. Statutory contributions are pass-through: EPF 12 percent, ESI 3.25 percent (employees earning up to Rs 21,000/month), Gratuity 4.81 percent of basic, and Professional Tax (max Rs 2,500/year). Group Health Insurance is optional. Total CTC for a Rs 12 lakh hire typically lands at Rs 14.5 to 15 lakh including all statutory layers and service fee."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between EOR and PEO in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under EOR, the EOR is the sole legal employer in India - the foreign principal has no Indian-employer status. Under PEO in India, the relationship is co-employment - both PEO and principal are joint employers, which usually requires the principal to have its own Indian entity. EOR is the right model when you do not have an Indian entity. PEO works only when you already have an Indian incorporated company."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to onboard via EOR India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For a resident Indian hire, the offer letter is issued within 48 hours of quote acceptance, and full onboarding (KYC, EPF UAN generation, ESI Form 1, Professional Tax registration, background verification) takes 5 to 7 working days. The first payroll cycle runs at the end of that month. For a foreign national hire, add 2 to 8 weeks for Employment Visa processing and FRRO registration."
              }
            },
            {
              "@type": "Question",
              "name": "How does EOR avoid Permanent Establishment risk in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Permanent Establishment risk under Section 9(1)(i) of the Income-tax Act 1961 and Article 5 of the relevant DTAA is triggered by fixed place of business, dependent agent, or habitual contract-conclusion power in India. Under the EOR model, Patron is the independent Indian legal employer. The foreign principal has no fixed place of business, no dependent agent, and no contract-conclusion authority - removing the standard PE triggers."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/eor-india#service",
          "name": "Employer of Record India",
          "description": "CA-led Employer of Record (EOR) service for foreign companies hiring Indian employees without setting up a local entity. Patron Accounting LLP becomes the legal employer in India - drafting compliant employment contracts, running monthly INR payroll, depositing EPF (12 percent), ESI (3.25 percent on Rs 21,000 wage ceiling), gratuity (4.81 percent), professional tax, withholding TDS under Section 192, filing Form 24Q and Form 16, and shielding the foreign principal from Permanent Establishment exposure under Section 9(1)(i) of the Income-tax Act 1961 and Article 5 of the relevant DTAA.",
          "serviceType": "Employer of Record (EOR) India for Foreign Companies",
          "provider": {
            "@id": "/#organization"
          },
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "about": [
            {
              "@type": "Thing",
              "name": "Employer of Record",
              "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record"
            },
            {
              "@type": "Thing",
              "name": "Permanent establishment",
              "sameAs": "https://en.wikipedia.org/wiki/Permanent_establishment"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "EOR India Pricing",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "Starter PEPM (1-5 employees)",
                "price": "35000",
                "priceCurrency": "INR",
                "url": "/eor-india"
              },
              {
                "@type": "Offer",
                "name": "Growth PEPM (6-25 employees)",
                "price": "28000",
                "priceCurrency": "INR",
                "url": "/eor-india"
              },
              {
                "@type": "Offer",
                "name": "Scale PEPM (26+ employees)",
                "price": "22000",
                "priceCurrency": "INR",
                "url": "/eor-india"
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
                        Employer of Record (EOR) in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Foreign company KYC, India hiring brief, candidate offer terms</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pricing:</span> From Rs 35,000 per employee per month all-inclusive (PEPM); transparent INR billing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any foreign company hiring 1 to 100+ Indian employees without local entity</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 48-hour offer letter, 5 to 7 day onboarding for India nationals; 2 to 8 weeks for foreign hires (visa)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents | 15+ Years CA-led Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20want%20to%20discuss%20EOR%20India%20services%20for%20my%20foreign%20company." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - EOR India'/>
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
                                <option value="eor-india" selected>EOR India</option>
<option value="payroll-processing-and-management-services">Payroll Processing and Management</option>
<option value="private-limited-company-registration">Private Limited Company Registration</option>
<option value="llp-incorporation">LLP Incorporation</option>
<option value="company-registration-in-usa">Company Registration in USA</option>
<option value="company-registration-in-uae">Company Registration in UAE</option>
<option value="tds-return">TDS Return</option>
<option value="income-tax-return">Income Tax Return</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Extremely great, knowledgeable person who deserves 5 stars for smooth and quick filing.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Tech Startup</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron set up our 14-engineer India team in 6 weeks. Cleanest contractor-to-employee transition I've seen.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sarah P.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">COO, US SaaS Firm</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Transparent INR billing was a relief after dealing with USD-quoted PEO platforms with FX surprises.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">JM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">James M.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Lead, UK Tech</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">EPF, ESI, gratuity all handled without us tracking changes. PE-shield documentation was thorough.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Anika K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Director, Singapore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 weeks ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Migrated 8 contractors to EOR employees. Saved us from a recharacterisation audit.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">TC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Tom C.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Australia Fintech</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 weeks ago</div>
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
                    <p>Foreign companies hiring 1 to 100+ Indian employees without local entity - here is what they say.</p>
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
            
                <a href="#overview" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>Overview</a>
                <a href="#what-is" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4M12 16h.01"/></svg>What Is EOR</a>
                <a href="#applicability" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5 5 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>When to Use</a>
                <a href="#services" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>Services</a>
                <a href="#process" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>5-Step Process</a>
                <a href="#documents" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>Documents</a>
                <a href="#fees" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Fees and Pricing</a>
                <a href="#timeline" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><polyline points="12 7 12 12 15 14"/></svg>Timeline</a>
                <a href="#benefits" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>Benefits</a>
                <a href="#comparison" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>EOR vs Entity vs PEO</a>
                <a href="#legal" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>Legal Framework</a>
                <a href="#faqs" class="toc-btn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR India - Quick Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR India Services at a Glance</strong></p>
                    <p>An Employer of Record (EOR) in India is a domestic legal entity that employs your Indian hires on paper while you direct their work. Patron Accounting handles employment contracts, monthly INR payroll, EPF (12 percent), ESI (3.25 percent on Rs 21,000 wage ceiling), gratuity (4.81 percent), Professional Tax, TDS under Section 192, and Permanent Establishment shielding. Onboard in 48 hours; from Rs 35,000 PEPM.</p>
                </div>
              
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
                <h2 class="section-title">What Is EOR India</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>India has the world's largest English-speaking technical workforce, the lowest cost-per-engineer for top-quartile talent, and a regulatory framework that punishes shortcuts. Foreign companies that hire Indian talent as 'contractors' often discover that Indian courts have reclassified them as employees with retrospective gratuity, EPF, and bonus liability. Companies that set up a private limited subsidiary spend 3 to 6 months on incorporation, GST registration, EPFO code allotment, professional tax registrations across states, and ongoing AOC-4 / MGT-7 filings. The Employer of Record (EOR) model collapses all of that.</p>

<p>An Employer of Record (EOR) in India is a third-party Indian-domiciled entity that legally employs workers on behalf of a foreign principal. The EOR signs the employment contract with the Indian hire, runs monthly INR payroll, deposits employer-side statutory contributions (EPF, ESI, gratuity, professional tax), withholds TDS on salary under Section 192 of the Income-tax Act 1961, files Form 24Q quarterly and issues Form 16 annually, and absorbs the legal-employer obligations under the EPF and MP Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, and the four Labour Codes (Code on Wages 2019, Industrial Relations Code 2020, Occupational Safety, Health and Working Conditions Code 2020, and Code on Social Security 2020).</p>

<p>The foreign principal company directs the day-to-day work, sets goals, and conducts performance reviews - but does not appear on any Indian payroll or compliance filing. This separation has two effects. First, it protects the foreign principal from Permanent Establishment exposure under Section 9(1)(i) of the Income-tax Act 1961 and Article 5 of the relevant Double Taxation Avoidance Agreement, since the principal does not maintain a place of business or a dependent agent in India. Second, it shields the foreign principal from contractor misclassification claims - Indian courts have repeatedly held long-term contractors to be de facto employees with full statutory benefit entitlements.</p>

<h3 style="margin-top:32px;">Quick-Reference Summary Table</h3>
<div class="table-responsive">
    <table class="table table-bordered" style="margin-top:16px;">
        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
        <tbody>
            <tr><td>Governing Statutes</td><td>EPF and MP Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, Income-tax Act 1961 Sec 192, DPDP Act 2023, four Labour Codes (2019-2020)</td></tr>
            <tr><td>Suitable For</td><td>Foreign companies (US, UK, Canada, Australia, Singapore, EU, Middle East) hiring 1-100+ Indian employees without local entity</td></tr>
            <tr><td>Onboarding Timeline</td><td>Offer letter 48 hours; full onboarding 5-7 working days for resident Indian; 2-8 weeks for foreign nationals (Employment Visa + FRRO)</td></tr>
            <tr><td>Pricing Model</td><td>Per Employee Per Month (PEPM) flat fee in INR. Includes salary disbursement, statutory contributions, payroll filings, contract management</td></tr>
            <tr><td>Compliance Coverage</td><td>EPF 12%, ESI 3.25% / 0.75% (gross wage up to Rs 21,000), Gratuity 4.81%, PT (state-specific, max Rs 2,500/year), TDS Sec 192, Form 16 / 24Q</td></tr>
            <tr><td>PE Shielding</td><td>Patron is the legal employer; foreign principal does not have business connection / dependent agent under Sec 9(1)(i) or DTAA Article 5</td></tr>
            <tr><td>Authority</td><td>EPFO, ESIC, CBDT, Labour Department, State Professional Tax authority</td></tr>
        </tbody>
    </table>
</div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR India:</strong></p>
                    
<dl style="display:grid;grid-template-columns:1fr;gap:16px;margin-top:24px;">
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">EOR (Employer of Record)</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">An Indian-domiciled entity that becomes the legal employer of your Indian hires. Patron Accounting LLP serves this role with in-house CA + CS team handling all compliance under one roof, not outsourced to third-party accountants. Hinglish: <em>EOR ka matlab kya hai - EOR ek aisi Indian company hai jo aapke India ke employees ki legal employer banti hai.</em></dd>
    </div>
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">PEPM (Per Employee Per Month)</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">The standard EOR pricing unit. A flat all-inclusive INR fee per employee per month covering salary disbursement, statutory contributions, payroll filings, and contract management. Patron pricing is in INR (transparent), not USD with FX markup.</dd>
    </div>
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">CTC (Cost to Company)</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">Total annual employer cost = Gross salary + EPF (12 percent of basic) + ESI (3.25 percent of gross if applicable) + Gratuity accrual (4.81 percent of basic) + Professional Tax + Group health insurance + Patron EOR service fee. Statutory layer typically adds 15 to 22 percent on top of gross salary.</dd>
    </div>
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">Permanent Establishment (PE)</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">A taxable presence of a foreign enterprise in India under Section 9(1)(i) of the Income-tax Act 1961 and Article 5 of the relevant DTAA. Triggered by a fixed place of business, dependent agent, or habitual conclusion of contracts in India. EOR engagement avoids PE because Patron is the legal employer. Hinglish: <em>PE risk kya hota hai - foreign company India me bina entity ke kaam karne par tax-liable ho sakti hai.</em></dd>
    </div>
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">FRRO (Foreigners Regional Registration Office)</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">Mandatory registration for foreign nationals working in India on Employment Visa. Required within 14 days of arrival if visa duration exceeds 180 days. Patron coordinates Employment Visa documentation and FRRO formalities for your foreign nationals.</dd>
    </div>
    <div style="padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);">
        <dt style="font-weight:700;color:var(--blue);font-size:16px;margin-bottom:6px;">DPDP Act 2023</dt>
        <dd style="margin:0;color:var(--text-dark);line-height:1.6;">The Digital Personal Data Protection Act 2023 governs collection, storage, and processing of employee personal data. Both EOR and foreign principal are 'Data Fiduciaries' with consent, breach-notification, and data-localisation obligations. Patron handles employee personal data on India-domiciled infrastructure.</dd>
    </div>
</dl>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR India</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>48 Hours</span>
                        <strong>Offer Letter</strong>
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
            <h2 class="section-title">When to Use EOR India</h2>
            <div class="content-text">
                
                
<p>EOR is the right choice for specific scenarios. It is not the right choice for everyone. We tell you upfront when an entity makes more sense than EOR.</p>

<h3 style="margin-top:24px;color:var(--blue);">EOR is the right choice when</h3>
<ul style="margin-top:12px;line-height:1.8;">
    <li>You want to hire 1 to 30 full-time Indian employees without spending 3 to 6 months on entity setup</li>
    <li>You are testing the India market and need optionality before committing capital</li>
    <li>You acquired a company that has India-based talent and need to retain them through transition</li>
    <li>You currently use Indian contractors and need to convert them to employees to reduce misclassification risk</li>
    <li>You want to ringfence Permanent Establishment exposure while building India team</li>
    <li>Your headcount horizon is 12 to 24 months and entity setup ROI does not justify</li>
    <li>You need to hire across multiple Indian states and want one consolidated compliance entity</li>
</ul>

<h3 style="margin-top:24px;color:var(--blue);">Set up your own entity (and skip EOR) when</h3>
<ul style="margin-top:12px;line-height:1.8;">
    <li>Indian headcount horizon is 50+ employees with multi-year commitment - entity becomes more cost-effective</li>
    <li>You plan to bill Indian customers directly in INR (EOR cannot raise sales invoices)</li>
    <li>You need an Indian-listed group structure for FDI / regulatory reasons</li>
    <li>You want IP holding inside India through statutory ownership</li>
    <li>You operate in regulated sectors (BFSI, insurance, defence) where EOR may not satisfy sectoral regulators</li>
</ul>

<p style="margin-top:20px;padding:16px;background:var(--cream);border-radius:8px;border-left:3px solid var(--orange);"><strong>Patron also offers <a href="/private-limited-company-registration" style="color:var(--blue);font-weight:600;">private limited company registration</a> if you decide to set up an entity - we handle MCA incorporation, GST, EPFO code, ESIC code, professional tax, and IEC.</strong></p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron's EOR India Service Includes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Compliant employment contract drafting</strong></td><td>English-language Indian-law-compliant employment contracts with probation (max 6 months under most state Shops and Establishments Acts), notice period, leave entitlement, salary breakdown (basic, HRA, special allowance, employer PF), confidentiality, IP assignment, and termination clauses. Bilingual versions available. Aligned with Industrial Employment (Standing Orders) Act 1946.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Monthly INR payroll processing</strong></td><td>Payroll cycle 25th to last working day. Gross salary calculated, TDS withheld under Section 192, employee EPF (12 percent) and ESI (0.75 percent if applicable) deducted, professional tax deducted, net salary disbursed via NEFT to employee bank account by 1st of following month.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Statutory contributions (EPF, ESI, Gratuity)</strong></td><td>Employer EPF 12 percent of PF wages deposited via Electronic Challan Cum Return (ECR) on EPFO Unified Portal by 15th of following month. Employer ESI 3.25 percent of gross wages (where employee earns up to Rs 21,000 per month). Gratuity provisioned monthly at 4.81 percent of basic.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>TDS withholding and filing</strong></td><td>Monthly TDS withholding on salary under Section 192 at slab rates. Quarterly Form 24Q filing with Annexure II covering each employee's tax computation. Annual Form 16 issued to each employee by 15 June. CIN-based challan deposits via authorised banks; TRACES portal reconciliation.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Professional Tax (state-specific)</strong></td><td>Professional Tax registration in employee's state of work. Maharashtra Rs 200/month (Rs 300 in February); Karnataka Rs 200/month above Rs 15,000 wage; Tamil Nadu, West Bengal, Gujarat, Andhra Pradesh, Telangana, Kerala have their own slabs. Multi-state employee teams handled at Patron level.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Group health insurance and benefits</strong></td><td>Group Health Insurance from a top Indian insurer (Star Health, ICICI Lombard, HDFC Ergo) - Rs 5 lakh sum insured base, family floater, pre-existing waiver after 1 year. Patron negotiates group rates that single-employer foreign companies cannot access.</td><td><span class="badge-addon">Add-on</span></td></tr>
<tr><td><strong>Permanent Establishment shielding documentation</strong></td><td>Patron is the disclosed legal employer on every employment contract, payroll filing, and statutory return. Foreign principal documented only as the work-direction party with no India-based business presence - removing the Section 9(1)(i) Business Connection trigger and DTAA Article 5 PE trigger.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>DPDP Act 2023 data fiduciary compliance</strong></td><td>Employee personal data collected, stored, and processed on India-domiciled infrastructure. Consent flows, breach notification SOPs, data subject rights workflow, and data fiduciary register all handled per DPDP Act 2023. Quarterly compliance attestation provided to foreign principal.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Termination and full and final settlement</strong></td><td>Notice period management per contract (typically 30 to 90 days), exit interview support, F and F settlement covering accrued leave encashment, pro-rata gratuity (if applicable), pending reimbursements, deduction of company assets, and TDS on terminal payments. Form 16 issued for terminal year. Relieving and experience letters.</td><td><span class="badge-included">Included</span></td></tr>
<tr><td><strong>Group Term Life and Personal Accident</strong></td><td>Optional Group Term Life and Group Personal Accident insurance cover at Patron group rates. Helps foreign principals offer parity with domestic-Indian-company benefits packages and improves talent retention.</td><td><span class="badge-addon">Add-on</span></td></tr>


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
            <h2 class="section-title">The 5-Step EOR India Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From discovery to first payroll cycle - here is how Patron Accounting onboards your Indian hires under the EOR model.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery and INR Quote</h3>
        <p class="step-description">Share the role, candidate (or hiring brief), preferred work location (state), CTC budget, benefits expectations, and contract type (open-ended or fixed-term). Patron returns a transparent INR quote within 2 hours covering gross salary, statutory contributions, group health, and PEPM service fee. No surprise add-ons.</p>
        <div class="step-highlights">
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Hiring brief shared
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    INR quote in 2 hours
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Day 0
                </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="50" cy="45" r="22" stroke="#14365F" stroke-width="2" fill="#F0F4F8"/>
    <line x1="68" y1="62" x2="88" y2="82" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
    <circle cx="50" cy="45" r="14" stroke="#F5A623" stroke-width="2" fill="none"/>
    <line x1="42" y1="45" x2="58" y2="45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
</svg>
            </div>
            <span class="illustration-label">Quote Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Onboarding Pack and Contract</h3>
        <p class="step-description">Patron drafts the India-compliant employment contract, salary breakdown (basic, HRA, special allowance, statutory components), benefits schedule, and Day-1 onboarding pack. Foreign principal reviews and approves. Offer letter goes out within 48 hours of approval.</p>
        <div class="step-highlights">
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Contract drafted
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    48-hour offer letter
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Day 1 to 2
                </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
    <line x1="35" y1="30" x2="85" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
    <line x1="35" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
    <line x1="35" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
    <line x1="35" y1="67" x2="65" y2="67" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
    <path d="M50 78 L58 84 L72 72" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/>
</svg>
            </div>
            <span class="illustration-label">Offer Sent</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Statutory Registrations and KYC</h3>
        <p class="step-description">Employee submits PAN, Aadhaar, bank, education and employment proofs. Patron files EPF Form 11, generates Universal Account Number (UAN), files ESI Form 1 (if eligible), registers professional tax in state of work, and runs background verification (education, employment, criminal). Foreign nationals: Employment Visa documentation and FRRO support kicks off.</p>
        <div class="step-highlights">
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    EPF UAN issued
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    ESI Form 1 filed
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Day 3 to 5
                </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="22" y="20" width="76" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
    <circle cx="42" cy="42" r="8" fill="#F5A623"/>
    <rect x="55" y="33" width="35" height="4" rx="2" fill="#14365F" opacity="0.5"/>
    <rect x="55" y="42" width="28" height="3" rx="1.5" fill="#14365F" opacity="0.3"/>
    <rect x="32" y="57" width="55" height="3" rx="1.5" fill="#14365F" opacity="0.3"/>
    <path d="M85 80 L88 84 L94 76" stroke="#F5A623" stroke-width="2.5" fill="none" stroke-linecap="round"/>
</svg>
            </div>
            <span class="illustration-label">KYC Complete</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Payroll Go-Live</h3>
        <p class="step-description">First payroll cycle runs at month-end. Patron disburses salary in INR via NEFT, deposits employer EPF, ESI, and PT contributions, withholds and deposits TDS under Section 192. Employee receives payslip and TDS computation. Patron sends a single invoice to foreign principal in INR or USD (your choice).</p>
        <div class="step-highlights">
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Salary disbursed
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    TDS deposited
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Day 6 to 30
                </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="22" y="20" width="76" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
    <text x="60" y="48" text-anchor="middle" fill="#F5A623" font-size="16" font-weight="700" font-family="Arial">Rs</text>
    <line x1="32" y1="58" x2="88" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
    <line x1="32" y1="65" x2="78" y2="65" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
    <line x1="32" y1="72" x2="68" y2="72" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
    <circle cx="92" cy="32" r="6" fill="#F5A623"/>
    <text x="92" y="35" text-anchor="middle" fill="#fff" font-size="8" font-weight="700" font-family="Arial">$</text>
</svg>
            </div>
            <span class="illustration-label">Payroll Live</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Ongoing Operations and Offboarding</h3>
        <p class="step-description">Monthly payroll, quarterly Form 24Q, annual Form 16, gratuity provisioning, statutory rate updates pushed without you tracking changes. When an employee separates, Patron runs notice period, F and F settlement, terminal Form 16, relieving letter, and exit-interview report. Headcount scales up or down without compliance debt.</p>
        <div class="step-highlights">
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Form 24Q quarterly
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Form 16 annual
                </span>
                <span class="highlight-tag">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"/>
                    </svg>
                    Month 2 onwards
                </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="60" cy="50" r="28" stroke="#14365F" stroke-width="2" fill="#F0F4F8"/>
    <path d="M60 32 L60 50 L72 56" stroke="#F5A623" stroke-width="3" stroke-linecap="round" fill="none"/>
    <circle cx="60" cy="50" r="3" fill="#F5A623"/>
    <line x1="60" y1="22" x2="60" y2="26" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
    <line x1="60" y1="74" x2="60" y2="78" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
    <line x1="32" y1="50" x2="36" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
    <line x1="84" y1="50" x2="88" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
</svg>
            </div>
            <span class="illustration-label">Always-On</span>
            <span class="step-number-large">05</span>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                
<div style="display:grid;grid-template-columns:1fr;gap:24px;margin-top:24px;">
    <div style="padding:20px;background:var(--cream);border-radius:10px;border-left:4px solid var(--blue);">
        <h3 style="color:var(--blue);font-size:18px;margin-bottom:12px;">From Foreign Principal Company</h3>
        <ul style="margin:0;line-height:1.8;">
            <li>Certificate of Incorporation (legalised / apostilled)</li>
            <li>Articles of Association / Bylaws</li>
            <li>List of directors with passport / ID copies</li>
            <li>Authorised signatory letter for India engagement</li>
            <li>Hiring brief - role, location, CTC, benefits, start date</li>
            <li>PE-shield questionnaire response (one-time)</li>
        </ul>
    </div>
    <div style="padding:20px;background:var(--cream);border-radius:10px;border-left:4px solid var(--orange);">
        <h3 style="color:var(--blue);font-size:18px;margin-bottom:12px;">From Indian Employee</h3>
        <ul style="margin:0;line-height:1.8;">
            <li>PAN card</li>
            <li>Aadhaar card</li>
            <li>Bank account proof (cancelled cheque or statement)</li>
            <li>Educational certificates (10th onwards)</li>
            <li>Employment proof from previous employer (relieving letter, Form 16)</li>
            <li>Address proof (utility bill, rental agreement)</li>
            <li>Photograph</li>
            <li>EPF UAN (if previously employed; else generated by Patron)</li>
        </ul>
    </div>
    <div style="padding:20px;background:var(--cream);border-radius:10px;border-left:4px solid var(--blue);">
        <h3 style="color:var(--blue);font-size:18px;margin-bottom:12px;">From Foreign National Hire (additional)</h3>
        <ul style="margin:0;line-height:1.8;">
            <li>Passport with valid Employment Visa</li>
            <li>FRRO registration (within 14 days of arrival)</li>
            <li>Foreign tax residency certificate (for DTAA benefit if applicable)</li>
            <li>Salary above USD 25,000 per annum (Employment Visa eligibility)</li>
        </ul>
    </div>
</div>

<h3 style="margin-top:32px;color:var(--blue);">Key Outputs You Receive</h3>
<ul style="margin-top:12px;line-height:1.8;">
    <li>Compliant employment contract per hire (English; bilingual on request)</li>
    <li>Monthly payroll register with gross-net breakdown per employee</li>
    <li>Monthly EPF Electronic Challan Cum Return (ECR) acknowledgement</li>
    <li>Monthly ESI challan acknowledgement (where applicable)</li>
    <li>Quarterly Form 24Q TDS return with Annexure II</li>
    <li>Annual Form 16 per employee</li>
    <li>Annual gratuity provision report</li>
    <li>Monthly Professional Tax challan (state-wise)</li>
    <li>Group Health Insurance policy and claim support</li>
    <li>Quarterly DPDP Act 2023 data fiduciary attestation</li>
    <li>PE-shield documentation file (employer-of-record disclosure trail)</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Challenge 1: Permanent Establishment exposure during contractor model</strong></td><td>Foreign companies often start by paying Indian talent as 'contractors' on USD invoices. Indian tax authorities have recharacterised long-term contractors with exclusive engagement as employees of a deemed Indian Permanent Establishment under Section 9(1)(i) and DTAA Article 5 - exposing the principal to Indian corporate tax on profit attribution plus retrospective EPF, gratuity, and bonus liability for the workers.</td><td>EOR engagement makes Patron the disclosed legal employer in every filing, removes the dependent-agent argument, and provides a paper trail that defends the no-PE position under tax scrutiny.</td></tr>
<tr><td><strong>Challenge 2: ESI Rs 21,000 wage ceiling and senior tech hires</strong></td><td>ESI applies only to employees earning gross wages up to Rs 21,000 per month. Most senior tech hires (Rs 8 lakh+ per annum) earn well above this threshold and are NOT covered by ESI. Foreign companies budgeting ESI 3.25 percent on the entire team often over-budget or - worse - misclassify by enrolling above-ceiling employees in ESI.</td><td>Per-employee ESI applicability test at offer stage, with substitution by Group Health Insurance for above-ceiling hires - Rs 5 lakh sum insured base, family floater, top-quartile insurer rates negotiated at Patron group level.</td></tr>
<tr><td><strong>Challenge 3: DPDP Act 2023 data localisation and consent flows</strong></td><td>The Digital Personal Data Protection Act 2023 came into force on 11 August 2023 with rules being notified phase-wise. Both EOR and foreign principal qualify as 'Data Fiduciaries' for the employee's personal data, with consent, breach-notification, data subject rights, and data-localisation obligations. Cross-border data transfer requires consent and a Data Processing Agreement.</td><td>India-domiciled data infrastructure, consent flows built into onboarding, breach-notification SOP within 72 hours, quarterly data fiduciary attestation report to foreign principal.</td></tr>
<tr><td><strong>Challenge 4: Multi-state Professional Tax and Labour Welfare Fund</strong></td><td>Professional Tax slabs vary by state (Maharashtra Rs 200/month, Karnataka Rs 200 above Rs 15,000 wage, no PT in Delhi / Haryana / UP / Punjab). Labour Welfare Fund applies in some states only. A foreign company hiring across Bengaluru, Mumbai, and Delhi will face three different compliance footprints.</td><td>State-wise PT and LWF mapping at offer stage, registration with the relevant state authority, monthly state-wise filings, and consolidated PEPM billing in INR so the foreign principal sees one number per employee.</td></tr>
<tr><td><strong>Challenge 5: Code on Social Security 2020 fixed-term gratuity</strong></td><td>Pre-Code, gratuity required 5 years continuous service. The Code on Social Security 2020 amended this so fixed-term and contract employees are entitled to pro-rata gratuity after just 1 year of service. Foreign companies using fixed-term contracts to limit gratuity exposure are now exposed to gratuity from Year 1.</td><td>Monthly 4.81 percent gratuity provisioning from Day 1, transparent CTC modelling, and contract-type advice (open-ended versus fixed-term) based on the engagement profile.</td></tr>


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
            <h2 class="section-title">Fees and Pricing - Transparent INR Model</h2>
            <div class="content-text">
                <p>Patron Accounting prices EOR India in INR with full breakdown. No USD pricing pages with FX markup. No surprise add-ons. The PEPM (Per Employee Per Month) flat fee covers all routine compliance; statutory contributions are passed through at actuals.</p>
                <p style="font-size:13px;color:var(--text-muted);font-style:italic;margin-top:12px;padding:12px;background:var(--cream);border-left:3px solid var(--orange);border-radius:4px;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Patron PEPM service fee (1 to 5 employees)</strong></td><td>Contract drafting, payroll, EPF/ESI/PT/TDS/Gratuity, Form 24Q, Form 16, GHI admin, PE shield</td><td class="table-amount">Rs 35,000 / employee / month</td></tr>
<tr><td><strong>Patron PEPM service fee (6 to 25 employees)</strong></td><td>Same scope as above with volume discount</td><td class="table-amount">Rs 28,000 / employee / month</td></tr>
<tr><td><strong>Patron PEPM service fee (26+ employees)</strong></td><td>Same scope; dedicated CA + CS pod assigned</td><td class="table-amount">Rs 22,000 / employee / month</td></tr>
<tr><td><strong>EPF (employer share)</strong></td><td>Deposited via Electronic Challan Cum Return on EPFO portal</td><td class="table-amount">12% of PF wages (pass-through)</td></tr>
<tr><td><strong>ESI (employer share, if applicable)</strong></td><td>Only for employees earning gross wages up to Rs 21,000/month</td><td class="table-amount">3.25% of gross wages (pass-through)</td></tr>
<tr><td><strong>Gratuity provision</strong></td><td>Provisioned monthly; payable after qualifying service period</td><td class="table-amount">4.81% of basic (pass-through)</td></tr>
<tr><td><strong>Professional Tax</strong></td><td>State-specific - max Rs 2,500/year per Constitution Article 276(2)</td><td class="table-amount">State slab (pass-through)</td></tr>
<tr><td><strong>Group Health Insurance (optional)</strong></td><td>Rs 5 lakh sum insured base, family floater, top-quartile insurer</td><td class="table-amount">Rs 8,000 to 18,000 / employee / year</td></tr>
<tr><td><strong>One-time onboarding fee</strong></td><td>Background verification, EPF UAN, ESI Form 1, PT registration</td><td class="table-amount">Rs 5,000 / employee</td></tr>
<tr><td><strong>One-time offboarding fee</strong></td><td>Notice period, F and F, terminal Form 16, relieving letter</td><td class="table-amount">Rs 5,000 / employee</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR India consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20want%20a%20free%20quote%20for%20EOR%20India%20services." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Discovery + INR quote</strong></td><td>2 hours</td><td>Hiring brief shared via WhatsApp / email; Patron returns INR quote</td></tr>
<tr><td><strong>Contract draft and offer letter</strong></td><td>48 hours from quote acceptance</td><td>India-compliant employment contract; salary breakdown</td></tr>
<tr><td><strong>Resident Indian onboarding</strong></td><td>5 to 7 working days</td><td>KYC, EPF, ESI, PT, BGV completed</td></tr>
<tr><td><strong>Foreign national onboarding</strong></td><td>2 to 8 weeks</td><td>Employment Visa + FRRO depending on country of origin</td></tr>
<tr><td><strong>First payroll cycle</strong></td><td>Month-end after onboarding</td><td>Salary in INR via NEFT; statutory deposits; payslip + Form 16 components</td></tr>
<tr><td><strong>Termination + F and F settlement</strong></td><td>Notice period + 7 days post-last-working-day</td><td>F and F, terminal Form 16, relieving letter, exit interview</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Most foreign-company India hires onboard in under 7 working days for resident Indians. Foreign national hires (Employment Visa + FRRO) take 2 to 8 weeks depending on country of origin.

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
            <h2 class="section-title">Benefits of Patron's EOR India</h2>
        </div>
        <div class="features-grid">
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
    <h3 class="feature-title">CA-led, in-house compliance</h3>
    <p class="feature-text">No SaaS platform outsourcing tax / labour to third-party accountants. Every filing happens under our roof with our CA + CS team.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
    <h3 class="feature-title">Transparent INR pricing</h3>
    <p class="feature-text">No FX markup, no hidden currency conversion fees. PEPM service fee in INR, statutory contributions pass-through at actuals.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><polyline points="12 7 12 12 15 14"/></svg></div>
    <h3 class="feature-title">48-hour offer letter</h3>
    <p class="feature-text">5 to 7 day onboarding for resident Indian hires. Quote returned within 2 hours of hiring brief.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2"/></svg></div>
    <h3 class="feature-title">Permanent Establishment shield</h3>
    <p class="feature-text">Documented disclosure trail under Sec 9(1)(i) / DTAA Article 5. Foreign principal does not become an Indian taxpayer.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg></div>
    <h3 class="feature-title">Multi-state coverage</h3>
    <p class="feature-text">PT, LWF, Shops and Establishments Act handled across 28 states / 8 UTs. Single PEPM line item per employee regardless of state.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div>
    <h3 class="feature-title">DPDP Act 2023 compliance</h3>
    <p class="feature-text">India-domiciled infrastructure, data fiduciary register, quarterly attestations. Breach notification SOP within 72 hours.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg></div>
    <h3 class="feature-title">Group Health Insurance access</h3>
    <p class="feature-text">Top-quartile insurer rates negotiated at Patron group level. Otherwise unavailable to single-employer foreign firms.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
    <h3 class="feature-title">Income-tax Act 2025 transition</h3>
    <p class="feature-text">Effective 1 April 2026 - section renumbering, Tax Year terminology, TDS form changes handled without your team tracking.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5 5 0 019.288 0"/></svg></div>
    <h3 class="feature-title">Code on Social Security 2020 ready</h3>
    <p class="feature-text">Fixed-term gratuity rule (1-year vesting) built into provisioning from Day 1. No retrospective surprises.</p>
</div>
<div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
    <h3 class="feature-title">Optional path to entity setup</h3>
    <p class="feature-text">When EOR economics flip, Patron incorporates your private limited company and migrates the team across without break in service.</p>
</div></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Compliance Authority</h2>
            <div class="content-text">
                
                
<div style="text-align:center;padding:24px 16px;background:linear-gradient(135deg,var(--cream) 0%,var(--white) 100%);border-radius:12px;margin-bottom:24px;">
    <p style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Trusted by 10,000+ Businesses</p>
    <p style="font-size:14px;color:var(--text-muted);margin:0;">4.9 Google Rating | 50,000+ Documents | 15+ Years CA-led Practice</p>
</div>

<p style="margin-top:16px;line-height:1.7;">Trusted by foreign companies hiring Indian talent across Bengaluru, Mumbai, Pune, Delhi-NCR, Hyderabad, and Chennai - plus enterprise clients including Hyundai, Asian Paints, and Bridgestone.</p>

<h3 style="margin-top:32px;color:var(--blue);">Compliance Authority Block - Statutes Patron Files Under</h3>
<div class="table-responsive">
    <table class="table table-bordered" style="margin-top:16px;">
        <thead><tr><th>Authority</th><th>Statute</th><th>Filing</th></tr></thead>
        <tbody>
            <tr><td>EPFO</td><td>EPF and MP Act 1952</td><td>Monthly ECR; UAN management</td></tr>
            <tr><td>ESIC</td><td>ESI Act 1948</td><td>Monthly ESI challan; Form 1 enrolment</td></tr>
            <tr><td>CBDT</td><td>Income-tax Act 1961</td><td>Monthly TDS; quarterly Form 24Q; annual Form 16</td></tr>
            <tr><td>State PT Authority</td><td>State Professional Tax Acts</td><td>Monthly state PT challans</td></tr>
            <tr><td>Labour Department</td><td>Code on Wages 2019, IR Code 2020, OSH Code 2020, Code on Social Security 2020</td><td>Wage register, Shops and Establishments registration</td></tr>
            <tr><td>Data Protection Board</td><td>DPDP Act 2023</td><td>Quarterly fiduciary attestation; breach notification SOP</td></tr>
        </tbody>
    </table>
</div>

<div style="margin-top:24px;padding:20px;background:var(--cream);border-radius:10px;border-left:4px solid var(--orange);">
    <strong style="color:var(--blue);">Outcome Proof:</strong> One US-headquartered SaaS firm transitioned 14 long-engaged Indian contractors to Patron EOR employment in 6 weeks, eliminating an estimated USD 280,000 retrospective gratuity / EPF exposure plus Permanent Establishment risk - and stabilised 100 percent retention through the conversion.
</div>

<p style="margin-top:24px;line-height:1.7;"><strong>4-Office City Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves foreign companies hiring across India - both in-person where required and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR vs Entity vs Global PEO vs Contractor</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Patron EOR India</th><th>Set Up Pvt Ltd Entity</th><th>Global PEO Platforms</th><th>Indian Contractor</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Setup time</strong></td><td>48 hours offer letter</td><td>3 to 6 months</td><td>1 to 2 weeks</td><td>Same day</td></tr>
<tr><td><strong>Setup cost</strong></td><td>Rs 5,000 onboarding fee</td><td>Rs 1.5 lakh to Rs 5 lakh</td><td>USD 0 to USD 500 setup</td><td>Nil</td></tr>
<tr><td><strong>Ongoing cost</strong></td><td>Rs 22K to Rs 35K PEPM (INR)</td><td>Rs 50K to Rs 1.5L per month entity overhead + payroll</td><td>USD 199 to USD 699 PEPM (with FX markup)</td><td>Invoice value only</td></tr>
<tr><td><strong>Compliance ownership</strong></td><td>Patron (in-house CA + CS)</td><td>You + your CA</td><td>Platform (often outsourced)</td><td>Contractor self-files</td></tr>
<tr><td><strong>PE risk</strong></td><td>SHIELDED via legal-employer model</td><td>ENTITY accepted as Indian taxpayer</td><td>Shielded but documentation depth varies</td><td>HIGH RISK - dependent agent</td></tr>
<tr><td><strong>Misclassification risk</strong></td><td>Zero (legal employee)</td><td>Zero (entity employee)</td><td>Zero (legal employee)</td><td>HIGH (recharacterisation risk)</td></tr>
<tr><td><strong>Local entity required</strong></td><td>No</td><td>Yes</td><td>No</td><td>No</td></tr>
<tr><td><strong>Best for headcount</strong></td><td>1 to 30 employees</td><td>30+ employees long-term</td><td>1 to 30 employees</td><td>Discrete project, under 6 months</td></tr>


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
                
                
<div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;margin-top:24px;">
    <a href="/payroll-processing-and-management-services" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <h3 class="feature-title">Payroll Processing and Management</h3>
            <p class="feature-text">Domestic Indian payroll for entities with EPFO and ESIC codes - parent service.</p>
        </div>
    </a>
    <a href="/private-limited-company-registration" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg></div>
            <h3 class="feature-title">Private Limited Company Registration</h3>
            <p class="feature-text">Set up your own Indian entity when EOR economics flip - the alternative path.</p>
        </div>
    </a>
    <a href="/tds-return" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
            <h3 class="feature-title">TDS Return</h3>
            <p class="feature-text">Quarterly Form 24Q + annual Form 16 filing for entities running their own payroll.</p>
        </div>
    </a>
    <a href="/income-tax-return" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3zM3 9h18M9 21V9"/></svg></div>
            <h3 class="feature-title">Income Tax Return</h3>
            <p class="feature-text">Personal ITR filing for resident Indian employees and DTAA-claiming foreign nationals.</p>
        </div>
    </a>
    <a href="/company-registration-in-usa" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg></div>
            <h3 class="feature-title">Company Registration in USA</h3>
            <p class="feature-text">Set up your US Delaware C-Corp or LLC to receive IP and global revenue.</p>
        </div>
    </a>
    <a href="/company-registration-in-uae" style="text-decoration:none;">
        <div class="feature-card" style="cursor:pointer;">
            <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
            <h3 class="feature-title">Company Registration in UAE</h3>
            <p class="feature-text">UAE Free Zone or Mainland incorporation for tax-efficient holding structures.</p>
        </div>
    </a>
</div>


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
                
                
<h3 style="color:var(--blue);">Governing Acts and Sections</h3>
<ul style="line-height:1.8;margin-top:12px;">
    <li><strong>Section 192 Income-tax Act 1961</strong> - TDS on salary at slab rates; Form 24Q quarterly; Form 16 annual.</li>
    <li><strong>Section 9(1)(i) Income-tax Act 1961</strong> - 'Business Connection' provision for Indian-source income of non-residents. EOR engagement removes the business-connection trigger because the foreign principal is not the legal employer in India and does not maintain a place of business or dependent agent.</li>
    <li><strong>Article 5 of relevant Double Taxation Avoidance Agreement (DTAA)</strong> - Permanent Establishment definition. EOR engagement aligns with the standard reading that the foreign principal does not have a fixed place of business, dependent agent, or habitual contract-conclusion power in India.</li>
    <li><strong>EPF and Miscellaneous Provisions Act 1952</strong> - mandatory provident fund. Employer 12 percent of PF wages, employee 12 percent. 8.33 percent of employer share routed to Employee Pension Scheme (EPS) up to wage ceiling of Rs 15,000.</li>
    <li><strong>Employees State Insurance Act 1948</strong> - mandatory medical / maternity / disability insurance. Employer 3.25 percent, employee 0.75 percent. Applicable to employees with gross wages up to Rs 21,000 per month.</li>
    <li><strong>Payment of Gratuity Act 1972 read with Code on Social Security 2020</strong> - lump sum payment on exit. Permanent employees: 5 years continuous service. Fixed-term and contract employees: 1 year (per Code on Social Security 2020). Approximately 4.81 percent of basic salary provisioned monthly.</li>
    <li><strong>Payment of Bonus Act 1965</strong> - statutory bonus for employees earning up to Rs 21,000 per month. Minimum 8.33 percent, maximum 20 percent of salary, payable annually.</li>
    <li><strong>State Professional Tax Acts (under Constitution Article 276(2))</strong> - state-cap of Rs 2,500 per year. Maharashtra, Karnataka, Tamil Nadu, West Bengal, Gujarat, Andhra Pradesh, Telangana, Kerala levy. Delhi, Haryana, UP, Punjab, Rajasthan, Bihar do not levy.</li>
    <li><strong>Code on Wages 2019, Industrial Relations Code 2020, Occupational Safety, Health and Working Conditions Code 2020, Code on Social Security 2020</strong> - the four Labour Codes consolidating 29 central labour laws. Implementation phased; Patron tracks state-wise rules notification. Reference: <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour and Employment</a>.</li>
    <li><strong>Digital Personal Data Protection Act 2023</strong> - notified 11 August 2023. Data Fiduciary obligations on EOR and foreign principal - consent, breach notification, data subject rights, data localisation.</li>
    <li><strong>Industrial Employment (Standing Orders) Act 1946</strong> - mandatory written documentation of employment terms for industrial undertakings.</li>
</ul>

<h3 style="margin-top:32px;color:var(--blue);">Penalty Provisions</h3>
<ul style="line-height:1.8;margin-top:12px;">
    <li><strong>EPF default:</strong> 12% per annum interest under Sec 7Q + damages 5% to 25% per annum under Sec 14B. Reference: <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>.</li>
    <li><strong>ESI default:</strong> 12% per annum simple interest + damages up to 25% per annum. Reference: <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC</a>.</li>
    <li><strong>TDS default under Sec 192:</strong> interest at 1% per month (deduction default) and 1.5% per month (deposit default); Sec 271C / 271H penalties. Reference: <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax e-Filing Portal</a>.</li>
    <li><strong>Gratuity default:</strong> simple interest at notified rate + penalty up to Rs 20,000 under Sec 9 of Payment of Gratuity Act.</li>
    <li><strong>PE recharacterisation:</strong> India tax on attributed profits + Sec 270A under-reporting penalty 50% to 200%.</li>
    <li><strong>DPDP Act 2023 breach:</strong> penalty up to Rs 250 crore for serious violations. Reference: <a href="https://www.meity.gov.in/" target="_blank" rel="noopener">Ministry of Electronics and Information Technology</a>.</li>
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
                    <p class="faq-expanded__lead">Real questions from foreign-company decision-makers evaluating EOR India for the first time.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an Employer of Record in India?</h3>
                        <div class="faq-expanded__a"><p>An Employer of Record (EOR) in India is an Indian-domiciled entity that legally employs your Indian hires on paper while you direct their day-to-day work. The EOR signs the employment contract, runs monthly INR payroll, deposits EPF and ESI contributions, withholds TDS under Section 192 of the Income-tax Act 1961, files quarterly Form 24Q, issues annual Form 16, and absorbs all legal-employer obligations under the EPF and MP Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, and the four Labour Codes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is EOR legal in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. There is no specific EOR statute in India, but the model functions under standard Indian employment law as a third-party legal employer. EOR engagements are recognised by the EPFO (Provident Fund), ESIC (state insurance), CBDT (income tax), and state Labour Departments. The EOR is the legal employer for all statutory purposes and the foreign principal directs the work without becoming an Indian employer or maintaining a Permanent Establishment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">EOR India ki cost kitni hoti hai? (How much does EOR cost in India per employee?)</h3>
                        <div class="faq-expanded__a"><p>Patron's PEPM service fee starts at Rs 35,000 per employee per month for small teams (1-5 employees) and reduces to Rs 28,000 (6-25) and Rs 22,000 (26+) with volume. Statutory contributions are pass-through at actuals: EPF 12 percent of PF wages, ESI 3.25 percent of gross wages (employees earning up to Rs 21,000 per month), Gratuity 4.81 percent of basic salary, and Professional Tax (state-specific, max Rs 2,500 per year per Constitution Article 276(2)). Group Health Insurance is optional. The fully-loaded CTC for a Rs 12 lakh per annum hire typically lands at Rs 14.5 to 15 lakh including all statutory layers and Patron service fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between EOR and PEO in India?</h3>
                        <div class="faq-expanded__a"><p>Under an Employer of Record (EOR) model, the EOR is the SOLE legal employer in India - the foreign principal has no Indian-employer status. Under a Professional Employer Organisation (PEO) model in India, the relationship is co-employment - both the PEO and the principal company are joint employers, which usually requires the principal to have its own Indian entity. EOR is the right model when you do not have an Indian entity. PEO works only when you already have an Indian incorporated company and want to outsource HR / payroll while remaining a co-employer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does it take to onboard via EOR India?</h3>
                        <div class="faq-expanded__a"><p>For a resident Indian hire, the offer letter is issued within 48 hours of quote acceptance, and full onboarding (KYC, EPF UAN generation, ESI Form 1, Professional Tax registration, background verification) takes 5 to 7 working days. The first payroll cycle runs at the end of that month. For a foreign national hire, add 2 to 8 weeks for Employment Visa processing and Foreigners Regional Registration Office (FRRO) registration depending on country of origin. Total time-to-productive can be under 10 days for an Indian national resident hire.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does EOR avoid Permanent Establishment risk in India?</h3>
                        <div class="faq-expanded__a"><p>Permanent Establishment (PE) risk under Section 9(1)(i) of the Income-tax Act 1961 and Article 5 of the relevant DTAA is triggered when a foreign company maintains a fixed place of business, a dependent agent, or habitual contract-conclusion power in India. Under Patron's EOR model, the legal employer is Patron Accounting LLP - an independent Indian entity - not the foreign principal. The foreign principal does not have a fixed place of business in India, no dependent agent under its control, and no contract-conclusion authority - removing the standard PE triggers. We provide a documented disclosure trail across employment contracts, payroll filings, and statutory returns to defend the no-PE position under tax scrutiny.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<dl style="display:grid;grid-template-columns:1fr;gap:14px;margin-top:24px;">
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">Is EOR legal in India?</dt>
        <dd style="margin:0;color:var(--text-dark);">Yes - functions under standard employment law as third-party legal employer.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">EOR vs entity setup time?</dt>
        <dd style="margin:0;color:var(--text-dark);">EOR: 48-hour offer, 5-7 day onboarding. Entity: 3-6 months.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">EPF rate?</dt>
        <dd style="margin:0;color:var(--text-dark);">12% employer + 12% employee on PF wages. 8.33% routed to EPS pension.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">ESI rate and ceiling?</dt>
        <dd style="margin:0;color:var(--text-dark);">3.25% employer + 0.75% employee. Only for gross wages up to Rs 21,000/month.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">Gratuity rate?</dt>
        <dd style="margin:0;color:var(--text-dark);">4.81% of basic. Payable after 5 years (1 year for fixed-term per Code on Social Security 2020).</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">Professional Tax cap?</dt>
        <dd style="margin:0;color:var(--text-dark);">Rs 2,500/year per Constitution Article 276(2). State-specific.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">Patron PEPM fee?</dt>
        <dd style="margin:0;color:var(--text-dark);">From Rs 35,000 (1-5 employees) to Rs 22,000 (26+ employees). All-inclusive INR.</dd>
    </div>
    <div style="padding:14px 16px;background:var(--cream);border-radius:8px;">
        <dt style="font-weight:700;color:var(--blue);margin-bottom:4px;">PE risk?</dt>
        <dd style="margin:0;color:var(--text-dark);">Shielded - Patron is the legal employer, no business connection or dependent agent for foreign principal.</dd>
    </div>
</dl>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Drivers Make Timing Matter</h2>
            <div class="content-text">
                
                
<p>Three drivers make timing matter for foreign employers in India.</p>
<ol style="line-height:1.8;margin-top:12px;">
    <li><strong>Income-tax Act 2025 commences 1 April 2026</strong> - section renumbering, Tax Year terminology, and TDS form changes flow through to every payroll filing.</li>
    <li><strong>Code on Social Security 2020 fixed-term gratuity rule (1-year vesting) is now active</strong> - employers using fixed-term contracts to limit gratuity exposure are now exposed from Year 1.</li>
    <li><strong>Digital Personal Data Protection Act 2023 rules being notified phase-wise through 2026</strong>, with breach-notification penalties up to Rs 250 crore for serious violations.</li>
</ol>
<p style="margin-top:16px;font-weight:700;color:var(--blue);">Patron's EOR engagement absorbs all three transitions without your team tracking them.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Hire Compliantly. Hire Fast. Hire Without an Entity.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p>Hiring in India without an entity is no longer a 'shortcut' - it is the cleanest, fastest, and most compliant path to building an Indian team for any foreign company that does not yet need a permanent local entity. The Employer of Record model delivers a 48-hour offer letter, transparent INR pricing, full statutory compliance under EPF, ESI, gratuity, professional tax, and TDS, Permanent Establishment shielding under Section 9(1)(i) and DTAA Article 5, and DPDP Act 2023 data fiduciary cover.</p>

<p>Patron Accounting brings 15+ years of Indian tax and labour practice and an in-house CA and CS team - not a SaaS platform with outsourced compliance. We file under our own EPFO code, our own ESIC code, our own TAN, and our own state Shops and Establishments registrations across India. When your headcount or strategy flips toward an Indian entity, we incorporate your private limited company too - and migrate your team across without break in service or compliance debt.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20want%20a%20free%20quote%20for%20EOR%20India%20services." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20India%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you.">Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Country-Source Pages and Adjacent Patron Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Country-specific deep-link spokes and adjacent compliance services for foreign principals.</p>
            
            
<div class="pa-cross-block" style="margin-top:32px;">
    <h3 style="color:var(--blue);font-size:20px;margin-bottom:16px;text-align:center;">Adjacent Patron Services</h3>
    <div class="pa-cross-grid">
        <a href="/payroll-processing-and-management-services" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="pa-cross-name">Payroll Processing and Management</div>
            <div class="pa-cross-sub">India</div>
        </a>
        <a href="/private-limited-company-registration" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div class="pa-cross-name">Private Limited Company Registration</div>
            <div class="pa-cross-sub">India</div>
        </a>
        <a href="/llp-incorporation" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2h-5l-2-2H5a2 2 0 00-2 2z"/></svg>
            </div>
            <div class="pa-cross-name">LLP Incorporation</div>
            <div class="pa-cross-sub">India</div>
        </a>
        <a href="/company-registration-in-usa" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg>
            </div>
            <div class="pa-cross-name">Company Registration in USA</div>
            <div class="pa-cross-sub">United States</div>
        </a>
        <a href="/company-registration-in-uae" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <div class="pa-cross-name">Company Registration in UAE</div>
            <div class="pa-cross-sub">United Arab Emirates</div>
        </a>
        <a href="/tds-return" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="pa-cross-name">TDS Return</div>
            <div class="pa-cross-sub">India</div>
        </a>
        <a href="/income-tax-return" class="pa-cross-card">
            <div class="pa-cross-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3zM3 9h18M9 21V9"/></svg>
            </div>
            <div class="pa-cross-name">Income Tax Return</div>
            <div class="pa-cross-sub">India</div>
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
            <p><strong>Content Created:</strong> 06 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA and CS Team, Patron Accounting LLP</p>
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
    if (el1) { el1.textContent = dateStr; }
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) { el2.textContent = dateStr; }
})();
</script>


<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
