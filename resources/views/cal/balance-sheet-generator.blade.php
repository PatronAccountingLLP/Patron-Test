@extends('layouts.app')
@section('meta')
    <title>Balance Sheet Generator India | Schedule III Format Online</title>
    <meta name="description" content="Free balance sheet generator: create formatted balance sheets as per Schedule III of the Companies Act, 2013 for Indian businesses. Generate instantly online!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/balance-sheet-generator">
    <meta property="og:title" content="Balance Sheet Generator India — Free Tool 2026">
    <meta property="og:description" content="Balance Sheet Generator creates formatted balance sheets as per Schedule III of Companies Act, 2013 for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/balance-sheet-generator">
    <meta property="og:image" content="/tools/balance-sheet-generator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Balance Sheet Generator India — Free Tool 2026">
    <meta name="twitter:description" content="Generate balance sheets per Schedule III of Companies Act for Indian businesses. Free!">
    <meta name="twitter:image" content="/tools/balance-sheet-generator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Balance Sheet Generator India",
      "description": "Balance Sheet Generator creates formatted balance sheets as per Schedule III of the Companies Act, 2013. Supports non-current assets, current assets, equity, non-current liabilities, and current liabilities with automatic totals and balance verification for Indian companies including Private Limited, LLP, and OPC entities.",
      "url": "/tools/balance-sheet-generator",
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
        {"@type": "ListItem", "position": 3, "name": "Balance Sheet Generator", "item": "/tools/balance-sheet-generator"}
      ]
    }
    </script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        { "@type": "Question", "name": "What is a Balance Sheet?", "acceptedAnswer": { "@type": "Answer", "text": "A Balance Sheet is a financial statement showing a company's assets, liabilities, and shareholders equity at a specific date. Under the Companies Act, 2013, every Indian company must prepare a Balance Sheet as per Schedule III. The fundamental equation is Assets equals Liabilities plus Equity. It provides a snapshot of what the company owns and owes at the reporting date." } },
        { "@type": "Question", "name": "What is the Balance Sheet format under Schedule III?", "acceptedAnswer": { "@type": "Answer", "text": "Schedule III prescribes a vertical format with two main sections. The first section covers Equity and Liabilities, including shareholders equity, non-current liabilities, and current liabilities. The second section covers Assets, including non-current assets and current assets. Both sections must balance. Division I applies to companies following Indian AS and Division II to Ind AS companies." } },
        { "@type": "Question", "name": "What is the difference between current and non-current assets?", "acceptedAnswer": { "@type": "Answer", "text": "Current assets are expected to be realised or consumed within the operating cycle or 12 months, whichever is longer. Examples include cash, trade receivables, inventory, and short-term investments. Non-current assets are held for longer periods and include property plant and equipment, intangible assets, long-term investments, and deferred tax assets. Schedule III requires separate classification." } },
        { "@type": "Question", "name": "What is the difference between current and non-current liabilities?", "acceptedAnswer": { "@type": "Answer", "text": "Current liabilities are due within the operating cycle or 12 months, including trade payables, short-term borrowings, current tax liabilities, and provisions. Non-current liabilities are due beyond 12 months, including long-term borrowings, deferred tax liabilities, and long-term provisions. Proper classification is critical for assessing liquidity ratios and compliance with Schedule III." } },
        { "@type": "Question", "name": "What does shareholders equity include?", "acceptedAnswer": { "@type": "Answer", "text": "Shareholders equity includes share capital being the face value of issued shares both equity and preference, and reserves and surplus comprising securities premium, general reserve, retained earnings and profit and loss balance. Under Ind AS, it also includes other comprehensive income items. The Statement of Changes in Equity is mandatory under Division II of Schedule III." } },
        { "@type": "Question", "name": "Why must a Balance Sheet always balance?", "acceptedAnswer": { "@type": "Answer", "text": "The Balance Sheet must balance because of the double-entry accounting system. Every transaction affects at least two accounts ensuring that Total Assets always equals Total Liabilities plus Total Equity. If it does not balance, there is an error in recording transactions, incorrect classification, or missing entries that must be identified and corrected before finalising financial statements." } },
        { "@type": "Question", "name": "When must companies file the Balance Sheet with MCA?", "acceptedAnswer": { "@type": "Answer", "text": "Companies must file the Balance Sheet as part of financial statements in e-Form AOC-4 with the Registrar of Companies within 30 days of the Annual General Meeting. The AGM must be held within 6 months from the financial year end, typically by 30th September each year. Late filing attracts additional fees of Rs 100 per day under Section 403 of the Companies Act, 2013." } },
        { "@type": "Question", "name": "What is the difference between a Balance Sheet and Profit and Loss Statement?", "acceptedAnswer": { "@type": "Answer", "text": "A Balance Sheet shows financial position at a specific date, listing assets, liabilities, and equity as a snapshot. A Profit and Loss Statement shows financial performance over a period, listing revenues and expenses. The net profit from the P and L Statement flows into the Balance Sheet as retained earnings under reserves and surplus, connecting the two statements." } },
        { "@type": "Question", "name": "What are the key ratios derived from a Balance Sheet?", "acceptedAnswer": { "@type": "Answer", "text": "Key ratios include Current Ratio being current assets divided by current liabilities for liquidity assessment, Debt to Equity Ratio being total debt divided by shareholders equity for leverage assessment, Return on Equity being net profit divided by equity for profitability, and Net Worth being total assets minus total liabilities. Lenders use these ratios for credit assessment and loan approval." } },
        { "@type": "Question", "name": "Can I use this generator for my small business or LLP?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, the generator works for all Indian business types. Companies registered under the Companies Act should use the Schedule III format. LLPs can use the simplified format for their Statement of Accounts under the LLP Act 2008. Sole proprietors and partnerships can use it for internal tracking, bank loan applications, and Income Tax Return preparation." } },
        { "@type": "Question", "name": "What is Property Plant and Equipment on a Balance Sheet?", "acceptedAnswer": { "@type": "Answer", "text": "Property Plant and Equipment represents tangible long-term assets used in business operations. This includes land, buildings, plant and machinery, furniture and fixtures, vehicles, and office equipment. Under Schedule III, these are shown at cost less accumulated depreciation and impairment. Depreciation rates follow Schedule II of the Companies Act, 2013 for book purposes." } },
        { "@type": "Question", "name": "Can a Chartered Accountant help prepare the Balance Sheet?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a CA ensures the Balance Sheet complies with Accounting Standards and Schedule III. Under Section 143, the statutory auditor verifies accuracy and provides an audit opinion. For companies requiring audit, the Balance Sheet must be signed by the auditor. Patron Accounting prepares audit-ready financial statements for companies across India including Balance Sheet, P and L, and notes to accounts." } }
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
    

        /* ====== BALANCE SHEET SPECIFIC ====== */
        .line-items-container { margin-bottom: 16px; }
        .line-item-row { display: grid; grid-template-columns: 1fr 160px 40px; gap: 8px; align-items: end; margin-bottom: 8px; }
        @media (max-width: 500px) { .line-item-row { grid-template-columns: 1fr 120px 36px; } }
        .line-item-row .form-group { margin-bottom: 0; }
        .line-item-row .form-group input { padding: 10px 12px; font-size: 14px; }
        .line-item-row .form-group input[type="number"] { font-size: 15px; }
        .btn-remove-row { width: 36px; height: 44px; border: 1px solid var(--border); border-radius: 8px; background: var(--surface); color: var(--danger); font-size: 18px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s; flex-shrink: 0; }
        .btn-remove-row:hover { background: #FEE2E2; border-color: var(--danger); }
        .btn-add-row { display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border: 1px dashed var(--primary-light); border-radius: 8px; background: transparent; color: var(--primary-light); font-family: var(--font-body); font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 4px; }
        .btn-add-row:hover { background: rgba(27,77,62,0.05); border-color: var(--primary); color: var(--primary); }
        .section-divider { border: none; border-top: 2px dashed var(--border); margin: 24px 0; }
        .section-label { font-size: 14px; font-weight: 700; color: var(--primary-dark); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px; padding-bottom: 6px; border-bottom: 2px solid var(--primary); display: inline-block; }
        .result-table { width: 100%; border-collapse: collapse; font-size: 14px; margin-top: 16px; }
        .result-table th, .result-table td { padding: 10px 16px; text-align: left; border-bottom: 1px solid var(--border); }
        .result-table th { background: var(--primary); color: #fff; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .result-table th:first-child { border-radius: var(--radius) 0 0 0; }
        .result-table th:last-child { border-radius: 0 var(--radius) 0 0; text-align: right; }
        .result-table td:last-child { text-align: right; font-family: var(--font-mono); font-weight: 700; }
        .result-table tr.subtotal { background: var(--surface-alt); font-weight: 700; }
        .result-table tr.subtotal td { border-top: 2px solid var(--primary-light); border-bottom: 2px solid var(--primary-light); color: var(--primary-dark); }
        .result-table tr.grand-total { background: var(--primary); color: #fff; }
        .result-table tr.grand-total td { font-weight: 700; font-size: 15px; border: none; }
        .result-table tr.grand-total td:last-child { color: #fff; }
        .result-table tr.indent td:first-child { padding-left: 32px; }
        .btn-download { display: inline-flex; align-items: center; gap: 8px; margin-top: 16px; padding: 10px 20px; background: var(--primary); color: #fff; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.2s; }
        .btn-download:hover { background: var(--primary-light); }
        .company-info-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        @media (max-width: 500px) { .company-info-row { grid-template-columns: 1fr; } }
        .balance-check { padding: 12px 16px; border-radius: var(--radius); font-size: 14px; font-weight: 600; margin-top: 16px; text-align: center; }
        .balance-check.balanced { background: #D1FAE5; color: #065F46; border: 1px solid #6EE7B7; }
        .balance-check.unbalanced { background: #FEE2E2; color: #991B1B; border: 1px solid #FCA5A5; }
    
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
            <a href="#calculator">Generator</a>
            <a href="#how-to-use">How to Use</a>
            <a href="#schedule-iii">Schedule III Format</a>
            <a href="#components">Key Components</a>
            <a href="#ratios">Financial Ratios</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Balance Sheet Generator India — <span>Free Tool 2026</span></h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This Balance Sheet Generator creates formatted statements of financial position aligned with Schedule III of the Companies Act, 2013. Enter your equity, non-current liabilities, current liabilities, non-current assets, and current assets to instantly generate a professional balance sheet with automatic totals and balance verification. Built by a practising Chartered Accountant for Indian businesses — Private Limited, LLP, OPC, and sole proprietors.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== GENERATOR ====== -->
            <div class="calc-card">
                <h2>Generate Balance Sheet</h2>

                <noscript><div class="noscript-box">This Balance Sheet Generator requires JavaScript. Please enable JavaScript or use the Schedule III format guide below.</div></noscript>

                <!-- Company Info -->
                <div class="company-info-row">
                    <div class="form-group"><label for="companyName">Company / Business Name</label><input type="text" id="companyName" placeholder="e.g. ABC Private Limited" autocomplete="off"></div>
                    <div class="form-group"><label for="asAtDate">As at Date</label><input type="text" id="asAtDate" placeholder="e.g. 31st March 2026" autocomplete="off"></div>
                </div>

                <hr class="section-divider">

                <!-- ====== EQUITY & LIABILITIES SIDE ====== -->
                <div style="background:rgba(27,77,62,0.03);border-radius:var(--radius);padding:20px;margin-bottom:20px;">
                <h3 style="color:var(--primary-dark);font-size:16px;margin-bottom:16px;">EQUITY & LIABILITIES</h3>

                <!-- A. Shareholders Equity -->
                <div class="section-label">A. Shareholders' Equity</div>
                <div class="line-items-container" id="equityItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Share Capital"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Reserves & Surplus"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('equityItems')">+ Add Equity Line</button>

                <hr class="section-divider">

                <!-- B. Non-Current Liabilities -->
                <div class="section-label">B. Non-Current Liabilities</div>
                <div class="line-items-container" id="ncLiabItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Long-Term Borrowings"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Deferred Tax Liabilities (Net)"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Long-Term Provisions"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('ncLiabItems')">+ Add Non-Current Liability</button>

                <hr class="section-divider">

                <!-- C. Current Liabilities -->
                <div class="section-label">C. Current Liabilities</div>
                <div class="line-items-container" id="cLiabItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Short-Term Borrowings"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Trade Payables"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Other Current Liabilities"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Short-Term Provisions"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('cLiabItems')">+ Add Current Liability</button>
                </div>

                <hr class="section-divider">

                <!-- ====== ASSETS SIDE ====== -->
                <div style="background:rgba(245,158,11,0.03);border-radius:var(--radius);padding:20px;margin-bottom:20px;">
                <h3 style="color:var(--primary-dark);font-size:16px;margin-bottom:16px;">ASSETS</h3>

                <!-- D. Non-Current Assets -->
                <div class="section-label">D. Non-Current Assets</div>
                <div class="line-items-container" id="ncAssetItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Property, Plant & Equipment"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Intangible Assets"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Non-Current Investments"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Deferred Tax Assets (Net)"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('ncAssetItems')">+ Add Non-Current Asset</button>

                <hr class="section-divider">

                <!-- E. Current Assets -->
                <div class="section-label">E. Current Assets</div>
                <div class="line-items-container" id="cAssetItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Inventories"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Trade Receivables"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Cash & Cash Equivalents"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Short-Term Loans & Advances"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Other Current Assets"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('cAssetItems')">+ Add Current Asset</button>
                </div>

                <button class="btn-calculate" onclick="generateBS()" style="margin-top:24px;">Generate Balance Sheet</button>

                <!-- Results -->
                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="bsOutput"></div>
                    <div style="display:flex;gap:12px;flex-wrap:wrap;">
                        <button class="btn-download" onclick="downloadCSV()">&#11015; Download CSV</button>
                        <button class="btn-download" onclick="printBS()" style="background:var(--text-secondary);">&#128424; Print</button>
                        <button class="btn-reset" onclick="resetCalc()">&#8634; Reset</button>
                    </div>
                </div>
            </div>

            <!-- ====== HOW TO USE ====== -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This Balance Sheet Generator</h2>
                <p>This free tool helps Indian businesses generate professional balance sheets aligned with <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> requirements under Schedule III of the Companies Act, 2013.</p>

                <h3>Step 1: Enter Company Details</h3>
                <p>Enter your company name and the reporting date (e.g., 31st March 2026). The Balance Sheet is a point-in-time statement — it shows your financial position on that specific date.</p>

                <h3>Step 2: Fill Equity & Liabilities</h3>
                <p>Enter shareholders equity (share capital, reserves and surplus), non-current liabilities (long-term borrowings, deferred tax, provisions), and current liabilities (trade payables, short-term borrowings, other current liabilities). Use the "+ Add" buttons to include additional line items.</p>

                <h3>Step 3: Fill Assets</h3>
                <p>Enter non-current assets (property plant and equipment, intangible assets, investments, deferred tax assets) and current assets (inventories, trade receivables, cash and equivalents, loans and advances). Both sides must balance.</p>

                <h3>Step 4: Generate & Verify</h3>
                <p>Click "Generate Balance Sheet" to view the formatted statement. The tool automatically checks whether Total Equity & Liabilities equals Total Assets and flags any mismatch. Download as CSV for Excel or print directly.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Always verify your Balance Sheet figures against the trial balance before generating the final statement. The closing balances of all ledger accounts must be correctly classified as assets, liabilities, or equity. If the two sides do not balance, check for missing entries, incorrect groupings, or unreconciled bank balances. Refer to <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI guidance notes</a> on Schedule III classification for complex items.</p>
                </div>
            </section>

            <!-- ====== SCHEDULE III FORMAT ====== -->
            <section class="content-section" id="schedule-iii">
                <h2>Balance Sheet Format Under Schedule III (Companies Act, 2013)</h2>
                <p><a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Section 129</a> of the Companies Act, 2013 mandates that every company prepare its Balance Sheet in the format prescribed under Schedule III. The format follows a vertical presentation with Equity & Liabilities on one side and Assets on the other.</p>

                <table class="rate-table">
                    <thead><tr><th>Sl.</th><th>Particulars</th><th>Components</th></tr></thead>
                    <tbody>
                        <tr><td colspan="3" style="background:var(--primary);color:#fff;font-weight:700;">EQUITY & LIABILITIES</td></tr>
                        <tr><td><strong>A</strong></td><td>Shareholders' Equity</td><td>Share Capital + Reserves & Surplus</td></tr>
                        <tr><td><strong>B</strong></td><td>Non-Current Liabilities</td><td>Long-term borrowings, Deferred tax liabilities, Long-term provisions</td></tr>
                        <tr><td><strong>C</strong></td><td>Current Liabilities</td><td>Short-term borrowings, Trade payables, Other current liabilities, Short-term provisions</td></tr>
                        <tr><td></td><td><strong>Total Equity & Liabilities</strong></td><td><strong>A + B + C</strong></td></tr>
                        <tr><td colspan="3" style="background:var(--accent);color:var(--primary-dark);font-weight:700;">ASSETS</td></tr>
                        <tr><td><strong>D</strong></td><td>Non-Current Assets</td><td>Property Plant & Equipment, Intangible assets, Non-current investments, Deferred tax assets, Long-term loans</td></tr>
                        <tr><td><strong>E</strong></td><td>Current Assets</td><td>Inventories, Trade receivables, Cash & equivalents, Short-term loans, Other current assets</td></tr>
                        <tr><td></td><td><strong>Total Assets</strong></td><td><strong>D + E</strong></td></tr>
                    </tbody>
                </table>

                <div class="formula-box">
                    <span class="label">Balance Sheet Equation</span><br>
                    Total Assets = Total Equity + Total Liabilities<br><br>
                    <span class="label">Or equivalently:</span><br>
                    Shareholders' Equity = Total Assets &minus; Total Liabilities
                </div>

                <div class="callout warn">
                    <p><strong>Note:</strong> Schedule III has been amended multiple times — most recently in March 2021 introducing MSME trade payable ageing disclosures. Always verify the latest format at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">mca.gov.in</a>. Companies following Ind AS use Division II which additionally requires a Statement of Changes in Equity.</p>
                </div>
            </section>

            <!-- ====== COMPONENTS ====== -->
            <section class="content-section" id="components">
                <h2>Understanding Key Balance Sheet Components</h2>

                <h3>Property, Plant & Equipment (PPE)</h3>
                <p>PPE represents tangible long-term assets used in business operations — land, buildings, plant and machinery, furniture, vehicles, and office equipment. Under Schedule III, PPE is shown at cost less accumulated depreciation and impairment losses. Depreciation rates follow Schedule II of the Companies Act, 2013 for book purposes and the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a> for tax purposes. Capital work-in-progress (assets under construction) is shown separately.</p>

                <h3>Trade Receivables</h3>
                <p>Trade receivables are amounts due from customers for goods sold or services rendered. Schedule III requires ageing analysis of trade receivables — categorised as not due, less than 6 months, 6 months to 1 year, 1-2 years, 2-3 years, and more than 3 years. The 2021 amendment made this ageing disclosure mandatory on the face of notes to accounts. Provision for doubtful debts reduces the receivable balance shown.</p>

                <h3>Trade Payables (MSME Disclosure)</h3>
                <p>Trade payables include amounts owed to suppliers for goods and services. Since the 2021 Schedule III amendment, companies must separately disclose payables to Micro and Small Enterprises (under <a href="https://msme.gov.in/" target="_blank" rel="noopener">MSMED Act, 2006</a>) and other payables, along with ageing analysis. This is critical because delayed payments to MSMEs attract interest at three times the bank rate under Section 16 of the MSMED Act.</p>

                <h3>Share Capital</h3>
                <p>Share capital represents the face value of shares issued by the company. It must be disclosed showing authorised capital, issued capital, subscribed capital, and paid-up capital separately. For companies with both equity and preference shares, each class must be shown separately with details of rights, restrictions, and number of shares held by shareholders holding more than 5%.</p>

                <h3>Reserves & Surplus</h3>
                <p>This includes securities premium, general reserve, retained earnings (balance in P&L account), capital redemption reserve, and any other statutory reserves. The balance of the Statement of Profit and Loss (net profit or loss carried forward) directly flows into this component, connecting the P&L to the Balance Sheet.</p>

                <div class="callout">
                    <p><strong>Need Expert Financial Statement Preparation?</strong> Patron Accounting prepares audit-ready balance sheets, P&L statements, and notes to accounts for companies across India. We handle MCA filing (AOC-4), statutory audits, and ensure Schedule III compliance. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Balance%20Sheet%20Generator.%20I%20need%20help%20with%20financial%20statements.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert assistance &rarr;</a></p>
                </div>
            </section>

            <!-- ====== RATIOS ====== -->
            <section class="content-section" id="ratios">
                <h2>Key Financial Ratios from the Balance Sheet</h2>

                <h3>Current Ratio (Liquidity)</h3>
                <div class="formula-box">
                    <span class="label">Current Ratio</span> = Current Assets &divide; Current Liabilities<br><br>
                    <span class="label">Healthy range:</span> 1.5 to 2.5 for most Indian businesses<br>
                    Below 1.0 = potential liquidity crisis; Above 3.0 = underutilised assets
                </div>

                <h3>Debt-to-Equity Ratio (Leverage)</h3>
                <div class="formula-box">
                    <span class="label">Debt-to-Equity</span> = Total Borrowings &divide; Shareholders' Equity<br><br>
                    <span class="label">Healthy range:</span> 0.5 to 1.5 depending on industry<br>
                    Higher ratio = more leveraged = higher financial risk
                </div>

                <h3>Net Worth</h3>
                <div class="formula-box">
                    <span class="label">Net Worth</span> = Total Assets &minus; Total Liabilities<br>
                    <span class="label">Or:</span> Share Capital + Reserves & Surplus<br><br>
                    Net Worth certificates from CAs are required for government tenders, visa applications, and bank loan processing.
                </div>

                <p>These ratios are derived directly from the Balance Sheet and are critical for bank loan applications, credit assessments by lenders, and evaluation by potential investors. The <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> requires banks to assess these ratios when processing credit proposals under prudential lending guidelines.</p>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Balance Sheets</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is a Balance Sheet?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Balance Sheet is a financial statement showing assets, liabilities, and shareholders' equity at a specific date. Under the Companies Act, 2013, every Indian company must prepare a Balance Sheet per Schedule III. The fundamental equation is Assets = Liabilities + Equity. It provides a snapshot of what the company owns and owes at the reporting date, unlike the P&L which shows performance over a period.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the Balance Sheet format under Schedule III?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Schedule III prescribes a vertical format with two sections. The first covers Equity & Liabilities including shareholders' equity, non-current liabilities, and current liabilities. The second covers Assets including non-current assets and current assets. Both must balance. Division I applies to companies following Indian AS; Division II applies to Ind AS companies.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between current and non-current assets?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Current assets are expected to be realised or consumed within the operating cycle or 12 months — cash, trade receivables, inventory, short-term investments. Non-current assets are held longer — property plant and equipment, intangible assets, long-term investments, deferred tax assets. Schedule III requires separate classification for proper liquidity assessment by stakeholders.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between current and non-current liabilities?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Current liabilities are due within 12 months — trade payables, short-term borrowings, current tax liabilities, provisions. Non-current liabilities extend beyond 12 months — long-term borrowings, deferred tax liabilities, long-term provisions. Proper classification is critical for liquidity ratios that banks use for credit assessment and loan approvals.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What does shareholders' equity include?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Shareholders' equity includes share capital (face value of issued shares — equity and preference) and reserves & surplus (securities premium, general reserve, retained earnings, P&L balance). Under Ind AS, it also includes other comprehensive income items. The Statement of Changes in Equity is mandatory for Ind AS companies under Division II of Schedule III.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Why must a Balance Sheet always balance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Due to the double-entry accounting system, every transaction affects at least two accounts. Total Assets must always equal Total Liabilities plus Total Equity. If it doesn't balance, there's an error — incorrect classification, missing entries, or recording mistakes that must be identified and corrected before the financial statements are finalised and audited.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>When must companies file the Balance Sheet with MCA?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Companies file the Balance Sheet in e-Form AOC-4 within 30 days of the AGM. The AGM must be held by 30th September (within 6 months of FY end). Late filing attracts &#8377;100 per day penalty under Section 403. OPCs file within 180 days of FY end. XBRL filing is mandatory for listed companies and their subsidiaries under the Filing in XBRL Rules.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between a Balance Sheet and P&L Statement?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Balance Sheet shows financial position at a specific date (snapshot) — assets, liabilities, equity. A P&L Statement shows financial performance over a period — revenues, expenses, profit or loss. The net profit from P&L flows into the Balance Sheet as retained earnings under reserves & surplus, directly connecting the two core financial statements.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the key ratios from a Balance Sheet?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Key ratios include Current Ratio (current assets &divide; current liabilities) for liquidity, Debt-to-Equity Ratio (total debt &divide; equity) for leverage, Return on Equity (net profit &divide; equity) for profitability, and Net Worth (total assets minus total liabilities). Banks and lenders use these ratios for credit assessment, loan approvals, and working capital limit decisions.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I use this for my small business or LLP?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — companies use the Schedule III format for statutory compliance. LLPs prepare Statement of Accounts under the LLP Act 2008 with a similar structure. Sole proprietors and partnerships can use this for internal tracking, bank loan applications, and ITR preparation. The tool generates professional balance sheets regardless of your entity type.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is Property, Plant & Equipment on a Balance Sheet?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">PPE represents tangible long-term assets — land, buildings, plant and machinery, furniture, vehicles, office equipment. Shown at cost minus accumulated depreciation and impairment under Schedule III. Depreciation rates follow Schedule II of the Companies Act for book purposes. Capital work-in-progress (assets under construction) is disclosed separately.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help prepare the Balance Sheet?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — a CA ensures compliance with Accounting Standards and Schedule III. Under Section 143, the statutory auditor verifies accuracy and issues an audit opinion. For companies requiring audit, the Balance Sheet must be signed by the auditor. Patron Accounting prepares audit-ready financial statements including Balance Sheet, P&L, and notes to accounts for businesses across India.</div></div></div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Balance Sheet Help?</h3>
                <p>Our CAs prepare audit-ready financial statements, handle MCA filings, and ensure Schedule III compliance for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Balance%20Sheet%20Generator.%20I%20need%20help%20with%20financial%20statements.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <div class="sidebar-card">
                <h3>Related Services</h3>
                <a href="/accounting-services" class="sidebar-link">Accounting & Bookkeeping <span class="arrow">&rarr;</span></a>
                <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a>
                <a href="/tax-audit" class="sidebar-link">Tax Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Compliance <span class="arrow">&rarr;</span></a>
                <a href="/net-worth-certificate" class="sidebar-link">Net Worth Certificate <span class="arrow">&rarr;</span></a>
            </div>

            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/profit-loss-generator" class="sidebar-link">P&L Statement Generator <span class="arrow">&rarr;</span></a>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/accounting-software-comparison" class="sidebar-link">Software Comparison Tool <span class="arrow">&rarr;</span></a>
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
        function addRow(containerId) {
            const container = document.getElementById(containerId);
            const row = document.createElement('div');
            row.className = 'line-item-row';
            row.innerHTML = '<div class="form-group"><input type="text" placeholder="Description"></div><div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>';
            container.appendChild(row);
            row.querySelector('input[type="text"]').focus();
        }

        function removeRow(btn) {
            const row = btn.closest('.line-item-row');
            const container = row.parentElement;
            if (container.querySelectorAll('.line-item-row').length > 1) { row.remove(); }
            else { row.querySelectorAll('input').forEach(i => i.value = ''); }
        }

        function getLineItems(containerId) {
            const items = [];
            document.querySelectorAll('#' + containerId + ' .line-item-row').forEach(row => {
                const desc = row.querySelector('input[type="text"]').value.trim();
                const amt = parseFloat(row.querySelector('input[type="number"]').value) || 0;
                if (desc && amt !== 0) items.push({ desc, amt });
            });
            return items;
        }

        function fmt(num) {
            const sign = num < 0 ? '(' : '';
            const signEnd = num < 0 ? ')' : '';
            return sign + '\u20B9' + Math.abs(num).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + signEnd;
        }

        function generateBS() {
            const companyName = document.getElementById('companyName').value.trim() || 'Your Company Name';
            const asAtDate = document.getElementById('asAtDate').value.trim() || '31st March 2026';

            const equity = getLineItems('equityItems');
            const ncLiab = getLineItems('ncLiabItems');
            const cLiab = getLineItems('cLiabItems');
            const ncAsset = getLineItems('ncAssetItems');
            const cAsset = getLineItems('cAssetItems');

            const totalEquity = equity.reduce((s, i) => s + i.amt, 0);
            const totalNCLiab = ncLiab.reduce((s, i) => s + i.amt, 0);
            const totalCLiab = cLiab.reduce((s, i) => s + i.amt, 0);
            const totalEqLiab = totalEquity + totalNCLiab + totalCLiab;

            const totalNCAsset = ncAsset.reduce((s, i) => s + i.amt, 0);
            const totalCAsset = cAsset.reduce((s, i) => s + i.amt, 0);
            const totalAssets = totalNCAsset + totalCAsset;

            const balanced = Math.abs(totalEqLiab - totalAssets) < 0.01;

            let html = '<div style="text-align:center;margin-bottom:20px;">';
            html += '<h3 style="color:var(--primary-dark);margin-bottom:4px;">' + companyName + '</h3>';
            html += '<p style="font-size:14px;color:var(--text-secondary);margin:0;">Balance Sheet as at ' + asAtDate + '</p>';
            html += '<p style="font-size:12px;color:var(--text-muted);margin-top:4px;">(All amounts in &#8377;)</p></div>';

            html += '<table class="result-table"><thead><tr><th>Particulars</th><th style="text-align:right;">Amount (&#8377;)</th></tr></thead><tbody>';

            // Equity & Liabilities
            html += '<tr class="subtotal"><td><strong>A. Shareholders\' Equity</strong></td><td></td></tr>';
            equity.forEach(i => html += '<tr class="indent"><td>' + i.desc + '</td><td>' + fmt(i.amt) + '</td></tr>');
            html += '<tr class="subtotal"><td>Total Shareholders\' Equity</td><td>' + fmt(totalEquity) + '</td></tr>';

            html += '<tr class="subtotal"><td><strong>B. Non-Current Liabilities</strong></td><td></td></tr>';
            ncLiab.forEach(i => html += '<tr class="indent"><td>' + i.desc + '</td><td>' + fmt(i.amt) + '</td></tr>');
            html += '<tr class="subtotal"><td>Total Non-Current Liabilities</td><td>' + fmt(totalNCLiab) + '</td></tr>';

            html += '<tr class="subtotal"><td><strong>C. Current Liabilities</strong></td><td></td></tr>';
            cLiab.forEach(i => html += '<tr class="indent"><td>' + i.desc + '</td><td>' + fmt(i.amt) + '</td></tr>');
            html += '<tr class="subtotal"><td>Total Current Liabilities</td><td>' + fmt(totalCLiab) + '</td></tr>';

            html += '<tr class="grand-total"><td><strong>TOTAL EQUITY & LIABILITIES</strong></td><td>' + fmt(totalEqLiab) + '</td></tr>';

            // Assets
            html += '<tr class="subtotal"><td><strong>D. Non-Current Assets</strong></td><td></td></tr>';
            ncAsset.forEach(i => html += '<tr class="indent"><td>' + i.desc + '</td><td>' + fmt(i.amt) + '</td></tr>');
            html += '<tr class="subtotal"><td>Total Non-Current Assets</td><td>' + fmt(totalNCAsset) + '</td></tr>';

            html += '<tr class="subtotal"><td><strong>E. Current Assets</strong></td><td></td></tr>';
            cAsset.forEach(i => html += '<tr class="indent"><td>' + i.desc + '</td><td>' + fmt(i.amt) + '</td></tr>');
            html += '<tr class="subtotal"><td>Total Current Assets</td><td>' + fmt(totalCAsset) + '</td></tr>';

            html += '<tr class="grand-total"><td><strong>TOTAL ASSETS</strong></td><td>' + fmt(totalAssets) + '</td></tr>';
            html += '</tbody></table>';

            // Balance check
            if (balanced) {
                html += '<div class="balance-check balanced">&#9989; Balance Sheet is balanced — Total Equity & Liabilities (' + fmt(totalEqLiab) + ') = Total Assets (' + fmt(totalAssets) + ')</div>';
            } else {
                const diff = totalEqLiab - totalAssets;
                html += '<div class="balance-check unbalanced">&#9888; Balance Sheet does NOT balance — Difference: ' + fmt(diff) + '. Please verify your entries.</div>';
            }

            // Summary cards
            html += '<div class="result-grid" style="margin-top:20px;">';
            html += '<div class="result-card"><div class="result-label">Net Worth</div><div class="result-value">' + fmt(totalEquity) + '</div></div>';
            html += '<div class="result-card"><div class="result-label">Total Assets</div><div class="result-value">' + fmt(totalAssets) + '</div></div>';
            if (totalCLiab > 0) {
                const currentRatio = totalCAsset / totalCLiab;
                html += '<div class="result-card"><div class="result-label">Current Ratio</div><div class="result-value">' + currentRatio.toFixed(2) + '</div></div>';
            }
            if (totalEquity > 0) {
                const debtEquity = (totalNCLiab + totalCLiab) / totalEquity;
                html += '<div class="result-card"><div class="result-label">Debt-to-Equity</div><div class="result-value">' + debtEquity.toFixed(2) + '</div></div>';
            }
            html += '</div>';

            document.getElementById('bsOutput').innerHTML = html;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });

            window._bsData = { companyName, asAtDate, equity, ncLiab, cLiab, ncAsset, cAsset, totalEquity, totalNCLiab, totalCLiab, totalEqLiab, totalNCAsset, totalCAsset, totalAssets };
        }

        function downloadCSV() {
            const d = window._bsData;
            if (!d) return;
            let csv = '"' + d.companyName + '"\n"Balance Sheet as at ' + d.asAtDate + '"\n\n"Particulars","Amount (&#8377;)"\n';
            csv += '"A. SHAREHOLDERS EQUITY",""\n';
            d.equity.forEach(i => csv += '"  ' + i.desc + '","' + i.amt.toFixed(2) + '"\n');
            csv += '"Total Equity","' + d.totalEquity.toFixed(2) + '"\n';
            csv += '"B. NON-CURRENT LIABILITIES",""\n';
            d.ncLiab.forEach(i => csv += '"  ' + i.desc + '","' + i.amt.toFixed(2) + '"\n');
            csv += '"Total Non-Current Liabilities","' + d.totalNCLiab.toFixed(2) + '"\n';
            csv += '"C. CURRENT LIABILITIES",""\n';
            d.cLiab.forEach(i => csv += '"  ' + i.desc + '","' + i.amt.toFixed(2) + '"\n');
            csv += '"Total Current Liabilities","' + d.totalCLiab.toFixed(2) + '"\n';
            csv += '"TOTAL EQUITY & LIABILITIES","' + d.totalEqLiab.toFixed(2) + '"\n\n';
            csv += '"D. NON-CURRENT ASSETS",""\n';
            d.ncAsset.forEach(i => csv += '"  ' + i.desc + '","' + i.amt.toFixed(2) + '"\n');
            csv += '"Total Non-Current Assets","' + d.totalNCAsset.toFixed(2) + '"\n';
            csv += '"E. CURRENT ASSETS",""\n';
            d.cAsset.forEach(i => csv += '"  ' + i.desc + '","' + i.amt.toFixed(2) + '"\n');
            csv += '"Total Current Assets","' + d.totalCAsset.toFixed(2) + '"\n';
            csv += '"TOTAL ASSETS","' + d.totalAssets.toFixed(2) + '"\n';

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = d.companyName.replace(/[^a-zA-Z0-9]/g, '_') + '_Balance_Sheet.csv';
            a.click();
            URL.revokeObjectURL(url);
        }

        function printBS() {
            const content = document.getElementById('bsOutput').innerHTML;
            const win = window.open('', '_blank');
            win.document.write('<html><head><title>Balance Sheet</title><style>body{font-family:sans-serif;padding:20px}table{width:100%;border-collapse:collapse;font-size:13px}th{background:#1B4D3E;color:#fff;padding:8px 10px;text-align:left}th:last-child{text-align:right}td{padding:6px 10px;border-bottom:1px solid #ddd}td:last-child{text-align:right;font-weight:600}.section-head td{background:#f0f0f0;font-weight:700;text-transform:uppercase;font-size:12px}.sub-total td{font-weight:700;border-top:2px solid #ccc}.grand-total td{background:#1B4D3E;color:#fff;font-weight:700;font-size:14px}.indent td:first-child{padding-left:24px}h3{text-align:center;margin-bottom:4px}.bs-subtitle{text-align:center;color:#666;font-size:12px;margin-bottom:12px}</style></head><body>' + content + '<\/body><\/html>');
            win.document.close();
            win.print();
        }

        function resetCalc() {
            document.querySelectorAll('.line-item-row input').forEach(function(inp) { inp.value = ''; });
            var cn = document.getElementById('companyName');
            if (cn) cn.value = '';
            var ad = document.getElementById('asAtDate');
            if (ad) ad.value = '31st March 2026';
            var rs = document.getElementById('resultSection');
            if (rs) { rs.classList.remove('visible'); rs.style.display = 'none'; }
            var bsOut = document.getElementById('bsOutput');
            if (bsOut) bsOut.innerHTML = '';
        }

        /* ====== FAQ TOGGLE ====== */
        function toggleFaq(e) {
            var btn = e.closest ? e.closest('.faq-question') || e : e;
            var item = btn.closest('.faq-item');
            if (!item) return;
            var isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(function(i) { i.classList.remove('open'); });
            if (!isOpen) item.classList.add('open');
        }

        /* ====== STICKY NAV ACTIVE STATE ====== */
        var sections = document.querySelectorAll('[id]');
        var navLinks = document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll', function() {
            var current = '';
            sections.forEach(function(s) {
                var top = s.offsetTop - 80;
                if (pageYOffset >= top) current = s.getAttribute('id');
            });
            navLinks.forEach(function(link) {
                link.classList.toggle('active', link.getAttribute('href') === '#' + current);
            });
        });

        /* ====== ENTER KEY ====== */
        document.querySelectorAll('input[type="number"]').forEach(function(inp) {
            inp.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') generateBS();
            });
        });
</script>
@endsection

