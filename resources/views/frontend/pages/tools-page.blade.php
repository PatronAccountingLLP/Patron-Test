@extends('layouts.app')
@section('title', 'Free Online Calculators & Tools | GST, Tax, EMI, SIP & More | Patron Accounting')
    
@push('styles')

    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="description" content="57 Free Online Calculators & Tools by Patron Accounting — GST Calculator, Income Tax Calculator, EMI Calculator, SIP Calculator, CTC to In-Hand Salary & more. 100% Free. No signup required.">
    <link rel="canonical" href="/tools">
    <link rel="alternate" hreflang="en-in" href="/tools">
    {{-- <title></title> --}}
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Open Graph -->
    <meta property="og:title" content="57 Free Online Calculators & Tools | GST, Tax, EMI, SIP & More | Patron Accounting">
    <meta property="og:description" content="57 Free Online Calculators & Tools by Patron Accounting — GST Calculator, Income Tax Calculator, EMI Calculator, SIP Calculator, CTC to In-Hand Salary & more. 100% Free. No signup required.">
    <meta property="og:url" content="/tools">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/images/site-logo.svg">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Schema Markup: Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Patron Accounting",
        "url": "/",
        "logo": "/images/site-logo.svg",
        "description": "Chartered Accountancy firm offering accounting, tax, compliance & registration services across India.",
        "founder": {
            "@type": "Person",
            "name": "CA Sundram Gupta",
            "jobTitle": "Chartered Accountant"
        },
        "sameAs": [
            "https://www.linkedin.com/company/patron-accounting",
            "https://www.facebook.com/patronaccounting"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "200",
            "bestRating": "5"
        }
    }
    </script>

    <!-- Schema Markup: BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Free Online Tools", "item": "/tools" }
        ]
    }
    </script>

    <!-- Schema Markup: ItemList (Top Tools) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Free Online Calculators & Tools by Patron Accounting",
        "description": "57 free online tools for GST, tax, payroll, finance, and business compliance calculations",
        "numberOfItems": 57,
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Income Tax Calculator", "url": "/tools/income-tax-calculator" },
            { "@type": "ListItem", "position": 2, "name": "GST Calculator", "url": "/tools/gst-calculator" },
            { "@type": "ListItem", "position": 3, "name": "EMI Calculator", "url": "/tools/emi-calculator" },
            { "@type": "ListItem", "position": 4, "name": "SIP Calculator", "url": "/tools/sip-calculator" },
            { "@type": "ListItem", "position": 5, "name": "CTC to In-Hand Salary Calculator", "url": "/tools/ctc-to-in-hand-salary-calculator" },
            { "@type": "ListItem", "position": 6, "name": "HSN/SAC Code Finder", "url": "/tools/hsn-sac-code-finder" },
            { "@type": "ListItem", "position": 7, "name": "TDS Rate Finder & Calculator", "url": "/tools/tds-rate-finder-calculator" },
            { "@type": "ListItem", "position": 8, "name": "GST Return Due Date Tracker", "url": "/tools/gst-return-due-date-tracker" }
        ]
    }
    </script>

    <!-- Schema Markup: WebApplication -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Patron Accounting Free Online Tools",
        "url": "/tools",
        "applicationCategory": "FinanceApplication",
        "operatingSystem": "Any",
        "datePublished": "2025-01-01",
        "dateModified": "2026-02-27",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "INR"
        },
        "featureList": ["GST Calculator", "Income Tax Calculator", "EMI Calculator", "SIP Calculator", "CTC to In-Hand Salary Calculator", "TDS Rate Finder", "HSN/SAC Code Finder", "EPF Calculator", "Gratuity Calculator", "HRA Exemption Calculator"],
        "provider": {
            "@type": "ProfessionalService",
            "name": "Patron Accounting",
            "url": "/"
        }
    }
    </script>

    <!-- Schema Markup: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the best free GST calculator for India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Patron Accounting offers a free GST calculator that instantly computes CGST, SGST, and IGST for any amount. Built and verified by ICAI-registered Chartered Accountants, it supports all GST rates (5%, 12%, 18%, 28%) and is updated for the latest GST notifications. No signup required."
                }
            },
            {
                "@type": "Question",
                "name": "How to calculate income tax online for FY 2025-26?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Use Patron Accounting's free Income Tax Calculator to compute your tax liability under both Old and New tax regimes for FY 2025-26. Enter your salary, deductions under Section 80C/80D, HRA exemption, and other income to get an instant tax breakdown with slab-wise calculation."
                }
            },
            {
                "@type": "Question",
                "name": "How to convert CTC to in-hand salary?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "CTC (Cost to Company) includes basic salary, HRA, EPF employer contribution, gratuity, and other allowances. To calculate your in-hand salary, subtract EPF employee contribution (12% of basic), professional tax, income tax (TDS), and any other deductions from the gross salary component. Patron Accounting's free CTC to In-Hand Salary Calculator does this instantly."
                }
            },
            {
                "@type": "Question",
                "name": "What are the GST return filing due dates for 2025-26?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "GSTR-1 is due on the 11th of each month (13th for QRMP). GSTR-3B is due on the 20th of each month (22nd/24th for QRMP depending on state). GSTR-9 annual return is due on 31st December. Use Patron Accounting's free GST Return Due Date Tracker to see all deadlines with live countdown timers and late fee calculations."
                }
            },
            {
                "@type": "Question",
                "name": "How to calculate EPF balance and contributions online?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "EPF contribution is 12% of basic salary from both employer and employee. The current EPF interest rate for FY 2025-26 is 8.25%. Use Patron Accounting's free EPF Calculator to compute monthly contributions, yearly interest, and projected retirement corpus based on your basic salary and years of service."
                }
            },
            {
                "@type": "Question",
                "name": "Are online tax calculators accurate?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Online tax calculators are accurate when they are updated with the latest budget changes and tax rules. All 57 tools on Patron Accounting are verified by ICAI-registered Chartered Accountants and updated after every Union Budget and GST Council notification to ensure accuracy under current Indian tax laws."
                }
            }
        ]
    }
    </script>

    <style>
        /* ============================================
           CSS VARIABLES (Patron Design System)
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
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
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
        a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        a:hover { color: var(--orange-dark); }

        /* ============================================
           BREADCRUMB
           ============================================ */
        .breadcrumb-nav {
            background: var(--gray-50);
            border-bottom: 1px solid var(--gray-200);
            padding: 10px 16px;
        }
        .breadcrumb-nav ol {
            display: flex; align-items: center; gap: 8px;
            list-style: none; padding: 0; margin: 0;
            font-size: 13px; max-width: 1320px; margin: 0 auto;
        }
        .breadcrumb-nav li { display: flex; align-items: center; gap: 8px; }
        .breadcrumb-nav a {
            color: var(--text-muted); text-decoration: none;
            font-weight: 500; transition: color 0.2s;
        }
        .breadcrumb-nav a:hover { color: var(--orange); }

        /* ============================================
           HERO SECTION
           ============================================ */
        .tools-hero {
            background: linear-gradient(180deg, var(--cream) 0%, var(--white) 60%);
            padding: 64px 32px 48px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .tools-hero::before {
            content: '';
            position: absolute;
            top: -120px; right: -120px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(232,113,44,0.06) 0%, transparent 70%);
            border-radius: 50%;
        }
        .tools-hero::after {
            content: '';
            position: absolute;
            bottom: -80px; left: -80px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(27,54,93,0.04) 0%, transparent 70%);
            border-radius: 50%;
        }
        .hero-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600;
            color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }
        .tools-hero h1 {
            font-family: 'Barlow', sans-serif;
            font-weight: 800;
            font-size: clamp(32px, 5vw, 52px);
            line-height: 1.1;
            color: var(--blue);
            margin-bottom: 16px;
        }
        .tools-hero h1 span { color: var(--orange); }
        .hero-subtitle {
            font-size: 17px;
            color: var(--text-secondary);
            max-width: 640px;
            margin: 0 auto 32px;
            line-height: 1.6;
        }

        /* Search Bar */
        .search-container {
            max-width: 580px;
            margin: 0 auto 40px;
            position: relative;
        }
        .search-input {
            width: 100%;
            padding: 16px 24px 16px 52px;
            font-family: 'Barlow', sans-serif;
            font-size: 16px;
            color: var(--text-primary);
            background: var(--white);
            border: 2px solid var(--gray-200);
            border-radius: 60px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
            -webkit-appearance: none;
            appearance: none;
        }
        .search-input::placeholder { color: var(--gray-400); }
        .search-input:focus {
            outline: none;
            border-color: var(--orange);
            box-shadow: 0 0 0 4px rgba(232,113,44,0.1), var(--shadow-lg);
        }
        .search-icon {
            position: absolute;
            left: 20px; top: 50%; transform: translateY(-50%);
            width: 20px; height: 20px; color: var(--gray-400);
            pointer-events: none;
        }
        .search-clear {
            position: absolute;
            right: 16px; top: 50%; transform: translateY(-50%);
            width: 28px; height: 28px;
            background: var(--gray-100);
            border: none; border-radius: 50%;
            display: none; align-items: center; justify-content: center;
            cursor: pointer; color: var(--gray-500); transition: all 0.2s;
        }
        .search-clear:hover { background: var(--gray-200); }
        .search-clear.visible { display: flex; }

        /* Hero Stats */
        .hero-stats {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }
        .hero-stat {
            display: flex; flex-direction: column; align-items: center;
        }
        .hero-stat-value {
            font-size: 28px; font-weight: 800; color: var(--blue);
        }
        .hero-stat-label {
            font-size: 13px; color: var(--text-muted); font-weight: 500;
        }
        .hero-stat-divider {
            width: 1px; height: 40px; background: var(--gray-200);
        }

        /* ============================================
           CATEGORY NAVIGATION
           ============================================ */
        .category-nav {
            position: -webkit-sticky;
            position: sticky; top:100px;z-index:100;
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
            padding: 0 32px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .category-nav-inner {
            max-width: 1320px;
            margin: 0 auto;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            padding: 12px 0;
        }
        .category-nav-inner::-webkit-scrollbar { display: none; }
        .cat-btn {
            display: -webkit-inline-flex;
            display: inline-flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 10px 20px;
            margin-right: 6px;
            font-family: 'Barlow', sans-serif;
            font-size: 13px; font-weight: 600;
            color: var(--text-secondary);
            background: var(--white);
            border: 1.5px solid var(--gray-200);
            border-radius: 50px;
            cursor: pointer;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
            white-space: nowrap;
            text-decoration: none;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            -webkit-user-select: none;
            user-select: none;
            touch-action: manipulation;
        }
        .cat-btn svg { width: 16px; height: 16px; margin-right: 8px; }
        .cat-btn:hover {
            border-color: var(--orange);
            color: var(--orange);
            background: var(--orange-lighter);
        }
        .cat-btn.active {
            background: var(--orange);
            border-color: var(--orange);
            color: var(--white);
        }
        .cat-btn.active:hover {
            background: var(--orange-dark);
            border-color: var(--orange-dark);
        }
        .cat-btn .cat-count {
            font-size: 11px;
            background: rgba(0,0,0,0.08);
            padding: 2px 8px;
            border-radius: 20px;
            font-weight: 700;
            margin-left: 8px;
        }
        .cat-btn.active .cat-count {
            background: rgba(255,255,255,0.25);
        }

        /* ============================================
           TOOLS GRID
           ============================================ */
        .tools-section {
            padding: 48px 32px 64px;
            background: var(--gray-50);
            min-height: 600px;
        }
        .tools-container {
            max-width: 1320px;
            margin: 0 auto;
        }

        /* Category Header */
        .category-block {
            margin-bottom: 56px;
            -webkit-animation: fadeInUp 0.4s ease forwards;
            animation: fadeInUp 0.4s ease forwards;
            opacity: 1; /* Fallback — ensure visible even if animation fails */
        }
        .category-header {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 28px;
            padding-bottom: 16px;
            border-bottom: 2px solid var(--gray-200);
        }
        .category-header > * + * {
            margin-left: 14px;
        }
        .category-icon-wrap {
            width: 48px; height: 48px;
            border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .category-icon-wrap svg { width: 24px; height: 24px; color: var(--white); }
        .category-meta h2 {
            font-size: 22px; font-weight: 800;
            color: var(--blue); margin-bottom: 2px;
        }
        .category-meta p {
            font-size: 13px; color: var(--text-muted); margin: 0;
        }
        .category-tool-count {
            margin-left: auto;
            font-size: 12px; font-weight: 700;
            color: var(--text-muted);
            background: var(--gray-100);
            padding: 4px 12px;
            border-radius: 20px;
        }

        /* Tool Cards */
        .tools-grid {
            display: -ms-grid;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            grid-gap: 20px;
            gap: 20px;
        }
        .tool-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }
        .tool-card:hover {
            border-color: var(--orange);
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
            text-decoration: none;
        }
        .tool-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--orange);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .tool-card:hover::after {
            transform: scaleX(1);
        }

        .tool-card-header {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 14px;
        }
        .tool-icon {
            width: 44px; height: 44px;
            border-radius: var(--radius-sm);
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .tool-icon svg { width: 22px; height: 22px; }
        .tool-name {
            font-size: 16px; font-weight: 700;
            color: var(--blue);
            line-height: 1.3;
            flex: 1;
        }
        .tool-priority {
            font-size: 10px; font-weight: 700;
            padding: 3px 8px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            flex-shrink: 0;
        }
        .tool-priority.high { background: #DCFCE7; color: #166534; }
        .tool-priority.medium { background: #FEF3C7; color: #92400E; }
        .tool-priority.low { background: var(--gray-100); color: var(--gray-600); }

        .tool-keywords {
            display: flex; flex-wrap: wrap; gap: 6px;
            margin-bottom: 14px;
        }
        .tool-keyword {
            font-size: 11px; font-weight: 500;
            color: var(--text-muted);
            background: var(--gray-50);
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid var(--gray-100);
        }

        .tool-footer {
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid var(--gray-100);
        }
        .tool-searches {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 4px;
        }
        .tool-searches svg { width: 14px; height: 14px; color: var(--green); }
        .tool-searches strong { color: var(--text-primary); font-weight: 700; }
        .tool-cta-arrow {
            width: 32px; height: 32px;
            background: var(--orange-light);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: all 0.2s;
        }
        .tool-cta-arrow svg { width: 14px; height: 14px; color: var(--orange); }
        .tool-card:hover .tool-cta-arrow {
            background: var(--orange);
        }
        .tool-card:hover .tool-cta-arrow svg { color: var(--white); }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 80px 20px;
            display: none;
        }
        .no-results.visible { display: block; }
        .no-results svg { width: 64px; height: 64px; color: var(--gray-300); margin-bottom: 16px; }
        .no-results h3 { font-size: 20px; color: var(--text-primary); margin-bottom: 8px; }
        .no-results p { font-size: 14px; color: var(--text-muted); }

        /* ============================================
           MID CTA SECTION
           ============================================ */
        .mid-cta {
            padding: 56px 32px;
            background: linear-gradient(135deg, var(--blue) 0%, #0F2440 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .mid-cta::before {
            content: '';
            position: absolute;
            top: -50%; right: -20%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(232,113,44,0.12) 0%, transparent 60%);
            border-radius: 50%;
        }
        .mid-cta-inner {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .mid-cta h2 {
            color: var(--white);
            font-size: clamp(24px, 3vw, 32px);
            margin-bottom: 12px;
        }
        .mid-cta p {
            color: rgba(255,255,255,0.7);
            font-size: 15px;
            margin-bottom: 28px;
        }
        .mid-cta-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .btn-cta-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 28px;
            font-family: 'Barlow', sans-serif;
            font-size: 15px; font-weight: 700;
            color: var(--white);
            background: var(--orange);
            border: none; border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease;
            text-decoration: none;
        }
        .btn-cta-primary:hover {
            background: var(--orange-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(232,113,44,0.35);
            color: var(--white);
        }
        .btn-cta-primary svg { width: 16px; height: 16px; }
        .btn-cta-secondary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 28px;
            font-family: 'Barlow', sans-serif;
            font-size: 15px; font-weight: 700;
            color: var(--white);
            background: transparent;
            border: 1.5px solid rgba(255,255,255,0.3);
            border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease;
            text-decoration: none;
        }
        .btn-cta-secondary:hover {
            border-color: var(--white);
            background: rgba(255,255,255,0.08);
            color: var(--white);
        }
        .btn-cta-secondary svg { width: 18px; height: 18px; }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar {
            background: var(--white);
            border-top: 1px solid var(--gray-200);
            border-bottom: 1px solid var(--gray-200);
            padding: 24px 32px;
        }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; align-items: center; justify-content: center;
            flex-wrap: wrap; gap: 40px;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 42px; height: 42px;
            background: var(--orange-light); border-radius: var(--radius-sm);
            display: flex; align-items: center; justify-content: center;
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 18px; font-weight: 800; color: var(--blue); }
        .stat-label { font-size: 12px; color: var(--text-muted); }

        /* ============================================
           WHY USE SECTION
           ============================================ */
        .why-section {
            padding: 72px 32px;
            background: var(--white);
        }
        .why-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .why-header {
            text-align: center;
            margin-bottom: 48px;
        }
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .why-card {
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: all 0.25s ease;
        }
        .why-card:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--orange);
            transform: translateY(-2px);
        }
        .why-icon {
            width: 52px; height: 52px;
            background: var(--orange-light);
            border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 18px;
        }
        .why-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .why-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; margin-top: 0; }
        .why-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        /* ============================================
           OFFICE LOCATIONS FOOTER STRIP
           ============================================ */
        .office-locations-strip {
            background: var(--blue); padding: 20px 32px;
            border-top: 3px solid var(--orange);
        }
        .office-locations-strip .ols-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; align-items: center; justify-content: center;
            gap: 16px; flex-wrap: wrap;
        }
        .office-locations-strip .ols-label {
            font-size: 13px; font-weight: 700; color: white;
            text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0;
        }
        .office-locations-strip .ols-offices { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
        .office-locations-strip .ols-office {
            display: flex; align-items: center; gap: 6px;
            color: rgba(255,255,255,0.85); font-size: 13px; font-weight: 500;
            cursor: pointer; transition: color 0.2s; text-decoration: none;
        }
        .office-locations-strip .ols-office:hover { color: var(--orange); }
        .office-locations-strip .ols-office svg { width: 14px; height: 14px; color: var(--orange); flex-shrink: 0; }
        .office-locations-strip .ols-trust-link {
            margin-left: auto;
            display: flex; align-items: center; gap: 6px;
            color: var(--orange); font-size: 13px; font-weight: 600;
            text-decoration: none; transition: all 0.2s;
        }
        .office-locations-strip .ols-trust-link:hover { color: white; }
        .office-locations-strip .ols-trust-link svg { width: 14px; height: 14px; }

        /* ============================================
           WHATSAPP STICKY BAR
           ============================================ */
        .whatsapp-sticky {
            position: fixed;
            bottom: 24px; right: 24px;
            z-index: 9999;
            display: flex; flex-direction: column;
            align-items: flex-end; gap: 10px;
        }
        .wa-btn {
            width: 56px; height: 56px;
            background: #25D366;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 6px 20px rgba(37,211,102,0.4);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .wa-btn:hover { transform: scale(1.1); box-shadow: 0 8px 28px rgba(37,211,102,0.5); }
        .wa-btn svg { width: 28px; height: 28px; color: var(--white); fill: var(--white); }

        /* ============================================
           ANIMATIONS
           ============================================ */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .why-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-stats { gap: 24px; }
        }
        @media (max-width: 768px) {
            .tools-hero { padding: 40px 16px 32px; }
            .tools-section { padding: 32px 16px 48px; }
            .tools-grid { grid-template-columns: 1fr; }
            .category-nav { padding: 0 16px; }
            .hero-stats { flex-direction: column; gap: 12px; }
            .hero-stat-divider { width: 40px; height: 1px; }
            .why-grid { grid-template-columns: 1fr; }
            .mid-cta { padding: 40px 16px; }
            .mid-cta-buttons { flex-direction: column; width: 100%; }
            .btn-cta-primary, .btn-cta-secondary { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .office-locations-strip .ols-container { flex-direction: column; gap: 10px; }
            .office-locations-strip .ols-trust-link { margin-left: 0; }
            .category-header { flex-wrap: wrap; }
            .category-tool-count { margin-left: 0; }
        }

        /* ============================================
           FORM CARD (Consultation CTA)
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            -webkit-animation: fadeInForm 0.5s ease 0.2s forwards;
            animation: fadeInForm 0.5s ease 0.2s forwards;
            opacity: 1;
            margin: 0 auto;
        }
        @-webkit-keyframes fadeInForm { from { opacity: 0; -webkit-transform: translateY(16px); transform: translateY(16px); } to { opacity: 1; -webkit-transform: translateY(0); transform: translateY(0); } }
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
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 16px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
            -webkit-appearance: none; appearance: none;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 16px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .phone-group {
            display: -webkit-flex; display: flex; -webkit-align-items: stretch; align-items: stretch;
            background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }
        .country-code-dropdown {
            display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center;
            padding: 0 10px 0 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 100px; -webkit-user-select: none; user-select: none; -webkit-flex-shrink: 0; flex-shrink: 0; transition: background 0.15s;
        }
        .country-code-dropdown > * + * { margin-left: 5px; }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag { font-size: 20px; line-height: 1; }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { -webkit-transition: -webkit-transform 0.25s ease; transition: transform 0.25s ease; color: var(--gray-400); -webkit-flex-shrink: 0; flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { -webkit-transform: rotate(180deg); transform: rotate(180deg); }
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; -webkit-flex-direction: column; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: -webkit-flex; display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 16px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
            -webkit-appearance: none; appearance: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; -webkit-overflow-scrolling: touch; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option > * + * { margin-left: 10px; }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { -webkit-flex: 1; flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; -webkit-flex-shrink: 0; flex-shrink: 0; }
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; -webkit-transition: all 0.25s ease; transition: all 0.25s ease;
            display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center;
            -webkit-justify-content: center; justify-content: center; margin-top: 6px;
            -webkit-appearance: none; appearance: none; -webkit-tap-highlight-color: rgba(232,113,44,0.3);
            touch-action: manipulation;
        }
        .btn-submit > * + * { margin-left: 8px; }
        .btn-submit:hover { background: var(--orange-dark); -webkit-transform: translateY(-2px); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { -webkit-transform: translateY(0); transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; -webkit-transform: none; transform: none; box-shadow: none; }
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: -webkit-flex; display: flex; -webkit-justify-content: center; justify-content: center;
            margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer > * + * { margin-left: 16px; }
        .form-footer-item { display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); margin-right: 5px; }
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center; -webkit-justify-content: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        /* Consultation Form Section */
        .consultation-cta-section {
            padding: 56px 32px;
            background: var(--gray-50);
        }
        .consultation-cta-container {
            max-width: 1320px; margin: 0 auto;
            display: -ms-grid; display: -webkit-grid; display: grid;
            grid-template-columns: 1fr 1fr; grid-gap: 48px; gap: 48px;
            -webkit-align-items: center; align-items: center;
        }
        .consultation-cta-text h2 { margin-bottom: 16px; }
        .consultation-cta-text p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 24px; }
        .consultation-cta-features { list-style: none; padding: 0; margin: 0; }
        .consultation-cta-features li {
            display: -webkit-flex; display: flex; -webkit-align-items: center; align-items: center;
            font-size: 14px; color: var(--text-secondary);
            padding: 8px 0; font-weight: 500;
        }
        .consultation-cta-features li svg { width: 20px; height: 20px; color: var(--green); -webkit-flex-shrink: 0; flex-shrink: 0; margin-right: 10px; }

        @media (max-width: 768px) {
            .consultation-cta-section { padding: 40px 16px; }
            .consultation-cta-container { grid-template-columns: 1fr; grid-gap: 32px; gap: 32px; }
            .form-card { max-width: 100%; }
            .country-dropdown-list { width: 260px; }
            .form-footer { -webkit-flex-wrap: wrap; flex-wrap: wrap; }
            .form-footer > * + * { margin-left: 0; }
            .form-footer > * { margin-right: 10px; margin-bottom: 6px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }
        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
        }

        /* ============================================
           REVIEWS CTA BANNER
           ============================================ */
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
        .btn-cta-talk {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta-talk:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta-talk svg { width: 16px; height: 16px; }

        @media (max-width: 768px) {
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
        }

        /* ============================================
           WHATSAPP COMMUNITY STICKY BAR
           ============================================ */
        .whatsapp-sticky-bar {
            position: fixed; bottom: 0; left: 0; right: 0;
            background: #25D366; color: white;
            padding: 10px 20px;
            padding-bottom: calc(10px + env(safe-area-inset-bottom, 0px));
            display: flex; align-items: center; justify-content: center; gap: 12px;
            z-index: 999; box-shadow: 0 -4px 16px rgba(0,0,0,0.15);
            transform: translateY(100%);
            -webkit-transform: translateY(100%);
            animation: slideUpBar 0.5s ease 2s forwards;
            -webkit-animation: slideUpBar 0.5s ease 2s forwards;
        }
        @-webkit-keyframes slideUpBar { to { -webkit-transform: translateY(0); transform: translateY(0); } }
        @keyframes slideUpBar { to { -webkit-transform: translateY(0); transform: translateY(0); } }
        .whatsapp-sticky-bar .wsb-icon { width: 24px; height: 24px; flex-shrink: 0; }
        .whatsapp-sticky-bar .wsb-text { font-size: 14px; font-weight: 600; }
        .whatsapp-sticky-bar .wsb-text span { font-weight: 400; opacity: 0.9; }
        .whatsapp-sticky-bar .wsb-btn {
            background: white; color: #25D366; border: none; padding: 6px 18px;
            border-radius: 50px; font-size: 13px; font-weight: 700; cursor: pointer; transition: all 0.2s; text-decoration: none;
        }
        .whatsapp-sticky-bar .wsb-btn:hover { background: #f0f0f0; }
        .whatsapp-sticky-bar .wsb-close {
            background: none; border: none; color: white; font-size: 20px; cursor: pointer;
            padding: 0 4px; opacity: 0.7; transition: opacity 0.2s;
        }
        .whatsapp-sticky-bar .wsb-close:hover { opacity: 1; }
        @media (max-width: 576px) {
            .whatsapp-sticky-bar { padding: 8px 12px; padding-bottom: calc(8px + env(safe-area-inset-bottom, 0px)); gap: 8px; transform: translateY(0) !important; animation: none !important; }
            .whatsapp-sticky-bar .wsb-text { font-size: 12px; }
            .whatsapp-sticky-bar .wsb-text span { display: none; }
            .whatsapp-sticky-bar .wsb-close { display: none !important; }
        }

        /* ============================================
           CTA BLOCK DARK
           ============================================ */
        .cta-block-dark {
            padding: 64px 32px;
            background: linear-gradient(135deg, var(--blue) 0%, #0F2440 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cta-block-dark::before {
            content: '';
            position: absolute;
            top: -50%; right: -20%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(232,113,44,0.12) 0%, transparent 60%);
            border-radius: 50%;
        }
        .cta-block-dark-inner {
            max-width: 800px; margin: 0 auto; position: relative; z-index: 1;
        }
        .cta-block-dark h2 { color: var(--white); font-size: clamp(24px, 3vw, 32px); margin-bottom: 16px; }
        .cta-block-dark p { color: rgba(255,255,255,0.75); font-size: 15px; line-height: 1.7; margin-bottom: 28px; }
        .cta-block-dark-buttons {
            display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap;
        }
        .cta-block-dark-buttons a {
            display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px;
            border-radius: 50px; font-weight: 700; font-size: 15px; text-decoration: none; transition: all 0.25s;
        }
        .cta-block-dark-buttons .btn-call { background: var(--orange); color: #fff; }
        .cta-block-dark-buttons .btn-call:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .cta-block-dark-buttons .btn-wa { background: #25D366; color: #fff; }
        .cta-block-dark-buttons .btn-wa:hover { filter: brightness(1.1); transform: translateY(-2px); }
        .cta-block-dark-buttons .btn-email { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.3); }
        .cta-block-dark-buttons .btn-email:hover { border-color: #fff; background: rgba(255,255,255,0.08); }
        @media (max-width: 768px) {
            .cta-block-dark { padding: 32px 16px; }
            .cta-block-dark h2 { font-size: 20px; margin-bottom: 10px; }
            .cta-block-dark p { font-size: 13px; margin-bottom: 20px; display: none; }
            .cta-block-dark-buttons { flex-direction: column; width: 100%; }
            .cta-block-dark-buttons a { width: 100%; justify-content: center; padding: 12px 20px; font-size: 14px; }
        }

        /* ============================================
           TESTIMONIALS SECTION (Pure CSS Infinite Scroll)
           ============================================ */
        .testimonials-section {
            padding: 72px 32px; background: var(--white); overflow: hidden;
        }
        .testimonials-container { max-width: 1320px; margin: 0 auto; }
        .testimonials-header { text-align: center; margin-bottom: 40px; }
        .testimonials-header h2 { font-size: clamp(26px, 3.5vw, 34px); font-weight: 800; color: var(--blue); margin-bottom: 10px; }
        .testimonials-header p { font-size: 15px; color: var(--text-muted); }

        /* Infinite scroll track */
        .testi-scroll-wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        .testi-scroll-track {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            width: -webkit-fit-content;
            width: fit-content;
            will-change: transform;
            -webkit-animation: testiScroll 45s linear infinite;
            animation: testiScroll 45s linear infinite;
        }
        .testi-scroll-track .testi-quote-card {
            margin-right: 20px;
        }
        .testi-scroll-track:hover {
            -webkit-animation-play-state: paused;
            animation-play-state: paused;
        }
        @-webkit-keyframes testiScroll {
            from { -webkit-transform: translate3d(0, 0, 0); }
            to { -webkit-transform: translate3d(-50%, 0, 0); }
        }
        @keyframes testiScroll {
            from { transform: translate3d(0, 0, 0); }
            to { transform: translate3d(-50%, 0, 0); }
        }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white); border: 1px solid var(--gray-200); border-radius: var(--radius-lg);
            padding: 24px; width: 340px; min-width: 340px; height: 320px;
            display: flex; flex-direction: column; justify-content: space-between;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
            flex-shrink: 0;
            -webkit-transform: translateZ(0); transform: translateZ(0);
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px; line-height: 1.65; color: var(--text-secondary); flex: 1;
            display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;
        }
        .testi-footer { display: flex; flex-direction: column; gap: 8px; padding-top: 16px; border-top: 1px solid var(--gray-100); }
        .testi-author { display: flex; align-items: center; gap: 10px; }
        .testi-avatar {
            width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 14px; font-weight: 700; color: var(--white); flex-shrink: 0; overflow: hidden; background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row { display: flex; align-items: center; justify-content: space-between; }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        @media (max-width: 768px) {
            .testimonials-section { padding: 48px 16px; }
            .testi-quote-card { width: 290px; min-width: 290px; height: 300px; }
            .testi-scroll-track { -webkit-animation-duration: 30s; animation-duration: 30s; }
            .testi-scroll-track .testi-quote-card { margin-right: 14px; }
        }
        @media (max-width: 480px) {
            .testi-quote-card { width: 260px; min-width: 260px; }
        }

        /* Smooth scroll offset */
        [id] { scroll-margin-top: 70px; }

        /* Category Colors */
        .cat-accounting { background: #1B365D; }
        .cat-payroll { background: #059669; }
        .cat-gst { background: #D97706; }
        .cat-finance { background: #7C3AED; }
        .cat-compliance { background: #DC2626; }
        .cat-traffic { background: #0891B2; }

        .tool-icon.cat-accounting { background: #EEF2F7; }
        .tool-icon.cat-accounting svg { color: #1B365D; }
        .tool-icon.cat-payroll { background: #D1FAE5; }
        .tool-icon.cat-payroll svg { color: #059669; }
        .tool-icon.cat-gst { background: #FEF3C7; }
        .tool-icon.cat-gst svg { color: #D97706; }
        .tool-icon.cat-finance { background: #EDE9FE; }
        .tool-icon.cat-finance svg { color: #7C3AED; }
        .tool-icon.cat-compliance { background: #FEE2E2; }
        .tool-icon.cat-compliance svg { color: #DC2626; }
        .tool-icon.cat-traffic { background: #CFFAFE; }
        .tool-icon.cat-traffic svg { color: #0891B2; }
        /* ============================================
           iOS / SAFARI COMPATIBILITY FIXES
           ============================================ */

        /* Subtle tap highlight for interactive elements */
        a, input, select, textarea, .tool-card, .why-card {
            -webkit-tap-highlight-color: rgba(232,113,44,0.1);
        }
        /* Buttons get immediate visual feedback */
        button, .cat-btn, .btn-submit, .btn-cta-primary {
            -webkit-tap-highlight-color: rgba(232,113,44,0.2);
        }

        /* Fix iOS Safari 100vh issue (address bar) */
        @supports (-webkit-touch-callout: none) {
            .tools-hero {
                min-height: -webkit-fill-available;
            }
        }

        /* iOS Safari: Fix sticky positioning */
        @supports (-webkit-overflow-scrolling: touch) {
            .category-nav {
                position: -webkit-sticky;
                position: sticky;
            }
        }

        /* Fix iOS Safari border-radius + overflow clipping */
        .tool-card, .testi-quote-card, .testi-video-card, .form-card, .why-card {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        /* Fix iOS button styling override */
        .btn-submit, .btn-cta-primary, .btn-cta-secondary, .btn-cta-talk,
        .cat-btn, .search-clear, .wsb-btn, .wsb-close {
            -webkit-appearance: none;
            appearance: none;
        }

        /* iOS: Prevent auto-zoom on input focus (must be 16px+) */
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            input[type="text"], input[type="tel"], input[type="email"],
            input[type="number"], select, textarea {
                font-size: 16px !important;
            }
        }

        /* iOS: Fix flexbox gap fallback for older Safari versions */
        @supports not (gap: 1px) {
            .hero-stats > * + * { margin-left: 40px; }
            .mid-cta-buttons > * + * { margin-left: 14px; }
            .cta-block-dark-buttons > * + * { margin-left: 14px; }
            .stats-container > * + * { margin-left: 40px; }
            .ols-offices > * + * { margin-left: 24px; }
        }

        /* iOS: Fix safe area for bottom-fixed elements */
        @supports (padding-bottom: env(safe-area-inset-bottom)) {
            .whatsapp-sticky-bar {
                padding-bottom: calc(10px + env(safe-area-inset-bottom));
            }
            .office-locations-strip {
                padding-bottom: calc(20px + env(safe-area-inset-bottom));
            }
        }

        /* iOS: Smooth momentum scrolling for overflow containers */
        .category-nav-inner,
        .country-options,
        .tools-container {
            -webkit-overflow-scrolling: touch;
        }

        /* iOS: Fix transform animations for better performance */
        .tool-card, .why-card, .btn-submit, .btn-cta-primary {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        /* iOS: Fix fadeInUp animation with webkit prefix */
        @-webkit-keyframes fadeInUp {
            from { opacity: 0; -webkit-transform: translateY(20px); transform: translateY(20px); }
            to { opacity: 1; -webkit-transform: translateY(0); transform: translateY(0); }
        }
        @-webkit-keyframes fadeInForm {
            from { opacity: 0; -webkit-transform: translateY(16px); transform: translateY(16px); }
            to { opacity: 1; -webkit-transform: translateY(0); transform: translateY(0); }
        }
        @-webkit-keyframes spin { to { -webkit-transform: rotate(360deg); transform: rotate(360deg); } }

    </style>
@endpush
@section('content')
<main>

<!-- ========================================
     BREADCRUMB NAVIGATION
     ======================================== -->


<!-- ========================================
     HERO SECTION
     ======================================== -->
<section class="tools-hero">
    <div class="hero-container">
        <div class="hero-badge">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            100% Free &bull; No Signup Required
        </div>

        <h1>Free Online <span>Calculators</span> &amp; Tools</h1>

        <p class="hero-subtitle">
            57 powerful tools for GST, Income Tax, Payroll, Finance &amp; Business Compliance — built by Chartered Accountants, trusted by 25,000+ businesses across India.
        </p>

        <!-- Search Bar -->
        <div class="search-container">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
            <input type="text" class="search-input" id="toolSearch" placeholder="Search tools... e.g. GST Calculator, EMI, TDS, SIP" autocomplete="off">
            <button class="search-clear" id="searchClear" onclick="clearSearch()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Stats -->
        <div class="hero-stats">
            <div class="hero-stat">
                <span class="hero-stat-value">57</span>
                <span class="hero-stat-label">Free Tools</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
                <span class="hero-stat-value">6</span>
                <span class="hero-stat-label">Categories</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
                <span class="hero-stat-value">FY 2025-26</span>
                <span class="hero-stat-label">Updated Rates</span>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat">
                <span class="hero-stat-value">CA Verified</span>
                <span class="hero-stat-label">Accuracy Guaranteed</span>
            </div>
        </div>
        <p style="text-align:center;font-size:12px;color:rgba(255,255,255,0.5);margin-top:20px;margin-bottom:0;">All tools updated for Union Budget 2025-26 &amp; latest GST Council notifications &bull; Last reviewed: February 2026</p>
    </div>
</section>
     
<div class="category-nav" id="categoryNav">
    <div class="category-nav-inner">
        <button class="cat-btn active" data-category="all" onclick="filterCategory('all', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            All Tools <span class="cat-count">57</span>
        </button>
        <button class="cat-btn" data-category="accounting" onclick="filterCategory('accounting', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7V4h16v3M9 20h6M12 4v16"/></svg>
            Accounting <span class="cat-count">10</span>
        </button>
        <button class="cat-btn" data-category="payroll" onclick="filterCategory('payroll', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            Payroll <span class="cat-count">10</span>
        </button>
        <button class="cat-btn" data-category="gst" onclick="filterCategory('gst', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
            GST Compliance <span class="cat-count">10</span>
        </button>
        <button class="cat-btn" data-category="finance" onclick="filterCategory('finance', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
            Finance <span class="cat-count">12</span>
        </button>
        <button class="cat-btn" data-category="compliance" onclick="filterCategory('compliance', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            Compliance <span class="cat-count">8</span>
        </button>
        <button class="cat-btn" data-category="traffic" onclick="filterCategory('traffic', this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Utility Tools <span class="cat-count">7</span>
        </button>
    </div>
</div>

<!-- ========================================
     TOOLS GRID
     ======================================== -->
<section class="tools-section" id="toolsSection">
    <div class="tools-container" id="toolsContainer">
<div class="category-block" id="cat-accounting">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#1B365D"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7V4h16v3M9 20h6M12 4v16"/></svg></div>
    <div class="category-meta"><h2>Zoho Books / Accounting Tools</h2><p>For SMEs, Startups & Freelancers</p></div>
    <span class="category-tool-count">10 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/gst-calculator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate GST amount, CGST, SGST & IGST instantly for any value</p>
      <div class="tool-keywords"><span class="tool-keyword">gst calculator</span><span class="tool-keyword">gst calculation online</span><span class="tool-keyword">calculate gst</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>2,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/hsn-sac-code-finder" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">HSN/SAC Code Finder</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Search and find HSN/SAC codes for goods and services</p>
      <div class="tool-keywords"><span class="tool-keyword">hsn code finder</span><span class="tool-keyword">sac code search</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>1,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/tds-rate-finder-calculator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">TDS Rate Finder & Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Find TDS rates and calculate TDS deductions for all sections</p>
      <div class="tool-keywords"><span class="tool-keyword">tds calculator</span><span class="tool-keyword">tds rate finder</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>80,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-invoice-generator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Invoice Generator (GST Compliant)</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Generate GST-compliant invoices with auto tax calculation</p>
      <div class="tool-keywords"><span class="tool-keyword">free invoice generator</span><span class="tool-keyword">gst invoice maker</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/e-way-bill-calculator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">E-Way Bill Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate e-way bill requirements based on goods value and distance</p>
      <div class="tool-keywords"><span class="tool-keyword">e-way bill calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>20,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/profit-loss-generator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Profit & Loss Statement Generator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Create professional P&L statements with automatic calculations</p>
      <div class="tool-keywords"><span class="tool-keyword">profit loss calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>15,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/accounting-software-comparison" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Accounting Software Comparison Tool</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Compare Zoho Books, Tally, QuickBooks and other Indian accounting software</p>
      <div class="tool-keywords"><span class="tool-keyword">zoho books vs tally</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>10,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/zoho-books-pricing-calculator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Zoho Books Pricing Calculator</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Estimate your Zoho Books subscription cost based on your needs</p>
      <div class="tool-keywords"><span class="tool-keyword">zoho books pricing</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>5,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/balance-sheet-generator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Balance Sheet Generator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Generate a formatted balance sheet with auto-balancing</p>
      <div class="tool-keywords"><span class="tool-keyword">balance sheet format</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>15,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/cash-flow-calculator" class="tool-card" data-category="accounting">
      <div class="tool-card-header"><div class="tool-icon cat-accounting"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Cash Flow Statement Calculator</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate and project cash flows with operating, investing & financing activities</p>
      <div class="tool-keywords"><span class="tool-keyword">cash flow statement format</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>8,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
<div class="category-block" id="cat-payroll">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#059669"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
    <div class="category-meta"><h2>Payroll Services Tools</h2><p>For HR Managers, Business Owners & Employees</p></div>
    <span class="category-tool-count">10 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/ctc-to-in-hand-salary-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">CTC to In-Hand Salary Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Convert CTC to in-hand salary with all deductions breakdown</p>
      <div class="tool-keywords"><span class="tool-keyword">ctc to in hand salary</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>1,50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/epf-pf-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">EPF/PF Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate EPF contributions, interest & retirement corpus</p>
      <div class="tool-keywords"><span class="tool-keyword">epf calculator</span><span class="tool-keyword">pf calculator online</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>80,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gratuity-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Gratuity Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate gratuity payable under the Payment of Gratuity Act</p>
      <div class="tool-keywords"><span class="tool-keyword">gratuity calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>60,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/hra-exemption-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">HRA Exemption Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate HRA exemption under Section 10(13A) for tax savings</p>
      <div class="tool-keywords"><span class="tool-keyword">hra calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/professional-tax-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Professional Tax Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">State-wise professional tax calculation for all Indian states</p>
      <div class="tool-keywords"><span class="tool-keyword">professional tax calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>30,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/esi-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">ESI Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate ESI employer and employee contributions</p>
      <div class="tool-keywords"><span class="tool-keyword">esi calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>20,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/payroll-cost-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Payroll Cost Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate total cost of hiring an employee including all statutory costs</p>
      <div class="tool-keywords"><span class="tool-keyword">payroll cost calculator india</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>10,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/bonus-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Bonus Calculator (Payment of Bonus Act)</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate statutory bonus payable under the Payment of Bonus Act</p>
      <div class="tool-keywords"><span class="tool-keyword">statutory bonus calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>15,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/leave-encashment-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Leave Encashment Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate leave encashment amount and tax implications</p>
      <div class="tool-keywords"><span class="tool-keyword">leave encashment calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>12,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/tds-on-salary-calculator" class="tool-card" data-category="payroll">
      <div class="tool-card-header"><div class="tool-icon cat-payroll"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">TDS on Salary Calculator (Section 192)</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate TDS to be deducted on salary under Section 192</p>
      <div class="tool-keywords"><span class="tool-keyword">tds on salary calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
<div class="category-block" id="cat-gst">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#D97706"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
    <div class="category-meta"><h2>GST / GSTAT Compliance Tools</h2><p>For Businesses, CAs & Tax Consultants</p></div>
    <span class="category-tool-count">10 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/gst-return-due-date-tracker" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Return Due Date Tracker</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Track all GSTR filing due dates with reminders and alerts</p>
      <div class="tool-keywords"><span class="tool-keyword">gst return due date</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>1,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-late-fee-calculator" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Late Fee & Interest Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate GST late fee and interest for delayed filings</p>
      <div class="tool-keywords"><span class="tool-keyword">gst late fee calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-registration-eligibility-checker" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Registration Eligibility Checker</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check if you need GST registration based on turnover and business type</p>
      <div class="tool-keywords"><span class="tool-keyword">gst registration limit</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-composition-scheme-eligibility" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Composition Scheme Eligibility</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check eligibility and benefits of GST Composition Scheme</p>
      <div class="tool-keywords"><span class="tool-keyword">composition scheme eligibility</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>15,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/rcm-calculator" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Reverse Charge Mechanism (RCM) Checker</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check if reverse charge applies to your goods or services</p>
      <div class="tool-keywords"><span class="tool-keyword">rcm under gst</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>20,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gstr-9-annual-return-checklist" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Annual Return (GSTR-9) Checklist</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Pre-filing checklist for GSTR-9 annual return</p>
      <div class="tool-keywords"><span class="tool-keyword">gstr 9 checklist</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>12,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gstr-2a-vs-3b-reconciliation" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">E-Invoice Applicability Checker</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">GSTR-2A vs 3B Reconciliation Tool</p>
      <div class="tool-keywords"><span class="tool-keyword">GSTR-2A vs 3B Reconciliation Tool</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>30,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-penalty-calculator" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GSTAT Appeal Fee Calculator</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">GST Penalty Calculator</p>
      <div class="tool-keywords"><span class="tool-keyword">GST Penalty Calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>5,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    {{-- <a href="/tools/gstat-appeal-fee" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GSTAT Appeal Fee Calculator</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate GST Appellate Tribunal fees based on dispute value</p>
      <div class="tool-keywords"><span class="tool-keyword">gstat appeal fee</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>5,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a> --}}
    <a href="/tools/itc-eligibility-checker" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Input Tax Credit (ITC) Eligibility Checker</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check if your purchases qualify for Input Tax Credit claim</p>
      <div class="tool-keywords"><span class="tool-keyword">itc eligibility</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>18,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/gst-rate-finder" class="tool-card" data-category="gst">
      <div class="tool-card-header"><div class="tool-icon cat-gst"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">GST Rate Finder by HSN/SAC</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Find applicable GST rate for any product or service using HSN/SAC code</p>
      <div class="tool-keywords"><span class="tool-keyword">gst rate by hsn code</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>25,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
<div class="category-block" id="cat-finance">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#7C3AED"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <div class="category-meta"><h2>Finance & Investment Tools</h2><p>For Individuals, Investors & Business Owners</p></div>
    <span class="category-tool-count">12 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/income-tax-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Income Tax Calculator (Old vs New Regime)</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Compare tax liability under Old and New regime with deduction planning</p>
      <div class="tool-keywords"><span class="tool-keyword">income tax calculator 2026</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>5,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/emi-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">EMI Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate EMI for home, car, personal & business loans</p>
      <div class="tool-keywords"><span class="tool-keyword">emi calculator</span><span class="tool-keyword">loan emi calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>3,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/sip-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">SIP Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate SIP returns, wealth creation & goal-based investment planning</p>
      <div class="tool-keywords"><span class="tool-keyword">sip calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>2,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/fd-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">FD Interest Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate FD maturity amount with interest for all major banks</p>
      <div class="tool-keywords"><span class="tool-keyword">fd calculator</span><span class="tool-keyword">fixed deposit calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>80,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/ppf-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">PPF Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate PPF maturity, interest earned & yearly balance</p>
      <div class="tool-keywords"><span class="tool-keyword">ppf calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>60,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/roi-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">ROI Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate return on investment percentage for any investment</p>
      <div class="tool-keywords"><span class="tool-keyword">roi calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/business-loan-emi-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Business Loan EMI Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate EMI for business loans with amortization schedule</p>
      <div class="tool-keywords"><span class="tool-keyword">business loan emi calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>30,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/depreciation-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Depreciation Calculator (IT Act)</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate depreciation as per Income Tax Act with WDV & SLM methods</p>
      <div class="tool-keywords"><span class="tool-keyword">depreciation calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>25,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/break-even-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Break-Even Analysis Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate break-even point in units and revenue for your business</p>
      <div class="tool-keywords"><span class="tool-keyword">break even calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>20,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/compound-interest-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Compound Interest Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate compound interest with different compounding frequencies</p>
      <div class="tool-keywords"><span class="tool-keyword">compound interest calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/nps-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">NPS Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate NPS maturity, monthly pension & tax benefits</p>
      <div class="tool-keywords"><span class="tool-keyword">nps calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/rd-calculator" class="tool-card" data-category="finance">
      <div class="tool-card-header"><div class="tool-icon cat-finance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">RD Calculator</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate recurring deposit maturity amount and interest earned</p>
      <div class="tool-keywords"><span class="tool-keyword">rd calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>30,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
<div class="category-block" id="cat-compliance">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#DC2626"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
    <div class="category-meta"><h2>Business Compliance Tools</h2><p>For Entrepreneurs & Startups</p></div>
    <span class="category-tool-count">8 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/company-registration-cost-calculator" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Company Registration Cost Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Estimate total cost of company registration including govt fees</p>
      <div class="tool-keywords"><span class="tool-keyword">company registration cost</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>30,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/business-structure-comparison" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Business Structure Comparison Tool</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Compare Pvt Ltd, LLP, OPC, Partnership & Proprietorship side-by-side</p>
      <div class="tool-keywords"><span class="tool-keyword">pvt ltd vs llp vs opc</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>25,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/msme-udyam-eligibility" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">MSME/Udyam Registration Eligibility</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check if your business qualifies for MSME/Udyam registration</p>
      <div class="tool-keywords"><span class="tool-keyword">msme registration eligibility</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/import-duty-calculator" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Import Duty / Customs Duty Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate total import duty including BCD, IGST & cess</p>
      <div class="tool-keywords"><span class="tool-keyword">import duty calculator india</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/roc-filing-due-date-calendar" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">ROC Filing Due Date Calendar</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Complete MCA/ROC filing calendar with all due dates & reminders</p>
      <div class="tool-keywords"><span class="tool-keyword">roc filing due dates</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>15,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/startup-india-eligibility" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Startup India Eligibility Checker</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Check eligibility for DPIIT recognition & Startup India benefits</p>
      <div class="tool-keywords"><span class="tool-keyword">startup india registration</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>20,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/dir3-kyc-reminder" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">DIR-3 KYC Due Date Reminder</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Track DIR-3 KYC filing deadline and avoid Rs.5,000 late fee</p>
      <div class="tool-keywords"><span class="tool-keyword">dir-3 kyc due date</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>10,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/llp-compliance-checklist" class="tool-card" data-category="compliance">
      <div class="tool-card-header"><div class="tool-icon cat-compliance"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">LLP Annual Compliance Checklist</div></div><span class="tool-priority low">low</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Complete annual compliance checklist for LLPs with due dates</p>
      <div class="tool-keywords"><span class="tool-keyword">llp annual filing checklist</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>8,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
<div class="category-block" id="cat-traffic">
  <div class="category-header">
    <div class="category-icon-wrap" style="background:#0891B2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
    <div class="category-meta"><h2>Utility & Traffic Magnet Tools</h2><p>Popular Tools for Everyone</p></div>
    <span class="category-tool-count">7 Tools</span>
  </div>
  <div class="tools-grid">
    <a href="/tools/age-calculator" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Age Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate exact age in years, months, days from date of birth</p>
      <div class="tool-keywords"><span class="tool-keyword">age calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>5,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/percentage-calculator" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Percentage Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate percentages, percentage change, increase & decrease</p>
      <div class="tool-keywords"><span class="tool-keyword">percentage calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>3,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/date-difference-calculator" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Date Difference Calculator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate days, months & years between any two dates</p>
      <div class="tool-keywords"><span class="tool-keyword">date difference calculator</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>1,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/word-character-counter" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Word & Character Counter</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Count words, characters, sentences & paragraphs in your text</p>
      <div class="tool-keywords"><span class="tool-keyword">word counter</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>1,50,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/currency-converter" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Currency Converter (INR)</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Convert INR to 150+ world currencies with live exchange rates</p>
      <div class="tool-keywords"><span class="tool-keyword">currency converter</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>2,00,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/stamp-duty-calculator" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Stamp Duty Calculator</div></div><span class="tool-priority high">high</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Calculate stamp duty & registration charges for property transactions</p>
      <div class="tool-keywords"><span class="tool-keyword">stamp duty calculator maharashtra</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>60,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
    <a href="/tools/rent-agreement-generator" class="tool-card" data-category="traffic">
      <div class="tool-card-header"><div class="tool-icon cat-traffic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg></div><div style="flex:1"><div class="tool-name">Rent Agreement Generator</div></div><span class="tool-priority medium">medium</span></div>
      <p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">Generate legally valid rent agreements with customizable clauses</p>
      <div class="tool-keywords"><span class="tool-keyword">rent agreement format</span></div>
      <div class="tool-footer"><div class="tool-searches"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><strong>40,000+</strong> searches/mo</div><div class="tool-cta-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
    </a>
  </div>
</div>
    </div>

    <!-- No Results State -->
    <div class="no-results" id="noResults">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M8 11h6"/></svg>
        <h3>No tools found</h3>
        <p>Try a different search term or browse by category above.</p>
    </div>
</section>

<!-- ========================================
     MID-PAGE CTA
     ======================================== -->
<section class="mid-cta">
    <div class="mid-cta-inner">
        <h2>Need Expert Help Beyond Calculators?</h2>
        <p>Our CA &amp; CS team handles GST filings, payroll management, tax returns, and business compliance — so you can focus on growing your business.</p>
        <div class="mid-cta-buttons">
            <a href="tel:+919459456700" class="btn-cta-primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                Call +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20my%20business%20compliance.%20Please%20connect!" target="_blank" class="btn-cta-secondary">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                WhatsApp Us
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     WHY USE OUR TOOLS
     ======================================== -->
<section class="why-section">
    <div class="why-container">
        <div class="why-header">
            <div class="section-eyebrow">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                WHY PATRON TOOLS
            </div>
            <h2>Built by CAs. Trusted by Businesses.</h2>
            <p style="font-size:15px;color:var(--text-muted);max-width:600px;margin:0 auto;">Every calculator is verified by our team of Chartered Accountants for accuracy under current Indian tax laws.</p>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="why-title">CA-Verified Accuracy</h3>
                <div class="why-text">Every formula and rate is reviewed by our ICAI-registered Chartered Accountants, updated with the latest budget and notification changes.</div>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3 class="why-title">Instant Results</h3>
                <div class="why-text">No signups, no logins, no downloads. Get instant calculations right in your browser — works on any device, anytime.</div>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="why-title">100% Free Forever</h3>
                <div class="why-text">All 57 tools are completely free with no hidden fees, no premium tiers, and no usage limits. Professional-grade, always accessible.</div>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <h3 class="why-title">India-Specific</h3>
                <div class="why-text">Designed specifically for Indian tax laws, GST regulations, and compliance requirements. Not generic — built for India.</div>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3 class="why-title">Export & Share</h3>
                <div class="why-text">Download results as PDF, share via WhatsApp, or email the calculations to your CA — all with one click.</div>
            </div>
            <div class="why-card">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <h3 class="why-title">Expert Support</h3>
                <div class="why-text">Need help interpreting results? Our CA experts are just a WhatsApp message or phone call away for free consultation.</div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     TESTIMONIALS SECTION
     ======================================== -->
<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="testimonials-header">
            <div class="section-eyebrow">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                CLIENT REVIEWS
            </div>
            <h2>Real Stories from Real Businesses</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, &amp; stay compliant.</p>
        </div>

        <!-- Pure CSS Infinite Scroll — All cards hardcoded, duplicated for seamless loop -->
        <div class="testi-scroll-wrapper">
            <div class="testi-scroll-track">
                <!-- SET 1 (original 10 cards) -->
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I have had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I am glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">R</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">4 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">A</div><div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <!-- SET 2 (duplicate for seamless loop) -->
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I have had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I am glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">R</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">4 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
                <div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">A</div><div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><svg viewBox="0 0 24 24" width="22" height="22"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg></div></div></div></div>
            </div>
        </div>

        <!-- Reviews CTA Banner -->
        <div class="reviews-cta" style="margin-top: 40px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <div class="reviews-cta-text"><h3 style="color:#FFFFFF !important;margin-top:0;">Join 25,000+ Satisfied Businesses</h3><p>Get expert assistance for all your business compliance needs</p></div>
            </div>
            <a href="tel:+919459456700" class="btn-cta-talk">Talk to an Expert <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </div>
</section>

<!-- ========================================
     CONSULTATION FORM CTA SECTION
     ======================================== -->
<section class="consultation-cta-section" id="consultationSection">
    <div class="consultation-cta-container">
        <div class="consultation-cta-text">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg> FREE CONSULTATION</div>
            <h2>Get Expert Help from CA Sundram Gupta's Team</h2>
            <p>Our calculators give you quick answers. Our CA &amp; CS team gives you complete solutions — from GST filings to company registration, payroll to annual compliance.</p>
            <ul class="consultation-cta-features">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Free 15-minute consultation call</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Talk directly to a Chartered Accountant</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> 25,000+ businesses served across India</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Offices in Pune, Mumbai, Delhi &amp; Gurugram</li>
            </ul>
        </div>
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
                <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Tools Page'/>
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
                            <span class="selected-flag" id="selectedFlag">🇮🇳</span>
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
                               oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error")'/>
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
                        <option value='Private Limited Company Registration'>Private Limited Company Registration</option>
                        <option value='LLP Registration'>LLP Registration</option>
                        <option value='OPC Registration'>OPC Registration</option>
                        <option value='Partnership Firm Registration'>Partnership Firm Registration</option>
                        <option value='Sole Proprietorship Registration'>Sole Proprietorship Registration</option>
                        <option value='GST Registration'>GST Registration</option>
                        <option value='GST Return Filing'>GST Return Filing</option>
                        <option value='Income Tax Return Filing'>Income Tax Return Filing</option>
                        <option value='TDS Return Filing'>TDS Return Filing</option>
                        <option value='Trademark Registration'>Trademark Registration</option>
                        <option value='FSSAI License'>FSSAI License</option>
                        <option value='Import Export Code (IEC)'>Import Export Code (IEC)</option>
                        <option value='Annual Compliance (ROC Filing)'>Annual Compliance (ROC Filing)</option>
                        <option value='Accounting &amp; Bookkeeping'>Accounting &amp; Bookkeeping</option>
                        <option value='Payroll Management'>Payroll Management</option>
                        <option value='Audit Services'>Audit Services</option>
                        <option value='Other'>Other</option>
                    </select>
                </div>

                <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote →</button>
            </form>

            <p class="form-response-note">Our team will get back to you shortly. No spam. By submitting, you agree to our <a href="/privacy-policy" style="color:var(--orange);font-weight:600;">Privacy Policy</a>.</p>

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
</section>

<!-- ========================================
     CTA BLOCK (DARK) — Final CTA
     ======================================== -->
<section class="cta-block-dark">
    <div class="cta-block-dark-inner">
        <h2>Still Have Questions? Talk to Our CA Team.</h2>
        <p>Whether you need help interpreting a calculation, filing a return, or registering your business — our team of Chartered Accountants and Company Secretaries is just a call away. Patron Accounting LLP, founded by CA Sundram Gupta, has been India's trusted compliance partner for over 15 years.</p>
        <div class="cta-block-dark-buttons">
            <a href="tel:+919459456700" class="btn-call">📞 Call +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20my%20business%20compliance.%20Please%20connect!" target="_blank" class="btn-wa">💬 WhatsApp Us</a>
            <a href="mailto:sales@patronaccounting.com" class="btn-email">✉️ Email Us</a>
        </div>
    </div>
</section>

<!-- ========================================
     STATS BAR
     ======================================== -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">25,000+</span><span class="stat-label">Happy Clients</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Compliance Filings</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9★</span><span class="stat-label">Google Rating</span></div>
        </div>
    </div>
</div>

<!-- ========================================
     OFFICE LOCATIONS FOOTER STRIP
     ======================================== -->
<div class="office-locations-strip">
    <div class="ols-container">
        <span class="ols-label">Our Offices:</span>
        <div class="ols-offices">
            <a href="/contact#pune" class="ols-office active">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Pune (HQ)
            </a>
            <a href="/contact#mumbai" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Mumbai
            </a>
            <a href="/contact#delhi" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Delhi
            </a>
            <a href="/contact#gurugram" class="ols-office">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Gurugram
            </a>
        </div>
        <a href="/about-us" class="ols-trust-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Verify Credentials
        </a>
    </div>
</div>

</main>

<!-- ========================================
     WHATSAPP COMMUNITY STICKY BAR
     ======================================== -->
<div class="whatsapp-sticky-bar" id="whatsappStickyBar">
    <svg class="wsb-icon" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="wsb-text">
        <strong>Join 5,000+ business owners.</strong> <span>Get compliance due date alerts on WhatsApp.</span>
    </span>
    <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20join%20Patron%20Accounting%27s%20WhatsApp%20community%20for%20compliance%20due%20date%20alerts.%20Please%20add%20me%21" target="_blank" class="wsb-btn">Join Free →</a>
    <button class="wsb-close" onclick="document.getElementById('whatsappStickyBar').style.display='none'" aria-label="Close">×</button>
</div>

<!-- ========================================
     TOOLS DATA & LOGIC
     ======================================== -->
<script>
// ============================================
// TOOLS DATABASE — All 57 Tools
// ============================================
var TOOLS_DATA = [
    // CATEGORY 1: ZOHO BOOKS / ACCOUNTING TOOLS (10)
    { name: "GST Calculator", slug: "gst-calculator", category: "accounting", priority: "high", searches: "2,00,000+", keywords: ["gst calculator","gst calculation online","calculate gst"], icon: "calculator", description: "Calculate GST amount, CGST, SGST & IGST instantly for any value" },
    { name: "HSN/SAC Code Finder", slug: "hsn-sac-code-finder", category: "accounting", priority: "high", searches: "1,00,000+", keywords: ["hsn code finder","sac code search","hsn code list"], icon: "search", description: "Search and find HSN/SAC codes for goods and services" },
    { name: "TDS Rate Finder & Calculator", slug: "tds-calculator", category: "accounting", priority: "high", searches: "80,000+", keywords: ["tds calculator","tds rate finder","tds on salary"], icon: "percent", description: "Find TDS rates and calculate TDS deductions for all sections" },
    { name: "Invoice Generator (GST Compliant)", slug: "invoice-generator", category: "accounting", priority: "high", searches: "50,000+", keywords: ["free invoice generator","gst invoice maker","invoice format"], icon: "file-text", description: "Generate GST-compliant invoices with auto tax calculation" },
    { name: "E-Way Bill Calculator", slug: "eway-bill-calculator", category: "accounting", priority: "medium", searches: "20,000+", keywords: ["e-way bill calculator","eway bill distance"], icon: "truck", description: "Calculate e-way bill requirements based on goods value and distance" },
    { name: "Profit & Loss Statement Generator", slug: "profit-loss-generator", category: "accounting", priority: "medium", searches: "15,000+", keywords: ["profit loss calculator","p&l statement format"], icon: "trending-up", description: "Create professional P&L statements with automatic calculations" },
    { name: "Accounting Software Comparison Tool", slug: "accounting-software-comparison", category: "accounting", priority: "medium", searches: "10,000+", keywords: ["zoho books vs tally","tally vs quickbooks india"], icon: "layers", description: "Compare Zoho Books, Tally, QuickBooks and other Indian accounting software" },
    { name: "Zoho Books Pricing Calculator", slug: "zoho-books-pricing", category: "accounting", priority: "low", searches: "5,000+", keywords: ["zoho books pricing","zoho books cost estimator"], icon: "tag", description: "Estimate your Zoho Books subscription cost based on your needs" },
    { name: "Balance Sheet Generator", slug: "balance-sheet-generator", category: "accounting", priority: "medium", searches: "15,000+", keywords: ["balance sheet format","balance sheet template"], icon: "clipboard", description: "Generate a formatted balance sheet with auto-balancing" },
    { name: "Cash Flow Statement Calculator", slug: "cash-flow-calculator", category: "accounting", priority: "low", searches: "8,000+", keywords: ["cash flow statement format","cash flow calculator"], icon: "activity", description: "Calculate and project cash flows with operating, investing & financing activities" },

    // CATEGORY 2: PAYROLL SERVICES TOOLS (10)
    { name: "CTC to In-Hand Salary Calculator", slug: "ctc-to-in-hand-salary-calculator", category: "payroll", priority: "high", searches: "1,50,000+", keywords: ["ctc to in hand salary","take home salary calculator"], icon: "wallet", description: "Convert CTC to in-hand salary with all deductions breakdown" },
    { name: "EPF/PF Calculator", slug: "epf-calculator", category: "payroll", priority: "high", searches: "80,000+", keywords: ["epf calculator","pf calculator online","pf balance"], icon: "piggy-bank", description: "Calculate EPF contributions, interest & retirement corpus" },
    { name: "Gratuity Calculator", slug: "gratuity-calculator", category: "payroll", priority: "high", searches: "60,000+", keywords: ["gratuity calculator","gratuity calculation formula"], icon: "gift", description: "Calculate gratuity payable under the Payment of Gratuity Act" },
    { name: "HRA Exemption Calculator", slug: "hra-calculator", category: "payroll", priority: "high", searches: "50,000+", keywords: ["hra calculator","hra exemption calculator online"], icon: "home", description: "Calculate HRA exemption under Section 10(13A) for tax savings" },
    { name: "Professional Tax Calculator", slug: "professional-tax-calculator", category: "payroll", priority: "high", searches: "30,000+", keywords: ["professional tax calculator maharashtra","delhi","karnataka"], icon: "map-pin", description: "State-wise professional tax calculation for all Indian states" },
    { name: "ESI Calculator", slug: "esi-calculator", category: "payroll", priority: "medium", searches: "20,000+", keywords: ["esi calculator","esi contribution calculator"], icon: "heart", description: "Calculate ESI employer and employee contributions" },
    { name: "Payroll Cost Calculator", slug: "payroll-cost-calculator", category: "payroll", priority: "medium", searches: "10,000+", keywords: ["payroll cost calculator india","employee cost calculator"], icon: "users", description: "Calculate total cost of hiring an employee including all statutory costs" },
    { name: "Bonus Calculator (Payment of Bonus Act)", slug: "bonus-calculator", category: "payroll", priority: "medium", searches: "15,000+", keywords: ["statutory bonus calculator","bonus calculation formula"], icon: "award", description: "Calculate statutory bonus payable under the Payment of Bonus Act" },
    { name: "Leave Encashment Calculator", slug: "leave-encashment-calculator", category: "payroll", priority: "medium", searches: "12,000+", keywords: ["leave encashment calculator","leave encashment formula"], icon: "calendar", description: "Calculate leave encashment amount and tax implications" },
    { name: "TDS on Salary Calculator (Section 192)", slug: "tds-on-salary-calculator", category: "payroll", priority: "high", searches: "40,000+", keywords: ["tds on salary calculator","income tax on salary"], icon: "scissors", description: "Calculate TDS to be deducted on salary under Section 192" },

    // CATEGORY 3: GST / GSTAT COMPLIANCE TOOLS (10)
    { name: "GST Return Due Date Tracker", slug: "gst-return-due-date-tracker", category: "gst", priority: "high", searches: "1,00,000+", keywords: ["gst return due date","gstr filing dates 2026"], icon: "calendar-clock", description: "Track all GSTR filing due dates with reminders and alerts" },
    { name: "GST Late Fee & Interest Calculator", slug: "gst-late-fee-calculator", category: "gst", priority: "high", searches: "40,000+", keywords: ["gst late fee calculator","gst interest calculator"], icon: "alert-circle", description: "Calculate GST late fee and interest for delayed filings" },
    { name: "GST Registration Eligibility Checker", slug: "gst-registration-eligibility", category: "gst", priority: "high", searches: "50,000+", keywords: ["gst registration limit","do i need gst registration"], icon: "check-circle", description: "Check if you need GST registration based on turnover and business type" },
    { name: "GST Composition Scheme Eligibility", slug: "gst-composition-scheme", category: "gst", priority: "medium", searches: "15,000+", keywords: ["composition scheme eligibility","gst composition limit"], icon: "sliders", description: "Check eligibility and benefits of GST Composition Scheme" },
    { name: "GSTR-2A vs 3B Reconciliation Tool", slug: "gstr-reconciliation", category: "gst", priority: "medium", searches: "10,000+", keywords: ["gstr 2a reconciliation","itc mismatch calculator"], icon: "git-compare", description: "Reconcile GSTR-2A with GSTR-3B and identify ITC mismatches" },
    { name: "Reverse Charge (RCM) Calculator", slug: "rcm-calculator", category: "gst", priority: "medium", searches: "20,000+", keywords: ["rcm calculator","reverse charge mechanism gst"], icon: "refresh-cw", description: "Calculate GST payable under reverse charge mechanism" },
    { name: "GSTR-9 Annual Return Checklist", slug: "gstr9-checklist", category: "gst", priority: "medium", searches: "15,000+", keywords: ["gstr 9 checklist","gst annual return checklist"], icon: "list-checks", description: "Complete checklist for GSTR-9 annual return filing" },
    { name: "GST Penalty Calculator", slug: "gst-penalty-calculator", category: "gst", priority: "medium", searches: "12,000+", keywords: ["gst penalty calculator","gst non filing penalty"], icon: "alert-triangle", description: "Calculate penalties for GST non-compliance and delayed filings" },
    { name: "Input Tax Credit (ITC) Eligibility Checker", slug: "itc-eligibility-checker", category: "gst", priority: "high", searches: "18,000+", keywords: ["itc eligibility","input tax credit rules"], icon: "check-square", description: "Check if your purchases qualify for Input Tax Credit claim" },
    { name: "GST Rate Finder by HSN/SAC", slug: "gst-rate-finder", category: "gst", priority: "high", searches: "25,000+", keywords: ["gst rate by hsn code","gst rate finder tool"], icon: "search-code", description: "Find applicable GST rate for any product or service using HSN/SAC code" },

    // CATEGORY 4: FINANCE & INVESTMENT TOOLS (12)
    { name: "Income Tax Calculator (Old vs New Regime)", slug: "income-tax-calculator", category: "finance", priority: "high", searches: "5,00,000+", keywords: ["income tax calculator 2026","old vs new regime calculator"], icon: "landmark", description: "Compare tax liability under Old and New regime with deduction planning" },
    { name: "EMI Calculator", slug: "emi-calculator", category: "finance", priority: "high", searches: "3,00,000+", keywords: ["emi calculator","loan emi calculator","home loan emi"], icon: "credit-card", description: "Calculate EMI for home, car, personal & business loans" },
    { name: "SIP Calculator", slug: "sip-calculator", category: "finance", priority: "high", searches: "2,00,000+", keywords: ["sip calculator","mutual fund sip calculator"], icon: "trending-up", description: "Calculate SIP returns, wealth creation & goal-based investment planning" },
    { name: "FD Interest Calculator", slug: "fd-calculator", category: "finance", priority: "high", searches: "80,000+", keywords: ["fd calculator","fixed deposit calculator","fd interest rate"], icon: "lock", description: "Calculate FD maturity amount with interest for all major banks" },
    { name: "PPF Calculator", slug: "ppf-calculator", category: "finance", priority: "high", searches: "60,000+", keywords: ["ppf calculator","ppf interest calculator"], icon: "shield", description: "Calculate PPF maturity, interest earned & yearly balance" },
    { name: "ROI Calculator", slug: "roi-calculator", category: "finance", priority: "medium", searches: "40,000+", keywords: ["roi calculator","return on investment calculator"], icon: "target", description: "Calculate return on investment percentage for any investment" },
    { name: "Business Loan EMI Calculator", slug: "business-loan-emi-calculator", category: "finance", priority: "medium", searches: "30,000+", keywords: ["business loan emi calculator","business loan interest"], icon: "briefcase", description: "Calculate EMI for business loans with amortization schedule" },
    { name: "Depreciation Calculator (IT Act)", slug: "depreciation-calculator", category: "finance", priority: "medium", searches: "25,000+", keywords: ["depreciation calculator","depreciation rate chart india"], icon: "bar-chart-2", description: "Calculate depreciation as per Income Tax Act with WDV & SLM methods" },
    { name: "Break-Even Analysis Calculator", slug: "break-even-calculator", category: "finance", priority: "medium", searches: "20,000+", keywords: ["break even calculator","break even point calculator"], icon: "crosshair", description: "Calculate break-even point in units and revenue for your business" },
    { name: "Compound Interest Calculator", slug: "compound-interest-calculator", category: "finance", priority: "high", searches: "50,000+", keywords: ["compound interest calculator","ci calculator"], icon: "repeat", description: "Calculate compound interest with different compounding frequencies" },
    { name: "NPS Calculator", slug: "nps-calculator", category: "finance", priority: "medium", searches: "40,000+", keywords: ["nps calculator","national pension scheme calculator"], icon: "umbrella", description: "Calculate NPS maturity, monthly pension & tax benefits" },
    { name: "RD Calculator", slug: "rd-calculator", category: "finance", priority: "low", searches: "30,000+", keywords: ["rd calculator","recurring deposit calculator"], icon: "coins", description: "Calculate recurring deposit maturity amount and interest earned" },

    // CATEGORY 5: BUSINESS COMPLIANCE (8)
    { name: "Company Registration Cost Calculator", slug: "company-registration-cost-calculator", category: "compliance", priority: "high", searches: "30,000+", keywords: ["company registration cost","pvt ltd registration fees india"], icon: "building", description: "Estimate total cost of company registration including govt fees" },
    { name: "Business Structure Comparison Tool", slug: "business-structure-comparison", category: "compliance", priority: "high", searches: "25,000+", keywords: ["pvt ltd vs llp vs opc","company type comparison india"], icon: "git-branch", description: "Compare Pvt Ltd, LLP, OPC, Partnership & Proprietorship side-by-side" },
    { name: "MSME/Udyam Registration Eligibility", slug: "msme-udyam-eligibility", category: "compliance", priority: "high", searches: "40,000+", keywords: ["msme registration eligibility","udyam registration check"], icon: "award", description: "Check if your business qualifies for MSME/Udyam registration" },
    { name: "Import Duty / Customs Duty Calculator", slug: "import-duty-calculator", category: "compliance", priority: "high", searches: "50,000+", keywords: ["import duty calculator india","customs duty calculator"], icon: "package", description: "Calculate total import duty including BCD, IGST & cess" },
    { name: "ROC Filing Due Date Calendar", slug: "roc-filing-due-date-calendar", category: "compliance", priority: "medium", searches: "15,000+", keywords: ["roc filing due dates","annual filing calendar mca"], icon: "calendar-days", description: "Complete MCA/ROC filing calendar with all due dates & reminders" },
    { name: "Startup India Eligibility Checker", slug: "startup-india-eligibility", category: "compliance", priority: "medium", searches: "20,000+", keywords: ["startup india registration","dpiit recognition eligibility"], icon: "rocket", description: "Check eligibility for DPIIT recognition & Startup India benefits" },
    { name: "DIR-3 KYC Due Date Reminder", slug: "dir3-kyc-reminder", category: "compliance", priority: "medium", searches: "10,000+", keywords: ["dir-3 kyc due date","director kyc deadline"], icon: "bell", description: "Track DIR-3 KYC filing deadline and avoid ₹5,000 late fee" },
    { name: "LLP Annual Compliance Checklist", slug: "llp-compliance-checklist", category: "compliance", priority: "low", searches: "8,000+", keywords: ["llp annual filing checklist","llp compliance requirements"], icon: "clipboard-check", description: "Complete annual compliance checklist for LLPs with due dates" },

    // CATEGORY 6: TRAFFIC MAGNET TOOLS (7)
    { name: "Age Calculator", slug: "age-calculator", category: "traffic", priority: "high", searches: "5,00,000+", keywords: ["age calculator","calculate my age online"], icon: "cake", description: "Calculate exact age in years, months, days from date of birth" },
    { name: "Percentage Calculator", slug: "percentage-calculator", category: "traffic", priority: "high", searches: "3,00,000+", keywords: ["percentage calculator","how to calculate percentage"], icon: "percent", description: "Calculate percentages, percentage change, increase & decrease" },
    { name: "Date Difference Calculator", slug: "date-difference-calculator", category: "traffic", priority: "medium", searches: "1,00,000+", keywords: ["date difference calculator","days between two dates"], icon: "calendar-range", description: "Calculate days, months & years between any two dates" },
    { name: "Word & Character Counter", slug: "word-character-counter", category: "traffic", priority: "medium", searches: "1,50,000+", keywords: ["word counter","character counter online"], icon: "type", description: "Count words, characters, sentences & paragraphs in your text" },
    { name: "Currency Converter (INR)", slug: "currency-converter", category: "traffic", priority: "high", searches: "2,00,000+", keywords: ["currency converter","inr to usd converter"], icon: "repeat", description: "Convert INR to 150+ world currencies with live exchange rates" },
    { name: "Stamp Duty Calculator", slug: "stamp-duty-calculator", category: "traffic", priority: "high", searches: "60,000+", keywords: ["stamp duty calculator maharashtra","stamp duty on property"], icon: "stamp", description: "Calculate stamp duty & registration charges for property transactions" },
    { name: "Rent Agreement Generator", slug: "rent-agreement-generator", category: "traffic", priority: "medium", searches: "40,000+", keywords: ["rent agreement format","online rent agreement"], icon: "file-signature", description: "Generate legally valid rent agreements with customizable clauses" }
];

// ============================================
// CATEGORY META
// ============================================
var CATEGORIES = {
    accounting: { name: "Zoho Books / Accounting Tools", desc: "For SMEs, Startups & Freelancers", color: "#1B365D", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7V4h16v3M9 20h6M12 4v16"/></svg>' },
    payroll: { name: "Payroll Services Tools", desc: "For HR Managers, Business Owners & Employees", color: "#059669", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg>' },
    gst: { name: "GST / GSTAT Compliance Tools", desc: "For Businesses, CAs & Tax Consultants", color: "#D97706", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>' },
    finance: { name: "Finance & Investment Tools", desc: "For Individuals, Investors & Business Owners", color: "#7C3AED", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>' },
    compliance: { name: "Business Compliance Tools", desc: "For Entrepreneurs & Startups", color: "#DC2626", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>' },
    traffic: { name: "Utility & Traffic Magnet Tools", desc: "Popular Tools for Everyone", color: "#0891B2", icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>' }
};

// ============================================
// SVG ICONS MAP
// ============================================
var ICONS = {
    calculator: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg>',
    search: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>',
    percent: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="5" x2="5" y2="19"/><circle cx="6.5" cy="6.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg>',
    'file-text': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>',
    truck: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
    'trending-up': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
    layers: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
    tag: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>',
    clipboard: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>',
    activity: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
    wallet: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="5" width="22" height="16" rx="2"/><path d="M1 10h22"/></svg>',
    'piggy-bank': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2"/><path d="M2 9.5a1 1 0 100 2"/></svg>',
    gift: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/></svg>',
    home: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    'map-pin': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    heart: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>',
    users: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>',
    award: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>',
    calendar: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
    scissors: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>',
    'calendar-clock': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><circle cx="12" cy="14" r="4"/><path d="M12 12v2l1.5 1"/></svg>',
    'alert-circle': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
    'check-circle': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
    sliders: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/></svg>',
    'git-compare': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M13 6h3a2 2 0 012 2v7M11 18H8a2 2 0 01-2-2V9"/></svg>',
    'refresh-cw': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg>',
    'list-checks': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 6h11M10 12h11M10 18h11"/><path d="M3 6l2 2 4-4M3 12l2 2 4-4M3 18l2 2 4-4"/></svg>',
    'alert-triangle': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
    'check-square': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>',
    'search-code': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M9 9l2 2 2-2"/></svg>',
    landmark: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="22" x2="21" y2="22"/><line x1="6" y1="18" x2="6" y2="11"/><line x1="10" y1="18" x2="10" y2="11"/><line x1="14" y1="18" x2="14" y2="11"/><line x1="18" y1="18" x2="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>',
    'credit-card': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>',
    lock: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>',
    shield: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    target: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
    briefcase: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>',
    'bar-chart-2': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>',
    crosshair: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="22" y1="12" x2="18" y2="12"/><line x1="6" y1="12" x2="2" y2="12"/><line x1="12" y1="6" x2="12" y2="2"/><line x1="12" y1="22" x2="12" y2="18"/></svg>',
    repeat: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 014-4h14"/><polyline points="7 23 3 19 7 15"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg>',
    umbrella: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 12a11.05 11.05 0 00-22 0zm-5 7a3 3 0 01-6 0v-7"/></svg>',
    coins: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="8" cy="8" r="6"/><path d="M18.09 10.37A6 6 0 1110.34 18"/><line x1="7" y1="6" x2="7.01" y2="6"/><line x1="16" y1="12" x2="16.01" y2="12"/></svg>',
    building: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20"/><line x1="9" y1="6" x2="9.01" y2="6"/><line x1="15" y1="6" x2="15.01" y2="6"/><line x1="9" y1="10" x2="9.01" y2="10"/><line x1="15" y1="10" x2="15.01" y2="10"/><line x1="9" y1="14" x2="9.01" y2="14"/><line x1="15" y1="14" x2="15.01" y2="14"/><path d="M9 22v-4h6v4"/></svg>',
    'git-branch': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="6" y1="3" x2="6" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 01-9 9"/></svg>',
    package: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
    'calendar-days': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><rect x="8" y="14" width="2" height="2"/><rect x="14" y="14" width="2" height="2"/></svg>',
    rocket: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"/><path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>',
    bell: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>',
    'clipboard-check': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg>',
    cake: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-8a2 2 0 00-2-2H6a2 2 0 00-2 2v8"/><path d="M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1"/><path d="M2 21h20"/><path d="M7 8v2M12 8v2M17 8v2"/><path d="M7 4h.01M12 4h.01M17 4h.01"/></svg>',
    'calendar-range': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M8 14h.01M12 14h.01M16 14h.01"/></svg>',
    type: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="4 7 4 4 20 4 20 7"/><line x1="9" y1="20" x2="15" y2="20"/><line x1="12" y1="4" x2="12" y2="20"/></svg>',
    stamp: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 21h14"/><rect x="7" y="13" width="10" height="4"/><path d="M12 3a3 3 0 013 3v4H9V6a3 3 0 013-3z"/><path d="M7 17v1h10v-1"/></svg>',
    'file-signature': '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M8 18c1.5 0 2-1 3-3s2-3 3-3"/></svg>'
};

// ============================================
// RENDER FUNCTIONS
// ============================================
var currentCategory = 'all';
var currentSearch = '';

function getToolIcon(iconName, category) {
    return ICONS[iconName] || ICONS['calculator'];
}

function buildToolCard(tool) {
    var iconSvg = getToolIcon(tool.icon, tool.category);
    var keywordsHtml = tool.keywords.slice(0, 3).map(function(kw) {
        return '<span class="tool-keyword">' + kw + '</span>';
    }).join('');

    return '<a href="/tools/' + tool.slug + '" class="tool-card" data-category="' + tool.category + '" data-name="' + tool.name.toLowerCase() + '" data-keywords="' + tool.keywords.join(' ').toLowerCase() + '">' +
        '<div class="tool-card-header">' +
            '<div class="tool-icon cat-' + tool.category + '">' + iconSvg + '</div>' +
            '<div style="flex:1">' +
                '<div class="tool-name">' + tool.name + '</div>' +
            '</div>' +
            '<span class="tool-priority ' + tool.priority + '">' + tool.priority + '</span>' +
        '</div>' +
        '<p style="font-size:13px;color:var(--text-secondary);line-height:1.5;margin-bottom:12px;flex:1;">' + tool.description + '</p>' +
        '<div class="tool-keywords">' + keywordsHtml + '</div>' +
        '<div class="tool-footer">' +
            '<div class="tool-searches">' +
                '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>' +
                '<strong>' + tool.searches + '</strong> searches/mo' +
            '</div>' +
            '<div class="tool-cta-arrow">' +
                '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>' +
            '</div>' +
        '</div>' +
    '</a>';
}

function buildCategoryBlock(categoryKey, tools) {
    var cat = CATEGORIES[categoryKey];
    var toolsHtml = tools.map(buildToolCard).join('');

    return '<div class="category-block" id="cat-' + categoryKey + '">' +
        '<div class="category-header">' +
            '<div class="category-icon-wrap" style="background:' + cat.color + '">' + cat.icon + '</div>' +
            '<div class="category-meta">' +
                '<h2>' + cat.name + '</h2>' +
                '<p>' + cat.desc + '</p>' +
            '</div>' +
            '<span class="category-tool-count">' + tools.length + ' Tools</span>' +
        '</div>' +
        '<div class="tools-grid">' + toolsHtml + '</div>' +
    '</div>';
}

function renderTools() {
    var container = document.getElementById('toolsContainer');
    var noResults = document.getElementById('noResults');
    var searchTerm = currentSearch.toLowerCase().trim();

    // Filter tools
    var filteredTools = TOOLS_DATA.filter(function(tool) {
        var matchesCategory = (currentCategory === 'all' || tool.category === currentCategory);
        var matchesSearch = !searchTerm ||
            tool.name.toLowerCase().indexOf(searchTerm) !== -1 ||
            tool.keywords.join(' ').toLowerCase().indexOf(searchTerm) !== -1 ||
            tool.description.toLowerCase().indexOf(searchTerm) !== -1;
        return matchesCategory && matchesSearch;
    });

    if (filteredTools.length === 0) {
        container.innerHTML = '';
        noResults.classList.add('visible');
        return;
    }

    noResults.classList.remove('visible');

    // Group by category
    var categoryOrder = ['accounting', 'payroll', 'gst', 'finance', 'compliance', 'traffic'];
    var grouped = {};
    filteredTools.forEach(function(tool) {
        if (!grouped[tool.category]) grouped[tool.category] = [];
        grouped[tool.category].push(tool);
    });

    var html = '';
    categoryOrder.forEach(function(catKey) {
        if (grouped[catKey] && grouped[catKey].length > 0) {
            html += buildCategoryBlock(catKey, grouped[catKey]);
        }
    });

    container.innerHTML = html;
}

// ============================================
// EVENT HANDLERS
// ============================================
function filterCategory(category, btnElement) {
    currentCategory = category;

    // Update active button
    var allBtns = document.querySelectorAll('.cat-btn');
    for (var i = 0; i < allBtns.length; i++) {
        allBtns[i].classList.remove('active');
    }
    btnElement.classList.add('active');

    // Show/hide static category blocks (no re-rendering needed)
    var blocks = document.querySelectorAll('.category-block');
    for (var j = 0; j < blocks.length; j++) {
        if (category === 'all') {
            blocks[j].style.display = '';
        } else {
            var blockId = blocks[j].getAttribute('id'); // e.g. "cat-accounting"
            if (blockId === 'cat-' + category) {
                blocks[j].style.display = '';
            } else {
                blocks[j].style.display = 'none';
            }
        }
    }

    // Hide no-results
    var noResults = document.getElementById('noResults');
    if (noResults) noResults.classList.remove('visible');

    // Scroll to tools section
    if (category !== 'all') {
        var toolsSection = document.getElementById('toolsSection');
        if (toolsSection) toolsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

function clearSearch() {
    document.getElementById('toolSearch').value = '';
    document.getElementById('searchClear').classList.remove('visible');
    currentSearch = '';
    renderTools();
}

// Search input handler
var toolSearchEl = document.getElementById('toolSearch');
if (toolSearchEl) {
    toolSearchEl.addEventListener('input', function(e) {
        currentSearch = e.target.value;
        var clearBtn = document.getElementById('searchClear');
        if (currentSearch.length > 0) {
            clearBtn.classList.add('visible');
        } else {
            clearBtn.classList.remove('visible');
        }
        renderTools();
    });
}

// Initial render — call immediately since script is at bottom of page
// Static HTML is already in the page, so only re-render if user has searched/filtered
// This ensures tools are ALWAYS visible even if JS fails
if (currentCategory !== 'all' || currentSearch !== '') {
    try { renderTools(); } catch(e) {}
}
</script>

<!-- Bootstrap JS (no jQuery needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
    if (isOpen) { dropdown.classList.remove('open'); }
    else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

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

function validateConsultationForm() {
    var isValid = true;
    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }
    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    if (!phoneVal) {
        setFieldError(phoneInput, 'Phone number is required');
        document.getElementById('phoneGroup').classList.add('input-error');
        isValid = false;
    } else if (phoneVal.length < 7) {
        setFieldError(phoneInput, 'Enter a valid phone number');
        document.getElementById('phoneGroup').classList.add('input-error');
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
    }
    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }
    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }
    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal;
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

// Success state handler
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
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
// Bigin Mandatory Fields Validation
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');
function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) { isReturn = false; }
        }
    }
    if(isReturn) { document.getElementById('formSubmitBtn').disabled = true; }
    return isReturn;
}

// Bigin iframe success handler
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
@endsection
