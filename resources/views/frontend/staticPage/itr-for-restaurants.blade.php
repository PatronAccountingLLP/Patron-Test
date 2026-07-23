
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
    <title>ITR for Restaurant Business: 269ST, 9(5)</title>
    <meta name="description" content="File ITR for restaurants, cafes and cloud kitchens. GST composition, Sec 269ST cash, kitchen depreciation, audit. Starts at Rs 7,500.">
    <link rel="canonical" href="/itr-for-restaurants">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Restaurant Business 2026: 269ST, 9(5) | Patron Accounting">
    <meta property="og:description" content="File ITR for restaurants, cafes and cloud kitchens. GST composition, Sec 269ST cash, kitchen depreciation, audit. Starts at Rs 7,500.">
    <meta property="og:url" content="/itr-for-restaurants/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-restaurants-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Restaurant Business 2026: 269ST, 9(5) | Patron Accounting">
    <meta name="twitter:description" content="File ITR for restaurants, cafes and cloud kitchens. GST composition, Sec 269ST cash, kitchen depreciation, audit. Starts at Rs 7,500.">
    <meta name="twitter:image" content="/images/itr-for-restaurants-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/itr-for-restaurants/#breadcrumb",
          "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
            {"@type": "ListItem", "position": 2, "name": "Income Tax Return", "item": "/income-tax-return"},
            {"@type": "ListItem", "position": 3, "name": "ITR for Restaurants", "item": "/itr-for-restaurants"}
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/itr-for-restaurants/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "Which ITR form should I file for my restaurant business?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A private limited or listed restaurant chain files ITR-6. An LLP or partnership firm files ITR-5. A proprietor restaurant or cafe with regular books files ITR-3, while one opting for the presumptive scheme under Section 44AD with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023) files ITR-4. HUF running a small dhaba files ITR-3. Catering trust or co-operative society files ITR-7 / ITR-5 as applicable."
                }
            },
            {
                "@type": "Question",
                "name": "Can I use presumptive taxation under Section 44AD for a restaurant?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Restaurants run as proprietorship, partnership firm (other than LLP), or HUF can opt for Section 44AD presumptive taxation up to Rs 2 crore turnover (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash receipts and 6 percent on digital. LLPs and companies are not eligible. Once opted out, you cannot re-opt for five assessment years - the 5-year continuity rule under Section 44AD(4) applies."
                }
            },
            {
                "@type": "Question",
                "name": "What is the tax audit limit for restaurants in India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tax audit applies under Section 44AB if restaurant turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - which most digital-payment-heavy QSRs and cloud kitchens meet, since aggregator settlements come via bank transfer and customer payments via UPI / card. Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever lower."
                }
            },
            {
                "@type": "Question",
                "name": "How is service charge or tip taxed in a restaurant ITR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Service charge added to the bill is restaurant revenue and forms part of the value of supply under Section 15(2)(c) of the CGST Act 2017, attracting GST. Tips paid directly by customers that flow to staff are not restaurant revenue and not subject to GST. Per CCPA Guidelines dated 4 July 2022 (partially stayed by Delhi HC in National Restaurant Association vs UOI 2022 (7) TMI 970), service charge must be voluntary, prominently displayed, and cannot be levied on takeaway. TDS impact under Section 192 (salary tip distribution) versus Section 194-O (aggregator)."
                }
            },
            {
                "@type": "Question",
                "name": "What depreciation rate applies to kitchen equipment?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 32 read with Appendix I of the Income-tax Rules 1962, general kitchen plant and machinery (commercial ovens, fryers, dishwashers, refrigerators) attracts 15 percent WDV depreciation. Furniture and fittings (tables, chairs, decor) attracts 10 percent. POS systems and computers attract 40 percent. The hotel building itself attracts 10 percent (non-residential). Vehicles 15 percent. Half rate (50 percent of normal) applies if the asset is put to use for less than 180 days in the year."
                }
            },
            {
                "@type": "Question",
                "name": "Can a cloud kitchen claim full input tax credit on rent and packaging?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Only if registered under regular GST at 18 percent (specified premises - hotels with declared room tariff above Rs 7,500 per night). Cloud kitchens charging 5 percent GST cannot claim ITC on inputs including rent, packaging, equipment, or aggregator commission. This is a deliberate trade-off in Notification 11/2017-CT(R) - lower rate, no credit. Composition scheme cloud kitchens (5 percent flat) similarly get no ITC. ITC eligibility flows directly into the ITR computation through cost lines."
                }
            },
            {
                "@type": "Question",
                "name": "How do Swiggy and Zomato 5% GST under Section 9(5) affect my restaurant ITR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "From 1 January 2022, per Notification 17/2021-CT(R) dated 18 November 2021, e-commerce operators (Swiggy, Zomato) pay 5 percent GST on restaurant services delivered through their platforms. The restaurant does NOT include these supplies in GSTR-1 outward, but must record gross orders, ECO commission, and net payouts in books. In the ITR, the gross order value is revenue and ECO commission is an expense - mismatches between GSTR-9 and Schedule BP often trigger income discrepancy notices. Patron's monthly aggregator mapping prevents this."
                }
            },
            {
                "@type": "Question",
                "name": "What is the Section 269ST cash receipt limit for restaurants?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 269ST of the Income-tax Act 1961 bars cash receipt of Rs 2 lakh or more from one person in a single day, single transaction, or for one event. Section 271DA imposes a penalty equal to 100 percent of the cash received - imposed by the Joint Commissioner. Banquet bookings, large parties, and bulk catering orders are common traps where the Rs 2 lakh threshold is breached for one event. Restaurants should mandate UPI, card, or bank transfer for bills above Rs 1.5 lakh, maintain a daily cash limit register, and use split-event documentation when legitimate."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/itr-for-restaurants/#service",
          "name": "ITR for Restaurant Business in India",
          "description": "CA-led income tax return filing for restaurants, cafes, QSRs, fine-dining establishments, cloud kitchens, food trucks, catering services, and banquet halls. Covers ITR-3, ITR-4, ITR-5, ITR-6 with Section 269ST cash receipt audit (Rs 2 lakh limit) and Section 271DA penalty defence (100 percent of cash received), Section 9(5) CGST aggregator reconciliation for Swiggy and Zomato (effective 1 January 2022 per Notification 17/2021-CT(R)), composition versus regular GST decision matrix under Section 10 CGST, Section 32 block-wise kitchen equipment depreciation (15 percent P and M, 10 percent furniture, 40 percent POS, 10 percent hotel building), multi-outlet PAN aggregation under Section 25 CGST with Schedule I deemed supply, tip versus service charge classification under Section 15(2)(c) CGST + CCPA July 2022 + Delhi HC partial stay, ICDS-II FIFO inventory for perishables, and Section 44AB tax audit support.",
          "provider": {"@id": "/#organization"},
          "serviceType": "Income Tax Return Filing for Restaurants, Cafes, and Cloud Kitchens",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Dine-in restaurants, cafes, QSRs, fine-dining establishments, cloud kitchens, food trucks, catering services, banquet halls, food courts, multi-outlet QSR chains, hotel restaurants in specified premises (declared room tariff above Rs 7,500 per night levying 18 percent GST with ITC), HUF-run dhabas, partnership / LLP / Pvt Ltd / listed restaurant entities. Coverage spans single-outlet proprietors on Section 44AD presumptive scheme, multi-platform cloud kitchens reconciling Swiggy and Zomato Section 9(5) CGST, hospitality chains with branch GSTINs across multiple states under Section 25 CGST with Schedule I deemed supply, international QSR franchisees with Section 92E transfer pricing (royalty / management fees / brand licensing payments to overseas franchisor), and large catering operators handling banquet bookings with Section 269ST cash receipt audit and Section 271DA penalty defence."},
          "about": [
            {"@type": "Thing", "name": "Restaurant", "sameAs": "https://en.wikipedia.org/wiki/Restaurant"},
            {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
            {"@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR for Restaurant Business Pricing",
            "itemListElement": [
              {"@type": "Offer", "name": "Single-Outlet Proprietor Section 44AD Presumptive", "price": "7500", "priceCurrency": "INR", "url": "/itr-for-restaurants", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Single-Outlet Regular Books Non-Audit", "price": "12500", "priceCurrency": "INR", "url": "/itr-for-restaurants", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Restaurant / Cafe Audit Case", "price": "25000", "priceCurrency": "INR", "url": "/itr-for-restaurants", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Cloud Kitchen Multi-Outlet", "price": "35000", "priceCurrency": "INR", "url": "/itr-for-restaurants", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Pvt Ltd Chain Multi-State Multi-Outlet", "price": "75000", "priceCurrency": "INR", "url": "/itr-for-restaurants", "availability": "https://schema.org/InStock"}
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
                        ITR Filing for Restaurants, Cafes, QSRs, and Cloud Kitchens in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, DSC, GST registration certificate, GSTR-1, GSTR-3B, GSTR-9 (or GSTR-4 + CMP-08 if composition), FSSAI licence, POS daily Z reports, lease deed, Swiggy / Zomato / EazyDiner / Dineout monthly statements, Form 26AS / AIS / TIS.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,500 (Excl. GST and Govt. Charges) for single-outlet proprietor Section 44AD presumptive. Rs 12,500 for single-outlet regular books. Rs 25,000 for audit case. Rs 75,000 for Pvt Ltd chain with 5+ outlets across 3+ states.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Proprietor restaurant / cafe / cloud kitchen, partnership firm or LLP food business, private limited or listed restaurant chain, HUF dhaba, food trucks, catering services, banquet halls, dine-in, takeaway, multi-outlet QSR chains, fine-dining establishments.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3 to 8 working days for non-audit cases; 12 to 25 days for audit and multi-outlet cloud kitchen cases; 25 to 35 days for Pvt Ltd chain with 5+ outlets. Tax audit due 30 September 2026; ITR audit case 31 October 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 100+ Restaurant Engagements</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Restaurants%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20restaurant%20%2F%20cafe%20%2F%20cloud%20kitchen%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20filing%20for%20my%20restaurant%20%2F%20cafe%20%2F%20cloud%20kitchen%20%28Sec%20269ST%2C%20composition%20decision%2C%20Swiggy%2FZomato%29." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ITR for Restaurants'/>
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
                                
                                <option value="itr-for-restaurants" selected>ITR for Restaurants (current)</option>
                                <option value="income-tax-return">Income Tax Return (overview)</option>
                                <option value="itr-for-business">ITR for Business</option>
                                <option value="itr-for-companies">ITR for Companies</option>
                                <option value="tax-audit">Tax Audit</option>
                                <option value="gst-returns-for-restaurants-food-businesses">GST for Restaurants</option>
                                <option value="hospitality-sector-accounting-services">Hospitality Accounting</option>
                                <option value="fssai-registration">FSSAI Registration</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's five-year decision matrix on composition versus regular GST saved us Rs 18.4 lakh in tax over three years after we switched to regular at the right outlet expansion threshold. They also caught a Rs 4.6 lakh Section 271DA exposure from banquet cash receipts that our previous CA had completely missed.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RM</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Ravi M</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">5-Outlet QSR Chain Pvt Ltd, Mumbai</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing. They handled our Swiggy and Zomato Section 9(5) CGST reconciliation cleanly across 12 months - the gross order value vs ECO commission split in Schedule BP finally tied with Form 26AS for the first time in years.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Cloud Kitchen Operator, Pune</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all. Patron's block-wise depreciation working - 15 percent on commercial ovens, 10 percent on furniture, 40 percent on POS - finally captured my actual tax shield correctly. Previous CA was using a 15 percent blanket rate and we were leaving money on the table.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Fine-Dining Restaurant, Mumbai</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multi-outlet aggregation across Delhi NCR, Punjab, and Haryana was a nightmare for us. Patron built one consolidated PAN-level Schedule BP linking each branch GSTIN with branch transfers under Schedule I CGST and Rule 28 valuation. Inter-branch elimination done cleanly. Audit went through without a single notice.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit S</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Multi-State Cafe Chain, Delhi</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Tip distribution at our fine-dining restaurant was always lumped into revenue by our previous CA. Patron carved out the pass-through tip to staff (no GST, no income to restaurant) from the service charge (revenue, GST applicable per Section 15(2)(c)). The TDS impact on Section 192 versus Section 194-O was finally captured cleanly.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya S</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Banquet Hall Operator, Gurugram</div>
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
                    <p>Join 100+ restaurants, cafes, QSRs, fine-dining establishments, and cloud kitchens who file their ITR with Patron each year - dine-in operators, takeaway specialists, multi-outlet chains, food trucks, catering services, banquet halls, and food courts across India.</p>
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
                <a href="#procedure-section" class="toc-btn">8-Step Process</a>
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
            <h2 class="section-title">Restaurant Business ITR - Section 269ST Cash Limits, Section 9(5) CGST Aggregator Reconciliation, and Composition versus Regular GST Decision</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Restaurants Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> Restaurants file ITR-3 (proprietor), ITR-4 (presumptive Sec 44AD up to Rs 2 crore, Rs 3 crore digital), ITR-5 (LLP/firm), or ITR-6 (Pvt Ltd). Tax audit applies above Rs 1 crore (Rs 10 crore if 95 percent non-cash). Cash receipts from one customer over Rs 2 lakh in a day attract 100 percent penalty under Section 271DA. Swiggy and Zomato pay 5 percent GST under Section 9(5) CGST since 1 January 2022. Audit-case ITR due 31 October 2026.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Acts</td><td>Income-tax Act 1961 (Sec 32, 44AB, 44AD, 269ST, 271DA, 139(1), 234A/B/C, 234F, 270A, 271B); CGST Act 2017 (Sec 9(5), Sec 10 composition, Sec 15(2)(c) service charge, Sec 25 multi-state, Schedule I deemed supply); FSS Act 2006 (FSSAI licensing); ICDS-II Inventories</td></tr>
                                <tr><td>Applicable To</td><td>Dine-in restaurants, cafes, QSRs, fine-dining, cloud kitchens, food trucks, catering, banquet halls, food courts, multi-outlet chains, hotel restaurants (specified premises 18 percent ITC), HUF dhabas, partnership / LLP / Pvt Ltd / listed entities</td></tr>
                                <tr><td>Section 269ST Cash Receipt Limit</td><td>Rs 2,00,000 from one person in a single day, single transaction, or for one event. Section 271DA penalty equal to 100 percent of the cash received - imposed by Joint Commissioner. Banquet and catering bookings are common traps</td></tr>
                                <tr><td>Section 9(5) CGST Aggregator Treatment</td><td>From 1 January 2022 (Notification 17/2021-CT(R) dated 18 November 2021), e-commerce operators (Swiggy, Zomato) pay 5 percent GST on restaurant supplies through their platform. Restaurant does NOT include these supplies in GSTR-1 outward but reconciles gross orders, ECO commission, and net payouts in books and Schedule BP</td></tr>
                                <tr><td>GST Composition Scheme</td><td>5 percent on turnover up to Rs 1.5 crore (Rs 75 lakh in special category states) under Section 10 CGST Act 2017, no ITC. Quarterly CMP-08, annual GSTR-4. Election impact on ITR profit modelled over five-year horizon</td></tr>
                                <tr><td>Section 32 Depreciation Rates</td><td>Plant and machinery (commercial ovens, fryers, refrigerators) 15 percent WDV; furniture and fittings 10 percent; hotel building 10 percent; POS / computers 40 percent. Half-rate (50 percent of normal) if put to use less than 180 days in the year</td></tr>
                                <tr><td>Tax Audit Threshold</td><td>Rs 1 crore turnover (Rs 10 crore if 95 percent receipts and payments non-cash). Form 3CA-3CD or 3CB-3CD due 30 September 2026. Section 271B penalty 0.5 percent of turnover or Rs 1.5 lakh whichever lower</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 7,500 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Form / Portal</td><td>ITR-3 / ITR-4 / ITR-5 / ITR-6 on incometax.gov.in; HSN/SAC 9963 for restaurant services; Form 26Q TDS quarterly</td></tr>
                                <tr><td>Authority</td><td>CBDT (Income-tax Act); CBIC (GST); FSSAI (food safety - FSS Act 2006); CCPA (consumer protection - service charge guidelines)</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>Restaurants in India sit at the centre of three regulators: CBDT for income tax, CBIC for GST, and FSSAI for food safety. Filing an income tax return for a restaurant, cafe, or cloud kitchen is therefore not a routine exercise. The choice between the GST composition scheme (5 percent without ITC) versus regular registration (5 percent without ITC or 18 percent with ITC for specified premises), the Section 269ST cash receipt limit of Rs 2 lakh per customer per day, kitchen equipment depreciation under Section 32, and Section 9(5) CGST treatment of Swiggy / Zomato orders all interact in the same return.</p>
                <p>Banquet bookings, large parties, and bulk catering orders frequently breach Rs 2 lakh in cash from one customer for one event - triggering Section 271DA penalty equal to 100 percent of the cash received imposed by the Joint Commissioner. Multi-outlet chains across multiple states need separate state GSTINs (under Section 25 CGST Act) but file ONE income tax return at the PAN level - branch transfers are deemed supplies under Schedule I. Tip pass-through to staff is not restaurant revenue but service charge added to bills is, per Section 15(2)(c) CGST Act. Patron Accounting has filed ITR for 100+ restaurants, cafes, and cloud kitchens across Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is ITR Filing for Restaurant Business</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>ITR for restaurant business is the annual income tax return filed by restaurants, cafes, cloud kitchens, and food service operators under Section 139(1) of the Income-tax Act 1961, after computing income subject to ICDS-II inventory valuation, kitchen equipment depreciation under Section 32, cash receipt restrictions under Section 269ST, and Section 9(5) CGST reconciliation for Swiggy and Zomato aggregator orders.</strong></p>
                    <p>The return reports income from food and beverage activity classified under business code 09005 (Hotels and restaurants) on the e-filing portal. It must reconcile with GST returns (GSTR-1, GSTR-3B, GSTR-9 or GSTR-4 if composition), FSSAI registration / licence, POS daily Z reports, aggregator monthly statements from Swiggy, Zomato, EazyDiner, Dineout, and the lease deed for the kitchen and dining premises. For multi-outlet chains, branch-wise GSTINs are aggregated at the PAN level into a single ITR with branch transfers (deemed supply under Schedule I CGST Act with valuation under Rule 28) reconciled and ITC mapped.</p>
                    <p>Banquet bookings, large parties, and bulk catering orders frequently breach Rs 2 lakh in cash from one customer for one event - triggering Section 271DA penalty equal to 100 percent of the cash received. Service charge added to the bill is restaurant revenue, GST-applicable per Section 15(2)(c) CGST Act, while tips paid directly by customers that flow to staff are not restaurant revenue. Per CCPA Guidelines dated 4 July 2022 (partially stayed by Delhi HC in National Restaurant Association vs UOI 2022 (7) TMI 970), service charge must be voluntary, prominently displayed, and cannot be levied on takeaway.</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in Restaurant Business ITR</h3>
                    <p><strong>Section 269ST Cash Receipt Limit:</strong> Bars cash receipt of Rs 2,00,000 or more from one person in a single day, single transaction, or for one event. Section 271DA imposes a penalty equal to 100 percent of the cash received - imposed by the Joint Commissioner. Banquet bookings, large parties, and bulk catering orders are common traps. Restaurants should mandate UPI, card, or bank transfer for bills above Rs 1.5 lakh.</p>
                    <p><strong>Section 9(5) CGST Aggregator Treatment:</strong> From 1 January 2022 per Notification 17/2021-CT(R) dated 18 November 2021, e-commerce operators (Swiggy, Zomato) collect and pay 5 percent GST on restaurant services delivered through their platform. The restaurant does not pay GST on those orders but must reconcile gross orders, ECO commission, and net payouts in books. In the ITR, the gross order value is revenue and ECO commission is an expense.</p>
                    <p><strong>Composition Scheme (Section 10 CGST):</strong> Optional scheme under Section 10 of the CGST Act 2017 for restaurants with turnover up to Rs 1.5 crore (Rs 75 lakh in special category states). Pay 5 percent GST on turnover, no ITC. File CMP-08 quarterly and GSTR-4 annually. The 5 percent is an absolute cost reducing taxable profit through P and L. Election impact on ITR profit modelled over five-year horizon.</p>
                    <p><strong>Specified Premises (GST 2.0):</strong> Restaurants located in hotels with declared room tariff above Rs 7,500 per night levy 18 percent GST with full ITC eligibility. Standalone restaurants (including cloud kitchens) levy 5 percent GST without ITC. ITC eligibility flows directly into the ITR computation through cost lines - rent, packaging, equipment, aggregator commission.</p>
                    <p><strong>Service Charge versus Tip:</strong> Service charge added to the bill (typical 5-10 percent) is restaurant revenue and forms part of the value of supply under Section 15(2)(c) CGST Act, attracting GST. Tips paid directly by customers that flow to staff are not restaurant revenue and not subject to GST. CCPA Guidelines dated 4 July 2022 made service charges voluntary; Delhi HC partially stayed this in National Restaurant Association vs UOI 2022 (7) TMI 970 subject to display and no-takeaway-levy.</p>
                    <p><strong>ICDS-II Inventories:</strong> CBDT Notification 87/2016 dated 29 September 2016. F and B inventory at lower of cost or net realisable value (NRV) using FIFO or weighted average cost. LIFO not permitted. Highly relevant for perishable F and B inventory - raw meat, dairy, vegetables - with item-by-item write-down of expired or near-expiry stock.</p>
                    <p><strong>Section 32 Depreciation Block-of-Assets:</strong> Plant and machinery (commercial ovens, fryers, dishwashers, refrigerators) at 15 percent WDV; furniture and fittings (tables, chairs, decor) at 10 percent; hotel building (non-residential) 10 percent; POS systems and computers 40 percent; vehicles 15 percent. Half-rate (50 percent of normal) applies if asset put to use for less than 180 days in the year.</p>
                    <p><strong>Multi-Outlet Aggregation:</strong> A restaurant chain with multiple outlets across states needs separate state GSTINs (one per state under Section 25 CGST Act) but files ONE income tax return at the PAN level. Branch transfers of stock are deemed supplies under Schedule I CGST Act with valuation under Rule 28. Consolidated PAN-level Schedule BP with branch P and L pivots and inter-branch elimination.</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Restaurants:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Restaurants</text>
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
            <h2 class="section-title">Who Should File - Entity-to-Form Mapping and Tax Audit Threshold</h2>
            <div class="content-text">
                
                
                <p>Every restaurant, cafe, or cloud kitchen earning income in India must file an ITR. Form depends on entity structure and turnover; tax audit depends on receipts and payment mode mix.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Entity Type</th>
                                <th>ITR Form</th>
                                <th>Section 44AD Eligible?</th>
                                <th>Tax Audit Threshold</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Proprietor restaurant / cafe / cloud kitchen</td><td>ITR-3 (regular books) or ITR-4 (Sec 44AD presumptive)</td><td>YES (Resident Individual; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>HUF running small dhaba / food stall</td><td>ITR-3 (HUF eligible for Sec 44AD only, NOT 44ADA)</td><td>YES (Resident HUF; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Partnership firm food business / catering</td><td>ITR-5</td><td>YES (Resident Firm; Rs 2 cr / Rs 3 cr digital)</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>LLP restaurant chain / cloud kitchen network</td><td>ITR-5</td><td>NO - LLP explicitly excluded</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Private limited or listed restaurant chain</td><td>ITR-6</td><td>NO - companies excluded</td><td>Rs 1 cr / Rs 10 cr (95% non-cash)</td></tr>
                            <tr><td>Catering trust / co-operative society</td><td>ITR-7 / ITR-5</td><td>Subject to Sec 11/12 conditions</td><td>Rs 1 cr / Rs 10 cr; trust audit per Sec 12A</td></tr>
                            <tr><td>Multi-outlet chain across 3+ states</td><td>ITR-5 / ITR-6 (PAN-level consolidated)</td><td>Per entity type</td><td>Aggregated turnover at PAN level</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Tax Audit under Section 44AB:</strong></p>
                <ul>
                    <li>Restaurant / cafe / cloud kitchen: <strong>Rs 1 crore turnover</strong>; <strong>Rs 10 crore</strong> if cash receipts and cash payments are each below 5 percent (most digital-payment-heavy QSRs and cloud kitchens qualify)</li>
                    <li>Presumptive scheme defaulter: audit if income shown below 8 percent (cash) / 6 percent (digital) deemed profit and total income exceeds basic exemption</li>
                    <li>Tax audit report Form 3CA-3CD or 3CB-3CD due <strong>30 September 2026</strong></li>
                    <li>Section 271B penalty: 0.5 percent of turnover or Rs 1,50,000 (whichever lower) for tax audit default</li>
                </ul>
                <p style="margin-top:20px;"><strong>Statutory Deadlines AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 August 2026</strong> - non-audit ITR-3 / ITR-4 (extended from 31 July 2026)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 / ITR-6</li>
                    <li><strong>30 November 2026</strong> - Form 3CEB transfer pricing case under Section 92E (cross-border related party - relevant for international QSR franchisees with royalty / management fees)</li>
                    <li><strong>31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 March 2026</strong> - 100 percent advance tax for Section 44AD presumptive (single instalment); quarterly for non-presumptive (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
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
            <h2 class="section-title">Patron Accounting Services for Restaurant Business ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>End-to-End ITR Filing</td><td>CA-led preparation of ITR-3, ITR-4, ITR-5, or ITR-6 with Schedule BP, Schedule DPM (Section 32 depreciation), Schedule CG (capital gains on outlet sale), and reconciliation with GSTR-9 (regular) or GSTR-4 + CMP-08 (composition). Pharma-specific business code 09005 (Hotels and restaurants) and audit annexures.</td></tr>
                            <tr><td>Composition versus Regular GST Decision Matrix</td><td>Five-year decision matrix on composition (5 percent no-ITC under Section 10 CGST) versus regular (5 percent without ITC or 18 percent with ITC for specified premises) before ITR season - this directly affects the income tax computation since composition tax is non-creditable cost while regular GST flows through ITC. Outlet expansion, online aggregator share, and inverted-duty risk factored.</td></tr>
                            <tr><td>Section 269ST Cash Audit and Remediation</td><td>Review of POS daily Z reports, party banquet receipts, and bulk catering invoices to flag any single-day receipt of Rs 2 lakh or more in cash from one customer, single transaction, or one event. Section 271DA penalty (100 percent of cash received) imposed by Joint Commissioner pre-empted via daily cash limit register and split-event documentation when legitimate.</td></tr>
                            <tr><td>Section 32 Kitchen Equipment Depreciation</td><td>Block-of-asset depreciation: 15 percent on plant and machinery (commercial ovens, fryers, dishwashers, refrigerators); 10 percent on furniture and fittings (tables, chairs, decor); 10 percent on hotel building; 40 percent on computers and POS systems; 15 percent on vehicles. Half-rate (50 percent of normal) when asset put to use less than 180 days. Lease versus ownership tax decision (Section 30 / 37 rent versus Section 32 depreciation plus Section 24(b) / 36(1)(iii) interest).</td></tr>
                            <tr><td>Multi-Outlet PAN-Level Aggregation</td><td>Consolidation of branch-wise GSTINs (one per state under Section 25 CGST Act) into a single PAN-level Schedule BP, with branch transfers (deemed supply under Schedule I CGST Act, valued under Rule 28) reconciled and ITC mapped. Inter-branch elimination, branch P and L pivots, and consolidated tax computation.</td></tr>
                            <tr><td>Tip and Service Charge Treatment</td><td>Three-bucket classification: tip pass-through to staff (no income to restaurant, no GST); service charge retained as revenue (taxable, GST inclusive per Section 15(2)(c) CGST Act); CCPA July 2022 'Staff Contribution' display per Delhi HC partial stay in National Restaurant Association vs UOI 2022 (7) TMI 970. Corresponding TDS impact under Section 192 (salary distribution) / Section 194-O (aggregator).</td></tr>
                            <tr><td>Aggregator Reconciliation under Section 9(5) CGST</td><td>Swiggy, Zomato, EazyDiner, Dineout monthly statement reconciliation. Under Section 9(5) CGST read with Notification 17/2021-CT(R) dated 18 November 2021 effective 1 January 2022, the e-commerce operator pays 5 percent GST so the restaurant does not include those supplies in GSTR-1 outward. Gross order value as revenue, ECO commission as expense in Schedule BP. Mismatches between GSTR-9 and Schedule BP averted before notice.</td></tr>
                            <tr><td>Tax Audit + Form 3CD Restaurant Specifics</td><td>Form 3CA-3CD or 3CB-3CD audit with restaurant-specific clause focus: Clause 14 (ICDS-II FIFO inventory for perishables), Clause 18 (Section 32 block-wise depreciation), Clause 21 (Section 269ST cash and Section 40A(3)), Clause 26 (Section 43B GST/PF/ESI), Clause 31 (Section 269SS / 269T loans). CA UDIN signing.</td></tr>


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
            <h2 class="section-title">How Patron Files Your Restaurant Business ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">An eight-step engagement that confirms entity and ITR form, reconciles books with GSTR-9 (or GSTR-4 if composition) and Swiggy / Zomato statements under Section 9(5) CGST, applies ICDS-II to F and B inventory, computes Section 32 depreciation block-wise, audits cash receipts under Section 269ST, classifies tip versus service charge, runs Section 44AB tax audit where applicable, and uploads ITR with e-verification.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Identify Entity Type and Select Correct ITR Form</h3>
                        <p class="step-description">Pvt Ltd restaurant chain files ITR-6 (no Sec 44AD); LLP files ITR-5 (no Sec 44AD); proprietor files ITR-3 with regular books or ITR-4 if opting for Section 44AD presumptive (Rs 2 cr / Rs 3 cr digital limit, deemed profit 8 percent cash / 6 percent digital). Partnership firm files ITR-5. HUF dhaba files ITR-3 (HUF eligible for Sec 44AD only, NOT Sec 44ADA). Catering trust files ITR-7 / ITR-5.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity-form mapping</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 44AD eligibility</span>
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
                        <h3 class="step-title">Reconcile Books with GSTR-9 / GSTR-4 and Aggregator Statements</h3>
                        <p class="step-description">For regular GST: match GSTR-1 outward and GSTR-3B with books. For composition: reconcile GSTR-4 + CMP-08 quarterly. For aggregator orders: Swiggy and Zomato monthly statements reconciled - under Section 9(5) CGST read with Notification 17/2021-CT(R) effective 1 January 2022, ECO pays 5 percent GST so the restaurant does NOT include those supplies in GSTR-1 outward. Gross order value as revenue, ECO commission as expense in Schedule BP.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sec 9(5) ECO reconciliation</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-4 / GSTR-9 match</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="40" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Swiggy</text>
                                    <text x="31" y="56" text-anchor="middle" font-size="11" font-weight="800" fill="#E8712C">5%</text>
                                    <path d="M55 50h12" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <rect x="68" y="20" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="89" y="40" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Zomato</text>
                                    <text x="89" y="56" text-anchor="middle" font-size="11" font-weight="800" fill="#10B981">5%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">ECO Reconciled</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Apply ICDS-II to F and B Inventory</h3>
                        <p class="step-description">Value perishables (raw meat, dairy, vegetables) and non-perishables (oil, spices, packaging) at lower of cost or net realisable value (NRV) using FIFO or weighted average cost - LIFO not permitted under ICDS-II (CBDT Notification 87/2016). Item-by-item write-down of expired or near-expiry stock. Cost includes purchase price, freight inwards, customs and CVD; excludes interest on borrowings unless capitalised under ICDS-IX. Stock register reconciled to physical count.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIFO / Weighted Avg</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NRV write-down</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="35" text-anchor="middle" font-size="11" font-weight="800" fill="#14365F">ICDS-II</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="9" fill="#14365F">FIFO / Weighted Avg</text>
                                    <text x="60" y="65" text-anchor="middle" font-size="9" font-weight="700" fill="#E8712C">Lower of cost or NRV</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Stock Valued</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Compute Section 32 Block-Wise Depreciation</h3>
                        <p class="step-description">Plant and machinery (commercial ovens, fryers, dishwashers, refrigerators) at 15 percent WDV; furniture and fittings (tables, chairs, decor) at 10 percent; hotel building 10 percent (non-residential); POS systems and computers 40 percent; vehicles 15 percent. Half-rate (50 percent of normal) if asset put to use for less than 180 days in the year. Lease versus ownership decision: Section 30 / 37 rent versus Section 32 depreciation plus Section 24(b) / 36(1)(iii) interest.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15% kitchen P&amp;M</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>40% POS / computers</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">P&amp;M 15% | Furn 10%</text>
                                    <line x1="20" y1="42" x2="100" y2="42" stroke="#E8712C" stroke-width="1"/>
                                    <text x="60" y="55" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Building 10%</text>
                                    <text x="60" y="68" text-anchor="middle" font-size="9" font-weight="800" fill="#E8712C">POS / Computer 40%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Depreciation Set</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Audit Cash Receipts under Section 269ST</h3>
                        <p class="step-description">Identify any single customer paying Rs 2 lakh or more in cash in one day, single transaction, or for one event. Banquet bookings, large parties, and bulk catering orders are common traps. Section 271DA penalty equals 100 percent of the cash received - imposed by Joint Commissioner. Patron's solution: daily cash limit register, mandatory UPI / card / bank transfer for bills above Rs 1.5 lakh, split-event documentation when legitimate, and remediation memo before return is locked.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 2 lakh limit</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Daily cash register</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="34" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Sec 269ST</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="14" font-weight="800" fill="#E8712C">Rs 2 lakh</text>
                                    <text x="60" y="64" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Cash limit / day</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Cash Audited</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Classify Tip and Service Charge</h3>
                        <p class="step-description">Tip paid by customer that flows directly to staff is NOT restaurant revenue and not subject to GST. Service charge added to bill (typical 5 to 10 percent) IS restaurant revenue, GST-inclusive per Section 15(2)(c) CGST Act. Per CCPA Guidelines dated 4 July 2022 (partially stayed by Delhi HC in National Restaurant Assn vs UOI 2022 (7) TMI 970), service charge must be voluntary and prominently displayed; cannot be levied on takeaway. Corresponding TDS impact under Section 192 (salary tip distribution) / Section 194-O (aggregator).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tip pass-through</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Service charge revenue</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="31" y="38" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Tip</text>
                                    <text x="31" y="54" text-anchor="middle" font-size="9" font-weight="800" fill="#10B981">Pass-thru</text>
                                    <rect x="68" y="20" width="42" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="89" y="38" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Svc Chg</text>
                                    <text x="89" y="54" text-anchor="middle" font-size="9" font-weight="800" fill="#E8712C">Revenue</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Classified</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">Run Section 44AB Tax Audit if Applicable</h3>
                        <p class="step-description">Run tax audit if turnover exceeds Rs 1 crore (Rs 10 crore if 95 percent receipts and payments are non-cash) under Section 44AB. File Form 3CA-3CD or 3CB-3CD by 30 September 2026. Restaurant-specific clause focus: Clause 14 (ICDS-II FIFO inventory for perishables), Clause 18 (Section 32 block-wise depreciation), Clause 21 (Section 269ST cash and Section 40A(3) Rs 10K cash payment), Clause 26 (Section 43B GST/PF/ESI), Clause 31 (Section 269SS / 269T loans). CA UDIN signing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD by 30 Sep 2026</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Restaurant clauses 14/18/21</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="13" font-weight="800" fill="#14365F">Form 3CD</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="55" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 14 ICDS</text>
                                    <text x="60" y="67" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 21 269ST</text>
                                    <text x="60" y="79" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Clause 18 Sec 32</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Done</span>
                            <span class="step-number-large">07</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 8</span>
                        <h3 class="step-title">Pay Self-Assessment Tax, Upload ITR, and e-Verify</h3>
                        <p class="step-description">Pay self-assessment tax under Section 140A and validate advance tax instalments (15 percent by 15 June, 45 percent by 15 September, 75 percent by 15 December, 100 percent by 15 March; Section 234B/234C interest at 1 percent per month for shortfall). Upload ITR JSON on incometax.gov.in, e-verify within 30 days via Aadhaar OTP / DSC / EVC, and download ITR-V acknowledgement. Track refund / demand. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-V downloaded</span>
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
            <h2 class="section-title">Document Checklist for Restaurant Business ITR</h2>
            <div class="content-text">
                
                
                <p>Restaurant business ITR requires documentation across six categories: entity and identity, books of accounts and POS, GST and indirect tax, FSSAI and food safety, lease and depreciation, and audit / scrutiny defence.</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of entity (proprietor / firm / LLP / company / HUF / society) and PAN of partners / directors / Karta (Aadhaar linked)</li>
                    <li>Aadhaar of authorised signatory; DSC (Class 3) where ITR-5 / ITR-6 e-filing requires</li>
                    <li>GST registration certificate(s) - one per state where outlets operate (Section 25 CGST Act)</li>
                    <li>MCA LLPIN / CIN for LLP / Pvt Ltd; partnership deed for firm; HUF deed for HUF</li>
                    <li>Trade licence / shop and establishment licence from local municipality</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Books of Accounts and POS</h3>
                <ul>
                    <li>Audited Profit and Loss account FY 2025-26 and Balance Sheet as on 31 March 2026 with Notes</li>
                    <li>Trial balance, cash book, bank book, sales register, purchase register, expenses ledger</li>
                    <li>POS daily Z reports for the entire FY (table-wise sales, mode of payment, void / refund register)</li>
                    <li>Stock register: opening, purchases, wastage, closing (FIFO / weighted average) under ICDS-II</li>
                    <li>Bank statements; secured / unsecured loan ledgers; fixed asset register</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. GST and Aggregator</h3>
                <ul>
                    <li>Regular GST: GSTR-1, GSTR-3B, GSTR-9, GSTR-9C for FY 2025-26 (every state GSTIN)</li>
                    <li>Composition GST: GSTR-4 annual + CMP-08 quarterly for FY 2025-26</li>
                    <li>Swiggy, Zomato, EazyDiner, Dineout monthly statements for the FY</li>
                    <li>Section 9(5) CGST aggregator reconciliation working (gross orders, ECO commission, net payouts)</li>
                    <li>TDS and TCS certificates Form 16A / 27D from corporate clients (catering)</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. FSSAI and Food Safety</h3>
                <ul>
                    <li>FSSAI registration / state licence / central licence (under FSS Act 2006) and renewal proof</li>
                    <li>FSSAI Annual Return Form D1 (where applicable based on turnover)</li>
                    <li>Health licence and fire NOC from local municipality</li>
                    <li>Pollution Control Board NOC (for high-volume QSRs and chains)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Lease, Depreciation, and Section 32 Block-of-Assets</h3>
                <ul>
                    <li>Lease deed for premises and kitchen, registered / e-stamped</li>
                    <li>Section 32 block-of-assets WDV chart - 15 percent P and M (commercial ovens, fryers, refrigerators), 10 percent furniture, 10 percent hotel building, 40 percent POS / computers, 15 percent vehicles</li>
                    <li>Half-rate depreciation working for assets put to use less than 180 days in the year</li>
                    <li>Lease versus ownership tax comparison memo</li>
                    <li>TDS challans on rent (Section 194-I) and contractor payments (Section 194C)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">F. Audit, Cash, Tip / Service Charge</h3>
                <ul>
                    <li>Tax audit Form 3CA-3CD or 3CB-3CD with all 44 clauses including Clause 14 (ICDS-II), Clause 18 (Section 32), Clause 21 (Section 269ST cash + Section 40A(3))</li>
                    <li>CA UDIN for audit signing; engagement letter and management representation letter</li>
                    <li>Section 269ST daily cash limit register and split-event documentation for banquets</li>
                    <li>Tip distribution log (pass-through to staff) and service charge ledger (revenue)</li>
                    <li>Salary register, ESI / PF challans, contractor labour register</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Restaurant Business ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Cash receipts above Rs 2 lakh - Section 269ST trap</td><td>Banquet bookings, large parties, and bulk catering orders frequently breach Rs 2 lakh in cash from one customer for one event. Section 271DA penalty is 100 percent of the cash received - imposed by the Joint Commissioner. Patron's solution: a daily cash limit register, mandatory UPI / card / bank transfer for bills above Rs 1.5 lakh, split-event documentation when legitimate, and remediation memo before the return is locked. Joint Commissioner-proof position paper ready for scrutiny.</td></tr>
                            <tr><td>Composition versus regular GST election impact on ITR profit</td><td>Composition restaurants pay 5 percent on turnover under Section 10 CGST (no ITC) - the 5 percent is an absolute cost reducing taxable profit through P and L. Regular restaurants charging 5 percent without ITC also lose ITC on rent, packaging, equipment - so the 'no-ITC' suffix has the same P and L impact. Only specified-premises 18 percent restaurants get full ITC offset. Patron's approach: a five-year decision matrix factoring outlet expansion, online aggregator share, and inverted-duty risk.</td></tr>
                            <tr><td>Aggregator GST reconciliation under Section 9(5) CGST</td><td>Swiggy and Zomato pay 5 percent GST on the restaurant's behalf for delivery orders since 1 January 2022 per Notification 17/2021-CT(R) dated 18 November 2021. The restaurant must NOT include those supplies in its outward GST in GSTR-1, but must reconcile gross orders, ECO commission, and net payouts in books and Schedule BP of ITR. Mismatches between GSTR-9 and Schedule BP trigger income discrepancy notices. Patron's monthly aggregator mapping prevents this.</td></tr>
                            <tr><td>Tip and service charge - revenue or pass-through?</td><td>Tip paid directly by customer that goes to staff is not restaurant revenue and not subject to GST. Service charge added to the bill is restaurant revenue, GST-applicable per Section 15(2)(c) CGST Act. CCPA Guidelines dated 4 July 2022 made service charges voluntary; Delhi HC partially stayed this in National Restaurant Association vs UOI 2022 (7) TMI 970 subject to display and no-takeaway-levy. Patron's documentation separates the two cleanly with TDS impact on Section 192 (tip distribution) versus Section 194-O (aggregator).</td></tr>
                            <tr><td>Multi-outlet aggregation across states</td><td>A restaurant chain with five outlets in three states needs three GSTINs (one per state under Section 25 CGST Act) but files ONE income tax return at the PAN level. Branch transfers of stock are deemed supplies under Schedule I CGST Act with valuation under Rule 28. Patron's solution: a consolidated PAN-level Schedule BP with branch P and L pivots, inter-branch elimination, and consolidated tax computation. Each branch GSTIN linked to one ITR.</td></tr>


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
            <h2 class="section-title">Restaurant Business ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Single-Outlet Proprietor (Section 44AD Presumptive)</td><td>Starting from Rs 7,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Single-Outlet (Regular Books, No Audit)</td><td>Starting from Rs 12,500 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Restaurant / Cafe (Audit Case with Form 3CD)</td><td>Starting from Rs 25,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Cloud Kitchen Multi-Outlet</td><td>Starting from Rs 35,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Pvt Ltd Chain (5+ Outlets, 3+ States)</td><td>Starting from Rs 75,000 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 44AB Tax Audit Add-on (Form 3CD)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 269ST Cash Audit and Remediation Memo</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Composition vs Regular GST Decision Matrix (5-Year)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 92E Transfer Pricing (International QSR Franchise)</td><td>Starting from Rs 24,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 143(1) / 143(2) / 142(1) Notice Response</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Pricing varies by entity type, turnover, audit applicability, multi-outlet count, number of state GSTINs, aggregator mix, and composition versus regular GST election.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Restaurants consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%20269ST%20cash%20audit%2C%20composition%20vs%20regular%20GST%2C%20and%20ITR%20for%20my%20restaurant%20%2F%20cloud%20kitchen." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                            <tr><td>Single-Outlet Proprietor (Sec 44AD Presumptive)</td><td>3-5 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Single-Outlet (Regular Books, Non-Audit)</td><td>5-8 working days</td><td>31 August 2026 (non-audit)</td></tr>
                            <tr><td>Audit Case (Form 3CD + ITR + GST Reconciliation)</td><td>12-20 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                            <tr><td>Multi-Outlet Cloud Kitchen</td><td>15-25 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                            <tr><td>Pvt Ltd Chain (5+ Outlets, 3+ States)</td><td>25-35 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR-6)</td></tr>
                            <tr><td>International QSR Franchise (Form 3CEB)</td><td>30-45 working days</td><td>30 November 2026 (Section 92E case)</td></tr>
                            <tr><td>Section 269ST Cash Remediation</td><td>3-5 working days</td><td>Pre-filing (before ITR locked)</td></tr>
                            <tr><td>Section 139(8A) Updated Return</td><td>7-14 working days</td><td>48 months from end of relevant AY</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Statutory deadline buffer:</strong> Patron blocks engagements 30 days before the due date to ensure clean filing. Tax Audit Form 3CD due 30 September 2026 - one month before audit-case ITR. Form 3CEB transfer pricing case ITR due 30 November 2026 - relevant for international QSR franchisees with royalty / management fees / brand licensing payments to overseas franchisor. Section 211 advance tax instalments at 15 June, 15 September, 15 December, and 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative). Section 234B/234C interest at 1 percent per month for advance tax shortfall. Late filing triggers Section 234F fee (up to Rs 5,000), loss of business loss carry-forward, and Section 271B audit penalty up to Rs 1.5 lakh. Section 269ST cash receipts above Rs 2 lakh booked but not flagged before filing crystallise into Section 271DA penalty equal to 100 percent of the cash - imposed by Joint Commissioner.

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
            <h2 class="section-title">Benefits of CA-Led Restaurant Business ITR Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Section 269ST Cash Firewall</h3>
                        <p class="feature-text">Daily cash limit register and remediation pre-filing prevents Section 271DA 100 percent penalty. Banquet, party, and catering bookings split where legitimate. UPI / card mandate above Rs 1.5 lakh. Joint Commissioner-proof memo ready for scrutiny.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Composition versus Regular Decision Matrix</h3>
                        <p class="feature-text">Five-year tax impact modelled - not guessed. Composition (5 percent no-ITC), regular (5 percent no-ITC), or specified premises (18 percent with ITC) compared on outlet expansion, aggregator share, inverted-duty risk. Year-by-year P and L impact quantified.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">Aggregator Reconciliation</h3>
                        <p class="feature-text">Swiggy, Zomato, EazyDiner, Dineout Section 9(5) CGST clean reconciliation prevents notices. Gross order value as revenue, ECO commission as expense in Schedule BP. Restaurant correctly excludes ECO supplies from GSTR-1 outward.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">Multi-Outlet PAN Aggregation</h3>
                        <p class="feature-text">One PAN, multiple state GSTINs (one per state under Section 25 CGST Act), one defensible Schedule BP. Branch transfers under Schedule I CGST mapped with Rule 28 valuation. Inter-branch elimination, branch P and L pivots, consolidated tax computation.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">Lease versus Ownership Memo</h3>
                        <p class="feature-text">Section 30 / 37 rent versus Section 32 depreciation plus Section 24(b) / 36(1)(iii) interest. Five-year horizon comparison for kitchen, dining, and warehouse premises. TDS on rent under Section 194-I correctly captured. Lease vs buy decision framed for board.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">Section 32 Block-Wise Depreciation</h3>
                        <p class="feature-text">15 percent P and M (ovens, fryers, refrigerators), 10 percent furniture, 10 percent hotel building, 40 percent POS / computers, 15 percent vehicles. Half-rate (50 percent) for less-than-180-day assets. Generic CA's blanket 15 percent error averted.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <h3 class="feature-title">Tip versus Service Charge Documentation</h3>
                        <p class="feature-text">Pass-through tip versus revenue service charge split documented at source. Section 15(2)(c) CGST Act + CCPA July 2022 + Delhi HC stay. TDS impact on Section 192 (tip distribution) versus Section 194-O (aggregator). Scrutiny-defence ready.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">50+ Hours of Time Saving</h3>
                        <p class="feature-text">Internal reconciliation effort across POS daily Z reports, GSTR-9 / GSTR-4, multi-state branch GSTINs, aggregator monthly statements, FSSAI returns, FIFO inventory, and tip / service charge classification absorbed by Patron CAs. You focus on running the restaurant.</p>
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
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong> | <strong>100+ Restaurant Engagements</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick ITR filing."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Nishikant Gurav</strong> - Google Review</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Took minimum time, really impressive acumen. And it's not expensive at all."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Rajib Dutta</strong> - Google Review</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> One Mumbai-based five-outlet QSR chain saved Rs 18.4 lakh in tax over three years by switching from composition to regular GST after Patron's decision matrix - and avoided a Section 271DA cash penalty exposure of Rs 4.6 lakh through the daily cash limit register and banquet split-event documentation.</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves restaurants across India - 100+ restaurants, cafes, QSRs, fine-dining establishments, and cloud kitchens including dine-in operators, takeaway specialists, multi-outlet QSR chains, food truck operators, catering services, banquet halls, and food courts - plus enterprise clients across multiple industries.</p>


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
                        
                            <tr><td>ITR form selection</td><td>Often misses ITR-4 vs ITR-3 audit triggers</td><td>CA decides based on turnover and presumptive eligibility</td></tr>
                            <tr><td>Section 269ST cash audit</td><td>Often missed - 100 percent penalty risk</td><td>Daily limit register + Joint Commissioner-proof memo</td></tr>
                            <tr><td>Composition versus regular GST</td><td>Static historical choice</td><td>Five-year decision matrix with ITR impact</td></tr>
                            <tr><td>Aggregator reconciliation</td><td>Mismatch with GSTR-9 / Section 9(5) CGST</td><td>Swiggy / Zomato monthly mapping into Schedule BP</td></tr>
                            <tr><td>Kitchen depreciation</td><td>Standard 15 percent blanket</td><td>Block-wise: 15 percent P and M, 10 percent furniture, 40 percent POS / computer, half-rate &lt;180 days</td></tr>
                            <tr><td>Multi-outlet</td><td>State silos, branch ITC orphaned</td><td>Consolidated PAN-level Schedule BP</td></tr>
                            <tr><td>Tip versus service charge</td><td>Lumped into revenue</td><td>Pass-through versus revenue split documented per Section 15(2)(c)</td></tr>
                            <tr><td>FIFO inventory ICDS-II</td><td>Average cost or just closing stock</td><td>Item-by-item FIFO with NRV write-down for perishables</td></tr>
                            <tr><td>Lease versus ownership</td><td>Generic rent claim</td><td>Section 30/37 versus Section 32 + Section 24/36 memo</td></tr>
                            <tr><td>Scrutiny defence</td><td>Reactive, no pre-filed memo</td><td>Pre-filed position paper on FIFO, 269ST, Section 9(5)</td></tr>


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
                
                
                <p>Restaurant business filers often need adjacent compliance, GST, payroll, and FSSAI work. We bundle the following services with Restaurant Business ITR engagements:</p>
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/itr-for-business">ITR for Business</a> - sole proprietorship, partnership firm, LLP, HUF, and AOP/BOI ITR filing</li>
                    <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / OPC / Public Ltd via ITR-6 with concessional rates</li>
                    <li><a href="/tax-audit">Tax Audit</a> - Form 3CA-3CD or 3CB-3CD audit support under Section 44AB</li>
                    <li><a href="/gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants and Food Businesses</a> - GSTR-1, GSTR-3B, GSTR-9 (regular) or GSTR-4 + CMP-08 (composition)</li>
                    <li><a href="/hospitality-sector-accounting-services">Hospitality Sector Accounting Services</a> - full-stack monthly accounting for restaurants, hotels, cloud kitchens</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - basic registration / state licence / central licence under FSS Act 2006</li>
                    <li><a href="/payroll-services-for-the-hospitality-industry">Payroll Services for the Hospitality Industry</a> - Section 192 TDS on salary tip distribution, PF, ESI, gratuity</li>
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
                    <li><strong>Income-tax Act 1961:</strong> Section 28 (PGBP charging); 32 (depreciation); 44AA (books); 44AB (audit); 44AD (presumptive); 269ST (cash receipt limit Rs 2 lakh); 271DA (Section 269ST penalty 100 percent); 192 (TDS on salary - tip distribution); 194-O (TDS on aggregator); 194-I (TDS on rent); 194C (TDS on contractor); 234A/B/C (interest); 234F (late fee); 270A (penalty); 271B (audit failure)</li>
                    <li><strong>Income-tax Rules 1962:</strong> Appendix I depreciation rates - Block III(8) plant and machinery 15 percent, furniture and fittings 10 percent, hotel building (non-residential) 10 percent, computers 40 percent</li>
                    <li><strong>CGST Act 2017:</strong> Section 9(5) (e-commerce operator pays GST on restaurant supplies); Section 10 (composition scheme up to Rs 1.5 crore at 5 percent no ITC); Section 15(2)(c) (service charge as part of value of supply); Section 25 (multi-state registration); Schedule I (deemed supply for branch transfers); Section 16 (ITC eligibility)</li>
                    <li><strong>Notification 17/2021-CT(R) dated 18 November 2021</strong> - Section 9(5) CGST aggregator treatment for Swiggy / Zomato effective 1 January 2022 (5 percent GST paid by ECO)</li>
                    <li><strong>Notification 11/2017-CT(R)</strong> - 5 percent GST without ITC on restaurant services (general); 18 percent with ITC for specified premises (hotels with declared room tariff above Rs 7,500 per night)</li>
                    <li><strong>Notification 14/2019-CT</strong> - Composition scheme turnover limit at Rs 1.5 crore (Rs 75 lakh special category states)</li>
                    <li><strong>FSS Act 2006</strong> - food safety regulation; FSSAI registration / state licence / central licence; Annual Return Form D1; penalty up to Rs 5 lakh substandard food, Rs 10 lakh misbranded food</li>
                    <li><strong>Consumer Protection Act 2019 + CCPA Guidelines dated 4 July 2022</strong> - service charge voluntary display rule (partially stayed by Delhi HC in National Restaurant Association vs UOI 2022 (7) TMI 970)</li>
                    <li><strong>ICDS-II Inventories</strong> (CBDT Notification 87/2016 dated 29 September 2016) - lower of cost or NRV; FIFO or weighted average; LIFO not permitted; perishable F and B with item-by-item write-down</li>
                </ul>
                <p><strong>Penalty Provisions:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A / 234B / 234C</strong> interest: 1 percent per month on tax shortfall and advance tax default</li>
                    <li><strong>Section 271B</strong> tax audit default: 0.5 percent of turnover or Rs 1,50,000 (whichever lower)</li>
                    <li><strong>Section 271DA</strong>: 100 percent of cash received in violation of Section 269ST - imposed by Joint Commissioner</li>
                    <li><strong>Section 270A</strong>: 50 percent / 200 percent of tax sought to be evaded for under-reporting / mis-reporting</li>
                    <li><strong>Section 40A(3)</strong>: 100 percent disallowance of cash payments above Rs 10,000 per person per day</li>
                    <li><strong>FSS Act 2006</strong>: penalty up to Rs 5 lakh for substandard food, Rs 10 lakh for misbranded food</li>
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
                            <tr><td>CBDT (Central Board of Direct Taxes)</td><td>Income-tax Act 1961</td><td>ITR-3 / ITR-4 / ITR-5 / ITR-6; Form 3CD audit; Form 26Q TDS quarterly; HSN/SAC 9963 restaurant services</td></tr>
                            <tr><td>CBIC (Central Board of Indirect Taxes and Customs)</td><td>CGST Act 2017</td><td>GSTR-1, GSTR-3B, GSTR-9 (regular) or GSTR-4 + CMP-08 (composition); Section 9(5) ECO reconciliation</td></tr>
                            <tr><td>FSSAI (Food Safety and Standards Authority of India)</td><td>FSS Act 2006</td><td>Basic registration / state licence / central licence; Annual Return Form D1; FoSCoS portal</td></tr>
                            <tr><td>CCPA (Central Consumer Protection Authority)</td><td>Consumer Protection Act 2019</td><td>Service charge guidelines dated 4 July 2022 (partially stayed by Delhi HC)</td></tr>
                            <tr><td>Local Municipality</td><td>State Shop and Establishment Act</td><td>Trade licence, health licence, fire NOC; Pollution Control Board NOC for high-volume QSRs</td></tr>
                            <tr><td>Section 269ST ITA 1961</td><td>Cash receipt limit</td><td>Rs 2 lakh from one person in single day, single transaction, or one event</td></tr>
                            <tr><td>Section 271DA ITA 1961</td><td>Cash receipt penalty</td><td>100 percent of cash received - imposed by Joint Commissioner</td></tr>
                            <tr><td>Section 9(5) CGST 2017</td><td>ECO aggregator GST</td><td>5 percent paid by Swiggy / Zomato since 1 January 2022 - restaurant excluded from GSTR-1 outward</td></tr>
                            <tr><td>Section 10 CGST 2017</td><td>Composition scheme</td><td>5 percent no ITC up to Rs 1.5 crore (Rs 75 lakh special category states)</td></tr>
                            <tr><td>Section 32 ITA 1961</td><td>Block-of-asset depreciation</td><td>15% P and M, 10% furniture, 10% hotel building, 40% POS / computer, 15% vehicles; half-rate &lt;180 days</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit threshold</td><td>Rs 1 cr (Rs 10 cr if 95% non-cash); Form 3CD by 30 September 2026</td></tr>
                            <tr><td>ICDS-II</td><td>Inventory valuation</td><td>Lower of cost or NRV; FIFO or weighted average; LIFO not permitted; perishables item-by-item</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax e-Filing Portal - <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> (CBDT - ITR utilities, Section 269ST FAQ, Form 3CD audit); GST Portal - <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">gst.gov.in</a> (CBIC - Section 9(5) aggregator, GSTR-4 composition, GSTR-9 reconciliation); FSSAI FoSCoS Portal - <a href="https://foscos.fssai.gov.in/" target="_blank" rel="noopener">foscos.fssai.gov.in</a> (FSS Act 2006 licensing).</p>


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
                    <p class="faq-expanded__lead">Common questions on ITR form selection for restaurants and cloud kitchens, Section 44AD presumptive eligibility, Section 44AB tax audit threshold, service charge versus tip taxability, Section 32 kitchen equipment depreciation rates, cloud kitchen ITC eligibility, Section 9(5) CGST aggregator treatment for Swiggy and Zomato, and Section 269ST cash receipt limits for AY 2026-27.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should I file for my restaurant business?</h3>
                        <div class="faq-expanded__a"><p>A private limited or listed restaurant chain files ITR-6. An LLP or partnership firm files ITR-5. A proprietor restaurant or cafe with regular books files ITR-3, while one opting for the presumptive scheme under Section 44AD with turnover up to Rs 2 crore (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023) files ITR-4. HUF running a small dhaba files ITR-3. Catering trust or co-operative society files ITR-7 / ITR-5 as applicable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I use presumptive taxation under Section 44AD for a restaurant?</h3>
                        <div class="faq-expanded__a"><p>Yes. Restaurants run as proprietorship, partnership firm (other than LLP), or HUF can opt for Section 44AD presumptive taxation up to Rs 2 crore turnover (Rs 3 crore if 95 percent of receipts and payments are non-cash, per Finance Act 2023). Deemed profit is 8 percent on cash receipts and 6 percent on digital. LLPs and companies are not eligible. Once opted out, you cannot re-opt for five assessment years - the 5-year continuity rule under Section 44AD(4) applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the tax audit limit for restaurants in India?</h3>
                        <div class="faq-expanded__a"><p>Tax audit applies under Section 44AB if restaurant turnover exceeds Rs 1 crore in a financial year. The threshold rises to Rs 10 crore if 95 percent of receipts and payments are non-cash - which most digital-payment-heavy QSRs and cloud kitchens meet, since aggregator settlements come via bank transfer and customer payments via UPI / card. Form 3CD report is due 30 September 2026 and the audit-case ITR by 31 October 2026 for AY 2026-27. Section 271B penalty for default is 0.5 percent of turnover or Rs 1.5 lakh, whichever lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is service charge or tip taxed in a restaurant ITR?</h3>
                        <div class="faq-expanded__a"><p>Service charge added to the bill is restaurant revenue and forms part of the value of supply under Section 15(2)(c) of the CGST Act 2017, attracting GST. Tips paid directly by customers that flow to staff are not restaurant revenue and not subject to GST. Per CCPA Guidelines dated 4 July 2022 (partially stayed by Delhi HC in National Restaurant Association vs UOI 2022 (7) TMI 970), service charge must be voluntary, prominently displayed, and cannot be levied on takeaway. TDS impact under Section 192 (salary tip distribution) versus Section 194-O (aggregator).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What depreciation rate applies to kitchen equipment?</h3>
                        <div class="faq-expanded__a"><p>Under Section 32 read with Appendix I of the Income-tax Rules 1962, general kitchen plant and machinery (commercial ovens, fryers, dishwashers, refrigerators) attracts 15 percent WDV depreciation. Furniture and fittings (tables, chairs, decor) attracts 10 percent. POS systems and computers attract 40 percent. The hotel building itself attracts 10 percent (non-residential). Vehicles 15 percent. Half rate (50 percent of normal) applies if the asset is put to use for less than 180 days in the year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a cloud kitchen claim full input tax credit on rent and packaging?</h3>
                        <div class="faq-expanded__a"><p>Only if registered under regular GST at 18 percent (specified premises - hotels with declared room tariff above Rs 7,500 per night). Cloud kitchens charging 5 percent GST cannot claim ITC on inputs including rent, packaging, equipment, or aggregator commission. This is a deliberate trade-off in Notification 11/2017-CT(R) - lower rate, no credit. Composition scheme cloud kitchens (5 percent flat) similarly get no ITC. ITC eligibility flows directly into the ITR computation through cost lines.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How do Swiggy and Zomato 5% GST under Section 9(5) affect my restaurant ITR?</h3>
                        <div class="faq-expanded__a"><p>From 1 January 2022, per Notification 17/2021-CT(R) dated 18 November 2021, e-commerce operators (Swiggy, Zomato) pay 5 percent GST on restaurant services delivered through their platforms. The restaurant does NOT include these supplies in GSTR-1 outward, but must record gross orders, ECO commission, and net payouts in books. In the ITR, the gross order value is revenue and ECO commission is an expense - mismatches between GSTR-9 and Schedule BP often trigger income discrepancy notices. Patron's monthly aggregator mapping prevents this.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the Section 269ST cash receipt limit for restaurants?</h3>
                        <div class="faq-expanded__a"><p>Section 269ST of the Income-tax Act 1961 bars cash receipt of Rs 2 lakh or more from one person in a single day, single transaction, or for one event. Section 271DA imposes a penalty equal to 100 percent of the cash received - imposed by the Joint Commissioner. Banquet bookings, large parties, and bulk catering orders are common traps where the Rs 2 lakh threshold is breached for one event. Restaurants should mandate UPI, card, or bank transfer for bills above Rs 1.5 lakh, maintain a daily cash limit register, and use split-event documentation when legitimate.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: Which ITR form for a restaurant Pvt Ltd?</strong><br>A: ITR-6, due 31 October 2026 for AY 2026-27 if audited.</p>
                    <p><strong>Q: Tax audit limit?</strong><br>A: Rs 1 crore turnover under Section 44AB; Rs 10 crore if 95 percent non-cash.</p>
                    <p><strong>Q: Section 44AD presumptive limit?</strong><br>A: Rs 2 crore (Rs 3 crore if 95 percent digital). Deemed profit 8 percent / 6 percent.</p>
                    <p><strong>Q: Cash receipt limit per customer per day?</strong><br>A: Rs 2 lakh under Section 269ST. Penalty 100 percent under Section 271DA.</p>
                    <p><strong>Q: Kitchen plant and machinery depreciation?</strong><br>A: 15 percent WDV. Furniture 10 percent. POS / computer 40 percent.</p>
                    <p><strong>Q: Composition scheme turnover limit?</strong><br>A: Rs 1.5 crore (Rs 75 lakh special category states), 5 percent no ITC.</p>
                    <p><strong>Q: Swiggy / Zomato GST?</strong><br>A: ECO pays 5 percent under Section 9(5) since 1 January 2022. Restaurant does not include in GSTR-1.</p>
                    <p><strong>Q: Service charge taxable?</strong><br>A: Yes - restaurant revenue under Section 15(2)(c) CGST. Tip pass-through is not.</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Restaurant Business Deadlines for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Three deadlines to lock for restaurant businesses for AY 2026-27 (FY 2025-26): <strong>(1) Form 3CD Tax Audit Report - 30 September 2026</strong>; <strong>(2) ITR-3 / ITR-4 non-audit - 31 August 2026</strong> (extended from 31 July 2026); <strong>(3) ITR-5 / ITR-6 audit case - 31 October 2026</strong>. International QSR franchisees with Section 92E transfer pricing - 30 November 2026. Late filing triggers Section 234F fee (up to Rs 5,000), Section 234A interest at 1 percent per month, loss of carry-forward of business losses, and Section 271B audit penalty up to Rs 1.5 lakh. Cash receipts above Rs 2 lakh booked but not flagged before filing crystallise into a <strong>Section 271DA penalty equal to 100 percent of the cash</strong> - imposed by Joint Commissioner. Banquet bookings, large parties, and bulk catering orders are common Section 269ST traps. Pre-filing remediation through daily cash limit register and split-event documentation is critical.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Restaurant ITR Right - Talk to a Restaurant-Savvy CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>ITR for restaurant business is materially different from a generic business return. The interplay of GST composition election under Section 10 CGST, Section 269ST cash receipt limits with Section 271DA 100 percent penalty, kitchen equipment depreciation under Section 32 (15 percent P and M, 10 percent furniture, 40 percent POS, 10 percent hotel building), lease versus ownership decisions, multi-outlet PAN aggregation across state GSTINs (Section 25 CGST with Schedule I deemed supply), tip and service charge classification under Section 15(2)(c) CGST + CCPA Guidelines + Delhi HC stay, Swiggy and Zomato Section 9(5) CGST treatment effective 1 January 2022, and ICDS-II FIFO inventory for perishables demands a CA team that understands both the Income-tax Act 1961 and the CGST Act 2017.</p>
                    <p>Patron Accounting brings 15+ years of tax practice and 100+ restaurant engagements - covering dine-in operators, takeaway specialists, multi-outlet QSR chains, fine-dining establishments, cloud kitchens, food trucks, catering services, banquet halls, and food courts - to file your return on time, defend it under scrutiny, and structure your tax position for the years ahead. Whether you are a single-outlet proprietor cafe on Sec 44AD, a multi-state cloud kitchen network with aggregator-heavy revenue, or an international QSR franchisee with Section 92E transfer pricing, we have done it before and we can do it for you.</p>
                    <p style="font-weight:600;">Free first consultation. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - we tell you the optimal ITR form (ITR-3 vs ITR-4 vs ITR-5 vs ITR-6), Section 44AD eligibility, composition versus regular GST decision impact on ITR profit, Section 269ST cash exposure status, and aggregator reconciliation gaps BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20consultation%20on%20Section%20269ST%20cash%20audit%2C%20composition%20vs%20regular%20GST%2C%20and%20ITR%20for%20my%20restaurant%20%2F%20cloud%20kitchen." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Restaurants%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20filing%20services%20for%20my%20restaurant%20%2F%20cafe%20%2F%20cloud%20kitchen%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Restaurant Business ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Restaurant business ITR served from our four offices in Pune, Mumbai, Delhi, and Gurugram - covering dine-in operators, takeaway specialists, multi-outlet QSR chains, fine-dining establishments, cloud kitchens, food trucks, catering services, banquet halls, and food courts across India.</p>
      
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Restaurant Business ITR Filing By City</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">Local CA support for restaurants, cafes, QSRs, cloud kitchens, and catering operators</div>
                <div class="pa-city-grid">
                    <a href="/itr-for-restaurants/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-restaurants/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-restaurants/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/itr-for-restaurants/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related Tax, GST, and Hospitality Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end tax, GST, payroll, and FSSAI compliance for restaurants and cloud kitchens</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns-for-restaurants-food-businesses" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST for Restaurants</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/hospitality-sector-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Hospitality Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after Section 269ST limit revision, Section 9(5) CGST aggregator notification, Section 10 CGST composition scheme limit change, Section 32 depreciation rate amendment, FSSAI licence fee notification, or CCPA service charge guideline update. Citation Sources: Income-tax Act 1961 (Sections 28, 32, 44AA, 44AB, 44AD, 192, 194-O, 194-I, 194C, 269ST, 271DA, 234F, 270A, 271B); Income-tax Rules 1962 Appendix I (depreciation rates); ICDS-II Inventories (CBDT Notification 87/2016 dated 29 September 2016); CGST Act 2017 (Sections 9(5), 10, 15(2)(c), 25, Schedule I); Notification 17/2021-CT(R) dated 18 November 2021 (Section 9(5) ECO effective 1 January 2022); Notification 11/2017-CT(R) (5% / 18% restaurant GST); Notification 14/2019-CT (composition Rs 1.5 crore limit); FSS Act 2006 (FSSAI); Consumer Protection Act 2019 + CCPA Guidelines dated 4 July 2022; National Restaurant Association vs UOI 2022 (7) TMI 970 (Delhi HC partial stay).</p>
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