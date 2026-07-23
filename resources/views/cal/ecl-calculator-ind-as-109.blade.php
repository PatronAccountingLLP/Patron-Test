@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>ECL Calculator Ind AS 109 | Expected Credit Loss Tool</title>
    <meta name="description" content="ECL calculator under Ind AS 109: compute Expected Credit Loss via 3-stage General Approach and Simplified Provision Matrix for trade receivables. Free CA tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ecl-calculator-ind-as-109/">
    <meta property="og:title" content="ECL Calculator (Ind AS 109) — FY 2025-26">
    <meta property="og:description" content="Compute Expected Credit Loss under Ind AS 109. Three-stage General Approach + Provision Matrix for trade receivables. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ecl-calculator-ind-as-109">
    <meta property="og:image" content="/tools/og/ecl-calculator-ind-as-109.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ECL Calculator (Ind AS 109) — FY 2025-26">
    <meta name="twitter:description" content="Three-stage ECL + Provision Matrix for trade receivables. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/ecl-calculator-ind-as-109.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "ECL Calculator (Ind AS 109)",
      "description": "ECL Calculator (Ind AS 109) computes Expected Credit Loss for financial assets under Ind AS 109 Financial Instruments — both General Approach (three-stage model with 12-month or lifetime ECL) and Simplified Approach (provision matrix for trade receivables, contract assets and lease receivables). General Approach supports Stage 1 (no significant increase in credit risk, 12-month ECL), Stage 2 (significant increase in credit risk, lifetime ECL, 30 days past due rebuttable presumption) and Stage 3 (credit-impaired, lifetime ECL, 90 days past due default presumption). Computation uses the standard ECL = PD × LGD × EAD formula where PD is probability of default, LGD is loss given default, EAD is exposure at default. Simplified Approach computes provision matrix across 7 aging buckets (current, 1-30, 31-60, 61-90, 91-180, 181-365, above 365 days) with default rates derived from historical credit loss experience adjusted for forward-looking information. Output includes stage-wise ECL, coverage ratio, journal entry and disclosure narrative aligned with Ind AS 107 Financial Instruments Disclosures.",
      "url": "/tools/ecl-calculator-ind-as-109",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "ECL Calculator (Ind AS 109)", "item": "/tools/ecl-calculator-ind-as-109"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Expected Credit Loss under Ind AS 109?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Expected Credit Loss (ECL) under Ind AS 109 Financial Instruments is the probability-weighted estimate of credit losses on financial assets, recognised on a forward-looking basis. Effective for Ind AS companies from 1 April 2018, it replaces the incurred loss model under Ind AS 39 and AS 30. ECL must reflect an unbiased probability-weighted amount, the time value of money, and reasonable and supportable information including past events, current conditions and forward-looking forecasts."
          }
        },
        {
          "@type": "Question",
          "name": "What is the three-stage ECL model?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Stage 1 covers performing financial assets where credit risk has not significantly increased since initial recognition — 12-month ECL is recognised. Stage 2 covers underperforming assets where credit risk has significantly increased (SICR) — lifetime ECL is recognised. Stage 3 covers credit-impaired assets where default has occurred — lifetime ECL is recognised, and interest revenue is calculated on the net carrying amount (gross less ECL allowance), unlike Stages 1 and 2 which use gross."
          }
        },
        {
          "@type": "Question",
          "name": "What is Significant Increase in Credit Risk (SICR)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SICR is the trigger for moving an asset from Stage 1 to Stage 2 under Ind AS 109. The standard provides a rebuttable presumption that SICR has occurred when contractual payments are more than 30 days past due. Other indicators include credit rating downgrade, adverse change in business or economic conditions, expected forbearance, and significant changes in external market indicators of credit risk. SICR assessment is forward-looking, considering reasonable and supportable information."
          }
        },
        {
          "@type": "Question",
          "name": "What are PD, LGD and EAD in ECL computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Probability of Default (PD) is the likelihood a borrower defaults within a given time horizon — 12-month PD for Stage 1, lifetime PD for Stages 2 and 3. Loss Given Default (LGD) is the expected loss as a percentage of EAD after collateral recoveries. Exposure at Default (EAD) is the gross outstanding exposure at default. The standard formula is ECL = PD × LGD × EAD, optionally discounted at the original effective interest rate."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between General and Simplified Approach?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General Approach applies the three-stage model to financial assets at amortised cost or FVOCI — loans, debt securities, loan commitments, financial guarantees. The entity must track SICR and stage transitions over time. Simplified Approach is permitted for trade receivables, contract assets and lease receivables — entities recognise lifetime ECL from initial recognition without tracking SICR. The simplified approach typically uses a provision matrix based on aging buckets and historical loss rates."
          }
        },
        {
          "@type": "Question",
          "name": "What is a provision matrix for trade receivables?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A provision matrix is the practical expedient under Ind AS 109 Para 5.5.15 for computing lifetime ECL on trade receivables. The matrix specifies provision rates by past-due aging bucket (e.g., 0.5% current, 2% 1-30 days, 5% 31-60 days, 30% 91-180 days, 100% above 365 days). Rates are derived from historical credit loss experience adjusted for current conditions and forward-looking forecasts. Customer segmentation by region, rating or product type may be applied where loss patterns differ."
          }
        },
        {
          "@type": "Question",
          "name": "What is forward-looking information requirement under Ind AS 109?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 109 requires ECL to incorporate reasonable and supportable forward-looking information about future economic conditions — GDP growth, unemployment, inflation, interest rates, sector-specific outlooks. This is a fundamental shift from Ind AS 39 incurred loss model. Entities typically build multiple economic scenarios (base, upside, downside) with assigned probabilities, then compute probability-weighted ECL. Information must be available without undue cost or effort and must be applied consistently across reporting periods."
          }
        },
        {
          "@type": "Question",
          "name": "When is a financial asset considered credit-impaired (Stage 3)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 109 defines a credit-impaired asset as one where one or more events have occurred that have a detrimental impact on estimated future cash flows. Indicators include significant financial difficulty of the issuer, breach of contract such as a default or past due event, lender granting a concession not otherwise considered, probability of bankruptcy, and disappearance of an active market. The standard sets a rebuttable presumption that default occurs no later than 90 days past due."
          }
        },
        {
          "@type": "Question",
          "name": "How does Ind AS 109 differ from Ind AS 39?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 39 used an incurred loss model — credit losses recognised only after objective evidence of impairment existed. Ind AS 109 uses an Expected Credit Loss model — losses recognised on a forward-looking basis from initial recognition. The change brings forward loss recognition, increases provisions in early-stage assets, and requires sophisticated PD/LGD modelling. Total expected losses over a portfolio's lifetime are typically larger and earlier under Ind AS 109, particularly for banks, NBFCs and large corporates."
          }
        },
        {
          "@type": "Question",
          "name": "What is the P&L and balance sheet impact of Ind AS 109?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Initial application of Ind AS 109 typically increased loss allowances substantially compared to Ind AS 39 — banks, NBFCs and lenders saw the largest impact. ECL is recognised in P&L as an impairment loss, with the loss allowance reducing the carrying amount of the financial asset. Each subsequent reporting date requires remeasurement with movements taken to P&L. For FVOCI debt instruments, ECL is recognised in P&L but the allowance does not reduce balance sheet carrying amount."
          }
        },
        {
          "@type": "Question",
          "name": "What disclosures are required under Ind AS 107 for ECL?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind AS 107 Financial Instruments Disclosures requires entities to disclose the credit risk management practices, ECL measurement methodology including key inputs and assumptions, reconciliation of opening to closing loss allowance with movements between stages, gross carrying amount and loss allowance by stage and credit grade, modification of contractual cash flows, write-off policy, and concentration of credit risk. Forward-looking information assumptions and sensitivity analysis are typically included for material portfolios."
          }
        },
        {
          "@type": "Question",
          "name": "How does the ECL framework apply to banks and NBFCs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian Ind AS-compliant NBFCs apply Ind AS 109 ECL framework directly. Scheduled commercial banks currently follow RBI's Income Recognition Asset Classification and Provisioning (IRACP) norms — RBI issued a discussion paper in January 2023 proposing transition to ECL framework with regulatory backstops, prudential floor and special treatment for Stage 3 interest accrual. Co-operative banks may receive separate thresholds. Final RBI guidelines will determine the transition timeline for the banking sector."
          }
        },
        {
          "@type": "Question",
          "name": "Does ECL apply to cash and bank balances?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, in principle. Cash deposits with banks are financial assets subject to ECL under Ind AS 109. However, for high-credit-quality banks (typically AA-rated and above scheduled commercial banks), the ECL is usually negligible due to very low PD and high recovery expectations. Many entities apply a low credit risk practical expedient under Ind AS 109 Para 5.5.10 — assets continue at 12-month ECL even without explicit SICR assessment. Material exposures to weak banks require explicit ECL computation."
          }
        }
      ]
    }
    </script>
