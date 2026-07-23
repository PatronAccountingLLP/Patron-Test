@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Current Ratio Calculator | Liquidity & Working Capital</title>
    <meta name="description" content="Free current ratio calculator: compute current ratio, quick ratio, cash ratio & working capital, Schedule III aligned with benchmarks. CA-reviewed. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/current-ratio-calculator/">
    <meta property="og:title" content="Current Ratio Calculator — Free 2026">
    <meta property="og:description" content="Compute current ratio, quick ratio, cash ratio and working capital from Schedule III components. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/current-ratio-calculator">
    <meta property="og:image" content="/tools/og/current-ratio-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Current Ratio Calculator — Free 2026">
    <meta name="twitter:description" content="Current ratio + quick ratio + cash ratio + working capital. Schedule III aligned. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/current-ratio-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Current Ratio Calculator",
      "description": "Current Ratio Calculator computes the current ratio (current assets divided by current liabilities), quick ratio (acid test, excluding inventory and prepaid expenses), cash ratio (cash and equivalents divided by current liabilities) and working capital (current assets minus current liabilities) for Indian companies, LLPs and businesses. The tool supports Quick Mode (enter only totals) and Detailed Mode (enter eight current asset components and six current liability components based on Schedule III Division I and Division II of the Companies Act 2013). Output includes ratio interpretation by health zone (stressed below 1.0, tight 1.0-1.5, healthy 1.5-2.5, comfortable 2.5-3.0, idle above 3.0), industry benchmark comparison, working capital analysis and CARO 2020 Clause 3(xvii) reference. Suitable for CFO offices, lenders performing credit appraisal, auditors during analytical procedures under SA 520, investors evaluating liquidity, and CA students learning ratio analysis.",
      "url": "/tools/current-ratio-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
        "@type": "Person",
        "@id": "/#founder",
        "name": "CA Sundram Gupta",
        "jobTitle": "Founder & Chartered Accountant",
        "url": "/contact-page",
        "sameAs": ["https://www.linkedin.com/in/ca-sundram-gupta"],
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
      "publisher": { "@id": "/#organization" },
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
        {"@type": "ListItem", "position": 3, "name": "Current Ratio Calculator", "item": "/tools/current-ratio-calculator"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-19T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The current ratio is a liquidity ratio measuring a company's ability to meet short-term obligations using short-term assets. It is calculated as Current Assets divided by Current Liabilities. A ratio above 1 indicates current assets exceed current liabilities. The current ratio is one of the financial ratios required to be disclosed under Schedule III amendments effective FY 2021-22, and is part of the auditor's reporting under CARO 2020 Clause 3(xvii) for material adverse changes."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A current ratio between 1.5 and 2.5 is considered healthy for most industries — indicating sufficient buffer to meet short-term obligations without idle capital. Below 1.0 signals liquidity stress; 1.0 to 1.5 is tight but operable; above 3.0 may indicate underutilised assets or excess working capital. Industry context matters — services and IT companies often operate at 1.0-1.5 (low inventory), while manufacturing typically targets 1.5-2.5."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between current ratio and quick ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Current ratio includes all current assets — including inventory and prepaid expenses. Quick ratio (acid test) excludes inventory and prepaid expenses, focusing only on assets readily convertible to cash. Quick Ratio = (Current Assets − Inventory − Prepaid Expenses) ÷ Current Liabilities. Quick ratio is more conservative and useful when inventory turnover is slow or prepaid expenses are large. A healthy quick ratio is typically 1.0 or above."
          }
        },
        {
          "@type": "Question",
          "name": "How is working capital calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working Capital = Current Assets − Current Liabilities. It represents the absolute rupee buffer the business has to fund day-to-day operations. Positive working capital means current assets exceed current liabilities; negative working capital means short-term obligations exceed short-term resources. Working capital is a key metric for cash flow planning, credit appraisal by lenders, and inventory management. Net Working Capital Ratio = Working Capital ÷ Total Assets, used for comparing across company sizes."
          }
        },
        {
          "@type": "Question",
          "name": "Why is current ratio important to lenders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Banks and NBFCs use current ratio as a primary indicator of short-term solvency before sanctioning working capital loans, cash credit limits or letters of credit. Most lenders impose minimum current ratio covenants (typically 1.25 or 1.33) in loan agreements. Breaching the covenant during the loan period can trigger default events, accelerated repayment, or higher interest rates. Banks also stress-test the ratio under recessionary scenarios before final credit approval."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in current assets under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III of the Companies Act 2013 lists eight categories of current assets: Cash and Cash Equivalents (cash, demand deposits, short-term highly liquid investments), Bank Balances other than C&CE (deposits with maturity over 3 months but within 12 months), Current Investments, Trade Receivables, Inventories, Loans (current portion), Other Financial Assets (current), and Other Current Assets (advances, prepaid expenses, GST receivable, refunds due, etc.)."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in current liabilities under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III lists six categories of current liabilities: Borrowings (current — short-term loans plus current portion of long-term loans), Trade Payables (split between dues to MSMED-registered suppliers and others), Other Financial Liabilities (interest accrued, dividends payable), Other Current Liabilities (advances from customers, statutory dues, GST payable), Provisions (current — bonus, leave, warranty), and Current Tax Liabilities net of advance tax and TDS."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical industry benchmarks for current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Manufacturing typically targets 1.5 to 2.5 due to inventory and receivables. Trading and FMCG operate at 1.2 to 1.8 with high inventory turnover. IT and services often run at 1.0 to 1.5 with minimal inventory. Real estate and infrastructure can show 2.0 to 3.0+ due to project receivables. Banks and NBFCs do not use current ratio — they follow CRAR and liquidity coverage ratio frameworks. Always compare against industry peers, not absolute benchmarks."
          }
        },
        {
          "@type": "Question",
          "name": "What if the current ratio is too high?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A current ratio above 3.0 may signal inefficiency rather than strength — excess cash, slow-moving inventory, or uncollected receivables. It can mean the company is not deploying working capital productively to generate returns. Investors may interpret it negatively if cash is held idle while opportunities exist for capex, R&D, dividends or debt reduction. Auditors examine high current ratios as part of analytical procedures to identify potential overstatement of receivables or inventory."
          }
        },
        {
          "@type": "Question",
          "name": "What is Schedule III classification of current vs non-current?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III defines current assets as those expected to be realised within 12 months from reporting date, held primarily for trading, or that are cash and cash equivalents. Current liabilities are those due within 12 months or that the company does not have an unconditional right to defer settlement beyond 12 months. The 12-month operating cycle is the default unless a longer normal cycle exists for the business. Division I applies to AS framework, Division II to Ind AS framework."
          }
        },
        {
          "@type": "Question",
          "name": "How is cash ratio different from current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cash Ratio is the most conservative liquidity ratio — only cash and cash equivalents divided by current liabilities. It excludes receivables, inventory and other current assets. Cash Ratio = (Cash + Cash Equivalents) ÷ Current Liabilities. A cash ratio above 0.5 indicates strong immediate liquidity. Lenders often examine cash ratio for distressed companies; investors use it for crisis scenario testing. Most healthy companies operate at 0.2 to 0.5 cash ratio."
          }
        },
        {
          "@type": "Question",
          "name": "How can a company improve its current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Strategies to improve current ratio include: convert short-term debt to long-term debt (reduces current liabilities), accelerate receivables collection, reduce slow-moving inventory, raise long-term equity or debt to strengthen current assets, defer non-essential current liabilities. Sale-and-leaseback of fixed assets can free up cash. Improving the ratio should be balanced — too aggressive a focus on the ratio can starve working capital and damage operations or supplier relationships."
          }
        },
        {
          "@type": "Question",
          "name": "What are limitations of the current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Current ratio has several limitations: it ignores composition (inventory-heavy CA may overstate liquidity), uses point-in-time data (year-end window dressing possible), does not capture cash flow timing, treats all current liabilities as equally urgent, and can be manipulated through period-end cut-offs. A high ratio does not always indicate financial strength. The ratio should be analysed alongside quick ratio, cash flow from operations, debt-equity ratio, and trend over multiple periods for meaningful insight."
          }
        }
      ]
    }
    </script>
