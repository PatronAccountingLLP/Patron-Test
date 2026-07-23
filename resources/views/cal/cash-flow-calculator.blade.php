@extends('layouts.app')
@section('meta')
    <title>Cash Flow Statement Calculator | AS-3 &amp; Ind AS 7</title>
    <meta name="description" content="Cash flow statement calculator: generate a statement per AS-3 and Ind AS 7 with operating, investing and financing activities for Indian firms. Try free now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/cash-flow-calculator">
    <meta property="og:title" content="Cash Flow Statement Calculator — Free Tool 2026">
    <meta property="og:description" content="Generate cash flow statements per AS-3 and Ind AS 7 with operating, investing and financing activities for Indian businesses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/cash-flow-calculator">
    <meta property="og:image" content="/tools/cash-flow-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cash Flow Statement Calculator — Free Tool 2026">
    <meta name="twitter:description" content="Generate cash flow statements per AS-3 / Ind AS 7 for Indian businesses. Free!">
    <meta name="twitter:image" content="/tools/cash-flow-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Cash Flow Statement Calculator India",
      "description": "Cash Flow Statement Calculator generates formatted cash flow statements using the indirect method per AS-3 and Ind AS 7. Covers operating activities with non-cash adjustments, investing activities, and financing activities with automatic net cash flow and closing balance computation for Indian companies.",
      "url": "/tools/cash-flow-calculator",
      "applicationCategory": "UtilityApplication", "operatingSystem": "Any",
      "datePublished": "2026-03-05", "dateModified": "2026-03-05",
      "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR" },
      "author": { "@type": "Person", "@id": "/#team", "name": "CA & CS Patron Accounting Team", "jobTitle": "Chartered Accountants & Company Secretaries", "url": "/contact-page", "sameAs": ["https://www.linkedin.com/company/patron-accounting"], "hasCredential": [{ "@type": "EducationalOccupationalCredential", "credentialCategory": "Professional Certification", "name": "Chartered Accountant (CA)", "recognizedBy": { "@type": "Organization", "name": "Institute of Chartered Accountants of India", "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India" } }] },
      "publisher": { "@type": "Organization", "name": "Patron Accounting LLP", "url": "/", "logo": { "@type": "ImageObject", "url": "/logo.png" } },
      "provider": { "@id": "/#organization" }
    }
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
      {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
      {"@type": "ListItem", "position": 3, "name": "Cash Flow Statement Calculator", "item": "/tools/cash-flow-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "What is a Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "A Cash Flow Statement tracks the actual movement of cash into and out of a business over a specific period. It is divided into three sections: operating activities covering day-to-day business cash flows, investing activities covering asset purchases and sales, and financing activities covering loans, equity, and dividends. It is mandatory under AS-3 and Ind AS 7 for Indian companies and complements the Balance Sheet and P&L Statement." } },
      { "@type": "Question", "name": "What is the indirect method of preparing a Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "The indirect method starts with net profit from the P&L Statement and adjusts for non-cash items like depreciation, provisions, and unrealised gains. It then adjusts for changes in working capital including trade receivables, inventories, and trade payables to arrive at cash from operating activities. This is the most commonly used method in India as it reconciles profit with actual cash generated." } },
      { "@type": "Question", "name": "Which companies must prepare a Cash Flow Statement in India?", "acceptedAnswer": { "@type": "Answer", "text": "Under the Companies Act 2013, all companies except One Person Companies and small companies with paid-up capital under Rs 50 lakhs and turnover under Rs 2 crore must prepare a Cash Flow Statement. Listed companies and Ind AS companies must follow Ind AS 7. Companies following Indian AS use AS-3. LLPs are not mandatorily required to prepare cash flow statements but may do so voluntarily." } },
      { "@type": "Question", "name": "What are operating activities in a Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "Operating activities represent cash flows from the principal revenue-generating activities of the business. This includes cash received from customers, cash paid to suppliers and employees, income taxes paid, and interest paid on borrowings. Under the indirect method, you start with net profit and adjust for depreciation, working capital changes, and non-operating items to derive net cash from operations." } },
      { "@type": "Question", "name": "What are investing activities in a Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "Investing activities cover cash flows from acquisition and disposal of long-term assets and investments. Cash outflows include purchase of property plant and equipment, purchase of investments, and loans given to third parties. Cash inflows include proceeds from sale of fixed assets, sale of investments, dividends received, and interest received. These activities indicate how much the company is investing for future growth." } },
      { "@type": "Question", "name": "What are financing activities in a Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "Financing activities reflect cash flows related to the capital structure of the business. Cash inflows include proceeds from issue of shares, proceeds from long-term and short-term borrowings. Cash outflows include repayment of borrowings, dividend payments, and share buybacks. These flows show how the company finances its operations and growth through debt and equity." } },
      { "@type": "Question", "name": "What is the difference between cash flow and profit?", "acceptedAnswer": { "@type": "Answer", "text": "Profit is an accounting measure calculated by subtracting expenses from revenues, including non-cash items like depreciation and provisions. Cash flow measures actual money moving in and out of the business. A company can be profitable but cash-poor if revenues are tied up in receivables or inventory. Conversely, a loss-making company can have positive cash flow from asset sales or borrowings." } },
      { "@type": "Question", "name": "What is free cash flow and how is it calculated?", "acceptedAnswer": { "@type": "Answer", "text": "Free Cash Flow equals Cash from Operating Activities minus Capital Expenditure on property plant and equipment. It represents the cash available to the company after maintaining and expanding its asset base. FCF is used by investors to assess a company ability to pay dividends, reduce debt, or fund acquisitions. A consistently positive FCF indicates a financially healthy business." } },
      { "@type": "Question", "name": "How does the Cash Flow Statement connect to the Balance Sheet?", "acceptedAnswer": { "@type": "Answer", "text": "The net increase or decrease in cash from the Cash Flow Statement directly explains the change in cash and cash equivalents between two Balance Sheet dates. Opening cash balance plus net cash flow from all three activities equals the closing cash balance, which must match the cash figure on the closing Balance Sheet. This reconciliation validates the accuracy of all three financial statements." } },
      { "@type": "Question", "name": "What are common adjustments in the indirect method?", "acceptedAnswer": { "@type": "Answer", "text": "Common adjustments include adding back depreciation and amortisation as non-cash charges, adding back provisions for bad debts and gratuity, removing profit or loss on sale of assets and investments as they belong to investing activities, removing interest expense and income which may be classified differently, and adjusting for changes in working capital items like receivables, payables, and inventory." } },
      { "@type": "Question", "name": "Is a Cash Flow Statement required for income tax filing?", "acceptedAnswer": { "@type": "Answer", "text": "The Cash Flow Statement is not directly required for income tax return filing. However, it is part of the financial statements filed with MCA in Form AOC-4 and is reviewed during statutory audit and tax audit under Section 44AB. For businesses seeking bank loans, lenders always require cash flow statements to assess repayment capacity. It is also critical for assessment proceedings under the Income Tax Act." } },
      { "@type": "Question", "name": "Can a CA help prepare the Cash Flow Statement?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a Chartered Accountant prepares the Cash Flow Statement as part of the complete financial statements package. The CA ensures compliance with AS-3 or Ind AS 7, verifies working capital adjustments, classifies activities correctly, and reconciles closing cash with the Balance Sheet. Patron Accounting prepares audit-ready financial statements including cash flow statements for Indian businesses." } }
    ]}
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
        .hint-text { font-size: 11px; color: var(--text-muted); margin-top: 2px; font-style: italic; }
    
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
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
        <a href="#calculator">Generator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#indirect-method">Indirect Method</a>
        <a href="#activities">3 Activities</a>
        <a href="#analysis">Analysis</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        Cash Flow Statement Calculator
    </nav>

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Cash Flow Statement Calculator — <span>Free Tool 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Cash Flow Statement Calculator generates formatted cash flow statements using the indirect method per AS-3 and Ind AS 7. Enter your net profit, non-cash adjustments, working capital changes, investing activities, and financing activities to get an instant statement with automatic net cash flow computation and closing balance reconciliation. Built by a practising CA for Indian companies, LLPs, and SMEs.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Generate Cash Flow Statement</h2>
                <noscript><div class="noscript-box">This tool requires JavaScript. Refer to the indirect method guide below.</div></noscript>

                <div class="company-info-row">
                    <div class="form-group"><label for="companyName">Company Name</label><input type="text" id="companyName" placeholder="e.g. ABC Private Limited" autocomplete="off"></div>
                    <div class="form-group"><label for="periodEnd">Period Ended</label><input type="text" id="periodEnd" placeholder="e.g. 31st March 2026" autocomplete="off"></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="openingCash">Opening Cash & Cash Equivalents (&#8377;)</label><input type="number" id="openingCash" placeholder="e.g. 500000" min="0" step="0.01" autocomplete="off"></div>
                    <div class="form-group"><label for="netProfit">Net Profit Before Tax (&#8377;)</label><input type="number" id="netProfit" placeholder="From P&L Statement" step="0.01" autocomplete="off"><div class="hint-text">Enter negative for loss</div></div>
                </div>

                <hr class="section-divider">

                <!-- A. Operating Activities — Adjustments -->
                <div style="background:rgba(27,77,62,0.03);border-radius:var(--radius);padding:20px;margin-bottom:20px;">
                <h3 style="color:var(--primary-dark);font-size:15px;margin-bottom:4px;">A. CASH FROM OPERATING ACTIVITIES</h3>
                <p style="font-size:12px;color:var(--text-muted);margin-bottom:16px;">Adjustments to reconcile net profit to cash from operations</p>

                <div class="section-label">Non-Cash Adjustments (Add Back)</div>
                <div class="line-items-container" id="addBackItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Depreciation & Amortisation"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Provision for Bad Debts"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Loss on Sale of Assets"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Interest Expense"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('addBackItems')">+ Add Adjustment</button>

                <hr class="section-divider">

                <div class="section-label">Deduct from Profit</div>
                <div class="line-items-container" id="deductItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Profit on Sale of Assets"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Interest Income"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Dividend Income"></div><div class="form-group"><input type="number" placeholder="&#8377;" min="0" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('deductItems')">+ Add Deduction</button>

                <hr class="section-divider">

                <div class="section-label">Working Capital Changes</div>
                <div class="hint-text" style="margin-bottom:12px;">Positive = cash inflow (e.g. receivables decreased). Negative = cash outflow (e.g. inventory increased).</div>
                <div class="line-items-container" id="wcItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="(Increase)/Decrease in Trade Receivables"></div><div class="form-group"><input type="number" placeholder="&#8377;" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="(Increase)/Decrease in Inventories"></div><div class="form-group"><input type="number" placeholder="&#8377;" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Increase/(Decrease) in Trade Payables"></div><div class="form-group"><input type="number" placeholder="&#8377;" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Income Tax Paid"></div><div class="form-group"><input type="number" placeholder="&#8377; (enter negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('wcItems')">+ Add Working Capital Item</button>
                </div>

                <hr class="section-divider">

                <!-- B. Investing Activities -->
                <div style="background:rgba(245,158,11,0.03);border-radius:var(--radius);padding:20px;margin-bottom:20px;">
                <h3 style="color:var(--primary-dark);font-size:15px;margin-bottom:4px;">B. CASH FROM INVESTING ACTIVITIES</h3>
                <div class="hint-text" style="margin-bottom:12px;">Outflows as negative (purchases), inflows as positive (sales proceeds).</div>
                <div class="line-items-container" id="investItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Purchase of Property, Plant & Equipment"></div><div class="form-group"><input type="number" placeholder="&#8377; (negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Proceeds from Sale of Assets"></div><div class="form-group"><input type="number" placeholder="&#8377; (positive)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Purchase of Investments"></div><div class="form-group"><input type="number" placeholder="&#8377; (negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Interest Received"></div><div class="form-group"><input type="number" placeholder="&#8377; (positive)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('investItems')">+ Add Investing Item</button>
                </div>

                <hr class="section-divider">

                <!-- C. Financing Activities -->
                <div style="background:rgba(14,165,233,0.03);border-radius:var(--radius);padding:20px;margin-bottom:20px;">
                <h3 style="color:var(--primary-dark);font-size:15px;margin-bottom:4px;">C. CASH FROM FINANCING ACTIVITIES</h3>
                <div class="hint-text" style="margin-bottom:12px;">Inflows as positive (borrowings received), outflows as negative (repayments, dividends).</div>
                <div class="line-items-container" id="financeItems">
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Proceeds from Borrowings"></div><div class="form-group"><input type="number" placeholder="&#8377; (positive)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Repayment of Borrowings"></div><div class="form-group"><input type="number" placeholder="&#8377; (negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Interest Paid"></div><div class="form-group"><input type="number" placeholder="&#8377; (negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                    <div class="line-item-row"><div class="form-group"><input type="text" value="Dividends Paid"></div><div class="form-group"><input type="number" placeholder="&#8377; (negative)" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button></div>
                </div>
                <button class="btn-add-row" onclick="addRow('financeItems')">+ Add Financing Item</button>
                </div>

                <button class="btn-calculate" onclick="generateCF()">Generate Cash Flow Statement</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="cfOutput"></div>
                    <div style="display:flex;gap:12px;flex-wrap:wrap;">
                        <button class="btn-download" onclick="downloadCSV()">&#11015; Download CSV</button>
                        <button class="btn-download" onclick="printCF()" style="background:var(--text-secondary);">&#128424; Print</button>
                        <button class="btn-reset" onclick="resetCalc()">&#8634; Reset</button>
                    </div>
                </div>
            </div>

            <!-- Content sections -->
            <section class="content-section" id="how-to-use">
                <h2>How to Use This Cash Flow Statement Calculator</h2>
                <p>This tool generates a Cash Flow Statement using the indirect method — the most common approach under <a href="https://www.icai.org/" target="_blank" rel="noopener">AS-3 (Revised)</a> and Ind AS 7 for Indian companies.</p>
                <h3>Step 1: Enter Opening Cash & Net Profit</h3>
                <p>Enter the opening cash and cash equivalents balance (from the previous Balance Sheet) and net profit before tax (from the P&L Statement). Enter a negative number if the company incurred a loss.</p>
                <h3>Step 2: Add Non-Cash Adjustments</h3>
                <p>Add back non-cash charges like depreciation, provisions, and losses on asset sales. Deduct non-operating income like interest income, dividend income, and profit on asset sales. These adjustments convert accrual-based profit to a cash basis.</p>
                <h3>Step 3: Enter Working Capital Changes</h3>
                <p>Enter changes in trade receivables, inventories, trade payables, and other current items. An increase in receivables or inventory is a cash outflow (enter negative). An increase in payables is a cash inflow (enter positive). Include income tax paid as a cash outflow.</p>
                <h3>Step 4: Enter Investing & Financing Activities</h3>
                <p>Record asset purchases (negative), asset sale proceeds (positive), borrowings received (positive), repayments (negative), interest paid (negative), and dividends paid (negative).</p>
                <div class="callout">
                    <p><strong>CA Tip:</strong> The closing cash balance from this statement must match the cash and cash equivalents figure on your Balance Sheet. If there is a mismatch, check for unrecorded bank transactions, timing differences, or items incorrectly classified between the three activity sections. Refer to <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI guidance</a> on AS-3 for complex classification issues.</p>
                </div>
            </section>

            <section class="content-section" id="indirect-method">
                <h2>The Indirect Method Explained</h2>
                <p>The indirect method is prescribed by both AS-3 (Revised) and <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ind AS 7</a> as the preferred approach for Indian companies. It starts with net profit and works backward to actual cash flow:</p>
                <div class="formula-box">
                    <span class="label">Cash from Operations (Indirect Method)</span><br><br>
                    Net Profit Before Tax<br>
                    <span class="label">Add:</span> Depreciation, Provisions, Losses on asset sales<br>
                    <span class="label">Less:</span> Profit on asset sales, Interest/Dividend income<br>
                    = Operating Profit before Working Capital Changes<br><br>
                    <span class="label">Adjust:</span> Changes in Receivables, Inventory, Payables<br>
                    = Cash Generated from Operations<br>
                    <span class="label">Less:</span> Income Tax Paid<br>
                    = <span class="label">Net Cash from Operating Activities (A)</span>
                </div>
                <p>The total net cash flow is computed as: Net Cash from Operations (A) + Net Cash from Investing (B) + Net Cash from Financing (C). This is added to the opening cash balance to derive the closing cash balance, which must reconcile with the Balance Sheet.</p>
                <div class="callout warn">
                    <p><strong>Important:</strong> Under Ind AS 7, interest paid can be classified as either operating or financing activity (company must be consistent). Interest received and dividends received can be classified as either operating or investing activity. Under AS-3, interest and dividends received are investing activities, while interest paid is financing. Choose consistently and disclose the policy in notes to accounts.</p>
                </div>
            </section>

            <section class="content-section" id="activities">
                <h2>Understanding the Three Activity Sections</h2>
                <h3>Operating Activities</h3>
                <p>These are the principal revenue-generating activities — the lifeblood of the business. Positive operating cash flow means the business generates enough cash from core operations to sustain itself without relying on external funding. Key items include cash received from customers, cash paid to suppliers and employees, and income tax payments. The <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> and banks consider operating cash flow as the primary indicator of a company's ability to service debt.</p>
                <h3>Investing Activities</h3>
                <p>These reflect the company's investment in long-term assets and its returns from those investments. High capital expenditure (negative investing cash flow) typically indicates a growth phase. Proceeds from asset sales, interest received, and dividend income are positive investing flows. Under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 40A(3)</a> of the Income Tax Act, capital expenditure payments above &#8377;10,000 must be made through banking channels.</p>
                <h3>Financing Activities</h3>
                <p>These show how the company funds its operations and growth. Positive financing cash flow means the company is raising capital — through borrowings or equity issuance. Negative financing cash flow indicates debt repayment, dividend distribution, or share buybacks. A mature, profitable company typically shows negative financing cash flow as it returns capital to investors rather than raising it.</p>
            </section>

            <section class="content-section" id="analysis">
                <h2>Cash Flow Analysis for Business Decisions</h2>
                <h3>Free Cash Flow (FCF)</h3>
                <div class="formula-box">
                    <span class="label">Free Cash Flow</span> = Cash from Operations &minus; Capital Expenditure<br><br>
                    <span class="label">Example:</span> Operating Cash = &#8377;15,00,000, CapEx = &#8377;5,00,000<br>
                    FCF = &#8377;15L &minus; &#8377;5L = <span class="label">&#8377;10,00,000</span>
                </div>
                <p>FCF indicates how much cash is available for debt repayment, dividends, and growth after maintaining the asset base. Investors and lenders prioritise FCF over accounting profit because it represents actual cash available.</p>
                <h3>Cash Flow Patterns</h3>
                <p>A healthy, growing company typically shows: positive operating cash flow (core business generates cash), negative investing cash flow (investing in growth assets), and mixed financing cash flow (borrowing for expansion while repaying older debt). A distressed company shows negative operating cash flow with positive financing (relying on borrowings to fund operations).</p>
                <div class="callout">
                    <p><strong>Need Financial Statement Preparation Help?</strong> Patron Accounting prepares complete financial statements — P&L, Balance Sheet, Cash Flow Statement, and Notes to Accounts — for Indian companies. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Cash%20Flow%20Calculator.%20I%20need%20help%20with%20financial%20statements.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert assistance &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Cash Flow Statements</h2>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is a Cash Flow Statement?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">A Cash Flow Statement tracks actual cash movement into and out of a business over a period. It has three sections: operating activities (day-to-day business), investing activities (asset purchases/sales), and financing activities (loans, equity, dividends). Mandatory under AS-3 and Ind AS 7 for Indian companies, it complements the Balance Sheet and P&L as the third core financial statement.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the indirect method?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The indirect method starts with net profit from the P&L and adjusts for non-cash items (depreciation, provisions) and working capital changes (receivables, inventory, payables) to arrive at cash from operations. It is the most commonly used method in India as it reconciles accrual profit with actual cash generated and is simpler to prepare than the direct method.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which companies must prepare a Cash Flow Statement?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under the Companies Act 2013, all companies except OPCs and small companies (paid-up capital under &#8377;50 lakhs, turnover under &#8377;2 crore) must prepare it. Listed and Ind AS companies follow Ind AS 7. Others follow AS-3 (Revised). LLPs are not mandatorily required but may prepare voluntarily for bank loans and investor reporting purposes.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are operating activities?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Operating activities represent cash flows from principal revenue-generating activities — cash from customers, payments to suppliers and employees, income taxes paid, and interest paid. Under the indirect method, start with net profit and adjust for depreciation, provisions, working capital changes, and non-operating items to derive net cash from operations. Positive operating cash flow is essential for sustainability.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are investing activities?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Investing activities cover cash flows from long-term assets and investments. Outflows include purchase of PPE and investments. Inflows include sale proceeds of assets, dividends received, and interest received. Negative investing cash flow typically indicates a company investing in future growth — a positive sign when combined with strong operating cash flow.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are financing activities?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Financing activities reflect capital structure changes. Inflows include share issuance proceeds and borrowings received. Outflows include loan repayments, dividend payments, and share buybacks. These show how the company funds operations through debt and equity. Mature companies typically show negative financing cash flow as they return capital to investors rather than raising it.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between cash flow and profit?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Profit is calculated by subtracting expenses from revenues including non-cash items like depreciation. Cash flow measures actual money moving in and out. A company can be profitable but cash-poor if revenues are stuck in receivables. Conversely, a loss-making company can have positive cash flow from asset sales or borrowings. Cash flow is a better indicator of short-term financial health.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is free cash flow?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Free Cash Flow (FCF) equals Cash from Operating Activities minus Capital Expenditure on PPE. It represents cash available after maintaining and expanding the asset base — money that can fund dividends, debt repayment, or acquisitions. Consistently positive FCF indicates financial health. Investors prioritise FCF over accounting profit for company valuation.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does the Cash Flow Statement connect to the Balance Sheet?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The net cash flow (sum of all three activities) explains the change in cash between two Balance Sheet dates. Opening cash + Net cash flow = Closing cash, which must match the cash figure on the closing Balance Sheet. This reconciliation validates all three financial statements and is verified by the statutory auditor during the annual audit.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are common adjustments in the indirect method?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Common adjustments: add back depreciation, provisions for bad debts and gratuity (non-cash charges); remove profit or loss on asset sales (investing activity); remove interest expense and income (may be classified differently); adjust for working capital changes — increase in receivables or inventory reduces cash, increase in payables increases cash.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is it required for income tax filing?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Not directly for ITR filing, but it is part of financial statements filed with MCA in Form AOC-4 and reviewed during statutory and tax audits. Banks always require cash flow statements for loan applications. It is also critical during income tax assessment proceedings where the AO may examine cash flows to verify income and expenditure claims.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help prepare the Cash Flow Statement?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — a CA prepares it as part of the complete financial statements package, ensuring AS-3 or Ind AS 7 compliance, correct working capital adjustments, proper activity classification, and reconciliation with the Balance Sheet. Patron Accounting prepares audit-ready financial statements including cash flow statements for Indian businesses across all entity types.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Cash Flow Help?</h3>
                <p>Our CAs prepare complete financial statements — P&L, Balance Sheet, Cash Flow, and Notes — for Indian companies.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20financial%20statements.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Related Services</h3>
                <a href="/accounting-services" class="sidebar-link">Accounting & Bookkeeping <span class="arrow">&rarr;</span></a>
                <a href="/statutory-audit" class="sidebar-link">Statutory Audit <span class="arrow">&rarr;</span></a>
                <a href="/tax-audit" class="sidebar-link">Tax Audit Services <span class="arrow">&rarr;</span></a>
                <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Compliance <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/profit-loss-generator" class="sidebar-link">P&L Statement Generator <span class="arrow">&rarr;</span></a>
                <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator <span class="arrow">&rarr;</span></a>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
                <a href="/blog/company-annual-filing-services-a-complete-guide-to-roc-filing-for-private-limited-companies-and-llps" class="sidebar-link">ROC Filing Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

    <script>
        function addRow(id) { const c=document.getElementById(id);const r=document.createElement('div');r.className='line-item-row';r.innerHTML='<div class="form-group"><input type="text" placeholder="Description"></div><div class="form-group"><input type="number" placeholder="&#8377;" step="0.01"></div><button class="btn-remove-row" onclick="removeRow(this)">&times;</button>';c.appendChild(r);r.querySelector('input[type="text"]').focus(); }
        function removeRow(b) { const r=b.closest('.line-item-row'),c=r.parentElement;if(c.querySelectorAll('.line-item-row').length>1)r.remove();else r.querySelectorAll('input').forEach(i=>i.value=''); }
        function getItems(id) { const items=[];document.querySelectorAll('#'+id+' .line-item-row').forEach(r=>{const d=r.querySelector('input[type="text"]').value.trim();const a=parseFloat(r.querySelector('input[type="number"]').value)||0;if(d&&a!==0)items.push({desc:d,amt:a});});return items; }
        function fmt(n) { const s=n<0?'(':'',e=n<0?')':'';return s+'\u20B9'+Math.abs(n).toLocaleString('en-IN',{minimumFractionDigits:2,maximumFractionDigits:2})+e; }

        function generateCF() {
            const company=document.getElementById('companyName').value.trim()||'Your Company Name';
            const period=document.getElementById('periodEnd').value.trim()||'31st March 2026';
            const openCash=parseFloat(document.getElementById('openingCash').value)||0;
            const netProfit=parseFloat(document.getElementById('netProfit').value)||0;

            const addBacks=getItems('addBackItems');
            const deducts=getItems('deductItems');
            const wc=getItems('wcItems');
            const invest=getItems('investItems');
            const finance=getItems('financeItems');

            const totalAddBack=addBacks.reduce((s,i)=>s+i.amt,0);
            const totalDeduct=deducts.reduce((s,i)=>s+i.amt,0);
            const opProfitBeforeWC=netProfit+totalAddBack-totalDeduct;
            const totalWC=wc.reduce((s,i)=>s+i.amt,0);
            const cashFromOps=opProfitBeforeWC+totalWC;
            const cashFromInvest=invest.reduce((s,i)=>s+i.amt,0);
            const cashFromFinance=finance.reduce((s,i)=>s+i.amt,0);
            const netCashFlow=cashFromOps+cashFromInvest+cashFromFinance;
            const closingCash=openCash+netCashFlow;

            let h='<div style="text-align:center;margin-bottom:20px;"><h3 style="color:var(--primary-dark);margin-bottom:4px;">'+company+'</h3><p style="font-size:14px;color:var(--text-secondary);margin:0;">Cash Flow Statement for the period ended '+period+'</p><p style="font-size:12px;color:var(--text-muted);margin-top:4px;">(Indirect Method — All amounts in &#8377;)</p></div>';
            h+='<table class="result-table"><thead><tr><th>Particulars</th><th style="text-align:right;">Amount (&#8377;)</th></tr></thead><tbody>';

            h+='<tr class="subtotal"><td><strong>A. Cash Flow from Operating Activities</strong></td><td></td></tr>';
            h+='<tr class="indent"><td>Net Profit Before Tax</td><td>'+fmt(netProfit)+'</td></tr>';
            h+='<tr class="subtotal"><td>Adjustments for:</td><td></td></tr>';
            addBacks.forEach(i=>h+='<tr class="indent"><td>'+i.desc+'</td><td>'+fmt(i.amt)+'</td></tr>');
            deducts.forEach(i=>h+='<tr class="indent"><td>'+i.desc+'</td><td>'+fmt(-i.amt)+'</td></tr>');
            h+='<tr class="subtotal"><td>Operating Profit before Working Capital Changes</td><td>'+fmt(opProfitBeforeWC)+'</td></tr>';
            wc.forEach(i=>h+='<tr class="indent"><td>'+i.desc+'</td><td>'+fmt(i.amt)+'</td></tr>');
            h+='<tr class="subtotal"><td><strong>Net Cash from Operating Activities (A)</strong></td><td><strong>'+fmt(cashFromOps)+'</strong></td></tr>';

            h+='<tr class="subtotal"><td><strong>B. Cash Flow from Investing Activities</strong></td><td></td></tr>';
            invest.forEach(i=>h+='<tr class="indent"><td>'+i.desc+'</td><td>'+fmt(i.amt)+'</td></tr>');
            h+='<tr class="subtotal"><td><strong>Net Cash from Investing Activities (B)</strong></td><td><strong>'+fmt(cashFromInvest)+'</strong></td></tr>';

            h+='<tr class="subtotal"><td><strong>C. Cash Flow from Financing Activities</strong></td><td></td></tr>';
            finance.forEach(i=>h+='<tr class="indent"><td>'+i.desc+'</td><td>'+fmt(i.amt)+'</td></tr>');
            h+='<tr class="subtotal"><td><strong>Net Cash from Financing Activities (C)</strong></td><td><strong>'+fmt(cashFromFinance)+'</strong></td></tr>';

            h+='<tr class="subtotal"><td><strong>Net Increase/(Decrease) in Cash (A+B+C)</strong></td><td><strong>'+fmt(netCashFlow)+'</strong></td></tr>';
            h+='<tr class="indent"><td>Opening Cash & Cash Equivalents</td><td>'+fmt(openCash)+'</td></tr>';
            h+='<tr class="grand-total"><td><strong>Closing Cash & Cash Equivalents</strong></td><td>'+fmt(closingCash)+'</td></tr>';
            h+='</tbody></table>';

            h+='<div class="result-grid" style="margin-top:20px;">';
            h+='<div class="result-card"><div class="result-label">Cash from Operations</div><div class="result-value">'+fmt(cashFromOps)+'</div></div>';
            h+='<div class="result-card"><div class="result-label">Cash from Investing</div><div class="result-value">'+fmt(cashFromInvest)+'</div></div>';
            h+='<div class="result-card"><div class="result-label">Cash from Financing</div><div class="result-value">'+fmt(cashFromFinance)+'</div></div>';
            h+='<div class="result-card highlight"><div class="result-label">Closing Cash Balance</div><div class="result-value">'+fmt(closingCash)+'</div></div>';
            h+='</div>';

            document.getElementById('cfOutput').innerHTML=h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({behavior:'smooth',block:'nearest'});
            window._cfData={company,period,openCash,netProfit,addBacks,deducts,wc,invest,finance,opProfitBeforeWC,cashFromOps,cashFromInvest,cashFromFinance,netCashFlow,closingCash};
        }

        function downloadCSV() {
            const d=window._cfData;if(!d)return;
            let c='"'+d.company+'"\n"Cash Flow Statement for '+d.period+'"\n\n"Particulars","Amount"\n';
            c+='"A. OPERATING ACTIVITIES",""\n"Net Profit Before Tax","'+d.netProfit.toFixed(2)+'"\n';
            c+='"Adjustments:",""\n';
            d.addBacks.forEach(i=>c+='"  '+i.desc+'","'+i.amt.toFixed(2)+'"\n');
            d.deducts.forEach(i=>c+='"  '+i.desc+'","'+(-i.amt).toFixed(2)+'"\n');
            c+='"Operating Profit before WC Changes","'+d.opProfitBeforeWC.toFixed(2)+'"\n';
            d.wc.forEach(i=>c+='"  '+i.desc+'","'+i.amt.toFixed(2)+'"\n');
            c+='"Net Cash from Operations (A)","'+d.cashFromOps.toFixed(2)+'"\n\n';
            c+='"B. INVESTING ACTIVITIES",""\n';
            d.invest.forEach(i=>c+='"  '+i.desc+'","'+i.amt.toFixed(2)+'"\n');
            c+='"Net Cash from Investing (B)","'+d.cashFromInvest.toFixed(2)+'"\n\n';
            c+='"C. FINANCING ACTIVITIES",""\n';
            d.finance.forEach(i=>c+='"  '+i.desc+'","'+i.amt.toFixed(2)+'"\n');
            c+='"Net Cash from Financing (C)","'+d.cashFromFinance.toFixed(2)+'"\n\n';
            c+='"Net Change in Cash (A+B+C)","'+d.netCashFlow.toFixed(2)+'"\n';
            c+='"Opening Cash","'+d.openCash.toFixed(2)+'"\n';
            c+='"Closing Cash","'+d.closingCash.toFixed(2)+'"\n';
            const b=new Blob([c],{type:'text/csv'});const u=URL.createObjectURL(b);const a=document.createElement('a');a.href=u;a.download=d.company.replace(/[^a-zA-Z0-9]/g,'_')+'_CashFlow.csv';a.click();URL.revokeObjectURL(u);
        }
                // function printCF() { const c=document.getElementById('cfOutput').innerHTML;const w=window.open('','_blank');w.document.write(''+c+'

    
        function printCF() {
            const c = document.getElementById('cfOutput').innerHTML;
            const w = window.open('', '_blank');
            w.document.write('<html><head><title>Cash Flow Statement</title><style>body{font-family:sans-serif;padding:20px}table{width:100%;border-collapse:collapse;font-size:13px}th{background:#1B4D3E;color:#fff;padding:8px 10px;text-align:left}th:last-child{text-align:right}td{padding:6px 10px;border-bottom:1px solid #ddd}td:last-child{text-align:right;font-weight:600}.section-head td{background:#f0f0f0;font-weight:700;text-transform:uppercase;font-size:12px}.sub-total td{font-weight:700;border-top:2px solid #ccc}.grand-total td{background:#1B4D3E;color:#fff;font-weight:700;font-size:14px}.indent td:first-child{padding-left:24px}h3{text-align:center;margin-bottom:4px}</style><\/head><body>' + c + '<\/body><\/html>');
            w.document.close();
            w.print();
        }

        function resetCalc() {
            document.querySelectorAll('.line-item-row input').forEach(function(inp) { inp.value = ''; });
            var cn = document.getElementById('companyName');
            if (cn) cn.value = '';
            var rs = document.getElementById('resultSection');
            if (rs) { rs.classList.remove('visible'); rs.style.display = 'none'; }
            var cfOut = document.getElementById('cfOutput');
            if (cfOut) cfOut.innerHTML = '';
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
                if (e.key === 'Enter') generateCF();
            });
        });
             
    </script>    
@endsection