@endsection

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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }
        .approach-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #ECFDF5 100%); border: 2px solid var(--primary-light); border-radius: var(--radius); padding: 6px; gap: 6px; margin-bottom: 24px; }
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
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid; }
        .verdict-card.stage-1 { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--success); }
        .verdict-card.stage-2 { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.stage-3 { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.simplified { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--primary); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 600px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .matrix-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 12px; }
        .matrix-table thead th { background: var(--primary); color: #fff; padding: 10px 8px; text-align: right; font-weight: 600; font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        .matrix-table thead th:first-child { text-align: left; border-radius: 6px 0 0 0; }
        .matrix-table thead th:last-child { border-radius: 0 6px 0 0; }
        .matrix-table tbody td { padding: 8px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .matrix-table tbody td:first-child { text-align: left; font-family: var(--font-body); font-weight: 600; color: var(--primary-dark); }
        .matrix-table tbody tr:nth-child(even) { background: var(--surface); }
        .matrix-table tfoot td { padding: 10px 8px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .matrix-table tfoot td:first-child { text-align: left; font-family: var(--font-body); }
        @media (max-width: 600px) {
            .matrix-table { font-size: 10px; }
            .matrix-table thead th, .matrix-table tbody td, .matrix-table tfoot td { padding: 6px 4px; }
        }

        .bucket-row { display: grid; grid-template-columns: 1fr 1fr 100px; gap: 12px; align-items: end; margin-bottom: 14px; }
        @media (max-width: 500px) { .bucket-row { grid-template-columns: 1fr 1fr; } .bucket-row .bucket-label { grid-column: 1 / -1; margin-bottom: -6px; } }
        .bucket-label { font-size: 12px; font-weight: 600; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.5px; padding-bottom: 12px; }
        .bucket-row input { padding: 10px 12px !important; font-size: 14px !important; }

        .journal-entry { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.9; margin: 14px 0; overflow-x: auto; }
        .journal-entry .je-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .journal-entry .je-row { display: grid; grid-template-columns: 1fr 90px 90px; gap: 8px; }
        .journal-entry .je-amt { text-align: right; }
        @media (max-width: 600px) {
            .journal-entry { font-size: 11px; padding: 14px 16px; }
            .journal-entry .je-row { grid-template-columns: 1fr 70px 70px; }
        }

        .approach-block { display: none; }
        .approach-block.active { display: block; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(42,122,95,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }
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
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
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
            .verdict-grid-value { font-size: 17px; }
        }
    </style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#three-stage">Three-Stage Model</a>
        <a href="#provision-matrix">Provision Matrix</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    ECL Calculator (Ind AS 109)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>ECL Calculator <span>(Ind AS 109)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Ind AS 109 Financial Instruments (effective 1 April 2018) replaces the incurred-loss model with a forward-looking Expected Credit Loss (ECL) framework. This calculator handles both regulatory paths — the General Approach (three-stage model with 12-month or lifetime ECL using PD × LGD × EAD) for loans and debt instruments, and the Simplified Approach (provision matrix across aging buckets) for trade receivables, contract assets and lease receivables. Output includes stage classification, ECL amount, coverage ratio, journal entry and disclosure narrative aligned with Ind AS 107.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Expected Credit Loss</h2>
            <p class="calc-intro">Pick your approach — General for loans and debt instruments, or Simplified for trade receivables. The calculator applies the Ind AS 109 methodology and generates a journal entry plus disclosure narrative.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="approachGroup" role="tablist" aria-label="ECL approach">
                <button type="button" class="toggle-btn active" data-value="general" role="tab" aria-selected="true">General Approach (3-Stage)</button>
                <button type="button" class="toggle-btn" data-value="simplified" role="tab" aria-selected="false">Simplified (Provision Matrix)</button>
            </div>

            <!-- ========== GENERAL APPROACH ========== -->
            <div class="approach-block active" id="generalBlock">
                <div class="calc-section-title">Asset Classification</div>

                <div class="form-group" style="margin-bottom:20px;">
                    <label>Stage Classification</label>
                    <div class="toggle-group stacked-mobile" id="stageGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="1" role="tab" aria-selected="true">Stage 1 (Performing)</button>
                        <button type="button" class="toggle-btn" data-value="2" role="tab" aria-selected="false">Stage 2 (SICR)</button>
                        <button type="button" class="toggle-btn" data-value="3" role="tab" aria-selected="false">Stage 3 (Credit-Impaired)</button>
                    </div>
                    <span class="helper" id="stageHelper">Stage 1: No SICR — recognise 12-month ECL. Interest on gross carrying amount.</span>
                </div>

                <div class="calc-section-title">ECL Components (PD × LGD × EAD)</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="ead">Exposure At Default (EAD) — ₹</label>
                        <input type="number" id="ead" min="0" step="any" placeholder="e.g. 10000000" inputmode="decimal">
                        <span class="helper">Outstanding gross exposure including accrued interest.</span>
                    </div>
                    <div class="form-group">
                        <label for="pd">Probability of Default (PD) — %</label>
                        <input type="number" id="pd" min="0" max="100" step="0.01" placeholder="e.g. 2.5" inputmode="decimal">
                        <span class="helper" id="pdHelper">12-month PD for Stage 1 (typical 0.5-3% for investment-grade).</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="lgd">Loss Given Default (LGD) — %</label>
                        <input type="number" id="lgd" min="0" max="100" step="0.01" placeholder="e.g. 45" inputmode="decimal">
                        <span class="helper">Expected loss as % of EAD after collateral recoveries (typical 30-60% for unsecured).</span>
                    </div>
                    <div class="form-group">
                        <label for="discount">Discount Factor — Optional</label>
                        <input type="number" id="discount" min="0" max="100" step="0.01" placeholder="e.g. 95" inputmode="decimal">
                        <span class="helper">Time-value discount factor as % of nominal (e.g. 95 for 5% discount). Leave blank for no discounting.</span>
                    </div>
                </div>

                <button type="button" class="btn-calculate" id="btnCalcGeneral">Compute ECL (General Approach)</button>
                <button type="button" class="btn-reset" id="btnResetGeneral">Reset</button>
            </div>

            <!-- ========== SIMPLIFIED APPROACH ========== -->
            <div class="approach-block" id="simplifiedBlock">
                <div class="calc-section-title">Provision Matrix — Trade Receivables Aging</div>

                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:16px;line-height:1.65;">Enter outstanding receivable amounts in each aging bucket. Default rates are illustrative — derive from your historical credit loss experience adjusted for forward-looking information per Ind AS 109 Para 5.5.15.</p>

                <div class="bucket-row">
                    <div class="bucket-label">Current (Not Due)</div>
                    <input type="number" id="bucket0" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate0" min="0" max="100" step="0.01" value="0.5" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">1–30 days past due</div>
                    <input type="number" id="bucket1" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate1" min="0" max="100" step="0.01" value="2" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">31–60 days past due</div>
                    <input type="number" id="bucket2" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate2" min="0" max="100" step="0.01" value="5" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">61–90 days past due</div>
                    <input type="number" id="bucket3" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate3" min="0" max="100" step="0.01" value="15" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">91–180 days past due</div>
                    <input type="number" id="bucket4" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate4" min="0" max="100" step="0.01" value="30" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">181–365 days past due</div>
                    <input type="number" id="bucket5" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate5" min="0" max="100" step="0.01" value="60" inputmode="decimal">
                </div>
                <div class="bucket-row">
                    <div class="bucket-label">&gt; 365 days past due</div>
                    <input type="number" id="bucket6" min="0" step="any" placeholder="Amount ₹" inputmode="decimal">
                    <input type="number" id="rate6" min="0" max="100" step="0.01" value="100" inputmode="decimal">
                </div>

                <div style="font-size:11px;color:var(--text-muted);margin:8px 0 4px;">Left column: bucket name. Centre: outstanding ₹. Right: default rate %.</div>

                <button type="button" class="btn-calculate" id="btnCalcSimplified">Compute ECL (Provision Matrix)</button>
                <button type="button" class="btn-reset" id="btnResetSimplified">Reset</button>
            </div>

            <!-- ========== RESULT SECTION ========== -->
            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Expected Credit Loss</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="verdict-grid" id="verdictGrid"></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner info" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div id="matrixOutput"></div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Journal Entry — Year-End</h3>
                <div class="journal-entry" id="journalEntry"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The calculator implements both approaches permitted under Ind AS 109 Financial Instruments. Choose General Approach for loans, debt securities, loan commitments and financial guarantees; Simplified Approach for trade receivables, contract assets and lease receivables.</p>

            <h3>General Approach — Three-Stage Model</h3>
            <p>Classify the asset into Stage 1, 2 or 3 based on credit risk evolution since initial recognition. Apply the standard ECL formula to compute the loss allowance. The PD horizon depends on stage — 12-month PD for Stage 1, lifetime PD for Stages 2 and 3.</p>

            <div class="formula-box">
<span class="label">ECL</span> = PD × LGD × EAD
<span class="label">PD</span>  Probability of Default (12-month or lifetime)
<span class="label">LGD</span> Loss Given Default (% of EAD after recoveries)
<span class="label">EAD</span> Exposure At Default (gross outstanding amount)
            </div>

            <h3>Simplified Approach — Provision Matrix</h3>
            <p>For trade receivables and similar financial assets, Ind AS 109 Para 5.5.15 permits the practical expedient of a provision matrix. Receivables are grouped into aging buckets, each with a historical loss rate adjusted for current and forward-looking conditions. Bucket-wise ECL is summed for total lifetime ECL.</p>

            <div class="formula-box">
<span class="label">Lifetime ECL</span> = Σ (Bucket Amount × Bucket Default Rate %)
<span class="label">Coverage Ratio</span> = Total ECL ÷ Total Receivables × 100
            </div>

            <h3>Stage Classification Drivers</h3>
            <ul>
                <li><strong>Stage 1 (Performing):</strong> No significant increase in credit risk since initial recognition. 12-month ECL recognised. Interest on gross carrying amount.</li>
                <li><strong>Stage 2 (Underperforming):</strong> Significant Increase in Credit Risk (SICR). Lifetime ECL recognised. Rebuttable presumption: 30 days past due. Interest on gross.</li>
                <li><strong>Stage 3 (Credit-Impaired):</strong> Default has occurred. Lifetime ECL recognised. Rebuttable presumption: 90 days past due. Interest on net carrying amount (gross − ECL).</li>
            </ul>

            <h3>Forward-Looking Information</h3>
            <p>Ind AS 109 mandates forward-looking ECL — entities must incorporate reasonable and supportable information about future economic conditions (GDP, unemployment, inflation, sector outlooks). Multiple scenarios (base, upside, downside) with assigned probabilities are typically used to compute probability-weighted ECL. This is a fundamental shift from the Ind AS 39 incurred loss model and significantly increases ECL provisions for early-stage assets.</p>
        </section>

        <section class="content-section" id="three-stage">
            <h2>Three-Stage Model — Detailed Breakdown</h2>

            <table class="rate-table">
                <thead>
                    <tr><th>Aspect</th><th>Stage 1</th><th>Stage 2</th><th>Stage 3</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Credit Status</strong></td><td>Performing</td><td>Underperforming (SICR)</td><td>Credit-Impaired</td></tr>
                    <tr><td><strong>ECL Horizon</strong></td><td>12-month</td><td>Lifetime</td><td>Lifetime</td></tr>
                    <tr><td><strong>Trigger (Rebuttable)</strong></td><td>None — initial recognition</td><td>30+ DPD</td><td>90+ DPD or default</td></tr>
                    <tr><td><strong>PD Type</strong></td><td>12-month PD</td><td>Lifetime PD</td><td>Lifetime PD ≈ 100%</td></tr>
                    <tr><td><strong>Interest Revenue Basis</strong></td><td>Gross carrying amount</td><td>Gross carrying amount</td><td>Net carrying amount</td></tr>
                    <tr><td><strong>Typical PD Range</strong></td><td>0.5% – 5%</td><td>5% – 30%</td><td>50% – 100%</td></tr>
                </tbody>
            </table>

            <h3>SICR Indicators (Stage 1 → Stage 2)</h3>
            <ul>
                <li>Contractual payments more than 30 days past due (rebuttable presumption)</li>
                <li>Significant change in external credit rating or internal credit grade</li>
                <li>Adverse changes in business, financial or economic conditions</li>
                <li>Expected forbearance or restructuring</li>
                <li>Significant decrease in operating results or cash flows</li>
                <li>Significant changes in the value of collateral or quality of guarantees</li>
                <li>Industry-specific stress indicators (sector-wide downgrades)</li>
            </ul>

            <h3>Default Indicators (Stage 2 → Stage 3)</h3>
            <ul>
                <li>Contractual payments more than 90 days past due (rebuttable presumption)</li>
                <li>Significant financial difficulty of the issuer</li>
                <li>Breach of contract — default or past due event</li>
                <li>Lender granting a concession not otherwise considered (forbearance)</li>
                <li>Probability of bankruptcy or other financial reorganisation</li>
                <li>Disappearance of an active market for the financial asset</li>
            </ul>

            <div class="callout warn">
                <p><strong>Backwards transition:</strong> An asset can move from Stage 3 back to Stage 1 if credit risk improves significantly and remains improved for a probationary period. RBI's discussion paper on ECL for banks proposes a minimum 6-month probationary period in Stage 3 even after irregularities are corrected, before reclassification to Stage 1.</p>
            </div>

            <p>For full text of Ind AS 109, refer to the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> notification on Indian Accounting Standards. The international equivalent IFRS 9 is available at <a href="https://www.ifrs.org/" target="_blank" rel="noopener">IFRS Foundation</a>. ICAI Educational Material on Ind AS 109 is hosted on the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> portal, and the underlying Companies Act framework is codified at <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>. For banks and NBFCs, refer to <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a>'s discussion paper on the proposed ECL framework for banks (January 2023).</p>
        </section>

        <section class="content-section" id="provision-matrix">
            <h2>Provision Matrix — Practical Guidance</h2>
            <p>The provision matrix is the most common approach for trade receivables under Ind AS 109 Para 5.5.15. The illustrative rates below reflect typical Indian SME and B2B credit-loss patterns — derive your own from historical experience and adjust for forward-looking information.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Aging Bucket</th><th>Illustrative Rate</th><th>Practical Range</th><th>Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Current (Not Due)</strong></td><td>0.5%</td><td>0.1% – 1%</td><td>Reflects normal commercial credit loss</td></tr>
                    <tr><td><strong>1–30 days past due</strong></td><td>2%</td><td>1% – 3%</td><td>Mild past due; most recoverable</td></tr>
                    <tr><td><strong>31–60 days past due</strong></td><td>5%</td><td>3% – 8%</td><td>Approaching SICR threshold</td></tr>
                    <tr><td><strong>61–90 days past due</strong></td><td>15%</td><td>10% – 25%</td><td>SICR likely; collection effort intensified</td></tr>
                    <tr><td><strong>91–180 days past due</strong></td><td>30%</td><td>25% – 50%</td><td>Default presumption — credit-impaired</td></tr>
                    <tr><td><strong>181–365 days past due</strong></td><td>60%</td><td>50% – 80%</td><td>Recovery uncertain; legal action common</td></tr>
                    <tr><td><strong>&gt; 365 days past due</strong></td><td>100%</td><td>75% – 100%</td><td>Provide fully unless specific recovery</td></tr>
                </tbody>
            </table>

            <h3>Deriving Your Own Rates</h3>
            <ol>
                <li><strong>Collect historical data:</strong> Track invoice-level payment behaviour over at least 3-5 years</li>
                <li><strong>Compute roll-rates:</strong> What % of receivables in bucket N moved to bucket N+1 vs got collected?</li>
                <li><strong>Calculate cumulative loss:</strong> For each starting bucket, compute eventual write-off as % of original</li>
                <li><strong>Segment by customer profile:</strong> B2C vs B2B, geography, product line, customer rating — apply separately if loss patterns differ</li>
                <li><strong>Adjust for forward-looking:</strong> Apply scalar adjustments for current macroeconomic outlook (GDP, sector stress, interest rate cycle)</li>
                <li><strong>Document methodology:</strong> Working paper showing data sources, methodology, key judgements and probability weights</li>
            </ol>

            <div class="callout">
                <p><strong>Audit defence tip:</strong> Auditors and <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspections frequently challenge provision matrix rates as too low or unsupported by data. Maintain a clear back-up showing historical loss rates, the adjustment factor for forward-looking information, and sensitivity analysis (impact of ±20% movement in default rates on ECL).</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with Ind AS 109 ECL Implementation?</h3>
            <p>Patron Accounting LLP supports CFO offices with ECL model design, provision matrix derivation from historical data, forward-looking scenario building, audit working papers and Ind AS 107 disclosures — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ECL%20Calculator.%20I%20need%20help%20with%20Ind%20AS%20109%20ECL%20implementation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Expected Credit Loss under Ind AS 109?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Expected Credit Loss (ECL) under Ind AS 109 Financial Instruments is the probability-weighted estimate of credit losses on financial assets, recognised on a forward-looking basis. Effective for Ind AS companies from 1 April 2018, it replaces the incurred loss model under Ind AS 39 and AS 30. ECL must reflect an unbiased probability-weighted amount, the time value of money, and reasonable and supportable information including past events, current conditions and forward-looking forecasts.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the three-stage ECL model?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Stage 1 covers performing financial assets where credit risk has not significantly increased since initial recognition — 12-month ECL is recognised. Stage 2 covers underperforming assets where credit risk has significantly increased (SICR) — lifetime ECL is recognised. Stage 3 covers credit-impaired assets where default has occurred — lifetime ECL is recognised, and interest revenue is calculated on the net carrying amount (gross less ECL allowance), unlike Stages 1 and 2 which use gross.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Significant Increase in Credit Risk (SICR)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SICR is the trigger for moving an asset from Stage 1 to Stage 2 under Ind AS 109. The standard provides a rebuttable presumption that SICR has occurred when contractual payments are more than 30 days past due. Other indicators include credit rating downgrade, adverse change in business or economic conditions, expected forbearance, and significant changes in external market indicators of credit risk. SICR assessment is forward-looking, considering reasonable and supportable information.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are PD, LGD and EAD in ECL computation?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Probability of Default (PD) is the likelihood a borrower defaults within a given time horizon — 12-month PD for Stage 1, lifetime PD for Stages 2 and 3. Loss Given Default (LGD) is the expected loss as a percentage of EAD after collateral recoveries. Exposure at Default (EAD) is the gross outstanding exposure at default. The standard formula is ECL = PD × LGD × EAD, optionally discounted at the original effective interest rate.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between General and Simplified Approach?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">General Approach applies the three-stage model to financial assets at amortised cost or FVOCI — loans, debt securities, loan commitments, financial guarantees. The entity must track SICR and stage transitions over time. Simplified Approach is permitted for trade receivables, contract assets and lease receivables — entities recognise lifetime ECL from initial recognition without tracking SICR. The simplified approach typically uses a provision matrix based on aging buckets and historical loss rates.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a provision matrix for trade receivables?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A provision matrix is the practical expedient under Ind AS 109 Para 5.5.15 for computing lifetime ECL on trade receivables. The matrix specifies provision rates by past-due aging bucket (e.g., 0.5% current, 2% 1-30 days, 5% 31-60 days, 30% 91-180 days, 100% above 365 days). Rates are derived from historical credit loss experience adjusted for current conditions and forward-looking forecasts. Customer segmentation by region, rating or product type may be applied where loss patterns differ.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is forward-looking information requirement under Ind AS 109?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 109 requires ECL to incorporate reasonable and supportable forward-looking information about future economic conditions — GDP growth, unemployment, inflation, interest rates, sector-specific outlooks. This is a fundamental shift from Ind AS 39 incurred loss model. Entities typically build multiple economic scenarios (base, upside, downside) with assigned probabilities, then compute probability-weighted ECL. Information must be available without undue cost or effort and must be applied consistently across reporting periods.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">When is a financial asset considered credit-impaired (Stage 3)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 109 defines a credit-impaired asset as one where one or more events have occurred that have a detrimental impact on estimated future cash flows. Indicators include significant financial difficulty of the issuer, breach of contract such as a default or past due event, lender granting a concession not otherwise considered, probability of bankruptcy, and disappearance of an active market. The standard sets a rebuttable presumption that default occurs no later than 90 days past due.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does Ind AS 109 differ from Ind AS 39?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 39 used an incurred loss model — credit losses recognised only after objective evidence of impairment existed. Ind AS 109 uses an Expected Credit Loss model — losses recognised on a forward-looking basis from initial recognition. The change brings forward loss recognition, increases provisions in early-stage assets, and requires sophisticated PD/LGD modelling. Total expected losses over a portfolio's lifetime are typically larger and earlier under Ind AS 109, particularly for banks, NBFCs and large corporates.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the P&amp;L and balance sheet impact of Ind AS 109?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Initial application of Ind AS 109 typically increased loss allowances substantially compared to Ind AS 39 — banks, NBFCs and lenders saw the largest impact. ECL is recognised in P&amp;L as an impairment loss, with the loss allowance reducing the carrying amount of the financial asset. Each subsequent reporting date requires remeasurement with movements taken to P&amp;L. For FVOCI debt instruments, ECL is recognised in P&amp;L but the allowance does not reduce balance sheet carrying amount.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What disclosures are required under Ind AS 107 for ECL?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Ind AS 107 Financial Instruments Disclosures requires entities to disclose the credit risk management practices, ECL measurement methodology including key inputs and assumptions, reconciliation of opening to closing loss allowance with movements between stages, gross carrying amount and loss allowance by stage and credit grade, modification of contractual cash flows, write-off policy, and concentration of credit risk. Forward-looking information assumptions and sensitivity analysis are typically included for material portfolios.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does the ECL framework apply to banks and NBFCs?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Indian Ind AS-compliant NBFCs apply Ind AS 109 ECL framework directly. Scheduled commercial banks currently follow RBI's Income Recognition Asset Classification and Provisioning (IRACP) norms — RBI issued a discussion paper in January 2023 proposing transition to ECL framework with regulatory backstops, prudential floor and special treatment for Stage 3 interest accrual. Co-operative banks may receive separate thresholds. Final RBI guidelines will determine the transition timeline for the banking sector.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does ECL apply to cash and bank balances?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, in principle. Cash deposits with banks are financial assets subject to ECL under Ind AS 109. However, for high-credit-quality banks (typically AA-rated and above scheduled commercial banks), the ECL is usually negligible due to very low PD and high recovery expectations. Many entities apply a low credit risk practical expedient under Ind AS 109 Para 5.5.10 — assets continue at 12-month ECL even without explicit SICR assessment. Material exposures to weak banks require explicit ECL computation.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Ind AS 109 Implementation</h3>
            <p>ECL model design, provision matrix derivation, audit working papers and Ind AS 107 disclosures — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ECL%20Calculator.%20I%20need%20help%20with%20Ind%20AS%20109%20ECL%20implementation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/actuarial-valuation-services-for-employee-benefits" class="sidebar-link">Actuarial Valuation<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Calculator (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
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

    // ===== TOGGLE GROUPS =====
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

    // Approach toggle
    setupToggleGroup('approachGroup', function() {
        const v = getActiveValue('approachGroup');
        document.getElementById('generalBlock').classList.toggle('active', v === 'general');
        document.getElementById('simplifiedBlock').classList.toggle('active', v === 'simplified');
        document.getElementById('resultSection').classList.remove('visible');
    });

    // Stage toggle with helper update
    setupToggleGroup('stageGroup', function() {
        const stage = getActiveValue('stageGroup');
        const stageHelper = document.getElementById('stageHelper');
        const pdHelper = document.getElementById('pdHelper');
        if (stage === '1') {
            stageHelper.textContent = 'Stage 1: No SICR — recognise 12-month ECL. Interest on gross carrying amount.';
            pdHelper.textContent = '12-month PD for Stage 1 (typical 0.5-3% for investment-grade).';
        } else if (stage === '2') {
            stageHelper.textContent = 'Stage 2: SICR triggered (e.g. 30+ DPD) — recognise lifetime ECL. Interest on gross.';
            pdHelper.textContent = 'Lifetime PD for Stage 2 (typical 5-30% depending on residual life).';
        } else {
            stageHelper.textContent = 'Stage 3: Credit-impaired (e.g. 90+ DPD or default) — lifetime ECL. Interest on net carrying amount.';
            pdHelper.textContent = 'Lifetime PD for Stage 3 (typical 50-100%; often near 100% post-default).';
        }
    });

    // ===== FORMATTING =====
    function fmtINR(num) {
        if (num === undefined || num === null || isNaN(num)) return '₹0';
        const sign = num < 0 ? '-' : '';
        const abs = Math.abs(num);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtINRDecimal(num) {
        return num.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }

    // ===== GENERAL APPROACH =====
    function computeGeneral() {
        const stage = getActiveValue('stageGroup');
        const ead = parseFloat(document.getElementById('ead').value) || 0;
        const pd = parseFloat(document.getElementById('pd').value) || 0;
        const lgd = parseFloat(document.getElementById('lgd').value) || 0;
        const discountInput = document.getElementById('discount').value;
        const discount = discountInput ? parseFloat(discountInput) : 100;

        if (ead <= 0) { alert('Please enter a positive EAD value.'); return; }
        if (pd <= 0 || pd > 100) { alert('PD must be between 0 and 100%.'); return; }
        if (lgd <= 0 || lgd > 100) { alert('LGD must be between 0 and 100%.'); return; }
        if (discount <= 0 || discount > 100) { alert('Discount factor must be between 0 and 100%.'); return; }

        const ecl = ead * (pd / 100) * (lgd / 100) * (discount / 100);
        const coverageRatio = (ecl / ead) * 100;

        renderGeneralResult({
            stage: stage,
            ead: ead,
            pd: pd,
            lgd: lgd,
            discount: discount,
            ecl: ecl,
            coverageRatio: coverageRatio
        });
    }

    function renderGeneralResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card stage-' + r.stage;

        document.getElementById('verdictLabel').textContent = 'Stage ' + r.stage + ' — ' + (r.stage === '1' ? '12-Month ECL' : 'Lifetime ECL');
        const stageDescriptions = {
            '1': 'Performing Asset (No SICR)',
            '2': 'Underperforming Asset (SICR)',
            '3': 'Credit-Impaired Asset'
        };
        document.getElementById('verdictHeadline').textContent = stageDescriptions[r.stage];

        const grid = document.getElementById('verdictGrid');
        grid.innerHTML =
            '<div class="verdict-grid-item"><div class="verdict-grid-label">EAD</div><div class="verdict-grid-value">' + fmtINR(r.ead) + '</div></div>' +
            '<div class="verdict-grid-item"><div class="verdict-grid-label">ECL</div><div class="verdict-grid-value">' + fmtINR(r.ecl) + '</div></div>' +
            '<div class="verdict-grid-item"><div class="verdict-grid-label">Coverage Ratio</div><div class="verdict-grid-value">' + r.coverageRatio.toFixed(2) + '%</div></div>';

        const summary = document.getElementById('summaryGrid');
        summary.innerHTML = '';
        const items = [
            {label: 'Stage', value: 'Stage ' + r.stage, highlight: true},
            {label: 'PD Type', value: r.stage === '1' ? '12-month' : 'Lifetime'},
            {label: 'PD', value: r.pd.toFixed(2) + '%'},
            {label: 'LGD', value: r.lgd.toFixed(2) + '%'},
            {label: 'Discount Factor', value: r.discount.toFixed(2) + '%'},
            {label: 'Interest Basis', value: r.stage === '3' ? 'Net Carrying' : 'Gross Carrying'}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            summary.appendChild(c);
        });

        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '<strong>Stage ' + r.stage + ' classification confirmed.</strong> ';
        if (r.stage === '1') {
            advHtml += 'No significant increase in credit risk since initial recognition. ECL is computed on a 12-month basis. Continue monitoring credit indicators — move to Stage 2 if SICR triggers (e.g., 30+ DPD, rating downgrade).';
            advisory.className = 'info-banner success';
        } else if (r.stage === '2') {
            advHtml += 'Significant increase in credit risk since initial recognition. Lifetime ECL recognised. Reassess at each reporting date — backwards transition to Stage 1 requires sustained improvement in credit indicators.';
            advisory.className = 'info-banner warn';
        } else {
            advHtml += 'Credit-impaired asset — default has occurred. Lifetime ECL recognised. Interest revenue from next period is computed on net carrying amount (gross less ECL). RBI proposed framework requires minimum 6-month probationary period before backwards transition.';
            advisory.className = 'info-banner danger';
        }
        advisory.innerHTML = advHtml;

        let basis = '<strong>General Approach (3-Stage Model)</strong> per Ind AS 109 Para 5.5.<br>';
        basis += 'ECL = PD × LGD × EAD = ' + r.pd + '% × ' + r.lgd + '% × ₹' + fmtINRDecimal(r.ead);
        if (r.discount < 100) basis += ' × ' + r.discount + '% (discount)';
        basis += ' = <strong>₹' + fmtINRDecimal(r.ecl) + '</strong>.<br>';
        basis += 'Coverage ratio = ECL ÷ EAD = ' + r.coverageRatio.toFixed(2) + '%.<br>';
        basis += '<em>Stage rationale:</em> ' + (r.stage === '1' ? 'Asset performing; no SICR identified; 12-month PD horizon applied.' : r.stage === '2' ? 'Significant increase in credit risk identified; lifetime PD horizon applied.' : 'Credit-impaired; lifetime PD ≈ 100%; interest on net carrying amount.');
        document.getElementById('basisText').innerHTML = basis;

        document.getElementById('matrixOutput').innerHTML = '';

        // Journal entry
        const je = document.getElementById('journalEntry');
        let jeHtml = '<span class="je-label">ECL Recognition (Year-End)</span>';
        jeHtml += '<div class="je-row"><span>Impairment Loss / Bad Debt Provision A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(r.ecl) + '</span><span></span></div>';
        jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Loss Allowance — ECL A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(r.ecl) + '</span></div>';
        jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being expected credit loss recognised on Stage ' + r.stage + ' financial asset per Ind AS 109)</span><span></span><span></span></div>';
        je.innerHTML = jeHtml;

        showResults();
    }

    // ===== SIMPLIFIED APPROACH =====
    function computeSimplified() {
        const buckets = [
            {label: 'Current (Not Due)', i: 0},
            {label: '1–30 days', i: 1},
            {label: '31–60 days', i: 2},
            {label: '61–90 days', i: 3},
            {label: '91–180 days', i: 4},
            {label: '181–365 days', i: 5},
            {label: '> 365 days', i: 6}
        ];
        let totalReceivables = 0;
        let totalEcl = 0;
        const rows = [];

        for (const b of buckets) {
            const amt = parseFloat(document.getElementById('bucket' + b.i).value) || 0;
            const rate = parseFloat(document.getElementById('rate' + b.i).value) || 0;
            const ecl = amt * (rate / 100);
            totalReceivables += amt;
            totalEcl += ecl;
            rows.push({label: b.label, amount: amt, rate: rate, ecl: ecl});
        }

        if (totalReceivables <= 0) { alert('Please enter at least one receivable amount.'); return; }

        const coverageRatio = (totalEcl / totalReceivables) * 100;

        renderSimplifiedResult({
            rows: rows,
            totalReceivables: totalReceivables,
            totalEcl: totalEcl,
            coverageRatio: coverageRatio
        });
    }

    function renderSimplifiedResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card simplified';

        document.getElementById('verdictLabel').textContent = 'Simplified Approach — Lifetime ECL';
        document.getElementById('verdictHeadline').textContent = 'Trade Receivables Provision Matrix';

        const grid = document.getElementById('verdictGrid');
        grid.innerHTML =
            '<div class="verdict-grid-item"><div class="verdict-grid-label">Total Receivables</div><div class="verdict-grid-value">' + fmtINR(r.totalReceivables) + '</div></div>' +
            '<div class="verdict-grid-item"><div class="verdict-grid-label">Total ECL</div><div class="verdict-grid-value">' + fmtINR(r.totalEcl) + '</div></div>' +
            '<div class="verdict-grid-item"><div class="verdict-grid-label">Coverage Ratio</div><div class="verdict-grid-value">' + r.coverageRatio.toFixed(2) + '%</div></div>';

        const summary = document.getElementById('summaryGrid');
        summary.innerHTML = '';
        const items = [
            {label: 'Approach', value: 'Simplified', highlight: true},
            {label: 'ECL Horizon', value: 'Lifetime'},
            {label: 'Aging Buckets', value: '7'},
            {label: 'Total Receivables', value: fmtINR(r.totalReceivables)},
            {label: 'Total ECL', value: fmtINR(r.totalEcl)},
            {label: 'Net Carrying', value: fmtINR(r.totalReceivables - r.totalEcl)}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            summary.appendChild(c);
        });

        const advisory = document.getElementById('advisoryBanner');
        advisory.className = 'info-banner success';
        let advHtml = '<strong>Simplified Approach applied.</strong> Lifetime ECL recognised on all trade receivables — no SICR tracking required per Ind AS 109 Para 5.5.15. ';
        if (r.coverageRatio > 30) {
            advHtml += '<br><strong>High coverage ratio (' + r.coverageRatio.toFixed(2) + '%):</strong> Significant credit risk concentration in older buckets. Review credit policy and collection effort.';
        } else if (r.coverageRatio < 1 && r.totalReceivables > 0) {
            advHtml += '<br><strong>Low coverage ratio (' + r.coverageRatio.toFixed(2) + '%):</strong> Verify default rates against historical loss experience and forward-looking forecasts.';
        }
        advisory.innerHTML = advHtml;

        let basis = '<strong>Simplified Approach (Provision Matrix)</strong> per Ind AS 109 Para 5.5.15. ';
        basis += 'Total Receivables: ₹' + fmtINRDecimal(r.totalReceivables) + '. Total Lifetime ECL: ₹' + fmtINRDecimal(r.totalEcl) + '. ';
        basis += 'Coverage ratio: ' + r.coverageRatio.toFixed(2) + '%. Default rates should be derived from historical credit loss experience adjusted for current conditions and forward-looking information.';
        document.getElementById('basisText').innerHTML = basis;

        // Matrix output table
        let matrixHtml = '<h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Provision Matrix — Bucket Breakdown</h3>';
        matrixHtml += '<div style="overflow-x:auto;"><table class="matrix-table">';
        matrixHtml += '<thead><tr><th>Aging Bucket</th><th>Receivable</th><th>Rate %</th><th>ECL</th></tr></thead>';
        matrixHtml += '<tbody>';
        r.rows.forEach(function(row) {
            matrixHtml += '<tr><td>' + row.label + '</td>';
            matrixHtml += '<td>' + fmtINRDecimal(row.amount) + '</td>';
            matrixHtml += '<td>' + row.rate.toFixed(2) + '%</td>';
            matrixHtml += '<td>' + fmtINRDecimal(row.ecl) + '</td></tr>';
        });
        matrixHtml += '</tbody>';
        matrixHtml += '<tfoot><tr><td>Total</td>';
        matrixHtml += '<td>' + fmtINRDecimal(r.totalReceivables) + '</td>';
        matrixHtml += '<td>' + r.coverageRatio.toFixed(2) + '%</td>';
        matrixHtml += '<td>' + fmtINRDecimal(r.totalEcl) + '</td></tr></tfoot>';
        matrixHtml += '</table></div>';
        document.getElementById('matrixOutput').innerHTML = matrixHtml;

        // Journal entry
        const je = document.getElementById('journalEntry');
        let jeHtml = '<span class="je-label">ECL Recognition (Year-End)</span>';
        jeHtml += '<div class="je-row"><span>Impairment Loss / Bad Debt Provision A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(r.totalEcl) + '</span><span></span></div>';
        jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Loss Allowance — Trade Receivables A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(r.totalEcl) + '</span></div>';
        jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being lifetime ECL on trade receivables per Ind AS 109 simplified approach)</span><span></span><span></span></div>';
        je.innerHTML = jeHtml;

        showResults();
    }

    function showResults() {
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalcGeneral').addEventListener('click', computeGeneral);
    document.getElementById('btnCalcSimplified').addEventListener('click', computeSimplified);

    document.getElementById('btnResetGeneral').addEventListener('click', function() {
        ['ead', 'pd', 'lgd', 'discount'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        document.querySelectorAll('#stageGroup .toggle-btn').forEach(function(b, i) {
            b.classList.toggle('active', i === 0);
            b.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
        });
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.getElementById('btnResetSimplified').addEventListener('click', function() {
        for (let i = 0; i < 7; i++) {
            document.getElementById('bucket' + i).value = '';
        }
        const defaults = [0.5, 2, 5, 15, 30, 60, 100];
        for (let i = 0; i < 7; i++) {
            document.getElementById('rate' + i).value = defaults[i];
        }
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const approach = getActiveValue('approachGroup');
                if (approach === 'general') document.getElementById('btnCalcGeneral').click();
                else document.getElementById('btnCalcSimplified').click();
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
