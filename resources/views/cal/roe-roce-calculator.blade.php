@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>ROE, ROCE &amp; ROA Calculator | Profitability Ratios</title>
    <meta name="description" content="ROE, ROCE &amp; ROA Calculator: compute the three key profitability ratios with industry benchmarks, Schedule III aligned and CA-reviewed. Calculate free now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/roe-roce-calculator/">
    <meta property="og:title" content="ROE + ROCE + ROA Calculator — Free 2026">
    <meta property="og:description" content="Compute Return on Equity, Capital Employed and Assets with industry benchmarks. Schedule III aligned. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/roe-roce-calculator">
    <meta property="og:image" content="/tools/og/roe-roce-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ROE + ROCE + ROA Calculator — Free 2026">
    <meta name="twitter:description" content="ROE + ROCE + ROA with industry benchmarks. Schedule III aligned. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/roe-roce-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "ROE + ROCE + ROA Calculator",
      "description": "ROE + ROCE + ROA Calculator computes the three principal profitability ratios used in Indian financial analysis — Return on Equity (Net Income divided by Shareholders Equity), Return on Capital Employed (EBIT divided by Capital Employed where Capital Employed equals Total Assets minus Current Liabilities, equivalent to Shareholders Equity plus Long-term Debt plus Long-term Provisions), and Return on Assets (Net Income divided by Total Assets). Output includes each ratio with industry benchmark comparison for IT, FMCG, Pharma, Manufacturing, Auto, Banks and NBFCs, Real Estate, and Retail; leverage-effect analysis comparing ROE versus ROCE to assess whether financial leverage is adding or destroying shareholder value; tax-and-financing wedge analysis comparing ROCE versus ROA; and trend analysis with Schedule III amendment 25 percent variance flagging. Aligned with Schedule III Division I and Division II of the Companies Act 2013 ratio disclosure requirements effective FY 2021-22. Suitable for equity research, credit appraisal, internal CFO benchmarking, audit analytical procedures, and CA-CFA student learning.",
      "url": "/tools/roe-roce-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "ROE + ROCE + ROA Calculator", "item": "/tools/roe-roce-calculator"}
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
          "name": "What is Return on Equity (ROE)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Return on Equity (ROE) measures the return generated on shareholders' equity. It is calculated as Net Income (Profit After Tax) divided by Total Shareholders' Equity, expressed as a percentage. ROE is the headline metric for equity investors — it captures profitability after all expenses, interest and taxes. Higher ROE indicates better return to shareholders. ROE is required to be disclosed in Notes to Accounts under Schedule III amendments effective FY 2021-22, with variances over 25% requiring explanation."
          }
        },
        {
          "@type": "Question",
          "name": "What is Return on Capital Employed (ROCE)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Return on Capital Employed (ROCE) measures returns generated on the total capital invested in the business — debt and equity together. It is calculated as EBIT (Earnings Before Interest and Tax) divided by Capital Employed, where Capital Employed = Total Assets − Current Liabilities (equivalent to Shareholders' Equity + Long-term Debt + Long-term Provisions). ROCE is leverage-neutral and used for comparing operating performance across companies with different capital structures. Required disclosure under Schedule III FY 2021-22."
          }
        },
        {
          "@type": "Question",
          "name": "What is Return on Assets (ROA)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Return on Assets (ROA) measures how efficiently total assets generate profit. It is calculated as Net Income divided by Total Assets, expressed as a percentage. Some analysts use EBIT instead of Net Income (Operating ROA) to remove tax and financing effects. ROA captures management's effectiveness in deploying the entire asset base. Banks and financial institutions typically have very low ROA (1-2%) because of their high asset bases — non-financial companies should target 5-15% depending on industry."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ROE, ROCE and ROA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three different perspectives on profitability. ROE = Net Income ÷ Equity (returns to shareholders, leverage-amplified). ROCE = EBIT ÷ (Equity + Long-term Debt) (returns on total invested capital, leverage-neutral). ROA = Net Income ÷ Total Assets (returns on total assets including current liabilities funded). Generally ROE > ROCE > ROA because ROE includes leverage benefit, ROCE excludes current liabilities, and ROA uses post-tax profit on the largest base. Negative spread (ROCE less than ROA) is unusual and signals issues."
          }
        },
        {
          "@type": "Question",
          "name": "How is Capital Employed calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital Employed has two equivalent definitions: Definition 1: Capital Employed = Total Assets − Current Liabilities (most common in India). Definition 2: Capital Employed = Equity + Long-term Debt + Long-term Provisions. Both yield the same number on a properly classified Schedule III balance sheet. Definition 1 starts from the asset side; Definition 2 starts from the funding side. ICAI Guidance Notes prefer the asset-side approach as it is unambiguous and matches the operating capital used."
          }
        },
        {
          "@type": "Question",
          "name": "Which is the best profitability ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no single best ratio — each serves a different purpose. ROE is best for equity investors deciding share purchases. ROCE is best for credit analysts, peer comparisons across capital structures, and management performance assessment. ROA is best for asset-intensive industries and banking sector analysis. Quality investors look at all three together — sustainable competitive advantage shows as consistently high ROCE; leverage benefit shows as ROE significantly exceeding ROCE; asset efficiency shows as healthy ROA."
          }
        },
        {
          "@type": "Question",
          "name": "What does ROCE versus Cost of Debt comparison reveal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If ROCE exceeds the cost of debt (interest rate), then debt financing creates value for shareholders — leverage amplifies ROE positively. If ROCE is below cost of debt, debt financing destroys value — leverage drags ROE below ROCE. For Indian companies, post-tax cost of debt is typically 6-9% depending on credit rating. Companies with ROCE under 9-10% should be cautious about taking on additional debt. The ROCE versus cost of debt spread is the single most important leverage decision metric."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical industry benchmarks for ROE, ROCE and ROA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT and Software: ROE 18-25%, ROCE 22-30%, ROA 12-18%. FMCG: ROE 20-30%, ROCE 25-35%, ROA 10-15%. Pharma: ROE 18-25%, ROCE 22-28%, ROA 10-15%. Manufacturing: ROE 12-18%, ROCE 14-20%, ROA 6-10%. Auto: ROE 15-22%, ROCE 18-25%, ROA 5-9%. Real Estate: ROE 8-15%, ROCE 10-15%, ROA 4-8%. Banks and NBFCs: ROE 12-20%, ROCE not directly comparable, ROA 1-2%. Always benchmark against listed peers in the same sector for meaningful insight."
          }
        },
        {
          "@type": "Question",
          "name": "Why is ROA so low for banks and NBFCs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Banks and NBFCs have inherently low ROA (1-2%) because their balance sheets are dominated by financial assets funded by deposits and borrowings. The asset base is huge relative to revenue. Their value model is spread multiplied by leverage: ROE = ROA × Equity Multiplier. Bank equity multipliers are 8-12x under RBI Basel III. A bank with 1% ROA × 10x leverage achieves 10% ROE. ROCE is not used for banks; CRAR and NIM are preferred."
          }
        },
        {
          "@type": "Question",
          "name": "What does Schedule III ratio disclosure require?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA notification dated 24 March 2021 amended Schedule III Division I and Division II of the Companies Act 2013 to require disclosure of nine financial ratios in Notes to Accounts effective FY 2021-22, including Current Ratio, Debt-Equity Ratio, Return on Equity, Return on Capital Employed, Net Profit Ratio, and Return on Investment. Variances exceeding 25% from prior year must be explained. The disclosure framework standardises ratio computation methodology and improves comparability across companies."
          }
        },
        {
          "@type": "Question",
          "name": "Why is ROCE preferred for capital-intensive industries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital-intensive industries — infrastructure, real estate, manufacturing, telecom — typically operate with high debt levels because long-asset-life investments support fixed-cost financing. ROE alone can be misleading: a 20% ROE may be driven by 4× leverage on modest 5% asset returns, exposing the company to interest rate and refinancing risk. ROCE strips out leverage and shows the true operating return on invested capital. Sustainable ROCE above 15% in capital-intensive sectors typically indicates a high-quality moat business."
          }
        },
        {
          "@type": "Question",
          "name": "When should I use ROE versus ROCE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Use ROE when: analysing returns to equity holders, comparing companies within the same sector with similar capital structures, computing dividend sustainability, and equity valuation models. Use ROCE when: comparing operating performance across companies with different leverage, assessing management's capital allocation skill, evaluating capital-intensive businesses, and analysing whether to take on more debt. Both are important — ROCE measures operational quality; ROE measures shareholder benefit. Quality investors require both to be healthy."
          }
        },
        {
          "@type": "Question",
          "name": "What are limitations of ROE, ROCE and ROA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All three ratios have limitations: they rely on accounting numbers subject to manipulation (revenue recognition, asset valuation, depreciation choices); use point-in-time balance sheet (period averages preferred); ignore quality of earnings and cash flow timing; treat intangibles inconsistently (goodwill from acquisitions inflates capital base, depressing ratios); and do not capture business cycle position. Use alongside cash flow from operations, free cash flow, debt servicing capacity, and qualitative business assessment for complete analysis."
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
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        /* Three ratio cards */
        .ratio-trio { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 22px; }
        @media (min-width: 700px) { .ratio-trio { grid-template-columns: repeat(3, 1fr); } }
        .ratio-card { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-radius: var(--radius); padding: 22px 20px; border: 2px solid var(--success); position: relative; overflow: hidden; }
        .ratio-card.amber { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-color: var(--accent); }
        .ratio-card.red { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-color: var(--danger); }
        .ratio-card.gray { background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%); border-color: var(--text-muted); }
        .ratio-name { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .ratio-full-name { font-size: 12px; color: var(--text-secondary); margin-bottom: 10px; line-height: 1.3; }
        .ratio-value { font-family: var(--font-mono); font-size: 42px; font-weight: 700; color: var(--primary-dark); line-height: 1; letter-spacing: -1.5px; }
        .ratio-value-suffix { font-size: 18px; color: var(--text-muted); font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .ratio-bench { font-size: 11px; color: var(--text-secondary); margin-top: 8px; padding-top: 8px; border-top: 1px solid rgba(0,0,0,0.08); line-height: 1.4; }
        .ratio-bench strong { color: var(--primary-dark); font-weight: 700; }
        .ratio-status-pill { position: absolute; top: 16px; right: 16px; font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.3px; }
        .ratio-status-pill.above { background: var(--success); color: #fff; }
        .ratio-status-pill.below { background: var(--danger); color: #fff; }
        .ratio-status-pill.inline { background: var(--accent); color: var(--primary-dark); }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .summary-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
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
            .ratio-value { font-size: 34px; }
            .ratio-value-suffix { font-size: 14px; }
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
        <a href="#benchmarks">Industry Benchmarks</a>
        <a href="#leverage-analysis">Leverage Analysis</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    ROE + ROCE + ROA Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>ROE + ROCE + ROA <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The three principal profitability ratios used in Indian financial analysis. <strong>ROE</strong> (Net Income ÷ Equity) measures returns to shareholders. <strong>ROCE</strong> (EBIT ÷ Capital Employed) measures returns on total invested capital, leverage-neutral. <strong>ROA</strong> (Net Income ÷ Total Assets) measures returns on the entire asset base. Together they reveal whether profitability is driven by genuine operations or financial leverage. ROE and ROCE are mandatorily disclosed in Notes to Accounts under Schedule III amendments effective FY 2021-22.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Profitability Ratios</h2>
            <p class="calc-intro">Enter income statement and balance sheet line items. Optional industry selector benchmarks results against listed peers; optional cost of debt input enables leverage-effect analysis.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Income Statement</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ebit">EBIT — Operating Profit (₹)</label>
                    <input type="text" id="ebit" min="0" step="any" placeholder="e.g. 15000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Earnings Before Interest &amp; Tax. Used for ROCE numerator.</span>
                </div>
                <div class="form-group">
                    <label for="netIncome">Net Income / PAT (₹)</label>
                    <input type="text" id="netIncome" min="0" step="any" placeholder="e.g. 8000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Profit After Tax — bottom line. Used for ROE and ROA numerators.</span>
                </div>
            </div>

            <div class="calc-section-title">Balance Sheet</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="totalAssets">Total Assets (₹)</label>
                    <input type="text" id="totalAssets" min="0" step="any" placeholder="e.g. 80000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total of all assets — current + non-current — under Schedule III.</span>
                </div>
                <div class="form-group">
                    <label for="currentLiab">Current Liabilities (₹)</label>
                    <input type="text" id="currentLiab" min="0" step="any" placeholder="e.g. 20000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Used to compute Capital Employed = Total Assets − Current Liabilities.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="totalEquity">Total Shareholders' Equity (₹)</label>
                    <input type="text" id="totalEquity" min="0" step="any" placeholder="e.g. 40000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Equity share capital + Reserves &amp; Surplus + OCI. Excludes minority interest.</span>
                </div>
                <div class="form-group">
                    <label for="costOfDebt">Cost of Debt — Optional (%)</label>
                    <input type="text" id="costOfDebt" min="0" max="30" step="0.1" placeholder="e.g. 8.5" inputmode="decimal" autocomplete="off">
                    <span class="helper">Pre-tax interest rate on borrowings. Enables ROCE vs Cost of Debt analysis.</span>
                </div>
            </div>

            <div class="calc-section-title">Industry Benchmark — Optional</div>

            <div class="form-group" style="margin-bottom:18px;">
                <label for="industry">Industry (for Benchmark Comparison)</label>
                <select id="industry">
                    <option value="">— Select industry (optional) —</option>
                    <option value="it">IT / Software / Services</option>
                    <option value="fmcg">FMCG / Consumer Goods</option>
                    <option value="pharma">Pharma / Healthcare</option>
                    <option value="manufacturing">Manufacturing / Industrials</option>
                    <option value="auto">Auto / Auto Components</option>
                    <option value="realestate">Real Estate / Construction</option>
                    <option value="retail">Retail / E-commerce</option>
                    <option value="banks">Banks / NBFCs (ROA primary metric)</option>
                </select>
                <span class="helper">Drives benchmark comparison. Skip if not needed.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Profitability Ratios</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="ratio-trio" id="ratioTrio"></div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — ROE + ROCE + ROA Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How These Ratios Work</h2>
            <p>ROE, ROCE and ROA are the three principal profitability ratios used in Indian financial analysis. Each measures returns from a different perspective — shareholder, total capital, and total assets. Quality investors and credit analysts examine all three together because they reveal complementary aspects of business performance.</p>

            <h3>The Three Formulas</h3>
            <div class="formula-box">
<span class="label">ROE</span>   =  Net Income ÷ Total Shareholders' Equity     (returns to shareholders)

<span class="label">ROCE</span>  =  EBIT ÷ Capital Employed                       (returns on total invested capital)
        Capital Employed = Total Assets − Current Liabilities
                         = Equity + Long-term Debt + Long-term Provisions

<span class="label">ROA</span>   =  Net Income ÷ Total Assets                    (returns on entire asset base)
            </div>

            <h3>Why Each Ratio Matters</h3>
            <ul>
                <li><strong>ROE</strong> — captures returns generated for equity shareholders after all expenses, interest and taxes. Preferred by retail investors and equity analysts</li>
                <li><strong>ROCE</strong> — captures operating returns on total invested capital, ignoring how it is financed. Leverage-neutral, preferred by credit analysts and for cross-company comparisons</li>
                <li><strong>ROA</strong> — captures management efficiency in deploying total assets including debt-funded portions. Preferred for asset-intensive industries and banking sector analysis</li>
            </ul>

            <h3>Typical Pattern: ROE &gt; ROCE &gt; ROA</h3>
            <p>For most companies with positive leverage:</p>
            <ul>
                <li>ROE exceeds ROCE because ROE includes the leverage benefit (debt-funded returns flow to equity)</li>
                <li>ROCE exceeds ROA because ROCE excludes current liabilities from the denominator (suppliers and statutory dues fund some assets at zero cost)</li>
                <li>Negative spreads (ROE below ROCE, or ROCE below ROA) typically signal leverage destroying value or non-recurring tax benefits</li>
            </ul>

            <div class="callout">
                <p><strong>Schedule III ratio disclosure:</strong> The MCA notification dated 24 March 2021 amended Schedule III Division I and Division II of the Companies Act 2013 to require disclosure of nine financial ratios in Notes to Accounts effective FY 2021-22 — Return on Equity, Return on Capital Employed, Net Profit Ratio, and others. Variances exceeding 25% must be explained. Reference at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> portal and <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance. The Companies Act framework is available at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks</h2>
            <p>Profitability ratios vary substantially by industry. Capital-intensive sectors operate at lower ROA; service businesses at higher ROCE; banks at very low ROA but moderate ROE through high leverage. Always compare against listed peers in the same sector.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Industry</th><th>ROE</th><th>ROCE</th><th>ROA</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>IT / Software</strong></td><td>18-25%</td><td>22-30%</td><td>12-18%</td></tr>
                    <tr><td><strong>FMCG / Consumer</strong></td><td>20-30%</td><td>25-35%</td><td>10-15%</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>18-25%</td><td>22-28%</td><td>10-15%</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>12-18%</td><td>14-20%</td><td>6-10%</td></tr>
                    <tr><td><strong>Auto / Components</strong></td><td>15-22%</td><td>18-25%</td><td>5-9%</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>8-15%</td><td>10-15%</td><td>4-8%</td></tr>
                    <tr><td><strong>Retail / E-commerce</strong></td><td>10-20%</td><td>15-22%</td><td>5-10%</td></tr>
                    <tr><td><strong>Banks / NBFCs *</strong></td><td>12-20%</td><td>N/A</td><td>1-2%</td></tr>
                </tbody>
            </table>
            <p style="font-size:13px;color:var(--text-muted);">* Banks operate under different metrics. ROCE is not meaningfully comparable as deposits dominate the liability side. Use Net Interest Margin (NIM) and Capital Adequacy Ratio (CRAR) under <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> Basel III framework instead. ROA × Equity Multiplier is the bank-friendly DuPont variant.</p>

            <h3>Reading the Benchmarks</h3>
            <p>Patterns matter more than absolute values:</p>
            <ul>
                <li><strong>High ROE + High ROCE</strong> (IT, FMCG, Pharma) — quality business with operating excellence and modest leverage</li>
                <li><strong>High ROE + Moderate ROCE</strong> — leverage is amplifying returns; sustainability depends on stable interest rates</li>
                <li><strong>Low ROCE in capital-intensive sectors</strong> (Real Estate, Manufacturing) — slow asset turnover, may still be reasonable if industry-typical</li>
                <li><strong>ROCE rising faster than ROE</strong> — operating improvement; deleveraging or tax efficiency drag on ROE</li>
            </ul>
        </section>

        <section class="content-section" id="leverage-analysis">
            <h2>Leverage Analysis: ROCE vs Cost of Debt</h2>
            <p>The most consequential decision in corporate finance is whether to take on more debt. The answer depends on a single relationship: is ROCE greater than the post-tax cost of debt?</p>

            <div class="formula-box">
<span class="label">If ROCE &gt; Cost of Debt</span>  →  Leverage CREATES value — ROE rises with more debt
<span class="label">If ROCE &lt; Cost of Debt</span>  →  Leverage DESTROYS value — ROE falls with more debt
<span class="label">If ROCE ≈ Cost of Debt</span>  →  Leverage is value-neutral
            </div>

            <h3>What This Means in Practice</h3>
            <p>For an Indian company with post-tax cost of debt at 6-9% (depending on credit rating):</p>
            <ul>
                <li><strong>ROCE above 12%</strong> — comfortably above cost of debt. Additional debt would amplify ROE</li>
                <li><strong>ROCE between 8-12%</strong> — marginal zone. Take on debt cautiously; small ROCE shocks could flip the relationship</li>
                <li><strong>ROCE below 8%</strong> — danger zone. Existing debt may already be destroying value; avoid increasing leverage</li>
            </ul>

            <h3>Why This Drives ROE</h3>
            <p>The ROE-ROCE relationship can be expressed as: <strong>ROE = ROCE + (ROCE − Cost of Debt After Tax) × Debt-to-Equity</strong>. The second term is the "leverage premium" — positive when ROCE exceeds cost of debt, negative when ROCE is below. Companies with strong ROCE can use debt to amplify ROE; companies with weak ROCE should reduce leverage to protect ROE.</p>

            <div class="callout warn">
                <p><strong>Schedule III variance flag:</strong> Per <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a> Companies Act 2013, ratio variances exceeding 25% YoY must be explained in financial statements. Material movements in ROE or ROCE typically trace to changes in margins, asset turnover, leverage, or tax rate. <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations also require listed company MD&amp;A to discuss material ratio movements.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Profitability Analysis &amp; Peer Benchmarking?</h3>
            <p>Patron Accounting LLP supports CFO offices, equity research teams and credit appraisal desks with profitability ratio analysis, peer benchmarking, financial modelling, leverage decision frameworks, and Schedule III ratio disclosures — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Return on Equity (ROE)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Return on Equity (ROE) measures the return generated on shareholders' equity. It is calculated as Net Income (Profit After Tax) divided by Total Shareholders' Equity, expressed as a percentage. ROE is the headline metric for equity investors — it captures profitability after all expenses, interest and taxes. Higher ROE indicates better return to shareholders. ROE is required to be disclosed in Notes to Accounts under Schedule III amendments effective FY 2021-22, with variances over 25% requiring explanation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Return on Capital Employed (ROCE)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Return on Capital Employed (ROCE) measures returns generated on the total capital invested in the business — debt and equity together. It is calculated as EBIT (Earnings Before Interest and Tax) divided by Capital Employed, where Capital Employed = Total Assets − Current Liabilities (equivalent to Shareholders' Equity + Long-term Debt + Long-term Provisions). ROCE is leverage-neutral and used for comparing operating performance across companies with different capital structures. Required disclosure under Schedule III FY 2021-22.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Return on Assets (ROA)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Return on Assets (ROA) measures how efficiently total assets generate profit. It is calculated as Net Income divided by Total Assets, expressed as a percentage. Some analysts use EBIT instead of Net Income (Operating ROA) to remove tax and financing effects. ROA captures management's effectiveness in deploying the entire asset base. Banks and financial institutions typically have very low ROA (1-2%) because of their high asset bases — non-financial companies should target 5-15% depending on industry.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between ROE, ROCE and ROA?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Three different perspectives on profitability. ROE = Net Income ÷ Equity (returns to shareholders, leverage-amplified). ROCE = EBIT ÷ (Equity + Long-term Debt) (returns on total invested capital, leverage-neutral). ROA = Net Income ÷ Total Assets (returns on total assets including current liabilities funded). Generally ROE &gt; ROCE &gt; ROA because ROE includes leverage benefit, ROCE excludes current liabilities, and ROA uses post-tax profit on the largest base. Negative spread (ROCE less than ROA) is unusual and signals issues.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is Capital Employed calculated?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Capital Employed has two equivalent definitions: Definition 1: Capital Employed = Total Assets − Current Liabilities (most common in India). Definition 2: Capital Employed = Equity + Long-term Debt + Long-term Provisions. Both yield the same number on a properly classified Schedule III balance sheet. Definition 1 starts from the asset side; Definition 2 starts from the funding side. ICAI Guidance Notes prefer the asset-side approach as it is unambiguous and matches the operating capital used.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which is the best profitability ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no single best ratio — each serves a different purpose. ROE is best for equity investors deciding share purchases. ROCE is best for credit analysts, peer comparisons across capital structures, and management performance assessment. ROA is best for asset-intensive industries and banking sector analysis. Quality investors look at all three together — sustainable competitive advantage shows as consistently high ROCE; leverage benefit shows as ROE significantly exceeding ROCE; asset efficiency shows as healthy ROA.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What does ROCE versus Cost of Debt comparison reveal?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If ROCE exceeds the cost of debt (interest rate), then debt financing creates value for shareholders — leverage amplifies ROE positively. If ROCE is below cost of debt, debt financing destroys value — leverage drags ROE below ROCE. For Indian companies, post-tax cost of debt is typically 6-9% depending on credit rating. Companies with ROCE under 9-10% should be cautious about taking on additional debt. The ROCE versus cost of debt spread is the single most important leverage decision metric.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are typical industry benchmarks for ROE, ROCE and ROA?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IT and Software: ROE 18-25%, ROCE 22-30%, ROA 12-18%. FMCG: ROE 20-30%, ROCE 25-35%, ROA 10-15%. Pharma: ROE 18-25%, ROCE 22-28%, ROA 10-15%. Manufacturing: ROE 12-18%, ROCE 14-20%, ROA 6-10%. Auto: ROE 15-22%, ROCE 18-25%, ROA 5-9%. Real Estate: ROE 8-15%, ROCE 10-15%, ROA 4-8%. Banks and NBFCs: ROE 12-20%, ROCE not directly comparable, ROA 1-2%. Always benchmark against listed peers in the same sector for meaningful insight.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why is ROA so low for banks and NBFCs?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Banks and NBFCs have inherently low ROA (1-2%) because their balance sheets are dominated by financial assets funded by deposits and borrowings. The asset base is huge relative to revenue. Their value model is spread multiplied by leverage: ROE = ROA × Equity Multiplier. Bank equity multipliers are 8-12x under RBI Basel III. A bank with 1% ROA × 10x leverage achieves 10% ROE. ROCE is not used for banks; CRAR and NIM are preferred.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What does Schedule III ratio disclosure require?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">MCA notification dated 24 March 2021 amended Schedule III Division I and Division II of the Companies Act 2013 to require disclosure of nine financial ratios in Notes to Accounts effective FY 2021-22, including Current Ratio, Debt-Equity Ratio, Return on Equity, Return on Capital Employed, Net Profit Ratio, and Return on Investment. Variances exceeding 25% from prior year must be explained. The disclosure framework standardises ratio computation methodology and improves comparability across companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why is ROCE preferred for capital-intensive industries?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Capital-intensive industries — infrastructure, real estate, manufacturing, telecom — typically operate with high debt levels because long-asset-life investments support fixed-cost financing. ROE alone can be misleading: a 20% ROE may be driven by 4× leverage on modest 5% asset returns, exposing the company to interest rate and refinancing risk. ROCE strips out leverage and shows the true operating return on invested capital. Sustainable ROCE above 15% in capital-intensive sectors typically indicates a high-quality moat business.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">When should I use ROE versus ROCE?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Use ROE when: analysing returns to equity holders, comparing companies within the same sector with similar capital structures, computing dividend sustainability, and equity valuation models. Use ROCE when: comparing operating performance across companies with different leverage, assessing management's capital allocation skill, evaluating capital-intensive businesses, and analysing whether to take on more debt. Both are important — ROCE measures operational quality; ROE measures shareholder benefit. Quality investors require both to be healthy.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are limitations of ROE, ROCE and ROA?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">All three ratios have limitations: they rely on accounting numbers subject to manipulation (revenue recognition, asset valuation, depreciation choices); use point-in-time balance sheet (period averages preferred); ignore quality of earnings and cash flow timing; treat intangibles inconsistently (goodwill from acquisitions inflates capital base, depressing ratios); and do not capture business cycle position. Use alongside cash flow from operations, free cash flow, debt servicing capacity, and qualitative business assessment for complete analysis.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Profitability &amp; Peer Benchmarking</h3>
            <p>Ratio analysis, peer benchmarking, financial modelling, leverage decisions — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20ROE%20%2B%20ROCE%20%2B%20ROA%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

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
            <a href="/tools/dupont-analysis-tool" class="sidebar-link">DuPont Analysis Tool<span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Calculator (Ind AS 116)<span class="arrow">→</span></a>
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

    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function v(id) { return parseINR(document.getElementById(id).value) || 0; }

    // Industry benchmark midpoints
    const BENCHMARKS = {
        it:           {label: 'IT / Software',      roe: 22, roce: 26, roa: 15},
        fmcg:         {label: 'FMCG',                roe: 25, roce: 30, roa: 12},
        pharma:       {label: 'Pharma',              roe: 22, roce: 25, roa: 12},
        manufacturing:{label: 'Manufacturing',       roe: 15, roce: 17, roa: 8},
        auto:         {label: 'Auto',                roe: 18, roce: 22, roa: 7},
        realestate:   {label: 'Real Estate',         roe: 11, roce: 12, roa: 6},
        retail:       {label: 'Retail / E-commerce', roe: 15, roce: 18, roa: 7},
        banks:        {label: 'Banks / NBFCs',       roe: 16, roce: null, roa: 1.5}
    };

    function compareToBenchmark(actual, bm) {
        if (bm === null || bm === undefined) return null;
        const ratio = actual / bm;
        if (ratio >= 1.1) return 'above';
        if (ratio < 0.9) return 'below';
        return 'inline';
    }

    function compute() {
        const ebit = v('ebit');
        const ni = v('netIncome');
        const ta = v('totalAssets');
        const cl = v('currentLiab');
        const eq = v('totalEquity');
        const cod = v('costOfDebt');
        const industry = document.getElementById('industry').value;

        if (ebit <= 0) { alert('Please enter EBIT (Operating Profit).'); return; }
        if (ni <= 0) { alert('Please enter Net Income.'); return; }
        if (ta <= 0) { alert('Please enter Total Assets.'); return; }
        if (cl < 0) { alert('Current Liabilities cannot be negative.'); return; }
        if (cl >= ta) { alert('Current Liabilities cannot exceed Total Assets. Please verify.'); return; }
        if (eq <= 0) { alert('Please enter Total Shareholders\' Equity.'); return; }
        if (eq > ta) { alert('Total Equity cannot exceed Total Assets. Please verify.'); return; }
        if (ni > ebit) { alert('Net Income cannot exceed EBIT (taxes + interest reduce NI below EBIT). Please verify.'); return; }

        const capitalEmployed = ta - cl;
        const roe = (ni / eq) * 100;
        const roce = (ebit / capitalEmployed) * 100;
        const roa = (ni / ta) * 100;

        const bm = BENCHMARKS[industry] || null;
        const result = {
            ebit, ni, ta, cl, eq, capitalEmployed,
            roe, roce, roa, cod, industry, bm,
            roeStatus: bm ? compareToBenchmark(roe, bm.roe) : null,
            roceStatus: bm ? compareToBenchmark(roce, bm.roce) : null,
            roaStatus: bm ? compareToBenchmark(roa, bm.roa) : null
        };

        renderResult(result);
    }

    function renderResult(r) {
        // Render three ratio cards
        const trio = document.getElementById('ratioTrio');
        trio.innerHTML = '';

        const ratios = [
            {key: 'roe', name: 'ROE', fullName: 'Return on Equity', value: r.roe, formula: 'Net Income ÷ Equity', bm: r.bm ? r.bm.roe : null, status: r.roeStatus},
            {key: 'roce', name: 'ROCE', fullName: 'Return on Capital Employed', value: r.roce, formula: 'EBIT ÷ Capital Employed', bm: r.bm ? r.bm.roce : null, status: r.roceStatus},
            {key: 'roa', name: 'ROA', fullName: 'Return on Assets', value: r.roa, formula: 'Net Income ÷ Total Assets', bm: r.bm ? r.bm.roa : null, status: r.roaStatus}
        ];

        ratios.forEach(function(rt) {
            const card = document.createElement('div');
            let cls = 'ratio-card';
            if (rt.status === 'above') cls += '';  // green default
            else if (rt.status === 'below') cls += ' red';
            else if (rt.status === 'inline') cls += ' amber';
            else if (rt.bm === null && r.industry === 'banks' && rt.key === 'roce') cls += ' gray';
            else cls += ''; // green default

            card.className = cls;
            let pillHtml = '';
            if (rt.status === 'above') pillHtml = '<span class="ratio-status-pill above">Above</span>';
            else if (rt.status === 'below') pillHtml = '<span class="ratio-status-pill below">Below</span>';
            else if (rt.status === 'inline') pillHtml = '<span class="ratio-status-pill inline">In Line</span>';

            let benchHtml = '';
            if (rt.bm !== null && rt.bm !== undefined) {
                benchHtml = '<div class="ratio-bench"><strong>Industry:</strong> ' + rt.bm + '%</div>';
            } else if (r.industry === 'banks' && rt.key === 'roce') {
                benchHtml = '<div class="ratio-bench"><em>N/A for banks — use NIM, CRAR</em></div>';
            } else {
                benchHtml = '<div class="ratio-bench">' + rt.formula + '</div>';
            }

            card.innerHTML = pillHtml +
                '<div class="ratio-name">' + rt.name + '</div>' +
                '<div class="ratio-full-name">' + rt.fullName + '</div>' +
                '<div class="ratio-value">' + rt.value.toFixed(2) + '<span class="ratio-value-suffix">%</span></div>' +
                benchHtml;
            trio.appendChild(card);
        });

        // Summary grid — supporting metrics
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Capital Employed', value: fmtINR(r.capitalEmployed), sub: 'Total Assets − Current Liabilities'},
            {label: 'ROE − ROCE Spread', value: (r.roe - r.roce).toFixed(2) + '%', sub: r.roe > r.roce ? 'Positive — leverage adds value' : 'Negative — leverage drags value'},
            {label: 'ROCE − ROA Spread', value: (r.roce - r.roa).toFixed(2) + '%', sub: 'Reflects current liabilities benefit + tax wedge'}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card';
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div><div class="summary-sub">' + s.sub + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';

        if (r.bm) {
            // With benchmark
            const aboveCount = [r.roeStatus, r.roceStatus, r.roaStatus].filter(s => s === 'above').length;
            const belowCount = [r.roeStatus, r.roceStatus, r.roaStatus].filter(s => s === 'below').length;
            if (aboveCount >= 2) {
                advisory.className = 'info-banner success';
                advHtml = '<strong>Strong profitability versus ' + r.bm.label + ' peers.</strong> Multiple ratios above industry benchmarks indicate genuine operating excellence. Examine durability — sustainable competitive advantage shows as consistent outperformance over multiple cycles.';
            } else if (belowCount >= 2) {
                advisory.className = 'info-banner warn';
                advHtml = '<strong>Below-industry profitability versus ' + r.bm.label + ' peers.</strong> Multiple ratios below benchmarks. Identify the specific drivers using DuPont decomposition — is it margin compression, asset turnover, or leverage drag?';
            } else {
                advisory.className = 'info-banner info';
                advHtml = '<strong>Mixed profitability versus ' + r.bm.label + ' peers.</strong> Examine which ratios are above/below and why.';
            }
        } else {
            // Without benchmark - use absolute thresholds
            if (r.roe >= 18 && r.roce >= 15) {
                advisory.className = 'info-banner success';
                advHtml = '<strong>Strong absolute profitability.</strong> ROE above 18% and ROCE above 15% indicate quality operating business with sustainable returns. Examine 5-year trend for durability.';
            } else if (r.roe >= 12 && r.roce >= 10) {
                advisory.className = 'info-banner info';
                advHtml = '<strong>Moderate absolute profitability.</strong> Returns are positive but unremarkable. Industry benchmarking will reveal whether the company is a peer leader, average, or laggard.';
            } else {
                advisory.className = 'info-banner warn';
                advHtml = '<strong>Below-average profitability.</strong> ROE under 12% and ROCE under 10% suggest weak return generation. Examine cost structure, asset turnover and capital allocation.';
            }
        }

        // Cost of Debt analysis
        if (r.cod > 0) {
            const codAfterTax = r.cod * 0.75;  // assume 25% tax rate (roughly Section 115BAA)
            advHtml += '<br><br>';
            if (r.roce > codAfterTax + 2) {
                advHtml += '<strong>Leverage analysis:</strong> ROCE (' + r.roce.toFixed(2) + '%) comfortably exceeds post-tax cost of debt (~' + codAfterTax.toFixed(2) + '%). Debt is value-additive — additional leverage would amplify ROE positively.';
            } else if (r.roce < codAfterTax - 1) {
                advHtml += '<strong>⚠ Leverage warning:</strong> ROCE (' + r.roce.toFixed(2) + '%) is below post-tax cost of debt (~' + codAfterTax.toFixed(2) + '%). Existing debt may be destroying shareholder value. Consider deleveraging or improving operating returns before raising more debt.';
            } else {
                advHtml += '<strong>Leverage marginal:</strong> ROCE (' + r.roce.toFixed(2) + '%) is in the marginal zone vs post-tax cost of debt (~' + codAfterTax.toFixed(2) + '%). Take on debt cautiously — small ROCE shocks could flip the relationship.';
            }
        }

        // Banks-specific
        if (r.industry === 'banks') {
            advHtml += '<br><br><strong>Banking caveat:</strong> ROCE is not directly comparable for banks — deposits dominate the liability side and inflate "non-current" capital. Use Net Interest Margin (NIM) and Capital Adequacy Ratio (CRAR) under RBI Basel III framework. ROA × Equity Multiplier is the bank-friendly DuPont variant.';
        }

        advisory.innerHTML = advHtml;

        // Basis text
        let basis = '<strong>ROE</strong> = ' + fmtINR(r.ni) + ' ÷ ' + fmtINR(r.eq) + ' = <strong>' + r.roe.toFixed(2) + '%</strong>. ';
        basis += '<strong>ROCE</strong> = ' + fmtINR(r.ebit) + ' ÷ ' + fmtINR(r.capitalEmployed) + ' = <strong>' + r.roce.toFixed(2) + '%</strong> (Capital Employed = ' + fmtINR(r.ta) + ' − ' + fmtINR(r.cl) + '). ';
        basis += '<strong>ROA</strong> = ' + fmtINR(r.ni) + ' ÷ ' + fmtINR(r.ta) + ' = <strong>' + r.roa.toFixed(2) + '%</strong>. ';
        if (r.bm) {
            basis += '<br><br><em>Benchmarks:</em> ' + r.bm.label + ' typical ROE ' + r.bm.roe + '%, ROCE ' + (r.bm.roce !== null ? r.bm.roce + '%' : 'N/A') + ', ROA ' + r.bm.roa + '%.';
        }
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['ebit', 'netIncome', 'totalAssets', 'currentLiab', 'totalEquity', 'costOfDebt'].forEach(function(id) {
            document.getElementById(id).value = '';
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
