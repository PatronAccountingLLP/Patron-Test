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
    <title>ESOP Secondary Sale India: Tender Offer, Buyback, Tax</title>
    <meta name="description" content="ESOP secondary sale, buyback and tender offer advisory for Indian startups - capital gains tax, FEMA NDI Rule 21, FC-TRS filing. From Rs 2,00,000.">
    <link rel="canonical" href="/esop-secondary-sale-advisory">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Secondary Sale India: Tender Offer, Buyback, Tax | Patron Accounting">
    <meta property="og:description" content="ESOP secondary sale, buyback and tender offer advisory for Indian startups - capital gains tax, FEMA NDI Rule 21, FC-TRS filing. From Rs 2,00,000.">
    <meta property="og:url" content="/esop-secondary-sale-advisory/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/esop-secondary-sale-advisory-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Secondary Sale India: Tender Offer, Buyback, Tax | Patron Accounting">
    <meta name="twitter:description" content="ESOP secondary sale, buyback and tender offer advisory for Indian startups - capital gains tax, FEMA NDI Rule 21, FC-TRS filing. From Rs 2,00,000.">
    <meta name="twitter:image" content="/images/esop-secondary-sale-advisory-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "/esop-secondary-sale-advisory/#service",
        "name": "ESOP Secondary Sale and Buyback Advisory",
        "url": "/esop-secondary-sale-advisory/",
        "description": "Structured employee liquidity program advisory for Indian growth-stage and pre-IPO startups covering four secondary sale vehicles - (1) Tender Offer where the company orchestrates a coordinated sale of employee shares to a third-party investor (existing VC, growth fund, secondary fund) at a uniform price typically benchmarked against last round or 10-30 percent discount with 21-30 day employee election window; (2) Company Buyback under Section 68 of Companies Act 2013 with Board approval up to 10 percent under Section 68(2)(a) and Special Resolution up to 25 percent under Section 68(2)(b) using free reserves and securities premium with Section 70 12-month cooling period and Form SH-9, SH-10, SH-11 procedural compliance under Rule 17 of Companies (Share Capital and Debentures) Rules 2014 - post Finance (No. 2) Act 2024 the Section 115QA Buyback Distribution Tax has been abolished effective 1 October 2024 and buyback proceeds are now taxable in shareholder hands as deemed dividend under Section 2(22)(f); (3) ESOP Trust Secondary Acquisition under SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 Regulation 6 with 2 percent of paid-up capital per year annual cap and overall 5 percent ceiling combining primary plus secondary; (4) Direct Secondary Sale where employee sells bilaterally to investor or co-shareholder. End-to-end engagement covering vehicle selection diagnostic, Rule 11UA FMV defensibility via SEBI Cat I Merchant Banker (DCF or NAV methodology), capital gains modelling under Section 45 charging section read with Section 48 computation with Section 49(2AA) cost basis (FMV at exercise taxed as perquisite under Section 17(2)(vi)), Section 2(42A) 24-month LTCG holding period from exercise date, Section 112 12.5 percent LTCG rate without indexation effective 23 July 2024, Section 50CA deemed full value consideration on seller if priced below FMV, Section 56(2)(x) deemed income on buyer if priced below FMV, Section 195 TDS by Indian resident on payment to non-resident buyer, FEMA Non-Debt Instruments Rules 2019 Rule 21 cross-border pricing not below FMV, FC-TRS Foreign Currency Transfer of Shares filing within 60 days of resident-to-non-resident transfer through authorised dealer bank, sectoral FDI cap compliance, ROFR and pre-emption rights waiver from existing shareholders under SHA. Employee communication including offer letter, FAQ document, tax memo per-employee, election form, post-tender remaining-employee transparency.",
        "serviceType": "ESOP Secondary Sale, Tender Offer and Buyback Advisory",
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
                "name": "Tender offer",
                "sameAs": "https://en.wikipedia.org/wiki/Tender_offer"
            },
            {
                "@type": "Thing",
                "name": "Share repurchase",
                "sameAs": "https://en.wikipedia.org/wiki/Share_repurchase"
            },
            {
                "@type": "Thing",
                "name": "Capital gains tax",
                "sameAs": "https://en.wikipedia.org/wiki/Capital_gains_tax"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Secondary Program Engagement Tiers",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Liquidity Vehicle Diagnostic",
                    "priceCurrency": "INR",
                    "price": "50000",
                    "description": "2-week diagnostic - liquidity goal mapping, vehicle comparison across tender/buyback/Trust/direct, recommendation memo"
                },
                {
                    "@type": "Offer",
                    "name": "Rule 11UA Valuation (Pass-Through)",
                    "priceCurrency": "INR",
                    "price": "75000",
                    "description": "FMV report by SEBI Cat I Merchant Banker - DCF or NAV methodology; defensibility for Section 50CA and Section 56(2)(x) protection"
                },
                {
                    "@type": "Offer",
                    "name": "ESOP Trust Secondary Acquisition",
                    "priceCurrency": "INR",
                    "price": "100000",
                    "description": "Trust-led secondary acquisition under SEBI SBEB 2021 Regulation 6; 2 percent annual cap compliance; overall 5 percent ceiling tracking"
                },
                {
                    "@type": "Offer",
                    "name": "Company Buyback (Section 68)",
                    "priceCurrency": "INR",
                    "price": "150000",
                    "description": "Buyback workflow including SH-9, SH-10, SH-11; Section 70 12-month cooling period; post-FA 2024 tax mechanics; employee communication"
                },
                {
                    "@type": "Offer",
                    "name": "Annual Recurring Secondary Program (3-Year Retainer)",
                    "priceCurrency": "INR",
                    "price": "150000",
                    "description": "Annual tender offer or buyback program; ongoing employee education and execution; 3-year retainer model used at Zerodha and Razorpay"
                },
                {
                    "@type": "Offer",
                    "name": "Tender Offer (Small to Mid Size)",
                    "priceCurrency": "INR",
                    "price": "200000",
                    "description": "Full tender offer documentation, pricing, tax planning, employee communication, execution and post-tender; up to 100 participants"
                },
                {
                    "@type": "Offer",
                    "name": "Cross-Border Buyer Add-On",
                    "priceCurrency": "INR",
                    "price": "75000",
                    "description": "FEMA NDI Rule 21 compliance plus FC-TRS filing within 60 days plus sectoral cap analysis plus Section 195 TDS workflow"
                },
                {
                    "@type": "Offer",
                    "name": "Tender Offer (Large or Multi-Tranche)",
                    "priceCurrency": "INR",
                    "price": "350000",
                    "description": "Multi-investor coordination, complex pricing, cross-border buyer FC-TRS, 100-plus participants, pre-IPO multi-tranche workflows"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "/esop-secondary-sale-advisory/#breadcrumb",
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
                "name": "ESOP Secondary Sale and Buyback Advisory",
                "item": "/esop-secondary-sale-advisory/"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "/esop-secondary-sale-advisory/#faq",
  "datePublished": "2026-05-11T08:00:00+05:30",
  "dateModified": "2026-05-11T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is an ESOP secondary sale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP secondary sale is a transaction where an employee sells shares acquired through ESOP exercise (or sometimes vested-but-unexercised options through cashless mechanism) to a third party - an investor, fund, or back to the company through buyback. It provides liquidity to employees between grant and the IPO or M&A exit. Four vehicles - tender offer (company-organised), company buyback under Section 68, ESOP Trust secondary acquisition under SEBI SBEB 2021 Regulation 6 (2 percent annual cap), or direct sale to a specific investor. Patron diagnostic memo recommends the right vehicle."
      }
    },
    {
      "@type": "Question",
      "name": "How does an ESOP tender offer work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A tender offer is a structured liquidity program where the company orchestrates a coordinated sale of employee shares to a third-party investor (existing VC, growth fund, secondary fund) at a uniform price. Steps - investor identification and pricing negotiation, Rule 11UA FMV defensibility, eligibility criteria definition (tenure, vested vs exercised, per-employee caps), 21-30 day employee election window, execution and settlement, post-tender remaining-employee communication. Typically run pre-IPO (6-18 months before DRHP filing) at 10-30 percent discount to last round."
      }
    },
    {
      "@type": "Question",
      "name": "What is the tax on ESOP secondary sale in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Capital gains tax under Section 45 and 48 Income Tax Act 1961. Cost of acquisition is the FMV at exercise (Section 49(2AA)) which was already taxed as perquisite under Section 17(2)(vi). Holding period for LTCG is 24 months from exercise date (Section 2(42A)). LTCG rate is 12.5 percent without indexation under Section 112 (post Finance Act 2024 effective 23 July 2024). STCG (under 24 months) is at slab rate for unlisted shares. Section 50CA penalises sale below FMV - full FMV is deemed sale consideration. Section 56(2)(x) similarly penalises the buyer."
      }
    },
    {
      "@type": "Question",
      "name": "Can foreign investors buy ESOP shares from Indian employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, subject to FEMA Non-Debt Instruments Rules 2019. Pricing must be not below FMV under Rule 11UA read with Rule 21 of FEMA NDI Rules. FC-TRS filing required within 60 days of transfer. Sectoral cap compliance - some sectors have FDI caps that constrain foreign buyer holdings. If buyer is FPI-registered, FPI investment regime applies; if non-FPI, FDI regime applies. NRI buyers under Schedule III of NDI Rules face a less restrictive regime. Section 195 TDS may apply on payment from non-resident buyer."
      }
    },
    {
      "@type": "Question",
      "name": "Is buyback tax still applicable post Finance Act 2024?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Section 115QA Buyback Distribution Tax was abolished by Finance (No. 2) Act 2024 effective 1 October 2024. Buyback proceeds are now taxable in shareholder hands as deemed dividend under Section 2(22)(f) at slab rate. This shifts the tax burden from company to shareholder. For shareholders in 30 percent slab, total tax rate increased from 23.296 percent (pre-FA 2024) to potentially 39 percent (post-FA 2024). Tender offer or direct secondary sale may now be more tax-efficient than buyback for many shareholders due to capital gains LTCG rate of 12.5 percent."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between buyback and secondary sale?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Buyback - company repurchases its own shares from employees using free reserves and securities premium; governed by Section 68 Companies Act 2013; post FA 2024 proceeds taxed as deemed dividend in shareholder hands at slab rate. Secondary Sale (Tender Offer or Direct) - employees sell to third-party investor; governed by capital gains under Section 45 and 48; cost basis under Section 49(2AA); 24-month holding for LTCG at 12.5 percent under Section 112. Post FA 2024 tender offer is typically more tax-efficient than buyback for shareholders in 30 percent slab."
      }
    },
    {
      "@type": "Question",
      "name": "How is the price determined in ESOP secondary?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing typically benchmarked against most-recent funding round - same as round, or 10-30 percent discount (common for pre-IPO tender offers). For pre-IPO 6-12 months before DRHP, often at expected IPO price minus 20-30 percent. Rule 11UA FMV report by SEBI Cat I Merchant Banker (DCF method) or CA (NAV method) provides defensibility floor - sale must not be below FMV to avoid Section 50CA plus Section 56(2)(x) penalty for both parties. Patron coordinates valuation and pricing negotiation."
      }
    },
    {
      "@type": "Question",
      "name": "How long do I need to hold ESOP shares for LTCG?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "24 months for unlisted shares (typical pre-IPO ESOP situation) - under Section 2(42A) Income Tax Act 1961. Holding period starts from DATE OF EXERCISE (allotment), not date of grant. Sale within 24 months attracts STCG at slab rate (typically 30 percent plus surcharge plus cess for mid-to-high bracket employees). Sale after 24 months attracts LTCG at 12.5 percent under Section 112 (post FA 2024 effective 23 July 2024). For listed shares (post-IPO), the threshold is 12 months and LTCG rate is 12.5 percent above Rs 1.25 lakh exemption."
      }
    },
    {
      "@type": "Question",
      "name": "ESOP secondary sale par tax kitna lagta hai? (How much tax on ESOP secondary sale)",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP secondary sale par capital gains tax lagta hai. Cost basis exercise ke time ki FMV hoti hai under Section 49(2AA) - kyunki exercise par jo perquisite tax already paid kiya hai Section 17(2)(vi) ke under, woh hi cost basis ban jata hai, double tax nahi hota. 24 mahine se zyada hold kiya to LTCG - 12.5 percent without indexation under Section 112 (post Finance Act 2024 effective 23 July 2024). 24 mahine se kam to STCG - slab rate par (30 percent plus surcharge plus cess typically). Holding period date of EXERCISE se start hota hai, date of grant se nahi. Example - 10,000 shares Rs 500 mein bechi, exercise ke time Rs 200 FMV thi (cost basis), 3 saal hold ki thi. Capital gain = (500-200) x 10000 = Rs 30 lakh. LTCG tax 12.5 percent = Rs 3.75 lakh plus surcharge plus cess approximately Rs 4.29 lakh. Net Rs 45.71 lakh employee ke paas. Section 50CA aur Section 56(2)(x) ka penalty hota hai agar FMV se neeche bech do to. Buyback (post FA 2024) abhi shareholder hands mein deemed dividend tax karte hain at slab under Section 2(22)(f) - 30 percent slab waale ko 39 percent tak tax lag sakta hai. Usually tender offer more tax-efficient hota hai. Cross-border buyer hai to FEMA NDI Rule 21 ka pricing rule (not below FMV) aur FC-TRS 60 din mein file karna padta hai. Patron Rs 2-5 lakh per program charge karta hai end-to-end. Call +91 945 945 6700."
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
                        ESOP Secondary Sale and Buyback Advisory
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Four Vehicles:</span> Tender Offer, Company Buyback (Section 68), ESOP Trust Secondary (SBEB Reg 6 - 2 percent annual cap), Direct Sale</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Workflow:</span> Capital gains under Section 45/48; cost basis Section 49(2AA); 24-month LTCG threshold; 12.5 percent LTCG rate post FA 2024</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FEMA + FC-TRS:</span> Cross-border buyer requires Rule 11UA pricing under FEMA NDI Rule 21; FC-TRS within 60 days; Section 195 TDS mechanics</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 2,00,000 to Rs 5,00,000 per secondary program; coordinated across CA, CS, valuation and FEMA on one engagement</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Tender Offers + Buybacks for Indian Growth-Stage Startups | 10,000+ Businesses Served | 4.9 Google Rating | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20ESOP%20secondary%20scoping%20call." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ESOP Secondary'/>
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
                                
                                <option value='Liquidity Vehicle Diagnostic' selected>Liquidity Vehicle Diagnostic</option>
                                <option value='Tender Offer - Small to Mid Size'>Tender Offer - Small to Mid Size</option>
                                <option value='Tender Offer - Large or Multi-Tranche'>Tender Offer - Large or Multi-Tranche</option>
                                <option value='Company Buyback under Section 68'>Company Buyback under Section 68</option>
                                <option value='ESOP Trust Secondary Acquisition'>ESOP Trust Secondary Acquisition</option>
                                <option value='Cross-Border Buyer + FC-TRS'>Cross-Border Buyer + FC-TRS</option>
                                <option value='Rule 11UA Valuation Pass-Through'>Rule 11UA Valuation Pass-Through</option>
                                <option value='Annual Recurring Secondary Program'>Annual Recurring Secondary Program</option>
                                <option value='Pre-IPO Tender Offer Coordination'>Pre-IPO Tender Offer Coordination</option>
                                <option value='Direct Secondary Sale Advisory'>Direct Secondary Sale Advisory</option>
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
                    <p>Indian growth-stage and pre-IPO startups across SaaS, fintech, consumer-tech, healthtech and pharma verticals. Series C onwards. Tender offers, Section 68 buybacks, Trust secondary acquisitions and direct secondary sales. Cross-border buyers with FEMA NDI Rule 21 plus FC-TRS workflows. 10,000+ businesses served. 4.9 Google Rating. 15+ years.</p>
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
            <a href="#timeline-section" class="toc-btn">8-14 Week Timeline</a>
            <a href="#comparison-section" class="toc-btn">Four Vehicles</a>
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
            <h2 class="section-title">Employee Liquidity Programs - Tender Offers and Buybacks</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Secondary Services at a Glance</strong></p>
                    <p>ESOP holders need liquidity events between grant and IPO/M&A exit - structured secondary programs provide this. Four vehicles - (1) tender offer (company-organised sale to third-party investors), (2) company buyback under Section 68 Companies Act 2013 (now taxable in shareholder hands as deemed dividend post Finance Act 2024 under Section 2(22)(f)), (3) ESOP Trust secondary acquisition under SEBI SBEB Regulation 6 (2 percent annual cap), (4) direct secondary sale (employee to investor without company orchestration). Tax treatment - capital gains under Section 45/48 with Section 49(2AA) cost basis (FMV at exercise); 24-month holding from exercise for LTCG at 12.5 percent (Section 112 post FA 2024); STCG at slab. Cross-border buyer triggers FEMA NDI Rule 21 pricing and FC-TRS filing within 60 days. Patron coordinates pricing, tax, FEMA and disclosure on one engagement.</p>
                </div>
                <p>ESOP holders face a structural liquidity problem - vesting takes 4 to 6 years, exercise requires cash, and the company is unlisted with no public market for the shares. Secondary programs solve this. The 2022-2025 wave saw Razorpay, Cred, Meesho, Pine Labs, PharmEasy and Zerodha run structured employee secondary programs - some annual, some pre-IPO. Each vehicle has distinct mechanics, tax treatment, regulatory profile and employee communication needs.</p>
                <p>Patron Accounting LLP designs and executes employee liquidity programs end-to-end - vehicle selection diagnostic, pricing under Rule 11UA of Income Tax Rules 1962 with SEBI Cat I Merchant Banker DCF or CA NAV methodology, capital gains modelling under Section 49(2AA) cost basis and Section 112 LTCG rate, FEMA NDI Rule 21 plus FC-TRS for foreign buyers, post-Finance Act 2024 buyback tax workflow under Section 2(22)(f), Section 195 TDS mechanics for non-resident buyers, ROFR and pre-emption waivers from existing shareholders, and remaining-employee communication post-tender. Single firm coordinating CA, CS, valuation, FEMA and HR streams on one engagement. With offices in Pune, Mumbai, Delhi and Gurugram serving Indian growth-stage startups across SaaS, fintech, consumer-tech and pharma verticals.</p>
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
                <h2 class="section-title">What Is an ESOP Secondary Sale</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP secondary sale is a transaction where an employee sells shares acquired through ESOP exercise (or sometimes vested-but-unexercised options through cashless mechanism) to a third party - an investor, fund, or back to the company through buyback. It provides liquidity to employees between grant and the IPO or M&amp;A exit. Without a secondary program, ESOP holders typically wait 7 to 10 years for liquidity (vesting plus pre-IPO timing); structured secondary programs compress this materially.</p>
                    <p>Four vehicles are available - (1) Tender Offer where the company orchestrates a coordinated sale of employee shares to a third-party investor (existing VC, growth fund, secondary fund) at a uniform price; (2) Company Buyback under Section 68 of Companies Act 2013 using free reserves and securities premium with Board approval up to 10 percent or Special Resolution up to 25 percent; (3) ESOP Trust Secondary Acquisition under SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 Regulation 6 with 2 percent of paid-up capital per year annual cap; (4) Direct Secondary Sale where employee sells bilaterally to investor or co-shareholder.</p>
                    <p>Tax treatment is governed by capital gains framework - Section 45 charging section read with Section 48 computation, Section 49(2AA) cost basis (FMV taken as perquisite at exercise under Section 17(2)(vi)), Section 2(42A) 24-month LTCG threshold for unlisted shares from date of exercise, Section 112 12.5 percent LTCG rate without indexation effective 23 July 2024 post Finance (No. 2) Act 2024. Section 50CA penalises sale below FMV on the seller side; Section 56(2)(x) penalises the buyer side. For cross-border transactions, FEMA Non-Debt Instruments Rules 2019 Rule 21 requires pricing not below FMV; FC-TRS filing within 60 days; sectoral FDI cap compliance; Section 195 TDS by Indian resident on payment to non-resident.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Secondary:</strong></p>
                    <p><strong>Tender Offer:</strong> Company-orchestrated coordinated sale of employee shares to a third-party investor (existing VC, growth fund, secondary fund) at a uniform price across all participating employees. Standard structured secondary vehicle for Indian growth-stage startups.</p>
                    <p><strong>Company Buyback:</strong> Company repurchases its own shares from employees using free reserves and securities premium under Section 68 of Companies Act 2013. Board approval up to 10 percent (Section 68(2)(a)); Special Resolution up to 25 percent (Section 68(2)(b)).</p>
                    <p><strong>ESOP Trust Secondary Acquisition:</strong> Where the company has adopted Trust route, the ESOP Trust acquires shares from employees in secondary market under SEBI SBEB 2021 Regulation 6 with 2 percent paid-up capital per year cap and overall 5 percent ceiling combining primary plus secondary.</p>
                    <p><strong>Direct Secondary Sale:</strong> Employee sells directly to investor or other shareholder without company orchestration; bilateral negotiation; less common for ESOP holders due to ROFR/pre-emption rights in SHA.</p>
                    <p><strong>Section 45, Income Tax Act 1961:</strong> Charging section for capital gains on transfer of capital asset including ESOP shares.</p>
                    <p><strong>Section 48, Income Tax Act 1961:</strong> Computation of capital gains - sale consideration minus cost of acquisition minus expenses on transfer.</p>
                    <p><strong>Section 49(2AA), Income Tax Act 1961:</strong> Cost of acquisition for ESOP shares equals FMV taken as perquisite at exercise under Section 17(2)(vi). Critical because the perquisite tax already paid forms the cost basis - avoids double taxation.</p>
                    <p><strong>Section 2(42A), Income Tax Act 1961:</strong> 24-month holding period for LTCG classification on unlisted equity shares. Holding period starts from date of EXERCISE (allotment), not date of grant.</p>
                    <p><strong>Section 112, Income Tax Act 1961:</strong> LTCG rate 12.5 percent without indexation for unlisted shares effective 23 July 2024 post Finance (No. 2) Act 2024 (was 20 percent with indexation pre-FA 2024).</p>
                    <p><strong>Section 50CA, Income Tax Act 1961:</strong> Deemed full value of consideration if unlisted shares sold below FMV; full FMV is treated as sale consideration regardless of actual price paid.</p>
                    <p><strong>Section 56(2)(x), Income Tax Act 1961:</strong> Buyer taxed on receipt of property below FMV; difference between FMV and actual consideration treated as deemed income.</p>
                    <p><strong>Section 195, Income Tax Act 1961:</strong> TDS by Indian resident on payment to non-resident; applies to cross-border secondary where non-resident buyer pays Indian resident seller.</p>
                    <p><strong>Section 115QA, Income Tax Act 1961:</strong> Buyback Distribution Tax - abolished by Finance (No. 2) Act 2024 effective 1 October 2024. Pre-FA 2024 the company paid 23.296 percent on buyback proceeds; shareholders received tax-free.</p>
                    <p><strong>Section 2(22)(f), Income Tax Act 1961 (post FA 2024):</strong> Buyback proceeds deemed dividend taxable in shareholder hands at slab rate effective 1 October 2024. For 30 percent slab shareholder, effective rate can reach 39 percent.</p>
                    <p><strong>Section 68, Companies Act 2013:</strong> Buyback of securities framework. Section 68(2)(a) - 10 percent buyback under Board approval; Section 68(2)(b) - 25 percent with Special Resolution.</p>
                    <p><strong>Section 70, Companies Act 2013:</strong> Restrictions on buyback - 12-month cooling period between buybacks; debt-equity ratio caps.</p>
                    <p><strong>Rule 17, Companies (Share Capital and Debentures) Rules 2014:</strong> Buyback procedural requirements; Form SH-9 (Notice of Meeting), SH-10 (Register of Buyback), SH-11 (Return of Buyback).</p>
                    <p><strong>Rule 11UA, Income Tax Rules 1962:</strong> FMV methodology for unlisted shares - DCF (Discounted Cash Flow via SEBI Cat I Merchant Banker), NAV (Net Asset Value via CA), CCA (Comparable Companies Approach).</p>
                    <p><strong>FEMA NDI Rule 21:</strong> Rule 21 of FEMA Non-Debt Instruments Rules 2019 - pricing guidelines for cross-border sale of Indian unlisted shares; price not below FMV under Rule 11UA.</p>
                    <p><strong>FC-TRS (Foreign Currency Transfer of Shares):</strong> Filing within 60 days of resident-to-non-resident (or non-resident-to-resident) transfer through authorised dealer bank. Late filing attracts RBI compounding under Section 13 FEMA.</p>
                    <p><strong>SEBI SBEB 2021 Regulation 6:</strong> Trust route secondary acquisition cap - 2 percent of paid-up capital per year; overall 5 percent ceiling combining primary and secondary.</p>
                    <p><strong>ROFR (Right of First Refusal):</strong> Contractual right of existing shareholders (VCs, founders) to first refuse new share transfers; embedded in Shareholders Agreement; must be waived before tender offer execution.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Secondary</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Anchor</span>
                        <strong>Section 49(2AA)</strong>
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
            <h2 class="section-title">Who Needs ESOP Secondary Program Advisory</h2>
            <div class="content-text">
                
                <p>ESOP secondary program advisory is for any Indian growth-stage or pre-IPO startup planning a structured employee liquidity event, or for ESOP holders seeking exit on existing grants. The Finance Act 2024 buyback tax abolition shifted shareholder economics significantly, making tender offers typically more tax-efficient than buybacks for most ESOP holders in higher slabs.</p>
                <ul>
                    <li><strong>CFOs and CHROs of growth-stage Indian startups planning structured employee secondary programs</strong> - typically Series C onwards with employees holding 4-7 years of vested grants; secondary program restores ESOP retention value before next round.</li>
                    <li><strong>Pre-IPO companies running tender offer 6-18 months before DRHP filing</strong> - one major liquidity event for employees before listing; typically at last-round price or 10-30 percent discount.</li>
                    <li><strong>Mature startups with strong free reserves planning company buyback under Section 68</strong> - post-FA 2024 buyback tax shifted to shareholder hands as deemed dividend; comparative tax analysis with tender offer often favours tender.</li>
                    <li><strong>Companies with ESOP Trust already in place planning annual rolling secondary acquisition</strong> - SEBI SBEB 2021 Regulation 6 permits up to 2 percent paid-up capital per year via Trust secondary; ongoing employee liquidity.</li>
                    <li><strong>Growth funds, secondary funds and existing VC investors acquiring from employees</strong> - VC seeks additional position; growth fund (Goldman Sachs, GIC, Temasek); dedicated secondary fund equivalents.</li>
                    <li><strong>ESOP holders seeking direct secondary sale to specific named investor or co-shareholder</strong> - smaller bilateral transactions; ROFR/pre-emption rights waiver coordination required.</li>
                    <li><strong>Companies with cross-border buyer base requiring FEMA NDI Rule 21 plus FC-TRS workflow</strong> - foreign growth funds, NRI investors, FPI-registered buyers; sectoral cap compliance critical.</li>
                    <li><strong>Annual recurring secondary program operators</strong> - typical at Zerodha and Razorpay; 3-year retainer model with annual tender offer or buyback cycles.</li>
                </ul>
                <p><strong>Statutory framework recap:</strong> Section 45 of Income Tax Act 1961 is the charging section for capital gains on transfer of capital asset. Section 48 prescribes computation. Section 49(2AA) sets cost of acquisition equal to FMV taken as perquisite at exercise under Section 17(2)(vi) - avoids double taxation. Section 2(42A) establishes 24-month holding period from exercise date for LTCG classification on unlisted shares. Section 112 imposes 12.5 percent LTCG rate without indexation post Finance (No. 2) Act 2024 effective 23 July 2024. Section 50CA deems full FMV as sale consideration if priced below FMV; Section 56(2)(x) deems income on buyer if priced below FMV - both penalise sub-FMV transactions. Section 195 imposes TDS by Indian resident on payment to non-resident. Section 115QA Buyback Distribution Tax was abolished by Finance (No. 2) Act 2024 effective 1 October 2024; Section 2(22)(f) now treats buyback proceeds as deemed dividend in shareholder hands at slab rate. Section 68 of Companies Act 2013 with Section 70 restrictions and Rule 17 procedural framework (Form SH-9, SH-10, SH-11) governs company buyback. FEMA NDI Rules 2019 Rule 21 governs cross-border pricing; FC-TRS filing within 60 days. SEBI SBEB 2021 Regulation 6 governs Trust secondary acquisition with 2 percent annual cap and 5 percent overall ceiling.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron ESOP Secondary Program Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Liquidity Vehicle Diagnostic (Standalone)</strong></td><td>2-week diagnostic covering liquidity goal mapping, vehicle comparison across all four routes (Tender, Buyback, Trust Secondary, Direct), comparative tax analysis post-FA 2024, recommendation memo with quantified trade-offs. Often the entry point before committing to a specific vehicle.</td><td>Rs 50,000 - 1,00,000</td></tr>
                        <tr><td><strong>Rule 11UA Valuation (Pass-Through)</strong></td><td>FMV report by SEBI Cat I Merchant Banker (DCF method) or CA (NAV method). Defensibility floor for Section 50CA seller protection and Section 56(2)(x) buyer protection. Critical for cross-border buyer FEMA NDI Rule 21 compliance.</td><td>Rs 75,000 - 1,75,000</td></tr>
                        <tr><td><strong>ESOP Trust Secondary Acquisition</strong></td><td>Trust-led secondary acquisition under SEBI SBEB 2021 Regulation 6 with 2 percent paid-up capital per year cap; overall 5 percent ceiling tracking combining primary plus secondary; Trust compliance under Regulations 28-29.</td><td>Rs 1,00,000 - 2,00,000</td></tr>
                        <tr><td><strong>Company Buyback (Section 68)</strong></td><td>Buyback workflow under Section 68 of Companies Act 2013 - Form SH-9 Notice of Meeting, SH-10 Register of Buyback, SH-11 Return of Buyback; Section 70 12-month cooling period management; post-Finance Act 2024 deemed dividend tax mechanics under Section 2(22)(f); employee communication pack.</td><td>Rs 1,50,000 - 3,00,000</td></tr>
                        <tr><td><strong>Annual Recurring Secondary Program (3-Year Retainer)</strong></td><td>Annual tender offer or buyback program; ongoing employee education and execution; investor relationship management for repeat buyer base; SHA ROFR waivers cycle-by-cycle. Used at Zerodha and Razorpay.</td><td>Rs 1,50,000 - 3,00,000/yr</td></tr>
                        <tr><td><strong>Tender Offer (Small to Mid Size)</strong></td><td>Full tender offer documentation, pricing negotiation with investor, Rule 11UA FMV report, per-employee tax planning memo (LTCG vs STCG bracketing), employee communication pack (offer letter, FAQ, election form), execution and settlement, SH-4 share transfer filings, post-tender remaining-employee transparency. Up to ~100 participants.</td><td>Rs 2,00,000 - 3,50,000</td></tr>
                        <tr><td><strong>Cross-Border Buyer Add-On</strong></td><td>FEMA NDI Rule 21 compliance plus FC-TRS filing within 60 days through authorised dealer bank plus sectoral FDI cap analysis plus Section 195 TDS workflow for non-resident buyer plus DTAA Article 13 capital gains analysis. Layered on top of any tender or direct sale engagement.</td><td>Add Rs 75,000 - 1,50,000</td></tr>
                        <tr><td><strong>Tender Offer (Large or Multi-Tranche)</strong></td><td>Multi-investor coordination, complex pricing across grantee tiers, cross-border buyer FC-TRS, 100-plus participants, pre-IPO multi-tranche workflows, NCLT coordination if required, SEBI Cat I Merchant Banker DCF coordination.</td><td>Rs 3,50,000 - 5,00,000</td></tr>


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
            <h2 class="section-title">8-Step Secondary Program Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs 8 to 14 weeks end-to-end covering liquidity vehicle diagnostic, Rule 11UA FMV valuation, documentation drafting, Board and (if required) EGM cycle, employee election window with per-employee tax memos, execution and settlement with SH-4 filings, FC-TRS within 60 days for cross-border buyers, and post-secondary remaining-employee communication.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Liquidity Vehicle Diagnostic</h3>
                    <p class="step-description">2-week diagnostic establishing liquidity goal (broad employee retention vs senior leadership reward vs pre-IPO clean-up), eligible employee population, target liquidity quantum, investor or buyback funding source, FA 2024 post-buyback-tax economics, ROFR/SHA constraints. Recommendation memo selects optimal vehicle - Tender / Buyback / Trust Secondary / Direct - with quantified trade-offs.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Goal mapped</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Vehicle selected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Diagnostic</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Rule 11UA Valuation and Pricing</h3>
                    <p class="step-description">Coordinated valuation engagement for FMV at sale date - SEBI Cat I Merchant Banker DCF for projectable cash flows, CA NAV for asset-heavy or early-stage, CCA for comparable-company benchmark. Pricing negotiation with investor at last-round or 10-30 percent discount (pre-IPO 6-12 months before DRHP often at expected IPO price minus 20-30 percent). Section 50CA and Section 56(2)(x) defensibility floor confirmed.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV report</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pricing locked</span>
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
                    <h3 class="step-title">Documentation and Tax Planning</h3>
                    <p class="step-description">Tender offer documentation drafted - offer letter, eligibility criteria (tenure thresholds, vested vs exercised, per-employee caps typically 30 percent of holdings), Share Transfer Agreement, election form. Per-employee tax planning memo - LTCG (held over 24 months from exercise) vs STCG bracketing; surcharge and cess computation by income slab; advance tax payment timing.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs ready</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Per-employee memos</span>
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
                    <h3 class="step-title">Board and EGM Cycle</h3>
                    <p class="step-description">Board Resolution approving the secondary corporate action. For Section 68 buyback under 10 percent route - Board approval suffices; under 25 percent route - Special Resolution at EGM with 21-day notice under Section 101. SHA ROFR/pre-emption waivers obtained from existing shareholders. For Section 68 buyback also - public announcement and SH-9 Notice of Meeting filed.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> BR/SR passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ROFR waived</span>
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
                    <h3 class="step-title">Employee Election Window</h3>
                    <p class="step-description">21 to 30 day employee election window. Eligible employees receive offer letter with timeline, pricing, terms, tax memo and FAQ document. Pre-tender education sessions on capital gains mechanics, LTCG vs STCG, post-tender ITR support. Election forms collected; per-employee elections aggregated for total tender size confirmation with investor. Communication transparency on pricing rationale.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Elections collected</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pre-tender education</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Election</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Execution and Settlement</h3>
                    <p class="step-description">Funds transferred to employee bank accounts via NEFT/RTGS. Share Transfer Agreements signed. SH-4 Form for transfer of shares filed by company for each transferring employee under Section 56(1) read with Rule 11. Cap table updated. For Section 68 buyback - shares cancelled; SH-10 Register of Buyback maintained; SH-11 Return of Buyback filed.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Settled</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SH-4 filed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Settlement</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">FC-TRS Filing (Cross-Border)</h3>
                    <p class="step-description">For cross-border buyers - FC-TRS (Foreign Currency Transfer of Shares) filed within 60 days of transfer through authorised dealer bank. Supporting documents - share transfer deed, sale consideration receipt, Rule 11UA FMV report, KYC of both parties. Sectoral FDI cap confirmation. Section 195 TDS reconciliation with non-resident buyer tax department.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FC-TRS filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sectoral OK</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">FC-TRS</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Post-Secondary Communication and ITR Support</h3>
                    <p class="step-description">Post-tender remaining-employee communication - updated cap table, transparency on pricing rationale, equal-treatment confirmation, retention signal. ITR support setup for selling employees - capital gains computation with Section 49(2AA) cost basis, advance tax payment timing, Schedule CG reporting. Annual program participants enrolled for next cycle.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Comms done</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR support</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Wrap-Up</span>
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
            <h2 class="section-title">Patron Secondary Program Deliverables</h2>
            <div class="content-text">
                
                <p>Every Patron ESOP secondary program engagement produces a complete kit of diagnostic memos, governance documents, valuation reports, employee communication, statutory filings and post-program support.</p>
                <p><strong>1. Liquidity Vehicle Diagnostic Memo:</strong></p>
                <ul>
                    <li>Liquidity goal mapping with stakeholder alignment (founder, CFO, CHRO, lead investor).</li>
                    <li>Vehicle comparison across all four routes - Tender Offer, Section 68 Buyback, Trust Secondary, Direct Sale.</li>
                    <li>Comparative tax analysis post-Finance Act 2024 buyback tax abolition.</li>
                    <li>Quantified trade-offs on tax-efficiency, employee perception, execution complexity and timeline.</li>
                    <li>Recommendation memo with single vehicle or hybrid combination.</li>
                </ul>
                <p><strong>2. Rule 11UA FMV Valuation Report:</strong></p>
                <ul>
                    <li>SEBI Cat I Merchant Banker DCF methodology preferred for projectable cash flows.</li>
                    <li>CA NAV methodology for asset-heavy or early-stage companies.</li>
                    <li>CCA Comparable Companies Approach as cross-check.</li>
                    <li>Defensibility floor for Section 50CA seller protection and Section 56(2)(x) buyer protection.</li>
                    <li>Critical for FEMA NDI Rule 21 cross-border buyer pricing compliance.</li>
                    <li>Coordinated through <a href="/esop-valuation-services/">ESOP Valuation Services</a>.</li>
                </ul>
                <p><strong>3. Tender Offer / Buyback Documentation:</strong></p>
                <ul>
                    <li>Offer Letter to employees with timeline, pricing, eligibility, terms.</li>
                    <li>Share Transfer Agreement (Tender) or Buyback documentation (Section 68).</li>
                    <li>Eligibility criteria framework (tenure thresholds, vested vs exercised, per-employee caps).</li>
                    <li>Election Form with consent and tax acknowledgement.</li>
                    <li>Form SH-9 Notice of Meeting, SH-10 Register of Buyback, SH-11 Return of Buyback (for Section 68 buyback).</li>
                </ul>
                <p><strong>4. Per-Employee Tax Planning Memo:</strong></p>
                <ul>
                    <li>Section 49(2AA) cost basis (FMV at exercise) per-employee.</li>
                    <li>Holding period computation from exercise date under Section 2(42A).</li>
                    <li>LTCG vs STCG classification with Section 112 12.5 percent LTCG rate post-FA 2024.</li>
                    <li>Surcharge and cess computation by income slab.</li>
                    <li>Advance tax payment timing and ITR Schedule CG reporting guidance.</li>
                </ul>
                <p><strong>5. Board and EGM Kit:</strong></p>
                <ul>
                    <li>Board Resolution approving the secondary corporate action.</li>
                    <li>For Section 68 buyback under 25 percent route - EGM Notice with 21-day notice under Section 101 and Explanatory Statement under Section 102.</li>
                    <li>Special Resolution at 75 percent majority where applicable.</li>
                    <li>SHA ROFR and pre-emption rights waiver documentation.</li>
                </ul>
                <p><strong>6. SH-4 Transfer Filings and Cap Table Update:</strong></p>
                <ul>
                    <li>SH-4 Form for transfer of shares filed for each transferring employee under Section 56(1) read with Rule 11.</li>
                    <li>Updated cap table reflecting transferred holdings.</li>
                    <li>Form MGT-7 annual return disclosure update.</li>
                    <li>Coordinated through <a href="/esop-corporate-filings/">ESOP Corporate Filings</a>.</li>
                </ul>
                <p><strong>7. FC-TRS Filing (Cross-Border):</strong></p>
                <ul>
                    <li>FC-TRS filed within 60 days of resident-to-non-resident transfer through authorised dealer bank.</li>
                    <li>Sectoral FDI cap compliance memo.</li>
                    <li>Section 195 TDS reconciliation with non-resident buyer tax department.</li>
                    <li>DTAA Article 13 capital gains analysis where relevant.</li>
                    <li>Coordinated through <a href="/fdi-compliance/">FDI Compliance</a>.</li>
                </ul>
                <p><strong>8. Employee Communication Pack:</strong></p>
                <ul>
                    <li>Pre-tender education materials with capital gains primer.</li>
                    <li>FAQ document covering vesting, exercise, holding period, tax treatment.</li>
                    <li>Town-hall talking points for founder/CFO rollout.</li>
                    <li>Post-tender remaining-employee transparency communication with updated cap table.</li>
                    <li>ITR support setup for selling employees post-program.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Secondary Program Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Pricing below Rule 11UA FMV without defensibility</strong></td><td>Selling at a price below the Rule 11UA FMV triggers Section 50CA (deemed full value of consideration on seller) and Section 56(2)(x) (deemed income on buyer). Both penalise the transaction - seller pays capital gains tax on deemed FMV; buyer pays income tax on FMV minus actual consideration.</td><td>Patron ensures all secondary sales are at or above FMV with documented Rule 11UA defensibility via SEBI Cat I Merchant Banker DCF report or CA NAV. Pricing negotiated with investor against the FMV floor; deviations documented with rationale.</td></tr>
                        <tr><td><strong>STCG vs LTCG holding period miscalculation</strong></td><td>Holding period for LTCG starts from date of EXERCISE (allotment), not date of grant. Employees who sell within 24 months of exercise face STCG at slab rate (typically 30 percent plus surcharge plus cess) vs LTCG at 12.5 percent under Section 112. Sale one day before the 24-month threshold triples the tax burden.</td><td>Patron per-employee tax planning memo flags exercise dates and computes 24-month thresholds. Where election window flexibility exists, employees nearing threshold can defer participation to subsequent tranche to secure LTCG bracket.</td></tr>
                        <tr><td><strong>Foreign buyer secondary without FC-TRS filing</strong></td><td>Cross-border share transfer requires FC-TRS filing within 60 days through authorised dealer bank. Late or missed FC-TRS attracts RBI compounding (typically Rs 50,000 to Rs 5,00,000 per instance) and Section 13 FEMA penalty. Transfer may also be flagged for unwinding.</td><td>Patron files FC-TRS in parallel with execution settlement. All cross-border tender offers include sectoral cap pre-confirmation and AD bank coordination before settlement to avoid post-facto compounding.</td></tr>
                        <tr><td><strong>Buyback tax post FA 2024 not communicated to employees</strong></td><td>Pre-1 October 2024 buybacks were tax-free for shareholders (Section 115QA paid by company at 23.296 percent). Post-FA 2024, buyback proceeds are taxed in shareholder hands at slab rate as deemed dividend under Section 2(22)(f) - effective rate up to 39 percent for 30 percent slab. Employees expecting tax-free buyback face a surprise tax bill.</td><td>Patron updates the tax memo and HR communication to reflect post-FA 2024 economics. Comparative tax analysis between buyback (deemed dividend at slab) and tender offer (LTCG at 12.5 percent) presented to founder before vehicle selection.</td></tr>
                        <tr><td><strong>Section 195 TDS by non-resident buyer ignored</strong></td><td>If the buyer is non-resident, Section 195 TDS may apply on payment to Indian resident seller. The TDS rate is determined by the buyer's tax department. Failure to deduct attracts Section 201 default - interest at 1 percent per month plus penalty.</td><td>Patron tender offer documentation includes Section 195 mechanics if cross-border. Lower TDS Certificate under Section 197 obtained where applicable; DTAA relief secured per buyer's jurisdiction; reconciliation with seller's ITR support.</td></tr>
                        <tr><td><strong>Unequal employee treatment in tender offer</strong></td><td>Tender offers must treat eligible employees equally - same pricing, same proportional caps, same election window. Selective pricing or eligibility for senior leadership while excluding rank-and-file invites disputes and SEBI scrutiny if subsequently listed (SBEB Regulations 2021 fair-treatment principle).</td><td>Patron drafts the eligibility framework to be defensible - tenure thresholds, vested vs exercised, per-employee caps as percentage of holdings, election window same for all. Documented rationale for any tier-based differentiation.</td></tr>
                        <tr><td><strong>ROFR / pre-emption rights in shareholders agreement ignored</strong></td><td>Existing shareholders (VCs, founders) typically have Right of First Refusal (ROFR) or pre-emption rights on share transfers under SHA. Tender offer execution without ROFR waiver invites contractual dispute and may invalidate the transfer.</td><td>Patron reviews the SHA and obtains required waivers BEFORE execution. ROFR waiver documentation includes price, timing and structure transparency to existing shareholders. Where waiver denied, alternative vehicle (buyback) considered.</td></tr>
                        <tr><td><strong>Section 68 buyback procedural defects</strong></td><td>Form SH-9 Notice of Meeting, SH-10 Register of Buyback, SH-11 Return of Buyback must be filed within prescribed windows under Rule 17 of Companies (Share Capital and Debentures) Rules 2014. Section 70 12-month cooling period between buybacks; debt-equity ratio cap. Procedural defects expose buyback to invalidation.</td><td>Patron Section 68 buyback workflow tracks all SH-9, SH-10, SH-11 deadlines. Section 70 cooling period and debt-equity ratio verified before buyback initiation. End-to-end through <a href="/esop-corporate-filings/">ESOP Corporate Filings</a> retainer.</td></tr>


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
            <h2 class="section-title">Secondary Program Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Liquidity vehicle diagnostic (standalone)</td><td>2-week diagnostic, vehicle comparison, recommendation memo with post-FA 2024 tax analysis</td><td class="table-amount">Rs 50,000 - 1,00,000</td></tr>
                        <tr><td>Rule 11UA valuation (pass-through)</td><td>FMV report by SEBI Cat I Merchant Banker (DCF) or CA (NAV) methodology</td><td class="table-amount">Rs 75,000 - 1,75,000</td></tr>
                        <tr><td>ESOP Trust secondary acquisition</td><td>Trust-led secondary under SBEB 2021 Regulation 6 with 2 percent annual cap; overall 5 percent ceiling tracking</td><td class="table-amount">Rs 1,00,000 - 2,00,000</td></tr>
                        <tr><td>Company buyback (Section 68)</td><td>Buyback workflow including SH-9, SH-10, SH-11; post-FA 2024 tax mechanics; employee communication</td><td class="table-amount">Rs 1,50,000 - 3,00,000</td></tr>
                        <tr><td>Annual recurring secondary program (3-year retainer)</td><td>Annual tender or buyback program; ongoing employee education; investor relationship management</td><td class="table-amount">Rs 1,50,000 - 3,00,000/yr</td></tr>
                        <tr><td>Tender offer (small to mid size, up to 100 participants)</td><td>Full tender documentation, pricing, per-employee tax memo, communication, execution, post-tender</td><td class="table-amount">Rs 2,00,000 - 3,50,000</td></tr>
                        <tr><td>Cross-border buyer add-on</td><td>FEMA NDI Rule 21 compliance, FC-TRS filing, sectoral cap analysis, Section 195 TDS workflow</td><td class="table-amount">Add Rs 75,000 - 1,50,000</td></tr>
                        <tr><td>Tender offer (large or multi-tranche, 100-plus participants)</td><td>Multi-investor coordination, complex pricing, cross-border buyer, pre-IPO multi-tranche workflows</td><td class="table-amount">Rs 3,50,000 - 5,00,000</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for small-to-mid tender offer; multi-tranche pre-IPO programs and cross-border tender offers quoted separately; annual recurring 3-year retainer model available</td><td class="table-amount"><strong>Starting from INR 2,00,000 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Secondary consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20ESOP%20secondary%20program." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secondary Program Timeline (8 to 14 Weeks)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron 8-14 Week Workflow</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Week 1 - Liquidity vehicle diagnostic; goal setting; investor or funding identification</td><td class="table-amount">Recommendation memo</td></tr>
                        <tr><td>Week 2-3 - Rule 11UA valuation engagement; pricing negotiation with investor or buyback amount</td><td class="table-amount">FMV report; pricing locked</td></tr>
                        <tr><td>Week 3-5 - Tender offer or buyback documentation; eligibility criteria; per-employee tax memo</td><td class="table-amount">Documentation pack</td></tr>
                        <tr><td>Week 5 - Board Resolution; EGM if buyback Section 68(2)(b) 25 percent route; SHA ROFR waivers</td><td class="table-amount">Resolutions approved</td></tr>
                        <tr><td>Week 6-9 - Employee election window (21-30 days); election forms collected; education sessions</td><td class="table-amount">Elections complete</td></tr>
                        <tr><td>Week 9-10 - Execution and settlement; funds transfer; share transfer; cap table update; SH-4 filings</td><td class="table-amount">Settlement complete</td></tr>
                        <tr><td>Week 10-12 - FC-TRS filing (if cross-border) within 60 days; sectoral cap confirmation</td><td class="table-amount">FC-TRS filed</td></tr>
                        <tr><td>Week 12-14 - Post-secondary remaining-employee communication; ITR support for selling employees</td><td class="table-amount">Communication complete</td></tr>
                        <tr><td><strong>Statutory Deadlines</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>FC-TRS filing for cross-border resident-to-non-resident transfer</td><td class="table-amount">Within 60 days</td></tr>
                        <tr><td>EGM notice for Section 68(2)(b) 25 percent buyback route under Section 101</td><td class="table-amount">Minimum 21 days</td></tr>
                        <tr><td>SH-4 Form for share transfer filing under Section 56(1)</td><td class="table-amount">Within 60 days</td></tr>
                        <tr><td>SH-11 Return of Buyback under Rule 17</td><td class="table-amount">Within 30 days</td></tr>
                        <tr><td>Section 195 TDS by non-resident buyer payment to Indian resident seller</td><td class="table-amount">At payment time</td></tr>
                        <tr><td>Section 70 12-month cooling period between buybacks</td><td class="table-amount">12 months</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Section 50CA of Income Tax Act 1961 deems full FMV as sale consideration if unlisted shares are sold below FMV; Section 56(2)(x) treats the discount as deemed income on the buyer side. Both penalise sub-FMV transactions - Rule 11UA FMV defensibility via SEBI Cat I Merchant Banker DCF or CA NAV is non-negotiable. FC-TRS late filing attracts RBI compounding under Section 13 FEMA (typically Rs 50,000 to Rs 5,00,000 per instance). Section 2(42A) imposes 24-month holding period from EXERCISE date (not grant date) for LTCG classification on unlisted shares - one day before the threshold triples the tax for typical employee. Section 112 12.5 percent LTCG rate without indexation effective 23 July 2024 post Finance (No. 2) Act 2024. Section 115QA Buyback Distribution Tax abolished effective 1 October 2024; Section 2(22)(f) now treats buyback proceeds as deemed dividend in shareholder hands at slab rate. Section 195 TDS by non-resident buyer; failure attracts Section 201 default with 1 percent per month interest plus penalty. Section 68 buyback subject to Section 70 12-month cooling period and debt-equity ratio caps; Form SH-9, SH-10, SH-11 deadlines under Rule 17. SHA ROFR/pre-emption rights waivers must be obtained before execution - missed waiver invalidates transfer.

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
            <h2 class="section-title">Why Patron for Secondary Program Advisory</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Four-Vehicle Framework Mapped to Liquidity Goal</h3><p>Tender Offer, Section 68 Buyback, Trust Secondary, Direct Sale - selected via quantified recommendation memo against post-FA 2024 tax economics, employee perception, execution complexity and timeline. No vehicle dogma.</p></article>
    <article class="feature-card"><h3>Rule 11UA FMV Defensibility</h3><p>SEBI Cat I Merchant Banker DCF coordination for projectable cash flows; CA NAV for asset-heavy/early-stage; CCA cross-check. Section 50CA seller protection and Section 56(2)(x) buyer protection. Critical for FEMA NDI Rule 21 cross-border compliance.</p></article>
    <article class="feature-card"><h3>Section 49(2AA) Cost Basis Modelling</h3><p>Per-employee capital gains computation with FMV-at-exercise cost basis under Section 49(2AA). LTCG/STCG bracketing under Section 2(42A) 24-month threshold. Section 112 12.5 percent LTCG rate post-FA 2024 optimisation.</p></article>
    <article class="feature-card"><h3>Post-FA 2024 Buyback Tax Expertise</h3><p>Section 115QA Buyback Distribution Tax abolition effective 1 October 2024; Section 2(22)(f) shareholder-side deemed dividend at slab rate. Comparative tax analysis between buyback and tender offer presented to founder before vehicle selection.</p></article>
    <article class="feature-card"><h3>FEMA NDI Rule 21 + FC-TRS Coordination</h3><p>Cross-border buyer compliance under one engagement - pricing not below FMV, FC-TRS within 60 days, sectoral FDI cap analysis, Section 195 TDS workflow, DTAA Article 13 capital gains analysis. End-to-end through FDI Compliance team.</p></article>
    <article class="feature-card"><h3>Section 68 Companies Act Buyback Workflow</h3><p>Form SH-9 Notice of Meeting, SH-10 Register of Buyback, SH-11 Return of Buyback under Rule 17. Section 70 12-month cooling period and debt-equity ratio management. End-to-end through ESOP Corporate Filings retainer.</p></article>
    <article class="feature-card"><h3>Employee Communication Craft</h3><p>Offer letter, FAQ document, per-employee tax memo, election form, ROFR waiver documentation, post-tender remaining-employee transparency. Town-hall talking points for founder/CFO rollout. ITR support setup post-program.</p></article>
    <article class="feature-card"><h3>15+ Years Across MCA, CBDT, RBI, SEBI, FEMA</h3><p>Patron has been executing secondary programs since 2009 across SaaS, fintech, consumer-tech and pharma verticals. 10,000+ businesses served, 4.9 Google rating, 50,000+ documents filed. Pune, Mumbai, Delhi and Gurugram offices.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Growth-Stage Startups for Liquidity Programs</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years in Practice</strong></p>
                <p>Our pre-IPO tender offer involved 240 employees electing to sell partial holdings to a growth fund at last-round price minus 20 percent. Patron orchestrated the entire 12-week process - SEBI Cat I Merchant Banker FMV report, employee FAQ, individual tax memos for 90 percent slab employees and 30 percent slab employees, FC-TRS filing for the foreign fund buyer. Net proceeds delivered on schedule. - CFO, B2B SaaS pre-IPO (Bengaluru).</p>
                <p>Post Finance Act 2024 we wanted to do a Section 68 buyback for our long-tenured employees but the deemed dividend taxation made tender offer more attractive. Patron diagnostic memo showed the 18 percent effective tax saving via tender offer route. We pivoted to a coordinated tender with our existing Series C investor. - VP Finance, mid-cap consumer tech (Mumbai).</p>
                <p><strong>Selected Clients (Illustrative):</strong> Secondary program engagements completed for tender offers, buybacks and Trust secondaries across SaaS, fintech, consumer-tech and pharma verticals. Enterprise compliance work for Hyundai, Asian Paints and Bridgestone illustrates pan-India operational footprint.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves Indian growth-stage startups planning employee liquidity programs across India - both in-person and remotely. Pan-India remote engagement standard.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four Liquidity Vehicles Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Vehicle</th>
                            <th>Mechanic</th>
                            <th>Best Used When</th>
                            <th>Tax in Employee Hands</th>
                            <th>Key Compliance</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>1. Tender Offer</strong></td><td>Company orchestrates sale of employee shares to third-party investors (existing VC, growth fund, secondary fund); standardised pricing and terms; broad employee eligibility</td><td>Pre-IPO (6-18 months before DRHP); company is investor-friendly; broad employee base; first major liquidity event</td><td>Capital gains under Section 45/48; cost basis Section 49(2AA) FMV at exercise; LTCG 12.5 percent if held over 24 months from exercise</td><td>Rule 11UA FMV; FEMA NDI Rule 21 plus FC-TRS if cross-border; Section 50CA if priced below FMV</td></tr>
                        <tr><td><strong>2. Company Buyback (Section 68)</strong></td><td>Company purchases own shares from employees; uses free reserves and securities premium; Board approval up to 10 percent, Special Resolution up to 25 percent</td><td>Mature companies with strong free reserves; smaller liquidity tranche; alternative to dividend distribution</td><td>Post FA 2024 (1 October 2024) - proceeds treated as deemed dividend under Section 2(22)(f); taxed at slab rate in shareholder hands; Section 115QA buyback tax ABOLISHED</td><td>Section 68 plus Section 70 Companies Act 2013; Form SH-9, SH-10, SH-11; 12-month cooling period</td></tr>
                        <tr><td><strong>3. ESOP Trust Secondary Acquisition</strong></td><td>ESOP Trust (if Trust route adopted) acquires shares from employees in secondary market; up to 2 percent paid-up capital per year under SEBI SBEB 2021 Regulation 6</td><td>Listed entities or pre-IPO entities planning to list; Trust route already in place; ongoing rolling liquidity</td><td>Capital gains in employee hands; same Section 49(2AA) cost basis; LTCG/STCG mechanics under Section 112</td><td>SEBI SBEB 2021 Reg 6 plus 28-29 Trust compliance; secondary acquisition annual cap; 5 percent overall ceiling</td></tr>
                        <tr><td><strong>4. Direct Secondary Sale</strong></td><td>Employee sells directly to investor or other shareholder without company orchestration; bilateral negotiation; less common for ESOP holders</td><td>Specific named investor or co-shareholder; small transaction; one-off rather than program</td><td>Same capital gains under Section 45/48 plus 49(2AA); LTCG 12.5 percent if held over 24 months</td><td>Rule 11UA plus ROFR/transfer restrictions in shareholders agreement; SH-4 plus Form MGT-7 disclosure</td></tr>


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
                    <li><strong><a href="/esop-services/">ESOP Services Master Hub</a></strong> - end-to-end ESOP lifecycle services including downstream pre-IPO scheme conversion engagements after pre-IPO tender offers.</li>
                    <li><strong><a href="/esop-valuation-services/">ESOP Valuation Services</a></strong> - Rule 11UA FMV reports critical for secondary sale pricing; DCF (via SEBI Cat I Merchant Banker), NAV (via CA) and CCA methodologies.</li>
                    <li><strong><a href="/esop-scheme-design/">ESOP Scheme Design</a></strong> - first-time scheme drafting with sample term sheet; foundational engagement that precedes any secondary program.</li>
                    <li><strong><a href="/esop-for-tech-startups/">ESOP for Tech Startups</a></strong> - tech-vertical scheme design with refresh grants and acceleration triggers; secondary programs are downstream liquidity vehicle.</li>
                    <li><strong><a href="/esop-for-saas-companies/">ESOP for SaaS Companies</a></strong> - B2B SaaS-specific design with ARR-linked vesting; secondary programs serve SaaS pre-IPO timelines.</li>
                    <li><strong><a href="/esop-restructuring-underwater-options/">ESOP Restructuring and Underwater Options</a></strong> - down-round remediation via Repricing, Exchange Program, Top-Up Grants, Vesting Acceleration or Cashout/Buyback; distinct from secondary sale (modification vs liquidity).</li>
                    <li><strong><a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a></strong> - settlement accounting under Ind AS 102 paragraph 28 and Schedule III disclosure for buyback corporate actions.</li>
                    <li><strong><a href="/esop-corporate-filings/">ESOP Corporate Filings</a></strong> - ongoing MCA filings retainer covering MGT-14, PAS-3, MGT-7 plus SH-4, SH-9, SH-10, SH-11 for buyback workflows and SH-4 for tender offer transfer filings.</li>
                    <li><strong><a href="/fdi-compliance/">FDI Compliance</a></strong> - FEMA NDI Rules 2019 plus FC-TRS coordination for cross-border secondary buyers; sectoral FDI cap analysis; Section 195 TDS workflow.</li>
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
                    <li><strong>Section 45, Income Tax Act 1961</strong> - charging section for capital gains on transfer of capital asset including ESOP shares. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department portal</a>.</li>
                    <li><strong>Section 48, Income Tax Act 1961</strong> - computation of capital gains (sale consideration minus cost of acquisition minus expenses on transfer).</li>
                    <li><strong>Section 49(2AA), Income Tax Act 1961</strong> - cost of acquisition for ESOP shares equals FMV taken as perquisite at exercise under Section 17(2)(vi). Avoids double taxation.</li>
                    <li><strong>Section 2(42A), Income Tax Act 1961</strong> - 24-month holding period for LTCG classification on unlisted equity shares; holding starts from date of exercise (allotment), not grant date.</li>
                    <li><strong>Section 112, Income Tax Act 1961</strong> - LTCG rate 12.5 percent without indexation effective 23 July 2024 post Finance (No. 2) Act 2024.</li>
                    <li><strong>Section 111A, Income Tax Act 1961</strong> - STCG framework (20 percent for listed STT-paid shares post FA 2024).</li>
                    <li><strong>Section 50CA, Income Tax Act 1961</strong> - deemed full value of consideration if unlisted shares sold below FMV; penalises seller side.</li>
                    <li><strong>Section 56(2)(x), Income Tax Act 1961</strong> - buyer taxed on receipt of property below FMV; penalises buyer side.</li>
                    <li><strong>Section 195, Income Tax Act 1961</strong> - TDS by Indian resident on payment to non-resident; applies to cross-border secondary buyer.</li>
                    <li><strong>Section 115QA, Income Tax Act 1961</strong> - Buyback Distribution Tax ABOLISHED by Finance (No. 2) Act 2024 effective 1 October 2024.</li>
                    <li><strong>Section 2(22)(f), Income Tax Act 1961</strong> - post FA 2024, buyback proceeds deemed dividend taxable in shareholder hands at slab rate.</li>
                    <li><strong>Section 17(2)(vi), Income Tax Act 1961</strong> - perquisite tax at exercise; FMV at exercise forms cost basis for capital gains at subsequent sale.</li>
                    <li><strong>Section 201, Income Tax Act 1961</strong> - default for failure to deduct TDS under Section 195; interest at 1 percent per month plus penalty.</li>
                    <li><strong>Section 68, Companies Act 2013</strong> - buyback of securities framework. Section 68(2)(a) - 10 percent buyback under Board approval; Section 68(2)(b) - 25 percent with Special Resolution. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs portal</a>.</li>
                    <li><strong>Section 70, Companies Act 2013</strong> - restrictions on buyback; 12-month cooling period between buybacks; debt-equity ratio caps.</li>
                    <li><strong>Rule 17, Companies (Share Capital and Debentures) Rules 2014</strong> - buyback procedural requirements; Form SH-9 Notice of Meeting, SH-10 Register of Buyback, SH-11 Return of Buyback.</li>
                    <li><strong>Section 56(1), Companies Act 2013 read with Rule 11</strong> - SH-4 Form for transfer of shares filing.</li>
                    <li><strong>Section 101, Companies Act 2013</strong> - EGM notice minimum 21 days before meeting date for Section 68(2)(b) 25 percent buyback route.</li>
                    <li><strong>Section 102, Companies Act 2013</strong> - Explanatory Statement to be annexed to EGM notice.</li>
                    <li><strong>Rule 11UA, Income Tax Rules 1962</strong> - FMV methodology for unlisted shares - DCF (via SEBI Cat I Merchant Banker), NAV (via CA), CCA (Comparable Companies Approach). Defensibility for Section 50CA and 56(2)(x) protection.</li>
                    <li><strong>FEMA Non-Debt Instruments Rules 2019 Rule 21</strong> - pricing guidelines for cross-border sale of Indian unlisted shares; price not below FMV.</li>
                    <li><strong>FEMA NDI Rules 2019 + Master Direction on FC-TRS</strong> - FC-TRS filing within 60 days of resident-to-non-resident transfer through authorised dealer bank.</li>
                    <li><strong>Sectoral FDI Caps under FEMA NDI Rules 2019</strong> - sector-specific FDI investment limits; 100 percent automatic for most tech sectors; constrained for defence, media, fintech.</li>
                    <li><strong>Section 13, FEMA 1999</strong> - penalty for contravention; FC-TRS late filing typically attracts Rs 50,000 to Rs 5,00,000 per instance compounding.</li>
                    <li><strong>SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 Regulation 6</strong> - Trust route secondary acquisition cap of 2 percent paid-up capital per year; overall 5 percent ceiling combining primary plus secondary.</li>
                    <li><strong>SEBI SBEB Regulations 2021 Regulations 28-29</strong> - ESOP Trust governance and compliance framework.</li>
                    <li><strong>DTAA Article 13 (India-US, India-Singapore, India-UK, etc.)</strong> - capital gains taxation rights allocation between India and foreign jurisdictions; relevant for non-resident buyer Section 195 TDS.</li>
                    <li><strong>Finance (No. 2) Act 2024</strong> - landmark amendment effective 1 October 2024 abolishing Section 115QA Buyback Distribution Tax and introducing Section 2(22)(f) shareholder-side deemed dividend treatment.</li>
                    <li><strong>Income Tax Act 2025, effective 1 April 2026</strong> - renumbers ESOP and capital gains provisions; continues 24-month LTCG threshold and 12.5 percent rate framework for unlisted shares.</li>
                    <li><strong>Reserve Bank of India (RBI)</strong> - administrative authority for FEMA NDI Rules 2019 and FC-TRS compliance. <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI portal</a>.</li>
                    <li><strong>Securities and Exchange Board of India (SEBI)</strong> - regulator for SBEB Regulations 2021 and listed entity secondary programs. <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI portal</a>.</li>
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
                    <p class="faq-expanded__lead">Long-tail answers on ESOP secondary sale, tender offers and buyback advisory - vehicle definitions, tender offer workflow, capital gains tax under Section 49(2AA) cost basis, cross-border buyer FEMA compliance, post-Finance Act 2024 buyback tax mechanics, pricing benchmarks, holding period and FC-TRS filing.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an ESOP secondary sale?</h3>
                        <div class="faq-expanded__a"><p>ESOP secondary sale is a transaction where an employee sells shares acquired through ESOP exercise (or sometimes vested-but-unexercised options through cashless mechanism) to a third party - an investor, fund, or back to the company through buyback. It provides liquidity to employees between grant and the IPO or M&A exit. Four vehicles - tender offer (company-organised), company buyback under Section 68, ESOP Trust secondary acquisition under SEBI SBEB 2021 Regulation 6 (2 percent annual cap), or direct sale to a specific investor. Patron diagnostic memo recommends the right vehicle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How does an ESOP tender offer work?</h3>
                        <div class="faq-expanded__a"><p>A tender offer is a structured liquidity program where the company orchestrates a coordinated sale of employee shares to a third-party investor (existing VC, growth fund, secondary fund) at a uniform price. Steps - investor identification and pricing negotiation, Rule 11UA FMV defensibility, eligibility criteria definition (tenure, vested vs exercised, per-employee caps), 21-30 day employee election window, execution and settlement, post-tender remaining-employee communication. Typically run pre-IPO (6-18 months before DRHP filing) at 10-30 percent discount to last round.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the tax on ESOP secondary sale in India?</h3>
                        <div class="faq-expanded__a"><p>Capital gains tax under Section 45 and 48 Income Tax Act 1961. Cost of acquisition is the FMV at exercise (Section 49(2AA)) which was already taxed as perquisite under Section 17(2)(vi). Holding period for LTCG is 24 months from exercise date (Section 2(42A)). LTCG rate is 12.5 percent without indexation under Section 112 (post Finance Act 2024 effective 23 July 2024). STCG (under 24 months) is at slab rate for unlisted shares. Section 50CA penalises sale below FMV - full FMV is deemed sale consideration. Section 56(2)(x) similarly penalises the buyer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can foreign investors buy ESOP shares from Indian employees?</h3>
                        <div class="faq-expanded__a"><p>Yes, subject to FEMA Non-Debt Instruments Rules 2019. Pricing must be not below FMV under Rule 11UA read with Rule 21 of FEMA NDI Rules. FC-TRS filing required within 60 days of transfer. Sectoral cap compliance - some sectors have FDI caps that constrain foreign buyer holdings. If buyer is FPI-registered, FPI investment regime applies; if non-FPI, FDI regime applies. NRI buyers under Schedule III of NDI Rules face a less restrictive regime. Section 195 TDS may apply on payment from non-resident buyer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is buyback tax still applicable post Finance Act 2024?</h3>
                        <div class="faq-expanded__a"><p>No. Section 115QA Buyback Distribution Tax was abolished by Finance (No. 2) Act 2024 effective 1 October 2024. Buyback proceeds are now taxable in shareholder hands as deemed dividend under Section 2(22)(f) at slab rate. This shifts the tax burden from company to shareholder. For shareholders in 30 percent slab, total tax rate increased from 23.296 percent (pre-FA 2024) to potentially 39 percent (post-FA 2024). Tender offer or direct secondary sale may now be more tax-efficient than buyback for many shareholders due to capital gains LTCG rate of 12.5 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between buyback and secondary sale?</h3>
                        <div class="faq-expanded__a"><p>Buyback - company repurchases its own shares from employees using free reserves and securities premium; governed by Section 68 Companies Act 2013; post FA 2024 proceeds taxed as deemed dividend in shareholder hands at slab rate. Secondary Sale (Tender Offer or Direct) - employees sell to third-party investor; governed by capital gains under Section 45 and 48; cost basis under Section 49(2AA); 24-month holding for LTCG at 12.5 percent under Section 112. Post FA 2024 tender offer is typically more tax-efficient than buyback for shareholders in 30 percent slab.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is the price determined in ESOP secondary?</h3>
                        <div class="faq-expanded__a"><p>Pricing typically benchmarked against most-recent funding round - same as round, or 10-30 percent discount (common for pre-IPO tender offers). For pre-IPO 6-12 months before DRHP, often at expected IPO price minus 20-30 percent. Rule 11UA FMV report by SEBI Cat I Merchant Banker (DCF method) or CA (NAV method) provides defensibility floor - sale must not be below FMV to avoid Section 50CA plus Section 56(2)(x) penalty for both parties. Patron coordinates valuation and pricing negotiation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long do I need to hold ESOP shares for LTCG?</h3>
                        <div class="faq-expanded__a"><p>24 months for unlisted shares (typical pre-IPO ESOP situation) - under Section 2(42A) Income Tax Act 1961. Holding period starts from DATE OF EXERCISE (allotment), not date of grant. Sale within 24 months attracts STCG at slab rate (typically 30 percent plus surcharge plus cess for mid-to-high bracket employees). Sale after 24 months attracts LTCG at 12.5 percent under Section 112 (post FA 2024 effective 23 July 2024). For listed shares (post-IPO), the threshold is 12 months and LTCG rate is 12.5 percent above Rs 1.25 lakh exemption.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">ESOP secondary sale par tax kitna lagta hai? (How much tax on ESOP secondary sale)</h3>
                        <div class="faq-expanded__a"><p>ESOP secondary sale par capital gains tax lagta hai. Cost basis exercise ke time ki FMV hoti hai under Section 49(2AA) - kyunki exercise par jo perquisite tax already paid kiya hai Section 17(2)(vi) ke under, woh hi cost basis ban jata hai, double tax nahi hota. 24 mahine se zyada hold kiya to LTCG - 12.5 percent without indexation under Section 112 (post Finance Act 2024 effective 23 July 2024). 24 mahine se kam to STCG - slab rate par (30 percent plus surcharge plus cess typically). Holding period date of EXERCISE se start hota hai, date of grant se nahi. Example - 10,000 shares Rs 500 mein bechi, exercise ke time Rs 200 FMV thi (cost basis), 3 saal hold ki thi. Capital gain = (500-200) x 10000 = Rs 30 lakh. LTCG tax 12.5 percent = Rs 3.75 lakh plus surcharge plus cess approximately Rs 4.29 lakh. Net Rs 45.71 lakh employee ke paas. Section 50CA aur Section 56(2)(x) ka penalty hota hai agar FMV se neeche bech do to. Buyback (post FA 2024) abhi shareholder hands mein deemed dividend tax karte hain at slab under Section 2(22)(f) - 30 percent slab waale ko 39 percent tak tax lag sakta hai. Usually tender offer more tax-efficient hota hai. Cross-border buyer hai to FEMA NDI Rule 21 ka pricing rule (not below FMV) aur FC-TRS 60 din mein file karna padta hai. Patron Rs 2-5 lakh per program charge karta hai end-to-end. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Can employees sell unvested options?</strong> No - only exercised shares (or sometimes vested-but-unexercised options through cashless mechanism) can be sold.</li>
                    <li><strong>Minimum price requirement?</strong> Yes if cross-border buyer (FEMA NDI Rule 21 not below FMV). For resident-to-resident, Section 50CA plus 56(2)(x) penalise sale below FMV in both seller and buyer hands.</li>
                    <li><strong>ESOP Trust secondary cap?</strong> SEBI SBEB 2021 Regulation 6 - 2 percent of paid-up capital per year via Trust secondary; overall 5 percent ceiling combining primary plus secondary.</li>
                    <li><strong>TDS on ESOP secondary?</strong> Not between resident parties typically. Cross-border (Section 195) may require buyer to withhold based on buyer jurisdiction tax position.</li>
                    <li><strong>Foreign VC sectoral approval?</strong> Depends on sector. Most tech sectors 100 percent FDI automatic; defence, media, fintech have specific conditions.</li>
                    <li><strong>Buyback proceeds tax post FA 2024?</strong> Taxed in shareholder hands at slab rate as deemed dividend under Section 2(22)(f) effective 1 October 2024.</li>
                    <li><strong>Selective buyback allowed?</strong> Buybacks under Section 68 must be proportionate among all shareholders of a class. Tender offers can have eligibility criteria but must be fair.</li>
                    <li><strong>LTCG rate post FA 2024?</strong> 12.5 percent without indexation under Section 112 effective 23 July 2024.</li>
                    <li><strong>FC-TRS deadline?</strong> Within 60 days of resident-to-non-resident transfer through authorised dealer bank.</li>
                    <li><strong>Section 70 cooling period?</strong> 12 months between buybacks under Section 68 of Companies Act 2013.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secondary Programs - Engage Pre-DRHP Window</h2>
            <div class="content-text">
                
                Pre-IPO tender offers are typically run 6 to 18 months before DRHP filing to ensure employee liquidity ahead of the listing event without triggering SEBI scrutiny on close-to-listing transactions. Compressed timelines limit pricing negotiation flexibility, IBBI valuation methodology selection and FC-TRS filing windows for foreign buyers. FC-TRS late filing attracts RBI compounding (Rs 50,000 to Rs 5,00,000 per instance) under Section 13 FEMA. Section 50CA and Section 56(2)(x) penalise sale below FMV on both seller and buyer sides - Rule 11UA defensibility is non-negotiable. Section 2(42A) 24-month holding from exercise date for LTCG classification under Section 112 12.5 percent post-FA 2024 - sale one day before threshold triples the tax. Post-Finance Act 2024 buyback tax abolition (effective 1 October 2024) shifted shareholder economics under Section 2(22)(f) - comparative tax analysis between buyback and tender offer often favours tender. Section 195 TDS by non-resident buyer; failure attracts Section 201 default. SHA ROFR and pre-emption waivers must be obtained BEFORE execution. Section 68 buyback subject to Section 70 12-month cooling period and debt-equity ratio caps; Form SH-9, SH-10, SH-11 deadlines under Rule 17. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free ESOP secondary scoping call - response within 4 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for ESOP Secondary Program Advisory</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP secondary programs are the principal liquidity mechanism for Indian startup employees between grant and IPO/M&amp;A exit. Four vehicles - tender offer, company buyback, ESOP Trust secondary and direct sale - have distinct mechanics, tax treatment, regulatory profile and employee communication implications. The Finance Act 2024 buyback tax abolition shifted shareholder economics significantly, making tender offers typically more tax-efficient than buybacks for most ESOP holders. Cross-border buyer transactions add FEMA NDI Rule 21 pricing compliance and FC-TRS filing within 60 days.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP designs and executes employee liquidity programs end-to-end - vehicle selection diagnostic, Rule 11UA FMV pricing via SEBI Cat I Merchant Banker, capital gains modelling under Section 49(2AA) cost basis and Section 112 LTCG rate, Section 195 TDS workflow for non-resident buyers, FEMA NDI Rule 21 plus FC-TRS for cross-border buyers, Section 68 buyback workflow with SH-9, SH-10, SH-11 under Rule 17, SEBI SBEB 2021 Regulation 6 Trust secondary cap management, ROFR waiver coordination, employee communication and post-tender ITR support. Single firm coordinating CA, CS, valuation, FEMA and HR streams on one engagement. 10,000+ businesses served. 4.9 Google rating. 15+ years.</p>
                <p style="color:rgba(255,255,255,0.92);">Ready to design your employee liquidity program? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free ESOP secondary scoping call. Response within 4 hours. 8 to 14 week end-to-end timeline from diagnostic to post-tender communication.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20ESOP%20secondary%20program." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Patron ESOP Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">ESOP secondary programs integrate with adjacent ESOP lifecycle services - scheme design, valuation, accounting, MCA filings and FEMA compliance. Patron operates from Pune, Mumbai, Delhi and Gurugram offices with pan-India remote engagement standard. Explore the master ESOP hub and adjacent services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron ESOP Services</h3>
                <div class="pa-cross-grid">
                    <a href="/esop-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Services Master Hub</strong><span>End-to-end ESOP lifecycle</span></div>
                    </a>
                    <a href="/esop-valuation-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Valuation Services</strong><span>Rule 11UA FMV for secondary pricing</span></div>
                    </a>
                    <a href="/esop-scheme-design/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Scheme Design</strong><span>Foundational first-time scheme drafting</span></div>
                    </a>
                    <a href="/esop-for-tech-startups/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for Tech Startups</strong><span>Tech vertical scheme design</span></div>
                    </a>
                    <a href="/esop-restructuring-underwater-options/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Restructuring</strong><span>Down-round remediation (not secondary)</span></div>
                    </a>
                    <a href="/esop-accounting-ind-as-102/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Accounting Ind AS 102</strong><span>Settlement accounting + Schedule III</span></div>
                    </a>
                    <a href="/esop-corporate-filings/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-with="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Corporate Filings</strong><span>SH-4, SH-9, SH-10, SH-11 retainer</span></div>
                    </a>
                    <a href="/fdi-compliance/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>FDI Compliance</strong><span>FEMA NDI + FC-TRS cross-border buyer</span></div>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 half-yearly review (Finance Act buyback tax changes; LTCG rate amendments; FEMA NDI Rule 21 evolution). Triggers for review: Section 112 LTCG rate changes (currently 12.5 percent post-FA 2024), Section 115QA buyback tax framework (abolished 1 October 2024 by Finance (No. 2) Act 2024; Section 2(22)(f) deemed dividend in shareholder hands), Section 50CA and Section 56(2)(x) sub-FMV penalty framework, Section 2(42A) holding period revisions, FEMA NDI Rule 21 cross-border pricing methodology, FC-TRS procedural changes through RBI Master Direction updates, sectoral FDI cap revisions, SEBI SBEB Regulations 2021 Regulation 6 Trust secondary cap (currently 2 percent annual; 5 percent overall ceiling), DPIIT Notification updates and Income Tax Act 2025 transition framework effective 1 April 2026. Sources: Income Tax Department (incometax.gov.in), Ministry of Corporate Affairs (mca.gov.in), Reserve Bank of India (rbi.org.in), SEBI (sebi.gov.in), DPIIT Startup India (startupindia.gov.in) and CBDT notifications.</p>
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