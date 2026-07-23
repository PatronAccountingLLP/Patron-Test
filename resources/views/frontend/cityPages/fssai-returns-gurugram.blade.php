

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
    <title>FSSAI Annual Return Gurugram - Form D1, D2 & Due Date</title>
    <meta name="description" content="FSSAI returns filing in Gurugram. Form D1 annual by May 31. Form D2 dairy. FoSCoS portal. Rs 100/day penalty. License renewal. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-returns/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Annual Return Gurugram - Form D1, D2 & Due Date">
    <meta property="og:description" content="FSSAI returns filing in Gurugram. Form D1 annual by May 31. Form D2 dairy. FoSCoS portal. Rs 100/day penalty. License renewal. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-returns/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/fssai-returns-gurugram-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Annual Return Gurugram - Form D1, D2 & Due Date">
    <meta name="twitter:description" content="FSSAI returns filing in Gurugram. Form D1 annual by May 31. Form D2 dairy. FoSCoS portal. Rs 100/day penalty. License renewal. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/fssai-returns-gurugram-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Returns in Gurugram | Form D1 D2",
      "description": "FSSAI returns filing in Gurugram. Form D1 annual by May 31. Form D2 dairy. FoSCoS portal. Rs 100/day penalty. License renewal. Call +91 945 945 6700.",
      "url": "/fssai-returns/gurugram",
      "serviceType": "FSSAI Returns in Gurugram | Form D1 D2",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "/fssai-returns/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "999",
          "maxPrice": "1999",
          "priceCurrency": "INR"
        }
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
          "name": "FSSAI Returns Filing: Form D1 and D2",
          "item": "https://www.patronaccounting.com/fssai-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FSSAI Returns in Gurugram | Form D1 D2",
          "item": "https://www.patronaccounting.com/fssai-returns/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "When must FSSAI returns be filed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form D1 (Annual) by May 31 each year on FoSCoS portal for all manufacturing, processing, and importing FBOs. Form D2 (Half-Yearly) by October 31 and April 30 for milk and dairy manufacturers. Penalty: Rs 100 per day of delay, maximum 5 times the annual license fee."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FSSAI return filing cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form D1 annual: Rs 1,999-4,999. Form D2 dairy (per period): Rs 1,999-3,999. NIL return: Rs 999-1,999. Multi-license (per additional): Rs 1,499-2,999. Retroactive filing with penalty: Rs 2,999-7,999 plus penalty amount. Call +91 945 945 6700 for a detailed quote."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if FSSAI returns are not filed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. Check All Licenses: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution."
          }
        },
        {
          "@type": "Question",
          "name": "Must cloud kitchens file FSSAI returns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Cloud kitchens that prepare and deliver food are classified as food manufacturers under FSSAI regulations. If they hold a State or Central FSSAI license, Form D1 annual return must be filed by May 31 every year. Being delivery-only does not exempt from filing. Many cloud kitchens discover this only when they try to renew their license."
          }
        },
        {
          "@type": "Question",
          "name": "What is a NIL return in FSSAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A NIL return must be filed on FoSCoS even when zero production or sales occurred during the reporting period. If the FSSAI license is active, the return is mandatory regardless of activity. Filing NIL ensures no gap in the filing record and prevents license renewal blockage."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need separate returns for each FSSAI license?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Each FSSAI license requires its own separate return filing. An FBO with 3 licenses (3 different units or categories) must file 3 separate Form D1 returns. Filing one combined return covering multiple licenses is an error. Missing a return for any single license blocks renewal for that license."
          }
        },
        {
          "@type": "Question",
          "name": "Are restaurants required to file FSSAI returns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Restaurants that only serve food and do not manufacture or pack for retail sale are generally exempt from annual return filing. However, if a restaurant also manufactures or packs food products for sale (e.g., packaged sauces, pre-made meals for retail), Form D1 is required for that manufacturing/packing activity. Quick Answers Kab file karna hai? Form D1: May 31 har saal. Form D2 (dairy): October 31 aur April 30. FoSCoS portal pe online. Late penalty Rs 100/din. Cloud kitchen ko file karna hai? Haan. Cloud kitchen food manufacturer hai FSSAI mein. License hai toh annual return mandatory. Delivery-only se exemption nahi. Zero production mein bhi? Haan. NIL return file karo FoSCoS pe. License active hai toh return mandatory - production ho ya na ho."
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
            background-size: 12px 12px; background-position: center; background-repeat: no-repeat;
        }
        main section table { width: 100%; border-collapse: collapse; border: none; }
        main section table thead tr th {
            padding: 14px 18px; font-size: 13px; font-weight: 700;
            color: var(--white); text-transform: uppercase; letter-spacing: 0.05em;
            background: var(--blue); border: none !important;
            text-align: left; white-space: nowrap;
        }
        main section table thead tr th:first-child { border-top-left-radius: var(--radius-md); }
        main section table thead tr th:last-child { border-top-right-radius: var(--radius-md); }
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
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

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
        .form-label { display: block; font-size: 13px; font-weight: 600; color: var(--text-primary); margin-bottom: 6px; }
        .form-input, .form-select {
            width: 100%; padding: 11px 14px; border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm); font-family: 'Barlow', sans-serif;
            font-size: 14px; color: var(--text-primary); background: var(--white);
            transition: border-color 0.2s, box-shadow 0.2s; outline: none;
        }
        .form-input:focus, .form-select:focus { border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.1); }
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D; }
        .phone-group {
            display: flex; align-items: center; gap: 0;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-sm);
            transition: border-color 0.2s;
        }
        .phone-group:focus-within { border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.1); }
        .phone-group.input-error { border-color: #FD6B6D; }
        .phone-group .form-input { border: none; box-shadow: none; }

        .country-code-dropdown {
            display: flex; align-items: center; gap: 4px;
            padding: 8px 8px 8px 12px; cursor: pointer; position: relative;
            border-right: 1px solid var(--gray-200); flex-shrink: 0;
            font-family: 'Barlow', sans-serif;
        }
        .selected-flag { font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji","Twemoji Mozilla",sans-serif; font-size: 18px; width: 26px; overflow: hidden; display: inline-block; }
        .selected-code { font-size: 13px; font-weight: 600; color: var(--text-primary); }
        .dropdown-arrow { width: 12px; height: 12px; color: var(--gray-400); transition: transform 0.2s; }
        .country-dropdown-list {
            display: none; position: absolute; top: 100%; left: 0; min-width: 260px;
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-sm); box-shadow: var(--shadow-lg); z-index: 100;
            max-height: 220px; overflow-y: auto;
        }
        .country-dropdown-list.show { display: block; }
        .country-search-input {
            width: 100%; padding: 8px 12px; border: none; border-bottom: 1px solid var(--gray-200);
            font-size: 13px; outline: none; font-family: 'Barlow', sans-serif;
        }
        .country-option {
            display: flex; align-items: center; gap: 8px;
            padding: 8px 12px; cursor: pointer; font-size: 13px; transition: background 0.15s;
        }
        .country-option:hover { background: var(--gray-50); }
        .country-option .co-flag { font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif; font-size: 16px; width: 24px; }

        .btn-submit {
            width: 100%; padding: 14px; background: var(--orange); color: var(--white);
            border: none; border-radius: var(--radius-sm); font-family: 'Barlow', sans-serif;
            font-size: 15px; font-weight: 700; cursor: pointer; transition: all 0.25s ease;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-1px); box-shadow: 0 4px 12px rgba(232,113,44,0.3); }
        .form-response-note { font-size: 12px; color: var(--text-muted); text-align: center; margin-top: 12px; }

        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item {
            display: flex; align-items: center; gap: 4px;
            font-size: 11px; color: var(--text-muted); font-weight: 500;
        }
        .form-footer-item svg { width: 12px; height: 12px; }
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { margin-bottom: 16px; }
        .form-success h3 { color: var(--blue); font-size: 20px; margin-bottom: 8px; }
        .form-success p { color: var(--text-muted); font-size: 14px; }

        /* Content Sections */
        .content-section { padding: 64px 32px; }
        .content-container { max-width: 900px; margin: 0 auto; }
        .section-container { max-width: 1200px; margin: 0 auto; padding: 0 32px; }
        .section-header { text-align: center; margin-bottom: 48px; }
        .section-header h2 { margin-bottom: 12px; }
        .section-header p { color: var(--text-muted); font-size: 15px; max-width: 600px; margin: 0 auto; }
        .section-title { margin-bottom: 24px; }
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 6px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 14px; height: 14px; }
        .content-text { font-size: 15px; line-height: 1.7; color: var(--text-secondary); }
        .content-text p { margin-bottom: 16px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 20px 24px; border-radius: 0 var(--radius-md) var(--radius-md) 0;
            margin: 20px 0;
        }
        .highlight-box p { color: var(--text-primary); margin-bottom: 8px; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .text-content { max-width: 100%; }
        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { }
        .column-image { position: sticky; top: 24px; }
        .illustration-placeholder {
            background: var(--gray-50); border-radius: var(--radius-lg);
            padding: 32px; text-align: center; border: 1px solid var(--gray-200);
        }
        .illustration-icon { margin: 0 auto 16px; }
        .illustration-badge {
            display: flex; flex-direction: column; gap: 2px;
            font-size: 13px; color: var(--text-muted);
        }
        .illustration-badge strong { color: var(--blue); font-size: 14px; }

        /* Steps Section */
        .steps-section { padding: 80px 32px; background: var(--gray-50); }
        .steps-container { max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
            background: var(--white); border-radius: var(--radius-lg);
            padding: 40px; box-shadow: var(--shadow-md); border: 1px solid var(--gray-100);
            align-items: center;
        }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { }
        .step-badge {
            display: inline-block; padding: 4px 14px; background: var(--orange-light);
            color: var(--orange); font-size: 12px; font-weight: 700;
            border-radius: 50px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 12px;
        }
        .step-title { font-size: 20px; font-weight: 700; color: var(--blue); margin-bottom: 12px; }
        .step-description { font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 8px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--green); background: rgba(16,185,129,0.08);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: #065F46;
        }
        .highlight-tag svg { width: 12px; height: 12px; }
        .step-visual { display: flex; justify-content: center; }
        .step-illustration {
            background: var(--gray-50); border-radius: var(--radius-lg);
            padding: 32px; text-align: center; width: 100%; position: relative;
            border: 1px solid var(--gray-200);
        }
        .step-illustration .illustration-icon { margin-bottom: 8px; }
        .illustration-label { display: block; font-size: 13px; font-weight: 600; color: var(--blue); margin-top: 8px; }
        .step-number-large {
            position: absolute; bottom: 8px; right: 16px;
            font-size: 48px; font-weight: 800; color: var(--blue); opacity: 0.06;
            line-height: 1;
        }

        /* Why Choose / Benefits */
        .why-choose-section { padding: 80px 32px; background: var(--blue-lighter); }
        .features-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;
            max-width: 1200px; margin: 0 auto;
        }
        .feature-card {
            background: var(--white); border-radius: var(--radius-lg);
            padding: 28px; box-shadow: var(--shadow-sm); border: 1px solid var(--gray-100);
            transition: all 0.25s ease;
        }
        .feature-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
        .feature-icon {
            width: 48px; height: 48px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md); margin-bottom: 16px;
        }
        .feature-icon svg { width: 22px; height: 22px; color: var(--orange); }
        .feature-title { font-size: 16px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .feature-text { font-size: 13px; color: var(--text-muted); line-height: 1.5; }

        /* Stats Bar */
        .stats-bar { background: var(--blue); padding: 36px 32px; }
        .stats-container {
            max-width: 1200px; margin: 0 auto;
            display: flex; align-items: center; justify-content: space-between; gap: 40px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 14px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.1); border-radius: var(--radius-sm);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 22px; font-weight: 800; color: var(--white); line-height: 1.2; }
        .stat-label { font-size: 12px; color: rgba(255,255,255,0.7); font-weight: 500; }
        .certifications {
            display: flex; gap: 20px; padding-left: 20px; border-left: 1px solid rgba(255,255,255,0.15);
        }
        .cert-item {
            display: flex; align-items: center; gap: 6px;
            font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.85);
        }
        .cert-item svg { width: 16px; height: 16px; flex-shrink: 0; }

        /* TOC */
        .toc-section {
            background: var(--white); border-bottom: 1px solid var(--gray-200);
            padding: 12px 16px; position: sticky; top: 100px; z-index: 100;
        }
        .toc-container {
            max-width: 1200px; margin: 0 auto;
            display: flex; align-items: center; gap: 8px;
        }
        .toc-wrapper {
            display: flex; gap: 6px; overflow-x: auto; scroll-behavior: smooth;
            -ms-overflow-style: none; scrollbar-width: none; flex: 1;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 8px 16px; background: var(--gray-50);
            border: 1px solid var(--gray-200); border-radius: 50px;
            font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 500;
            color: var(--text-secondary); white-space: nowrap; text-decoration: none;
            transition: all 0.2s ease; cursor: pointer;
        }
        .toc-btn:hover, .toc-btn.active { background: var(--orange-light); border-color: var(--orange); color: var(--orange); font-weight: 600; }
        .toc-arrow {
            background: none; border: 1px solid var(--gray-200); border-radius: 50%;
            width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;
            cursor: pointer; color: var(--text-muted); font-size: 14px; flex-shrink: 0;
            transition: all 0.2s;
        }
        .toc-arrow:hover { background: var(--gray-50); color: var(--blue); }

        /* Testimonials */
        .testimonials-section { padding: 64px 32px 0; background: var(--gray-50); }
        .testimonial-slider { }
        .reviews-cta {
            background: var(--blue); border-radius: var(--radius-lg);
            padding: 24px 32px; display: flex; align-items: center; justify-content: space-between; gap: 24px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: rgba(255,255,255,0.1); border-radius: var(--radius-sm); flex-shrink: 0;
        }
        .reviews-cta-icon svg { width: 20px; height: 20px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 16px; color: var(--white); margin-bottom: 2px; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; background: var(--orange); color: var(--white);
            border-radius: 50px; font-weight: 700; font-size: 14px;
            text-decoration: none; transition: all 0.25s; flex-shrink: 0;
        }
        .btn-cta:hover { background: var(--orange-dark); transform: translateY(-1px); }
        .btn-cta svg { width: 14px; height: 14px; }

        /* PA City/Cross-sell Cards */
        .pa-city-block { margin-bottom: 40px; }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 4px; }
        .pa-block-sub { font-size: 14px; color: var(--text-muted); margin-bottom: 20px; }
        .pa-city-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .pa-cross-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 12px;
            padding: 16px; background: var(--white); border-radius: var(--radius-md);
            border: 1px solid var(--gray-200); text-decoration: none;
            transition: all 0.2s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); transform: translateY(-2px); }
        .pa-card-icon { flex-shrink: 0; }
        .pa-card-title { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub { font-size: 12px; color: var(--text-muted); }

        .spinner {
            width: 24px; height: 24px; border: 3px solid var(--gray-200);
            border-top-color: var(--orange); border-radius: 50%;
            animation: spin 0.8s linear infinite; display: inline-block;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

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
            .testimonials-section { padding: 16px 20px 0 20px; }
            .pa-city-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 12px !important; }
        }
        @media (max-width: 480px) {
            .pa-city-grid { grid-template-columns: 1fr !important; }
            .pa-cross-grid { grid-template-columns: 1fr !important; }
        }

        .content-section[id] { scroll-margin-top: 80px; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }
        /* WhatsApp Sticky Bar */
        .wa-sticky-bar {
            position: fixed; bottom: 0; left: 0; right: 0;
            background: #25D366; z-index: 9999; padding: 10px 20px;
            display: flex; align-items: center; justify-content: center; gap: 12px;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.15); transition: transform 0.35s ease;
        }
        .wa-sticky-bar.hidden { transform: translateY(100%); }
        .wa-sticky-bar-content { display: flex; align-items: center; gap: 12px; max-width: 1320px; width: 100%; justify-content: center; }
        .wa-sticky-bar-icon { width: 36px; height: 36px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.2); border-radius: 50%; }
        .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
        .wa-sticky-bar-text { font-family: 'Barlow', sans-serif; font-size: 15px; color: #fff; font-weight: 500; }
        .wa-sticky-bar-text strong { font-weight: 700; }
        .wa-sticky-bar-btn { display: inline-flex; align-items: center; gap: 6px; padding: 8px 22px; background: #fff; color: #25D366; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700; border: none; border-radius: 50px; cursor: pointer; text-decoration: none; transition: all 0.2s ease; flex-shrink: 0; }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
        .wa-sticky-bar-close { background: none; border: none; cursor: pointer; color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1; padding: 4px 8px; transition: color 0.2s; flex-shrink: 0; font-family: 'Barlow', sans-serif; font-weight: 300; }
        .wa-sticky-bar-close:hover { color: #fff; }
        @media (max-width: 768px) { .wa-sticky-bar { padding: 8px 12px; gap: 8px; } .wa-sticky-bar-text { font-size: 13px; } .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; } .wa-sticky-bar-icon { width: 30px; height: 30px; } .wa-sticky-bar-icon svg { width: 16px; height: 16px; } }
        @media (max-width: 480px) { .wa-sticky-bar-text { display: none; } .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; } .wa-sticky-bar-btn::before { content: 'Join Community'; } .wa-sticky-bar-btn span { display: none; } }
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
                        FSSAI Returns in Gurugram: Annual Compliance for Food Businesses
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">02 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> FSSAI license, production data (volume/value), raw material sources, export/import details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Form D1: Rs 1,999-4,999. Form D2: Rs 1,999-3,999. NIL: Rs 999-1,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All FSSAI-licensed FBOs: manufacturers, processors, importers, cloud kitchens, D2C food brands</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Form D1: by May 31. Form D2 (dairy): Oct 31 and Apr 30. FoSCoS portal</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Returns%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20FSSAI%20Returns%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FSSAI%20Returns%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - FSSAI Returns Gurugram'/>
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
                                   class='form-input' placeholder='Enter your city' value='Gurugram' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled>Select a service</option>
                                <!-- Zone A: SAME-CITY URLs for Gurugram (4-city non-starred services) -->
                                <option value="fssai-returns/gurugram" selected>FSSAI Returns in Gurugram</option>
                                <option value="fssai-registration">FSSAI Registration</option>
                                <option value="copyright-assignment">Copyright Assignment</option>
                                <option value="copyright-disclaimer">Copyright Disclaimer</option>
                                <option value="copyright-objection">Copyright Objection</option>
                                <option value="trademark-registration/gurugram">Trademark Registration in Gurugram</option>
                                <option value="private-limited-company-registration/gurugram">Private Limited Company Registration in Gurugram</option>
                                <option value="gst-registration/gurugram">GST Registration in Gurugram</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron files our Form D1 every year by May 31. When our license came up for renewal, FoSCoS showed all returns filed - renewal processed in 2 days. Without Patron, we would have missed returns and faced license blockage.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh Kumar</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Food Processing Unit, Udyog Vihar</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our cloud kitchen had no idea annual returns were required. Patron caught it before our first renewal. Filed NIL return for year one (no production yet) and regular D1 for year two. License renewed smoothly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Riya Sharma</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Cloud Kitchen, Sohna Road</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We have 3 FSSAI licenses for 3 units. Patron files separate D1 for each license. We used to file one combined return - Patron caught the error and corrected it before FSSAI noticed.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RY</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Yadav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Multi-Unit Food Company, Manesar</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handles both D1 and D2 for our dairy unit. The D2 requires detailed procurement data that takes time to compile. They start collecting data 6 weeks before deadline. Always on time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AV</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Verma</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manager, Dairy Processing, Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">2 years of missed returns. Rs 73,000 in penalties. Patron filed retroactively, cleared penalties, and our license was renewed just in time. Now they file every year. Never again.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Deepak Singh</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, D2C Food Brand, Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
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
                    <p>Trusted FSSAI return filing partner for food businesses across Gurugram.</p>
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
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">FSSAI return filing and food compliance across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in FSSAI returns, food license compliance, and FoSCoS filings.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">FSSAI returns, food license filings, and compliance documents handled.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by food processors, cloud kitchens, D2C brands, and dairy units.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your IP and business data is fully protected.</span></div>
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
            <a href="#procedure-section" class="toc-btn">Process</a>
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

<!-- SECTION 2: OVERVIEW / TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why FSSAI Returns Matter for Gurugram Food Businesses</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Return Filing Services at a Glance</strong></p>
                    <p>FSSAI returns are mandatory periodic filings for all FBOs with State or Central licenses engaged in manufacturing, processing, importing, labelling, or packing. Form D1 (Annual) for all manufacturing/importing FBOs, due May 31 on FoSCoS. Form D2 (Half-Yearly) for dairy manufacturers. Penalty: Rs 100/day (max 5x license fee). FoSCoS blocks license renewal until pending returns filed. NIL return required even with zero production. Separate return per license. Cloud kitchens and D2C food brands must file.</p>
                </div>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Food Safety and Standards Act 2006 | FSS (Licensing & Registration) Regulations 2011</td></tr>
                        <tr><td>Registry</td><td>Copyright Office, DPIIT (<a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS (foscos.fssai.gov.in)</a>). Registrar of Copyrights</td></tr>
                        <tr><td>Form</td><td>Form D1 (Annual) on FoSCoS | Form D2 (Half-Yearly, Dairy) on FoSCoS</td></tr>
                        <tr><td>Categories (S13)</td><td>Literary (including software), Artistic, Musical, Dramatic, Cinematograph Films, Sound Recordings</td></tr>
                        <tr><td>Validity</td><td>Literary/Artistic/Musical/Dramatic: Author's lifetime + 60 years. Films/Sound Recordings: 60 years from publication</td></tr>
                        <tr><td>Mandatory?</td><td>No. But registration provides prima facie evidence of ownership (Section 48)</td></tr>
                        <tr><td>International</td><td>Berne Convention membership: recognized in 181+ countries automatically</td></tr>
                        <tr><td>Fees 2026</td><td>Individuals: Rs 500 (literary/artistic), Rs 2,000 (sound). Companies: Rs 2,000. Software: Rs 4,000. Films: Rs 5,000</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Gurugram has a diverse food business ecosystem. Food processing units in Udyog Vihar and Manesar, cloud kitchens in DLF Cyber City, D2C food brands on Sohna Road, dairy units, and restaurants in Cyber Hub all have FSSAI return obligations. For comprehensive information about <a href="/fssai-returns">FSSAI returns across India</a>, visit our national service page.</p>
                <p>License renewal blockage is the most impactful consequence. FoSCoS blocks renewal if any return pending. Businesses have had licenses lapse due to pending returns. You will also need <a href="/fssai-registration">FSSAI registration</a> for new food businesses and <a href="#">FSSAI license</a> for State/Central licensing.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Are FSSAI Returns</h2>
                <div class="content-text what-is-definition">
                    <p>FSSAI returns are periodic compliance filings on the FoSCoS portal reporting category, volume, value, and source/destination of food products manufactured, processed, imported, or exported. Form D1 is the annual return covering April-March.</p>
                    <p>Form D2 is the half-yearly return for milk and dairy products with procurement, processing, conversion, and marketing data. All returns are filed on the FoSCoS portal with OTP verification.</p>
                    <p>Non-filing triggers Rs 100/day penalty and blocks license renewal on FoSCoS. For complete food business compliance, integrate returns with <a href="/fssai-registration">FSSAI registration</a> and <a href="/gst-registration">GST registration</a>.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright Registration:</strong></p>
                    <ul>
                        <li><strong>Form D1</strong> - Annual return for manufacturing/importing FBOs by May 31</li>
                        <li><strong>Form D2</strong> - Half-yearly return for dairy manufacturers</li>
                        <li><strong>FoSCoS</strong> - Food Safety Compliance System portal for filing</li>
                        <li><strong>NIL Return</strong> - Zero production declaration required even with no activity</li>
                        <li><strong>License Renewal Block</strong> - FoSCoS blocks renewal if returns pending</li>
                    </ul>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Copyright symbol document -->
                            <rect x="40" y="20" width="120" height="140" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Copyright C symbol -->
                            <circle cx="100" cy="80" r="35" fill="#FFF3E0" stroke="#F5A623" stroke-width="2"/>
                            <text x="100" y="95" font-size="40" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">&copy;</text>
                            <!-- Document lines -->
                            <line x1="60" y1="130" x2="140" y2="130" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="60" y1="142" x2="120" y2="142" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <line x1="60" y1="154" x2="100" y2="154" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            <!-- Green check badge -->
                            <circle cx="150" cy="35" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M142 35l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="175" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FoSCoS Portal</span>
                        <strong>May 31 Annual Filing</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO NEEDS -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Must File FSSAI Returns in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Food processing units</strong> in Udyog Vihar and Manesar with State or Central FSSAI licenses. Every manufacturer, processor, packer must file Form D1 regardless of volume.</li>
                    <li><strong>Cloud kitchens</strong> across Gurugram that hold FSSAI licenses. Cloud kitchens are food manufacturers under FSSAI and must file annual returns.</li>
                    <li><strong>Photographers, graphic designers, and illustrators</strong> producing visual works - product photographs, marketing graphics, illustrations, architectural drawings, logos (as artistic works), and packaging designs. Artistic work copyright prevents unauthorized reproduction in Gurugram's competitive D2C and e-commerce market.</li>
                    <li><strong>Dairy units</strong> processing milk and dairy products. Must file both Form D1 (annual) and Form D2 (half-yearly) with detailed procurement and processing data.</li>
                    <li><strong>Film producers and video creators</strong> making documentaries, advertisements, corporate films, short films, and OTT content from Gurugram production houses. Cinematograph films have a specific registration process and Rs 5,000 fee.</li>
                    <li><strong>Startups and companies</strong> wanting to build an IP portfolio for investor due diligence, M&A preparation, or licensing revenue. A documented copyright portfolio increases company valuation and demonstrates IP maturity.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 FSSAI Return Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Form D1 Annual Return Filing</td><td>Compiling production data, volumes, values, raw material sources. FoSCoS filing with OTP. Submission by May 31.</td></tr>
                        <tr><td>Form D2 Half-Yearly (Dairy)</td><td>Milk procurement, processing, conversion, marketing data. FoSCoS filing per half-year period.</td></tr>
                        <tr><td>NIL Return Filing</td><td>Zero production declaration on FoSCoS. Prevents filing gap. Ensures license renewal readiness.</td></tr>
                        <tr><td>Multi-License Management</td><td>Separate returns per license. Deadline tracking. No license missed. Complete coverage.</td></tr>
                        <tr><td>License Detail Reconciliation</td><td>Verifying return data matches license details. Initiating modification if discrepancies before filing.</td></tr>
                        <tr><td>Penalty Calculation and Past Filing</td><td>Calculating Rs 100/day penalty. Filing retroactive returns. Clearing record to enable renewal.</td></tr>
                        <tr><td>International Protection Advisory</td><td>Advising on Berne Convention coverage (181+ countries), WIPO Copyright Treaty (WCT), and WIPO Performances and Phonograms Treaty (WPPT). No separate filing needed in Berne Convention countries.</td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: PROCESS STEPS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How FSSAI Return Filing Works: 5-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA-led team handles Form D1/D2 filing on FoSCoS, NIL returns, multi-license management, and license renewal coordination for Gurugram food businesses.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Compile Production Data</h3>
                    <p class="step-description">Gather food product categories, volumes, values, raw material sources, export/import details for the financial year.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Ready</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Volumes OK</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="60" y="42" font-size="18" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&copy;</text>
                                <line x1="30" y1="80" x2="90" y2="80" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Compiled</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Login to FoSCoS Portal</h3>
                    <p class="step-description">Access FoSCoS portal with FSSAI license credentials. Navigate to annual return section.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Logged In</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FoSCoS</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="30" y="35" width="60" height="12" rx="3" fill="#E5E7EB"/>
                                <rect x="30" y="52" width="60" height="12" rx="3" fill="#E5E7EB"/>
                                <circle cx="60" cy="25" r="5" fill="#F5A623"/>
                                <line x1="25" y1="80" x2="95" y2="80" stroke="#14365F" stroke-width="2" opacity="0.2"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Online</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">File Form D1/D2</h3>
                    <p class="step-description">Complete all fields. Verify against license details. OTP verification. Submit by deadline.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>D1/D2 Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Submitted</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <line x1="30" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                                <rect x="65" y="78" width="40" height="16" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                                <text x="85" y="89" font-size="7" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Filed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Verify and Archive</h3>
                    <p class="step-description">Download acknowledgment. Verify on FoSCoS dashboard. Archive for records and inspection.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Archived</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="10" width="70" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="25" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="1"/>
                                <rect x="35" y="38" width="12" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="53" y="38" width="12" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                                <rect x="71" y="38" width="12" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                                <text x="60" y="25" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Confirmed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Check All Licenses</h3>
                    <p class="step-description">Verify separate return filed for EACH license held. No license missed. Complete coverage.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Licenses</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Covered</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="82" y1="62" x2="100" y2="80" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                <path d="M50 40l6 6 14-14" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Checked</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Renewal Readiness</h3>
                    <p class="step-description">All returns filed. No pending returns blocking renewal. Set next year deadline. Compliance clean.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal OK</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliant</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="10" width="80" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                                <circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <path d="M55 35l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                                <line x1="35" y1="55" x2="85" y2="55" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                                <rect x="40" y="75" width="40" height="14" rx="3" fill="#F5A623" opacity="0.2"/>
                                <text x="60" y="85" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Ready</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-box" style="margin-top:32px;max-width:1000px;margin-left:auto;margin-right:auto;">
            <p><strong>City Processing Note:</strong> Patron's Gurugram office handles FSSAI return filing, NIL returns, and license renewal coordination for food businesses across Gurugram.</p>
        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Returns in Gurugram</h2>
            <div class="content-text">
                <ul>
                    <li><strong>FSSAI License:</strong> License number, category, approved products, validity dates.</li>
                    <li><strong>Production Data:</strong> Product-wise volumes (MT), values, raw material sources, destinations.</li>
                    <li><strong>Import/Export Data:</strong> Country of origin/destination, port, volume, value (if applicable).</li>
                    <li><strong>Additional:</strong> FoSCoS portal credentials | Dairy procurement data (Form D2) | Previous year returns.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common FSSAI Return Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>License Renewal Blocked</td><td>5-year license expiring. FoSCoS blocks: 2 years returns not filed. Must file retroactively with penalties</td><td>File returns every year. Rs 100/day penalty. License may expire during catch-up. Business shutdown risk.</td></tr>
                        <tr><td>Cloud Kitchen Unaware</td><td>Cloud kitchen thinks returns are only for factories. Wrong - cloud kitchens are food manufacturers</td><td>Cloud kitchens with FSSAI license must file Form D1 by May 31. Discover obligation only at renewal.</td></tr>
                        <tr><td>Multiple Licenses - One Return Filed</td><td>Company with 3 FSSAI licenses files one combined return. Error: separate return per license</td><td>Each license needs its own Form D1. Two licenses have no return on record. Must file supplementary.</td></tr>
                        <tr><td>Zero Production - No Return Filed</td><td>Food startup got license but no production in year one. Assumes no return needed</td><td>NIL return required even with zero production. License active = return mandatory. File on FoSCoS.</td></tr>
                        <tr><td>Penalty Accumulation Over Years</td><td>3 years of missed returns. Rs 100/day per year = Rs 1,00,000+ total penalties</td><td>File returns every year. Penalties compound. Address early. Annual Rs 1,999-4,999 filing prevents lakhs in penalties.</td></tr>
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
            <h2 class="section-title">FSSAI Return Filing Fees in Gurugram 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form D1 Annual Return</td><td>Rs 1,999-4,999</td></tr>
                        <tr><td>Form D2 Half-Yearly (Dairy)</td><td>Rs 1,999-3,999/period</td></tr>
                        <tr><td>NIL Return Filing</td><td>Rs 999-1,999</td></tr>
                        <tr><td>Multi-License Filing (per additional)</td><td>Rs 1,499-2,999</td></tr>
                        <tr><td>Retroactive Filing with Penalty</td><td>Rs 2,999-7,999 + penalty amount</td></tr>
                        <tr><td>FSSAI + GST Compliance Bundle</td><td>Rs 4,999-9,999/year</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">No government fee for return filing itself. Late penalty: Rs 100/day. Professional fees cover data compilation, FoSCoS filing, and compliance management.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FSSAI%20Returns%20in%20Gurugram.%20Please%20share%20fee%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Return Filing Calendar in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Data Compilation</td><td>3-7 days</td></tr>
                        <tr><td>FoSCoS Filing</td><td>Same day (instant submission)</td></tr>
                        <tr><td>Form D1 Deadline</td><td>May 31 annually</td></tr>
                        <tr><td>Form D2 Deadlines</td><td>Oct 31 and Apr 30</td></tr>
                        <tr><td>Late Penalty</td><td>Rs 100/day from deadline</td></tr>
                        <tr><td>Retroactive Filing</td><td>1-2 weeks for data reconstruction</td></tr>
                        <tr><td>Renewal Clearance</td><td>Immediate after all returns + penalties filed</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Note:</strong> Form D1 due May 31. Form D2 due Oct 31 and Apr 30. FoSCoS filing is instant upon submission. Patron sends automated deadline alerts.</p>
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
            <h2 class="section-title">Why Choose Patron for FSSAI Returns in Gurugram</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">May 31 Filing</h3>
                <p class="feature-text">Timely Form D1 filing by May 31 on FoSCoS. Data compilation. OTP verification. No missed deadlines.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                <h3 class="feature-title">Dairy D2 Filing</h3>
                <p class="feature-text">Form D2 half-yearly for dairy: procurement, processing, conversion data. Oct 31 and Apr 30 deadlines.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3 class="feature-title">NIL Returns</h3>
                <p class="feature-text">Zero production declarations filed on FoSCoS. License active = return mandatory. No filing gaps.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Multi-License Mgmt</h3>
                <p class="feature-text">Separate returns per license. Deadline tracking. No license missed. Complete food compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                <h3 class="feature-title">Renewal Readiness</h3>
                <p class="feature-text">All returns filed and clean. FoSCoS renewal unblocked. License continuity assured.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div>
                <h3 class="feature-title">Penalty Prevention</h3>
                <p class="feature-text">Timely filing prevents Rs 100/day penalty. Retroactive filing with penalty calculation if needed.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India for copyright registration, IP protection, and comprehensive accounting services.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Return Filing Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Return</th><th>Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>Form D1 (Annual) - FY 2025-26</td><td>May 31, 2026</td></tr>
                        <tr><td>Form D2 (Dairy) - Apr-Sep 2025</td><td>October 31, 2025</td></tr>
                        <tr><td>Form D2 (Dairy) - Oct-Mar 2025-26</td><td>April 30, 2026</td></tr>
                        <tr><td>Late Penalty</td><td>Rs 100/day. Max: 5x annual license fee</td></tr>
                        <tr><td>License Renewal</td><td>Blocked on FoSCoS until ALL returns filed + penalties paid</td></tr>
                        <tr><td>NIL Return</td><td>Same deadline as regular return even with zero production</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:12px;">External Authority: <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS Portal (foscos.fssai.gov.in)</a></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES — Zone B: Parent + India-level links -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration in India</a> - National copyright registration service covering all categories across India</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - New food business registration and licensing</li>
                    <li><a href="/copyright-assignment">Copyright Assignment</a> - Transfer of copyright ownership with legal documentation and registration</li>
                    <li><a href="/copyright-disclaimer">Copyright Disclaimer</a> - Official disclaimer of copyright interest with the Copyright Office</li>
                    <li><a href="/copyright-objection">Copyright Objection</a> - Responding to third-party objections during the 30-day objection period</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand identity protection under Trade Marks Act 1999</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing services for individuals and businesses</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Annual audit compliance for companies</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FSSAI Returns</h2>
            <div class="content-text">
                <p>FSSAI returns are governed by the <strong>Food Safety and Standards Act 2006</strong> and <strong>FSS (Licensing and Registration) Regulations 2011</strong>, Clause 2.1.13. The Haryana Food Safety Department oversees enforcement in Gurugram.</p>
                <p>Penalty under Clause 2.1.13: Rs 100 per day of delay with a maximum cap of 5 times the annual license fee. The <strong>FoSCoS portal</strong> enforces compliance by blocking license renewal applications until all pending returns are filed and penalties cleared.</p>
                <p>India's membership in the Berne Convention (1886, India joined 1928), the Universal Copyright Convention, and TRIPS (WTO) ensures international recognition. The WIPO Copyright Treaty (WCT) and WIPO Performances and Phonograms Treaty (WPPT) provide additional protections for digital rights. Copyright registration with the Copyright Office at <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS (foscos.fssai.gov.in)</a> is administered by the Department for Promotion of Industry and Internal Trade (DPIIT). IP enforcement in Gurugram falls under the jurisdiction of the Delhi High Court.</p>
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
                    <h2 class="faq-expanded__title">FAQs - FSSAI Returns in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about FSSAI returns including Form D1, Form D2, NIL returns, penalties, and license renewal for Gurugram food businesses.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Gurugram', 'enquiryService' => 'FSSAI Returns in Gurugram'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">When must FSSAI returns be filed?</h3>
                        <div class="faq-expanded__a"><p>Form D1 (Annual) by May 31 each year on FoSCoS portal for all manufacturing, processing, and importing FBOs. Form D2 (Half-Yearly) by October 31 and April 30 for milk and dairy manufacturers. Penalty: Rs 100 per day of delay, maximum 5 times the annual license fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does FSSAI return filing cost?</h3>
                        <div class="faq-expanded__a"><p>Form D1 annual: Rs 1,999-4,999. Form D2 dairy (per period): Rs 1,999-3,999. NIL return: Rs 999-1,999. Multi-license (per additional): Rs 1,499-2,999. Retroactive filing with penalty: Rs 2,999-7,999 plus penalty amount. Call +91 945 945 6700 for a detailed quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if FSSAI returns are not filed?</h3>
                        <div class="faq-expanded__a"><p>Total timeline: 2-6 months. Filing and Diary Number: immediate. Mandatory 30-day objection waiting period: 1 month. Check All Licenses: 1-3 months. Certificate issuance: after examination approval. If a third-party objection is filed, the timeline extends by 2-4 months for hearing and resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Must cloud kitchens file FSSAI returns?</h3>
                        <div class="faq-expanded__a"><p>Yes. Cloud kitchens that prepare and deliver food are classified as food manufacturers under FSSAI regulations. If they hold a State or Central FSSAI license, Form D1 annual return must be filed by May 31 every year. Being delivery-only does not exempt from filing. Many cloud kitchens discover this only when they try to renew their license.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is a NIL return in FSSAI?</h3>
                        <div class="faq-expanded__a"><p>A NIL return must be filed on FoSCoS even when zero production or sales occurred during the reporting period. If the FSSAI license is active, the return is mandatory regardless of activity. Filing NIL ensures no gap in the filing record and prevents license renewal blockage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need separate returns for each FSSAI license?</h3>
                        <div class="faq-expanded__a"><p>Yes. Each FSSAI license requires its own separate return filing. An FBO with 3 licenses (3 different units or categories) must file 3 separate Form D1 returns. Filing one combined return covering multiple licenses is an error. Missing a return for any single license blocks renewal for that license.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are restaurants required to file FSSAI returns?</h3>
                        <div class="faq-expanded__a"><p>Restaurants that only serve food and do not manufacture or pack for retail sale are generally exempt from annual return filing. However, if a restaurant also manufactures or packs food products for sale (e.g., packaged sauces, pre-made meals for retail), Form D1 is required for that manufacturing/packing activity.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Kab file karna hai?</strong> Form D1: May 31 har saal. Form D2 (dairy): October 31 aur April 30. FoSCoS portal pe online. Late penalty Rs 100/din.</p>
                <p><strong>Cloud kitchen ko file karna hai?</strong> Haan. Cloud kitchen food manufacturer hai FSSAI mein. License hai toh annual return mandatory. Delivery-only se exemption nahi.</p>
                <p><strong>Zero production mein bhi?</strong> Haan. NIL return file karo FoSCoS pe. License active hai toh return mandatory - production ho ya na ho.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why FSSAI Returns Matter for Gurugram Food Businesses</h2>
            <div class="content-text">
                <p>A Gurugram D2C food brand with Central FSSAI license files GST and income tax on time. Nobody mentions FSSAI returns. 3 years pass. License expiry approaches. FoSCoS blocks renewal: 3 years pending returns. Must reconstruct production data, file retroactively, pay Rs 1,00,000+ penalties. Amazon/Flipkart listings deactivated. Revenue drops to zero. Three years of missed Rs 1,999-4,999 filings cause Rs 1,00,000+ penalties plus business disruption.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your FSSAI Returns in Gurugram Today</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:rgba(255,255,255,0.85);">FSSAI Returns in Gurugram cover the annual Form D1 filing (by May 31) and half-yearly Form D2 (for dairy) on the FoSCoS portal - mandatory for all licensed food manufacturers, processors, importers, cloud kitchens, and D2C food brands, with Rs 100/day penalty and license renewal blockage.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road handles Form D1/D2 filing, NIL returns, multi-license management, and license renewal coordination for food processors, cloud kitchens, D2C brands, dairy units, and importers across Gurugram.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP, with offices in Pune, Mumbai, Delhi, and Gurugram, has served 10,000+ businesses with a 4.9 Google rating and 50,000+ documents filed over 15+ years.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FSSAI%20Returns%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Returns%20in%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20FSSAI%20Returns%20services%20in%20Gurugram%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- CITY PAGES GRID — Zone C: Gurugram NOT interlinked (4-city non-starred) + Zone D: Same-city cross-sell -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">FSSAI return filing services available across India with local office support.</p>
            <!-- Block 1: City Cards (4-city non-starred) — Gurugram = current city, NOT a link -->
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/fssai-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <!-- CURRENT CITY: Gurugram — NOT a link, visual "You're here" indicator -->
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                        <span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span>
                    </div>
                </div>
            </div>
            <!-- Block 2: Cross-sell — Zone D: Same-city URLs for Gurugram -->
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for FSSAI Returns in Gurugram</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 02 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">02 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 02 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly for accuracy. FSSAI return requirements, FoSCoS portal procedures, penalty provisions, and license renewal processes are verified against current FSSAI notifications. Gurugram food business landscape is validated with each review.</p>
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


<script>
// Country code data and phone validation
var countries=[{name:"India",code:"+91",flag:"\ud83c\uddee\ud83c\uddf3"},{name:"United States",code:"+1",flag:"\ud83c\uddfa\ud83c\uddf8"},{name:"United Kingdom",code:"+44",flag:"\ud83c\uddec\ud83c\udde7"},{name:"UAE",code:"+971",flag:"\ud83c\udde6\ud83c\uddea"},{name:"Singapore",code:"+65",flag:"\ud83c\uddf8\ud83c\uddec"},{name:"Australia",code:"+61",flag:"\ud83c\udde6\ud83c\uddfa"},{name:"Canada",code:"+1",flag:"\ud83c\udde8\ud83c\udde6"},{name:"Germany",code:"+49",flag:"\ud83c\udde9\ud83c\uddea"},{name:"France",code:"+33",flag:"\ud83c\uddeb\ud83c\uddf7"},{name:"Japan",code:"+81",flag:"\ud83c\uddef\ud83c\uddf5"},{name:"China",code:"+86",flag:"\ud83c\udde8\ud83c\uddf3"},{name:"South Korea",code:"+82",flag:"\ud83c\uddf0\ud83c\uddf7"},{name:"Brazil",code:"+55",flag:"\ud83c\udde7\ud83c\uddf7"},{name:"Mexico",code:"+52",flag:"\ud83c\uddf2\ud83c\uddfd"},{name:"South Africa",code:"+27",flag:"\ud83c\uddff\ud83c\udde6"},{name:"Nigeria",code:"+234",flag:"\ud83c\uddf3\ud83c\uddec"},{name:"Kenya",code:"+254",flag:"\ud83c\uddf0\ud83c\uddea"},{name:"Saudi Arabia",code:"+966",flag:"\ud83c\uddf8\ud83c\udde6"},{name:"Qatar",code:"+974",flag:"\ud83c\uddf6\ud83c\udde6"},{name:"Kuwait",code:"+965",flag:"\ud83c\uddf0\ud83c\uddfc"},{name:"Bahrain",code:"+973",flag:"\ud83c\udde7\ud83c\udded"},{name:"Oman",code:"+968",flag:"\ud83c\uddf4\ud83c\uddf2"},{name:"Nepal",code:"+977",flag:"\ud83c\uddf3\ud83c\uddf5"},{name:"Sri Lanka",code:"+94",flag:"\ud83c\uddf1\ud83c\uddf0"},{name:"Bangladesh",code:"+880",flag:"\ud83c\udde7\ud83c\udde9"},{name:"Malaysia",code:"+60",flag:"\ud83c\uddf2\ud83c\uddfe"},{name:"Thailand",code:"+66",flag:"\ud83c\uddf9\ud83c\udded"},{name:"Indonesia",code:"+62",flag:"\ud83c\uddee\ud83c\udde9"},{name:"Philippines",code:"+63",flag:"\ud83c\uddf5\ud83c\udded"},{name:"Vietnam",code:"+84",flag:"\ud83c\uddfb\ud83c\uddf3"},{name:"Italy",code:"+39",flag:"\ud83c\uddee\ud83c\uddf9"},{name:"Spain",code:"+34",flag:"\ud83c\uddea\ud83c\uddf8"},{name:"Netherlands",code:"+31",flag:"\ud83c\uddf3\ud83c\uddf1"},{name:"Sweden",code:"+46",flag:"\ud83c\uddf8\ud83c\uddea"},{name:"Switzerland",code:"+41",flag:"\ud83c\udde8\ud83c\udded"},{name:"Russia",code:"+7",flag:"\ud83c\uddf7\ud83c\uddfa"},{name:"Turkey",code:"+90",flag:"\ud83c\uddf9\ud83c\uddf7"},{name:"Egypt",code:"+20",flag:"\ud83c\uddea\ud83c\uddec"},{name:"Israel",code:"+972",flag:"\ud83c\uddee\ud83c\uddf1"},{name:"New Zealand",code:"+64",flag:"\ud83c\uddf3\ud83c\uddff"}];

function populateCountries(){var o=document.getElementById('countryOptions');if(!o)return;o.innerHTML='';countries.forEach(function(c){var d=document.createElement('div');d.className='country-option';d.innerHTML='<span class="co-flag">'+c.flag+'</span><span>'+c.name+'</span><span style="color:var(--text-muted);margin-left:auto;">'+c.code+'</span>';d.onclick=function(e){e.stopPropagation();document.getElementById('selectedFlag').textContent=c.flag;document.getElementById('selectedCode').textContent=c.code;document.getElementById('countryDropdownList').classList.remove('show');};o.appendChild(d);});}
function toggleCountryDropdown(e){e.stopPropagation();var l=document.getElementById('countryDropdownList');l.classList.toggle('show');}
function filterCountries(v){var opts=document.querySelectorAll('.country-option');v=v.toLowerCase();opts.forEach(function(o){o.style.display=o.textContent.toLowerCase().includes(v)?'flex':'none';});}
document.addEventListener('click',function(){var l=document.getElementById('countryDropdownList');if(l)l.classList.remove('show');});
function clearFieldError(el){el.classList.remove('input-error');}

function validatePhoneOnBlur(input){var code=document.getElementById('selectedCode').textContent;var phone=input.value.replace(/\D/g,'');var errEl=document.getElementById('phoneError');var group=document.getElementById('phoneGroup');if(!phone){errEl.style.display='none';group.classList.remove('input-error');return;}if(code==='+91'){if(!/^[6-9]\d{9}$/.test(phone)){errEl.textContent='Please enter a valid 10-digit Indian mobile number starting with 6-9';errEl.style.display='block';group.classList.add('input-error');return;}}else{if(phone.length<7||phone.length>15){errEl.textContent='Please enter a valid phone number (7-15 digits)';errEl.style.display='block';group.classList.add('input-error');return;}}errEl.style.display='none';group.classList.remove('input-error');}

function validateConsultationForm(){var isValid=true;var name=document.getElementById('consultFullName');var phone=document.getElementById('phoneNumberInput');var city=document.getElementById('consultCity');var service=document.getElementById('consultService');var code=document.getElementById('selectedCode').textContent;if(!name.value.trim()){name.classList.add('input-error');isValid=false;}if(!phone.value.trim()){document.getElementById('phoneGroup').classList.add('input-error');isValid=false;}else{var p=phone.value.replace(/\D/g,'');if(code==='+91'&&!/^[6-9]\d{9}$/.test(p)){document.getElementById('phoneGroup').classList.add('input-error');document.getElementById('phoneError').textContent='Please enter a valid 10-digit Indian mobile number';document.getElementById('phoneError').style.display='block';isValid=false;}else if(p.length<7){document.getElementById('phoneGroup').classList.add('input-error');isValid=false;}}if(!city.value.trim()){city.classList.add('input-error');isValid=false;}if(!service.value){service.classList.add('input-error');isValid=false;}if(isValid){document.getElementById('combinedMobileField').value=code+phone.value.replace(/\D/g,'');var btn=document.getElementById('formSubmitBtn');btn.disabled=true;btn.textContent='Submitting...';setTimeout(function(){btn.disabled=false;btn.innerHTML='Get Free Quote \u2192';},6000);}return isValid;}

window.addEventListener('DOMContentLoaded',function(){populateCountries();var pageSourceField=document.getElementById('pageSourceField');if(pageSourceField){pageSourceField.value=window.location.href;}var iframe=document.getElementById('hidden208810000001209168Frame');if(iframe){iframe.addEventListener('load',function(){try{var iframeDoc=this.contentWindow.document;if(iframeDoc.body&&iframeDoc.body.childElementCount!==0){showSuccessState();}}catch(error){showSuccessState();}});}});

function showSuccessState(){var formCard=document.getElementById('consultationFormCard');if(formCard){formCard.innerHTML='<div class="form-success"><div class="form-success-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg></div><h3>Thank You!</h3><p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p></div>';}}
</script>

<script>
var mndFields208810000001209168=new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168=new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');
function checkMandatory208810000001209168(){var isReturn=true;for(var i=0;i<mndFields208810000001209168.length;i++){var fieldObj=document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];if(fieldObj){if(((fieldObj.value).replace(/^\s+|\s+$/g,'')).length==0){isReturn=false;}}}if(isReturn){document.getElementById('formSubmitBtn').disabled=true;}return isReturn;}
document.getElementById('hidden208810000001209168Frame').addEventListener('load',function(){try{var doc=arguments[0].currentTarget.contentWindow.document;if(doc.body&&doc.body.childElementCount!==0){showSuccessState();}}catch(error){showSuccessState();}});
</script>

