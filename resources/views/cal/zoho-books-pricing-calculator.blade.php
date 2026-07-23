@extends('layouts.app')
@section('meta')
    <title>Zoho Books Pricing Calculator | India Plan Cost</title>
    <meta name="description" content="Zoho Books pricing calculator: estimate monthly and annual cost by plan, users and add-ons, and compare all 6 Zoho Books plans for India. Free. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/zoho-books-pricing-calculator">
    <meta property="og:title" content="Zoho Books Pricing Calculator &mdash; Free Cost Estimator">
    <meta property="og:description" content="Estimate your Zoho Books cost based on plan, users, and add-ons. Compare all 6 plans for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/zoho-books-pricing-calculator">
    <meta property="og:image" content="/tools/zoho-books-pricing-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zoho Books Pricing Calculator &mdash; Free Cost Estimator">
    <meta name="twitter:description" content="Estimate Zoho Books cost for your business. Compare all 6 plans with INR pricing!">
    <meta name="twitter:image" content="/tools/zoho-books-pricing-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Zoho Books Pricing Calculator",
      "description": "Zoho Books Pricing Calculator estimates the total monthly and annual cost of Zoho Books based on selected plan, number of users, billing cycle, and add-ons. Compares all six Zoho Books plans including Free, Standard, Professional, Premium, Elite, and Ultimate with INR pricing for Indian businesses.",
      "url": "/tools/zoho-books-pricing-calculator",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-03-05",
      "dateModified": "2026-03-05",
      "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR" },
      "author": {
        "@type": "Person",
        "@id": "/#team",
        "name": "CA & CS Patron Accounting Team",
        "jobTitle": "Chartered Accountants & Company Secretaries",
        "url": "/contact-page",
        "sameAs": ["https://www.linkedin.com/company/patron-accounting"],
        "hasCredential": [{
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "Professional Certification",
          "name": "Chartered Accountant (CA)",
          "recognizedBy": { "@type": "Organization", "name": "Institute of Chartered Accountants of India", "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India" }
        }]
      },
      "publisher": { "@type": "Organization", "name": "Patron Accounting LLP", "url": "/", "logo": { "@type": "ImageObject", "url": "/logo.png" } },
      "provider": { "@id": "/#organization" }
    }
    </script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "Zoho Books Pricing Calculator", "item": "/tools/zoho-books-pricing-calculator"}
      ]
    }
    </script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        { "@type": "Question", "name": "How much does Zoho Books cost in India?", "acceptedAnswer": { "@type": "Answer", "text": "Zoho Books offers a Free plan for businesses with annual revenue under Rs 25 lakhs. Paid plans start at Rs 899 per month for the Standard plan with 3 users. Professional costs Rs 1,499 per month with 5 users, Premium Rs 2,999 per month with 10 users, Elite Rs 5,999 per month with 15 users, and Ultimate Rs 9,999 per month with advanced analytics. Annual billing gives approximately 17 percent discount." } },
        { "@type": "Question", "name": "Is Zoho Books free for small businesses in India?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, Zoho Books offers a genuinely free plan for businesses with annual revenue under Rs 25 lakhs. The Free plan includes 1 user plus 1 accountant, up to 1,000 invoices per year, 1,000 bills per year, bank reconciliation via statement import, GST invoicing, and basic financial reports. It is available indefinitely as long as revenue stays below the threshold." } },
        { "@type": "Question", "name": "What is included in the Zoho Books Standard plan?", "acceptedAnswer": { "@type": "Answer", "text": "The Standard plan at Rs 899 per month includes 3 users, 5,000 invoices per year, 5,000 bills per year, 1 GSTIN, automated bank feeds, bulk updates, custom fields, email plus voice plus chat support, recurring invoices, and basic reporting. It does not include inventory management, purchase orders, or multi-currency support which require the Professional plan or higher." } },
        { "@type": "Question", "name": "Can I add extra users to my Zoho Books plan?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, each Zoho Books plan includes a base number of users. Beyond that, you can add extra users at Rs 180 per user per month on monthly billing or Rs 150 per user per month on annual billing. For example, if you have the Standard plan with 3 included users and need 2 more, your additional cost would be Rs 360 per month on monthly billing." } },
        { "@type": "Question", "name": "Which Zoho Books plan is best for a startup?", "acceptedAnswer": { "@type": "Answer", "text": "For startups with revenue under Rs 25 lakhs, the Free plan is sufficient. It covers basic invoicing, expense tracking, and GST compliance. Once revenue exceeds the threshold or you need more than 1 user, the Standard plan at Rs 899 per month is the best next step. If you need inventory management or project billing, start with the Professional plan at Rs 1,499 per month." } },
        { "@type": "Question", "name": "Does Zoho Books support GST filing and e-invoicing?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, all Zoho Books plans including the Free plan support GST-compliant invoicing. Paid plans support direct GST return filing through the platform. E-invoicing is supported through integration with GST Suvidha Providers on Professional and higher plans. E-way bill generation is also available on paid plans. Zoho Books handles GSTR-1, GSTR-3B, and GSTR-9 filing workflows." } },
        { "@type": "Question", "name": "What is the difference between monthly and annual billing?", "acceptedAnswer": { "@type": "Answer", "text": "Annual billing offers approximately 17 percent discount compared to monthly billing. For example, the Standard plan costs Rs 899 per month on monthly billing but effectively Rs 749 per month when billed annually as Rs 8,988 per year. Annual billing requires upfront payment for the full year but provides significant savings especially on higher-tier plans like Premium and Elite." } },
        { "@type": "Question", "name": "How does Zoho Books compare to TallyPrime on pricing?", "acceptedAnswer": { "@type": "Answer", "text": "Zoho Books Standard at Rs 899 per month is comparable to TallyPrime Silver at Rs 600 per month. However, TallyPrime offers a one-time licence option at Rs 18,000 which has no recurring cost. For multi-user access, TallyPrime Gold costs Rs 1,800 per month versus Zoho Books Professional at Rs 1,499 per month. Zoho Books wins on cloud access and automation while TallyPrime wins on offline reliability and inventory depth." } },
        { "@type": "Question", "name": "Can I migrate from Tally to Zoho Books?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, Zoho Books supports data migration from Tally. You can import Charts of Accounts, items, opening balances, and customer or vendor master data. Transaction history requires manual mapping. Patron Accounting offers professional Tally-to-Zoho migration services ensuring data integrity, GST compliance continuity, and team training on the new platform." } },
        { "@type": "Question", "name": "What are the invoice and bill limits for each plan?", "acceptedAnswer": { "@type": "Answer", "text": "Invoice limits per year: Free plan allows 1,000, Standard allows 5,000, Professional allows 10,000, Premium allows 25,000, and Elite and Ultimate allow 100,000 each. Bill and expense limits follow the same pattern. If your business exceeds these limits, you need to upgrade to the next plan. Contact Zoho sales for custom limits beyond 100,000." } },
        { "@type": "Question", "name": "Does Zoho Books have a free trial?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, Zoho Books offers a 14-day free trial of any paid plan. During the trial, you get full access to all features of the selected plan including Premium by default. No credit card is required to start the trial. After the trial ends, you can subscribe to a paid plan or switch to the Free plan with limited features." } },
        { "@type": "Question", "name": "Is Zoho Books suitable for businesses with multiple GSTINs?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, but it depends on the plan. The Standard plan supports 1 GSTIN, Professional supports 2 GSTINs, and Premium, Elite, and Ultimate support 3 GSTINs each. If your business operates across multiple states with separate GSTINs, you need at least the Professional plan. Each additional GSTIN beyond the plan limit may require a separate organization or add-on." } },
        { "@type": "Question", "name": "Can a CA help me choose and set up Zoho Books?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a Chartered Accountant can evaluate your business needs, recommend the right Zoho Books plan, handle data migration from Tally or other software, configure GST settings and chart of accounts, set up automated workflows, and train your team. Patron Accounting provides end-to-end Zoho Books setup and ongoing bookkeeping support for Indian businesses." } }
      ]
    }
    </script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

        :root {
            --primary: #1B4D3E;
            --primary-light: #2A7A5F;
            --primary-dark: #0F2E25;
            --accent: #F59E0B;
            --accent-light: #FCD34D;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #1A1A1A;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif;
            --font-mono: 'Space Mono', monospace;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        /* ====== STICKY TOC NAV ====== */
        .toc-nav {
            background: var(--primary-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 0;
        }
        .toc-nav a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active {
            color: #fff;
            border-bottom-color: var(--accent);
        }

        /* ====== BREADCRUMB ====== */
        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a {
            color: var(--primary-light);
            text-decoration: none;
        }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        /* ====== HERO ====== */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 24px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .badge-updated {
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .author-byline {
            font-size: 13px;
            color: var(--text-secondary);
        }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span {
            color: var(--accent);
            display: inline;
        }

        /* ====== TL;DR SUMMARY ====== */
        .tldr {
            background: var(--card);
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px;
            margin: 0 auto 32px;
            max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .tldr p {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ====== LAYOUT ====== */
        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }

        @media(min-width:900px) {
            .main-layout {
                grid-template-columns: 1fr 320px;
                gap: 40px;
            }
        }

        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        /* ====== CALCULATOR CARD ====== */
        .calc-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 24px;
        }

        .calc-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
            outline: none;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary);
        }
        .form-group input[type="number"] {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 700;
        }

        /* Toggle switch for inclusive/exclusive */
        .toggle-group {
            display: flex;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
            gap: 4px;
        }
        .toggle-btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            -webkit-tap-highlight-color: transparent;
        }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        /* Transaction type toggle */
        .txn-toggle {
            display: flex;
            gap: 4px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
        }
        .txn-btn {
            flex: 1;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }
        .txn-btn * { pointer-events: none; }
        .txn-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .btn-calculate {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }

        /* Results */
        .result-section {
            margin-top: 28px;
            display: none;
        }
        .result-section.visible { display: block; }

        .result-divider {
            height: 1px;
            background: var(--border);
            margin-bottom: 24px;
        }

        .result-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }
        @media (min-width: 500px) {
            .result-grid { grid-template-columns: 1fr 1fr; }
        }

        .result-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 16px 20px;
            border: 1px solid var(--border);
        }
        .result-card.highlight {
            background: var(--primary);
            border-color: var(--primary);
        }
        .result-card.highlight .result-label,
        .result-card.highlight .result-value { color: #fff; }

        .result-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .result-value {
            font-family: var(--font-mono);
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .result-breakdown {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 14px;
        }
        .breakdown-row:not(:last-child) {
            border-bottom: 1px dashed var(--border);
        }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--text);
        }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 16px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--card);
            color: var(--text-muted);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        /* ====== CONTENT SECTIONS ====== */
        .content-section {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 14px;
            line-height: 1.75;
        }
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        /* GST Rate Table */
        .rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        .rate-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 20px;
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 13px;
        }
        .rate-badge.r5 { background: #DBEAFE; color: #1D4ED8; }
        .rate-badge.r12 { background: #D1FAE5; color: #059669; }
        .rate-badge.r18 { background: #FEF3C7; color: #B45309; }
        .rate-badge.r28 { background: #FEE2E2; color: #DC2626; }
        .rate-badge.r0 { background: #F3F4F6; color: #6B7280; }
        .rate-badge.r3 { background: #EDE9FE; color: #7C3AED; }

        /* Formula Box */
        .formula-box {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 20px 24px;
            margin: 16px 0;
            font-family: var(--font-mono);
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }
        .formula-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

        /* Info callout */
        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }

        .callout.warn {
            background: #FFFBEB;
            border-left-color: var(--accent);
        }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        /* ====== FAQ ACCORDION ====== */
        .faq-item {
            background: var(--surface);
            border-radius: var(--radius);
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            line-height: 1.4;
            gap: 12px;
            -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.35s ease;
        }
        .faq-item.open .faq-answer {
            max-height: 500px;
        }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        /* ====== SIDEBAR ====== */
        .sidebar-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 14px;
        }
        .sidebar-link {
            display: block;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05);
            touch-action: manipulation;
        }
        .sidebar-link:hover {
            background: var(--surface-alt);
            color: var(--primary);
        }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta-card p {
            font-size: 14px;
            color: rgba(255,255,255,0.85);
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--accent);
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        /* ====== FOOTER ====== */
        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices {
            font-weight: 600;
            color: #fff;
            margin-bottom: 4px;
        }
        .office-strip .trust {
            color: var(--accent);
            font-weight: 600;
        }

        .footer {
            background: var(--primary-dark);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 16px 20px;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        /* ====== NOSCRIPT ====== */
        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 899px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }
    

        /* ====== ZOHO PRICING SPECIFIC ====== */
        .plan-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 12px; margin-bottom: 20px; }
        .plan-card {
            background: var(--card);
            border: 2px solid var(--border);
            border-radius: var(--radius);
            padding: 16px;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s;
        }
        .plan-card:hover { border-color: var(--primary-light); }
        .plan-card.selected { border-color: var(--primary); background: rgba(27,77,62,0.04); box-shadow: 0 0 0 1px var(--primary); }
        .plan-card .plan-name { font-size: 15px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; }
        .plan-card .plan-price { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary); }
        .plan-card .plan-price small { font-size: 12px; font-weight: 400; color: var(--text-muted); }
        .plan-card .plan-detail { font-size: 11px; color: var(--text-muted); margin-top: 4px; }
        .plan-card.free-plan { border-color: var(--success); }
        .plan-card.free-plan .plan-price { color: var(--success); }
        .cost-summary {
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 20px;
            margin-top: 16px;
        }
        .cost-row { display: flex; justify-content: space-between; padding: 8px 0; font-size: 14px; border-bottom: 1px dashed var(--border); }
        .cost-row:last-child { border-bottom: none; }
        .cost-row.total { font-weight: 700; font-size: 16px; color: var(--primary-dark); border-top: 2px solid var(--primary); border-bottom: none; padding-top: 12px; margin-top: 4px; }
        .cost-row .cost-label { color: var(--text-secondary); }
        .cost-row .cost-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); }
        .cost-row.total .cost-value { color: var(--primary); font-size: 18px; }
        .savings-badge { display: inline-block; background: #D1FAE5; color: #059669; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 20px; margin-left: 8px; }
    
/* ====== RESPONSIVE - SIDEBAR STACK (max 899px) ====== */
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* ====== RESPONSIVE - TABLET (max 1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE - SMALL TABLET (max 899px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
}

/* ====== RESPONSIVE - MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
.result-value{font-size:18px}
}

/* ====== RESPONSIVE - VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.toggle-btn{font-size:13px;padding:10px 12px}
}
</style>
@section('content')
<!-- Sticky TOC Nav -->
    <nav class="toc-nav" aria-label="Page Navigation">
        <div class="toc-nav-inner">
            <a href="#calculator">Calculator</a>
            <a href="#how-to-use">How to Use</a>
            <a href="#plans">Plan Details</a>
            <a href="#comparison">Plan Comparison</a>
            <a href="#tips">Choosing Tips</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a>
        <span>&rsaquo;</span>
        Zoho Books Pricing Calculator
    </nav> --}}

    <!-- Hero -->
    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Zoho Books Pricing Calculator &mdash; <span>Free Cost Estimator</span></h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This Zoho Books Pricing Calculator estimates your total monthly and annual cost based on your selected plan, number of users, billing cycle, and add-ons. Zoho Books offers 6 plans in India &mdash; Free (revenue under &#8377;25L), Standard (&#8377;899/mo), Professional (&#8377;1,499/mo), Premium (&#8377;2,999/mo), Elite (&#8377;5,999/mo), and Ultimate (&#8377;9,999/mo). Annual billing saves approximately 17%. Built by a CA who implements Zoho Books for clients daily.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== CALCULATOR ====== -->
            <div class="calc-card">
                <h2>Estimate Your Zoho Books Cost</h2>

                <noscript>
                    <div class="noscript-box">This calculator requires JavaScript. Refer to the plan comparison table below for pricing details.</div>
                </noscript>

                <div class="section-label" style="display:inline-block;font-size:14px;font-weight:700;color:var(--primary-dark);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:12px;padding-bottom:6px;border-bottom:2px solid var(--primary);">1. Select Plan</div>
                <div class="plan-cards" id="planCards">
                    <div class="plan-card free-plan selected" onclick="selectPlan(this, 'free')" data-plan="free">
                        <div class="plan-name">Free</div>
                        <div class="plan-price">&#8377;0<small>/mo</small></div>
                        <div class="plan-detail">1 user &middot; Revenue &lt; &#8377;25L</div>
                    </div>
                    <div class="plan-card" onclick="selectPlan(this, 'standard')" data-plan="standard">
                        <div class="plan-name">Standard</div>
                        <div class="plan-price">&#8377;899<small>/mo</small></div>
                        <div class="plan-detail">3 users &middot; 1 GSTIN</div>
                    </div>
                    <div class="plan-card" onclick="selectPlan(this, 'professional')" data-plan="professional">
                        <div class="plan-name">Professional</div>
                        <div class="plan-price">&#8377;1,499<small>/mo</small></div>
                        <div class="plan-detail">5 users &middot; 2 GSTINs</div>
                    </div>
                    <div class="plan-card" onclick="selectPlan(this, 'premium')" data-plan="premium">
                        <div class="plan-name">Premium</div>
                        <div class="plan-price">&#8377;2,999<small>/mo</small></div>
                        <div class="plan-detail">10 users &middot; 3 GSTINs</div>
                    </div>
                    <div class="plan-card" onclick="selectPlan(this, 'elite')" data-plan="elite">
                        <div class="plan-name">Elite</div>
                        <div class="plan-price">&#8377;5,999<small>/mo</small></div>
                        <div class="plan-detail">15 users &middot; 3 GSTINs</div>
                    </div>
                    <div class="plan-card" onclick="selectPlan(this, 'ultimate')" data-plan="ultimate">
                        <div class="plan-name">Ultimate</div>
                        <div class="plan-price">&#8377;9,999<small>/mo</small></div>
                        <div class="plan-detail">15 users &middot; Analytics</div>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="extraUsers">Extra Users (beyond plan limit)</label>
                        <input type="number" id="extraUsers" placeholder="0" min="0" max="100" step="1" value="0" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Billing Cycle</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="monthly" onclick="setBilling(this)">Monthly<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Pay as you go</small></button>
                            <button type="button" class="toggle-btn" data-value="annual" onclick="setBilling(this)">Annual<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Save ~17%</small></button>
                        </div>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calculateCost()">Calculate Total Cost</button>

                <!-- Results -->
                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="costOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <!-- ====== HOW TO USE ====== -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This Zoho Books Pricing Calculator</h2>
                <p>This tool helps you estimate the total cost of <a href="https://www.zoho.com/in/books/pricing/" target="_blank" rel="noopener">Zoho Books</a> based on your specific requirements. Follow these steps:</p>

                <h3>Step 1: Select Your Plan</h3>
                <p>Click on the plan that best fits your business needs. The Free plan works for businesses with annual revenue under &#8377;25 lakhs. As your business grows, you can estimate costs for Standard through Ultimate plans.</p>

                <h3>Step 2: Add Extra Users</h3>
                <p>Each plan includes a base number of users (1 for Free, 3 for Standard, 5 for Professional, 10 for Premium, 15 for Elite and Ultimate). If you need more users, enter the additional count. Extra users cost &#8377;180/month (monthly billing) or &#8377;150/month (annual billing).</p>

                <h3>Step 3: Choose Billing Cycle</h3>
                <p>Annual billing offers approximately 17% savings over monthly billing. The calculator shows both the monthly effective cost and total annual cost, plus the savings amount when you choose annual billing.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Before committing to a plan, use the 14-day free trial to test with your actual business data. Most Indian SMEs find the Professional plan (&#8377;1,499/mo) to be the sweet spot &mdash; it includes inventory management, purchase orders, multi-currency, and 2 GSTINs. The Standard plan lacks these features which are critical for trading and manufacturing businesses.</p>
                </div>
            </section>

            <!-- ====== PLAN DETAILS ====== -->
            <section class="content-section" id="plans">
                <h2>Zoho Books Plan Details (India Pricing 2026)</h2>
                <p>Zoho Books offers six plans designed for Indian businesses of different sizes. All plans include GST-compliant invoicing, bank reconciliation, and financial reports. Pricing is in INR and excludes GST. Data sourced from the <a href="https://www.zoho.com/in/books/pricing/" target="_blank" rel="noopener">official Zoho Books India pricing page</a>.</p>

                <h3>Free Plan &mdash; &#8377;0/month</h3>
                <p>Available for businesses with annual revenue under &#8377;25 lakhs. Includes 1 user + 1 accountant, up to 1,000 invoices/year, 1,000 bills/year, bank reconciliation via statement import (no auto-feeds), GST invoicing, basic reports, and email support. Ideal for freelancers, sole proprietors, and very early-stage startups. This plan is genuinely free with no time limit.</p>

                <h3>Standard Plan &mdash; &#8377;899/month</h3>
                <p>Includes 3 users, 5,000 invoices/year, 1 GSTIN, automated bank feeds, bulk updates, custom fields and views, recurring invoices, and email + voice + chat support. Suitable for small businesses that need auto bank reconciliation and more than 1 user. Does not include inventory, purchase orders, or multi-currency.</p>

                <h3>Professional Plan &mdash; &#8377;1,499/month</h3>
                <p>Includes 5 users, 10,000 invoices/year, 2 GSTINs, everything in Standard plus inventory management, purchase orders, sales orders, multi-currency transactions, vendor portal, project tracking, and timesheet billing. The most popular plan for growing Indian SMEs, especially those in trading and services.</p>

                <h3>Premium Plan &mdash; &#8377;2,999/month</h3>
                <p>Includes 10 users, 25,000 invoices/year, 3 GSTINs, everything in Professional plus budgeting, cash flow forecasting, custom roles, workflow automation, validation rules, and vendor portal. Designed for mid-size businesses with multiple departments and complex approval workflows.</p>

                <h3>Elite Plan &mdash; &#8377;5,999/month</h3>
                <p>Includes 15 users, 100,000 invoices/year, 3 GSTINs, everything in Premium plus warehouse management, batch tracking, shipment tracking, Shopify integration, and advanced inventory controls. Best for businesses managing inventory across multiple warehouses or selling on e-commerce platforms.</p>

                <h3>Ultimate Plan &mdash; &#8377;9,999/month</h3>
                <p>Includes 15 users, 100,000 invoices/year, 3 GSTINs, everything in Elite plus advanced analytics with Zoho Analytics integration, custom KPI dashboards, data visualization, and a dedicated account manager. Designed for larger enterprises needing deep business intelligence from their accounting data.</p>

                <div class="callout warn">
                    <p><strong>Note:</strong> Prices shown are indicative and may have been updated since this page was last reviewed. GST at 18% applies on all paid plans. Always verify current pricing at <a href="https://www.zoho.com/in/books/pricing/" target="_blank" rel="noopener">zoho.com/in/books/pricing</a> before purchasing. Patron Accounting is a Zoho Books implementation partner and can assist with plan selection and setup.</p>
                </div>
            </section>

            <!-- ====== COMPARISON TABLE ====== -->
            <section class="content-section" id="comparison">
                <h2>Zoho Books Plan Comparison Table</h2>
                <p>A side-by-side comparison of all six Zoho Books plans to help you identify the right fit for your business:</p>

                <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
                <table class="rate-table" style="min-width:700px;">
                    <thead>
                        <tr><th>Feature</th><th>Free</th><th>Standard</th><th>Professional</th><th>Premium</th><th>Elite</th><th>Ultimate</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>Monthly Price</strong></td><td>&#8377;0</td><td>&#8377;899</td><td>&#8377;1,499</td><td>&#8377;2,999</td><td>&#8377;5,999</td><td>&#8377;9,999</td></tr>
                        <tr><td><strong>Included Users</strong></td><td>1+1 CA</td><td>3</td><td>5</td><td>10</td><td>15</td><td>15</td></tr>
                        <tr><td><strong>Invoices/Year</strong></td><td>1,000</td><td>5,000</td><td>10,000</td><td>25,000</td><td>100,000</td><td>100,000</td></tr>
                        <tr><td><strong>GSTINs</strong></td><td>1</td><td>1</td><td>2</td><td>3</td><td>3</td><td>3</td></tr>
                        <tr><td>Auto Bank Feeds</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Inventory</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Purchase Orders</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Multi-Currency</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Project Tracking</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Budgeting</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Workflow Automation</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Warehouse Mgmt</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td><td>&#10003;</td></tr>
                        <tr><td>Advanced Analytics</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&mdash;</td><td>&#10003;</td></tr>
                    </tbody>
                </table>
                </div>
            </section>

            <!-- ====== CHOOSING TIPS ====== -->
            <section class="content-section" id="tips">
                <h2>How to Choose the Right Zoho Books Plan</h2>

                <h3>Freelancers and Sole Proprietors</h3>
                <p>Start with the Free plan. It covers GST invoicing, expense tracking, and basic reports &mdash; everything a freelancer needs. Upgrade to Standard only when your revenue crosses &#8377;25 lakhs or you need automated bank feeds. Many freelancers stay on the Free plan for years and it works perfectly for ITR filing preparation.</p>

                <h3>Small Trading or Service Businesses</h3>
                <p>The Professional plan (&#8377;1,499/mo) is the sweet spot. It adds inventory management, purchase orders, and vendor portal &mdash; features essential for trading businesses. Service businesses benefit from project tracking and timesheet billing. If you operate in 2 states, the 2-GSTIN support is critical.</p>

                <h3>Growing Mid-Size Companies</h3>
                <p>Premium (&#8377;2,999/mo) or Elite (&#8377;5,999/mo) depending on inventory complexity. Premium adds budgeting, cash flow forecasting, and workflow automation. Elite adds warehouse management and batch tracking &mdash; essential for businesses with multiple godowns or e-commerce operations on Shopify.</p>

                <h3>Cost Comparison with TallyPrime</h3>
                <p>TallyPrime Silver (single user) costs &#8377;600/month or &#8377;18,000 one-time. TallyPrime Gold (multi-user) is &#8377;1,800/month or &#8377;54,000 one-time. For businesses preferring cloud access, Zoho Books Professional at &#8377;1,499/month is cheaper than TallyPrime Gold and includes features like automated bank reconciliation that TallyPrime lacks. For offline-heavy businesses, TallyPrime remains more cost-effective long-term via the one-time licence. <a href="/migration-from-tally-to-zoho" target="_blank" rel="noopener">Learn about Tally to Zoho migration &rarr;</a></p>

                <div class="callout">
                    <p><strong>Need Help Choosing?</strong> Patron Accounting implements Zoho Books for businesses across India. We handle plan selection, data migration from Tally or other software, GST configuration, and team training. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20choosing%20a%20Zoho%20Books%20plan%20and%20setting%20it%20up.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert Zoho Books setup &rarr;</a></p>
                </div>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Zoho Books Pricing</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How much does Zoho Books cost in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Zoho Books offers a Free plan for revenue under &#8377;25 lakhs. Paid plans: Standard &#8377;899/mo (3 users), Professional &#8377;1,499/mo (5 users), Premium &#8377;2,999/mo (10 users), Elite &#8377;5,999/mo (15 users), Ultimate &#8377;9,999/mo (15 users + analytics). Annual billing saves approximately 17%. Extra users cost &#8377;180/mo monthly or &#8377;150/mo on annual billing.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is Zoho Books free for small businesses?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, the Free plan is available indefinitely for businesses with annual revenue under &#8377;25 lakhs. It includes 1 user + 1 accountant, 1,000 invoices/year, bank reconciliation via statement import, GST invoicing, and basic reports. No credit card required and no time limit &mdash; a genuinely free plan, not just a trial.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is included in the Standard plan?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Standard (&#8377;899/mo) includes 3 users, 5,000 invoices/year, 1 GSTIN, automated bank feeds, bulk updates, custom fields, recurring invoices, and email + voice + chat support. It does not include inventory management, purchase orders, multi-currency, or project tracking &mdash; those require the Professional plan at &#8377;1,499/mo.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I add extra users to my plan?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Beyond the included users in each plan, extra users cost &#8377;180/month on monthly billing or &#8377;150/month on annual billing. For example, adding 2 extra users to Standard (which includes 3) costs &#8377;360/month additional. Our calculator above factors in extra user costs automatically.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which plan is best for a startup?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Start with Free if revenue is under &#8377;25 lakhs &mdash; it covers basic invoicing, expenses, and GST. Once you exceed the threshold or need more users, Standard (&#8377;899/mo) is the next step. If you need inventory or project billing, go directly to Professional (&#8377;1,499/mo). Most startups graduate from Free to Professional within 1-2 years.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does Zoho Books support GST and e-invoicing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; all plans including Free support GST-compliant invoicing. Paid plans support direct GSTR-1, GSTR-3B, and GSTR-9 filing. E-invoicing is available on Professional and higher plans through GST Suvidha Provider integration. E-way bill generation is also supported. Zoho Books maintains full GST compliance for Indian businesses.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Monthly vs annual billing &mdash; which is better?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Annual billing saves approximately 17% compared to monthly. For Standard, this means paying &#8377;8,988/year instead of &#8377;10,788/year &mdash; saving &#8377;1,800. The savings increase on higher plans. Annual requires upfront payment but is recommended if you plan to use Zoho Books long-term. Monthly is better for testing or short-term needs.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does Zoho Books compare to TallyPrime pricing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">TallyPrime Silver costs &#8377;600/month or &#8377;18,000 one-time (no recurring). Zoho Books Standard is &#8377;899/month. However, Zoho Books includes cloud access, automated bank feeds, and mobile app that TallyPrime lacks. For multi-user: TallyPrime Gold &#8377;1,800/month vs Zoho Professional &#8377;1,499/month. Tally wins on one-time cost; Zoho wins on cloud features.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I migrate from Tally to Zoho Books?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; Zoho Books supports importing Charts of Accounts, items, opening balances, and customer/vendor data from Tally. Transaction history needs manual mapping. Patron Accounting provides professional Tally-to-Zoho migration ensuring data integrity, GST compliance continuity, and team training on the new platform.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the invoice limits per plan?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Annual invoice limits: Free &mdash; 1,000, Standard &mdash; 5,000, Professional &mdash; 10,000, Premium &mdash; 25,000, Elite and Ultimate &mdash; 100,000 each. Bill/expense limits follow the same tiers. If you exceed the limit, you must upgrade. For businesses needing more than 100,000 invoices, contact Zoho sales for custom pricing.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does Zoho Books offer a free trial?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a 14-day free trial of any paid plan with full feature access. No credit card required. Premium plan is assigned by default during the trial. You can switch trial plans from settings. After trial, subscribe to a paid plan or switch to the Free plan with limited features. Zoho also offers product onboarding sessions during the trial period.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help me set up Zoho Books?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a Chartered Accountant evaluates your needs, recommends the right plan, migrates data from Tally or other software, configures GST settings and chart of accounts, sets up workflows, and trains your team. Patron Accounting provides end-to-end Zoho Books setup and ongoing bookkeeping support for Indian businesses across all plans.</div></div></div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Zoho Books Setup?</h3>
                <p>Our CAs handle plan selection, data migration, GST setup, and team training for Zoho Books across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20setting%20up%20Zoho%20Books.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <div class="sidebar-card">
                <h3>Accounting Services</h3>
                <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">&rarr;</span></a>
                <a href="/tally-accounting" class="sidebar-link">Tally Accounting <span class="arrow">&rarr;</span></a>
                <a href="/migration-from-tally-to-zoho" class="sidebar-link">Tally to Zoho Migration <span class="arrow">&rarr;</span></a>
                <a href="/accounting-services" class="sidebar-link">Accounting &amp; Bookkeeping <span class="arrow">&rarr;</span></a>
                <a href="/xero-accounting" class="sidebar-link">Xero Accounting <span class="arrow">&rarr;</span></a>
            </div>

            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/accounting-software-comparison" class="sidebar-link">Software Comparison Tool <span class="arrow">&rarr;</span></a>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/profit-loss-generator" class="sidebar-link">P&amp;L Statement Generator <span class="arrow">&rarr;</span></a>
            </div>

            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
                <a href="/blog/company-annual-filing-services-a-complete-guide-to-roc-filing-for-private-limited-companies-and-llps" class="sidebar-link">ROC Filing Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

    <!-- ====== JAVASCRIPT ====== -->

<script>
        let selectedPlan = 'free';
        let billingCycle = 'monthly';

        const plans = {
            free:         { name: 'Free',         monthly: 0,    annual: 0,     users: 1, invoices: 1000,   gstins: 1 },
            standard:     { name: 'Standard',     monthly: 899,  annual: 8988,  users: 3, invoices: 5000,   gstins: 1 },
            professional: { name: 'Professional', monthly: 1499, annual: 14988, users: 5, invoices: 10000,  gstins: 2 },
            premium:      { name: 'Premium',      monthly: 2999, annual: 29988, users: 10, invoices: 25000, gstins: 3 },
            elite:        { name: 'Elite',        monthly: 5999, annual: 59988, users: 15, invoices: 100000, gstins: 3 },
            ultimate:     { name: 'Ultimate',     monthly: 9999, annual: 99996, users: 15, invoices: 100000, gstins: 3 }
        };

        function selectPlan(el, plan) {
            document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
            el.classList.add('selected');
            selectedPlan = plan;
        }

        function setBilling(btn) {
            const el = btn.closest('.toggle-btn') || btn;
            billingCycle = el.dataset.value;
            el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function fmt(n) {
            return '\u20B9' + n.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        function calculateCost() {
            const plan = plans[selectedPlan];
            const extraUsers = Math.max(0, parseInt(document.getElementById('extraUsers').value) || 0);
            const isAnnual = billingCycle === 'annual';

            const extraUserRate = isAnnual ? 150 : 180;
            const extraUserCostMonthly = extraUsers * extraUserRate;

            let planMonthly, planAnnual, totalMonthly, totalAnnual;

            if (selectedPlan === 'free') {
                planMonthly = 0;
                planAnnual = 0;
                totalMonthly = extraUserCostMonthly;
                totalAnnual = extraUserCostMonthly * 12;
            } else if (isAnnual) {
                planAnnual = plan.annual;
                planMonthly = Math.round(planAnnual / 12);
                totalMonthly = planMonthly + extraUserCostMonthly;
                totalAnnual = planAnnual + (extraUserCostMonthly * 12);
            } else {
                planMonthly = plan.monthly;
                planAnnual = planMonthly * 12;
                totalMonthly = planMonthly + extraUserCostMonthly;
                totalAnnual = totalMonthly * 12;
            }

            // Calculate savings vs monthly
            const monthlyFullYear = (plan.monthly * 12) + (extraUsers * 180 * 12);
            const annualFullYear = plan.annual + (extraUsers * 150 * 12);
            const savings = monthlyFullYear - annualFullYear;

            let html = '<div class="result-grid" style="margin-bottom:16px;">';
            html += '<div class="result-card"><div class="result-label">Plan</div><div class="result-value" style="font-size:16px;">' + plan.name + '</div></div>';
            html += '<div class="result-card"><div class="result-label">Total Users</div><div class="result-value">' + (plan.users + extraUsers) + '</div></div>';
            html += '<div class="result-card"><div class="result-label">Billing</div><div class="result-value" style="font-size:16px;">' + (isAnnual ? 'Annual' : 'Monthly') + '</div></div>';
            html += '<div class="result-card highlight"><div class="result-label">Monthly Cost (Effective)</div><div class="result-value">' + fmt(totalMonthly) + '</div></div>';
            html += '</div>';

            html += '<div class="cost-summary">';
            html += '<div class="cost-row"><span class="cost-label">' + plan.name + ' Plan (' + (isAnnual ? 'annual rate' : 'monthly') + ')</span><span class="cost-value">' + fmt(planMonthly) + '/mo</span></div>';
            if (extraUsers > 0) {
                html += '<div class="cost-row"><span class="cost-label">Extra Users (' + extraUsers + ' \u00D7 ' + fmt(extraUserRate) + ')</span><span class="cost-value">' + fmt(extraUserCostMonthly) + '/mo</span></div>';
            }
            html += '<div class="cost-row total"><span class="cost-label">Total Monthly</span><span class="cost-value">' + fmt(totalMonthly) + '/mo</span></div>';
            html += '<div class="cost-row total"><span class="cost-label">Total Annual</span><span class="cost-value">' + fmt(totalAnnual) + '/yr</span></div>';

            if (!isAnnual && selectedPlan !== 'free' && savings > 0) {
                html += '<div class="cost-row"><span class="cost-label">Switch to annual billing and save</span><span class="cost-value"><span class="savings-badge">Save ' + fmt(savings) + '/yr</span></span></div>';
            }
            if (isAnnual && selectedPlan !== 'free' && savings > 0) {
                html += '<div class="cost-row"><span class="cost-label">You are saving vs monthly billing</span><span class="cost-value"><span class="savings-badge">Saving ' + fmt(savings) + '/yr</span></span></div>';
            }
            html += '</div>';

            // Plan features summary
            html += '<div class="callout" style="margin-top:16px;"><p><strong>' + plan.name + ' plan includes:</strong> ' + plan.users + ' users, ' + plan.invoices.toLocaleString('en-IN') + ' invoices/yr, ' + plan.gstins + ' GSTIN' + (plan.gstins > 1 ? 's' : '') + '. ';
            if (selectedPlan === 'free') html += 'Bank reconciliation via import, GST invoicing, basic reports.';
            else if (selectedPlan === 'standard') html += 'Auto bank feeds, bulk updates, custom fields, recurring invoices.';
            else if (selectedPlan === 'professional') html += 'Inventory, purchase orders, multi-currency, project tracking, vendor portal.';
            else if (selectedPlan === 'premium') html += 'Budgeting, cash flow forecasting, workflow automation, custom roles.';
            else if (selectedPlan === 'elite') html += 'Warehouse management, batch tracking, Shopify integration, shipment tracking.';
            else if (selectedPlan === 'ultimate') html += 'Advanced analytics, custom KPI dashboards, data visualization, dedicated account manager.';
            html += '</p></div>';

            document.getElementById('costOutput').innerHTML = html;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() {
            document.getElementById('extraUsers').value = '0';
            selectedPlan = 'free';
            billingCycle = 'monthly';
            document.querySelectorAll('.plan-card').forEach((c, i) => c.classList.toggle('selected', i === 0));
            document.querySelectorAll('.toggle-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
            document.getElementById('resultSection').classList.remove('visible');
        }

        function toggleFaq(e) {
            const btn = e.closest ? e.closest('.faq-question') || e : e;
            const item = btn.closest('.faq-item');
            if (!item) return;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        }

        document.getElementById('extraUsers').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') calculateCost();
        });

        const sections = document.querySelectorAll('[id]');
        const navLinks = document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => {
                const top = s.offsetTop - 80;
                if (pageYOffset >= top) current = s.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.toggle('active', link.getAttribute('href') === '#' + current);
            });
        });
    </script>

@endsection    