@endsection

<style>
        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
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
        body { font-family: var(--font-body); background: var(--surface); color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased; }
        .toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; }
        .toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }
        .breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }
        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
        .hero h1 span { color: var(--accent); display: inline; }
        .tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
        .tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col, .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .mode-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #F0F5FB 100%); border: 2px solid var(--primary-light); padding: 6px; gap: 6px; margin-bottom: 24px; }
        .mode-toggle .toggle-btn { padding: 14px 16px; font-size: 14px; }
        .mode-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .live-totals { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; padding: 12px 14px; background: var(--surface-alt); border-radius: var(--radius); margin: 16px 0; font-size: 13px; }
        .live-totals .total-card { padding: 10px 12px; background: var(--card); border-radius: 8px; }
        .live-totals .total-label { font-size: 10px; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .live-totals .total-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); font-size: 16px; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid; }
        .verdict-card.healthy { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.tight { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.stressed { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.idle { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 500px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 24px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(4, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .breakdown-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 13px; }
        .breakdown-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: right; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .breakdown-table thead th:first-child { text-align: left; border-radius: 6px 0 0 0; }
        .breakdown-table thead th:last-child { border-radius: 0 6px 0 0; }
        .breakdown-table tbody td { padding: 8px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .breakdown-table tbody td:first-child { text-align: left; font-family: var(--font-body); font-weight: 600; color: var(--primary-dark); }
        .breakdown-table tbody tr:nth-child(even) { background: var(--surface); }
        .breakdown-table tfoot td { padding: 10px 12px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .breakdown-table tfoot td:first-child { text-align: left; font-family: var(--font-body); }

        .gauge-bar { height: 12px; background: linear-gradient(to right, var(--danger) 0%, var(--danger) 25%, var(--accent) 25%, var(--accent) 40%, var(--success) 40%, var(--success) 75%, var(--info) 75%, var(--info) 100%); border-radius: 6px; position: relative; margin: 16px 0 30px; }
        .gauge-marker { position: absolute; top: -6px; width: 4px; height: 24px; background: var(--primary-dark); border-radius: 2px; transform: translateX(-50%); transition: left 0.5s ease; }
        .gauge-marker::after { content: attr(data-val); position: absolute; bottom: -22px; left: 50%; transform: translateX(-50%); font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
        .gauge-labels { display: flex; justify-content: space-between; font-size: 10px; font-family: var(--font-mono); color: var(--text-muted); margin-top: 6px; }
        .gauge-labels span { font-weight: 600; }

        .approach-block { display: none; }
        .approach-block.active { display: block; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(31,74,122,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 700px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .verdict-grid-value { font-size: 20px; }
        }
    
/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
}

/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#related-ratios">Related Ratios</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Current Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Current Ratio <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Current%20Ratio%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Current%20Ratio%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Current%20Ratio%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Current Ratio is the most common liquidity ratio — Current Assets divided by Current Liabilities. A ratio of 1.5 to 2.5 is healthy for most industries; below 1.0 signals stress; above 3.0 may indicate idle capital. This calculator computes Current Ratio, Quick Ratio (acid test), Cash Ratio and Working Capital using either Quick Mode (totals only) or Detailed Mode with 8 current asset and 6 current liability components per Schedule III of the Companies Act 2013.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Calculate Liquidity Ratios</h2>
            <p class="calc-intro">Use Quick Mode if you already have totals from financial statements; switch to Detailed Mode to enter line items per Schedule III for component-level analysis and additional ratios.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group mode-toggle" id="modeGroup" role="tablist" aria-label="Calculator mode">
                <button type="button" class="toggle-btn active" data-value="detailed" role="tab" aria-selected="true">Detailed (Schedule III)</button>
                <button type="button" class="toggle-btn" data-value="quick" role="tab" aria-selected="false">Quick (Totals Only)</button>
            </div>

            <!-- ========== DETAILED MODE ========== -->
            <div class="approach-block active" id="detailedBlock">

                <div class="calc-section-title">Current Assets</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ca_cash">Cash & Cash Equivalents (₹)</label>
                        <input type="text" id="ca_cash" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Cash on hand, demand deposits, short-term liquid investments under 3 months.</span>
                    </div>
                    <div class="form-group">
                        <label for="ca_bank">Other Bank Balances (₹)</label>
                        <input type="text" id="ca_bank" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">FDs with maturity 3-12 months, earmarked balances, margin money.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ca_invest">Current Investments (₹)</label>
                        <input type="text" id="ca_invest" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Mutual funds, marketable securities held for &lt;12 months.</span>
                    </div>
                    <div class="form-group">
                        <label for="ca_recv">Trade Receivables (₹)</label>
                        <input type="text" id="ca_recv" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Net of provision for ECL / doubtful debts under Ind AS 109.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ca_inv">Inventories (₹)</label>
                        <input type="text" id="ca_inv" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Raw material, WIP, finished goods, stores & spares.</span>
                    </div>
                    <div class="form-group">
                        <label for="ca_loans">Loans (Current) (₹)</label>
                        <input type="text" id="ca_loans" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Loans recoverable within 12 months.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ca_other_fin">Other Financial Assets (₹)</label>
                        <input type="text" id="ca_other_fin" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Interest accrued, unbilled revenue, security deposits (current).</span>
                    </div>
                    <div class="form-group">
                        <label for="ca_other">Other Current Assets — incl. Prepaid (₹)</label>
                        <input type="text" id="ca_other" min="0" step="any" placeholder="0" inputmode="decimal" data-section="ca" autocomplete="off">
                        <span class="helper">Advances, prepaid expenses, GST receivable, refunds due.</span>
                    </div>
                </div>

                <div class="calc-section-title">Current Liabilities</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="cl_borr">Borrowings (Current) (₹)</label>
                        <input type="text" id="cl_borr" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Short-term loans + current portion of long-term debt.</span>
                    </div>
                    <div class="form-group">
                        <label for="cl_payable">Trade Payables (₹)</label>
                        <input type="text" id="cl_payable" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Dues to MSMED suppliers + others (split disclosed in notes).</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="cl_other_fin">Other Financial Liabilities (₹)</label>
                        <input type="text" id="cl_other_fin" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Interest accrued, unpaid dividends, capital creditors (current).</span>
                    </div>
                    <div class="form-group">
                        <label for="cl_other">Other Current Liabilities (₹)</label>
                        <input type="text" id="cl_other" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Advances from customers, GST/TDS payable, statutory dues.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="cl_prov">Provisions (Current) (₹)</label>
                        <input type="text" id="cl_prov" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Provision for bonus, leave, warranty (current portion).</span>
                    </div>
                    <div class="form-group">
                        <label for="cl_tax">Current Tax Liabilities — Net (₹)</label>
                        <input type="text" id="cl_tax" min="0" step="any" placeholder="0" inputmode="decimal" data-section="cl" autocomplete="off">
                        <span class="helper">Income tax payable net of advance tax and TDS.</span>
                    </div>
                </div>

                <div class="live-totals" id="liveTotals" style="display:none;">
                    <div class="total-card">
                        <div class="total-label">Total Current Assets</div>
                        <div class="total-value" id="liveCa">₹0</div>
                    </div>
                    <div class="total-card">
                        <div class="total-label">Total Current Liabilities</div>
                        <div class="total-value" id="liveCl">₹0</div>
                    </div>
                </div>

                <button type="button" class="btn-calculate" id="btnCalcDetailed">Compute Liquidity Ratios</button>
                <button type="button" class="btn-reset" id="btnResetDetailed">Reset</button>
            </div>

            <!-- ========== QUICK MODE ========== -->
            <div class="approach-block" id="quickBlock">
                <div class="calc-section-title">Totals from Financial Statements</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="q_ca">Total Current Assets (₹)</label>
                        <input type="text" id="q_ca" min="0" step="any" placeholder="e.g. 5000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Total from balance sheet — current asset section.</span>
                    </div>
                    <div class="form-group">
                        <label for="q_cl">Total Current Liabilities (₹)</label>
                        <input type="text" id="q_cl" min="0" step="any" placeholder="e.g. 3000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Total from balance sheet — current liability section.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="q_inv">Inventory (Optional, for Quick Ratio) (₹)</label>
                        <input type="text" id="q_inv" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                        <span class="helper">Leave blank to skip Quick Ratio computation.</span>
                    </div>
                    <div class="form-group">
                        <label for="q_cash">Cash & Equivalents (Optional, for Cash Ratio) (₹)</label>
                        <input type="text" id="q_cash" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                        <span class="helper">Leave blank to skip Cash Ratio computation.</span>
                    </div>
                </div>

                <button type="button" class="btn-calculate" id="btnCalcQuick">Compute Liquidity Ratios</button>
                <button type="button" class="btn-reset" id="btnResetQuick">Reset</button>
            </div>

            <!-- ========== RESULT ========== -->
            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Current Ratio</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Current Ratio</div>
                            <div class="verdict-grid-value" id="ratioVal">0.00</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Working Capital</div>
                            <div class="verdict-grid-value" id="wcVal">₹0</div>
                        </div>
                    </div>
                </div>

                <div style="margin: 8px 0 8px;">
                    <div class="gauge-bar">
                        <div class="gauge-marker" id="gaugeMarker" data-val="0.00" style="left:50%"></div>
                    </div>
                    <div class="gauge-labels">
                        <span>Stressed (&lt;1.0)</span>
                        <span>Tight (1.0-1.5)</span>
                        <span>Healthy (1.5-2.5)</span>
                        <span>Comfortable (2.5-3.0)</span>
                        <span>Idle (&gt;3.0)</span>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div id="breakdownOutput"></div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Current Ratio Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Current%20Ratio%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Current%20Ratio%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Current%20Ratio%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The current ratio is the most fundamental liquidity ratio. Together with the quick ratio, cash ratio and working capital, it tells you whether a business has enough short-term resources to meet short-term obligations.</p>

            <h3>The Four Liquidity Metrics</h3>
            <div class="formula-box">
<span class="label">Current Ratio</span> = Current Assets ÷ Current Liabilities
<span class="label">Quick Ratio</span>   = (Current Assets − Inventory − Prepaid) ÷ Current Liabilities
<span class="label">Cash Ratio</span>    = (Cash + Cash Equivalents) ÷ Current Liabilities
<span class="label">Working Capital</span> = Current Assets − Current Liabilities (₹ amount)
            </div>

            <h3>Why the Different Ratios?</h3>
            <p>Each ratio progressively tightens the definition of "liquid":</p>
            <ul>
                <li><strong>Current Ratio</strong> — broadest. Includes all current assets, even slow-moving inventory and prepaid expenses</li>
                <li><strong>Quick Ratio (Acid Test)</strong> — strips out inventory (which may not convert to cash quickly) and prepaid expenses (which can never convert). More conservative</li>
                <li><strong>Cash Ratio</strong> — strictest. Only cash and equivalents. Tests whether the business could pay all current liabilities today without selling anything</li>
                <li><strong>Working Capital</strong> — absolute ₹ amount of buffer; useful for size context across companies</li>
            </ul>

            <h3>Health Zone Classification</h3>
            <p>The calculator places the current ratio in one of five zones, each with a distinct interpretation:</p>
            <ul>
                <li><strong>Stressed (below 1.0)</strong> — current liabilities exceed current assets. Immediate liquidity concern</li>
                <li><strong>Tight (1.0 to 1.5)</strong> — operable but no margin for error. Lender covenants typically set here</li>
                <li><strong>Healthy (1.5 to 2.5)</strong> — sweet spot for most industries</li>
                <li><strong>Comfortable (2.5 to 3.0)</strong> — strong liquidity, may be conservative</li>
                <li><strong>Idle (above 3.0)</strong> — likely excess working capital not being deployed productively</li>
            </ul>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks</h2>
            <p>Current ratio targets vary substantially by industry due to differences in inventory cycles, receivables terms, and working capital intensity. The following ranges are indicative — always compare against listed peers in the same sector.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Industry</th><th>Typical Range</th><th>Quick Ratio Target</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Manufacturing</strong></td><td>1.5 – 2.5</td><td>0.8 – 1.2</td></tr>
                    <tr><td><strong>FMCG / Trading</strong></td><td>1.2 – 1.8</td><td>0.5 – 1.0</td></tr>
                    <tr><td><strong>IT / Services</strong></td><td>1.5 – 2.5</td><td>1.5 – 2.5</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>2.0 – 3.5</td><td>0.5 – 1.0</td></tr>
                    <tr><td><strong>Infrastructure</strong></td><td>1.2 – 2.0</td><td>0.8 – 1.5</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>1.8 – 3.0</td><td>1.0 – 2.0</td></tr>
                    <tr><td><strong>Hospitality</strong></td><td>0.8 – 1.5</td><td>0.5 – 1.0</td></tr>
                    <tr><td><strong>E-commerce / Retail</strong></td><td>1.0 – 1.5</td><td>0.3 – 0.7</td></tr>
                    <tr><td><strong>Construction (EPC)</strong></td><td>1.5 – 2.5</td><td>0.7 – 1.2</td></tr>
                    <tr><td><strong>Banks / NBFCs</strong></td><td>Not applicable</td><td>Not applicable (CRAR/LCR framework)</td></tr>
                </tbody>
            </table>

            <h3>Why Banks Don't Use Current Ratio</h3>
            <p>Banks and NBFCs operate on fundamentally different balance sheet economics — their "current liabilities" are largely deposits, and their "current assets" are loans and investments. Liquidity for banks is governed by the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>'s Liquidity Coverage Ratio (LCR) and Net Stable Funding Ratio (NSFR) under Basel III. Capital adequacy is measured via Capital to Risk-weighted Assets Ratio (CRAR), not current ratio.</p>

            <div class="callout warn">
                <p><strong>Lender covenant alert:</strong> Working capital loan agreements typically include a minimum current ratio covenant of 1.25 or 1.33. Breaching this during the loan period can trigger default events under the loan documentation, accelerated repayment, or higher interest rates. Many companies actively manage year-end balance sheets to maintain covenant compliance — analysts call this "window dressing."</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Working Capital Audit Support?</h3>
            <p>Patron Accounting LLP supports CFO offices with working capital optimisation, liquidity stress testing, lender covenant compliance reviews, Schedule III disclosure preparation, and CARO 2020 ratio analysis — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Current%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Current%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Current%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III Classification — Current vs Non-Current</h2>
            <p>Schedule III of the Companies Act 2013 provides the format for financial statements. Division I applies to companies under AS framework; Division II applies to Ind AS-compliant companies. Both follow the same current vs non-current classification principle.</p>

            <h3>Definition of Current</h3>
            <p>An asset is classified as current if it is:</p>
            <ul>
                <li>Expected to be realised, sold or consumed in the entity's normal operating cycle (default 12 months unless longer cycle exists)</li>
                <li>Held primarily for trading purposes</li>
                <li>Expected to be realised within 12 months from the reporting date</li>
                <li>Cash or cash equivalent (unless restricted from use for at least 12 months)</li>
            </ul>
            <p>A liability is classified as current if it is:</p>
            <ul>
                <li>Expected to be settled in the normal operating cycle</li>
                <li>Held primarily for trading purposes</li>
                <li>Due to be settled within 12 months from the reporting date</li>
                <li>The entity does not have an unconditional right to defer settlement beyond 12 months</li>
            </ul>

            <h3>Disclosed Ratios under Schedule III (FY 2021-22 amendment)</h3>
            <p>The MCA notification dated 24 March 2021 amended Schedule III Division I and Division II to require disclosure of nine financial ratios in Notes to Accounts:</p>
            <ul>
                <li>Current Ratio</li>
                <li>Debt-Equity Ratio</li>
                <li>Debt Service Coverage Ratio</li>
                <li>Return on Equity Ratio</li>
                <li>Inventory Turnover Ratio</li>
                <li>Trade Receivables Turnover Ratio</li>
                <li>Trade Payables Turnover Ratio</li>
                <li>Net Capital Turnover Ratio</li>
                <li>Net Profit Ratio + Return on Capital Employed + Return on Investment</li>
            </ul>
            <p>Variances of more than 25% from the previous year must be explained. Reference: <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> notification and <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> Guidance Note on Schedule III. The underlying Companies Act framework is at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>

            <div class="callout">
                <p><strong>CARO 2020 connection:</strong> Clause 3(xvii) of <a href="/tools/caro-2020-checklist-generator">CARO 2020</a> requires the auditor to report material adverse changes in cash flows or financial ratios that could affect the company's ability to meet liabilities. Current ratio is one of the primary metrics auditors examine under this clause.</p>
            </div>
        </section>

        <section class="content-section" id="related-ratios">
            <h2>Related Liquidity & Solvency Ratios</h2>
            <p>The current ratio is part of a broader framework of liquidity and solvency ratios. Understanding all of them gives a complete picture of financial health.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Ratio</th><th>Formula</th><th>What It Measures</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Current Ratio</strong></td><td>CA ÷ CL</td><td>Short-term solvency (broad)</td></tr>
                    <tr><td><strong>Quick Ratio</strong></td><td>(CA − Inv − Prepaid) ÷ CL</td><td>Short-term solvency (excl. illiquid)</td></tr>
                    <tr><td><strong>Cash Ratio</strong></td><td>(Cash + C.E.) ÷ CL</td><td>Immediate cash liquidity</td></tr>
                    <tr><td><strong>Working Capital</strong></td><td>CA − CL</td><td>Absolute liquidity buffer (₹)</td></tr>
                    <tr><td><strong>Debt-Equity Ratio</strong></td><td>Total Debt ÷ Equity</td><td>Long-term leverage</td></tr>
                    <tr><td><strong>Debt Service Coverage (DSCR)</strong></td><td>EBITDA ÷ (Interest + Principal)</td><td>Ability to service debt</td></tr>
                    <tr><td><strong>Interest Coverage</strong></td><td>EBIT ÷ Interest</td><td>Cushion above interest expense</td></tr>
                    <tr><td><strong>Inventory Turnover</strong></td><td>COGS ÷ Avg Inventory</td><td>Inventory conversion speed</td></tr>
                    <tr><td><strong>Receivables Turnover</strong></td><td>Sales ÷ Avg Receivables</td><td>Collection efficiency</td></tr>
                    <tr><td><strong>Payables Turnover</strong></td><td>Purchases ÷ Avg Payables</td><td>Supplier credit utilisation</td></tr>
                </tbody>
            </table>

            <h3>Cash Conversion Cycle</h3>
            <p>A holistic working capital metric: <strong>CCC = DIO + DSO − DPO</strong>. Days Inventory Outstanding (DIO) measures how long inventory sits before sale. Days Sales Outstanding (DSO) measures how long receivables take to collect. Days Payable Outstanding (DPO) measures how long the entity takes to pay suppliers. A shorter (or negative) CCC means the business turns operations into cash quickly — Amazon famously operates with a negative CCC by collecting from customers before paying suppliers. <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a>'s Listing Regulations require listed companies to disclose working capital metrics in MD&A.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The current ratio is a liquidity ratio measuring a company's ability to meet short-term obligations using short-term assets. It is calculated as Current Assets divided by Current Liabilities. A ratio above 1 indicates current assets exceed current liabilities. The current ratio is one of the financial ratios required to be disclosed under Schedule III amendments effective FY 2021-22, and is part of the auditor's reporting under CARO 2020 Clause 3(xvii) for material adverse changes.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a good current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A current ratio between 1.5 and 2.5 is considered healthy for most industries — indicating sufficient buffer to meet short-term obligations without idle capital. Below 1.0 signals liquidity stress; 1.0 to 1.5 is tight but operable; above 3.0 may indicate underutilised assets or excess working capital. Industry context matters — services and IT companies often operate at 1.0-1.5 (low inventory), while manufacturing typically targets 1.5-2.5.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between current ratio and quick ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Current ratio includes all current assets — including inventory and prepaid expenses. Quick ratio (acid test) excludes inventory and prepaid expenses, focusing only on assets readily convertible to cash. Quick Ratio = (Current Assets − Inventory − Prepaid Expenses) ÷ Current Liabilities. Quick ratio is more conservative and useful when inventory turnover is slow or prepaid expenses are large. A healthy quick ratio is typically 1.0 or above.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is working capital calculated?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Working Capital = Current Assets − Current Liabilities. It represents the absolute rupee buffer the business has to fund day-to-day operations. Positive working capital means current assets exceed current liabilities; negative working capital means short-term obligations exceed short-term resources. Working capital is a key metric for cash flow planning, credit appraisal by lenders, and inventory management. Net Working Capital Ratio = Working Capital ÷ Total Assets, used for comparing across company sizes.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why is current ratio important to lenders?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Banks and NBFCs use current ratio as a primary indicator of short-term solvency before sanctioning working capital loans, cash credit limits or letters of credit. Most lenders impose minimum current ratio covenants (typically 1.25 or 1.33) in loan agreements. Breaching the covenant during the loan period can trigger default events, accelerated repayment, or higher interest rates. Banks also stress-test the ratio under recessionary scenarios before final credit approval.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is included in current assets under Schedule III?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III of the Companies Act 2013 lists eight categories of current assets: Cash and Cash Equivalents (cash, demand deposits, short-term highly liquid investments), Bank Balances other than C&CE (deposits with maturity over 3 months but within 12 months), Current Investments, Trade Receivables, Inventories, Loans (current portion), Other Financial Assets (current), and Other Current Assets (advances, prepaid expenses, GST receivable, refunds due, etc.).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is included in current liabilities under Schedule III?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III lists six categories of current liabilities: Borrowings (current — short-term loans plus current portion of long-term loans), Trade Payables (split between dues to MSMED-registered suppliers and others), Other Financial Liabilities (interest accrued, dividends payable), Other Current Liabilities (advances from customers, statutory dues, GST payable), Provisions (current — bonus, leave, warranty), and Current Tax Liabilities net of advance tax and TDS.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are typical industry benchmarks for current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Manufacturing typically targets 1.5 to 2.5 due to inventory and receivables. Trading and FMCG operate at 1.2 to 1.8 with high inventory turnover. IT and services often run at 1.0 to 1.5 with minimal inventory. Real estate and infrastructure can show 2.0 to 3.0+ due to project receivables. Banks and NBFCs do not use current ratio — they follow CRAR and liquidity coverage ratio frameworks. Always compare against industry peers, not absolute benchmarks.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What if the current ratio is too high?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A current ratio above 3.0 may signal inefficiency rather than strength — excess cash, slow-moving inventory, or uncollected receivables. It can mean the company is not deploying working capital productively to generate returns. Investors may interpret it negatively if cash is held idle while opportunities exist for capex, R&D, dividends or debt reduction. Auditors examine high current ratios as part of analytical procedures to identify potential overstatement of receivables or inventory.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Schedule III classification of current vs non-current?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III defines current assets as those expected to be realised within 12 months from reporting date, held primarily for trading, or that are cash and cash equivalents. Current liabilities are those due within 12 months or that the company does not have an unconditional right to defer settlement beyond 12 months. The 12-month operating cycle is the default unless a longer normal cycle exists for the business. Division I applies to AS framework, Division II to Ind AS framework.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is cash ratio different from current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Cash Ratio is the most conservative liquidity ratio — only cash and cash equivalents divided by current liabilities. It excludes receivables, inventory and other current assets. Cash Ratio = (Cash + Cash Equivalents) ÷ Current Liabilities. A cash ratio above 0.5 indicates strong immediate liquidity. Lenders often examine cash ratio for distressed companies; investors use it for crisis scenario testing. Most healthy companies operate at 0.2 to 0.5 cash ratio.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How can a company improve its current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Strategies to improve current ratio include: convert short-term debt to long-term debt (reduces current liabilities), accelerate receivables collection, reduce slow-moving inventory, raise long-term equity or debt to strengthen current assets, defer non-essential current liabilities. Sale-and-leaseback of fixed assets can free up cash. Improving the ratio should be balanced — too aggressive a focus on the ratio can starve working capital and damage operations or supplier relationships.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are limitations of the current ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Current ratio has several limitations: it ignores composition (inventory-heavy CA may overstate liquidity), uses point-in-time data (year-end window dressing possible), does not capture cash flow timing, treats all current liabilities as equally urgent, and can be manipulated through period-end cut-offs. A high ratio does not always indicate financial strength. The ratio should be analysed alongside quick ratio, cash flow from operations, debt-equity ratio, and trend over multiple periods for meaningful insight.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Working Capital Optimisation</h3>
            <p>CFO-grade working capital review, lender covenant compliance, Schedule III disclosures — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Current%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Current%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Current%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Calculator (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/as-vs-ind-as-comparison-matrix" class="sidebar-link">AS vs Ind AS Matrix<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    // ===== HELPERS =====
    function setupToggleGroup(id, onChange) {
        const group = document.getElementById(id);
        if (!group) return;
        group.addEventListener('click', function(e) {
            const btn = e.target.closest('.toggle-btn');
            if (!btn || !group.contains(btn)) return;
            group.querySelectorAll('.toggle-btn').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
            if (onChange) onChange();
        });
    }
    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    setupToggleGroup('modeGroup', function() {
        const v = getActiveValue('modeGroup');
        document.getElementById('detailedBlock').classList.toggle('active', v === 'detailed');
        document.getElementById('quickBlock').classList.toggle('active', v === 'quick');
        document.getElementById('resultSection').classList.remove('visible');
    });

    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtINRDecimal(num) {
        return num.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function v(id) {
        return parseINR(document.getElementById(id).value) || 0;
    }

    // ===== LIVE TOTALS (DETAILED MODE) =====
    function updateLiveTotals() {
        const ca = v('ca_cash') + v('ca_bank') + v('ca_invest') + v('ca_recv') + v('ca_inv') + v('ca_loans') + v('ca_other_fin') + v('ca_other');
        const cl = v('cl_borr') + v('cl_payable') + v('cl_other_fin') + v('cl_other') + v('cl_prov') + v('cl_tax');
        document.getElementById('liveCa').textContent = fmtINR(ca);
        document.getElementById('liveCl').textContent = fmtINR(cl);
        document.getElementById('liveTotals').style.display = (ca > 0 || cl > 0) ? 'grid' : 'none';
    }
    document.querySelectorAll('#detailedBlock input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('input', updateLiveTotals);
    });

    // ===== COMPUTATION =====
    function classifyRatio(ratio) {
        if (ratio < 1.0) return {zone: 'stressed', label: 'Stressed — Liquidity Concern', headline: 'Current Liabilities Exceed Current Assets'};
        if (ratio < 1.5) return {zone: 'tight', label: 'Tight — Operable', headline: 'Liquidity Adequate but No Margin'};
        if (ratio <= 2.5) return {zone: 'healthy', label: 'Healthy — Strong Position', headline: 'Healthy Liquidity Position'};
        if (ratio <= 3.0) return {zone: 'healthy', label: 'Comfortable — Strong Position', headline: 'Comfortable Liquidity Position'};
        return {zone: 'idle', label: 'Idle — Possibly Inefficient', headline: 'Excess Working Capital — Review Deployment'};
    }

    function gaugeLeft(ratio) {
        // Map ratio to 0-100% on the gauge (cap at 4.0 for visualization)
        const capped = Math.max(0, Math.min(4, ratio));
        return (capped / 4) * 100;
    }

    function computeDetailed() {
        const ca = {
            cash: v('ca_cash'), bank: v('ca_bank'), invest: v('ca_invest'),
            recv: v('ca_recv'), inv: v('ca_inv'), loans: v('ca_loans'),
            other_fin: v('ca_other_fin'), other: v('ca_other')
        };
        const cl = {
            borr: v('cl_borr'), payable: v('cl_payable'), other_fin: v('cl_other_fin'),
            other: v('cl_other'), prov: v('cl_prov'), tax: v('cl_tax')
        };
        const totalCa = ca.cash + ca.bank + ca.invest + ca.recv + ca.inv + ca.loans + ca.other_fin + ca.other;
        const totalCl = cl.borr + cl.payable + cl.other_fin + cl.other + cl.prov + cl.tax;

        if (totalCa <= 0) { alert('Please enter at least one current asset value.'); return; }
        if (totalCl <= 0) { alert('Please enter at least one current liability value.'); return; }

        const cashEquiv = ca.cash;
        // Quick ratio: exclude inventory and prepaid (we treat ca_other as containing prepaid)
        const quickAssets = totalCa - ca.inv;

        const r = {
            mode: 'detailed',
            currentRatio: totalCa / totalCl,
            quickRatio: quickAssets / totalCl,
            cashRatio: cashEquiv / totalCl,
            workingCapital: totalCa - totalCl,
            totalCa: totalCa, totalCl: totalCl, ca: ca, cl: cl,
            cashEquiv: cashEquiv, quickAssets: quickAssets
        };
        renderResult(r);
    }

    function computeQuick() {
        const totalCa = v('q_ca');
        const totalCl = v('q_cl');
        const inv = v('q_inv');
        const cashEquiv = v('q_cash');

        if (totalCa <= 0) { alert('Please enter total current assets.'); return; }
        if (totalCl <= 0) { alert('Please enter total current liabilities.'); return; }

        const r = {
            mode: 'quick',
            currentRatio: totalCa / totalCl,
            quickRatio: inv > 0 ? (totalCa - inv) / totalCl : null,
            cashRatio: cashEquiv > 0 ? cashEquiv / totalCl : null,
            workingCapital: totalCa - totalCl,
            totalCa: totalCa, totalCl: totalCl, inv: inv, cashEquiv: cashEquiv
        };
        renderResult(r);
    }

    // ===== RENDER =====
    function renderResult(r) {
        const cls = classifyRatio(r.currentRatio);
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + cls.zone;

        document.getElementById('verdictLabel').textContent = cls.label;
        document.getElementById('verdictHeadline').textContent = cls.headline;
        document.getElementById('ratioVal').textContent = r.currentRatio.toFixed(2);
        document.getElementById('wcVal').textContent = fmtINR(r.workingCapital);

        // Gauge
        const left = gaugeLeft(r.currentRatio);
        const marker = document.getElementById('gaugeMarker');
        marker.style.left = left + '%';
        marker.dataset.val = r.currentRatio.toFixed(2);

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Current Ratio', value: r.currentRatio.toFixed(2), highlight: true},
            {label: 'Quick Ratio', value: r.quickRatio !== null && !isNaN(r.quickRatio) ? r.quickRatio.toFixed(2) : '—'},
            {label: 'Cash Ratio', value: r.cashRatio !== null && !isNaN(r.cashRatio) ? r.cashRatio.toFixed(2) : '—'},
            {label: 'Working Capital', value: fmtINR(r.workingCapital)}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';
        if (cls.zone === 'stressed') {
            advisory.className = 'info-banner danger';
            advHtml = '<strong>Liquidity stress.</strong> Current liabilities exceed current assets — a current ratio below 1.0 suggests the company may struggle to meet short-term obligations from short-term resources alone. Review cash flow projections, working capital cycle, and explore options to convert short-term debt to long-term, accelerate collections, or raise fresh capital.';
        } else if (cls.zone === 'tight') {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>Operable but tight.</strong> The current ratio is in the 1.0-1.5 zone — sufficient for ongoing operations but with limited buffer. Most lender covenants require minimum 1.25 or 1.33; verify your loan agreements. Strengthen the ratio by accelerating receivables, reducing inventory, or refinancing short-term to long-term debt.';
        } else if (cls.zone === 'healthy') {
            advisory.className = 'info-banner success';
            advHtml = '<strong>Healthy liquidity position.</strong> The current ratio is in the 1.5-3.0 sweet spot. The business has comfortable buffer to meet short-term obligations while deploying assets productively. Continue monitoring against industry benchmarks and the trend over multiple periods.';
        } else {
            advisory.className = 'info-banner info';
            advHtml = '<strong>Possibly excess working capital.</strong> A current ratio above 3.0 may indicate underdeployed assets — excess cash, slow-moving inventory, or uncollected receivables. Examine whether the surplus could be deployed for capex, debt reduction, dividends, or growth. Auditors examine high ratios for potential overstatement of receivables or inventory.';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        let basis = 'Current Ratio = ₹' + fmtINRDecimal(r.totalCa) + ' ÷ ₹' + fmtINRDecimal(r.totalCl) + ' = <strong>' + r.currentRatio.toFixed(2) + '</strong>. ';
        basis += 'Working Capital = CA − CL = ₹' + fmtINRDecimal(r.workingCapital) + '. ';
        if (r.quickRatio !== null && !isNaN(r.quickRatio)) {
            const inv = r.mode === 'detailed' ? r.ca.inv : r.inv;
            basis += 'Quick Ratio = (CA − Inventory ₹' + fmtINRDecimal(inv) + ') ÷ CL = <strong>' + r.quickRatio.toFixed(2) + '</strong>. ';
        }
        if (r.cashRatio !== null && !isNaN(r.cashRatio)) {
            basis += 'Cash Ratio = ₹' + fmtINRDecimal(r.cashEquiv) + ' ÷ CL = <strong>' + r.cashRatio.toFixed(2) + '</strong>. ';
        }
        basis += '<br><br>Computed per Schedule III of the Companies Act 2013 — current vs non-current 12-month classification.';
        document.getElementById('basisText').innerHTML = basis;

        // Breakdown table (detailed mode only)
        const breakdown = document.getElementById('breakdownOutput');
        if (r.mode === 'detailed') {
            const labels = {
                cash: 'Cash & Cash Equivalents', bank: 'Other Bank Balances', invest: 'Current Investments',
                recv: 'Trade Receivables', inv: 'Inventories', loans: 'Loans (Current)',
                other_fin: 'Other Financial Assets', other: 'Other Current Assets',
                borr: 'Borrowings (Current)', payable: 'Trade Payables', other_fin_l: 'Other Financial Liabilities',
                other_l: 'Other Current Liabilities', prov: 'Provisions (Current)', tax: 'Current Tax Liabilities'
            };
            let html = '<h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Schedule III Component Breakdown</h3>';
            html += '<div style="overflow-x:auto;"><table class="breakdown-table">';
            html += '<thead><tr><th>Current Assets</th><th>Amount (₹)</th><th>% of CA</th></tr></thead><tbody>';
            const caKeys = ['cash','bank','invest','recv','inv','loans','other_fin','other'];
            caKeys.forEach(function(k) {
                const amt = r.ca[k];
                if (amt > 0) {
                    const pct = (amt / r.totalCa) * 100;
                    html += '<tr><td>' + labels[k] + '</td><td>' + fmtINRDecimal(amt) + '</td><td>' + pct.toFixed(1) + '%</td></tr>';
                }
            });
            html += '</tbody><tfoot><tr><td>Total Current Assets</td><td>' + fmtINRDecimal(r.totalCa) + '</td><td>100.0%</td></tr></tfoot>';
            html += '</table></div>';

            html += '<div style="overflow-x:auto;margin-top:16px;"><table class="breakdown-table">';
            html += '<thead><tr><th>Current Liabilities</th><th>Amount (₹)</th><th>% of CL</th></tr></thead><tbody>';
            const clKeys = ['borr','payable','other_fin','other','prov','tax'];
            const clLabels = {borr: labels.borr, payable: labels.payable, other_fin: labels.other_fin_l, other: labels.other_l, prov: labels.prov, tax: labels.tax};
            clKeys.forEach(function(k) {
                const amt = r.cl[k];
                if (amt > 0) {
                    const pct = (amt / r.totalCl) * 100;
                    html += '<tr><td>' + clLabels[k] + '</td><td>' + fmtINRDecimal(amt) + '</td><td>' + pct.toFixed(1) + '%</td></tr>';
                }
            });
            html += '</tbody><tfoot><tr><td>Total Current Liabilities</td><td>' + fmtINRDecimal(r.totalCl) + '</td><td>100.0%</td></tr></tfoot>';
            html += '</table></div>';
            breakdown.innerHTML = html;
        } else {
            breakdown.innerHTML = '';
        }

        // Show
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalcDetailed').addEventListener('click', computeDetailed);
    document.getElementById('btnCalcQuick').addEventListener('click', computeQuick);

    document.getElementById('btnResetDetailed').addEventListener('click', function() {
        document.querySelectorAll('#detailedBlock input[type="number"], input[type="text"]').forEach(function(el) {
            el.value = '';
        });
        document.getElementById('liveTotals').style.display = 'none';
        document.getElementById('resultSection').classList.remove('visible');
    });
    document.getElementById('btnResetQuick').addEventListener('click', function() {
        document.querySelectorAll('#quickBlock input[type="number"], input[type="text"]').forEach(function(el) {
            el.value = '';
        });
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const mode = getActiveValue('modeGroup');
                if (mode === 'detailed') document.getElementById('btnCalcDetailed').click();
                else document.getElementById('btnCalcQuick').click();
            }
        });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // TOC active link
    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) {
            if (s.offsetTop <= scrollPos) active = s.id;
        });
        tocLinks.forEach(function(l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + active);
        });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
</script>


<style>
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
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> — get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

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
@endsection