<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
var tocWrapper=document.getElementById('tocWrapper');document.getElementById('tocLeft').addEventListener('click',function(){tocWrapper.scrollBy({left:-200,behavior:'smooth'});});document.getElementById('tocRight').addEventListener('click',function(){tocWrapper.scrollBy({left:200,behavior:'smooth'});});
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
(function(){var waBar=document.getElementById('waBar');var waClose=document.getElementById('waBarClose');var dismissed=false;waBar.classList.add('hidden');window.addEventListener('scroll',function(){if(dismissed)return;if(window.scrollY>300){waBar.classList.remove('hidden');}else{waBar.classList.add('hidden');}});waClose.addEventListener('click',function(){dismissed=true;waBar.classList.add('hidden');try{sessionStorage.setItem('wa_bar_dismissed','1');}catch(e){}});try{if(sessionStorage.getItem('wa_bar_dismissed')==='1'){dismissed=true;waBar.classList.add('hidden');waBar.style.display='none';}}catch(e){}})();
</script>

<script>
(function(){var opts={day:'numeric',month:'long',year:'numeric'};var dateStr=new Date().toLocaleDateString('en-IN',opts);var el1=document.getElementById('lastUpdated');var el2=document.getElementById('lastUpdatedFooter');if(el1)el1.textContent=dateStr;if(el2)el2.textContent=dateStr;})();
</script>

<script>
$(document).ready(function(){$('#testimonialSlider').slick({dots:false,infinite:true,speed:500,slidesToShow:3,slidesToScroll:1,autoplay:true,autoplaySpeed:4000,arrows:false,responsive:[{breakpoint:1024,settings:{slidesToShow:2}},{breakpoint:768,settings:{slidesToShow:1}}]});});
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
