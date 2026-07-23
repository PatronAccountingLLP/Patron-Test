@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Debt to Equity Ratio Calculator | D/E & Benchmarks</title>
    <meta name="description" content="Debt to equity ratio calculator: compute D/E per Schedule III & ICAI norms, with industry benchmarks and lease liability treatment. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/debt-to-equity-calculator/">
    <meta property="og:title" content="Debt to Equity Ratio Calculator — Schedule III FY 2025-26">
    <meta property="og:description" content="Compute D/E ratio per Schedule III & ICAI Guidance Note. Industry benchmarks, lease liability treatment under Ind AS 116, sample disclosure format. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/debt-to-equity-calculator">
    <meta property="og:image" content="/tools/og/debt-to-equity-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Debt to Equity Ratio Calculator — Schedule III FY 2025-26">
    <meta name="twitter:description" content="D/E ratio with industry benchmarks, lease liability treatment, Schedule III disclosure format. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/debt-to-equity-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Debt to Equity Ratio Calculator",
      "description": "Debt to Equity Ratio Calculator computes the D/E ratio of an Indian company per Schedule III to the Companies Act, 2013 and the ICAI Guidance Note on Schedule III. The tool accepts long-term borrowings, current maturities of long-term debt, short-term borrowings, lease liabilities under Ind AS 116, equity share capital and other equity (reserves and surplus). Output includes the headline D/E ratio, total debt and total equity figures, separate long-term and short-term D/E breakdowns, debt-mix composition, color-coded leverage verdict against six industry benchmarks (manufacturing, services, IT, real estate, NBFC, trading), year-over-year variance flagged against the 25% Schedule III explanation threshold, sample Schedule III disclosure format with numerator and denominator definitions, and SEBI LODR Regulation 34(3) MDA disclosure guidance for listed entities.",
      "url": "/tools/debt-to-equity-calculator",
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
      "provider": {"@id": "/#organization"}
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "Debt to Equity Ratio Calculator", "item": "/tools/debt-to-equity-calculator"}
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
          "name": "What is the Debt to Equity (D/E) ratio and what does it measure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Debt to Equity ratio is a leverage indicator that compares a company's total borrowings to its shareholders' equity. It measures how much of the asset base is financed by lenders versus owners. A D/E of 1.0 means equal funding from each source, while a higher value signals greater reliance on debt and higher financial risk. Banks, investors and rating agencies use this ratio to gauge solvency, repayment capacity and capital structure prudence."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for Debt to Equity ratio under Schedule III in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per the ICAI Guidance Note on Schedule III to the Companies Act, 2013, Debt-Equity Ratio = Total Debt divided by Shareholder's Equity. Total Debt comprises long-term borrowings, current maturities of long-term debt and short-term borrowings. Shareholder's Equity is equity share capital plus other equity (reserves, retained earnings, securities premium). Lease liabilities under Ind AS 116 are typically included in total debt as per ICAI views and EY benchmarking."
          }
        },
        {
          "@type": "Question",
          "name": "Is disclosure of D/E ratio mandatory in Indian financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Pursuant to MCA notification dated 24 March 2021 amending Schedule III, every company covered under Division I, II and III must disclose eleven analytical ratios including the Debt-Equity Ratio in the notes to financial statements from FY 2021-22 onwards. The company must explain the items used in numerator and denominator, and provide a written explanation if the ratio changes by more than 25% compared to the previous year."
          }
        },
        {
          "@type": "Question",
          "name": "What is considered a good Debt to Equity ratio in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no single ideal D/E ratio because it varies sharply by industry. Asset-light service and IT companies typically operate below 0.5, manufacturing firms range 0.5 to 1.5, real estate and infrastructure companies often run 1.5 to 3.0, while NBFCs may exceed 5.0 because lending is their core business. As a general thumb-rule for non-financial Indian companies, a ratio under 1.0 is considered conservative and lender-friendly, while above 2.0 is treated as aggressive."
          }
        },
        {
          "@type": "Question",
          "name": "Should lease liabilities under Ind AS 116 be included in the D/E ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ICAI's Guidance Note and EY's reporting insights confirm that lease liabilities recognised under Ind AS 116 should be included in total debt for the Schedule III D/E ratio, since they represent contractual financial obligations with interest and principal components. Excluding them understates leverage. This treatment matters most for companies with significant operating leases such as retail chains, airlines, telecom and logistics, where post-Ind AS 116 D/E often jumps materially."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to explain a change in my D/E ratio of more than 25%?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Schedule III amended via MCA notification G.S.R. 207(E) dated 24 March 2021 mandates that any change in the prescribed ratios by more than 25% compared to the preceding year must be accompanied by a narrative explanation in the notes to accounts. Auditors verify this explanation as part of statutory audit. Common explanations include fresh debt for capex, debt repayment from IPO proceeds, equity infusion or large dividend payouts that affect retained earnings."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Debt to Equity and Debt Service Coverage Ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Debt to Equity is a balance sheet ratio measuring the proportion of debt versus equity in capital structure. Debt Service Coverage Ratio (DSCR) is a profit-and-loss based ratio measuring whether operating earnings can cover interest plus principal repayments due in the year. A company can have moderate D/E but poor DSCR if profitability is weak, or high D/E but adequate DSCR if cash flows are strong. Both ratios are mandatory under Schedule III and must be read together."
          }
        },
        {
          "@type": "Question",
          "name": "How is the D/E ratio calculated for NBFCs and banks?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For NBFCs governed by RBI Master Directions and listed under Division III of Schedule III, the standard D/E ratio is replaced or supplemented by Capital to Risk-weighted Assets Ratio (CRAR), Tier I CRAR, Tier II CRAR and Liquidity Coverage Ratio. Banks are governed by Basel III norms requiring minimum capital adequacy of 9% (plus capital conservation buffer of 2.5%). For internal benchmarking, NBFC D/E ratios of 4 to 7 are common because borrowing is the core funding source."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between long-term D/E and total D/E?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total Debt to Equity uses both short-term and long-term borrowings in the numerator. Long-term Debt to Equity considers only borrowings with maturity beyond 12 months, excluding working capital facilities, cash credit and overdrafts. Long-term D/E is a stricter solvency indicator favoured by term lenders and rating agencies, while total D/E gives a fuller picture of overall leverage including operating finance. Schedule III requires the total D/E format."
          }
        },
        {
          "@type": "Question",
          "name": "Are listed companies required to disclose D/E ratio separately under SEBI rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under SEBI (LODR) Regulations 2015, Regulation 34(3) read with Schedule V, listed equity entities must disclose key financial ratios including Debt-Equity in the Management Discussion and Analysis section of the annual report, with explanations for significant changes. This is in addition to the Schedule III note disclosure. Listed debt entities follow Regulation 52 disclosure norms. The two disclosures must be reconcilable to maintain consistency across the annual report."
          }
        },
        {
          "@type": "Question",
          "name": "Does a higher D/E ratio always mean a riskier company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not necessarily. A higher D/E in a capital-intensive industry like power, telecom, real estate or shipping is normal and often value-accretive because debt is cheaper than equity and offers a tax shield on interest. The risk emerges when the D/E exceeds peer benchmarks, when cash flows are insufficient to service debt (low DSCR), when interest rates rise sharply, or when borrowings carry restrictive covenants. Always read D/E with DSCR, interest coverage and industry context."
          }
        },
        {
          "@type": "Question",
          "name": "Can D/E ratio be negative? What does that mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A negative D/E ratio occurs when shareholders' equity is negative, meaning accumulated losses and reserve drawdowns have eroded the equity base below zero. This is a serious red flag indicating insolvency risk and triggers IBC scrutiny under the Companies Act if net worth is fully eroded. The ratio loses arithmetic meaning here and the company should focus on equity infusion, debt restructuring or one-time settlement with lenders before computing the ratio in future periods."
          }
        },
        {
          "@type": "Question",
          "name": "Where on the balance sheet do I find debt and equity figures for the formula?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS Schedule III Division II, equity is reported under Equity Share Capital and Other Equity on the face of the balance sheet. Long-term borrowings sit under Non-Current Financial Liabilities; lease liabilities are now disclosed separately. Short-term borrowings appear under Current Financial Liabilities, and current maturities of long-term debt are disclosed as a sub-line under current borrowings. Auditors typically agree these figures with note schedules during statutory audit."
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
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .verdict-card.amber { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .verdict-card.red { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); }
        .verdict-card.blue { border-left-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-top: 14px; }
        @media (max-width: 500px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
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
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .gauge-wrap { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .gauge-track { position: relative; height: 28px; background: linear-gradient(to right, #DCE8F5 0%, #DCE8F5 25%, #FEF3C7 25%, #FEF3C7 50%, #FED7AA 50%, #FED7AA 75%, #FEE2E2 75%, #FEE2E2 100%); border-radius: 14px; overflow: visible; margin-bottom: 8px; }
        .gauge-marker { position: absolute; top: -6px; bottom: -6px; width: 4px; background: var(--primary-dark); border-radius: 2px; transform: translateX(-50%); transition: left 0.4s ease; box-shadow: 0 0 0 3px rgba(255,255,255,0.9); }
        .gauge-marker::after { content: ''; position: absolute; top: -6px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid var(--primary-dark); }
        .gauge-labels { display: flex; justify-content: space-between; font-size: 10px; color: var(--text-muted); font-family: var(--font-mono); margin-top: 4px; }

        .disclosure-block { background: var(--primary-dark); color: #E8EEF5; padding: 20px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.7; margin: 14px 0; overflow-x: auto; }
        .disclosure-block .dl-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 8px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .disclosure-block table { width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 8px; }
        .disclosure-block th, .disclosure-block td { padding: 8px 6px; text-align: left; border-bottom: 1px solid rgba(224,242,241,0.2); }
        .disclosure-block th { color: var(--accent-light); font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .disclosure-block td.num { text-align: right; }
        @media (max-width: 600px) {
            .disclosure-block { font-size: 11px; padding: 14px 16px; }
            .disclosure-block table { font-size: 10px; }
        }

        .body-cta { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 32px 0; }
        .body-cta h3 { color: #fff; font-size: 20px; margin-bottom: 8px; }
        .body-cta p { color: rgba(255,255,255,0.88); margin-bottom: 16px; font-size: 15px; }
        .body-cta .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .body-cta .cta-btn:hover { background: var(--accent-light); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 14px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
        .content-section li strong { color: var(--primary-dark); }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }

        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        @media (max-width: 600px) { .rate-table { font-size: 12px; } .rate-table thead th, .rate-table tbody td { padding: 8px 10px; } }

        .formula-box { background: var(--primary-dark); color: #fff; border-radius: var(--radius); padding: 20px 24px; margin: 16px 0; font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto; }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
        .faq-item.open .faq-answer { max-height: 800px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .body-cta { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
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
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">Formula</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#benchmarks">Industry Benchmarks</a>
        <a href="#interpretation">Interpretation</a>
        <a href="#variants">Variants</a>
        <a href="#listed-disclosure">Listed Disclosure</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Debt to Equity Ratio Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Debt to Equity Ratio Calculator — <span>Schedule III & ICAI</span> Compliant for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Debt%20to%20Equity%20Ratio%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Debt to Equity Ratio Calculator computes the D/E ratio of an Indian company exactly as required by the <strong>ICAI Guidance Note on Schedule III</strong> and the MCA notification dated 24 March 2021 — using long-term borrowings, current maturities, short-term borrowings, lease liabilities under Ind AS 116, equity share capital and other equity. It produces the headline ratio, separate long-term and short-term breakdowns, color-coded leverage verdict against six industry benchmarks, year-over-year variance flag against the 25% Schedule III explanation threshold, and a sample disclosure format ready for the notes to accounts.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Debt to Equity Ratio</h2>
            <p class="calc-intro">Enter figures from your audited balance sheet. All amounts in ₹ rupees. Lease liabilities under Ind AS 116 are kept separate so you can see the impact of including or excluding them.</p>
            <noscript>
                <div class="noscript-box">
                    This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below to compute manually.
                </div>
            </noscript>

            <div class="calc-section-title">Borrowings — Numerator</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ltBorrowings">Long-Term Borrowings (₹)</label>
                    <input type="text" id="ltBorrowings" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Term loans, NCDs, debentures, ECBs &gt; 12 months. Excludes current maturities.</span>
                </div>
                <div class="form-group">
                    <label for="currentMaturities">Current Maturities of LT Debt (₹)</label>
                    <input type="text" id="currentMaturities" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Portion of long-term debt due within 12 months. Found in current liabilities.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="stBorrowings">Short-Term Borrowings (₹)</label>
                    <input type="text" id="stBorrowings" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash credit, working capital, OD, bill discounting, ST loans (&lt; 12 months).</span>
                </div>
                <div class="form-group">
                    <label for="leaseLiabilities">Lease Liabilities — Ind AS 116 (₹)</label>
                    <input type="text" id="leaseLiabilities" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total of current + non-current lease liabilities recognised under Ind AS 116.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Treat Lease Liabilities As Debt?</label>
                <div class="toggle-group" id="leaseTreatment" role="tablist" aria-label="Lease liability treatment">
                    <button type="button" class="toggle-btn active" data-value="include" role="tab" aria-selected="true">Include in Debt <small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">ICAI & EY view</small></button>
                    <button type="button" class="toggle-btn" data-value="exclude" role="tab" aria-selected="false">Exclude from Debt <small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">Pre Ind AS 116 / banking covenant</small></button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">ICAI Guidance Note treats Ind AS 116 lease liabilities as debt-like obligations. Some loan covenants exclude them.</span>
            </div>

            <div class="calc-section-title">Equity — Denominator</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="equityShareCapital">Equity Share Capital (₹)</label>
                    <input type="text" id="equityShareCapital" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Paid-up equity share capital. Excludes preference shares classified as financial liability.</span>
                </div>
                <div class="form-group">
                    <label for="otherEquity">Other Equity (₹)</label>
                    <input type="text" id="otherEquity" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Retained earnings + reserves + securities premium + OCI. Can be negative if accumulated losses.</span>
                </div>
            </div>

            <div class="calc-section-title">Context — Optional</div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Industry Sector</label>
                <div class="toggle-group" id="industryGroup" role="tablist" aria-label="Industry sector">
                    <button type="button" class="toggle-btn active" data-value="manufacturing" role="tab" aria-selected="true">Manufacturing</button>
                    <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services</button>
                    <button type="button" class="toggle-btn" data-value="it" role="tab" aria-selected="false">IT / Tech</button>
                    <button type="button" class="toggle-btn" data-value="realestate" role="tab" aria-selected="false">Real Estate / Infra</button>
                    <button type="button" class="toggle-btn" data-value="nbfc" role="tab" aria-selected="false">NBFC / Lender</button>
                    <button type="button" class="toggle-btn" data-value="trading" role="tab" aria-selected="false">Trading</button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Used for industry benchmark comparison. NBFC ratios follow RBI norms (CRAR) — internal benchmarking only.</span>
            </div>

            <div class="form-group" style="margin-bottom: 8px;">
                <label for="prevYearDE">Previous Year D/E Ratio (Optional)</label>
                <input type="text" id="prevYearDE" min="0" step="0.01" placeholder="0.00" inputmode="decimal" autocomplete="off">
                <span class="helper">Enter last year's ratio to flag the 25% Schedule III variance threshold.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate D/E Ratio</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Debt-Equity Ratio</div>
                    <div class="verdict-headline" id="verdictHeadline">D/E = 0.00</div>
                    <div class="verdict-sub" id="verdictSub">Verdict</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Total Debt</div>
                            <div class="verdict-grid-value" id="totalDebtVal">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Total Equity</div>
                            <div class="verdict-grid-value" id="totalEquityVal">₹0</div>
                        </div>
                    </div>
                </div>

                <div class="gauge-wrap">
                    <div class="basis-label" style="margin-bottom: 12px;">Leverage Gauge — Where Does Your D/E Sit?</div>
                    <div class="gauge-track"><div class="gauge-marker" id="gaugeMarker" style="left: 0%;"></div></div>
                    <div class="gauge-labels">
                        <span>0.0 (None)</span>
                        <span>1.0 (Conservative)</span>
                        <span>2.0 (Moderate)</span>
                        <span>3.0 (High)</span>
                        <span>4.0+ (Aggressive)</span>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="benchmarkBanner"></div>
                <div class="info-banner" id="varianceBanner" style="display:none;"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis (per ICAI Schedule III Guidance)</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div class="basis-label" style="margin: 24px 0 8px;">Schedule III Sample Disclosure Format</div>
                <div class="disclosure-block" id="disclosureBlock">
                    <span class="dl-label">Note X — Analytical Ratios (extract)</span>
                    <table>
                        <thead>
                            <tr><th>Ratio</th><th>Numerator</th><th>Denominator</th><th>Current Year</th><th>Previous Year</th><th>% Variance</th></tr>
                        </thead>
                        <tbody id="disclosureRows"></tbody>
                    </table>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Debt to Equity Ratio Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Debt%20to%20Equity%20Ratio%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Debt%20to%20Equity%20Ratio%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>


        <section class="content-section" id="how-to-use">
            <h2>How to Use This Debt to Equity Ratio Calculator</h2>
            <p>The calculator follows the formula prescribed in the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> notification dated 24 March 2021, read with the ICAI Guidance Note on Schedule III to the Companies Act, 2013. To get an accurate result, you need a clean break-up of your borrowings and equity figures from the audited balance sheet. Here is the step-by-step approach.</p>

            <h3>Step 1 — Gather Your Balance Sheet Numbers</h3>
            <p>Open your latest signed balance sheet and locate four borrowing line items and two equity line items. Under Ind AS Schedule III Division II, these typically appear as: Long-term Borrowings (under Non-current Financial Liabilities), Lease Liabilities (separately disclosed post-Ind AS 116), Short-term Borrowings (under Current Financial Liabilities), and Current Maturities of Long-term Debt (a sub-line of current borrowings). On the equity side, you need Equity Share Capital and Other Equity from the face of the balance sheet.</p>

            <h3>Step 2 — Decide on Lease Liability Treatment</h3>
            <p>This is the most important judgement call. The ICAI Guidance Note and major audit firms support including Ind AS 116 lease liabilities in total debt because they are contractual financial obligations carrying interest and principal repayment. However, if your loan agreement carries a covenant defined on pre-Ind AS 116 borrowings only — common in NBFC and bank facility documents — you may want to compute the ratio both ways. The toggle in the calculator lets you switch between the two views without re-entering data.</p>

            <h3>Step 3 — Pick Your Industry for Benchmarking</h3>
            <p>D/E ratios are not directly comparable across sectors. A real estate developer with a D/E of 2.5 may be in line with peers, while a software services firm with the same ratio is in distress territory. Select the industry that matches your principal line of business. The calculator overlays your ratio against the typical Indian peer band for that sector.</p>

            <h3>Step 4 — Read the Verdict and Variance Flag</h3>
            <p>The output shows your headline D/E ratio, total debt, total equity, separate long-term and short-term D/E breakdowns, and a colour-coded verdict — green for conservative, amber for moderate, red for aggressive. If you enter the previous year ratio, the calculator computes the year-over-year variance and flags when it exceeds the 25% Schedule III explanation threshold, which mandates a written explanation in the notes to accounts.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>Debt to Equity Ratio Formula — ICAI Schedule III Method</h2>
            <p>The formula is mathematically simple. The complexity lies in correctly identifying what goes into the numerator and what stays out. The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> Guidance Note clarifies the components, removing ambiguity that existed in pre-2021 practice.</p>

            <div class="formula-box">
<span class="label">Debt-Equity Ratio</span> = Total Debt &divide; Shareholder's Equity<br>
<br>
<span class="label">Where Total Debt</span> = Long-term Borrowings + Current Maturities of LT Debt + Short-term Borrowings + Lease Liabilities (Ind AS 116)<br>
<br>
<span class="label">And Shareholder's Equity</span> = Equity Share Capital + Other Equity
            </div>

            <h3>What Goes into Total Debt (Numerator)</h3>
            <p>Per the ICAI Guidance Note Annexure on Schedule III, total debt for the D/E ratio includes all interest-bearing financial obligations — both short-term and long-term, secured and unsecured. This covers term loans from banks and financial institutions, non-convertible debentures (NCDs), bonds, external commercial borrowings (ECBs), public deposits, working capital loans, cash credit, overdrafts, bills discounted, and post-Ind AS 116, lease liabilities. Trade payables, accrued expenses and provisions are NOT debt. Statutory dues and tax liabilities are NOT debt.</p>

            <h3>What Goes into Shareholder's Equity (Denominator)</h3>
            <p>Shareholder's equity is the equity attributable to ordinary shareholders. It comprises paid-up equity share capital and other equity. Other equity is the umbrella head under Ind AS Schedule III Division II for retained earnings, general reserve, securities premium, capital reserve, capital redemption reserve, debenture redemption reserve, share-based payment reserve and other comprehensive income items. Preference shares are excluded if classified as financial liability under Ind AS 32. Non-controlling interest is excluded for parent-company D/E.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Some lenders define a "Tangible Net Worth" version of D/E that subtracts intangible assets and revaluation reserves from the denominator. Always check the loan agreement covenant definition before reporting D/E to the bank — the contractual ratio may differ from the Schedule III ratio in your audited financials.</p>
            </div>

            <h3>Worked Example with Numbers</h3>
            <p>Consider a mid-sized Indian manufacturing company with the following balance sheet extract (₹ in lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Item</th><th>Amount (₹ Lakhs)</th><th>Component</th></tr></thead>
                <tbody>
                    <tr><td>Long-term borrowings (term loan)</td><td>3,500</td><td>Numerator</td></tr>
                    <tr><td>Current maturities of LT debt</td><td>500</td><td>Numerator</td></tr>
                    <tr><td>Short-term borrowings (CC + WCDL)</td><td>1,200</td><td>Numerator</td></tr>
                    <tr><td>Lease liability — Ind AS 116</td><td>800</td><td>Numerator (ICAI view)</td></tr>
                    <tr><td>Equity share capital</td><td>1,000</td><td>Denominator</td></tr>
                    <tr><td>Other equity (reserves & surplus)</td><td>3,500</td><td>Denominator</td></tr>
                    <tr><td><strong>Total Debt</strong></td><td><strong>6,000</strong></td><td>Sum of borrowings</td></tr>
                    <tr><td><strong>Total Equity</strong></td><td><strong>4,500</strong></td><td>Sum of equity</td></tr>
                    <tr><td><strong>D/E Ratio</strong></td><td><strong>1.33</strong></td><td>6,000 ÷ 4,500</td></tr>
                </tbody>
            </table>
            <p>For a manufacturing company, a D/E of 1.33 sits in the moderate band — typical of capital-intensive industries with healthy accruals. Without lease liabilities, the same company would report 1.16 — illustrating why the Ind AS 116 treatment decision matters.</p>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III Disclosure — Mandatory Since FY 2021-22</h2>
            <p>The <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> Schedule III was amended via MCA notification G.S.R. 207(E) dated 24 March 2021, effective from FY 2021-22. The amendment introduced eleven mandatory analytical ratios to be disclosed in the notes to accounts of every company falling under Division I, Division II and Division III of Schedule III. The Debt-Equity Ratio is among the eleven, alongside Current Ratio, Debt Service Coverage Ratio, Return on Equity, inventory and receivables turnover ratios, net profit ratio, return on capital employed and return on investment.</p>

            <h3>The Eleven Mandatory Ratios at a Glance</h3>
            <table class="rate-table">
                <thead><tr><th>Sl. No.</th><th>Ratio</th><th>Type</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Current Ratio</td><td>Liquidity</td></tr>
                    <tr><td>2</td><td><strong>Debt-Equity Ratio</strong></td><td>Solvency / Leverage</td></tr>
                    <tr><td>3</td><td>Debt Service Coverage Ratio</td><td>Solvency / Coverage</td></tr>
                    <tr><td>4</td><td>Return on Equity Ratio</td><td>Profitability</td></tr>
                    <tr><td>5</td><td>Inventory Turnover Ratio</td><td>Efficiency</td></tr>
                    <tr><td>6</td><td>Trade Receivables Turnover Ratio</td><td>Efficiency</td></tr>
                    <tr><td>7</td><td>Trade Payables Turnover Ratio</td><td>Efficiency</td></tr>
                    <tr><td>8</td><td>Net Capital Turnover Ratio</td><td>Efficiency</td></tr>
                    <tr><td>9</td><td>Net Profit Ratio</td><td>Profitability</td></tr>
                    <tr><td>10</td><td>Return on Capital Employed</td><td>Profitability / Capital</td></tr>
                    <tr><td>11</td><td>Return on Investment</td><td>Profitability / Capital</td></tr>
                </tbody>
            </table>

            <h3>The 25% Variance Explanation Rule</h3>
            <p>If any of the eleven ratios changes by more than 25% compared to the preceding year, the company must provide a written explanation for the variance in the notes to accounts. This is a hard auditor checkpoint — statutory auditors verify both the computation and the management explanation. The most common explanations for D/E variance are: (a) fresh long-term debt drawn for capex projects, (b) repayment of debt from IPO or rights issue proceeds, (c) bonus issue or right issue altering equity, (d) accumulated losses eroding other equity, and (e) Ind AS 116 transition impact when first applied.</p>

            <div class="callout warn">
                <p><strong>Note:</strong> The 25% variance is computed on the ratio itself, not on the absolute debt or equity. A D/E moving from 1.0 to 1.30 is a 30% change requiring explanation, even though the underlying debt or equity may have moved less. Auditors expect the explanation to reconcile to balance sheet movements.</p>
            </div>

            <h3>Format of Disclosure</h3>
            <p>The ICAI Guidance Note recommends a tabular format with five columns: Ratio Name, Numerator, Denominator, Current Period, Previous Period, % Variance, Reason for Variance (if &gt;25%). The numerator and denominator must be defined in the note narrative or in a footnote — there is no prescribed master definition, leaving room for entity-specific judgements like the lease liability treatment described above. Listed entities should ensure consistency between this Schedule III disclosure and the MDA disclosure under SEBI LODR Regulation 34(3).</p>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for D/E Ratio in India</h2>
            <p>A debt-equity ratio is meaningful only when read against an industry benchmark. Capital-intensive industries operate at structurally higher D/E because debt is the rational way to fund long-gestation assets, while service and technology businesses run lean because their assets are intangible and equity-funded. The bands below reflect typical Indian listed peer ranges; private-company benchmarks may differ based on lender comfort.</p>

            <table class="rate-table">
                <thead><tr><th>Industry</th><th>Typical D/E Band</th><th>Why</th></tr></thead>
                <tbody>
                    <tr><td><strong>IT / Software / Tech</strong></td><td>0.0 – 0.5</td><td>Asset-light, cash-rich, equity-funded growth. Many tier-1 IT firms run zero-debt.</td></tr>
                    <tr><td><strong>Services / Professional</strong></td><td>0.2 – 0.8</td><td>Working capital led, modest term debt for offices and equipment.</td></tr>
                    <tr><td><strong>Trading / FMCG Distribution</strong></td><td>0.5 – 1.5</td><td>Inventory and receivables financing dominates; CC limits drive ST debt.</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>0.5 – 1.5</td><td>Plant & machinery debt + working capital; depends on capex cycle.</td></tr>
                    <tr><td><strong>Real Estate / Infra</strong></td><td>1.0 – 3.0</td><td>Long-gestation projects; project-finance debt structures.</td></tr>
                    <tr><td><strong>NBFC / Lender</strong></td><td>3.0 – 8.0</td><td>Borrowing IS the business model. Use CRAR per RBI Master Directions instead.</td></tr>
                    <tr><td><strong>Banks (Scheduled)</strong></td><td>10.0+</td><td>Use Basel III CRAR (min 9% + 2.5% buffer). D/E is not the primary gauge.</td></tr>
                </tbody>
            </table>

            <p>For NBFCs, the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> Master Directions on NBFC-ND-SI replace the simple D/E ratio with Capital to Risk-weighted Assets Ratio (CRAR), Tier I CRAR and Tier II CRAR, which are disclosed under Division III of Schedule III. The standard D/E ratio still has internal management value but is not the regulatory benchmark for these entities.</p>
        </section>

        <section class="content-section" id="interpretation">
            <h2>How to Interpret Your D/E Ratio</h2>
            <p>The ratio is a single number that conceals a lot of nuance. The bands below are general thumb-rules for non-financial Indian companies; always read alongside DSCR, interest coverage, and industry context.</p>

            <h3>D/E Below 0.5 — Low Leverage / Possibly Under-utilised</h3>
            <p>The company is funded predominantly by equity. Lenders love this profile and rating agencies typically reward it with strong credit ratings. However, an extremely low D/E may indicate that the company is leaving the tax-shield benefit of debt unused, missing growth capex opportunities, or sitting on idle cash that depresses return on equity. Ask whether the equity base is being deployed efficiently.</p>

            <h3>D/E Between 0.5 and 1.0 — Conservative / Balanced</h3>
            <p>This is the sweet spot for most non-cyclical industries. The company has used debt to amplify equity returns without taking on serviceability stress. Banks comfortably extend incremental credit at this level. Maintain DSCR above 1.5 and interest coverage above 3.0 to consolidate the position.</p>

            <h3>D/E Between 1.0 and 2.0 — Moderate Leverage</h3>
            <p>Healthy for capital-intensive industries; raises eyebrows for asset-light businesses. Watch the trend — a rising D/E in this band over consecutive years signals debt-financed growth that needs supporting earnings momentum. Lenders will start asking for stronger collateral, additional covenants and possibly promoter guarantees.</p>

            <h3>D/E Between 2.0 and 3.0 — High Leverage</h3>
            <p>Capital structure is materially debt-heavy. Equity holders are taking the residual risk on a thin cushion. Interest cost begins to dominate the P&L; any drop in operating margin or revenue can trigger covenant breach. Restructuring advisors typically engage with promoters at this level to plan equity infusion or asset monetisation.</p>

            <h3>D/E Above 3.0 — Aggressive / Stressed (Outside NBFC / Real Estate)</h3>
            <p>Outside regulated lenders and infrastructure project SPVs, this level signals balance sheet stress. Watch for early warning signals: SMA classification by the bank, negative variances in DSCR, declining current ratio, qualification by the auditor on going concern. Engagement with a CA-led restructuring team becomes urgent. <a href="https://ibbi.gov.in/" target="_blank" rel="noopener">IBBI</a> data shows the majority of corporate insolvency cases under IBC have D/E ratios in this band twelve to twenty-four months prior to admission.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Read D/E with three other ratios for a complete leverage view — Interest Coverage Ratio (EBIT ÷ Interest), Debt Service Coverage Ratio (operating cash ÷ debt servicing), and Long-term D/E (excluding short-term borrowings). A high D/E with strong DSCR is materially less risky than a moderate D/E with weak DSCR.</p>
            </div>
        </section>


        <div class="body-cta">
            <h3>Need Help with Schedule III Disclosure or Audit Defence?</h3>
            <p>Patron Accounting LLP supports CFO offices with Schedule III ratio disclosure preparation, Ind AS 116 lease liability impact assessment, audit working papers, lender covenant compliance and statutory audit defence — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Debt%20to%20Equity%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="variants">
            <h2>D/E Variants and Related Leverage Ratios</h2>
            <p>The Schedule III D/E is one specific definition — useful for statutory disclosure. In real-world financial analysis, several closely related ratios serve different purposes. Each gives a slightly different angle on the same underlying capital structure question.</p>

            <h3>Long-Term Debt to Equity</h3>
            <p>Numerator includes only long-term borrowings (excluding current maturities and short-term debt). Used by term lenders and rating agencies to assess permanent capital structure. Strips out working capital noise and focuses on whether the equity base is sufficient for the long-term debt commitments.</p>

            <h3>Total Debt to Capital</h3>
            <p>Total Debt divided by (Total Debt + Total Equity), expressed as a percentage. Caps the maximum at 100% which makes cross-company comparison cleaner than the unbounded D/E. Widely used in M&A and equity research models. A debt-to-capital of 50% is equivalent to a D/E of 1.0.</p>

            <h3>Debt to EBITDA</h3>
            <p>Total Debt divided by trailing twelve-month EBITDA. Measures how many years of operating profit it would take to repay all debt at current run-rate. Lender covenants commonly cap this at 3.0 to 4.0 for mid-corporates. Unlike D/E, this ratio incorporates earnings power, not just balance sheet weight.</p>

            <h3>Debt Service Coverage Ratio (DSCR)</h3>
            <p>(Net Profit after Tax + Non-cash expenses + Interest) divided by (Interest + Principal Repayments). Per the ICAI Schedule III Guidance Note, DSCR is one of the eleven mandatory disclosure ratios and is the single most important serviceability test for term-loan lenders. A DSCR below 1.0 means operating earnings cannot cover scheduled debt servicing without external funding.</p>

            <h3>Interest Coverage Ratio</h3>
            <p>EBIT divided by Interest Expense. Measures the cushion available before interest payments become unaffordable. Below 1.5 is a warning sign. Below 1.0 means the company is bleeding even before depreciation and tax. Used by bond rating agencies as a primary metric for investment-grade classification.</p>

            <h3>Capital to Risk-weighted Assets Ratio (CRAR)</h3>
            <p>For NBFCs and banks under <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a> regulations and Basel III, CRAR replaces the simple D/E ratio. It is computed as (Tier I + Tier II Capital) divided by Risk-weighted Assets. Minimum CRAR for banks is 9% plus a 2.5% capital conservation buffer; for NBFCs the minimum is typically 15% under RBI Master Directions for systemically important NBFCs.</p>
        </section>

        <section class="content-section" id="listed-disclosure">
            <h2>SEBI LODR Disclosure for Listed Entities</h2>
            <p>Listed equity entities have a second D/E disclosure obligation beyond Schedule III. Under <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> (Listing Obligations and Disclosure Requirements) Regulations, 2015, Regulation 34(3) read with Schedule V Part B(1)(I), the Management Discussion and Analysis section of the annual report must include "Details of significant changes (i.e., change of 25% or more as compared to the immediately previous financial year) in key financial ratios, along with detailed explanations therefor." The seven ratios specifically covered include Debtors Turnover, Inventory Turnover, Interest Coverage, Current Ratio, Debt Equity, Operating Profit Margin and Net Profit Margin, plus Return on Net Worth.</p>

            <h3>How the Two Disclosures Connect</h3>
            <p>The Schedule III note disclosure and the MDA disclosure must be reconcilable. Best practice is to use identical numerator-denominator definitions in both places, with cross-references in the annual report. Listed companies typically prepare a master schedule of ratios at year-end with auditor sign-off, then use that schedule as the source for Schedule III notes, MDA, investor presentations and earnings call commentary. Inconsistencies between these documents draw stock exchange queries and analyst doubts.</p>

            <h3>Listed Debt Entities — Regulation 52</h3>
            <p>Entities with listed non-convertible debentures must additionally disclose D/E along with debt-equity ratio, debt service coverage ratio and asset cover ratio in half-yearly disclosures under SEBI LODR Regulation 52, certified by the statutory auditor or practising company secretary. The half-yearly cadence creates a tighter discipline than the annual Schedule III cycle and is closely watched by debenture trustees.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If your company is on the path to a public issue or listing, start tracking D/E and the other Schedule III ratios at quarterly intervals at least four quarters before the IPO. Trend analysis by SEBI and merchant bankers during DRHP review picks up unexplained ratio jumps quickly.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Debt to Equity Ratio</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the Debt to Equity (D/E) ratio and what does it measure?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Debt to Equity ratio is a leverage indicator that compares a company's total borrowings to its shareholders' equity. It measures how much of the asset base is financed by lenders versus owners. A D/E of 1.0 means equal funding from each source, while a higher value signals greater reliance on debt and higher financial risk. Banks, investors and rating agencies use this ratio to gauge solvency, repayment capacity and capital structure prudence.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the formula for Debt to Equity ratio under Schedule III in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Per the ICAI Guidance Note on Schedule III to the Companies Act, 2013, Debt-Equity Ratio = Total Debt divided by Shareholder's Equity. Total Debt comprises long-term borrowings, current maturities of long-term debt and short-term borrowings. Shareholder's Equity is equity share capital plus other equity (reserves, retained earnings, securities premium). Lease liabilities under Ind AS 116 are typically included in total debt as per ICAI views and EY benchmarking studies of FY 2022-23 disclosures.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is disclosure of D/E ratio mandatory in Indian financial statements?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Pursuant to MCA notification dated 24 March 2021 amending Schedule III, every company covered under Division I, II and III must disclose eleven analytical ratios including the Debt-Equity Ratio in the notes to financial statements from FY 2021-22 onwards. The company must explain the items used in numerator and denominator, and provide a written explanation if the ratio changes by more than 25% compared to the previous year. Auditors verify both the computation and the explanation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is considered a good Debt to Equity ratio in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">There is no single ideal D/E ratio because it varies sharply by industry. Asset-light service and IT companies typically operate below 0.5, manufacturing firms range 0.5 to 1.5, real estate and infrastructure companies often run 1.5 to 3.0, while NBFCs may exceed 5.0 because lending is their core business. As a general thumb-rule for non-financial Indian companies, a ratio under 1.0 is considered conservative and lender-friendly, while above 2.0 is treated as aggressive and may attract restrictive loan covenants.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should lease liabilities under Ind AS 116 be included in the D/E ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">ICAI's Guidance Note and EY's reporting insights confirm that lease liabilities recognised under Ind AS 116 should be included in total debt for the Schedule III D/E ratio, since they represent contractual financial obligations with interest and principal components. Excluding them understates leverage. This treatment matters most for companies with significant operating leases such as retail chains, airlines, telecom and logistics, where post-Ind AS 116 D/E often jumps materially compared to old Ind AS 17 numbers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Do I need to explain a change in my D/E ratio of more than 25%?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Schedule III amended via MCA notification G.S.R. 207(E) dated 24 March 2021 mandates that any change in the prescribed ratios by more than 25% compared to the preceding year must be accompanied by a narrative explanation in the notes to accounts. Auditors verify this explanation as part of statutory audit. Common explanations include fresh debt for capex, debt repayment from IPO proceeds, equity infusion, large dividend payouts that affect retained earnings, or first-time application of Ind AS 116.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between Debt to Equity and Debt Service Coverage Ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Debt to Equity is a balance sheet ratio measuring the proportion of debt versus equity in capital structure. Debt Service Coverage Ratio (DSCR) is a profit-and-loss based ratio measuring whether operating earnings can cover interest plus principal repayments due in the year. A company can have moderate D/E but poor DSCR if profitability is weak, or high D/E but adequate DSCR if cash flows are strong. Both ratios are mandatory under Schedule III and must be read together for a complete leverage view.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is the D/E ratio calculated for NBFCs and banks?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For NBFCs governed by RBI Master Directions and listed under Division III of Schedule III, the standard D/E ratio is replaced or supplemented by Capital to Risk-weighted Assets Ratio (CRAR), Tier I CRAR, Tier II CRAR and Liquidity Coverage Ratio. Banks are governed by Basel III norms requiring minimum capital adequacy of 9% plus a capital conservation buffer of 2.5%. For internal benchmarking, NBFC D/E ratios of 4 to 7 are common because borrowing is the core funding source, not a leverage choice.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between long-term D/E and total D/E?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Total Debt to Equity uses both short-term and long-term borrowings in the numerator. Long-term Debt to Equity considers only borrowings with maturity beyond 12 months, excluding working capital facilities, cash credit and overdrafts. Long-term D/E is a stricter solvency indicator favoured by term lenders and rating agencies, while total D/E gives a fuller picture of overall leverage including operating finance. Schedule III requires the total D/E format with all borrowings included.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are listed companies required to disclose D/E ratio separately under SEBI rules?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Under SEBI (LODR) Regulations 2015, Regulation 34(3) read with Schedule V, listed equity entities must disclose key financial ratios including Debt-Equity in the Management Discussion and Analysis section of the annual report, with explanations for significant changes (25% or more). This is in addition to the Schedule III note disclosure. Listed debt entities follow Regulation 52 disclosure norms with half-yearly cadence. The two disclosures must be reconcilable to maintain consistency across the annual report.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Does a higher D/E ratio always mean a riskier company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Not necessarily. A higher D/E in a capital-intensive industry like power, telecom, real estate or shipping is normal and often value-accretive because debt is cheaper than equity and offers a tax shield on interest. The risk emerges when the D/E exceeds peer benchmarks, when cash flows are insufficient to service debt (low DSCR), when interest rates rise sharply, or when borrowings carry restrictive covenants. Always read D/E alongside DSCR, interest coverage and industry context for a balanced view.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can D/E ratio be negative? What does that mean?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A negative D/E ratio occurs when shareholders' equity is negative, meaning accumulated losses and reserve drawdowns have eroded the equity base below zero. This is a serious red flag indicating insolvency risk and may trigger IBC scrutiny under the Companies Act if net worth is fully eroded. The ratio loses arithmetic meaning here and the company should focus on equity infusion, debt restructuring or one-time settlement with lenders before computing the ratio meaningfully in future periods.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Where on the balance sheet do I find debt and equity figures for the formula?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS Schedule III Division II, equity is reported under Equity Share Capital and Other Equity on the face of the balance sheet. Long-term borrowings sit under Non-Current Financial Liabilities; lease liabilities are now disclosed separately. Short-term borrowings appear under Current Financial Liabilities, and current maturities of long-term debt are disclosed as a sub-line under current borrowings. Auditors typically agree these figures with note schedules during statutory audit before signing off the disclosure.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need Schedule III Audit Sign-Off?</h3>
            <p>Get a CA-led Schedule III ratio review with disclosure-ready working papers, Ind AS 116 lease impact and lender covenant reconciliation — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Debt%20to%20Equity%20Ratio%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Debt%20to%20Equity%20Ratio%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting & Bookkeeping<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator<span class="arrow">→</span></a>
            <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Statement<span class="arrow">→</span></a>
            <a href="/tools/business-loan-emi-calculator" class="sidebar-link">Business Loan EMI<span class="arrow">→</span></a>
            <a href="/tools/break-even-calculator" class="sidebar-link">Break-Even Analysis<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements<span class="arrow">→</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/authorized-capital-vs-paid-up-capital-meaning-differences-and-share-capital-structure-explained" class="sidebar-link">Authorized vs Paid-Up Capital<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function() {
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    // ===== TOGGLE GROUP HELPERS =====
    function setupToggleGroup(id) {
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
        });
    }
    function getActive(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }
    setupToggleGroup('leaseTreatment');
    setupToggleGroup('industryGroup');

    // ===== FORMATTING =====
    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtRatio(n) {
        if (!isFinite(n)) return '∞';
        return n.toFixed(2);
    }
    function fmtPct(n) {
        if (!isFinite(n)) return '—';
        const sign = n > 0 ? '+' : '';
        return sign + n.toFixed(1) + '%';
    }
    function num(id) { return parseINR(document.getElementById(id).value) || 0; }

    // ===== INDUSTRY BENCHMARKS =====
    const benchmarks = {
        manufacturing: { low: 0.5, high: 1.5, label: 'Manufacturing', note: 'Indian manufacturing peers typically run D/E between 0.5 and 1.5, with capex-cycle peaks pushing the upper end.' },
        services: { low: 0.2, high: 0.8, label: 'Services / Professional', note: 'Indian service-sector peers typically run D/E between 0.2 and 0.8, mostly working-capital-led.' },
        it: { low: 0.0, high: 0.5, label: 'IT / Software / Tech', note: 'Indian IT majors typically run D/E between 0.0 and 0.5; tier-1 firms are often net-cash with zero borrowings.' },
        realestate: { low: 1.0, high: 3.0, label: 'Real Estate / Infra', note: 'Indian real estate and infra peers typically run D/E between 1.0 and 3.0 owing to long-gestation project finance.' },
        nbfc: { low: 3.0, high: 8.0, label: 'NBFC / Lender', note: 'NBFC D/E typically ranges 3.0 to 8.0. Use RBI CRAR (min 15%) for regulatory compliance — D/E is internal-only.' },
        trading: { low: 0.5, high: 1.5, label: 'Trading / Distribution', note: 'Indian trading and distribution peers typically run D/E between 0.5 and 1.5, dominated by inventory and receivables financing.' }
    };

    function readInputs() {
        return {
            lt: num('ltBorrowings'),
            cm: num('currentMaturities'),
            st: num('stBorrowings'),
            ll: num('leaseLiabilities'),
            inclLease: getActive('leaseTreatment') === 'include',
            esc: num('equityShareCapital'),
            oe: num('otherEquity'),
            industry: getActive('industryGroup') || 'manufacturing',
            prevDE: num('prevYearDE')
        };
    }

    function validate(inp) {
        const debt = inp.lt + inp.cm + inp.st + (inp.inclLease ? inp.ll : 0);
        if (debt <= 0) return 'Please enter at least one debt component (long-term, current maturities, short-term or lease liability).';
        const eq = inp.esc + inp.oe;
        if (eq === 0) return 'Total equity cannot be zero — please enter equity share capital and/or other equity.';
        if (inp.esc < 0) return 'Equity share capital cannot be negative.';
        return null;
    }

    function computeDE(inp) {
        const inclLeaseAmt = inp.inclLease ? inp.ll : 0;
        const totalDebt = inp.lt + inp.cm + inp.st + inclLeaseAmt;
        const totalEquity = inp.esc + inp.oe;
        const de = totalEquity !== 0 ? totalDebt / totalEquity : NaN;
        const ltDE = totalEquity !== 0 ? inp.lt / totalEquity : NaN;
        const stDE = totalEquity !== 0 ? (inp.cm + inp.st) / totalEquity : NaN;
        const ltDebtToTotalPct = totalDebt > 0 ? ((inp.lt + inp.cm + inclLeaseAmt) / totalDebt) * 100 : 0;
        const stDebtToTotalPct = totalDebt > 0 ? (inp.st / totalDebt) * 100 : 0;

        let yoyVar = null, exceeds25 = false;
        if (inp.prevDE > 0 && isFinite(de)) {
            yoyVar = ((de - inp.prevDE) / inp.prevDE) * 100;
            exceeds25 = Math.abs(yoyVar) > 25;
        }
        return { totalDebt, totalEquity, inclLeaseAmt, de, ltDE, stDE, ltDebtToTotalPct, stDebtToTotalPct, yoyVar, exceeds25 };
    }

    function getVerdict(de, totalEquity) {
        if (totalEquity < 0) return { headline: 'Negative Equity — Insolvency Risk', sub: 'Equity base is negative; ratio is not meaningful. Urgent capital infusion or restructuring needed.', cls: 'red' };
        if (!isFinite(de)) return { headline: 'Equity is zero', sub: 'Cannot compute meaningful D/E with zero equity.', cls: 'red' };
        if (de < 0.5) return { headline: 'Low Leverage — Conservative', sub: 'Funded predominantly by equity. Lender-friendly profile, but check if debt tax-shield is being under-utilised.', cls: 'blue' };
        if (de < 1.0) return { headline: 'Conservative / Balanced', sub: 'Healthy capital structure. Sweet spot for most non-cyclical industries.', cls: 'verdict' };
        if (de < 2.0) return { headline: 'Moderate Leverage', sub: 'Acceptable for capital-intensive industries; watch the trend and DSCR alongside.', cls: 'amber' };
        if (de < 3.0) return { headline: 'High Leverage', sub: 'Capital structure materially debt-heavy. Equity cushion is thin; covenant risk rising.', cls: 'amber' };
        return { headline: 'Aggressive / Stressed Leverage', sub: 'Outside NBFCs and project SPVs, this signals balance sheet stress. Engage CA / restructuring advisor.', cls: 'red' };
    }

    function getBenchmarkBanner(de, industry, totalEquity) {
        if (totalEquity < 0 || !isFinite(de)) return { cls: 'danger', html: '<strong>⚠ Negative or zero equity.</strong> Industry benchmark comparison is not meaningful at this point. Focus on equity restoration before benchmarking.' };
        const b = benchmarks[industry];
        if (!b) return null;
        let cls, msg;
        if (de >= b.low && de <= b.high) {
            cls = 'success';
            msg = '<strong>✓ In line with industry.</strong> Your D/E of <strong>' + fmtRatio(de) + '</strong> sits within the typical ' + b.label + ' band of ' + b.low.toFixed(1) + ' to ' + b.high.toFixed(1) + '. ' + b.note;
        } else if (de < b.low) {
            cls = 'info';
            msg = '<strong>ℹ Below industry band.</strong> Your D/E of <strong>' + fmtRatio(de) + '</strong> is below the typical ' + b.label + ' band of ' + b.low.toFixed(1) + ' to ' + b.high.toFixed(1) + '. You may be under-leveraged — consider whether debt tax-shield benefit is being missed.';
        } else {
            cls = 'warn';
            msg = '<strong>⚠ Above industry band.</strong> Your D/E of <strong>' + fmtRatio(de) + '</strong> is above the typical ' + b.label + ' band of ' + b.low.toFixed(1) + ' to ' + b.high.toFixed(1) + '. Examine DSCR, interest coverage and covenant headroom.';
        }
        return { cls: cls, html: msg };
    }

    function buildSummaryGrid(r, inp) {
        const cards = [];
        cards.push({ label: 'Long-Term D/E', value: isFinite(r.ltDE) ? fmtRatio(r.ltDE) : '—', highlight: false });
        cards.push({ label: 'Short-Term D/E', value: isFinite(r.stDE) ? fmtRatio(r.stDE) : '—', highlight: false });
        cards.push({ label: 'LT Debt % of Total', value: r.ltDebtToTotalPct.toFixed(0) + '%', highlight: false });
        cards.push({ label: 'ST Debt % of Total', value: r.stDebtToTotalPct.toFixed(0) + '%', highlight: false });
        if (inp.inclLease && inp.ll > 0) {
            const deExLease = r.totalEquity !== 0 ? (r.totalDebt - inp.ll) / r.totalEquity : NaN;
            cards.push({ label: 'D/E (excl. Lease)', value: isFinite(deExLease) ? fmtRatio(deExLease) : '—', highlight: false });
            cards.push({ label: 'Lease Liability Impact', value: '+' + fmtRatio(r.de - deExLease), highlight: true });
        } else {
            cards.push({ label: 'Equity Share Capital', value: fmtINR(inp.esc), highlight: false });
            cards.push({ label: 'Other Equity (Reserves)', value: fmtINR(inp.oe), highlight: false });
        }
        return cards.map(c => '<div class="summary-card' + (c.highlight ? ' highlight' : '') + '"><div class="summary-label">' + c.label + '</div><div class="summary-value">' + c.value + '</div></div>').join('');
    }

    function buildBasisText(inp, r) {
        const inclLeaseTxt = inp.inclLease ? 'Lease liabilities <strong>included</strong> in total debt per ICAI Guidance Note view.' : 'Lease liabilities <strong>excluded</strong> from total debt (covenant / pre-Ind AS 116 view).';
        return 'Computed as <strong>Total Debt ÷ Shareholder\'s Equity</strong> per the ICAI Guidance Note on Schedule III to the Companies Act, 2013. <strong>Numerator</strong>: Long-term Borrowings (' + fmtINR(inp.lt) + ') + Current Maturities of LT Debt (' + fmtINR(inp.cm) + ') + Short-term Borrowings (' + fmtINR(inp.st) + ')' + (inp.inclLease ? ' + Lease Liabilities (' + fmtINR(inp.ll) + ')' : '') + ' = <strong>' + fmtINR(r.totalDebt) + '</strong>. <strong>Denominator</strong>: Equity Share Capital (' + fmtINR(inp.esc) + ') + Other Equity (' + fmtINR(inp.oe) + ') = <strong>' + fmtINR(r.totalEquity) + '</strong>. ' + inclLeaseTxt;
    }

    function buildDisclosureRows(r, inp) {
        const numerator = 'Total Debt = LT Borrowings + Current Maturities + ST Borrowings' + (inp.inclLease ? ' + Lease Liabilities' : '');
        const denominator = 'Equity Share Capital + Other Equity';
        const cur = isFinite(r.de) ? fmtRatio(r.de) : '—';
        const prev = inp.prevDE > 0 ? fmtRatio(inp.prevDE) : '—';
        const pct = (r.yoyVar !== null) ? fmtPct(r.yoyVar) : '—';
        const reasonHtml = r.exceeds25 ? '<br><span style="color:var(--accent-light);font-size:11px;">⚠ Exceeds 25% — written explanation required in notes</span>' : '';
        return '<tr><td>Debt-Equity Ratio</td><td>' + numerator + '</td><td>' + denominator + '</td><td class="num">' + cur + '</td><td class="num">' + prev + '</td><td class="num">' + pct + reasonHtml + '</td></tr>';
    }

    function gaugePosition(de) {
        // Map D/E (0 to 4+) to 0-100% on the gauge
        if (!isFinite(de) || de < 0) return 0;
        if (de >= 4) return 100;
        return (de / 4) * 100;
    }

    // ===== MAIN CALCULATE =====
    function calculate() {
        const inp = readInputs();
        const err = validate(inp);
        const result = document.getElementById('resultSection');
        if (err) {
            alert(err);
            result.classList.remove('visible');
            return;
        }
        const r = computeDE(inp);

        // Verdict card
        const v = getVerdict(r.de, r.totalEquity);
        const vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card' + (v.cls && v.cls !== 'verdict' ? ' ' + v.cls : '');
        document.getElementById('verdictHeadline').textContent = isFinite(r.de) ? 'D/E = ' + fmtRatio(r.de) + ' — ' + v.headline : v.headline;
        document.getElementById('verdictSub').textContent = v.sub;
        document.getElementById('totalDebtVal').textContent = fmtINR(r.totalDebt);
        document.getElementById('totalEquityVal').textContent = fmtINR(r.totalEquity);

        // Gauge
        const marker = document.getElementById('gaugeMarker');
        marker.style.left = gaugePosition(r.de) + '%';

        // Summary grid
        document.getElementById('summaryGrid').innerHTML = buildSummaryGrid(r, inp);

        // Benchmark banner
        const bb = getBenchmarkBanner(r.de, inp.industry, r.totalEquity);
        const bbEl = document.getElementById('benchmarkBanner');
        if (bb) {
            bbEl.className = 'info-banner ' + bb.cls;
            bbEl.innerHTML = bb.html;
            bbEl.style.display = 'block';
        } else {
            bbEl.style.display = 'none';
        }

        // Variance banner
        const vbEl = document.getElementById('varianceBanner');
        if (r.yoyVar !== null) {
            const cls = r.exceeds25 ? 'warn' : 'info';
            const msg = r.exceeds25
                ? '<strong>⚠ 25% threshold breached.</strong> D/E moved from ' + fmtRatio(inp.prevDE) + ' to ' + fmtRatio(r.de) + ' (' + fmtPct(r.yoyVar) + '). Schedule III mandates a written explanation in the notes to accounts. Common reasons: fresh capex debt, IPO repayment, equity infusion, dividend payout, or first-time Ind AS 116 application.'
                : '<strong>Within 25% threshold.</strong> D/E moved from ' + fmtRatio(inp.prevDE) + ' to ' + fmtRatio(r.de) + ' (' + fmtPct(r.yoyVar) + '). No mandatory explanation required, but voluntary disclosure adds to investor confidence.';
            vbEl.className = 'info-banner ' + cls;
            vbEl.innerHTML = msg;
            vbEl.style.display = 'block';
        } else {
            vbEl.style.display = 'none';
        }

        // Basis
        document.getElementById('basisText').innerHTML = buildBasisText(inp, r);

        // Disclosure
        document.getElementById('disclosureRows').innerHTML = buildDisclosureRows(r, inp);

        // Show
        result.classList.add('visible');
        setTimeout(function() { result.scrollIntoView({behavior: 'smooth', block: 'start'}); }, 80);
    }

    // ===== RESET =====
    function reset() {
        ['ltBorrowings', 'currentMaturities', 'stBorrowings', 'leaseLiabilities', 'equityShareCapital', 'otherEquity', 'prevYearDE'].forEach(id => {
            document.getElementById(id).value = '';
        });
        // Reset toggles to defaults
        document.querySelectorAll('#leaseTreatment .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'include';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.querySelectorAll('#industryGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'manufacturing';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('btnCalculate').addEventListener('click', calculate);
    document.getElementById('btnReset').addEventListener('click', reset);

    // Enter key support
    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculate();
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

    // Sticky TOC active state
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
