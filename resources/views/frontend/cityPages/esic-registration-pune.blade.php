
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
    <title>ESIC Registration in Pune - Process, Threshold & Wages</title>
    <meta name="description" content="CA-assisted ESIC registration in Pune. 10+ employee threshold, 3.25% employer contribution. Serving Chakan MIDC, Hinjewadi, Kharadi. Call +91 945 945 6700.">
    <link rel="canonical" href="/esic-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Registration in Pune - Process, Threshold & Wages">
    <meta property="og:description" content="CA-assisted ESIC registration in Pune. 10+ employee threshold, 3.25% employer contribution. Serving Chakan MIDC, Hinjewadi, Kharadi. Call +91 945 945 6700.">
    <meta property="og:url" content="/esic-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="language" content="en-IN">
    <link rel="alternate" hreflang="en-IN" href="/esic-registration/pune">
    <meta property="og:image" content="/images/esic-registration/pune-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Registration in Pune - Process, Threshold & Wages">
    <meta name="twitter:description" content="CA-assisted ESIC registration in Pune. 10+ employee threshold, 3.25% employer contribution. Serving Chakan MIDC, Hinjewadi, Kharadi. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/esic-registration/pune-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Registration in Pune",
      "description": "CA-assisted ESIC registration in Pune. 10+ employee threshold, 3.25% employer contribution. Serving Chakan MIDC, Hinjewadi, Kharadi. Call +91 945 945 6700.",
      "url": "/esic-registration/pune",
      "serviceType": "ESIC Registration in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "/",
        "logo": "/images/site-logo.svg"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "/esic-registration/pune",
        "price": "21000"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.patronaccounting.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "ESIC Registration in India: Process, Benefits and Fees",
          "item": "https://www.patronaccounting.com/esic-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Registration in Pune",
          "item": "https://www.patronaccounting.com/esic-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ESIC office handles registrations and compliance for Pune employers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ESIC Sub Regional Office, Pune (SRO Pune) is the jurisdictional authority for all employer registrations, employee enrollments, contribution compliance, and ESIC notices for businesses in Pune district. It is located at Panchdeep Bhavan, S.No. 689/690, Bibwewadi, Pune - 411037 (Phone: 020-24211138/39). All online registrations through the ESIC portal (esic.in) are processed under SRO Pune jurisdiction. In-person visits are generally not required as registration is fully online, but SRO Pune handles inspection notices and representation matters for Pune businesses."
          }
        },
        {
          "@type": "Question",
          "name": "Can ESIC registration be done online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - ESIC registration is fully online through the official portal at esic.in. No physical documents need to be submitted to the ESIC Sub Regional Office, Pune. Patron's CA team handles the entire process remotely or can assist in-person at our Wagholi, Pune office. For Chakan MIDC factory employers, we recommend an in-person consultation at Wagholi to verify Factories Act documentation before portal submission. For Hinjewadi and Kharadi IT companies, the registration is completed entirely online within 2-3 working days. Call +91 945 945 6700 or visit our Pune office to start ESIC registration today."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESIC registration fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no government fee for ESIC registration - the ESIC portal charges nil for employer registration. Patron's professional fee for ESIC registration in Pune starts from Rs. 3,000 for employer registration, with employee enrollment charged separately (from Rs. 2,500 for up to 10 employees). Monthly ESIC return filing is Rs. 1,000 per month. A bundled ESIC + PF registration package starts from Rs. 5,500. Contact Patron at +91 945 945 6700 for a quote based on your employee count and establishment type."
          }
        },
        {
          "@type": "Question",
          "name": "How long does ESIC registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC registration through the ESIC portal (esic.in) typically completes within 2-3 working days for Pune businesses. The employer code and portal credentials are issued immediately upon successful Form 1 submission. Employee TIC cards are generated digitally within 24-48 hours of enrollment. For Chakan MIDC and MIDC Bhosari factories, the process may take an additional day if Factories Act documentation needs to be verified. The registration deadline under Section 10-A of the ESI Act is 15 days from the date of applicability - Patron ensures Pune clients meet this deadline. Call +91 945 945 6700 or WhatsApp for a free timeline assessment."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a Pune employer misses the ESIC registration deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-registration or delayed registration by a Pune employer attracts penalties under Section 85 of the ESI Act, 1948. The ESIC SRO Pune can levy: 12% annual interest on unpaid contributions from the date of applicability, and damages of 5% to 25% of the contribution amount depending on delay period (5% for up to 2 months, 10% for 2-6 months, 15% for 6-12 months, 25% for over 12 months) under Section 85B. The ESIC Amnesty Scheme 2025 (until 31 December 2025) allows late registrations without inspection. Patron assists Pune employers in calculating retrospective dues and filing under the amnesty window."
          }
        },
        {
          "@type": "Question",
          "name": "Does ESIC apply to contract workers at Chakan MIDC factories?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - under Section 2(9) and Section 40 of the ESI Act, 1948, contract workers deployed through manpower contractors at a Chakan MIDC or MIDC Bhosari factory are covered under ESIC. The principal employer (factory owner) is responsible for ensuring the contractor registers under ESIC and deducts contributions for contract workers. If the contractor defaults, the principal employer is liable for contributions under Section 40. Patron's CA team reviews contractor compliance as part of the ESIC registration for Pune manufacturing clients."
          }
        },
        {
          "@type": "Question",
          "name": "Is ESIC registration required for IT companies in Hinjewadi and Kharadi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - IT companies in Hinjewadi IT Park and Kharadi IT Hub are commercial establishments under the Maharashtra Shops and Establishments Act, 2017. Once headcount reaches 10 or more employees earning up to Rs. 21,000 per month, ESIC registration becomes mandatory within 15 days. Note that companies incorporated via SPICe+ receive an auto-generated ESIC employer code - but this requires activation and separate contribution filing through the ESIC portal. Patron's Pune CA team handles ESIC activation for newly incorporated companies in Hinjewadi and Kharadi that received ESIC codes through SPICe+ but have not yet filed contributions. Quick Answers"
          }
        }
      ]
    }
  ]
}</script>
@endsection

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

