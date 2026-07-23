@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Financial Health Score Calculator | Altman Z &amp; IBC</title>
    <meta name="description" content="Financial health score calculator: a composite 0-100 score with the Altman Z / Z' / Z'' Score, a 5-dimension breakdown and an IBC distress check. Free CA tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/financial-health-score/">
    <meta property="og:title" content="Financial Health Score Calculator — Composite + Altman Z 2026">
    <meta property="og:description" content="Composite 0-100 financial health score with Altman Z / Z' / Z'' Score, IBC distress check and Schedule III ratios. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/financial-health-score">
    <meta property="og:image" content="/tools/og/financial-health-score.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Financial Health Score Calculator — Composite + Altman Z 2026">
    <meta name="twitter:description" content="Composite 0-100 score + Altman Z / Z' / Z'' Score + IBC distress check + Schedule III ratios. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/financial-health-score.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Financial Health Score Calculator",
      "description": "Financial Health Score Calculator computes a composite 0-100 financial health score across five weighted dimensions — Liquidity, Solvency, Profitability, Efficiency, and Cash Flow — together with the Altman Z-Score (public manufacturers), Z'-Score (private manufacturers), and Z''-Score (non-manufacturers and services, recommended for emerging markets like India). The tool derives ten financial ratios from balance sheet and P&L inputs including Current Ratio, Quick Ratio, Debt-to-Equity, Interest Coverage, Return on Assets, Return on Equity, Asset Turnover, Working Capital to Total Assets, Retained Earnings to Total Assets, and Operating Cash Flow to Total Debt. Output includes verdict (Excellent, Good, Watch, Stressed, Distress), Altman classification (Safe Zone, Grey Zone, Distress Zone), Schedule III ratio disclosure block, IBC Section 4 default risk indicator (₹1 crore threshold), RBI Special Mention Account framework alignment, Section 164(2) director disqualification cascade reference, and Year-on-Year variance flag at the 25% threshold prescribed under Schedule III ratios disclosure rules. Suitable for credit analysis, statutory and internal audit going-concern assessment under SA 570, IBC pre-pack and CIRP screening, MSME credit appraisal, lender covenant testing, M&A target screening, and CA / CS / CMA student learning fundamental analysis aligned with Indian Companies Act 2013, Schedule III Division I and II, and Indian Accounting Standards.",
      "url": "/tools/financial-health-score",
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
        {"@type": "ListItem", "position": 3, "name": "Financial Health Score Calculator", "item": "/tools/financial-health-score"}
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
          "name": "What is a Financial Health Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Financial Health Score is a composite metric ranging from 0 to 100 that summarises a company's overall financial condition across five dimensions — Liquidity, Solvency, Profitability, Efficiency, and Cash Flow. Each dimension contributes 20 points based on weighted underlying ratios. The score helps lenders, investors, auditors, and management quickly assess financial strength without examining ten ratios separately. Scores above 80 indicate excellent health, 65-79 good, 50-64 watch zone, 30-49 stressed, and below 30 indicate distress with high default probability."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Altman Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Altman Z-Score is a multivariate distress-prediction model developed by Edward Altman in 1968, combining five financial ratios into a single bankruptcy-risk score for public manufacturers. Variants Z' (1983, private manufacturers) and Z'' (1995, non-manufacturers and emerging markets) extend coverage with different coefficients and cutoffs. Academic studies including Indian listed companies document 70-90% accuracy 1-2 years before bankruptcy. Credit rating agencies and lenders use the score as one input in distress assessment alongside trend, peer, and qualitative analysis."
          }
        },
        {
          "@type": "Question",
          "name": "Which Altman model applies to Indian companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Choice depends on entity type. The original Z-Score requires market value of equity, so it suits only listed manufacturers. Z'-Score replaces market value with book value, suiting private manufacturing companies. Z''-Score eliminates Sales/Total Assets and is calibrated for non-manufacturing, services, and emerging-market companies — making it the most commonly applied variant for Indian listed and unlisted services, IT, FMCG, healthcare, and trading entities. Indian academic studies validate Z'' for services and Z' for SME manufacturers as reliable distress predictors."
          }
        },
        {
          "@type": "Question",
          "name": "How is the composite score calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The composite score allocates 20 points each to five dimensions. Liquidity scores Current Ratio (target above 1.5) and Quick Ratio (target above 1.0). Solvency scores Debt-to-Equity (target below 1.0) and equity cushion. Profitability scores PAT Margin, ROE (target above 15%), and ROA. Efficiency scores Asset Turnover and Working Capital Turnover. Cash Flow scores OCF positivity and OCF-to-Total Debt coverage. Each ratio maps to a graduated points scale calibrated to Indian sector medians."
          }
        },
        {
          "@type": "Question",
          "name": "What is Schedule III ratio disclosure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies (Accounts) Amendment Rules 2021 effective FY 2021-22 mandate disclosure of eleven financial ratios in the Notes to Financial Statements for all companies preparing accounts under Schedule III. The ratios include Current Ratio, Debt-Equity Ratio, Debt Service Coverage Ratio, Return on Equity, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, Net Capital Turnover, Net Profit Ratio, Return on Capital Employed, and Return on Investment. Year-on-year variance exceeding 25% requires explanation. Six of these are direct outputs of this calculator."
          }
        },
        {
          "@type": "Question",
          "name": "How reliable is the Altman Z-Score for Indian companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multiple Indian academic studies covering BSE-listed entities, NCLT cases, and SME borrowers validate the model. Z''-Score shows 80-87% accuracy one year before default and 70-75% two years before. The model is more reliable for non-financial companies — banks, NBFCs, and insurers are excluded due to balance sheet opacity and off-balance-sheet exposures. Limitations include sensitivity to accounting manipulation and reduced reliability for startups burning capital on growth investment that depresses profitability ratios."
          }
        },
        {
          "@type": "Question",
          "name": "What is the IBC default threshold?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IBC 2016 Section 4, as amended on 24 March 2020, raised the minimum default threshold for Corporate Insolvency Resolution Process from one lakh to one crore rupees. Operational and financial creditors can file under Sections 7, 9, or 10 if the corporate debtor defaults on one crore or more. The calculator flags this when total debt exceeds the threshold and Operating Cash Flow signals weak servicing capacity. Pre-pack insolvency under Section 54A applies to MSMEs at a ten-lakh threshold."
          }
        },
        {
          "@type": "Question",
          "name": "What is the RBI SMA framework?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RBI's Special Mention Account framework, codified in the Master Direction on Income Recognition Asset Classification and Provisioning, requires banks to classify accounts based on overdue duration before they become Non-Performing Assets. SMA-0 covers principal or interest overdue but not yet 30 days, SMA-1 covers 31-60 days overdue, and SMA-2 covers 61-90 days overdue. After 90 days, the account becomes NPA. The calculator's distress score correlates with SMA migration probability and is used by lenders in early-warning systems and CRILC reporting."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 164(2) affect distressed companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 164(2) of the Companies Act 2013 disqualifies all directors of a company that has not filed financial statements or annual returns for any continuous period of three financial years, or that has failed to repay deposits or pay declared dividends for one year. Disqualification lasts five years across all companies and existing DINs are deactivated by MCA. Distressed companies often miss filings, triggering this cascade. Combined with auditor SA 570 going-concern qualification, consequences extend beyond financial distress."
          }
        },
        {
          "@type": "Question",
          "name": "What is SA 570 going concern?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard on Auditing 570 issued by ICAI requires statutory auditors to evaluate management's assessment of the entity's ability to continue as a going concern for at least twelve months from the balance sheet date. If material uncertainty exists, the auditor must include an Emphasis of Matter or modify the opinion. Indicators include negative net worth, covenant breach, recurring losses, negative operating cash flow, and adverse Altman scores. Companies with Composite Score below 30 typically warrant SA 570 disclosure."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company have a low score but still be healthy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, in specific business models. Modern retail and quick-commerce companies operate with negative working capital by design — they collect from customers before paying suppliers, generating float. Their Liquidity dimension scores low but Cash Flow remains strong. Capital-intensive infrastructure firms in growth phase show low Profitability while building asset base. Holding companies show low Asset Turnover. Always interpret scores against industry context and the company's strategic stage. Trend over three to five years is more revealing than a single-year snapshot."
          }
        },
        {
          "@type": "Question",
          "name": "Who uses Financial Health Score in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Banks and NBFCs use it for credit appraisal under Tandon Committee, Nayak Committee, and IRAC norms. Statutory auditors apply it for SA 570 going-concern review. Internal auditors fold it into risk-based plans. M&amp;A advisors and PE firms screen targets. Resolution Professionals under IBC use it during CIRP. CRISIL, ICRA, CARE incorporate similar multi-factor models. Corporate treasuries monitor it for vendor and customer counterparty risk under Ind AS 109 ECL provisioning. CA students learn it for advanced auditing papers."
          }
        },
        {
          "@type": "Question",
          "name": "What financial inputs are required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Required inputs come from balance sheet and P&amp;L. Balance sheet: Total Assets, Total Liabilities, Current Assets, Current Liabilities, Inventory, Total Debt, Equity, Retained Earnings, and Market Cap if listed. P&amp;L: Revenue, EBIT (or PAT plus Tax plus Interest), Interest Expense, and PAT. Cash Flow Statement: Operating Cash Flow. Optional: previous-year score for variance flagging. All values in rupees crore. Inputs map directly to Schedule III Part I (Balance Sheet) and Part II (P&amp;L) under Ind AS or Indian GAAP."
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
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .approach-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #F0F5FB 100%); border: 2px solid var(--primary-light); padding: 6px; gap: 6px; margin-bottom: 24px; }
        .approach-toggle .toggle-btn { padding: 14px 16px; font-size: 14px; }
        .approach-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.excellent { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.good { background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%); border-left-color: var(--primary-light); }
        .verdict-card.watch { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.stressed { background: linear-gradient(135deg, #FFF7ED 0%, #FFEDD5 100%); border-left-color: var(--warning); }
        .verdict-card.distress { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .score-mega { font-family: var(--font-mono); font-size: 84px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -3px; }
        .score-mega-suffix { font-size: 22px; color: var(--text-muted); margin-left: 6px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; }
        .verdict-pill.excellent { background: var(--success); color: #fff; }
        .verdict-pill.good { background: var(--primary-light); color: #fff; }
        .verdict-pill.watch { background: var(--accent); color: var(--primary-dark); }
        .verdict-pill.stressed { background: var(--warning); color: #fff; }
        .verdict-pill.distress { background: var(--danger); color: #fff; }

        .dim-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 500px) { .dim-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .dim-grid { grid-template-columns: repeat(5, 1fr); } }
        .dim-card { background: var(--surface); border-radius: var(--radius); padding: 14px; border: 1px solid var(--border); text-align: center; }
        .dim-label { font-size: 10px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .dim-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .dim-value-suffix { font-size: 12px; color: var(--text-muted); font-family: var(--font-body); font-weight: 500; }
        .dim-bar { height: 6px; background: var(--surface-alt); border-radius: 3px; margin-top: 8px; overflow: hidden; }
        .dim-bar-fill { height: 100%; border-radius: 3px; transition: width 0.6s ease-out; }
        .dim-bar-fill.high { background: var(--success); }
        .dim-bar-fill.mid { background: var(--accent); }
        .dim-bar-fill.low { background: var(--danger); }

        .altman-card { background: linear-gradient(135deg, #F5F3FF 0%, #EDE9FE 100%); border: 2px solid #7C3AED; border-radius: var(--radius); padding: 22px 24px; margin-bottom: 22px; }
        .altman-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #6D28D9; margin-bottom: 8px; }
        .altman-row { display: grid; grid-template-columns: 1fr; gap: 14px; align-items: center; }
        @media (min-width: 600px) { .altman-row { grid-template-columns: auto 1fr; gap: 24px; } }
        .altman-score { font-family: var(--font-mono); font-size: 44px; font-weight: 700; color: #5B21B6; line-height: 1; }
        .altman-variant { font-size: 12px; color: #6D28D9; font-weight: 600; margin-top: 4px; }
        .altman-zone { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; }
        .altman-explainer { font-size: 13px; color: var(--text-secondary); line-height: 1.6; }

        .ratio-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 22px; }
        @media (min-width: 768px) { .ratio-grid { grid-template-columns: repeat(5, 1fr); } }
        .ratio-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 12px; }
        .ratio-card.highlight { background: var(--primary); border-color: var(--primary); }
        .ratio-card.highlight .ratio-label, .ratio-card.highlight .ratio-value, .ratio-card.highlight .ratio-sub { color: #fff; }
        .ratio-card.highlight .ratio-sub { color: rgba(255,255,255,0.8); }
        .ratio-label { font-size: 10px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .ratio-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .ratio-sub { font-size: 10px; color: var(--text-muted); margin-top: 3px; line-height: 1.3; }
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
            .score-mega { font-size: 60px; }
            .score-mega-suffix { font-size: 18px; }
            .altman-score { font-size: 36px; }
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
        <a href="#altman">Altman Z-Score</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#regulatory">Regulatory</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Financial Health Score Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Financial Health Score <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Financial%20Health%20Score%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Health%20Score%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Financial%20Health%20Score%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Financial Health Score is a composite metric — a single 0 to 100 number summarising five dimensions of corporate financial condition. This calculator computes the <strong>composite score</strong>, the appropriate <strong>Altman Z / Z' / Z''-Score</strong> based on company type, ten underlying ratios mapped to <strong>Schedule III mandatory disclosures</strong>, and flags exposure to <strong>IBC Section 4 default threshold (₹1 crore)</strong>, <strong>RBI SMA framework</strong>, and <strong>SA 570 going-concern</strong> indicators. Scores above 80 indicate excellent health, below 30 indicate distress.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Compute Financial Health Score</h2>
            <p class="calc-intro">Enter values from your latest balance sheet, P&amp;L and cash flow statement (in rupees crore). Choose company type to apply the correct Altman variant. Inputs map to Schedule III line items.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="entityGroup" role="tablist" aria-label="Company type">
                <button type="button" class="toggle-btn active" data-value="public_mfg" role="tab" aria-selected="true">Listed Manufacturer</button>
                <button type="button" class="toggle-btn" data-value="private_mfg" role="tab" aria-selected="false">Private Manufacturer</button>
                <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services / Non-Mfg</button>
            </div>

            <div class="calc-section-title">Balance Sheet — Assets &amp; Liabilities (₹ Crore)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ta">Total Assets</label>
                    <input type="text" id="ta" min="0" step="any" placeholder="e.g. 500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Schedule III Part I — Total of Equity + Liabilities side.</span>
                </div>
                <div class="form-group">
                    <label for="tl">Total Liabilities</label>
                    <input type="text" id="tl" min="0" step="any" placeholder="e.g. 250" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total Liabilities = Total Assets − Shareholders' Equity.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ca">Current Assets</label>
                    <input type="text" id="ca" min="0" step="any" placeholder="e.g. 180" inputmode="decimal" autocomplete="off">
                    <span class="helper">Inventory + Trade Receivables + Cash + Other CA.</span>
                </div>
                <div class="form-group">
                    <label for="cl">Current Liabilities</label>
                    <input type="text" id="cl" min="0" step="any" placeholder="e.g. 120" inputmode="decimal" autocomplete="off">
                    <span class="helper">Trade Payables + ST Borrowings + Other CL.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="inv">Inventory</label>
                    <input type="text" id="inv" min="0" step="any" placeholder="e.g. 50" inputmode="decimal" autocomplete="off">
                    <span class="helper">Used to compute Quick Ratio.</span>
                </div>
                <div class="form-group">
                    <label for="td">Total Debt (LT + ST Borrowings)</label>
                    <input type="text" id="td" min="0" step="any" placeholder="e.g. 150" inputmode="decimal" autocomplete="off">
                    <span class="helper">Long-term + Short-term borrowings + Lease liabilities.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="eq">Shareholders' Equity (Net Worth)</label>
                    <input type="text" id="eq" step="any" placeholder="e.g. 250" inputmode="decimal" autocomplete="off">
                    <span class="helper">Share Capital + Reserves &amp; Surplus.</span>
                </div>
                <div class="form-group">
                    <label for="re">Retained Earnings</label>
                    <input type="text" id="re" step="any" placeholder="e.g. 180" inputmode="decimal" autocomplete="off">
                    <span class="helper">Accumulated profits in Reserves &amp; Surplus.</span>
                </div>
            </div>

            <div class="calc-row" id="mcapRow">
                <div class="form-group">
                    <label for="mcap">Market Capitalisation</label>
                    <input type="text" id="mcap" min="0" step="any" placeholder="e.g. 800" inputmode="decimal" autocomplete="off">
                    <span class="helper">Listed entities only — Share Price × Outstanding Shares.</span>
                </div>
                <div class="form-group">
                    <label for="bvd">Book Value of Total Debt (= Total Debt)</label>
                    <input type="text" id="bvd" min="0" step="any" placeholder="auto-filled" inputmode="decimal" disabled autocomplete="off">
                    <span class="helper">Auto-uses Total Debt above.</span>
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
                    <label for="ebit">EBIT (Earnings Before Interest &amp; Tax)</label>
                    <input type="text" id="ebit" step="any" placeholder="e.g. 80" inputmode="decimal" autocomplete="off">
                    <span class="helper">PAT + Tax + Finance Costs. Can be negative.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="intexp">Interest Expense (Finance Costs)</label>
                    <input type="text" id="intexp" min="0" step="any" placeholder="e.g. 18" inputmode="decimal" autocomplete="off">
                    <span class="helper">For Interest Coverage Ratio.</span>
                </div>
                <div class="form-group">
                    <label for="pat">PAT (Profit After Tax)</label>
                    <input type="text" id="pat" step="any" placeholder="e.g. 45" inputmode="decimal" autocomplete="off">
                    <span class="helper">Bottom-line. Can be negative.</span>
                </div>
            </div>

            <div class="calc-section-title">Cash Flow &amp; Optional Inputs</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ocf">Operating Cash Flow</label>
                    <input type="text" id="ocf" step="any" placeholder="e.g. 60" inputmode="decimal" autocomplete="off">
                    <span class="helper">From Cash Flow Statement — Operating Activities.</span>
                </div>
                <div class="form-group">
                    <label for="prevScore">Previous-Year Composite Score — Optional</label>
                    <input type="text" id="prevScore" min="0" max="100" step="any" placeholder="e.g. 72" inputmode="decimal" autocomplete="off">
                    <span class="helper">Triggers 25% variance flag if available.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Health Score</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card excellent" id="verdictCard">
                    <div class="verdict-label">Composite Financial Health Score</div>
                    <div class="verdict-headline" id="verdictHeadline">Excellent — Strong Financial Health</div>
                    <div class="score-mega" id="scoreVal">—<span class="score-mega-suffix">/ 100</span></div>
                    <span class="verdict-pill excellent" id="verdictPill">✓ Healthy</span>
                </div>

                <div class="info-banner info" id="trendBanner" style="display:none;"></div>

                <div class="altman-card">
                    <div class="altman-label">Altman Distress Model</div>
                    <div class="altman-row">
                        <div>
                            <div class="altman-score" id="altmanScore">—</div>
                            <div class="altman-variant" id="altmanVariant">—</div>
                        </div>
                        <div>
                            <div class="altman-zone" id="altmanZone">—</div>
                            <div class="altman-explainer" id="altmanExplainer">Enter inputs to compute.</div>
                        </div>
                    </div>
                </div>

                <div class="dim-grid" id="dimGrid"></div>

                <div class="ratio-grid" id="ratioGrid"></div>

                <div class="info-banner" id="ibcBanner" style="display:none;"></div>
                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Computation Basis</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Financial Health Score Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Financial%20Health%20Score%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Health%20Score%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Financial%20Health%20Score%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How the Composite Score Is Built</h2>

            <p>The Financial Health Score is a composite — five dimensions, each carrying twenty points, summing to a maximum of one hundred. Each dimension scores the company on weighted underlying ratios calibrated against Indian sector medians. The design draws on the same multivariate logic that powers credit-rating models used by <a href="https://www.crisil.com" target="_blank" rel="noopener">CRISIL</a>, ICRA and CARE, simplified for public use without losing analytical rigour. Composite scores work because no single ratio captures the full picture — Current Ratio above 2.0 looks healthy until you discover negative Operating Cash Flow, and a Debt-to-Equity of 0.5 looks safe until you spot Interest Coverage below 1.5×.</p>

            <h3>Dimension 1: Liquidity (20 points)</h3>
            <p>Liquidity measures the company's ability to meet short-term obligations. Two ratios drive this dimension. <strong>Current Ratio</strong> (Current Assets ÷ Current Liabilities) targets 1.5 or higher for full marks; below 1.0 signals stress and zero points. <strong>Quick Ratio</strong> (Current Assets less Inventory ÷ Current Liabilities) targets 1.0 or higher for full marks. Negative-working-capital business models — modern retail, quick-commerce — score low on this dimension by design but compensate through Cash Flow.</p>

            <h3>Dimension 2: Solvency (20 points)</h3>
            <p>Solvency measures long-term financial structure and the equity cushion absorbing losses before creditors take a hit. <strong>Debt-to-Equity</strong> below 1.0 earns full marks; above 2.0 signals high leverage. <strong>Equity-to-Asset</strong> ratio above 50% earns full marks. Negative net worth — equity wiped out by accumulated losses — earns zero across the dimension and triggers an automatic distress flag, mirroring the <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> SA 570 going-concern indicator list.</p>

            <h3>Dimension 3: Profitability (20 points)</h3>
            <p>Profitability measures earnings generation across three ratios. <strong>PAT Margin</strong> (PAT ÷ Revenue) targets 8% or higher. <strong>Return on Equity</strong> (PAT ÷ Equity) targets 15% or higher — Reserve Bank's prudential threshold for a healthy bank is similar. <strong>Return on Assets</strong> (PAT ÷ Total Assets) targets 5% or higher for non-financial firms. Loss-making companies receive zero on this dimension regardless of other strengths.</p>

            <h3>Dimension 4: Efficiency (20 points)</h3>
            <p>Efficiency measures asset productivity. <strong>Asset Turnover</strong> (Revenue ÷ Total Assets) targets 1.0 or higher for full marks — manufacturers typically run 0.8 to 1.5×, services 1.0 to 2.5×, asset-heavy infrastructure or real estate 0.2 to 0.5×. <strong>Working Capital Turnover</strong> (Revenue ÷ Working Capital) targets 4.0 to 8.0×. Both ratios feed into the asset-velocity component of the Altman model and Schedule III's Net Capital Turnover disclosure under the <a href="https://www.mca.gov.in/MinistryV2/companies-act-2013.html" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> mandatory ratio framework.</p>

            <h3>Dimension 5: Cash Flow (20 points)</h3>
            <p>Cash Flow validates the P&amp;L. Reported profit can be massaged through accruals; cash moves more honestly. <strong>OCF Positivity</strong> earns 10 points if operating cash flow is positive — non-negotiable. <strong>OCF-to-Total-Debt</strong> coverage above 25% earns the remaining 10 points; below 10% signals weak debt-servicing capacity. This dimension is the strongest standalone predictor in Indian academic studies covering NCLT cases — companies entering CIRP under <a href="https://www.ibbi.gov.in" target="_blank" rel="noopener">IBBI</a> typically show two consecutive years of negative OCF before formal default.</p>

            <h3>Composite Verdict Bands</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Score Band</th><th>Verdict</th><th>Distress Risk</th><th>Typical Action</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>80 – 100</strong></td><td>Excellent</td><td>Negligible</td><td>Strong borrower / target / counterparty</td></tr>
                    <tr><td><strong>65 – 79</strong></td><td>Good</td><td>Low</td><td>Stable; monitor sector trends</td></tr>
                    <tr><td><strong>50 – 64</strong></td><td>Watch</td><td>Moderate</td><td>Quarterly review; tightened covenants</td></tr>
                    <tr><td><strong>30 – 49</strong></td><td>Stressed</td><td>High</td><td>SA 570 review; restructuring discussion</td></tr>
                    <tr><td><strong>0 – 29</strong></td><td>Distress</td><td>Critical</td><td>Pre-pack / CIRP screening; lender alert</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="altman">
            <h2>Altman Z-Score: Three Variants, One Distress Lens</h2>

            <p>Edward Altman's 1968 Z-Score remains the most cited bankruptcy-prediction model in academic finance. It combines five financial ratios into a single discriminant score that separates failed firms from survivors with documented 70 to 90 percent accuracy one to two years before default. The model has been re-estimated multiple times to extend its reach beyond the original sample of public US manufacturers — yielding three variants that the calculator selects automatically based on company type.</p>

            <h3>Original Z-Score (Listed Manufacturers)</h3>
            <p>The 1968 model uses Market Value of Equity in the leverage component, restricting it to listed companies. The formula:</p>
            <div class="formula-box"><span class="label">Z =</span> 1.2 × (WC/TA) + 1.4 × (RE/TA) + 3.3 × (EBIT/TA) + 0.6 × (MV/TL) + 1.0 × (Sales/TA)

<span class="label">Cutoffs:</span>
  Z &gt; 2.99    Safe Zone
  1.81 ≤ Z ≤ 2.99   Grey Zone
  Z &lt; 1.81    Distress Zone</div>
            <p>WC = Working Capital, RE = Retained Earnings, TA = Total Assets, MV = Market Value of Equity, TL = Total Liabilities. The Market Value of Equity component captures investor confidence — distressed companies see equity value collapse faster than book value, embedding a forward-looking signal absent from purely accounting-based models.</p>

            <h3>Z'-Score (Private Manufacturers)</h3>
            <p>Altman re-estimated the model in 1983 for unlisted manufacturers by replacing Market Value with Book Value of Equity. The revised coefficients and cutoffs differ:</p>
            <div class="formula-box"><span class="label">Z' =</span> 0.717 × (WC/TA) + 0.847 × (RE/TA) + 3.107 × (EBIT/TA) + 0.420 × (BV/TL) + 0.998 × (Sales/TA)

<span class="label">Cutoffs:</span>
  Z' &gt; 2.90    Safe Zone
  1.23 ≤ Z' ≤ 2.90   Grey Zone
  Z' &lt; 1.23    Distress Zone</div>
            <p>The Z'-Score is the standard variant for Indian SME and private-limited manufacturers. Indian academic studies validating the model on BSE-listed mid-caps and NCLT cases consistently report 75 to 85 percent accuracy at the one-year horizon, with deteriorating accuracy beyond two years.</p>

            <h3>Z''-Score (Non-Manufacturers, Services, Emerging Markets)</h3>
            <p>The 1995 emerging-market revision drops Sales/Total Assets entirely — services firms have inherently higher asset turnover that distorts the original coefficients — and recalibrates the remaining four ratios:</p>
            <div class="formula-box"><span class="label">Z'' =</span> 6.56 × (WC/TA) + 3.26 × (RE/TA) + 6.72 × (EBIT/TA) + 1.05 × (BV/TL)

<span class="label">Cutoffs:</span>
  Z'' &gt; 2.60    Safe Zone
  1.10 ≤ Z'' ≤ 2.60   Grey Zone
  Z'' &lt; 1.10    Distress Zone</div>
            <p>For Indian listed and unlisted companies in IT, FMCG, healthcare, retail, trading, hospitality, real estate and most non-manufacturing sectors, the Z''-Score is the recommended variant. <a href="https://en.wikipedia.org/wiki/Altman_Z-score" target="_blank" rel="noopener">Wikipedia's Altman Z-Score article</a> documents the full evolution of the three models.</p>

            <h3>Limitations Auditors Should Note</h3>
            <ul>
                <li><strong>Banks, NBFCs, insurance excluded.</strong> Off-balance-sheet exposures and accounting opacity make Altman unreliable for financial institutions. RBI uses bespoke stress-test models instead.</li>
                <li><strong>Startups distort.</strong> High-growth companies burning equity to acquire customers score poorly while remaining commercially viable. Adjust by examining unit economics separately.</li>
                <li><strong>Accounting manipulation.</strong> The model relies on reported numbers — creative accounting on inventory valuation, revenue recognition, or capitalisation of expenses can mask distress.</li>
                <li><strong>Industry calibration.</strong> Real estate and infrastructure firms typically run low EBIT/TA during construction phase. Compare against sector peers, not absolute thresholds.</li>
            </ul>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III Mandatory Ratio Disclosure</h2>

            <p>The Companies (Accounts) Amendment Rules 2021, notified on 24 March 2021 and effective from financial year 2021-22 onwards, inserted Note 6(W) into Schedule III. Every company preparing financial statements under Schedule III must now disclose <strong>eleven specific financial ratios</strong> in the Notes to Accounts, with year-on-year comparison and explanation for any variance exceeding twenty-five percent. The amendment was a direct response to NFRA and ICAI concerns about unstructured disclosure across listed and unlisted entities.</p>

            <p>Six of the eleven mandatory ratios are direct outputs of this calculator — Current Ratio, Debt-Equity Ratio, Return on Equity, Net Profit Ratio, Return on Capital Employed, and (when revenue inputs are extended) Net Capital Turnover. The remaining five — Debt Service Coverage, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, and Return on Investment — flow from the same input set with minor extensions covered by Patron's specialist tools at <a href="/tools/dscr-calculator">DSCR Calculator</a>, <a href="/tools/cash-conversion-cycle-calculator">Cash Conversion Cycle Calculator</a>, and <a href="/tools/working-capital-calculator">Working Capital Calculator</a>.</p>

            <h3>The 11-Ratio Framework</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>#</th><th>Ratio</th><th>This Tool</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Current Ratio</td><td><strong>Yes</strong> — direct output</td></tr>
                    <tr><td>2</td><td>Debt-Equity Ratio</td><td><strong>Yes</strong> — direct output</td></tr>
                    <tr><td>3</td><td>Debt Service Coverage Ratio</td><td>See DSCR Calculator</td></tr>
                    <tr><td>4</td><td>Return on Equity</td><td><strong>Yes</strong> — direct output</td></tr>
                    <tr><td>5</td><td>Inventory Turnover Ratio</td><td>See Cash Conversion Cycle</td></tr>
                    <tr><td>6</td><td>Trade Receivables Turnover</td><td>See Cash Conversion Cycle</td></tr>
                    <tr><td>7</td><td>Trade Payables Turnover</td><td>See Cash Conversion Cycle</td></tr>
                    <tr><td>8</td><td>Net Capital Turnover Ratio</td><td>See Working Capital Calculator</td></tr>
                    <tr><td>9</td><td>Net Profit Ratio</td><td><strong>Yes</strong> — direct output</td></tr>
                    <tr><td>10</td><td>Return on Capital Employed</td><td><strong>Yes</strong> — direct output</td></tr>
                    <tr><td>11</td><td>Return on Investment</td><td>Asset-class specific</td></tr>
                </tbody>
            </table>

            <h3>The 25% Variance Rule</h3>
            <p>Where any of the eleven ratios changes by more than twenty-five percent compared to the immediately preceding financial year, the company must explain the variance in the Notes to Accounts. The disclosure must identify the cause — operational change, capital structure shift, regulatory event, accounting policy change, or one-time item. The calculator flags this automatically when a previous-year composite score is supplied. Auditors should anchor their <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-mandated SA 570 going-concern review on the same threshold.</p>

            <div class="callout warn">
                <p><strong>Disclosure obligation runs alongside SEBI LODR.</strong> Listed entities must additionally disclose ratios in the Management Discussion &amp; Analysis under <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> LODR Regulation 34(3) and, for listed debt entities, half-yearly under Regulation 52. Year-end ratios in Schedule III and half-yearly ratios in LODR must reconcile.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need a CA-reviewed financial health diagnostic?</h3>
            <p>Patron's audit and advisory team performs Schedule III compliant ratio audits, SA 570 going-concern assessments, IBC pre-pack screening and lender covenant reviews. Fixed-fee, time-bound, CA-signed.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Financial%20Health%20Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Health%20Score%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Financial%20Health%20Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="regulatory">
            <h2>Indian Regulatory Framework Around Distress</h2>

            <h3>IBC Section 4 — The ₹1 Crore Default Threshold</h3>
            <p>The <a href="https://www.ibbi.gov.in" target="_blank" rel="noopener">Insolvency and Bankruptcy Board of India</a> administers the IBC 2016 framework. Section 4, as amended by Ministry of Corporate Affairs notification S.O. 1205(E) dated 24 March 2020, raised the minimum default threshold for initiating Corporate Insolvency Resolution Process from one lakh rupees to one crore rupees. The amendment was a COVID-era relief measure that has remained in force. Operational creditors file under Section 9, financial creditors under Section 7, and the corporate debtor itself can file under Section 10. The calculator surfaces an IBC banner whenever total debt exceeds the threshold and Operating Cash Flow signals weak servicing capacity — a leading indicator of voluntary or involuntary CIRP filing.</p>

            <h3>Pre-Pack Insolvency for MSMEs (Section 54A)</h3>
            <p>Inserted by the IBC Amendment Act 2021, Section 54A introduced a fast-track pre-pack process for MSMEs as defined under the MSMED Act 2006. The process is debtor-initiated, retains existing management, and concludes within 120 days. The minimum default threshold for pre-pack is ten lakh rupees. The Resolution Professional uses financial health metrics — composite score, Altman Z'/Z'', Cash Flow trend — to evaluate the base resolution plan submitted by the debtor against alternative plans from competing resolution applicants under the Swiss challenge.</p>

            <h3>RBI Special Mention Account Framework</h3>
            <p>The Reserve Bank of India's Master Direction on Income Recognition, Asset Classification and Provisioning, last revised in 2024, requires banks to classify accounts based on overdue duration:</p>
            <ul>
                <li><strong>SMA-0</strong> — Principal or interest payment overdue but not yet 30 days</li>
                <li><strong>SMA-1</strong> — Principal or interest payment overdue between 31 and 60 days</li>
                <li><strong>SMA-2</strong> — Principal or interest payment overdue between 61 and 90 days</li>
                <li><strong>NPA</strong> — Principal or interest overdue beyond 90 days (substandard / doubtful / loss)</li>
            </ul>
            <p>Accounts breaching the five-crore-rupee aggregate exposure threshold and falling into SMA-0 or worse are reported to the Central Repository of Information on Large Credits (CRILC). The composite distress score correlates strongly with SMA migration probability and is used by lenders in early-warning systems and quarterly borrower reviews aligned with <a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI</a> prudential norms.</p>

            <h3>Section 164(2) Director Disqualification Cascade</h3>
            <p>Section 164(2) of the Companies Act 2013 disqualifies all directors of a company that has not filed financial statements or annual returns for any continuous period of three financial years, or that has failed to repay deposits or pay declared dividends for one year. Disqualification lasts five years across all companies — disqualified directors cannot be reappointed in any other company during the period and existing DINs are deactivated by MCA. Distressed companies often miss filings, triggering this cascade. Combined with statutory auditor going-concern qualification under SA 570, the consequences extend beyond financial distress into regulatory and reputational territory affecting the directors' future ventures.</p>

            <h3>SA 570 Going-Concern Audit Standard</h3>
            <p>Standard on Auditing 570, issued by the Institute of Chartered Accountants of India and aligned with International Standard on Auditing 570 (Revised), requires statutory auditors to evaluate management's assessment of the entity's ability to continue as a going concern for at least twelve months from the balance sheet date. Where material uncertainty exists, the auditor must include an Emphasis of Matter paragraph or modify the opinion. Listed indicators include negative net worth, breach of debt covenants, recurring operating losses, negative operating cash flow, supplier credit withdrawal, and adverse Altman scores. Companies with composite score below 30 or Altman in Distress Zone typically warrant SA 570 disclosure and are flagged for partner review during audit planning.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Composite Score</th><th>Altman Zone</th><th>Likely Audit Treatment</th></tr>
                </thead>
                <tbody>
                    <tr><td>80+</td><td>Safe</td><td>Standard going-concern assumption</td></tr>
                    <tr><td>65-79</td><td>Safe / Grey</td><td>Standard going-concern; document monitoring</td></tr>
                    <tr><td>50-64</td><td>Grey</td><td>Enhanced procedures; review forecasts and covenants</td></tr>
                    <tr><td>30-49</td><td>Grey / Distress</td><td>Material uncertainty likely; Emphasis of Matter</td></tr>
                    <tr><td>Below 30</td><td>Distress</td><td>Likely qualification or disclaimer of opinion</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section">
            <h2>Sector Calibration for Indian Companies</h2>

            <p>Composite scores must be read alongside sector context. A score of 65 is excellent for a real estate developer carrying inventory through a construction cycle but mediocre for an FMCG firm where peers regularly clear 80. The table below summarises typical bands observed across BSE 500 and unlisted SME borrowers.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Sector</th><th>Composite Median</th><th>Altman Variant</th><th>Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td>IT / Software Services</td><td>78 – 88</td><td>Z''</td><td>Asset-light, high OCF, low debt</td></tr>
                    <tr><td>FMCG</td><td>75 – 85</td><td>Z''</td><td>Strong margins, brand moat, low D/E</td></tr>
                    <tr><td>Pharma</td><td>70 – 82</td><td>Z'</td><td>Capex-heavy but cash-generative</td></tr>
                    <tr><td>Manufacturing — Listed</td><td>62 – 75</td><td>Z (original)</td><td>Cyclical EBIT, moderate leverage</td></tr>
                    <tr><td>Manufacturing — SME / Private</td><td>50 – 68</td><td>Z'</td><td>Working capital intensive</td></tr>
                    <tr><td>Modern Retail / Quick-Commerce</td><td>55 – 72</td><td>Z''</td><td>Negative WC by design; OCF positive</td></tr>
                    <tr><td>Real Estate / Construction</td><td>40 – 60</td><td>Z''</td><td>Inventory-heavy, project-cycle driven</td></tr>
                    <tr><td>Infrastructure / Power</td><td>45 – 62</td><td>Z''</td><td>High leverage, long gestation</td></tr>
                    <tr><td>Hospitality / Aviation</td><td>40 – 60</td><td>Z''</td><td>Operating leverage, sector-cycle dependent</td></tr>
                    <tr><td>Auto OEM</td><td>60 – 72</td><td>Z (original)</td><td>Cyclical; volume-driven margins</td></tr>
                    <tr><td>Telecom</td><td>50 – 68</td><td>Z''</td><td>High capex; Ind AS 116 lease impact</td></tr>
                    <tr><td>Banks / NBFCs / Insurance</td><td>n/a</td><td>Not applicable</td><td>Use RBI / IRDAI stress models</td></tr>
                </tbody>
            </table>

            <h3>Reading Trend, Not Snapshot</h3>
            <p>One year of data establishes a baseline; three to five years reveals direction. A company moving from 75 to 70 to 64 over three years is in a slow slide that often precedes covenant breach by 18 to 24 months. A company moving from 45 to 55 to 62 is recovering — restructuring, new orders, or refinancing has worked. The 25% variance rule under Schedule III makes the trend analysis unavoidable for FY 2025-26 and onwards. Pair this calculator with <a href="/tools/debt-to-equity-calculator">Debt to Equity Calculator</a>, <a href="/tools/ebitda-margin-calculator">EBITDA Margin Calculator</a> and <a href="/tools/dscr-calculator">DSCR Calculator</a> for layered diagnostics.</p>
        </section>

        <section class="content-section">
            <h2>Common Misreadings to Avoid</h2>

            <h3>Negative Working Capital Is Not Always Distress</h3>
            <p>Modern retail chains, food-delivery platforms, and marketplace platforms collect from customers within days but pay suppliers in 30 to 60 days. The structural negative working capital generates float — interest-free working capital — that the company deploys profitably. Asian Paints, Hindustan Unilever, DMart, Avenue Supermarts have all run negative working capital for years while compounding earnings. The Liquidity dimension correctly scores them low; the Cash Flow dimension correctly compensates with high marks. Read the composite score, not just one dimension.</p>

            <h3>High Altman Score Is Not Investment Recommendation</h3>
            <p>The Altman Z-Score predicts distress, not future returns. A Z'' of 8.0 tells you bankruptcy is unlikely; it tells you nothing about whether the stock is undervalued or overvalued. Pair the Altman with valuation metrics from <a href="/tools/pe-ratio-calculator">P/E Ratio Calculator</a> and growth projections before any investment decision.</p>

            <h3>Schedule III Compliance Is Not Schedule III Strategy</h3>
            <p>Disclosing eleven ratios meets the minimum legal requirement. Building actual financial health requires acting on what the ratios reveal — restructuring debt before covenants breach, raising equity before market windows close, exiting non-core businesses before they consume working capital. The disclosure is descriptive; the strategic response is prescriptive.</p>

            <h3>One Year Is Never Enough</h3>
            <p>A single year's composite score can be misleading — exceptional gains, one-time impairments, or a windfall settlement distort the picture. Always compute scores for at least three consecutive years. Strip out exceptional items if material. The Schedule III 25% variance rule exists precisely because year-on-year comparison is more informative than absolute thresholds.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Audit, Advisory &amp; CIRP Support</h3>
            <p>Schedule III ratio audits, SA 570 going-concern review, IBC pre-pack screening, lender covenant tests — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Financial%20Health%20Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Financial%20Health%20Score%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Financial%20Health%20Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

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
            <h3>Related Tools</h3>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity Calculator<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/ebitda-margin-calculator" class="sidebar-link">EBITDA Margin Calculator<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle<span class="arrow">→</span></a>
            <a href="/tools/pe-ratio-calculator" class="sidebar-link">P/E Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/altman-z-score-calculator" class="sidebar-link">Altman Z-Score (standalone)<span class="arrow">→</span></a>
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
        <button type="button" class="faq-question" aria-expanded="false">What is a Financial Health Score?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">A Financial Health Score is a composite metric ranging from 0 to 100 that summarises a company's overall financial condition across five dimensions — Liquidity, Solvency, Profitability, Efficiency, and Cash Flow. Each dimension contributes 20 points based on weighted underlying ratios. The score helps lenders, investors, auditors, and management quickly assess financial strength without examining ten ratios separately. Scores above 80 indicate excellent health, 65-79 good, 50-64 watch zone, 30-49 stressed, and below 30 indicate distress with high default probability.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the Altman Z-Score?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Altman Z-Score is a multivariate distress-prediction model developed by Edward Altman in 1968, combining five financial ratios into a single bankruptcy-risk score for public manufacturers. Variants Z' (1983, private manufacturers) and Z'' (1995, non-manufacturers and emerging markets) extend coverage with different coefficients and cutoffs. Academic studies including Indian listed companies document 70-90% accuracy 1-2 years before bankruptcy. Credit rating agencies and lenders use the score as one input in distress assessment alongside trend, peer, and qualitative analysis.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Which Altman model applies to Indian companies?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Choice depends on entity type. The original Z-Score requires market value of equity, so it suits only listed manufacturers. Z'-Score replaces market value with book value, suiting private manufacturing companies. Z''-Score eliminates Sales/Total Assets and is calibrated for non-manufacturing, services, and emerging-market companies — making it the most commonly applied variant for Indian listed and unlisted services, IT, FMCG, healthcare, and trading entities. Indian academic studies validate Z'' for services and Z' for SME manufacturers as reliable distress predictors.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How is the composite score calculated?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The composite score allocates 20 points each to five dimensions. Liquidity scores Current Ratio (target above 1.5) and Quick Ratio (target above 1.0). Solvency scores Debt-to-Equity (target below 1.0) and equity cushion. Profitability scores PAT Margin, ROE (target above 15%), and ROA. Efficiency scores Asset Turnover and Working Capital Turnover. Cash Flow scores OCF positivity and OCF-to-Total Debt coverage. Each ratio maps to a graduated points scale calibrated to Indian sector medians.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Schedule III ratio disclosure?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Companies (Accounts) Amendment Rules 2021 effective FY 2021-22 mandate disclosure of eleven financial ratios in the Notes to Financial Statements for all companies preparing accounts under Schedule III. The ratios include Current Ratio, Debt-Equity Ratio, Debt Service Coverage Ratio, Return on Equity, Inventory Turnover, Trade Receivables Turnover, Trade Payables Turnover, Net Capital Turnover, Net Profit Ratio, Return on Capital Employed, and Return on Investment. Year-on-year variance exceeding 25% requires explanation. Six of these are direct outputs of this calculator.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How reliable is the Altman Z-Score for Indian companies?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Multiple Indian academic studies covering BSE-listed entities, NCLT cases, and SME borrowers validate the model. Z''-Score shows 80-87% accuracy one year before default and 70-75% two years before. The model is more reliable for non-financial companies — banks, NBFCs, and insurers are excluded due to balance sheet opacity and off-balance-sheet exposures. Limitations include sensitivity to accounting manipulation and reduced reliability for startups burning capital on growth investment that depresses profitability ratios.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the IBC default threshold?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">IBC 2016 Section 4, as amended on 24 March 2020, raised the minimum default threshold for Corporate Insolvency Resolution Process from one lakh to one crore rupees. Operational and financial creditors can file under Sections 7, 9, or 10 if the corporate debtor defaults on one crore or more. The calculator flags this when total debt exceeds the threshold and Operating Cash Flow signals weak servicing capacity. Pre-pack insolvency under Section 54A applies to MSMEs at a ten-lakh threshold.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the RBI SMA framework?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">RBI's Special Mention Account framework, codified in the Master Direction on Income Recognition Asset Classification and Provisioning, requires banks to classify accounts based on overdue duration before they become Non-Performing Assets. SMA-0 covers principal or interest overdue but not yet 30 days, SMA-1 covers 31-60 days overdue, and SMA-2 covers 61-90 days overdue. After 90 days, the account becomes NPA. The calculator's distress score correlates with SMA migration probability and is used by lenders in early-warning systems and CRILC reporting.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does Section 164(2) affect distressed companies?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 164(2) of the Companies Act 2013 disqualifies all directors of a company that has not filed financial statements or annual returns for any continuous period of three financial years, or that has failed to repay deposits or pay declared dividends for one year. Disqualification lasts five years across all companies and existing DINs are deactivated by MCA. Distressed companies often miss filings, triggering this cascade. Combined with auditor SA 570 going-concern qualification, consequences extend beyond financial distress.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is SA 570 going concern?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Standard on Auditing 570 issued by ICAI requires statutory auditors to evaluate management's assessment of the entity's ability to continue as a going concern for at least twelve months from the balance sheet date. If material uncertainty exists, the auditor must include an Emphasis of Matter or modify the opinion. Indicators include negative net worth, covenant breach, recurring losses, negative operating cash flow, and adverse Altman scores. Companies with Composite Score below 30 typically warrant SA 570 disclosure.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can a company have a low score but still be healthy?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, in specific business models. Modern retail and quick-commerce companies operate with negative working capital by design — they collect from customers before paying suppliers, generating float. Their Liquidity dimension scores low but Cash Flow remains strong. Capital-intensive infrastructure firms in growth phase show low Profitability while building asset base. Holding companies show low Asset Turnover. Always interpret scores against industry context and the company's strategic stage. Trend over three to five years is more revealing than a single-year snapshot.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Who uses Financial Health Score in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Banks and NBFCs use it for credit appraisal under Tandon Committee, Nayak Committee, and IRAC norms. Statutory auditors apply it for SA 570 going-concern review. Internal auditors fold it into risk-based plans. M&amp;A advisors and PE firms screen targets. Resolution Professionals under IBC use it during CIRP. CRISIL, ICRA, CARE incorporate similar multi-factor models. Corporate treasuries monitor it for vendor and customer counterparty risk under Ind AS 109 ECL provisioning. CA students learn it for advanced auditing papers.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What financial inputs are required?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Required inputs come from balance sheet and P&amp;L. Balance sheet: Total Assets, Total Liabilities, Current Assets, Current Liabilities, Inventory, Total Debt, Equity, Retained Earnings, and Market Cap if listed. P&amp;L: Revenue, EBIT (or PAT plus Tax plus Interest), Interest Expense, and PAT. Cash Flow Statement: Operating Cash Flow. Optional: previous-year score for variance flagging. All values in rupees crore. Inputs map directly to Schedule III Part I (Balance Sheet) and Part II (P&amp;L) under Ind AS or Indian GAAP.</div></div>
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
    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 2, minimumFractionDigits: 0}) + ' Cr';
    }
    function v(id) {
        const el = document.getElementById(id);
        if (!el || el.value === '') return null;
        const val = parseINR(el.value);
        return isNaN(val) ? null : val;
    }
    function clamp(n, lo, hi) { return Math.max(lo, Math.min(hi, n)); }
    function pts(value, brackets) {
        // brackets: array of {threshold, points} sorted descending by threshold
        for (let i = 0; i < brackets.length; i++) {
            if (value >= brackets[i].threshold) return brackets[i].points;
        }
        return 0;
    }

    // ============ COMPOSITE SCORING (0-100, 5 dimensions × 20 each) ============
    function scoreLiquidity(currentRatio, quickRatio) {
        // Current Ratio: 12 points max
        const crPts = pts(currentRatio, [
            {threshold: 1.5, points: 12},
            {threshold: 1.2, points: 9},
            {threshold: 1.0, points: 5},
            {threshold: 0.8, points: 2},
            {threshold: 0,   points: 0}
        ]);
        // Quick Ratio: 8 points max
        const qrPts = pts(quickRatio, [
            {threshold: 1.0, points: 8},
            {threshold: 0.8, points: 6},
            {threshold: 0.5, points: 3},
            {threshold: 0.3, points: 1},
            {threshold: 0,   points: 0}
        ]);
        return Math.min(20, crPts + qrPts);
    }

    function scoreSolvency(de, equityToAsset, hasNegEquity) {
        if (hasNegEquity) return 0;
        // D/E: 12 points max (lower is better)
        let dePts;
        if (de <= 0.5) dePts = 12;
        else if (de <= 1.0) dePts = 10;
        else if (de <= 1.5) dePts = 7;
        else if (de <= 2.0) dePts = 4;
        else if (de <= 3.0) dePts = 2;
        else dePts = 0;
        // Equity to Asset: 8 points
        const eaPts = pts(equityToAsset, [
            {threshold: 0.50, points: 8},
            {threshold: 0.35, points: 6},
            {threshold: 0.25, points: 4},
            {threshold: 0.15, points: 2},
            {threshold: 0,    points: 0}
        ]);
        return Math.min(20, dePts + eaPts);
    }

    function scoreProfitability(patMargin, roe, roa) {
        if (patMargin < 0 || roe < 0 || roa < 0) {
            // Loss-making — give partial credit only if not severely negative
            if (patMargin > -0.05) return 3;
            return 0;
        }
        // PAT Margin (8 pts)
        const pmPts = pts(patMargin, [
            {threshold: 0.12, points: 8},
            {threshold: 0.08, points: 6},
            {threshold: 0.05, points: 4},
            {threshold: 0.02, points: 2},
            {threshold: 0,    points: 0}
        ]);
        // ROE (7 pts)
        const roePts = pts(roe, [
            {threshold: 0.20, points: 7},
            {threshold: 0.15, points: 6},
            {threshold: 0.10, points: 4},
            {threshold: 0.05, points: 2},
            {threshold: 0,    points: 0}
        ]);
        // ROA (5 pts)
        const roaPts = pts(roa, [
            {threshold: 0.08, points: 5},
            {threshold: 0.05, points: 4},
            {threshold: 0.03, points: 3},
            {threshold: 0.01, points: 1},
            {threshold: 0,    points: 0}
        ]);
        return Math.min(20, pmPts + roePts + roaPts);
    }

    function scoreEfficiency(assetTurnover, wcTurnover, hasNegWC) {
        // Asset Turnover (12 pts) — context-aware bands
        const atPts = pts(assetTurnover, [
            {threshold: 1.5, points: 12},
            {threshold: 1.0, points: 10},
            {threshold: 0.7, points: 7},
            {threshold: 0.4, points: 4},
            {threshold: 0.2, points: 2},
            {threshold: 0,   points: 0}
        ]);
        // WC Turnover (8 pts) — handle negative WC explicitly
        let wcPts;
        if (hasNegWC) {
            wcPts = 6; // Modern retail / Q-com float — partial credit
        } else if (wcTurnover >= 4 && wcTurnover <= 12) {
            wcPts = 8;
        } else if (wcTurnover >= 2 && wcTurnover < 4) {
            wcPts = 5;
        } else if (wcTurnover > 12 && wcTurnover <= 25) {
            wcPts = 6; // High WC turnover = stressed but functional
        } else if (wcTurnover > 25) {
            wcPts = 3; // Extreme = working capital squeeze
        } else {
            wcPts = 1;
        }
        return Math.min(20, atPts + wcPts);
    }

    function scoreCashFlow(ocf, ocfToDebt) {
        // OCF positivity (10 pts)
        let ocfPts;
        if (ocf > 0) ocfPts = 10;
        else if (ocf === 0) ocfPts = 4;
        else ocfPts = 0;
        // OCF/Debt (10 pts) — only if debt > 0 and ocf > 0
        let coverPts;
        if (ocf <= 0) coverPts = 0;
        else if (ocfToDebt === Infinity || ocfToDebt >= 0.50) coverPts = 10; // No debt OR strong coverage
        else if (ocfToDebt >= 0.25) coverPts = 8;
        else if (ocfToDebt >= 0.15) coverPts = 5;
        else if (ocfToDebt >= 0.05) coverPts = 2;
        else coverPts = 0;
        return Math.min(20, ocfPts + coverPts);
    }

    // ============ ALTMAN Z-SCORE VARIANTS ============
    function altmanZ(wcTa, reTa, ebitTa, mvTl, salesTa) {
        return 1.2 * wcTa + 1.4 * reTa + 3.3 * ebitTa + 0.6 * mvTl + 1.0 * salesTa;
    }
    function altmanZPrime(wcTa, reTa, ebitTa, bvTl, salesTa) {
        return 0.717 * wcTa + 0.847 * reTa + 3.107 * ebitTa + 0.420 * bvTl + 0.998 * salesTa;
    }
    function altmanZDoublePrime(wcTa, reTa, ebitTa, bvTl) {
        return 6.56 * wcTa + 3.26 * reTa + 6.72 * ebitTa + 1.05 * bvTl;
    }
    function altmanZone(score, variant) {
        if (variant === 'public_mfg') {
            if (score > 2.99) return {zone: 'Safe Zone', cls: 'safe'};
            if (score >= 1.81) return {zone: 'Grey Zone', cls: 'grey'};
            return {zone: 'Distress Zone', cls: 'distress'};
        }
        if (variant === 'private_mfg') {
            if (score > 2.90) return {zone: 'Safe Zone', cls: 'safe'};
            if (score >= 1.23) return {zone: 'Grey Zone', cls: 'grey'};
            return {zone: 'Distress Zone', cls: 'distress'};
        }
        // services / Z''
        if (score > 2.60) return {zone: 'Safe Zone', cls: 'safe'};
        if (score >= 1.10) return {zone: 'Grey Zone', cls: 'grey'};
        return {zone: 'Distress Zone', cls: 'distress'};
    }

    // ============ MAIN COMPUTE ============
    function compute() {
        const entity = getActiveValue('entityGroup');

        const ta = v('ta'), tl = v('tl'), ca = v('ca'), cl = v('cl');
        const inv = v('inv'), td = v('td'), eq = v('eq'), re = v('re');
        const mcap = v('mcap'), rev = v('rev'), ebit = v('ebit');
        const intexp = v('intexp'), pat = v('pat'), ocf = v('ocf');
        const prevScore = v('prevScore');

        // Validation
        const required = {ta, tl, ca, cl, inv, td, eq, re, rev, ebit, intexp, pat, ocf};
        const missing = [];
        for (const k in required) {
            if (required[k] === null) missing.push(k);
        }
        if (entity === 'public_mfg' && mcap === null) missing.push('mcap');
        if (missing.length > 0) {
            alert('Please fill all required inputs. Missing: ' + missing.length + ' field(s).');
            return;
        }
        if (ta <= 0) { alert('Total Assets must be greater than zero.'); return; }
        if (rev < 0) { alert('Revenue cannot be negative.'); return; }

        // Derived ratios
        const wc = ca - cl;
        const currentRatio = cl > 0 ? ca / cl : (ca > 0 ? 99 : 0);
        const quickRatio = cl > 0 ? (ca - inv) / cl : ((ca - inv) > 0 ? 99 : 0);
        const de = eq > 0 ? td / eq : (td > 0 ? 99 : 0);
        const equityToAsset = eq / ta;
        const hasNegEquity = eq <= 0;
        const patMargin = rev > 0 ? pat / rev : 0;
        const roe = eq > 0 ? pat / eq : 0;
        const roa = pat / ta;
        const roce = ta > 0 ? ebit / (eq + td) : 0;
        const assetTurnover = rev / ta;
        const wcTurnover = wc !== 0 ? rev / Math.abs(wc) : 0;
        const hasNegWC = wc < 0;
        const icr = intexp > 0 ? ebit / intexp : (ebit > 0 ? 99 : 0);
        const ocfToDebt = td > 0 ? ocf / td : Infinity;
        const npRatio = patMargin;

        // Composite score
        const dimLiq = scoreLiquidity(currentRatio, quickRatio);
        const dimSolv = scoreSolvency(de, equityToAsset, hasNegEquity);
        const dimProf = scoreProfitability(patMargin, roe, roa);
        const dimEff = scoreEfficiency(assetTurnover, wcTurnover, hasNegWC);
        const dimCash = scoreCashFlow(ocf, ocfToDebt);
        const composite = Math.round(dimLiq + dimSolv + dimProf + dimEff + dimCash);

        // Altman
        const wcTa = wc / ta, reTa = re / ta, ebitTa = ebit / ta, salesTa = rev / ta;
        const bvTl = tl > 0 ? eq / tl : (eq > 0 ? 99 : 0);
        let altmanScore, altmanFormula, altmanLabel;
        if (entity === 'public_mfg') {
            const mvTl = tl > 0 ? mcap / tl : (mcap > 0 ? 99 : 0);
            altmanScore = altmanZ(wcTa, reTa, ebitTa, mvTl, salesTa);
            altmanLabel = 'Altman Z-Score (Listed Manufacturer)';
            altmanFormula = '1.2(WC/TA) + 1.4(RE/TA) + 3.3(EBIT/TA) + 0.6(MV/TL) + 1.0(Sales/TA)';
        } else if (entity === 'private_mfg') {
            altmanScore = altmanZPrime(wcTa, reTa, ebitTa, bvTl, salesTa);
            altmanLabel = "Altman Z'-Score (Private Manufacturer)";
            altmanFormula = "0.717(WC/TA) + 0.847(RE/TA) + 3.107(EBIT/TA) + 0.420(BV/TL) + 0.998(Sales/TA)";
        } else {
            altmanScore = altmanZDoublePrime(wcTa, reTa, ebitTa, bvTl);
            altmanLabel = "Altman Z''-Score (Services / Non-Manufacturer)";
            altmanFormula = "6.56(WC/TA) + 3.26(RE/TA) + 6.72(EBIT/TA) + 1.05(BV/TL)";
        }
        const zone = altmanZone(altmanScore, entity);

        renderResult({
            entity: entity, composite: composite,
            dims: {liq: dimLiq, solv: dimSolv, prof: dimProf, eff: dimEff, cash: dimCash},
            altmanScore: altmanScore, altmanLabel: altmanLabel, altmanFormula: altmanFormula, altmanZone: zone,
            ratios: {currentRatio, quickRatio, de, roe, roa, roce, assetTurnover, icr, npRatio, ocfToDebt, wc, hasNegEquity, hasNegWC},
            inputs: {ta, tl, td, eq, rev, ebit, pat, ocf, mcap, intexp},
            prevScore: prevScore
        });
    }

    function renderResult(r) {
        // Verdict band
        let band, bandClass, headline, pillText;
        if (r.composite >= 80) { band = 'excellent'; bandClass = 'excellent'; headline = 'Excellent — Strong Financial Health'; pillText = '✓ Healthy'; }
        else if (r.composite >= 65) { band = 'good'; bandClass = 'good'; headline = 'Good — Stable Financial Position'; pillText = '✓ Stable'; }
        else if (r.composite >= 50) { band = 'watch'; bandClass = 'watch'; headline = 'Watch — Moderate Risk Indicators'; pillText = '◯ Watch'; }
        else if (r.composite >= 30) { band = 'stressed'; bandClass = 'stressed'; headline = 'Stressed — High Risk Profile'; pillText = '⚠ Stressed'; }
        else { band = 'distress'; bandClass = 'distress'; headline = 'Distress — Critical Financial Condition'; pillText = '⛔ Distress'; }

        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + bandClass;
        document.getElementById('verdictHeadline').textContent = headline;
        document.getElementById('scoreVal').innerHTML = r.composite + '<span class="score-mega-suffix">/ 100</span>';
        const pill = document.getElementById('verdictPill');
        pill.className = 'verdict-pill ' + bandClass;
        pill.textContent = pillText;

        // Dimension grid
        const dimGrid = document.getElementById('dimGrid');
        dimGrid.innerHTML = '';
        const dimItems = [
            {label: 'Liquidity', val: r.dims.liq},
            {label: 'Solvency', val: r.dims.solv},
            {label: 'Profitability', val: r.dims.prof},
            {label: 'Efficiency', val: r.dims.eff},
            {label: 'Cash Flow', val: r.dims.cash}
        ];
        dimItems.forEach(function(d) {
            const pct = (d.val / 20) * 100;
            const cls = pct >= 70 ? 'high' : (pct >= 40 ? 'mid' : 'low');
            const div = document.createElement('div');
            div.className = 'dim-card';
            div.innerHTML = '<div class="dim-label">' + d.label + '</div><div class="dim-value">' + d.val + '<span class="dim-value-suffix">/20</span></div><div class="dim-bar"><div class="dim-bar-fill ' + cls + '" style="width:' + pct + '%"></div></div>';
            dimGrid.appendChild(div);
        });

        // Altman
        document.getElementById('altmanScore').textContent = r.altmanScore.toFixed(2);
        document.getElementById('altmanVariant').textContent = r.altmanLabel;
        document.getElementById('altmanZone').textContent = r.altmanZone.zone;
        let altExplain = '';
        if (r.altmanZone.cls === 'safe') altExplain = 'Low bankruptcy probability over the next 12-24 months. Standard going-concern assumption holds for SA 570 audit purposes.';
        else if (r.altmanZone.cls === 'grey') altExplain = 'Ambiguous zone — neither clearly distressed nor safe. Auditors should consider Emphasis of Matter disclosure if other indicators corroborate.';
        else altExplain = 'High bankruptcy probability over the next 12-24 months. Strong indicator for SA 570 material uncertainty disclosure or qualified opinion. IBC pre-pack or CIRP screening recommended.';
        document.getElementById('altmanExplainer').textContent = altExplain;

        // Ratio quick grid (5 cards)
        const rg = document.getElementById('ratioGrid');
        rg.innerHTML = '';
        const ratios = [
            {label: 'Current Ratio', val: r.ratios.currentRatio === 99 ? '∞' : r.ratios.currentRatio.toFixed(2), sub: 'CA / CL', highlight: true},
            {label: 'Debt / Equity', val: r.ratios.de === 99 ? 'N/A' : r.ratios.de.toFixed(2), sub: 'Total Debt / Equity'},
            {label: 'ROE', val: r.ratios.hasNegEquity ? 'N/A' : (r.ratios.roe * 100).toFixed(1) + '%', sub: 'PAT / Equity'},
            {label: 'ROA', val: (r.ratios.roa * 100).toFixed(1) + '%', sub: 'PAT / Total Assets'},
            {label: 'Interest Cov.', val: r.ratios.icr === 99 ? '∞' : r.ratios.icr.toFixed(2) + 'x', sub: 'EBIT / Interest'}
        ];
        ratios.forEach(function(it) {
            const c = document.createElement('div');
            c.className = 'ratio-card' + (it.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="ratio-label">' + it.label + '</div><div class="ratio-value">' + it.val + '</div><div class="ratio-sub">' + it.sub + '</div>';
            rg.appendChild(c);
        });

        // Trend banner — 25% variance
        const trendBanner = document.getElementById('trendBanner');
        if (r.prevScore !== null && r.prevScore > 0) {
            const variancePct = ((r.composite - r.prevScore) / r.prevScore) * 100;
            const absVar = Math.abs(variancePct);
            if (absVar > 25) {
                trendBanner.style.display = 'block';
                trendBanner.className = 'info-banner ' + (variancePct >= 0 ? 'success' : 'warn');
                trendBanner.innerHTML = '<strong>Schedule III 25% variance flag triggered.</strong> Composite score moved from ' + r.prevScore + ' to ' + r.composite + ' (' + (variancePct >= 0 ? '+' : '') + variancePct.toFixed(1) + '%). Companies (Accounts) Amendment Rules 2021 require explanation of the variance in Notes to Accounts. Identify the cause — operational change, capital structure shift, accounting policy change, or one-time item.';
            } else {
                trendBanner.style.display = 'block';
                trendBanner.className = 'info-banner info';
                trendBanner.innerHTML = '<strong>Year-on-year change ' + (variancePct >= 0 ? '+' : '') + variancePct.toFixed(1) + '%.</strong> Within the 25% Schedule III threshold — standard disclosure suffices.';
            }
        } else {
            trendBanner.style.display = 'none';
        }

        // IBC banner
        const ibcBanner = document.getElementById('ibcBanner');
        if (r.inputs.td >= 1.0 && (r.ratios.ocfToDebt < 0.10 || r.inputs.ocf < 0)) {
            ibcBanner.style.display = 'block';
            ibcBanner.className = 'info-banner danger';
            ibcBanner.innerHTML = '<strong>IBC Section 4 exposure flag.</strong> Total debt of ' + fmtINR(r.inputs.td) + ' exceeds the ₹1 crore default threshold. Operating Cash Flow of ' + fmtINR(r.inputs.ocf) + ' signals weak debt-servicing capacity. Operational or financial creditors can initiate CIRP under Sections 7 or 9. Consider voluntary restructuring, RBI SMA classification review, or pre-pack insolvency under Section 54A if MSME-eligible.';
        } else if (r.inputs.td >= 1.0 && r.altmanZone.cls === 'distress') {
            ibcBanner.style.display = 'block';
            ibcBanner.className = 'info-banner warn';
            ibcBanner.innerHTML = '<strong>IBC monitoring zone.</strong> Total debt of ' + fmtINR(r.inputs.td) + ' exceeds the ₹1 crore threshold and Altman score signals distress. Strengthen lender communication, document covenant compliance, and review SMA reporting from banking partners.';
        } else {
            ibcBanner.style.display = 'none';
        }

        // Advisory banner
        const adv = document.getElementById('advisoryBanner');
        if (band === 'excellent') {
            adv.className = 'info-banner success';
            adv.innerHTML = '<strong>Strong financial profile across all five dimensions.</strong> Standard going-concern assumption holds. Suitable for premium credit terms, larger working capital limits, and investment-grade positioning. Continue quarterly monitoring against sector trend.';
        } else if (band === 'good') {
            adv.className = 'info-banner success';
            adv.innerHTML = '<strong>Stable financial position with minor weaknesses.</strong> Identify the lowest-scoring dimension and address it before it becomes a stress point. Annual review with sector benchmark comparison is sufficient.';
        } else if (band === 'watch') {
            adv.className = 'info-banner info';
            adv.innerHTML = '<strong>Moderate risk indicators present.</strong> One or more dimensions are weak. Quarterly review recommended. Lenders typically tighten covenants at this band — Debt Service Coverage and OCF projections should be discussed with banking partners. Audit committee should review SA 570 indicators.';
        } else if (band === 'stressed') {
            adv.className = 'info-banner warn';
            adv.innerHTML = '<strong>Stressed profile — multiple weak dimensions.</strong> SA 570 going-concern review required. Auditor likely to disclose material uncertainty via Emphasis of Matter. Restructuring discussions with lenders advisable. Consider RBI Resolution Framework or one-time settlement options before SMA-2 trigger.';
        } else {
            adv.className = 'info-banner danger';
            adv.innerHTML = '<strong>Critical financial condition — high default probability within 12-24 months.</strong> Statutory auditor likely to qualify or disclaim opinion. Resolution Professional consultation recommended. Pre-pack insolvency under Section 54A (MSME) or voluntary CIRP under Section 10 (corporate debtor) should be evaluated. Section 164(2) director-disqualification cascade activates if filings are missed for three consecutive years.';
        }

        // Basis block
        const variantName = r.entity === 'public_mfg' ? 'Z-Score' : (r.entity === 'private_mfg' ? "Z'-Score" : "Z''-Score");
        let basis = '<strong>Composite Score</strong> = ' + r.dims.liq + ' (Liquidity) + ' + r.dims.solv + ' (Solvency) + ' + r.dims.prof + ' (Profitability) + ' + r.dims.eff + ' (Efficiency) + ' + r.dims.cash + ' (Cash Flow) = <strong>' + r.composite + ' / 100</strong>.';
        basis += '<br><br><strong>Altman ' + variantName + '</strong> = ' + r.altmanFormula + ' = <strong>' + r.altmanScore.toFixed(2) + '</strong> (' + r.altmanZone.zone + ').';
        basis += '<br><br><em>Schedule III ratios derived:</em> Current Ratio ' + (r.ratios.currentRatio === 99 ? '∞' : r.ratios.currentRatio.toFixed(2)) + ', Debt-Equity ' + (r.ratios.de === 99 ? 'N/A' : r.ratios.de.toFixed(2)) + ', ROE ' + (r.ratios.hasNegEquity ? 'N/A' : (r.ratios.roe * 100).toFixed(1) + '%') + ', Net Profit Ratio ' + (r.ratios.npRatio * 100).toFixed(1) + '%, ROCE ' + (r.ratios.roce * 100).toFixed(1) + '%.';
        if (r.ratios.hasNegEquity) {
            basis += '<br><br><em><strong>Negative net worth detected.</strong> Equity has been wiped out by accumulated losses — automatic distress flag under SA 570 going-concern indicators.</em>';
        }
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    // Entity toggle — show/hide Market Cap row
    setupToggleGroup('entityGroup', function() {
        const entity = getActiveValue('entityGroup');
        const mcapRow = document.getElementById('mcapRow');
        if (entity === 'public_mfg') {
            mcapRow.style.display = '';
        } else {
            mcapRow.style.display = 'none';
        }
        document.getElementById('resultSection').classList.remove('visible');
    });
    // Initial state
    document.getElementById('mcapRow').style.display = '';

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['ta','tl','ca','cl','inv','td','eq','re','mcap','rev','ebit','intexp','pat','ocf','prevScore'].forEach(function(id) {
            const el = document.getElementById(id);
            if (el) el.value = '';
        });
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
