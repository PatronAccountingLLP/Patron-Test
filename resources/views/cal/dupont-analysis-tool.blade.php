@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>DuPont Analysis Calculator | 3-Step & 5-Step ROE</title>
    <meta name="description" content="Free DuPont analysis calculator: 3-step and 5-step ROE decomposition into tax burden, interest burden, margin, asset turnover and leverage. CA-reviewed tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/dupont-analysis-tool/">
    <meta property="og:title" content="DuPont Analysis Tool — 3-Step + 5-Step ROE Breakdown">
    <meta property="og:description" content="Decompose ROE into profitability, efficiency, leverage. 3-step and 5-step DuPont analysis. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/dupont-analysis-tool">
    <meta property="og:image" content="/tools/og/dupont-analysis-tool.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DuPont Analysis Tool — 3-Step + 5-Step ROE Breakdown">
    <meta name="twitter:description" content="Decompose ROE into profitability, efficiency, leverage. 3-step + 5-step. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/dupont-analysis-tool.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "DuPont Analysis Tool",
      "description": "DuPont Analysis Calculator decomposes Return on Equity (ROE) into its underlying drivers using both the 3-step and 5-step DuPont frameworks. The 3-step DuPont breaks ROE into Net Profit Margin (profitability) multiplied by Asset Turnover (efficiency) multiplied by Equity Multiplier (financial leverage). The 5-step extended DuPont further decomposes profitability into Tax Burden (Net Income divided by Earnings Before Tax), Interest Burden (EBT divided by EBIT) and EBIT Margin (EBIT divided by Sales), separating operating profitability from financing and tax effects. The tool computes each component, compares against industry benchmarks for IT, FMCG, Manufacturing, Banks and NBFCs, Pharma, Real Estate and Retail, and identifies the primary driver of ROE — whether profitability, efficiency or leverage. Year-over-year comparison mode highlights which DuPont component is driving change in ROE. Suitable for equity research analysts, credit appraisal teams at banks and NBFCs, CFO offices benchmarking against peers, and CA Final and CFA students learning fundamental analysis. Aligned with Schedule III of the Companies Act 2013 for input definitions.",
      "url": "/tools/dupont-analysis-tool",
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
        {"@type": "ListItem", "position": 3, "name": "DuPont Analysis Tool", "item": "/tools/dupont-analysis-tool"}
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
          "name": "What is DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DuPont analysis is a fundamental financial analysis framework that decomposes Return on Equity (ROE) into its underlying drivers — profitability, asset efficiency and financial leverage. Developed by E.I. DuPont de Nemours in the 1920s, it answers the question: Is the company's ROE driven by genuine operating performance or by financial engineering? Two main forms: 3-step DuPont (Net Margin × Asset Turnover × Equity Multiplier) and 5-step DuPont (further splitting margin into tax burden, interest burden and EBIT margin)."
          }
        },
        {
          "@type": "Question",
          "name": "What is 3-step DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 3-step DuPont decomposes ROE as: ROE = Net Profit Margin × Asset Turnover × Equity Multiplier. Net Profit Margin (Net Income ÷ Sales) measures profitability per rupee of sales. Asset Turnover (Sales ÷ Total Assets) measures asset efficiency. Equity Multiplier (Total Assets ÷ Equity) measures financial leverage. Two companies with identical ROE can have very different driver mixes — one driven by margins, another by leverage. The 3-step makes those drivers visible."
          }
        },
        {
          "@type": "Question",
          "name": "What is 5-step DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 5-step extended DuPont further decomposes net profit margin into three components: Tax Burden (Net Income ÷ EBT), Interest Burden (EBT ÷ EBIT) and EBIT Margin (EBIT ÷ Sales). The full formula: ROE = Tax Burden × Interest Burden × EBIT Margin × Asset Turnover × Equity Multiplier. This separates operating profitability (EBIT margin) from financing decisions (interest burden) and tax effects (tax burden), which is particularly useful for international comparisons and analysing the impact of capital structure changes."
          }
        },
        {
          "@type": "Question",
          "name": "Why decompose ROE into DuPont components?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Decomposing ROE reveals the source of value creation — and the source of risk. A 20% ROE achieved through 15% margin × 1.5 turnover × 0.9 leverage is fundamentally different from 20% achieved through 5% margin × 1 turnover × 4 leverage. The first is a high-quality business; the second is heavily leveraged and vulnerable to cycles. DuPont allows analysts to compare companies across industries, identify driver shifts year over year, and stress-test the sustainability of high ROE."
          }
        },
        {
          "@type": "Question",
          "name": "What is asset turnover ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Asset Turnover = Sales ÷ Total Assets. It measures how efficiently the company uses its asset base to generate revenue. A higher asset turnover indicates better asset utilisation. Service and trading companies typically have high asset turnover (1.5x+) as they have minimal fixed assets. Capital-intensive sectors like manufacturing, real estate and infrastructure have lower turnover (0.3-0.8x). Banks have very low asset turnover (~0.05x) as their assets are loans, not productive equipment."
          }
        },
        {
          "@type": "Question",
          "name": "What is equity multiplier?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Equity Multiplier = Total Assets ÷ Total Equity. It measures financial leverage — how much of the asset base is funded by debt versus equity. A multiplier of 2 means assets are twice the equity, with the difference funded by liabilities. Banks operate at 8-12x given regulatory framework. Most operating businesses target 1.5-3.0x. Higher multipliers boost ROE in good times but amplify losses in downturns. Some analysts use Total Liabilities ÷ Equity (Debt-Equity ratio) instead."
          }
        },
        {
          "@type": "Question",
          "name": "What is tax burden in DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tax Burden = Net Income ÷ Earnings Before Tax (EBT). It represents the portion of pre-tax profit retained after taxes. A higher tax burden ratio is favourable — closer to 1.0 means lower effective tax rate. For Indian companies under the new corporate tax regime (Section 115BAA), the tax burden is typically 0.75 to 0.78 (effective rate ~25%). Section 115BAB manufacturers operate at 0.83 (~17%). MAT-paying companies and firms with deferred tax adjustments may show different ratios."
          }
        },
        {
          "@type": "Question",
          "name": "What is interest burden in DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interest Burden = Earnings Before Tax (EBT) ÷ EBIT. It represents the portion of operating profit retained after interest costs. A higher ratio is favourable — closer to 1.0 means low interest cost relative to operating profit. Debt-free companies have interest burden close to 1.0. Highly leveraged companies may operate at 0.5-0.7. Combined with equity multiplier, interest burden tells the leverage story — high leverage + low interest burden indicates the leverage is genuinely costly, not free money."
          }
        },
        {
          "@type": "Question",
          "name": "What does high ROE from leverage mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When DuPont decomposition shows ROE driven primarily by equity multiplier (leverage) rather than margin or turnover, the ROE is fragile — it depends on continued debt access and stable interest rates. In a downturn, asset write-downs deplete equity faster, raising leverage further; falling cash flows make interest payments harder. Sustainable ROE comes from operating excellence (margin) and asset efficiency (turnover), with leverage as a complementary factor — not the primary driver."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical DuPont benchmarks by industry?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT and software: high margins 15-25%, asset turnover 0.7-1.0x, low leverage 1.1-1.5x, ROE 15-25%. FMCG: margins 10-15%, turnover 1.2-2.0x, leverage 1.5-2.5x, ROE 18-30%. Manufacturing: margins 5-10%, turnover 0.8-1.5x, leverage 1.5-2.5x, ROE 12-18%. Banks and NBFCs: margins 10-20%, very low turnover 0.05-0.1x, very high leverage 6-10x, ROE 12-20%. Real Estate: margins 8-15%, turnover 0.3-0.6x, leverage 1.5-3.0x, ROE 8-15%."
          }
        },
        {
          "@type": "Question",
          "name": "Does DuPont analysis work for banks and NBFCs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DuPont applies to banks but with major caveats. Banks have inherently low asset turnover and very high equity multiplier — these levels are regulatory features (Capital to Risk-weighted Assets Ratio under Basel III), not company choices. Equity multipliers of 8-12x are normal and not signs of distress. Banks' ROE is driven primarily by Net Interest Margin (NIM) and non-interest income relative to assets — modified DuPont versions exist (e.g., ROA × Equity Multiplier) for financial institutions."
          }
        },
        {
          "@type": "Question",
          "name": "How is DuPont analysis different from ROCE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DuPont decomposes Return on Equity (ROE = NI/Equity) — capturing returns to shareholders. ROCE (Return on Capital Employed = EBIT / Capital Employed) measures returns on total invested capital, ignoring how it's financed. ROCE is leverage-neutral; DuPont's ROE includes leverage as a driver. For comparing operating performance across companies with different capital structures, ROCE is preferred. For shareholder return analysis, DuPont/ROE is preferred. Both are commonly disclosed under Schedule III amendments effective FY 2021-22."
          }
        },
        {
          "@type": "Question",
          "name": "What are limitations of DuPont analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DuPont has several limitations: it relies on accounting numbers subject to manipulation (revenue recognition, asset valuation), uses point-in-time balance sheet (period averages preferred), assumes constant relationships between components, ignores quality of earnings, and does not capture cash flow timing. Equity multiplier overstates leverage if intangibles or revaluation reserves are large. DuPont should be used alongside cash flow analysis, debt servicing capacity, and qualitative assessment of business model and management."
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
        .approach-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #F0F5FB 100%); border: 2px solid var(--primary-light); padding: 6px; gap: 6px; margin-bottom: 24px; }
        .approach-toggle .toggle-btn { padding: 14px 16px; font-size: 14px; }
        .approach-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .step5-block { display: none; }
        .step5-block.show { display: block; }
        .industry-pill { display: inline-flex; align-items: center; padding: 4px 10px; background: var(--primary); color: #fff; border-radius: 20px; font-size: 11px; font-weight: 600; letter-spacing: 0.3px; margin-left: 8px; }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); text-align: center; }
        .verdict-card.high { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.mid { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.low { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.leverage-driven { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .roe-mega { font-family: var(--font-mono); font-size: 72px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -3px; }
        .roe-mega-suffix { font-size: 20px; color: var(--text-muted); margin-left: 4px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }

        /* Decomposition Tree */
        .dupont-tree { background: var(--surface); border-radius: var(--radius); padding: 24px 16px; margin: 20px 0; border: 1px solid var(--border); overflow-x: auto; }
        .dupont-tree-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 18px; text-align: center; }
        .tree-flow { display: flex; flex-wrap: nowrap; align-items: stretch; justify-content: center; gap: 8px; min-width: min-content; }
        .tree-node { background: var(--card); border-radius: var(--radius); padding: 14px 12px; border: 2px solid var(--border); min-width: 100px; flex: 0 0 auto; text-align: center; transition: all 0.2s; }
        .tree-node.primary-driver { border-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); box-shadow: 0 4px 12px rgba(245, 158, 11, 0.15); }
        .tree-node-label { font-size: 10px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; line-height: 1.3; }
        .tree-node-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .tree-op { display: flex; align-items: center; justify-content: center; font-size: 22px; color: var(--text-muted); font-weight: 700; padding: 0 4px; flex: 0 0 auto; }
        @media (max-width: 600px) {
            .tree-node { min-width: 88px; padding: 10px 8px; }
            .tree-node-value { font-size: 15px; }
            .tree-op { font-size: 16px; }
        }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value, .summary-card.highlight .summary-sub { color: #fff; }
        .summary-card.highlight .summary-sub { color: rgba(255,255,255,0.8); }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); line-height: 1.2; }
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
            .verdict-headline { font-size: 18px; }
            .roe-mega { font-size: 56px; }
            .roe-mega-suffix { font-size: 16px; }
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
        <a href="#interpretation">Interpretation</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    DuPont Analysis Tool
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>DuPont Analysis <span>Tool</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20DuPont%20Analysis%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DuPont%20Analysis%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20DuPont%20Analysis%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>DuPont analysis decomposes Return on Equity (ROE) into its underlying drivers — profitability, asset efficiency and financial leverage. The 3-step DuPont (Net Margin × Asset Turnover × Equity Multiplier) reveals the source of ROE; the 5-step extension further splits margin into Tax Burden × Interest Burden × EBIT Margin. This tool computes both, identifies the primary driver, and benchmarks against IT, FMCG, Manufacturing, Banks, Real Estate and Pharma industry norms. Two companies with identical ROE can have very different driver mixes — DuPont makes the difference visible.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Decompose Return on Equity (ROE)</h2>
            <p class="calc-intro">Choose 3-step (Net Margin × Asset Turnover × Equity Multiplier) for a quick decomposition, or 5-step (separates Tax Burden, Interest Burden, EBIT Margin) for deeper analysis. Optional industry selector benchmarks results.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="modeGroup" role="tablist" aria-label="DuPont mode">
                <button type="button" class="toggle-btn active" data-value="3step" role="tab" aria-selected="true">3-Step DuPont</button>
                <button type="button" class="toggle-btn" data-value="5step" role="tab" aria-selected="false">5-Step DuPont (Extended)</button>
            </div>

            <div class="calc-section-title">Income Statement</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="sales">Revenue / Sales (₹)</label>
                    <input type="text" id="sales" min="0" step="any" placeholder="e.g. 100000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net revenue from operations under Schedule III.</span>
                </div>
                <div class="form-group">
                    <label for="netIncome">Net Income / PAT (₹)</label>
                    <input type="text" id="netIncome" min="0" step="any" placeholder="e.g. 8000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Profit After Tax — bottom line of P&amp;L statement.</span>
                </div>
            </div>

            <div class="step5-block" id="step5Block">
                <div class="calc-row">
                    <div class="form-group">
                        <label for="ebit">EBIT — Operating Profit (₹)</label>
                        <input type="text" id="ebit" min="0" step="any" placeholder="e.g. 12000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Earnings Before Interest &amp; Tax. Operating profit before finance costs.</span>
                    </div>
                    <div class="form-group">
                        <label for="ebt">EBT — Profit Before Tax (₹)</label>
                        <input type="text" id="ebt" min="0" step="any" placeholder="e.g. 10500000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Earnings Before Tax. EBIT minus interest expense.</span>
                    </div>
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
                    <label for="totalEquity">Total Shareholders' Equity (₹)</label>
                    <input type="text" id="totalEquity" min="0" step="any" placeholder="e.g. 40000000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Equity share capital + Reserves &amp; Surplus + OCI. Excludes minority interest.</span>
                </div>
            </div>

            <div class="calc-section-title">Industry Benchmark — Optional</div>

            <div class="form-group" style="margin-bottom:18px;">
                <label for="industry">Industry (for Benchmark Comparison)</label>
                <select id="industry">
                    <option value="">— Select industry (optional) —</option>
                    <option value="it">IT / Software / Services</option>
                    <option value="fmcg">FMCG / Consumer Goods</option>
                    <option value="manufacturing">Manufacturing / Industrials</option>
                    <option value="pharma">Pharma / Healthcare</option>
                    <option value="banks">Banks / NBFCs (modified DuPont)</option>
                    <option value="realestate">Real Estate / Construction</option>
                    <option value="retail">Retail / E-commerce</option>
                    <option value="auto">Auto / Auto Components</option>
                </select>
                <span class="helper">Drives benchmark comparison in output. Skip if not needed.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute DuPont Decomposition</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Return on Equity (ROE)</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="roe-mega"><span id="roeVal">0.0</span><span class="roe-mega-suffix">%</span></div>
                </div>

                <div class="dupont-tree" id="dupontTree">
                    <div class="dupont-tree-title">DuPont Decomposition</div>
                    <div class="tree-flow" id="treeFlow"></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — DuPont Analysis Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20DuPont%20Analysis%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DuPont%20Analysis%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20DuPont%20Analysis%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How DuPont Analysis Works</h2>
            <p>DuPont analysis was developed in the 1920s by E.I. DuPont de Nemours and remains the standard framework for analysing Return on Equity. Its power lies in revealing whether a high ROE is genuinely earned through operations or financially engineered through leverage. Two companies can show identical 20% ROE — one through 15% margins, another through 4× leverage — but the underlying business quality differs sharply.</p>

            <h3>The 3-Step DuPont</h3>
            <div class="formula-box">
<span class="label">ROE</span>  =  Net Margin   ×   Asset Turnover   ×   Equity Multiplier
     =  (NI / Sales)  ×  (Sales / Assets)  ×  (Assets / Equity)

<span class="label">Profitability</span>  ×   <span class="label">Efficiency</span>   ×   <span class="label">Leverage</span>
            </div>
            <ul>
                <li><strong>Net Margin</strong> — profitability per rupee of sales. Captures pricing power, cost discipline, operating leverage</li>
                <li><strong>Asset Turnover</strong> — revenue per rupee of assets. Captures asset utilisation, working capital efficiency</li>
                <li><strong>Equity Multiplier</strong> — assets per rupee of equity. Captures financial leverage; higher = more debt-funded</li>
            </ul>

            <h3>The 5-Step DuPont (Extended)</h3>
            <div class="formula-box">
<span class="label">ROE</span>  =  Tax Burden  ×  Interest Burden  ×  EBIT Margin  ×  Asset T/O  ×  Equity Mult
     =  (NI/EBT)   ×   (EBT/EBIT)    ×  (EBIT/Sales) ×  (Sales/Assets) × (Assets/Equity)
            </div>
            <ul>
                <li><strong>Tax Burden</strong> — net income retained after tax. Higher (closer to 1) = lower effective tax rate</li>
                <li><strong>Interest Burden</strong> — operating profit retained after interest. Higher = lower interest drag</li>
                <li><strong>EBIT Margin</strong> — pure operating profitability. Cleanest measure of operational performance</li>
                <li><strong>Asset Turnover</strong> — same as 3-step</li>
                <li><strong>Equity Multiplier</strong> — same as 3-step</li>
            </ul>

            <h3>When to Use Which</h3>
            <p>Use <strong>3-step</strong> for quick comparisons, ratio dashboards, and high-level discussions. Use <strong>5-step</strong> when:</p>
            <ul>
                <li>Comparing companies across countries with different tax regimes</li>
                <li>Analysing the impact of capital structure changes (debt issuance / refinancing)</li>
                <li>Decomposing change in ROE — was it the operating business or financing?</li>
                <li>Stress-testing ROE under different interest rate scenarios</li>
                <li>Equity research valuation models requiring component projections</li>
            </ul>

            <div class="callout">
                <p><strong>Schedule III ratio disclosure:</strong> The MCA notification dated 24 March 2021 amended Schedule III Division I and Division II to require disclosure of nine ratios in Notes to Accounts effective FY 2021-22 — Net Profit Ratio, Return on Capital Employed and Return on Equity are among them. Variances exceeding 25% must be explained. Reference at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> portal and <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance.</p>
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for DuPont</h2>
            <p>DuPont components vary substantially by industry. Capital-intensive sectors operate at lower asset turnover; banks operate at extreme leverage; software companies operate at high margins with low leverage. Compare against listed peers in the same sector for meaningful insight — absolute "good" or "bad" levels do not exist in isolation.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Industry</th><th>Net Margin</th><th>Asset Turnover</th><th>Equity Multiplier</th><th>Typical ROE</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>IT / Software</strong></td><td>15-25%</td><td>0.7-1.0×</td><td>1.1-1.5×</td><td>15-25%</td></tr>
                    <tr><td><strong>FMCG / Consumer</strong></td><td>10-15%</td><td>1.2-2.0×</td><td>1.5-2.5×</td><td>18-30%</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>15-20%</td><td>0.7-1.2×</td><td>1.2-1.8×</td><td>18-25%</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>5-10%</td><td>0.8-1.5×</td><td>1.5-2.5×</td><td>12-18%</td></tr>
                    <tr><td><strong>Auto / Components</strong></td><td>5-10%</td><td>1.0-1.5×</td><td>2.0-3.0×</td><td>15-22%</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>8-15%</td><td>0.3-0.6×</td><td>1.5-3.0×</td><td>8-15%</td></tr>
                    <tr><td><strong>Retail / E-commerce</strong></td><td>2-6%</td><td>1.5-3.0×</td><td>1.5-2.5×</td><td>10-20%</td></tr>
                    <tr><td><strong>Banks / NBFCs *</strong></td><td>10-20%</td><td>0.05-0.1×</td><td>6-12×</td><td>12-20%</td></tr>
                </tbody>
            </table>
            <p style="font-size:13px;color:var(--text-muted);">* Banks operate under different metrics. Standard DuPont produces extreme equity multipliers because deposits are liabilities by nature, not financial leverage. Use modified DuPont (ROA × Equity Multiplier) or look at NIM (Net Interest Margin) and CAR (Capital Adequacy Ratio) under <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> Basel III framework instead.</p>

            <h3>Reading the Benchmarks</h3>
            <p>The pattern matters more than absolute values. Common patterns:</p>
            <ul>
                <li><strong>Margin-driven (IT, Pharma, FMCG)</strong> — high margins, moderate turnover, low leverage. Quality businesses with pricing power</li>
                <li><strong>Turnover-driven (Retail, FMCG distribution)</strong> — thin margins, high turnover, moderate leverage. Operational efficiency model</li>
                <li><strong>Leverage-driven (Real Estate, Infrastructure)</strong> — moderate margins, low turnover, high leverage. Capital-intensive financing-led model</li>
                <li><strong>Regulated leverage (Banks, NBFCs)</strong> — extreme equity multiplier driven by regulatory capital framework, not commercial choice</li>
            </ul>

            <div class="callout warn">
                <p><strong>Schedule III variance flag:</strong> Per <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a> Companies Act 2013, ratio variances exceeding 25% YoY must be explained in financial statements. DuPont decomposition is the standard tool to identify whether the variance is driven by margin compression, asset turnover changes, or leverage shifts. <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations also require listed company MD&amp;A to discuss material ratio movements.</p>
            </div>
        </section>

        <section class="content-section" id="interpretation">
            <h2>Interpreting DuPont Results</h2>

            <h3>Identifying the Primary Driver</h3>
            <p>For each component, compare against industry benchmark. The component furthest from peer average (in either direction) is the primary driver of ROE difference. The tool highlights this automatically in the decomposition tree.</p>

            <h3>Common Decomposition Patterns</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Pattern</th><th>What It Means</th><th>Sustainability</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>High margin, low leverage</strong></td><td>Pricing power, brand value, IP moat</td><td>High — sustainable competitive advantage</td></tr>
                    <tr><td><strong>High turnover, low margin</strong></td><td>Operational efficiency, scale economies</td><td>High — execution-driven moat</td></tr>
                    <tr><td><strong>High leverage, low margin</strong></td><td>Financial engineering, asset-heavy</td><td>Fragile — sensitive to rates and cycles</td></tr>
                    <tr><td><strong>Falling margin, rising leverage</strong></td><td>Defensive borrowing, distress signal</td><td>Low — investigate underlying business health</td></tr>
                    <tr><td><strong>Stable margin, falling turnover</strong></td><td>Asset bloat, capex without revenue</td><td>Moderate — examine capital allocation</td></tr>
                </tbody>
            </table>

            <h3>What the 5-Step Adds</h3>
            <p>The 5-step decomposition is particularly useful for:</p>
            <ul>
                <li><strong>Tax Burden trends</strong> — companies moving to Section 115BAA (25%) from old regime (33%) show tax burden improving from ~0.67 to ~0.75</li>
                <li><strong>Interest Burden trends</strong> — companies refinancing debt or deleveraging show interest burden rising toward 1.0</li>
                <li><strong>EBIT Margin isolation</strong> — separates operating performance from financing decisions, the cleanest metric for true business quality comparison</li>
                <li><strong>Cross-border comparisons</strong> — neutralises tax regime differences when comparing Indian companies against US or European peers</li>
            </ul>
        </section>

        <div class="body-cta">
            <h3>Need Equity Research or Credit Appraisal Support?</h3>
            <p>Patron Accounting LLP supports CFOs, equity research teams and credit appraisal desks with DuPont analysis, peer benchmarking, financial modelling, ratio variance investigations, and Schedule III ratio disclosures — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DuPont%20Analysis%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DuPont%20Analysis%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20DuPont%20Analysis%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DuPont analysis is a fundamental financial analysis framework that decomposes Return on Equity (ROE) into its underlying drivers — profitability, asset efficiency and financial leverage. Developed by E.I. DuPont de Nemours in the 1920s, it answers the question: Is the company's ROE driven by genuine operating performance or by financial engineering? Two main forms: 3-step DuPont (Net Margin × Asset Turnover × Equity Multiplier) and 5-step DuPont (further splitting margin into tax burden, interest burden and EBIT margin).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is 3-step DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The 3-step DuPont decomposes ROE as: ROE = Net Profit Margin × Asset Turnover × Equity Multiplier. Net Profit Margin (Net Income ÷ Sales) measures profitability per rupee of sales. Asset Turnover (Sales ÷ Total Assets) measures asset efficiency. Equity Multiplier (Total Assets ÷ Equity) measures financial leverage. Two companies with identical ROE can have very different driver mixes — one driven by margins, another by leverage. The 3-step makes those drivers visible.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is 5-step DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The 5-step extended DuPont further decomposes net profit margin into three components: Tax Burden (Net Income ÷ EBT), Interest Burden (EBT ÷ EBIT) and EBIT Margin (EBIT ÷ Sales). The full formula: ROE = Tax Burden × Interest Burden × EBIT Margin × Asset Turnover × Equity Multiplier. This separates operating profitability (EBIT margin) from financing decisions (interest burden) and tax effects (tax burden), which is particularly useful for international comparisons and analysing the impact of capital structure changes.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why decompose ROE into DuPont components?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Decomposing ROE reveals the source of value creation — and the source of risk. A 20% ROE achieved through 15% margin × 1.5 turnover × 0.9 leverage is fundamentally different from 20% achieved through 5% margin × 1 turnover × 4 leverage. The first is a high-quality business; the second is heavily leveraged and vulnerable to cycles. DuPont allows analysts to compare companies across industries, identify driver shifts year over year, and stress-test the sustainability of high ROE.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is asset turnover ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Asset Turnover = Sales ÷ Total Assets. It measures how efficiently the company uses its asset base to generate revenue. A higher asset turnover indicates better asset utilisation. Service and trading companies typically have high asset turnover (1.5x+) as they have minimal fixed assets. Capital-intensive sectors like manufacturing, real estate and infrastructure have lower turnover (0.3-0.8x). Banks have very low asset turnover (~0.05x) as their assets are loans, not productive equipment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is equity multiplier?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Equity Multiplier = Total Assets ÷ Total Equity. It measures financial leverage — how much of the asset base is funded by debt versus equity. A multiplier of 2 means assets are twice the equity, with the difference funded by liabilities. Banks operate at 8-12x given regulatory framework. Most operating businesses target 1.5-3.0x. Higher multipliers boost ROE in good times but amplify losses in downturns. Some analysts use Total Liabilities ÷ Equity (Debt-Equity ratio) instead.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is tax burden in DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tax Burden = Net Income ÷ Earnings Before Tax (EBT). It represents the portion of pre-tax profit retained after taxes. A higher tax burden ratio is favourable — closer to 1.0 means lower effective tax rate. For Indian companies under the new corporate tax regime (Section 115BAA), the tax burden is typically 0.75 to 0.78 (effective rate ~25%). Section 115BAB manufacturers operate at 0.83 (~17%). MAT-paying companies and firms with deferred tax adjustments may show different ratios.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is interest burden in DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Interest Burden = Earnings Before Tax (EBT) ÷ EBIT. It represents the portion of operating profit retained after interest costs. A higher ratio is favourable — closer to 1.0 means low interest cost relative to operating profit. Debt-free companies have interest burden close to 1.0. Highly leveraged companies may operate at 0.5-0.7. Combined with equity multiplier, interest burden tells the leverage story — high leverage + low interest burden indicates the leverage is genuinely costly, not free money.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What does high ROE from leverage mean?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">When DuPont decomposition shows ROE driven primarily by equity multiplier (leverage) rather than margin or turnover, the ROE is fragile — it depends on continued debt access and stable interest rates. In a downturn, asset write-downs deplete equity faster, raising leverage further; falling cash flows make interest payments harder. Sustainable ROE comes from operating excellence (margin) and asset efficiency (turnover), with leverage as a complementary factor — not the primary driver.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are typical DuPont benchmarks by industry?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IT and software: high margins 15-25%, asset turnover 0.7-1.0x, low leverage 1.1-1.5x, ROE 15-25%. FMCG: margins 10-15%, turnover 1.2-2.0x, leverage 1.5-2.5x, ROE 18-30%. Manufacturing: margins 5-10%, turnover 0.8-1.5x, leverage 1.5-2.5x, ROE 12-18%. Banks and NBFCs: margins 10-20%, very low turnover 0.05-0.1x, very high leverage 6-10x, ROE 12-20%. Real Estate: margins 8-15%, turnover 0.3-0.6x, leverage 1.5-3.0x, ROE 8-15%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does DuPont analysis work for banks and NBFCs?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DuPont applies to banks but with major caveats. Banks have inherently low asset turnover and very high equity multiplier — these levels are regulatory features (Capital to Risk-weighted Assets Ratio under Basel III), not company choices. Equity multipliers of 8-12x are normal and not signs of distress. Banks' ROE is driven primarily by Net Interest Margin (NIM) and non-interest income relative to assets — modified DuPont versions exist (e.g., ROA × Equity Multiplier) for financial institutions.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is DuPont analysis different from ROCE?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DuPont decomposes Return on Equity (ROE = NI/Equity) — capturing returns to shareholders. ROCE (Return on Capital Employed = EBIT / Capital Employed) measures returns on total invested capital, ignoring how it's financed. ROCE is leverage-neutral; DuPont's ROE includes leverage as a driver. For comparing operating performance across companies with different capital structures, ROCE is preferred. For shareholder return analysis, DuPont/ROE is preferred. Both are commonly disclosed under Schedule III amendments effective FY 2021-22.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are limitations of DuPont analysis?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">DuPont has several limitations: it relies on accounting numbers subject to manipulation (revenue recognition, asset valuation), uses point-in-time balance sheet (period averages preferred), assumes constant relationships between components, ignores quality of earnings, and does not capture cash flow timing. Equity multiplier overstates leverage if intangibles or revaluation reserves are large. DuPont should be used alongside cash flow analysis, debt servicing capacity, and qualitative assessment of business model and management.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Equity Research &amp; Credit Appraisal</h3>
            <p>DuPont analysis, peer benchmarking, financial modelling, ratio variance investigations — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DuPont%20Analysis%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DuPont%20Analysis%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20DuPont%20Analysis%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

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
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
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
        return parseINR(document.getElementById(id).value) || 0;
    }

    // ===== INDUSTRY BENCHMARKS =====
    // [netMargin %, assetTurnover, equityMult] midpoints + [taxBurden, interestBurden, ebitMargin %] for 5-step
    const BENCHMARKS = {
        it:           {label: 'IT / Software',      nm: 20, at: 0.85, em: 1.3, tb: 0.78, ib: 0.95, eb: 27, roe: 22},
        fmcg:         {label: 'FMCG',                nm: 12, at: 1.6,  em: 2.0, tb: 0.78, ib: 0.92, eb: 17, roe: 24},
        pharma:       {label: 'Pharma',              nm: 17, at: 0.95, em: 1.5, tb: 0.78, ib: 0.95, eb: 23, roe: 22},
        manufacturing:{label: 'Manufacturing',       nm: 7,  at: 1.15, em: 2.0, tb: 0.78, ib: 0.85, eb: 11, roe: 15},
        auto:         {label: 'Auto',                nm: 7,  at: 1.25, em: 2.5, tb: 0.78, ib: 0.85, eb: 11, roe: 18},
        realestate:   {label: 'Real Estate',         nm: 11, at: 0.45, em: 2.25, tb: 0.78, ib: 0.75, eb: 19, roe: 11},
        retail:       {label: 'Retail / E-commerce', nm: 4,  at: 2.25, em: 2.0, tb: 0.78, ib: 0.85, eb: 7,  roe: 15},
        banks:        {label: 'Banks / NBFCs',       nm: 15, at: 0.075, em: 9.0, tb: 0.78, ib: 0.85, eb: 23, roe: 16}
    };

    // ===== SETUP =====
    setupToggleGroup('modeGroup', function() {
        const v = getActiveValue('modeGroup');
        document.getElementById('step5Block').classList.toggle('show', v === '5step');
        document.getElementById('resultSection').classList.remove('visible');
    });

    // ===== COMPUTE =====
    function compute() {
        const mode = getActiveValue('modeGroup');
        const sales = v('sales');
        const ni = v('netIncome');
        const ta = v('totalAssets');
        const eq = v('totalEquity');
        const industry = document.getElementById('industry').value;

        if (sales <= 0) { alert('Please enter Revenue / Sales.'); return; }
        if (ni <= 0) { alert('Please enter Net Income.'); return; }
        if (ta <= 0) { alert('Please enter Total Assets.'); return; }
        if (eq <= 0) { alert('Please enter Total Equity.'); return; }
        if (eq > ta) { alert('Total Equity cannot exceed Total Assets. Please verify inputs.'); return; }

        // 3-step components
        const netMargin = (ni / sales) * 100;     // %
        const assetTurnover = sales / ta;
        const equityMultiplier = ta / eq;
        const roe = (ni / eq) * 100;              // %

        let result = {
            mode: mode,
            sales: sales, ni: ni, ta: ta, eq: eq,
            netMargin: netMargin,
            assetTurnover: assetTurnover,
            equityMultiplier: equityMultiplier,
            roe: roe,
            industry: industry
        };

        if (mode === '5step') {
            const ebit = v('ebit');
            const ebt = v('ebt');
            if (ebit <= 0) { alert('5-step mode requires EBIT (Operating Profit).'); return; }
            if (ebt <= 0) { alert('5-step mode requires EBT (Profit Before Tax).'); return; }
            if (ebt > ebit) { alert('EBT cannot exceed EBIT (interest cost makes EBT lower). Please verify.'); return; }
            if (ni > ebt) { alert('Net Income cannot exceed EBT (taxes reduce NI below EBT). Please verify.'); return; }

            result.ebit = ebit;
            result.ebt = ebt;
            result.taxBurden = ni / ebt;             // ratio (0-1)
            result.interestBurden = ebt / ebit;      // ratio (0-1)
            result.ebitMargin = (ebit / sales) * 100; // %
        }

        // Identify primary driver vs benchmark
        if (industry && BENCHMARKS[industry]) {
            const bm = BENCHMARKS[industry];
            // Compare deviations (% above benchmark)
            const devs = {
                netMargin: (netMargin - bm.nm) / bm.nm,
                assetTurnover: (assetTurnover - bm.at) / bm.at,
                equityMultiplier: (equityMultiplier - bm.em) / bm.em
            };
            // Find largest absolute deviation
            const sorted = Object.entries(devs).sort((a, b) => Math.abs(b[1]) - Math.abs(a[1]));
            result.primaryDriver = sorted[0][0];
            result.driverDeviation = sorted[0][1] * 100;
            result.benchmark = bm;
        } else {
            // Without industry, identify driver as the largest contributor (relative log share)
            // Use natural log since multiplicative components
            const lnNm = Math.log(Math.max(0.001, netMargin/100));
            const lnAt = Math.log(Math.max(0.001, assetTurnover));
            const lnEm = Math.log(Math.max(0.001, equityMultiplier));
            const total = Math.abs(lnNm) + Math.abs(lnAt) + Math.abs(lnEm);
            // The driver with the largest positive contribution
            const contributions = {netMargin: lnNm, assetTurnover: lnAt, equityMultiplier: lnEm};
            const sorted = Object.entries(contributions).sort((a, b) => b[1] - a[1]);
            result.primaryDriver = sorted[0][0];
        }

        renderResult(result);
    }

    function renderResult(r) {
        // Verdict styling based on ROE vs benchmark
        const card = document.getElementById('verdictCard');
        let verdictClass = 'mid';
        let headline = 'Return on Equity Computed';
        const bm = r.benchmark;
        if (bm) {
            if (r.roe >= bm.roe * 1.1) {
                verdictClass = 'high';
                headline = 'ROE Above ' + bm.label + ' Industry Average';
            } else if (r.roe < bm.roe * 0.9) {
                verdictClass = 'low';
                headline = 'ROE Below ' + bm.label + ' Industry Average';
            } else {
                verdictClass = 'mid';
                headline = 'ROE In Line with ' + bm.label + ' Industry Average';
            }
            // If primary driver is leverage and ROE is high, flag it
            if (r.primaryDriver === 'equityMultiplier' && r.driverDeviation > 30) {
                verdictClass = 'leverage-driven';
                headline = 'High ROE — Driven Primarily by Leverage';
            }
        } else {
            // Without benchmark, use absolute thresholds
            if (r.roe >= 18) { verdictClass = 'high'; headline = 'Strong Return on Equity'; }
            else if (r.roe >= 10) { verdictClass = 'mid'; headline = 'Moderate Return on Equity'; }
            else { verdictClass = 'low'; headline = 'Below-Average Return on Equity'; }
        }
        card.className = 'verdict-card ' + verdictClass;
        document.getElementById('verdictHeadline').textContent = headline;
        document.getElementById('roeVal').textContent = r.roe.toFixed(2);

        // Build decomposition tree
        const flow = document.getElementById('treeFlow');
        flow.innerHTML = '';

        const components = [];
        if (r.mode === '5step') {
            components.push({key: 'taxBurden', label: 'Tax Burden', value: r.taxBurden.toFixed(3), suffix: ''});
            components.push({key: 'interestBurden', label: 'Interest Burden', value: r.interestBurden.toFixed(3), suffix: ''});
            components.push({key: 'ebitMargin', label: 'EBIT Margin', value: r.ebitMargin.toFixed(2) + '%', suffix: ''});
            components.push({key: 'assetTurnover', label: 'Asset Turnover', value: r.assetTurnover.toFixed(2) + '×', suffix: ''});
            components.push({key: 'equityMultiplier', label: 'Equity Multiplier', value: r.equityMultiplier.toFixed(2) + '×', suffix: ''});
        } else {
            components.push({key: 'netMargin', label: 'Net Margin', value: r.netMargin.toFixed(2) + '%', suffix: ''});
            components.push({key: 'assetTurnover', label: 'Asset Turnover', value: r.assetTurnover.toFixed(2) + '×', suffix: ''});
            components.push({key: 'equityMultiplier', label: 'Equity Multiplier', value: r.equityMultiplier.toFixed(2) + '×', suffix: ''});
        }

        components.forEach(function(c, i) {
            if (i > 0) {
                const op = document.createElement('div');
                op.className = 'tree-op';
                op.textContent = '×';
                flow.appendChild(op);
            }
            const node = document.createElement('div');
            let nodeCls = 'tree-node';
            if (c.key === r.primaryDriver) nodeCls += ' primary-driver';
            node.className = nodeCls;
            node.innerHTML = '<div class="tree-node-label">' + c.label + '</div><div class="tree-node-value">' + c.value + '</div>';
            flow.appendChild(node);
        });

        // Equals sign + ROE result node
        const eq = document.createElement('div');
        eq.className = 'tree-op';
        eq.innerHTML = '=';
        flow.appendChild(eq);
        const roeNode = document.createElement('div');
        roeNode.className = 'tree-node';
        roeNode.style.background = 'var(--primary)';
        roeNode.style.borderColor = 'var(--primary)';
        roeNode.innerHTML = '<div class="tree-node-label" style="color:rgba(255,255,255,0.85);">ROE</div><div class="tree-node-value" style="color:#fff;">' + r.roe.toFixed(2) + '%</div>';
        flow.appendChild(roeNode);

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const summaryItems = [];
        summaryItems.push({label: 'Return on Equity', value: r.roe.toFixed(2) + '%', sub: 'NI ÷ Equity', highlight: true});
        summaryItems.push({label: 'Net Profit Margin', value: r.netMargin.toFixed(2) + '%', sub: bm ? 'Industry: ' + bm.nm + '%' : 'NI ÷ Sales'});
        summaryItems.push({label: 'Asset Turnover', value: r.assetTurnover.toFixed(2) + '×', sub: bm ? 'Industry: ' + bm.at + '×' : 'Sales ÷ Assets'});
        summaryItems.push({label: 'Equity Multiplier', value: r.equityMultiplier.toFixed(2) + '×', sub: bm ? 'Industry: ' + bm.em + '×' : 'Assets ÷ Equity'});
        if (r.mode === '5step') {
            summaryItems.push({label: 'Tax Burden', value: r.taxBurden.toFixed(3), sub: 'Effective tax: ' + ((1 - r.taxBurden) * 100).toFixed(1) + '%'});
            summaryItems.push({label: 'Interest Burden', value: r.interestBurden.toFixed(3), sub: 'Interest drag: ' + ((1 - r.interestBurden) * 100).toFixed(1) + '%'});
        }
        summaryItems.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div><div class="summary-sub">' + s.sub + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';
        const driverNames = {
            netMargin: 'Net Profit Margin (profitability)',
            assetTurnover: 'Asset Turnover (efficiency)',
            equityMultiplier: 'Equity Multiplier (leverage)'
        };
        const driverInsights = {
            netMargin: 'Margin-driven ROE indicates strong pricing power, brand value or cost discipline. Generally sustainable.',
            assetTurnover: 'Turnover-driven ROE indicates operational efficiency and asset productivity. Generally sustainable.',
            equityMultiplier: 'Leverage-driven ROE indicates high debt funding. Sensitive to interest rates and economic cycles.'
        };
        const dn = driverNames[r.primaryDriver] || 'multiple components';
        const di = driverInsights[r.primaryDriver] || '';

        if (verdictClass === 'leverage-driven') {
            advisory.className = 'info-banner info';
            advHtml = '<strong>Primary driver: ' + dn + '.</strong> ' + di + ' Examine debt-equity ratio, interest coverage, and stress-test ROE under higher rate scenarios.';
        } else if (verdictClass === 'high') {
            advisory.className = 'info-banner success';
            advHtml = '<strong>Strong ROE — primary driver: ' + dn + '.</strong> ' + di;
        } else if (verdictClass === 'low') {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>ROE below industry average — primary gap: ' + dn + '.</strong> Review which DuPont component lags peers and identify specific operational levers.';
        } else {
            advisory.className = 'info-banner success';
            advHtml = '<strong>ROE in line with peers — primary driver: ' + dn + '.</strong> ' + di;
        }

        if (r.industry === 'banks') {
            advHtml += '<br><br><strong>Banking caveat:</strong> Standard DuPont produces extreme equity multiplier (8-12×) for banks because deposits are core liabilities, not financial leverage. Use modified DuPont (ROA × Equity Multiplier) and look at NIM and CAR under RBI Basel III framework instead.';
        }

        advisory.innerHTML = advHtml;

        // Basis text
        let basis = '<strong>3-step DuPont:</strong> ROE = ' + r.netMargin.toFixed(2) + '% × ' + r.assetTurnover.toFixed(2) + '× × ' + r.equityMultiplier.toFixed(2) + '× = <strong>' + r.roe.toFixed(2) + '%</strong>. ';
        if (r.mode === '5step') {
            basis += '<br><br><strong>5-step DuPont:</strong> ROE = ' + r.taxBurden.toFixed(3) + ' × ' + r.interestBurden.toFixed(3) + ' × ' + r.ebitMargin.toFixed(2) + '% × ' + r.assetTurnover.toFixed(2) + '× × ' + r.equityMultiplier.toFixed(2) + '× = <strong>' + r.roe.toFixed(2) + '%</strong>. ';
        }
        basis += '<br><br><em>Direct check:</em> Net Income ' + fmtINR(r.ni) + ' ÷ Equity ' + fmtINR(r.eq) + ' = ' + r.roe.toFixed(2) + '%.';
        if (r.benchmark) {
            basis += '<br><br><em>Benchmark:</em> ' + r.benchmark.label + ' typical ROE ' + r.benchmark.roe + '%.';
        }
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['sales', 'netIncome', 'ebit', 'ebt', 'totalAssets', 'totalEquity'].forEach(function(id) {
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
