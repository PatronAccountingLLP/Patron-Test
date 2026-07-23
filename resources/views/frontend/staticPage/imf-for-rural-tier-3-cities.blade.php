
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
    <title>IMF Tier 2-3 Cities: Rural India Insurance</title>
    <meta name="description" content="IMF setup for Tier 2-3 cities and rural India - single district Rs 5L net worth, B30 incentivisation, PMSBY PMJJBY. From Rs 40,000.">
    <link rel="canonical" href="/imf-for-rural-tier-3-cities">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IMF Tier 2-3 Cities 2026: Rural India Insurance | Patron">
    <meta property="og:description" content="IMF setup for Tier 2-3 cities and rural India - single district Rs 5L net worth, B30 incentivisation, PMSBY PMJJBY. From Rs 40,000.">
    <meta property="og:url" content="/imf-for-rural-tier-3-cities">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/imf-for-rural-tier-3-cities-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IMF Tier 2-3 Cities 2026: Rural India Insurance | Patron">
    <meta name="twitter:description" content="IMF setup for Tier 2-3 cities and rural India - single district Rs 5L net worth, B30 incentivisation, PMSBY PMJJBY. From Rs 40,000.">
    <meta name="twitter:image" content="/images/imf-for-rural-tier-3-cities-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/imf-for-rural-tier-3-cities/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Insurance Marketing Firm Registration", "item": "/insurance-marketing-firm-registration" },
        { "@type": "ListItem", "position": 3, "name": "IMF for Rural and Tier 2-3 Cities", "item": "/imf-for-rural-tier-3-cities" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/imf-for-rural-tier-3-cities/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can I set up IMF in Tier 3 city?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Tier 3 cities and rural districts are particularly suited for IMF setup. Three structural advantages - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh net worth versus Rs 10 lakh multi-district; (2) B30 (Beyond Top 30 cities) incentivisation framework provides higher commission rates from insurers seeking to meet IRDAI Rural and Social Sector Obligations; (3) Lower operating costs - office rent typically 30-60 percent below metro, ISP wages 30-50 percent lower. Patron's pan-India remote engagement model handles complete setup without physical proximity. Tier 2-3 city package Rs 40,000 to Rs 1,00,000 across 3 tiers."
          }
        },
        {
          "@type": "Question",
          "name": "What is single district IMF registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Single-District IMF is a registration option under Regulation 6 IMF Regulations 2015 where the IMF operates in ONE district of ONE state with Rs 5 lakh net worth requirement (versus Rs 10 lakh for multi-district / multi-state). Area of operation is declared in Form A IRDAI application. Single-district IMF maintains identical insurer tie-up framework (up to 2 life + 2 general + 2 health), same Principal Officer and ISP requirements, same compliance obligations - the difference is geographic scope plus capital requirement. Most Tier 2-3 city aspirants start with single-district and upgrade to multi-district later as business scales."
          }
        },
        {
          "@type": "Question",
          "name": "What is the net worth for rural IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 5 lakh paid-up capital for single-district IMF (operating in one district of one state) under Regulation 6 IMF Regulations 2015; Rs 10 lakh paid-up capital for multi-district / multi-state IMF (broader area of operation). CA Net Worth Certificate confirms compliance based on entity balance sheet within 3 months of FY end. Rural and Tier 2-3 city aspirants typically use single-district route for initial setup given lower capital barrier. Upgrade to multi-district through additional Rs 5 lakh capital infusion and IRDAI amendment application is straightforward when business scales."
          }
        },
        {
          "@type": "Question",
          "name": "Does Patron handle IMF setup remotely?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - complete pan-India remote engagement model. Components include - video consultations (Zoom, Microsoft Teams, Google Meet, WhatsApp Video); phone calls for clients preferring non-video; WhatsApp coordination for real-time messaging; email for formal documentation; courier-based document collection from any client location; Digital Signature Certificate delivery to any Indian address; Aadhaar e-KYC and OTP-based verification; online banking setup coordination; digital filings with MCA SPICe+, IRDAI portal, GST, Income Tax. Physical visit to Patron offices in Pune, Mumbai, Delhi or Gurugram is optional, not mandatory."
          }
        },
        {
          "@type": "Question",
          "name": "What is B30 incentivisation for insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Beyond Top 30 cities (B30) framework - IRDAI Rural and Social Sector Obligations mandate insurers achieve specific percentages of business from rural and economically vulnerable segments. To meet these obligations, insurers offer enhanced commission structures to intermediaries operating in B30 geographies. Tier 2-3 IMFs benefit through higher first-year commission rates (0.5-2.0 percent commission advantage across product lines), additional renewal commission accumulation, priority insurer support and faster tie-up agreement onboarding. B30 commission advantage compounds across portfolio over 5-10 years."
          }
        },
        {
          "@type": "Question",
          "name": "Can IMF distribute PMSBY and PMJJBY?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes through tie-up insurers participating in government scheme distribution. PMSBY (Pradhan Mantri Suraksha Bima Yojana - Rs 20 per year accidental cover Rs 2 lakh, ages 18-70) and PMJJBY (Pradhan Mantri Jeevan Jyoti Bima Yojana - Rs 436 per year life cover Rs 2 lakh, ages 18-50) are distributed primarily through banks but IMFs can facilitate customer awareness and enrolment through tie-up insurer relationships. Atal Pension Yojana (APY) distribution through FSE setup. Government scheme distribution serves as customer acquisition door-opener for Tier 2-3 IMFs."
          }
        },
        {
          "@type": "Question",
          "name": "Best Tier 2-3 cities for IMF business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common Tier 2 cities for IMF setup - Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Vijayawada, Patna, Ranchi, Bhopal, Visakhapatnam, Surat, Vadodara. Common Tier 3 districts - Nashik, Kolhapur, Solapur (Maharashtra); Hubli, Belgaum, Mangalore (Karnataka); Trichy, Salem, Tirunelveli (Tamil Nadu); Guntur, Tirupati, Rajahmundry (Andhra Pradesh); Gwalior, Ujjain, Jabalpur (MP); Agra, Varanasi, Kanpur (UP); Kota, Udaipur, Jodhpur (Rajasthan); and hundreds of district headquarters across India. Best city depends on founder's network and customer base."
          }
        },
        {
          "@type": "Question",
          "name": "Lower cost of IMF setup in small cities?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tier 2-3 city operating cost structure materially lower than metro - office rent typically Rs 15,000-30,000 per month versus Rs 50,000-1,50,000 metro CBD; ISP and operational staff wages 30-50 percent lower; commercial real estate broadly affordable for owned-premises model. Patron's Tier 2-3 city fee structure reflects this - Rs 40,000 to Rs 1,00,000 across 3 tiers (lower than metro packages Rs 50,000-1,50,000). Statutory pass-through fees (IRDAI Rs 15,000 plus MCA stamp duty) are identical regardless of city tier. Break-even threshold lower - profitability achievable at 30-40 policies per month vs metro IMF needing 80-100 policies."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/imf-for-rural-tier-3-cities/#service",
      "name": "IMF for Rural and Tier 2-3 Cities - Bharat Engagement",
      "description": "Insurance Marketing Firm setup engagement specifically designed for aspirants in Tier 2-3 cities (Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Vijayawada, Patna, Ranchi, Bhopal, Visakhapatnam, Surat, Vadodara) and rural districts across India. Three structural advantages - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh paid-up capital versus Rs 10 lakh multi-district; (2) Beyond Top 30 cities (B30) incentivisation framework provides higher commission rates from insurers seeking to meet IRDAI Rural and Social Sector Obligations - 0.5-2.0 percent commission advantage compounds across portfolio; (3) Operating cost economics materially favourable with office rent 30-60 percent below metro plus ISP wages 30-50 percent lower. Coverage includes Pvt Ltd or LLP incorporation with IMF-tailored MoA Object Clause aligned with Regulation 3 IMF Regulations 2015, Principal Officer 50-hour IRDAI certification under Regulation 4, Schedule II Fit and Proper documentation, Insurance Sales Person onboarding from local talent (25-hour sectoral training under Regulation 12), insurer outreach calibrated to B30 commission advantage, government micro-insurance scheme distribution setup (PMSBY at Rs 20 per year accidental cover Rs 2 lakh, PMJJBY at Rs 436 per year life cover Rs 2 lakh, APY pension scheme, PMFBY crop insurance, Ayushman Bharat / PM-JAY health), FSE setup for pension and APY distribution under PFRDA framework, MSME Udyam registration if eligible, and Year 1 IMF compliance retainer (Tier 3). Patron's pan-India remote engagement model handles complete setup without physical proximity requirement through video consultations, courier-based document collection, DSC delivery anywhere in India, and digital MCA / IRDAI / GST filings.",
      "serviceType": "Tier 2-3 City and Rural IMF Setup with Single-District and Multi-District Routes",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Insurance Regulatory and Development Authority of India", "sameAs": "https://en.wikipedia.org/wiki/Insurance_Regulatory_and_Development_Authority" },
        { "@type": "Thing", "name": "Pradhan Mantri Suraksha Bima Yojana", "sameAs": "https://en.wikipedia.org/wiki/Pradhan_Mantri_Suraksha_Bima_Yojana" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Tier 2-3 City and Rural IMF Engagement Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - Single-District Tier 2-3 City IMF (Rs 5 lakh net worth, 1-2 insurer tie-ups, pan-India remote)", "price": "40000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-rural-tier-3-cities" },
          { "@type": "Offer", "name": "Tier 2 - Multi-District Tier 2-3 Expansion (Rs 10 lakh net worth, 3 ISPs, 4 insurer tie-ups, government scheme distribution)", "price": "55000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-rural-tier-3-cities" },
          { "@type": "Offer", "name": "Tier 3 - Comprehensive Tier 2-3 City with Year 1 Compliance Retainer (5 ISPs, full insurer mix, B30 commission optimisation)", "price": "75000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/imf-for-rural-tier-3-cities" }
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
                        IMF for Rural and Tier 2-3 Cities
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Single-District IMF:</span> Rs 5 lakh net worth requirement under Regulation 6 IMF Regulations 2015 versus Rs 10 lakh multi-district route. Capital barrier reduced by 50 percent - particularly relevant for Tier 2-3 city aspirants.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>B30 Incentivisation:</span> Beyond Top 30 cities framework - insurers offer higher commission rates (0.5-2.0 percent advantage) to intermediaries operating in B30 to meet IRDAI Rural and Social Sector Obligations.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Scheme Distribution:</span> PMSBY (Rs 20 per year), PMJJBY (Rs 436 per year), APY pension, PMFBY crop insurance, Ayushman Bharat - massive distribution opportunity through tie-up insurers and FSE framework.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Pan-India Remote:</span> Complete IMF setup without physical proximity. Video consultations, courier-based documents, DSC delivery anywhere in India. Tier 2-3 city package Rs 40,000 to Rs 1,00,000.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Rural%20and%20Tier%202-3%20Cities&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Patron's%20Tier%202-3%20city%20IMF%20engagement%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20setting%20up%20IMF%20in%20a%20Tier%202-3%20city%20and%20want%20Patron's%20remote%20engagement." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - IMF for Rural and Tier 2-3 Cities'/>
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
                                                                <option value="imf-for-rural-tier-3-cities" selected>IMF for Rural and Tier 2-3 Cities</option>
                                <option value="insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</option>
                                <option value="imf-incorporation-services">IMF Incorporation Services</option>
                                <option value="imf-irdai-registration-process">IRDAI IMF Registration Process</option>
                                <option value="ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</option>
                                <option value="imf-compliance-retainer-services">IMF Compliance Retainer</option>
                                <option value="imf-for-bank-employees-retirees">IMF for Bank Employees and Retirees</option>
                                <option value="imf-for-insurance-agents">IMF for Insurance Agents</option>
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

<!-- TESTIMONIALS (self-contained auto-scroll carousel, vanilla JS, no Slick) -->
<section class="imf-testi-sec">
    <style>
        .imf-testi-sec { padding: 24px 32px 8px; background: var(--white,#fff); overflow: hidden; }
        .imf-testi-sec .imf-testi-inner { max-width: 1320px; margin: 0 auto; }
        .imf-testi-sec .imf-testi-head { text-align: center; margin-bottom: 20px; }
        .imf-testi-sec .imf-testi-head h2 { font-size: clamp(26px,3.5vw,34px); font-weight: 800; color: var(--blue,#152238); margin: 0 0 8px; }
        .imf-testi-sec .imf-testi-head p { font-size: 15px; color: var(--text-muted,#6B7280); margin: 0; }
        .imf-testi-viewport { overflow: hidden; }
        .imf-testi-track { display: flex; gap: 20px; align-items: stretch; }
        .imf-testi-track > div { flex: 0 0 calc((100% - 60px) / 4); min-width: 0; }
        @media (max-width:1024px){ .imf-testi-track > div { flex: 0 0 calc((100% - 20px) / 2); } }
        @media (max-width:600px){ .imf-testi-track > div { flex: 0 0 100%; } }
        .imf-testi-sec .testi-video-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); overflow: hidden; height: 340px; display: flex; flex-direction: column; transition: all .25s ease; }
        .imf-testi-sec .testi-video-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-video-area { position: relative; height: 230px; overflow: hidden; cursor: pointer; flex-shrink: 0; }
        .imf-testi-sec .testi-video-area video { width: 100%; height: 100%; object-fit: cover; display: block; }
        .imf-testi-sec .testi-play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,.25); transition: opacity .3s; pointer-events: none; }
        .imf-testi-sec .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .imf-testi-sec .testi-play-btn { width: 56px; height: 56px; background: rgba(232,113,44,.85); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,.3); }
        .imf-testi-sec .testi-play-btn svg { width: 22px; height: 22px; color: #fff; margin-left: 3px; }
        .imf-testi-sec .testi-star-badge { position: absolute; bottom: 12px; left: 12px; display: flex; gap: 2px; }
        .imf-testi-sec .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-quote-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); padding: 24px; height: 340px; display: flex; flex-direction: column; justify-content: space-between; transition: all .25s ease; }
        .imf-testi-sec .testi-quote-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-quote-icon { color: var(--orange,#E8712C); opacity: .25; margin-bottom: 8px; }
        .imf-testi-sec .testi-quote-icon svg { width: 24px; height: 24px; }
        .imf-testi-sec .testi-quote-text { font-size: 14px; line-height: 1.65; color: var(--text-secondary,#374151); flex: 1; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden; margin: 0; }
        .imf-testi-sec .testi-footer { display: flex; flex-direction: column; gap: 8px; padding-top: 16px; border-top: 1px solid var(--gray-100,#F3F4F6); }
        .imf-testi-sec .testi-author { display: flex; align-items: center; gap: 10px; }
        .imf-testi-sec .testi-avatar { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: #fff; flex-shrink: 0; overflow: hidden; background: var(--orange,#E8712C); }
        .imf-testi-sec .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .imf-testi-sec .testi-avatar.blue { background: var(--blue,#152238); }
        .imf-testi-sec .testi-avatar.teal { background: #0D9488; }
        .imf-testi-sec .testi-avatar.purple { background: #7C3AED; }
        .imf-testi-sec .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary,#111827); line-height: 1.2; }
        .imf-testi-sec .testi-role { font-size: 12px; color: var(--text-muted,#6B7280); }
        .imf-testi-sec .testi-rating-row { display: flex; align-items: center; justify-content: space-between; }
        .imf-testi-sec .testi-stars { display: flex; gap: 1px; }
        .imf-testi-sec .testi-stars svg { width: 12px; height: 12px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-google-badge { width: 22px; height: 22px; }
        .imf-testi-sec .testi-google-badge img { width: 100%; height: 100%; }
        .imf-testi-cta { margin-top: 20px; background: var(--blue,#152238); border-radius: 12px; padding: 22px 26px; display: flex; align-items: center; justify-content: space-between; gap: 18px; flex-wrap: wrap; }
        .imf-testi-cta h3 { color: #fff; margin: 0 0 6px; font-size: 20px; font-weight: 800; }
        .imf-testi-cta p { color: rgba(255,255,255,.85); margin: 0; font-size: 14px; max-width: 760px; }
        .imf-testi-cta a { background: var(--orange,#E8712C); color: #fff; padding: 12px 26px; border-radius: 50px; font-weight: 700; text-decoration: none; white-space: nowrap; flex-shrink: 0; }
        @media (max-width:768px){ .imf-testi-sec { padding: 16px 16px 8px; } .imf-testi-cta { flex-direction: column; text-align: center; } }
    </style>
    <div class="imf-testi-inner">
        <div class="imf-testi-head">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, and stay in control.</p>
        </div>
        <div class="imf-testi-viewport">
            <div class="imf-testi-track" id="imfTestiTrack">
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"><source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                            <div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Very proficient and professional staff. Do a fantastic job with instant response. Strongly recommended for all accounting needs, especially for startups and growing businesses.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar ">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"><source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                            <div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional, giving prompt responses. Highly recommend them for tax and compliance work.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">From the very beginning their approach has been highly professional, prompt and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I called Patron to file ITR for my family members. I worked with Shubham and Amin Jain and it was a smooth process. They understand the basics very well and respond promptly.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imf-testi-cta">
            <div>
                <h3>Join 10,000+ Satisfied Businesses</h3>
                <p>From SEBI RIAs to mutual fund distributors and corporate agents, businesses across India trust Patron for compliant IMF setup and IRDAI registration.</p>
            </div>
            <a href="tel:+919459456700">Talk to an Expert &rarr;</a>
        </div>
    </div>
</section>
<script>
function toggleTestiVideo(area){
    var v=area.querySelector('video'); if(!v) return;
    if(v.paused){ document.querySelectorAll('.testi-video-area video').forEach(function(x){ x.pause(); x.closest('.testi-video-area').classList.remove('playing'); }); v.play(); area.classList.add('playing'); }
    else { v.pause(); area.classList.remove('playing'); }
}
(function(){
    var track=document.getElementById('imfTestiTrack'); if(!track) return;
    var vp=track.parentElement, paused=false, animating=false;
    vp.addEventListener('mouseenter',function(){ paused=true; });
    vp.addEventListener('mouseleave',function(){ paused=false; });
    function step(){
        if(paused||animating||track.children.length<2) return;
        if(track.querySelector('.testi-video-area.playing')) return;
        var first=track.children[0];
        var w=first.getBoundingClientRect().width+20;
        animating=true;
        track.style.transition='transform .6s ease';
        track.style.transform='translateX(-'+w+'px)';
        window.setTimeout(function(){
            track.style.transition='none';
            track.appendChild(first);
            track.style.transform='translateX(0)';
            animating=false;
        },640);
    }
    window.setInterval(step,3000);
})();
</script>

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
                        <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth',block:'start'});">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">4 Advantages</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Founder Profiles</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Bharat Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">Setup Process</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">Fees and Tiers</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">120-Day Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Single vs Multi-District</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>















<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - IMF Setup in Tier 2-3 Cities and Rural India</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IMF for Rural and Tier 2-3 Cities Services at a Glance</strong></p>
                    <p>India's insurance penetration in rural geographies remains substantially lower than urban - approximately 30-40 percent rural penetration versus 60-70 percent urban. Tier 2-3 cities (Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar and similar district headquarters) offer specific structural advantages for IMF setup - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh net worth versus Rs 10 lakh for multi-district operation, materially lowering capital barrier; (2) B30 (Beyond Top 30 cities) incentivisation framework provides higher commission rates from insurers seeking to meet IRDAI Rural and Social Sector Obligations; (3) Lower operating costs - office rent typically 30-60 percent below metro, ISP wages 30-50 percent lower; (4) Government micro-insurance schemes - PMSBY, PMJJBY, APY, PMFBY, Ayushman Bharat - create massive distribution demand. Patron's pan-India remote engagement model handles complete IMF setup without physical proximity requirement. Patron's Tier 2-3 city package Rs 40,000 to Rs 1,00,000 across 3 tiers reflects cost structure efficiency.</p>
                </div>
                <p>India's insurance distribution opportunity is overwhelmingly in non-metro geographies. While metro markets (Tier 1 cities) have approached saturation in life and motor insurance penetration, the Tier 2-3 cities and rural districts remain materially under-served. The Indian government's push through micro-insurance schemes (PMSBY, PMJJBY, APY, PMFBY, Ayushman Bharat) has accelerated rural insurance demand by making coverage affordable. Tier 2-3 city aspirants setting up Insurance Marketing Firms benefit from three structural advantages over metro IMFs - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh net worth versus Rs 10 lakh multi-district route; (2) B30 incentivisation framework where insurers offer enhanced commission rates for non-metro distribution; (3) Operating cost economics materially favourable - office rent 30-60 percent below metro, ISP wages 30-50 percent lower.</p>
                <p>Patron's pan-India delivery model removes the historical friction of metro-centric professional service availability - video-based consultations, courier-based document collection, digital filings with MCA, IRDAI and GST, Digital Signature Certificate delivery to any Indian address. Common Tier 3 IMF setup locations - Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Vijayawada, Patna, Ranchi, Bhopal, Visakhapatnam plus hundreds of district headquarters across India. Verify framework through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India</a>; government scheme details at <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">Jan Suraksha portal</a>; entity formation at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>; MSME Udyam registration at the <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">Udyam Registration portal</a>; tax planning at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>.</p>
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
                <h2 class="section-title">4 Structural Advantages for Tier 2-3 City IMF Setup</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Four structural advantages combine to make Tier 2-3 cities and rural districts strong IMF locations. Each addresses a distinct dimension of the business case - capital, commission, costs, and demand. Together they create asymmetric economics in favour of Bharat-positioned IMF operators.</p>
                    <p><strong>Advantage 1 - Single-District Capital Requirement:</strong> Regulation 6 IMF Regulations 2015 offers two net worth pathways - Rs 10 lakh for general multi-district operation OR Rs 5 lakh for single-district operation (limited to one district of one state). The single-district route is purpose-designed for Tier 2-3 city IMFs starting locally with intent to expand later. Capital requirement reduction of 50 percent materially eases entry barrier - particularly relevant for bank retirees, agents and locally-trusted figures who may not have Rs 10 lakh ready capital. Most Tier 2-3 city Patron clients start single-district then upgrade to multi-district once business scales.</p>
                    <p><strong>Advantage 2 - B30 Beyond Top 30 Cities Incentivisation:</strong> IRDAI's Rural and Social Sector Obligations mandate insurers achieve specific percentages of business from rural areas, social sector and economically vulnerable segments. To meet these obligations, insurers offer enhanced commission structures to intermediaries operating in B30 geographies. Tier 2-3 IMFs benefit from - higher first-year commission rates on policies sold in B30, additional renewal commission accumulation, priority insurer support and faster tie-up agreement onboarding given counterparty incentive alignment. Commission advantage of 0.5-2.0 percent across product lines compounds across portfolio.</p>
                    <p><strong>Advantage 3 - Operating Cost Economics:</strong> Tier 2-3 city operating cost structure is materially favourable versus metro - office rent typically Rs 15,000-30,000 per month in Tier 2-3 cities vs Rs 50,000-1,50,000 in metro CBDs; ISP and operational staff wages 30-50 percent lower; statutory compliance costs broadly identical to metro. Lower break-even threshold means profitability achievable at smaller scale; higher commission margin per policy sold; better unit economics overall. Tier 2-3 IMF can be profitable at 30-40 policies per month vs metro IMF needing 80-100 policies.</p>
                    <p><strong>Advantage 4 - Insurance Penetration Gap and Government Push:</strong> Rural and Tier 2-3 city insurance penetration remains 30-40 percent versus 60-70 percent urban - creating massive untapped demand. Government micro-insurance schemes accelerate access - PMSBY (Pradhan Mantri Suraksha Bima Yojana, Rs 20 per year accidental cover Rs 2 lakh), PMJJBY (Pradhan Mantri Jeevan Jyoti Bima Yojana, Rs 436 per year life cover Rs 2 lakh), APY (Atal Pension Yojana for unorganised sector), PMFBY (crop insurance), Ayushman Bharat / PM-JAY (national health coverage). These schemes are designed for rural distribution; Tier 2-3 IMFs are natural channel partners.</p>
                    <p><strong>Patron's Pan-India Remote Model:</strong> Historical metro-centricity of professional services has been a barrier for Tier 2-3 city aspirants. Patron's delivery model removes this friction - video consultations (Zoom, MS Teams, Google Meet, WhatsApp Video), courier-based document collection, DSC delivery anywhere, Aadhaar e-KYC and OTP verification, digital MCA / IRDAI / GST filings. Engagement quality is identical regardless of client location.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IMF for Rural and Tier 2-3 Cities:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>Single-District IMF:</strong> Registration option under Regulation 6 IMF Regulations 2015 where the IMF operates in ONE district of ONE state with Rs 5 lakh net worth. Suited for Tier 2-3 city aspirants. Upgrade to multi-district available later.</li>
                        <li><strong>Multi-District / Multi-State IMF:</strong> Standard registration with Rs 10 lakh net worth covering multiple districts or states as declared in Form A IRDAI application. Wider area of operation.</li>
                        <li><strong>B30 (Beyond Top 30 cities):</strong> IRDAI / SEBI framework that incentivises distribution beyond Top 30 cities through higher commission rates and rural sector obligation compliance benefits.</li>
                        <li><strong>IRDAI Rural and Social Sector Obligations:</strong> Mandatory percentage of insurer business required from rural areas and economically vulnerable segments. Drives insurer interest in B30 IMF partnerships.</li>
                        <li><strong>PMSBY (Pradhan Mantri Suraksha Bima Yojana):</strong> Accidental death and disability insurance scheme. Rs 20 per year premium for Rs 2 lakh accidental cover. Ages 18-70. Auto-debit from savings account.</li>
                        <li><strong>PMJJBY (Pradhan Mantri Jeevan Jyoti Bima Yojana):</strong> Term life insurance scheme. Rs 436 per year premium for Rs 2 lakh life cover. Ages 18-50; coverage continues till 55.</li>
                        <li><strong>APY (Atal Pension Yojana):</strong> PFRDA pension scheme for unorganised sector workers. Variable contribution by age 18-40; pension Rs 1,000-5,000 per month from age 60.</li>
                        <li><strong>FSE (Financial Service Executive):</strong> Distribution channel under IMF Regulation 3 for mutual funds, NPS, banking and pension products. Required for APY and pension distribution.</li>
                        <li><strong>Pan-India Remote Engagement:</strong> Patron's delivery model for Tier 2-3 city clients - video consultations, courier-based documents, DSC delivery, digital filings. Physical proximity not required.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IMF for Rural and Tier 2-3 Cities</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Bharat IMF</span>
                        <strong>Single-District + B30 + Government Schemes</strong>
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
            <h2 class="section-title">Tier 2-3 City IMF Founder Profiles Patron Serves</h2>
            <div class="content-text">
                
                                <p>Tier 2-3 city IMF founder profiles span a wide spectrum - united by local customer trust and willingness to operate at non-metro economics. Each segment brings distinct considerations.</p>
                <ul>
                    <li><strong>Retired Bank Managers from PSU Banks:</strong> SBI, PNB, Bank of Baroda, Canara Bank, Union Bank branch managers who retired from district headquarters and taluka centres. Customer trust accumulated through banking careers. Capital from gratuity legitimately sourced. Single-district route common.</li>
                    <li><strong>Retired Postmasters and Postal Department Staff:</strong> 30-year postal careers with deep rural reach. Locally trusted figures particularly successful as IMF founders. Strong fit for government scheme distribution given postal network familiarity with PMSBY, PMJJBY positioning.</li>
                    <li><strong>Ex-Insurance Agents from Tier 2-3 Backgrounds:</strong> LIC agents, private insurer agents who have built local books in district headquarters. Agent graduation to IMF particularly natural given existing customer network and product familiarity.</li>
                    <li><strong>Financial Planners and Advisors in Semi-Urban Areas:</strong> CFP charterholders or financial planning professionals operating in Tier 2-3 cities. IMF addition expands product offering beyond mutual funds and traditional planning.</li>
                    <li><strong>Cooperative Bank Employees:</strong> District Central Cooperative Bank and State Cooperative Bank staff with local rural reach. Cooperative bank customer base typically under-insured; natural cross-sell.</li>
                    <li><strong>Retired Teachers and Government Employees:</strong> Schoolteachers, government department staff (PWD, Revenue, Agriculture) who retired with strong community standing. Local trust enables insurance soliciting credibility.</li>
                    <li><strong>Rural Entrepreneurs and Agricultural Business Owners:</strong> Small-town business owners with established customer relationships. Multi-product diversification through IMF addition.</li>
                    <li><strong>Locally-Trusted Figures in District Headquarters:</strong> Community leaders, panchayat-level office bearers, social workers. Trust signal valuable in rural insurance distribution where traditional brokers face credibility deficit.</li>
                </ul>
                <p><strong>Common Tier 2-3 Setup Cities:</strong> Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Vijayawada, Patna, Ranchi, Bhopal, Visakhapatnam, Surat, Vadodara plus hundreds of Tier 3 district headquarters across Maharashtra (Nashik, Kolhapur, Solapur, Sangli), Karnataka (Hubli, Belgaum, Mangalore, Gulbarga), Tamil Nadu (Trichy, Salem, Tirunelveli, Erode), Andhra Pradesh (Guntur, Tirupati, Rajahmundry, Kakinada), Madhya Pradesh (Gwalior, Ujjain, Jabalpur), Uttar Pradesh (Agra, Varanasi, Kanpur, Meerut), Rajasthan (Kota, Udaipur, Bikaner), Bihar (Muzaffarpur, Bhagalpur, Gaya), Odisha (Rourkela, Sambalpur, Cuttack), and Jharkhand (Jamshedpur, Dhanbad).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Tier 2-3 City IMF Service Coverage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Tier 1 - Single-District Tier 2-3 City IMF (Rs 40,000-55,000)</td>
                            <td>Suitable for aspirant in one specific district of one state; capital-constrained; bank retiree, agent or financial planner with local network. Includes Pvt Ltd or LLP incorporation with IMF-tailored MoA, DIN / DSC delivered via courier anywhere, Rs 5 lakh paid-up capital infusion plus CA Net Worth Certificate (single-district route under Regulation 6), Principal Officer 50-hour training, 3-year business plan, IRDAI portal application with single-district area declaration, 1-2 insurer tie-ups, pan-India remote engagement throughout.</td>
                            <td><span class="badge-included">Single-District</span></td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Multi-District Tier 2-3 Expansion (Rs 55,000-75,000)</td>
                            <td>Suitable for aspirant operating across 2-3 districts within state or multi-state Tier 2-3 plan. All Tier 1 deliverables plus Rs 10 lakh paid-up capital infusion (multi-district route), multi-district area declaration in IRDAI Form A, up to 3 ISPs onboarding (across districts), expanded insurer outreach to 2 life + 1 health + 1 general (4 tie-ups), government scheme distribution setup (PMSBY, PMJJBY, APY positioning), FSE setup for pension and APY distribution.</td>
                            <td><span class="badge-included">Multi-District</span></td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Comprehensive Tier 2-3 City with Year 1 Retainer (Rs 75,000-1,00,000)</td>
                            <td>Suitable for established Tier 2-3 city aspirant with ambitious multi-district or multi-state plan. All Tier 2 deliverables expanded to 5 ISPs, full insurer outreach (2L + 2G + 2H), tie-up agreement negotiation for up to 5 insurers, comprehensive government scheme distribution playbook, Year 1 IMF compliance retainer (half-yearly IRDAI returns, ROC, statutory audit, ITR-6, GST, ISP CPD), B30 commission optimisation advisory, multi-district / multi-state expansion advisory, bi-monthly check-in calls.</td>
                            <td><span class="badge-included">Comprehensive</span></td>
                        </tr>
                        <tr>
                            <td>Single-District to Multi-District Upgrade</td>
                            <td>Process for IMFs that started single-district and want to expand - additional Rs 5 lakh capital infusion through share allotment or LLP contribution, fresh CA Net Worth Certificate confirming Rs 10 lakh net worth, IRDAI portal amendment application for area-of-operation change, updated business plan reflecting multi-district scope. IRDAI approval typically within 30-60 days.</td>
                            <td><span class="badge-included">Add-On</span></td>
                        </tr>
                        <tr>
                            <td>Government Scheme Distribution Setup</td>
                            <td>PMSBY (Rs 20 per year accidental cover) and PMJJBY (Rs 436 per year life cover) distribution through tie-up insurers participating in scheme delivery. APY (Atal Pension Yojana) distribution through FSE setup under PFRDA framework. PMFBY (crop insurance) tie-ups with Agriculture Insurance Company of India (AIC) plus private agri insurers. Ayushman Bharat / PM-JAY enrolment facilitation through Common Service Centres (CSC) coordination.</td>
                            <td><span class="badge-included">Tier 2 + 3</span></td>
                        </tr>
                        <tr>
                            <td>Pan-India Remote Engagement Delivery</td>
                            <td>Video consultations (Zoom, Microsoft Teams, Google Meet, WhatsApp Video), phone calls for non-video clients, WhatsApp coordination for real-time messaging, email for formal documentation, courier-based document collection from client location, DSC delivery to any Indian address, Aadhaar e-KYC and OTP verification, online banking setup assistance, digital MCA SPICe+ / IRDAI portal / GST / Income Tax filings.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>B30 Commission Optimisation Advisory</td>
                            <td>Tie-up negotiation with insurers leveraging B30 incentivisation framework. Higher first-year commission rates (0.5-2.0 percent advantage), additional renewal commission accumulation, priority insurer support. Patron's tie-up negotiation includes B30 commission optimisation across product lines.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>MSME Udyam Registration Coordination</td>
                            <td>Where Tier 2-3 IMF qualifies for MSME classification (investment and turnover within MSME thresholds), Patron coordinates Udyam Registration. Benefits include priority sector lending, subsidised credit, government scheme eligibility, MSME tender preferences.</td>
                            <td><span class="badge-included">If Eligible</span></td>
                        </tr>
                        <tr>
                            <td>Local ISP Talent Identification and Onboarding</td>
                            <td>Tier 2-3 cities have limited insurance-trained talent pool; ISPs typically need ground-up training. Patron's onboarding playbook focuses on local talent identification, 25-hour IRDAI sectoral training (Life or General or Health), Fit and Proper declarations.</td>
                            <td><span class="badge-included">Tier 2 + 3</span></td>
                        </tr>
                        <tr>
                            <td>Principal Officer 50-Hour Training Coordination</td>
                            <td>PO 50-hour training enrolment at IRDAI-approved institute (often near client geography or remote-eligible). Schedule alignment with engagement timeline. Examination booking and certification follow-up.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Office Location Strategy Advisory</td>
                            <td>District headquarters location with high foot traffic and bank proximity strategic advice. Residential-area office cost savings traded off against customer accessibility. Patron's setup includes location strategy memo.</td>
                            <td><span class="badge-included">All Tiers</span></td>
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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Patron 8-Phase Tier 2-3 City IMF Engagement</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured 120-day workflow from initial Tier 2-3 city profile review and route selection (single-district vs multi-district) through pan-India remote Pvt Ltd or LLP setup, Principal Officer certification, B30-optimised insurer outreach, government scheme distribution setup, IRDAI application, and operations launch with Tier 3 Year 1 retainer.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Discovery and Tier 2-3 Profile Review</h3>
                    <p class="step-description">
                        Days 1-7. Aspirant KYC; geographic profile review (city tier, district, customer network); single-district vs multi-district decision; capital planning; tier selection (Tier 1 / 2 / 3 of Patron package); engagement letter signed remotely.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Route decided
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Tier selected
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">B30?</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Profile Set</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Pan-India Remote Entity Formation</h3>
                    <p class="step-description">
                        Days 7-30. Pvt Ltd or LLP incorporation via SPICe+ with IMF-tailored MoA Object Clause; DIN / DSC delivered via courier to any Indian address; Rs 5 lakh (single-district) or Rs 10 lakh (multi-district) paid-up capital infusion; bank account; PAN / TAN / GSTIN.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            CoI received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Capital infused
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="44" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">SINGLE</text>
                                <text x="60" y="62" font-size="11" fill="#F5A623" text-anchor="middle" font-weight="700">Rs 5L</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Entity Live</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">PO Training (Parallel)</h3>
                    <p class="step-description">
                        Days 1-50. Principal Officer 50-hour training at IRDAI-approved institute (remote-eligible or near client geography); certification examination. Bank retirees and ex-agents typically clear first attempt given existing insurance knowledge.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            PO certified
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Exam passed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="40" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">50-HOUR</text>
                                <text x="60" y="62" font-size="10" fill="#F5A623" text-anchor="middle" font-weight="700">PASSED</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Certified</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">B30-Optimised Insurer Outreach</h3>
                    <p class="step-description">
                        Days 30-65. Insurer outreach calibrated to B30 incentivisation framework - higher commission rates negotiated; consent letters for 1-4 insurers (depending on tier). Insurers offer enhanced terms for B30 distribution to meet Rural and Social Sector Obligations.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Consent letters
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            B30 rates
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="35" cy="40" r="14" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="35" y="45" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">B30</text>
                                <circle cx="80" cy="40" r="14" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="80" y="45" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">B30</text>
                                <circle cx="55" cy="75" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="2"/>
                                <text x="55" y="80" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">Govt</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Tie-Ups</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Government Scheme Distribution Setup</h3>
                    <p class="step-description">
                        Days 40-75. PMSBY and PMJJBY distribution through tie-up insurers; APY setup via FSE under PFRDA framework; PMFBY through agricultural insurer (AIC plus private). Ayushman Bharat enrolment facilitation through CSC coordination.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Schemes active
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            FSE setup
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="25" width="20" height="20" rx="3" fill="#F5A623" opacity="0.7"/>
                                <text x="30" y="38" font-size="7" fill="#fff" text-anchor="middle" font-weight="700">PMSBY</text>
                                <rect x="50" y="25" width="20" height="20" rx="3" fill="#F5A623" opacity="0.7"/>
                                <text x="60" y="38" font-size="7" fill="#fff" text-anchor="middle" font-weight="700">PMJJBY</text>
                                <rect x="80" y="25" width="20" height="20" rx="3" fill="#F5A623" opacity="0.7"/>
                                <text x="90" y="38" font-size="7" fill="#fff" text-anchor="middle" font-weight="700">APY</text>
                                <rect x="35" y="55" width="20" height="20" rx="3" fill="#14365F" opacity="0.7"/>
                                <text x="45" y="68" font-size="6" fill="#fff" text-anchor="middle" font-weight="700">PMFBY</text>
                                <rect x="65" y="55" width="20" height="20" rx="3" fill="#14365F" opacity="0.7"/>
                                <text x="75" y="68" font-size="6" fill="#fff" text-anchor="middle" font-weight="700">PMJAY</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Schemes Set</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ISP Onboarding from Local Talent (Tier 2-3)</h3>
                    <p class="step-description">
                        Days 30-65. Local talent identification (limited insurance-trained pool in Tier 2-3); 25-hour sectoral training enrolment per ISP; sectoral certification examinations; KYC and Fit and Proper declarations.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ISPs trained
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Local team
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="30" r="10" fill="#F5A623" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="35" cy="65" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="60" cy="70" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <circle cx="85" cy="65" r="9" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <line x1="60" y1="40" x2="35" y2="58" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="60" y1="40" x2="60" y2="61" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="60" y1="40" x2="85" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Team Live</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">IRDAI Application Filing</h3>
                    <p class="step-description">
                        Days 65-85. 25+ document compilation - PO Pass Certificate, CA Net Worth Certificate (Rs 5L single-district or Rs 10L multi-district), Schedule II F and P, insurer consent letters, 3-year business plan with district scope declaration. IRDAI portal application filed; Rs 5,000 application fee.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ARN received
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Application filed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="3"/>
                                <line x1="30" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                                <line x1="30" y1="72" x2="75" y2="72" stroke="#14365F" stroke-width="2" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Filed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Operations Launch and Year 1 Retainer (Tier 3)</h3>
                    <p class="step-description">
                        Days 110-365 / 500. IRDAI Registration Certificate received; B30-optimised insurer tie-up agreements active; ISP team operational across district; first PMSBY / PMJJBY policies plus private insurance sales. Tier 3 Year 1 retainer covers half-yearly IRDAI returns, ROC trio, ITR-6, GST.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Operations live
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Year 1 managed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M42 50 L55 63 L80 38" stroke="#F5A623" stroke-width="4" stroke-linecap="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Live</span>
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
            <h2 class="section-title">Document Checklist for Tier 2-3 City IMF Setup</h2>
            <div class="content-text">
                
                                <p>For an effective Tier 2-3 city IMF engagement, the following documents should be ready. Patron coordinates pickup of physical documents via courier from any Indian location; digital documents collected over WhatsApp / email.</p>
                <ul>
                    <li>Aspirant founder PAN, Aadhaar, photograph, digital signature specimen</li>
                    <li>Co-founder or co-director PAN, Aadhaar, photograph (typically spouse / family / partner)</li>
                    <li>Last 3 years ITR acknowledgements (founder)</li>
                    <li>Bank account statements (last 6 months) showing Rs 5 lakh or Rs 10 lakh capital availability</li>
                    <li>Education certificates - Class 12 minimum; graduation; any insurance / financial certifications held</li>
                    <li>Previous employment certificates - retired bank manager letter, retired postmaster service certificate, agent licence history, etc.</li>
                    <li>Aspirant founder Fit and Proper declaration (Form A Schedule II IMF Regulations 2015)</li>
                    <li>Office rental agreement or owned property documents (district headquarters location ideal)</li>
                    <li>Office photographs and office layout sketch</li>
                    <li>Office utility bill (electricity / telephone / property tax receipt) as address proof</li>
                    <li>3 reference letters - local bank manager, senior insurance industry connection, established community figure</li>
                    <li>Local team list for ISP onboarding (Tier 2 / 3) - candidates with Class 12 minimum education</li>
                    <li>Customer base preview - rough estimate of contactable households / families in target district</li>
                    <li>3-year business plan inputs - first-year scheme distribution target, second-year private insurance ramp, ISP scaling plan</li>
                    <li>Geographic scope decision documentation - single-district or multi-district selection rationale</li>
                </ul>
                <p style="margin-top:16px;">Verify portal status at the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. Government scheme details at the <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">Jan Suraksha portal</a>. Pvt Ltd / LLP filings at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>. MSME Udyam at the <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">Udyam Registration portal</a>. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Tier 2-3 City IMF Setup Mistakes Patron Helps You Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Choosing Multi-District When Single-District Fits</td>
                            <td>Some founders default to multi-district Rs 10 lakh net worth route when single-district Rs 5 lakh route would serve initial business needs adequately. Unnecessary capital allocation reduces operating runway in early years.</td>
                            <td>Patron's diagnostic recommends single-district when district scope fits 2-3 year plan. Upgrade to multi-district facilitated when business scales - additional Rs 5 lakh capital plus IRDAI amendment application processed in 30-60 days.</td>
                        </tr>
                        <tr>
                            <td>Underestimating B30 Commission Advantage</td>
                            <td>Tier 2-3 IMFs sometimes negotiate insurer tie-ups at metro commission rates without leveraging B30 incentivisation framework. Insurers offer enhanced commission for B30 distribution to meet Rural Sector Obligations - leaving commission on the table is direct revenue loss.</td>
                            <td>Patron's tie-up negotiation includes explicit B30 commission optimisation. 0.5-2.0 percent commission advantage across product lines secured at agreement stage; documented in tie-up MoU.</td>
                        </tr>
                        <tr>
                            <td>Ignoring Government Scheme Distribution</td>
                            <td>PMSBY, PMJJBY, APY distribution alone may not maximise revenue but provides excellent customer acquisition entry point. Tier 2-3 IMFs that focus only on private insurance products miss the door-opener effect.</td>
                            <td>Patron's government scheme playbook positions PMSBY (Rs 20 per year) and PMJJBY (Rs 436 per year) as customer acquisition tools. Subscribers become candidates for private term insurance upgrade and higher sum assured plans.</td>
                        </tr>
                        <tr>
                            <td>Setting Up Without Tie-Up Insurer Confirmation</td>
                            <td>Tier 2-3 cities have fewer insurer counterparty options than metros. Some founders incorporate entity and then discover insurer reluctance for the specific district. Setup investment at risk if insurer onboarding stalls.</td>
                            <td>Patron's engagement starts with insurer interest validation BEFORE entity formation - preliminary conversations with 2-3 candidate insurers for the target district to confirm onboarding feasibility.</td>
                        </tr>
                        <tr>
                            <td>Office Setup in Wrong Location</td>
                            <td>District headquarters with high foot traffic and bank proximity outperform residential-area offices. Some Tier 2-3 founders save on rent through residential-area location but lose customer accessibility - net economics worse.</td>
                            <td>Patron's setup includes location strategy memo - district headquarters commercial area, near bank branches, walkable from bus stand or railway station. Cost-benefit analysis of premium location vs residential setup.</td>
                        </tr>
                        <tr>
                            <td>Overestimating Initial Cross-Sell Penetration</td>
                            <td>Tier 2-3 markets show strong long-term cross-sell but Year 1 ramp can be slower than metro - more relationship building required, lower trust in formal insurance products initially. Mismatched expectations create buyer remorse.</td>
                            <td>Patron sets expectations explicitly - Year 1 realistic 50-100 policies (mix of government scheme volume plus 20-30 private insurance); Year 2-3 ramp to 200-400 policies as customer base familiarises with brand.</td>
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
            <h2 class="section-title">Patron Fees for Tier 2-3 City IMF Engagement</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free Tier 2-3 City IMF Scoping Call</td>
                            <td>Free - 30-minute scoping call plus district profile review plus route selection memo plus tier recommendation; response within 4 hours; video / phone / WhatsApp</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial district viability and insurer interest diagnostic; credit applied if Tier 1 / 2 / 3 engaged within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - Single-District Tier 2-3 City IMF (one-time)</td>
                            <td>Rs 40,000 to Rs 55,000 (excl. GST and statutory pass-through fees) - Pvt Ltd or LLP, Rs 5 lakh capital infusion, PO 50-hour training, IRDAI application with single-district declaration, 1-2 insurer tie-ups, pan-India remote engagement throughout</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Multi-District Tier 2-3 Expansion (one-time)</td>
                            <td>Rs 55,000 to Rs 75,000 (excl. GST) - all Tier 1 deliverables plus Rs 10 lakh capital, multi-district area declaration, up to 3 ISPs, 2L + 1G + 1H tie-ups, PMSBY / PMJJBY / APY distribution setup, FSE setup for pension, initial accounting</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Comprehensive Tier 2-3 City with Year 1 Retainer</td>
                            <td>Rs 75,000 to Rs 1,00,000 (excl. GST) - all Tier 2 deliverables expanded to 5 ISPs, full 2L + 2G + 2H tie-up architecture, Year 1 compliance retainer included, B30 commission optimisation advisory, multi-district / multi-state expansion advisory, bi-monthly check-ins</td>
                        </tr>
                        <tr>
                            <td>Single-District to Multi-District Upgrade (Add-On)</td>
                            <td>Rs 25,000 to Rs 40,000 - additional Rs 5 lakh capital infusion coordination, fresh CA Net Worth Certificate, IRDAI amendment application for area-of-operation change, updated business plan; IRDAI approval 30-60 days</td>
                        </tr>
                        <tr>
                            <td>Pvt Ltd Incorporation (one-time)</td>
                            <td>Rs 7,500 to Rs 12,000 - Companies Act 2013 Sections 3, 4, 7 compliance; SPICe+ filing; IMF-tailored MoA Object Clause</td>
                        </tr>
                        <tr>
                            <td>LLP Incorporation (alternative one-time)</td>
                            <td>Rs 7,500 to Rs 12,000 - LLP Act 2008; designated partners; LLP Agreement covering IMF activities</td>
                        </tr>
                        <tr>
                            <td>PO 50-Hour IRDAI Training (Pass-Through)</td>
                            <td>Rs 7,500 to Rs 15,000 plus exam fees - paid directly to IRDAI-approved institute; remote-eligible or near client geography</td>
                        </tr>
                        <tr>
                            <td>ISP 25-Hour Sectoral Training (Pass-Through, Per ISP)</td>
                            <td>Rs 3,500 to Rs 6,000 per ISP plus exam fees - sectoral training (Life or General or Health); Tier 1 / 2 / 3 ISP count varies</td>
                        </tr>
                        <tr>
                            <td>Statutory Pass-Through Fees (Government Charges)</td>
                            <td>Pass-through - IRDAI application fee Rs 5,000 (non-refundable, identical regardless of city tier), MCA name approval and incorporation Rs 1,500 to Rs 7,000, GST registration free, stamp duty per state, MSME Udyam free</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IMF for Rural and Tier 2-3 Cities consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20setting%20up%20IMF%20in%20a%20Tier%202-3%20city%20-%20please%20share%20scoping%20call%20availability%20for%20Patron's%20pan-India%20remote%20engagement." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">120-Day Tier 2-3 City IMF Setup Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Phase 0 - Discovery</td>
                            <td>Days 1-7 - aspirant KYC remote, district profile review, single-district vs multi-district decision, capital planning, tier selection, engagement letter signed digitally</td>
                        </tr>
                        <tr>
                            <td>Phase 1A - Entity Formation</td>
                            <td>Days 7-30 - Pvt Ltd or LLP incorporation via SPICe+ with IMF-tailored MoA, DIN / DSC delivered via courier to client address anywhere in India, PAN / TAN / GSTIN, bank account, Rs 5 / 10 lakh paid-up capital infusion</td>
                        </tr>
                        <tr>
                            <td>Phase 1B - PO Training (Parallel)</td>
                            <td>Days 1-50 - Principal Officer 50-hour training enrolment at IRDAI-approved institute (remote-eligible) and certification examination</td>
                        </tr>
                        <tr>
                            <td>Phase 2A - B30 Insurer Outreach</td>
                            <td>Days 30-65 - insurer outreach leveraging B30 incentivisation; consent letters for 1-4 insurers depending on tier; commission rate negotiation</td>
                        </tr>
                        <tr>
                            <td>Phase 2B - Government Scheme Setup</td>
                            <td>Days 40-75 - PMSBY and PMJJBY distribution through tie-up insurers; APY FSE setup under PFRDA; PMFBY tie-up with AIC or private agri insurer; Ayushman Bharat CSC coordination</td>
                        </tr>
                        <tr>
                            <td>Phase 2C - ISP Onboarding (Tier 2-3)</td>
                            <td>Days 30-65 - local talent identification; 25-hour sectoral training enrolment per ISP; sectoral examinations; KYC and Fit and Proper declarations</td>
                        </tr>
                        <tr>
                            <td>Phase 3 - IRDAI Application</td>
                            <td>Days 65-85 - 25+ document compilation; IRDAI portal application; Rs 5,000 application fee; single-district or multi-district area declaration as per route</td>
                        </tr>
                        <tr>
                            <td>Phase 4 - MSME and Office Setup</td>
                            <td>Days 65-110 - MSME Udyam Registration if eligible; office location finalisation; office signage and basic infrastructure; bank account funded</td>
                        </tr>
                        <tr>
                            <td>Phase 5 - IRDAI Processing</td>
                            <td>Days 85-120 - Authority review, clarification queries handled, final decision, IMF Registration Certificate received</td>
                        </tr>
                        <tr>
                            <td>Phase 6 - Operations Launch</td>
                            <td>Days 110-130 - IRDAI certificate received, tie-up agreements active, ISP team operational, first PMSBY / PMJJBY policies plus private insurance sales</td>
                        </tr>
                        <tr>
                            <td>Phase 7 - Year 1 Compliance Retainer (Tier 3)</td>
                            <td>Days 130-365 - quarterly check-ins, half-yearly IRDAI returns, ROC trio, ITR-6, GST, ISP CPD, MSME compliance, multi-district upgrade if business scales</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Tier 2-3 Year 1 to Year 3 Trajectory:</strong> Year 1 typical revenue Rs 4-8 lakh combining government scheme volume (PMSBY / PMJJBY) plus initial private insurance sales (20-30 term / health policies); Year 2 ramp to Rs 10-18 lakh as customer base familiarises and ISP team productivity improves; Year 3 maturity Rs 18-35 lakh with full B30 commission compounding plus renewal accumulation plus cross-sell penetration. The single-district to multi-district upgrade typically happens between Year 2 and Year 3 when district business has proven model and capital is available for the Rs 5 lakh incremental infusion. Tier 2-3 city economics deliver materially better unit economics than metro - break-even at 30-40 policies per month vs 80-100 metro requirement.</p>

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
            <h2 class="section-title">Why Patron for Tier 2-3 City IMF</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">Specialised Tier 2-3 City Expertise</h3>
                <p class="feature-description">Distinct from metro-centric advisory. Patron understands the single-district route economics, B30 commission framework, government scheme distribution mechanics, and Tier 2-3 operating cost structure that metro-focused firms miss. Bharat-positioned engagement model.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">3-Tier Fee Calibrated to Tier 2-3 Economics</h3>
                <p class="feature-description">Rs 40,000 to Rs 1,00,000 across 3 tiers reflects Tier 2-3 cost efficiency. Lower than metro packages while delivering identical regulatory completeness. Single-district Rs 40,000 entry; multi-district Rs 55,000; comprehensive with Year 1 retainer Rs 75,000-1,00,000.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">Pan-India Remote Engagement</h3>
                <p class="feature-description">Physical proximity not required. Video consultations, courier-based document collection from any location, DSC delivery to any Indian address, Aadhaar e-KYC, digital filings. Engagement quality identical regardless of client location across approximately 100+ cities served.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">Government Scheme Distribution Expertise</h3>
                <p class="feature-description">PMSBY (Rs 20 per year), PMJJBY (Rs 436 per year), APY pension, PMFBY crop, Ayushman Bharat. Patron positions schemes as customer acquisition door-openers with upgrade paths to private insurance products. Massive volume potential in rural and Tier 2-3 markets.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">B30 Commission Optimisation</h3>
                <p class="feature-description">Tie-up negotiation leveraging Beyond Top 30 cities incentivisation framework. Higher first-year commission rates (0.5-2.0 percent advantage), additional renewal commission accumulation, priority insurer support. Commission advantage compounds across portfolio over 5-10 years.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">15+ Years Across IRDAI, MCA, RBI</h3>
                <p class="feature-description">Offices in Pune, Mumbai, Delhi, and Gurugram with pan-India remote engagement. Single firm CA + CS + IRDAI compliance coordination. MSME Udyam coordination where eligible. Bank retiree, agent, advisor and locally-trusted persona expertise relevant to Tier 2-3 client mix.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Tier 2-3 City and Rural Founders Across India</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"I retired from State Bank of India branch in a Tier 3 city in Madhya Pradesh. Setting up IMF in metro would have been impractical given my district focus. Patron's single-district route with Rs 5 lakh capital was perfect - lower entry barrier, faster setup, focused on my district. Entire engagement was remote - I never visited any Patron office. DSC came by courier. Total Patron fee Rs 50,000. Within 120 days I had IRDAI Registration Certificate."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Founder, single-district IMF in Bhopal-Indore corridor (Tier 1, ex-SBI)</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"I was a postmaster who retired after 30 years of service in Tier 2 city in Karnataka. Patron set up our IMF Pvt Ltd remotely - all video consultations, courier-based documents, online filings. Multi-district route with Rs 10 lakh capital from gratuity savings. Year 1 we distributed PMSBY and PMJJBY heavily across district network plus private health insurance to better-off customers. Revenue Rs 7 lakh in Year 1; expected Rs 15 lakh in Year 2."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Founder, IMF in Mysore-Coimbatore region (Tier 2, ex-postmaster)</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Roster:</strong> Tier 2-3 city and rural IMF engagements completed across Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Patna, Ranchi and many other district headquarters. Founder profiles - ex-PSU bank managers, retired postmasters, ex-insurance agents, financial planners in semi-urban areas, cooperative bank employees, retired teachers and locally-trusted figures in district headquarters.</p>

                <p><strong>4-Office Trust Signal with Pan-India Remote:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves clients across India through pan-India remote engagement. Tier 2-3 city clients receive identical quality of professional service as metro clients - delivered through video consultations, courier-based document handling, digital filings and DSC delivery to any address. Approximately 100+ cities served pan-India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Single-District vs Multi-District IMF - Detailed Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>Single-District (Rs 5 Lakh)</th><th>Multi-District (Rs 10 Lakh)</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Net Worth Requirement</td>
                            <td>Rs 5 lakh paid-up capital</td>
                            <td>Rs 10 lakh paid-up capital</td>
                        </tr>
                        <tr>
                            <td>Area of Operation</td>
                            <td>One district of one state ONLY</td>
                            <td>Wider area - multiple districts within state, or multi-state on extension</td>
                        </tr>
                        <tr>
                            <td>IRDAI Application</td>
                            <td>Single-district specified in Form A application</td>
                            <td>Multi-district specified; broader area declared</td>
                        </tr>
                        <tr>
                            <td>MoA Object Clause</td>
                            <td>Identical wording across both</td>
                            <td>Identical wording across both</td>
                        </tr>
                        <tr>
                            <td>Tie-up Insurer Coverage</td>
                            <td>Same 6-tie-up framework (2L + 2G + 2H)</td>
                            <td>Same 6-tie-up framework</td>
                        </tr>
                        <tr>
                            <td>Insurance Sales Persons</td>
                            <td>ISPs operate within designated district only</td>
                            <td>ISPs can operate across declared multi-district area</td>
                        </tr>
                        <tr>
                            <td>Renewal Cycle</td>
                            <td>3-year renewable; same as multi-district</td>
                            <td>3-year renewable</td>
                        </tr>
                        <tr>
                            <td>Annual Compliance</td>
                            <td>Same - half-yearly returns, audit, ROC, ITR, GST</td>
                            <td>Same</td>
                        </tr>
                        <tr>
                            <td>Upgrade Path</td>
                            <td>Can upgrade to multi-district later with additional capital infusion and IRDAI amendment</td>
                            <td>Already at multi-district level</td>
                        </tr>
                        <tr>
                            <td>Suitable For</td>
                            <td>Tier 2-3 city local practice; rural focus; capital-constrained founders</td>
                            <td>Multi-city ambitious operations; established founders; metro plus Tier 2 mix</td>
                        </tr>
                        <tr>
                            <td>Patron Fee Range</td>
                            <td>Rs 40,000-55,000 (Tier 1)</td>
                            <td>Rs 55,000-1,00,000 (Tier 2-3)</td>
                        </tr>
                        <tr>
                            <td>Time to Launch</td>
                            <td>120 days standard</td>
                            <td>120-150 days standard</td>
                        </tr>

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
            <h2 class="section-title">Related Patron IMF Cluster Services</h2>
            <div class="content-text">
                
                                <p>Tier 2-3 city engagement is one of several routes within Patron's IMF cluster. Related services support across the engagement lifecycle:</p>
                <ul>
                    <li>Parent service: <a href="/insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</a> - master hub covering all IMF cluster services.</li>
                    <li><a href="/imf-incorporation-services">IMF Incorporation Services</a> - combined MCA plus IRDAI engagement detail.</li>
                    <li><a href="/imf-irdai-registration-process">IRDAI IMF Registration Process</a> - standalone IRDAI registration if entity already exists.</li>
                    <li><a href="/ismp-certification-isp-appointment">ISMP Certification and ISP Appointment</a> - Principal Officer training and ISP coordination.</li>
                    <li><a href="/imf-compliance-retainer-services">IMF Compliance Retainer Services</a> - ongoing annual compliance after setup.</li>
                    <li><a href="/imf-for-bank-employees-retirees">IMF for Bank Employees and Retirees</a> - bank retiree persona vertical (highly relevant to Tier 2-3 founders).</li>
                    <li><a href="/imf-for-insurance-agents">IMF for Insurance Agents</a> - agent graduation persona vertical.</li>
                    <li><a href="/imf-private-limited-vs-llp">IMF Private Limited vs LLP</a> - entity selection guide.</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Pvt Ltd entity for Tier 2-3 founders.</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST for commission revenue (Rs 20 lakh threshold).</li>
                </ul>
                <p style="margin-top:16px;">Verify your eligibility through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">IRDAI main site</a> and the <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI Insurance Marketing Firm portal</a>. Government scheme details at the <a href="https://jansuraksha.gov.in" target="_blank" rel="noopener">Jan Suraksha portal</a>. For company-level filings, the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a> portal. MSME Udyam Registration at the <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">Udyam Registration portal</a>. Income tax e-filing at the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-Filing Portal</a>. Auditing standards at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                                <p><strong>Governing Statutes and Regulations:</strong> Insurance Act 1938, IRDAI Act 1999, IRDAI (Registration of Insurance Marketing Firm) Regulations 2015, IRDAI Rural and Social Sector Obligations Circulars, Pradhan Mantri micro-insurance schemes (PMSBY, PMJJBY, APY, PMFBY, Ayushman Bharat), Companies Act 2013, LLP Act 2008, MSME Act 2006, Income Tax Act 1961, and GST Act 2017.</p>
                <ul>
                    <li><strong>Insurance Act 1938 Section 42D:</strong> Intermediary registration framework - parent statute for IMF.</li>
                    <li><strong>IRDAI Act 1999:</strong> Establishment and powers of the Insurance Regulatory and Development Authority.</li>
                    <li><strong>IRDAI (Registration of Insurance Marketing Firm) Regulations 2015:</strong> Master regulation for IMF.</li>
                    <li><strong>Regulation 2.2 IMF Regulations 2015:</strong> Eligible entity types - Company, LLP, Cooperative Society.</li>
                    <li><strong>Regulation 3 IMF Regulations 2015:</strong> Permitted activities; 2L + 2G + 2H open architecture.</li>
                    <li><strong>Regulation 4 IMF Regulations 2015:</strong> Principal Officer requirements.</li>
                    <li><strong>Regulation 5 IMF Regulations 2015:</strong> Conditions for application.</li>
                    <li><strong>Regulation 6 IMF Regulations 2015:</strong> Net worth Rs 10 lakh general or Rs 5 lakh single-district - critical for Tier 2-3 economics.</li>
                    <li><strong>Regulation 12 IMF Regulations 2015:</strong> ISP framework.</li>
                    <li><strong>Schedule I IMF Regulations 2015:</strong> Code of Conduct.</li>
                    <li><strong>Schedule II IMF Regulations 2015:</strong> Fit and Proper criteria.</li>
                    <li><strong>IRDAI Rural and Social Sector Obligations:</strong> Insurer mandate for rural insurance percentage - drives B30 incentivisation.</li>
                    <li><strong>IRDAI Circulars on Beyond Top 30 cities incentivisation:</strong> Higher commission framework for B30.</li>
                    <li><strong>PMSBY (Pradhan Mantri Suraksha Bima Yojana 2015):</strong> GoI accidental insurance Rs 20 per year.</li>
                    <li><strong>PMJJBY (Pradhan Mantri Jeevan Jyoti Bima Yojana 2015):</strong> GoI term life Rs 436 per year.</li>
                    <li><strong>APY (Atal Pension Yojana 2015):</strong> PFRDA pension scheme for unorganised sector.</li>
                    <li><strong>PMFBY (Pradhan Mantri Fasal Bima Yojana):</strong> Crop insurance scheme.</li>
                    <li><strong>Ayushman Bharat / PM-JAY:</strong> National Health Authority cashless health coverage Rs 5 lakh per family.</li>
                    <li><strong>Pradhan Mantri Jan Dhan Yojana (PMJDY):</strong> Financial inclusion foundation.</li>
                    <li><strong>RBI Financial Inclusion guidelines.</strong></li>
                    <li><strong>Companies Act 2013 Sections 3, 4, 7:</strong> Pvt Ltd formation.</li>
                    <li><strong>LLP Act 2008:</strong> LLP route.</li>
                    <li><strong>MSME Act 2006:</strong> Udyam Registration framework.</li>
                    <li><strong>Section 28 Income Tax Act 1961:</strong> Profits and gains of business.</li>
                    <li><strong>Section 44AD Income Tax Act 1961:</strong> Presumptive taxation (limited applicability for IMF).</li>
                    <li><strong>Section 194D Income Tax Act 1961:</strong> TDS on insurance commission.</li>
                    <li><strong>GST Act 2017:</strong> 18 percent rate on commission income; Rs 20 lakh threshold; Rs 40 lakh special category states.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on district scope (single vs multi), ISP team count, insurer mix, government scheme setup complexity, and pan-India remote engagement specifics (e.g. PO training institute selection, courier logistics).</p>

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
                    <p class="faq-expanded__lead">Answers to the most common questions from aspirants in Tier 2-3 cities and rural districts - bank retirees, ex-postmasters, agents, advisors, cooperative bank employees, retired teachers - evaluating IMF setup.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can I set up IMF in Tier 3 city?</h3>
                        <div class="faq-expanded__a"><p>Yes. Tier 3 cities and rural districts are particularly suited for IMF setup. Three structural advantages - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh net worth versus Rs 10 lakh multi-district; (2) B30 (Beyond Top 30 cities) incentivisation framework provides higher commission rates from insurers seeking to meet IRDAI Rural and Social Sector Obligations; (3) Lower operating costs - office rent typically 30-60 percent below metro, ISP wages 30-50 percent lower. Patron's pan-India remote engagement model handles complete setup without physical proximity. Tier 2-3 city package Rs 40,000-1,00,000 across 3 tiers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is single district IMF registration?</h3>
                        <div class="faq-expanded__a"><p>Single-District IMF is a registration option under Regulation 6 IMF Regulations 2015 where the IMF operates in ONE district of ONE state with Rs 5 lakh net worth requirement (versus Rs 10 lakh for multi-district / multi-state). Area of operation is declared in Form A IRDAI application. Single-district IMF maintains identical insurer tie-up framework (up to 2 life + 2 general + 2 health), same Principal Officer and ISP requirements, same compliance obligations - the difference is geographic scope plus capital requirement. Most Tier 2-3 city aspirants start with single-district and upgrade to multi-district later as business scales.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the net worth for rural IMF?</h3>
                        <div class="faq-expanded__a"><p>Rs 5 lakh paid-up capital for single-district IMF (operating in one district of one state) under Regulation 6 IMF Regulations 2015; Rs 10 lakh paid-up capital for multi-district / multi-state IMF (broader area of operation). CA Net Worth Certificate confirms compliance based on entity balance sheet within 3 months of FY end. Rural and Tier 2-3 city aspirants typically use single-district route for initial setup given lower capital barrier. Upgrade to multi-district through additional Rs 5 lakh capital infusion and IRDAI amendment application is straightforward when business scales.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does Patron handle IMF setup remotely?</h3>
                        <div class="faq-expanded__a"><p>Yes - complete pan-India remote engagement model. Components include - video consultations (Zoom, Microsoft Teams, Google Meet, WhatsApp Video); phone calls for clients preferring non-video; WhatsApp coordination for real-time messaging; email for formal documentation; courier-based document collection from any client location; Digital Signature Certificate delivery to any Indian address; Aadhaar e-KYC and OTP-based verification; online banking setup coordination; digital filings with MCA SPICe+, IRDAI portal, GST, Income Tax. Physical visit to Patron offices in Pune, Mumbai, Delhi or Gurugram is optional, not mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is B30 incentivisation for insurance?</h3>
                        <div class="faq-expanded__a"><p>Beyond Top 30 cities (B30) framework - IRDAI Rural and Social Sector Obligations mandate insurers achieve specific percentages of business from rural and economically vulnerable segments. To meet these obligations, insurers offer enhanced commission structures to intermediaries operating in B30 geographies. Tier 2-3 IMFs benefit through higher first-year commission rates (0.5-2.0 percent commission advantage across product lines), additional renewal commission accumulation, priority insurer support and faster tie-up agreement onboarding. B30 commission advantage compounds across portfolio - over 5-10 years, the cumulative commission earned by Tier 2-3 IMF can materially exceed metro IMF.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can IMF distribute PMSBY and PMJJBY?</h3>
                        <div class="faq-expanded__a"><p>Yes through tie-up insurers participating in government scheme distribution. PMSBY (Pradhan Mantri Suraksha Bima Yojana - Rs 20 per year accidental cover Rs 2 lakh, ages 18-70) and PMJJBY (Pradhan Mantri Jeevan Jyoti Bima Yojana - Rs 436 per year life cover Rs 2 lakh, ages 18-50) are distributed primarily through banks but IMFs can facilitate customer awareness and enrolment through tie-up insurer relationships. Atal Pension Yojana (APY) distribution through FSE setup. Government scheme distribution serves as customer acquisition door-opener for Tier 2-3 IMFs - PMSBY subscribers become candidates for private term insurance upgrade.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Best Tier 2-3 cities for IMF business?</h3>
                        <div class="faq-expanded__a"><p>Common Tier 2 cities for IMF setup - Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, Aurangabad, Mysore, Madurai, Vijayawada, Patna, Ranchi, Bhopal, Visakhapatnam, Surat, Vadodara. Common Tier 3 districts - Nashik, Kolhapur, Solapur (Maharashtra); Hubli, Belgaum, Mangalore (Karnataka); Trichy, Salem, Tirunelveli (Tamil Nadu); Guntur, Tirupati, Rajahmundry (Andhra Pradesh); Gwalior, Ujjain, Jabalpur (MP); Agra, Varanasi, Kanpur (UP); Kota, Udaipur, Jodhpur (Rajasthan); and hundreds of district headquarters across India. Best city depends on founder's existing network, customer base demographic and competitive landscape.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Lower cost of IMF setup in small cities?</h3>
                        <div class="faq-expanded__a"><p>Tier 2-3 city operating cost structure materially lower than metro - office rent typically Rs 15,000-30,000 per month versus Rs 50,000-1,50,000 metro CBD; ISP and operational staff wages 30-50 percent lower; commercial real estate broadly affordable for owned-premises model. Patron's Tier 2-3 city fee structure reflects this - Rs 40,000 to Rs 1,00,000 across 3 tiers (lower than metro packages Rs 50,000-1,50,000). Statutory pass-through fees (IRDAI Rs 15,000 plus MCA stamp duty) are identical regardless of city tier. Break-even threshold lower - profitability achievable at 30-40 policies per month vs metro IMF needing 80-100 policies for similar profitability.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Can rural IMF distribute crop insurance?</strong> Yes through PMFBY tie-up insurers (AIC plus private agri insurers).</li>
                    <li><strong>Is GST registration mandatory for Tier 2-3 IMF?</strong> Once turnover crosses Rs 20 lakh (Rs 40 lakh in special category states); most IMFs cross threshold by Year 2.</li>
                    <li><strong>Can Tier 2-3 IMF qualify for MSME Udyam Registration?</strong> Yes if investment and turnover within MSME thresholds; provides benefits including priority sector lending.</li>
                    <li><strong>Single-district plus another state plan - upgrade timing?</strong> Patron facilitates upgrade after 18-24 months of single-district operation typically; cost Rs 25,000-40,000.</li>
                    <li><strong>Can spouse be co-director without insurance background?</strong> Yes. Spouse can be co-director / shareholder without being PO.</li>
                    <li><strong>Bank retiree IMF setup specifics?</strong> Covered in detail at our IMF for Bank Employees and Retirees page; many Tier 2-3 city IMF founders are ex-bank managers.</li>
                    <li><strong>Office without metro CBD location?</strong> District headquarters commercial area near bank branches is sufficient; metro CBD not required for Tier 2-3 IMF.</li>
                    <li><strong>Chhote shahar mein IMF kaise banayein?</strong> Tier 2-3 city mein IMF banane ke liye three structural advantages hain - Single-District route mein sirf Rs 5 lakh net worth chahiye; B30 framework mein higher commission rates milte hain; office rent aur ISP wages 30-60 percent kam hote hain. Patron ka pan-India remote engagement model means physical proximity zaroori nahi. Patron ka Tier 2-3 city package Rs 40,000-1,00,000 mein 3 tiers cover karta hai. Standard 120 day timeline. Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Setup Around Capital Availability or Government Scheme Cycle</h2>
            <div class="content-text">
                
                                <p><strong>Trigger Events for Tier 2-3 City IMF Setup:</strong> Patron's Tier 2-3 city engagement is most effective when timed to one of several natural triggers - (a) Retirement timing - bank retirees, postmasters, government employees with gratuity capital received are well-positioned for immediate setup; (b) Single-district capital availability (Rs 5 lakh) achieved without stretching family resources; (c) Government scheme renewal cycle (PMSBY / PMJJBY auto-renewal cycles) creates customer awareness window; (d) Local insurer interest in B30 expansion - tie-up onboarding faster when insurer is actively seeking rural sector compliance; (e) IRDAI Rural Sector Obligations annual compliance window where insurers prioritise B30 IMF partnerships.</p>
                <p><strong>Cost of Continuing the Status Quo:</strong> Existing rural insurance penetration gap of 30-40 percent versus 60-70 percent urban represents under-served demand. Tier 2-3 founders who set up early capture the B30 commission advantage compounding over 5-10 years - cumulative commission earned can materially exceed metro IMF baseline. A 12-month delay in setup typically represents Rs 3-8 lakh foregone Year 2-3 income for a mid-size Tier 2-3 district practice.</p>
                <p><strong>Pan-India Remote Eliminates Metro Barrier:</strong> The historical metro-centricity of professional services was the main friction point preventing Tier 2-3 city aspirants from setting up IMFs. Patron's pan-India remote engagement model removes this entirely. Video consultations, courier-based documents, DSC delivery anywhere - engagement quality identical regardless of client location.</p>
                <p><strong>Action:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a> for a free 30-minute Tier 2-3 City IMF Scoping Call. Tier 1 Single-District from Rs 40,000; Tier 2 Multi-District from Rs 55,000; Tier 3 Comprehensive with Year 1 Retainer from Rs 75,000.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Tier 2-3 City IMF Team Today</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">India's insurance distribution opportunity is overwhelmingly in non-metro geographies. While metro markets approach saturation, Tier 2-3 cities and rural districts remain materially under-served - approximately 30-40 percent rural penetration versus 60-70 percent urban creates a gap of crores of households without adequate insurance coverage. Government micro-insurance schemes (PMSBY, PMJJBY, APY, PMFBY, Ayushman Bharat) have accelerated rural insurance demand by making coverage affordable.</p>
                <p style="color:rgba(255,255,255,0.92);">Tier 2-3 city aspirants benefit from three structural advantages - (1) Single-District IMF route under Regulation 6 IMF Regulations 2015 requires only Rs 5 lakh net worth versus Rs 10 lakh multi-district route; (2) B30 incentivisation framework where insurers offer enhanced commission rates of 0.5-2.0 percent advantage across product lines; (3) Operating cost economics materially favourable with office rent 30-60 percent below metro and ISP wages 30-50 percent lower. Break-even threshold lower - profitability achievable at 30-40 policies per month vs metro requirement of 80-100 policies.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron's Tier 2-3 city package Rs 40,000 to Rs 1,00,000 across 3 tiers reflects cost structure efficiency versus metro packages. Pan-India remote engagement model handles complete setup without physical proximity through video consultations, courier-based document collection, DSC delivery anywhere in India, digital MCA / IRDAI / GST filings. Common Tier 2-3 setup locations - Indore, Lucknow, Nagpur, Coimbatore, Jaipur, Bhubaneswar, plus hundreds of district headquarters. Bank retirees, ex-postmasters, retired agents, financial planners and locally-trusted figures form particularly successful founder profiles.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20setting%20up%20IMF%20in%20a%20Tier%202-3%20city%20-%20please%20share%20scoping%20call%20availability%20for%20Patron's%20pan-India%20remote%20engagement." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20IMF%20for%20Rural%20and%20Tier%202-3%20Cities&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Patron's%20Tier%202-3%20city%20IMF%20engagement%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron IMF Cluster Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Tier 2-3 city engagement is one of several routes within Patron's IMF cluster. Sister pages cover entity setup, IRDAI registration, ongoing compliance, and other persona / geographic verticals.</p>
              <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Patron IMF Cluster Services</div>
                <div class="pa-block-sub">End-to-end support across the IMF engagement lifecycle</div>
                <div class="pa-cross-grid">
                    <a href="/insurance-marketing-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">IMF Registration Hub</div><div class="pa-card-sub">Parent service</div></div></a>
                    <a href="/imf-incorporation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">IMF Incorporation</div><div class="pa-card-sub">Combined setup</div></div></a>
                    <a href="/imf-irdai-registration-process" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">IRDAI Registration</div><div class="pa-card-sub">Standalone process</div></div></a>
                    <a href="/ismp-certification-isp-appointment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">ISMP and ISP</div><div class="pa-card-sub">PO + ISP coordination</div></div></a>
                    <a href="/imf-compliance-retainer-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Compliance Retainer</div><div class="pa-card-sub">Annual ongoing</div></div></a>
                    <a href="/imf-for-bank-employees-retirees" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Bank Retirees</div><div class="pa-card-sub">Post-retirement</div></div></a>
                    <a href="/imf-for-insurance-agents" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="8" r="3"/><path d="M5 21v-1a7 7 0 0114 0v1"/></svg></div><div><div class="pa-card-title">Insurance Agents</div><div class="pa-card-sub">LIC + private</div></div></a>
                    <a href="/imf-private-limited-vs-llp" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11H3v10h6V11zM21 3h-6v18h6V3zM15 7H9v14h6V7z"/></svg></div><div><div class="pa-card-title">Pvt Ltd vs LLP</div><div class="pa-card-sub">Entity decision</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices (Plus Pan-India Remote)</div>
                <div class="pa-block-sub">4-office network with pan-India remote engagement for Tier 2-3 city and rural clients</div>
                <div class="pa-city-grid">
                    <a href="/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 2 - 3 months) and immediately on IRDAI Rural Sector Obligation amendments, B30 framework updates, government scheme premium revisions (PMSBY / PMJJBY / APY), MSME threshold changes, and IMF Regulations amendments affecting single-district or multi-district routes.</p>
        </div>
    </div>
</section>


</main>








<!-- Google Maps Places Library (for GMB reviews) -->




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