@section('content')
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
                        ESIC Registration in Pune
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">25 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Must Register:</span> Pune employers with 10+ employees paying wages up to Rs. 21,000/month - factories, IT companies, shops, and hotels</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution Rate:</span> Employer: 3.25% + Employee: 0.75% of monthly wages (w.e.f. 01.07.2019, confirmed from esic.gov.in)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration Deadline:</span> Within 15 days of reaching the 10-employee threshold under Section 10-A of the ESI Act, 1948</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Pune Office:</span> RTC Silver, Wagholi, Pune - 30 mins from Chakan MIDC, Hinjewadi IT Park, and Kharadi IT Hub</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across Maharashtra - 2-3 working day ESIC registration for Pune employers</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20ESIC%20Registration%20in%20Pune" target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ESIC Registration in Pune'/>
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
                                <option value="esic-registration/pune" selected>ESIC Registration in Pune</option>
                                <option value="payroll-services/pune">Payroll Services in Pune</option>
                                <option value="pf-registration">PF Registration</option>
                                <option value="gst-registration/pune">GST Registration in Pune</option>
                                <option value="income-tax-return/pune">Income Tax Return in Pune</option>
                                <option value="accounting-services/pune">Accounting Services in Pune</option>
                                <option value="private-limited-company-registration/pune">Private Limited Company Registration in Pune</option>
                                <option value="startup-registration/pune">Startup Registration in Pune</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our ESIC + PF registration simultaneously. Their CA explained the Factories Act applicability for our Chakan MIDC unit clearly - something our previous HR consultant had missed. Done in 2 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">OM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Operations Manager</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Auto-component Manufacturer, Chakan MIDC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We hit 10 employees in Hinjewadi and didn't know we needed ESIC within 15 days. Patron flagged this, handled the registration immediately, and bundled it with our PF and Shop Act. Zero penalty exposure.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Startup Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Company, Hinjewadi IT Park, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our MIDC Bhosari factory had a contract labour compliance gap. Patron's team identified it during the ESIC registration assessment and helped us set up contractor oversight under Section 40. Thorough CA work.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HR</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">HR Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Plant, MIDC Bhosari, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Received an ESIC SRO Pune notice for contribution determination under Section 45-A. Patron's CA represented us and got the demand revised. Their direct experience with ESIC SRO Pune procedures is invaluable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Retail Chain, Viman Nagar, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SPICe+ gave us an auto-generated ESIC code but we had no idea how to activate it and file contributions. Patron's Pune team sorted it out in 1 day and set up our monthly ESIC return filing. Very responsive.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Co-Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Services Startup, Kharadi, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>CA-supervised ESIC registration for Pune manufacturers, IT startups, and service businesses. 2-3 working day turnaround.</p>
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
            <a class="toc-btn active" href="#overview">Overview</a>
            <a class="toc-btn" href="#what-is">What Is ESIC</a>
            <a class="toc-btn" href="#who-needs">Who Must Register</a>
            <a class="toc-btn" href="#benefits-section">Employee Benefits</a>
            <a class="toc-btn" href="#contribution-rates">Contribution Rates</a>
            <a class="toc-btn" href="#process">Registration Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#why-patron">Why Patron</a>
            <a class="toc-btn" href="#comparison-section">Comparison</a>
            <a class="toc-btn" href="#related-section">Related Services</a>
            <a class="toc-btn" href="#legal-section">Legal Framework</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Registration in Pune Services at a Glance</strong></p>
                    <p>ESIC registration in Pune is mandatory statutory compliance under the Employees' State Insurance Act, 1948 for every employer with 10 or more employees earning up to Rs. 21,000 per month. The ESIC Sub Regional Office, Pune - located at Panchdeep Bhavan, Bibwewadi - oversees all employer registrations, employee enrollments, and contribution compliance for Pune district businesses.</p>
                </div>
                <p><div class="table-responsive-wrapper" style="margin-bottom:24px;">
<table class="table-amount" style="width:100%;border-collapse:collapse;">
<thead><tr style="background:var(--blue);color:#fff;"><th style="padding:12px 16px;font-size:13px;text-align:left;">Parameter</th><th style="padding:12px 16px;font-size:13px;text-align:left;">Details</th></tr></thead>
<tbody>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Service</td><td style="padding:12px 16px;font-size:14px;">ESIC Registration + Employee Enrollment - Pune</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Who Must Register</td><td style="padding:12px 16px;font-size:14px;">Pune employers with 10+ employees earning up to Rs. 21,000/month</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Governing Law</td><td style="padding:12px 16px;font-size:14px;">Employees' State Insurance Act, 1948 (Section 2(12), Section 1(5))</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Employer Contribution</td><td style="padding:12px 16px;font-size:14px;">3.25% of wages payable (w.e.f. 01.07.2019)</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Employee Contribution</td><td style="padding:12px 16px;font-size:14px;">0.75% of wages payable (exempted if daily wage up to Rs. 176)</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Registration Deadline</td><td style="padding:12px 16px;font-size:14px;">Within 15 days from date of applicability under Section 10-A</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Jurisdictional Office</td><td style="padding:12px 16px;font-size:14px;">ESIC Sub Regional Office, Panchdeep Bhavan, Bibwewadi, Pune - 411037</td></tr>
<tr><td style="padding:12px 16px;font-weight:600;font-size:14px;">Patron Pune Office</td><td style="padding:12px 16px;font-size:14px;">RTC Silver, Wagholi, Pune - walk-in + online</td></tr>
</tbody></table></div></p>
                <p><p class="content-text">Auto-ancillary plants in Chakan MIDC and IT companies in Hinjewadi are among the highest-density ESIC-covered employer clusters in Maharashtra. Non-registration or delayed contribution payment attracts 12% annual interest on outstanding dues and damages ranging from 5% to 25% of the contribution amount under Section 85 of the ESI Act, 1948.</p>
<p class="content-text">The ESIC Amnesty Scheme 2025 (active until 31 December 2025) allows unregistered employers to enroll without inspection or demands for past dues - a time-sensitive opportunity for Pune employers currently without ESIC registration. <strong>Reviewed by CA &amp; CS Team - Patron Accounting LLP | RTC Silver, Wagholi, Pune.</strong></p>
<p style="font-size:13px;color:var(--text-muted);">Last Updated: <span id="lastUpdated">25 March 2026</span></p></p>
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
                <h2 class="section-title">What Is ESIC Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p class="content-text"><strong id="what-is">ESIC registration is mandatory enrollment of an employer and their eligible employees under the Employees' State Insurance Act, 1948.</strong> It provides employees and their dependents with medical care, sickness cash benefits, maternity benefits, disability benefits, and dependent benefits funded by employer and employee contributions.</p>
<p class="content-text">For Pune's manufacturing sector - particularly the 500+ factories in Chakan MIDC and MIDC Bhosari that supply components to Mercedes-Benz, Volkswagen, Bajaj Auto, and Mahindra - <a href="/esic-registration">ESIC registration</a> is a legal obligation under both the ESI Act, 1948 and the Factories Act, 1948, creating a social security framework for thousands of workers in Pune's industrial belt.</p>
<p class="content-text">For IT companies in Hinjewadi IT Park and Kharadi IT Hub - where employee headcount often crosses the 10-person threshold within the first year of operations - ESIC registration must be completed within 15 days under Section 10-A of the ESI Act to avoid penalty exposure from the ESIC Sub Regional Office, Pune.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Registration in Pune:</strong></p>
                    <div style="margin-top:20px;">
<div style="padding:12px 0;border-bottom:1px solid var(--gray-100);"><strong style="color:var(--blue);">ESI Act, 1948:</strong> <span style="font-size:14px;color:var(--text-secondary);">The Employees' State Insurance Act, 1948 - primary legislation mandating ESIC coverage for establishments employing 10+ persons in notified areas including all of Maharashtra.</span></div>
<div style="padding:12px 0;border-bottom:1px solid var(--gray-100);"><strong style="color:var(--blue);">ESIC SRO Pune:</strong> <span style="font-size:14px;color:var(--text-secondary);">Jurisdictional ESIC office at Panchdeep Bhavan, Bibwewadi, Pune - 411037 (Phone: 020-24211138/39), handling all registrations, enrollments, notices, and inspections for Pune district employers.</span></div>
<div style="padding:12px 0;border-bottom:1px solid var(--gray-100);"><strong style="color:var(--blue);">Form 1 (ESI Registration Form):</strong> <span style="font-size:14px;color:var(--text-secondary);">The online employer registration form submitted on the ESIC portal (esic.in) to obtain the 17-digit employer code for ESIC compliance.</span></div>
<div style="padding:12px 0;border-bottom:1px solid var(--gray-100);"><strong style="color:var(--blue);">TIC (Temporary Identity Certificate):</strong> <span style="font-size:14px;color:var(--text-secondary);">Digital card issued to each enrolled employee enabling access to ESIC medical benefits. Replaced by the permanent Pehchan Card after the contribution period.</span></div>
<div style="padding:12px 0;"><strong style="color:var(--blue);">ESIC Amnesty Scheme 2025:</strong> <span style="font-size:14px;color:var(--text-secondary);">Active until 31 December 2025 - allows unregistered Pune employers to register and pay retrospective contributions without criminal prosecution or inspection demand.</span></div>
</div>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESI Act, 1948</span>
                        <strong>ESIC Covered</strong>
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
            <h2 class="section-title">Who Must Register for ESIC in Pune?</h2>
            <div class="content-text">
                
                <p class="content-text" id="who-needs">The Employees' State Insurance Act, 1948 mandates ESIC registration for all covered establishments in Pune from the moment they meet the employee threshold. Under Section 1(5) of the ESI Act, the following Pune establishments are covered when they employ 10 or more persons:</p>
<ul class="content-list">
<li>Factories and manufacturing units in Chakan MIDC, MIDC Bhosari, and Chinchwad covered under the Factories Act, 1948</li>
<li>Shops and establishments in Baner, Wakad, Viman Nagar, and Kharadi covered under the Maharashtra Shops and Establishments Act, 2017</li>
<li>Hotels, restaurants, and road motor transport establishments with 10+ employees</li>
<li>IT companies, software firms, and tech startups in Hinjewadi IT Park and Kharadi IT Hub</li>
<li>Cinemas, private educational institutions, and newspaper establishments</li>
</ul>
<div class="highlight-box" style="background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);padding:16px 20px;margin-top:20px;">
<strong style="color:var(--blue);">Key Applicability Rules for Pune Employers:</strong>
<ul style="margin:8px 0 0;padding-left:20px;font-size:14px;color:var(--text-secondary);">
<li>Maharashtra applies the <strong>10-employee threshold</strong> (not 20) - all Pune establishments with 10+ employees in specified activities must register</li>
<li>All employees earning wages up to <strong>Rs. 21,000 per month</strong> (Rs. 25,000 for employees with disabilities) are covered</li>
<li>Contract workers and casual employees engaged through contractors count toward the 10-employee threshold under Section 2(9)</li>
<li>Once covered, an establishment remains covered even if employee count subsequently falls below 10</li>
</ul>
</div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our ESIC Registration Services for Pune Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC Employer Registration (Form 1)</td>
  <td style="padding:12px 16px;font-size:14px;">Form 1 filing on ESIC portal, employer code issuance, credential setup, and ESIC SRO Pune registration confirmation. Fully online via esic.in</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Employee Enrollment and TIC/Pehchan Card</td>
  <td style="padding:12px 16px;font-size:14px;">Complete enrollment of all eligible employees on ESIC portal including TIC generation and Pehchan Card dispatch coordination. Bulk upload for 50+ employees</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Factories Act vs Shops Act Assessment</td>
  <td style="padding:12px 16px;font-size:14px;">CA verifies whether Pune establishment registers as factory under Factories Act, 1948 (Chakan MIDC/Bhosari) or commercial establishment under Maharashtra Shops Act, 2017 (IT/service sector)</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Sub-Code Registration (Multi-Location)</td>
  <td style="padding:12px 16px;font-size:14px;">Separate ESIC sub-codes for each Pune location (head office, Chakan MIDC factory, branches) linked to parent employer code via ESIC portal</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Monthly ESIC Return Filing</td>
  <td style="padding:12px 16px;font-size:14px;">Monthly contribution challan filing by the 15th of each month - employer (3.25%) + employee (0.75%) combined remittance via SBI or ESIC portal online payment</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC SRO Pune Notice Representation</td>
  <td style="padding:12px 16px;font-size:14px;">CA representation for Section 45-A contribution determination notices, inspection responses, and ESIC SRO Pune correspondence</td>
</tr>
<tr>
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC + PF + PTRC Bundle</td>
  <td style="padding:12px 16px;font-size:14px;">Combined ESIC, Provident Fund, and Maharashtra Professional Tax registration for new Pune companies - especially post-SPICe+ incorporation</td>
</tr>

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
            <h2 class="section-title">6-Step ESIC Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's CA team handles every step - from applicability check to first contribution filing with ESIC SRO Pune</p>
        </header>
        <div class="steps-container">
            <div class="step-card" id="process">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Applicability Assessment and Entity Classification</h3>
    <p class="step-description">Patron's CA confirms whether your Pune establishment falls under the ESI Act, 1948. We assess employee headcount (including contract labour under Section 2(9)), wage levels, and the specific activity - whether it is a factory under the Factories Act, 1948 (for Chakan MIDC and MIDC Bhosari manufacturers) or a commercial establishment under the Maharashtra Shops and Establishments Act, 2017 (for Hinjewadi and Kharadi IT companies). We also confirm whether the establishment's address falls within the ESIC-notified area under ESIC SRO Pune jurisdiction.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-employee threshold verified</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Factories Act vs Shops Act classification</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contract labour headcount included</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="10" y="10" width="100" height="80" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
          <circle cx="40" cy="45" r="18" fill="#E8F0FE" stroke="#14365F" stroke-width="1.5"/>
          <path d="M33 45 l5 5 10-10" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          <line x1="68" y1="35" x2="100" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
          <line x1="68" y1="45" x2="95" y2="45" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
          <line x1="68" y1="55" x2="90" y2="55" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.2"/>
        </svg>
      </div>
      <span class="illustration-label">Eligibility Check</span>
      <span class="step-number-large">01</span>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Document Preparation and Verification</h3>
    <p class="step-description">We collect and verify all documents required for ESIC online registration: Registration Certificate under the Factories Act or Maharashtra Shops and Establishments Act, Certificate of Incorporation, GST registration certificate, PAN of the establishment, address proof (utility bill or rental agreement not older than 3 months), cancelled cheque, and list of directors/partners. For Chakan MIDC factories, the MIDC allotment letter and factory licence under the Factories Act, 1948 are additionally prepared as supporting documents.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA-reviewed complete document set</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIDC allotment letter for factories</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All digital - no physical submission</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
          <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
          <line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
          <line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
          <circle cx="85" cy="78" r="15" fill="#14365F" opacity="0.9"/>
          <path d="M79 78 l4 4 8-8" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <span class="illustration-label">Documents Ready</span>
      <span class="step-number-large">02</span>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Employer Registration on ESIC Portal (Form 1)</h3>
    <p class="step-description">Patron registers the employer on the official ESIC portal (esic.in) via Employer Login and Sign Up. After creating credentials, we complete Employer Registration Form 1 on the portal with establishment details, unit type, employer details, and initial employee details. The employer receives credentials and temporary code via email from the ESIC portal. The ESIC Sub Regional Office, Pune (Panchdeep Bhavan, Bibwewadi, Pune - 411037) is the jurisdictional authority for all registration approvals and future compliance for Pune employers.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fully online via esic.in portal</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Employer code issued immediately</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No visit to ESIC SRO Pune required</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="20" y="15" width="80" height="60" rx="8" fill="#E8F0FE" stroke="#14365F" stroke-width="1.5"/>
          <rect x="30" y="25" width="60" height="8" rx="3" fill="#F5A623" opacity="0.7"/>
          <rect x="30" y="40" width="60" height="6" rx="3" fill="#14365F" opacity="0.2"/>
          <rect x="30" y="52" width="40" height="6" rx="3" fill="#14365F" opacity="0.2"/>
          <path d="M85 68 l8-8 -8-8" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <span class="illustration-label">Portal Filed</span>
      <span class="step-number-large">03</span>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Employee Enrollment and TIC/Pehchan Card Issuance</h3>
    <p class="step-description">After employer registration, Patron enrolls all eligible employees (those earning up to Rs. 21,000 per month) in the ESIC system. Each insured employee receives a Temporary Identity Certificate (TIC) and subsequently an ESIC Pehchan Card - a magnetic card required to avail ESI medical benefits at ESIC dispensaries and tie-up hospitals in Pune. For large Chakan MIDC employers with 50+ workers, Patron manages bulk employee enrollment through the ESIC portal's batch upload facility.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All eligible employees enrolled</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TIC cards within 24-48 hours</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bulk upload for 50+ workers</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="40" cy="35" r="16" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
          <circle cx="80" cy="35" r="16" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
          <rect x="15" y="60" width="90" height="25" rx="6" fill="#E8F0FE" stroke="#14365F" stroke-width="1.5"/>
          <path d="M35 35 l4 4 8-8" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M75 35 l4 4 8-8" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <line x1="30" y1="72" x2="90" y2="72" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
        </svg>
      </div>
      <span class="illustration-label">Enrollment Done</span>
      <span class="step-number-large">04</span>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">First Contribution Filing and Challan Payment</h3>
    <p class="step-description">Patron files the first ESIC contribution through the ESIC portal by the 15th of the month following the first wage payment. Both the employer contribution (3.25%) and employee contribution (0.75%) are remitted together via designated SBI branches or online payment on the ESIC portal. Patron verifies the contribution challan and maintains records for the employer's compliance file. For factories in MIDC Bhosari, we cross-check ESIC contribution with PF contribution filings to ensure both statutory dues are filed for the same wage month.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3.25% + 0.75% combined remittance</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Due by 15th of following month</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-checked with PF filings</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="20" y="20" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
          <circle cx="60" cy="45" r="14" fill="#E8F0FE" stroke="#14365F" stroke-width="1.5"/>
          <path d="M55 45 l4 4 8-8" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M30 80 l20-15 15 10 25-20" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <span class="illustration-label">Contribution Filed</span>
      <span class="step-number-large">05</span>
    </div>
  </div>
</div>
<div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Sub-Code Registration for Multi-Location Pune Employers</h3>
    <p class="step-description">Pune employers operating multiple establishments - such as a head office in Baner and a manufacturing unit in Chakan MIDC - must obtain separate sub-codes under the ESIC Sub Regional Office, Pune for each location. Patron applies for sub-codes on the ESIC portal, linking each sub-location to the parent employer registration code. This ensures correct contribution attribution and compliance tracking for multi-site employers in Pune's industrial and IT zones. For ongoing compliance, Patron handles monthly returns and employee additions under <a href="/payroll-services">Payroll Services</a>.</p>
    <div class="step-highlights">
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Separate sub-codes per location</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Parent-child code linkage</span>
      <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ongoing monthly compliance</span>
    </div>
  </div>
  <div class="step-visual">
    <div class="step-illustration">
      <div class="illustration-icon">
        <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="60" cy="22" r="12" fill="#14365F" opacity="0.8"/>
          <path d="M48 34 L30 60 M72 34 L90 60" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
          <circle cx="30" cy="70" r="10" fill="#F5A623" opacity="0.8"/>
          <circle cx="90" cy="70" r="10" fill="#F5A623" opacity="0.8"/>
          <path d="M56 22 l4 4 8-8" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <span class="illustration-label">Multi-Site Active</span>
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
            <h2 class="section-title">Documents Required for ESIC Registration in Pune</h2>
            <div class="content-text">
                
                <p class="content-text">Since the ESIC registration process is fully online via esic.in, no physical document submission is required to the ESIC SRO Pune. The following documents are needed in digital form during the online application:</p>
