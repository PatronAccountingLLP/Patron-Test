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
    <title>ESOP Restructuring India: Underwater Options, Repricing</title>
    <meta name="description" content="ESOP repricing and exchange programs for Indian startups post-down-round - Ind AS 102 modification, fresh Section 17(2)(vi). From Rs 1,25,000.">
    <link rel="canonical" href="/esop-restructuring-underwater-options">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Restructuring India: Underwater Options, Repricing | Patron Accounting">
    <meta property="og:description" content="ESOP repricing and exchange programs for Indian startups post-down-round - Ind AS 102 modification, fresh Section 17(2)(vi). From Rs 1,25,000.">
    <meta property="og:url" content="/esop-restructuring-underwater-options/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/esop-restructuring-underwater-options-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Restructuring India: Underwater Options, Repricing | Patron Accounting">
    <meta name="twitter:description" content="ESOP repricing and exchange programs for Indian startups post-down-round - Ind AS 102 modification, fresh Section 17(2)(vi). From Rs 1,25,000.">
    <meta name="twitter:image" content="/images/esop-restructuring-underwater-options-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "/esop-restructuring-underwater-options/#service",
        "name": "ESOP Restructuring and Underwater Options",
        "url": "/esop-restructuring-underwater-options/",
        "description": "Down-round remediation, repricing and exchange programs for Indian startups whose existing ESOP grants have gone underwater (exercise price above current Fair Market Value) under Section 62(1)(b) of Companies Act 2013 read with Rule 12 of Companies (Share Capital and Debentures) Rules 2014. Covers the five remediation tools that restore ESOP economics for impacted employees: Repricing (reduce exercise price of existing options to current FMV with original vesting schedule preserved); Exchange Program (cancel existing underwater options and issue new options at lower exercise price with fresh Rule 12(6)(a) 1-year cliff and 0.8x to 1.0x exchange ratio); Top-Up Grants (leave existing options unchanged and issue fresh grants at current FMV); Vesting Acceleration (move time-based vesting forward without changing exercise price); and Cashout/Buyback (purchase outstanding options at nominal value). Full Section 62(1)(b) Special Resolution workflow under Rule 12(2) with fresh EGM at 75 percent majority, MGT-14 filing within 30 days under Section 117(2), and Rule 12(9) Directors Report modification disclosure. Ind AS 102 paragraphs 26-29 modification accounting with incremental fair value computation using Black-Scholes recognised over remaining vesting period plus paragraphs B42-B44 Application Guidance. Section 17(2)(vi) perquisite tax timing analysis - trigger at exercise not at modification - with Section 49(2AA) cost-of-acquisition treatment at subsequent sale and Section 80-IAC plus Section 192(2C) 48-month deferral for DPIIT plus IMB certified startups (60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026). For listed companies, SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 Regulation 18 variation procedure with Stock Exchange notification under Regulation 19 and detrimental variation prevention. Rule 11UA FMV refresh at modification date with DCF (Discounted Cash Flow), NAV (Net Asset Value) or CCA (Comparable Companies Approach) methodology. Coordinated employee communication including consent letter, FAQ, town-hall talking points. End-to-end workflow under one engagement coordinating CA, CS, valuation, accounting and HR teams.",
        "serviceType": "ESOP Restructuring and Underwater Options Remediation",
        "areaServed": {
            "@type": "Country",
            "name": "India",
            "sameAs": "https://en.wikipedia.org/wiki/India"
        },
        "provider": {
            "@id": "/#organization"
        },
        "about": [
            {
                "@type": "Thing",
                "name": "Employee stock ownership",
                "sameAs": "https://en.wikipedia.org/wiki/Employee_stock_ownership"
            },
            {
                "@type": "Thing",
                "name": "Down round",
                "sameAs": "https://en.wikipedia.org/wiki/Down_round"
            },
            {
                "@type": "Thing",
                "name": "Companies Act 2013",
                "sameAs": "https://en.wikipedia.org/wiki/Companies_Act,_2013"
            },
            {
                "@type": "Thing",
                "name": "Fair value",
                "sameAs": "https://en.wikipedia.org/wiki/Fair_value"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ESOP Restructuring Engagement Tiers",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Underwater Analysis and Recommendation Memo (Standalone)",
                    "priceCurrency": "INR",
                    "price": "50000",
                    "description": "Cap table review, underwater computation per grant, retention risk assessment, peer benchmark, recommendation memo"
                },
                {
                    "@type": "Offer",
                    "name": "Top-Up Grant Issuance (Existing Scheme)",
                    "priceCurrency": "INR",
                    "price": "50000",
                    "description": "Pool sizing review, fresh grant batch at current FMV, Rule 11UA FMV refresh, grant letters"
                },
                {
                    "@type": "Offer",
                    "name": "Vesting Acceleration (Scheme Amendment)",
                    "priceCurrency": "INR",
                    "price": "60000",
                    "description": "Board approval, scheme amendment, Ind AS 102 incremental FV computation, employee communication"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Cashout / Buyback Program",
                    "priceCurrency": "INR",
                    "price": "100000",
                    "description": "Buyback mechanics, Section 17(2)(vi) and Section 50CA review, Board and EGM workflow, employee settlement"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Repricing - Unlisted Startup",
                    "priceCurrency": "INR",
                    "price": "125000",
                    "description": "Recommendation memo, scheme amendment drafting, Board/EGM workflow, MGT-14, Ind AS 102 modification accounting, tax memo, employee communication pack"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Exchange Program - Unlisted Startup",
                    "priceCurrency": "INR",
                    "price": "150000",
                    "description": "Cancellation mechanics, employee consent letter drafting, exchange ratio benchmark (0.8x to 1.0x), new grant batch issuance, fresh Rule 12(6)(a) cliff"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Repricing - Pre-IPO or Late-Stage",
                    "priceCurrency": "INR",
                    "price": "200000",
                    "description": "Above plus complex grantee analysis, senior CXO grant carve-outs, audit working paper documentation"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Exchange Program - Pre-IPO or Late-Stage",
                    "priceCurrency": "INR",
                    "price": "250000",
                    "description": "Above plus multi-tranche rollout, senior CXO discretion, SEBI SBEB Regulation 18 variation for listed entities"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "/esop-restructuring-underwater-options/#breadcrumb",
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
                "name": "ESOP Services",
                "item": "/esop-services/"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "ESOP Restructuring and Underwater Options",
                "item": "/esop-restructuring-underwater-options/"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "/esop-restructuring-underwater-options/#faq",
  "datePublished": "2026-05-11T08:00:00+05:30",
  "dateModified": "2026-05-11T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is an underwater ESOP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An underwater ESOP is one where the exercise price specified in the grant letter exceeds the current Fair Market Value (FMV) of the underlying share. Exercising would mean paying more for the share than its current market value - economically irrational. Underwater situations typically arise after a down round, flat round, market correction or business deterioration that reduces the current FMV below the originally set exercise price. The option carries zero retention value while it remains underwater."
      }
    },
    {
      "@type": "Question",
      "name": "Can ESOP exercise price be reduced after grant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes through a formal scheme amendment. Rule 12(2) of the Companies (Share Capital and Debentures) Rules 2014 requires material modification of an ESOP scheme to be approved by Special Resolution at 75 percent majority at an EGM. MGT-14 must be filed within 30 days of the Special Resolution under Section 117(2). Modification narrative must be disclosed in the Directors Report under Rule 12(9). For listed companies, additional procedures under SEBI SBEB Regulations 2021 Regulation 18 apply."
      }
    },
    {
      "@type": "Question",
      "name": "Is repricing of ESOPs allowed in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Repricing is a permitted material modification of an ESOP scheme under Rule 12(2) provided it is approved by Special Resolution. Repricing reduces the exercise price of existing outstanding options to current FMV (or another lower price) while preserving the original vesting schedule. The fresh Rule 12(6)(a) 1-year cliff does NOT apply to repricing - the original cliff and vesting credit continue. Section 17(2)(vi) is triggered only at exercise on the new lower exercise price."
      }
    },
    {
      "@type": "Question",
      "name": "How does Ind AS 102 treat ESOP modification?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ind AS 102 paragraphs 26-29 govern modification accounting. The original grant-date fair value continues to be expensed over the original vesting period. If the modification increases the fair value of the option (which repricing does), an incremental fair value is computed (post-modification fair value minus pre-modification fair value, both using Black-Scholes) and recognised as additional expense over the remaining vesting period. For a cancellation-and-replacement exchange program, the original grant is treated as cancelled and the new grant is recognised separately at its grant-date fair value."
      }
    },
    {
      "@type": "Question",
      "name": "Does repricing trigger immediate income tax for employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Section 17(2)(vi) perquisite tax is triggered at the EXERCISE event, not at the modification event. Repricing or exchange-program cancellation does not itself cause any perquisite tax for the employee. When the employee later exercises the repriced option or the new exchange-program option, the perquisite is computed on the THEN-current FMV minus the NEW exercise price. Section 80-IAC 48-month (60-month under ITA 2025) deferral continues to apply for eligible DPIIT plus IMB certified startups."
      }
    },
    {
      "@type": "Question",
      "name": "What is an ESOP exchange program?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An exchange program is a corporate action where existing underwater options are cancelled and new options are issued at a lower exercise price. A new 1-year cliff under Rule 12(6)(a) applies to the new options. The exchange ratio is typically 0.8x to 1.0x (i.e. 1,000 surrendered options exchanged for 800 to 1,000 new options) reflecting time value preserved in the original grant. Exchange programs require employee consent letter, fresh Special Resolution and MGT-14 filing."
      }
    },
    {
      "@type": "Question",
      "name": "Should we reprice or do an exchange program for underwater ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Repricing is generally preferred when the underwater gap is modest (less than 30 percent below FMV) and vesting credit is critical for retention - it preserves the original cliff and vesting timeline. Exchange programs are preferred when the underwater gap is deep (more than 50 percent) and the company is willing to reset vesting with a fresh 1-year cliff. Exchange programs typically use an exchange ratio of 0.8x to 1.0x to manage pool capacity. Listed entities face additional SEBI SBEB complexity. Patron recommendation memo quantifies the trade-offs for your specific scheme."
      }
    },
    {
      "@type": "Question",
      "name": "Underwater ESOP kya hota hai aur kya kar sakte hain? (What is an underwater ESOP and what can be done)",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Underwater ESOP wo hota hai jab exercise price (jo grant letter mein likha hai) current FMV se zyada ho jaaye. Yaani agar aap exercise karoge to share ki current value se zyada paise dene padenge - koi sense nahi banta. Yeh aksar down round ya flat round ke baad hota hai - Series A par Rs 200 FMV tha, options Rs 100 par mile, ab Series B Rs 60 par close ho gaya - sab underwater. Paanch options hote hain remediation ke liye - (1) Repricing (exercise price ko current FMV par laao, vesting same rakho), (2) Exchange Program (purane options cancel karke nayi options do at 0.8x-1.0x ratio with fresh 1-year cliff), (3) Top-Up Grants (purane chhodo, fresh grants do at current FMV), (4) Vesting Acceleration (time-based vesting aage badhao), (5) Cashout (Re 1 par buyback). Rule 12(2) Companies (Share Capital and Debentures) Rules 2014 ke under Special Resolution at 75 percent majority chahiye, MGT-14 30 din mein file karna padta hai Section 117(2) ke under. Section 17(2)(vi) ka tax exercise par lagega, modification par nahi - DPIIT plus IMB startup hai to Section 80-IAC ka 48 mahine deferral milta hai (60 mahine ITA 2025 mein 1 April 2026 se). Ind AS 102 paragraph 27 ke under incremental fair value remaining vesting period par expense hoga. Listed company hai to SEBI SBEB Regulation 18 ka variation procedure aur Stock Exchange notification. Patron 6 to 10 hafton mein full restructuring complete karta hai. Call +91 945 945 6700."
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
            padding: 20px 0; position: sticky; top:100px; z-index: 50;
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

        /* Conclusion + CTA Block (Dark) - force light text against dark navy
           background. Overrides .content-text/strong/p default dark colours. */
        .content-section[style*="var(--blue)"] .section-title,
        .content-section[style*="var(--blue)"] h2 {
            color: #FFFFFF !important;
        }
        .content-section[style*="var(--blue)"] .content-text,
        .content-section[style*="var(--blue)"] .content-text p {
            color: rgba(255,255,255,0.92) !important;
        }
        .content-section[style*="var(--blue)"] .content-text strong,
        .content-section[style*="var(--blue)"] p strong {
            color: #FFFFFF !important;
            font-weight: 700;
        }
        .content-section[style*="var(--blue)"] .content-text a:not([style*="background"]) {
            color: rgba(255,255,255,0.92) !important;
            text-decoration: underline;
        }

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
                        ESOP Restructuring and Underwater Options
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 11 May 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Five Tools:</span> Repricing, Exchange Program (0.8x-1.0x ratio), Top-Up Grants, Vesting Acceleration, Cashout / Buyback - matched to scheme via quantified recommendation memo</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Workflow:</span> Section 17(2)(vi) timing at exercise (not modification); Section 49(2AA) cost basis; Section 80-IAC 48-month deferral (60 months under ITA 2025)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Accounting:</span> Ind AS 102 paragraphs 26-29 modification accounting; incremental fair value via Black-Scholes recognised over remaining vesting</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 1,25,000 to Rs 2,50,000 for repricing; Rs 1,50,000 to Rs 3,00,000 for exchange program; listed-co SEBI SBEB premium</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Down-Round Remediation Across SaaS Fintech Edtech Healthtech | 10,000+ Businesses Served | 4.9 Google Rating | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20ESOP%20restructuring%20scoping%20call." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ESOP Restructuring'/>
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
                                
                                <option value='Underwater Analysis + Recommendation Memo' selected>Underwater Analysis + Recommendation Memo</option>
                                <option value='ESOP Repricing - Unlisted Startup'>ESOP Repricing - Unlisted Startup</option>
                                <option value='ESOP Repricing - Pre-IPO or Late-Stage'>ESOP Repricing - Pre-IPO or Late-Stage</option>
                                <option value='ESOP Exchange Program - Unlisted Startup'>ESOP Exchange Program - Unlisted Startup</option>
                                <option value='ESOP Exchange Program - Pre-IPO / Late-Stage'>ESOP Exchange Program - Pre-IPO / Late-Stage</option>
                                <option value='Top-Up Grant Issuance'>Top-Up Grant Issuance</option>
                                <option value='Vesting Acceleration (Scheme Amendment)'>Vesting Acceleration (Scheme Amendment)</option>
                                <option value='ESOP Cashout / Buyback Program'>ESOP Cashout / Buyback Program</option>
                                <option value='SEBI SBEB Listed Entity Premium'>SEBI SBEB Listed Entity Premium</option>
                                <option value='Rule 11UA Valuation Refresh'>Rule 11UA Valuation Refresh</option>
                                <option value='Other'>Other</option>


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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding experience with Patron. Professionalism and timely communication made the process seamless.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Business Owner</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Glad I connected with Patron. Really helpful and took minimum time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Entrepreneur</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Fantastic experience. Knowledgeable and smooth handling of all documentation.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Best service for account handling. Extremely happy with dedicated point of contact.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Nimbhorkar</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Smooth process for ITR filing. They understand basics well and respond promptly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SH</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer Mehta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
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
                    <p>Indian startups across SaaS, fintech, edtech, healthtech and consumer-tech post 2022-2025 down-round cycle. Repricing, exchange programs, top-up grants, vesting acceleration and cashout. Unlisted startups and pre-IPO/listed entities with SEBI SBEB compliance. 10,000+ businesses served. 4.9 Google Rating. 15+ years.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#process-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">Deliverables</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">6-10 Week Timeline</a>
            <a href="#comparison-section" class="toc-btn">Five Tools Compared</a>
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
            <h2 class="section-title">Down-Round Remediation for Indian Startups</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Restructuring Services at a Glance</strong></p>
                    <p>When a startup raises a down round or flat round, existing ESOP grants issued at the prior higher valuation can go underwater - the exercise price exceeds the current FMV, and employees have no economic incentive to exercise. Retention breaks down. The five remediation tools are repricing (lower the exercise price), exchange program (cancel old options plus issue new at lower strike with 0.8x-1.0x ratio), top-up grants (leave old options alone, issue fresh grants), vesting acceleration (move time-based vesting forward) and cashout/buyback (purchase underwater options at nominal value). Each tool has distinct Section 17(2)(vi) tax timing, Ind AS 102 paragraphs 26-29 modification accounting and Companies Act/SEBI SBEB compliance implications. Patron designs and executes the right combination on a single Board-approved corporate action.</p>
                </div>
                <p>The 2022-2025 cycle of down rounds and flat rounds across the Indian startup ecosystem left thousands of employees holding ESOPs with exercise prices well above current FMV. A grant issued at Rs 100 exercise price during a Rs 200 FMV Series A is now underwater when the company raises Series B at Rs 60 FMV. The employee will never exercise. The retention value of the ESOP collapses. The HR team faces an attrition crisis. Patron Accounting LLP designs and executes the right corporate action - repricing, exchange program, top-up grants, vesting acceleration or cashout - matched to the specific scheme, talent priorities, accounting profile and statutory layer (listed vs unlisted).</p>
                <p>ESOP restructuring is one of the most technically demanding ESOP engagements because it combines four streams that rarely sit in one team: (1) Companies Act 2013 Section 62(1)(b) plus Rule 12(2) workflow with fresh Special Resolution at 75 percent majority and MGT-14 within 30 days; (2) Section 17(2)(vi) and Section 49(2AA) tax timing analysis with Section 80-IAC 48-month deferral pathway (60 months under Income Tax Act 2025 from 1 April 2026); (3) Ind AS 102 paragraphs 26-29 modification accounting with Black-Scholes-based incremental fair value computation recognised over remaining vesting; and (4) for listed entities, SEBI SBEB Regulations 2021 Regulation 18 variation procedure with Stock Exchange notification under Regulation 19 and detrimental variation prevention. Patron coordinates all four streams under one engagement with named partner accountability. With offices in Pune, Mumbai, Delhi and Gurugram, every restructuring engagement comes with quantified recommendation memo, full Board and EGM workflow, audit-ready Ind AS 102 documentation, employee consent letter rollout and SEBI compliance closure for listed cases.</p>
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
                <h2 class="section-title">What Is an Underwater ESOP and Why It Matters</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An ESOP is underwater when the exercise price specified in the grant letter exceeds the current Fair Market Value (FMV) of the underlying share. Exercising the option would mean paying more for the share than its current market value - economically irrational. Employees holding underwater options have zero realisable value, and the option carries no retention incentive. After a down round or extended flat-valuation period, an entire cohort of employee ESOPs can simultaneously go underwater, creating a company-wide retention crisis.</p>
                    <p>Patron restructuring engagement addresses this through a Board-approved corporate action that restores ESOP economics for the impacted employee base. Five remediation tools are available - Repricing (reduce exercise price of existing options; preserve original vesting), Exchange Program (cancel old options and issue new options at lower exercise price with fresh 1-year cliff; typical exchange ratio 0.8x to 1.0x), Top-Up Grants (issue fresh grants at current FMV without touching old grants), Vesting Acceleration (bring forward time-based vesting), and Cashout / Buyback (purchase outstanding options at nominal value). Each tool has distinct tax timing under Section 17(2)(vi), accounting treatment under Ind AS 102 paragraphs 26-29, and statutory workflow under Section 62(1)(b) plus Rule 12(2) (with SEBI SBEB Regulations 2021 for listed entities).</p>
                    <p><strong>Triggering Events</strong> for ESOP restructuring: Down round (Series B or later funding at lower per-share price than previous round); Flat round (extended period at unchanged valuation while exercise price was set at prior optimistic FMV); Market correction (public market multiple compression flowing through to private FMV via comparable-company analysis); Business deterioration (significant revenue contraction or margin compression reducing DCF-based FMV); Secondary sale at lower price (establishing lower FMV reference); and Restructuring or scheme of arrangement that reduces per-share value.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Restructuring:</strong></p>
                    <p><strong>Exercise Price (Strike Price):</strong> The price specified in the grant letter at which the employee may convert vested options into shares. Determined at grant date.</p>
                    <p><strong>Fair Market Value (FMV):</strong> The Rule 11UA FMV of the underlying share at a given measurement date. Recomputed at material events including funding rounds.</p>
                    <p><strong>Underwater Option:</strong> An option where exercise price exceeds current FMV; economically out-of-the-money; carries zero retention value while underwater.</p>
                    <p><strong>Repricing:</strong> A scheme modification that reduces the exercise price of existing outstanding options to the current FMV (or another lower price). The option itself is preserved with original vesting schedule.</p>
                    <p><strong>Exchange Program:</strong> A corporate action that cancels existing underwater options and issues new options at a lower exercise price. A new 1-year cliff under Rule 12(6)(a) applies to the new options. Typical exchange ratio 0.8x to 1.0x.</p>
                    <p><strong>Top-Up Grant:</strong> A fresh grant of additional options at the current lower FMV layered on top of existing underwater grants. Old grants are not modified.</p>
                    <p><strong>Vesting Acceleration:</strong> A scheme modification that brings forward time-based vesting; does not affect exercise price but improves liquidity and retention.</p>
                    <p><strong>Cashout / Buyback:</strong> A corporate action where the company purchases outstanding options at a nominal value, closing the grant.</p>
                    <p><strong>Incremental Fair Value:</strong> Under Ind AS 102 paragraph 27, the difference between the fair value of the modified option immediately after modification and the fair value of the original option immediately before modification (both computed via Black-Scholes); recognised as additional expense over the remaining vesting period.</p>
                    <p><strong>Detrimental Variation:</strong> Under SEBI SBEB Regulations 2021 Regulation 18, a scheme amendment that adversely impacts grantee economics; prohibited for listed entities without special grantee consent.</p>
                    <p><strong>Exchange Ratio:</strong> The ratio at which surrendered options are exchanged for new options under an Exchange Program; typically 0.8x to 1.0x reflecting time value preserved in surrendered options.</p>
                    <p><strong>Section 62(1)(b) of Companies Act 2013:</strong> Statutory framework for issuing ESOPs and modifying ESOP schemes.</p>
                    <p><strong>Rule 12(2) of Companies (Share Capital and Debentures) Rules 2014:</strong> Approval of scheme and material modifications by Special Resolution at 75 percent majority.</p>
                    <p><strong>Rule 12(6)(a):</strong> Minimum 1-year cliff between grant and first vesting; resets on cancel-and-reissue under Exchange Program but is preserved under Repricing.</p>
                    <p><strong>Rule 12(9):</strong> 11 mandatory ESOP disclosures in Directors Report including modification narrative.</p>
                    <p><strong>Section 17(2)(vi) Income Tax Act 1961:</strong> Perquisite tax at exercise computed as FMV minus exercise price; trigger is exercise, not modification.</p>
                    <p><strong>Section 49(2AA) Income Tax Act 1961:</strong> Cost of acquisition for capital gains at subsequent sale equals FMV taxed as perquisite at exercise; applies to repriced or exchange-program options.</p>
                    <p><strong>Section 80-IAC plus Section 192(2C):</strong> DPIIT plus IMB certified startup 48-month perquisite tax deferral applies to repriced and exchange-program options (60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026).</p>
                    <p><strong>Ind AS 102 Paragraphs 26-29:</strong> Modifications, Cancellations and Settlements of share-based payment arrangements under Indian Accounting Standards.</p>
                    <p><strong>Ind AS 102 Paragraphs B42-B44:</strong> Application Guidance on modifications including incremental fair value computation methodology.</p>
                    <p><strong>SEBI SBEB Regulations 2021 Regulation 18:</strong> Variation of terms for listed entities; prohibits detrimental variation.</p>
                    <p><strong>SEBI SBEB Regulations 2021 Regulation 19:</strong> Listing of shares arising from variation.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Restructuring</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Modification Anchor</span>
                        <strong>Rule 12(2)</strong>
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
            <h2 class="section-title">Who Needs ESOP Restructuring</h2>
            <div class="content-text">
                
                <p>ESOP restructuring is for any Indian company whose existing employee ESOP grants have lost economic value due to a down round, flat round, market correction or business deterioration. Without restructuring, underwater grants carry zero retention value and the HR team faces accelerating attrition among long-tenured employees. The restructuring engagement is technically demanding because it combines Companies Act, Income Tax, Ind AS 102 and (for listed companies) SEBI SBEB workflows under one Board-approved corporate action.</p>
                <ul>
                    <li><strong>Founders and CFOs of Indian startups post down round</strong> - Series B at lower per-share price than Series A, or any subsequent round at lower FMV than original grant exercise price.</li>
                    <li><strong>Heads of People and HR Directors facing retention crises</strong> - long-tenured employees holding grants from 2022-2024 high-FMV rounds whose exercise prices are now well above current FMV; active competitor poaching with fresh grants.</li>
                    <li><strong>Pre-IPO companies needing scheme alignment for DRHP filing</strong> - accumulated grants across 3-5 valuation rounds with mixed underwater status need unified treatment before SEBI SBEB Regulations 2021 application.</li>
                    <li><strong>Mature startups with long-tenured employees</strong> - 4-7 year tenure employees with grants from earlier rounds carrying exercise prices above current trading FMV.</li>
                    <li><strong>Listed entities post-market correction</strong> - listed ESOPs that have gone underwater due to public market multiple compression; need SEBI SBEB Regulation 18 variation procedure with detrimental variation prevention.</li>
                    <li><strong>Companies post-secondary transaction at lower price</strong> - secondary sale of founder or early investor shares establishing lower FMV reference creates retroactive underwater situation for outstanding ESOPs.</li>
                    <li><strong>Wind-down scenarios with underwater overhang</strong> - companies winding down operations with cap table cleanup requirements; cashout / buyback is the cleanest exit for small underwater populations.</li>
                    <li><strong>Companies after scheme of arrangement or restructuring</strong> - reduction of per-share value through corporate restructuring leaves outstanding ESOPs underwater; coordinated remediation required.</li>
                </ul>
                <p><strong>Statutory framework recap:</strong> Material modification of an ESOP scheme requires fresh Special Resolution at 75 percent majority under Rule 12(2) of Companies (Share Capital and Debentures) Rules 2014. MGT-14 must be filed within 30 days of the Special Resolution under Section 117(2) of Companies Act 2013 (penalty Rs 10,000 plus Rs 100 per day continuing default). Directors Report must include modification narrative under Rule 12(9). For listed entities, SEBI SBEB Regulations 2021 Regulation 18 variation procedure applies with Stock Exchange notification under Regulation 19 and prohibition on detrimental variation to grantee economics. Section 17(2)(vi) perquisite tax is triggered at exercise, not at modification - so repricing or cancellation does not itself cause any immediate tax event for employees. Section 49(2AA) sets the cost of acquisition for subsequent capital gains computation. Section 80-IAC plus Section 192(2C) 48-month perquisite tax deferral applies to repriced and exchange-program options for eligible DPIIT plus IMB certified startups (60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026). Ind AS 102 paragraphs 26-29 govern modification accounting with paragraphs B42-B44 Application Guidance on incremental fair value computation.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron ESOP Restructuring Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Underwater Analysis and Recommendation Memo (Standalone)</strong></td><td>Cap table review with current FMV mapping per grant batch; underwater computation per grant; retention risk assessment by tenure band; peer benchmark against similar-stage startups; recommendation memo selecting optimal remediation tool (Repricing vs Exchange vs Top-Up vs Acceleration vs Cashout) with quantified trade-offs.</td><td>Rs 50,000 - 1,00,000</td></tr>
                        <tr><td><strong>Top-Up Grant Issuance (Existing Scheme)</strong></td><td>Pool sizing review against approved scheme; fresh grant batch at current Rule 11UA FMV; valuation refresh; grant letters issued from existing approved pool without scheme amendment.</td><td>Rs 50,000 - 1,00,000</td></tr>
                        <tr><td><strong>Vesting Acceleration (Scheme Amendment)</strong></td><td>Board approval for accelerated time-based vesting; scheme amendment under Rule 12(2); Ind AS 102 incremental fair value computation for the acceleration impact; employee communication pack.</td><td>Rs 60,000 - 1,25,000</td></tr>
                        <tr><td><strong>ESOP Cashout / Buyback Program</strong></td><td>Buyback mechanics under Section 68 read with Rule 12 framework; Section 17(2)(vi) and Section 50CA review for tax treatment; Board and EGM workflow under Section 117(2); employee settlement coordination.</td><td>Rs 1,00,000 - 2,00,000</td></tr>
                        <tr><td><strong>ESOP Repricing - Unlisted Startup</strong></td><td>Recommendation memo plus scheme amendment drafting plus Board/EGM workflow with Special Resolution at 75 percent majority plus MGT-14 filing within 30 days plus Ind AS 102 paragraphs 26-29 modification accounting with Black-Scholes incremental FV plus tax memo confirming Section 17(2)(vi) timing at exercise plus employee communication pack.</td><td>Rs 1,25,000 - 2,00,000</td></tr>
                        <tr><td><strong>ESOP Exchange Program - Unlisted Startup</strong></td><td>Full repricing scope plus cancellation mechanics under Rule 12(2) plus employee consent letter drafting and rollout plus exchange ratio benchmark (0.8x to 1.0x) plus new grant batch issuance with fresh Rule 12(6)(a) 1-year cliff plus Ind AS 102 paragraph 28 cancellation-and-replacement accounting.</td><td>Rs 1,50,000 - 2,50,000</td></tr>
                        <tr><td><strong>ESOP Repricing - Pre-IPO or Late-Stage</strong></td><td>Above repricing scope plus complex grantee analysis across multiple grant batches and valuation rounds plus senior CXO grant carve-outs plus audit working paper documentation for statutory audit and DRHP review.</td><td>Rs 2,00,000 - 2,50,000</td></tr>
                        <tr><td><strong>ESOP Exchange Program - Pre-IPO or Late-Stage</strong></td><td>Above exchange program scope plus multi-tranche rollout across employee tiers plus senior CXO discretion plus SEBI SBEB Regulations 2021 Regulation 18 variation procedure for listed entities plus Stock Exchange notification under Regulation 19.</td><td>Rs 2,50,000 - 3,00,000</td></tr>


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
            <h2 class="section-title">8-Step ESOP Restructuring Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs 6 to 10 weeks end-to-end covering underwater analysis, FMV refresh, scheme amendment drafting, Board and EGM cycle, MGT-14 filing, Ind AS 102 modification accounting, employee communication rollout and (for listed entities) SEBI SBEB compliance closure with Stock Exchange notification.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Underwater Analysis and Recommendation</h3>
                    <p class="step-description">Cap table review with current FMV mapping per grant batch. Compute underwater value per grant (exercise price minus current FMV multiplied by outstanding options). Retention risk assessment by tenure band - long-tenured employees with deep underwater grants are highest attrition risk. Peer benchmark and recommendation memo selecting optimal tool.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Memo delivered</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tool selected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Analysis</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Rule 11UA FMV Refresh</h3>
                    <p class="step-description">Coordinated valuation engagement for new FMV determination at the modification date. DCF (via SEBI Cat I Merchant Banker) preferred where business has projectable cash flows; NAV (via CA) for early-stage or asset-heavy companies; CCA selection for comparable-company benchmark. Defensibility matters - Tax Officer may scrutinise repricing methodology.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV report</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Methodology defensible</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Valuation</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Scheme Amendment Drafting</h3>
                    <p class="step-description">Supplementary scheme document drafting incorporating the corporate action - new exercise price, retained or reset vesting, exchange ratio (if applicable), eligibility, cancellation mechanics, employee consent letter template (for Exchange Program). Drafted under Rule 12(2) framework with material modification language.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Amendment drafted</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Consent letter ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Drafting</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Board Meeting and Resolution</h3>
                    <p class="step-description">Convene Board Meeting approving the corporate action (Repricing, Exchange Program, Top-Up, Acceleration or Cashout). Board Resolution drafted recording the rationale (underwater analysis, retention impact, recommendation memo conclusion). Board calls EGM with 21-day notice and Explanatory Statement.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> BR passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EGM called</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Board</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">EGM and Special Resolution</h3>
                    <p class="step-description">EGM held after 21-day notice. Explanatory Statement under Section 102 explains the modification rationale and impact. Special Resolution at 75 percent majority of members voting under Rule 12(2). Filed MGT-14 within 30 days under Section 117(2) of Companies Act 2013. Penalty Rs 10,000 plus Rs 100 per day for delay.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SR passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">EGM</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Ind AS 102 Modification Accounting</h3>
                    <p class="step-description">Computation of incremental fair value under Ind AS 102 paragraphs 26-29 using Black-Scholes (volatility, risk-free rate, expected term, dividend yield inputs). Recognition schedule over remaining vesting period for Repricing (paragraph 27); cancellation plus new grant treatment for Exchange Program (paragraph 28). Schedule III plus Directors Report Rule 12(9) disclosure.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Black-Scholes done</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit working paper</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Ind AS 102</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Section 17(2)(vi) Tax Memo and Employee Communication</h3>
                    <p class="step-description">Employee-facing tax memo confirming no immediate tax on modification or cancellation; Section 17(2)(vi) perquisite trigger at future exercise on new exercise price; Section 49(2AA) cost-of-acquisition treatment at subsequent sale; Section 80-IAC 48-month deferral (60 months ITA 2025) for eligible DPIIT plus IMB startups. HR communication pack with FAQ and town-hall talking points.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax memo signed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Comms rolled out</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Tax + Comms</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">New Grant Letters and SEBI Closure (Listed Entities)</h3>
                    <p class="step-description">For Repricing - revised grant letters issued reflecting new exercise price with original vesting preserved. For Exchange Program - signed consent letters from employees, cancellation of old options, issuance of new grants with fresh Rule 12(6)(a) 1-year cliff. For listed entities - SEBI SBEB Regulation 18 documentation, Stock Exchange notification under Regulation 19, detrimental variation prevention check.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Grants issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SEBI closed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Closure</span>
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
            <h2 class="section-title">Patron Restructuring Deliverables</h2>
            <div class="content-text">
                
                <p>Every Patron ESOP restructuring engagement produces a complete kit of analysis, statutory filings, accounting documentation, tax memos and employee communication materials.</p>
                <p><strong>1. Underwater Analysis and Recommendation Memo:</strong></p>
                <ul>
                    <li>Cap table review with current FMV mapping per grant batch.</li>
                    <li>Computation of underwater value per grant (exercise price minus current FMV multiplied by outstanding options).</li>
                    <li>Retention risk assessment by tenure band and grant batch.</li>
                    <li>Peer benchmarking against similar-stage Indian startups post-down-round.</li>
                    <li>Recommended remediation tool selection (Repricing vs Exchange Program vs Top-Up vs Acceleration vs Cashout) with quantified trade-offs.</li>
                </ul>
                <p><strong>2. Rule 11UA FMV Refresh:</strong></p>
                <ul>
                    <li>Coordinated valuation engagement through <a href="/esop-valuation-services/">ESOP Valuation Services</a> for new FMV determination at the modification date.</li>
                    <li>DCF (via SEBI Cat I Merchant Banker), NAV (via CA) or CCA methodology selection.</li>
                    <li>Defensibility matters - Tax Officer may scrutinise repricing methodology.</li>
                </ul>
                <p><strong>3. Scheme Modification Drafting:</strong></p>
                <ul>
                    <li>Supplementary scheme document drafting incorporating the corporate action.</li>
                    <li>New exercise price, retained or reset vesting, exchange ratio (if applicable).</li>
                    <li>Eligibility, cancellation mechanics, employee consent letter template.</li>
                </ul>
                <p><strong>4. Board and EGM Workflow:</strong></p>
                <ul>
                    <li>Full Board Meeting and EGM workflow under Section 117(2) of Companies Act 2013.</li>
                    <li>Board Resolution drafting recording rationale.</li>
                    <li>21-day EGM notice with Explanatory Statement under Section 102.</li>
                    <li>Special Resolution at 75 percent majority under Rule 12(2).</li>
                    <li>MGT-14 filing within 30 days. Coordinated with <a href="/esop-corporate-filings/">ESOP Corporate Filings</a> workflow.</li>
                </ul>
                <p><strong>5. Ind AS 102 Modification Accounting:</strong></p>
                <ul>
                    <li>Computation of incremental fair value under Ind AS 102 paragraphs 26-29.</li>
                    <li>Black-Scholes inputs documented (volatility, risk-free rate, expected term, dividend yield).</li>
                    <li>Recognition schedule over remaining vesting period.</li>
                    <li>Schedule III disclosure plus Directors Report Rule 12(9) modification narrative.</li>
                    <li>Coordinated with <a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a> team.</li>
                </ul>
                <p><strong>6. Section 17(2)(vi) Tax Timing Memo:</strong></p>
                <ul>
                    <li>Employee-facing tax memo confirming no immediate tax on modification or cancellation.</li>
                    <li>Section 17(2)(vi) trigger at future exercise on new exercise price.</li>
                    <li>Section 80-IAC deferral availability for eligible DPIIT plus IMB startups (48 months current; 60 months under Income Tax Act 2025 from 1 April 2026).</li>
                    <li>Section 49(2AA) cost-of-acquisition treatment at future sale.</li>
                </ul>
                <p><strong>7. SEBI SBEB Regulations 2021 Compliance (Listed Entities):</strong></p>
                <ul>
                    <li>Regulation 18 variation procedure with shareholder communication.</li>
                    <li>Prohibition on detrimental variation - structure variation to be clearly grantee-beneficial.</li>
                    <li>Stock Exchange notification under Regulation 19 (Listing of shares arising from variation).</li>
                </ul>
                <p><strong>8. Employee Communication Pack:</strong></p>
                <ul>
                    <li>HR-ready communication materials - explanatory pack for employees.</li>
                    <li>Consent letter template for Exchange Program with signature drive coordination.</li>
                    <li>FAQ document covering tax timing, vesting status, exercise mechanics.</li>
                    <li>Town-hall talking points for founder/CFO/HR rollout.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Restructuring Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Modification through Board-only resolution without fresh Special Resolution</strong></td><td>Companies sometimes attempt to reprice through a Board-only resolution to save time. Rule 12(2) of Companies (Share Capital and Debentures) Rules 2014 requires Special Resolution at 75 percent majority for material scheme modification. Repricing or exchange without fresh Special Resolution is void and exposes the company to retention disputes if challenged.</td><td>Patron runs the full Section 117(2) workflow - Board Resolution, 21-day EGM notice with Explanatory Statement, Special Resolution at 75 percent majority, MGT-14 within 30 days. End-to-end statutory compliance documented.</td></tr>
                        <tr><td><strong>No Ind AS 102 modification accounting documentation</strong></td><td>Repricing creates incremental fair value under Ind AS 102 paragraphs 26-29 that must be recognised as additional expense over the remaining vesting period. Many statutory audits flag this when found undocumented - emphasis-of-matter or qualified opinion risk.</td><td>Patron prepares the full Black-Scholes computation (volatility, risk-free rate, expected term, dividend yield inputs) and expense recognition schedule for audit working papers. Schedule III plus Directors Report Rule 12(9) disclosure prepared in parallel.</td></tr>
                        <tr><td><strong>Treating modification as triggering immediate Section 17(2)(vi)</strong></td><td>Section 17(2)(vi) perquisite arises at exercise, not at modification. Some advisors incorrectly compute perquisite at the modification date causing TDS over-deduction at the employer level and unnecessary tax friction for employees.</td><td>Patron tax memo aligns with correct exercise-event timing under Section 17(2)(vi). Section 49(2AA) cost-of-acquisition documented for subsequent sale. Section 80-IAC 48-month deferral (60 months ITA 2025) pathway confirmed for eligible startups.</td></tr>
                        <tr><td><strong>Exchange program offered as 1-for-1 without exchange ratio</strong></td><td>Industry standard exchange ratio is 0.8x to 1.0x reflecting time value preserved in surrendered options. Companies that offer 1-for-1 give away pool capacity unnecessarily - a 10,000-option exchange at 1.0x consumes the same pool as a 10,000-option fresh grant.</td><td>Patron benchmarks the right exchange ratio for your specific underwater depth, vesting status and remaining term. Typical 0.8x-1.0x range; deeper underwater scenarios may justify 0.7x.</td></tr>
                        <tr><td><strong>Listed-co repricing flagged by SEBI as detrimental variation</strong></td><td>SEBI SBEB Regulations 2021 Regulation 18 prohibits detrimental variation to grantee benefits. Listed companies that reduce exchange ratios aggressively or fail to ensure grantee-favourable impact can be flagged as detrimental even if intent is benign.</td><td>Patron structures the variation to be clearly grantee-beneficial. Shareholder communication aligned with detrimental variation prevention check. Stock Exchange notification under Regulation 19 prepared in parallel.</td></tr>
                        <tr><td><strong>No employee consent letter on exchange program</strong></td><td>Exchange programs require explicit employee consent to surrender existing options. Without signed consent letters, the cancellation is contestable - former employees may claim the original grant is still valid and demand exercise at old terms.</td><td>Patron drafts the consent letter template and runs the HR rollout with documented signature drive. Consent retained in employee file alongside revised grant letter. Audit trail complete.</td></tr>
                        <tr><td><strong>Forgetting Rule 12(9) Directors Report modification disclosure</strong></td><td>Rule 12(9) of Companies (Share Capital and Debentures) Rules 2014 requires 11 mandatory ESOP disclosures in Directors Report including modification narrative. Missed disclosure attracts CARO comment and qualified statutory audit opinion.</td><td>Patron Directors Report ESOP disclosure pack covers all 11 Rule 12(9) items including modification narrative with date, rationale, impacted grantees and accounting treatment.</td></tr>
                        <tr><td><strong>Repricing without coordinated FMV refresh under Rule 11UA</strong></td><td>Using stale or undefensible FMV at the modification date triggers Tax Officer scrutiny. Without Rule 11UA-compliant valuation (DCF via SEBI Cat I Merchant Banker, NAV via CA, or CCA), the new exercise price can be challenged at scrutiny.</td><td>Patron coordinates Rule 11UA valuation refresh at modification date with methodology defensibility prioritised. DCF preferred for projectable cash flow; NAV for early-stage/asset-heavy; CCA for comparable-company benchmark.</td></tr>


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
            <h2 class="section-title">ESOP Restructuring Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Underwater analysis and recommendation memo (standalone)</td><td>Cap table review, underwater computation per grant, retention risk assessment, peer benchmark, recommendation memo</td><td class="table-amount">Rs 50,000 - 1,00,000</td></tr>
                        <tr><td>Top-up grant issuance (existing scheme)</td><td>Pool sizing review, fresh grant batch at current FMV, Rule 11UA FMV refresh, grant letters</td><td class="table-amount">Rs 50,000 - 1,00,000</td></tr>
                        <tr><td>Vesting acceleration (scheme amendment)</td><td>Board approval, scheme amendment, Ind AS 102 incremental FV computation, employee communication</td><td class="table-amount">Rs 60,000 - 1,25,000</td></tr>
                        <tr><td>Rule 11UA valuation (pass-through)</td><td>FMV refresh at modification date; DCF/NAV/CCA methodology selection</td><td class="table-amount">Rs 75,000 - 1,75,000</td></tr>
                        <tr><td>ESOP cashout / buyback program</td><td>Buyback mechanics, Section 17(2)(vi)/Section 50CA review, Board and EGM workflow, employee settlement</td><td class="table-amount">Rs 1,00,000 - 2,00,000</td></tr>
                        <tr><td>ESOP repricing - unlisted startup</td><td>Memo plus scheme amendment plus Board/EGM plus MGT-14 plus Ind AS 102 modification accounting plus tax memo plus comms pack</td><td class="table-amount">Rs 1,25,000 - 2,00,000</td></tr>
                        <tr><td>ESOP exchange program - unlisted startup</td><td>Above plus cancellation mechanics, employee consent letter, exchange ratio benchmark, new grant batch issuance</td><td class="table-amount">Rs 1,50,000 - 2,50,000</td></tr>
                        <tr><td>ESOP repricing - pre-IPO / late-stage</td><td>Above plus complex grantee analysis, senior CXO carve-outs, audit working paper documentation</td><td class="table-amount">Rs 2,00,000 - 2,50,000</td></tr>
                        <tr><td>ESOP exchange program - pre-IPO / late-stage</td><td>Above plus multi-tranche rollout, senior CXO discretion, SEBI SBEB Regulation 18 for listed entities</td><td class="table-amount">Rs 2,50,000 - 3,00,000</td></tr>
                        <tr><td>SEBI SBEB listed entity premium (add-on)</td><td>Regulation 18 variation procedure plus Stock Exchange notification plus shareholder communication</td><td class="table-amount">Add Rs 75,000 - 1,50,000</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for ESOP Repricing unlisted startup; SEBI SBEB listed-co premium adds Rs 75,000-1,50,000; multi-jurisdiction US-India structures quoted separately</td><td class="table-amount"><strong>Starting from INR 1,25,000 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Restructuring consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20underwater%20ESOP%20restructuring." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restructuring Timeline (6 to 10 Weeks)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron 6-10 Week Workflow</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Week 1 - Cap table review, underwater analysis, retention risk assessment</td><td class="table-amount">Recommendation memo</td></tr>
                        <tr><td>Week 2 - Rule 11UA valuation engagement; new FMV report</td><td class="table-amount">FMV report (DCF/NAV/CCA)</td></tr>
                        <tr><td>Week 2-3 - Scheme amendment drafting; exchange ratio benchmark (if Exchange Program); employee consent letter template</td><td class="table-amount">Draft amendment + consent letter</td></tr>
                        <tr><td>Week 3 - Board Meeting and Resolution approving the corporate action</td><td class="table-amount">Board Resolution</td></tr>
                        <tr><td>Week 3-5 - EGM Notice (21-day notice) and EGM date</td><td class="table-amount">Explanatory Statement filed; SR passed</td></tr>
                        <tr><td>Week 5 - MGT-14 filed within 30 days under Section 117(2)</td><td class="table-amount">MCA21 receipt</td></tr>
                        <tr><td>Week 5-6 - Ind AS 102 incremental FV computation; Black-Scholes documentation; expense recognition schedule</td><td class="table-amount">Audit working paper file</td></tr>
                        <tr><td>Week 6 - Employee communication rollout; consent letter signature drive (Exchange Program)</td><td class="table-amount">Signed consent letters</td></tr>
                        <tr><td>Week 6-7 - New grant letters issued or original grant letters reissued with revised exercise price (Repricing)</td><td class="table-amount">Revised/new grant letters signed</td></tr>
                        <tr><td>Week 7-10 - Stock Exchange notification (Listed entities); SEBI compliance closure</td><td class="table-amount">Listed-co compliance complete</td></tr>
                        <tr><td><strong>Statutory Deadlines</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>EGM notice prior to Special Resolution under Section 101</td><td class="table-amount">Minimum 21 days</td></tr>
                        <tr><td>MGT-14 filing post Special Resolution under Section 117(2)</td><td class="table-amount">Within 30 days</td></tr>
                        <tr><td>PAS-3 post share allotment on exercise of repriced/new options</td><td class="table-amount">Within 30 days</td></tr>
                        <tr><td>Directors Report disclosure under Rule 12(9) - 11 mandatory items</td><td class="table-amount">Annual</td></tr>
                        <tr><td>Stock Exchange notification (Listed entities) under SEBI SBEB Regulation 19</td><td class="table-amount">As prescribed by Exchange</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Section 117(2) of Companies Act 2013 imposes MGT-14 filing within 30 days of Special Resolution. Default attracts penalty of Rs 10,000 plus Rs 100 per day continuing default - a 6-month delay can exceed Rs 25,000 in penalty plus regulatory friction. EGM notice must be issued at least 21 days before the EGM date under Section 101 with Explanatory Statement under Section 102. For listed entities, SEBI SBEB Regulations 2021 Regulation 18 variation procedure applies with Stock Exchange notification under Regulation 19 - detrimental variation to grantee benefits is prohibited. Ind AS 102 paragraph 27 modification accounting must recognise incremental fair value over the remaining vesting period; missed accounting attracts statutory audit qualification or emphasis-of-matter. Section 17(2)(vi) perquisite tax is triggered at exercise (not modification) - employee TDS computation must align with this timing to prevent over-deduction. Section 80-IAC 48-month deferral (60 months under Income Tax Act 2025 Section 392(3) from 1 April 2026) continues post-modification for DPIIT plus IMB certified startups.

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
            <h2 class="section-title">Why Patron for ESOP Restructuring</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Five-Tool Remediation Framework</h3><p>Repricing, Exchange Program, Top-Up Grants, Vesting Acceleration and Cashout / Buyback - matched to your scheme via quantified recommendation memo. Decision framework covers six factors including underwater depth, vesting credit importance and pool capacity.</p></article>
    <article class="feature-card"><h3>Ind AS 102 Modification Accounting Expertise</h3><p>Paragraphs 26-29 incremental fair value computation with Black-Scholes inputs audit-ready (volatility, risk-free rate, expected term, dividend yield). Paragraph 27 for Repricing, paragraph 28 for cancellation-and-replacement Exchange Program.</p></article>
    <article class="feature-card"><h3>Section 17(2)(vi) and Section 49(2AA) Tax Timing</h3><p>Clean tax memo confirming no immediate tax on modification or cancellation. Trigger at exercise on new exercise price. Section 80-IAC deferral pathway preserved (48 months current; 60 months under Income Tax Act 2025 from 1 April 2026).</p></article>
    <article class="feature-card"><h3>SEBI SBEB Regulations 2021 Expertise (Listed Entities)</h3><p>Regulation 18 variation procedure with detrimental variation prevention; Regulation 19 listing of shares arising from variation; Stock Exchange notification workflow. Pre-IPO companies benefit from clean SEBI SBEB alignment ahead of DRHP filing.</p></article>
    <article class="feature-card"><h3>Single Firm Coordinating Four Streams</h3><p>Companies Act 2013 plus Income Tax 1961 plus Ind AS 102 plus SEBI SBEB 2021 (for listed entities) - all four streams under one engagement with named partner accountability. No coordination tax across separate firms.</p></article>
    <article class="feature-card"><h3>Employee Communication Craft</h3><p>HR-ready communication pack including consent letter template, FAQ document, town-hall talking points. Minimises retention damage during the restructuring window. Coordinated signature drive for Exchange Program consent.</p></article>
    <article class="feature-card"><h3>Exchange Ratio Benchmarking</h3><p>Industry-standard 0.8x to 1.0x exchange ratio benchmarked against underwater depth, vesting status and remaining term. Prevents pool waste from 1-for-1 exchanges and structuring inefficiency.</p></article>
    <article class="feature-card"><h3>15-Plus Years Across MCA, CBDT, ICAI, SEBI, IBBI</h3><p>Patron has been designing and restructuring ESOPs since 2009 across SaaS, fintech, edtech, healthtech and consumer-tech startups post 2022-2025 down-round cycle. 10,000+ businesses served, 4.9 Google rating.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Post-Down-Round Across SaaS, Fintech, Edtech, Healthtech</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years in Practice</strong></p>
                <p>Our Series A was at Rs 200 FMV and we issued 5,000 options at Rs 100 strike each to our first 25 hires. Our Series B closed at Rs 60 FMV - everyone was underwater. Half the team was actively interviewing. Patron designed a repricing to Rs 60 while preserving original vesting, completed Board and EGM within 6 weeks, and we kept 22 of 25 people through the cycle. - CFO, vertical SaaS startup (Bengaluru).</p>
                <p>Pre-IPO we needed to clean up 4 years of accumulated underwater grants from 3 different schemes adopted at different valuation rounds. Patron ran a unified exchange program with 0.85x exchange ratio, drafted the SEBI SBEB Regulation 18 documentation, and managed Stock Exchange notification. We filed DRHP three months later with a clean ESOP profile. - Company Secretary, late-stage fintech (Mumbai).</p>
                <p><strong>Selected Clients (Illustrative):</strong> Restructuring engagements completed across SaaS, fintech, edtech, healthtech and consumer-tech startups post 2022-2025 down-round cycle. Enterprise compliance work for Hyundai, Asian Paints and Bridgestone illustrates pan-India operational footprint.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves Indian startups facing underwater ESOP situations across India - both in-person and remotely. Pan-India remote engagement standard.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Five Remediation Tools Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Remediation Option</th>
                            <th>Mechanic</th>
                            <th>Tax Implication</th>
                            <th>Accounting Treatment</th>
                            <th>Best Used When</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>1. Repricing</strong></td><td>Reduce exercise price of existing options to new lower FMV; original vesting schedule preserved including cliff and vesting credit</td><td>Section 17(2)(vi) at later exercise on new lower exercise price; no immediate tax at modification</td><td>Ind AS 102 Paragraph 27 - incremental FV (Black-Scholes post minus pre) recognised over remaining vesting period</td><td>Modest underwater amount (less than 30 percent below FMV); preserving vesting credit is critical for retention</td></tr>
                        <tr><td><strong>2. Exchange Program</strong></td><td>Cancel old options; issue new options at current FMV with fresh 1-year cliff under Rule 12(6)(a); typical exchange ratio 0.8x to 1.0x</td><td>Section 17(2)(vi) at exercise of new options; no immediate tax on cancellation; Section 80-IAC restarts (new grant date)</td><td>Ind AS 102 Paragraph 28 - treated as cancellation plus new grant; original FV continues; new FV expensed over new vesting</td><td>Deep underwater (50 percent or more below FMV); willing to reset vesting clock; pool capacity available</td></tr>
                        <tr><td><strong>3. Top-Up Grants</strong></td><td>Leave existing options unchanged; issue fresh grants at current FMV from approved pool</td><td>Original options remain; new options on standard Section 17(2)(vi) at future exercise</td><td>Original Ind AS 102 expense continues unchanged; new grant separately expensed at grant-date FV</td><td>Old grants modestly underwater but vesting clock matters; pool capacity available; no scheme amendment desired</td></tr>
                        <tr><td><strong>4. Vesting Acceleration</strong></td><td>Move time-based vesting forward without changing exercise price</td><td>No exercise price change; Section 17(2)(vi) timing accelerated to earlier exercise window</td><td>Ind AS 102 Paragraph 27 - any incremental FV from acceleration recognised over remaining vesting</td><td>Retention-driven; near-term liquidity event (IPO, M&amp;A) planned; exercise price not the issue</td></tr>
                        <tr><td><strong>5. Cashout / Buyback</strong></td><td>Company purchases outstanding options at nominal price (Re 1 or face value); option closed</td><td>Buyback receipt taxable as capital gain or perquisite based on facts; Section 50CA for unlisted</td><td>Ind AS 102 - settlement treated as accelerated vesting; remaining unvested FV expensed immediately</td><td>Wind-down scenarios; small grant population; small dollar economics; cap table cleanup needed</td></tr>


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
            <h2 class="section-title">Adjacent Patron ESOP Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="/esop-services/">ESOP Services Master Hub</a></strong> - end-to-end ESOP lifecycle services covering all verticals and engagement types including ongoing scheme operations post-restructuring.</li>
                    <li><strong><a href="/esop-scheme-design/">ESOP Scheme Design</a></strong> - first-time scheme drafting with sample term sheet (used for new schemes, not for restructuring).</li>
                    <li><strong><a href="/esop-for-tech-startups/">ESOP for Tech Startups</a></strong> - tech-vertical scheme design for SaaS, fintech, AI/ML, marketplaces, deeptech and B2B; useful context for understanding pre-restructuring scheme architecture.</li>
                    <li><strong><a href="/esop-for-saas-companies/">ESOP for SaaS Companies</a></strong> - B2B SaaS-specific design with ARR-linked vesting, sales quota acceleration and Delaware flip structures.</li>
                    <li><strong><a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a></strong> - share-based payment expense and Schedule III disclosure; critical for modification accounting workflow during restructuring.</li>
                    <li><strong><a href="/esop-valuation-services/">ESOP Valuation Services</a></strong> - Rule 11UA FMV reports for the modification date during restructuring; DCF, NAV or CCA methodology selection.</li>
                    <li><strong><a href="/esop-corporate-filings/">ESOP Corporate Filings</a></strong> - ongoing MCA filings retainer (MGT-14, PAS-3, MGT-7) for post-restructuring annual cycle including Rule 12(9) Directors Report disclosure.</li>
                    <li><strong><a href="/fdi-compliance/">FDI Compliance</a></strong> - cross-border filings where US Delaware parent or foreign parent restructures involve India subsidiary mirror grants.</li>
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
                
                <ul>
                    <li><strong>Section 62(1)(b), Companies Act 2013</strong> - statutory framework for ESOPs and ESOP scheme modifications. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs portal</a>.</li>
                    <li><strong>Rule 12, Companies (Share Capital and Debentures) Rules 2014</strong> - operational provisions for ESOP including scheme adoption and modification.</li>
                    <li><strong>Rule 12(2), Companies (Share Capital and Debentures) Rules 2014</strong> - approval of scheme and material modifications by Special Resolution at 75 percent majority. Repricing, exchange program and vesting acceleration are material modifications.</li>
                    <li><strong>Rule 12(6)(a)</strong> - minimum 1-year cliff between grant and first vesting. Resets on cancel-and-reissue under Exchange Program; preserved under Repricing.</li>
                    <li><strong>Rule 12(9)</strong> - 11 mandatory ESOP disclosures in Directors Report including modification narrative with date, rationale, impacted grantees and accounting treatment.</li>
                    <li><strong>Section 117(2), Companies Act 2013</strong> - MGT-14 filing within 30 days of Special Resolution. Penalty Rs 10,000 plus Rs 100 per day continuing default.</li>
                    <li><strong>Section 39(4) read with Rule 12</strong> - PAS-3 within 30 days of share allotment on exercise of repriced or exchange-program options.</li>
                    <li><strong>Section 68, Companies Act 2013</strong> - buyback authority used for Cashout / Buyback corporate action where company purchases outstanding options at nominal value.</li>
                    <li><strong>Section 17(2)(vi), Income Tax Act 1961</strong> - perquisite tax at exercise; trigger is exercise, not modification or cancellation. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department portal</a>.</li>
                    <li><strong>Section 49(2AA), Income Tax Act 1961</strong> - cost of acquisition for capital gains at subsequent sale equals FMV taxed as perquisite at exercise; applies to repriced or exchange-program options.</li>
                    <li><strong>Section 80-IAC + Section 192(2C), Income Tax Act 1961</strong> - DPIIT plus IMB certified startup 48-month perquisite tax deferral applies to repriced and exchange-program options.</li>
                    <li><strong>Income Tax Act 2025 Section 392(3) read with Section 289(3)</strong> - extended 60-month deferral effective 1 April 2026.</li>
                    <li><strong>Rule 11UA, Income Tax Rules 1962</strong> - FMV methodology for new exercise price determination - DCF (Discounted Cash Flow), NAV (Net Asset Value), CCA (Comparable Companies Approach), CCM.</li>
                    <li><strong>Section 56(2)(x), Income Tax Act 1961</strong> - sub-FMV issuance receipt taxability; relevant for exchange program pricing review where new exercise price is below FMV.</li>
                    <li><strong>Section 50CA, Income Tax Act 1961</strong> - sub-FMV transfer of unlisted shares treated at FMV; relevant for cashout / buyback structuring.</li>
                    <li><strong>Ind AS 102 Paragraphs 26-29</strong> - Modifications, Cancellations and Settlements of share-based payment arrangements under Indian Accounting Standards.</li>
                    <li><strong>Ind AS 102 Paragraph 27</strong> - modification that increases fair value of equity instruments - incremental fair value recognised over remaining vesting period.</li>
                    <li><strong>Ind AS 102 Paragraph 28</strong> - cancellation and replacement - original grant cancelled; new grant recognised separately at grant-date fair value.</li>
                    <li><strong>Ind AS 102 Paragraphs B42-B44</strong> - Application Guidance on modifications including incremental fair value computation methodology.</li>
                    <li><strong>ICAI Guidance Note on Accounting for Share-based Payments (September 2020)</strong> - modification accounting illustrations under Indian Accounting Standards.</li>
                    <li><strong>SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 Regulation 18</strong> - Variation of terms for listed entities; cannot be detrimental to grantees; price variation requires specific shareholder communication.</li>
                    <li><strong>SEBI SBEB Regulations 2021 Regulation 19</strong> - Listing of shares arising from variation; Stock Exchange notification workflow.</li>
                    <li><strong>Section 101, Companies Act 2013</strong> - EGM notice minimum 21 days before meeting date.</li>
                    <li><strong>Section 102, Companies Act 2013</strong> - Explanatory Statement to be annexed to notice of general meeting; covers modification rationale and impact.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority for Income Tax Act matters. <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">CBDT notifications</a>.</li>
                    <li><strong>Securities and Exchange Board of India (SEBI)</strong> - regulator for listed entities under SBEB Regulations 2021. <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI portal</a>.</li>
                    <li><strong>Institute of Chartered Accountants of India (ICAI)</strong> - Ind AS 102 Application Guidance and Guidance Note publications.</li>
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
                    <p class="faq-expanded__lead">Long-tail answers on ESOP restructuring and underwater options remediation - underwater definition, repricing vs exchange program, Rule 12(2) modification procedure, Ind AS 102 paragraphs 26-29 modification accounting, Section 17(2)(vi) tax timing, exchange ratios, down-round impact and shareholder approval workflow.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an underwater ESOP?</h3>
                        <div class="faq-expanded__a"><p>An underwater ESOP is one where the exercise price specified in the grant letter exceeds the current Fair Market Value (FMV) of the underlying share. Exercising would mean paying more for the share than its current market value - economically irrational. Underwater situations typically arise after a down round, flat round, market correction or business deterioration that reduces the current FMV below the originally set exercise price. The option carries zero retention value while it remains underwater.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can ESOP exercise price be reduced after grant?</h3>
                        <div class="faq-expanded__a"><p>Yes through a formal scheme amendment. Rule 12(2) of the Companies (Share Capital and Debentures) Rules 2014 requires material modification of an ESOP scheme to be approved by Special Resolution at 75 percent majority at an EGM. MGT-14 must be filed within 30 days of the Special Resolution under Section 117(2). Modification narrative must be disclosed in the Directors Report under Rule 12(9). For listed companies, additional procedures under SEBI SBEB Regulations 2021 Regulation 18 apply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is repricing of ESOPs allowed in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Repricing is a permitted material modification of an ESOP scheme under Rule 12(2) provided it is approved by Special Resolution. Repricing reduces the exercise price of existing outstanding options to current FMV (or another lower price) while preserving the original vesting schedule. The fresh Rule 12(6)(a) 1-year cliff does NOT apply to repricing - the original cliff and vesting credit continue. Section 17(2)(vi) is triggered only at exercise on the new lower exercise price.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does Ind AS 102 treat ESOP modification?</h3>
                        <div class="faq-expanded__a"><p>Ind AS 102 paragraphs 26-29 govern modification accounting. The original grant-date fair value continues to be expensed over the original vesting period. If the modification increases the fair value of the option (which repricing does), an incremental fair value is computed (post-modification fair value minus pre-modification fair value, both using Black-Scholes) and recognised as additional expense over the remaining vesting period. For a cancellation-and-replacement exchange program, the original grant is treated as cancelled and the new grant is recognised separately at its grant-date fair value.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does repricing trigger immediate income tax for employees?</h3>
                        <div class="faq-expanded__a"><p>No. Section 17(2)(vi) perquisite tax is triggered at the EXERCISE event, not at the modification event. Repricing or exchange-program cancellation does not itself cause any perquisite tax for the employee. When the employee later exercises the repriced option or the new exchange-program option, the perquisite is computed on the THEN-current FMV minus the NEW exercise price. Section 80-IAC 48-month (60-month under ITA 2025) deferral continues to apply for eligible DPIIT plus IMB certified startups.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is an ESOP exchange program?</h3>
                        <div class="faq-expanded__a"><p>An exchange program is a corporate action where existing underwater options are cancelled and new options are issued at a lower exercise price. A new 1-year cliff under Rule 12(6)(a) applies to the new options. The exchange ratio is typically 0.8x to 1.0x (i.e. 1,000 surrendered options exchanged for 800 to 1,000 new options) reflecting time value preserved in the original grant. Exchange programs require employee consent letter, fresh Special Resolution and MGT-14 filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Should we reprice or do an exchange program for underwater ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Repricing is generally preferred when the underwater gap is modest (less than 30 percent below FMV) and vesting credit is critical for retention - it preserves the original cliff and vesting timeline. Exchange programs are preferred when the underwater gap is deep (more than 50 percent) and the company is willing to reset vesting with a fresh 1-year cliff. Exchange programs typically use an exchange ratio of 0.8x to 1.0x to manage pool capacity. Listed entities face additional SEBI SBEB complexity. Patron recommendation memo quantifies the trade-offs for your specific scheme.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Underwater ESOP kya hota hai aur kya kar sakte hain? (What is an underwater ESOP and what can be done)</h3>
                        <div class="faq-expanded__a"><p>Underwater ESOP wo hota hai jab exercise price (jo grant letter mein likha hai) current FMV se zyada ho jaaye. Yaani agar aap exercise karoge to share ki current value se zyada paise dene padenge - koi sense nahi banta. Yeh aksar down round ya flat round ke baad hota hai - Series A par Rs 200 FMV tha, options Rs 100 par mile, ab Series B Rs 60 par close ho gaya - sab underwater. Paanch options hote hain remediation ke liye - (1) Repricing (exercise price ko current FMV par laao, vesting same rakho), (2) Exchange Program (purane options cancel karke nayi options do at 0.8x-1.0x ratio with fresh 1-year cliff), (3) Top-Up Grants (purane chhodo, fresh grants do at current FMV), (4) Vesting Acceleration (time-based vesting aage badhao), (5) Cashout (Re 1 par buyback). Rule 12(2) Companies (Share Capital and Debentures) Rules 2014 ke under Special Resolution at 75 percent majority chahiye, MGT-14 30 din mein file karna padta hai Section 117(2) ke under. Section 17(2)(vi) ka tax exercise par lagega, modification par nahi - DPIIT plus IMB startup hai to Section 80-IAC ka 48 mahine deferral milta hai (60 mahine ITA 2025 mein 1 April 2026 se). Ind AS 102 paragraph 27 ke under incremental fair value remaining vesting period par expense hoga. Listed company hai to SEBI SBEB Regulation 18 ka variation procedure aur Stock Exchange notification. Patron 6 to 10 hafton mein full restructuring complete karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Underwater ESOP definition?</strong> Exercise price exceeds current FMV; option carries zero retention value.</li>
                    <li><strong>Modification approval required?</strong> Fresh Special Resolution at 75 percent majority under Rule 12(2); MGT-14 within 30 days under Section 117(2).</li>
                    <li><strong>Section 17(2)(vi) trigger?</strong> Exercise event, not modification - no immediate tax on repricing or cancellation.</li>
                    <li><strong>Ind AS 102 treatment?</strong> Paragraphs 26-29; incremental fair value via Black-Scholes recognised over remaining vesting period.</li>
                    <li><strong>Repricing vs Exchange Program?</strong> Repricing preserves vesting credit; Exchange Program resets cliff with 0.8x-1.0x ratio.</li>
                    <li><strong>Exchange program ratio?</strong> Industry standard 0.8x to 1.0x; deeper underwater may justify 0.7x.</li>
                    <li><strong>New cliff on Exchange Program?</strong> Yes - fresh Rule 12(6)(a) 1-year cliff applies to newly issued exchange-program options.</li>
                    <li><strong>Section 80-IAC deferral post-modification?</strong> Continues for eligible DPIIT plus IMB startups - 48 months current; 60 months under Income Tax Act 2025 from 1 April 2026.</li>
                    <li><strong>SEBI SBEB listed-co rule?</strong> Regulation 18 variation procedure with detrimental variation prohibited; Regulation 19 Stock Exchange notification.</li>
                    <li><strong>Section 49(2AA)?</strong> Cost of acquisition for capital gains at subsequent sale equals FMV taxed as perquisite at exercise.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Underwater ESOP - Engage Before Q4 Attrition Cycle</h2>
            <div class="content-text">
                
                Underwater ESOP retention crises compound over time. Once long-tenured employees identify zero realisable value in their grants, active interviewing typically begins within 60 days. Patron's 6 to 10 week restructuring timeline must start before the Q4 attrition cycle to protect the engineering and product talent base. MGT-14 default under Section 117(2) attracts Rs 10,000 plus Rs 100 per day continuing default. EGM notice requires minimum 21 days under Section 101 with Explanatory Statement under Section 102. For listed entities, SEBI SBEB Regulations 2021 Regulation 18 variation procedure must be completed with Stock Exchange notification under Regulation 19 - detrimental variation to grantee benefits is prohibited and triggers SEBI scrutiny. Ind AS 102 modification accounting documentation must be ready for the next statutory audit cycle to prevent qualified opinion or emphasis-of-matter. Section 17(2)(vi) tax timing memo prevents employer TDS over-deduction at the modification date. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free ESOP restructuring scoping call - response within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for ESOP Restructuring</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">The 2022-2025 down-round cycle left thousands of Indian startup employees holding ESOPs that are economically dead. The retention value of those grants collapsed at the precise moment retention was most needed. The choice is binary - take a Board-approved corporate action to restore ESOP economics, or watch top engineering, product and CXO talent leave for competitors offering fresh grants at current FMV. The five remediation tools - Repricing, Exchange Program, Top-Up Grants, Vesting Acceleration, Cashout / Buyback - each address a different combination of underwater depth, vesting credit importance, pool capacity, accounting tolerance and listed/unlisted status.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP designs and executes the right corporate action matched to your specific scheme. Companies Act Rule 12(2) workflow with fresh Special Resolution and MGT-14 within 30 days. Ind AS 102 paragraphs 26-29 modification accounting with audit-ready Black-Scholes incremental fair value documentation. Section 17(2)(vi) tax timing memo confirming no immediate tax at modification. SEBI SBEB Regulations 2021 Regulation 18 variation procedure for listed entities with detrimental variation prevention. Employee communication pack including consent letter, FAQ and town-hall talking points. All four streams under one engagement with named partner accountability. 10,000+ businesses served. 4.9 Google rating. 15+ years in practice.</p>
                <p style="color:rgba(255,255,255,0.92);">Ready to address your underwater ESOP situation? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free ESOP restructuring scoping call. Response within 2 hours. 6 to 10 week end-to-end timeline from analysis to first revised grant letter or new grant batch.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20underwater%20ESOP%20restructuring." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Patron ESOP and Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">ESOP restructuring integrates with adjacent ESOP lifecycle services - scheme design, valuation, Ind AS 102 accounting, MCA filings and tech-vertical scheme architecture. Patron operates from Pune, Mumbai, Delhi and Gurugram offices with pan-India remote engagement standard. Explore the master ESOP hub and adjacent services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron ESOP Services</h3>
                <div class="pa-cross-grid">
                    <a href="/esop-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Services Master Hub</strong><span>End-to-end ESOP lifecycle</span></div>
                    </a>
                    <a href="/esop-scheme-design/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Scheme Design</strong><span>First-time scheme drafting</span></div>
                    </a>
                    <a href="/esop-for-tech-startups/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for Tech Startups</strong><span>General tech vertical scheme architecture</span></div>
                    </a>
                    <a href="/esop-for-saas-companies/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for SaaS Companies</strong><span>B2B SaaS vertical with ARR vesting</span></div>
                    </a>
                    <a href="/esop-accounting-ind-as-102/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Accounting Ind AS 102</strong><span>Modification accounting paragraphs 26-29</span></div>
                    </a>
                    <a href="/esop-valuation-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Valuation Services</strong><span>Rule 11UA FMV at modification date</span></div>
                    </a>
                    <a href="/esop-corporate-filings/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Corporate Filings</strong><span>MGT-14, PAS-3, MGT-7 retainer</span></div>
                    </a>
                    <a href="/fdi-compliance/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>FDI Compliance</strong><span>Cross-border foreign parent structures</span></div>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 11 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 2 quarterly review (Ind AS 102 Application Guidance evolves; SEBI SBEB amendments; ICAI Guidance Note updates). Triggers for review: Rule 12 amendments to ESOP modification framework, Section 17(2)(vi) and Section 49(2AA) timing clarifications, Section 80-IAC plus Section 192(2C) perquisite tax deferral period changes (currently 48 months; 60 months under Income Tax Act 2025 Section 392(3) read with 289(3) from 1 April 2026), Ind AS 102 paragraphs 26-29 modification accounting guidance updates, SEBI SBEB Regulations 2021 Regulation 18 and 19 amendments, ICAI Guidance Note on Accounting for Share-based Payments revisions and Rule 11UA FMV methodology refinements. Sources: Ministry of Corporate Affairs (mca.gov.in), Income Tax Department (incometax.gov.in), SEBI (sebi.gov.in), ICAI publications (icai.org), CBDT notifications (incometaxindia.gov.in) and SEBI Cat I Merchant Banker valuation practice notes.</p>
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




<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection