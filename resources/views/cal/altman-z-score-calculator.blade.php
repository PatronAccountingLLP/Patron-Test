@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Altman Z-Score Calculator | Bankruptcy Risk Predictor</title>
    <meta name="description" content="Free Altman Z-Score calculator: original, Z' (private) & Z'' (non-manufacturing) models to predict bankruptcy & financial distress risk. CA-reviewed. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/altman-z-score-calculator/">
    <meta property="og:title" content="Altman Z-Score Calculator — Bankruptcy Predictor 2026">
    <meta property="og:description" content="Compute Altman Z-Score with all 3 versions: original, Z-prime (private), Z-double-prime (non-manufacturing/India). CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/altman-z-score-calculator">
    <meta property="og:image" content="/tools/og/altman-z-score-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Altman Z-Score Calculator — Bankruptcy Predictor 2026">
    <meta name="twitter:description" content="3 Z-Score versions: original, private, non-manufacturing. Bankruptcy distress predictor. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/altman-z-score-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Altman Z-Score Calculator",
      "description": "Altman Z-Score Calculator implements all three versions of Edward Altman's bankruptcy prediction model — the original 1968 Z-Score for public manufacturing companies, the Z-Prime Score for private manufacturing companies (book value of equity instead of market value), and the Z-Double-Prime Score for non-manufacturing companies and emerging markets including Indian listed and unlisted companies. The model uses five financial ratios for original and Z-Prime (Working Capital to Total Assets, Retained Earnings to Total Assets, EBIT to Total Assets, Equity to Total Liabilities, Sales to Total Assets) and four ratios for Z-Double-Prime (omitting Sales to Total Assets to neutralise industry asset-intensity differences). Output includes the Z-Score with zone classification (Safe Zone, Grey Zone, Distress Zone), component breakdown showing each weighted X variable contribution, recommended version selector based on company type, and integration with Standard on Auditing 570 Going Concern evaluation, CARO 2020 Clause 3(xix) reporting requirements, RBI early warning signals for stressed asset classification, and IBC 2016 distress filtering. Suitable for credit appraisal, audit going concern testing, equity research distress screening, and CFO early warning systems.",
      "url": "/tools/altman-z-score-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Altman Z-Score Calculator", "item": "/tools/altman-z-score-calculator"}
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
          "name": "What is the Altman Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Altman Z-Score is a multivariate bankruptcy prediction model developed by Professor Edward Altman in 1968. It combines five weighted financial ratios into a single score that predicts the probability of corporate bankruptcy within two years. The original model achieved approximately 80-90% accuracy on historical US public manufacturing data. Three versions exist for different company types: original Z-Score, Z-Prime for private companies, and Z-Double-Prime for non-manufacturing and emerging market companies including Indian listed and unlisted firms."
          }
        },
        {
          "@type": "Question",
          "name": "What are the three versions of Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three versions exist: Original Z-Score (1968) for public manufacturing companies — uses 5 ratios including Market Value of Equity. Z-Prime Score for private manufacturing companies — same 5 ratios but Book Value of Equity instead of market value. Z-Double-Prime Score for non-manufacturing companies and emerging markets — uses 4 ratios (drops Sales/Total Assets) to remove industry asset-intensity bias. The Z-Double-Prime is most commonly used for Indian listed and unlisted services, IT, retail and infrastructure companies."
          }
        },
        {
          "@type": "Question",
          "name": "What do the X variables in Z-Score mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "X1 = Working Capital ÷ Total Assets (liquidity). X2 = Retained Earnings ÷ Total Assets (cumulative profitability and age). X3 = EBIT ÷ Total Assets (operating productivity). X4 = Market or Book Value of Equity ÷ Total Liabilities (solvency cushion). X5 = Sales ÷ Total Assets (asset turnover, manufacturing only). Each captures a different distress signal — liquidity strain, accumulated losses, weak earnings power, undercapitalisation, or asset bloat. The weighted sum identifies companies likely to fail."
          }
        },
        {
          "@type": "Question",
          "name": "What are the Z-Score zone thresholds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Original Z-Score: Z > 2.99 Safe Zone, 1.81-2.99 Grey Zone, Z < 1.81 Distress Zone. Z-Prime: Z > 2.9 Safe, 1.23-2.9 Grey, Z < 1.23 Distress. Z-Double-Prime: Z > 2.6 Safe, 1.1-2.6 Grey, Z < 1.1 Distress. Companies in Distress Zone have historically shown ~85% bankruptcy probability within two years; Grey Zone is statistically ambiguous and warrants closer investigation; Safe Zone has very low historical bankruptcy rates but does not guarantee survival."
          }
        },
        {
          "@type": "Question",
          "name": "Which Z-Score version should I use for Indian companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most Indian companies, the Z-Double-Prime is preferred as it was specifically designed for emerging markets and non-manufacturing businesses. Use Original Z-Score only for listed Indian manufacturing companies with reliable market capitalisation data. Use Z-Prime for unlisted manufacturing companies. Use Z-Double-Prime for IT, services, retail, real estate, infrastructure, banks, NBFCs and any company without clear manufacturing classification. Z-Double-Prime is also more robust to differences between Indian and US accounting practices."
          }
        },
        {
          "@type": "Question",
          "name": "How does Z-Score relate to IBC distress signals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Insolvency and Bankruptcy Code 2016 enables creditors to file for corporate insolvency under Section 7 (financial creditors), Section 9 (operational creditors), or Section 10 (corporate applicant). While IBC triggers are based on actual default (not predicted), Z-Score serves as an early warning indicator — Distress Zone companies are statistically much more likely to default within 12-24 months. Banks use Z-Score alongside SMA (Special Mention Account) classification under RBI prudential norms for proactive stressed asset identification."
          }
        },
        {
          "@type": "Question",
          "name": "Does Z-Score work for IT and service companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard Z-Score works poorly for service and IT companies because asset turnover (X5 = Sales/Total Assets) varies dramatically across industries, distorting the score. The Z-Double-Prime version was specifically created to address this — it removes X5 entirely and reweights the remaining four ratios. For IT and service companies, only use Z-Double-Prime. The Z-Double-Prime threshold zones (Safe greater than 2.6, Distress less than 1.1) are calibrated for non-manufacturing and emerging market businesses."
          }
        },
        {
          "@type": "Question",
          "name": "What are the limitations of Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Z-Score has several limitations: it relies on accounting numbers vulnerable to manipulation, uses historical data not forward-looking projections, was calibrated on US data from the 1960s-1990s with possible structural shifts since, treats all industries within a category uniformly, ignores qualitative factors (management, governance, regulatory environment), and does not capture cash flow timing. Use Z-Score as one screening tool among many — alongside cash flow analysis, debt service coverage, qualitative business assessment and IBC default tracking."
          }
        },
        {
          "@type": "Question",
          "name": "How does RBI use distress prediction models?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RBI's Prudential Framework for Resolution of Stressed Assets requires banks to identify incipient stress through Special Mention Account (SMA) classification — SMA-0 (1-30 days overdue), SMA-1 (31-60 days), SMA-2 (61-90 days). Beyond 90 days the account becomes a Non-Performing Asset (NPA). While SMA is based on actual payment delays, banks use complementary tools including Z-Score, Altman EM-Score, and CIBIL credit scores to identify likely stress before payment delays manifest. Early warning enables proactive restructuring or risk-based pricing."
          }
        },
        {
          "@type": "Question",
          "name": "Does Z-Score apply to banks and NBFCs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No — standard Z-Score does not apply to banks and NBFCs because their balance sheets are dominated by financial assets and deposits/borrowings, distorting all five ratios. Banks should use sector-specific frameworks: Capital Adequacy Ratio (CRAR), Liquidity Coverage Ratio (LCR), Net Stable Funding Ratio (NSFR) under RBI Basel III, Net Interest Margin (NIM), and Gross/Net NPA ratios. The CAMELS framework (Capital, Asset quality, Management, Earnings, Liquidity, Sensitivity) is the RBI standard for banking sector stress assessment."
          }
        },
        {
          "@type": "Question",
          "name": "How is Working Capital defined for Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working Capital for Z-Score = Current Assets − Current Liabilities, computed from Schedule III balance sheet line items. Current Assets include Cash, Bank Balances, Current Investments, Trade Receivables, Inventories, and Other Current Assets. Current Liabilities include Trade Payables, Short-term Borrowings, Other Current Liabilities, Provisions (current), and Current Tax Liabilities. Working Capital may be negative for businesses with strong supplier credit cycles (FMCG, retail) — Z-Score correctly flags this as a potential liquidity concern even when the business is healthy."
          }
        },
        {
          "@type": "Question",
          "name": "What counts as Retained Earnings for Z-Score?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Retained Earnings for Z-Score = accumulated net profits of the company that have not been distributed as dividends. From Schedule III balance sheet, this is found under Reserves and Surplus, specifically the Surplus / Profit and Loss account balance. Excludes capital reserves, securities premium, debenture redemption reserve and other capital nature reserves. Companies with substantial accumulated losses (negative Retained Earnings) score very low on X2, correctly reflecting the long-term unprofitability and capital depletion that frequently precede bankruptcy."
          }
        },
        {
          "@type": "Question",
          "name": "How does Z-Score connect to audit going concern under SA 570?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard on Auditing 570 (Going Concern) requires auditors to assess whether the entity will continue as a going concern for at least 12 months. Z-Score in the Distress Zone is a quantitative red flag that triggers detailed audit procedures under SA 570 Para 16 — review of management's going concern assessment, evaluation of mitigating factors, and possible Material Uncertainty paragraph in the audit report. CARO 2020 Clause 3(xix) requires reporting on material uncertainties affecting the company's ability to meet liabilities."
          }
        },
        {
          "@type": "Question",
          "name": "How accurate is Z-Score in predicting bankruptcy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Original Altman research showed Z-Score predicting bankruptcy with ~72% accuracy two years before failure and ~95% accuracy one year before failure. Subsequent studies show degraded accuracy in modern markets — typically 60-75% one year out. Accuracy is highest in the Distress and Safe zones; the Grey Zone is ambiguous by design. Combine Z-Score with qualitative analysis, cash flow projections, and multi-period trend. Do not rely on a single reading for major decisions."
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
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; } }
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
        .approach-toggle .toggle-btn { padding: 14px 12px; font-size: 13px; }
        .approach-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .equity-label-z { display: none; }
        .equity-label-zprime { display: none; }
        .equity-label-zdoubleprime { display: none; }
        body[data-mode="z"] .equity-label-z { display: inline; }
        body[data-mode="zprime"] .equity-label-zprime { display: inline; }
        body[data-mode="zdoubleprime"] .equity-label-zdoubleprime { display: inline; }
        .sales-block { display: block; }
        body[data-mode="zdoubleprime"] .sales-block { display: none; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.safe { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.grey { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.distress { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .zscore-mega { font-family: var(--font-mono); font-size: 76px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -3px; }
        .zone-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; }
        .zone-pill.safe { background: var(--success); color: #fff; }
        .zone-pill.grey { background: var(--accent); color: var(--primary-dark); }
        .zone-pill.distress { background: var(--danger); color: #fff; }

        .gauge-container { background: var(--surface); border-radius: var(--radius); padding: 20px 16px; margin: 16px 0 22px; border: 1px solid var(--border); }
        .gauge-bar { height: 16px; border-radius: 8px; position: relative; margin: 12px 0 28px; display: flex; overflow: hidden; }
        .gauge-segment { display: flex; align-items: center; justify-content: center; color: #fff; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
        .gauge-segment.distress { background: var(--danger); }
        .gauge-segment.grey { background: var(--accent); color: var(--primary-dark); }
        .gauge-segment.safe { background: var(--success); }
        .gauge-marker { position: absolute; top: -6px; width: 4px; height: 28px; background: var(--primary-dark); border-radius: 2px; transform: translateX(-50%); transition: left 0.5s ease; z-index: 2; }
        .gauge-marker::after { content: attr(data-val); position: absolute; bottom: -22px; left: 50%; transform: translateX(-50%); font-family: var(--font-mono); font-size: 13px; font-weight: 700; color: var(--primary-dark); white-space: nowrap; background: var(--card); padding: 1px 6px; border-radius: 4px; box-shadow: var(--shadow-sm); }

        .components-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 13px; }
        .components-table thead th { background: var(--primary); color: #fff; padding: 10px 12px; text-align: right; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .components-table thead th:first-child, .components-table thead th:nth-child(2) { text-align: left; }
        .components-table thead th:first-child { border-radius: 6px 0 0 0; }
        .components-table thead th:last-child { border-radius: 0 6px 0 0; }
        .components-table tbody td { padding: 8px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .components-table tbody td:first-child, .components-table tbody td:nth-child(2) { text-align: left; font-family: var(--font-body); }
        .components-table tbody td:first-child { font-weight: 700; color: var(--primary); width: 50px; }
        .components-table tbody td:nth-child(2) { color: var(--primary-dark); font-weight: 600; }
        .components-table tbody tr:nth-child(even) { background: var(--surface); }
        .components-table tfoot td { padding: 10px 12px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 13px; text-align: right; font-family: var(--font-mono); }
        .components-table tfoot td:first-child, .components-table tfoot td:nth-child(2) { text-align: left; font-family: var(--font-body); }

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
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
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
            .rate-table, .components-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .zscore-mega { font-size: 56px; }
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
        <a href="#zones">Zone Thresholds</a>
        <a href="#applications">Applications</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Altman Z-Score Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Altman Z-Score <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Altman%20Z-Score%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Altman%20Z-Score%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Altman%20Z-Score%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Altman Z-Score is the classic bankruptcy prediction model — combining 5 weighted financial ratios into a single score that classifies companies into Safe, Grey, or Distress zones. This tool implements all three versions: <strong>Original Z-Score</strong> for public manufacturing companies, <strong>Z-Prime</strong> for private manufacturing companies, and <strong>Z-Double-Prime</strong> for non-manufacturing and emerging markets — recommended for most Indian companies. Used by lenders, equity researchers, auditors (SA 570 Going Concern), and CFOs as an early warning system. Distress Zone companies historically show ~85% bankruptcy probability within 2 years.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Altman Z-Score</h2>
            <p class="calc-intro">Choose the version that matches your company type. <strong>Z-Double-Prime</strong> is recommended for most Indian companies — it works for both manufacturing and non-manufacturing, listed and unlisted.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="modeGroup" role="tablist" aria-label="Z-Score version">
                <button type="button" class="toggle-btn" data-value="z" role="tab" aria-selected="false">Original Z (Listed Mfg)</button>
                <button type="button" class="toggle-btn" data-value="zprime" role="tab" aria-selected="false">Z-Prime (Private Mfg)</button>
                <button type="button" class="toggle-btn active" data-value="zdoubleprime" role="tab" aria-selected="true">Z″ (Non-Mfg / Emerging)</button>
            </div>

            <div class="calc-section-title">Balance Sheet</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="totalAssets">Total Assets (₹)</label>
                    <input type="text" id="totalAssets" min="0" step="any" placeholder="e.g. 100000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total of all assets per Schedule III balance sheet.</span>
                </div>
                <div class="form-group">
                    <label for="totalLiab">Total Liabilities (₹)</label>
                    <input type="text" id="totalLiab" min="0" step="any" placeholder="e.g. 60000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total liabilities — current + non-current — excluding equity.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="workingCapital">Working Capital (₹)</label>
                    <input type="text" id="workingCapital" step="any" placeholder="e.g. 20000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Current Assets − Current Liabilities. May be negative.</span>
                </div>
                <div class="form-group">
                    <label for="retainedEarnings">Retained Earnings (₹)</label>
                    <input type="text" id="retainedEarnings" step="any" placeholder="e.g. 30000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Surplus / P&L balance from Reserves & Surplus. May be negative.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ebit">EBIT — Operating Profit (₹)</label>
                    <input type="text" id="ebit" step="any" placeholder="e.g. 15000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Earnings Before Interest & Tax. May be negative for distressed firms.</span>
                </div>
                <div class="form-group">
                    <label for="equity">
                        <span class="equity-label-z">Market Value of Equity (₹)</span>
                        <span class="equity-label-zprime">Book Value of Equity (₹)</span>
                        <span class="equity-label-zdoubleprime">Book Value of Equity (₹)</span>
                    </label>
                    <input type="text" id="equity" min="0" step="any" placeholder="e.g. 40000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">
                        <span class="equity-label-z">Market Cap = Share Price × Shares Outstanding.</span>
                        <span class="equity-label-zprime">Equity Capital + Reserves & Surplus.</span>
                        <span class="equity-label-zdoubleprime">Equity Capital + Reserves & Surplus.</span>
                    </span>
                </div>
            </div>

            <div class="calc-row sales-block">
                <div class="form-group">
                    <label for="sales">Sales / Revenue (₹)</label>
                    <input type="text" id="sales" min="0" step="any" placeholder="e.g. 80000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net revenue from operations. Not used in Z-Double-Prime.</span>
                </div>
                <div class="form-group">
                    <label>&nbsp;</label>
                    <span class="helper">All inputs are annual. Use audited financials for best accuracy.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Z-Score</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Altman Z-Score</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="zscore-mega" id="zscoreVal">0.00</div>
                    <div class="zone-pill" id="zonePill"></div>
                </div>

                <div class="gauge-container">
                    <div class="basis-label" style="text-align:center;margin-bottom:14px;">Zone Position</div>
                    <div class="gauge-bar" id="gaugeBar">
                        <div class="gauge-segment distress" id="segDistress">Distress</div>
                        <div class="gauge-segment grey" id="segGrey">Grey</div>
                        <div class="gauge-segment safe" id="segSafe">Safe</div>
                        <div class="gauge-marker" id="gaugeMarker" data-val="0.00" style="left:50%"></div>
                    </div>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 8px;">Component Breakdown</h3>
                <div style="overflow-x:auto;">
                    <table class="components-table" id="componentsTable">
                        <thead>
                            <tr>
                                <th>Var</th><th>Component</th><th>Ratio</th><th>Weight</th><th>Contribution</th>
                            </tr>
                        </thead>
                        <tbody id="componentsBody"></tbody>
                        <tfoot id="componentsFoot"></tfoot>
                    </table>
                </div>

                <div class="info-banner" id="advisoryBanner" style="margin-top:18px;"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Altman Z-Score Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Altman%20Z-Score%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Altman%20Z-Score%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Altman%20Z-Score%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How the Altman Z-Score Works</h2>
            <p>The Altman Z-Score, developed by Professor Edward Altman at NYU Stern in 1968, is the most widely cited bankruptcy prediction model in financial analysis. It applies multiple discriminant analysis (MDA) to combine five weighted financial ratios into a single score that historically predicted corporate bankruptcy with ~80-90% accuracy two years before failure.</p>

            <h3>The Three Z-Score Versions</h3>
            <div class="formula-box">
<span class="label">Original Z (Public Manufacturing — 1968)</span>
Z = 1.2(X1) + 1.4(X2) + 3.3(X3) + 0.6(X4) + 1.0(X5)
   where X4 = Market Value of Equity ÷ Total Liabilities
   Zones: &gt;2.99 Safe | 1.81-2.99 Grey | &lt;1.81 Distress

<span class="label">Z-Prime (Private Manufacturing)</span>
Z' = 0.717(X1) + 0.847(X2) + 3.107(X3) + 0.420(X4) + 0.998(X5)
   where X4 = Book Value of Equity ÷ Total Liabilities
   Zones: &gt;2.9 Safe | 1.23-2.9 Grey | &lt;1.23 Distress

<span class="label">Z-Double-Prime (Non-Manufacturing / Emerging Markets)</span>
Z″ = 6.56(X1) + 3.26(X2) + 6.72(X3) + 1.05(X4)
   where X4 = Book Value of Equity ÷ Total Liabilities
   X5 (Sales/Total Assets) is removed
   Zones: &gt;2.6 Safe | 1.1-2.6 Grey | &lt;1.1 Distress
            </div>

            <h3>What Each X Variable Captures</h3>
            <ul>
                <li><strong>X1 = Working Capital ÷ Total Assets</strong> — short-term liquidity and operational health</li>
                <li><strong>X2 = Retained Earnings ÷ Total Assets</strong> — accumulated profitability and company maturity (young companies score lower)</li>
                <li><strong>X3 = EBIT ÷ Total Assets</strong> — operating productivity, the strongest standalone predictor of bankruptcy</li>
                <li><strong>X4 = Equity ÷ Total Liabilities</strong> — solvency cushion, asset value vs creditor claims</li>
                <li><strong>X5 = Sales ÷ Total Assets</strong> — asset turnover and competitive position (manufacturing only)</li>
            </ul>

            <h3>Why Three Versions?</h3>
            <p>The original 1968 model was calibrated on US public manufacturing companies and required market capitalisation data. Subsequent research showed:</p>
            <ul>
                <li>Private companies have no market cap → Z-Prime substitutes book value with adjusted weights</li>
                <li>Non-manufacturing companies (services, IT, retail) have radically different asset turnover (X5) → Z-Double-Prime drops X5 entirely</li>
                <li>Emerging market companies follow different accounting and capital structure norms → Z-Double-Prime uses thresholds calibrated for these markets</li>
            </ul>
            <p>For Indian companies, the Z-Double-Prime is generally the most appropriate version regardless of industry, given India's classification as an emerging market and the diverse industry mix.</p>
        </section>

        <section class="content-section" id="zones">
            <h2>Zone Thresholds & Interpretation</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Version</th><th>Distress Zone</th><th>Grey Zone</th><th>Safe Zone</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Original Z</strong></td><td>Below 1.81</td><td>1.81 – 2.99</td><td>Above 2.99</td></tr>
                    <tr><td><strong>Z-Prime</strong></td><td>Below 1.23</td><td>1.23 – 2.9</td><td>Above 2.9</td></tr>
                    <tr><td><strong>Z-Double-Prime</strong></td><td>Below 1.1</td><td>1.1 – 2.6</td><td>Above 2.6</td></tr>
                </tbody>
            </table>

            <h3>What Each Zone Means</h3>
            <ul>
                <li><strong>Safe Zone</strong> — historically very low bankruptcy rates. Doesn't guarantee survival but indicates fundamental financial strength. Quality investors prefer companies consistently in Safe Zone over multiple years</li>
                <li><strong>Grey Zone</strong> — statistically ambiguous. Bankruptcy rates higher than Safe Zone but not alarming. Trend matters — moving from Safe to Grey is a warning; moving from Distress to Grey is recovery</li>
                <li><strong>Distress Zone</strong> — historically ~85% bankruptcy probability within 2 years. Triggers detailed audit going concern review under SA 570, special mention account (SMA) classification by lenders, and credit rating downgrades</li>
            </ul>

            <div class="callout warn">
                <p><strong>Audit going concern alert:</strong> Standard on Auditing 570 requires auditors to evaluate whether the entity will continue as a going concern for at least 12 months. A Z-Score in the Distress Zone is a quantitative red flag that triggers detailed audit procedures — review of management's going concern assessment, evaluation of mitigating factors, and possible Material Uncertainty Related to Going Concern paragraph in the audit report. <a href="/tools/caro-2020-checklist-generator">CARO 2020 Clause 3(xix)</a> requires reporting on material uncertainties affecting the company's ability to meet liabilities. Reference at <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> and <a href="https://kb.icai.org/" target="_blank" rel="noopener">ICAI Knowledge Bank</a>.</p>
            </div>
        </section>

        <section class="content-section" id="applications">
            <h2>Indian Applications: IBC, RBI & Audit</h2>

            <h3>IBC 2016 Distress Filtering</h3>
            <p>The Insolvency and Bankruptcy Code 2016 enables creditors to file for corporate insolvency under Section 7 (financial creditors), Section 9 (operational creditors), or Section 10 (corporate applicant). While IBC triggers are based on actual default — not predicted bankruptcy — Z-Score serves as an early warning indicator. Companies in the Distress Zone are statistically much more likely to default within 12-24 months. Banks and operational creditors increasingly use Z-Score to identify portfolio risk before payment delays manifest. Reference Companies Act framework at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>

            <h3>RBI Stressed Asset Classification</h3>
            <p>The <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> Prudential Framework requires banks to classify accounts under Special Mention Account (SMA) categories — SMA-0 (1-30 days overdue), SMA-1 (31-60 days), SMA-2 (61-90 days). Beyond 90 days, the account becomes a Non-Performing Asset (NPA). Banks supplement SMA classification with quantitative early warning signals including Z-Score and Altman EM-Score. Companies entering Distress Zone often see credit limits reduced or interest rates raised before any payment delay manifests.</p>

            <h3>Audit Going Concern (SA 570)</h3>
            <p>Standard on Auditing 570 (Going Concern), issued by ICAI and converged with ISA 570, requires auditors to evaluate whether the entity will continue as a going concern for at least 12 months from balance sheet date. Quantitative tools used in this evaluation include Z-Score, debt service coverage analysis, cash flow projections, and current ratio trends. A Distress Zone Z-Score alongside other indicators (negative working capital, recurring losses, debt service difficulties) typically triggers a Material Uncertainty paragraph in the audit report. <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspections of listed company audits routinely examine going concern documentation.</p>

            <h3>SEBI Listed Company Disclosure</h3>
            <p>Although <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations do not mandate Z-Score disclosure, listed companies typically include comparable distress indicators in MD&A — debt-equity ratio trends, interest coverage ratios, and going concern statements. The Schedule III amendments effective FY 2021-22 require disclosure of nine financial ratios with 25%+ variance explanation, indirectly making Z-Score components publicly visible. <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> reference at India Code.</p>
        </section>

        <div class="body-cta">
            <h3>Need Going Concern Assessment or Distress Diagnosis?</h3>
            <p>Patron Accounting LLP supports CFOs, audit committees and credit teams with going concern evaluation under SA 570, distress diagnostics, restructuring scenario modelling, lender covenant compliance reviews, and CARO 2020 reporting — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Altman%20Z-Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Altman%20Z-Score%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Altman%20Z-Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the Altman Z-Score?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Altman Z-Score is a multivariate bankruptcy prediction model developed by Professor Edward Altman in 1968. It combines five weighted financial ratios into a single score that predicts the probability of corporate bankruptcy within two years. The original model achieved approximately 80-90% accuracy on historical US public manufacturing data. Three versions exist for different company types: original Z-Score, Z-Prime for private companies, and Z-Double-Prime for non-manufacturing and emerging market companies including Indian listed and unlisted firms.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the three versions of Z-Score?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Three versions exist: Original Z-Score (1968) for public manufacturing companies — uses 5 ratios including Market Value of Equity. Z-Prime Score for private manufacturing companies — same 5 ratios but Book Value of Equity instead of market value. Z-Double-Prime Score for non-manufacturing companies and emerging markets — uses 4 ratios (drops Sales/Total Assets) to remove industry asset-intensity bias. The Z-Double-Prime is most commonly used for Indian listed and unlisted services, IT, retail and infrastructure companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What do the X variables in Z-Score mean?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">X1 = Working Capital ÷ Total Assets (liquidity). X2 = Retained Earnings ÷ Total Assets (cumulative profitability and age). X3 = EBIT ÷ Total Assets (operating productivity). X4 = Market or Book Value of Equity ÷ Total Liabilities (solvency cushion). X5 = Sales ÷ Total Assets (asset turnover, manufacturing only). Each captures a different distress signal — liquidity strain, accumulated losses, weak earnings power, undercapitalisation, or asset bloat. The weighted sum identifies companies likely to fail.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the Z-Score zone thresholds?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Original Z-Score: Z &gt; 2.99 Safe Zone, 1.81-2.99 Grey Zone, Z &lt; 1.81 Distress Zone. Z-Prime: Z &gt; 2.9 Safe, 1.23-2.9 Grey, Z &lt; 1.23 Distress. Z-Double-Prime: Z &gt; 2.6 Safe, 1.1-2.6 Grey, Z &lt; 1.1 Distress. Companies in Distress Zone have historically shown ~85% bankruptcy probability within two years; Grey Zone is statistically ambiguous and warrants closer investigation; Safe Zone has very low historical bankruptcy rates but does not guarantee survival.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which Z-Score version should I use for Indian companies?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For most Indian companies, the Z-Double-Prime is preferred as it was specifically designed for emerging markets and non-manufacturing businesses. Use Original Z-Score only for listed Indian manufacturing companies with reliable market capitalisation data. Use Z-Prime for unlisted manufacturing companies. Use Z-Double-Prime for IT, services, retail, real estate, infrastructure, banks, NBFCs and any company without clear manufacturing classification. Z-Double-Prime is also more robust to differences between Indian and US accounting practices.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does Z-Score relate to IBC distress signals?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Insolvency and Bankruptcy Code 2016 enables creditors to file for corporate insolvency under Section 7 (financial creditors), Section 9 (operational creditors), or Section 10 (corporate applicant). While IBC triggers are based on actual default (not predicted), Z-Score serves as an early warning indicator — Distress Zone companies are statistically much more likely to default within 12-24 months. Banks use Z-Score alongside SMA (Special Mention Account) classification under RBI prudential norms for proactive stressed asset identification.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does Z-Score work for IT and service companies?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Standard Z-Score works poorly for service and IT companies because asset turnover (X5 = Sales/Total Assets) varies dramatically across industries, distorting the score. The Z-Double-Prime version was specifically created to address this — it removes X5 entirely and reweights the remaining four ratios. For IT and service companies, only use Z-Double-Prime. The Z-Double-Prime threshold zones (Safe greater than 2.6, Distress less than 1.1) are calibrated for non-manufacturing and emerging market businesses.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the limitations of Z-Score?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Z-Score has several limitations: it relies on accounting numbers vulnerable to manipulation, uses historical data not forward-looking projections, was calibrated on US data from the 1960s-1990s with possible structural shifts since, treats all industries within a category uniformly, ignores qualitative factors (management, governance, regulatory environment), and does not capture cash flow timing. Use Z-Score as one screening tool among many — alongside cash flow analysis, debt service coverage, qualitative business assessment and IBC default tracking.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does RBI use distress prediction models?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">RBI's Prudential Framework for Resolution of Stressed Assets requires banks to identify incipient stress through Special Mention Account (SMA) classification — SMA-0 (1-30 days overdue), SMA-1 (31-60 days), SMA-2 (61-90 days). Beyond 90 days the account becomes a Non-Performing Asset (NPA). While SMA is based on actual payment delays, banks use complementary tools including Z-Score, Altman EM-Score, and CIBIL credit scores to identify likely stress before payment delays manifest. Early warning enables proactive restructuring or risk-based pricing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does Z-Score apply to banks and NBFCs?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No — standard Z-Score does not apply to banks and NBFCs because their balance sheets are dominated by financial assets and deposits/borrowings, distorting all five ratios. Banks should use sector-specific frameworks: Capital Adequacy Ratio (CRAR), Liquidity Coverage Ratio (LCR), Net Stable Funding Ratio (NSFR) under RBI Basel III, Net Interest Margin (NIM), and Gross/Net NPA ratios. The CAMELS framework (Capital, Asset quality, Management, Earnings, Liquidity, Sensitivity) is the RBI standard for banking sector stress assessment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is Working Capital defined for Z-Score?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Working Capital for Z-Score = Current Assets − Current Liabilities, computed from Schedule III balance sheet line items. Current Assets include Cash, Bank Balances, Current Investments, Trade Receivables, Inventories, and Other Current Assets. Current Liabilities include Trade Payables, Short-term Borrowings, Other Current Liabilities, Provisions (current), and Current Tax Liabilities. Working Capital may be negative for businesses with strong supplier credit cycles (FMCG, retail) — Z-Score correctly flags this as a potential liquidity concern even when the business is healthy.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What counts as Retained Earnings for Z-Score?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Retained Earnings for Z-Score = accumulated net profits of the company that have not been distributed as dividends. From Schedule III balance sheet, this is found under Reserves and Surplus, specifically the Surplus / Profit and Loss account balance. Excludes capital reserves, securities premium, debenture redemption reserve and other capital nature reserves. Companies with substantial accumulated losses (negative Retained Earnings) score very low on X2, correctly reflecting the long-term unprofitability and capital depletion that frequently precede bankruptcy.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does Z-Score connect to audit going concern under SA 570?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Standard on Auditing 570 (Going Concern) requires auditors to assess whether the entity will continue as a going concern for at least 12 months. Z-Score in the Distress Zone is a quantitative red flag that triggers detailed audit procedures under SA 570 Para 16 — review of management's going concern assessment, evaluation of mitigating factors, and possible Material Uncertainty paragraph in the audit report. CARO 2020 Clause 3(xix) requires reporting on material uncertainties affecting the company's ability to meet liabilities.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How accurate is Z-Score in predicting bankruptcy?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Original Altman research showed Z-Score predicting bankruptcy with ~72% accuracy two years before failure and ~95% accuracy one year before failure. Subsequent studies show degraded accuracy in modern markets — typically 60-75% one year out. Accuracy is highest in the Distress and Safe zones; the Grey Zone is ambiguous by design. Combine Z-Score with qualitative analysis, cash flow projections, and multi-period trend. Do not rely on a single reading for major decisions.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Going Concern & Distress Support</h3>
            <p>SA 570 going concern, distress diagnostics, restructuring scenarios, lender covenants — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Altman%20Z-Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Altman%20Z-Score%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Altman%20Z-Score%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/dupont-analysis-tool" class="sidebar-link">DuPont Analysis Tool<span class="arrow">→</span></a>
            <a href="/tools/roe-roce-calculator" class="sidebar-link">ROE + ROCE + ROA<span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
            <a href="/tools/audit-sampling-size-calculator-sa-530" class="sidebar-link">Audit Sampling (SA 530)<span class="arrow">→</span></a>
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
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function v(id) {
        const el = document.getElementById(id);
        const val = parseINR(el.value);
        return isNaN(val) ? 0 : val;
    }

    // ===== Z-SCORE COEFFICIENTS =====
    const COEFFS = {
        z:           {x1: 1.20,  x2: 1.40,  x3: 3.30,  x4: 0.60,  x5: 1.00,  hasX5: true,  label: 'Original Z-Score', equityLabel: 'Market Value of Equity', distressBelow: 1.81, safeAbove: 2.99},
        zprime:      {x1: 0.717, x2: 0.847, x3: 3.107, x4: 0.420, x5: 0.998, hasX5: true,  label: 'Z-Prime Score',    equityLabel: 'Book Value of Equity',   distressBelow: 1.23, safeAbove: 2.90},
        zdoubleprime:{x1: 6.56,  x2: 3.26,  x3: 6.72,  x4: 1.05,  x5: 0,     hasX5: false, label: 'Z″ Score',          equityLabel: 'Book Value of Equity',   distressBelow: 1.10, safeAbove: 2.60}
    };

    // ===== SETUP =====
    setupToggleGroup('modeGroup', function() {
        const mode = getActiveValue('modeGroup');
        document.body.dataset.mode = mode;
        document.getElementById('resultSection').classList.remove('visible');
    });

    function classifyZone(score, c) {
        if (score < c.distressBelow) return 'distress';
        if (score >= c.safeAbove) return 'safe';
        return 'grey';
    }

    function gaugePosition(score, c) {
        // Map score onto 0-100% gauge
        // Distress segment: 0 to distressBelow (visually shown as 0 to 30%)
        // Grey segment: distressBelow to safeAbove (30 to 70%)
        // Safe segment: safeAbove to ~2x safeAbove (70 to 100%)
        const distressEnd = 30;
        const greyEnd = 70;

        if (score <= 0) return 0;
        if (score < c.distressBelow) {
            // Linear within distress zone
            return (score / c.distressBelow) * distressEnd;
        }
        if (score < c.safeAbove) {
            // Linear within grey zone
            const t = (score - c.distressBelow) / (c.safeAbove - c.distressBelow);
            return distressEnd + t * (greyEnd - distressEnd);
        }
        // Safe zone — cap at 100% (when score is 2x safeAbove)
        const safeRange = c.safeAbove;
        const t = Math.min(1, (score - c.safeAbove) / safeRange);
        return greyEnd + t * (100 - greyEnd);
    }

    // ===== COMPUTE =====
    function compute() {
        const mode = getActiveValue('modeGroup');
        const c = COEFFS[mode];

        const ta = v('totalAssets');
        const tl = v('totalLiab');
        const wc = v('workingCapital');
        const re = v('retainedEarnings');
        const ebit = v('ebit');
        const equity = v('equity');
        const sales = v('sales');

        if (ta <= 0) { alert('Please enter Total Assets.'); return; }
        if (tl <= 0) { alert('Please enter Total Liabilities.'); return; }
        if (tl > ta) { alert('Total Liabilities cannot exceed Total Assets. Please verify.'); return; }
        if (equity <= 0) {
            const lbl = mode === 'z' ? 'Market Value of Equity' : 'Book Value of Equity';
            alert('Please enter ' + lbl + '.');
            return;
        }
        if (c.hasX5 && sales <= 0) { alert('Please enter Sales / Revenue (required for ' + c.label + ').'); return; }

        // Compute X variables
        const x1 = wc / ta;
        const x2 = re / ta;
        const x3 = ebit / ta;
        const x4 = equity / tl;
        const x5 = c.hasX5 ? sales / ta : 0;

        // Compute weighted contributions
        const c1 = c.x1 * x1;
        const c2 = c.x2 * x2;
        const c3 = c.x3 * x3;
        const c4 = c.x4 * x4;
        const c5 = c.hasX5 ? c.x5 * x5 : 0;

        const zScore = c1 + c2 + c3 + c4 + c5;
        const zone = classifyZone(zScore, c);

        renderResult({
            mode, c, zScore, zone,
            x1, x2, x3, x4, x5,
            c1, c2, c3, c4, c5,
            inputs: {ta, tl, wc, re, ebit, equity, sales}
        });
    }

    function renderResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + r.zone;

        const zoneLabels = {
            safe: 'Safe Zone — Low Distress Risk',
            grey: 'Grey Zone — Statistically Ambiguous',
            distress: 'Distress Zone — High Bankruptcy Risk'
        };
        document.getElementById('verdictLabel').textContent = r.c.label;
        document.getElementById('verdictHeadline').textContent = zoneLabels[r.zone];
        document.getElementById('zscoreVal').textContent = r.zScore.toFixed(2);

        const pill = document.getElementById('zonePill');
        pill.className = 'zone-pill ' + r.zone;
        pill.textContent = r.zone === 'safe' ? '✓ Safe Zone' : (r.zone === 'grey' ? '⚠ Grey Zone' : '✗ Distress Zone');

        // Gauge segments — proportional widths
        document.getElementById('segDistress').style.flex = '0 0 30%';
        document.getElementById('segGrey').style.flex = '0 0 40%';
        document.getElementById('segSafe').style.flex = '0 0 30%';

        const marker = document.getElementById('gaugeMarker');
        marker.style.left = gaugePosition(r.zScore, r.c) + '%';
        marker.dataset.val = r.zScore.toFixed(2);

        // Component breakdown table
        const tbody = document.getElementById('componentsBody');
        const tfoot = document.getElementById('componentsFoot');
        tbody.innerHTML = '';

        const components = [
            {var: 'X1', name: 'Working Capital ÷ Total Assets', ratio: r.x1, weight: r.c.x1, contribution: r.c1},
            {var: 'X2', name: 'Retained Earnings ÷ Total Assets', ratio: r.x2, weight: r.c.x2, contribution: r.c2},
            {var: 'X3', name: 'EBIT ÷ Total Assets', ratio: r.x3, weight: r.c.x3, contribution: r.c3},
            {var: 'X4', name: r.c.equityLabel + ' ÷ Total Liabilities', ratio: r.x4, weight: r.c.x4, contribution: r.c4}
        ];
        if (r.c.hasX5) {
            components.push({var: 'X5', name: 'Sales ÷ Total Assets', ratio: r.x5, weight: r.c.x5, contribution: r.c5});
        }

        components.forEach(function(comp) {
            const row = document.createElement('tr');
            row.innerHTML = '<td>' + comp.var + '</td><td>' + comp.name + '</td><td>' + comp.ratio.toFixed(4) + '</td><td>' + comp.weight.toFixed(3) + '</td><td>' + comp.contribution.toFixed(4) + '</td>';
            tbody.appendChild(row);
        });

        tfoot.innerHTML = '<tr><td colspan="4">Total Z-Score</td><td>' + r.zScore.toFixed(4) + '</td></tr>';

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';
        if (r.zone === 'distress') {
            advisory.className = 'info-banner danger';
            advHtml = '<strong>Distress Zone — high bankruptcy risk.</strong> Historical data shows ~85% bankruptcy probability within 2 years for companies in this zone. Triggers: detailed going concern review under SA 570; possible Material Uncertainty paragraph in audit report; CARO 2020 Clause 3(xix) reporting; lender SMA classification under RBI prudential framework.';
            // Identify weakest component
            const minContribution = Math.min(r.c1, r.c2, r.c3, r.c4, r.c.hasX5 ? r.c5 : Infinity);
            const weakestVar = [r.c1, r.c2, r.c3, r.c4, r.c5].indexOf(minContribution);
            const weakestNames = ['Liquidity (Working Capital)', 'Profitability accumulation (Retained Earnings)', 'Operating productivity (EBIT)', 'Solvency (Equity ÷ Liabilities)', 'Asset turnover (Sales)'];
            if (minContribution < 0) {
                advHtml += '<br><br><strong>Primary weakness:</strong> ' + weakestNames[weakestVar] + ' is the most negative contributor — addressing this is the priority for distress recovery.';
            }
        } else if (r.zone === 'grey') {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>Grey Zone — statistically ambiguous.</strong> Bankruptcy rates higher than Safe Zone but not alarming. Trend matters more than absolute level — examine 3-year Z-Score trajectory, debt service coverage, cash flow from operations, and qualitative factors. Watch for migration toward Distress Zone.';
        } else {
            advisory.className = 'info-banner success';
            advHtml = '<strong>Safe Zone — low distress risk.</strong> Historical bankruptcy rates are very low for companies in this zone. Strong fundamental position. However, Z-Score does not capture qualitative risks, regulatory shocks, or industry disruption — combine with cash flow analysis and qualitative business assessment.';
        }
        if (r.mode === 'zdoubleprime') {
            advHtml += '<br><br><strong>Z-Double-Prime is appropriate for Indian companies</strong> — calibrated for emerging markets and non-manufacturing businesses.';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        let basis = '<strong>' + r.c.label + ' formula:</strong> ';
        if (r.c.hasX5) {
            basis += 'Z = ' + r.c.x1 + '(X1) + ' + r.c.x2 + '(X2) + ' + r.c.x3 + '(X3) + ' + r.c.x4 + '(X4) + ' + r.c.x5 + '(X5)';
        } else {
            basis += 'Z″ = ' + r.c.x1 + '(X1) + ' + r.c.x2 + '(X2) + ' + r.c.x3 + '(X3) + ' + r.c.x4 + '(X4)';
        }
        basis += '<br><br><strong>Substituted:</strong> ';
        basis += r.c1.toFixed(3) + ' + ' + r.c2.toFixed(3) + ' + ' + r.c3.toFixed(3) + ' + ' + r.c4.toFixed(3);
        if (r.c.hasX5) basis += ' + ' + r.c5.toFixed(3);
        basis += ' = <strong>' + r.zScore.toFixed(2) + '</strong>';
        basis += '<br><br><em>Zone thresholds for ' + r.c.label + ':</em> Distress &lt; ' + r.c.distressBelow + ' | Grey ' + r.c.distressBelow + '-' + r.c.safeAbove + ' | Safe &gt; ' + r.c.safeAbove;
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['totalAssets', 'totalLiab', 'workingCapital', 'retainedEarnings', 'ebit', 'equity', 'sales'].forEach(function(id) {
            document.getElementById(id).value = '';
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