<ul class="content-list">
<li><strong>Registration Certificate</strong> under the Factories Act, 1948 OR Maharashtra Shops and Establishments Act, 2017 (as applicable to your Pune establishment)</li>
<li><strong>Certificate of Incorporation</strong> (for companies registered under RoC Pune) / Partnership deed (for firms) / Proprietorship declaration</li>
<li><strong>GST Registration Certificate</strong> (GSTIN of the establishment)</li>
<li><strong>PAN card</strong> of the establishment</li>
<li><strong>Memorandum of Association and Articles of Association</strong> (for companies)</li>
<li><strong>Address proof</strong> of the establishment: utility bill (not older than 3 months) OR rental/lease agreement OR property tax receipt</li>
<li><strong>Cancelled cheque</strong> from the company's bank account</li>
<li><strong>List of directors / partners / proprietor</strong> with their PAN and address</li>
<li><strong>Employee details:</strong> name, date of joining, wages, date of birth, nomination details</li>
<li><strong>MIDC allotment letter</strong> (for Chakan MIDC / MIDC Bhosari factory units - required for confirming factory address and activity category)</li>
</ul>
<div class="highlight-box" style="background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);padding:14px 18px;margin-top:16px;font-size:13px;color:var(--text-secondary);">
<strong>Pune Note:</strong> Registration under the Maharashtra Shops and Establishments Act, 2017 is available on the Aaple Sarkar portal for Pune-based shops and offices. Patron assists in obtaining this registration as part of the ESIC compliance bundle alongside <a href="/payroll-processing-and-management-services">payroll processing</a> setup.
</div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Factory vs Shop Misclassification (Chakan MIDC)</td>
  <td style="padding:12px 16px;font-size:14px;">Manufacturers often register as shops instead of factories. CA verifies Factories Act, 1948 classification vs Maharashtra Shops Act, 2017 to prevent ESIC SRO Pune notices and incorrect ESIC form usage</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Contract Labour Count Disputes</td>
  <td style="padding:12px 16px;font-size:14px;">Hinjewadi IT and Chakan MIDC employers undercount by excluding housekeeping and security contractors. Section 2(9) of the ESI Act includes contract workers in the 10-employee threshold - CA verifies all headcounts</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Incorrect Wage Definition for ESI Calculation</td>
  <td style="padding:12px 16px;font-size:14px;">Overtime, production incentives, and city compensatory allowances are included in ESI wages under Section 2(22). Bonus and one-time payments are excluded. Magarpatta and Viman Nagar employers frequently miscalculate, creating penalty exposure</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Missed 15-Day Registration Window</td>
  <td style="padding:12px 16px;font-size:14px;">Many Hinjewadi startups and Kharadi IT firms miss the 15-day window during rapid hiring. Late registration triggers retrospective dues from the applicability date plus 12% annual interest from ESIC SRO Pune under Section 39(5)(a)</td>
</tr>
<tr>
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Multi-Location Sub-Code Management</td>
  <td style="padding:12px 16px;font-size:14px;">Pune employers with offices in Baner, Kharadi, and a factory in Chakan MIDC need separate ESIC sub-codes for each location. Missing sub-codes result in cross-location contribution mismatches during ESIC SRO Pune audits</td>
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
            <h2 class="section-title">ESIC Registration Fees in Pune 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Government Fee for ESIC Registration</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">Nil</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC Registration (Employer) - Form 1 + employer code + ESIC portal setup</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">From Rs. 3,000</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Employee Enrollment (first 10 employees) - TIC generation included</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">From Rs. 2,500</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Additional Employee Enrollment (beyond initial batch)</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">Rs. 250 per employee</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Monthly ESIC Return Filing (contribution challan by 15th)</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">Rs. 1,000/month</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Sub-Code Registration (per additional Pune location)</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">Rs. 1,500 per sub-code</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC + PF Bundle (new Pune company)</td>
  <td style="padding:12px 16px;font-size:14px;text-align:right;">From Rs. 5,500</td>
</tr>
<tr>
  <td style="padding:12px 16px;font-weight:700;color:var(--blue);font-size:14px;">Patron Accounting Professional Fees</td>
  <td style="padding:12px 16px;font-weight:700;font-size:14px;text-align:right;">INR 1,499 (Exl GST and Govt. Charges)</td>
</tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20ESIC%20Registration%20in%20Pune" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Document Collection</td>
  <td style="padding:12px 16px;font-size:14px;">1 working day</td>
  <td style="padding:12px 16px;font-size:14px;">Client provides scanned documents; CA reviews for completeness and Factories Act / Shops Act classification</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Eligibility Assessment</td>
  <td style="padding:12px 16px;font-size:14px;">Same day</td>
  <td style="padding:12px 16px;font-size:14px;">CA confirms applicability, employee threshold, and correct establishment category</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">ESIC Portal Registration (Form 1)</td>
  <td style="padding:12px 16px;font-size:14px;">1 working day</td>
  <td style="padding:12px 16px;font-size:14px;">Online via esic.in - no physical submission to ESIC SRO Pune required</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Employee Enrollment and TIC</td>
  <td style="padding:12px 16px;font-size:14px;">1-2 working days</td>
  <td style="padding:12px 16px;font-size:14px;">Proportional to employee count; bulk upload for 50+ employees at Chakan MIDC</td>
</tr>
<tr style="border-bottom:1px solid var(--gray-100);">
  <td style="padding:12px 16px;font-weight:600;font-size:14px;">Credentials and First Login</td>
  <td style="padding:12px 16px;font-size:14px;">Immediate (email)</td>
  <td style="padding:12px 16px;font-size:14px;">Employer credentials and employee TIC issued by ESIC portal upon successful Form 1</td>
</tr>
<tr>
  <td style="padding:12px 16px;font-weight:700;color:var(--blue);font-size:14px;">TOTAL</td>
  <td style="padding:12px 16px;font-weight:700;font-size:14px;color:var(--blue);">2-3 working days</td>
  <td style="padding:12px 16px;font-size:14px;">Employer Code active within 24-48 hours of Form 1 submission via ESIC SRO Pune</td>
</tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Pune Processing Note:</strong> The ESIC Sub Regional Office, Pune (Bibwewadi) does not require in-person visits for new registrations. For Chakan MIDC factories under the Factories Act, 1948, Patron recommends confirming the factory licence number and MIDC allotment letter details before portal submission to avoid rejection and delay.

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
            <h2 class="section-title">Why Choose Patron Accounting for ESIC Registration in Pune?</h2>
        </div>
        <div class="features-grid" id="why-patron">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office - RTC Silver, Wagholi</h3><p class="feature-desc">One of the few CA firms offering ESIC registration from a licensed Pune practice within 15 km of the ESIC Sub Regional Office, Bibwewadi. Walk-in available for Chakan MIDC and Hinjewadi clients.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Factories Act + Shops Act Expertise</h3><p class="feature-desc">CA team experienced in ESIC compliance for Chakan MIDC and MIDC Bhosari units - including Factories Act applicability assessment, multi-godown worker coverage, and contract labour obligations under Section 40.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Bundled ESIC + PF + PTRC Compliance</h3><p class="feature-desc">Patron offers ESIC + PF + PTRC/PTEC registration as a bundle for new Pune companies - especially for Hinjewadi startups post-incorporation through SPICe+ where ESIC is auto-registered but requires contribution setup.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">2-3 Working Day Registration</h3><p class="feature-desc">Fully online process with CA-supervised document preparation. Employer code issued within 24-48 hours of Form 1 submission. No travel to ESIC SRO Pune required for standard registrations.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">SRO Pune Notice Representation</h3><p class="feature-desc">Post-registration, Patron handles monthly ESIC return filing, employee enrollment updates, and ESIC SRO Pune inspection representation under Section 45-A for contribution determination notices.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">10,000+ Maharashtra Businesses Served</h3><p class="feature-desc">15+ years of Maharashtra compliance experience and familiarity with ESIC SRO Pune processing - including direct experience with Factories Act classification for auto-sector clients at Chakan MIDC and MIDC Bhosari.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Businesses for ESIC Compliance</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:20px;margin-bottom:24px;" class="stats-proof-row">
<div style="text-align:center;padding:18px 24px;background:var(--blue-lighter);border-radius:var(--radius-md);min-width:110px;"><div style="font-size:26px;font-weight:800;color:var(--blue);">10,000+</div><div style="font-size:12px;color:var(--text-muted);">Businesses Served</div></div>
<div style="text-align:center;padding:18px 24px;background:var(--orange-lighter);border-radius:var(--radius-md);min-width:110px;"><div style="font-size:26px;font-weight:800;color:var(--orange);">4.9 &#9733;</div><div style="font-size:12px;color:var(--text-muted);">Google Rating</div></div>
<div style="text-align:center;padding:18px 24px;background:var(--blue-lighter);border-radius:var(--radius-md);min-width:110px;"><div style="font-size:26px;font-weight:800;color:var(--blue);">50,000+</div><div style="font-size:12px;color:var(--text-muted);">Docs Filed</div></div>
<div style="text-align:center;padding:18px 24px;background:var(--orange-lighter);border-radius:var(--radius-md);min-width:110px;"><div style="font-size:26px;font-weight:800;color:var(--orange);">15+</div><div style="font-size:12px;color:var(--text-muted);">Years Experience</div></div>
</div>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--gray-50);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:0 0 20px;font-style:italic;color:var(--text-secondary);">"Patron handled our ESIC + PF registration simultaneously. Their CA explained the Factories Act applicability for our Chakan MIDC unit clearly - something our previous HR consultant had missed." <strong style="display:block;margin-top:8px;font-style:normal;color:var(--blue);">- Operations Manager, Auto-Component Manufacturer, Chakan MIDC</strong></blockquote>
<p class="content-text">With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves ESIC-registered businesses across India. Our Wagholi, Pune office handles ESIC registration for Chakan MIDC manufacturers, Hinjewadi IT companies, and Baner service firms - both in-person and online. Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs. Local ESIC Consultants in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr style="background:var(--blue);color:#fff;"><th style="padding:12px 16px;font-size:13px;text-align:left;">Factor</th><th style="padding:12px 16px;font-size:13px;text-align:left;">Local HR/Payroll Consultants</th><th style="padding:12px 16px;font-size:13px;text-align:left;">Patron Accounting (Pune)</th></tr></thead>
                    <tbody>
                        <tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">CA/CS Supervision</td><td style="padding:12px 16px;font-size:14px;">No - HR consultants only</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">Yes - qualified CA reviews all filings</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Factories Act Assessment</td><td style="padding:12px 16px;font-size:14px;">Rarely addressed</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">Included - Chakan MIDC factory classification</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Wage Definition Audit</td><td style="padding:12px 16px;font-size:14px;">Basic input; client self-reports</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">CA verifies correct wage inclusions per Section 2(22)</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Contract Labour Coverage</td><td style="padding:12px 16px;font-size:14px;">Often missed</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">Assessed under Section 2(9) and Section 40 of ESI Act</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Multi-Location Sub-Codes</td><td style="padding:12px 16px;font-size:14px;">Limited capability</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">Handled - all sub-codes for Pune multi-site employers</td></tr>
<tr><td style="padding:12px 16px;font-weight:600;font-size:14px;">Post-Registration Filing</td><td style="padding:12px 16px;font-size:14px;">Monthly returns only</td><td style="padding:12px 16px;font-size:14px;font-weight:600;color:var(--green);">Filing + ESIC SRO Pune notice representation</td></tr>

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
            <h2 class="section-title">Related Services for Pune Employers</h2>
            <div class="content-text">
                
                <p class="content-text">These services are typically required alongside or after ESIC registration for Pune employers. Patron handles all statutory labour compliances from our Pune office:</p>
<ul class="content-list">
<li><a href="/esic-registration">ESIC Registration (National)</a> - Parent India service page for ESIC registration overview and eligibility across all states</li>
<li><a href="/payroll-services/pune">Payroll Services in Pune</a> - Monthly ESIC + PF + PT return filing, salary processing, and Form 16 for Pune businesses</li>
<li><a href="/pf-registration">PF Registration</a> - Provident Fund registration under EPF Act, 1952 - typically bundled with ESIC for new Pune employers</li>
<li><a href="/pt-returns">PT Returns</a> - Maharashtra Professional Tax returns (PTRC/PTEC) required for all registered employers in Maharashtra</li>
<li><a href="/payroll-processing-and-management-services">Payroll Processing and Management</a> - End-to-end payroll outsourcing for Pune businesses including ESIC/PF compliance</li>
<li><a href="/esic-calculation-and-compliance-services">ESIC Calculation and Compliance</a> - Ongoing monthly ESIC calculation, challan filing, and SRO Pune compliance management</li>
<li><a href="/esic-return">ESIC Returns</a> - Monthly ESIC contribution challan and half-yearly return filing for Pune employers</li>
<li><a href="/gst-registration/pune">GST Registration in Pune</a> - GST certificate required as a document for ESIC registration on the ESIC portal</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for ESIC in Pune</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
<table style="width:100%;border-collapse:collapse;">
<thead><tr style="background:var(--blue);color:#fff;"><th style="padding:12px 16px;font-size:13px;text-align:left;">Act / Rule</th><th style="padding:12px 16px;font-size:13px;text-align:left;">Section</th><th style="padding:12px 16px;font-size:13px;text-align:left;">Key Requirement for Pune Employers</th></tr></thead>
<tbody>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Employees' State Insurance Act, 1948</td><td style="padding:12px 16px;font-size:14px;">Section 2(12)</td><td style="padding:12px 16px;font-size:14px;">Defines "employee" as any person employed for wages in or in connection with work of a factory or establishment - applicable to all Pune establishments meeting threshold</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">ESI Act, 1948</td><td style="padding:12px 16px;font-size:14px;">Section 1(5)</td><td style="padding:12px 16px;font-size:14px;">Extends ESI Act coverage to shops, hotels, restaurants, road motor transport, cinemas, and private educational institutions employing 10+ persons. Maharashtra is fully covered.</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">ESI Act, 1948</td><td style="padding:12px 16px;font-size:14px;">Section 39(5)(a)</td><td style="padding:12px 16px;font-size:14px;">Late payment of contributions attracts 12% per annum simple interest on the amount outstanding from the date it becomes due</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);background:var(--gray-50);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">ESI Act, 1948</td><td style="padding:12px 16px;font-size:14px;">Section 85B</td><td style="padding:12px 16px;font-size:14px;">Penalty (damages) for delayed contribution ranges from 5% (1-2 months delay) to 25% (more than 12 months delay) of the contribution outstanding</td></tr>
<tr style="border-bottom:1px solid var(--gray-100);"><td style="padding:12px 16px;font-weight:600;font-size:14px;">Maharashtra Shops and Establishments Act, 2017</td><td style="padding:12px 16px;font-size:14px;">Registration</td><td style="padding:12px 16px;font-size:14px;">Governs commercial establishments in Pune (non-factory employers). Registration certificate is a mandatory document for ESIC registration of Pune shops and offices</td></tr>
<tr><td style="padding:12px 16px;font-weight:600;font-size:14px;">Factories Act, 1948</td><td style="padding:12px 16px;font-size:14px;">Section 2(m)</td><td style="padding:12px 16px;font-size:14px;">Defines factory. Manufacturing units in Chakan MIDC and MIDC Bhosari register under this Act. Factory registration certificate required for ESIC Form 1 for Pune manufacturers.</td></tr>
</tbody></table></div>
<p class="content-text" style="margin-top:16px;" id="legal-section"><strong>Government Sources:</strong> Official ESIC portal - <a href="https://www.esic.in" target="_blank" rel="noopener">www.esic.in</a> | ESIC SRO Pune - <a href="https://sropune.esic.gov.in" target="_blank" rel="noopener">sropune.esic.gov.in</a> | Ministry of Labour - <a href="https://labour.gov.in" target="_blank" rel="noopener">labour.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: ESIC Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers from Patron Accounting's CA team - Pune-specific ESIC rules, ESIC SRO Pune procedures, and Maharashtra compliance</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'ESIC Registration in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ESIC office handles registrations and compliance for Pune employers?</h3>
                        <div class="faq-expanded__a"><p>The ESIC Sub Regional Office, Pune (SRO Pune) is the jurisdictional authority for all employer registrations, employee enrollments, contribution compliance, and ESIC notices for businesses in Pune district. It is located at Panchdeep Bhavan, S.No. 689/690, Bibwewadi, Pune - 411037 (Phone: 020-24211138/39). All online registrations through the ESIC portal (esic.in) are processed under SRO Pune jurisdiction. In-person visits are generally not required as registration is fully online, but SRO Pune handles inspection notices and representation matters for Pune businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can ESIC registration be done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes - ESIC registration is fully online through the official portal at esic.in. No physical documents need to be submitted to the ESIC Sub Regional Office, Pune. Patron's CA team handles the entire process remotely or can assist in-person at our Wagholi, Pune office. For Chakan MIDC factory employers, we recommend an in-person consultation at Wagholi to verify Factories Act documentation before portal submission. For Hinjewadi and Kharadi IT companies, the registration is completed entirely online within 2-3 working days.</p><p style="margin-top:10px;"><strong>Call <a href="tel:+919459456700">+91 945 945 6700</a> or visit our Pune office to start ESIC registration today.</strong></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ESIC registration fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for ESIC registration - the ESIC portal charges nil for employer registration. Patron's professional fee for ESIC registration in Pune starts from Rs. 3,000 for employer registration, with employee enrollment charged separately (from Rs. 2,500 for up to 10 employees). Monthly ESIC return filing is Rs. 1,000 per month. A bundled ESIC + PF registration package starts from Rs. 5,500. Contact Patron at <a href="tel:+919459456700">+91 945 945 6700</a> for a quote based on your employee count and establishment type.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does ESIC registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESIC registration through the ESIC portal (esic.in) typically completes within 2-3 working days for Pune businesses. The employer code and portal credentials are issued immediately upon successful Form 1 submission. Employee TIC cards are generated digitally within 24-48 hours of enrollment. For Chakan MIDC and MIDC Bhosari factories, the process may take an additional day if Factories Act documentation needs to be verified. The registration deadline under Section 10-A of the ESI Act is 15 days from the date of applicability - Patron ensures Pune clients meet this deadline.</p><p style="margin-top:10px;"><strong>Call <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20ESIC%20registration%20in%20Pune" target="_blank">WhatsApp</a> for a free timeline assessment.</strong></p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if a Pune employer misses the ESIC registration deadline?</h3>
                        <div class="faq-expanded__a"><p>Non-registration or delayed registration by a Pune employer attracts penalties under Section 85 of the ESI Act, 1948. The ESIC SRO Pune can levy: 12% annual interest on unpaid contributions from the date of applicability, and damages of 5% to 25% of the contribution amount depending on delay period (5% for up to 2 months, 10% for 2-6 months, 15% for 6-12 months, 25% for over 12 months) under Section 85B. The ESIC Amnesty Scheme 2025 (until 31 December 2025) allows late registrations without inspection. Patron assists Pune employers in calculating retrospective dues and filing under the amnesty window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does ESIC apply to contract workers at Chakan MIDC factories?</h3>
                        <div class="faq-expanded__a"><p>Yes - under Section 2(9) and Section 40 of the ESI Act, 1948, contract workers deployed through manpower contractors at a Chakan MIDC or MIDC Bhosari factory are covered under ESIC. The principal employer (factory owner) is responsible for ensuring the contractor registers under ESIC and deducts contributions for contract workers. If the contractor defaults, the principal employer is liable for contributions under Section 40. Patron's CA team reviews contractor compliance as part of the ESIC registration for Pune manufacturing clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is ESIC registration required for IT companies in Hinjewadi and Kharadi?</h3>
                        <div class="faq-expanded__a"><p>Yes - IT companies in Hinjewadi IT Park and Kharadi IT Hub are commercial establishments under the Maharashtra Shops and Establishments Act, 2017. Once headcount reaches 10 or more employees earning up to Rs. 21,000 per month, ESIC registration becomes mandatory within 15 days. Note that companies incorporated via SPICe+ receive an auto-generated ESIC employer code - but this requires activation and separate contribution filing through the ESIC portal. Patron's Pune CA team handles ESIC activation for newly incorporated companies in Hinjewadi and Kharadi that received ESIC codes through SPICe+ but have not yet filed contributions.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <div class="highlight-box" style="background:var(--blue-lighter);border-radius:var(--radius-md);padding:24px;margin-top:32px;">
<h3 style="color:var(--blue);margin-bottom:16px;">Quick Answers</h3>
<div style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;" class="qa-grid">
<div><strong>What is ESIC registration?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Mandatory enrollment of employer and eligible employees under the ESI Act, 1948. Provides medical care, sickness cash, maternity, and disability benefits funded by 3.25% employer + 0.75% employee contributions.</span></div>
<div><strong>ESIC registration Pune mein kaise karein?</strong><br><span style="color:var(--text-secondary);font-size:14px;">esic.in portal pe jaiye, Employer Login &gt; Sign Up kariye, Form 1 bharo aur submit kariye. Patron ka Pune CA team pura process handle karta hai 2-3 din mein.</span></div>
<div><strong>Who is exempt from ESIC?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Employees earning more than Rs. 21,000/month (Rs. 25,000 for disabled). Employees with daily average wage up to Rs. 176 exempt from employee contribution - employer still pays 3.25%.</span></div>
<div><strong>Current ESIC contribution rate 2026?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Employer: 3.25%. Employee: 0.75%. Total: 4% of monthly wages (w.e.f. 01.07.2019, confirmed from esic.gov.in).</span></div>
<div><strong>ESIC notice aaye toh kya karein?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Patron's CA team at Wagholi, Pune handles all ESIC SRO Pune notices - contribution disputes, inspection responses, and Section 45-A representation. Call +91 945 945 6700.</span></div>
<div><strong>Pune mein ESIC threshold?</strong><br><span style="color:var(--text-secondary);font-size:14px;">Maharashtra uses the 10-employee threshold (not 20). All Pune establishments with 10+ employees in notified activities must register within 15 days of applicability.</span></div>
</div></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register Before ESIC Penalties Apply - 15-Day Window</h2>
            <div class="content-text">
                
                <div class="highlight-box" style="background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);padding:16px 20px;margin-bottom:16px;"><strong>The ESI Act, 1948 requires mandatory registration within 15 days of reaching the 10-employee threshold. Late registration attracts 12% annual interest + damages of up to 25% under Section 85B from the ESIC SRO Pune.</strong></div>
<p class="content-text">The ESIC Amnesty Scheme 2025 - active until 31 December 2025 - allows late registrations without criminal prosecution or inspection demand for past dues. Hinjewadi startups and Chakan MIDC manufacturers currently without ESIC registration should act before the amnesty window closes.</p>
<p class="content-text"><strong>Get a free ESIC Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20ESIC%20Registration%20in%20Pune" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get ESIC-Compliant in 2-3 Working Days with Patron Accounting Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>ESIC registration in Pune is mandatory compliance under the ESI Act, 1948 for every employer with 10 or more employees earning up to Rs. 21,000 per month - from Chakan MIDC auto-component factories to Hinjewadi IT startups and Baner service firms. The ESIC Sub Regional Office, Pune at Bibwewadi governs all registrations, contribution compliance, and inspections for Pune district employers.</p>
<p>Patron Accounting LLP, operating from our Pune office at RTC Silver, Wagholi, brings CA and CS-supervised ESIC registration that goes beyond portal filing - including Factories Act vs. Shops Act applicability assessment, contract labour coverage review under Section 40, wage definition verification per Section 2(22), and bundled ESIC + PF + PTRC/PTEC compliance for new Pune businesses. With 15+ years of Maharashtra compliance experience and direct familiarity with the ESIC SRO Pune, our CA team ensures your registration is accurate, on-time, and complete from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20help%20with%20ESIC%20Registration%20in%20Pune" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting assists employers with ESIC registration and compliance in all major cities. Select your city for localised information and CA support.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1  -  City cards (pa-city-grid, 4 cols desktop):
                <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="/esic-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/esic-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/esic-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                        <a href="/esic-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                        <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                    </div>
                </div>
                BLOCK 2  -  Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for ESIC Registration in Pune</div>
                    <div class="pa-cross-grid">
                        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block" style="margin-bottom:40px;">
    <p class="pa-block-title">ESIC Registration by City</p>
    <p class="pa-block-sub">CA-assisted ESIC registration from Patron's local offices</p>
    <div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);cursor:default;" aria-current="page"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub" style="color:var(--orange);font-weight:700;">You're here</div></div></div>
        <a href="/esic-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/esic-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/esic-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <p class="pa-block-title">Related Services in Pune</p>
    <p class="pa-block-sub">End-to-end statutory compliance for ESIC Registration in Pune</p>
    <div class="pa-cross-grid">
        <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/esic-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Returns</div><div class="pa-card-sub">India</div></div></a>
        <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 25 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">25 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 25 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months and immediately upon ESIC contribution rate changes, wage ceiling revisions, or ESIC SRO Pune notification updates. Sources: esic.gov.in and sropune.esic.gov.in</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
{{--
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> 
--}}
@include('layouts.itr-season-strip')

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
