@extends('layouts.app')

@section('meta')
    <title>Profit &amp; Loss Statement Generator | Schedule III P&amp;L</title>
    <meta name="description" content="Profit &amp; Loss Statement Generator: create a formatted P&amp;L as per Schedule III of the Companies Act, 2013 for Indian businesses. Generate online free now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/profit-loss-generator">
    <meta property="og:title" content="Profit & Loss Statement Generator &mdash; Free P&L India">
    <meta property="og:description" content="Profit and Loss Statement Generator creates P&L statements as per Schedule III of Companies Act, 2013 for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/profit-loss-generator">
    <meta property="og:image" content="/tools/profit-loss-generator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Profit & Loss Statement Generator &mdash; Free P&L India">
    <meta name="twitter:description" content="Profit and Loss Statement Generator creates P&L statements as per Schedule III of Companies Act, 2013. Generate now!">
    <meta name="twitter:image" content="/tools/profit-loss-generator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Profit and Loss Statement Generator India",
      "description": "Profit and Loss Statement Generator creates formatted P&L statements as per Schedule III of the Companies Act, 2013. Supports revenue, COGS, operating expenses, other income, tax, and OCI line items for Indian companies including Private Limited, LLP, and OPC entities.",
      "url": "/tools/profit-loss-generator",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-03-05",
      "dateModified": "2026-03-05",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
      },
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
          "recognizedBy": {
            "@type": "Organization",
            "name": "Institute of Chartered Accountants of India",
            "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
          }
        }]
      },
      "publisher": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "/",
        "logo": {
          "@type": "ImageObject",
          "url": "/logo.png"
        }
      },
      "provider": {
        "@id": "/#organization"
      }
    }
    </script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
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
          "name": "Free Tools",
          "item": "/tools/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Profit & Loss Statement Generator",
          "item": "/tools/profit-loss-generator"
        }
      ]
    }
    </script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a Profit and Loss Statement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Profit and Loss Statement, also called an income statement, summarises a company's revenues, expenses, and net profit or loss over a specific accounting period. Under Section 129 of the Companies Act, 2013 and Schedule III, every Indian company must prepare this statement annually in the prescribed vertical format showing revenue from operations, other income, total expenses, and tax provisions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the format of P&L statement under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III of the Companies Act, 2013 prescribes a vertical format for the Statement of Profit and Loss. It includes revenue from operations, other income, cost of materials consumed, employee benefit expense, finance costs, depreciation, other expenses, profit before tax, tax expense (current and deferred), profit after tax, and other comprehensive income. Division I applies to companies following Indian AS, Division II to Ind AS companies."
          }
        },
        {
          "@type": "Question",
          "name": "Who is required to prepare a Profit and Loss Statement in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every company registered under the Companies Act, 2013 must prepare a Statement of Profit and Loss as part of its financial statements. This includes Private Limited Companies, One Person Companies, Public Companies, and Section 8 Companies. LLPs prepare an income and expenditure account under the LLP Act, 2008. Sole proprietors and partnerships prepare P&L accounts under the Income Tax Act for filing returns."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a P&L statement and a balance sheet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A P&L statement shows revenues and expenses over a period of time, revealing whether a business earned a profit or incurred a loss during that period. A balance sheet shows the financial position at a specific point in time, listing assets, liabilities, and shareholders' equity. Together, they form the core financial statements required under Section 129 of the Companies Act."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate net profit from a P&L statement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net profit is calculated by subtracting total expenses from total revenue. Start with revenue from operations, add other income to get total income. Subtract cost of goods sold to find gross profit. Then subtract operating expenses like employee costs, depreciation, and administrative expenses. Finally, deduct finance costs and income tax to arrive at net profit after tax."
          }
        },
        {
          "@type": "Question",
          "name": "What is revenue from operations in a P&L statement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Revenue from operations includes income earned from the primary business activities of the company. For a manufacturing company, this includes sale of products. For a service company, it includes service revenue. It excludes other income such as interest earned, rental income, and profit on sale of assets. Schedule III requires separate disclosure of sale of products, sale of services, and other operating revenues."
          }
        },
        {
          "@type": "Question",
          "name": "What expenses are included in a P&L statement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The main expense categories under Schedule III include cost of materials consumed, purchases of stock-in-trade, changes in inventories, employee benefit expense (salaries, PF, gratuity), finance costs (interest, processing fees), depreciation and amortisation, and other expenses like rent, utilities, legal fees, and repairs. Each expense category must be disclosed separately with notes to accounts."
          }
        },
        {
          "@type": "Question",
          "name": "What is Other Comprehensive Income (OCI) in financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Other Comprehensive Income includes items that bypass the profit and loss account under Ind AS. It covers unrealised gains and losses from fair value changes in equity instruments, foreign currency translation differences, actuarial gains and losses on defined benefit plans, and effective portion of hedging instruments. OCI is mandatory for Ind AS companies under Division II of Schedule III."
          }
        },
        {
          "@type": "Question",
          "name": "When is the deadline to file financial statements with MCA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies must file financial statements in e-Form AOC-4 with the Registrar of Companies within 30 days of the Annual General Meeting. The AGM itself must be held within 6 months from the end of the financial year, which for most companies means by September 30th each year. Late filing attracts additional fees of Rs 100 per day of delay under Section 403 of the Companies Act."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between single-step and multi-step P&L statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A single-step P&L statement lists all revenues together and all expenses together, calculating net income in one step. A multi-step P&L statement calculates intermediate figures like gross profit and operating profit before arriving at net income. Schedule III of the Companies Act, 2013 follows a multi-step format, requiring separate disclosure of gross profit, operating profit, PBT, and PAT."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use this P&L generator for my small business or freelancing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, this generator works for all Indian business types. Small businesses, freelancers, and sole proprietors can use the simple format for internal tracking and ITR filing. Companies registered under the Companies Act should use the Schedule III format for statutory compliance. The tool generates statements in both formats, with automatic calculations for gross profit, operating profit, PBT, and net profit after tax."
          }
        },
        {
          "@type": "Question",
          "name": "What is the role of a Chartered Accountant in preparing P&L statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Chartered Accountant ensures that P&L statements comply with applicable Accounting Standards (AS or Ind AS) and Schedule III requirements. Under Section 143 of the Companies Act, the statutory auditor verifies the accuracy of financial statements and provides an audit opinion. For tax audit under Section 44AB of the Income Tax Act, a CA must certify the profit and loss account along with Form 3CD."
          }
        }
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
    

        /* ====== P&L SPECIFIC STYLES ====== */
        .line-items-container {
            margin-bottom: 16px;
        }
        .line-item-row {
            display: grid;
            grid-template-columns: 1fr 160px 40px;
            gap: 8px;
            align-items: end;
            margin-bottom: 8px;
        }
        @media (max-width: 500px) {
            .line-item-row {
                grid-template-columns: 1fr 120px 36px;
            }
        }
        .line-item-row .form-group {
            margin-bottom: 0;
        }
        .line-item-row .form-group input {
            padding: 10px 12px;
            font-size: 14px;
        }
        .line-item-row .form-group input[type="number"] {
            font-size: 15px;
        }
        .btn-remove-row {
            width: 36px;
            height: 44px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--surface);
            color: var(--danger);
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            flex-shrink: 0;
        }
        .btn-remove-row:hover {
            background: #FEE2E2;
            border-color: var(--danger);
        }
        .btn-add-row {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            border: 1px dashed var(--primary-light);
            border-radius: 8px;
            background: transparent;
            color: var(--primary-light);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 4px;
        }
        .btn-add-row:hover {
            background: rgba(27, 77, 62, 0.05);
            border-color: var(--primary);
            color: var(--primary);
        }
        .section-divider {
            border: none;
            border-top: 2px dashed var(--border);
            margin: 24px 0;
        }
        .section-label {
            font-size: 14px;
            font-weight: 700;
            color: var(--primary-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            padding-bottom: 6px;
            border-bottom: 2px solid var(--primary);
            display: inline-block;
        }
        .result-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 16px;
        }
        .result-table th,
        .result-table td {
            padding: 10px 16px;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }
        .result-table th {
            background: var(--primary);
            color: #fff;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .result-table th:first-child { border-radius: var(--radius) 0 0 0; }
        .result-table th:last-child { border-radius: 0 var(--radius) 0 0; text-align: right; }
        .result-table td:last-child { text-align: right; font-family: var(--font-mono); font-weight: 700; }
        .result-table tr.subtotal {
            background: var(--surface-alt);
            font-weight: 700;
        }
        .result-table tr.subtotal td {
            border-top: 2px solid var(--primary-light);
            border-bottom: 2px solid var(--primary-light);
            color: var(--primary-dark);
        }
        .result-table tr.grand-total {
            background: var(--primary);
            color: #fff;
        }
        .result-table tr.grand-total td {
            font-weight: 700;
            font-size: 15px;
            border: none;
        }
        .result-table tr.grand-total td:last-child { color: #fff; }
        .result-table tr.indent td:first-child { padding-left: 32px; }
        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            padding: 10px 20px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-download:hover { background: var(--primary-light); }
        .company-info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 16px;
        }
        @media (max-width: 500px) {
            .company-info-row { grid-template-columns: 1fr; }
        }
    
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
            <a href="#line-items">P&L Line Items</a>
            <a href="#compliance">Filing & Compliance</a>
            <a href="#analysis">P&L Analysis</a>
            <a href="#faqs">FAQs</a>
        </div>
    </nav>

    <!-- Breadcrumb -->
    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a>
        <span>&rsaquo;</span>
        Profit &amp; Loss Statement Generator
    </nav> --}}

    <!-- Hero -->
    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Profit &amp; Loss Statement Generator &mdash; <span>Free P&L Statement Maker</span> for Indian Companies</h1>
    </header>

    <!-- TL;DR -->
    <div class="tldr">
        <div class="tldr-label">TL;DR</div>
        <p>This Profit &amp; Loss Statement Generator creates formatted income statements aligned with Schedule III of the Companies Act, 2013. Enter your revenue, cost of goods sold, operating expenses, other income, and tax provisions to instantly generate a professional P&L statement with automatic calculations for gross profit, operating profit, PBT, and net profit after tax. Built by a practising Chartered Accountant for Indian businesses &mdash; Private Limited, LLP, OPC, and sole proprietors.</p>
    </div>

    <!-- Main Layout -->
    <div class="main-layout">
        <div class="content-col">

            <!-- ====== GENERATOR ====== -->
            <div class="calc-card">
                <h2>Generate Profit &amp; Loss Statement</h2>

                <noscript>
                    <div class="noscript-box">
                        This P&amp;L Statement Generator requires JavaScript to function. Please enable JavaScript in your browser settings, or use the Schedule III format guide below to prepare your statement manually.
                    </div>
                </noscript>

                <!-- Company Info -->
                <div class="company-info-row">
                    <div class="form-group">
                        <label for="companyName">Company / Business Name</label>
                        <input type="text" id="companyName" placeholder="e.g. ABC Private Limited" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="periodEnd">Period Ended</label>
                        <input type="text" id="periodEnd" placeholder="e.g. 31st March 2026" autocomplete="off">
                    </div>
                </div>

                <div class="form-group" style="margin-bottom:20px;">
                    <label>Statement Format</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="schedule3" onclick="setFormat(this)">Schedule III<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Companies Act 2013</small></button>
                        <button type="button" class="toggle-btn" data-value="simple" onclick="setFormat(this)">Simple Format<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">SMEs &amp; Freelancers</small></button>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- I. Revenue from Operations -->
                <div class="section-label">I. Revenue from Operations</div>
                <div class="line-items-container" id="revenueItems">
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" placeholder="e.g. Sale of Products" value="Sale of Products"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" placeholder="e.g. Sale of Services" value="Sale of Services"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                </div>
                <button class="btn-add-row" onclick="addRow('revenueItems')">+ Add Revenue Line</button>

                <hr class="section-divider">

                <!-- II. Other Income -->
                <div class="section-label">II. Other Income</div>
                <div class="line-items-container" id="otherIncomeItems">
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" placeholder="e.g. Interest Income" value="Interest Income"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                </div>
                <button class="btn-add-row" onclick="addRow('otherIncomeItems')">+ Add Other Income</button>

                <hr class="section-divider">

                <!-- III. Expenses -->
                <div class="section-label">III. Expenses</div>
                <div class="line-items-container" id="expenseItems">
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Cost of Materials Consumed"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Purchases of Stock-in-Trade"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Employee Benefit Expense"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Finance Costs"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Depreciation &amp; Amortisation"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Other Expenses"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                </div>
                <button class="btn-add-row" onclick="addRow('expenseItems')">+ Add Expense Line</button>

                <hr class="section-divider">

                <!-- IV. Tax -->
                <div class="section-label">IV. Tax Expense</div>
                <div class="line-items-container" id="taxItems">
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Current Tax"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                    <div class="line-item-row">
                        <div class="form-group"><input type="text" value="Deferred Tax"></div>
                        <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                        <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
                    </div>
                </div>
                <button class="btn-add-row" onclick="addRow('taxItems')">+ Add Tax Line</button>

                <button class="btn-calculate" onclick="generatePL()" style="margin-top:24px;">Generate P&amp;L Statement</button>

                <!-- Results -->
                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="plOutput"></div>
                    <div style="display:flex;gap:12px;flex-wrap:wrap;">
                        <button class="btn-download" onclick="downloadCSV()">&#11015; Download CSV</button>
                        <button class="btn-download" onclick="printPL()" style="background:var(--text-secondary);">&#128424; Print Statement</button>
                        <button class="btn-reset" onclick="resetCalc()">&#8634; Reset</button>
                    </div>
                </div>
            </div>

            <!-- ====== HOW TO USE ====== -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This Profit &amp; Loss Statement Generator</h2>
                <p>This free tool helps Indian businesses generate professional Profit &amp; Loss statements aligned with <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> requirements. Follow these steps:</p>

                <h3>Step 1: Enter Company Details</h3>
                <p>Enter your company or business name and the accounting period end date (e.g., 31st March 2026). This information appears in the header of the generated statement.</p>

                <h3>Step 2: Choose Statement Format</h3>
                <p><strong>Schedule III format</strong> follows the structure prescribed under the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Companies Act, 2013</a> and is suitable for Private Limited Companies, OPCs, and Public Companies filing with the Registrar of Companies. <strong>Simple format</strong> is ideal for sole proprietors, freelancers, and partnerships for internal tracking and Income Tax Return preparation.</p>

                <h3>Step 3: Add Line Items</h3>
                <p>Enter revenue from operations (product sales, service income), other income (interest, rent, dividends), all expense categories (materials, employee costs, depreciation, finance costs), and tax provisions. Use the "+ Add" buttons to include additional line items specific to your business.</p>

                <h3>Step 4: Generate &amp; Download</h3>
                <p>Click "Generate P&amp;L Statement" to view the formatted statement with automatic calculations for gross profit, operating profit, profit before tax, and net profit after tax. Download as CSV for Excel or print directly.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Always reconcile your P&amp;L figures with your trial balance before generating the final statement. The revenue and expense totals must match the ledger balances in your books of accounts. Cross-verify with <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GSTR-9</a> figures for GST-registered businesses to ensure consistency across statutory filings.</p>
                </div>
            </section>

            <!-- ====== SCHEDULE III FORMAT ====== -->
            <section class="content-section" id="schedule-iii">
                <h2>P&amp;L Statement Format Under Schedule III (Companies Act, 2013)</h2>
                <p>The <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> prescribes the format for the Statement of Profit and Loss under Schedule III of the Companies Act, 2013. Section 129 mandates that every company's financial statements must give a "true and fair view" and comply with applicable <a href="https://www.icai.org/" target="_blank" rel="noopener">Accounting Standards</a> notified by the Central Government.</p>

                <h3>Division I vs Division II</h3>
                <p><strong>Division I</strong> applies to companies following Indian Accounting Standards (AS) under the Companies (Accounting Standards) Rules, 2006. <strong>Division II</strong> applies to companies following Ind AS under the Companies (Indian Accounting Standards) Rules, 2015. Division II additionally requires disclosure of Other Comprehensive Income (OCI) and a Statement of Changes in Equity.</p>

                <h3>Prescribed Line Items</h3>
                <table class="rate-table">
                    <thead>
                        <tr>
                            <th>Sl. No.</th>
                            <th>Particulars</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>I</strong></td><td>Revenue from Operations</td><td>Sale of products, sale of services, other operating revenues</td></tr>
                        <tr><td><strong>II</strong></td><td>Other Income</td><td>Interest, dividends, rent, gain on sale of assets</td></tr>
                        <tr><td><strong>III</strong></td><td>Total Income (I + II)</td><td>&mdash;</td></tr>
                        <tr><td><strong>IV</strong></td><td>Expenses</td><td>&mdash;</td></tr>
                        <tr><td></td><td style="padding-left:24px">Cost of materials consumed</td><td>Raw materials, packing materials</td></tr>
                        <tr><td></td><td style="padding-left:24px">Purchases of stock-in-trade</td><td>Goods purchased for resale</td></tr>
                        <tr><td></td><td style="padding-left:24px">Changes in inventories</td><td>Opening stock minus closing stock</td></tr>
                        <tr><td></td><td style="padding-left:24px">Employee benefit expense</td><td>Salaries, wages, PF, gratuity, bonus</td></tr>
                        <tr><td></td><td style="padding-left:24px">Finance costs</td><td>Interest expense, loan processing fees</td></tr>
                        <tr><td></td><td style="padding-left:24px">Depreciation &amp; amortisation</td><td>As per Schedule II rates</td></tr>
                        <tr><td></td><td style="padding-left:24px">Other expenses</td><td>Rent, utilities, legal, repairs, travel</td></tr>
                        <tr><td><strong>V</strong></td><td>Total Expenses</td><td>&mdash;</td></tr>
                        <tr><td><strong>VI</strong></td><td>Profit Before Tax (III &minus; V)</td><td>&mdash;</td></tr>
                        <tr><td><strong>VII</strong></td><td>Tax Expense</td><td>Current tax + Deferred tax</td></tr>
                        <tr><td><strong>VIII</strong></td><td>Profit After Tax (VI &minus; VII)</td><td>&mdash;</td></tr>
                        <tr><td><strong>IX</strong></td><td>Other Comprehensive Income</td><td>Ind AS companies only (Division II)</td></tr>
                        <tr><td><strong>X</strong></td><td>Total Comprehensive Income (VIII + IX)</td><td>&mdash;</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Note:</strong> Schedule III requires that every line item be cross-referenced to supporting notes to accounts. Additional line items, headings, and sub-totals must be presented when relevant to understanding the company's financial performance. The MCA has amended Schedule III multiple times &mdash; most recently in March 2021 &mdash; always verify the latest format at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">mca.gov.in</a>.</p>
                </div>
            </section>

            <!-- ====== P&L LINE ITEMS ====== -->
            <section class="content-section" id="line-items">
                <h2>Understanding Key P&amp;L Line Items</h2>

                <h3>Revenue from Operations</h3>
                <p>This is the topline of your P&amp;L &mdash; income earned from the primary business activities. For a manufacturing company, it includes sale of manufactured goods. For a service provider, it includes consulting fees, subscription revenue, or professional service charges. Schedule III requires separate disclosure of: (a) sale of products, (b) sale of services, and (c) other operating revenues. Revenue recognition follows <a href="https://www.icai.org/" target="_blank" rel="noopener">Ind AS 115</a> (Revenue from Contracts with Customers) for Ind AS companies.</p>

                <h3>Cost of Materials Consumed</h3>
                <p>This represents the cost of raw materials and components used in manufacturing or production. The formula is: Opening Stock + Purchases &minus; Closing Stock. For trading businesses, "Purchases of Stock-in-Trade" captures the cost of goods bought for resale. Both must be disclosed separately under Schedule III.</p>

                <div class="formula-box">
                    <span class="label">Cost of Materials Consumed</span><br>
                    = Opening Stock of Materials + Purchases during the year &minus; Closing Stock of Materials<br><br>
                    <span class="label">Example:</span> Opening = &#8377;5,00,000 + Purchases = &#8377;20,00,000 &minus; Closing = &#8377;4,00,000<br>
                    Cost of Materials Consumed = <span class="label">&#8377;21,00,000</span>
                </div>

                <h3>Employee Benefit Expense</h3>
                <p>This includes all personnel costs: salaries and wages, contribution to provident fund (EPF at 12% of basic), ESIC contributions, gratuity provision under the <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">Payment of Gratuity Act, 1972</a>, leave encashment, bonus under the Payment of Bonus Act, and staff welfare expenses. For companies following Ind AS, actuarial gains and losses on defined benefit plans (like gratuity) are reported through OCI rather than the P&amp;L.</p>

                <h3>Finance Costs</h3>
                <p>Finance costs include interest on term loans, working capital interest, interest on debentures, loan processing fees, bank charges, and interest on delayed payment of taxes. Under Ind AS 23 (Borrowing Costs), interest directly attributable to qualifying assets must be capitalised and not charged to the P&amp;L. Always separate borrowing costs on the face of the P&amp;L as prescribed by Schedule III.</p>

                <h3>Depreciation &amp; Amortisation</h3>
                <p>Depreciation on tangible assets follows the useful life prescribed under Schedule II of the Companies Act, 2013 (or rates under the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a> for tax purposes). Amortisation applies to intangible assets like software, patents, and trademarks. The difference between book depreciation (Companies Act) and tax depreciation (Income Tax Act) gives rise to deferred tax, which is disclosed separately under tax expense.</p>

                <h3>Other Expenses</h3>
                <p>This is a catch-all category covering rent, electricity, water, repairs and maintenance, legal and professional fees, communication expenses, travel and conveyance, printing and stationery, insurance, rates and taxes, and CSR expenditure (mandatory for companies meeting the criteria under Section 135). Schedule III requires that any individual item exceeding 1% of revenue or &#8377;10 lakhs (whichever is higher) must be disclosed separately.</p>
            </section>

            <!-- ====== COMPLIANCE ====== -->
            <section class="content-section" id="compliance">
                <h2>Filing &amp; Compliance Requirements</h2>

                <h3>MCA Filing (Form AOC-4)</h3>
                <p>Under <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Section 137</a> of the Companies Act, 2013, every company must file its financial statements (including the P&amp;L statement) with the Registrar of Companies in e-Form AOC-4. The filing deadline is within 30 days of the AGM. Small companies and One Person Companies file in AOC-4 CFS format. Companies meeting specified criteria must file in XBRL format as per the Companies (Filing in XBRL) Rules, 2015.</p>

                <h3>Statutory Audit Requirement</h3>
                <p>Under Section 143, the statutory auditor verifies the P&amp;L statement and issues an audit report opining whether the financial statements give a true and fair view. The audit report is filed with the financial statements in AOC-4. Companies must appoint an auditor under Section 139 &mdash; typically a Chartered Accountant or firm registered with the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>

                <h3>Tax Audit (Section 44AB)</h3>
                <p>If your business turnover exceeds &#8377;1 crore (&#8377;10 crore if cash receipts and payments are within 5% of turnover) or professional receipts exceed &#8377;75 lakhs, a tax audit under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 44AB</a> of the Income Tax Act is required. The auditor verifies the P&amp;L account and certifies it in Form 3CB/3CD. The due date for tax audit report filing is 30th September of the assessment year.</p>

                <h3>GST Reconciliation</h3>
                <p>For GST-registered businesses, the revenue figures in the P&amp;L must reconcile with turnover declared in GSTR-9 (annual return) and GSTR-9C (reconciliation statement). Discrepancies between books of accounts and GST returns can trigger scrutiny notices from the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST authorities</a>. Our tool helps you prepare a clean P&amp;L that feeds into a consistent compliance trail.</p>

                <div class="callout">
                    <p><strong>Need Expert Help with Financial Statements?</strong> Patron Accounting's team of Chartered Accountants prepares audit-ready financial statements, handles MCA filing (AOC-4), statutory audits, and tax audits for companies across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20P%26L%20Statement%20Generator%20tool.%20I%20need%20help%20with%20financial%20statements%20and%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." target="_blank" rel="noopener">Get expert assistance &rarr;</a></p>
                </div>
            </section>

            <!-- ====== P&L ANALYSIS ====== -->
            <section class="content-section" id="analysis">
                <h2>How to Analyse a Profit &amp; Loss Statement</h2>

                <h3>Gross Profit Margin</h3>
                <p>Gross Profit Margin = (Revenue &minus; COGS) &divide; Revenue &times; 100. This ratio reveals how efficiently a business converts raw materials or purchases into revenue. A declining gross margin may indicate rising input costs, pricing pressure, or inventory inefficiency. Indian manufacturing companies typically target gross margins of 25&ndash;40% depending on the industry.</p>

                <div class="formula-box">
                    <span class="label">Gross Profit Margin</span> = (Revenue &minus; COGS) &divide; Revenue &times; 100<br><br>
                    <span class="label">Example:</span> Revenue = &#8377;50,00,000, COGS = &#8377;30,00,000<br>
                    Gross Margin = (&#8377;50L &minus; &#8377;30L) &divide; &#8377;50L &times; 100 = <span class="label">40%</span>
                </div>

                <h3>Operating Profit Margin (EBIT Margin)</h3>
                <p>Operating Profit = Gross Profit &minus; Operating Expenses (employee costs, depreciation, other expenses, excluding finance costs and tax). This shows profitability from core operations. It is the most important metric for comparing companies within the same industry, as it strips out the effects of capital structure and tax rates.</p>

                <h3>Net Profit Margin</h3>
                <p>Net Profit Margin = Net Profit After Tax &divide; Revenue &times; 100. This is the bottom-line profitability metric. For Indian SMEs, a net profit margin of 8&ndash;15% is considered healthy. Publicly listed companies disclose EPS (Earnings Per Share) calculated from net profit, which is a key metric for investors and is required under Schedule III.</p>

                <h3>Common-Size Analysis</h3>
                <p>Expressing each line item as a percentage of revenue makes it easy to compare performance across periods or with industry peers. For instance, if employee costs are 35% of revenue this year vs 30% last year, it signals rising labour costs that may need attention. Lenders and investors regularly perform common-size analysis when evaluating loan applications or funding proposals.</p>
            </section>

            <!-- ====== FAQ ====== -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Profit &amp; Loss Statements</h2>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is a Profit and Loss Statement?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">A Profit and Loss Statement (also called income statement) summarises a company's revenues, expenses, and net profit or loss over a specific accounting period. Under Section 129 of the Companies Act, 2013, every Indian company must prepare this statement annually following the format prescribed in Schedule III. It helps stakeholders assess the company's financial performance and profitability.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the format of P&L statement under Schedule III?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Schedule III prescribes a vertical format starting with revenue from operations, adding other income, then subtracting expenses (cost of materials, employee costs, finance costs, depreciation, other expenses) to arrive at profit before tax. After deducting tax expense (current + deferred), you get profit after tax. Ind AS companies also report Other Comprehensive Income under Division II.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Who is required to prepare a Profit and Loss Statement in India?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Every company registered under the Companies Act, 2013 must prepare a Statement of Profit and Loss &mdash; including Private Limited Companies, OPCs, Public Companies, and Section 8 Companies. LLPs prepare income and expenditure accounts under the LLP Act. Sole proprietors and partnerships prepare P&L accounts under the Income Tax Act for return filing and tax audit purposes.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the difference between a P&L statement and a balance sheet?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">A P&L statement shows revenues and expenses over a period, revealing whether a business earned profit or incurred loss. A balance sheet shows assets, liabilities, and shareholders' equity at a specific date. Together with the cash flow statement, they form the three core financial statements that every company must prepare under Section 129 of the Companies Act, 2013.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>How do I calculate net profit from a P&L statement?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Start with total revenue (revenue from operations + other income). Subtract cost of goods sold to find gross profit. Then subtract operating expenses (employee costs, depreciation, rent, utilities). Deduct finance costs (interest) to get profit before tax. Finally, subtract current tax and deferred tax to arrive at net profit after tax (PAT). This is your bottom line.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is revenue from operations in a P&L statement?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Revenue from operations is income earned from primary business activities &mdash; sale of products for manufacturers, service fees for service companies, and subscription revenue for SaaS businesses. Schedule III requires separate disclosure of sale of products, sale of services, and other operating revenues. It excludes non-operating income like interest, rent, and gains on asset sales.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What expenses are included in a P&L statement?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Main expense categories under Schedule III include cost of materials consumed, purchases of stock-in-trade, changes in inventories, employee benefit expense (salaries, PF, gratuity), finance costs (interest, bank charges), depreciation and amortisation, and other expenses (rent, utilities, legal fees, repairs, insurance). Each must be disclosed separately with supporting notes to accounts.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is Other Comprehensive Income (OCI) in financial statements?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">OCI includes items that bypass the profit and loss account under Ind AS &mdash; such as unrealised gains on equity instruments at fair value, foreign currency translation differences, actuarial gains and losses on gratuity, and effective portions of cash flow hedges. OCI is mandatory for Ind AS companies and appears in Division II of Schedule III, below profit after tax.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>When is the deadline to file financial statements with MCA?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Financial statements must be filed in e-Form AOC-4 within 30 days of the Annual General Meeting. The AGM must be held within 6 months from the financial year end &mdash; typically by 30th September. Late filing attracts additional fees of &#8377;100 per day under Section 403 of the Companies Act. One Person Companies must file within 180 days of the financial year end.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the difference between single-step and multi-step P&L?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">A single-step P&L lists all revenues and all expenses, then calculates net income in one step. A multi-step P&L calculates intermediate figures &mdash; gross profit, operating profit, and PBT &mdash; before arriving at net income. Schedule III of the Companies Act follows a multi-step approach with mandatory disclosure of revenue, expenses by nature, PBT, tax, and PAT as separate line items.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Can I use this generator for my small business or freelancing?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">Yes &mdash; use the "Simple Format" option for sole proprietors, freelancers, and partnerships. It generates a clean income-minus-expenses statement suitable for internal analysis and ITR filing. Companies registered under the Companies Act should use Schedule III format for statutory compliance. Both formats automatically calculate gross profit, operating profit, and net profit.</div>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>What is the role of a Chartered Accountant in preparing P&L statements?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">A CA ensures P&L statements comply with applicable Accounting Standards (AS or Ind AS) and Schedule III. Under Section 143, the statutory auditor verifies accuracy and provides an audit opinion. For tax audit under Section 44AB of the Income Tax Act, a CA certifies the P&L account in Form 3CD. CAs also advise on accounting treatment, revenue recognition, and disclosure requirements.</div>
                    </div>
                </div>
            </section>

        </div>

        <!-- ====== SIDEBAR ====== -->
        <aside class="sidebar-col">
            <!-- CTA Card -->
            <div class="cta-card">
                <h3>Need P&amp;L Preparation Help?</h3>
                <p>Our Chartered Accountants prepare audit-ready financial statements, handle MCA filings, and ensure compliance for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20P%26L%20Generator%20tool.%20I%20need%20help%20with%20financial%20statements.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>

            <!-- Related Services -->
            <div class="sidebar-card">
                <h3>Related Services</h3>
                <a href="/accounting-services" class="sidebar-link">Accounting &amp; Bookkeeping <span class="arrow">&rarr;</span></a>
                <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a>
                <a href="/tax-audit" class="sidebar-link">Tax Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Compliance <span class="arrow">&rarr;</span></a>
                <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Related Tools -->
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator <span class="arrow">&rarr;</span></a>
                <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/invoice-generator" class="sidebar-link">Invoice Generator <span class="arrow">&rarr;</span></a>
                <a href="/tools/tds-rate-finder-calculator" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
            </div>

            <!-- Blog -->
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance for Companies <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
                <a href="/blog/company-annual-filing-services-a-complete-guide-to-roc-filing-for-private-limited-companies-and-llps" class="sidebar-link">ROC Filing Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div><span class="trust">25,000+ Businesses Trust Us</span>
    </div><!-- ====== JAVASCRIPT ====== -->
    <script>
        let statementFormat = 'schedule3';

        function setFormat(btn) {
            const el = btn.closest('.toggle-btn') || btn;
            statementFormat = el.dataset.value;
            el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function addRow(containerId) {
            const container = document.getElementById(containerId);
            const row = document.createElement('div');
            row.className = 'line-item-row';
            row.innerHTML = `
                <div class="form-group"><input type="text" placeholder="Description"></div>
                <div class="form-group"><input type="number" placeholder="&#8377; Amount" min="0" step="0.01"></div>
                <button class="btn-remove-row" onclick="removeRow(this)" title="Remove">&times;</button>
            `;
            container.appendChild(row);
            row.querySelector('input[type="text"]').focus();
        }

        function removeRow(btn) {
            const row = btn.closest('.line-item-row');
            const container = row.parentElement;
            if (container.querySelectorAll('.line-item-row').length > 1) {
                row.remove();
            } else {
                row.querySelectorAll('input').forEach(i => i.value = '');
            }
        }

        function getLineItems(containerId) {
            const rows = document.querySelectorAll(`#${containerId} .line-item-row`);
            const items = [];
            rows.forEach(row => {
                const desc = row.querySelector('input[type="text"]').value.trim();
                const amt = parseFloat(row.querySelector('input[type="number"]').value) || 0;
                if (desc && amt !== 0) items.push({ desc, amt });
            });
            return items;
        }

        function formatCurrency(num) {
            const sign = num < 0 ? '(' : '';
            const signEnd = num <script 0 ? ')' : '';
            const absNum = Math.abs(num);
            return sign + '&#8377;' + absNum.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + signEnd;
        }

        function generatePL() {
            const companyName = document.getElementById('companyName').value.trim() || 'Your Company Name';
            const periodEnd = document.getElementById('periodEnd').value.trim() || '31st March 2026';

            const revenue = getLineItems('revenueItems');
            const otherIncome = getLineItems('otherIncomeItems');
            const expenses = getLineItems('expenseItems');
            const tax = getLineItems('taxItems');

            const totalRevenue = revenue.reduce((s, i) => s + i.amt, 0);
            const totalOtherIncome = otherIncome.reduce((s, i) => s + i.amt, 0);
            const totalIncome = totalRevenue + totalOtherIncome;
            const totalExpenses = expenses.reduce((s, i) => s + i.amt, 0);
            const pbt = totalIncome - totalExpenses;
            const totalTax = tax.reduce((s, i) => s + i.amt, 0);
            const pat = pbt - totalTax;

            let html = `
                <div style="text-align:center;margin-bottom:20px;">
                    <h3 style="color:var(--primary-dark);margin-bottom:4px;">${companyName}</h3>
                    <p style="font-size:14px;color:var(--text-secondary);margin:0;">Statement of Profit and Loss for the period ended ${periodEnd}</p>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:4px;">(All amounts in &#8377;)</p>
                </div>
                <table class="result-table">
                    <thead><tr><th>Particulars</th><th style="text-align:right;">Amount (&#8377;)</th></tr></thead>
                    <tbody>
            `;

            // I. Revenue
            html += `<tr class="subtotal"><td><strong>I. Revenue from Operations</strong></td><td></td></tr>`;
            revenue.forEach(i => html += `<tr class="indent"><td>${i.desc}</td><td>${formatCurrency(i.amt)}</td></tr>`);
            html += `<tr class="subtotal"><td>Total Revenue from Operations</td><td>${formatCurrency(totalRevenue)}</td></tr>`;

            // II. Other Income
            html += `<tr class="subtotal"><td><strong>II. Other Income</strong></td><td></td></tr>`;
            otherIncome.forEach(i => html += `<tr class="indent"><td>${i.desc}</td><td>${formatCurrency(i.amt)}</td></tr>`);
            html += `<tr class="subtotal"><td>Total Other Income</td><td>${formatCurrency(totalOtherIncome)}</td></tr>`;

            // III. Total Income
            html += `<tr class="subtotal"><td><strong>III. Total Income (I + II)</strong></td><td><strong>${formatCurrency(totalIncome)}</strong></td></tr>`;

            // IV. Expenses
            html += `<tr class="subtotal"><td><strong>IV. Expenses</strong></td><td></td></tr>`;
            expenses.forEach(i => html += `<tr class="indent"><td>${i.desc}</td><td>${formatCurrency(i.amt)}</td></tr>`);
            html += `<tr class="subtotal"><td>Total Expenses</td><td>${formatCurrency(totalExpenses)}</td></tr>`;

            // V. PBT
            html += `<tr class="subtotal"><td><strong>V. Profit Before Tax (III &minus; IV)</strong></td><td><strong>${formatCurrency(pbt)}</strong></td></tr>`;

            // VI. Tax
            html += `<tr class="subtotal"><td><strong>VI. Tax Expense</strong></td><td></td></tr>`;
            tax.forEach(i => html += `<tr class="indent"><td>${i.desc}</td><td>${formatCurrency(i.amt)}</td></tr>`);
            html += `<tr class="subtotal"><td>Total Tax Expense</td><td>${formatCurrency(totalTax)}</td></tr>`;

            // VII. PAT
            html += `<tr class="grand-total"><td><strong>VII. Profit / (Loss) After Tax (V &minus; VI)</strong></td><td>${formatCurrency(pat)}</td></tr>`;

            html += `</tbody></table>`;

            // Summary cards
            html += `
                <div class="result-grid" style="margin-top:20px;">
                    <div class="result-card">
                        <div class="result-label">Total Revenue</div>
                        <div class="result-value">${formatCurrency(totalRevenue)}</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Total Expenses</div>
                        <div class="result-value">${formatCurrency(totalExpenses)}</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Profit Before Tax</div>
                        <div class="result-value">${formatCurrency(pbt)}</div>
                    </div>
                    <div class="result-card highlight">
                        <div class="result-label">Net Profit After Tax</div>
                        <div class="result-value">${formatCurrency(pat)}</div>
                    </div>
                </div>
            `;

            document.getElementById('plOutput').innerHTML = html;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });

            // Store for download
            window._plData = { companyName, periodEnd, revenue, otherIncome, expenses, tax, totalRevenue, totalOtherIncome, totalIncome, totalExpenses, pbt, totalTax, pat };
        }

        function downloadCSV() {
            const d = window._plData;
            if (!d) return;
            let csv = `"${d.companyName}"\n"Statement of Profit and Loss for the period ended ${d.periodEnd}"\n\n`;
            csv += `"Particulars","Amount (&#8377;)"\n`;
            csv += `"I. REVENUE FROM OPERATIONS",""\n`;
            d.revenue.forEach(i => csv += `"  ${i.desc}","${i.amt.toFixed(2)}"\n`);
            csv += `"Total Revenue from Operations","${d.totalRevenue.toFixed(2)}"\n`;
            csv += `"II. OTHER INCOME",""\n`;
            d.otherIncome.forEach(i => csv += `"  ${i.desc}","${i.amt.toFixed(2)}"\n`);
            csv += `"Total Other Income","${d.totalOtherIncome.toFixed(2)}"\n`;
            csv += `"III. TOTAL INCOME","${d.totalIncome.toFixed(2)}"\n`;
            csv += `"IV. EXPENSES",""\n`;
            d.expenses.forEach(i => csv += `"  ${i.desc}","${i.amt.toFixed(2)}"\n`);
            csv += `"Total Expenses","${d.totalExpenses.toFixed(2)}"\n`;
            csv += `"V. PROFIT BEFORE TAX","${d.pbt.toFixed(2)}"\n`;
            csv += `"VI. TAX EXPENSE",""\n`;
            d.tax.forEach(i => csv += `"  ${i.desc}","${i.amt.toFixed(2)}"\n`);
            csv += `"Total Tax Expense","${d.totalTax.toFixed(2)}"\n`;
            csv += `"VII. PROFIT/(LOSS) AFTER TAX","${d.pat.toFixed(2)}"\n`;

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${d.companyName.replace(/[^a-zA-Z0-9]/g, '_')}_PL_Statement.csv`;
            a.click();
            URL.revokeObjectURL(url);
        }

        function printPL() {
            const content = document.getElementById('plOutput').innerHTML;
            const win = window.open('', '_blank');
            win.document.write('<html><head><title>Profit &amp; Loss Statement</title><style>body{font-family:sans-serif;padding:20px}table{width:100%;border-collapse:collapse;font-size:13px}th{background:#1B4D3E;color:#fff;padding:8px 10px;text-align:left}th:last-child{text-align:right}td{padding:6px 10px;border-bottom:1px solid #ddd}td:last-child{text-align:right;font-weight:600}.section-head td{background:#f0f0f0;font-weight:700;text-transform:uppercase;font-size:12px}.sub-total td{font-weight:700;border-top:2px solid #ccc}.grand-total td{background:#1B4D3E;color:#fff;font-weight:700;font-size:14px}.indent td:first-child{padding-left:24px}h3{text-align:center;margin-bottom:4px}.pl-subtitle{text-align:center;color:#666;font-size:12px;margin-bottom:12px}</style><\/head><body>' + content + '<\/body><\/html>');
            win.document.close();
            win.print();
        }

        function resetCalc() {
            document.querySelectorAll('.line-item-row input').forEach(function(inp) { inp.value = ''; });
            var cn = document.getElementById('companyName');
            if (cn) cn.value = '';
            var period = document.getElementById('periodText');
            if (period) period.value = '';
            var rs = document.getElementById('resultSection');
            if (rs) { rs.classList.remove('visible'); rs.style.display = 'none'; }
            var plOut = document.getElementById('plOutput');
            if (plOut) plOut.innerHTML = '';
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
                if (e.key === 'Enter') generatePL();
            });
        });
   

    </script>
    @endsection 
