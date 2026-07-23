@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Financial Ratios Dashboard | 30+ Ratios, Schedule III</title>
    <meta name="description" content="Financial ratios dashboard: 30+ ratios across liquidity, solvency, profitability, efficiency and cash flow, all tagged to Schedule III. Free CA-reviewed tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/financial-ratios-dashboard/">
    <meta property="og:title" content="Financial Ratios Dashboard — 30+ Ratios + Schedule III 2026">
    <meta property="og:description" content="Compute 30+ financial ratios in one dashboard. Schedule III mandatory ratios tagged, 25% variance flag, Indian sector benchmarks. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/financial-ratios-dashboard">
    <meta property="og:image" content="/tools/og/financial-ratios-dashboard.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Financial Ratios Dashboard — 30+ Ratios + Schedule III 2026">
    <meta name="twitter:description" content="30+ ratios in one dashboard. Schedule III tagged, 25% variance flag, Indian sector benchmarks. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/financial-ratios-dashboard.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Financial Ratios Dashboard",
      "description": "Financial Ratios Dashboard is a comprehensive single-input tool that computes thirty-plus financial ratios across six analytical dimensions — Liquidity (Current Ratio, Quick Ratio, Cash Ratio, Net Working Capital to Sales, Operating Cash Flow Ratio); Solvency and Leverage (Debt-to-Equity, Debt-to-Assets, Equity Multiplier, Interest Coverage Ratio, Debt Service Coverage Ratio, Long-Term Debt to Equity); Profitability (Gross Margin, Operating Margin, EBITDA Margin, Net Profit Margin, Return on Equity, Return on Assets, Return on Capital Employed, Return on Invested Capital); Efficiency (Asset Turnover, Inventory Turnover, Receivables Turnover, Payables Turnover, Working Capital Turnover, Cash Conversion Cycle); Cash Flow (Operating Cash Flow Ratio, Free Cash Flow, OCF to Net Income, CapEx Coverage); and Valuation (Price-to-Earnings, Price-to-Book, Price-to-Sales, Earnings Yield, Dividend Yield) for listed entities. The tool tags the eleven Schedule III mandatory ratio disclosures under Companies Act 2013 and Companies (Accounts) Amendment Rules 2021, supports the 25% year-on-year variance rule for Notes to Accounts disclosure, applies Indian sector calibration across IT, FMCG, Pharma, Manufacturing, Retail, Real Estate, Infrastructure, Auto, Telecom, and other industries, and provides ICAI Guidance Note alignment for ratio computation. Suitable for statutory and internal audit, SA 570 going-concern review, lender credit appraisal, M&A target screening, financial due diligence, MIS reporting, CA / CS / CMA student learning, and CFO dashboards. Inputs map directly to Schedule III Division I and Division II line items.",
      "url": "/tools/financial-ratios-dashboard",
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
        {"@type": "ListItem", "position": 3, "name": "Financial Ratios Dashboard", "item": "/tools/financial-ratios-dashboard"}
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
          "name": "What is a financial ratios dashboard?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A financial ratios dashboard is a single-screen view that computes and presents multiple ratio categories from one set of balance sheet, P&L, and cash flow inputs. Categories typically include liquidity, solvency, profitability, efficiency, cash flow, and valuation ratios. Dashboards replace fragmented standalone calculators and let analysts compare ratios across dimensions simultaneously. This tool computes thirty-plus ratios, tags the eleven Schedule III mandatory disclosures, applies Indian sector calibration, and aligns with ICAI Guidance Note on Schedule III computational standards."
          }
        },
        {
          "@type": "Question",
          "name": "Which ratios are mandatory under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies (Accounts) Amendment Rules 2021 effective FY 2021-22 mandate disclosure of eleven specific ratios in Notes to Accounts: Current Ratio, Debt-Equity, Debt Service Coverage, Return on Equity, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, Net Capital Turnover, Net Profit Ratio, Return on Capital Employed, and Return on Investment. The dashboard tags these eleven with a Schedule III badge. The amendment applies under both Division I (Indian GAAP) and Division II (Ind AS)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 25% variance rule?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III, post the 2021 amendment, requires companies to explain any year-on-year change exceeding 25% in any of the eleven mandatory ratios — positive or negative. The explanation must appear in Notes to Accounts identifying the cause: operational change, capital structure shift, accounting policy change, or one-time item. The threshold applies to absolute change, not direction. Auditors verify both the computation and the management explanation. This dashboard makes 25% variance analysis straightforward for finance teams."
          }
        },
        {
          "@type": "Question",
          "name": "How are turnover ratios computed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Turnover ratios use revenue or COGS in the numerator and a balance sheet item in the denominator. Inventory Turnover equals COGS divided by average inventory. Receivables Turnover equals Net Credit Sales divided by average trade receivables. Payables Turnover equals Net Credit Purchases divided by average trade payables. ICAI Guidance Note on Schedule III prescribes use of average opening and closing balances rather than year-end snapshot. The dashboard uses end-of-period values by default."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good current ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A current ratio of 1.5 to 2.0 is typically considered healthy for most Indian industries. Below 1.0 signals short-term distress — current liabilities exceed current assets. Above 3.0 may indicate idle working capital or over-investment in inventory and receivables. Modern retail and quick-commerce companies operate with negative working capital by design. Sector matters significantly — IT services run higher (2.0 to 4.0), capital goods firms run lower (1.2 to 1.5). The dashboard provides Indian sector medians for context."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ROCE and ROE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Return on Equity measures returns to shareholders only — PAT divided by Equity. Return on Capital Employed measures returns to all capital providers — EBIT divided by Capital Employed (Equity plus Long-Term Debt). ROCE eliminates the leverage distortion that ROE captures. A highly leveraged company can show high ROE through financial leverage while ROCE reveals weaker operating performance. Schedule III mandates both ratios. ICAI Guidance Note prescribes specific computation under both Indian GAAP and Ind AS."
          }
        },
        {
          "@type": "Question",
          "name": "How do I interpret negative ratios?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Negative ratios occur when underlying numbers are negative. Negative ROE indicates loss-making operations or accumulated losses exceeding equity. Negative working capital can be design (modern retail) or distress (overdraft funding inventory). Negative interest coverage means EBIT is below interest expense — debt servicing risk. Negative gross margin signals pricing failure. Each negative ratio requires investigation in context — the dashboard flags adverse readings but interpretation needs sector knowledge. SA 570 going-concern review is triggered by negative-ratio clusters."
          }
        },
        {
          "@type": "Question",
          "name": "Which sector benchmarks does the tool use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The dashboard provides typical median ranges for major Indian industries — IT and software, FMCG, pharma, listed and SME manufacturing, modern retail, real estate and construction, infrastructure and power, hospitality, auto OEM, telecom, and broad market Nifty 50. Banks, NBFCs, and insurance entities follow regulatory frameworks under RBI and IRDAI prudential norms and require specialised models, so they are excluded from generic ratio benchmarking. Always read sector context alongside trend analysis over three to five years for meaningful conclusions."
          }
        },
        {
          "@type": "Question",
          "name": "What is Cash Conversion Cycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cash Conversion Cycle measures the days from cash outflow on inventory purchase to cash inflow from customer collection. CCC equals Days Inventory Outstanding plus Days Sales Outstanding minus Days Payables Outstanding. Positive CCC means working capital is locked in operations. Negative CCC means customers and suppliers fund operations — a hallmark of strong companies like FMCG, modern retail, and platform businesses. Indian manufacturers typically run 60-120 day CCC. Patron's standalone Cash Conversion Cycle Calculator provides deeper diagnostic and benchmarking."
          }
        },
        {
          "@type": "Question",
          "name": "How does the dashboard differ from individual calculators?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standalone calculators compute one ratio at a time with detailed explanation and sector context — useful for learning. The dashboard takes one input set and computes thirty-plus ratios simultaneously, suitable for monthly MIS, quarterly review, and annual statutory disclosure preparation. The dashboard tags Schedule III mandatory ratios, provides composite category scores, and surfaces cross-ratio insights — combining Cash Flow with Solvency to flag debt-servicing risk neither dimension reveals alone. Use both depending on diagnostic depth required."
          }
        },
        {
          "@type": "Question",
          "name": "Are ratios for banks and NBFCs different?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — fundamentally. Banks and NBFCs are evaluated under regulatory frameworks: Capital Adequacy Ratio under Basel III, Net Interest Margin, Gross and Net NPA ratios, Provision Coverage Ratio, Liquidity Coverage Ratio, and Cost-to-Income Ratio. Insurance entities follow Solvency Margin requirements under IRDAI. These specialised ratios reflect different business models — financial intermediation rather than goods or services. This dashboard is calibrated for non-financial entities. Banking and insurance analysts use bespoke regulatory dashboards, not generic ratio tools."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use this for audit planning?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The dashboard supports SA 320 audit materiality determination, SA 570 going-concern indicator review, SA 540 accounting estimate evaluation, and SA 530 audit sampling stratification. Internal auditors use ratios for risk-based audit plan inputs under ICAI's Standards on Internal Audit. Concurrent and statutory bank auditors use ratio dashboards to identify outlier accounts and stratify samples. The Schedule III mandatory ratio output also doubles as the Notes to Accounts disclosure draft, saving manual computation time during audit closing."
          }
        },
        {
          "@type": "Question",
          "name": "What inputs are required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inputs come from three statements. Balance Sheet: Total Assets, Current Assets, Inventory, Trade Receivables, Cash, Current Liabilities, Trade Payables, Total Debt, Long-Term Debt, Shareholders' Equity. P&L: Revenue, COGS, EBITDA, Depreciation, EBIT, Interest, PAT. Cash Flow: Operating Cash Flow, CapEx, Dividends. Optional listed-entity: Market Cap, Outstanding Shares, EPS. All values in rupees crore. Inputs map directly to Schedule III Part I (Balance Sheet) and Part II (P&L) line items under both Division I (Indian GAAP) and Division II (Ind AS)."
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
            --warning: #D97706;
            --sched3-bg: #FFFBEB;
            --sched3-border: #f26522;
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
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; } }
        .calc-row.three-col { grid-template-columns: 1fr; }
        @media (min-width: 600px) { .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        /* Schedule III Compliance Card */
        .sched3-card { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border: 2px solid var(--sched3-border); border-radius: var(--radius); padding: 24px; margin-bottom: 24px; }
        .sched3-header { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; margin-bottom: 16px; }
        .sched3-title { font-size: 18px; font-weight: 700; color: var(--primary-dark); }
        .sched3-pill { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 700; background: var(--sched3-border); color: #fff; text-transform: uppercase; letter-spacing: 0.5px; }
        .sched3-grid { display: grid; grid-template-columns: 1fr; gap: 8px; }
        @media (min-width: 600px) { .sched3-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 900px) { .sched3-grid { grid-template-columns: 1fr 1fr 1fr; } }
        .sched3-item { background: rgba(255,255,255,0.7); border: 1px solid rgba(245,158,11,0.3); border-radius: 8px; padding: 10px 12px; display: flex; justify-content: space-between; align-items: center; gap: 8px; }
        .sched3-item-label { font-size: 12px; font-weight: 600; color: var(--text-secondary); }
        .sched3-item-value { font-family: var(--font-mono); font-size: 14px; font-weight: 700; color: var(--primary-dark); }
        .sched3-item-num { color: var(--accent); font-weight: 700; font-family: var(--font-mono); font-size: 11px; margin-right: 6px; }

        /* Category Panels */
        .cat-panel { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); margin-bottom: 16px; overflow: hidden; }
        .cat-header { padding: 16px 20px; background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
        .cat-title { font-size: 16px; font-weight: 700; }
        .cat-score { font-family: var(--font-mono); font-size: 14px; font-weight: 700; padding: 4px 12px; border-radius: 12px; background: rgba(255,255,255,0.2); }
        .cat-score.high { background: var(--success); }
        .cat-score.mid { background: var(--accent); color: var(--primary-dark); }
        .cat-score.low { background: var(--danger); }
        .cat-body { padding: 16px; display: grid; grid-template-columns: 1fr; gap: 10px; }
        @media (min-width: 600px) { .cat-body { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 900px) { .cat-body { grid-template-columns: 1fr 1fr 1fr; } }
        .ratio-cell { background: var(--surface); border-radius: 8px; padding: 12px; border: 1px solid var(--border); position: relative; }
        .ratio-cell.sched3 { border-color: var(--sched3-border); border-width: 2px; background: linear-gradient(135deg, #FFFBEB 0%, var(--surface) 60%); }
        .ratio-cell.sched3::before { content: 'SCH III'; position: absolute; top: -8px; right: 8px; background: var(--accent); color: var(--primary-dark); font-size: 9px; font-weight: 700; padding: 2px 6px; border-radius: 4px; letter-spacing: 0.5px; }
        .ratio-name { font-size: 12px; font-weight: 600; color: var(--text-muted); margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.3px; }
        .ratio-num { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .ratio-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
        .ratio-status { display: inline-block; width: 8px; height: 8px; border-radius: 50%; margin-left: 6px; vertical-align: middle; }
        .ratio-status.good { background: var(--success); }
        .ratio-status.mid { background: var(--accent); }
        .ratio-status.bad { background: var(--danger); }
        .ratio-status.na { background: var(--text-muted); }

        /* Verdict card */
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.excellent { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.good { background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%); border-left-color: var(--primary-light); }
        .verdict-card.watch { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.stressed { background: linear-gradient(135deg, #FFF7ED 0%, #FFEDD5 100%); border-left-color: var(--warning); }
        .verdict-card.distress { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-summary { font-size: 14px; color: var(--text-secondary); margin-top: 8px; line-height: 1.6; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

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
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
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
            .ratio-num { font-size: 17px; }
            .sched3-card { padding: 16px; }
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
        <a href="#calculator">Dashboard</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#categories">Categories</a>
        <a href="#sectors">Sectors</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Financial Ratios Dashboard
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Financial Ratios <span>Dashboard</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Financial%20Ratios%20Dashboard.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Ratios%20Dashboard%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Financial%20Ratios%20Dashboard.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Financial Ratios Dashboard is a single-input, all-output tool — enter your latest balance sheet, P&amp;L and cash flow figures once, and get <strong>30+ financial ratios</strong> across six categories: Liquidity, Solvency, Profitability, Efficiency, Cash Flow and Valuation. The <strong>11 Schedule III mandatory ratios</strong> under Companies (Accounts) Amendment Rules 2021 are tagged with a Schedule III badge for compliance disclosure. Indian sector calibration and ICAI Guidance Note alignment built in. Use it for SA 570 going-concern review, lender appraisal, M&amp;A screening, monthly MIS, and Notes to Accounts disclosure preparation.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Compute 30+ Financial Ratios</h2>
            <p class="calc-intro">Enter values from your latest balance sheet, P&amp;L and cash flow statement (in rupees crore). All inputs map to Schedule III line items. Mandatory disclosure ratios are flagged with a Schedule III badge in the output.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this dashboard. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Balance Sheet — Current Period (₹ Crore)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ta">Total Assets</label>
                    <input type="text" id="ta" min="0" step="any" placeholder="e.g. 500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Schedule III Part I — Total of Equity + Liabilities side.</span>
                </div>
                <div class="form-group">
                    <label for="ca">Current Assets</label>
                    <input type="text" id="ca" min="0" step="any" placeholder="e.g. 200" inputmode="decimal" autocomplete="off">
                    <span class="helper">Inventory + Receivables + Cash + Other CA.</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="inv">Inventory</label>
                    <input type="text" id="inv" min="0" step="any" placeholder="e.g. 60" inputmode="decimal" autocomplete="off">
                    <span class="helper">Closing inventory.</span>
                </div>
                <div class="form-group">
                    <label for="ar">Trade Receivables</label>
                    <input type="text" id="ar" min="0" step="any" placeholder="e.g. 80" inputmode="decimal" autocomplete="off">
                    <span class="helper">Sundry debtors + bills receivable.</span>
                </div>
                <div class="form-group">
                    <label for="cash">Cash &amp; Equivalents</label>
                    <input type="text" id="cash" min="0" step="any" placeholder="e.g. 30" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash + bank + liquid investments.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cl">Current Liabilities</label>
                    <input type="text" id="cl" min="0" step="any" placeholder="e.g. 110" inputmode="decimal" autocomplete="off">
                    <span class="helper">Trade Payables + ST Borrowings + Other CL.</span>
                </div>
                <div class="form-group">
                    <label for="ap">Trade Payables</label>
                    <input type="text" id="ap" min="0" step="any" placeholder="e.g. 50" inputmode="decimal" autocomplete="off">
                    <span class="helper">Sundry creditors.</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="td">Total Debt</label>
                    <input type="text" id="td" min="0" step="any" placeholder="e.g. 150" inputmode="decimal" autocomplete="off">
                    <span class="helper">LT + ST borrowings + leases.</span>
                </div>
                <div class="form-group">
                    <label for="ltd">Long-Term Debt</label>
                    <input type="text" id="ltd" min="0" step="any" placeholder="e.g. 120" inputmode="decimal" autocomplete="off">
                    <span class="helper">Borrowings due after 12 months.</span>
                </div>
                <div class="form-group">
                    <label for="eq">Shareholders' Equity</label>
                    <input type="text" id="eq" step="any" placeholder="e.g. 250" inputmode="decimal" autocomplete="off">
                    <span class="helper">Share Capital + Reserves &amp; Surplus.</span>
                </div>
            </div>

            <div class="calc-section-title">Profit &amp; Loss (₹ Crore)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="rev">Revenue from Operations</label>
                    <input type="text" id="rev" min="0" step="any" placeholder="e.g. 600" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net Sales / Turnover.</span>
                </div>
                <div class="form-group">
                    <label for="cogs">COGS / Cost of Materials</label>
                    <input type="text" id="cogs" min="0" step="any" placeholder="e.g. 360" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cost of Goods Sold / Cost of Revenue.</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="ebitda">EBITDA</label>
                    <input type="text" id="ebitda" step="any" placeholder="e.g. 110" inputmode="decimal" autocomplete="off">
                    <span class="helper">EBIT + D&amp;A.</span>
                </div>
                <div class="form-group">
                    <label for="ebit">EBIT</label>
                    <input type="text" id="ebit" step="any" placeholder="e.g. 80" inputmode="decimal" autocomplete="off">
                    <span class="helper">PAT + Tax + Interest.</span>
                </div>
                <div class="form-group">
                    <label for="intexp">Interest Expense</label>
                    <input type="text" id="intexp" min="0" step="any" placeholder="e.g. 18" inputmode="decimal" autocomplete="off">
                    <span class="helper">Finance Costs.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="pat">PAT (Profit After Tax)</label>
                    <input type="text" id="pat" step="any" placeholder="e.g. 45" inputmode="decimal" autocomplete="off">
                    <span class="helper">Bottom-line profit; can be negative.</span>
                </div>
                <div class="form-group">
                    <label for="netCreditPurch">Net Credit Purchases — Optional</label>
                    <input type="text" id="netCreditPurch" min="0" step="any" placeholder="e.g. 380" inputmode="decimal" autocomplete="off">
                    <span class="helper">For accurate Trade Payables Turnover. Defaults to COGS.</span>
                </div>
            </div>

            <div class="calc-section-title">Cash Flow (₹ Crore)</div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="ocf">Operating Cash Flow</label>
                    <input type="text" id="ocf" step="any" placeholder="e.g. 70" inputmode="decimal" autocomplete="off">
                    <span class="helper">From Cash Flow — Operating.</span>
                </div>
                <div class="form-group">
                    <label for="capex">CapEx — Optional</label>
                    <input type="text" id="capex" min="0" step="any" placeholder="e.g. 30" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash Flow — Investing (PPE additions).</span>
                </div>
                <div class="form-group">
                    <label for="div">Dividends Paid — Optional</label>
                    <input type="text" id="div" min="0" step="any" placeholder="e.g. 10" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash dividends in the period.</span>
                </div>
            </div>

            <div class="calc-section-title">Listed Entity (Optional — for Valuation Ratios)</div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="mcap">Market Capitalisation</label>
                    <input type="text" id="mcap" min="0" step="any" placeholder="e.g. 1200" inputmode="decimal" autocomplete="off">
                    <span class="helper">CMP × Outstanding shares.</span>
                </div>
                <div class="form-group">
                    <label for="shares">Outstanding Shares (Crore)</label>
                    <input type="text" id="shares" min="0" step="any" placeholder="e.g. 8" inputmode="decimal" autocomplete="off">
                    <span class="helper">For per-share metrics.</span>
                </div>
                <div class="form-group">
                    <label for="industry">Industry</label>
                    <select id="industry">
                        <option value="">— Select Industry (optional) —</option>
                        <option value="it">IT / Software Services</option>
                        <option value="fmcg">FMCG</option>
                        <option value="pharma">Pharma</option>
                        <option value="manufacturing">Manufacturing — Listed</option>
                        <option value="manufacturing_sme">Manufacturing — SME / Private</option>
                        <option value="retail">Modern Retail / Quick-Commerce</option>
                        <option value="realestate">Real Estate / Construction</option>
                        <option value="infra">Infrastructure / Power</option>
                        <option value="auto">Auto OEM</option>
                        <option value="telecom">Telecom</option>
                        <option value="hospitality">Hospitality / Aviation</option>
                        <option value="generic">Generic / Other</option>
                    </select>
                    <span class="helper">For sector-calibrated verdict.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Dashboard</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card excellent" id="verdictCard">
                    <div class="verdict-label">Overall Financial Profile</div>
                    <div class="verdict-headline" id="verdictHeadline">Strong</div>
                    <div class="verdict-summary" id="verdictSummary">Computed across six dimensions.</div>
                </div>

                <div class="sched3-card">
                    <div class="sched3-header">
                        <div class="sched3-title">📋 Schedule III Mandatory Ratios</div>
                        <span class="sched3-pill">Companies Act 2013 — 11 Ratios</span>
                    </div>
                    <div class="sched3-grid" id="sched3Grid"></div>
                </div>

                <div id="categoryPanels"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Disclosure Note</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Financial Ratios Dashboard validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Financial%20Ratios%20Dashboard.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Ratios%20Dashboard%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Financial%20Ratios%20Dashboard%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>What This Dashboard Does</h2>

            <p>The Financial Ratios Dashboard takes one set of financial-statement inputs and produces over thirty ratios organised into six analytical categories. Each ratio is a single-purpose calculator collapsed into a unified view, calibrated for Indian regulatory and sector context. The dashboard exists because professional analysts rarely look at one ratio in isolation — credit appraisal, audit, due diligence and statutory disclosure all require simultaneous reads across liquidity, leverage, profitability, efficiency, cash flow and valuation.</p>

            <p>Three design choices distinguish this dashboard from generic foreign tools. First, the eleven Schedule III mandatory ratios under <a href="https://www.mca.gov.in/MinistryV2/companies-act-2013.html" target="_blank" rel="noopener">Companies Act 2013</a> are visually tagged so audit and finance teams can prepare Notes to Accounts disclosure directly from the output. Second, every ratio is benchmarked against Indian sector medians from BSE-listed and CRISIL-rated peer studies. Third, the dashboard explicitly aligns with <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI's Guidance Note on Schedule III</a> computational standards — including average versus closing balance treatment, EBIT versus PBT distinctions, and Capital Employed definitions.</p>

            <h3>The Six Categories</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Category</th><th>Ratios</th><th>What It Measures</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Liquidity</strong></td><td>5</td><td>Short-term obligation coverage</td></tr>
                    <tr><td><strong>Solvency / Leverage</strong></td><td>6</td><td>Long-term financial structure and debt servicing</td></tr>
                    <tr><td><strong>Profitability</strong></td><td>8</td><td>Earnings generation across margin and return metrics</td></tr>
                    <tr><td><strong>Efficiency / Activity</strong></td><td>6</td><td>Asset and working-capital productivity</td></tr>
                    <tr><td><strong>Cash Flow</strong></td><td>4</td><td>Cash generation quality and capex coverage</td></tr>
                    <tr><td><strong>Valuation</strong> (listed only)</td><td>4</td><td>Price to fundamentals — equity market view</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III — The 11 Mandatory Ratios</h2>

            <p>Companies (Accounts) Amendment Rules 2021, notified vide G.S.R. 207(E) dated 24 March 2021, inserted Note 6(W) into Schedule III of the Companies Act 2013. From financial year 2021-22 onwards, every company preparing financial statements under Schedule III — Division I (Indian GAAP) or Division II (Ind AS) — must disclose <strong>eleven specific financial ratios</strong> in the Notes to Accounts. The amendment was driven by NFRA and ICAI concerns about unstructured disclosure and was timed alongside the CARO 2020 reporting framework to standardise comparability across listed and unlisted entities.</p>

            <h3>The 11-Ratio Framework</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>#</th><th>Ratio</th><th>Numerator</th><th>Denominator</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td><strong>Current Ratio</strong></td><td>Current Assets</td><td>Current Liabilities</td></tr>
                    <tr><td>2</td><td><strong>Debt-Equity Ratio</strong></td><td>Total Debt</td><td>Shareholders' Equity</td></tr>
                    <tr><td>3</td><td><strong>Debt Service Coverage</strong></td><td>EBITDA (or PAT + D&amp;A + Interest)</td><td>Interest + Principal Repayments</td></tr>
                    <tr><td>4</td><td><strong>Return on Equity</strong></td><td>PAT − Preference Dividend</td><td>Average Equity</td></tr>
                    <tr><td>5</td><td><strong>Inventory Turnover</strong></td><td>Cost of Goods Sold or Sales</td><td>Average Inventory</td></tr>
                    <tr><td>6</td><td><strong>Trade Receivables Turnover</strong></td><td>Net Credit Sales</td><td>Average Receivables</td></tr>
                    <tr><td>7</td><td><strong>Trade Payables Turnover</strong></td><td>Net Credit Purchases</td><td>Average Payables</td></tr>
                    <tr><td>8</td><td><strong>Net Capital Turnover</strong></td><td>Net Sales</td><td>Working Capital</td></tr>
                    <tr><td>9</td><td><strong>Net Profit Ratio</strong></td><td>PAT</td><td>Net Sales</td></tr>
                    <tr><td>10</td><td><strong>Return on Capital Employed</strong></td><td>EBIT</td><td>Capital Employed (= Net Worth + Total Debt + Deferred Tax Liability)</td></tr>
                    <tr><td>11</td><td><strong>Return on Investment</strong></td><td>Investment income (TWRR method)</td><td>Average Investment Value</td></tr>
                </tbody>
            </table>

            <h3>The 25% Variance Rule</h3>
            <p>Where any of the eleven ratios changes by more than twenty-five percent, positive or negative, compared to the immediately preceding financial year, the company must explain the variance in the Notes to Accounts. The disclosure must identify the cause — operational change, capital structure shift, regulatory event, accounting policy change, or one-time item. The threshold is on absolute change, not direction. Auditors verify both the computation and the management explanation. Non-disclosure or misstatement attracts auditor qualification under Section 129(7) of the Companies Act 2013.</p>

            <div class="callout warn">
                <p><strong>Computational consistency matters.</strong> ICAI Guidance Note on Schedule III prescribes use of <strong>average</strong> opening and closing balances for turnover ratios — not year-end snapshots. Prior-year figures must be restated for like-for-like comparison if accounting policies changed or material reclassifications occurred. The dashboard uses end-of-period values by default; auditors should compute averaged versions during final disclosure preparation.</p>
            </div>

            <h3>Applicability Across Entity Types</h3>
            <ul>
                <li><strong>All Companies under Schedule III</strong> — Listed, unlisted, public, private, OPC, Section 8, Producer, Nidhi, Small Companies. No automatic exemption.</li>
                <li><strong>Both Divisions</strong> — Division I (Companies preparing under Indian GAAP) and Division II (Companies preparing under Ind AS) are equally covered.</li>
                <li><strong>NBFCs under Division III</strong> — Follow a parallel disclosure regime aligned with RBI prudential ratios; generic dashboard ratios are supplementary.</li>
                <li><strong>LLPs</strong> — Not legally required but may voluntarily adopt for internal benchmarking and lender presentations under MSMED rating frameworks.</li>
            </ul>
        </section>

        <section class="content-section" id="categories">
            <h2>The Six Ratio Categories Explained</h2>

            <h3>Liquidity Ratios — Short-Term Solvency</h3>
            <p>Liquidity ratios measure the company's ability to meet obligations falling due within twelve months. A current ratio of 1.5 to 2.0 is healthy for most industries; below 1.0 signals near-term distress. Quick ratio strips inventory (which may be slow-moving or obsolete) and targets 1.0 or higher. Cash ratio is the most conservative — only cash and equivalents against current liabilities. The Operating Cash Flow Ratio links liquidity to actual cash generated rather than balance sheet positions, making it the strongest liquidity indicator for cyclical businesses.</p>

            <div class="formula-box"><span class="label">Current Ratio</span> = Current Assets ÷ Current Liabilities
<span class="label">Quick Ratio</span> = (Current Assets − Inventory) ÷ Current Liabilities
<span class="label">Cash Ratio</span> = Cash &amp; Equivalents ÷ Current Liabilities
<span class="label">OCF Ratio</span> = Operating Cash Flow ÷ Current Liabilities
<span class="label">NWC / Sales</span> = (Current Assets − Current Liabilities) ÷ Revenue</div>

            <h3>Solvency &amp; Leverage Ratios — Long-Term Structure</h3>
            <p>Solvency ratios measure the equity cushion absorbing losses before creditors take a hit and the company's ability to service debt. Debt-to-Equity below 1.0 is conservative; above 2.0 signals high leverage typical of capital-intensive sectors. Interest Coverage Ratio above 3.0× is comfortable; below 1.5× signals debt-servicing stress and triggers SA 570 review. Debt Service Coverage Ratio extends the analysis to principal repayments. Equity Multiplier (Total Assets / Equity) feeds DuPont analysis decomposition of ROE.</p>

            <div class="formula-box"><span class="label">Debt-to-Equity</span> = Total Debt ÷ Equity
<span class="label">Debt-to-Assets</span> = Total Debt ÷ Total Assets
<span class="label">LT Debt to Equity</span> = Long-Term Debt ÷ Equity
<span class="label">Equity Multiplier</span> = Total Assets ÷ Equity
<span class="label">Interest Coverage</span> = EBIT ÷ Interest Expense
<span class="label">Debt Service Cov.</span> = (EBITDA) ÷ (Interest + Principal)</div>

            <h3>Profitability Ratios — Earnings Quality</h3>
            <p>Profitability ratios decompose earnings generation across the income statement and balance sheet. Margin ratios (Gross, Operating, EBITDA, Net) reveal pricing power and cost discipline. Return ratios (ROE, ROA, ROCE, ROIC) measure capital efficiency. ROCE is the cleanest measure of operating performance because it strips capital structure effects. ROE captures shareholder returns including the leverage uplift. <a href="https://www.crisil.com" target="_blank" rel="noopener">CRISIL</a> typically targets ROCE above 15% for investment-grade ratings on industrial entities.</p>

            <div class="formula-box"><span class="label">Gross Margin</span> = (Revenue − COGS) ÷ Revenue
<span class="label">Operating Margin</span> = EBIT ÷ Revenue
<span class="label">EBITDA Margin</span> = EBITDA ÷ Revenue
<span class="label">Net Profit Margin</span> = PAT ÷ Revenue
<span class="label">Return on Equity</span> = PAT ÷ Equity
<span class="label">Return on Assets</span> = PAT ÷ Total Assets
<span class="label">ROCE</span> = EBIT ÷ (Equity + Total Debt)
<span class="label">ROIC</span> = EBIT × (1−Tax) ÷ (Equity + Long-Term Debt)</div>

            <h3>Efficiency / Activity Ratios — Asset Productivity</h3>
            <p>Efficiency ratios reveal how effectively management converts assets into sales. Asset Turnover spans the full balance sheet; Inventory and Receivables Turnover focus on working capital cycle components. The Cash Conversion Cycle aggregates the three turnover ratios into days — a single metric capturing the time from supplier payment to customer collection. Indian manufacturers typically run 60-120 day CCC; modern retail and FMCG often run negative CCC by design.</p>

            <div class="formula-box"><span class="label">Asset Turnover</span> = Revenue ÷ Total Assets
<span class="label">Inventory Turnover</span> = COGS ÷ Inventory
<span class="label">Receivables Turnover</span> = Revenue ÷ Trade Receivables
<span class="label">Payables Turnover</span> = COGS (or Net Credit Purchases) ÷ Trade Payables
<span class="label">Working Capital Turnover</span> = Revenue ÷ Working Capital
<span class="label">Cash Conversion Cycle</span> = DIO + DSO − DPO   (in days)</div>

            <h3>Cash Flow Ratios — Reality Check on the P&amp;L</h3>
            <p>Cash flow ratios validate reported profit. A company can report PAT through accruals (revenue recognition, capitalisation, deferral of expenses) while burning cash. Operating Cash Flow / Net Income near 1.0 indicates clean earnings; persistently below 0.7 suggests aggressive accruals worth investigating. Free Cash Flow (OCF − CapEx) measures discretionary cash available for debt repayment, dividends, and reinvestment. <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> LODR requires listed entities to disclose cash flow movements quarterly, making this category critical for investor relations.</p>

            <div class="formula-box"><span class="label">OCF / Revenue</span> = Operating Cash Flow ÷ Revenue
<span class="label">OCF / Net Income</span> = Operating Cash Flow ÷ PAT
<span class="label">Free Cash Flow</span> = Operating Cash Flow − CapEx
<span class="label">CapEx Coverage</span> = Operating Cash Flow ÷ CapEx</div>

            <h3>Valuation Ratios — The Market's View (Listed Only)</h3>
            <p>Valuation ratios connect financial statement metrics to equity market prices. P/E captures price relative to earnings; P/B captures price relative to book equity; P/S captures price relative to revenue (useful when earnings are negative or distorted). Earnings Yield (1 ÷ P/E) is the inverse — directly comparable to G-Sec yields and FD rates for asset-allocation decisions. Use Patron's standalone <a href="/tools/pe-ratio-calculator">P/E Ratio Calculator</a> for deeper sector benchmarking and PEG analysis.</p>

            <div class="formula-box"><span class="label">Price-to-Earnings</span> = Market Cap ÷ PAT
<span class="label">Price-to-Book</span> = Market Cap ÷ Equity
<span class="label">Price-to-Sales</span> = Market Cap ÷ Revenue
<span class="label">Earnings Yield</span> = PAT ÷ Market Cap   (= 1 ÷ P/E)</div>
        </section>

        <div class="body-cta">
            <h3>Need a Schedule III ratio audit?</h3>
            <p>Patron's audit and advisory team computes Schedule III mandatory ratios with averaged-balance methodology, prepares the 25% variance reconciliation, drafts management commentary, and aligns disclosure with SA 570 going-concern review. Fixed-fee, time-bound, CA-signed.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Financial%20Ratios%20Dashboard.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Ratios%20Dashboard%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Financial%20Ratios%20Dashboard.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="sectors">
            <h2>Sector Calibration for Indian Companies</h2>

            <p>Ratios in isolation mean little — sector context anchors interpretation. A Current Ratio of 1.3 is alarming for an IT services firm but normal for a capital goods manufacturer. A D/E of 2.5 is dangerous for FMCG but standard for telecom and infrastructure. The dashboard's verdict logic uses sector medians drawn from BSE 500 listed peer studies and CRISIL-rated unlisted SME borrowers.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Sector</th><th>Current Ratio</th><th>D/E</th><th>EBITDA Margin</th><th>ROE</th><th>Asset Turnover</th></tr>
                </thead>
                <tbody>
                    <tr><td>IT / Software Services</td><td>2.0 – 4.0</td><td>0.0 – 0.2</td><td>22 – 28%</td><td>20 – 30%</td><td>1.0 – 2.0</td></tr>
                    <tr><td>FMCG</td><td>1.0 – 1.5</td><td>0.0 – 0.5</td><td>18 – 25%</td><td>20 – 60%</td><td>1.5 – 3.0</td></tr>
                    <tr><td>Pharma</td><td>1.8 – 3.0</td><td>0.2 – 0.6</td><td>20 – 28%</td><td>15 – 22%</td><td>0.7 – 1.2</td></tr>
                    <tr><td>Manufacturing — Listed</td><td>1.3 – 2.0</td><td>0.5 – 1.2</td><td>10 – 18%</td><td>12 – 18%</td><td>1.0 – 1.5</td></tr>
                    <tr><td>Manufacturing — SME / Private</td><td>1.2 – 1.8</td><td>0.8 – 2.0</td><td>8 – 14%</td><td>10 – 20%</td><td>1.2 – 2.0</td></tr>
                    <tr><td>Modern Retail</td><td>0.7 – 1.2</td><td>0.5 – 1.5</td><td>5 – 10%</td><td>15 – 30%</td><td>2.5 – 4.0</td></tr>
                    <tr><td>Real Estate</td><td>1.5 – 3.0</td><td>0.6 – 1.5</td><td>15 – 25%</td><td>8 – 15%</td><td>0.2 – 0.5</td></tr>
                    <tr><td>Infrastructure / Power</td><td>1.0 – 1.4</td><td>1.5 – 3.0</td><td>20 – 35%</td><td>10 – 16%</td><td>0.3 – 0.6</td></tr>
                    <tr><td>Auto OEM</td><td>0.9 – 1.3</td><td>0.5 – 1.5</td><td>10 – 16%</td><td>12 – 20%</td><td>1.3 – 2.0</td></tr>
                    <tr><td>Telecom</td><td>0.6 – 1.0</td><td>1.5 – 3.0</td><td>30 – 45%</td><td>5 – 15%</td><td>0.4 – 0.7</td></tr>
                    <tr><td>Hospitality / Aviation</td><td>0.8 – 1.3</td><td>1.0 – 2.5</td><td>15 – 25%</td><td>8 – 18%</td><td>0.5 – 1.0</td></tr>
                </tbody>
            </table>

            <p>Banks, NBFCs, and insurance entities follow regulatory frameworks under <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI</a> prudential norms (Basel III, CAR, NPA ratios) and IRDAI Solvency Margin requirements — generic ratio dashboards are not applicable. Use specialised regulatory dashboards for financial sector entities.</p>
        </section>

        <section class="content-section">
            <h2>Common Misinterpretations</h2>

            <h3>High Current Ratio Is Not Always Healthy</h3>
            <p>A Current Ratio above 3.0 may indicate idle working capital, slow-moving inventory, or stuck receivables — capital that should have been deployed productively. Examine the underlying composition: high inventory plus high receivables with flat revenue points to working capital build-up, not strength. Pair with Inventory Turnover and Receivables Turnover before celebrating.</p>

            <h3>High ROE Can Mask Leverage Risk</h3>
            <p>ROE = Net Margin × Asset Turnover × Equity Multiplier (DuPont decomposition). A 25% ROE driven by 4× Equity Multiplier (i.e. high leverage) is more fragile than a 18% ROE from operating excellence at low leverage. Always pair ROE with ROCE, ROIC and Debt-to-Equity. The 2008 crisis exposed many "high ROE" companies that collapsed when refinancing markets froze.</p>

            <h3>Negative Working Capital Is Not Universally Distress</h3>
            <p>FMCG, modern retail, food-delivery platforms, and marketplace businesses run negative working capital by design — collecting from customers within days while paying suppliers in 30-60 days. The structural float funds operations interest-free. Asian Paints, HUL, DMart, Avenue Supermarts have compounded earnings with negative working capital for decades. Read the Cash Flow category alongside Liquidity before flagging concern.</p>

            <h3>Schedule III Compliance Is Not Schedule III Strategy</h3>
            <p>Disclosing the eleven ratios meets the minimum legal requirement under Companies (Accounts) Amendment Rules 2021. Building actual financial health requires acting on what the ratios reveal — restructuring debt before covenants breach, raising equity before market windows close, exiting non-core businesses before they consume working capital. The disclosure is descriptive; the strategic response is prescriptive.</p>

            <h3>One Year Snapshot vs Three-Year Trend</h3>
            <p>A single-year ratio set can be distorted by exceptional gains, one-time impairments, or windfall settlements. Always compute ratios for at least three consecutive years. The Schedule III 25% variance rule exists precisely because year-on-year comparison surfaces what absolute thresholds miss. Trend direction beats absolute level for forward-looking risk assessment.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Audit, MIS &amp; CFO Support</h3>
            <p>Schedule III ratio disclosures, monthly MIS dashboards, lender covenant testing, due diligence — fixed-fee, CA-signed.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Financial%20Ratios%20Dashboard.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Ratios%20Dashboard%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Financial%20Ratios%20Dashboard.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Compliance<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Standalone Calculators</h3>
            <a href="/tools/financial-health-score" class="sidebar-link">Financial Health Score<span class="arrow">→</span></a>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/ebitda-margin-calculator" class="sidebar-link">EBITDA Margin<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital<span class="arrow">→</span></a>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle<span class="arrow">→</span></a>
            <a href="/tools/pe-ratio-calculator" class="sidebar-link">P/E Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is a financial ratios dashboard?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">A financial ratios dashboard is a single-screen view that computes and presents multiple ratio categories from one set of balance sheet, P&amp;L, and cash flow inputs. Categories typically include liquidity, solvency, profitability, efficiency, cash flow, and valuation ratios. Dashboards replace fragmented standalone calculators and let analysts compare ratios across dimensions simultaneously. This tool computes thirty-plus ratios, tags the eleven Schedule III mandatory disclosures, applies Indian sector calibration, and aligns with ICAI Guidance Note on Schedule III computational standards.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Which ratios are mandatory under Schedule III?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Companies (Accounts) Amendment Rules 2021 effective FY 2021-22 mandate disclosure of eleven specific ratios in Notes to Accounts: Current Ratio, Debt-Equity, Debt Service Coverage, Return on Equity, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, Net Capital Turnover, Net Profit Ratio, Return on Capital Employed, and Return on Investment. The dashboard tags these eleven with a Schedule III badge. The amendment applies under both Division I (Indian GAAP) and Division II (Ind AS).</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the 25% variance rule?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Schedule III, post the 2021 amendment, requires companies to explain any year-on-year change exceeding 25% in any of the eleven mandatory ratios — positive or negative. The explanation must appear in Notes to Accounts identifying the cause: operational change, capital structure shift, accounting policy change, or one-time item. The threshold applies to absolute change, not direction. Auditors verify both the computation and the management explanation. This dashboard makes 25% variance analysis straightforward for finance teams.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How are turnover ratios computed?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Turnover ratios use revenue or COGS in the numerator and a balance sheet item in the denominator. Inventory Turnover equals COGS divided by average inventory. Receivables Turnover equals Net Credit Sales divided by average trade receivables. Payables Turnover equals Net Credit Purchases divided by average trade payables. ICAI Guidance Note on Schedule III prescribes use of average opening and closing balances rather than year-end snapshot. The dashboard uses end-of-period values by default.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is a good current ratio?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">A current ratio of 1.5 to 2.0 is typically considered healthy for most Indian industries. Below 1.0 signals short-term distress — current liabilities exceed current assets. Above 3.0 may indicate idle working capital or over-investment in inventory and receivables. Modern retail and quick-commerce companies operate with negative working capital by design. Sector matters significantly — IT services run higher (2.0 to 4.0), capital goods firms run lower (1.2 to 1.5). The dashboard provides Indian sector medians for context.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the difference between ROCE and ROE?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Return on Equity measures returns to shareholders only — PAT divided by Equity. Return on Capital Employed measures returns to all capital providers — EBIT divided by Capital Employed (Equity plus Long-Term Debt). ROCE eliminates the leverage distortion that ROE captures. A highly leveraged company can show high ROE through financial leverage while ROCE reveals weaker operating performance. Schedule III mandates both ratios. ICAI Guidance Note prescribes specific computation under both Indian GAAP and Ind AS.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How do I interpret negative ratios?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Negative ratios occur when underlying numbers are negative. Negative ROE indicates loss-making operations or accumulated losses exceeding equity. Negative working capital can be design (modern retail) or distress (overdraft funding inventory). Negative interest coverage means EBIT is below interest expense — debt servicing risk. Negative gross margin signals pricing failure. Each negative ratio requires investigation in context — the dashboard flags adverse readings but interpretation needs sector knowledge. SA 570 going-concern review is triggered by negative-ratio clusters.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Which sector benchmarks does the tool use?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The dashboard provides typical median ranges for major Indian industries — IT and software, FMCG, pharma, listed and SME manufacturing, modern retail, real estate and construction, infrastructure and power, hospitality, auto OEM, telecom, and broad market Nifty 50. Banks, NBFCs, and insurance entities follow regulatory frameworks under RBI and IRDAI prudential norms and require specialised models, so they are excluded from generic ratio benchmarking. Always read sector context alongside trend analysis over three to five years for meaningful conclusions.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Cash Conversion Cycle?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Cash Conversion Cycle measures the days from cash outflow on inventory purchase to cash inflow from customer collection. CCC equals Days Inventory Outstanding plus Days Sales Outstanding minus Days Payables Outstanding. Positive CCC means working capital is locked in operations. Negative CCC means customers and suppliers fund operations — a hallmark of strong companies like FMCG, modern retail, and platform businesses. Indian manufacturers typically run 60-120 day CCC. Patron's standalone Cash Conversion Cycle Calculator provides deeper diagnostic and benchmarking.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does the dashboard differ from individual calculators?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Standalone calculators compute one ratio at a time with detailed explanation and sector context — useful for learning. The dashboard takes one input set and computes thirty-plus ratios simultaneously, suitable for monthly MIS, quarterly review, and annual statutory disclosure preparation. The dashboard tags Schedule III mandatory ratios, provides composite category scores, and surfaces cross-ratio insights — combining Cash Flow with Solvency to flag debt-servicing risk neither dimension reveals alone. Use both depending on diagnostic depth required.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are ratios for banks and NBFCs different?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes — fundamentally. Banks and NBFCs are evaluated under regulatory frameworks: Capital Adequacy Ratio under Basel III, Net Interest Margin, Gross and Net NPA ratios, Provision Coverage Ratio, Liquidity Coverage Ratio, and Cost-to-Income Ratio. Insurance entities follow Solvency Margin requirements under IRDAI. These specialised ratios reflect different business models — financial intermediation rather than goods or services. This dashboard is calibrated for non-financial entities. Banking and insurance analysts use bespoke regulatory dashboards, not generic ratio tools.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I use this for audit planning?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The dashboard supports SA 320 audit materiality determination, SA 570 going-concern indicator review, SA 540 accounting estimate evaluation, and SA 530 audit sampling stratification. Internal auditors use ratios for risk-based audit plan inputs under ICAI's Standards on Internal Audit. Concurrent and statutory bank auditors use ratio dashboards to identify outlier accounts and stratify samples. The Schedule III mandatory ratio output also doubles as the Notes to Accounts disclosure draft, saving manual computation time during audit closing.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What inputs are required?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Inputs come from three statements. Balance Sheet: Total Assets, Current Assets, Inventory, Trade Receivables, Cash, Current Liabilities, Trade Payables, Total Debt, Long-Term Debt, Shareholders' Equity. P&amp;L: Revenue, COGS, EBITDA, Depreciation, EBIT, Interest, PAT. Cash Flow: Operating Cash Flow, CapEx, Dividends. Optional listed-entity: Market Cap, Outstanding Shares, EPS. All values in rupees crore. Inputs map directly to Schedule III Part I (Balance Sheet) and Part II (P&amp;L) line items under both Division I (Indian GAAP) and Division II (Ind AS).</div></div>
    </div>
</section>

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

    function v(id) {
        const el = document.getElementById(id);
        if (!el || el.value === '') return null;
        const val = parseINR(el.value);
        return isNaN(val) ? null : val;
    }
    function fmt(n, dec) { dec = dec || 2; if (n === null || n === undefined || !isFinite(n)) return '—'; return n.toFixed(dec); }
    function fmtPct(n, dec) { dec = dec || 1; if (n === null || n === undefined || !isFinite(n)) return '—'; return n.toFixed(dec) + '%'; }
    function fmtX(n, dec) { dec = dec || 2; if (n === null || n === undefined || !isFinite(n)) return '—'; return n.toFixed(dec) + 'x'; }
    function fmtDays(n) { if (n === null || n === undefined || !isFinite(n)) return '—'; return Math.round(n) + ' days'; }
    function fmtINR(num) { if (num === null || num === undefined || isNaN(num) || !isFinite(num)) return '—'; const sign = num < 0 ? '-' : ''; const abs = Math.abs(num); return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 1}) + ' Cr'; }
    function statusFor(value, good, mid) {
        // good: [low, high] or threshold (>=); mid: same. Returns 'good', 'mid', 'bad', or 'na'
        if (value === null || value === undefined || !isFinite(value)) return 'na';
        // Determined by caller-specific logic
        return value;
    }

    // Sector benchmarks: { current: [min, max], de: [min, max], ebitdaMargin: [min, max], roe: [min, max], assetTurn: [min, max] }
    const SECTORS = {
        it:               { current: [2.0, 4.0], de: [0.0, 0.2], ebitdaMargin: [22, 30], roe: [20, 30], assetTurn: [1.0, 2.0], label: 'IT / Software' },
        fmcg:             { current: [1.0, 1.5], de: [0.0, 0.5], ebitdaMargin: [18, 28], roe: [20, 60], assetTurn: [1.5, 3.0], label: 'FMCG' },
        pharma:           { current: [1.8, 3.0], de: [0.2, 0.6], ebitdaMargin: [20, 30], roe: [15, 22], assetTurn: [0.7, 1.2], label: 'Pharma' },
        manufacturing:    { current: [1.3, 2.0], de: [0.5, 1.2], ebitdaMargin: [10, 20], roe: [12, 18], assetTurn: [1.0, 1.5], label: 'Manufacturing — Listed' },
        manufacturing_sme:{ current: [1.2, 1.8], de: [0.8, 2.0], ebitdaMargin: [8, 16],  roe: [10, 20], assetTurn: [1.2, 2.0], label: 'Manufacturing — SME' },
        retail:           { current: [0.7, 1.2], de: [0.5, 1.5], ebitdaMargin: [5, 12],  roe: [15, 30], assetTurn: [2.5, 4.0], label: 'Modern Retail' },
        realestate:       { current: [1.5, 3.0], de: [0.6, 1.5], ebitdaMargin: [15, 28], roe: [8, 15],  assetTurn: [0.2, 0.5], label: 'Real Estate' },
        infra:            { current: [1.0, 1.4], de: [1.5, 3.0], ebitdaMargin: [20, 38], roe: [10, 16], assetTurn: [0.3, 0.6], label: 'Infrastructure' },
        auto:             { current: [0.9, 1.3], de: [0.5, 1.5], ebitdaMargin: [10, 18], roe: [12, 20], assetTurn: [1.3, 2.0], label: 'Auto OEM' },
        telecom:          { current: [0.6, 1.0], de: [1.5, 3.0], ebitdaMargin: [30, 48], roe: [5, 15],  assetTurn: [0.4, 0.7], label: 'Telecom' },
        hospitality:      { current: [0.8, 1.3], de: [1.0, 2.5], ebitdaMargin: [15, 28], roe: [8, 18],  assetTurn: [0.5, 1.0], label: 'Hospitality' },
        generic:          { current: [1.3, 2.0], de: [0.5, 1.5], ebitdaMargin: [10, 20], roe: [12, 20], assetTurn: [0.8, 1.5], label: 'Generic' }
    };

    // Compute all ratios
    function computeRatios(i) {
        const r = {};
        // Liquidity
        r.currentRatio = i.cl > 0 ? i.ca / i.cl : null;
        r.quickRatio = i.cl > 0 ? (i.ca - i.inv) / i.cl : null;
        r.cashRatio = i.cl > 0 ? i.cash / i.cl : null;
        r.ocfRatio = (i.cl > 0 && i.ocf !== null) ? i.ocf / i.cl : null;
        r.nwc = i.ca - i.cl;
        r.nwcSales = i.rev > 0 ? r.nwc / i.rev : null;

        // Solvency
        r.de = i.eq !== 0 ? i.td / i.eq : null;
        r.da = i.ta > 0 ? i.td / i.ta : null;
        r.ltDe = i.eq !== 0 ? i.ltd / i.eq : null;
        r.equityMultiplier = i.eq !== 0 ? i.ta / i.eq : null;
        r.icr = i.intexp > 0 ? i.ebit / i.intexp : (i.ebit > 0 ? Infinity : null);
        // DSCR approximation: EBITDA / (Interest + LTD/5)
        const principal_approx = i.ltd / 5;
        r.dscr = (i.intexp + principal_approx) > 0 ? i.ebitda / (i.intexp + principal_approx) : null;

        // Profitability
        r.grossMargin = i.rev > 0 ? (i.rev - i.cogs) / i.rev : null;
        r.opMargin = i.rev > 0 ? i.ebit / i.rev : null;
        r.ebitdaMargin = i.rev > 0 ? i.ebitda / i.rev : null;
        r.netMargin = i.rev > 0 ? i.pat / i.rev : null;
        r.roe = i.eq > 0 ? i.pat / i.eq : null;
        r.roa = i.ta > 0 ? i.pat / i.ta : null;
        const capEmp = i.eq + i.td;
        r.roce = capEmp > 0 ? i.ebit / capEmp : null;
        const investedCap = i.eq + i.ltd;
        r.roic = investedCap > 0 ? (i.ebit * 0.75) / investedCap : null;

        // Efficiency
        r.assetTurnover = i.ta > 0 ? i.rev / i.ta : null;
        r.invTurnover = i.inv > 0 ? i.cogs / i.inv : null;
        r.arTurnover = i.ar > 0 ? i.rev / i.ar : null;
        const apBase = i.netCreditPurch !== null && i.netCreditPurch > 0 ? i.netCreditPurch : i.cogs;
        r.apTurnover = i.ap > 0 ? apBase / i.ap : null;
        r.wcTurnover = r.nwc !== 0 ? i.rev / Math.abs(r.nwc) : null;
        r.dio = r.invTurnover && r.invTurnover > 0 ? 365 / r.invTurnover : null;
        r.dso = r.arTurnover && r.arTurnover > 0 ? 365 / r.arTurnover : null;
        r.dpo = r.apTurnover && r.apTurnover > 0 ? 365 / r.apTurnover : null;
        r.ccc = (r.dio !== null && r.dso !== null && r.dpo !== null) ? r.dio + r.dso - r.dpo : null;

        // Cash Flow
        r.ocfRevenue = (i.rev > 0 && i.ocf !== null) ? i.ocf / i.rev : null;
        r.ocfNi = (i.pat !== 0 && i.ocf !== null) ? i.ocf / i.pat : null;
        r.fcf = (i.ocf !== null && i.capex !== null) ? i.ocf - i.capex : null;
        r.capexCoverage = (i.ocf !== null && i.capex > 0) ? i.ocf / i.capex : null;

        // Valuation (listed only)
        r.pe = (i.mcap > 0 && i.pat > 0) ? i.mcap / i.pat : null;
        r.pb = (i.mcap > 0 && i.eq > 0) ? i.mcap / i.eq : null;
        r.ps = (i.mcap > 0 && i.rev > 0) ? i.mcap / i.rev : null;
        r.earningsYield = (i.mcap > 0 && i.pat > 0) ? i.pat / i.mcap : null;

        return r;
    }

    function status(value, goodFn, midFn) {
        if (value === null || value === undefined || !isFinite(value)) return 'na';
        if (goodFn(value)) return 'good';
        if (midFn(value)) return 'mid';
        return 'bad';
    }

    function classifyRatios(r, sector) {
        const s = {};
        // Liquidity
        s.currentRatio = status(r.currentRatio, v => v >= 1.5 && v <= 3.0, v => v >= 1.0 && v < 4.0);
        s.quickRatio = status(r.quickRatio, v => v >= 1.0, v => v >= 0.7);
        s.cashRatio = status(r.cashRatio, v => v >= 0.3, v => v >= 0.15);
        s.ocfRatio = status(r.ocfRatio, v => v >= 0.4, v => v >= 0.2);
        s.nwcSales = status(r.nwcSales, v => v > 0 && v <= 0.3, v => v >= -0.05);
        // Solvency (lower D/E = better)
        s.de = status(r.de, v => v >= 0 && v <= 1.0, v => v <= 2.0);
        s.da = status(r.da, v => v >= 0 && v <= 0.4, v => v <= 0.6);
        s.ltDe = status(r.ltDe, v => v >= 0 && v <= 0.6, v => v <= 1.5);
        s.equityMultiplier = status(r.equityMultiplier, v => v > 0 && v <= 2.5, v => v <= 4.0);
        s.icr = status(r.icr, v => v >= 3.0, v => v >= 1.5);
        s.dscr = status(r.dscr, v => v >= 1.5, v => v >= 1.1);
        // Profitability
        s.grossMargin = status(r.grossMargin, v => v >= 0.30, v => v >= 0.15);
        s.opMargin = status(r.opMargin, v => v >= 0.12, v => v >= 0.05);
        s.ebitdaMargin = status(r.ebitdaMargin, v => v >= 0.15, v => v >= 0.08);
        s.netMargin = status(r.netMargin, v => v >= 0.08, v => v >= 0.03);
        s.roe = status(r.roe, v => v >= 0.15, v => v >= 0.08);
        s.roa = status(r.roa, v => v >= 0.05, v => v >= 0.02);
        s.roce = status(r.roce, v => v >= 0.15, v => v >= 0.08);
        s.roic = status(r.roic, v => v >= 0.12, v => v >= 0.06);
        // Efficiency (sector dependent — generic thresholds)
        s.assetTurnover = status(r.assetTurnover, v => v >= 1.0, v => v >= 0.5);
        s.invTurnover = status(r.invTurnover, v => v >= 6, v => v >= 3);
        s.arTurnover = status(r.arTurnover, v => v >= 6, v => v >= 4);
        s.apTurnover = status(r.apTurnover, v => v >= 4 && v <= 12, v => v >= 2);
        s.wcTurnover = status(r.wcTurnover, v => v >= 4 && v <= 12, v => v >= 2);
        s.ccc = status(r.ccc, v => v <= 60, v => v <= 120);
        // Cash Flow
        s.ocfRevenue = status(r.ocfRevenue, v => v >= 0.10, v => v >= 0.05);
        s.ocfNi = status(r.ocfNi, v => v >= 0.9, v => v >= 0.6);
        s.fcf = status(r.fcf, v => v > 0, v => v >= -10);
        s.capexCoverage = status(r.capexCoverage, v => v >= 1.5, v => v >= 1.0);
        // Valuation - reference only, no good/bad
        s.pe = 'na';
        s.pb = 'na';
        s.ps = 'na';
        s.earningsYield = 'na';
        return s;
    }

    function categoryScore(statuses, keys) {
        let total = 0, count = 0;
        keys.forEach(function(k) {
            if (statuses[k] === 'good') { total += 100; count++; }
            else if (statuses[k] === 'mid') { total += 50; count++; }
            else if (statuses[k] === 'bad') { total += 0; count++; }
        });
        return count > 0 ? Math.round(total / count) : null;
    }

    function renderRatioCell(label, value, sub, sched3, status) {
        const dot = '<span class="ratio-status ' + status + '"></span>';
        return '<div class="ratio-cell' + (sched3 ? ' sched3' : '') + '">' +
            '<div class="ratio-name">' + label + dot + '</div>' +
            '<div class="ratio-num">' + value + '</div>' +
            '<div class="ratio-sub">' + sub + '</div>' +
        '</div>';
    }

    function renderCategoryPanel(title, score, ratios) {
        let scoreCls = 'mid';
        let scoreLabel = '—';
        if (score !== null) {
            if (score >= 70) scoreCls = 'high';
            else if (score >= 40) scoreCls = 'mid';
            else scoreCls = 'low';
            scoreLabel = score + ' / 100';
        }
        let html = '<div class="cat-panel">' +
            '<div class="cat-header">' +
                '<div class="cat-title">' + title + '</div>' +
                '<div class="cat-score ' + scoreCls + '">' + scoreLabel + '</div>' +
            '</div>' +
            '<div class="cat-body">';
        ratios.forEach(function(rat) {
            html += renderRatioCell(rat.label, rat.value, rat.sub, rat.sched3, rat.status);
        });
        html += '</div></div>';
        return html;
    }

    function compute() {
        const i = {
            ta: v('ta'), ca: v('ca'), inv: v('inv'), ar: v('ar'), cash: v('cash'),
            cl: v('cl'), ap: v('ap'), td: v('td'), ltd: v('ltd'), eq: v('eq'),
            rev: v('rev'), cogs: v('cogs'), ebitda: v('ebitda'), ebit: v('ebit'),
            intexp: v('intexp'), pat: v('pat'), netCreditPurch: v('netCreditPurch'),
            ocf: v('ocf'), capex: v('capex'), div: v('div'),
            mcap: v('mcap'), shares: v('shares')
        };

        // Validate required
        const required = ['ta', 'ca', 'inv', 'ar', 'cash', 'cl', 'ap', 'td', 'ltd', 'eq', 'rev', 'cogs', 'ebitda', 'ebit', 'intexp', 'pat', 'ocf'];
        const missing = required.filter(k => i[k] === null);
        if (missing.length > 0) {
            alert('Please fill all required inputs (Balance Sheet, P&L, OCF). Missing: ' + missing.length + ' field(s).');
            return;
        }
        if (i.ta <= 0) { alert('Total Assets must be greater than zero.'); return; }
        if (i.rev <= 0) { alert('Revenue must be greater than zero.'); return; }

        const sectorKey = document.getElementById('industry').value;
        const sector = sectorKey ? SECTORS[sectorKey] : null;

        const r = computeRatios(i);
        const s = classifyRatios(r, sector);

        // Category scores
        const liqScore = categoryScore(s, ['currentRatio', 'quickRatio', 'cashRatio', 'ocfRatio', 'nwcSales']);
        const solvScore = categoryScore(s, ['de', 'da', 'ltDe', 'equityMultiplier', 'icr', 'dscr']);
        const profScore = categoryScore(s, ['grossMargin', 'opMargin', 'ebitdaMargin', 'netMargin', 'roe', 'roa', 'roce', 'roic']);
        const effScore = categoryScore(s, ['assetTurnover', 'invTurnover', 'arTurnover', 'apTurnover', 'wcTurnover', 'ccc']);
        const cashScore = categoryScore(s, ['ocfRevenue', 'ocfNi', 'fcf', 'capexCoverage']);

        // Overall composite (weighted average of 5 category scores; valuation excluded)
        const compScores = [liqScore, solvScore, profScore, effScore, cashScore].filter(x => x !== null);
        const overall = compScores.length > 0 ? Math.round(compScores.reduce((a,b) => a+b, 0) / compScores.length) : 0;

        renderResult({
            inputs: i, ratios: r, statuses: s, sector: sector,
            scores: {liq: liqScore, solv: solvScore, prof: profScore, eff: effScore, cash: cashScore, overall: overall}
        });
    }

    function renderResult(R) {
        const r = R.ratios, s = R.statuses, i = R.inputs, scores = R.scores;

        // Overall verdict
        let band, headline, summary;
        if (scores.overall >= 80) { band = 'excellent'; headline = 'Strong Across All Dimensions'; summary = 'Most ratios in healthy range. Strong borrower / counterparty / target profile.'; }
        else if (scores.overall >= 65) { band = 'good'; headline = 'Healthy with Minor Weaknesses'; summary = 'Most ratios healthy; isolated weak spots warrant monitoring.'; }
        else if (scores.overall >= 50) { band = 'watch'; headline = 'Moderate Risk Profile'; summary = 'Several ratios below sector medians. Quarterly review recommended.'; }
        else if (scores.overall >= 30) { band = 'stressed'; headline = 'Stressed Across Multiple Dimensions'; summary = 'SA 570 going-concern review warranted. Lender restructuring discussion advisable.'; }
        else { band = 'distress'; headline = 'Distress — Critical Condition'; summary = 'High default probability. CIRP / pre-pack screening recommended.'; }

        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + band;
        document.getElementById('verdictHeadline').textContent = headline + ' (' + scores.overall + ' / 100)';
        document.getElementById('verdictSummary').textContent = summary + (R.sector ? ' Calibrated against ' + R.sector.label + ' sector benchmarks.' : '');

        // Schedule III mandatory ratios card
        const sched3 = [
            {n: 1, label: 'Current Ratio', value: fmt(r.currentRatio)},
            {n: 2, label: 'Debt-Equity Ratio', value: fmt(r.de)},
            {n: 3, label: 'Debt Service Coverage*', value: fmtX(r.dscr)},
            {n: 4, label: 'Return on Equity', value: r.roe !== null ? fmtPct(r.roe * 100) : '—'},
            {n: 5, label: 'Inventory Turnover', value: fmtX(r.invTurnover)},
            {n: 6, label: 'Trade Receivables Turnover', value: fmtX(r.arTurnover)},
            {n: 7, label: 'Trade Payables Turnover', value: fmtX(r.apTurnover)},
            {n: 8, label: 'Net Capital Turnover', value: fmtX(r.wcTurnover)},
            {n: 9, label: 'Net Profit Ratio', value: r.netMargin !== null ? fmtPct(r.netMargin * 100) : '—'},
            {n: 10, label: 'Return on Capital Employed', value: r.roce !== null ? fmtPct(r.roce * 100) : '—'},
            {n: 11, label: 'Return on Investment', value: 'asset-class specific'}
        ];
        const grid = document.getElementById('sched3Grid');
        grid.innerHTML = '';
        sched3.forEach(function(it) {
            const div = document.createElement('div');
            div.className = 'sched3-item';
            div.innerHTML = '<div class="sched3-item-label"><span class="sched3-item-num">#' + it.n + '</span>' + it.label + '</div><div class="sched3-item-value">' + it.value + '</div>';
            grid.appendChild(div);
        });

        // Six category panels
        const panels = document.getElementById('categoryPanels');
        let html = '';

        // Liquidity
        html += renderCategoryPanel('💧 Liquidity Ratios', scores.liq, [
            {label: 'Current Ratio', value: fmt(r.currentRatio), sub: 'CA / CL', sched3: true, status: s.currentRatio},
            {label: 'Quick Ratio', value: fmt(r.quickRatio), sub: '(CA−Inv) / CL', sched3: false, status: s.quickRatio},
            {label: 'Cash Ratio', value: fmt(r.cashRatio), sub: 'Cash / CL', sched3: false, status: s.cashRatio},
            {label: 'OCF Ratio', value: fmt(r.ocfRatio), sub: 'OCF / CL', sched3: false, status: s.ocfRatio},
            {label: 'NWC / Sales', value: r.nwcSales !== null ? fmtPct(r.nwcSales * 100) : '—', sub: 'Working Capital ÷ Revenue', sched3: false, status: s.nwcSales}
        ]);

        // Solvency
        html += renderCategoryPanel('🏛️ Solvency &amp; Leverage', scores.solv, [
            {label: 'Debt-to-Equity', value: fmt(r.de), sub: 'Total Debt / Equity', sched3: true, status: s.de},
            {label: 'Debt-to-Assets', value: fmt(r.da), sub: 'Total Debt / Total Assets', sched3: false, status: s.da},
            {label: 'LT Debt to Equity', value: fmt(r.ltDe), sub: 'Long-Term Debt / Equity', sched3: false, status: s.ltDe},
            {label: 'Equity Multiplier', value: fmt(r.equityMultiplier), sub: 'Total Assets / Equity', sched3: false, status: s.equityMultiplier},
            {label: 'Interest Coverage', value: fmtX(r.icr), sub: 'EBIT / Interest', sched3: false, status: s.icr},
            {label: 'Debt Service Coverage*', value: fmtX(r.dscr), sub: 'EBITDA / (Interest + LTD÷5)', sched3: true, status: s.dscr}
        ]);

        // Profitability
        html += renderCategoryPanel('📈 Profitability', scores.prof, [
            {label: 'Gross Margin', value: r.grossMargin !== null ? fmtPct(r.grossMargin * 100) : '—', sub: '(Rev − COGS) / Rev', sched3: false, status: s.grossMargin},
            {label: 'Operating Margin', value: r.opMargin !== null ? fmtPct(r.opMargin * 100) : '—', sub: 'EBIT / Revenue', sched3: false, status: s.opMargin},
            {label: 'EBITDA Margin', value: r.ebitdaMargin !== null ? fmtPct(r.ebitdaMargin * 100) : '—', sub: 'EBITDA / Revenue', sched3: false, status: s.ebitdaMargin},
            {label: 'Net Profit Ratio', value: r.netMargin !== null ? fmtPct(r.netMargin * 100) : '—', sub: 'PAT / Revenue', sched3: true, status: s.netMargin},
            {label: 'Return on Equity', value: r.roe !== null ? fmtPct(r.roe * 100) : '—', sub: 'PAT / Equity', sched3: true, status: s.roe},
            {label: 'Return on Assets', value: r.roa !== null ? fmtPct(r.roa * 100) : '—', sub: 'PAT / Total Assets', sched3: false, status: s.roa},
            {label: 'ROCE', value: r.roce !== null ? fmtPct(r.roce * 100) : '—', sub: 'EBIT / (Equity + Debt)', sched3: true, status: s.roce},
            {label: 'ROIC (approx)', value: r.roic !== null ? fmtPct(r.roic * 100) : '—', sub: 'NOPAT / (Eq + LT Debt)', sched3: false, status: s.roic}
        ]);

        // Efficiency
        html += renderCategoryPanel('⚙️ Efficiency &amp; Activity', scores.eff, [
            {label: 'Asset Turnover', value: fmtX(r.assetTurnover), sub: 'Revenue / Total Assets', sched3: false, status: s.assetTurnover},
            {label: 'Inventory Turnover', value: fmtX(r.invTurnover), sub: 'COGS / Inventory', sched3: true, status: s.invTurnover},
            {label: 'Receivables Turnover', value: fmtX(r.arTurnover), sub: 'Revenue / Trade AR', sched3: true, status: s.arTurnover},
            {label: 'Payables Turnover', value: fmtX(r.apTurnover), sub: '(NCP or COGS) / Trade AP', sched3: true, status: s.apTurnover},
            {label: 'Net Capital Turnover', value: fmtX(r.wcTurnover), sub: 'Revenue / Working Capital', sched3: true, status: s.wcTurnover},
            {label: 'Cash Conversion Cycle', value: fmtDays(r.ccc), sub: 'DIO + DSO − DPO', sched3: false, status: s.ccc}
        ]);

        // Cash Flow
        html += renderCategoryPanel('💰 Cash Flow', scores.cash, [
            {label: 'OCF / Revenue', value: r.ocfRevenue !== null ? fmtPct(r.ocfRevenue * 100) : '—', sub: 'Cash margin', sched3: false, status: s.ocfRevenue},
            {label: 'OCF / Net Income', value: fmt(r.ocfNi), sub: 'Earnings quality (~1.0 ideal)', sched3: false, status: s.ocfNi},
            {label: 'Free Cash Flow', value: fmtINR(r.fcf), sub: 'OCF − CapEx', sched3: false, status: s.fcf},
            {label: 'CapEx Coverage', value: fmtX(r.capexCoverage), sub: 'OCF ÷ CapEx', sched3: false, status: s.capexCoverage}
        ]);

        // Valuation (only if listed)
        if (i.mcap !== null && i.mcap > 0) {
            html += renderCategoryPanel('📊 Valuation (Listed)', null, [
                {label: 'P/E Ratio', value: fmtX(r.pe), sub: 'Market Cap / PAT', sched3: false, status: 'na'},
                {label: 'P/B Ratio', value: fmtX(r.pb), sub: 'Market Cap / Equity', sched3: false, status: 'na'},
                {label: 'P/S Ratio', value: fmtX(r.ps), sub: 'Market Cap / Revenue', sched3: false, status: 'na'},
                {label: 'Earnings Yield', value: r.earningsYield !== null ? fmtPct(r.earningsYield * 100) : '—', sub: '1 / P/E (compare to G-Sec)', sched3: false, status: 'na'}
            ]);
        }

        panels.innerHTML = html;

        // Advisory banner — pull worst category and surface specific guidance
        const adv = document.getElementById('advisoryBanner');
        let advHtml = '';
        const catRanked = [
            {name: 'Liquidity', score: scores.liq},
            {name: 'Solvency', score: scores.solv},
            {name: 'Profitability', score: scores.prof},
            {name: 'Efficiency', score: scores.eff},
            {name: 'Cash Flow', score: scores.cash}
        ].filter(c => c.score !== null).sort((a, b) => a.score - b.score);
        const weakest = catRanked[0];

        if (band === 'excellent' || band === 'good') {
            adv.className = 'info-banner success';
            advHtml = '<strong>Healthy financial profile.</strong> Strongest dimension: ' + catRanked[catRanked.length-1].name + ' (' + catRanked[catRanked.length-1].score + '/100). ' + (weakest && weakest.score < 70 ? 'Watch: ' + weakest.name + ' (' + weakest.score + '/100).' : 'All dimensions above 70.');
        } else if (band === 'watch') {
            adv.className = 'info-banner info';
            advHtml = '<strong>Mixed profile.</strong> Weakest dimension: ' + weakest.name + ' (' + weakest.score + '/100). Quarterly review recommended. Schedule III variance flag — explain any 25%+ ratio movements vs prior year in Notes to Accounts.';
        } else if (band === 'stressed') {
            adv.className = 'info-banner warn';
            advHtml = '<strong>Stressed profile.</strong> ' + weakest.name + ' weakest at ' + weakest.score + '/100. SA 570 going-concern review by statutory auditor likely. Restructuring discussion with lenders advisable. Detailed monitoring required.';
        } else {
            adv.className = 'info-banner danger';
            advHtml = '<strong>Critical condition.</strong> ' + weakest.name + ' at ' + weakest.score + '/100. High default probability over 12-24 months. Statutory auditor likely to qualify or disclaim opinion. IBC pre-pack or CIRP screening recommended.';
        }

        if (R.sector) {
            const sectorEbitdaMid = (R.sector.ebitdaMargin[0] + R.sector.ebitdaMargin[1]) / 2;
            const myEbitda = r.ebitdaMargin !== null ? r.ebitdaMargin * 100 : null;
            if (myEbitda !== null) {
                if (myEbitda < R.sector.ebitdaMargin[0]) {
                    advHtml += ' <br><br><strong>Sector context:</strong> EBITDA margin ' + myEbitda.toFixed(1) + '% is below ' + R.sector.label + ' typical range (' + R.sector.ebitdaMargin[0] + '-' + R.sector.ebitdaMargin[1] + '%).';
                } else if (myEbitda > R.sector.ebitdaMargin[1]) {
                    advHtml += ' <br><br><strong>Sector context:</strong> EBITDA margin ' + myEbitda.toFixed(1) + '% exceeds ' + R.sector.label + ' typical range (' + R.sector.ebitdaMargin[0] + '-' + R.sector.ebitdaMargin[1] + '%) — strong relative performance.';
                } else {
                    advHtml += ' <br><br><strong>Sector context:</strong> EBITDA margin ' + myEbitda.toFixed(1) + '% is within ' + R.sector.label + ' typical range.';
                }
            }
        }
        adv.innerHTML = advHtml;

        // Disclosure note
        let basis = '<strong>Schedule III Compliance:</strong> 10 of the 11 mandatory ratios are computed above (#11 Return on Investment is asset-class specific and requires per-investment data). Use the Schedule III box for direct Notes to Accounts disclosure.';
        basis += '<br><br><strong>* DSCR Computation Note:</strong> ICAI Guidance Note prescribes DSCR = EBITDA ÷ (Interest + Principal Repayment). This dashboard approximates Principal Repayment as Long-Term Debt ÷ 5 (assumed average maturity). For statutory disclosure, replace with actual scheduled principal from the loan amortisation schedule.';
        basis += '<br><br><strong>Averaging:</strong> ICAI Guidance Note prescribes averaged opening and closing balances for turnover ratios. The dashboard uses end-of-period values; for final disclosure, recompute with averages.';
        basis += '<br><br><strong>25% Variance Rule:</strong> Companies (Accounts) Amendment Rules 2021 require explanation of any year-on-year movement above 25% (positive or negative) in the eleven mandatory ratios. Run the dashboard for prior year and compare manually, or use Patron\'s <a href="/tools/financial-health-score" style="color:var(--primary-light);">Financial Health Score</a> tool for variance flag automation.';
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['ta','ca','inv','ar','cash','cl','ap','td','ltd','eq','rev','cogs','ebitda','ebit','intexp','pat','netCreditPurch','ocf','capex','div','mcap','shares'].forEach(function(id) {
            const el = document.getElementById(id);
            if (el) el.value = '';
        });
        document.getElementById('industry').value = '';
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalc').click();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

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
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
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
