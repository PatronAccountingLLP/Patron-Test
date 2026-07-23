
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
    <title>Statutory Audit for Retail</title>
    <meta name="description" content="CA-led statutory audit for retail chains - multi-store inventory, POS recon, loyalty Ind AS 115, multi-state GST. From Rs 65,000. Call +91 945 945 6700.">
    <link rel="canonical" href="/statutory-audit-for-retail-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Statutory Audit for Retail 2026 | Patron Accounting">
    <meta property="og:description" content="CA-led statutory audit for retail chains - multi-store inventory, POS recon, loyalty Ind AS 115, multi-state GST. From Rs 65,000. Call +91 945 945 6700.">
    <meta property="og:url" content="/statutory-audit-for-retail-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/statutory-audit-for-retail-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Statutory Audit for Retail 2026 | Patron Accounting">
    <meta name="twitter:description" content="CA-led statutory audit for retail chains - multi-store inventory, POS recon, loyalty Ind AS 115, multi-state GST. From Rs 65,000. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/statutory-audit-for-retail-companies-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/statutory-audit-for-retail-companies#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
        { "@type": "ListItem", "position": 3, "name": "Statutory Audit for Retail Companies", "item": "/statutory-audit-for-retail-companies" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/statutory-audit-for-retail-companies#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is statutory audit mandatory for retail chains in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of turnover, store count or profitability. A single-store boutique in its first year and a 500-store hypermarket chain crossing Rs 1,000 crore turnover are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment."
          }
        },
        {
          "@type": "Question",
          "name": "How are loyalty points accounted for under Ind AS 115?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS 115, loyalty points represent a separate performance obligation alongside the immediate sale of goods. The transaction price is allocated between the immediate goods and the points based on standalone selling prices (SSP). The portion allocated to points is deferred as a contract liability on the balance sheet and recognised as revenue only when the points are redeemed or expire (breakage). The breakage estimate is based on historical redemption rates. A Rs 100 sale earning 10 points at Rs 1 SSP each means Rs 90 immediate revenue and Rs 10 deferred liability."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical shrinkage rate in Indian organised retail?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian organised retail averages 1.5 to 3 percent of net sales in shrinkage, representing Rs 1.5 to 3 crore annual inventory loss for a Rs 100 crore chain. The five primary sources are employee theft (30 to 35 percent of shrinkage), shoplifting (20 to 25 percent), vendor fraud and short-deliveries (15 to 20 percent), expiry and damage (15 to 20 percent), and administrative errors (10 to 15 percent). FMCG and grocery sit at the higher end of the range; apparel and electronics typically lower."
          }
        },
        {
          "@type": "Question",
          "name": "How are trade discounts different from cash discounts in retail accounting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trade discounts (volume, scheme, festival, target-incentive) reduce gross revenue at the time of sale under Ind AS 115 - the entity recognises only the net consideration expected. Cash discounts (early payment incentives) are treated as a reduction of revenue if linked to the same transaction or as finance cost under Ind AS 109 if separable in character. Vendor scheme income (slotting fees, listing fees received from suppliers) is classified per Ind AS 38 against COGS or operating income depending on the underlying right transferred to the supplier."
          }
        },
        {
          "@type": "Question",
          "name": "Is e-commerce revenue audited differently from offline retail?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. E-commerce revenue is split into two streams - sales through the entity's own website (principal under Ind AS 115, recognised gross) and sales through third-party marketplaces (principal or agent depending on inventory control test under paragraph B34 to B38). Marketplace sales also attract Section 194O 1 percent TCS deducted by the operator and GST Section 52 1 percent TCS, both of which require sidecar reconciliation against Form 26AS and Form GSTR-8 respectively. Offline POS sales follow the simpler GSTR-1 to GL trail per GSTIN."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 194O TCS on e-commerce sales?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 194O of the Income Tax Act, 1961, effective 1 October 2020, requires every e-commerce operator to deduct 1 percent TCS on the gross amount of sale of goods or services facilitated through its digital platform. The TCS appears in the merchant's Form 26AS quarterly. For omnichannel retailers, the statutory auditor reconciles marketplace payout statements, Section 194O TCS in Form 26AS, and the entity's own revenue ledger for marketplace channel. Mismatches between marketplace payouts and bank credits frequently surface here."
          }
        },
        {
          "@type": "Question",
          "name": "How is multi-state GST reconciled in a retail audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 25 of the CGST Act, a retailer operating in multiple states must obtain a separate GSTIN for each state. The statutory auditor reconciles GSTR-1, GSTR-3B, GSTR-9 (annual return) and GSTR-9C (reconciliation statement) per GSTIN per state. Inter-state stock transfers between branches are deemed supplies under Schedule I of the CGST Act and attract IGST at the time of transfer. Common audit findings include IGST charged at wrong rate on inter-branch transfers, ITC mismatch where the receiving branch did not claim correctly, and unexplained differences in GSTR-9C."
          }
        },
        {
          "@type": "Question",
          "name": "What is POS reconciliation in retail audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "POS reconciliation is the daily reconciliation of cashier and POS-system totals against the GL revenue posting, store-day-wise. The auditor samples representative store-days, matches POS Z-report totals (gross sales, discounts, returns, taxes) against the GL journal entry, reviews cashier over / short reports, reconciles EDC and UPI settlement to bank credits, and tests cut-off around 31 March. Variances must be investigated, explained and provided for where unrecovered. Material unexplained variances are flagged in CARO clause 3(ii) and the management letter."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/statutory-audit-for-retail-companies#service",
      "name": "Statutory Audit for Retail Companies",
      "url": "/statutory-audit-for-retail-companies",
      "serviceType": "Statutory Audit (Retail - Multi-Store, FMCG, Apparel, Omnichannel)",
      "description": "CA-led statutory audit for Indian retail companies, multi-store chains, FMCG and apparel networks, omnichannel D2C brands, franchise networks, supermarket chains and jewellery retailers under Section 143 of the Companies Act, 2013, covering multi-store SA 501 inventory verification with shrinkage benchmarking, POS-to-GL reconciliation, trade-vs-cash discount accounting, loyalty program liability under Ind AS 115, e-commerce-vs-offline channel split with Section 194O TCS, and multi-state GST reconciliation across separate GSTINs.",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Retail in India", "sameAs": "https://en.wikipedia.org/wiki/Retail_in_India" },
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
        { "@type": "Thing", "name": "Goods and Services Tax (India)", "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Statutory Audit for Retail Companies Service Plans",
        "itemListElement": [
          { "@type": "Offer", "name": "Single store / 1 to 3 stores (turnover under Rs 10 cr)", "price": "65000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-retail-companies" },
          { "@type": "Offer", "name": "4 to 10 stores, single state (turnover Rs 10 to 25 cr)", "price": "175000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-retail-companies" },
          { "@type": "Offer", "name": "11 to 30 stores, multi-state (turnover Rs 25 to 100 cr)", "price": "375000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-retail-companies" },
          { "@type": "Offer", "name": "31 to 100 stores, multi-state (turnover Rs 100 to 300 cr)", "price": "700000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-retail-companies" },
          { "@type": "Offer", "name": "100+ stores, omnichannel (turnover above Rs 300 cr)", "price": "1300000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/statutory-audit-for-retail-companies" }
        ]
      },
      "datePublished": "2026-05-13T08:00:00+05:30",
      "dateModified": "2026-05-13T08:00:00+05:30"
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
                        Statutory Audit for Retail Companies in India 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trial balance, store-wise stock register, POS-to-GL daily reconciliation, loyalty program liability schedule, channel-wise sales (offline vs e-commerce), state-wise GSTR-9C.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 65,000 for retail businesses under Rs 10 crore turnover with 1 to 3 stores; scales by store count, channel mix and state-GSTIN count.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian retail company (Pvt Ltd / Public / OPC) under Section 139. LLPs above Rs 40 lakh turnover. Franchise chains as well.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 4 to 7 weeks fieldwork including simultaneous SA 501 multi-store count and POS reconciliation; ADT-1 within 15 days of AGM.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20Retail%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20Retail%20Companies%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20statutory%20audit%20for%20my%20retail%20chain." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Statutory Audit for Retail Companies'/>
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
                                <option value='statutory-audit-for-retail-companies' selected>Statutory Audit for Retail Companies</option>
                                <option value='statutory-audit'>Statutory Audit (India)</option>
                                <option value='tax-audit'>Tax Audit (Section 44AB)</option>
                                <option value='internal-audit'>Internal Audit</option>
                                <option value='stock-audit'>Stock Audit</option>
                                <option value='gst-audit'>GST Audit</option>
                                <option value='accounting-services-for-trading-industry'>Trading Accounting Services</option>
                                <option value='accounting-services-for-e-commerce-industry'>E-Commerce Accounting Services</option>
                                <option value='other'>Other</option>
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We have 42 stores across four states. Patron split partner-led sub-teams for the SA 501 count, ran POS-to-GL reconciliation store-day-wise, and closed our GSTR-9C reconciliation in the same engagement. Clean audit, faster than our previous firm by three weeks.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun S.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO - Apparel Chain, Delhi-NCR</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our loyalty program was previously expensed as marketing - Patron correctly treated it as Ind AS 115 deferred revenue with SSP-based allocation. The Rs 4.2 crore liability that emerged passed our Series-C diligence cleanly. Worth every rupee.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya R.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder - Omnichannel D2C, Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multi-state GSTR-9C reconciliation across 7 GSTINs was a nightmare with our old auditor. Patron bundled it inside the statutory audit scope and we have one unified reconciliation set now. Inter-state stock transfer treatment was textbook.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikas N.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head - FMCG Supermarket, Pune</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We sell on Amazon, Flipkart, our own website, plus 8 offline stores. Section 194O TCS and Section 52 GST TCS reconciliation against marketplace settlement statements was airtight. No more mismatch surprises in lender reviews.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - Marketplace D2C, Gurugram</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our shrinkage was running at 4.2 percent. Patron benchmarked us against the 1.5 to 3 percent industry range and ran a category-wise pilferage analysis. We isolated three outlier stores and dropped to 2.3 percent in the next year. The audit literally paid for itself.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Meena K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD - Grocery Hypermarket Chain, Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
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
                    <p>Retail chain CFOs, omnichannel D2C founders and franchise networks across India trust our six-risk-area audit framework. Talk to a CA partner directly.</p>
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
            <a href="#who-section" class="toc-btn">Who Needs Audit</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Audit Process</a>
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

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Statutory Audit for Retail Companies</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Statutory Audit for Retail at a Glance</strong></p>
                    <p>Statutory audit for retail companies in India is the annual independent examination of financial statements under Section 143 of the Companies Act, 2013, with six sector-specific risk areas: multi-store inventory verification with shrinkage benchmarking under SA 501, POS-to-general-ledger reconciliation, trade-vs-cash discount accounting treatment, loyalty program liability under Ind AS 115, e-commerce-versus-offline channel split with Section 194O TCS, and multi-state GST reconciliation across separate GSTINs.</p>
                </div>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Act</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr>
                            <tr><td>Applicable To</td><td>Every Indian retail company (Pvt Ltd / Public / OPC / Section 8); LLPs above Rs 40 lakh turnover</td></tr>
                            <tr><td>Inventory Standard</td><td>AS 2 / Ind AS 2 - lower of cost or NRV; SA 501 physical verification; CARO clause 3(ii) 10% threshold</td></tr>
                            <tr><td>Revenue Standard</td><td>Ind AS 115 (5-step) - loyalty points = separate POB; trade discounts net off; principal vs agent for marketplace</td></tr>
                            <tr><td>Shrinkage Benchmark</td><td>1.5 to 3 percent of net sales for Indian organised retail (FMCG / grocery higher; apparel / electronics lower)</td></tr>
                            <tr><td>Cost Starting From</td><td>Rs 65,000 (Patron - retail business under Rs 10 cr, 1 to 3 stores)</td></tr>
                            <tr><td>Key TCS / TDS</td><td>Section 194O (1% e-com TCS), Section 194Q (0.1% TDS on purchases above Rs 50 lakh), Section 206C(1H), GST Section 52 (1% TCS by e-com operator)</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>Retail audits sit between manufacturing and SaaS in inventory weight but exceed both in transactional density. A single multi-store retailer might process 50,000 POS transactions a day across 30 outlets and three online marketplaces. The six risk areas - multi-store SA 501 inventory with documented shrinkage analysis, POS-to-GL reconciliation by store-day, trade-versus-cash discount accounting, loyalty point liability under Ind AS 115, e-commerce-versus-offline channel split with the related Section 194O TCS and GST Section 52 trail, and multi-state GST reconciliation across separate GSTINs - do not exist in this combination in any other industry.</p>
                <p>A clean retail audit reduces working-capital cost, defends gross-margin in lender reviews, and supports investor diligence at Series B / C and IPO stages. Patron handles all six risk areas under a single CA partner and one engagement letter, whether you operate a single boutique, a 50-store apparel chain, an omnichannel D2C brand across Amazon and Flipkart, a FMCG hypermarket network, or a multi-state franchise. Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Statutory Audit for Retail Companies</h2>
                <div class="content-text what-is-definition">
                    <p>Statutory audit for retail companies is the legally mandated annual examination of financial statements under Section 143 of the Companies Act, 2013, covering six retail-specific risk areas: multi-store inventory verification with shrinkage benchmarking, POS reconciliation, trade-vs-cash discount accounting, loyalty program liability, e-commerce-versus-offline channel split, and multi-state GST reconciliation.</p>
                    <p>It is conducted by an independent practicing Chartered Accountant holding a valid Certificate of Practice from ICAI. The audit applies to every Indian retail company regardless of revenue or store count - a 2-store boutique in its first year and a 500-store hypermarket chain crossing Rs 1,000 crore turnover are equally bound. The auditor's opinion under SA 700 is filed with the Registrar of Companies in Form AOC-4 within 30 days of the AGM, and Form ADT-1 intimates auditor appointment within 15 days of the board resolution.</p>
                    <p>Retail audit risk concentrates in three areas. First, inventory - the dominant asset on a retail balance sheet, scattered across stores, godowns, in-transit, and consignment locations, with shrinkage of 1.5 to 3 percent of net sales as the industry benchmark for Indian organised retail (FMCG and grocery at the higher end; apparel and electronics lower). Second, revenue completeness - millions of small-ticket POS transactions across multiple channels with different cut-off, discount and tax treatments. Third, multi-state GST compliance - separate GSTIN per state of operation under Section 25 of the CGST Act creates 5, 10 or even 28 separate compliance trails that the auditor must reconcile.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Statutory Audit (Retail):</strong></p>
                    <p><strong>SA 501 Multi-Store Attendance:</strong> Standard on Auditing requiring the statutory auditor to attend physical inventory count where inventory is material. For multi-store retailers, simultaneous count or robust cycle-counting documentation is required.</p>
                    <p><strong>POS Reconciliation:</strong> Daily reconciliation of cashier and POS-system totals against the GL revenue posting, by store-day. Variances (over / short) are investigated and explained.</p>
                    <p><strong>Loyalty Program Liability:</strong> Under Ind AS 115, loyalty points represent a separate performance obligation. A portion of the transaction price is allocated to the points at fair value (SSP) and deferred until redemption or expiry (breakage).</p>
                    <p><strong>Trade Discount vs Cash Discount:</strong> Trade discounts (volume, scheme, festival) reduce gross revenue at the time of sale. Cash discounts (early payment) are treated as a reduction of revenue if linked to the same transaction, or as finance cost if separable.</p>
                    <p><strong>Section 194O:</strong> Income Tax provision requiring e-commerce operators to deduct 1 percent TCS on the gross amount of sale of goods or services facilitated through the platform; applicable from 1 October 2020.</p>
                    <p><strong>GST Section 52:</strong> CGST Act provision requiring e-commerce operators to collect 1 percent TCS (0.5 percent CGST plus 0.5 percent SGST or 1 percent IGST) on net taxable supplies through the platform; monthly Form GSTR-8.</p>
                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Storefront awning -->
                            <path d="M25 50L100 30L175 50" stroke="#14365F" stroke-width="2" fill="#E8712C" fill-opacity="0.3"/>
                            <line x1="40" y1="48" x2="40" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="60" y1="46" x2="60" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="80" y1="44" x2="80" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="100" y1="43" x2="100" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="120" y1="44" x2="120" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="140" y1="46" x2="140" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="160" y1="48" x2="160" y2="58" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Store body -->
                            <rect x="30" y="58" width="140" height="85" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Window display: SHOP / SALE tags -->
                            <rect x="40" y="68" width="35" height="32" rx="2" fill="#FFFFFF" stroke="#14365F" stroke-width="1"/>
                            <text x="57.5" y="86" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SALE</text>
                            <text x="57.5" y="96" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial, sans-serif">50% OFF</text>
                            <!-- Door -->
                            <rect x="86" y="73" width="28" height="65" rx="2" fill="#14365F" opacity="0.18" stroke="#14365F" stroke-width="1"/>
                            <circle cx="108" cy="106" r="1.5" fill="#14365F"/>
                            <!-- Right window -->
                            <rect x="125" y="68" width="35" height="32" rx="2" fill="#FFFFFF" stroke="#14365F" stroke-width="1"/>
                            <rect x="130" y="74" width="8" height="12" rx="1" fill="#E8712C" opacity="0.5"/>
                            <rect x="142" y="74" width="8" height="12" rx="1" fill="#14365F" opacity="0.25"/>
                            <rect x="130" y="88" width="8" height="8" rx="1" fill="#F5A623" opacity="0.7"/>
                            <rect x="142" y="88" width="13" height="8" rx="1" fill="#10B981" opacity="0.4"/>
                            <!-- POS machine on right -->
                            <rect x="148" y="108" width="22" height="28" rx="2" fill="#14365F"/>
                            <rect x="151" y="111" width="16" height="8" rx="1" fill="#10B981"/>
                            <rect x="151" y="121" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <rect x="156" y="121" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <rect x="161" y="121" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <rect x="151" y="127" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <rect x="156" y="127" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <rect x="161" y="127" width="4" height="4" fill="#FFFFFF" opacity="0.6"/>
                            <!-- Audit clipboard top right -->
                            <circle cx="160" cy="35" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M154 35l4 4 8-8" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- GST badge -->
                            <rect x="22" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="43" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text>
                            <!-- SA 501 badge below -->
                            <rect x="20" y="148" width="58" height="14" rx="3" fill="#FFFFFF" stroke="#14365F" stroke-width="1"/>
                            <text x="49" y="158" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SA 501</text>
                            <!-- Label -->
                            <text x="100" y="172" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Statutory Audit for Retail</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143</span>
                        <strong>6-Risk-Area Retail Audit Framework</strong>
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
            <h2 class="section-title">Who Needs Statutory Audit (Retail)</h2>
            <div class="content-text">
                <p>Statutory audit applies to every company incorporated under the Companies Act, 2013 - no revenue threshold and no exemption based on store count. For retail entities the applicability layers stack by sub-sector:</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Retail Sub-sector</th><th>Examples</th><th>Audit Layers</th></tr></thead>
                        <tbody>
                            <tr><td>Single-store boutique / standalone retailer</td><td>Designer apparel store, single-unit electronics outlet</td><td>Sec 143 + SA 501 + AS 9 / Ind AS 115 + GST single-state</td></tr>
                            <tr><td>Multi-store retail chain</td><td>Apparel chain (50 to 500 stores), FMCG supermarket chain</td><td>Sec 143 + SA 501 multi-store + POS recon + multi-state GST + loyalty program if applicable</td></tr>
                            <tr><td>Omnichannel retailer (offline + own e-com)</td><td>D2C brand with website + 20 stores</td><td>Sec 143 + channel-wise revenue split + Section 194O TCS reconciliation + GST Section 52 sidecar</td></tr>
                            <tr><td>Marketplace-only e-commerce</td><td>Pure-play online retailer on Amazon / Flipkart</td><td>Sec 143 + principal vs agent under Ind AS 115 + Section 194O TCS + GST Section 52 + Schedule III disclosure</td></tr>
                            <tr><td>Franchise network</td><td>QSR chain, lifestyle franchise</td><td>Sec 143 + franchise royalty revenue Ind AS 115 + multi-franchisee receivable + Section 194J TDS</td></tr>
                            <tr><td>FMCG / supermarket chain</td><td>Hypermarket, neighbourhood supermarket chain</td><td>Sec 143 + FEFO inventory + perishable shrinkage + CARO 3(ii) bank stock recon for WC above Rs 5 cr</td></tr>
                            <tr><td>Luxury / jewellery retail</td><td>Branded jewellery, premium watches</td><td>Sec 143 + high-value SKU verification + hallmark / BIS compliance + cash transaction Section 269ST</td></tr>
                        </tbody>
                    </table>
                </div>
                <p>For <a href="/tax-audit">tax audit</a> applicability under Section 44AB, retail entities cross the Rs 1 crore turnover threshold (Rs 10 crore for digital receipts above 95 percent). CARO 2020 applies to all retail companies except micro / small companies and small private companies meeting all three thresholds (paid-up capital plus reserves under Rs 1 crore, borrowings under Rs 1 crore, revenue under Rs 10 crore). E-invoicing under Rule 48(4) of CGST Rules applies to retailers with aggregate turnover above Rs 5 crore from 1 August 2023.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 143 Full-Scope Statutory Audit</td><td>Companies Act 2013 audit with CARO 2020 21-clause annexure; SA 700 / 705 reporting; Ind AS or AS framework as applicable.</td></tr>
                        <tr><td>Multi-Store SA 501 Inventory Audit</td><td>Simultaneous physical count across all stores at year-end where feasible; documented cycle-counting roll-forward where not; inter-store transfer freeze during count window; centralised data cutoff time; store-wise shrinkage reporting against the 1.5 to 3 percent benchmark; category-wise theft / pilferage analysis; floor stock vs back-room reconciliation.</td></tr>
                        <tr><td>POS-to-GL Reconciliation Testing</td><td>Store-day-wise POS totals reconciled to GL revenue postings; cashier balancing (over / short reporting); EDC / UPI settlement matching with bank credits; GRN / GDN cut-off testing around 31 March; return-goods (RTO from e-com, store returns) accounting verification.</td></tr>
                        <tr><td>Loyalty Program Liability Audit under Ind AS 115</td><td>Allocation of transaction price between immediate goods and loyalty points using standalone selling price (SSP); fair-value computation of one loyalty point; deferred revenue (contract liability) opening-to-closing roll-forward under paragraph 116; breakage revenue recognition based on historical redemption pattern; expiry-policy compliance review.</td></tr>
                        <tr><td>Trade Discount, Cash Discount and Scheme Accounting</td><td>Volume discount, scheme discount, festival discount, target-incentive discount - each tested for net-revenue treatment under Ind AS 115; cash discount (early payment) separated as finance cost vs revenue reduction; vendor scheme income (slotting fees, listing fees) classified per Ind AS 38; principal vs agent classification for white-label and consignment sales.</td></tr>
                        <tr><td>Multi-State GST Reconciliation and E-commerce TCS</td><td>GSTR-1, GSTR-3B, GSTR-9 and GSTR-9C reconciled per GSTIN per state; inter-state stock-transfer GST treatment (deemed supply); ITC reversal tracking; e-invoicing IRN compliance for turnover above Rs 5 crore; Section 194O 1 percent TCS reconciliation on e-commerce gross sales; GST Section 52 TCS sidecar from marketplaces (Form GSTR-8) reconciled against Form 26AS.</td></tr>
                        <tr><td>SA 700 Audit Report Components</td><td>Opinion paragraph on true and fair view; Basis for Opinion (independence under SA 200; Ind AS framework); Key Audit Matters (SA 701) for listed retailers - revenue (loyalty + channel split), inventory and shrinkage estimate, trade-receivable ECL; Going Concern (SA 570); Section 269ST disclosure for jewellery and luxury retailers; CARO 2020 21-clause annexure.</td></tr>
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
            <h2 class="section-title">Retail Statutory Audit Process - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From engagement letter to UDIN sign-off and AOC-4 filing - here's how Patron runs a retail audit store-by-store, channel-by-channel, GSTIN-by-GSTIN.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Engagement and Multi-Store Risk Profiling</h3>
                    <p class="step-description">
                        Patron issues an engagement letter under SA 210, obtains independence and non-disqualification certificate under Section 141 of the Companies Act, 2013, and conducts a retail-specific risk profile. This means cataloguing every store (location, GSTIN, opening date, square footage, average daily POS transactions), every godown and central warehouse, every channel (offline POS, own website, third-party marketplaces, B2B), every loyalty program tier, and every state-GSTIN. For omnichannel retailers, the principal-vs-agent analysis for each marketplace is documented up-front.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SA 210 Letter
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Store and GSTIN Catalogue
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Channel Mix Profile
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="10" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="28" y1="25" x2="92" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                                <rect x="28" y="34" width="35" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="44" width="55" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <rect x="28" y="54" width="45" height="6" rx="2" fill="#14365F" opacity="0.25"/>
                                <circle cx="92" cy="68" r="9" fill="#10B981"/>
                                <path d="M87 68l4 4 7-7" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Engagement Letter</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">SA 501 Multi-Store Simultaneous Inventory Count</h3>
                    <p class="step-description">
                        Year-end physical stock count is attended by the audit partner or senior team across all stores simultaneously where feasible. When 100 percent simultaneous attendance is not practical (large 50-plus-store chains), Patron deploys parallel sub-teams across high-value stores and documents the alternative procedure for the rest - rolling-cut-off using GRN / GDN serial numbers, cycle-count documentation, and reconciliation roll-back to year-end. Inter-store transfers are frozen during the count window. Centralised POS data cutoff time is enforced. Store-wise shrinkage is computed against the 1.5 to 3 percent benchmark and category-wise theft / pilferage analysis is documented.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Simultaneous Count
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Transfer Freeze
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Store-wise Shrinkage
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="20" width="20" height="60" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="40" y="20" width="20" height="60" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="68" y="20" width="20" height="60" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <rect x="96" y="20" width="20" height="60" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <rect x="15" y="26" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="15" y="36" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="15" y="46" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="43" y="26" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="43" y="36" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="71" y="26" width="14" height="6" fill="#F5A623" opacity="0.6"/>
                                <rect x="71" y="36" width="14" height="6" fill="#F5A623" opacity="0.6"/>
                                <rect x="99" y="26" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="99" y="36" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <rect x="99" y="46" width="14" height="6" fill="#14365F" opacity="0.3"/>
                                <circle cx="22" cy="85" r="3" fill="#10B981"/>
                                <circle cx="50" cy="85" r="3" fill="#10B981"/>
                                <circle cx="78" cy="85" r="3" fill="#F5A623"/>
                                <circle cx="106" cy="85" r="3" fill="#10B981"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Multi-Store Count</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">POS-to-GL Reconciliation and Discount Treatment</h3>
                    <p class="step-description">
                        For a representative sample of store-days (typically two days per store with random-week selection), Patron reconciles POS totals to GL revenue postings - gross POS sales, less trade discounts on receipt, less returns, plus loyalty redemption, plus EDC / UPI charge-back adjustments. Cashier over / short reports are reviewed. The treatment of each discount type is tested for Ind AS 115 net-revenue compliance - volume discount, scheme discount, festival discount and target-incentive discount as revenue reductions; cash discount (early payment) classified per the contractual character; vendor scheme income classified per Ind AS 38 against COGS or operating income.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Store-Day Sampling
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Discount Net Treatment
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Cashier Variance Review
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="15" y="20" width="40" height="55" rx="3" fill="#14365F"/>
                                <rect x="19" y="24" width="32" height="14" rx="1" fill="#10B981"/>
                                <text x="35" y="34" font-size="6" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">POS</text>
                                <rect x="19" y="42" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="27" y="42" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="35" y="42" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="43" y="42" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="19" y="50" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="27" y="50" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="35" y="50" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="43" y="50" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="19" y="58" width="6" height="6" fill="#FFFFFF" opacity="0.6"/>
                                <rect x="27" y="58" width="20" height="6" fill="#E8712C"/>
                                <line x1="58" y1="48" x2="68" y2="48" stroke="#14365F" stroke-width="2.5"/>
                                <path d="M65 45l3 3-3 3" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                                <rect x="72" y="20" width="36" height="55" rx="3" fill="#FFFFFF" stroke="#14365F" stroke-width="1.5"/>
                                <text x="90" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GL Recon</text>
                                <line x1="77" y1="38" x2="103" y2="38" stroke="#F5A623" stroke-width="2"/>
                                <line x1="77" y1="46" x2="103" y2="46" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="77" y1="52" x2="100" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="77" y1="58" x2="103" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <circle cx="90" cy="68" r="4" fill="#10B981"/>
                                <path d="M87.5 68l1.8 1.8 3.4-3.4" stroke="#FFFFFF" stroke-width="1.4" stroke-linecap="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">POS-to-GL Recon</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Loyalty Program Liability under Ind AS 115</h3>
                    <p class="step-description">
                        Patron reviews the loyalty program structure - issuance rate, redemption rate, expiry policy, conversion mechanism. The standalone selling price (SSP) of one loyalty point is determined from the customer's perspective. For each sale, the transaction price is allocated between the immediate goods and the loyalty point liability. The deferred revenue (contract liability) is reconciled to the customer-wise outstanding points multiplied by SSP. Breakage revenue is recognised based on the historical redemption pattern, with the unrecognised balance disclosed in the Schedule III opening-to-closing roll-forward under paragraph 116(a) of Ind AS 115.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SSP Allocation
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Contract Liability
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Breakage Estimate
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="32" fill="none" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M60 18 A32 32 0 0 1 86 67 L60 50 Z" fill="#E8712C" opacity="0.7"/>
                                <path d="M86 67 A32 32 0 0 1 60 82 L60 50 Z" fill="#F5A623" opacity="0.7"/>
                                <path d="M60 82 A32 32 0 0 1 28 50 L60 50 Z" fill="#10B981" opacity="0.55"/>
                                <path d="M28 50 A32 32 0 0 1 60 18 L60 50 Z" fill="#14365F" opacity="0.4"/>
                                <text x="60" y="53" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SSP</text>
                                <rect x="92" y="40" width="22" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="103" y="54" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ind AS</text>
                                <text x="103" y="60" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">115</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Loyalty Liability</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Multi-State GST Reconciliation and E-commerce TCS</h3>
                    <p class="step-description">
                        Patron reconciles GSTR-1, GSTR-3B, GSTR-9 (annual return), and GSTR-9C (reconciliation statement) per GSTIN per state of operation. Inter-state stock transfers between branches are tested as deemed supplies under Schedule I of the CGST Act. ITC reversal for destroyed and damaged goods under Section 17(5) is verified. For omnichannel retailers, Section 194O 1 percent TCS by the e-commerce operator on the gross sales facilitated is reconciled against Form 26AS, and the Section 52 GST TCS (Form GSTR-8) sidecar from each marketplace is matched to the merchant ledger. E-invoicing IRN compliance is checked for turnover above Rs 5 crore.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            State-wise GSTR-9C
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Section 194O Sidecar
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            IRN E-invoicing Check
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="15" width="28" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="26" y="29" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MH</text>
                                <rect x="46" y="15" width="28" height="22" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="29" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">KA</text>
                                <rect x="80" y="15" width="28" height="22" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <text x="94" y="29" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DL</text>
                                <rect x="12" y="44" width="28" height="22" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <text x="26" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TN</text>
                                <rect x="46" y="44" width="28" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                <text x="60" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GJ</text>
                                <rect x="80" y="44" width="28" height="22" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="1.5"/>
                                <text x="94" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">UP</text>
                                <rect x="28" y="75" width="64" height="14" rx="3" fill="#10B981"/>
                                <text x="60" y="85" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-9C</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Multi-State GST</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Sign-Off, UDIN and AOC-4 Filing</h3>
                    <p class="step-description">
                        Patron's audit partner signs the report under UDIN generated on the ICAI portal, annexes it to Form AOC-4, and files with the Registrar of Companies within 30 days of the AGM. Form MGT-7 (annual return) follows within 60 days. Form 3CD tax audit closes by 30 September (for entities under audit). State-wise GSTR-9 and GSTR-9C are filed by 31 December.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            UDIN Generation
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AOC-4 within 30 days
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            MGT-7 within 60 days
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AUDIT REPORT</text>
                                <line x1="28" y1="40" x2="92" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="48" x2="92" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <line x1="28" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                                <rect x="55" y="62" width="38" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                <text x="74" y="71" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">UDIN</text>
                                <circle cx="98" cy="85" r="11" fill="#10B981"/>
                                <path d="M92 85l4 4 8-8" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Sign-Off and Filing</span>
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
            <h2 class="section-title">Documents Checklist for Retail Audit</h2>
            <div class="content-text">
                <ul>
                    <li><strong>Trial Balance and General Ledger:</strong> Year-end TB plus full ledger scroll; channel-wise revenue ledger separately.</li>
                    <li><strong>Store-wise Stock Register:</strong> Opening stock, receipts, sales, inter-store transfers, returns, closing stock; barcoded SKU register; high-value-item separate log.</li>
                    <li><strong>Physical Count Sheets:</strong> Pre-numbered count sheets per store signed by store manager and Patron audit team; high-value-item count by partner directly.</li>
                    <li><strong>POS Reports:</strong> Daily store-day Z-report; cashier balancing reports; EDC / UPI settlement files; refund reports.</li>
                    <li><strong>Channel-wise Sales Schedule:</strong> Offline POS, own website, Amazon, Flipkart, other marketplaces - separate ledger per channel.</li>
                    <li><strong>Marketplace Settlement Statements:</strong> Payout statements from each marketplace; reconciliation to bank credits; Section 52 GST TCS sidecar; Section 194O Form 26AS download.</li>
                    <li><strong>Loyalty Program Reports:</strong> Customer-wise outstanding points; redemption history; expiry log; SSP basis for one point.</li>
                    <li><strong>Discount and Scheme Schedule:</strong> Trade discounts by scheme; vendor scheme income (slotting fees, listing fees); cash discount log.</li>
                    <li><strong>State-wise GST Returns:</strong> GSTR-1, GSTR-3B, GSTR-9, GSTR-9C per GSTIN; inter-state stock transfer log; e-way bill register; IRN dashboard.</li>
                    <li><strong>TDS / TCS Returns:</strong> Form 24Q, 26Q, 27EQ; Section 194O / 194Q / 206C(1H) reconciliations.</li>
                    <li><strong>Rent and Lease Agreements:</strong> Per store - Ind AS 116 ROU asset and lease liability workings; mall rent / common area maintenance bifurcation.</li>
                    <li><strong>Statutory Registers (Sections 88, 170, 188, 189):</strong> Members, directors, contracts, loans.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Retail Audit Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>Year-End Multi-Store Count Logistics</td>
                            <td>A 30-store chain cannot have a single partner present at every store on 31 March. SA 501 demands 100 percent attendance or robust alternative procedure - failure surfaces in CARO clause 3(ii) and lender stock-audit findings.</td>
                            <td>Patron deploys parallel sub-teams covering top-10 high-value stores at year-end, freezes inter-store transfers, enforces a centralised POS cutoff, and uses cycle-count documentation plus a reconciliation roll-back for the remaining stores. Store-wise shrinkage is reported separately (not aggregated to chain level) so management can act on outlier stores.</td>
                        </tr>
                        <tr>
                            <td>POS Cut-Off and Channel Bleed</td>
                            <td>Returns from e-commerce orders fulfilled offline (or vice-versa in omnichannel) create channel-bleed - revenue recognised in one channel but reversed in another, often across financial years. Risk of cut-off misstatement and Ind AS 115 inconsistency.</td>
                            <td>Patron tests cut-off by sampling 31 March and 1 April POS transactions, marketplace returns logged in early April, and goods-in-transit between channels. The classification of return shipping costs as revenue reduction vs operating expense is tested for Ind AS 115 consistency.</td>
                        </tr>
                        <tr>
                            <td>Loyalty Point Liability and Breakage Estimate</td>
                            <td>Many Indian retailers under-provision the loyalty liability by treating points as marketing expense rather than a separate performance obligation under Ind AS 115. A 10-point retail program issuing 10 crore points a year at Rs 1 SSP each creates a Rs 10 crore liability frequently understated in unaudited financials.</td>
                            <td>The audit corrects this by (a) computing the SSP of one point from historical redemption data, (b) allocating transaction price to the loyalty POB, (c) deferring the allocated portion as a contract liability, and (d) recognising breakage revenue only on a documented historical redemption pattern.</td>
                        </tr>
                        <tr>
                            <td>Multi-State GST Reconciliation and Inter-State Stock Transfers</td>
                            <td>A retailer operating in 10 states has 10 separate GSTINs and 10 parallel GST compliance trails. Frequent findings: IGST charged at wrong rate on inter-branch transfers, ITC mismatch where receiving branch did not claim correctly, GSTR-9C reconciliation showing un-explained differences.</td>
                            <td>Inter-state stock transfers between branches are tested as deemed supplies under Schedule I of the CGST Act. Patron prepares a state-wise GSTR-9C reconciliation as part of the statutory audit workpapers, eliminating duplication between the statutory audit and the <a href="/gst-audit">GST audit</a> engagement.</td>
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
            <h2 class="section-title">Patron Statutory Audit Fees for Retail Companies</h2>
            <div class="content-text">
                <p>Patron's statutory audit fees for retail companies are tiered by store count, channel mix, and state-GSTIN count. SA 501 multi-store attendance, POS reconciliation, loyalty Ind AS 115 audit and state-wise GSTR-9C reconciliation are bundled at the higher tiers.</p>
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Retail Profile</th><th>Patron Fee (Rs)</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Single store / 1 to 3 stores (turnover under Rs 10 cr)</td><td>65,000 to 1,40,000</td><td>3 to 4 weeks</td></tr>
                        <tr><td>4 to 10 stores, single state (turnover Rs 10 to 25 cr)</td><td>1,75,000 to 3,25,000</td><td>4 to 5 weeks</td></tr>
                        <tr><td>11 to 30 stores, multi-state (turnover Rs 25 to 100 cr)</td><td>3,75,000 to 6,75,000</td><td>5 to 6 weeks</td></tr>
                        <tr><td>31 to 100 stores, multi-state (turnover Rs 100 to 300 cr)</td><td>7,00,000 to 12,00,000</td><td>6 to 7 weeks</td></tr>
                        <tr><td>100+ stores, omnichannel (turnover above Rs 300 cr)</td><td>From 13,00,000</td><td>7 to 9 weeks</td></tr>
                        <tr><td>Omnichannel premium (own e-com + 3 to 5 marketplaces)</td><td>Add 1,25,000 to 2,75,000</td><td>Same window</td></tr>
                        <tr><td>Loyalty program audit (Ind AS 115) overlay</td><td>Add 50,000 to 1,50,000</td><td>Same window</td></tr>
                        <tr><td>E-invoicing (Rs 5 cr threshold) and IRN compliance review</td><td>Add 35,000 to 85,000</td><td>Same window</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td><strong>Starting from INR 65,000 (Exl GST and Govt. Charges)</strong></td><td>3 to 4 weeks</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for the six retail-specific risk areas - multi-store SA 501 inventory verification, POS reconciliation, loyalty program Ind AS 115 audit, trade-vs-cash discount accounting, omnichannel channel split with Section 194O TCS, and multi-state GST reconciliation - are bundled at the tier rates above. Statutory filing fees with the MCA portal, e-invoicing IRN generation, and any UDIN cost are separate. The exact fee depends on the number of stores, states, channels and listed status. Contact us for a store-count-tiered quote.</p>
                <p style="margin-top:16px;"><strong>Get a free statutory audit consultation for your retail chain - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20retail%20chain." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Audit Timeline for Retail Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Duration</th><th>Notes</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement and planning</td><td>Week 1</td><td>SA 210 engagement letter; Section 141 independence; store list and GSTIN catalogue.</td></tr>
                        <tr><td>Pre-year-end interim audit</td><td>Week 2 to 3</td><td>Q4 substantive testing; loyalty liability walkthrough; POS reconciliation sample.</td></tr>
                        <tr><td>SA 501 multi-store physical count</td><td>31 March + 1 to 3 days</td><td>Parallel sub-teams; freeze inter-store transfers; central POS cutoff.</td></tr>
                        <tr><td>POS reconciliation and revenue cut-off</td><td>Weeks 4 to 5</td><td>Store-day-wise reconciliation; channel-bleed testing; trade discount classification.</td></tr>
                        <tr><td>GSTR-9 / GSTR-9C per GSTIN reconciliation</td><td>Week 5 (parallel)</td><td>State-wise tax position; inter-state stock transfer testing.</td></tr>
                        <tr><td>Draft report and management response</td><td>Week 6 to 7</td><td>SA 700 / 705 review; KAM discussion for listed retailers.</td></tr>
                        <tr><td>UDIN, sign-off and AOC-4 filing</td><td>Within 30 days of AGM</td><td>Patron files AOC-4 with audit report annexed.</td></tr>
                        <tr><td>Form 3CD tax audit filing</td><td>By 30 September</td><td>For Section 44AB applicable retailers.</td></tr>
                        <tr><td>State-wise GSTR-9 and GSTR-9C</td><td>By 31 December</td><td>Per GSTIN per state.</td></tr>
                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>&#9888; Statutory Deadlines to Track:</strong></p>
                    <p>AOC-4 with audit report within 30 days of AGM; MGT-7 within 60 days; ADT-1 within 15 days of board resolution. Form 3CD tax audit by 30 September for Section 44AB applicable retailers. State-wise GSTR-9 and GSTR-9C by 31 December. E-invoicing IRN mandatory above Rs 5 crore turnover (effective 1 August 2023) - non-compliance creates ITC denial risk for the buyer. Delay attracts Rs 100 per day MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000.</p>
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
            <h2 class="section-title">Benefits of Patron-Led Retail Audit</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
                <h3 class="feature-title">Single Engagement, Six Risk Areas</h3>
                <p class="feature-text">One engagement letter covers Section 143 statutory audit, multi-store SA 501, POS reconciliation, loyalty Ind AS 115 audit and state-wise GSTR-9C reconciliation. Eliminates the workpaper duplication that occurs when retail-chain CFOs stitch statutory audit, lender stock audit, GST audit, and channel-wise revenue review across separate firms.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8 8-4-4-6 6"/><path d="M14 7h6v6"/></svg></div>
                <h3 class="feature-title">Multi-Store SA 501 Partner-Led Sub-Teams</h3>
                <p class="feature-text">Audit partner-led parallel sub-teams attend top-value stores simultaneously at year-end. The NFRA enforcement precedent on inventory attendance applies equally to retail. Cycle-count documentation and roll-back procedures cover the remaining stores. No "single partner could not be in 30 places" qualifications.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg></div>
                <h3 class="feature-title">Store-Wise Shrinkage Benchmarking</h3>
                <p class="feature-text">Shrinkage reported store-by-store against the 1.5 to 3 percent industry benchmark for Indian organised retail - not aggregated to chain level. Management can act on outlier stores. Category-wise theft / pilferage analysis isolates the actual loss driver. The audit becomes a management tool, not just compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3 class="feature-title">Loyalty Liability Quantified with SSP</h3>
                <p class="feature-text">Loyalty program liability computed using SSP-based deferral and historical-redemption breakage - the precise Ind AS 115 treatment Indian retailers most commonly misapply. Survives Series B / C and IPO diligence. Schedule III contract liability disclosure prepared per paragraph 116(a).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.7 13.4a2 2 0 002 1.6h9.7a2 2 0 002-1.6L23 6H6"/></svg></div>
                <h3 class="feature-title">Omnichannel TCS Reconciliation</h3>
                <p class="feature-text">Section 194O 1 percent e-commerce TCS reconciled against Form 26AS quarterly. GST Section 52 1 percent TCS (Form GSTR-8) sidecar from each marketplace matched to the merchant ledger. Marketplace payout-to-bank-credit mismatch surfaces during audit, not in a lender review six months later.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/></svg></div>
                <h3 class="feature-title">Retail-Aware Key Audit Matters</h3>
                <p class="feature-text">For listed retailers under SA 701, KAM wording is retail-aware: revenue recognition (loyalty + channel split), inventory valuation (shrinkage estimate), trade-receivable ECL (B2B and marketplace aging). No generic KAMs. Direct partner attention on the precise risks that drive most retail qualifications.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Retail Audit Clients: Track Record</h2>
            <div class="content-text">
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p>"The statutory audit was clean and completed well before deadline. No last-minute rush." - MD, Trading Firm, Mumbai</p>
                <p>"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and retail clients across FMCG chains in Maharashtra, apparel networks in Delhi-NCR, and D2C brands across major metros. With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves multi-state retail chains, franchise networks and omnichannel D2C brands with a single partner-led team.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron-Led Retail Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron-Led</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>DIY / In-House</th></tr></thead>
                    <tbody>
                        <tr><td>Independence under Section 141</td><td>Qualified</td><td>Qualified</td><td>Disqualified</td></tr>
                        <tr><td>Multi-store SA 501 attendance</td><td>Partner-led sub-teams; faster</td><td>Centralised - slower turnaround</td><td>Not signable</td></tr>
                        <tr><td>POS reconciliation sample depth</td><td>Calibrated 2 days per store random</td><td>Heavy - 5+ days per store</td><td>N/A</td></tr>
                        <tr><td>Loyalty Ind AS 115 audit</td><td>Single-partner sign-off; integrated</td><td>Separate revenue partner</td><td>Cannot sign</td></tr>
                        <tr><td>Multi-state GSTR-9C reconciliation</td><td>Bundled in statutory audit scope</td><td>Separate GST partner</td><td>Self-reconciliation</td></tr>
                        <tr><td>Cost (30-store, multi-state retailer)</td><td>Rs 3.75 to 6.75 lakh</td><td>Rs 15 to 30 lakh</td><td>Apparent zero - unsignable</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;">Statutory audit cannot be performed in-house - Section 141 disqualifies all officers and employees. For listed retail chains and IPO-ready entities, Big-Four scale may be appropriate; for unlisted retailers between 5 and 100 stores, a senior partner-led mid-tier firm typically delivers comparable assurance at one-fifth the Big-Four fee, with faster turnaround and partner-attention on the precise audit risks (POS, loyalty, multi-state GST) that matter to retail.</p>
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
                <p>Retail chains, omnichannel D2C brands, franchise networks and supermarket groups often need a bundled compliance scope. These are the services Patron offers alongside the statutory audit:</p>
                <ul>
                    <li><strong>Statutory Audit (India):</strong> <a href="/statutory-audit">Parent statutory audit page</a> - Section 143 framework applicable across all industries.</li>
                    <li><strong>Tax Audit (Section 44AB):</strong> <a href="/tax-audit">Tax audit</a> - bundled for retailers above Rs 1 crore (Rs 10 cr digital) turnover; Form 3CD and 3CA / 3CB.</li>
                    <li><strong>Internal Audit (Section 138):</strong> <a href="/internal-audit">Internal audit</a> - mandatory above Rs 200 cr turnover; recommended for multi-store chains.</li>
                    <li><strong>Stock Audit:</strong> <a href="/stock-audit">Stock audit</a> - lender-mandated quarterly stock audit; supports CARO 3(ii) statutory reporting for working capital above Rs 5 crore.</li>
                    <li><strong>GST Audit (GSTR-9C):</strong> <a href="/gst-audit">GST audit</a> - multi-state GSTR-9C reconciliation for retailers above Rs 5 cr turnover; inter-state stock transfer testing.</li>
                    <li><strong>Accounting Services for Trading Industry:</strong> <a href="/accounting-services-for-trading-industry">Trading accounting</a> - peer accounting service for trading and retail businesses (Tally / Zoho / SAP).</li>
                    <li><strong>Accounting Services for E-Commerce Industry:</strong> <a href="/accounting-services-for-e-commerce-industry">E-commerce accounting</a> - marketplace settlement reconciliation, Section 194O TCS and Section 52 GST TCS bookkeeping.</li>
                    <li><strong>Private Limited Compliance:</strong> <a href="/private-limited-company-compliance">Pvt Ltd compliance</a> - ROC annual filings ADT-1, AOC-4, MGT-7.</li>
                    <li><strong>Appointment of Auditor:</strong> <a href="/appointment-of-auditor">Appointment of auditor</a> - first auditor and AGM appointment with ADT-1 filing.</li>
                    <li><strong>Change of Auditor:</strong> <a href="/change-of-auditor">Change of auditor</a> - Section 140 resignation and replacement; mid-term casual vacancy.</li>
                    <li><strong>Secretarial Audit:</strong> <a href="/secretarial-audit">Secretarial audit</a> - mandatory for listed and large unlisted retailers under Section 204; Form MR-3.</li>
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
                <p>The statutory audit framework for retail companies in India draws on the Companies Act, CGST Act, the Income Tax Act, and ICAI guidance. Authoritative sources include the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3 portal</a> for AOC-4 / MGT-7 / ADT-1 filings, the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> for IRN e-invoicing and GSTR-9C state-wise filings, and <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India</a> for Section 194O, 194Q, 206C(1H) and 269ST references.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Reference</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act (Statutory)</td><td>Companies Act, 2013 - Sections 139 to 148</td></tr>
                        <tr><td>Section 139</td><td>First auditor within 30 days; AGM appointment for 5 years (individual) or 10 years (firm)</td></tr>
                        <tr><td>Section 143</td><td>Powers and duties; SA 700 / 705 reporting; CARO 2020 annexure</td></tr>
                        <tr><td>Section 147</td><td>Penalty - company Rs 25,000 to Rs 5,00,000; auditor Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000</td></tr>
                        <tr><td>Income Tax Section 44AB</td><td>Tax audit applicability - turnover above Rs 1 crore (Rs 10 crore if 95% digital receipts)</td></tr>
                        <tr><td>Income Tax Section 194O</td><td>1 percent TCS deducted by e-commerce operator on gross sale amount facilitated; effective 1 October 2020</td></tr>
                        <tr><td>Income Tax Section 194Q</td><td>0.1 percent TDS by buyer on purchases above Rs 50 lakh from a single seller; effective 1 July 2021</td></tr>
                        <tr><td>Income Tax Section 206C(1H)</td><td>0.1 percent TCS by seller on sales above Rs 50 lakh to a single buyer; effective 1 October 2020</td></tr>
                        <tr><td>Income Tax Section 269ST</td><td>Cash transaction limit Rs 2 lakh per person per day per transaction - critical for jewellery and luxury retailers</td></tr>
                        <tr><td>CGST Act Section 22</td><td>GST registration threshold - Rs 40 lakh for goods (Rs 20 lakh for special category states); Rs 20 lakh for services</td></tr>
                        <tr><td>CGST Act Section 25</td><td>Separate GSTIN required for every state of operation - creates multi-GSTIN compliance for multi-state retailers</td></tr>
                        <tr><td>CGST Act Section 52</td><td>E-commerce operator collects 1 percent TCS (0.5% CGST + 0.5% SGST or 1% IGST) on net taxable supplies through platform; monthly Form GSTR-8</td></tr>
                        <tr><td>CGST Act Section 9(3)</td><td>Reverse charge mechanism (RCM) - applies to commercial rent paid to unregistered landlord, GTA services etc</td></tr>
                        <tr><td>Rule 48(4) CGST Rules</td><td>E-invoicing mandatory for entities with aggregate turnover above Rs 5 crore in any preceding FY; threshold dates: Rs 500 cr (1 Oct 2020), Rs 100 cr (1 Jan 2021), Rs 50 cr (1 Apr 2021), Rs 20 cr (1 Apr 2022), Rs 10 cr (1 Oct 2022), Rs 5 cr (1 Aug 2023)</td></tr>
                        <tr><td>Ind AS 115 (Revenue)</td><td>5-step model: contract, performance obligations, transaction price, allocation, recognition. Loyalty points = separate POB (paragraph BC-44); trade discounts as variable consideration (para 50); principal vs agent (para B34 to B38); contract liability disclosure (para 116)</td></tr>
                        <tr><td>Ind AS 2 / AS 2</td><td>Inventories - lower of cost or NRV; FIFO or weighted average; Section 145 income tax consistency requirement</td></tr>
                        <tr><td>Ind AS 109</td><td>Financial Instruments - Expected Credit Loss model for trade receivables including marketplace and B2B aging</td></tr>
                        <tr><td>Ind AS 116 / AS 19</td><td>Leases - retail store rent creates ROU asset and lease liability; mall common-area maintenance separated</td></tr>
                        <tr><td>CARO 2020</td><td>Clauses 3(i) PP and E and title deeds; 3(ii) inventory + WC above Rs 5 crore; 3(vii) statutory dues including GST and TDS / TCS; 3(xv) related-party (group-supplier transactions); 3(xx) CSR</td></tr>
                        <tr><td>Standards on Auditing</td><td>SA 200 (Overall Objectives), SA 240 (Fraud), SA 500 / 501 (Audit Evidence - Inventory), SA 530 (Sampling), SA 540 (Accounting Estimates - applies to shrinkage provision and breakage), SA 570 (Going Concern), SA 700 / 701 / 705 / 706</td></tr>
                        <tr><td>Consumer Protection (E-Commerce) Rules 2020</td><td>E-commerce entity registration; consumer grievance redressal; return / refund policy disclosure</td></tr>
                        <tr><td>Forms</td><td>ADT-1 (auditor), AOC-4 (financials), MGT-7 (annual return), 3CD (tax audit), GSTR-1, GSTR-3B, GSTR-9, GSTR-9C (per GSTIN), GSTR-8 (e-com operator), Form 27EQ (Section 194O TCS return), 26AS (TDS/TCS credits), IRN (e-invoice)</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Statutory Audit for Retail Companies</h2>
                    <p class="faq-expanded__lead">Common questions from retail-chain CFOs, omnichannel D2C founders, supermarket finance heads and franchise networks on Section 143, multi-store SA 501, loyalty Ind AS 115, POS reconciliation and multi-state GST.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Statutory Audit for Retail Companies'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for retail chains in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 139 of the Companies Act, 2013 makes statutory audit mandatory for every Indian company - private limited, public limited, OPC, Section 8 - irrespective of turnover, store count or profitability. A single-store boutique in its first year and a 500-store hypermarket chain crossing Rs 1,000 crore turnover are equally bound. The first auditor must be appointed by the Board within 30 days of incorporation, and Form ADT-1 must be filed with the Registrar of Companies within 15 days of appointment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How are loyalty points accounted for under Ind AS 115?</h3>
                        <div class="faq-expanded__a"><p>Under Ind AS 115, loyalty points represent a separate performance obligation alongside the immediate sale of goods. The transaction price is allocated between the immediate goods and the points based on standalone selling prices (SSP). The portion allocated to points is deferred as a contract liability on the balance sheet and recognised as revenue only when the points are redeemed or expire (breakage). The breakage estimate is based on historical redemption rates. A Rs 100 sale earning 10 points at Rs 1 SSP each means Rs 90 immediate revenue and Rs 10 deferred liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the typical shrinkage rate in Indian organised retail?</h3>
                        <div class="faq-expanded__a"><p>Indian organised retail averages 1.5 to 3 percent of net sales in shrinkage, representing Rs 1.5 to 3 crore annual inventory loss for a Rs 100 crore chain. The five primary sources are employee theft (30 to 35 percent of shrinkage), shoplifting (20 to 25 percent), vendor fraud and short-deliveries (15 to 20 percent), expiry and damage (15 to 20 percent), and administrative errors (10 to 15 percent). FMCG and grocery sit at the higher end of the range; apparel and electronics typically lower. The statutory auditor benchmarks the entity's actual shrinkage against this range and investigates outliers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are trade discounts different from cash discounts in retail accounting?</h3>
                        <div class="faq-expanded__a"><p>Trade discounts (volume discount, scheme discount, festival discount, target-incentive discount) reduce gross revenue at the time of sale under Ind AS 115 - the entity recognises only the net consideration expected. Cash discounts (early payment incentives) are treated as a reduction of revenue if linked to the same transaction or as finance cost under Ind AS 109 if separable in character. Vendor scheme income (slotting fees, listing fees received from suppliers) is classified per Ind AS 38 against COGS or operating income depending on the underlying right transferred to the supplier.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is e-commerce revenue audited differently from offline retail?</h3>
                        <div class="faq-expanded__a"><p>Yes. E-commerce revenue is split into two streams - sales through the entity's own website (principal under Ind AS 115, recognised gross) and sales through third-party marketplaces (principal or agent depending on inventory control test under paragraph B34 to B38). Marketplace sales also attract Section 194O 1 percent TCS deducted by the operator and GST Section 52 1 percent TCS, both of which require sidecar reconciliation against Form 26AS and Form GSTR-8 respectively. Offline POS sales follow the simpler GSTR-1 to GL trail per GSTIN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Section 194O TCS on e-commerce sales?</h3>
                        <div class="faq-expanded__a"><p>Section 194O of the Income Tax Act, 1961, effective 1 October 2020, requires every e-commerce operator to deduct 1 percent TCS on the gross amount of sale of goods or services facilitated through its digital platform. The TCS appears in the merchant's Form 26AS quarterly. For omnichannel retailers, the statutory auditor reconciles (a) marketplace payout statements, (b) Section 194O TCS in Form 26AS, and (c) the entity's own revenue ledger for marketplace channel. Mismatches between marketplace payouts and bank credits frequently surface here.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is multi-state GST reconciled in a retail audit?</h3>
                        <div class="faq-expanded__a"><p>Under Section 25 of the CGST Act, a retailer operating in multiple states must obtain a separate GSTIN for each state. The statutory auditor reconciles GSTR-1, GSTR-3B, GSTR-9 (annual return) and GSTR-9C (reconciliation statement) per GSTIN per state. Inter-state stock transfers between branches are deemed supplies under Schedule I of the CGST Act and attract IGST at the time of transfer. Common audit findings include IGST charged at wrong rate on inter-branch transfers, ITC mismatch where the receiving branch did not claim correctly, and unexplained differences in GSTR-9C.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is POS reconciliation in retail audit?</h3>
                        <div class="faq-expanded__a"><p>POS reconciliation is the daily reconciliation of cashier and POS-system totals against the GL revenue posting, store-day-wise. The auditor samples representative store-days, matches POS Z-report totals (gross sales, discounts, returns, taxes) against the GL journal entry, reviews cashier over / short reports, reconciles EDC and UPI settlement to bank credits, and tests cut-off around 31 March. Variances must be investigated, explained and provided for where unrecovered. Material unexplained variances are flagged in CARO clause 3(ii) and the management letter.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Retail chain ka audit kaise hota hai?</strong> Companies Act Section 143 ke under practicing CA dwara annual examination - multi-store SA 501 inventory, POS reconciliation, loyalty Ind AS 115, multi-state GSTR-9C.</p>
                <p><strong>Loyalty points ka accounting kya hai?</strong> Ind AS 115 ke under separate performance obligation. SSP basis pe transaction price split karte hain, redemption ya expiry par revenue recognise hota hai.</p>
                <p><strong>Shrinkage rate India mein kitna hota hai?</strong> 1.5 to 3 percent of net sales for organised retail. Rs 100 cr chain par Rs 1.5 to 3 cr annual loss.</p>
                <p><strong>Trade discount aur cash discount mein farq?</strong> Trade discount - revenue se net off at sale. Cash discount - early payment ke liye, finance cost ya revenue reduction (character ke basis pe).</p>
                <p><strong>Section 194O TCS kya hai?</strong> 1 percent TCS by e-com operator on gross sales facilitated. Form 26AS mein credit milta hai, marketplace sidecar se reconcile karna padta hai.</p>
                <p><strong>Multi-state GST audit kaise hota hai?</strong> Har state ka separate GSTIN, separate GSTR-9C reconciliation. Inter-state stock transfer Schedule I ke under deemed supply.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Critical Deadlines and Penalty Exposure</h2>
            <div class="content-text">
                <p>AOC-4 with the audit report must be filed within 30 days of the AGM and MGT-7 within 60 days. Tax audit (Form 3CD) closes by 30 September for Section 44AB applicable retailers. State-wise GSTR-9 and GSTR-9C close by 31 December. E-invoicing IRN compliance for turnover above Rs 5 crore (effective 1 August 2023) is mandatory - non-compliance for any individual invoice creates an immediate ITC denial risk for the buyer.</p>
                <p>Delay in MCA filings attracts Rs 100 per day in additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000 on the company, plus state-wise late-filing fees under GST. The auditor faces equivalent penalty under Section 147 (Rs 25,000 to Rs 5,00,000; Rs 1 lakh to Rs 25 lakh in fraudulent cases). Officer in default exposure: Rs 10,000 to Rs 1,00,000.</p>
                <p><strong>Don't wait for the AGM week panic.</strong> Patron starts retail audit fieldwork at least 6 weeks before AGM to capture Q4 substantive testing, loyalty liability walkthrough, and the 31 March simultaneous SA 501 count without weekend overtime. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20retail%20chain." target="_blank">WhatsApp us</a> for a store-count tiered quote.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for Your Retail Statutory Audit</h2>
            <div class="content-text" style="text-align:left;">
                <p style="color:#FFFFFF !important;">Statutory audit for retail companies sits at the intersection of Section 143 of the Companies Act, Ind AS 115 revenue recognition (loyalty programs, trade discounts, principal-vs-agent on marketplaces), multi-store SA 501 inventory with documented shrinkage analysis, Section 194O e-commerce TCS, GST Section 52 marketplace TCS, and multi-state GSTR-9C reconciliation across separate GSTINs.</p>
                <p style="color:#FFFFFF !important;">A retail audit that misses any one of these typically surfaces in lender stock-audit qualifications, GST notice queries, or investor diligence at Series B / C and IPO stages. Patron Accounting handles the full scope under a single CA partner with retail-aware risk assessment, multi-store partner-led SA 501 attendance, store-day POS reconciliation, loyalty Ind AS 115 liability quantification, omnichannel principal-vs-agent split, and state-wise GSTR-9C reconciliation.</p>
                <p style="color:#FFFFFF !important;">Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring depth from single-store boutiques to 500-store omnichannel chains. Whether you operate an apparel chain, an FMCG hypermarket network, an omnichannel D2C brand across Amazon and Flipkart, a franchise QSR, or a jewellery retail group - Patron's six-risk-area framework is your one engagement letter for the year.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20please%20share%20a%20quote%20for%20statutory%20audit%20for%20my%20retail%20chain." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Statutory%20Audit%20for%20Retail%20Companies&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Statutory%20Audit%20for%20Retail%20Companies%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Other Services for Retail and E-Commerce Companies</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end audit, tax, accounting and compliance support for retail chains, omnichannel D2C brands and franchise networks under one roof.</p>
          
            <div class="pa-city-block">
                <div class="pa-block-title">Related Audit and Retail Services</div>
                <div class="pa-block-sub">End-to-end support for retail chains, omnichannel D2C brands, supermarkets and franchise networks</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (India)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Section 44AB)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/stock-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Stock Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services-for-trading-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trading Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services-for-e-commerce-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-Commerce Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is on a Tier 1 quarterly review cycle - we re-check it every quarter against the latest CBDT / CBIC / MCA notifications, GST Council recommendations on e-invoicing thresholds and TCS rates, and ICAI standards-on-auditing revisions. Material updates trigger an immediate refresh; routine sweeps consolidate at the quarter-end.</p>
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