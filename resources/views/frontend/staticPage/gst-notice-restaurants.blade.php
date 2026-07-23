
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
    <title>GST Notice Restaurants India</title>
    <meta name="description" content="GST notice for restaurants India 2026: 5 vs 18 percent disputes, Section 17(5) ITC, composition, Zomato Swiggy 9(5). CA-led, Rs 15K-50K per notice.">
    <link rel="canonical" href="/gst-notice-restaurants">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Notice Restaurants India 2026 | Patron Accounting">
    <meta property="og:description" content="GST notice for restaurants India 2026: 5 vs 18 percent disputes, Section 17(5) ITC, composition, Zomato Swiggy 9(5). CA-led, Rs 15K-50K per notice.">
    <meta property="og:url" content="/gst-notice-restaurants">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-notice-restaurants-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Notice Restaurants India 2026 | Patron Accounting">
    <meta name="twitter:description" content="GST notice for restaurants India 2026: 5 vs 18 percent disputes, Section 17(5) ITC, composition, Zomato Swiggy 9(5). CA-led, Rs 15K-50K per notice.">
    <meta name="twitter:image" content="/images/gst-notice-restaurants-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-notice-restaurants#breadcrumb",
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
          "name": "GST Notice",
          "item": "/gst-notice"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Restaurants",
          "item": "/gst-notice-restaurants"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-notice-restaurants#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the difference between 5 percent and 18 percent GST on restaurants?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Stand-alone restaurants attract 5 percent GST without Input Tax Credit under Notification 11/2017-CT(R) as amended by 13/2018 (HSN Heading 9963). Restaurants located in hotels with declared tariff of any unit of accommodation Rs 7,500 or more per night attract 18 percent GST with ITC under Notification 20/2019. The Rs 7,500 threshold is tested against the HIGHEST declared tariff in the hotel - not the average. A hotel with one suite at Rs 9,000 means its in-house restaurant falls under the 18-percent-with-ITC regime even if all other rooms are below Rs 7,500."
          }
        },
        {
          "@type": "Question",
          "name": "Can restaurants claim ITC under the 5 percent regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Notification 11/2017-CT(R) as amended by 13/2018 grants the 5 percent rate to stand-alone restaurants on the condition that no Input Tax Credit is claimed. Additionally, Section 17(5)(b) of the CGST Act 2017 blocks credit on food and beverages, outdoor catering and similar inputs except where used for the same category of outward supply. Restaurants under the 18 percent regime in hotels with declared tariff Rs 7,500+ can claim ITC. Claiming ITC under the 5 percent regime is the most common trigger for a Section 73 SCN in the restaurant sector."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 9(5) apply to Zomato and Swiggy orders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per Notification 17/2021-CT(R) dated 18 November 2021, effective 1 January 2022, restaurant services other than at specified premises supplied through e-commerce operators (Zomato, Swiggy, Magicpin and similar) fall under Section 9(5) of the CGST Act. The ECO pays 5 percent GST in cash via electronic cash ledger; no ITC utilisation. The restaurant reports such supplies in Table 3.1.1(ii) of GSTR-3B (informational, no tax payment). The ECO does not collect TCS under Section 52 on these supplies. Restaurants located at specified premises (hotels with declared tariff Rs 7,500+) are EXCLUDED from Section 9(5) and continue to pay their own 18 percent GST."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a restaurant gets a Section 73 notice on ITC reversal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Section 73 SCN (Form DRC-01) for ITC reversal under Section 17(5)(b) requires a reply within 30 days. The reply must demonstrate either (a) the ITC was for the same category of outward supply (e.g., F&B input used for taxable restaurant service in the 18 percent regime) and therefore not blocked, or (b) acknowledge the technical default and file DRC-03 voluntary payment with NIL penalty under Section 73(5) if before SCN finalisation or 10 percent under Section 73(8) within 30 days of SCN. Section 50 interest at 18 percent or 24 percent per annum applies. Patron handles the technical defence and DRC-03 computation."
          }
        },
        {
          "@type": "Question",
          "name": "How is the Rs 7,500 declared tariff threshold determined?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Rs 7,500 declared tariff threshold under Notification 20/2019-CT(R) is tested against the highest declared tariff of ANY unit of accommodation in the hotel - not the average rate or the transactional rate. The declared tariff is the publicly published room rate (printed brochure, hotel website, OTA listings); not the negotiated or discounted rate. A hotel that publishes one Presidential Suite at Rs 12,000 per night - even if mostly sold at Rs 8,000 - has all its in-house restaurants in the 18-percent-with-ITC regime because at least one unit has declared tariff Rs 7,500+. Patron handles the declared tariff card forensic in rate dispute notices."
          }
        }
      ]
    },
    {
      "@type": "LegalService",
      "@id": "/gst-notice-restaurants#legalservice",
      "name": "GST Notice for Restaurants in India - SCN Reply, Hearing and Appeal",
      "description": "Specialist national CA representation by Patron Accounting LLP for restaurant GST notices - covering Form DRC-01 SCN under Section 73 (non-fraud, 3-year time limit) and Section 74 (fraud, 5-year time limit), Form ASMT-10 scrutiny, Form DRC-01A pre-SCN intimation, Form DRC-13 attachment, Section 67 search and Section 70 summons response. Four core notice scenarios handled: (1) 5 vs 18 percent rate dispute under Notification 11/2017-CT(R) as amended by 13/2018 versus Notification 20/2019 - Rs 7,500 declared tariff threshold for specified premises tested against highest unit accommodation rate not average; (2) Section 17(5)(b) blocked credit reversal on food, beverages, outdoor catering and similar inputs except where used for same category outward supply; (3) Section 10 composition scheme audit with Rs 1.5 crore turnover limit (Rs 75 lakh special category states), Section 10(2)(d) interplay with Section 52 TCS where Section 9(5) supplies excluded; (4) Zomato/Swiggy/Magicpin Section 9(5) ECO reconciliation effective 1 January 2022 per Notification 17/2021-CT(R) - ECO pays 5 percent in cash via electronic cash ledger no ITC utilisation, restaurant reports Table 3.1.1(ii) GSTR-3B informational no tax payment, Circular 167/23/2021 framework. Additional coverage: Section 52 TCS reconciliation for ancillary services (packaging, delivery surcharge, convenience fee) post-1.1.2022, Form 27EQ versus GSTR-1 mismatch, Section 122(1B) retrospective ECO penalty effective 1 October 2023 per Finance (No.2) Act 2024 for cloud kitchens with own-app ECO format. Eight-step process: same-day intake, 48-hour technical review with risk-scored memo, strategy lock with engagement letter, reply drafting with Notifications 11/2017+13/2018+20/2019+17/2021 and Circulars 164/20/2021+167/23/2021 citations plus AAR/AAAR/HC/SC case law, evidence pack with declared tariff cards and ECO platform statements and Form 27EQ reconciliations, hearing representation before Superintendent/AC/JC/ADC/Commissioner, order tracking with DRC-03 if low-risk technicality with NIL/15/10/25 penalty per stage, Section 107 appeal preparation with APL-01 filing and 10 percent pre-deposit (capped at Rs 25 crore) advisory and GSTAT escalation under Section 112 with 20 percent additional pre-deposit (cumulative 30 percent capped at Rs 50 crore). National coverage with 4 city hearing-attendance hubs (Delhi, Gurugram, Mumbai, Pune) plus virtual hearing support for other locations.",
      "serviceType": "Restaurant GST Notice Handling and Appellate Representation",
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
          "name": "Goods and Services Tax (India)",
          "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"
        },
        {
          "@type": "Thing",
          "name": "Restaurant",
          "sameAs": "https://en.wikipedia.org/wiki/Restaurant"
        },
        {
          "@type": "Thing",
          "name": "Show cause notice",
          "sameAs": "https://en.wikipedia.org/wiki/Show_cause"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Restaurant GST Notice CA Plans",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Basic Notice - ASMT-10 / DRC-01A / ITC Mismatch Advisory",
            "price": "15000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/gst-notice-restaurants"
          },
          {
            "@type": "Offer",
            "name": "Standard - Section 73 SCN Up to Rs 10 Lakh",
            "price": "25000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/gst-notice-restaurants"
          },
          {
            "@type": "Offer",
            "name": "Complex - Section 73 SCN Rs 10-50 Lakh OR Section 74",
            "price": "35000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/gst-notice-restaurants"
          },
          {
            "@type": "Offer",
            "name": "High-Stake - Above Rs 50 Lakh OR Section 107 Appeal",
            "price": "50000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/gst-notice-restaurants"
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
                        GST Notice Handling for Restaurants in India for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Notice Types Handled:</span> 5 vs 18 percent rate disputes (Notification 11/2017 vs 20/2019), Section 17(5)(b) ITC reversal, composition scheme audits (Section 10), Zomato/Swiggy Section 9(5) reconciliation, Section 52 TCS mismatches, Section 73 / 74 SCN</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Stand-alone restaurants, hotel restaurants (3, 4 and 5-star), QSR chains, casual-dine groups, cloud kitchens, dark kitchens, banquet venues, cafes, bar and pub chains, composition dealers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Framework:</span> CGST Act 2017 (Sec 9(5), 10, 17(5)(b), 52, 73/74, 107); Notifications 11/2017, 13/2018, 20/2019, 17/2021; Circulars 164/20/2021, 167/23/2021; Finance (No.2) Act 2024 Section 122(1B)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Fees:</span> Rs 15,000 to Rs 50,000 per notice; free 30-minute review; 4-city hearing-attendance hubs (Delhi, Gurugram, Mumbai, Pune); single CA pod</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=GST%20Notice%20for%20Restaurant%20-%20CA%20Engagement&body=Hello%20Patron%20Restaurant%20CA%20Pod%2C%0A%0AI%20received%20a%20GST%20notice%20for%20my%20restaurant%20and%20need%20SCN%20reply%2Fhearing%2Fappeal%20representation.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20GST%20notice%20for%20my%20restaurant.%20I%20need%20a%20CA%20to%20handle%20the%20SCN%20reply%2C%20hearing%2C%20or%20appeal." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - GST Notice Restaurants'/>
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
                                <option value="gst-notice-restaurants" selected>GST Notice for Restaurants (this page)</option>
                                <option value="gst-notice">GST Notice (National Parent)</option>
                                <option value="gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants</option>
                                <option value="gst-returns-for-e-commerce-operator">GST Returns for ECO</option>
                                <option value="gst-audit">GST Audit</option>
                                <option value="payroll-services-for-hospitality">Payroll for Hospitality</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the process smooth. The Patron restaurant pod handled the SCN with statutory rigour - no last-minute scrambling for hearing date.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Restaurant Client</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our Section 73 SCN on Zomato Section 9(5) double-payment within the 30-day reply window. The Rs 14 lakh that was double-paid was refunded under Section 54 in 8 months and the SCN was dropped at hearing stage with zero demand.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">QC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">QSR Chain Owner</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">5 vs 18 percent rate dispute on our in-house restaurant - Premium Suite published at Rs 12,000 put us in the 18 percent regime. Patron's tariff card forensic plus DRC-03 voluntary payment closed the SCN at NIL penalty. Saved Rs 8 lakh in penalty exposure.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Hotel F&B Manager</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 17(5)(b) ITC reversal SCN for Rs 12 lakh on F&B procurement and outdoor catering inputs under our 5 percent regime. Patron's same-category outward supply analysis plus DRC-03 with NIL penalty under Section 73(5) saved us materially vs the 25 percent post-SCN penalty we would have paid otherwise.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Casual-Dine CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Section 10 composition + Section 52 + Section 9(5) interplay confusion - we lost composition mid-year because of own-app ECO supplies attracting TCS. Patron's interplay analysis cleaned up our position; CMP-04 filed; regime transition smooth; SCN dropped.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Cloud Kitchen MD</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram</div>
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
                    <p>Talk to a Patron restaurant GST notice specialist today - call, WhatsApp the SCN copy, or book a free 30-minute notice review. National coverage with 4-city hearing-attendance hubs.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is Restaurant GST Notice</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#procedure-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">5 Scenarios</a>
            <a href="#challenges-section" class="toc-btn">Notice Patterns</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Self vs Generalist vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice for Restaurants - National Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Notice Restaurants Services at a Glance</strong></p>
                    <p>If you run a restaurant and have received a GST SCN, Section 73 notice, audit observation or ITC mismatch advisory, you need CA representation immediately. Patron specialises in 5 vs 18 percent rate disputes (Notification 11/2017 vs 20/2019), Section 17(5)(b) ITC reversal, composition scheme audits and Zomato/Swiggy Section 9(5) reconciliation. Reply drafted within 7 days; hearing attended; appeal prepared. Rs 15,000 to Rs 50,000 per notice.</p>
                </div>
                <p>Restaurant GST notices in 2026 cluster around four scenarios. First and most common - the <strong>rate dispute</strong>: the officer's audit shows the establishment charged 5 percent under Notification 11/2017-CT(R) as amended by 13/2018, but the establishment qualifies as a "specified premises" under Notification 20/2019 because the hotel's declared tariff for any unit of accommodation crossed Rs 7,500 per night; differential 13 percent (18 percent minus 5 percent) plus interest plus penalty across 24 to 36 months is then assessed. Second - the <strong>Section 17(5)(b) ITC reversal</strong>: the restaurant claimed ITC on food, beverage and outdoor catering inputs while supplying under the 5 percent no-ITC regime - this is blocked credit under Section 17(5)(b) CGST Act 2017 unless used for the same category outward supply, and the full ITC reversal plus interest is assessed.</p>
                <div class="table-responsive-wrapper" style="margin-top:24px;margin-bottom:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Acts</td><td>CGST Act 2017 (Sec 9(5), 10, 17(5)(b), 52, 73, 74, 107, 122); Notifications 11/2017, 13/2018, 20/2019, 17/2021 CT(R); Circulars 164/20/2021, 167/23/2021</td></tr>
                        <tr><td>Notice Types Handled</td><td>5 vs 18 percent rate dispute, Section 17(5)(b) ITC reversal, composition scheme audit, Section 9(5) Zomato/Swiggy mismatch, Section 52 TCS reconciliation, Section 73 / 74 SCN, Section 107 appeal</td></tr>
                        <tr><td>Timeline</td><td>SCN reply within 30 days (extendable); hearing 60-120 days; order under DRC-07; appeal within 3 months under Section 107</td></tr>
                        <tr><td>Cost</td><td>Rs 15,000 to Rs 50,000 per notice (volume- and complexity-tiered)</td></tr>
                        <tr><td>Forms</td><td>DRC-01 (SCN), DRC-01A (intimation), DRC-03 (voluntary payment), DRC-07 (order summary), APL-01 (appeal), GSTR-3B Table 3.1.1, Form 26AS / TCS certificate</td></tr>
                        <tr><td>Time Limits</td><td>Section 73 - 3 years from due date of annual return; Section 74 - 5 years; Section 107 appeal - 3 months from order (extendable by 1 month)</td></tr>
                        <tr><td>Authority</td><td>GST Superintendent / AC / JC / ADC / Commissioner; State GST Department or DGGI; Appellate Authority; GSTAT</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Third - the <strong>composition scheme audit</strong>: a Section 10 composition dealer (5 percent restaurant rate, turnover limit Rs 1.5 crore) is found to have crossed the threshold mid-year, or to have made interstate outward supplies, or to be ineligible because of supplies through ECO that attract TCS under Section 52 - composition is denied retrospectively and regular rate plus interest is reassessed. Fourth - the <strong>Zomato/Swiggy Section 9(5) mismatch</strong>: effective 1 January 2022 per Notification 17/2021-CT(R) dated 18 November 2021, the ECO (Zomato, Swiggy, Magicpin, others) pays 5 percent GST in cash on restaurant services delivered through its platform; the restaurant reports the turnover in Table 3.1.1(ii) of GSTR-3B without paying tax. Officers issue Section 73 notices when (a) the restaurant inadvertently pays GST again on ECO supplies, (b) the ECO TCS certificate (pre-1.1.2022) does not reconcile to the restaurant's GSTR-1, or (c) the restaurant claims ITC against Section 9(5) supplies.</p>
                <p>Patron Accounting LLP handles GST notices for restaurants, hotel F&amp;B units, QSR chains, casual-dine chains, cloud kitchens, dark kitchens, takeaway and delivery-only formats, banquet and event venues, cafes and coffee chains, and bar and pub chains as a <strong>specialist national service</strong>. Scope covers SCN review and risk scoring, reply drafting with case-law citations, hearing representation before Superintendent, AC, JC, ADC and Commissioner, DRC-03 voluntary payment computation where appropriate, appeal preparation under Section 107 to the Appellate Authority, and downstream linkage to GST returns retainer to prevent recurrence. National coverage with 4 city pages (Delhi, Gurugram, Mumbai, Pune) for local hearing attendance and jurisdictional commissionerate familiarity. Restaurant GST notices are structurally different from other industry notices because the sector has the most complex rate-regime split in the GST law - a single F&amp;B operator can simultaneously sell at 5 percent (stand-alone), 18 percent (hotel restaurant Rs 7,500+ specified premises), Section 9(5) (Zomato/Swiggy ECO supplies), composition 5 percent (Section 10), and packaged food retail at applicable HSN rate - each stream has different return-reporting rules and mismatch between any two triggers a Section 73 SCN.</p>
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
                <h2 class="section-title">What Is GST Notice Handling for Restaurants?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST notice handling for restaurants is the specialist CA representation service for <strong>restaurant, hotel F&amp;B, QSR, cloud kitchen and food-chain operators</strong> facing a GST show-cause notice, ITC mismatch advisory, composition scheme audit, Section 9(5) reconciliation query or any other adjudication proceeding under the CGST Act 2017. Deliverables include SCN technical review with risk scoring, reply drafting with statutory and case-law citations, supporting evidence pack preparation (GSTR-1, GSTR-3B, books reconciliation, declared tariff proof, ECO TCS certificates, ITC ledger), hearing representation before the adjudicating authority, DRC-03 voluntary payment computation where remediation rather than litigation is the right call, Section 107 appeal preparation to the Appellate Authority if needed, and downstream linkage to monthly GST returns retainer to prevent recurrence.</p>
<p>Restaurant GST notices are structurally different from other industry notices because the sector has the <strong>most complex rate-regime split in the GST law</strong>. A single F&amp;B operator can simultaneously: (a) sell food in a stand-alone outlet at 5 percent without ITC under Notification 11/2017-CT(R) as amended by 13/2018, (b) sell food in a hotel restaurant where the declared tariff for any unit of accommodation is Rs 7,500+ per night at 18 percent with ITC under Notification 20/2019, (c) deliver through Zomato and Swiggy where the ECO pays 5 percent under Section 9(5) effective 1 January 2022 per Notification 17/2021-CT(R), (d) run a composition outlet under Section 10 at 5 percent without ITC up to Rs 1.5 crore turnover, and (e) sell packaged food retail at the applicable HSN rate (5, 12 or 18 percent based on schedule classification). Each stream has different return-reporting rules; mismatch between any two triggers a Section 73 SCN.</p>
<p>The <strong>Section 17(5)(b) blocked credit angle</strong> compounds the complexity. Under Section 17(5)(b) of the CGST Act 2017, food and beverage purchases, outdoor catering and similar inputs do not qualify for ITC unless they are used for the same category of outward supply. A restaurant under the 5 percent no-ITC regime claiming ITC on food procurement (which would be the same category) is still disallowed because of the Notification 11/2017 condition that 5 percent is available only on the express undertaking that ITC is not claimed. A hotel restaurant at 18 percent with ITC can claim ITC on F&amp;B inputs. A 5 percent restaurant claiming ITC on outdoor catering received for staff is also blocked under Section 17(5)(b). Officers routinely sweep ITC ledgers for these reversals - hence the high frequency of Section 73 notices in this sector.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Notice Restaurants:</strong></p>
                    <p><strong>Restaurant Service:</strong> Per Notification 11/2017-CT(R) and Circular 164/20/2021-GST dated 6 October 2021 - supply of food or beverage as part of any service provided by a restaurant, eating joint, mess or canteen, including takeaway, room service and door delivery; HSN 9963.</p>
<p><strong>Specified Premises:</strong> Per Notification 20/2019-CT(R) - premises providing hotel accommodation with declared tariff of any unit of accommodation above Rs 7,500 per unit per day. Restaurants located at specified premises attract 18 percent GST with ITC.</p>
<p><strong>Declared Tariff:</strong> Published room rate of the hotel (not the transactional or negotiated rate). The Rs 7,500 threshold is tested against the HIGHEST declared tariff of any unit of accommodation in the hotel - not the average rate.</p>
<p><strong>Section 9(5) ECO Liability:</strong> Under Section 9(5) CGST Act, government notifies categories of services where the e-commerce operator (Zomato, Swiggy, Magicpin etc.) is liable to pay GST instead of the actual supplier. For restaurant services through ECO, this is effective 1 January 2022 per Notification 17/2021-CT(R) dated 18 November 2021.</p>
<p><strong>Section 17(5)(b) Blocked Credit:</strong> ITC blocked on food and beverages, outdoor catering, beauty treatment, health services, cosmetic and plastic surgery, except where used for the same category of outward supply or compulsorily provided under any law.</p>
<p><strong>Composition Scheme (Section 10):</strong> Optional scheme for taxpayers with turnover up to Rs 1.5 crore (Rs 75 lakh for special category states); restaurant rate 5 percent (2.5 percent CGST + 2.5 percent SGST); no ITC; quarterly GSTR-4 plus annual CMP-08.</p>
<p><strong>Section 73 Notice:</strong> SCN for tax not paid, short paid, erroneously refunded or ITC wrongly availed for reasons OTHER than fraud, wilful misstatement or suppression. Time limit: 3 years from due date of annual return. Form DRC-01.</p>
<p><strong>Section 74 Notice:</strong> SCN for the same reasons WITH fraud, wilful misstatement or suppression. Time limit: 5 years. Higher penalty (equal to tax). Form DRC-01.</p>
<p><strong>Form DRC-03 Voluntary Payment:</strong> Voluntary payment of tax with interest before SCN (Section 73(5) / 74(5)) or before order issuance - reduces penalty to NIL (Section 73) or to 15 percent (Section 74). Often the right call where the dispute is on a low-risk technicality.</p>
<p><strong>Table 3.1.1 GSTR-3B:</strong> Reporting table for Section 9(5) supplies. Sub-table (i) for ECO supplies (ECO pays). Sub-table (ii) for restaurants (informational - no tax payment by the restaurant on these supplies).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Notice Restaurants</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Restaurants</span>
                        <strong>GST Notice CA</strong>
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
            <h2 class="section-title">Who Needs Specialist Restaurant GST Notice Handling?</h2>
            <div class="content-text">
                
                <p>Specialist restaurant GST notice handling is required when one or more of the following apply:</p>
<ul>
    <li>You have received a Form DRC-01 SCN under Section 73 or Section 74 of the CGST Act 2017</li>
    <li>You have received a Form DRC-01A intimation (pre-SCN) on rate, ITC, composition or Section 9(5) reconciliation</li>
    <li>You have received an ASMT-10 scrutiny notice on your GSTR-1 / GSTR-3B / GSTR-9 returns</li>
    <li>You have received an audit observation under Section 65 CGST Act flagging 5 vs 18 percent classification, ITC reversal or composition eligibility</li>
    <li>Your ECO TCS certificate (Form 27EQ from Zomato or Swiggy for pre-1.1.2022 supplies or for ancillary services post-1.1.2022) does not reconcile to your GSTR-1</li>
    <li>You have received a Form GSTR-1A or ITC-04 mismatch notice</li>
    <li>You are facing a Section 67 search/seizure or Section 70 summons in connection with GST</li>
    <li>You are within the 3-month appeal window under Section 107 against an adverse DRC-07 order</li>
    <li>You are restructuring your F&amp;B operations across stand-alone, hotel restaurant and ECO delivery streams and want preventive notice-risk advisory</li>
</ul>

<h3 style="margin-top:24px;">Statutory Deadline Snapshot</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Notice / Action</th><th>Reply / Appeal Window</th></tr></thead>
    <tbody>
        <tr><td>Reply to DRC-01 SCN</td><td>30 days (extendable per officer's discretion)</td></tr>
        <tr><td>Reply to DRC-01A intimation</td><td>Typically 7 to 15 days per the intimation</td></tr>
        <tr><td>Reply to ASMT-10 scrutiny notice</td><td>Typically 15 days</td></tr>
        <tr><td>Section 107 Appeal to Appellate Authority</td><td>3 months from order date (extendable by 1 month with sufficient cause); 10 percent pre-deposit (capped at Rs 25 crore)</td></tr>
        <tr><td>Section 73 time limit</td><td>3 years from due date of annual return for the relevant FY</td></tr>
        <tr><td>Section 74 time limit</td><td>5 years from due date of annual return</td></tr>
        <tr><td>DRC-03 voluntary payment under Section 73(5)</td><td>Anytime before SCN, penalty NIL</td></tr>
        <tr><td>DRC-03 voluntary payment under Section 74(5)</td><td>Anytime before SCN, penalty 15 percent of tax</td></tr>
        <tr><td>DRC-03 after SCN under Section 73(8)</td><td>Within 30 days of SCN, penalty 10 percent of tax or Rs 10,000 whichever higher</td></tr>
        <tr><td>DRC-03 after SCN under Section 74(8)</td><td>Within 30 days, penalty 25 percent of tax</td></tr>
    </tbody>
</table>
</div>

<div class="highlight-box" style="margin-top:16px;">
<p><strong>Restaurant Sector Specificity:</strong> The 5 vs 18 percent rate dispute, Section 17(5)(b) blocked credit on F&amp;B inputs, Section 10 composition scheme audit, and Section 9(5) Zomato/Swiggy ECO mechanics are the four notice clusters that recur in this sector. A generalist CA reply that does not engage with Notifications 11/2017, 13/2018, 20/2019 and 17/2021, Circulars 164/20/2021 and 167/23/2021, and the Table 3.1.1 GSTR-3B reporting framework typically loses ground at hearing stage.</p>
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
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>SCN Technical Review and Risk Scoring</td><td>Receipt of the SCN copy (DRC-01 / DRC-01A / ASMT-10) plus 6-month GSTR-1, GSTR-3B and GSTR-9 returns, books reconciliation, ECO TCS certificate (where relevant), declared tariff proof (for hotel restaurants), Section 10 composition turnover proof; 48-hour CA review producing a risk-scored memo (HIGH / MEDIUM / LOW) with options - contest, partially concede, or DRC-03 voluntary payment.</td></tr>
<tr><td>Reply Drafting with Case-Law Citations</td><td>Comprehensive SCN reply addressing each allegation with statutory references (Notifications 11/2017, 13/2018, 20/2019, 17/2021 CT(R); Section 9(5), 10, 17(5)(b), 73 / 74 CGST), CBIC Circulars (164/20/2021, 167/23/2021), AAR / AAAR / High Court / Supreme Court case law where applicable; signed by CA representative; filed within the SCN reply window.</td></tr>
<tr><td>Hearing Representation Before Adjudicating Authority</td><td>Personal hearing attendance before Superintendent, AC, Joint Commissioner, Additional Commissioner or Commissioner as the rank of the SCN-issuing officer dictates; oral submissions; rebuttal of department's case; written submissions filed after hearing; coordination across multiple hearings if scheduled. National coverage across 4 city pages (Delhi, Gurugram, Mumbai, Pune).</td></tr>
<tr><td>5 vs 18 Percent Rate Dispute Defence</td><td>Declared tariff documentary defence - hotel tariff card per Notification 20/2019; demonstration that no unit of accommodation has tariff Rs 7,500+ per day; or, where the hotel has crossed the threshold, computation of the period of breach with proportionate reassessment; Section 11/2017 5 percent regime defence with the no-ITC undertaking record.</td></tr>
<tr><td>Section 17(5)(b) ITC Reversal Handling</td><td>ITC ledger forensic review identifying every F&amp;B and outdoor catering input claim; segregation between same-category outward supply (where ITC is allowed) and other-category (where ITC is blocked); proportionate reversal computation; DRC-03 voluntary payment computation where the reversal is technically due; contest with case-law support where the input use is bona fide same-category.</td></tr>
<tr><td>Composition Scheme Audit Defence</td><td>Section 10 eligibility defence - turnover proof up to Rs 1.5 crore (Rs 75 lakh special category states); interstate outward supply check (composition denied); ECO supply check under Section 10(2)(d) plus Section 52 (composition denied if ECO is required to collect TCS - but Section 9(5) supplies excluded from TCS so composition is preserved for those); CMP-08 and GSTR-4 reconciliation.</td></tr>
<tr><td>Section 9(5) ECO Reconciliation</td><td>Reconciliation of Zomato / Swiggy / Magicpin platform reports, Form 27EQ TCS certificates (for ancillary services like delivery / packing where TCS continues), GSTR-3B Table 3.1.1(ii) reporting versus Table 3.1(a) outward supplies, books revenue, bank receipts; identification of double-payment of GST (often the trigger for SCN) with refund claim preparation; Circular 167/23/2021 framework applied.</td></tr>
<tr><td>DRC-03 Voluntary Payment Computation</td><td>Where the right call is to remediate rather than contest, computation of voluntary payment under DRC-03 with tax + interest under Section 50 + penalty (NIL under Section 73(5) before SCN, 15 percent under Section 74(5)); filing through the GST portal; closure intimation.</td></tr>
<tr><td>Section 107 Appeal Preparation</td><td>Where the adjudicating authority's DRC-07 order is adverse, appeal preparation under Section 107 to the Appellate Authority within 3 months; 10 percent pre-deposit computation (capped at Rs 25 crore); APL-01 filing; grounds of appeal drafting; hearing representation; further escalation to GST Appellate Tribunal where applicable.</td></tr>

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
            <h2 class="section-title">Patron 8-Step Restaurant Notice Handling Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From same-day intake on SCN copy through 48-hour technical review, strategy lock, reply drafting with restaurant-industry case-law citations, evidence pack preparation (declared tariff cards, ECO platform statements, Form 27EQ reconciliation), hearing representation before Superintendent / AC / JC / ADC / Commissioner, order tracking with DRC-03 where appropriate, and Section 107 appeal preparation with APL-01 filing and 10 percent pre-deposit advisory.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Same-Day Intake Call</h3>
        <p class="step-description">Patron CA team takes the SCN copy on WhatsApp or e-mail; confirms notice section (73 / 74 / 107 / 67 / 70 / ASMT-10), demand quantum, hearing date and time-sensitivity; provisional engagement letter signed.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>WhatsApp / phone / e-mail</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section + demand confirmed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provisional engagement signed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SAME-DAY INTAKE</text>
<rect x="22" y="38" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="45" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SCN UPLOAD WHATSAPP</text>
<rect x="22" y="51" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="40" y="58" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PHONE</text>
<rect x="62" y="51" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="80" y="58" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">E-MAIL</text>
<rect x="22" y="64" width="76" height="9" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="70" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">PROVISIONAL ENGAGEMENT</text>
                </svg>
            </div>
            <span class="illustration-label">Notice Intake</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">48-Hour Technical Review</h3>
        <p class="step-description">6-month GSTR-1/3B/9 returns, books, ECO TCS certificates, declared tariff proof and ITC ledger reviewed; risk-scored memo delivered with recommended path (contest / partial concession / DRC-03).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR returns + books</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECO TCS + tariff proof</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risk memo delivered</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">48-HR REVIEW</text>
<rect x="22" y="35" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="41" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1/3B/9 6 MTHS</text>
<rect x="22" y="46" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ECO TCS CERT</text>
<rect x="22" y="57" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="63" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DECLARED TARIFF</text>
<rect x="22" y="68" width="36" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="40" y="75" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">RISK SCORE</text>
<rect x="62" y="68" width="36" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="80" y="75" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">PATH MEMO</text>
                </svg>
            </div>
            <span class="illustration-label">Risk Scored</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Strategy Lock</h3>
        <p class="step-description">Call with the restaurant owner / CFO to agree the path; provisional cost estimate confirmed (Rs 15,000 to Rs 50,000 per notice basis quantum and stage).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path agreed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee fixed Rs 15K-50K</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Engagement letter</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STRATEGY LOCK</text>
<rect x="22" y="35" width="36" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="40" y="43" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CONTEST</text>
<text x="40" y="48" font-size="5" fill="#10B981" font-weight="400" text-anchor="middle" font-family="Arial">FULL</text>
<rect x="62" y="35" width="36" height="14" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="80" y="43" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PARTIAL</text>
<text x="80" y="48" font-size="5" fill="#E8712C" font-weight="400" text-anchor="middle" font-family="Arial">CONCEDE</text>
<rect x="22" y="51" width="76" height="14" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="60" y="59" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03 VOLUNTARY</text>
<text x="60" y="64" font-size="5" fill="#FD6B6D" font-weight="400" text-anchor="middle" font-family="Arial">NIL PENALTY 73(5)</text>
<rect x="22" y="67" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="74" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">ENGAGEMENT LETTER</text>
<rect x="22" y="80" width="76" height="10" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FEE Rs 15K-50K</text>
                </svg>
            </div>
            <span class="illustration-label">Strategy Locked</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Reply Drafting</h3>
        <p class="step-description">Comprehensive SCN reply with statutory and Circular references (Notifications 11/2017, 13/2018, 20/2019, 17/2021 CT(R); Circulars 164/20/2021, 167/23/2021; Sections 9(5), 10, 17(5)(b), 73/74), AAR/AAAR/HC/SC case law citations, books reconciliation annexures; CA-signed; filed via GST portal within the SCN window.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statutory + circular refs</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Case law citations</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST portal filing</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REPLY DRAFTING</text>
<rect x="22" y="35" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="41" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">N 11/17 + 20/19</text>
<rect x="22" y="46" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CIRC 167/23/2021</text>
<rect x="22" y="57" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="63" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEC 9(5) + 17(5)</text>
<rect x="22" y="68" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="74" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AAR + HC CASE LAW</text>
<rect x="22" y="79" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CA-SIGNED + PORTAL</text>
                </svg>
            </div>
            <span class="illustration-label">Reply Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Evidence Pack Preparation</h3>
        <p class="step-description">Declared tariff cards, hotel tariff history, ECO platform statements, TCS Form 27EQ reconciliations, ITC vendor invoices with HSN, composition turnover proof - indexed and submitted with reply.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tariff cards + ECO stmts</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 27EQ recon</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Indexed annexures</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EVIDENCE PACK</text>
<rect x="22" y="35" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="41" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">TARIFF CARDS</text>
<rect x="22" y="46" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="52" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ZOMATO/SWIGGY STMT</text>
<rect x="22" y="57" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="63" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM 27EQ TCS</text>
<rect x="22" y="68" width="76" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="74" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ITC VENDOR HSN</text>
<rect x="22" y="79" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="86" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">INDEXED + ANNEXED</text>
                </svg>
            </div>
            <span class="illustration-label">Evidence Packed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Hearing Representation</h3>
        <p class="step-description">In-person attendance at the hearing before Superintendent, AC, JC, ADC or Commissioner per the SCN officer's rank; oral submissions; rebuttal of department's case; written submissions filed.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Supdt / AC / JC / ADC / Commissioner</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Oral submissions</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Written submissions filed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HEARING REP</text>
<rect x="22" y="35" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="40" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SUPDT</text>
<rect x="62" y="35" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="80" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AC</text>
<rect x="22" y="48" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="40" y="55" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">JC</text>
<rect x="62" y="48" width="36" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="80" y="55" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ADC</text>
<rect x="22" y="61" width="76" height="11" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="60" y="68" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">COMMISSIONER</text>
<rect x="22" y="74" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="81" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">ORAL + WRITTEN SUBM</text>
                </svg>
            </div>
            <span class="illustration-label">Hearing Done</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Order Tracking and DRC-03 If Appropriate</h3>
        <p class="step-description">DRC-07 order tracked through the portal; if adverse and the dispute is on a low-risk technicality, DRC-03 filed to close at applicable penalty rate (NIL / 15 percent / 25 percent depending on stage).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-07 tracked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 if low-risk</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NIL/15/25 penalty</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="28" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ORDER + DRC-03</text>
<rect x="22" y="35" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DRC-07 ORDER</text>
<rect x="22" y="48" width="36" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="40" y="56" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">FAVOURABLE</text>
<text x="40" y="61" font-size="5" fill="#10B981" font-weight="400" text-anchor="middle" font-family="Arial">CLOSE</text>
<rect x="62" y="48" width="36" height="14" rx="2" fill="#FFE0E0" stroke="#FD6B6D" stroke-width="0.8"/>
<text x="80" y="56" font-size="6" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">ADVERSE</text>
<text x="80" y="61" font-size="5" fill="#FD6B6D" font-weight="400" text-anchor="middle" font-family="Arial">APPEAL</text>
<rect x="22" y="64" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="71" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03 IF LOW-RISK</text>
<rect x="22" y="77" width="76" height="11" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="84" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">NIL/15/25 PENALTY</text>
                </svg>
            </div>
            <span class="illustration-label">Order Tracked</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Section 107 Appeal Preparation</h3>
        <p class="step-description">APL-01 filing within 3 months, 10 percent pre-deposit (capped at Rs 25 crore), grounds of appeal, hearing representation before the Appellate Authority; escalation to GSTAT where required.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>APL-01 within 3 months</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10pct pre-deposit</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTAT escalation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="80" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
<text x="60" y="28" font-size="9" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SEC 107 APPEAL</text>
<rect x="22" y="35" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">APL-01 FILING</text>
<text x="60" y="49" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">v</text>
<rect x="22" y="52" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="59" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">10pct PRE-DEPOSIT</text>
<text x="60" y="66" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">v</text>
<rect x="22" y="69" width="76" height="11" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.8"/>
<text x="60" y="76" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">APPELLATE HEARING</text>
<rect x="22" y="82" width="76" height="9" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/>
<text x="60" y="88" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">GSTAT ESCALATION</text>
<circle cx="100" cy="22" r="5" fill="#10B981"/>
<path d="M97 22 L99 24 L103 20" stroke="#fff" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Appeal Filed</span>
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
            <h2 class="section-title">Common Restaurant Notice Scenarios and How We Solve Them</h2>
            <div class="content-text">
                
                <p>Restaurant GST notices in 2026 cluster around five recurring scenarios. Patron's restaurant-specialist CA pod maintains sector-specific notice playbooks for each.</p>

<h3 style="margin-top:24px;">Scenario 1: 5 vs 18 Percent Rate Dispute on a Hotel Restaurant</h3>
<p><strong>Issue:</strong> A 4-star hotel in Pune charges 5 percent GST on its in-house restaurant; its tariff card shows the cheapest room at Rs 5,500 but a Premium Suite at Rs 12,000 per night. GST audit assesses the restaurant at 18 percent under Notification 20/2019 (since one unit of accommodation crosses Rs 7,500); Section 73 SCN for differential 13 percent x Rs 4.2 crore restaurant revenue across 30 months = Rs 54 lakh tax plus Rs 8 lakh interest plus penalty.</p>
<p><strong>Patron solution:</strong> Declared tariff card history examined; if Suite has indeed been published at Rs 12,000 throughout, the 18 percent regime applies and DRC-03 voluntary payment is recommended (penalty NIL under Section 73(5) before SCN finalisation) with prospective regime correction; if Suite was promotional or seasonal only, the regime defence under Notification 20/2019 reading.</p>

<h3 style="margin-top:24px;">Scenario 2: Section 17(5)(b) ITC Reversal on 5 Percent Regime Restaurant</h3>
<p><strong>Issue:</strong> A casual-dine restaurant charging 5 percent under Notification 11/2017 has been claiming ITC on food procurement, outdoor catering for staff meals, and beverage purchases. Section 73 SCN assesses Rs 12 lakh ITC reversal plus interest.</p>
<p><strong>Patron solution:</strong> Section 17(5)(b) reading - food and beverage inputs are blocked credit unless used for the same category outward supply; and Notification 11/2017 5 percent regime expressly bars ITC. The ITC was wrongly claimed - DRC-03 voluntary payment of Rs 12 lakh plus Section 50 interest at 18 percent per annum (NIL penalty under Section 73(5) if before SCN; 10 percent if within 30 days of SCN). Going forward, the restaurant's vendor ledger is sanitised to bar F&amp;B ITC claims.</p>

<h3 style="margin-top:24px;">Scenario 3: Zomato Section 9(5) Double-Payment of GST</h3>
<p><strong>Issue:</strong> A QSR chain that supplies through Zomato continues to pay 5 percent GST on Zomato orders in Table 3.1(a) of GSTR-3B after 1 January 2022 (date of Section 9(5) ECO liability effective per Notification 17/2021-CT(R)). The chain has been double-paying GST for 14 months - Rs 18 lakh excess. Concurrently, the department issues an SCN asking why output GST on those supplies is being paid twice.</p>
<p><strong>Patron solution:</strong> Circular 167/23/2021-GST applied; supplies through Zomato are Section 9(5) liability of the ECO; restaurant reports them in Table 3.1.1(ii) of GSTR-3B (no tax payment). Refund application under Section 54 CGST for the Rs 18 lakh excess prepared; SCN reply demonstrating Section 9(5) applicability.</p>

<h3 style="margin-top:24px;">Scenario 4: Composition Scheme Denied Retrospectively</h3>
<p><strong>Issue:</strong> A standalone restaurant with annual turnover Rs 1.62 crore (FY 2024-25) opts for Section 10 composition at 5 percent. GST audit assesses that turnover crossed Rs 1.5 crore in Q3; composition denied from Q3; reassessment at 5 percent regular (without composition's procedural advantages but still 5 percent without ITC); penalty under Section 122.</p>
<p><strong>Patron solution:</strong> Turnover reconciliation across the 4 quarters; pinpoint the crossing date; CMP-04 intimation for opting out of composition; clean transition to regular Notification 11/2017 5 percent without ITC regime; DRC-03 for the brief overlap period.</p>

<h3 style="margin-top:24px;">Scenario 5: Section 52 TCS Reconciliation for Ancillary Services</h3>
<p><strong>Issue:</strong> Post-1 January 2022, Zomato collects TCS under Section 52 only on ancillary services (packaging, delivery surcharge, convenience fee) - not on the restaurant service which is under Section 9(5). The restaurant's books recognise the gross Zomato settlement as restaurant revenue without segregating the ancillary component; Form 27EQ shows TCS that does not reconcile to any reported outward supply in GSTR-1.</p>
<p><strong>Patron solution:</strong> Zomato monthly settlement statement broken into restaurant service (Section 9(5), no TCS) versus ancillary (Section 52, TCS at 1 percent); books restated to segregate the two streams; reconciliation pack for the SCN reply.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Notice Challenges and Patron's Response</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>5 vs 18 Percent Rate Regime Confusion</td><td>Standalone restaurants attract 5 percent without ITC under Notification 11/2017 as amended by 13/2018; restaurants at "specified premises" (hotel with any unit of accommodation declared tariff Rs 7,500+ per night) attract 18 percent with ITC under Notification 20/2019. Rs 7,500 threshold tested against HIGHEST declared tariff in the hotel - not average. One Premium Suite at Rs 12,000 puts the entire in-house restaurant in 18 percent regime even if all other rooms below Rs 7,500.</td><td>Patron solution: Declared tariff card forensic; OTA listing history; promotional vs seasonal vs published rate distinction; period-of-breach computation; DRC-03 voluntary payment or contest path per case.</td></tr>
<tr><td>Section 17(5)(b) Blocked Credit on F&amp;B Inputs</td><td>5 percent regime restaurants cannot claim ITC (Notification 11/2017 condition); even 18 percent restaurants cannot claim ITC on F&amp;B inputs unless used for same-category outward supply (Section 17(5)(b)). Outdoor catering for staff meals is blocked. Officers routinely sweep ITC ledgers for these reversals.</td><td>Patron solution: ITC ledger forensic review; same-category outward supply segregation; proportionate reversal computation; DRC-03 with Section 50 interest; vendor ledger sanitisation framework.</td></tr>
<tr><td>Composition Scheme Section 10 Eligibility</td><td>Turnover limit Rs 1.5 crore (Rs 75 lakh special category states); 5 percent without ITC; interstate outward supply disqualifies; ECO supply where Section 52 TCS applicable disqualifies under Section 10(2)(d) - BUT Section 9(5) supplies excluded from Section 52 TCS so composition preserved for those.</td><td>Patron solution: Quarterly turnover monitoring; Section 10(2)(d) + Section 52 + Section 9(5) interplay analysis; CMP-04 intimation timing; CMP-08 and GSTR-4 reconciliation; clean regime transition.</td></tr>
<tr><td>Section 9(5) Zomato/Swiggy ECO Mechanics</td><td>Effective 1 January 2022 per Notification 17/2021-CT(R), ECO (Zomato, Swiggy, Magicpin) pays 5 percent GST in cash via electronic cash ledger on restaurant services other than at specified premises; no ITC utilisation; ECO issues invoice; restaurant reports in Table 3.1.1(ii) GSTR-3B (informational, no tax payment); ECO does NOT collect Section 52 TCS on these supplies.</td><td>Patron solution: Circular 167/23/2021 framework; Table 3.1.1(ii) reporting; Section 54 refund for double-paid GST; Section 52 versus 9(5) clear segregation; specified premises exclusion analysis.</td></tr>
<tr><td>Section 52 TCS on Ancillary Services (Post-1.1.2022)</td><td>Post-1 January 2022, Zomato/Swiggy continue collecting Section 52 TCS at 1 percent (0.5 percent CGST + 0.5 percent SGST or 1 percent IGST) ONLY on ancillary services (packaging, delivery surcharge, convenience fee) - not on restaurant service which is under Section 9(5). Books treating gross Zomato settlement as restaurant revenue without ancillary segregation triggers Form 27EQ versus GSTR-1 mismatch SCN.</td><td>Patron solution: Zomato monthly settlement statement breakdown into restaurant service (Section 9(5)) versus ancillary (Section 52); books restated; reconciliation pack for SCN reply.</td></tr>
<tr><td>Section 122(1B) ECO Penalty Retrospectively Effective</td><td>Per Finance (No.2) Act 2024, Section 122(1B) - penalty for ECO non-compliance under Section 52 - retrospectively effective 1 October 2023. Restaurants with own-app ECO format (cloud kitchens supplying via own digital platform plus aggregators) need compliance review for the retrospective window.</td><td>Patron solution: ECO format identification; Section 122(1B) retrospective exposure assessment; voluntary disclosure framework where applicable; DRC-03 with penalty advisory.</td></tr>
<tr><td>Form 27EQ TCS Certificate Reconciliation</td><td>Form 27EQ TCS certificate from ECO (pre-1.1.2022 supplies and post-1.1.2022 ancillary services) reconciled to outward supplies in GSTR-1 and bank receipts; mismatches trigger Section 73 SCN. Common error: gross Zomato settlement booked as revenue without ancillary segregation.</td><td>Patron solution: Form 27EQ versus GSTR-1 reconciliation framework; gross settlement breakdown; ancillary versus restaurant service segregation; bank receipt reconciliation; SCN reply with reconciled outward supply schedule.</td></tr>
<tr><td>Multi-Stream F&amp;B Operator Complexity</td><td>A single F&amp;B group can simultaneously operate: (a) stand-alone restaurant 5 percent no-ITC, (b) hotel restaurant 18 percent with ITC, (c) Zomato/Swiggy delivery Section 9(5), (d) composition outlet Section 10 5 percent, (e) packaged food retail at applicable HSN. Each stream has different return-reporting rules; mismatch between any two triggers Section 73 SCN.</td><td>Patron solution: Multi-stream segregation framework; GSTIN-level allocation; Table 3.1(a) vs Table 3.1.1(ii) accurate reporting; ITC apportionment under Rule 42/43 where mixed-regime operations; preventive notice-risk advisory via /gst-returns retainer.</td></tr>

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
            <h2 class="section-title">Patron Restaurant GST Notice Fees - Tiered by Complexity</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Basic Notice (ASMT-10 / DRC-01A / ITC Mismatch Advisory)</td><td>Rs 15,000 per notice (Exl GST and Govt. Charges). Reply, one round of clarification, voluntary payment computation if needed.</td></tr>
<tr><td>Standard - Section 73 SCN, Demand Up to Rs 10 Lakh</td><td>Rs 25,000 per notice (Exl GST and Govt. Charges). Reply, evidence pack, hearing representation (1 hearing), DRC-03 / DRC-07 follow-up.</td></tr>
<tr><td>Complex - Section 73 SCN, Demand Rs 10 to 50 Lakh OR Section 74</td><td>Rs 35,000 per notice (Exl GST and Govt. Charges). Standard + multiple hearings + case-law-heavy written submissions.</td></tr>
<tr><td>High-Stake - Section 73/74, Demand Above Rs 50 Lakh OR Section 107 Appeal</td><td>Rs 50,000+ per notice (Exl GST and Govt. Charges). Complex + appeal preparation + APL-01 + pre-deposit advisory; escalation to GSTAT if needed.</td></tr>
<tr><td>Section 107 Appellate Authority Filing (APL-01)</td><td>Rs 25,000 to Rs 50,000 (Exl GST and Govt. Charges). Grounds of appeal drafting; 10 percent pre-deposit advisory (capped at Rs 25 crore); hearing representation.</td></tr>
<tr><td>DRC-03 Voluntary Payment Filing</td><td>Rs 5,000 per filing (Exl GST and Govt. Charges). Tax + Section 50 interest + applicable penalty (NIL / 15 / 10 / 25 percent depending on stage) computation.</td></tr>
<tr><td>Section 54 Refund Application (Zomato/Swiggy Double-Paid GST)</td><td>Rs 10,000 to Rs 25,000 (Exl GST and Govt. Charges) depending on refund quantum. Reconciliation; RFD-01 filing; follow-through to refund grant.</td></tr>
<tr><td>Multi-Outlet Restaurant Chain Volume Discount</td><td>For QSR / casual-dine chains with 3+ open notices across outlets - tiered discount applied; single engagement letter; single point of accountability.</td></tr>
<tr><td>Free 30-Minute SCN Review</td><td>On initial intake - in-person, by phone, or video. Risk score, demand range and recommended path before engagement commitment.</td></tr>
<tr><td>4-City Hearing-Attendance Hubs (Delhi, Gurugram, Mumbai, Pune)</td><td>Local hearing attendance via Patron's 4 city offices; virtual hearing support for other locations; consistent statutory positioning across multiple commissionerates.</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Notice Restaurants consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20engage%20Patron%20for%20my%20restaurant%20GST%20notice." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Notice Cycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Day 0 - SCN Receipt</td><td>Form DRC-01 SCN, Form ASMT-10 scrutiny, Form DRC-01A pre-SCN intimation, or Section 70 summons received. Immediate WhatsApp upload to Patron CA pod.</td></tr>
<tr><td>Day 0 to Day 1 - Same-Day Intake</td><td>SCN copy reviewed; section, demand and hearing date confirmed; provisional engagement letter signed; CA assigned the same day.</td></tr>
<tr><td>Day 2 - 48-Hour Risk Score</td><td>6-month GSTR-1/3B/9 returns + books + ECO TCS certificates + declared tariff proof + ITC ledger reviewed; risk-scored memo delivered with recommended path (contest, partial, or DRC-03).</td></tr>
<tr><td>Day 3 to Day 5 - Strategy Lock</td><td>Call with restaurant owner / CFO; path agreed; final fee confirmed (Rs 15,000 to Rs 50,000); engagement letter executed.</td></tr>
<tr><td>Day 5 to Day 25 - Reply Drafting</td><td>Comprehensive reply with statutory citations (Notifications 11/2017, 13/2018, 20/2019, 17/2021 CT(R); Circulars 164/20/2021, 167/23/2021; Sections 9(5), 10, 17(5)(b), 73/74), case-law citations, evidence pack annexures; CA-signed; reviewed by senior partner.</td></tr>
<tr><td>Day 28 to Day 30 - Reply Filed via GST Portal</td><td>Filed within SCN reply window (30 days for DRC-01; 15 days for ASMT-10). Acknowledgment received.</td></tr>
<tr><td>Day 30 to Day 120 - Adjudication and Hearing</td><td>Commissionerate hearing scheduled 60 to 120 days from reply; in-person attendance at the relevant commissionerate (one of 4 Patron city hubs - Delhi, Gurugram, Mumbai, Pune - or virtual for other locations); oral and written submissions.</td></tr>
<tr><td>Within 7 Days of DRC-07 Order - Order Tracking</td><td>DRC-07 order tracked through portal; adverse / partial / favourable assessed; appeal viability evaluated.</td></tr>
<tr><td>Within 3 Months of DRC-07 Order - Section 107 Appeal (If Adverse)</td><td>APL-01 filed at the Appellate Authority with 10 percent pre-deposit (capped at Rs 25 crore); grounds of appeal drafted; hearing representation.</td></tr>
<tr><td>Within 3 Months of Appellate Order - GSTAT Escalation (If Adverse)</td><td>APL-05 filed at GST Appellate Tribunal with 20 percent additional pre-deposit (cumulative 30 percent capped at Rs 50 crore).</td></tr>
<tr><td>Section 73 / 74 Time Limits</td><td>Section 73 - 3 years from due date of annual return; Section 74 - 5 years. SCN must be issued within these windows for the relevant FY.</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Restaurant Sector Three Compounding Risks:</strong> First, the SCN reply window is typically 30 days from receipt - missing this window or replying defectively forecloses key technical defences and pushes the matter to ex-parte adjudication. Second, the DRC-03 voluntary payment benefit under Section 73(5) (NIL penalty) is available ONLY before SCN finalisation - once finalised, penalty floor rises to 10 percent within 30 days and 25 percent thereafter. Third, the Section 107 appeal window is 3 months from DRC-07 order (extendable by 1 month with sufficient cause) plus 10 percent pre-deposit at filing; missing forecloses appeal rights altogether.</p>

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
            <h2 class="section-title">Benefits of Patron Restaurant-Specialist CA Pod</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3>Restaurant-Specific Specialisation</h3>
        <p>5 vs 18 percent rate, Section 17(5)(b) ITC reversal, composition scheme, Section 9(5) ECO mechanics all handled by the same CA pod with sector-specific notice playbooks - not generalist GST CAs picking up restaurant work occasionally.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>Notification 17/2021 Section 9(5) Reconciliation</h3>
        <p>Identify double-paid GST on Zomato/Swiggy supplies and prepare Section 54 refund application; Circular 167/23/2021 framework applied; Table 3.1.1(ii) reporting cleaned up; Form 27EQ versus GSTR-1 reconciliation.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>4-City Hearing-Attendance Network</h3>
        <p>Delhi, Gurugram, Mumbai, Pune hearing-attendance hubs plus virtual hearing support for other locations - single CA pod handles multi-outlet chains with notices across cities; consistent statutory positioning.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <h3>DRC-03 Voluntary Payment Advisory at the Right Stage</h3>
        <p>NIL penalty under Section 73(5) before SCN; 15 percent under Section 74(5) before SCN; 10 percent under Section 73(8) / 25 percent under Section 74(8) within 30 days of SCN. Timing the DRC-03 right saves materially on penalty.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Section 107 Appellate Authority Representation</h3>
        <p>10 percent pre-deposit advisory (capped at Rs 25 crore); APL-01 drafting with restaurant-industry case law citations; appellate hearing representation; GSTAT escalation under Section 112 where required (20 percent additional pre-deposit; cumulative 30 percent capped at Rs 50 crore).</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>Notification 17/2021 Section 54 Refund Concurrent Preparation</h3>
        <p>Where the trigger for the SCN is double-paid GST on Zomato/Swiggy Section 9(5) supplies, Section 54 CGST refund application prepared concurrently with the SCN reply - operationally specific outcome (Rs 14-18 lakh refund recoveries documented).</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3>Downstream /GST-Returns Retainer Linkage</h3>
        <p>Single CA pod handles notice plus going-forward returns - the cleanest way to prevent recurrence. Multi-stream restaurant operations (stand-alone + hotel + Zomato + composition + retail) need ongoing Table 3.1.1 + Rule 42/43 reporting discipline.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <h3>Cross-Sell to Restaurant-Specific Services</h3>
        <p>/gst-audit (Section 35(5) restaurant audit), /gst-returns-for-restaurants-food-businesses (returns retainer), /statutory-audit, /payroll-services-for-hospitality - single point of accountability under Patron Accounting LLP.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof, Trust Signals and Outcome Proof</h2>
            <div class="content-text">
                
                <div style="background:var(--blue-lighter);padding:24px;border-radius:12px;margin-bottom:24px;">
    <p style="font-weight:700;color:var(--blue);font-size:18px;margin-bottom:8px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
</div>

<h3 style="margin-top:24px;">Client Testimonials</h3>
<blockquote style="border-left:3px solid var(--orange);padding-left:16px;font-style:italic;margin:16px 0;">
"Professionalism, attention to detail, and timely communication made the process smooth." - Subhendu Mishra (Restaurant client)
</blockquote>
<blockquote style="border-left:3px solid var(--orange);padding-left:16px;font-style:italic;margin:16px 0;">
"Patron handled our Section 73 SCN on Zomato Section 9(5) double-payment within the 30-day reply window. The Rs 14 lakh that was double-paid was refunded under Section 54 in 8 months and the SCN was dropped at hearing stage with zero demand." - Google Review (QSR chain owner, Pune)
</blockquote>

<h3 style="margin-top:24px;">Outcome Proof - Anonymised Case Study</h3>
<div class="highlight-box">
<p><strong>Mumbai-headquartered restaurant chain with 14 standalone outlets and 2 hotel F&amp;B units</strong> received 6 GST notices across FY 2024-25 - 3 on 5 vs 18 percent rate, 2 on Section 17(5)(b) ITC reversal, 1 on Section 9(5) reconciliation. Patron handled all 6 over a 9-month window.</p>
<p><strong>Outcomes:</strong> 2 SCNs dropped at hearing stage with NIL demand; 3 closed at DRC-03 voluntary payment for Rs 22 lakh tax plus interest (NIL penalty under Section 73(5)); 1 appealed under Section 107 - pending.</p>
<p><strong>Economics:</strong> Average per-notice fee Rs 28,000; cumulative penalty savings vs un-represented outcome estimated at Rs 18 lakh.</p>
</div>

<h3 style="margin-top:24px;">Restaurant Client Coverage</h3>
<p>Trusted by <strong>Hyundai, Asian Paints, Bridgestone</strong> and standalone fine-dine restaurants, multi-outlet QSR chains, casual-dine restaurant groups, premium coffee chains, cloud kitchen networks, banquet venues, bar-and-pub chains, hotel F&amp;B operators (3, 4 and 5-star), specialty cuisine chains and dark-kitchen aggregators across Delhi, Gurugram, Mumbai, Pune, Bengaluru, Hyderabad, Chennai and Kolkata. Notice-handling coverage spans Section 73, Section 74, Section 67 search, Section 70 summons, Section 107 appeal and GSTAT escalation.</p>

<h3 style="margin-top:24px;">4-Office City Trust Signal</h3>
<p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves restaurants across India - both in-person and remotely. Each city hub maintains jurisdictional commissionerate familiarity for local hearing attendance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Self-Reply vs Generalist CA vs Patron Restaurant-Specialist</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Self-Reply by Owner</th><th>Generalist CA</th><th>Patron Restaurant-Specialist CA</th></tr></thead>
                    <tbody>
                        <tr><td>5 vs 18 Percent Rate Defence</td><td>Often loses on declared tariff threshold</td><td>Generic reading of Notification 20/2019</td><td>Notification 11/2017 vs 20/2019 with tariff card history forensics</td></tr>
<tr><td>Section 17(5)(b) ITC Reversal</td><td>Often unaware of blocked credit reading</td><td>Reversal computed but bona-fide-use defence often missed</td><td>Same-category outward supply defence with case law</td></tr>
<tr><td>Section 9(5) ECO Mechanics</td><td>Often double-paid GST on Zomato/Swiggy</td><td>Circular 167/23/2021 reading inconsistent</td><td>Native; refund under Section 54 prepared concurrently</td></tr>
<tr><td>Composition Scheme Audit</td><td>Section 10 / 10(2)(d) interaction confused</td><td>Section 10 read but Section 52 / 9(5) interplay missed</td><td>Section 10(2)(d) plus Section 52 exclusion for 9(5) supplies applied</td></tr>
<tr><td>DRC-03 vs Contest Decision</td><td>Often misjudged - DRC-03 too late</td><td>Late DRC-03 (after SCN, higher penalty)</td><td>DRC-03 under Section 73(5) before SCN for NIL penalty</td></tr>
<tr><td>Section 107 Appeal Preparation</td><td>Self-filed APL-01 often defective</td><td>Standard grounds without restaurant case law</td><td>Restaurant-industry case law citations; pre-deposit advisory</td></tr>
<tr><td>Hearing Representation</td><td>Owner attends; technical points missed</td><td>CA attends but not restaurant-specialist</td><td>Restaurant-specialist CA; oral submissions on rate, ITC, ECO</td></tr>
<tr><td>Cost (Single Rs 25 Lakh Demand SCN)</td><td>Time and penalty exposure</td><td>Rs 50K to 1 lakh plus penalty exposure</td><td>Rs 35K plus minimised penalty exposure</td></tr>
<tr><td>Accountability</td><td>Owner</td><td>On the firm</td><td>Engagement letter with defined deliverables</td></tr>

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
            <h2 class="section-title">Related Patron Services - Restaurant Sector</h2>
            <div class="content-text">
                
                <p>Restaurant GST notice handling links to several adjacent compliance workflows - all delivered by the same CA and CS team for a single point of accountability:</p>
<ul>
    <li><strong><a href="/gst-notice">GST Notice (Parent Hub)</a>:</strong> Patron's national GST notice handling hub across all sectors.</li>
    <li><strong><a href="/gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants and Food Businesses</a>:</strong> Monthly GSTR-1, GSTR-3B and annual GSTR-9 / GSTR-9C filings with native Section 9(5) Table 3.1.1 handling and 5 vs 18 percent regime allocation - the cleanest way to prevent notice recurrence.</li>
    <li><strong><a href="/gst-returns">GST Returns</a>:</strong> Monthly GSTR-1, GSTR-3B and annual GSTR-9 across multi-state operations.</li>
    <li><strong><a href="/gst-audit">GST Audit</a>:</strong> Section 35(5) CGST audit for restaurants crossing the turnover threshold; reconciliation of payroll wages, F&amp;B ITC and Section 9(5) supplies.</li>
    <li><strong><a href="/gst-returns-for-e-commerce-operator">GST Returns for E-Commerce Operator</a>:</strong> Section 52 TCS and Section 9(5) compliance for restaurant aggregators, cloud kitchens supplying via own app and other ECO-format F&amp;B.</li>
    <li><strong><a href="/statutory-audit">Statutory Audit</a>:</strong> Companies Act audit covering restaurant operations, Section 9(5) ECO reconciliation, Section 17(5)(b) ITC and composition turnover.</li>
    <li><strong><a href="/payroll-services-for-hospitality">Payroll Services for Hospitality</a>:</strong> Restaurant and F&amp;B payroll with multi-shift, daily wage and CCPA service charge compliance - links to the F&amp;B GST regime.</li>
    <li><strong><a href="/itr-for-companies">ITR for Companies / Business</a>:</strong> Corporate / proprietorship / partnership ITR with restaurant business income reconciliation.</li>
</ul>

<h3 style="margin-top:24px;">Child City Pages</h3>
<p>This page is the national parent for forthcoming city-specific child pages with local commissionerate familiarity:</p>
<ul>
    <li><strong>/gst-notice-restaurants/delhi</strong> - Delhi GST officers, jurisdictional commissionerate, local case law</li>
    <li><strong>/gst-notice-restaurants/gurugram</strong> - Haryana GST, NCR-specific composition mechanics</li>
    <li><strong>/gst-notice-restaurants/mumbai</strong> - Maharashtra GST, Bombay High Court F&amp;B precedents</li>
    <li><strong>/gst-notice-restaurants/pune</strong> - Maharashtra GST, Pune commissionerate hearing logistics</li>
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
                
                <p>Restaurant GST notice handling is governed by the CGST Act 2017 and supporting Notifications and Circulars. Primary regulator: <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">Central Board of Indirect Taxes and Customs (CBIC)</a>. Policy body: <a href="https://gstcouncil.gov.in" target="_blank" rel="noopener">GST Council</a>. Statute source: <a href="https://www.indiacode.nic.in/handle/123456789/2129" target="_blank" rel="noopener">CGST Act 2017 on IndiaCode</a>. Filing portal: <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a>.</p>

<h3 style="margin-top:24px;">CGST Act 2017 - Core Restaurant Sections</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>Section 9(5) CGST Act 2017</td><td>Empowers government to notify services where ECO (Zomato, Swiggy, Magicpin) is liable to pay GST instead of actual supplier. Restaurant services notified effective 1 January 2022 per Notification 17/2021-CT(R)</td></tr>
        <tr><td>Section 10 CGST Act 2017</td><td>Composition scheme - turnover limit Rs 1.5 crore (Rs 75 lakh for special category states); 5 percent rate for restaurants under Section 10(1)(b); quarterly CMP-08; annual GSTR-4; no ITC</td></tr>
        <tr><td>Section 10(2)(d) CGST Act 2017</td><td>Composition denied if supplies through ECO where TCS applicable - BUT Section 9(5) supplies excluded from Section 52 TCS so composition preserved for restaurant services through ECO post-1.1.2022</td></tr>
        <tr><td>Section 17(5)(b) CGST Act 2017</td><td>Blocked credit on food and beverages, outdoor catering, beauty treatment, health services, cosmetic and plastic surgery - except where used for the same category of outward supply or compulsorily provided under any law</td></tr>
        <tr><td>Section 52 CGST Act 2017</td><td>TCS by e-commerce operators at 1 percent (0.5 percent CGST + 0.5 percent SGST or 1 percent IGST) on net value of taxable supplies other than Section 9(5) services; effective 1 October 2018</td></tr>
        <tr><td>Section 73 CGST Act 2017</td><td>Determination of tax not paid, short paid, erroneously refunded or ITC wrongly availed for reasons OTHER than fraud; SCN, adjudication and order within 3 years from due date of annual return; Form DRC-01</td></tr>
        <tr><td>Section 74 CGST Act 2017</td><td>Same for fraud, wilful misstatement or suppression; 5-year time limit; higher penalty (equal to tax); Form DRC-01</td></tr>
        <tr><td>Section 107 CGST Act 2017</td><td>First appeal to Appellate Authority within 3 months of DRC-07 order (extendable by 1 month); 10 percent pre-deposit (capped at Rs 25 crore); Form APL-01</td></tr>
        <tr><td>Section 122 CGST Act 2017</td><td>General penalty up to Rs 25,000 plus tax for various offences</td></tr>
        <tr><td>Section 122(1B) CGST Act 2017</td><td>Penalty for ECO non-compliance under Section 52 retrospectively effective 1 October 2023 per Finance (No.2) Act 2024 - relevant for cloud kitchens and restaurants with own-app ECO format</td></tr>
        <tr><td>Section 54 CGST Act 2017</td><td>Refund of tax including double-paid GST on Section 9(5) supplies (Zomato/Swiggy); 2-year time limit from relevant date; Form RFD-01</td></tr>
        <tr><td>Section 50 CGST Act 2017</td><td>18 percent per annum on delayed tax; 24 percent per annum on ITC reversal</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">Restaurant-Specific Notifications and Circulars</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>Notification 11/2017-CT(R) dated 28 June 2017 (as amended by 13/2018 dated 26 July 2018)</td><td>5 percent GST without Input Tax Credit for stand-alone restaurants under HSN Heading 9963</td></tr>
        <tr><td>Notification 20/2019-CT(R)</td><td>18 percent GST with ITC for restaurants in hotels with declared tariff Rs 7,500+ per unit per day ("specified premises") - Rs 7,500 tested against HIGHEST declared tariff in the hotel</td></tr>
        <tr><td>Notification 17/2021-CT(R) dated 18 November 2021</td><td>Amended Notification 17/2017 to insert Clause (iv) under Section 9(5); effective 1 January 2022; ECO liable to pay 5 percent GST on restaurant services other than at specified premises</td></tr>
        <tr><td>Circular 167/23/2021-GST dated 17 December 2021</td><td>Clarifications on restaurant services through ECO: ECO pays via electronic cash ledger only (no ITC utilisation); no TCS by ECO under Section 52 on Section 9(5) supplies; ECO issues invoice; Table 3.1.1(ii) GSTR-3B reporting framework</td></tr>
        <tr><td>Circular 164/20/2021-GST dated 6 October 2021</td><td>Clarified that restaurant service includes services by restaurants, cafes and similar eating facilities including takeaway, room service and door delivery</td></tr>
        <tr><td>Finance (No.2) Act 2024 - Section 122(1B)</td><td>Retrospective effective 1 October 2023 - ECO non-compliance penalty under Section 52; relevant for cloud kitchens with own-app ECO format</td></tr>
    </tbody>
</table>
</div>

<h3 style="margin-top:24px;">Forms and Procedural References</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Form</th><th>Purpose</th></tr></thead>
    <tbody>
        <tr><td>Form GST DRC-01</td><td>Show Cause Notice under Section 73 / 74 - replied within 30 days</td></tr>
        <tr><td>Form GST DRC-01A</td><td>Pre-SCN intimation - typically 7 to 15 days response window</td></tr>
        <tr><td>Form GST ASMT-10</td><td>Scrutiny notice - typically 15 days response window</td></tr>
        <tr><td>Form GST DRC-03</td><td>Voluntary payment of tax + Section 50 interest + applicable penalty (NIL / 15 / 10 / 25 percent depending on stage)</td></tr>
        <tr><td>Form GST DRC-07</td><td>Order issued by adjudicating authority post hearing</td></tr>
        <tr><td>Form GST APL-01</td><td>Section 107 first appeal to Appellate Authority within 3 months; 10 percent pre-deposit (capped at Rs 25 crore)</td></tr>
        <tr><td>Form GST RFD-01</td><td>Section 54 refund application for double-paid GST on Section 9(5) supplies; 2-year time limit</td></tr>
        <tr><td>GSTR-3B Table 3.1.1</td><td>Sub-table (i) for ECO supplies (ECO pays); Sub-table (ii) for restaurants (informational - no tax payment)</td></tr>
        <tr><td>Form 27EQ</td><td>ECO TCS certificate under Section 52 - reconciled to GSTR-1 outward supplies and bank receipts</td></tr>
        <tr><td>Form CMP-08 / GSTR-4</td><td>Composition quarterly and annual return filings under Section 10</td></tr>
    </tbody>
</table>
</div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Restaurant GST Notices</h2>
                    <p class="faq-expanded__lead">Practical Q&A on 5 vs 18 percent rate determination, Section 17(5)(b) blocked credit, Section 9(5) Zomato/Swiggy mechanics, composition scheme eligibility, and Rs 7,500 declared tariff threshold.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Restaurant GST Notices'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between 5 percent and 18 percent GST on restaurants?</h3>
                        <div class="faq-expanded__a"><p>Stand-alone restaurants attract 5 percent GST without Input Tax Credit under Notification 11/2017-CT(R) as amended by 13/2018 (HSN Heading 9963). Restaurants located in hotels with declared tariff of any unit of accommodation Rs 7,500 or more per night attract 18 percent GST with ITC under Notification 20/2019. The Rs 7,500 threshold is tested against the HIGHEST declared tariff in the hotel - not the average. A hotel with one suite at Rs 9,000 means its in-house restaurant falls under the 18-percent-with-ITC regime even if all other rooms are below Rs 7,500.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can restaurants claim ITC under the 5 percent regime?</h3>
                        <div class="faq-expanded__a"><p>No. Notification 11/2017-CT(R) as amended by 13/2018 grants the 5 percent rate to stand-alone restaurants on the condition that no Input Tax Credit is claimed. Additionally, Section 17(5)(b) of the CGST Act 2017 blocks credit on food and beverages, outdoor catering and similar inputs except where used for the same category of outward supply. Restaurants under the 18 percent regime in hotels with declared tariff Rs 7,500+ can claim ITC. Claiming ITC under the 5 percent regime is the most common trigger for a Section 73 SCN in the restaurant sector.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does Section 9(5) apply to Zomato and Swiggy orders?</h3>
                        <div class="faq-expanded__a"><p>Per Notification 17/2021-CT(R) dated 18 November 2021, effective 1 January 2022, restaurant services other than at specified premises supplied through e-commerce operators (Zomato, Swiggy, Magicpin and similar) fall under Section 9(5) of the CGST Act. The ECO pays 5 percent GST in cash via electronic cash ledger; no ITC utilisation. The restaurant reports such supplies in Table 3.1.1(ii) of GSTR-3B (informational, no tax payment). The ECO does not collect TCS under Section 52 on these supplies. Restaurants located at specified premises (hotels with declared tariff Rs 7,500+) are EXCLUDED from Section 9(5) and continue to pay their own 18 percent GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Composition scheme mein restaurant Zomato pe sell kar sakta hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Haan, lekin sirf Section 9(5) supplies ke liye. Section 10(2)(d) CGST Act ke under composition dealer un ECO platforms pe supply nahi kar sakta jahan Section 52 TCS applicable hota hai. Lekin Section 9(5) supplies (jaise restaurant services post 1.1.2022) Section 52 explanation ke under TCS se excluded hain - matlab Zomato/Swiggy in supplies pe TCS nahi karte, isliye composition dealer Section 9(5) ke under ECO pe supply kar sakta hai aur composition mein bana rah sakta hai. Lekin agar restaurant ECO ke through OTHER taxable supplies bhi karta hai (packaging, delivery surcharge) jahan TCS lagta hai, toh composition lose ho sakta hai. Patron yeh interplay onboarding pe check karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if a restaurant gets a Section 73 notice on ITC reversal?</h3>
                        <div class="faq-expanded__a"><p>A Section 73 SCN (Form DRC-01) for ITC reversal under Section 17(5)(b) requires a reply within 30 days. The reply must demonstrate either (a) the ITC was for the same category of outward supply (e.g., F&B input used for taxable restaurant service in the 18 percent regime) and therefore not blocked, or (b) acknowledge the technical default and file DRC-03 voluntary payment with NIL penalty under Section 73(5) if before SCN finalisation or 10 percent under Section 73(8) within 30 days of SCN. Section 50 interest at 18 percent or 24 percent per annum applies. Patron handles the technical defence and DRC-03 computation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Composition scheme restaurant turnover limit kya hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Section 10 CGST Act ke under composition scheme mein restaurant ka turnover limit Rs 1.5 crore per FY hai (special category states - Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, Tripura, Uttarakhand, Himachal Pradesh - mein Rs 75 lakh). Rate 5 percent (2.5 percent CGST + 2.5 percent SGST) without ITC. Quarterly CMP-08 aur annual GSTR-4 file karna padta hai. Agar turnover Rs 1.5 crore cross kar gaya mid-year, toh composition immediately lose ho jata hai aur regular 5 percent regime under Notification 11/2017 (without composition's procedural benefits) apply hota hai. Patron annual turnover quarterly monitor karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is the Rs 7,500 declared tariff threshold determined?</h3>
                        <div class="faq-expanded__a"><p>The Rs 7,500 declared tariff threshold under Notification 20/2019-CT(R) is tested against the highest declared tariff of ANY unit of accommodation in the hotel - not the average rate or the transactional rate. The declared tariff is the publicly published room rate (printed brochure, hotel website, OTA listings); not the negotiated or discounted rate. A hotel that publishes one Presidential Suite at Rs 12,000 per night - even if mostly sold at Rs 8,000 - has all its in-house restaurants in the 18-percent-with-ITC regime because at least one unit has declared tariff Rs 7,500+. Patron handles the declared tariff card forensic in rate dispute notices.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Stand-alone restaurant GST rate?</strong> 5 percent without ITC (Notification 11/2017 as amended by 13/2018, HSN 9963).</p>
<p><strong>Hotel restaurant GST rate (declared tariff Rs 7,500+)?</strong> 18 percent with ITC (Notification 20/2019).</p>
<p><strong>Who pays GST on Zomato / Swiggy orders post 1.1.2022?</strong> ECO (Zomato / Swiggy / Magicpin) pays 5 percent in cash under Section 9(5) per Notification 17/2021.</p>
<p><strong>Section 73 SCN reply window?</strong> 30 days (extendable per officer's discretion).</p>
<p><strong>Section 73 voluntary payment before SCN - penalty?</strong> NIL under Section 73(5); 15 percent under Section 74(5).</p>
<p><strong>Section 107 appeal pre-deposit?</strong> 10 percent of disputed tax (capped at Rs 25 crore).</p>
<p><strong>Composition scheme restaurant turnover limit?</strong> Rs 1.5 crore (Rs 75 lakh for special category states); 5 percent rate without ITC under Section 10.</p>
<p><strong>Restaurant declared tariff Rs 7,500 threshold tested against?</strong> Highest declared tariff in the hotel, not average; published rate, not transactional.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency - Three Compounding Risks</h2>
            <div class="content-text">
                
                <p>Three compounding risks make immediate action critical on any restaurant GST notice.</p>
<p><strong>First, the SCN reply window is typically 30 days from receipt</strong> - missing this window or replying defectively forecloses key technical defences and pushes the matter directly to ex-parte adjudication where the department's allegations stand.</p>
<p><strong>Second, the DRC-03 voluntary payment benefit under Section 73(5) (NIL penalty) is available ONLY before SCN finalisation</strong> - once the SCN is finalised, the penalty floor rises to 10 percent under Section 73(8) within 30 days of SCN, and 25 percent thereafter.</p>
<p><strong>Third, the Section 107 appeal window is 3 months from the DRC-07 order</strong> (extendable by 1 month with sufficient cause) plus 10 percent pre-deposit at filing; missing this window forecloses appeal rights altogether.</p>
<p><strong>Action now:</strong> forward the SCN copy to Patron Accounting on WhatsApp <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20engage%20Patron%20for%20my%20restaurant%20GST%20notice." target="_blank">WhatsApp</a>. Free 30-minute notice review - we will give you a risk score, demand range and recommended path before you commit to engagement.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron Restaurant-Specialist CA Pod for GST Notice Handling</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Restaurant GST notices in 2026 cluster around four scenarios that each require restaurant-industry specialist knowledge: the <strong>5 vs 18 percent rate dispute</strong> under Notification 11/2017 versus 20/2019 anchored on the Rs 7,500 declared tariff threshold for specified premises; the <strong>Section 17(5)(b) blocked credit reversal</strong> on F&amp;B and outdoor catering inputs; the <strong>Section 10 composition scheme audit</strong> interplay with Section 52 TCS and Section 9(5) ECO exclusion; and the <strong>Section 9(5) ECO mechanics</strong> for Zomato, Swiggy and similar aggregators effective 1 January 2022 per Notification 17/2021-CT(R) with the Table 3.1.1 GSTR-3B reporting framework per Circular 167/23/2021. A generic CA reply that does not engage with these specific notifications, circulars and section reads typically loses ground at hearing stage.</p>
<p>Patron Accounting LLP - a CA and CS practice with 15+ years of regulatory experience and offices in Pune, Mumbai, Delhi and Gurugram - is a specialist national service provider for restaurant GST notice handling. The engagement spans SCN review and risk scoring, reply drafting with statutory and case-law citations, hearing representation, DRC-03 voluntary payment computation, Section 107 appeal preparation and downstream linkage to /gst-returns and /gst-returns-for-restaurants-food-businesses to prevent recurrence. Pricing Rs 15,000 to Rs 50,000 per notice. National coverage with 4 city pages (Delhi, Gurugram, Mumbai, Pune) for local hearing attendance and jurisdictional commissionerate familiarity.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20engage%20Patron%20for%20my%20restaurant%20GST%20notice." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=GST%20Notice%20Restaurants&body=Hello%20Patron%2C%0A%0AI%20need%20restaurant%20GST%20notice%20handling.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- RESTAURANT SECTOR CHILD CITY PAGES -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Restaurant GST Notice - Related Patron Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">This is the national parent page. Related restaurant-sector services and forthcoming child city pages below.</p>
         
            <div class="pa-city-block">
    <div class="pa-block-title">Restaurant Sector Coverage</div>
    <div class="pa-block-sub">National parent + adjacent restaurant services</div>
    <div class="pa-cross-grid">
        <a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice (Parent)</div><div class="pa-card-sub">National hub - all sectors</div></div></a>
        <div class="pa-cross-card" style="opacity:0.6;cursor:default;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Restaurants (You're Here)</div><div class="pa-card-sub">National sector specialist</div></div></div>
        <a href="/gst-returns-for-restaurants-food-businesses" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns - Restaurants</div><div class="pa-card-sub">Monthly returns + Table 3.1.1</div></div></a>
        <a href="/gst-returns-for-e-commerce-operator" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns - ECO</div><div class="pa-card-sub">Section 52 + 9(5) aggregator side</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">Section 35(5) restaurant audit</div></div></a>
        <a href="/payroll-services-for-hospitality" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll - Hospitality</div><div class="pa-card-sub">F&amp;B payroll + service charge</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content refreshed quarterly (Tier 1) or whenever GST Council amends Section 9(5), 10, 17(5)(b), 52, 73, 74, 107 or 122 procedure or pre-deposit caps, CBIC issues new circulars affecting restaurant rates (Notifications 11/2017, 13/2018, 20/2019, 17/2021), Circular 164/20/2021 or 167/23/2021 amendments, GST Council changes the Rs 7,500 declared tariff threshold or 5/18 percent rate structure, AAR/AAAR/HC/SC delivers landmark restaurant GST jurisprudence, or Finance Act amends Section 122(1B) ECO penalty mechanics.</p>
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
    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>


<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection