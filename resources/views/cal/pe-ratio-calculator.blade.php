@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>P/E Ratio Calculator | Trailing, Forward P/E & PEG</title>
    <meta name="description" content="Free P/E ratio calculator: compute trailing and forward P/E, PEG ratio and earnings yield against sector benchmarks. CA-reviewed tool. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/pe-ratio-calculator/">
    <meta property="og:title" content="P/E Ratio Calculator — Trailing + Forward + PEG 2026">
    <meta property="og:description" content="Compute P/E ratio, forward P/E, PEG ratio and earnings yield with industry benchmarks. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/pe-ratio-calculator">
    <meta property="og:image" content="/tools/og/pe-ratio-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="P/E Ratio Calculator — Trailing + Forward + PEG 2026">
    <meta name="twitter:description" content="P/E + Forward P/E + PEG + Earnings Yield with sector benchmarks. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/pe-ratio-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "P/E Ratio Calculator",
      "description": "Price-to-Earnings (P/E) Ratio Calculator computes the trailing P/E ratio, forward P/E ratio, PEG ratio (P/E divided by earnings growth rate), and earnings yield (inverse of P/E) for Indian listed companies and unlisted firms with comparable company analysis. The tool supports two input modes — Per-Share mode using Market Price and EPS, or Aggregate mode using Market Capitalization and Net Income. Output includes valuation verdict (Undervalued, Fair Value, or Overvalued) versus industry benchmarks for IT, FMCG, Pharma, Private Banks, PSU Banks, Manufacturing, Auto, Real Estate, Energy, and Telecom; PEG ratio interpretation (under 1.0 undervalued relative to growth, 1.0-2.0 fair, above 2.0 overvalued); and earnings yield comparison with risk-free rates and bond yields. Suitable for equity research analysts, IPO valuation under SEBI Listing Regulations, comparable company analysis in M&A, retail investor screening, and CA-CFA student learning fundamental valuation. Aligned with Indian sector norms and SEBI disclosure requirements for IPO red herring prospectuses.",
      "url": "/tools/pe-ratio-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "P/E Ratio Calculator", "item": "/tools/pe-ratio-calculator"}
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
          "name": "What is the P/E ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Price-to-Earnings (P/E) ratio is the most widely used equity valuation metric. It is calculated as Market Price per Share divided by Earnings per Share (EPS), or equivalently Market Capitalization divided by Net Income. P/E represents the rupees an investor is willing to pay for each rupee of annual earnings. A P/E of 25x means investors pay ₹25 today for every ₹1 of current annual earnings. P/E is the standard valuation benchmark for listed companies, IPOs, and comparable company analysis."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good P/E ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no universal good P/E — interpretation depends on industry, growth rate and market conditions. Nifty 50 historically averages 18-25x. High-growth sectors (IT, FMCG, Pharma) trade at 25-50x. Mature sectors (PSU banks, energy, manufacturing) trade at 8-18x. A company with P/E significantly below industry peers may be undervalued or facing fundamental issues. Compare P/E against the company's historical range, industry peers, and growth prospects rather than absolute thresholds."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between trailing and forward P/E?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trailing P/E uses actual reported earnings of the last 12 months (TTM) — current price divided by historical EPS. Forward P/E uses analyst estimates of next 12 months earnings — current price divided by estimated future EPS. Forward P/E is typically lower than trailing P/E for growing companies (since estimated earnings exceed historical). Trailing is more reliable as it uses audited numbers; forward is more relevant for valuation decisions. Quality investors examine both for trend analysis."
          }
        },
        {
          "@type": "Question",
          "name": "What is the PEG ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PEG Ratio = P/E Ratio ÷ Earnings Growth Rate (in percent). It adjusts P/E for growth — a high P/E is justified if earnings are growing fast. PEG below 1.0 suggests undervaluation relative to growth; 1.0-2.0 fair value; above 2.0 overvalued. Popularised by Peter Lynch, PEG is particularly useful for high-growth stocks where standalone P/E looks expensive. A company at 30x P/E with 25% growth has PEG 1.2 (fair); same P/E with 5% growth has PEG 6 (very expensive)."
          }
        },
        {
          "@type": "Question",
          "name": "What is earnings yield?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Earnings Yield is the inverse of P/E ratio, expressed as a percentage. Earnings Yield = EPS ÷ Price = 1 ÷ P/E. A P/E of 25x equals an earnings yield of 4%. Earnings yield enables direct comparison with bond yields — when 10-year G-Sec yield is 7% and a stock's earnings yield is only 3%, the stock may be expensive relative to risk-free alternatives. The Fed Model uses earnings yield versus bond yield to assess overall market valuation."
          }
        },
        {
          "@type": "Question",
          "name": "What is P/E for negative earnings companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "P/E ratio is mathematically meaningless for companies with negative earnings (losses). The result would be negative or undefined. For loss-making companies, alternative valuation metrics are used: Price-to-Sales (P/S), Price-to-Book (P/B), Enterprise Value to EBITDA (EV/EBITDA), or Discounted Cash Flow (DCF). Many tech startups and turnaround companies report negative earnings but trade at high valuations — these require forward-looking metrics rather than historical P/E."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical P/E benchmarks by Indian industry?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT and software 25-35x, FMCG 35-50x, Pharma 25-35x, Private banks 15-25x, PSU banks 6-12x, Manufacturing 18-25x, Auto 15-25x, Real Estate 18-30x, Energy and Power 8-15x, Telecom 18-30x. These are approximate ranges based on sector medians; individual companies may trade at substantial premiums (high growth) or discounts (governance concerns). Always compare against listed peers in the same sector with similar growth and risk profiles for meaningful insight."
          }
        },
        {
          "@type": "Question",
          "name": "Why are P/E ratios different for banks versus other sectors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Banks trade at lower P/E ratios than non-financial companies for several reasons: leverage-driven business model carries higher risk, regulatory capital requirements limit growth, asset quality is opaque (NPA hidden until recognised), credit cycles create earnings volatility, and government ownership (in PSU banks) creates governance discounts. Private banks typically trade at 15-25x; PSU banks at 6-12x. Bank valuation often uses Price-to-Book Value (P/B) alongside P/E given the importance of equity book value in Basel III framework."
          }
        },
        {
          "@type": "Question",
          "name": "How does growth affect P/E ratio interpretation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Higher earnings growth justifies higher P/E ratios. The Gordon Growth Model relationship: Justified P/E = Payout Ratio × (1 + g) ÷ (r − g), where g is growth rate and r is required return. A 5% growth company with 10% required return justifies P/E around 17x. A 15% growth company justifies P/E around 35x at the same payout. PEG ratio (P/E ÷ growth) is the practical shortcut — PEG of 1.0 typically signals fair value across growth profiles."
          }
        },
        {
          "@type": "Question",
          "name": "What are the limitations of P/E ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "P/E has several limitations: it relies on accounting earnings vulnerable to manipulation; ignores capital structure (highly leveraged firms inflate EPS); does not capture growth, risk, or quality differences; produces meaningless results for negative earnings; and uses point-in-time data subject to cyclical noise. P/E should be used alongside PEG (growth adjustment), EV/EBITDA (capital structure neutral), Price-to-Book (asset basis), Free Cash Flow yield, and qualitative business analysis for complete valuation."
          }
        },
        {
          "@type": "Question",
          "name": "How does corporate tax regime affect P/E?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tax regime changes directly affect EPS and therefore P/E. India's Section 115BAA new regime (22% base, ~25.17% effective) reduces tax burden for opted companies versus old regime (30% base, ~33% effective). The 2019 corporate tax cut led to immediate EPS increases and P/E re-rating across sectors. Section 115BAB manufacturers (15% base, ~17.16% effective) enjoy further benefits. When comparing P/E across years or companies on different tax regimes, examine pre-tax earnings (P/E based on EBT) for cleaner comparison."
          }
        },
        {
          "@type": "Question",
          "name": "How is P/E used in IPO valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEBI Listing Regulations require IPO red herring prospectus to disclose company P/E versus listed peer companies in the comparable industry. The book-building process uses peer P/E as a benchmark — IPO pricing typically targets 5-15% discount to listed peer median P/E to attract investors. Highly anticipated IPOs may price at premium to peers. Pre-IPO investors and merchant bankers use P/E-based valuation alongside DCF and EV/EBITDA. Post-listing, the P/E typically converges to peer average within 12-18 months."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between adjusted and reported P/E?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Reported P/E uses statutory net income from financial statements per Schedule III. Adjusted P/E excludes one-time items: exceptional gains or losses, impairment charges, restructuring costs, gains on asset sales, and tax windfalls. Adjusted earnings provide a cleaner picture of recurring profitability for valuation. SEBI requires reconciliation between reported and adjusted figures in earnings releases. For comparable company analysis and forward valuation, adjusted P/E is generally preferred as it normalises for non-recurring items."
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
        .approach-toggle .toggle-btn { padding: 14px 16px; font-size: 14px; }
        .approach-toggle .toggle-btn.active { background: var(--primary); color: #fff; }
        .mode-block { display: none; }
        .mode-block.active { display: block; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.undervalued { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.fair { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.overvalued { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.neutral { background: linear-gradient(135deg, #F3F4F6 0%, #E5E7EB 100%); border-left-color: var(--text-muted); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .pe-mega { font-family: var(--font-mono); font-size: 76px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -3px; }
        .pe-mega-suffix { font-size: 22px; color: var(--text-muted); margin-left: 6px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; }
        .verdict-pill.undervalued { background: var(--success); color: #fff; }
        .verdict-pill.fair { background: var(--accent); color: var(--primary-dark); }
        .verdict-pill.overvalued { background: var(--danger); color: #fff; }

        .ratio-quad { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 500px) { .ratio-quad { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .ratio-quad { grid-template-columns: repeat(4, 1fr); } }
        .ratio-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .ratio-card.highlight { background: var(--primary); border-color: var(--primary); }
        .ratio-card.highlight .ratio-label, .ratio-card.highlight .ratio-value, .ratio-card.highlight .ratio-sub { color: #fff; }
        .ratio-card.highlight .ratio-sub { color: rgba(255,255,255,0.8); }
        .ratio-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .ratio-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.2; }
        .ratio-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }
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
            .pe-mega { font-size: 56px; }
            .pe-mega-suffix { font-size: 18px; }
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
        <a href="#benchmarks">Sector Benchmarks</a>
        <a href="#variants">P/E Variants</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    P/E Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>P/E Ratio <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20P%2FE%20Ratio%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=P%2FE%20Ratio%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20P%2FE%20Ratio%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The Price-to-Earnings (P/E) ratio is the most widely used equity valuation metric — Market Price ÷ EPS. This calculator computes <strong>Trailing P/E</strong>, <strong>Forward P/E</strong>, <strong>PEG Ratio</strong> (P/E adjusted for growth) and <strong>Earnings Yield</strong> (1 ÷ P/E) with sector benchmarks for IT, FMCG, Pharma, Banks, Auto, Manufacturing and other Indian industries. PEG below 1.0 typically signals undervaluation relative to growth; above 2.0 signals overvaluation. Use alongside DuPont analysis, ROE/ROCE/ROA, and Altman Z-Score for complete fundamental analysis.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute P/E Ratio &amp; Variants</h2>
            <p class="calc-intro">Choose Per-Share mode (Price + EPS) or Aggregate mode (Market Cap + Net Income). Optional inputs for forward earnings, growth rate and industry enable PEG ratio and valuation verdict.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="modeGroup" role="tablist" aria-label="Input mode">
                <button type="button" class="toggle-btn active" data-value="pershare" role="tab" aria-selected="true">Per-Share (Price + EPS)</button>
                <button type="button" class="toggle-btn" data-value="aggregate" role="tab" aria-selected="false">Aggregate (Market Cap + NI)</button>
            </div>

            <!-- PER-SHARE MODE -->
            <div class="mode-block active" id="pershareBlock">
                <div class="calc-section-title">Price &amp; Earnings (Per-Share)</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ps_price">Market Price per Share (₹)</label>
                        <input type="text" id="ps_price" min="0" step="any" placeholder="e.g. 2500" inputmode="decimal" autocomplete="off">
                        <span class="helper">Current market price (CMP) on BSE / NSE.</span>
                    </div>
                    <div class="form-group">
                        <label for="ps_eps">EPS — Trailing 12 months (₹)</label>
                        <input type="text" id="ps_eps" step="any" placeholder="e.g. 100" inputmode="decimal" autocomplete="off">
                        <span class="helper">Earnings Per Share over last 12 months. From annual report or quarterly disclosures.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ps_eps_fwd">Forward EPS Estimate (₹) — Optional</label>
                        <input type="text" id="ps_eps_fwd" step="any" placeholder="e.g. 120" inputmode="decimal" autocomplete="off">
                        <span class="helper">Analyst estimate for next 12 months. Used to compute Forward P/E.</span>
                    </div>
                    <div class="form-group">
                        <label for="ps_growth">Earnings Growth Rate — Optional (%)</label>
                        <input type="text" id="ps_growth" step="any" placeholder="e.g. 15" inputmode="decimal" autocomplete="off">
                        <span class="helper">Expected annual EPS growth %. Used to compute PEG ratio.</span>
                    </div>
                </div>
            </div>

            <!-- AGGREGATE MODE -->
            <div class="mode-block" id="aggregateBlock">
                <div class="calc-section-title">Market Cap &amp; Net Income (Aggregate)</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ag_mcap">Market Capitalization (₹)</label>
                        <input type="text" id="ag_mcap" min="0" step="any" placeholder="e.g. 16750000000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Share Price × Shares Outstanding. From BSE/NSE.</span>
                    </div>
                    <div class="form-group">
                        <label for="ag_ni">Net Income — TTM (₹)</label>
                        <input type="text" id="ag_ni" step="any" placeholder="e.g. 670000000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Profit After Tax over last 12 months from P&amp;L.</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ag_ni_fwd">Forward Net Income (₹) — Optional</label>
                        <input type="text" id="ag_ni_fwd" step="any" placeholder="e.g. 800000000000" inputmode="decimal" autocomplete="off">
                        <span class="helper">Estimated next 12 months. Used for Forward P/E.</span>
                    </div>
                    <div class="form-group">
                        <label for="ag_growth">Earnings Growth Rate — Optional (%)</label>
                        <input type="text" id="ag_growth" step="any" placeholder="e.g. 15" inputmode="decimal" autocomplete="off">
                        <span class="helper">Expected annual NI growth. Used for PEG.</span>
                    </div>
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
                    <option value="banksprivate">Banks (Private Sector)</option>
                    <option value="bankspsu">Banks (PSU)</option>
                    <option value="manufacturing">Manufacturing / Industrials</option>
                    <option value="auto">Auto / Auto Components</option>
                    <option value="realestate">Real Estate / Construction</option>
                    <option value="energy">Energy / Power / Utilities</option>
                    <option value="telecom">Telecom</option>
                    <option value="nifty50">Nifty 50 (Broad Market)</option>
                </select>
                <span class="helper">Drives valuation verdict and benchmark comparison.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute P/E Ratio</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Trailing P/E Ratio</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="pe-mega"><span id="peVal">0.00</span><span class="pe-mega-suffix">x</span></div>
                    <div class="verdict-pill" id="verdictPill"></div>
                </div>

                <div class="ratio-quad" id="ratioQuad"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — P/E Ratio Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20P%2FE%20Ratio%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=P%2FE%20Ratio%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20P%2FE%20Ratio%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How These Ratios Work</h2>
            <p>The P/E ratio is the most widely cited equity valuation metric — almost every financial news report quotes it. The basic version is simple, but a sophisticated investor uses multiple variants to triangulate fair value.</p>

            <h3>The Four Formulas</h3>
            <div class="formula-box">
<span class="label">Trailing P/E</span>     = Current Market Price ÷ Trailing 12-month EPS

<span class="label">Forward P/E</span>      = Current Market Price ÷ Estimated next 12-month EPS

<span class="label">PEG Ratio</span>        = P/E Ratio ÷ Earnings Growth Rate (in %)

<span class="label">Earnings Yield</span>   = EPS ÷ Price = 1 ÷ P/E   (expressed as %)
            </div>

            <h3>Why Each Variant Matters</h3>
            <ul>
                <li><strong>Trailing P/E</strong> — uses audited historical numbers. Most reliable but backward-looking. Standard in most stock screening</li>
                <li><strong>Forward P/E</strong> — uses analyst estimates. More relevant for investment decisions but vulnerable to forecast bias. Typically lower than trailing for growing companies</li>
                <li><strong>PEG Ratio</strong> — adjusts P/E for growth. A 30x P/E company growing 30% has PEG 1.0; same P/E with 5% growth has PEG 6.0. PEG less than 1.0 suggests undervaluation; greater than 2.0 suggests overvaluation</li>
                <li><strong>Earnings Yield</strong> — directly comparable with bond yields. When 10-year G-Sec yields 7% and a stock yields 4%, the stock is expensive relative to risk-free alternatives</li>
            </ul>

            <h3>The Justified P/E Formula</h3>
            <p>Through the Gordon Growth Model, the P/E ratio that fundamentally fits a company can be derived:</p>
            <div class="formula-box">
<span class="label">Justified P/E</span> = Payout Ratio × (1 + g) ÷ (r − g)

   where:  g = expected long-term growth rate
           r = required equity return (Cost of Equity)
            </div>
            <p>For a company with 50% payout, 5% growth, 12% required return: Justified P/E = 0.5 × 1.05 ÷ 0.07 = 7.5x. For high-growth profile (15% growth, same parameters): Justified P/E = 0.5 × 1.15 ÷ (-0.03) = mathematically unstable when growth approaches required return.</p>

            <div class="callout warn">
                <p><strong>P/E is meaningless for negative earnings.</strong> Loss-making companies (many tech startups, turnaround firms, cyclical businesses in downturn) cannot be valued using P/E. Use alternative metrics: Price-to-Sales (P/S), Price-to-Book (P/B), EV/EBITDA, or DCF. The calculator alerts users when EPS or Net Income is non-positive.</p>
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Sector P/E Benchmarks — Indian Markets</h2>
            <p>P/E ratios vary substantially by sector due to different growth profiles, capital intensity, regulatory regimes, and risk. The following ranges are indicative — individual companies may trade at substantial premiums (high growth, strong moat) or discounts (governance concerns, cyclical downturn).</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Sector</th><th>Typical P/E</th><th>Drivers</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>IT / Software</strong></td><td>25-35x</td><td>High margins, scalable revenue, low capex</td></tr>
                    <tr><td><strong>FMCG / Consumer</strong></td><td>35-50x</td><td>Brand premium, predictable cash flows, defensive</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>25-35x</td><td>Patent moats, regulated pricing, R&amp;D intensity</td></tr>
                    <tr><td><strong>Private Banks</strong></td><td>15-25x</td><td>Asset growth, fee income, NIM, credit quality</td></tr>
                    <tr><td><strong>PSU Banks</strong></td><td>6-12x</td><td>Government ownership, NPA legacy, slower growth</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>18-25x</td><td>Capacity utilisation, commodity cycles, capex</td></tr>
                    <tr><td><strong>Auto</strong></td><td>15-25x</td><td>Cyclicality, EV transition, raw material volatility</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>18-30x</td><td>Project execution, regulatory cycles, leverage</td></tr>
                    <tr><td><strong>Energy / Power</strong></td><td>8-15x</td><td>Regulated tariffs, capital intensity, ESG concerns</td></tr>
                    <tr><td><strong>Telecom</strong></td><td>18-30x</td><td>Tariff cycles, ARPU trends, network capex</td></tr>
                    <tr><td><strong>Nifty 50 (Broad)</strong></td><td>18-25x</td><td>Index of large diversified companies</td></tr>
                </tbody>
            </table>

            <h3>Reading the Benchmarks</h3>
            <ul>
                <li><strong>Premium to peer P/E</strong> often signals high growth, dominant market position, or speculative excess</li>
                <li><strong>Discount to peer P/E</strong> often signals weaker growth, governance issues, or undervaluation opportunity</li>
                <li><strong>Convergence over time</strong> — companies trading at substantial premiums or discounts typically converge to peer median over 18-36 months</li>
                <li><strong>Cyclical sectors</strong> (auto, real estate, energy) show wide P/E ranges across cycles — averages mislead during peak or trough phases</li>
            </ul>

            <p><a href="https://www.bseindia.com/" target="_blank" rel="noopener">BSE</a> and <a href="https://www.nseindia.com/" target="_blank" rel="noopener">NSE</a> publish daily index P/E data. <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations require P/E disclosure in IPO red herring prospectuses with peer comparison. Schedule III ratio disclosure under <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> guidance includes Net Profit Ratio and Return on Investment, with 25%+ variance explanation. The Companies Act framework is at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a> with <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> filings.</p>
        </section>

        <section class="content-section" id="variants">
            <h2>P/E Variants &amp; Related Metrics</h2>
            <p>Beyond the four primary variants computed above, sophisticated valuation uses several P/E adaptations and complementary metrics.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Metric</th><th>Formula</th><th>When to Use</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Trailing P/E (TTM)</strong></td><td>Price ÷ EPS (TTM)</td><td>Most common; uses reported earnings</td></tr>
                    <tr><td><strong>Forward P/E</strong></td><td>Price ÷ Estimated EPS</td><td>Investment decisions; uses estimates</td></tr>
                    <tr><td><strong>PEG Ratio</strong></td><td>P/E ÷ Growth %</td><td>High-growth stocks; growth adjustment</td></tr>
                    <tr><td><strong>Earnings Yield</strong></td><td>1 ÷ P/E</td><td>Comparison with bond yields</td></tr>
                    <tr><td><strong>CAPE / Shiller P/E</strong></td><td>Price ÷ 10-yr avg inflation-adjusted EPS</td><td>Index/market valuation; smooths cycles</td></tr>
                    <tr><td><strong>Adjusted P/E</strong></td><td>Price ÷ EPS (excl. one-time items)</td><td>Cleaner recurring earnings basis</td></tr>
                    <tr><td><strong>EV/EBITDA</strong></td><td>Enterprise Value ÷ EBITDA</td><td>Capital structure neutral; cross-sector</td></tr>
                    <tr><td><strong>Price-to-Book (P/B)</strong></td><td>Price ÷ Book Value per Share</td><td>Banks, asset-heavy businesses</td></tr>
                    <tr><td><strong>Price-to-Sales (P/S)</strong></td><td>Price ÷ Sales per Share</td><td>Loss-making or early-stage companies</td></tr>
                </tbody>
            </table>

            <h3>Tax Regime Impact on P/E</h3>
            <p>Tax regime changes directly affect EPS and therefore P/E. India's <strong>Section 115BAA</strong> new regime (22% base, ~25.17% effective with surcharge and cess) reduces tax burden for opted companies versus old regime (~33% effective). The 2019 corporate tax cut led to immediate EPS increases and P/E re-rating across sectors. <strong>Section 115BAB</strong> manufacturers (15% base, ~17.16% effective) enjoy further benefits. When comparing P/E across years or across companies on different tax regimes, examine pre-tax P/E (Price ÷ EBT per Share) for cleaner comparison. The <a href="/tools/deferred-tax-calculator">Deferred Tax Calculator</a> helps quantify tax regime impact on earnings.</p>

            <div class="callout">
                <p><strong>P/E for unlisted companies:</strong> Unlisted companies do not have market prices, so P/E is computed using comparable company analysis — apply the average P/E of listed peers to the unlisted company's earnings. This is the standard valuation technique for IPO pricing under <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations and M&amp;A advisory work. Discounts of 20-30% are typically applied for illiquidity and lack of disclosure.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Equity Research, IPO Valuation or M&amp;A Support?</h3>
            <p>Patron Accounting LLP supports equity research teams, investment banks, M&amp;A advisors and CFOs with comparable company analysis, IPO valuation, transaction advisory, peer benchmarking, and SEBI disclosure preparation — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20P%2FE%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=P%2FE%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20P%2FE%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the P/E ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Price-to-Earnings (P/E) ratio is the most widely used equity valuation metric. It is calculated as Market Price per Share divided by Earnings per Share (EPS), or equivalently Market Capitalization divided by Net Income. P/E represents the rupees an investor is willing to pay for each rupee of annual earnings. A P/E of 25x means investors pay ₹25 today for every ₹1 of current annual earnings. P/E is the standard valuation benchmark for listed companies, IPOs, and comparable company analysis.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a good P/E ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no universal good P/E — interpretation depends on industry, growth rate and market conditions. Nifty 50 historically averages 18-25x. High-growth sectors (IT, FMCG, Pharma) trade at 25-50x. Mature sectors (PSU banks, energy, manufacturing) trade at 8-18x. A company with P/E significantly below industry peers may be undervalued or facing fundamental issues. Compare P/E against the company's historical range, industry peers, and growth prospects rather than absolute thresholds.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between trailing and forward P/E?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Trailing P/E uses actual reported earnings of the last 12 months (TTM) — current price divided by historical EPS. Forward P/E uses analyst estimates of next 12 months earnings — current price divided by estimated future EPS. Forward P/E is typically lower than trailing P/E for growing companies (since estimated earnings exceed historical). Trailing is more reliable as it uses audited numbers; forward is more relevant for valuation decisions. Quality investors examine both for trend analysis.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the PEG ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">PEG Ratio = P/E Ratio ÷ Earnings Growth Rate (in percent). It adjusts P/E for growth — a high P/E is justified if earnings are growing fast. PEG below 1.0 suggests undervaluation relative to growth; 1.0-2.0 fair value; above 2.0 overvalued. Popularised by Peter Lynch, PEG is particularly useful for high-growth stocks where standalone P/E looks expensive. A company at 30x P/E with 25% growth has PEG 1.2 (fair); same P/E with 5% growth has PEG 6 (very expensive).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is earnings yield?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Earnings Yield is the inverse of P/E ratio, expressed as a percentage. Earnings Yield = EPS ÷ Price = 1 ÷ P/E. A P/E of 25x equals an earnings yield of 4%. Earnings yield enables direct comparison with bond yields — when 10-year G-Sec yield is 7% and a stock's earnings yield is only 3%, the stock may be expensive relative to risk-free alternatives. The Fed Model uses earnings yield versus bond yield to assess overall market valuation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is P/E for negative earnings companies?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">P/E ratio is mathematically meaningless for companies with negative earnings (losses). The result would be negative or undefined. For loss-making companies, alternative valuation metrics are used: Price-to-Sales (P/S), Price-to-Book (P/B), Enterprise Value to EBITDA (EV/EBITDA), or Discounted Cash Flow (DCF). Many tech startups and turnaround companies report negative earnings but trade at high valuations — these require forward-looking metrics rather than historical P/E.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are typical P/E benchmarks by Indian industry?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IT and software 25-35x, FMCG 35-50x, Pharma 25-35x, Private banks 15-25x, PSU banks 6-12x, Manufacturing 18-25x, Auto 15-25x, Real Estate 18-30x, Energy and Power 8-15x, Telecom 18-30x. These are approximate ranges based on sector medians; individual companies may trade at substantial premiums (high growth) or discounts (governance concerns). Always compare against listed peers in the same sector with similar growth and risk profiles for meaningful insight.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Why are P/E ratios different for banks versus other sectors?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Banks trade at lower P/E ratios than non-financial companies for several reasons: leverage-driven business model carries higher risk, regulatory capital requirements limit growth, asset quality is opaque (NPA hidden until recognised), credit cycles create earnings volatility, and government ownership (in PSU banks) creates governance discounts. Private banks typically trade at 15-25x; PSU banks at 6-12x. Bank valuation often uses Price-to-Book Value (P/B) alongside P/E given the importance of equity book value in Basel III framework.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does growth affect P/E ratio interpretation?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Higher earnings growth justifies higher P/E ratios. The Gordon Growth Model relationship: Justified P/E = Payout Ratio × (1 + g) ÷ (r − g), where g is growth rate and r is required return. A 5% growth company with 10% required return justifies P/E around 17x. A 15% growth company justifies P/E around 35x at the same payout. PEG ratio (P/E ÷ growth) is the practical shortcut — PEG of 1.0 typically signals fair value across growth profiles.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the limitations of P/E ratio?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">P/E has several limitations: it relies on accounting earnings vulnerable to manipulation; ignores capital structure (highly leveraged firms inflate EPS); does not capture growth, risk, or quality differences; produces meaningless results for negative earnings; and uses point-in-time data subject to cyclical noise. P/E should be used alongside PEG (growth adjustment), EV/EBITDA (capital structure neutral), Price-to-Book (asset basis), Free Cash Flow yield, and qualitative business analysis for complete valuation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does corporate tax regime affect P/E?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tax regime changes directly affect EPS and therefore P/E. India's Section 115BAA new regime (22% base, ~25.17% effective) reduces tax burden for opted companies versus old regime (30% base, ~33% effective). The 2019 corporate tax cut led to immediate EPS increases and P/E re-rating across sectors. Section 115BAB manufacturers (15% base, ~17.16% effective) enjoy further benefits. When comparing P/E across years or companies on different tax regimes, examine pre-tax earnings (P/E based on EBT) for cleaner comparison.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is P/E used in IPO valuation?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SEBI Listing Regulations require IPO red herring prospectus to disclose company P/E versus listed peer companies in the comparable industry. The book-building process uses peer P/E as a benchmark — IPO pricing typically targets 5-15% discount to listed peer median P/E to attract investors. Highly anticipated IPOs may price at premium to peers. Pre-IPO investors and merchant bankers use P/E-based valuation alongside DCF and EV/EBITDA. Post-listing, the P/E typically converges to peer average within 12-18 months.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between adjusted and reported P/E?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Reported P/E uses statutory net income from financial statements per Schedule III. Adjusted P/E excludes one-time items: exceptional gains or losses, impairment charges, restructuring costs, gains on asset sales, and tax windfalls. Adjusted earnings provide a cleaner picture of recurring profitability for valuation. SEBI requires reconciliation between reported and adjusted figures in earnings releases. For comparable company analysis and forward valuation, adjusted P/E is generally preferred as it normalises for non-recurring items.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Equity Valuation &amp; M&amp;A</h3>
            <p>Comparable company analysis, IPO valuation, transaction advisory, peer benchmarking — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20P%2FE%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=P%2FE%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20P%2FE%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

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
            <a href="/tools/roe-roce-calculator" class="sidebar-link">ROE + ROCE + ROA<span class="arrow">→</span></a>
            <a href="/tools/altman-z-score-calculator" class="sidebar-link">Altman Z-Score<span class="arrow">→</span></a>
            <a href="/tools/current-ratio-calculator" class="sidebar-link">Current Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/quick-ratio-calculator" class="sidebar-link">Quick Ratio Calculator<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
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

    // Industry P/E benchmarks (typical median)
    const BENCHMARKS = {
        it:           {label: 'IT / Software',           pe: 30, range: '25-35x'},
        fmcg:         {label: 'FMCG',                     pe: 42, range: '35-50x'},
        pharma:       {label: 'Pharma',                   pe: 30, range: '25-35x'},
        banksprivate: {label: 'Private Banks',            pe: 20, range: '15-25x'},
        bankspsu:     {label: 'PSU Banks',                pe: 9,  range: '6-12x'},
        manufacturing:{label: 'Manufacturing',            pe: 22, range: '18-25x'},
        auto:         {label: 'Auto',                     pe: 20, range: '15-25x'},
        realestate:   {label: 'Real Estate',              pe: 24, range: '18-30x'},
        energy:       {label: 'Energy / Power',           pe: 11, range: '8-15x'},
        telecom:      {label: 'Telecom',                  pe: 24, range: '18-30x'},
        nifty50:      {label: 'Nifty 50 (Broad Market)',  pe: 22, range: '18-25x'}
    };

    setupToggleGroup('modeGroup', function() {
        const mode = getActiveValue('modeGroup');
        document.getElementById('pershareBlock').classList.toggle('active', mode === 'pershare');
        document.getElementById('aggregateBlock').classList.toggle('active', mode === 'aggregate');
        document.getElementById('resultSection').classList.remove('visible');
    });

    function classifyValuation(pe, bench) {
        if (!bench) return null;
        const ratio = pe / bench.pe;
        if (ratio < 0.7) return 'undervalued';
        if (ratio > 1.3) return 'overvalued';
        return 'fair';
    }

    function pegInterpretation(peg) {
        if (peg < 1.0) return 'Undervalued vs growth';
        if (peg <= 2.0) return 'Fairly valued vs growth';
        return 'Overvalued vs growth';
    }

    function compute() {
        const mode = getActiveValue('modeGroup');
        const industry = document.getElementById('industry').value;
        const bench = BENCHMARKS[industry] || null;

        let price, eps, epsFwd, growth, ni, niFwd, mcap;

        if (mode === 'pershare') {
            price = v('ps_price');
            eps = v('ps_eps');
            epsFwd = v('ps_eps_fwd');
            growth = v('ps_growth');
            if (price <= 0) { alert('Please enter Market Price per Share.'); return; }
            if (eps === 0 && document.getElementById('ps_eps').value === '') { alert('Please enter EPS.'); return; }
            if (eps <= 0) { alert('EPS must be positive. P/E ratio is mathematically meaningless for negative earnings — use Price-to-Sales, Price-to-Book or DCF instead.'); return; }
        } else {
            mcap = v('ag_mcap');
            ni = v('ag_ni');
            niFwd = v('ag_ni_fwd');
            growth = v('ag_growth');
            if (mcap <= 0) { alert('Please enter Market Capitalization.'); return; }
            if (ni === 0 && document.getElementById('ag_ni').value === '') { alert('Please enter Net Income.'); return; }
            if (ni <= 0) { alert('Net Income must be positive. P/E ratio is mathematically meaningless for negative earnings — use Price-to-Sales, Price-to-Book or DCF instead.'); return; }
        }

        // Compute P/E
        let pe, peFwd = null;
        if (mode === 'pershare') {
            pe = price / eps;
            if (epsFwd > 0) peFwd = price / epsFwd;
        } else {
            pe = mcap / ni;
            if (niFwd > 0) peFwd = mcap / niFwd;
        }

        // Earnings yield
        const earningsYield = (1 / pe) * 100;

        // PEG
        let peg = null;
        if (growth > 0) {
            peg = pe / growth;
        }

        // Valuation verdict vs benchmark
        const verdict = classifyValuation(pe, bench);

        renderResult({
            mode: mode, industry: industry, bench: bench,
            price: price, eps: eps, epsFwd: epsFwd,
            mcap: mcap, ni: ni, niFwd: niFwd,
            growth: growth,
            pe: pe, peFwd: peFwd, earningsYield: earningsYield, peg: peg,
            verdict: verdict
        });
    }

    function renderResult(r) {
        const card = document.getElementById('verdictCard');
        const pill = document.getElementById('verdictPill');

        let cardClass = 'verdict-card';
        let headline = 'Trailing P/E Ratio Computed';
        let pillText = '';

        if (r.verdict === 'undervalued') {
            cardClass += ' undervalued';
            headline = 'Below ' + r.bench.label + ' Average';
            pillText = '✓ Potentially Undervalued';
            pill.className = 'verdict-pill undervalued';
        } else if (r.verdict === 'fair') {
            cardClass += ' fair';
            headline = 'In Line with ' + r.bench.label + ' Average';
            pillText = '◯ Fair Value';
            pill.className = 'verdict-pill fair';
        } else if (r.verdict === 'overvalued') {
            cardClass += ' overvalued';
            headline = 'Above ' + r.bench.label + ' Average';
            pillText = '⚠ Potentially Overvalued';
            pill.className = 'verdict-pill overvalued';
        } else {
            cardClass += ' neutral';
            if (r.pe < 10) headline = 'Low P/E — Investigate Drivers';
            else if (r.pe < 25) headline = 'Moderate P/E';
            else if (r.pe < 50) headline = 'High P/E — Growth Expected';
            else headline = 'Very High P/E — Premium Valuation';
            pill.style.display = 'none';
        }
        card.className = cardClass;
        document.getElementById('verdictHeadline').textContent = headline;
        document.getElementById('peVal').textContent = r.pe.toFixed(2);
        if (r.verdict) {
            pill.style.display = 'inline-block';
            pill.textContent = pillText;
        }

        // Quad
        const quad = document.getElementById('ratioQuad');
        quad.innerHTML = '';
        const items = [
            {label: 'Trailing P/E', value: r.pe.toFixed(2) + 'x', sub: 'Price ÷ TTM EPS', highlight: true},
            {label: 'Forward P/E', value: r.peFwd !== null ? r.peFwd.toFixed(2) + 'x' : '—', sub: r.peFwd !== null ? 'Price ÷ Est EPS' : 'Forward EPS not provided'},
            {label: 'Earnings Yield', value: r.earningsYield.toFixed(2) + '%', sub: '1 ÷ P/E (compare to G-Sec)'},
            {label: 'PEG Ratio', value: r.peg !== null ? r.peg.toFixed(2) : '—', sub: r.peg !== null ? pegInterpretation(r.peg) : 'Growth not provided'}
        ];
        items.forEach(function(it) {
            const c = document.createElement('div');
            c.className = 'ratio-card' + (it.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="ratio-label">' + it.label + '</div><div class="ratio-value">' + it.value + '</div><div class="ratio-sub">' + it.sub + '</div>';
            quad.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';

        if (r.verdict === 'undervalued') {
            advisory.className = 'info-banner success';
            advHtml = '<strong>P/E below ' + r.bench.label + ' peers (' + r.bench.range + ').</strong> Potential undervaluation opportunity. Investigate drivers — is it genuine bargain (peer rerate pending) or fundamental issue (governance, growth concerns, asset quality)? Examine 5-year P/E trend, ROE/ROCE versus peers, and recent analyst downgrades.';
        } else if (r.verdict === 'fair') {
            advisory.className = 'info-banner info';
            advHtml = '<strong>P/E in line with ' + r.bench.label + ' peers (' + r.bench.range + ').</strong> Valuation is fair. Investment thesis depends on whether growth, margin or governance trajectory is improving versus peers — pure peer parity rarely generates excess returns.';
        } else if (r.verdict === 'overvalued') {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>P/E above ' + r.bench.label + ' peers (' + r.bench.range + ').</strong> Premium valuation may be justified by superior growth, margins or moat — or may signal speculative excess. Examine PEG ratio (growth-adjusted), forward P/E (estimate convergence), and historical premium-to-peer trend. Premium often compresses over 18-36 months.';
        } else {
            advisory.className = 'info-banner info';
            advHtml = '<strong>P/E computed without industry benchmark.</strong> Select an industry to compare against sector medians for valuation verdict.';
        }

        // PEG-specific commentary
        if (r.peg !== null) {
            advHtml += '<br><br>';
            if (r.peg < 1.0) {
                advHtml += '<strong>PEG ' + r.peg.toFixed(2) + ' (under 1.0):</strong> P/E is low relative to growth — Peter Lynch criterion suggests potential value. Verify growth assumption is sustainable.';
            } else if (r.peg <= 2.0) {
                advHtml += '<strong>PEG ' + r.peg.toFixed(2) + ' (1.0-2.0):</strong> P/E is fairly priced for the growth rate. Standard valuation zone.';
            } else {
                advHtml += '<strong>PEG ' + r.peg.toFixed(2) + ' (above 2.0):</strong> P/E is high relative to growth — premium pricing requires exceptional moat or accelerating growth to justify.';
            }
        }

        // Forward P/E commentary
        if (r.peFwd !== null) {
            const fwdGap = ((r.pe - r.peFwd) / r.pe) * 100;
            advHtml += '<br><br><strong>Forward P/E ' + r.peFwd.toFixed(2) + 'x</strong> ';
            if (fwdGap > 10) {
                advHtml += '(' + fwdGap.toFixed(0) + '% lower than trailing) — analysts expect strong earnings growth.';
            } else if (fwdGap < -10) {
                advHtml += '(higher than trailing) — analysts expect earnings decline; verify reasons.';
            } else {
                advHtml += '(broadly similar to trailing) — flat earnings expected.';
            }
        }

        advisory.innerHTML = advHtml;

        // Basis
        let basis = '';
        if (r.mode === 'pershare') {
            basis = '<strong>P/E</strong> = ₹' + r.price.toFixed(2) + ' (Price) ÷ ₹' + r.eps.toFixed(2) + ' (EPS) = <strong>' + r.pe.toFixed(2) + 'x</strong>. ';
        } else {
            basis = '<strong>P/E</strong> = ' + fmtINR(r.mcap) + ' (Market Cap) ÷ ' + fmtINR(r.ni) + ' (Net Income) = <strong>' + r.pe.toFixed(2) + 'x</strong>. ';
        }
        basis += '<br><strong>Earnings Yield</strong> = 1 ÷ ' + r.pe.toFixed(2) + ' = <strong>' + r.earningsYield.toFixed(2) + '%</strong>. ';
        if (r.peFwd !== null) {
            basis += '<br><strong>Forward P/E</strong> = <strong>' + r.peFwd.toFixed(2) + 'x</strong>. ';
        }
        if (r.peg !== null) {
            basis += '<br><strong>PEG</strong> = ' + r.pe.toFixed(2) + ' ÷ ' + r.growth + '% = <strong>' + r.peg.toFixed(2) + '</strong>. ';
        }
        if (r.bench) {
            basis += '<br><br><em>Industry benchmark:</em> ' + r.bench.label + ' typical P/E ' + r.bench.range + ' (median ' + r.bench.pe + 'x).';
        }
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        ['ps_price', 'ps_eps', 'ps_eps_fwd', 'ps_growth', 'ag_mcap', 'ag_ni', 'ag_ni_fwd', 'ag_growth'].forEach(function(id) {
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
